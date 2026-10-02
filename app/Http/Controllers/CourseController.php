<?php

namespace App\Http\Controllers;

use App\Models\LessonProgress;
use App\Services\ContentService;
use App\Services\ProgressService;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(ContentService $content, ProgressService $progress): View
    {
        return view('course.index', [
            'course' => $content->course(),
            'parts' => $content->parts(),
            'moduleProgress' => $progress->all(),
            'lessonsDone' => LessonProgress::query()
                ->whereNotNull('completed_at')
                ->selectRaw('module_id, count(*) as done')
                ->groupBy('module_id')
                ->pluck('done', 'module_id'),
        ]);
    }
}
