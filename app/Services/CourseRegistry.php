<?php

namespace App\Services;

use Closure;

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

    /**
     * Voer iets uit alsof cursus $id actief is, bijvoorbeeld om op de kaart per domein
     * de herhalingen te tellen. Voortgangsqueries volgen de actieve cursus (BelongsToCourse).
     *
     * @template T
     *
     * @param  Closure(ContentService): T  $callback
     * @return T
     */
    public function within(string $id, Closure $callback): mixed
    {
        $attributes = request()->attributes;
        $previous = $attributes->get('domain');
        $attributes->set('domain', $id);

        try {
            return $callback($this->for($id));
        } finally {
            $previous === null ? $attributes->remove('domain') : $attributes->set('domain', $previous);
        }
    }

    public function directory(string $id): string
    {
        return $this->path.DIRECTORY_SEPARATOR.'domains'.DIRECTORY_SEPARATOR.$id;
    }
}
