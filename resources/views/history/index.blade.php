@extends('layouts.app', ['title' => 'Historische tijdlijn'])

@inject('markdown', 'App\Services\MarkdownRenderer')

@section('content')
    <x-page-header eyebrow="Historische tijdlijn" eyebrow-class="text-history" title="Wiskunde door de eeuwen"
                   intro="Van kerven in een bot tot statistische modellen. Elke gebeurtenis linkt naar de modules waarin je die wiskunde zelf leert." />

    <div class="container-page mt-10 *:max-w-4xl">
        @if ($eras->isEmpty())
            <p class="text-muted">De tijdlijn wordt nog gevuld.</p>
        @endif

        @foreach ($eras as $era => $events)
            <section class="mt-12 first:mt-0" aria-labelledby="era-{{ $loop->index }}">
                <h2 id="era-{{ $loop->index }}" class="mb-6 font-sans text-xs font-semibold tracking-[0.16em] text-history uppercase">{{ $era }}</h2>
                <ol class="timeline-rail space-y-8">
                    @foreach ($events as $event)
                        <li id="{{ $event['id'] }}" class="relative scroll-mt-24" x-data="{ open: false }">
                            <span class="timeline-dot" aria-hidden="true"></span>
                            <p class="text-sm font-semibold text-history tabular-nums">{{ $event['year_label'] }}</p>
                            <h3 class="mt-0.5 font-serif text-xl font-semibold text-ink">{{ $event['title'] }}</h3>
                            @if (! empty($event['place']))
                                <p class="text-xs text-muted">{{ $event['place'] }}</p>
                            @endif
                            <p class="mt-2 font-serif text-ink-soft">{{ $event['summary'] ?? '' }}</p>

                            @if (! empty($event['description']))
                                <button type="button" class="mt-2 text-sm text-history hover:underline" @click="open = !open" :aria-expanded="open">
                                    <span x-text="open ? 'Minder' : 'Lees meer'">Lees meer</span>
                                </button>
                                <div x-cloak x-show="open" x-transition.opacity class="prose-content mt-3 text-[1rem]">
                                    @if (! empty($event['image']))
                                        <figure class="figure mt-0"><img src="{{ $event['image'] }}" alt="{{ $event['title'] }}" loading="lazy"></figure>
                                    @endif
                                    {!! $markdown->render($event['description']) !!}
                                </div>
                            @endif

                            @php
                                $modules = collect($event['modules'] ?? [])->map(fn ($id) => $content->getModule($id))->filter();
                                $people = collect($event['mathematicians'] ?? [])->map(fn ($id) => $content->getMathematician($id))->filter();
                            @endphp
                            @if ($modules->isNotEmpty() || $people->isNotEmpty())
                                <ul class="mt-3 flex flex-wrap gap-2">
                                    @foreach ($modules as $module)
                                        <li><a href="{{ route('module.show', $module->slug) }}" class="badge hover:border-accent hover:text-accent">Module {{ $module->id }} · {{ $module->title }}</a></li>
                                    @endforeach
                                    @foreach ($people as $person)
                                        <li><a href="{{ route('mathematicians.show', $person['id']) }}" class="badge border-history-line bg-history-soft text-history hover:border-history">{{ $person['name'] }}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ol>
            </section>
        @endforeach
    </div>
@endsection
