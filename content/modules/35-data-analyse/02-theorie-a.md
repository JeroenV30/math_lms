# Datasets, meetniveaus en datakwaliteit

Voordat je iets uitrekent, moet je weten wat je voor je hebt. Dat klinkt vanzelfsprekend, maar in de praktijk gaat hier het meeste mis. In deze les leer je een dataset systematisch te bekijken: wat zijn de waarnemingen, wat zijn de variabelen, wat betekenen de getallen, en welke fouten zitten er waarschijnlijk in?

## 1. Een dataset is een tabel

Een fietsenwinkel houdt bij welke klanten een onderhoudsbeurt hebben laten doen. Een stukje van die administratie:

| klantnr | woonplaats | leeftijd | tevredenheid (1–5) | bedrag (€) |
|---|---|---|---|---|
| 101 | Utrecht | 34 | 4 | 89,50 |
| 102 | Zeist | 61 | 5 | 145,00 |
| 103 | Utrecht | 27 | 2 | 59,95 |
| 104 | Houten | 45 | 4 | 89,50 |
| 105 | Utrecht | 52 | 3 | 210,00 |

Zo'n tabel volgt bijna altijd hetzelfde principe, dat data-analisten *tidy data* ("nette data") noemen:

:::definition Waarnemingen en variabelen
- Elke **rij** is één **waarneming** (observatie): hier één klantbezoek.
- Elke **kolom** is één **variabele**: een kenmerk dat voor elke waarneming een waarde heeft.
- Elke **cel** bevat precies één waarde.

Het aantal waarnemingen noteer je meestal als $n$. In de tabel hierboven is $n = 5$.
:::

Een kolom als `klantnr` is strikt genomen ook een variabele, maar een bijzondere: hij **identificeert** de waarneming en meet niets. Je gaat zo'n nummer nooit middelen. Het is wel onmisbaar om dubbele rijen op te sporen, zoals je verderop ziet.

Twee vragen moet je bij elke dataset als eerste beantwoorden:

1. **Wat is één waarneming?** Eén klant? Eén bezoek? Een klant die drie keer komt, levert in deze tabel drie rijen op. Als je "het gemiddelde bedrag per klant" wilt weten, moet je dus eerst per klant optellen. Wie dat vergeet, rekent het gemiddelde bedrag *per bezoek* uit.
2. **Hoe zijn de gegevens verzameld?** Zijn alle klanten opgenomen, of alleen wie een enquête invulde? Tevreden klanten vullen vaker enquêtes in. Een dataset is nooit "de werkelijkheid", maar een selectie ervan.

## 2. Meetniveaus: wat betekenen de getallen?

In de tabel staan getallen in vier kolommen, maar ze betekenen heel verschillende dingen. Het gemiddelde van de klantnummers (103) is onzin. Het gemiddelde van de bedragen is zinvol. En het gemiddelde van de tevredenheidsscores? Daarover verschillen statistici van mening. Om zulke vragen systematisch te beantwoorden, onderscheidt men sinds de psycholoog Stanley Smith Stevens (1946) vier **meetniveaus**.

![De vier meetniveaus](/images/diagrams/m35-meetniveaus.svg "De vier meetniveaus van Stevens. Elk niveau staat de bewerkingen van de lagere niveaus toe, plus iets extra.")

:::definition De vier meetniveaus
- **Nominaal**: de waarden zijn namen van categorieën, zonder volgorde. Voorbeelden: woonplaats, bloedgroep, merk. Zinvol: tellen, frequenties, modus.
- **Ordinaal**: categorieën mét een natuurlijke volgorde, maar de afstanden tussen de categorieën zijn niet gelijk of niet bekend. Voorbeelden: opleidingsniveau, een tevredenheidsschaal van 1 tot 5, de finishvolgorde in een wedstrijd. Extra zinvol: mediaan en kwartielen.
- **Interval**: getallen met gelijke afstanden, maar zonder echt nulpunt. Voorbeelden: temperatuur in °C, jaartallen. Extra zinvol: verschillen, gemiddelde, standaardafwijking.
- **Ratio**: gelijke afstanden én een echt nulpunt (0 betekent: niets). Voorbeelden: lengte, gewicht, inkomen, reistijd. Extra zinvol: verhoudingen, zoals "twee keer zo zwaar".
:::

Nominaal en ordinaal heten samen **categorisch** (of kwalitatief); interval en ratio heten samen **numeriek** (of kwantitatief).

Het verschil tussen interval en ratio lijkt spitsvondig, maar je merkt het zodra je een verhouding uitspreekt. Een kamer van 20 °C is niet "twee keer zo warm" als een kamer van 10 °C: in graden Fahrenheit zijn dat 68 °F en 50 °F, en die verhouding is 1,36. Het nulpunt van de Celsiusschaal (smeltend ijs) is een afspraak, geen "geen temperatuur". Bij lengte ligt dat anders: 2 meter is twee keer 1 meter, in welke eenheid je ook meet.

:::example Uitgewerkt voorbeeld: meetniveaus in de fietsentabel
Loop de kolommen één voor één langs en vraag je steeds af: *heeft de volgorde betekenis? zijn de afstanden gelijk? is er een echt nulpunt?*

1. **klantnr**: een label. Klant 104 is niet "meer" dan klant 103. Nominaal (en eigenlijk een identificatie, geen meetvariabele).
2. **woonplaats**: categorieën zonder volgorde. Nominaal. Zinvol is bijvoorbeeld: de modus is Utrecht (3 van de 5).
3. **tevredenheid**: een 4 is beter dan een 3, dus er is volgorde. Maar is de stap van 2 naar 3 even groot als die van 4 naar 5? Dat weet niemand. Ordinaal. Veilig is de mediaan: gesorteerd 2, 3, 4, 4, 5, dus mediaan 4.
4. **leeftijd** en **bedrag**: echte hoeveelheden met een nulpunt. Ratio. Gemiddelde, standaardafwijking en verhoudingen zijn allemaal zinvol: klant 102 is ruim twee keer zo oud als klant 103.
:::

:::warning Gemiddelden van schaalscores
In de praktijk worden van 1–5-scores vaak gemiddelden berekend ("gemiddelde tevredenheid 3,6"). Dat is gebruikelijk, maar het veronderstelt dat de stappen tussen de categorieën even groot zijn. Rapporteer bij ordinale data daarom altijd ook de mediaan of de verdeling over de categorieën. Een gemiddelde van 3 kan betekenen dat iedereen neutraal is, maar ook dat de helft zeer ontevreden en de andere helft zeer tevreden is.
:::

Het meetniveau bepaalt ook welke **grafiek** past. Voor nominale data gebruik je een staafdiagram met de categorieën in willekeurige of logische volgorde; voor ordinale data een staafdiagram in de natuurlijke volgorde; voor numerieke data een histogram, boxplot of stippendiagram. In les 4 kom je daarop terug.

{{ exercises: 35-001, 35-002, 35-003 }}

## 3. Datakwaliteit: vier klassieke problemen

Echte datasets bevatten fouten. Dat is geen uitzondering maar de regel: gegevens worden overgetypt, door verschillende systemen samengevoegd, door sensoren gemeten die soms haperen, of door mensen ingevuld die een vraag anders begrijpen dan bedoeld. Professionele analisten besteden vaak het grootste deel van hun tijd aan het controleren en opschonen van data. Vier problemen kom je steeds tegen.

:::definition Vier problemen met datakwaliteit
1. **Ontbrekende waarden.** Een cel is leeg, of bevat een *code* die "onbekend" betekent, zoals 99, −1 of −999.
2. **Invoerfouten.** Een typefout (een leeftijd van 334 in plaats van 34), een verwisselde decimale komma, een datum als 31 juni.
3. **Verkeerde of gemengde eenheden.** Een gewicht in grammen in een kolom in kilogrammen, een temperatuur in °F tussen waarden in °C, bedragen met en zonder btw.
4. **Dubbele records.** Dezelfde waarneming staat twee keer in de tabel, bijvoorbeeld doordat een formulier twee keer is verzonden of twee bestanden overlappen.
:::

Elk van die problemen beïnvloedt je uitkomsten op een eigen manier. Een ontbrekende waarde die je als 0 meetelt, trekt het gemiddelde omlaag. Een code als 99 trekt het juist omhoog. Een waarde in grammen tussen kilogrammen is een gigantische uitschieter. Een dubbel record laat één waarneming zwaarder wegen dan de andere.

:::example Uitgewerkt voorbeeld: een code die zich voordoet als getal
Een enquête vraagt hoeveel uur per week mensen fietsen. Het antwoord "weet ik niet" wordt in het bestand opgeslagen als **99**. Tien respondenten:

$$
4,\ 2,\ 99,\ 6,\ 3,\ 0,\ 5,\ 99,\ 7,\ 4
$$

**Naïef rekenen.** De som is $4 + 2 + 99 + 6 + 3 + 0 + 5 + 99 + 7 + 4 = 229$; het "gemiddelde" is $229 / 10 = 22{,}9$ uur per week. Dat is ruim drie uur per dag: onwaarschijnlijk, en precies dat is je eerste signaal.

**Eerst het codeboek lezen.** De twee keer 99 zijn geen waarnemingen maar ontbrekende waarden. Er blijven 8 geldige antwoorden over, met som $229 - 198 = 31$. Het gemiddelde is $31 / 8 = 3{,}875 \approx 3{,}9$ uur.

**Let op de 0.** De respondent die 0 invulde, fietst echt niet. Die 0 is een geldige waarde en blijft staan. Een lege cel of een code is iets anders dan een nul.
:::

Wat doe je met ontbrekende waarden? De eenvoudigste aanpak is: laat ze weg bij de berekening van die ene variabele, en **vermeld hoeveel** het er waren ("$n = 8$, 2 ontbrekend"). Dat is verantwoord zolang het ontbreken min of meer toevallig is. Is het niet toevallig, bijvoorbeeld omdat vooral mensen die weinig fietsen "weet ik niet" invullen, dan kan je resultaat vertekend zijn. Er bestaan geavanceerdere technieken (zoals *imputatie*: ontbrekende waarden schatten), maar die vallen buiten deze module.

:::example Uitgewerkt voorbeeld: dubbele records en eenheden
Een webwinkel exporteert de verzonden pakketten van één ochtend:

| order | gewicht (kg) |
|---|---|
| 5001 | 1,2 |
| 5002 | 0,8 |
| 5003 | 1650 |
| 5004 | 2,1 |
| 5002 | 0,8 |

**Stap 1: identificatie.** Order 5002 komt twee keer voor, met precies dezelfde waarde. Een order wordt maar één keer verzonden, dus dit is een dubbel record. Je houdt er één van over.

**Stap 2: plausibiliteit.** Een pakket van 1650 kg verstuur je niet per post. Waarschijnlijk is hier in grammen ingevoerd: 1650 g = 1,65 kg. Dat is een *aanname*. Controleer haar zo mogelijk in de bron (de pakbon), en documenteer de correctie.

**Stap 3: rekenen.** Over blijven 1,2; 0,8; 1,65; 2,1 kg. Het gemiddelde is $(1{,}2 + 0{,}8 + 1{,}65 + 2{,}1) / 4 = 5{,}75 / 4 \approx 1{,}44$ kg.

Ter vergelijking: wie niets opschoont, krijgt $(1{,}2 + 0{,}8 + 1650 + 2{,}1 + 0{,}8)/5 \approx 331$ kg. Eén verkeerde eenheid maakt het gemiddelde volkomen waardeloos. De mediaan zou trouwens veel minder van slag zijn geweest: die is robuust, zoals je in de volgende les ziet.
:::

:::tip Een werkwijze voor elke nieuwe dataset
1. Bekijk de eerste en de laatste rijen, en tel het aantal rijen.
2. Bepaal per kolom: wat is het meetniveau, wat is de eenheid?
3. Zoek per numerieke kolom het minimum en maximum. Zijn die plausibel?
4. Zoek naar lege cellen en naar verdachte codes (99, 999, −1, −999).
5. Zoek dubbele identificatienummers.
6. Leg elke correctie vast, zodat iemand anders je stappen kan nalopen.

Gooi nooit de ruwe data weg: werk altijd op een kopie.
:::

{{ exercises: 35-004, 35-005, 35-006 }}
