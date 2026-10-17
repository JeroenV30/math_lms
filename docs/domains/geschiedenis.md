# Domeinaanvulling: Geschiedenis

Hoort bij `docs/CONTENT_AGENT_BRIEF.md`. Waar beide iets zeggen, geldt deze aanvulling.

## Wat dit vak leert

Geen rij jaartallen, maar **historisch denken**: hoe je met bronnen tot een onderbouwde uitspraak over
het verleden komt. Elke module oefent dat aan haar eigen onderwerp, met de bouwstenen van het
historisch redeneren (Van Drie & Van Boxtel):

- een historische vraag stellen;
- bronnen gebruiken en beoordelen;
- contextualiseren (tijd, plaats, omstandigheden);
- oorzaak en gevolg, continuïteit en verandering;
- perspectieven van betrokkenen en van latere historici;
- argumenteren met de juiste mate van zekerheid.

Feiten en chronologie zijn nodig, maar steeds als materiaal voor een redenering. Begrippen
(*feodalisme*, *Reformatie*, *industrialisatie*) leg je uit vanuit concrete gevallen en
bronnen, niet als losse definitie.

## Lesopbouw (8 lessen)

| Les | `kind` | Inhoud |
|---|---|---|
| 01 introductie | `intro` | Openingsbron (afbeelding of fragment, met herkomst), `:::question`, de kernvraag van de module, waarom dit ertoe doet, `{{ goals }}`, `{{ glossary }}` |
| 02–05 | `theory` | Het verhaal in samenhang (chronologisch of thematisch), steeds met bronfragmenten, een `:::example` en oefeningen na elk deel |
| 06 historici in debat | `history` | Historiografie: hoe is hierover gedacht, welke interpretaties staan tegenover elkaar en waarom. Sluit af met het kopje "Bronnen" (URL's) |
| 07 bronnenpracticum | `practice` | Twee à drie bronnen naast elkaar, een kleine onderzoeksvraag, zelfstandig oefenen, één `:::challenge` |
| 08 samenvatting | `summary` | Kern in lopende tekst, een tijdlijnoverzicht, wat je nu kunt, `{{ quiz }}` |

## Openingsbron en bronfragmenten

- Kies een echte, identificeerbare bron: een document, voorwerp, kaart, gebouw of afbeelding. Vermeld
  maker (indien bekend), datum, plaats en waar de bron nu bewaard wordt (collectie, inventarisnummer
  als dat makkelijk te vinden is).
- Afbeeldingen alleen van Wikimedia Commons of museumcollecties met publiek domein of CC-licentie.
  Download ze naar `public/images/geschiedenis/mNN-*.jpg` (max. ~1200 px breed, < 400 kB) en
  registreer ze in `credits.json` van de module. Lukt dat niet zeker, beschrijf de bron dan in
  woorden of maak een eigen schematische SVG.
- Citeer alleen uit een controleerbare editie of vertaling, kort (hooguit ~150 woorden), en vermeld
  waar het fragment vandaan komt. Vertaal je zelf, schrijf dan "vrij vertaald". Verzin nooit een
  bronfragment, ook niet "ter illustratie".

## Uitgewerkt voorbeeld (`:::example`)

Een uitgewerkte bronanalyse of redenering, stap voor stap:

1. herkomst: wie, wanneer, waar, voor wie;
2. context;
3. wat de bron zegt en wat ze níét zegt;
4. bruikbaarheid voor déze vraag;
5. conclusie, met hoe zeker die is.

Of een oorzakenredenering waarin je korte- en langetermijnoorzaken scheidt en weegt.

## Diagram

Minstens één eigen SVG per module. Bijvoorbeeld:

- een tijdlijn met perioden en gebeurtenissen;
- een schematische kaart: eenvoudige contouren, labels, geen nagetekende kaart met auteursrecht;
- een oorzaak-gevolgschema;
- een standenpiramide of een handelsdriehoek.

Tekst in de SVG in het Nederlands, leesbaar op 600 px breed.

## Oefeningen (ca. 30–35)

| Type | Gebruik |
|---|---|
| `choice` | De basis. Afleiders zijn echte misvattingen, met `feedback`: anachronisme, presentisme, "primair = betrouwbaar", monocausaal denken, verwisselde perioden |
| `order` | Chronologie of de stappen van oorzaak naar gevolg. 1–2 per theorieles, 4–6 items. Zeg in de vraag wat de volgorde bepaalt |
| `numeric` | Alleen als er echt iets te berekenen of af te lezen is: een tijdsduur, een getal uit een tabel of bron. Geen "in welk jaar was …" als hoofdvorm |
| `text` | Open vragen: uitleggen, vergelijken, argumenteren. Hooguit een kwart van de oefeningen, altijd met een modelantwoord in `solution` |

- Gebruik `context` voor een kort bronfragment waarover de vraag gaat.
- Mode: guided in les 02–03, daarna meer independent, en 2–3 challenge.

## Toets (15 vragen)

- Alleen `choice` en `order` (minstens 2 `order`), eventueel `numeric`.
- Minstens een derde van de vragen gaat over redeneren met een bronfragment in `context`, niet alleen
  over feitenkennis.

## Schrijfwijze en perspectief

- Jaartallen: "in 1574", "ca. 3200 v.Chr.", "de 15e eeuw", "de jaren 1560".
- Schrijf "v.Chr." en "n.Chr." alleen waar het nodig is.
- Wees bewust van eurocentrisme: laat waar het past zien wat er elders gebeurde en hoe anderen het
  zagen. Leg verbanden met Nederland als die er echt zijn, niet geforceerd.
- Gevoelige onderwerpen (geweld, slavernij, kolonialisme, vervolging): feitelijk en sober, met de
  perspectieven van de betrokkenen. Gebruik gangbare, zorgvuldige termen, zoals "tot slaaf gemaakten".
- Geen moraliserende conclusies. Laat de lezer redeneren.
- Kopjes `history` in kaders gebruik je voor korte bronkaders: `:::history Leiden, 1574`.

## Bronnen voor feiten

Hooguit ~8 gerichte webzoekopdrachten. Goede vertrekpunten:

- canonvannederland.nl;
- de collectie- en uitlegpagina's van musea en archieven (Rijksmuseum, Nationaal Archief, British
  Museum, Metropolitan Museum);
- Wikipedia (NL/EN) als overzicht. Controleer kernfeiten daarbij altijd bij een tweede bron.

## Extra controle

Een klein Python-script in je scratch-map dat:

- de jaartallen in elke `order`-vraag naast elkaar zet en bevestigt dat de volgorde klopt;
- bij elke `numeric`-vraag het antwoord herrekent;
- nagaat dat elk `choice`-antwoord voorkomt in de bijbehorende `choices`.

## Toon (voorbeeld)

> Op 3 oktober 1574 trokken watergeuzen over ondergelopen land Leiden binnen. Dat weten we niet
> omdat iemand het later zo heeft opgeschreven, maar omdat er brieven, rekeningen en verslagen uit
> die weken bewaard zijn. Wie die bronnen naast elkaar legt, ziet al snel dat ze niet hetzelfde
> vertellen. Dat is geen probleem, maar het begin van het eigenlijke werk: uitzoeken wie wat
> schreef, voor wie, en met welk doel.
