# Kennis door de Eeuwen

Leeromgeving met kennisdomeinen (`content/domains.json`); uitgewerkt is alleen het domein Wiskunde, de cursus *Rekenen & Wiskunde*.

Laravel 13 + SQLite + Blade/Alpine/Tailwind 4/KaTeX. Lokale leeromgeving volgens `build_plan.docx`.

- Lesstof hoort in `content/` (Markdown/JSON), nooit in controllers, Blade of JS. Formaat: `docs/CONTENT_GUIDE.md`.
- Na contentwijzigingen: `php artisan content:validate`, `php artisan test` en `node scripts/check-katex.mjs` (rendert alle formules met KaTeX, zonder browser).
- Antwoordtypen: numeric, decimal, fraction, expression, coordinate, interval, multiple, text (zie docs/CONTENT_GUIDE.md §4). Checkers in app/Services/AnswerCheckers, geregistreerd in AnswerCheckerFactory.
- Widgets: Alpine-componenten in `resources/js/visualisations/`, views in `resources/views/widgets/`. Binnen `<svg>` geen `<template x-for>` gebruiken (werkt niet); genereer de SVG-inhoud als string met `x-html`, en bind `viewBox` als `:view-box.camel`.
- Regels voor beheersing, toetsdrempels en herhaling staan in `config/course.php`.
- Gebruikersteksten in het Nederlands, je-vorm; toon: universitair leerboek, niet kinderachtig.

## Werkwijze bij contentbouw met agents (usage-zuinig — vaste regel)

- **Model per taak:** modules schrijven/uitbreiden met agents op `model: "sonnet"`; eenvoudige
  zoek- of controletaken op `model: "haiku"`; Opus (de hoofdsessie) alleen voor coördinatie,
  applicatiecode en eindcontrole.
- **Compacte opdracht:** geef agents `docs/CONTENT_AGENT_BRIEF.md` plus een korte modulespecifieke
  beschrijving. Laat ze geen complete andere modules lezen.
- **Geen browser in agents:** geen screenshots of Playwright; de hoofdsessie test één keer per batch
  centraal (render-scan van alle lessen + browsercontrole van gewijzigde lessen).
- **Begrensd onderzoek:** hooguit ~8 gerichte webzoekopdrachten per module.
- **Parallel:** maximaal 3–4 agents tegelijk; bij een limiet een gestopte agent niet hervatten maar
  een nieuwe Sonnet-agent het resterende werk laten afmaken (bestaande bestanden blijven staan).
- **Afronden:** per voltooide module `content:validate` + `php artisan test`, dan commit en push.
