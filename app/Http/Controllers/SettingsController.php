<?php

namespace App\Http\Controllers;

use App\Models\UserSetting;
use App\Services\CourseRegistry;
use App\Services\DomainService;
use App\Services\ProgressService;
use App\Services\ProgressTransfer;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use InvalidArgumentException;
use Symfony\Component\HttpFoundation\StreamedResponse;

class SettingsController extends Controller
{
    public function edit(ProgressService $progress, CourseRegistry $courses, DomainService $domains): View
    {
        $totals = $progress->totalsPerCourse();

        return view('settings.edit', [
            'name' => UserSetting::get('name'),
            'courses' => collect($courses->ids())->map(fn (string $id) => [
                'id' => $id,
                'name' => $domains->find($id)['name'] ?? $id,
                'attempts' => $totals[$id]['attempts'] ?? 0,
                'lessons' => $totals[$id]['lessons'] ?? 0,
            ]),
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['nullable', 'string', 'max:60'],
        ]);

        UserSetting::put('name', $validated['name'] ?? null);

        return redirect()->route('settings.edit')->with('status', 'Instellingen opgeslagen.');
    }

    public function reset(Request $request, ProgressService $progress, CourseRegistry $courses, DomainService $domains): RedirectResponse
    {
        $validated = $request->validate([
            'confirm' => ['required', 'in:WISSEN'],
            'course' => ['nullable', 'string', Rule::in($courses->ids())],
        ], [
            'confirm.in' => 'Typ WISSEN om te bevestigen.',
            'confirm.required' => 'Typ WISSEN om te bevestigen.',
        ]);

        $course = $validated['course'] ?? null;
        $progress->reset($course);

        return redirect()->route('settings.edit')->with('status', $course === null
            ? 'Alle voortgang is gewist.'
            : 'De voortgang van '.($domains->find($course)['name'] ?? $course).' is gewist.');
    }

    public function export(ProgressTransfer $transfer): StreamedResponse
    {
        $filename = 'voortgang-'.Carbon::now()->format('Y-m-d-His').'.json';

        return response()->streamDownload(function () use ($transfer) {
            echo json_encode($transfer->export(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }, $filename, ['Content-Type' => 'application/json']);
    }

    public function import(Request $request, ProgressTransfer $transfer): RedirectResponse
    {
        $request->validate([
            'backup' => ['required', 'file', 'max:51200'],
            'replace' => ['accepted'],
        ], [
            'backup.required' => 'Kies een back-upbestand.',
            'backup.max' => 'Dit bestand is te groot voor een back-up (maximaal 50 MB).',
            'replace.accepted' => 'Bevestig dat je huidige voortgang wordt vervangen.',
        ]);

        try {
            $counts = $transfer->import((string) file_get_contents($request->file('backup')->getRealPath()));
        } catch (InvalidArgumentException $e) {
            return back()->withErrors(['backup' => $e->getMessage()]);
        } catch (QueryException) {
            return back()->withErrors(['backup' => 'De back-up past niet bij deze database. Er is niets veranderd.']);
        }

        return redirect()->route('settings.edit')->with('status', 'Back-up teruggezet: '.$counts['exercise_attempts'].' pogingen, '.$counts['lesson_progress'].' gelezen lessen.');
    }
}
