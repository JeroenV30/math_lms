<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
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
use Illuminate\Support\Facades\Route;

Route::get('/', DashboardController::class)->name('dashboard');

Route::get('/course', [CourseController::class, 'index'])->name('course.index');
Route::get('/course/{module}', [ModuleController::class, 'show'])->name('module.show');
Route::get('/course/{module}/lesson/{lesson}', [LessonController::class, 'show'])->name('lesson.show');
Route::post('/course/{module}/lesson/{lesson}/complete', [LessonController::class, 'complete'])->name('lesson.complete');
Route::get('/course/{module}/quiz', [QuizController::class, 'show'])->name('quiz.show');
Route::post('/course/{module}/quiz', [QuizController::class, 'submit'])->name('quiz.submit');
Route::get('/course/{module}/quiz/{attempt}', [QuizController::class, 'result'])->name('quiz.result')->whereNumber('attempt');

Route::post('/exercise/{exercise}/check', [ExerciseController::class, 'check'])->name('exercise.check');

Route::get('/practice', [PracticeController::class, 'index'])->name('practice.index');
Route::get('/practice/{topic}', [PracticeController::class, 'show'])->name('practice.show');
Route::get('/review', [ReviewController::class, 'index'])->name('review.index');
Route::get('/progress', [ProgressController::class, 'index'])->name('progress.index');

Route::get('/history', [HistoryController::class, 'index'])->name('history.index');
Route::get('/mathematicians', [HistoryController::class, 'mathematicians'])->name('mathematicians.index');
Route::get('/mathematicians/{mathematician}', [HistoryController::class, 'mathematician'])->name('mathematicians.show');

Route::get('/glossary', [LibraryController::class, 'glossary'])->name('glossary');
Route::get('/formulas', [LibraryController::class, 'formulas'])->name('formulas');
Route::get('/search', [LibraryController::class, 'search'])->name('search');

Route::get('/settings', [SettingsController::class, 'edit'])->name('settings.edit');
Route::post('/settings', [SettingsController::class, 'update'])->name('settings.update');
Route::post('/settings/reset', [SettingsController::class, 'reset'])->name('settings.reset');

// Overzicht van alle visualisaties, voor wie content schrijft (alleen lokaal).
if (app()->isLocal()) {
    Route::view('/dev/widgets', 'dev.widgets')->name('dev.widgets');
}
