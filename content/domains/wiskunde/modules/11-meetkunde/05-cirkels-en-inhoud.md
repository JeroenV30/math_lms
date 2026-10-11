# Cirkels en ruimte

Tot nu toe had elke figuur rechte zijden. Een cirkel heeft er geen een, en toch kun je ook zijn omtrek en oppervlakte berekenen. Daarvoor heb je één bijzonder getal nodig: $\pi$. In het tweede deel van deze les ga je van het vlak naar de ruimte en bereken je de inhoud van kubussen, balken en cilinders.

## 1. Wat is een cirkel?

:::definition Cirkel, middelpunt, straal en middellijn
Een **cirkel** is de verzameling van alle punten in een vlak die op dezelfde afstand liggen van één vast punt, het **middelpunt** $M$.

- De **straal** $r$ is die vaste afstand: elk lijnstuk van $M$ naar de cirkel.
- Een **koorde** is een lijnstuk tussen twee punten op de cirkel.
- De **middellijn** of **diameter** $d$ is een koorde door het middelpunt. Ze is twee stralen lang: $d = 2r$, en dus $r = \tfrac12 d$.
:::

![Middelpunt, straal, middellijn en koorde](/images/diagrams/m11-cirkel-begrippen.svg "Een cirkel met middelpunt M. De straal r loopt van M naar de rand; de middellijn d gaat door M en is twee keer zo lang; een koorde verbindt twee willekeurige punten op de cirkel.")

Strikt genomen is de cirkel alleen de **rand**. Het gebied erbinnen heet de **cirkelschijf**. In het dagelijks taalgebruik zeggen we "de oppervlakte van de cirkel" als we de oppervlakte van de schijf bedoelen; dat doen we hier ook.

Een cirkel teken je met een passer: de afstand tussen de punt en het potlood is de straal. Landmeters deden hetzelfde met een koord en een paal: zet de paal in het middelpunt, span het koord en loop rond.

:::warning Straal of middellijn?
In opgaven wordt soms de straal gegeven, soms de middellijn. Een ronde tafel "van 1,20 m" heeft meestal een **middellijn** van 1,20 m, dus een straal van 0,60 m. Een cirkel met "straal 5" heeft een middellijn van 10. Lees elke opgave twee keer en schrijf vóór je begint expliciet op: $r = \dots$ en $d = \dots$.
:::

## 2. De omtrek en het getal π

Meet bij een paar ronde voorwerpen de omtrek (met een touwtje of meetlint) en de middellijn, en deel die twee door elkaar. Je krijgt ongeveer zulke uitkomsten:

| Voorwerp | Omtrek | Middellijn | Omtrek : middellijn |
|---|---|---|---|
| Munt van 2 euro | 8,1 cm | 2,6 cm | ca. 3,1 |
| Koffiemok | 25,4 cm | 8,1 cm | ca. 3,1 |
| Fietswiel | 2,17 m | 0,69 m | ca. 3,1 |

Hoe groot de cirkel ook is, de omtrek is steeds iets meer dan **drie keer** de middellijn. Dat is geen toeval: alle cirkels zijn vergrotingen van elkaar, en bij een vergroting groeien omtrek en middellijn met dezelfde factor (module 10). Hun verhouding is dus voor elke cirkel dezelfde. Dat vaste getal noemen we $\pi$ (pi).

:::definition Het getal π
$$
\pi = \frac{\text{omtrek}}{\text{middellijn}} \approx 3{,}14159\,26535\dots
$$
De decimalen van $\pi$ houden nooit op en herhalen zich nooit; $\pi$ is geen breuk. Voor berekeningen gebruik je de $\pi$-toets van je rekenmachine, of de benadering $3{,}14$ als je snel wilt schatten.
:::

De letter $\pi$ voor dit getal is pas in de 18e eeuw gangbaar geworden, maar het getal zelf zochten rekenaars al vierduizend jaar eerder. In het historisch intermezzo zie je hoe Egyptenaren, Babyloniërs en Archimedes het benaderden.

:::formula Omtrek van een cirkel
$$
O = \pi \times d = 2 \pi r
$$
:::

:::example Een rond bloemperk
Een rond bloemperk heeft een middellijn van 3 m. Hoeveel meter boordsteen is nodig?

$O = \pi \times 3 \approx 9{,}42$ m. Schatting vooraf: iets meer dan $3 \times 3 = 9$ m. Klopt.

Omgekeerd: een boom heeft een stamomtrek van 2,20 m. Hoe dik is de stam? $d = O : \pi = 2{,}20 : \pi \approx 0{,}70$ m.
:::

:::tip Houd π zo lang mogelijk exact
Schrijf tussenantwoorden als $6\pi$ of $9\pi$ en rond pas aan het eind af. Wie halverwege afrondt op 3,14 en daarna nog vermenigvuldigt, kan in de laatste decimaal afwijken van het juiste antwoord.
:::

## 3. De oppervlakte van een cirkel

Hoe bereken je de oppervlakte van een figuur zonder rechte zijden? Met dezelfde truc als bij het parallellogram: verknippen en anders neerleggen.

Verdeel de cirkelschijf in een groot aantal gelijke taartpunten (sectoren). Leg ze om en om naast elkaar: punt omhoog, punt omlaag. Je krijgt een figuur die op een parallellogram lijkt, met golvende boven- en onderkant. Hoe meer en hoe smallere taartpunten je neemt, hoe meer die figuur een **rechthoek** wordt.

![Een cirkel verknippen tot een bijna-rechthoek](/images/diagrams/m11-cirkel-herschikken.svg "Twaalf taartpunten om en om gelegd vormen bijna een rechthoek. De hoogte is de straal r; de breedte is de halve omtrek, πr.")

- De **hoogte** van die rechthoek is de straal $r$ (de lengte van een taartpunt).
- De **breedte** is de helft van de omtrek, want de helft van de gebogen randjes ligt boven en de helft onder: $\tfrac12 \times 2\pi r = \pi r$.

De oppervlakte is dus breedte maal hoogte: $\pi r \times r = \pi r^2$.

:::formula Oppervlakte van een cirkel
$$
A = \pi r^2 = \pi \times r \times r
$$
:::

Dit argument is geen volledig bewijs, want de figuur wordt nooit precies een rechthoek. Archimedes maakte het rond 250 v.Chr. waterdicht met een redenering die je in het historisch intermezzo tegenkomt. In module 30 (integraalrekening) zie je dat "steeds kleinere stukjes nemen" een van de krachtigste ideeën van de wiskunde is.

{{ widget: shape-area shape=circle }}

:::example Een ronde tafel
Het tafelblad heeft een middellijn van 1,2 m. Hoeveel tafelkleed is minimaal nodig om het blad precies te bedekken?

1. Straal: $r = 1{,}2 : 2 = 0{,}6$ m.
2. Oppervlakte: $A = \pi \times 0{,}6^2 = \pi \times 0{,}36 \approx 1{,}13$ m².

Wie per ongeluk de middellijn in de formule stopt, vindt $\pi \times 1{,}44 \approx 4{,}52$ m²: precies **vier keer** te veel. Dat is het kenmerk van deze fout: twee keer zo'n grote straal geeft vier keer zo'n grote oppervlakte.
:::

:::warning Drie fouten met cirkels
1. **Middellijn in plaats van straal** in $\pi r^2$: vier keer te groot.
2. **$2r$ in plaats van $r^2$**: $\pi \times 2r$ is de omtrek, niet de oppervlakte. Bij $r = 3$ geeft $\pi \times 6 \approx 18{,}85$ (omtrek, in cm) iets anders dan $\pi \times 9 \approx 28{,}27$ (oppervlakte, in cm²).
3. **Eenheid**: de omtrek is een lengte (cm), de oppervlakte een vlak (cm²).
:::

### Halve en kwart cirkels

Een halve cirkelschijf heeft de helft van de oppervlakte: $\tfrac12 \pi r^2$. Maar pas op bij de **omtrek**: de rand van een halve schijf bestaat uit de halve boog **plus** de rechte middellijn. Bij straal 5 cm is dat $\pi \times 5 + 10 \approx 25{,}71$ cm, niet $\pi \times 5 \approx 15{,}71$ cm.

{{ exercises: 11-018, 11-019, 11-020, 11-039 }}

## 4. Inhoud: tellen hoeveel kubusjes

Inhoud (of volume) is de hoeveelheid **ruimte** die een lichaam inneemt. Je meet haar door te tellen hoeveel **eenheidskubussen** erin passen. Een kubus van 1 cm bij 1 cm bij 1 cm heeft een inhoud van $1 \text{ cm}^3$ (één kubieke centimeter).

Een balk van 3 cm lang, 2 cm breed en 4 cm hoog vul je laag voor laag. Op de bodem passen $3 \times 2 = 6$ kubusjes, en er gaan 4 lagen op elkaar: $6 \times 4 = 24$ kubusjes.

:::formula Balk en kubus
$$
V_{\text{balk}} = l \times b \times h \qquad\qquad V_{\text{kubus}} = z \times z \times z = z^3
$$
Alle drie de maten in **dezelfde** lengte-eenheid; de inhoud is dan in de bijbehorende kubieke eenheid.
:::

Kijk nog eens naar de redenering: eerst de **oppervlakte van het grondvlak** ($l \times b$), dan maal het aantal lagen ($h$). Dat idee is veel algemener dan de balk.

:::theory Grondvlak maal hoogte
Voor elk lichaam met een gelijk grondvlak en bovenvlak en rechtopstaande wanden (een **prisma** of een **cilinder**) geldt:
$$
V = A_{\text{grondvlak}} \times h
$$
:::

Een **cilinder** heeft een cirkel als grondvlak: denk aan een blik, een regenton of een graansilo. Het grondvlak heeft oppervlakte $\pi r^2$, dus:

:::formula Cilinder
$$
V = \pi r^2 h
$$
:::

:::example Een regenton
Een regenton is van binnen 80 cm hoog en heeft een middellijn van 60 cm. Hoeveel liter water past erin?

1. Straal: $r = 30$ cm.
2. Grondvlak: $\pi \times 30^2 = 900\pi \approx 2827$ cm².
3. Inhoud: $900\pi \times 80 = 72\,000\pi \approx 226\,195$ cm³.
4. In liters (zie hieronder): $226\,195 : 1000 \approx 226$ liter.

Schatting ter controle: met $\pi \approx 3$ krijg je $3 \times 900 \times 80 = 216\,000$ cm³, ruim 200 liter. Klopt met de orde van grootte.
:::

{{ exercises: 11-021, 11-022, 11-040 }}

## 5. Inhoudsmaten en liters

Bij lengte is elke tree van het metrieke trapje een factor 10, bij oppervlakte een factor 100. Bij inhoud is het een factor **1000**: een kubieke decimeter is een kubus van 10 cm bij 10 cm bij 10 cm, en daarin passen $10 \times 10 \times 10 = 1000$ kubieke centimeters.

| Grootheid | Eén tree op het trapje | Voorbeeld |
|---|---|---|
| Lengte (m) | × 10 | 1 m = 10 dm = 100 cm |
| Oppervlakte (m²) | × 100 | 1 m² = 100 dm² = 10.000 cm² |
| Inhoud (m³) | × 1000 | 1 m³ = 1000 dm³ = 1.000.000 cm³ |

De **liter** is precies een kubieke decimeter. Bij de invoering van het metrieke stelsel in 1795 werd hij zo gedefinieerd. Tussen 1901 en 1964 gold even een andere definitie (de ruimte die 1 kg zuiver water inneemt, iets meer dan 1 dm³), maar sinds 1964 is de liter weer exact gelijk aan 1 dm³. Daaruit volgt:

$$
1 \text{ dm}^3 = 1 \text{ liter} \qquad 1 \text{ cm}^3 = 1 \text{ ml} \qquad 1 \text{ m}^3 = 1000 \text{ liter}
$$

![Een kubieke decimeter is een liter](/images/diagrams/m06-liter-kubus.svg "Uit module 6: een kubus van 10 cm bij 10 cm bij 10 cm bevat 1000 cm³ = 1 dm³ = 1 liter.")

Met het inhoudstrapje hieronder reken je liters om naar milliliters en terug. Het verband met de kubieke maten maak je zelf: liter hoort bij dm³, milliliter bij cm³.

{{ widget: unit-ladder quantity=volume }}

:::example Een aquarium
Een aquarium is van binnen 60 cm lang, 30 cm breed en 40 cm hoog. Hoeveel liter water past erin?

- **Route 1 (cm³):** $60 \times 30 \times 40 = 72\,000$ cm³ $= 72\,000$ ml $= 72$ liter.
- **Route 2 (dm³):** reken eerst de lengtes om: 6 dm, 3 dm, 4 dm. $6 \times 3 \times 4 = 72$ dm³ $= 72$ liter.

Route 2 is vaak het handigst: wie in decimeters rekent, krijgt meteen liters.
:::

:::warning Buitenmaten en binnenmaten
Een inhoudsformule geeft de binnenruimte alleen als je **binnenmaten** gebruikt. Een houten bak van buiten 50 cm bij 40 cm bij 30 cm met wanden van 2 cm dik is van binnen maar 46 bij 36 bij 28 cm (de bodem is één keer 2 cm, de zijwanden twee keer). Met de buitenmaten reken je 60 liter uit, met de binnenmaten ruim 46 liter.
:::

{{ exercises: 11-023, 11-024 }}
