import { clampInt } from '../course';

/**
 * Turven: een getal als streepjes in groepjes van vijf.
 */
export function tally({ value = 8 } = {}) {
    return {
        value: clampInt(value, 0, 100, 8),

        get groups() {
            const full = Math.floor(this.value / 5);
            const rest = this.value % 5;
            const groups = Array.from({ length: full }, () => 5);
            if (rest > 0) groups.push(rest);
            return groups;
        },

        get description() {
            const full = Math.floor(this.value / 5);
            const rest = this.value % 5;
            if (this.value === 0) return 'Nul: er valt niets te turven.';
            const parts = [];
            if (full > 0) parts.push(`${full} ${full === 1 ? 'groepje' : 'groepjes'} van vijf`);
            if (rest > 0) parts.push(`${rest} los${rest === 1 ? '' : 'se'} ${rest === 1 ? 'streepje' : 'streepjes'}`);
            return `${parts.join(' en ')} = ${this.value}`;
        },

        /** SVG-inhoud voor één groepje (Alpine-templates werken niet binnen <svg>). */
        groupSvg(count) {
            let svg = '';
            for (let i = 1; i <= Math.min(count, 4); i++) {
                svg += `<line x1="${i * 9}" x2="${i * 9}" y1="6" y2="42" stroke="#1f2933" stroke-width="2.5" stroke-linecap="round"/>`;
            }
            if (count === 5) {
                svg += '<line x1="2" y1="34" x2="44" y2="12" stroke="#3b5bdb" stroke-width="2.5" stroke-linecap="round"/>';
            }
            return svg;
        },

        change(delta) {
            this.value = clampInt(this.value + delta, 0, 100);
        },

        normalize() {
            this.value = clampInt(this.value, 0, 100, 0);
        },
    };
}

/**
 * Getallenlijn: klik of sleep het punt.
 */
export function numberLine({ min = 0, max = 20, value = null } = {}) {
    const lo = clampInt(min, -1000, 1000, 0);
    const hi = Math.max(lo + 2, clampInt(max, -1000, 1000, 20));

    return {
        min: lo,
        max: hi,
        value: clampInt(value ?? Math.round((lo + hi) / 2), lo, hi),
        dragging: false,
        width: 640,
        pad: 30,

        get ticks() {
            const range = this.max - this.min;
            const step = range <= 20 ? 1 : range <= 50 ? 5 : range <= 200 ? 10 : 50;
            const labelStep = range <= 20 ? 1 : step;
            const ticks = [];
            for (let n = this.min; n <= this.max; n++) {
                if (n % step === 0 || range <= 20) {
                    ticks.push({ n, x: this.x(n), label: n % labelStep === 0, major: n % (labelStep * 5) === 0 });
                }
            }
            return ticks;
        },

        get ticksSvg() {
            return this.ticks
                .map((t) => `<line x1="${t.x}" x2="${t.x}" y1="${t.major ? 42 : 45}" y2="${t.major ? 58 : 55}" stroke="#616e7c" stroke-width="1"/>`
                    + (t.label ? `<text x="${t.x}" y="76" text-anchor="middle" font-size="12" fill="#616e7c" font-family="Inter, sans-serif">${t.n}</text>` : ''))
                .join('');
        },

        x(n) {
            return this.pad + ((n - this.min) / (this.max - this.min)) * (this.width - 2 * this.pad);
        },

        fromEvent(event) {
            const svg = this.$refs.svg;
            const rect = svg.getBoundingClientRect();
            const clientX = event.touches ? event.touches[0].clientX : event.clientX;
            const ratio = (clientX - rect.left) / rect.width;
            const svgX = ratio * this.width;
            const n = this.min + ((svgX - this.pad) / (this.width - 2 * this.pad)) * (this.max - this.min);
            this.value = clampInt(Math.round(n), this.min, this.max);
        },

        down(event) {
            this.dragging = true;
            this.fromEvent(event);
        },

        move(event) {
            if (this.dragging) this.fromEvent(event);
        },

        key(event) {
            if (event.key === 'ArrowRight' || event.key === 'ArrowUp') this.value = Math.min(this.max, this.value + 1);
            if (event.key === 'ArrowLeft' || event.key === 'ArrowDown') this.value = Math.max(this.min, this.value - 1);
        },

        get parity() {
            return Math.abs(this.value) % 2 === 0 ? 'even' : 'oneven';
        },
    };
}
