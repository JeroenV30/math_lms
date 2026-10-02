<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use App\Services\MasteryService;
use App\Services\ProgressService;
use App\ValueObjects\Exercise;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PracticeController extends Controller
{
    public function index(ContentService $content, MasteryService $mastery): View
    {
        $exercises = $content->allExercises();
        $scores = $mastery->all();

        $topics = collect($content->topics())
            ->map(fn (string $label, string $key) => [
                'key' => $key,
                'label' => $label,
                'count' => $exercises->filter(fn (Exercise $e) => in_array($key, $e->topics, true))->count(),
                'mastery' => $scores->get($key),
            ])
            ->filter(fn (array $topic) => $topic['count'] > 0)
            ->values();

        return view('practice.index', [
            'topics' => $topics,
            'modules' => $content->availableModules(),
        ]);
    }

    /**
     * Vrij oefenen per onderwerp: eerst wat nog niet lukte, dan nieuw, dan herhaling.
     */
    public function show(string $topic, Request $request, ContentService $content, ProgressService $progress, MasteryService $mastery): View
    {
        abort_unless(array_key_exists($topic, $content->topics()), 404);

        $moduleFilter = $request->integer('module') ?: null;
        $exercises = $content->allExercises()
            ->filter(fn (Exercise $e) => in_array($topic, $e->topics, true))
            ->when($moduleFilter, fn ($c) => $c->where('moduleId', $moduleFilter));

        $states = $progress->exerciseStates($exercises->keys());
        $order = ['attempted' => 0, 'new' => 1, 'solved' => 2];

        $selection = $exercises
            ->sortBy(fn (Exercise $e) => [$order[$states[$e->id] ?? 'new'], $e->difficulty, $e->id])
            ->take(12)
            ->values();

        return view('practice.show', [
            'topic' => $topic,
            'label' => $content->topicLabel($topic),
            'exercises' => $selection,
            'states' => $states,
            'total' => $exercises->count(),
            'mastery' => $mastery->all()->get($topic),
            'content' => $content,
        ]);
    }
}
