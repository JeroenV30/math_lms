# Onderzoeksvraag, dataset en datakwaliteit

Open het CSV-bestand in een spreadsheetprogramma. De scheidingstekens zijn
komma's en de decimale tekens punten. Kies bij import zo nodig die instellingen;
anders kunnen getallen in tekst veranderen. Bewaar de ruwe versie en werk op een kopie.

## Codeboek

| Kolom | Betekenis | Eenheid of categorieën |
|---|---|---|
| id | lokaal volgnummer, geen biologisch kenmerk | 1–120 |
| soort | pinguïnsoort | Adelie, Chinstrap, Gentoo |
| eiland | meetlocatie | Biscoe, Dream, Torgersen |
| snavellengte_mm | lengte van de snavel | mm |
| snaveldiepte_mm | diepte van de snavel | mm |
| vleugellengte_mm | lengte van de flipper | mm |
| lichaamsgewicht_g | lichaamsmassa | g |
| geslacht | geregistreerd geslacht | man, vrouw, NA |
| jaar | meetjaar | 2009 |

NA betekent ontbrekend. Het is geen nul en geen aparte waarde die je kunt
middelen. De id is een lokaal toegevoegd volgnummer; zij bewijst niet dat
er geen herhaalde bemonstering van hetzelfde dier mogelijk is.

{{ exercises: 42-001, 42-002, 42-003, 42-004, 42-005 }}

## Een selectie per analyse

Er is één ontbrekend gewicht en er zijn drie ontbrekende geslachtswaarden.
Voor het gemiddelde gewicht kun je 119 rijen gebruiken. Voor een vergelijking
naar geslacht gebruik je rijen met een geldig gewicht én geslacht. Laat niet
automatisch alle onvolledige rijen uit alle analyses weg.

{{ exercise: 42-006 }}

Controleer unieke id's, categorieën, eenheden, minimum en maximum. Kijk
vervolgens per soort. Soorten hebben verschillende lichaamsbouw; een gemiddelde
van alles samen kan een ecologisch mengsel beschrijven in plaats van een
typische pinguïn. Een extreme waarde vraagt om controle, niet om automatisch verwijderen.

## Vraag en populatie vastleggen

De beschrijvende populatie is hier de verzameling gemeten dieren in het
bestand. Voor inferentie kun je een model voor vergelijkbare bemonsterde
Adélie-dieren aannemen, maar onderbouw dan onafhankelijkheid en selectie.
Je kunt uit dit bestand niet zonder meer naar alle eilanden, jaren of soorten generaliseren.

Onze Welch-toets is een didactische, vooraf benoemde procedure in dit
hoofdstuk. Zij is geen geregistreerde oorspronkelijke veldhypothese.
Maak bij je eigen rapport duidelijk wat je vóór het bekijken van de data
hebt besloten en wat je pas daarna bent gaan verkennen.

{{ exercises: 42-007, 42-008 }}
