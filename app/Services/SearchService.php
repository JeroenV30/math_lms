<?php

namespace App\Services;

use App\ValueObjects\Lesson;
use App\ValueObjects\Module;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

/**
 * Zoeken in modules, lessen, begrippen, formules, personen en de tijdlijn van een cursus.
 *
 * - Elk woord van de zoekvraag moet voorkomen (in titel of tekst).
 * - Rangorde: een treffer in de titel weegt zwaarder dan in de tekst, een heel woord
 *   zwaarder dan een stukje woord, en een module of begrip zwaarder dan een losse vermelding.
 * - De platte tekst van alle lessen staat in de cache en wordt opnieuw opgebouwd
 *   zodra een lesbestand verandert.
 */
class SearchService
{
    private const TYPE_WEIGHT = ['module' => 6, 'glossary' => 5, 'person' => 5, 'formula' => 4, 'lesson' => 3, 'timeline' => 3];

    public function __construct(
        private readonly CourseRegistry $courses,
        private readonly MarkdownRenderer $markdown,
    ) {}

    /**
     * @return Collection<int, array{type: string, title: string, excerpt: ?string, url: string, domain: string, score: int}>
     */
    public function search(string $course, string $query): Collection
    {
        $terms = $this->terms($query);

        if ($terms === []) {
            return collect();
        }

        return $this->documents($course)
            ->map(fn (array $doc) => [...$doc, 'score' => $this->score($doc, $terms)])
            ->filter(fn (array $doc) => $doc['score'] > 0)
            ->sortByDesc('score')
            ->values()
            ->map(fn (array $doc) => [
                'type' => $doc['label'],
                'title' => $doc['title'],
                'excerpt' => $doc['kind'] === 'lesson' ? $this->excerpt($doc['text'], $terms[0]) : $doc['excerpt'],
                'url' => $doc['url'],
                'domain' => $course,
                'score' => $doc['score'],
            ]);
    }

    /**
     * Zoeken in alle cursussen tegelijk, voor de kaart van kennis.
     */
    public function searchAll(string $query): Collection
    {
        return collect($this->courses->ids())
            ->flatMap(fn (string $id) => $this->search($id, $query))
            ->sortByDesc('score')
            ->values();
    }

    /**
     * @return list<string>
     */
    private function terms(string $query): array
    {
        $normalized = $this->normalize($query);

        if (mb_strlen($normalized) < 2) {
            return [];
        }

        return array_values(array_filter(preg_split('/\s+/', $normalized), fn (string $t) => mb_strlen($t) >= 2)) ?: [$normalized];
    }

    /**
     * @param  list<string>  $terms
     */
    private function score(array $doc, array $terms): int
    {
        $title = $this->normalize($doc['title']);
        $body = $this->normalize($doc['text']);
        $score = 0;

        foreach ($terms as $term) {
            $word = '/\b'.preg_quote($term, '/').'\b/u';
            $inTitle = str_contains($title, $term);
            $inBody = str_contains($body, $term);

            if (! $inTitle && ! $inBody) {
                return 0;
            }

            $score += match (true) {
                $inTitle && preg_match($word, $title) === 1 => 30,
                $inTitle => 15,
                default => 0,
            };

            if ($inBody) {
                $score += min(5, preg_match_all($word, $body)) * 2 + 1;
            }
        }

        return $score + self::TYPE_WEIGHT[$doc['kind']];
    }

    /**
     * Alles wat doorzocht kan worden, met platte tekst.
     *
     * @return Collection<int, array{kind: string, label: string, title: string, text: string, excerpt: ?string, url: string}>
     */
    private function documents(string $course): Collection
    {
        $content = $this->courses->for($course);
        $route = fn (string $name, array $parameters = []) => route($name, ['domain' => $course, ...$parameters]);

        return collect()
            ->concat($content->modules()->filter(fn (Module $m) => $m->isAvailable())->map(fn (Module $m) => [
                'kind' => 'module',
                'label' => 'Module',
                'title' => 'Module '.$m->id.' – '.$m->title,
                'text' => $m->summary.' '.collect($m->topics)->map(fn (string $t) => $content->topicLabel($t))->implode(' '),
                'excerpt' => $m->summary,
                'url' => $route('module.show', ['module' => $m->slug]),
            ]))
            ->concat($this->lessonTexts($course)->map(fn (array $l) => [
                'kind' => 'lesson',
                'label' => 'Les',
                'title' => $l['title'].' · Module '.$l['module'],
                'text' => $l['text'],
                'excerpt' => null,
                'url' => $route('lesson.show', ['module' => $l['module_slug'], 'lesson' => $l['slug']]),
            ]))
            ->concat($content->glossary()->map(fn (array $g) => [
                'kind' => 'glossary',
                'label' => 'Begrip',
                'title' => $g['term'],
                'text' => $g['definition'],
                'excerpt' => $g['definition'],
                'url' => $route('glossary').'#'.Str::slug($g['term']),
            ]))
            ->concat($content->formulas()->map(fn (array $f) => [
                'kind' => 'formula',
                'label' => 'Formule',
                'title' => $this->markdown->plainText($f['name'] ?? 'Formule'),
                'text' => $this->markdown->plainText(trim(($f['usage'] ?? '').' '.($f['origin'] ?? ''))),
                'excerpt' => isset($f['usage']) ? $this->markdown->plainText($f['usage']) : null,
                'url' => $route('formulas').'#module-'.$f['module']->id,
            ]))
            ->concat($content->people()->map(fn (array $p) => [
                'kind' => 'person',
                'label' => $content->label('person'),
                'title' => $p['name'],
                'text' => trim(($p['full_name'] ?? '').' '.($p['known_for'] ?? '')),
                'excerpt' => $p['known_for'] ?? null,
                'url' => $route('people.show', ['person' => $p['id']]),
            ]))
            ->concat($content->timeline()->map(fn (array $e) => [
                'kind' => 'timeline',
                'label' => 'Tijdlijn',
                'title' => $e['year_label'].' – '.$e['title'],
                'text' => $e['summary'] ?? '',
                'excerpt' => $e['summary'] ?? null,
                'url' => $route('history.index').'#'.$e['id'],
            ]))
            ->values();
    }

    /**
     * Platte tekst van alle lessen, in de cache tot een lesbestand verandert.
     *
     * @return Collection<int, array{module: int, module_slug: string, slug: string, title: string, text: string}>
     */
    private function lessonTexts(string $course): Collection
    {
        $content = $this->courses->for($course);
        $files = $content->availableModules()->flatMap(fn (Module $module) => $module->lessons
            ->map(fn (Lesson $lesson) => $content->modulePath($module).'/'.$lesson->file)
            ->filter(fn (string $file) => is_file($file)));

        $fingerprint = md5($files->map(fn (string $file) => $file.'@'.filemtime($file))->implode('|'));
        $key = "search-lessons:{$course}";

        // Eén cachesleutel per cursus met de vingerafdruk erin, zodat oude versies niet blijven liggen.
        $cached = Cache::get($key);

        if (($cached['fingerprint'] ?? null) !== $fingerprint) {
            $cached = ['fingerprint' => $fingerprint, 'lessons' => $content->lessonTexts($this->markdown)
                ->map(fn (array $l) => [
                    'module' => $l['module']->id,
                    'module_slug' => $l['module']->slug,
                    'slug' => $l['lesson']->slug,
                    'title' => $l['lesson']->title,
                    'text' => $l['text'],
                ])->all()];
            Cache::forever($key, $cached);
        }

        return collect($cached['lessons']);
    }

    private function normalize(string $text): string
    {
        return mb_strtolower(Str::ascii($text));
    }

    private function excerpt(string $text, string $term): string
    {
        $position = mb_stripos(Str::ascii($text), $term);

        if ($position === false) {
            return Str::limit($text, 180);
        }

        $start = max(0, $position - 80);

        return ($start > 0 ? '…' : '').Str::limit(mb_substr($text, $start), 200);
    }
}
