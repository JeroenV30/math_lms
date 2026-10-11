@props(['domain'])

{{-- Statuslabel van een kennisdomein; tekst en kleur komen overal uit DomainService::stage(). --}}
@php
    $domains = app(\App\Services\DomainService::class);
    $stage = $domains->stage($domain);
@endphp
<span {{ $attributes->class([
    'badge',
    'border-success/30 text-success' => $stage === 'available',
    'border-accent/30 text-accent' => $stage === 'starter',
]) }}>{{ mb_strtolower($domains->stageLabel($domain)) }}</span>
