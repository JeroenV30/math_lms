<x-widget title="Plaatswaarde: wat is elk cijfer waard?" component="placeValue" :config="['value' => (int) ($params['value'] ?? 4372)]">
    <div class="flex flex-wrap items-center gap-3">
        <label for="pv-{{ $id = uniqid() }}">Getal (0 – 9.999)</label>
        <input id="pv-{{ $id }}" type="number" min="0" max="9999" class="num-input" x-model.number="value" @change="normalize()">
    </div>

    <div class="mt-5 grid grid-cols-4 gap-2 sm:gap-3">
        <template x-for="place in places" :key="place.key">
            <div class="rounded-lg border border-line bg-mist/50 p-2 text-center sm:p-3">
                <p class="text-[0.68rem] font-semibold tracking-wide text-muted uppercase"><span class="sm:hidden" x-text="place.short"></span><span class="hidden sm:inline" x-text="place.label"></span></p>
                <p class="mt-1 font-serif text-3xl font-semibold text-ink tabular-nums" x-text="digit(place)"></p>
                <div class="mt-1 flex justify-center gap-1">
                    <button type="button" class="h-6 w-6 rounded border border-line bg-paper text-xs hover:border-ink" @click="change(place, -1)" :aria-label="place.label + ' min één'">−</button>
                    <button type="button" class="h-6 w-6 rounded border border-line bg-paper text-xs hover:border-ink" @click="change(place, 1)" :aria-label="place.label + ' plus één'">+</button>
                </div>
                {{-- Blokjes: kubus (1000), plak (100), staaf (10), blokje (1) --}}
                <div class="mt-3 flex min-h-10 flex-wrap content-start justify-center gap-1" aria-hidden="true">
                    <template x-for="i in range(digit(place))" :key="i">
                        <span class="block bg-accent/80"
                              :class="{
                                  'h-5 w-5 rounded-[3px] ring-2 ring-accent/30 ring-offset-1': place.value === 1000,
                                  'h-4 w-4 rounded-[2px] bg-accent/60': place.value === 100,
                                  'h-4 w-1 rounded-sm bg-accent/50': place.value === 10,
                                  'h-1.5 w-1.5 rounded-[1px] bg-accent/40': place.value === 1,
                              }"></span>
                    </template>
                </div>
            </div>
        </template>
    </div>

    <div class="mt-5 overflow-x-auto text-center text-ink" x-katex="decomposition" data-display></div>
    <p class="text-center text-sm text-muted" x-text="'= ' + expanded"></p>
</x-widget>
