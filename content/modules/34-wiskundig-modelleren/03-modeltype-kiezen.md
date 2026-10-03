# Een modeltype kiezen en parameters fitten

Bij stap 3 van de modelleercyclus moet je een **modelvorm** kiezen: wordt het een lineaire functie, een parabool, een exponentiële functie of een sinus? Daarna moet je de **parameters** bepalen. In deze les leer je beide. Je gebruikt daarvoor twee bronnen van informatie, die elkaar aanvullen: de **gegevens** (wat zie je in de metingen?) en het **mechanisme** (wat weet je over hoe het werkt?).

## 1. Aanwijzingen uit de gegevens

Stel dat je metingen hebt bij gelijke stappen van de invoer, bijvoorbeeld elk uur of elke kilometer. Dan kun je met een paar eenvoudige berekeningen veel over het modeltype te weten komen. Je kent deze technieken al uit de modules 19, 21 en 25; hier zetten we ze naast elkaar.

:::theory Herkennen aan een tabel met gelijke stappen
- **Eerste verschillen constant** (elke stap komt er hetzelfde bij) → **lineair**: $y = ax + b$.
- **Tweede verschillen constant** (de verschillen zelf nemen elke stap even veel toe) → **kwadratisch**: $y = ax^2 + bx + c$.
- **Quotiënten constant** (elke stap wordt het met dezelfde factor vermenigvuldigd) → **exponentieel**: $y = b \cdot g^x$.
- **Herhaling met vaste periode** (na een vaste tijd komen dezelfde waarden terug) → **periodiek**, bijvoorbeeld een sinus.
:::

:::example Uitgewerkt voorbeeld: drie tabellen, drie modellen
Bekijk drie meetreeksen bij $x = 0, 1, 2, 3, 4$.

| $x$ | 0 | 1 | 2 | 3 | 4 |
|---|---|---|---|---|---|
| reeks A | 6 | 10 | 14 | 18 | 22 |
| reeks B | 1 | 3 | 9 | 19 | 33 |
| reeks C | 6 | 9 | 13{,}5 | 20{,}25 | 30{,}375 |

**Reeks A.** Verschillen: $4, 4, 4, 4$. Constant, dus lineair. Startwaarde 6, helling 4: $y = 4x + 6$.

**Reeks B.** Eerste verschillen: $2, 6, 10, 14$. Niet constant. Tweede verschillen: $4, 4, 4$. Constant, dus kwadratisch. Bij een kwadratische functie $ax^2 + bx + c$ is het tweede verschil (bij stapgrootte 1) gelijk aan $2a$, dus $a = 2$. Met $c = 1$ (de waarde bij $x = 0$) en het eerste punt: $2 + b + 1 = 3$, dus $b = 0$. Model: $y = 2x^2 + 1$.

**Reeks C.** Verschillen: $3;\ 4{,}5;\ 6{,}75;\ 10{,}125$. Niet constant, en de tweede verschillen ook niet. Quotiënten: $9/6 = 1{,}5$, $13{,}5/9 = 1{,}5$, enzovoort. Constant, dus exponentieel: $y = 6 \cdot 1{,}5^x$.

**Controle.** Vul in elk model $x = 4$ in: $4 \cdot 4 + 6 = 22$, $2 \cdot 16 + 1 = 33$, $6 \cdot 1{,}5^4 = 6 \cdot 5{,}0625 = 30{,}375$. Alles klopt.
:::

:::warning Echte metingen zijn nooit perfect
In een schoolboektabel zijn de verschillen precies constant. In echte metingen schommelen ze, door meetfouten en door alles wat het model weglaat. Je zoekt dan naar verschillen of quotiënten die *ongeveer* constant zijn, zonder duidelijke trend. En met vier of vijf punten kun je vaak meerdere modeltypen laten passen. Daarom heb je ook het mechanisme nodig.
:::

{{ exercise: 34-006 }}

## 2. Aanwijzingen uit het mechanisme

Data laten zien *dat* iets op een bepaalde manier verloopt. Het mechanisme vertelt *waarom*, en daarmee ook of je het patroon mag doortrekken. Stel je bij elk probleem de vraag: **wat bepaalt de verandering?**

| Mechanisme | Modeltype | Voorbeeld |
|---|---|---|
| Per eenheid komt er een vaste hoeveelheid bij of af | lineair | taxitarief per km, voorraad die vast wordt verbruikt |
| De grootheid hangt af van een kwadraat (oppervlakte, bewegingsenergie) | kwadratisch | remafstand (bewegingsenergie $\sim v^2$), valafstand |
| De verandering is evenredig met de hoeveelheid zelf | exponentieel | rente op rente, afbraak van een medicijn, beginfase van een epidemie |
| Een oorzaak die zich herhaalt (dag, seizoen, omwenteling) | periodiek | daglengte, getijden, temperatuur over het jaar |
| Exponentieel, maar met een plafond | logistisch | epidemie die afremt, bevolking met beperkte voedselvoorraad |

Het mechanisme is vaak het sterkste argument. Een medicijn wordt in het lichaam afgebroken door enzymen; als de hoeveelheid twee keer zo groot is, wordt er (binnen normale grenzen) ook twee keer zoveel per uur afgebroken. *Verandering evenredig met hoeveelheid*: dat is exponentieel verval, nog vóór je één meting hebt gezien.

{{ exercise: 34-007 }}

## 3. Parameters bepalen uit twee punten

Heb je een modelvorm gekozen met twee onbekende parameters, dan zijn twee meetpunten in principe genoeg om die parameters vast te leggen. Dat is de snelste manier van **fitten**.

:::example Uitgewerkt voorbeeld: lineair model uit twee punten
Een fietsenmaker noteert hoeveel een reparatie kost. Een klus van 2 uur kost € 77, een klus van 5 uur kost € 167. De kosten bestaan uit voorrijkosten plus een uurloon. Stel een model op.

**Aanname.** Het uurloon is constant, de voorrijkosten zijn vast: $K = a t + b$.

**Helling.** $a = \dfrac{167 - 77}{5 - 2} = \dfrac{90}{3} = 30$ euro per uur.

**Startwaarde.** $b = 77 - 30 \cdot 2 = 17$ euro.

**Model.** $K = 30t + 17$. **Controle met het tweede punt:** $30 \cdot 5 + 17 = 167$. Klopt.

**Interpretatie.** Het uurloon is € 30, de voorrijkosten zijn € 17. Bij een klus van 0 uur betaal je volgens het model € 17; dat is precies de betekenis van de voorrijkosten.
:::

:::example Uitgewerkt voorbeeld: exponentieel model uit twee punten
Een bacteriecultuur telt op $t = 1$ uur 300 cellen (in duizendtallen) en op $t = 4$ uur 2400. Neem aan dat de groei exponentieel is: $N = N_0 \cdot g^t$.

**Groeifactor.** Tussen $t = 1$ en $t = 4$ liggen 3 uur. In die tijd wordt $N$ vermenigvuldigd met $2400 / 300 = 8$. Dus $g^3 = 8$ en $g = 2$ per uur.

**Beginwaarde.** $N_0 \cdot 2^1 = 300$, dus $N_0 = 150$.

**Model.** $N = 150 \cdot 2^t$. **Controle:** $150 \cdot 2^4 = 150 \cdot 16 = 2400$. Klopt.
:::

:::tip Twee punten zijn het minimum, niet het ideaal
Met twee punten past het model altijd precies, wat je ook kiest: door twee punten gaat altijd een lijn, en ook altijd een exponentiële kromme (als beide waarden positief zijn). Twee punten kunnen een model dus nooit *valideren*. Daarvoor heb je een derde, onafhankelijk punt nodig, en liefst veel meer.
:::

{{ exercises: 34-008, 34-009, 34-010 }}

## 4. Recht evenredig: een bijzonder lineair model

Soms is er geen vaste startwaarde: nul invoer geeft nul uitvoer. Twee keer zoveel invoer geeft dan twee keer zoveel uitvoer. Dat heet **recht evenredig**, en het model is $y = a x$. Je herkent het aan een constante verhouding $y/x$.

Of een situatie recht evenredig is, volgt meestal uit het mechanisme. De prijs van kaas per gewicht is recht evenredig (geen vaste kosten). Een taxirit is níét recht evenredig, want er is een instaptarief: een rit van 10 km kost niet twee keer zoveel als een rit van 5 km. Probeer het in de verhoudingstabel hieronder: die rekent altijd recht evenredig. Bedenk bij elke kolom of dat voor een taxirit klopt.

{{ widget: ratio-table a=5 b=16 labelA="Afstand (km)" labelB="Ritprijs volgens evenredig model (€)" }}

Volgens de tabel kost 10 km precies € 32. Bij een taxi met een instaptarief van € 4 en € 2,40 per km kost 5 km echter € 16 en 10 km € 28. Het evenredige model overschat lange ritten, omdat het het instaptarief bij elke "verdubbeling" opnieuw meetelt.

## 5. Fitten op het oog

Bij meer dan twee meetpunten past een model nooit precies door alle punten. Je zoekt dan de parameters waarbij het model "zo goed mogelijk" aansluit. Een eerste manier is fitten op het oog: je verschuift de parameters tot de kromme mooi door de puntenwolk loopt.

Probeer het in de grafiek hieronder. Het model is $y = b \cdot g^x$. Een laboratorium mat de concentratie van een stof (in mg/L) op $x = 0, 1, 2, 3, 4$ uur: ongeveer $20;\ 16{,}1;\ 12{,}9;\ 10{,}2;\ 8{,}3$. Zoek met de schuifregelaars waarden van $b$ en $g$ waarbij de kromme door deze punten gaat. Lees de punten af in het rooster.

{{ widget: function-plot fn="b*g^x" b=15 bmin=5 bmax=30 bstep=0.5 g=0.9 gmin=0.5 gmax=1.2 gstep=0.01 xmin=0 xmax=8 ymin=0 ymax=30 title="Fit een exponentieel model op het oog" }}

Je zult merken dat je uitkomt rond $b \approx 20$ en $g \approx 0{,}8$: elk uur blijft er ongeveer 80% over. Dat is een afname van 20% per uur.

## 6. Fitten met regressie

Op het oog fitten is subjectief: twee mensen kiezen verschillende parameters. **Regressie** is een objectieve methode. Bij lineaire regressie kies je de lijn waarvoor de som van de **kwadraten van de residuen** zo klein mogelijk is.

:::definition Residu
Het **residu** van een meetpunt is het verticale verschil tussen de meting en het model:

$$
\text{residu} = y_{\text{gemeten}} - y_{\text{model}}
$$

Een positief residu betekent: de meting ligt boven het model. Een negatief residu: eronder.
:::

Waarom kwadraten? Residuen kunnen positief en negatief zijn en zouden elkaar bij optellen opheffen. Door te kwadrateren tellen alle afwijkingen positief mee, en tellen grote afwijkingen extra zwaar. Deze **kleinste-kwadratenmethode** werd rond 1805–1809 gepubliceerd door Legendre en Gauss, juist om banen van hemellichamen te fitten aan onnauwkeurige metingen. In module 40 leer je hoe je de regressielijn uitrekent en hoe je met de correlatiecoëfficiënt $r$ en $R^2$ beoordeelt hoe goed hij past. Hier gebruik je de computer.

In de widget hieronder staan zes meetpunten. De bruine lijn is de regressielijn, de rode stippellijnen zijn de residuen. Sleep een punt omhoog en kijk hoe de lijn en de residuen veranderen. Sleep daarna één punt ver weg van de rest: zie je hoe sterk één uitschieter de lijn kan meetrekken?

{{ widget: regression points="(1;2.4) (2;3.9) (3;5.1) (4;6.8) (5;7.7) (6;9.4)" xmax=8 ymax=12 }}

:::example Uitgewerkt voorbeeld: een regressielijn interpreteren
Een software-pakket geeft bij metingen van de lengte $y$ (in cm) van een veer met een gewicht van $x$ kg de regressielijn $y = 2{,}1x + 12{,}4$.

**Parameters.** De helling 2,1 betekent: per extra kilo rekt de veer ongeveer 2,1 cm uit. De startwaarde 12,4 cm is de geschatte lengte zonder gewicht.

**Voorspelling.** Bij $x = 3$ kg voorspelt het model $2{,}1 \cdot 3 + 12{,}4 = 18{,}7$ cm.

**Residu.** Werd bij 3 kg 18,2 cm gemeten, dan is het residu $18{,}2 - 18{,}7 = -0{,}5$ cm: de meting ligt een halve centimeter onder de lijn.

**Mechanisme.** Dat een veer lineair uitrekt, is de wet van Hooke (1678). Maar die geldt alleen zolang je de veer niet te ver uitrekt: bij te grote gewichten vervormt de veer blijvend. Het geldigheidsgebied is dus beperkt.
:::

{{ exercise: 34-011 }}
