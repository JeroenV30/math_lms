@extends('layouts.app', ['title' => $domain['name']])

@section('content')
    <x-domain-header :domain="$domain" />

    <div class="container-page mt-10 grid gap-10 lg:grid-cols-[minmax(0,1fr)_20rem]">
        <section aria-labelledby="opzet">
            <div class="card p-6">
                <p class="eyebrow">In opbouw</p>
                <p class="mt-2 font-serif text-lg text-ink-soft">
                    Dit domein krijgt stap voor stap dezelfde diepgang als de wiskundecursus: van het eenvoudigste begin tot academisch niveau,
                    met de geschiedenis van het denken als leidraad.
                </p>

                @if ($starter = ($domain['starter_lesson'] ?? null))
                    <div class="mt-6 border-t border-line pt-5">
                        <p class="text-xs font-medium tracking-wide text-success uppercase">Eerste les beschikbaar</p>
                        <h2 class="mt-1 font-serif text-xl font-semibold text-ink">{{ $starter['title'] }}</h2>
                        <p class="mt-1 text-sm text-muted">{{ $starter['module'] }} · circa {{ $starter['estimated_minutes'] }} minuten</p>
                        <a href="{{ route('domains.lesson', [$domain['id'], $starter['slug']]) }}" class="btn btn-primary mt-4">
                            Begin met lezen <span aria-hidden="true">→</span>
                        </a>
                    </div>
                @endif
            </div>

            @if (! empty($domain['planned_parts']))
                <h2 id="opzet" class="section-title mt-10">Voorziene opbouw</h2>
                <ol class="mt-4 divide-y divide-line rounded-xl border border-line">
                    @foreach ($domain['planned_parts'] as $part)
                        <li class="flex items-center gap-4 px-5 py-3.5">
                            <x-status-icon :planned="$loop->first ? false : true" :status="$loop->first ? 'started' : 'not_started'" />
                            <span class="w-6 font-mono text-sm text-faint tabular-nums">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            <span @class(['font-serif text-lg', 'text-ink' => $loop->first, 'text-muted' => ! $loop->first])>{{ $part }}</span>
                        </li>
                    @endforeach
                </ol>
            @endif
        </section>

        <aside class="space-y-3">
            <p class="eyebrow">Andere domeinen</p>
            <ul class="space-y-1">
                @foreach ($domains->where('id', '!=', $domain['id']) as $other)
                    <li>
                        <a href="{{ route('domains.show', $other['id']) }}" class="flex items-center gap-3 rounded-lg px-2 py-1.5 text-sm text-ink-soft hover:bg-mist">
                            <span class="h-2.5 w-2.5 rounded-full" style="background-color: {{ $other['color'] }}"></span>
                            {{ $other['name'] }}
                            @if (($other['status'] ?? 'planned') === 'available')
                                <span class="ml-auto text-xs text-success">beschikbaar</span>
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>
        </aside>
    </div>
@endsection
