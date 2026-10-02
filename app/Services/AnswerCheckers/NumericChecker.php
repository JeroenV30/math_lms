<?php

namespace App\Services\AnswerCheckers;

use App\ValueObjects\AnswerResult;

/**
 * Hele getallen: 518, 1.000, -12.
 */
class NumericChecker implements AnswerChecker
{
    public function __construct(private readonly NumberParser $parser) {}

    public function check(mixed $givenAnswer, mixed $expectedAnswer, array $options = []): AnswerResult
    {
        $given = $this->parser->parse((string) $givenAnswer, $options['unit'] ?? null, integerContext: true);

        if ($given === null) {
            return AnswerResult::invalid('Vul een getal in, bijvoorbeeld 518.');
        }

        $normalized = $this->parser->format($given);

        return abs($given - (float) $expectedAnswer) < 1e-9
            ? AnswerResult::correct($normalized)
            : AnswerResult::incorrect($normalized);
    }
}
