@props(['title', 'component', 'config' => []])

{{-- Gedeeld kader voor interactieve visualisaties (Alpine-component uit resources/js/visualisations). --}}
<figure {{ $attributes->class('widget') }} x-data="{{ $component }}(@js($config))">
    <header class="widget-head">
        <span class="widget-title">{{ $title }}</span>
        <span class="widget-tag">Interactief</span>
    </header>
    <div class="widget-body">
        {{ $slot }}
    </div>
</figure>
