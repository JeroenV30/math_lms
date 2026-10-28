# Kennis door de Eeuwen

Leeromgeving met kennisdomeinen (`content/domains.json`); uitgewerkt is alleen het domein Wiskunde, de cursus *Rekenen & Wiskunde*.

Laravel 13 (PHP 8.4+) + SQLite + Blade/Alpine/Tailwind 4/KaTeX. Lokale leeromgeving volgens `build_plan.docx`.

Dit bestand is de enige bron met projectinstructies; `CLAUDE.md` importeert het. Pas dus alleen `AGENTS.md` aan.

- Lesstof hoort in `content/` (Markdown/JSON), nooit in controllers, Blade of JS. Formaat: `docs/CONTENT_GUIDE.md`.
- Na contentwijzigingen: `php artisan content:validate`, `php artisan test` en `node scripts/check-katex.mjs` (rendert alle formules met KaTeX, zonder browser).
  `content:validate` doet ook een taalcontrole (`app/Services/LanguageChecker.php`): dubbele woorden, losse HTML-entiteiten,
  spatie vóór een leesteken, ontbrekende spatie na een zin, dubbele spaties en oneven aanhalingstekens.
  Dezelfde controles (plus JS- en Python-tests) draaien in GitHub Actions bij elke push (`.github/workflows/ci.yml`).
- Antwoordtypen: numeric, decimal, fraction, expression, coordinate, interval, multiple, text, choice, order (zie docs/CONTENT_GUIDE.md §4). Checkers in app/Services/AnswerCheckers, geregistreerd in AnswerCheckerFactory.
- Een nieuwe databasemigratie wordt bij `start.bat` automatisch uitgevoerd; anders `php artisan migrate`.
- Widgets: Alpine-componenten in `resources/js/visualisations/`, views in `resources/views/widgets/`. Binnen `<svg>` geen `<template x-for>` gebruiken (werkt niet); genereer de SVG-inhoud als string met `x-html`, en bind `viewBox` als `:view-box.camel`.
- Regels voor beheersing, toetsdrempels en herhaling staan in `config/course.php`.
- Gebruikersteksten in het Nederlands, je-vorm; toon: universitair leerboek, niet kinderachtig.

## Werkwijze bij contentbouw met agents (usage-zuinig — vaste regel)

- **Model per taak:** modules schrijven/uitbreiden met agents op `model: "sonnet"`; eenvoudige
  zoek- of controletaken op `model: "haiku"` (feitencontrole en SVG-fixes via het agenttype
  `content-check`, `.claude/agents/content-check.md`); Opus (de hoofdsessie) alleen voor coördinatie,
  applicatiecode en eindcontrole.
- **Compacte opdracht:** geef agents `docs/CONTENT_AGENT_BRIEF.md`, `docs/domains/<domein>.md` plus een korte modulespecifieke
  beschrijving. Laat ze geen complete andere modules lezen.
- **Geen browser in agents:** geen screenshots of Playwright; de hoofdsessie test één keer per batch
  centraal (render-scan van alle lessen + browsercontrole van gewijzigde lessen).
- **Begrensd onderzoek:** hooguit ~8 gerichte webzoekopdrachten per module.
- **Parallel:** maximaal 3–4 agents tegelijk; bij een limiet een gestopte agent niet hervatten maar
  een nieuwe Sonnet-agent het resterende werk laten afmaken (bestaande bestanden blijven staan).
- **Afronden:** per batch eerst `python scripts/merge_additions.py <domein>` (voegt de `additions.json`
  van agents samen in course.json en history/), dan per module `content:validate` + `php artisan test`,
  dan commit en push.
