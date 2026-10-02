<?php

namespace App\Services;

use App\Models\ExerciseAttempt;
use App\Models\ModuleProgress;
use App\Models\TopicMastery;
use App\ValueObjects\Exercise;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Random\Engine\Mt19937;
use Random\Randomizer;

/**
 * Selecteert herhalingsvragen (spaced repetition).
 *
 * Onderwerpen waarvan next_review_at verstreken is komen terug, gemengd:
 * 60% zwakke onderwerpen, 25% normale herhaling, 15% oude willekeurige stof.
 * Zo wordt niet alleen het zwakste onderwerp eindeloos herhaald.
 */
class ReviewService
{
    public function __construct(private readonly ContentService $content) {}

    /**
     * @return Collection<string, TopicMastery>
     */
    public function dueTopics(): Collection
    {
        return TopicMastery::query()
            ->whereNotNull('next_review_at')
            ->where('next_review_at', '<=', Carbon::now())
            ->orderBy('score')
            ->get()
            ->keyBy('topic');
    }

    /**
     * De herhalingsset van vandaag.
     *
     * @return Collection<int, array{exercise: Exercise, reason: string}>
     */
    public function session(?int $size = null): Collection
    {
        $size ??= (int) config('course.review_session_size');
        $due = $this->dueTopics();

        if ($due->isEmpty()) {
            return collect();
        }

        $pool = $this->pool();

        if ($pool->isEmpty()) {
            return collect();
        }

        $weakThreshold = (int) config('course.weak_threshold');
        $weakTopics = $due->filter(fn (TopicMastery $t) => $t->score < $weakThreshold)->keys()->all();
        $normalTopics = $due->filter(fn (TopicMastery $t) => $t->score >= $weakThreshold)->keys()->all();

        $mix = config('course.review_mix');
        $wanted = [
            'weak' => (int) round($size * $mix['weak']),
            'normal' => (int) round($size * $mix['normal']),
        ];
        $wanted['random'] = max(0, $size - $wanted['weak'] - $wanted['normal']);

        // Dezelfde volgorde gedurende de dag, zodat de set niet bij elke refresh verandert.
        $randomizer = new Randomizer(new Mt19937(crc32(Carbon::today()->toDateString())));
        $shuffled = collect($randomizer->shuffleArray($pool->values()->all()));

        $buckets = [
            'weak' => $shuffled->filter(fn (Exercise $e) => array_intersect($e->topics, $weakTopics) !== []),
            'normal' => $shuffled->filter(fn (Exercise $e) => array_intersect($e->topics, $normalTopics) !== []),
            'random' => $shuffled,
        ];

        $selected = collect();
        $carry = 0;

        foreach (['weak', 'normal', 'random'] as $reason) {
            $take = $wanted[$reason] + $carry;
            $picked = $buckets[$reason]
                ->reject(fn (Exercise $e) => $selected->has($e->id))
                ->take($take);

            foreach ($picked as $exercise) {
                $selected->put($exercise->id, ['exercise' => $exercise, 'reason' => $reason]);
            }

            // Wat een emmer niet kan vullen, schuift door naar de volgende.
            $carry = $take - $picked->count();
        }

        return $selected->values();
    }

    public function dueCount(): int
    {
        return $this->session()->count();
    }

    /**
     * Oefeningen uit modules waaraan de gebruiker al begonnen is, behalve wat
     * vandaag al goed is herhaald.
     *
     * @return Collection<string, Exercise>
     */
    private function pool(): Collection
    {
        $startedModules = ModuleProgress::query()
            ->where('status', '!=', ModuleProgress::NOT_STARTED)
            ->pluck('module_id')
            ->all();

        $doneToday = ExerciseAttempt::query()
            ->where('context', 'review')
            ->where('is_correct', true)
            ->where('created_at', '>=', Carbon::today())
            ->pluck('exercise_id')
            ->flip();

        return $this->content->allExercises()
            ->filter(fn (Exercise $e) => in_array($e->moduleId, $startedModules, true))
            ->reject(fn (Exercise $e) => $doneToday->has($e->id));
    }
}
