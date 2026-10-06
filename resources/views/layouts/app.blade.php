<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title.' · ' : '' }}{{ $courseTitle }}</title>
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-paper">
    @php
        $nav = [
            ['route' => 'dashboard', 'label' => 'Dashboard', 'match' => 'dashboard'],
            ['route' => 'course.index', 'label' => 'Cursus', 'match' => 'course.*|module.*|lesson.*|quiz.*'],
            ['route' => 'practice.index', 'label' => 'Oefenen', 'match' => 'practice.*'],
            ['route' => 'review.index', 'label' => 'Herhalen', 'match' => 'review.*', 'badge' => $reviewCount],
            ['route' => 'history.index', 'label' => 'Tijdlijn', 'match' => 'history.*'],
            ['route' => 'mathematicians.index', 'label' => 'Wiskundigen', 'match' => 'mathematicians.*'],
            ['route' => 'progress.index', 'label' => 'Voortgang', 'match' => 'progress.*'],
        ];
        $more = [
            ['route' => 'glossary', 'label' => 'Woordenlijst'],
            ['route' => 'formulas', 'label' => 'Formulebibliotheek'],
            ['route' => 'settings.edit', 'label' => 'Instellingen'],
        ];
        $isActive = fn (string $pattern) => collect(explode('|', $pattern))->contains(fn ($p) => request()->routeIs($p));
        // Welk kennisdomein is actief? Alle huidige pagina's horen bij wiskunde, behalve de domeinpagina's zelf.
        $activeDomain = match (true) {
            request()->routeIs('domains.show') => request()->route('domain'),
            request()->routeIs('domains.index') => null,
            default => 'wiskunde',
        };
    @endphp

    <header class="sticky top-0 z-40 border-b border-line bg-paper/95 backdrop-blur" x-data="{ open: false, search: false }">
        <div class="container-page flex h-16 items-center gap-4">
            <a href="{{ route('dashboard') }}" class="flex shrink-0 items-center gap-2.5">
                <span class="flex h-8 w-8 items-center justify-center rounded-md bg-ink font-serif text-sm font-semibold text-white" aria-hidden="true">∑</span>
                <span class="hidden leading-tight sm:block">
                    <span class="block font-serif text-[0.95rem] font-semibold text-ink">Rekenen &amp; Wiskunde</span>
                    <span class="block text-[0.7rem] tracking-wide text-muted">door de Eeuwen</span>
                </span>
            </a>

            <nav class="ml-4 hidden flex-1 items-center gap-1 lg:flex" aria-label="Hoofdnavigatie">
                @foreach ($nav as $item)
                    <a href="{{ route($item['route']) }}"
                       @class([
                           'relative rounded-md px-3 py-2 text-sm font-medium transition-colors',
                           'text-ink bg-mist' => $isActive($item['match']),
                           'text-muted hover:text-ink' => ! $isActive($item['match']),
                       ])>
                        {{ $item['label'] }}
                        @if (! empty($item['badge']))
                            <span class="ml-1 rounded-full bg-accent px-1.5 py-0.5 text-[0.65rem] font-semibold text-white tabular-nums">{{ $item['badge'] }}</span>
                        @endif
                    </a>
                @endforeach
            </nav>

            <div class="ml-auto flex items-center gap-1">
                <form action="{{ route('search') }}" method="get" class="relative hidden md:block" role="search">
                    <label for="site-search" class="sr-only">Zoeken</label>
                    <input id="site-search" type="search" name="q" value="{{ request('q') }}" placeholder="Zoeken…"
                           class="w-40 rounded-lg border border-line bg-mist py-1.5 pr-3 pl-8 text-sm placeholder:text-faint focus:w-56 focus:border-accent focus:bg-paper focus:outline-none transition-all">
                    <svg class="pointer-events-none absolute top-1/2 left-2.5 h-4 w-4 -translate-y-1/2 text-faint" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="9" cy="9" r="6"/><path d="m14 14 4 4" stroke-linecap="round"/></svg>
                </form>

                <div class="relative hidden lg:block" x-data="{ more: false }" @click.outside="more = false">
                    <button type="button" class="btn btn-ghost px-2.5" @click="more = !more" :aria-expanded="more" aria-label="Meer">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><circle cx="4" cy="10" r="1.6"/><circle cx="10" cy="10" r="1.6"/><circle cx="16" cy="10" r="1.6"/></svg>
                    </button>
                    <div x-cloak x-show="more" x-transition.opacity class="absolute right-0 mt-2 w-52 rounded-xl border border-line bg-paper p-1.5 shadow-lg">
                        @foreach ($more as $item)
                            <a href="{{ route($item['route']) }}" class="block rounded-md px-3 py-2 text-sm text-ink-soft hover:bg-mist">{{ $item['label'] }}</a>
                        @endforeach
                    </div>
                </div>

                <button type="button" class="btn btn-ghost px-2.5 lg:hidden" @click="open = !open" :aria-expanded="open" aria-label="Menu">
                    <svg x-show="!open" class="h-5 w-5" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M3 6h14M3 10h14M3 14h14" stroke-linecap="round"/></svg>
                    <svg x-show="open" x-cloak class="h-5 w-5" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="m5 5 10 10M15 5 5 15" stroke-linecap="round"/></svg>
                </button>
            </div>
        </div>

        <div x-cloak x-show="open" x-transition.opacity class="border-t border-line bg-paper lg:hidden">
            <nav class="container-page grid gap-1 py-3" aria-label="Mobiele navigatie">
                <form action="{{ route('search') }}" method="get" class="mb-2" role="search">
                    <input type="search" name="q" placeholder="Zoeken…" class="input text-sm" aria-label="Zoeken">
                </form>
                @foreach (array_merge($nav, $more) as $item)
                    <a href="{{ route($item['route']) }}" class="flex items-center justify-between rounded-md px-3 py-2 text-sm font-medium text-ink-soft hover:bg-mist">
                        {{ $item['label'] }}
                        @if (! empty($item['badge']))
                            <span class="rounded-full bg-accent px-1.5 py-0.5 text-[0.65rem] font-semibold text-white">{{ $item['badge'] }}</span>
                        @endif
                    </a>
                @endforeach
                <p class="eyebrow mt-4 px-3">Kennisdomeinen</p>
                <div class="grid grid-cols-2 gap-1">
                    @foreach ($knowledgeDomains as $domain)
                        <a href="{{ route('domains.show', $domain['id']) }}" class="flex items-center gap-2 rounded-md px-3 py-2 text-sm text-ink-soft hover:bg-mist">
                            <span class="h-2 w-2 shrink-0 rounded-full" style="background-color: {{ $domain['color'] }}"></span>
                            <span class="truncate">{{ $domain['name'] }}</span>
                        </a>
                    @endforeach
                </div>
            </nav>
        </div>
    </header>

    <div class="flex">
        <x-domain-rail :domains="$knowledgeDomains" :active="$activeDomain" />

        <div class="min-w-0 flex-1">
    <main id="main">
        @yield('content')
    </main>

    <footer class="mt-24 border-t border-line">
        <div class="container-page flex flex-col gap-2 py-8 text-xs text-muted sm:flex-row sm:items-center sm:justify-between">
            <p>{{ $courseTitle }} — begrijpen → toepassen → fouten maken → uitleg krijgen → opnieuw proberen → beheersen.</p>
            <p class="flex gap-4">
                <a href="{{ route('glossary') }}" class="hover:text-ink">Woordenlijst</a>
                <a href="{{ route('formulas') }}" class="hover:text-ink">Formules</a>
                <a href="{{ route('settings.edit') }}" class="hover:text-ink">Instellingen</a>
            </p>
        </div>
    </footer>
        </div>
    </div>
</body>
</html>
