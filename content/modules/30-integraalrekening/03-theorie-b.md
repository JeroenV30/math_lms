# De bepaalde integraal en accumulatie

In de vorige les zag je dat ondersom en bovensom voor $y = x^2$ op $[0, 1]$ allebei naar $\tfrac13$ gaan als je het aantal rechthoeken laat groeien. In deze les geef je dat limietgetal een naam en een notatie, je leert wat er gebeurt als de grafiek onder de $x$-as duikt, en je ziet hoe je met integralen totalen uit een tempo berekent.

## 1. De integraal als limiet

:::definition De bepaalde integraal
Laat $f$ een functie zijn op het interval $[a, b]$. Als de Riemann-sommen

$$
\sum_{k=1}^{n} f(x_k)\,\Delta x
$$

naar één en hetzelfde getal gaan wanneer de breedte van de stukjes naar $0$ gaat, ongeacht hoe je de punten $x_k$ kiest, dan heet dat getal de **bepaalde integraal** van $f$ van $a$ tot $b$:

$$
\int_a^b f(x)\,dx = \lim_{n \to \infty} \sum_{k=1}^{n} f(x_k)\,\Delta x.
$$
:::

Voor alle functies die je in deze cursus tegenkomt (polynomen, machten, wortels, exponentiële en goniometrische functies, en combinaties daarvan) bestaat die limiet op elk interval waarop de functie netjes gedefinieerd is.

Lees de notatie langzaam.

- Het teken $\int$ is een uitgerekte S, van het Latijnse *summa*: som. Leibniz koos het in 1675 precies om die reden. Het herinnert eraan dat een integraal een (limiet van een) **som** is.
- $a$ is de **ondergrens** en $b$ de **bovengrens**.
- $f(x)$ heet de **integrand**: wat er opgeteld wordt.
- $dx$ is wat er van $\Delta x$ overblijft als de stukjes oneindig smal worden. Het vertelt ook naar welke variabele je integreert.

Je kunt de notatie letterlijk lezen als "de som van alle strookjes met hoogte $f(x)$ en breedte $dx$, van $x = a$ tot $x = b$". De $\sum$ wordt een $\int$, de $\Delta x$ wordt een $dx$.

Het resultaat van de vorige les kun je nu in één regel opschrijven:

$$
\int_0^1 x^2\,dx = \frac13.
$$

:::tip De letter doet er niet toe
In $\int_0^1 x^2\,dx$ is $x$ een "dummy": de uitkomst is een getal, er zit geen $x$ meer in. Daarom is $\int_0^1 t^2\,dt$ hetzelfde getal $\tfrac13$. Dat wordt belangrijk in les 4, waar de bovengrens zelf variabel wordt.
:::

## 2. Integralen die je al kunt: meetkunde

Voor sommige grafieken is het gebied onder de grafiek een bekende figuur. Dan heb je geen limiet nodig.

:::example Uitgewerkt voorbeeld: rechthoek, driehoek en trapezium
**a.** $\displaystyle\int_1^4 5\,dx$. De grafiek is een horizontale lijn op hoogte 5. Het gebied is een rechthoek met breedte $4 - 1 = 3$ en hoogte $5$, dus de integraal is $15$.

**b.** $\displaystyle\int_0^6 \tfrac12 x\,dx$. Een rechte lijn door de oorsprong. Bij $x = 6$ is de hoogte $3$. Het gebied is een driehoek: $\tfrac12 \cdot 6 \cdot 3 = 9$.

**c.** $\displaystyle\int_2^5 (x + 1)\,dx$. Bij $x = 2$ is de hoogte $3$, bij $x = 5$ is de hoogte $6$. Het gebied is een trapezium met evenwijdige zijden $3$ en $6$ en breedte $3$:

$$
\frac{3 + 6}{2} \cdot 3 = 4{,}5 \cdot 3 = 13{,}5.
$$
:::

:::example Uitgewerkt voorbeeld: een halve cirkel
Wat is $\displaystyle\int_{-3}^{3} \sqrt{9 - x^2}\,dx$?

*Stap 1: herken de grafiek.* Als $y = \sqrt{9 - x^2}$, dan is $y \geq 0$ en $y^2 = 9 - x^2$, dus $x^2 + y^2 = 9$. Dat is de bovenste helft van een cirkel met middelpunt $(0, 0)$ en straal $3$ (stelling van Pythagoras, module 18).

*Stap 2: oppervlakte.* Een halve cirkel met straal $3$ heeft oppervlakte $\tfrac12 \pi \cdot 3^2 = \tfrac92 \pi \approx 14{,}14$.

Dit is een mooi voorbeeld van een integraal die je met meetkunde kunt berekenen, terwijl de primitieve van $\sqrt{9 - x^2}$ buiten het bereik van deze module ligt.
:::

{{ exercises: 30-007, 30-008 }}

## 3. Onder de x-as: oppervlakte met teken

Tot nu toe lag de grafiek steeds boven de $x$-as. Wat gebeurt er als $f(x)$ negatief is?

Kijk naar de Riemann-som $\sum f(x_k)\,\Delta x$. De breedte $\Delta x$ is positief, maar als $f(x_k) < 0$, dan is de term $f(x_k)\,\Delta x$ **negatief**. Rechthoeken onder de $x$-as tellen dus negatief mee. De integraal meet daarom geen gewone oppervlakte, maar een **oppervlakte met teken**.

![Oppervlakte met teken](/images/diagrams/m30-oppervlakte-met-teken.svg "Bij y = x − 4 op [0, 6] ligt een driehoek van 8 onder de x-as (telt negatief) en een driehoek van 2 erboven. De integraal is −6, de totale oppervlakte 10.")

:::example Uitgewerkt voorbeeld: positief en negatief deel
Bereken $\displaystyle\int_0^6 (x - 4)\,dx$.

*Stap 1: waar snijdt de grafiek de $x$-as?* $x - 4 = 0$ geeft $x = 4$.

*Stap 2: het deel onder de as.* Van $0$ tot $4$ ligt een driehoek met breedte $4$ en "hoogte" $4$ (van $y = -4$ tot $y = 0$). Oppervlakte $\tfrac12 \cdot 4 \cdot 4 = 8$, maar die telt **negatief**: $-8$.

*Stap 3: het deel boven de as.* Van $4$ tot $6$ ligt een driehoek met breedte $2$ en hoogte $2$: oppervlakte $2$.

*Stap 4: samen.* $\displaystyle\int_0^6 (x - 4)\,dx = -8 + 2 = -6$.

De **totale oppervlakte** van het gekleurde gebied is daarentegen $8 + 2 = 10$. Integraal en oppervlakte zijn dus niet hetzelfde zodra de grafiek de $x$-as kruist.
:::

:::warning Integraal is niet altijd oppervlakte
Wordt gevraagd naar "de oppervlakte van het gebied", dan is het antwoord altijd positief. Splits het interval dan bij de nulpunten en tel de absolute waarden op. Wordt gevraagd naar "de integraal", dan tellen stukken onder de as negatief. In de toepassingen is het teken vaak betekenisvol: een negatieve snelheid betekent achteruit rijden, een negatief debiet betekent dat er water uit een bak stroomt.
:::

Probeer het met de grafiek hieronder. Zet de grenzen op $0$ en $6$: de computer geeft $-6$. Schuif de bovengrens naar $8$: waar wordt de integraal $0$, en waarom precies daar?

{{ widget: function-plot fn="x - 4" xmin=-1 xmax=9 ymin=-5 ymax=5 area=true lower=0 upper=6 title="Oppervlakte met teken bij y = x − 4" }}

## 4. Rekenregels

Uit de definitie als (limiet van een) som volgen een paar regels die je voortdurend gebruikt. Je hoeft ze niet te bewijzen; bedenk bij elk waarom ze voor sommen van rechthoekjes logisch zijn.

:::theory Rekenregels voor de bepaalde integraal
1. **Intervallen aan elkaar plakken.** $\displaystyle\int_a^b f(x)\,dx + \int_b^c f(x)\,dx = \int_a^c f(x)\,dx$.
2. **Leeg interval.** $\displaystyle\int_a^a f(x)\,dx = 0$: een strook zonder breedte heeft geen oppervlakte.
3. **Grenzen omdraaien.** $\displaystyle\int_b^a f(x)\,dx = -\int_a^b f(x)\,dx$. (Afspraak; zo blijft regel 1 kloppen voor elke volgorde van $a$, $b$ en $c$.)
4. **Constante factor.** $\displaystyle\int_a^b c \cdot f(x)\,dx = c \cdot \int_a^b f(x)\,dx$: elke rechthoek wordt $c$ keer zo hoog.
5. **Som.** $\displaystyle\int_a^b \big(f(x) + g(x)\big)\,dx = \int_a^b f(x)\,dx + \int_a^b g(x)\,dx$: stapel de rechthoekjes op elkaar.
:::

:::example Uitgewerkt voorbeeld: rekenen met de regels
Gegeven: $\displaystyle\int_0^2 f(x)\,dx = 5$ en $\displaystyle\int_2^7 f(x)\,dx = -3$. Bereken:

**a.** $\displaystyle\int_0^7 f(x)\,dx = 5 + (-3) = 2$ (regel 1).

**b.** $\displaystyle\int_7^2 f(x)\,dx = -(-3) = 3$ (regel 3).

**c.** $\displaystyle\int_0^2 \big(4f(x) + 1\big)\,dx = 4 \cdot 5 + \int_0^2 1\,dx = 20 + 2 = 22$ (regels 4 en 5; de integraal van de constante $1$ over een interval van lengte $2$ is een rechthoek van $2$).
:::

{{ exercises: 30-009, 30-010 }}

## 5. Accumulatie: totaal uit een tempo

Nu het belangrijkste idee voor toepassingen. Stel dat $r(t)$ een **tempo** is: het aantal liters per minuut dat in een bak stroomt, het aantal meter per seconde dat een fietser aflegt, het aantal kilowatt dat een zonnepaneel levert. In een kort tijdje $\Delta t$ verandert het tempo nauwelijks, dus komt er ongeveer

$$
r(t) \cdot \Delta t
$$

bij. Tel je al die tijdjes op en maak je ze oneindig kort, dan krijg je precies een integraal:

:::theory Accumulatie
Als $r(t)$ het tempo is waarmee een hoeveelheid verandert, dan is de **totale verandering** van die hoeveelheid tussen $t = a$ en $t = b$

$$
\int_a^b r(t)\,dt.
$$

De eenheid is de eenheid van $r$ maal de eenheid van $t$. Een **beginhoeveelheid** tel je er apart bij op: eindhoeveelheid $=$ beginhoeveelheid $+ \displaystyle\int_a^b r(t)\,dt$.
:::

In de taal van module 29: $r$ is de *afgeleide* van de hoeveelheid. Integreren telt de veranderingen weer bij elkaar op. Dat het omgekeerd zo nauwkeurig werkt, is de inhoud van de hoofdstelling in les 4.

![Snelheid-tijddiagram van een trein](/images/diagrams/m30-snelheid-tijd.svg "Een trein trekt op, rijdt constant en remt af. De afgelegde weg is de oppervlakte onder de snelheidsgrafiek.")

:::example Uitgewerkt voorbeeld: een trein tussen twee stations
Een trein vertrekt uit stilstand. In 40 seconden neemt de snelheid gelijkmatig toe tot 20 m/s. Daarna rijdt hij 120 seconden met 20 m/s, en vervolgens remt hij in 50 seconden gelijkmatig af tot stilstand. Hoe ver liggen de stations uit elkaar?

*Stap 1: teken het snelheid-tijddiagram.* Zie de figuur: een trapezium.

*Stap 2: verdeel in figuren die je kunt uitrekenen.*

- Optrekken: driehoek, $\tfrac12 \cdot 40 \cdot 20 = 400$ m.
- Constant: rechthoek, $120 \cdot 20 = 2400$ m.
- Remmen: driehoek, $\tfrac12 \cdot 50 \cdot 20 = 500$ m.

*Stap 3: optellen.* $400 + 2400 + 500 = 3300$ m, dus $3{,}3$ km.

*Stap 4: controle met eenheden.* Seconden maal meter per seconde geeft meter. Klopt.

*Controle met gezond verstand:* had de trein de hele 210 seconden 20 m/s gereden, dan was dat $4200$ m geweest. Door optrekken en remmen is het minder. Ook dat klopt.
:::

:::example Uitgewerkt voorbeeld: een regenton
Een regenton bevat om 14.00 uur 80 liter. Tijdens een bui stroomt er water in met een tempo van $r(t) = 12 - 2t$ liter per minuut, waarbij $t$ de tijd in minuten na 14.00 uur is. Na 6 minuten is $r(6) = 0$ en stopt de toevoer. Hoeveel water zit er daarna in de ton?

*Stap 1: welke integraal?* De toename is $\displaystyle\int_0^6 (12 - 2t)\,dt$.

*Stap 2: meetkunde.* De grafiek van $r$ is een rechte lijn van $12$ (bij $t = 0$) naar $0$ (bij $t = 6$): een driehoek met oppervlakte $\tfrac12 \cdot 6 \cdot 12 = 36$ liter.

*Stap 3: beginhoeveelheid erbij.* $80 + 36 = 116$ liter.
:::

:::tip Lees een tempo-opgave in drie vragen
1. Wat is het tempo, en in welke eenheid? 2. Over welk tijdsinterval tel ik op? 3. Is er een beginhoeveelheid die ik erbij moet tellen (of een verbruik dat ik eraf moet halen)?
:::

{{ exercises: 30-011, 30-012, 30-013 }}
