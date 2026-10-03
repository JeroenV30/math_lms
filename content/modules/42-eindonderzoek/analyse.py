"""Reproduceer het eindonderzoek met alleen de Python-standaardbibliotheek.

Gebruik vanuit de projectmap:
    python content/modules/42-eindonderzoek/analyse.py
Optioneel: --json voor machineleesbare uitkomsten, --data pad/naar/dataset.csv.
Dit script leest de dataset; het wijzigt geen bestanden of leergegevens.
"""

import argparse
import csv
import json
import math
import statistics
from pathlib import Path


def beta_fraction(a, b, x):
    """Continued fraction voor de geregulariseerde incomplete beta-functie."""
    tiny = 1e-300
    qab, qap, qam = a + b, a + 1, a - 1
    c, d = 1.0, 1 - qab * x / qap
    d = 1 / (d if abs(d) > tiny else tiny)
    result = d
    for m in range(1, 501):
        aa = m * (b - m) * x / ((qam + 2 * m) * (a + 2 * m))
        d = 1 + aa * d
        c = 1 + aa / c
        d = 1 / (d if abs(d) > tiny else tiny)
        c = c if abs(c) > tiny else tiny
        result *= d * c
        aa = -(a + m) * (qab + m) * x / ((a + 2 * m) * (qap + 2 * m))
        d = 1 + aa * d
        c = 1 + aa / c
        d = 1 / (d if abs(d) > tiny else tiny)
        c = c if abs(c) > tiny else tiny
        change = d * c
        result *= change
        if abs(change - 1) < 1e-14:
            return result
    raise ArithmeticError('Incomplete beta-functie convergeert niet.')


def regularized_beta(x, a, b):
    if x <= 0:
        return 0.0
    if x >= 1:
        return 1.0
    weight = math.exp(math.lgamma(a + b) - math.lgamma(a) - math.lgamma(b)
                      + a * math.log(x) + b * math.log1p(-x))
    if x < (a + 1) / (a + b + 2):
        return weight * beta_fraction(a, b, x) / a
    return 1 - weight * beta_fraction(b, a, 1 - x) / b


def t_p_value(t, df):
    """Tweezijdige Student-t-staartkans; bruikbaar voor niet-gehele Welch-df."""
    if df <= 0:
        raise ValueError('Vrijheidsgraden moeten positief zijn.')
    return regularized_beta(df / (df + t * t), df / 2, 0.5)


def t_critical(df, alpha=0.05):
    low, high = 0.0, 1.0
    while t_p_value(high, df) > alpha:
        high *= 2
    for _ in range(70):
        middle = (low + high) / 2
        if t_p_value(middle, df) > alpha:
            low = middle
        else:
            high = middle
    return (low + high) / 2


def describe(values):
    return dict(n=len(values), gemiddelde=statistics.mean(values),
                mediaan=statistics.median(values),
                standaardafwijking=statistics.stdev(values),
                minimum=min(values), maximum=max(values))


def welch(first, second):
    n1, n2 = len(first), len(second)
    v1, v2 = statistics.variance(first) / n1, statistics.variance(second) / n2
    difference = statistics.mean(first) - statistics.mean(second)
    se = math.sqrt(v1 + v2)
    df = (v1 + v2) ** 2 / (v1 ** 2 / (n1 - 1) + v2 ** 2 / (n2 - 1))
    t = difference / se
    margin = t_critical(df) * se
    return dict(verschil=difference, standaardfout=se, t=t, df=df,
                p_tweezijdig=t_p_value(t, df),
                interval_95=[difference - margin, difference + margin])


def regression(points):
    xs, ys = zip(*points)
    mx, my = statistics.mean(xs), statistics.mean(ys)
    sxx = sum((x - mx) ** 2 for x in xs)
    syy = sum((y - my) ** 2 for y in ys)
    sxy = sum((x - mx) * (y - my) for x, y in points)
    slope = sxy / sxx
    intercept = my - slope * mx
    r = sxy / math.sqrt(sxx * syy)
    return dict(n=len(points), helling=slope, intercept=intercept, r=r, r2=r * r,
                sse=sum((y - intercept - slope * x) ** 2 for x, y in points))


def analyse(path):
    with Path(path).open(encoding='utf-8-sig', newline='') as file:
        rows = list(csv.DictReader(file))
    missing = lambda value: value in ('', 'NA')
    masses = lambda selected: [float(r['lichaamsgewicht_g']) for r in selected
                              if not missing(r['lichaamsgewicht_g'])]
    adelie = [r for r in rows if r['soort'] == 'Adelie']
    men = masses([r for r in adelie if r['geslacht'] == 'man'])
    women = masses([r for r in adelie if r['geslacht'] == 'vrouw'])
    points = [(float(r['vleugellengte_mm']), float(r['lichaamsgewicht_g']))
              for r in adelie if not missing(r['vleugellengte_mm'])
              and not missing(r['lichaamsgewicht_g'])]
    return dict(
        rijen=len(rows),
        soorten={s: sum(r['soort'] == s for r in rows)
                 for s in sorted({r['soort'] for r in rows})},
        ontbrekend={key: sum(missing(r[key]) for r in rows) for key in rows[0]},
        lichaamsgewicht_totaal=describe(masses(rows)),
        adelie_man=describe(men), adelie_vrouw=describe(women),
        welch_adelie=welch(men, women), regressie_adelie=regression(points))


def main():
    parser = argparse.ArgumentParser(description=__doc__)
    parser.add_argument('--data', type=Path,
                        default=Path(__file__).resolve().parents[3]
                        / 'public/datasets/m42-pinguins-palmer-2009.csv')
    parser.add_argument('--json', action='store_true')
    args = parser.parse_args()
    result = analyse(args.data)
    if not args.json:
        print('Palmer Penguins — jaar 2009; massa in gram, vleugellengte in mm.')
        print('Inferentie is een modelmatige oefening: deze velddata zijn geen gerandomiseerd experiment.')
        print('Welch-verschil: Adélie man minus vrouw. Regressie: alleen Adélie.')
    print(json.dumps(result, ensure_ascii=False, indent=2))


if __name__ == '__main__':
    main()
