# Snelheid, dichtheid en prijs per eenheid

Tot nu toe vergeleek je meestal hoeveelheden van **dezelfde soort**: siroop met water, kaartlengte met werkelijke lengte. Dan valt de eenheid weg en blijft er een kaal getal over. Maar je kunt ook grootheden van **verschillende soort** op elkaar delen: kilometers door uren, euro's door kilogrammen, grammen door kubieke centimeters. Dan ontstaat een nieuwe grootheid met een eigen, samengestelde eenheid. In deze les bekijk je drie van zulke grootheden.

## 1. Wat betekent "per"?

Bij € 3 per kilogram, 60 kilometer per uur en 8 gram per kubieke centimeter zegt het woordje **per**: "voor elke ene". Het is de verhoudingstabel met de kolom voor 1, waar je in de vorige lessen al mee rekende.

| Grootheid | Is het quotiënt van | Eenheid | Betekenis |
|---|---|---|---|
| Prijs per eenheid | prijs : hoeveelheid | €/kg, €/l | kosten van één kilogram, één liter |
| Snelheid | afstand : tijd | km/u, m/s | afstand in één uur, één seconde |
| Dichtheid | massa : volume | g/cm³, kg/m³ | massa van één cm³, één m³ |

:::tip Reken met de eenheden mee
Schrijf eenheden bij elke tussenstap op. Ze zijn een gratis controle. Deel je kilometers door uren, dan krijg je km/u. Vermenigvuldig je km/u met uren, dan vallen de uren weg en houd je kilometers over. Kom je uit op "uur per kilometer" terwijl je een snelheid zocht, dan heb je de deling omgedraaid.
:::

## 2. Snelheid, afstand en tijd

Wie 90 km aflegt in 1,5 uur, heeft een **gemiddelde snelheid** van

$$
90 : 1{,}5 = 60 \text{ km/u}.
$$

Dat betekent niet dat de snelheidsmeter steeds op 60 stond. Het betekent: wie de hele tijd 60 km/u zou rijden, legt in dezelfde tijd dezelfde afstand af.

:::formula Snelheid, afstand en tijd
$$
v = \frac{s}{t}, \qquad s = v \cdot t, \qquad t = \frac{s}{v}
$$

Hier is $v$ de snelheid (van het Latijnse *velocitas*), $s$ de afgelegde afstand en $t$ de tijd. De drie formules zijn één en dezelfde evenredigheid: bij een vaste snelheid is de afstand recht evenredig met de tijd, met $v$ als evenredigheidsfactor.
:::

Bij een snelheid in km/u horen een afstand in kilometers en een tijd in **uren**. Juist die tijd gaat vaak mis, omdat een uur 60 minuten heeft en geen 100.

:::example Uitgewerkt voorbeeld: drie kwartier fietsen
Je fietst 45 minuten met een constante snelheid van 18 km/u. Hoe ver kom je?

1. Tijd in uren: $45 : 60 = 0{,}75$ uur. Niet 0,45 uur: dat zou 27 minuten zijn.
2. Afstand: $s = 18 \times 0{,}75 = 13{,}5$ km.

Via de verhoudingstabel: in 60 minuten 18 km, in 15 minuten $18 : 4 = 4{,}5$ km, in 45 minuten $3 \times 4{,}5 = 13{,}5$ km.
:::

{{ widget: ratio-table a=60 b=18 labelA="Tijd (min)" labelB="Afstand (km)" }}

:::example Uitgewerkt voorbeeld: hoe lang duurt de rit?
Een trein rijdt 156 km met een gemiddelde snelheid van 104 km/u. Hoe lang duurt de rit?

$t = 156 : 104 = 1{,}5$ uur. Een half uur is 30 minuten, dus de rit duurt 1 uur en 30 minuten, oftewel 90 minuten. Schrijf niet "1 uur en 50 minuten": de 5 achter de komma zijn vijf **tienden** van een uur.
:::

{{ exercises: 10-022, 10-023, 10-024 }}

## 3. Van km/u naar m/s, en terug

In het verkeer gebruik je km/u, in de natuurkunde en de sport vaak m/s. Hoe reken je om?

Neem 36 km/u. Dat is 36 km in één uur, dus 36.000 m in 3600 seconden. Per seconde is dat

$$
36\,000 : 3600 = 10 \text{ m/s}.
$$

Algemeen: 1 km/u is 1000 m per 3600 s, en $\frac{1000}{3600} = \frac{1}{3{,}6}$ m/s. Omgekeerd is 1 m/s gelijk aan 3,6 km/u.

:::formula De factor 3,6
$$
1 \text{ m/s} = 3{,}6 \text{ km/u}
$$

- Van **km/u naar m/s**: delen door 3,6.
- Van **m/s naar km/u**: vermenigvuldigen met 3,6.
:::

:::warning De verkeerde factor of de verkeerde richting
Twee fouten komen vaak voor.

1. **Verkeerde richting.** $72 \times 3{,}6 = 259{,}2$ "m/s" voor een auto die 72 km/u rijdt: dat is sneller dan het geluid in een kwart seconde. Onthoud: een seconde is veel korter dan een uur, dus het getal bij m/s is **kleiner** dan het getal bij km/u.
2. **Verkeerde factor.** Alleen de kilometers omrekenen (maal 1000) of alleen de uren (gedeeld door 60, alsof een uur 60 seconden heeft). Er veranderen twee eenheden tegelijk: kilometer naar meter (maal 1000) én uur naar seconde (gedeeld door 3600). Samen geeft dat gedeeld door 3,6.
:::

:::example Uitgewerkt voorbeeld: een sprinter
Een sprinter loopt 100 m in 10 seconden. Hoe snel is dat in km/u?

Eerst in m/s: $100 : 10 = 10$ m/s. Daarna naar km/u: $10 \times 3{,}6 = 36$ km/u. Schatting ter controle: een sprinter is ruwweg zo snel als een brommer in de bebouwde kom, dus tientallen kilometers per uur. 36 km/u klopt; 2,8 km/u (wandeltempo) niet.
:::

{{ exercises: 10-025, 10-026 }}

## 4. Gemiddelde snelheid over meerdere trajecten

Neem bij een gemiddelde snelheid altijd **totale afstand gedeeld door totale tijd**, inclusief stilstand als die bij de reis hoort. Het gewone gemiddelde van twee snelheden klopt alleen als je beide snelheden even **lang** rijdt.

:::example Uitgewerkt voorbeeld: dezelfde afstand, andere reistijden
Je rijdt 30 km met 30 km/u en daarna 30 km met 60 km/u. Wat is je gemiddelde snelheid?

1. Eerste stuk: $30 : 30 = 1$ uur.
2. Tweede stuk: $30 : 60 = 0{,}5$ uur.
3. Totaal: 60 km in 1,5 uur, dus $60 : 1{,}5 = 40$ km/u.

Het gemiddelde van 30 en 60, namelijk 45, is hier onjuist. Je rijdt twee keer zo **lang** met de lage snelheid als met de hoge, dus de lage snelheid moet zwaarder meetellen.
:::

{{ exercise: 10-027 }}

## 5. Prijs per eenheid

Een verpakking van 750 gram kost € 3,60. Een verpakking van 1,2 kg kost € 5,40. Welke is voordeliger? De totaalprijzen zeggen niets, want de hoeveelheden verschillen. Reken beide om naar dezelfde eenheid:

| Verpakking | Massa (kg) | Prijs (€) | Prijs per kg (€) |
|---|---|---|---|
| Klein | 0,75 | 3,60 | $3{,}60 : 0{,}75 = 4{,}80$ |
| Groot | 1,2 | 5,40 | $5{,}40 : 1{,}2 = 4{,}50$ |

De grote verpakking kost in totaal meer, maar minder per kilogram. Supermarkten zijn in Nederland verplicht de prijs per kilogram of liter op het schap te vermelden, juist omdat verpakkingen zo verschillend zijn.

:::example Uitgewerkt voorbeeld: delen door een kommagetal
$3{,}60 : 0{,}75$ lijkt lastig. Vermenigvuldig beide getallen met 100: $360 : 75$. Dat is hetzelfde quotiënt (module 8). Nog handiger: 0,75 kg is drie kwart kilo, dus een kwart kilo kost $3{,}60 : 3 = 1{,}20$ euro en een hele kilo $4 \times 1{,}20 = 4{,}80$ euro.
:::

:::warning Prijs per eenheid is niet alles
De grotere verpakking is alleen voordeliger als je de inhoud ook opmaakt. Vergelijk bovendien alleen producten van dezelfde kwaliteit. En let op de richting van de deling: "kilogram per euro" (hoeveel krijg je voor één euro) is ook een correcte vergelijking, maar daar is een **groter** getal juist gunstiger.
:::

{{ exercises: 10-028, 10-042 }}

## 6. Dichtheid: massa per volume

Een blok met een volume van 20 cm³ en een massa van 160 g heeft een dichtheid van

$$
160 : 20 = 8 \text{ g/cm}^3.
$$

Elke kubieke centimeter van het blok heeft gemiddeld een massa van 8 gram.

:::formula Dichtheid
$$
\rho = \frac{m}{V}, \qquad m = \rho \cdot V, \qquad V = \frac{m}{\rho}
$$

De Griekse letter $\rho$ spreek je uit als "rho". De massa $m$ staat bijvoorbeeld in gram, het volume $V$ in cm³.
:::

Voor een homogeen materiaal bij dezelfde temperatuur is de dichtheid een vast getal: een groter blok ijzer is zwaarder, maar niet dichter. Daarom is dichtheid een eigenschap van het **materiaal** en niet van het voorwerp. Enkele waarden bij kamertemperatuur, afgerond:

| Stof | Dichtheid (g/cm³) |
|---|---|
| water | 1,0 |
| aluminium | 2,7 |
| ijzer | 7,9 |
| goud | 19,3 |

Volgens een bekend verhaal, dat pas twee eeuwen na zijn dood werd opgeschreven door de Romein Vitruvius, controleerde Archimedes zo of een kroon van zuiver goud was: een kroon met een lagere dichtheid dan goud kan niet van zuiver goud zijn. Of het zo gegaan is, weten we niet; het principe klopt wel.

:::example Uitgewerkt voorbeeld: een kilo goud
Hoeveel ruimte neemt 1 kg goud in? $V = m : \rho = 1000 : 19{,}3 \approx 51{,}8$ cm³. Dat is een kubusje met ribben van ongeveer 3,7 cm. Een kilo water neemt 1000 cm³ in, een liter.
:::

{{ exercises: 10-029, 10-030 }}
