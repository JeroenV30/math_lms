@props(['domain'])

{{-- Kop van een kennisdomein: dezelfde opbouw voor elk domein, uitgewerkt (Wiskunde-dashboard) of in voorbereiding. --}}
<div class="border-b border-line" style="background: linear-gradient(180deg, {{ $domain['color'] }}12, transparent)">
    <div class="container-page pt-10 pb-10 sm:pt-14">
        <div class="flex flex-wrap items-baseline justify-between gap-x-6 gap-y-1 text-sm text-muted">
            <nav aria-label="Kruimelpad">
                <a href="{{ route('domains.index') }}" class="hover:text-ink">Kaart van kennis</a>
            </nav>
            {{ $meta ?? '' }}
        </div>
        <div class="mt-5 flex items-start gap-5">
            <span class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full font-serif text-xl font-semibold text-white"
                  style="background-color: {{ $domain['color'] }}" aria-hidden="true">{{ $domain['monogram'] }}</span>
            <div>
                <p class="eyebrow">{{ implode(' · ', $domain['tagline'] ?? []) }}</p>
                <h1 class="page-title mt-1">{{ $domain['name'] }}</h1>
                <p class="mt-3 max-w-2xl font-serif text-lg text-ink-soft">{{ $domain['description'] ?? '' }}</p>
            </div>
        </div>
    </div>
</div>
