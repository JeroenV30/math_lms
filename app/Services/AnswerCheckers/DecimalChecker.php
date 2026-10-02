<?php

namespace App\Services\AnswerCheckers;

use App\ValueObjects\AnswerResult;

/**
 * Kommagetallen met instelbare tolerantie: 3,1416 (± tolerance).
 */
class DecimalChecker implements AnswerChecker
{
    public const DEFAULT_TOLERANCE = 0.000001;

    public function __construct(private readonly NumberParser $parser) {}

    public function check(mixed $givenAnswer, mixed $expectedAnswer, array $options = []): AnswerResult
    {
        $given = $this->parser->parse((string) $givenAnswer, $options['unit'] ?? null);

        if ($given === null) {
            return AnswerResult::invalid('Vul een getal in, bijvoorbeeld 3,25.');
        }

        $expected = is_string($expectedAnswer)
            ? $this->parser->parse($expectedAnswer)
            : (float) $expectedAnswer;

        $tolerance = (float) ($options['tolerance'] ?? self::DEFAULT_TOLERANCE);
        $normalized = $this->parser->format($given);

        // Kleine marge voor afrondingsfouten van de computer bovenop de inhoudelijke tolerantie.
        return $expected !== null && abs($given - $expected) <= $tolerance + 1e-9
            ? AnswerResult::correct($normalized)
            : AnswerResult::incorrect($normalized);
    }
}
