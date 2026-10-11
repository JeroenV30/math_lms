# Van losse tellingen naar overzicht

:::history Londen, 1662
Elke week laten de Londense parochies tellen hoeveel mensen er zijn gedoopt en begraven. Bij elke dode wordt een vermoedelijke doodsoorzaak genoteerd: "koorts", "tering", "ouderdom", "pest". De lijsten worden gedrukt en verkocht als de *Bills of Mortality*, de sterftelijsten. Kooplieden lezen ze om te zien of er pest in de stad is: dan is het tijd om je zaken buiten Londen te regelen.

De Londense koopman John Graunt doet iets wat niemand vóór hem systematisch had gedaan. Hij verzamelt de lijsten van tientallen jaren, zet de getallen in tabellen en stelt er vragen aan. Worden er meer jongens dan meisjes geboren? Groeit de stad? In welke jaren was de sterfte uitzonderlijk hoog? Hoeveel kinderen halen hun zesde verjaardag? In 1662 publiceert hij zijn bevindingen in een dun boek: *Natural and Political Observations Made upon the Bills of Mortality*.
:::

Graunt had geen computer, geen spreadsheet en geen statistische theorie. Hij had stapels lijsten met losse getallen. Zijn prestatie was niet een moeilijke berekening, maar het **ordenen**: de juiste getallen naast elkaar zetten, optellen, vergelijken en samenvatten. Dat is precies wat je in deze module leert.

:::question Denk eerst zelf na
Stel dat je de wekelijkse begrafenislijsten van twintig jaar Londen voor je hebt liggen: ruim duizend velletjes, elk met een paar dozijn getallen.

- Je wilt weten of de pest in sommige jaren veel erger was dan in andere. Welke getallen zou je bij elkaar optellen, en hoe zou je ze naast elkaar zetten?
- Een vriend zegt: "Ik tel gewoon alle begrafenissen van twintig jaar op; dan weet ik alles." Welke informatie raakt hij kwijt?
- In één week zijn er opvallend veel doden. Is dat een epidemie, of zou er iets anders aan de hand kunnen zijn?

Neem even de tijd voor je verder leest.
:::

Een totaal van twintig jaar is één getal. Het zegt iets over de omvang van de sterfte, maar niets over het verloop. Je ziet er niet in dat er rustige jaren waren en rampjaren. Om dat te zien, moet je de gegevens **per jaar** groeperen: een tabel met een rij per jaar, of een lijn die per jaar omhoog en omlaag gaat. En om te zien of de pest de oorzaak was, moet je de doodsoorzaken uit elkaar houden: een kolom voor pest, een kolom voor de rest.

De derde vraag is de lastigste. Een uitschieter kan een echte ramp zijn, maar ook een telfout, een week waarin twee weken zijn samengevoegd, of een verandering in de manier van registreren. Graunt besteedde in zijn boek veel aandacht aan de vraag hoe betrouwbaar de lijsten eigenlijk waren. De mensen die de doodsoorzaak vaststelden, waren geen artsen; wie aan een schandelijke ziekte overleed, kreeg soms een nettere oorzaak op de lijst. Wie met gegevens werkt, vraagt zich dus altijd af: **hoe zijn deze getallen tot stand gekomen?**

## Waarom bestaat deze wiskunde?

Zolang mensen samenleven in groepen die te groot zijn om te overzien, willen bestuurders weten **hoeveel**: hoeveel inwoners, hoeveel graan, hoeveel belastingplichtigen, hoeveel soldaten. Daaruit groeide een eenvoudige maar krachtige wiskunde van tellen, ordenen en samenvatten.

- **Tellen en ordenen.** Een losse opsomming van waarnemingen is onleesbaar. Een **frequentietabel** zegt in één oogopslag hoe vaak elke waarde voorkomt. Turven is de oudste techniek om zo'n tabel te vullen.
- **Zichtbaar maken.** Een tabel is precies, maar een patroon zie je vaak pas in een **diagram**: een staaf die boven de rest uitsteekt, een lijn die na jaren van stilstand begint te stijgen. Staaf-, lijn- en cirkeldiagrammen bestaan pas sinds ongeveer 1800; ze zijn een uitvinding, geen natuurverschijnsel.
- **Samenvatten.** Soms wil je een hele verzameling in één getal vangen: het **gemiddelde**, de **mediaan** of de **modus**. Elk van die getallen beantwoordt een iets andere vraag. Wie de verkeerde kiest, vertelt een scheef verhaal.
- **Kritisch lezen.** Grafieken en gemiddelden worden ook gebruikt om te overtuigen. Een as die niet bij nul begint of een pictogram dat in twee richtingen groeit, kan een klein verschil groot laten lijken. Wie weet hoe een diagram werkt, ziet zulke trucs.

Deze module is de eerste brug naar de statistiek. Je rekent hier met kleine datasets die je met de hand kunt overzien. In module 24 (beschrijvende statistiek) komen kwartielen, boxplots en de standaardafwijking erbij, in module 35 (data-analyse) grote datasets en het opsporen van misleiding in de praktijk. Wat je hier leert, is daarvoor het fundament.

## Wat je in deze module leert

1. **Tabellen.** Wat een waarneming en een variabele zijn, turven, frequentietabellen, relatieve en cumulatieve frequenties, en het indelen in klassen.
2. **Diagrammen.** Staaf-, beeld-, lijn- en cirkeldiagrammen lezen en maken, grafieken aflezen, en herkennen wanneer een diagram misleidt.
3. **Het gemiddelde.** Het gemiddelde als eerlijke verdeling, rekenen met frequenties, en het verband *totaal = gemiddelde × aantal*.
4. **Mediaan, modus en spreidingsbreedte.** Het midden, de meest voorkomende waarde en de breedte van de gegevens, en wanneer je welke maat kiest.
5. **Historisch intermezzo.** Volkstellingen van Mesopotamië tot het Domesday Book, Graunts sterftelijsten, Playfairs eerste diagrammen, Florence Nightingale en Adolphe Quetelets "gemiddelde mens".
6. **Praktijk en uitdaging.** Een conclusie onderbouwen met de gegevens die je echt hebt.

:::tip Over de getallen in deze module
De meeste datasets in deze module (bezoekers van een bibliotheek, wachttijden, reistijden) zijn verzonnen lesvoorbeelden, zo gekozen dat je ze met de hand kunt narekenen. Historische getallen, zoals die van Graunt, worden steeds met hun bron genoemd.
:::

{{ goals }}

{{ glossary }}

## Een eerste blik

Een bibliotheek telt een week lang hoeveel bezoekers er per dag binnenkomen. Ze had ook elke binnenkomst afzonderlijk kunnen noteren, met tijdstip en al: een lijst van honderden regels. Voor de vraag "op welke dag hebben we extra personeel nodig?" is dat te veel detail. Een tabel per dag is genoeg. Voor de vraag "op welk uur van de dag is het het drukst?" is diezelfde dagtabel juist te grof. **Welke samenvatting goed is, hangt af van de vraag.** Dat idee komt in elke les terug.

{{ exercises: 12-001, 12-002 }}
