# Oneindig veel termen

In de vorige les tel je steeds een **eindig** aantal termen op. Maar de stuiterbal uit les 3 stuitert in het model eindeloos door, en Zeno's wandelaar moet oneindig veel halve afstanden afleggen. Kan een som van oneindig veel positieve getallen een eindige uitkomst hebben? Het antwoord is: soms wel, soms niet. In deze les leer je wanneer, en waarom.

## 1. Zeno's tweedeling

:::history Elea, vijfde eeuw v.Chr.
Zeno van Elea (ca. 490 – ca. 425 v.Chr.) was een leerling van de filosoof Parmenides, die betoogde dat verandering en beweging schijn zijn. Zeno verdedigde zijn leermeester met paradoxen: redeneringen die vanuit redelijke aannames tot een onaanvaardbare conclusie leiden. Zijn eigen boek is verloren gegaan; we kennen de paradoxen vooral via Aristoteles, die ze in zijn *Physica* bespreekt (en weerlegt).

De **tweedeling** gaat zo: wie een afstand wil afleggen, moet eerst de helft afleggen. Daarna de helft van de rest, dan de helft van wat dan nog rest, enzovoort. Er komt geen laatste stap. Hoe kan een loper ooit aankomen? In de verwante paradox van **Achilles en de schildpad** haalt de snelle Achilles een schildpad met voorsprong nooit in, omdat hij steeds eerst moet komen waar de schildpad net was.
:::

Laten we de afstand 1 noemen. De stukken die de loper aflegt zijn $\tfrac12, \tfrac14, \tfrac18, \tfrac1{16}, \ldots$: een meetkundige rij met $u(0) = \tfrac12$ en $r = \tfrac12$. De vraag is dus wat

$$
\frac12 + \frac14 + \frac18 + \frac1{16} + \ldots
$$

betekent.

![Een vierkant steeds gehalveerd](/images/diagrams/m28-zeno-vierkant.svg "Een vierkant met oppervlakte 1, steeds gehalveerd: de stukken ½, ¼, ⅛, ... vullen samen het hele vierkant. Eigen diagram.")

Kijk naar het vierkant. Neem de helft, dan de helft van de rest, enzovoort. Je komt nooit **buiten** het vierkant, en elk stukje van het vierkant wordt vroeg of laat bedekt. Het ligt voor de hand om te zeggen: samen vullen ze precies het vierkant, dus de som is 1. Maar "het ligt voor de hand" is geen wiskunde. Wat bedoelen we precies met de som van oneindig veel getallen?

## 2. Partiële sommen

Het antwoord van de wiskunde (pas in de negentiende eeuw helemaal netjes geformuleerd) is: kijk naar de **partiële sommen**, de sommen van de eerste $N$ termen.

| $N$ | 1 | 2 | 3 | 4 | 5 | 10 | 20 |
|---|---|---|---|---|---|---|---|
| $S_N$ | $\tfrac12$ | $\tfrac34$ | $\tfrac78$ | $\tfrac{15}{16}$ | $\tfrac{31}{32}$ | $\tfrac{1023}{1024}$ | $1 - \tfrac{1}{2^{20}}$ |

Met de somformule uit les 4: $S_N = \tfrac12 \cdot \dfrac{1 - (\tfrac12)^N}{1 - \tfrac12} = 1 - \left(\tfrac12\right)^N$. Wat er na $N$ stappen nog **ontbreekt**, is precies $\left(\tfrac12\right)^N$, en dat wordt willekeurig klein: na 10 stappen minder dan een duizendste, na 20 stappen minder dan een miljoenste.

![Partiële sommen op de getallenlijn](/images/diagrams/m28-zeno-getallenlijn.svg "De partiële sommen ½, ¾, ⅞, ... komen steeds dichter bij 1. Eigen diagram.")

:::definition Convergentie van een reeks
De **partiële sommen** van een reeks zijn $S_N = u(0) + u(1) + \ldots + u(N-1)$. Als de partiële sommen willekeurig dicht bij een vast getal $S$ komen naarmate $N$ groter wordt (en daar ook dicht bij blijven), dan zeggen we dat de reeks **convergeert** en noemen we $S$ de **som** van de oneindige reeks. We schrijven

$$
\sum_{k=0}^{\infty} u(k) = S.
$$

Komen de partiële sommen niet bij één vast getal uit, dan **divergeert** de reeks.
:::

Zo bekeken is $\tfrac12 + \tfrac14 + \tfrac18 + \ldots = 1$ geen bewering over "oneindig veel optellingen uitvoeren", maar een afspraak over een **grenswaarde** (limiet): het getal waar de partiële sommen naartoe gaan. Of dit Zeno's filosofische vraag volledig beantwoordt, daarover verschillen filosofen nog steeds van mening. Maar wiskundig is de zaak helder: bij een constante snelheid kost elk halveringsstuk ook de helft van de tijd, en de tijden tellen op tot een eindige tijd.

## 3. De som van een oneindige meetkundige reeks

Waarom werkte het bij $r = \tfrac12$? Kijk naar de somformule voor $0 < r < 1$:

$$
S_N = u(0) \cdot \frac{1 - r^N}{1 - r}
$$

Als $0 < r < 1$, dan wordt $r^N$ steeds kleiner naarmate $N$ groeit: $0{,}9^{10} \approx 0{,}35$, $0{,}9^{50} \approx 0{,}005$, $0{,}9^{100} \approx 0{,}00003$. De teller $1 - r^N$ nadert dan $1$, en de partiële sommen naderen $\dfrac{u(0)}{1 - r}$. Hetzelfde geldt voor negatieve $r$ tussen $-1$ en $0$ (dan wisselen de termen van teken, maar $r^N$ gaat nog steeds naar 0).

:::formula Som van een oneindige meetkundige reeks
Als $-1 < r < 1$, dan convergeert de meetkundige reeks en is

$$
u(0) + u(0)r + u(0)r^2 + \ldots = \frac{u(0)}{1 - r}
$$

Kort: **eerste term gedeeld door één min de reden**. Als $|r| \geq 1$ (en $u(0) \neq 0$), dan divergeert de reeks.
:::

Gebruik de grafiek hieronder om te zien hoe snel de partiële sommen hun grens naderen. De kromme is de somformule $S_N$ (als functie van $N$ doorgetrokken getekend; alleen de gehele $N$ tellen), de horizontale lijn is de grenswaarde $\dfrac{a}{1-r}$. Kies een reden dicht bij 1 en kijk hoe traag de convergentie dan wordt.

{{ widget: function-plot fn="a*(1-r^x)/(1-r)" fn2="a/(1-r)" a="1" amin="0.5" amax="3" astep="0.5" r="0.5" rmin="0.1" rmax="0.95" rstep="0.05" xmin="0" xmax="20" ymin="0" ymax="20" title="Partiële sommen van een meetkundige reeks" }}

:::example Uitgewerkt voorbeeld: de stuiterbal legt een eindige afstand af
Een bal valt van 5 meter hoogte en komt na elke stuit tot 60% van de vorige hoogte. In het model stuitert hij oneindig vaak. Welke totale afstand legt hij af?

1. **Teken de beweging.** Eerst valt de bal 5 m. Daarna gaat hij steeds omhoog en weer omlaag: 3 m op en 3 m neer, dan 1,8 m op en 1,8 m neer, enzovoort.
2. **Splits de som.** Totaal $= 5 + 2 \cdot (3 + 1{,}8 + 1{,}08 + \ldots)$.
3. **Oneindige meetkundige reeks:** $3 + 1{,}8 + 1{,}08 + \ldots$ heeft $u(0) = 3$ en $r = 0{,}6$, dus som $\dfrac{3}{1 - 0{,}6} = \dfrac{3}{0{,}4} = 7{,}5$ m.
4. **Totaal:** $5 + 2 \cdot 7{,}5 = 20$ m.

Een veelgemaakte fout is om alleen de val-afstanden op te tellen: $5 + 3 + 1{,}8 + \ldots = \dfrac{5}{0{,}4} = 12{,}5$ m. Dan vergeet je dat de bal elke hoogte (behalve de eerste) twee keer aflegt.
:::

:::warning Het model en de werkelijkheid
Een echte bal stuitert niet oneindig vaak: na een paar seconden ligt hij stil, omdat bij kleine hoogtes andere effecten (vervorming, luchtweerstand) belangrijk worden. Het meetkundige model is een goede benadering zolang de stuiten groot zijn. Dat het model een eindige totale afstand geeft, past wel bij wat je ziet: de bal komt na een eindige tijd tot rust.
:::

{{ exercises: 28-024, 28-025, 28-026 }}

## 4. Waarom 0,999… precies 1 is

Een repeterend decimaal getal is in feite een oneindige meetkundige reeks. Neem

$$
0{,}999\ldots = \frac{9}{10} + \frac{9}{100} + \frac{9}{1000} + \ldots
$$

Dat is een meetkundige reeks met $u(0) = \tfrac{9}{10}$ en $r = \tfrac{1}{10}$. De som is

$$
\frac{\tfrac{9}{10}}{1 - \tfrac{1}{10}} = \frac{\tfrac{9}{10}}{\tfrac{9}{10}} = 1.
$$

Veel mensen voelen hier weerstand: "er blijft toch altijd een klein stukje over?" Maar dat stukje blijft alleen over bij een **eindig** aantal negens: $0{,}9$ mist $0{,}1$, $0{,}99$ mist $0{,}01$, enzovoort. Het getal $0{,}999\ldots$ met oneindig veel negens is per definitie de grens van die rij, en het verschil met 1 is kleiner dan elk positief getal dat je kunt bedenken. Het enige getal dat kleiner is dan elk positief getal en zelf niet negatief, is 0. Dus het verschil is 0.

:::tip Een tweede argument
Je weet dat $\tfrac13 = 0{,}333\ldots$ (deel 1 door 3 met een staartdeling, module 8). Vermenigvuldig beide kanten met 3: $1 = 0{,}999\ldots$ Wie de eerste gelijkheid accepteert, moet de tweede ook accepteren.
:::

Met dezelfde methode schrijf je elk repeterend decimaal getal als breuk.

:::example Uitgewerkt voorbeeld: 0,454545… als breuk
1. **Splits in blokken:** $0{,}4545\ldots = \tfrac{45}{100} + \tfrac{45}{10\,000} + \tfrac{45}{1\,000\,000} + \ldots$
2. **Herken de reeks:** $u(0) = \tfrac{45}{100}$, $r = \tfrac{1}{100}$ (elk blok staat twee plaatsen verder).
3. **Som:** $\dfrac{\tfrac{45}{100}}{1 - \tfrac1{100}} = \dfrac{\tfrac{45}{100}}{\tfrac{99}{100}} = \dfrac{45}{99} = \dfrac{5}{11}$.
4. **Controle:** $5 : 11 = 0{,}4545\ldots$ Klopt.

Algemeen: een blok van $k$ cijfers dat zich herhaalt direct achter de komma geeft dat blok gedeeld door $k$ negens: $0{,}\overline{45} = \tfrac{45}{99}$, $0{,}\overline{123} = \tfrac{123}{999}$.
:::

{{ exercises: 28-027, 28-028 }}

## 5. Archimedes en de parabool

Ruim tweeduizend jaar vóór de moderne limietdefinitie gebruikte Archimedes van Syracuse (ca. 287 – 212 v.Chr.) al een meetkundige reeks om een oppervlakte te berekenen. In zijn werk *De kwadratuur van de parabool*, een brief aan zijn collega Dositheus in Alexandrië, bepaalde hij de oppervlakte van een **parabolisch segment**: het stuk tussen een parabool en een rechte lijn die de parabool twee keer snijdt.

![Archimedes vult een parabolisch segment met driehoeken](/images/diagrams/m28-archimedes-parabool.svg "Archimedes' methode: een grote driehoek T, dan twee driehoeken met samen ¼T, dan vier met samen 1/16 T, enzovoort. Eigen diagram.")

Zijn idee: zet in het segment een zo groot mogelijke driehoek, met oppervlakte $T$. Er blijven twee kleinere segmenten over; zet in elk daarvan weer de grootste driehoek. Archimedes bewees dat die twee driehoeken **samen** precies $\tfrac14 T$ beslaan. In de vier segmenten die dan overblijven, beslaan de nieuwe driehoeken samen $\tfrac14$ daarvan, enzovoort. De oppervlakte van het segment is dus

$$
T + \tfrac14 T + \tfrac1{16} T + \tfrac1{64} T + \ldots = \frac{T}{1 - \tfrac14} = \frac43 T.
$$

:::history Hoe Archimedes het oneindige vermeed
Archimedes schreef niet "oneindig veel driehoeken optellen". De Griekse wiskunde wantrouwde het oneindige, mede door paradoxen als die van Zeno. Hij bewees in plaats daarvan dat de oppervlakte niet groter en niet kleiner kan zijn dan $\tfrac43 T$: elke eindige som van driehoeken blijft eronder, maar komt er willekeurig dicht bij. Dit heet de **uitputtingsmethode**. In moderne termen is het een bewijs dat de partiële sommen naar $\tfrac43 T$ convergeren, maar zonder het woord "limiet". In module 30 zie je hoe dezelfde vraag (de oppervlakte onder een kromme) met integraalrekening wordt opgelost.
:::

## 6. Wanneer gaat het mis? Divergentie

Niet elke oneindige reeks heeft een eindige som. Twee gevallen:

**De termen worden niet klein.** Bij $1 + 2 + 4 + 8 + \ldots$ ($r = 2$) groeien de partiële sommen onbegrensd. Ook bij $r = 1$ ($5 + 5 + 5 + \ldots$) groeit de som zonder grens. En bij $r = -1$ ($1 - 1 + 1 - 1 + \ldots$) springen de partiële sommen eeuwig tussen 1 en 0 heen en weer, zonder bij één getal uit te komen. Een reeks waarvan de termen niet naar 0 gaan, divergeert altijd.

**De termen worden wel klein, maar niet snel genoeg.** Dit is het verraderlijke geval.

:::warning Termen naar 0 is niet genoeg
De **harmonische reeks** $1 + \tfrac12 + \tfrac13 + \tfrac14 + \tfrac15 + \ldots$ divergeert, hoewel de termen naar 0 gaan. De middeleeuwse Franse geleerde Nicole Oresme bewees dat rond 1350 met een eenvoudig groeperingsargument:

$$
1 + \tfrac12 + \underbrace{\tfrac13 + \tfrac14}_{> \tfrac24 = \tfrac12} + \underbrace{\tfrac15 + \tfrac16 + \tfrac17 + \tfrac18}_{> \tfrac48 = \tfrac12} + \underbrace{\tfrac19 + \ldots + \tfrac1{16}}_{> \tfrac8{16} = \tfrac12} + \ldots
$$

Elke groep is groter dan $\tfrac12$, en er komen oneindig veel groepen. Dus groeit de som voorbij elke grens, al gaat het heel langzaam: voor een partiële som boven de 10 heb je al ruim 12.000 termen nodig.
:::

Een meetkundige reeks met $|r| < 1$ convergeert dus omdat de termen **snel** genoeg kleiner worden: elke term is een vaste fractie van de vorige. Bij de harmonische reeks wordt de verhouding tussen opeenvolgende termen ($\tfrac{n}{n+1}$) steeds dichter bij 1, en dat is net niet snel genoeg. Euler liet in 1734-1735 zien dat de reeks van de **kwadraten** van deze breuken wel convergeert, en dat $1 + \tfrac14 + \tfrac19 + \tfrac1{16} + \ldots = \tfrac{\pi^2}{6}$. Dat resultaat valt ver buiten deze module, maar laat zien hoe verrassend de grens tussen convergeren en divergeren kan zijn.

{{ exercises: 28-029, 28-030, 28-031 }}
