# Lijnen en hoeken

Wie een akker wil afbakenen of een tempel wil uitzetten, begint niet met oppervlakten maar met rechte lijnen en haakse hoeken. In deze les leg je die basis: wat een lijn is, wanneer lijnen evenwijdig of loodrecht zijn, wat een hoek eigenlijk meet en welke regels er gelden als lijnen elkaar snijden.

## 1. Punten, lijnen en lijnstukken

De meetkunde werkt met een paar **idealisaties**: figuren zonder dikte, die je nooit echt kunt tekenen, maar waarmee je wel heel precies kunt redeneren.

- Een **punt** geeft een plaats aan. Het heeft geen afmeting. Je noemt punten met hoofdletters: $A$, $B$, $P$.
- Een **lijn** is recht en loopt aan beide kanten onbeperkt door. Door twee verschillende punten $A$ en $B$ gaat precies één lijn; die noem je lijn $AB$.
- Een **lijnstuk** is het deel van een lijn tussen twee eindpunten. Lijnstuk $AB$ heeft een lengte, die je kunt meten.
- Een **halfrechte** (of straal) begint in één punt en loopt naar één kant onbeperkt door, zoals een lichtstraal vanuit een lamp.

![Lijn, lijnstuk, halfrechte, evenwijdige en loodrechte lijnen](/images/diagrams/m11-lijnen.svg "Boven: een lijn loopt aan twee kanten door, een lijnstuk heeft twee eindpunten, een halfrechte één. Onder: evenwijdige lijnen (∥) en loodrechte lijnen (⊥).")

In een tekening zie je van een lijn altijd maar een stukje. Dat stukje staat voor de hele, oneindig lange lijn. Dat lijkt een filosofische spitsvondigheid, maar het heeft gevolgen: twee getekende lijnstukken die elkaar op papier niet raken, kunnen als lijnen verlengd elkaar wel snijden.

### Evenwijdig en loodrecht

Twee lijnen in hetzelfde vlak kunnen elkaar op twee manieren "ontlopen" of ontmoeten.

:::definition Evenwijdig en loodrecht
- Twee lijnen in hetzelfde vlak zijn **evenwijdig** als ze elkaar nergens snijden, hoe ver je ze ook verlengt. Notatie: $k \parallel m$.
- Twee lijnen zijn **loodrecht** als ze elkaar onder een rechte hoek van $90°$ snijden. Notatie: $k \perp m$. In een tekening geef je een rechte hoek aan met een klein vierkantje in de hoek.
:::

Evenwijdige lijnen houden overal dezelfde afstand tot elkaar. Die **afstand** meet je loodrecht: de kortste weg van een punt naar een lijn is altijd het lijnstuk dat loodrecht op die lijn staat. Dat idee komt terug bij de hoogte van een driehoek en een parallellogram in les 4. Wie daar een schuine zijde in plaats van de loodrechte afstand gebruikt, rekent fout.

:::tip Tekenen met een geodriehoek
Een geodriehoek heeft een middellijn met een nulpunt en een reeks evenwijdige hulplijnen. Leg je de middellijn op een gegeven lijn, dan staat de lange rand er loodrecht op. Schuif je de geodriehoek langs een liniaal, dan teken je evenwijdige lijnen. Landmeters deden in wezen hetzelfde met koorden, paaltjes en een schietlood.
:::

## 2. Wat is een hoek?

Twee halfrechten met hetzelfde beginpunt vormen een **hoek**. Het gemeenschappelijke punt heet het **hoekpunt**, de halfrechten zijn de **benen**. Een hoek bij hoekpunt $B$ tussen de benen $BA$ en $BC$ schrijf je als $\angle ABC$: de middelste letter is altijd het hoekpunt.

Het belangrijkste inzicht is dit: **een hoek meet een draaiing, geen lengte.** Draai het ene been om het hoekpunt tot het op het andere been ligt; hoe ver je moet draaien, is de grootte van de hoek. Langere benen tekenen verandert daar niets aan. Een hoek van $30°$ met benen van een kilometer is even groot als een hoek van $30°$ met benen van een centimeter.

We meten hoeken in **graden**. Een volle draai is $360°$. Waarom juist 360 is niet met zekerheid bekend. Vaak wordt gewezen op de Babylonische sterrenkunde, die rekende in het zestigtallig stelsel (module 2); 360 is bovendien een getal met veel delers ($2, 3, 4, 5, 6, 8, 9, 10, 12, \dots$), wat rekenen met delen van een draai eenvoudig maakt.

Speel met de hoek hieronder. Sleep het been en let op hoe de soort hoek verandert.

{{ widget: angle value=60 }}

:::definition Soorten hoeken
| Soort | Grootte |
|---|---|
| Scherpe hoek | tussen $0°$ en $90°$ |
| Rechte hoek | precies $90°$ (een kwart draai) |
| Stompe hoek | tussen $90°$ en $180°$ |
| Gestrekte hoek | precies $180°$ (een halve draai; de benen vormen één rechte lijn) |
| Inspringende hoek | tussen $180°$ en $360°$ |
| Volle hoek | $360°$ (een hele draai) |
:::

### Meten met een gradenboog

Een gradenboog heeft meestal twee schalen: een die van links naar rechts oploopt en een die van rechts naar links oploopt. Daar gaat het vaak mis.

:::example Een hoek meten in vier stappen
Je wilt $\angle PQR$ meten.

1. **Schat eerst.** Is de hoek kleiner of groter dan een rechte hoek? Stel dat hij duidelijk wijder is dan een hoek van een boek: je verwacht een stompe hoek, ergens tussen $90°$ en $180°$.
2. **Leg het middelpunt** van de gradenboog precies op het hoekpunt $Q$.
3. **Leg de nullijn** langs het ene been, bijvoorbeeld $QR$.
4. **Lees af op de schaal die bij dat been met 0 begint.** Volg die schaal tot het andere been $QP$. Stel dat je daar 132 leest, en op de andere schaal 48.

Omdat je een stompe hoek verwachtte, is $\angle PQR = 132°$. Had je de verkeerde schaal gebruikt, dan had je $48°$ gevonden: precies $180° - 132°$. Die fout herken je dankzij de schatting uit stap 1.
:::

## 3. Hoeken bij een rechte lijn en rond een punt

Nu wordt het interessant: met een paar eenvoudige regels kun je hoeken **berekenen** zonder ze te meten.

**Hoeken langs een rechte lijn.** Als een halfrechte op een rechte lijn staat, verdeelt ze de gestrekte hoek van $180°$ in twee stukken. Zulke hoeken naast elkaar heten **nevenhoeken**; samen zijn ze $180°$. Euclides formuleerde dit in de *Elementen* (boek I, propositie 13): een rechte lijn op een rechte lijn maakt twee rechte hoeken of hoeken die samen gelijk zijn aan twee rechte hoeken.

**Hoeken rond een punt.** Hoeken die samen precies een volle draai rond één punt vullen, tellen op tot $360°$.

:::example Twee onbekende hoeken
Drie halfrechten vertrekken uit punt $O$. De hoeken ertussen zijn $96°$, een onbekende hoek, en een hoek die twee keer zo groot is als die onbekende. Samen vullen ze de volle draai.

1. De drie hoeken vullen een volle draai, dus samen zijn ze $360°$.
2. Haal de bekende hoek eraf: voor de twee andere blijft $360° - 96° = 264°$ over.
3. De twee onbekende hoeken zijn samen "één deel plus twee delen", dus drie gelijke delen. Eén deel is $264° : 3 = 88°$.
4. De hoeken zijn dus $88°$ en $2 \times 88° = 176°$.

Controle: $96 + 88 + 176 = 360$. Klopt. In module 16 schrijf je zo'n redenering als vergelijking: $96 + x + 2x = 360$.
:::

## 4. Overstaande hoeken

Twee lijnen die elkaar snijden, maken vier hoeken. De hoeken die **tegenover** elkaar liggen, heten **overstaande hoeken**. Ze lijken even groot, en dat zijn ze ook. Maar "het lijkt zo" is in de meetkunde geen argument. Hier is het bewijs, en het is maar twee regels lang.

![Twee snijdende lijnen met hoeken a, b, c en d](/images/diagrams/m11-overstaande-hoeken.svg "Twee snijdende lijnen: a en c zijn overstaande hoeken, net als b en d. Naast elkaar liggende hoeken zijn nevenhoeken.")

:::theory Overstaande hoeken zijn gelijk
Noem de vier hoeken bij het snijpunt rondom $a$, $b$, $c$ en $d$, zoals in de figuur.

- $a$ en $b$ liggen samen langs een rechte lijn, dus $a + b = 180°$.
- $b$ en $c$ liggen samen langs de andere rechte lijn, dus $b + c = 180°$.

Dus $a = 180° - b$ en $c = 180° - b$. Daarom is $a = c$. Op dezelfde manier is $b = d$.
:::

Dit is Euclides' propositie I.15. Het bewijs zegt meer dan een meting ooit kan zeggen: het geldt voor **elk** paar snijdende lijnen, ook voor lijnen die je nooit getekend hebt.

{{ exercises: 11-003, 11-004, 11-005, 11-006 }}

## 5. Evenwijdige lijnen en een snijlijn

Een lijn die twee evenwijdige lijnen snijdt, heet een **snijlijn** (of transversaal). Er ontstaan dan acht hoeken, vier bij elk snijpunt. Omdat de evenwijdige lijnen dezelfde richting hebben, "ziet" de snijlijn bij beide snijpunten precies hetzelfde. Daaruit volgen drie regels.

![Twee evenwijdige lijnen met een snijlijn](/images/diagrams/m11-hoeken-evenwijdig.svg "Twee evenwijdige lijnen k en m met een snijlijn. Gelijke hoeken hebben dezelfde kleur: F-hoeken (overeenkomstig) en Z-hoeken (verwisselend).")

:::theory Hoeken bij evenwijdige lijnen
Als $k \parallel m$ en een lijn $s$ snijdt beide, dan geldt:

1. **F-hoeken (overeenkomstige hoeken) zijn gelijk.** Ze zitten op dezelfde plek bij elk snijpunt, bijvoorbeeld allebei rechtsboven. Teken je een F, dan zitten ze onder de twee armen.
2. **Z-hoeken (verwisselende binnenhoeken) zijn gelijk.** Ze liggen tussen de evenwijdige lijnen, aan weerszijden van de snijlijn. Ze vormen de hoeken van een Z.
3. **Binnenhoeken aan dezelfde kant tellen op tot $180°$.** Ze liggen tussen de evenwijdige lijnen, aan dezelfde kant van de snijlijn (een C- of U-vorm).
:::

Waarom regel 2 uit regel 1 volgt: een Z-hoek is een overstaande hoek van een F-hoek, en overstaande hoeken zijn gelijk. En regel 3 volgt uit regel 1, omdat een binnenhoek en de F-hoek van zijn partner samen een gestrekte hoek vormen. Je hoeft dus eigenlijk maar één regel te onthouden; de rest kun je afleiden. Euclides bundelt dit in propositie I.29.

De regels werken ook **omgekeerd**: als een snijlijn met twee lijnen gelijke F-hoeken maakt, dan zijn die lijnen evenwijdig. Zo controleer je in de praktijk of twee lijnen evenwijdig zijn: meet de hoek die ze met een derde lijn maken.

:::example Rekenen met een snijlijn
Twee evenwijdige straten worden schuin gekruist door een spoorlijn. Bij de eerste kruising maakt het spoor rechtsboven een hoek van $58°$ met de straat. Welke hoeken ontstaan bij de tweede kruising?

- Rechtsboven bij de tweede kruising: F-hoek, dus ook $58°$.
- Linksboven: nevenhoek daarvan, dus $180° - 58° = 122°$.
- Linksonder: overstaand met rechtsboven, dus $58°$.
- Rechtsonder: overstaand met linksboven, dus $122°$.

Alle acht hoeken zijn dus $58°$ of $122°$. Dat is altijd zo: bij twee evenwijdige lijnen en een snijlijn komen maar twee hoekgroottes voor, en die tellen samen op tot $180°$.
:::

:::warning Alleen bij evenwijdige lijnen
De F- en Z-regels gelden alleen als de lijnen écht evenwijdig zijn. Lijken twee lijnen in een schets evenwijdig, maar staat dat nergens aangegeven (met pijltjes of het teken $\parallel$), dan mag je de regels niet gebruiken. Een schets is een geheugensteun, geen bewijs.
:::

{{ exercises: 11-031, 11-032 }}
