<?php

namespace App\ValueObjects;

/**
 * Uitkomst van één antwoordcontrole.
 *
 * Een ongeldig antwoord ("abc" bij een getalvraag) is geen fout antwoord:
 * het wordt niet opgeslagen en telt niet mee voor de beheersing.
 */
final readonly class AnswerResult
{
    public const CORRECT = 'correct';

    public const INCORRECT = 'incorrect';

    public const INVALID = 'invalid';

    public const NOT_SIMPLIFIED = 'not_simplified';

    public function __construct(
        public bool $valid,
        public bool $correct,
        public string $code,
        public ?string $message = null,
        public ?string $normalized = null,
    ) {}

    public static function correct(string $normalized): self
    {
        return new self(true, true, self::CORRECT, null, $normalized);
    }

    public static function incorrect(string $normalized, ?string $message = null, string $code = self::INCORRECT): self
    {
        return new self(true, false, $code, $message, $normalized);
    }

    public static function invalid(string $message): self
    {
        return new self(false, false, self::INVALID, $message);
    }
}
