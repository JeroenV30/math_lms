## Van kerf naar teken

Een kerfstok met 48 kerven werkt, maar is onhandig: om het aantal te lezen moet je opnieuw tellen. Turven is al een verbetering, omdat je per vijf groepeert. De volgende stap ligt voor de hand: geef een **groep** een eigen teken. Dan hoef je niet meer tien streepjes te zetten, maar één teken dat "tien" betekent.

Precies dat deden de eerste schrijvende culturen. Ze kozen een paar **basiswaarden** (bijvoorbeeld 1, 10, 100) en gaven elk een eigen symbool. Een getal schreef je dan door die symbolen zo vaak te herhalen als nodig was, en hun waarden op te tellen. Zo'n systeem heet **additief**: de waarde van het geheel is de som van de waarden van de tekens.

In deze les bekijk je drie systemen: het Egyptische, het Babylonische en het Romeinse. Je hoeft ze niet uit je hoofd te leren. Het gaat erom dat je ziet dat hetzelfde getal er heel verschillend uit kan zien, en dat het getal zelf, de abstracte hoeveelheid, steeds hetzelfde blijft.

## Egyptische hiërogliefencijfers

De Egyptenaren schreven vanaf ongeveer 3000 v.Chr. getallen met hiërogliefen. Ze gebruikten een tientallig stelsel: er was een apart teken voor 1, 10, 100, 1.000, 10.000, 100.000 en 1.000.000.

![Tabel met de zeven Egyptische hiërogliefencijfers](/images/diagrams/m01-egyptische-cijfers.svg "De zeven Egyptische getaltekens (schematisch getekend): streep, boog, opgerold touw, lotusbloem, vinger, kikkervisje en de god Heh.")

Een getal schreef je door van elk teken het juiste aantal te zetten, meestal de grote waarden eerst. Elk teken kwam hooguit negen keer voor: tien bogen werden immers één touwrol. De tekens werden vaak netjes in kleine stapeltjes gegroepeerd, zodat je ze in één oogopslag kon aflezen, en ze konden zowel van links naar rechts als van rechts naar links geschreven worden.

:::example Een Egyptisch getal lezen
![Drie lotusbloemen, twee touwrollen, vier bogen en zes streepjes](/images/diagrams/m01-egyptisch-getal-a.svg "Een getal in hiërogliefen.")

**Denkstap 1.** Herken de tekens en tel ze per soort: 3 lotusbloemen, 2 touwrollen, 4 bogen en 6 streepjes.

**Denkstap 2.** Reken elke soort om: $3 \times 1\,000 = 3\,000$, $2 \times 100 = 200$, $4 \times 10 = 40$, $6 \times 1 = 6$.

**Denkstap 3.** Tel op: $3\,000 + 200 + 40 + 6 = 3\,246$.
:::

Het voordeel van dit systeem is dat het heel doorzichtig is: wat je ziet, tel je op. Het nadeel is dat grote getallen veel tekens vragen. Op een steen uit de tempel van Karnak, van rond 1500 v.Chr., staat bijvoorbeeld het getal 276, en daarvoor zijn vijftien tekens nodig: twee touwrollen, zeven bogen en zes streepjes. Wij hebben er drie cijfers voor nodig.

Er is nog een interessant verschil. Om 21.507 te schrijven, zet een Egyptenaar 2 vingers, 1 lotus, 5 touwrollen en 7 streepjes. Dat er geen tientallen zijn, zie je simpelweg doordat er geen bogen staan. Wij moeten in 21.507 juist een **0** schrijven om de lege plek aan te geven. Waarom dat zo is, en hoe lang het duurde voordat de nul bestond, is het onderwerp van module 2.

{{ exercises: 01-027, 01-028 }}

## Babylonisch spijkerschrift (kort)

In Mesopotamië schreven schrijvers met een rietstift in natte klei. Daardoor ontstonden wigvormige indrukken: het *spijkerschrift*. Voor getallen gebruikten de Babyloniërs maar **twee tekens**: een verticale "spijker" voor 1 en een "winkelhaak" voor 10.

![Het Babylonische teken voor 1 (spijker) en voor 10 (winkelhaak)](/images/diagrams/m01-babylonische-tekens.svg "Twee basistekens: de spijker (1) en de winkelhaak (10).")

Getallen tot en met 59 schreven ze additief: eerst de winkelhaken, dan de spijkers. Het getal 47 bestaat dus uit 4 winkelhaken en 7 spijkers.

{{ widget: babylonian value=47 }}

Bij 60 gebeurde er iets bijzonders: de Babyloniërs begonnen dan opnieuw, op een volgende **plaats**, net zoals wij na 9 een nieuw cijfer links zetten. Hun stelsel was dus zestigtallig en gebruikte *plaatswaarde*. Dat is een van de grote uitvindingen in de geschiedenis van de wiskunde, en je leert er in module 2 alles over. Voorlopig blijven we onder de 60.

## Romeinse cijfers

De Romeinen namen hun getaltekens grotendeels over van de Etrusken, hun buren in Midden-Italië. In de vorm die wij kennen, gebruiken ze zeven letters:

| I | V | X | L | C | D | M |
|---|---|---|---|---|---|---|
| 1 | 5 | 10 | 50 | 100 | 500 | 1000 |

Anders dan de Egyptenaren hadden de Romeinen ook tekens voor de "halve" stappen 5, 50 en 500. Daardoor hoef je een teken nooit meer dan drie of vier keer te herhalen. De basisregel is additief: schrijf de tekens van groot naar klein en tel op. Zo is $\text{MDCLXVI} = 1000 + 500 + 100 + 50 + 10 + 5 + 1 = 1666$.

Daarnaast is er een **aftrekregel**: staat een kleiner teken direct vóór een groter, dan trek je het af. In de moderne standaardvorm gebeurt dat alleen in zes combinaties:

$$
\text{IV} = 4 \quad \text{IX} = 9 \quad \text{XL} = 40 \quad \text{XC} = 90 \quad \text{CD} = 400 \quad \text{CM} = 900
$$

:::example Romeinse cijfers lezen
**Vraag.** Welk getal is MCMLXXXIV?

**Denkstap 1.** Splits het getal in blokken, en let op waar een kleiner teken vóór een groter staat: M · CM · L · XXX · IV.

**Denkstap 2.** Reken elk blok uit: $\text{M} = 1000$, $\text{CM} = 1000 - 100 = 900$, $\text{L} = 50$, $\text{XXX} = 30$, $\text{IV} = 5 - 1 = 4$.

**Denkstap 3.** Tel op: $1000 + 900 + 50 + 30 + 4 = 1984$.

**Typische fout.** Wie alle tekens gewoon optelt, krijgt $1000 + 100 + 1000 + 50 + 10 + 10 + 10 + 1 + 5 = 2186$.
:::

{{ widget: roman value=1984 }}

:::history Rome, 1e eeuw n.Chr.
De aftrekregel was in de Oudheid lang niet zo vast als nu. Op de genummerde toegangspoorten van het Colosseum, gebouwd rond 70–80 n.Chr., wordt voor 4 systematisch IIII geschreven in plaats van IV; poort 44 heet daar bijvoorbeeld XLIIII. Ook op veel klokken staat nog altijd IIII. Romeinse cijfers hebben geen teken voor nul en werden vanaf de veertiende eeuw in Europa geleidelijk verdrongen door de Hindoe-Arabische cijfers die wij gebruiken.
:::

![Ingang LII van het Colosseum met het getal boven de boog](/images/history/m01-colosseum-ingang-lii.jpg "Ingang LII (52) van het Colosseum in Rome. Foto: WarpFlyght, Wikimedia Commons, CC BY-SA 3.0.")

{{ exercises: 01-029, 01-030 }}

## Wat maakt een getalsysteem goed?

Drie systemen, drie keer hetzelfde idee: groepeer, geef groepen een teken, en tel de tekens op. De verschillen zitten in de details:

| | Egyptisch | Babylonisch (tot 59) | Romeins |
|---|---|---|---|
| Basistekens | 1, 10, 100, … | 1 en 10 | 1, 5, 10, 50, 100, 500, 1000 |
| Principe | optellen | optellen | optellen, soms aftrekken |
| Teken voor nul | nee | nee (pas later een plaatshouder) | nee |
| Tekens voor 276 | 15 | – | 7 (CCLXXVI) |

Geen van deze systemen is geschikt om handig in te *rekenen*: probeer maar eens $\text{XLVII} \times \text{CCLXXVI}$ uit te rekenen zonder over te stappen op onze cijfers. Daarvoor is het **positiestelsel** nodig, waarin de plaats van een cijfer zijn waarde bepaalt, en waarvoor je een nul nodig hebt. Dat is precies het verhaal van de volgende module.

## Zelfstandig oefenen

{{ exercises: 01-031, 01-032, 01-033, 01-034 }}
