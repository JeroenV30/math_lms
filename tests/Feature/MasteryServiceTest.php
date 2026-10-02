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
