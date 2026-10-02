<x-widget title="Het rechthoekmodel van vermenigvuldigen" component="areaModel" :config="['a' => (int) ($params['a'] ?? 37), 'b' => (int) ($params['b'] ?? 14)]">
    <div class="flex flex-wrap items-center gap-2">
        <input type="number" min="1" max="999" class="num-input" x-model.number="a" @change="normalize()" aria-label="Eerste getal">
        <span class="text-lg">×</span>
        <input type="number" min="1" max="999" class="num-input" x-model.number="b" @change="normalize()" aria-label="Tweede getal">
    </div>

    <svg :viewBox="`-46 -30 ${W + 56} ${H + 40}`" class="mt-5 w-full max-w-xl" role="img" :aria-label="`Rechthoek van ${a} bij ${b}, gesplitst naar plaatswaarde`">
        <template x-for="label in columnLabels" :key="'c' + label.x">
            <text :x="label.x" y="-10" text-anchor="middle" font-size="15" fill="#3e4c59" font-family="Inter, sans-serif" x-text="label.label"></text>
        </template>
        <template x-for="label in rowLabels" :key="'r' + label.y">
            <text x="-10" :y="label.y + 5" text-anchor="end" font-size="15" fill="#3e4c59" font-family="Inter, sans-serif" x-text="label.label"></text>
        </template>
        <template x-for="(cell, i) in cells" :key="cell.key">
            <g>
                <rect :x="cell.x" :y="cell.y" :width="cell.w" :height="cell.h" :fill="['#eef2ff', '#dfe6fd', '#e9ecf5', '#f5f7fa', '#e3e9fe', '#eef0f6'][i % 6]" stroke="#3b5bdb" stroke-width="1.5" />
                <text :x="cell.x + cell.w / 2" :y="cell.y + cell.h / 2 - 2" text-anchor="middle" font-size="13" fill="#616e7c" font-family="Inter, sans-serif" x-text="`${format(cell.a)} × ${format(cell.b)}`"></text>
                <text :x="cell.x + cell.w / 2" :y="cell.y + cell.h / 2 + 17" text-anchor="middle" font-size="17" font-weight="600" fill="#1f2933" font-family="Inter, sans-serif" x-text="format(cell.product)"></text>
            </g>
        </template>
    </svg>

    <p class="mt-3 text-center text-sm text-ink-soft">
        <span class="tabular-nums" x-text="`${format(a)} × ${format(b)} = ${sum} = `"></span><strong class="text-ink tabular-nums" x-text="format(product)"></strong>
    </p>
    <p class="mt-2 text-center text-xs text-muted">Elk vak is een makkelijke vermenigvuldiging. Samen vormen ze de hele rechthoek — dat is de distributieve eigenschap.</p>
</x-widget>
