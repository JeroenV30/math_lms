<?php

namespace App\Services\AnswerCheckers\Expression;

use Closure;
use InvalidArgumentException;

/**
 * Een kleine, veilige parser voor algebraïsche expressies zoals mensen ze
 * intypen: "2x + 4", "3(x − 1)²", "x^2 - 5x + 6", "½x", "√(x+1)", "2sinx", "|x|".
 *
 * Resultaat: een closure die de expressie uitrekent voor gegeven
 * variabelewaarden, plus de vorm van de expressie (som, product …) zodat een
 * checker kan nagaan of haakjes zijn weggewerkt of juist ontbonden is.
 * Er wordt nooit PHP-code uitgevoerd (geen eval).
 *
 * Letters zijn variabelen, behalve functienamen (ook vastgeschreven: "sinx",
 * "3lnx"), pi en e (het getal van Euler).
 */
class ExpressionParser
{
    /** Langste namen eerst, zodat "wortel" en "sqrt" niet in losse letters uiteenvallen. */
    private const FUNCTIONS = ['wortel', 'sqrt', 'sin', 'cos', 'tan', 'exp', 'abs', 'log', 'ln'];

    /** @var list<array{type: string, value: string|float}> */
    private array $tokens = [];

    private int $pos = 0;

    /** @var array<string, true> */
    private array $variables = [];

    /** Staat er ergens een som tussen haakjes die nog vermenigvuldigd, gedeeld of gemachtsverheven wordt? */
    private bool $unexpanded = false;

    /**
     * kind: de buitenste bewerking ('sum', 'product', 'power', 'call' of 'atom'); een minteken ervoor telt niet mee.
     * expanded: false als er een som tussen haakjes staat die nog vermenigvuldigd of gemachtsverheven wordt.
     *
     * @return array{evaluate: Closure(array<string, float>): float, variables: list<string>, kind: string, expanded: bool}
     */
    public function parse(string $input): array
    {
        $this->tokens = $this->insertImplicitMultiplication($this->tokenize($input));
        $this->pos = 0;
        $this->variables = [];
        $this->unexpanded = false;

        if ($this->tokens === []) {
            throw new InvalidArgumentException('Lege expressie.');
        }

        $node = $this->expression();

        if ($this->pos < count($this->tokens)) {
            throw new InvalidArgumentException('Onverwacht teken in de expressie.');
        }

        $variables = array_keys($this->variables);
        sort($variables);

        $outer = $node;
        while ($outer['kind'] === 'neg') {
            $outer = $outer['inner'];
        }

        return ['evaluate' => $node['f'], 'variables' => $variables, 'kind' => $outer['kind'], 'expanded' => ! $this->unexpanded];
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

        // Absolute waarde |…| (niet genest) → abs(…).
        $s = preg_replace('/\|([^|]+)\|/', 'abs($1)', $s);

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
                $i += strlen($m[0]);
                array_push($tokens, ...$this->word($m[0]));

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
     * Een reeks letters: functienamen en pi waar ze staan, verder losse letters
     * ("xy" is x · y, "2sinx" is 2 · sin x, "ex" is e · x).
     *
     * @return list<array{type: string, value: string|float}>
     */
    private function word(string $word): array
    {
        $tokens = [];
        $lower = strtolower($word);

        for ($i = 0, $n = strlen($lower); $i < $n;) {
            foreach ([...self::FUNCTIONS, 'pi'] as $name) {
                if (substr_compare($lower, $name, $i, strlen($name)) === 0) {
                    $tokens[] = $name === 'pi'
                        ? ['type' => 'num', 'value' => M_PI]
                        : ['type' => 'func', 'value' => $name === 'wortel' ? 'sqrt' : $name];
                    $i += strlen($name);

                    continue 2;
                }
            }

            $tokens[] = $lower[$i] === 'e'
                ? ['type' => 'num', 'value' => M_E]
                : ['type' => 'var', 'value' => $word[$i]];
            $i++;
        }

        return $tokens;
    }

    /**
     * "2x" → "2*x", "3(x+1)" → "3*(x+1)", "(x+1)(x-1)" → "(x+1)*(x-1)".
     */
    private function insertImplicitMultiplication(array $tokens): array
    {
        $out = [];

        foreach ($tokens as $token) {
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

    /**
     * Een knoop: de rekenfunctie, de soort bewerking en of hij tussen haakjes stond.
     *
     * @return array{f: Closure, kind: string, paren: bool, inner: ?array}
     */
    private function node(Closure $f, string $kind, ?array $inner = null): array
    {
        return ['f' => $f, 'kind' => $kind, 'paren' => false, 'inner' => $inner];
    }

    /** Een som tussen haakjes die nog met iets bewerkt wordt: de haakjes zijn niet weggewerkt. */
    private function markIfBracketedSum(array $node): void
    {
        if ($node['paren'] && ($node['kind'] === 'sum' || ($node['kind'] === 'neg' && $node['inner']['kind'] === 'sum'))) {
            $this->unexpanded = true;
        }
    }

    private function expression(): array
    {
        $left = $this->term();

        while ($this->isOp('+') || $this->isOp('-')) {
            $op = $this->tokens[$this->pos++]['value'];
            $right = $this->term();

            // "3 − (x − 1)": een min voor haakjes werk je weg; een plus ervoor is onschuldig.
            if ($op === '-') {
                $this->markIfBracketedSum($right);
            }

            [$l, $r] = [$left['f'], $right['f']];
            $left = $this->node($op === '+'
                ? fn (array $v) => $l($v) + $r($v)
                : fn (array $v) => $l($v) - $r($v), 'sum');
        }

        return $left;
    }

    private function term(): array
    {
        $left = $this->unary();

        while ($this->isOp('*') || $this->isOp('/')) {
            $op = $this->tokens[$this->pos++]['value'];
            $right = $this->unary();

            // Een som in de noemer kun je niet wegwerken; elders wel.
            $this->markIfBracketedSum($left);
            if ($op === '*') {
                $this->markIfBracketedSum($right);
            }

            [$l, $r] = [$left['f'], $right['f']];
            $left = $this->node($op === '*'
                ? fn (array $v) => $l($v) * $r($v)
                : fn (array $v) => ($d = $r($v)) == 0.0 ? NAN : $l($v) / $d, 'product');
        }

        return $left;
    }

    private function unary(): array
    {
        if ($this->isOp('-')) {
            $this->pos++;
            $operand = $this->unary();
            $this->markIfBracketedSum($operand);
            $f = $operand['f'];

            return $this->node(fn (array $v) => -$f($v), 'neg', $operand);
        }

        if ($this->isOp('+')) {
            $this->pos++;

            return $this->unary();
        }

        return $this->power();
    }

    private function power(): array
    {
        $base = $this->primary();

        if ($this->isOp('^')) {
            $this->pos++;
            $exponent = $this->unary();
            $this->markIfBracketedSum($base);
            [$b, $e] = [$base['f'], $exponent['f']];

            return $this->node(fn (array $v) => $b($v) ** $e($v), 'power');
        }

        return $base;
    }

    private function primary(): array
    {
        $token = $this->peek() ?? throw new InvalidArgumentException('Expressie is onvolledig.');
        $this->pos++;

        return match (true) {
            $token['type'] === 'num' => $this->node((fn (float $n) => fn () => $n)($token['value']), 'atom'),
            $token['type'] === 'var' => $this->variable($token['value']),
            $token['type'] === 'func' => $this->call($token['value']),
            $token['value'] === '(' => ['paren' => true] + $this->group(),
            default => throw new InvalidArgumentException('Onverwacht teken in de expressie.'),
        };
    }

    private function variable(string $name): array
    {
        $this->variables[$name] = true;

        return $this->node(fn (array $v) => $v[$name] ?? NAN, 'atom');
    }

    private function group(): array
    {
        $inner = $this->expression();

        if (! $this->isOp(')')) {
            throw new InvalidArgumentException('Haakje niet gesloten.');
        }

        $this->pos++;

        return $inner;
    }

    private function call(string $function): array
    {
        // Ook zonder haakjes: "sqrt 9", "√x", "sinx". Het argument van een functie mag een som zijn.
        if ($this->isOp('(')) {
            $this->pos++;
            $argument = $this->group()['f'];
        } else {
            $argument = $this->power()['f'];
        }

        return $this->node(match ($function) {
            'sqrt' => fn (array $v) => ($a = $argument($v)) < 0 ? NAN : sqrt($a),
            'sin' => fn (array $v) => sin($argument($v)),
            'cos' => fn (array $v) => cos($argument($v)),
            'tan' => fn (array $v) => tan($argument($v)),
            'exp' => fn (array $v) => exp($argument($v)),
            'ln' => fn (array $v) => ($a = $argument($v)) <= 0 ? NAN : log($a),
            'log' => fn (array $v) => ($a = $argument($v)) <= 0 ? NAN : log10($a),
            'abs' => fn (array $v) => abs($argument($v)),
        }, 'call');
    }
}
