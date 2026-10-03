<x-widget title="Zijdeverhoudingen bij een hoek" component="rightTriangle" :config="[
    'angle' => $params['angle'] ?? 30,
    'hypotenuse' => $params['hypotenuse'] ?? 10,
]">
    <div class="flex flex-wrap gap-x-6 gap-y-3">
        <label class="flex items-center gap-2">Hoek θ
            <input type="range" min="1" max="89" step="1" x-model.number="angle" @input="normalize()">
            <span class="w-12 tabular-nums" x-text="format(angle) + '°'"></span>
        </label>
        <label class="flex items-center gap-2">Schuine zijde S
            <input type="range" min="1" max="20" step="0.5" x-model.number="hypotenuse" @input="normalize()">
            <span class="w-12 tabular-nums" x-text="format(hypotenuse)"></span>
        </label>
    </div>

    <svg :view-box.camel="'0 0 550 470'" class="mx-auto mt-4 w-full max-w-lg" style="max-height: 25rem"
        role="img" :aria-label="`Rechthoekige driehoek met hoek ${format(angle)} graden en schuine zijde ${format(hypotenuse)}`"
        x-html="svg"></svg>

    <dl class="mt-4 grid gap-3 text-center tabular-nums sm:grid-cols-3">
        <div><dt class="text-sm text-muted">sin θ = O / S</dt><dd class="font-semibold text-ink" x-text="format(sine)"></dd></div>
        <div><dt class="text-sm text-muted">cos θ = A / S</dt><dd class="font-semibold text-ink" x-text="format(cosine)"></dd></div>
        <div><dt class="text-sm text-muted">tan θ = O / A</dt><dd class="font-semibold text-ink" x-text="format(tangent)"></dd></div>
    </dl>
</x-widget>
