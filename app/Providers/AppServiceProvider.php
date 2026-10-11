<?php

namespace App\Providers;

use App\Services\ContentService;
use App\Services\CourseRegistry;
use App\Services\DomainService;
use App\Services\MarkdownRenderer;
use App\Services\ReviewService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Elke cursus heeft een eigen ContentService; deze binding geeft die van de actieve cursus.
        $this->app->singleton(CourseRegistry::class, fn ($app) => new CourseRegistry(config('course.content_path'), $app->make(DomainService::class)));
        $this->app->bind(ContentService::class, fn ($app) => $app->make(CourseRegistry::class)->current());
        $this->app->singleton(MarkdownRenderer::class);
        $this->app->singleton(DomainService::class, fn () => new DomainService(config('course.content_path').'/domains.json'));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.app', function ($view) {
            $view->with('site', app(DomainService::class)->app());
            $view->with('reviewCount', app(CourseRegistry::class)->currentId() ? app(ReviewService::class)->dueCount() : 0);
            $view->with('knowledgeDomains', app(DomainService::class)->all());
        });
    }
}
