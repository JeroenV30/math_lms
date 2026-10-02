<?php

namespace App\Services\AnswerCheckers;

use App\Services\AnswerCheckers\Expression\ExpressionParser;
use App\ValueObjects\AnswerResult;
use InvalidArgumentException;

/**
 * Algebraïsche expressies: "2x + 4" is goed als "2(x + 2)" verwacht wordt.
 *
 * Twee expressies gelden als gelijk wanneer ze op een reeks willekeurige
 * punten dezelfde waarde hebben. Opties:
 *  - form: "expanded" (geen haakjes: herleid/uitgewerkt), "factored" (wel haakjes).
 */
class ExpressionChecker implements AnswerChecker
{
    private const SAMPLES = 8;

    public function __construct(private readonly ExpressionParser $parser) {}

    public function check(mixed $givenAnswer, mixed $expectedAnswer, array $options = []): AnswerResult
    {
        $input = trim((string) $givenAnswer);

        // "y = 2x + 3" of "f(x) = …": alleen de rechterkant telt.
        $input = preg_replace('/^\s*[a-z](\([a-z]\))?\s*=\s*/i', '', $input);

        try {
            $given = $this->parser->parse($input);
        } catch (InvalidArgumentException) {
            return AnswerResult::invalid('Dit is geen geldige expressie. Schrijf bijvoorbeeld 2x + 4 of 3(x − 1).');
        }

        $expected = $this->parser->parse(preg_replace('/^\s*[a-z](\([a-z]\))?\s*=\s*/i', '', (string) $expectedAnswer));
        $normalized = preg_replace('/\s+/', ' ', $input);

        $unknown = array_diff($given['variables'], $expected['variables']);
        if ($unknown !== [] && $expected['variables'] !== []) {
            return AnswerResult::incorrect($normalized, 'In je antwoord staat een variabele die hier niet hoort: '.implode(', ', $unknown).'.');
        }

        if (! $this->equivalent($given, $expected)) {
            return AnswerResult::incorrect($normalized);
        }

        $form = $options['form'] ?? null;
        if ($form === 'expanded' && str_contains($input, '(')) {
            return AnswerResult::incorrect($normalized, 'Je antwoord heeft de goede waarde, maar werk de haakjes nog weg.', 'not_expanded');
        }
        if ($form === 'factored' && ! str_contains($input, '(')) {
            return AnswerResult::incorrect($normalized, 'Je antwoord heeft de goede waarde, maar schrijf het als product (ontbind in factoren).', 'not_factored');
        }

        return AnswerResult::correct($normalized);
    }

    private function equivalent(array $a, array $b): bool
    {
        $variables = array_values(array_unique([...$a['variables'], ...$b['variables']]));
        $valid = 0;

        // Vaste, gespreide punten: reproduceerbaar en zonder nul (deling, wortels).
        for ($i = 1; $i <= self::SAMPLES * 3 && $valid < self::SAMPLES; $i++) {
            $point = [];
            foreach ($variables as $j => $name) {
                $point[$name] = 0.37 + 1.13 * $i + 0.71 * $j + ($i % 2 ? 0 : -6.1);
            }

            $x = ($a['evaluate'])($point);
            $y = ($b['evaluate'])($point);

            if (! is_finite($x) || ! is_finite($y)) {
                if (is_finite($x) !== is_finite($y) && $variables === []) {
                    return false;
                }

                continue;
            }

            if (abs($x - $y) > 1e-7 * max(1.0, abs($x), abs($y))) {
                return false;
            }

            $valid++;
        }

        return $valid >= min(3, self::SAMPLES);
    }
}
