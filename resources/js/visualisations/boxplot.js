const median = (sorted) => {
    if (!sorted.length) return null;
    const middle = Math.floor(sorted.length / 2);
    return sorted.length % 2 ? sorted[middle] : (sorted[middle - 1] + sorted[middle]) / 2;
};

export function describeValues(values) {
    const sorted = values.filter(Number.isFinite).sort((a, b) => a - b);
    const n = sorted.length;
    if (!n) return null;
    const mean = sorted.reduce((sum, value) => sum + value, 0) / n;
    const squares = sorted.reduce((sum, value) => sum + (value - mean) ** 2, 0);
    const middle = Math.floor(n / 2);
    // Bij een oneven aantal telt de middelste waarde niet mee in de helften.
    const q1 = n === 1 ? sorted[0] : median(sorted.slice(0, middle));
    const q3 = n === 1 ? sorted[0] : median(sorted.slice(Math.ceil(n / 2)));
    return { n, min: sorted[0], q1, median: median(sorted), q3, max: sorted[n - 1],
        mean, variance: squares / n, sd: Math.sqrt(squares / n),
        sampleSd: n > 1 ? Math.sqrt(squares / (n - 1)) : null, iqr: q3 - q1 };
}

export function boxplot({ values = '2; 4; 4; 4; 5; 5; 7; 9' } = {}) {
    return {
        input: String(values),
        get values() {
            return this.input.split(';').map((v) => v.trim()).filter(Boolean)
                .map((v) => Number(v.replace(',', '.'))).filter(Number.isFinite).slice(0, 100);
        },
        get stats() { return describeValues(this.values); },
        get svg() {
            const s = this.stats;
            if (!s) return '';
            const padding = Math.max(1, (s.max - s.min) * 0.12);
            const low = s.min - padding, high = s.max + padding;
            const x = (value) => 25 + (value - low) / (high - low) * 570;
            let drawing = `<line x1="25" y1="118" x2="595" y2="118" stroke="#616e7c"/>`
                + `<line x1="${x(s.min)}" y1="66" x2="${x(s.max)}" y2="66" stroke="#1f2933" stroke-width="2"/>`
                + `<rect x="${x(s.q1)}" y="40" width="${x(s.q3) - x(s.q1)}" height="52" fill="#eef2ff" stroke="#3b5bdb" stroke-width="2"/>`;
            for (const [value, label] of [[s.min, 'min'], [s.q1, 'Q₁'],
                [s.median, 'mediaan'], [s.q3, 'Q₃'], [s.max, 'max']]) {
                const start = label === 'mediaan' ? 40 : 52;
                const end = label === 'mediaan' ? 92 : 80;
                drawing += `<line x1="${x(value)}" y1="${start}" x2="${x(value)}" y2="${end}" stroke="#1f2933" stroke-width="2"/>`;
            }
            // Vaste labelposities voorkomen overlap bij gelijke kwartielen of constante data.
            for (const [i, label, value] of [[0, 'min', s.min], [1, 'Q₁', s.q1],
                [2, 'mediaan', s.median], [3, 'Q₃', s.q3], [4, 'max', s.max]]) {
                drawing += `<text x="${62 + i * 124}" y="146" text-anchor="middle" font-size="12" fill="#1f2933" font-family="sans-serif">${label}: ${this.fmt(value)}</text>`;
            }
            return drawing;
        },
        fmt(value) { return value === null || value === undefined ? '—' : new Intl.NumberFormat('nl-NL', { maximumFractionDigits: 3 }).format(value); },
    };
}
