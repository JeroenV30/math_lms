# De modelleercyclus, variabelen en eenheden

Wie een model maakt, vertaalt een vraag uit de werkelijkheid naar wiskunde, rekent in de wiskunde, en vertaalt het antwoord weer terug. Dat klinkt eenvoudig, maar bij elke vertaalslag kan het misgaan. In deze les leer je het proces stap voor stap kennen, en je leert twee gereedschappen die je bij elk model nodig hebt: het onderscheid tussen **variabelen en parameters**, en de **eenhedencontrole**.

## 1. Wat is een model?

Een plattegrond van een stad is een model. Hij laat straten en pleinen zien, maar geen bomen, geen verkeer en geen hoogteverschillen. Juist dat weglaten maakt de kaart bruikbaar: een kaart met alle details zou zo groot en onoverzichtelijk zijn als de stad zelf. Een fietskaart en een metrokaart van dezelfde stad zien er heel anders uit, omdat ze voor een ander doel zijn gemaakt.

Een wiskundig model werkt net zo.

:::definition Wiskundig model
Een **wiskundig model** is een vereenvoudigde beschrijving van een stuk werkelijkheid in wiskundige taal: een formule, een grafiek, een tabel of een stelsel vergelijkingen. Het model is gemaakt met een **doel**, en het laat bewust dingen weg die voor dat doel niet belangrijk zijn.
:::

Twee gevolgen van deze definitie zijn belangrijk:

1. **Een model is nooit "waar" of "onwaar" in absolute zin.** Het is meer of minder *bruikbaar* voor een bepaald doel. Het model "de aarde is een bol" is prima om de afstand Amsterdam–New York te schatten, maar te grof voor satellietnavigatie.
2. **Een model heeft een geldigheidsgebied.** Een model dat goed werkt voor auto's tussen 30 en 130 km/h, hoeft niet te werken voor een vrachtwagen of bij 250 km/h.

## 2. De zeven stappen van de modelleercyclus

Modelleren verloopt bijna altijd in dezelfde stappen. Omdat je na de laatste stap vaak weer bij het begin uitkomt, spreken we van een **cyclus**.

![De modelleercyclus](/images/diagrams/m34-modelleercyclus.svg "De modelleercyclus. Links de werkelijkheid, rechts de wiskunde; de stippellijn is het bijstellen na een mislukte validatie.")

:::theory De modelleercyclus
1. **Probleem formuleren.** Wat wil je precies weten, en waarvoor? Hoe nauwkeurig moet het antwoord zijn?
2. **Vereenvoudigen.** Welke factoren neem je mee, welke laat je weg? Leg je **aannames** expliciet vast. Kies de **variabelen** en **parameters**, met eenheden.
3. **Wiskundig model opstellen.** Vertaal de aannames naar een formule, grafiek of vergelijking. Controleer de eenheden.
4. **Oplossen.** Reken, los een vergelijking op, teken een grafiek. Dit is het deel dat je uit eerdere modules kent.
5. **Interpreteren.** Vertaal de uitkomst terug: wat betekent dit getal in de werkelijkheid? Is het redelijk?
6. **Valideren.** Vergelijk het model met gegevens, bij voorkeur gegevens die je *niet* hebt gebruikt om het model te maken.
7. **Bijstellen.** Past het niet goed genoeg? Pas dan je aannames of je modeltype aan en doorloop de cyclus opnieuw.
:::

Kepler doorliep deze cyclus tientallen keren. Zijn cirkelmodel kwam door stap 4 en 5 heen, maar strandde bij stap 6: de validatie tegen Tycho's metingen liet een te grote afwijking zien. Daarop volgde stap 7: een wezenlijk andere aanname (een ellips in plaats van een cirkel).

:::example Uitgewerkt voorbeeld: een verhuisbusje huren
**1. Probleem.** Je wilt een verhuisbusje huren voor één dag. Verhuurder A rekent € 45 per dag plus € 0,30 per gereden kilometer. Je verwacht ongeveer 120 km te rijden. Wat kost het, en hoe gevoelig is de prijs voor je schatting van de afstand?

**2. Vereenvoudigen.** Aannames: je levert de bus op tijd in (geen extra dag), je tankt hem zelf vol (brandstof valt buiten het model), er is geen borg of eigen risico. Variabele: het aantal kilometers $a$. Parameters: het dagtarief (€ 45) en de kilometerprijs (€ 0,30 per km).

**3. Model.** De kosten $K$ in euro zijn

$$
K = 45 + 0{,}30 \cdot a
$$

Eenheden: $0{,}30$ euro per km maal $a$ km geeft euro; daarbij tel je 45 euro op. Links en rechts staat dus euro. Dat klopt.

**4. Oplossen.** Bij $a = 120$: $K = 45 + 0{,}30 \cdot 120 = 45 + 36 = 81$.

**5. Interpreteren.** De rit kost ongeveer € 81. Rijd je 20 km meer, dan kost het $0{,}30 \cdot 20 = 6$ euro meer. De prijs is dus niet erg gevoelig voor je schatting.

**6. Valideren.** Vergelijk met de factuur van een eerdere huur, of met de rekentool op de site van de verhuurder. Blijkt daar bijvoorbeeld een verplichte schoonmaakbijdrage bij te komen, dan was een aanname onjuist.

**7. Bijstellen.** Voeg de vergeten kosten als extra vaste term toe.
:::

Merk op hoe weinig wiskunde stap 4 vergt, en hoeveel denkwerk er in de stappen 1, 2, 5 en 6 zit. Bij echte problemen is dat bijna altijd zo.

{{ exercise: 34-001 }}

## 3. Aannames: bewust vereenvoudigen

Een aanname is geen fout of slordigheid. Het is een **bewuste keuze** die je opschrijft, zodat iedereen kan zien waar het model op rust en waar het dus kan breken. Een paar typische aannames:

| Soort aanname | Voorbeeld |
|---|---|
| Iets verwaarlozen | "De luchtweerstand is te verwaarlozen." |
| Iets constant houden | "De prijs per kilometer verandert niet in de loop van het jaar." |
| Een vorm kiezen | "De bevolking groeit elk jaar met hetzelfde percentage." |
| Gemiddelden gebruiken | "Een huishouden bestaat gemiddeld uit twee personen." |
| Het domein beperken | "Het model geldt voor snelheden tussen 30 en 130 km/h." |

:::tip Schrijf je aannames altijd op
Een goed model begint met een lijstje "Aannames". Als de uitkomst later niet klopt, weet je waar je moet zoeken. En wie jouw model gebruikt, weet wanneer het niet meer van toepassing is.
:::

## 4. Variabelen en parameters

In een formule staan verschillende soorten letters. Het helpt enorm om ze uit elkaar te houden.

:::definition Variabele en parameter
Een **variabele** is een grootheid die binnen één toepassing van het model verandert: de tijd, de afstand, het aantal producten.

Een **parameter** is een grootheid die in één concrete situatie vast is, maar die van situatie tot situatie kan verschillen: het instaptarief van een taxibedrijf, de halveringstijd van een bepaald medicijn, de groeifactor van een bepaalde bevolking.
:::

Neem het model voor een taxirit: $K = b + a \cdot x$. Voor één taxibedrijf liggen $b$ (instaptarief) en $a$ (prijs per km) vast; dat zijn de parameters. De afstand $x$ verschilt per rit; dat is de variabele, en de prijs $K$ is de variabele die ervan afhangt. Een ander taxibedrijf heeft dezelfde **modelvorm**, maar andere parameterwaarden.

Dit onderscheid is precies wat de schuifregelaars in de widgets van deze cursus doen: met een schuifregelaar verander je een *parameter*, en de grafiek laat zien hoe de uitvoer afhangt van de *variabele* $x$.

:::example Uitgewerkt voorbeeld: een voorraadmodel lezen
Een voedselbank heeft rijst op voorraad. Het model voor de voorraad $N$ (in kg) na $t$ dagen is

$$
N = 250 - 18t
$$

**Wat is wat?** De variabele is $t$ (dagen), en $N$ hangt ervan af. De getallen 250 en 18 zijn parameters.

**Betekenis met eenheden.** Bij $t = 0$ is $N = 250$: de beginvoorraad is 250 kg. Per dag neemt de voorraad af met 18 kg, dus het verbruik is 18 kg per dag.

**Gebruik.** Na 10 dagen: $N = 250 - 18 \cdot 10 = 250 - 180 = 70$ kg.

**Geldigheidsgebied.** De voorraad kan niet negatief worden. Uit $250 - 18t = 0$ volgt $t = 250/18 \approx 13{,}9$. Het model geldt dus hooguit voor $0 \le t \le 13{,}9$ dagen, en alleen zolang er niets wordt bijgeleverd.
:::

{{ exercise: 34-002 }}

## 5. Eenheden controleren: dimensieanalyse

Een van de krachtigste controles op een model kost bijna geen moeite: kijk of de **eenheden** kloppen. Aan beide kanten van een gelijkteken moet dezelfde soort grootheid staan. Je kunt geen meters gelijkstellen aan seconden, en je kunt geen euro's optellen bij kilometers.

:::theory Regels voor rekenen met eenheden
- **Optellen en aftrekken** mag alleen met dezelfde eenheid: $3 \text{ m} + 20 \text{ cm}$ moet je eerst omrekenen naar $3{,}20$ m.
- **Vermenigvuldigen en delen** combineert eenheden: $\text{m/s} \cdot \text{s} = \text{m}$, en $\text{m} : \text{s} = \text{m/s}$.
- **Machten** werken ook op eenheden: $(\text{m/s})^2 = \text{m}^2/\text{s}^2$.
- **Exponenten, sinussen en logaritmen** moeten een getal *zonder* eenheid krijgen. In $g^{t}$ moet $t$ dus een aantal tijdseenheden zijn ("aantal uren"), niet "uren" als eenheid.
:::

Deze controle heet **dimensieanalyse**. Natuurkundigen gebruiken haar voortdurend, maar ze werkt net zo goed in de economie (euro per maand maal maanden geeft euro) of in de verpleegkunde (mg per kg lichaamsgewicht maal kg geeft mg).

Omrekenen hoort hierbij. De belangrijkste omrekening in deze module is die tussen km/h en m/s:

$$
1 \text{ km/h} = \frac{1000 \text{ m}}{3600 \text{ s}} = \frac{1}{3{,}6} \text{ m/s}
$$

Dus van km/h naar m/s deel je door 3,6, en terug vermenigvuldig je met 3,6. Zo is 72 km/h gelijk aan $72 : 3{,}6 = 20$ m/s.

:::warning Eerst omrekenen, dan invullen
Veel formules uit de natuurkunde gaan uit van meters en seconden. Vul je daarin een snelheid in km/h in, dan krijg je een getal dat er "gewoon" uitziet maar volkomen fout is. Reken altijd eerst om, en schrijf de eenheden bij elke tussenstap.
:::

:::example Uitgewerkt voorbeeld: is deze formule plausibel?
Iemand beweert dat de valtijd $t$ van een voorwerp dat van hoogte $h$ valt, gegeven wordt door $t = \sqrt{2h/g}$, met $g \approx 9{,}81$ m/s² (de valversnelling). Klopt dat dimensioneel?

**Eenheden invullen.** $h$ is in m en $g$ in m/s². Dan is

$$
\frac{h}{g} \;\to\; \frac{\text{m}}{\text{m/s}^2} = \text{m} \cdot \frac{\text{s}^2}{\text{m}} = \text{s}^2
$$

De factor 2 heeft geen eenheid. De wortel uit $\text{s}^2$ is s. De formule levert dus een tijd op, zoals het hoort.

**Een getal.** Voor $h = 20$ m: $t = \sqrt{40 / 9{,}81} = \sqrt{4{,}08} \approx 2{,}0$ s.

**Wat de controle níét zegt.** Dimensieanalyse zegt niets over de factor 2. Ook $t = \sqrt{h/g}$ heeft de juiste eenheid. Een eenhedencontrole kan een formule dus *afkeuren*, maar niet volledig *goedkeuren*.
:::

{{ exercises: 34-003, 34-004 }}

## 6. Dimensieanalyse als ontwerpgereedschap

Je kunt de eenhedencontrole ook gebruiken om de *vorm* van een formule te raden. Dat is verrassend krachtig.

:::example Uitgewerkt voorbeeld: hoe hangt de slingertijd af van de lengte?
Een slinger is een gewicht aan een touw. De tijd $T$ voor één heen-en-weer beweging hangt waarschijnlijk af van de lengte $L$ van het touw (in m) en van de valversnelling $g$ (in m/s²). Stel dat het verband de vorm heeft

$$
T = k \cdot L^p \cdot g^q
$$

met $k$ een getal zonder eenheid. Welke $p$ en $q$ maken de eenheden kloppend?

**Eenheden van de rechterkant.** $L^p g^q$ heeft eenheid $\text{m}^p \cdot (\text{m} \cdot \text{s}^{-2})^q = \text{m}^{p+q} \cdot \text{s}^{-2q}$.

**Gelijkstellen aan seconden.** Links staat $\text{s}^1 = \text{m}^0 \cdot \text{s}^1$. Dus

$$
p + q = 0 \quad\text{en}\quad -2q = 1
$$

Hieruit volgt $q = -\tfrac{1}{2}$ en $p = \tfrac{1}{2}$. Dus $T = k \sqrt{L/g}$.

**Interpretatie.** Zonder één experiment weet je al dat een vier keer zo lang touw een twee keer zo lange slingertijd geeft. Alleen de constante $k$ moet je meten (of afleiden; het blijkt $2\pi$ te zijn).
:::

{{ exercise: 34-005 }}
