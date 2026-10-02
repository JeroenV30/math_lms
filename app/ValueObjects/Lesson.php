<?php

namespace App\ValueObjects;

final readonly class Lesson
{
    public function __construct(
        public int $moduleId,
        public int $position,
        public string $slug,
        public string $title,
        public string $file,
        public string $kind,
    ) {}

    public static function fromArray(int $moduleId, int $position, array $data): self
    {
        return new self(
            moduleId: $moduleId,
            position: $position,
            slug: $data['slug'],
            title: $data['title'],
            file: $data['file'],
            kind: $data['kind'] ?? 'theory',
        );
    }

    public function kindLabel(): string
    {
        return match ($this->kind) {
            'intro' => 'Introductie',
            'history' => 'Historisch intermezzo',
            'practice' => 'Praktijk en uitdaging',
            'summary' => 'Samenvatting',
            default => 'Theorie',
        };
    }
}
