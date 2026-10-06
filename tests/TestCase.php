<?php

namespace Tests;

use App\Services\ContentService;
use App\Services\DomainService;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * Gebruik een kleine, vaste testcursus in plaats van de echte content,
     * zodat engine-tests niet breken wanneer de lesstof verandert.
     */
    protected function useFixtureContent(): void
    {
        config(['course.content_path' => __DIR__.'/Fixtures/content']);
        $this->app->forgetInstance(ContentService::class);
        $this->app->forgetInstance(DomainService::class);
    }
}
