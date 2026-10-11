# De grenzen van een lijn

Een regressielijn is een samenvatting van de data die je hebt. Alles wat je erbuiten doet, is een aanname. In deze les
loop je langs de plaatsen waar die aannames het vaakst breken: buiten het meetbereik, bij selectie op extreme waarden, bij oorzaak en gevolg, en bij verbanden die helemaal niet recht zijn.

## Extrapolatie

**Interpoleren** is voorspellen binnen het bereik van de waargenomen $x$-waarden; **extrapoleren** is voorspellen erbuiten. Binnen het bereik heb je
data die de lijn onderbouwen. Daarbuiten niet, en de lijn is slechts een verlenging van een patroon waarvan je niet weet of het blijft gelden.

Bij de zes studenten loopt $x$ van 2 tot 10 uur. De lijn $\hat y=4{,}70+0{,}369x$ voorspelt bij 24 uur studeren een cijfer van $13{,}6$, terwijl het maximum
een 10 is. Het model is niet 'fout' binnen het bereik, het houdt er alleen geen rekening met een plafond. Het intercept is een extrapolatie van dezelfde soort: bij $x=0$ voorspelt het model $4{,}70$. Dat getal is niet wat een student haalt die niet heeft
gestudeerd (die haalt waarschijnlijk veel lager), maar het punt waar de lijn de $y$-as snijdt. Het intercept is een wiskundig onderdeel van de lijn, en niet altijd een bruikbare voorspelling.

{{ exercise: 40-038 }}

## Regressie naar het gemiddelde

Galton merkte op dat de kinderen van zeer lange ouders gemiddeld lang waren, maar niet zo lang als hun ouders. In z-scores is dat precies wat de formule voor de helling zegt. Zijn $x$ en $y$ beide
gestandaardiseerd ($s_x=s_y=1$), dan is $b_1=r$ en gaat de lijn door $(0;0)$:

$$
\hat z_y=r\cdot z_x.
$$

Omdat $|r|<1$ is de voorspelde z-score van $y$ altijd dichter bij nul dan de z-score van $x$. Een ouderpaar met $z=+2$ heeft bij $r=0{,}5$ een voorspeld kind van $z=+1$. Galton schatte voor lengte een
regressiecoëfficiënt van ongeveer twee derde: kinderen weken gemiddeld ongeveer een derde van de afwijking van hun ouders terug naar het populatiegemiddelde.

![Regressie naar het gemiddelde in z-scores](/images/diagrams/m40-regressie-naar-gemiddelde.svg "De gestippelde lijn zou 'geen regressie' zijn (y = x). De bruine regressielijn is vlakker, omdat r kleiner is dan 1. Gesimuleerde data, eigen diagram.")

Dit is geen natuurwet die individuen terugdrijft, en ook geen proces in de tijd. Het is een wiskundig gevolg van onvolmaakte correlatie. Het werkt zelfs omgekeerd: de ouders van zeer lange kinderen zijn gemiddeld ook minder lang dan hun kinderen. Wie selecteert op een extreme waarde in een
variabele die deels uit toeval bestaat, vindt gemiddeld een minder extreme waarde in een tweede meting. Daarom lijkt de sporter na een recordseizoen 'in te zakken', en lijkt de leerling met de laagste toetsscore na bijles 'vooruit te gaan'. Zonder vergelijkingsgroep
kun je regressie naar het gemiddelde niet van een echt effect onderscheiden.

{{ exercise: 40-039 }}

## Correlatie is geen causaliteit

Een correlatie zegt dat twee variabelen samen bewegen. Ze zegt niet waarom. Voor een samenhang tussen $X$ en $Y$ zijn grofweg vier verklaringen mogelijk.

1. $X$ veroorzaakt $Y$ (de verklaring waar je op hoopt).
2. $Y$ veroorzaakt $X$: **omgekeerde causaliteit**. Mensen die meer ziekenhuisbezoeken hebben, zijn gemiddeld zieker. Dat is niet omdat het ziekenhuis ziek maakt.
3. Een derde variabele $Z$ veroorzaakt allebei: een **confounder** of verstorende variabele. In de zomer worden meer ijsjes verkocht en verdrinken meer mensen. Warm weer is de gemeenschappelijke oorzaak.
4. Toeval of selectie. Als je genoeg variabelen met elkaar vergelijkt, ligt er altijd een paar met een hoge correlatie tussen.

Dat laatste verklaart de verzamelingen van **spurious correlations**: het aantal mensen dat per jaar verdrinkt in een zwembad naast het aantal films waarin een bepaalde acteur speelt,
twee tijdreeksen die samen oplopen. Met veel mogelijke vergelijkingen en weinig waarnemingen zijn zulke toevalstreffers onvermijdelijk.

Een causale conclusie vergt een ander soort onderbouwing dan een correlatie: een **gerandomiseerd experiment** waarin de onderzoeker de waarden van $X$ toewijst, waardoor confounders gemiddeld
over de groepen verdeeld raken, of een zorgvuldige observationele analyse met een causaal model dat de aannames expliciet maakt. Een regressielijn met hoge $R^2$ vervangt dat niet.

### Simpsons paradox

Soms keert een verband om wanneer je groepen samenvoegt. Twee scholingsprogramma's, $A$ en $B$, worden vergeleken op het aantal deelnemers dat slaagt. Deelnemers verschillen sterk in voorkennis.

| | veel voorkennis | weinig voorkennis | totaal |
|---|---|---|---|
| programma A | 9 van 10 (90%) | 30 van 90 (33%) | 39 van 100 (39%) |
| programma B | 80 van 90 (89%) | 3 van 10 (30%) | 83 van 100 (83%) |

In elke groep apart doet A het iets beter, maar in totaal lijkt B veel beter. De verklaring is dat A voornamelijk deelnemers met weinig voorkennis kreeg, en B vooral deelnemers met veel voorkennis. Voorkennis is een confounder die samenhangt met zowel het programma als de uitkomst. Welke
vergelijking de juiste is, hangt af van de causale structuur, niet van de rekenregels. Hier is de vergelijking binnen groepen de zinvolle. Het totaal geeft een misleidend beeld, doordat de groepen niet vergelijkbaar zijn samengesteld.

{{ exercises: 40-040, 40-041 }}

## Verbanden die niet recht zijn

Als het residuplot een boog laat zien, kun je soms een andere schaal kiezen waarop het verband wél recht is. Het bekendste geval is exponentiële groei, $y=a\cdot g^x$. Neem aan beide kanten de natuurlijke logaritme (module 26):

$$
\ln y=\ln a+(\ln g)\,x.
$$

Zet je $\ln y$ uit tegen $x$, dan krijg je een rechte lijn met intercept $\ln a$ en helling $\ln g$. Voer je de regressie uit op $(x;\ln y)$, dan zijn de teruggerekende waarden $a=e^{b_0}$ en $g=e^{b_1}$. De helling $b_1$ heeft een
bijzondere betekenis: bij een kleine $b_1$ is de groei per eenheid $x$ ongeveer $b_1$ als fractie. Precies is het $e^{b_1}-1$, dus bij $b_1=0{,}3$ is dat $e^{0{,}3}-1\approx0{,}35$: 35% groei per eenheid.

Een tweede vorm is de machtsfunctie $y=ax^k$, waarbij je zowel $x$ als $y$ logaritmeert: $\ln y=\ln a+k\ln x$. De regressie op log-log-schaal geeft de exponent $k$ als helling.

Een transformatie is geen truc om de correlatie op te krikken, maar een modelkeuze. Je moet de gedachte kunnen verdedigen dat het verband in de bestudeerde situatie multiplicatief is. Bovendien verandert de interpretatie: een helling op logaritmische schaal gaat over procentuele veranderingen,
en een voorspelling moet je terugrekenen met $e^{\hat y}$.

{{ exercise: 40-042 }}

## Rangcorrelatie: Spearman

Soms is het verband wel monotoon (altijd stijgend of altijd dalend) maar niet recht, of zijn er uitschieters die $r$ domineren. Dan helpt het om niet de waarden maar de **rangen** te gebruiken. Rangschik $x$ en $y$ apart van laag naar hoog (gedeelde posities krijgen het gemiddelde van de rangen), en bereken Pearsons $r$ op de rangen. Dat is Spearmans **rangcorrelatie** $\rho$. Zonder gelijke waarden geldt de handige vorm

$$
\rho=1-\frac{6\sum d_i^2}{n(n^2-1)},
$$

waarbij $d_i$ het verschil is tussen de rang van $x_i$ en die van $y_i$. Voor $y=x^2$ met $x=1,\dots,5$ is $\rho=1$, terwijl Pearsons $r\approx0{,}981$: Spearman ziet het perfecte monotone verband, Pearson ziet de lichte kromming. Spearman is veel minder gevoelig voor uitschieters, omdat een extreem grote waarde slechts de hoogste rang krijgt. De prijs is dat je alleen iets zegt over de volgorde, niet over de grootte van de stappen.

{{ exercise: 40-043 }}
