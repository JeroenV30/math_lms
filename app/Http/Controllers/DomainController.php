<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use App\Services\CourseRegistry;
use App\Services\DomainService;
use App\Services\ReviewService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DomainController extends Controller
{
    public function index(DomainService $domains, CourseRegistry $courses): View
    {
        return view('domains.index', [
            'overview' => $domains->overview(),
            'domains' => $domains->all(),
            // Herhalingen van vandaag, per domein: wie meer domeinen volgt, ziet ze hier bij elkaar.
            'reviews' => collect($courses->ids())
                ->mapWithKeys(fn (string $id) => [$id => $courses->within($id, fn () => app(ReviewService::class)->dueCount())])
                ->filter(),
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

    /**
     * Oud adres van de startles (/kennis/{domein}/les/{les}): die les is nu les 1 van module 1.
     */
    public function legacyLesson(ContentService $content): RedirectResponse
    {
        $module = $content->availableModules()->first() ?? abort(404, 'Dit domein heeft nog geen lessen.');

        return redirect()->route('lesson.show', [$module->slug, $module->firstLesson()->slug], 301);
    }
}
