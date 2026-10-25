import { texToSpeech } from './tex-to-speech';

/**
 * Voorlezen met de spraakfunctie van de browser (Web Speech API): lokaal en zonder account.
 * Werkt op elke pagina met een element [data-read-aloud]; formules worden als gesproken Nederlands voorgelezen.
 */

const BLOCKS = 'h1, h2, h3, h4, p, li, blockquote, figcaption, dt, dd, tr, .callout-header, .exercise-question, .math-display';
const SKIP = 'template, script, style, svg, button, select, textarea, input, .hint, .solution, .feedback, .sr-only, .eyebrow, [aria-hidden="true"], [data-read-skip], .katex-mathml';
const ABBREVIATIONS = [
    [/\bv\.\s?Chr\./g, 'voor Christus'], [/\bn\.\s?Chr\./g, 'na Christus'], [/\bca\./g, 'circa'],
    [/\bbijv\./g, 'bijvoorbeeld'], [/\bd\.w\.z\./g, 'dat wil zeggen'], [/\bo\.a\./g, 'onder andere'],
    [/\bi\.p\.v\./g, 'in plaats van'], [/\bt\.o\.v\./g, 'ten opzichte van'], [/\bm\.b\.v\./g, 'met behulp van'],
    [/\benz\./g, 'enzovoort'], [/\bresp\./g, 'respectievelijk'], [/\bvgl\./g, 'vergelijk'], [/\bnl\./g, 'namelijk'],
    [/\bz\.g\./g, 'zogenaamd'], [/\bp\.\s?(\d)/g, 'pagina $1'], [/\binv\./g, 'inventaris'],
    // 1914–1918, 3500 – 3000: "tot"
    [/(\d)\s?[–—]\s?(\d)/g, '$1 tot $2'],
];

const STORE = { voice: 'reader.voice', rate: 'reader.rate', follow: 'reader.follow' };

function load(key, fallback) {
    try { return localStorage.getItem(key) ?? fallback; } catch (e) { return fallback; }
}

function save(key, value) {
    try { localStorage.setItem(key, value); } catch (e) { /* geen opslag beschikbaar */ }
}

/** Nederlandse stemmen, de natuurlijkst klinkende eerst. */
export function dutchVoices() {
    if (!('speechSynthesis' in window)) return [];
    const score = (v) => (/natural|online|neural/i.test(v.name) ? 10 : 0) + (/google/i.test(v.name) ? 4 : 0)
        + (/^nl[-_]NL/i.test(v.lang) ? 2 : 0) + (v.default ? 0.5 : 0);
    return window.speechSynthesis.getVoices()
        .filter((v) => /^nl\b|^nl[-_]/i.test(v.lang))
        .sort((a, b) => score(b) - score(a));
}

export function preferredVoice() {
    const voices = dutchVoices();
    const saved = load(STORE.voice, '');
    return voices.find((v) => v.voiceURI === saved) ?? voices[0] ?? null;
}

export function voiceLabel(voice) {
    const region = /BE/i.test(voice.lang) ? 'Vlaams' : 'Nederlands';
    const name = voice.name.replace(/^Microsoft\s+/i, '').replace(/\s*\(.*\)\s*$/, '').replace(/\s+Online$/i, '').replace(/\s*-\s*Dutch.*$/i, '');
    const quality = /natural|neural/i.test(voice.name) ? ' · natuurlijk' : '';
    return `${name} (${region}${quality})`;
}

/** Tekst van een element zoals je hem hoort: formules uitgesproken, afkortingen voluit. */
function texOf(math) {
    const annotation = math.querySelector('annotation[encoding="application/x-tex"]');
    return annotation ? annotation.textContent : math.textContent;
}

export function speakableText(el, blockSelector = BLOCKS) {
    // Een losse formuleregel
    if (el.matches('.math')) return texToSpeech(texOf(el));

    const clone = el.cloneNode(true);

    // Geneste blokken lezen we apart voor (bijv. een alinea in een lijstitem).
    clone.querySelectorAll(blockSelector).forEach((child) => { if (!child.matches('.math')) child.remove(); });

    clone.querySelectorAll('.math').forEach((math) => {
        math.replaceWith(document.createTextNode(` ${texToSpeech(texOf(math))} `));
    });
    clone.querySelectorAll(SKIP).forEach((node) => node.remove());

    if (el.matches('tr')) {
        return [...clone.children].map((cell) => cell.textContent.trim()).filter(Boolean).join(', ');
    }

    let text = clone.textContent;
    if (el.matches('.callout-header')) {
        text = [...clone.children].map((c) => c.textContent.trim()).filter(Boolean).join(': ');
    }
    for (const [pattern, replacement] of ABBREVIATIONS) text = text.replace(pattern, replacement);
    return text.replace(/\s+/g, ' ').replace(/\s+([,.;:!?])/g, '$1').trim();
}

/** Deel lange tekst op in zinnen: korte uitingen lopen betrouwbaarder in alle browsers. */
export function chunk(text, max = 220) {
    const sentences = text.match(/[^.!?;]+[.!?;]+["'”’)]*\s*|[^.!?;]+$/g) ?? [text];
    const out = [];
    let current = '';
    for (const sentence of sentences) {
        if ((current + sentence).length > max && current) { out.push(current.trim()); current = ''; }
        if (sentence.length > max) {
            for (const part of sentence.split(/(?<=,)\s+/)) {
                if ((current + part).length > max && current) { out.push(current.trim()); current = ''; }
                current += `${part} `;
            }
        } else {
            current += sentence;
        }
    }
    if (current.trim()) out.push(current.trim());
    return out;
}

function isVisible(el) {
    return el.getClientRects().length > 0 && getComputedStyle(el).visibility !== 'hidden';
}

export function collectBlocks(root = document) {
    const blocks = [];
    root.querySelectorAll('[data-read-aloud]').forEach((container) => {
        container.querySelectorAll(BLOCKS).forEach((el) => {
            if (el.closest(SKIP) || !isVisible(el)) return;
            // Een oefenvraag lezen we als geheel, met de keuzemogelijkheden erbij.
            if (el.parentElement?.closest('.exercise-question, .callout-header')) return;
            if (el.matches('.math-display') && el.parentElement?.closest('p, li, td, th')) return;
            if (el.matches('.exercise-question')) {
                const options = [...(el.closest('.exercise')?.querySelectorAll('form label:not(.sr-only)') ?? [])]
                    .map((label) => speakableText(label, '__none__')).filter(Boolean);
                const text = speakableText(el, '__none__');
                blocks.push({ el, text: `Oefening. ${text}${options.length ? ` Keuzes: ${options.join('; ')}.` : ''}` });
                return;
            }
            const text = speakableText(el);
            if (text.length < 2) return;
            blocks.push({ el, text });
        });
    });
    return blocks;
}

export function reader() {
    return {
        supported: 'speechSynthesis' in window,
        available: false,
        open: false,
        playing: false,
        showSettings: false,
        voices: [],
        voiceURI: '',
        rate: Number.parseFloat(load(STORE.rate, '1')) || 1,
        follow: load(STORE.follow, '1') === '1',
        blocks: [],
        index: 0,
        chunks: [],
        chunkIndex: 0,
        session: 0,

        init() {
            this.available = this.supported && document.querySelector('[data-read-aloud]') !== null;
            if (!this.available) return;
            window.speechSynthesis.cancel();
            this.loadVoices();
            window.speechSynthesis.addEventListener?.('voiceschanged', () => this.loadVoices());
            window.addEventListener('pagehide', () => window.speechSynthesis.cancel());

            // Klik op een alinea terwijl de voorleesbalk open is: lees vanaf daar.
            document.addEventListener('click', (event) => {
                if (!this.open || event.target.closest('a, button, input, label, select, textarea, summary, [data-reader-bar]')) return;
                if (!window.getSelection()?.isCollapsed) return;
                const index = this.blocks.findIndex((b) => b.el.contains(event.target));
                if (index >= 0) this.startAt(index);
            });
            document.addEventListener('keydown', (event) => {
                if (this.open && event.key === 'Escape') this.close();
            });
        },

        loadVoices() {
            this.voices = dutchVoices().map((v) => ({ uri: v.voiceURI, label: voiceLabel(v) }));
            this.voiceURI = preferredVoice()?.voiceURI ?? '';
        },

        get progress() {
            return this.blocks.length ? `${Math.min(this.index + 1, this.blocks.length)} / ${this.blocks.length}` : '';
        },

        toggle() {
            if (!this.open) { this.start(); return; }
            this.playing ? this.pause() : this.resume();
        },

        start() {
            this.blocks = collectBlocks();
            if (!this.blocks.length) return;
            this.open = true;
            document.body.classList.add('reader-open');
            // Begin bij de eerste alinea die in beeld is.
            const first = this.blocks.findIndex((b) => b.el.getBoundingClientRect().bottom > 80);
            this.startAt(Math.max(0, first));
        },

        startAt(index) {
            this.index = Math.max(0, Math.min(index, this.blocks.length - 1));
            this.chunks = chunk(this.blocks[this.index].text);
            this.chunkIndex = 0;
            this.playing = true;
            this.highlight();
            this.speak();
        },

        speak() {
            const session = ++this.session;
            window.speechSynthesis.cancel();
            const text = this.chunks[this.chunkIndex];
            if (!text) { this.advance(session); return; }
            const utterance = new SpeechSynthesisUtterance(text);
            const voice = window.speechSynthesis.getVoices().find((v) => v.voiceURI === this.voiceURI);
            if (voice) utterance.voice = voice;
            utterance.lang = voice?.lang ?? 'nl-NL';
            utterance.rate = this.rate;
            utterance.onend = () => this.advance(session);
            utterance.onerror = (event) => {
                if (event.error === 'interrupted' || event.error === 'canceled') return;
                this.advance(session);
            };
            window.speechSynthesis.speak(utterance);
        },

        advance(session) {
            if (session !== this.session || !this.playing) return;
            if (++this.chunkIndex < this.chunks.length) { this.speak(); return; }
            if (this.index + 1 < this.blocks.length) { this.startAt(this.index + 1); return; }
            this.playing = false;
            this.clearHighlight();
        },

        // Pauzeren als stoppen en later de zin opnieuw beginnen: pause() is niet in elke browser betrouwbaar.
        pause() {
            this.playing = false;
            this.session++;
            window.speechSynthesis.cancel();
        },

        resume() {
            if (this.index >= this.blocks.length || !this.blocks.length) { this.start(); return; }
            this.playing = true;
            this.highlight();
            this.speak();
        },

        previous() { this.startAt(this.chunkIndex > 0 ? this.index : this.index - 1); },
        nextBlock() { if (this.index + 1 < this.blocks.length) this.startAt(this.index + 1); },

        close() {
            this.pause();
            this.open = false;
            this.showSettings = false;
            this.clearHighlight();
            document.body.classList.remove('reader-open');
        },

        setRate(value) {
            this.rate = Number.parseFloat(value) || 1;
            save(STORE.rate, String(this.rate));
            if (this.playing) this.speak();
        },

        setVoice(uri) {
            this.voiceURI = uri;
            save(STORE.voice, uri);
            if (this.playing) this.speak();
        },

        setFollow(value) {
            this.follow = value;
            save(STORE.follow, value ? '1' : '0');
        },

        highlight() {
            this.clearHighlight();
            const el = this.blocks[this.index]?.el;
            if (!el) return;
            el.classList.add('reading-now');
            if (!this.follow) return;
            const rect = el.getBoundingClientRect();
            if (rect.top < 80 || rect.bottom > window.innerHeight - 120) {
                el.scrollIntoView({ block: 'center', behavior: 'smooth' });
            }
        },

        clearHighlight() {
            document.querySelectorAll('.reading-now').forEach((el) => el.classList.remove('reading-now'));
        },
    };
}

/** Stemkeuze op de instellingenpagina. */
export function voiceSettings() {
    return {
        supported: 'speechSynthesis' in window,
        voices: [],
        voiceURI: '',
        rate: Number.parseFloat(load(STORE.rate, '1')) || 1,

        init() {
            if (!this.supported) return;
            const refresh = () => {
                this.voices = dutchVoices().map((v) => ({ uri: v.voiceURI, label: voiceLabel(v) }));
                this.voiceURI = preferredVoice()?.voiceURI ?? '';
            };
            refresh();
            window.speechSynthesis.addEventListener?.('voiceschanged', refresh);
        },

        save() {
            save(STORE.voice, this.voiceURI);
            save(STORE.rate, String(this.rate));
        },

        test() {
            this.save();
            window.speechSynthesis.cancel();
            const utterance = new SpeechSynthesisUtterance(`Zo klinkt het voorlezen. De stelling van Pythagoras zegt: ${texToSpeech('a^2 + b^2 = c^2')}.`);
            const voice = window.speechSynthesis.getVoices().find((v) => v.voiceURI === this.voiceURI);
            if (voice) utterance.voice = voice;
            utterance.lang = voice?.lang ?? 'nl-NL';
            utterance.rate = this.rate;
            window.speechSynthesis.speak(utterance);
        },
    };
}
