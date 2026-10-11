@extends('layouts.app', ['title' => 'Formulebibliotheek'])

@inject('markdown', 'App\Services\MarkdownRenderer')

@inject('course', 'App\Services\ContentService')

@section('content')
    @php $page = $course->page('formulas'); @endphp
    <x-page-header :eyebrow="$page['eyebrow']" :title="$page['title']" :intro="$page['intro']" />

    <div class="container-page mt-10 pb-6 *:max-w-4xl">
        @if ($formulas->isEmpty())
            <p class="text-muted">Nog geen formules.</p>
        @endif

        @foreach ($formulas as $moduleId => $items)
            @php $module = $content->getModule($moduleId); @endphp
            <section class="mt-12 first:mt-0">
                <h2 class="eyebrow"><a href="{{ route('module.show', $module->slug) }}" class="hover:text-ink">Module {{ $module->id }} – {{ $module->title }}</a></h2>
                <div class="mt-4 grid grid-cols-[minmax(0,1fr)] gap-4">
                    @foreach ($items as $formula)
                        <article class="card p-5 sm:p-6">
                            <h3 class="font-serif text-lg font-semibold text-ink">{!! $markdown->inline($formula['name']) !!}</h3>
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
