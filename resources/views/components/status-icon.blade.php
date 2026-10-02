@props(['status' => 'not_started', 'planned' => false])

@php
    $key = $planned ? 'planned' : $status;
    [$symbol, $label] = match ($key) {
        'completed' => ['✓', 'Afgerond'],
        'mastered' => ['★', 'Beheerst'],
        'started' => ['●', 'Bezig'],
        'planned' => ['', 'In voorbereiding'],
        default => ['○', 'Niet gestart'],
    };
@endphp

<span {{ $attributes->class(['status-dot', 'status-'.$key]) }} title="{{ $label }}">
    {{-- De lege ring zelf is ○; bezig krijgt een stip, afgerond ✓ en beheerst ★. --}}
    <span aria-hidden="true" @class(['text-[0.6rem]' => $key === 'started'])>{{ in_array($key, ['not_started', 'planned'], true) ? '' : $symbol }}</span>
    <span class="sr-only">{{ $label }}</span>
</span>
