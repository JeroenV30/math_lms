<?php

namespace App\Services\AnswerCheckers;

use App\ValueObjects\AnswerResult;

/**
 * Meerdere invoervelden in één oefening, bijvoorbeeld x = [ ] en y = [ ].
 *
 * $expectedAnswer is een lijst delen: [{label, answer, type, ...opties}].
 * $givenAnswer is een array label => antwoord (of een lijst in dezelfde volgorde).
 */
class MultipleChecker implements AnswerChecker
{
    public function __construct(private readonly AnswerCheckerFactory $checkers) {}

    public function check(mixed $givenAnswer, mixed $expectedAnswer, array $options = []): AnswerResult
    {
        $parts = array_values((array) $expectedAnswer);
        $given = is_array($givenAnswer) ? $givenAnswer : [];
        $wrong = [];
        $shown = [];

        foreach ($parts as $i => $part) {
            $label = (string) ($part['label'] ?? 'antwoord '.($i + 1));
            $value = (string) ($given[$label] ?? $given[$i] ?? '');

            if (trim($value) === '') {
                return AnswerResult::invalid("Vul ook {$label} in.");
            }

            $result = $this->checkers->for($part['type'] ?? 'numeric')->check($value, $part['answer'], $part);

            if (! $result->valid) {
                return AnswerResult::invalid("{$label}: {$result->message}");
            }

            $shown[] = "{$label} = {$result->normalized}";

            if (! $result->correct) {
                $wrong[] = $label;
            }
        }

        $normalized = implode('; ', $shown);

        if ($wrong === []) {
            return AnswerResult::correct($normalized);
        }

        return AnswerResult::incorrect(
            $normalized,
            count($wrong) < count($parts) ? 'Nog niet goed: '.implode(' en ', $wrong).'. De rest klopt.' : null,
        );
    }
}
