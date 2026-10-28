## Wat blijft er gelijk?

In de vorige lessen kwam steeds hetzelfde terug: wat je aan kracht wint, verlies je aan weg. De hefboom, de takel, de helling en de schroef gedragen zich als een winkel die nooit korting geeft, maar wel van munt wisselt. Dat is geen toeval. Er is een grootheid die bij al die machines hetzelfde blijft, en die grootheid heet arbeid. Wie haar begrijpt, hoeft de machines niet meer één voor één te onthouden.

:::question
Je tilt een koffer van 20 kg recht omhoog naar een plank van 1,5 m hoogte. Je zou ook eerst een lange schuine plank kunnen gebruiken. Zou je daarbij “in totaal” minder inspanning leveren? Wat bedoel je eigenlijk met “in totaal”?
:::

## Arbeid

In het dagelijks leven heet alles wat moeite kost “werk”. In de natuurkunde is **arbeid** nauwkeuriger: een kracht die over een afstand in haar eigen richting werkt, verricht arbeid. Als de kracht $F$ constant is en de verplaatsing $s$ in dezelfde richting ligt:

$$
W = F \cdot s
$$

De eenheid is de **joule** (J): $1\ \text{J} = 1\ \text{N} \cdot 1\ \text{m}$. Een appel van ongeveer 100 gram tillen over één meter kost ruwweg 1 J. Arbeid hangt dus af van zowel kracht als weg. Een kracht zonder verplaatsing verricht geen arbeid in de natuurkundige zin: je kunt je arm moe houden bij het vasthouden van een koffer zonder dat de koffer enige arbeid ontvangt. De spier verbruikt wel energie, maar dat komt door de chemische werking van de spier, niet door verplaatsing van de last.

Het gewicht van een massa $m$ is $F_z = m \cdot g$, met $g \approx 9{,}8\ \text{m/s}^2$. De koffer van 20 kg weegt dus ongeveer $196\ \text{N}$, en tillen over 1,5 m kost $196 \cdot 1{,}5 = 294\ \text{J}$.

:::example De koffer
Een koffer van 20 kg wordt recht omhoog 1,5 m getild ($g = 9{,}8\ \text{m/s}^2$).

1. *Principe:* de kracht die nodig is om de koffer constant omhoog te brengen is gelijk aan het gewicht; $W = F \cdot s$.
2. *Gewicht:* $F = m g = 20 \cdot 9{,}8 = 196\ \text{N}$.
3. *Arbeid:* $W = 196\ \text{N} \cdot 1{,}5\ \text{m} = 294\ \text{J}$.
4. *Controle:* de eenheid klopt (N m = J) en de grootte is aannemelijk: een paar honderd joule is de energie van een korte inspanning, ongeveer wat een mens in een paar seconden kan leveren.
:::

## De gulden regel van de mechanica

Neem de kist uit de vorige les: 1200 N, 1 m omhoog. Recht omhoog kost dat $1200 \cdot 1 = 1200\ \text{J}$. Over de helling van 4 m met een kracht van 300 N kost het $300 \cdot 4 = 1200\ \text{J}$. Dat is hetzelfde getal. Bij de hefboom van les 2 kostte 100 N over 0,30 m en 600 N over 0,05 m beide 30 J. Bij de takel was het 400 J aan elke kant.

Dit is de **gulden regel van de mechanica**: wat je aan kracht wint, verlies je aan weg, zodat de arbeid gelijk blijft. Zonder wrijving verricht een eenvoudige machine evenveel arbeid op de last als jij erin stopt. Galilei verwoordde het rond 1600 als een ruil van kracht tegen snelheid; later werd het uitgewerkt tot het beginsel van de virtuele arbeid: je laat de machine in gedachten een klein stukje bewegen en vergelijkt de arbeid aan beide kanten. De regel is een van de eerste vormen van wat later het behoud van energie heet. Je kunt hem ook gebruiken als zelfcontrole: komt er bij een rekensom een machine uit die meer arbeid afgeeft dan hij ontvangt, dan heb je een fout gemaakt, of je hebt een energiebron over het hoofd gezien.

{{ exercises: 01-015, 01-016 }}

## Vermogen

De hoeveelheid arbeid zegt niets over de tijd waarin ze wordt verricht. Dezelfde 294 J kun je in drie seconden of in drie minuten verrichten. Het **vermogen** geeft aan hoe snel:

$$
P = \frac{W}{t}
$$

De eenheid is de **watt** (W): $1\ \text{W} = 1\ \text{J/s}$. Het is een tempo, geen hoeveelheid. Een machine met een klein vermogen kan wel dezelfde arbeid verrichten als een machine met een groot vermogen, maar doet er langer over. Een mens kan gedurende langere tijd ongeveer 100 W aan mechanische arbeid leveren, een fietser in training ongeveer 150 tot 200 W voor een uur. Een elektrische lift of motor vraagt vaak enkele kilowatt.

De eenheid watt is genoemd naar James Watt (1736–1819), die als maat voor het vermogen van stoommachines het paardenkracht gebruikte. Hij wilde zijn klanten laten zien hoeveel paarden een machine kon vervangen. Dat was waarschijnlijk mede een commerciële keuze: een meetbare maat maakt een machine vergelijkbaar en verkoopbaar.

## Rendement

In de werkelijkheid gaat niet alle toegevoerde arbeid naar de last. In elke machine is er wrijving: de touwen schuren langs de katrollen, de draad van een schroef slijpt langs de moer, de hellingplank houdt de kist tegen. Die arbeid verdwijnt niet, maar verandert in warmte die je niet meer kunt gebruiken. Het **rendement** $\eta$ (de Griekse letter eta) geeft aan welk deel van de toegevoerde arbeid nuttig is:

$$
\eta = \frac{W_{\text{nuttig}}}{W_{\text{toegevoerd}}}
$$

Je geeft het getal als breuk of als percentage. Het rendement is altijd kleiner dan 1 (kleiner dan 100%), en de rest is verlies.

![Energiestroom van een takel: 500 J erin, 400 J nuttig, 100 J warmte door wrijving](/images/technologie-en-informatica/m01-energiestroom.svg "Energiestroom bij een takel met rendement 80 procent — eigen tekening")

:::example Het rendement van een takel
Een takel hijst een last van 800 N over 0,50 m. Jij trekt met een kracht van 250 N aan een touw dat 2,0 m door je handen gaat.

1. *Nuttige arbeid:* $W_{\text{nuttig}} = 800\ \text{N} \cdot 0{,}50\ \text{m} = 400\ \text{J}$.
2. *Toegevoerde arbeid:* $W_{\text{toegevoerd}} = 250\ \text{N} \cdot 2{,}0\ \text{m} = 500\ \text{J}$.
3. *Rendement:* $\eta = 400 / 500 = 0{,}80$, dus 80%.
4. *Controle:* in een ideale takel met vier touwdelen was de kracht 200 N geweest. Je hebt 250 N nodig, dus het werkelijke mechanisch voordeel is $800 / 250 = 3{,}2$ in plaats van 4. De verhouding van die twee, $3{,}2 / 4 = 0{,}80$, is hetzelfde rendement. Dat is geen toeval: het rendement is ook de verhouding tussen het werkelijke en het ideale mechanisch voordeel. De verloren 100 J wordt warmte in de katrollen.
:::

{{ exercises: 01-017, 01-018 }}

## Wrijving

Wrijving is geen luxe voor de rekenaar, maar een grote ontwerpvraag. Ze is soms ongewenst, zoals in de lagers van een wiel, en soms noodzakelijk, zoals tussen een schoenzool en de grond of in de draad van een bout. Een nuttige beschrijving voor droge oppervlakken dateert van het eind van de 17e eeuw. Guillaume Amontons (1663–1705) formuleerde in 1699 de wetten die nog steeds het begin van elke behandeling zijn: de wrijvingskracht is evenredig met de kracht waarmee de oppervlakken tegen elkaar worden gedrukt (de normaalkracht), en vrijwel onafhankelijk van het oppervlak dat contact maakt.

$$
F_w = \mu \cdot F_n
$$

De wrijvingscoëfficiënt $\mu$ hangt af van de materialen en van hun toestand: staal op ijs is anders dan rubber op droog asfalt. Het is opmerkelijk dat Leonardo da Vinci (1452–1519) rond 1495 al gelijksoortige proeven deed en tot dezelfde conclusies kwam, maar dat zijn notitieboeken pas in de 20e eeuw werden teruggevonden en gelezen. Zijn werk heeft dus geen invloed gehad op de ontwikkeling van het vak; Amontons moest alles opnieuw ontdekken. Dat illustreert een algemene les voor de geschiedenis van de techniek: een idee werkt pas in de wereld als het bekend wordt.

:::example Wrijving op een helling
De kist van 1200 N wordt over de helling van 4 m lengte en 1 m hoogte geduwd. Door wrijving heb je 400 N nodig in plaats van 300 N.

1. *Nuttige arbeid:* $1200\ \text{N} \cdot 1\ \text{m} = 1200\ \text{J}$.
2. *Toegevoerde arbeid:* $400\ \text{N} \cdot 4\ \text{m} = 1600\ \text{J}$.
3. *Rendement:* $\eta = 1200 / 1600 = 0{,}75$, dus 75%.
4. *Verlies:* $1600 - 1200 = 400\ \text{J}$ wordt warmte. Verdeeld over 4 m komt dat overeen met een wrijvingskracht van $400 / 4 = 100\ \text{N}$ (400 N min 300 N). Controle: dat is een wrijvingskracht van ongeveer 8% van het gewicht, een plausibel getal voor een goed glijdende kist.
:::

Een tweede ontwerpafweging verschijnt hier. Een steile helling met weinig wrijving heeft een goed rendement maar vraagt veel kracht; een vlakke helling vraagt weinig kracht, maar zorgt voor meer glijweg en dus voor meer verlies. Ook bij schroeven zie je dat. Een schroef met een groot rendement draait gemakkelijk, maar draait ook los onder trilling. Een schroef met een laag rendement zet zichzelf vast. Hier is een laag rendement juist de eigenschap die je wilt.

{{ exercises: 01-019, 01-020, 01-021 }}

## Wat arbeid en rendement je leren

Het rendement is de maat waarmee je machines eerlijk vergelijkt. Het zegt niets over de krachtwinst: een hefboom van MV = 10 kan zowel een goed als een slecht rendement hebben. Rendement beantwoordt de vraag welk deel van wat je erin stopt bij de last aankomt. Een ontwerper wil het zo hoog mogelijk, maar niet ten koste van alles: een lager rendement kan betekenen dat een machine goedkoper, veiliger of makkelijker te onderhouden is. Daarom bepaalt het rendement samen met kosten, veiligheid en bruikbaarheid welke machine je kiest. In het ontwerppracticum van les 7 werk je dat uit.
