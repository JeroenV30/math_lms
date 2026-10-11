# Een regressielijn berekenen

## Welke lijn is de beste?

Door een puntenwolk kun je ontelbaar veel lijnen trekken. Welke noem je de beste? Je wilt dat de lijn
dicht bij de punten loopt, maar "dichtbij" kun je op meer dan één manier meten. De gebruikelijke keuze kijkt naar
de **verticale** afstand tussen elk punt en de lijn. Dat is niet willekeurig: bij regressie wil je $y$ voorspellen uit $x$, en
de fout die je dan maakt is precies het verschil in $y$-richting.

We zoeken een lijn $\hat y=b_0+b_1x$. Het dakje duidt een voorspelling aan;
de gemeten y is meestal anders. Het verschil $e_i=y_i-\hat y_i$ is het **residu**. Je zou kunnen proberen de som van de residuen
zo klein mogelijk te maken, maar positieve en negatieve residuen heffen elkaar dan op: elke lijn door het gemiddelde punt heeft
residuensom nul. Daarom kwadrateer je ze. De **kleinste-kwadratenmethode** kiest de lijn die
$\mathrm{SSE}=\sum_i(y_i-\hat y_i)^2$ minimaliseert. Kwadrateren heeft twee voordelen: grote missers wegen zwaarder mee dan kleine,
en de minimalisatie levert nette formules op in plaats van een zoektocht.

## De formules

Het minimum vind je door SSE als functie van $b_0$ en $b_1$ te schrijven en de afgeleiden gelijk aan nul te stellen (module 29 en 30 geven je het gereedschap).
Je krijgt twee vergelijkingen met een eenvoudige oplossing:

$$
b_1=\frac{S_{xy}}{S_{xx}},\qquad b_0=\bar y-b_1\bar x.
$$

De tweede vergelijking zegt dat de lijn altijd door het **gemiddelde punt** $(\bar x;\bar y)$ gaat. Dat is handig: je hoeft alleen de helling te kennen en
kunt de lijn vastzetten in dat punt.

Er is nog een gedaante van de helling die veel meer vertelt. Omdat $r=S_{xy}/\sqrt{S_{xx}S_{yy}}$ en $s_x=\sqrt{S_{xx}/(n-1)}$, $s_y=\sqrt{S_{yy}/(n-1)}$, volgt

$$
b_1=r\cdot\frac{s_y}{s_x}.
$$

De helling is dus de correlatie, omgerekend naar de eenheden van $x$ en $y$. Een sterke correlatie geeft niet automatisch een steile
lijn: een steile lijn komt voort uit een grote verhouding $s_y/s_x$. En een correlatie van nul geeft een horizontale lijn.

:::example De lijn bij de vijf punten
Met $S_{xy}=6$ en $S_{xx}=10$ is $b_1=0{,}6$.
Het intercept is $b_0=\bar y-b_1\bar x=4-0{,}6\cdot3=2{,}2$.
De lijn luidt dus $\hat y=2{,}2+0{,}6x$.
:::

{{ exercises: 40-007, 40-008, 40-009, 40-010 }}

:::example De lijn bij de zes studenten
Voor de zes studenten is $S_{xy}=15{,}5$ en $S_{xx}=42$. Dan is $b_1=15{,}5/42\approx0{,}369$ en
$b_0=6{,}917-0{,}369\cdot6\approx4{,}70$. Controle met de andere formule: $r\,s_y/s_x=0{,}923\cdot1{,}158/2{,}898\approx0{,}369$. De regressielijn is
$$
\hat y=4{,}70+0{,}369\,x.
$$
Bij 9 uur studeren voorspelt het model $4{,}70+0{,}369\cdot9\approx8{,}02$. Een student die 8 uur studeerde en een 8,5 haalde, heeft een voorspelling van
$7{,}65$ en dus een residu van $8{,}5-7{,}65=+0{,}85$: een positief residu ligt boven de lijn.
:::

{{ exercises: 40-026, 40-027, 40-028 }}

## Residuen van de vijf punten

Bij x=4 voorspelt de lijn 4,6, terwijl de waarneming 4 is. Het residu is
$4-4{,}6=-0{,}6$. Een negatief residu ligt onder de lijn.
Alle residuen zijn −0,8; 0,6; 1; −0,6 en −0,2. Hun som is nul, zoals bij elke kleinste-kwadratenlijn met intercept, en hun kwadratensom is 2,4.

{{ exercises: 40-011, 40-012 }}

## Wat betekent de helling?

Als x reclame-uitgaven in duizenden euro's is en y omzet in duizenden euro's,
dan voorspelt één extra duizend euro reclame een toename van 0,6 duizend euro
omzet in dit model. Dat is een beschrijving van het verband, geen gegarandeerde
opbrengst van een ingreep. Het intercept beschrijft x=0, ook wanneer nul niet
in het meetbereik ligt; dan kan het weinig inhoudelijke betekenis hebben.

Een goede interpretatie bevat altijd drie dingen: de eenheden van beide variabelen, het woord "gemiddeld" of "voorspeld", en het
besef dat het om verschillen tussen eenheden gaat en niet om een verandering binnen één eenheid. Bij de studenten zeg je: "Studenten die één uur langer studeerden, hadden gemiddeld
een 0,37 punt hoger cijfer." Je zegt niet: "Als jij een uur langer studeert, stijgt je cijfer met 0,37." Dat tweede is een causale claim over jou persoonlijk, en
de data zijn verzameld over verschillende studenten. Het intercept $4{,}70$ is het voorspelde cijfer bij nul uur studeren, maar de data lopen van 2 tot 10 uur. Dat
is een extrapolatie en het getal heeft dus geen betrouwbare inhoudelijke betekenis; het is vooral nodig om de lijn op de juiste hoogte te leggen.

{{ widget: regression points="(1;2) (2;4) (3;5) (4;4) (5;5)" xmax=7 ymax=8 }}

Sleep één punt omhoog. Kijk welke invloed het heeft op de lijn en op r.
Verplaats vervolgens een punt ver naar rechts. Een punt ver van het
x-gemiddelde heeft veel hefboomwerking, maar is pas invloedrijk wanneer zijn
positie de lijn daadwerkelijk sterk verandert. Daar komen we in de volgende les op terug.

{{ exercise: 40-029 }}

## Regressie van y op x is niet hetzelfde als van x op y

De correlatie is symmetrisch, de regressielijn niet. De lijn die $y$ uit $x$ voorspelt minimaliseert verticale afstanden; de lijn die $x$ uit $y$
voorspelt minimaliseert horizontale afstanden. Hun hellingen zijn $b_{y|x}=r\,s_y/s_x$ en $b_{x|y}=r\,s_x/s_y$. Het product van die twee is $r^2$. Alleen bij $r=\pm1$ zijn het
dezelfde lijn. Wil je het cijfer voorspellen uit studie-uren, dan neem je $y$ = cijfer. Draai je de rollen om, dan krijg je een andere lijn met een andere helling, en die is niet
het omgekeerde van de eerste. De vraag bepaalt dus welke variabele $y$ is.

{{ exercise: 40-031 }}

## R²

$R^2=1-\mathrm{SSE}/S_{yy}$ vergelijkt de resterende variatie met de totale
y-variatie. Hier is $R^2=1-2{,}4/6=0{,}6$. Voor één verklarende variabele
met intercept is dat ook $r^2$. Deze gelijkheid geldt niet voor ieder model.
Voor de studenten is $R^2=0{,}923^2\approx0{,}853$: de verschillen in studie-uren
verklaren in deze steekproef ruim 85% van de variatie in de cijfers.

Let op het woord *variatie*. $R^2=0{,}6$ betekent niet dat 60% van de punten op de lijn ligt, en ook niet dat 60% van de voorspellingen juist is. Het is een verhouding van gekwadrateerde afstanden:
$60\%$ van de totale kwadratensom $S_{yy}$ rond het gemiddelde verdwijnt als je vanaf de lijn voorspelt in plaats van vanaf $\bar y$.

{{ exercise: 40-030 }}

{{ exercise: 40-013 }}

De [NIST-uitleg over kleinste kwadraten](https://www.itl.nist.gov/div898/handbook/pmd/section1/pmd141.htm)
beschrijft het algemene principe van deze methode.
