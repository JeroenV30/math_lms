<x-widget title="Gemiddelde, mediaan en modus" component="stats" :config="['values' => $params['values'] ?? '4; 6; 6; 7; 9']">
    <div class="flex flex-wrap items-center gap-1.5" aria-label="Waarden">
        <template x-for="(v, i) in values" :key="i + '-' + v">
            <button type="button" class="badge border-line-strong text-ink hover:border-danger hover:text-danger" @click="remove(i)" :aria-label="`Verwijder ${v}`"><span x-text="fmt(v)"></span> ×</button>
        </template>
        <form class="flex items-center gap-1.5" @submit.prevent="add()">
            <input type="text" inputmode="decimal" class="num-input w-20" x-model="input" placeholder="waarde" aria-label="Nieuwe waarde">
            <button class="btn btn-secondary px-3 py-1">Toevoegen</button>
        </form>
    </div>

    <svg viewBox="0 -4 520 150" class="mt-4 w-full" role="img" aria-label="Stippendiagram van de waarden" x-html="svg"></svg>

    <dl class="mt-3 grid grid-cols-2 gap-3 text-sm sm:grid-cols-4">
        <div><dt class="text-history">Gemiddelde</dt><dd class="font-semibold text-ink tabular-nums" x-text="fmt(mean)"></dd></div>
        <div><dt class="text-challenge">Mediaan</dt><dd class="font-semibold text-ink tabular-nums" x-text="fmt(median)"></dd></div>
        <div><dt class="text-muted">Modus</dt><dd class="font-semibold text-ink tabular-nums" x-text="modes.length ? modes.map(fmt).join(' en ') : 'geen'"></dd></div>
        <div><dt class="text-muted">Spreidingsbreedte</dt><dd class="font-semibold text-ink tabular-nums" x-text="fmt(range)"></dd></div>
    </dl>
    <p class="mt-3 text-xs text-muted">Voeg eens een heel grote waarde toe (een uitschieter): het gemiddelde schuift flink op, de mediaan nauwelijks. Klik op een waarde om hem te verwijderen.</p>
</x-widget>
