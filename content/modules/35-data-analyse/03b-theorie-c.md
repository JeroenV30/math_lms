# De juiste grafiek, en grafieken die misleiden

Een goede grafiek laat in één oogopslag zien wat in een tabel verborgen blijft. Een slechte grafiek verbergt juist wat er te zien is, of suggereert iets wat er niet is. In deze les leer je eerst welke grafiek bij welke vraag past, en daarna hoe je misleiding herkent, ook als die niet opzettelijk is.

## 1. Een grafiek beantwoordt een vraag

Begin nooit met de vraag "welke grafiek is mooi?", maar met de vraag "wat wil ik laten zien?". Bijna elke grafiek in een rapport beantwoordt een van vijf soorten vragen.

| Vraag | Voorbeeld | Passende grafiek |
|---|---|---|
| Hoe vaak komt elke categorie voor? | aantal klanten per woonplaats | **staafdiagram** |
| Hoe is één numerieke variabele verdeeld? | reistijden van 500 medewerkers | **histogram** (of stippendiagram bij weinig waarden) |
| Hoe verschillen groepen in een numerieke variabele? | levertijden van drie leveranciers | **boxplots naast elkaar** |
| Hangen twee numerieke variabelen samen? | advertentiebudget en omzet per filiaal | **spreidingsdiagram** |
| Hoe verandert iets in de tijd? | maandomzet over drie jaar | **lijndiagram** |

Het **meetniveau** uit les 2 stuurt die keuze mee. Een staafdiagram is voor categorieën (nominaal of ordinaal); de staven staan los van elkaar, want tussen "Utrecht" en "Zeist" ligt niets. Een histogram is voor numerieke data; de staven sluiten op elkaar aan, want de getallenlijn loopt door.

:::tip Cirkeldiagrammen
Een cirkeldiagram toont delen van een geheel. Mensen kunnen hoeken en oppervlakten echter slecht vergelijken: of een taartpunt 23% of 27% is, zie je nauwelijks, terwijl je het verschil tussen twee staven direct ziet. Gebruik een cirkeldiagram hooguit bij twee of drie categorieën die samen precies 100% vormen. Anders is een staafdiagram vrijwel altijd duidelijker.
:::

## 2. Het histogram: verdeling in één oogopslag

Een histogram verdeelt de getallenlijn in **klassen** van gelijke breedte en telt hoeveel waarnemingen in elke klasse vallen. De hoogte van een staaf is de frequentie.

:::example Uitgewerkt voorbeeld: levertijden in klassen
Een webwinkel noteert van twintig bestellingen de levertijd in uren:

$$
14,\ 18,\ 20,\ 22,\ 23,\ 24,\ 24,\ 25,\ 26,\ 27,\ 28,\ 30,\ 31,\ 33,\ 36,\ 40,\ 44,\ 47,\ 52,\ 70
$$

**Klassen kiezen.** De waarden lopen van 14 tot 70. Met klassen van 10 uur, beginnend bij 10, heb je de klassen [10; 20⟩ tot en met [70; 80⟩ nodig: de waarde 70 hoort niet meer in [60; 70⟩.

**Grenzen afspreken.** Een klasse [20; 30⟩ bevat 20 wel en 30 niet. Zonder zo'n afspraak weet je niet waar de waarde 30 hoort; met de afspraak valt ze in [30; 40⟩.

**Tellen.**

| klasse (uren) | [10; 20⟩ | [20; 30⟩ | [30; 40⟩ | [40; 50⟩ | [50; 60⟩ | [60; 70⟩ | [70; 80⟩ |
|---|---|---|---|---|---|---|---|
| frequentie | 2 | 9 | 4 | 3 | 1 | 0 | 1 |

Controle: $2 + 9 + 4 + 3 + 1 + 0 + 1 = 20$.

**Lezen.** De meeste bestellingen komen binnen 20 tot 30 uur; naar rechts loopt een lange staart. De verdeling is **rechtsscheef**: typisch voor wachttijden en levertijden, die niet onder nul kunnen maar wel heel lang kunnen uitlopen. Bij zo'n verdeling ligt het gemiddelde (hier $634 / 20 = 31{,}7$ uur) rechts van de mediaan (27,5 uur).
:::

De **klassenbreedte** bepaalt wat je ziet. Te brede klassen verbergen details (alles in twee staven); te smalle klassen geven een rommelig beeld met veel staven van hoogte 0 of 1. Probeer bij een nieuwe dataset een paar breedtes uit. Software kiest automatisch een breedte, maar die keuze is niet heilig.

Bij kleine datasets kun je ook elke waarneming als stip tekenen. De widget hieronder doet dat, met gemiddelde en mediaan erbij. Voeg de waarde 70 toe en weer weg, en kijk hoe het gemiddelde verspringt terwijl de mediaan nauwelijks beweegt.

{{ widget: stats values="14; 18; 20; 22; 23; 24; 24; 25; 26; 27; 28; 30; 31; 33; 36; 40; 44; 47; 52" }}

:::warning Een boxplot verbergt de vorm
Een boxplot is ideaal om groepen te vergelijken, maar hij toont maar vijf getallen. Een verdeling met **twee pieken** (bijvoorbeeld reistijden van fietsers en van automobilisten door elkaar) kan precies dezelfde boxplot hebben als een verdeling met één piek. Wil je de vorm zien, kijk dan ook naar een histogram.
:::

## 3. Spreidingsdiagram en lijndiagram

Een **spreidingsdiagram** zet elke waarneming als punt neer, met twee numerieke variabelen op de assen. Het is de grafiek voor samenhang; in de volgende les leer je hem lezen.

Een **lijndiagram** verbindt punten met lijnen. Dat suggereert dat er tussen de punten iets doorloopt, en dat is alleen terecht als op de horizontale as **tijd** (of een andere doorlopende grootheid) staat. Een lijn tussen "Utrecht", "Zeist" en "Houten" is onzin: er bestaat geen woonplaats halverwege Utrecht en Zeist.

{{ exercises: 35-019, 35-020 }}

## 4. Hoe grafieken misleiden

Grafieken kunnen op veel manieren een verkeerde indruk wekken. Soms gebeurt dat met opzet, maar vaker doordat software of ontwerper een standaardkeuze maakt die toevallig slecht uitpakt. De journalist Darrell Huff verzamelde in *How to Lie with Statistics* (1954) al een hele reeks voorbeelden. Hier de belangrijkste.

### De afgekapte as

![Afgekapte as](/images/diagrams/m35-misleidende-as.svg "Links begint de verticale as bij 50%, rechts bij 0%. Dezelfde stijging van 52% naar 55% lijkt links enorm en is rechts bescheiden.")

Het marktaandeel van een bedrijf stijgt van 52% naar 55%. In de linkergrafiek begint de verticale as bij 50%. De eerste staaf is dan 2 eenheden hoog ($52 - 50$), de tweede 5 eenheden ($55 - 50$). De tweede staaf lijkt $5 / 2 = 2{,}5$ keer zo hoog, terwijl het aandeel maar $55 / 52 \approx 1{,}06$ keer zo groot is.

:::definition Liegfactor
De statisticus Edward Tufte (*The Visual Display of Quantitative Information*, 1983) definieert

$$
\text{liegfactor} = \frac{\text{relatieve toename in de grafiek}}{\text{relatieve toename in de data}}.
$$

Bij een eerlijke grafiek is de liegfactor ongeveer 1.
:::

:::example Uitgewerkt voorbeeld: de liegfactor van de afgekapte as
**In de data.** Van 52 naar 55 is een toename van 3, dus relatief $3 / 52 \approx 0{,}058$ (5,8%).

**In de grafiek.** De staaf groeit van 2 naar 5 eenheden: een toename van 3 op 2, dus relatief $3 / 2 = 1{,}5$ (150%).

**Liegfactor.** $1{,}5 / 0{,}0577 \approx 26$. Exacter: $\frac{3/2}{3/52} = \frac{52}{2} = 26$. De grafiek overdrijft de stijging zesentwintig keer.
:::

Een staafdiagram moet daarom **altijd bij nul beginnen**: bij staven lees je de lengte, en een lengte die niet bij nul begint, liegt. Bij een lijndiagram ligt dat genuanceerder. Daar lees je vooral het verloop, en een as die niet bij nul begint kan juist nodig zijn om betekenisvolle schommelingen te zien, bijvoorbeeld bij lichaamstemperatuur. Vermeld dan wel duidelijk de schaal.

### Oppervlakte en pictogrammen

Stel: een infographic tekent de omzet van twee jaren als twee cirkels, en de omzet is verdubbeld. Als de ontwerper de **straal** verdubbelt, wordt de **oppervlakte** vier keer zo groot ($\pi (2r)^2 = 4 \pi r^2$). Ons oog leest oppervlakte, dus de groei lijkt verviervoudigd. Bij figuurtjes in 3D is het nog erger: een verdubbeling van alle afmetingen geeft acht keer zoveel volume.

:::theory Eerlijk schalen met oppervlakte
Wil je dat de **oppervlakte** van een figuur evenredig is met een getal, dan moet de straal (of zijde) evenredig zijn met de **wortel** van dat getal. Een vier keer zo grote waarde krijgt een twee keer zo grote straal; een negen keer zo grote waarde een drie keer zo grote straal.
:::

Florence Nightingale deed dat in 1858 precies goed. In haar beroemde rozediagram (zie het historisch intermezzo) is de **oppervlakte** van elke wig evenredig met het aantal doden, niet de straal. Daardoor zijn de wiggen eerlijk met elkaar te vergelijken.

### Andere valkuilen

- **Uitgekozen tijdvenster.** Een koers die "in één maand 20% steeg" kan over vijf jaar gedaald zijn. Vraag altijd: waarom begint de grafiek juist hier?
- **Twee verticale assen.** Twee lijnen met elk een eigen schaal kunnen elkaar laten kruisen waar en wanneer de ontwerper wil. De schijnbare samenhang is dan een tekenkeuze.
- **Absolute aantallen in plaats van verhoudingen.** "De meeste ongelukken gebeuren met blauwe auto's" zegt niets als de meeste auto's blauw zijn. Vergelijk percentages of aantallen per 1.000, niet kale aantallen. (John Snow deed dat al in 1855: hij vergeleek sterfgevallen *per 10.000 huizen*, niet het aantal doden per waterbedrijf.)
- **Cumulatieve grafieken.** Een grafiek van de *totale* verkoop sinds de start stijgt altijd, ook als de verkoop per maand al maanden daalt.
- **Ongelijke klassen of tussenruimtes.** Een tijdas waarop 2010, 2015, 2020, 2021, 2022 op gelijke afstanden staan, vervormt het tempo van een ontwikkeling.

{{ exercises: 35-021, 35-022, 35-023, 35-024 }}
