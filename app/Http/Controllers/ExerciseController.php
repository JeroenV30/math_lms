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
            // Eén tekstveld, of bij meerdere invoervelden een array label => antwoord.
            'answer' => ['present', 'nullable', $found->isMultiple() ? 'array' : 'string', 'max:255'],
            'answer.*' => ['nullable', 'string', 'max:255'],
            'hints_used' => ['nullable', 'integer', 'min:0', 'max:50'],
            'solution_viewed' => ['nullable', 'boolean'],
            'context' => ['nullable', Rule::in(['lesson', 'practice', 'review'])],
            'response_time' => ['nullable', 'integer', 'min:0'],
        ]);

        $answer = $found->isMultiple()
            ? array_map(fn ($v) => (string) $v, (array) ($validated['answer'] ?? []))
            : (string) ($validated['answer'] ?? '');

        return response()->json($exercises->submit($found, $answer, $validated));
    }
}
