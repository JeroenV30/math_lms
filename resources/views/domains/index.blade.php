@extends('layouts.app', ['title' => $overview['title'] ?? 'Kennisdomeinen'])

@section('content')
    <div class="container-page pt-12 pb-6 sm:pt-16">
        <p class="eyebrow">{{ $overview['subtitle'] ?? '' }}</p>
        <h1 class="page-title mt-2">{{ $overview['title'] ?? 'Kennisdomeinen' }}</h1>
        <p class="mt-3 max-w-3xl font-serif text-lg text-muted">{{ $overview['intro'] ?? '' }}</p>
    </div>

    <div class="container-page grid gap-10 lg:grid-cols-[minmax(0,1fr)_22rem]">
        <ul class="grid content-start gap-3 sm:grid-cols-2">
            @foreach ($domains as $domain)
                @php $planned = ($domain['status'] ?? 'planned') !== 'available'; @endphp
                <li>
                    <a href="{{ route('domains.show', $domain['id']) }}" class="card group flex h-full gap-4 p-5 transition-colors hover:border-line-strong">
                        <x-domain-monogram :domain="$domain" size="lg" />
                        <span class="min-w-0">
                            <span class="flex items-baseline gap-2">
                                <span class="font-serif text-lg font-semibold text-ink group-hover:underline">{{ $domain['name'] }}</span>
                                @if ($planned)
                                    <span class="badge">in voorbereiding</span>
                                @else
                                    <span class="badge border-success/30 text-success">beschikbaar</span>
                                @endif
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
