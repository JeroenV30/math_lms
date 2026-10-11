# Vijf casussen: van taxi tot epidemie

In deze les doorloop je de modelleercyclus vijf keer, telkens met een ander modeltype. Let bij elke casus op drie vragen: **welk mechanisme** rechtvaardigt het modeltype, **hoe bepaal je de parameters**, en **waar houdt het model op te werken**?

## Casus 1: het taxitarief (lineair)

**Probleem.** Een taxibedrijf rekent een instaptarief en een prijs per kilometer. Je wilt de ritprijs vooraf kunnen berekenen, en omgekeerd uit een ritprijs de afstand kunnen terugrekenen.

**Mechanisme.** Elke kilometer kost hetzelfde bedrag, en er komt één keer een vast bedrag bij. Een vaste hoeveelheid per eenheid plus een startwaarde: dat is lineair.

:::example Uitgewerkt voorbeeld: ritprijs en terugrekenen
Het (fictieve) tarief: instaptarief € 4,00 en € 2,40 per kilometer.

**Model.** $K = 4{,}00 + 2{,}40x$, met $x$ de afstand in km en $K$ de prijs in euro.

**Vooruit.** Een rit van 7 km kost $4 + 2{,}40 \cdot 7 = 4 + 16{,}80 = 20{,}80$ euro.

**Terug.** Een rit kostte € 26,80. Dan geldt $4 + 2{,}40x = 26{,}80$, dus $2{,}40x = 22{,}80$ en $x = 22{,}80 : 2{,}40 = 9{,}5$ km.

**Geldigheid.** Het model negeert wachttijd, files en toeslagen. In werkelijkheid rekenen veel taxi's ook per minuut. Dan krijg je een model met twee variabelen: $K = 4{,}00 + 2{,}40x + 0{,}40m$, met $m$ het aantal minuten. Het blijft lineair in elk van beide variabelen.
:::

In Nederland stelt de overheid elk jaar maximumtarieven vast voor taxiritten die je niet vooraf boekt, met precies deze opbouw: een instaptarief, een bedrag per kilometer en een bedrag per minuut. De bedragen hierboven zijn afgeronde voorbeeldgetallen.

{{ exercises: 34-012, 34-013, 34-014 }}

## Casus 2: de remweg (kwadratisch)

**Probleem.** Hoeveel meter heeft een auto nodig om tot stilstand te komen? Dit is de basis van adviezen over volgafstand en van snelheidslimieten bij scholen.

**Vereenvoudigen.** De **stopafstand** bestaat uit twee delen:

1. De **reactieafstand**: de afstand die je aflegt tussen het zien van het gevaar en het indrukken van de rem. In die tijd rijd je met constante snelheid door. Aanname: reactietijd $t_r \approx 1$ s (in werkelijkheid ruwweg 0,5 tot 2 seconden, afhankelijk van alertheid, leeftijd en afleiding).
2. De **remafstand**: de afstand tijdens het remmen. Aanname: de auto vertraagt gelijkmatig met een vertraging $a$. Op droog asfalt is dat ruwweg 7 à 8 m/s², op een nat of glad wegdek veel minder.

**Mechanisme.** Tijdens de reactietijd is de afstand $v \cdot t_r$: lineair in $v$. Tijdens het remmen moet de bewegingsenergie worden weggewerkt, en die is evenredig met $v^2$. Uit de natuurkunde van eenparig vertraagde beweging volgt dat de remafstand $\dfrac{v^2}{2a}$ is.

:::formula Stopafstand
$$
s = v \cdot t_r + \frac{v^2}{2a}
$$

met $v$ in m/s, $t_r$ in s en $a$ in m/s²; $s$ is dan in meter.
:::

**Eenhedencontrole.** $\text{m/s} \cdot \text{s} = \text{m}$, en $\dfrac{(\text{m/s})^2}{\text{m/s}^2} = \dfrac{\text{m}^2/\text{s}^2}{\text{m}/\text{s}^2} = \text{m}$. Beide termen zijn meters.

![Stopafstand](/images/diagrams/m34-stopafstand.svg "Reactieafstand en remafstand bij 72 km/h. Eigen diagram.")

:::example Uitgewerkt voorbeeld: stopafstand bij 72 km/h en bij 144 km/h
**Omrekenen.** $72 \text{ km/h} = 72 : 3{,}6 = 20$ m/s.

**Reactieafstand.** $20 \cdot 1 = 20$ m.

**Remafstand.** $\dfrac{20^2}{2 \cdot 8} = \dfrac{400}{16} = 25$ m.

**Stopafstand.** $20 + 25 = 45$ m.

**Twee keer zo snel.** Bij 144 km/h = 40 m/s: reactieafstand 40 m, remafstand $\dfrac{1600}{16} = 100$ m, samen 140 m. De snelheid verdubbelt, maar de remafstand wordt **vier keer** zo groot en de stopafstand ruim drie keer.
:::

:::warning Een kwadratisch verband voelt niet intuïtief
Veel mensen schatten dat een twee keer zo hoge snelheid een twee keer zo lange remweg geeft. Dat is lineair denken over een kwadratisch verband. Het omgekeerde geldt ook: 30 km/h in plaats van 50 km/h in een woonwijk verkort de remafstand tot $(30/50)^2 = 0{,}36$ deel, dus met bijna tweederde.
:::

Kun je de remvertraging niet meten, dan kun je de **parameter fitten**. Neem aan dat de remafstand de vorm $s = k v^2$ heeft. Eén betrouwbare meting legt $k$ dan vast. Is bij 50 km/h de remafstand 12 m, dan is $k = 12 / 50^2 = 0{,}0048$ m per (km/h)². Let op: deze $k$ hoort bij snelheden in km/h. Werk je in m/s, dan krijg je een andere waarde.

{{ exercises: 34-015, 34-016, 34-017 }}

## Casus 3: afbraak van een medicijn (exponentieel)

**Probleem.** Na het innemen van een medicijn wordt het in het bloed opgenomen en daarna door lever en nieren afgebroken. Hoeveel is er na een aantal uren nog over, en wanneer zakt de hoeveelheid onder een bepaalde grens?

**Mechanisme.** Bij veel medicijnen breekt het lichaam per uur een vast *percentage* af van wat er is, niet een vaste hoeveelheid. Verandering evenredig met de hoeveelheid: exponentieel verval. De bijbehorende parameter is de **halveringstijd** $T_h$. Voor paracetamol is die bij gezonde volwassenen ongeveer 2 uur; bij een slecht werkende lever kan hij veel langer zijn.

**Vereenvoudigen.** We nemen aan dat het medicijn direct volledig in het bloed zit (de opnamefase laten we weg) en dat er geen nieuwe dosis bijkomt.

:::example Uitgewerkt voorbeeld: hoeveel is er na 5 uur nog over?
Iemand krijgt 800 mg van een medicijn met een halveringstijd van 2 uur.

**Model.** $N(t) = 800 \cdot \left(\tfrac{1}{2}\right)^{t/2}$, met $t$ in uren en $N$ in mg. Elke 2 uur halveert de hoeveelheid.

**Na 4 uur.** Twee halveringen: $800 \to 400 \to 200$ mg.

**Na 5 uur.** $N(5) = 800 \cdot 0{,}5^{2{,}5} = 800 \cdot 0{,}1768 \approx 141$ mg.

**Groeifactor per uur.** $0{,}5^{1/2} \approx 0{,}707$: elk uur blijft ongeveer 70,7% over, ofwel 29,3% wordt per uur afgebroken. Let op: dat is niet "25% per uur" (de helft van 50%).

**Wanneer onder 50 mg?** $800 \cdot 0{,}5^{t/2} = 50$ geeft $0{,}5^{t/2} = \tfrac{1}{16} = 0{,}5^4$. Dus $t/2 = 4$ en $t = 8$ uur. Komt er geen mooie macht uit, dan heb je een logaritme nodig (module 26): $t = 2 \cdot \log_{0{,}5}(\text{deel})$.
:::

{{ exercises: 34-018, 34-019 }}

## Casus 4: de daglengte (periodiek)

**Probleem.** Hoe lang is het licht in Amsterdam op een willekeurige dag van het jaar? Dat is van belang voor bijvoorbeeld de planning van zonne-energie, verlichting of landbouw.

**Mechanisme.** De daglengte wordt bepaald door de stand van de aardas ten opzichte van de zon. Die verandert in een cyclus van een jaar. Een herhalend verschijnsel met een vaste periode vraagt om een **sinusmodel** (module 27).

**Gegevens.** Op de langste dag (rond 21 juni) is het in Amsterdam ongeveer 16 uur en 48 minuten licht, op de kortste dag (rond 21 december) ongeveer 7 uur en 40 minuten. In decimale uren: $16{,}8$ en $7{,}67$ uur.

:::example Uitgewerkt voorbeeld: een sinusmodel opstellen
**Evenwichtsstand.** Het midden tussen maximum en minimum: $d = \dfrac{16{,}8 + 7{,}67}{2} \approx 12{,}2$ uur.

**Amplitude.** De halve afstand tussen maximum en minimum: $A = \dfrac{16{,}8 - 7{,}67}{2} \approx 4{,}6$ uur.

**Periode.** Een jaar: $P = 365$ dagen.

**Verschuiving.** Een sinus gaat stijgend door de evenwichtsstand bij het begin van zijn periode. Bij de daglengte is dat rond 21 maart (dag en nacht ongeveer even lang), dag $c = 80$ van het jaar.

**Model.**

$$
D(t) = 12{,}2 + 4{,}6 \sin\!\left(\frac{2\pi}{365}(t - 80)\right)
$$

met $t$ het dagnummer (1 januari is $t = 1$) en $D$ in uren. Reken in **radialen**.

**Controle.** Bij $t = 171$ (20 juni) is $t - 80 = 91$, ongeveer een kwart periode; de sinus is daar vrijwel 1 en $D \approx 16{,}8$ uur. Bij 1 mei ($t = 121$): $\sin(2\pi \cdot 41/365) = \sin(0{,}706) \approx 0{,}649$, dus $D \approx 12{,}2 + 2{,}99 \approx 15{,}2$ uur.
:::

Speel met de parameters in het model. Wat gebeurt er met de grafiek als je dichter bij de evenaar woont (kleinere amplitude) of verder naar het noorden (grotere amplitude)?

{{ widget: function-plot fn="d+a*sin(2*pi*(x-c)/365)" d=12.2 dmin=6 dmax=18 dstep=0.1 a=4.6 amin=0 amax=12 astep=0.1 c=80 cmin=0 cmax=365 cstep=1 xmin=0 xmax=365 ymin=0 ymax=24 title="Daglengte in uren door het jaar" }}

:::warning Een benadering, geen natuurwet
De echte daglengte volgt niet precies een sinus; de afwijking is in Nederland enkele minuten. De aardbaan is een ellips (Kepler!) en bij de definitie van zonsopkomst telt ook de lichtbreking in de atmosfeer mee. Voor de meeste toepassingen is het sinusmodel ruim nauwkeurig genoeg; voor een astronomische almanak niet.
:::

{{ exercises: 34-020, 34-021 }}

## Casus 5: een epidemie (eerst exponentieel, dan logistisch)

**Probleem.** Een nieuw virus verspreidt zich. Hoe snel groeit het aantal besmettingen, en hoe lang kan dat doorgaan?

**Mechanisme in de beginfase.** Elke besmette persoon besmet gemiddeld een vast aantal anderen. Hoe meer besmette mensen er zijn, hoe meer nieuwe besmettingen er per dag bijkomen: verandering evenredig met de hoeveelheid. In de beginfase is de groei dus **exponentieel**. Begin 2020 groeide het aantal bevestigde besmettingen met het coronavirus in veel landen inderdaad enkele weken ongeveer exponentieel.

:::example Uitgewerkt voorbeeld: verdubbelingstijd
In een stad worden op dag 0 30 besmettingen geteld. Het aantal verdubbelt elke 4 dagen.

**Model.** $N(t) = 30 \cdot 2^{t/4}$.

**Na 20 dagen.** $20/4 = 5$ verdubbelingen: $30 \cdot 2^5 = 30 \cdot 32 = 960$ besmettingen.

**Na 60 dagen.** 15 verdubbelingen: $30 \cdot 2^{15} = 30 \cdot 32\,768 = 983\,040$. Dat is meer dan de bevolking van een grote stad. Hier moet het model dus al lang zijn gaan afwijken.
:::

**Waarom de groei afremt.** Naarmate meer mensen besmet zijn geweest (en dus vaak immuun), treft een besmette persoon steeds minder mensen die nog vatbaar zijn. Ook gaan mensen zich anders gedragen en grijpt de overheid in. De aanname "verandering evenredig met de hoeveelheid" klopt niet meer: de groei wordt geremd door een **plafond**.

:::definition Logistische groei
Bij **logistische groei** is de groei eerst vrijwel exponentieel, daarna remt hij af, en de hoeveelheid nadert een maximum $K$, de **draagkracht**. Een veelgebruikte vorm is

$$
N(t) = \frac{K}{1 + c \cdot g^{-t}}
$$

De grafiek is S-vormig. De groei per tijdseenheid is het grootst als precies de helft van de draagkracht is bereikt, bij $N = K/2$: daar ligt het **buigpunt** van de S.
:::

In de grafiek hieronder zie je een exponentieel model (blauw) en een logistisch model (bruin) met dezelfde start (40) en dezelfde groeifactor in het begin (1,26 per dag) en een draagkracht van 12.000. De eerste twee à drie weken zijn ze nauwelijks te onderscheiden. Daarna gaan ze volledig uiteen.

{{ widget: function-plot fn="40*1.26^x" fn2="12000/(1+299*1.26^(-x))" xmin=0 xmax=40 ymin=0 ymax=15000 title="Exponentieel tegenover logistisch" }}

:::warning Uit de beginfase kun je het plafond niet aflezen
Dit is het lastige van epidemieën: zolang je in de beginfase zit, passen beide modellen even goed bij de data. Of en wanneer de groei afremt, volgt niet uit de eerste metingen, maar uit het mechanisme: hoeveel mensen zijn er vatbaar, wat doen maatregelen? Echte epidemiologische modellen, zoals het SIR-model van Kermack en McKendrick (1927), verdelen de bevolking daarom in groepen (vatbaar, besmet, hersteld) en modelleren de overgangen daartussen.
:::

{{ exercises: 34-022, 34-023 }}
