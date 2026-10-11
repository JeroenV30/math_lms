@extends('layouts.app', ['title' => 'Oefenen: '.$label])

@section('content')
    <x-page-header eyebrow="Onderwerp" :title="$label" :crumbs="[['label' => 'Oefenen', 'url' => route('practice.index')]]">
        <p class="mt-3 text-sm text-muted">
            {{ $exercises->count() }} van {{ $total }} opgaven ·
            {{ $mastery ? 'beheersing '.$mastery->score.'%' : 'nog niet geoefend' }}
        </p>
    </x-page-header>

    <div class="container-page mt-10 *:max-w-3xl">
        <div class="space-y-5">
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
