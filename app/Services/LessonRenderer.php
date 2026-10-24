<?php

namespace App\Services;

use App\ValueObjects\Exercise;
use App\ValueObjects\Module;
use Illuminate\Support\Facades\View;

/**
 * Rendert een les: Markdown via de MarkdownRenderer, directieven via Blade
 * (oefeningen, widgets, leerdoelen, begrippen, toetsknop).
 */
class LessonRenderer
{
    public function __construct(
        private readonly ContentService $content,
        private readonly MarkdownRenderer $markdown,
        private readonly ProgressService $progress,
    ) {}

    /**
     * @return array{html: string, toc: list<array{id: string, title: string, level: int}>, exercises: list<string>, subtitle: ?string}
     */
    public function render(Module $module, string $markdown, string $context = 'lesson', ?string $title = null): array
    {
        ['markdown' => $markdown, 'subtitle' => $subtitle] = $this->splitOpeningHeading($markdown, $title);

        preg_match_all('/\{\{\s*exercises?\s*:\s*([^}]*)\}\}/', $markdown, $matches);
        $ids = collect($matches[1])->flatMap(fn (string $list) => $this->ids($list))->unique()->values()->all();
        $states = $this->progress->exerciseStates($ids);

        $document = $this->markdown->renderDocument($markdown, function (string $name, string $arguments) use ($module, $context, $states) {
            return match ($name) {
                'exercise', 'exercises' => $this->exercises($module, $arguments, $context, $states),
                'widget' => $this->widget($arguments),
                'goals' => View::make('lesson.partials.goals', ['module' => $module])->render(),
                'glossary' => View::make('lesson.partials.glossary', ['module' => $module])->render(),
                'quiz' => View::make('lesson.partials.quiz-link', ['module' => $module])->render(),
                default => $this->error("Onbekend directief: {$name}"),
            };
        });

        return [...$document, 'exercises' => $ids, 'subtitle' => $subtitle];
    }

    /**
     * De lespagina toont de lestitel al als <h1>. Een les die met "# …" opent, krijgt
     * daardoor geen tweede <h1>: een kop gelijk aan de titel vervalt, een andere kop
     * wordt de ondertitel.
     *
     * @return array{markdown: string, subtitle: ?string}
     */
    public function splitOpeningHeading(string $markdown, ?string $title): array
    {
        if ($title === null || ! preg_match('/\A\s*#[ \t]+(.+?)[ \t#]*(?:\R|\z)/u', $markdown, $m)) {
            return ['markdown' => $markdown, 'subtitle' => null];
        }

        $heading = trim($m[1]);
        $rest = substr($markdown, strlen($m[0]));
        $same = mb_strtolower($heading) === mb_strtolower(trim($title));

        return ['markdown' => $rest, 'subtitle' => $same ? null : $heading];
    }

    private function exercises(Module $module, string $arguments, string $context, array $states): string
    {
        $cards = collect($this->ids($arguments))->map(function (string $id) use ($module, $context, $states) {
            $exercise = $this->content->exercises($module)->get($id) ?? $this->content->getExercise($id);

            return $exercise instanceof Exercise
                ? View::make('exercises.card', [
                    'exercise' => $exercise,
                    'context' => $context,
                    'state' => $states[$id] ?? null,
                ])->render()
                : $this->error("Oefening {$id} bestaat niet.");
        });

        return $cards->count() > 1
            ? '<div class="exercise-group">'.$cards->implode('').'</div>'
            : $cards->implode('');
    }

    private function widget(string $arguments): string
    {
        $parts = preg_split('/\s+/', trim($arguments), 2);
        $name = $parts[0] ?? '';
        $params = [];

        preg_match_all('/([a-z][\w-]*)=("([^"]*)"|\S+)/i', $parts[1] ?? '', $pairs, PREG_SET_ORDER);
        foreach ($pairs as $pair) {
            $params[$pair[1]] = ($pair[3] ?? '') !== '' ? $pair[3] : trim($pair[2], '"');
        }

        if (! preg_match('/^[a-z][a-z-]*$/', $name) || ! View::exists("widgets.{$name}")) {
            return $this->error("Onbekende widget: {$name}");
        }

        return View::make("widgets.{$name}", ['params' => $params])->render();
    }

    /**
     * @return list<string>
     */
    private function ids(string $list): array
    {
        return array_values(array_filter(array_map('trim', explode(',', $list))));
    }

    private function error(string $message): string
    {
        return app()->isLocal() || app()->runningUnitTests()
            ? '<div class="directive-error">'.e($message).'</div>'
            : '';
    }
}
