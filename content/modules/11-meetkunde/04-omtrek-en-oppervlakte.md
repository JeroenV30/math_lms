# Van grens naar vlak

In de introductie zag je het verschil al: de **omtrek** is de lengte van de rand, de **oppervlakte** is de hoeveelheid vlak binnen die rand. In deze les leer je beide berekenen voor de belangrijkste figuren. Je leert de formules niet uit je hoofd als losse feiten: je leidt ze stap voor stap af uit één idee, de rechthoek.

## 1. Omtrek

De omtrek van een veelhoek vind je door **alle zijden op te tellen**. Meer is het niet. Voor een rechthoek met lengte $l$ en breedte $b$ zijn er twee zijden van $l$ en twee van $b$:

$$
O = l + b + l + b = 2(l + b)
$$

Voor een vierkant met zijde $z$ is $O = 4z$, en voor een gelijkzijdige driehoek $O = 3z$.

De omtrek is een **lengte**: je drukt hem uit in mm, cm, m of km. Bij een samengestelde figuur moet je goed opletten welke randen echt tot de grens behoren. Daar kom je in paragraaf 6 op terug.

## 2. Oppervlakte: tellen hoeveel vierkantjes

Oppervlakte meet je door te tellen hoeveel **eenheidsvierkanten** in een figuur passen. Een vierkant van 1 cm bij 1 cm heeft een oppervlakte van $1 \text{ cm}^2$ (spreek uit: één vierkante centimeter). Een vierkant van 1 m bij 1 m heeft $1 \text{ m}^2$.

Een rechthoek van 6 cm bij 4 cm bevat 4 rijen van 6 vierkantjes, dus $6 \times 4 = 24$ vierkantjes. Dat is precies het rechthoekmodel van de vermenigvuldiging uit module 4.

:::formula Rechthoek
$$
A = l \times b
$$
Lengte maal breedte, beide in **dezelfde** eenheid. De uitkomst is in de bijbehorende vierkante eenheid.
:::

De formule blijft gelden als de zijden geen gehele getallen zijn. Een rechthoek van 2,5 m bij 1,2 m heeft een oppervlakte van $2{,}5 \times 1{,}2 = 3$ m². Je kunt dat controleren door in decimeters te rekenen: 25 dm bij 12 dm geeft 300 vierkantjes van 1 dm², en 100 dm² is precies 1 m² (zie paragraaf 7).

Probeer hieronder rechthoeken met verschillende afmetingen. Let op hoe omtrek en oppervlakte elk op hun eigen manier veranderen.

{{ widget: shape-area shape=rectangle }}

### Zelfde omtrek, andere oppervlakte

Neem een touw van 20 meter en span het als rechthoek uit. Je kunt 2 bij 8 maken, of 4 bij 6, of 5 bij 5. De omtrek is steeds 20 m, maar de oppervlakte niet:

| Afmetingen | Omtrek | Oppervlakte |
|---|---|---|
| 1 m × 9 m | 20 m | 9 m² |
| 2 m × 8 m | 20 m | 16 m² |
| 4 m × 6 m | 20 m | 24 m² |
| 5 m × 5 m | 20 m | 25 m² |

Hoe meer de rechthoek op een vierkant lijkt, hoe groter de oppervlakte bij dezelfde omtrek. Daarom is "het perceel heeft een omtrek van 400 meter" geen bruikbare maat voor hoeveel grond iemand bezit. Een smalle strook van 1 bij 199 meter heeft dezelfde omtrek als een vierkant van 100 bij 100 meter, maar maar een vijftigste van de oppervlakte.

:::warning Omtrek en oppervlakte verwarren
Twee klassieke fouten. Ten eerste: de omtrek berekenen als $l \times b$ of de oppervlakte als $2(l + b)$. Ten tweede: de eenheid vergeten of verkeerd kiezen. Stel jezelf daarom altijd eerst de vraag: **zoek ik een rand of een vlak?** Bij een rand hoort m, bij een vlak hoort m².
:::

{{ exercises: 11-011, 11-012 }}

## 3. Het parallellogram: knippen en schuiven

Een parallellogram is een "scheefgeduwde rechthoek". Hoe groot is zijn oppervlakte?

Kies een zijde als **basis** $b$. De **hoogte** $h$ is de **loodrechte afstand** tussen die basis en de overstaande zijde. Knip nu aan de linkerkant langs de hoogte een driehoek af en schuif die naar de rechterkant. De driehoek past daar precies, omdat de overstaande zijden van een parallellogram even lang en evenwijdig zijn. Je houdt een rechthoek over van $b$ bij $h$.

![Een parallellogram verknippen tot een rechthoek](/images/diagrams/m11-parallellogram-knippen.svg "Knip links een driehoek af langs de hoogte en schuif hem naar rechts: het parallellogram wordt een rechthoek met dezelfde basis b en hoogte h.")

:::formula Parallellogram
$$
A = b \times h
$$
met $h$ de **loodrechte** hoogte bij basis $b$, niet de schuine zijde.
:::

Knippen en schuiven verandert de oppervlakte niet: er gaat niets verloren en er komt niets bij. Dat principe, dat Euclides als "algemeen begrip" formuleerde (gelijken bij gelijken opgeteld geven gelijken), is de motor achter vrijwel elke oppervlakteformule in deze les.

{{ widget: shape-area shape=parallelogram }}

:::example Schuine zijde of hoogte?
Een parallellogram heeft een basis van 9 cm, schuine zijden van 5 cm en een loodrechte hoogte van 4 cm. Wat is de oppervlakte?

De schuine zijde van 5 cm doet voor de oppervlakte **niet** mee. Je hebt basis en loodrechte hoogte nodig: $A = 9 \times 4 = 36$ cm².

De schuine zijde heb je wél nodig voor de **omtrek**: $O = 2 \times (9 + 5) = 28$ cm. Dezelfde figuur, twee vragen, twee verschillende sets gegevens.
:::

## 4. De driehoek: de helft van een parallellogram

Neem een driehoek, maak er een kopie van, draai die kopie een halve slag en leg hem tegen de oorspronkelijke driehoek. Samen vormen ze een parallellogram met dezelfde basis en dezelfde hoogte. De driehoek is precies de helft daarvan.

:::formula Driehoek
$$
A = \tfrac{1}{2} \times b \times h = \frac{b \times h}{2}
$$
met $h$ de loodrechte hoogte vanaf het tegenoverliggende hoekpunt naar (het verlengde van) de basis.
:::

Euclides bewijst dit in propositie I.41: een parallellogram met dezelfde basis als een driehoek en tussen dezelfde evenwijdige lijnen is het dubbele van die driehoek.

{{ widget: shape-area shape=triangle }}

### Waar ligt de hoogte?

Elke driehoek heeft drie hoogtes, één bij elke zijde als basis. Bij een rechthoekige driehoek zijn de twee rechthoekszijden elkaars hoogte. Bij een stomphoekige driehoek valt de hoogte bij een korte basis **buiten** de driehoek: je moet de basis verlengen om er loodrecht op te kunnen komen.

![Hoogte binnen en buiten een driehoek](/images/diagrams/m11-driehoek-hoogte.svg "Links: bij een scherphoekige driehoek ligt de hoogte binnen de figuur. Rechts: bij een stomphoekige driehoek valt de hoogte op het verlengde van de basis, buiten de driehoek.")

De formule $A = \tfrac12 bh$ werkt in beide gevallen. Bij de stomphoekige driehoek kun je dat inzien als het verschil van twee rechthoekige driehoeken: de grote driehoek met de verlengde basis min het driehoekje dat erbuiten ligt.

:::example Drie driehoeken
**a.** Basis 8 cm, hoogte 5 cm: $A = \tfrac12 \times 8 \times 5 = 20$ cm².

**b.** Een rechthoekige driehoek met rechthoekszijden 6 m en 9 m. Kies 6 m als basis; de andere rechthoekszijde staat er loodrecht op en is dus de hoogte: $A = \tfrac12 \times 6 \times 9 = 27$ m².

**c. Omgekeerd.** Een driehoekig stuk grond heeft een oppervlakte van 30 m² en een basis van 12 m. Hoe groot is de hoogte? Uit $\tfrac12 \times 12 \times h = 30$ volgt $6h = 30$, dus $h = 5$ m.
:::

:::warning De halve vergeten
Wie bij een driehoek $b \times h$ uitrekent en stopt, krijgt de oppervlakte van het hele parallellogram: twee keer te veel. Controleer met een schatting: een driehoek past altijd in de rechthoek van $b$ bij $h$ en vult die nooit helemaal.
:::

{{ exercises: 11-013, 11-014, 11-035 }}

## 5. Het trapezium

Een trapezium heeft twee evenwijdige zijden $a$ en $c$ (de evenwijdige zijden), op een loodrechte afstand $h$ van elkaar. Leg weer een gedraaide kopie ertegen: samen vormen ze een parallellogram met basis $a + c$ en hoogte $h$. Het trapezium is de helft daarvan.

:::formula Trapezium
$$
A = \frac{a + c}{2} \times h
$$
Het **gemiddelde** van de twee evenwijdige zijden, maal de hoogte.
:::

Dat gemiddelde is een mooie manier om de formule te onthouden: een trapezium heeft dezelfde oppervlakte als een rechthoek waarvan de breedte het gemiddelde is van de twee evenwijdige zijden. Een rechthoek is een bijzonder trapezium met $a = c$, en dan geeft de formule gewoon $a \times h$. Een driehoek kun je zien als een trapezium waarvan één evenwijdige zijde tot lengte 0 is ingekrompen, en dan geeft de formule $\tfrac12 ah$. Eén formule, drie figuren.

:::example Een dijkdoorsnede
De dwarsdoorsnede van een dijk is een trapezium: onderaan 20 m breed, bovenaan 6 m, en 4 m hoog. De oppervlakte van de doorsnede is $\frac{20 + 6}{2} \times 4 = 13 \times 4 = 52$ m². Is de dijk 500 m lang, dan bevat hij $52 \times 500 = 26\,000$ m³ grond (inhoud komt in les 5).
:::

{{ exercises: 11-036 }}

## 6. Samengestelde figuren

Echte percelen, kamers en tuinen zijn zelden een keurige rechthoek. Er zijn twee strategieën.

- **Opdelen**: verdeel de figuur in rechthoeken, driehoeken en trapezia, bereken elk stuk en tel op.
- **Aanvullen en aftrekken**: maak er een grote rechthoek van en trek de ontbrekende stukken af.

:::example Een L-vormige kamer
Een kamer is 8 m bij 6 m, maar in één hoek ontbreekt een stuk van 3 m bij 2 m (een trapgat).

- **Aftrekken:** $8 \times 6 - 3 \times 2 = 48 - 6 = 42$ m².
- **Opdelen:** knip de L in een strook van 8 m bij 4 m en een strook van 5 m bij 2 m: $32 + 10 = 42$ m².

Twee methoden, hetzelfde antwoord. Dat is een sterke controle.

En de **omtrek**? Loop langs de rand: 8, 4, 3, 2, 5, 6 meter. Samen 28 m. Dat is precies de omtrek van de hele rechthoek, $2(8 + 6) = 28$ m: de twee randen van de inkeping vervangen de twee stukken die je wegneemt. Dit werkt alleen bij een uitsnijding in een **hoek**. Zit de inkeping midden in een zijde, dan komen er twee randen bij en wordt de omtrek groter.
:::

:::warning Omtrek van een samengestelde figuur
Tel nooit de lijnen mee waarlangs je de figuur in stukken hebt geknipt. Die lijnen liggen binnen de figuur en horen niet bij de grens. Loop in gedachten één keer de rand rond en noteer elke zijde precies één keer.
:::

{{ exercises: 11-015, 11-037 }}

## 7. Oppervlaktematen omrekenen

In module 6 leerde je het metrieke trapje voor lengte: elke tree is een factor 10. Bij oppervlakte is elke tree een factor **100**. Waarom?

![Een vierkante decimeter bevat honderd vierkante centimeters](/images/diagrams/m11-oppervlaktematen.svg "1 dm = 10 cm, dus een vierkant van 1 dm bij 1 dm bevat 10 × 10 = 100 vierkantjes van 1 cm². Bij oppervlakte is elke stap op het trapje een factor 100.")

Een vierkante decimeter is een vierkant van 10 cm bij 10 cm. Daarin passen 10 rijen van 10 vierkante centimeters: $1 \text{ dm}^2 = 100 \text{ cm}^2$. Zo gaat het bij elke stap.

$$
1 \text{ m}^2 = 10 \text{ dm} \times 10 \text{ dm} = 100 \text{ dm}^2 = 100 \text{ cm} \times 100 \text{ cm} = 10\,000 \text{ cm}^2
$$

| Van | Naar | Factor |
|---|---|---|
| m² | dm² | × 100 |
| m² | cm² | × 10.000 |
| m² | mm² | × 1.000.000 |
| km² | m² | × 1.000.000 |

Voor land gebruik je ook de **are** (a) en de **hectare** (ha), die met het metrieke stelsel in Frankrijk werden ingevoerd:

- $1 \text{ a} = 100 \text{ m}^2$ (een vierkant van 10 m bij 10 m);
- $1 \text{ ha} = 100 \text{ a} = 10\,000 \text{ m}^2$ (een vierkant van 100 m bij 100 m, bijna anderhalf voetbalveld);
- $1 \text{ km}^2 = 100 \text{ ha}$.

Het lengtetrapje hieronder laat de factor 10 per tree zien. Bedenk bij elke stap dat de oppervlaktefactor het **kwadraat** daarvan is: twee treden is bij lengte $\times 100$, bij oppervlakte $\times 10\,000$.

{{ widget: unit-ladder quantity=length }}

:::example Twee omrekeningen
**a.** Hoeveel cm² is 2,5 m²? Van m² naar cm² is twee treden omlaag, elke tree $\times 100$: $2{,}5 \times 10\,000 = 25\,000$ cm².

**b.** Een tegel heeft een oppervlakte van 900 cm². Hoeveel m² is dat? Twee treden omhoog: $900 : 10\,000 = 0{,}09$ m². Controle via lengtes: de tegel is 30 cm bij 30 cm, dus 0,3 m bij 0,3 m, en $0{,}3 \times 0{,}3 = 0{,}09$ m².
:::

:::warning Factor 10 in plaats van 100
De meest gemaakte fout bij oppervlaktematen is rekenen met het lengtetrapje: "1 m² is 100 cm², want 1 m is 100 cm". Teken in zo'n geval een vierkant van 1 m bij 1 m en vraag je af hoeveel vierkantjes van 1 cm bij 1 cm daarin passen: 100 rijen van 100. Een veilige alternatieve route is altijd: **reken eerst de lengtes om, en vermenigvuldig daarna.**
:::

{{ exercises: 11-016, 11-017, 11-038 }}
