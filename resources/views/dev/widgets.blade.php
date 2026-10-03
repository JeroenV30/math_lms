@extends('layouts.app', ['title' => 'Widgetgalerij'])

@php
    // Voorbeeld-directieven; zie docs/CONTENT_GUIDE.md §6 voor alle parameters.
    $examples = [
        'tally' => ['value' => 13],
        'number-line' => ['min' => -10, 'max' => 10, 'value' => -3],
        'place-value' => ['value' => 4372],
        'babylonian' => ['value' => 3725],
        'roman' => ['value' => 1994],
        'column-arithmetic' => ['a' => 503, 'b' => 278, 'op' => '-'],
        'area-model' => ['a' => 37, 'b' => 14],
        'egyptian-multiplication' => ['a' => 13, 'b' => 24],
        'sharing' => ['total' => 17, 'groups' => 5],
        'sieve' => ['max' => 100],
        'unit-ladder' => ['quantity' => 'length'],
        'fraction' => ['numerator' => 3, 'denominator' => 4, 'compare' => '6/8'],
        'percent-grid' => ['value' => 35],
        'ratio-table' => ['a' => 3, 'b' => 12, 'labelA' => 'broden', 'labelB' => 'prijs (€)'],
        'angle' => ['value' => 60],
        'shape-area' => ['shape' => 'triangle'],
        'pythagoras' => ['a' => 3, 'b' => 4],
        'right-triangle' => ['angle' => 30, 'hypotenuse' => 10],
        'boxplot' => ['values' => '2; 4; 4; 4; 5; 5; 7; 9'],
        'unit-circle' => ['angle' => 30],
        'stats' => ['values' => '4; 6; 6; 7; 9; 30'],
        'powers' => ['base' => 2, 'max' => 10],
        'coordinate-grid' => ['size' => 6, 'points' => '(2;3) (-4;1)'],
        'function-plot' => ['fn' => 'a*x^2 + b*x + c', 'a' => 1, 'b' => -2, 'c' => -3, 'roots' => 'true', 'title' => 'Parabolen'],
        'function-plot ' => ['fn' => 'x^2', 'xmin' => -1, 'xmax' => 4, 'ymin' => -1, 'ymax' => 10, 'tangent' => 'true', 'x0' => 1, 'title' => 'Raaklijn en helling'],
        'function-plot  ' => ['fn' => 'x^2', 'xmin' => -1, 'xmax' => 4, 'ymin' => -1, 'ymax' => 10, 'area' => 'true', 'lower' => 0, 'upper' => 2, 'title' => 'Oppervlakte onder de grafiek'],
    ];
@endphp

@section('content')
    <div class="container-page max-w-3xl pt-12">
        <p class="eyebrow">Voor contentschrijvers</p>
        <h1 class="page-title mt-2">Widgetgalerij</h1>
        <p class="mt-3 font-serif text-lg text-muted">Alle interactieve visualisaties met een voorbeelddirectief. Alleen zichtbaar in de lokale omgeving.</p>

        @foreach ($examples as $name => $params)
            <section class="mt-12" id="{{ trim($name) }}">
                @php
                    $args = collect($params)->map(fn ($v, $k) => ' '.$k.'='.(str_contains((string) $v, ' ') ? '"'.$v.'"' : $v))->implode('');
                    $name = trim($name);
                    $directive = '{'.'{ widget: '.$name.$args.' }'.'}';
                @endphp
                <code class="rounded bg-mist px-2 py-1 text-sm text-ink">{{ $directive }}</code>
                @include('widgets.'.$name, ['params' => $params])
            </section>
        @endforeach
    </div>
@endsection
