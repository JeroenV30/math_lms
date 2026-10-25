<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Studiemuziek</title>
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
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
    <main class="mx-auto max-w-md px-5 py-6" x-data="musicPlayer()">
        <p class="eyebrow">{{ app(\App\Services\DomainService::class)->app()['name'] }}</p>
        <h1 class="mt-1 font-serif text-2xl font-semibold text-ink">Studiemuziek</h1>
        <p class="mt-2 text-sm text-muted">Rustige muziek die ter plekke wordt gemaakt, nooit precies hetzelfde. Laat dit venster open; de muziek speelt door terwijl je in het hoofdvenster verder leert.</p>

        <div class="mt-6 flex items-center gap-4">
            <button type="button" class="btn btn-primary h-14 w-14 justify-center rounded-full p-0" @click="toggle()" :aria-label="playing ? 'Stoppen' : 'Afspelen'" :title="playing ? 'Stoppen' : 'Afspelen'">
                <svg x-show="!playing" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M6 4.5v11l9-5.5-9-5.5Z"/></svg>
                <svg x-show="playing" x-cloak class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><rect x="5" y="4.5" width="3.5" height="11" rx="1"/><rect x="11.5" y="4.5" width="3.5" height="11" rx="1"/></svg>
            </button>
            <div class="text-sm">
                <p class="font-medium text-ink" x-text="playing ? 'Speelt' : 'Gestopt'"></p>
                <p class="text-muted" x-show="remaining" x-text="remaining"></p>
                <p class="text-warning" x-show="blocked" x-cloak>Klik op afspelen om te beginnen.</p>
            </div>
        </div>

        <section class="mt-8" aria-labelledby="style-title">
            <h2 id="style-title" class="text-sm font-semibold text-ink">Muziek</h2>
            <div class="mt-2 grid gap-2">
                <template x-for="(info, key) in styles" :key="key">
                    <button type="button" @click="chooseStyle(key)"
                            class="card flex items-center justify-between gap-3 px-4 py-3 text-left transition-colors"
                            :class="style === key ? 'border-accent bg-accent-soft' : 'hover:border-line-strong'"
                            :aria-pressed="style === key">
                        <span>
                            <span class="block text-sm font-medium text-ink" x-text="info.label"></span>
                            <span class="block text-xs text-muted" x-text="info.description"></span>
                        </span>
                        <span class="text-accent" x-show="style === key" aria-hidden="true">✓</span>
                    </button>
                </template>
            </div>
            <label class="mt-3 flex items-center gap-3 text-sm text-ink-soft">
                <span class="w-24 shrink-0">Volume</span>
                <input type="range" min="0" max="1" step="0.05" x-model="musicLevel" @input="levels()" class="w-full accent-[var(--color-accent)]">
            </label>
        </section>

        <section class="mt-8" aria-labelledby="ambience-title">
            <h2 id="ambience-title" class="text-sm font-semibold text-ink">Achtergrondgeluid</h2>
            <div class="mt-2 flex flex-wrap gap-2">
                <template x-for="(info, key) in ambiences" :key="key">
                    <button type="button" @click="chooseAmbience(key)" class="btn"
                            :class="ambience === key ? 'btn-primary' : 'btn-secondary'"
                            :aria-pressed="ambience === key" x-text="info.label"></button>
                </template>
            </div>
            <label class="mt-3 flex items-center gap-3 text-sm text-ink-soft">
                <span class="w-24 shrink-0">Volume</span>
                <input type="range" min="0" max="1" step="0.05" x-model="ambienceLevel" @input="levels()" class="w-full accent-[var(--color-accent)]">
            </label>
        </section>

        <section class="mt-8" aria-labelledby="sleep-title">
            <h2 id="sleep-title" class="text-sm font-semibold text-ink">Stoppen na</h2>
            <div class="mt-2 flex flex-wrap gap-2">
                @foreach (['' => 'Niet', '25' => '25 min', '50' => '50 min', '90' => '90 min'] as $minutes => $label)
                    <button type="button" class="btn" @click="setSleep('{{ $minutes }}')"
                            :class="sleep === '{{ $minutes }}' ? 'btn-primary' : 'btn-secondary'">{{ $label }}</button>
                @endforeach
            </div>
            <p class="mt-2 text-xs text-muted">Handig als studieblok: na 25 of 50 minuten valt de muziek stil als teken voor een pauze.</p>
        </section>
    </main>
</body>
</html>
