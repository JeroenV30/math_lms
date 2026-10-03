# Drie soorten procentvragen

Bijna elke procentopgave gaat over drie grootheden: een **geheel**, een **deel** van dat geheel, en het **percentage** dat aangeeft hoe groot het deel is ten opzichte van het geheel. Ze hangen samen via één betrekking:

$$
\text{deel} = \frac{p}{100} \times \text{geheel}
$$

Ken je twee van de drie, dan kun je de derde vinden. Dat geeft drie soorten vragen. Het rekenwerk is telkens kort; het moeilijkste is herkennen welke van de drie je voor je hebt, en vooral: **welke hoeveelheid 100% is**.

| Gegeven | Gevraagd | Voorbeeld |
|---|---|---|
| percentage en geheel | deel | Hoeveel is 15% van 240? |
| deel en geheel | percentage | Hoeveel procent is 28 van 80? |
| deel en percentage | geheel | 42 is 35% van welk getal? |

## 1. Het deel zoeken

Dit is de meest voorkomende vraag: je kent het geheel en het percentage. Er zijn drie goede strategieën, en een geoefende rekenaar wisselt ertussen.

**Strategie 1: via 10% en 1%.** Tien procent vind je door te delen door 10, één procent door te delen door 100. Daaruit bouw je bijna elk percentage op, net als bij de tafelstrategieën uit module 4.

**Strategie 2: via een bekende breuk.** Is het percentage een "mooie" breuk uit de tabel van les 2, gebruik die dan. $25\%$ is een kwart, $20\%$ een vijfde, $12{,}5\%$ een achtste.

**Strategie 3: via de factor.** Zet het percentage om in een kommagetal en vermenigvuldig: $p\%$ van $G$ is $\tfrac{p}{100} \times G$. Dit is de route van de rekenmachine, en de route die je later bij groeifactoren nodig hebt.

:::example Uitgewerkt voorbeeld: 15% van 240 op drie manieren
1. **Via 10% en 5%.** $10\%$ van 240 is 24. $5\%$ is de helft daarvan: 12. Samen: $24 + 12 = 36$.
2. **Via een breuk.** $15\% = \tfrac{15}{100} = \tfrac{3}{20}$. Een twintigste van 240 is 12, dus drie twintigste is 36.
3. **Via de factor.** $0{,}15 \times 240 = 36$.

Drie routes, dezelfde uitkomst. Gebruik een tweede route als controle wanneer het ertoe doet.
:::

:::example Uitgewerkt voorbeeld: 17% van 650
Zeventien is geen mooi percentage. Splits het: $17\% = 10\% + 5\% + 2 \times 1\%$.

- $10\%$ van 650 is 65.
- $5\%$ is de helft daarvan: 32,5.
- $1\%$ is 6,5, dus $2\%$ is 13.

Samen: $65 + 32{,}5 + 13 = 110{,}5$. Controle met de factor: $0{,}17 \times 650 = 110{,}5$.
:::

### Schatten

Bij een snelle controle hoef je niet exact te rekenen. Rond het percentage en het geheel af naar handige getallen.

:::example Uitgewerkt voorbeeld: een schatting
Hoeveel is ongeveer 19% van € 412? Neem 20% van € 400: dat is een vijfde, € 80. Het echte antwoord is $0{,}19 \times 412 = 78{,}28$. De schatting zit er minder dan € 2 naast.

Let op de richting van je afronding: je rondde het percentage omhoog en het bedrag omlaag. Die fouten compenseren elkaar gedeeltelijk. Rond je beide omhoog af, dan weet je dat je schatting te hoog is.
:::

{{ exercises: 09-008, 09-033 }}

## 2. Het percentage zoeken

Nu ken je het deel en het geheel, en vraag je je af hoeveel procent het deel is. Je zoekt dus de verhouding "deel per geheel", uitgedrukt in honderdsten.

:::theory Percentage van een deel
$$
p = \frac{\text{deel}}{\text{geheel}} \times 100
$$

Deel het **deel** door het **geheel** (nooit andersom) en vermenigvuldig met 100.
:::

:::example Uitgewerkt voorbeeld: fietsers
Van 80 deelnemers aan een cursus komen er 28 met de fiets. Welk percentage is dat?

1. Wat is 100%? Alle deelnemers: 80.
2. Deel door geheel: $\dfrac{28}{80} = 0{,}35$.
3. Maal 100: $35\%$.

Een tweede route: maak de noemer 100. $\dfrac{28}{80} = \dfrac{7}{20} = \dfrac{35}{100}$.
:::

:::example Uitgewerkt voorbeeld: een klein deel
Hoeveel procent is 18 van 240? $\dfrac{18}{240} = 0{,}075$, dus $7{,}5\%$.

Controle met 10%: tien procent van 240 is 24. Achttien is minder dan 24, dus het antwoord moet onder de 10% liggen. Klopt.
:::

:::warning Deel gedeeld door geheel
Wie $\tfrac{240}{18}$ uitrekent, vindt $13{,}3$ en maakt daar "13,3%" van. Die uitkomst kan niet kloppen: 18 is veel minder dan 10% van 240. Een deel dat kleiner is dan het geheel, geeft altijd een percentage onder de 100.
:::

## 3. Het geheel zoeken

De derde vraag is de lastigste, omdat hij omgekeerd werkt: je kent een deel en weet welk percentage dat deel is, en je zoekt het geheel.

:::example Uitgewerkt voorbeeld: beschadigde onderdelen
In een magazijn zijn 60 onderdelen beschadigd. Dat is 12% van de hele voorraad. Hoe groot is de voorraad?

**Via 1%.** Als 12% overeenkomt met 60 onderdelen, dan is 1% gelijk aan $60 : 12 = 5$ onderdelen. Dan is 100% gelijk aan $100 \times 5 = 500$ onderdelen.

**Via de factor.** Het deel is $0{,}12 \times \text{geheel}$. Dus $\text{geheel} = 60 : 0{,}12 = 500$.

**Controle.** $12\%$ van 500 is $0{,}12 \times 500 = 60$. Klopt.
:::

Het denken in "eerst 1%, dan 100%" is precies wat een **verhoudingstabel** doet. In de bovenste rij staan percentages, in de onderste rij de bijbehorende aantallen. Wat je boven doet, doe je ook onder.

| Percentage | 12% | 1% | 100% |
|---|---|---|---|
| Onderdelen | 60 | 5 | 500 |

Probeer het zelf in de widget: de eerste kolom zegt "12% hoort bij 60 onderdelen". Typ in een lege kolom bovenaan 1, 100 of een ander percentage, en kijk welk aantal erbij hoort.

{{ widget: ratio-table a=12 b=60 labelA="Percentage (%)" labelB="Aantal onderdelen" }}

:::warning Het deel is niet het geheel
Een veelgemaakte fout is om "12% van 60" uit te rekenen ($7{,}2$). Lees de zin nauwkeurig: de 60 onderdelen **zijn** 12%, ze zijn niet het geheel waarvan je 12% neemt. Vraag je af: is mijn antwoord groter of kleiner dan het gegeven getal? Hier moet het geheel veel groter zijn dan 60, want 60 is maar een klein deel ervan.
:::

## 4. Wat is 100%?

Hetzelfde paar getallen kan bij verschillende vragen verschillende percentages opleveren. Het hangt er allemaal van af welke hoeveelheid je als 100% neemt: de **basis**.

:::example Uitgewerkt voorbeeld: aanwezigen en afwezigen
Van een groep van 120 mensen zijn er 30 aanwezig en 90 afwezig.

- Welk percentage van de groep is aanwezig? De basis is de hele groep: $\tfrac{30}{120} = 25\%$.
- Welk percentage van de groep is afwezig? Weer de hele groep als basis: $\tfrac{90}{120} = 75\%$. Samen 100%: zo hoort het, want aanwezigen en afwezigen vormen samen de groep.
- Hoeveel procent vormen de afwezigen **van het aantal aanwezigen**? Nu is het aantal aanwezigen 100%: $\tfrac{90}{30} = 3 = 300\%$.

Alle drie de berekeningen zijn juist. Ze beantwoorden drie verschillende vragen.
:::

In gewone taal verraden kleine woordjes de basis. "... **van** de groep", "... **ten opzichte van** vorig jaar", "... **meer dan** de concurrent". Het getal dat direct na *van*, *ten opzichte van* of *dan* staat, is meestal het geheel.

:::tip Schrijf 100% erbij
Zet vóór je gaat rekenen expliciet op papier: "100% = ...". Dat kost twee seconden en voorkomt de meeste procentfouten. Bij een verhoudingstabel is het de eerste kolom die je invult.
:::

{{ exercises: 09-009, 09-010, 09-011, 09-012, 09-013 }}
