# De hoofdstelling en oppervlakten berekenen

Je hebt nu twee dingen geleerd die op het eerste gezicht niets met elkaar te maken hebben. In les 1 en 2: de oppervlakte onder een grafiek, als limiet van sommen van rechthoekjes. In les 3: primitiveren, het omgekeerde van differentiëren. In deze les zie je dat het om één en hetzelfde gaat. Dat inzicht heet de **hoofdstelling van de integraalrekening**, en het verandert een eindeloze sommatie in een eenvoudige aftreksom.

## 1. De oppervlaktefunctie

Neem een functie $f$ en een vaste ondergrens $a$. Laat nu de **bovengrens variëren**: noem die $x$. Dan hangt de oppervlakte onder de grafiek van $a$ tot $x$ af van $x$. Dat is een nieuwe functie:

$$
A(x) = \int_a^x f(t)\,dt.
$$

De integratievariabele heet hier $t$, zodat hij niet verward wordt met de bovengrens $x$. (Weet je nog: de letter in de integraal is een dummy.)

:::example Uitgewerkt voorbeeld: een oppervlaktefunctie met meetkunde
Neem $f(t) = 2t$ en ondergrens $a = 0$. Het gebied onder $y = 2t$ van $0$ tot $x$ is een driehoek met breedte $x$ en hoogte $2x$:

$$
A(x) = \tfrac12 \cdot x \cdot 2x = x^2.
$$

Kijk wat er gebeurt als je $A$ differentieert: $A'(x) = 2x$. Dat is precies $f(x)$. De oppervlaktefunctie is een **primitieve** van de functie waaronder je de oppervlakte meet.

Probeer het ook met $f(t) = 3$ (rechthoek): $A(x) = 3x$ en $A'(x) = 3$. Weer $f$.
:::

Is dat toeval, omdat rechte lijnen zo eenvoudig zijn? Nee. Het geldt voor elke (continue) functie, en de reden is verrassend eenvoudig.

## 2. Waarom de oppervlakte groeit met f(x)

Stel je voor dat je de bovengrens een klein stukje $h$ naar rechts schuift, van $x$ naar $x + h$. Hoeveel oppervlakte komt erbij?

![De oppervlaktefunctie groeit met f(x)](/images/diagrams/m30-hoofdstelling.svg "De blauwe oppervlakte is A(x). Schuif je de bovengrens h naar rechts, dan komt er een smalle strook bij die bijna een rechthoek is met hoogte f(x) en breedte h.")

Er komt een **smalle strook** bij, van $x$ tot $x + h$. Die strook is bijna een rechthoek met breedte $h$ en hoogte $f(x)$. Dus

$$
A(x + h) - A(x) \approx f(x) \cdot h.
$$

Deel beide kanten door $h$:

$$
\frac{A(x + h) - A(x)}{h} \approx f(x).
$$

Links staat het **differentiequotiënt** van $A$ uit module 29: de gemiddelde groei van $A$ op het stukje van $x$ tot $x + h$. Hoe smaller de strook, hoe beter de strook op een rechthoek lijkt, en hoe kleiner de fout in die benadering. In de limiet $h \to 0$ wordt het differentiequotiënt de afgeleide, en de benadering wordt een gelijkheid:

$$
A'(x) = f(x).
$$

:::theory Hoofdstelling van de integraalrekening (deel 1)
Als $f$ continu is, dan is de oppervlaktefunctie $A(x) = \displaystyle\int_a^x f(t)\,dt$ een primitieve van $f$:

$$
A'(x) = f(x).
$$

In woorden: **de oppervlakte groeit op elk moment met een snelheid die gelijk is aan de hoogte van de grafiek.**
:::

Lees die laatste zin nog een keer, met een beeld erbij. Een verfroller rolt over de vloer van links naar rechts; de hoogte van de roller verandert onderweg en is steeds $f(x)$. Het geverfde oppervlak groeit sneller waar de roller hoog is en langzamer waar hij laag is. De groeisnelheid van het geverfde oppervlak *is* de hoogte van de roller.

:::warning Een intuïtief bewijs
Wat je hierboven zag is geen volledig streng bewijs: het woord "bijna" moet nog precies gemaakt worden. Daarvoor laat je zien dat de strook ingeklemd zit tussen een rechthoek met de kleinste en een met de grootste hoogte op $[x, x + h]$, en dat beide hoogtes naar $f(x)$ gaan als $h \to 0$ (hier gebruik je dat $f$ continu is). De gedachte is dezelfde als bij de ondersom en bovensom uit les 1.
:::

{{ exercises: 30-022, 30-023 }}

## 3. Integralen uitrekenen met F(b) − F(a)

Nu het praktische gevolg. Stel dat je $\int_a^b f(x)\,dx$ wilt weten, en dat je een primitieve $F$ van $f$ kunt vinden.

- De oppervlaktefunctie $A(x) = \int_a^x f(t)\,dt$ is ook een primitieve van $f$.
- Twee primitieven van dezelfde functie verschillen een constante (les 3). Dus $A(x) = F(x) + C$.
- Bij $x = a$ is de oppervlakte nul: $A(a) = 0$. Dus $F(a) + C = 0$, ofwel $C = -F(a)$.
- Dan is $A(x) = F(x) - F(a)$, en bij $x = b$:

$$
\int_a^b f(x)\,dx = A(b) = F(b) - F(a).
$$

:::theory Hoofdstelling van de integraalrekening (deel 2)
Als $F$ een primitieve is van de continue functie $f$ op $[a, b]$, dan is

$$
\int_a^b f(x)\,dx = \Big[F(x)\Big]_a^b = F(b) - F(a).
$$

De notatie $\big[F(x)\big]_a^b$ (ook wel $F(x)\big|_a^b$) betekent: vul de bovengrens in, vul de ondergrens in, en trek af.
:::

Het maakt niet uit welke primitieve je kiest: een constante $C$ valt bij het aftrekken weg, want $(F(b) + C) - (F(a) + C) = F(b) - F(a)$. Daarom laat je bij bepaalde integralen de $C$ gewoon weg.

:::example Uitgewerkt voorbeeld: Archimedes in één regel
$$
\int_0^1 x^2\,dx = \Big[\tfrac13 x^3\Big]_0^1 = \tfrac13 \cdot 1^3 - \tfrac13 \cdot 0^3 = \tfrac13.
$$

Dat is het antwoord waarvoor je in les 1 een somformule en een limiet nodig had. Dezelfde berekening geeft meteen ook

$$
\int_0^2 x^2\,dx = \tfrac13 \cdot 8 = \tfrac83,
$$

en dat verklaart waarom de oppervlakte van $0$ tot $2$ acht keer zo groot is als van $0$ tot $1$.
:::

:::example Uitgewerkt voorbeeld: een polynoom met andere grenzen
Bereken $\displaystyle\int_1^2 (6x^2 - 2x)\,dx$.

*Stap 1: primitieve.* $F(x) = 2x^3 - x^2$. (Controle: $F'(x) = 6x^2 - 2x$ ✓.)

*Stap 2: bovengrens.* $F(2) = 2 \cdot 8 - 4 = 12$.

*Stap 3: ondergrens.* $F(1) = 2 - 1 = 1$.

*Stap 4: aftrekken.* $12 - 1 = 11$.
:::

:::example Uitgewerkt voorbeeld: de dalende functie uit les 1
In les 1 vond je met vier rechthoeken $4{,}25 \leq \int_0^2 (4 - x^2)\,dx \leq 6{,}25$. Nu exact:

$$
\int_0^2 (4 - x^2)\,dx = \Big[4x - \tfrac13 x^3\Big]_0^2 = \left(8 - \tfrac83\right) - 0 = \tfrac{16}{3} \approx 5{,}33.
$$

Inderdaad tussen $4{,}25$ en $6{,}25$.
:::

:::warning Haakjes bij de ondergrens
Bij $F(b) - F(a)$ trek je de **hele** waarde $F(a)$ af. Als $F(a)$ uit meerdere termen bestaat of negatief is, zet er dan haakjes omheen. Een veelgemaakte fout: bij $F(a) = 2 - 3$ schrijven $F(b) - 2 - 3$ in plaats van $F(b) - (2 - 3) = F(b) + 1$. Het minteken moet voor de hele $F(a)$ staan. Reken daarom eerst $F(b)$ en $F(a)$ apart uit, zoals in de voorbeelden, en trek pas daarna af.
:::

{{ exercises: 30-024, 30-025, 30-026, 30-027 }}

## 4. Oppervlakten: onder de as en tussen grafieken

Met de hoofdstelling worden oppervlakteproblemen een kwestie van drie stappen: **snijpunten zoeken, bepalen wat boven ligt, integreren**.

### Onder de x-as

:::example Uitgewerkt voorbeeld: een gebied onder de x-as
Bereken de oppervlakte van het gebied ingesloten door de grafiek van $f(x) = x^2 - 4x$ en de $x$-as.

*Stap 1: snijpunten met de $x$-as.* $x^2 - 4x = x(x - 4) = 0$, dus $x = 0$ of $x = 4$.

*Stap 2: boven of onder?* Neem een testwaarde, bijvoorbeeld $x = 1$: $f(1) = 1 - 4 = -3 < 0$. De grafiek ligt tussen $0$ en $4$ **onder** de $x$-as.

*Stap 3: integreren.*

$$
\int_0^4 (x^2 - 4x)\,dx = \Big[\tfrac13 x^3 - 2x^2\Big]_0^4 = \tfrac{64}{3} - 32 = -\tfrac{32}{3}.
$$

*Stap 4: oppervlakte.* De integraal is negatief omdat het gebied onder de as ligt. De oppervlakte is $\tfrac{32}{3} \approx 10{,}67$.
:::

### Tussen twee grafieken

Als de grafiek van $f$ op $[a, b]$ boven die van $g$ ligt, dan is de hoogte van een verticaal strookje tussen de grafieken $f(x) - g(x)$. Die hoogte is altijd positief, ook als een van beide grafieken (of allebei) onder de $x$-as ligt. Daarom:

:::formula Oppervlakte tussen twee grafieken
Als $f(x) \geq g(x)$ op $[a, b]$, dan is de oppervlakte tussen de grafieken

$$
\int_a^b \big(f(x) - g(x)\big)\,dx.
$$

Bovenste min onderste. De grenzen zijn vaak de $x$-coördinaten van de snijpunten.
:::

:::example Uitgewerkt voorbeeld: een lijn en een parabool
Bereken de oppervlakte van het gebied ingesloten door $y = x + 2$ en $y = x^2$.

*Stap 1: snijpunten.* $x^2 = x + 2$ geeft $x^2 - x - 2 = 0$, dus $(x - 2)(x + 1) = 0$: $x = -1$ of $x = 2$.

*Stap 2: wat ligt boven?* Testwaarde $x = 0$: de lijn geeft $2$, de parabool $0$. De **lijn** ligt boven.

*Stap 3: integreren.*

$$
\int_{-1}^{2} \big(x + 2 - x^2\big)\,dx = \Big[\tfrac12 x^2 + 2x - \tfrac13 x^3\Big]_{-1}^{2}.
$$

- $F(2) = 2 + 4 - \tfrac83 = \tfrac{10}{3}$.
- $F(-1) = \tfrac12 - 2 + \tfrac13 = -\tfrac76$.

$$
F(2) - F(-1) = \tfrac{10}{3} + \tfrac76 = \tfrac{20}{6} + \tfrac{7}{6} = \tfrac{27}{6} = \tfrac92.
$$

De oppervlakte is $4{,}5$.
:::

In de grafiek hieronder zie je beide functies. Het gekleurde gebied is de oppervlakte onder de lijn: $\int_{-1}^{2}(x + 2)\,dx = 7{,}5$. Daarbinnen ligt het gebied onder de parabool, met oppervlakte $\int_{-1}^{2} x^2\,dx = 3$. Het verschil $7{,}5 - 3 = 4{,}5$ is precies de oppervlakte tussen de grafieken: "boven min onder" is letterlijk het aftrekken van twee oppervlakten.

{{ widget: function-plot fn="x + 2" fn2="x^2" xmin=-2 xmax=3 ymin=-1 ymax=6 area=true lower=-1 upper=2 title="Lijn en parabool: oppervlakte tussen de grafieken" }}

### Als het teken wisselt

:::example Uitgewerkt voorbeeld: integraal nul, oppervlakte niet
Bekijk $f(x) = x^3 - x$ op $[-1, 1]$.

*De integraal:* $\displaystyle\int_{-1}^{1} (x^3 - x)\,dx = \Big[\tfrac14 x^4 - \tfrac12 x^2\Big]_{-1}^{1} = \left(\tfrac14 - \tfrac12\right) - \left(\tfrac14 - \tfrac12\right) = 0$.

*De oppervlakte:* de nulpunten zijn $x = -1$, $0$ en $1$. Op $[-1, 0]$ ligt de grafiek boven de as (test $x = -\tfrac12$: $-\tfrac18 + \tfrac12 > 0$), op $[0, 1]$ eronder. Splits dus:

$$
\int_{-1}^{0} (x^3 - x)\,dx = 0 - \left(\tfrac14 - \tfrac12\right) = \tfrac14, \qquad
\int_{0}^{1} (x^3 - x)\,dx = \left(\tfrac14 - \tfrac12\right) - 0 = -\tfrac14.
$$

Totale oppervlakte: $\tfrac14 + \tfrac14 = \tfrac12$. De integraal is $0$ omdat het positieve en het negatieve deel elkaar precies opheffen.
:::

:::tip Werkschema voor een oppervlakte
1. Schets de grafiek(en), al is het maar ruw.
2. Zoek de snijpunten (met de $x$-as of met elkaar).
3. Bepaal per deelinterval wat boven ligt (testwaarde).
4. Integreer per deelinterval "boven min onder" en tel de uitkomsten op.
:::

{{ exercises: 30-028, 30-029, 30-030, 30-031 }}
