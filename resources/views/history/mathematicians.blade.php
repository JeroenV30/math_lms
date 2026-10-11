@extends('layouts.app', ['title' => 'Wiskundigen'])

@section('content')
    <x-page-header eyebrow="Wiskundigenbibliotheek" eyebrow-class="text-history" title="De mensen achter de wiskunde"
                   intro="Schrijvers, rekenmeesters, astronomen en statistici. Elk profiel verwijst naar de lessen waarin hun werk terugkomt." />

    <div class="container-page mt-10">
        @if ($mathematicians->isEmpty())
            <p class="text-muted">De profielen worden nog geschreven.</p>
        @endif
        <ul class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($mathematicians as $person)
                <li>
                    <a href="{{ route('mathematicians.show', $person['id']) }}" class="card group flex h-full gap-4 p-5 transition-colors hover:border-history-line">
                        @if (! empty($person['image']))
                            <img src="{{ $person['image'] }}" alt="" class="h-16 w-14 shrink-0 rounded-md object-cover grayscale-[30%]" loading="lazy">
                        @else
                            <span class="flex h-16 w-14 shrink-0 items-center justify-center rounded-md bg-history-soft font-serif text-2xl text-history" aria-hidden="true">{{ mb_substr($person['name'], 0, 1) }}</span>
                        @endif
                        <span class="min-w-0">
                            <span class="block font-serif text-lg font-semibold text-ink group-hover:text-history">{{ $person['name'] }}</span>
                            <span class="block text-xs text-muted">{{ $person['lived'] ?? '' }}{{ ! empty($person['region']) ? ' · '.$person['region'] : '' }}</span>
                            <span class="mt-2 block text-sm leading-snug text-ink-soft">{{ $person['known_for'] ?? '' }}</span>
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
