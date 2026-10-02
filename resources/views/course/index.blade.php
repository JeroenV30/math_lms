@extends('layouts.app', ['title' => 'Cursusoverzicht'])

@section('content')
    <div class="container-page pt-12 pb-6 sm:pt-16">
        <p class="eyebrow">Cursusoverzicht</p>
        <h1 class="page-title mt-2">Van kerfstok tot Bayes</h1>
        <p class="mt-3 max-w-2xl font-serif text-lg text-muted">
            42 modules in zeven delen. Je mag altijd vooruit bladeren: voorkennis wordt aangeraden, nooit afgedwongen.
        </p>
        <ul class="mt-6 flex flex-wrap gap-x-6 gap-y-2 text-sm text-muted" aria-label="Legenda">
            <li class="flex items-center gap-2"><x-status-icon status="completed" /> afgerond</li>
            <li class="flex items-center gap-2"><x-status-icon status="started" /> bezig</li>
            <li class="flex items-center gap-2"><x-status-icon status="not_started" /> niet gestart</li>
            <li class="flex items-center gap-2"><x-status-icon status="mastered" /> beheerst</li>
            <li class="flex items-center gap-2"><x-status-icon :planned="true" /> in voorbereiding</li>
        </ul>
    </div>

    <div class="container-page mt-6 space-y-14">
        @foreach ($parts as $part)
            <section aria-labelledby="deel-{{ $part['number'] }}">
                <div class="flex items-baseline gap-3 border-b border-line pb-3">
                    <h2 id="deel-{{ $part['number'] }}" class="font-sans text-xs font-semibold tracking-[0.16em] text-ink uppercase">
                        Deel {{ $part['roman'] }} – {{ $part['title'] }}
                    </h2>
                    <span class="text-xs text-muted">Modules {{ $part['modules']->first()?->id }}–{{ $part['modules']->last()?->id }}</span>
                </div>

                <ol class="divide-y divide-line">
                    @foreach ($part['modules'] as $module)
                        @php
                            $progress = $moduleProgress->get($module->id);
                            $status = $progress?->status ?? 'not_started';
                            $available = $module->isAvailable();
                            $done = $lessonsDone[$module->id] ?? 0;
                        @endphp
                        <li>
                            <a href="{{ route('module.show', $module->slug) }}" class="group flex items-center gap-4 py-4">
                                <x-status-icon :status="$status" :planned="! $available" />
                                <span class="w-7 shrink-0 font-mono text-sm text-faint tabular-nums">{{ $module->number() }}</span>
                                <span class="min-w-0 flex-1">
                                    <span @class(['block font-serif text-lg leading-snug', 'text-ink group-hover:text-accent' => $available, 'text-muted' => ! $available])>{{ $module->title }}</span>
                                    <span class="mt-0.5 block truncate text-sm text-muted">{{ $module->summary }}</span>
                                </span>
                                <span class="hidden shrink-0 text-right text-xs text-muted sm:block">
                                    @if ($available)
                                        @if ($progress?->score !== null)
                                            Toets {{ $progress->score }}%
                                        @elseif ($done > 0)
                                            {{ $done }}/{{ $module->lessons->count() }} lessen
                                        @else
                                            {{ $module->lessons->count() }} lessen · ca. {{ str_replace('.', ',', (string) round($module->estimatedMinutes / 60, 1)) }} uur
                                        @endif
                                    @else
                                        In voorbereiding
                                    @endif
                                </span>
                            </a>
                        </li>
                    @endforeach
                </ol>
            </section>
        @endforeach
    </div>
@endsection
