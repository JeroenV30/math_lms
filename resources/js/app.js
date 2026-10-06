import Alpine from 'alpinejs';
import katex from 'katex';
import { renderMath } from './course';
import exercise from './exercises/exercise';
import { numberLine, tally } from './visualisations/counting';
import { babylonian, placeValue, roman } from './visualisations/numeral-systems';
import { areaModel, columnArithmetic, egyptianMultiplication, sharing, sieve, unitLadder } from './visualisations/arithmetic';
import { fraction, percentGrid, ratioTable } from './visualisations/fractions';
import { angle, pythagoras, shapeArea } from './visualisations/geometry';
import { powers, stats } from './visualisations/data';
import { coordinateGrid, functionPlot } from './visualisations/plot';
import { dice, normalDistribution, regression, sampling } from './visualisations/statistics';
import { rightTriangle } from './visualisations/right-triangle';
import { boxplot } from './visualisations/boxplot';
import { unitCircle } from './visualisations/unit-circle';

Alpine.data('exercise', exercise);

Alpine.data('tally', tally);
Alpine.data('numberLine', numberLine);
Alpine.data('placeValue', placeValue);
Alpine.data('babylonian', babylonian);
Alpine.data('roman', roman);
Alpine.data('columnArithmetic', columnArithmetic);
Alpine.data('areaModel', areaModel);
Alpine.data('egyptianMultiplication', egyptianMultiplication);
Alpine.data('sharing', sharing);
Alpine.data('sieve', sieve);
Alpine.data('unitLadder', unitLadder);
Alpine.data('fraction', fraction);
Alpine.data('percentGrid', percentGrid);
Alpine.data('ratioTable', ratioTable);
Alpine.data('angle', angle);
Alpine.data('shapeArea', shapeArea);
Alpine.data('pythagoras', pythagoras);
Alpine.data('stats', stats);
Alpine.data('powers', powers);
Alpine.data('functionPlot', functionPlot);
Alpine.data('coordinateGrid', coordinateGrid);
Alpine.data('normalDistribution', normalDistribution);
Alpine.data('regression', regression);
Alpine.data('sampling', sampling);
Alpine.data('dice', dice);
Alpine.data('rightTriangle', rightTriangle);
Alpine.data('boxplot', boxplot);
Alpine.data('unitCircle', unitCircle);

/**
 * x-katex="expressie": render een reactieve formule, bijv. in een visualisatie.
 */
Alpine.directive('katex', (el, { expression }, { evaluateLater, effect }) => {
    const evaluate = evaluateLater(expression);

    effect(() => {
        evaluate((value) => {
            katex.render(String(value ?? ''), el, {
                displayMode: el.hasAttribute('data-display'),
                throwOnError: false,
                strict: 'ignore',
            });
        });
    });
});

/**
 * Thema toepassen: opgeslagen keuze ('light'/'dark'), anders de systeeminstelling.
 */
window.applyTheme = () => {
    let saved = null;
    try { saved = localStorage.getItem('theme'); } catch (e) { /* geen opslag beschikbaar */ }
    const dark = saved ? saved === 'dark' : window.matchMedia('(prefers-color-scheme: dark)').matches;
    document.documentElement.dataset.theme = dark ? 'dark' : 'light';
};

// Volg de systeeminstelling zolang er geen eigen keuze is opgeslagen.
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => window.applyTheme());

window.Alpine = Alpine;
window.renderMath = renderMath;

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => renderMath());
} else {
    renderMath();
}

Alpine.start();
