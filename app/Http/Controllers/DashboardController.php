<?php

namespace App\Http\Controllers;

use App\Models\UserSetting;
use App\Services\ContentService;
use App\Services\DomainService;
use App\Services\ProgressService;
use App\Services\ReviewService;
use Illuminate\Support\Carbon;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(ContentService $content, ProgressService $progress, ReviewService $review, DomainService $domains): View
    {
        $hour = Carbon::now()->hour;

        return view('dashboard.index', [
            // Het dashboard is de startpagina van het domein Wiskunde en krijgt dezelfde kop als elk ander domein.
            'domain' => $domains->find('wiskunde'),
            'greeting' => match (true) {
                $hour < 6 => 'Goedenacht',
                $hour < 12 => 'Goedemorgen',
                $hour < 18 => 'Goedemiddag',
                default => 'Goedenavond',
            },
            'name' => UserSetting::get('name'),
            'stats' => $progress->dashboard(),
            'reviewCount' => $review->dueCount(),
            'parts' => $content->parts(),
            'moduleProgress' => $progress->all(),
            'content' => $content,
        ]);
    }
}
