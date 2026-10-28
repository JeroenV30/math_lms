# Domeinaanvulling: Technologie en informatica

Hoort bij `docs/CONTENT_AGENT_BRIEF.md`. Waar beide iets zeggen, geldt deze aanvulling.

## Wat dit vak leert

Geen catalogus van apparaten of programmeertalen, maar **ontwerpend en systeemdenken**: hoe je een
probleem omzet in eisen, een werkingsprincipe kiest, afwegingen maakt en een systeem begrijpt door het
te ontleden. Elke module oefent dat aan haar eigen onderwerp (machines, energie, computers,
algoritmen, netwerken, data). De bouwstenen:

- een probleem omzetten in eisen en wensen (wat moet het doen, onder welke voorwaarden);
- een werkingsprincipe kiezen en varianten vergelijken;
- afwegen (trade-offs): krachtwinst kost weg, snelheid kost nauwkeurigheid, gemak kost privacy;
- een systeem ontleden in onderdelen: invoer, proces, uitvoer en terugkoppeling;
- kwantitatief redeneren: een eenvoudig model opstellen, rekenen met eenheden, de uitkomst op
  grootte en zinnigheid controleren (orde van grootte, behoud van energie of informatie);
- techniek in haar maatschappelijke context zien: wie profiteert, wie draagt de kosten, welke
  neveneffecten en afhankelijkheden ontstaan.

Feiten, wetten en formules zijn nodig, maar steeds als gereedschap voor een redenering. Een formule
leg je uit vanuit het probleem waar ze op antwoordt en vanuit wat er fysiek of logisch gebeurt, niet
als losse regel. Begrippen (*rendement*, *abstractie*, *protocol*) leg je uit vanuit een concreet
apparaat of geval.

## Lesopbouw (8 lessen)

| Les | `kind` | Inhoud |
|---|---|---|
| 01 introductie | `intro` | Echt openingsobject met herkomst, `:::question`, de kernvraag van de module, waarom dit ertoe doet, `{{ goals }}`, `{{ glossary }}` |
| 02–05 | `theory` | Het principe in samenhang: eerst het probleem, dan het werkingsprincipe, dan de rekenregel; steeds een `:::example` en oefeningen na elk deel |
| 06 techniek door de eeuwen | `history` | De historische lijn van het onderwerp: wie bedacht wat, onder welke omstandigheden, wat werd er later anders over gedacht. Sluit af met het kopje "Bronnen" (URL's) |
| 07 ontwerppracticum | `practice` | Een ontwerpcasus uitwerken: eisen, varianten, afweging (bijvoorbeeld een beslismatrix), testen; zelfstandig oefenen; één `:::challenge` |
| 08 samenvatting | `summary` | Kern in lopende tekst, overzichtstabel van de formules of begrippen, wat je nu kunt, `{{ quiz }}` |

Voor informatica-modules (algoritmen, binair rekenen, netwerken) blijft deze opbouw; de theorielessen
gaan dan over een algoritme, een representatie of een protocol, en het practicum is een
probleem dat je zelf in stappen (of in pseudocode) oplost.

## Openingsobject

- Kies een echt, identificeerbaar object of document: een voorwerp in een museumcollectie
  (Antikythera-mechanisme, een vuistbijl), een patent, een technische tekening, een handleiding, een
  rapport over een storing of ongeval, een standaard of protocoldocument. Vermeld maker (indien bekend),
  datum, plaats en waar het nu bewaard of gepubliceerd is.
- Laat een tijdlijnachtig verhaal liever achterwege; begin bij het voorwerp en de vraag wat het doet.
- Onderscheid steeds wat je **waarneemt** (spoor, maat, tekst) van wat je **interpreteert** (functie,
  bedoeling). Bij oude voorwerpen is dat onderscheid de kern van eerlijk redeneren.
- Afbeeldingen alleen van Wikimedia Commons of museumcollecties met publiek domein of CC-licentie
  (met licentie in bijschrift en `credits.json`); anders een eigen schematische SVG.

## Uitgewerkt voorbeeld (`:::example`)

Een berekening of ontwerpredenering met alle denkstappen, in vaste volgorde:

1. situatie en schets: wat is gegeven, wat wordt gevraagd, welke aannames (bijvoorbeeld zonder wrijving);
2. welk principe of welke formule past, en waarom;
3. invullen **met eenheden**;
4. uitrekenen;
5. controle: klopt de grootte, klopt de richting (meer kracht, minder weg), wat zegt de uitkomst
   over het ontwerp?

Bij ontwerpvragen: eisen, twee à drie varianten, scores of argumenten, keuze met benoemde
onzekerheid.

## Diagram

Minstens één eigen SVG per module: een principeschets (hefboom met armen en krachten), een
blokschema (invoer, proces, uitvoer, terugkoppeling), een tijdlijn, een energiestroom of een
stroomdiagram. Tekst in de SVG in het Nederlands, leesbaar op 600 px breed. Krachten en maten
gelabeld, pijlen met pijlpunt, geen overbodige versiering.

## Oefeningen (ca. 30–35)

| Type | Gebruik |
|---|---|
| `numeric` / `decimal` | Minstens een derde. Altijd met `unit` (N, J, W, m, %, omw/min, km/h, ...). Mechanisch voordeel, arbeid, rendement, overbrengingsverhouding, scores in een beslismatrix. Kies getallen die uitkomen op een net antwoord of geef `tolerance` mee |
| `choice` | De basis voor begrip. Afleiders zijn echte misvattingen, met `feedback`: "een hefboom levert energie", "rendement boven 100% bestaat bij goed ontwerp", "hoe nieuwer, hoe beter", verwisselde grootheden |
| `order` | Ontwerpstappen, werkingsketens (van energiebron tot uitvoer), stappen van een redenering. 4–6 items; zeg in de vraag wat de volgorde bepaalt |
| `text` | Open vragen: uitleggen, ontwerpkeuze verdedigen, afweging beschrijven. Hooguit een vijfde van de oefeningen, altijd met modelantwoord in `solution` |

- Elke oefening moet los van de les te begrijpen zijn (geen "hierboven"): ze komen ook in herkansingen.
- Zet de aannames in de vraag ("zonder wrijving", "massa van de katrol verwaarloosd", g = 9,8 m/s²).
- Mode: guided in les 02–03, daarna meer independent, en 2–3 challenge.

## Toets (15 vragen)

- `choice`, `order` (minstens 2) en `numeric`/`decimal` met `unit`; nooit `text`.
- Minstens een derde van de vragen vraagt om redeneren in een nieuwe situatie (afwegen, een
  misvatting herkennen, een systeem ontleden), niet om herhalen van de les.
- Oplopend in moeilijkheid; alle leerdoelen gedekt.

## Schrijfwijze en notatie

- SI-eenheden, met een spatie tussen getal en eenheid: "20 N", "1,5 m". In KaTeX: `20\ \text{N}`,
  decimale komma `1{,}5`. Grootheden cursief (`F`, `s`, `W`), eenheden rechtop.
- Gebruik g = 9,8 m/s² (of 9,81) en zeg het erbij. Rendement als breuk of als procent, steeds
  met de eenheid erbij.
- Schrijf "arbeid" voor de natuurkundige grootheid (W in joule) en vermijd het alledaagse "werk" daarvoor.
- Jaartallen als in de andere domeinen: "in 1712", "ca. 250 v.Chr.", "de 15e eeuw".
- Techniek is geen rechte lijn van primitief naar geavanceerd: laat zien dat oudere oplossingen vaak
  goed pasten bij hun omstandigheden. Vermijd techniekdeterminisme ("de uitvinding veranderde alles")
  en vermijd hype of angst: wees precies over wat een systeem wel en niet doet.
- Maatschappelijke gevolgen (arbeid, milieu, ongelijkheid, veiligheid, privacy) feitelijk en met de
  perspectieven van betrokkenen; geen moraliserende conclusies.

## Bronnen voor feiten

Hooguit ~8 gerichte webzoekopdrachten. Goede vertrekpunten:

- museum- en collectiepagina's (British Museum, Science Museum Group, Museum Boerhaave, het
  Nationaal Archeologisch Museum Athene);
- wetenschappelijke overzichten (Nature, Journal of Hellenic Studies, Technology and Culture), de
  Stanford Encyclopedia of Philosophy voor begrippen;
- Wikipedia (NL/EN) als overzicht; controleer kernfeiten bij een tweede bron.

Eerlijke onzekerheid: dateringen van oude voorwerpen zijn vaak een bandbreedte
("waarschijnlijk 2e–1e eeuw v.Chr."), en rendementen of schattingen uit de techniekgeschiedenis
zijn ordes van grootte. Noem ze zo.

## Extra controle

Een klein Python-script in je scratch-map dat:

- elk `numeric`- en `decimal`-antwoord herrekent uit de gegevens in de vraag (met dezelfde aannames);
- nagaat dat elk `choice`-antwoord voorkomt in de bijbehorende `choices`;
- bij elke `order`-vraag bevestigt dat de volgorde klopt (jaartallen, of causale keten);
- bevestigt dat er geen `text` in de toets staat en dat elke `unit` is ingevuld waar een eenheid hoort.

## Toon (voorbeeld)

> Een hefboom lijkt iets voor niets te geven: je duwt met 100 newton en een last van 600 newton komt
> in beweging. Toch klopt er niets van die indruk. Je betaalt in weg. Waar de last één centimeter
> omhoog gaat, moet jouw hand zes centimeter naar beneden. Wie die verhouding eenmaal ziet, kijkt
> anders naar een koevoet, een takel en een versnellingsnaaf: ze verschillen in uiterlijk, maar
> doen dezelfde ruil.
