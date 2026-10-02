<?php

namespace App\Services;

use App\Models\TopicMastery;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

/**
 * Beheersingsniveau per onderwerp (0–100) en het moment van de volgende herhaling.
 *
 * Bewust eenvoudig gehouden (bouwplan §16): goed +3, goed met hint +1, fout −5.
 * Later kan hier een echt spaced-repetitionalgoritme voor in de plaats komen.
 */
class MasteryService
{
    /**
     * @param  list<string>  $topics
     * @return array<string, int> nieuwe score per onderwerp
     */
    public function record(array $topics, bool $correct, int $hintsUsed = 0, bool $solutionViewed = false): array
    {
        $delta = $this->delta($correct, $hintsUsed, $solutionViewed);
        $now = Carbon::now();
        $scores = [];

        foreach (array_unique($topics) as $topic) {
            $mastery = TopicMastery::query()->firstOrNew(['topic' => $topic]);

            if (! $mastery->exists) {
                $mastery->score = (int) config('course.mastery.initial');
                $mastery->correct_answers = 0;
                $mastery->wrong_answers = 0;
            }

            $mastery->score = max(0, min(100, $mastery->score + $delta));
            $correct ? $mastery->correct_answers++ : $mastery->wrong_answers++;
            $mastery->last_practiced_at = $now;
            $mastery->next_review_at = $now->copy()->addHours($this->reviewIntervalHours($mastery->score));
            $mastery->save();

            $scores[$topic] = $mastery->score;
        }

        return $scores;
    }

    public function delta(bool $correct, int $hintsUsed, bool $solutionViewed): int
    {
        $rules = config('course.mastery');

        return match (true) {
            ! $correct => $rules['wrong'],
            $solutionViewed => $rules['correct_after_solution'],
            $hintsUsed > 0 => $rules['correct_with_hint'],
            default => $rules['correct'],
        };
    }

    /**
     * < 50 snel opnieuw, 50–70 regelmatig, 70–85 incidenteel,
     * 85–95 langere tussenperiode, 95+ alleen onderhoud.
     */
    public function reviewIntervalHours(int $score): int
    {
        $intervals = config('course.review_intervals');
        krsort($intervals);

        foreach ($intervals as $threshold => $hours) {
            if ($score >= $threshold) {
                return $hours;
            }
        }

        return end($intervals);
    }

    /**
     * @return Collection<string, TopicMastery>
     */
    public function all(): Collection
    {
        return TopicMastery::query()->orderByDesc('score')->get()->keyBy('topic');
    }
}
