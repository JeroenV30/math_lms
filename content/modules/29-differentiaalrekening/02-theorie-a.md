# Van gemiddelde naar momentane verandering

In deze les maak je de vraag uit de introductie precies: wat is de snelheid van een steen *op één moment*, en wat is de helling van een kromme *in één punt*? Je begint met iets wat je al kent, de helling van een rechte lijn, en bouwt daar stap voor stap op voort.

## 1. Terug naar de rechte lijn

Bij een lineaire functie, zoals $f(x) = 3x + 1$, verandert $y$ steeds met hetzelfde bedrag als $x$ met 1 toeneemt. Neem twee willekeurige punten op de lijn, bijvoorbeeld bij $x = 2$ en $x = 5$:

$$
\frac{\Delta y}{\Delta x} = \frac{f(5) - f(2)}{5 - 2} = \frac{16 - 7}{3} = 3
$$

Welke twee punten je ook kiest, je vindt steeds 3. Dat getal is de **helling** of het **hellingsgetal** van de lijn (module 19). Het symbool $\Delta$ (de Griekse hoofdletter delta) betekent "verschil" of "toename": $\Delta x$ is de toename van $x$, $\Delta y$ de bijbehorende toename van $y$.

Bij een kromme lijn, zoals de grafiek van $f(x) = x^2$, werkt dit niet meer zo eenvoudig. Tussen $x = 0$ en $x = 1$ stijgt $y$ met 1, tussen $x = 1$ en $x = 2$ met 3, tussen $x = 2$ en $x = 3$ met 5. De grafiek wordt steeds steiler. Wat je met twee punten berekent, hangt dus af van **welke** twee punten je kiest.

## 2. Gemiddelde verandering: het differentiequotiënt

Toch blijft de berekening met twee punten zinvol. Ze vertelt je hoe snel de functie **gemiddeld** verandert tussen die twee punten.

:::definition Differentiequotiënt
De **gemiddelde verandering** van een functie $f$ op het interval $[a; b]$ is

$$
\frac{\Delta y}{\Delta x} = \frac{f(b) - f(a)}{b - a}
$$

Dit quotiënt heet het **differentiequotiënt** van $f$ op $[a; b]$. Meetkundig is het de helling van de rechte lijn door de punten $A(a; f(a))$ en $B(b; f(b))$. Zo'n lijn door twee punten van een grafiek heet een **koorde**.
:::

![Differentiequotiënt als helling van een koorde](/images/diagrams/m29-differentiequotient.svg "Het differentiequotiënt Δy/Δx op [a; b] is de helling van de koorde AB.")

Het woord "differentie" betekent verschil: je deelt het verschil van de $y$-waarden door het verschil van de $x$-waarden. Let altijd op de **eenheid**. Is $y$ een afstand in meters en $x$ een tijd in seconden, dan is het differentiequotiënt een gemiddelde snelheid in meter per seconde. Is $y$ een temperatuur in °C en $x$ een tijd in uren, dan krijg je graden per uur.

:::example Uitgewerkt voorbeeld 1: de vallende steen gemiddeld
De steen uit de introductie valt volgens $s(t) = 5t^2$ (meter, $t$ in seconden). Bereken de gemiddelde snelheid tussen $t = 1$ en $t = 3$.

1. **Waarden opzoeken.** $s(1) = 5 \cdot 1^2 = 5$ en $s(3) = 5 \cdot 3^2 = 45$.
2. **Verschillen.** $\Delta s = 45 - 5 = 40$ meter, $\Delta t = 3 - 1 = 2$ seconden.
3. **Delen.** $\dfrac{\Delta s}{\Delta t} = \dfrac{40}{2} = 20$ m/s.

Antwoord: tussen $t = 1$ en $t = 3$ valt de steen gemiddeld 20 meter per seconde. In het begin van dat interval gaat hij langzamer, aan het eind sneller.
:::

:::example Uitgewerkt voorbeeld 2: een negatieve gemiddelde verandering
Gegeven is $f(x) = x^2 - 4x$. Bereken het differentiequotiënt op $[0; 3]$.

1. $f(0) = 0 - 0 = 0$ en $f(3) = 9 - 12 = -3$.
2. $\Delta y = -3 - 0 = -3$ en $\Delta x = 3 - 0 = 3$.
3. $\dfrac{\Delta y}{\Delta x} = \dfrac{-3}{3} = -1$.

Het differentiequotiënt is negatief: de koorde van $(0; 0)$ naar $(3; -3)$ daalt. Dat betekent niet dat de grafiek op het hele interval daalt. De parabool daalt tot $x = 2$ en stijgt daarna weer; *gemiddeld* is het resultaat een daling van 1 per eenheid.
:::

:::warning Volgorde consequent houden
Trek in teller en noemer in **dezelfde volgorde** af: eerst het rechterpunt, dan het linkerpunt (of allebei andersom). $\frac{f(b) - f(a)}{a - b}$ geeft precies het tegengestelde van het juiste antwoord.
:::

{{ exercises: 29-001, 29-002, 29-003 }}

## 3. Momentane verandering: het interval steeds kleiner maken

Nu het eigenlijke probleem: hoe snel gaat de steen op het tijdstip $t = 2$? Een snelheidsmeter in een auto geeft zo'n "momentane" snelheid, maar wiskundig is het een raadsel. Op één tijdstip verstrijkt geen tijd: $\Delta t = 0$ en $\Delta s = 0$, en $\frac{0}{0}$ is geen getal.

Het idee is om het tijdstip $t = 2$ te benaderen met **heel korte intervallen**. Neem een klein stapje $h$ en bereken de gemiddelde snelheid op $[2; 2 + h]$:

$$
\frac{s(2 + h) - s(2)}{h}
$$

Maak $h$ steeds kleiner en kijk wat er gebeurt.

| $h$ | $s(2 + h)$ | $s(2 + h) - s(2)$ | gemiddelde snelheid |
|---|---|---|---|
| $1$ | $45$ | $25$ | $25$ |
| $0{,}1$ | $22{,}05$ | $2{,}05$ | $20{,}5$ |
| $0{,}01$ | $20{,}2005$ | $0{,}2005$ | $20{,}05$ |
| $0{,}001$ | $20{,}020005$ | $0{,}020005$ | $20{,}005$ |

Je kunt $h$ ook negatief nemen; dan kijk je naar een interval net *vóór* $t = 2$:

| $h$ | gemiddelde snelheid |
|---|---|
| $-0{,}1$ | $19{,}5$ |
| $-0{,}01$ | $19{,}95$ |
| $-0{,}001$ | $19{,}995$ |

Van beide kanten komen de gemiddelde snelheden steeds dichter bij **20**. Het is natuurlijk om te zeggen: op het tijdstip $t = 2$ heeft de steen een snelheid van precies 20 m/s.

Met een beetje algebra zie je waarom. Werk de teller uit:

$$
s(2 + h) - s(2) = 5(2 + h)^2 - 20 = 5(4 + 4h + h^2) - 20 = 20h + 5h^2
$$

Deel door $h$ (dat mag, want $h \neq 0$):

$$
\frac{20h + 5h^2}{h} = 20 + 5h
$$

Nu is het helder. De gemiddelde snelheid op $[2; 2 + h]$ is $20 + 5h$. Voor $h = 0{,}1$ is dat $20{,}5$, voor $h = 0{,}001$ is het $20{,}005$. Hoe kleiner $h$, hoe kleiner de "extra" $5h$. Als $h$ naar 0 gaat, gaat $20 + 5h$ naar 20.

:::definition Momentane verandering (intuïtief)
De **momentane verandering** van $f$ in $x = a$ is het getal waar de differentiequotiënten

$$
\frac{f(a + h) - f(a)}{h}
$$

naartoe gaan als $h$ steeds dichter bij 0 komt (van beide kanten). We schrijven dat met het **limietteken**:

$$
\lim_{h \to 0} \frac{f(a + h) - f(a)}{h}
$$

Spreek uit: "de limiet voor $h$ naar nul van ...".
:::

:::warning Je mag h niet gewoon nul maken
In de breuk $\frac{s(2+h) - s(2)}{h}$ mag je niet $h = 0$ invullen: dan krijg je $\frac{0}{0}$. De truc is om **eerst** te vereenvoudigen (hier tot $20 + 5h$), en pas **daarna** te kijken wat er gebeurt als $h$ naar nul gaat. Precies over deze stap ontstond in de achttiende eeuw een felle discussie; daarover lees je in het historisch intermezzo.
:::

## 4. De raaklijn als limiet van koorden

Wat betekent dit meetkundig? Neem de parabool $f(x) = x^2$ en het punt $P(1; 1)$. Kies een tweede punt $Q$ op de parabool, bij $x = 1 + h$. De koorde $PQ$ heeft helling

$$
\frac{f(1 + h) - f(1)}{h} = \frac{(1 + h)^2 - 1}{h} = \frac{2h + h^2}{h} = 2 + h
$$

Laat $Q$ nu over de parabool naar $P$ schuiven, dus maak $h$ steeds kleiner.

| $h$ | $2$ | $1$ | $0{,}5$ | $0{,}1$ | $0{,}01$ | $-0{,}01$ | $-0{,}1$ |
|---|---|---|---|---|---|---|---|
| helling koorde $PQ$ | $4$ | $3$ | $2{,}5$ | $2{,}1$ | $2{,}01$ | $1{,}99$ | $1{,}9$ |

![Koorden naderen de raaklijn](/images/diagrams/m29-koorden-raaklijn.svg "Als Q naar P schuift, draaien de koorden PQ naar één grensstand: de raaklijn in P, met helling 2.")

De koorden draaien naar één vaste grensstand. Die grenslijn heet de **raaklijn** aan de grafiek in $P$. Haar helling is de limiet van de hellingen van de koorden, hier 2.

:::definition Raaklijn en helling in een punt
De **raaklijn** aan de grafiek van $f$ in het punt $P(a; f(a))$ is de lijn door $P$ met helling

$$
\lim_{h \to 0} \frac{f(a + h) - f(a)}{h}
$$

Dit getal heet de **helling van de grafiek in $P$**, of de **richtingscoëfficiënt van de raaklijn**. Het is hetzelfde getal als de momentane verandering van $f$ in $x = a$.
:::

Een raaklijn "scheert" in de buurt van $P$ langs de grafiek. Zoom je ver genoeg in op $P$, dan zijn grafiek en raaklijn nauwelijks nog van elkaar te onderscheiden: een gladde kromme ziet er van heel dichtbij uit als een rechte lijn. Dat is de diepere reden waarom de differentiaalrekening werkt. Op kleine schaal mag je een kromme vervangen door een lijn, en met lijnen kun je rekenen.

Probeer het zelf in de grafiek hieronder. Schuif het raakpunt over de parabool en kijk hoe de helling van de raaklijn verandert. Bij $x = 1$ lees je helling 2 af; bij $x = 0$ is de raaklijn horizontaal; links van de top is de helling negatief.

{{ widget: function-plot fn="x^2" tangent=true x0=1 xmin=-3 xmax=3 ymin=-2 ymax=9 title="Raaklijn aan y = x²" }}

:::tip Wat de raaklijn niet is
Op school leer je soms dat een raaklijn een lijn is die de grafiek "in één punt raakt". Bij een cirkel klopt dat, maar bij andere grafieken niet. De raaklijn aan $y = x^3$ in het punt $(1; 1)$ snijdt de grafiek bijvoorbeeld nog een tweede keer, bij $x = -2$. Wat telt, is het gedrag **vlak bij** het raakpunt: daar valt de raaklijn bijna samen met de grafiek.
:::

## 5. Een helling schatten met een tabel

Soms is de algebra lastig, maar kun je de helling toch nauwkeurig schatten met een rekenmachine. Je berekent differentiequotiënten voor steeds kleinere $h$ en kijkt waar ze naartoe gaan.

:::example Uitgewerkt voorbeeld 3: de helling van y = x³ in x = 2
Gevraagd: de helling van de grafiek van $f(x) = x^3$ in het punt $(2; 8)$.

1. **Opzet.** Bereken $\dfrac{f(2 + h) - f(2)}{h} = \dfrac{(2 + h)^3 - 8}{h}$ voor kleine $h$.
2. **$h = 0{,}1$.** $2{,}1^3 = 9{,}261$, dus $\dfrac{9{,}261 - 8}{0{,}1} = \dfrac{1{,}261}{0{,}1} = 12{,}61$.
3. **$h = 0{,}01$.** $2{,}01^3 = 8{,}120601$, dus $\dfrac{0{,}120601}{0{,}01} = 12{,}0601$.
4. **$h = 0{,}001$.** $2{,}001^3 = 8{,}012006001$, dus $\dfrac{0{,}012006001}{0{,}001} = 12{,}006001$.
5. **Conclusie.** De waarden naderen 12. De helling in $(2; 8)$ is 12.

Controle met algebra: $(2 + h)^3 = 8 + 12h + 6h^2 + h^3$, dus het differentiequotiënt is $12 + 6h + h^2$. Voor $h \to 0$ blijft 12 over.
:::

:::example Uitgewerkt voorbeeld 4: een context
De hoeveelheid water in een vijver (in m³) is $t$ uur na het begin van een regenbui gelijk aan $W(t) = 200 + 4t^2$. Hoe snel neemt de hoeveelheid water toe op $t = 3$?

1. **Differentiequotiënt.** $W(3) = 236$ en $W(3 + h) = 200 + 4(9 + 6h + h^2) = 236 + 24h + 4h^2$.
2. **Delen door $h$.** $\dfrac{W(3 + h) - W(3)}{h} = \dfrac{24h + 4h^2}{h} = 24 + 4h$.
3. **Limiet.** Voor $h \to 0$ nadert dit 24.

Antwoord: op $t = 3$ stroomt er 24 m³ per uur bij. Let op de eenheid: m³ gedeeld door uur.
:::

{{ exercises: 29-004, 29-005, 29-006, 29-007, 29-008 }}

## 6. Samengevat

- Het **differentiequotiënt** $\frac{f(b) - f(a)}{b - a}$ is de gemiddelde verandering op $[a; b]$, en meetkundig de helling van een **koorde**.
- De **momentane verandering** in $x = a$ is wat het differentiequotiënt $\frac{f(a + h) - f(a)}{h}$ nadert als $h$ naar 0 gaat.
- De **raaklijn** is de grensstand van de koorden; haar helling is de momentane verandering.
- Rekenmethode: werk $f(a + h) - f(a)$ uit, deel door $h$, en laat pas daarna $h$ naar nul gaan.

In de volgende les doe je deze berekening niet voor één punt, maar voor **alle** punten tegelijk. Dat levert een nieuwe functie op: de afgeleide.
