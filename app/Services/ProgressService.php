<?php

namespace App\Services;

use App\Models\ExerciseAttempt;
use App\Models\LessonProgress;
use App\Models\ModuleProgress;
use App\Models\QuizAttempt;
use App\Models\TopicMastery;
use App\ValueObjects\Lesson;
use App\ValueObjects\Module;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

/**
 * Voortgang berekenen, modules afronden, scores bijhouden en
 * dashboardgegevens leveren.
 */
class ProgressService
{
    public function __construct(
        private readonly ContentService $content,
        private readonly MasteryService $mastery,
    ) {}

    /**
     * @return Collection<int, ModuleProgress>
     */
    public function all(): Collection
    {
        return ModuleProgress::query()->get()->keyBy('module_id');
    }

    public function forModule(int $moduleId): ModuleProgress
    {
        return ModuleProgress::query()->firstOrNew(
            ['module_id' => $moduleId],
            ['status' => ModuleProgress::NOT_STARTED, 'attempts' => 0],
        );
    }

    public function status(int $moduleId): string
    {
        return ModuleProgress::query()->where('module_id', $moduleId)->value('status') ?? ModuleProgress::NOT_STARTED;
    }

    /**
     * Markeer een module als bezocht; een nog niet gestarte module wordt 'started'.
     */
    public function touchModule(int $moduleId, ?string $lessonSlug = null): ModuleProgress
    {
        $progress = $this->forModule($moduleId);

        if ($progress->status === ModuleProgress::NOT_STARTED) {
            $progress->status = ModuleProgress::STARTED;
            $progress->started_at = Carbon::now();
        }

        if ($lessonSlug !== null) {
            $progress->last_lesson = $lessonSlug;
        }

        $progress->last_visited_at = Carbon::now();
        $progress->save();

        return $progress;
    }

    public function completeLesson(Module $module, Lesson $lesson): void
    {
        $this->touchModule($module->id, $lesson->slug);

        LessonProgress::query()->updateOrCreate(
            ['module_id' => $module->id, 'lesson_slug' => $lesson->slug],
            ['completed_at' => Carbon::now()],
        );
    }

    /**
     * @return list<string>
     */
    public function completedLessons(int $moduleId): array
    {
        return LessonProgress::query()
            ->where('module_id', $moduleId)
            ->whereNotNull('completed_at')
            ->pluck('lesson_slug')
            ->all();
    }

    /**
     * Verwerk een toetsscore. Vanaf 70% afgerond, vanaf 85% beheerst.
     * Een status gaat nooit achteruit; de beste score telt.
     */
    public function recordQuizScore(Module $module, int $score): ModuleProgress
    {
        $progress = $this->touchModule($module->id);
        $progress->attempts++;
        $progress->score = max($progress->score ?? 0, $score);

        $earned = match (true) {
            $score >= config('course.mastered_score') => ModuleProgress::MASTERED,
            $score >= config('course.completed_score') => ModuleProgress::COMPLETED,
            default => ModuleProgress::STARTED,
        };

        if (! $progress->isAtLeast($earned)) {
            $progress->status = $earned;
        }

        if ($progress->isAtLeast(ModuleProgress::COMPLETED) && $progress->completed_at === null) {
            $progress->completed_at = Carbon::now();
        }

        $progress->save();

        return $progress;
    }

    /**
     * Status per oefening: 'solved' (ooit goed) of 'attempted' (alleen fout).
     *
     * @param  iterable<string>  $exerciseIds
     * @return array<string, string>
     */
    public function exerciseStates(iterable $exerciseIds): array
    {
        $ids = collect($exerciseIds)->values()->all();

        if ($ids === []) {
            return [];
        }

        return ExerciseAttempt::query()
            ->whereIn('exercise_id', $ids)
            ->where('context', '!=', 'quiz')
            ->selectRaw('exercise_id, max(is_correct) as solved')
            ->groupBy('exercise_id')
            ->pluck('solved', 'exercise_id')
            ->map(fn ($solved) => $solved ? 'solved' : 'attempted')
            ->all();
    }

    /**
     * De module waar de gebruiker verder kan gaan, met de les.
     *
     * @return array{module: Module, lesson: ?Lesson}|null
     */
    public function continueTarget(): ?array
    {
        $progress = ModuleProgress::query()
            ->where('status', ModuleProgress::STARTED)
            ->orderByDesc('last_visited_at')
            ->first();

        $module = $progress ? $this->content->getModule($progress->module_id) : null;

        if ($module === null) {
            $done = $this->all()->filter(fn (ModuleProgress $p) => $p->isAtLeast(ModuleProgress::COMPLETED))->keys();
            $module = $this->content->availableModules()->first(fn (Module $m) => ! $done->contains($m->id));
        }

        if ($module === null || ! $module->isAvailable()) {
            return null;
        }

        $completed = $this->completedLessons($module->id);
        $lesson = $module->lessons->first(fn (Lesson $l) => ! in_array($l->slug, $completed, true))
            ?? ($progress?->last_lesson ? $module->lesson($progress->last_lesson) : null);

        return ['module' => $module, 'lesson' => $lesson];
    }

    public function dashboard(): array
    {
        $progress = $this->all();
        $total = $this->content->modules()->count();
        $started = $progress->filter(fn (ModuleProgress $p) => $p->isAtLeast(ModuleProgress::STARTED))->count();
        $completed = $progress->filter(fn (ModuleProgress $p) => $p->isAtLeast(ModuleProgress::COMPLETED))->count();
        $mastery = $this->mastery->all();

        return [
            'total_modules' => $total,
            'started' => $started,
            'completed' => $completed,
            'percentage' => $total > 0 ? (int) round($completed / $total * 100) : 0,
            'continue' => $this->continueTarget(),
            'mastery' => $mastery,
            'strongest' => $mastery->sortByDesc('score')->first(),
            'weakest' => $mastery->count() > 1 ? $mastery->sortBy('score')->first() : null,
            'attempts_today' => ExerciseAttempt::query()->where('created_at', '>=', Carbon::today())->count(),
        ];
    }

    /**
     * Persoonlijke leerstatistiek (bouwplan §42).
     */
    public function statistics(): array
    {
        $attempts = ExerciseAttempt::query()->orderBy('id')->get();
        $perExercise = $attempts->groupBy('exercise_id');

        $firstTry = $perExercise->filter(function (Collection $tries) {
            $first = $tries->first();

            return $first->is_correct && $first->hints_used === 0 && ! $first->solution_viewed;
        })->count();

        $eventually = $perExercise->filter(fn (Collection $tries) => $tries->contains('is_correct', true))->count();
        $exercises = $perExercise->count();

        $percent = fn (int $n) => $exercises > 0 ? (int) round($n / $exercises * 100) : 0;

        return [
            'total_attempts' => $attempts->count(),
            'exercises' => $exercises,
            'first_try' => $percent($firstTry),
            'after_help' => $percent($eventually - $firstTry),
            'not_yet' => $percent($exercises - $eventually),
            'correct_rate' => $attempts->count() > 0
                ? (int) round($attempts->where('is_correct', true)->count() / $attempts->count() * 100)
                : 0,
            'hints_used' => $attempts->sum('hints_used'),
            'average_response' => $attempts->whereNotNull('response_time')->avg('response_time'),
            'by_context' => $attempts->groupBy('context')->map->count(),
            'by_day' => $attempts->groupBy(fn (ExerciseAttempt $a) => $a->created_at->toDateString())
                ->map->count()->sortKeys()->take(-14),
        ];
    }

    public function reset(): void
    {
        ExerciseAttempt::query()->delete();
        LessonProgress::query()->delete();
        ModuleProgress::query()->delete();
        QuizAttempt::query()->delete();
        TopicMastery::query()->delete();
    }
}
