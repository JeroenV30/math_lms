@extends('layouts.app', ['title' => $overview['title'] ?? 'Kennisdomeinen'])

@inject('domainService', 'App\Services\DomainService')

@section('content')
    <x-page-header level="map" :domain="null"
                   :eyebrow="$overview['subtitle'] ?? null"
                   :title="$overview['title'] ?? 'Kennisdomeinen'"
                   :intro="$overview['intro'] ?? null">
        @if (file_exists(public_path('images/kaart-van-kennis.jpg')))
            <x-slot:aside>
                <img src="{{ asset('images/kaart-van-kennis.jpg') }}" alt="" width="1536" height="1024"
                     class="w-104 rounded-lg border border-line shadow-sm">
            </x-slot:aside>
        @endif
    </x-page-header>

    <div class="container-page mt-10">
        <ul class="grid gap-3 sm:grid-cols-2">
            @foreach ($domains as $domain)
                <li>
                    <a href="{{ $domainService->url($domain) }}" class="card group flex h-full gap-4 p-5 transition-colors hover:border-line-strong">
                        <x-domain-monogram :domain="$domain" size="lg" />
                        <span class="min-w-0 flex-1">
                            <span class="flex items-baseline justify-between gap-3">
                                <span class="font-serif text-lg font-semibold text-ink group-hover:underline">{{ $domain['name'] }}</span>
                                <x-domain-status :domain="$domain" />
                            </span>
                            <span class="mt-0.5 block text-xs tracking-wide text-muted">{{ implode(' · ', $domain['tagline'] ?? []) }}</span>
                            <span class="mt-2 block text-sm leading-relaxed text-ink-soft">{{ $domain['description'] ?? '' }}</span>
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
