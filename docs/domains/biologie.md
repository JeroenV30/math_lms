# Domeinaanvulling: Biologie

Hoort bij `docs/CONTENT_AGENT_BRIEF.md`. Waar beide iets zeggen, geldt deze aanvulling.

## Wat dit vak leert

Geen opsomming van namen van organen en processen, maar **biologisch redeneren**: uit waarnemingen en
experimenten tot een onderbouwde verklaring komen over levende systemen. Elke module oefent dat aan haar
eigen onderwerp, met deze bouwstenen:

- **structuur en functie:** hoe verklaart de bouw wat een onderdeel doet, en omgekeerd;
- **schaalniveaus:** molecuul, organel, cel, weefsel, orgaan, organisme, populatie, ecosysteem; welk
  verschijnsel hoort op welk niveau thuis en hoe verbinden niveaus elkaar;
- **proximate en ultimate verklaringen:** *hoe* werkt het (mechanisme, ontwikkeling) naast *waarom* is het
  zo ontstaan (evolutie, selectie). Beide zijn nodig en spreken elkaar niet tegen;
- **onderzoek:** waarneming, vraag, hypothese, voorspelling, experiment met controle, variabelen
  (onafhankelijk, afhankelijk, constant), meetfouten, conclusie met de juiste mate van zekerheid;
- **kwantitatief denken:** grootte, schaal, vergroting, verhoudingen, snelheden, percentages uit tabellen;
- **modellen:** wat een tekening of schema weglaat, en waarom dat nuttig is.

Feiten en begrippen zijn materiaal voor een redenering. Leg begrippen (*osmose*, *homeostase*, *selectie*) uit
vanuit een concreet geval of experiment, niet als losse definitie. Bestrijd bekende misvattingen
expliciet (teleologisch denken, "planten ademen niet", "organismen passen zich aan zodat ze overleven").
Historische lijn: Aristoteles, Hooke en Van Leeuwenhoek, Schleiden/Schwann/Virchow, Darwin, Mendel,
Watson/Crick, tot moderne technieken; de geschiedenis laat zien hoe kennis uit bewijs ontstaat en
herzien wordt.

## Lesopbouw (7–8 lessen)

| Les | `kind` | Inhoud |
|---|---|---|
| 01 introductie | `intro` | Openingsobject (publicatie, voorwerp, experiment, preparaat, met herkomst), `:::question`, de kernvraag, waarom dit ertoe doet, `{{ goals }}`, `{{ glossary }}` |
| 02–06 | `theory` | 3–5 lessen: het verhaal in samenhang, steeds met een concreet experiment of waarneming, minstens één `:::example` en een `:::question`, oefeningen na elk deel |
| 07 onderzoekers in debat | `history` | Hoe is kennis hierover ontstaan: experimenten, tegenstanders, herzieningen. Behandelt ook onderzoeksopzet (hypothese, controle, variabelen), met één `:::challenge`. Sluit af met het kopje "Bronnen" (URL's) |
| 08 samenvatting | `summary` | Kern in lopende tekst, een tijdlijnoverzicht, wat je nu kunt, `{{ quiz }}` |

Bij een module met minder theorielessen mag een aparte `practice`-les (experimentontwerp,
dataverwerking) de plaats van een theorieles innemen; houd het totaal op 7–8.

## Openingsobject

Kies iets dat echt bestaat en identificeerbaar is: een publicatie (Hooke, *Micrographia*, 1665), een
instrument, een beroemd experiment, een preparaat, een foto of tekening, een dataset. Vermeld maker,
datum, plaats en waar het nu bewaard of te raadplegen is. Citaten alleen uit een controleerbare bron,
kort, "vrij vertaald naar …" als je zelf vertaalt. Verzin geen citaten of anekdotes.

Afbeeldingen alleen van Wikimedia Commons of collecties met publiek domein/CC, vermeld in `credits.json`.
Liever een eigen schematische SVG.

## Uitgewerkt voorbeeld (`:::example`)

Een redenering of berekening waarvan alle denkstappen op papier staan, bijvoorbeeld:

1. de onderzoeksvraag of het verschijnsel;
2. welke gegevens of waarnemingen er zijn (tabel, uitkomst);
3. berekening of vergelijking, met eenheden;
4. wat de gegevens wel en niet aantonen (rol van de controle, alternatieve verklaring);
5. conclusie, met hoe zeker die is.

Of een structuur–functieredenering: bouw → mogelijkheid → functie → evolutionair voordeel (ultimaat).

## Diagram

Minstens één eigen SVG per module: een schaalbalk op logaritmische as, een doorsnede, een
stroomschema, een cyclus, een tijdlijn, een stamboom. Tekst in de SVG in het Nederlands, leesbaar op
600 px breed. Bij genereren in een script: schrijf het SVG-bestand uit, geen binaire afbeeldingen.

## Oefeningen (ca. 30–35)

| Type | Gebruik |
|---|---|
| `choice` | De basis (ca. de helft). Afleiders zijn echte misvattingen met `feedback`: teleologisch denken ("de cel doet het *om* te overleven"), "planten ademen niet", "osmose is water dat naar de lage concentratie stroomt", verwisselde schaalniveaus, correlatie als oorzaak, ontbrekende controlegroep |
| `order` | Processen en stappen: van oorzaak naar gevolg, fasen, de logica van een experiment, van klein naar groot. 1–2 per theorieles, 4–6 items. Zeg in de vraag wat de volgorde bepaalt |
| `numeric` / `decimal` | Vergroting, schaalberekening, celgroottes, omrekenen van eenheden (m, mm, µm, nm), oppervlakte/volume, delingen en aantallen, percentages en verschillen uit een tabel. Altijd met `unit` waar dat past |
| `multiple` | Alleen als twee uitkomsten bij één berekening horen |
| `text` | Uitleggen, ontwerpen van een experiment, argumenteren. Hooguit een kwart, altijd met een modelantwoord in `solution` |

- Gebruik `context` voor een kleine tabel of waarneming waarover de vraag gaat. Geen "hierboven" in vraag of
  context (herkansingen hergebruiken oefeningen).
- Mode: guided in les 02–03, daarna meer independent, en 2–3 challenge.
- Numerieke antwoorden: kies getallen die netjes uitkomen, en geef de eenheid in `unit`. Wetenschappelijke
  notatie vermijd je in antwoordvelden: kies een eenheid (µm, nm) die een gewoon getal geeft.

## Toets (15 vragen)

- Alleen `choice` en `order` (minstens 2 `order`), met `numeric`/`decimal` waar een berekening hoort.
- Minstens een derde gaat over redeneren met een gegeven (tabel, experimentbeschrijving) in `context`,
  niet alleen over feitenkennis.
- Alle leerdoelen gedekt, oplopend in moeilijkheid.

## Schrijfwijze en notatie

- Eenheden: µm, nm, mm, cm, m, g, L, mol/L; spatie tussen getal en eenheid; decimale komma. In formules
  `$\mu\text{m}$`; in lopende tekst gewoon "µm".
- Wetenschappelijke namen cursief (*Escherichia coli*); eerste keer met Nederlandse naam erbij.
- Introduceer een begrip met de Nederlandse term; zet de Engelse of Latijnse naam tussen haakjes als dat
  helpt bij verder lezen (*endoplasmatisch reticulum*, ER).
- Schrijf "ongeveer", "waarschijnlijk", "volgens de meeste onderzoekers" waar het bewijs dat vraagt.
  Getallen uit de literatuur zijn vaak bereiken: noem het bereik of "typisch".
- Geen teleologische formuleringen als verklaring ("de cel heeft een kern omdat hij erfelijk materiaal
  nodig heeft"). Schrijf: "cellen met een kern ...; selectie bevoordeelde ...".
- Menselijke gezondheid, ziekte, dierproeven, embryo's, evolutie en klimaat: feitelijk en sober, met
  de stand van het bewijs; geen moraliserende conclusies.
- Kaders `history` gebruik je voor korte bronkaders: `:::history Delft, 1674`.

## Bronnen voor feiten

Hooguit ~8 gerichte webzoekopdrachten. Goede vertrekpunten:

- Nobelprize.org (Nobellezingen en achtergrond), Royal Society (Philosophical Transactions, archief);
- Museum Boerhaave, Naturalis, Wellcome Collection;
- open leerboeken (OpenStax Biology), *Molecular Biology of the Cell* (Alberts e.a.) als naslag;
- Wikipedia (NL/EN) als overzicht. Controleer kernfeiten altijd bij een tweede bron.

## Extra controle

Een klein Python-script in je scratch-map dat:

- bij elke `numeric`/`decimal`-vraag het antwoord herrekent uit de gegevens in de vraag;
- bij elke `order`-vraag de volgorde nog eens naast de bedoelde logica legt (jaartallen, stappen) en
  bevestigt dat er geen dubbele items zijn;
- nagaat dat elk `choice`-antwoord voorkomt in de bijbehorende `choices`, dat afleiders niet dubbel zijn
  en dat de juiste antwoorden niet steeds op dezelfde plaats staan;
- telt hoeveel oefeningen een `feedback`-regel hebben en hoeveel `text`-vragen er zijn (hooguit een kwart).

## Toon (voorbeeld)

> Robert Hooke zag in 1665 in een plakje kurk een rij kleine kamertjes en noemde ze *cells*. Wat hij zag,
> waren geen levende cellen, maar de lege wanden van cellen die al lang dood waren. Toch begint hier
> een van de grote ideeën van de biologie. Dat idee komt niet uit één blik door een lens, maar uit
> generaties waarnemingen, experimenten en discussies, waarin steeds iemand iets kon laten zien dat een
> eerdere verklaring moest bijstellen. Wie biologie leert, leert dus ook hoe je weet wat je weet.
