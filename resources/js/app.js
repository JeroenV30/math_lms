import Alpine from 'alpinejs';
import katex from 'katex';
import { renderMath } from './course';
import exercise from './exercises/exercise';
import { numberLine, tally } from './visualisations/counting';
import { babylonian, placeValue, roman } from './visualisations/numeral-systems';
import { areaModel, columnArithmetic, egyptianMultiplication, sharing, sieve, unitLadder } from './visualisations/arithmetic';

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

window.Alpine = Alpine;
window.renderMath = renderMath;

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => renderMath());
} else {
    renderMath();
}

Alpine.start();
