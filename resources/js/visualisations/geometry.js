import { clampInt, formatNumber } from '../course';

const fmt = (v, d = 2) => formatNumber(v, d);

/**
 * Hoeken: sleep het been, zie de grootte en de soort hoek.
 */
export function angle({ value = 60 } = {}) {
    return {
        value: clampInt(value, 0, 360, 60),
        dragging: false,

        get kind() {
            const v = this.value;
            if (v === 0) return 'nulhoek';
            if (v < 90) return 'scherpe hoek';
            if (v === 90) return 'rechte hoek';
            if (v < 180) return 'stompe hoek';
            if (v === 180) return 'gestrekte hoek';
            if (v < 360) return 'inspringende hoek';
            return 'volle hoek';
        },

        get svg() {
            const cx = 160;
            const cy = 150;
            const r = 120;
            const rad = (this.value * Math.PI) / 180;
            const ex = cx + r * Math.cos(rad);
            const ey = cy - r * Math.sin(rad);
            const ar = 40;
            const ax = cx + ar * Math.cos(rad);
            const ay = cy - ar * Math.sin(rad);
            const large = this.value > 180 ? 1 : 0;
            let svg = '';

            // Gradenboog met streepjes per 10°.
            for (let d = 0; d <= 180; d += 10) {
                const t = (d * Math.PI) / 180;
                const inner = d % 30 === 0 ? r - 14 : r - 8;
                svg += `<line x1="${cx + inner * Math.cos(t)}" y1="${cy - inner * Math.sin(t)}" x2="${cx + r * Math.cos(t)}" y2="${cy - r * Math.sin(t)}" stroke="#cbd2d9" stroke-width="1"/>`;
                if (d % 30 === 0) {
                    svg += `<text x="${cx + (r + 14) * Math.cos(t)}" y="${cy - (r + 14) * Math.sin(t) + 4}" text-anchor="middle" font-size="10" fill="#9aa5b1" font-family="Inter, sans-serif">${d}</text>`;
                }
            }
            svg += `<path d="M ${cx - r} ${cy} A ${r} ${r} 0 0 1 ${cx + r} ${cy}" fill="none" stroke="#e4e7eb"/>`;

            if (this.value === 90) {
                svg += `<path d="M ${cx + 18} ${cy} L ${cx + 18} ${cy - 18} L ${cx} ${cy - 18}" fill="none" stroke="#3b5bdb" stroke-width="2"/>`;
            } else if (this.value > 0 && this.value < 360) {
                svg += `<path d="M ${cx + ar} ${cy} A ${ar} ${ar} 0 ${large} 0 ${ax} ${ay}" fill="#eef2ff" stroke="#3b5bdb" stroke-width="2"/>`;
            }

            svg += `<line x1="${cx}" y1="${cy}" x2="${cx + r}" y2="${cy}" stroke="#1f2933" stroke-width="2.5" stroke-linecap="round"/>`;
            svg += `<line x1="${cx}" y1="${cy}" x2="${ex}" y2="${ey}" stroke="#1f2933" stroke-width="2.5" stroke-linecap="round"/>`;
            svg += `<circle cx="${ex}" cy="${ey}" r="8" fill="#3b5bdb" stroke="#fff" stroke-width="2"/>`;
            svg += `<circle cx="${cx}" cy="${cy}" r="3" fill="#1f2933"/>`;
            return svg;
        },

        fromEvent(event) {
            const rect = this.$refs.svg.getBoundingClientRect();
            const p = event.touches ? event.touches[0] : event;
            const x = ((p.clientX - rect.left) / rect.width) * 320 - 160;
            const y = 150 - ((p.clientY - rect.top) / rect.height) * 300;
            let deg = Math.round((Math.atan2(y, x) * 180) / Math.PI);
            if (deg < 0) deg += 360;
            this.value = deg;
        },

        down(e) {
            this.dragging = true;
            this.fromEvent(e);
        },

        move(e) {
            if (this.dragging) this.fromEvent(e);
        },
    };
}

/**
 * Omtrek en oppervlakte van rechthoek, driehoek, parallellogram en cirkel.
 */
export function shapeArea({ shape = 'rectangle' } = {}) {
    return {
        shape: ['rectangle', 'triangle', 'parallelogram', 'circle'].includes(shape) ? shape : 'rectangle',
        a: 6,
        b: 4,
        r: 3,

        get area() {
            switch (this.shape) {
                case 'triangle':
                    return (this.a * this.b) / 2;
                case 'circle':
                    return Math.PI * this.r * this.r;
                default:
                    return this.a * this.b;
            }
        },

        get perimeter() {
            switch (this.shape) {
                case 'rectangle':
                    return 2 * (this.a + this.b);
                case 'circle':
                    return 2 * Math.PI * this.r;
                default:
                    return null;
            }
        },

        get formula() {
            switch (this.shape) {
                case 'triangle':
                    return `A = \\tfrac{1}{2} \\times b \\times h = \\tfrac{1}{2} \\times ${this.a} \\times ${this.b} = ${fmt(this.area).replace(',', '{,}')}`;
                case 'parallelogram':
                    return `A = b \\times h = ${this.a} \\times ${this.b} = ${fmt(this.area).replace(',', '{,}')}`;
                case 'circle':
                    return `A = \\pi r^2 = \\pi \\times ${this.r}^2 \\approx ${fmt(this.area).replace(',', '{,}')}`;
                default:
                    return `A = l \\times b = ${this.a} \\times ${this.b} = ${this.area}`;
            }
        },

        get svg() {
            const s = 30;
            const ox = 20;
            const oy = 20;
            const grid = [];
            for (let x = 0; x <= 12; x++) grid.push(`<line x1="${ox + x * s}" y1="${oy}" x2="${ox + x * s}" y2="${oy + 8 * s}" stroke="#eef0f3"/>`);
            for (let y = 0; y <= 8; y++) grid.push(`<line x1="${ox}" y1="${oy + y * s}" x2="${ox + 12 * s}" y2="${oy + y * s}" stroke="#eef0f3"/>`);
            const fill = 'fill="#eef2ff" stroke="#3b5bdb" stroke-width="2"';
            let shapeSvg;
            const bottom = oy + 8 * s;

            switch (this.shape) {
                case 'triangle':
                    shapeSvg = `<polygon points="${ox},${bottom} ${ox + this.a * s},${bottom} ${ox + 2 * s},${bottom - this.b * s}" ${fill}/>`
                        + `<line x1="${ox + 2 * s}" y1="${bottom}" x2="${ox + 2 * s}" y2="${bottom - this.b * s}" stroke="#8a5a24" stroke-dasharray="4 3" stroke-width="1.5"/>`;
                    break;
                case 'parallelogram':
                    shapeSvg = `<polygon points="${ox},${bottom} ${ox + this.a * s},${bottom} ${ox + (this.a + 2) * s},${bottom - this.b * s} ${ox + 2 * s},${bottom - this.b * s}" ${fill}/>`
                        + `<line x1="${ox + 2 * s}" y1="${bottom}" x2="${ox + 2 * s}" y2="${bottom - this.b * s}" stroke="#8a5a24" stroke-dasharray="4 3" stroke-width="1.5"/>`;
                    break;
                case 'circle':
                    shapeSvg = `<circle cx="${ox + 6 * s}" cy="${oy + 4 * s}" r="${this.r * s}" ${fill}/>`
                        + `<line x1="${ox + 6 * s}" y1="${oy + 4 * s}" x2="${ox + (6 + this.r) * s}" y2="${oy + 4 * s}" stroke="#8a5a24" stroke-width="1.5"/>`;
                    break;
                default:
                    shapeSvg = `<rect x="${ox}" y="${bottom - this.b * s}" width="${this.a * s}" height="${this.b * s}" ${fill}/>`;
            }

            return grid.join('') + shapeSvg;
        },

        get maxA() {
            return this.shape === 'parallelogram' ? 10 : 12;
        },

        normalize() {
            this.a = clampInt(this.a, 1, this.maxA, 1);
            this.b = clampInt(this.b, 1, 8, 1);
            this.r = clampInt(this.r, 1, 4, 1);
        },

        fmt,
    };
}

/**
 * Pythagoras: verander a en b, zie c en de vierkanten op de zijden.
 */
export function pythagoras({ a = 3, b = 4 } = {}) {
    return {
        a: clampInt(a, 1, 12, 3),
        b: clampInt(b, 1, 12, 4),

        get c() {
            return Math.sqrt(this.a * this.a + this.b * this.b);
        },

        get isWhole() {
            return Number.isInteger(Math.round(this.c * 1e9) / 1e9);
        },

        /** Driehoek met de drie vierkanten; de viewBox volgt uit de punten zelf. */
        get figure() {
            const k = 20;
            const A = this.a * k;
            const B = this.b * k;
            const P = [0, 0];
            const Q = [0, -A];
            const R = [B, 0];
            const dx = R[0] - Q[0];
            const dy = R[1] - Q[1];
            const squares = {
                a: [P, Q, [-A, -A], [-A, 0]],
                b: [P, R, [B, B], [0, B]],
                c: [Q, R, [R[0] + dy, R[1] - dx], [Q[0] + dy, Q[1] - dx]],
            };
            const all = [...squares.a, ...squares.b, ...squares.c];
            const xs = all.map((p) => p[0]);
            const ys = all.map((p) => p[1]);
            const pad = 16;
            const box = [Math.min(...xs) - pad, Math.min(...ys) - pad, Math.max(...xs) - Math.min(...xs) + 2 * pad, Math.max(...ys) - Math.min(...ys) + 2 * pad];
            const pts = (arr) => arr.map((p) => p.join(',')).join(' ');
            const centre = (arr) => [arr.reduce((t, p) => t + p[0], 0) / 4, arr.reduce((t, p) => t + p[1], 0) / 4];
            const size = Math.max(11, Math.min(16, box[2] / 30));
            const label = ([x, y], t, c) => `<text x="${x}" y="${y + size / 3}" text-anchor="middle" font-size="${size}" font-weight="600" fill="${c}" font-family="Inter, sans-serif">${t}</text>`;
            const svg = `<polygon points="${pts(squares.a)}" fill="#eef2ff" stroke="#3b5bdb" stroke-width="1.5"/>`
                + `<polygon points="${pts(squares.b)}" fill="#faf6ee" stroke="#8a5a24" stroke-width="1.5"/>`
                + `<polygon points="${pts(squares.c)}" fill="#f5f2ff" stroke="#6741d9" stroke-width="1.5"/>`
                + `<polygon points="${pts([P, Q, R])}" fill="#fff" stroke="#1f2933" stroke-width="2.5"/>`
                + `<path d="M 0 -10 h 10 v 10" fill="none" stroke="#1f2933" stroke-width="1.5"/>`
                + label(centre(squares.a), `a² = ${this.a * this.a}`, '#3b5bdb')
                + label(centre(squares.b), `b² = ${this.b * this.b}`, '#8a5a24')
                + label(centre(squares.c), `c² = ${this.a * this.a + this.b * this.b}`, '#6741d9');
            return { svg, box: box.join(' ') };
        },

        get formula() {
            const sum = this.a * this.a + this.b * this.b;
            const c = this.isWhole ? String(Math.round(this.c)) : `\\sqrt{${sum}} \\approx ${fmt(this.c).replace(',', '{,}')}`;
            return `${this.a}^2 + ${this.b}^2 = ${this.a * this.a} + ${this.b * this.b} = ${sum} \\quad\\Rightarrow\\quad c = ${c}`;
        },

        normalize() {
            this.a = clampInt(this.a, 1, 12, 1);
            this.b = clampInt(this.b, 1, 12, 1);
        },
    };
}
