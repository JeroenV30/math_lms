<?php

namespace Tests\Unit;

use App\Services\LanguageChecker;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class LanguageCheckerTest extends TestCase
{
    public static function mistakes(): array
    {
        return [
            'dubbel woord' => ['Er liggen 19 getallen, maar maar de helft is even.', 'dubbel woord'],
            'losse entiteit' => ['De kernvraag: wat is &quot;acht&quot;?', 'losse HTML-entiteit'],
            'spatie voor komma' => ['Tel de schapen , daarna de stenen.', 'spatie voor leesteken'],
            'spatie voor punt' => ['Dat is het antwoord .', 'spatie voor leesteken'],
            'geen spatie na zin' => ['Dat klopt.Daarna tel je verder.', 'geen spatie na zin'],
            'dubbele spatie' => ['Tel de  schapen.', 'dubbele spatie'],
            'oneven aanhalingstekens' => ['Hij zei "acht en liep weg.', 'oneven aantal aanhalingstekens'],
        ];
    }

    #[DataProvider('mistakes')]
    public function test_it_finds_typical_mistakes(string $text, string $label): void
    {
        $issues = (new LanguageChecker)->check($text);

        $this->assertNotEmpty($issues);
        foreach ($issues as $issue) {
            $this->assertStringStartsWith($label, $issue);
        }
    }

    public static function correctTexts(): array
    {
        return [
            'dat dat' => ['Je ziet dat dat klopt.'],
            'min min' => ['De regel "min min wordt plus" is een geheugensteun.'],
            'deelteken' => ['Reken 750 cent : 6 uit, of € 14,60 : 4.'],
            'formule' => ['Dus $x , y$ en $$a  .  b$$ zijn formules.'],
            'link' => ['Bron: [MacTutor](https://mathshistory.st-andrews.ac.uk/ "Titel met (haakjes)"), zie ook https://x.org/a ; klaar.'],
            'aanhalingstekens over regels' => ["Hij zei \"acht\nschapen\" en liep weg."],
            'tabel' => ['| a   | b |'],
            'afkorting' => ['Dat is o.a. bekend uit de 17e eeuw, bijv. bij Stevin.'],
        ];
    }

    #[DataProvider('correctTexts')]
    public function test_correct_dutch_is_not_flagged(string $text): void
    {
        $this->assertSame([], (new LanguageChecker)->check($text));
    }

    public function test_only_text_fields_in_json_are_checked(): void
    {
        $issues = (new LanguageChecker)->checkData([
            'id' => '01-001',
            'answer' => 8,
            'question' => 'Hoeveel  schapen?',
            'hints' => ['Tel ze ze'],
        ]);

        $this->assertCount(1, $issues);
        $this->assertStringStartsWith('dubbele spatie', $issues[0]);
    }
}
