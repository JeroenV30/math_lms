<?php

namespace App\Http\Controllers;

use App\Services\ConnectionService;
use App\Services\ContentService;
use App\Services\CourseRegistry;
use App\Services\DomainService;
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

    /**
     * Eén tijdlijn met de gebeurtenissen van alle domeinen, te filteren per domein.
     */
    public function all(ConnectionService $connections, DomainService $domains): View
    {
        $events = $connections->timeline();
        $counts = $events->flatMap(fn (array $event) => array_column($event['domains'], 'id'))->countBy();

        return view('history.all', [
            'page' => $domains->overview()['timeline'] ?? [],
            'periods' => $events->groupBy('period'),
            // Domeinen met gebeurtenissen, in de volgorde van domains.json: de filterknoppen.
            'domains' => $domains->all()->filter(fn (array $domain) => $counts->has($domain['id']))->values(),
            'counts' => $counts,
        ]);
    }

    public function people(ContentService $content): View
    {
        return view('history.people', [
            'people' => $content->people(),
        ]);
    }

    public function person(string $person, ContentService $content, ConnectionService $connections, CourseRegistry $courses): View
    {
        $person = $content->person($person) ?? abort(404);

        return view('history.person', [
            'person' => $person,
            'modules' => collect($person['modules'] ?? [])->map(fn ($id) => $content->getModule($id))->filter(),
            'events' => collect($person['timeline'] ?? [])->map(fn ($id) => $content->timelineEvent($id))->filter(),
            'elsewhere' => $connections->personElsewhere($person['id'], $courses->currentId()),
            'others' => $content->people(),
        ]);
    }
}
