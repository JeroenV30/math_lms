<?php

namespace App\Services;

use App\ValueObjects\Module;
use Illuminate\Support\Collection;

/**
 * Verbindingen tussen kennisdomeinen: dezelfde persoon in meer domeinen, modules die via
 * zo'n persoon samenhangen, en één tijdlijn met de gebeurtenissen van alle domeinen.
 *
 * Personen worden herkend aan hun id (history/people.json): 'aristoteles' in biologie
 * en in filosofie is dezelfde Aristoteles.
 */
class ConnectionService
{
    public function __construct(
        private readonly CourseRegistry $courses,
        private readonly DomainService $domains,
    ) {}

    /**
     * Dezelfde persoon in de andere domeinen.
     *
     * @return Collection<int, array{domain: array, person: array}>
     */
    public function personElsewhere(string $personId, string $course): Collection
    {
        return $this->otherCourses($course)
            ->map(fn (string $id) => ($person = $this->courses->for($id)->person($personId))
                ? ['domain' => $this->domains->find($id), 'person' => $person]
                : null)
            ->filter()
            ->values();
    }

    /**
     * Beschikbare modules in andere domeinen waarin een persoon uit deze module terugkomt.
     *
     * @return Collection<int, array{domain: array, module: Module, via: list<string>}>
     */
    public function relatedModules(Module $module, string $course): Collection
    {
        $related = [];
        $personIds = $this->peopleOf($module, $course);

        foreach ($this->otherCourses($course) as $id) {
            $content = $this->courses->for($id);

            foreach ($personIds as $personId) {
                if (! $person = $content->person($personId)) {
                    continue;
                }

                $matches = $content->availableModules()->filter(fn (Module $other) => $this->mentions($person, $other));

                foreach ($matches as $other) {
                    $related[$id.':'.$other->id] ??= ['domain' => $this->domains->find($id), 'module' => $other, 'via' => []];
                    $related[$id.':'.$other->id]['via'][] = $person['name'];
                }
            }
        }

        return collect($related)->values();
    }

    /**
     * Alle tijdlijngebeurtenissen van alle domeinen, op volgorde van tijd, met hun domein
     * en het tijdvak uit domains.json → periods.
     *
     * @return Collection<int, array>
     */
    public function timeline(): Collection
    {
        return collect($this->courses->ids())
            ->flatMap(fn (string $id) => $this->courses->for($id)->timeline()->map(fn (array $event) => [
                ...$event,
                'domain' => $this->domains->find($id),
                'period' => $this->period((int) ($event['sort_year'] ?? 0)),
            ]))
            ->sortBy('sort_year')
            ->values();
    }

    /**
     * Tijdvak van een jaartal: het eerste tijdvak waarvan de grens ('until') na dat jaar ligt.
     */
    public function period(int $year): string
    {
        $periods = $this->domains->overview()['periods'] ?? [];

        foreach ($periods as $period) {
            if (! isset($period['until']) || $year < $period['until']) {
                return $period['title'];
            }
        }

        return '';
    }

    /**
     * Personen van een module: uit module.json → people, of omdat hun profiel naar de module verwijst.
     *
     * @return list<string>
     */
    private function peopleOf(Module $module, string $course): array
    {
        return $this->courses->for($course)->people()
            ->filter(fn (array $person) => $this->mentions($person, $module))
            ->pluck('id')
            ->merge($module->people)
            ->unique()
            ->values()
            ->all();
    }

    private function mentions(array $person, Module $module): bool
    {
        return in_array($module->id, $person['modules'] ?? [], true) || in_array($person['id'], $module->people, true);
    }

    /**
     * @return Collection<int, string>
     */
    private function otherCourses(string $course): Collection
    {
        return collect($this->courses->ids())->reject(fn (string $id) => $id === $course)->values();
    }
}
