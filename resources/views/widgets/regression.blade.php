@php
    $config = collect($params)->only(['points', 'xmax', 'ymax'])->all();
@endphp

<x-widget title="Correlatie en de regressielijn" component="regression" :config="$config">
    <div class="grid gap-6 sm:grid-cols-[minmax(0,1fr)_14rem]">
        <svg x-ref="svg" :view-box.camel="`0 0 ${W} ${H}`" class="w-full touch-none select-none rounded-lg border border-line" role="img" aria-label="Spreidingsdiagram; sleep de punten of klik om een punt toe te voegen"
             @mousedown.prevent="down($event)" @mousemove.window="move($event)" @mouseup.window="up()"
             @touchstart.prevent="down($event)" @touchmove.prevent="move($event)" @touchend="up()" x-html="svg"></svg>
        <div class="text-sm">
            <p class="text-muted">Sleep een punt, of klik op een lege plek om er een toe te voegen.</p>
            <p class="mt-3 font-serif text-lg text-ink" x-text="equation"></p>
            <dl class="mt-3 space-y-1">
                <div class="flex justify-between"><dt class="text-muted">aantal punten</dt><dd class="tabular-nums text-ink" x-text="stats.n"></dd></div>
                <div class="flex justify-between"><dt class="text-muted">correlatie r</dt><dd class="tabular-nums font-semibold text-accent" x-text="fmt(stats.r, 3)"></dd></div>
                <div class="flex justify-between"><dt class="text-muted">R²</dt><dd class="tabular-nums font-semibold text-history" x-text="fmt(stats.r2, 3)"></dd></div>
            </dl>
            <p class="mt-3 text-xs leading-relaxed text-muted">De rode stippellijnen zijn de residuen. De regressielijn maakt de som van hun kwadraten zo klein mogelijk en gaat altijd door het gemiddelde punt (open rondje).</p>
            <button type="button" class="btn btn-ghost -ml-3 mt-2" @click="removeLast()" x-show="points.length > 2">Laatste punt weg</button>
        </div>
    </div>
</x-widget>
