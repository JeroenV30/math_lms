<?php

namespace App\Services;

use App\Models\ExerciseAttempt;
use App\Services\AnswerCheckers\AnswerCheckerFactory;
use App\Services\AnswerCheckers\NumberParser;
use App\ValueObjects\AnswerResult;
use App\ValueObjects\Exercise;

/**
 * Laadt oefeningen, kiest de juiste checker, beoordeelt het antwoord,
 * slaat de poging op, past de beheersing aan en geeft feedback terug.
 */
class ExerciseService
{
    public const CONTEXTS = ['lesson', 'practice', 'review', 'quiz'];

    public function __construct(
        private readonly ContentService $content,
        private readonly AnswerCheckerFactory $checkers,
        private readonly MasteryService $mastery,
        private readonly ProgressService $progress,
        private readonly MarkdownRenderer $markdown,
        private readonly NumberParser $numbers,
    ) {}

    public function find(string $id): ?Exercise
    {
        return $this->content->getExercise($id);
    }

    /**
     * Alleen beoordelen, niets opslaan.
     *
     * @return array{result: AnswerResult, feedback: ?string}
     */
    public function evaluate(Exercise $exercise, string|array $answer): array
    {
        $checker = $this->checkers->for($exercise->type);
        $result = $checker->check($answer, $exercise->answer, $exercise->options);

        return ['result' => $result, 'feedback' => $result->valid && ! $result->correct && is_string($answer)
            ? $this->mistakeFeedback($exercise, $answer)
            : null];
    }

    /**
     * Beoordelen én verwerken: poging opslaan, beheersing en voortgang bijwerken.
     *
     * @param  array{hints_used?: int, solution_viewed?: bool, context?: string, response_time?: int|null}  $meta
     */
    public function submit(Exercise $exercise, string|array $answer, array $meta = []): array
    {
        ['result' => $result, 'feedback' => $feedback] = $this->evaluate($exercise, $answer);

        $context = in_array($meta['context'] ?? null, self::CONTEXTS, true) ? $meta['context'] : 'lesson';
        $hintsUsed = max(0, min(255, (int) ($meta['hints_used'] ?? 0)));
        $solutionViewed = (bool) ($meta['solution_viewed'] ?? false);

        // Een toetsvraag zonder (geldig) antwoord telt als fout; elders is
        // ongeldige invoer geen poging.
        if (! $result->valid && $context !== 'quiz') {
            return $this->payload($exercise, $result, null, null, []);
        }

        $isCorrect = $result->valid && $result->correct;

        $attempt = ExerciseAttempt::query()->create([
            'exercise_id' => $exercise->id,
            'module_id' => $exercise->moduleId,
            'context' => $context,
            'answer' => mb_substr($this->answerText($exercise, $answer, $result), 0, 255),
            'is_correct' => $isCorrect,
            'hints_used' => $hintsUsed,
            'solution_viewed' => $solutionViewed,
            'attempt_number' => ExerciseAttempt::query()->where('exercise_id', $exercise->id)->count() + 1,
            'response_time' => isset($meta['response_time']) ? max(0, (int) $meta['response_time']) : null,
        ]);

        $scores = $this->mastery->record($exercise->topics, $isCorrect, $hintsUsed, $solutionViewed);
        $this->progress->touchModule($exercise->moduleId);

        return $this->payload($exercise, $result, $feedback, $attempt, $scores);
    }

    public function expectedAnswerText(Exercise $exercise): string
    {
        if ($exercise->isMultiple()) {
            return collect($exercise->parts())
                ->map(fn (array $part) => $part['label'].' = '.(in_array($part['type'] ?? 'numeric', ['numeric', 'decimal'], true)
                    ? $this->numbers->format((float) $part['answer']).(isset($part['unit']) ? ' '.$part['unit'] : '')
                    : $part['answer']))
                ->implode('; ');
        }

        $answer = match ($exercise->type) {
            'fraction', 'expression', 'coordinate', 'interval' => (string) $exercise->answer,
            default => $this->numbers->format(is_string($exercise->answer)
                ? ($this->numbers->parse($exercise->answer) ?? 0)
                : $exercise->answer),
        };

        return $this->withUnit($exercise, $answer);
    }

    public function withUnit(Exercise $exercise, string $value): string
    {
        return match ($exercise->unit) {
            null, '' => $value,
            // Geldbedragen altijd met twee decimalen: € 2,50.
            '€' => '€ '.number_format($this->numbers->parse($value) ?? 0, 2, ',', '.'),
            default => $value.' '.$exercise->unit,
        };
    }

    /**
     * Leesbare weergave van het gegeven antwoord voor opslag.
     */
    public function answerText(Exercise $exercise, string|array $answer, ?AnswerResult $result = null): string
    {
        if (! is_array($answer)) {
            return $answer;
        }

        if ($result?->valid && $result->normalized !== null) {
            return $result->normalized;
        }

        return collect($exercise->parts())
            ->map(fn (array $part, int $i) => $part['label'].' = '.($answer[$part['label']] ?? $answer[$i] ?? ''))
            ->implode('; ');
    }

    /**
     * Foutenanalyse: herken veelgemaakte foute antwoorden uit de content.
     */
    private function mistakeFeedback(Exercise $exercise, string $answer): ?string
    {
        $checker = $this->checkers->for($exercise->type);
        $options = [...$exercise->options, 'require_simplified' => false];

        foreach ($exercise->feedback as $rule) {
            if (isset($rule['answer'], $rule['message'])
                && $checker->check($answer, $rule['answer'], $options)->correct) {
                return $this->markdown->inline($rule['message']);
            }
        }

        return null;
    }

    private function payload(Exercise $exercise, AnswerResult $result, ?string $feedback, ?ExerciseAttempt $attempt, array $scores): array
    {
        $message = match (true) {
            ! $result->valid => $result->message,
            $result->correct => 'Correct. Het antwoord is '.$this->withUnit($exercise, $result->normalized).'.',
            $result->message !== null => $result->message,
            default => 'Nog niet correct.',
        };

        return [
            'valid' => $result->valid,
            'correct' => $result->valid && $result->correct,
            'code' => $result->code,
            'message' => $message,
            'feedback' => $feedback,
            'attempt_number' => $attempt?->attempt_number,
            'mastery' => collect($scores)->map(fn (int $score, string $topic) => [
                'topic' => $topic,
                'label' => $this->content->topicLabel($topic),
                'score' => $score,
            ])->values()->all(),
        ];
    }
}
