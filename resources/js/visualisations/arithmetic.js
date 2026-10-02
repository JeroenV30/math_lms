import { clampInt, formatNumber } from '../course';

const digitsOf = (n, width) => String(n).padStart(width, ' ').split('').map((c) => (c === ' ' ? null : Number(c)));

/**
 * Kolomsgewijs optellen en aftrekken, stap voor stap met onthouden en lenen.
 */
export function columnArithmetic({ a = 487, b = 356, op = '+' } = {}) {
    return {
        a: clampInt(a, 0, 999999, 487),
        b: clampInt(b, 0, 999999, 356),
        op: op === '-' ? '-' : '+',
        step: 0,

        get top() {
            return this.op === '-' ? Math.max(this.a, this.b) : this.a;
        },

        get bottom() {
            return this.op === '-' ? Math.min(this.a, this.b) : this.b;
        },

        get swapped() {
            return this.op === '-' && this.b > this.a;
        },

        get width() {
            return Math.max(String(this.top).length, String(this.bottom).length) + (this.op === '+' ? 1 : 0);
        },

        get columns() {
            return Array.from({ length: this.width }, (_, i) => i);
        },

        get topDigits() {
            return digitsOf(this.top, this.width);
        },

        get bottomDigits() {
            return digitsOf(this.bottom, this.width);
        },

        /** Alle stappen vooraf berekenen, van rechts naar links. */
        get steps() {
            const steps = [];
            const top = this.topDigits;
            const bottom = this.bottomDigits;
            let carry = 0;
            const lastCol = this.width - 1;
            const firstCol = this.op === '+' ? 1 : 0;

            for (let col = lastCol; col >= firstCol; col--) {
                const t = top[col] ?? 0;
                const d = bottom[col] ?? 0;
                const place = ['eenheden', 'tientallen', 'honderdtallen', 'duizendtallen', 'tienduizendtallen', 'honderdduizendtallen'][lastCol - col];

                if (this.op === '+') {
                    const sum = t + d + carry;
                    const digit = sum % 10;
                    const carryOut = Math.floor(sum / 10);
                    const carryText = carry ? ` + 1 (onthouden)` : '';
                    steps.push({
                        col,
                        digit,
                        carryInto: carryOut ? col - 1 : null,
                        text: `${place[0].toUpperCase() + place.slice(1)}: ${t} + ${d}${carryText} = ${sum}. Schrijf ${digit} op${carryOut ? ' en onthoud 1 voor de volgende kolom' : ''}.`,
                    });
                    carry = carryOut;
                } else {
                    let available = t - carry;
                    let borrowed = false;
                    if (available < d) {
                        available += 10;
                        borrowed = true;
                    }
                    const digit = available - d;
                    const borrowText = carry ? ` (er is al 1 geleend, dus ${t} − 1 = ${t - 1})` : '';
                    steps.push({
                        col,
                        digit,
                        borrowFrom: borrowed ? col - 1 : null,
                        text: borrowed
                            ? `${place[0].toUpperCase() + place.slice(1)}${borrowText}: ${t - carry} − ${d} gaat niet. Leen 1 van de kolom links: ${available} − ${d} = ${digit}.`
                            : `${place[0].toUpperCase() + place.slice(1)}${borrowText}: ${t - carry} − ${d} = ${digit}.`,
                    });
                    carry = borrowed ? 1 : 0;
                }
            }

            if (this.op === '+' && carry) {
                steps.push({ col: 0, digit: 1, text: 'De laatste 1 die je onthield, schrijf je vooraan op.' });
            }

            return steps;
        },

        get done() {
            return this.step >= this.steps.length;
        },

        get current() {
            return this.steps[this.step - 1] ?? null;
        },

        resultDigit(col) {
            const s = this.steps.slice(0, this.step).find((x) => x.col === col);
            if (!s) return '';
            // Voorloopnullen bij aftrekken niet tonen.
            if (this.done && this.op === '-' && s.digit === 0 && col < this.width - 1) {
                const higher = this.steps.filter((x) => x.col < col);
                if (higher.every((x) => x.digit === 0)) return '';
            }
            return s.digit;
        },

        mark(col) {
            const done = this.steps.slice(0, this.step);
            if (this.op === '+') return done.some((s) => s.carryInto === col) ? '1' : '';
            return done.some((s) => s.borrowFrom === col) ? '−1' : '';
        },

        get answer() {
            return this.op === '+' ? this.top + this.bottom : this.top - this.bottom;
        },

        next() {
            if (!this.done) this.step++;
        },

        reset() {
            this.a = clampInt(this.a, 0, 999999, 0);
            this.b = clampInt(this.b, 0, 999999, 0);
            this.step = 0;
        },

        all() {
            this.step = this.steps.length;
        },

        format: formatNumber,
    };
}

const placeParts = (n) => {
    const parts = [];
    const s = String(n);
    for (let i = 0; i < s.length; i++) {
        const value = Number(s[i]) * 10 ** (s.length - 1 - i);
        if (value > 0) parts.push(value);
    }
    return parts.length ? parts : [0];
};

/**
 * Rechthoekmodel: a × b als oppervlakte, gesplitst naar plaatswaarde.
 */
export function areaModel({ a = 37, b = 14 } = {}) {
    return {
        a: clampInt(a, 1, 999, 37),
        b: clampInt(b, 1, 999, 14),
        W: 520,
        H: 260,

        get aParts() {
            return placeParts(this.a);
        },

        get bParts() {
            return placeParts(this.b);
        },

        get cells() {
            // Breedte en hoogte niet strikt evenredig: kleine delen blijven leesbaar.
            const scale = (parts, total, size) => {
                const min = size * 0.22;
                const raw = parts.map((p) => (p / total) * size);
                const boosted = raw.map((r) => Math.max(r, min));
                const factor = size / boosted.reduce((s, x) => s + x, 0);
                return boosted.map((x) => x * factor);
            };
            const ws = scale(this.aParts, this.a, this.W);
            const hs = scale(this.bParts, this.b, this.H);
            const cells = [];
            let y = 0;
            this.bParts.forEach((bp, j) => {
                let x = 0;
                this.aParts.forEach((ap, i) => {
                    cells.push({ x, y, w: ws[i], h: hs[j], a: ap, b: bp, product: ap * bp, key: `${i}-${j}` });
                    x += ws[i];
                });
                y += hs[j];
            });
            return cells;
        },

        get columnLabels() {
            const out = [];
            let x = 0;
            this.cells.filter((c) => c.y === 0).forEach((c) => {
                out.push({ x: x + c.w / 2, label: formatNumber(c.a) });
                x += c.w;
            });
            return out;
        },

        get rowLabels() {
            return this.cells.filter((c) => c.x === 0).map((c) => ({ y: c.y + c.h / 2, label: formatNumber(c.b) }));
        },

        /** Volledige SVG-inhoud (Alpine-templates werken niet binnen <svg>). */
        get svg() {
            const font = 'font-family="Inter, sans-serif"';
            const fills = ['#eef2ff', '#dfe6fd', '#e9ecf5', '#f5f7fa', '#e3e9fe', '#eef0f6'];
            let svg = '';
            this.columnLabels.forEach((l) => {
                svg += `<text x="${l.x}" y="-10" text-anchor="middle" font-size="15" fill="#3e4c59" ${font}>${l.label}</text>`;
            });
            this.rowLabels.forEach((l) => {
                svg += `<text x="-10" y="${l.y + 5}" text-anchor="end" font-size="15" fill="#3e4c59" ${font}>${l.label}</text>`;
            });
            this.cells.forEach((c, i) => {
                const cx = c.x + c.w / 2;
                const cy = c.y + c.h / 2;
                svg += `<rect x="${c.x}" y="${c.y}" width="${c.w}" height="${c.h}" fill="${fills[i % fills.length]}" stroke="#3b5bdb" stroke-width="1.5"/>`
                    + `<text x="${cx}" y="${cy - 2}" text-anchor="middle" font-size="13" fill="#616e7c" ${font}>${formatNumber(c.a)} × ${formatNumber(c.b)}</text>`
                    + `<text x="${cx}" y="${cy + 17}" text-anchor="middle" font-size="17" font-weight="600" fill="#1f2933" ${font}>${formatNumber(c.product)}</text>`;
            });
            return svg;
        },

        get sum() {
            return this.cells.map((c) => formatNumber(c.product)).join(' + ');
        },

        get product() {
            return this.a * this.b;
        },

        normalize() {
            this.a = clampInt(this.a, 1, 999, 1);
            this.b = clampInt(this.b, 1, 999, 1);
        },

        format: formatNumber,
    };
}

/**
 * Egyptische vermenigvuldiging: verdubbelen en de juiste rijen optellen.
 */
export function egyptianMultiplication({ a = 13, b = 24 } = {}) {
    return {
        a: clampInt(a, 1, 999, 13),
        b: clampInt(b, 1, 9999, 24),
        step: 0,

        get rows() {
            const rows = [];
            for (let m = 1; m <= this.a; m *= 2) {
                rows.push({ multiple: m, value: m * this.b });
            }
            let rest = this.a;
            for (let i = rows.length - 1; i >= 0; i--) {
                rows[i].selected = rest >= rows[i].multiple;
                if (rows[i].selected) rest -= rows[i].multiple;
            }
            return rows;
        },

        get totalSteps() {
            return this.rows.length + 1;
        },

        visible(i) {
            return i < this.step;
        },

        get showSelection() {
            return this.step >= this.totalSteps;
        },

        get selected() {
            return this.rows.filter((r) => r.selected);
        },

        get multiplesSum() {
            return this.selected.map((r) => r.multiple).join(' + ');
        },

        get valuesSum() {
            return this.selected.map((r) => formatNumber(r.value)).join(' + ');
        },

        get explanation() {
            if (this.step === 0) return `Begin met 1 × ${this.b}. Verdubbel daarna steeds.`;
            if (this.step < this.rows.length) {
                const r = this.rows[this.step - 1];
                return `${r.multiple} × ${this.b} = ${formatNumber(r.value)}. Verdubbel: ${r.multiple * 2} × ${this.b}.`;
            }
            if (this.step === this.rows.length) {
                return `Volgende verdubbeling (${this.rows[this.rows.length - 1].multiple * 2}) is groter dan ${this.a}: stop. Kies nu de rijen die samen ${this.a} maken.`;
            }
            return `${this.a} = ${this.multiplesSum}, dus ${this.a} × ${this.b} = ${this.valuesSum} = ${formatNumber(this.a * this.b)}.`;
        },

        next() {
            if (this.step < this.totalSteps) this.step++;
        },

        reset() {
            this.a = clampInt(this.a, 1, 999, 1);
            this.b = clampInt(this.b, 1, 9999, 1);
            this.step = 0;
        },

        format: formatNumber,
    };
}

/**
 * Eerlijk verdelen: rondjes uitdelen tot het niet meer kan; wat overblijft is de rest.
 */
export function sharing({ total = 17, groups = 5 } = {}) {
    return {
        total: clampInt(total, 0, 60, 17),
        groups: clampInt(groups, 1, 8, 5),
        rounds: 0,

        get maxRounds() {
            return Math.floor(this.total / this.groups);
        },

        get remainder() {
            return this.total % this.groups;
        },

        get left() {
            return this.total - this.rounds * this.groups;
        },

        get done() {
            return this.rounds >= this.maxRounds;
        },

        deal() {
            if (!this.done) this.rounds++;
        },

        dealAll() {
            this.rounds = this.maxRounds;
        },

        reset() {
            this.total = clampInt(this.total, 0, 60, 0);
            this.groups = clampInt(this.groups, 1, 8, 1);
            this.rounds = 0;
        },

        range(n) {
            return Array.from({ length: Math.max(0, n) }, (_, i) => i);
        },
    };
}

/**
 * Zeef van Eratosthenes.
 */
export function sieve({ max = 100 } = {}) {
    const limit = clampInt(max, 20, 200, 100);

    return {
        max: limit,
        crossed: {},
        primes: [],
        current: null,
        finished: false,

        get numbers() {
            return Array.from({ length: this.max }, (_, i) => i + 1);
        },

        state(n) {
            if (n === 1) return 'one';
            if (this.primes.includes(n)) return n === this.current ? 'current' : 'prime';
            if (this.crossed[n]) return this.crossed[n] === this.current ? 'crossing' : 'crossed';
            return this.finished ? 'prime' : 'open';
        },

        get message() {
            if (this.finished) {
                const count = this.numbers.filter((n) => this.state(n) === 'prime' || this.state(n) === 'current').length;
                return `Klaar. Alles wat niet is doorgestreept is priem: ${count} priemgetallen tot en met ${this.max}.`;
            }
            if (this.current === null) return 'Druk op "Volgende stap": 2 is het eerste priemgetal.';
            return `${this.current} is priem. Streep alle veelvouden van ${this.current} door (${this.current * 2}, ${this.current * 3}, …).`;
        },

        next() {
            if (this.finished) return;
            const start = this.current === null ? 2 : this.current + 1;
            let p = start;
            while (p <= this.max && (this.crossed[p] || this.primes.includes(p))) p++;

            if (p > this.max || p * p > this.max) {
                // Alle veelvouden zijn al weg: de rest is priem.
                this.finished = true;
                this.current = null;
                return;
            }

            this.current = p;
            this.primes.push(p);
            const crossed = { ...this.crossed };
            for (let m = p * 2; m <= this.max; m += p) {
                if (!crossed[m]) crossed[m] = p;
            }
            this.crossed = crossed;
        },

        reset() {
            this.crossed = {};
            this.primes = [];
            this.current = null;
            this.finished = false;
        },
    };
}

const LADDERS = {
    length: { units: ['km', 'hm', 'dam', 'm', 'dm', 'cm', 'mm'], base: 'm', name: 'lengte' },
    weight: { units: ['kg', 'hg', 'dag', 'g', 'dg', 'cg', 'mg'], base: 'g', name: 'gewicht' },
    volume: { units: ['kl', 'hl', 'dal', 'l', 'dl', 'cl', 'ml'], base: 'l', name: 'inhoud' },
};

/**
 * Metriek trapje: elke tree omlaag is × 10, elke tree omhoog is : 10.
 */
export function unitLadder({ quantity = 'length' } = {}) {
    const ladder = LADDERS[quantity] ?? LADDERS.length;

    return {
        ladder,
        value: 2.5,
        from: ladder.base,
        to: ladder.units[ladder.units.indexOf(ladder.base) + 2],

        get fromIndex() {
            return this.ladder.units.indexOf(this.from);
        },

        get toIndex() {
            return this.ladder.units.indexOf(this.to);
        },

        get steps() {
            return this.toIndex - this.fromIndex;
        },

        get result() {
            const v = Number(String(this.value).replace(',', '.'));
            if (Number.isNaN(v)) return null;
            return Number((v * 10 ** this.steps).toPrecision(12));
        },

        get explanation() {
            const n = Math.abs(this.steps);
            if (n === 0) return 'Zelfde eenheid: er verandert niets.';
            const factor = formatNumber(10 ** n);
            return this.steps > 0
                ? `${n} ${n === 1 ? 'tree' : 'treden'} omlaag: vermenigvuldig met ${factor}.`
                : `${n} ${n === 1 ? 'tree' : 'treden'} omhoog: deel door ${factor}.`;
        },

        between(i) {
            const lo = Math.min(this.fromIndex, this.toIndex);
            const hi = Math.max(this.fromIndex, this.toIndex);
            return i > lo && i <= hi;
        },

        format: (v) => formatNumber(v, 8),
    };
}
