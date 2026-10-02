<x-widget title="Babylonisch spijkerschrift (zestigtallig)" component="babylonian" :config="['value' => (int) ($params['value'] ?? 75)]">
    <div class="flex flex-wrap items-center gap-3">
        <label for="bab-{{ $id = uniqid() }}">Getal</label>
        <button type="button" class="btn btn-secondary px-3" @click="change(-1)" aria-label="Eén minder">−</button>
        <input id="bab-{{ $id }}" type="number" min="1" max="215999" class="num-input" x-model.number="value" @change="normalize()">
        <button type="button" class="btn btn-secondary px-3" @click="change(1)" aria-label="Eén meer">+</button>
    </div>

    <div class="mt-6 flex flex-wrap items-end gap-4 rounded-lg bg-history-soft px-4 py-5" role="img" :aria-label="'Spijkerschrift voor ' + value + ': ' + notation">
        <template x-for="(digit, d) in digits" :key="d">
            <div class="flex flex-col items-center gap-2">
                {{-- Lege plaats (gestippeld): de vroege Babylonische schrijvers lieten hier alleen ruimte open --}}
                <svg :width="groupWidth(digit)" height="66" :view-box.camel="`-4 -4 ${groupWidth(digit) + 8} 70`" x-html="digitSvg(digit)"></svg>
                <span class="text-xs font-semibold text-history tabular-nums" x-text="digit"></span>
            </div>
        </template>
    </div>

    <p class="mt-3 text-sm text-ink-soft">Zestigtallige notatie: <strong class="tabular-nums text-ink" x-text="notation"></strong></p>
    <div class="mt-1 overflow-x-auto text-sm" x-katex="explanation"></div>
    <p class="mt-3 text-xs text-muted">Een winkelhaak telt 10, een spijker telt 1. Elke plaats naar links is 60 keer zoveel waard. Een gestippeld vak is een lege plaats.</p>
</x-widget>
