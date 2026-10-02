<x-widget title="Machten: herhaald vermenigvuldigen" component="powers" :config="['base' => (int) ($params['base'] ?? 2), 'max' => (int) ($params['max'] ?? 10)]">
    <label class="flex items-center gap-3">Grondtal <input type="range" min="1" max="10" x-model.number="base"> <span class="w-6 font-semibold tabular-nums text-ink" x-text="base"></span></label>

    <div class="mt-4 overflow-x-auto">
        <table class="w-full text-sm tabular-nums">
            <tbody>
                <template x-for="row in rows" :key="row.n">
                    <tr class="border-b border-line/60">
                        <td class="w-16 py-1.5 pr-3 text-ink" x-katex="`${base}^{${row.n}}`"></td>
                        <td class="hidden py-1.5 pr-3 text-xs text-muted sm:table-cell" x-text="row.product"></td>
                        <td class="w-28 py-1.5 pr-3 text-right font-semibold text-ink" x-text="format(row.value)"></td>
                        <td class="w-1/3 py-1.5"><div class="h-2 rounded-full bg-accent/70" :style="`width: ${width(row.value)}%`"></div></td>
                    </tr>
                </template>
            </tbody>
        </table>
    </div>
    <p class="mt-3 text-xs text-muted">Elke stap omlaag vermenigvuldig je met het grondtal. Daarom groeien machten zo snel — dat zie je terug bij exponentiële groei.</p>
</x-widget>
