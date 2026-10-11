# Het gemiddelde als eerlijke verdeling

Een tabel of diagram laat alle waarden zien. Vaak wil je de hele verzameling in één getal samenvatten: "hoe lang wacht een klant **ongeveer**?", "hoeveel bezoekers komen er **doorgaans**?". Zo'n getal heet een **centrummaat**. De bekendste is het gemiddelde. In deze les leer je wat het gemiddelde precies betekent, hoe je het uit een frequentietabel haalt, en waarom je groepsgemiddelden niet zomaar mag middelen.

## 1. Eerlijk verdelen

Vijf medewerkers van een magazijn hebben op een dag 4, 7, 9, 5 en 10 dozen ingepakt. Stel dat ze het werk eerlijk hadden willen verdelen, zodat iedereen evenveel had gedaan. Hoeveel dozen zou ieder dan hebben ingepakt?

Het totale werk verandert niet door het anders te verdelen: samen zijn het $4 + 7 + 9 + 5 + 10 = 35$ dozen. Verdeeld over vijf mensen is dat $35 : 5 = 7$ dozen per persoon. Dat getal, 7, is het **gemiddelde**.

![Het gemiddelde als eerlijk verdelen](/images/diagrams/m12-gemiddelde-verdelen.svg "Links de stapels 4, 7, 9, 5 en 10. Haal de blokjes boven de 7 weg en vul daarmee de gaten onder de 7: je krijgt vijf stapels van 7.")

:::definition Gemiddelde
Het **gemiddelde** (ook: rekenkundig gemiddelde) van $n$ getallen is hun som gedeeld door hun aantal:
$$
\bar{x} = \frac{x_1 + x_2 + \dots + x_n}{n}.
$$
Het teken $\bar{x}$ spreek je uit als "x-streep".
:::

Het plaatje laat zien waarom dit klopt. De stapels 9 en 10 steken samen $2 + 3 = 5$ blokjes boven de 7 uit. De stapels 4 en 5 komen samen $3 + 2 = 5$ blokjes tekort. Wat de hoge stapels te veel hebben, is precies wat de lage tekortkomen. Dat is geen toeval, maar de kern van het gemiddelde:

:::theory Het gemiddelde als evenwichtspunt
De afwijkingen van het gemiddelde heffen elkaar op: de som van alle afwijkingen $x_i - \bar{x}$ is altijd nul. Voor de dozen: $(4-7) + (7-7) + (9-7) + (5-7) + (10-7) = -3 + 0 + 2 - 2 + 3 = 0$.

Denk aan een wip met de waarden als gewichtjes op een getallenlijn. Het gemiddelde is het punt waar je de wip moet ondersteunen om hem in evenwicht te houden.
:::

Dat evenwichtsbeeld verklaart iets wat je in de volgende les nodig hebt. Eén gewicht ver aan het uiteinde van de wip verschuift het evenwichtspunt flink. Zo verschuift één heel grote waarde ook het gemiddelde.

{{ widget: stats values="4; 7; 9; 5; 10" }}

Probeer in de widget het volgende. Voeg de waarde 7 toe: het gemiddelde blijft 7, want je voegt een waarde toe die precies in het evenwichtspunt ligt. Voeg daarna 25 toe: het gemiddelde schiet omhoog. Verwijder 25 weer en voeg in plaats daarvan 1 toe: het gemiddelde zakt, maar minder ver, omdat 1 dichter bij 7 ligt dan 25.

:::example Uitgewerkt voorbeeld: wachttijden
Vijf klanten wachten 4, 6, 6, 7 en 12 minuten.

1. Som: $4 + 6 + 6 + 7 + 12 = 35$ minuten.
2. Aantal: 5 klanten.
3. Gemiddelde: $35 : 5 = 7$ minuten.

Controle met de afwijkingen: $-3, -1, -1, 0, +5$. Samen $-5 + 5 = 0$. Het klopt.
:::

Het gemiddelde hoeft zelf niet in de gegevens voor te komen. Het hoeft zelfs geen mogelijke waarde te zijn. Een gemiddelde van 1,45 kind per huishouden betekent niet dat er huishoudens met 0,45 kind bestaan. Het betekent: als je alle kinderen eerlijk over alle huishoudens zou verdelen, kreeg elk huishouden er 1,45.

{{ exercise: 12-011 }}

## 2. Totaal = gemiddelde × aantal

Uit de definitie volgt direct een omkering die je vaak nodig hebt. Als het gemiddelde de som gedeeld door het aantal is, dan is de som het gemiddelde **maal** het aantal:

$$
\text{totaal} = \bar{x} \times n.
$$

Daarmee kun je het totaal terugvinden als je alleen het gemiddelde kent. Een hotel dat gemiddeld 42 gasten per nacht heeft in een maand van 30 nachten, heeft in die maand $42 \times 30 = 1260$ overnachtingen verkocht. En je kunt een ontbrekende waarde terugvinden.

:::example Uitgewerkt voorbeeld: een ontbrekend cijfer
Een student heeft vier tentamens gemaakt. Drie cijfers kent ze nog: 6, 8 en 5. Ze weet ook dat haar gemiddelde precies 7 is. Welk cijfer had ze voor het vierde tentamen?

1. Het totaal van alle vier cijfers is $7 \times 4 = 28$.
2. De drie bekende cijfers zijn samen $6 + 8 + 5 = 19$.
3. Het vierde cijfer is $28 - 19 = 9$.

Controle: $(6 + 8 + 5 + 9) : 4 = 28 : 4 = 7$. Klopt.

Een snellere denkwijze via afwijkingen: 6 is 1 onder het gemiddelde, 8 is 1 erboven, 5 is 2 eronder. Samen is dat 2 te weinig, dus het vierde cijfer moet 2 boven de 7 liggen: 9.
:::

:::example Uitgewerkt voorbeeld: hoeveel moet de volgende zijn?
Na vier weken heeft een hardloper gemiddeld 25 kilometer per week gelopen. Hoeveel moet hij in week vijf lopen om op een gemiddelde van 27 te komen?

- Nu: totaal $4 \times 25 = 100$ km.
- Doel: totaal $5 \times 27 = 135$ km.
- Week vijf: $135 - 100 = 35$ km.

Om het gemiddelde 2 km omhoog te krijgen, moet de nieuwe week niet 2 km, maar $5 \times 2 = 10$ km boven het oude gemiddelde liggen: de nieuwe waarde moet het tekort van alle vijf de weken goedmaken.
:::

{{ exercises: 12-015, 12-016 }}

## 3. Rekenen met een frequentietabel

Staan de gegevens in een frequentietabel, dan hoef je ze niet eerst allemaal uit te schrijven. Elke waarde telt zo vaak mee als haar frequentie zegt.

:::example Uitgewerkt voorbeeld: reistijden
Zes deelnemers hebben reistijden van 5, 5, 10, 10, 10 en 15 minuten. In een frequentietabel:

| Reistijd $x$ (min) | 5 | 10 | 15 | Totaal |
|---|---|---|---|---|
| Frequentie $f$ | 2 | 3 | 1 | 6 |
| $f \times x$ | 10 | 30 | 15 | 55 |

De derde rij is de bijdrage van elke waarde aan de som: twee keer 5 minuten is 10 minuten, enzovoort. De totale reistijd is 55 minuten, en er zijn 6 deelnemers. Het gemiddelde is
$$
\bar{x} = \frac{55}{6} \approx 9{,}17 \text{ minuten.}
$$
:::

:::definition Gemiddelde uit een frequentietabel
Als de waarden $x_1, x_2, \dots, x_k$ voorkomen met frequenties $f_1, f_2, \dots, f_k$, dan is
$$
\bar{x} = \frac{f_1 x_1 + f_2 x_2 + \dots + f_k x_k}{f_1 + f_2 + \dots + f_k}.
$$
In de teller staat de som van alle waarnemingen, in de noemer hun aantal.
:::

:::warning De twee klassieke fouten
Bij de reistijden zijn er twee verleidelijke maar foute routes.

- **De verschillende waarden middelen**: $(5 + 10 + 15) : 3 = 10$. Dan tel je elke waarde één keer, alsof er drie deelnemers zijn. Maar 10 minuten kwam drie keer voor en 15 maar één keer.
- **Door het aantal kolommen delen**: $55 : 3 \approx 18{,}3$. De noemer is het aantal **waarnemingen** (6), niet het aantal verschillende waarden (3).
:::

{{ exercises: 12-012, 12-013, 12-038 }}

### Een benadering uit klassen

Als de gegevens alleen in klassen bekend zijn, weet je de precieze waarden niet meer. Je kunt het gemiddelde dan **schatten** door voor elke klasse het midden te nemen, alsof alle waarnemingen in die klasse precies in het midden lagen.

:::example Uitgewerkt voorbeeld: leeftijden in klassen
In les 2 zag je de leeftijden van twintig cursisten, in klassen van tien jaar. Het midden van de klasse 20–29 (hele jaren) is $(20 + 29) : 2 = 24{,}5$, enzovoort.

| Klasse | 10–19 | 20–29 | 30–39 | 40–49 | 50–59 | Totaal |
|---|---|---|---|---|---|---|
| Klassenmidden | 14,5 | 24,5 | 34,5 | 44,5 | 54,5 | |
| Frequentie | 1 | 5 | 8 | 4 | 2 | 20 |
| Midden × frequentie | 14,5 | 122,5 | 276 | 178 | 109 | 700 |

Geschat gemiddelde: $700 : 20 = 35{,}0$ jaar. Uit de oorspronkelijke lijst van twintig leeftijden volgt een som van 717 en een exact gemiddelde van $717 : 20 = 35{,}85$ jaar. De schatting zit er dus bijna een jaar naast, omdat binnen de klassen de leeftijden niet precies symmetrisch rond het midden lagen.
:::

## 4. Groepen samenvoegen: het gewogen gemiddelde

Een veelgemaakte fout is het **gemiddelde van gemiddelden**. Stel: in groep A zitten 10 personen met een gemiddelde score van 6, in groep B 20 personen met een gemiddelde van 9. Wat is het gemiddelde van alle dertig samen?

Het is verleidelijk om $(6 + 9) : 2 = 7{,}5$ te zeggen. Maar dat behandelt beide groepen alsof ze even groot zijn. Groep B is twee keer zo groot en moet dus twee keer zo zwaar meetellen.

:::example Uitgewerkt voorbeeld: via de totalen
1. Totaal van groep A: $10 \times 6 = 60$.
2. Totaal van groep B: $20 \times 9 = 180$.
3. Totaal van iedereen: $60 + 180 = 240$, verdeeld over $10 + 20 = 30$ personen.
4. Gezamenlijk gemiddelde: $240 : 30 = 8$.

Het antwoord 8 ligt dichter bij 9 dan bij 6, omdat de grote groep een gemiddelde van 9 heeft. Het gemiddelde van gemiddelden (7,5) ligt precies in het midden en is dus te laag.
:::

Een gemiddelde waarin niet elke waarde even zwaar meetelt, heet een **gewogen gemiddelde**. Het gemiddelde uit een frequentietabel is er een voorbeeld van: de frequenties zijn de gewichten. Het combineren van groepen is een tweede voorbeeld: de groepsgroottes zijn de gewichten. Alleen als de groepen even groot zijn, mag je de groepsgemiddelden gewoon middelen.

:::tip Altijd via de totalen
Twijfel je bij een gemiddelde? Reken dan terug naar totalen en aantallen: tel de totalen op, tel de aantallen op, en deel pas aan het eind. Die route gaat nooit mis. Graunt rekende ook zo: hij telde begrafenissen over jaren op en deelde pas daarna, in plaats van jaargemiddelden te middelen.
:::

{{ exercise: 12-014 }}

## 5. Wat het gemiddelde niet vertelt

Het gemiddelde is een krachtige samenvatting, juist omdat elke waarde meetelt. Maar daardoor vertelt het ook niets over hoe de waarden verdeeld zijn. De reeksen 7, 7, 7, 7, 7 en 1, 2, 7, 12, 13 hebben allebei gemiddelde 7. In de eerste wacht iedereen even lang; in de tweede wachten sommigen bijna niet en anderen bijna twee keer zo lang. Een samenvatting in één getal kan dat verschil niet laten zien. Daarom heb je naast een centrummaat ook een maat voor de **spreiding** nodig, en soms een andere centrummaat dan het gemiddelde. Dat is het onderwerp van de volgende les.
