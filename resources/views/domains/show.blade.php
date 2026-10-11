@extends('layouts.app', ['title' => $domain['name']])

{{-- Domein zonder cursus: de voorziene opbouw. Een domein met een cursus toont het dashboard. --}}
@section('content')
    <x-domain-header :domain="$domain">
        <x-slot:meta><x-domain-status :domain="$domain" /></x-slot:meta>
    </x-domain-header>

    <div class="container-page mt-10">
        <section class="card max-w-3xl p-6" aria-labelledby="in-opbouw">
            <p id="in-opbouw" class="eyebrow">In voorbereiding</p>
            <p class="mt-3 text-sm leading-relaxed text-ink-soft">
                Dit domein krijgt stap voor stap dezelfde diepgang als Wiskunde: van het eenvoudigste begin tot academisch niveau,
                met de geschiedenis van het denken als leidraad.
            </p>
        </section>
    </div>

    @if (! empty($domain['planned_parts']))
        <section class="container-page mt-16" aria-labelledby="opbouw">
            <div class="max-w-3xl">
                <h2 id="opbouw" class="section-title">Voorziene opbouw</h2>
                <ol class="mt-4 divide-y divide-line rounded-xl border border-line">
                    @foreach ($domain['planned_parts'] as $part)
                        <li class="flex items-center gap-4 px-5 py-3.5">
                            <x-status-icon :planned="true" status="not_started" />
                            <span class="w-6 font-mono text-sm text-faint tabular-nums">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="font-serif text-lg text-muted">{{ $part }}</span>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>
    @endif
@endsection
