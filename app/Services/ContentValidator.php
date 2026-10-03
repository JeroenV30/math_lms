<?php

namespace App\Services;

use App\Services\AnswerCheckers\AnswerCheckerFactory;
use App\ValueObjects\Exercise;
use App\ValueObjects\Module;
use Throwable;

/**
 * Controleert de cursusinhoud: kloppen de bestanden, id's, onderwerpen,
 * verwijzingen en antwoorden met het contentformaat (docs/CONTENT_GUIDE.md)?
 */
class ContentValidator
{
    private const MODES = ['guided', 'independent', 'challenge'];

    private const LESSON_KINDS = ['intro', 'theory', 'history', 'practice', 'summary'];

    /** @var list<string> */
    private array $errors = [];

    /** @var list<string> */
    private array $warnings = [];

    public function __construct(
        private readonly ContentService $content,
        private readonly AnswerCheckerFactory $checkers,
    ) {}

    /**
     * @return array{errors: list<string>, warnings: list<string>}
     */
    public function validate(): array
    {
        $this->errors = [];
        $this->warnings = [];

        try {
            $modules = $this->content->modules();
        } catch (Throwable $e) {
            return ['errors' => [$e->getMessage()], 'warnings' => []];
        }

        $topics = array_keys($this->content->topics());
        $timeline = $this->content->timeline()->pluck('id')->all();
        $people = $this->content->mathematicians()->pluck('id')->all();
        $seenIds = [];

        foreach ($modules as $module) {
            $where = "Module {$module->id}";

            foreach ($module->topics as $topic) {
                $this->expect(in_array($topic, $topics, true), "{$where}: onbekend onderwerp '{$topic}' in module.json.");
            }

            foreach ($module->prerequisites as $id) {
                $this->expect($modules->has($id), "{$where}: voorkennis verwijst naar onbekende module {$id}.");
            }

            if (! $module->isAvailable()) {
                continue;
            }

            foreach ($module->timeline as $id) {
                $this->warnUnless($timeline === [] || in_array($id, $timeline, true), "{$where}: tijdlijn-id '{$id}' bestaat (nog) niet.");
            }

            foreach ($module->mathematicians as $id) {
                $this->warnUnless($people === [] || in_array($id, $people, true), "{$where}: wiskundige '{$id}' bestaat (nog) niet.");
            }

            $placed = $this->validateLessons($module, $where);

            try {
                $exercises = $this->content->exercises($module);
                $quiz = $this->content->quiz($module);
            } catch (Throwable $e) {
                $this->errors[] = $e->getMessage();

                continue;
            }

            $this->warnUnless($exercises->isNotEmpty(), "{$where}: geen exercises.json of geen oefeningen.");
            $this->warnUnless($quiz !== null, "{$where}: geen quiz.json.");

            $all = $exercises->values()->concat($quiz['questions'] ?? collect());

            foreach ($all as $exercise) {
                $this->expect(! isset($seenIds[$exercise->id]), "{$exercise->id}: dubbel id.");
                $seenIds[$exercise->id] = true;
                $this->validateExercise($exercise, $module, $topics);
            }

            foreach ($exercises->keys() as $id) {
                $this->warnUnless(in_array($id, $placed, true), "{$id}: oefening staat in geen enkele les.");
            }

            foreach (array_unique($placed) as $id) {
                $this->expect($exercises->has($id) || $this->content->getExercise($id) !== null, "{$where}: les verwijst naar onbekende oefening {$id}.");
            }
        }

        return ['errors' => $this->errors, 'warnings' => $this->warnings];
    }

    /**
     * @return list<string> geplaatste oefening-id's
     */
    private function validateLessons(Module $module, string $where): array
    {
        $placed = [];

        foreach ($module->lessons as $lesson) {
            $this->expect(in_array($lesson->kind, self::LESSON_KINDS, true), "{$where}: les '{$lesson->slug}' heeft onbekend soort '{$lesson->kind}'.");

            $file = $this->content->modulePath($module).'/'.$lesson->file;

            if (! is_file($file)) {
                $this->errors[] = "{$where}: lesbestand {$lesson->file} ontbreekt.";

                continue;
            }

            $markdown = file_get_contents($file);

            preg_match_all('/\{\{\s*exercises?\s*:\s*([^}]*)\}\}/', $markdown, $m);
            foreach ($m[1] as $list) {
                array_push($placed, ...array_filter(array_map('trim', explode(',', $list))));
            }

            preg_match_all('/\{\{\s*widget\s*:\s*([a-z-]+)/', $markdown, $w);
            foreach ($w[1] as $widget) {
                $this->expect(view()->exists("widgets.{$widget}"), "{$where}/{$lesson->file}: onbekende widget '{$widget}'.");
            }

            preg_match_all('/!\[[^\]]*\]\((\/images\/[^)\s"]+)/', $markdown, $images);
            foreach ($images[1] as $image) {
                $this->expect(is_file(public_path($image)), "{$where}/{$lesson->file}: afbeelding {$image} ontbreekt.");
            }

            $dollars = substr_count(preg_replace('/\\\\\$/', '', $markdown), '$');
            $this->expect($dollars % 2 === 0, "{$where}/{$lesson->file}: oneven aantal \$-tekens (formule niet gesloten?).");
        }

        return $placed;
    }

    private function validateExercise(Exercise $exercise, Module $module, array $topics): void
    {
        $id = $exercise->id;
        $pattern = $exercise->isQuizQuestion ? '/^\d{2}-T\d{2}$/' : '/^\d{2}-\d{3}$/';

        $this->expect((bool) preg_match($pattern, $id), "{$id}: id heeft niet het formaat ".($exercise->isQuizQuestion ? 'MM-Txx' : 'MM-NNN').'.');
        $this->expect(str_starts_with($id, $module->number().'-'), "{$id}: id hoort bij een andere module.");
        $this->expect($exercise->difficulty >= 1 && $exercise->difficulty <= 5, "{$id}: difficulty moet 1–5 zijn.");
        $this->expect($exercise->isQuizQuestion || in_array($exercise->mode, self::MODES, true), "{$id}: onbekende mode '{$exercise->mode}'.");
        $this->expect($exercise->topics !== [], "{$id}: geen topics.");
        $this->expect($exercise->solution !== [], "{$id}: geen uitgewerkte oplossing.");
        $this->expect(! ($exercise->isQuizQuestion && $exercise->type === 'text'), "{$id}: open vragen (text) horen niet in een toets; die wordt automatisch gescoord.");

        foreach ($exercise->topics as $topic) {
            $this->expect(in_array($topic, $topics, true), "{$id}: onbekend onderwerp '{$topic}'.");
        }

        if (! $this->checkers->supports($exercise->type)) {
            $this->errors[] = "{$id}: onbekend antwoordtype '{$exercise->type}'.";

            return;
        }

        // Het opgegeven antwoord moet door zijn eigen checker als goed worden herkend.
        $checker = $this->checkers->for($exercise->type);
        $answer = match (true) {
            $exercise->isMultiple() => array_map(fn (array $part) => (string) ($part['answer'] ?? ''), $exercise->parts()),
            is_float($exercise->answer) => str_replace('.', ',', (string) $exercise->answer),
            default => (string) $exercise->answer,
        };

        if ($exercise->isMultiple()) {
            foreach ($exercise->parts() as $i => $part) {
                $this->expect(isset($part['label'], $part['answer']), "{$id}: deel ".($i + 1).' mist label of answer.');
                $this->expect($this->checkers->supports($part['type'] ?? 'numeric') && ($part['type'] ?? '') !== 'multiple', "{$id}: deel ".($i + 1).' heeft een onbekend type.');
            }
        }

        try {
            $ok = $checker->check($answer, $exercise->answer, $exercise->options)->correct;
        } catch (Throwable) {
            $ok = false;
        }
        $shown = is_array($answer) ? implode('; ', $answer) : $answer;
        $this->expect($ok, "{$id}: het antwoord '{$shown}' wordt door de checker niet als goed herkend.");

        foreach ($exercise->isMultiple() ? [] : $exercise->feedback as $rule) {
            if (! isset($rule['answer'], $rule['message'])) {
                $this->errors[] = "{$id}: feedback-regel zonder answer of message.";

                continue;
            }

            $this->expect(
                ! $checker->check((string) $rule['answer'], $exercise->answer, [...$exercise->options, 'require_simplified' => false])->correct,
                "{$id}: feedback-antwoord '{$rule['answer']}' is eigenlijk goed.",
            );
        }
    }

    private function expect(bool $condition, string $message): void
    {
        if (! $condition) {
            $this->errors[] = $message;
        }
    }

    private function warnUnless(bool $condition, string $message): void
    {
        if (! $condition) {
            $this->warnings[] = $message;
        }
    }
}
