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
    /**
     * Startpagina: kies de kennisdomeinen of een toepassing. Herhalingen van vandaag staan hier voor alle domeinen samen.
     */
    public function home(DomainService $domains, CourseRegistry $courses): View
    {
        $visible = $domains->visible()->pluck('id')->all();

        return view('domains.home', [
            'page' => $domains->overview()['home'] ?? [],
            'sections' => $domains->sections()->map(fn (array $section) => [
                ...$section,
                'domains' => $domains->inSection($section['id']),
            ])->filter(fn (array $section) => $section['domains']->isNotEmpty())->values(),
            'domains' => $domains->all(),
            // Herhalingen van vandaag, per domein: wie meer domeinen volgt, ziet ze hier bij elkaar.
            'reviews' => collect($courses->ids())
                ->filter(fn (string $id) => in_array($id, $visible, true))
                ->mapWithKeys(fn (string $id) => [$id => $courses->within($id, fn () => app(ReviewService::class)->dueCount())])
                ->filter(),
        ]);
    }

    /**
     * Kaart van menselijke kennis: alle kennisdomeinen.
     */
    public function index(DomainService $domains): View
    {
        return view('domains.index', [
            'section' => $domains->section('kennis'),
            'domains' => $domains->inSection('kennis'),
        ]);
    }

    /**
     * De toepassingen, per groep (SubCode, Persoonlijk).
     */
    public function applications(DomainService $domains): View
    {
        return view('domains.applications', [
            'section' => $domains->section('toepassingen'),
            'groups' => $domains->groups('toepassingen'),
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
