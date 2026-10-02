<?php

namespace Tests\Feature;

use App\Services\ContentService;
use App\Services\ContentValidator;
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
}
