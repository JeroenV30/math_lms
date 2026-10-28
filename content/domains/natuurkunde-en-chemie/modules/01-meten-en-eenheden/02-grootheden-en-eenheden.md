:::question Denk eerst zelf na
Een leerling schrijft in zijn verslag: “De snelheid is 25.” Een tweede leerling schrijft: “De snelheid is 25 m/s.” Een derde: “De snelheid is 25 m/s, gemeten over een afstand van 100 m met een stopwatch.” Wat weet je na elke zin méér dan na de vorige? En welke zin zou je durven gebruiken om iets mee te berekenen?
:::

## Grootheid, eenheid en getalswaarde

Een meetresultaat bestaat uit drie dingen die je goed uit elkaar moet houden. De **grootheid** is de eigenschap die je meet: lengte, massa, tijd, temperatuur. De **eenheid** is de afgesproken maat waarmee je die eigenschap vergelijkt: meter, kilogram, seconde, kelvin. De **getalswaarde** zegt hoeveel keer die maat erin gaat. Samen vormen ze de **waarde** van de grootheid:

$$
\text{waarde} = \text{getalswaarde} \times \text{eenheid}
$$

Als je schrijft $m = 2{,}5\ \text{kg}$, dan is $m$ het symbool van de grootheid massa, is $2{,}5$ de getalswaarde en $\text{kg}$ de eenheid. Die schrijfwijze is geen pedanterie. Het product $2{,}5 \times \text{kg}$ is een echte wiskundige uitdrukking: je mag er mee rekenen. Als je twee waarden vermenigvuldigt, vermenigvuldig je ook hun eenheden. Dat is precies waarom eenheden een controlemiddel zijn: wat je met getallen doet, moet je ook met eenheden doen, en als de eenheden niet kloppen, klopt de berekening niet.

Een grootheid is dus niet hetzelfde als haar eenheid, en dat onderscheid wordt vaak vergeten. “Massa” is een grootheid, “kilogram” een eenheid. Dezelfde massa kun je uitdrukken in kilogram, gram, ton of in pond, en het is in alle gevallen dezelfde massa. De grootheid hangt niet af van onze afspraken; de getalswaarde wel. Een kilometer en een mijl beschrijven dezelfde lengte-eigenschap, maar wie 10 zegt, zegt dan iets heel anders.

Voor de schrijfwijze gelden vaste conventies. Het symbool van een grootheid schrijf je schuin: $m$, $t$, $v$. De eenheid schrijf je rechtop, met een spatie tussen getal en eenheid: $5\ \text{kg}$, niet $5kg$. Dat onderscheid zie je terug in de opmaak van formules in deze cursus: $v = 25\ \text{m/s}$ gebruikt $v$ (schuin) voor de snelheid, en $\text{m/s}$ (rechtop) voor de eenheid. De letter $m$ kan in een formule dus massa betekenen, en $\text{m}$ de meter. Door de opmaak weet je welke van de twee bedoeld is.

## Het SI: zeven basiseenheden

Er zijn ontelbaar veel grootheden, maar je hoeft er maar zeven als vertrekpunt te kiezen. Het Internationaal Stelsel van Eenheden (SI, van het Franse *Système international d’unités*) kiest zeven **basisgrootheden**, elk met een **basiseenheid**:

| Basisgrootheid | Symbool | Basiseenheid | Symbool |
|---|---|---|---|
| lengte | $l$ of $s$ | meter | m |
| massa | $m$ | kilogram | kg |
| tijd | $t$ | seconde | s |
| elektrische stroomsterkte | $I$ | ampère | A |
| temperatuur (absoluut) | $T$ | kelvin | K |
| hoeveelheid stof | $n$ | mol | mol |
| lichtsterkte | $I_\text{v}$ | candela | cd |

Alle andere grootheden volgen uit deze zeven door vermenigvuldigen en delen. Snelheid is lengte per tijd en heeft dus de eenheid $\text{m/s}$. Versnelling is snelheidsverandering per tijd: $\text{m/s}^2$. De kracht die nodig is om een massa van één kilogram één meter per seconde per seconde te laten versnellen, krijgt een eigen naam, de newton: $1\ \text{N} = 1\ \text{kg} \cdot \text{m/s}^2$. Energie is kracht maal afstand en heeft de eenheid joule, $1\ \text{J} = 1\ \text{N} \cdot \text{m} = 1\ \text{kg} \cdot \text{m}^2/\text{s}^2$. Vermogen is energie per tijd: $1\ \text{W} = 1\ \text{J/s}$. Druk is kracht per oppervlak: $1\ \text{Pa} = 1\ \text{N/m}^2$.

Zo’n naam als newton of joule is niets anders dan een afkorting voor een combinatie van basiseenheden. Daarmee is het SI een *coherent* stelsel: als je in basiseenheden rekent, hoef je geen omrekenfactoren mee te slepen. Een kracht van 1 N maal een afstand van 1 m levert precies 1 J op, zonder factor 3,6 of 4,18 of 0,3048. Dat is de kracht van het stelsel, en de reden dat je in de natuurkunde bijna altijd eerst alles naar SI-eenheden omzet.

:::definition Afgeleide eenheid
Een afgeleide eenheid is een product of quotiënt van basiseenheden. Sommige hebben een eigen naam (newton, joule, watt, pascal), andere niet (meter per seconde). De eenheid van een afgeleide grootheid kun je altijd uitdrukken in de zeven basiseenheden.
:::

Er zijn ook eenheden die niet bij het SI horen maar die iedereen gebruikt: de liter ($1\ \text{L} = 1\ \text{dm}^3 = 10^{-3}\ \text{m}^3$), de minuut en het uur, de ton ($10^3\ \text{kg}$), graad Celsius. De graad Celsius verdient een korte opmerking: de temperatuurschaal heeft hetzelfde stapje als de kelvin, maar een ander nulpunt. Er geldt $T(\text{K}) = T(^\circ\text{C}) + 273{,}15$. In formules waarin temperatuur voorkomt als vermenigvuldigende factor, zoals in de gaswet, moet je altijd kelvin gebruiken. Een temperatuurverschil is in kelvin en in graden Celsius hetzelfde getal.

## Massa, gewicht en dichtheid

In het dagelijks leven worden massa en gewicht door elkaar gebruikt: “ik weeg 70 kilo”. In de natuurkunde zijn het twee verschillende grootheden. **Massa** ($m$, in kg) is een eigenschap van het voorwerp zelf: hoeveel materie het bevat, en hoe weerbarstig het is tegen versnellen. **Gewicht** is een kracht, de zwaartekracht op het voorwerp: $F_\text{z} = m \cdot g$, in newton. Op de maan heb je dezelfde massa, maar een kleiner gewicht, omdat daar een kleinere valversnelling $g$ geldt. De weegschaal in de badkamer meet eigenlijk een kracht en rekent die om naar een massa met de aanname dat $g$ ongeveer $9{,}8\ \text{m/s}^2$ is.

Een tweede grootheid die uit twee basisgrootheden is opgebouwd, is de **dichtheid** $\rho$ (de Griekse letter rho): massa per volume.

$$
\rho = \frac{m}{V}
$$

De SI-eenheid is $\text{kg/m}^3$. In de praktijk gebruik je vaak $\text{g/cm}^3$, en omdat $1\ \text{g/cm}^3 = 1000\ \text{kg/m}^3$ is, zijn de twee getalswaarden makkelijk in elkaar om te zetten. Water heeft een dichtheid van ongeveer $1{,}0\ \text{g/cm}^3$ ofwel $1000\ \text{kg/m}^3$, ijzer van ongeveer $7{,}9\ \text{g/cm}^3$, aluminium van ongeveer $2{,}7\ \text{g/cm}^3$. Dichtheid is een stofeigenschap: twee blokken van hetzelfde materiaal hebben dezelfde dichtheid, ook als het ene tien keer zo groot is. Daarom kun je met een dichtheid een materiaal herkennen, en daar gebruikte Archimedes het al voor.

:::history Syracuse, 3e eeuw v.Chr.
Volgens een verhaal dat de Romeinse bouwkundige Vitruvius ruim twee eeuwen later optekende, kreeg Archimedes van koning Hieron II de opdracht te onderzoeken of een gouden kroon met zilver was vervalst. Archimedes zou de oplossing hebben gevonden toen hij in bad merkte dat zijn lichaam water verplaatste: het volume van een voorwerp kun je bepalen uit de hoeveelheid water die het verplaatst, en met massa en volume ken je de dichtheid. Of het verhaal precies zo is gebeurd, is onzeker. Wat vaststaat, is het idee: een eigenschap die niet van de grootte afhangt, maar van het materiaal, laat zich meten door twee eenvoudigere grootheden te combineren.
:::

:::example Een dichtheid berekenen
Een stuk metaal heeft een massa van $54\ \text{g}$ en een volume van $20\ \text{cm}^3$. Welk metaal kan het zijn?

**Stap 1.** Schrijf wat je weet op, mét eenheden: $m = 54\ \text{g}$ en $V = 20\ \text{cm}^3$.

**Stap 2.** Gebruik $\rho = m/V$: $\rho = \dfrac{54\ \text{g}}{20\ \text{cm}^3}$.

**Stap 3.** Reken uit en neem de eenheid mee: $\rho = 2{,}7\ \text{g/cm}^3$.

**Stap 4.** Controleer of het resultaat aannemelijk is. Een dichtheid van $2{,}7\ \text{g/cm}^3$ ligt tussen water (1,0) en ijzer (7,9): een licht metaal. Dat past bij aluminium, dat in tabellen op $2{,}70\ \text{g/cm}^3$ staat.

**Conclusie.** Het stuk kan aluminium zijn. “Kan zijn” is hier de juiste formulering: andere materialen of legeringen kunnen een vergelijkbare dichtheid hebben, en je meting heeft een onzekerheid. Daarover leer je in les 4 meer.
:::

{{ exercises: 01-003, 01-004, 01-005 }}

## Met eenheden rekenen

Omdat een waarde een product is van een getal en een eenheid, kun je eenheden behandelen als variabelen die je mag vermenigvuldigen, delen en wegstrepen. Dat maakt rekenen een stuk veiliger. Neem een auto die in 2,5 uur een afstand van 200 km aflegt. De gemiddelde snelheid is

$$
v = \frac{s}{t} = \frac{200\ \text{km}}{2{,}5\ \text{h}} = 80\ \frac{\text{km}}{\text{h}}.
$$

De eenheid $\text{km/h}$ volgt vanzelf uit de berekening; je hoeft haar niet te onthouden. Wil je de snelheid in $\text{m/s}$, dan vervang je $\text{km}$ en $\text{h}$ door hun waarde in $\text{m}$ en $\text{s}$:

$$
80\ \frac{\text{km}}{\text{h}} = 80 \times \frac{1000\ \text{m}}{3600\ \text{s}} \approx 22{,}2\ \frac{\text{m}}{\text{s}}.
$$

Zo ontstaat de bekende omrekenfactor $3{,}6$: delen door 3,6 om van $\text{km/h}$ naar $\text{m/s}$ te gaan. Je hoeft die factor niet uit je hoofd te leren, want je kunt hem altijd afleiden. Dat is de sterkste reden om een omrekening altijd op te schrijven als een breuk van eenheden: je ziet dan meteen welke kant op je moet delen.

:::example Kilometers per uur naar meters per seconde
Een fietser rijdt $90\ \text{km/h}$ achter een snelle scooter. Wat is dat in $\text{m/s}$?

**Stap 1.** Schrijf de omrekeningen als breuken die gelijk zijn aan 1: $\dfrac{1000\ \text{m}}{1\ \text{km}} = 1$ en $\dfrac{1\ \text{h}}{3600\ \text{s}} = 1$.

**Stap 2.** Vermenigvuldig de snelheid met die breuken, zodat de ongewenste eenheden wegvallen:

$$
90\ \frac{\text{km}}{\text{h}} \times \frac{1000\ \text{m}}{1\ \text{km}} \times \frac{1\ \text{h}}{3600\ \text{s}} = \frac{90 \times 1000}{3600}\ \frac{\text{m}}{\text{s}} = 25\ \frac{\text{m}}{\text{s}}.
$$

**Stap 3.** Controleer met de vuistregel: $90 / 3{,}6 = 25$. Klopt.

**Conclusie.** $90\ \text{km/h} = 25\ \text{m/s}$. Let op: wie per ongeluk met 3,6 vermenigvuldigt, krijgt 324, een snelheid die niet bij een fiets past. Een snelle plausibiliteitscheck vangt zulke fouten op.
:::

Eenheden zijn dus meer dan een label achter een getal. Ze maken van rekenen een stuk techniek dat je kunt controleren. In de volgende les zie je hoe je ermee omgaat als de getallen heel groot of heel klein worden.

## Een meting is een verhaal in stappen

Bij een zorgvuldige meting volg je een vaste gedachtegang. Je begint met een afgebakende vraag (“Welke massa heeft dit blok?” is beter dan “Is dit zwaar?”). Dan kies je de grootheid en een passend instrument en een eenheid. Je beschrijft de procedure, zodat een ander haar kan herhalen. Je voert de meting uit en noteert niet alleen het getal, maar ook de eenheid en de onzekerheid. Ten slotte controleer je of de uitkomst aannemelijk is. Die volgorde klinkt vanzelfsprekend, maar bijna alle fouten in een leerlingenpracticum komen voort uit het overslaan van een van deze stappen, vaak de eerste of de laatste.

:::tip Schrijf altijd de eenheid mee
Schrijf bij elk tussenresultaat de eenheid op, ook als je haar “wel kent”. Op het moment dat een eenheid raar uitkomt (bijvoorbeeld $\text{m}^2/\text{s}$ waar je een snelheid verwacht), heb je een fout opgespoord voordat je het eindantwoord hebt.
:::

{{ exercises: 01-006, 01-007, 01-008 }}
