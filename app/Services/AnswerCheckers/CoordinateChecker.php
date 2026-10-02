<?php

namespace App\Services\AnswerCheckers;

use App\ValueObjects\AnswerResult;

/**
 * Coördinaten: "(3, 7)", "(3; 7)", "3,5 ; -2". Opties: tolerance.
 *
 * Omdat de komma ook decimaalteken is, scheidt een puntkomma altijd de
 * coördinaten; zonder puntkomma wordt een komma met spatie erachter als
 * scheiding gelezen, en anders een enkele komma.
 */
class CoordinateChecker implements AnswerChecker
{
    public function __construct(private readonly NumberParser $numbers) {}

    public function check(mixed $givenAnswer, mixed $expectedAnswer, array $options = []): AnswerResult
    {
        $given = $this->parse((string) $givenAnswer);

        if ($given === null) {
            return AnswerResult::invalid('Schrijf een punt als (x; y), bijvoorbeeld (3; 7).');
        }

        $expected = is_array($expectedAnswer) ? array_map('floatval', $expectedAnswer) : $this->parse((string) $expectedAnswer);
        $tolerance = (float) ($options['tolerance'] ?? 1e-6);
        $normalized = '('.implode('; ', array_map(fn ($v) => $this->numbers->format($v), $given)).')';

        if ($expected === null || count($given) !== count($expected)) {
            return AnswerResult::incorrect($normalized);
        }

        foreach ($given as $i => $value) {
            if (abs($value - $expected[$i]) > $tolerance + 1e-9) {
                $swapped = count($given) === 2
                    && abs($given[0] - $expected[1]) <= $tolerance + 1e-9
                    && abs($given[1] - $expected[0]) <= $tolerance + 1e-9;

                return AnswerResult::incorrect($normalized, $swapped ? 'Je hebt x en y omgewisseld: eerst de x-coördinaat (horizontaal), dan de y-coördinaat.' : null, $swapped ? 'swapped' : AnswerResult::INCORRECT);
            }
        }

        return AnswerResult::correct($normalized);
    }

    /**
     * @return list<float>|null
     */
    public function parse(string $input): ?array
    {
        $s = trim(str_replace(["\u{2212}"], '-', $input));
        $s = trim(preg_replace('/^[A-Z]\s*=?\s*/', '', $s));
        $s = trim($s, ' ()[]{}');

        if ($s === '') {
            return null;
        }

        $parts = match (true) {
            str_contains($s, ';') => explode(';', $s),
            (bool) preg_match('/,\s/', $s) => preg_split('/,\s+/', $s),
            substr_count($s, ',') === 1 => explode(',', $s),
            default => preg_split('/\s+/', $s),
        };

        $values = [];
        foreach ($parts as $part) {
            $value = $this->numbers->parse(trim($part));
            if ($value === null) {
                return null;
            }
            $values[] = $value;
        }

        return count($values) >= 2 ? $values : null;
    }
}
