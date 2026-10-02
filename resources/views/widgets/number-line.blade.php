@php
    $config = [
        'min' => (int) ($params['min'] ?? 0),
        'max' => (int) ($params['max'] ?? 20),
        'value' => isset($params['value']) ? (int) $params['value'] : null,
    ];
@endphp

<x-widget title="De getallenlijn" component="numberLine" :config="$config">
    <p class="text-sm text-muted">Klik of sleep het punt. Met de pijltjestoetsen kan het ook.</p>

    <svg x-ref="svg" :view-box.camel="`0 0 ${width} 90`" class="mt-3 w-full cursor-pointer touch-none select-none"
         role="slider" tabindex="0" :aria-valuemin="min" :aria-valuemax="max" :aria-valuenow="value" aria-label="Punt op de getallenlijn"
         @mousedown="down($event)" @mousemove.window="move($event)" @mouseup.window="dragging = false"
         @touchstart.prevent="down($event)" @touchmove.prevent="move($event)" @touchend="dragging = false"
         @keydown="key($event)">
        <line :x1="pad - 12" :x2="width - pad + 12" y1="50" y2="50" stroke="#1f2933" stroke-width="1.5" />
        <path :d="`M ${width - pad + 12} 50 l -7 -4 v 8 z`" fill="#1f2933" />
        <g x-html="ticksSvg"></g>
        <line :x1="x(min)" :x2="x(value)" y1="50" y2="50" stroke="#3b5bdb" stroke-width="3" opacity=".35" />
        <circle :cx="x(value)" cy="50" r="9" fill="#3b5bdb" stroke="#fff" stroke-width="2" />
        <text :x="x(value)" y="26" text-anchor="middle" font-size="15" font-weight="600" fill="#1f2933" font-family="Inter, sans-serif" x-text="value"></text>
    </svg>

    <p class="mt-2 text-sm text-ink-soft">
        Het punt staat op <strong class="text-ink" x-text="value"></strong>.
        Dat getal is <span x-text="parity"></span>;
        het ligt <span x-text="value - min"></span> stappen rechts van <span x-text="min"></span>.
    </p>
</x-widget>
