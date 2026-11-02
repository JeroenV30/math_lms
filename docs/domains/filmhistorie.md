# Domeinaanvulling: Filmhistorie (toepassing, groep Persoonlijk)

Lees eerst `docs/domains/toepassingen.md`; deze aanvulling gaat daar vóór. Filmhistorie wijkt op een paar
punten af van de andere toepassingen: hier is de geschiedenis wél de leidraad.

## Doel

De lezer kent de grote lijnen van de filmgeschiedenis (wie, wat, wanneer en waarom zo) en kan een film
of scène zelf lezen met de basisbegrippen van filmtaal: shot en kader, camerabeweging, mise-en-scène,
montage, geluid. Elke module verbindt een periode met een stuk filmtaal: wie de geschiedenis volgt, leert
gaandeweg kijken.

## Moduleplan (staat al in `content/domains/filmhistorie/modules/*/module.json`)

1. **Bewegend beeld en de stomme film (1895–1927)** — voorlopers (Muybridge, Edison en de kinetoscoop),
   de Lumières (28 december 1895) en Méliès, het "cinema of attractions", Griffith en de vertelmontage,
   Koelesjov en Eisenstein (Sovjetmontage), het Duitse expressionisme (Caligari, Nosferatu, Metropolis),
   Chaplin en Keaton. Filmtaal: shot, kader en shotgrootte, montage, de tussentitel.
2. **Het klassieke Hollywood (1927–1960)** — de geluidsfilm (The Jazz Singer, 1927), het studiosysteem
   (de grote vijf), het sterrensysteem, genres (western, gangsterfilm, musical, film noir), de klassieke
   continuïteitsmontage (180-gradenregel, shot/tegenshot, eyeline match), de Hays Code (1934–1968),
   Citizen Kane (1941); daarbuiten het Italiaanse neorealisme en de Japanse film (Kurosawa, Ozu).
   Filmtaal: continuïteitsmontage, diepte en licht, geluid.
3. **Nieuwe golven en auteurs (1955–1980)** — Cahiers du cinéma en de auteurstheorie (Truffaut, Bazin;
   Sarris in de VS), de Nouvelle Vague (Les quatre cents coups, À bout de souffle, de jump cut), Bergman,
   Fellini, Antonioni, het einde van het studiosysteem (Paramount-zaak 1948, televisie), New Hollywood
   (Bonnie and Clyde, The Godfather, Taxi Driver) en de blockbuster (Jaws 1975, Star Wars 1977).
   Filmtaal: de stijl van een regisseur herkennen, breuken met de continuïteitsregels.
4. **Van video tot streaming (1980–nu)** — video en de huiskamer, onafhankelijke film en festivals
   (Sundance, Cannes, IFFR), digitale camera's en CGI (Toy Story 1995), Dogme 95, wereldcinema (Hongkong,
   Iran, Zuid-Korea; Parasite 2019), de Nederlandse film (Haanstra, Verhoeven, Oscars voor Nederlandse
   films, het Filmfonds), streaming en de vraag wat een film is. Filmtaal: digitale beeldvorming en lange takes.

## Afwijkingen van `toepassingen.md`

- **Openingsobject:** een concrete film of scène, met maker, jaar, land en waar je hem nu kunt zien
  (bijv. Eye Filmmuseum, het Internet Archive voor films in het publiek domein, de National Film Registry).
  Beschrijf het beeld nauwkeurig in woorden; een eigen schematische SVG (shotopbouw, plattegrond van een
  scène met camerastandpunten) is beter dan een still.
- **Lessen:** 5 lessen zoals in `toepassingen.md`, met als les 04 (`practice`) een **filmanalysepracticum**
  in plaats van een casus: één scène shot voor shot gelezen, met oefeningen. Samen 18.000–26.000 tekens.
- **Tijdlijn en personen: wel doen.** Elke module koppelt 6–10 gebeurtenissen en 4–8 personen (regisseurs,
  uitvinders, critici). Lever ze aan in `additions.json`. Zoek eerst of een persoon of gebeurtenis al
  in een ander domein bestaat (`grep -l '"id": "<id>"' content/domains/*/history/*.json`) en gebruik dan
  dezelfde id met dezelfde gegevens. Event-id's in de vorm `lumiere-eerste-vertoning-1895`.
- **Afbeeldingen:** stills alleen als ze zeker publiek domein zijn (in de VS vóór 1930 uitgebracht), met
  maker en licentie in het bijschrift en in `credits.json`. Liever eigen SVG's: shotgroottes, de
  180-gradenlijn, het Koelesjov-experiment, een tijdlijn van stromingen.
- **Feiten:** geen verzonnen citaten of anekdotes. De bekende legende dat het publiek bij *L'Arrivée d'un
  train* in paniek wegrende, behandel je als legende. Releasejaren en regisseurs controleren.

## Bronnen

- Bordwell & Thompson, *Film Art* en *Film History: An Introduction*; Eye Filmmuseum (eyefilm.nl);
  BFI (bfi.org.uk) en de *Sight and Sound*-peiling; Library of Congress (National Film Registry);
  Nederlands Filmfonds; Encyclopaedia Britannica voor jaartallen.

## Topics

`film-language`, `editing`, `silent-film`, `film-technology`, `studio-system`, `genre`, `continuity-editing`,
`sound-film`, `auteur-theory`, `new-wave`, `new-hollywood`, `digital-film`, `world-cinema`, `dutch-film`,
`streaming`.

## Toon

Als elders. Geen fanboytaal of lijstjes van "beste films"; wel precies kijken en uitleggen waarom een
vernieuwing werkte.
