# Domeinaanvulling: Natuurkunde en chemie

Hoort bij `docs/CONTENT_AGENT_BRIEF.md`. Waar beide iets zeggen, geldt deze aanvulling.

## Wat dit vak leert

Geen verzameling formules, maar **kwantitatief en modelmatig redeneren over de natuur**: hoe je met
metingen, modellen en experimenten tot een onderbouwde uitspraak over de materiële wereld komt.
Elke module oefent dat aan haar eigen onderwerp, met de bouwstenen van het natuurwetenschappelijk
redeneren:

- een onderzoekbare vraag stellen en grootheden kiezen;
- meten met een bekende onzekerheid, en eenheden en dimensies bewaken;
- een verband als model opstellen (tabel, grafiek, formule) en zijn geldigheidsgrens benoemen;
- voorspellen en toetsen: wat verwacht het model, en komt de meting daarmee overeen binnen de onzekerheid;
- schatten en controleren: orde van grootte, plausibiliteit, eenheden;
- de wisselwerking tussen theorie en meting: hoe een verklaring een nieuwe meting uitlokt en omgekeerd.

Formules zijn hulpmiddelen voor die redenering. Begrippen (*energie*, *evenwicht*, *mol*) leg je uit vanuit
een concreet experiment of probleem, niet als losse definitie. De geschiedenis (van Archimedes en Galilei
tot Lavoisier, Faraday en de SI) is geen sierversiering: ze laat zien waaróm een begrip nodig was.

## Lesopbouw (8 lessen)

| Les | `kind` | Inhoud |
|---|---|---|
| 01 introductie | `intro` | Openingsobject (voorwerp of experiment, met herkomst), `:::question`, kernvraag van de module, waarom dit ertoe doet, `{{ goals }}`, `{{ glossary }}` |
| 02–05 | `theory` | Het begrip stap voor stap, steeds met een concreet geval, meerdere `:::example`-kaders met volledige rekenstappen en eenheden, oefeningen na elk deel |
| 06 geschiedenis | `history` | Hoe het begrip of de meetmethode zich ontwikkelde, welke metingen een omslag brachten. Sluit af met het kopje "Bronnen" (URL's) |
| 07 practicum | `practice` | Een onderzoeksvraag met meetgegevens, analyse met onzekerheid, een conclusie die niet meer zegt dan de gegevens, één `:::challenge` (zelf een meting of experiment ontwerpen) |
| 08 samenvatting | `summary` | Kern in lopende tekst, overzicht (tabel of tijdlijn), wat je nu kunt, `{{ quiz }}` |

Modules mogen 7 lessen hebben (één theorieles minder) of een extra theorieles, zolang de totale omvang
voldoet aan de brief.

## Openingsobject

Een echt, verwijsbaar object of experiment: een voorwerp, instrument, proef of waarneming die werkelijk
bestaat. Vermeld maker, jaar, plaats en waar het nu te vinden is of waar het is beschreven (museum,
archief, publicatie). Voorbeelden: de *mètre des Archives*, Galilei's hellend vlak, Lavoisiers balans,
Cavendish' torsiebalans, het diffractiepatroon van foto 51. Laat het voorwerp bij voorkeur ook zien
(publiek domein of CC-licentie) of maak een eigen schematische SVG. Verzin nooit een proef, citaat of
meetwaarde als historisch feit; getallen die je zelf kiest voor een opgave zijn geen historische data en
worden ook niet als zodanig gepresenteerd.

## Uitgewerkt voorbeeld (`:::example`)

Een rekenvoorbeeld of redenering waarin elke stap zichtbaar is:

1. gegevens met eenheden (en onzekerheid, als die ertoe doet);
2. gevraagde grootheid en het model of de formule die haar verbindt met de gegevens;
3. omrekenen naar SI-eenheden en invullen, met de eenheid mee in elke regel;
4. uitkomst met passend aantal significante cijfers;
5. controle: orde van grootte, plausibiliteit, dimensiecheck;
6. conclusie: wat betekent dit getal, en hoe zeker is het.

Een voorbeeld mag ook een redenering zijn zonder getallen: een experiment ontwerpen, een model toetsen.

## Diagram

Minstens één eigen SVG per module: een schema van een opstelling, een grafiek of meetreeks, een
tijdlijn van definities, een krachten- of energieschema, een schematische kaart. Tekst in de SVG in het
Nederlands, leesbaar op 600 px breed; assen met grootheid én eenheid. Gebruik `public/images/natuurkunde-en-chemie/mNN-*.svg`.

## Oefeningen (ca. 30–35)

| Type | Gebruik |
|---|---|
| `decimal` / `numeric` | De basis (circa de helft). Altijd met `unit` en, bij `decimal`, een passende `tolerance` (afgestemd op de gevraagde nauwkeurigheid). Vraag de eenheid waarin het antwoord moet staan expliciet. `numeric` alleen voor gehele uitkomsten |
| `choice` | Circa een derde. Afleiders zijn echte misvattingen (verwisselde grootheden, verkeerde omrekenrichting, gewicht/massa, "meer cijfers is nauwkeuriger"), elk met `feedback` |
| `order` | 2–3 per module: de stappen van een experiment, een redenering of een schatting, of de chronologie van een ontdekking. 4–5 items. Zeg in de vraag wat de volgorde bepaalt |
| `text` | Hooguit een vijfde: een ontwerp-, verklarings- of beoordelingsvraag, altijd met een modelantwoord in `solution`. Geen `text` in de toets |

- Feedback bij minstens de helft: het typische foute antwoord (vergeten factor, omgekeerde breuk, verkeerde
  eenheid) met een gerichte uitleg. Een feedback-antwoord mag zelf nooit binnen de tolerantie van het goede antwoord vallen.
- Antwoorden kunnen alleen als gewone getallen worden ingevoerd (geen wetenschappelijke notatie): vraag
  daarom een eenheid met een handig voorvoegsel (nm, µm, TJ) zodat het antwoord een leesbaar getal is.
- Zet in de vraag alle gegevens; een oefening moet los van de les te begrijpen zijn (herkansingen trekken
  oefeningen uit de hele module). Dus geen "de vorige opgave" of "hierboven".
- `mode`: guided in les 02–03, daarna meer independent, en 2–3 challenge.
- Gebruik `context` voor een kleine meettabel of een bronfragment.

## Toets (15 vragen)

- Alleen `choice`, `order`, `numeric` en `decimal`; minstens 2 `order`; geen `text`.
- Ongeveer de helft rekenen (met eenheden), de rest concepten en redeneren: onzekerheid, plausibiliteit,
  model of meting, historische ontwikkeling.
- Oplopend in moeilijkheid; alle leerdoelen gedekt; minstens een derde van de vragen vraagt om een redenering
  (een uitkomst beoordelen, twee resultaten vergelijken, een formule of schatting controleren), niet alleen om een formule.

## Schrijfwijze en notatie

- Formules in KaTeX: symbool van een grootheid schuin (`$m$`, `$v$`), eenheden rechtop (`\text{m}`, `\text{kg}`,
  `\mathrm{kg}`), met een spatie tussen getal en eenheid: `$5\ \text{kg}$`, `$25\ \text{m/s}$`. Samengestelde eenheden
  als `\text{m/s}^2` of `\text{kg·m}^2/\text{s}^2`. Decimale komma `2{,}5`; duizendtallen met `\,`.
- SI-eenheden als vertrekpunt; noem ook gangbare niet-SI-eenheden (liter, uur, graad Celsius, ton) en reken ze om.
- Geef bij een meetwaarde een passend aantal significante cijfers en, waar het ertoe doet, de onzekerheid
  ($l = (17{,}3 \pm 0{,}1)\ \text{cm}$). Rond af pas aan het eind.
- Onderscheid massa en gewicht (kracht), warmte en temperatuur, hoeveelheid stof en massa; houd de woorden scherp.
- Tabelwaarden (dichtheden, constanten) afgerond en met "ongeveer" waar de waarde van de omstandigheden afhangt.
- Historische personen en gebeurtenissen: jaartallen concreet ("in 1799", "de 17e eeuw"). Beschrijf onzekere
  overlevering als overlevering ("volgens een verhaal dat Vitruvius optekende").
- Geen moraliserende conclusies bij gevoelige onderwerpen (kernwapens, ongelukken): feitelijk en sober.
- Geen procesopmerkingen in de lesstof; twijfels horen in het eindrapport.

## Bronnen voor feiten

Hooguit ~8 gerichte webzoekopdrachten. Goede vertrekpunten:

- BIPM (bipm.org) en NIST (nist.gov) voor eenheden, constanten en de geschiedenis van het SI;
- CODATA-waarden voor natuurconstanten; de SI-brochure van het BIPM;
- *MacTutor* (mathshistory.st-andrews.ac.uk) en de biografieën van het Encyclopaedia Britannica voor personen;
- publieke rapporten (NASA Lessons Learned, instituten) voor ongelukken en meetfouten;
- Wikipedia (NL/EN) als overzicht; controleer kernfeiten en getallen altijd bij een tweede bron.

## Extra controle

Een klein Python-script in je scratch-map dat:

- elk `numeric`/`decimal`-antwoord in `exercises.json` en `quiz.json` onafhankelijk herrekent (met dezelfde
  getallen, niet via dezelfde formule als in de tekst waar dat kan), inclusief omrekeningen en afgeronde waarden;
- nagaat dat geen `feedback`-antwoord binnen de tolerantie van het goede antwoord valt;
- elk `choice`-antwoord en elk `feedback`-antwoord laat terugkomen in `choices`, en elke `order`-herschikking
  dezelfde items bevat als het antwoord;
- bij chronologische `order`-vragen de jaartallen op volgorde zet, en bij ordeningen op grootte de waarden omrekent;
- controleert dat elke oefening in een les staat, dat elk `numeric`/`decimal`-antwoord een `unit` heeft
  (behalve dimensieloze antwoorden) en dat de eenheden in de uitwerking kloppen met die in de vraag.

## Toon (voorbeeld)

> Een getal alleen is nog geen meting. Zeg je dat een tafel 1,2 lang is, dan weet de lezer niet of je
> meters, voeten of seconden bedoelt, en ook niet hoe goed je dat getal kent. Pas als je getalswaarde,
> eenheid én onzekerheid noemt, kan iemand anders je resultaat gebruiken, herhalen of tegenspreken.
> Dat laatste is geen bezwaar: het is de manier waarop de natuurkunde vooruitkomt.
