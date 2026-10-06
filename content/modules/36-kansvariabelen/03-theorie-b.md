# Verwachtingswaarde en spreiding

Een verdeling bevat veel informatie. Voor een eerste beeld wil je haar
samenvatten in twee getallen: waar ligt het midden, en hoe ver waaieren de
waarden uit? De eerste vraag beantwoordt de verwachtingswaarde, de tweede de
variantie.

## De verwachtingswaarde

De verwachtingswaarde is een gewogen gemiddelde van mogelijke waarden, waarbij
de kansen de gewichten zijn. Voor een discrete variabele:

$$
E(X)=\sum_x xP(X=x).
$$

Het begrip komt rechtstreeks uit het eerlijk verdelen van een inzet. Als je
over $n$ herhalingen van hetzelfde toevalsproces de waarde $x$ ongeveer
$n\,P(X=x)$ keer ziet, dan is het gemiddelde van alle waarnemingen ongeveer
$\sum_x x\,P(X=x)$. De verwachtingswaarde is dus wat het gemiddelde van de
waarnemingen op de lange duur nadert (dat is Bernoullis wet van de grote
aantallen, zie les 6). Ook wel $\mu$ of $\mu_X$. Zie het als het zwaartepunt
van de verdeling: leg je op elke waarde $x$ een gewicht $P(X=x)$ op een
balk, dan balanceert de balk precies in $E(X)$.

:::example Storingen per dag
Bij waarden 0, 1 en 2 met kansen 0,2; 0,5 en 0,3 geldt
$E(X)=0\cdot0{,}2+1\cdot0{,}5+2\cdot0{,}3=1{,}1$ storingen.
Geen enkele dag heeft 1,1 storing. Dit is een gemiddelde over herhalingen.
:::

{{ exercise: 36-005 }}

:::example Een dobbelsteen
Bij een eerlijke dobbelsteen zijn de waarden 1 tot en met 6 elk met kans $1/6$.
$$
E(X)=\frac{1+2+3+4+5+6}{6}=\frac{21}{6}=3{,}5.
$$
Bij gelijke kansen is de verwachting gewoon het gewone gemiddelde van de waarden.
Ook hier is 3,5 geen mogelijke worp. Een oneerlijke dobbelsteen met extra
gewicht op de zes heeft een hogere verwachting, omdat de zes meer gewicht in
de som krijgt.
:::

:::example Een eerlijk spel
Een spel kost een inzet van $s$ euro. Je gooit één dobbelsteen en ontvangt het
aantal ogen in euro. De verwachte winst is $3{,}5-s$. Het spel is *eerlijk*
als de verwachte winst nul is, dus bij $s=3{,}5$. Dit is Huygens' idee van de
waarde van een kans: de eerlijke prijs van een onzekere uitbetaling is haar
verwachting. Bij een inzet van € 4 verlies je gemiddeld € 0,50 per spel,
hoewel je in een afzonderlijk spel ook € 2 kunt winnen (de zes).
:::

{{ exercises: 36-027, 36-031 }}

## Het kwadraat van het gemiddelde is geen gemiddelde van kwadraten

Voor dezelfde tabel is
$E(X^2)=0^2\cdot0{,}2+1^2\cdot0{,}5+2^2\cdot0{,}3=1{,}7$.
Daarentegen is $[E(X)]^2=1{,}21$. De volgorde van middelen en kwadrateren
maakt verschil. Dat verschil is juist de variantie.

In het algemeen geldt voor een functie $g$ van $X$ dat je de verwachting
rechtstreeks uit de verdeling van $X$ kunt berekenen:
$$
E\bigl(g(X)\bigr)=\sum_x g(x)\,P(X=x).
$$
Je hoeft dus niet eerst de verdeling van $g(X)$ af te leiden. Dit heet de
regel van de onbewuste statisticus (in het Engels LOTUS). Voor $g(x)=x^2$ krijg je $E(X^2)$. Let op:
$E(g(X))$ is meestal *niet* gelijk aan $g(E(X))$. Alleen als $g$ lineair is
(zoals $g(x)=ax+b$) vallen ze samen; dat is de basis van de rekenregels in les 5.

## Variantie en standaardafwijking

De spreiding meet je met de verwachte gekwadrateerde afwijking van het
gemiddelde. Het kwadraat is nodig, omdat de gewone afwijkingen $X-\mu$ een
gemiddelde nul hebben: positieve en negatieve afwijkingen heffen elkaar op.

:::formula Variantie en standaardafwijking
$$
\operatorname{Var}(X)=E\bigl((X-E(X))^2\bigr)
=E(X^2)-[E(X)]^2,\qquad
\sigma_X=\sqrt{\operatorname{Var}(X)}.
$$
Voor de storingstabel: variantie $1{,}7-1{,}21=0{,}49$ en standaardafwijking
$0{,}7$. De variantie heeft een gekwadrateerde eenheid; de standaardafwijking
heeft dezelfde eenheid als $X$.
:::

De tweede vorm volgt uit uitwerken. Met $\mu=E(X)$:
$$
E\bigl((X-\mu)^2\bigr)=E(X^2-2\mu X+\mu^2)=E(X^2)-2\mu E(X)+\mu^2
=E(X^2)-\mu^2,
$$
omdat $\mu$ een vast getal is dat je voor de verwachting uit kunt halen en
$E(X)=\mu$. Voor rekenwerk is de rechtervorm handig: je berekent $E(X)$ en
$E(X^2)$ in één tabel en trekt af. Voor begrip is de linkervorm beter: de
variantie is een gemiddelde van kwadraten van afwijkingen, dus nooit negatief.
Dat is ook een controle: komt je rekenwerk op een negatieve variantie uit, dan
heb je ergens een fout gemaakt.

:::example Een dobbelsteen: variantie
Voor de eerlijke dobbelsteen is
$E(X^2)=\dfrac{1+4+9+16+25+36}{6}=\dfrac{91}{6}\approx15{,}167$ en
$[E(X)]^2=3{,}5^2=12{,}25$. Dus
$$
\operatorname{Var}(X)=\frac{91}{6}-\frac{49}{4}=\frac{182-147}{12}=\frac{35}{12}\approx2{,}917,
\qquad\sigma_X\approx1{,}708.
$$
De worpen wijken dus typisch ongeveer 1,7 ogen van 3,5 af.
:::

{{ exercises: 36-006, 36-007, 36-008, 36-028, 36-029 }}

Deze variantie hoort bij de volledige theoretische verdeling. Je deelt hier
niet door $n-1$: je schat geen populatievariantie uit een steekproef, maar
rekent exact met gegeven kansen. Dat is het verschil met de steekproefformule.

## Uitbetaling en nettowinst

Een lot met € 20 uitbetaling bij kans 0,1 heeft verwachting € 2. Kost het
€ 3, dan is de verwachte nettowinst € −1. De mogelijke nettowinsten zijn
echter € 17 en € −3. Verwachte waarde zegt niets over wat één lot oplevert,
en dezelfde verwachting kan bij heel verschillende risico's horen.

Dat laatste maak je zichtbaar met de variantie. Beschouw twee loten met
dezelfde verwachting € 2: lot A betaalt € 20 met kans 0,1; lot B betaalt € 2
met kans 1. Lot B heeft variantie 0, lot A heeft
$E(X^2)-4=40-4=36$, dus standaardafwijking € 6. Hetzelfde gemiddelde, een
volstrekt ander risico. Wie alleen naar $E(X)$ kijkt, ziet dat verschil niet.

:::example Verzekering: premie en spreiding
Een verzekeraar dekt een schade van € 5.000 die per jaar met kans 0,02 optreedt.
De verwachte schade per polis is $5000\cdot0{,}02=100$ euro. Voor de variantie:
$E(X^2)=5000^2\cdot0{,}02=500.000$, dus
$\operatorname{Var}(X)=500.000-100^2=490.000$ en $\sigma_X=700$ euro.
De standaardafwijking is zeven keer de verwachting: één polis is erg
onzeker. Toch kan een verzekeraar met een premie iets boven € 100 verdienen,
omdat hij heel veel polissen heeft. Daarom is de spreiding van sommen en
gemiddelden zo belangrijk (les 5).
:::

{{ exercises: 36-009, 36-010, 36-011, 36-030, 36-032 }}

:::warning Niet iedere verdeling heeft een eindige verwachting
Bij de eindige tabellen in deze module bestaan verwachting en variantie altijd.
Bij oneindige verdelingen moet je controleren of de benodigde sommen of
integralen convergeren. Een rekenregel mag je alleen gebruiken als de
betrokken verwachtingen bestaan. Een bekend voorbeeld is het Sint-Petersburgspel:
je gooit een munt tot de eerste kop en ontvangt $2^k$ euro als dat bij worp $k$
gebeurt. Elke term van de som is $2^k\cdot2^{-k}=1$, dus de verwachting is
oneindig, hoewel de uitbetaling altijd een eindig bedrag is. De verwachting is
dan geen redelijke prijs meer.
:::
