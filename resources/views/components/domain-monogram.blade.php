@props(['domain', 'size' => 'md'])

{{-- Monogram van een kennisdomein: voor elk domein dezelfde stijl (lichte tint van de domeinkleur, letters in die kleur). --}}
@php
    $sizes = [
        'xs' => 'h-5 w-5 text-[0.55rem]',
        'sm' => 'h-7 w-7 text-[0.7rem]',
        'md' => 'h-8 w-8 text-[0.8rem]',
        'lg' => 'h-11 w-11 text-base',
        'xl' => 'h-14 w-14 text-xl',
    ];
@endphp
<span {{ $attributes->class(['flex shrink-0 items-center justify-center rounded-full font-serif font-semibold', $sizes[$size] ?? $sizes['md']]) }}
      style="background-color: {{ $domain['color'] }}1f; color: {{ $domain['color'] }}"
      aria-hidden="true">{{ $domain['monogram'] }}</span>
