# Evenredigheid en schaal

In de vorige lessen nam je steeds aan dat een verhouding vast bleef: dezelfde prijs per meter, dezelfde smaak per kan. In deze les maak je die aanname expliciet. Wanneer zijn twee grootheden **recht evenredig**, en hoe zie je dat? Daarna pas je evenredigheid toe op een van de oudste toepassingen: de **schaal** van kaarten en tekeningen.

## 1. Wanneer is een verband recht evenredig?

Bij een vaste prijs van € 4 per meter stof geldt

$$
\text{prijs} = 4 \times \text{lengte}.
$$

Deel in elke kolom van de verhoudingstabel de prijs door de lengte: je krijgt steeds 4. Dat vaste quotiënt is de **evenredigheidsfactor**.

:::definition Recht evenredig
Twee grootheden $x$ en $y$ zijn **recht evenredig** als er een vast getal $k$ is met

$$
y = k \cdot x.
$$

Gelijkwaardige omschrijvingen:
- het quotiënt $\frac{y}{x}$ is voor elk paar (met $x \neq 0$) hetzelfde, namelijk $k$;
- twee keer zoveel $x$ geeft twee keer zoveel $y$, drie keer zoveel $x$ geeft drie keer zoveel $y$, enzovoort;
- bij $x = 0$ hoort $y = 0$, en de grafiek is een rechte lijn **door de oorsprong**.
:::

De drie kenmerken horen bij elkaar. Een tabel waarin het quotiënt steeds gelijk is, geeft punten die op één rechte lijn door $(0, 0)$ liggen. De factor $k$ bepaalt hoe steil die lijn is: bij € 4 per meter stijgt de lijn 4 euro per meter.

![Twee grafieken: een rechte lijn door de oorsprong (recht evenredig) en een rechte lijn die begint bij een starttarief (niet evenredig)](/images/diagrams/m10-evenredig-grafiek.svg "Links: stof van € 4 per meter, recht evenredig. Rechts: bezorging met € 5 starttarief en € 2 per km, niet evenredig. Eigen diagram.")

:::example Uitgewerkt voorbeeld: een tabel controleren
Een groenteboer noteert: 2 kg kost € 7, 4 kg kost € 14, 6 kg kost € 21. Is dit recht evenredig?

Bereken de quotiënten: $\frac{7}{2} = 3{,}5$, $\frac{14}{4} = 3{,}5$ en $\frac{21}{6} = 3{,}5$. Ze zijn gelijk, dus ja: de prijs is € 3,50 per kilogram, en $\text{prijs} = 3{,}5 \times \text{massa}$.
:::

{{ exercise: 10-014 }}

## 2. Niet alles is evenredig

Een vaste factor is een **aanname over de situatie**, geen natuurwet. Veel verbanden in het dagelijks leven lijken evenredig, maar zijn het niet.

:::example Uitgewerkt voorbeeld: een starttarief
Een bezorgdienst rekent € 5 starttarief en € 2 per kilometer.

| Afstand (km) | 0 | 3 | 6 | 12 |
|---|---|---|---|---|
| Prijs (€) | 5 | 11 | 17 | 29 |

De afstand verdubbelt van 3 naar 6 km, maar de prijs gaat van € 11 naar € 17, niet naar € 22. De quotiënten zijn $\frac{11}{3} \approx 3{,}67$ en $\frac{17}{6} \approx 2{,}83$: niet gelijk. De grafiek is wel een rechte lijn, maar begint bij € 5 in plaats van bij 0.

Wat wél evenredig is: de **extra** kosten bovenop het starttarief. Die zijn $2 \times$ de afstand. Het verband is "evenredig plus een vast bedrag". In module 19 heet zo'n verband een **lineaire functie**; het rechte evenredige verband is daarvan het bijzondere geval zonder vast bedrag.
:::

Andere situaties waarin de verhouding niet vast blijft:

- **Staffelkorting.** Bij 100 stuks betaal je minder per stuk dan bij 10 stuks.
- **Groei.** Een kind van 5 jaar dat 110 cm lang is, wordt op zijn tiende geen 220 cm.
- **Gedeelde taken.** Als één schilder 6 uur over een kamer doet, doen drie schilders er misschien 2 uur over, maar zeker niet 18 uur. Meer schilders betekent **minder** tijd: als de ene grootheid verdubbelt, halveert de andere. Dat heet **omgekeerd evenredig**: niet het quotiënt maar het **product** blijft vast ($1 \times 6 = 3 \times 2 = 6$ schildersuren). In het historisch intermezzo zie je dat ook snaarlengte en toonhoogte zo samenhangen.

:::warning Eerst de vraag "blijft de verhouding gelijk?"
Voor je een verhoudingstabel invult, controleer je of dezelfde regel voor alle kolommen geldt. Bij twijfel: kijk of de grafiek door de oorsprong zou gaan. Kost nul kilometer echt nul euro? Kost nul personen echt nul gram? Zo niet, dan is het verband niet recht evenredig.
:::

{{ exercises: 10-015, 10-040 }}

## 3. Kruislings vermenigvuldigen

Twee gelijke verhoudingen vormen samen een **evenredigheid**: $a : b = c : d$. Daarvoor bestaat een handige controle.

Zijn $3 : 5$ en $12 : 20$ gelijkwaardig? Vergelijk de **kruisproducten**:

$$
3 \times 20 = 60, \qquad 5 \times 12 = 60.
$$

Ze zijn gelijk, dus de verhoudingen zijn gelijkwaardig. Bij $3 : 5$ en $6 : 8$ geeft dezelfde test $3 \times 8 = 24$ en $5 \times 6 = 30$: niet gelijk.

:::theory Productregel
Voor $b \neq 0$ en $d \neq 0$ geldt

$$
\frac{a}{b} = \frac{c}{d} \iff a \cdot d = b \cdot c.
$$

Dit volgt door beide kanten van $\frac ab = \frac cd$ met $b \cdot d$ te vermenigvuldigen. Het is dezelfde gedachte als het gelijknamig maken van breuken in module 7.
:::

:::example Uitgewerkt voorbeeld: een onbekende term
Los op: $4 : 7 = x : 21$.

- Met de productregel: $4 \times 21 = 7 \times x$, dus $7x = 84$ en $x = 84 : 7 = 12$.
- Met een tabel: van 7 naar 21 is maal 3, dus van 4 naar 12 ook maal 3.

Beide routes geven 12. De tabel is vaak sneller als de factor mooi is; de productregel werkt altijd, ook bij lelijke getallen.
:::

{{ exercise: 10-016 }}

## 4. Schaal: van kaart naar werkelijkheid

Een kaart of bouwtekening is een verkleinde afbeelding met dezelfde vorm als het origineel. Alle lengtes zijn met dezelfde factor verkleind. Die verhouding heet de **schaal**.

:::definition Schaal
Schaal $1 : n$ betekent: elke lengte op de kaart is $n$ keer zo klein als in werkelijkheid. Eén centimeter op de kaart is $n$ centimeter in werkelijkheid. Het getal $n$ heet de **schaalnoemer**.
:::

Op een wandelkaart met schaal $1 : 25\,000$ staat 1 cm dus voor 25.000 cm in werkelijkheid. Dat is 250 m. Belangrijk: de schaal zelf heeft **geen eenheid**. Hij vergelijkt lengtes in dezelfde eenheid. Pas als je wilt weten hoeveel meter of kilometer iets is, reken je om met het metrieke trapje uit module 6.

{{ widget: unit-ladder quantity=length }}

:::example Uitgewerkt voorbeeld: een wandelroute
Een route is 6 cm op een kaart met schaal $1 : 25\,000$. Hoe lang is de route?

1. Werkelijke lengte in dezelfde eenheid als de kaart: $6 \times 25\,000 = 150\,000$ cm.
2. Naar meters: $150\,000 : 100 = 1500$ m.
3. Naar kilometers: $1500 : 1000 = 1{,}5$ km.

Controle: 1 cm is 250 m, dus 6 cm is $6 \times 250 = 1500$ m.
:::

In een verhoudingstabel kun je de eenheden al omgerekend neerzetten. Hieronder staat 1 cm op de kaart tegenover 250 m in werkelijkheid. Let op: de factor 250 in deze tabel is niet de schaalnoemer, want de twee rijen hebben verschillende eenheden.

{{ widget: ratio-table a=1 b=250 labelA="Kaartlengte (cm)" labelB="Werkelijke lengte (m)" }}

{{ exercises: 10-017, 10-018 }}

## 5. Van werkelijkheid naar tekening, en de schaal zelf bepalen

Andersom deel je door de schaalnoemer. Een kamer van 4 m lang wordt op een plattegrond met schaal $1 : 50$:

$$
4 \text{ m} = 400 \text{ cm}, \qquad 400 : 50 = 8 \text{ cm}.
$$

:::warning Schaal omgekeerd
Wie de richting omdraait, krijgt absurde uitkomsten. Een kamer van 400 cm "maal 50" geeft 20.000 cm: een tekening van 200 meter. Een kaartafstand van 6 cm "gedeeld door 25.000" geeft een wandelroute van 0,00024 cm. Stel jezelf altijd de vraag: **moet het getal groter of kleiner worden?** Van kaart naar werkelijkheid wordt het groter (vermenigvuldigen), van werkelijkheid naar kaart kleiner (delen).
:::

Wil je de schaal van een kaart zelf bepalen, dan heb je één bekende afstand nodig, zowel op de kaart als in werkelijkheid. Maak eerst de eenheden gelijk en vereenvoudig dan tot de vorm $1 : n$.

:::example Uitgewerkt voorbeeld: de schaal bepalen
Een weg van 600 m is op de kaart 3 cm lang.

1. Gelijke eenheden: 600 m = 60.000 cm.
2. Verhouding kaart : werkelijkheid $= 3 : 60\,000$.
3. Deel beide termen door 3: $1 : 20\,000$.

Zonder stap 1 zou je $3 : 600 = 1 : 200$ vinden: een kaart waarop 1 cm voor 2 meter staat. Dat is een bouwtekening, geen wegenkaart.
:::

{{ exercises: 10-019, 10-041, 10-020 }}

## 6. Lengte, oppervlakte en inhoud vergroten anders

Een rechthoek van 2 bij 3 cm heeft een oppervlakte van 6 cm². Vergroot je elke lengte met factor 4, dan wordt hij 8 bij 12 cm, met een oppervlakte van 96 cm². De oppervlakte is niet 4 maar $4 \times 4 = 16$ keer zo groot geworden: in elk van de twee richtingen werd hij vier keer zo groot.

:::theory Lengtefactor, oppervlaktefactor, inhoudsfactor
Bij een vergroting met lengtefactor $k$:
- worden alle lengtes $k$ keer zo groot;
- worden alle oppervlaktes $k^2$ keer zo groot;
- worden alle inhouden $k^3$ keer zo groot.

Verdubbelde zijden geven dus vier keer zoveel oppervlakte en acht keer zoveel inhoud.
:::

Dit verklaart waarom een kaart met schaal $1 : 25\,000$ geen oppervlakteschaal $1 : 25\,000$ heeft. Een vierkantje van 1 cm bij 1 cm op de kaart is in werkelijkheid 250 m bij 250 m, dus $62\,500$ m², en de oppervlakteverhouding is $1 : 625\,000\,000$. In module 11 keert dit terug bij de berekening van oppervlakte en inhoud.

{{ exercise: 10-021 }}
