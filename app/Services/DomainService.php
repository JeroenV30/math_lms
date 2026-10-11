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
 * uitgewerkt, de andere domeinen hebben voorlopig een startles.
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
     * Hoe ver een domein is: 'available' (uitgewerkt), 'starter' (alleen een eerste les) of 'planned'.
     * Eén bron voor alle statuslabels, zodat kaart, zijbalk en domeinpagina hetzelfde zeggen.
     */
    public function stage(array $domain): string
    {
        return match (true) {
            $this->isAvailable($domain) => 'available',
            $this->starterLesson($domain) !== null => 'starter',
            default => 'planned',
        };
    }

    public function stageLabel(array $domain): string
    {
        return match ($this->stage($domain)) {
            'available' => 'Beschikbaar',
            'starter' => 'Eerste les',
            default => 'In voorbereiding',
        };
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

    public function starterLesson(array $domain): ?array
    {
        $lesson = $domain['starter_lesson'] ?? null;

        return is_array($lesson) ? $lesson : null;
    }

    public function starterLessonPath(array $domain): ?string
    {
        $lesson = $this->starterLesson($domain);
        $id = $domain['id'] ?? '';
        $file = $lesson['file'] ?? '';

        if (! preg_match('/^[a-z0-9-]+$/', $id) || basename($file) !== $file || ! str_ends_with($file, '.md')) {
            return null;
        }

        return dirname($this->path).DIRECTORY_SEPARATOR.'domains'.DIRECTORY_SEPARATOR.$id.DIRECTORY_SEPARATOR.$file;
    }

    public function starterLessonMarkdown(array $domain): string
    {
        $path = $this->starterLessonPath($domain);

        if ($path === null || ! is_file($path)) {
            throw new RuntimeException("Startles voor {$domain['id']} ontbreekt.");
        }

        return file_get_contents($path);
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
