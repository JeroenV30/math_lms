# Bijzondere gevallen, formules en ongelijkheden

Met de balansmethode kun je inmiddels elke lineaire vergelijking met één onbekende te lijf gaan. In deze les kijk je naar drie situaties die net buiten het gewone patroon vallen. Eerst vergelijkingen waarbij de onbekende onderweg **verdwijnt**: dan heeft de vergelijking geen enkele oplossing, of juist oneindig veel. Daarna **formules** met meerdere letters, die je omwerkt zodat een andere letter vooraan staat. Ten slotte **ongelijkheden**, waarbij je niet één getal zoekt maar een heel gebied op de getallenlijn, en waar één balansregel een addertje onder het gras heeft.

## 1. Als de onbekende verdwijnt

:::example Uitgewerkt voorbeeld: geen oplossing
Los op: $3x + 4 = 3x + 9$.

Trek aan beide kanten $3x$ af: $4 = 9$.

De onbekende is verdwenen, en wat overblijft is een uitspraak die **altijd onwaar** is. Welke waarde je ook voor $x$ invult, het linkerlid is steeds precies 5 kleiner dan het rechterlid. De vergelijking heeft **geen oplossing**.
:::

:::example Uitgewerkt voorbeeld: oneindig veel oplossingen
Los op: $4(x - 1) + 6 = 4x + 2$.

Werk de haakjes weg: $4x - 4 + 6 = 4x + 2$, dus $4x + 2 = 4x + 2$. Trek $4x$ af: $2 = 2$.

Nu blijft er een uitspraak over die **altijd waar** is. Elke waarde van $x$ maakt de vergelijking waar: de twee kanten zijn twee schrijfwijzen van dezelfde expressie. Zo'n gelijkheid heet een **identiteit**. Controleer maar met een paar waarden: bij $x = 0$ staat er $2 = 2$, bij $x = 10$ staat er $42 = 42$.
:::

De grafiek maakt beide gevallen zichtbaar. Bij $3x + 4 = 3x + 9$ hebben de lijnen $y = 3x + 4$ en $y = 3x + 9$ dezelfde helling 3: ze lopen **evenwijdig**, op een vaste afstand van 5 boven elkaar, en snijden elkaar nooit.

{{ widget: function-plot fn="3*x+4" fn2="3*x+9" xmin=-5 xmax=5 ymin=-12 ymax=25 title="Evenwijdige lijnen: y = 3x + 4 en y = 3x + 9" }}

Bij een identiteit vallen de twee lijnen precies over elkaar heen: elk punt is een snijpunt.

:::theory Drie mogelijkheden
Elke lineaire vergelijking kun je met balansstappen herleiden tot de vorm $ax = b$. Dan zijn er drie gevallen:

- $a \neq 0$: precies **één** oplossing, namelijk $x = \tfrac{b}{a}$;
- $a = 0$ en $b \neq 0$: er staat $0 = b$, een onware uitspraak: **geen** oplossing;
- $a = 0$ en $b = 0$: er staat $0 = 0$, een ware uitspraak: **elk** getal is een oplossing.
:::

:::warning 0 = 0 betekent niet x = 0
Als er aan het eind $0 = 0$ staat, is de conclusie niet "$x = 0$", maar "elke $x$ voldoet". Andersom kan $x = 0$ wel een heel gewone oplossing zijn. Bij $5x + 3 = 2x + 3$ trek je $2x$ en 3 af en krijg je $3x = 0$, dus $x = 0$. Daar is de onbekende niet verdwenen: er staat nog $3x$. Kijk dus goed of er nog een $x$ in de vergelijking staat voordat je een conclusie trekt.
:::

{{ exercises: 16-019, 16-020, 16-035 }}

## 2. Formules omwerken

Een formule is een vergelijking met meerdere letters, die elk een grootheid voorstellen. De formule

$$
v = \frac{s}{t}
$$

zegt dat de gemiddelde snelheid $v$ gelijk is aan de afgelegde afstand $s$ gedeeld door de tijd $t$. Met deze vorm bereken je snel de snelheid. Maar vaak ken je de snelheid en de afstand, en wil je de **tijd** weten. Dan is het handig de formule eerst om te werken tot $t = \ldots$. Dat heet ook wel: $t$ **vrijmaken**.

Het goede nieuws: je hebt hier niets nieuws voor nodig. Behandel de andere letters gewoon als **getallen die je toevallig niet kent**, en pas de balansregels toe.

:::example Uitgewerkt voorbeeld: t vrijmaken in v = s/t
Voorwaarde: $t \neq 0$ (een tijd van nul geeft geen snelheid) en $v \neq 0$.

1. $t$ staat in de noemer. Vermenigvuldig beide kanten met $t$: $v \cdot t = s$.
2. $t$ wordt nu met $v$ vermenigvuldigd. Deel beide kanten door $v$: $t = \dfrac{s}{v}$.

*Controle met getallen:* een rit van 150 km met gemiddeld 100 km/u. De formule geeft $t = \tfrac{150}{100} = 1{,}5$ uur. En inderdaad: $\tfrac{150}{1{,}5} = 100$ km/u.
:::

:::warning Veelgemaakte fouten bij v = s/t
- **$t = \tfrac{v}{s}$**: de breuk is omgedraaid. Controleer met getallen: $\tfrac{100}{150} \approx 0{,}67$ uur voor 150 km met 100 km/u, dat is te kort.
- **$t = s \cdot v$**: vermenigvuldigd waar gedeeld moest worden. $150 \times 100 = 15.000$ uur is absurd.

Een controle met eenvoudige getallen is de snelste manier om zo'n fout te vinden. Kies getallen waarvan je de uitkomst al weet: 100 km rijden met 50 km/u duurt 2 uur.
:::

:::example Uitgewerkt voorbeeld: van Fahrenheit naar Celsius
In de Verenigde Staten gebruikt men graden Fahrenheit. De omrekenformule is $F = 1{,}8C + 32$. Maak $C$ vrij.

1. Trek aan beide kanten 32 af: $F - 32 = 1{,}8C$.
2. Deel beide kanten door $1{,}8$: $C = \dfrac{F - 32}{1{,}8}$.

Let op de haakjes (of de lange breukstreep): je deelt het **hele** verschil $F - 32$ door $1{,}8$, niet alleen de 32.

*Controle:* water kookt bij 212 °F. Dan $C = \tfrac{212 - 32}{1{,}8} = \tfrac{180}{1{,}8} = 100$ °C. Klopt.
:::

De volgorde van de stappen volgt dezelfde logica als in les 2. In $F = 1{,}8C + 32$ is het recept voor $C$: eerst maal $1{,}8$, dan plus 32. Terugrekenen: eerst min 32, dan gedeeld door $1{,}8$.

:::tip Hoofdletters en kleine letters
In formules is het verschil tussen hoofdletters en kleine letters belangrijk: $P$ (omtrek, *perimeter*) en $p$ kunnen verschillende dingen betekenen. Neem de letters precies over zoals ze in de formule staan, ook als je een antwoord intypt.
:::

{{ exercises: 16-021, 16-022, 16-036 }}

## 3. Ongelijkheden

Niet elke vraag leidt tot een gelijkheid. "Hoeveel exemplaren kun je **hoogstens** laten drukken voor € 75?" of "Vanaf hoeveel kilometer is huren goedkoper?" vragen om een **ongelijkheid**. Je gebruikt daarbij de tekens:

| Teken | Betekenis | Voorbeeld |
|---|---|---|
| $<$ | kleiner dan | $x < 5$: alle getallen kleiner dan 5 |
| $\le$ | kleiner dan of gelijk aan | $x \le 5$: kleiner dan 5, of precies 5 |
| $>$ | groter dan | $x > -2$ |
| $\ge$ | groter dan of gelijk aan | $x \ge -2$ |

De oplossing van een ongelijkheid is meestal geen enkel getal, maar een **gebied**: alle getallen aan één kant van een grens. Op de getallenlijn teken je dat als een halve lijn. Een **dicht** bolletje betekent dat de grens erbij hoort ($\le$ of $\ge$), een **open** bolletje dat de grens er niet bij hoort ($<$ of $>$).

![Twee oplossingsverzamelingen op de getallenlijn](/images/diagrams/m16-ongelijkheid.svg "Boven: x ≤ −3, een dicht bolletje bij −3 en alles links ervan. Onder: x > 3, een open bolletje bij 3 en alles rechts ervan. Eigen illustratie.")

Zo'n gebied schrijf je ook als **interval**. In de Nederlandse notatie gebruik je een rechte haak $[\;]$ als de grens erbij hoort, en een punthaak $\langle\;\rangle$ als dat niet zo is. Oneindig ($\infty$) is nooit een getal en krijgt altijd een punthaak:

$$
x \le -3 \;\Longleftrightarrow\; x \in \langle -\infty;\, -3 \,] \qquad\qquad x > 3 \;\Longleftrightarrow\; x \in \langle 3;\, \infty \rangle
$$

### Dezelfde balans, met één uitzondering

Een ongelijkheid is een balans die **niet** in evenwicht is: de ene kant is zwaarder. Leg je aan beide kanten hetzelfde bij of haal je aan beide kanten hetzelfde weg, dan blijft de zwaarste kant de zwaarste. Ook verdubbelen of halveren van beide kanten verandert dat niet. Optellen, aftrekken en vermenigvuldigen of delen met een **positief** getal mag dus net als bij vergelijkingen.

Maar kijk wat er gebeurt bij een **negatief** getal. Het is waar dat $2 < 5$. Vermenigvuldig beide kanten met $-1$: dan krijg je $-2$ en $-5$. Op de getallenlijn ligt $-5$ links van $-2$, dus $-2 > -5$. Het teken is **omgeklapt**. Vermenigvuldigen met een negatief getal spiegelt de getallenlijn in 0, en daarbij keert de volgorde om.

:::theory Rekenregels voor ongelijkheden
- Aan beide kanten hetzelfde optellen of aftrekken: het teken blijft.
- Beide kanten vermenigvuldigen of delen met een **positief** getal: het teken blijft.
- Beide kanten vermenigvuldigen of delen met een **negatief** getal: het teken **klapt om** ($<$ wordt $>$, $\le$ wordt $\ge$, en andersom).
:::

:::example Uitgewerkt voorbeeld: zonder omklappen
Los op: $3x - 4 < 11$.

1. Tel aan beide kanten 4 op: $3x < 15$.
2. Deel door 3 (positief, teken blijft): $x < 5$.
3. Als interval: $\langle -\infty;\, 5 \rangle$.

*Controle met een testwaarde:* $x = 0$ ligt in het gebied: $3 \times 0 - 4 = -4 < 11$. Klopt. En de grens: $x = 5$ geeft $15 - 4 = 11$, niet kleiner dan 11, dus 5 hoort er terecht niet bij.
:::

:::example Uitgewerkt voorbeeld: met omklappen
Los op: $-2x + 1 \ge 7$.

1. Trek aan beide kanten 1 af: $-2x \ge 6$.
2. Deel door $-2$. Dat is negatief, dus het teken klapt om: $x \le -3$.
3. Als interval: $\langle -\infty;\, -3 \,]$.

*Controle met een testwaarde:* $x = -5$ ligt in het gebied: $-2 \times (-5) + 1 = 11 \ge 7$. Klopt. En $x = 0$ ligt er niet in: $1 \ge 7$ is onwaar. Ook dat klopt.

**Andere route zonder omklappen:** tel aan beide kanten $2x$ op en trek 7 af: $1 - 7 \ge 2x$, dus $-6 \ge 2x$, en na delen door 2: $-3 \ge x$. Dat is hetzelfde als $x \le -3$.
:::

:::warning Veelgemaakte fout: niet omklappen
Wie bij $-2x \ge 6$ deelt door $-2$ zonder het teken om te klappen, vindt $x \ge -3$. Test een getal uit dat gebied, bijvoorbeeld $x = 0$: $-2 \times 0 + 1 = 1$, en $1 \ge 7$ is onwaar. Eén testwaarde laat dus direct zien dat de richting fout is.
:::

Gebruik de getallenlijn hieronder om zelf testwaarden te kiezen. Sleep het punt naar een getal en reken $-2x + 1$ uit. Ligt de uitkomst op of boven 7, dan hoort het getal bij de oplossing. Je zult merken dat dit precies geldt voor $-3$ en alle getallen links daarvan.

{{ widget: number-line min=-10 max=10 value=-3 }}

{{ exercises: 16-037, 16-038 }}
