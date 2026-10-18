"""Voeg de additions.json van modules samen in de gedeelde bestanden van een cursus.

Content-agents wijzigen course.json en history/*.json niet zelf; ze leveren nieuwe
tijdlijngebeurtenissen, personen en onderwerpen aan in <moduledir>/additions.json.
Dit script voegt die samen en verwijdert daarna de additions.json.

    python scripts/merge_additions.py geschiedenis            # samenvoegen
    python scripts/merge_additions.py geschiedenis --dry-run  # alleen tonen

Bestaande id's worden niet overschreven: een dubbel id wordt gemeld en overgeslagen,
behalve dat de lijst `modules` van een bestaand item wordt aangevuld.
"""

import json
import sys
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent / 'content' / 'domains'


def load(path: Path, default):
    return json.loads(path.read_text(encoding='utf-8')) if path.exists() else default


def save(path: Path, data) -> None:
    path.parent.mkdir(parents=True, exist_ok=True)
    path.write_text(json.dumps(data, ensure_ascii=False, indent=2) + '\n', encoding='utf-8', newline='\n')


def merge_items(existing: list, new: list, kind: str, source: str) -> int:
    by_id = {item['id']: item for item in existing}
    added = 0
    for item in new:
        current = by_id.get(item['id'])
        if current is None:
            existing.append(item)
            by_id[item['id']] = item
            added += 1
            continue
        extra = [m for m in item.get('modules', []) if m not in current.get('modules', [])]
        if extra:
            current['modules'] = sorted(current.get('modules', []) + extra)
            print(f'  {kind} {item["id"]}: modules aangevuld met {extra} ({source})')
        else:
            print(f'  {kind} {item["id"]} bestaat al, overgeslagen ({source})')
    return added


def main() -> int:
    if len(sys.argv) < 2:
        print(__doc__)
        return 1

    domain, dry_run = sys.argv[1], '--dry-run' in sys.argv
    course_dir = ROOT / domain
    if not (course_dir / 'course.json').exists():
        print(f'Onbekend domein: {domain}')
        return 1

    course = load(course_dir / 'course.json', {})
    timeline_path = course_dir / 'history' / 'timeline.json'
    # Wiskunde gebruikt nog mathematicians.json; andere domeinen people.json.
    people_path = course_dir / 'history' / 'mathematicians.json'
    people_key = 'mathematicians'
    if not people_path.exists():
        people_path, people_key = course_dir / 'history' / 'people.json', 'people'

    timeline = load(timeline_path, {'events': []})
    people = load(people_path, {people_key: []})
    files = sorted(course_dir.glob('modules/*/additions.json'))

    for path in files:
        source = path.parent.name
        data = load(path, {})
        events = merge_items(timeline['events'], data.get('events', []), 'gebeurtenis', source)
        persons = merge_items(people[people_key], data.get('people', []), 'persoon', source)
        topics = 0
        for key, label in data.get('topics', {}).items():
            if key not in course.setdefault('topics', {}):
                course['topics'][key] = label
                topics += 1
        print(f'{source}: {events} gebeurtenissen, {persons} personen, {topics} onderwerpen')

    if not files:
        print('Geen additions.json gevonden.')
        return 0

    if dry_run:
        print('(dry run: niets opgeslagen)')
        return 0

    timeline['events'].sort(key=lambda e: e.get('sort_year', 0))
    people[people_key].sort(key=lambda p: p.get('sort_year', 0))
    save(course_dir / 'course.json', course)
    save(timeline_path, timeline)
    save(people_path, people)
    for path in files:
        path.unlink()
    return 0


if __name__ == '__main__':
    sys.exit(main())
