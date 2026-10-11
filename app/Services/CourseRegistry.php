<?php

namespace App\Services;

/**
 * Alle cursussen: één per kennisdomein dat een eigen contentmap heeft
 * (content/domains/<id>/course.json, modules/, history/).
 *
 * Elke cursus krijgt een eigen ContentService. Welke cursus actief is, volgt uit
 * het domein in de URL (/kennis/{domein}/…); zie DomainService::activeId().
 */
class CourseRegistry
{
    /** Cursus voor code buiten een domeinpagina (artisan, unittests). */
    public const DEFAULT = 'wiskunde';

    /** @var array<string, ContentService> */
    private array $courses = [];

    public function __construct(
        private readonly string $path,
        private readonly DomainService $domains,
    ) {}

    public function has(string $id): bool
    {
        return $this->domains->hasCourse(['id' => $id]);
    }

    public function for(string $id): ContentService
    {
        return $this->courses[$id] ??= new ContentService($this->directory($id));
    }

    /**
     * Id's van alle domeinen met een cursus, in de volgorde van domains.json.
     *
     * @return list<string>
     */
    public function ids(): array
    {
        return $this->domains->all()->pluck('id')->filter(fn (string $id) => $this->has($id))->values()->all();
    }

    /**
     * De cursus van de huidige pagina, of null op een pagina buiten een cursus (kaart, instellingen).
     */
    public function currentId(): ?string
    {
        $id = $this->domains->activeId();

        return $id !== null && $this->has($id) ? $id : null;
    }

    public function current(): ContentService
    {
        return $this->for($this->currentId() ?? self::DEFAULT);
    }

    public function directory(string $id): string
    {
        return $this->path.DIRECTORY_SEPARATOR.'domains'.DIRECTORY_SEPARATOR.$id;
    }
}
