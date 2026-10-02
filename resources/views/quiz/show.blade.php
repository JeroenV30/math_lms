@extends('layouts.app', ['title' => $quiz['title']])

@inject('markdown', 'App\Services\MarkdownRenderer')

@section('content')
    <div class="container-page max-w-3xl pt-10 sm:pt-14">
        <nav class="text-sm text-muted" aria-label="Kruimelpad">
            <a href="{{ route('module.show', $module->slug) }}" class="hover:text-ink">Module {{ $module->id }} – {{ $module->title }}</a>
        </nav>
        <p class="eyebrow mt-6">Hoofdstuktoets · {{ $quiz['questions']->count() }} vragen</p>
        <h1 class="page-title mt-2">{{ $quiz['title'] }}</h1>
        @if ($quiz['intro'])
            <div class="prose-content mt-4">{!! $markdown->render($quiz['intro']) !!}</div>
        @endif
        <p class="mt-4 text-sm text-muted">
            Tijdens de toets zijn er geen hints. Na het inleveren zie je per vraag het juiste antwoord en de uitgewerkte oplossing.
            @if ($progress->score !== null)
                Je beste score tot nu toe: <strong class="text-ink">{{ $progress->score }}%</strong>.
            @endif
        </p>

        <form method="post" action="{{ route('quiz.submit', $module->slug) }}" class="mt-10 space-y-5"
              x-data="{ submitting: false, answered: 0, count() { this.answered = [...$el.querySelectorAll('.exercise')].filter(q => [...q.querySelectorAll('input[type=text]')].some(i => i.value.trim() !== '')).length } }"
              @input="count()" @submit="submitting = true">
            @csrf
            @foreach ($quiz['questions'] as $question)
                <section class="exercise">
                    <header class="exercise-head">
                        <span class="exercise-kind">Vraag {{ $loop->iteration }}</span>
                        <span class="difficulty-dots" title="Niveau {{ $question->difficulty }}">
                            @for ($i = 1; $i <= 5; $i++)
                                <span @class(['on' => $i <= $question->difficulty])></span>
                            @endfor
                        </span>
                    </header>
                    <div class="exercise-body">
                        @if ($question->context)
                            <div class="exercise-question mb-3 text-ink-soft">{!! $markdown->render($question->context) !!}</div>
                        @endif
                        <div class="exercise-question">{!! $markdown->render($question->question) !!}</div>
                        @if ($question->isMultiple())
                            <div class="mt-4 flex flex-wrap items-center gap-x-5 gap-y-2">
                                @foreach ($question->parts() as $i => $part)
                                    <div class="flex items-center gap-2">
                                        <label for="q-{{ $question->id }}-{{ $i }}" class="font-serif text-ink">{{ $part['label'] }} =</label>
                                        <input id="q-{{ $question->id }}-{{ $i }}" type="text" name="answers[{{ $question->id }}][{{ $part['label'] }}]"
                                               inputmode="{{ $question->inputMode($part['type'] ?? 'numeric') }}" autocomplete="off" spellcheck="false"
                                               class="input w-32 tabular-nums" placeholder="{{ $question->placeholder($part['type'] ?? 'numeric') }}">
                                        @if (! empty($part['unit']))
                                            <span class="text-sm text-muted">{{ $part['unit'] }}</span>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        @else
                        <div class="mt-4 flex items-center gap-2">
                            @if ($question->unit === '€')
                                <span class="text-muted">€</span>
                            @endif
                            <label for="q-{{ $question->id }}" class="sr-only">Antwoord op vraag {{ $loop->iteration }}</label>
                            <input id="q-{{ $question->id }}" type="text" name="answers[{{ $question->id }}]" value="{{ old('answers.'.$question->id) }}"
                                   inputmode="{{ $question->inputMode() }}" autocomplete="off" spellcheck="false"
                                   class="input {{ $question->inputWidth() === 'w-56' ? 'w-56' : 'w-44' }} tabular-nums" placeholder="{{ $question->placeholder() }}">
                            @if ($question->unit && $question->unit !== '€')
                                <span class="text-sm text-muted">{{ $question->unit }}</span>
                            @endif
                        </div>
                        @endif
                    </div>
                </section>
            @endforeach

            <div class="sticky bottom-0 -mx-4 flex items-center justify-between gap-4 border-t border-line bg-paper/95 px-4 py-4 backdrop-blur sm:mx-0 sm:rounded-xl sm:border">
                <p class="text-sm text-muted"><span class="font-medium text-ink tabular-nums" x-text="answered">0</span> van {{ $quiz['questions']->count() }} beantwoord</p>
                <button type="submit" class="btn btn-primary" :disabled="submitting">Toets inleveren</button>
            </div>
        </form>
    </div>
@endsection
