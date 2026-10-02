<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use App\Services\MarkdownRenderer;
use App\ValueObjects\Module;
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
     * Zoeken in modules, lessen, begrippen, formules, personen en de tijdlijn.
     */
    public function search(Request $request, ContentService $content, MarkdownRenderer $markdown): View
    {
        $query = trim((string) $request->query('q', ''));
        $results = collect();

        if (mb_strlen($query) >= 2) {
            $matches = fn (?string $text) => $text !== null && Str::contains(Str::ascii($text), Str::ascii($query), ignoreCase: true);

            $results = collect()
                ->concat($content->modules()
                    ->filter(fn (Module $m) => $matches($m->title) || $matches($m->summary) || collect($m->topics)->contains(fn ($t) => $matches($content->topicLabel($t))))
                    ->map(fn (Module $m) => [
                        'type' => 'Module',
                        'title' => 'Module '.$m->id.' – '.$m->title,
                        'excerpt' => $m->summary,
                        'url' => route('module.show', $m->slug),
                    ]))
                ->concat($content->lessonTexts($markdown)
                    ->filter(fn (array $l) => $matches($l['lesson']->title) || $matches($l['text']))
                    ->map(fn (array $l) => [
                        'type' => 'Les',
                        'title' => $l['lesson']->title.' · Module '.$l['module']->id,
                        'excerpt' => $this->excerpt($l['text'], $query),
                        'url' => route('lesson.show', [$l['module']->slug, $l['lesson']->slug]),
                    ]))
                ->concat($content->glossary()
                    ->filter(fn (array $g) => $matches($g['term']) || $matches($g['definition']))
                    ->map(fn (array $g) => [
                        'type' => 'Begrip',
                        'title' => $g['term'],
                        'excerpt' => $g['definition'],
                        'url' => route('glossary').'#'.Str::slug($g['term']),
                    ]))
                ->concat($content->mathematicians()
                    ->filter(fn (array $p) => $matches($p['name']) || $matches($p['full_name'] ?? null) || $matches($p['known_for'] ?? null))
                    ->map(fn (array $p) => [
                        'type' => 'Wiskundige',
                        'title' => $p['name'],
                        'excerpt' => $p['known_for'] ?? null,
                        'url' => route('mathematicians.show', $p['id']),
                    ]))
                ->concat($content->timeline()
                    ->filter(fn (array $e) => $matches($e['title']) || $matches($e['summary'] ?? null))
                    ->map(fn (array $e) => [
                        'type' => 'Tijdlijn',
                        'title' => $e['year_label'].' – '.$e['title'],
                        'excerpt' => $e['summary'] ?? null,
                        'url' => route('history.index').'#'.$e['id'],
                    ]));
        }

        return view('library.search', ['query' => $query, 'results' => $results]);
    }

    private function excerpt(string $text, string $query): string
    {
        $position = mb_stripos(Str::ascii($text), Str::ascii($query));

        if ($position === false) {
            return Str::limit($text, 180);
        }

        $start = max(0, $position - 80);

        return ($start > 0 ? '…' : '').Str::limit(mb_substr($text, $start), 200);
    }
}
