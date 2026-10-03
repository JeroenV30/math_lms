<?php

namespace Tests\Feature;

use App\Models\ModuleProgress;
use App\Models\QuizAttempt;
use App\Services\ContentService;
use App\ValueObjects\Exercise;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FinalCourseTest extends TestCase
{
    use RefreshDatabase;

    public function test_complete_curriculum_has_lessons_practice_and_assessment_for_all_42_modules(): void
    {
        $content = app(ContentService::class);
        $modules = $content->availableModules();

        $this->assertSame(range(1, 42), $modules->pluck('id')->values()->all());

        foreach ($modules as $module) {
            $kinds = $module->lessons->pluck('kind')->all();
            foreach (['intro', 'theory', 'history', 'practice', 'summary'] as $kind) {
                $this->assertContains($kind, $kinds, "Module {$module->id} mist {$kind}.");
            }

            $this->assertGreaterThanOrEqual(20, $content->exercises($module)->count());
            $this->assertCount(15, $content->quiz($module)['questions']);
        }
    }

    public function test_final_module_assessments_can_be_submitted_and_mastery_is_persisted(): void
    {
        $content = app(ContentService::class);

        foreach ($content->availableModules()->where('id', '>=', 34) as $module) {
            $answers = $content->quiz($module)['questions']->mapWithKeys(function (Exercise $question) {
                $answer = $question->isMultiple()
                    ? array_map(fn ($part) => (string) $part['answer'], $question->parts())
                    : str_replace('.', ',', (string) $question->answer);

                return [$question->id => $answer];
            })->all();

            $response = $this->post('/course/'.$module->slug.'/quiz', ['answers' => $answers]);
            $attempt = QuizAttempt::query()->where('module_id', $module->id)->sole();

            $response->assertRedirect(route('quiz.result', [$module->slug, $attempt->id]));
            $this->get(route('quiz.result', [$module->slug, $attempt->id]))->assertOk();
            $this->assertSame(100, $attempt->score);
            $this->assertSame(15, $attempt->correct);
            $this->assertDatabaseHas('module_progress', [
                'module_id' => $module->id,
                'status' => ModuleProgress::MASTERED,
                'score' => 100,
            ]);
        }
    }

    public function test_research_numeric_results_match_the_supplied_csv(): void
    {
        $file = fopen(public_path('datasets/m42-pinguins-palmer-2009.csv'), 'r');
        $columns = fgetcsv($file, escape: '');
        $rows = [];
        while (($values = fgetcsv($file, escape: '')) !== false) {
            $rows[] = array_combine($columns, $values);
        }
        fclose($file);

        $this->assertCount(120, $rows);
        $this->assertCount(120, array_unique(array_column($rows, 'id')));
        $this->assertSame(['2009'], array_values(array_unique(array_column($rows, 'jaar'))));

        $men = $women = [];
        foreach ($rows as $row) {
            if ($row['soort'] !== 'Adelie' || $row['lichaamsgewicht_g'] === 'NA') {
                continue;
            }
            if ($row['geslacht'] === 'man') {
                $men[] = (float) $row['lichaamsgewicht_g'];
            } elseif ($row['geslacht'] === 'vrouw') {
                $women[] = (float) $row['lichaamsgewicht_g'];
            }
        }

        $this->assertCount(26, $men);
        $this->assertCount(26, $women);
        $difference = array_sum($men) / count($men) - array_sum($women) / count($women);
        $exercise = app(ContentService::class)->getExercise('42-011');
        $this->assertEqualsWithDelta($difference, $exercise->answer, $exercise->options['tolerance']);

        $this->get('/course/eindonderzoek/lesson/introductie')
            ->assertOk()->assertSee('/datasets/m42-pinguins-palmer-2009.csv', false);
    }
}
