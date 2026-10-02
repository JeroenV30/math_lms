# Nullen, splitsen en hoofdrekenen

De tafels gaan tot 10 bij 10. Maar de schrijver uit de introductie moest $13 \times 12$ uitrekenen, en een koopman wil weten wat 36 kruiken van € 15 kosten. Hoe ga je verder dan de tafels? Het antwoord bestaat uit twee bouwstenen: **plaatswaarde** (vermenigvuldigen met 10, 100, 1000) en **splitsen** (de distributieve eigenschap). Met die twee kun je elk product uitrekenen, uit het hoofd of op papier.

## 1. Vermenigvuldigen met 10, 100 en 1000

Neem het getal 46: 4 tientallen en 6 eenheden. Wat gebeurt er als je dat tien keer neemt?

- 6 eenheden worden $6 \times 10 = 60$, dus 6 **tientallen**.
- 4 tientallen worden $4 \times 10 = 40$ tientallen, dus 4 **honderdtallen**.

Elk cijfer schuift één plaats op naar links: van eenheden naar tientallen, van tientallen naar honderdtallen. Op de plaats van de eenheden blijft niets over. Die lege plaats vul je met een **nul**.

$$
46 \times 10 = 460
$$

{{ widget: place-value value=460 }}

:::theory Vermenigvuldigen met 10, 100, 1000
- $\times 10$: elk cijfer schuift één plaats naar links; je krijgt één nul achteraan.
- $\times 100$: elk cijfer schuift twee plaatsen; twee nullen erachter.
- $\times 1000$: drie plaatsen; drie nullen.

$$
46 \times 10 = 460, \quad 46 \times 100 = 4600, \quad 46 \times 1000 = 46\,000
$$
:::

:::warning "Een nul erachter zetten" is een gevolg, geen verklaring
De regel "zet er een nul achter" werkt bij gehele getallen, maar hij is alleen een samenvatting van wat er werkelijk gebeurt: **de cijfers schuiven op**. In module 8 ga je met kommagetallen rekenen. Dan geldt $4{,}6 \times 10 = 46$ en niet $4{,}60$. Wie het opschuiven begrijpt, maakt die fout niet.
:::

In de Egyptische hiërogliefen was vermenigvuldigen met 10 overigens heel eenvoudig. De Egyptenaren hadden aparte tekens voor 1, 10, 100, 1000 enzovoort. Tien keer een getal nemen betekent dan: vervang elk teken door het teken van de volgende rang. Een getal van "vier tien-tekens en zes streepjes" wordt "vier honderd-tekens en zes tien-tekens". Het principe is hetzelfde als bij ons, alleen zie je het opschuiven daar letterlijk.

### Ronde getallen vermenigvuldigen

Met de schakeleigenschap kun je ook producten als $30 \times 70$ snel uitrekenen. Schrijf $30 = 3 \times 10$ en $70 = 7 \times 10$:

$$
30 \times 70 = 3 \times 10 \times 7 \times 10 = (3 \times 7) \times (10 \times 10) = 21 \times 100 = 2100
$$

De regel: **vermenigvuldig de getallen zonder nullen, en zet daarachter het totale aantal nullen.** Bij $30 \times 70$ is dat $3 \times 7 = 21$ met twee nullen.

:::warning Let op nullen die "uit de tafel" komen
$400 \times 500$: $4 \times 5 = 20$, met vier nullen erachter. Dat wordt $200\,000$. De nul van 20 telt niet mee bij de vier nullen; het zijn er in totaal dus vijf. Een veelgemaakte fout is $20\,000$.
:::

## 2. De distributieve eigenschap

Nu de belangrijkste eigenschap van deze module. Bekijk $6 \times 48$ als een rechthoek van 6 rijen en 48 kolommen. Knip die rechthoek in twee stukken: één van 6 bij 40 en één van 6 bij 8. Samen hebben de stukken dezelfde oppervlakte als het geheel:

$$
6 \times 48 = 6 \times 40 + 6 \times 8 = 240 + 48 = 288
$$

:::theory De distributieve eigenschap
Voor alle getallen $a$, $b$ en $c$ geldt

$$
a \times (b + c) = a \times b + a \times c
$$

en ook $a \times (b - c) = a \times b - a \times c$.

In woorden: als je een som vermenigvuldigt, mag je **elk deel apart** vermenigvuldigen en de uitkomsten optellen. Het woord *distribueren* betekent "verdelen": de factor $a$ wordt over de delen verdeeld. In het Nederlands heet dit daarom ook de **verdeeleigenschap**.
:::

De rechthoek maakt duidelijk waarom dit klopt: een rechthoek die je in twee stukken knipt, heeft samen nog steeds dezelfde oppervlakte. Dat inzicht is oud. De Griekse wiskundige Euclides bewees het rond 300 v.Chr. in boek II van zijn *Elementen*, volledig in termen van rechthoeken en lijnstukken, zonder één getal te gebruiken.

:::warning Elk deel krijgt de factor
Een klassieke fout is $6 \times 48 = 6 \times 40 + 8 = 248$. Je vergeet dan om ook de 8 met 6 te vermenigvuldigen. In de rechthoek: je hebt het smalle strookje van 6 bij 8 geteld als één rij van 8.
:::

## 3. Twee factoren splitsen: het rechthoekmodel

Bij $37 \times 14$ zijn beide factoren groter dan 10. Je kunt dan beide splitsen in tientallen en eenheden: $37 = 30 + 7$ en $14 = 10 + 4$. De rechthoek valt uiteen in **vier** deelrechthoeken.

![Rechthoekmodel 37 × 14](/images/diagrams/m04-rechthoekmodel-37x14.svg "Het rechthoekmodel van 37 × 14: vier deelrechthoeken, samen 518.")

$$
37 \times 14 = 30 \times 10 + 7 \times 10 + 30 \times 4 + 7 \times 4 = 300 + 70 + 120 + 28 = 518
$$

Probeer het zelf met het interactieve rechthoekmodel. Verander de factoren en kijk hoe de vier vakken veranderen. Let op welk vak het grootst is: dat is bijna altijd tientallen maal tientallen. Dat vak bepaalt de grootte van de uitkomst.

{{ widget: area-model a=37 b=14 }}

Je hoeft niet altijd beide factoren te splitsen. Vaak is het handiger om één factor heel te laten en alleen de andere te splitsen:

$$
37 \times 14 = 37 \times (10 + 4) = 37 \times 10 + 37 \times 4 = 370 + 148 = 518
$$

Dat zijn twee deelproducten in plaats van vier. Welke route je kiest, hangt af van wat je makkelijk vindt; de uitkomst is altijd gelijk.

:::example Uitgewerkt voorbeeld: 37 × 14 uit het hoofd
1. Splits de kleinste factor: $14 = 10 + 4$.
2. Eerst het makkelijke deel: $37 \times 10 = 370$ (cijfers één plaats opschuiven).
3. Dan het tweede deel: $37 \times 4$. Verdubbel twee keer: $37 \to 74 \to 148$.
4. Tel op: $370 + 148 = 518$.

**Controle door schatten:** $37 \times 14$ ligt in de buurt van $40 \times 14 = 560$, maar iets lager. 518 is dus aannemelijk.
:::

{{ exercises: 04-009, 04-010, 04-011, 04-012 }}

## 4. Hoofdrekenen: splitsen en compenseren

Bij hoofdrekenen wil je het aantal tussenresultaten dat je moet onthouden zo klein mogelijk houden. Twee strategieën zijn het belangrijkst.

**Splitsen** heb je net gezien: je splitst een factor in een rond deel en een rest.

**Compenseren** is splitsen met een minteken. Je rondt een factor naar *boven* af naar een makkelijk getal en trekt het teveel er weer af. Dat werkt goed bij getallen die net onder een rond getal liggen, zoals 49, 98 of 199.

$$
49 \times 6 = 50 \times 6 - 1 \times 6 = 300 - 6 = 294
$$

$$
99 \times 35 = 100 \times 35 - 35 = 3500 - 35 = 3465
$$

Dit is de distributieve eigenschap in de vorm $a \times (b - c) = a \times b - a \times c$.

:::example Uitgewerkt voorbeeld: 49 × 6 op twee manieren
**Splitsen:** $49 \times 6 = 40 \times 6 + 9 \times 6 = 240 + 54 = 294$.

**Compenseren:** $49 \times 6 = 50 \times 6 - 6 = 300 - 6 = 294$.

Beide routes zijn correct. Compenseren vraagt hier minder werk, omdat $50 \times 6$ heel makkelijk is.

**Valkuil:** bij compenseren trek je er *één groep* af, niet het verschil met het ronde getal. Bij $49 \times 6$ heb je 50 groepen van 6 genomen in plaats van 49; je trekt dus 6 af, niet 1.
:::

**Herschikken** is de derde strategie: gebruik de schakeleigenschap om "vriendjes" te maken.

$$
25 \times 16 = 25 \times 4 \times 4 = 100 \times 4 = 400
$$

:::tip Welke strategie kies je?
- Ligt een factor net **onder** een rond getal (49, 98, 199)? Compenseer.
- Kun je een factor opsplitsen in **vriendjes** (25 en 4, 125 en 8)? Herschik.
- Anders: **splits** de kleinste factor in tientallen en eenheden.
:::

## 5. Schatten

Bij elke berekening, met de hand of met een rekenmachine, hoort een snelle **schatting**. Daarmee vang je grote fouten op, zoals een vergeten nul of een tikfout.

Een product schat je door beide factoren **af te ronden** op een getal met één cijfer dat niet nul is (of op tientallen), en dat te vermenigvuldigen:

$$
48 \times 31 \approx 50 \times 30 = 1500
$$

Het teken $\approx$ betekent "is ongeveer gelijk aan". De echte uitkomst is $48 \times 31 = 1488$; de schatting zit er dus dicht bij.

:::tip Rond in tegengestelde richting af
Bij $48 \times 31$ rond je de ene factor naar boven af (48 wordt 50) en de andere naar beneden (31 wordt 30). De fouten heffen elkaar dan deels op. Rond je beide naar boven af, dan is je schatting systematisch te hoog.
:::

Een schatting hoeft niet precies te zijn. Ze moet je vertellen of je uitkomst **ongeveer 1500** is, en niet 150 of 15.000. Juist die factor 10 is bij vermenigvuldigen de meest gemaakte fout.

{{ exercises: 04-013, 04-014, 04-015, 04-016, 04-017 }}
