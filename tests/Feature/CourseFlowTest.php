<?php

namespace Tests\Feature;

use App\Models\ExerciseAttempt;
use App\Models\LessonProgress;
use App\Models\ModuleProgress;
use App\Models\QuizAttempt;
use App\Models\TopicMastery;
use App\Services\ReviewService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Carbon;
use Tests\TestCase;

/**
 * Definition of Done voor prototype 1 (bouwplan §52), doorlopen met een testcursus.
 */
class CourseFlowTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->useFixtureContent();
    }

    public function test_dashboard_appears(): void
    {
        $this->get('/kennis/wiskunde')
            ->assertOk()
            ->assertSee('De testcursus.')
            ->assertSee('Start module 1');
    }

    public function test_course_overview_lists_parts_and_modules(): void
    {
        $this->get('/kennis/wiskunde/cursus')
            ->assertOk()
            ->assertSee('Deel I – Fundamenten')
            ->assertSee('Tellen')
            ->assertSee('In voorbereiding');
    }

    public function test_module_page_shows_goals_lessons_and_history(): void
    {
        $this->get('/kennis/wiskunde/cursus/tellen')
            ->assertOk()
            ->assertSee('Wat is acht?')
            ->assertSee('Je kunt tellen.')
            ->assertSee('Acht schapen')
            ->assertSee('Het Ishango-been')
            ->assertSee('Euclides');

        $this->get('/kennis/wiskunde/cursus/1')->assertOk();
        $this->get('/kennis/wiskunde/cursus/later')->assertOk()->assertSee('In voorbereiding');
        $this->get('/kennis/wiskunde/cursus/later/les/x')->assertNotFound();
    }

    public function test_historical_introduction_and_formulas_render(): void
    {
        $this->get('/kennis/wiskunde/cursus/tellen/les/introductie')
            ->assertOk()
            ->assertSee('callout-history', false)
            ->assertSee('<span class="math math-inline">8 = 8</span>', false)
            ->assertSee('Kernbegrippen')
            ->assertSee('Na deze module');

        $this->assertSame(ModuleProgress::STARTED, ModuleProgress::query()->where('module_id', 1)->value('status'));
    }

    public function test_lesson_embeds_exercises_widgets_and_quiz_link(): void
    {
        $this->get('/kennis/wiskunde/cursus/tellen/les/theorie')
            ->assertOk()
            ->assertSee('Oefening 01-001')
            ->assertSee('Oefening 01-002')
            ->assertSee('Oefening 01-003')
            ->assertSee('Splits 14 in 10 en 4.')
            ->assertSee('Turven')
            ->assertSee('Start de toets')
            ->assertDontSee('directive-error', false);
    }

    public function test_correct_answer_is_judged_and_stored(): void
    {
        $this->postJson('/kennis/wiskunde/oefening/01-001/controleer', ['answer' => '518', 'hints_used' => 0, 'context' => 'lesson'])
            ->assertOk()
            ->assertJson(['valid' => true, 'correct' => true, 'message' => 'Correct. Het antwoord is 518.']);

        $attempt = ExerciseAttempt::query()->sole();
        $this->assertTrue($attempt->is_correct);
        $this->assertSame(1, $attempt->attempt_number);
        $this->assertSame(config('course.mastery.initial') + 3, TopicMastery::query()->where('topic', 'multiplication')->value('score'));
    }

    public function test_wrong_answer_gets_targeted_feedback(): void
    {
        $this->postJson('/kennis/wiskunde/oefening/01-001/controleer', ['answer' => '407'])
            ->assertOk()
            ->assertJson(['valid' => true, 'correct' => false, 'message' => 'Nog niet correct.'])
            ->assertJsonPath('feedback', 'Je hebt 37 × 11 berekend.');

        $this->postJson('/kennis/wiskunde/oefening/01-001/controleer', ['answer' => '518', 'hints_used' => 2])
            ->assertJson(['correct' => true, 'attempt_number' => 2]);

        // −5 voor de fout, +1 voor goed met hint.
        $this->assertSame(config('course.mastery.initial') - 4, TopicMastery::query()->where('topic', 'multiplication')->value('score'));
        $this->assertSame(2, ExerciseAttempt::query()->count());
    }

    public function test_invalid_input_is_not_counted(): void
    {
        $this->postJson('/kennis/wiskunde/oefening/01-001/controleer', ['answer' => 'vijfhonderd'])
            ->assertOk()
            ->assertJson(['valid' => false, 'correct' => false]);

        $this->assertSame(0, ExerciseAttempt::query()->count());
        $this->assertSame(0, TopicMastery::query()->count());
    }

    public function test_decimal_and_fraction_exercises(): void
    {
        $this->postJson('/kennis/wiskunde/oefening/01-002/controleer', ['answer' => '2,50'])->assertJson(['correct' => true, 'message' => 'Correct. Het antwoord is € 2,50.']);
        $this->postJson('/kennis/wiskunde/oefening/01-003/controleer', ['answer' => '6/8'])->assertJson(['valid' => true, 'correct' => false, 'code' => 'not_simplified']);
        $this->postJson('/kennis/wiskunde/oefening/01-003/controleer', ['answer' => '6/14'])->assertJsonPath('feedback', 'Je telde de schapen dubbel.');
        $this->postJson('/kennis/wiskunde/oefening/01-003/controleer', ['answer' => '3/4'])->assertJson(['correct' => true]);
    }

    public function test_expression_and_multi_part_exercises(): void
    {
        $this->get('/kennis/wiskunde/cursus/tellen/les/theorie')->assertOk()->assertSee('bijv. 2x + 4')->assertSee('x =');

        $this->postJson('/kennis/wiskunde/oefening/01-004/controleer', ['answer' => '4 + 2x'])->assertJson(['correct' => true]);
        $this->postJson('/kennis/wiskunde/oefening/01-004/controleer', ['answer' => '2(x+2)'])->assertJson(['correct' => false, 'code' => 'not_expanded']);

        $this->postJson('/kennis/wiskunde/oefening/01-005/controleer', ['answer' => ['x' => '7', 'y' => '4']])
            ->assertJson(['valid' => true, 'correct' => false, 'message' => 'Nog niet goed: y. De rest klopt.']);
        $this->postJson('/kennis/wiskunde/oefening/01-005/controleer', ['answer' => ['x' => '7', 'y' => '3']])
            ->assertJson(['correct' => true, 'message' => 'Correct. Het antwoord is x = 7; y = 3.']);
        $this->postJson('/kennis/wiskunde/oefening/01-005/controleer', ['answer' => '7'])->assertUnprocessable();

        $this->assertSame('x = 7; y = 3', ExerciseAttempt::query()->where('exercise_id', '01-005')->latest('id')->value('answer'));
    }

    public function test_open_questions_are_stored_but_not_scored(): void
    {
        $this->get('/kennis/wiskunde/cursus/tellen/les/theorie')->assertOk()->assertSee('Modelantwoord')->assertSee('Opslaan');

        $this->postJson('/kennis/wiskunde/oefening/01-006/controleer', ['answer' => 'Omdat het zo is.'])
            ->assertJson(['valid' => false]);

        $this->postJson('/kennis/wiskunde/oefening/01-006/controleer', ['answer' => 'Je kunt elke appel aan precies één schaap koppelen, dus de hoeveelheid is gelijk.'])
            ->assertJson(['valid' => true, 'correct' => true, 'code' => 'submitted', 'mastery' => []])
            ->assertJsonPath('message', 'Je antwoord is opgeslagen. Vergelijk het nu met het modelantwoord hieronder.');

        $this->assertSame(1, ExerciseAttempt::query()->where('exercise_id', '01-006')->count());
        $this->assertSame(0, TopicMastery::query()->count());
    }

    public function test_unknown_exercises_and_quiz_questions_cannot_be_checked(): void
    {
        $this->postJson('/kennis/wiskunde/oefening/99-001/controleer', ['answer' => '1'])->assertNotFound();
        $this->postJson('/kennis/wiskunde/oefening/01-T01/controleer', ['answer' => '8'])->assertForbidden();
    }

    public function test_lessons_can_be_completed(): void
    {
        $this->post('/kennis/wiskunde/cursus/tellen/les/introductie/gelezen')->assertRedirect('/kennis/wiskunde/cursus/tellen/les/theorie');
        $this->post('/kennis/wiskunde/cursus/tellen/les/theorie/gelezen')->assertRedirect('/kennis/wiskunde/cursus/tellen/toets');

        $this->assertSame(2, LessonProgress::query()->count());
    }

    public function test_quiz_completes_and_masters_the_module(): void
    {
        $this->get('/kennis/wiskunde/cursus/tellen/toets')->assertOk()->assertSee('Hoofdstuktoets – Tellen');

        // 4 van 5 goed = 80%: afgerond.
        $response = $this->post('/kennis/wiskunde/cursus/tellen/toets', ['answers' => [
            '01-T01' => '8', '01-T02' => '42', '01-T03' => '1/2', '01-T04' => '3', '01-T05' => ['x' => '3', 'y' => '2'],
        ]]);
        $attempt = QuizAttempt::query()->latest('id')->first();
        $response->assertRedirect("/kennis/wiskunde/cursus/tellen/toets/{$attempt->id}");

        $this->assertSame(80, $attempt->score);
        $this->assertSame(ModuleProgress::COMPLETED, ModuleProgress::query()->where('module_id', 1)->value('status'));

        $this->get("/kennis/wiskunde/cursus/tellen/toets/{$attempt->id}")
            ->assertOk()
            ->assertSee('80%')
            ->assertSee('De module is afgerond.')
            ->assertSee('2,5')
            ->assertSee('x = 3; y = 2');

        // De herkansing stelt andere vragen: de oefeningen van de module, zonder de open vraag.
        $this->get('/kennis/wiskunde/cursus/tellen/toets')->assertOk()->assertSee('Dit is een herkansing')->assertDontSee('01-T01');
        $this->post('/kennis/wiskunde/cursus/tellen/toets', ['answers' => ['01-T01' => '8', '01-T02' => '42', '01-T03' => '2/4', '01-T04' => '2,5', '01-T05' => ['x' => '3', 'y' => '2']]]);
        $retake = QuizAttempt::query()->latest('id')->first();
        $this->assertSame(['01-001', '01-002', '01-003', '01-004', '01-005'], collect($retake->answers)->pluck('id')->sort()->values()->all());
        $this->assertSame(0, $retake->score);
        $this->get("/kennis/wiskunde/cursus/tellen/toets/{$retake->id}")->assertOk()->assertSee('518')->assertSee('2x + 4');

        // Alles goed: beheerst. Een slechtere poging zet de status niet terug.
        $this->post('/kennis/wiskunde/cursus/tellen/toets', ['answers' => ['01-T01' => '8', '01-T02' => '42', '01-T03' => '2/4', '01-T04' => '2,5', '01-T05' => ['x' => '3', 'y' => '2']]]);
        $this->assertSame(100, QuizAttempt::query()->latest('id')->value('score'));
        $this->post('/kennis/wiskunde/cursus/tellen/toets', ['answers' => []]);

        $progress = ModuleProgress::query()->where('module_id', 1)->first();
        $this->assertSame(ModuleProgress::MASTERED, $progress->status);
        $this->assertSame(100, $progress->score);
        $this->assertSame(4, $progress->attempts);
        $this->assertNotNull($progress->completed_at);
    }

    public function test_dashboard_shows_new_progress(): void
    {
        $this->post('/kennis/wiskunde/cursus/tellen/toets', ['answers' => ['01-T01' => '8', '01-T02' => '42', '01-T03' => '1/2', '01-T04' => '2,5', '01-T05' => ['3', '2']]]);

        $this->get('/kennis/wiskunde')
            ->assertOk()
            ->assertSee('1 van 2 modules')
            ->assertSee('50%')
            ->assertSee('Vermenigvuldigen');

        $this->get('/kennis/wiskunde/voortgang')->assertOk()->assertSee('Correct eerste poging');
    }

    public function test_review_questions_come_back_later(): void
    {
        Carbon::setTestNow('2026-10-02 10:00:00');

        $this->get('/kennis/wiskunde/cursus/tellen/les/theorie');
        $this->postJson('/kennis/wiskunde/oefening/01-001/controleer', ['answer' => '1']);

        $this->assertSame(0, app(ReviewService::class)->dueCount());

        // Zwak onderwerp (< 50): na een paar uur weer aan de beurt.
        Carbon::setTestNow('2026-10-02 15:00:00');
        $session = app(ReviewService::class)->session();

        $this->assertTrue($session->isNotEmpty());
        $this->assertSame('weak', $session->first()['reason']);
        $this->get('/kennis/wiskunde/herhalen')->assertOk()->assertSee('Herhalingsvraag – module 1');

        // Goed beantwoorde herhalingsvragen verdwijnen voor vandaag.
        foreach ($session as $item) {
            $this->postJson("/kennis/wiskunde/oefening/{$item['exercise']->id}/controleer", [
                'answer' => $item['exercise']->isMultiple()
                    ? collect($item['exercise']->parts())->mapWithKeys(fn ($p) => [$p['label'] => (string) $p['answer']])->all()
                    : (string) $item['exercise']->answer,
                'context' => 'review',
            ])->assertJson(['correct' => true]);
        }

        $this->assertSame(0, app(ReviewService::class)->dueCount());
    }

    public function test_practice_history_and_library_pages(): void
    {
        $this->get('/kennis/wiskunde/oefenen')->assertOk()->assertSee('Vermenigvuldigen');
        $this->get('/kennis/wiskunde/oefenen/multiplication')->assertOk()->assertSee('Oefening 01-001');
        $this->get('/kennis/wiskunde/oefenen/onbekend')->assertNotFound();
        $this->get('/kennis/wiskunde/tijdlijn')->assertOk()->assertSee('Het Ishango-been')->assertSee('Module 1 · Tellen');
        $this->get('/kennis/wiskunde/personen')->assertOk()->assertSee('Euclides');
        $this->get('/kennis/wiskunde/personen/euclides')->assertOk()->assertSee('Euclides van Alexandrië');
        $this->get('/kennis/wiskunde/begrippen')->assertOk()->assertSee('Hoeveelheid');
        $this->get('/kennis/wiskunde/formules')->assertOk()->assertSee('Distributief');
        $this->get('/kennis/wiskunde/zoeken?q=ishango')->assertOk()->assertSee('Het Ishango-been');
    }

    public function test_settings_and_reset(): void
    {
        $this->post('/instellingen', ['name' => 'Ada'])->assertRedirect('/instellingen');
        $this->get('/kennis/wiskunde')->assertSee('Ada');

        $this->postJson('/kennis/wiskunde/oefening/01-001/controleer', ['answer' => '518']);
        $this->post('/instellingen/wissen', ['confirm' => 'nee'])->assertSessionHasErrors('confirm');
        $this->post('/instellingen/wissen', ['confirm' => 'WISSEN'])->assertRedirect('/instellingen');

        $this->assertSame(0, ExerciseAttempt::query()->count());
        $this->assertSame(0, TopicMastery::query()->count());
    }

    public function test_reset_can_be_limited_to_one_course(): void
    {
        $this->postJson('/kennis/wiskunde/oefening/01-001/controleer', ['answer' => '518'])->assertOk();
        $this->postJson('/kennis/geschiedenis/oefening/01-002/controleer', ['answer' => 'Een brief uit 1574'])->assertOk();

        $this->get('/instellingen')->assertOk()->assertSee('Back-up downloaden');
        $this->post('/instellingen/wissen', ['confirm' => 'WISSEN', 'course' => 'bestaat-niet'])->assertSessionHasErrors('course');
        $this->post('/instellingen/wissen', ['confirm' => 'WISSEN', 'course' => 'geschiedenis'])->assertRedirect('/instellingen');

        $this->assertSame(['wiskunde'], ExerciseAttempt::query()->distinct()->pluck('course')->all());
        $this->assertSame(['wiskunde'], TopicMastery::query()->distinct()->pluck('course')->all());
    }

    public function test_progress_can_be_exported_and_restored(): void
    {
        $this->post('/instellingen', ['name' => 'Ada']);
        $this->postJson('/kennis/wiskunde/oefening/01-001/controleer', ['answer' => '518'])->assertOk();
        $this->post('/kennis/wiskunde/cursus/tellen/toets', ['answers' => ['01-T01' => '518']])->assertRedirect();
        $attempts = ExerciseAttempt::query()->count();
        $mastery = TopicMastery::query()->pluck('score', 'topic')->all();

        $response = $this->get('/instellingen/back-up')->assertOk()->assertDownload();
        $backup = $response->streamedContent();
        $this->assertSame('kennis-door-de-eeuwen/voortgang', json_decode($backup, true)['format']);

        $this->post('/instellingen/wissen', ['confirm' => 'WISSEN']);
        $this->assertSame(0, ExerciseAttempt::query()->count());

        $file = UploadedFile::fake()->createWithContent('voortgang.json', $backup);
        $this->post('/instellingen/back-up', ['backup' => $file])->assertSessionHasErrors('replace');
        $this->post('/instellingen/back-up', ['backup' => $file, 'replace' => '1'])->assertRedirect('/instellingen');

        $this->assertSame($attempts, ExerciseAttempt::query()->count());
        $this->assertSame(1, QuizAttempt::query()->count());
        $this->assertSame(collect($mastery)->sortKeys()->all(), TopicMastery::query()->pluck('score', 'topic')->sortKeys()->all());
        $this->get('/kennis/wiskunde')->assertSee('Ada');
    }

    public function test_an_invalid_backup_changes_nothing(): void
    {
        $this->postJson('/kennis/wiskunde/oefening/01-001/controleer', ['answer' => '518'])->assertOk();

        $backup = fn (array $tables) => json_encode(['format' => 'kennis-door-de-eeuwen/voortgang', 'version' => 1, 'tables' => $tables]);
        $bad = [
            'geen json' => 'dit is geen json',
            'ander formaat' => json_encode(['format' => 'iets anders', 'version' => 1, 'tables' => []]),
            'onbekende kolom' => $backup(['exercise_attempts' => [['hack' => 1]]]),
            'ontbrekende kolom' => $backup(['exercise_attempts' => [['exercise_id' => '01-001']]]),
        ];

        foreach ($bad as $label => $content) {
            $file = UploadedFile::fake()->createWithContent('voortgang.json', $content);
            $this->post('/instellingen/back-up', ['backup' => $file, 'replace' => '1'])->assertSessionHasErrors('backup');
            $this->assertSame(1, ExerciseAttempt::query()->count(), "Back-up '{$label}' heeft toch iets veranderd.");
        }
    }
}
