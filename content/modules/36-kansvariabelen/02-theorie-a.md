# Van toevalsproces naar kansverdeling

Je gooit twee munten. De uitkomst kan KK, KV, VK of VV zijn. Wil je alleen weten
hoeveel keer kop verschijnt, dan vertaal je elke uitkomst naar een getal.

:::definition Kansvariabele
Een kansvariabele $X$ is een functie op de uitkomstenruimte. Bij dit voorbeeld
geldt $X(\mathrm{KK})=2$, $X(\mathrm{KV})=X(\mathrm{VK})=1$ en
$X(\mathrm{VV})=0$. De hoofdletter $X$ beschrijft het onzekere getal; een
kleine letter $x$ duidt een mogelijke waarde aan.
:::

Dat het een functie heet, is geen bijzaak. De uitkomstenruimte $\Omega$ bevat
de volledige beschrijving van wat er kan gebeuren (hier de vier muntuitslagen).
De kansvariabele is een regel die elk element van $\Omega$ omzet in een getal:
$X:\Omega\to\mathbb{R}$. Je kunt dezelfde uitkomstenruimte met verschillende
kansvariabelen beschrijven. Bij twee dobbelstenen kun je $S$ nemen als de som,
$M$ als het maximum en $V$ als het verschil; het toevalsproces is hetzelfde,
de getallen zijn verschillend.

Als beide munten eerlijk en onafhankelijk zijn, zijn de vier uitkomsten even
waarschijnlijk. De drie waarden van $X$ zijn dat niet.

| $x$ | 0 | 1 | 2 |
|---|---|---|---|
| $P(X=x)$ | 1/4 | 1/2 | 1/4 |

De waarde 1 kan op twee manieren ontstaan. Dit onderscheid tussen uitkomsten
en waarden voorkomt dat je ten onrechte iedere waarde kans 1/3 geeft.

De schrijfwijze $P(X=1)$ is een afkorting. Er staat eigenlijk: de kans op de
gebeurtenis $\{\omega\in\Omega : X(\omega)=1\}$, de verzameling uitkomsten
waarvoor $X$ de waarde 1 aanneemt. Hier is dat $\{\mathrm{KV},\mathrm{VK}\}$, met
kans $2/4$. Een kansvariabele vertaalt dus gebeurtenissen over getallen
(zoals $X\le1$) terug naar gebeurtenissen over uitkomsten.

{{ exercises: 36-001, 36-002 }}

## Discreet of continu

Er zijn twee hoofdsoorten. Een **discrete** kansvariabele neemt afzonderlijke
waarden aan, eindig of aftelbaar oneindig veel: het aantal koppen, het aantal
storingen op een dag, de ogen van een dobbelsteen. Je kunt de waarden
opsommen, en elke waarde kan een positieve kans hebben.

Een **continue** kansvariabele kan elke waarde in een interval aannemen: een
wachttijd, een lengte, een temperatuur. Tussen twee mogelijke waarden ligt
altijd een derde. Dan kun je de waarden niet meer opsommen, en, zoals je in
les 4 ziet, krijgt een exact getal kans nul. Voor continue variabelen ligt de
kans in intervallen. Er bestaan ook gemengde variabelen, bijvoorbeeld de
schade bij een polis: met kans 0,98 precies nul en anders een continu bedrag.
In deze module blijven we bij de twee zuivere gevallen.

Het onderscheid is in de praktijk vaak een modelkeuze. Een lengte is gemeten
in hele centimeters feitelijk discreet; toch modelleer je haar als continu
omdat het model dan eenvoudiger is en de afrondingsfout verwaarloosbaar. Omgekeerd
modelleer je het aantal inwoners van een land vaak als continu, hoewel het
een geheel getal is.

## Een geldige verdeling

Een discrete kansvariabele heeft afzonderlijke mogelijke waarden, eindig of
aftelbaar veel. De kansfunctie geeft voor elke waarde haar kans. Iedere kans
ligt tussen 0 en 1 en alle kansen tellen op tot 1. Een tabel die niet aan die
eisen voldoet, is geen kansverdeling.

In formule: de kansfunctie is $p(x)=P(X=x)$, met $p(x)\ge0$ voor alle $x$ en
$\sum_x p(x)=1$. De tweede eis zegt dat de mogelijke waarden samen de hele
uitkomstenruimte uitputten: er gebeurt altijd precies één van. Dit is
een van de basiseisen van Kolmogorov (les 6), hier vertaald naar variabelen.

:::example Een onbekende kans aanvullen
Een onderhoudsbedrijf modelleert het aantal storingen op een dag:
$P(X=0)=0{,}2$, $P(X=1)=0{,}5$, $P(X=2)=p$. Omdat de som 1 moet zijn,
is $p=0{,}3$. De kans op minstens één storing is $0{,}5+0{,}3=0{,}8$.
Je kunt ook de complementregel gebruiken: $1-P(X=0)=0{,}8$.
:::

Bij een gebeurtenis die uit meerdere waarden bestaat, tel je de kansen van die
waarden op. Dat mag omdat de waarden elkaar uitsluiten: $X$ kan niet tegelijk 1
en 2 zijn. Kies bij zo'n som steeds de kortste weg. "Minstens één storing" telt
twee termen, maar bij een variabele met tien waarden is "ten minste 2" korter
via het complement $1-P(X\le1)$.

:::example Twee dobbelstenen: een verdeling opbouwen
Gooi twee eerlijke dobbelstenen en laat $S$ de som zijn. De 36 uitkomsten
$(a,b)$ zijn even waarschijnlijk. De som 2 komt alleen uit $(1,1)$; de som 7
uit $(1,6),(2,5),(3,4),(4,3),(5,2),(6,1)$, dus op zes manieren. Daarmee is
$P(S=2)=1/36$ en $P(S=7)=6/36=1/6$. Het aantal manieren neemt van 2 tot 7 toe
met 1 per stap en daarna weer af, zodat de verdeling driehoekig is. Controle:
$1+2+3+4+5+6+5+4+3+2+1=36$, dus de kansen tellen op tot 1.
:::

![Kansfunctie van de som van twee dobbelstenen](/images/diagrams/m36-twee-dobbelstenen.svg "De som van twee dobbelstenen: de kans is evenredig met het aantal manieren waarop de som kan ontstaan.")

{{ exercises: 36-003, 36-004, 36-021, 36-022, 36-023, 36-026 }}

## Cumulatieve kansen

De verdelingsfunctie $F(x)=P(X\le x)$ telt alle kansen tot en met $x$ op.
In de storingstabel is $F(1)=0{,}7$. Voor een discrete variabele zijn de
sprongen in $F$ precies de kansen bij de afzonderlijke waarden.

Let op de grens: $P(X<1)=P(X=0)=0{,}2$, maar $P(X\le1)=0{,}7$.
Een kleine wijziging in de ongelijkheid kan dus een groot verschil maken.

De verdelingsfunctie is er voor elke kansvariabele, discreet of continu, en
heeft vaste eigenschappen: ze is nooit dalend, loopt van 0 (ver links) naar 1
(ver rechts), en is rechtscontinu. Bij een discrete variabele is $F$ een
trapfunctie. In de storingstabel is $F(x)=0$ voor $x<0$, $F(x)=0{,}2$ voor
$0\le x<1$, $F(x)=0{,}7$ voor $1\le x<2$ en $F(x)=1$ vanaf $x=2$. Het gebruik
van $F$ is dat je kansen op intervallen kunt schrijven als verschil:

$$
P(a<X\le b)=F(b)-F(a).
$$

Let op de open en gesloten grenzen. In dit verschil valt $a$ buiten en $b$
binnen het interval. Wil je ook $a$ meetellen, dan tel je $P(X=a)$ erbij.

:::example Een tabel met verdelingsfunctie
Het aantal klanten dat een minuut wacht, heeft de kansen $P(X=1)=0{,}1$,
$P(X=2)=0{,}3$, $P(X=3)=0{,}4$ en $P(X=4)=0{,}2$. De cumulatieve waarden zijn
$F(1)=0{,}1$, $F(2)=0{,}4$, $F(3)=0{,}8$ en $F(4)=1$. De kans op hooguit twee
klanten is $F(2)=0{,}4$; de kans op meer dan twee is $1-F(2)=0{,}6$; de kans op
precies drie is $F(3)-F(2)=0{,}4$.
:::

{{ exercises: 36-024, 36-025 }}

Een modeltabel is geen lijst van werkelijk waargenomen dagen. De kansen kunnen
worden geschat uit eerdere gegevens, maar ook uit een theoretisch toevalsproces
komen. Vermeld altijd hoe je eraan bent gekomen.

:::warning Veelgemaakte fouten bij verdelingen
Drie fouten kom je steeds tegen. Eerst: waarden even waarschijnlijk maken
omdat er drie zijn (de som 7 bij twee dobbelstenen is niet even waarschijnlijk
als de som 2). Verder: een kansentabel accepteren waarvan de kansen niet tot 1
optellen, bijvoorbeeld $0{,}3+0{,}4+0{,}5=1{,}2$. Hier is een van de kansen of de
lijst van waarden fout. En tot slot: $P(X<x)$ en $P(X\le x)$ door elkaar halen
bij een discrete variabele.
:::
