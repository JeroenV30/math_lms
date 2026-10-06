# Kwartielen en boxplots

De mediaan deelt een gesorteerde dataset in twee gelijke helften. Je kunt dat idee herhalen: deel elke helft opnieuw door het midden. Dan krijg je drie getallen, de **kwartielen**, die de dataset in vier delen met elk ongeveer een kwart van de waarnemingen verdelen. Met die kwartielen meet je spreiding op een manier die niet door één uitschieter wordt vertekend, en je tekent er de boxplot mee, de meest gebruikte grafiek om groepen naast elkaar te zetten.

## Kwartielen: een conventie

Het eerste kwartiel $Q_1$ is de waarde waaronder ongeveer 25% van de data ligt, het tweede kwartiel $Q_2$ is de mediaan, en het derde kwartiel $Q_3$ is de waarde waaronder ongeveer 75% ligt. Dat 'ongeveer' is geen slordigheid. Bij een eindig aantal waarnemingen kun je nooit precies een kwart afsplitsen, en daarom bestaan er **verschillende conventies** voor kwartielen. Software als Excel en R bepaalt kwartielen vaak door tussen twee waarnemingen te interpoleren; schoolboeken kiezen soms een andere regel. Bij kleine datasets leveren die regels niet dezelfde getallen op, zonder dat een ervan fout is.

Daarom kiezen we in deze module één conventie en houden we die vol:

:::definition Kwartielen: de mediaan van de helften
Sorteer de data. Bepaal de mediaan. Neem de onderste helft (alle waarden onder de mediaan) en de bovenste helft (alle waarden erboven). Het eerste kwartiel $Q_1$ is de mediaan van de onderste helft, het derde kwartiel $Q_3$ is de mediaan van de bovenste helft. Bij een **oneven** aantal waarnemingen laat je de middelste waarneming buiten beide helften.
:::

Een kleine illustratie van het verschil: bij 1, 3, 5, 7, 9 geeft onze conventie $Q_1 = 2$ en $Q_3 = 8$. Rekent je software met lineaire interpolatie (zoals de standaardinstelling van R en de Excel-functie QUARTILE.INC), dan krijg je $Q_1 = 3$ en $Q_3 = 7$. Beide uitkomsten zijn verdedigbaar. Kom je een opgave of programma tegen, vermeld dan welke conventie je gebruikt.

:::example Zeven waarden
Neem 12, 15, 15, 18, 20, 22, 40 (al gesorteerd). Er zijn zeven waarden, dus de mediaan is de vierde: 18. De onderste helft is 12, 15, 15 en de bovenste 20, 22, 40; de 18 zelf laat je buiten beide helften. De mediaan van 12, 15, 15 is 15, dus $Q_1=15$. De mediaan van 20, 22, 40 is 22, dus $Q_3 = 22$. De interkwartielafstand is $22-15 = 7$.
:::

:::example Acht waarden
Bij 2, 4, 4, 4, 5, 5, 7, 9 is de mediaan het gemiddelde van de vierde en vijfde waarde: $(4+5)/2 = 4{,}5$. Bij een even aantal valt er geen waarde 'in het midden', dus beide helften bestaan uit vier waarden: 2, 4, 4, 4 en 5, 5, 7, 9. Hun medianen zijn $Q_1 = 4$ en $Q_3 = 6$.
:::

{{ exercises: 24-009, 24-010, 24-011, 24-012 }}

## Interkwartielafstand en vijfgetallensamenvatting

De **spreidingsbreedte** (maximum minus minimum) is de simpelste spreidingsmaat, maar ze hangt volledig af van twee waarnemingen, de allerkleinste en de allergrootste. Eén uitschieter maakt haar zo groot dat ze niets meer zegt over de rest van de data. De **interkwartielafstand** (IQR) meet de breedte van het middelste deel van de data:

$$
\mathrm{IQR} = Q_3 - Q_1.
$$

Wat je ook doet aan de uiterste waarden, de IQR verandert niet zolang de middelste helft gelijk blijft. Een veelgemaakte slordigheid is het optellen van de kwartielen in plaats van het aftrekken: $Q_3 + Q_1$ heeft geen enkele betekenis als maat voor spreiding. De IQR is bovendien nooit negatief.

De **vijfgetallensamenvatting** beschrijft een dataset met vijf getallen: minimum, $Q_1$, mediaan, $Q_3$, maximum. Ze vertelt je waar de data beginnen en eindigen, waar het midden zit en hoe breed het middelste deel is. De Amerikaanse statisticus John Tukey maakte haar bekend; meer daarover in les 6.

:::example Vijfgetallensamenvatting van twaalf wachttijden
Twaalf klanten wachtten bij een loket (in minuten): 3, 5, 6, 6, 7, 8, 9, 10, 11, 12, 14, 30. De rij is gesorteerd en $n = 12$ is even.

- Mediaan: het gemiddelde van de zesde en zevende waarde, $(8+9)/2 = 8{,}5$.
- Onderste helft: 3, 5, 6, 6, 7, 8. De mediaan daarvan is $(6+6)/2 = 6$, dus $Q_1 = 6$.
- Bovenste helft: 9, 10, 11, 12, 14, 30. De mediaan daarvan is $(11+12)/2 = 11{,}5$, dus $Q_3 = 11{,}5$.
- Minimum 3 en maximum 30.

De vijfgetallensamenvatting is dus $(3;\ 6;\ 8{,}5;\ 11{,}5;\ 30)$ en de IQR is $11{,}5 - 6 = 5{,}5$. De spreidingsbreedte is 27, bijna vijf keer zo groot, door die ene wachttijd van 30 minuten.
:::

{{ exercises: 24-035, 24-036 }}

## De boxplot tekenen en lezen

Een **boxplot** (ook wel doosdiagram) tekent de vijfgetallensamenvatting. De *box* loopt van $Q_1$ tot $Q_3$, een streep in de box markeert de mediaan, en de *snorren* (whiskers) lopen uit naar de uiterste waarden. In de **minimum/maximumvariant** lopen de snorren naar het minimum en het maximum. De widget hieronder gebruikt die variant. Pas de waarden aan en kijk wat de box doet.

{{ widget: boxplot values="1; 3; 5; 7; 9" }}

Wat lees je uit een boxplot? De lengte van de box is de IQR: een brede box betekent veel spreiding in het midden. De plaats van de mediaan in de box laat scheefheid zien: ligt de mediaan dicht bij $Q_1$ en is de rechterhelft van de box langer, dan zijn de waarden rechts van de mediaan meer verspreid. Elk van de vier stukken (linkersnor, linkerdeel van de box, rechterdeel van de box, rechtersnor) bevat ongeveer een kwart van de waarnemingen. Een lang stuk is dus dun bezet, een kort stuk dicht.

:::warning Lengte is geen aantal
Omdat elk van de vier delen ongeveer 25% van de data bevat, zegt de lengte van een snor niets over het aantal waarnemingen daarin. Een boxplot laat ook niet zien hoeveel waarnemingen er in totaal zijn, en niet of ze in groepjes liggen. Een boxplot is een samenvatting; kijk, als het kan, ook naar de ruwe punten.
:::

Probeer het uit met de twaalf wachttijden uit het voorbeeld. Let op hoe ver de rechtersnor reikt door die ene waarde van 30.

{{ widget: boxplot values="3; 5; 6; 6; 7; 8; 9; 10; 11; 12; 14; 30" }}

{{ exercises: 24-013, 24-039 }}

## Uitschieters en de 1,5 × IQR-regel

Wat als een enkele waarde ver van de rest ligt, zoals die 30 in de wachttijden? Tukey stelde een praktische regel voor om zulke waarden op te sporen. Bereken de **grenzen**

$$
\text{ondergrens} = Q_1 - 1{,}5\cdot\mathrm{IQR}, \qquad \text{bovengrens} = Q_3 + 1{,}5\cdot\mathrm{IQR}.
$$

Waarnemingen buiten het interval tussen die grenzen noemen we volgens deze regel **uitschieters**. In een boxplot met uitschieterregel lopen de snorren niet naar het minimum en maximum, maar naar de verste waargenomen waarden **binnen** de grenzen. Uitschieters krijgen een eigen punt. De berekende grenzen zijn dus niet noodzakelijk de snoruiteinden: de snor stopt bij een echte waarneming.

![Boxplot van twaalf wachttijden met de uitschietergrens en één uitschieter](/images/diagrams/m24-boxplot-delen.svg "Boxplot met uitschieterregel voor de wachttijden uit het voorbeeld (eigen figuur)")

:::example Uitschieters bij de wachttijden
Voor de twaalf wachttijden is $Q_1 = 6$, $Q_3 = 11{,}5$ en $\mathrm{IQR} = 5{,}5$. Dan is $1{,}5 \cdot 5{,}5 = 8{,}25$. De grenzen zijn
$$
6 - 8{,}25 = -2{,}25 \qquad\text{en}\qquad 11{,}5 + 8{,}25 = 19{,}75.
$$
Een wachttijd onder $-2{,}25$ is onmogelijk, dus links is er geen uitschieter. Rechts valt de waarde 30 buiten de grens van 19,75: een uitschieter. De grootste waarneming binnen de grenzen is 14, dus de rechtersnor eindigt bij 14 en niet bij 19,75. De linkersnor eindigt bij het minimum 3.
:::

Merk op dat de 1,5-regel een **afspraak** is, geen natuurwet. Hij markeert waarnemingen die opvallen; wat je ermee doet, is een inhoudelijke vraag. Een uitschieter kan een typefout zijn (30 in plaats van 3,0), een meetfout, een waarneming uit een andere groep (iemand met een spoedgeval op de huisartsenpost) of gewoon een echte maar zeldzame waarde. Gooi een uitschieter daarom nooit weg alleen omdat hij lastig is of omdat een regel hem aanwijst. Onderzoek eerst wat er achter zit, documenteer elke verwijdering en vermeld in je rapport welke maten met en zonder de waarde gelden.

{{ exercises: 24-037, 24-038 }}

Boxplots met een uitschieterregel en boxplots met minimum/maximumsnorren komen beide voor. Vermeld daarom altijd welke variant je leest of tekent. Zie ook het [NIST-handboek over boxplots](https://www.itl.nist.gov/div898/handbook/eda/section3/boxplot.htm).

## Samengevat

Kwartielen delen een gesorteerde dataset in vier stukken; je neemt de mediaan van elke helft en vermeldt de conventie. De IQR $=Q_3-Q_1$ meet de spreiding van het middelste deel en is robuust tegen uitschieters. De vijfgetallensamenvatting en de boxplot geven samen een snel beeld van centrum, spreiding en scheefheid. De 1,5 × IQR-regel markeert mogelijke uitschieters, maar wat je ermee doet, bepaalt de inhoud, niet de regel.
