# Optellen, aftrekken en schalen

Je kunt nu een vector beschrijven met componenten of met lengte en richting. In deze les leer je ermee **rekenen**. Dat rekenen heeft steeds twee gezichten: een **meetkundig** gezicht (wat doe je met de pijlen?) en een **algebraïsch** gezicht (wat doe je met de getallen?). Het mooie is dat ze altijd hetzelfde antwoord geven. Gebruik de tekening om te begrijpen en te controleren, en de getallen om nauwkeurig te rekenen.

## 1. Optellen: de kop-staartmethode

Wat betekent het om twee verplaatsingen op te tellen? Eerst de ene uitvoeren, dan de andere. Verplaats je eerst over $\vec a$ en daarna over $\vec b$, dan is de totale verplaatsing $\vec a + \vec b$.

In een tekening doe je dat zo: teken $\vec a$, en zet de **staart** van $\vec b$ op de **kop** van $\vec a$. De somvector loopt van de staart van $\vec a$ naar de kop van $\vec b$. Dit heet de **kop-staartmethode**.

![Kop-staart en parallellogram](/images/diagrams/m31-optellen.svg "Links: de kop-staartmethode. Zet b met zijn staart op de kop van a; a + b loopt van het begin van a naar het eind van b. Rechts: de parallellogrammethode. Teken a en b vanuit hetzelfde punt; a + b is de diagonaal van het parallellogram. Beide geven dezelfde vector. Eigen diagram.")

In de tekening is $\vec a = (4; 1)$ en $\vec b = (1; 3)$. Eerst 4 naar rechts en 1 omhoog, dan 1 naar rechts en 3 omhoog: in totaal 5 naar rechts en 4 omhoog. De somvector is $(5; 4)$. Zo blijkt meteen hoe je met componenten optelt.

:::formula Vectoren optellen
$$
\begin{pmatrix} a_1 \\ a_2 \end{pmatrix} + \begin{pmatrix} b_1 \\ b_2 \end{pmatrix} = \begin{pmatrix} a_1 + b_1 \\ a_2 + b_2 \end{pmatrix}
$$

Tel de x-componenten bij elkaar op en de y-componenten bij elkaar op.
:::

Bij meer dan twee vectoren ga je gewoon door: zet de staart van elke volgende pijl op de kop van de vorige. De **resultante** loopt van het allereerste beginpunt naar het allerlaatste eindpunt. Dat deed je in de vorige les al met de wandelroute.

## 2. Optellen: de parallellogrammethode

Bij krachten is de kop-staartmethode wat onnatuurlijk. Twee krachten die op hetzelfde voorwerp werken, grijpen op **hetzelfde punt** aan; de ene begint niet waar de andere ophoudt. Teken ze daarom allebei vanuit dat punt, en maak de figuur af tot een parallellogram. De **diagonaal** vanuit het gemeenschappelijke beginpunt is de som.

Waarom is dat hetzelfde? In een parallellogram is de overstaande zijde dezelfde vector (vorige les). De zijde tegenover $\vec b$ is dus ook $\vec b$, en die begint precies op de kop van $\vec a$. De diagonaal is daarmee gewoon de kop-staartsom. De rechterhelft van de tekening laat het zien.

:::theory Eigenschappen van het optellen
Voor alle vectoren $\vec a$, $\vec b$ en $\vec c$ geldt:

- $\vec a + \vec b = \vec b + \vec a$ (**wisseleigenschap**). In het parallellogram: de diagonaal is dezelfde, of je nu eerst langs $\vec a$ of eerst langs $\vec b$ loopt.
- $(\vec a + \vec b) + \vec c = \vec a + (\vec b + \vec c)$ (**schakeleigenschap**).
- $\vec a + \vec 0 = \vec a$ en $\vec a + (-\vec a) = \vec 0$.

Dit zijn dezelfde regels als bij getallen (module 4). Je mag dus vrij herschikken en groeperen.
:::

Dit "parallellogram van krachten" is een van de oudste resultaten van de mechanica. In het historisch intermezzo zie je hoe Stevin, Galileï en Newton er elk op hun manier mee worstelden.

:::example Uitgewerkt voorbeeld: drie krachten op een paal
Op een paal werken drie krachten (in newton): $\vec F_1 = (120; 0)$, $\vec F_2 = (-30; 80)$ en $\vec F_3 = (10; -20)$. Bereken de resultante en de grootte ervan.

1. **x-componenten.** $120 + (-30) + 10 = 100$.
2. **y-componenten.** $0 + 80 + (-20) = 60$.
3. **Resultante.** $\vec R = (100; 60)$.
4. **Grootte.** $|\vec R| = \sqrt{100^2 + 60^2} = \sqrt{13\,600} \approx 116{,}6$ N.

Vergelijk: de grootten van de drie krachten zijn $120$, $\sqrt{30^2 + 80^2} \approx 85{,}4$ en $\sqrt{10^2 + 20^2} \approx 22{,}4$ newton, samen bijna 228 N. De resultante is veel kleiner, omdat de krachten deels tegen elkaar in werken.
:::

:::warning Grootten tel je niet zomaar op
$|\vec a + \vec b|$ is in het algemeen **niet** gelijk aan $|\vec a| + |\vec b|$. Alleen als de twee vectoren precies dezelfde kant op wijzen, klopt dat. In alle andere gevallen is de som korter: de rechte weg is korter dan de omweg. Dit heet de **driehoeksongelijkheid**: $|\vec a + \vec b| \leq |\vec a| + |\vec b|$.
:::

{{ exercises: 31-017, 31-018 }}

## 3. Vermenigvuldigen met een getal

Wat is $\vec a + \vec a + \vec a$? Drie keer dezelfde stap: een pijl in dezelfde richting, drie keer zo lang. Die schrijf je als $3\vec a$. Zo kun je een vector met elk getal vermenigvuldigen.

:::definition Scalaire vermenigvuldiging
Voor een getal $k$ en een vector $\vec a$ is $k\vec a$ de vector met

- lengte $|k| \cdot |\vec a|$;
- dezelfde richting als $\vec a$ als $k > 0$, en de tegengestelde richting als $k < 0$.

Met componenten:

$$
k\begin{pmatrix} a_1 \\ a_2 \end{pmatrix} = \begin{pmatrix} k a_1 \\ k a_2 \end{pmatrix}
$$
:::

Een getal waarmee je een vector vermenigvuldigt, heet ook wel een **scalar**: het "schaalt" de vector, maakt hem langer of korter. Vandaar de naam die je in les 1 tegenkwam. Speciale gevallen: $1\vec a = \vec a$, $0\vec a = \vec 0$ en $(-1)\vec a = -\vec a$.

:::example Uitgewerkt voorbeeld: schalen
Gegeven $\vec a = (6; -2)$.

1. $2\vec a = (12; -4)$: twee keer zo lang, dezelfde richting.
2. $\tfrac{1}{2}\vec a = (3; -1)$: half zo lang.
3. $-3\vec a = (-18; 6)$: drie keer zo lang, omgedraaid.
4. Controle van de lengte bij stap 3: $|\vec a| = \sqrt{36 + 4} = \sqrt{40}$ en $|-3\vec a| = \sqrt{324 + 36} = \sqrt{360} = \sqrt{9 \cdot 40} = 3\sqrt{40}$. Precies drie keer zo lang.
:::

Twee vectoren die (niet nul zijn en) elkaars veelvoud zijn, heten **evenwijdig** of **parallel**. Je herkent ze aan gelijke verhoudingen van de componenten: $(6; -2)$ en $(-9; 3)$ zijn evenwijdig, want $-9 = -\tfrac{3}{2} \cdot 6$ en $3 = -\tfrac{3}{2} \cdot (-2)$.

## 4. Aftrekken

Aftrekken is optellen van het tegengestelde: $\vec a - \vec b = \vec a + (-\vec b)$. Met componenten trek je dus gewoon component voor component af:

$$
\begin{pmatrix} a_1 \\ a_2 \end{pmatrix} - \begin{pmatrix} b_1 \\ b_2 \end{pmatrix} = \begin{pmatrix} a_1 - b_1 \\ a_2 - b_2 \end{pmatrix}
$$

Meetkundig is er een mooie interpretatie. Teken $\vec a$ en $\vec b$ vanuit hetzelfde punt. Welke vector moet je bij $\vec b$ optellen om op $\vec a$ uit te komen? Dat is de pijl van de kop van $\vec b$ naar de kop van $\vec a$. En die vector is $\vec a - \vec b$, want $\vec b + (\vec a - \vec b) = \vec a$.

![Het verschil van twee vectoren](/images/diagrams/m31-aftrekken.svg "Teken a en b vanuit hetzelfde punt. De rode pijl van de kop van b naar de kop van a is a − b. Eigen diagram.")

Je herkent hier de regel "kop min staart" uit de vorige les. Als $\vec a$ en $\vec b$ de plaatsvectoren van de punten $A$ en $B$ zijn, dan is $\overrightarrow{BA} = \vec a - \vec b$. Kop min staart is dus een vectoraftrekking.

:::example Uitgewerkt voorbeeld: een lineaire combinatie
Gegeven $\vec a = (3; 2)$ en $\vec b = (-1; 4)$. Bereken $2\vec a - 3\vec b$.

1. **Schaal eerst.** $2\vec a = (6; 4)$ en $3\vec b = (-3; 12)$.
2. **Trek af, component voor component.** $(6 - (-3);\ 4 - 12) = (9; -8)$.
3. **Controle in één keer.** x: $2 \cdot 3 - 3 \cdot (-1) = 6 + 3 = 9$. y: $2 \cdot 2 - 3 \cdot 4 = 4 - 12 = -8$. Klopt.

Een uitdrukking als $2\vec a - 3\vec b$ heet een **lineaire combinatie** van $\vec a$ en $\vec b$. In module 32 kom je die weer tegen als matrix maal vector.
:::

:::warning Min maal min
De meeste fouten bij lineaire combinaties zijn tekenfouten. Bij $-3\vec b$ met $\vec b = (-1; 4)$ wordt de x-component $-3 \cdot -1 = +3$. Werk met haakjes en schrijf elke stap op.
:::

{{ exercises: 31-019, 31-020, 31-021 }}

## 5. De eenheidsvector

Soms wil je alleen een **richting** vastleggen, zonder grootte. Denk aan "de richting van de helling", "de richting van de wind" of "de richting waarin de camera kijkt". Daarvoor gebruik je een vector met lengte 1: een **eenheidsvector**.

Hoe maak je van een willekeurige vector een eenheidsvector met dezelfde richting? Deel door de lengte. De vector $(6; 8)$ heeft lengte 10. Vermenigvuldig je hem met $\tfrac{1}{10}$, dan wordt hij tien keer zo kort: lengte 1, dezelfde richting.

:::formula Eenheidsvector
Bij een vector $\vec v \neq \vec 0$ hoort de eenheidsvector

$$
\vec e = \frac{1}{|\vec v|}\,\vec v
$$

met dezelfde richting als $\vec v$ en lengte 1.
:::

:::example Uitgewerkt voorbeeld: eenheidsvector en een kracht in een richting
**a.** Bepaal de eenheidsvector bij $\vec v = (5; -12)$.
1. Lengte: $\sqrt{25 + 144} = \sqrt{169} = 13$.
2. Deel elke component door 13: $\vec e = \left(\tfrac{5}{13}; -\tfrac{12}{13}\right) \approx (0{,}385; -0{,}923)$.
3. Controle: $0{,}385^2 + 0{,}923^2 \approx 0{,}148 + 0{,}852 = 1{,}000$.

**b.** Een kracht van 65 N werkt in de richting van $\vec v$. Schrijf de kracht met componenten.
1. Een kracht van 65 N in die richting is $65\vec e$.
2. $65 \cdot \left(\tfrac{5}{13}; -\tfrac{12}{13}\right) = (25; -60)$.
3. Controle: $\sqrt{25^2 + 60^2} = \sqrt{625 + 3600} = \sqrt{4225} = 65$. Klopt.
:::

Dit is een tweede manier om "grootte en richting" om te zetten naar componenten, naast $r\cos\alpha$ en $r\sin\alpha$. Ken je de richting als vector in plaats van als hoek, dan is de eenheidsvector meestal de snelste weg.

De eenheidsvectoren langs de assen krijgen eigen namen: $\vec i = (1; 0)$ en $\vec j = (0; 1)$. Elke vector is een lineaire combinatie van deze twee: $(4; 3) = 4\vec i + 3\vec j$. Dat is precies wat componenten zijn: "4 eenheden langs de x-as plus 3 eenheden langs de y-as".

{{ exercises: 31-022, 31-023 }}

## 6. Twee krachten onder een hoek

Een veelvoorkomend type opgave combineert alles uit deze en de vorige les: twee krachten met een gegeven grootte die een hoek met elkaar maken. Hoe groot is de resultante?

:::example Uitgewerkt voorbeeld: 50 N en 80 N onder 40°
Twee touwen trekken aan een boomstam: het ene met 50 N, het andere met 80 N. De touwen maken een hoek van $40^\circ$ met elkaar. Bereken de grootte van de resultante.

1. **Kies een handig assenstelsel.** Leg de x-as langs het eerste touw. Dan is $\vec F_1 = (50; 0)$.
2. **Tweede kracht in componenten.** Richtingshoek $40^\circ$: $\vec F_2 = (80\cos 40^\circ;\ 80\sin 40^\circ) \approx (61{,}28;\ 51{,}42)$.
3. **Resultante.** $\vec R \approx (50 + 61{,}28;\ 0 + 51{,}42) = (111{,}28;\ 51{,}42)$.
4. **Grootte.** $|\vec R| \approx \sqrt{111{,}28^2 + 51{,}42^2} \approx \sqrt{12\,384 + 2\,644} \approx \sqrt{15\,028} \approx 122{,}6$ N.
5. **Controle.** De resultante moet kleiner zijn dan $50 + 80 = 130$ N (want de touwen wijzen niet precies dezelfde kant op) en groter dan $80 - 50 = 30$ N. Bij een kleine hoek als $40^\circ$ verwacht je dicht bij 130. Klopt.
:::

:::tip Kies het assenstelsel zelf
Het assenstelsel is geen natuurwet; jij kiest het. Leg de x-as langs een van de vectoren, of langs een helling, of langs de rivier. Hoe meer componenten nul worden, hoe minder rekenwerk. De lengte van de resultante hangt niet af van je keuze; de componenten wel.
:::

{{ exercise: 31-024 }}
