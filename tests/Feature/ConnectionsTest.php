<?php

namespace Tests\Feature;

use App\Services\ConnectionService;
use App\Services\CourseRegistry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Verbindingen tussen domeinen, op de echte content: dezelfde persoon-id in twee domeinen
 * koppelt profielen en modules, en /tijdlijn toont de gebeurtenissen van alle domeinen.
 */
class ConnectionsTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_person_links_to_the_same_person_in_other_domains(): void
    {
        $this->get('/kennis/wiskunde/personen/eratosthenes')
            ->assertOk()
            ->assertSee('Ook in andere domeinen')
            ->assertSee('href="'.route('people.show', ['domain' => 'aarde-en-ruimte', 'person' => 'eratosthenes']).'"', false);
    }

    public function test_related_modules_work_in_both_directions(): void
    {
        $courses = app(CourseRegistry::class);
        $connections = app(ConnectionService::class);

        $fromMath = $connections->relatedModules($courses->for('wiskunde')->getModule(11), 'wiskunde');
        $this->assertTrue($fromMath->contains(fn (array $r) => $r['domain']['id'] === 'aarde-en-ruimte' && $r['module']->id === 1));

        $fromEarth = $connections->relatedModules($courses->for('aarde-en-ruimte')->getModule(1), 'aarde-en-ruimte');
        $this->assertTrue($fromEarth->contains(fn (array $r) => $r['domain']['id'] === 'wiskunde' && $r['module']->id === 11));

        $this->get('/kennis/wiskunde/cursus/11')->assertOk()->assertSee('Verwant in andere domeinen')->assertSee('Via Eratosthenes');
    }

    public function test_the_shared_timeline_shows_every_domain_in_time_order(): void
    {
        $events = app(ConnectionService::class)->timeline();

        $this->assertSame($events->pluck('sort_year')->sort()->values()->all(), $events->pluck('sort_year')->all());
        $this->assertGreaterThan(5, $events->pluck('domain.id')->unique()->count());
        $this->assertNotContains('', $events->pluck('period')->all());

        $this->get('/tijdlijn')->assertOk()->assertSee('Oudheid')->assertSee('Geschiedenis')->assertSee('Biologie');
        $this->get('/')->assertSee('href="'.route('history.all').'"', false);
    }
}
