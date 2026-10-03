import { formatNumber } from '../course';
import { compile } from './expression';

const W = 520;
const H = 360;
const fmt = (v, d = 2) => (Number.isFinite(v) ? formatNumber(Math.abs(v) < 1e-10 ? 0 : v, d) : '—');
const num = (v, fallback) => {
    if (v === undefined || v === null || String(v).trim() === '') return fallback;
    const n = Number(String(v).replace(',', '.'));
    return Number.isFinite(n) ? n : fallback;
};

/** "1*x^2 + -2*x + -3" → "x² − 2x − 3" */
function prettify(text) {
    return text
        .replace(/\s+/g, ' ')
        .replace(/\+\s*-\s*/g, '− ')
        .replace(/-\s*-\s*/g, '+ ')
        .replace(/(^|[^\d,.])1\s*\*\s*(?=[a-z(])/gi, '$1')
        .replace(/(^|[^\d,.])-1\s*\*\s*(?=[a-z(])/gi, '$1−')
        .replace(/(\d)\s*\*\s*(?=[a-z(])/gi, '$1')
        .replace(/\*/g, ' · ')
        .replace(/\^2(?![\d.])/g, '²')
        .replace(/\^3(?![\d.])/g, '³')
        .replace(/(^|[\s(])-/g, '$1−')
        .trim();
}

/** Gedeelde assen en rooster voor grafieken. */
function axes(view) {
    const { xmin, xmax, ymin, ymax } = view;
    const sx = (x) => ((x - xmin) / (xmax - xmin)) * W;
    const sy = (y) => H - ((y - ymin) / (ymax - ymin)) * H;
    const step = (range) => {
        const raw = range / 10;
        const mag = 10 ** Math.floor(Math.log10(raw));
        return [1, 2, 5, 10].map((m) => m * mag).find((s) => s >= raw);
    };
    const dx = step(xmax - xmin);
    const dy = step(ymax - ymin);
    let svg = '';
    for (let x = Math.ceil(xmin / dx) * dx; x <= xmax + 1e-9; x += dx) {
        svg += `<line x1="${sx(x)}" y1="0" x2="${sx(x)}" y2="${H}" stroke="#eef0f3"/>`;
        if (Math.abs(x) > 1e-9) svg += `<text x="${sx(x)}" y="${Math.min(H - 4, Math.max(12, sy(0) + 14))}" text-anchor="middle" font-size="10" fill="#9aa5b1" font-family="Inter, sans-serif">${fmt(x, 2)}</text>`;
    }
    for (let y = Math.ceil(ymin / dy) * dy; y <= ymax + 1e-9; y += dy) {
        svg += `<line x1="0" y1="${sy(y)}" x2="${W}" y2="${sy(y)}" stroke="#eef0f3"/>`;
        if (Math.abs(y) > 1e-9) svg += `<text x="${Math.min(W - 4, Math.max(4, sx(0) - 6))}" y="${sy(y) + 3}" text-anchor="end" font-size="10" fill="#9aa5b1" font-family="Inter, sans-serif">${fmt(y, 2)}</text>`;
    }
    if (ymin <= 0 && ymax >= 0) svg += `<line x1="0" y1="${sy(0)}" x2="${W}" y2="${sy(0)}" stroke="#616e7c" stroke-width="1.2"/>`;
    if (xmin <= 0 && xmax >= 0) svg += `<line x1="${sx(0)}" y1="0" x2="${sx(0)}" y2="${H}" stroke="#616e7c" stroke-width="1.2"/>`;
    svg += `<text x="${W - 6}" y="${Math.min(H - 6, Math.max(12, sy(0) - 6))}" text-anchor="end" font-size="12" font-style="italic" fill="#616e7c" font-family="serif">x</text>`;
    svg += `<text x="${Math.min(W - 12, Math.max(8, sx(0) + 8))}" y="14" font-size="12" font-style="italic" fill="#616e7c" font-family="serif">y</text>`;
    return { svg, sx, sy };
}

/**
 * Functieplotter met schuifregelaars voor parameters.
 * Opties: fn, fn2, xmin/xmax/ymin/ymax, tangent (raaklijn), area (oppervlakte), roots (nulpunten).
 */
export function functionPlot(config = {}) {
    const fnText = config.fn ?? 'a*x + b';
    const fn2Text = config.fn2 ?? null;
    const letters = [...new Set(`${fnText} ${fn2Text ?? ''}`.replace(/sqrt|sin|cos|tan|ln|log|abs|exp|pi/g, '').match(/[a-df-wyz]/g) ?? [])].sort();
    const params = letters.map((name) => ({
        name,
        value: num(config[name], name === 'a' ? 1 : 0),
        min: num(config[`${name}min`], -10),
        max: num(config[`${name}max`], 10),
        step: num(config[`${name}step`], 0.1),
    }));

    let f;
    let f2 = null;
    let error = '';
    try {
        f = compile(fnText);
        if (fn2Text) f2 = compile(fn2Text);
    } catch (e) {
        error = `Fout in functie: ${e.message}`;
        f = () => NaN;
    }

    return {
        fnText,
        fn2Text,
        params,
        error,
        view: {
            xmin: num(config.xmin, -10),
            xmax: num(config.xmax, 10),
            ymin: num(config.ymin, -10),
            ymax: num(config.ymax, 10),
        },
        showTangent: Boolean(config.tangent),
        showArea: Boolean(config.area),
        showRoots: Boolean(config.roots),
        x0: num(config.x0, 1),
        lower: num(config.lower, 0),
        upper: num(config.upper, 2),
        W,
        H,

        vars(x) {
            const v = { x };
            this.params.forEach((p) => { v[p.name] = Number(p.value); });
            return v;
        },

        y(x) {
            return f(this.vars(x));
        },

        y2(x) {
            return f2 ? f2(this.vars(x)) : NaN;
        },

        path(fun, sx, sy) {
            const { xmin, xmax, ymin, ymax } = this.view;
            const span = ymax - ymin;
            let d = '';
            let drawing = false;
            for (let i = 0; i <= 400; i++) {
                const x = xmin + ((xmax - xmin) * i) / 400;
                const y = fun(x);
                if (!Number.isFinite(y) || y < ymin - span * 2 || y > ymax + span * 2) {
                    drawing = false;
                    continue;
                }
                d += `${drawing ? 'L' : 'M'}${sx(x).toFixed(1)} ${sy(y).toFixed(1)} `;
                drawing = true;
            }
            return d;
        },

        get slope() {
            const h = 1e-5;
            return (this.y(this.x0 + h) - this.y(this.x0 - h)) / (2 * h);
        },

        get integral() {
            // Simpson met 200 stukjes.
            const n = 200;
            const a = Math.min(this.lower, this.upper);
            const b = Math.max(this.lower, this.upper);
            const h = (b - a) / n;
            let s = this.y(a) + this.y(b);
            for (let i = 1; i < n; i++) s += this.y(a + i * h) * (i % 2 ? 4 : 2);
            return (s * h) / 3;
        },

        get roots() {
            const { xmin, xmax } = this.view;
            const found = [];
            const n = 800;
            let px = xmin;
            let py = this.y(px);
            for (let i = 1; i <= n; i++) {
                const x = xmin + ((xmax - xmin) * i) / n;
                const y = this.y(x);
                if (Number.isFinite(py) && Number.isFinite(y) && (py === 0 || py * y < 0)) {
                    let lo = px;
                    let hi = x;
                    for (let k = 0; k < 50; k++) {
                        const mid = (lo + hi) / 2;
                        if (this.y(lo) * this.y(mid) <= 0) hi = mid; else lo = mid;
                    }
                    const r = (lo + hi) / 2;
                    if (!found.some((q) => Math.abs(q - r) < 1e-6)) found.push(r);
                }
                px = x;
                py = y;
            }
            return found.slice(0, 6);
        },

        get svg() {
            const { svg, sx, sy } = axes(this.view);
            let out = svg;

            if (this.showArea) {
                const a = Math.min(this.lower, this.upper);
                const b = Math.max(this.lower, this.upper);
                let d = `M${sx(a)} ${sy(0)} `;
                for (let i = 0; i <= 120; i++) {
                    const x = a + ((b - a) * i) / 120;
                    const y = Math.max(this.view.ymin, Math.min(this.view.ymax, this.y(x)));
                    d += `L${sx(x).toFixed(1)} ${sy(Number.isFinite(y) ? y : 0).toFixed(1)} `;
                }
                d += `L${sx(b)} ${sy(0)} Z`;
                out += `<path d="${d}" fill="#3b5bdb" opacity=".18"/>`;
            }

            if (f2) out += `<path d="${this.path((x) => this.y2(x), sx, sy)}" fill="none" stroke="#8a5a24" stroke-width="2.5"/>`;
            out += `<path d="${this.path((x) => this.y(x), sx, sy)}" fill="none" stroke="#3b5bdb" stroke-width="2.5"/>`;

            if (this.showTangent) {
                const y0 = this.y(this.x0);
                const m = this.slope;
                if (Number.isFinite(y0) && Number.isFinite(m)) {
                    const { xmin, xmax } = this.view;
                    out += `<line x1="${sx(xmin)}" y1="${sy(y0 + m * (xmin - this.x0))}" x2="${sx(xmax)}" y2="${sy(y0 + m * (xmax - this.x0))}" stroke="#6741d9" stroke-width="1.8" stroke-dasharray="6 4"/>`;
                    out += `<circle cx="${sx(this.x0)}" cy="${sy(y0)}" r="5" fill="#6741d9" stroke="#fff" stroke-width="2"/>`;
                }
            }

            if (this.showRoots) {
                this.roots.forEach((r) => {
                    out += `<circle cx="${sx(r)}" cy="${sy(0)}" r="4.5" fill="#fff" stroke="#c92a2a" stroke-width="2"/>`;
                });
            }

            return out;
        },

        get formula() {
            let text = this.fnText;
            this.params.forEach((p) => {
                // fmt geeft een komma als decimaalteken; dat botst niet met de operatoren.
                text = text.replace(new RegExp(`(?<![a-z])${p.name}(?![a-z])`, 'g'), fmt(Number(p.value), 2));
            });
            return `y = ${prettify(text)}`;
        },

        fmt,
    };
}

/**
 * Coördinatenrooster: klik om punten te plaatsen; toont (x; y) en het kwadrant.
 */
export function coordinateGrid(config = {}) {
    const size = Math.max(3, Math.min(10, Math.round(num(config.size, 6))));
    const parsePoints = (text) => [...String(text ?? '').matchAll(/\(\s*(-?[\d.,]+)\s*[;,]\s*(-?[\d.,]+)\s*\)/g)]
        .map((m) => ({ x: num(m[1], 0), y: num(m[2], 0) }));

    return {
        size,
        points: parsePoints(config.points),
        connect: Boolean(config.connect),
        W: 360,
        H: 360,

        get view() {
            return { xmin: -this.size - 0.5, xmax: this.size + 0.5, ymin: -this.size - 0.5, ymax: this.size + 0.5 };
        },

        get svg() {
            const { xmin, xmax, ymin, ymax } = this.view;
            const sx = (x) => ((x - xmin) / (xmax - xmin)) * this.W;
            const sy = (y) => this.H - ((y - ymin) / (ymax - ymin)) * this.H;
            let svg = '';
            for (let i = -this.size; i <= this.size; i++) {
                svg += `<line x1="${sx(i)}" y1="0" x2="${sx(i)}" y2="${this.H}" stroke="${i === 0 ? '#616e7c' : '#eef0f3'}" stroke-width="${i === 0 ? 1.4 : 1}"/>`;
                svg += `<line x1="0" y1="${sy(i)}" x2="${this.W}" y2="${sy(i)}" stroke="${i === 0 ? '#616e7c' : '#eef0f3'}" stroke-width="${i === 0 ? 1.4 : 1}"/>`;
                if (i !== 0) {
                    svg += `<text x="${sx(i)}" y="${sy(0) + 13}" text-anchor="middle" font-size="10" fill="#9aa5b1" font-family="Inter, sans-serif">${i}</text>`;
                    svg += `<text x="${sx(0) - 5}" y="${sy(i) + 3}" text-anchor="end" font-size="10" fill="#9aa5b1" font-family="Inter, sans-serif">${i}</text>`;
                }
            }
            const q = (x, y, t) => `<text x="${sx(x)}" y="${sy(y)}" text-anchor="middle" font-size="12" fill="#cbd2d9" font-family="Inter, sans-serif">${t}</text>`;
            svg += q(this.size / 2, this.size - 0.5, 'I') + q(-this.size / 2, this.size - 0.5, 'II') + q(-this.size / 2, -this.size + 0.3, 'III') + q(this.size / 2, -this.size + 0.3, 'IV');
            if (this.connect && this.points.length > 1) {
                svg += `<polyline points="${this.points.map((p) => `${sx(p.x)},${sy(p.y)}`).join(' ')}" fill="none" stroke="#3b5bdb" stroke-width="2"/>`;
            }
            this.points.forEach((p, i) => {
                svg += `<circle cx="${sx(p.x)}" cy="${sy(p.y)}" r="6" fill="#3b5bdb" stroke="#fff" stroke-width="2"/>`;
                svg += `<text x="${sx(p.x) + 9}" y="${sy(p.y) - 8}" font-size="12" font-weight="600" fill="#1f2933" font-family="Inter, sans-serif">${String.fromCharCode(65 + i)}</text>`;
            });
            return svg;
        },

        quadrant(p) {
            if (p.x === 0 && p.y === 0) return 'oorsprong';
            if (p.x === 0) return 'op de y-as';
            if (p.y === 0) return 'op de x-as';
            if (p.x > 0) return p.y > 0 ? 'kwadrant I' : 'kwadrant IV';
            return p.y > 0 ? 'kwadrant II' : 'kwadrant III';
        },

        place(event) {
            const rect = this.$refs.svg.getBoundingClientRect();
            const { xmin, xmax, ymin, ymax } = this.view;
            const x = Math.round(xmin + ((event.clientX - rect.left) / rect.width) * (xmax - xmin));
            const y = Math.round(ymax - ((event.clientY - rect.top) / rect.height) * (ymax - ymin));
            if (Math.abs(x) > this.size || Math.abs(y) > this.size) return;
            const existing = this.points.findIndex((p) => p.x === x && p.y === y);
            if (existing >= 0) this.points.splice(existing, 1);
            else if (this.points.length < 8) this.points.push({ x, y });
        },

        get slope() {
            if (this.points.length !== 2) return null;
            const [a, b] = this.points;
            return b.x === a.x ? null : (b.y - a.y) / (b.x - a.x);
        },

        fmt,
    };
}
