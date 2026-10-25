import test from 'node:test';
import assert from 'node:assert/strict';
import { texToSpeech } from '../../resources/js/speech/tex-to-speech.js';

const cases = [
    ['x^2 + 1', 'x kwadraat plus 1'],
    ['a^3', 'a tot de derde'],
    ['2^{n+1}', '2 tot de macht n plus 1'],
    ['\\frac{1}{2}', 'een half'],
    ['\\tfrac{3}{4}', '3 vierde'],
    ['\\frac{a}{b}', 'a gedeeld door b'],
    ['\\frac{x+1}{x-1}', 'de breuk met teller x plus 1, en noemer x min 1'],
    ['\\sqrt{16} = 4', 'de wortel uit 16 is 4'],
    ['\\sqrt[3]{27}', 'de derdemachtswortel uit 27'],
    ['a_n', 'a n'],
    ['a_{n+1}', 'a index n plus 1'],
    ['f(x) = 3x - 2', 'f van x is 3 x min 2'],
    ["f'(x)", 'f accent van x'],
    ['\\sin(\\alpha)', 'sinus alfa'],
    ['\\sin^2 x + \\cos^2 x = 1', 'sinus kwadraat van x plus cosinus kwadraat van x is 1'],
    ['2{,}5 \\cdot 4', '2,5 keer 4'],
    ['1\\,000', '1000'],
    ['(3,4)', 'haakje openen 3, 4 haakje sluiten'],
    ['2(x+3)', '2 haakje openen x plus 3 haakje sluiten'],
    ['30^\\circ', '30 graden'],
    ['\\pi r^2', 'pi r kwadraat'],
    ['x \\le 5', 'x is kleiner dan of gelijk aan 5'],
    ['\\vec{v}', 'vector v'],
    ['\\bar{x}', 'x streep'],
    ['\\binom{5}{2}', '5 boven 2'],
    ['\\lim_{x \\to 0} f(x)', 'de limiet voor x naar 0 van f van x'],
    ['\\sum_{i=1}^{n} i', 'de som voor i is 1 tot n van i'],
    ['\\int_0^1 x\\,dx', 'de integraal van 0 tot 1 van x d x'],
    ['\\text{oppervlakte} = l \\times b', 'oppervlakte is l keer b'],
    ['P(A \\mid B)', 'P van A gegeven B'],
    ['|x|', 'de absolute waarde van x'],
    ['\\log_2 8 = 3', 'log met grondtal 2 van 8 is 3'],
    ['\\begin{pmatrix} 1 & 2 \\\\ 3 & 4 \\end{pmatrix}', 'de matrix met rijen: 1 2; 3 4.'],
    ['5!', '5 faculteit'],
    ['18 : 3 = 6', '18 gedeeld door 3 is 6'],
    ['3 : 2', '3 staat tot 2'],
    ['\\tfrac13 + \\frac1{15}', 'een derde plus 1 gedeeld door 15'],
    ['x^23', 'x kwadraat 3'],
    ['\\operatorname{Var}(X)', 'Var van X'],
    ['3 \\mid 15', '3 is een deler van 15'],
    ['\\frac{180^\\circ}{\\pi}', 'de breuk 180 graden, gedeeld door pi'],
    ['\\left( \\frac{1}{2} \\right)^2', 'haakje openen een half haakje sluiten kwadraat'],
];

test('veelgebruikte formules worden in gesproken Nederlands omgezet', () => {
    for (const [tex, spoken] of cases) {
        assert.equal(texToSpeech(tex), spoken, tex);
    }
});

test('onbekende of lege invoer geeft geen fout', () => {
    assert.equal(texToSpeech(''), '');
    assert.equal(texToSpeech(null), '');
    assert.equal(typeof texToSpeech('\\onbekend{x} + \\frac{1}'), 'string');
    assert.equal(typeof texToSpeech('{{{'), 'string');
});
