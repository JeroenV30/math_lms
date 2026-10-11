<?php

namespace App\Http\Controllers;

use App\Services\DomainService;
use App\Services\MarkdownRenderer;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DomainController extends Controller
{
    public function index(DomainService $domains): View
    {
        return view('domains.index', [
            'overview' => $domains->overview(),
            'domains' => $domains->all(),
        ]);
    }

    public function show(string $domain, DomainService $domains): View|RedirectResponse
    {
        $found = $domains->find($domain) ?? abort(404, 'Dit kennisdomein bestaat niet.');

        // Een uitgewerkt domein heeft een eigen startpagina.
        if ($domains->isAvailable($found) && ! empty($found['route'])) {
            return redirect()->route($found['route']);
        }

        return view('domains.show', ['domain' => $found]);
    }

    public function starterLesson(string $domain, string $lesson, DomainService $domains, MarkdownRenderer $markdown): View
    {
        $found = $domains->find($domain) ?? abort(404, 'Dit kennisdomein bestaat niet.');
        $starter = $domains->starterLesson($found) ?? abort(404, 'Voor dit domein is nog geen les beschikbaar.');

        abort_unless(hash_equals((string) ($starter['slug'] ?? ''), $lesson), 404, 'Deze les bestaat niet.');

        return view('domains.lesson', [
            'domain' => $found,
            'lesson' => $starter,
            'rendered' => $markdown->renderDocument($domains->starterLessonMarkdown($found)),
        ]);
    }
}
