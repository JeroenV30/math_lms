<x-widget title="Dobbelstenen: de wet van de grote aantallen" component="dice" :config="collect($params)->only(['dice', 'seed'])->all()">
    <div class="flex flex-wrap items-center gap-2">
        <span class="text-sm text-muted"><span x-text="count"></span> dobbelste<span x-text="count === 1 ? 'en' : 'nen'"></span>, som van de ogen</span>
        <button type="button" class="btn btn-primary px-3 py-1" @click="roll(1)">Gooi 1×</button>
        <button type="button" class="btn btn-secondary px-3 py-1" @click="roll(10)">10×</button>
        <button type="button" class="btn btn-secondary px-3 py-1" @click="roll(100)">100×</button>
        <button type="button" class="btn btn-secondary px-3 py-1" @click="roll(1000)">1000×</button>
        <button type="button" class="btn btn-ghost px-3 py-1" @click="reset()" x-show="throws">Opnieuw</button>
    </div>

    <p class="mt-3 text-sm text-ink-soft">Worpen: <strong class="tabular-nums text-ink" x-text="throws"></strong>
        <span x-show="last.length"> · laatste worp: <span class="tabular-nums text-ink" x-text="last.join(' + ')"></span></span></p>

    <svg viewBox="0 0 520 200" class="mt-3 w-full" role="img" aria-label="Relatieve frequenties naast de theoretische kansen" x-html="svg"></svg>
    <p class="mt-2 text-xs text-muted"><span class="text-accent">Blauwe staven</span>: relatieve frequentie. <span class="text-history">Bruine streepjes</span>: theoretische kans. Hoe vaker je gooit, hoe beter ze overeenkomen — maar elke afzonderlijke worp blijft onvoorspelbaar.</p>
</x-widget>
