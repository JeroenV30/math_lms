<x-widget title="Romeinse cijfers" component="roman" :config="['value' => (int) ($params['value'] ?? 1994)]">
    <div class="grid gap-4 sm:grid-cols-2">
        <div>
            <label for="rom-n-{{ $id = uniqid() }}" class="block">Getal (1 – 3.999)</label>
            <input id="rom-n-{{ $id }}" type="number" min="1" max="3999" class="num-input mt-1" x-model.number="value" @input="fromNumber()">
        </div>
        <div>
            <label for="rom-r-{{ $id }}" class="block">Romeins</label>
            <input id="rom-r-{{ $id }}" type="text" class="num-input mt-1 w-40 uppercase" x-model="romanInput" @input="fromRomanInput()" spellcheck="false" autocomplete="off">
            <p class="mt-1 text-xs text-danger" x-show="romanError" x-text="romanError"></p>
        </div>
    </div>

    <p class="mt-6 text-center font-serif text-4xl tracking-[0.12em] text-ink" x-text="roman"></p>
    <div class="mt-4 flex flex-wrap justify-center gap-2">
        <template x-for="(g, i) in grouped" :key="i">
            <span class="rounded-md border border-line bg-mist px-2.5 py-1 text-center">
                <span class="block font-serif text-lg text-ink" x-text="g.text"></span>
                <span class="block text-xs text-muted tabular-nums" x-text="g.value"></span>
            </span>
        </template>
    </div>
    <p class="mt-4 text-xs text-muted">I = 1, V = 5, X = 10, L = 50, C = 100, D = 500, M = 1000. Staat een kleiner teken vóór een groter (IV, IX, XL, XC, CD, CM), dan trek je het af. Er is geen teken voor nul.</p>
</x-widget>
