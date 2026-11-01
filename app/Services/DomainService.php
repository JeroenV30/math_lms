<?php

namespace App\Services;

use App\Models\UserSetting;
use Illuminate\Database\QueryException;
use Illuminate\Support\Collection;
use JsonException;
use RuntimeException;

/**
 * De kennisdomeinen (wiskunde, natuurkunde & chemie, biologie, …) en de toepassingen (economie, WBSO, …)
 * uit content/domains.json. Beide zijn technisch domeinen; ze verschillen alleen in sectie (zie sections()).
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

    /**
     * De twee ingangen van de leeromgeving: de kennisdomeinen ('kennis') en de toepassingen ('toepassingen').
     * Elk domein hoort bij één sectie (standaard 'kennis') en binnen de toepassingen bij een groep (SubCode, Persoonlijk).
     *
     * @return Collection<string, array>
     */
    public function sections(): Collection
    {
        return collect($this->overview()['sections'] ?? [])->keyBy('id');
    }

    public function sectionOf(array $domain): string
    {
        return (string) ($domain['section'] ?? 'kennis');
    }

    public function section(string $id): array
    {
        return $this->sections()->get($id) ?? ['id' => $id, 'name' => $id];
    }

    /**
     * Groepen van een sectie, elk met de zichtbare domeinen erin. Een sectie zonder groepen is één naamloze groep.
     *
     * @return Collection<int, array{id: ?string, name: ?string, intro: ?string, hideable: bool, domains: Collection}>
     */
    public function groups(string $section): Collection
    {
        $domains = $this->inSection($section);
        $groups = collect($this->section($section)['groups'] ?? []);

        if ($groups->isEmpty()) {
            return collect([['id' => null, 'name' => null, 'intro' => null, 'hideable' => false, 'domains' => $domains]]);
        }

        return $groups
            ->map(fn (array $group) => [
                'id' => $group['id'],
                'name' => $group['name'] ?? $group['id'],
                'intro' => $group['intro'] ?? null,
                'hideable' => (bool) ($group['hideable'] ?? false),
                'domains' => $domains->where('group', $group['id'])->values(),
            ])
            ->filter(fn (array $group) => $group['domains']->isNotEmpty())
            ->values();
    }

    /**
     * Zichtbare domeinen van één sectie.
     *
     * @return Collection<int, array>
     */
    public function inSection(string $section): Collection
    {
        return $this->visible()->filter(fn (array $domain) => $this->sectionOf($domain) === $section)->values();
    }

    /**
     * Alle domeinen, behalve die van een verbergbare groep (Persoonlijk) als die in de instellingen verborgen is.
     * all() blijft alles teruggeven: validatie, back-up en directe links werken voor elk domein.
     *
     * @return Collection<int, array>
     */
    public function visible(): Collection
    {
        $hidden = $this->hiddenGroups();

        return $hidden === [] ? $this->all() : $this->all()->reject(fn (array $domain) => in_array($domain['group'] ?? null, $hidden, true))->values();
    }

    /**
     * Groepen die nu verborgen zijn: de verbergbare groepen als de instelling 'hide_personal' aan staat.
     *
     * @return list<string>
     */
    public function hiddenGroups(): array
    {
        try {
            $hide = (bool) UserSetting::get('hide_personal');
        } catch (QueryException) {
            // Nog geen database (eerste start, artisan vóór migratie): niets verbergen.
            return [];
        }

        if (! $hide) {
            return [];
        }

        return $this->sections()
            ->flatMap(fn (array $section) => $section['groups'] ?? [])
            ->filter(fn (array $group) => $group['hideable'] ?? false)
            ->pluck('id')
            ->all();
    }

    /**
     * Heeft de leeromgeving verbergbare groepen? Alleen dan toont de instellingenpagina het vinkje.
     */
    public function hasHideableGroups(): bool
    {
        return $this->sections()->flatMap(fn (array $section) => $section['groups'] ?? [])->contains(fn (array $group) => $group['hideable'] ?? false);
    }

    /**
     * Overzichtspagina van de sectie van een domein: de kaart van kennis of de toepassingen.
     */
    public function sectionUrl(string $section): string
    {
        return $section === 'kennis' ? route('domains.index') : route('applications.index');
    }

    /**
     * Naam van de overzichtspagina van een sectie, voor het kruimelpad.
     */
    public function sectionLabel(string $section): string
    {
        return $this->section($section)['crumb'] ?? $this->section($section)['name'];
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
     * Hoe ver een domein in opbouw is, in modules: "10 van 23 modules". Null voor een
     * uitgewerkt domein, een domein zonder cursus of zonder moduleplan: daar zegt het statuslabel genoeg.
     */
    public function progressLabel(array $domain): ?string
    {
        if ($this->stage($domain) !== 'building') {
            return null;
        }

        // Lui opgehaald: CourseRegistry hangt zelf van deze service af.
        $content = app(CourseRegistry::class)->for($domain['id']);
        $total = $content->modules()->count();

        // Pas zinvol zodra er een moduleplan is; met alleen een startmodule zegt "in opbouw" genoeg.
        return $total > 1 ? $content->availableModules()->count().' van '.$total.' modules' : null;
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
