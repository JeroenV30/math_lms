import { clampInt, formatNumber } from '../course';

const parseValues = (text) => String(text ?? '')
    .split(/[;\s]+|,(?=\s)/)
    .map((v) => Number(v.replace(',', '.')))
    .filter((v) => Number.isFinite(v));

/**
 * Gemiddelde, mediaan en modus van een kleine dataset, met een stippendiagram.
 * Waarden toevoegen of weghalen laat zien hoe gevoelig elke maat is (uitschieters!).
 */
export function stats({ values = '4; 6; 6; 7; 9' } = {}) {
    return {
        values: parseValues(values).slice(0, 30),
        input: '',

        get sorted() {
            return [...this.values].sort((a, b) => a - b);
        },

        get mean() {
            return this.values.length ? this.values.reduce((t, v) => t + v, 0) / this.values.length : null;
        },

        get median() {
            const s = this.sorted;
            if (!s.length) return null;
            const m = Math.floor(s.length / 2);
            return s.length % 2 ? s[m] : (s[m - 1] + s[m]) / 2;
        },

        get modes() {
            const counts = {};
            this.values.forEach((v) => { counts[v] = (counts[v] ?? 0) + 1; });
            const max = Math.max(0, ...Object.values(counts));
            if (max <= 1) return [];
            return Object.keys(counts).filter((k) => counts[k] === max).map(Number).sort((a, b) => a - b);
        },

        get range() {
            return this.values.length ? this.sorted[this.sorted.length - 1] - this.sorted[0] : null;
        },

        get svg() {
            if (!this.values.length) return '';
            const lo = Math.min(0, ...this.values);
            const hi = Math.max(...this.values, lo + 1);
            const W = 520;
            const x = (v) => 20 + ((v - lo) / (hi - lo)) * (W - 40);
            const stacks = {};
            let svg = `<line x1="10" y1="120" x2="${W - 10}" y2="120" stroke="#1f2933" stroke-width="1.5"/>`;
            const step = Math.max(1, Math.ceil((hi - lo) / 10));
            for (let t = Math.ceil(lo / step) * step; t <= hi; t += step) {
                svg += `<line x1="${x(t)}" y1="117" x2="${x(t)}" y2="124" stroke="#616e7c"/><text x="${x(t)}" y="138" text-anchor="middle" font-size="11" fill="#616e7c" font-family="Inter, sans-serif">${formatNumber(t)}</text>`;
            }
            this.sorted.forEach((v) => {
                stacks[v] = (stacks[v] ?? 0) + 1;
                svg += `<circle cx="${x(v)}" cy="${120 - stacks[v] * 13}" r="5.5" fill="#3b5bdb" opacity=".8"/>`;
            });
            const marker = (v, color, text, y) => `<line x1="${x(v)}" y1="22" x2="${x(v)}" y2="120" stroke="${color}" stroke-width="1.5" stroke-dasharray="4 3"/><text x="${x(v)}" y="${y}" text-anchor="middle" font-size="11" font-weight="600" fill="${color}" font-family="Inter, sans-serif">${text}</text>`;
            svg += marker(this.mean, '#8a5a24', 'gemiddelde', 14);
            svg += marker(this.median, '#6741d9', 'mediaan', this.median === this.mean ? 2 : 14);
            return svg;
        },

        add() {
            const v = Number(String(this.input).replace(',', '.'));
            if (Number.isFinite(v) && this.input !== '' && this.values.length < 30) {
                this.values.push(v);
                this.input = '';
            }
        },

        remove(i) {
            this.values.splice(i, 1);
        },

        fmt: (v) => (v === null ? '—' : formatNumber(v, 2)),
    };
}

/**
 * Machten: herhaald vermenigvuldigen en hoe snel dat groeit.
 */
export function powers({ base = 2, max = 10 } = {}) {
    return {
        base: clampInt(base, 1, 10, 2),
        max: clampInt(max, 2, 12, 10),

        get rows() {
            return Array.from({ length: this.max + 1 }, (_, n) => ({
                n,
                value: this.base ** n,
                product: n === 0 ? '1 (afspraak)' : Array(n).fill(this.base).join(' × '),
            }));
        },

        width(value) {
            const top = this.base ** this.max;
            return top <= 1 ? 100 : Math.max(0.5, (value / top) * 100);
        },

        format: (v) => formatNumber(v),
    };
}
