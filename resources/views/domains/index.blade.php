@extends('layouts.app', ['title' => $overview['title'] ?? 'Kennisdomeinen'])

@inject('domainService', 'App\Services\DomainService')

@section('content')
    <x-page-header level="map" :domain="null"
                   :eyebrow="$overview['subtitle'] ?? null"
                   :title="$overview['title'] ?? 'Kennisdomeinen'"
                   :intro="$overview['intro'] ?? null" />

    <div class="container-page mt-10 grid gap-10 lg:grid-cols-[minmax(0,1fr)_22rem]">
        <ul class="grid content-start gap-3 sm:grid-cols-2">
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

        <figure class="card overflow-hidden self-start">
            <img src="{{ asset('images/kennisdomeinen.jpg') }}" alt="Kaart van menselijke kennis: tien domeinen rond een figuur die over een landschap uitkijkt" class="w-full" loading="lazy">
            <figcaption class="px-4 py-3 text-xs text-muted">De kaart waarop deze leeromgeving uiteindelijk alle domeinen met elkaar verbindt.</figcaption>
        </figure>
    </div>
@endsection
