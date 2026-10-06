@props(['domains', 'active' => null])

{{-- Linker navigatie tussen kennisdomeinen. Smal (monogrammen) of uitgeklapt (namen); de keuze wordt onthouden. --}}
<aside class="sticky top-16 hidden h-[calc(100vh-4rem)] shrink-0 border-r border-line bg-mist/40 transition-[width] duration-200 lg:flex lg:flex-col"
       :class="open ? 'w-60' : 'w-16'"
       x-data="{
           open: (() => { try { return localStorage.getItem('domain-rail') === 'open' } catch (e) { return false } })(),
           toggle() { this.open = ! this.open; try { localStorage.setItem('domain-rail', this.open ? 'open' : 'closed') } catch (e) {} },
       }"
       aria-label="Kennisdomeinen">
    <div class="flex items-center justify-between px-3 pt-4 pb-2" :class="open ? '' : 'justify-center'">
        <a href="{{ route('domains.index') }}" class="eyebrow hover:text-ink" x-show="open" x-cloak>Kennisdomeinen</a>
        <button type="button" class="flex h-8 w-8 items-center justify-center rounded-md text-muted hover:bg-paper hover:text-ink"
                @click="toggle()" :aria-expanded="open" :aria-label="open ? 'Domeinbalk inklappen' : 'Domeinbalk uitklappen'">
            <svg class="h-4 w-4 transition-transform" :class="open ? 'rotate-180' : ''" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="m8 5 5 5-5 5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
    </div>

    <nav class="flex-1 space-y-0.5 overflow-y-auto px-2 pb-4">
        @foreach ($domains as $domain)
            @php
                $isActive = $active === $domain['id'];
                $planned = ($domain['status'] ?? 'planned') !== 'available';
            @endphp
            <a href="{{ route('domains.show', $domain['id']) }}"
               title="{{ $domain['name'] }}{{ $planned ? ' — in voorbereiding' : '' }}"
               @class([
                   'group flex items-center gap-3 rounded-lg px-2 py-2 transition-colors',
                   'bg-paper shadow-sm ring-1 ring-line' => $isActive,
                   'hover:bg-paper' => ! $isActive,
               ])
               @if ($isActive) aria-current="page" @endif>
                <x-domain-monogram :domain="$domain" />
                <span class="min-w-0" x-show="open" x-cloak>
                    <span @class(['block truncate text-sm font-medium', 'text-ink' => ! $planned || $isActive, 'text-ink-soft' => $planned && ! $isActive])>{{ $domain['name'] }}</span>
                    <span class="block truncate text-[0.7rem] text-muted">
                        {{ $planned ? 'In voorbereiding' : implode(' · ', $domain['tagline'] ?? []) }}
                    </span>
                </span>
                <span class="sr-only" x-show="! open">{{ $domain['name'] }}</span>
            </a>
        @endforeach
    </nav>

    <a href="{{ route('domains.index') }}" class="m-2 flex items-center gap-3 rounded-lg px-2 py-2 text-muted hover:bg-paper hover:text-ink" title="Kaart van menselijke kennis">
        <span class="flex h-8 w-8 shrink-0 items-center justify-center" aria-hidden="true">
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="10" cy="10" r="2.5"/><circle cx="10" cy="3" r="1.2"/><circle cx="16" cy="13.5" r="1.2"/><circle cx="4" cy="13.5" r="1.2"/><path d="M10 5.5v2M14.9 12.6l-2.7-1.4M5.1 12.6l2.7-1.4"/></svg>
        </span>
        <span class="text-sm" x-show="open" x-cloak>Kaart van kennis</span>
    </a>
</aside>
