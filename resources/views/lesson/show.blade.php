@extends('layouts.app', ['title' => $lesson->title.' · Module '.$module->id])

@section('content')
    <div class="container-page grid gap-10 pt-8 lg:grid-cols-[15rem_minmax(0,1fr)] xl:grid-cols-[15rem_minmax(0,1fr)_13rem]">
        {{-- Moduleschema --}}
        <aside class="order-2 lg:order-none">
            <div class="lg:sticky lg:top-24">
                <a href="{{ route('module.show', $module->slug) }}" class="block">
                    <p class="eyebrow">Module {{ $module->id }}</p>
                    <p class="mt-1 font-serif text-lg leading-snug font-semibold text-ink hover:text-accent">{{ $module->title }}</p>
                </a>
                <ol class="mt-5 space-y-0.5 border-l border-line">
                    @foreach ($module->lessons as $item)
                        @php
                            $current = $item->slug === $lesson->slug;
                            $done = in_array($item->slug, $completedLessons, true);
                        @endphp
                        <li>
                            <a href="{{ route('lesson.show', [$module->slug, $item->slug]) }}"
                               @class([
                                   '-ml-px flex items-start gap-2 border-l-2 py-1.5 pl-4 text-sm leading-snug',
                                   'border-accent font-medium text-ink' => $current,
                                   'border-transparent text-muted hover:border-line-strong hover:text-ink' => ! $current,
                               ])
                               @if ($current) aria-current="page" @endif>
                                <span class="w-4 shrink-0 text-xs {{ $done ? 'text-accent' : 'text-faint' }}">{{ $done ? '✓' : $item->position }}</span>
                                <span>{{ $item->title }}</span>
                            </a>
                        </li>
                    @endforeach
                    @if ($hasQuiz)
                        <li>
                            <a href="{{ route('quiz.show', $module->slug) }}" class="-ml-px flex items-start gap-2 border-l-2 border-transparent py-1.5 pl-4 text-sm text-muted hover:border-line-strong hover:text-ink">
                                <span class="w-4 shrink-0 text-xs text-faint">T</span>
                                <span>Hoofdstuktoets</span>
                            </a>
                        </li>
                    @endif
                </ol>
            </div>
        </aside>

        {{-- Les --}}
        <article class="min-w-0 max-w-3xl">
            <header class="mb-10">
                <p class="eyebrow">Les {{ $lesson->position }} van {{ $module->lessons->count() }} · {{ $lesson->kindLabel() }}</p>
                <h1 class="page-title mt-2">{{ $lesson->title }}</h1>
            </header>

            <div class="prose-content">
                {!! $rendered['html'] !!}
            </div>

            <footer class="mt-16 border-t border-line pt-8">
                <form method="post" action="{{ route('lesson.complete', [$module->slug, $lesson->slug]) }}" class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    @csrf
                    <div>
                        @if ($previous)
                            <a href="{{ route('lesson.show', [$module->slug, $previous->slug]) }}" class="text-sm text-muted hover:text-ink">← {{ $previous->title }}</a>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">
                        @if ($next)
                            Gelezen – naar „{{ $next->title }}” <span aria-hidden="true">→</span>
                        @elseif ($hasQuiz)
                            Gelezen – naar de hoofdstuktoets <span aria-hidden="true">→</span>
                        @else
                            Les afronden
                        @endif
                    </button>
                </form>
            </footer>
        </article>

        {{-- Op deze pagina --}}
        @if (count($rendered['toc']) > 1)
            <aside class="hidden xl:block" aria-label="Op deze pagina">
                <div class="sticky top-24">
                    <p class="eyebrow">Op deze pagina</p>
                    <ul class="mt-3 space-y-1.5 text-sm">
                        @foreach ($rendered['toc'] as $item)
                            <li @class(['pl-3' => $item['level'] === 3])>
                                <a href="#{{ $item['id'] }}" class="text-muted hover:text-ink">{{ $item['title'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        @endif
    </div>
@endsection
