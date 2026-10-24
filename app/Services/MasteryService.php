<?php

namespace App\Services;

use App\Models\TopicMastery;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

/**
 * Beheersingsniveau per onderwerp (0–100) en het moment van de volgende herhaling.
 *
 * Score (bouwplan §16): goed +3, goed met hint +1, fout −5; een toetsvraag weegt
 * zwaarder (+5/−5). Zie config/course.php.
 *
 * Herhaling (spaced repetition): het interval heeft een ondergrens die uit de
 * score volgt. Gaat een herhaling op tijd en zonder hulp goed, dan groeit het
 * interval (×2, tot een half jaar). Een fout antwoord zet het terug. Wie vóór de
 * herhaaldatum al oefent, schuift de herhaling op, maar laat het interval niet groeien:
 * tien keer goed op één middag bewijst nog geen langetermijngeheugen.
 */
class MasteryService
{
    /**
     * @param  list<string>  $topics
     * @return array<string, int> nieuwe score per onderwerp
     */
    public function record(array $topics, bool $correct, int $hintsUsed = 0, bool $solutionViewed = false, string $context = 'lesson'): array
    {
        $delta = $this->delta($correct, $hintsUsed, $solutionViewed, $context);
        $unaided = $correct && $hintsUsed === 0 && ! $solutionViewed;
        $now = Carbon::now();
        $scores = [];

        foreach (array_unique($topics) as $topic) {
            $mastery = TopicMastery::query()->firstOrNew(['topic' => $topic]);

            if (! $mastery->exists) {
                $mastery->score = (int) config('course.mastery.initial');
                $mastery->correct_answers = 0;
                $mastery->wrong_answers = 0;
                $mastery->review_streak = 0;
            }

            $due = $mastery->next_review_at === null || $mastery->next_review_at->lte($now);

            $mastery->score = max(0, min(100, $mastery->score + $delta));
            $correct ? $mastery->correct_answers++ : $mastery->wrong_answers++;

            $floor = $this->reviewIntervalHours($mastery->score);
            $current = max($floor, (int) ($mastery->interval_hours ?? 0));

            [$interval, $streak] = match (true) {
                ! $correct => [$floor, 0],
                $unaided && $due => [$this->grow($current, $mastery->exists), $mastery->review_streak + 1],
                $unaided => [$current, $mastery->review_streak],
                // Goed met hint of na de oplossing: niet terug naar af, maar ook niet langer.
                default => [$floor, $mastery->review_streak],
            };

            $mastery->interval_hours = $interval;
            $mastery->review_streak = $streak;
            $mastery->last_practiced_at = $now;
            $mastery->next_review_at = $now->copy()->addHours($interval);
            $mastery->save();

            $scores[$topic] = $mastery->score;
        }

        return $scores;
    }

    public function delta(bool $correct, int $hintsUsed, bool $solutionViewed, string $context = 'lesson'): int
    {
        $rules = config('course.mastery');

        if ($context === 'quiz') {
            return $correct ? (int) ($rules['quiz_correct'] ?? $rules['correct']) : (int) ($rules['quiz_wrong'] ?? $rules['wrong']);
        }

        return match (true) {
            ! $correct => $rules['wrong'],
            $solutionViewed => $rules['correct_after_solution'],
            $hintsUsed > 0 => $rules['correct_with_hint'],
            default => $rules['correct'],
        };
    }

    /**
     * Ondergrens van het herhalingsinterval bij een score:
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
     * Het interval na een geslaagde herhaling. De eerste keer geldt de ondergrens.
     */
    private function grow(int $hours, bool $reviewed): int
    {
        if (! $reviewed) {
            return $hours;
        }

        return min(
            (int) config('course.review_max_hours', 24 * 180),
            (int) round($hours * (float) config('course.review_growth', 2.0)),
        );
    }

    /**
     * @return Collection<string, TopicMastery>
     */
    public function all(): Collection
    {
        return TopicMastery::query()->orderByDesc('score')->get()->keyBy('topic');
    }
}
