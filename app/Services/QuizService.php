<?php

namespace App\Services;

use App\Models\QuizAttempt;
use App\ValueObjects\Exercise;
use App\ValueObjects\Module;
use Illuminate\Support\Facades\DB;

/**
 * Hoofdstuktoets: alle vragen in één keer inleveren, beoordelen en de
 * modulevoortgang bijwerken. Geen blokkades: je mag altijd door.
 */
class QuizService
{
    public function __construct(
        private readonly ContentService $content,
        private readonly ExerciseService $exercises,
        private readonly ProgressService $progress,
    ) {}

    /**
     * @param  array<string, string|array|null>  $answers  vraag-id => antwoord (array bij meerdere velden)
     */
    public function grade(Module $module, array $answers): QuizAttempt
    {
        $quiz = $this->content->quiz($module) ?? abort(404);

        return DB::transaction(function () use ($module, $quiz, $answers) {
            $results = $quiz['questions']->map(function (Exercise $question) use ($answers) {
                $raw = $answers[$question->id] ?? '';
                $answer = $question->isMultiple()
                    ? array_map(fn ($v) => trim((string) $v), (array) $raw)
                    : trim(is_array($raw) ? '' : (string) $raw);
                $outcome = $this->exercises->submit($question, $answer, ['context' => 'quiz']);

                return [
                    'id' => $question->id,
                    'answer' => $this->exercises->answerText($question, $answer),
                    'correct' => $outcome['correct'],
                    'valid' => $outcome['valid'],
                    'message' => $outcome['correct'] ? null : ($outcome['valid'] ? $outcome['message'] : 'Geen geldig antwoord.'),
                    'feedback' => $outcome['feedback'],
                ];
            })->values();

            $total = $results->count();
            $correct = $results->where('correct', true)->count();
            $score = $total > 0 ? (int) round($correct / $total * 100) : 0;

            $this->progress->recordQuizScore($module, $score);

            return QuizAttempt::query()->create([
                'module_id' => $module->id,
                'score' => $score,
                'correct' => $correct,
                'total' => $total,
                'answers' => $results->all(),
            ]);
        });
    }
}
