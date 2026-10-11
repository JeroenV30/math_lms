# Machten van tien: heel groot en heel klein

De aarde staat gemiddeld op zo'n 149.600.000 kilometer van de zon. Een darmbacterie als *E. coli* is ongeveer 0,000002 meter lang. Beide getallen zijn lastig te lezen: je moet nullen tellen, en wie er één te veel of te weinig telt, zit er een factor tien naast. Wetenschappers, ingenieurs en ook rekenmachines lossen dat op met **machten van tien**. In deze les zie je hoe die notatie werkt, waarom de rekenregels uit les 3 haar zo krachtig maken, en hoe je ermee schat.

## 1. Positieve machten van tien

Een macht van 10 is bijzonder eenvoudig uit te rekenen, omdat ons getalsysteem zelf op 10 is gebouwd (module 2). Elke extra factor 10 schuift de cijfers één plaats op en voegt een nul toe:

$$
10^1 = 10,\quad 10^2 = 100,\quad 10^3 = 1000,\quad 10^6 = 1\,000\,000
$$

:::definition Machten van tien
Voor een positief geheel getal $n$ is $10^n$ een 1 gevolgd door $n$ nullen. De exponent telt dus de nullen.
:::

Bekijk de tabel in de widget met grondtal 10. De balken laten goed zien hoe ongelijk de stappen zijn: elke regel is tien keer de vorige, waardoor alle eerdere regels naast de laatste in het niets verdwijnen.

{{ widget: powers base=10 max=9 }}

Grote getallen hebben eigen namen, en daarbij moet je oppassen met het Engels:

| Macht | Getal | Nederlands | Engels |
|---|---|---|---|
| $10^3$ | 1.000 | duizend | thousand |
| $10^6$ | 1.000.000 | miljoen | million |
| $10^9$ | 1.000.000.000 | miljard | billion |
| $10^{12}$ | 1.000.000.000.000 | biljoen | trillion |

:::warning Een Engelse *billion* is een Nederlands miljard
Het Nederlands volgt de zogeheten lange schaal: na miljoen komt miljard ($10^9$), daarna biljoen ($10^{12}$). Het Engels gebruikt de korte schaal: *billion* is daar al $10^9$. Een krantenbericht dat een Amerikaans bedrijf "3 billion dollar" waard is, gaat dus over 3 miljard, niet over 3 biljoen. Met machten van tien kan die verwarring niet ontstaan.
:::

## 2. Negatieve machten van tien

In les 3 zag je dat $a^{-n} = \frac{1}{a^n}$. Voor het grondtal 10 betekent dat:

$$
10^{-1} = \frac{1}{10} = 0{,}1,\qquad 10^{-2} = \frac{1}{100} = 0{,}01,\qquad 10^{-3} = \frac{1}{1000} = 0{,}001
$$

Bij $10^{-n}$ staat de 1 op de $n$-de plaats achter de komma. Bij $10^{-6} = 0{,}000001$ zijn dat dus vijf nullen achter de komma en daarna de 1. Tel je gewoon de nullen, dan zit je er één naast: tel liever **de plaatsen achter de komma tot en met de 1**.

:::warning $10^{-2}$ is geen negatief getal
$10^{-2}$ is niet $-100$ en ook niet $-20$. Het is $\frac{1}{100}$: een klein, positief getal. Elke negatieve macht van tien ligt tussen 0 en 1. Negatieve getallen kun je met machten van tien gewoon zoals altijd schrijven, met een minteken ervoor: $-3 \times 10^{-2} = -0{,}03$.
:::

De voorvoegsels van het metrieke stelsel (module 6) zijn eigenlijk namen voor machten van tien:

| Voorvoegsel | Symbool | Macht | Voorbeeld |
|---|---|---|---|
| giga | G | $10^9$ | 1 GB is ongeveer een miljard bytes |
| mega | M | $10^6$ | 1 MW is een miljoen watt |
| kilo | k | $10^3$ | 1 km = $10^3$ m |
| milli | m | $10^{-3}$ | 1 mm = $10^{-3}$ m |
| micro | µ | $10^{-6}$ | 1 µm = $10^{-6}$ m |
| nano | n | $10^{-9}$ | 1 nm = $10^{-9}$ m |

{{ exercise: 14-036 }}

## 3. Wetenschappelijke notatie

Elk positief getal kun je schrijven als een getal tussen 1 en 10, maal een macht van tien. Neem de afstand van de aarde tot de zon, ongeveer 149.600.000 km:

$$
149\,600\,000 = 1{,}496 \times 100\,000\,000 = 1{,}496 \times 10^{8}
$$

:::definition Wetenschappelijke notatie
Een getal staat in **wetenschappelijke notatie** als het geschreven is als

$$
a \times 10^n \qquad\text{met}\quad 1 \leq |a| < 10 \quad\text{en } n \text{ geheel}
$$

Het getal $a$ heet de **mantisse** (of coëfficiënt), $n$ de **exponent** of **orde van grootte**. De voorwaarde $1 \leq |a| < 10$ zorgt ervoor dat elk getal (behalve 0) maar op één manier geschreven kan worden.
:::

De voorwaarde is belangrijk. $149{,}6 \times 10^6$ en $0{,}1496 \times 10^9$ zijn hetzelfde getal, maar niet in wetenschappelijke notatie. Pas als de mantisse precies één cijfer (niet nul) vóór de komma heeft, kun je getallen in één oogopslag vergelijken: de exponent vertelt meteen hoe groot het getal ongeveer is.

:::example Uitgewerkt voorbeeld: een groot getal omzetten
Schrijf 3.200.000 in wetenschappelijke notatie.

1. Zet de komma direct achter het eerste cijfer dat geen nul is: $3{,}2$.
2. Hoeveel plaatsen is de komma daarvoor naar links geschoven? Vanaf $3\,200\,000{,}$ naar $3{,}200000$ zijn dat 6 plaatsen.
3. Om het oorspronkelijke getal terug te krijgen, moet je $3{,}2$ zes keer met 10 vermenigvuldigen: $3{,}2 \times 10^6$.

Controle: $10^6$ is een miljoen, en 3,2 miljoen is 3.200.000.
:::

:::example Uitgewerkt voorbeeld: een klein getal omzetten
Een bacterie is ongeveer 0,000002 m lang. Schrijf dat in wetenschappelijke notatie.

1. Het eerste cijfer dat geen nul is, is de 2. De mantisse is $2$.
2. De komma moet van $0{,}000002$ naar $2{,}$: dat is 6 plaatsen naar **rechts**.
3. Naar rechts schuiven betekent dat je met $10^6$ hebt vermenigvuldigd. Om dat te compenseren vermenigvuldig je met $10^{-6}$: $0{,}000002 = 2 \times 10^{-6}$ m, ofwel 2 µm.

Vuistregel: een getal **groter dan 10** krijgt een **positieve** exponent, een getal **tussen 0 en 1** een **negatieve**. Getallen van 1 tot 10 krijgen exponent 0, want $10^0 = 1$.
:::

Andersom, van wetenschappelijke notatie naar een gewoon getal, schuif je de komma terug: bij $4{,}7 \times 10^{-3}$ drie plaatsen naar links, dus $0{,}0047$. Rekenmachines en spreadsheets tonen wetenschappelijke notatie vaak met een E: `4.7E-3` betekent $4{,}7 \times 10^{-3}$, en `1.496E8` betekent $1{,}496 \times 10^8$.

{{ exercises: 14-023, 14-024 }}

## 4. Rekenen in wetenschappelijke notatie

Hier betalen de rekenregels uit les 3 zich uit. Omdat je factoren in elke volgorde mag vermenigvuldigen, kun je mantissen en machten van tien apart behandelen.

**Vermenigvuldigen.** Vermenigvuldig de mantissen en tel de exponenten op (productregel):

$$
(3 \times 10^4) \times (2 \times 10^3) = (3 \times 2) \times (10^4 \times 10^3) = 6 \times 10^7
$$

**Delen.** Deel de mantissen en trek de exponenten af (quotiëntregel):

$$
\frac{8 \times 10^9}{2 \times 10^3} = \frac{8}{2} \times 10^{9-3} = 4 \times 10^6
$$

**Normaliseren.** Soms valt de mantisse na het rekenen buiten het bereik van 1 tot 10. Dan schuif je één factor 10 door: $(6 \times 10^5) \times (5 \times 10^{-2}) = 30 \times 10^{3} = 3 \times 10^{4}$. Want $30 = 3 \times 10^1$, en $10^1 \times 10^3 = 10^4$.

:::example Uitgewerkt voorbeeld: hoe lang doet zonlicht erover?
Licht legt ongeveer $3 \times 10^8$ meter per seconde af. De afstand van de zon tot de aarde is ongeveer $1{,}5 \times 10^{11}$ m. Hoeveel seconden doet het zonlicht over die afstand?

1. Tijd = afstand : snelheid (module 10): $\dfrac{1{,}5 \times 10^{11}}{3 \times 10^{8}}$.
2. Mantissen: $1{,}5 : 3 = 0{,}5$.
3. Machten: $10^{11} : 10^{8} = 10^{11-8} = 10^{3}$.
4. Samen: $0{,}5 \times 10^3 = 5 \times 10^2 = 500$ seconden.

Dat is 8 minuten en 20 seconden. Het licht dat je nu van de zon ziet, vertrok ruim acht minuten geleden. (Met de nauwkeurige waarden komt er ongeveer 499 seconden uit.)
:::

:::example Uitgewerkt voorbeeld: bacteriën op een rij
Hoeveel bacteriën van $2 \times 10^{-6}$ m passen op een rij van 1 cm?

1. Zet alles in dezelfde eenheid: $1 \text{ cm} = 10^{-2}$ m.
2. Aantal $= \dfrac{10^{-2}}{2 \times 10^{-6}} = \dfrac{1}{2} \times 10^{-2-(-6)} = 0{,}5 \times 10^{4}$.
3. $0{,}5 \times 10^4 = 5 \times 10^3 = 5000$.

Let bij stap 2 op de dubbele min: $-2 - (-6) = -2 + 6 = 4$ (module 13). Wie $-2-6 = -8$ rekent, vindt een absurd klein aantal: een twintigmiljoenste bacterie. Een snelle controle op redelijkheid vangt zo'n fout meteen.
:::

{{ exercises: 14-025, 14-037 }}

**Optellen en aftrekken** gaat anders. Hier helpen de machtsregels níet, want er is geen regel voor een som van machten. Je moet eerst zorgen dat beide getallen dezelfde macht van tien hebben, en dan de mantissen optellen, net zoals je bij breuken eerst gelijknamig maakt:

$$
4 \times 10^5 + 3 \times 10^4 = 40 \times 10^4 + 3 \times 10^4 = 43 \times 10^4 = 4{,}3 \times 10^5
$$

Controle met gewone getallen: $400\,000 + 30\,000 = 430\,000$. Een veelgemaakte fout is $7 \times 10^9$ (mantissen opgeteld, exponenten opgeteld als bij vermenigvuldigen) of $7 \times 10^5$ (mantissen opgeteld zonder op de exponenten te letten).

{{ exercise: 14-038 }}

## 5. Denken in ordes van grootte

De exponent in wetenschappelijke notatie heet ook de **orde van grootte**. Twee getallen die een orde van grootte verschillen, verschillen ongeveer een factor 10. Zo krijg je een gevoel voor schaal:

| Grootheid | Ongeveer | Orde |
|---|---|---|
| Doorsnede van een waterstofatoom | $1 \times 10^{-10}$ m | $-10$ |
| Lengte van een bacterie | $2 \times 10^{-6}$ m | $-6$ |
| Dikte van een vel papier | $1 \times 10^{-4}$ m | $-4$ |
| Lengte van een mens | $1{,}8 \times 10^{0}$ m | $0$ |
| Hoogte van de Mount Everest | $8{,}8 \times 10^{3}$ m | $3$ |
| Omtrek van de aarde | $4 \times 10^{7}$ m | $7$ |
| Afstand aarde–zon | $1{,}5 \times 10^{11}$ m | $11$ |

Tussen een bacterie en de afstand tot de zon zitten zeventien ordes van grootte: de zon staat ongeveer $10^{17}$ bacterielengtes ver weg. Zulke vergelijkingen zijn met gewone getallen bijna niet te maken, met machten van tien zijn ze een kwestie van exponenten aftrekken.

:::tip Schatten met machten van tien
Wil je snel weten of een berekening klopt, rond dan elk getal af op één cijfer maal een macht van tien en reken met de exponenten. Hoeveel seconden zitten er in een jaar? $365 \times 24 \times 3600 \approx (4 \times 10^2) \times (2 \times 10^1) \times (4 \times 10^3) = 32 \times 10^6 \approx 3 \times 10^7$. De nauwkeurige waarde is $31\,536\,000$, dus de orde van grootte klopt.
:::

Het idee om enorme hoeveelheden te tellen met machten van een vast grondtal is oud. Archimedes schreef in de derde eeuw voor Christus een heel boek, de *Zandrekenaar*, om te laten zien dat zelfs het aantal zandkorrels dat het heelal zou vullen een benoembaar getal is. In het historisch intermezzo kom je hem tegen.

:::summary Kern van deze les
- $10^n$ is een 1 met $n$ nullen; $10^{-n}$ is $0{,}0\ldots01$ met de 1 op de $n$-de decimaal.
- Wetenschappelijke notatie: $a \times 10^n$ met $1 \leq |a| < 10$.
- Vermenigvuldigen: mantissen vermenigvuldigen, exponenten optellen. Delen: mantissen delen, exponenten aftrekken. Daarna normaliseren.
- Optellen: eerst dezelfde macht van tien maken.
:::
