<x-widget title="Steekproeven trekken" component="sampling" :config="collect($params)->only(['n', 'seed'])->all()">
    <p class="text-sm text-muted">De populatie: 2.000 reistijden (scheef verdeeld) met gemiddelde μ ≈ <span class="tabular-nums" x-text="fmt(mu, 1)"></span> en σ ≈ <span class="tabular-nums" x-text="fmt(sigma, 1)"></span> minuten. Elk staafje telt hoe vaak een steekproefgemiddelde in dat vakje viel.</p>

    <div class="mt-3 flex flex-wrap items-center gap-x-5 gap-y-2">
        <label class="flex items-center gap-2 text-sm">steekproefgrootte n
            <select class="num-input w-20" x-model.number="n" @change="reset()">
                <template x-for="v in [2, 5, 10, 30, 100]" :key="v"><option :value="v" x-text="v" :selected="v === n"></option></template>
            </select>
        </label>
        <button type="button" class="btn btn-primary px-3 py-1" @click="draw(1)">1 steekproef</button>
        <button type="button" class="btn btn-secondary px-3 py-1" @click="draw(100)">100 steekproeven</button>
        <button type="button" class="btn btn-ghost px-3 py-1" @click="reset()" x-show="means.length">Opnieuw</button>
    </div>

    <svg :view-box.camel="`-12 0 ${W + 24} ${H}`" class="mt-4 w-full" role="img" aria-label="Verdeling van steekproefgemiddelden" x-html="svg"></svg>

    <dl class="mt-3 grid grid-cols-2 gap-3 text-sm sm:grid-cols-4">
        <div><dt class="text-muted">steekproeven</dt><dd class="font-semibold tabular-nums text-ink" x-text="means.length"></dd></div>
        <div><dt class="text-muted">laatste gemiddelde</dt><dd class="font-semibold tabular-nums text-ink" x-text="last ? fmt(last.mean, 1) : '—'"></dd></div>
        <div><dt class="text-muted">spreiding gemiddelden</dt><dd class="font-semibold tabular-nums text-accent" x-text="spread === null ? '—' : fmt(spread, 2)"></dd></div>
        <div><dt class="text-muted">theorie σ/√n</dt><dd class="font-semibold tabular-nums text-history" x-text="fmt(se, 2)"></dd></div>
    </dl>
    <p class="mt-2 text-sm text-ink-soft" x-show="last">
        95%-betrouwbaarheidsinterval van de laatste steekproef: [<span class="tabular-nums" x-text="last ? fmt(last.low, 1) : ''"></span>; <span class="tabular-nums" x-text="last ? fmt(last.high, 1) : ''"></span>]
        — <strong :class="covered ? 'text-success' : 'text-danger'" x-text="covered ? 'bevat μ' : 'mist μ'"></strong>
    </p>
    <p class="mt-1 text-xs text-muted">Grotere n: de gemiddelden liggen dichter bij μ en de vorm wordt klokvormig, ook al is de populatie scheef (centrale limietstelling). Bij n = 2 en n = 5 is de 1,96-vuistregel nog onbetrouwbaar.</p>
</x-widget>
