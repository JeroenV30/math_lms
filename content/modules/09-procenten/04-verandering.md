# Stijging, daling, korting en procentpunten

Percentages zijn op hun sterkst wanneer iets **verandert**. Een prijs stijgt, een voorraad krimpt, een rente gaat omhoog. De verandering in euro's of stuks zegt weinig zolang je niet weet hoe groot de hoeveelheid al was. Een stijging van € 12 is veel op een product van € 80 en verwaarloosbaar op een auto. De procentuele verandering zet het verschil af tegen de uitgangswaarde.

## 1. Procentuele verandering

:::definition Procentuele verandering
$$
\text{procentuele verandering} = \frac{\text{nieuw} - \text{oud}}{\text{oud}} \times 100\%
$$

De **oude** waarde is de basis: zij is 100%. Een positieve uitkomst is een stijging, een negatieve een daling.
:::

Dit is gewoon de tweede procentvraag uit les 3 ("welk percentage is het deel van het geheel?"), met het **verschil** als deel en de **oude waarde** als geheel.

:::example Uitgewerkt voorbeeld: een prijsstijging
Een prijs stijgt van € 80 naar € 92.

1. Het verschil: $92 - 80 = 12$ euro.
2. De basis is de oude prijs: € 80.
3. $\dfrac{12}{80} = 0{,}15 = 15\%$.

De prijs is met 15% gestegen. Anders gezegd: de nieuwe prijs is $115\%$ van de oude, want $\tfrac{92}{80} = 1{,}15$. Die tweede formulering wordt in les 5 belangrijk.
:::

:::example Uitgewerkt voorbeeld: een afname
Een voorraad daalt van 250 naar 200 stuks.

1. Het verschil: $200 - 250 = -50$.
2. De basis is de oude voorraad: 250.
3. $\dfrac{-50}{250} = -0{,}2 = -20\%$.

De voorraad is met 20% afgenomen. Het minteken zegt dat het om een daling gaat; in woorden laat je het meestal weg ("een daling van 20%").
:::

### Waarom de oude waarde?

"Met hoeveel procent is de prijs gestegen?" betekent eigenlijk: "met hoeveel procent **van de oorspronkelijke prijs**?". Een verandering beschrijf je altijd vanuit het vertrekpunt. Dat is ook waarom stijgingen en dalingen niet symmetrisch zijn: zoals je in de introductie zag, is $100 \to 120$ een stijging van 20%, maar $120 \to 100$ een daling van ongeveer 16,7%. Hetzelfde verschil van 20 wordt de ene keer door 100 en de andere keer door 120 gedeeld.

Soms kiest een zin bewust een andere basis. "Hoeveel procent is 40 **kleiner dan** 46?" vergelijkt 40 met 46: nu is 46 de basis, en het antwoord is $\tfrac{6}{46} \approx 13{,}0\%$. "Hoeveel procent is 46 **groter dan** 40?" heeft 40 als basis: $\tfrac{6}{40} = 15\%$. Het getal achter "dan" is de basis.

:::warning Delen door nul en negatieve bases
Is de oude waarde nul, dan bestaat er geen procentuele verandering: je kunt niet door nul delen. Een bedrijf dat van € 0 naar € 5.000 winst gaat, is niet "oneindig procent" gegroeid; je beschrijft zo'n verandering gewoon in euro's. Ook bij negatieve uitgangswaarden (een verlies dat kleiner wordt) leveren procenten verwarrende uitspraken op. In deze module zijn alle bases positief.
:::

Kleine bases geven trouwens snel spectaculaire percentages. "Het aantal klachten steeg met 300%" klinkt alarmerend, maar kan betekenen dat er in plaats van één klacht nu vier zijn. Wie een percentage leest, vraagt zich daarom altijd af: procent **van wat**?

{{ exercises: 09-014, 09-015 }}

## 2. Korting

Een korting is een procentuele daling waarvan de verkoper het percentage vooraf vastlegt. Twee hoeveelheden zijn dan interessant: wat je **bespaart** en wat je **betaalt**.

:::example Uitgewerkt voorbeeld: 15% korting
Een product kost € 80 en krijgt 15% korting.

- **De korting zelf:** $15\%$ van 80 is $0{,}15 \times 80 = 12$ euro.
- **Wat je betaalt:** $80 - 12 = 68$ euro.

Sneller: als er 15% af gaat, blijft er $100\% - 15\% = 85\%$ over. Je betaalt $0{,}85 \times 80 = 68$ euro. Die tweede route is handig zodra er meerdere kortingen na elkaar komen.
:::

Andersom kun je uit de oude en de nieuwe prijs het kortingspercentage berekenen. Dat is precies de procentuele daling, met de **oude** prijs als basis.

:::example Uitgewerkt voorbeeld: het kortingspercentage
Een jas van € 120 is afgeprijsd naar € 90. Hoeveel procent korting is dat?

1. Het verschil: $120 - 90 = 30$ euro korting.
2. De basis is de oorspronkelijke prijs: € 120.
3. $\dfrac{30}{120} = 0{,}25 = 25\%$.

Niet $\tfrac{30}{90}$: dan neem je de nieuwe prijs als basis, en vind je ongeveer 33%. Een winkel die "33% korting" adverteert terwijl de prijs van € 120 naar € 90 gaat, overdrijft.
:::

:::tip Korting of restant?
Lees steeds welk getal er bedoeld wordt. "20% korting" beschrijft het weggenomen deel; "je betaalt 80%" beschrijft wat er overblijft. Bij een rekenmachine typ je het liefst het restant: $0{,}8 \times$ prijs.
:::

{{ exercises: 09-018, 09-035 }}

## 3. Procent of procentpunt?

Nu de valkuil uit de introductie. Wat als de grootheid die verandert **zelf al een percentage** is? Denk aan een rentepercentage, een btw-tarief, het aandeel van een partij in de peilingen of het werkloosheidspercentage.

Dan zijn er twee manieren om een verandering te beschrijven, en ze geven verschillende getallen:

- **Het verschil in procentpunten.** Je trekt de twee percentages van elkaar af. Van 20% naar 25% is een stijging van **5 procentpunten**.
- **De relatieve verandering in procenten.** Je behandelt het oude percentage als basis, zoals bij elke procentuele verandering. Van 20% naar 25% is een stijging van $\tfrac{5}{20} = 25\%$.

:::definition Procentpunt
Een **procentpunt** is de eenheid voor het verschil tussen twee percentages. Je vindt het door de percentages van elkaar af te trekken. Het woord *procent* gebruik je alleen voor een verandering ten opzichte van de oude waarde.
:::

![Procentpunt tegenover procent](/images/diagrams/m09-procentpunt.svg "Van 20% naar 25%: het verschil is 5 procentpunten. Ten opzichte van de oude 20% is dat een stijging van een kwart, dus 25%.")

:::example Uitgewerkt voorbeeld: de Romeinse heffing
In de introductie halveerde Tiberius de veilingheffing van 1% naar 0,5%.

- In procentpunten: $1 - 0{,}5 = 0{,}5$ procentpunt lager.
- In procenten: $\dfrac{0{,}5}{1} = 0{,}5 = 50\%$ lager.

De senator die "een half procent" zei, bedoelde eigenlijk een half procent**punt**. De senator die "vijftig procent" zei, had het over de relatieve verandering. Beide klopten; alleen de eerste had zijn woord verkeerd gekozen.
:::

:::example Uitgewerkt voorbeeld: hypotheekrente
Een bank verhoogt de rente op een lening van 3,5% naar 4,2%.

- Het verschil is $4{,}2 - 3{,}5 = 0{,}7$ procentpunt.
- De relatieve stijging is $\dfrac{0{,}7}{3{,}5} = 0{,}2 = 20\%$.

"De rente is met 0,7 procentpunt gestegen" en "de rente is met 20% gestegen" zijn dus allebei juist. "De rente is met 0,7% gestegen" is onjuist: dat zou een stijging van 3,5% naar ongeveer 3,52% betekenen ($3{,}5 \times 1{,}007 \approx 3{,}52$). Voor iemand die € 200.000 leent, maakt dat een groot verschil.
:::

:::warning Twee verschillende vragen
Bij een verandering van een percentage beantwoordt de aftrekking de vraag "hoeveel procentpunten?" en de deling door het oude percentage de vraag "hoeveel procent?". Wie het ene getal met het woord van het andere presenteert, maakt een verandering kleiner of groter dan ze is. Een daling van het werkloosheidspercentage van 4% naar 3% is één procentpunt, maar wel een daling van een kwart van het aantal werklozen (bij gelijke beroepsbevolking).
:::

{{ widget: percent-grid value=20 }}

Zet het honderdveld op 20 en daarna op 25. Er komen vijf vakjes bij: vijf procentpunten. Vergelijk die vijf nieuwe vakjes met de twintig die er al waren: ze zijn een kwart van het oude aantal. Dat is de relatieve stijging van 25%.

{{ exercises: 09-016, 09-017, 09-034 }}
