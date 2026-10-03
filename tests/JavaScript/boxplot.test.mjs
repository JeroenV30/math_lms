import test from 'node:test';
import assert from 'node:assert/strict';
import { describeValues, boxplot } from '../../resources/js/visualisations/boxplot.js';

test('bekende populatie en steekproef hebben verschillende spreiding', () => {
    const s = describeValues([2, 4, 4, 4, 5, 5, 7, 9]);
    assert.equal(s.mean, 5);
    assert.equal(s.variance, 4);
    assert.equal(s.sd, 2);
    assert.equal(s.sampleSd, Math.sqrt(32 / 7));
    assert.deepEqual([s.min, s.q1, s.median, s.q3, s.max], [2, 4, 4.5, 6, 9]);
});
test('kwartielconventie sluit de middelste observatie uit', () => {
    const s = describeValues([9, 1, 5, 3, 7]);
    assert.deepEqual([s.q1, s.median, s.q3], [2, 5, 8]);
    assert.equal(describeValues([]), null);
    assert.equal(describeValues([3]).sampleSd, null);
    assert.equal(describeValues([3, 3]).sd, 0);
});
test('negatieve waarden, decimale kommas en lege invoer blijven bruikbaar', () => {
    const chart = boxplot({ values: '-2,5; 0; 2,5; onjuist' });
    assert.deepEqual(chart.values, [-2.5, 0, 2.5]);
    assert.doesNotMatch(chart.svg, /NaN|Infinity/);
    chart.input = '';
    assert.deepEqual(chart.values, []);
    assert.equal(chart.svg, '');
});
