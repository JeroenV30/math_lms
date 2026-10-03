import test from 'node:test';
import assert from 'node:assert/strict';
import { rightTriangle } from '../../resources/js/visualisations/right-triangle.js';

test('de zijden voldoen aan Pythagoras voor scherpe hoeken', () => {
    for (const angle of [1, 15, 30, 45, 60, 89]) {
        const triangle = rightTriangle({ angle, hypotenuse: 13 });
        assert.ok(Math.abs(triangle.opposite ** 2 + triangle.adjacent ** 2 - 169) < 1e-10);
        assert.ok(triangle.opposite > 0 && triangle.adjacent > 0);
        assert.doesNotMatch(triangle.svg, /NaN|Infinity/);
    }
});

test('schaal verandert de zijden maar bewaart de verhoudingen', () => {
    const small = rightTriangle({ angle: 37, hypotenuse: 5 });
    const large = rightTriangle({ angle: 37, hypotenuse: 15 });
    assert.ok(Math.abs(large.opposite - 3 * small.opposite) < 1e-10);
    assert.ok(Math.abs(large.adjacent - 3 * small.adjacent) < 1e-10);
    for (const ratio of ['sine', 'cosine', 'tangent']) {
        assert.ok(Math.abs(small[ratio] - large[ratio]) < 1e-10);
    }
});

test('ongeldige parameters veroorzaken geen nuldeling of ongeldige tekening', () => {
    const triangle = rightTriangle({ angle: 'onbekend', hypotenuse: 0 });
    triangle.angle = 90;
    triangle.hypotenuse = -5;
    triangle.normalize();
    assert.equal(triangle.angle, 89);
    assert.equal(triangle.hypotenuse, 1);
    assert.ok(Number.isFinite(triangle.tangent));
    assert.doesNotMatch(triangle.svg, /NaN|Infinity/);
});
