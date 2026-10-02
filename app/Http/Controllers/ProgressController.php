<?php

namespace App\Http\Controllers;

use App\Models\QuizAttempt;
use App\Services\ContentService;
use App\Services\ProgressService;
use Illuminate\View\View;

class ProgressController extends Controller
{
    public function index(ContentService $content, ProgressService $progress): View
    {
        $dashboard = $progress->dashboard();
        $mastery = $dashboard['mastery'];
        $threshold = (int) config('course.weak_threshold');

        return view('progress.index', [
            'dashboard' => $dashboard,
            'stats' => $progress->statistics(),
            'mastery' => $mastery,
            'strong' => $mastery->filter(fn ($m) => $m->score >= 85)->sortByDesc('score')->take(5),
            'weak' => $mastery->filter(fn ($m) => $m->score < $threshold)->sortBy('score')->take(5),
            'parts' => $content->parts(),
            'moduleProgress' => $progress->all(),
            'quizAttempts' => QuizAttempt::query()->latest()->limit(10)->get(),
            'content' => $content,
        ]);
    }
}
