<x-widget title="Het honderdveld: procent betekent 'per honderd'" component="percentGrid" :config="['value' => (int) ($params['value'] ?? 35)]">
    <div class="grid items-center gap-6 sm:grid-cols-[16rem_minmax(0,1fr)]">
        <svg viewBox="-1 -1 262 262" class="w-full max-w-64" role="img" :aria-label="`${value} van de 100 vakjes gekleurd`" x-html="svg"></svg>
        <div>
            <label class="block">Percentage: <strong class="text-ink tabular-nums" x-text="value + '%'"></strong></label>
            <input type="range" min="0" max="100" class="mt-2 w-full" x-model.number="value" aria-label="Percentage">
            <div class="mt-4 text-ink" x-katex="`${value}\\% = ` + fraction" data-display></div>
            <p class="mt-2 text-sm text-muted"><span x-text="value"></span> van de 100 vakjes zijn gekleurd. Eén vakje is 1%.</p>
        </div>
    </div>
</x-widget>
