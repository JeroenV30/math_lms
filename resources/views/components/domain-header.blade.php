@props(['domain'])

{{-- Kop van een kennisdomein: dezelfde opbouw voor elk domein, uitgewerkt (Wiskunde-dashboard) of in voorbereiding. --}}
<x-page-header :domain="$domain" level="domain"
               :eyebrow="implode(' · ', $domain['tagline'] ?? [])"
               :title="$domain['name']"
               :intro="$domain['description'] ?? null">
    <x-slot:leading><x-domain-monogram :domain="$domain" size="xl" /></x-slot:leading>
    @isset($meta)
        <x-slot:meta>{{ $meta }}</x-slot:meta>
    @endisset
</x-page-header>
