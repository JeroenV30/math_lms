# Kengetallen, vennootschapsbelasting en btw

## Kengetallen: cijfers vergelijkbaar maken

Een balans en een W&V bevatten absolute bedragen, en die zeggen weinig zonder maat. Is € 64.800 winst veel? Dat hangt af van de omzet, van het vermogen dat nodig was en van wat andere bedrijven in de sector verdienen. **Kengetallen** zetten twee bedragen tegenover elkaar, zodat bedrijven van verschillende grootte en verschillende jaren vergelijkbaar worden. Er zijn drie vragen die banken en aandeelhouders altijd stellen, en per vraag een kengetal.

De eerste vraag is hoe zelfstandig het bedrijf is gefinancierd. Dat is de **solvabiliteit**: het eigen vermogen als deel van het totale vermogen. Hoe hoger, hoe meer schokken het bedrijf kan opvangen voordat schuldeisers in gevaar komen. De tweede vraag is of het bedrijf op korte termijn zijn rekeningen kan betalen. Dat is de **liquiditeit**. De **current ratio** deelt de vlottende activa door de kortlopende schulden; de strengere **quick ratio** laat de voorraden buiten beschouwing, omdat die niet altijd snel te verkopen zijn. De derde vraag is hoe winstgevend het bedrijf is, de **rentabiliteit**: de winst als deel van het vermogen dat is ingezet. De **rentabiliteit eigen vermogen** deelt het nettoresultaat door het eigen vermogen; de **rentabiliteit totaal vermogen** deelt het bedrijfsresultaat door het totale vermogen. Daarnaast bekijkt men vaak de **nettowinstmarge**: het nettoresultaat als deel van de omzet.

:::formula Kengetallen
$$
\text{solvabiliteit} = \frac{\text{eigen vermogen}}{\text{totaal vermogen}}, \qquad
\text{current ratio} = \frac{\text{vlottende activa}}{\text{kortlopende schulden}}
$$

$$
\text{quick ratio} = \frac{\text{liquide middelen} + \text{debiteuren}}{\text{kortlopende schulden}}, \qquad
\text{rentabiliteit EV} = \frac{\text{nettoresultaat}}{\text{eigen vermogen}}
$$
:::

:::example De kengetallen van Fietsatelier Reijnders
Uit de balans en W&V van de vorige les: eigen vermogen € 210.000, totaal vermogen € 350.000, vlottende activa € 200.000 (60.000 voorraad, 45.000 debiteuren, 95.000 liquide middelen), kortlopende schulden € 80.000, nettoresultaat € 64.800, bedrijfsresultaat € 84.000, omzet € 900.000.

1. Solvabiliteit: $210.000 / 350.000 = 0{,}60$, dus 60%.
2. Current ratio: $200.000 / 80.000 = 2{,}5$.
3. Quick ratio: $(95.000 + 45.000) / 80.000 = 1{,}75$.
4. Rentabiliteit eigen vermogen: $64.800 / 210.000 \approx 0{,}309$, dus ongeveer 30,9%.
5. Rentabiliteit totaal vermogen: $84.000 / 350.000 = 0{,}24$, dus 24%.
6. Nettowinstmarge: $64.800 / 900.000 = 0{,}072$, dus 7,2%.

Hiermee is de denkvraag uit de introductie te beantwoorden: de liquide middelen (€ 95.000) dekken de kortlopende schulden (€ 80.000) al, en de quick ratio van 1,75 laat ruime marge zien. De solvabiliteit van 60% is stevig. Wat een goed of slecht getal is, hangt wel af van de sector: een winkelketen met veel voorraad kan prima functioneren met een lagere quick ratio dan een adviesbureau.
:::

{{ exercises: 04-007, 04-008 }}

## Vennootschapsbelasting

Een bv is een eigen rechtspersoon en betaalt over haar winst **vennootschapsbelasting** (vpb). Dat staat los van de belasting die de aandeelhouder over zijn eigen inkomen betaalt: eerst belast de fiscus de winst bij de bv, en wanneer die als dividend wordt uitgekeerd, belast hij nog eens de aandeelhouder in box 2 (zie module 2).

De grondslag is de **belastbare winst**. Die volgt de commerciële winst, maar met correcties volgens de belastingwet: sommige uitgaven zijn niet of maar beperkt aftrekbaar, zoals boetes, en verliezen uit andere jaren kunnen onder voorwaarden worden verrekend. In 2026 is het tarief 19% over het eerste deel van de winst, tot € 200.000, en 25,8% over het meerdere (stand 2026, bron: Belastingdienst). Voor winst die voortkomt uit gekwalificeerde innovatie met een S&O-verklaring geldt in de innovatiebox een effectief tarief van 9%. Het eerste en tweede tarief zijn schijven, net als in de inkomstenbelasting: het lage tarief geldt dus alleen over het eerste deel.

:::example Vpb bij een winst boven de schijfgrens
Een bv heeft een belastbare winst van € 300.000. Stand 2026: 19% tot € 200.000 en 25,8% daarboven.

1. Eerste schijf: $0{,}19 \times 200.000 = 38.000$.
2. Tweede schijf: $0{,}258 \times (300.000 - 200.000) = 25.800$.
3. Samen: $38.000 + 25.800 = 63.800$, een gemiddeld tarief van ongeveer 21,3%.

Fietsatelier Reijnders heeft een winst van € 80.000 en zit dus volledig in de eerste schijf: $0{,}19 \times 80.000 = 15.200$.
:::

{{ exercises: 04-009, 04-010 }}

## De btw

**Btw** (omzetbelasting) is een belasting op de consumptie, die ondernemers voor de overheid innen. Het principe is vernuftig en eenvoudig tegelijk. Elke ondernemer berekent btw over zijn verkopen: de **omzetbelasting**. Over zijn inkopen heeft hij btw betaald aan zijn leveranciers: de **voorbelasting**. Aan de Belastingdienst draagt hij het verschil af. Een ondernemer is zo een doorgeefluik: hij houdt zelf geen btw over, de consument die geen aftrek heeft, draagt haar uiteindelijk.

![Btw in een keten](/images/bedrijven/m04-btw-keten.svg "Btw in een keten (eigen schema, fictief voorbeeld)")

De tarieven zijn in 2026: 21% (het standaardtarief), 9% (het verlaagde tarief, bijvoorbeeld voor voedingsmiddelen en boeken) en 0% voor onder andere export en leveringen binnen de EU. Sommige prestaties zijn **vrijgesteld**, zoals de meeste zorg en onderwijs; wie alleen vrijgestelde prestaties levert, mag geen voorbelasting aftrekken. Een ondernemer wiens omzet per kalenderjaar niet meer dan € 20.000 bedraagt, kan kiezen voor de **kleineondernemersregeling** (KOR): hij brengt dan geen btw in rekening en kan er ook geen aftrekken (stand 2026, bron: KvK).

De **btw-aangifte** gebeurt standaard per kwartaal; maand- en jaaraangifte zijn ook mogelijk. Aangifte en betaling moeten uiterlijk aan het einde van de maand na afloop van het tijdvak zijn gedaan. Ook als er in een tijdvak geen omzet was, moet aangifte worden gedaan. Is de voorbelasting groter dan de verschuldigde btw, dan ontvangt de ondernemer het verschil terug.

:::example Een btw-aangifte van Fietsatelier Reijnders
In het derde kwartaal verkoopt het atelier voor € 80.000 exclusief btw (alles 21%) en koopt het voor € 30.000 exclusief btw in, ook 21%.

1. Verschuldigde btw: $0{,}21 \times 80.000 = 16.800$.
2. Voorbelasting: $0{,}21 \times 30.000 = 6.300$.
3. Af te dragen: $16.800 - 6.300 = 10.500$.

Dat bedrag staat op de balans onder kortlopende schulden zolang het niet is betaald. Een klant die € 151,25 voor een fietsrek betaalt, betaalt € 125 plus € 26,25 btw: de prijs inclusief btw delen door 1,21 geeft de prijs exclusief btw.
:::

{{ exercises: 04-011 }}
