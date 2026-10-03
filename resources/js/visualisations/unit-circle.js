const clampAngle = (value) => {
    const angle = Number(value);
    return Number.isFinite(angle) ? Math.max(-360, Math.min(720, angle)) : 30;
};
export function unitCircle({ angle = 30 } = {}) {
    return {
        angle: clampAngle(angle),
        normalize() { this.angle = clampAngle(this.angle); },
        get radians() { return this.angle * Math.PI / 180; },
        get cosine() { return Math.cos(this.radians); },
        get sine() { return Math.sin(this.radians); },
        get tangent() { return Math.abs(this.cosine) < 1e-10 ? null : this.sine / this.cosine; },
        fmt(value) {
            if (value === null) return 'niet gedefinieerd';
            return new Intl.NumberFormat('nl-NL', { maximumFractionDigits: 4 }).format(Math.abs(value) < 1e-10 ? 0 : value);
        },
        get svg() {
            const cx = 220, cy = 205, r = 150;
            const x = cx + r * this.cosine, y = cy - r * this.sine;
            return `<circle cx="${cx}" cy="${cy}" r="${r}" fill="#f8fafc" stroke="#616e7c"/>`
                + `<path d="M 40 ${cy} H 405 M ${cx} 25 V 385" fill="none" stroke="#616e7c"/>`
                + `<path d="M ${cx} ${cy} L ${x} ${cy} L ${x} ${y} Z" fill="#eef2ff" stroke="#3b5bdb" stroke-width="2"/>`
                + `<line x1="${cx}" y1="${cy}" x2="${x}" y2="${y}" stroke="#1f2933" stroke-width="2"/>`
                + `<circle cx="${x}" cy="${y}" r="5" fill="#6741d9"/>`
                + `<g font-family="sans-serif" font-size="13" fill="#1f2933">`
                + `<text x="410" y="210">x</text><text x="226" y="24">y</text>`
                + `<text x="372" y="225">1</text><text x="57" y="225">−1</text>`
                + `<text x="228" y="56">1</text><text x="228" y="361">−1</text>`
                + `<text x="220" y="410" text-anchor="middle">P = (${this.fmt(this.cosine)}; ${this.fmt(this.sine)})</text></g>`;
        },
    };
}
