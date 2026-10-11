# Invoer, uitvoer en een rechte lijn

## Een functie als machine

Stel je een machine voor met een invoeropening en een uitvoeropening. Je stopt er een getal in, de machine doet iets met dat getal, en er komt een ander getal uit. Neem een machine die het getal verdubbelt en er daarna 3 bij optelt. Gaat er een 4 in, dan komt er $2 \times 4 + 3 = 11$ uit. Gaat er een 0 in, dan komt er 3 uit.

![Een functiemachine: invoer 4 geeft uitvoer 11](/images/diagrams/m19-functiemachine.svg "Een functie als machine met de regel f(x) = 2x + 3 — eigen figuur")

Dat is een **functie**: een regel die aan elke toegestane invoer precies één uitvoer toekent. Het woord 'precies één' is belangrijk. Dezelfde invoer mag nooit twee verschillende uitvoeren geven; anders zou de machine onvoorspelbaar zijn. Omgekeerd mogen twee verschillende invoeren wel dezelfde uitvoer geven, zoals bij een machine die altijd 5 teruggeeft.

De notatie voor de uitvoer is $f(x)$, gelezen als 'f van x'. Hier is $f$ de naam van de machine en $x$ de invoer. Het is dus geen product van $f$ en $x$. Voor de machine hierboven schrijf je $f(x) = 2x + 3$, en dan is $f(4) = 11$. Je kunt ook gewoon $y$ schrijven voor de uitvoer: $y = 2x + 3$. Dan noem je $x$ de **invoer** (of onafhankelijke variabele) en $y$ de **uitvoer** (of afhankelijke variabele), omdat de waarde van $y$ afhangt van de gekozen $x$.

:::example Een uitvoer berekenen
Gegeven $f(x) = 3x - 2$. Bereken $f(4)$ en $f(-1)$.

1. Vervang overal waar $x$ staat het getal tussen de haakjes: $f(4) = 3 \times 4 - 2$.
2. Reken uit: $12 - 2 = 10$. Dus $f(4) = 10$.
3. Voor $f(-1)$ zet je het negatieve getal tussen haakjes: $3 \times (-1) - 2 = -3 - 2 = -5$.

Let op het tweede geval: $f(-1)$ is niet $-3 + 2$. De $-2$ hoort bij de functie en blijft staan.
:::

## Domein: waar de machine mag werken

Een machine heeft een grens aan wat je erin mag stoppen. Een kassa kan geen -3 appels afrekenen; een taxi kan geen -5 kilometer rijden. De verzameling toegestane invoeren heet het **domein**. In deze module is het domein meestal een stuk van de getallenlijn dat bij de situatie past. Als er niets bij staat, mag je ervan uitgaan dat alle getallen zijn toegestaan waarvoor de formule iets oplevert. Voor een formule als $y = ax + b$ is dat elk getal.

## Drie gezichten van één verband

Eenzelfde verband kun je op drie manieren opschrijven. Neem de regel $y = 2x + 1$.

![Tabel, formule en grafiek van y = 2x + 1](/images/diagrams/m19-drie-gezichten.svg "Tabel, formule en grafiek van hetzelfde verband y = 2x + 1 — eigen figuur")

- De **tabel** geeft een aantal concrete paren: $(0; 1)$, $(1; 3)$, $(2; 5)$, $(3; 7)$. Elke keer dat $x$ met 1 toeneemt, neemt $y$ met 2 toe.
- De **formule** $y = 2x + 1$ geeft één regel voor alle $x$, ook voor de waarden die niet in de tabel staan.
- De **grafiek** zet elk paar uit de tabel als punt in een assenstelsel. Alle punten die voldoen aan de regel liggen op één rechte lijn.

Elk gezicht heeft een eigen sterkte. Een tabel is concreet en precies voor losse waarden. Een formule is compact en laat je rekenen. Een grafiek laat in één oogopslag zien of iets stijgt, daalt of constant is. Een goede wiskundige schakelt voortdurend tussen de drie.

## y = ax + b: wat betekenen a en b?

De algemene vorm van een lineaire functie is
$$
y = ax + b
$$
met twee getallen die je kunt kiezen: $a$ en $b$. Ze hebben elk een eigen betekenis.

- $b$ is de **startwaarde**: de uitvoer bij $x = 0$. Vul je $x = 0$ in, dan valt de term $ax$ weg en blijft $y = b$ over. In de grafiek is $(0; b)$ het punt waar de lijn de $y$-as snijdt.
- $a$ is de **helling**: de toename van $y$ als $x$ met 1 toeneemt. Dat zie je in de tabel: bij $y = 2x + 1$ is de stap steeds 2, dus $a = 2$. Bij $a = 2$ gaat de lijn per stap van 1 naar rechts 2 omhoog.

{{ widget: function-plot fn="a*x+b" a=2 amin=-4 amax=4 astep=0.5 b=1 bmin=-5 bmax=5 xmin=-5 xmax=5 ymin=-10 ymax=10 title="Helling en startwaarde" }}

Verander eerst $b$ en houd $a$ vast: de lijn verschuift omhoog of omlaag, maar blijft even steil. Verander daarna $a$ en houd $b$ vast: de lijn blijft door $(0; b)$ gaan, maar draait om dat punt. Kijk ook wat er gebeurt bij $a = 0$ en bij negatieve $a$.

:::definition Lineaire functie
In schoolwiskunde heet een functie $f(x) = ax + b$ lineair. In een striktere terminologie heet de algemene vorm affien en is alleen het geval $b = 0$ lineair. Wij gebruiken de gangbare schoolbetekenis en noemen het bijzondere geval $y = ax$ **recht evenredig**: verdubbel je $x$, dan verdubbelt $y$ ook.
:::

## De tekens van a

Positieve $a$ geeft een stijgende lijn, negatieve $a$ een dalende lijn. Bij $a = 0$ is de functie constant: de uitvoer verandert niet, de grafiek is een horizontale lijn. Een verticale lijn, zoals $x = 3$, is geen grafiek van een functie. Bij $x = 3$ horen dan oneindig veel $y$-waarden, en dat botst met de eis 'precies één uitvoer'.

Bij $b = 0$ geeft verdubbeling van $x$ ook verdubbeling van $y$. Een startwaarde ongelijk aan nul verstoort die evenredigheid, hoewel de grafiek nog steeds recht is. Een taxirit van 0 kilometer kost meestal niet € 0 omdat er een instaptarief is: dat is de $b$.

:::example Een taxitarief als lineaire functie
Een taxi rekent € 4 instaptarief en € 3 per kilometer. Stel de formule op en bereken de prijs van een rit van 6 kilometer.

1. De startwaarde is wat je betaalt bij 0 kilometer: $b = 4$.
2. De helling is de toename per kilometer: $a = 3$.
3. De kosten in euro zijn $K = 3x + 4$ met $x$ het aantal kilometers.
4. Bij 6 kilometer: $K = 3 \times 6 + 4 = 22$, dus € 22.
:::

:::warning Verwissel a en b niet
Een veelgemaakte fout is de rollen van $a$ en $b$ verwisselen: bij het taxitarief schrijf je dan $K = 4x + 3$. Controleer met de vraag 'wat betaal ik bij 0 kilometer?'. Dat antwoord is de $b$ en staat zonder $x$ in de formule.
:::

:::warning Lees b niet af bij x = 1
Bij een tabel met $x = 1, 2, 3, 4$ is het verleidelijk de eerste $y$-waarde als startwaarde te nemen. De startwaarde hoort bij $x = 0$. Reken terug: ga één stap terug en trek de stap van $y$ af.
:::

{{ exercises: 19-003, 19-004, 19-005, 19-006, 19-007, 19-031, 19-032, 19-033 }}
