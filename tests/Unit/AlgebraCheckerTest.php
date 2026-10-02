<?php

namespace Tests\Unit;

use App\Services\AnswerCheckers\AnswerCheckerFactory;
use App\Services\AnswerCheckers\CoordinateChecker;
use App\Services\AnswerCheckers\Expression\ExpressionParser;
use App\Services\AnswerCheckers\ExpressionChecker;
use App\Services\AnswerCheckers\IntervalChecker;
use App\Services\AnswerCheckers\MultipleChecker;
use App\Services\AnswerCheckers\NumberParser;
use Illuminate\Container\Container;
use InvalidArgumentException;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class AlgebraCheckerTest extends TestCase
{
    public static function expressions(): array
    {
        return [
            ['2x + 4', ['x' => 3], 10],
            ['2(x + 2)', ['x' => 3], 10],
            ['3x²', ['x' => 2], 12],
            ['-x^2', ['x' => 3], -9],
            ['(x+1)(x-1)', ['x' => 4], 15],
            ['½x', ['x' => 8], 4],
            ['√(x + 7)', ['x' => 9], 4],
            ['2xy', ['x' => 2, 'y' => 5], 20],
            ['10 : 4', [], 2.5],
            ['2^3^2', [], 512],
            ['3,5x', ['x' => 2], 7],
        ];
    }

    #[DataProvider('expressions')]
    public function test_parser_evaluates_expressions(string $input, array $vars, float $expected): void
    {
        $parsed = (new ExpressionParser)->parse($input);

        $this->assertEqualsWithDelta($expected, ($parsed['evaluate'])($vars), 1e-9);
    }

    public function test_parser_rejects_garbage(): void
    {
        foreach (['', '2 +', '(x + 1', 'x $ 2', '*3'] as $input) {
            try {
                (new ExpressionParser)->parse($input);
                $this->fail("'{$input}' zou ongeldig moeten zijn");
            } catch (InvalidArgumentException) {
                $this->addToAssertionCount(1);
            }
        }
    }

    public function test_expression_checker_accepts_equivalent_forms(): void
    {
        $checker = new ExpressionChecker(new ExpressionParser);

        $this->assertTrue($checker->check('2x + 4', '2(x + 2)')->correct);
        $this->assertTrue($checker->check('4 + 2x', '2x + 4')->correct);
        $this->assertTrue($checker->check('y = x^2 - 5x + 6', '(x - 2)(x - 3)')->correct);
        $this->assertFalse($checker->check('2x + 3', '2x + 4')->correct);
        $this->assertFalse($checker->check('x²', '2x')->correct);
        $this->assertFalse($checker->check('2 +', '2x')->valid);
        $this->assertFalse($checker->check('2a + 4', '2x + 4')->correct);
    }

    public function test_expression_checker_can_require_a_form(): void
    {
        $checker = new ExpressionChecker(new ExpressionParser);

        $this->assertSame('not_expanded', $checker->check('2(x + 2)', '2x + 4', ['form' => 'expanded'])->code);
        $this->assertTrue($checker->check('2x + 4', '2x + 4', ['form' => 'expanded'])->correct);
        $this->assertSame('not_factored', $checker->check('x^2 - 1', '(x+1)(x-1)', ['form' => 'factored'])->code);
        $this->assertTrue($checker->check('(x-1)(x+1)', '(x+1)(x-1)', ['form' => 'factored'])->correct);
    }

    public function test_coordinate_checker(): void
    {
        $checker = new CoordinateChecker(new NumberParser);

        $this->assertTrue($checker->check('(3, 7)', '(3; 7)')->correct);
        $this->assertTrue($checker->check('(3; 7)', [3, 7])->correct);
        $this->assertTrue($checker->check('(3,5; -2)', '(3.5; -2)')->correct);
        $this->assertTrue($checker->check('A = (1, 2)', '(1; 2)')->correct);
        $this->assertSame('swapped', $checker->check('(7; 3)', '(3; 7)')->code);
        $this->assertFalse($checker->check('drie', '(3; 7)')->valid);
    }

    public function test_interval_checker(): void
    {
        $checker = new IntervalChecker(new NumberParser);

        $this->assertTrue($checker->check('[2, 8]', '[2; 8]')->correct);
        $this->assertTrue($checker->check('⟨2; 8]', '(2, 8]')->correct);
        $this->assertTrue($checker->check('<2, 8]', '(2; 8]')->correct);
        $this->assertTrue($checker->check('[3, ∞)', '[3; ∞⟩')->correct);
        $this->assertSame('brackets', $checker->check('[2, 8]', '(2; 8)')->code);
        $this->assertFalse($checker->check('[8, 2]', '[2; 8]')->valid);
        $this->assertFalse($checker->check('[2, 9]', '[2; 8]')->correct);
    }

    public function test_multiple_checker(): void
    {
        $container = new Container;
        $container->instance(NumberParser::class, new NumberParser);
        $checker = new MultipleChecker(new AnswerCheckerFactory($container));
        $parts = [
            ['label' => 'x', 'answer' => 3, 'type' => 'numeric'],
            ['label' => 'y', 'answer' => '1/2', 'type' => 'fraction'],
        ];

        $this->assertTrue($checker->check(['x' => '3', 'y' => '2/4'], $parts)->correct);
        $this->assertTrue($checker->check(['3', '1/2'], $parts)->correct);

        $partly = $checker->check(['x' => '3', 'y' => '1/3'], $parts);
        $this->assertFalse($partly->correct);
        $this->assertSame('Nog niet goed: y. De rest klopt.', $partly->message);

        $this->assertFalse($checker->check(['x' => '3'], $parts)->valid);
    }

    public function test_numeric_answers_may_be_written_as_a_solution(): void
    {
        $this->assertSame(4.0, (new NumberParser)->parse('x = 4'));
    }
}
