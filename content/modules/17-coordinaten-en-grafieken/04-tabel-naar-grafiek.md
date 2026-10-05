# Van tabel naar grafiek en terug

Een tabel en een grafiek zeggen vaak hetzelfde, maar op een andere manier. Een tabel is nauwkeurig: je leest exacte getallen. Een grafiek is overzichtelijk: je ziet in één blik waar iets stijgt, daalt of stilstaat. In deze les leer je van de ene vorm naar de andere te gaan, en daarna een grafiek *in context* te lezen. Dat laatste is minder een rekenvaardigheid dan een leesvaardigheid, en het is een van de nuttigste die de wiskunde je geeft.

## 1. Een regel wordt een tabel, een tabel wordt een grafiek

Neem de rekenregel $y = 2x + 1$. Je kiest een waarde voor $x$, rekent de bijbehorende $y$ uit en noteert beide in een tabel.

| $x$ | $-2$ | $-1$ | $0$ | $1$ | $2$ |
|---|---|---|---|---|---|
| $y$ | $-3$ | $-1$ | $1$ | $3$ | $5$ |

Elke kolom is een punt: $(-2; -3)$, $(-1; -1)$, $(0; 1)$, $(1; 3)$ en $(2; 5)$. Zet je die punten in een assenstelsel, dan blijken ze op één rechte lijn te liggen. Dat is geen vanzelfsprekendheid; het is een eigenschap van deze regel, waar je in de volgende les de reden van ziet.

:::example Een tabel maken met negatieve waarden
Maak een tabel voor $y = 2x + 1$ bij $x = -2$.

1. Vul $-2$ in, met haakjes om de negatieve waarde: $y = 2 \cdot (-2) + 1$.
2. Eerst het product: $2 \cdot (-2) = -4$.
3. Dan optellen: $-4 + 1 = -3$.
4. Het punt is $(-2; -3)$. Let op: de x-waarde staat voorop.
:::

{{ widget: function-plot fn="2*x+1" xmin=-3 xmax=3 ymin=-6 ymax=8 title="De lijn y = 2x + 1" }}

De widget tekent niet alleen de vijf punten uit de tabel, maar de hele lijn. Dat is een ander soort bewering: de lijn bevat *alle* punten waarvan de y-waarde bij de x-waarde past, ook $x = 0{,}5$ en $x = \sqrt{2}$. Een tabel met vijf punten is een steekproef uit die lijn. Hoe meer punten je neemt, hoe beter je ziet welke vorm de grafiek heeft.

{{ exercises: 17-013, 17-014, 17-015 }}

## 2. Controleren of een punt op de grafiek ligt

De grafiek van een regel is de verzameling van alle punten die de regel *waarmaken*. Of een gegeven punt erbij hoort, kun je dus controleren door invullen, zonder te tekenen. Dat is veel nauwkeuriger dan kijken: een punt dat op de tekening 'op de lijn lijkt te liggen', kan er een fractie naast zitten.

:::example Ligt het punt op de lijn?
Ligt $(3; 7)$ op de lijn $y = 2x + 1$? En $(3; 6)$?

1. Vul $x = 3$ in: $y = 2 \cdot 3 + 1 = 7$.
2. Bij $x = 3$ hoort dus $y = 7$. Het punt $(3; 7)$ ligt op de lijn.
3. Het punt $(3; 6)$ heeft dezelfde x maar een andere y. Het ligt er niet op: de lijn gaat bij $x = 3$ juist door 7.
:::

De controle werkt ook in de andere richting. Als je alleen de y-waarde kent, stel je de regel gelijk aan die waarde en los je $x$ op: voor $y = 9$ staat er $2x + 1 = 9$, dus $x = 4$. Dat is dezelfde omkeermethode als in module 16.

{{ exercises: 17-016, 17-017 }}

:::warning Losse punten of een doorlopende lijn?
Een lijn verbinden met een lineaal suggereert dat alle tussenwaarden bestaan. Dat hoeft niet. Als $x$ het aantal verkochte kaartjes is, zijn alleen hele, niet-negatieve aantallen mogelijk. De verbindingslijn is dan een hulpmiddel om het patroon te zien, geen bewering over halve kaartjes. Vraag bij elke grafiek: welke waarden kunnen echt voorkomen?
:::

## 3. Een grafiek lezen in context

Bij een grafiek uit de praktijk heeft elke as een betekenis en een eenheid. De x-as is vaak de tijd; de y-as is wat je meet. Voor het lezen helpt een vaste routine.

1. **Wat staat op de assen?** Welke grootheden, welke eenheden, welke schaal?
2. **Wat betekent een punt?** Bijvoorbeeld: na 20 minuten is de fietser 8 kilometer ver.
3. **Wat doet de grafiek?** Stijgt ze, daalt ze, of blijft ze gelijk?
4. **Hoe snel gebeurt het?** Hoe steiler het stuk, hoe sneller de grootheid verandert.

### Stijgen, dalen, constant

Loop je de grafiek van links naar rechts af, dan kan ze drie dingen doen. Ze **stijgt** als de y-waarde toeneemt, ze **daalt** als de y-waarde afneemt, en ze is **constant** als de y-waarde gelijk blijft: een horizontaal stuk. Een constant stuk is niet 'niets gebeurd': in een afstand-tijdgrafiek betekent het dat de afstand niet verandert, dus dat je stilstaat.

![Afstand-tijdgrafiek van een fietstocht](/images/diagrams/m17-afstand-tijd.svg "Afstand-tijdgrafiek van een fietstocht: eerst 8 km in 20 minuten (24 km/u), dan 10 minuten stilstand, daarna 10 km in 20 minuten (30 km/u). Eigen illustratie.")

Op deze grafiek is de tijd in minuten uitgezet en de afstand in kilometers, vanaf het vertrekpunt. De fietser gaat in 20 minuten naar het punt $(20; 8)$, staat dan tot minuut 30 stil, en rijdt daarna in 20 minuten naar $(50; 18)$.

### Helling als 'hoe snel'

Het tweede stuk is steiler dan het eerste, en dat betekent iets: de fietser reed sneller. We kunnen dat precies maken. In het eerste stuk legt hij 8 km af in 20 minuten, dus $\tfrac{8}{20} = 0{,}4$ km per minuut, en dat is $0{,}4 \cdot 60 = 24$ km per uur. In het derde stuk legt hij 10 km af in 20 minuten, dus $0{,}5$ km per minuut, oftewel 30 km per uur.

Wat je hier berekent, is steeds hetzelfde: de verandering van de y-waarde gedeeld door de verandering van de x-waarde. Die verhouding is de **helling** van het stuk. In een afstand-tijdgrafiek is de helling de snelheid, en dat verklaart waarom 'steiler' en 'sneller' in dit soort grafieken samenvallen. De eenheid van de helling is de eenheid van de y-as gedeeld door die van de x-as: km per minuut, of na omrekenen km per uur.

:::example Snelheid uit een stuk van de grafiek
Bereken de snelheid in km/u tussen de punten $(30; 8)$ en $(50; 18)$ van de fietstocht (tijd in minuten, afstand in km).

1. Verschil in afstand: $18 - 8 = 10$ km.
2. Verschil in tijd: $50 - 30 = 20$ minuten, dat is $\tfrac{20}{60} = \tfrac{1}{3}$ uur.
3. Snelheid: $10 : \tfrac{1}{3} = 30$ km/u.
4. Controle: in 20 minuten 10 km, dus in 60 minuten drie keer zoveel: 30 km. Dat klopt.
:::

{{ exercises: 17-037 }}

### Een tweede context: temperatuur

Niet elke grafiek heeft de tijd op de x-as en afstand op de y-as, maar het lezen gaat op dezelfde manier. Neem de temperatuur op een winterdag, elke vier uur gemeten:

| Tijd $t$ (uur na middernacht) | 0 | 4 | 8 | 12 | 16 |
|---|---|---|---|---|---|
| Temperatuur $T$ ($^\circ$C) | $-2$ | 2 | 10 | 14 | 6 |

Tussen $t = 0$ en $t = 12$ stijgt de temperatuur; daarna daalt ze. In het stuk van 8 tot 12 uur stijgt ze van 10 naar 14 graden, dus 4 graden in 4 uur: 1 graad per uur. Tussen 4 en 8 uur is de stijging 8 graden in 4 uur: 2 graden per uur. Het eerste stuk is dus *steiler* dan het tweede, ook al zijn beide stijgend.

Het teken van de helling vertelt je of de grafiek stijgt of daalt. Een negatieve helling hoort bij een dalend stuk: van 12 naar 16 uur verandert de temperatuur met $6 - 14 = -8$ graden in 4 uur, dus $-2$ graden per uur.

:::tip Let op de eenheden
Een helling heeft altijd een eenheid, die je uit de assen haalt: graden per uur, kilometers per minuut, euro's per maand. Wie alleen het getal noemt ('de helling is $-2$'), laat de helft van het verhaal weg.
:::

{{ exercises: 17-038 }}

## 4. Van tabel naar regel

Soms is het verband tussen twee grootheden niet gegeven, maar moet je het zelf opstellen. Een abonnement kost een eenmalig inschrijfgeld van € 20 en daarna € 5 per maand. Na $x$ maanden heb je betaald: € 20 plus $x$ keer € 5. Als $y$ het totaalbedrag is:

$$y = 5x + 20$$

De tabel bij deze regel stijgt met 5 voor elke volledige maand. De 20 is de beginwaarde (de waarde bij $x = 0$) en de 5 de verandering per stap. Dat zijn precies de twee ingrediënten die in de volgende les als *helling* en *startgetal* terugkomen.

:::example Een regel opstellen
Een taxirit kost € 3 starttarief plus € 2 per kilometer. Stel de regel op voor de prijs $y$ bij $x$ kilometer, en bereken de prijs van 7 km.

1. De prijs bestaat uit een vast deel (3) en een deel dat meegroeit met de afstand ($2x$): $y = 2x + 3$.
2. Vul $x = 7$ in: $y = 2 \cdot 7 + 3 = 17$.
3. De rit van 7 km kost € 17.
4. Controle: 7 km is 14 euro, plus 3 euro starttarief: 17 euro.
:::

{{ exercises: 17-039 }}
