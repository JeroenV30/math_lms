@extends('layouts.app', ['title' => $person['name']])

@inject('markdown', 'App\Services\MarkdownRenderer')

@inject('course', 'App\Services\ContentService')

@section('content')
    <x-page-header eyebrow-class="text-history"
                   :eyebrow="($person['lived'] ?? '').(! empty($person['region']) ? ' · '.$person['region'] : '')"
                   :title="$person['full_name'] ?? $person['name']"
                   :intro="$person['known_for'] ?? null"
                   :crumbs="[['label' => $course->label('people'), 'url' => route('people.index')]]">
        @if (! empty($person['image']))
            <x-slot:leading>
                <img src="{{ $person['image'] }}" alt="Portret van {{ $person['name'] }}" class="h-36 w-28 shrink-0 rounded-lg object-cover">
            </x-slot:leading>
        @endif
    </x-page-header>

    <div class="container-page mt-10 grid gap-10 lg:grid-cols-[minmax(0,1fr)_18rem]">
        <article class="min-w-0 max-w-3xl" data-read-aloud>
            <div class="prose-content">
                {!! $markdown->render($person['bio'] ?? '') !!}
            </div>

            @if (! empty($person['contributions']))
                <aside class="callout callout-history mt-10">
                    <header class="callout-header"><span class="callout-title">Belangrijkste bijdragen</span></header>
                    <div class="callout-body prose-content">
                        <ul>
                            @foreach ($person['contributions'] as $item)
                                <li>{!! $markdown->inline($item) !!}</li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            @endif
        </article>

        <aside class="space-y-6">
            @if ($modules->isNotEmpty())
                <div class="card p-5">
                    <p class="eyebrow">In de cursus</p>
                    <ul class="mt-3 space-y-1.5 text-sm">
                        @foreach ($modules as $module)
                            <li><a href="{{ route('module.show', $module->slug) }}" class="link">Module {{ $module->id }} – {{ $module->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($elsewhere->isNotEmpty())
                <div class="card p-5">
                    <p class="eyebrow">Ook in andere domeinen</p>
                    <ul class="mt-3 space-y-2 text-sm">
                        @foreach ($elsewhere as $match)
                            <li>
                                <a href="{{ route('people.show', ['domain' => $match['domain']['id'], 'person' => $match['person']['id']]) }}" class="flex items-center gap-2 link">
                                    <x-domain-monogram :domain="$match['domain']" size="xs" />
                                    {{ $match['domain']['name'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($events->isNotEmpty())
                <div class="card border-history-line bg-history-soft p-5">
                    <p class="eyebrow text-history">Op de tijdlijn</p>
                    <ul class="mt-3 space-y-1.5 text-sm">
                        @foreach ($events as $event)
                            <li><a href="{{ route('history.index') }}#{{ $event['id'] }}" class="text-history-ink hover:underline"><span class="text-history">{{ $event['year_label'] }}</span> · {!! $markdown->inline($event['title']) !!}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div>
                <p class="eyebrow">Andere {{ mb_strtolower($course->label('people')) }}</p>
                <ul class="mt-3 flex flex-wrap gap-2">
                    @foreach ($others->where('id', '!=', $person['id']) as $other)
                        <li><a href="{{ route('people.show', $other['id']) }}" class="badge hover:border-history hover:text-history">{{ $other['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </aside>
    </div>
@endsection
