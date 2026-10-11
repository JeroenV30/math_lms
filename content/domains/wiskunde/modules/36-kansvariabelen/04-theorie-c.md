# Continue variabelen

Een wachttijd of lengte modelleer je vaak als continu: tussen twee mogelijke
waarden liggen weer andere waarden. Bij zo'n variabele werkt een kansfunctie
$P(X=x)$ niet, want je kunt de waarden niet opsommen en de kansen kunnen niet
allemaal positief zijn: er zijn overaftelbaar veel waarden en de totale kans is
maar 1. Hier past een andere beschrijving.

## Van staafdiagram naar dichtheid

Stel je een lengte voor, gemeten in steeds fijnere klassen. Bij klassen van
10 cm is het histogram een grof staafdiagram. Bij klassen van 1 cm worden de
staven smaller en lager, en bij klassen van 1 mm nog meer. Maak je de histogram-
hoogtes zo dat de *oppervlakte* van een staaf (niet de hoogte) de relatieve
frequentie van die klasse voorstelt, dan nadert de bovenrand van de staven
een vloeiende kromme. Dat is de **kansdichtheid** $f$.

Een dichtheid $f(x)$ geeft geen kans op
één exact getal. De kans ontstaat pas als je oppervlakte neemt:

$$
P(a\le X\le b)=\int_a^b f(x)\,dx.
$$

Hier gebruik je de integraal uit module 30 als oppervlakte onder een
grafiek. De dichtheid is niet-negatief en de totale oppervlakte is 1:
$\int_{-\infty}^{\infty}f(x)\,dx=1$. Een dichtheid
mag boven 1 liggen: bij een uniforme verdeling op [0; 0,1] is de hoogte 10.
Het product van hoogte en breedte is nog steeds 1. Alleen de oppervlakte is een
kans; de hoogte $f(x)$ is een kans per eenheid van $x$ (een
*dichtheid*, zoals massa per volume), en heeft daarom de eenheid "per meter" of
"per minuut".

:::example Een uniforme wachttijd
Een model neemt alle tijdstippen tussen 0 en 4 minuten even waarschijnlijk.
De dichtheid is $1/4$ op dat interval en nul daarbuiten.
$P(1\le X\le3)=(3-1)/4=0{,}5$. Voor $X=2$ is de breedte nul, dus de
kans ook nul. Dat betekent niet dat een waargenomen wachttijd onmogelijk is:
een meting met beperkte precisie staat in werkelijkheid voor een klein interval.
:::

{{ exercises: 36-014, 36-015, 36-016 }}

## Waarom P(X = a) = 0

Dit is de belangrijkste breuk met het discrete geval. Een enkel punt $a$ is
het interval $[a,a]$ met breedte nul, en
$$
P(X=a)=\int_a^a f(x)\,dx=0.
$$
Dat klinkt tegenstrijdig: de wachttijd moet toch *iets* zijn? Het punt is dat
"precies 2,000000 minuten, met oneindig veel decimalen" een gebeurtenis is die
je met geen enkele meting kunt vaststellen. Gebeurtenissen met kans nul
kunnen wel voorkomen; ze zijn alleen onmeetbaar smal. Een meting op de
seconde nauwkeurig betekent altijd een interval, zoals $1{,}99\le X\le2{,}01$.

Een praktisch gevolg: bij continue variabelen maakt het niet uit of je de
grenzen meeneemt. Er geldt
$$
P(a\le X\le b)=P(a<X<b)=P(a<X\le b)=F(b)-F(a),
$$
met $F(x)=P(X\le x)=\int_{-\infty}^x f(t)\,dt$ de verdelingsfunctie. Voor de
dichtheid geldt omgekeerd $f(x)=F'(x)$ waar $F$ differentieerbaar is. Dit is de
hoofdstelling van de integraalrekening in kansrekeningvorm: $F$ is de
primitieve van $f$.

:::example Een dichtheid die niet constant is
Neem $f(x)=2x$ op het interval $[0;1]$ en 0 elders. Controle: de oppervlakte
is $\int_0^1 2x\,dx=[x^2]_0^1=1$, dus dit is een geldige dichtheid. De
verdelingsfunctie is $F(x)=x^2$ voor $0\le x\le1$. Dan geldt
$P(X\le\tfrac12)=F(\tfrac12)=\tfrac14$ en
$P(\tfrac12\le X\le1)=1-\tfrac14=\tfrac34$. De waarden dicht bij 1 zijn
waarschijnlijker dan die dicht bij 0, zoals de stijgende dichtheid doet verwachten.
Je ziet het ook in de figuur: de driehoek tot $x=\tfrac12$ is veel kleiner dan
het trapezium daarachter.
:::

{{ widget: function-plot fn="2*x" xmin=-0.2 xmax=1.2 ymin=-0.2 ymax=2.4 area=true lower=0 upper=0.5 title="Dichtheid f(x) = 2x op [0; 1]: P(X ≤ 0,5) als oppervlakte" }}

{{ exercises: 36-033, 36-038 }}

## Verwachting en variantie bij een dichtheid

De som uit het discrete geval wordt een integraal: elke waarde $x$ weegt met
de dichtheid $f(x)$ in plaats van met een kans. Voor een continue dichtheid bereken je
$$
E(X)=\int_{-\infty}^{\infty} x f(x)\,dx\quad\text{en}\quad
E(X^2)=\int_{-\infty}^{\infty} x^2 f(x)\,dx,
$$
en blijft $\operatorname{Var}(X)=E(X^2)-[E(X)]^2$ gelden. Alleen het rekenen
verandert, niet de betekenis: het zwaartepunt en de spreiding.

Bij de uniforme verdeling op [0;4] is $E(X)=2$ en
$\operatorname{Var}(X)=16/12=4/3$. In het algemeen heeft een uniforme verdeling
op $[a;b]$ verwachting $\tfrac{a+b}{2}$ (het midden, zoals je verwacht) en
variantie $\tfrac{(b-a)^2}{12}$. De breedte komt gekwadrateerd voor:
verdubbelen van het interval vervierdubbelt de variantie.

:::example Verwachting en variantie bij f(x) = 2x
Voor de dichtheid $f(x)=2x$ op [0;1] geldt
$$
E(X)=\int_0^1 x\cdot2x\,dx=\Bigl[\tfrac23x^3\Bigr]_0^1=\tfrac23,\qquad
E(X^2)=\int_0^1 x^2\cdot2x\,dx=\Bigl[\tfrac12x^4\Bigr]_0^1=\tfrac12.
$$
Dus $\operatorname{Var}(X)=\tfrac12-\tfrac49=\tfrac{9-8}{18}=\tfrac1{18}$ en
$\sigma_X\approx0{,}236$. De verwachting $\tfrac23$ ligt rechts van het midden
$\tfrac12$ van het interval, omdat de dichtheid naar rechts oploopt.
:::

{{ exercises: 36-034, 36-035 }}

## De exponentiële wachttijd

Een belangrijk voorbeeld is de tijd tot een gebeurtenis die op elk moment even
waarschijnlijk plaatsvindt: de wachttijd tot de volgende klant, of tot een
radioactief verval. Met een gemiddeld tempo van $\lambda$ gebeurtenissen per
tijdseenheid is de dichtheid
$$
f(x)=\lambda e^{-\lambda x}\quad(x\ge0),
$$
de verdelingsfunctie $F(x)=1-e^{-\lambda x}$, en
$E(X)=\dfrac1\lambda$, $\operatorname{Var}(X)=\dfrac1{\lambda^2}$. De dichtheid
begint op hoogte $\lambda$ en neemt exponentieel af (vergelijk module 25 en 26);
korte wachttijden zijn dus waarschijnlijker dan lange, terwijl de gemiddelde
wachttijd hoger ligt dan de meest voorkomende. Het uitgebreide verhaal over
deze verdeling volgt in module 37; hier gebruik je haar als tweede voorbeeld
van een dichtheid.

:::example Wachten op de bus
Neem aan dat de wachttijd (in minuten) exponentieel is met $\lambda=0{,}5$. De
gemiddelde wachttijd is $1/0{,}5=2$ minuten. De kans dat je binnen 2 minuten
vertrokken bent, is
$$
P(X\le2)=F(2)=1-e^{-0{,}5\cdot2}=1-e^{-1}\approx0{,}632.
$$
Deze kans ligt boven 0,5 hoewel de gemiddelde wachttijd precies 2 minuten is:
de verdeling is scheef naar rechts en de mediaan ligt links van het gemiddelde.
Een paar lange wachttijden trekken het gemiddelde omhoog.
:::

{{ exercises: 36-036, 36-037 }}

:::warning Een dichtheid is geen kans
Twee veelgemaakte fouten. Eerst: $f(x)$ aflezen als de kans op $X=x$. Dat is
alleen bij discrete variabelen juist; bij een dichtheid is $P(X=x)=0$ en
$f(x)$ mag boven 1 liggen. Dan: de kans uit de hoogte in plaats van de
oppervlakte halen. Als de dichtheid 0,25 is op een interval van breedte 2, is
de kans $0{,}25\cdot2=0{,}5$ en niet $0{,}25$.
:::
