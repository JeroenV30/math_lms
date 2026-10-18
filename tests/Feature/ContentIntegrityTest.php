<?php

namespace Tests\Feature;

use App\Services\ContentService;
use App\Services\ContentValidator;
use App\Services\CourseRegistry;
use Illuminate\Support\Facades\File;
use Tests\TestCase;

/**
 * Controleert de echte cursusinhoud in content/ (niet de testcursus).
 */
class ContentIntegrityTest extends TestCase
{
    public function test_course_content_is_valid(): void
    {
        $result = app(ContentValidator::class)->validate();

        $this->assertSame([], $result['errors'], implode("\n", $result['errors']));
    }

    public function test_course_has_42_modules_in_seven_parts(): void
    {
        $content = app(ContentService::class);

        $this->assertCount(42, $content->modules());
        $this->assertCount(7, $content->parts());
        $this->assertSame(range(1, 42), $content->modules()->keys()->all());
    }

    public function test_fixture_content_is_valid_too(): void
    {
        $this->useFixtureContent();

        $this->assertSame([], app(ContentValidator::class)->validate()['errors']);
    }

    public function test_unmerged_additions_count_as_known_with_a_warning(): void
    {
        // Kopie van de testcursus, waarin een agent een nieuw onderwerp gebruikt dat
        // alleen in additions.json van de module staat.
        $copy = sys_get_temp_dir().'/lms-additions-'.uniqid();
        File::copyDirectory(__DIR__.'/../Fixtures/content', $copy);
        $module = $copy.'/domains/geschiedenis/modules/01-bronnen';

        try {
            $exercises = json_decode(file_get_contents($module.'/exercises.json'), true);
            $exercises['exercises'][0]['topics'][] = 'nieuw-onderwerp';
            file_put_contents($module.'/exercises.json', json_encode($exercises));
            config(['course.content_path' => $copy]);
            $this->app->forgetInstance(CourseRegistry::class);

            $this->assertContains("01-001: onbekend onderwerp 'nieuw-onderwerp'.", app(ContentValidator::class)->validate()['errors']);

            file_put_contents($module.'/additions.json', json_encode(['topics' => ['nieuw-onderwerp' => 'Nieuw onderwerp']]));
            $result = app(ContentValidator::class)->validate();

            $this->assertSame([], $result['errors']);
            $this->assertContains('geschiedenis · Module 1: additions.json is nog niet samengevoegd (python scripts/merge_additions.py geschiedenis).', $result['warnings']);
        } finally {
            File::deleteDirectory($copy);
        }
    }
}
