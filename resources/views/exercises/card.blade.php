@inject('markdown', 'App\Services\MarkdownRenderer')
@inject('content', 'App\Services\ContentService')

@php
    /** @var \App\ValueObjects\Exercise $exercise */
    $context ??= 'lesson';
    $state ??= null;
    $showModule ??= false;
    $uid = 'ex-'.str_replace(['.', ' '], '-', $exercise->id).'-'.\Illuminate\Support\Str::random(4);
    $config = [
        'id' => $exercise->id,
        'mode' => $exercise->mode,
        'context' => $context,
        'checkUrl' => route('exercise.check', $exercise->id),
        'hintsTotal' => count($exercise->hints),
        'state' => $state,
        'parts' => array_map(fn ($part) => $part['label'], $exercise->parts()),
    ];
    $module = $showModule ? $content->getModule($exercise->moduleId) : null;
@endphp

<section class="exercise" data-mode="{{ $exercise->mode }}" id="{{ $uid }}"
         x-data="exercise(@js($config))" aria-labelledby="{{ $uid }}-label">
    <header class="exercise-head">
        <span class="exercise-kind" id="{{ $uid }}-label">{{ $exercise->mode === 'challenge' ? 'Uitdaging' : 'Oefening' }} {{ $exercise->id }}</span>
        <span>{{ $exercise->modeLabel() }}</span>
        <span class="difficulty-dots" title="Niveau {{ $exercise->difficulty }}: {{ $exercise->difficultyLabel() }}">
            @for ($i = 1; $i <= 5; $i++)
                <span @class(['on' => $i <= $exercise->difficulty])></span>
            @endfor
            <span class="sr-only">Niveau {{ $exercise->difficulty }} van 5</span>
        </span>
        @if ($module)
            <a href="{{ route('module.show', $module->slug) }}" class="hover:text-ink">Module {{ $module->id }} · {{ $module->title }}</a>
        @endif
        <span class="ml-auto">
            <span x-show="status === 'previously-solved'" class="text-success">✓ eerder goed</span>
            <span x-cloak x-show="isCorrect" class="font-medium text-success">✓ goed</span>
        </span>
    </header>

    <div class="exercise-body">
        @if ($exercise->context)
            <div class="exercise-question mb-3 text-ink-soft">{!! $markdown->render($exercise->context) !!}</div>
        @endif
        <div class="exercise-question">{!! $markdown->render($exercise->question) !!}</div>

        <form class="mt-4 flex flex-wrap items-center gap-2" @submit.prevent="check()" novalidate>
            @if ($exercise->isMultiple())
                @foreach ($exercise->parts() as $i => $part)
                    <div class="flex items-center gap-2">
                        <label for="{{ $uid }}-input-{{ $i }}" class="font-serif text-ink">{{ $part['label'] }} =</label>
                        <input id="{{ $uid }}-input-{{ $i }}" type="text" inputmode="{{ $exercise->inputMode($part['type'] ?? 'numeric') }}" autocomplete="off" spellcheck="false"
                               class="input {{ $exercise->inputWidth($part['type'] ?? 'numeric') === 'w-56' ? 'w-44' : 'w-28' }} font-sans tabular-nums" placeholder="{{ $exercise->placeholder($part['type'] ?? 'numeric') }}"
                               x-model="answer[@js($part['label'])]" @focus="start()" @input="edited()" :disabled="isCorrect"
                               :class="{ 'border-success bg-success-soft': isCorrect, 'border-danger': status === 'incorrect' }">
                        @if (! empty($part['unit']))
                            <span class="text-sm text-muted">{{ $part['unit'] }}</span>
                        @endif
                    </div>
                @endforeach
            @else
                <label for="{{ $uid }}-input" class="sr-only">Jouw antwoord</label>
                <div class="flex items-center gap-2">
                    @if ($exercise->unit === '€')
                        <span class="text-muted">€</span>
                    @endif
                    <input id="{{ $uid }}-input" type="text" inputmode="{{ $exercise->inputMode() }}" autocomplete="off" spellcheck="false"
                           class="input {{ $exercise->inputWidth() }} font-sans tabular-nums" placeholder="{{ $exercise->placeholder() }}"
                           x-model="answer" @focus="start()" @input="edited()" :disabled="isCorrect"
                           :class="{ 'border-success bg-success-soft': isCorrect, 'border-danger': status === 'incorrect' }">
                    @if ($exercise->unit && $exercise->unit !== '€')
                        <span class="text-sm text-muted">{{ $exercise->unit }}</span>
                    @endif
                </div>
            @endif
            <button type="submit" class="btn btn-primary" :disabled="busy || isCorrect">
                <span x-show="!busy">Controleer</span>
                <span x-cloak x-show="busy">Bezig…</span>
            </button>

            @if (count($exercise->hints) > 0)
                @if ($exercise->mode === 'guided')
                    <button type="button" class="btn btn-secondary" @click="showHint()" x-show="canShowHint">
                        <span x-text="hintsShown === 0 ? 'Hint' : 'Volgende hint'">Hint</span>
                    </button>
                @else
                    <button type="button" class="btn btn-ghost" @click="showHint()" x-show="canShowHint">
                        <span x-text="hintsShown === 0 ? 'Ik wil een hint' : 'Nog een hint'">Ik wil een hint</span>
                    </button>
                @endif
            @endif

            @if (count($exercise->solution) > 0)
                <button type="button" class="btn btn-ghost" @click="showSolution()" x-show="!solutionShown && (attempts > 0 || hintsShown >= hintsTotal || isCorrect)" x-cloak>
                    Toon oplossing
                </button>
            @endif
        </form>

        <div aria-live="polite">
            <template x-if="status === 'correct' || status === 'incorrect' || status === 'invalid'">
                <div class="feedback" :class="'feedback-' + status">
                    <p class="font-medium" x-text="message"></p>
                    <p class="mt-1 text-ink-soft" x-show="feedback" x-html="feedback"></p>
                    <template x-if="isCorrect && mastery.length">
                        <p class="mt-1.5 text-xs text-success/80">
                            Beheersing:
                            <template x-for="(m, i) in mastery" :key="m.topic">
                                <span><span x-text="m.label"></span> <span x-text="m.score + '%'"></span><span x-show="i < mastery.length - 1">, </span></span>
                            </template>
                        </p>
                    </template>
                </div>
            </template>
        </div>

        @foreach ($exercise->hints as $i => $hint)
            <div class="hint" x-cloak x-show="hintsShown > {{ $i }}" x-transition.opacity>
                <span class="mr-1 text-xs font-semibold tracking-wide text-muted uppercase">Hint {{ $i + 1 }}</span>
                {!! $markdown->inline($hint) !!}
            </div>
        @endforeach

        @if (count($exercise->solution) > 0)
            <div class="solution" x-cloak x-show="solutionShown" x-transition.opacity>
                <p class="mb-2 text-xs font-semibold tracking-wide text-muted uppercase">Uitgewerkte oplossing</p>
                <ol>
                    @foreach ($exercise->solution as $step)
                        <li>{!! $markdown->inline($step) !!}</li>
                    @endforeach
                </ol>
                <p class="mt-2 text-xs text-muted">Probeer het nu zelf in te vullen: zo blijft de redenering beter hangen.</p>
            </div>
        @endif
    </div>
</section>
