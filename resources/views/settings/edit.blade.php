@extends('layouts.app', ['title' => 'Instellingen'])

@section('content')
    <div class="container-page max-w-2xl pt-12 sm:pt-16">
        <p class="eyebrow">Instellingen</p>
        <h1 class="page-title mt-2">Instellingen</h1>

        @if (session('status'))
            <p class="mt-6 rounded-lg bg-success-soft px-4 py-3 text-sm text-success">{{ session('status') }}</p>
        @endif

        <form method="post" action="{{ route('settings.update') }}" class="card mt-8 p-6">
            @csrf
            <label for="name" class="block text-sm font-semibold text-ink">Je naam</label>
            <p class="mt-1 text-sm text-muted">Gebruikt voor de begroeting op het dashboard.</p>
            <input id="name" name="name" type="text" value="{{ old('name', $name) }}" maxlength="60" class="input mt-3">
            @error('name') <p class="mt-2 text-sm text-danger">{{ $message }}</p> @enderror
            <button class="btn btn-primary mt-4">Opslaan</button>
        </form>

        <form method="post" action="{{ route('settings.reset') }}" class="card mt-6 border-danger/25 p-6">
            @csrf
            <p class="text-sm font-semibold text-danger">Voortgang wissen</p>
            <p class="mt-1 text-sm text-muted">Wist alle pogingen, gelezen lessen, toetsscores en beheersing. De cursusinhoud blijft staan. Dit kan niet ongedaan worden gemaakt.</p>
            <label for="confirm" class="mt-4 block text-sm text-ink">Typ <strong>WISSEN</strong> om te bevestigen</label>
            <input id="confirm" name="confirm" type="text" autocomplete="off" class="input mt-2 max-w-xs">
            @error('confirm') <p class="mt-2 text-sm text-danger">{{ $message }}</p> @enderror
            <button class="btn mt-4 bg-danger text-white hover:bg-danger/90">Alles wissen</button>
        </form>
    </div>
@endsection
