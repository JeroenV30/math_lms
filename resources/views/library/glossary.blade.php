@extends('layouts.app', ['title' => 'Woordenlijst'])

@inject('markdown', 'App\Services\MarkdownRenderer')

@section('content')
    <div class="container-page max-w-4xl pt-12 pb-6 sm:pt-16">
        <p class="eyebrow">Woordenlijst</p>
        <h1 class="page-title mt-2">Begrippen</h1>
        <p class="mt-3 font-serif text-lg text-muted">Alle kernbegrippen uit de modules, met de plek waar ze worden uitgelegd.</p>

        @if ($groups->isNotEmpty())
            <nav class="mt-8 flex flex-wrap gap-1.5" aria-label="Letters">
                @foreach ($groups->keys() as $letter)
                    <a href="#letter-{{ $letter }}" class="flex h-8 w-8 items-center justify-center rounded-md border border-line text-sm text-muted hover:border-ink hover:text-ink">{{ $letter }}</a>
                @endforeach
            </nav>
        @else
            <p class="mt-8 text-muted">Nog geen begrippen.</p>
        @endif

        @foreach ($groups as $letter => $entries)
            <section id="letter-{{ $letter }}" class="mt-12 scroll-mt-24">
                <h2 class="border-b border-line pb-2 font-serif text-2xl font-semibold text-ink">{{ $letter }}</h2>
                <dl class="divide-y divide-line">
                    @foreach ($entries as $entry)
                        <div id="{{ \Illuminate\Support\Str::slug($entry['term']) }}" class="grid scroll-mt-24 gap-1 py-4 sm:grid-cols-[14rem_minmax(0,1fr)] sm:gap-6">
                            <dt class="font-semibold text-ink">{!! $markdown->inline($entry['term']) !!}</dt>
                            <dd>
                                <p class="font-serif text-ink-soft">{!! $markdown->inline($entry['definition']) !!}</p>
                                <a href="{{ route('module.show', $entry['module']->slug) }}" class="mt-1 inline-block text-xs text-muted hover:text-accent">Module {{ $entry['module']->id }} · {{ $entry['module']->title }}</a>
                            </dd>
                        </div>
                    @endforeach
                </dl>
            </section>
        @endforeach
    </div>
@endsection
