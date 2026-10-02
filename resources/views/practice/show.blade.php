@extends('layouts.app', ['title' => 'Oefenen: '.$label])

@section('content')
    <div class="container-page max-w-3xl pt-10 sm:pt-14">
        <nav class="text-sm text-muted" aria-label="Kruimelpad">
            <a href="{{ route('practice.index') }}" class="hover:text-ink">Oefenen</a>
        </nav>
        <p class="eyebrow mt-6">Onderwerp</p>
        <h1 class="page-title mt-2">{{ $label }}</h1>
        <p class="mt-3 text-sm text-muted">
            {{ $exercises->count() }} van {{ $total }} opgaven ·
            {{ $mastery ? 'beheersing '.$mastery->score.'%' : 'nog niet geoefend' }}
        </p>

        <div class="mt-8 space-y-5">
            @forelse ($exercises as $exercise)
                @include('exercises.card', ['exercise' => $exercise, 'context' => 'practice', 'state' => $states[$exercise->id] ?? null, 'showModule' => true])
            @empty
                <p class="text-muted">Voor dit onderwerp zijn nog geen opgaven beschikbaar.</p>
            @endforelse
        </div>

        @if ($exercises->isNotEmpty())
            <div class="mt-10 flex justify-between gap-4">
                <a href="{{ route('practice.index') }}" class="btn btn-ghost -ml-3">← Ander onderwerp</a>
                <a href="{{ route('practice.show', $topic) }}" class="btn btn-secondary">Nieuwe set</a>
            </div>
        @endif
    </div>
@endsection
