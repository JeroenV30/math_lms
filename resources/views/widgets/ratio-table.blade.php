@php
    $config = [
        'a' => (float) str_replace(',', '.', $params['a'] ?? 3),
        'b' => (float) str_replace(',', '.', $params['b'] ?? 12),
        'labelA' => $params['labelA'] ?? $params['label-a'] ?? 'aantal',
        'labelB' => $params['labelB'] ?? $params['label-b'] ?? 'prijs (€)',
    ];
@endphp

<x-widget title="Verhoudingstabel" component="ratioTable" :config="$config">
    <p class="text-sm text-muted">Verander een getal in de bovenste rij: de onderste rij rekent evenredig mee. Wat je boven doet, doe je ook onder.</p>

    <div class="mt-4 overflow-x-auto">
        <table class="text-sm tabular-nums">
            <tbody>
                <tr>
                    <th scope="row" class="py-1.5 pr-4 text-left font-semibold text-ink" x-text="labelA"></th>
                    <td class="border border-line bg-accent-soft px-3 py-1.5 text-center font-semibold text-ink" x-text="a"></td>
                    <template x-for="(col, i) in columns.slice(1)" :key="i">
                        <td class="border border-line p-1"><input type="text" inputmode="decimal" class="w-20 rounded px-2 py-1 text-center focus:outline-accent" x-model="col.top" :aria-label="labelA"></td>
                    </template>
                </tr>
                <tr>
                    <th scope="row" class="py-1.5 pr-4 text-left font-semibold text-ink" x-text="labelB"></th>
                    <td class="border border-line bg-accent-soft px-3 py-1.5 text-center font-semibold text-ink" x-text="b"></td>
                    <template x-for="(col, i) in columns.slice(1)" :key="i">
                        <td class="border border-line px-3 py-1.5 text-center text-ink" x-text="bottom(col.top)"></td>
                    </template>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <template x-for="(col, i) in columns.slice(1)" :key="i">
                        <td class="px-3 pt-1 text-center text-xs text-accent" x-text="factor(col.top)"></td>
                    </template>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mt-3 flex flex-wrap items-center gap-4">
        <button type="button" class="btn btn-secondary px-3 py-1" @click="add()" x-show="columns.length < 6">+ kolom</button>
        <p class="text-sm text-ink-soft">Per 1: <strong class="text-ink tabular-nums" x-text="perUnit"></strong></p>
    </div>
</x-widget>
