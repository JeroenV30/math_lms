@extends('layouts.app', ['title' => $query !== '' ? 'Zoeken: '.$query : 'Zoeken'])

@section('content')
    <div class="container-page max-w-3xl pt-12 sm:pt-16">
        <p class="eyebrow">Zoeken</p>
        <form action="{{ route('search') }}" method="get" class="mt-3 flex gap-2" role="search">
            <label for="q" class="sr-only">Zoekterm</label>
            <input id="q" type="search" name="q" value="{{ $query }}" class="input text-lg" placeholder="Pythagoras, breuken, Newton…" autofocus>
            <button class="btn btn-primary">Zoek</button>
        </form>

        @if ($query !== '')
            <p class="mt-6 text-sm text-muted">{{ $results->count() }} {{ $results->count() === 1 ? 'resultaat' : 'resultaten' }} voor „{{ $query }}”</p>
            <ul class="mt-4 divide-y divide-line">
                @forelse ($results as $result)
                    <li class="py-4">
                        <a href="{{ $result['url'] }}" class="group block">
                            <span class="badge">{{ $result['type'] }}</span>
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
        @endif
    </div>
@endsection
