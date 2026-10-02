<?php

namespace App\Services;

use Closure;
use Illuminate\Support\Str;
use League\CommonMark\GithubFlavoredMarkdownConverter;

/**
 * Zet cursus-Markdown om naar HTML.
 *
 * Bovenop CommonMark/GFM:
 *  - formules ($…$ en $$…$$) worden beschermd tegen Markdown en later door KaTeX gerenderd;
 *  - kaders: ":::history Titel … :::";
 *  - directieven op een eigen regel: "{{ exercise: 01-001 }}", "{{ widget: tally value=8 }}";
 *  - afbeeldingen met titel worden een <figure> met bijschrift;
 *  - h2/h3 krijgen een id voor de inhoudsopgave.
 */
class MarkdownRenderer
{
    public const CALLOUTS = [
        'history' => 'Historisch kader',
        'definition' => 'Definitie',
        'theory' => 'Theorie',
        'example' => 'Uitgewerkt voorbeeld',
        'formula' => 'Formule',
        'tip' => 'Tip',
        'warning' => 'Let op',
        'practice' => 'Oefening',
        'challenge' => 'Uitdaging',
        'summary' => 'Samenvatting',
        'question' => 'Denk eerst na',
    ];

    private GithubFlavoredMarkdownConverter $converter;

    /** @var list<array{latex: string, display: bool}> */
    private array $math = [];

    /** @var list<string> */
    private array $blocks = [];

    /** @var list<array{id: string, title: string, level: int}> */
    private array $toc = [];

    public function __construct()
    {
        $this->converter = new GithubFlavoredMarkdownConverter([
            'html_input' => 'allow',
            'allow_unsafe_links' => false,
        ]);
    }

    /**
     * @param  Closure(string $name, string $arguments): string|null  $directives
     * @return array{html: string, toc: list<array{id: string, title: string, level: int}>}
     */
    public function renderDocument(string $markdown, ?Closure $directives = null): array
    {
        // Directieven renderen views die zelf ook Markdown renderen: bewaar de
        // toestand van het lopende document zodat de renderer herintreedbaar is.
        $outer = [$this->math, $this->blocks, $this->toc];
        [$this->math, $this->blocks, $this->toc] = [[], [], []];

        try {
            $markdown = str_replace(["\r\n", "\r"], "\n", $markdown);
            $markdown = $this->extractMath($markdown);
            $markdown = $this->extractDirectives($markdown, $directives);
            $markdown = $this->extractCallouts($markdown);

            $html = $this->convert($markdown, withHeadingIds: true);
            $html = $this->restoreBlocks($html);
            $html = $this->restoreMath($html);

            return ['html' => $html, 'toc' => $this->toc];
        } finally {
            [$this->math, $this->blocks, $this->toc] = $outer;
        }
    }

    public function render(string $markdown): string
    {
        return $this->renderDocument($markdown)['html'];
    }

    /**
     * Korte tekst zonder omhullende <p>: hints, oplossingsstappen, feedback.
     */
    public function inline(string $markdown): string
    {
        $html = trim($this->render($markdown));

        if (substr_count($html, '<p>') === 1 && str_starts_with($html, '<p>') && str_ends_with($html, '</p>')) {
            return substr($html, 3, -4);
        }

        return $html;
    }

    /**
     * Platte tekst voor zoeken en samenvattingen.
     */
    public function plainText(string $markdown): string
    {
        $text = preg_replace('/^\{\{.*\}\}$/m', '', $markdown);
        $text = preg_replace('/^:::\w*.*$/m', '', $text);
        $text = preg_replace('/!\[[^\]]*\]\([^)]*\)/', '', $text);
        $text = preg_replace('/\[([^\]]*)\]\([^)]*\)/', '$1', $text);
        $text = preg_replace('/[#*_>`|]/', '', $text);

        return trim(preg_replace('/\s+/', ' ', $text));
    }

    private function extractMath(string $markdown): string
    {
        $markdown = preg_replace_callback('/\$\$(.+?)\$\$/s', function (array $m) {
            return "\n\n".$this->mathToken(trim($m[1]), true)."\n\n";
        }, $markdown);

        $markdown = preg_replace_callback('/(?<![\\\\$])\$(?!\s)([^$\n]+?)(?<![\s\\\\])\$/', function (array $m) {
            return $this->mathToken($m[1], false);
        }, $markdown);

        return str_replace('\\$', '$', $markdown);
    }

    private function mathToken(string $latex, bool $display): string
    {
        $this->math[] = ['latex' => $latex, 'display' => $display];

        return "\u{E000}".(count($this->math) - 1)."\u{E001}";
    }

    private function blockToken(string $html): string
    {
        $this->blocks[] = $html;

        return "\n\n\u{E002}".(count($this->blocks) - 1)."\u{E003}\n\n";
    }

    private function extractDirectives(string $markdown, ?Closure $directives): string
    {
        return preg_replace_callback('/^[ \t]*\{\{\s*([a-z][\w-]*)\s*(?::\s*(.*?))?\s*\}\}[ \t]*$/m', function (array $m) use ($directives) {
            $html = $directives ? $directives($m[1], $m[2] ?? '') : null;

            return $html === null ? '' : $this->blockToken($html);
        }, $markdown);
    }

    private function extractCallouts(string $markdown): string
    {
        return preg_replace_callback('/^:::([a-z]+)[ \t]*(.*?)[ \t]*\n(.*?)\n:::[ \t]*$/ms', function (array $m) {
            $type = array_key_exists($m[1], self::CALLOUTS) ? $m[1] : 'theory';
            $title = $m[2] !== '' ? $m[2] : self::CALLOUTS[$type];
            $label = self::CALLOUTS[$type];

            $titleHtml = $this->convertInline($title);
            $body = $this->convert($m[3]);
            $labelHtml = $title !== $label
                ? '<span class="callout-label">'.e($label).'</span>'
                : '';

            return $this->blockToken(
                '<aside class="callout callout-'.$type.'">'
                .'<header class="callout-header">'.$labelHtml.'<span class="callout-title">'.$titleHtml.'</span></header>'
                .'<div class="callout-body prose-content">'.$body.'</div>'
                .'</aside>'
            );
        }, $markdown);
    }

    private function convert(string $markdown, bool $withHeadingIds = false): string
    {
        $html = (string) $this->converter->convert($markdown);

        // Afbeelding met titel → figuur met bijschrift.
        $html = preg_replace_callback(
            '/<p>\s*<img src="([^"]+)" alt="([^"]*)"(?: title="([^"]*)")?\s*\/?>\s*<\/p>/',
            fn (array $m) => '<figure class="figure"><img src="'.$m[1].'" alt="'.$m[2].'" loading="lazy">'
                .(! empty($m[3]) ? '<figcaption>'.$m[3].'</figcaption>' : '').'</figure>',
            $html,
        );

        // Brede tabellen horizontaal laten scrollen op kleine schermen.
        $html = str_replace(['<table>', '</table>'], ['<div class="table-wrap"><table>', '</table></div>'], $html);

        if ($withHeadingIds) {
            $html = preg_replace_callback('/<h([23])>(.*?)<\/h\1>/s', function (array $m) {
                $title = trim(strip_tags($this->restoreMath($m[2], plain: true)));
                $id = $this->uniqueId(Str::slug($title) ?: 'sectie');
                $this->toc[] = ['id' => $id, 'title' => $title, 'level' => (int) $m[1]];

                return '<h'.$m[1].' id="'.$id.'">'.$m[2].'</h'.$m[1].'>';
            }, $html);
        }

        return $html;
    }

    private function convertInline(string $markdown): string
    {
        $html = trim((string) $this->converter->convert($markdown));

        return preg_replace('/^<p>(.*)<\/p>$/s', '$1', $html);
    }

    private function uniqueId(string $id): string
    {
        $existing = array_column($this->toc, 'id');
        $candidate = $id;
        $i = 2;

        while (in_array($candidate, $existing, true)) {
            $candidate = $id.'-'.$i++;
        }

        return $candidate;
    }

    private function restoreBlocks(string $html): string
    {
        // Blokken kunnen andere blokken bevatten (een widget in een kader).
        for ($depth = 0; $depth < 5 && str_contains($html, "\u{E002}"); $depth++) {
            $html = preg_replace_callback('/<p>\x{E002}(\d+)\x{E003}<\/p>|\x{E002}(\d+)\x{E003}/u', function (array $m) {
                $index = (int) ($m[1] !== '' ? $m[1] : $m[2]);

                return $this->blocks[$index] ?? '';
            }, $html);
        }

        return $html;
    }

    private function restoreMath(string $html, bool $plain = false): string
    {
        return preg_replace_callback('/<p>\x{E000}(\d+)\x{E001}<\/p>|\x{E000}(\d+)\x{E001}/u', function (array $m) use ($plain) {
            $math = $this->math[(int) ($m[1] !== '' ? $m[1] : $m[2])] ?? null;

            if ($math === null) {
                return '';
            }

            if ($plain) {
                return $math['latex'];
            }

            $latex = e($math['latex']);

            return $math['display']
                ? '<div class="math math-display" data-display="true">'.$latex.'</div>'
                : '<span class="math math-inline">'.$latex.'</span>';
        }, $html);
    }
}
