# Samenvatting

Je begon met twee groepen die hetzelfde gemiddelde hadden en toch niets op elkaar leken. Daarmee is de kern van deze module al gezegd: **combineer centrum en spreiding**, en bekijk beide in het licht van de vorm van de data. Hieronder staat wat je moet beheersen, gevolgd door de foutjes die het vaakst voorkomen.

:::summary Centrum
Het gemiddelde gebruikt alle waarden en is gevoelig voor uitschieters; mediaan en kwartielen gebruiken geordende posities en zijn robuust. Uit een frequentietabel bereken je het gemiddelde als $\sum f_i x_i / \sum f_i$, bij klassen met de klassenmiddens (een schatting). Het gewogen gemiddelde $\sum w_i x_i / \sum w_i$ laat elke waarde meetellen naar haar gewicht; gemiddelden van groepen combineer je alleen met de groepsgroottes.
:::

:::summary Kwartielen en boxplot
Sorteer eerst. In deze module is $Q_1$ de mediaan van de onderste helft en $Q_3$ de mediaan van de bovenste helft, waarbij je bij oneven $n$ de middelste waarneming buiten beide helften laat. Vermeld de conventie, want software gebruikt soms een andere. $\mathrm{IQR}=Q_3-Q_1$. De vijfgetallensamenvatting is (minimum, $Q_1$, mediaan, $Q_3$, maximum). Volgens de 1,5-regel is een waarneming een uitschieter buiten $[Q_1-1{,}5\,\mathrm{IQR},\ Q_3+1{,}5\,\mathrm{IQR}]$; de snoren lopen dan naar de verste waarnemingen binnen die grenzen.
:::

:::summary Variantie en standaardafwijking
Neem de afwijkingen $x_i-\bar{x}$ (ze tellen op tot 0), kwadrateer ze, tel op, deel door $n$ voor een populatie of door $n-1$ voor een steekproef, en trek de wortel om de standaardafwijking in de oorspronkelijke eenheid te krijgen. De correctie $n-1$ vereist $n>1$ en compenseert dat $\bar{x}$ uit dezelfde steekproef komt. Ze repareert geen vertekende selectie.
:::

:::summary Transformeren en vergelijken
Een verschuiving verandert centrum, geen spreiding. Een schaalfactor $a$ vermenigvuldigt gemiddelde en mediaan met $a$, de standaardafwijking met $|a|$ en de variantie met $a^2$. De z-score $z=(x-\mu)/\sigma$ meet in standaardafwijkingen vanaf het gemiddelde. Bij klokvormige verdelingen ligt ongeveer 68%, 95% en 99,7% binnen één, twee en drie standaardafwijkingen van het gemiddelde.
:::

## Veelgemaakte fouten

Loop vóór de toets deze lijst langs. Elke fout hieronder komt in de oefeningen voor.

| Fout | Wat er misgaat | Wat je doet |
|---|---|---|
| Standaardafwijking zonder wortel | Je stopt bij de variantie en geeft vierkante eenheden | Neem de wortel en controleer de eenheid |
| Delen door $n$ in plaats van $n-1$ (of omgekeerd) | Je kiest de verkeerde formule voor het doel | Vraag: populatie of steekproef? |
| Mediaan zonder te sorteren | Je pakt het middelste getal van de ongesorteerde rij | Sorteer altijd eerst |
| $\mathrm{IQR}=Q_3+Q_1$ | Je telt de kwartielen op | De IQR is het verschil: $Q_3-Q_1$ |
| Gemiddelde van gemiddelden zonder gewichten | Groepen tellen even zwaar, ongeacht hun grootte | Weeg met de groepsgroottes |
| Uitschieter zomaar weggooien | Je verandert je conclusie zonder onderzoek | Zoek de oorzaak, documenteer, rapporteer met en zonder |
| Z-score zonder te delen door $\sigma$ | Je geeft het verschil $x-\mu$ als z-score | Deel door de standaardafwijking |

## Wat je nu moet beheersen

Je kunt gemiddelde, mediaan en modus bepalen uit losse waarden, een frequentietabel en klassen. Je bepaalt kwartielen volgens een expliciete conventie en tekent en leest een boxplot, met uitschieters. Je rekent variantie en standaardafwijking stap voor stap uit en onderscheidt populatie en steekproef. Je weet hoe verschuiven en schalen de maten veranderen, en je kunt twee groepen vergelijken met centrum én spreiding. Een beschrijving van waargenomen data blijft een beschrijving: zij is nog geen verklaring van oorzaken en geen garantie voor een grotere populatie.

In module 25 verlaat je de beschrijving van gegevens en bekijk je een heel andere vorm van verandering: exponentiële groei. De statistiek komt terug in module 35 (data-analyse), 37 (kansverdelingen) en 38 (steekproeven), waar de standaardafwijking en de z-score hun volle betekenis krijgen.

{{ quiz }}
