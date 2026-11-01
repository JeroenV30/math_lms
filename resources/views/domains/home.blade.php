@extends('layouts.app', ['title' => $page['title'] ?? 'Start'])

@inject('domainService', 'App\Services\DomainService')

@section('content')
    <x-page-header level="map" :domain="null"
                   :eyebrow="$page['eyebrow'] ?? null"
                   :title="$page['title'] ?? 'Wat wil je leren?'"
                   :intro="$page['intro'] ?? null" />

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

        <ul class="grid gap-4 md:grid-cols-2">
            @foreach ($sections as $section)
                @php
                    $ready = $section['domains']->filter(fn ($d) => $domainService->stage($d) !== 'planned')->count();
                    $total = $section['domains']->count();
                    $nouns = $section['nouns'] ?? ['domein', 'domeinen'];
                @endphp
                <li>
                    <a href="{{ $domainService->sectionUrl($section['id']) }}" class="card group flex h-full flex-col p-6 transition-colors hover:border-line-strong">
                        @if (! empty($section['eyebrow']))
                            <span class="eyebrow">{{ $section['eyebrow'] }}</span>
                        @endif
                        <span class="mt-1 font-serif text-2xl font-semibold text-ink group-hover:underline">{{ $section['name'] }}</span>
                        <span class="mt-3 block flex-1 text-sm leading-relaxed text-ink-soft">{{ $section['intro'] ?? '' }}</span>

                        <span class="mt-5 flex flex-wrap gap-1.5" aria-hidden="true">
                            @foreach ($section['domains'] as $domain)
                                <span title="{{ $domain['name'] }}"><x-domain-monogram :domain="$domain" size="sm" /></span>
                            @endforeach
                        </span>
                        <span class="mt-3 flex items-baseline justify-between gap-3 text-xs text-muted">
                            <span>
                                {{ $total }} {{ $total === 1 ? $nouns[0] : $nouns[1] }}@if ($ready > 0 && $ready < $total), waarvan {{ $ready }} met lessen @endif
                            </span>
                            <span class="font-medium text-ink-soft group-hover:text-ink">Bekijken →</span>
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
