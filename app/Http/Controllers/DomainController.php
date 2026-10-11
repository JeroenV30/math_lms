<?php

namespace App\Http\Controllers;

use App\Services\CourseRegistry;
use App\Services\DomainService;
use App\Services\MarkdownRenderer;
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

    /**
     * Startpagina van een domein: het dashboard als het domein een cursus heeft, anders de opzet.
     */
    public function show(DomainService $domains, CourseRegistry $courses): View
    {
        if ($courses->currentId() !== null) {
            return app()->call(DashboardController::class);
        }

        return view('domains.show', ['domain' => $domains->active()]);
    }

    public function starterLesson(string $lesson, DomainService $domains, MarkdownRenderer $markdown): View
    {
        $domain = $domains->active();
        $starter = $domains->starterLesson($domain) ?? abort(404, 'Voor dit domein is nog geen les beschikbaar.');

        abort_unless(hash_equals((string) ($starter['slug'] ?? ''), $lesson), 404, 'Deze les bestaat niet.');

        return view('domains.lesson', [
            'domain' => $domain,
            'lesson' => $starter,
            'rendered' => $markdown->renderDocument($domains->starterLessonMarkdown($domain)),
        ]);
    }
}
