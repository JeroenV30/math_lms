<?php

namespace Tests\Feature;

use App\Services\ContentService;
use App\Services\DomainService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\TestResponse;
use Tests\TestCase;

class PublishedLessonsTest extends TestCase
{
    use RefreshDatabase;

    /** Dubbel ge-escapete tekens: in de browser zichtbaar als &quot;, &amp; enzovoort. */
    private const DOUBLE_ESCAPED = ['&amp;quot;', '&amp;amp;', '&amp;#039;', '&amp;lt;', '&amp;gt;', '&amp;nbsp;'];

    public function test_all_published_lessons_and_quizzes_can_be_opened(): void
    {
        foreach (app(ContentService::class)->availableModules() as $module) {
            $this->assertCleanText($this->get('/kennis/wiskunde/cursus/'.$module->slug)->assertOk());

            foreach ($module->lessons as $lesson) {
                $response = $this->get('/kennis/wiskunde/cursus/'.$module->slug.'/les/'.$lesson->slug)
                    ->assertOk()
                    ->assertDontSee('directive-error', false);

                $this->assertCleanText($response);
                // De lestitel is de enige <h1>; een openingskop "# …" in de Markdown wordt geen tweede.
                $this->assertSame(1, substr_count($response->getContent(), '<h1'), "Les {$module->id}/{$lesson->slug} heeft meer dan één <h1>.");
            }

            $this->assertCleanText($this->get('/kennis/wiskunde/cursus/'.$module->slug.'/toets')->assertOk());
        }
    }

    public function test_overview_and_library_pages_show_no_escaped_entities(): void
    {
        $pages = ['/', '/kennis/wiskunde/cursus', '/kennis/wiskunde/tijdlijn', '/kennis/wiskunde/personen', '/kennis/wiskunde/begrippen', '/kennis/wiskunde/formules', '/kennis/wiskunde', '/kennis/wiskunde/voortgang', '/kennis/wiskunde/oefenen'];

        foreach (app(ContentService::class)->mathematicians() as $person) {
            $pages[] = '/kennis/wiskunde/personen/'.$person['id'];
        }

        foreach (app(DomainService::class)->all() as $domain) {
            if (! app(DomainService::class)->isAvailable($domain)) {
                $pages[] = '/kennis/'.$domain['id'];
            }
        }

        foreach ($pages as $page) {
            $this->assertCleanText($this->get($page)->assertOk());
        }
    }

    private function assertCleanText(TestResponse $response): void
    {
        foreach (self::DOUBLE_ESCAPED as $entity) {
            $response->assertDontSee($entity, false);
        }
    }
}
