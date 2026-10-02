@php
    $quantity = in_array($params['quantity'] ?? 'length', ['length', 'weight', 'volume'], true) ? $params['quantity'] : 'length';
    $titles = ['length' => 'Het metrieke trapje: lengte', 'weight' => 'Het metrieke trapje: gewicht', 'volume' => 'Het metrieke trapje: inhoud'];
@endphp

<x-widget :title="$titles[$quantity]" component="unitLadder" :config="['quantity' => $quantity]">
    <div class="grid gap-6 sm:grid-cols-[minmax(0,1fr)_14rem]">
        <div>
            <div class="flex flex-wrap items-center gap-2">
                <input type="text" inputmode="decimal" class="num-input" x-model="value" aria-label="Waarde">
                <select class="num-input w-24" x-model="from" aria-label="Van eenheid">
                    <template x-for="u in ladder.units" :key="'f' + u"><option :value="u" x-text="u" :selected="u === from"></option></template>
                </select>
                <span class="text-muted">=</span>
                <strong class="font-serif text-xl text-ink tabular-nums" x-text="result === null ? '?' : format(result)"></strong>
                <select class="num-input w-24" x-model="to" aria-label="Naar eenheid">
                    <template x-for="u in ladder.units" :key="'t' + u"><option :value="u" x-text="u" :selected="u === to"></option></template>
                </select>
            </div>
            <p class="mt-4 text-sm text-ink-soft" x-text="explanation"></p>
            @if ($quantity === 'volume')
                <p class="mt-2 text-xs text-muted">1 liter = 1 dm³: een kubus van 10 × 10 × 10 cm.</p>
            @endif
        </div>

        <ol class="space-y-1" aria-label="Trapje van groot naar klein">
            <template x-for="(u, i) in ladder.units" :key="u">
                <li class="flex items-center gap-2" :style="`padding-left: ${i * 1.1}rem`">
                    <span class="w-12 rounded border px-2 py-0.5 text-center text-sm font-medium"
                          :class="u === from ? 'border-accent bg-accent text-white' : (u === to ? 'border-accent bg-accent-soft text-accent' : (between(i) ? 'border-accent-line text-ink' : 'border-line text-muted'))"
                          x-text="u"></span>
                    <span class="text-[0.65rem] text-faint" x-show="i < ladder.units.length - 1">× 10 ↓</span>
                </li>
            </template>
        </ol>
    </div>
</x-widget>
