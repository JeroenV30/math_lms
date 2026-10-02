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
                <svg :width="groupWidth(digit)" height="66" :viewBox="`-4 -4 ${groupWidth(digit) + 8} 70`">
                    {{-- Lege plaats: de vroege Babylonische schrijvers lieten hier alleen ruimte open --}}
                    <rect x-show="digit === 0" x="2" y="8" :width="groupWidth(digit) - 4" height="44" rx="4" fill="none" stroke="#c9b48f" stroke-dasharray="4 3" />
                    {{-- Winkelhaak = 10 --}}
                    <template x-for="t in tens(digit)" :key="'t' + t">
                        <path :transform="`translate(${t * 22} ${t % 2 === 0 ? 6 : 26})`" d="M18 2 L2 12 L18 22 L12 12 Z" fill="#8a5a24" />
                    </template>
                    {{-- Spijker = 1 --}}
                    <template x-for="u in units(digit)" :key="'u' + u">
                        <path :transform="`translate(${unitPos(u, digit).x} ${unitPos(u, digit).y})`" d="M0 0 H12 L7 7 V20 H5 V7 Z" fill="#8a5a24" />
                    </template>
                </svg>
                <span class="text-xs font-semibold text-history tabular-nums" x-text="digit"></span>
            </div>
        </template>
    </div>

    <p class="mt-3 text-sm text-ink-soft">Zestigtallige notatie: <strong class="tabular-nums text-ink" x-text="notation"></strong></p>
    <div class="mt-1 overflow-x-auto text-sm" x-katex="explanation"></div>
    <p class="mt-3 text-xs text-muted">Een winkelhaak telt 10, een spijker telt 1. Elke plaats naar links is 60 keer zoveel waard. Een gestippeld vak is een lege plaats.</p>
</x-widget>
