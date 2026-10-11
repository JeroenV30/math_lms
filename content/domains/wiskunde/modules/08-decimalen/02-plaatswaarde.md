# Cijfers achter de komma

In module 2 heb je gezien dat ons getalsysteem een **plaatswaardesysteem** is: de waarde van een cijfer hangt af van de plaats waar het staat. In 555 betekent elke 5 iets anders: vijf honderdtallen, vijf tientallen, vijf eenheden. In deze les zet je dat systeem voort voorbij de eenheden, naar rechts. Je leert kommagetallen lezen, vergelijken en ordenen, en je ziet waarom vermenigvuldigen en delen met 10, 100 en 1000 zo eenvoudig is.

## 1. Voorbij de eenheden

Kijk naar het patroon van de posities van rechts naar links: eenheden, tientallen, honderdtallen, duizendtallen. Bij elke stap naar links wordt een cijfer **tien keer zoveel** waard. Lees je het patroon andersom, van links naar rechts, dan wordt een cijfer bij elke stap **tien keer zo weinig** waard: van 1000 naar 100 naar 10 naar 1.

Wat komt er na de 1? Als je het patroon gewoon volgt: een tiende van 1, dus $\tfrac{1}{10}$. Daarna een tiende daarvan, $\tfrac{1}{100}$. Daarna $\tfrac{1}{1000}$. De **komma** markeert de grens: links staan de gehele delen, rechts de breukdelen.

![Plaatswaardekaart](/images/diagrams/m08-plaatswaardekaart.svg "De plaatswaardekaart loopt door na de komma. Elke stap naar links is tien keer zoveel waard, elke stap naar rechts een tiende daarvan.")

:::definition Tienden, honderdsten, duizendsten
De eerste positie na de komma is die van de **tienden** ($\tfrac{1}{10} = 0{,}1$), de tweede die van de **honderdsten** ($\tfrac{1}{100} = 0{,}01$), de derde die van de **duizendsten** ($\tfrac{1}{1000} = 0{,}001$). Zo gaat het verder: tienduizendsten, honderdduizendsten, miljoensten.
:::

Het getal 2,375 betekent dus

$$
2{,}375 = 2 + \frac{3}{10} + \frac{7}{100} + \frac{5}{1000} = 2 + 0{,}3 + 0{,}07 + 0{,}005
$$

Dit heet de **uitgeschreven vorm** of **uitsplitsing** van het getal, net als $4732 = 4000 + 700 + 30 + 2$ bij hele getallen.

Let op de symmetrie, of liever het gebrek daaraan. Bij hele getallen heet de eerste positie "eenheden" en pas de tweede "tientallen". Na de komma is de eerste positie meteen de "tienden". Er bestaat dus geen "eendsten": het spiegelpunt van het systeem ligt bij de eenheden, niet bij de komma. Daarom staan de honderdtallen op de derde plaats vóór de komma (100 heeft drie cijfers), maar de honderdsten al op de tweede plaats erachter (0,01).

:::example Uitgewerkt voorbeeld: de waarde van elk cijfer
Wat is de waarde van elk cijfer in 40,608?

1. De 4 staat op de plaats van de tientallen: waarde 40.
2. De 0 vóór de komma: nul eenheden.
3. De 6 staat op de eerste plaats na de komma, de tienden: waarde $\tfrac{6}{10} = 0{,}6$.
4. De 0 daarna: nul honderdsten.
5. De 8 staat op de derde plaats na de komma, de duizendsten: waarde $\tfrac{8}{1000} = 0{,}008$.

Controle: $40 + 0{,}6 + 0{,}008 = 40{,}608$. Hardop: "veertig en zeshonderdacht duizendsten".
:::

### Een getal als één breuk lezen

Je kunt het hele decimale deel ook in één keer lezen, in de kleinste eenheid die voorkomt. Bij 2,375 is dat de duizendste. Dan is $0{,}375 = \tfrac{375}{1000}$, en het hele getal is **2375 duizendsten**:

$$
2{,}375 = \frac{2375}{1000}
$$

Dat is een krachtig idee: elk eindig kommagetal is een geheel getal, gedeeld door 10, 100, 1000 of een andere macht van tien. Daarom kun je ermee rekenen als met hele getallen. De widget hieronder laat het getal 2375 zien in duizendtallen, honderdtallen, tientallen en eenheden. Lees het nu als **duizendsten**: elk "duizendtal" is dan één gehele, elk "honderdtal" een tiende, elk "tiental" een honderdste en elke "eenheid" een duizendste.

{{ widget: place-value value=2375 }}

Verander het getal in de widget. Probeer 406: lees het als 0,406, dus vier tienden, nul honderdsten en zes duizendsten. Probeer daarna 4060 en 46. Wat betekent 46 duizendsten als kommagetal? (Antwoord: 0,046.)

### De rol van de nul

Een nul is in een plaatswaardesysteem een **plaatshouder**: hij houdt een positie vrij, zodat de andere cijfers op de juiste plaats blijven staan. Dat geldt na de komma net zo goed als ervoor.

- In 0,406 zorgt de middelste nul ervoor dat de 6 duizendsten blijft betekenen. Laat je hem weg, dan krijg je 0,46: zes **honderdsten**, tien keer zoveel.
- In 0,05 zorgt de nul na de komma ervoor dat de 5 op de honderdstenplaats staat. Zonder die nul krijg je 0,5, tien keer zoveel.
- De nul vóór de komma in 0,05 is een afspraak: je zou ",05" kunnen schrijven, maar dan zie je de komma makkelijk over het hoofd. Schrijf hem daarom altijd.

:::warning Welke nullen mag je weglaten?
Alleen nullen **aan het einde** van het decimale deel mag je weglaten of toevoegen zonder de waarde te veranderen: $0{,}5 = 0{,}50 = 0{,}500$. Want $\tfrac{5}{10} = \tfrac{50}{100} = \tfrac{500}{1000}$.

Nullen **tussen** cijfers of **direct na de komma** zijn plaatshouders. Die mag je nooit weglaten: $0{,}05 \neq 0{,}5$ en $3{,}07 \neq 3{,}7$.

Bij hele getallen is het spiegelbeeld waar: nullen aan het **begin** doen er niet toe (007 = 7), nullen aan het eind wel (70 ≠ 7).
:::

{{ exercise: 08-003 }}

## 2. Decimalen op de getallenlijn

Op de getallenlijn liggen tussen 0 en 1 negen tienden: 0,1; 0,2; …; 0,9. Elk van die stukjes kun je weer in tien gelijke stukken verdelen: dat zijn de honderdsten. En elk honderdste weer in tien duizendsten. Om 0,375 te vinden, zoom je dus drie keer in: eerst tussen 0,3 en 0,4, dan tussen 0,37 en 0,38, en dan precies halverwege.

![Inzoomen op de getallenlijn](/images/diagrams/m08-getallenlijn-inzoomen.svg "Drie keer inzoomen: elke stap verdeelt een interval in tien gelijke delen. Zo vind je 0,375.")

De widget hieronder werkt met hele stappen. Lees elk streepje als **één tiende**: de lijn loopt dan van 0 tot 2, en het punt bij 13 staat voor 13 tienden, ofwel 1,3. Sleep het punt naar 7 (0,7), naar 10 (1,0) en naar 18 (1,8). Zie je dat 1,3 en 13 tienden hetzelfde getal zijn?

{{ widget: number-line min=0 max=20 value=13 }}

Een belangrijke eigenschap volgt uit dit inzoomen: **tussen twee verschillende kommagetallen ligt altijd nog een ander kommagetal.** Tussen 0,3 en 0,4 liggen 0,31, 0,35 en 0,399. Tussen 0,37 en 0,38 liggen 0,371 en 0,3755. Je kunt eindeloos blijven inzoomen. Bij hele getallen is dat anders: tussen 3 en 4 ligt geen enkel ander geheel getal.

## 3. Vergelijken en ordenen

Welk getal is groter: 0,8 of 0,75? Wie de cijfers na de komma als hele getallen leest, denkt "75 is meer dan 8" en kiest 0,75. Dat is fout. Kijk naar wat de cijfers betekenen: 0,8 is acht **tienden**, 0,75 is zeven tienden en vijf honderdsten. Acht tienden is meer dan zeven tienden, wat er verder ook achter staat.

:::theory Kommagetallen vergelijken
1. Vergelijk eerst de gehele delen. Het getal met het grootste gehele deel is het grootst.
2. Zijn de gehele delen gelijk, vergelijk dan de tienden. Zijn die gelijk, dan de honderdsten, enzovoort: **van links naar rechts, positie voor positie.**
3. Handig hulpmiddel: vul eindnullen aan tot beide getallen evenveel decimalen hebben. Dan kun je de decimale delen wél als hele getallen vergelijken: $0{,}80$ tegen $0{,}75$, dus 80 honderdsten tegen 75 honderdsten.
:::

Het aantal cijfers achter de komma zegt **niets** over de grootte. Bij hele getallen is een getal met meer cijfers altijd groter (zonder voorloopnullen): 1000 is meer dan 999. Na de komma geldt dat niet. Dit is waarschijnlijk de meest gemaakte fout met decimalen, en volwassenen maken hem ook, vooral onder tijdsdruk.

![Honderdvelden voor 0,3 en 0,25](/images/diagrams/m08-honderdveld-vergelijken.svg "0,3 en 0,25 als deel van een honderdveld. Drie tienden beslaan dertig hokjes, 0,25 maar vijfentwintig.")

:::warning Twee tegengestelde denkfouten
- **"Langer is groter"**: denken dat $0{,}25 > 0{,}3$ omdat 25 meer is dan 3. Het honderdveld hierboven laat zien dat het andersom is: $0{,}3 = 0{,}30$, en 30 honderdsten is meer dan 25 honderdsten.
- **"Korter is groter"**: denken dat $0{,}4 > 0{,}45$ "omdat tienden groter zijn dan honderdsten". Ook fout: 0,45 bevat dezelfde vier tienden als 0,4, plus nog vijf honderdsten.

Beide fouten verdwijnen als je eindnullen aanvult: $0{,}25$ tegen $0{,}30$, en $0{,}40$ tegen $0{,}45$.
:::

:::example Uitgewerkt voorbeeld: ordenen
Zet in volgorde van klein naar groot: 1,09; 1,1; 1,125; 1,019.

1. De gehele delen zijn allemaal 1. Daar valt niets te beslissen.
2. Vul aan tot drie decimalen: 1,090; 1,100; 1,125; 1,019.
3. Vergelijk nu de decimale delen als hele getallen: 90, 100, 125 en 19 duizendsten.
4. Volgorde: 19 < 90 < 100 < 125.

Dus $1{,}019 < 1{,}09 < 1{,}1 < 1{,}125$. Wie "langer is groter" toepast, had 1,1 vooraan gezet en 1,019 achteraan: precies verkeerd.
:::

:::example Uitgewerkt voorbeeld: een getal ertussen
Noem een getal dat precies halverwege 2,6 en 2,7 ligt.

Tussen 2,6 en 2,7 ligt geen ander getal met één decimaal. Ga daarom een positie dieper: $2{,}6 = 2{,}60$ en $2{,}7 = 2{,}70$. Het verschil is tien honderdsten; de helft is vijf honderdsten. Halverwege ligt $2{,}60 + 0{,}05 = 2{,}65$.

Controle met het gemiddelde: $(2{,}6 + 2{,}7) : 2 = 5{,}3 : 2 = 2{,}65$.
:::

{{ exercises: 08-004, 08-031, 08-007 }}

## 4. Vermenigvuldigen en delen met 10, 100 en 1000

In module 4 heb je geleerd waarom $37 \times 10 = 370$: elk cijfer wordt tien keer zoveel waard en schuift daardoor één plaats naar links; de lege plaats van de eenheden vul je met een nul. Dat principe geldt onveranderd voor kommagetallen.

Neem $2{,}37 \times 10$. De 2 (twee eenheden) wordt twee tientallen, de 3 (drie tienden) wordt drie eenheden, de 7 (zeven honderdsten) wordt zeven tienden. Resultaat: $23{,}7$.

![De cijfers schuiven, de komma blijft](/images/diagrams/m08-komma-verschuiven.svg "Bij vermenigvuldigen met 10 schuift elk cijfer één plaats naar links ten opzichte van de komma; bij vermenigvuldigen met 100 twee plaatsen.")

Wat er gebeurt, is dat de **cijfers** van plaats veranderen ten opzichte van de vaste komma. Omdat je met de pen liever de komma verplaatst dan alle cijfers, zegt men meestal: "de komma schuift een plaats naar rechts". Dat is een handige verkorting, zolang je weet wat erachter zit.

:::theory Machten van tien
- **Maal 10, 100, 1000**: het getal wordt 10, 100, 1000 keer zo groot. De komma schuift 1, 2, 3 plaatsen naar **rechts**.
- **Gedeeld door 10, 100, 1000**: het getal wordt 10, 100, 1000 keer zo klein. De komma schuift 1, 2, 3 plaatsen naar **links**.
- Ontbreken er cijfers, vul dan nullen aan als plaatshouders.

Het aantal plaatsen is het aantal nullen in 10, 100 of 1000.
:::

:::example Uitgewerkt voorbeeld: nullen aanvullen
**a.** $0{,}07 \times 1000$. De komma moet drie plaatsen naar rechts, maar er staan maar twee cijfers achter de komma. Schrijf $0{,}070$ en schuif: $0070 = 70$. Controle: 7 honderdsten keer duizend is 7 keer 10, dus 70.

**b.** $4{,}5 : 100$. De komma moet twee plaatsen naar links, maar er staat maar één cijfer vóór de komma. Schrijf $004{,}5$ en schuif: $0{,}045$. Controle: 4,5 is ongeveer 5, en 5 gedeeld door 100 is 0,05. De uitkomst 0,045 past daarbij.

**c.** $237 : 100$. Een geheel getal heeft een "onzichtbare" komma achteraan: $237{,}0$. Twee plaatsen naar links: $2{,}37$. Je kunt het ook lezen als "237 honderdsten", en dat is $2{,}37$.
:::

:::warning De komma de verkeerde kant op
De meest gemaakte fout is de komma de verkeerde kant op schuiven, of één plaats te weinig. Een snelle controle voorkomt dat: **wordt het getal groter of kleiner?** Bij maal 10 moet de uitkomst groter worden, bij gedeeld door 10 kleiner. Bij $45{,}6 : 1000$ moet de uitkomst dus ver onder 1 liggen: $0{,}0456$, niet $45\,600$ en ook niet $0{,}456$.
:::

### Omrekenen in het metrieke stelsel

Het metrieke stelsel uit module 6 is tientallig opgebouwd, en daarom is omrekenen niets anders dan vermenigvuldigen of delen met 10, 100 of 1000. Elke tree op het metrieke trapje is een factor 10.

{{ widget: unit-ladder quantity=length }}

:::example Uitgewerkt voorbeeld: meters en centimeters
Een plank is 2,4 m lang. Hoeveel centimeter is dat?

Een meter is 100 centimeter. Van m naar cm zijn het twee treden omlaag: maal 100. $2{,}4 \times 100 = 240$ cm.

Omgekeerd: een kind is 87 cm lang. Hoeveel meter? Twee treden omhoog: gedeeld door 100. $87 : 100 = 0{,}87$ m.

Controle met gezond verstand: centimeters zijn kleine eenheden, dus in centimeters heb je **meer** nodig dan in meters. 240 is meer dan 2,4. Klopt.
:::

{{ exercises: 08-005, 08-006, 08-032 }}
