<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table('module_progress')]
#[Fillable(['module_id', 'status', 'started_at', 'completed_at', 'score', 'attempts', 'last_lesson', 'last_visited_at'])]
class ModuleProgress extends Model
{
    public const NOT_STARTED = 'not_started';

    public const STARTED = 'started';

    public const COMPLETED = 'completed';

    public const MASTERED = 'mastered';

    /** Volgorde van statussen: een status gaat nooit terug. */
    public const ORDER = [self::NOT_STARTED, self::STARTED, self::COMPLETED, self::MASTERED];

    protected function casts(): array
    {
        return [
            'started_at' => 'datetime',
            'completed_at' => 'datetime',
            'last_visited_at' => 'datetime',
            'score' => 'integer',
            'attempts' => 'integer',
        ];
    }

    public function isAtLeast(string $status): bool
    {
        return array_search($this->status, self::ORDER, true) >= array_search($status, self::ORDER, true);
    }
}
