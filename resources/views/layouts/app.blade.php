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
        // Welk kennisdomein is actief? Zie DomainService::activeId().
        $activeDomain = app(\App\Services\DomainService::class)->activeId();
        $currentDomain = $activeDomain ? $knowledgeDomains->firstWhere('id', $activeDomain) : null;

        // Menu van het domein: een domein met een cursus krijgt de cursusonderdelen die de cursus heeft;
        // een domein in voorbereiding alleen de algemene onderdelen.
        $menu = ['search' => false, 'nav' => [], 'library' => []];
        if (app(\App\Services\CourseRegistry::class)->currentId() !== null) {
            $course = app(\App\Services\ContentService::class);
            $menu = [
                'search' => true,
                'nav' => array_values(array_filter([
                    ['route' => 'domains.show', 'label' => 'Dashboard', 'match' => 'domains.show'],
                    ['route' => 'course.index', 'label' => 'Cursus', 'match' => 'course.*|module.*|lesson.*|quiz.*'],
                    ['route' => 'practice.index', 'label' => 'Oefenen', 'match' => 'practice.*'],
                    ['route' => 'review.index', 'label' => 'Herhalen', 'match' => 'review.*', 'badge' => $reviewCount],
                    $course->timeline()->isNotEmpty() ? ['route' => 'history.index', 'label' => 'Tijdlijn', 'match' => 'history.*'] : null,
                    $course->people()->isNotEmpty() ? ['route' => 'people.index', 'label' => $course->label('people'), 'match' => 'people.*'] : null,
                    ['route' => 'progress.index', 'label' => 'Voortgang', 'match' => 'progress.*'],
                ])),
                'library' => array_values(array_filter([
                    $course->glossary()->isNotEmpty() ? ['route' => 'glossary', 'label' => 'Woordenlijst'] : null,
                    $course->formulas()->isNotEmpty() ? ['route' => 'formulas', 'label' => 'Formulebibliotheek'] : null,
                ])),
            ];
        }
        $general = [
            ['route' => 'domains.index', 'label' => 'Kaart van kennis'],
            ['route' => 'history.all', 'label' => 'Tijdlijn van alle domeinen'],
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
                @php
                    // Binnen een cursus zoek je in die cursus, daarbuiten in alle domeinen.
                    $searchUrl = $menu['search'] ? route('search') : route('search.all');
                    $searchScope = $menu['search'] ? $currentDomain['name'] : 'alle domeinen';
                @endphp
                <form action="{{ $searchUrl }}" method="get" class="relative hidden xl:block" role="search">
                    <label for="site-search" class="sr-only">Zoeken in {{ $searchScope }}</label>
                    <input id="site-search" type="search" name="q" value="{{ request('q') }}" placeholder="Zoeken…"
                           class="w-36 rounded-lg border border-line bg-mist py-1.5 pr-3 pl-8 text-sm placeholder:text-faint focus:w-52 focus:border-accent focus:bg-paper focus:outline-none transition-all">
                    <svg class="pointer-events-none absolute top-1/2 left-2.5 h-4 w-4 -translate-y-1/2 text-faint" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="9" cy="9" r="6"/><path d="m14 14 4 4" stroke-linecap="round"/></svg>
                </form>
                <a href="{{ $searchUrl }}" class="btn btn-ghost hidden px-2.5 md:inline-flex xl:hidden" aria-label="Zoeken in {{ $searchScope }}" title="Zoeken">
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="9" cy="9" r="6"/><path d="m14 14 4 4" stroke-linecap="round"/></svg>
                </a>

                {{-- Voorlezen: alleen op pagina's met voorleesbare tekst (zie resources/js/speech/reader.js). --}}
                <div x-data="{ show: 'speechSynthesis' in window && document.querySelector('[data-read-aloud]') !== null, active: false }"
                     x-show="show" x-cloak @reader-state.window="active = $event.detail.open">
                    <button type="button" class="btn btn-ghost px-2.5" :class="active && 'text-accent'" @click="$dispatch('reader-toggle')"
                            title="Voorlezen" aria-label="Voorlezen">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M3.5 7.5h2.5L10 4v12l-4-3.5H3.5z" stroke-linejoin="round"/><path d="M13 7.2a4 4 0 0 1 0 5.6M15.3 5a7 7 0 0 1 0 10" stroke-linecap="round"/></svg>
                    </button>
                </div>

                {{-- Studiemuziek speelt in een eigen venster (zie resources/js/music/player.js). --}}
                <div x-data="musicLauncher('{{ route('music.player') }}')">
                    <button type="button" class="btn btn-ghost relative px-2.5" :class="playing && 'text-accent'" @click="open()" :title="label" :aria-label="label">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M7.5 15V4.5l9-2V13" stroke-linejoin="round"/><circle cx="5.5" cy="15" r="2"/><circle cx="14.5" cy="13" r="2"/></svg>
                        <span x-show="playing" x-cloak class="absolute top-1.5 right-1.5 h-2 w-2 animate-pulse rounded-full bg-accent" aria-hidden="true"></span>
                    </button>
                </div>

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
                <form action="{{ $searchUrl }}" method="get" class="mb-2" role="search">
                    <input type="search" name="q" placeholder="Zoeken in {{ $searchScope }}…" class="input text-sm" aria-label="Zoeken in {{ $searchScope }}">
                </form>
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

    {{-- Voorleesbalk --}}
    <div x-data="reader()" x-cloak x-show="open" x-transition.opacity data-reader-bar
         @reader-toggle.window="open ? close() : start()"
         x-effect="$dispatch('reader-state', { open })"
         class="fixed inset-x-0 bottom-4 z-50 flex justify-center px-4">
        <div class="relative flex items-center gap-1 rounded-2xl border border-line bg-paper/95 p-1.5 shadow-lg backdrop-blur" role="region" aria-label="Voorlezen">
            <button type="button" class="btn btn-ghost px-2.5" @click="previous()" title="Vorige alinea" aria-label="Vorige alinea">
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M5 4.5h2v11H5zM16 4.5v11l-8-5.5z"/></svg>
            </button>
            <button type="button" class="btn btn-primary h-10 w-10 justify-center rounded-full p-0" @click="toggle()" :title="playing ? 'Pauzeren' : 'Verder lezen'" :aria-label="playing ? 'Pauzeren' : 'Verder lezen'">
                <svg x-show="!playing" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M6.5 4.5v11l9-5.5z"/></svg>
                <svg x-show="playing" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><rect x="5.5" y="4.5" width="3" height="11" rx="1"/><rect x="11.5" y="4.5" width="3" height="11" rx="1"/></svg>
            </button>
            <button type="button" class="btn btn-ghost px-2.5" @click="nextBlock()" title="Volgende alinea" aria-label="Volgende alinea">
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M13 4.5h2v11h-2zM4 4.5v11l8-5.5z"/></svg>
            </button>
            <span class="hidden w-16 text-center text-xs text-muted tabular-nums sm:inline" x-text="progress"></span>
            <label class="sr-only" for="reader-rate">Tempo</label>
            <select id="reader-rate" class="rounded-md border border-line bg-paper px-1.5 py-1 text-sm text-ink" :value="rate" @change="setRate($event.target.value)" title="Tempo">
                @foreach (['0.8', '0.9', '1', '1.1', '1.2', '1.35', '1.5'] as $rate)
                    <option value="{{ $rate }}">{{ str_replace('.', ',', $rate) }}×</option>
                @endforeach
            </select>
            <button type="button" class="btn btn-ghost px-2.5" @click="showSettings = !showSettings" :aria-expanded="showSettings" title="Stem en instellingen" aria-label="Stem en instellingen">
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M3 6h8M15 6h2M3 14h2M9 14h8" stroke-linecap="round"/><circle cx="13" cy="6" r="2"/><circle cx="7" cy="14" r="2"/></svg>
            </button>
            <button type="button" class="btn btn-ghost px-2.5" @click="close()" title="Stoppen (Esc)" aria-label="Voorlezen stoppen">
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="m5 5 10 10M15 5 5 15" stroke-linecap="round"/></svg>
            </button>

            <div x-show="showSettings" x-transition.opacity @click.outside="showSettings = false"
                 class="absolute right-0 bottom-full mb-2 w-80 max-w-[calc(100vw-2rem)] rounded-xl border border-line bg-paper p-4 shadow-lg">
                <label for="reader-voice" class="block text-sm font-semibold text-ink">Stem</label>
                <template x-if="voices.length">
                    <select id="reader-voice" class="input mt-2 text-sm" :value="voiceURI" @change="setVoice($event.target.value)">
                        <template x-for="voice in voices" :key="voice.uri">
                            <option :value="voice.uri" x-text="voice.label" :selected="voice.uri === voiceURI"></option>
                        </template>
                    </select>
                </template>
                <p x-show="!voices.length" class="mt-2 text-sm text-warning">Geen Nederlandse stem gevonden. Voeg er een toe via Windows-instellingen › Tijd en taal › Spraak, of gebruik Microsoft Edge.</p>
                <p class="mt-2 text-xs text-muted">Stemmen met ‘natuurlijk’ klinken het prettigst; Microsoft Edge biedt die standaard aan.</p>
                <label class="mt-4 flex items-center gap-2 text-sm text-ink-soft">
                    <input type="checkbox" :checked="follow" @change="setFollow($event.target.checked)">
                    <span>Meescrollen met de tekst</span>
                </label>
                <p class="mt-3 text-xs text-muted">Klik op een alinea om vanaf daar verder te lezen.</p>
            </div>
        </div>
    </div>
</body>
</html>
