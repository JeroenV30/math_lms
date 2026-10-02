<?php

namespace App\ValueObjects;

use InvalidArgumentException;

/**
 * Een breuk teller/noemer. Het teken staat altijd in de teller.
 */
final readonly class Fraction
{
    public int $numerator;

    public int $denominator;

    public function __construct(int $numerator, int $denominator)
    {
        if ($denominator === 0) {
            throw new InvalidArgumentException('De noemer van een breuk kan niet 0 zijn.');
        }

        if ($denominator < 0) {
            $numerator = -$numerator;
            $denominator = -$denominator;
        }

        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }

    public static function fromFloat(float $value, int $maxDenominator = 10000): self
    {
        // Kettingbreukbenadering: 0,75 → 3/4, 0,333333 → 1/3.
        $sign = $value < 0 ? -1 : 1;
        $value = abs($value);
        [$h1, $h0, $k1, $k0] = [1, 0, 0, 1];
        $x = $value;

        do {
            $a = (int) floor($x);
            [$h1, $h0] = [$a * $h1 + $h0, $h1];
            [$k1, $k0] = [$a * $k1 + $k0, $k1];

            if ($k1 > $maxDenominator) {
                [$h1, $k1] = [$h0, $k0];
                break;
            }

            $fractional = $x - $a;
            $x = $fractional == 0.0 ? 0 : 1 / $fractional;
        } while ($fractional > 1e-12 && abs($value - $h1 / $k1) > 1e-9);

        return new self($sign * $h1, $k1);
    }

    public function simplified(): self
    {
        $gcd = self::gcd(abs($this->numerator), $this->denominator);

        return new self(intdiv($this->numerator, $gcd), intdiv($this->denominator, $gcd));
    }

    public function isSimplified(): bool
    {
        return self::gcd(abs($this->numerator), $this->denominator) === 1;
    }

    public function equals(self $other): bool
    {
        // Kruislings vermenigvuldigen: a/b = c/d ⇔ a·d = c·b.
        return $this->numerator * $other->denominator === $other->numerator * $this->denominator;
    }

    public function toFloat(): float
    {
        return $this->numerator / $this->denominator;
    }

    public function __toString(): string
    {
        return $this->denominator === 1
            ? (string) $this->numerator
            : $this->numerator.'/'.$this->denominator;
    }

    private static function gcd(int $a, int $b): int
    {
        while ($b !== 0) {
            [$a, $b] = [$b, $a % $b];
        }

        return max($a, 1);
    }
}
