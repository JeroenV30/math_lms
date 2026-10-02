<x-widget title="Het rechthoekmodel van vermenigvuldigen" component="areaModel" :config="['a' => (int) ($params['a'] ?? 37), 'b' => (int) ($params['b'] ?? 14)]">
    <div class="flex flex-wrap items-center gap-2">
        <input type="number" min="1" max="999" class="num-input" x-model.number="a" @change="normalize()" aria-label="Eerste getal">
        <span class="text-lg">×</span>
        <input type="number" min="1" max="999" class="num-input" x-model.number="b" @change="normalize()" aria-label="Tweede getal">
    </div>

    <svg :view-box.camel="`-46 -30 ${W + 56} ${H + 40}`" class="mt-5 w-full max-w-xl" role="img" :aria-label="`Rechthoek van ${a} bij ${b}, gesplitst naar plaatswaarde`" x-html="svg"></svg>

    <p class="mt-3 text-center text-sm text-ink-soft">
        <span class="tabular-nums" x-text="`${format(a)} × ${format(b)} = ${sum} = `"></span><strong class="text-ink tabular-nums" x-text="format(product)"></strong>
    </p>
    <p class="mt-2 text-center text-xs text-muted">Elk vak is een makkelijke vermenigvuldiging. Samen vormen ze de hele rechthoek — dat is de distributieve eigenschap.</p>
</x-widget>
