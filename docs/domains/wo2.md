# Domeinaanvulling: De Tweede Wereldoorlog (toepassing, groep Persoonlijk)

Lees eerst `docs/domains/toepassingen.md`; deze aanvulling gaat daar vóór. Deze cursus wijkt op een paar
punten af van de andere toepassingen: het is een geschiedeniscursus, met bronnen als leidraad.

## Doel

Een verdieping op Geschiedenis module 20 (*De Tweede Wereldoorlog en de Holocaust*). De lezer kent het
verloop en de oorzaken van de oorlog in Europa en Azië, begrijpt de bezetting van Nederland en
Nederlands-Indië en de keuzes die mensen hadden, weet hoe de Holocaust verliep en hoe samenlevingen
daarna met schuld, recht en herinnering omgingen, en kan bronnen uit en over de oorlog kritisch lezen.

## Verhouding tot Geschiedenis module 20

Lees van `content/domains/geschiedenis/modules/20-de-tweede-wereldoorlog-en-de-holocaust/` alleen
`module.json` (niet de lessen). Die module geeft het overzicht; deze cursus gaat dieper. Herhaal haar
openingsbron niet (het meisje in de wagon, Settela) en kies andere bronnen. Schrijf geen alinea's of vragen over.
Gebeurtenissen en personen die daar al bestaan, krijgen hier **dezelfde id met dezelfde gegevens**: neem ze
over uit `content/domains/geschiedenis/history/timeline.json` en `people.json` in je `additions.json`.
Zoek altijd eerst: `grep -l '"id": "<id>"' content/domains/*/history/*.json`.

## Moduleplan (staat al in `content/domains/wo2/modules/*/module.json`)

1. **Op weg naar oorlog (1919–1939)** — Versailles en de revisiepolitiek, de crisis van de jaren dertig,
   de machtsovername en de nazistaat (Gleichschaltung, herbewapening, Lebensraum), Italië, het Japanse
   expansionisme (Mantsjoerije 1931, China 1937), appeasement en München (1938), het
   Molotov-Ribbentroppact, de inval in Polen. Historiografie: A.J.P. Taylor tegenover de intentionalisten.
2. **Een wereldoorlog (1939–1945)** — de Duitse veldtochten van 1939–1940 en de val van Frankrijk, de
   Slag om Engeland, Barbarossa en de vernietigingsoorlog in het oosten, Pearl Harbor, Midway en de
   oorlog in de Pacific, Stalingrad en Koersk, de oorlogseconomie (productiecijfers, Lend-Lease; Overy's
   *Why the Allies Won*), D-Day, de bombardementsoorlog, het einde in Europa en de atoombommen.
   Een eigen kaartschets of tijdlijn met de keerpunten hoort hier.
3. **Nederland en Indië in oorlog** — de meidagen en het bombardement op Rotterdam, het Reichskommissariat
   (Seyss-Inquart), de regering in Londen, aanpassing, collaboratie (NSB, Waffen-SS) en verzet
   (Februaristaking, illegale pers, onderduik, de LO en KP), de Jodenvervolging in Nederland en het hoge
   deportatiepercentage (verklaringen in het debat), de Japanse bezetting van Nederlands-Indië (interneringskampen,
   romusha, de Birma-spoorweg), de Hongerwinter en de bevrijding. Practicum: bronnen uit het NIOD of
   Delpher (illegale krant tegenover gelijkgeschakelde krant).
4. **Holocaust, berechting en herinnering** — van uitsluiting naar genocide (Einsatzgruppen, Wannsee,
   de vernietigingskampen, Auschwitz), daders, omstanders en slachtoffers (Hilbergs driedeling), de
   bevrijding van de kampen, Neurenberg en Tokio, de bijzondere rechtspleging in Nederland, de
   terugkeer en de kille ontvangst van overlevenden, en de herinneringscultuur (4 en 5 mei, het Achterhuis,
   de Hollandsche Schouwburg en het Nationaal Holocaust Namenmonument, Indië-herdenking op 15 augustus).

## Afwijkingen van `toepassingen.md`

- **Openingsobject:** een historische bron met maker, datum en vindplaats (een document, foto, affiche,
  dagboekfragment, krant uit Delpher, kaart). Beschrijf het in woorden of maak een eigen schematische SVG.
- **Lessen:** 5 lessen zoals in `toepassingen.md`, met als les 04 (`practice`) een **bronnenpracticum**
  in plaats van een casus. Samen 20.000–28.000 tekens.
- **Tijdlijn en personen: wel doen.** Per module 8–12 gebeurtenissen en 5–8 personen, aangeleverd in
  `additions.json` (met de id's uit Geschiedenis waar ze al bestaan).
- **Afbeeldingen:** eigen SVG's (kaartschetsen, tijdlijnen, schema's). Externe foto's alleen als het
  publiek domein zeker is (bijv. werken van de Amerikaanse overheid), met maker en licentie in het
  bijschrift en in `credits.json`.

## Toon en zorgvuldigheid

Ingetogen en precies. Cijfers (slachtoffers, deportaties, Hongerwinter) altijd met bron en, waar
historici verschillen, met marge. Daders en slachtoffers bij naam waar dat informatief is, nooit
sensationeel. Geen moreel oordeel in de plaats van uitleg; wel ruimte voor de vragen die historici zelf
stellen ("wat wisten mensen", "waarom was het deportatiepercentage in Nederland zo hoog").

## Bronnen

- NIOD (niod.nl) en het Verzetsmuseum; Nationaal Comité 4 en 5 mei; Joods Cultureel Kwartier; Anne Frank
  Huis; Herinneringscentrum Kamp Westerbork; Delpher (kranten); United States Holocaust Memorial Museum
  (encyclopedia.ushmm.org); Yad Vashem; Imperial War Museums.
- Historici: Loe de Jong; Hans Blom; Richard Overy; Ian Kershaw; Raul Hilberg; Christopher Browning;
  Bart van der Boom; Antony Beevor (voor verloop, met voorzichtigheid).

## Topics

`causes-of-war`, `interwar`, `military-history`, `war-economy`, `occupation`, `collaboration-resistance`,
`dutch-east-indies`, `holocaust`, `justice`, `memory`, `sources`.
