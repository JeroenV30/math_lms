<x-widget title="De stelling van Pythagoras" component="pythagoras" :config="['a' => (int) ($params['a'] ?? 3), 'b' => (int) ($params['b'] ?? 4)]">
    <div class="flex flex-wrap gap-x-6 gap-y-2">
        <label class="flex items-center gap-2">a <input type="range" min="1" max="12" x-model.number="a"> <span class="w-6 tabular-nums font-semibold text-accent" x-text="a"></span></label>
        <label class="flex items-center gap-2">b <input type="range" min="1" max="12" x-model.number="b"> <span class="w-6 tabular-nums font-semibold text-history" x-text="b"></span></label>
    </div>

    <svg :view-box.camel="figure.box" class="mx-auto mt-4 w-full max-w-md" style="max-height: 24rem" role="img" :aria-label="`Rechthoekige driehoek met a = ${a} en b = ${b}`" x-html="figure.svg"></svg>

    <div class="mt-3 overflow-x-auto text-ink" x-katex="formula" data-display></div>
    <p class="text-center text-sm text-muted">De oppervlakte van het grote vierkant is precies de som van de twee kleinere<span x-show="isWhole"> — en hier is c zelfs een geheel getal</span>.</p>
</x-widget>
