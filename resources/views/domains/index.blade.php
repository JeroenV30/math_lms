@extends('layouts.app', ['title' => $section['title'] ?? 'Kennisdomeinen'])

@section('content')
    <x-page-header level="home" :domain="null"
                   :eyebrow="$section['eyebrow'] ?? null"
                   :title="$section['title'] ?? 'Kennisdomeinen'"
                   :intro="$section['intro'] ?? null">
        @if (file_exists(public_path('images/kaart-van-kennis.jpg')))
            <x-slot:aside>
                <img src="{{ asset('images/kaart-van-kennis.jpg') }}" alt="" width="1536" height="1024"
                     class="w-104 rounded-lg border border-line shadow-sm">
            </x-slot:aside>
        @endif
    </x-page-header>

    <div class="container-page mt-10">
        <p class="mb-4 flex flex-wrap items-baseline justify-between gap-2 text-sm">
            <span class="text-ink-soft">Wat gebeurde er tegelijk in de wiskunde, de natuurwetenschap, de kunst en de politiek?</span>
            <a href="{{ route('history.all') }}" class="link font-medium">Alle domeinen op één tijdlijn →</a>
        </p>

        <ul class="grid gap-3 sm:grid-cols-2">
            @foreach ($domains as $domain)
                <li><x-domain-card :domain="$domain" /></li>
            @endforeach
        </ul>
    </div>
@endsection
