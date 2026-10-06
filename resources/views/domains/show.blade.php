@extends('layouts.app', ['title' => $domain['name']])

@section('content')
    <x-domain-header :domain="$domain" />

    <div class="container-page mt-10 grid gap-10 lg:grid-cols-[minmax(0,1fr)_20rem]">
        <section aria-labelledby="opzet">
            <div class="card border-dashed p-6">
                <p class="eyebrow">In voorbereiding</p>
                <p class="mt-2 font-serif text-lg text-ink-soft">
                    Dit domein krijgt dezelfde opbouw als de wiskundecursus: modules in delen, van het eenvoudigste begin tot academisch niveau,
                    met oefeningen, toetsen, herhaling en de geschiedenis van het denken als leidraad. Eerst wordt Wiskunde volledig afgerond.
                </p>
            </div>

            @if (! empty($domain['planned_parts']))
                <h2 id="opzet" class="section-title mt-10">Voorziene opbouw</h2>
                <ol class="mt-4 divide-y divide-line rounded-xl border border-line">
                    @foreach ($domain['planned_parts'] as $part)
                        <li class="flex items-center gap-4 px-5 py-3.5">
                            <x-status-icon :planned="true" />
                            <span class="w-6 font-mono text-sm text-faint tabular-nums">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="font-serif text-lg text-muted">{{ $part }}</span>
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
