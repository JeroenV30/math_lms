<?php

namespace App\Http\Controllers;

use App\Services\ExerciseService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ExerciseController extends Controller
{
    public function check(string $exercise, Request $request, ExerciseService $exercises): JsonResponse
    {
        $found = $exercises->find($exercise) ?? abort(404, 'Deze oefening bestaat niet.');

        abort_if($found->isQuizQuestion, 403, 'Toetsvragen worden via de toets ingeleverd.');

        $validated = $request->validate([
            'answer' => ['present', 'nullable', 'string', 'max:255'],
            'hints_used' => ['nullable', 'integer', 'min:0', 'max:50'],
            'solution_viewed' => ['nullable', 'boolean'],
            'context' => ['nullable', Rule::in(['lesson', 'practice', 'review'])],
            'response_time' => ['nullable', 'integer', 'min:0'],
        ]);

        return response()->json($exercises->submit($found, (string) ($validated['answer'] ?? ''), $validated));
    }
}
