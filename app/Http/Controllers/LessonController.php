<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use App\Services\LessonRenderer;
use App\Services\ProgressService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LessonController extends Controller
{
    public function show(string $module, string $lesson, ContentService $content, LessonRenderer $renderer, ProgressService $progress): View
    {
        $module = $this->availableModule($module);
        $lesson = $this->lesson($module, $lesson);

        $progress->touchModule($module->id, $lesson->slug);

        return view('lesson.show', [
            'module' => $module,
            'lesson' => $lesson,
            'rendered' => $renderer->render($module, $content->lessonMarkdown($module, $lesson)),
            'completedLessons' => $progress->completedLessons($module->id),
            'previous' => $module->lessonBefore($lesson),
            'next' => $module->lessonAfter($lesson),
            'hasQuiz' => $content->quiz($module) !== null,
            'part' => $content->part($module->part),
        ]);
    }

    public function complete(string $module, string $lesson, ContentService $content, ProgressService $progress): RedirectResponse
    {
        $module = $this->availableModule($module);
        $lesson = $this->lesson($module, $lesson);

        $progress->completeLesson($module, $lesson);

        if ($next = $module->lessonAfter($lesson)) {
            return redirect()->route('lesson.show', [$module->slug, $next->slug]);
        }

        return $content->quiz($module) !== null
            ? redirect()->route('quiz.show', $module->slug)
            : redirect()->route('module.show', $module->slug);
    }
}
