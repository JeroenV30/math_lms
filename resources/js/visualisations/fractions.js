import { clampInt, formatNumber } from '../course';

const gcd = (a, b) => (b === 0 ? Math.abs(a) : gcd(b, a % b));

const parseFraction = (text) => {
    const m = String(text ?? '').match(/^\s*(\d+)\s*\/\s*(\d+)\s*$/);
    return m && Number(m[2]) > 0 ? { n: Number(m[1]), d: Number(m[2]) } : null;
};

/** SVG-balk of -cirkel voor een breuk n/d (als string: Alpine-templates werken niet binnen <svg>). */
function fractionSvg(n, d, shape, color) {
    const parts = Math.max(1, d);
    const wholes = Math.max(1, Math.ceil(n / parts));
    let svg = '';

    for (let w = 0; w < wholes; w++) {
        if (shape === 'circle') {
            const cx = 60 + w * 130;
            const r = 52;
            for (let i = 0; i < parts; i++) {
                const filled = w * parts + i < n;
                if (parts === 1) {
                    svg += `<circle cx="${cx}" cy="60" r="${r}" fill="${filled ? color : '#f5f7fa'}" stroke="#1f2933" stroke-width="1.5"/>`;
                    continue;
                }
                const a0 = (i / parts) * 2 * Math.PI - Math.PI / 2;
                const a1 = ((i + 1) / parts) * 2 * Math.PI - Math.PI / 2;
                const large = a1 - a0 > Math.PI ? 1 : 0;
                const p = (a) => `${(cx + r * Math.cos(a)).toFixed(2)} ${(60 + r * Math.sin(a)).toFixed(2)}`;
                svg += `<path d="M ${cx} 60 L ${p(a0)} A ${r} ${r} 0 ${large} 1 ${p(a1)} Z" fill="${filled ? color : '#f5f7fa'}" stroke="#1f2933" stroke-width="1.5"/>`;
            }
        } else {
            const y = w * 46;
            const width = 520;
            for (let i = 0; i < parts; i++) {
                const filled = w * parts + i < n;
                svg += `<rect x="${(i * width) / parts}" y="${y}" width="${width / parts}" height="34" fill="${filled ? color : '#f5f7fa'}" stroke="#1f2933" stroke-width="1.5"/>`;
            }
        }
    }

    return svg;
}

/**
 * Breuk als balk of cirkel; optioneel naast een tweede breuk om gelijkwaardigheid te laten zien.
 */
export function fraction({ numerator = 3, denominator = 4, shape = 'bar', compare = null } = {}) {
    const other = parseFraction(compare);

    return {
        n: clampInt(numerator, 0, 48, 3),
        d: clampInt(denominator, 1, 24, 4),
        shape: shape === 'circle' ? 'circle' : 'bar',
        compareOn: other !== null,
        n2: other?.n ?? 6,
        d2: other?.d ?? 8,

        get wholes() {
            return Math.max(1, Math.ceil(this.n / this.d));
        },

        get height() {
            return this.shape === 'circle' ? 120 : this.wholes * 46;
        },

        get width() {
            return this.shape === 'circle' ? this.wholes * 130 : 520;
        },

        get svg() {
            return fractionSvg(this.n, this.d, this.shape, '#3b5bdb');
        },

        get wholes2() {
            return Math.max(1, Math.ceil(this.n2 / this.d2));
        },

        get height2() {
            return this.shape === 'circle' ? 120 : this.wholes2 * 46;
        },

        get width2() {
            return this.shape === 'circle' ? this.wholes2 * 130 : 520;
        },

        get svg2() {
            return fractionSvg(this.n2, this.d2, this.shape, '#8a5a24');
        },

        get simplified() {
            const g = gcd(this.n, this.d) || 1;
            return `${this.n / g}/${this.d / g}`;
        },

        get isSimplified() {
            return gcd(this.n, this.d) === 1;
        },

        get mixed() {
            if (this.n < this.d || this.n % this.d === 0) return null;
            return `${Math.floor(this.n / this.d)} ${this.n % this.d}/${this.d}`;
        },

        get decimal() {
            return formatNumber(this.n / this.d, 4);
        },

        get percent() {
            return formatNumber((this.n / this.d) * 100, 2);
        },

        get comparison() {
            const left = this.n * this.d2;
            const right = this.n2 * this.d;
            const sign = left === right ? '=' : left > right ? '>' : '<';
            return `\\frac{${this.n}}{${this.d}} ${sign} \\frac{${this.n2}}{${this.d2}}`;
        },

        get comparisonText() {
            const left = this.n * this.d2;
            const right = this.n2 * this.d;
            if (left === right) return 'Even groot: de breuken zijn gelijkwaardig.';
            return `Kruislings vergelijken: ${this.n} × ${this.d2} = ${left} en ${this.n2} × ${this.d} = ${right}.`;
        },

        normalize() {
            this.d = clampInt(this.d, 1, 24, 1);
            this.n = clampInt(this.n, 0, this.d * 3, 0);
            this.d2 = clampInt(this.d2, 1, 24, 1);
            this.n2 = clampInt(this.n2, 0, this.d2 * 3, 0);
        },
    };
}

/**
 * Procenten: een honderdveld van 10 × 10.
 */
export function percentGrid({ value = 35 } = {}) {
    return {
        value: clampInt(value, 0, 100, 35),

        get svg() {
            let svg = '';
            for (let i = 0; i < 100; i++) {
                const x = (i % 10) * 26;
                const y = Math.floor(i / 10) * 26;
                svg += `<rect x="${x}" y="${y}" width="24" height="24" rx="3" fill="${i < this.value ? '#3b5bdb' : '#eef0f3'}"/>`;
            }
            return svg;
        },

        get fraction() {
            const g = gcd(this.value, 100) || 1;
            return `\\frac{${this.value}}{100} = \\frac{${this.value / g}}{${100 / g}} = ${formatNumber(this.value / 100, 2).replace(',', '{,}')}`;
        },
    };
}

/**
 * Verhoudingstabel: vul een waarde in, de andere rij rekent evenredig mee.
 */
export function ratioTable({ a = 3, b = 12, labelA = 'aantal', labelB = 'prijs', unitA = '', unitB = '' } = {}) {
    return {
        a: Number(a) || 3,
        b: Number(b) || 12,
        labelA,
        labelB,
        unitA,
        unitB,
        columns: [1, 2, 0.5, 10].map((f) => ({ top: (Number(a) || 3) * f })),

        bottom(top) {
            const v = Number(String(top).replace(',', '.'));
            return Number.isFinite(v) ? formatNumber((v * this.b) / this.a, 4) : '?';
        },

        factor(top) {
            const v = Number(String(top).replace(',', '.'));
            if (!Number.isFinite(v) || this.a === 0) return '';
            const f = v / this.a;
            return f >= 1 ? `× ${formatNumber(f, 4)}` : `: ${formatNumber(1 / f, 4)}`;
        },

        get perUnit() {
            return formatNumber(this.b / this.a, 4);
        },

        add() {
            if (this.columns.length < 6) this.columns.push({ top: this.a * 3 });
        },
    };
}
