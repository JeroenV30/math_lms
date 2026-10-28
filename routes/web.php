<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SettingsController;
use App\Http\Middleware\ResolveDomain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// De kaart van menselijke kennis is de startpagina; elk domein heeft zijn eigen pagina's onder /kennis/{domein}.
Route::get('/', [DomainController::class, 'index'])->name('domains.index');
Route::get('/zoeken', [LibraryController::class, 'searchAll'])->name('search.all');

Route::prefix('kennis/{domain}')->where(['domain' => '[a-z0-9-]+'])->group(function () {
    Route::middleware(ResolveDomain::class)->group(function () {
        // Dashboard van een cursus, of de opzet van een domein in voorbereiding.
        Route::get('/', [DomainController::class, 'show'])->name('domains.show');
    });

    Route::middleware(ResolveDomain::class.':course')->group(function () {
        Route::get('/les/{lesson}', [DomainController::class, 'legacyLesson']);
        Route::get('/cursus', [CourseController::class, 'index'])->name('course.index');
        Route::get('/cursus/{module}', [ModuleController::class, 'show'])->name('module.show');
        Route::get('/cursus/{module}/les/{lesson}', [LessonController::class, 'show'])->name('lesson.show');
        Route::post('/cursus/{module}/les/{lesson}/gelezen', [LessonController::class, 'complete'])->name('lesson.complete');
        Route::get('/cursus/{module}/toets', [QuizController::class, 'show'])->name('quiz.show');
        Route::post('/cursus/{module}/toets', [QuizController::class, 'submit'])->name('quiz.submit');
        Route::get('/cursus/{module}/toets/{attempt}', [QuizController::class, 'result'])->name('quiz.result')->whereNumber('attempt');

        Route::post('/oefening/{exercise}/controleer', [ExerciseController::class, 'check'])->name('exercise.check');

        Route::get('/oefenen', [PracticeController::class, 'index'])->name('practice.index');
        Route::get('/oefenen/{topic}', [PracticeController::class, 'show'])->name('practice.show');
        Route::get('/herhalen', [ReviewController::class, 'index'])->name('review.index');
        Route::get('/voortgang', [ProgressController::class, 'index'])->name('progress.index');

        Route::get('/tijdlijn', [HistoryController::class, 'index'])->name('history.index');
        Route::get('/personen', [HistoryController::class, 'mathematicians'])->name('mathematicians.index');
        Route::get('/personen/{mathematician}', [HistoryController::class, 'mathematician'])->name('mathematicians.show');

        Route::get('/begrippen', [LibraryController::class, 'glossary'])->name('glossary');
        Route::get('/formules', [LibraryController::class, 'formulas'])->name('formulas');
        Route::get('/zoeken', [LibraryController::class, 'search'])->name('search');
    });
});

// Studiemuziek speelt in een eigen venster, zodat ze doorloopt tijdens het navigeren.
Route::view('/studiemuziek', 'music.player')->name('music.player');

Route::get('/instellingen', [SettingsController::class, 'edit'])->name('settings.edit');
Route::post('/instellingen', [SettingsController::class, 'update'])->name('settings.update');
Route::post('/instellingen/wissen', [SettingsController::class, 'reset'])->name('settings.reset');
Route::get('/instellingen/back-up', [SettingsController::class, 'export'])->name('settings.export');
Route::post('/instellingen/back-up', [SettingsController::class, 'import'])->name('settings.import');

// Oude adressen (van vóór de domeinen) blijven werken.
Route::permanentRedirect('/kennis', '/');
Route::permanentRedirect('/settings', '/instellingen');

Route::get('/course/{path?}', function (Request $request, ?string $path = null) {
    $path = preg_replace(['#^([^/]+)/lesson/#', '#^([^/]+)/quiz(?=/|$)#'], ['$1/les/', '$1/toets'], (string) $path);

    return redirect(rtrim('/kennis/wiskunde/cursus/'.$path, '/'), 301);
})->where('path', '.*');

foreach ([
    'practice' => 'oefenen',
    'review' => 'herhalen',
    'progress' => 'voortgang',
    'history' => 'tijdlijn',
    'mathematicians' => 'personen',
    'glossary' => 'begrippen',
    'formulas' => 'formules',
    'search' => 'zoeken',
] as $old => $new) {
    Route::get("/{$old}/{path?}", function (Request $request, ?string $path = null) use ($new) {
        $query = $request->getQueryString();

        return redirect("/kennis/wiskunde/{$new}".($path ? "/{$path}" : '').($query ? "?{$query}" : ''), 301);
    })->where('path', '.*');
}

// Overzicht van alle visualisaties, voor wie content schrijft (alleen lokaal).
if (app()->isLocal()) {
    Route::view('/dev/widgets', 'dev.widgets')->name('dev.widgets');
}
