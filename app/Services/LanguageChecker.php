<?php

namespace App\Services;

/**
 * Taalcontrole op lesstof en oefenteksten: typfouten die een mens makkelijk over het hoofd ziet,
 * zoals een dubbel woord ("maar maar"), een losse HTML-entiteit (&quot;) of een spatie vóór een leesteken.
 *
 * Formules, code, links en directives worden eerst weggefilterd, zodat alleen lopende tekst wordt gecontroleerd.
 * Geen spellingcontrole: vakwoorden en formules zouden te veel vals alarm geven.
 */
class LanguageChecker
{
    /** Woorden die in correct Nederlands dubbel kunnen staan ("dat dat klopt", "min min wordt plus", "of, en en niet"). */
    private const ALLOWED_DOUBLES = [
        'dat', 'die', 'had', 'er', 'is', 'zo', 'je', 'het', 'door', 'ze', 'we', 'kan', 'zijn', 'in',
        'min', 'nul', 'van', 'en', 'vragen', 'een',
        'shu', // de Chinese titel Suan shu shu
    ];

    /** JSON-velden die geen lopende tekst zijn. */
    private const NON_TEXT_KEYS = [
        'id', 'topic', 'topics', 'type', 'widget', 'image', 'slug', 'file', 'url', 'source', 'tolerance', 'form',
        'unit', 'kind', 'color', 'route', 'monogram', 'data_source', 'mode', 'status',
    ];

    /**
     * @return list<string> gevonden problemen, elk met een stukje context
     */
    public function check(string $text): array
    {
        $plain = $this->plainText($text);
        $issues = [];

        foreach (preg_split('/\n\s*\n/', $plain) as $paragraph) {
            if (substr_count($paragraph, '"') % 2 === 1) {
                $issues[] = 'oneven aantal aanhalingstekens: "'.$this->excerpt(preg_replace('/\s+/', ' ', $paragraph), 0, 90).'"';
            }
        }

        foreach (explode("\n", $plain) as $line) {
            $isTableRow = str_starts_with(ltrim($line), '|');

            foreach ($this->rules() as $label => $pattern) {
                if ($isTableRow && $label === 'dubbele spatie') {
                    continue;
                }

                preg_match_all($pattern, $line, $matches, PREG_OFFSET_CAPTURE | PREG_SET_ORDER);

                foreach ($matches as $match) {
                    if ($label === 'dubbel woord' && in_array($match[1][0], self::ALLOWED_DOUBLES, true)) {
                        continue;
                    }

                    $issues[] = $label.': "'.$this->excerpt($line, $match[0][1], strlen($match[0][0])).'"';
                }
            }
        }

        return $issues;
    }

    /**
     * Controleer alle tekstvelden in (gedecodeerde) JSON.
     *
     * @return list<string>
     */
    public function checkData(mixed $data): array
    {
        if (is_string($data)) {
            return $this->check($data);
        }

        if (! is_array($data)) {
            return [];
        }

        $issues = [];

        foreach ($data as $key => $value) {
            if (is_string($key) && in_array($key, self::NON_TEXT_KEYS, true)) {
                continue;
            }

            array_push($issues, ...$this->checkData($value));
        }

        return $issues;
    }

    /**
     * @return array<string, string>
     */
    private function rules(): array
    {
        return [
            'losse HTML-entiteit' => '/&(?:quot|amp|lt|gt|nbsp|apos|#\d+|#x[0-9a-f]+);/i',
            'dubbel woord' => '/\b(\p{Ll}{2,})\s+\1\b/u',
            // Niet voor ":" (deelteken, "a : b") en niet direct na een weggefilterde formule, link of code (M, U, C).
            'spatie voor leesteken' => '/(?<![MUC])(?<=[\p{L}\d)\]*]) +[,;?!](?=\s|$)|(?<![MUC])(?<=[\p{L})*]) +\.(?=\s|$)/u',
            'geen spatie na zin' => '/\p{Ll}{3}[.!?]\p{Lu}\p{Ll}{2}/u',
            'dubbele spatie' => '/(?<=\S) {2,}(?=\S)/u',
        ];
    }

    /**
     * Lopende tekst zonder formules, code, links en directives (vervangen door één letter, zodat zinnen intact blijven).
     */
    private function plainText(string $text): string
    {
        $replacements = [
            '/```.*?```/s' => '',
            '/\$\$.*?\$\$/s' => 'M',
            '/\$[^$\n]+\$/' => 'M',
            '/`[^`\n]+`/' => 'C',
            '/\]\((\S+?)(\s+"[^"]*")?\)/' => ']',
            '/https?:\/\/\S+/' => 'U',
            '/\{\{.*?\}\}/s' => 'D',
        ];

        return preg_replace(array_keys($replacements), array_values($replacements), $text);
    }

    private function excerpt(string $line, int $offset, int $length): string
    {
        $start = max(0, $offset - 40);

        return trim(mb_strcut($line, $start, $offset - $start + $length + 30));
    }
}
