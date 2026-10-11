@extends('layouts.app', ['title' => $lesson['title'].' · '.$domain['name']])

@section('content')
    <div class="container-page grid gap-10 pt-8 lg:grid-cols-[15rem_minmax(0,1fr)] xl:grid-cols-[15rem_minmax(0,1fr)_13rem]">
        <aside class="order-2 lg:order-none">
            <div class="lg:sticky lg:top-24">
                <a href="{{ route('domains.show', $domain['id']) }}" class="block">
                    <p class="eyebrow">{{ $domain['name'] }}</p>
                    <p class="mt-1 font-serif text-lg leading-snug font-semibold text-ink hover:text-accent">{{ $lesson['module'] }}</p>
                </a>
                <ol class="mt-5 border-l border-line">
                    <li>
                        <a href="{{ route('domains.lesson', [$domain['id'], $lesson['slug']]) }}"
                           class="-ml-px flex items-start gap-2 border-l-2 border-accent py-1.5 pl-4 text-sm leading-snug font-medium text-ink"
                           aria-current="page">
                            <span class="w-4 shrink-0 text-xs text-faint">1</span>
                            <span>{{ $lesson['title'] }}</span>
                        </a>
                    </li>
                </ol>
                <p class="mt-5 text-xs leading-relaxed text-muted">De volgende lessen worden later toegevoegd.</p>
            </div>
        </aside>

        <article class="min-w-0 max-w-3xl">
            <header class="mb-10">
                <p class="eyebrow">Les 1 · Introductie · circa {{ $lesson['estimated_minutes'] }} minuten</p>
                <h1 class="page-title mt-2">{{ $lesson['title'] }}</h1>
            </header>

            <div class="prose-content">
                {!! $rendered['html'] !!}
            </div>

            <footer class="mt-16 flex flex-col gap-4 border-t border-line pt-8 sm:flex-row sm:items-center sm:justify-between">
                <a href="{{ route('domains.show', $domain['id']) }}" class="text-sm text-muted hover:text-ink">← Terug naar {{ $domain['name'] }}</a>
                <span class="text-sm text-muted">Dit is de eerste stap; de rest van de leerlijn is in opbouw.</span>
            </footer>
        </article>

        @if (count($rendered['toc']) > 1)
            <aside class="hidden xl:block" aria-label="Op deze pagina">
                <div class="sticky top-24">
                    <p class="eyebrow">Op deze pagina</p>
                    <ul class="mt-3 space-y-1.5 text-sm">
                        @foreach ($rendered['toc'] as $item)
                            <li @class(['pl-3' => $item['level'] === 3])>
                                <a href="#{{ $item['id'] }}" class="text-muted hover:text-ink">{{ $item['title'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        @endif
    </div>
@endsection
