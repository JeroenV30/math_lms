<?php

namespace App\Http\Controllers;

use App\Models\UserSetting;
use App\Services\ProgressService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingsController extends Controller
{
    public function edit(): View
    {
        return view('settings.edit', [
            'name' => UserSetting::get('name'),
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

    public function reset(Request $request, ProgressService $progress): RedirectResponse
    {
        $request->validate([
            'confirm' => ['required', 'in:WISSEN'],
        ], [
            'confirm.in' => 'Typ WISSEN om te bevestigen.',
            'confirm.required' => 'Typ WISSEN om te bevestigen.',
        ]);

        $progress->reset();

        return redirect()->route('settings.edit')->with('status', 'Alle voortgang is gewist.');
    }
}
