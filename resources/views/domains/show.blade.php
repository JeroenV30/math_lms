@extends('layouts.app', ['title' => $domain['name']])

@section('content')
    <x-domain-header :domain="$domain">
        <x-slot:meta><x-domain-status :domain="$domain" /></x-slot:meta>
    </x-domain-header>

    <div class="container-page mt-10 grid gap-6 lg:grid-cols-3">
        @if ($starter = ($domain['starter_lesson'] ?? null))
            <section class="card p-6 lg:col-span-2" aria-labelledby="begin-hier">
                <p id="begin-hier" class="eyebrow">Begin hier</p>
                <div class="mt-4 flex flex-col gap-4 rounded-lg bg-mist p-5 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <p class="font-serif text-xl font-semibold text-ink">{{ $starter['title'] }}</p>
                        <p class="mt-1 text-sm text-muted">{{ $starter['module'] }} · les 1 · circa {{ $starter['estimated_minutes'] }} minuten</p>
                    </div>
                    <a href="{{ route('domains.lesson', [$domain['id'], $starter['slug']]) }}" class="btn btn-primary shrink-0">
                        Begin met lezen <span aria-hidden="true">→</span>
                    </a>
                </div>
            </section>
        @endif

        <section @class(['card p-6', 'lg:col-span-3' => ! $starter]) aria-labelledby="in-opbouw">
            <p id="in-opbouw" class="eyebrow">In opbouw</p>
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
                        @php $current = $loop->first && $starter; @endphp
                        <li class="flex items-center gap-4 px-5 py-3.5">
                            <x-status-icon :planned="! $current" :status="$current ? 'started' : 'not_started'" />
                            <span class="w-6 font-mono text-sm text-faint tabular-nums">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            <span @class(['font-serif text-lg', 'text-ink' => $current, 'text-muted' => ! $current])>{{ $part }}</span>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>
    @endif
@endsection
