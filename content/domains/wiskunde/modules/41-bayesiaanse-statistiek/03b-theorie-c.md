# Een onbekende kans leren uit gegevens

Tot nu toe had H twee mogelijke waarden: defect of goed, ziek of gezond. Veel
vragen hebben oneindig veel mogelijke antwoorden. Welk deel van de
kiezers steunt een voorstel? Hoe groot is de kans dat deze drukknop het doet?
Hoe vaak komt een bepaalde fout voor? Je kunt zo'n onbekende succeskans $p$ zelf
als parameter met een priorverdeling beschrijven. De onzekerheid over $p$ is dan
een kansverdeling op het interval van 0 tot 1, en Bayes' regel werkt met die
verdeling als geheel.

## Prior, likelihood en posterior als verdelingen

Voor $k$ successen in $n$ conditioneel onafhankelijke Bernoulli-proeven
met dezelfde p is de likelihood evenredig met $p^k(1-p)^{n-k}$. Dat is een
functie van $p$: voor elke mogelijke waarde van $p$ geeft ze aan hoe goed die
waarde de waargenomen $k$ verklaart. Een prior is een dichtheid $f(p)$ op
$(0,1)$, en de posterior is evenredig met het product:

$$
f(p\mid k,n)\ \propto\ f(p)\cdot p^k(1-p)^{n-k}.
$$

De normalisatie, de teller delen door de integraal van het product over alle $p$,
maakt er weer een dichtheid van.

## Het Beta-binomiale model

Een handige prior is de **Beta-verdeling**, met dichtheid evenredig met
$p^{a-1}(1-p)^{b-1}$ voor $0<p<1$, met $a,b>0$. Bij $a=b=1$ is de dichtheid
uniform: alle waarden van $p$ zijn even aannemelijk. Bij $a=b=2$ krijg je een
klokje met top bij 0,5. Bij $a>b$ ligt de massa rechts van het midden.

Vermenigvuldigen met de likelihood geeft

$$
p^{a-1}(1-p)^{b-1}\cdot p^{k}(1-p)^{n-k}=p^{a+k-1}(1-p)^{b+n-k-1},
$$

en dat is weer van de vorm van een Beta-dichtheid, nu met andere parameters:

$$
p\mid k,n\sim\operatorname{Beta}(a+k,\;b+n-k).
$$

De prior en de posterior zitten in dezelfde familie, daarom heet de Beta een
**toegevoegde (conjugate) prior** bij het binomiale model. Het bijwerken is
bovendien niet meer dan optellen: de eerste parameter krijgt de successen erbij,
de tweede de mislukkingen.

Het gemiddelde van een $\operatorname{Beta}(a,b)$-verdeling is $a/(a+b)$. Het
posteriorgemiddelde is dus

$$
E(p\mid k,n)=\frac{a+k}{a+b+n}.
$$

:::example Zeven successen uit tien
Met Beta(1;1) als prior en 7 successen plus 3 mislukkingen krijg je
Beta(8;4) als posterior. Het posteriorgemiddelde is $8/12=2/3$.
Dat verschilt van de ruwe steekproefproportie 0,7, doordat de prior meeweegt.
:::

{{ widget: function-plot fn="1320*x^7*(1-x)^3" fn2="6435*x^8*(1-x)^4" xmin=0 xmax=1 ymin=0 ymax=3.5 title="Posterior Beta(8;4) na een vlakke prior (eerste grafiek) en Beta(9;5) na een Beta(2;2)-prior (tweede grafiek)" }}

Beide grafieken zijn dichtheden: het oppervlak eronder is 1. Je ziet dat de tweede
iets naar het midden is getrokken en smaller is. De prior $\operatorname{Beta}(2;2)$
voelt aan als voorkennis dat $p$ waarschijnlijk niet extreem is.

{{ exercises: 41-015, 41-016, 41-017 }}

## De regel van opvolging

Het bijzondere geval $a=b=1$ is historisch beroemd. Met een uniforme prior en $k$
successen in $n$ proeven is de posteriorverwachting $(k+1)/(n+2)$. Voor de kans op
een succes bij de volgende proef geeft dat dezelfde waarde. Laplace stelde deze
**regel van opvolging** op. Hij paste hem toe op de vraag of de zon morgen weer
opkomt, gegeven alle dagen waarop ze al is opgekomen. Als de zon $n$ keer is
opgekomen en nooit niet, is de kans op morgen $(n+1)/(n+2)$. Dat is vlak onder 1,
maar nooit precies 1.

De regel maakt iets zichtbaar dat de ruwe proportie verbergt. Als je een
munt drie keer werpt en drie keer kop krijgt, zegt de proportie "kans op kop is
1". De regel van opvolging geeft $4/5$: een zekere voorspelling is na drie
worpen niet verdedigbaar. De $+1$ en $+2$ zijn als het ware een succes en een
mislukking die je van tevoren al meetelt.

{{ exercise: 41-036 }}

## De invloed van de prior onderzoeken

Met dezelfde data maar Beta(2;2) krijg je Beta(9;5), met gemiddelde
$9/14\approx0{,}6429$. Beide priors zijn symmetrisch rond 0,5, maar
de tweede concentreert meer massa rond dat midden. Je kunt het posteriorgemiddelde
schrijven als een gewogen gemiddelde van het prior-gemiddelde en de
steekproefproportie:

$$
\frac{a+k}{a+b+n}=\frac{a+b}{a+b+n}\cdot\frac{a}{a+b}+\frac{n}{a+b+n}\cdot\frac{k}{n}.
$$

Het gewicht van de data is $n/(a+b+n)$. Bij weinig gegevens kan de prior
merkbaar wegen; bij veel informatieve gegevens neemt haar relatieve invloed af.
Bij $n=10$ en prior Beta(2;2) weegt de data $10/14\approx71\%$; bij
$n=100$ is dat $100/104\approx96\%$. Met 70 successen uit 100 is het
posteriorgemiddelde bij Beta(2;2) gelijk aan $72/104\approx0{,}692$, en bij een
vlakke prior $71/102\approx0{,}696$. De twee priors zijn dan bijna niet meer te
onderscheiden.

Een prior kan wel zwaar wegen als hij sterk is. Een Beta(20;20) is gelijk aan
de kennis van ongeveer 40 eerdere proeven en trekt de schatting krachtig naar 0,5.
Dat is terecht als je die kennis werkelijk hebt, en schadelijk als je haar
slechts veronderstelde.

{{ exercises: 41-018, 41-037, 41-038, 41-039 }}

De termen a en b kun je in de update als succes- en mislukkingsgewichten
interpreteren. Het zijn geen letterlijk uitgevoerde eerdere proeven, tenzij
je prior daadwerkelijk op zulke proeven is gebaseerd.

## Een posterior is meer dan haar gemiddelde

De posterior is een volledige verdeling, en je mag er alles uit afleiden wat je
wilt weten. Met Beta(8;4) is de kans dat $p$ groter is dan 0,5 ongeveer 0,89:
voor de uitspraak "de kans is groter dan een half" is er dus behoorlijk steun,
maar geen zekerheid. Een **95%-credible interval** is een interval dat 95% van
de posteriorkans bevat. Meestal neem je het centrale interval, met 2,5% aan
elke kant. Voor Beta(8;4) loopt dat ongeveer van 0,39 tot 0,89, een breed
interval, passend bij tien waarnemingen. Bij 70 successen uit 100 en een vlakke
prior (Beta(71;31)) is het interval ongeveer $[0{,}60;\,0{,}78]$.

Bereken de grenzen met posterior-kwantielen in geschikte software; het gemiddelde
plus een willekeurige marge is geen credible interval.

### Credible interval en betrouwbaarheidsinterval

Het verschil met een frequentistisch 95%-betrouwbaarheidsinterval zit in de
interpretatie, niet in de rekenkunde. Een credible interval zegt: gegeven prior,
model en de waargenomen data, ligt $p$ met kans 95% in dit interval. De kans
hoort bij de parameter, voorwaardelijk op de data die je hebt. Een
betrouwbaarheidsinterval zegt iets over de **procedure**: als je de procedure
vaak herhaalt bij nieuwe steekproeven, omvat 95% van de gevonden intervallen de
ware waarde van $p$. De ware $p$ ligt vast en het interval is toevallig; voor
één berekend interval is "95% kans" in strikte zin niet toegestaan, hoewel mensen
dat zo lezen.

Een credible interval geeft ook geen garantie dat de procedure bij elke ware $p$
een frequentistische dekking van 95% heeft. Bij veel gegevens en een zwakke prior
lopen de twee in de praktijk bijna gelijk op, maar het zijn principieel
verschillende uitspraken.

{{ exercise: 41-019 }}

### Twee manieren van denken, nuchter bekeken

In de frequentistische statistiek is kans de relatieve frequentie op lange termijn
bij herhaalbare experimenten. Parameters zijn vaste, onbekende getallen en
krijgen geen kansverdeling; je beoordeelt procedures (toetsen, intervallen) op hun
gedrag bij herhaling. In de Bayesiaanse statistiek is kans een maat voor
onzekerheid, en parameters mogen daarom een verdeling hebben. Je krijgt dan een
direct antwoord op de vraag die je werkelijk stelt, namelijk hoe aannemelijk
iedere parameterwaarde is gegeven de data. Daar staat een prijs tegenover: je moet een
prior kiezen.

Beide benaderingen hebben sterke en zwakke punten. De Bayesiaanse methode maakt het
gebruik van voorkennis mogelijk en past bij sequentiële beslissingen, maar de
uitkomst kan van de prior afhangen, vooral bij weinig data. De frequentistische
methode vraagt geen prior en heeft duidelijke garanties op lange termijn, maar
beantwoordt vaak niet de vraag die je stelde, en haar uitkomsten worden
regelmatig verkeerd gelezen. In de praktijk gebruiken goede statistici beide, en
bij veel data komen de conclusies meestal overeen.

Rapporteer de prior, likelihood, data, posterior en een gevoeligheidsanalyse.
Zo kan iemand anders zien welke conclusies door de gegevens worden gedragen
en welke sterker van de modelkeuzes afhangen.
