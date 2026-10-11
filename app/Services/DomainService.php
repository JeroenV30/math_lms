<?php

namespace App\Services;

use Illuminate\Support\Collection;
use JsonException;
use RuntimeException;

/**
 * De kennisdomeinen (wiskunde, natuurkunde & chemie, biologie, …) uit content/domains.json.
 *
 * Een domein met een cursus heeft een eigen contentmap content/domains/<id>/
 * (course.json, modules/, history/); zie CourseRegistry. Wiskunde is volledig
 * uitgewerkt, de andere domeinen groeien vanaf hun eerste module.
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
     * Naam en ondertitel van de hele leeromgeving (alle domeinen samen).
     *
     * @return array{name: string, tagline: string}
     */
    public function app(): array
    {
        $app = $this->overview()['app'] ?? [];

        return [
            'name' => $app['name'] ?? config('app.name'),
            'tagline' => $app['tagline'] ?? '',
        ];
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

    /**
     * Hoe ver een domein is: 'available' (uitgewerkt), 'building' (heeft een cursus die nog groeit) of 'planned'.
     * Eén bron voor alle statuslabels, zodat kaart, zijbalk en domeinpagina hetzelfde zeggen.
     */
    public function stage(array $domain): string
    {
        return match (true) {
            $this->isAvailable($domain) => 'available',
            $this->hasCourse($domain) => 'building',
            default => 'planned',
        };
    }

    public function stageLabel(array $domain): string
    {
        return match ($this->stage($domain)) {
            'available' => 'Beschikbaar',
            'building' => 'In opbouw',
            default => 'In voorbereiding',
        };
    }

    /**
     * Heeft het domein een eigen cursus (content/domains/<id>/course.json)? Zie CourseRegistry.
     */
    public function hasCourse(array $domain): bool
    {
        $id = (string) ($domain['id'] ?? '');

        return preg_match('/^[a-z0-9-]+$/', $id) === 1
            && is_file(dirname($this->path).DIRECTORY_SEPARATOR.'domains'.DIRECTORY_SEPARATOR.$id.DIRECTORY_SEPARATOR.'course.json');
    }

    /**
     * Startpagina van een domein: het dashboard van een cursus, of de domeinpagina met de opzet.
     */
    public function url(array $domain): string
    {
        return route('domains.show', $domain['id']);
    }

    /**
     * Het domein waar de huidige pagina bij hoort: het {domain} uit /kennis/{domain}/…,
     * vastgelegd door de middleware ResolveDomain. De kaart en de instellingen horen bij geen domein.
     */
    public function activeId(): ?string
    {
        $id = request()->attributes->get('domain');

        return is_string($id) ? $id : null;
    }

    public function active(): ?array
    {
        $id = $this->activeId();

        return $id === null ? null : $this->find($id);
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
