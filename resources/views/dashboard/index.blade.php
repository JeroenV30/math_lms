@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')
    <div class="container-page pt-12 pb-8 sm:pt-16">
        <p class="eyebrow">{{ $greeting }}{{ $name ? ', '.$name : '' }}</p>
        <h1 class="page-title mt-2">{{ $content->title() }}</h1>
        <p class="mt-3 max-w-2xl font-serif text-lg text-muted">{{ $content->course()['subtitle'] ?? '' }}</p>
    </div>

    <div class="container-page grid gap-6 lg:grid-cols-3">
        {{-- Voortgang --}}
        <section class="card p-6 lg:col-span-2" aria-labelledby="voortgang">
            <div class="flex items-baseline justify-between gap-4">
                <h2 id="voortgang" class="eyebrow">Voortgang</h2>
                <span class="font-serif text-3xl font-semibold text-ink tabular-nums">{{ $stats['percentage'] }}%</span>
            </div>
            <div class="progress-track mt-4 h-2.5">
                <div class="progress-bar" style="width: {{ max($stats['percentage'], $stats['started'] > 0 ? 1 : 0) }}%"></div>
            </div>
            <dl class="mt-4 flex flex-wrap gap-x-8 gap-y-2 text-sm text-muted">
                <div><dt class="inline">Gestart:</dt> <dd class="inline font-medium text-ink">{{ $stats['started'] }} van {{ $stats['total_modules'] }} modules</dd></div>
                <div><dt class="inline">Afgerond:</dt> <dd class="inline font-medium text-ink">{{ $stats['completed'] }}</dd></div>
                <div><dt class="inline">Vandaag geoefend:</dt> <dd class="inline font-medium text-ink">{{ $stats['attempts_today'] }} {{ $stats['attempts_today'] === 1 ? 'som' : 'sommen' }}</dd></div>
            </dl>

            @if ($target = $stats['continue'])
                <div class="mt-8 flex flex-col gap-4 rounded-xl bg-mist p-5 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <p class="eyebrow">{{ $stats['started'] > 0 ? 'Ga verder' : 'Begin hier' }}</p>
                        <p class="mt-1 font-serif text-xl font-semibold text-ink">Module {{ $target['module']->id }} – {{ $target['module']->title }}</p>
                        @if ($target['lesson'])
                            <p class="mt-0.5 text-sm text-muted">Les {{ $target['lesson']->position }}: {{ $target['lesson']->title }}</p>
                        @endif
                    </div>
                    <a href="{{ $target['lesson'] ? route('lesson.show', [$target['module']->slug, $target['lesson']->slug]) : route('module.show', $target['module']->slug) }}" class="btn btn-primary shrink-0">
                        {{ $stats['started'] > 0 ? 'Verder leren' : 'Start module '.$target['module']->id }}
                        <span aria-hidden="true">→</span>
                    </a>
                </div>
            @endif
        </section>

        {{-- Herhalen --}}
        <section class="card flex flex-col p-6" aria-labelledby="herhalen">
            <h2 id="herhalen" class="eyebrow">Vandaag herhalen</h2>
            @if ($reviewCount > 0)
                <p class="mt-3 font-serif text-3xl font-semibold text-ink tabular-nums">{{ $reviewCount }} <span class="text-lg font-normal text-muted">{{ $reviewCount === 1 ? 'oefening' : 'oefeningen' }}</span></p>
                <p class="mt-2 text-sm text-muted">Oudere stof komt terug voordat je die vergeet.</p>
                <a href="{{ route('review.index') }}" class="btn btn-secondary mt-auto self-start">Start herhaling</a>
            @else
                <p class="mt-3 text-sm leading-relaxed text-muted">Er staat nu niets klaar. Zodra je oefent, plant het systeem herhalingen in: zwakke onderwerpen snel, sterke pas later.</p>
                <a href="{{ route('practice.index') }}" class="btn btn-ghost mt-auto -ml-3 self-start">Vrij oefenen →</a>
            @endif
        </section>

        {{-- Beheersing --}}
        <section class="card p-6 lg:col-span-2" aria-labelledby="beheersing">
            <div class="flex items-baseline justify-between">
                <h2 id="beheersing" class="eyebrow">Beheersing per onderwerp</h2>
                <a href="{{ route('progress.index') }}" class="text-sm text-muted hover:text-ink">Alle statistiek →</a>
            </div>
            @if ($stats['mastery']->isEmpty())
                <p class="mt-4 text-sm text-muted">Nog geen gegevens. Beheersing per onderwerp verschijnt hier zodra je de eerste oefeningen maakt.</p>
            @else
                <div class="mt-5 grid gap-x-10 gap-y-4 sm:grid-cols-2">
                    @foreach ($stats['mastery']->take(8) as $topic)
                        <x-mastery-bar :label="$content->topicLabel($topic->topic)" :score="$topic->score" :href="route('practice.show', $topic->topic)" />
                    @endforeach
                </div>
            @endif
        </section>

        <section class="card grid content-start gap-5 p-6" aria-label="Sterk en zwak">
            <div>
                <h2 class="eyebrow">Sterkste onderwerp</h2>
                @if ($stats['strongest'])
                    <p class="mt-1.5 font-serif text-lg font-semibold text-ink">{{ $content->topicLabel($stats['strongest']->topic) }} – {{ $stats['strongest']->score }}%</p>
                @else
                    <p class="mt-1.5 text-sm text-muted">—</p>
                @endif
            </div>
            <div>
                <h2 class="eyebrow">Extra aandacht</h2>
                @if ($stats['weakest'] && $stats['weakest']->topic !== $stats['strongest']?->topic)
                    <p class="mt-1.5 font-serif text-lg font-semibold text-ink">{{ $content->topicLabel($stats['weakest']->topic) }} – {{ $stats['weakest']->score }}%</p>
                    <a href="{{ route('practice.show', $stats['weakest']->topic) }}" class="link mt-1 inline-block text-sm">Oefen dit onderwerp</a>
                @else
                    <p class="mt-1.5 text-sm text-muted">—</p>
                @endif
            </div>
        </section>
    </div>

    {{-- Cursusoverzicht in het kort --}}
    <div class="container-page mt-16">
        <div class="flex items-baseline justify-between">
            <h2 class="section-title">De reis</h2>
            <a href="{{ route('course.index') }}" class="text-sm text-muted hover:text-ink">Volledig cursusoverzicht →</a>
        </div>
        <ol class="mt-6 grid gap-3 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-7">
            @foreach ($parts as $part)
                @php
                    $done = $part['modules']->filter(fn ($m) => $moduleProgress->get($m->id)?->isAtLeast('completed'))->count();
                    $available = $part['modules']->filter->isAvailable()->count();
                @endphp
                <li class="card p-4">
                    <p class="eyebrow">Deel {{ $part['roman'] }}</p>
                    <p class="mt-1 text-sm font-semibold leading-snug text-ink">{{ $part['title'] }}</p>
                    <p class="mt-2 text-xs text-muted">
                        @if ($available > 0)
                            {{ $done }}/{{ $part['modules']->count() }} afgerond
                        @else
                            In voorbereiding
                        @endif
                    </p>
                </li>
            @endforeach
        </ol>
    </div>
@endsection
