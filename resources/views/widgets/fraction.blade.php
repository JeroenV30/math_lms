@php
    $config = [
        'numerator' => (int) ($params['numerator'] ?? $params['n'] ?? 3),
        'denominator' => (int) ($params['denominator'] ?? $params['d'] ?? 4),
        'shape' => $params['shape'] ?? 'bar',
        'compare' => $params['compare'] ?? null,
    ];
@endphp

<x-widget title="Breuken in beeld" component="fraction" :config="$config">
    <div class="flex flex-wrap items-center gap-x-6 gap-y-3">
        <label class="flex items-center gap-2">Teller <input type="number" min="0" max="72" class="num-input w-20" x-model.number="n" @change="normalize()"></label>
        <label class="flex items-center gap-2">Noemer <input type="number" min="1" max="24" class="num-input w-20" x-model.number="d" @change="normalize()"></label>
        <div class="flex gap-1" role="group" aria-label="Vorm">
            <button type="button" class="btn px-3 py-1" :class="shape === 'bar' ? 'btn-primary' : 'btn-secondary'" @click="shape = 'bar'">Balk</button>
            <button type="button" class="btn px-3 py-1" :class="shape === 'circle' ? 'btn-primary' : 'btn-secondary'" @click="shape = 'circle'">Cirkel</button>
        </div>
        <label class="flex items-center gap-2"><input type="checkbox" x-model="compareOn"> vergelijk</label>
    </div>

    <div class="mt-5 flex flex-wrap items-center gap-4">
        <span class="w-14 shrink-0 text-center text-ink" x-katex="`\\frac{${n}}{${d}}`" data-display></span>
        <svg :view-box.camel="`-2 -2 ${width + 4} ${height + 4}`" class="w-full max-w-xl" :style="`max-height: ${shape === 'circle' ? 9 : height / 5 + 2}rem`" role="img" :aria-label="`${n} van de ${d} delen gekleurd`" x-html="svg"></svg>
    </div>

    <template x-if="compareOn">
        <div>
            <div class="mt-3 flex flex-wrap items-center gap-4">
                <span class="w-14 shrink-0 text-center text-ink" x-katex="`\\frac{${n2}}{${d2}}`" data-display></span>
                <svg :view-box.camel="`-2 -2 ${width2 + 4} ${height2 + 4}`" class="w-full max-w-xl" :style="`max-height: ${shape === 'circle' ? 9 : height2 / 5 + 2}rem`" role="img" :aria-label="`${n2} van de ${d2} delen gekleurd`" x-html="svg2"></svg>
            </div>
            <div class="mt-3 flex flex-wrap items-center gap-x-6 gap-y-2">
                <label class="flex items-center gap-2">Teller <input type="number" min="0" max="72" class="num-input w-20" x-model.number="n2" @change="normalize()"></label>
                <label class="flex items-center gap-2">Noemer <input type="number" min="1" max="24" class="num-input w-20" x-model.number="d2" @change="normalize()"></label>
            </div>
            <div class="mt-3 text-ink" x-katex="comparison"></div>
            <p class="text-sm text-muted" x-text="comparisonText"></p>
        </div>
    </template>

    <dl class="mt-5 grid grid-cols-2 gap-3 text-sm sm:grid-cols-4">
        <div><dt class="text-muted">Vereenvoudigd</dt><dd class="font-semibold text-ink tabular-nums" x-text="isSimplified ? 'al zo eenvoudig mogelijk' : simplified"></dd></div>
        <div x-show="mixed"><dt class="text-muted">Gemengd getal</dt><dd class="font-semibold text-ink tabular-nums" x-text="mixed"></dd></div>
        <div><dt class="text-muted">Kommagetal</dt><dd class="font-semibold text-ink tabular-nums" x-text="decimal"></dd></div>
        <div><dt class="text-muted">Procent</dt><dd class="font-semibold text-ink tabular-nums" x-text="percent + '%'"></dd></div>
    </dl>
</x-widget>
