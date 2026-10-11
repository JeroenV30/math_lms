<?php

namespace App\Services\AnswerCheckers;

use App\ValueObjects\AnswerResult;

/**
 * Meerkeuze: het gekozen alternatief moet het juiste zijn. Het antwoord in de content
 * is de tekst van dat alternatief (niet een letter of nummer), zodat de volgorde van
 * de keuzes vrij te veranderen is.
 */
class ChoiceChecker implements AnswerChecker
{
    public function check(mixed $givenAnswer, mixed $expectedAnswer, array $options = []): AnswerResult
    {
        $given = $this->normalize((string) $givenAnswer);

        if ($given === '') {
            return AnswerResult::invalid('Kies een van de antwoorden.');
        }

        $shown = trim((string) $givenAnswer);

        return $given === $this->normalize((string) $expectedAnswer)
            ? AnswerResult::correct($shown)
            : AnswerResult::incorrect($shown);
    }

    private function normalize(string $value): string
    {
        return mb_strtolower(trim(preg_replace('/\s+/u', ' ', $value)));
    }
}
