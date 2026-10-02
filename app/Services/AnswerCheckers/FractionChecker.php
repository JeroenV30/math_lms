<?php

namespace App\Services\AnswerCheckers;

use App\ValueObjects\AnswerResult;
use App\ValueObjects\Fraction;

/**
 * Breuken: 3/4 is gelijkwaardig aan 6/8. Ook gemengde getallen (1 1/2),
 * hele getallen en – als dat mag – kommagetallen.
 *
 * Opties:
 *  - require_simplified: 6/8 is dan nog niet goed als 3/4 bedoeld wordt.
 *  - allow_decimal: 0,75 mag als antwoord op 3/4.
 */
class FractionChecker implements AnswerChecker
{
    private const UNICODE_FRACTIONS = [
        '½' => ' 1/2', '⅓' => ' 1/3', '⅔' => ' 2/3', '¼' => ' 1/4', '¾' => ' 3/4',
        '⅕' => ' 1/5', '⅖' => ' 2/5', '⅗' => ' 3/5', '⅘' => ' 4/5', '⅙' => ' 1/6',
        '⅚' => ' 5/6', '⅛' => ' 1/8', '⅜' => ' 3/8', '⅝' => ' 5/8', '⅞' => ' 7/8',
    ];

    public function __construct(private readonly NumberParser $parser) {}

    public function check(mixed $givenAnswer, mixed $expectedAnswer, array $options = []): AnswerResult
    {
        $given = $this->parse((string) $givenAnswer, $options);

        if ($given === null) {
            return AnswerResult::invalid('Vul een breuk in, bijvoorbeeld 3/4 of 1 1/2.');
        }

        $expected = $this->parse((string) $expectedAnswer, ['allow_decimal' => true]);
        $normalized = (string) $given;

        if ($expected === null || ! $given->equals($expected)) {
            return AnswerResult::incorrect($normalized);
        }

        if (($options['require_simplified'] ?? false) && ! $given->isSimplified()) {
            return AnswerResult::incorrect(
                $normalized,
                'Je breuk heeft de goede waarde, maar is nog niet vereenvoudigd. Deel teller en noemer door hetzelfde getal.',
                AnswerResult::NOT_SIMPLIFIED,
            );
        }

        return AnswerResult::correct($normalized);
    }

    public function parse(string $input, array $options = []): ?Fraction
    {
        $value = $this->parser->clean(strtr($input, self::UNICODE_FRACTIONS), $options['unit'] ?? null);
        $value = str_replace('÷', '/', $value);

        if (preg_match('/^(-?\d+)\s*\/\s*(-?\d+)$/', $value, $m)) {
            return (int) $m[2] === 0 ? null : new Fraction((int) $m[1], (int) $m[2]);
        }

        // Gemengd getal: "1 1/2" of "-2 3/4".
        if (preg_match('/^(-?)(\d+)\s+(\d+)\s*\/\s*(\d+)$/', $value, $m)) {
            $denominator = (int) $m[4];

            if ($denominator === 0) {
                return null;
            }

            $sign = $m[1] === '-' ? -1 : 1;

            return new Fraction($sign * ((int) $m[2] * $denominator + (int) $m[3]), $denominator);
        }

        if (preg_match('/^-?\d+$/', $value)) {
            return new Fraction((int) $value, 1);
        }

        if ($options['allow_decimal'] ?? false) {
            $number = $this->parser->parse($value);

            return $number === null ? null : Fraction::fromFloat($number);
        }

        return null;
    }
}
