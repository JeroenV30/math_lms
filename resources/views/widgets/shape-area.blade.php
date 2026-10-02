<x-widget title="Omtrek en oppervlakte" component="shapeArea" :config="['shape' => $params['shape'] ?? 'rectangle']">
    <div class="flex flex-wrap gap-1" role="group" aria-label="Figuur">
        @foreach (['rectangle' => 'Rechthoek', 'triangle' => 'Driehoek', 'parallelogram' => 'Parallellogram', 'circle' => 'Cirkel'] as $key => $label)
            <button type="button" class="btn px-3 py-1" :class="shape === '{{ $key }}' ? 'btn-primary' : 'btn-secondary'" @click="shape = '{{ $key }}'; normalize()">{{ $label }}</button>
        @endforeach
    </div>

    <div class="mt-4 flex flex-wrap items-center gap-x-6 gap-y-2">
        <template x-if="shape !== 'circle'">
            <div class="flex flex-wrap gap-x-6 gap-y-2">
                <label class="flex items-center gap-2"><span x-text="shape === 'rectangle' ? 'Lengte' : 'Basis'"></span> <input type="range" min="1" :max="maxA" x-model.number="a"> <span class="w-6 tabular-nums text-ink" x-text="a"></span></label>
                <label class="flex items-center gap-2"><span x-text="shape === 'rectangle' ? 'Breedte' : 'Hoogte'"></span> <input type="range" min="1" max="8" x-model.number="b"> <span class="w-6 tabular-nums text-ink" x-text="b"></span></label>
            </div>
        </template>
        <template x-if="shape === 'circle'">
            <label class="flex items-center gap-2">Straal <input type="range" min="1" max="4" x-model.number="r"> <span class="w-6 tabular-nums text-ink" x-text="r"></span></label>
        </template>
    </div>

    <svg viewBox="10 10 380 260" class="mt-4 w-full max-w-lg" role="img" aria-label="Figuur op een rooster van vakjes van 1 bij 1" x-html="svg"></svg>

    <div class="mt-3 text-ink" x-katex="formula"></div>
    <p class="mt-1 text-sm text-ink-soft">
        Oppervlakte: <strong class="text-ink tabular-nums" x-text="fmt(area)"></strong> vakjes
        <template x-if="perimeter !== null"><span> · Omtrek: <strong class="text-ink tabular-nums" x-text="fmt(perimeter)"></strong></span></template>
    </p>
    <p class="mt-2 text-xs text-muted" x-show="shape === 'triangle' || shape === 'parallelogram'">De stippellijn is de hoogte: altijd loodrecht op de basis.</p>
</x-widget>
