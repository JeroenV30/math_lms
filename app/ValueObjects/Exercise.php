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
            // Bij meerdere invoervelden bestaat het antwoord uit de delen.
            answer: ($data['type'] ?? null) === 'multiple' ? array_values($data['parts'] ?? []) : $data['answer'],
            unit: $data['unit'] ?? null,
            options: array_filter([
                'tolerance' => $data['tolerance'] ?? null,
                'require_simplified' => $data['require_simplified'] ?? null,
                'allow_decimal' => $data['allow_decimal'] ?? null,
                'form' => $data['form'] ?? null,
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

    public function isMultiple(): bool
    {
        return $this->type === 'multiple';
    }

    /**
     * @return list<array{label: string, type: string, unit?: string}>
     */
    public function parts(): array
    {
        return $this->isMultiple() ? $this->answer : [];
    }

    public function inputMode(?string $type = null): string
    {
        return in_array($type ?? $this->type, ['numeric', 'decimal'], true) ? 'decimal' : 'text';
    }

    public function placeholder(?string $type = null): string
    {
        return match ($type ?? $this->type) {
            'fraction' => 'bijv. 3/4',
            'decimal' => 'bijv. 3,25',
            'expression' => 'bijv. 2x + 4',
            'coordinate' => 'bijv. (3; 7)',
            'interval' => 'bijv. [2; 8]',
            default => 'jouw antwoord',
        };
    }

    public function inputWidth(?string $type = null): string
    {
        return in_array($type ?? $this->type, ['expression', 'interval', 'coordinate'], true) ? 'w-56' : 'w-40';
    }
}
