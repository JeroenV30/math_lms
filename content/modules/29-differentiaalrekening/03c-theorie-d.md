# Stijgen, dalen en extremen

Je weet nu hoe je de afgeleide van een veeltermfunctie berekent. In deze les gebruik je die afgeleide om het **verloop** van een grafiek te beschrijven: waar stijgt hij, waar daalt hij, en waar liggen de toppen? Dit is de toepassing waar Fermat in de jaren 1630 al naar zocht, en waarvoor Leibniz zijn artikel van 1684 *Nova methodus pro maximis et minimis* noemde: een nieuwe methode voor maxima en minima.

## 1. Het teken van de afgeleide

In les 3 zag je de belangrijkste samenhang al.

- Waar $f'(x) > 0$, zijn alle raaklijnen stijgend: de grafiek van $f$ **stijgt**.
- Waar $f'(x) < 0$, zijn alle raaklijnen dalend: de grafiek van $f$ **daalt**.

Denk aan een wandelaar die van links naar rechts over de grafiek loopt. De afgeleide is de helling van het pad onder zijn voeten. Is die positief, dan gaat hij bergop; is ze negatief, dan bergaf. Bovenop een heuveltop loopt hij even horizontaal: daar is de helling nul.

:::definition Extreme waarden
- $f$ heeft een **maximum** (een **top**) in $x = p$ als $f(p)$ groter is dan de functiewaarden vlak links en vlak rechts van $p$. De waarde $f(p)$ heet de **maximale waarde**.
- $f$ heeft een **minimum** in $x = p$ als $f(p)$ kleiner is dan de functiewaarden vlak links en vlak rechts van $p$.
- Maxima en minima heten samen **extremen** of **extreme waarden**. Omdat het alleen om de buurt van $p$ gaat, spreekt men ook van een **lokaal** maximum of minimum.
:::

:::theory De afgeleide in een top
Heeft een gladde functie $f$ een maximum of minimum in $x = p$ (niet op de rand van het domein), dan is de raaklijn daar horizontaal:

$$
f'(p) = 0
$$

De kandidaten voor extremen vind je dus door de vergelijking $f'(x) = 0$ op te lossen.
:::

## 2. Toppen van parabolen, op een nieuwe manier

In module 21 vond je de top van een parabool $y = ax^2 + bx + c$ met de formule $x = -\frac{b}{2a}$. Met de afgeleide vind je hetzelfde, zonder formule te onthouden: $y' = 2ax + b = 0$ geeft $x = -\frac{b}{2a}$.

:::example Uitgewerkt voorbeeld 1: top van een dalparabool
Bepaal de top van $f(x) = 3x^2 - 12x + 7$.

1. **Afgeleide.** $f'(x) = 6x - 12$.
2. **Nul stellen.** $6x - 12 = 0$, dus $x = 2$.
3. **Hoogte.** $f(2) = 3 \cdot 4 - 24 + 7 = -5$.
4. **Soort.** De coëfficiënt van $x^2$ is positief: een dalparabool, dus een minimum. Je kunt het ook aan de afgeleide zien: voor $x < 2$ is $6x - 12 < 0$ (dalend), voor $x > 2$ is $6x - 12 > 0$ (stijgend).

De top is het minimum $(2; -5)$.
:::

{{ exercises: 29-023, 29-024 }}

## 3. Het tekenschema

Bij een parabool weet je vooraf of de top een maximum of een minimum is. Bij andere functies niet, en bovendien kan $f'(x) = 0$ meerdere oplossingen hebben. Dan maak je een **tekenschema** van de afgeleide.

:::theory Stappenplan: extremen met een tekenschema
1. Bereken $f'(x)$.
2. Los $f'(x) = 0$ op. Ontbind zo mogelijk in factoren.
3. Zet de nulpunten op een getallenlijn. Die verdelen de lijn in intervallen.
4. Bepaal in elk interval het teken van $f'$, bijvoorbeeld door een **testwaarde** in te vullen.
5. Lees af: van $+$ naar $-$ is een **maximum**, van $-$ naar $+$ een **minimum**. Verandert het teken niet, dan is er **geen** extreem.
6. Bereken de extreme waarden met $f$ (niet met $f'$).
:::

:::example Uitgewerkt voorbeeld 2: f(x) = x³ − 3x
1. **Afgeleide.** $f'(x) = 3x^2 - 3$.
2. **Nulpunten.** $3x^2 - 3 = 0 \Rightarrow x^2 = 1 \Rightarrow x = -1$ of $x = 1$. In factoren: $f'(x) = 3(x + 1)(x - 1)$.
3. **Intervallen.** $x < -1$, $-1 < x < 1$ en $x > 1$.
4. **Testwaarden.**
   - $x = -2$: $f'(-2) = 12 - 3 = 9 > 0$.
   - $x = 0$: $f'(0) = -3 < 0$.
   - $x = 2$: $f'(2) = 9 > 0$.
5. **Aflezen.** Bij $x = -1$ gaat het teken van $+$ naar $-$: maximum. Bij $x = 1$ van $-$ naar $+$: minimum.
6. **Waarden.** $f(-1) = -1 + 3 = 2$ en $f(1) = 1 - 3 = -2$.

Conclusie: maximum $(-1; 2)$, minimum $(1; -2)$. De functie stijgt voor $x < -1$, daalt tussen $-1$ en $1$, en stijgt voor $x > 1$.
:::

![Tekenschema van de afgeleide](/images/diagrams/m29-tekenschema.svg "De grafiek van f(x) = x³ − 3x met het tekenschema van f′(x) = 3x² − 3: plus, nul, min, nul, plus.")

Bekijk het schema en de grafiek samen. Waar de afgeleide positief is, gaat de grafiek omhoog; waar ze negatief is, omlaag. De nulpunten van $f'$ liggen precies onder de toppen.

:::tip Testwaarden slim kiezen
Kies testwaarden waar het rekenen gemakkelijk is, zoals $0$, $\pm 1$ of $\pm 10$. Je hebt alleen het **teken** nodig, niet de precieze waarde. Staat de afgeleide in factoren, dan kun je vaak zelfs zonder rekenen zien welk teken elke factor heeft.
:::

{{ exercises: 29-025, 29-026, 29-027 }}

## 4. Pas op: f′(x) = 0 is geen garantie

Dat $f'(p) = 0$, betekent alleen dat de raaklijn in $p$ horizontaal is. Er hoeft geen top te zijn.

:::example Uitgewerkt voorbeeld 3: f(x) = x³
$f'(x) = 3x^2$, en $3x^2 = 0$ geeft $x = 0$. Maar voor $x < 0$ is $3x^2 > 0$ en voor $x > 0$ ook. Het teken verandert niet: de functie stijgt overal, en in $x = 0$ "pauzeert" ze alleen even. De grafiek heeft in $(0; 0)$ een horizontale raaklijn, maar geen top. Zo'n punt heet een **zadelpunt** of een **buigpunt met horizontale raaklijn**.
:::

Daarom is stap 4 van het stappenplan, het tekenschema, essentieel. Alleen $f'(x) = 0$ oplossen is niet genoeg.

:::example Uitgewerkt voorbeeld 4: f(x) = x⁴ − 2x²
1. $f'(x) = 4x^3 - 4x = 4x(x^2 - 1) = 4x(x + 1)(x - 1)$.
2. Nulpunten: $x = -1$, $x = 0$, $x = 1$.
3. Tekens (testwaarden $-2$, $-\frac{1}{2}$, $\frac{1}{2}$, $2$):

| interval | $x < -1$ | $-1 < x < 0$ | $0 < x < 1$ | $x > 1$ |
|---|---|---|---|---|
| teken $f'$ | $-$ | $+$ | $-$ | $+$ |
| $f$ | daalt | stijgt | daalt | stijgt |

4. Dus: minimum bij $x = -1$, maximum bij $x = 0$, minimum bij $x = 1$.
5. Waarden: $f(-1) = 1 - 2 = -1$, $f(0) = 0$, $f(1) = -1$.

De grafiek heeft de vorm van een W: twee minima $(-1; -1)$ en $(1; -1)$ en daartussen een maximum $(0; 0)$.
:::

Bekijk de grafiek en zoek met het raakpunt de drie plekken waar de raaklijn horizontaal is.

{{ widget: function-plot fn="x^4-2*x^2" tangent=true x0=0.5 xmin=-2 xmax=2 ymin=-2 ymax=3 title="y = x⁴ − 2x²: drie horizontale raaklijnen" }}

{{ exercises: 29-028, 29-029 }}

## 5. Grootste en kleinste waarde op een interval

In toepassingen is het domein vaak begrensd. Een lengte kan niet negatief zijn, een tijd loopt van 0 tot een eindtijdstip. Dan kan de grootste of kleinste waarde ook op de **rand** van het interval liggen, waar de afgeleide helemaal niet nul hoeft te zijn.

:::theory Grootste en kleinste waarde op [a; b]
1. Bepaal de extremen binnen het interval met de afgeleide.
2. Bereken ook de functiewaarden in de randpunten $a$ en $b$.
3. Vergelijk alle gevonden waarden: de grootste is de **grootste waarde** (absoluut maximum), de kleinste is de **kleinste waarde**.
:::

:::example Uitgewerkt voorbeeld 5: f(x) = x³ − 3x op [0; 3]
1. Binnen $[0; 3]$ heeft $f'(x) = 3x^2 - 3$ alleen het nulpunt $x = 1$ (een minimum, zie voorbeeld 2): $f(1) = -2$.
2. Randen: $f(0) = 0$ en $f(3) = 27 - 9 = 18$.
3. Vergelijken: de kleinste waarde is $-2$ (bij $x = 1$), de grootste waarde is $18$ (bij $x = 3$, op de rand).

Het lokale maximum $(-1; 2)$ ligt buiten het interval en telt niet mee.
:::

:::warning Lokaal is niet altijd absoluut
Een lokaal maximum is alleen het hoogste punt *in de buurt*. Het lokale maximum $f(-1) = 2$ van $f(x) = x^3 - 3x$ is lang niet de grootste waarde van de functie: voor grote $x$ wordt $x^3 - 3x$ willekeurig groot. Vraagt een opgave naar de grootste waarde, controleer dan altijd de randen.
:::

{{ exercise: 29-030 }}
