<?php

namespace Tests\Feature;

use App\Services\ContentValidator;
use App\Services\CourseRegistry;
use App\Services\DuplicateChecker;
use Illuminate\Support\Facades\File;
use Tests\TestCase;

/**
 * De dubbelingencontrole (onderdeel van content:validate), op een kopie van de testcursus
 * waarin telkens één soort dubbeling is aangebracht.
 */
class DuplicateCheckTest extends TestCase
{
    private string $copy;

    protected function setUp(): void
    {
        parent::setUp();

        $this->copy = sys_get_temp_dir().'/lms-duplicates-'.uniqid();
        File::copyDirectory(__DIR__.'/../Fixtures/content', $this->copy);
        config(['course.content_path' => $this->copy]);
    }

    protected function tearDown(): void
    {
        File::deleteDirectory($this->copy);

        parent::tearDown();
    }

    public function test_the_fixture_has_no_duplicates(): void
    {
        $this->assertSame([], $this->duplicates());
    }

    public function test_the_same_person_under_two_ids_is_found(): void
    {
        $this->edit('domains/wiskunde/history/people.json', function (array &$data) {
            $euclides = collect($data['people'])->firstWhere('id', 'euclides');
            $data['people'][] = [...$euclides, 'id' => 'euclides-van-alexandrie', 'name' => 'Euclides van Alexandrië'];
        });

        $this->assertMatches("/'euclides(-van-alexandrie)?' en 'euclides(-van-alexandrie)?' lijken dezelfde persoon/");
    }

    public function test_domains_must_share_the_id_of_a_shared_person_and_event(): void
    {
        $this->edit('domains/wiskunde/history/people.json', function (array &$data) {
            $data['people'][] = ['id' => 'herodotos', 'name' => 'Herodotos', 'full_name' => 'Herodotus van Halicarnassus', 'lived' => 'ca. 484–425 v.Chr.', 'sort_year' => -484];
        });
        File::put($this->copy.'/domains/geschiedenis/history/timeline.json', json_encode(['events' => [
            ['id' => 'ishango', 'year_label' => 'ca. 20.000 v.Chr.', 'sort_year' => -20000, 'title' => 'Het Ishango-been', 'modules' => [1]],
            ['id' => 'euclides-elementen', 'year_label' => '1482', 'sort_year' => 1482, 'title' => 'Eerste gedrukte uitgave', 'modules' => [1]],
        ]]));

        $this->assertMatches("/wiskunde 'herodotos' en geschiedenis 'herodotus' lijken dezelfde persoon/");
        $this->assertMatches("/wiskunde 'ishango-been' en geschiedenis 'ishango' lijken dezelfde gebeurtenis/");
        $this->assertMatches("/gebeurtenis-id 'euclides-elementen' betekent iets anders in wiskunde/");
    }

    public function test_events_in_the_same_year_with_look_alike_titles_are_not_duplicates(): void
    {
        File::put($this->copy.'/domains/geschiedenis/history/timeline.json', json_encode(['events' => [
            ['id' => 'aanslag-sarajevo-1914', 'year_label' => '1914', 'sort_year' => 1914, 'title' => 'De aanslag in Sarajevo', 'modules' => [1]],
            ['id' => 'marne-1914', 'year_label' => '1914', 'sort_year' => 1914, 'title' => 'De slag bij de Marne', 'modules' => [1]],
        ]]));

        $this->assertSame([], $this->duplicates());
    }

    public function test_an_identical_question_is_found(): void
    {
        $this->edit('domains/wiskunde/modules/01-tellen/exercises.json', function (array &$data) {
            $data['exercises'][] = [...$data['exercises'][0], 'id' => '01-099', 'question' => '  Bereken $37 \\times 14$ '];
        });

        $this->assertContains('01-099: dezelfde vraag als 01-001.', $this->duplicates());
    }

    public function test_questions_that_differ_only_in_a_sign_are_not_duplicates(): void
    {
        $this->edit('domains/wiskunde/modules/01-tellen/exercises.json', function (array &$data) {
            $data['exercises'][] = [...$data['exercises'][0], 'id' => '01-098', 'question' => 'Bereken $37 \\times -14$.'];
        });

        $this->assertSame([], $this->duplicates());
    }

    public function test_doubles_in_module_json_are_found(): void
    {
        $this->edit('domains/wiskunde/modules/01-tellen/module.json', function (array &$data) {
            $data['glossary'][] = ['term' => 'hoeveelheid', 'definition' => 'Nog eens.'];
            $data['timeline'][] = 'ishango-been';
        });

        $this->assertContains("Module 1: 'hoeveelheid' staat twee keer in glossary van module.json.", $this->duplicates());
        $this->assertContains("Module 1: 'ishango-been' staat twee keer in timeline van module.json.", $this->duplicates());
    }

    public function test_a_repeated_paragraph_is_found_but_a_repeated_source_is_not(): void
    {
        $paragraph = str_repeat('Een herder die zijn schapen telt met steentjes, legt een een-op-eenrelatie tussen twee verzamelingen. ', 2);
        $source = ":::history Ishango\n".str_repeat('Een bronfragment dat in het practicum terugkomt en daar opnieuw gelezen wordt. ', 2)."\n:::";

        foreach (['01-introductie.md', '02-theorie.md'] as $file) {
            File::append($this->copy.'/domains/wiskunde/modules/01-tellen/'.$file, "\n\n{$paragraph}\n\n{$source}\n");
        }

        $found = $this->duplicates();
        $this->assertCount(1, $found);
        $this->assertStringContainsString('Module 1/02-theorie.md: alinea staat ook in Module 1/01-introductie.md', $found[0]);
    }

    public function test_a_quiz_question_that_leans_on_the_previous_one_is_an_error(): void
    {
        $this->edit('domains/wiskunde/modules/01-tellen/quiz.json', function (array &$data) {
            $data['questions'][1]['question'] = 'Dezelfde schapen: hoeveel poten hebben ze samen?';
        });
        $this->edit('domains/wiskunde/modules/01-tellen/exercises.json', function (array &$data) {
            $data['exercises'][1]['question'] = 'Dezelfde schapen: hoeveel poten hebben ze samen?';
        });
        $this->app->forgetInstance(CourseRegistry::class);
        $errors = app(ContentValidator::class)->validate()['errors'];

        // Een oefening mag op de les leunen (ze komt dan niet in een herkansing), een toetsvraag niet.
        $this->assertNotEmpty(preg_grep('/^01-T\d\d: toetsvraag verwijst naar de les of een eerdere vraag/', $errors));
        $this->assertEmpty(preg_grep('/^01-002:/', $errors));
    }

    /**
     * @return list<string>
     */
    private function duplicates(): array
    {
        $this->app->forgetInstance(CourseRegistry::class);

        return app(DuplicateChecker::class)->check();
    }

    private function assertMatches(string $pattern): void
    {
        $found = $this->duplicates();

        $this->assertNotEmpty(preg_grep($pattern, $found), "Geen melding die past bij {$pattern}:\n".implode("\n", $found));
    }

    private function edit(string $file, callable $change): void
    {
        $path = $this->copy.'/'.$file;
        $data = json_decode(file_get_contents($path), true);
        $change($data);
        file_put_contents($path, json_encode($data, JSON_UNESCAPED_UNICODE));
    }
}
