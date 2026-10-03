<?php

namespace App\Services\AnswerCheckers;

use App\ValueObjects\AnswerResult;

/**
 * Interpretatievragen (bouwplan §11): niet automatisch woord voor woord
 * beoordeeld. Een voldoende uitgewerkt antwoord wordt opgeslagen; daarna
 * vergelijkt de leerling het zelf met het modelantwoord.
 *
 * Opties: min_length (standaard 40 tekens).
 */
class TextChecker implements AnswerChecker
{
    public const SUBMITTED = 'submitted';

    public function check(mixed $givenAnswer, mixed $expectedAnswer, array $options = []): AnswerResult
    {
        $text = trim(preg_replace('/\s+/', ' ', (string) $givenAnswer));
        $min = (int) ($options['min_length'] ?? 40);

        if (mb_strlen($text) < $min) {
            return AnswerResult::invalid("Schrijf je antwoord in een paar volledige zinnen (minstens {$min} tekens).");
        }

        return new AnswerResult(true, true, self::SUBMITTED, 'Je antwoord is opgeslagen. Vergelijk het nu met het modelantwoord hieronder.', $text);
    }
}
