<x-widget title="De zeef van Eratosthenes" component="sieve" :config="['max' => (int) ($params['max'] ?? 100)]">
    <div class="grid grid-cols-10 gap-1 text-center text-sm tabular-nums" role="grid" aria-label="Getallen 1 tot en met {{ (int) ($params['max'] ?? 100) }}">
        <template x-for="n in numbers" :key="n">
            <span role="gridcell" class="rounded py-1.5 transition-colors duration-200"
                  :class="{
                      'text-faint': state(n) === 'one',
                      'bg-mist text-ink-soft': state(n) === 'open',
                      'bg-accent font-semibold text-white': state(n) === 'current',
                      'bg-accent-soft font-semibold text-accent': state(n) === 'prime',
                      'bg-history-soft text-history line-through': state(n) === 'crossing',
                      'text-faint line-through': state(n) === 'crossed',
                  }"
                  x-text="n"></span>
        </template>
    </div>

    <p class="mt-4 min-h-10 text-sm text-ink-soft" aria-live="polite" x-text="message"></p>
    <div class="mt-2 flex gap-2">
        <button type="button" class="btn btn-primary" @click="next()" :disabled="finished">Volgende stap</button>
        <button type="button" class="btn btn-ghost" @click="reset()">Opnieuw</button>
    </div>
    <p class="mt-3 text-xs text-muted">Je hoeft alleen veelvouden van priemgetallen tot de wortel van het maximum weg te strepen: elk samengesteld getal heeft een kleine priemfactor.</p>
</x-widget>
