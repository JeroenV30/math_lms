import test from 'node:test';
import assert from 'node:assert/strict';
import { unitCircle } from '../../resources/js/visualisations/unit-circle.js';
const near = (value, expected) => assert.ok(Math.abs(value - expected) < 1e-12);
test('eenheidscirkel heeft juiste kwadranten en tekenrichting', () => {
    for (const [angle, x, y] of [[0,1,0],[90,0,1],[180,-1,0],[270,0,-1],[-90,0,-1]]) {
        const circle = unitCircle({ angle });
        near(circle.cosine, x); near(circle.sine, y);
    }
});
test('periodiciteit en identiteit gelden ook na meerdere omwentelingen', () => {
    for (const angle of [-320, -15, 30, 145, 270, 355]) {
        const a = unitCircle({ angle }), b = unitCircle({ angle: angle + 360 });
        near(a.sine, b.sine); near(a.cosine, b.cosine);
        near(a.sine ** 2 + a.cosine ** 2, 1);
        assert.doesNotMatch(a.svg, /NaN|Infinity/);
    }
});
test('tangens wordt bij verticale richtingen niet als een eindig getal getoond', () => {
    assert.equal(unitCircle({angle:90}).tangent, null);
    assert.equal(unitCircle({angle:270}).tangent, null);
    assert.equal(unitCircle({angle:'onjuist'}).angle, 30);
});
