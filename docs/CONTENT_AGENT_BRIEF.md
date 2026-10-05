# Opdracht voor content-agents (compact)

Je schrijft of breidt één module uit van "Rekenen & Wiskunde door de Eeuwen" (C:\Projects\math_lms).
Deze brief bevat alles wat je nodig hebt. Lees daarnaast ALLEEN: `docs/CONTENT_GUIDE.md`
(formaat, antwoordtypen §4, widgets §6), `docs/HISTORY_IDS.md` (geldige id's), `content/course.json`
(alleen het blok `topics`) en de bestanden van je eigen module. Lees geen andere modules.

## Doel en omvang (harde eis)
- 7–8 lessen, samen **minstens 40.000 tekens** Markdown. Ca. 35–40 oefeningen (guided, independent,
  2–3 challenge), bij minstens de helft `feedback` met een typisch fout antwoord + gerichte uitleg.
  15 toetsvragen in `quiz.json` (geen `text`-vragen).
- Lesopbouw: 01 introductie (historische opening met `:::question`-denkvraag, waarom bestaat deze
  wiskunde, `{{ goals }}`, `{{ glossary }}`) · 02–05 theorie in kleine stappen met meerdere
  `:::example`-kaders (volledige denkstappen) en oefeningen direct na de uitleg · 06 historisch
  intermezzo met kopje "Bronnen" · 07 praktijk en uitdaging · 08 samenvatting + `{{ quiz }}`.
- `module.json`: status `available`, learning_goals, glossary, formulas (met usage/origin),
  timeline/mathematicians alleen uit `docs/HISTORY_IDS.md`.

## Toon (voorbeeld uit module 13)
> In de vorige les gaven negatieve getallen een **positie** aan: een plek links van nul. In deze les
> gebruik je ze ook als **verandering**: een stap naar links. Met dat dubbele beeld worden optellen en
> aftrekken bijna vanzelfsprekend. Bijna, want bij het aftrekken van een negatief getal wacht een
> verrassing. Daar nemen we de tijd voor: je krijgt niet één regel, maar drie verklaringen.

Volwassen lezer, je-vorm, Nederlands, rustig en precies; eerst begrijpen waarom, dan de regel. Nooit
kinderachtig, geen telegramstijl, geen opsommingen in plaats van uitleg.

## Bij uitbreiden van een bestaande module
- Behoud alle bestaande id's (MM-NNN, MM-Txx) **met dezelfde vraag, getallen en antwoord**; je mag
  hints, oplossing, feedback, mode en topics verbeteren. Nieuwe oefeningen krijgen de volgende vrije
  nummers. Behoud bestaande lesslugs.
- Is een deel al gedaan (bijv. lessen herschreven), maak dan alleen de rest af.

## Regels
- Antwoorden moeten eenduidig zijn; vermeld bij decimalen hoe af te ronden en zet `tolerance`.
  Geld: decimal met unit "€". Gebruik nooit `$` voor geld. In JSON backslashes verdubbelen.
- Historische feiten: **hooguit ~8 gerichte webzoekopdrachten** (MacTutor, Wikipedia). Formuleer
  onzekerheid eerlijk; geen verzonnen citaten. Bronnen-URL's onderaan les 06.
- Afbeeldingen: eigen eenvoudige SVG's in `public/images/diagrams/mNN-*.svg` (viewBox, kleuren
  #1f2933 lijnen, #3b5bdb accent, #9c6b30 historisch). Externe afbeeldingen alleen als zeker
  publiek domein/CC, met `credits.json`. **Geen screenshots, geen browser/Playwright** — de
  coördinator test centraal.
- Schrijf bestanden direct weg (les voor les), zodat werk niet verloren gaat bij een onderbreking.
- Werk alleen in je eigen moduledirectory en `public/images/*/mNN-*`.

## Verificatie (verplicht, kort houden)
1. Eén klein Python-script in je scratch-map dat elk antwoord uit `exercises.json` en `quiz.json`
   onafhankelijk herrekent en controleert dat geen `feedback`-antwoord eigenlijk goed is.
2. `php artisan content:validate` en `node scripts/check-katex.mjs NN` — jouw module moet foutloos zijn (fouten in andere modules negeren).
3. Eindrapport van max. 15 regels: omvang, aantallen, gecorrigeerde fouten, twijfelpunten.
