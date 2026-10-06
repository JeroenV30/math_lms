<?php

namespace Tests\Unit;

use App\Services\MarkdownRenderer;
use PHPUnit\Framework\TestCase;

class MarkdownRendererTest extends TestCase
{
    private MarkdownRenderer $markdown;

    protected function setUp(): void
    {
        $this->markdown = new MarkdownRenderer;
    }

    public function test_math_is_protected_from_markdown(): void
    {
        $html = $this->markdown->render('Formule $a_1 * b_2 * c$ en meer.');

        $this->assertStringContainsString('<span class="math math-inline">a_1 * b_2 * c</span>', $html);
        $this->assertStringNotContainsString('<em>', $html);
    }

    public function test_display_math_becomes_a_block(): void
    {
        $html = $this->markdown->render("Tekst\n\n$$\n\\begin{array}{r} 1 \\\\ 2 \\end{array}\n$$\n");

        $this->assertStringContainsString('<div class="math math-display" data-display="true">', $html);
        $this->assertStringContainsString('1 \\\\ 2', $html);
    }

    public function test_latex_is_html_escaped(): void
    {
        $this->assertStringContainsString('a &lt; b', $this->markdown->render('Als $a < b$.'));
    }

    public function test_callouts(): void
    {
        $html = $this->markdown->render(":::history Egypte, ca. 1650 v.Chr.\nNegen **broden** voor $10$ arbeiders.\n:::");

        $this->assertStringContainsString('callout callout-history', $html);
        $this->assertStringContainsString('Egypte, ca. 1650 v.Chr.', $html);
        $this->assertStringContainsString('<strong>broden</strong>', $html);
        $this->assertStringContainsString('<span class="math math-inline">10</span>', $html);
    }

    public function test_directives_are_resolved_by_callback(): void
    {
        $seen = [];
        $html = $this->markdown->renderDocument("Voor\n\n{{ exercise: 01-001 }}\n\nNa", function (string $name, string $args) use (&$seen) {
            $seen[] = [$name, $args];

            return '<div class="x">'.$args.'</div>';
        })['html'];

        $this->assertSame([['exercise', '01-001']], $seen);
        $this->assertStringContainsString('<div class="x">01-001</div>', $html);
        $this->assertStringNotContainsString('<p><div', $html);
    }

    public function test_images_with_title_become_figures(): void
    {
        $html = $this->markdown->render('![Bot](/images/ishango.jpg "Het Ishango-been — CC BY-SA")');

        $this->assertStringContainsString('<figure class="figure">', $html);
        $this->assertStringContainsString('<figcaption>Het Ishango-been — CC BY-SA</figcaption>', $html);
    }

    public function test_headings_get_ids_for_the_table_of_contents(): void
    {
        $doc = $this->markdown->renderDocument("## Even en oneven\n\nTekst\n\n## Even en oneven");

        $this->assertSame(['even-en-oneven', 'even-en-oneven-2'], array_column($doc['toc'], 'id'));
        $this->assertStringContainsString('<h2 id="even-en-oneven">', $doc['html']);
    }

    public function test_table_of_contents_titles_are_plain_text(): void
    {
        // Blade escapet de titel bij het tonen; een al ge-escapete titel werd zichtbaar als &quot;acht&quot;.
        $doc = $this->markdown->renderDocument('## De kernvraag: wat is "acht"? & meer');

        $this->assertSame('De kernvraag: wat is "acht"? & meer', $doc['toc'][0]['title']);
    }

    public function test_inline_strips_paragraph(): void
    {
        $this->assertSame('Splits <strong>14</strong>.', $this->markdown->inline('Splits **14**.'));
    }

    public function test_renderer_is_reentrant(): void
    {
        $html = $this->markdown->renderDocument('$x$'."\n\n{{ inner }}\n\n".'$y$', function () {
            return $this->markdown->render('$z$');
        })['html'];

        $this->assertStringContainsString('>x</span>', $html);
        $this->assertStringContainsString('>y</span>', $html);
        $this->assertStringContainsString('>z</span>', $html);
    }
}
