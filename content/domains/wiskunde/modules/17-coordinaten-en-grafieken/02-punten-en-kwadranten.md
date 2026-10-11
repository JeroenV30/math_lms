# Het assenstelsel: punten lezen en tekenen

In de introductie kreeg je een punt als 'drie naar rechts en twee omhoog'. In deze les maak je daar een vast systeem van. Je leert hoe een assenstelsel is opgebouwd, hoe je er punten aflees en zet, wat de vier kwadranten zijn en hoe je omgaat met assen die een andere schaal hebben dan één eenheid per hokje. Dat laatste is belangrijk, want in de praktijk staan er op de assen van een grafiek vrijwel nooit 'gewone' getallen zonder eenheid.

## 1. De opbouw van een assenstelsel

Een assenstelsel bestaat uit twee **getallenlijnen** die elkaar loodrecht snijden. De horizontale lijn is de **x-as**, de verticale lijn de **y-as**. Op de x-as staan de getallen van links naar rechts oplopend, op de y-as van beneden naar boven. Het snijpunt van de assen is de **oorsprong**, meestal aangeduid met $O$. Voor beide assen is dat het getal nul, dus de oorsprong heeft coördinaten $(0; 0)$.

:::definition Coördinaten
Elk punt $P$ in het vlak krijgt een geordend paar getallen $(x; y)$. De **x-coördinaat** zegt hoever $P$ links of rechts van de y-as ligt, de **y-coördinaat** hoever $P$ boven of onder de x-as ligt. Het teken geeft de kant aan: een positieve x ligt rechts, een negatieve x links, een positieve y boven en een negatieve y onder de andere as.
:::

We schrijven de coördinaten met een puntkomma: $(3; 2)$, en niet met een komma. Dat voorkomt verwarring zodra een coördinaat een decimaal getal is, zoals in $(1{,}5; -2)$. In de antwoordvelden van deze module mag je zowel een komma als een puntkomma gebruiken, maar de puntkomma is ondubbelzinnig.

![Assenstelsel met kwadranten en vier punten](/images/diagrams/m17-assenstelsel.svg "Een assenstelsel met oorsprong, vier kwadranten en de punten A (3; 2), B (−4; 1), C (−2; −3) en D (4; −2). Eigen illustratie.")

### Een punt aflezen

Een punt aflezen doe je in twee stappen, altijd in dezelfde volgorde. Je begint bij de oorsprong, loopt langs de x-as tot onder of boven het punt (stap 1: de x-coördinaat) en gaat dan verticaal naar het punt zelf (stap 2: de y-coördinaat).

:::example Punt B aflezen
Lees punt $B$ uit de figuur af.

1. Vanaf de oorsprong ga je langs de x-as naar links tot je recht boven of onder $B$ staat. Dat is vier hokjes naar links: $x = -4$.
2. Vanuit daar ga je verticaal omhoog tot je bij $B$ bent: één hokje, dus $y = 1$.
3. De coördinaten zijn $B = (-4; 1)$.

Controle: een punt links van de y-as heeft een negatieve x. Dat klopt hier.
:::

### Een punt tekenen

Tekenen is het omgekeerde. Voor $(-2; -3)$ ga je twee hokjes naar links (want $x = -2$) en dan drie hokjes naar beneden (want $y = -3$). Je kunt het punt het beste eerst *zoeken* en daarna pas markeren: het levert minder fouten op dan meteen een stipje zetten.

Probeer het zelf in de widget hieronder. Zoek elk van de gegeven punten op, en klik daarna op een plek met $x = 0$: dat punt ligt op de y-as.

{{ widget: coordinate-grid size=6 points="(3;2) (-4;1) (-2;-3) (4;-2)" }}

{{ exercises: 17-003, 17-004 }}

:::warning Eerst x, dan y
De meest voorkomende fout bij coördinaten is het omwisselen van de twee getallen. Een eenvoudige controle: de x-coördinaat gaat over *links of rechts*, dus over een horizontale beweging. Vraag jezelf bij elk antwoord af of je eerst horizontaal bent gegaan.
:::

## 2. Punten op de assen

Als je langs de x-as loopt, ga je niet omhoog of omlaag. Dus elk punt op de x-as heeft $y = 0$. Omgekeerd heeft elk punt op de y-as $x = 0$. Dat lijkt voor de hand te liggen, maar het speelt een grote rol wanneer je later snijpunten van een lijn met de assen berekent: 'het snijpunt met de x-as' betekent niets anders dan 'het punt waar $y = 0$'.

Let op het verschil tussen $(5; 0)$ en $(0; 5)$. Het eerste ligt op de x-as, vijf stappen rechts van de oorsprong. Het tweede ligt op de y-as, vijf stappen boven de oorsprong. Het zijn verschillende punten.

{{ exercises: 17-006, 17-007 }}

## 3. De vier kwadranten

De assen verdelen het vlak in vier gebieden, de **kwadranten**. Ze worden genummerd met Romeinse cijfers, tegen de klok in, beginnend rechtsboven.

| Kwadrant | Ligging | Teken van x | Teken van y | Voorbeeld |
|---|---|---|---|---|
| I | rechtsboven | + | + | $(3; 2)$ |
| II | linksboven | − | + | $(-4; 1)$ |
| III | linksonder | − | − | $(-2; -3)$ |
| IV | rechtsonder | + | − | $(4; -2)$ |

Het nummeren tegen de klok in is een afspraak, die je terugvindt bij hoeken en bij de eenheidscirkel in latere modules. Een kwadrant is dus niet meer dan een samenvatting van de twee tekens: wie de tekens van $x$ en $y$ kent, weet in welk kwadrant een punt ligt, zonder te tekenen.

:::example In welk kwadrant ligt het punt?
Bepaal het kwadrant van $P = (-6; 2)$, $Q = (5; -1)$ en $R = (-3; 0)$.

1. Voor $P$ is $x < 0$ en $y > 0$: linksboven, kwadrant II.
2. Voor $Q$ is $x > 0$ en $y < 0$: rechtsonder, kwadrant IV.
3. Voor $R$ is $y = 0$. Het punt ligt op de x-as, dus in *geen* kwadrant. De assen zelf horen bij geen enkel kwadrant, ook de oorsprong niet.
:::

{{ exercises: 17-005, 17-032 }}

## 4. Schaal en eenheden

In een schoolboek staat bij elk hokje meestal één eenheid. In een echte grafiek is dat zelden zo. Op de x-as van een grafiek van een fietstocht kan één hokje 10 minuten zijn, terwijl op de y-as één hokje 2 kilometer voorstelt. Wie de **schaal** niet leest, leest de grafiek verkeerd.

Daarom lees je bij een punt altijd twee dingen af: het *aantal hokjes* en wat een hokje *waard is*. Het punt dat vier hokjes rechts en drie hokjes boven de oorsprong ligt, heeft bij die schaal de coördinaten $(40; 6)$: 40 minuten en 6 kilometer. In de context schrijf je de eenheden erbij: na 40 minuten is de fietser 6 kilometer ver.

Door verschillende schalen op de twee assen kunnen een grafiek en de werkelijkheid sterk van elkaar verschillen in uiterlijk. Hoe steil een lijn eruitziet, hangt af van de gekozen schalen. Daarom vertrouw je bij het berekenen op de getallen, niet op de hoek die je op het scherm ziet. Daar komen we in les 5 op terug.

:::tip Decimale coördinaten
Ook tussen de hokjes zijn er punten. Het punt $(1{,}5; -2)$ ligt halverwege de verticale lijnen bij $x = 1$ en $x = 2$, en twee hokjes onder de x-as. Schat het begin, neem je tijd en controleer je tekening door terug te lezen.
:::

{{ exercises: 17-031 }}
