# Van afwijkingen naar spreiding

De spreidingsbreedte en de IQR gebruiken slechts twee waarden elk: het minimum en het maximum, of de twee kwartielen. De meeste informatie in de dataset blijft ongebruikt. Je kunt een maat construeren die **alle** waarnemingen meeneemt, op dezelfde manier als het gemiddelde dat doet. Die maat, de standaardafwijking, is het onderwerp van deze les. Je leert niet alleen hoe je haar berekent, maar ook waarom ze er zo uitziet.

## Afwijkingen van het gemiddelde

Spreiding gaat over de vraag hoe ver de waarnemingen van het centrum liggen. Het ligt dus voor de hand om per waarneming de **afwijking** van het gemiddelde te bepalen, $x_i - \bar{x}$, en daarvan het gemiddelde te nemen. Probeer dat bij 5, 7, 7, 9, 12. Het gemiddelde is $40/5 = 8$. De afwijkingen zijn

$$
5-8=-3,\quad 7-8=-1,\quad 7-8=-1,\quad 9-8=1,\quad 12-8=4.
$$

Hun som is $-3-1-1+1+4 = 0$. Dat is geen toeval. Het gemiddelde is precies het punt waar de afwijkingen aan beide kanten tegen elkaar wegvallen, als een evenwichtspunt van een wip. De som van de afwijkingen is altijd nul, dus hun gemiddelde ook, en dat zegt niets over de spreiding.

![Getallenlijn met de waarden 5, 7, 7, 9 en 12, het gemiddelde 8 en de afwijkingen als pijlen](/images/diagrams/m24-afwijkingen.svg "De afwijkingen van het gemiddelde 8 (eigen figuur)")

Er zijn twee manieren om te voorkomen dat positieve en negatieve afwijkingen elkaar opheffen: ze allemaal positief maken met de absolute waarde, of ze kwadrateren. De absolute waarde leidt tot de gemiddelde absolute afwijking, die in gebruik is maar lastig mee te rekenen. Kwadrateren leidt tot de **variantie**, en dat is de maat waarop bijna alle verdere statistiek is gebouwd.

## Waarom kwadrateren?

Het kwadraat heeft drie voordelen. Ten eerste maakt het elke afwijking positief. Ten tweede laat het grote afwijkingen zwaarder meetellen dan kleine: een afwijking van 4 levert 16 op, vier keer zoveel als een afwijking van 2, en niet slechts twee keer. Spreiding is in veel toepassingen juist de maat voor 'hoe riskant of onvoorspelbaar', en dan verdienen grote uitschieters extra gewicht. Ten derde gedraagt het kwadraat zich algebraïsch goed: de variantie van onafhankelijke grootheden telt netjes op (dat komt terug in module 36), en het gemiddelde is precies het getal waarvoor de som van gekwadrateerde afwijkingen het kleinst is. Met absolute waarden werkt dat minder prettig.

De prijs voor het kwadrateren is de eenheid. Zijn de waarnemingen in meters, dan is de variantie in vierkante meters. Daar kun je je weinig bij voorstellen, en daarom neem je de wortel en krijg je de **standaardafwijking** in de oorspronkelijke eenheid terug.

## Stap voor stap met een tabel

Je rekent de variantie en de standaardafwijking uit in vijf stappen. Houd bij dat je eerst bepaalt of de data de volledige populatie vormen; in dat geval deel je door $n$ en schrijf je $\mu$ en $\sigma$. Over de steekproefvariant (delen door $n-1$) gaat de volgende les.

| Stap | Handeling |
|---|---|
| Centrum | Bereken het gemiddelde $\mu$ |
| Afwijkingen | Bereken $x_i - \mu$ |
| Kwadraten | Bereken $(x_i - \mu)^2$ en tel ze op |
| Variantie | Deel de som door $n$ |
| Standaardafwijking | Neem de positieve vierkantswortel |

:::example Vier getallen
Beschouw 2, 4, 6, 8 als de volledige populatie. Je werkt met een tabel:

| $x_i$ | $x_i-\mu$ | $(x_i-\mu)^2$ |
|---|---|---|
| 2 | −3 | 9 |
| 4 | −1 | 1 |
| 6 | 1 | 1 |
| 8 | 3 | 9 |
| som | 0 | 20 |

Het gemiddelde is $\mu = 20/4 = 5$. De som in de middelste kolom is 0, een goede controle op je rekenwerk: komt daar niet nul uit, dan is er een fout gemaakt in het gemiddelde of in een afwijking. De som van de gekwadrateerde afwijkingen is 20, dus
$$
\sigma^2 = \frac{20}{4} = 5, \qquad \sigma = \sqrt{5} \approx 2{,}24.
$$
:::

:::example Vijf getallen
De dataset 5, 7, 7, 9, 12 heeft $\mu = 8$. De gekwadrateerde afwijkingen zijn $9, 1, 1, 1, 16$, met som 28. De populatievariantie is $28/5 = 5{,}6$ en de standaardafwijking is $\sqrt{5{,}6} \approx 2{,}37$.
:::

Een klassiek voorbeeld is de populatie 2, 4, 4, 4, 5, 5, 7, 9. Het gemiddelde is 5. De gekwadrateerde afwijkingen zijn 9, 1, 1, 1, 0, 0, 4, 16; hun som is 32. De populatievariantie is $32/8 = 4$ en de standaardafwijking is $\sqrt{4} = 2$. Dit voorbeeld is zo gekozen dat alles uitkomt op hele getallen; bij echte data is dat zelden zo.

{{ widget: boxplot values="2; 4; 4; 4; 5; 5; 7; 9" }}

In symbolen schrijf je de populatievariantie en -standaardafwijking als

$$
\sigma^2 = \frac{1}{n}\sum_{i=1}^{n}(x_i-\mu)^2, \qquad \sigma = \sqrt{\sigma^2}.
$$

:::warning Vergeet de wortel niet
Het meest gemaakte foutje is stoppen bij de variantie. Bij 2, 4, 6, 8 is 5 de variantie en 2,24 de standaardafwijking. Vraagt een opgave om de standaardafwijking, dan moet je de wortel nemen. Controleer ook de eenheid: een standaardafwijking in vierkante meters bestaat niet bij lengtes.
:::

{{ exercises: 24-014, 24-015, 24-016, 24-017, 24-018, 24-040, 24-041 }}

## Hoe lees je een standaardafwijking?

Een standaardafwijking van 2 betekent niet dat elke waarde precies 2 van het gemiddelde afligt, en ook niet dat het gemiddelde van de afwijkingen 2 is. Het is een maat die alle gekwadrateerde afwijkingen combineert: een soort 'typische' afstand tot het gemiddelde, met extra gewicht voor grote afstanden. Bij de acht waarden hierboven liggen de afwijkingen op 3, 1, 1, 1, 0, 0, 2 en 4 van het gemiddelde; de standaardafwijking 2 zit daar ongeveer in het midden.

De standaardafwijking is nul precies als alle waarnemingen gelijk zijn: dan wijkt niets af van het gemiddelde. Zodra er enige verscheidenheid is, wordt ze positief. Ze is nooit negatief, en hoe groter, hoe breder de data uitwaaieren. Vergelijk je datasets in dezelfde eenheid, dan zegt een grotere standaardafwijking dat de gegevens meer verspreid zijn.

Het is ook nuttig om te zien wat de standaardafwijking níet doet. Ze is, net als het gemiddelde, gevoelig voor uitschieters, want juist grote afwijkingen worden gekwadrateerd. Bij 5, 7, 7, 9, 12 is $\sigma \approx 2{,}37$. Vervang je de 12 door 40, dan is het gemiddelde 13,6 en wordt de standaardafwijking ruim 13. Neem als tweede voorbeeld de twaalf wachttijden uit les 3 en vervang de 30 door 300: de IQR blijft 5,5, want de middelste helft verandert niet, maar de standaardafwijking schiet omhoog. Daarom gebruik je bij sterk scheve data of uitschieters liever mediaan en IQR, en bij klokvormige, symmetrische data gemiddelde en standaardafwijking.

:::tip Kies de maten bij elkaar passend
Gemiddelde en standaardafwijking horen bij elkaar, mediaan en IQR horen bij elkaar. Rapporteer niet het gemiddelde samen met de IQR zonder reden: kies een paar en houd het vol.
:::
