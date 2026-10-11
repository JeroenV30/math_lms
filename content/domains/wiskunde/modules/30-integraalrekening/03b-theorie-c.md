# Primitieven: differentiëren in omgekeerde richting

Riemann-sommen werken altijd, maar ze zijn bewerkelijk, en ze geven een benadering. Voor $\int_0^1 x^2\,dx$ had je een formule voor de som van kwadraten nodig om de exacte waarde $\tfrac13$ te vinden. Voor $x^3$, $x^4$ of $\sqrt{x}$ zou je telkens een nieuwe somformule moeten bedenken. Dat is precies waar de wiskundigen vóór Newton en Leibniz steeds op vastliepen.

De doorbraak kwam uit een onverwachte hoek: de **afgeleide**. In deze les leer je eerst de techniek, het *primitiveren*. In de volgende les zie je waarom die techniek oppervlakten oplevert.

## 1. Terugrekenen

In module 29 ging je van een functie naar haar afgeleide:

$$
F(x) = x^3 \quad\Longrightarrow\quad F'(x) = 3x^2.
$$

Nu draai je de vraag om. Iemand geeft je de afgeleide, en jij zoekt de functie waar die afgeleide bij hoort.

:::question Probeer het eerst
Welke functie heeft als afgeleide $2x$? En welke als afgeleide $3x^2$? En $x^2$, zonder de 3 ervoor?
:::

De eerste twee herken je direct uit de differentieerregels: $(x^2)' = 2x$ en $(x^3)' = 3x^2$. Bij de derde moet je even nadenken. $x^3$ geeft $3x^2$, dat is drie keer te veel. Dus neem een derde daarvan:

$$
\left(\tfrac13 x^3\right)' = \tfrac13 \cdot 3x^2 = x^2.
$$

:::definition Primitieve functie
Een functie $F$ heet een **primitieve** van $f$ als

$$
F'(x) = f(x)
$$

voor alle $x$ in het domein. Het vinden van een primitieve heet **primitiveren**.
:::

Het woord "primitief" betekent hier niet "eenvoudig" maar "oorspronkelijk": $F$ is de functie waar $f$ uit is *voortgekomen* door te differentiëren. In het Engels heet een primitieve een *antiderivative*, en dat is eigenlijk een duidelijkere naam.

## 2. Waarom er altijd een + C bij hoort

$\tfrac13 x^3$ is een primitieve van $x^2$. Maar $\tfrac13 x^3 + 5$ is dat ook, want de afgeleide van de constante $5$ is $0$. En $\tfrac13 x^3 - 17$, en $\tfrac13 x^3 + \pi$. Elke constante mag erbij.

:::theory Alle primitieven
Als $F$ een primitieve is van $f$, dan zijn **alle** primitieven van $f$ van de vorm

$$
F(x) + C, \qquad C \text{ een willekeurige constante.}
$$

De constante $C$ heet de **integratieconstante**.
:::

Dat er niet *meer* primitieven zijn dan deze, is minder vanzelfsprekend. Stel dat $F$ en $G$ allebei een primitieve van $f$ zijn. Dan is

$$
(G - F)' = G' - F' = f - f = 0.
$$

De functie $G - F$ heeft dus overal helling $0$. Een grafiek die nergens stijgt en nergens daalt is een horizontale lijn (dit is intuïtief duidelijk, en een stelling uit de analyse bevestigt het). Dus $G - F$ is een constante, en $G = F + C$.

Meetkundig betekent dit: de grafieken van alle primitieven zijn **verticaal verschoven kopieën** van elkaar. Ze hebben bij elke $x$ dezelfde helling, alleen een andere hoogte. Schuif hieronder met $c$ en kijk: de blauwe grafiek $y = \tfrac13 x^3 + c$ gaat op en neer, maar de vorm, en dus de helling in elk punt, verandert niet. De bruine grafiek is $y = x^2$: de helling van de blauwe grafiek bij elke $x$.

{{ widget: function-plot fn="x^3/3 + c" fn2="x^2" c=0 cmin=-4 cmax=4 cstep=0.5 xmin=-3 xmax=3 ymin=-6 ymax=8 title="Primitieven van x² verschillen een constante" }}

### Eén primitieve kiezen met een beginwaarde

Vaak wil je niet de hele familie, maar die ene primitieve die door een gegeven punt gaat. Dat punt heet een **beginwaarde** of **randvoorwaarde**.

:::example Uitgewerkt voorbeeld: de primitieve door een punt
Bepaal de primitieve $F$ van $f(x) = 2x$ waarvoor $F(3) = 4$.

*Stap 1: alle primitieven.* $F(x) = x^2 + C$.

*Stap 2: beginwaarde invullen.* $F(3) = 9 + C = 4$, dus $C = -5$.

*Stap 3: antwoord.* $F(x) = x^2 - 5$.

*Controle.* $F'(x) = 2x$ ✓ en $F(3) = 9 - 5 = 4$ ✓.
:::

:::tip Controleer een primitieve altijd door te differentiëren
Primitiveren is gokken met een strategie; differentiëren is een vaste procedure. Het is dus altijd mogelijk, en heel verstandig, om je primitieve te controleren: differentieer je antwoord en kijk of de oorspronkelijke functie terugkomt.
:::

In de oefeningen van deze module wordt steeds een primitieve gevraagd met een **gegeven beginwaarde**, meestal $F(0) = 0$. Dan is er precies één goed antwoord. Typ geen $C$ in je antwoord.

## 3. De machtsregel voor primitieven

Uit module 29 ken je de machtsregel voor afgeleiden: $(x^n)' = n x^{n-1}$. De exponent gaat één omlaag en de oude exponent komt ervoor. Bij primitiveren doe je precies het omgekeerde, in omgekeerde volgorde:

1. verhoog de exponent met $1$;
2. deel door de nieuwe exponent.

:::formula Machtsregel voor primitieven
$$
f(x) = x^n \quad\Longrightarrow\quad F(x) = \frac{x^{n+1}}{n+1} + C \qquad (n \neq -1)
$$
:::

Controleer de regel door te differentiëren: $\left(\dfrac{x^{n+1}}{n+1}\right)' = \dfrac{(n+1)\,x^{n}}{n+1} = x^n$. ✓

Een paar gevallen:

| $f(x)$ | primitieve $F(x)$ (met $C = 0$) | controle $F'(x)$ |
|---|---|---|
| $1 = x^0$ | $x$ | $1$ |
| $x$ | $\tfrac12 x^2$ | $x$ |
| $x^2$ | $\tfrac13 x^3$ | $x^2$ |
| $x^3$ | $\tfrac14 x^4$ | $x^3$ |
| $x^7$ | $\tfrac18 x^8$ | $x^7$ |

En een constante? Een primitieve van $5$ is $5x$, want $(5x)' = 5$.

:::warning De uitzondering n = −1
Voor $n = -1$ zou de regel $\dfrac{x^0}{0}$ geven: delen door nul. De functie $\dfrac1x = x^{-1}$ heeft wél een primitieve, maar dat is geen macht van $x$: het is de natuurlijke logaritme, $\ln x$ (voor $x > 0$). Dat verband tussen de hyperbool en de logaritme werd in de zeventiende eeuw ontdekt, onder anderen door Grégoire de Saint-Vincent. In deze module vermijden we $\dfrac1x$.
:::

## 4. Sommen en constante factoren

Net als bij differentiëren mag je een som termsgewijs primitiveren, en een constante factor blijft gewoon staan. Dat volgt direct uit de rekenregels voor afgeleiden: als $F' = f$ en $G' = g$, dan is $(F + G)' = f + g$ en $(c \cdot F)' = c \cdot f$.

:::example Uitgewerkt voorbeeld: een polynoom
Bepaal de primitieve $F$ van $f(x) = 6x^2 - 4x + 3$ met $F(0) = 0$.

*Per term:*

- $6x^2$: primitieve van $x^2$ is $\tfrac13 x^3$; maal 6 geeft $2x^3$.
- $-4x$: primitieve van $x$ is $\tfrac12 x^2$; maal $-4$ geeft $-2x^2$.
- $3$: primitieve is $3x$.

*Samen:* $F(x) = 2x^3 - 2x^2 + 3x + C$.

*Beginwaarde:* $F(0) = 0 + C = 0$, dus $C = 0$.

*Antwoord:* $F(x) = 2x^3 - 2x^2 + 3x$.

*Controle:* $F'(x) = 6x^2 - 4x + 3$ ✓.
:::

:::warning Primitiveer een product niet factor voor factor
Bij $f(x) = x \cdot x^2$ is het *niet* goed om $\tfrac12 x^2 \cdot \tfrac13 x^3$ te nemen. Schrijf eerst $x \cdot x^2 = x^3$; dan is $F(x) = \tfrac14 x^4$. Een product of een kwadraat van een som (zoals $(x + 2)^2$) werk je dus **eerst uit** tot een som van machten.
:::

{{ exercises: 30-014, 30-015, 30-016, 30-017 }}

## 5. Wortels en negatieve exponenten

De machtsregel werkt voor **elke** exponent behalve $-1$, ook voor breuken en negatieve getallen. Je moet de functie dan eerst als macht schrijven. Even herhalen:

$$
\sqrt{x} = x^{1/2}, \qquad \frac{1}{x^2} = x^{-2}, \qquad \frac{1}{\sqrt{x}} = x^{-1/2}, \qquad x\sqrt{x} = x^{3/2}.
$$

:::example Uitgewerkt voorbeeld: een wortel
Bepaal de primitieve van $f(x) = \sqrt{x}$ met $F(0) = 0$.

*Stap 1: als macht.* $f(x) = x^{1/2}$.

*Stap 2: exponent plus één.* $\tfrac12 + 1 = \tfrac32$.

*Stap 3: delen door $\tfrac32$*, dat is vermenigvuldigen met $\tfrac23$: $F(x) = \tfrac23 x^{3/2} + C$.

*Stap 4: beginwaarde.* $F(0) = 0$, dus $C = 0$.

*Antwoord.* $F(x) = \tfrac23 x^{3/2} = \tfrac23 x\sqrt{x}$.

*Controle.* $F'(x) = \tfrac23 \cdot \tfrac32 x^{1/2} = \sqrt{x}$ ✓.
:::

:::example Uitgewerkt voorbeeld: een negatieve exponent
Bepaal de primitieve van $f(x) = \dfrac{3}{x^2}$ (voor $x > 0$) met $F(1) = 0$.

*Stap 1: als macht.* $f(x) = 3x^{-2}$.

*Stap 2: machtsregel.* Exponent $-2 + 1 = -1$; delen door $-1$:

$$
F(x) = 3 \cdot \frac{x^{-1}}{-1} + C = -\frac{3}{x} + C.
$$

*Stap 3: beginwaarde.* $F(1) = -3 + C = 0$, dus $C = 3$.

*Antwoord.* $F(x) = 3 - \dfrac{3}{x}$.

*Controle.* $F'(x) = -3 \cdot (-1) x^{-2} = \dfrac{3}{x^2}$ ✓.
:::

:::warning Twee klassieke fouten
- **Differentiëren in plaats van primitiveren.** Bij $x^4$ schrijft men in de haast $4x^3$. Vraag je steeds af: moet de exponent *omhoog* (primitiveren) of *omlaag* (differentiëren)?
- **Vergeten te delen.** $x^4$ wordt $x^5$, maar dan moet er nog gedeeld worden door $5$. Een controle door te differentiëren vangt deze fout altijd op.
:::

## 6. Van snelheid naar positie

Primitiveren is in de natuurkunde heel concreet. Als $s(t)$ de positie van een voorwerp is, dan is $v(t) = s'(t)$ de snelheid. Omgekeerd is de positie een **primitieve** van de snelheid. De integratieconstante is dan geen abstract ding: het is de **beginpositie**.

:::example Uitgewerkt voorbeeld: positie uit snelheid
Een robotkarretje rijdt langs een rail met snelheid $v(t) = 0{,}3t^2 + 1$ (meter per seconde, $t$ in seconden). Op $t = 0$ staat het bij de markering $s = 2$ meter. Waar staat het op $t = 5$?

*Stap 1: primitieve.* $s(t) = 0{,}1t^3 + t + C$.

*Stap 2: beginpositie.* $s(0) = C = 2$.

*Stap 3: invullen.* $s(5) = 0{,}1 \cdot 125 + 5 + 2 = 12{,}5 + 5 + 2 = 19{,}5$ meter.

De afgelegde weg in die 5 seconden is $s(5) - s(0) = 17{,}5$ meter. Merk op dat de constante $C$ in dat *verschil* wegvalt. Dat is precies het mechanisme achter de hoofdstelling in de volgende les.
:::

{{ exercises: 30-018, 30-019, 30-020, 30-021 }}
