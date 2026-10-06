<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title.' · ' : '' }}{{ $site['name'] }}</title>
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    {{-- Thema vóór het eerste beeld zetten (geen witte flits): opgeslagen keuze, anders de systeeminstelling. --}}
    <script>
        (function () {
            var dark = false;
            try {
                var saved = localStorage.getItem('theme');
                dark = saved ? saved === 'dark' : window.matchMedia('(prefers-color-scheme: dark)').matches;
            } catch (e) {}
            document.documentElement.dataset.theme = dark ? 'dark' : 'light';
        })();
    </script>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-paper">
    @php
        // Welk kennisdomein is actief? De domeinpagina's hebben hun eigen id; de kaart hoort bij geen domein;
        // alle andere pagina's (dashboard, cursus, oefenen …) horen bij wiskunde.
        $activeDomain = match (true) {
            request()->routeIs('domains.show') => request()->route('domain'),
            request()->routeIs('domains.index') => null,
            default => 'wiskunde',
        };
        $currentDomain = $activeDomain ? $knowledgeDomains->firstWhere('id', $activeDomain) : null;

        // Menu per domein. Een domein zonder eigen menu (nog in voorbereiding) krijgt alleen de algemene onderdelen.
        $domainMenus = [
            'wiskunde' => [
                'search' => true,
                'nav' => [
                    ['route' => 'dashboard', 'label' => 'Dashboard', 'match' => 'dashboard'],
                    ['route' => 'course.index', 'label' => 'Cursus', 'match' => 'course.*|module.*|lesson.*|quiz.*'],
                    ['route' => 'practice.index', 'label' => 'Oefenen', 'match' => 'practice.*'],
                    ['route' => 'review.index', 'label' => 'Herhalen', 'match' => 'review.*', 'badge' => $reviewCount],
                    ['route' => 'history.index', 'label' => 'Tijdlijn', 'match' => 'history.*'],
                    ['route' => 'mathematicians.index', 'label' => 'Wiskundigen', 'match' => 'mathematicians.*'],
                    ['route' => 'progress.index', 'label' => 'Voortgang', 'match' => 'progress.*'],
                ],
                'library' => [
                    ['route' => 'glossary', 'label' => 'Woordenlijst'],
                    ['route' => 'formulas', 'label' => 'Formulebibliotheek'],
                ],
            ],
        ];
        $menu = $domainMenus[$activeDomain] ?? ['search' => false, 'nav' => [], 'library' => []];
        $general = [
            ['route' => 'domains.index', 'label' => 'Kaart van kennis'],
            ['route' => 'settings.edit', 'label' => 'Instellingen'],
        ];
        $isActive = fn (string $pattern) => collect(explode('|', $pattern))->contains(fn ($p) => request()->routeIs($p));
    @endphp

    <header class="sticky top-0 z-40 border-b border-line bg-paper/95 backdrop-blur" x-data="{ open: false }">
        <div class="flex h-16 w-full items-center gap-3 px-4 lg:px-5">
            <a href="{{ route('domains.index') }}" class="flex shrink-0 items-center gap-2.5" title="{{ $site['name'] }}: kaart van kennis">
                <span class="flex h-8 w-8 items-center justify-center rounded-md bg-ink text-paper" aria-hidden="true">
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="10" cy="10" r="2.5"/><circle cx="10" cy="3" r="1.2"/><circle cx="16" cy="13.5" r="1.2"/><circle cx="4" cy="13.5" r="1.2"/><path d="M10 5.5v2M14.9 12.6l-2.7-1.4M5.1 12.6l2.7-1.4"/></svg>
                </span>
                {{-- Met een domeinmenu is de ruimte krap: de naam pas vanaf xl, het logo zegt genoeg. --}}
                <span @class(['leading-tight', 'hidden sm:block' => ! $menu['nav'], 'hidden xl:block' => $menu['nav']])>
                    <span class="block font-serif text-[0.95rem] font-semibold text-ink">{{ $site['name'] }}</span>
                    <span class="block text-[0.7rem] tracking-wide text-muted">{{ $site['tagline'] }}</span>
                </span>
            </a>

            @if ($currentDomain)
                {{-- Het actieve domein, met hetzelfde monogram als in de domeinbalk. --}}
                <span class="h-6 w-px shrink-0 bg-line" aria-hidden="true"></span>
                <a href="{{ route('domains.show', $currentDomain['id']) }}" class="flex shrink-0 items-center gap-2 rounded-md py-1 pr-2 pl-1 hover:bg-mist">
                    <x-domain-monogram :domain="$currentDomain" size="sm" />
                    <span class="text-sm font-semibold text-ink">{{ $currentDomain['name'] }}</span>
                </a>
            @endif

            <nav class="ml-2 hidden min-w-0 flex-1 items-center gap-0.5 lg:flex" aria-label="Menu {{ $currentDomain['name'] ?? $site['name'] }}">
                @foreach ($menu['nav'] as $item)
                    <a href="{{ route($item['route']) }}"
                       @class([
                           'relative shrink-0 rounded-md px-2.5 py-2 text-sm font-medium whitespace-nowrap transition-colors',
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

            <div class="ml-auto flex shrink-0 items-center gap-1">
                @if ($menu['search'])
                    <form action="{{ route('search') }}" method="get" class="relative hidden xl:block" role="search">
                        <label for="site-search" class="sr-only">Zoeken in {{ $currentDomain['name'] }}</label>
                        <input id="site-search" type="search" name="q" value="{{ request('q') }}" placeholder="Zoeken…"
                               class="w-36 rounded-lg border border-line bg-mist py-1.5 pr-3 pl-8 text-sm placeholder:text-faint focus:w-52 focus:border-accent focus:bg-paper focus:outline-none transition-all">
                        <svg class="pointer-events-none absolute top-1/2 left-2.5 h-4 w-4 -translate-y-1/2 text-faint" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="9" cy="9" r="6"/><path d="m14 14 4 4" stroke-linecap="round"/></svg>
                    </form>
                    <a href="{{ route('search') }}" class="btn btn-ghost hidden px-2.5 md:inline-flex xl:hidden" aria-label="Zoeken in {{ $currentDomain['name'] }}" title="Zoeken">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="9" cy="9" r="6"/><path d="m14 14 4 4" stroke-linecap="round"/></svg>
                    </a>
                @endif

                <div x-data="{
                        mode: (() => { try { return localStorage.getItem('theme') || 'system' } catch (e) { return 'system' } })(),
                        get label() { return { system: 'Thema: systeem', light: 'Thema: licht', dark: 'Thema: donker' }[this.mode] },
                        cycle() {
                            this.mode = { system: 'light', light: 'dark', dark: 'system' }[this.mode];
                            try { this.mode === 'system' ? localStorage.removeItem('theme') : localStorage.setItem('theme', this.mode) } catch (e) {}
                            window.applyTheme();
                        },
                     }">
                    <button type="button" class="btn btn-ghost px-2.5" @click="cycle()" :title="label" :aria-label="label">
                        <svg x-show="mode === 'light'" x-cloak class="h-5 w-5" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><circle cx="10" cy="10" r="3.5"/><path d="M10 2v2M10 16v2M2 10h2M16 10h2M4.3 4.3l1.4 1.4M14.3 14.3l1.4 1.4M4.3 15.7l1.4-1.4M14.3 5.7l1.4-1.4" stroke-linecap="round"/></svg>
                        <svg x-show="mode === 'dark'" x-cloak class="h-5 w-5" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M16 12.5A6.5 6.5 0 0 1 7.5 4a6.5 6.5 0 1 0 8.5 8.5Z" stroke-linejoin="round"/></svg>
                        <svg x-show="mode === 'system'" class="h-5 w-5" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><rect x="2.5" y="3.5" width="15" height="10" rx="1.5"/><path d="M7 17h6M10 13.5V17" stroke-linecap="round"/></svg>
                    </button>
                </div>

                <div class="relative hidden lg:block" x-data="{ more: false }" @click.outside="more = false">
                    <button type="button" class="btn btn-ghost px-2.5" @click="more = !more" :aria-expanded="more" aria-label="Meer">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><circle cx="4" cy="10" r="1.6"/><circle cx="10" cy="10" r="1.6"/><circle cx="16" cy="10" r="1.6"/></svg>
                    </button>
                    <div x-cloak x-show="more" x-transition.opacity class="absolute right-0 mt-2 w-56 rounded-xl border border-line bg-paper p-1.5 shadow-lg">
                        @if ($menu['library'])
                            <p class="eyebrow px-3 pt-2 pb-1">{{ $currentDomain['name'] }}</p>
                            @foreach ($menu['library'] as $item)
                                <a href="{{ route($item['route']) }}" class="block rounded-md px-3 py-2 text-sm text-ink-soft hover:bg-mist">{{ $item['label'] }}</a>
                            @endforeach
                            <div class="my-1.5 border-t border-line"></div>
                        @endif
                        @foreach ($general as $item)
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
                @if ($menu['search'])
                    <form action="{{ route('search') }}" method="get" class="mb-2" role="search">
                        <input type="search" name="q" placeholder="Zoeken in {{ $currentDomain['name'] }}…" class="input text-sm" aria-label="Zoeken in {{ $currentDomain['name'] }}">
                    </form>
                @endif
                @if ($menu['nav'] || $menu['library'])
                    <p class="eyebrow px-3">{{ $currentDomain['name'] }}</p>
                    @foreach (array_merge($menu['nav'], $menu['library']) as $item)
                        <a href="{{ route($item['route']) }}" class="flex items-center justify-between rounded-md px-3 py-2 text-sm font-medium text-ink-soft hover:bg-mist">
                            {{ $item['label'] }}
                            @if (! empty($item['badge']))
                                <span class="rounded-full bg-accent px-1.5 py-0.5 text-[0.65rem] font-semibold text-white">{{ $item['badge'] }}</span>
                            @endif
                        </a>
                    @endforeach
                @endif
                <p class="eyebrow mt-4 px-3">Kennisdomeinen</p>
                <div class="grid grid-cols-2 gap-1">
                    @foreach ($knowledgeDomains as $item)
                        <a href="{{ route('domains.show', $item['id']) }}" class="flex items-center gap-2 rounded-md px-3 py-2 text-sm text-ink-soft hover:bg-mist">
                            <x-domain-monogram :domain="$item" size="xs" />
                            <span class="truncate">{{ $item['name'] }}</span>
                        </a>
                    @endforeach
                </div>
                <div class="mt-3 border-t border-line pt-3">
                    @foreach ($general as $item)
                        <a href="{{ route($item['route']) }}" class="block rounded-md px-3 py-2 text-sm text-ink-soft hover:bg-mist">{{ $item['label'] }}</a>
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
            <p>{{ $site['name'] }} — begrijpen → toepassen → fouten maken → uitleg krijgen → opnieuw proberen → beheersen.</p>
            <p class="flex flex-wrap gap-x-4 gap-y-1">
                @foreach (array_merge($menu['library'], $general) as $item)
                    <a href="{{ route($item['route']) }}" class="hover:text-ink">{{ $item['label'] }}</a>
                @endforeach
            </p>
        </div>
    </footer>
        </div>
    </div>
</body>
</html>
