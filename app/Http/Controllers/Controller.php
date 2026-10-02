<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use App\ValueObjects\Lesson;
use App\ValueObjects\Module;

abstract class Controller
{
    protected function module(string $module): Module
    {
        return app(ContentService::class)->getModule($module) ?? abort(404, 'Deze module bestaat niet.');
    }

    protected function availableModule(string $module): Module
    {
        $found = $this->module($module);

        abort_unless($found->isAvailable(), 404, 'Deze module is nog in voorbereiding.');

        return $found;
    }

    protected function lesson(Module $module, string $lesson): Lesson
    {
        return $module->lesson($lesson) ?? abort(404, 'Deze les bestaat niet.');
    }
}
