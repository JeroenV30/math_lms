# Omkeerbare bewerkingen

In de introductie loste je $2x + 6 = 18$ op met een weegschaal: aan beide kanten 6 kg weghalen, daarna beide kanten halveren. In deze les maak je van dat beeld een methode die ook werkt zonder weegschaal: met negatieve getallen, breuken en kommagetallen. De methode rust op één idee: elke rekenbewerking heeft een **omgekeerde bewerking** die haar ongedaan maakt.

## 1. Bewerkingen en hun omgekeerde

Je kent de omgekeerde bewerkingen al uit de eerste modules. In module 3 zag je dat aftrekken optellen ongedaan maakt, en in module 5 dat delen vermenigvuldigen ongedaan maakt.

| Bewerking | Omgekeerde bewerking | Voorbeeld |
|---|---|---|
| $+\,7$ | $-\,7$ | $5 + 7 = 12$, en $12 - 7 = 5$ |
| $-\,7$ | $+\,7$ | $5 - 7 = -2$, en $-2 + 7 = 5$ |
| $\times\,4$ | $:\,4$ | $5 \times 4 = 20$, en $20 : 4 = 5$ |
| $:\,4$ | $\times\,4$ | $5 : 4 = 1{,}25$, en $1{,}25 \times 4 = 5$ |

Er is één uitzondering: vermenigvuldigen met **nul** kun je niet ongedaan maken. Uit $5 \times 0 = 0$ en $8 \times 0 = 0$ kun je niet terugvinden of je met 5 of met 8 begon. Delen door nul bestaat niet (module 5).

### Terugrekenen met een pijlenschema

Lees $2x + 6$ als een recept: neem $x$, vermenigvuldig met 2, tel er 6 bij op. De vergelijking $2x + 6 = 18$ zegt dat dit recept 18 oplevert. Om terug te rekenen, doorloop je het recept **achterstevoren**, met telkens de omgekeerde bewerking.

![Pijlenschema heen en terug](/images/diagrams/m16-pijlenschema.svg "Heen: x maal 2 geeft 2x, plus 6 geeft 18. Terug: 18 min 6 geeft 12, gedeeld door 2 geeft 6. Eigen illustratie.")

De volgorde is belangrijk. De laatste bewerking van het recept (plus 6) maak je als eerste ongedaan. Denk aan aankleden: je trekt eerst sokken aan en dan schoenen, maar bij het uitkleden gaan eerst de schoenen uit.

:::example Uitgewerkt voorbeeld: denk aan een getal
"Ik denk aan een getal. Ik vermenigvuldig het met 5 en trek er 3 van af. Er komt 42 uit." Welk getal?

1. **Het recept:** getal $\xrightarrow{\times 5}$ ? $\xrightarrow{-3}$ 42. Als vergelijking: $5x - 3 = 42$.
2. **Terug:** de laatste bewerking was $-3$; maak die ongedaan met $+3$: $42 + 3 = 45$.
3. **Terug:** de eerste bewerking was $\times 5$; maak die ongedaan met $:5$: $45 : 5 = 9$.
4. **Controle:** $9 \times 5 = 45$, en $45 - 3 = 42$. Het getal is 9.
:::

Terugrekenen werkt zolang de onbekende maar **één keer** in de vergelijking voorkomt. Bij $5x + 2 = 2x + 17$ is er geen enkel recept dat je kunt terugdraaien, want $x$ staat aan twee kanten. Daarvoor heb je de balansmethode nodig.

## 2. De balansregels

Een vergelijking is een gelijkheid tussen twee getallen die je (nog) niet allebei kent. Als twee getallen gelijk zijn, blijven ze gelijk wanneer je met allebei precies hetzelfde doet. Daaruit volgen de regels van de balansmethode.

:::theory De balansregels
Je mag een vergelijking vervangen door een vergelijking met **dezelfde oplossingen** door:

1. aan beide kanten **hetzelfde getal of dezelfde term op te tellen**;
2. aan beide kanten **hetzelfde getal of dezelfde term af te trekken**;
3. beide kanten met **hetzelfde getal te vermenigvuldigen**, mits dat getal **niet nul** is;
4. beide kanten door **hetzelfde getal te delen**, mits dat getal **niet nul** is.

Daarnaast mag je elke kant los **herschrijven**: haakjes wegwerken, termen samenvoegen, $5 + 3$ vervangen door $8$. Dat verandert geen enkele waarde.
:::

Twee vergelijkingen met precies dezelfde oplossingen heten **gelijkwaardig**. De balansregels geven telkens een gelijkwaardige vergelijking, omdat elke stap terug te draaien is. Van $2x = 12$ kom je terug bij $2x + 6 = 18$ door aan beide kanten 6 op te tellen. Er gaat dus geen oplossing verloren en er komt er geen bij.

:::warning Waarom niet met nul?
Vermenigvuldig je $x = 3$ aan beide kanten met 0, dan krijg je $0 = 0$. Die uitspraak is waar voor **elke** $x$. De informatie dat $x$ gelijk is aan 3 is verdwenen, en die stap kun je niet terugdraaien. Daarom staat er in regel 3 en 4 "niet nul". Let op dit voorbehoud vooral bij letters: delen door $v$ mag alleen als je zeker weet dat $v \neq 0$.
:::

:::formula Een vergelijking van de vorm ax + b = c
$$
ax + b = c \quad\Longrightarrow\quad ax = c - b \quad\Longrightarrow\quad x = \frac{c - b}{a} \qquad (a \neq 0)
$$
Eerst trek je $b$ af, daarna deel je door $a$. Leer deze formule niet uit je hoofd: de twee stappen zijn belangrijker dan het resultaat.
:::

## 3. Eén stap

De eenvoudigste vergelijkingen hebben één bewerking op $x$. Eén omgekeerde bewerking is dan genoeg.

:::example Uitgewerkt voorbeeld: vier vergelijkingen met één stap
**a.** $x + 12 = 31$. Er wordt 12 bij $x$ opgeteld; trek aan beide kanten 12 af: $x = 19$.
*Controle:* $19 + 12 = 31$.

**b.** $x - 11 = -6$. Er wordt 11 van $x$ afgetrokken; tel aan beide kanten 11 op: $x = -6 + 11 = 5$.
*Controle:* $5 - 11 = -6$.

**c.** $-4x = 28$. Hier wordt $x$ met $-4$ vermenigvuldigd; deel beide kanten door $-4$: $x = 28 : (-4) = -7$.
*Controle:* $-4 \times (-7) = 28$. (Tekenregels uit module 13: min maal min is plus.)

**d.** $6x = 9$. Deel door 6: $x = \tfrac{9}{6} = \tfrac{3}{2}$, ofwel $1{,}5$.
*Controle:* $6 \times 1{,}5 = 9$.
:::

Bij **d** zie je dat een oplossing geen geheel getal hoeft te zijn. Als een opgave om een **exacte** uitkomst vraagt, geef je de vereenvoudigde breuk $\tfrac{3}{2}$. Een afgerond kommagetal als $0{,}33$ voor $\tfrac{1}{3}$ is niet exact.

{{ exercises: 16-003, 16-005, 16-006, 16-007 }}

## 4. Twee stappen

Bij $ax + b = c$ zijn er twee bewerkingen op $x$: eerst maal $a$, dan plus $b$. Je maakt ze in omgekeerde volgorde ongedaan: eerst $b$ weg, dan delen door $a$.

:::example Uitgewerkt voorbeeld: 4x − 7 = 21
$$
\begin{aligned}
4x - 7 &= 21 && \text{(beide kanten } +7\text{)}\\
4x &= 28 && \text{(beide kanten } :4\text{)}\\
x &= 7
\end{aligned}
$$
*Controle:* $4 \times 7 - 7 = 28 - 7 = 21$. Klopt.

Waarom niet eerst delen door 4? Dat mag wel, maar dan moet je **beide termen** links door 4 delen: $x - \tfrac{7}{4} = \tfrac{21}{4}$. Dat is correct, maar omslachtiger. De volgorde "eerst optellen of aftrekken, dan delen" houdt de getallen meestal eenvoudig.
:::

:::example Uitgewerkt voorbeeld: een negatieve coëfficiënt
Los op: $10 - 3x = 25$.

1. Het getal 10 staat los; trek aan beide kanten 10 af: $-3x = 15$.
   Let op: links staat nu $-3x$, niet $3x$. Het minteken hoort bij de term.
2. Deel beide kanten door $-3$: $x = 15 : (-3) = -5$.
3. *Controle:* $10 - 3 \times (-5) = 10 + 15 = 25$. Klopt.
:::

:::warning Veelgemaakte fouten bij 2x + 6 = 18
Drie fouten komen zo vaak voor dat je ze moet herkennen.

- **$x = 12$.** Je hebt aan beide kanten 6 afgetrokken, $2x = 12$, maar daarna niet meer gedeeld. Het getal 12 is de waarde van $2x$, niet van $x$. Een controle had het verraden: $2 \times 12 + 6 = 30$, geen 18.
- **$x = 9$.** Je hebt de 6 "vergeten" of alleen aan de linkerkant weggehaald: $2x + 6 - 6 = 18$, en dus $2x = 18$. Maar wie links 6 weghaalt, moet dat ook rechts doen. Controle: $2 \times 9 + 6 = 24$.
- **$x = 6$, maar met een foute route.** "$2x + 6 = 18 - 6 = 12 : 2 = 6$" geeft het goede getal, maar de regel beweert dat $18 - 6 = 6$. Zo'n uitwerking kun je niet controleren en ze leidt bij moeilijkere vergelijkingen tot fouten. Schrijf elke stap als een nieuwe vergelijking.
:::

{{ exercises: 16-004, 16-032 }}

## 5. "Naar de andere kant brengen"

Veel mensen hebben op school geleerd: *breng de 9 naar de andere kant en verander het teken*. Bij $x + 9 = 23$ wordt dat $x = 23 - 9$. Dat klopt, maar het is een **verkorte notatie** van de balansregel, geen aparte regel. Wat je werkelijk doet:

$$
x + 9 = 23 \quad\Longrightarrow\quad x + 9 - 9 = 23 - 9 \quad\Longrightarrow\quad x = 14
$$

Het gevaar van de verkorte regel is dat hij ook wordt toegepast waar hij niet geldt. Bij $2x = 12$ is de 2 geen term maar een **factor**. Wie "de 2 naar de andere kant brengt met een ander teken", krijgt $x = 12 - 2 = 10$, en dat is fout. Een factor verdwijn je door te **delen**: $x = 12 : 2 = 6$.

:::tip Termen en factoren
- Een **term** is iets dat wordt opgeteld of afgetrokken. Je haalt hem weg met de omgekeerde optelling of aftrekking: de term verschijnt aan de andere kant met het tegengestelde teken.
- Een **factor** is iets waarmee wordt vermenigvuldigd. Je haalt hem weg door te delen: de factor verschijnt aan de andere kant als **deler**, en zijn teken blijft hetzelfde.

Twijfel je, schrijf dan de volledige balansstap op. Dat kost één regel en voorkomt bijna alle fouten.
:::

Met omkeerbare bewerkingen kun je nu elke vergelijking oplossen waarin $x$ één keer voorkomt. In de volgende les staat $x$ aan beide kanten van het isgelijkteken, en dan bewijst de balans pas echt zijn waarde.
