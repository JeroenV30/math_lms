<?php

namespace Tests\Feature;

use App\Services\DomainService;
use Illuminate\Foundation\Testing\RefreshDatabase;
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

        // Een domein in voorbereiding: geen wiskundemenu, wel de algemene onderdelen.
        $this->get('/kennis/biologie')
            ->assertOk()
            ->assertSee('aria-label="Menu Biologie"', false)
            ->assertDontSee('href="'.route('mathematicians.index').'"', false)
            ->assertDontSee('Zoeken in')
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
        $this->assertSame('starter', $domains->stage($domains->find('geschiedenis')));
        $this->assertSame('planned', $domains->stage(['id' => 'x', 'status' => 'planned']));

        // Kaart, zijbalk en domeinpagina gebruiken hetzelfde label.
        $this->get('/')->assertOk()->assertSee('eerste les')->assertDontSee('in voorbereiding');
        $this->get('/kennis/geschiedenis')->assertOk()->assertSee('>eerste les</span>', false)->assertSee('Eerste les');
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

    public function test_domain_without_a_starter_lesson_returns_not_found_for_lesson_route(): void
    {
        $this->useFixtureContent();

        $this->get('/kennis/biologie/les/wat-is-leven')->assertNotFound();
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

    public function test_every_real_non_math_domain_has_a_readable_starter_lesson(): void
    {
        $domains = app(DomainService::class);

        foreach ($domains->all()->where('id', '!=', 'wiskunde') as $domain) {
            $lesson = $domains->starterLesson($domain);

            $this->assertNotNull($lesson, "{$domain['id']} mist een startles.");
            $this->assertFileExists($domains->starterLessonPath($domain));

            $response = $this->get(route('domains.lesson', [$domain['id'], $lesson['slug']]))
                ->assertOk()
                ->assertSee($lesson['title'])
                ->assertSee($lesson['module'])
                ->assertSee('Menu '.$domain['name']);

            $this->assertSame(1, substr_count($response->getContent(), '<h1'));
        }
    }
}
