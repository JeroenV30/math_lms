<?php

namespace App\Services;

use App\ValueObjects\Exercise;
use App\ValueObjects\Lesson;
use App\ValueObjects\Module;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use JsonException;
use RuntimeException;

/**
 * Leest de cursusinhoud uit content/ (Markdown en JSON).
 *
 * Content is bewust geen Eloquent-model: de lesstof blijft in bestanden,
 * de database bevat alleen voortgang.
 */
class ContentService
{
    private ?array $course = null;

    /** @var Collection<int, Module>|null */
    private ?Collection $modules = null;

    /** @var array<int, Collection<string, Exercise>> */
    private array $exercises = [];

    /** @var array<int, array|null> */
    private array $quizzes = [];

    private ?array $timeline = null;

    private ?array $mathematicians = null;

    public function __construct(private readonly string $path) {}

    public function course(): array
    {
        return $this->course ??= $this->readJson($this->path.'/course.json');
    }

    public function title(): string
    {
        return $this->course()['title'] ?? config('app.name');
    }

    /**
     * Delen (I–VII) met hun modules.
     *
     * @return Collection<int, array{number: int, roman: string, title: string, level: string, modules: Collection<int, Module>}>
     */
    public function parts(): Collection
    {
        return collect($this->course()['parts'] ?? [])->map(fn (array $part) => [
            ...$part,
            'modules' => $this->modules()->where('part', $part['number'])->values(),
        ]);
    }

    public function part(int $number): ?array
    {
        return $this->parts()->firstWhere('number', $number);
    }

    /**
     * @return array<string, string>
     */
    public function topics(): array
    {
        return $this->course()['topics'] ?? [];
    }

    public function topicLabel(string $topic): string
    {
        return $this->topics()[$topic] ?? Str::headline($topic);
    }

    /**
     * @return Collection<int, Module>
     */
    public function modules(): Collection
    {
        if ($this->modules !== null) {
            return $this->modules;
        }

        $directories = glob($this->path.'/modules/*', GLOB_ONLYDIR) ?: [];

        return $this->modules = collect($directories)
            ->filter(fn (string $dir) => is_file($dir.'/module.json'))
            ->map(fn (string $dir) => Module::fromArray($this->readJson($dir.'/module.json'), basename($dir)))
            ->sortBy('id')
            ->keyBy('id');
    }

    /**
     * @return Collection<int, Module>
     */
    public function availableModules(): Collection
    {
        return $this->modules()->filter(fn (Module $module) => $module->isAvailable());
    }

    public function getModule(int|string $idOrSlug): ?Module
    {
        if (is_int($idOrSlug) || ctype_digit($idOrSlug)) {
            return $this->modules()->get((int) $idOrSlug);
        }

        return $this->modules()->firstWhere('slug', $idOrSlug);
    }

    public function previousModule(Module $module): ?Module
    {
        return $this->modules()->filter(fn (Module $m) => $m->id < $module->id)->last();
    }

    public function nextModule(Module $module): ?Module
    {
        return $this->modules()->first(fn (Module $m) => $m->id > $module->id);
    }

    public function lessonMarkdown(Module $module, Lesson $lesson): string
    {
        $file = $this->modulePath($module).'/'.$lesson->file;

        if (! is_file($file)) {
            throw new RuntimeException("Lesbestand ontbreekt: {$file}");
        }

        return file_get_contents($file);
    }

    /**
     * @return Collection<string, Exercise>
     */
    public function exercises(Module $module): Collection
    {
        return $this->exercises[$module->id] ??= collect(
            $this->readOptionalJson($this->modulePath($module).'/exercises.json')['exercises'] ?? []
        )->map(fn (array $data) => Exercise::fromArray($module->id, $data))->keyBy('id');
    }

    /**
     * @return array{title: string, intro: ?string, questions: Collection<string, Exercise>}|null
     */
    public function quiz(Module $module): ?array
    {
        if (array_key_exists($module->id, $this->quizzes)) {
            return $this->quizzes[$module->id];
        }

        $data = $this->readOptionalJson($this->modulePath($module).'/quiz.json');

        return $this->quizzes[$module->id] = $data === null ? null : [
            'title' => $data['title'] ?? 'Hoofdstuktoets',
            'intro' => $data['intro'] ?? null,
            'questions' => collect($data['questions'] ?? [])
                ->map(fn (array $q) => Exercise::fromArray($module->id, $q, isQuizQuestion: true))
                ->keyBy('id'),
        ];
    }

    /**
     * Zoek een oefening of toetsvraag op id ("04-001", "04-T03").
     */
    public function getExercise(string $id): ?Exercise
    {
        if (! preg_match('/^(\d{2})-/', $id, $m) || ! $module = $this->getModule((int) $m[1])) {
            return null;
        }

        return $this->exercises($module)->get($id)
            ?? ($this->quiz($module)['questions'] ?? null)?->get($id);
    }

    /**
     * Alle oefeningen (geen toetsvragen) uit beschikbare modules.
     *
     * @return Collection<string, Exercise>
     */
    public function allExercises(): Collection
    {
        return $this->availableModules()
            ->flatMap(fn (Module $module) => $this->exercises($module)->all());
    }

    public function timeline(): Collection
    {
        $this->timeline ??= $this->readOptionalJson($this->path.'/history/timeline.json')['events'] ?? [];

        return collect($this->timeline)->sortBy('sort_year')->values();
    }

    public function mathematicians(): Collection
    {
        $this->mathematicians ??= $this->readOptionalJson($this->path.'/history/mathematicians.json')['mathematicians'] ?? [];

        return collect($this->mathematicians)->sortBy('sort_year')->values();
    }

    public function getMathematician(string $id): ?array
    {
        return $this->mathematicians()->firstWhere('id', $id);
    }

    public function timelineEvent(string $id): ?array
    {
        return $this->timeline()->firstWhere('id', $id);
    }

    /**
     * Woordenlijst: alle kernbegrippen uit de modules, alfabetisch.
     */
    public function glossary(): Collection
    {
        return $this->modules()
            ->flatMap(fn (Module $module) => collect($module->glossary)->map(fn (array $entry) => [
                ...$entry,
                'module' => $module,
            ]))
            ->sortBy(fn (array $entry) => Str::lower(Str::ascii($entry['term'])))
            ->values();
    }

    /**
     * Formulebibliotheek: formules met betekenis, gekoppeld aan modules.
     */
    public function formulas(): Collection
    {
        return $this->modules()
            ->flatMap(fn (Module $module) => collect($module->formulas)->map(fn (array $formula) => [
                ...$formula,
                'module' => $module,
            ]))
            ->values();
    }

    /**
     * Platte tekst van alle lessen, voor de zoekfunctie.
     *
     * @return Collection<int, array{module: Module, lesson: Lesson, text: string}>
     */
    public function lessonTexts(MarkdownRenderer $markdown): Collection
    {
        return $this->availableModules()->flatMap(fn (Module $module) => $module->lessons
            ->filter(fn (Lesson $lesson) => is_file($this->modulePath($module).'/'.$lesson->file))
            ->map(fn (Lesson $lesson) => [
                'module' => $module,
                'lesson' => $lesson,
                'text' => $markdown->plainText($this->lessonMarkdown($module, $lesson)),
            ]))->values();
    }

    public function modulePath(Module $module): string
    {
        return $this->path.'/modules/'.$module->directory;
    }

    public function path(): string
    {
        return $this->path;
    }

    private function readOptionalJson(string $file): ?array
    {
        return is_file($file) ? $this->readJson($file) : null;
    }

    private function readJson(string $file): array
    {
        if (! is_file($file)) {
            throw new RuntimeException("Contentbestand ontbreekt: {$file}");
        }

        try {
            return json_decode(file_get_contents($file), true, flags: JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            throw new RuntimeException("Ongeldige JSON in {$file}: {$e->getMessage()}", previous: $e);
        }
    }
}
