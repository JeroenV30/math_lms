# Centrum en frequenties

In module 12 berekende je het gemiddelde, de mediaan en de modus van een rijtje getallen. Dat werkt prima bij tien waarnemingen. Bij duizend waarnemingen schrijf je niet meer elk getal op: je telt hoe vaak elke waarde voorkomt en zet dat in een **frequentietabel**. In deze les reken je met zulke tabellen, ook als de waarden in klassen zijn ingedeeld, en je ontdekt dat een gemiddelde in feite een **gewogen** gemiddelde is.

## Kort herhaald

Het **gemiddelde** gebruikt alle getallen: je telt ze op en deelt door het aantal. De **mediaan** is de middelste waarde nadat je de getallen van klein naar groot hebt gesorteerd; bij een even aantal neem je het gemiddelde van de twee middelste. De **modus** is de waarde die het vaakst voorkomt. Meerdere waarden kunnen de hoogste frequentie delen; een dataset zonder herhaling noemen we in deze cursus 'zonder modus'.

Bij 1, 2, 2, 3, 12 is de som 20, het gemiddelde 4, de mediaan 2 en de modus 2. De hoge waarde 12 trekt het gemiddelde omhoog, maar de mediaan merkt er niets van: die kijkt alleen naar de positie in de gesorteerde rij. Daarom is de mediaan **robuust** tegen uitschieters en het gemiddelde niet. Bij scheve verdelingen, zoals salarissen of huizenprijzen, is de mediaan dan vaak een eerlijker beschrijving van een 'typische' waarde. Dat was precies de les van het salarisvoorbeeld uit les 1.

:::warning Eerst sorteren
De mediaan bepaal je altijd op de **gesorteerde** rij. Bij 9, 3, 7, 1, 12, 5, 8 is de middelste waarde van de rij zoals ze er staat niet de mediaan: eerst sorteren (1, 3, 5, 7, 8, 9, 12), dan pas de vierde van zeven waarden kiezen. Dat is 7, en niet 1.
:::

{{ exercises: 24-004, 24-005, 24-006, 24-034 }}

## Een frequentietabel

Stel dat je bij 20 leerlingen noteert hoe vaak zij vorige week te laat kwamen. De uitkomsten staan in een tabel:

| Aantal keer te laat | 0 | 1 | 2 | 3 | 4 |
|---|---|---|---|---|---|
| Frequentie (aantal leerlingen) | 3 | 5 | 7 | 4 | 1 |

De tabel bevat alle informatie van de oorspronkelijke twintig getallen, behalve hun volgorde. Je kunt de dataset er volledig uit terugrekenen: drie keer een 0, vijf keer een 1, enzovoort.

:::example Het gemiddelde uit een frequentietabel
Je wilt het gemiddelde aantal keren te laat berekenen. De som van alle twintig waarnemingen is niet $0+1+2+3+4$, want elke waarde komt meermaals voor. Je vermenigvuldigt elke waarde met haar frequentie:

$$
\text{som} = 3 \cdot 0 + 5 \cdot 1 + 7 \cdot 2 + 4 \cdot 3 + 1 \cdot 4 = 0 + 5 + 14 + 12 + 4 = 35.
$$

Het aantal waarnemingen is de som van de frequenties: $3+5+7+4+1 = 20$. Het gemiddelde is dus $35/20 = 1{,}75$. Het gemiddelde van de vijf verschillende waarden, $(0+1+2+3+4)/5 = 2$, geeft een ander (en fout) antwoord omdat het de aantallen negeert.
:::

In symbolen: heeft waarde $x_i$ frequentie $f_i$, dan is

$$
\bar{x} = \frac{\sum f_i x_i}{\sum f_i}.
$$

De mediaan lees je af uit de **cumulatieve** frequenties. Bij n = 20 liggen de middelste waarnemingen op de posities 10 en 11. De cumulatieve frequenties zijn 3, 8, 15, 19, 20: de eerste drie leerlingen hebben een 0, de leerlingen 4 tot en met 8 een 1 en de leerlingen 9 tot en met 15 een 2. Dus zowel de tiende als de elfde waarneming is 2, en de mediaan is 2. De modus is eveneens 2, de waarde met de grootste frequentie (7).

{{ exercises: 24-007, 24-031 }}

## Gegevens in klassen

Bij continue gegevens, zoals reistijd, is het zinloos om elke waarde apart te tellen: er zijn nauwelijks twee gelijke waarden. Dan deel je de waarden in **klassen** in. Een klasse als 10 tot 20 minuten wordt meestal opgevat als '10 tot en met 19,99…', dus 10 erbij, 20 er niet bij. Schrijf dat bijvoorbeeld als $10 \le t < 20$.

| Reistijd t (minuten) | $0 \le t < 10$ | $10 \le t < 20$ | $20 \le t < 30$ | $30 \le t < 40$ |
|---|---|---|---|---|
| Frequentie | 4 | 9 | 5 | 2 |

Zodra je gegevens in klassen zijn ingedeeld, ben je informatie kwijt: je weet niet meer welke reistijd elke leerling precies had. Voor het gemiddelde neem je daarom aan dat alle waarnemingen in een klasse in het **midden** van de klasse liggen. Het resultaat is een schatting, geen exacte waarde.

:::example Gemiddelde uit klassen
De klassenmiddens zijn 5, 15, 25 en 35 minuten. Er zijn $4+9+5+2=20$ waarnemingen. De geschatte som is
$$
4 \cdot 5 + 9 \cdot 15 + 5 \cdot 25 + 2 \cdot 35 = 20 + 135 + 125 + 70 = 350,
$$
dus het geschatte gemiddelde is $350/20 = 17{,}5$ minuten. De mediaan ligt op de posities 10 en 11; de cumulatieve frequenties zijn 4, 13, 18, 20, dus beide liggen in de klasse $10 \le t < 20$. Meer dan 'de mediaan ligt in de klasse 10 tot 20 minuten' kun je zonder de ruwe gegevens niet zeggen. Het klassenmidden gebruik je alleen voor het gemiddelde, en alleen als schatting.
:::

:::tip Controleer het resultaat
Een gemiddelde moet altijd tussen het kleinste en het grootste getal liggen, en meestal dicht bij waar de meeste frequentie zit. Hier zit het gros van de waarnemingen in de tweede klasse; 17,5 ligt dus in de buurt van het midden van die klasse (15), iets naar rechts getrokken door de twee lange reistijden. Dat is plausibel.
:::

{{ exercises: 24-032 }}

## Het gewogen gemiddelde

Zowel de frequentietabel als de klassen verbergen één idee: een **gewogen gemiddelde**. Elke waarde telt mee met een gewicht. In een frequentietabel is het gewicht het aantal keren dat de waarde voorkomt. Maar gewichten kunnen ook iets anders zijn, zoals de weging van een toets voor je eindcijfer.

$$
\bar{x}_w = \frac{\sum w_i x_i}{\sum w_i}.
$$

:::example Een eindcijfer
Een vak telt drie toetsen mee met wegingen 20%, 30% en 50%. Je haalt een 6,5, een 7,0 en een 8,0. Dan is je eindcijfer
$$
\frac{0{,}2 \cdot 6{,}5 + 0{,}3 \cdot 7{,}0 + 0{,}5 \cdot 8{,}0}{0{,}2+0{,}3+0{,}5} = \frac{1{,}3 + 2{,}1 + 4{,}0}{1} = 7{,}4.
$$
Het gewone gemiddelde van de drie cijfers is $(6{,}5+7+8)/3 \approx 7{,}17$: te laag, omdat het de zwaarste toets niet zwaarder laat tellen.
:::

Hetzelfde idee gebruik je om twee groepen samen te nemen. Een groep van 10 personen met gemiddelde 6 en een groep van 30 personen met gemiddelde 8 hebben samen gemiddelde

$$
\frac{10 \cdot 6 + 30 \cdot 8}{40} = 7{,}5.
$$

Dat is niet het midden van 6 en 8, want de grotere groep trekt harder. Dit zul je vaker tegenkomen: gemiddelden van groepen mag je nooit zonder de groepsgroottes combineren.

{{ exercises: 24-008, 24-033 }}

## Wat verandert er door één waarde?

Het is leerzaam om één waarde te veranderen en te kijken wat er met de maten gebeurt. Neem 1, 2, 2, 3, 12 en vervang de 12 door 120. De mediaan blijft 2 en de modus blijft 2, maar het gemiddelde springt van 4 naar 25,6. Het gemiddelde 'gebruikt alle informatie', en juist daardoor is het gevoelig voor extreme waarden. Dat is geen fout van het gemiddelde; het is een eigenschap. Het gemiddelde is ideaal als je de **totale** hoeveelheid wilt behouden (totale opbrengst gedeeld door aantal velden), de mediaan als je een **typisch** geval zoekt.

Let ook op de eenheid: het gemiddelde heeft dezelfde eenheid als de waarnemingen. Het gemiddelde van lengtes in meters is een lengte in meters. Dat lijkt vanzelfsprekend, maar wordt belangrijk als je bij de variantie opeens kwadraten van eenheden tegenkomt.
