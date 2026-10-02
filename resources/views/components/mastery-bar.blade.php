@props(['label', 'score' => null, 'href' => null])

@php
    $tone = match (true) {
        $score === null => 'bg-line-strong',
        $score >= 85 => 'bg-accent',
        $score >= 70 => 'bg-ink-soft',
        $score >= 50 => 'bg-faint',
        default => 'bg-danger/70',
    };
@endphp

<div {{ $attributes->class('grid grid-cols-[minmax(0,1fr)_auto] items-center gap-x-4 gap-y-1.5') }}>
    @if ($href)
        <a href="{{ $href }}" class="truncate text-sm text-ink hover:text-accent">{{ $label }}</a>
    @else
        <span class="truncate text-sm text-ink">{{ $label }}</span>
    @endif
    <span class="text-sm text-muted tabular-nums">{{ $score === null ? '—' : $score.'%' }}</span>
    <div class="progress-track col-span-2 h-1.5">
        <div class="h-full rounded-full {{ $tone }}" style="width: {{ $score ?? 0 }}%"></div>
    </div>
</div>
