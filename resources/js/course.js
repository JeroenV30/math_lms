import katex from 'katex';

/**
 * Render alle nog niet gerenderde formules binnen een element.
 * De server levert LaTeX in <span class="math"> / <div class="math math-display">.
 */
export function renderMath(root = document) {
    root.querySelectorAll('.math:not(.math-rendered)').forEach((el) => {
        try {
            katex.render(el.textContent, el, {
                displayMode: el.classList.contains('math-display'),
                throwOnError: false,
                strict: 'ignore',
            });
            el.classList.add('math-rendered');
        } catch (error) {
            console.warn('KaTeX kon formule niet renderen', el.textContent, error);
        }
    });
}

/**
 * JSON-verzoek naar Laravel, met CSRF-token.
 */
export async function postJson(url, data) {
    const token = document.querySelector('meta[name="csrf-token"]')?.content;
    const response = await fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            Accept: 'application/json',
            'X-CSRF-TOKEN': token,
        },
        body: JSON.stringify(data),
    });

    if (!response.ok) {
        throw new Error(`Serverfout ${response.status}`);
    }

    return response.json();
}

/**
 * Nederlandse getalnotatie: 1.234,5
 */
export function formatNumber(value, maxDecimals = 6) {
    return new Intl.NumberFormat('nl-NL', { maximumFractionDigits: maxDecimals }).format(value);
}

export function clampInt(value, min, max, fallback = min) {
    const n = Number.parseInt(value, 10);
    if (Number.isNaN(n)) return fallback;
    return Math.min(max, Math.max(min, n));
}
