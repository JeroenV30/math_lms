@extends('layouts.app', ['title' => 'Module '.$module->id.' – '.$module->title])

@inject('markdown', 'App\Services\MarkdownRenderer')

@section('content')
    @php
        $available = $module->isAvailable();
        $firstOpen = $module->lessons->first(fn ($l) => ! in_array($l->slug, $completedLessons, true)) ?? $module->firstLesson();
    @endphp

    <div class="border-b border-line bg-mist/60">
        <div class="container-page pt-10 pb-10 sm:pt-14">
            <nav class="text-sm text-muted" aria-label="Kruimelpad">
                <a href="{{ route('course.index') }}" class="hover:text-ink">Cursus</a>
                <span class="mx-1.5 text-faint">/</span>
                <span>Deel {{ $part['roman'] ?? $module->part }} – {{ $part['title'] ?? '' }}</span>
            </nav>
            <div class="mt-5 flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-3xl">
                    <p class="eyebrow">Module {{ $module->id }}{{ $module->historicalPeriod ? ' · '.$module->historicalPeriod : '' }}</p>
                    <h1 class="page-title mt-2">{{ $module->title }}</h1>
                    @if ($module->coreQuestion)
                        <p class="mt-4 font-serif text-xl leading-relaxed text-ink-soft italic">“{{ $module->coreQuestion }}”</p>
                    @elseif ($module->summary)
                        <p class="mt-4 font-serif text-lg text-muted">{{ $module->summary }}</p>
                    @endif
                </div>
                @if ($available && $firstOpen)
                    <div class="flex shrink-0 flex-wrap gap-2">
                        <a href="{{ route('lesson.show', [$module->slug, $firstOpen->slug]) }}" class="btn btn-primary">
                            {{ $progress->status === 'not_started' ? 'Start module' : 'Verder met les '.$firstOpen->position }} <span aria-hidden="true">→</span>
                        </a>
                        @if ($quiz)
                            <a href="{{ route('quiz.show', $module->slug) }}" class="btn btn-secondary">Hoofdstuktoets</a>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container-page mt-10 grid gap-10 lg:grid-cols-[minmax(0,1fr)_20rem]">
        <div class="min-w-0">
            @if (! $available)
                <div class="card p-6">
                    <p class="eyebrow">In voorbereiding</p>
                    <p class="mt-2 font-serif text-lg text-ink-soft">Deze module wordt nog geschreven. De opzet staat al vast:</p>
                    <dl class="mt-5 grid gap-4 text-sm sm:grid-cols-2">
                        <div>
                            <dt class="font-semibold text-ink">Onderwerpen</dt>
                            <dd class="mt-1 text-muted">{{ collect($module->topics)->map(fn ($t) => $content->topicLabel($t))->implode(', ') }}</dd>
                        </div>
                        <div>
                            <dt class="font-semibold text-ink">Historische lijn</dt>
                            <dd class="mt-1 text-muted">{{ $module->summary }}</dd>
                        </div>
                    </dl>
                </div>
            @else
                @if ($module->learningGoals)
                    <section aria-labelledby="leerdoelen">
                        <h2 id="leerdoelen" class="section-title">Na deze module</h2>
                        <ul class="mt-4 space-y-2 font-serif text-[1.05rem] text-ink-soft">
                            @foreach ($module->learningGoals as $goal)
                                <li class="flex gap-3"><span class="mt-2.5 h-1.5 w-1.5 shrink-0 rounded-full bg-accent"></span><span>{!! $markdown->inline($goal) !!}</span></li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                <section class="mt-12" aria-labelledby="lessen">
                    <h2 id="lessen" class="section-title">Lessen</h2>
                    <ol class="mt-4 divide-y divide-line rounded-xl border border-line">
                        @foreach ($module->lessons as $lesson)
                            @php $done = in_array($lesson->slug, $completedLessons, true); @endphp
                            <li>
                                <a href="{{ route('lesson.show', [$module->slug, $lesson->slug]) }}" class="group flex items-center gap-4 px-5 py-4 hover:bg-mist/60">
                                    <x-status-icon :status="$done ? 'completed' : ($progress->last_lesson === $lesson->slug ? 'started' : 'not_started')" />
                                    <span class="min-w-0 flex-1">
                                        <span class="block text-xs text-muted">{{ $lesson->position }} · {{ $lesson->kindLabel() }}</span>
                                        <span class="block font-serif text-lg text-ink group-hover:text-accent">{{ $lesson->title }}</span>
                                    </span>
                                    <span class="text-faint group-hover:text-accent" aria-hidden="true">→</span>
                                </a>
                            </li>
                        @endforeach
                        @if ($quiz)
                            <li>
                                <a href="{{ route('quiz.show', $module->slug) }}" class="group flex items-center gap-4 px-5 py-4 hover:bg-mist/60">
                                    <x-status-icon :status="$progress->status === 'mastered' ? 'mastered' : ($progress->status === 'completed' ? 'completed' : 'not_started')" />
                                    <span class="min-w-0 flex-1">
                                        <span class="block text-xs text-muted">Toets · {{ $quiz['questions']->count() }} vragen</span>
                                        <span class="block font-serif text-lg text-ink group-hover:text-accent">{{ $quiz['title'] }}</span>
                                    </span>
                                    @if ($progress->score !== null)
                                        <span class="text-sm text-muted tabular-nums">beste: {{ $progress->score }}%</span>
                                    @endif
                                </a>
                            </li>
                        @endif
                    </ol>
                </section>

                @if ($module->glossary)
                    <section class="mt-12" aria-labelledby="begrippen">
                        <h2 id="begrippen" class="section-title">Kernbegrippen</h2>
                        <dl class="mt-4 grid gap-x-8 gap-y-4 sm:grid-cols-2">
                            @foreach ($module->glossary as $entry)
                                <div>
                                    <dt class="font-semibold text-ink">{!! $markdown->inline($entry['term']) !!}</dt>
                                    <dd class="mt-0.5 font-serif text-ink-soft">{!! $markdown->inline($entry['definition']) !!}</dd>
                                </div>
                            @endforeach
                        </dl>
                    </section>
                @endif
            @endif
        </div>

        <aside class="space-y-6">
            @if ($available)
                <div class="card p-5">
                    <p class="eyebrow">Jouw voortgang</p>
                    <dl class="mt-3 space-y-2 text-sm">
                        <div class="flex justify-between"><dt class="text-muted">Status</dt><dd class="font-medium text-ink">{{ ['not_started' => 'Niet gestart', 'started' => 'Bezig', 'completed' => 'Afgerond', 'mastered' => 'Beheerst'][$progress->status] ?? $progress->status }}</dd></div>
                        <div class="flex justify-between"><dt class="text-muted">Lessen gelezen</dt><dd class="font-medium text-ink tabular-nums">{{ count($completedLessons) }}/{{ $module->lessons->count() }}</dd></div>
                        <div class="flex justify-between"><dt class="text-muted">Oefeningen goed</dt><dd class="font-medium text-ink tabular-nums">{{ $solvedCount }}/{{ $exerciseCount }}</dd></div>
                        <div class="flex justify-between"><dt class="text-muted">Beste toetsscore</dt><dd class="font-medium text-ink tabular-nums">{{ $progress->score !== null ? $progress->score.'%' : '—' }}</dd></div>
                    </dl>
                    <p class="mt-4 text-xs leading-relaxed text-muted">Afgerond vanaf {{ config('course.completed_score') }}% op de toets, beheerst vanaf {{ config('course.mastered_score') }}%.</p>
                </div>
            @endif

            @if ($prerequisites->isNotEmpty())
                <div class="card p-5">
                    <p class="eyebrow">Aanbevolen voorkennis</p>
                    <ul class="mt-3 space-y-1.5 text-sm">
                        @foreach ($prerequisites as $pre)
                            <li><a href="{{ route('module.show', $pre->slug) }}" class="link">Module {{ $pre->id }} – {{ $pre->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if ($events->isNotEmpty() || $mathematicians->isNotEmpty())
                <div class="card border-history-line bg-history-soft p-5">
                    <p class="eyebrow text-history">Op de tijdlijn</p>
                    <ul class="mt-3 space-y-2 text-sm">
                        @foreach ($events as $event)
                            <li><a href="{{ route('history.index') }}#{{ $event['id'] }}" class="text-history-ink hover:underline"><span class="text-history tabular-nums">{{ $event['year_label'] }}</span> · {{ $event['title'] }}</a></li>
                        @endforeach
                    </ul>
                    @if ($mathematicians->isNotEmpty())
                        <p class="eyebrow mt-5 text-history">Wiskundigen</p>
                        <ul class="mt-2 flex flex-wrap gap-2">
                            @foreach ($mathematicians as $person)
                                <li><a href="{{ route('mathematicians.show', $person['id']) }}" class="badge border-history-line bg-paper text-history hover:border-history">{{ $person['name'] }}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            @endif

            <nav class="flex justify-between gap-3 text-sm" aria-label="Modules">
                @if ($previous)
                    <a href="{{ route('module.show', $previous->slug) }}" class="text-muted hover:text-ink">← {{ $previous->id }}. {{ $previous->title }}</a>
                @else
                    <span></span>
                @endif
                @if ($next)
                    <a href="{{ route('module.show', $next->slug) }}" class="text-right text-muted hover:text-ink">{{ $next->id }}. {{ $next->title }} →</a>
                @endif
            </nav>
        </aside>
    </div>
@endsection
