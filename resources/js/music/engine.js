/**
 * Rustige studiemuziek, ter plekke gegenereerd met de Web Audio API.
 * Geen audiobestanden en geen licenties: akkoorden, melodie en achtergrondgeluid worden live
 * gesynthetiseerd, met kleine toevalsvariaties zodat het niet steeds hetzelfde klinkt.
 */

const midiToHz = (m) => 440 * 2 ** ((m - 69) / 12);

// Twee progressies in C groot (ii–V–I–vi en IV–iii–ii–V), met zachte, open liggingen.
const PROGRESSIONS = [
    [
        { bass: 38, notes: [53, 57, 60, 64] }, // Dm9
        { bass: 43, notes: [53, 57, 59, 64] }, // G13
        { bass: 36, notes: [52, 55, 59, 62] }, // Cmaj9
        { bass: 45, notes: [55, 59, 60, 64] }, // Am9
    ],
    [
        { bass: 41, notes: [52, 57, 60, 64] }, // Fmaj7
        { bass: 40, notes: [55, 59, 62, 64] }, // Em7
        { bass: 38, notes: [53, 57, 60, 64] }, // Dm9
        { bass: 43, notes: [55, 60, 62, 65] }, // G7sus4
    ],
];
const PENTATONIC = [60, 62, 64, 67, 69, 72, 74, 76, 79];

export const STYLES = {
    ambient: { label: 'Klankvlakken', description: 'Langzaam bewegende akkoorden, veel ruimte' },
    piano: { label: 'Piano', description: 'Rustige gebroken akkoorden' },
    lofi: { label: 'Lo-fi', description: 'Warme elektrische piano met een zachte beat' },
};

export const AMBIENCES = {
    rain: { label: 'Regen' },
    fire: { label: 'Haardvuur' },
    noise: { label: 'Bruine ruis' },
};

export class StudyMusic {
    constructor() {
        this.ctx = null;
        this.style = null;
        this.ambience = null;
        this.musicLevel = 0.6;
        this.ambienceLevel = 0.4;
        this.timer = null;
        this.ambienceNodes = [];
        this.step = 0;
        this.nextTime = 0;
    }

    /** Optioneel een eigen context, bijv. een OfflineAudioContext om te testen. */
    ensureContext(context = null) {
        if (this.ctx) return this.ctx;
        const ctx = context ?? new (window.AudioContext || window.webkitAudioContext)();
        this.ctx = ctx;

        this.master = ctx.createGain();
        this.master.gain.value = 0.9;
        const compressor = ctx.createDynamicsCompressor();
        compressor.threshold.value = -20;
        compressor.ratio.value = 3;
        this.master.connect(compressor).connect(ctx.destination);

        // Muziek: warm filter, droog signaal plus galm
        this.musicBus = ctx.createGain();
        this.musicBus.gain.value = 0;
        this.musicFilter = ctx.createBiquadFilter();
        this.musicFilter.type = 'lowpass';
        this.musicFilter.frequency.value = 5000;
        this.musicBus.connect(this.musicFilter).connect(this.master);

        this.reverb = ctx.createConvolver();
        this.reverb.buffer = this.impulse(3.8);
        this.reverbSend = ctx.createGain();
        this.reverbSend.gain.value = 0.5;
        this.reverbSend.connect(this.reverb).connect(this.musicFilter);

        this.ambienceBus = ctx.createGain();
        this.ambienceBus.gain.value = this.ambienceLevel;
        this.ambienceBus.connect(this.master);

        this.noiseBuffers = {
            white: this.noise('white'),
            pink: this.noise('pink'),
            brown: this.noise('brown'),
        };
        return ctx;
    }

    async resume() {
        const ctx = this.ensureContext();
        if (ctx.state !== 'running') await ctx.resume();
        return ctx.state === 'running';
    }

    // ---------- bouwstenen ----------

    impulse(seconds) {
        const { sampleRate } = this.ctx;
        const length = Math.floor(sampleRate * seconds);
        const buffer = this.ctx.createBuffer(2, length, sampleRate);
        for (let channel = 0; channel < 2; channel++) {
            const data = buffer.getChannelData(channel);
            for (let i = 0; i < length; i++) {
                data[i] = (Math.random() * 2 - 1) * (1 - i / length) ** 3;
            }
        }
        return buffer;
    }

    noise(color, seconds = 8) {
        const { sampleRate } = this.ctx;
        const length = sampleRate * seconds;
        const buffer = this.ctx.createBuffer(2, length, sampleRate);
        for (let channel = 0; channel < 2; channel++) {
            const data = buffer.getChannelData(channel);
            let b0 = 0; let b1 = 0; let b2 = 0; let last = 0;
            for (let i = 0; i < length; i++) {
                const white = Math.random() * 2 - 1;
                if (color === 'pink') {
                    b0 = 0.99765 * b0 + white * 0.099046;
                    b1 = 0.963 * b1 + white * 0.2965164;
                    b2 = 0.57 * b2 + white * 1.0526913;
                    data[i] = (b0 + b1 + b2 + white * 0.1848) * 0.18;
                } else if (color === 'brown') {
                    last = (last + 0.02 * white) / 1.02;
                    data[i] = last * 3.2;
                } else {
                    data[i] = white * 0.5;
                }
            }
        }
        return buffer;
    }

    noiseSource(color) {
        const source = this.ctx.createBufferSource();
        source.buffer = this.noiseBuffers[color];
        source.loop = true;
        // Elke laag op een ander punt van de lus laten beginnen
        source.start(0, Math.random() * 6);
        return source;
    }

    envelope(gainNode, start, attack, peak, release, end) {
        const g = gainNode.gain;
        g.setValueAtTime(0.0001, start);
        g.linearRampToValueAtTime(peak, start + attack);
        g.setValueAtTime(peak, Math.max(start + attack, end - release));
        g.linearRampToValueAtTime(0.0001, end);
    }

    pad(midi, start, duration, level = 0.05) {
        const { ctx } = this;
        const out = ctx.createGain();
        const filter = ctx.createBiquadFilter();
        filter.type = 'lowpass';
        filter.frequency.setValueAtTime(600, start);
        filter.frequency.linearRampToValueAtTime(1100, start + duration * 0.5);
        filter.frequency.linearRampToValueAtTime(700, start + duration);
        filter.Q.value = 0.4;
        filter.connect(out);
        for (const [type, detune, gain] of [['sawtooth', -7, 0.35], ['sawtooth', 7, 0.35], ['triangle', 0, 0.6]]) {
            const osc = ctx.createOscillator();
            osc.type = type;
            osc.frequency.value = midiToHz(midi);
            osc.detune.value = detune;
            const g = ctx.createGain();
            g.gain.value = gain;
            osc.connect(g).connect(filter);
            osc.start(start);
            osc.stop(start + duration + 0.1);
        }
        this.envelope(out, start, Math.min(2.5, duration / 3), level, Math.min(3, duration / 2.5), start + duration);
        out.connect(this.musicBus);
        out.connect(this.reverbSend);
    }

    /** Elektrische piano: FM-synthese met een snel uitstervende 'tik'. */
    epiano(midi, start, velocity = 0.5) {
        const { ctx } = this;
        const f = midiToHz(midi);
        const carrier = ctx.createOscillator();
        carrier.frequency.value = f;
        const modulator = ctx.createOscillator();
        modulator.frequency.value = f;
        const modGain = ctx.createGain();
        modGain.gain.setValueAtTime(f * 1.4, start);
        modGain.gain.exponentialRampToValueAtTime(f * 0.05, start + 0.6);
        modulator.connect(modGain).connect(carrier.frequency);
        const out = ctx.createGain();
        const level = 0.09 * velocity;
        out.gain.setValueAtTime(0.0001, start);
        out.gain.linearRampToValueAtTime(level, start + 0.008);
        out.gain.exponentialRampToValueAtTime(level * 0.35, start + 0.5);
        out.gain.exponentialRampToValueAtTime(0.0001, start + 3);
        carrier.connect(out);
        out.connect(this.musicBus);
        out.connect(this.reverbSend);
        for (const node of [carrier, modulator]) { node.start(start); node.stop(start + 3.1); }
    }

    /** Pianoachtige aanslag: grondtoon met boventonen en een lange uitsterving. */
    pluck(midi, start, velocity = 0.5, length = 4) {
        const { ctx } = this;
        const f = midiToHz(midi);
        const out = ctx.createGain();
        const filter = ctx.createBiquadFilter();
        filter.type = 'lowpass';
        filter.frequency.setValueAtTime(2800, start);
        filter.frequency.exponentialRampToValueAtTime(700, start + length);
        filter.connect(out);
        for (const [mult, gain, type] of [[1, 0.7, 'triangle'], [2, 0.18, 'sine'], [3, 0.06, 'sine'], [4.01, 0.03, 'sine']]) {
            const osc = ctx.createOscillator();
            osc.type = type;
            osc.frequency.value = f * mult;
            const g = ctx.createGain();
            g.gain.value = gain;
            osc.connect(g).connect(filter);
            osc.start(start);
            osc.stop(start + length + 0.1);
        }
        const level = 0.12 * velocity;
        out.gain.setValueAtTime(0.0001, start);
        out.gain.linearRampToValueAtTime(level, start + 0.006);
        out.gain.exponentialRampToValueAtTime(level * 0.4, start + 0.4);
        out.gain.exponentialRampToValueAtTime(0.0001, start + length);
        out.connect(this.musicBus);
        out.connect(this.reverbSend);
    }

    bass(midi, start, duration, level = 0.12) {
        const { ctx } = this;
        const osc = ctx.createOscillator();
        osc.type = 'sine';
        osc.frequency.value = midiToHz(midi);
        const out = ctx.createGain();
        this.envelope(out, start, 0.04, level, Math.min(0.8, duration / 2), start + duration);
        osc.connect(out).connect(this.musicBus);
        osc.start(start);
        osc.stop(start + duration + 0.1);
    }

    kick(start) {
        const { ctx } = this;
        const osc = ctx.createOscillator();
        osc.frequency.setValueAtTime(110, start);
        osc.frequency.exponentialRampToValueAtTime(42, start + 0.12);
        const out = ctx.createGain();
        out.gain.setValueAtTime(0.24, start);
        out.gain.exponentialRampToValueAtTime(0.0001, start + 0.38);
        osc.connect(out).connect(this.musicBus);
        osc.start(start);
        osc.stop(start + 0.4);
    }

    brush(start, level = 0.06, decay = 0.2, frequency = 1800) {
        const { ctx } = this;
        const source = ctx.createBufferSource();
        source.buffer = this.noiseBuffers.white;
        const filter = ctx.createBiquadFilter();
        filter.type = 'bandpass';
        filter.frequency.value = frequency;
        filter.Q.value = 0.8;
        const out = ctx.createGain();
        out.gain.setValueAtTime(level, start);
        out.gain.exponentialRampToValueAtTime(0.0001, start + decay);
        source.connect(filter).connect(out).connect(this.musicBus);
        source.start(start, Math.random() * 7, decay + 0.05);
    }

    // ---------- stijlen ----------

    chordAt(step, stepsPerChord) {
        const chordIndex = Math.floor(step / stepsPerChord);
        const progression = PROGRESSIONS[Math.floor(chordIndex / 8) % PROGRESSIONS.length];
        return progression[chordIndex % progression.length];
    }

    /** Plant de muziek een stukje vooruit; wordt elke 200 ms aangeroepen. */
    schedule(until = null) {
        const ctx = this.ctx;
        const ahead = until ?? ctx.currentTime + 0.6;
        while (this.style && this.nextTime < ahead) {
            const t = this.nextTime;
            const s = this.step;

            if (this.style === 'ambient') {
                // Elke stap is 1 tel van 1,5 s; een akkoord duurt 8 tellen.
                const beat = 1.5;
                const chord = this.chordAt(s, 8);
                if (s % 8 === 0) {
                    const length = beat * 8 + 2.5;
                    chord.notes.forEach((n) => this.pad(n, t, length, 0.045));
                    this.pad(chord.bass, t, length, 0.03);
                }
                if (Math.random() < 0.28) {
                    const note = PENTATONIC[Math.floor(Math.random() * PENTATONIC.length)] + 12;
                    this.pluck(note, t + Math.random() * 0.4, 0.22, 5);
                }
                this.nextTime += beat;
            } else if (this.style === 'piano') {
                // 66 tellen per minuut, achtsten; een akkoord duurt twee maten.
                const eighth = 60 / 66 / 2;
                const chord = this.chordAt(s, 16);
                const pos = s % 16;
                if (pos === 0) this.pluck(chord.bass, t, 1.3, 6);
                if (pos === 8) this.pluck(chord.bass + 7, t, 0.75, 5);
                const pattern = [0, 1, 2, 3, 2, 1];
                if (pos % 2 === 0 || Math.random() < 0.25) {
                    const note = chord.notes[pattern[(s >> 1) % pattern.length] % chord.notes.length] + 12;
                    const swing = (pos % 2) * eighth * 0.12;
                    this.pluck(note, t + swing, 0.65 + Math.random() * 0.35, 4);
                }
                if (pos === 4 && Math.random() < 0.5) {
                    this.pluck(PENTATONIC[Math.floor(Math.random() * 5) + 4] + 12, t, 0.5, 5);
                }
                this.nextTime += eighth;
            } else if (this.style === 'lofi') {
                // 72 tellen per minuut, zestienden met swing; een akkoord per maat.
                const sixteenth = 60 / 72 / 4;
                const chord = this.chordAt(s, 16);
                const pos = s % 16;
                const swing = pos % 2 ? sixteenth * 0.28 : 0;
                const when = t + swing;
                if (pos === 0) {
                    chord.notes.forEach((n, k) => this.epiano(n, when + k * 0.012, 0.55));
                    this.bass(chord.bass, when, sixteenth * 7, 0.11);
                }
                if (pos === 6) chord.notes.slice(1).forEach((n, k) => this.epiano(n, when + k * 0.01, 0.35));
                if (pos === 10) this.bass(chord.bass + (Math.random() < 0.5 ? 7 : 12), when, sixteenth * 5, 0.08);
                if (pos === 0 || pos === 7 || (pos === 10 && Math.random() < 0.4)) this.kick(when);
                if (pos === 4 || pos === 12) this.brush(when, 0.07, 0.22, 1600);
                if (pos % 2 === 0) this.brush(when, pos % 4 === 2 ? 0.02 : 0.012, 0.05, 8000);
                if (pos % 4 === 2 && Math.random() < 0.35) {
                    const note = PENTATONIC[Math.floor(Math.random() * PENTATONIC.length)] + 12;
                    this.epiano(note, when, 0.3);
                }
                this.nextTime += sixteenth;
            }
            this.step++;
        }
    }

    // ---------- achtergrondgeluid ----------

    startAmbience(kind) {
        const { ctx } = this;
        const nodes = [];
        const out = ctx.createGain();
        out.gain.setValueAtTime(0.0001, ctx.currentTime);
        out.gain.linearRampToValueAtTime(1, ctx.currentTime + 2);
        out.connect(this.ambienceBus);

        if (kind === 'rain') {
            const source = this.noiseSource('pink');
            const low = ctx.createBiquadFilter(); low.type = 'lowpass'; low.frequency.value = 5200;
            const high = ctx.createBiquadFilter(); high.type = 'highpass'; high.frequency.value = 350;
            const g = ctx.createGain(); g.gain.value = 0.6;
            source.connect(high).connect(low).connect(g).connect(out);
            // Langzaam aanzwellende en afnemende bui
            const lfo = ctx.createOscillator(); lfo.frequency.value = 0.05;
            const lfoGain = ctx.createGain(); lfoGain.gain.value = 0.15;
            lfo.connect(lfoGain).connect(g.gain); lfo.start();
            const patter = this.noiseSource('white');
            const band = ctx.createBiquadFilter(); band.type = 'bandpass'; band.frequency.value = 2500; band.Q.value = 0.6;
            const pg = ctx.createGain(); pg.gain.value = 0.05;
            patter.connect(band).connect(pg).connect(out);
            nodes.push(source, lfo, patter);
        } else if (kind === 'fire') {
            const source = this.noiseSource('brown');
            const low = ctx.createBiquadFilter(); low.type = 'lowpass'; low.frequency.value = 500;
            const g = ctx.createGain(); g.gain.value = 0.55;
            source.connect(low).connect(g).connect(out);
            nodes.push(source);
            // Knisperen: losse, korte tikjes op willekeurige momenten
            const crackle = () => {
                if (this.ambience !== 'fire') return;
                const t = ctx.currentTime + 0.05;
                const pops = 1 + Math.floor(Math.random() * 3);
                for (let k = 0; k < pops; k++) {
                    const src = ctx.createBufferSource();
                    src.buffer = this.noiseBuffers.white;
                    const bp = ctx.createBiquadFilter(); bp.type = 'bandpass';
                    bp.frequency.value = 1500 + Math.random() * 3500; bp.Q.value = 2;
                    const pg = ctx.createGain();
                    const level = 0.08 + Math.random() * 0.25;
                    const start = t + k * Math.random() * 0.05;
                    pg.gain.setValueAtTime(level, start);
                    pg.gain.exponentialRampToValueAtTime(0.0001, start + 0.015 + Math.random() * 0.04);
                    src.connect(bp).connect(pg).connect(out);
                    src.start(start, Math.random() * 7, 0.08);
                }
                this.crackleTimer = setTimeout(crackle, 60 + Math.random() * 420);
            };
            crackle();
        } else if (kind === 'noise') {
            const source = this.noiseSource('brown');
            const low = ctx.createBiquadFilter(); low.type = 'lowpass'; low.frequency.value = 900;
            const g = ctx.createGain(); g.gain.value = 0.5;
            source.connect(low).connect(g).connect(out);
            nodes.push(source);
        }
        this.ambienceNodes = nodes;
        this.ambienceOut = out;
    }

    stopAmbience() {
        clearTimeout(this.crackleTimer);
        if (!this.ambienceOut) return;
        const { ctx } = this;
        const out = this.ambienceOut;
        const nodes = this.ambienceNodes;
        out.gain.cancelScheduledValues(ctx.currentTime);
        out.gain.setValueAtTime(out.gain.value, ctx.currentTime);
        out.gain.linearRampToValueAtTime(0.0001, ctx.currentTime + 1.5);
        setTimeout(() => { nodes.forEach((n) => { try { n.stop(); } catch (e) { /* al gestopt */ } }); out.disconnect(); }, 1700);
        this.ambienceOut = null;
        this.ambienceNodes = [];
    }

    // ---------- bediening ----------

    async play({ style, ambience, musicLevel, ambienceLevel }) {
        const running = await this.resume();
        this.setLevels(musicLevel ?? this.musicLevel, ambienceLevel ?? this.ambienceLevel);
        this.setStyle(style);
        this.setAmbience(ambience);
        return running;
    }

    setStyle(style) {
        const { ctx } = this;
        if (!ctx || style === this.style) return;
        const bus = this.musicBus.gain;
        bus.cancelScheduledValues(ctx.currentTime);
        bus.setValueAtTime(bus.value, ctx.currentTime);

        if (!style || !STYLES[style]) {
            bus.linearRampToValueAtTime(0, ctx.currentTime + 1.5);
            this.style = null;
            clearInterval(this.timer);
            this.timer = null;
            return;
        }

        const switching = this.style !== null;
        this.style = style;
        this.musicFilter.frequency.setTargetAtTime(style === 'lofi' ? 2600 : 5000, ctx.currentTime, 0.5);
        this.step = 0;
        this.nextTime = ctx.currentTime + (switching ? 0.8 : 0.15);
        if (switching) bus.linearRampToValueAtTime(0, ctx.currentTime + 0.7);
        bus.linearRampToValueAtTime(this.musicLevel, ctx.currentTime + (switching ? 2.5 : 2));
        if (!this.timer) this.timer = setInterval(() => this.schedule(), 200);
        this.schedule();
    }

    setAmbience(kind) {
        if (!this.ctx || kind === this.ambience) return;
        this.stopAmbience();
        this.ambience = AMBIENCES[kind] ? kind : null;
        if (this.ambience) this.startAmbience(this.ambience);
    }

    setLevels(musicLevel, ambienceLevel) {
        this.musicLevel = musicLevel;
        this.ambienceLevel = ambienceLevel;
        if (!this.ctx) return;
        const now = this.ctx.currentTime;
        if (this.style) this.musicBus.gain.setTargetAtTime(musicLevel, now, 0.1);
        this.ambienceBus.gain.setTargetAtTime(ambienceLevel, now, 0.1);
    }

    /** Alles rustig uitfaden. */
    stop() {
        this.setStyle(null);
        this.setAmbience(null);
    }

    get playing() {
        return Boolean(this.style || this.ambience);
    }
}
