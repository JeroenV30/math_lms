# Waarden en frequenties

Voordat je iets kunt tellen, moet je weten **wat** je telt. Dat klinkt vanzelfsprekend, maar veel fouten met gegevens beginnen precies hier: twee mensen tellen "hetzelfde" en krijgen verschillende getallen, omdat ze iets anders onder één waarneming verstaan.

## 1. Waarnemingen en variabelen

:::definition Waarneming en variabele
Een **waarneming** is één geregistreerd geval: één bezoeker, één dag, één gemeten plant, één ingevulde enquête. Een **variabele** is een eigenschap die je bij elke waarneming vastlegt: het vervoermiddel van de bezoeker, het aantal bezoekers op die dag, de lengte van de plant.
:::

Een dataset is dus eigenlijk een tabel: elke **rij** is een waarneming, elke **kolom** een variabele. Bij Graunt was één rij één week, en de kolommen waren het aantal doopsels, het aantal begrafenissen en de aantallen per doodsoorzaak.

Variabelen zijn er in twee hoofdsoorten, en het verschil bepaalt welke berekeningen zinvol zijn.

- **Categorische variabelen** delen de waarnemingen in groepen in: vervoermiddel (fiets, auto, ov, lopend), bloedgroep, provincie, doodsoorzaak. Je kunt tellen hoeveel waarnemingen in elke groep vallen, maar je kunt de categorieën niet optellen of middelen.
- **Numerieke variabelen** zijn echte hoeveelheden: reistijd in minuten, aantal kinderen, lengte in centimeters. Daarmee kun je rekenen. Numerieke variabelen zijn **discreet** als ze alleen losse waarden aannemen (aantal kinderen: 0, 1, 2, …) en **continu** als in principe elke tussenwaarde mogelijk is (lengte, tijd, temperatuur).

:::warning Getallen die geen hoeveelheden zijn
Een buslijnnummer, een postcode of een rugnummer is een getal, maar geen hoeveelheid. Het "gemiddelde" van lijn 4 en lijn 8 is niet lijn 6. Zulke getallen zijn eigenlijk namen, dus categorieën. Vraag je bij elk getal in een dataset af: heeft het zin om hiermee te rekenen?
:::

:::example Uitgewerkt voorbeeld: welke soort variabele?
Een sportschool legt per lid vast: lidnummer, leeftijd in jaren, abonnementsvorm (dal, standaard, premium), aantal bezoeken in maart, en gewicht in kilogram.

- *Lidnummer*: een getal, maar een naam. Categorisch (en elke waarde komt maar één keer voor).
- *Leeftijd in jaren*: numeriek. Leeftijd zelf is continu (je wordt elke dag ouder), maar zoals hij hier is genoteerd, in hele jaren, gedraagt hij zich discreet.
- *Abonnementsvorm*: categorisch. Er zit wel een volgorde in (dal < standaard < premium), maar "premium min dal" heeft geen betekenis.
- *Aantal bezoeken*: numeriek, discreet.
- *Gewicht*: numeriek, continu.
:::

## 2. Turven

Hoe tel je hoe vaak elke categorie voorkomt, als de waarnemingen een voor een binnenkomen? Je kunt na elke waarneming een getal doorstrepen en het volgende opschrijven, maar dat is foutgevoelig. De oude oplossing is **turven**: voor elke waarneming zet je een streepje, en elk vijfde streepje gaat schuin door de vier vorige heen. Zo ontstaan bosjes van vijf, die je achteraf snel telt: drie volle bosjes en twee losse streepjes is $3 \times 5 + 2 = 17$.

Turven is een van de oudste rekentechnieken die we kennen (in module 1 zag je kerfstokken van tienduizenden jaren oud), maar het is nog altijd handig: bij een verkeerstelling, bij het tellen van stemmen, of bij een enquête op papier.

{{ widget: tally value=23 }}

Zet de teller eens op 23 en daarna op 25. Bij 25 is het laatste bosje vol; het volgende streepje begint een nieuw bosje.

:::example Uitgewerkt voorbeeld: van turftabel naar frequentietabel
Twintig deelnemers aan een cursus noemen hun voornaamste vervoermiddel naar de les. De antwoorden komen in willekeurige volgorde binnen. Je zet bij elk antwoord een streepje achter de juiste categorie:

![Turftabel van vervoermiddelen](/images/diagrams/m12-turftabel.svg "Turftabel: fiets 8, auto 5, openbaar vervoer 4, lopend 3. Elk schuin streepje sluit een bosje van vijf af.")

Daarna tel je per regel: fiets is één vol bosje plus drie, dus 8. Auto is precies één vol bosje: 5. Openbaar vervoer 4, lopend 3. Controle: $8 + 5 + 4 + 3 = 20$, evenveel als het aantal deelnemers. Die controle is belangrijk: als de som niet klopt, is er een antwoord vergeten of dubbel geteld.
:::

{{ exercises: 12-031, 12-003 }}

## 3. De frequentietabel

:::definition Frequentie en relatieve frequentie
De **frequentie** van een waarde of categorie is het aantal waarnemingen met die waarde. De **relatieve frequentie** is de frequentie gedeeld door het totale aantal waarnemingen:
$$
\text{relatieve frequentie} = \frac{f}{n}.
$$
Vaak schrijf je haar als percentage: vermenigvuldig dan met 100.
:::

Voor de twintig deelnemers ziet de frequentietabel er zo uit:

| Vervoermiddel | Frequentie | Relatieve frequentie |
|---|---|---|
| Fiets | 8 | $8/20 = 40\%$ |
| Auto | 5 | $5/20 = 25\%$ |
| Openbaar vervoer | 4 | $4/20 = 20\%$ |
| Lopend | 3 | $3/20 = 15\%$ |
| **Totaal** | **20** | **100%** |

Waarom zou je relatieve frequenties willen, als je de echte aantallen al hebt? Omdat je dan groepen van verschillende grootte kunt vergelijken. Stel dat in een andere cursus 18 van de 45 deelnemers fietsen. Dat zijn er meer dan 8, maar het **aandeel** is $18/45 = 40\%$: precies hetzelfde. Dit is dezelfde gedachte als in module 9 (procenten): een percentage is een verhouding met een vaste noemer van honderd.

{{ widget: percent-grid value=40 }}

Het honderdveld laat zien wat 40% betekent: 40 van elke 100. Bij twintig deelnemers komt elk vakje overeen met een vijfde deelnemer; acht deelnemers vullen dus veertig vakjes.

:::warning Tellen de percentages op tot 100%?
In een tabel waarin elke waarneming in precies één categorie valt, is het totaal van de relatieve frequenties 100% (of door afronding net iets ernaast, zoals 99% of 101%). Bij een vraag waarop meerdere antwoorden mogen ("Welke vervoermiddelen gebruik je wel eens?"), kan het totaal ver boven 100% liggen: iemand die fietst én met de bus gaat, telt twee keer mee. Kijk dus altijd wat er precies geteld is voordat je percentages optelt.
:::

{{ exercises: 12-004, 12-033 }}

## 4. Numerieke waarden en klassen

Bij een numerieke variabele met weinig verschillende waarden maak je een frequentietabel op dezelfde manier. Zes reistijden van 5, 5, 10, 10, 10 en 15 minuten worden:

| Reistijd (min) | 5 | 10 | 15 |
|---|---|---|---|
| Frequentie | 2 | 3 | 1 |

Let op het verschil tussen een **waarde** en een **frequentie**. De waarde 10 komt 3 keer voor; de frequentie van 10 is dus 3. Het is een veelgemaakte fout om die twee rijen door elkaar te halen, vooral als beide uit kleine getallen bestaan.

{{ exercise: 12-005 }}

Bij veel verschillende waarden (leeftijden, inkomens, lengtes) wordt zo'n tabel onoverzichtelijk lang. Dan maak je **klassen**: aaneengesloten intervallen, en je telt hoeveel waarnemingen in elk interval vallen.

:::example Uitgewerkt voorbeeld: leeftijden in klassen
De leeftijden van twintig cursisten (in hele jaren) zijn:

19, 23, 25, 27, 28, 29, 31, 32, 33, 34, 35, 36, 38, 39, 41, 44, 46, 48, 52, 57.

Je deelt ze in klassen van tien jaar in:

| Leeftijd | 10–19 | 20–29 | 30–39 | 40–49 | 50–59 |
|---|---|---|---|---|---|
| Frequentie | 1 | 5 | 8 | 4 | 2 |

Omdat leeftijd hier in hele jaren is genoteerd, betekent "20–29" precies: 20 tot en met 29 jaar. Iemand van 29 jaar en elf maanden heet nog steeds 29, dus valt ook in deze klasse.

![Staafdiagram van de leeftijdsklassen](/images/diagrams/m12-klassen-leeftijden.svg "De leeftijden van twintig cursisten, ingedeeld in klassen van tien jaar.")
:::

Bij het kiezen van klassen gelden drie regels:

1. **Geen overlap.** Elke waarneming hoort in precies één klasse. Met klassen "0–10" en "10–20" weet je niet waar 10 thuishoort.
2. **Geen gaten.** Elke mogelijke waarde moet ergens passen. Bij continue gegevens zoals reistijd schrijf je daarom liever "0 tot 10", "10 tot 20", met de afspraak dat de ondergrens erbij hoort en de bovengrens niet. Precies 10 minuten valt dan in de klasse "10 tot 20".
3. **Bij voorkeur even breed.** Dan kun je de hoogtes van de staven eerlijk vergelijken.

:::warning Verloren detail
Na het indelen in klassen weet je niet meer of een waarneming in de klasse 30–39 eigenlijk 31 of 39 was. Je ruilt detail in voor overzicht. Een gemiddelde dat je achteraf uit klassen berekent (door voor elke klasse het midden te nemen), is daarom een **benadering**.
:::

{{ exercise: 12-006 }}

## 5. Cumulatieve frequentie

Soms is de vraag niet "hoeveel waarnemingen vallen in deze klasse?" maar "hoeveel waarnemingen liggen **onder** een bepaalde grens?". Hoeveel cursisten zijn jonger dan 30? Hoeveel reizigers zijn binnen een kwartier op hun bestemming? Daarvoor tel je de frequenties van links naar rechts op.

:::definition Cumulatieve frequentie
De **cumulatieve frequentie** bij een waarde of klasse is het aantal waarnemingen tot en met die waarde of klasse. De laatste cumulatieve frequentie is altijd het totale aantal waarnemingen.
:::

:::example Uitgewerkt voorbeeld: cumulatief tellen
Voor de leeftijden van de twintig cursisten:

| Leeftijd | 10–19 | 20–29 | 30–39 | 40–49 | 50–59 |
|---|---|---|---|---|---|
| Frequentie | 1 | 5 | 8 | 4 | 2 |
| Cumulatieve frequentie | 1 | 6 | 14 | 18 | 20 |

Elke cumulatieve frequentie is de vorige plus de nieuwe frequentie: $1$, $1 + 5 = 6$, $6 + 8 = 14$, enzovoort. Nu lees je direct af dat 14 cursisten jonger zijn dan 40, en dat $20 - 14 = 6$ cursisten 40 of ouder zijn. Als percentage: $14/20 = 70\%$ is jonger dan 40.
:::

Graunt gebruikte precies dit soort tabellen. Zijn beroemdste tabel, die je in het historisch intermezzo tegenkomt, gaf voor elke leeftijd aan hoeveel van honderd geborenen die leeftijd nog haalden: een cumulatieve tabel, maar dan van achteren af geteld.

{{ exercise: 12-032 }}
