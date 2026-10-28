:::question Denk eerst zelf na
Een leerling stelt dat de afstand die een auto aflegt gelijk is aan $s = v \cdot t^2$, met $v$ de snelheid en $t$ de tijd. Zonder iets over auto’s te weten: kun je met alleen eenheden laten zien dat dit niet kan kloppen? Hoe zou je dat opschrijven?
:::

## Wat een formule moet kloppen

Elke formule uit de natuurkunde zegt dat twee dingen gelijk zijn. Je kunt twee dingen alleen gelijk stellen als ze van dezelfde soort zijn: een lengte kan gelijk zijn aan een andere lengte, maar niet aan een tijd. Het lijkt een kleinigheid, maar het is een van de krachtigste controles die je hebt. Het is een *test zonder rekenen*: je hoeft niet te weten of de getallen kloppen, alleen of de eenheden aan beide kanten van het gelijkteken hetzelfde zijn.

Om dat te formaliseren onderscheid je de **dimensie** van een grootheid van haar eenheid. De dimensie zegt van welke basissoort de grootheid is: lengte (L), massa (M), tijd (T), en voor de andere basisgrootheden stroomsterkte (I), temperatuur ($\Theta$), hoeveelheid stof (N) en lichtsterkte (J). De dimensie van snelheid is bijvoorbeeld lengte gedeeld door tijd, genoteerd als $[v] = \text{L}\,\text{T}^{-1}$. De eenheid kan m/s zijn, km/h of mijl per uur, maar de dimensie blijft hetzelfde. Dimensies zijn daarom onafhankelijk van het gekozen stelsel van eenheden.

Voor het omgaan met dimensies gelden drie spelregels. Ten eerste kun je alleen grootheden van dezelfde dimensie optellen, aftrekken of gelijk stellen. Ten tweede vermenigvuldig of deel je dimensies net als eenheden: $[F] = [m]\,[a] = \text{M}\,\text{L}\,\text{T}^{-2}$. Ten derde moet het argument van een functie als $\sin$, $\exp$ of $\ln$ dimensieloos zijn: je kunt de sinus van “drie meter” niet nemen, want de reeks waarmee de functie is gedefinieerd, telt machten van het argument bij elkaar op, en die hebben elk een andere dimensie.

Daarmee beantwoord je de denkvraag. Een afstand heeft dimensie L. De formule $s = v \cdot t^2$ levert $[v][t]^2 = \text{L}\,\text{T}^{-1}\,\text{T}^2 = \text{L}\,\text{T}$, en dat is geen lengte. De formule kan niet kloppen, ongeacht wat $v$ en $t$ voorstellen. De correcte versie $s = v \cdot t$ geeft $\text{L}\,\text{T}^{-1}\,\text{T} = \text{L}$: dat klopt dimensioneel. Dat bewijst nog niet dat de formule goed is (ook $s = 2vt$ klopt dimensioneel), maar het sluit veel fouten uit.

:::example Controleer de eenheid van kinetische energie
De kinetische energie van een bewegend voorwerp is $E_\text{k} = \tfrac{1}{2} m v^2$. Klopt dat dimensioneel met de joule?

**Stap 1.** Schrijf de dimensies op: $[m] = \text{M}$ en $[v] = \text{L}\,\text{T}^{-1}$. De factor $\tfrac{1}{2}$ is een zuiver getal en heeft geen dimensie.

**Stap 2.** Werk uit: $[E_\text{k}] = \text{M} \cdot (\text{L}\,\text{T}^{-1})^2 = \text{M}\,\text{L}^2\,\text{T}^{-2}$.

**Stap 3.** Vergelijk met de joule: $1\ \text{J} = 1\ \text{kg}\cdot\text{m}^2/\text{s}^2$, dus ook $\text{M}\,\text{L}^2\,\text{T}^{-2}$.

**Conclusie.** De formule en de eenheid joule kloppen met elkaar. Merk op dat de dimensie niets zegt over de factor $\tfrac{1}{2}$: die haal je alleen uit een afleiding of een experiment.
:::

{{ exercises: 01-024, 01-025 }}

## Dimensieanalyse als ontdekmethode

Dimensies controleren een formule achteraf, maar je kunt ze ook gebruiken om een verband te *vinden*. Dat gaat zo: je bedenkt welke grootheden volgens jou een rol spelen, schrijft het verband op als een product van machten, en laat de dimensies bepalen welke machten mogelijk zijn. Je krijgt dan vaak alles behalve één getal.

Neem een slinger: een kleine massa $m$ aan een draad met lengte $L$, in een veld met valversnelling $g$. Hoe hangt de slingertijd $T$ af van deze grootheden? Stel $T = C \cdot L^{a}\,g^{b}\,m^{c}$ met $C$ een getal zonder dimensie. De dimensies moeten aan beide kanten gelijk zijn: $\text{T} = \text{L}^{a}\,(\text{L}\,\text{T}^{-2})^{b}\,\text{M}^{c}$. Dat levert per basisdimensie een vergelijking op:

$$
\text{M:}\ c = 0 \qquad \text{L:}\ a + b = 0 \qquad \text{T:}\ -2b = 1
$$

Dus $b = -\tfrac{1}{2}$, $a = \tfrac{1}{2}$ en $c = 0$. Het resultaat is

$$
T = C \sqrt{\frac{L}{g}}.
$$

Zonder een enkele natuurwet te kennen heb je hiermee twee dingen vastgesteld: de slingertijd hangt niet van de massa af (Galilei zei dat al, op grond van experimenten), en hij groeit met de wortel van de lengte. Een slinger die viermaal zo lang is, doet er dus twee keer zo lang over. De constante $C$ kan dimensieanalyse niet geven. Die moet uit een meting komen, of uit een berekening: voor kleine uitslagen blijkt $C = 2\pi$ te zijn.

:::example De slingertijd uitrekenen
Een slinger is $1{,}00\ \text{m}$ lang. Met $T = 2\pi\sqrt{L/g}$ en $g = 9{,}81\ \text{m/s}^2$ is de slingertijd:

**Stap 1.** Reken onder de wortel: $\dfrac{L}{g} = \dfrac{1{,}00\ \text{m}}{9{,}81\ \text{m/s}^2} = 0{,}1019\ \text{s}^2$. De eenheid $\text{m}$ valt weg en $\text{s}^2$ blijft over.

**Stap 2.** Neem de wortel: $\sqrt{0{,}1019\ \text{s}^2} = 0{,}3193\ \text{s}$.

**Stap 3.** Vermenigvuldig met $2\pi$: $T = 2\pi \times 0{,}3193\ \text{s} \approx 2{,}01\ \text{s}$.

**Controle.** De eenheid van $\sqrt{L/g}$ is $\sqrt{\text{s}^2} = \text{s}$, precies wat je van een tijd verwacht. De heen-en-weerzwaai duurt dus ongeveer twee seconden. De “secondenslinger” van de Franse commissie, die één seconde nodig heeft voor één zwaai (heen óf terug), is dus bijna 1 m lang; dat is een van de redenen dat de meter als maat zo’n goede kandidaat leek.
:::

Dit principe is breder bruikbaar dan het lijkt. Wanneer je de relevante grootheden goed hebt gekozen, ligt het verband op een constante na vast. Verwant is het schaalargument dat Galilei in 1638 in zijn *Discorsi* gebruikte om te laten zien waarom reuzen niet kunnen bestaan: schaal je een dier met een factor $k$ op, dan groeit de doorsnede van zijn botten met $k^2$ maar zijn gewicht met $k^3$. De botten halen het op een gegeven moment niet meer. Het is hetzelfde rekenen met machten als bij de omrekening van oppervlak en volume in les 3.

## Als eenheden misgaan

Eenheden niet controleren kan duur uitvallen. Op 23 september 1999 ging de Amerikaanse Mars Climate Orbiter verloren bij het bereiken van Mars. Uit het onderzoeksrapport van NASA bleek dat het ene softwaresysteem de stuwkracht van de motortjes opgaf in pond-kracht seconden, terwijl het andere systeem uitging van newtonseconden. Eén pondkracht is ongeveer 4,45 newton. De berekende baan week daardoor stap voor stap af, en de sonde kwam veel lager langs de planeet dan bedoeld. Het was geen rekenfout in de gewone zin: elke berekening klopte, maar twee onderdelen spraken niet dezelfde taal.

Een ander geval: op 23 juli 1983 raakte een Boeing 767 van Air Canada halverwege een vlucht zonder brandstof, omdat de brandstof in pond was berekend in plaats van in kilogram. De piloten wisten het vliegtuig veilig te laten landen op een voormalig militair vliegveld bij Gimli in Manitoba. Daarom heeft die vlucht in de volksmond de bijnaam “Gimli Glider”. Beide voorvallen gaan over hetzelfde: een getal zonder expliciete eenheid is gevaarlijk, en als je gegevens uit twee bronnen combineert, moet je eerst controleren welk stelsel elke bron gebruikt.

{{ exercises: 01-026, 01-030 }}

## Schatten met Fermi

Soms heb je geen nauwkeurig getal nodig, maar een idee van de orde van grootte. Hoeveel liter lucht ademt iemand per dag in? Hoe vaak klopt een hart in een mensenleven? Zulke vragen noemt men naar de Italiaans-Amerikaanse natuurkundige Enrico Fermi **Fermi-vragen**. Fermi stond erom bekend dat hij zulke problemen aanpakte door ze op te splitsen in deelvragen die je wél kunt schatten. Tijdens de Trinity-proef, de eerste kernexplosie op 16 juli 1945 in New Mexico, liet hij volgens zijn eigen later beschreven verslag stukjes papier vallen vóór en na de schokgolf; uit de verplaatsing schatte hij ter plekke de sterkte van de explosie op ongeveer tien kiloton TNT. De officiële waarde bleek ongeveer 21 kiloton te zijn: binnen een factor twee, uit een handvol papiersnippers.

Het geheim van zo’n schatting is dat fouten elkaar deels opheffen. Als je elk van vijf deelschattingen een beetje te hoog of te laag kiest, zijn dat niet allemaal dezelfde kant op. Het totaal ligt vaak binnen een factor 2 à 3 van de goede waarde, en dat is voor de orde van grootte genoeg. Een goede Fermi-schatting volgt vaste stappen: definieer de grootheid die je zoekt, splits haar in deelschattingen die je wel kunt maken, schat elk deel met een afgeronde en verdedigbare waarde, combineer ze en controleer ten slotte of de uitkomst aannemelijk is.

:::example Hoe vaak klopt een hart in een leven?
**Stap 1.** Definieer: het aantal hartslagen $N$ in een leven van ongeveer 80 jaar.

**Stap 2.** Splits: hartslagen per minuut maal minuten in een leven. Schat een rustig hart op 70 slagen per minuut. Het aantal minuten is $80 \times 365 \times 24 \times 60 = 80 \times 525\,600 \approx 4{,}2 \times 10^{7}$.

**Stap 3.** Combineer: $N \approx 70 \times 4{,}2 \times 10^{7} \approx 2{,}9 \times 10^{9}$.

**Controle.** Dat is ongeveer drie miljard hartslagen. Als je het hart 100 slagen per minuut geeft, kom je op vier miljard; bij 60 op iets minder dan drie miljard. De orde van grootte, enkele miljarden, ligt dus vast, ook al is elke deelschatting onzeker.

**Conclusie.** Een mensenhart klopt zo’n $3 \times 10^{9}$ keer in een leven. Meer cijfers zijn niet gerechtvaardigd, want de aannames zijn niet nauwkeuriger dan een tiental procent.
:::

## Schatten met dimensies: de Trinity-explosie

Fermi’s papiersnippers zijn niet de enige manier om de kracht van de Trinity-proef te schatten. De Britse natuurkundige Geoffrey Ingram Taylor liet zien dat je dat ook kunt met alleen foto’s en dimensieanalyse. Tijdens de proef maakte men opnamen van de bolvormige vuurbal, en foto’s uit die reeks werden in 1949 in een tijdschrift gepubliceerd. Taylor vroeg zich af: als de straal $R$ van de vuurbal op een tijdstip $t$ afhangt van de vrijgekomen energie $E$ en de dichtheid van de lucht $\rho$, hoe hangen die drie dan samen?

Zoals bij de slinger stel je $E = C \cdot \rho^{a} R^{b} t^{c}$ en eis je gelijke dimensies: $\text{M}\,\text{L}^2\,\text{T}^{-2} = (\text{M}\,\text{L}^{-3})^{a}\,\text{L}^{b}\,\text{T}^{c}$. Dat geeft $a = 1$, daarna $-3 + b = 2$ dus $b = 5$, en $c = -2$. Dus

$$
E \approx C\,\frac{\rho R^{5}}{t^{2}}.
$$

De constante $C$ is van de orde 1. Taylor kwam in 1950 met foto’s op ongeveer 17 kiloton, tegen een officiële opbrengst van ongeveer 21 kiloton: een knappe schatting uit niet meer dan een paar tekeningen.

:::example Een Taylor-schatting met afgeronde getallen
Neem een vuurbal met straal $R = 140\ \text{m}$ op $t = 0{,}025\ \text{s}$ na de ontsteking, en luchtdichtheid $\rho = 1{,}2\ \text{kg/m}^3$. Schat de energie, met $C = 1$.

**Stap 1.** Vul in: $E = \dfrac{1{,}2\ \text{kg/m}^3 \times (140\ \text{m})^5}{(0{,}025\ \text{s})^2}$.

**Stap 2.** Reken eerst de machten uit: $(140)^5 \approx 5{,}38 \times 10^{10}$ en $(0{,}025)^2 = 6{,}25 \times 10^{-4}$.

**Stap 3.** Combineer: $E \approx \dfrac{1{,}2 \times 5{,}38 \times 10^{10}}{6{,}25 \times 10^{-4}}\ \text{J} \approx 1{,}03 \times 10^{14}\ \text{J}$. De eenheid is $\dfrac{\text{kg}}{\text{m}^3}\cdot\dfrac{\text{m}^5}{\text{s}^2} = \text{kg}\,\text{m}^2/\text{s}^2 = \text{J}$.

**Conclusie.** Dat is ongeveer 103 terajoule, ofwel, met $1\ \text{kiloton TNT} = 4{,}184 \times 10^{12}\ \text{J}$, ongeveer 25 kiloton. De waarden in deze opgave zijn afgeronde illustratiewaarden; ze zijn niet de gepubliceerde meetgegevens.
:::

{{ exercises: 01-027, 01-028, 01-029 }}
