@php
    $config = collect($params)->only(['mu', 'sigma', 'lower', 'upper', 'xmin', 'xmax'])->all();
@endphp

<x-widget title="De normale verdeling" component="normalDistribution" :config="$config">
    <div class="flex flex-wrap gap-x-6 gap-y-2">
        <label class="flex items-center gap-2"><span class="font-serif italic text-ink">μ</span>
            <input type="range" :min="xmin" :max="xmax" :step="(xmax - xmin) / 200" x-model.number="mu">
            <span class="w-14 tabular-nums font-semibold text-history" x-text="fmt(mu)"></span></label>
        <label class="flex items-center gap-2"><span class="font-serif italic text-ink">σ</span>
            <input type="range" :min="(xmax - xmin) / 80" :max="(xmax - xmin) / 4" :step="(xmax - xmin) / 400" x-model.number="sigma">
            <span class="w-14 tabular-nums font-semibold text-accent" x-text="fmt(sigma)"></span></label>
    </div>

    <svg :view-box.camel="`0 0 ${W} ${H}`" class="mt-4 w-full" role="img" :aria-label="`Normale verdeling met gemiddelde ${fmt(mu)} en standaardafwijking ${fmt(sigma)}`" x-html="svg"></svg>

    <div class="mt-3 flex flex-wrap items-center gap-x-6 gap-y-2">
        <label class="flex items-center gap-2 text-sm">van <input type="range" :min="xmin" :max="xmax" :step="(xmax - xmin) / 200" x-model.number="lower"> <span class="w-12 tabular-nums" x-text="fmt(lower)"></span></label>
        <label class="flex items-center gap-2 text-sm">tot <input type="range" :min="xmin" :max="xmax" :step="(xmax - xmin) / 200" x-model.number="upper"> <span class="w-12 tabular-nums" x-text="fmt(upper)"></span></label>
    </div>
    <p class="mt-2 text-sm text-ink-soft">
        z-scores: <span class="tabular-nums text-ink" x-text="fmt(zLower)"></span> tot <span class="tabular-nums text-ink" x-text="fmt(zUpper)"></span> ·
        kans op een waarde in dit gebied: <strong class="tabular-nums text-accent" x-text="fmt(probability * 100, 1) + '%'"></strong>
    </p>
    <p class="mt-1 text-xs text-muted">Vuistregel: binnen μ ± σ ligt ongeveer 68%, binnen μ ± 2σ ongeveer 95% en binnen μ ± 3σ ongeveer 99,7%.</p>
</x-widget>
