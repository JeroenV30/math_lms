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
        @if ($reviews->isNotEmpty())
            <section class="card mb-8 p-5" aria-labelledby="reviews-title">
                <h2 id="reviews-title" class="eyebrow">Vandaag herhalen</h2>
                <p class="mt-1 text-sm text-ink-soft">
                    {{ $reviews->sum() }} {{ $reviews->sum() === 1 ? 'oefening staat' : 'oefeningen staan' }} klaar, zodat oudere stof blijft hangen.
                </p>
                <ul class="mt-4 flex flex-wrap gap-2">
                    @foreach ($reviews as $id => $count)
                        @php $reviewDomain = $domains->firstWhere('id', $id); @endphp
                        <li>
                            <a href="{{ route('review.index', ['domain' => $id]) }}" class="btn btn-secondary gap-2">
                                <x-domain-monogram :domain="$reviewDomain" size="xs" />
                                {{ $reviewDomain['name'] }}
                                <span class="badge tabular-nums">{{ $count }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </section>
        @endif

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
                            @if ($progress = $domainService->progressLabel($domain))
                                <span class="mt-2 block text-xs font-medium text-muted">{{ $progress }} beschikbaar</span>
                            @endif
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
