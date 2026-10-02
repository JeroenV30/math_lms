<?php

namespace App\Http\Controllers;

use App\Models\QuizAttempt;
use App\Services\ContentService;
use App\Services\ProgressService;
use Illuminate\View\View;

class ModuleController extends Controller
{
    public function show(string $module, ContentService $content, ProgressService $progress): View
    {
        $module = $this->module($module);
        $exercises = $module->isAvailable() ? $content->exercises($module) : collect();
        $states = $progress->exerciseStates($exercises->keys());

        return view('course.module', [
            'module' => $module,
            'part' => $content->part($module->part),
            'progress' => $progress->forModule($module->id),
            'completedLessons' => $progress->completedLessons($module->id),
            'quiz' => $module->isAvailable() ? $content->quiz($module) : null,
            'quizAttempts' => QuizAttempt::query()->where('module_id', $module->id)->latest()->limit(5)->get(),
            'exerciseCount' => $exercises->count(),
            'solvedCount' => collect($states)->filter(fn ($s) => $s === 'solved')->count(),
            'previous' => $content->previousModule($module),
            'next' => $content->nextModule($module),
            'prerequisites' => collect($module->prerequisites)->map(fn ($id) => $content->getModule($id))->filter(),
            'events' => collect($module->timeline)->map(fn ($id) => $content->timelineEvent($id))->filter(),
            'mathematicians' => collect($module->mathematicians)->map(fn ($id) => $content->getMathematician($id))->filter(),
            'content' => $content,
        ]);
    }
}
