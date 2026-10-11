# Onderzoeksvraag, dataset en datakwaliteit

Een analyse is zo goed als de kennis van de gegevens waarop ze rust. Voordat je ook maar één gemiddelde uitrekent, wil je drie dingen weten: waar de gegevens vandaan komen, wat elke kolom betekent en wat er mis kan zijn. In deze les leg je de basis voor de rest van het hoofdstuk.

## Herkomst: wie mat wat, waar en waarom?

De pinguïngegevens komen uit een veldonderzoek dat Kristen Gorman, Tony Williams en William Fraser in 2014 beschreven in het artikel *Ecological Sexual Dimorphism and Environmental Variability within a Community of Antarctic Penguins (Genus Pygoscelis)* in het tijdschrift *PLOS ONE* (deel 9, nummer 3). De auteurs onderzochten drie soorten, Adélie-, baard- en ezelspinguïns, op eilanden in de Palmer Archipelago bij Anvers Island: Dream, Torgersen en Biscoe. De metingen betreffen drie opeenvolgende australe zomers, 2007/08 tot en met 2009/10. Het artikel gaat over *seksuele dimorfie*: de manier waarop mannetjes en vrouwtjes van een soort in lichaamsbouw verschillen, en hoe dat samenhangt met de omgeving en het voedsel.

De cursusdataset is een bewerking van het R-pakket *palmerpenguins* (Horst, Hill & Gorman, 2020). Dat pakket bundelt 344 dieren uit de jaren 2007–2009 en is bedoeld als eigentijds alternatief voor klassieke onderwijsdatasets. Jij werkt met de 120 rijen uit 2009; de bewerking (vertaalde kolomnamen en geslachtslabels, een extra volgnummer) staat beschreven in `dataset.json`, naast de licentie en de citatie. Een bron noemen is hier geen beleefdheidsvorm: het is een onderdeel van de analyse. Zonder bron weet je niet welke populatie de gegevens beschrijven, welke selectie er al heeft plaatsgevonden en welke bewerkingen je er zelf overheen hebt gelegd.

### Wat betekent dat voor generaliseren?

De gegevens beschrijven dieren op drie eilanden in één archipel, in drie zomers, gemeten door één onderzoeksgroep. Daaruit volgt direct wat je met een resultaat wel en niet mag doen:

- Je mag iets zeggen over de **gemeten dieren**: "in dit bestand zijn de mannen gemiddeld 661 g zwaarder".
- Je mag onder expliciete aannames iets zeggen over **vergelijkbare dieren van dezelfde kolonies**, mits je onderbouwt dat de gemeten dieren daar redelijk voor staan (module 38: aselecte steekproef, onafhankelijkheid, geen systematische selectie).
- Je mag **niet** zonder meer iets zeggen over alle pinguïns, over andere jaren, andere eilanden of andere soorten. Een pinguïnpopulatie op de Zuidelijke Shetlandeilanden kan een ander voedselaanbod hebben en dus andere lichaamsgewichten.

Dit is geen formaliteit. Een p-waarde of een betrouwbaarheidsinterval rekent uitsluitend met de steekproeffout: het toeval dat ontstaat doordat je een deel van de populatie meet. De fout die ontstaat doordat het deel niet representatief is, zit niet in de formule en wordt door geen enkele toets gecorrigeerd. In les 4 komt dit terug als een van de typische redeneerfouten.

## Het codeboek

Open het CSV-bestand in een spreadsheetprogramma of lees het in met software. De scheidingstekens zijn komma's en de decimale tekens punten. Kies bij import zo nodig die instellingen; anders kunnen getallen als tekst worden gelezen. Bewaar het ruwe bestand ongewijzigd en werk op een kopie.

| Kolom | Betekenis | Eenheid of categorieën |
|---|---|---|
| id | lokaal volgnummer, geen biologisch kenmerk | 1–120 |
| soort | pinguïnsoort | Adelie, Chinstrap, Gentoo |
| eiland | meetlocatie | Biscoe, Dream, Torgersen |
| snavellengte_mm | lengte van de snavel | mm |
| snaveldiepte_mm | hoogte (diepte) van de snavel | mm |
| vleugellengte_mm | lengte van de flipper | mm |
| lichaamsgewicht_g | lichaamsmassa | g |
| geslacht | geregistreerd geslacht | man, vrouw, NA |
| jaar | meetjaar | 2009 |

Een codeboek legt vast wat een lezer anders moet raden. Let op vier details. De **waarnemingseenheid** is één dier, niet één nest of één eiland; een rij is dus een pinguïn. De **eenheden** staan in de kolomnaam, zodat een gewicht niet per ongeluk als kilogram wordt gelezen. De **categorieën** zijn gesloten: elke andere spelling is een fout. En **NA** betekent *niet beschikbaar*. NA is geen nul en ook geen aparte soort waarde waarmee je kunt rekenen. De id is een lokaal toegevoegd volgnummer; het bewijst niet dat een dier niet twee keer is gemeten.

{{ exercises: 42-001, 42-002, 42-003, 42-004, 42-005 }}

## Datakwaliteit: controleer vóór je rekent

Een controle van gegevens is geen eenmalige schoonmaakbeurt maar een vaste stap in elke analyse. Een korte checklist:

1. **Structuur.** Klopt het aantal rijen en kolommen met het codeboek? Zijn de id's uniek?
2. **Categorieën.** Komen er alleen toegestane waarden voor? ("Adelie" en "adelie" zijn voor een computer twee soorten.)
3. **Bereik en eenheden.** Liggen minimum en maximum van elke kolom binnen het biologisch denkbare? Een pinguïn van 3 g of 3 kg is een typefout.
4. **Ontbrekende waarden.** Hoeveel zijn het, in welke kolommen, en zitten ze in dezelfde rijen?
5. **Uitschieters.** Welke waarden wijken sterk af van de rest, en is daar een reden voor?
6. **Beslissingen.** Wat besluit je, en leg je dat vast?

Voor deze dataset geeft de controle het volgende beeld. Er zijn 120 rijen: 52 Adélie, 24 Chinstrap en 44 Gentoo. Het aantal ontbrekende waarden per kolom is klein, maar niet nul.

| Kolom | Ontbrekend (NA) |
|---|---|
| snavellengte_mm | 1 |
| snaveldiepte_mm | 1 |
| vleugellengte_mm | 1 |
| lichaamsgewicht_g | 1 |
| geslacht | 3 |

Die vijf cijfers vertellen niet het hele verhaal. Het ene ontbrekende gewicht, de ene ontbrekende snavellengte, -diepte en vleugellengte horen allemaal bij hetzelfde dier: een Gentoo met id 92, van wie alleen soort, eiland en jaar zijn vastgelegd. Twee andere Gentoo's (id 77 en 89) hebben alle metingen maar geen geregistreerd geslacht. In totaal hebben dus **drie rijen** minstens één ontbrekende waarde, maar niet in dezelfde kolommen. Dat is precies de reden waarom je ontbrekende waarden per kolom én per rij bekijkt.

:::example Ontbrekende waarden als nul
Stel dat je de ontbrekende massa in je spreadsheet als 0 laat staan en het gemiddelde gewicht van alle dieren neemt. De som van de 119 geldige gewichten is 501 025 g.

- Met de nul meegeteld deel je door 120: $501025/120\approx 4175{,}21$ g.
- Zonder het ontbrekende dier deel je door 119: $501025/119\approx 4210{,}29$ g.

Het verschil, ruim 35 g, lijkt klein, maar de fout is systematisch: elke ontbrekende waarde die je als nul telt trekt het gemiddelde omlaag, en bij meer ontbrekende waarden wordt het erger. Het ergste is dat spreadsheetfuncties dit soms zonder waarschuwing doen. Weet daarom altijd wat jouw software met een lege cel of een tekstcode als "NA" doet.
:::

{{ exercises: 42-021, 42-022 }}

### Selecteer per analyse, niet per bestand

Er is één ontbrekend gewicht en er zijn drie ontbrekende geslachtswaarden. Voor het gemiddelde gewicht van alle dieren kun je 119 rijen gebruiken. Voor een vergelijking tussen de geslachten heb je rijen nodig met een geldig gewicht én een geldig geslacht. Verwijder niet automatisch alle onvolledige rijen uit alle analyses: dat heet *listwise deletion* en het kost je gegevens zonder dat de analyse er beter van wordt. Per analyse leg je vast welke **analysepopulatie** je gebruikt, en je vermeldt in het rapport hoeveel rijen er afvielen en waarom.

{{ exercise: 42-006 }}

:::example De Gentoo-selectie voor een geslachtsvergelijking
Er zijn 44 Gentoo-pinguïns. Id 92 heeft geen gewicht en geen geslacht. Id 77 en 89 hebben een gewicht maar geen geslacht. Voor een gewichtsvergelijking tussen de geslachten bij Gentoo blijven $44-3=41$ dieren over: 21 mannen en 20 vrouwen. Voor het gemiddelde gewicht van alle Gentoo's mogen id 77 en 89 wél mee, want daar is het geslacht niet nodig: dat zijn 43 dieren.
:::

{{ exercise: 42-023 }}

### Uitschieters en soorten

Kijk na de basiscontrole per soort. De drie soorten verschillen sterk in lichaamsbouw; een gemiddelde van alles samen beschrijft dan een mengsel van drie populaties in plaats van een typische pinguïn. Het gemiddelde gewicht van alle 119 dieren is 4210,29 g, maar geen enkele soort heeft dat gemiddelde: Adélie komt uit op 3664,90 g, Chinstrap op 3725,00 g en Gentoo op 5140,70 g (zie les 3).

Een extreme waarde vraagt om **controle, niet om automatisch verwijderen**. Is het een typefout (een gewicht van 40 000 g)? Dan corrigeer je of verwijder je, met vermelding. Is het een echt, maar bijzonder dier? Dan houd je het erin en onderzoek je hoe gevoelig je uitkomst is voor dat ene punt. In les 3 gebruik je een objectieve regel (de $1{,}5\times\text{IQR}$-grenzen uit module 24) om te beslissen welke waarden je moet nakijken.

## Vraag en populatie vastleggen

De beschrijvende populatie is hier de verzameling gemeten dieren in het bestand. Voor inferentie kun je een model voor vergelijkbare bemonsterde Adélie-dieren aannemen, maar onderbouw dan onafhankelijkheid en selectie. Dat laatste is lastig: de dieren zijn bij nesten gemeten, de gegevens bevatten geen nestinformatie en jouw bestand bevat slechts één jaar. Gelijkende dieren uit hetzelfde nest of dezelfde kolonie zijn niet noodzakelijk onafhankelijk van elkaar.

De Welch-toets in dit hoofdstuk is een didactische, vooraf benoemde procedure. Zij is geen geregistreerde oorspronkelijke veldhypothese van de onderzoekers. Maak in elk eigen rapport duidelijk wat je vóór het bekijken van de gegevens hebt besloten en wat je pas daarna bent gaan verkennen.

:::warning Een vraag die je pas ná het kijken stelt
Een vraag die je formuleert nadat je de gegevens hebt gezien, is niet waardeloos, maar de bijbehorende p-waarde meet iets anders dan je denkt. Zie les 4 voor de wiskunde achter dit probleem.
:::

{{ exercise: 42-024 }}
