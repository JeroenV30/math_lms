<?php

namespace Tests\Unit;

use App\Services\AnswerCheckers\DecimalChecker;
use App\Services\AnswerCheckers\FractionChecker;
use App\Services\AnswerCheckers\NumberParser;
use App\Services\AnswerCheckers\NumericChecker;
use App\ValueObjects\AnswerResult;
use App\ValueObjects\Fraction;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class AnswerCheckerTest extends TestCase
{
    private NumberParser $parser;

    protected function setUp(): void
    {
        $this->parser = new NumberParser;
    }

    public static function numbers(): array
    {
        return [
            'geheel' => ['518', 518.0, true],
            'duizendtal met punt' => ['1.000', 1000.0, true],
            'duizendtal met spatie' => ['1 000', 1000.0, true],
            'miljoen' => ['1.000.000', 1000000.0, false],
            'negatief' => ['-12', -12.0, false],
            'unicode-minteken' => ['−12', -12.0, false],
            'komma' => ['3,1416', 3.1416, false],
            'punt als decimaal' => ['3.1416', 3.1416, false],
            'punt en komma' => ['1.234,5', 1234.5, false],
            'euro' => ['€ 4,50', 4.5, false],
        ];
    }

    #[DataProvider('numbers')]
    public function test_parser_reads_how_people_type_numbers(string $input, float $expected, bool $integerContext): void
    {
        $this->assertEqualsWithDelta($expected, $this->parser->parse($input, integerContext: $integerContext), 1e-9);
    }

    public function test_parser_rejects_non_numbers(): void
    {
        foreach (['', 'abc', '3,1,4', '12a', '1 00'] as $input) {
            $this->assertNull($this->parser->parse($input), "'{$input}' zou geen getal moeten zijn");
        }
    }

    public function test_parser_strips_unit(): void
    {
        $this->assertSame(25.0, $this->parser->parse('25 cm', 'cm'));
    }

    public function test_parser_formats_dutch_notation(): void
    {
        $this->assertSame('1.234,5', $this->parser->format(1234.5));
        $this->assertSame('518', $this->parser->format(518));
        $this->assertSame('0,25', $this->parser->format(0.25));
    }

    public function test_numeric_checker(): void
    {
        $checker = new NumericChecker($this->parser);

        $this->assertTrue($checker->check('518', 518)->correct);
        $this->assertTrue($checker->check(' 518 ', 518)->correct);
        $this->assertFalse($checker->check('407', 518)->correct);
        $this->assertTrue($checker->check('407', 518)->valid);

        $invalid = $checker->check('vijfhonderd', 518);
        $this->assertFalse($invalid->valid);
        $this->assertSame(AnswerResult::INVALID, $invalid->code);
    }

    public function test_decimal_checker_uses_tolerance(): void
    {
        $checker = new DecimalChecker($this->parser);

        $this->assertTrue($checker->check('3,1416', 3.1416)->correct);
        $this->assertTrue($checker->check('3,14', 3.1416, ['tolerance' => 0.01])->correct);
        $this->assertFalse($checker->check('3,14', 3.1416)->correct);
        $this->assertTrue($checker->check('2.5', 2.5)->correct);
        $this->assertTrue($checker->check('€ 2,50', 2.5, ['unit' => '€'])->correct);
    }

    public function test_fraction_checker_accepts_equivalent_fractions(): void
    {
        $checker = new FractionChecker($this->parser);

        $this->assertTrue($checker->check('3/4', '3/4')->correct);
        $this->assertTrue($checker->check('6/8', '3/4')->correct);
        $this->assertTrue($checker->check('1 1/2', '3/2')->correct);
        $this->assertTrue($checker->check('½', '1/2')->correct);
        $this->assertTrue($checker->check('2', '4/2')->correct);
        $this->assertFalse($checker->check('5/7', '17/12')->correct);
        $this->assertFalse($checker->check('3/0', '3/4')->valid);
        $this->assertFalse($checker->check('0,75', '3/4')->valid);
        $this->assertTrue($checker->check('0,75', '3/4', ['allow_decimal' => true])->correct);
    }

    public function test_fraction_checker_can_require_simplified_form(): void
    {
        $checker = new FractionChecker($this->parser);
        $result = $checker->check('6/8', '3/4', ['require_simplified' => true]);

        $this->assertTrue($result->valid);
        $this->assertFalse($result->correct);
        $this->assertSame(AnswerResult::NOT_SIMPLIFIED, $result->code);
        $this->assertTrue($checker->check('3/4', '3/4', ['require_simplified' => true])->correct);
    }

    public function test_fraction_value_object(): void
    {
        $this->assertSame('3/4', (string) (new Fraction(6, 8))->simplified());
        $this->assertSame('-1/2', (string) new Fraction(1, -2));
        $this->assertTrue((new Fraction(2, 4))->equals(new Fraction(1, 2)));
        $this->assertSame('1/3', (string) Fraction::fromFloat(0.333333333));
        $this->assertSame('3/4', (string) Fraction::fromFloat(0.75));
    }
}
