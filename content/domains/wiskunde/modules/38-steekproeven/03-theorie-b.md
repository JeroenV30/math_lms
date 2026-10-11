# Standaardfout en centrale limietstelling

Stel dat je een populatie hebt met een onbekend gemiddelde $\mu$, en dat je
herhaaldelijk een steekproef van $n$ eenheden trekt. Elke keer krijg je een
ander steekproefgemiddelde $\bar x$. Die gemiddelden vormen zelf een verdeling:
de **steekproefverdeling van het gemiddelde**. Het is een denkbeeldige verdeling, want
in werkelijkheid trek je maar één keer, maar ze bepaalt volledig hoe ver je ene
$\bar x$ van $\mu$ kan zitten. Deze les beantwoordt daarom drie vragen: waar ligt het
midden van die verdeling, hoe breed is ze, en welke vorm heeft ze?

## Het midden: zuiver zonder vertekening

Als elke eenheid onafhankelijk uit dezelfde populatie komt, met gemiddelde $\mu$ en
standaardafwijking $\sigma$, dan geldt voor de steekproefgemiddelden:

$$
E(\bar X)=\mu.
$$

Het gemiddelde van de gemiddelden is dus het populatiegemiddelde. Een schatter
met die eigenschap heet **zuiver** (zonder systematische afwijking). Dat is een
uitspraak over toevalsfout; vertekening door een scheef kader (les 2) zit er
niet in.

## De breedte: de standaardfout

De spreiding van $\bar X$ volgt uit de rekenregels voor de variantie van een
som van onafhankelijke grootheden. De variantie van een som is de som van de
varianties, dus $\operatorname{Var}(X_1+\dots+X_n)=n\sigma^2$. Deel je de som door $n$, dan
deel je de variantie door $n^2$:

$$
\operatorname{Var}(\bar X)=\frac{n\sigma^2}{n^2}=\frac{\sigma^2}{n},
\qquad
SE(\bar X)=\frac{\sigma}{\sqrt n}.
$$

Deze standaardafwijking van de schatter noemen we de **standaardfout** (*standard
error*, SE). Het is cruciaal om $\sigma$ en $SE$ niet te verwarren. De
standaardafwijking $\sigma$ beschrijft hoe **individuele waarnemingen** om
$\mu$ heen spreiden. De standaardfout beschrijft hoe het **gemiddelde** van $n$
waarnemingen om $\mu$ heen spreidt. Die tweede spreiding is kleiner, omdat in een
gemiddelde hoge en lage waarden elkaar gedeeltelijk compenseren. Als $\sigma$
onbekend is, schat je de standaardfout met $s/\sqrt n$.

:::example Groter meten, minder onzekerheid
Bij $\sigma=12$ en $n=36$ is $SE=12/\sqrt{36}=12/6=2$. Voor $n=144$ is
$SE=12/12=1$. Vier keer zoveel waarnemingen halveert de standaardfout. Een factor vier
groter is dus niet hetzelfde als vier keer nauwkeuriger.
:::

{{ exercises: 38-004, 38-005, 38-028 }}

### De wortelwet

De standaardfout daalt met $\sqrt n$, niet met $n$. Wil je de fout met een factor 3
verkleinen, dan heb je $3^2=9$ keer zoveel metingen nodig; voor een factor
10 zelfs honderd keer zoveel. Dat verklaart waarom nauwkeurigheid duur wordt: de eerste honderd
metingen verbeteren je schatting veel meer dan de laatste honderd uit
een steekproef van tienduizend.

:::example Hoeveel metingen voor een bepaalde SE?
Je wilt dat de standaardfout van een gemiddelde 0,5 is, bij $\sigma=12$. Uit
$0{,}5=12/\sqrt n$ volgt $\sqrt n=12/0{,}5=24$, dus $n=24^2=576$. Let op de
laatste stap: je moet na het delen nog kwadrateren. Wie bij $\sqrt n=24$ stopt, rekent
met een factor 24 minder dan nodig.
:::

{{ exercises: 38-006, 38-007, 38-030 }}

## De vorm: de centrale limietstelling

Midden en breedte zijn nu bekend. Over de vorm doet de **centrale limietstelling**
(CLS, *central limit theorem*) een opmerkelijke uitspraak. Bij onafhankelijke,
identiek verdeelde waarnemingen met eindige variantie wordt de verdeling van het
gemiddelde, na standaardiseren, bij groeiend $n$ steeds meer een normale verdeling:

$$
Z=\frac{\bar X-\mu}{\sigma/\sqrt n}\ \longrightarrow\ N(0;1).
$$

De individuele waarnemingen hoeven daarvoor niet normaal verdeeld te zijn. Reistijden
zijn bijvoorbeeld scheef: veel korte reizen, een lange staart van uitschieters. Het
gemiddelde van honderd reistijden is toch ongeveer normaal verdeeld. Abraham de Moivre
liet in 1733 al zien dat het aantal keer kop bij veel muntworpen bij
benadering normaal verdeeld is; Laplace breidde dat later veel verder uit.

Hoe snel gebeurt dat? De regel "vanaf $n=30$ is het wel goed" is geen wiskundige
stelling. Bij een symmetrische verdeling is de benadering vaak al bij $n=10$
redelijk. Bij sterke scheefheid of zware staarten kun je veel meer nodig hebben,
soms honderden. De omvang van het nodige $n$ hangt dus af van de vorm van de
populatie.

{{ widget: sampling n=30 seed=38 }}

Klik herhaald op 100 steekproeven. Vergelijk daarna $n=5$ met $n=100$. De
staafjes stellen **gemiddelden** voor, geen losse reistijden. De simulatie
trekt met terugleggen uit een vaste, scheve populatie. Je kunt daarom het
populatiegemiddelde als referentie gebruiken, iets wat bij echt onderzoek
meestal onbekend is. Let op twee dingen: de gemiddelden worden bij groter $n$
smaller (de wortelwet) en symmetrischer (de CLS).

{{ exercise: 38-008 }}

### Rekenen met de steekproefverdeling

Omdat $\bar X$ ongeveer normaal verdeeld is met gemiddelde $\mu$ en
standaardafwijking $\sigma/\sqrt n$, kun je kansen over het steekproefgemiddelde
uitrekenen met de normale verdeling uit module 37, precies zoals je kansen over een
individuele waarneming uitrekent, maar nu met $SE$ in plaats van $\sigma$.

:::example Een kans over het gemiddelde
Een populatie heeft $\mu=100$ en $\sigma=20$. Je trekt $n=100$. Wat is de kans
dat $\bar X>104$?

Stap 1: $SE=20/\sqrt{100}=2$.
Stap 2: $z=(104-100)/2=2$.
Stap 3: $P(Z>2)\approx0{,}0228$.

Zo'n gemiddelde van 104 of meer komt bij onafhankelijke trekkingen dus ongeveer
bij 2,3% van de steekproeven voor. Een individuele waarde boven 104 is veel
gewoner: $P(X>104)$ met $z=0{,}2$ is ongeveer 0,42, als de populatie ongeveer normaal
was.
:::

{{ widget: normal-distribution mu=100 sigma=2 lower=104 upper=130 xmin=92 xmax=112 }}

In deze widget is $\sigma$ de standaardfout van het gemiddelde (2), niet de
standaardafwijking van individuen (20). Verschuif de grenzen en zie hoe het gekleurde
gebied de kans weergeeft.

{{ exercise: 38-029 }}

:::warning Afhankelijke metingen
Honderd metingen op één persoon zijn niet hetzelfde als honderd onafhankelijke
personen. Dagmetingen uit hetzelfde proces kunnen samenhangen. Dan is
$s/\sqrt n$ niet zonder meer de juiste standaardfout. Bij trekken zonder
terugleggen uit een eindige populatie is bovendien een eindigepopulatiecorrectie
nodig als je een substantieel deel van die populatie meet: de standaardfout wordt dan
kleiner met een factor $\sqrt{(N-n)/(N-1)}$. Bij $n$ klein ten opzichte van $N$ (zeg minder
dan 5%) is die correctie te verwaarlozen.
:::

## Wat je hieruit meeneemt

De steekproefverdeling van het gemiddelde heeft midden $\mu$, breedte
$\sigma/\sqrt n$ en bij voldoende grote $n$ een bijna normale vorm. Dat drietal
maakt het mogelijk de onzekerheid van een enkel steekproefgemiddelde te
kwantificeren. In de volgende les keren we de redenering om: uit het ene
gemiddelde dat je hebt, bouw je een interval rond $\mu$.
