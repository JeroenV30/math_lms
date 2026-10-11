@props([
    'title',
    'eyebrow' => null,
    'intro' => null,
    // Tussenliggende niveaus onder het domein: [['label' => …, 'url' => … of null], …].
    'crumbs' => [],
    // 'page': Kaart van kennis › domein › crumbs; 'domain': alleen Kaart van kennis; 'map': geen kruimelpad.
    'level' => 'page',
    // false: het actieve domein (DomainService::active()); null: neutraal; array: dit domein.
    'domain' => false,
    'eyebrowClass' => '',
])

{{--
    Kop van elke overzichts- en taakpagina: een band in de tint van het domein, kruimelpad, kicker, titel en intro.
    Slots: leading (monogram, portret), meta (rechts naast het kruimelpad), actions (knoppen rechts) en de
    standaardslot voor extra inhoud onder de intro.
--}}
@php
    $domains = app(\App\Services\DomainService::class);
    $domain = $domain === false ? $domains->active() : $domain;
    $tint = $domain['color'] ?? null;

    $trail = match ($level) {
        'map' => [],
        'domain' => [['label' => 'Kaart van kennis', 'url' => route('domains.index')]],
        default => [
            ['label' => 'Kaart van kennis', 'url' => route('domains.index')],
            ...($domain ? [['label' => $domain['name'], 'url' => $domains->url($domain)]] : []),
            ...$crumbs,
        ],
    };
@endphp

<div {{ $attributes->class(['border-b border-line', 'bg-mist/60' => ! $tint]) }}
     @if ($tint) style="background: linear-gradient(180deg, {{ $tint }}12, transparent)" @endif>
    <div class="container-page pt-10 pb-10 sm:pt-14">
        @if ($trail || isset($meta))
            <div class="mb-5 flex flex-wrap items-baseline justify-between gap-x-6 gap-y-1 text-sm text-muted">
                <nav aria-label="Kruimelpad">
                    <ol class="flex flex-wrap items-baseline gap-x-1.5">
                        @foreach ($trail as $crumb)
                            <li class="flex items-baseline gap-x-1.5">
                                @unless ($loop->first)<span class="text-faint" aria-hidden="true">/</span>@endunless
                                @if (! empty($crumb['url']))
                                    <a href="{{ $crumb['url'] }}" class="hover:text-ink">{{ $crumb['label'] }}</a>
                                @else
                                    <span>{{ $crumb['label'] }}</span>
                                @endif
                            </li>
                        @endforeach
                    </ol>
                </nav>
                {{ $meta ?? '' }}
            </div>
        @endif

        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <div class="flex min-w-0 items-start gap-5">
                {{ $leading ?? '' }}
                <div class="min-w-0 max-w-3xl">
                    @if ($eyebrow)
                        <p @class(['eyebrow', $eyebrowClass])>{{ $eyebrow }}</p>
                    @endif
                    <h1 @class(['page-title', 'mt-1' => $eyebrow])>{{ $title }}</h1>
                    @if ($intro)
                        <p class="mt-3 max-w-2xl font-serif text-lg text-ink-soft">{{ $intro }}</p>
                    @endif
                    {{ $slot }}
                </div>
            </div>
            @isset($actions)
                <div class="flex shrink-0 flex-wrap gap-2">{{ $actions }}</div>
            @endisset
        </div>
    </div>
</div>
