<?php

namespace App\Services\AnswerCheckers;

use App\ValueObjects\AnswerResult;

/**
 * Eén centrale interface voor alle antwoordtypen. De rest van de applicatie
 * weet zo nooit welk soort antwoord er gecontroleerd wordt.
 */
interface AnswerChecker
{
    public function check(mixed $givenAnswer, mixed $expectedAnswer, array $options = []): AnswerResult;
}
