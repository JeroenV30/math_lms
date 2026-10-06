<?php

namespace App\Services;

use Illuminate\Support\Collection;
use JsonException;
use RuntimeException;

/**
 * De kennisdomeinen (wiskunde, natuurkunde & chemie, biologie, …) uit content/domains.json.
 *
 * Wiskunde is het eerste uitgewerkte domein; de andere staan klaar als opzet
 * zonder lesinhoud. Een later domein krijgt een eigen contentmap met dezelfde
 * structuur als content/ (course.json, modules/, history/).
 */
class DomainService
{
    private ?array $data = null;

    public function __construct(private readonly string $path) {}

    public function overview(): array
    {
        return $this->data ??= $this->read();
    }

    /**
     * @return Collection<int, array>
     */
    public function all(): Collection
    {
        return collect($this->overview()['domains'] ?? []);
    }

    public function find(string $id): ?array
    {
        return $this->all()->firstWhere('id', $id);
    }

    public function isAvailable(array $domain): bool
    {
        return ($domain['status'] ?? 'planned') === 'available';
    }

    private function read(): array
    {
        if (! is_file($this->path)) {
            throw new RuntimeException("Domeinbestand ontbreekt: {$this->path}");
        }

        try {
            return json_decode(file_get_contents($this->path), true, flags: JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            throw new RuntimeException("Ongeldige JSON in {$this->path}: {$e->getMessage()}", previous: $e);
        }
    }
}
