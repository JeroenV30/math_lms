# Babylonisch, Egyptisch en Romeins

Ons tientallige plaatswaardesysteem is niet de enige manier om getallen op te schrijven, en historisch gezien ook niet de eerste. Door het te vergelijken met andere systemen zie je pas goed wat het bijzonder maakt. We bekijken twee **additieve** systemen (Egyptisch en Romeins) en één ander **plaatswaardesysteem** (Babylonisch).

:::question Denk eerst zelf na
Een Romeinse koopman en een Babylonische schrijver moeten allebei het getal 75 noteren. De Romein schrijft LXXV, de Babyloniër zet één spijker, een kleine tussenruimte, en dan één hoek en vijf spijkers. Wie van de twee gebruikt de positie van een teken om de waarde te bepalen? En wie kan het makkelijkst twee van zulke getallen optellen?
:::

## Additieve systemen: tekens optellen

In een **additief** systeem heeft elk teken een vaste waarde, ongeacht waar het staat. Om het getal te lezen, tel je de waarden van alle tekens op.

### Egyptische hiërogliefencijfers

In het oude Egypte werden getallen, vanaf ongeveer 3000 v.Chr., in hiërogliefen geschreven met een apart teken voor elke macht van tien:

| Waarde | Teken (beschrijving) |
|---|---|
| 1 | verticale streep |
| 10 | hielbeugel (een boogje, waarschijnlijk een kluister voor vee) |
| 100 | opgerold touw |
| 1.000 | waterlelie (lotus) |
| 10.000 | gebogen vinger |
| 100.000 | kikkervisje |
| 1.000.000 | geknielde godheid (Heh) met opgeheven armen |

Om 4.622 te schrijven, zoals op een steen in de tempel van Karnak, herhaal je elk teken zo vaak als nodig: vier lelies, zes touwrollen, twee hielbeugels en twee streepjes. Samen veertien tekens. De volgorde maakt voor de waarde niets uit; een Egyptische schrijver groepeerde ze wel netjes, maar een teken "verandert" niet van waarde door het te verplaatsen.

Opvallend: een Egyptische schrijver heeft **geen nul nodig**. Zijn er geen honderdtallen, dan schrijf je gewoon geen touwrollen. Het nadeel is de lengte: hoe groter de cijfers, hoe meer tekens. Het getal 999 vraagt $9 + 9 + 9 = 27$ tekens.

### Romeinse cijfers

Het Romeinse systeem gebruikt zeven letters:

| I | V | X | L | C | D | M |
|---|---|---|---|---|---|---|
| 1 | 5 | 10 | 50 | 100 | 500 | 1000 |

Doordat er ook tekens voor 5, 50 en 500 zijn, blijven getallen korter dan in het Egyptisch. De basisregel is optellen: XXVII = $10 + 10 + 5 + 1 + 1 = 27$.

Daarnaast is er de **subtractieve notatie**: staat een kleiner teken direct vóór een groter, dan trek je het af. De gebruikelijke combinaties zijn:

| IV | IX | XL | XC | CD | CM |
|---|---|---|---|---|---|
| 4 | 9 | 40 | 90 | 400 | 900 |

De Romeinen zelf waren hierin niet consequent. Op het Colosseum (voltooid rond 80 n.Chr.) staat boven een van de ingangen XLIIII voor 44, en op veel klokken staat nog altijd IIII in plaats van IV. De strikte regels die je nu op school leert, zijn pas in latere eeuwen een vaste gewoonte geworden.

:::example MCMXCIV lezen
**Stap 1 – Knip in stukken die bij elkaar horen.** Zoek eerst de subtractieve paren (een klein teken vóór een groter): M · CM · XC · IV.

**Stap 2 – Geef elk stuk zijn waarde.** M = 1000, CM = $1000 - 100 = 900$, XC = $100 - 10 = 90$, IV = $5 - 1 = 4$.

**Stap 3 – Tel op.** $1000 + 900 + 90 + 4 = 1994$.

**Valkuil.** Wie alle letters gewoon optelt, krijgt $1000 + 100 + 1000 + 10 + 100 + 1 + 5 = 2216$. Dat kan niet kloppen: de M's zijn samen al 2000, en de rest zou dan nog 216 moeten zijn.
:::

Speel met de widget: typ een getal en bekijk hoe het in Romeinse cijfers wordt opgebouwd, of andersom.

{{ widget: roman value=1994 }}

:::theory Waarom rekenden de Romeinen niet met hun cijfers?
Probeer XLVII en LXVIII onder elkaar op te tellen zoals je met gewone cijfers doet. Het lukt niet: er zijn geen vaste posities, en een X kan in het ene getal "plus tien" en in het andere "min tien" betekenen. Romeinen rekenden daarom met steentjes (*calculi*, waar ons woord "calculeren" van komt) op een telbord of abacus, en gebruikten de cijfers alleen om de uitkomst vast te leggen. Een **nul** hadden ze niet en ook niet nodig: een lege rij op het telbord zei genoeg.
:::

![Het getal 1999 in drie systemen](/images/diagrams/m02-additief-vs-plaatswaarde.svg "Hoeveel tekens kost 1999? Egyptisch 28, Romeins 7, plaatswaarde 4. Eigen diagram.")

{{ exercises: 02-017, 02-018, 02-019, 02-020 }}

## Het Babylonische zestigtallige stelsel

De Sumeriërs en na hen de Babyloniërs in Mesopotamië (het huidige Irak) gebruikten al in het derde millennium v.Chr. een rekensysteem op basis van zestig. In de Oudbabylonische periode, ruwweg 1900–1600 v.Chr., was dat uitgegroeid tot een volwaardig **plaatswaardesysteem**: het oudste dat we kennen.

:::theory Twee niveaus in één systeem
Binnen één positie werkt het Babylonische schrift additief. Met de **hoek** (10) en de **spijker** (1) maak je elk "cijfer" van 1 tot en met 59: 23 is twee hoeken en drie spijkers, 59 is vijf hoeken en negen spijkers.

*Tussen* de posities werkt het als plaatswaarde, met grondtal 60. Elke positie naar links is zestig keer zoveel waard:

| Positie (van rechts) | Plaatswaarde |
|---|---|
| 1e | 1 |
| 2e | 60 |
| 3e | $60 \times 60 = 3600$ |
| 4e | $60 \times 3600 = 216\,000$ |
:::

Historici schrijven Babylonische getallen meestal in onze cijfers, met komma's tussen de posities. Omdat de komma bij ons al de decimale komma is, gebruiken we in deze module een verticale streep. Zo betekent $1 \mid 15$: "1 op de zestigtallenpositie, 15 op de eenhedenpositie".

$$
1 \mid 15 = 1 \cdot 60 + 15 = 75
$$

{{ widget: babylonian value=75 }}

:::formula Zestigtallig omrekenen
$$
a \mid b \mid c = a \cdot 3600 + b \cdot 60 + c
$$
Elk van $a$, $b$ en $c$ is een "cijfer" van 0 tot en met 59.
:::

:::example Van Babylonisch naar ons stelsel en terug
**Heen.** Wat is $2 \mid 3 \mid 4$ in ons stelsel?

$$
2 \cdot 3600 + 3 \cdot 60 + 4 = 7200 + 180 + 4 = 7384
$$

**Terug.** Schrijf 7.384 zestigtallig.

**Stap 1 – Hoeveel keer past 3600?** $7384 \div 3600 = 2$, want $2 \cdot 3600 = 7200$ en $3 \cdot 3600 = 10\,800$ is te veel. Rest: $7384 - 7200 = 184$.

**Stap 2 – Hoeveel keer past 60 in de rest?** $184 \div 60 = 3$, want $3 \cdot 60 = 180$. Rest: $184 - 180 = 4$.

**Stap 3 – Wat overblijft zijn eenheden.** 4.

**Resultaat:** $7384 = 2 \mid 3 \mid 4$. Je begint dus bij de grootste plaatswaarde die past, net zoals je in ons stelsel eerst de duizendtallen bepaalt.

**Valkuil.** Wie meteen door 60 deelt, vindt $7384 = 123 \cdot 60 + 4$. Maar 123 is groter dan 59 en past dus niet op één positie: die 123 zestigtallen moet je nog inwisselen in $2 \cdot 60 + 3$, oftewel 2 keer 3600 en 3 keer 60.
:::

{{ widget: babylonian value=7384 }}

### Het probleem van de lege positie

Hoe schrijf je in dit systeem 3.601? Dat is $1 \cdot 3600 + 0 \cdot 60 + 1$, dus $1 \mid 0 \mid 1$. Maar wat zet je op die lege middelste positie? Lange tijd lieten schrijvers daar alleen wat ruimte open, en die ruimte is op een kleitablet lastig te meten. Pas later, uiterlijk rond 300 v.Chr. in de Seleucidische periode, kwam er een apart teken voor: twee schuine wiggen. Dit **plaatshouder-teken** werd in wiskundige teksten alleen tussen andere cijfers gebruikt, niet aan het eind; alleen sommige astronomen zetten het soms ook achteraan. Of $1 \mid 15$ dus 75 betekende, of $1 \mid 15 \mid 0 = 4500$, moest de lezer nog altijd uit de context halen.

Ook een "zestigtallige komma" ontbrak: hetzelfde schrift kon een geheel getal of een getal met een gebroken deel voorstellen. De Babyloniërs rekenden er toch mee, en met verbluffende precisie.

![Kleitablet YBC 7289 met een benadering van de wortel uit 2](/images/history/m02-ybc7289.jpg "Kleitablet YBC 7289 (Oudbabylonisch, ca. 1800–1600 v.Chr.), Yale Babylonian Collection. Langs de diagonaal van het vierkant staat zestigtallig 1;24,51,10, een benadering van de wortel uit 2 die minder dan een miljoenste afwijkt. Foto: A. Urcia, Yale Peabody Museum; bewerking: Theodor Langhorne Franklin. CC0, via Wikimedia Commons.")

Op dit beroemde tablet staat langs de diagonaal van een vierkant het getal dat historici schrijven als 1;24,51,10. De puntkomma is hier een moderne toevoeging die het gehele deel scheidt van het gebroken deel. In ons stelsel is dat

$$
1 + \frac{24}{60} + \frac{51}{3600} + \frac{10}{216\,000} \approx 1{,}4142130
$$

Vergelijk dat met $\sqrt{2} = 1{,}4142136\ldots$: het verschil is nog geen miljoenste. Breuken en wortels komen in latere modules aan bod; hier gaat het om het idee dat posities ook ná het gehele deel doorlopen.

{{ exercises: 02-021, 02-022 }}

## Waarom zestig?

Niemand weet zeker waarom de Sumeriërs voor zestig kozen. Er zijn verschillende verklaringen, en geen ervan is bewezen:

- **Veel delers.** Zestig is het kleinste getal dat deelbaar is door 1, 2, 3, 4 en 5 (en daarmee ook door 6). Dit argument werd al in de 4e eeuw n.Chr. genoemd door Theon van Alexandrië. Een derde, een kwart, een vijfde, een zesde en een twaalfde van 60 zijn allemaal gehele getallen. Voor het verdelen van graan, zilver of land is dat bijzonder handig.
- **Maten en gewichten.** De wetenschapshistoricus Otto Neugebauer dacht dat het systeem voortkwam uit bestaande maat- en gewichtseenheden die in derden en andere delen werden opgesplitst.
- **Tellen op de vingers.** Met de duim kun je op één hand twaalf vingerkootjes aanwijzen (drie per vinger, vier vingers). Houd je met de vijf vingers van de andere hand bij hoeveel keer je rond bent geweest, dan tel je tot $12 \times 5 = 60$.

Vergelijk de delers van 10 en 60:

| Getal | Delers | Aantal |
|---|---|---|
| 10 | 1, 2, 5, 10 | 4 |
| 60 | 1, 2, 3, 4, 5, 6, 10, 12, 15, 20, 30, 60 | 12 |

Met een tientallig stelsel kun je een derde niet netjes schrijven (0,333...); met een zestigtallig stelsel wel: een derde van 60 is 20.

## Zestig in je dagelijks leven

Het zestigtallige stelsel is nooit helemaal verdwenen. Via Griekse astronomen, onder wie Ptolemaeus (2e eeuw n.Chr.), die zestigtallige breuken gebruikte, en via astronomen in de islamitische wereld bleef het in de sterrenkunde bewaard. Daardoor rekenen we nog steeds:

- **Tijd:** 1 uur = 60 minuten, 1 minuut = 60 seconden. Een duur van 1 uur, 15 minuten en 40 seconden is in feite het zestigtallige getal $1 \mid 15 \mid 40$ seconden.
- **Hoeken:** een cirkel heeft 360 graden ($6 \times 60$), en een graad wordt verdeeld in 60 boogminuten van elk 60 boogseconden. Geografische coördinaten staan nog vaak in graden, minuten en seconden.

$$
1 \mid 15 \mid 40 = 1 \cdot 3600 + 15 \cdot 60 + 40 = 3600 + 900 + 40 = 4540 \text{ seconden}
$$

Zo rekenen we dagelijks, zonder het te merken, in twee stelsels tegelijk: tientallig voor bedragen en aantallen, zestigtallig voor de klok.

## Zelfstandig oefenen

{{ exercises: 02-023, 02-024, 02-025 }}
