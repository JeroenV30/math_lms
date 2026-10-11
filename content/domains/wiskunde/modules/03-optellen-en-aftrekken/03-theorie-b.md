# Kolomsgewijs rekenen: onthouden en lenen

Hoofdrekenen is snel, maar bij getallen als 70.306 en 28.459 raak je in je hoofd al gauw de draad kwijt. Voor zulke getallen bestaat een methode die *altijd* werkt, hoe groot de getallen ook zijn: het **kolomsgewijs rekenen**, ook wel **cijferen** genoemd. Je rekent dan niet met hele getallen, maar met de afzonderlijke cijfers, kolom voor kolom. Dat dit mag, dank je aan de plaatswaarde uit module 2.

## Eerst het rekenbord

Lang voordat men op papier cijferde, rekende men met fiches op een rekenbord. Zo'n bord laat beter dan papier zien wat er bij 'onthouden' en 'lenen' eigenlijk gebeurt. Op het laatmiddeleeuwse rekenbord, zoals de Duitse rekenmeester Adam Ries het in 1518 beschreef, lagen horizontale lijnen voor de eenheden, tientallen, honderdtallen en duizendtallen. De ruimte *tussen* twee lijnen was vijf keer zoveel waard als de lijn eronder: 5, 50 of 500. Er lagen nooit meer dan vier fiches op een lijn en hoogstens één in een tussenruimte.

![Een rekenbord met vier lijnen voor 1, 10, 100 en 1000 en rekenpenningen die samen 1.528 voorstellen](/images/diagrams/m03-rekenbord-lijnen.svg "Het getal 1.528 op een rekenbord: één fiche op de duizendlijn, één in de vijfhonderdruimte, twee op de tienlijn, één in de vijfruimte en drie op de eenhedenlijn. Eigen diagram naar de beschrijving van het 'rekenen op de lijnen'.")

**Optellen** ging zo: je legde beide getallen met fiches op het bord en schoof ze samen. Lagen er daarna vijf fiches op een lijn, dan nam je ze weg en legde je er één in de ruimte erboven. Lagen er twee in een ruimte, dan ruilde je ze voor één fiche op de lijn erboven. Tien eenheden worden zo één tiental, tien tientallen één honderdtal. Dat **opruilen naar boven** is precies wat we op papier *onthouden* noemen.

**Aftrekken** ging andersom: je haalde fiches weg. Had je op een lijn te weinig, dan nam je één fiche van de lijn (of ruimte) erboven en wisselde je die in voor tien (of vijf) fiches op de lijn eronder. Dat **inwisselen naar beneden** heet op papier *lenen*.

Het cijferen op papier is dus geen nieuw idee, maar een manier om het werk van het rekenbord met pen en inkt vast te leggen. In het historisch intermezzo lees je hoe die twee methoden eeuwenlang met elkaar wedijverden.

## Kolomsgewijs optellen

:::theory De drie spelregels

1. **Zet de getallen recht onder elkaar, rechts uitgelijnd.** Eenheden onder eenheden, tientallen onder tientallen. Een getal met minder cijfers schuift dus naar rechts.
2. **Begin rechts**, bij de eenheden, en werk naar links.
3. **Is een kolomsom 10 of meer**, schrijf dan alleen het eenhedencijfer van die kolomsom op en **onthoud** het tiental: dat telt mee in de volgende kolom links.

:::

Waarom rechts beginnen? Omdat het onthouden altijd naar *links* gaat. Begin je links, dan moet je later teruggaan om cijfers te verbeteren.

:::example $4\,586 + 3\,237$
Schrijf de getallen onder elkaar. Boven de kolommen noteer je klein wat je onthoudt.

$$
\begin{array}{ccccc}
 & & {\scriptstyle 1} & {\scriptstyle 1} & \\
 & 4 & 5 & 8 & 6 \\
+ & 3 & 2 & 3 & 7 \\ \hline
 & 7 & 8 & 2 & 3
\end{array}
$$

- **Eenheden:** $6 + 7 = 13$. Schrijf 3, onthoud 1 (dat is één tiental).
- **Tientallen:** $8 + 3 + 1 = 12$. Schrijf 2, onthoud 1 (één honderdtal).
- **Honderdtallen:** $5 + 2 + 1 = 8$. Schrijf 8, niets te onthouden.
- **Duizendtallen:** $4 + 3 = 7$. Schrijf 7.
- Uitkomst: $4\,586 + 3\,237 = 7\,823$.
- **Even schatten:** ongeveer $4\,600 + 3\,200 = 7\,800$. De uitkomst is dus redelijk.

:::

Met de widget hieronder kun je deze som stap voor stap volgen. Let op het moment waarop het onthouden cijfer naar de volgende kolom gaat.

{{ widget: column-arithmetic a=4586 b=3237 op=+ }}

Bij **drie of meer termen** werk je precies zo. Het enige verschil: een kolomsom kan nu 20 of meer zijn, en dan onthoud je 2 (of meer).

:::example $1\,248 + 3\,976 + 587$
$$
\begin{array}{ccccc}
 & {\scriptstyle 1} & {\scriptstyle 2} & {\scriptstyle 2} & \\
 & 1 & 2 & 4 & 8 \\
 & 3 & 9 & 7 & 6 \\
+ & & 5 & 8 & 7 \\ \hline
 & 5 & 8 & 1 & 1
\end{array}
$$

- **Eenheden:** $8 + 6 + 7 = 21$. Schrijf 1, onthoud 2.
- **Tientallen:** $4 + 7 + 8 + 2 = 21$. Schrijf 1, onthoud 2.
- **Honderdtallen:** $2 + 9 + 5 + 2 = 18$. Schrijf 8, onthoud 1.
- **Duizendtallen:** $1 + 3 + 1 = 5$. Schrijf 5.
- Uitkomst: $5\,811$. Schatting: $1\,200 + 4\,000 + 600 = 5\,800$. Redelijk.

Let op: 587 heeft maar drie cijfers en staat daarom één plaats naar rechts. Wie hem links uitlijnt, telt 587 als 5.870.
:::

## Kolomsgewijs aftrekken

Bij aftrekken zijn de spelregels bijna hetzelfde: rechts uitlijnen, rechts beginnen, per kolom het onderste cijfer van het bovenste aftrekken. Het verschil zit in de situatie dat het bovenste cijfer *kleiner* is dan het onderste.

:::theory Lenen is inwisselen
Is in een kolom het bovenste cijfer te klein, dan **wissel je één eenheid van de kolom links ervan in** voor tien eenheden van je eigen kolom. Het cijfer links wordt dus 1 kleiner, het cijfer in je eigen kolom wordt 10 groter. De waarde van het getal verandert daarbij niet: je ruilt alleen 'één briefje van tien voor tien munten'.
:::

:::example $503 - 278$

- **Eenheden:** $3 - 8$ kan niet. Leen bij de tientallen. Maar daar staat 0: er zijn geen tientallen om in te wisselen.
- Dus ga eerst naar de honderdtallen: wissel 1 honderdtal in voor 10 tientallen. De 5 wordt 4, de 0 wordt 10.
- Wissel nu 1 van die 10 tientallen in voor 10 eenheden. De 10 tientallen worden 9, de 3 eenheden worden 13.
- Het getal 503 is nu geschreven als 4 honderdtallen, 9 tientallen en 13 eenheden. Reken na: $400 + 90 + 13 = 503$. Er is niets veranderd aan de waarde.
- **Eenheden:** $13 - 8 = 5$.
- **Tientallen:** $9 - 7 = 2$.
- **Honderdtallen:** $4 - 2 = 2$.
- Uitkomst: $503 - 278 = 225$.
- **Controle:** $225 + 278 = 503$. Klopt.

:::

![Kolomsgewijze aftrekking 503 min 278 met doorgestreepte cijfers: 5 wordt 4, 0 wordt 9, 3 wordt 13](/images/diagrams/m03-lenen-503-278.svg "Lenen over een nul: 503 wordt ingewisseld tot 4 honderdtallen, 9 tientallen en 13 eenheden. Eigen diagram.")

Volg dezelfde aftrekking in de widget:

{{ widget: column-arithmetic a=503 b=278 op=- }}

### Lenen over meerdere nullen

Bij getallen als 2.000 of 10.000 moet je over een hele rij nullen heen lenen. Het patroon is altijd hetzelfde: het eerste cijfer dat geen nul is wordt 1 kleiner, alle nullen ertussen worden 9, en de eenheden krijgen er 10 bij.

:::example $2\,000 - 764$
**Methode 1: lenen.** Wissel 1 duizendtal in. Er blijft 1 duizendtal over, en de 1.000 die je ingewisseld hebt, schrijf je als 9 honderdtallen, 9 tientallen en 10 eenheden ($900 + 90 + 10 = 1\,000$).

$$
\begin{array}{ccccc}
 & {\scriptstyle 1} & {\scriptstyle 9} & {\scriptstyle 9} & {\scriptstyle 10} \\
 & \cancel{2} & \cancel{0} & \cancel{0} & \cancel{0} \\
- & & 7 & 6 & 4 \\ \hline
 & 1 & 2 & 3 & 6
\end{array}
$$

- Eenheden: $10 - 4 = 6$. Tientallen: $9 - 6 = 3$. Honderdtallen: $9 - 7 = 2$. Duizendtallen: $1 - 0 = 1$.
- Uitkomst: $1\,236$.

**Methode 2: eerst gelijk verschuiven.** Trek van beide getallen 1 af. Het verschil blijft gelijk, maar nu hoef je helemaal niet meer te lenen:
$$
2\,000 - 764 = 1\,999 - 763 = 1\,236
$$
Met 1.999 kan elk cijfer van 763 er direct vanaf: $9 - 3 = 6$, $9 - 6 = 3$, $9 - 7 = 2$ en $1 - 0 = 1$.
:::

## Typische fouten

Bijna alle fouten bij kolomsgewijs rekenen zijn systematisch: wie ze maakt, maakt ze steeds weer op dezelfde manier. Daardoor kun je ze herkennen aan de uitkomst. In de oefeningen krijg je gerichte feedback als je in een van deze valkuilen stapt.

:::warning Vijf klassieke fouten

1. **Het kleinste van het grootste cijfer aftrekken.** Bij $503 - 278$ in de eenheden '$8 - 3 = 5$' doen in plaats van te lenen. In elke kolom wordt dan het kleinste cijfer van het grootste afgetrokken en komt er $375$ uit. Het verraderlijke: het ziet eruit als een nette berekening.
2. **Wel lenen, maar het buurcijfer niet verlagen.** Bij $503 - 278$ wel $13 - 8 = 5$ en $10 - 7 = 3$ doen, maar vergeten dat de 5 een 4 had moeten worden: dan krijg je $335$ in plaats van $225$.
3. **Fout lenen over nullen.** Bij $2\,000 - 764$ elke nul als 10 behandelen in plaats van als 9: $10 - 4 = 6$, $10 - 6 = 4$, $10 - 7 = 3$, en dan $1\,346$ in plaats van $1\,236$.
4. **Het onthouden vergeten.** Bij $4\,586 + 3\,237$ in elke kolom alleen het eenhedencijfer opschrijven: $7\,713$ in plaats van $7\,823$.
5. **Verkeerd uitlijnen.** Getallen links in plaats van rechts onder elkaar zetten, zodat eenheden bij tientallen worden opgeteld.

De beste verdediging tegen al deze fouten is dezelfde: **schat vooraf** en **controleer achteraf met de omgekeerde bewerking**. Daarover gaat de volgende les.
:::

## Begeleid oefenen

{{ exercises: 03-010, 03-011, 03-012, 03-013 }}

Nu iets grotere getallen, een historische context en een puzzel waarin je terug moet redeneren.

{{ exercises: 03-014, 03-015, 03-016 }}
