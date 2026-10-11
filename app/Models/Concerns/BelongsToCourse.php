<?php

namespace App\Models\Concerns;

use App\Services\CourseRegistry;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Voortgang hoort bij één cursus. Op een cursuspagina zien queries alleen de rijen
 * van die cursus en krijgen nieuwe rijen die cursus mee; daarbuiten (kaart,
 * instellingen) gelden ze voor alle cursussen.
 */
trait BelongsToCourse
{
    protected static function bootBelongsToCourse(): void
    {
        static::addGlobalScope('course', function (Builder $query) {
            if ($course = app(CourseRegistry::class)->currentId()) {
                $query->where($query->qualifyColumn('course'), $course);
            }
        });

        static::creating(function (Model $model) {
            $model->course ??= app(CourseRegistry::class)->currentId() ?? CourseRegistry::DEFAULT;
        });
    }
}
