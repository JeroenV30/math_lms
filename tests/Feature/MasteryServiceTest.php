<?php

namespace Tests\Feature;

use App\Models\TopicMastery;
use App\Services\MasteryService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class MasteryServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_scoring_rules_from_the_build_plan(): void
    {
        $mastery = app(MasteryService::class);
        $initial = config('course.mastery.initial');

        $this->assertSame(['counting' => $initial + 3], $mastery->record(['counting'], true));
        $this->assertSame(['counting' => $initial + 4], $mastery->record(['counting'], true, hintsUsed: 1));
        $this->assertSame(['counting' => $initial - 1], $mastery->record(['counting'], false));
        $this->assertSame(['counting' => $initial - 1], $mastery->record(['counting'], true, solutionViewed: true));

        $row = TopicMastery::query()->where('topic', 'counting')->first();
        $this->assertSame(3, $row->correct_answers);
        $this->assertSame(1, $row->wrong_answers);
    }

    public function test_score_stays_between_0_and_100(): void
    {
        $mastery = app(MasteryService::class);

        for ($i = 0; $i < 30; $i++) {
            $mastery->record(['zero'], false);
        }

        $this->assertSame(0, TopicMastery::query()->where('topic', 'zero')->value('score'));
    }

    public function test_review_interval_grows_with_mastery(): void
    {
        $mastery = app(MasteryService::class);

        $this->assertSame(4, $mastery->reviewIntervalHours(30));
        $this->assertSame(72, $mastery->reviewIntervalHours(60));
        $this->assertSame(168, $mastery->reviewIntervalHours(75));
        $this->assertSame(336, $mastery->reviewIntervalHours(90));
        $this->assertSame(720, $mastery->reviewIntervalHours(99));
    }

    public function test_quiz_questions_weigh_more(): void
    {
        $mastery = app(MasteryService::class);
        $initial = config('course.mastery.initial');

        $this->assertSame(['counting' => $initial + 5], $mastery->record(['counting'], true, context: 'quiz'));
        $this->assertSame(['counting' => $initial], $mastery->record(['counting'], false, context: 'quiz'));
    }

    public function test_interval_grows_with_each_timely_unaided_review(): void
    {
        $mastery = app(MasteryService::class);
        $row = fn () => TopicMastery::query()->where('topic', 'counting')->first();

        Carbon::setTestNow('2026-10-01 10:00:00');
        $mastery->record(['counting'], true);
        $this->assertSame(72, $row()->interval_hours);

        // Op tijd herhaald en goed: het interval verdubbelt.
        Carbon::setTestNow($row()->next_review_at);
        $mastery->record(['counting'], true);
        $this->assertSame(144, $row()->interval_hours);
        $this->assertSame(2, $row()->review_streak);

        Carbon::setTestNow($row()->next_review_at->addHour());
        $mastery->record(['counting'], true);
        $this->assertSame(288, $row()->interval_hours);
        $this->assertSame(3, $row()->review_streak);
    }

    public function test_practising_before_the_due_date_does_not_grow_the_interval(): void
    {
        $mastery = app(MasteryService::class);
        $row = fn () => TopicMastery::query()->where('topic', 'counting')->first();

        Carbon::setTestNow('2026-10-01 10:00:00');
        $mastery->record(['counting'], true);

        for ($i = 0; $i < 5; $i++) {
            $mastery->record(['counting'], true);
        }

        $this->assertSame(72, $row()->interval_hours);
        $this->assertSame(1, $row()->review_streak);
    }

    public function test_a_wrong_answer_resets_the_interval(): void
    {
        $mastery = app(MasteryService::class);
        $row = fn () => TopicMastery::query()->where('topic', 'counting')->first();

        Carbon::setTestNow('2026-10-01 10:00:00');
        $mastery->record(['counting'], true);
        Carbon::setTestNow($row()->next_review_at);
        $mastery->record(['counting'], true);
        $this->assertSame(144, $row()->interval_hours);

        $mastery->record(['counting'], false);

        $this->assertSame(0, $row()->review_streak);
        $this->assertSame($mastery->reviewIntervalHours($row()->score), $row()->interval_hours);
    }

    public function test_interval_is_capped(): void
    {
        $mastery = app(MasteryService::class);
        $row = fn () => TopicMastery::query()->where('topic', 'counting')->first();

        Carbon::setTestNow('2026-10-01 10:00:00');
        $mastery->record(['counting'], true);

        for ($i = 0; $i < 12; $i++) {
            Carbon::setTestNow($row()->next_review_at);
            $mastery->record(['counting'], true);
        }

        $this->assertSame(config('course.review_max_hours'), $row()->interval_hours);
    }

    public function test_next_review_is_scheduled(): void
    {
        Carbon::setTestNow('2026-10-02 10:00:00');

        app(MasteryService::class)->record(['counting'], true);

        $this->assertSame(
            '2026-10-05 10:00:00',
            TopicMastery::query()->where('topic', 'counting')->first()->next_review_at->toDateTimeString(),
        );
    }
}
