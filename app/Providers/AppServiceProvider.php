<?php

namespace App\Providers;

use App\Services\ContentService;
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
        $this->app->singleton(ContentService::class, fn () => new ContentService(config('course.content_path')));
        $this->app->singleton(MarkdownRenderer::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.app', function ($view) {
            $view->with('courseTitle', app(ContentService::class)->title());
            $view->with('reviewCount', app(ReviewService::class)->dueCount());
        });
    }
}
