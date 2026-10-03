# De afgeleide als functie

In de vorige les berekende je de helling van $y = x^2$ in het punt $(1; 1)$: dat was 2. Maar je kunt dezelfde vraag stellen voor elk ander punt van de parabool. In deze les doe je de berekening in één keer voor **alle** punten. Het resultaat is een nieuwe functie, die bij elke $x$ de helling van de grafiek geeft: de **afgeleide**.

## 1. Van één punt naar alle punten

Herhaal de berekening voor $f(x) = x^2$ in een paar punten. Met dezelfde methode als in les 2 vind je:

| punt | $(-2; 4)$ | $(-1; 1)$ | $(0; 0)$ | $(1; 1)$ | $(2; 4)$ | $(3; 9)$ |
|---|---|---|---|---|---|---|
| helling | $-4$ | $-2$ | $0$ | $2$ | $4$ | $6$ |

Er zit een duidelijk patroon in: de helling is steeds **twee keer de $x$-coördinaat**. Dat vermoeden kun je bewijzen door de berekening niet met een getal, maar met een willekeurige $x$ uit te voeren.

$$
\frac{f(x + h) - f(x)}{h} = \frac{(x + h)^2 - x^2}{h} = \frac{x^2 + 2xh + h^2 - x^2}{h} = \frac{2xh + h^2}{h} = 2x + h
$$

Als $h$ naar 0 gaat, blijft $2x$ over. In elk punt $(x; x^2)$ heeft de parabool dus helling $2x$. In één berekening heb je de helling van de parabool in al zijn oneindig veel punten gevonden.

:::definition De afgeleide
De **afgeleide** van een functie $f$ is de functie $f'$ (spreek uit: "$f$ accent") met

$$
f'(x) = \lim_{h \to 0} \frac{f(x + h) - f(x)}{h}
$$

$f'(x)$ is de helling van de grafiek van $f$ in het punt $(x; f(x))$, ofwel de momentane verandering van $f$ bij $x$. Het berekenen van de afgeleide heet **differentiëren**.
:::

Voor $f(x) = x^2$ is dus $f'(x) = 2x$. De helling in $(3; 9)$ vind je nu door in te vullen: $f'(3) = 6$. Je hoeft niet opnieuw met $h$ te rekenen.

### Notaties

Er zijn verschillende schrijfwijzen voor de afgeleide, en je zult ze allemaal tegenkomen.

| notatie | spreek uit | herkomst |
|---|---|---|
| $f'(x)$ | "$f$ accent van $x$" | Lagrange (eind 18e eeuw) |
| $\dfrac{dy}{dx}$ | "$dy$ naar $dx$" | Leibniz (1675) |
| $\dot{y}$ | "$y$ punt" | Newton, vooral bij afgeleiden naar de tijd |

De notatie van Leibniz, $\frac{dy}{dx}$, herinnert aan waar de afgeleide vandaan komt: een quotiënt $\frac{\Delta y}{\Delta x}$ waarvan de verschillen oneindig klein worden gemaakt. Je schrijft bijvoorbeeld

$$
y = x^2 \quad\Rightarrow\quad \frac{dy}{dx} = 2x
$$

In de natuurkunde zie je ook $\frac{ds}{dt}$ voor de snelheid: de afgeleide van de afstand $s$ naar de tijd $t$.

## 2. Meer afgeleiden met de definitie

:::example Uitgewerkt voorbeeld 1: f(x) = x³
1. **Uitwerken.** $(x + h)^3 = (x + h)(x + h)^2 = (x + h)(x^2 + 2xh + h^2) = x^3 + 3x^2h + 3xh^2 + h^3$.
2. **Verschil.** $f(x + h) - f(x) = 3x^2h + 3xh^2 + h^3$. De term $x^3$ valt weg, zoals altijd: het verschil bevat alleen nog termen met $h$.
3. **Delen door $h$.** $\dfrac{3x^2h + 3xh^2 + h^3}{h} = 3x^2 + 3xh + h^2$.
4. **Limiet.** Als $h \to 0$, worden $3xh$ en $h^2$ willekeurig klein. Er blijft $3x^2$ over.

Dus: $f(x) = x^3$ heeft afgeleide $f'(x) = 3x^2$. Controle met les 2: in $x = 2$ geeft dit $3 \cdot 4 = 12$, precies wat de tabel opleverde.
:::

:::example Uitgewerkt voorbeeld 2: een lineaire en een constante functie
**Lineair:** $g(x) = 5x - 3$.

$$
\frac{g(x + h) - g(x)}{h} = \frac{5(x + h) - 3 - (5x - 3)}{h} = \frac{5h}{h} = 5
$$

Dus $g'(x) = 5$. Dat is logisch: de grafiek is een rechte lijn met helling 5, en de raaklijn aan een lijn is de lijn zelf.

**Constant:** $k(x) = 7$. Dan is $k(x + h) - k(x) = 7 - 7 = 0$, dus $k'(x) = 0$. Een horizontale lijn heeft overal helling 0: er verandert niets.
:::

:::example Uitgewerkt voorbeeld 3: f(x) = x² − 4x
1. $f(x + h) = (x + h)^2 - 4(x + h) = x^2 + 2xh + h^2 - 4x - 4h$.
2. $f(x + h) - f(x) = 2xh + h^2 - 4h$.
3. Delen door $h$: $2x + h - 4$.
4. Limiet: $f'(x) = 2x - 4$.

Valt je iets op? De afgeleide van $x^2$ is $2x$ en de afgeleide van $-4x$ is $-4$. De afgeleide van de som is de som van de afgeleiden. In de volgende les wordt dat een rekenregel.
:::

:::warning Afgeleide en functiewaarde niet verwarren
$f(3)$ is de **hoogte** van de grafiek bij $x = 3$; $f'(3)$ is de **helling** daar. Voor $f(x) = x^2 - 4x$ is $f(3) = -3$ (de grafiek ligt onder de $x$-as) maar $f'(3) = 2$ (de grafiek stijgt). Een grafiek kan laag liggen en steil stijgen, of hoog liggen en dalen.
:::

{{ exercises: 29-009, 29-010, 29-011 }}

## 3. De grafiek van de afgeleide

Omdat $f'$ zelf een functie is, kun je er een grafiek van tekenen. In de grafiek hieronder zie je in blauw $f(x) = x^2 - 4x$ en in bruin de afgeleide $f'(x) = 2x - 4$. Schuif het raakpunt en vergelijk de helling van de raaklijn met de hoogte van de bruine lijn bij dezelfde $x$.

{{ widget: function-plot fn="x^2-4*x" fn2="2*x-4" tangent=true x0=0 xmin=-2 xmax=6 ymin=-6 ymax=8 title="f(x) = x² − 4x en haar afgeleide" }}

Lees de samenhang af.

- Voor $x < 2$ **daalt** de parabool. De raaklijnen hebben een negatieve helling, en de grafiek van $f'$ ligt **onder** de $x$-as.
- Bij $x = 2$ ligt de **top** van de parabool. De raaklijn is horizontaal: $f'(2) = 0$. De grafiek van $f'$ snijdt daar de $x$-as.
- Voor $x > 2$ **stijgt** de parabool, en is $f'(x) > 0$.

:::theory Afgeleide en het verloop van de grafiek
- Is $f'(x) > 0$ op een interval, dan **stijgt** de grafiek van $f$ daar.
- Is $f'(x) < 0$ op een interval, dan **daalt** de grafiek van $f$ daar.
- In een top (hoogste of laagste punt) van een gladde grafiek is de raaklijn horizontaal: $f'(x) = 0$.
- Hoe groter $|f'(x)|$, hoe steiler de grafiek.
:::

Dit is het begin van een krachtig idee: met de afgeleide kun je toppen vinden zonder de grafiek te tekenen. In les 4 werk je dat uit.

## 4. De betekenis van een afgeleide in een context

Een afgeleide is altijd een **snelheid van verandering**: hoeveel verandert de uitvoer per eenheid invoer, op dat moment? De eenheid van de afgeleide is de eenheid van $y$ gedeeld door de eenheid van $x$.

| functie | betekenis | afgeleide | eenheid afgeleide |
|---|---|---|---|
| $s(t)$: afstand (m) na $t$ s | plaats | snelheid $s'(t)$ | m/s |
| $v(t)$: snelheid (m/s) | snelheid | versnelling $v'(t)$ | m/s² |
| $K(q)$: kosten (€) bij $q$ stuks | totale kosten | marginale kosten $K'(q)$ | € per stuk |
| $N(t)$: aantal bacteriën na $t$ uur | populatie | groeisnelheid $N'(t)$ | bacteriën per uur |

:::example Uitgewerkt voorbeeld 4: marginale kosten
Een werkplaats maakt meubels. De kosten van $q$ stoelen per week zijn (in euro) $K(q) = 400 + 30q + 0{,}5q^2$. Met de rekenregels van de volgende les vind je $K'(q) = 30 + q$. Wat betekent $K'(20) = 50$?

Bij een productie van 20 stoelen kost elke **extra** stoel ongeveer € 50. Controleer dat met de kosten zelf: $K(20) = 400 + 600 + 200 = 1200$ en $K(21) = 400 + 630 + 220{,}50 = 1250{,}50$. Het verschil is € 50,50, inderdaad ongeveer € 50. De afgeleide is de helling van de raaklijn; het werkelijke verschil over één stap wijkt daar een klein beetje van af, omdat de grafiek krom is.
:::

:::tip Afgeleide als vergrootglas
Een handige vuistregel: als $x$ een klein beetje toeneemt, met $\Delta x$, dan neemt $f(x)$ ongeveer toe met $f'(x) \cdot \Delta x$. Voor de vallende steen geldt op $t = 2$ dat $s'(2) = 20$; in de volgende $0{,}01$ seconde valt hij dus ongeveer $20 \cdot 0{,}01 = 0{,}2$ meter. (Exact was het $0{,}2005$ meter, zie les 2.)
:::

{{ exercises: 29-012, 29-013 }}
