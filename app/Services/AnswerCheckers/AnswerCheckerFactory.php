<?php

namespace App\Services\AnswerCheckers;

use Illuminate\Contracts\Container\Container;
use InvalidArgumentException;

class AnswerCheckerFactory
{
    /**
     * Antwoordtype → checker.
     */
    private const CHECKERS = [
        'numeric' => NumericChecker::class,
        'decimal' => DecimalChecker::class,
        'fraction' => FractionChecker::class,
        'expression' => ExpressionChecker::class,
        'coordinate' => CoordinateChecker::class,
        'interval' => IntervalChecker::class,
        'multiple' => MultipleChecker::class,
        'text' => TextChecker::class,
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
