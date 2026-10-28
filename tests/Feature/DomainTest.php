<?php

namespace Tests\Feature;

use App\Services\CourseRegistry;
use App\Services\DomainService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class DomainTest extends TestCase
{
    use RefreshDatabase;

    public function test_domain_rail_is_shown_on_every_page(): void
    {
        $this->useFixtureContent();

        $this->get('/kennis/wiskunde')
            ->assertOk()
            ->assertSee('Kennisdomeinen')
            ->assertSee('Biologie')
            ->assertSee('aria-current="page"', false);
    }

    public function test_app_name_comes_from_the_domain_file(): void
    {
        $this->useFixtureContent();

        $this->get('/kennis/wiskunde')
            ->assertOk()
            ->assertSee('<title>Dashboard · Testomgeving</title>', false)
            ->assertSee('Ontdekken · Begrijpen');
    }

    public function test_dashboard_has_the_same_header_as_other_domains(): void
    {
        $this->useFixtureContent();

        // Wiskunde-dashboard en een domein in voorbereiding delen kruimelpad, monogram, tagline en naam.
        foreach (['/kennis/wiskunde' => 'Wiskunde', '/kennis/biologie' => 'Biologie'] as $url => $name) {
            $this->get($url)
                ->assertOk()
                ->assertSee('Kaart van kennis')
                ->assertSee('<h1 class="page-title mt-1">'.$name.'</h1>', false);
        }

        $this->get('/kennis/wiskunde')->assertSee('Getallen · Structuren · Logica');
    }

    public function test_top_bar_follows_the_active_domain(): void
    {
        $this->useFixtureContent();

        // Wiskunde: eigen menu, zoeken en bibliotheek; het actieve domein staat naast het logo.
        $this->get('/kennis/wiskunde')
            ->assertOk()
            ->assertSee('aria-label="Menu Wiskunde"', false)
            ->assertSee('href="'.route('mathematicians.index').'"', false)
            ->assertSee('Zoeken in Wiskunde')
            ->assertSee('Formulebibliotheek');

        // Een domein in voorbereiding: geen wiskundemenu, wel de algemene onderdelen; zoeken gaat over alle domeinen.
        $this->get('/kennis/biologie')
            ->assertOk()
            ->assertSee('aria-label="Menu Biologie"', false)
            ->assertDontSee('href="'.route('mathematicians.index').'"', false)
            ->assertDontSee('Zoeken in Biologie')
            ->assertSee('Zoeken in alle domeinen')
            ->assertDontSee('Formulebibliotheek')
            ->assertSee('Instellingen');

        // De kaart hoort bij geen domein; het logo leidt ernaartoe.
        $this->get('/')
            ->assertOk()
            ->assertDontSee('href="'.route('practice.index').'"', false)
            ->assertSee('href="'.route('domains.index').'" class="flex shrink-0 items-center gap-2.5"', false);
    }

    public function test_theme_is_set_before_render_and_can_be_switched(): void
    {
        $this->useFixtureContent();

        $this->get('/kennis/wiskunde')
            ->assertOk()
            ->assertSee("document.documentElement.dataset.theme", false)
            ->assertSee('Thema: systeem', false);
    }

    public function test_overview_lists_all_domains(): void
    {
        $this->useFixtureContent();

        $this->get('/')
            ->assertOk()
            ->assertSee('Kaart van menselijke kennis')
            ->assertSee('in voorbereiding')
            ->assertSee('beschikbaar');
    }

    public function test_planned_domain_shows_its_planned_structure(): void
    {
        $this->useFixtureContent();

        $this->get('/kennis/biologie')
            ->assertOk()
            ->assertSee('In voorbereiding')
            ->assertSee('De cel')
            ->assertSee('Evolutie');
    }

    public function test_domain_stage_drives_every_status_label(): void
    {
        $domains = app(DomainService::class);

        $this->assertSame('available', $domains->stage($domains->find('wiskunde')));
        $this->assertSame('building', $domains->stage($domains->find('geschiedenis')));
        $this->assertSame('planned', $domains->stage(['id' => 'x', 'status' => 'planned']));

        // Kaart en zijbalk gebruiken hetzelfde label; elk domein heeft inmiddels een cursus.
        $this->get('/')->assertOk()->assertSee('>in opbouw</span>', false)->assertSee('In opbouw')->assertDontSee('in voorbereiding');
    }

    public function test_page_headers_share_one_breadcrumb_trail(): void
    {
        $this->useFixtureContent();

        // Elke pagina binnen een domein begint bij de kaart en het domein.
        $this->get('/kennis/wiskunde/cursus/tellen')
            ->assertOk()
            ->assertSeeInOrder(['Kruimelpad', 'Kaart van kennis', 'Wiskunde', 'Cursus', 'Deel I'], false);
        $this->get('/kennis/wiskunde/oefenen')
            ->assertOk()
            ->assertSeeInOrder(['Kruimelpad', 'Kaart van kennis', 'Wiskunde', 'Oefenen per onderwerp'], false);

        // Instellingen horen bij geen domein.
        $this->get('/instellingen')
            ->assertOk()
            ->assertDontSee('aria-label="Menu Wiskunde"', false)
            ->assertSeeInOrder(['Kruimelpad', 'Kaart van kennis', 'Instellingen'], false);
    }

    public function test_old_starter_lesson_address_needs_a_course(): void
    {
        $this->useFixtureContent();

        $this->get('/kennis/biologie/les/wat-is-leven')->assertNotFound();
        $this->get('/kennis/geschiedenis/les/wat-dan-ook')->assertRedirect('/kennis/geschiedenis/cursus/bronnen/les/introductie');
    }

    public function test_domain_with_a_course_shows_its_dashboard(): void
    {
        $this->useFixtureContent();

        $this->get('/kennis/wiskunde')->assertOk()->assertSee('Voortgang')->assertSee('De reis');
        $this->get('/kennis/bestaat-niet')->assertNotFound();

        // Cursuspagina's bestaan alleen voor domeinen met een cursus.
        $this->get('/kennis/biologie/cursus')->assertNotFound();
    }

    public function test_map_is_the_start_page_and_old_addresses_redirect(): void
    {
        $this->useFixtureContent();

        $this->get('/')->assertOk()->assertSee('Kaart van menselijke kennis');

        foreach ([
            '/kennis' => '/',
            '/course' => '/kennis/wiskunde/cursus',
            '/course/tellen' => '/kennis/wiskunde/cursus/tellen',
            '/course/tellen/lesson/theorie' => '/kennis/wiskunde/cursus/tellen/les/theorie',
            '/course/tellen/quiz' => '/kennis/wiskunde/cursus/tellen/toets',
            '/course/tellen/quiz/3' => '/kennis/wiskunde/cursus/tellen/toets/3',
            '/mathematicians/euclides' => '/kennis/wiskunde/personen/euclides',
            '/search?q=ishango' => '/kennis/wiskunde/zoeken?q=ishango',
            '/settings' => '/instellingen',
        ] as $old => $new) {
            $this->get($old)->assertStatus(301)->assertRedirect($new);
        }
    }

    public function test_progress_is_kept_per_course(): void
    {
        $this->useFixtureContent();

        $this->post('/kennis/wiskunde/cursus/tellen/les/introductie/gelezen');

        $this->assertDatabaseHas('lesson_progress', ['course' => 'wiskunde', 'module_id' => 1, 'lesson_slug' => 'introductie']);
        $this->assertDatabaseHas('module_progress', ['course' => 'wiskunde', 'module_id' => 1]);

        // Module 1 van geschiedenis is een andere module dan module 1 van wiskunde.
        $this->get('/kennis/geschiedenis/cursus/bronnen')->assertOk()->assertSee('Een brief uit Leiden');
        $this->assertDatabaseMissing('lesson_progress', ['course' => 'geschiedenis']);

        $this->post('/kennis/geschiedenis/cursus/bronnen/les/introductie/gelezen')
            ->assertRedirect('/kennis/geschiedenis/cursus/bronnen/toets');
        $this->assertDatabaseHas('lesson_progress', ['course' => 'geschiedenis', 'module_id' => 1, 'lesson_slug' => 'introductie']);
        $this->assertSame(1, DB::table('lesson_progress')->where('course', 'wiskunde')->count());
    }

    public function test_choice_exercises_and_quizzes_work_in_any_course(): void
    {
        $this->useFixtureContent();

        $this->get('/kennis/geschiedenis/cursus/bronnen/les/introductie')
            ->assertOk()
            ->assertSee('type="radio"', false)
            ->assertSee('Een schoolboek uit 1950');

        $this->postJson('/kennis/geschiedenis/oefening/01-002/controleer', ['answer' => 'Een schoolboek uit 1950'])
            ->assertOk()->assertJson(['correct' => false])->assertSee('secundaire bron');
        $this->postJson('/kennis/geschiedenis/oefening/01-002/controleer', ['answer' => 'Een brief uit 1574'])
            ->assertOk()->assertJson(['correct' => true]);
        $this->assertDatabaseHas('topic_mastery', ['course' => 'geschiedenis', 'topic' => 'sources']);

        $this->get('/kennis/geschiedenis/cursus/bronnen/toets')->assertOk()->assertSee('name="answers[01-T01]"', false);
        $this->post('/kennis/geschiedenis/cursus/bronnen/toets', ['answers' => [
            '01-T01' => 'Ze is ontstaan in de onderzochte tijd',
            '01-T02' => 'secundaire bron',
            '01-T03' => ['Een brief uit 1574', 'Een schoolboek uit 1950', 'Een recente website'],
        ]])->assertRedirect();

        $this->assertDatabaseHas('quiz_attempts', ['course' => 'geschiedenis', 'score' => 100]);
        $this->assertDatabaseHas('module_progress', ['course' => 'geschiedenis', 'module_id' => 1, 'status' => 'mastered']);
        $this->assertDatabaseMissing('module_progress', ['course' => 'wiskunde', 'status' => 'mastered']);
    }

    public function test_content_ids_lists_the_history_ids_of_a_course(): void
    {
        $this->useFixtureContent();

        $this->artisan('content:ids geschiedenis')->expectsOutputToContain('`herodotus`')->assertSuccessful();
        $this->artisan('content:ids onbekend')->assertFailed();
    }

    public function test_order_exercises_and_quizzes_work(): void
    {
        $this->useFixtureContent();

        $this->get('/kennis/geschiedenis/cursus/bronnen/les/introductie')
            ->assertOk()
            ->assertSee('order-list', false)
            ->assertSee('Een kroniek uit 1614');

        $right = ['Een brief uit 1574', 'Een kroniek uit 1614', 'Een schoolboek uit 1950', 'Een recente website'];

        $this->postJson('/kennis/geschiedenis/oefening/01-003/controleer', ['answer' => array_reverse($right)])
            ->assertOk()->assertJson(['correct' => false])->assertSee('omgedraaid');
        $this->postJson('/kennis/geschiedenis/oefening/01-003/controleer', ['answer' => ['Een brief uit 1574', 'Een schoolboek uit 1950', 'Een kroniek uit 1614', 'Een recente website']])
            ->assertOk()->assertJson(['correct' => false, 'message' => 'Nog niet goed: 2 van de 4 staan op de juiste plek.']);
        $this->postJson('/kennis/geschiedenis/oefening/01-003/controleer', ['answer' => ['Een brief uit 1574']])
            ->assertOk()->assertJson(['valid' => false]);
        $this->postJson('/kennis/geschiedenis/oefening/01-003/controleer', ['answer' => $right])
            ->assertOk()->assertJson(['correct' => true, 'message' => 'Correct: de volgorde klopt.']);
        $this->assertDatabaseHas('exercise_attempts', ['exercise_id' => '01-003', 'answer' => implode(' → ', $right), 'is_correct' => true]);

        $this->get('/kennis/geschiedenis/cursus/bronnen/toets')->assertOk()->assertSee('name="answers[01-T03][]"', false);
        $this->post('/kennis/geschiedenis/cursus/bronnen/toets', ['answers' => [
            '01-T03' => ['Een recente website', 'Een brief uit 1574', 'Een schoolboek uit 1950'],
        ]])->assertRedirect();
        $this->assertDatabaseHas('quiz_attempts', ['course' => 'geschiedenis', 'correct' => 0, 'total' => 3]);
    }

    public function test_second_course_gets_its_own_menu_labels_and_exercises(): void
    {
        $this->useFixtureContent();

        // Menu volgt de cursus: personen heten hier historici; zonder tijdlijn of formules geen links daarheen.
        $this->get('/kennis/geschiedenis')
            ->assertOk()
            ->assertSee('aria-label="Menu Geschiedenis"', false)
            ->assertSee('href="'.url('/kennis/geschiedenis/personen').'"', false)
            ->assertSee('Historici')
            ->assertDontSee('href="'.url('/kennis/geschiedenis/tijdlijn').'"', false)
            ->assertDontSee('Formulebibliotheek')
            ->assertSee('Werken met bronnen');

        $this->get('/kennis/geschiedenis/personen')
            ->assertOk()
            ->assertSee('De mensen achter de geschiedschrijving')
            ->assertSee('Herodotus');
        $this->get('/kennis/geschiedenis/personen/herodotus')->assertOk()->assertSee('Historici');

        // De lessen tonen leerdoelen, begrippen en oefeningen van de eigen cursus.
        $this->get('/kennis/geschiedenis/cursus/bronnen/les/introductie')
            ->assertOk()
            ->assertSee('Je kunt primaire en secundaire bronnen onderscheiden.')
            ->assertSee('Primaire bron')
            ->assertSee('Waarom is een brief uit 1574');

        $this->postJson('/kennis/geschiedenis/oefening/01-001/controleer', [
            'answer' => 'De brief is in 1574 tijdens het beleg zelf geschreven, dus in de onderzochte tijd.',
        ])->assertOk()->assertJson(['correct' => true]);
        $this->assertDatabaseHas('exercise_attempts', ['course' => 'geschiedenis', 'exercise_id' => '01-001']);
        $this->assertDatabaseMissing('exercise_attempts', ['course' => 'wiskunde']);
    }

    public function test_real_domain_file_is_complete(): void
    {
        $domains = app(DomainService::class)->all();

        $this->assertCount(10, $domains);
        $this->assertSame('wiskunde', $domains->first()['id']);

        foreach ($domains as $domain) {
            foreach (['id', 'name', 'tagline', 'monogram', 'color', 'status', 'description'] as $field) {
                $this->assertArrayHasKey($field, $domain, "{$domain['id']} mist {$field}");
            }
            $this->assertMatchesRegularExpression('/^#[0-9a-f]{6}$/i', $domain['color']);
        }
    }

    public function test_every_real_domain_has_a_course_with_a_first_lesson(): void
    {
        $courses = app(CourseRegistry::class);

        foreach (app(DomainService::class)->all() as $domain) {
            $this->assertTrue($courses->has($domain['id']), "{$domain['id']} heeft geen cursus.");

            $module = $courses->for($domain['id'])->getModule(1);
            $lesson = $module->firstLesson();

            $response = $this->get("/kennis/{$domain['id']}/cursus/{$module->slug}/les/{$lesson->slug}")
                ->assertOk()
                ->assertSee($lesson->title)
                ->assertSee($module->title)
                ->assertSee('Menu '.$domain['name'])
                ->assertSee('Na deze module');

            $this->assertSame(1, substr_count($response->getContent(), '<h1'));
            $this->get("/kennis/{$domain['id']}")->assertOk()->assertSee($module->title);
        }
    }
}
