<x-widget title="Eenheidscirkel" component="unitCircle" :config="['angle' => $params['angle'] ?? 30]">
    <label class="flex flex-wrap items-center gap-3">
        Hoek θ in graden
        <input type="range" min="-360" max="720" step="5" x-model.number="angle" @input="normalize()">
        <strong class="tabular-nums" x-text="`${fmt(angle)}°`"></strong>
    </label>
    <p class="mt-2 text-sm text-muted">Positieve hoeken draaien tegen de klok in vanaf de positieve x-as; negatieve hoeken met de klok mee. Hele omwentelingen geven hetzelfde punt.</p>
    <svg :view-box.camel="'0 0 450 430'" class="mx-auto mt-3 w-full max-w-lg" role="img" aria-label="Eenheidscirkel met punt en projecties op de assen" x-html="svg"></svg>
    <dl class="grid grid-cols-2 gap-3 text-sm sm:grid-cols-4">
        <div><dt>Radialen</dt><dd class="font-semibold" x-text="`${fmt(angle / 180)}π ≈ ${fmt(radians)}`"></dd></div>
        <div><dt>cos θ (x)</dt><dd class="font-semibold" x-text="fmt(cosine)"></dd></div>
        <div><dt>sin θ (y)</dt><dd class="font-semibold" x-text="fmt(sine)"></dd></div>
        <div><dt>tan θ</dt><dd class="font-semibold" x-text="fmt(tangent)"></dd></div>
    </dl>
</x-widget>
