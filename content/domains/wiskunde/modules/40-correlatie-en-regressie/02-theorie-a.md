# Samenhang meten met Pearson r

## Een spreidingsdiagram lezen

Voordat je iets uitrekent, kijk je naar het diagram. Een spreidingsdiagram zet elke waarneming als
punt $(x_i;y_i)$ in het vlak. Daar lees je vier dingen uit af: de **richting** (gaan de punten
gemiddeld omhoog of omlaag?), de **vorm** (rechtlijnig, krom, in groepen?), de **sterkte** (hoe dicht
liggen de punten bij een lijn of kromme?) en eventuele **uitschieters** (punten die niet bij de rest
passen). Pas als vorm en uitschieters in orde zijn, heeft een getal als $r$ betekenis.

![Vier spreidingsdiagrammen met verschillende patronen](/images/diagrams/m40-spreidingspatronen.svg "Vier patronen met hun correlatie. Het vierde verband is sterk maar krom; r mist het bijna volledig. Eigen diagram.")

Het vierde paneel is belangrijk. Daar bepaalt $x$ de waarde van $y$ vrijwel volledig, en toch is
$r$ bijna nul. De correlatiecoëfficiënt meet niet "verband" in het algemeen, maar uitsluitend
**lineaire** samenhang.

## Een lopend voorbeeld

Zes studenten noteren hoeveel uur zij aan een tentamen studeerden ($x$) en welk cijfer zij haalden ($y$).

| student | 1 | 2 | 3 | 4 | 5 | 6 |
|---|---|---|---|---|---|---|
| uren $x$ | 2 | 4 | 5 | 7 | 8 | 10 |
| cijfer $y$ | 5,5 | 6,0 | 6,5 | 7,0 | 8,5 | 8,0 |

Het gemiddelde is $\bar x=6$ uur en $\bar y\approx6{,}92$. De punten gaan duidelijk omhoog, en de wolk
is smal. Je verwacht dus een sterke positieve correlatie. Hoe maak je van dat gevoel een getal?

## Gezamenlijke variatie: de covariantie

Het idee is eenvoudig. Kijk per student hoeveel $x$ boven of onder het gemiddelde ligt, en hoeveel $y$.
Als de student die veel meer dan gemiddeld studeerde ook een hoger dan gemiddeld cijfer haalde, dan hebben
$x-\bar x$ en $y-\bar y$ hetzelfde teken en is hun product positief. Zijn de tekens tegengesteld, dan is het product negatief.
Tel je alle producten op, dan krijg je een som die positief is bij een gezamenlijke stijging, negatief bij een gezamenlijke
daling, en ongeveer nul als er geen patroon is.

Voor de zes studenten:

| $x$ | $y$ | $x-\bar x$ | $y-\bar y$ | product |
|---|---|---|---|---|
| 2 | 5,5 | −4 | −1,42 | 5,67 |
| 4 | 6,0 | −2 | −0,92 | 1,83 |
| 5 | 6,5 | −1 | −0,42 | 0,42 |
| 7 | 7,0 | 1 | 0,08 | 0,08 |
| 8 | 8,5 | 2 | 1,58 | 3,17 |
| 10 | 8,0 | 4 | 1,08 | 4,33 |

De som van de laatste kolom is $S_{xy}=15{,}5$. De **covariantie** van de steekproef is die som gedeeld door $n-1$:

$$
s_{xy}=\frac{S_{xy}}{n-1}=\frac{15{,}5}{5}=3{,}1\ \text{uur}\cdot\text{cijferpunt}.
$$

Dat getal heeft een eenheid: uur maal cijferpunt. Meet je de tijd in minuten, dan wordt het zestig keer zo groot,
terwijl het verband niet veranderd is. Je kunt de covariantie dus wel aflezen op teken, maar niet op grootte. Daar is een
schaalvrije maat voor nodig.

## Pearson r met afwijkingen en met z-scores

Deel de covariantie door de twee standaarddeviaties. Dan vallen de eenheden weg:

$$
r=\frac{s_{xy}}{s_x\,s_y}=\frac{S_{xy}}{\sqrt{S_{xx}\,S_{yy}}}.
$$

Hierbij is $S_{xx}=\sum(x_i-\bar x)^2$ en $S_{yy}=\sum(y_i-\bar y)^2$; de factor $n-1$ valt in de breuk weg. Voor de studenten
is $S_{xx}=42$, $S_{yy}\approx6{,}708$ en dus

$$
r=\frac{15{,}5}{\sqrt{42\cdot6{,}708}}=\frac{15{,}5}{16{,}78}\approx0{,}923.
$$

Er is een tweede manier om dezelfde formule te lezen. Reken elke waarde om naar een
**z-score**: $z_x=(x-\bar x)/s_x$ en $z_y=(y-\bar y)/s_y$. Dat zegt hoeveel standaarddeviaties een waarde van het gemiddelde ligt, en
heeft geen eenheid. Dan is

$$
r=\frac{1}{n-1}\sum_{i=1}^{n}z_{x,i}\,z_{y,i}.
$$

De correlatie is het gemiddelde (met deler $n-1$) van de producten van z-scores. Met $s_x\approx2{,}898$ en $s_y\approx1{,}158$ krijg je
voor de zes studenten de producten $1{,}69;\ 0{,}55;\ 0{,}12;\ 0{,}03;\ 0{,}94;\ 1{,}29$. Hun som is $4{,}62$, en gedeeld door $5$ is dat
weer $0{,}923$. De twee formules zijn hetzelfde, op verschillende manieren opgeschreven. De z-scorevorm laat zien waarom $r$ geen eenheden heeft;
de somvorm is handiger om met de hand te rekenen.

:::example Zo reken je r met sommen
1. Bereken de gemiddelden $\bar x$ en $\bar y$.
2. Zet in een tabel de afwijkingen $x_i-\bar x$ en $y_i-\bar y$ naast elkaar.
3. Bereken per rij $(x_i-\bar x)^2$, $(y_i-\bar y)^2$ en het product $(x_i-\bar x)(y_i-\bar y)$, en tel de kolommen op tot $S_{xx}$, $S_{yy}$ en $S_{xy}$.
4. Deel $S_{xy}$ door $\sqrt{S_{xx}S_{yy}}$ en rond pas aan het eind af.

Tussentijds afronden is de gewoonste bron van afwijkingen in de derde decimaal. Bewaar dus zoveel cijfers als je kunt.
:::

## Een kleiner voorbeeld in detail

Rekenen met zes punten en gebroken afwijkingen is omslachtig. Neem daarom voor het oefenen een kleinere set met hele getallen: de punten $(1;2),(2;4),(3;5),(4;4),(5;5)$. Het gemiddelde punt is
$(3;4)$. Om samenhang te meten, bekijk je hoe iedere waarde van dat gemiddelde
afwijkt.

| $x$ | $y$ | $x-\bar x$ | $y-\bar y$ | product |
|---|---|---|---|---|
| 1 | 2 | −2 | −2 | 4 |
| 2 | 4 | −1 | 0 | 0 |
| 3 | 5 | 0 | 1 | 0 |
| 4 | 4 | 1 | 0 | 0 |
| 5 | 5 | 2 | 1 | 2 |

De producten zijn positief als x en y aan dezelfde kant van hun gemiddelde
liggen. Hun som meet gezamenlijke variatie, maar hangt nog van de eenheden af.

{{ exercises: 40-001, 40-002, 40-003, 40-004, 40-005 }}

:::formula Een schaalvrije maat
$$
r=\frac{S_{xy}}{\sqrt{S_{xx}S_{yy}}},\qquad
S_{xy}=\sum_i(x_i-\bar x)(y_i-\bar y).
$$
$S_{xx}$ en $S_{yy}$ zijn de sommen van de gekwadrateerde afwijkingen.
Bij de tabel zijn ze 10 en 6; $S_{xy}=6$. Dus $r\approx0{,}775$.
:::

{{ exercise: 40-006 }}

Nu de studenten weer. Probeer de covariantie en de z-scorevorm op de zes studenten.

{{ exercises: 40-021, 40-022 }}

## Eigenschappen van r

Bij variatie in beide variabelen ligt r tussen −1 en 1. Het teken geeft de
richting; de absolute waarde geeft hoe sterk het **lineaire** patroon is.
Dat het getal nooit buiten dit bereik komt, volgt uit de ongelijkheid van Cauchy-Schwarz: de som van producten van afwijkingen is nooit groter dan het
product van de wortels uit de kwadratensommen. Gelijkheid, dus $r=\pm1$, treedt alleen op als alle punten exact op één lijn liggen.
Als een variabele constant is, is r ongedefinieerd, niet nul: dan is $S_{xx}=0$ of $S_{yy}=0$ en deel je door nul.

Drie eigenschappen gebruik je steeds weer.

**Schaalonafhankelijk.** Reken je $x$ om met $x'=ax+c$ met $a>0$, dan verandert $r$ niet. Uren naar minuten, graden Celsius naar Fahrenheit,
euro's naar duizenden euro's: geen enkele lineaire omrekening met positieve factor heeft invloed. Is $a<0$, dan wisselt alleen het teken.

**Symmetrisch.** De correlatie tussen $x$ en $y$ is dezelfde als tussen $y$ en $x$. Dat geldt *niet* voor de regressielijn, zoals je in de volgende les ziet.

**Alleen lineair.** Een krom verband kan een r rond nul hebben. Neem $x=-2,-1,0,1,2$ en $y=x^2$. Dan is $y$ volledig bepaald door $x$,
maar de linkerhelft (omlaag) en de rechterhelft (omhoog) heffen elkaar op: $S_{xy}=0$ en dus $r=0$.

{{ exercises: 40-023, 40-024 }}

:::warning r = 0 betekent niet "geen verband"
$r=0$ zegt dat er geen *lineaire* samenhang is. Het kwadratische voorbeeld hierboven heeft een perfect functioneel verband en toch $r=0$.
Omgekeerd garandeert een hoge $r$ niet dat een rechte lijn de juiste vorm is. Teken altijd het diagram.
:::

## Anscombe's kwartet

In 1973 publiceerde de statisticus Francis Anscombe vier kleine gegevenssets van elk elf punten. Ze hebben vrijwel dezelfde gemiddelden, varianties,
correlatie ($r\approx0{,}816$) en regressielijn ($\hat y\approx3{,}0+0{,}5x$). Toch ziet ieder diagram er totaal anders uit: een nette wolk, een zuivere
boog, een lijn met één uitschieter, en tien punten op dezelfde $x$ met één punt ver rechts. Alleen de eerste set past bij een lineair model. Anscombe
maakte met dit kwartet duidelijk dat samenvattende getallen zonder grafiek kunnen misleiden. De les staat in elk statistiekboek: teken eerst, reken daarna.

{{ exercise: 40-025 }}

## Eenheden en interpretatie

Van meter naar centimeter omrekenen verandert r niet. De helling van een
regressielijn verandert wel, want die heeft eenheden. Een sterke correlatie
is bovendien geen bewijs van causaliteit. Derde variabelen, selectie en
omgekeerde oorzakelijkheid kunnen hetzelfde patroon geven.

Gebruik geen vaste grens zoals "boven 0,7 altijd sterk" zonder context.
Bij een ruisige gedragsmeting kan een kleiner verband relevant zijn, terwijl
bij een precisiesensor dezelfde correlatie onvoldoende kan zijn. In de sociale wetenschappen en de biologie is $r=0{,}3$ vaak al informatief; bij
een kalibratie van een meetinstrument verwacht je $r$ boven $0{,}999$. De waarde zegt iets over de smalheid van de puntenwolk, niet over de
inhoudelijke betekenis van het verband.
