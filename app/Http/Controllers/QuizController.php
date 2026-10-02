<?php

namespace App\Http\Controllers;

use App\Models\QuizAttempt;
use App\Services\ContentService;
use App\Services\ExerciseService;
use App\Services\ProgressService;
use App\Services\QuizService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuizController extends Controller
{
    public function show(string $module, ContentService $content, ProgressService $progress): View
    {
        $module = $this->availableModule($module);
        $quiz = $content->quiz($module) ?? abort(404, 'Deze module heeft (nog) geen toets.');

        $progress->touchModule($module->id);

        return view('quiz.show', [
            'module' => $module,
            'quiz' => $quiz,
            'progress' => $progress->forModule($module->id),
        ]);
    }

    public function submit(string $module, Request $request, QuizService $quizzes): RedirectResponse
    {
        $module = $this->availableModule($module);

        $validated = $request->validate([
            'answers' => ['array'],
            'answers.*' => ['nullable', 'string', 'max:255'],
        ]);

        $attempt = $quizzes->grade($module, $validated['answers'] ?? []);

        return redirect()->route('quiz.result', [$module->slug, $attempt->id]);
    }

    public function result(string $module, int $attempt, ContentService $content, ProgressService $progress, ExerciseService $exercises): View
    {
        $module = $this->availableModule($module);
        $attempt = QuizAttempt::query()->where('module_id', $module->id)->findOrFail($attempt);
        $quiz = $content->quiz($module) ?? abort(404);

        return view('quiz.result', [
            'module' => $module,
            'quiz' => $quiz,
            'attempt' => $attempt,
            'results' => collect($attempt->answers)->keyBy('id'),
            'progress' => $progress->forModule($module->id),
            'next' => $content->nextModule($module),
            'exercises' => $exercises,
        ]);
    }
}
