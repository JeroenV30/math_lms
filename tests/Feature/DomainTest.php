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

        $this->get('/')
            ->assertOk()
            ->assertSee('Kennisdomeinen')
            ->assertSee('Biologie')
            ->assertSee('aria-current="page"', false);
    }

    public function test_app_name_comes_from_the_domain_file(): void
    {
        $this->useFixtureContent();

        $this->get('/')
            ->assertOk()
            ->assertSee('<title>Dashboard · Testomgeving</title>', false)
            ->assertSee('Ontdekken · Begrijpen');
    }

    public function test_dashboard_has_the_same_header_as_other_domains(): void
    {
        $this->useFixtureContent();

        // Wiskunde-dashboard en een domein in voorbereiding delen kruimelpad, monogram, tagline en naam.
        foreach (['/' => 'Wiskunde', '/kennis/biologie' => 'Biologie'] as $url => $name) {
            $this->get($url)
                ->assertOk()
                ->assertSee('Kaart van kennis')
                ->assertSee('<h1 class="page-title mt-1">'.$name.'</h1>', false);
        }

        $this->get('/')->assertSee('Getallen · Structuren · Logica');
    }

    public function test_theme_is_set_before_render_and_can_be_switched(): void
    {
        $this->useFixtureContent();

        $this->get('/')
            ->assertOk()
            ->assertSee("document.documentElement.dataset.theme", false)
            ->assertSee('Thema: systeem', false);
    }

    public function test_overview_lists_all_domains(): void
    {
        $this->useFixtureContent();

        $this->get('/kennis')
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

    public function test_available_domain_redirects_to_its_start_page(): void
    {
        $this->useFixtureContent();

        $this->get('/kennis/wiskunde')->assertRedirect('/');
        $this->get('/kennis/bestaat-niet')->assertNotFound();
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
}
