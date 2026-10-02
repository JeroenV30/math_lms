import { clampInt, formatNumber } from '../course';

const PLACES = [
    { key: 'thousands', label: 'Duizendtallen', short: 'D', value: 1000 },
    { key: 'hundreds', label: 'Honderdtallen', short: 'H', value: 100 },
    { key: 'tens', label: 'Tientallen', short: 'T', value: 10 },
    { key: 'units', label: 'Eenheden', short: 'E', value: 1 },
];

/**
 * Plaatswaarde: een getal als duizendtallen, honderdtallen, tientallen en eenheden.
 */
export function placeValue({ value = 4372 } = {}) {
    return {
        value: clampInt(value, 0, 9999, 4372),
        places: PLACES,

        digit(place) {
            return Math.floor(this.value / place.value) % 10;
        },

        get decomposition() {
            const parts = PLACES.filter((p) => this.digit(p) > 0).map((p) => `${this.digit(p)} \\times ${formatNumber(p.value).replace('.', '{.}')}`);
            return parts.length ? `${formatNumber(this.value).replace('.', '{.}')} = ${parts.join(' + ')}` : '0';
        },

        get expanded() {
            const parts = PLACES.filter((p) => this.digit(p) > 0).map((p) => formatNumber(this.digit(p) * p.value));
            return parts.join(' + ') || '0';
        },

        change(place, delta) {
            this.value = clampInt(this.value + delta * place.value, 0, 9999, this.value);
        },

        normalize() {
            this.value = clampInt(this.value, 0, 9999, 0);
        },

        range(n) {
            return Array.from({ length: n }, (_, i) => i);
        },
    };
}

/**
 * Babylonisch spijkerschrift: zestigtallig met twee tekens
 * (de verticale spijker voor 1, de winkelhaak voor 10).
 */
export function babylonian({ value = 75 } = {}) {
    return {
        value: clampInt(value, 1, 215999, 75),

        get digits() {
            const digits = [];
            let n = this.value;
            do {
                digits.unshift(n % 60);
                n = Math.floor(n / 60);
            } while (n > 0);
            return digits;
        },

        get notation() {
            return this.digits.join(' ; ');
        },

        get explanation() {
            const d = this.digits;
            const powers = d.map((digit, i) => {
                const power = d.length - 1 - i;
                const place = power === 0 ? '1' : power === 1 ? '60' : '3600';
                return `${digit} \\times ${place === '3600' ? '3{.}600' : place}`;
            });
            return `${powers.join(' + ')} = ${formatNumber(this.value).replace('.', '{.}')}`;
        },

        tens(digit) {
            return Array.from({ length: Math.floor(digit / 10) }, (_, i) => i);
        },

        units(digit) {
            return Array.from({ length: digit % 10 }, (_, i) => i);
        },

        // Positie van de i-de eenheidsspijker: rijen van drie, zoals op de kleitabletten.
        unitPos(i, digit) {
            const tensCount = Math.floor(digit / 10);
            const x0 = tensCount * 22 + (tensCount > 0 ? 8 : 0);
            const perRow = (digit % 10) > 6 ? 4 : 3;
            return { x: x0 + (i % perRow) * 15, y: Math.floor(i / perRow) * 22 };
        },

        /** SVG-inhoud voor één zestigtallig cijfer: winkelhaken (10) en spijkers (1). */
        digitSvg(digit) {
            const width = this.groupWidth(digit);
            let svg = digit === 0
                ? `<rect x="2" y="8" width="${width - 4}" height="44" rx="4" fill="none" stroke="#c9b48f" stroke-dasharray="4 3"/>`
                : '';
            this.tens(digit).forEach((t) => {
                svg += `<path transform="translate(${t * 22} ${t % 2 === 0 ? 6 : 26})" d="M18 2 L2 12 L18 22 L12 12 Z" fill="#8a5a24"/>`;
            });
            this.units(digit).forEach((u) => {
                const p = this.unitPos(u, digit);
                svg += `<path transform="translate(${p.x} ${p.y})" d="M0 0 H12 L7 7 V20 H5 V7 Z" fill="#8a5a24"/>`;
            });
            return svg;
        },

        groupWidth(digit) {
            const tensCount = Math.floor(digit / 10);
            const units = digit % 10;
            const perRow = units > 6 ? 4 : 3;
            const unitsWidth = units > 0 ? Math.min(units, perRow) * 15 : 0;
            return Math.max(30, tensCount * 22 + (tensCount > 0 && units > 0 ? 8 : 0) + unitsWidth);
        },

        normalize() {
            this.value = clampInt(this.value, 1, 215999, 1);
        },

        change(delta) {
            this.value = clampInt(this.value + delta, 1, 215999, this.value);
        },
    };
}

const ROMAN = [
    [1000, 'M'], [900, 'CM'], [500, 'D'], [400, 'CD'],
    [100, 'C'], [90, 'XC'], [50, 'L'], [40, 'XL'],
    [10, 'X'], [9, 'IX'], [5, 'V'], [4, 'IV'], [1, 'I'],
];

export function toRoman(n) {
    let rest = n;
    const parts = [];
    for (const [value, symbol] of ROMAN) {
        while (rest >= value) {
            parts.push({ value, symbol });
            rest -= value;
        }
    }
    return parts;
}

export function fromRoman(text) {
    const s = text.toUpperCase().trim();
    if (!/^[MDCLXVI]+$/.test(s)) return null;
    const map = { M: 1000, D: 500, C: 100, L: 50, X: 10, V: 5, I: 1 };
    let total = 0;
    for (let i = 0; i < s.length; i++) {
        const current = map[s[i]];
        const next = map[s[i + 1]] ?? 0;
        total += current < next ? -current : current;
    }
    // Alleen correcte (canonieke) schrijfwijzen accepteren.
    return total > 0 && total < 4000 && toRoman(total).map((p) => p.symbol).join('') === s ? total : null;
}

/**
 * Romeinse cijfers: optellen van symbolen, met aftrekregel (IV, IX, XL, ...).
 */
export function roman({ value = 1994 } = {}) {
    return {
        value: clampInt(value, 1, 3999, 1994),
        romanInput: '',
        romanError: '',

        init() {
            this.romanInput = this.roman;
        },

        get parts() {
            return toRoman(this.value);
        },

        get roman() {
            return this.parts.map((p) => p.symbol).join('');
        },

        get grouped() {
            // Combineer gelijke symbolen voor de uitleg: MM + CM + XC + IV.
            const groups = [];
            for (const part of this.parts) {
                const last = groups[groups.length - 1];
                if (last && last.symbol.length === 1 && last.symbol[0] === part.symbol && part.symbol.length === 1) {
                    last.text += part.symbol;
                    last.value += part.value;
                } else {
                    groups.push({ symbol: part.symbol, text: part.symbol, value: part.value });
                }
            }
            return groups;
        },

        fromNumber() {
            this.value = clampInt(this.value, 1, 3999, 1);
            this.romanInput = this.roman;
            this.romanError = '';
        },

        fromRomanInput() {
            if (this.romanInput.trim() === '') return;
            const n = fromRoman(this.romanInput);
            if (n === null) {
                this.romanError = 'Geen geldige Romeinse schrijfwijze (gebruik I, V, X, L, C, D, M).';
            } else {
                this.romanError = '';
                this.value = n;
            }
        },
    };
}
