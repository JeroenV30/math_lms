<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['exercise_id', 'module_id', 'context', 'answer', 'is_correct', 'hints_used', 'solution_viewed', 'attempt_number', 'response_time'])]
class ExerciseAttempt extends Model
{
    protected function casts(): array
    {
        return [
            'is_correct' => 'boolean',
            'solution_viewed' => 'boolean',
            'hints_used' => 'integer',
            'attempt_number' => 'integer',
            'response_time' => 'integer',
        ];
    }
}
