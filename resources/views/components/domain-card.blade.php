@props(['domain'])

{{-- Kaart van één domein (kennisdomein of toepassing): monogram, naam, status, tagline, beschrijving en voortgang. --}}
@php $domainService = app(\App\Services\DomainService::class); @endphp
<a href="{{ $domainService->url($domain) }}" {{ $attributes->class(['card group flex h-full gap-4 p-5 transition-colors hover:border-line-strong']) }}>
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
