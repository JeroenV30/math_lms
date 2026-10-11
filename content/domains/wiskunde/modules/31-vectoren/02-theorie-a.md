# Pijlen, componenten en lengte

In de introductie zag je dat sommige grootheden een richting hebben. In deze les maak je dat idee precies. Je leert een vector tekenen als pijl, beschrijven met twee getallen, en de lengte ervan uitrekenen. Alles in deze les speelt zich af in een assenstelsel zoals je dat kent uit module 17.

## 1. Scalars en vectoren

Begin bij het verschil tussen twee soorten grootheden.

:::definition Scalar en vector
Een **scalar** (scalaire grootheid) is volledig beschreven door één getal met een eenheid: temperatuur ($14^\circ$C), massa (70 kg), tijdsduur (2 uur), prijs (€ 4,50), oppervlakte (30 m²).

Een **vector** (vectoriële grootheid) heeft een **grootte** én een **richting**: een verplaatsing (3 km naar het noorden), een kracht (200 N schuin omhoog), een windsnelheid (40 km/u uit het westen), de snelheid van een vliegtuig (800 km/u op koers $270^\circ$).
:::

Een handige toets: vraag je af of de zin "...en in welke richting?" zinnig is. "Het is $14^\circ$C, en in welke richting?" is onzin, dus temperatuur is een scalar. "De wind waait met 40 km/u, en in welke richting?" is een heel redelijke vraag, dus wind is een vector.

:::warning Snelheid en snelheid
In het dagelijks Nederlands betekent "snelheid" meestal alleen het getal op de snelheidsmeter: 100 km/u. Dat is een scalar. In de natuurkunde bedoelt men met snelheid vaak de vector: 100 km/u **in een bepaalde richting**. Twee auto's die allebei 100 km/u rijden, de één naar het noorden en de ander naar het zuiden, hebben dezelfde snelheidsgrootte maar verschillende snelheidsvectoren. Let in een opgave dus goed op wat er bedoeld wordt.
:::

Ook "afstand" en "verplaatsing" verschillen. Loop je 3 km naar het oosten en dan 3 km terug, dan heb je 6 km **afgelegd** (een scalar), maar je **verplaatsing** is nul: je staat weer op het beginpunt.

{{ exercise: 31-001 }}

## 2. Een vector als pijl

De natuurlijkste manier om een vector te tekenen is als **pijl**. De lengte van de pijl geeft de grootte weer, de stand van de pijl de richting.

:::definition Staart, kop en notatie
Een getekende vector begint in de **staart** (het beginpunt) en eindigt in de **kop** (de punt van de pijl). Een vector van punt $A$ naar punt $B$ schrijf je als $\overrightarrow{AB}$. Een vector die je een eigen naam geeft, schrijf je met een kleine letter en een pijltje erboven: $\vec v$, $\vec a$, $\vec F$. In gedrukte boeken zie je ook vetgedrukte letters, **v**.
:::

Het belangrijkste inzicht van deze paragraaf is subtiel. Een vector is **niet** gebonden aan een plek. Als je een pijl evenwijdig verschuift zonder hem te draaien of uit te rekken, stelt hij nog steeds dezelfde vector voor. "Drie stappen naar rechts en twee omhoog" is dezelfde opdracht, of je nu in de keuken of in de tuin begint.

![Gelijke en tegengestelde vectoren](/images/diagrams/m31-gelijke-vectoren.svg "De drie blauwe pijlen zijn dezelfde vector v: even lang, even gericht, alleen op een andere plek. De rode pijl is −v: even lang, tegengesteld gericht. De zwarte pijl w is een andere vector. Eigen diagram.")

:::definition Gelijke vectoren, tegengestelde vector, nulvector
- Twee pijlen stellen **dezelfde vector** voor als ze even lang zijn, evenwijdig lopen en dezelfde kant op wijzen.
- De **tegengestelde vector** $-\vec v$ is even lang als $\vec v$ maar wijst precies de andere kant op. Zo is $\overrightarrow{BA} = -\overrightarrow{AB}$.
- De **nulvector** $\vec 0$ heeft lengte nul. Hij hoort bij "niet verplaatsen" en heeft geen richting.
:::

Een vector die wél aan een vaste plek begint, bijvoorbeeld de vector van de oorsprong $O$ naar een punt $P$, heet een **plaatsvector**. Die is handig om punten met vectoren te beschrijven. In de rest van deze module bedoelen we met "vector" de vrije, verschuifbare pijl, tenzij anders vermeld.

## 3. Componenten: de pijl in getallen

Een tekening is aanschouwelijk, maar je wilt ook kunnen **rekenen**. Daarvoor beschrijf je een vector met twee getallen: hoeveel hij naar rechts gaat en hoeveel omhoog.

Bekijk de pijl van $A(1; 2)$ naar $B(5; 5)$. Om van $A$ naar $B$ te komen, ga je 4 eenheden naar rechts en 3 eenheden omhoog. Die twee getallen heten de **componenten** van de vector.

![Vector van A naar B met componenten](/images/diagrams/m31-pijl-componenten.svg "De vector van A(1; 2) naar B(5; 5): 4 naar rechts en 3 omhoog. De pijl is de schuine zijde van een rechthoekige driehoek met rechthoekszijden 4 en 3, dus hij heeft lengte 5. Eigen diagram.")

:::definition Componenten en kolomnotatie
De vector die $x$ eenheden naar rechts en $y$ eenheden omhoog gaat, schrijf je als **kolom**:

$$
\vec v = \begin{pmatrix} x \\ y \end{pmatrix}
$$

Het bovenste getal is de **x-component** (horizontaal), het onderste de **y-component** (verticaal). Een negatieve x-component betekent naar links, een negatieve y-component naar beneden.

In lopende tekst en in de invoervelden van deze cursus schrijf je dezelfde vector ook als $(x; y)$. Het verschil met een punt haal je uit de context: $(4; 3)$ als vector betekent "4 naar rechts, 3 omhoog", ongeacht waar je begint.
:::

Hoe vind je de componenten als je de staart en de kop kent? Je kijkt hoeveel de x-coördinaat verandert en hoeveel de y-coördinaat verandert, precies zoals bij de verplaatsingen in module 17. Dat is altijd **eindpunt min beginpunt**, oftewel **kop min staart**.

:::formula Vector tussen twee punten
$$
\overrightarrow{AB} = \begin{pmatrix} x_B - x_A \\ y_B - y_A \end{pmatrix}
$$
:::

:::example Uitgewerkt voorbeeld: kop min staart
Gegeven $A(1; 2)$ en $B(5; 5)$. Bereken $\overrightarrow{AB}$ en $\overrightarrow{BA}$.

1. **Wat is de staart, wat is de kop?** Bij $\overrightarrow{AB}$ begin je in $A$ en eindig je in $B$. Staart $A$, kop $B$.
2. **x-component.** Van $x = 1$ naar $x = 5$: $5 - 1 = 4$.
3. **y-component.** Van $y = 2$ naar $y = 5$: $5 - 2 = 3$.
4. **Resultaat.** $\overrightarrow{AB} = \begin{pmatrix} 4 \\ 3 \end{pmatrix}$, of $(4; 3)$.
5. **Omgekeerd.** Bij $\overrightarrow{BA}$ is $B$ de staart en $A$ de kop: $1 - 5 = -4$ en $2 - 5 = -3$. Dus $\overrightarrow{BA} = (-4; -3) = -\overrightarrow{AB}$.

Controle met een schets: van $A$ naar $B$ ga je naar rechts en omhoog, dus beide componenten moeten positief zijn. Klopt.
:::

{{ widget: coordinate-grid size=6 points="(1;2) (5;5)" connect=true }}

Klik in het assenstelsel twee punten aan en lees de horizontale en verticale verandering af. Dat zijn precies de componenten van de vector van het eerste naar het tweede punt.

:::example Uitgewerkt voorbeeld: negatieve getallen
Gegeven $P(-3; 4)$ en $Q(2; -1)$. Bereken $\overrightarrow{PQ}$.

1. Staart $P$, kop $Q$. Reken kop min staart.
2. x-component: $2 - (-3) = 2 + 3 = 5$. Min een negatief getal wordt plus (module 13).
3. y-component: $-1 - 4 = -5$.
4. $\overrightarrow{PQ} = (5; -5)$: vijf naar rechts en vijf naar beneden.

Controle: $P$ ligt linksboven, $Q$ rechtsonder. Naar rechts (positief) en naar beneden (negatief). Klopt.
:::

:::warning De volgorde telt
De meest gemaakte fout is staart min kop rekenen in plaats van kop min staart. Dan krijg je precies de tegengestelde vector: alle tekens omgedraaid. Maak er een gewoonte van om na elke berekening te controleren met een snelle schets of een blik op de ligging van de punten: wijst je antwoord de goede kant op?
:::

Omgekeerd kun je met een vector ook een punt vinden. Begin je in $P$ en verplaats je over $\vec v$, dan kom je in het punt met coördinaten $P + \vec v$: tel de componenten op bij de coördinaten. Vanuit $P(-1; 4)$ met $\vec v = (3; -2)$ kom je in $(-1 + 3;\ 4 - 2) = (2; 2)$.

{{ exercises: 31-002, 31-003 }}

## 4. De lengte van een vector

Hoe lang is de pijl van $A(1; 2)$ naar $B(5; 5)$? Kijk nog eens naar de tekening. De horizontale component (4) en de verticale component (3) vormen samen met de pijl een **rechthoekige driehoek**. De componenten zijn de rechthoekszijden, de pijl is de schuine zijde. Dat is precies de situatie van module 18.

:::formula Lengte van een vector
De lengte (of **norm**, of **grootte**) van $\vec v = \begin{pmatrix} x \\ y \end{pmatrix}$ is

$$
|\vec v| = \sqrt{x^2 + y^2}
$$
:::

Voor $\overrightarrow{AB} = (4; 3)$ is dat $\sqrt{16 + 9} = \sqrt{25} = 5$. De afstand tussen $A$ en $B$ is dus 5; de lengte van de vector $\overrightarrow{AB}$ en de afstand tussen de punten zijn hetzelfde getal.

Merk op dat de tekens van de componenten niet uitmaken voor de lengte: door het kwadrateren wordt alles positief. De vectoren $(4; 3)$, $(-4; 3)$, $(4; -3)$ en $(-4; -3)$ zijn allemaal 5 lang. Logisch: ze wijzen alle vier een andere kant op, maar ze zijn even lang.

:::example Uitgewerkt voorbeeld: een exacte en een afgeronde lengte
**a.** Bereken de lengte van $\vec a = (6; -8)$.

1. Kwadrateer de componenten: $6^2 = 36$ en $(-8)^2 = 64$. Let op: het kwadraat van $-8$ is $+64$.
2. Tel op: $36 + 64 = 100$.
3. Trek de wortel: $|\vec a| = \sqrt{100} = 10$.

**b.** Bereken de lengte van $\vec b = (-5; 2)$, afgerond op twee decimalen.

1. $(-5)^2 + 2^2 = 25 + 4 = 29$.
2. $|\vec b| = \sqrt{29} \approx 5{,}385\ldots$
3. Afgerond op twee decimalen: $5{,}39$.

Schat ter controle: $\sqrt{25} = 5$ en $\sqrt{36} = 6$, dus $\sqrt{29}$ ligt tussen 5 en 6, iets onder het midden. Klopt.
:::

:::warning De lengte is niet de som van de componenten
Voor $(6; -8)$ is de lengte niet $6 + 8 = 14$. Dat zou de afstand zijn als je eerst 6 naar rechts loopt en daarna 8 naar beneden, langs de rechthoekszijden. De vector gaat rechtstreeks, langs de schuine zijde, en die is altijd korter dan de som van de twee rechthoekszijden.
:::

:::tip Bekende drietallen
Pythagorese drietallen besparen rekenwerk: $(3; 4)$ en $(6; 8)$ hebben lengte 5 en 10, $(5; 12)$ heeft lengte 13, $(8; 15)$ lengte 17. Herken je zo'n drietal (ook met mintekens), dan weet je de lengte meteen.
:::

{{ exercises: 31-004, 31-005 }}

## 5. Verplaatsingen achter elkaar

Een vector is in wezen een **verplaatsing**. Dat maakt hem geschikt om routes te beschrijven. Stel dat een wandelaar eerst 5 km naar het oosten loopt, dan 3 km naar het noorden, dan 2 km naar het westen en tot slot 1 km naar het zuiden. Leg oost langs de positieve x-as en noord langs de positieve y-as.

:::example Uitgewerkt voorbeeld: een wandelroute
1. **Vertaal elke etappe naar een vector.** Oost 5: $(5; 0)$. Noord 3: $(0; 3)$. West 2: $(-2; 0)$. Zuid 1: $(0; -1)$.
2. **Totale horizontale verplaatsing.** $5 + 0 - 2 + 0 = 3$ km naar het oosten.
3. **Totale verticale verplaatsing.** $0 + 3 + 0 - 1 = 2$ km naar het noorden.
4. **Netto verplaatsing.** $(3; 2)$.
5. **Afstand tot het startpunt.** $\sqrt{3^2 + 2^2} = \sqrt{13} \approx 3{,}61$ km.
6. **Afgelegde weg.** $5 + 3 + 2 + 1 = 11$ km.

De wandelaar heeft 11 km gelopen, maar staat hemelsbreed maar 3,61 km van het vertrekpunt. De afgelegde weg is een scalar die alleen maar groeit; de verplaatsing is een vector die kan krimpen als je terugloopt.
:::

In dit voorbeeld heb je eigenlijk al vectoren **opgeteld**: je telde de x-componenten bij elkaar en de y-componenten bij elkaar. In de les over rekenen met vectoren maak je dat officieel.

## 6. Gelijke vectoren in een figuur

Het feit dat een vector verschuifbaar is, maakt hem tot een krachtig gereedschap in de meetkunde. Een vierhoek $ABCD$ is een **parallellogram** precies als de overstaande zijden evenwijdig en even lang zijn. In vectortaal: $\overrightarrow{AB} = \overrightarrow{DC}$, en ook $\overrightarrow{AD} = \overrightarrow{BC}$.

:::example Uitgewerkt voorbeeld: het vierde hoekpunt
Van parallellogram $ABCD$ ken je $A(1; 1)$, $B(6; 2)$ en $C(8; 6)$. Bereken $D$.

1. **Welke vectoren zijn gelijk?** In $ABCD$ (de hoekpunten in deze volgorde rondom) geldt $\overrightarrow{AD} = \overrightarrow{BC}$.
2. **Bereken $\overrightarrow{BC}$.** Kop min staart: $(8 - 6;\ 6 - 2) = (2; 4)$.
3. **Verplaats $A$ over die vector.** $D = (1 + 2;\ 1 + 4) = (3; 5)$.
4. **Controle met het andere paar.** $\overrightarrow{AB} = (5; 1)$ en $\overrightarrow{DC} = (8 - 3;\ 6 - 5) = (5; 1)$. Gelijk, dus het klopt.
:::

Merk op hoe weinig je hoefde te tekenen. De vector deed het werk: "van $B$ naar $C$" is dezelfde stap als "van $A$ naar $D$".

Een tweede toepassing van hetzelfde idee is het **midden** van een lijnstuk. Het midden $M$ van $AB$ bereik je door vanuit $A$ de halve vector $\overrightarrow{AB}$ af te leggen. Met $A(1; 2)$ en $B(5; 5)$ is $\overrightarrow{AB} = (4; 3)$, de helft daarvan is $(2; 1{,}5)$, en dus $M = (3; 3{,}5)$. Dat is hetzelfde als het gemiddelde van de coördinaten: $\left(\tfrac{1+5}{2};\ \tfrac{2+5}{2}\right)$.

:::question Denkvraag
Je weet dat $\overrightarrow{PQ} = (2; 7)$ en dat $Q = (0; 0)$. Waar ligt $P$? Probeer het eerst in je hoofd; het antwoord heeft twee negatieve coördinaten.
:::

{{ exercises: 31-006, 31-007, 31-008, 31-009 }}
