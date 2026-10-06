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
            $this->assertCleanText($this->get('/course/'.$module->slug)->assertOk());

            foreach ($module->lessons as $lesson) {
                $this->assertCleanText(
                    $this->get('/course/'.$module->slug.'/lesson/'.$lesson->slug)
                        ->assertOk()
                        ->assertDontSee('directive-error', false),
                );
            }

            $this->assertCleanText($this->get('/course/'.$module->slug.'/quiz')->assertOk());
        }
    }

    public function test_overview_and_library_pages_show_no_escaped_entities(): void
    {
        $pages = ['/', '/course', '/history', '/mathematicians', '/glossary', '/formulas', '/kennis', '/progress', '/practice'];

        foreach (app(ContentService::class)->mathematicians() as $person) {
            $pages[] = '/mathematicians/'.$person['id'];
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
