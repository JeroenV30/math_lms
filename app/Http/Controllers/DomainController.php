<?php

namespace App\Http\Controllers;

use App\Services\DomainService;
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

        return view('domains.show', [
            'domain' => $found,
            'domains' => $domains->all(),
        ]);
    }
}
