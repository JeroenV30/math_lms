# Snelheid en optimaliseren

De differentiaalrekening ontstond uit twee soorten vragen: hoe snel verandert iets, en waar is iets het grootst of het kleinst? In deze les pas je alles uit de vorige lessen toe op precies die twee vragen. Je berekent snelheden bij een worp omhoog, je vindt de grootste weide die je met een gegeven hoeveelheid hek kunt omheinen, de doos met de grootste inhoud, en de prijs waarbij een product de meeste winst oplevert.

## 1. Snelheid als afgeleide van afstand

Beschrijft $s(t)$ de plaats of hoogte van een voorwerp op tijdstip $t$, dan is de afgeleide de **snelheid**:

$$
v(t) = s'(t)
$$

Het teken vertelt je de richting. Bij een hoogte betekent $v > 0$ dat het voorwerp stijgt, $v < 0$ dat het daalt. En de afgeleide van de snelheid is de **versnelling**: $a(t) = v'(t)$.

:::example Uitgewerkt voorbeeld 1: een bal recht omhoog
Een bal wordt vanaf de grond recht omhoog gegooid. Zijn hoogte (in meter) na $t$ seconden is ongeveer $s(t) = 20t - 5t^2$.

1. **Snelheid.** $v(t) = s'(t) = 20 - 10t$ m/s. Bij het loslaten ($t = 0$) is de snelheid 20 m/s omhoog.
2. **Hoogste punt.** In het hoogste punt staat de bal een ogenblik stil: $v(t) = 0$, dus $20 - 10t = 0$ en $t = 2$ s.
3. **Maximale hoogte.** $s(2) = 40 - 20 = 20$ meter.
4. **Landing.** $s(t) = 0$ geeft $t(20 - 5t) = 0$, dus $t = 0$ of $t = 4$. De bal landt na 4 seconden, met snelheid $v(4) = 20 - 40 = -20$ m/s: even snel als bij het loslaten, maar nu naar beneden.
5. **Versnelling.** $a(t) = v'(t) = -10$ m/s². Constant: de zwaartekracht remt de bal elke seconde met 10 m/s af (in werkelijkheid ongeveer $9{,}8$ m/s²).
:::

Merk op hoe dit aansluit bij Newtons vraag uit de introductie: de vallende steen met $s(t) = 5t^2$ heeft snelheid $s'(t) = 10t$, dus op $t = 2$ precies 20 m/s. Met de rekenregels heb je dat in één regel, waar je in les 2 een hele tabel voor nodig had.

{{ exercises: 29-033, 29-034 }}

## 2. Optimaliseren: een stappenplan

**Optimaliseren** betekent: de beste keuze vinden, de grootste opbrengst, de kleinste kosten, het minste materiaal. Het lastige zit meestal niet in het differentiëren, maar in het **opstellen van de formule**. Dit stappenplan helpt.

:::theory Stappenplan optimaliseren
1. **Begrijp de situatie.** Maak een schets. Wat moet maximaal of minimaal worden? Wat ligt vast?
2. **Kies één variabele**, bijvoorbeeld $x$, en geef aan wat die betekent (met eenheid).
3. **Druk de rest uit in $x$.** Gebruik het gegeven dat vastligt (de lengte van het hek, de oppervlakte van het karton).
4. **Stel de formule op** voor de grootheid die optimaal moet zijn, als functie van $x$ alleen.
5. **Bepaal het domein.** Welke waarden van $x$ zijn in de praktijk mogelijk?
6. **Differentieer** en los $f'(x) = 0$ op. Houd alleen oplossingen binnen het domein over.
7. **Controleer** of het een maximum of minimum is (tekenschema of randwaarden).
8. **Beantwoord de vraag** in de context, met eenheden.
:::

:::example Uitgewerkt voorbeeld 2: de grootste rechthoek met 40 meter hek
Een boer heeft 40 meter hek en wil een rechthoekige weide omheinen. Welke afmetingen geven de grootste oppervlakte?

1. **Situatie.** De omtrek ligt vast (40 m); de oppervlakte moet maximaal zijn.
2. **Variabele.** $x$ = de breedte in meter.
3. **Rest in $x$.** Twee breedtes en twee lengtes maken samen 40 m, dus één lengte plus één breedte is 20 m: lengte $= 20 - x$.
4. **Formule.** $A(x) = x(20 - x) = 20x - x^2$.
5. **Domein.** $0 < x < 20$.
6. **Differentiëren.** $A'(x) = 20 - 2x = 0$ geeft $x = 10$.
7. **Controle.** Voor $x < 10$ is $A' > 0$, voor $x > 10$ is $A' < 0$: een maximum.
8. **Antwoord.** Een vierkant van 10 bij 10 meter, met oppervlakte 100 m².

Dat het antwoord een vierkant is, zal je misschien niet verbazen. Het is in feite Fermats probleem uit het historisch intermezzo: het lijnstuk van 20 meter wordt in twee stukken verdeeld, en hun product is maximaal als de stukken gelijk zijn.
:::

![Weide langs een muur](/images/diagrams/m29-omheining.svg "Een rechthoekige weide langs een muur: aan de muurkant is geen hek nodig.")

In de volgende opgave verandert er één ding: één kant van de weide ligt langs een muur. Dan is het antwoord **geen** vierkant meer. Probeer eerst te voorspellen welke kant langer wordt.

{{ exercise: 29-035 }}

## 3. De doos met de grootste inhoud

Een klassiek probleem uit de verpakkingsindustrie: je knipt uit de hoeken van een plat stuk karton vier gelijke vierkantjes en vouwt de randen omhoog. Zo ontstaat een open doos. Knip je kleine vierkantjes, dan wordt de doos breed maar ondiep; knip je grote, dan wordt hij diep maar smal. Ergens daartussen is de inhoud het grootst.

![Een doos vouwen](/images/diagrams/m29-doos.svg "Uit een vierkant van 30 bij 30 cm worden hoekjes van x bij x geknipt. De bodem wordt 30 − 2x bij 30 − 2x, de hoogte x.")

:::example Uitgewerkt voorbeeld 3: karton van 30 bij 30 cm
1. **Variabele.** $x$ = zijde van de weggeknipte vierkantjes, in cm. Dat wordt ook de hoogte van de doos.
2. **Rest in $x$.** Van elke zijde van 30 cm gaat aan beide kanten $x$ af: de bodem is $(30 - 2x)$ bij $(30 - 2x)$.
3. **Formule.** $V(x) = x(30 - 2x)^2$. Uitwerken: $(30 - 2x)^2 = 900 - 120x + 4x^2$, dus
$$
V(x) = 4x^3 - 120x^2 + 900x
$$
4. **Domein.** $0 < x < 15$ (anders blijft er geen bodem over).
5. **Differentiëren.** $V'(x) = 12x^2 - 240x + 900 = 12(x^2 - 20x + 75) = 12(x - 5)(x - 15)$.
6. **Nulpunten.** $x = 5$ of $x = 15$. Alleen $x = 5$ ligt binnen het domein.
7. **Controle.** Testwaarde $x = 1$: $V'(1) = 12 \cdot (-4) \cdot (-14) > 0$. Testwaarde $x = 10$: $V'(10) = 12 \cdot 5 \cdot (-5) < 0$. Van $+$ naar $-$: een maximum.
8. **Antwoord.** Knip vierkantjes van 5 bij 5 cm. De doos wordt 20 bij 20 bij 5 cm, met inhoud $V(5) = 5 \cdot 400 = 2000$ cm³, oftewel 2 liter.
:::

Bekijk de inhoudsfunctie in de grafiek. Je ziet het maximum bij $x = 5$; de raaklijn is daar horizontaal.

{{ widget: function-plot fn="x*(30-2*x)^2" tangent=true x0=5 xmin=0 xmax=15 ymin=0 ymax=2200 title="Inhoud V(x) van de doos (cm³)" }}

:::warning Let op het domein
De afgeleide had twee nulpunten, maar $x = 15$ is onzinnig: dan is de bodem 0 cm breed en de inhoud 0. Wiskundig is het een minimum van de formule; in de praktijk valt het af. Controleer dus altijd of je oplossingen binnen het domein liggen.
:::

{{ exercise: 29-036 }}

## 4. Winst maximaliseren

Ook in de economie draait optimaliseren om de afgeleide. Als de prijs stijgt, verdien je meer per stuk, maar verkoop je minder stuks. Waar ligt het evenwicht?

:::example Uitgewerkt voorbeeld 4: de prijs van een concertkaartje
Een theater verkoopt bij een prijs van $p$ euro ongeveer $q = 600 - 10p$ kaartjes. De kosten per bezoeker zijn € 6. Welke prijs geeft de grootste winst?

1. **Winst per kaartje.** $p - 6$ euro.
2. **Totale winst.** $W(p) = (p - 6)(600 - 10p) = 600p - 10p^2 - 3600 + 60p = -10p^2 + 660p - 3600$.
3. **Domein.** $6 \leq p \leq 60$ (anders is er verlies of geen verkoop).
4. **Afgeleide.** $W'(p) = -20p + 660 = 0$ geeft $p = 33$.
5. **Soort.** $W$ is een bergparabool, dus dit is een maximum.
6. **Antwoord.** Bij een prijs van € 33 verkoopt het theater $600 - 330 = 270$ kaartjes, met een winst van $W(33) = 27 \cdot 270 = 7290$, dus € 7.290.
:::

:::tip Marginaal denken
Economen zeggen: zolang een prijsverhoging van één euro meer oplevert dan ze kost, moet je de prijs verhogen. Dat is precies het teken van $W'(p)$. Bij de optimale prijs is de marginale opbrengst van een verhoging nul.
:::

{{ exercise: 29-037 }}

## 5. Uitdagingen

De laatste drie opgaven combineren alles uit deze module. Ze vragen meer denkwerk. Neem de tijd, maak een schets en gebruik de hints alleen als je echt vastzit.

:::challenge Drie uitdagingen
1. Een functie met een parameter: kies de parameter zo dat het minimum op een voorgeschreven plek ligt.
2. Een doos met een vaste inhoud en zo weinig mogelijk karton. Hier heb je de machtsregel voor een negatieve exponent nodig (les 3b).
3. Raaklijnen aan een parabool die door een punt **buiten** de parabool gaan.
:::

{{ exercises: 29-038, 29-039, 29-040 }}
