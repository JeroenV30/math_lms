# Van woorden naar symbolen

In de introductie zag je hoe al-Khwarizmi in woorden schreef wat jij in tekens schrijft. In deze les leer je die vertaling zelf maken, in beide richtingen. Daarvoor heb je drie dingen nodig: de **afspraken** over hoe je expressies noteert, een helder idee van **wat een letter betekent**, en oefening in het **opstellen** van expressies bij situaties.

## 1. Afspraken over de notatie

Een symbolische taal werkt alleen als iedereen dezelfde afspraken volgt. Dit zijn de belangrijkste.

:::definition Notatieafspraken
- **Geen maalteken tussen getal en letter.** $3x$ betekent $3 \times x$. Ook tussen letters: $ab$ betekent $a \times b$, en $3xy$ betekent $3 \times x \times y$.
- **Het getal staat vooraan.** Je schrijft $3x$, niet $x3$. Het product is hetzelfde (wisseleigenschap), maar de vaste volgorde maakt expressies beter leesbaar.
- **Een factor 1 laat je weg.** $1x$ schrijf je als $x$, en $-1x$ als $-x$.
- **Machten.** $x^2$ betekent $x \times x$, en $x^3$ betekent $x \times x \times x$ (module 14).
- **Delen als breuk.** $x : 3$ schrijf je meestal als $\dfrac{x}{3}$ of $x/3$.
- **Tussen twee getallen blijft het maalteken staan.** $2 \times 3$ is 6; "$23$" is het getal drieëntwintig. Daarom schrijf je bij invullen haakjes of een maalteken: $3 \times 4$ of $3 \cdot 4$, nooit $34$.
:::

Het weglaten van het maalteken lijkt een kleinigheid, maar het heeft een gevolg dat je goed moet onthouden: in $3x^2$ hoort het kwadraat alleen bij de $x$, niet bij de 3. Dus $3x^2 = 3 \times x \times x$, en niet $(3x)^2 = 3x \times 3x = 9x^2$. Dat volgt uit de rekenvolgorde: machten gaan vóór vermenigvuldigen. In les 3 kom je daar uitgebreid op terug.

:::warning $2x$ en $x^2$ zijn verschillende dingen
$2x = x + x$ (twee keer $x$), terwijl $x^2 = x \times x$ ($x$ keer zichzelf). Bij $x = 5$ is $2x = 10$ maar $x^2 = 25$. Dat ze bij $x = 2$ allebei 4 opleveren, is toeval; daar kom je in les 4 op terug.
:::

## 2. Van woorden naar een expressie

Een zin vertalen naar symbolen gaat het best in twee stappen: eerst zoek je uit **welke bewerking als laatste** gebeurt, daarna schrijf je de stukken op. De volgorde van de woorden is daarbij niet altijd de volgorde van de tekens.

| In woorden | Expressie | Toelichting |
|---|---|---|
| drie keer een getal, daarna vijf erbij | $3x + 5$ | eerst vermenigvuldigen, dan optellen |
| drie keer de som van een getal en vijf | $3(x + 5)$ | eerst optellen, dan het geheel maal 3 |
| vijf meer dan een getal | $x + 5$ | |
| vijf minder dan een getal | $x - 5$ | niet $5 - x$! |
| het getal afgetrokken van vijf | $5 - x$ | |
| de helft van een getal | $\dfrac{x}{2}$ | of $\tfrac12 x$ |
| het kwadraat van de som van $a$ en $b$ | $(a + b)^2$ | eerst optellen, dan kwadrateren |
| de som van de kwadraten van $a$ en $b$ | $a^2 + b^2$ | eerst kwadrateren, dan optellen |

De twee bovenste regels laten het verschil zien dat in de praktijk de meeste fouten veroorzaakt. Bij "drie keer een getal, daarna vijf erbij" wordt alleen het getal met drie vermenigvuldigd. Bij "drie keer de som" wordt het hele resultaat van de optelling met drie vermenigvuldigd, ook de vijf. **Haakjes** maken dat zichtbaar: alles wat tussen haakjes staat, wordt als één geheel behandeld.

:::example Uitgewerkt voorbeeld: drie vertalingen
**a.** "Neem een getal, trek er 4 van af en verdubbel het resultaat."
De laatste handeling is het verdubbelen, en wat verdubbeld wordt is "het getal min 4". Dus: $2(x - 4)$.

**b.** "Verdubbel een getal en trek er daarna 4 van af."
Nu is de laatste handeling het aftrekken. Eerst $2x$, dan $-4$: $2x - 4$.

**c.** "Het kwadraat van een getal, vermeerderd met drie keer dat getal."
Twee stukken: het kwadraat $x^2$ en drie keer het getal $3x$. Samen: $x^2 + 3x$.

Controle met een getal, bijvoorbeeld $x = 10$: bij **a** krijg je in woorden $10 - 4 = 6$, verdubbeld 12; de expressie geeft $2(10 - 4) = 12$. Bij **b** krijg je $20 - 4 = 16$, en $2 \times 10 - 4 = 16$. Bij **c**: $100 + 30 = 130$. Een controle met één getal kost weinig en laat meteen zien of je haakjes op de goede plek staan.
:::

{{ exercises: 15-003, 15-004, 15-007 }}

## 3. Variabele, onbekende, parameter

Een letter kan in de wiskunde verschillende rollen spelen. De letter zelf ziet er steeds hetzelfde uit, maar wat je ermee bedoelt verschilt. Het helpt enorm om die rollen uit elkaar te houden.

:::definition Drie rollen van een letter
- Een **variabele** is een letter die verschillende waarden kan aannemen, en waarbij het je juist gaat om wat er gebeurt als die waarde verandert. In de prijsregel $8 + 3n$ is $n$ een variabele: de regel geldt voor elk aantal exemplaren.
- Een **onbekende** is een letter die staat voor één bepaald getal (of een paar getallen) dat je nog niet kent en wilt vinden. In $x^2 + 10x = 39$ is $x$ een onbekende: er is een specifiek getal dat de uitspraak waar maakt.
- Een **parameter** is een letter die binnen één situatie vastligt, maar die je kunt veranderen om een hele familie van situaties tegelijk te beschrijven. Het is een "variabele op een hoger niveau".
:::

Een voorbeeld maakt het verschil met een parameter duidelijk. Taxibedrijven rekenen een **instaptarief** plus een **prijs per kilometer**. Bij één bedrijf liggen die twee bedragen vast, bijvoorbeeld € 3,50 instap en € 2,20 per kilometer. De ritprijs bij een rit van $x$ kilometer is dan

$$
3{,}50 + 2{,}20x \text{ euro}.
$$

Hier is $x$ de variabele: de ritlengte verschilt per rit. Wil je nu alle taxibedrijven tegelijk beschrijven, dan vervang je ook de vaste bedragen door letters. Noem het instaptarief $b$ en de prijs per kilometer $a$:

$$
\text{ritprijs} = b + ax.
$$

Binnen één bedrijf zijn $a$ en $b$ vaste getallen; wie van bedrijf wisselt, krijgt andere waarden. $a$ en $b$ zijn dus **parameters**. Met de schuifregelaars hieronder kun je ze veranderen: de lijn laat de ritprijs zien als functie van de ritlengte $x$.

{{ widget: function-plot fn="a*x+b" a=2.2 amin=0.5 amax=4 astep=0.1 b=3.5 bmin=0 bmax=10 xmin=0 xmax=20 ymin=0 ymax=60 title="Ritprijs b + ax: parameters a (per km) en b (instap)" }}

Wat zie je? De parameter $b$ bepaalt waar de lijn begint: bij een rit van 0 km betaal je alleen het instaptarief. De parameter $a$ bepaalt hoe steil de lijn oploopt: hoe duurder elke kilometer, hoe sneller de prijs stijgt. In module 17 (grafieken) en module 19 (lineaire functies) werk je hier uitgebreid mee.

:::tip Welke rol speelt de letter?
Stel bij elke letter de vraag: *ligt ze vast, of verandert ze?* En als ze vastligt: *ken ik haar waarde al?* Een letter die verandert is een variabele; een letter die vastligt maar onbekend is, is een onbekende; een letter die vastligt binnen één situatie maar per situatie verschilt, is een parameter. Dezelfde letter kan in een ander verband een andere rol spelen. Wie de vraag stelt "bij welke ritlengte kost een rit € 25?", maakt van de variabele $x$ ineens een onbekende.
:::

Dit onderscheid is niet alleen modern. Toen de Franse wiskundige François Viète in 1591 letters ging gebruiken, maakte hij al een verschil tussen letters voor **onbekende** grootheden (hij nam klinkers: A, E, ...) en letters voor **bekende** grootheden (medeklinkers: B, C, D, ...). Zijn bekende grootheden zijn wat wij parameters noemen. Descartes koos in 1637 de gewoonte die wij nog steeds volgen: $x, y, z$ voor onbekenden en $a, b, c$ voor bekende grootheden.

{{ exercises: 15-032, 15-029 }}

## 4. Expressies opstellen bij situaties

### Omtrekken

De omtrek van een figuur is de totale lengte van de rand. Als de zijden letters zijn, is de omtrek een expressie.

:::example Uitgewerkt voorbeeld: omtrek van een rechthoek
Een rechthoek heeft lengte $l$ en breedte $b$. Loop de rand rond: lengte, breedte, lengte, breedte. De omtrek is

$$
l + b + l + b.
$$

Twee keer $l$ is $2l$, twee keer $b$ is $2b$, dus de omtrek is ook $2l + 2b$. En omdat je steeds een lengte plus een breedte hebt, twee keer, kun je ook schrijven $2(l + b)$. Drie schrijfwijzen voor dezelfde grootheid:

$$
l + b + l + b = 2l + 2b = 2(l + b).
$$

Controle met $l = 7$ en $b = 3$: $7 + 3 + 7 + 3 = 20$, $14 + 6 = 20$, $2 \times 10 = 20$. Expressies die voor elke waarde van de letters dezelfde uitkomst geven, heten **gelijkwaardig**. In de lessen 4 en 5 leer je zulke omzettingen systematisch maken.
:::

Een iets lastiger geval: een rechthoek waarvan de lengte 3 cm meer is dan de breedte. Noem de breedte $b$; dan is de lengte $b + 3$. De omtrek is $2 \times b + 2 \times (b + 3)$. Je zult in les 5 zien dat dat gelijk is aan $4b + 6$. Voor nu is het belangrijkste: je hebt maar één letter nodig, omdat de lengte uit de breedte volgt. **Kies zo weinig mogelijk letters**, en druk de rest daarin uit.

{{ exercises: 15-006 }}

### Lucifersfiguren

Een klassiek voorbeeld is een rij vierkantjes, gelegd met lucifers. Eén vierkantje kost 4 lucifers. Leg je er een tweede tegenaan, dan deelt het één zijde met het eerste; je hebt dus maar 3 extra lucifers nodig.

![Rij vierkantjes van lucifers](/images/diagrams/m15-lucifers.svg "Figuur 1, 2 en 3 van het patroon: 4, 7 en 10 lucifers. Elk nieuw vierkantje kost 3 lucifers, omdat het een zijde deelt met zijn buurman.")

| aantal vierkantjes $n$ | 1 | 2 | 3 | 4 | 10 |
|---|---|---|---|---|---|
| aantal lucifers | 4 | 7 | 10 | 13 | ? |

Hoeveel lucifers heb je nodig voor $n$ vierkantjes? Er zijn verschillende manieren om ernaar te kijken, en het mooie is dat ze allemaal op hetzelfde uitkomen.

:::example Uitgewerkt voorbeeld: drie manieren van kijken
**Manier 1: één begin plus steeds drie.** Leg eerst één staande lucifer aan de linkerkant. Elk vierkantje vraagt daarna precies drie lucifers: boven, onder en rechts. Voor $n$ vierkantjes: $1 + 3n$.

**Manier 2: eerste vierkantje apart.** Het eerste vierkantje kost 4. Elk van de overige $n - 1$ vierkantjes kost 3. Samen: $4 + 3(n - 1)$.

**Manier 3: liggend en staand.** Liggende lucifers: $n$ boven en $n$ onder, dus $2n$. Staande lucifers: tussen en naast de vierkantjes staan er $n + 1$. Samen: $2n + (n + 1)$.

Drie expressies, $1 + 3n$, $4 + 3(n - 1)$ en $2n + n + 1$. Controle bij $n = 4$: $1 + 12 = 13$; $4 + 3 \times 3 = 13$; $8 + 5 = 13$. Bij $n = 10$: $1 + 30 = 31$; $4 + 27 = 31$; $20 + 11 = 31$. Ze zijn gelijkwaardig. De kortste schrijfwijze is $3n + 1$.
:::

Dat verschillende redeneringen tot gelijkwaardige expressies leiden, is precies de reden dat je leert expressies te **herschrijven**. Na les 5 kun je $4 + 3(n - 1)$ zelf omzetten in $3n + 1$, zonder getallen te proberen.

{{ exercise: 15-031 }}

## 5. De onderdelen van een expressie

Om over expressies te kunnen praten, heb je woorden nodig voor hun onderdelen.

:::definition Term, factor, coëfficiënt, constante
- Een **term** is een stuk van een som. In $4x - 3y + 7$ zijn de termen $4x$, $-3y$ en $7$. Het teken vóór een term hoort bij die term: de tweede term is $-3y$, niet $3y$.
- Een **factor** is een stuk van een product. In de term $-3y$ zijn $-3$ en $y$ factoren.
- De **coëfficiënt** is de getalsfactor van een term met letters, inclusief het teken. De coëfficiënt van $y$ in $-3y$ is $-3$. Staat er geen getal, dan is de coëfficiënt 1 (bij $x$) of $-1$ (bij $-x$).
- Een term zonder letters, zoals $7$, heet de **constante term**.
:::

Het onderscheid tussen term en factor wordt in les 4 cruciaal. Termen worden opgeteld, factoren vermenigvuldigd, en voor optellen en vermenigvuldigen gelden andere regels. Wie bij $3x + 5$ "de 3 en de 5" als hetzelfde soort onderdeel ziet, gaat later de mist in: de 3 is een factor in de term $3x$, de 5 is een losse term.

:::example Uitgewerkt voorbeeld: een expressie ontleden
Bekijk $5a^2 - a + 2ab - 9$.

- Termen: $5a^2$, $-a$, $2ab$ en $-9$. Vier termen.
- Coëfficiënten: bij $a^2$ is het 5, bij $a$ is het $-1$ (want $-a = -1 \cdot a$), bij $ab$ is het 2.
- De constante term is $-9$.
- De term $2ab$ bestaat uit drie factoren: $2$, $a$ en $b$.
:::

{{ exercise: 15-005 }}
