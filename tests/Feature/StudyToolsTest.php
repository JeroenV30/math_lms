<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Voorlezen en studiemuziek: generieke hulpmiddelen naast de lesstof.
 */
class StudyToolsTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->useFixtureContent();
    }

    public function test_lessons_are_marked_for_reading_aloud(): void
    {
        $this->get('/kennis/wiskunde/cursus/tellen/les/introductie')
            ->assertOk()
            ->assertSee('data-read-aloud', false)
            ->assertSee('x-data="reader()"', false)
            ->assertSee('Voorlezen');
    }

    public function test_every_page_offers_study_music(): void
    {
        $this->get('/')->assertOk()->assertSee('musicLauncher', false)->assertSee(route('music.player'), false);
        $this->get('/kennis/wiskunde/cursus/tellen/les/introductie')->assertOk()->assertSee('musicLauncher', false);
    }

    public function test_music_player_window_renders(): void
    {
        $this->get('/studiemuziek')
            ->assertOk()
            ->assertSee('Studiemuziek')
            ->assertSee('x-data="musicPlayer()"', false)
            ->assertSee('Achtergrondgeluid');
    }

    public function test_settings_offer_voice_choice(): void
    {
        $this->get('/instellingen')
            ->assertOk()
            ->assertSee('x-data="voiceSettings()"', false)
            ->assertSee('Probeer de stem');
    }
}
