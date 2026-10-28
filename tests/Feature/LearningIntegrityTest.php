<?php

namespace Tests\Feature;

use App\Models\TopicMastery;
use App\Services\DomainService;
use App\Services\ReviewService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Tests\TestCase;

/**
 * Scores en herhalingen moeten iets zeggen over wat je beheerst: niet op te drijven
 * door te herladen, en niet gevuld met stof die je alleen hebt opengeslagen.
 */
class LearningIntegrityTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->useFixtureContent();
    }

    public function test_repeating_a_solved_exercise_on_the_same_day_adds_no_mastery(): void
    {
        $this->postJson('/kennis/wiskunde/oefening/01-001/controleer', ['answer' => '518'])->assertJson(['correct' => true]);
        $score = TopicMastery::query()->value('score');

        // Herladen en hetzelfde antwoord opnieuw insturen: de poging telt, de score niet.
        $this->postJson('/kennis/wiskunde/oefening/01-001/controleer', ['answer' => '518'])
            ->assertJson(['correct' => true, 'mastery' => []]);

        $this->assertSame($score, TopicMastery::query()->value('score'));
        $this->assertDatabaseCount('exercise_attempts', 2);

        // Een dag later telt een goed antwoord weer mee.
        Carbon::setTestNow(Carbon::tomorrow()->addHours(10));
        $this->postJson('/kennis/wiskunde/oefening/01-001/controleer', ['answer' => '518']);
        $this->assertGreaterThan($score, TopicMastery::query()->value('score'));
    }

    public function test_only_studied_modules_count_as_started_and_feed_the_review(): void
    {
        Carbon::setTestNow('2026-10-02 10:00:00');

        // Een les alleen openen is nog geen studie.
        $this->get('/kennis/wiskunde/cursus/tellen/les/theorie')->assertOk();
        $this->get('/kennis/wiskunde')->assertSee('0 van 2 modules');

        // Een onderwerp dat aan de beurt is zonder bestudeerde module: geen herhaalvragen.
        TopicMastery::query()->create(['topic' => 'counting', 'score' => 40, 'correct_answers' => 0, 'wrong_answers' => 1, 'review_streak' => 0, 'next_review_at' => Carbon::now()->subHour()]);
        $this->assertSame(0, app(ReviewService::class)->dueCount());

        // Na een gelezen les wel.
        $this->post('/kennis/wiskunde/cursus/tellen/les/theorie/gelezen');
        $this->assertGreaterThan(0, app(ReviewService::class)->dueCount());
        $this->get('/kennis/wiskunde')->assertSee('1 van 2 modules');
    }

    public function test_the_map_collects_todays_reviews_from_every_domain(): void
    {
        Carbon::setTestNow('2026-10-02 10:00:00');
        $this->get('/')->assertOk()->assertDontSee('Vandaag herhalen');

        $this->postJson('/kennis/wiskunde/oefening/01-001/controleer', ['answer' => '1']);
        Carbon::setTestNow('2026-10-02 16:00:00');

        $this->get('/')
            ->assertOk()
            ->assertSee('Vandaag herhalen')
            ->assertSee('href="'.route('review.index', ['domain' => 'wiskunde']).'"', false);
    }

    public function test_search_ranks_titles_first_and_needs_every_word(): void
    {
        $response = $this->get('/kennis/wiskunde/zoeken?q=tellen')->assertOk();
        $results = $response->viewData('results');

        $this->assertSame('Module', $results->first()['type']);
        $this->assertStringContainsString('Tellen', $results->first()['title']);
        $this->assertSame($results->sortByDesc('score')->pluck('score')->all(), $results->pluck('score')->all());

        $this->assertCount(0, $this->get('/kennis/wiskunde/zoeken?q=tellen+qwxyz')->viewData('results'));
    }

    public function test_search_from_the_map_covers_every_domain(): void
    {
        $results = $this->get('/zoeken?q=bronnen')->assertOk()->assertSee('Zoeken in alle domeinen')->viewData('results');

        $this->assertContains('geschiedenis', $results->pluck('domain')->all());
        $this->assertStringStartsWith(url('/kennis/geschiedenis/'), $results->firstWhere('domain', 'geschiedenis')['url']);

        $this->get('/')->assertSee('action="'.route('search.all').'"', false);
    }

    public function test_a_growing_domain_shows_how_many_modules_are_ready(): void
    {
        // Echte content: geschiedenis heeft een moduleplan en is half af.
        $this->refreshApplication();
        $domains = app(DomainService::class);

        $this->assertMatchesRegularExpression('/^\d+ van \d+ modules$/', $domains->progressLabel($domains->find('geschiedenis')));
        $this->assertNull($domains->progressLabel($domains->find('wiskunde')));
        $this->assertNull($domains->progressLabel($domains->find('biologie')));
    }
}
