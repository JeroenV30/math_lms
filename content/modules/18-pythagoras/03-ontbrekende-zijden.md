# Optellen of aftrekken van kwadraten

In de vorige les zag je wat de stelling zegt. In deze les ga je haar gebruiken. Bij een rechthoekige driehoek ken je meestal twee zijden en zoek je de derde. Dat zijn twee verschillende situaties: je zoekt de schuine zijde, of je zoekt een rechthoekszijde. De rekenstappen lijken op elkaar, maar de ene keer **tel je kwadraten op** en de andere keer **trek je ze af**. Wie dat verschil niet begrijpt, maakt de meest voorkomende fout van deze hele module. Daarom nemen we de tijd om te laten zien waarom het zo is.

## Stap voor stap: de schuine zijde zoeken

Ken je de twee rechthoekszijden $a$ en $b$, dan is $c^2 = a^2 + b^2$. Om $c$ zelf te vinden, moet je de laatste stap ongedaan maken: je zoekt de positieve lengte waarvan het kwadraat gelijk is aan $a^2 + b^2$. Dat is de wortel:

$$
c = \sqrt{a^2 + b^2}.
$$

:::example De schuine zijde van een 5-12-driehoek
Een rechthoekige driehoek heeft rechthoekszijden 5 en 12 cm. Hoe lang is de schuine zijde?

1. Er is een rechte hoek en de zijden 5 en 12 sluiten die in. Dus $a = 5$, $b = 12$, en $c$ is gezocht.
2. $a^2 = 25$ en $b^2 = 144$.
3. $c^2 = 25 + 144 = 169$.
4. $c = \sqrt{169} = 13$, want $13 \times 13 = 169$.

Controle: $13$ is groter dan $12$ en kleiner dan $5 + 12 = 17$.
:::

Let op de volgorde van de bewerkingen. Je kwadrateert *eerst* elke zijde afzonderlijk, daarna tel je op en pas daarna neem je de wortel. De wortel van een som is niet de som van de wortels, en het kwadraat van een som is niet de som van de kwadraten: $\sqrt{25 + 144}$ is 13, niet $5 + 12 = 17$.

## Een rechthoekszijde zoeken

Nu is de schuine zijde bekend en een van de rechthoekszijden ook. Stel $c = 13$ en $b = 5$, en je zoekt $a$. De stelling blijft gelden, maar je lost de vergelijking nu op voor $a$:

$$
a^2 + b^2 = c^2 \quad\Longrightarrow\quad a^2 = c^2 - b^2 \quad\Longrightarrow\quad a = \sqrt{c^2 - b^2}.
$$

Je ziet dat de bekende rechthoekszijde nu van het kwadraat van de schuine zijde wordt **afgetrokken**. Het is dezelfde balansmethode als in module 16: wat links stond, haal je weg door het aan beide kanten af te trekken.

:::example Een rechthoekszijde van een 13-driehoek
De schuine zijde is 13 cm en een rechthoekszijde is 5 cm. Bereken de andere rechthoekszijde.

1. De schuine zijde is $c = 13$, de bekende rechthoekszijde is $b = 5$.
2. $a^2 = c^2 - b^2 = 169 - 25 = 144$.
3. $a = \sqrt{144} = 12$.

Controle: $12 < 13$, zoals het hoort bij een rechthoekszijde, en $12^2 + 5^2 = 144 + 25 = 169 = 13^2$.
:::

Waarom aftrekken? Denk terug aan de vierkanten. Het grote vierkant op de schuine zijde is zo groot als de twee kleine vierkanten samen. Is één van de kleine vierkanten bekend, dan krijg je het andere door het bekende kleine vierkant van het grote af te halen. Wie in plaats daarvan optelt, berekent de schuine zijde van een *andere* driehoek, met rechthoekszijden 13 en 5, en die is groter dan 13. Dat kan de bedoeling niet zijn.

:::warning Eerst de schuine zijde herkennen
Voordat je rekent, moet je weten welke zijde de schuine zijde is. Komt in de tekst 'de schuine zijde is 13', of staat 13 tegenover de rechte hoek, dan is 13 de $c$. Wie dan toch $\sqrt{13^2 + 5^2}$ uitrekent, vindt 13,93: een zijde die langer is dan de schuine zijde die al gegeven was. Een rechthoekszijde kan nooit langer zijn dan de schuine zijde. Gebruik die controle altijd.
:::

{{ exercises: 18-008, 18-009, 18-010 }}

## Exact en afgerond

Niet elke som van twee kwadraten is een kwadraat van een geheel getal. Neem rechthoekszijden 2 en 3. Dan is $c^2 = 4 + 9 = 13$. Er is geen geheel getal waarvan het kwadraat 13 is, want $3^2 = 9$ en $4^2 = 16$. De lengte $c$ ligt dus tussen 3 en 4. Het getal $\sqrt{13}$ is een irrationaal getal, zoals je in module 14 zag: een getal met oneindig veel decimalen zonder herhalend patroon.

Je hebt hier twee keuzes, en beide zijn correct.

- **Exact**: je schrijft $c = \sqrt{13}$. Dat is het precieze antwoord. Je kunt er verder mee rekenen zonder afrondingsfout.
- **Afgerond**: je schrijft $c \approx 3{,}61$ (op twee decimalen) met je rekenmachine. Dit is handiger bij een praktische vraag, zoals 'hoe lang is de ladder', maar het is een benadering. Het teken $\approx$ betekent 'is ongeveer'.

Een goede gewoonte is om pas **op het allerlaatst** af te ronden. Als je tussendoor al afrondt, kan de fout zich opstapelen. Rond ook nooit het kwadraat af: $c^2 = 13$ is exact, en daar zit niets te schatten. Volg verder de opdracht. Staat er 'rond af op twee decimalen', dan geef je twee decimalen, niet meer en niet minder.

Een wortel die niet netjes uitkomt, kun je op het oog nog controleren. $\sqrt{13}$ ligt tussen $\sqrt{9} = 3$ en $\sqrt{16} = 4$, en omdat 13 dichter bij 16 dan bij 9 ligt, schat je ongeveer 3,6. Dat past bij 3,61. Wie bij de rekenmachine per ongeluk een verkeerde toets indrukt, ziet dat met zo'n schatting meteen.

:::example Een schuine zijde die niet netjes uitkomt
Een rechthoek is 9 cm bij 14 cm. Hoe lang is zijn diagonaal, afgerond op één decimaal?

De diagonaal verdeelt de rechthoek in twee rechthoekige driehoeken met rechthoekszijden 9 en 14.

1. $c^2 = 9^2 + 14^2 = 81 + 196 = 277$.
2. $c = \sqrt{277} \approx 16{,}643$.
3. Op één decimaal: $c \approx 16{,}6$ cm.

Schatting vooraf: $16^2 = 256$ en $17^2 = 289$, dus $c$ ligt tussen 16 en 17. En $16{,}6 < 9 + 14 = 23$.
:::

{{ exercises: 18-011, 18-012, 18-013 }}

## Voor elke hoek dezelfde regel

Je hoeft de stelling niet alleen toe te passen op driehoeken met handige gehele getallen. De regel geldt voor elke rechthoekige driehoek, ook als je de scherpe hoeken kiest. In de widget hieronder bepaal je een scherpe hoek en de schuine zijde. De overige zijden worden daaruit afgeleid (met sinus en cosinus, die je in een latere module leert kennen). Kijk of voor elke instelling de som van de kwadraten van de twee rechthoekszijden gelijk is aan het kwadraat van de schuine zijde.

{{ widget: right-triangle angle=30 hypotenuse=10 }}

Bij een hoek van 30° en een schuine zijde van 10 is de overstaande zijde 5. De aanliggende zijde volgt dan uit de stelling:

$$
b^2 = 10^2 - 5^2 = 100 - 25 = 75, \qquad b = \sqrt{75} \approx 8{,}66.
$$

Dat is ook wat de widget laat zien. Verschuif de hoek en controleer het zelf: de som van de kwadraten van de twee rechthoekszijden is altijd het kwadraat van de schuine zijde. Hier zie je ook dat de stelling een *verband* geeft tussen de zijden en niet vastlegt welke de hoeken zijn: bij elke schuine zijde van 10 kun je veel rechthoekige driehoeken tekenen.

{{ exercises: 18-033, 18-034, 18-035 }}

## Eenheden en rekenfouten

Alle lengtes in de som moeten dezelfde eenheid hebben. Zijn de rechthoekszijden 30 cm en 0,4 m, dan reken je eerst om naar 30 cm en 40 cm, of naar 0,3 m en 0,4 m. Combineer je 30 en 0,4 ongemerkt, dan krijg je onzin: $\sqrt{900 + 0{,}16}$ is een getal dat bij geen enkele eenheid past.

De uitkomst is een lengte in dezelfde eenheid als de zijden. Het kwadraat is een oppervlakte in de bijbehorende kwadraateenheid: cm² bij cm, m² bij m. In de tussenstap $c^2 = 169$ staat dus eigenlijk $169\ \text{cm}^2$, en pas na de wortel krijg je 13 cm.

## De vier veelgemaakte fouten

Een foutenanalyse is leerzamer dan nog tien goede sommen. Dit zijn de vier fouten die het vaakst voorkomen, met de manier om ze te herkennen.

**1. Lengtes optellen: $a + b = c$.** Je rekent $5 + 12 = 17$ en noemt dat de schuine zijde. Dat is de route langs twee zijden, niet de directe lijn. Controle: de schuine zijde is korter dan de som van de twee andere zijden. De juiste uitkomst is dus $c = 13$ en zeker niet 17.

**2. De min omdraaien.** Je zoekt een rechthoekszijde en rekent $b^2 - c^2$, of je zoekt de schuine zijde en rekent $a^2 - b^2$. Je ziet dat aan een negatief of absurd resultaat: je kunt geen wortel nemen uit een negatief getal, en een rechthoekszijde langer dan de schuine zijde bestaat niet. Het kwadraat van de langste zijde staat altijd alleen aan één kant van het gelijkteken.

**3. De wortel vergeten.** Je rekent $25 + 144 = 169$ uit en schrijft op dat de schuine zijde 169 is. Controle: is de uitkomst langer dan de som van de twee andere zijden? Dan ben je een stap vergeten. Hier is 169 veel groter dan $5 + 12 = 17$, en dat kan nooit de schuine zijde van een driehoek met zijden 5 en 12 zijn.

**4. De schuine zijde niet herkennen.** Je past de som toe terwijl de gegeven zijde van 13 eigenlijk de schuine zijde is. Controle: bepaal vooraf welke zijde tegenover de rechte hoek ligt en schrijf $a$, $b$ en $c$ erbij.

Alle vier de fouten zijn op te sporen met één controle: *past de uitkomst bij de figuur?* De schuine zijde is langer dan elke rechthoekszijde en korter dan hun som. Een rechthoekszijde is korter dan de schuine zijde. Als je uitkomst aan een van die eisen niet voldoet, is er een fout gemaakt.

In de oefeningen van deze en de volgende lessen vind je bij veel vragen een tip voor een fout die een leerling vaak maakt. Als jouw antwoord daarmee overeenkomt, krijg je een gerichte uitleg.
