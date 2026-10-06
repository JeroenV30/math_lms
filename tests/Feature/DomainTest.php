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
