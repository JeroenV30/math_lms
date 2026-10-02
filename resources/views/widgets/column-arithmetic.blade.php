@php
    $config = [
        'a' => (int) ($params['a'] ?? 487),
        'b' => (int) ($params['b'] ?? 356),
        'op' => ($params['op'] ?? '+') === '-' ? '-' : '+',
    ];
@endphp

<x-widget :title="$config['op'] === '-' ? 'Kolomsgewijs aftrekken' : 'Kolomsgewijs optellen'" component="columnArithmetic" :config="$config">
    <div class="flex flex-wrap items-center gap-2">
        <input type="number" min="0" max="999999" class="num-input" x-model.number="a" @change="reset()" aria-label="Eerste getal">
        <span class="text-lg text-ink" x-text="op === '+' ? '+' : '−'"></span>
        <input type="number" min="0" max="999999" class="num-input" x-model.number="b" @change="reset()" aria-label="Tweede getal">
    </div>
    <p class="mt-2 text-xs text-muted" x-show="swapped">Het grootste getal staat bovenaan, zodat de uitkomst niet negatief wordt.</p>

    <div class="mt-5 flex justify-center">
        <div class="inline-grid gap-y-1 font-mono text-2xl tabular-nums" :style="`grid-template-columns: 1.5rem repeat(${width}, 2.25rem)`" role="table" aria-label="Kolomsom">
            {{-- onthouden / lenen --}}
            <span></span>
            <template x-for="c in columns" :key="'m' + c">
                <span class="h-5 text-center text-xs font-semibold text-accent" x-text="mark(c)"></span>
            </template>
            <span></span>
            <template x-for="c in columns" :key="'a' + c">
                <span class="rounded text-center" :class="current && current.col === c ? 'bg-accent-soft' : ''" x-text="topDigits[c] ?? ''"></span>
            </template>
            <span class="text-center text-muted" x-text="op === '+' ? '+' : '−'"></span>
            <template x-for="c in columns" :key="'b' + c">
                <span class="rounded text-center" :class="current && current.col === c ? 'bg-accent-soft' : ''" x-text="bottomDigits[c] ?? ''"></span>
            </template>
            <span class="col-span-full border-t-2 border-ink"></span>
            <span></span>
            <template x-for="c in columns" :key="'r' + c">
                <span class="text-center font-semibold text-accent" x-text="resultDigit(c)"></span>
            </template>
        </div>
    </div>

    <p class="mt-4 min-h-10 text-center text-sm text-ink-soft" aria-live="polite">
        <span x-show="step === 0">Begin rechts, bij de eenheden. Druk op <em>Volgende stap</em>.</span>
        <span x-show="current" x-text="current?.text"></span>
        <strong x-show="done" class="mt-1 block text-ink" x-text="`Uitkomst: ${format(answer)}`"></strong>
    </p>

    <div class="mt-3 flex justify-center gap-2">
        <button type="button" class="btn btn-primary" @click="next()" :disabled="done">Volgende stap</button>
        <button type="button" class="btn btn-ghost" @click="all()" x-show="!done">Alles tonen</button>
        <button type="button" class="btn btn-ghost" @click="reset()" x-show="step > 0">Opnieuw</button>
    </div>
</x-widget>
