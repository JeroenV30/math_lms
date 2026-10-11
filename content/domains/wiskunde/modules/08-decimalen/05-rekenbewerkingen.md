# Rekenen met decimalen

Stevins belofte was dat je met decimalen kunt rekenen "door heele ghetalen": met dezelfde procedures als voor hele getallen. In deze les zie je dat die belofte klopt, mits je één ding nauwkeurig bijhoudt: **de plaatswaarde**. Bij optellen en aftrekken betekent dat: komma onder komma. Bij vermenigvuldigen en delen betekent het: reken met hele getallen en herstel daarna de factoren tien. Bij elke bewerking zie je ook de typische fouten, en hoe een schatting ze vangt.

## 1. Optellen en aftrekken

Je kunt alleen gelijke dingen bij elkaar optellen: tienden bij tienden, honderdsten bij honderdsten. Dat is hetzelfde principe als eenheden onder eenheden en tientallen onder tientallen bij het kolomsgewijs optellen uit module 3.

:::theory Komma onder komma
1. Schrijf de getallen onder elkaar met de **komma's precies onder elkaar**. Dan staan ook alle gelijke plaatswaarden onder elkaar.
2. Vul zo nodig **eindnullen** aan, zodat alle getallen evenveel decimalen hebben. Dat verandert de waarde niet en voorkomt vergissingen.
3. Reken zoals bij hele getallen, van rechts naar links, met onthouden of lenen.
4. Zet de komma in de uitkomst recht onder de andere komma's.
:::

:::example Uitgewerkt voorbeeld: optellen
$3{,}7 + 0{,}48$. Vul aan: $3{,}70 + 0{,}48$.

$$
\begin{array}{r}
3{,}70 \\
+\;0{,}48 \\
\hline
4{,}18
\end{array}
$$

Honderdsten: $0 + 8 = 8$. Tienden: $7 + 4 = 11$: schrijf 1, onthoud 1 eenheid. Eenheden: $3 + 0 + 1 = 4$. Uitkomst: $4{,}18$.

Schatting ter controle: ongeveer $3{,}7 + 0{,}5 = 4{,}2$. Klopt.
:::

:::example Uitgewerkt voorbeeld: aftrekken van een geheel getal
$5 - 2{,}375$. Een geheel getal heeft een onzichtbare komma achteraan: $5 = 5{,}000$.

$$
\begin{array}{r}
5{,}000 \\
-\;2{,}375 \\
\hline
2{,}625
\end{array}
$$

Bij de duizendsten moet je lenen, en omdat de tienden en honderdsten ook 0 zijn, leen je door tot aan de eenheden: 5,000 is 4 eenheden, 9 tienden, 9 honderdsten en 10 duizendsten. Dan: $10 - 5 = 5$, $9 - 7 = 2$, $9 - 3 = 6$, $4 - 2 = 2$. Uitkomst $2{,}625$.

Controle door terug te tellen: $2{,}625 + 2{,}375 = 5{,}000$. Klopt.
:::

:::warning De fout "0,5 + 0,25 = 0,30"
Wie de cijfers na de komma als hele getallen behandelt, rekent "5 + 25 = 30" en schrijft 0,30. Dat is de rekenkundige kant van de denkfout "langer is groter" uit les 2: de 5 in 0,5 betekent vijf **tienden**, de 25 in 0,25 betekent vijfentwintig **honderdsten**. Je telt dan ongelijke dingen bij elkaar op.

Goed: $0{,}50 + 0{,}25 = 0{,}75$. In geld: vijftig cent plus vijfentwintig cent is vijfenzeventig cent, niet dertig. Bij twijfel helpt het om aan euro's en centen te denken.

Dezelfde fout ontstaat als je getallen **rechts uitlijnt** in plaats van komma onder komma, zoals je bij hele getallen gewend bent.
:::

{{ exercises: 08-017, 08-037, 08-018 }}

## 2. Vermenigvuldigen

### Een geheel getal maal een kommagetal

$4 \times 2{,}35$ betekent: vier keer 2,35. Dat kun je als herhaald optellen zien: $2{,}35 + 2{,}35 + 2{,}35 + 2{,}35 = 9{,}40$. Of met plaatswaarde: 2,35 is 235 honderdsten, en vier keer 235 honderdsten is 940 honderdsten, dus 9,40 = 9,4.

Die tweede manier is de sleutel tot alles wat volgt: **reken met hele getallen en houd bij hoeveel honderdsten (of tienden, of duizendsten) het zijn.**

:::warning Vermenigvuldigen maakt niet altijd groter
Bij hele getallen leer je "keer maakt groter". Bij kommagetallen is dat niet meer waar. $6 \times 0{,}5 = 3$: zes keer een halve is drie. Vermenigvuldigen met een positief getal **kleiner dan 1** neemt een deel van de hoeveelheid, en dat is kleiner dan het geheel. $0{,}5 \times$ betekent "de helft van", $0{,}1 \times$ betekent "een tiende van".
:::

### Een kommagetal maal een kommagetal

Hoe bereken je $1{,}2 \times 0{,}35$? Maak eerst van beide factoren hele getallen, door ze met een macht van tien te vermenigvuldigen. Dan weet je ook precies wat je weer moet terugdraaien.

:::example Uitgewerkt voorbeeld: 1,2 × 0,35
1. Maak hele getallen: $1{,}2 \times 10 = 12$ en $0{,}35 \times 100 = 35$.
2. Vermenigvuldig: $12 \times 35 = 420$.
3. Je hebt de eerste factor tien keer zo groot gemaakt en de tweede honderd keer. Het product is daardoor $10 \times 100 = 1000$ keer te groot. Deel dus door 1000: $420 : 1000 = 0{,}420 = 0{,}42$.
4. Schatting: $1{,}2 \times 0{,}35$ is iets meer dan $0{,}35$. Klopt: $0{,}42$.
:::

Het terugdraaien levert een eenvoudige telregel op.

:::theory De telregel voor decimalen
Vermenigvuldig de getallen alsof er geen komma's zijn. **Tel het aantal decimalen van beide factoren bij elkaar op**; zoveel decimalen krijgt het product.

Waarom: een factor met 1 decimaal is een geheel getal gedeeld door 10, een factor met 2 decimalen een geheel getal gedeeld door 100. Het product is dan gedeeld door $10 \times 100 = 1000$, en dat zijn $1 + 2 = 3$ decimalen. Tienmachten vermenigvuldigen betekent nullen optellen.
:::

Deze regel is precies wat Stevin in 1585 opschreef in zijn eigen notatie: bij vermenigvuldigen moet je de rangtekens van de laatste cijfers **optellen**. In het historisch intermezzo zie je hoe dat eruitzag.

### Waarom 0,3 × 0,2 geen 0,6 is

Een van de hardnekkigste fouten is $0{,}3 \times 0{,}2 = 0{,}6$. De redenering erachter: "$3 \times 2 = 6$, en de komma neem ik over." Maar $0{,}3 \times 0{,}2$ betekent "drie tienden **van** twee tienden", en dat is veel minder dan twee tienden. Het rechthoekmodel uit module 4 laat het zien.

![Rechthoekmodel voor 0,3 × 0,2](/images/diagrams/m08-oppervlakte-03x02.svg "In een vierkant van 1 bij 1, verdeeld in honderd hokjes, beslaat een rechthoek van 0,3 bij 0,2 precies zes hokjes: zes honderdsten.")

Een rechthoek van 0,3 bij 0,2 past in het eenheidsvierkant en beslaat 3 bij 2 = 6 van de 100 hokjes. Dus $0{,}3 \times 0{,}2 = 0{,}06$. Met de telregel: $3 \times 2 = 6$, één plus één decimaal is twee decimalen, dus $0{,}06$. Met breuken: $\tfrac{3}{10} \times \tfrac{2}{10} = \tfrac{6}{100}$.

:::example Uitgewerkt voorbeeld: nullen in het product
**a.** $0{,}04 \times 0{,}07$. Hele getallen: $4 \times 7 = 28$. Decimalen: $2 + 2 = 4$. Het product 28 heeft maar twee cijfers, dus vul aan met nullen vooraan: $0{,}0028$. Controle met breuken: $\tfrac{4}{100} \times \tfrac{7}{100} = \tfrac{28}{10\,000}$.

**b.** $2{,}5 \times 0{,}4$. Hele getallen: $25 \times 4 = 100$. Decimalen: $1 + 1 = 2$. Zet de komma twee plaatsen van rechts: $1{,}00 = 1$. Tel de decimalen **vóór** je eindnullen weghaalt. Wie eerst "100 wordt 1" denkt en dan nog twee plaatsen opschuift, komt op 0,01 uit.

**c.** Schatting voor (b): 2,5 keer een getal iets kleiner dan een halve is iets minder dan 1,25. Klopt: 1.
:::

{{ exercises: 08-019, 08-038, 08-020, 08-024 }}

## 3. Delen

### Een kommagetal delen door een geheel getal

Delen door een geheel getal gaat met de staartdeling uit module 5. Je deelt eerst de gehelen, zet de komma in de uitkomst zodra je bij de tienden aankomt, en gaat door. Is de deling niet op, dan vul je nullen aan: elke rest wordt omgezet in tien keer zoveel van de volgende, kleinere eenheid.

:::example Uitgewerkt voorbeeld: 12,6 : 4
1. $12 : 4 = 3$, rest 0. Schrijf 3 en daarna de komma.
2. 6 tienden : 4 = 1 tiende, rest 2 tienden.
3. 2 tienden zijn 20 honderdsten. Vul een nul aan: $20 : 4 = 5$ honderdsten, rest 0.

Uitkomst: $12{,}6 : 4 = 3{,}15$. Controle: $4 \times 3{,}15 = 12{,}60$. Klopt.
:::

Op dezelfde manier is $7 : 2 = 3{,}5$: de rest 1 wordt 10 tienden, en $10 : 2 = 5$ tienden. Bij $7 : 3$ blijft er steeds een rest 1 over, en krijg je de repeterende decimaal $2{,}\overline{3}$. Wil je een exacte uitkomst, gebruik dan de breuk $\tfrac73 = 2\tfrac13$.

### Delen door een kommagetal

Hoe vaak past 0,15 in 4,5? Het is lastig om een staartdeling te maken met een deler die een komma heeft. Gelukkig hoeft dat niet, dankzij een eenvoudige eigenschap: **een deling verandert niet als je deeltal en deler met hetzelfde getal vermenigvuldigt.**

Waarom? Denk aan geld. Hoeveel munten van € 0,15 passen er in € 4,50? Reken je in centen, dan wordt de vraag: hoeveel keer 15 cent in 450 cent? Het antwoord is hetzelfde, want je hebt alleen de eenheid veranderd. In getallen: $4{,}5 : 0{,}15 = 450 : 15$.

:::theory Delen door een kommagetal
1. Vermenigvuldig **deeltal én deler** met dezelfde macht van tien, zodat de deler een geheel getal wordt.
2. Deel zoals gewoonlijk.
3. Het quotiënt hoef je daarna **niet** terug te schuiven: de deling is door de vermenigvuldiging niet veranderd.

$$
a : b = (10a) : (10b) = (100a) : (100b)
$$
:::

:::example Uitgewerkt voorbeeld: 4,5 : 0,15
De deler 0,15 heeft twee decimalen. Vermenigvuldig beide met 100:

$$
4{,}5 : 0{,}15 = 450 : 15 = 30
$$

Controle: $30 \times 0{,}15 = 4{,}50$. Klopt. En de uitkomst is veel groter dan 4,5: dat moet ook, want 0,15 is een klein getal en past er dus vaak in.
:::

:::example Uitgewerkt voorbeeld: 0,072 : 0,6
De deler heeft één decimaal. Vermenigvuldig beide met 10: $0{,}72 : 6$. Nu een staartdeling door een geheel getal: 72 honderdsten gedeeld door 6 is 12 honderdsten, dus $0{,}12$.

Controle: $0{,}12 \times 0{,}6 = 0{,}072$ (telregel: $12 \times 6 = 72$, drie decimalen). Klopt.
:::

:::warning Twee typische fouten bij delen
- **Alleen de deler aanpassen.** Wie bij $4{,}5 : 0{,}15$ alleen de deler met 100 vermenigvuldigt en $4{,}5 : 15 = 0{,}3$ uitrekent, verandert de vraag. Het antwoord is dan honderd keer te klein.
- **Delen maakt niet altijd kleiner.** Delen door een positief getal kleiner dan 1 geeft een **grotere** uitkomst: $2 : 0{,}5 = 4$, want een halve past vier keer in 2. Als je uitkomst kleiner is dan het deeltal terwijl je door iets kleiners dan 1 deelt, zit er een fout in.
:::

{{ exercises: 08-021, 08-022, 08-023 }}

## 4. Eén berekening, veel komma's

Omdat alle bewerkingen met decimalen neerkomen op rekenen met hele getallen plus het bijhouden van tienmachten, kun je uit één berekening met hele getallen een hele familie afleiden. Dat is ook de beste manier om je te wapenen tegen de klassieke fout: **de komma vergeten te verschuiven** of hem op de verkeerde plaats zetten.

:::example Uitgewerkt voorbeeld: een familie van producten
Gegeven: $36 \times 25 = 900$.

| Som | Tienmachten | Uitkomst | Schatting |
|---|---|---|---|
| $3{,}6 \times 25$ | $: 10$ | $90$ | $4 \times 25 = 100$ |
| $3{,}6 \times 2{,}5$ | $: 100$ | $9$ | $4 \times 2{,}5 = 10$ |
| $0{,}36 \times 2{,}5$ | $: 1000$ | $0{,}9$ | $0{,}4 \times 2{,}5 = 1$ |
| $0{,}36 \times 0{,}25$ | $: 10\,000$ | $0{,}09$ | $0{,}4 \times 0{,}25 = 0{,}1$ |
| $900 : 2{,}5$ | $= 9000 : 25$ | $360$ | $1000 : 2{,}5 = 400$ |

Elke rij is dezelfde vermenigvuldiging, met een andere hoeveelheid tienmachten. De schattingskolom bevestigt telkens de orde van grootte.
:::

:::tip Controleer altijd op twee manieren
Na elke berekening met decimalen kun je twee vragen stellen. **Klopt de orde van grootte?** Daarvoor gebruik je een schatting. **Klopt de berekening?** Daarvoor gebruik je de omgekeerde bewerking: na delen vermenigvuldig je terug, na aftrekken tel je terug op. Samen vangen deze controles vrijwel elke kommafout.
:::

{{ exercise: 08-039 }}
