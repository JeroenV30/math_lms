# Spaarplannen, annuïteiten en hypotheken

In de vorige lessen ging het steeds om één bedrag dat je vooruit of terug in de tijd verplaatst. In het echte leven gaat het vaak om een **reeks** gelijke bedragen: elke maand € 100 sparen, elk jaar een pensioenuitkering, elke maand een hypotheektermijn. Zo'n reeks gelijke betalingen met gelijke tussenpozen heet een **annuïteit** (van het Latijnse *annus*, jaar). Met de somformule van een meetkundige rij uit module 28 kun je zulke reeksen in één keer optellen.

## Een spaarplan: de eindwaarde van een reeks

Stel dat je vijf jaar lang aan het **eind** van elk jaar € 1.000 inlegt op een rekening met 4% rente per jaar. Hoeveel staat er direct na de laatste inleg op de rekening?

Elke inleg heeft een andere hoeveelheid tijd om te groeien. De eerste inleg (eind jaar 1) staat nog vier jaar uit, de laatste (eind jaar 5) nul jaar.

![Tijdlijn van vijf jaarlijkse inleggen die elk een ander aantal jaren rente krijgen](/images/diagrams/m33-spaarplan.svg "Eindwaarde van een spaarplan: elke inleg groeit tot het eindmoment, en daarna tel je op. Eigen diagram.")

| inleg aan het eind van jaar | jaren rente tot eind jaar 5 | waarde aan het eind van jaar 5 |
|---|---|---|
| 1 | 4 | $1000 \cdot 1{,}04^4 \approx 1169{,}86$ |
| 2 | 3 | $1000 \cdot 1{,}04^3 \approx 1124{,}86$ |
| 3 | 2 | $1000 \cdot 1{,}04^2 = 1081{,}60$ |
| 4 | 1 | $1000 \cdot 1{,}04 = 1040{,}00$ |
| 5 | 0 | $1000$ |

Van onder naar boven gelezen staat hier de meetkundige rij $1000,\ 1000 \cdot 1{,}04,\ 1000 \cdot 1{,}04^2,\ \ldots$ met beginterm $1000$ en reden $1{,}04$. Met de somformule uit module 28:

$$
S = 1000 \cdot \frac{1{,}04^5 - 1}{1{,}04 - 1} = 1000 \cdot \frac{1{,}2166529 - 1}{0{,}04} \approx 1000 \times 5{,}416323 \approx 5416{,}32.
$$

Je hebt € 5.000 ingelegd; € 416,32 is rente (en rente op rente).

:::formula Eindwaarde van een reeks (spaarplan)
Bij $n$ gelijke inleggen $T$ aan het **eind** van elke periode en een rente $i$ per periode is de waarde direct na de laatste inleg
$$
EW = T \cdot \frac{(1+i)^n - 1}{i}.
$$
:::

De noemer $i$ is precies $r - 1$ uit de somformule, want de reden is $r = 1 + i$.

:::warning Begin of eind van de periode?
Leg je aan het **begin** van elke periode in, dan krijgt elke inleg één periode extra rente. De eindwaarde (gemeten aan het eind van de laatste periode) is dan $(1+i)$ keer zo groot: in het voorbeeld $5416{,}32 \times 1{,}04 \approx 5632{,}98$. Lees in een opgave dus altijd *wanneer* er wordt ingelegd en *op welk moment* naar de waarde wordt gevraagd. In deze module is het standaard: aan het eind van elke periode.
:::

:::example Twintig jaar sparen voor een pensioenaanvulling
Iemand legt twintig jaar lang aan het eind van elk jaar € 1.200 in tegen 4% per jaar.

- Groeifactor over twintig jaar: $1{,}04^{20} \approx 2{,}191123$.
- Eindwaarde: $1200 \cdot \dfrac{2{,}191123 - 1}{0{,}04} \approx 1200 \times 29{,}778 \approx 35733{,}69$.

De inleg is in totaal $20 \times 1200 = 24000$ euro; de rente brengt er dus bijna € 11.734 bij. Hoe langer de looptijd, hoe groter het aandeel van de rente: dat is het exponentiële effect dat je in de vorige lessen zag.
:::

{{ exercises: 33-018, 33-019 }}

## Een lening aflossen: de annuïteit

Draai het nu om. Je leent een bedrag $L$ en betaalt dat terug in $n$ gelijke termijnen $A$ aan het eind van elke periode. Hoe groot moet $A$ zijn?

Gebruik het vergelijkingsprincipe uit de vorige les. De bank leent je nu $L$ en krijgt daarvoor later $n$ betalingen terug. Voor de bank moeten die twee **gelijkwaardig** zijn bij de rente $i$: de contante waarde van alle termijnen samen is precies het geleende bedrag.

$$
L = \frac{A}{1+i} + \frac{A}{(1+i)^2} + \ldots + \frac{A}{(1+i)^n}.
$$

Rechts staat weer een meetkundige rij, nu met reden $\frac{1}{1+i}$. Optellen met de somformule en vereenvoudigen geeft:

:::formula Contante waarde van een reeks en annuïteit
$$
CW = A \cdot \frac{1 - (1+i)^{-n}}{i} \qquad\Longleftrightarrow\qquad A = L \cdot \frac{i}{1 - (1+i)^{-n}}
$$
De factor $\dfrac{i}{1-(1+i)^{-n}}$ heet de **annuïteitsfactor**.
:::

:::example Een lening van € 20.000 in vier jaar
Je leent € 20.000 tegen 5% per jaar en lost af in vier gelijke jaarlijkse termijnen.

- $1{,}05^{-4} \approx 0{,}822702$, dus $1 - 1{,}05^{-4} \approx 0{,}177298$.
- Annuïteitsfactor: $0{,}05 : 0{,}177298 \approx 0{,}282012$.
- Annuïteit: $A \approx 20000 \times 0{,}282012 \approx 5640{,}24$.

Elk jaar betaal je dus € 5.640,24, in totaal € 22.560,95. Daarvan is € 2.560,95 rente.
:::

### Rentedeel en aflossingsdeel

Elke termijn bestaat uit twee delen. Eerst betaal je de **rente** over de schuld die op dat moment openstaat. Wat er van de termijn overblijft, is **aflossing**: daarmee wordt de schuld kleiner. Zet je dat jaar voor jaar onder elkaar, dan krijg je een **aflossingsschema**.

| jaar | schuld begin jaar | rente (5%) | aflossing | schuld eind jaar |
|---|---|---|---|---|
| 1 | € 20.000,00 | € 1.000,00 | € 4.640,24 | € 15.359,76 |
| 2 | € 15.359,76 | € 767,99 | € 4.872,25 | € 10.487,51 |
| 3 | € 10.487,51 | € 524,38 | € 5.115,86 | € 5.371,65 |
| 4 | € 5.371,65 | € 268,58 | € 5.371,65 | € 0,00 |

(De bedragen zijn met onafgeronde waarden berekend en daarna op centen afgerond; in een rij kan daardoor een cent verschil zitten.)

Zie het patroon: de termijn is steeds gelijk, maar het **rentedeel daalt** (de schuld wordt kleiner) en het **aflossingsdeel stijgt**. Het aflossingsdeel groeit zelfs elk jaar met precies 5%: $4640{,}24 \times 1{,}05 \approx 4872{,}25$. Dat is geen toeval. Omdat de termijn gelijk blijft, moet elke euro rente die je minder betaalt naar de aflossing gaan, en de rentebesparing is 5% van de vorige aflossing.

{{ exercise: 33-020 }}

## De annuïteitenhypotheek en de lineaire hypotheek

Bij het kopen van een huis is een hypotheek de grootste lening die de meeste mensen ooit afsluiten. In Nederland moet een hypotheek die na 1 januari 2013 is afgesloten, voor de **hypotheekrenteaftrek** in maximaal 30 jaar minstens volgens een annuïtair schema worden afgelost. In de praktijk kiezen de meeste kopers daarom tussen twee vormen.

:::definition Annuïteitenhypotheek en lineaire hypotheek
- Bij een **annuïteitenhypotheek** is de bruto maandlast (rente plus aflossing) gedurende de rentevaste periode **gelijk**. In het begin is die termijn vooral rente, aan het eind vooral aflossing.
- Bij een **lineaire hypotheek** los je elke maand **hetzelfde bedrag** af: het geleende bedrag gedeeld door het aantal maanden. De rente daalt mee met de schuld, dus de maandlast begint hoog en daalt elke maand.
:::

Hypotheken worden per maand afgelost. Banken rekenen met een **maandrente gelijk aan de jaarrente gedeeld door 12** (de nominale conventie uit de vorige les). Bij 4% per jaar is dat $\frac{0{,}04}{12} = 0{,}0033\ldots$ per maand.

:::example Annuïteitenhypotheek van € 300.000
€ 300.000, looptijd 30 jaar (360 maanden), rente 4% per jaar, dus $i = \frac{0{,}04}{12}$ per maand.

- $(1 + \tfrac{0{,}04}{12})^{-360} \approx 0{,}301796$, dus $1 - 0{,}301796 = 0{,}698204$.
- Maandlast: $A = 300000 \cdot \dfrac{0{,}04/12}{0{,}698204} \approx 300000 \times 0{,}0047742 \approx 1432{,}25$.

De eerste maanden van het aflossingsschema (zoals de bank het afrondt op centen):

| maand | schuld begin maand | rente | aflossing | schuld eind maand |
|---|---|---|---|---|
| 1 | € 300.000,00 | € 1.000,00 | € 432,25 | € 299.567,75 |
| 2 | € 299.567,75 | € 998,56 | € 433,69 | € 299.134,06 |
| 3 | € 299.134,06 | € 997,11 | € 435,14 | € 298.698,92 |

In de eerste maand is ruim twee derde van de maandlast rente: $1000 : 1432{,}25 \approx 0{,}70$. Pas in maand 153, na bijna 13 jaar, wordt het aflossingsdeel groter dan het rentedeel.
:::

In het honderdveld hieronder staat elk vakje voor 1% van de eerste maandlast; de gekleurde vakjes zijn het rentedeel.

{{ widget: percent-grid value=70 }}

:::example Lineaire hypotheek van € 300.000
Zelfde bedrag, looptijd en rente, maar nu lineair.

- Aflossing per maand: $300000 : 360 \approx 833{,}33$.
- Rente in maand 1: $300000 \times \frac{0{,}04}{12} = 1000$. Maandlast in maand 1: $833{,}33 + 1000 = 1833{,}33$.
- Na elke maand is de schuld € 833,33 lager, dus de rente elke maand $833{,}33 \times \frac{0{,}04}{12} \approx 2{,}78$ euro lager.
- Rente in de laatste maand: $833{,}33 \times \frac{0{,}04}{12} \approx 2{,}78$. Maandlast: ongeveer € 836,11.

De maandlast daalt dus lineair van € 1.833,33 naar € 836,11.
:::

![Twee gestapelde staafdiagrammen: rente en aflossing per jaar bij een annuïteitenhypotheek en een lineaire hypotheek](/images/diagrams/m33-annuiteit-lineair.svg "Rente (oranje) en aflossing (blauw) per jaar bij een hypotheek van € 300.000 over 30 jaar tegen 4%. Links annuïtair: gelijke totale hoogte. Rechts lineair: gelijke aflossing, dalende rente. Eigen diagram.")

Welke vorm is "beter"? Dat is geen rekenvraag alleen.

- Bij de **lineaire** hypotheek betaal je in totaal minder rente, omdat je in het begin sneller aflost. Over de hele looptijd scheelt dat in dit voorbeeld ruim € 35.000 (je berekent het zelf in de opgaven).
- Bij de **annuïteitenhypotheek** zijn de lasten in de eerste jaren veel lager (€ 1.432,25 tegen € 1.833,33), en dat zijn vaak juist de jaren waarin het budget krap is. Daarom kunnen kopers met hetzelfde inkomen een hoger bedrag annuïtair lenen dan lineair.

:::tip Totale rente is niet het hele verhaal
Dat je bij een lineaire hypotheek minder rente betaalt, komt doordat je de bank sneller terugbetaalt: je leent gemiddeld minder lang. Met contante waarden gerekend, tegen de hypotheekrente zelf, zijn beide schema's voor de bank precies even veel waard: allebei € 300.000. Of het voor jou gunstig is om sneller af te lossen, hangt af van wat je anders met dat geld had kunnen doen.
:::

{{ exercises: 33-021, 33-022, 33-023, 33-024, 33-025 }}

## Terugrekenen bij reeksen

Ook bij reeksen kun je de vraag omdraaien: hoeveel moet ik per maand sparen om een doel te halen, of hoe lang duurt het? Je gebruikt dezelfde formules en lost de onbekende op.

:::example Hoeveel per maand voor € 15.000 over vijf jaar?
Je wilt over vijf jaar € 15.000 hebben, bijvoorbeeld voor een verbouwing. Je spaart aan het eind van elke maand een vast bedrag $T$ tegen 0,25% per maand.

- Aantal termijnen: $n = 60$. Groeifactor: $1{,}0025^{60} \approx 1{,}161617$.
- Eindwaardefactor: $\dfrac{1{,}161617 - 1}{0{,}0025} \approx 64{,}647$.
- Uit $T \times 64{,}647 = 15000$ volgt $T \approx 232{,}03$.

Je moet ongeveer € 232,03 per maand opzij zetten. Zonder rente zou het € 250 per maand zijn; de rente scheelt je bijna € 18 per maand.
:::

{{ exercises: 33-026, 33-027 }}
