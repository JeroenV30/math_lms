<?php

namespace App\ValueObjects;

use Illuminate\Support\Collection;

final readonly class Module
{
    /**
     * @param  Collection<int, Lesson>  $lessons
     */
    public function __construct(
        public int $id,
        public string $slug,
        public string $directory,
        public string $title,
        public int $part,
        public string $level,
        public string $status,
        public ?string $historicalPeriod,
        public int $difficulty,
        public int $estimatedMinutes,
        public array $prerequisites,
        public array $topics,
        public ?string $coreQuestion,
        public ?string $summary,
        public array $learningGoals,
        public array $glossary,
        public array $formulas,
        public Collection $lessons,
        public array $timeline,
        public array $mathematicians,
    ) {}

    public static function fromArray(array $data, string $directory): self
    {
        $id = (int) $data['id'];

        return new self(
            id: $id,
            slug: $data['slug'],
            directory: $directory,
            title: $data['title'],
            part: (int) $data['part'],
            level: $data['level'] ?? '',
            status: $data['status'] ?? 'planned',
            historicalPeriod: $data['historical_period'] ?? null,
            difficulty: (int) ($data['estimated_difficulty'] ?? 1),
            estimatedMinutes: (int) ($data['estimated_minutes'] ?? 0),
            prerequisites: $data['prerequisites'] ?? [],
            topics: $data['topics'] ?? [],
            coreQuestion: $data['core_question'] ?? null,
            summary: $data['summary'] ?? null,
            learningGoals: $data['learning_goals'] ?? [],
            glossary: $data['glossary'] ?? [],
            formulas: $data['formulas'] ?? [],
            lessons: collect($data['lessons'] ?? [])
                ->values()
                ->map(fn (array $lesson, int $i) => Lesson::fromArray($id, $i + 1, $lesson)),
            timeline: $data['timeline'] ?? [],
            mathematicians: $data['mathematicians'] ?? [],
        );
    }

    public function isAvailable(): bool
    {
        return $this->status === 'available' && $this->lessons->isNotEmpty();
    }

    public function number(): string
    {
        return str_pad((string) $this->id, 2, '0', STR_PAD_LEFT);
    }

    public function lesson(string $slug): ?Lesson
    {
        return $this->lessons->firstWhere('slug', $slug);
    }

    public function firstLesson(): ?Lesson
    {
        return $this->lessons->first();
    }

    public function lessonAfter(Lesson $lesson): ?Lesson
    {
        return $this->lessons->first(fn (Lesson $l) => $l->position === $lesson->position + 1);
    }

    public function lessonBefore(Lesson $lesson): ?Lesson
    {
        return $this->lessons->first(fn (Lesson $l) => $l->position === $lesson->position - 1);
    }
}
