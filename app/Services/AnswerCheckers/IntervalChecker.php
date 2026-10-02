<?php

namespace App\Services\AnswerCheckers;

use App\ValueObjects\AnswerResult;

/**
 * Intervallen: "[2, 8]", "[2; 8⟩", "<2, 8]", "(2, 8)", "[3, ∞)".
 *
 * Nederlandse notatie: < of ⟨ voor een open grens; internationaal ( en ).
 */
class IntervalChecker implements AnswerChecker
{
    public function __construct(private readonly NumberParser $numbers) {}

    public function check(mixed $givenAnswer, mixed $expectedAnswer, array $options = []): AnswerResult
    {
        $given = $this->parse((string) $givenAnswer);

        if ($given === null) {
            return AnswerResult::invalid('Schrijf een interval als [2; 8] of ⟨2; 8], met [ ] voor een gesloten en ⟨ ⟩ of ( ) voor een open grens.');
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

    private function format(array $i): string
    {
        $show = fn (float $v) => is_infinite($v) ? ($v > 0 ? '∞' : '−∞') : $this->numbers->format($v);

        return ($i['lowClosed'] ? '[' : '⟨').$show($i['low']).'; '.$show($i['high']).($i['highClosed'] ? ']' : '⟩');
    }
}
