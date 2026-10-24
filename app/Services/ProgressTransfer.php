<?php

namespace App\Services;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use InvalidArgumentException;

/**
 * Back-up van alle leerdata (laag C): exporteren naar één JSON-bestand en dat
 * bestand later terugzetten. De cursusinhoud zit er niet in; die staat in content/.
 *
 * Importeren vervangt alle voortgang van alle domeinen in één transactie:
 * lukt één rij niet, dan blijft alles zoals het was.
 */
class ProgressTransfer
{
    public const FORMAT = 'kennis-door-de-eeuwen/voortgang';

    public const VERSION = 1;

    /** Tabellen met gebruikersgegevens, in de volgorde waarin ze worden teruggezet. */
    public const TABLES = ['user_settings', 'module_progress', 'lesson_progress', 'topic_mastery', 'quiz_attempts', 'exercise_attempts'];

    /**
     * @return array{format: string, version: int, exported_at: string, tables: array<string, list<array<string, mixed>>>}
     */
    public function export(): array
    {
        $tables = [];

        foreach (self::TABLES as $table) {
            $tables[$table] = DB::table($table)->orderBy('id')->get()->map(fn ($row) => (array) $row)->all();
        }

        return [
            'format' => self::FORMAT,
            'version' => self::VERSION,
            'exported_at' => Carbon::now()->toIso8601String(),
            'tables' => $tables,
        ];
    }

    /**
     * @return array<string, int> aantal teruggezette rijen per tabel
     *
     * @throws InvalidArgumentException bij een bestand dat geen geldige back-up is
     */
    public function import(string $json): array
    {
        try {
            $data = json_decode($json, true, flags: JSON_THROW_ON_ERROR);
        } catch (\JsonException) {
            throw new InvalidArgumentException('Dit bestand is geen geldige JSON.');
        }

        if (! is_array($data) || ($data['format'] ?? null) !== self::FORMAT) {
            throw new InvalidArgumentException('Dit bestand is geen voortgangsback-up van deze leeromgeving.');
        }

        if (($data['version'] ?? null) !== self::VERSION) {
            throw new InvalidArgumentException('Deze back-up heeft een onbekende versie.');
        }

        if (! is_array($data['tables'] ?? null)) {
            throw new InvalidArgumentException('De back-up bevat geen tabellen.');
        }

        $rows = [];

        foreach (self::TABLES as $table) {
            $rows[$table] = $this->rows($table, $data['tables'][$table] ?? []);
        }

        DB::transaction(function () use ($rows) {
            foreach (array_reverse(self::TABLES) as $table) {
                DB::table($table)->delete();
            }

            foreach ($rows as $table => $tableRows) {
                foreach (array_chunk($tableRows, 200) as $chunk) {
                    DB::table($table)->insert($chunk);
                }
            }
        });

        return array_map('count', $rows);
    }

    /**
     * Alleen kolommen die de tabel echt heeft, en alleen eenvoudige waarden.
     *
     * @return list<array<string, mixed>>
     */
    private function rows(string $table, mixed $rows): array
    {
        if (! is_array($rows) || ! array_is_list($rows)) {
            throw new InvalidArgumentException("Tabel {$table} in de back-up is geen lijst.");
        }

        $columns = array_flip(Schema::getColumnListing($table));

        return array_map(function (mixed $row) use ($table, $columns) {
            if (! is_array($row) || $row === []) {
                throw new InvalidArgumentException("Tabel {$table} bevat een ongeldige rij.");
            }

            foreach ($row as $key => $value) {
                if (! isset($columns[$key])) {
                    throw new InvalidArgumentException("Tabel {$table} bevat een onbekende kolom '{$key}'.");
                }

                if ($value !== null && ! is_scalar($value)) {
                    throw new InvalidArgumentException("Tabel {$table} bevat een ongeldige waarde in kolom '{$key}'.");
                }
            }

            return $row;
        }, $rows);
    }
}
