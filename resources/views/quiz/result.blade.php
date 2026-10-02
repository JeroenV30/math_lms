@extends('layouts.app', ['title' => 'Resultaat · '.$quiz['title']])

@inject('markdown', 'App\Services\MarkdownRenderer')

@section('content')
    @php
        $completed = $attempt->score >= config('course.completed_score');
        $mastered = $attempt->score >= config('course.mastered_score');
    @endphp

    <div class="container-page max-w-3xl pt-10 sm:pt-14">
        <nav class="text-sm text-muted" aria-label="Kruimelpad">
            <a href="{{ route('module.show', $module->slug) }}" class="hover:text-ink">Module {{ $module->id }} – {{ $module->title }}</a>
        </nav>

        <section class="card mt-6 p-6 sm:p-8">
            <p class="eyebrow">Resultaat hoofdstuktoets</p>
            <div class="mt-3 flex flex-wrap items-end gap-x-6 gap-y-2">
                <p class="font-serif text-5xl font-semibold text-ink tabular-nums">{{ $attempt->score }}%</p>
                <p class="pb-1.5 text-muted">{{ $attempt->correct }} van {{ $attempt->total }} goed</p>
            </div>
            <div class="progress-track mt-5 h-2.5">
                <div class="progress-bar" style="width: {{ $attempt->score }}%"></div>
            </div>
            <p class="mt-5 font-serif text-lg text-ink-soft">
                @if ($mastered)
                    Uitstekend: je beheerst deze module. De stof komt af en toe terug in de herhaling om hem vast te houden.
                @elseif ($completed)
                    De module is afgerond. Vanaf {{ config('course.mastered_score') }}% geldt hij als beheerst — bekijk de vragen die nog niet goed gingen.
                @else
                    Nog niet afgerond (vanaf {{ config('course.completed_score') }}%). Geen probleem: bekijk hieronder de uitwerkingen, oefen de onderwerpen die nog lastig zijn en probeer het opnieuw. Je mag ook gewoon verder.
                @endif
            </p>
            <div class="mt-6 flex flex-wrap gap-2">
                <a href="{{ route('quiz.show', $module->slug) }}" class="btn btn-secondary">Toets opnieuw maken</a>
                @if ($next)
                    <a href="{{ route('module.show', $next->slug) }}" class="btn btn-primary">Verder naar module {{ $next->id }} <span aria-hidden="true">→</span></a>
                @endif
            </div>
        </section>

        <h2 class="section-title mt-12">Antwoorden en oplossingen</h2>
        <div class="mt-5 space-y-5">
            @foreach ($quiz['questions'] as $question)
                @php $r = $results->get($question->id); @endphp
                <section class="exercise">
                    <header class="exercise-head">
                        <span class="exercise-kind">Vraag {{ $loop->iteration }}</span>
                        <span class="ml-auto font-medium {{ ($r['correct'] ?? false) ? 'text-success' : 'text-danger' }}">
                            {{ ($r['correct'] ?? false) ? '✓ goed' : '✗ nog niet goed' }}
                        </span>
                    </header>
                    <div class="exercise-body">
                        <div class="exercise-question">{!! $markdown->render($question->question) !!}</div>
                        <dl class="mt-4 grid gap-2 text-sm sm:grid-cols-2">
                            <div>
                                <dt class="text-muted">Jouw antwoord</dt>
                                <dd class="font-medium text-ink">{{ ($r['answer'] ?? '') !== '' ? $r['answer'] : '— (leeg)' }}</dd>
                            </div>
                            <div>
                                <dt class="text-muted">Juiste antwoord</dt>
                                <dd class="font-medium text-ink">{{ $exercises->expectedAnswerText($question) }}</dd>
                            </div>
                        </dl>
                        @if (! ($r['correct'] ?? false) && ! empty($r['feedback']))
                            <div class="feedback feedback-incorrect"><p class="text-ink-soft">{!! $r['feedback'] !!}</p></div>
                        @elseif (! ($r['correct'] ?? false) && ! empty($r['message']) && ($r['message'] ?? '') !== 'Nog niet correct.')
                            <div class="feedback feedback-invalid"><p>{{ $r['message'] }}</p></div>
                        @endif
                        @if ($question->solution)
                            <details class="solution" @if (! ($r['correct'] ?? false)) open @endif>
                                <summary class="cursor-pointer text-xs font-semibold tracking-wide text-muted uppercase">Uitgewerkte oplossing</summary>
                                <ol class="mt-2">
                                    @foreach ($question->solution as $step)
                                        <li>{!! $markdown->inline($step) !!}</li>
                                    @endforeach
                                </ol>
                            </details>
                        @endif
                    </div>
                </section>
            @endforeach
        </div>
    </div>
@endsection
