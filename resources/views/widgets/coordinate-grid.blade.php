@php
    $config = [
        'size' => (int) ($params['size'] ?? 6),
        'points' => $params['points'] ?? '',
        'connect' => in_array(strtolower((string) ($params['connect'] ?? '')), ['true', 'ja'], true),
    ];
@endphp

<x-widget title="Het assenstelsel" component="coordinateGrid" :config="$config">
    <div class="grid gap-6 sm:grid-cols-[minmax(0,22rem)_minmax(0,1fr)]">
        <svg x-ref="svg" :view-box.camel="`0 0 ${W} ${H}`" class="w-full cursor-crosshair rounded-lg border border-line" role="img" aria-label="Assenstelsel; klik om een punt te plaatsen" @click="place($event)" x-html="svg"></svg>
        <div>
            <p class="text-sm text-muted">Klik op een roosterpunt om een punt te plaatsen; klik nog eens om het weg te halen.</p>
            <ul class="mt-3 space-y-1 text-sm">
                <template x-for="(p, i) in points" :key="i + '-' + p.x + '-' + p.y">
                    <li><strong class="text-ink" x-text="String.fromCharCode(65 + i)"></strong> = <span class="tabular-nums text-ink" x-text="`(${p.x}; ${p.y})`"></span> <span class="text-muted" x-text="'— ' + quadrant(p)"></span></li>
                </template>
            </ul>
            <label class="mt-3 flex items-center gap-2 text-sm"><input type="checkbox" x-model="connect"> punten verbinden</label>
            <p class="mt-3 text-sm text-ink-soft" x-show="points.length === 2">
                Helling van A naar B: <strong class="tabular-nums text-accent" x-text="slope === null ? 'niet gedefinieerd (verticale lijn)' : fmt(slope, 3)"></strong>
                <span class="text-muted">(verschil in y gedeeld door verschil in x)</span>
            </p>
            <button type="button" class="btn btn-ghost -ml-3 mt-2" @click="points = []" x-show="points.length">Alles wissen</button>
        </div>
    </div>
</x-widget>
