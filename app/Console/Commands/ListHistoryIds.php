<?php

namespace App\Console\Commands;

use App\Services\CourseRegistry;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('content:ids {domain : id van het domein, bijv. geschiedenis}')]
#[Description('Toon de geldige tijdlijn- en persoon-id\'s van een cursus (voor module.json → timeline / people)')]
class ListHistoryIds extends Command
{
    public function handle(CourseRegistry $courses): int
    {
        $domain = (string) $this->argument('domain');

        if (! $courses->has($domain)) {
            $this->components->error("Onbekend domein '{$domain}'. Bekend: ".implode(', ', $courses->ids()).'.');

            return self::FAILURE;
        }

        $content = $courses->for($domain);

        $this->line('## Tijdlijn (`timeline`)');
        $this->newLine();
        $this->line('| id | Jaar | Gebeurtenis | Modules |');
        $this->line('|---|---|---|---|');
        foreach ($content->timeline() as $event) {
            $this->line(sprintf('| `%s` | %s | %s | %s |', $event['id'], $event['year_label'] ?? '', $event['title'] ?? '', implode(', ', $event['modules'] ?? [])));
        }

        $this->newLine();
        $this->line('## Personen (`people`)');
        $this->newLine();
        $this->line('| id | Naam | Leefde |');
        $this->line('|---|---|---|');
        foreach ($content->people() as $person) {
            $this->line(sprintf('| `%s` | %s | %s |', $person['id'], $person['name'] ?? '', $person['lived'] ?? ''));
        }

        return self::SUCCESS;
    }
}
