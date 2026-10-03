@php
    // "true"/"false" uit het directief omzetten naar echte booleans.
    $config = collect($params)->map(fn ($v) => match (strtolower((string) $v)) {
        'true', 'ja' => true,
        'false', 'nee' => false,
        default => $v,
    })->all();
    $title = $params['title'] ?? 'Grafiek';
@endphp

<x-widget :title="$title" component="functionPlot" :config="$config">
    <p class="text-sm text-danger" x-show="error" x-text="error"></p>

    <div class="flex flex-wrap gap-x-6 gap-y-2" x-show="params.length">
        <template x-for="p in params" :key="p.name">
            <label class="flex items-center gap-2">
                <span class="font-serif text-ink italic" x-text="p.name"></span>
                <input type="range" :min="p.min" :max="p.max" :step="p.step" x-model.number="p.value">
                <span class="w-12 tabular-nums font-semibold text-accent" x-text="fmt(p.value)"></span>
            </label>
        </template>
    </div>

    <svg :view-box.camel="`0 0 ${W} ${H}`" class="mt-4 w-full rounded-lg border border-line" role="img" :aria-label="formula" x-html="svg"></svg>

    <p class="mt-3 font-serif text-lg text-ink" x-text="formula"></p>
    <p class="text-sm text-history" x-show="fn2Text" x-text="'tweede grafiek: y = ' + fn2Text"></p>

    <template x-if="showTangent">
        <div class="mt-3">
            <label class="flex items-center gap-2"><span class="text-sm">Raakpunt bij x =</span>
                <input type="range" :min="view.xmin" :max="view.xmax" step="0.1" x-model.number="x0">
                <span class="w-12 tabular-nums font-semibold text-challenge" x-text="fmt(x0)"></span></label>
            <p class="mt-1 text-sm text-ink-soft">Helling van de raaklijn: <strong class="text-challenge tabular-nums" x-text="fmt(slope, 3)"></strong> — de afgeleide in dit punt.</p>
        </div>
    </template>

    <template x-if="showArea">
        <div class="mt-3 flex flex-wrap items-center gap-x-6 gap-y-2">
            <label class="flex items-center gap-2"><span class="text-sm">van x =</span><input type="range" :min="view.xmin" :max="view.xmax" step="0.1" x-model.number="lower"><span class="w-10 tabular-nums" x-text="fmt(lower)"></span></label>
            <label class="flex items-center gap-2"><span class="text-sm">tot x =</span><input type="range" :min="view.xmin" :max="view.xmax" step="0.1" x-model.number="upper"><span class="w-10 tabular-nums" x-text="fmt(upper)"></span></label>
            <p class="text-sm text-ink-soft">Oppervlakte (met teken): <strong class="text-accent tabular-nums" x-text="fmt(integral, 3)"></strong></p>
        </div>
    </template>

    <template x-if="showRoots">
        <p class="mt-3 text-sm text-ink-soft">Nulpunten: <strong class="text-danger tabular-nums" x-text="roots.length ? roots.map((r) => fmt(r)).join(' en ') : 'geen in dit venster'"></strong></p>
    </template>
</x-widget>
