import { formatNumber } from '../course';

const fmt = (v, d = 2) => (Number.isFinite(v) ? formatNumber(Math.abs(v) < 1e-12 ? 0 : v, d) : '—');
const num = (v, fallback) => {
    if (v === undefined || v === null || String(v).trim() === '') return fallback;
    const n = Number(String(v).replace(',', '.'));
    return Number.isFinite(n) ? n : fallback;
};

/** Standaardnormale verdelingsfunctie Φ(z) via de foutfunctie (Abramowitz–Stegun 7.1.26). */
export function phi(z) {
    const t = 1 / (1 + 0.3275911 * Math.abs(z) / Math.SQRT2);
    const y = 1 - (((((1.061405429 * t - 1.453152027) * t) + 1.421413741) * t - 0.284496736) * t + 0.254829592) * t * Math.exp(-(z * z) / 2);
    return z >= 0 ? 0.5 * (1 + y) : 0.5 * (1 - y);
}

/** Kleine, reproduceerbare toevalsgenerator (mulberry32). */
function rng(seed) {
    let a = seed >>> 0;
    return () => {
        a |= 0; a = (a + 0x6d2b79f5) | 0;
        let t = Math.imul(a ^ (a >>> 15), 1 | a);
        t = (t + Math.imul(t ^ (t >>> 7), 61 | t)) ^ t;
        return ((t ^ (t >>> 14)) >>> 0) / 4294967296;
    };
}

/**
 * Normale verdeling: verschuif μ en σ en kleur de kans tussen twee grenzen.
 */
export function normalDistribution(config = {}) {
    return {
        mu: num(config.mu, 0),
        sigma: Math.max(0.1, num(config.sigma, 1)),
        lower: num(config.lower, num(config.mu, 0) - num(config.sigma, 1)),
        upper: num(config.upper, num(config.mu, 0) + num(config.sigma, 1)),
        xmin: num(config.xmin, num(config.mu, 0) - 4 * num(config.sigma, 1)),
        xmax: num(config.xmax, num(config.mu, 0) + 4 * num(config.sigma, 1)),
        W: 520,
        H: 260,
        // Vaste schaal: bij grotere σ wordt de klok zichtbaar lager en breder.
        peak: 1 / (Math.max(0.1, num(config.sigma, 1)) * 0.6 * Math.sqrt(2 * Math.PI)),

        pdf(x) {
            return Math.exp(-((x - this.mu) ** 2) / (2 * this.sigma ** 2)) / (this.sigma * Math.sqrt(2 * Math.PI));
        },

        get zLower() {
            return (Math.min(this.lower, this.upper) - this.mu) / this.sigma;
        },

        get zUpper() {
            return (Math.max(this.lower, this.upper) - this.mu) / this.sigma;
        },

        get probability() {
            return phi(this.zUpper) - phi(this.zLower);
        },

        get svg() {
            const { W, H, xmin, xmax } = this;
            const { peak } = this;
            const sx = (x) => ((x - xmin) / (xmax - xmin)) * W;
            const sy = (y) => H - 24 - (Math.min(y, peak) / peak) * (H - 40);
            let curve = '';
            let area = '';
            const a = Math.max(xmin, Math.min(this.lower, this.upper));
            const b = Math.min(xmax, Math.max(this.lower, this.upper));
            for (let i = 0; i <= 300; i++) {
                const x = xmin + ((xmax - xmin) * i) / 300;
                curve += `${i ? 'L' : 'M'}${sx(x).toFixed(1)} ${sy(this.pdf(x)).toFixed(1)} `;
            }
            if (b > a) {
                area = `M${sx(a)} ${sy(0)} `;
                for (let i = 0; i <= 120; i++) {
                    const x = a + ((b - a) * i) / 120;
                    area += `L${sx(x).toFixed(1)} ${sy(this.pdf(x)).toFixed(1)} `;
                }
                area += `L${sx(b)} ${sy(0)} Z`;
            }
            let svg = `<line x1="0" y1="${sy(0)}" x2="${W}" y2="${sy(0)}" stroke="#616e7c"/>`;
            for (let k = -3; k <= 3; k++) {
                const x = this.mu + k * this.sigma;
                if (x < xmin || x > xmax) continue;
                svg += `<line x1="${sx(x)}" y1="${sy(0)}" x2="${sx(x)}" y2="${sy(0) + 5}" stroke="#616e7c"/>`
                    + `<text x="${sx(x)}" y="${sy(0) + 17}" text-anchor="middle" font-size="10" fill="${k === 0 ? '#1f2933' : '#9aa5b1'}" font-family="Inter, sans-serif">${k === 0 ? 'μ' : (k > 0 ? '+' : '−') + Math.abs(k) + 'σ'}</text>`;
            }
            svg += `<path d="${area}" fill="#3b5bdb" opacity=".2"/>`;
            svg += `<path d="${curve}" fill="none" stroke="#3b5bdb" stroke-width="2.5"/>`;
            svg += `<line x1="${sx(this.mu)}" y1="${sy(0)}" x2="${sx(this.mu)}" y2="${sy(this.pdf(this.mu))}" stroke="#8a5a24" stroke-dasharray="4 3"/>`;
            return svg;
        },

        fmt,
    };
}

/**
 * Regressie: versleep punten en zie de regressielijn, r en R² veranderen.
 */
export function regression(config = {}) {
    const parse = (text) => [...String(text ?? '').matchAll(/\(\s*(-?[\d.,]+)\s*[;,]\s*(-?[\d.,]+)\s*\)/g)]
        .map((m) => ({ x: num(m[1], 0), y: num(m[2], 0) }));
    const points = parse(config.points);

    return {
        points: points.length >= 2 ? points : [{ x: 1, y: 2 }, { x: 2, y: 3 }, { x: 3, y: 5 }, { x: 4, y: 4 }, { x: 5, y: 7 }, { x: 6, y: 8 }],
        xmax: num(config.xmax, 10),
        ymax: num(config.ymax, 10),
        dragging: null,
        W: 400,
        H: 320,

        get stats() {
            const n = this.points.length;
            const mx = this.points.reduce((s, p) => s + p.x, 0) / n;
            const my = this.points.reduce((s, p) => s + p.y, 0) / n;
            let sxy = 0;
            let sxx = 0;
            let syy = 0;
            this.points.forEach((p) => {
                sxy += (p.x - mx) * (p.y - my);
                sxx += (p.x - mx) ** 2;
                syy += (p.y - my) ** 2;
            });
            const slope = sxx ? sxy / sxx : NaN;
            const r = sxx && syy ? sxy / Math.sqrt(sxx * syy) : NaN;
            return { n, mx, my, slope, intercept: my - slope * mx, r, r2: r * r };
        },

        sx(x) {
            return 30 + (x / this.xmax) * (this.W - 40);
        },

        sy(y) {
            return this.H - 30 - (y / this.ymax) * (this.H - 40);
        },

        get svg() {
            let svg = '';
            for (let i = 0; i <= this.xmax; i++) svg += `<line x1="${this.sx(i)}" y1="${this.sy(0)}" x2="${this.sx(i)}" y2="${this.sy(this.ymax)}" stroke="#eef0f3"/><text x="${this.sx(i)}" y="${this.sy(0) + 15}" text-anchor="middle" font-size="10" fill="#9aa5b1" font-family="Inter, sans-serif">${i}</text>`;
            for (let j = 0; j <= this.ymax; j++) svg += `<line x1="${this.sx(0)}" y1="${this.sy(j)}" x2="${this.sx(this.xmax)}" y2="${this.sy(j)}" stroke="#eef0f3"/><text x="${this.sx(0) - 6}" y="${this.sy(j) + 3}" text-anchor="end" font-size="10" fill="#9aa5b1" font-family="Inter, sans-serif">${j}</text>`;
            const { slope, intercept, mx, my } = this.stats;
            if (Number.isFinite(slope)) {
                const y0 = intercept;
                const y1 = intercept + slope * this.xmax;
                svg += `<line x1="${this.sx(0)}" y1="${this.sy(y0)}" x2="${this.sx(this.xmax)}" y2="${this.sy(y1)}" stroke="#8a5a24" stroke-width="2"/>`;
                this.points.forEach((p) => {
                    svg += `<line x1="${this.sx(p.x)}" y1="${this.sy(p.y)}" x2="${this.sx(p.x)}" y2="${this.sy(intercept + slope * p.x)}" stroke="#c92a2a" stroke-width="1" stroke-dasharray="3 3" opacity=".6"/>`;
                });
                svg += `<circle cx="${this.sx(mx)}" cy="${this.sy(my)}" r="4" fill="none" stroke="#8a5a24" stroke-width="2"/>`;
            }
            this.points.forEach((p, i) => {
                svg += `<circle data-i="${i}" cx="${this.sx(p.x)}" cy="${this.sy(p.y)}" r="7" fill="#3b5bdb" stroke="#fff" stroke-width="2" style="cursor:grab"/>`;
            });
            return svg;
        },

        toData(event) {
            const rect = this.$refs.svg.getBoundingClientRect();
            const p = event.touches ? event.touches[0] : event;
            const px = ((p.clientX - rect.left) / rect.width) * this.W;
            const py = ((p.clientY - rect.top) / rect.height) * this.H;
            const x = ((px - 30) / (this.W - 40)) * this.xmax;
            const y = ((this.H - 30 - py) / (this.H - 40)) * this.ymax;
            return { x: Math.round(Math.max(0, Math.min(this.xmax, x)) * 10) / 10, y: Math.round(Math.max(0, Math.min(this.ymax, y)) * 10) / 10 };
        },

        down(event) {
            const i = event.target?.dataset?.i;
            if (i !== undefined) {
                this.dragging = Number(i);
            } else if (this.points.length < 20) {
                this.points.push(this.toData(event));
            }
        },

        move(event) {
            if (this.dragging === null) return;
            this.points[this.dragging] = this.toData(event);
        },

        up() {
            this.dragging = null;
        },

        removeLast() {
            if (this.points.length > 2) this.points.pop();
        },

        get equation() {
            const { slope, intercept } = this.stats;
            if (!Number.isFinite(slope)) return 'geen lijn (alle x gelijk)';
            const sign = intercept < 0 ? '−' : '+';
            return `ŷ = ${fmt(slope, 3)}x ${sign} ${fmt(Math.abs(intercept), 3)}`;
        },

        fmt,
    };
}

/**
 * Steekproeven: trek herhaald steekproeven uit een populatie en zie de
 * steekproefgemiddelden zich rond μ verzamelen (en smaller worden bij grotere n).
 */
export function sampling(config = {}) {
    const random = rng(num(config.seed, 7));
    // Scheve populatie (bijv. reistijden in minuten) zodat de CLT zichtbaar wordt.
    const population = Array.from({ length: 2000 }, () => Math.round((-Math.log(1 - random()) * 12 + 5) * 10) / 10);
    const mu = population.reduce((s, v) => s + v, 0) / population.length;
    const sigma = Math.sqrt(population.reduce((s, v) => s + (v - mu) ** 2, 0) / population.length);

    return {
        n: Math.round(num(config.n, 10)),
        means: [],
        last: null,
        mu,
        sigma,
        random,
        W: 520,
        H: 200,

        draw(times = 1) {
            for (let t = 0; t < times; t++) {
                const sample = Array.from({ length: this.n }, () => population[Math.floor(this.random() * population.length)]);
                const mean = sample.reduce((s, v) => s + v, 0) / this.n;
                const sd = Math.sqrt(sample.reduce((s, v) => s + (v - mean) ** 2, 0) / (this.n - 1));
                this.last = { mean, sd, se: sd / Math.sqrt(this.n), low: mean - 1.96 * sd / Math.sqrt(this.n), high: mean + 1.96 * sd / Math.sqrt(this.n) };
                this.means.push(mean);
            }
        },

        reset() {
            this.means = [];
            this.last = null;
        },

        get se() {
            return this.sigma / Math.sqrt(this.n);
        },

        get spread() {
            if (this.means.length < 2) return null;
            const m = this.means.reduce((s, v) => s + v, 0) / this.means.length;
            return Math.sqrt(this.means.reduce((s, v) => s + (v - m) ** 2, 0) / (this.means.length - 1));
        },

        get covered() {
            return this.last ? this.last.low <= this.mu && this.mu <= this.last.high : null;
        },

        get svg() {
            const lo = 0;
            const hi = 50;
            const bins = 50;
            const counts = Array(bins).fill(0);
            this.means.forEach((m) => {
                const b = Math.floor(((m - lo) / (hi - lo)) * bins);
                if (b >= 0 && b < bins) counts[b]++;
            });
            const max = Math.max(1, ...counts);
            const bw = this.W / bins;
            const sx = (x) => ((x - lo) / (hi - lo)) * this.W;
            let svg = `<line x1="0" y1="${this.H - 20}" x2="${this.W}" y2="${this.H - 20}" stroke="#616e7c"/>`;
            for (let x = 0; x <= hi; x += 10) svg += `<text x="${sx(x)}" y="${this.H - 5}" text-anchor="middle" font-size="10" fill="#9aa5b1" font-family="Inter, sans-serif">${x}</text>`;
            counts.forEach((c, i) => {
                if (c) {
                    const h = (c / max) * (this.H - 40);
                    svg += `<rect x="${i * bw + 1}" y="${this.H - 20 - h}" width="${bw - 2}" height="${h}" fill="#3b5bdb" opacity=".75"/>`;
                }
            });
            svg += `<line x1="${sx(this.mu)}" y1="8" x2="${sx(this.mu)}" y2="${this.H - 20}" stroke="#8a5a24" stroke-width="2" stroke-dasharray="5 3"/>`;
            svg += `<text x="${sx(this.mu) + 4}" y="16" font-size="11" fill="#8a5a24" font-family="Inter, sans-serif">μ</text>`;
            if (this.last) {
                svg += `<line x1="${sx(this.last.low)}" y1="30" x2="${sx(this.last.high)}" y2="30" stroke="${this.covered ? '#2b8a3e' : '#c92a2a'}" stroke-width="3"/>`
                    + `<circle cx="${sx(this.last.mean)}" cy="30" r="4" fill="${this.covered ? '#2b8a3e' : '#c92a2a'}"/>`;
            }
            return svg;
        },

        fmt,
    };
}

/**
 * Dobbelstenen: gooi vaak en zie de relatieve frequentie naar de kans gaan.
 */
export function dice(config = {}) {
    const random = rng(num(config.seed, 3));
    const count = Math.min(3, Math.max(1, Math.round(num(config.dice, 1))));

    return {
        count,
        random,
        throws: 0,
        tally: {},
        last: [],

        get outcomes() {
            const min = this.count;
            const max = 6 * this.count;
            return Array.from({ length: max - min + 1 }, (_, i) => min + i);
        },

        theoretical(sum) {
            // Aantal manieren om 'sum' te gooien met 'count' dobbelstenen, gedeeld door 6^count.
            let ways = [1];
            for (let d = 0; d < this.count; d++) {
                const next = Array(ways.length + 6).fill(0);
                ways.forEach((w, s) => { for (let f = 1; f <= 6; f++) next[s + f] += w; });
                ways = next;
            }
            return (ways[sum] ?? 0) / 6 ** this.count;
        },

        roll(times) {
            for (let t = 0; t < times; t++) {
                const faces = Array.from({ length: this.count }, () => 1 + Math.floor(this.random() * 6));
                const sum = faces.reduce((s, f) => s + f, 0);
                this.tally[sum] = (this.tally[sum] ?? 0) + 1;
                this.throws++;
                this.last = faces;
            }
            this.tally = { ...this.tally };
        },

        reset() {
            this.throws = 0;
            this.tally = {};
            this.last = [];
        },

        relative(sum) {
            return this.throws ? (this.tally[sum] ?? 0) / this.throws : 0;
        },

        get svg() {
            const outs = this.outcomes;
            const W = 520;
            const H = 200;
            const bw = W / outs.length;
            const max = Math.max(...outs.map((s) => Math.max(this.theoretical(s), this.relative(s)))) * 1.15 || 1;
            let svg = `<line x1="0" y1="${H - 20}" x2="${W}" y2="${H - 20}" stroke="#616e7c"/>`;
            outs.forEach((s, i) => {
                const h = (this.relative(s) / max) * (H - 30);
                const th = (this.theoretical(s) / max) * (H - 30);
                svg += `<rect x="${i * bw + bw * 0.15}" y="${H - 20 - h}" width="${bw * 0.7}" height="${h}" fill="#3b5bdb" opacity=".7"/>`;
                svg += `<line x1="${i * bw + bw * 0.1}" y1="${H - 20 - th}" x2="${i * bw + bw * 0.9}" y2="${H - 20 - th}" stroke="#8a5a24" stroke-width="2.5"/>`;
                svg += `<text x="${i * bw + bw / 2}" y="${H - 5}" text-anchor="middle" font-size="10" fill="#616e7c" font-family="Inter, sans-serif">${s}</text>`;
            });
            return svg;
        },

        fmt,
    };
}
