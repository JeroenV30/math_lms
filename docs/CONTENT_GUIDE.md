# Contentgids – Rekenen & Wiskunde door de Eeuwen

Alle cursusinhoud staat in `content/`. De applicatie leest deze bestanden; er staat
geen lesstof in controllers, Blade of JavaScript. Nieuwe lessen of oefeningen
toevoegen = bestanden aanpassen, niet programmeren.

```
content/
├── course.json                 # delen, onderwerpen (topics) en cursusinfo
├── history/
│   ├── timeline.json           # historische tijdlijn (/history)
│   └── mathematicians.json     # wiskundigenprofielen (/mathematicians)
└── modules/
    └── 01-wat-is-een-getal/
        ├── module.json         # metadata, leerdoelen, begrippen, lessen
        ├── 01-introductie.md   # lessen in Markdown (volgorde = module.json)
        ├── 02-theorie-a.md
        ├── ...
        ├── exercises.json      # oefeningen
        └── quiz.json           # hoofdstuktoets
```

Afbeeldingen staan in `public/images/{history,mathematicians,diagrams,timelines}/`
en worden in Markdown aangeroepen als `/images/diagrams/bestand.svg`.

---

## 1. Doelgroep en toon

- Volwassen (her)leerder die rekenen en wiskunde vanaf de basis opnieuw opbouwt
  tot HBO/WO-niveau. **Niet kinderachtig**: denk "universitair leerboek ×
  moderne educatieve webapp".
- Nederlands, je-vorm, rustige korte zinnen, kleine stappen. Eerst begrijpen,
  dan de formule.
- Elke module koppelt de wiskunde aan het probleem waaruit ze ontstond.
- Historische feiten moeten kloppen. Gebruik voorzichtige formuleringen
  ("ongeveer", "waarschijnlijk", "volgens de meeste onderzoekers") waar de
  wetenschap onzeker is. Geen verzonnen anekdotes.

## 2. module.json

```json
{
  "id": 1,
  "slug": "wat-is-een-getal",
  "title": "Wat is een getal?",
  "part": 1,
  "level": "fundamenten",
  "status": "available",
  "historical_period": "Prehistorie",
  "estimated_difficulty": 1,
  "estimated_minutes": 90,
  "prerequisites": [],
  "topics": ["counting", "number-line"],
  "core_question": "Wat betekent het eigenlijk dat acht appels en acht schapen allebei \"acht\" zijn?",
  "summary": "Eén of twee zinnen voor het cursusoverzicht.",
  "learning_goals": ["Je kunt ...", "Je begrijpt ..."],
  "glossary": [
    { "term": "Hoeveelheid", "definition": "Hoeveel dingen er zijn, los van wat die dingen zijn." }
  ],
  "formulas": [
    { "name": "Deling met rest", "latex": "a = q \\cdot b + r", "usage": "...", "origin": "..." }
  ],
  "lessons": [
    { "slug": "introductie", "title": "Acht schapen", "file": "01-introductie.md", "kind": "intro" }
  ],
  "timeline": ["ishango-been"],
  "mathematicians": ["brahmagupta"]
}
```

- `status`: `available` (inhoud klaar) of `planned` (alleen metadata).
- `kind` per les: `intro`, `theory`, `history`, `practice`, `summary`.
- `topics`: alleen sleutels uit `course.json → topics`.
- `timeline` / `mathematicians`: id's uit `content/history/*.json`.

### Vaste lesindeling (contentsjabloon)

| Bestand | Inhoud (sjabloon §37) |
|---|---|
| `01-introductie.md` | Historische opening (concreet probleem), "Waarom bestaat deze wiskunde?", `{{ goals }}`, `{{ glossary }}` |
| `02-theorie-a.md` | Theorie A, voorbeelden A, begeleide oefeningen A |
| `03-theorie-b.md` | Theorie B, voorbeelden B, oefeningen B |
| `04-historisch-intermezzo.md` | Verdieping over een persoon, bron of cultuur |
| `05-praktijk-en-uitdaging.md` | Praktijktoepassing, zelfstandig oefenen, één uitdaging |
| `06-samenvatting.md` | Samenvatting, wat je nu moet beheersen, verwijzing naar de toets |

Een module mag extra theorielessen hebben (`03b-theorie-c.md` enz.), zolang ze in
`lessons` staan.

## 3. Markdown

Gewone CommonMark/GFM (koppen, lijsten, tabellen, vet, afbeeldingen) plus:

### Formules (KaTeX)

- Inline: `$a^2 + b^2 = c^2$`
- Blok:
  ```
  $$
  37 \times 14 = 37 \times (10 + 4) = 370 + 148 = 518
  $$
  ```
- Decimale komma in KaTeX: `3{,}14`. Duizendtallen: `1\,000` of gewoon `1000`.
- **Gebruik `$` nooit voor geld.** Schrijf `€ 4,50`.

### Kaders

```
:::history Egypte, ca. 1650 v.Chr.
Negen broden moeten eerlijk worden verdeeld over tien arbeiders...
:::
```

Soorten: `history` (historisch kader), `definition`, `theory`, `example`
(uitgewerkt voorbeeld), `formula`, `tip`, `warning`, `practice`, `challenge`,
`summary`, `question` (denkvraag vóór de uitleg). De tekst na het type is de titel
(optioneel). Kaders kunnen niet genest worden.

### Afbeeldingen

`![Alt-tekst](/images/history/ishango.jpg "Bijschrift — bron, licentie")`

Een afbeelding met titel wordt een `<figure>` met bijschrift. Gebruik alleen eigen
SVG-diagrammen of afbeeldingen met een vrije licentie (publiek domein, CC0, CC BY,
CC BY-SA) en zet maker + licentie in het bijschrift. Registreer elke externe
afbeelding ook in `credits.json` in de moduledirectory (of `content/history/credits.json`):

```json
{ "images": [ { "file": "/images/history/m01-ishango.jpg", "title": "...", "author": "...",
  "license": "CC BY-SA 4.0", "source": "https://commons.wikimedia.org/wiki/File:..." } ] }
```

Bestandsnamen krijgen een moduleprefix (`m01-...`) zodat modules elkaar niet
overschrijven. Houd afbeeldingen klein (max. ~1200 px breed, < 400 kB).

### Directieven (op een eigen regel)

| Directief | Resultaat |
|---|---|
| `{{ exercise: 01-004 }}` | Eén oefening |
| `{{ exercises: 01-001, 01-002, 01-003 }}` | Groep oefeningen |
| `{{ widget: naam param=waarde }}` | Interactieve visualisatie (zie §6) |
| `{{ goals }}` | Leerdoelen uit module.json |
| `{{ glossary }}` | Kernbegrippen uit module.json |
| `{{ quiz }}` | Knop naar de hoofdstuktoets |

## 4. exercises.json

```json
{
  "exercises": [
    {
      "id": "04-001",
      "type": "numeric",
      "mode": "guided",
      "difficulty": 1,
      "question": "Bereken $37 \\times 14$.",
      "answer": 518,
      "hints": ["Splits 14 in 10 en 4.", "Bereken eerst $37 \\times 10$."],
      "solution": ["$37 \\times 10 = 370$", "$37 \\times 4 = 148$", "$370 + 148 = 518$"],
      "feedback": [
        { "answer": 407, "message": "Je hebt 37 × 11 berekend. Controleer hoe je 14 hebt gesplitst." }
      ],
      "topics": ["multiplication", "mental-math"]
    }
  ]
}
```

- `id`: `MM-NNN` (module, volgnummer). Toetsvragen: `MM-T01`.
- `mode`: `guided` (hints direct zichtbaar als knop, hint wordt aangeboden na een
  fout), `independent` (hints pas na expliciete vraag), `challenge` (uitdaging).
- `difficulty`: 1 directe toepassing · 2 kleine denkstap · 3 combinatie van
  kennis · 4 complex probleem · 5 echte uitdaging.
- `question`, `hints`, `solution`, `feedback.message`: Markdown + KaTeX (inline).
- `feedback` (optioneel): veelgemaakte foute antwoorden met gerichte uitleg
  (foutenanalyse). Wordt vergeleken met dezelfde checker als het antwoord.
- `unit` (optioneel): eenheid achter het invoerveld, bv. `"cm"`, `"€"`, `"min"`.
- Optioneel `context`: korte Markdown boven de vraag (bv. een tabel).

### Antwoordtypen

| type | `answer` | Opties | Geaccepteerde invoer |
|---|---|---|---|
| `numeric` | geheel getal `518` | – | `518`, `1.000`, `1 000`, `-12`, `x = 4` |
| `decimal` | getal `3.1416` | `tolerance` (standaard 0,000001) | `3,1416`, `3.1416`, `€ 4,50` |
| `fraction` | string `"3/4"` | `require_simplified` (bool), `allow_decimal` (bool) | `3/4`, `6/8`, `1 1/2`, `2` |
| `expression` | string `"2x + 4"` | `form`: `"expanded"` (geen haakjes) of `"factored"` (als product) | `4 + 2x`, `2(x+2)`, `x^2`, `x²`, `3xy`, `√(x+1)`, `y = 2x + 3` |
| `coordinate` | string `"(3; 7)"` | `tolerance` | `(3; 7)`, `(3, 7)`, `(3,5; -2)` |
| `interval` | string `"[2; 8⟩"` | `tolerance` | `[2; 8]`, `⟨2; 8]`, `<2, 8]`, `(2, 8)`, `[3; ∞⟩` |
| `multiple` | – (gebruik `parts`) | per deel de opties van zijn type | één invoerveld per deel |

Bij `multiple` staat in plaats van `answer` een lijst `parts`:

```json
"type": "multiple",
"parts": [
  { "label": "x", "answer": 7, "type": "numeric" },
  { "label": "y", "answer": 3, "type": "numeric" }
]
```

Een `expression` wordt gecontroleerd door beide expressies op een reeks punten
uit te rekenen: elke gelijkwaardige schrijfwijze is goed, tenzij `form` iets
anders eist. Gebruik in de vraag letters als variabelen (x, y, a, …) en geen `e`
als variabele. `feedback`-regels werken niet bij `multiple`.

Voor interpretatievragen (`text`) is nog geen type: formuleer die als denkvraag
in een `:::question`-kader in de les.

## 5. quiz.json

```json
{
  "title": "Hoofdstuktoets – Wat is een getal?",
  "intro": "15 vragen. Je hebt 70% nodig om de module af te ronden, 85% voor 'beheerst'.",
  "questions": [ { "id": "01-T01", "type": "numeric", "...": "zelfde velden als oefeningen" } ]
}
```

Toetsvragen tonen tijdens de toets geen hints; de oplossing verschijnt na
inleveren. Ongeveer 15 vragen, oplopend in moeilijkheid, alle leerdoelen gedekt.

## 6. Widgets (interactieve visualisaties)

Alleen gebruiken waar ze begrip toevoegen.

| Widget | Parameters | Wat het doet |
|---|---|---|
| `tally` | `value` | Getal ⇄ turfstreepjes in groepjes van vijf |
| `number-line` | `min`, `max`, `value` | Sleep/klik een punt op de getallenlijn |
| `place-value` | `value` | Getal als duizendtallen/honderdtallen/tientallen/eenheden + uitsplitsing |
| `babylonian` | `value` | Getal in Babylonisch zestigtallig spijkerschrift |
| `roman` | `value` | Getal ⇄ Romeinse cijfers, met uitleg |
| `column-arithmetic` | `a`, `b`, `op` (`+` of `-`) | Kolomsgewijs optellen/aftrekken, stap voor stap met onthouden/lenen |
| `area-model` | `a`, `b` | Rechthoekmodel van vermenigvuldigen (splitsen in tientallen en eenheden) |
| `egyptian-multiplication` | `a`, `b` | Egyptische vermenigvuldiging door verdubbelen |
| `sharing` | `total`, `groups` | Eerlijk verdelen met rest |
| `sieve` | `max` | Zeef van Eratosthenes |
| `unit-ladder` | `quantity` (`length`, `weight`, `volume`) | Metriek trapje + omrekenen |
| `fraction` | `numerator`, `denominator`, `shape` (`bar`/`circle`), `compare` (bv. `6/8`) | Breuk als balk of cirkel; vereenvoudigd, kommagetal, procent; optioneel vergelijken |
| `percent-grid` | `value` | Honderdveld 10 × 10: procent ⇄ breuk ⇄ kommagetal |
| `ratio-table` | `a`, `b`, `labelA`, `labelB` (tekst met spaties tussen "…") | Verhoudingstabel die evenredig meerekent, met factor per kolom |
| `angle` | `value` | Hoek slepen op een gradenboog; soort hoek |
| `shape-area` | `shape` (`rectangle`, `triangle`, `parallelogram`, `circle`) | Oppervlakte en omtrek op een rooster, met formule |
| `pythagoras` | `a`, `b` | Rechthoekige driehoek met vierkanten op de zijden; c wordt berekend |
| `right-triangle` | `angle` (1–89 graden), `hypotenuse` (1–20) | Rechthoekige driehoek met schuifregelaars; aanliggende en overstaande zijde, sinus, cosinus en tangens |
| `boxplot` | `values` (getallen gescheiden door `;`) | Boxplot met minimum/maximumsnorren, kwartielen zonder de middelste observatie bij oneven n, populatie- en steekproefspreiding |
| `unit-circle` | `angle` (−360 tot 720 graden) | Georiënteerde hoek, radialen en getekende sinus/cosinus; tangens is ongedefinieerd bij verticale richtingen |
| `stats` | `values` (bv. `"4; 6; 6; 7; 9"`) | Stippendiagram met gemiddelde, mediaan, modus en spreidingsbreedte; waarden toevoegen/verwijderen |
| `powers` | `base`, `max` | Tabel van machten met groeibalken |
| `coordinate-grid` | `size` (3–10), `points` (bv. `"(2;3) (-4;1)"`), `connect` | Assenstelsel; punten aanklikken, kwadranten, helling tussen twee punten |
| `function-plot` | `fn` (bv. `"a*x + b"`), optioneel `fn2`, `xmin`/`xmax`/`ymin`/`ymax`, startwaarden per parameter (`a=2`, en `amin`/`amax`/`astep`), `tangent=true` (+ `x0`), `area=true` (+ `lower`, `upper`), `roots=true`, `title` | Grafiek met schuifregelaar per parameter (elke letter behalve x en e); raaklijn met helling, oppervlakte onder de grafiek, nulpunten |

Alle widgets met een voorbeelddirectief zijn te zien op `/dev/widgets` (alleen lokaal).
`number-line` werkt ook met negatieve getallen (`min=-10`).

## 7. Tijdlijn en wiskundigen

`content/history/timeline.json`:

```json
{
  "events": [
    {
      "id": "ishango-been",
      "year_label": "ca. 20.000 v.Chr.",
      "sort_year": -20000,
      "era": "Prehistorie",
      "title": "Het Ishango-been",
      "summary": "Eén zin.",
      "description": "Markdown, 1–3 alinea's.",
      "place": "Ishango, Congo",
      "modules": [1],
      "mathematicians": [],
      "image": null
    }
  ]
}
```

`content/history/mathematicians.json`:

```json
{
  "mathematicians": [
    {
      "id": "euclides",
      "name": "Euclides",
      "full_name": "Euclides van Alexandrië",
      "lived": "ca. 325 – ca. 265 v.Chr.",
      "sort_year": -300,
      "region": "Alexandrië",
      "known_for": "Eén zin.",
      "bio": "Markdown, 2–4 alinea's.",
      "contributions": ["De Elementen", "..."],
      "modules": [11, 18],
      "timeline": ["euclides-elementen"],
      "image": null
    }
  ]
}
```
