<x-widget title="Turven: tellen in groepjes van vijf" component="tally" :config="['value' => (int) ($params['value'] ?? 8)]">
    <div class="flex flex-wrap items-center gap-3">
        <button type="button" class="btn btn-secondary px-3" @click="change(-1)" aria-label="Eén minder">−</button>
        <label class="sr-only" for="tally-{{ $id = uniqid() }}">Aantal</label>
        <input id="tally-{{ $id }}" type="number" min="0" max="100" class="num-input" x-model.number="value" @change="normalize()">
        <button type="button" class="btn btn-secondary px-3" @click="change(1)" aria-label="Eén meer">+</button>
    </div>

    <div class="mt-5 flex min-h-16 flex-wrap items-end gap-x-5 gap-y-3" role="img" :aria-label="value + ' turfstreepjes'">
        <template x-for="(count, g) in groups" :key="g">
            <svg :width="count === 5 ? 46 : count * 9 + 4" height="48" :view-box.camel="`0 0 ${count === 5 ? 46 : count * 9 + 4} 48`" class="overflow-visible" x-html="groupSvg(count)"></svg>
        </template>
    </div>

    <p class="mt-4 text-sm text-ink-soft" x-text="description"></p>
</x-widget>
