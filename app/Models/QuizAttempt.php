<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['module_id', 'score', 'correct', 'total', 'answers'])]
class QuizAttempt extends Model
{
    protected function casts(): array
    {
        return [
            'answers' => 'array',
            'score' => 'integer',
            'correct' => 'integer',
            'total' => 'integer',
        ];
    }
}
