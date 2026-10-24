<?php

namespace App\Services\AnswerCheckers;

use App\ValueObjects\AnswerResult;

/**
 * Intervallen: "[2, 8]", "[2; 8⟩", "<2, 8]", "(2, 8)", "[3, ∞)".
 *
 * Nederlandse notatie: < of ⟨ voor een open grens; internationaal ( en ).
 * Ook als ongelijkheid: "x > 2", "1 ≤ x < 3", "x ∈ [2; 8]".
 */
class IntervalChecker implements AnswerChecker
{
    public function __construct(private readonly NumberParser $numbers) {}

    public function check(mixed $givenAnswer, mixed $expectedAnswer, array $options = []): AnswerResult
    {
        $given = $this->parse((string) $givenAnswer);

        if ($given === null) {
            return AnswerResult::invalid('Schrijf een interval als [2; 8] of ⟨2; 8], met [ ] voor een gesloten en ⟨ ⟩ of ( ) voor een open grens, of als ongelijkheid zoals 2 < x ≤ 8.');
        }

        $expected = $this->parse((string) $expectedAnswer);
        $normalized = $this->format($given);

        if ($expected === null) {
            return AnswerResult::incorrect($normalized);
        }

        $tolerance = (float) ($options['tolerance'] ?? 1e-6);
        $same = fn (float $a, float $b) => (is_infinite($a) && $a === $b) || abs($a - $b) <= $tolerance + 1e-9;

        if (! $same($given['low'], $expected['low']) || ! $same($given['high'], $expected['high'])) {
            return AnswerResult::incorrect($normalized);
        }

        if ($given['lowClosed'] !== $expected['lowClosed'] || $given['highClosed'] !== $expected['highClosed']) {
            return AnswerResult::incorrect($normalized, 'De grenzen kloppen, maar let op open en gesloten: hoort het eindpunt er wel of niet bij?', 'brackets');
        }

        return AnswerResult::correct($normalized);
    }

    /**
     * @return array{low: float, high: float, lowClosed: bool, highClosed: bool}|null
     */
    public function parse(string $input): ?array
    {
        $s = strtr(trim($input), ['⟨' => '<', '〈' => '<', '⟩' => '>', '〉' => '>', '−' => '-', '∞' => 'inf']);

        // "x ∈ [2; 8]" → "[2; 8]".
        $s = preg_replace('/^[a-z]\s*(?:∈|in)\s*/iu', '', $s);

        if (preg_match('/[a-hj-z]/i', preg_replace('/inf/i', '', $s))) {
            return $this->inequality($s);
        }

        if (! preg_match('/^([\[\(<\]])\s*(.+?)\s*([\]\)>\[])$/u', $s, $m)) {
            return null;
        }

        $inner = $m[2];
        $parts = match (true) {
            str_contains($inner, ';') => explode(';', $inner),
            (bool) preg_match('/,\s/', $inner) => preg_split('/,\s+/', $inner),
            default => explode(',', $inner),
        };

        if (count($parts) !== 2) {
            return null;
        }

        $value = function (string $text): ?float {
            $text = strtolower(trim($text));

            return match ($text) {
                'inf', '+inf' => INF,
                '-inf' => -INF,
                default => $this->numbers->parse($text),
            };
        };

        $low = $value($parts[0]);
        $high = $value($parts[1]);

        if ($low === null || $high === null || $low > $high) {
            return null;
        }

        return [
            'low' => $low,
            'high' => $high,
            // Een oneindige grens is altijd open.
            'lowClosed' => $m[1] === '[' && ! is_infinite($low),
            'highClosed' => $m[3] === ']' && ! is_infinite($high),
        ];
    }

    /**
     * Ongelijkheden: "x > 2", "x ≤ -1", "3 ≥ x", "1 ≤ x < 3", "8 > x ≥ 2".
     *
     * @return array{low: float, high: float, lowClosed: bool, highClosed: bool}|null
     */
    private function inequality(string $s): ?array
    {
        $s = strtr($s, ['≤' => '<=', '⩽' => '<=', '≥' => '>=', '⩾' => '>=', '=<' => '<=', '=>' => '>=']);
        $num = '(-?\s*\d[\d.,]*)';
        $rel = '\s*(<=|>=|<|>)\s*';
        $var = '[a-z]';

        if (preg_match("/^{$num}{$rel}{$var}{$rel}{$num}$/i", $s, $m)) {
            [$a, $op1, $op2, $b] = [$this->numbers->parse($m[1]), $m[2], $m[3], $this->numbers->parse($m[4])];

            // Beide tekens moeten dezelfde kant op wijzen: 1 < x < 3 of 3 > x > 1.
            if ($a === null || $b === null || $op1[0] !== $op2[0]) {
                return null;
            }

            [$low, $lowOp, $high, $highOp] = $op1[0] === '<' ? [$a, $op1, $b, $op2] : [$b, $op2, $a, $op1];

            return $low > $high ? null : [
                'low' => $low, 'high' => $high,
                'lowClosed' => str_ends_with($lowOp, '='), 'highClosed' => str_ends_with($highOp, '='),
            ];
        }

        // Eén grens; "2 < x" is hetzelfde als "x > 2".
        if (preg_match("/^{$var}{$rel}{$num}$/i", $s, $m)) {
            [$op, $value] = [$m[1], $m[2]];
        } elseif (preg_match("/^{$num}{$rel}{$var}$/i", $s, $m)) {
            [$op, $value] = [strtr($m[2], ['<' => '>', '>' => '<']), $m[1]];
        } else {
            return null;
        }

        $bound = $this->numbers->parse($value);

        if ($bound === null) {
            return null;
        }

        $closed = str_ends_with($op, '=');

        return $op[0] === '>'
            ? ['low' => $bound, 'high' => INF, 'lowClosed' => $closed, 'highClosed' => false]
            : ['low' => -INF, 'high' => $bound, 'lowClosed' => false, 'highClosed' => $closed];
    }

    private function format(array $i): string
    {
        $show = fn (float $v) => is_infinite($v) ? ($v > 0 ? '∞' : '−∞') : $this->numbers->format($v);

        return ($i['lowClosed'] ? '[' : '⟨').$show($i['low']).'; '.$show($i['high']).($i['highClosed'] ? ']' : '⟩');
    }
}
