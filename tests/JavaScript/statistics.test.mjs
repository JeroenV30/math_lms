import test from 'node:test';
import assert from 'node:assert/strict';
import { phi, normalDistribution, regression, sampling, dice } from '../../resources/js/visualisations/statistics.js';

const close = (actual, expected, tolerance = 1e-6) => assert.ok(Math.abs(actual - expected) < tolerance, `${actual} ≠ ${expected}`);

test('normale kansen volgen symmetrie en de bekende centrale 95%-band', () => {
    close(phi(0), 0.5);
    close(phi(1.96), 0.975, 0.00001);
    close(phi(-2), 1 - phi(2));
    const chart = normalDistribution({ mu: 100, sigma: 15, lower: 70.6, upper: 129.4 });
    close(chart.probability, 0.95, 0.00002);
    assert.doesNotMatch(chart.svg, /NaN|Infinity/);
    [chart.lower, chart.upper] = [chart.upper, chart.lower];
    close(chart.probability, 0.95, 0.00002);
});

test('regressie komt overeen met het handmatig uitgewerkte lesvoorbeeld', () => {
    const chart = regression({ points: '(1;2) (2;4) (3;5) (4;4) (5;5)' });
    close(chart.stats.slope, 0.6);
    close(chart.stats.intercept, 2.2);
    close(chart.stats.r2, 0.6);
    assert.doesNotMatch(chart.svg, /NaN|Infinity/);
});

test('een constante verklarende variabele heeft geen definieerbare helling', () => {
    const chart = regression({ points: '(2;1) (2;3) (2;5)' });
    assert.ok(Number.isNaN(chart.stats.slope));
    assert.ok(Number.isNaN(chart.stats.r));
    assert.doesNotMatch(chart.svg, /NaN|Infinity/);
});

test('steekproefsimulatie is reproduceerbaar en grotere n verkleint de theoretische SE', () => {
    const small = sampling({ n: 5, seed: 38 });
    const duplicate = sampling({ n: 5, seed: 38 });
    const large = sampling({ n: 100, seed: 38 });
    small.draw(200);
    duplicate.draw(200);
    assert.deepEqual(small.means, duplicate.means);
    close(small.se / large.se, Math.sqrt(20));
    assert.ok(Number.isFinite(small.last.low));
    assert.doesNotMatch(small.svg, /NaN|Infinity/);
    small.reset();
    assert.equal(small.means.length, 0);
    assert.equal(small.last, null);
});

test('twee dobbelstenen hebben een volledige verdeling met zes manieren voor som zeven', () => {
    const chart = dice({ dice: 2, seed: 36 });
    close(chart.outcomes.reduce((sum, value) => sum + chart.theoretical(value), 0), 1);
    close(chart.theoretical(7), 1 / 6);
    close(chart.theoretical(2), 1 / 36);
    chart.roll(1000);
    assert.equal(Object.values(chart.tally).reduce((a, b) => a + b, 0), 1000);
    assert.doesNotMatch(chart.svg, /NaN|Infinity/);
});
