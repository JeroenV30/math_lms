# Rekenen & Wiskunde door de Eeuwen

Laravel 13 + SQLite + Blade/Alpine/Tailwind 4/KaTeX. Lokale leeromgeving volgens `build_plan.docx`.

- Lesstof hoort in `content/` (Markdown/JSON), nooit in controllers, Blade of JS. Formaat: `docs/CONTENT_GUIDE.md`.
- Na contentwijzigingen: `php artisan content:validate` en `php artisan test`.
- Antwoordtypen v1: numeric, decimal, fraction. Nieuwe checkers pas toevoegen wanneer algebra-modules ze nodig hebben (bouwplan §36).
- Widgets: Alpine-componenten in `resources/js/visualisations/`, views in `resources/views/widgets/`. Binnen `<svg>` geen `<template x-for>` gebruiken (werkt niet); genereer de SVG-inhoud als string met `x-html`, en bind `viewBox` als `:view-box.camel`.
- Regels voor beheersing, toetsdrempels en herhaling staan in `config/course.php`.
- Gebruikersteksten in het Nederlands, je-vorm; toon: universitair leerboek, niet kinderachtig.
