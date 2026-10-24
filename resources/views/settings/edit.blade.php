@extends('layouts.app', ['title' => 'Instellingen'])

@section('content')
    <x-page-header level="domain" eyebrow="Leeromgeving" title="Instellingen" />

    <div class="container-page mt-10 *:max-w-2xl">
        @if (session('status'))
            <p class="mb-6 rounded-lg bg-success-soft px-4 py-3 text-sm text-success">{{ session('status') }}</p>
        @endif

        <form method="post" action="{{ route('settings.update') }}" class="card p-6">
            @csrf
            <label for="name" class="block text-sm font-semibold text-ink">Je naam</label>
            <p class="mt-1 text-sm text-muted">Gebruikt voor de begroeting op het dashboard.</p>
            <input id="name" name="name" type="text" value="{{ old('name', $name) }}" maxlength="60" class="input mt-3">
            @error('name') <p class="mt-2 text-sm text-danger">{{ $message }}</p> @enderror
            <button class="btn btn-primary mt-4">Opslaan</button>
        </form>

        <section class="card mt-6 p-6" aria-labelledby="backup-title">
            <p id="backup-title" class="text-sm font-semibold text-ink">Back-up van je voortgang</p>
            <p class="mt-1 text-sm text-muted">Al je leerdata staat in één lokaal databasebestand. Bewaar af en toe een back-up, bijvoorbeeld voordat je de applicatie bijwerkt of naar een andere computer gaat. De cursusinhoud zit er niet in.</p>

            @if ($courses->sum('attempts') + $courses->sum('lessons') > 0)
                <ul class="mt-4 space-y-1 text-sm text-ink-soft">
                    @foreach ($courses->filter(fn ($c) => $c['attempts'] + $c['lessons'] > 0) as $course)
                        <li><span class="text-ink">{{ $course['name'] }}</span>: {{ $course['lessons'] }} {{ $course['lessons'] === 1 ? 'les' : 'lessen' }} gelezen, {{ $course['attempts'] }} {{ $course['attempts'] === 1 ? 'poging' : 'pogingen' }}</li>
                    @endforeach
                </ul>
            @endif

            <a href="{{ route('settings.export') }}" class="btn btn-secondary mt-4">Back-up downloaden</a>

            <form method="post" action="{{ route('settings.import') }}" enctype="multipart/form-data" class="mt-6 border-t border-line pt-5">
                @csrf
                <label for="backup" class="block text-sm text-ink">Back-up terugzetten</label>
                <input id="backup" name="backup" type="file" accept="application/json,.json" class="mt-2 block text-sm text-ink-soft file:mr-3 file:cursor-pointer file:rounded-lg file:border file:border-line file:bg-paper file:px-3 file:py-1.5 file:text-sm file:font-medium file:text-ink hover:file:bg-line/40">
                @error('backup') <p class="mt-2 text-sm text-danger">{{ $message }}</p> @enderror
                <label class="mt-3 flex items-start gap-2 text-sm text-ink-soft">
                    <input type="checkbox" name="replace" value="1" class="mt-1">
                    <span>Ik begrijp dat dit al mijn huidige voortgang, in alle domeinen, vervangt door die uit de back-up.</span>
                </label>
                @error('replace') <p class="mt-2 text-sm text-danger">{{ $message }}</p> @enderror
                <button class="btn btn-secondary mt-4">Terugzetten</button>
            </form>
        </section>

        <form method="post" action="{{ route('settings.reset') }}" class="card mt-6 border-danger/25 p-6">
            @csrf
            <p class="text-sm font-semibold text-danger">Voortgang wissen</p>
            <p class="mt-1 text-sm text-muted">Wist pogingen, gelezen lessen, toetsscores en beheersing. De cursusinhoud blijft staan. Dit kan niet ongedaan worden gemaakt; download eerst een back-up als je twijfelt.</p>
            <label for="course" class="mt-4 block text-sm text-ink">Welke voortgang?</label>
            <select id="course" name="course" class="input mt-2 block max-w-xs">
                <option value="">Alle domeinen</option>
                @foreach ($courses as $course)
                    <option value="{{ $course['id'] }}" @selected(old('course') === $course['id'])>{{ $course['name'] }}</option>
                @endforeach
            </select>
            @error('course') <p class="mt-2 text-sm text-danger">{{ $message }}</p> @enderror
            <label for="confirm" class="mt-4 block text-sm text-ink">Typ <strong>WISSEN</strong> om te bevestigen</label>
            <input id="confirm" name="confirm" type="text" autocomplete="off" class="input mt-2 block max-w-xs">
            @error('confirm') <p class="mt-2 text-sm text-danger">{{ $message }}</p> @enderror
            <button class="btn mt-4 bg-danger text-white hover:bg-danger/90">Wissen</button>
        </form>
    </div>
@endsection
