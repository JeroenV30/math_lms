/**
 * Kleine, veilige expressie-parser (zonder eval), het JavaScript-tegenstuk van
 * App\Services\AnswerCheckers\Expression\ExpressionParser.
 *
 * compile('a*x^2 + b') geeft een functie (vars) => getal.
 */
const FUNCTIONS = {
    sqrt: Math.sqrt,
    sin: Math.sin,
    cos: Math.cos,
    tan: Math.tan,
    ln: Math.log,
    log: Math.log10,
    abs: Math.abs,
    exp: Math.exp,
};

function tokenize(input) {
    const s = String(input)
        .replace(/−/g, '-').replace(/[×·]/g, '*').replace(/÷/g, '/')
        .replace(/²/g, '^2').replace(/³/g, '^3').replace(/√/g, 'sqrt').replace(/π/g, 'pi');
    const tokens = [];
    let i = 0;
    while (i < s.length) {
        const c = s[i];
        if (/\s/.test(c)) { i++; continue; }
        const num = s.slice(i).match(/^\d*[.,]?\d+/);
        if (num && /[\d.,]/.test(c)) {
            tokens.push({ t: 'num', v: Number(num[0].replace(',', '.')) });
            i += num[0].length;
            continue;
        }
        const word = s.slice(i).match(/^[a-zA-Z]+/);
        if (word) {
            const w = word[0];
            i += w.length;
            if (FUNCTIONS[w.toLowerCase()]) tokens.push({ t: 'fn', v: w.toLowerCase() });
            else if (w === 'pi') tokens.push({ t: 'num', v: Math.PI });
            else if (w === 'e') tokens.push({ t: 'num', v: Math.E });
            else for (const letter of w) tokens.push({ t: 'var', v: letter });
            continue;
        }
        if ('+-*/^()'.includes(c)) { tokens.push({ t: 'op', v: c }); i++; continue; }
        throw new Error(`Onbekend teken '${c}'`);
    }
    // Impliciete vermenigvuldiging: 2x, 3(x+1), (x+1)(x-1)
    const out = [];
    for (const tok of tokens) {
        const prev = out[out.length - 1];
        const ends = prev && (prev.t === 'num' || prev.t === 'var' || (prev.t === 'op' && prev.v === ')'));
        const starts = tok.t === 'num' || tok.t === 'var' || tok.t === 'fn' || (tok.t === 'op' && tok.v === '(');
        if (ends && starts) out.push({ t: 'op', v: '*' });
        out.push(tok);
    }
    return out;
}

export function compile(input) {
    const tokens = tokenize(input);
    let pos = 0;
    const peek = () => tokens[pos];
    const isOp = (v) => peek()?.t === 'op' && peek().v === v;

    const expression = () => {
        let left = term();
        while (isOp('+') || isOp('-')) {
            const op = tokens[pos++].v;
            const l = left;
            const r = term();
            left = op === '+' ? (v) => l(v) + r(v) : (v) => l(v) - r(v);
        }
        return left;
    };
    const term = () => {
        let left = unary();
        while (isOp('*') || isOp('/')) {
            const op = tokens[pos++].v;
            const l = left;
            const r = unary();
            left = op === '*' ? (v) => l(v) * r(v) : (v) => l(v) / r(v);
        }
        return left;
    };
    const unary = () => {
        if (isOp('-')) { pos++; const u = unary(); return (v) => -u(v); }
        if (isOp('+')) { pos++; return unary(); }
        return power();
    };
    const power = () => {
        const base = primary();
        if (isOp('^')) { pos++; const ex = unary(); return (v) => base(v) ** ex(v); }
        return base;
    };
    const primary = () => {
        const tok = tokens[pos++];
        if (!tok) throw new Error('Onvolledige expressie');
        if (tok.t === 'num') return () => tok.v;
        if (tok.t === 'var') return (v) => v[tok.v] ?? NaN;
        if (tok.t === 'fn') {
            const f = FUNCTIONS[tok.v];
            let arg;
            if (isOp('(')) { pos++; arg = expression(); if (!isOp(')')) throw new Error('Haakje niet gesloten'); pos++; } else arg = power();
            return (v) => f(arg(v));
        }
        if (tok.t === 'op' && tok.v === '(') {
            const inner = expression();
            if (!isOp(')')) throw new Error('Haakje niet gesloten');
            pos++;
            return inner;
        }
        throw new Error('Onverwacht teken');
    };

    const fn = expression();
    if (pos < tokens.length) throw new Error('Onverwacht teken');
    return fn;
}
