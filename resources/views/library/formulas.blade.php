@extends('layouts.app', ['title' => 'Formulebibliotheek'])

@inject('markdown', 'App\Services\MarkdownRenderer')

@section('content')
    <div class="container-page max-w-4xl pt-12 pb-6 sm:pt-16">
        <p class="eyebrow">Formulebibliotheek</p>
        <h1 class="page-title mt-2">Formules met betekenis</h1>
        <p class="mt-3 font-serif text-lg text-muted">Geen spiekbriefje: bij elke formule staat waarvoor je hem gebruikt en waar hij vandaan komt.</p>

        @if ($formulas->isEmpty())
            <p class="mt-8 text-muted">Nog geen formules.</p>
        @endif

        @foreach ($formulas as $moduleId => $items)
            @php $module = $content->getModule($moduleId); @endphp
            <section class="mt-12">
                <h2 class="eyebrow"><a href="{{ route('module.show', $module->slug) }}" class="hover:text-ink">Module {{ $module->id }} – {{ $module->title }}</a></h2>
                <div class="mt-4 grid grid-cols-[minmax(0,1fr)] gap-4">
                    @foreach ($items as $formula)
                        <article class="card p-5 sm:p-6">
                            <h3 class="font-serif text-lg font-semibold text-ink">{{ $formula['name'] }}</h3>
                            <div class="math math-display" data-display="true">{{ $formula['latex'] }}</div>
                            <dl class="grid gap-3 text-sm sm:grid-cols-2">
                                @if (! empty($formula['usage']))
                                    <div><dt class="font-semibold text-ink">Gebruik</dt><dd class="mt-0.5 text-ink-soft">{!! $markdown->inline($formula['usage']) !!}</dd></div>
                                @endif
                                @if (! empty($formula['origin']))
                                    <div><dt class="font-semibold text-history">Ontstaan</dt><dd class="mt-0.5 text-ink-soft">{!! $markdown->inline($formula['origin']) !!}</dd></div>
                                @endif
                            </dl>
                        </article>
                    @endforeach
                </div>
            </section>
        @endforeach
    </div>
@endsection
