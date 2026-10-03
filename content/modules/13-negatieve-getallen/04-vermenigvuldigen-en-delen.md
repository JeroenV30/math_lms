# Waarom min maal min plus is

"Min maal min is plus." Bijna iedereen kent de regel, maar weinig mensen kunnen uitleggen waarom hij geldt. Dat is geen schande: Europese wiskundigen hebben er tot in de 19e eeuw over gediscussieerd. In deze les ga je de regel niet aannemen, maar **afleiden**. Je zult zien dat er eigenlijk geen keus is: wie wil dat de vertrouwde rekenregels uit module 4 blijven gelden, móét min maal min plus laten zijn.

## 1. Positief maal negatief

Begin met het makkelijke geval. In module 4 was $3 \times 4$ "drie groepen van vier". Dan is $3 \times (-4)$ drie groepen van $-4$:

$$
3 \times (-4) = (-4) + (-4) + (-4) = -12
$$

Drie keer € 4 schuld is € 12 schuld. Op de getallenlijn zet je drie keer een stap van vier naar links.

En $(-4) \times 3$? Dat is moeilijker te lezen als "min vier groepen van drie". Maar in module 4 zag je de **wisseleigenschap**: $a \times b = b \times a$. Als die eigenschap ook voor negatieve getallen moet gelden, dan is

$$
(-4) \times 3 = 3 \times (-4) = -12
$$

:::theory Verschillende tekens
Het product van een positief en een negatief getal is negatief. De grootte is het product van de absolute waarden:

$$
3 \times (-4) = -12, \qquad (-7) \times 5 = -35
$$
:::

{{ exercises: 13-015, 13-017 }}

## 2. Negatief maal negatief: het patroon

Nu het eigenlijke raadsel: $(-3) \times (-4)$. "Min drie groepen van min vier" heeft geen directe betekenis. Je moet dus kiezen wat je ermee bedoelt. De wiskunde kiest zo, dat de regels die je al kent, blijven kloppen. De eerste aanwijzing komt uit een patroon.

Laat de eerste factor telkens met 1 dalen:

$$
\begin{aligned}
3 \times (-4) &= -12\\
2 \times (-4) &= -8\\
1 \times (-4) &= -4\\
0 \times (-4) &= 0\\
(-1) \times (-4) &= \;?\\
(-2) \times (-4) &= \;?
\end{aligned}
$$

Elke keer dat de eerste factor met 1 daalt, neemt het product **één groep van $-4$ minder**. En één groep van $-4$ minder is hetzelfde als 4 erbij: de uitkomsten stijgen met 4. Het patroon loopt alleen consequent door als

$$
(-1) \times (-4) = 4 \qquad\text{en}\qquad (-2) \times (-4) = 8
$$

Je kunt dit patroon ook als een **tabel** tekenen: een vermenigvuldigtabel die voorbij nul is doorgetrokken. Elke rij en elke kolom is een rekenkundige rij. Rechtsboven (plus maal plus) staan positieve getallen, linksboven en rechtsonder negatieve, en linksonder, waar beide factoren negatief zijn, worden de getallen weer positief.

![Vermenigvuldigtabel met negatieve factoren](/images/diagrams/m13-vermenigvuldigtabel-tekens.svg "De tafels van −3 tot en met 3. Elke rij en kolom stijgt of daalt in gelijke stappen. Wie de rijen doortrekt, vindt in het vak linksonder (negatief maal negatief) positieve producten.")

{{ exercise: 13-035 }}

## 3. Negatief maal negatief: de distributieve eigenschap

Een patroon is een sterke aanwijzing, maar nog geen bewijs. Het echte argument komt uit de **distributieve eigenschap** van module 4:

$$
a \times (b + c) = a \times b + a \times c
$$

Die eigenschap is het fundament onder al het cijferen. Stel dat hij ook voor negatieve getallen moet gelden. Bekijk dan

$$
(-3) \times \big(4 + (-4)\big)
$$

op twee manieren.

1. **Eerst de haakjes.** $4 + (-4) = 0$, en $(-3) \times 0 = 0$.
2. **Met de distributieve eigenschap.** $(-3) \times 4 + (-3) \times (-4)$. Het eerste product ken je al: $-12$. Dus de uitkomst is $-12 + (-3) \times (-4)$.

Beide manieren moeten hetzelfde geven:

$$
-12 + (-3) \times (-4) = 0
$$

Er is maar één getal dat je bij $-12$ kunt optellen om 0 te krijgen: $12$. Dus

$$
(-3) \times (-4) = 12
$$

:::theory Waarom min maal min plus is
Als de distributieve eigenschap ook voor negatieve getallen moet gelden, dan is het product van twee negatieve getallen **positief**. Het is geen afspraak die je ook anders had kunnen maken zonder gevolgen: elke andere keuze zou de distributieve eigenschap, en daarmee het hele rekenen, onbruikbaar maken.
:::

Dit argument werkt voor elk paar getallen, niet alleen voor 3 en 4. Met letters: $(-a)\times b + (-a) \times (-b) = (-a) \times (b + (-b)) = (-a) \times 0 = 0$, dus $(-a)\times(-b)$ is de tegengestelde van $(-a)\times b = -ab$, en dat is $ab$.

:::example Uitgewerkt voorbeeld: handig rekenen met de distributieve eigenschap
Bereken $(-6) \times 17 + (-6) \times (-7)$.

1. **Herken de gemeenschappelijke factor** $-6$. Volgens de distributieve eigenschap is dit $(-6) \times \big(17 + (-7)\big)$.
2. **Reken de haakjes uit:** $17 + (-7) = 10$.
3. **Vermenigvuldig:** $(-6) \times 10 = -60$.

Controle via de lange weg: $(-6) \times 17 = -102$ en $(-6)\times(-7) = 42$. Samen $-102 + 42 = -60$. Wie per ongeluk $(-6)\times(-7) = -42$ neemt, komt uit op $-144$, en ziet aan de tweede route meteen dat er iets mis is.
:::

{{ exercises: 13-016, 13-036 }}

## 4. Een derde blik: vermenigvuldigen met −1 is spiegelen

Wat doet vermenigvuldigen met $-1$? Uit het voorgaande volgt $(-1) \times 3 = -3$ en $(-1) \times (-3) = 3$. Vermenigvuldigen met $-1$ geeft dus de **tegengestelde**: het spiegelt een getal in het nulpunt.

![Vermenigvuldigen met −1 als spiegeling](/images/diagrams/m13-spiegelen-min-een.svg "Vermenigvuldigen met −1 spiegelt elk getal in nul: 3 gaat naar −3, en −2 gaat naar 2. Twee keer spiegelen brengt je terug.")

Vanuit dat beeld is $(-3) \times (-4)$ te lezen als $(-1) \times 3 \times (-4)$: eerst $3 \times (-4) = -12$, en dan spiegelen geeft $12$. Twee keer spiegelen (één keer voor elke negatieve factor) brengt je terug aan de positieve kant. Dat is dezelfde reden waarom $-(-4) = 4$.

Een praktisch beeld dat sommige mensen helpt: een film van iemand die **achteruit** loopt (negatieve snelheid), **teruggespoeld** afgespeeld (negatieve tijd), laat iemand zien die vooruit loopt. Zulke verhalen zijn hulpmiddelen; het echte argument blijft de distributieve eigenschap.

## 5. Delen

Delen is in module 5 het omgekeerde van vermenigvuldigen: $12 : 3 = 4$ omdat $3 \times 4 = 12$. Dat blijft zo, en daarmee liggen de tekens bij delen vast.

$$
\begin{aligned}
-12 : 3 &= -4 &&\text{want } 3 \times (-4) = -12\\
12 : (-3) &= -4 &&\text{want } (-3) \times (-4) = 12\\
-12 : (-3) &= 4 &&\text{want } (-3) \times 4 = -12
\end{aligned}
$$

:::theory Tekenregel voor vermenigvuldigen en delen
| Tekens | Product of quotiënt |
|---|---|
| $+$ en $+$ | $+$ |
| $+$ en $-$ | $-$ |
| $-$ en $+$ | $-$ |
| $-$ en $-$ | $+$ |

**Gelijke tekens geven plus, verschillende tekens geven min.** De grootte van de uitkomst bereken je met de absolute waarden, precies zoals je gewend bent.
:::

Twee dingen veranderen niet door de tekens:

- **Nul gedeeld door een getal is nul.** $0 : (-5) = 0$, want $(-5) \times 0 = 0$.
- **Delen door nul kan niet**, ook niet met negatieve getallen. Er is geen getal dat met 0 vermenigvuldigd $-12$ geeft.

Een breuk met een minteken kun je op drie plekken schrijven, en ze betekenen hetzelfde:

$$
-\frac{3}{4} = \frac{-3}{4} = \frac{3}{-4}
$$

Meestal zet je het minteken vóór de breuk of in de teller.

{{ exercises: 13-018, 13-019, 13-021 }}

## 6. Meer dan twee factoren

Bij een product van meerdere factoren kun je de tekens één voor één afhandelen. Elke negatieve factor spiegelt het tussenresultaat. Twee spiegelingen heffen elkaar op. Dus:

:::theory Teken van een product
Is geen enkele factor nul, dan is het product

- **positief** bij een **even** aantal negatieve factoren,
- **negatief** bij een **oneven** aantal negatieve factoren.

Is een van de factoren nul, dan is het hele product nul.
:::

:::example Uitgewerkt voorbeeld: vier factoren
Bereken $(-2) \times 5 \times (-3) \times (-1)$.

1. **Teken:** er zijn drie negatieve factoren, $-2$, $-3$ en $-1$. Drie is oneven, dus het product is negatief.
2. **Grootte:** $2 \times 5 \times 3 \times 1 = 30$.
3. **Antwoord:** $-30$.

Controle stap voor stap: $(-2) \times 5 = -10$; $-10 \times (-3) = 30$; $30 \times (-1) = -30$.
:::

Deze regel wordt in module 14 belangrijk bij machten: $(-2)^3 = (-2)\times(-2)\times(-2)$ heeft drie negatieve factoren en is dus negatief, terwijl $(-2)^4$ er vier heeft en positief is.

{{ exercise: 13-020 }}
