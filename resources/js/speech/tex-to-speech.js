/**
 * Zet een LaTeX-formule om in gesproken Nederlands, voor het voorlezen van lessen.
 * Geen volledige TeX-parser: dekt de constructies die in de lesstof voorkomen
 * (breuken, machten, wortels, indices, functies, Griekse letters, relaties, omgevingen).
 */

const GREEK = {
    alpha: 'alfa', beta: 'bèta', gamma: 'gamma', delta: 'delta', epsilon: 'epsilon', varepsilon: 'epsilon',
    zeta: 'zèta', eta: 'èta', theta: 'theta', vartheta: 'theta', iota: 'jota', kappa: 'kappa', lambda: 'lambda',
    mu: 'mu', nu: 'nu', xi: 'ksi', pi: 'pi', rho: 'rho', sigma: 'sigma', varsigma: 'sigma', tau: 'tau',
    upsilon: 'upsilon', phi: 'fi', varphi: 'fi', chi: 'chi', psi: 'psi', omega: 'omega',
    Gamma: 'hoofdletter gamma', Delta: 'delta', Theta: 'hoofdletter theta', Lambda: 'hoofdletter lambda',
    Pi: 'hoofdletter pi', Sigma: 'hoofdletter sigma', Phi: 'hoofdletter fi', Psi: 'hoofdletter psi', Omega: 'hoofdletter omega',
};

const WORDS = {
    times: 'keer', cdot: 'keer', ast: 'keer', div: 'gedeeld door', pm: 'plus of min', mp: 'min of plus',
    approx: 'is ongeveer', neq: 'is niet gelijk aan', ne: 'is niet gelijk aan', equiv: 'is gelijkwaardig aan',
    le: 'is kleiner dan of gelijk aan', leq: 'is kleiner dan of gelijk aan',
    ge: 'is groter dan of gelijk aan', geq: 'is groter dan of gelijk aan',
    sim: 'is verdeeld als', propto: 'is evenredig met', parallel: 'is evenwijdig aan', perp: 'staat loodrecht op',
    infty: 'oneindig', to: 'naar', mapsto: 'wordt afgebeeld op', in: 'is element van', notin: 'is geen element van',
    subset: 'is deelverzameling van', subseteq: 'is deelverzameling van', cap: 'doorsnede', cup: 'vereniging',
    emptyset: 'de lege verzameling', varnothing: 'de lege verzameling',
    Rightarrow: 'dus', Longrightarrow: 'dus', implies: 'dus', longrightarrow: 'geeft', rightarrow: 'geeft',
    Leftrightarrow: 'dan en slechts dan als', Longleftrightarrow: 'dan en slechts dan als', iff: 'dan en slechts dan als',
    leftarrow: 'pijl naar links', leftrightarrow: 'pijl in beide richtingen', downarrow: 'pijl omlaag', uparrow: 'pijl omhoog',
    angle: 'hoek', triangle: 'driehoek', neg: 'niet', land: 'en', lor: 'of', forall: 'voor alle', exists: 'er is een',
    oplus: 'plus', ominus: 'min', partial: 'partieel', nabla: 'nabla', mid: 'gegeven', '%': 'procent',
    ldots: 'enzovoort', dots: 'enzovoort', cdots: 'enzovoort', vdots: 'enzovoort', pitchfork: 'snijdt',
    degree: 'graden', therefore: 'dus', because: 'omdat',
};

const FUNCTIONS = {
    sin: 'sinus', cos: 'cosinus', tan: 'tangens', arcsin: 'arcsinus', arccos: 'arccosinus', arctan: 'arctangens',
    log: 'log', ln: 'natuurlijke log', exp: 'e-macht', det: 'determinant', min: 'minimum', max: 'maximum',
    gcd: 'ggd', sinh: 'sinus hyperbolicus', cosh: 'cosinus hyperbolicus',
};

const SILENT = new Set([
    'left', 'right', 'big', 'Big', 'bigg', 'Bigg', 'bigl', 'bigr', 'Bigl', 'Bigr', 'biggl', 'biggr',
    'displaystyle', 'textstyle', 'scriptstyle', 'limits', 'nolimits', 'hline', 'langle', 'rangle',
    'lvert', 'rvert', 'vert', 'quad', 'qquad', ',', ';', ':', '!', ' ', 'nonumber', 'notag',
]);

const TEXT_COMMANDS = new Set(['text', 'textrm', 'textit', 'textbf', 'mathrm', 'mathit', 'mathbf', 'mbox', 'operatorname', 'mathsf', 'mathcal']);
const PASS_COMMANDS = new Set(['boxed', 'cancel', 'bcancel', 'mathbb', 'color', 'textcolor', 'underline']);
const ACCENTS = { vec: ['vector', ''], overrightarrow: ['vector', ''], bar: ['', 'streep'], overline: ['', 'streep'], hat: ['', 'dakje'], widehat: ['hoek', ''], dot: ['', 'punt'], tilde: ['', 'tilde'], mathring: ['', 'met rondje'] };

const DENOMINATORS = { 2: 'half', 3: 'derde', 4: 'vierde', 5: 'vijfde', 6: 'zesde', 7: 'zevende', 8: 'achtste', 9: 'negende', 10: 'tiende', 12: 'twaalfde', 100: 'honderdste', 1000: 'duizendste' };

/** Functienamen die je met "van" uitspreekt: f(x) = "f van x". */
const FUNCTION_LETTERS = new Set(['f', 'g', 'h', 'F', 'G', 'H', 'P', 'E', 'V', 'N', 'B', 'L']);

/**
 * Tokens: { t: 'cmd'|'char'|'num'|'group', v }. Groepen tussen {} worden geneste lijsten.
 */
export function tokenize(tex) {
    let i = 0;
    const src = String(tex ?? '');

    function readList(closing) {
        const out = [];
        while (i < src.length) {
            const c = src[i];
            if (closing && c === '}') { i++; return out; }
            if (c === '{') {
                i++;
                // {,} als decimaalteken: 2{,}5
                out.push({ t: 'group', v: readList(true) });
                continue;
            }
            if (c === '\\') {
                const rest = src.slice(i + 1);
                const m = rest.match(/^[a-zA-Z]+/);
                if (m) { out.push({ t: 'cmd', v: m[0] }); i += 1 + m[0].length; }
                else if (rest[0] === '\\') { out.push({ t: 'newline' }); i += 2; }
                else { out.push({ t: 'cmd', v: rest[0] ?? '' }); i += 2; }
                continue;
            }
            if (/\s/.test(c)) { i++; continue; }
            if (/[0-9]/.test(c) || (c === '.' && /[0-9]/.test(src[i + 1] ?? ''))) {
                let num = '';
                while (i < src.length) {
                    if (/[0-9]/.test(src[i])) { num += src[i++]; continue; }
                    // Decimaalteken: 2{,}5, 2,5 of 2.5
                    if (src.startsWith('{,}', i) && /[0-9]/.test(src[i + 3] ?? '')) { num += ','; i += 3; continue; }
                    // Een losse komma scheidt, zoals in het punt (3,4); 2.5 lezen we als 2,5.
                    if (src[i] === '.' && /[0-9]/.test(src[i + 1] ?? '')) { num += ','; i++; continue; }
                    // Duizendtallen: 1\,000 of 1\ 000
                    if ((src.startsWith('\\,', i) || src.startsWith('\\ ', i)) && /^[0-9]{3}(?![0-9])/.test(src.slice(i + 2))) { i += 2; continue; }
                    break;
                }
                out.push({ t: 'num', v: num });
                continue;
            }
            out.push({ t: 'char', v: c });
            i++;
        }
        return out;
    }

    return readList(false);
}

function isAtom(tokens) {
    if (tokens.length === 0) return true;
    if (tokens.length === 1) {
        const [tok] = tokens;
        if (tok.t === 'group') return isAtom(tok.v);
        return tok.t === 'num' || (tok.t === 'char' && /[a-zA-Z]/.test(tok.v)) || (tok.t === 'cmd' && (GREEK[tok.v] || tok.v === 'infty'));
    }
    // -3 of -x telt ook als eenvoudig
    return tokens.length === 2 && tokens[0].t === 'char' && tokens[0].v === '-' && isAtom([tokens[1]]);
}

function rawText(tokens) {
    return tokens.map((tok) => {
        if (tok.t === 'group') return rawText(tok.v);
        if (tok.t === 'cmd') return SILENT.has(tok.v) || tok.v === ' ' ? ' ' : (GREEK[tok.v] ?? '');
        if (tok.t === 'newline') return ' ';
        return tok.v;
    }).join('');
}

function intWord(s) {
    return /^[0-9]+$/.test(s) ? Number.parseInt(s, 10) : null;
}

class Speaker {
    constructor(tokens, context = {}) {
        this.tokens = tokens;
        this.i = 0;
        this.absOpen = false;
        this.context = context;
    }

    peek(offset = 0) { return this.tokens[this.i + offset]; }
    next() { return this.tokens[this.i++]; }

    /** Het volgende argument als tokenlijst (groep of één token). */
    argTokens() {
        const tok = this.next();
        if (!tok) return [];
        if (tok.t === 'group') return tok.v;
        // Zonder accolades is een argument één teken: rac13 is 1/3, x^23 is x^2 gevolgd door 3.
        if (tok.t === 'num' && tok.v.length > 1) {
            this.tokens.splice(this.i, 0, { t: 'num', v: tok.v.slice(1).replace(/^,/, '') });
            return [{ t: 'num', v: tok.v[0] }];
        }
        if (tok.t === 'cmd' && (tok.v in ACCENTS || ['frac', 'sqrt'].includes(tok.v))) {
            // \bar\mu en dergelijke: neem het commando met zijn argument
            const out = [tok];
            out.push({ t: 'group', v: this.argTokens() });
            if (tok.v === 'frac') out.push({ t: 'group', v: this.argTokens() });
            return out;
        }
        return [tok];
    }

    arg() { return speakTokens(this.argTokens()); }

    optionalArg() {
        if (this.peek()?.t === 'char' && this.peek().v === '[') {
            this.next();
            const inner = [];
            while (this.peek() && !(this.peek().t === 'char' && this.peek().v === ']')) inner.push(this.next());
            this.next();
            return inner;
        }
        return null;
    }

    /** Leest wat er na \lim, \sum of \int als onder- en bovengrens staat. */
    limits() {
        let lower = null;
        let upper = null;
        for (let n = 0; n < 2; n++) {
            const tok = this.peek();
            if (tok?.t === 'cmd' && (tok.v === 'limits' || tok.v === 'nolimits')) { this.next(); n--; continue; }
            if (tok?.t === 'char' && tok.v === '_') { this.next(); lower = this.arg(); }
            else if (tok?.t === 'char' && tok.v === '^') { this.next(); upper = this.arg(); }
        }
        return { lower, upper };
    }

    /** Leest tot het bijbehorende sluithaakje (op hetzelfde niveau). */
    parenContents(open, close) {
        let depth = 1;
        const inner = [];
        while (this.peek()) {
            const tok = this.next();
            if (tok.t === 'char' && tok.v === open) depth++;
            if (tok.t === 'char' && tok.v === close) { depth--; if (depth === 0) return { inner, closed: true }; }
            // \right) telt als sluiten; het \right-commando zelf is stil
            inner.push(tok);
        }
        return { inner, closed: false };
    }

    environment(name) {
        const body = [];
        let depth = 1;
        while (this.peek()) {
            const tok = this.next();
            if (tok.t === 'cmd' && tok.v === 'begin') depth++;
            if (tok.t === 'cmd' && tok.v === 'end') {
                depth--;
                if (depth === 0) { this.next(); break; }
            }
            body.push(tok);
        }
        // Kolomspecificatie van array: {cc|c}
        if (name === 'array' && body[0]?.t === 'group') body.shift();
        const rows = [[]];
        for (const tok of body) {
            if (tok.t === 'newline') rows.push([]);
            else if (tok.t === 'char' && tok.v === '&') rows[rows.length - 1].push({ t: 'char', v: ' ' });
            else rows[rows.length - 1].push(tok);
        }
        const spoken = rows.map((r) => speakTokens(r)).filter((s) => s.trim() !== '');
        if (/matrix/.test(name)) return `de matrix met rijen: ${spoken.join('; ')}.`;
        if (name === 'cases') return `gevallen: ${spoken.join('; ')}.`;
        return spoken.join('; ');
    }

    run() {
        const words = [];
        let prev = null;

        const push = (w) => { if (w !== '' && w != null) words.push(w); };

        while (this.peek()) {
            const tok = this.next();

            if (tok.t === 'num') { push(tok.v); prev = tok; continue; }
            if (tok.t === 'group') { push(speakTokens(tok.v)); prev = tok; continue; }
            if (tok.t === 'newline') { push(';'); prev = null; continue; }

            if (tok.t === 'char') {
                const c = tok.v;
                if (/[a-zA-Z]/.test(c)) {
                    // f(x): "f van x"
                    const after = this.peek();
                    if (FUNCTION_LETTERS.has(c) && after?.t === 'char' && after.v === '(') {
                        this.next();
                        const { inner } = this.parenContents('(', ')');
                        push(`${c} van ${speakTokens(inner, { probability: c === 'P' })}${isAtom(inner) ? '' : ','}`);
                    } else if (FUNCTION_LETTERS.has(c) && after?.t === 'char' && after.v === "'") {
                        // f'(x): "f accent van x"
                        this.next();
                        let primes = 1;
                        while (this.peek()?.t === 'char' && this.peek().v === "'") { this.next(); primes++; }
                        let spoken = `${c} ${primes === 1 ? 'accent' : 'dubbel accent'}`;
                        if (this.peek()?.t === 'char' && this.peek().v === '(') {
                            this.next();
                            spoken += ` van ${speakTokens(this.parenContents('(', ')').inner)}`;
                        }
                        push(spoken);
                    } else {
                        push(c);
                    }
                    prev = tok;
                    continue;
                }
                switch (c) {
                    case '+': push('plus'); break;
                    case '-': push('min'); break;
                    case '=': push('is'); break;
                    case '<': push('is kleiner dan'); break;
                    case '>': push('is groter dan'); break;
                    case '*': push('keer'); break;
                    case '/': push('gedeeld door'); break;
                    case ':': {
                        // 18 : 3 = 6 is een deling; 3 : 2 zonder uitkomst een verhouding.
                        const isDivision = this.peek()?.t === 'num' && this.peek(1)?.t === 'char' && this.peek(1).v === '=';
                        push(isDivision ? 'gedeeld door' : 'staat tot');
                        break;
                    }
                    case '!': push('faculteit'); break;
                    case "'": push('accent'); break;
                    case ',': push(','); break;
                    case ';': push(';'); break;
                    case '|':
                        push(this.absOpen ? ',' : 'de absolute waarde van');
                        this.absOpen = !this.absOpen;
                        break;
                    case '(': {
                        const { inner } = this.parenContents('(', ')');
                        const prevIsFunction = prev?.t === 'cmd' && FUNCTIONS[prev.v];
                        if (isAtom(inner)) push(speakTokens(inner));
                        else if (prevIsFunction) push(`${speakTokens(inner)},`);
                        else push(`haakje openen ${speakTokens(inner)} haakje sluiten`);
                        break;
                    }
                    case '[': {
                        const { inner } = this.parenContents('[', ']');
                        push(isAtom(inner) ? speakTokens(inner) : `${speakTokens(inner)},`);
                        break;
                    }
                    case '^': {
                        const exp = this.argTokens();
                        const raw = rawText(exp).trim();
                        if (raw === '2') push('kwadraat');
                        else if (raw === '3') push('tot de derde');
                        else if (exp.length === 1 && exp[0].t === 'cmd' && exp[0].v === 'circ') push('graden');
                        else if (exp.length === 1 && exp[0].t === 'cmd' && exp[0].v === 'prime') push('accent');
                        else if (raw === 'T' || raw === 'top') push('getransponeerd');
                        else push(`tot de macht ${speakTokens(exp)}${isAtom(exp) ? '' : ','}`);
                        break;
                    }
                    case '_': {
                        const sub = this.argTokens();
                        push(isAtom(sub) ? speakTokens(sub) : `index ${speakTokens(sub)},`);
                        break;
                    }
                    case '~': case '&': case ')': case ']': case '.': break;
                    default: push(c);
                }
                prev = tok;
                continue;
            }

            // Commando's
            const name = tok.v;
            if (SILENT.has(name)) {
                if (name === 'quad' || name === 'qquad') push(',');
                // \left| en \right|: het teken erna is een normaal teken
                prev = tok;
                continue;
            }
            if (name === '{' || name === '}') { prev = tok; continue; }
            if (name === 'frac' || name === 'tfrac' || name === 'dfrac' || name === 'cfrac') {
                const num = this.argTokens();
                const den = this.argTokens();
                const n = intWord(rawText(num).trim());
                const d = intWord(rawText(den).trim());
                if (n !== null && d !== null && DENOMINATORS[d] && n < 100) {
                    push(d === 2 ? (n === 1 ? 'een half' : `${n} halve`) : `${n === 1 ? 'een' : n} ${DENOMINATORS[d]}`);
                } else if (isAtom(num) && isAtom(den)) {
                    push(`${speakTokens(num)} gedeeld door ${speakTokens(den)}`);
                } else if (isAtom(den)) {
                    push(`de breuk ${speakTokens(num)}, gedeeld door ${speakTokens(den)},`);
                } else {
                    push(`de breuk met teller ${speakTokens(num)}, en noemer ${speakTokens(den)},`);
                }
            } else if (name === 'sqrt') {
                const index = this.optionalArg();
                const radicand = this.argTokens();
                const k = index ? rawText(index).trim() : '2';
                const root = k === '2' ? 'de wortel uit' : k === '3' ? 'de derdemachtswortel uit' : `de ${k}e-machtswortel uit`;
                push(`${root} ${speakTokens(radicand)}${isAtom(radicand) ? '' : ','}`);
            } else if (name === 'binom' || name === 'tbinom' || name === 'dbinom') {
                const n = this.arg();
                const k = this.arg();
                push(`${n} boven ${k}`);
            } else if (TEXT_COMMANDS.has(name)) {
                push(rawText(this.argTokens()).trim());
                // \operatorname{Var}(X): "Var van X"
                if (name === 'operatorname' && this.peek()?.t === 'char' && this.peek().v === '(') {
                    this.next();
                    const { inner } = this.parenContents('(', ')');
                    push(`van ${speakTokens(inner)}${isAtom(inner) ? '' : ','}`);
                }
            } else if (PASS_COMMANDS.has(name)) {
                if (name === 'color' || name === 'textcolor') { this.argTokens(); if (name === 'textcolor') push(this.arg()); }
                else push(this.arg());
            } else if (name in ACCENTS) {
                const [before, after] = ACCENTS[name];
                push([before, this.arg(), after].filter(Boolean).join(' '));
            } else if (name === 'phantom' || name === 'hphantom' || name === 'vphantom') {
                this.argTokens();
            } else if (name === 'underbrace' || name === 'overbrace') {
                push(this.arg());
                if (this.peek()?.t === 'char' && (this.peek().v === '_' || this.peek().v === '^')) {
                    this.next();
                    push(`, dat is ${this.arg()},`);
                }
            } else if (name === 'overset' || name === 'underset' || name === 'stackrel') {
                this.argTokens();
                push(this.arg());
            } else if (name === 'xrightarrow' || name === 'xleftarrow') {
                this.optionalArg();
                const label = this.arg();
                push(label ? `geeft, met ${label},` : 'geeft');
            } else if (name === 'begin') {
                const env = rawText(this.argTokens()).trim();
                push(this.environment(env));
            } else if (name === 'end') {
                this.argTokens();
            } else if (name === 'lim') {
                const { lower } = this.limits();
                push(lower ? `de limiet voor ${lower} van` : 'de limiet van');
            } else if (name === 'sum' || name === 'prod') {
                const { lower, upper } = this.limits();
                const word = name === 'sum' ? 'de som' : 'het product';
                push(lower && upper ? `${word} voor ${lower} tot ${upper} van` : lower ? `${word} over ${lower} van` : `${word} van`);
            } else if (name === 'int' || name === 'iint' || name === 'oint') {
                const { lower, upper } = this.limits();
                push(lower !== null && upper !== null ? `de integraal van ${lower} tot ${upper} van` : 'de integraal van');
            } else if (FUNCTIONS[name]) {
                push(FUNCTIONS[name]);
                // sin^2 x
                if (this.peek()?.t === 'char' && this.peek().v === '^') {
                    this.next();
                    const exp = this.argTokens();
                    push(rawText(exp).trim() === '2' ? 'kwadraat' : `tot de macht ${speakTokens(exp)}`);
                }
                if (this.peek()?.t === 'char' && this.peek().v === '_') {
                    this.next();
                    push(`met grondtal ${this.arg()}`);
                }
                if (this.peek()?.t !== 'char' || this.peek().v !== '(') push('van');
            } else if (name === 'mid') {
                push(this.context.probability ? 'gegeven' : 'is een deler van');
            } else if (GREEK[name]) {
                push(GREEK[name]);
            } else if (WORDS[name]) {
                push(WORDS[name]);
            } else if (name === 'circ') {
                push('na');
            } else if (name === 'prime') {
                push('accent');
            } else if (name.length > 1) {
                // Onbekend commando: de naam is meestal nog het best te begrijpen.
                push(name);
            }
            prev = tok;
        }

        return words.join(' ');
    }
}

function speakTokens(tokens, context = {}) {
    return new Speaker(tokens, context).run();
}

function tidy(text) {
    return text
        .replace(/\s+/g, ' ')
        .replace(/\s+([,;.])/g, '$1')
        .replace(/([,;])(?:\s*[,;])+/g, '$1')
        .replace(/^[,;]\s*/, '')
        .replace(/[,;]\s*$/, '')
        .trim();
}

export function texToSpeech(tex) {
    return tidy(speakTokens(tokenize(tex)));
}
