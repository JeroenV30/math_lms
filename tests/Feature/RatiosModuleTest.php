<?php

namespace Tests\Feature;

use App\Models\ExerciseAttempt;
use App\Models\ModuleProgress;
use App\Models\QuizAttempt;
use App\Services\ContentService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RatiosModuleTest extends TestCase
{
    use RefreshDatabase;

    public function test_real_lessons_render_with_working_exercise_and_widget_references(): void
    {
        $module = app(ContentService::class)->getModule('verhoudingen');

        foreach ($module->lessons as $lesson) {
            $this->get('/course/verhoudingen/lesson/'.$lesson->slug)
                ->assertOk()
                ->assertDontSee('directive-error', false);
        }

        $this->get('/course/verhoudingen/lesson/verhoudingen-en-tabellen')
            ->assertSee('Verhoudingstabel')
            ->assertSee('Oefening 10-013');

        $this->get('/course/verhoudingen/lesson/samenvatting')
            ->assertSee('Start de toets');
    }

    public function test_misconceptions_and_multi_part_answers_are_handled_in_real_exercises(): void
    {
        $this->postJson('/exercise/10-005/check', ['answer' => '1/4'])
            ->assertOk()
            ->assertJson(['valid' => true, 'correct' => false])
            ->assertJsonPath('feedback', 'Je vergelijkt siroop met alleen het water. Alle limonade bestaat uit <span class="math math-inline">1+4=5</span> delen.');

        $this->postJson('/exercise/10-011/check', ['answer' => ['eerste bedrag' => '96', 'tweede bedrag' => '140']])
            ->assertOk()
            ->assertJson(['valid' => true, 'correct' => false])
            ->assertJsonPath('message', 'Nog niet goed: tweede bedrag. De rest klopt.');

        $this->postJson('/exercise/10-036/check', ['answer' => '2/6'])
            ->assertOk()
            ->assertJson(['valid' => true, 'correct' => true]);

        $this->assertSame(3, ExerciseAttempt::query()->where('module_id', 10)->count());
    }

    public function test_real_quiz_can_be_submitted_and_marks_the_module_mastered(): void
    {
        $this->get('/course/verhoudingen/quiz')->assertOk()->assertSee('10-T15');

        $response = $this->post('/course/verhoudingen/quiz', ['answers' => [
            '10-T01' => ['eerste getal' => '3', 'tweede getal' => '4'],
            '10-T02' => '27',
            '10-T03' => '2/9',
            '10-T04' => '28',
            '10-T05' => ['eerste bedrag' => '80', 'tweede bedrag' => '120', 'derde bedrag' => '160'],
            '10-T06' => '24',
            '10-T07' => '16',
            '10-T08' => '1,4',
            '10-T09' => '9',
            '10-T10' => '20000',
            '10-T11' => '4',
            '10-T12' => '15',
            '10-T13' => '25',
            '10-T14' => '48',
            '10-T15' => ['prijs (€/kg)' => '2,8', 'dichtheid (g/cm³)' => '2,7'],
        ]]);

        $attempt = QuizAttempt::query()->sole();
        $response->assertRedirect('/course/verhoudingen/quiz/'.$attempt->id);
        $this->assertSame(100, $attempt->score);
        $this->assertSame(15, $attempt->correct);
        $this->assertSame(ModuleProgress::MASTERED, ModuleProgress::query()->where('module_id', 10)->value('status'));
        $this->get('/course/verhoudingen/quiz/'.$attempt->id)->assertOk();
    }
}
