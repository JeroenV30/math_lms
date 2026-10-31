<?php

namespace App\Services;

use App\ValueObjects\Exercise;
use App\ValueObjects\Module;
use Normalizer;
use Throwable;

/**
 * Zoekt dubbelingen in de content, binnen een module, tussen modules en tussen domeinen:
 *
 * - personen of tijdlijngebeurtenissen die twee keer voorkomen onder een andere id
 *   ("pippijn" naast "pepijn-de-korte"); tussen domeinen hoort dezelfde persoon of
 *   gebeurtenis dezelfde id te hebben, zodat de app ze aan elkaar koppelt;
 * - dezelfde id in twee domeinen voor iets anders (dan koppelt de app ten onrechte);
 * - identieke oefeningen of toetsvragen (een toetsvraag die ook als oefening bestaat, is weggegeven);
 * - dubbele begrippen, leerdoelen en verwijzingen in één module.json;
 * - letterlijk herhaalde alinea's in de lessen van één cursus.
 */
class DuplicateChecker
{
    /** Vanaf deze gelijkenis (0–1) heten twee namen of titels "bijna gelijk". */
    private const SIMILAR = 0.8;

    private const SIMILAR_TITLE = 0.6;

    /** Kortere alinea's (genormaliseerd, in tekens) mogen zich herhalen: "Probeer het eerst zelf." */
    private const MIN_PARAGRAPH = 120;

    /** @var list<string> */
    private array $errors = [];

    public function __construct(private readonly CourseRegistry $courses) {}

    /**
     * @return list<string> gevonden dubbelingen
     */
    public function check(): array
    {
        $this->errors = [];
        $people = [];
        $events = [];

        foreach ($this->courses->ids() as $course) {
            $content = $this->courses->for($course);
            $prefix = $course === CourseRegistry::DEFAULT ? '' : "{$course} · ";

            try {
                $modules = $content->modules();
            } catch (Throwable) {
                continue; // ContentValidator meldt dit al.
            }

            $coursePeople = $content->people()->all();
            $courseEvents = $content->timeline()->all();

            $this->checkIds($coursePeople, "{$prefix}people.json", 'persoon');
            $this->checkIds($courseEvents, "{$prefix}timeline.json", 'gebeurtenis');
            $this->checkSimilarPeople($coursePeople, $prefix);
            $this->checkSimilarEvents($courseEvents, $prefix);

            foreach ($coursePeople as $person) {
                $people[] = [$course, $person];
            }
            foreach ($courseEvents as $event) {
                $events[] = [$course, $event];
            }

            $questions = [];
            $paragraphs = [];

            foreach ($modules->filter(fn (Module $m) => $m->isAvailable()) as $module) {
                $this->checkModule($module, "{$prefix}Module {$module->id}");

                try {
                    $items = $content->exercises($module)->values()->concat($content->quiz($module)['questions'] ?? []);
                } catch (Throwable) {
                    continue;
                }

                foreach ($items as $exercise) {
                    $key = $this->signature($exercise);
                    if (isset($questions[$key])) {
                        $this->errors[] = "{$exercise->id}: dezelfde vraag als {$questions[$key]}.";
                    } else {
                        $questions[$key] = $exercise->id;
                    }
                }

                foreach ($module->lessons as $lesson) {
                    $file = $content->modulePath($module).'/'.$lesson->file;
                    $where = "{$prefix}Module {$module->id}/{$lesson->file}";

                    foreach (is_file($file) ? $this->paragraphs(file_get_contents($file)) : [] as $key => $excerpt) {
                        if (isset($paragraphs[$key])) {
                            $this->errors[] = "{$where}: alinea staat ook in {$paragraphs[$key]}: \"{$excerpt}\"";
                        } else {
                            $paragraphs[$key] = $where;
                        }
                    }
                }
            }
        }

        $this->checkAcrossDomains($people, $events);

        return $this->errors;
    }

    /**
     * Dubbele waarden in de lijsten van module.json.
     */
    private function checkModule(Module $module, string $where): void
    {
        $lists = [
            'timeline' => $module->timeline,
            'people' => $module->people,
            'topics' => $module->topics,
            'prerequisites' => $module->prerequisites,
            'learning_goals' => array_map(fn ($goal) => $this->text(is_array($goal) ? ($goal['text'] ?? json_encode($goal)) : (string) $goal), $module->learningGoals),
            'glossary' => array_map(fn ($entry) => $this->text($entry['term'] ?? ''), $module->glossary),
        ];

        foreach ($lists as $field => $values) {
            foreach (array_unique(array_diff_assoc($values, array_unique($values))) as $value) {
                $this->errors[] = "{$where}: '{$value}' staat twee keer in {$field} van module.json.";
            }
        }
    }

    /**
     * @param  list<array>  $items
     */
    private function checkIds(array $items, string $where, string $what): void
    {
        $ids = array_column($items, 'id');

        foreach (array_unique(array_diff_assoc($ids, array_unique($ids))) as $id) {
            $this->errors[] = "{$where}: {$what}-id '{$id}' komt twee keer voor.";
        }
    }

    /**
     * @param  list<array>  $people
     */
    private function checkSimilarPeople(array $people, string $prefix): void
    {
        foreach ($people as $i => $a) {
            foreach (array_slice($people, $i + 1) as $b) {
                if (($a['id'] ?? '') !== ($b['id'] ?? '') && $this->samePerson($a, $b)) {
                    $this->errors[] = "{$prefix}people.json: '{$a['id']}' en '{$b['id']}' lijken dezelfde persoon ({$a['name']}, {$b['name']}). Voeg ze samen.";
                }
            }
        }
    }

    /**
     * @param  list<array>  $events
     */
    private function checkSimilarEvents(array $events, string $prefix): void
    {
        foreach ($events as $i => $a) {
            foreach (array_slice($events, $i + 1) as $b) {
                if (($a['id'] ?? '') !== ($b['id'] ?? '') && $this->sameEvent($a, $b)) {
                    $this->errors[] = "{$prefix}timeline.json: '{$a['id']}' en '{$b['id']}' lijken dezelfde gebeurtenis ({$a['title']} / {$b['title']}). Voeg ze samen.";
                }
            }
        }
    }

    /**
     * Tussen domeinen: dezelfde persoon of gebeurtenis hoort dezelfde id te hebben
     * (de app koppelt domeinen via die id), en dezelfde id hoort bij hetzelfde.
     *
     * @param  list<array{0: string, 1: array}>  $people
     * @param  list<array{0: string, 1: array}>  $events
     */
    private function checkAcrossDomains(array $people, array $events): void
    {
        foreach ([[$people, 'persoon', 'samePerson', 'name'], [$events, 'gebeurtenis', 'sameEvent', 'title']] as [$items, $what, $same, $label]) {
            foreach ($items as $i => [$courseA, $a]) {
                foreach (array_slice($items, $i + 1) as [$courseB, $b]) {
                    if ($courseA === $courseB) {
                        continue;
                    }

                    $sameId = ($a['id'] ?? '') === ($b['id'] ?? '');
                    $alike = $this->{$same}($a, $b);

                    if ($sameId && ! $alike) {
                        $this->errors[] = "{$what}-id '{$a['id']}' betekent iets anders in {$courseA} ({$a[$label]}) en {$courseB} ({$b[$label]}). Kies een andere id.";
                    } elseif (! $sameId && $alike) {
                        $this->errors[] = "{$courseA} '{$a['id']}' en {$courseB} '{$b['id']}' lijken dezelfde {$what} ({$a[$label]}). Geef ze dezelfde id, dan koppelt de app ze.";
                    }
                }
            }
        }
    }

    private function samePerson(array $a, array $b): bool
    {
        if (! $this->sameName($a, $b)) {
            return false;
        }

        $yearsA = $this->years($a['lived'] ?? '');
        $yearsB = $this->years($b['lived'] ?? '');

        return array_intersect($yearsA, $yearsB) !== []
            || abs((int) ($a['sort_year'] ?? 0) - (int) ($b['sort_year'] ?? 0)) <= 2;
    }

    /**
     * "Newton" en "Isaac Newton" zijn dezelfde naam: vergelijk naam en volledige naam,
     * en tel een naam die als geheel in de andere staat ook mee.
     */
    private function sameName(array $a, array $b): bool
    {
        foreach (array_filter([$a['name'] ?? '', $a['full_name'] ?? '']) as $x) {
            foreach (array_filter([$b['name'] ?? '', $b['full_name'] ?? '']) as $y) {
                [$x, $y] = [$this->ascii($x), $this->ascii($y)];

                if ($this->similarity($x, $y) >= self::SIMILAR || str_contains(" {$x} ", " {$y} ") || str_contains(" {$y} ", " {$x} ")) {
                    return true;
                }
            }
        }

        return false;
    }

    private function sameEvent(array $a, array $b): bool
    {
        return (int) ($a['sort_year'] ?? 0) === (int) ($b['sort_year'] ?? 0)
            && $this->similarity($a['title'] ?? '', $b['title'] ?? '') >= self::SIMILAR_TITLE;
    }

    /**
     * Gelijkenis van twee namen of titels (0–1), zonder hoofdletters, accenten en leestekens.
     */
    private function similarity(string $a, string $b): float
    {
        $a = $this->ascii($a);
        $b = $this->ascii($b);

        if ($a === '' || $b === '') {
            return 0.0;
        }

        similar_text($a, $b, $percent);

        return $percent / 100;
    }

    private function ascii(string $text): string
    {
        $text = preg_replace('/\p{Mn}/u', '', Normalizer::normalize($text, Normalizer::FORM_D) ?: $text);

        return trim(preg_replace('/[^a-z0-9]+/', ' ', mb_strtolower($text)));
    }

    /**
     * @return list<string> jaartallen in een levensloop ("ca. 714 – 768")
     */
    private function years(string $lived): array
    {
        preg_match_all('/\d{3,4}/', $lived, $m);

        return $m[0];
    }

    /**
     * Wat een vraag uniek maakt: vraag, bronfragment, keuzes en antwoord. Rekentekens blijven
     * staan, want "−3 + (−5)" en "−3 − 5" zijn verschillende vragen.
     */
    private function signature(Exercise $exercise): string
    {
        $choices = array_map(fn (string $c) => $this->text($c), $exercise->choices);
        sort($choices);

        return implode("\u{1F}", [
            $this->text($exercise->question),
            $this->text($exercise->context ?? ''),
            implode('|', $choices),
            $this->text(json_encode($exercise->isMultiple() ? $exercise->parts() : $exercise->answer, JSON_UNESCAPED_UNICODE)),
        ]);
    }

    /**
     * Tekst voor vergelijking: kleine letters, één soort minteken, enkele spaties, zonder slotpunt.
     */
    private function text(string $text): string
    {
        $text = str_replace(['−', '–'], '-', mb_strtolower($text));

        return rtrim(trim(preg_replace('/\s+/u', ' ', $text)), '.?!:');
    }

    /**
     * Lange alinea's van een les, met hun genormaliseerde tekst als sleutel en een kort fragment als waarde.
     * Tabellen, kopjes, afbeeldingen en plaatshouders ({{ … }}) tellen niet mee.
     *
     * @return array<string, string>
     */
    private function paragraphs(string $markdown): array
    {
        $found = [];

        // Een bronfragment mag terugkomen (opnieuw lezen in het bronnenpracticum): bronkaders en citaten tellen niet mee.
        $markdown = preg_replace('/^:::history.*?^:::\s*$/ms', '', $markdown);

        foreach (preg_split('/\n\s*\n/', $markdown) as $paragraph) {
            $paragraph = trim($paragraph);

            if (preg_match('/^(\||#|>|!\[|\{\{|:::\s*$)/', $paragraph)) {
                continue;
            }

            $key = $this->text(preg_replace('/^:::\w*.*\n/m', '', $paragraph));

            if (mb_strlen($key) >= self::MIN_PARAGRAPH) {
                $found[$key] = mb_substr(preg_replace('/\s+/u', ' ', $paragraph), 0, 70).'…';
            }
        }

        return $found;
    }
}
