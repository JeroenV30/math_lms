@extends('layouts.app', ['title' => 'Oefenen'])

@section('content')
    <div class="container-page pt-12 pb-6 sm:pt-16">
        <p class="eyebrow">Vrij oefenen</p>
        <h1 class="page-title mt-2">Oefenen per onderwerp</h1>
        <p class="mt-3 max-w-2xl font-serif text-lg text-muted">
            Kies een onderwerp. Je krijgt eerst de opgaven die nog niet lukten, dan nieuwe, en daarna herhaling.
        </p>
    </div>

    <div class="container-page">
        @if ($topics->isEmpty())
            <p class="text-muted">Er zijn nog geen oefeningen beschikbaar.</p>
        @else
            <ul class="grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($topics as $topic)
                    <li>
                        <a href="{{ route('practice.show', $topic['key']) }}" class="card group block p-5 transition-colors hover:border-accent-line">
                            <div class="flex items-baseline justify-between gap-3">
                                <span class="font-serif text-lg font-semibold text-ink group-hover:text-accent">{{ $topic['label'] }}</span>
                                <span class="text-xs text-muted">{{ $topic['count'] }} opgaven</span>
                            </div>
                            <div class="progress-track mt-4 h-1.5">
                                <div class="progress-bar" style="width: {{ $topic['mastery']?->score ?? 0 }}%"></div>
                            </div>
                            <p class="mt-2 text-xs text-muted">
                                {{ $topic['mastery'] ? 'Beheersing '.$topic['mastery']->score.'%' : 'Nog niet geoefend' }}
                            </p>
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
