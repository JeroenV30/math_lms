/**
 * Studiemuziek speelt in een eigen klein venster, zodat de muziek doorloopt terwijl je
 * in het hoofdvenster van les naar les gaat (elke klik laadt daar een nieuwe pagina).
 * Hoofdvenster en spelervenster houden elkaar op de hoogte via een BroadcastChannel.
 */

const CHANNEL = 'studiemuziek';
const SETTINGS = 'music.settings';
const WINDOW_NAME = 'studiemuziek';

function channel() {
    return 'BroadcastChannel' in window ? new BroadcastChannel(CHANNEL) : null;
}

function loadSettings() {
    try { return JSON.parse(localStorage.getItem(SETTINGS) ?? '{}') ?? {}; } catch (e) { return {}; }
}

/** Het venster met de speler. */
export function musicPlayer() {
    const saved = loadSettings();
    return {
        engine: null,
        styles: {},
        ambiences: {},
        style: saved.style ?? 'piano',
        ambience: saved.ambience ?? '',
        musicLevel: saved.musicLevel ?? 0.6,
        ambienceLevel: saved.ambienceLevel ?? 0.35,
        sleep: '',
        sleepAt: null,
        remaining: '',
        playing: false,
        blocked: false,
        channel: null,

        async init() {
            const { StudyMusic, STYLES, AMBIENCES } = await import('./engine');
            this.styles = STYLES;
            this.ambiences = AMBIENCES;
            this.engine = new StudyMusic();
            this.channel = channel();
            this.channel?.addEventListener('message', (event) => {
                if (event.data?.type === 'ping') this.announce();
                if (event.data?.type === 'toggle') this.toggle();
            });
            setInterval(() => this.tick(), 1000);
            // Geopend met een klik in het hoofdvenster: probeer meteen te beginnen.
            if (new URLSearchParams(location.search).has('start')) this.play();
        },

        persist() {
            try {
                localStorage.setItem(SETTINGS, JSON.stringify({
                    style: this.style, ambience: this.ambience, musicLevel: this.musicLevel, ambienceLevel: this.ambienceLevel,
                }));
            } catch (e) { /* geen opslag beschikbaar */ }
        },

        announce() {
            this.channel?.postMessage({ type: 'state', playing: this.playing, style: this.styles[this.style]?.label ?? null });
            document.title = this.playing ? '♪ Studiemuziek' : 'Studiemuziek';
        },

        async play() {
            if (!this.engine) return;
            const running = await this.engine.play({
                style: this.style || null,
                ambience: this.ambience || null,
                musicLevel: Number(this.musicLevel),
                ambienceLevel: Number(this.ambienceLevel),
            });
            // De browser staat geluid pas toe na een klik in dit venster.
            this.blocked = !running;
            this.playing = running && this.engine.playing;
            this.announce();
        },

        stop() {
            this.engine?.stop();
            this.playing = false;
            this.sleepAt = null;
            this.sleep = '';
            this.announce();
        },

        toggle() { this.playing ? this.stop() : this.play(); },

        chooseStyle(style) {
            this.style = this.style === style ? '' : style;
            this.persist();
            if (this.playing || this.engine?.ctx?.state === 'running') {
                this.engine.setStyle(this.style || null);
                this.playing = this.engine.playing;
                if (!this.playing && this.style) this.play();
                this.announce();
            }
        },

        chooseAmbience(kind) {
            this.ambience = this.ambience === kind ? '' : kind;
            this.persist();
            if (this.playing) {
                this.engine.setAmbience(this.ambience || null);
                this.playing = this.engine.playing;
                this.announce();
            }
        },

        levels() {
            this.engine?.setLevels(Number(this.musicLevel), Number(this.ambienceLevel));
            this.persist();
        },

        setSleep(minutes) {
            this.sleep = minutes;
            this.sleepAt = minutes ? Date.now() + Number(minutes) * 60000 : null;
            this.tick();
        },

        tick() {
            if (!this.sleepAt) { this.remaining = ''; return; }
            const left = this.sleepAt - Date.now();
            if (left <= 0) { this.stop(); return; }
            const minutes = Math.ceil(left / 60000);
            this.remaining = `stopt over ${minutes} ${minutes === 1 ? 'minuut' : 'minuten'}`;
        },
    };
}

/** De knop in de bovenbalk van het hoofdvenster. */
export function musicLauncher(url) {
    return {
        playing: false,
        style: null,
        channel: null,

        init() {
            this.channel = channel();
            this.channel?.addEventListener('message', (event) => {
                if (event.data?.type !== 'state') return;
                this.playing = event.data.playing;
                this.style = event.data.style;
            });
            this.channel?.postMessage({ type: 'ping' });
        },

        get label() {
            return this.playing ? `Studiemuziek speelt${this.style ? ` (${this.style})` : ''}` : 'Studiemuziek';
        },

        open() {
            const features = 'popup,width=420,height=640';
            // Bestaat het venster al, dan krijgen we het terug zonder het te herladen.
            let win = window.open('', WINDOW_NAME, features);
            if (!win) { window.open(url, '_blank'); return; }
            try {
                if (win.location.href === 'about:blank') win.location.href = `${url}?start=1`;
            } catch (e) {
                win = window.open(`${url}?start=1`, WINDOW_NAME, features);
            }
            win?.focus();
        },
    };
}
