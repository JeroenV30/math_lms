# Wat vermenigvuldigen is, en hoe je tafels slim leert

In module 3 heb je geleerd hoe optellen werkt. Vermenigvuldigen is daar een verkorte schrijfwijze van, maar het blijkt veel meer te zijn dan alleen een afkorting. In deze les bekijk je vermenigvuldigen op drie manieren, en elke manier laat een andere eigenschap zien.

## 1. Vermenigvuldigen als herhaald optellen

Een metselaar legt 6 rijen van 8 stenen. Hoeveel stenen zijn dat? Je kunt tellen: 8, 16, 24, 32, 40, 48. Je telt zes keer een groep van acht op:

$$
8 + 8 + 8 + 8 + 8 + 8 = 48
$$

Dat schrijven we korter als $6 \times 8 = 48$, uitgesproken als "zes keer acht" of "zes maal acht".

:::definition Vermenigvuldigen
$a \times b$ betekent: neem $a$ groepen van $b$ en tel ze samen.

$$
a \times b = \underbrace{b + b + \dots + b}_{a \text{ keer}}
$$

De getallen $a$ en $b$ heten de **factoren**, de uitkomst heet het **product**.
:::

Het woord "keer" verraadt de herkomst: je doet iets een aantal *keren*. In het Engels zeg je *times*, in het Latijn *multiplicare*, "veelvoudig maken". Het teken $\times$ is betrekkelijk jong: het verschijnt voor het eerst in een anonieme bijlage bij een boek van John Napier uit 1618, waarschijnlijk geschreven door de Engelse wiskundige William Oughtred, die het in 1631 ook in zijn eigen algebraboek gebruikte. Je komt ook de punt tegen, $6 \cdot 8$, vooral in de algebra later in deze cursus.

## 2. Vermenigvuldigen als rooster

Leg de 48 stenen netjes neer: 6 rijen, in elke rij 8 stenen. Dan krijg je een **rooster**. Het mooie van een rooster is dat je het van twee kanten kunt bekijken. Draai het een kwartslag en je ziet 8 rijen van 6 stenen. Het aantal stenen is natuurlijk niet veranderd.

![Rooster van 3 bij 4](/images/diagrams/m04-rooster-3x4.svg "Drie rijen van vier is na een kwartslag vier rijen van drie: 3 × 4 = 4 × 3.")

Dat is geen toeval, maar een algemene eigenschap.

:::theory De wisseleigenschap
Voor alle getallen $a$ en $b$ geldt

$$
a \times b = b \times a
$$

De volgorde van de factoren doet er niet toe. Deze eigenschap heet de **wisseleigenschap** of **commutativiteit**.
:::

Als je erover nadenkt, is dat helemaal niet vanzelfsprekend. "Zes groepen van acht" en "acht groepen van zes" zijn in het dagelijks leven heel verschillende situaties: zes dozen met acht eieren, tegenover acht dozen met zes eieren. Toch is het totaal gelijk. Het rooster laat zien *waarom*.

De wisseleigenschap is in de praktijk een groot voordeel. Wil je $3 \times 99$ uitrekenen, dan hoef je niet drie keer 99 op te tellen; je mag ook denken aan 99 groepen van 3... of, nog slimmer, aan $3 \times 100 - 3 = 297$. Daarover straks meer.

## 3. Vermenigvuldigen als rechthoek

Maak de stenen in gedachten tot vierkante tegeltjes van 1 bij 1. Het rooster wordt dan een **rechthoek** van 6 bij 8, en het product $6 \times 8 = 48$ is de **oppervlakte**: het aantal tegeltjes dat erin past.

Dit beeld lijkt bescheiden, maar het is het belangrijkste beeld van deze module. In de volgende les ga je rechthoeken in stukken knippen om grote vermenigvuldigingen te kraken. En het verklaart waarom vermenigvuldigen van oudsher met *land* verbonden is: wie de lengte en breedte van een akker vermenigvuldigt, weet hoeveel grond hij heeft.

## 4. De bijzondere rol van 1 en 0

Twee gevallen verdienen aparte aandacht.

- **Eén groep** van $a$ is gewoon $a$. Dus $1 \times a = a$ en (door de wisseleigenschap) $a \times 1 = a$. Vermenigvuldigen met 1 verandert niets.
- **Nul groepen** van $a$ is niets. Dus $0 \times a = 0$, en ook $a \times 0 = 0$. Stel je een rechthoek voor met breedte 0: daar past geen enkel tegeltje in.

:::warning Optellen en vermenigvuldigen niet door elkaar halen
$8 + 0 = 8$, maar $8 \times 0 = 0$. En $8 + 1 = 9$, maar $8 \times 1 = 8$. Bij optellen is 0 het getal dat niets verandert; bij vermenigvuldigen is dat 1.
:::

## 5. De tafels

Een **tafel** is het rijtje veelvouden van een getal. De tafel van 7 is

$$
7,\ 14,\ 21,\ 28,\ 35,\ 42,\ 49,\ 56,\ 63,\ 70
$$

Je kunt de tafels van 1 tot en met 10 samenvatten in één tabel van 10 bij 10. Dat zijn 100 producten. Moet je die allemaal uit je hoofd leren? Nee. Kijk maar.

![Tafel van vermenigvuldiging](/images/diagrams/m04-tafelsymmetrie.svg "De tafels van 1 tot en met 10. Door de wisseleigenschap is het grijze deel een spiegelbeeld van het witte deel.")

- De tabel is **symmetrisch** rond de diagonaal: $7 \times 4$ staat op dezelfde plek als $4 \times 7$, gespiegeld. Daardoor hoef je maar ongeveer de helft te kennen.
- De rijen van 1 en 10 zijn gratis: $1 \times a = a$, en $10 \times a$ is "$a$ met een nul erachter" (waarom dat zo is, zie je in de volgende les).
- De tafels van 2 en 5 ken je vrijwel zeker al.

Wat overblijft is een klein aantal "lastige" producten, zoals $6 \times 7$, $7 \times 8$, $6 \times 8$ en $7 \times 9$. Juist daarvoor zijn er strategieën. Een volwassen rekenaar gebruikt die strategieën niet alleen als hulpmiddel bij het leren, maar ook om snel te *controleren*.

## 6. Slimme strategieën voor de tafels

Alle strategieën hieronder steunen op één idee: **je leidt een onbekend product af uit een bekend product.**

:::theory Strategieën
**Verdubbelen (tafel van 2, 4 en 8).** $2 \times a$ is het dubbele van $a$. Dan is $4 \times a$ het dubbele van het dubbele, en $8 \times a$ nog een keer verdubbeld.

$$
8 \times 7:\quad 7 \to 14 \to 28 \to 56
$$

**Halveren (tafel van 5).** $5 \times a$ is de helft van $10 \times a$.

$$
5 \times 14 = \tfrac{1}{2} \times 140 = 70
$$

**Tien keer min één keer (tafel van 9).** $9 \times a = 10 \times a - a$.

$$
9 \times 7 = 70 - 7 = 63
$$

**Eén groep erbij (tafel van 6, 3).** $6 \times a = 5 \times a + a$ en $3 \times a = 2 \times a + a$.

$$
6 \times 8 = 40 + 8 = 48
$$

**Buurproduct gebruiken.** Ken je $7 \times 7 = 49$, dan is $7 \times 8 = 49 + 7 = 56$.
:::

Deze strategieën zijn geen trucjes los van de theorie. Ze zijn allemaal gevolgen van de **distributieve eigenschap**, die je in de volgende les officieel leert. "Zes groepen is vijf groepen plus één groep" is precies wat die eigenschap zegt.

:::example Uitgewerkt voorbeeld: 7 × 8 op drie manieren
Stel dat je $7 \times 8$ vergeten bent. Er zijn verschillende routes.

1. **Via verdubbelen.** $8 \times 7$: verdubbel 7 drie keer: $7 \to 14 \to 28 \to 56$.
2. **Via de tafel van 5.** $5 \times 8 = 40$ en $2 \times 8 = 16$; samen $7 \times 8 = 40 + 16 = 56$.
3. **Via de tafel van 10.** $10 \times 8 = 80$, en dat is drie achten te veel: $80 - 24 = 56$.

Drie routes, dezelfde uitkomst. Als twee routes iets anders geven, weet je dat je je ergens vergist hebt. Dat is een goede gewoonte: **controleer een product dat je niet zeker weet via een tweede route.**
:::

{{ exercises: 04-001, 04-002, 04-003, 04-004 }}

## 7. Meer dan twee factoren: de schakeleigenschap

Wat betekent $4 \times 7 \times 25$? Je vermenigvuldigt twee getallen, en het resultaat met het derde. Maar welke twee eerst?

$$
(4 \times 7) \times 25 = 28 \times 25 = 700
\qquad
4 \times (7 \times 25) = 4 \times 175 = 700
$$

Het maakt niet uit. Met de wisseleigenschap erbij mag je de factoren zelfs in elke gewenste volgorde zetten.

:::theory De schakeleigenschap
Voor alle getallen $a$, $b$ en $c$ geldt

$$
(a \times b) \times c = a \times (b \times c)
$$

Dit heet de **schakeleigenschap** of **associativiteit**. Samen met de wisseleigenschap betekent het: bij een product van meerdere factoren mag je de factoren in elke volgorde en in elke groepering vermenigvuldigen.
:::

Waarom is dat nuttig? Omdat sommige paren samen een rond getal geven. Leer de volgende "vriendjes" herkennen:

| Paar | Product |
|---|---|
| $2 \times 5$ | $10$ |
| $4 \times 25$ | $100$ |
| $2 \times 50$ | $100$ |
| $8 \times 125$ | $1000$ |

Zo is $4 \times 7 \times 25 = 7 \times (4 \times 25) = 7 \times 100 = 700$, zonder enig rekenwerk.

Het rooster-beeld werkt ook hier: drie factoren zijn een **blok** van bijvoorbeeld 4 bij 7 bij 25 kubusjes. Of je het blok nu laag voor laag of plak voor plak telt, het aantal kubusjes blijft hetzelfde.

## 8. Patronen in de tafel

Een tafel van vermenigvuldiging zit vol patronen. Twee voorbeelden die je later in de algebra terugziet:

- **Kwadraten.** Op de diagonaal staan $1, 4, 9, 16, 25, \dots$: de producten $a \times a$. Het verschil tussen opeenvolgende kwadraten is steeds een oneven getal: $4 - 1 = 3$, $9 - 4 = 5$, $16 - 9 = 7$.
- **Net naast het kwadraat.** Vergelijk $5 \times 5 = 25$ met $4 \times 6 = 24$, en $7 \times 7 = 49$ met $6 \times 8 = 48$. Het product van de twee buren van een getal is steeds **één minder** dan het kwadraat. Dat geldt ook voor grotere getallen: $20 \times 20 = 400$ en $19 \times 21 = 399$.

Waarom dat laatste klopt, kun je met een rechthoek inzien: haal van een vierkant van $a$ bij $a$ één rij weg en zet die als kolom ernaast; er blijft precies één tegeltje over. In module 15 (algebra) schrijf je dit als formule.

Een laatste opmerking over **omgekeerde vragen**. Als je weet dat $6 \times 7 = 42$, dan weet je ook het antwoord op de vraag "welk getal maal 7 geeft 42?". Die omgekeerde vraag is de basis van het **delen** in module 5.

{{ exercises: 04-005, 04-006, 04-007, 04-008 }}
