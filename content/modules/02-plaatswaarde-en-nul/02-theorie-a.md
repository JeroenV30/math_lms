# Eenheden, tientallen, honderdtallen, duizendtallen

## Van tellen naar bundelen

Stel je voor dat je een grote kudde schapen moet tellen, zonder cijfers. Je kunt voor elk schaap een kerf zetten, maar bij driehonderd kerven raak je de tel kwijt. De oplossing die bijna elke cultuur vond, is **bundelen**: je maakt groepjes van een vaste grootte. Elke keer als je er tien hebt, leg je een steentje opzij voor "één tiental". Heb je tien van die steentjes, dan vervang je ze door één groter steentje voor "één honderdtal". Enzovoort.

Waarom juist tien? Vrijwel zeker omdat we tien vingers hebben. Het Latijnse woord *digitus* betekent "vinger", en in het Engels heet een cijfer nog steeds een *digit*. Maar tien is geen wiskundige noodzaak. De Babylonische schrijvers bundelden per zestig, de Maya's (in Midden-Amerika) per twintig, en computers werken met bundels van twee. Het principe is steeds hetzelfde; alleen de bundelgrootte, het **grondtal**, verschilt.

:::definition Grondtal
Het **grondtal** (of de **basis**) van een getalsysteem is het aantal eenheden van een positie dat samen precies één eenheid van de volgende positie vormt. Ons stelsel heeft grondtal 10: tien eenheden zijn één tiental, tien tientallen zijn één honderdtal, tien honderdtallen zijn één duizendtal.
:::

## Posities en plaatswaarde

In ons stelsel schrijf je de bundels niet als steentjes, maar als cijfers op vaste **posities**. Je leest de posities van rechts naar links:

| Positie (van rechts) | Naam | Plaatswaarde |
|---|---|---|
| 1e | eenheden (E) | 1 |
| 2e | tientallen (T) | 10 |
| 3e | honderdtallen (H) | 100 |
| 4e | duizendtallen (D) | 1000 |
| 5e | tienduizendtallen | 10.000 |
| 6e | honderdduizendtallen | 100.000 |
| 7e | miljoenen | 1.000.000 |

Elke stap naar links maakt de plaatswaarde **tien keer** zo groot. Dat is de hele regel. Alles wat volgt is daar een gevolg van.

:::theory Cijfer, positie en waarde
Een cijfer op zichzelf zegt niet hoeveel het waard is. Pas de positie maakt dat duidelijk:

$$
\text{waarde van een cijfer} = \text{cijfer} \times \text{plaatswaarde van zijn positie}
$$

In 4.732 staat de 7 op de honderdtallenpositie. De waarde van die 7 is dus $7 \times 100 = 700$. Hetzelfde cijfer 7 in 4.372 is maar $7 \times 10 = 70$ waard, en in 7.432 is het $7 \times 1000 = 7000$.
:::

![Plaatswaardetabel voor 4.732](/images/diagrams/m02-plaatswaardetabel.svg "Elk cijfer krijgt zijn waarde van de positie waarop het staat. Eigen diagram.")

Probeer het zelf met de widget hieronder. Verander het getal en kijk hoe het in duizendtallen, honderdtallen, tientallen en eenheden uiteenvalt.

{{ widget: place-value value=4732 }}

## Uitsplitsen en samenstellen

Omdat elk cijfer een waarde heeft, is elk getal de **som** van die waarden. Dat noemen we de **uitgeschreven vorm** of **uitsplitsing**:

$$
4732 = 4000 + 700 + 30 + 2 = 4 \cdot 1000 + 7 \cdot 100 + 3 \cdot 10 + 2 \cdot 1
$$

Je kunt ook de omgekeerde kant op werken: uit een beschrijving als "3 duizendtallen, 5 tientallen en 2 eenheden" het getal **samenstellen**. Daarbij is één ding cruciaal: als een positie leeg is, moet je dat met een 0 laten zien. Anders schuiven de andere cijfers op en verandert hun waarde.

:::example Een getal samenstellen met een lege positie
**Opgave.** Schrijf als getal: 3 duizendtallen + 5 tientallen + 2 eenheden.

**Stap 1 – Zet de posities klaar.** Je hebt vier posities nodig: D, H, T, E.

**Stap 2 – Vul in wat er staat.** D = 3, T = 5, E = 2.

**Stap 3 – Kijk welke positie leeg blijft.** Er worden geen honderdtallen genoemd, dus H = 0.

| D | H | T | E |
|---|---|---|---|
| 3 | 0 | 5 | 2 |

**Stap 4 – Lees af en controleer.** Het getal is 3.052. Controle: $3000 + 0 + 50 + 2 = 3052$.

**Valkuil.** Wie de lege positie vergeet, schrijft 352. Dat is maar drie honderdtallen, vijf tientallen en twee eenheden: bijna tien keer zo weinig.
:::

{{ exercises: 02-001, 02-002, 02-003 }}

## Het tientallencijfer en het aantal tientallen

Hier zit een subtiel verschil dat veel mensen in verwarring brengt. Kijk naar het getal 4.500.

- Het **tientallencijfer** is het cijfer op de tientallenpositie. Dat is 0.
- Het **aantal tientallen** is: hoeveel tientallen zitten er in totaal in 4.500? Dat is heel wat meer dan nul!

De vraag "hoeveel tientallen zitten erin" betekent: als je het hele getal in bundels van tien verdeelt, hoeveel bundels krijg je? Een duizendtal bestaat uit 100 tientallen, een honderdtal uit 10 tientallen.

:::example Hoeveel tientallen zitten er in 4.500?
**Stap 1 – Splits uit.** $4500 = 4000 + 500$.

**Stap 2 – Tel per deel de tientallen.**
- 4 duizendtallen: elk duizendtal is 100 tientallen, dus $4 \times 100 = 400$ tientallen.
- 5 honderdtallen: elk honderdtal is 10 tientallen, dus $5 \times 10 = 50$ tientallen.
- 0 tientallen en 0 eenheden voegen niets toe.

**Stap 3 – Tel op.** $400 + 50 = 450$ tientallen.

**Snelle route.** Het aantal *hele* tientallen vind je door het laatste cijfer (de eenheden) weg te laten: 4.50**0** → **450**. Bij 4.537 zou je 453 hele tientallen vinden (en 7 eenheden over).

**Controle.** $450 \times 10 = 4500$. Klopt.
:::

:::warning Lees de vraag precies
"Wat is het tientallencijfer van 4.500?" → 0.
"Hoeveel tientallen zitten er in 4.500?" → 450.
Het zijn twee verschillende vragen. In de praktijk (voorraad, geld, verpakkingen) wordt bijna altijd de tweede bedoeld: hoeveel briefjes van € 10 heb je nodig voor € 4.500?
:::

{{ exercises: 02-004, 02-005 }}

## Inwisselen

Soms krijg je een uitsplitsing waarin een positie "overloopt": meer dan negen eenheden van één soort. Bijvoorbeeld: 13 honderdtallen. Op één positie past maar één cijfer, dus je moet **inwisselen**: tien honderdtallen worden één duizendtal.

$$
13 \text{ honderdtallen} = 10 \text{ honderdtallen} + 3 \text{ honderdtallen} = 1 \text{ duizendtal} + 3 \text{ honderdtallen}
$$

Dit is precies wat er gebeurt als je bij het optellen "één onthoudt". Het onthouden is niets anders dan inwisselen naar de volgende positie.

:::example Samenstellen met inwisselen
**Opgave.** Welk getal is 2 duizendtallen + 13 honderdtallen + 4 tientallen + 15 eenheden?

**Route 1 – Reken alles om naar waarden en tel op.**

$$
2000 + 1300 + 40 + 15 = 3355
$$

**Route 2 – Wissel per positie in, van rechts naar links.**
- 15 eenheden = 1 tiental + 5 eenheden. E = 5, en er komt 1 tiental bij: $4 + 1 = 5$ tientallen.
- 5 tientallen: geen inwisseling nodig. T = 5.
- 13 honderdtallen = 1 duizendtal + 3 honderdtallen. H = 3, en er komt 1 duizendtal bij: $2 + 1 = 3$.
- D = 3.

Het getal is 3.355. Beide routes geven hetzelfde, en zo hoort het ook: je verandert alleen de manier van bundelen, niet de hoeveelheid.

**Valkuil.** Wie de aantallen gewoon achter elkaar zet (2 – 13 – 4 – 15), krijgt 213.415. Dat is onzin: op elke positie mag maar één cijfer van 0 tot en met 9 staan.
:::

{{ exercise: 02-006 }}

## Grote getallen lezen en schrijven

Na de duizendtallen gaat het patroon gewoon door: tienduizendtallen, honderdduizendtallen, miljoenen. Om grote getallen leesbaar te houden, zetten we in het Nederlands na elke drie cijfers (van rechts geteld) een punt: 1.000.000 is een miljoen, 25.400 is vijfentwintigduizend vierhonderd. Die punt verandert niets aan de waarde; hij helpt alleen het oog. (In het Engels gebruikt men daar een komma, en wordt de komma bij ons gebruikt voor decimale getallen. Lees internationale bronnen dus met aandacht.)

## Vermenigvuldigen met 10, 100 en 1000

Omdat elke positie tien keer zo zwaar weegt als de positie rechts ervan, heeft vermenigvuldigen met 10 een eenvoudig effect: **elk cijfer schuift één positie naar links**. De lege eenhedenpositie vul je met een 0.

$$
473 \times 10 = 4730
$$

De 4 was 400 waard en is nu 4000 waard; de 7 was 70 en is nu 700; de 3 was 3 en is nu 30. Met 100 vermenigvuldigen schuift alles twee posities op, met 1000 drie posities. Het "nul erachter zetten" is dus geen trucje, maar een direct gevolg van plaatswaarde. Je komt dit in de volgende les opnieuw tegen.

## Getallen vergelijken

Welk getal is groter: 4.732 of 4.723? Je vergelijkt van links naar rechts, positie voor positie. De duizendtallen zijn gelijk (4), de honderdtallen ook (7). Bij de tientallen staat 3 tegenover 2. Daar valt de beslissing: 4.732 is groter. Wat er daarna nog komt, doet er niet meer toe, want een tiental is meer waard dan alle eenheden samen (hoogstens 9).

Dat laatste is een belangrijk inzicht: **één eenheid van een positie is altijd meer waard dan alles wat rechts ervan kan staan.** Eén duizendtal (1000) is meer dan het grootst mogelijke getal met drie cijfers (999).

## Zelfstandig oefenen

{{ exercises: 02-007, 02-008, 02-009 }}
