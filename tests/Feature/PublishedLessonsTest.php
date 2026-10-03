<?php

namespace Tests\Feature;

use App\Services\ContentService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublishedLessonsTest extends TestCase
{
    use RefreshDatabase;

    public function test_all_published_lessons_and_quizzes_can_be_opened(): void
    {
        foreach (app(ContentService::class)->availableModules() as $module) {
            $this->get('/course/'.$module->slug)->assertOk();

            foreach ($module->lessons as $lesson) {
                $this->get('/course/'.$module->slug.'/lesson/'.$lesson->slug)
                    ->assertOk()
                    ->assertDontSee('directive-error', false);
            }

            $this->get('/course/'.$module->slug.'/quiz')->assertOk();
        }
    }
}
