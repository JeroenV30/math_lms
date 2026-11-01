# Aanvulling: toepassingen (Economie, Bedrijven, WBSO, Beleggen)

Hoort bij `docs/CONTENT_AGENT_BRIEF.md` en gaat daar vóór. Daarnaast heeft elke toepassing een eigen
korte aanvulling (`docs/domains/<id>.md`) met het moduleplan en de bronnen; die gaat weer vóór dit bestand.

Toepassingen zijn korte, praktische cursussen. Ze staan in de leeromgeving naast de kennisdomeinen
(sectie `toepassingen` in `content/domains.json`), met dezelfde techniek: lessen, oefeningen, toets, herhaling.
Wat anders is: korter, gericht op begrijpen én toepassen in de praktijk, en geen geschiedenis als leidraad.

## Omvang (vervangt de omvang uit de brief)

- **4–5 lessen** per module, samen **15.000–25.000 tekens** Markdown. Niet meer.
- **8–12 oefeningen**, bij minstens de helft een `feedback`-regel.
- **10 toetsvragen** in `quiz.json`, oplopend in moeilijkheid, alle leerdoelen gedekt, geen `text`-vragen.
- `estimated_minutes`: realistisch, meestal 60–120.

## Lesopbouw

| Les | `kind` | Inhoud |
|---|---|---|
| 01 introductie | `intro` | Een echt openingsobject (zie onder), `:::question`, de kernvraag, waarom dit in de praktijk telt, `{{ goals }}`, `{{ glossary }}` |
| 02–03 (of 02–04) | `theory` | De stof in samenhang, met een `:::example` en oefeningen na elk deel |
| 04 casus | `practice` | Eén uitgewerkte praktijkcasus (fictief maar realistisch bedrijf of persoon), zelfstandig oefenen, één `:::challenge` |
| 05 samenvatting | `summary` | Kern in lopende tekst, wat je nu kunt, kopje **Bronnen** met URL's, `{{ quiz }}` |

Een les van soort `history` is niet nodig. Wil je kort iets over het ontstaan van een regeling vertellen
(de WBSO bestaat sinds 1994), doe dat dan in de introductie of een theorieles.

## Openingsobject

Geen historische bron, maar een echt, verwijsbaar praktijkdocument of -gegeven, met afzender, datum en vindplaats:
een pagina of formulier van RVO of de Belastingdienst, een wetsartikel, een CBS- of CPB-cijfer, een KvK-uittreksel
(fictief bedrijf, echt model), een loonstrook (model), een jaarverslag of een AFM-waarschuwing. Beschrijf het in
woorden of maak een eigen schematische SVG. Gebruik nooit gegevens van een echt, herkenbaar bedrijf of persoon
zonder dat die openbaar zijn.

## Feiten, bedragen en peildatum (belangrijk)

- Regels, tarieven, schijven en grensbedragen veranderen jaarlijks. Schrijf ze altijd met peiljaar:
  "In 2026 is het tarief van de eerste schijf … (stand 2026)". Controleer elk bedrag bij de officiële bron
  (zie de aanvulling per toepassing); is een bedrag voor 2026 niet te vinden, gebruik dan het laatst bekende
  jaar en noem dat jaar.
- Leg eerst het **mechanisme** uit (waarom bestaat de regel, hoe werkt de berekening), daarna de actuele getallen.
  Zo blijft de les bruikbaar als de getallen veranderen.
- **Toetsvragen en oefeningen geven de benodigde tarieven en grensbedragen in de vraag zelf**
  ("Stel dat het percentage van de eerste schijf 36% is …"). Zo verouderen ze niet en is de vraag los leesbaar.
- Geen fiscaal of financieel advies in de vorm "je moet …"; wel uitleg, afwegingen en rekenvoorbeelden.
  Bij Beleggen: geen aanbevelingen van concrete producten of aanbieders.

## Rekenen

Rekenoefeningen met `numeric` of `decimal` (bedragen in hele euro's of op twee decimalen; zeg in de vraag
welke afronding je verwacht). Geld schrijf je als "€ 12.500" in lopende tekst, nooit met `$`.
Formules in KaTeX alleen waar een formule echt helpt (samengestelde rente, het WBSO-voordeel).

## Diagram

Minstens één eigen SVG per module: een stroomschema (aanvraagproces), een structuurschema (holding-bv,
werkmaatschappij), een vraag-en-aanbodgrafiek, een opbouw van loonkosten of een groeicurve.
Opslaan als `public/images/<domein>/mNN-*.svg`.

## Tijdlijn en personen

Niet nodig. Laat `timeline` en `people` in module.json leeg, behalve bij Economie (zie daar).

## Toon

Hetzelfde als elders: volwassen lezer, je-vorm, rustig en precies, een goed leerboek, geen folder of
marketingtekst. Voorbeeldalinea:

> Een subsidie verandert de prijs van een activiteit, niet de activiteit zelf. Als de overheid een kwart van de
> loonkosten van onderzoek vergoedt, wordt een uur onderzoek voor het bedrijf goedkoper, en dus doet het bedrijf
> naar verwachting meer onderzoek. De vraag die beleidsmakers bezighoudt, is hoeveel méér: een subsidie voor
> onderzoek dat toch al gedaan zou worden, kost geld zonder iets te veranderen.
