# Opdracht voor content-agents (compact)

Je schrijft of breidt één module uit van één cursus (kennisdomein) in Kennis door de Eeuwen
(C:\Projects\math_lms). De coördinator noemt het domein (`<domein>`, bijv. `geschiedenis`) en de module.

Lees ALLEEN:

- deze brief en de aanvulling voor je domein: `docs/domains/<domein>.md` (gaat vóór deze brief);
- `docs/CONTENT_GUIDE.md` §2–5 (module.json, Markdown, oefeningen, antwoordtypen, toets), §6 alleen als je een widget gebruikt;
- `content/domains/<domein>/course.json` (alleen `parts` en `topics`);
- de geldige tijdlijn- en persoon-id's: `php artisan content:ids <domein>`;
- de bestanden van je eigen module.

Lees geen andere modules.

## Doel en omvang (harde eis, tenzij de domeinaanvulling anders zegt)

- 7–8 lessen, samen **40.000–55.000 tekens** Markdown. Meer is niet beter: schrijf niet verder dan dat.
- Oefeningen: aantal en typen volgens de domeinaanvulling. Bij minstens de helft een `feedback`-regel:
  een typisch fout antwoord met gerichte uitleg.
- 15 toetsvragen in `quiz.json`, oplopend in moeilijkheid, alle leerdoelen gedekt, geen `text`-vragen.
- `module.json`: status `available`, realistische `estimated_minutes`, learning_goals, glossary,
  timeline/people alleen met id's uit `content:ids` of uit je eigen `additions.json` (zie onder).

## Kwaliteitslat (elk domein)

- **Echt openingsobject.** Les 01 opent met een concreet, verwijsbaar object: een bron, voorwerp,
  experiment, tekst of probleem dat echt bestaat, met maker, datum en plaats, en waar het nu te vinden is.
- **Denk eerst zelf na.** Direct na de opening een `:::question`-kader met een denkvraag, vóór de uitleg.
  Ook in de theorielessen minstens één keer.
- **Diagram.** Minstens één eigen SVG-diagram per module (tijdlijn, schema, kaartschets, proces).
- **Uitgewerkt voorbeeld.** Meerdere `:::example`-kaders waarin de denkstappen volledig worden uitgeschreven.
- **Structuur.** Per les 4–5 kopjes (`##`), lopende tekst. Geen opsommingen in plaats van uitleg.
- **Oefenen.** Oefeningen direct na het stuk uitleg waar ze bij horen (`{{ exercises: … }}`).

## Toon

Volwassen lezer, je-vorm, Nederlands, rustig en precies: een universitair leerboek, nooit kinderachtig,
geen telegramstijl. Eerst begrijpen waarom, dan de regel of de conclusie. De domeinaanvulling geeft
een voorbeeldalinea.

## Bij uitbreiden van een bestaande module

- Behoud alle bestaande id's (NN-NNN, NN-Txx) **met dezelfde vraag en hetzelfde antwoord**. Je mag
  hints, oplossing, feedback, mode en topics verbeteren. Nieuwe oefeningen krijgen de volgende vrije nummers.
- Behoud bestaande lesslugs.
- Is een deel al gedaan, maak dan alleen de rest af.

## Regels

- **Feiten.** Hooguit ~8 gerichte webzoekopdrachten (bronnen: zie domeinaanvulling). Formuleer
  onzekerheid eerlijk ("waarschijnlijk", "volgens de meeste onderzoekers"). Geen verzonnen citaten,
  anekdotes of getallen. Bronnen-URL's onder een kopje "Bronnen" in de les van soort `history`.
- **Afbeeldingen.** Eigen eenvoudige SVG's (viewBox, lijnen #1f2933, accent #3b5bdb, historisch #9c6b30):
  - wiskunde: `public/images/diagrams/mNN-*.svg`;
  - andere domeinen: `public/images/<domein>/mNN-*.svg`.

  Externe afbeeldingen alleen als ze zeker publiek domein of CC zijn, met maker en licentie in het
  bijschrift en in `credits.json`. **Geen screenshots, geen browser of Playwright**: de coördinator test centraal.
- **Gedeelde bestanden zijn van de coördinator.** Wijzig nooit `course.json`, `history/*.json` of
  `content/domains.json`. Nieuwe tijdlijngebeurtenissen, personen of onderwerpen lever je in als
  `<moduledir>/additions.json` in het formaat van CONTENT_GUIDE §7:
  `{ "events": [...], "people": [...], "topics": { "sleutel": "Label" } }`.
  Je mag die id's al in je `module.json` gebruiken; tot ze zijn samengevoegd geeft `content:validate`
  daar alleen een waarschuwing over.
- Gebruik `$` alleen voor formules (KaTeX), nooit voor geld of als teken in lopende tekst.
- Schrijf bestanden direct weg, les voor les, zodat werk niet verloren gaat bij een onderbreking.
- Werk alleen in je eigen moduledirectory en je eigen afbeeldingsbestanden (`mNN-*`).
- Hulpscripts alleen in een eigen submap `<domein>-mNN/` van de scratchpad (gedeeld met andere agents).
  Draai nooit scripts van anderen.
- Geen procesopmerkingen in de lesstof ("niet getoetst", "niet gevonden in de bron"). Twijfels horen
  alleen in je eindrapport.

## Verificatie (verplicht, kort houden)

1. De extra controle uit je domeinaanvulling (bij wiskunde: antwoorden herrekenen).
2. `php artisan content:validate` (incl. taalcontrole) en `node scripts/check-katex.mjs NN`. Jouw module
   moet foutloos zijn; fouten in andere modules negeer je. Waarschuwingen over id's uit je eigen
   `additions.json` zijn verwacht.
3. Eindrapport van max. 15 regels: omvang (tekens, lessen, oefeningen, toetsvragen), gecorrigeerde
   fouten en twijfelpunten.
