@extends('layouts.app', ['title' => $query !== '' ? 'Zoeken: '.$query : 'Zoeken'])

@section('content')
    <x-page-header :eyebrow="$page['eyebrow']" :title="$page['title']">
        <form action="{{ $action }}" method="get" class="mt-5 flex max-w-2xl gap-2" role="search">
            <label for="q" class="sr-only">Zoekterm</label>
            <input id="q" type="search" name="q" value="{{ $query }}" class="input text-lg" placeholder="{{ $page['placeholder'] }}" autofocus>
            <button class="btn btn-primary">Zoek</button>
        </form>
    </x-page-header>

    <div class="container-page mt-10 *:max-w-3xl">
        @if ($query !== '')
            <p class="text-sm text-muted">{{ $results->count() }} {{ $results->count() === 1 ? 'resultaat' : 'resultaten' }} voor „{{ $query }}”</p>
            <ul class="mt-4 divide-y divide-line">
                @forelse ($results->take(100) as $result)
                    <li class="py-4">
                        <a href="{{ $result['url'] }}" class="group block">
                            <span class="flex flex-wrap items-center gap-2">
                                @isset($domains)
                                    <x-domain-monogram :domain="$domains[$result['domain']]" size="xs" />
                                    <span class="text-xs text-muted">{{ $domains[$result['domain']]['name'] }}</span>
                                @endisset
                                <span class="badge">{{ $result['type'] }}</span>
                            </span>
                            <span class="mt-1.5 block font-serif text-lg text-ink group-hover:text-accent">{{ $result['title'] }}</span>
                            @if ($result['excerpt'])
                                <span class="mt-1 block text-sm leading-relaxed text-muted">{{ $result['excerpt'] }}</span>
                            @endif
                        </a>
                    </li>
                @empty
                    <li class="py-6 text-muted">Niets gevonden. Probeer een ander woord.</li>
                @endforelse
            </ul>
            @if ($results->count() > 100)
                <p class="mt-4 text-sm text-muted">De eerste 100 resultaten staan hierboven. Maak je zoekvraag specifieker om verder te zoeken.</p>
            @endif
        @endif
    </div>
@endsection
