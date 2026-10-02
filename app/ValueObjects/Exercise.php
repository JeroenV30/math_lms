<?php

namespace App\ValueObjects;

final readonly class Exercise
{
    public function __construct(
        public string $id,
        public int $moduleId,
        public string $type,
        public string $mode,
        public int $difficulty,
        public string $question,
        public ?string $context,
        public mixed $answer,
        public ?string $unit,
        public array $options,
        public array $hints,
        public array $solution,
        public array $feedback,
        public array $topics,
        public bool $isQuizQuestion,
    ) {}

    public static function fromArray(int $moduleId, array $data, bool $isQuizQuestion = false): self
    {
        return new self(
            id: (string) $data['id'],
            moduleId: $moduleId,
            type: $data['type'] ?? 'numeric',
            mode: $data['mode'] ?? ($isQuizQuestion ? 'quiz' : 'guided'),
            difficulty: (int) ($data['difficulty'] ?? 1),
            question: $data['question'],
            context: $data['context'] ?? null,
            answer: $data['answer'],
            unit: $data['unit'] ?? null,
            options: array_filter([
                'tolerance' => $data['tolerance'] ?? null,
                'require_simplified' => $data['require_simplified'] ?? null,
                'allow_decimal' => $data['allow_decimal'] ?? null,
                'unit' => $data['unit'] ?? null,
            ], fn ($value) => $value !== null),
            hints: $data['hints'] ?? [],
            solution: $data['solution'] ?? [],
            feedback: $data['feedback'] ?? [],
            topics: $data['topics'] ?? [],
            isQuizQuestion: $isQuizQuestion,
        );
    }

    public function modeLabel(): string
    {
        return match ($this->mode) {
            'independent' => 'Zelfstandig',
            'challenge' => 'Uitdaging',
            'quiz' => 'Toetsvraag',
            default => 'Begeleid',
        };
    }

    public function difficultyLabel(): string
    {
        return match ($this->difficulty) {
            1 => 'directe toepassing',
            2 => 'kleine denkstap',
            3 => 'combinatie van kennis',
            4 => 'complex probleem',
            default => 'echte uitdaging',
        };
    }

    public function inputMode(): string
    {
        return $this->type === 'fraction' ? 'text' : 'decimal';
    }

    public function placeholder(): string
    {
        return match ($this->type) {
            'fraction' => 'bijv. 3/4',
            'decimal' => 'bijv. 3,25',
            default => 'jouw antwoord',
        };
    }
}
