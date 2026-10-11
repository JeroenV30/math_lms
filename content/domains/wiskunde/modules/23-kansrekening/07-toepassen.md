# Een model toetsen aan waarnemingen

Je hebt nu het gereedschap: uitkomstenruimten, tellen, complement, som, product en kansbomen. In deze laatste inhoudelijke les gebruik je het in vier situaties waarin onze intuïtie vaak tekortschiet: waarnemingen tegenover een model, de gokkersdwaling, de verjaardagsparadox en de medische test.

## Relatieve frequentie tegenover het model

Bij 200 worpen met een dobbelsteen valt 38 keer zes. De relatieve frequentie is $\frac{38}{200}=0{,}19$. Het eerlijke model zegt $\frac16\approx0{,}167$. Is de dobbelsteen oneerlijk?

Het verschil bewijst op zichzelf niets. Ook met een perfect eerlijke dobbelsteen verwacht je in 200 worpen gemiddeld ongeveer 33 zessen, maar je krijgt vrijwel nooit precies dat aantal. Waarnemingen **variëren** om het model heen. De wet van de grote aantallen zegt dat die variatie in aandeel kleiner wordt naarmate je vaker gooit, niet dat ze verdwijnt. De vraag "is 38 te veel?" beantwoord je pas met een kansmodel voor de variatie zelf; dat is het onderwerp van toetsende statistiek, in module 39. Voor nu volstaat dit: *een kleine afwijking is geen bewijs, een grote afwijking bij veel waarnemingen wel een reden tot argwaan.*

Je kunt dat zelf voelen met de simulatie van les 1. Gooi 20 keer en kijk hoe ver de staafjes uit elkaar liggen. Gooi dan 2000 keer.

{{ widget: dice dice=2 seed=11 }}

{{ exercises: 23-026 }}

:::tip Wel of niet te verwachten?
Een eerlijke dobbelsteen levert bij 600 worpen gemiddeld 100 zessen. Een uitslag van 95 of 108 is volkomen normaal. Een uitslag van 150 zou dat niet zijn. Hoe je dat getal "normaal" precies afbakent, leer je in de statistiek; de intuïtie die je nu opbouwt is dat de relatieve afwijking afneemt met het aantal waarnemingen, maar de absolute afwijking niet.
:::

## De gokkersdwaling

Bij roulette is zwart achtmaal achter elkaar gevallen. Wat is de kans op rood in de volgende ronde? Veel mensen denken dat rood "nu wel moet komen", om het evenwicht te herstellen. Dat is de **gokkersdwaling** (in het Engels *gambler's fallacy*).

De fout zit in het idee dat het toeval een geheugen heeft. Als de pogingen onafhankelijk zijn, doet de eerdere reeks er niet toe: het wiel, de munt of de dobbelsteen weet niet wat er voorheen gebeurde. De kans op rood is bij de negende ronde net zo groot als bij de eerste. Een kans van 20% betekent evenmin dat na vier mislukkingen de vijfde poging wel moet slagen. Eerdere mislukkingen creëren geen schuld die het toeval moet terugbetalen.

Wat wél waar is: een reeks van tien keer zwart heeft *vooraf* een kleine kans, $\left(\frac12\right)^{10}\approx0{,}001$ (nog afgezien van de nul bij roulette). Maar dat is een kans op de hele reeks, bekeken voordat je begint. Zodra negen keer zwart is gevallen, gaat het alleen nog om de tiende worp, en die heeft kans $\frac12$ op zwart.

:::warning Twee verschillende vragen
- "Wat is de kans op zes keer kop achter elkaar?" — $\left(\frac12\right)^6=\frac1{64}$. Dat is een kans op een reeks, vóór de eerste worp.
- "Vijf keer kop is gevallen. Wat is de kans op kop bij de zesde worp?" — $\frac12$. Het verleden verandert de kans niet, als de worpen onafhankelijk zijn.

Beide uitspraken kloppen en spreken elkaar niet tegen.
:::

{{ exercises: 23-027, 23-047 }}

## De verjaardagsparadox

Hoeveel mensen heb je nodig in een ruimte voordat er meer dan 50% kans is dat twee van hen op dezelfde dag jarig zijn? De meeste mensen noemen een getal rond de 180 (de helft van 365). Het juiste antwoord is verrassend: **23**.

We rekenen met aannames: elk jaar heeft 365 dagen, verjaardagen zijn gelijk verdeeld en de personen zijn onafhankelijk. ("Minstens twee op dezelfde dag" is een typische ‘minstens één’-vraag: gebruik het complement.)

**Stap 1 – complement.** Het complement is ‘alle verjaardagen verschillen’.

**Stap 2 – kansboom in gedachten.** De eerste persoon heeft een willekeurige verjaardag. De tweede moet een andere dag hebben: $\frac{364}{365}$. De derde moet verschillen van de eerste twee: $\frac{363}{365}$. Enzovoort.

**Stap 3 – product.** Voor $n$ personen:

$$
P(\text{alle verschillend})=\frac{365}{365}\times\frac{364}{365}\times\frac{363}{365}\times\cdots\times\frac{365-n+1}{365}.
$$

**Stap 4 – terug.** $P(\text{minstens twee gelijk})=1-P(\text{alle verschillend})$.

| aantal personen $n$ | kans op minstens één gedeelde verjaardag |
|---|---|
| 5 | 2,7% |
| 10 | 11,7% |
| 23 | 50,7% |
| 30 | 70,6% |
| 50 | 97,0% |
| 70 | 99,9% |

De paradox verdwijnt als je beseft *wat* je telt. Het gaat niet om de kans dat iemand jarig is op jouw verjaardag, maar om de kans dat *een willekeurig paar* dezelfde dag heeft. Bij 23 personen zijn er $\binom{23}{2}=253$ paren, en elk paar heeft een kleine kans. Die paren bij elkaar maken het onverwacht waarschijnlijk. Dat is precies het effect van het aantal combinaties uit les 3: de aantallen groeien veel sneller dan je verwacht.

:::example Drie personen
Wat is de kans dat van drie personen minstens twee op dezelfde dag jarig zijn?

$P(\text{alle verschillend})=\frac{365}{365}\times\frac{364}{365}\times\frac{363}{365}\approx0{,}9918$, dus
$P(\text{minstens twee gelijk})\approx1-0{,}9918=0{,}0082$: iets minder dan 1%.
:::

:::challenge 23 personen
Bereken de kans dat bij 23 willekeurige personen minstens twee op dezelfde dag jarig zijn. Gebruik een rekenmachine of spreadsheet voor het product van 23 breuken, en rond af op drie decimalen. Controleer of je boven de 50% uitkomt.
:::

{{ exercises: 23-045 }}

## De medische test: een vooruitblik

Een ziekte komt voor bij 1% van de bevolking. Een test herkent een zieke in 90% van de gevallen en geeft in 10% van de gezonde gevallen ten onrechte een positieve uitslag. Jij test positief. Hoe groot is de kans dat je écht ziek bent?

Veel mensen zeggen "90%". Het juiste antwoord is verbazingwekkend veel kleiner. Het helpt om niet met kansen maar met **aantallen** te werken. Neem 10 000 mensen.

| | positief | negatief | totaal |
|---|---|---|---|
| ziek (1%) | 90 | 10 | 100 |
| gezond (99%) | 990 | 8 910 | 9 900 |
| totaal | 1 080 | 8 920 | 10 000 |

Van de 100 zieken testen er 90 positief. Van de 9 900 gezonde mensen testen er 10%, dus 990, ten onrechte positief. Alle positieve uitslagen: $90+990=1080$. Daarvan is slechts

$$
\frac{90}{1080}=\frac1{12}\approx8{,}3\%
$$

werkelijk ziek. De reden is dat de ziekte zeldzaam is: de grote groep gezonden levert in absolute aantallen meer valse alarmen op dan de kleine groep zieken echte treffers.

Wat je hier hebt gedaan is eigenlijk een kansboom: eerst ziek of gezond, dan positief of negatief. Je berekende een omgekeerde conditionele kans: niet "kans op positief *gegeven* ziek" (90%) maar "kans op ziek *gegeven* positief" ($\frac1{12}$). Dat zijn verschillende dingen, en de verwarring ertussen komt in de praktijk ontzettend vaak voor, bij artsen en patiënten. De regel die dit ordent, is de **regel van Bayes**; die werken we uit in module 41. Houd voor nu twee dingen vast: werk met aantallen als dat helpt, en let op de kleine kans op de ziekte zelf.

{{ exercises: 23-046 }}

## Met en zonder terugleggen: het slotstuk

:::challenge Met en zonder terugleggen
Een zak bevat 4 rode en 2 blauwe ballen. Je trekt tweemaal. Bereken de kans op precies één rood, eerst met terugleggen en mengen, daarna zonder terugleggen. Beschrijf waarom de kansen verschillen.
:::

{{ exercises: 23-028, 23-029, 23-030 }}

## Foutenlijst

Bij het toepassen komen steeds dezelfde fouten terug. Controleer je antwoord op deze vijf punten.

1. **Optellen bij onafhankelijkheid.** ‘Vier worpen, elk $\frac16$, dus $\frac46$’: je telt overlap mee. Vermenigvuldig (of gebruik het complement).
2. **Gokkersdwaling.** Na een reeks tegenvallers is de volgende kans niet groter.
3. **Noemer niet aanpassen.** Bij trekken zonder terugleggen verandert het aantal ballen of kaarten in de zak.
4. **Volgorde wel of niet tellen.** Podium ($\frac{n!}{(n-k)!}$) tegenover commissie ($\binom nk$).
5. **Complement vergeten bij ‘minstens één’.** Reken $1-P(\text{geen})$ in plaats van alle gevallen op te tellen.
