<x-widget title="Hoeken meten" component="angle" :config="['value' => (int) ($params['value'] ?? 60)]">
    <div class="grid items-center gap-6 sm:grid-cols-[minmax(0,1fr)_14rem]">
        <svg x-ref="svg" viewBox="0 0 320 300" class="w-full max-w-sm cursor-pointer touch-none select-none" role="slider" tabindex="0"
             :aria-valuenow="value" aria-valuemin="0" aria-valuemax="360" aria-label="Hoek in graden"
             @mousedown="down($event)" @mousemove.window="move($event)" @mouseup.window="dragging = false"
             @touchstart.prevent="down($event)" @touchmove.prevent="move($event)" @touchend="dragging = false"
             @keydown.right.prevent="value = (value + 1) % 361" @keydown.left.prevent="value = Math.max(0, value - 1)"
             x-html="svg"></svg>
        <div>
            <p class="font-serif text-4xl font-semibold text-ink tabular-nums"><span x-text="value"></span>°</p>
            <p class="mt-1 text-ink-soft" x-text="kind"></p>
            <input type="range" min="0" max="360" class="mt-4 w-full" x-model.number="value" aria-label="Hoek">
            <p class="mt-3 text-xs leading-relaxed text-muted">Sleep de blauwe stip. Scherp &lt; 90° · recht = 90° · stomp tussen 90° en 180° · gestrekt = 180°.</p>
        </div>
    </div>
</x-widget>
