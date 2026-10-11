# Som en product onderscheiden

Expressies worden snel lang. In les 2 kwam je de lucifersexpressie $2n + n + 1$ tegen, en die is korter te schrijven als $3n + 1$. Zulke vereenvoudigingen zijn het dagelijkse werk van de algebra. In deze les leer je wanneer je termen mag samennemen, en vooral wanneer **niet**. Daarna zet je optellen en vermenigvuldigen van letters naast elkaar, want precies daar ontstaan de meest hardnekkige fouten.

## 1. Waarom $3x + 5x = 8x$

Drie appels plus vijf appels zijn acht appels. Drie keer een getal plus vijf keer datzelfde getal is acht keer dat getal. In symbolen:

$$
3x + 5x = 8x.
$$

Dat is geen nieuwe afspraak, maar een gevolg van de **distributieve eigenschap** uit module 4: $3 \times 7 + 5 \times 7 = (3 + 5) \times 7 = 8 \times 7$. Met een letter in plaats van 7:

$$
3x + 5x = (3 + 5)x = 8x.
$$

Je telt de **coëfficiënten** op; het **letterdeel** blijft wat het is. Aftrekken gaat net zo: $7x - 3x = (7 - 3)x = 4x$, en $3x - 2x = (3 - 2)x = 1x = x$.

Kun je je dat niet goed voorstellen, denk dan aan $x$ als een vast, onbekend bedrag, zeg de prijs van een kaartje. Drie kaartjes en daarna nog vijf kaartjes kosten samen evenveel als acht kaartjes, wat de prijs ook is.

{{ exercises: 15-013, 15-014 }}

## 2. Gelijksoortige termen

:::definition Gelijksoortige termen
Twee termen zijn **gelijksoortig** als ze precies hetzelfde letterdeel hebben, met dezelfde letters en dezelfde exponenten. Alleen de coëfficiënt mag verschillen. Gelijksoortige termen kun je samennemen door hun coëfficiënten op te tellen:

$$
ax + bx = (a + b)x.
$$
:::

| Termen | Gelijksoortig? | Waarom |
|---|---|---|
| $3x$ en $-5x$ | ja | beide letterdeel $x$ |
| $4x^2$ en $x^2$ | ja | beide letterdeel $x^2$ |
| $2ab$ en $7ba$ | ja | $ba = ab$ (wisseleigenschap) |
| $3x$ en $3x^2$ | nee | $x$ is iets anders dan $x^2$ |
| $5x$ en $5y$ | nee | verschillende letters |
| $2xy$ en $2x$ | nee | letterdeel $xy$ tegenover $x$ |
| $6$ en $-2$ | ja | allebei constante termen |

De derde regel verdient een opmerking. $7ba$ ziet er anders uit dan $2ab$, maar $b \times a = a \times b$. Het letterdeel is hetzelfde, dus $2ab + 7ba = 9ab$. Om zulke gevallen snel te herkennen, schrijf je de letters in een term bij voorkeur in alfabetische volgorde.

:::warning Gelijksoortig is meer dan dezelfde letter zien
$x$, $x^2$ en $xy$ bevatten allemaal de letter $x$, maar het zijn drie verschillende soorten termen. $3x^2 + 5x$ kun je niet verder vereenvoudigen. Controle bij $x = 10$: $3 \times 100 + 50 = 350$, terwijl bijvoorbeeld "$8x^2$" 800 zou geven en "$8x$" 80.
:::

{{ exercise: 15-016 }}

## 3. Samennemen in een langere expressie

Bij een langere expressie zoek je eerst de groepjes gelijksoortige termen. Het teken vóór een term **verhuist mee**: het hoort bij de term, niet bij de term ervoor.

:::example Uitgewerkt voorbeeld: twee letters
Vereenvoudig $3x + 2y + 4x - y$.

- De $x$-termen: $3x$ en $4x$. Samen $7x$.
- De $y$-termen: $2y$ en $-y$ (let op: coëfficiënt $-1$). Samen $2y - y = y$.
- Resultaat: $7x + y$.

Verder gaat het niet. $7x + y$ is geen $8x$ en ook geen $8xy$: $x$ en $y$ zijn verschillende soorten.

Controle met $x = 2$ en $y = 5$: origineel $6 + 10 + 8 - 5 = 19$; vereenvoudigd $14 + 5 = 19$.
:::

:::example Uitgewerkt voorbeeld: machten en constanten
Vereenvoudig $5a^2 - 3a + 2 + 2a^2 + a - 9$.

Zet de termen in groepjes, met hun teken:

$$
(5a^2 + 2a^2) + (-3a + a) + (2 - 9) = 7a^2 - 2a - 7.
$$

Gebruikelijk is om de termen te ordenen van de hoogste naar de laagste macht: eerst $a^2$, dan $a$, dan de constante.

Controle met $a = 3$: origineel $45 - 9 + 2 + 18 + 3 - 9 = 50$; vereenvoudigd $63 - 6 - 7 = 50$.
:::

{{ exercises: 15-015, 15-035 }}

## 4. Foutenanalyse: $3x + 2$ is geen $5x$

De meest voorkomende fout in de beginnende algebra is het samennemen van termen die niet gelijksoortig zijn. Typisch: $3x + 2 = 5x$. Waarom is dat fout? Vul een getal in. Bij $x = 10$ is $3x + 2 = 32$, maar $5x = 50$. Bij $x = 0$ is $3x + 2 = 2$ en $5x = 0$. De twee expressies zijn verschillend.

De oorzaak ligt in het zien van "de 3 en de 2" als twee getallen die je bij elkaar kunt optellen. Maar de 3 is geen term: het is een factor in de term $3x$. De 2 is een losse term. In het kaartjesbeeld: drie kaartjes plus twee euro zijn niet vijf kaartjes. $3x + 2$ is al zo eenvoudig als het kan.

:::tip De controle van tien seconden
Twijfel je of een vereenvoudiging klopt, vul dan $x = 10$ (of een ander getal dat niet 0, 1 of 2 is) in beide vormen in. Verschillen de uitkomsten, dan is de vereenvoudiging zeker fout. Met $x = 10$ zie je bovendien vaak direct wat er misgaat: $3x + 2 = 32$, en $32$ is duidelijk "drie tientjes en twee", geen vijf tientjes.
:::

## 5. Optellen tegenover vermenigvuldigen

Bij optellen tel je **coëfficiënten** op en blijft het letterdeel gelijk. Bij vermenigvuldigen gebeurt iets heel anders: je vermenigvuldigt **alle** factoren met elkaar, de getallen en de letters.

$$
x + x = 2x, \qquad x \cdot x = x^2.
$$

Neem $x = 3$: de som is $3 + 3 = 6$, het product $3 \times 3 = 9$. Nog een paar voorbeelden naast elkaar:

| Som | Uitkomst | Product | Uitkomst |
|---|---|---|---|
| $3x + 2x$ | $5x$ | $3x \cdot 2x$ | $6x^2$ |
| $x^2 + x^2$ | $2x^2$ | $x^2 \cdot x^2$ | $x^4$ |
| $4a + a$ | $5a$ | $4a \cdot a$ | $4a^2$ |
| $2x + 3y$ | (gaat niet verder) | $2x \cdot 3y$ | $6xy$ |

Valt je de laatste regel op? Een som van twee verschillende soorten termen kun je niet vereenvoudigen, maar een **product** van verschillende letters wel: alle factoren worden gewoon achter elkaar gezet. Voor vermenigvuldigen hoeven termen dus niet gelijksoortig te zijn.

:::example Uitgewerkt voorbeeld: $3x \cdot 2x$
Een product van vier factoren: $3 \cdot x \cdot 2 \cdot x$. Met de wissel- en schakeleigenschap (module 4) zet je de getallen bij elkaar en de letters bij elkaar:

$$
3x \cdot 2x = (3 \cdot 2) \cdot (x \cdot x) = 6x^2.
$$

Controle met $x = 5$: $15 \cdot 10 = 150$ en $6 \cdot 25 = 150$.
:::

:::example Uitgewerkt voorbeeld: $3x \cdot x$
Hier gaat het vaak mis. Het antwoord is **niet** $3x$. Er staan drie factoren: $3$, $x$ en $x$. Dus

$$
3x \cdot x = 3 \cdot x \cdot x = 3x^2.
$$

Wie $3x$ opschrijft, heeft één factor $x$ laten vallen, alsof vermenigvuldigen met $x$ "niets doet". Dat geldt alleen voor vermenigvuldigen met 1. Controle met $x = 4$: $12 \cdot 4 = 48$, en $3 \cdot 16 = 48$; terwijl $3x = 12$.
:::

{{ exercises: 15-017, 15-036 }}

## 6. Foutenanalyse: $x^2$ is geen $2x$

Een verwante verwarring: $x^2$ en $2x$. Het eerste is $x$ keer zichzelf, het tweede $x$ plus zichzelf. Toch schrijven beginners ze soms door elkaar, misschien omdat in beide een 2 en een $x$ staan. De grafiek hieronder laat beide expressies zien als functie van $x$.

{{ widget: function-plot fn="x^2" fn2="2*x" xmin=-3 xmax=5 ymin=-6 ymax=16 title="x² (eerste grafiek) tegenover 2x (tweede grafiek)" }}

De twee grafieken snijden elkaar in precies twee punten: bij $x = 0$ (beide 0) en bij $x = 2$ (beide 4). Op alle andere plekken zijn ze verschillend. Tussen 0 en 2 is $2x$ groter, daarbuiten is $x^2$ groter. Wie alleen $x = 2$ probeert, zou kunnen denken dat $x^2 = 2x$ altijd geldt. Een tweede getal maakt direct duidelijk dat dat niet zo is.

:::tip Kies je controlegetal met zorg
De getallen 0, 1 en 2 zijn verraderlijk: $0^2 = 2 \cdot 0$, $1^2 = 1 \cdot 1$, $2^2 = 2 \cdot 2$, $2 + 2 = 2 \cdot 2$. Veel fouten vallen daar toevallig weg. Neem liever 3, 7, 10 of $-3$.
:::

## 7. Delen door een getal

Bij delen gaat het om **factoren**, net als bij vermenigvuldigen. In $\dfrac{6x}{3}$ deel je de getalsfactor 6 door 3, en de $x$ blijft staan:

$$
\frac{6x}{3} = \frac{6}{3} \cdot x = 2x.
$$

Bij een som in de teller moet je **elke term** delen: $\dfrac{6x + 9}{3} = 2x + 3$. Controle met $x = 1$: $\dfrac{15}{3} = 5$ en $2 + 3 = 5$.

:::warning Schrappen mag alleen met factoren
In $\dfrac{x + 3}{x}$ mag je de $x$ niet "wegstrepen" tegen de $x$ in de teller. De $x$ boven is een **term**, geen factor van de hele teller. Bij $x = 3$ is $\dfrac{3 + 3}{3} = 2$, niet 3. Wel geldt, voor $x \neq 0$: $\dfrac{x + 3}{x} = \dfrac{x}{x} + \dfrac{3}{x} = 1 + \dfrac{3}{x}$.
:::

{{ exercise: 15-018 }}
