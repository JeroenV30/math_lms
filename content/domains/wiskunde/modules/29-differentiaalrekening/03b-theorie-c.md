# Rekenregels en de vergelijking van de raaklijn

Met de definitie van de afgeleide kun je in principe elke afgeleide uitrekenen, maar het is veel werk: haakjes uitwerken, delen door $h$, de limiet nemen. Gelukkig hoef je dat niet elke keer opnieuw te doen. Uit de definitie volgen een paar **rekenregels** waarmee je de afgeleide van elke veeltermfunctie in een paar regels opschrijft. In deze les leer je die regels, begrijp je waarom ze kloppen, en gebruik je ze om de vergelijking van een raaklijn op te stellen.

## 1. De machtsregel

Zet de resultaten van de vorige les op een rij.

| $f(x)$ | $1$ | $x$ | $x^2$ | $x^3$ |
|---|---|---|---|---|
| $f'(x)$ | $0$ | $1$ | $2x$ | $3x^2$ |

Het patroon is opvallend: de exponent komt **voor** de macht te staan, en de exponent zelf wordt **één kleiner**. Volgens dit patroon zou de afgeleide van $x^4$ gelijk zijn aan $4x^3$, en die van $x^{10}$ aan $10x^9$.

Waarom klopt dat? Bekijk de uitwerking van $(x + h)^n$. Bij $n = 2$ en $n = 3$ zag je

$$
(x + h)^2 = x^2 + 2x h + h^2, \qquad (x + h)^3 = x^3 + 3x^2 h + 3x h^2 + h^3
$$

In het algemeen is $(x + h)^n$ een product van $n$ factoren $(x + h)$. Kies je uit **elke** factor de $x$, dan krijg je $x^n$. Kies je uit precies **één** factor de $h$ en uit alle andere de $x$, dan krijg je $x^{n-1} h$; daar zijn $n$ mogelijkheden voor (je kiest welke factor de $h$ levert). Alle andere keuzes bevatten minstens $h^2$. Dus

$$
(x + h)^n = x^n + n x^{n-1} h + (\text{termen met } h^2, h^3, \dots)
$$

Trek $x^n$ af en deel door $h$: je houdt $n x^{n-1}$ over plus termen die nog minstens één factor $h$ bevatten. Die verdwijnen als $h \to 0$.

:::formula Machtsregel
$$
f(x) = x^n \quad\Rightarrow\quad f'(x) = n \cdot x^{n-1}
$$

voor elk positief geheel getal $n$. Bijzondere gevallen: de afgeleide van $x$ is $1$, en de afgeleide van een constante is $0$.
:::

:::example Uitgewerkt voorbeeld 1: machten
- $f(x) = x^4$ geeft $f'(x) = 4x^3$.
- $g(x) = x^7$ geeft $g'(x) = 7x^6$.
- $h(x) = x$ is $x^1$, dus $h'(x) = 1 \cdot x^0 = 1$.
- $k(x) = 12$ is constant, dus $k'(x) = 0$.
:::

## 2. Constante factor en somregel

Twee eenvoudige regels maken de machtsregel pas echt bruikbaar.

**Constante factor.** Vergelijk de grafieken van $y = x^2$ en $y = 3x^2$. De tweede is de eerste, maar drie keer zo hoog: elke $y$-waarde is met 3 vermenigvuldigd. Dan worden ook alle verschillen $\Delta y$ drie keer zo groot, en dus alle hellingen. De afgeleide van $3x^2$ is $3 \cdot 2x = 6x$.

**Som.** Als $f(x) = x^3 + x^2$, dan is het verschil $f(x + h) - f(x)$ gelijk aan het verschil van het $x^3$-deel plus het verschil van het $x^2$-deel. Delen door $h$ en de limiet nemen gaat per deel. De afgeleide is $3x^2 + 2x$.

:::formula Rekenregels
$$
\begin{aligned}
&\text{constante factor:} && f(x) = c \cdot g(x) &&\Rightarrow\quad f'(x) = c \cdot g'(x) \\
&\text{somregel:} && f(x) = g(x) + k(x) &&\Rightarrow\quad f'(x) = g'(x) + k'(x) \\
&\text{verschilregel:} && f(x) = g(x) - k(x) &&\Rightarrow\quad f'(x) = g'(x) - k'(x)
\end{aligned}
$$
:::

Samen met de machtsregel betekenen deze regels dat je een veelterm **term voor term** differentieert. Een losse constante verdwijnt, een term $ax$ wordt $a$, en een term $ax^n$ wordt $n a x^{n-1}$.

:::example Uitgewerkt voorbeeld 2: een veelterm
Differentieer $f(x) = 2x^3 - 5x^2 + 7x - 9$.

1. $2x^3$: de factor 2 blijft staan, $x^3$ wordt $3x^2$. Samen: $2 \cdot 3x^2 = 6x^2$.
2. $-5x^2$: wordt $-5 \cdot 2x = -10x$.
3. $7x$: wordt $7$.
4. $-9$: een constante, wordt $0$.

Dus $f'(x) = 6x^2 - 10x + 7$.
:::

:::example Uitgewerkt voorbeeld 3: breuken als coëfficiënt
Differentieer $g(x) = \tfrac{1}{2}x^4 - x^2 + 3$.

1. $\tfrac{1}{2}x^4$ wordt $\tfrac{1}{2} \cdot 4x^3 = 2x^3$.
2. $-x^2$ wordt $-2x$.
3. $3$ wordt $0$.

Dus $g'(x) = 2x^3 - 2x$. Bereken ook de helling in $x = 2$: $g'(2) = 2 \cdot 8 - 2 \cdot 2 = 16 - 4 = 12$.
:::

:::example Uitgewerkt voorbeeld 4: andere letters
In toepassingen heten de variabelen vaak anders. De hoogte van een bal is $h(t) = 1{,}5 + 12t - 5t^2$ (meter, $t$ in seconden). De regels werken precies hetzelfde, alleen met $t$ in plaats van $x$:

$$
h'(t) = 12 - 10t
$$

$h'(t)$ is de verticale snelheid van de bal in m/s. Op $t = 0{,}5$ is die $12 - 5 = 7$ m/s (omhoog); op $t = 1{,}5$ is ze $12 - 15 = -3$ m/s (omlaag).
:::

## 3. Eerst haakjes wegwerken

De regels hierboven gelden voor sommen van machten. Staat er een **product** of een **macht van een haakje**, dan werk je eerst de haakjes weg.

:::example Uitgewerkt voorbeeld 5: een product
Differentieer $f(x) = (2x + 1)(x - 3)$.

1. **Haakjes wegwerken.** $(2x + 1)(x - 3) = 2x^2 - 6x + x - 3 = 2x^2 - 5x - 3$.
2. **Differentiëren.** $f'(x) = 4x - 5$.
:::

:::warning De afgeleide van een product is niet het product van de afgeleiden
Het is verleidelijk om bij $(2x + 1)(x - 3)$ elke factor apart te differentiëren: $2 \cdot 1 = 2$. Maar dat is fout; het goede antwoord is $4x - 5$. Bij een **som** mag je per term differentiëren, bij een **product** niet.
:::

### Vooruitblik: product- en kettingregel

Voor producten bestaat wel een regel, de **productregel**, die Leibniz al in 1684 publiceerde:

$$
f(x) = g(x) \cdot k(x) \quad\Rightarrow\quad f'(x) = g'(x) \cdot k(x) + g(x) \cdot k'(x)
$$

Controleer hem op het voorbeeld: $g(x) = 2x + 1$ en $k(x) = x - 3$ geven $2 \cdot (x - 3) + (2x + 1) \cdot 1 = 2x - 6 + 2x + 1 = 4x - 5$. Hetzelfde antwoord.

Voor een macht van een haakje, zoals $(x^2 + 3)^2$, bestaat de **kettingregel**: differentieer de buitenste functie (het kwadraat) en vermenigvuldig met de afgeleide van wat binnen de haakjes staat:

$$
\big((x^2 + 3)^2\big)' = 2(x^2 + 3) \cdot 2x = 4x^3 + 12x
$$

Ook dit kun je controleren door eerst uit te werken: $(x^2 + 3)^2 = x^4 + 6x^2 + 9$, met afgeleide $4x^3 + 12x$. Product- en kettingregel worden in vervolgonderwijs uitgebreid behandeld. In deze module kun je altijd eerst de haakjes wegwerken.

### Vooruitblik: negatieve en gebroken exponenten

De machtsregel geldt niet alleen voor positieve gehele exponenten, maar voor **elke** exponent. In module 14 zag je dat $\frac{1}{x} = x^{-1}$. Op dezelfde manier kun je een wortel als macht schrijven: $\sqrt{x} = x^{\frac{1}{2}}$, want $x^{\frac{1}{2}} \cdot x^{\frac{1}{2}} = x^1$. Met de machtsregel:

$$
\left(x^{-1}\right)' = -1 \cdot x^{-2} = -\frac{1}{x^2}, \qquad \left(x^{\frac{1}{2}}\right)' = \tfrac{1}{2} x^{-\frac{1}{2}} = \frac{1}{2\sqrt{x}}
$$

Het bewijs vraagt meer gereedschap, maar je mag de regel gebruiken. Je hebt hem nodig in een van de uitdagingen aan het eind van deze module.

{{ exercises: 29-014, 29-015, 29-016, 29-017, 29-018 }}

## 4. De vergelijking van de raaklijn

De raaklijn in een punt is een **rechte lijn**, dus haar vergelijking heeft de vorm $y = ax + b$ (module 19). De helling $a$ ken je nu: dat is de afgeleide in het raakpunt. De $b$ vind je door het raakpunt in te vullen.

:::theory Stappenplan: raaklijn aan de grafiek van f in x = p
1. Bereken het raakpunt: $y_P = f(p)$.
2. Bereken de afgeleide $f'(x)$ en daarmee de helling $a = f'(p)$.
3. Vul het raakpunt in in $y = ax + b$ en los $b$ op: $b = y_P - a \cdot p$.
4. Schrijf de vergelijking op en controleer dat het raakpunt erop ligt.
:::

:::example Uitgewerkt voorbeeld 6: raaklijn aan y = x³ in x = 1
1. Raakpunt: $f(1) = 1$, dus $P(1; 1)$.
2. $f'(x) = 3x^2$, dus $a = f'(1) = 3$.
3. $y = 3x + b$ door $(1; 1)$: $1 = 3 + b$, dus $b = -2$.
4. Raaklijn: $y = 3x - 2$. Controle: bij $x = 1$ geeft dat $3 - 2 = 1$. Klopt.
:::

:::example Uitgewerkt voorbeeld 7: raaklijn aan f(x) = x³ − 2x² in x = 2
1. Raakpunt: $f(2) = 8 - 8 = 0$, dus $P(2; 0)$.
2. $f'(x) = 3x^2 - 4x$, dus $a = f'(2) = 12 - 8 = 4$.
3. $0 = 4 \cdot 2 + b$, dus $b = -8$.
4. Raaklijn: $y = 4x - 8$.
:::

In de grafiek hieronder kun je raaklijnen aan $y = x^3 - 2x^2$ bekijken. Zet het raakpunt op $x = 2$ en controleer de helling 4. Zoek ook de twee punten waar de raaklijn horizontaal is.

{{ widget: function-plot fn="x^3-2*x^2" tangent=true x0=2 xmin=-2 xmax=3 ymin=-5 ymax=5 title="Raaklijnen aan y = x³ − 2x²" }}

### De omgekeerde vraag: waar heeft de grafiek een gegeven helling?

Soms is niet het raakpunt gegeven, maar de helling. Dan los je een **vergelijking** op met de afgeleide.

:::example Uitgewerkt voorbeeld 8: raaklijn evenwijdig aan een gegeven lijn
In welk punt van de grafiek van $f(x) = x^2 + 2x$ is de raaklijn evenwijdig aan de lijn $y = 6x - 1$?

1. **Evenwijdig betekent: dezelfde helling.** De raaklijn moet helling 6 hebben.
2. **Vergelijking.** $f'(x) = 2x + 2 = 6$, dus $2x = 4$ en $x = 2$.
3. **Punt.** $f(2) = 4 + 4 = 8$. Het punt is $(2; 8)$.
4. **Raaklijn erbij.** $y = 6x + b$ door $(2; 8)$: $8 = 12 + b$, dus $b = -4$. De raaklijn is $y = 6x - 4$; inderdaad evenwijdig aan, maar niet gelijk aan $y = 6x - 1$.
:::

:::tip Twee vragen, twee functies
Vraagt men naar de **helling**, dan gebruik je $f'$. Vraagt men naar de **hoogte** of het **punt**, dan gebruik je $f$. Bij een raaklijnvraag heb je ze allebei nodig: $f'$ voor de helling, $f$ voor het raakpunt.
:::

{{ exercises: 29-019, 29-020, 29-021, 29-022 }}
