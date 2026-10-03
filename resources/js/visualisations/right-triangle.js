const bounded = (value, low, high, fallback) => {
    const number = Number(value);
    return Number.isFinite(number) ? Math.min(high, Math.max(low, number)) : fallback;
};
const format = (value) => new Intl.NumberFormat('nl-NL', { maximumFractionDigits: 4 }).format(value);

export function rightTriangle({ angle = 30, hypotenuse = 10 } = {}) {
    return {
        angle: bounded(angle, 1, 89, 30),
        hypotenuse: bounded(hypotenuse, 1, 20, 10),

        normalize() {
            this.angle = bounded(this.angle, 1, 89, 30);
            this.hypotenuse = bounded(this.hypotenuse, 1, 20, 10);
        },

        get radians() { return this.angle * Math.PI / 180; },
        get opposite() { return this.hypotenuse * Math.sin(this.radians); },
        get adjacent() { return this.hypotenuse * Math.cos(this.radians); },
        get sine() { return this.opposite / this.hypotenuse; },
        get cosine() { return this.adjacent / this.hypotenuse; },
        get tangent() { return this.opposite / this.adjacent; },

        get svg() {
            // De vorm heeft vaste beeldschaal; de werkelijke lengtes staan in de labels.
            const x = 40 + 400 * Math.cos(this.radians);
            const y = 420 - 400 * Math.sin(this.radians);
            const corner = Math.min(14, (x - 40) / 3, (420 - y) / 3);
            const arcX = 40 + 32 * Math.cos(this.radians);
            const arcY = 420 - 32 * Math.sin(this.radians);
            return `<polygon points="40,420 ${x},420 ${x},${y}" fill="#eef2ff" stroke="#1f2933" stroke-width="2"/>`
                + `<path d="M ${x - corner} 420 L ${x - corner} ${420 - corner} L ${x} ${420 - corner}" fill="none" stroke="#616e7c"/>`
                + `<path d="M 72 420 A 32 32 0 0 0 ${arcX} ${arcY}" fill="none" stroke="#3b5bdb" stroke-width="2"/>`
                + `<g font-family="sans-serif" font-size="14" fill="#1f2933">`
                + `<text x="${(40 + x) / 2}" y="448" text-anchor="middle">A = ${format(this.adjacent)}</text>`
                + `<text x="${x + 12}" y="${(420 + y) / 2}">O = ${format(this.opposite)}</text>`
                + `<text x="${(40 + x) / 2 - 12}" y="${(420 + y) / 2 - 12}" text-anchor="end">S = ${format(this.hypotenuse)}</text>`
                + `<text x="80" y="407" fill="#3b5bdb">θ = ${format(this.angle)}°</text></g>`;
        },

        format,
    };
}
