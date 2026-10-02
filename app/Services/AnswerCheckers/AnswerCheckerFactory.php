<?php

namespace App\Services\AnswerCheckers;

use Illuminate\Contracts\Container\Container;
use InvalidArgumentException;

class AnswerCheckerFactory
{
    /**
     * Antwoordtype → checker. Expression-, coordinate- en intervalcheckers
     * komen hier pas bij wanneer algebra in de cursus verschijnt.
     */
    private const CHECKERS = [
        'numeric' => NumericChecker::class,
        'decimal' => DecimalChecker::class,
        'fraction' => FractionChecker::class,
    ];

    public function __construct(private readonly Container $container) {}

    public function for(string $type): AnswerChecker
    {
        $class = self::CHECKERS[$type] ?? throw new InvalidArgumentException("Onbekend antwoordtype [{$type}].");

        return $this->container->make($class);
    }

    public function supports(string $type): bool
    {
        return isset(self::CHECKERS[$type]);
    }
}
