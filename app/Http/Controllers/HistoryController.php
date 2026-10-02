<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use Illuminate\View\View;

class HistoryController extends Controller
{
    public function index(ContentService $content): View
    {
        return view('history.index', [
            'eras' => $content->timeline()->groupBy('era'),
            'content' => $content,
        ]);
    }

    public function mathematicians(ContentService $content): View
    {
        return view('history.mathematicians', [
            'mathematicians' => $content->mathematicians(),
        ]);
    }

    public function mathematician(string $mathematician, ContentService $content): View
    {
        $person = $content->getMathematician($mathematician) ?? abort(404);

        return view('history.mathematician', [
            'person' => $person,
            'modules' => collect($person['modules'] ?? [])->map(fn ($id) => $content->getModule($id))->filter(),
            'events' => collect($person['timeline'] ?? [])->map(fn ($id) => $content->timelineEvent($id))->filter(),
            'others' => $content->mathematicians(),
        ]);
    }
}
