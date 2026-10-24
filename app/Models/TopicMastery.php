<?php

namespace App\Models;

use App\Models\Concerns\BelongsToCourse;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table('topic_mastery')]
#[Fillable(['topic', 'score', 'correct_answers', 'wrong_answers', 'interval_hours', 'review_streak', 'last_practiced_at', 'next_review_at'])]
class TopicMastery extends Model
{
    use BelongsToCourse;

    protected function casts(): array
    {
        return [
            'score' => 'integer',
            'correct_answers' => 'integer',
            'wrong_answers' => 'integer',
            'interval_hours' => 'integer',
            'review_streak' => 'integer',
            'last_practiced_at' => 'datetime',
            'next_review_at' => 'datetime',
        ];
    }
}
