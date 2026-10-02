<x-widget title="Egyptisch vermenigvuldigen door verdubbelen" component="egyptianMultiplication" :config="['a' => (int) ($params['a'] ?? 13), 'b' => (int) ($params['b'] ?? 24)]">
    <div class="flex flex-wrap items-center gap-2">
        <input type="number" min="1" max="999" class="num-input" x-model.number="a" @change="reset()" aria-label="Hoe vaak">
        <span class="text-lg">×</span>
        <input type="number" min="1" max="9999" class="num-input" x-model.number="b" @change="reset()" aria-label="Getal dat verdubbeld wordt">
    </div>

    <table class="mt-5 w-full max-w-sm text-base tabular-nums">
        <thead>
            <tr class="border-b border-line text-left text-xs tracking-wide text-muted uppercase">
                <th class="w-8 py-1.5"></th>
                <th class="py-1.5 pr-6 font-semibold">Keer</th>
                <th class="py-1.5 font-semibold">Waarde</th>
            </tr>
        </thead>
        <tbody>
            <template x-for="(row, i) in rows" :key="row.multiple">
                <tr x-show="visible(i)" class="border-b border-line/60" :class="showSelection && row.selected ? 'bg-history-soft' : ''">
                    <td class="py-1.5 text-history" x-text="showSelection && row.selected ? '✓' : ''"></td>
                    <td class="py-1.5 pr-6" :class="showSelection && row.selected ? 'font-semibold text-ink' : 'text-ink-soft'" x-text="row.multiple"></td>
                    <td class="py-1.5" :class="showSelection && row.selected ? 'font-semibold text-ink' : 'text-ink-soft'" x-text="format(row.value)"></td>
                </tr>
            </template>
        </tbody>
    </table>

    <p class="mt-4 min-h-10 text-sm text-ink-soft" aria-live="polite" x-text="explanation"></p>
    <div class="mt-3 flex gap-2">
        <button type="button" class="btn btn-primary" @click="next()" :disabled="step >= totalSteps">Volgende stap</button>
        <button type="button" class="btn btn-ghost" @click="reset()" x-show="step > 0">Opnieuw</button>
    </div>
</x-widget>
