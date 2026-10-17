<?php

namespace App\Services\AnswerCheckers;

use App\ValueObjects\AnswerResult;

/**
 * Ordenen: de items moeten in precies de goede volgorde staan, bijvoorbeeld
 * gebeurtenissen van oud naar nieuw. Het antwoord in de content is de lijst in
 * de juiste volgorde; de leerling krijgt dezelfde items geschud te zien.
 */
class OrderChecker implements AnswerChecker
{
    public function check(mixed $givenAnswer, mixed $expectedAnswer, array $options = []): AnswerResult
    {
        $given = array_map(fn ($item) => $this->normalize((string) $item), array_values((array) $givenAnswer));
        $expected = array_map(fn ($item) => $this->normalize((string) $item), array_values((array) $expectedAnswer));

        // Alleen een herschikking van precies dezelfde items is een geldig antwoord.
        $sortedGiven = $given;
        $sortedExpected = $expected;
        sort($sortedGiven);
        sort($sortedExpected);

        if ($given === [] || $sortedGiven !== $sortedExpected) {
            return AnswerResult::invalid('Zet alle items in een volgorde.');
        }

        $shown = implode(' → ', array_map(fn ($item) => trim((string) $item), array_values((array) $givenAnswer)));

        if ($given === $expected) {
            return AnswerResult::correct($shown);
        }

        $inPlace = count(array_filter($given, fn ($item, $i) => $item === $expected[$i], ARRAY_FILTER_USE_BOTH));
        $total = count($expected);

        return AnswerResult::incorrect($shown, "Nog niet goed: {$inPlace} van de {$total} staan op de juiste plek.");
    }

    private function normalize(string $value): string
    {
        return mb_strtolower(trim(preg_replace('/\s+/u', ' ', $value)));
    }
}
