@extends('layouts.app', ['title' => $person['name']])

@inject('markdown', 'App\Services\MarkdownRenderer')

@section('content')
    <div class="container-page grid gap-10 pt-10 sm:pt-14 lg:grid-cols-[minmax(0,1fr)_18rem]">
        <article class="min-w-0 max-w-3xl">
            <nav class="text-sm text-muted" aria-label="Kruimelpad">
                <a href="{{ route('mathematicians.index') }}" class="hover:text-ink">Wiskundigen</a>
            </nav>
            <div class="mt-6 flex items-start gap-6">
                @if (! empty($person['image']))
                    <img src="{{ $person['image'] }}" alt="Portret van {{ $person['name'] }}" class="h-36 w-28 shrink-0 rounded-lg object-cover">
                @endif
                <div>
                    <p class="eyebrow text-history">{{ $person['lived'] ?? '' }}{{ ! empty($person['region']) ? ' · '.$person['region'] : '' }}</p>
                    <h1 class="page-title mt-2">{{ $person['full_name'] ?? $person['name'] }}</h1>
                    <p class="mt-3 font-serif text-lg text-muted">{{ $person['known_for'] ?? '' }}</p>
                </div>
            </div>

            <div class="prose-content mt-10">
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
            @if ($events->isNotEmpty())
                <div class="card border-history-line bg-history-soft p-5">
                    <p class="eyebrow text-history">Op de tijdlijn</p>
                    <ul class="mt-3 space-y-1.5 text-sm">
                        @foreach ($events as $event)
                            <li><a href="{{ route('history.index') }}#{{ $event['id'] }}" class="text-[#4a3a26] hover:underline"><span class="text-history">{{ $event['year_label'] }}</span> · {{ $event['title'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div>
                <p class="eyebrow">Andere wiskundigen</p>
                <ul class="mt-3 flex flex-wrap gap-2">
                    @foreach ($others->where('id', '!=', $person['id']) as $other)
                        <li><a href="{{ route('mathematicians.show', $other['id']) }}" class="badge hover:border-history hover:text-history">{{ $other['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </aside>
    </div>
@endsection
