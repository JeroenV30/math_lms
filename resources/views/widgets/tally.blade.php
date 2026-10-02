<x-widget title="Turven: tellen in groepjes van vijf" component="tally" :config="['value' => (int) ($params['value'] ?? 8)]">
    <div class="flex flex-wrap items-center gap-3">
        <button type="button" class="btn btn-secondary px-3" @click="change(-1)" aria-label="Eén minder">−</button>
        <label class="sr-only" for="tally-{{ $id = uniqid() }}">Aantal</label>
        <input id="tally-{{ $id }}" type="number" min="0" max="100" class="num-input" x-model.number="value" @change="normalize()">
        <button type="button" class="btn btn-secondary px-3" @click="change(1)" aria-label="Eén meer">+</button>
    </div>

    <div class="mt-5 flex min-h-16 flex-wrap items-end gap-x-5 gap-y-3" role="img" :aria-label="value + ' turfstreepjes'">
        <template x-for="(count, g) in groups" :key="g">
            <svg :width="count === 5 ? 46 : count * 9 + 4" height="48" viewBox="0 0 46 48" class="overflow-visible">
                <template x-for="i in Math.min(count, 4)" :key="i">
                    <line :x1="i * 9" :x2="i * 9" y1="6" y2="42" stroke="#1f2933" stroke-width="2.5" stroke-linecap="round" />
                </template>
                <line x-show="count === 5" x1="2" y1="34" x2="44" y2="12" stroke="#3b5bdb" stroke-width="2.5" stroke-linecap="round" />
            </svg>
        </template>
    </div>

    <p class="mt-4 text-sm text-ink-soft" x-text="description"></p>
</x-widget>
