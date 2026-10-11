# Waar een functie een grens bereikt

Met helling en startwaarde ken je het karakter van een lineaire functie. In deze les stel je er vragen aan. Stijgt of daalt de lijn? Waar snijdt ze de assen? Lopen twee lijnen evenwijdig, of snijden ze elkaar? En wat betekent een snijpunt in een situatie met geld of tijd?

## Stijgend, dalend of constant

Het teken van $a$ bepaalt het verloop van de lijn:

| Waarde van $a$ | Verloop | Voorbeeld |
|---|---|---|
| $a > 0$ | stijgend | $y = 2x + 1$ |
| $a < 0$ | dalend | $y = -3x + 8$ |
| $a = 0$ | constant | $y = 5$ |

Dit lees je rechtstreeks uit de formule af, zonder te tekenen. Het getal $|a|$, dus de grootte zonder teken, zegt hoe steil de lijn is. De lijn $y = 5x$ stijgt sneller dan $y = 2x$, en $y = -5x$ daalt sneller dan $y = -2x$.

## Evenwijdige lijnen

Twee lijnen met dezelfde helling stijgen of dalen even snel. Ze verschillen alleen in startwaarde. Ze liggen dus evenwijdig: ze snijden elkaar nooit, tenzij ze samenvallen. De lijnen $y = 2x + 1$ en $y = 2x - 4$ zijn evenwijdig. Dat gebruik je om een lijn te vinden die evenwijdig is aan een gegeven lijn en door een gegeven punt gaat.

:::example Een evenwijdige lijn door een punt
Zoek de lijn evenwijdig aan $y = 2x - 1$ die door $(3; 4)$ gaat.

1. Evenwijdig betekent dezelfde helling, dus $a = 2$.
2. Vul het punt in: $4 = 2 \times 3 + b$, dus $4 = 6 + b$ en $b = -2$.
3. De lijn is $y = 2x - 2$.
4. Controle: bij $x = 3$ geeft $2 \times 3 - 2 = 4$.
:::

## Snijpunten met de assen

Een lijn snijdt de $y$-as waar $x = 0$. Dat is het punt $(0; b)$: de startwaarde is dus tegelijk het snijpunt met de $y$-as. De $x$-as snijdt de lijn waar $y = 0$. Dat punt heeft de vorm $(x; 0)$, en je vindt $x$ door $ax + b = 0$ op te lossen. De waarde van $x$ die dat oplevert heet het **nulpunt** van de functie.

:::example Het nulpunt van f(x) = 2x - 6
1. Stel de uitvoer nul: $2x - 6 = 0$.
2. Tel 6 bij beide kanten op: $2x = 6$.
3. Deel door 2: $x = 3$.
4. Het snijpunt met de $x$-as is dus $(3; 0)$.
5. Controle: $f(3) = 2 \times 3 - 6 = 0$.
:::

Let op het verschil in taal. Een nulpunt is een invoerwaarde (hier 3). Het snijpunt met de $x$-as is een coördinatenpaar (hier $(3; 0)$). In het dagelijks gebruik gooit men die twee nogal eens door elkaar; in een antwoord op een toets doet het ertoe.

Voor $f(x) = ax + b$ met $a \neq 0$ is het nulpunt
$$
x = -\frac{b}{a}
$$
Bij een constante functie $f(x) = 5$ is er geen nulpunt: de lijn loopt evenwijdig aan de $x$-as op hoogte 5 en snijdt haar nooit. Bij $f(x) = 0$ is elke $x$ een nulpunt, want de lijn valt samen met de $x$-as. De formule $-b/a$ mag je daarom alleen gebruiken als $a \neq 0$.

:::warning Het teken bij het nulpunt
Bij $f(x) = 2x - 6$ krijg je $x = 3$, niet $x = -3$. Het minteken in de formule $-b/a$ werkt samen met het teken van $b$: hier is $b = -6$, dus $-b/a = 6/2 = 3$. Los liever op door de vergelijking te schrijven dan de formule blind te gebruiken, en controleer door in te vullen.
:::

## Twee grafieken vergelijken

Vaak wil je twee situaties naast elkaar zetten. Neem twee abonnementen waarbij het aantal belminuten $n$ in een maand bepalend is voor de prijs in euro:

- Tarief A: $A(n) = 12 + 2n$ (hoger beginbedrag, lagere prijs per minuut).
- Tarief B: $B(n) = 4 + 3n$ (lager beginbedrag, hogere prijs per minuut).

![Twee tarieven A en B met omslagpunt](/images/diagrams/m19-tarieven.svg "Twee tarieven A(n) = 12 + 2n en B(n) = 4 + 3n; de lijnen snijden bij n = 8 — eigen figuur")

Welke is het goedkoopst? Dat hangt af van $n$. Voor $n = 0$ is B met € 4 duidelijk goedkoper dan A met € 12. Maar B stijgt sneller, en op een gegeven moment haalt het A in. Dat moment is het **omslagpunt** (of snijpunt): de waarde van $n$ waarbij de kosten gelijk zijn.

:::example Het omslagpunt van twee tarieven
Zoek het omslagpunt van $A(n) = 12 + 2n$ en $B(n) = 4 + 3n$.

1. Stel de kosten gelijk: $12 + 2n = 4 + 3n$.
2. Trek $2n$ aan beide kanten af: $12 = 4 + n$.
3. Trek 4 af: $n = 8$.
4. Vul in: $A(8) = 12 + 16 = 28$ en $B(8) = 4 + 24 = 28$. Beide kosten € 28.
5. Het snijpunt is $(8; 28)$.

Controle aan beide kanten: bij $n = 5$ kost A € 22 en B € 19, dus B is goedkoper. Bij $n = 12$ kost A € 36 en B € 40, dus A is goedkoper.
:::

De betekenis van een snijpunt hangt van de situatie af. Hier betekent het gelijke kosten, niet dat de abonnementen verder dezelfde voorwaarden hebben. Voor de vraag 'wanneer is A goedkoper?' onderzoek je het verschil $A(n) - B(n) = 8 - n$. Dat is negatief bij $n > 8$. Dus A is goedkoper bij meer dan 8 belminuten, B bij minder dan 8. Als $n$ alleen geheel en niet-negatief mag zijn, zijn de relevante aantallen voor A dus 9, 10, 11 en verder.

Het snijpunt is dus meer dan een rekenresultaat: het is een beslisgrens. Wie verwacht minder dan 8 minuten te bellen, kiest B; wie meer verwacht, kiest A. Dit soort vergelijkingen komt overal voor, van telefoonabonnementen tot de keuze tussen kopen en huren.

:::tip Een lijn die nooit snijdt
Twee tarieven met dezelfde helling, bijvoorbeeld $12 + 2n$ en $4 + 2n$, hebben geen omslagpunt. Dan is het ene tarief altijd € 8 duurder. Als je bij het gelijkstellen een tegenspraak krijgt zoals $12 = 4$, weet je dat de lijnen evenwijdig zijn.
:::

{{ widget: function-plot fn="12+2*x" fn2="4+3*x" xmin=0 xmax=14 ymin=0 ymax=50 title="Twee tarieven: waar snijden ze?" }}

Kijk in de grafiek waar de twee lijnen elkaar kruisen en controleer of dat overeenkomt met de berekening.

{{ exercises: 19-013, 19-014, 19-015, 19-016, 19-017, 19-037, 19-038, 19-041 }}
