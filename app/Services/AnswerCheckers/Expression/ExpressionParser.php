<?php

namespace App\Services\AnswerCheckers\Expression;

use Closure;
use InvalidArgumentException;

/**
 * Een kleine, veilige parser voor algebraïsche expressies zoals mensen ze
 * intypen: "2x + 4", "3(x − 1)²", "x^2 - 5x + 6", "½x", "√(x+1)".
 *
 * Resultaat: een closure die de expressie uitrekent voor gegeven
 * variabelewaarden. Er wordt nooit PHP-code uitgevoerd (geen eval).
 */
class ExpressionParser
{
    private const FUNCTIONS = ['sqrt', 'wortel', 'sin', 'cos', 'tan', 'ln', 'log', 'abs'];

    /** @var list<array{type: string, value: string|float}> */
    private array $tokens = [];

    private int $pos = 0;

    /** @var array<string, true> */
    private array $variables = [];

    /**
     * @return array{evaluate: Closure(array<string, float>): float, variables: list<string>}
     */
    public function parse(string $input): array
    {
        $this->tokens = $this->insertImplicitMultiplication($this->tokenize($input));
        $this->pos = 0;
        $this->variables = [];

        if ($this->tokens === []) {
            throw new InvalidArgumentException('Lege expressie.');
        }

        $node = $this->expression();

        if ($this->pos < count($this->tokens)) {
            throw new InvalidArgumentException('Onverwacht teken in de expressie.');
        }

        $variables = array_keys($this->variables);
        sort($variables);

        return ['evaluate' => $node, 'variables' => $variables];
    }

    /**
     * @return list<array{type: string, value: string|float}>
     */
    private function tokenize(string $input): array
    {
        $s = strtr(trim($input), [
            '−' => '-', '–' => '-', '×' => '*', '·' => '*', '⋅' => '*', '÷' => '/', ':' => '/',
            '²' => '^2', '³' => '^3', '√' => 'sqrt', 'π' => 'pi',
            '½' => '(1/2)', '¼' => '(1/4)', '¾' => '(3/4)', '⅓' => '(1/3)', '⅔' => '(2/3)',
        ]);
        $tokens = [];
        $length = strlen($s);

        for ($i = 0; $i < $length;) {
            $c = $s[$i];

            if (ctype_space($c)) {
                $i++;

                continue;
            }

            if (ctype_digit($c) || (($c === '.' || $c === ',') && $i + 1 < $length && ctype_digit($s[$i + 1]))) {
                preg_match('/\G\d*(?:[.,]\d+)?/', $s, $m, 0, $i);
                $tokens[] = ['type' => 'num', 'value' => (float) str_replace(',', '.', $m[0])];
                $i += strlen($m[0]);

                continue;
            }

            if (ctype_alpha($c)) {
                preg_match('/\G[a-zA-Z]+/', $s, $m, 0, $i);
                $word = strtolower($m[0]);
                $i += strlen($m[0]);

                if (in_array($word, self::FUNCTIONS, true)) {
                    $tokens[] = ['type' => 'func', 'value' => $word === 'wortel' ? 'sqrt' : $word];
                } elseif ($word === 'pi') {
                    $tokens[] = ['type' => 'num', 'value' => M_PI];
                } else {
                    // "xy" betekent x · y: losse letters zijn variabelen.
                    foreach (str_split($m[0]) as $letter) {
                        $tokens[] = ['type' => 'var', 'value' => $letter];
                    }
                }

                continue;
            }

            if (str_contains('+-*/^()', $c)) {
                $tokens[] = ['type' => 'op', 'value' => $c];
                $i++;

                continue;
            }

            throw new InvalidArgumentException("Onbekend teken '{$c}'.");
        }

        return $tokens;
    }

    /**
     * "2x" → "2*x", "3(x+1)" → "3*(x+1)", "(x+1)(x-1)" → "(x+1)*(x-1)".
     */
    private function insertImplicitMultiplication(array $tokens): array
    {
        $out = [];

        foreach ($tokens as $i => $token) {
            $prev = $out[array_key_last($out) ?? -1] ?? null;
            $endsOperand = $prev && ($prev['type'] === 'num' || $prev['type'] === 'var' || $prev === ['type' => 'op', 'value' => ')']);
            $startsOperand = $token['type'] === 'num' || $token['type'] === 'var' || $token['type'] === 'func' || $token === ['type' => 'op', 'value' => '('];

            if ($endsOperand && $startsOperand) {
                $out[] = ['type' => 'op', 'value' => '*'];
            }

            $out[] = $token;
        }

        return $out;
    }

    private function peek(): ?array
    {
        return $this->tokens[$this->pos] ?? null;
    }

    private function isOp(string $op): bool
    {
        $t = $this->peek();

        return $t !== null && $t['type'] === 'op' && $t['value'] === $op;
    }

    private function expression(): Closure
    {
        $left = $this->term();

        while ($this->isOp('+') || $this->isOp('-')) {
            $op = $this->tokens[$this->pos++]['value'];
            $right = $this->term();
            $l = $left;
            $left = $op === '+'
                ? fn (array $v) => $l($v) + $right($v)
                : fn (array $v) => $l($v) - $right($v);
        }

        return $left;
    }

    private function term(): Closure
    {
        $left = $this->unary();

        while ($this->isOp('*') || $this->isOp('/')) {
            $op = $this->tokens[$this->pos++]['value'];
            $right = $this->unary();
            $l = $left;
            $left = $op === '*'
                ? fn (array $v) => $l($v) * $right($v)
                : fn (array $v) => ($d = $right($v)) == 0.0 ? NAN : $l($v) / $d;
        }

        return $left;
    }

    private function unary(): Closure
    {
        if ($this->isOp('-')) {
            $this->pos++;
            $operand = $this->unary();

            return fn (array $v) => -$operand($v);
        }

        if ($this->isOp('+')) {
            $this->pos++;

            return $this->unary();
        }

        return $this->power();
    }

    private function power(): Closure
    {
        $base = $this->primary();

        if ($this->isOp('^')) {
            $this->pos++;
            $exponent = $this->unary();

            return fn (array $v) => $base($v) ** $exponent($v);
        }

        return $base;
    }

    private function primary(): Closure
    {
        $token = $this->peek() ?? throw new InvalidArgumentException('Expressie is onvolledig.');
        $this->pos++;

        return match (true) {
            $token['type'] === 'num' => (fn (float $n) => fn () => $n)($token['value']),
            $token['type'] === 'var' => $this->variable($token['value']),
            $token['type'] === 'func' => $this->call($token['value']),
            $token['value'] === '(' => $this->group(),
            default => throw new InvalidArgumentException('Onverwacht teken in de expressie.'),
        };
    }

    private function variable(string $name): Closure
    {
        $this->variables[$name] = true;

        return fn (array $v) => $v[$name] ?? NAN;
    }

    private function group(): Closure
    {
        $inner = $this->expression();

        if (! $this->isOp(')')) {
            throw new InvalidArgumentException('Haakje niet gesloten.');
        }

        $this->pos++;

        return $inner;
    }

    private function call(string $function): Closure
    {
        // Ook zonder haakjes: "sqrt 9", "√x".
        if ($this->isOp('(')) {
            $this->pos++;
            $argument = $this->group();
        } else {
            $argument = $this->power();
        }

        return match ($function) {
            'sqrt' => fn (array $v) => ($a = $argument($v)) < 0 ? NAN : sqrt($a),
            'sin' => fn (array $v) => sin($argument($v)),
            'cos' => fn (array $v) => cos($argument($v)),
            'tan' => fn (array $v) => tan($argument($v)),
            'ln' => fn (array $v) => ($a = $argument($v)) <= 0 ? NAN : log($a),
            'log' => fn (array $v) => ($a = $argument($v)) <= 0 ? NAN : log10($a),
            'abs' => fn (array $v) => abs($argument($v)),
        };
    }
}
