# Voorwaardelijke kansen en Bayes’ regel

Voorwaardelijke kans is het idee dat een kans verandert zodra je meer weet.
De kans dat het morgen regent is anders als je weet dat het vandaag al de hele
dag regent. Wiskundig betekent "meer weten" dat je de verzameling mogelijke
uitkomsten kleiner maakt: je beperkt je tot de gevallen waarin de nieuwe
informatie waar is, en kijkt in welk deel daarvan de gebeurtenis voorkomt.

## Voorwaardelijke kans

Voor twee gebeurtenissen $A$ en $B$ met $P(B)>0$ definieer je

$$
P(A\mid B)=\frac{P(A\cap B)}{P(B)}.
$$

Lees dit als: de kans op $A$ **gegeven** $B$. Het is het deel van de $B$-wereld
waarin ook $A$ geldt. Let op de noemer: de basis van de breuk is niet langer
alle uitkomsten, maar alleen de uitkomsten in $B$.

Je ziet dat het best met aantallen. Neem 1000 mensen, onder wie 200 rokers.
Van de rokers hoesten er 50; van de 800 niet-rokers hoesten er 80. Dat zijn
130 hoesters.

| | hoest | hoest niet | totaal |
|---|---:|---:|---:|
| roker | 50 | 150 | 200 |
| niet-roker | 80 | 720 | 800 |
| totaal | 130 | 870 | 1000 |

De kans dat een roker hoest, $P(\text{hoest}\mid\text{roker})$, lees je af in
de rij van de rokers: $50/200$. De kans dat iemand die hoest een roker is,
$P(\text{roker}\mid\text{hoest})$, lees je af in de kolom van de hoesters:
$50/130$. Hetzelfde getal 50 staat in beide tellers, maar de noemers verschillen.
Dat is precies wat misgaat als je twee voorwaarden verwisselt.

{{ exercises: 41-021, 41-022 }}

## De vergissing $P(A\mid B)\neq P(B\mid A)$

Het verwisselen van $P(A\mid B)$ en $P(B\mid A)$ komt zo vaak voor dat het in de
rechtszaal een eigen naam heeft: de **prosecutor's fallacy**, de denkfout van de
aanklager. De redenering gaat zo. Een DNA-profiel komt bij slechts 1 op de
100 000 mensen voor. Het profiel van de verdachte past bij het spoor. Dus, zo
suggereert men, is de kans dat de verdachte onschuldig is slechts 1 op de
100 000. Maar die kleine kans hoort bij de vraag: hoe waarschijnlijk is zo'n
match **als** de verdachte onschuldig is? De rechter wil de kans op onschuld
**gegeven** de match weten.

:::example Een DNA-match in een grote stad
Een misdaad is gepleegd door één van de 1 000 000 inwoners van een stad. Het
spoor heeft een profiel dat bij 1 op de 100 000 mensen voorkomt. Jan wordt
alleen verdacht omdat zijn profiel past; er is verder geen aanwijzing tegen hem.
Hoe groot is de kans dat hij onschuldig is?

Denk aan de hele stad. Onder de ruim 999 999 onschuldigen verwacht je
ongeveer 10 personen met een passend profiel. Daar komt de dader zelf bij, die
vanzelf past. Er zijn dus ongeveer 11 mensen met een passend profiel, van wie
er één de dader is. De kans dat Jan de dader is, is dan ongeveer $1/11$ en de
kans op onschuld ongeveer $10/11$. Niet 1 op de 100 000, maar ruim 90%.
:::

{{ exercises: 41-023, 41-024 }}

Dit voorbeeld is sterk vereenvoudigd. In werkelijke zaken is er meestal ook ander
bewijs, dat de kans op schuld vóór de match al verhoogt, en verdachten worden
zelden willekeurig uit een hele stad gekozen. De les is niet dat een DNA-match
weinig waard is. De les is dat je de zeldzaamheid van het profiel pas goed kunt
wegen als je weet **hoeveel mensen** in aanmerking komen. Een zeldzame match bij
een kleine groep verdachten is sterk bewijs; dezelfde match gevonden bij het
doorzoeken van een database met miljoenen mensen is veel zwakker.

:::warning De zaak-Sally Clark
In 1999 werd de Engelse advocate Sally Clark veroordeeld voor de moord op haar
twee baby's, die kort na de geboorte waren overleden. De kinderarts Roy Meadow
verklaarde als getuige-deskundige dat de kans op twee wiegendoden in één
welgesteld gezin ongeveer 1 op 73 miljoen was. Hij kwam daaraan door 1 op 8500,
zijn schatting voor één wiegendood, te kwadrateren. In 2001 stelde de Royal
Statistical Society dat voor dat getal geen statistische onderbouwing bestond.
Twee fouten zijn te benoemen. Kwadrateren veronderstelt dat twee sterfgevallen in
één gezin onafhankelijk zijn, terwijl genetische en omgevingsfactoren dat
onwaarschijnlijk maken. En een kleine kans op twee natuurlijke sterfgevallen is
nog niet de kans op onschuld: je moet die vergelijken met de ook kleine kans dat
een moeder twee kinderen vermoordt. Clark werd in 2003 bij hoger beroep
vrijgesproken, mede doordat achtergehouden onderzoeksuitslagen op een natuurlijke
doodsoorzaak wezen.
:::

## Bayes' regel afleiden

Voor de afleiding heb je niets nieuws nodig. Uit de definitie van voorwaardelijke
kans volgt de productregel: $P(H\cap D)=P(D\mid H)\,P(H)$. De doorsnede
$H\cap D$ is dezelfde gebeurtenis als $D\cap H$, en daarvoor geldt ook
$P(D\cap H)=P(H\mid D)\,P(D)$. Beide uitdrukkingen staan voor dezelfde kans:

$$
P(H\cap D)=P(D\mid H)\,P(H)=P(H\mid D)\,P(D).
$$

Delen door $P(D)>0$ geeft de regel van Bayes:

$$
P(H\mid D)=\frac{P(D\mid H)\,P(H)}{P(D)}.
$$

Bij twee elkaar uitsluitende en samen uitputtende hypothesen $H$ en $\neg H$
kun je de noemer uitwerken met de totale-kansregel:
$P(D)=P(D\mid H)P(H)+P(D\mid\neg H)P(\neg H)$. De noemer telt dus alle manieren
waarop de gegevens $D$ kunnen ontstaan: via $H$ en via $\neg H$. Bij meer dan twee
hypothesen $H_1,\dots,H_m$ telt de noemer $m$ termen.

## Rekenen met aantallen en kansbomen

Je hoeft de formule niet te onthouden om hem te gebruiken. Stel je een
denkbeeldige groep voor en tel.

:::example Een sensor met valse alarmen
Neem een denkbeeldige groep van 1000 onderdelen, met 5% defecten.
Er zijn dan 50 defecte en 950 goede onderdelen. Bij detectiekans 90%
krijg je 45 echte alarmen. Bij 10% valse alarmen krijg je ook 95 alarmen
onder goede onderdelen. Van alle 140 alarmen zijn er maar 45 echt defect:
$P(\text{defect}\mid\text{alarm})=45/140\approx0{,}3214$.
:::

Hetzelfde kun je als **kansboom** tekenen. De eerste splitsing is defect of
goed, met kansen 0,05 en 0,95. Uit elke tak gaan twee takken naar alarm of geen
alarm. Je vermenigvuldigt de kansen langs elke route: de route defect en alarm
heeft kans $0{,}05\cdot0{,}9=0{,}045$; de route goed en alarm heeft kans
$0{,}95\cdot0{,}1=0{,}095$. Daarna normaliseer je: van de totale alarmkans
$0{,}14$ valt $0{,}045$ onder de defecte route, dus $0{,}045/0{,}14\approx0{,}3214$.
De boom, de tabel en de formule zijn dezelfde berekening; alleen de presentatie
verschilt.

{{ exercises: 41-001, 41-002, 41-003, 41-004, 41-005, 41-006 }}

De getallen zijn verwachte frequenties in een denkbeeldige groep, geen belofte
over een specifieke partij van precies 1000 stuks. Ze vormen een inzichtelijke
manier om dezelfde kansrekening uit te voeren. Onderzoek van de psycholoog
Gerd Gigerenzer en collega's wijst erop dat mensen kansproblemen beter oplossen
in zulke **natuurlijke frequenties** ("van de 1000 onderdelen...") dan in
kansen als $0{,}05$ en $0{,}9$. De rekenkundige inhoud is gelijk; de presentatie
bepaalt hoe makkelijk je het ziet.

## Prior, likelihood en posterior

De prior is $P(H)$ vóór de nieuwe data. De likelihood is $P(D\mid H)$ als
functie van de hypothese. De posterior is $P(H\mid D)$ na het bijwerken.
Je kunt de regel van Bayes dus lezen als een korte formule voor leren:

$$
\text{posterior}\ \propto\ \text{prior}\times\text{likelihood}.
$$

Het teken $\propto$ betekent "evenredig met": de noemer $P(D)$ zorgt er alleen
voor dat de posterior-kansen weer optellen tot 1. Een likelihood hoeft over
hypothesen niet op te tellen tot 1; zij is op zichzelf geen kansverdeling over
H. Neem $P(D\mid H)=0{,}8$ en $P(D\mid\neg H)=0{,}1$: samen is dat 0,9, en dat is
prima, want elk getal hoort bij een andere hypothese en hun som betekent niets.

{{ exercises: 41-007, 41-008 }}

Voor continue data gebruik je een dichtheid als likelihood. Bayes werkt dan
met integralen voor de normalisatie. Een grote dichtheid kan boven 1 liggen,
net als in module 36; dat is geen ongeldige kans.
