<?php

namespace App\Services\AnswerCheckers;

/**
 * Leest getallen zoals mensen ze intypen: "1.000", "1 000", "3,14", "3.14",
 * "€ 4,50", "−12", "25 cm".
 */
class NumberParser
{
    /**
     * Haal valuta, eenheid en overbodige spaties weg en normaliseer het minteken.
     */
    public function clean(string $input, ?string $unit = null): string
    {
        $value = trim(str_replace(["\u{00A0}", "\u{202F}"], ' ', $input));
        $value = str_replace(["\u{2212}", "\u{2013}", "\u{2014}"], '-', $value);
        $value = preg_replace('/^(€|eur(o)?)\s*/iu', '', $value);
        $value = preg_replace('/\s*(€|eur(o)?)$/iu', '', $value);

        if ($unit !== null && $unit !== '' && $unit !== '€') {
            $quoted = preg_quote($unit, '/');
            $value = preg_replace('/\s*'.$quoted.'\.?$/iu', '', $value);
            $value = preg_replace('/^'.$quoted.'\s*/iu', '', $value);
        }

        // "- 12" → "-12"
        return preg_replace('/^-\s+/', '-', trim($value));
    }

    /**
     * Parse een geheel of decimaal getal; null als de invoer geen getal is.
     *
     * Met $integerContext wordt "1.000" gelezen als duizend (Nederlandse
     * notatie); anders als één komma nul nul nul.
     */
    public function parse(string $input, ?string $unit = null, bool $integerContext = false): ?float
    {
        $value = $this->clean($input, $unit);

        if ($value === '' || ! preg_match('/^-?[\d\s.,]+$/', $value)) {
            return null;
        }

        $negative = str_starts_with($value, '-');
        $value = ltrim($value, '-');

        // Spaties alleen als duizendtalscheiding: "1 000 000".
        if (str_contains($value, ' ')) {
            if (! preg_match('/^\d{1,3}( \d{3})+([.,]\d+)?$/', $value)) {
                return null;
            }
            $value = str_replace(' ', '', $value);
        }

        $hasComma = str_contains($value, ',');
        $hasDot = str_contains($value, '.');

        if ($hasComma && $hasDot) {
            // Het laatste scheidingsteken is de decimaalscheiding.
            $decimal = strrpos($value, ',') > strrpos($value, '.') ? ',' : '.';
            $thousands = $decimal === ',' ? '.' : ',';
            $value = str_replace([$thousands, $decimal], ['', '.'], $value);
        } elseif ($hasComma) {
            if (substr_count($value, ',') > 1) {
                return null;
            }
            $value = str_replace(',', '.', $value);
        } elseif ($hasDot) {
            $isThousands = preg_match('/^\d{1,3}(\.\d{3})+$/', $value)
                && (substr_count($value, '.') > 1 || $integerContext);

            if ($isThousands) {
                $value = str_replace('.', '', $value);
            } elseif (substr_count($value, '.') > 1) {
                return null;
            }
        }

        if (! is_numeric($value)) {
            return null;
        }

        return $negative ? -(float) $value : (float) $value;
    }

    /**
     * Toon een getal in Nederlandse notatie: 1.000 en 3,25.
     */
    public function format(float|int $number, int $maxDecimals = 6): string
    {
        $rounded = round((float) $number, $maxDecimals);
        $decimals = 0;

        while ($decimals < $maxDecimals && abs($rounded * 10 ** $decimals - round($rounded * 10 ** $decimals)) > 1e-7) {
            $decimals++;
        }

        return number_format($rounded, $decimals, ',', '.');
    }
}
