<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use App\Services\CourseRegistry;
use App\Services\DomainService;
use App\Services\SearchService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class LibraryController extends Controller
{
    public function glossary(ContentService $content): View
    {
        return view('library.glossary', [
            'groups' => $content->glossary()->groupBy(fn (array $entry) => Str::upper(Str::substr(Str::ascii($entry['term']), 0, 1))),
        ]);
    }

    public function formulas(ContentService $content): View
    {
        return view('library.formulas', [
            'formulas' => $content->formulas()->groupBy(fn (array $formula) => $formula['module']->id),
            'content' => $content,
        ]);
    }

    /**
     * Zoeken binnen de cursus van dit domein.
     */
    public function search(Request $request, ContentService $content, CourseRegistry $courses, SearchService $search): View
    {
        $query = trim((string) $request->query('q', ''));

        return view('library.search', [
            'query' => $query,
            'results' => $search->search($courses->currentId(), $query),
            'page' => $content->page('search'),
            'action' => route('search'),
        ]);
    }

    /**
     * Zoeken in alle domeinen tegelijk, vanaf de kaart van kennis.
     */
    public function searchAll(Request $request, SearchService $search, DomainService $domains): View
    {
        $query = trim((string) $request->query('q', ''));

        return view('library.search', [
            'query' => $query,
            'results' => $search->searchAll($query),
            'page' => ['eyebrow' => 'Bibliotheek', 'title' => 'Zoeken in alle domeinen', 'placeholder' => 'Zoek in lessen, begrippen en personen van elk domein…'],
            'action' => route('search.all'),
            'domains' => $domains->all()->keyBy('id'),
        ]);
    }
}
