"""Controle van de zelfstandige referentieanalyse, zonder externe pakketten."""

import importlib.util
import math
import unittest
from pathlib import Path

ROOT = Path(__file__).resolve().parents[2]
spec = importlib.util.spec_from_file_location('research', ROOT / 'content/modules/42-eindonderzoek/analyse.py')
research = importlib.util.module_from_spec(spec)
spec.loader.exec_module(research)


class ResearchAnalysisTest(unittest.TestCase):
    def test_t_tail_matches_exact_cauchy_distribution(self):
        for t in [0, 0.5, 1, 3, 12]:
            expected = 1 - 2 * math.atan(t) / math.pi
            self.assertAlmostEqual(research.t_p_value(t, 1), expected, places=12)

    def test_critical_values_match_independent_nist_table(self):
        for df, expected in [(1, 12.706), (9, 2.262), (24, 2.064), (50, 2.009)]:
            self.assertAlmostEqual(research.t_critical(df), expected, delta=0.0006)

    def test_group_order_only_changes_the_direction(self):
        a, b = [1, 3, 5, 7], [2, 4, 7, 9]
        forward, backward = research.welch(a, b), research.welch(b, a)
        self.assertAlmostEqual(forward['t'], -backward['t'])
        self.assertAlmostEqual(forward['p_tweezijdig'], backward['p_tweezijdig'])
        self.assertAlmostEqual(forward['interval_95'][0], -backward['interval_95'][1])

    def test_dataset_results_match_the_published_worked_example(self):
        result = research.analyse(ROOT / 'public/datasets/m42-pinguins-palmer-2009.csv')
        self.assertEqual(result['soorten'], {'Adelie': 52, 'Chinstrap': 24, 'Gentoo': 44})
        self.assertEqual(result['lichaamsgewicht_totaal']['n'], 119)
        self.assertEqual(result['ontbrekend']['geslacht'], 3)
        self.assertAlmostEqual(result['welch_adelie']['verschil'], 660.576923, places=5)
        self.assertAlmostEqual(result['welch_adelie']['t'], 6.965253, places=5)
        self.assertAlmostEqual(result['welch_adelie']['interval_95'][0], 469.61, delta=0.005)
        self.assertAlmostEqual(result['welch_adelie']['interval_95'][1], 851.54, delta=0.005)
        self.assertAlmostEqual(result['regressie_adelie']['r2'], 0.255757608, places=8)


if __name__ == '__main__':
    unittest.main()
