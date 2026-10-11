# Oppervlakte benaderen met rechthoeken

In de introductie stond een vraag: hoe groot is de oppervlakte onder $y = x^2$ van $x = 0$ tot $x = 1$? In deze les beantwoord je die vraag stap voor stap, zonder nieuwe formules, alleen met rechthoeken en geduld. De methode die je hier leert werkt voor elke grafiek, ook voor meetgegevens waar geen formule bij hoort.

## 1. Het makkelijke geval: een constante grafiek

Begin bij iets wat je al kunt. Een auto rijdt 2 uur lang met een constante snelheid van 90 km/h. Teken de snelheid tegen de tijd: dat is een horizontale lijn op hoogte 90, van $t = 0$ tot $t = 2$.

Het gebied onder die lijn is een **rechthoek** met breedte 2 (uur) en hoogte 90 (km/h). De oppervlakte is

$$
2 \text{ h} \times 90 \text{ km/h} = 180 \text{ km}.
$$

Dat is precies de afgelegde weg. Let op de eenheden: de breedte heeft de eenheid van de horizontale as, de hoogte die van de verticale as, en de oppervlakte het product. Uren maal kilometers per uur geeft kilometers.

:::theory Oppervlakte onder een grafiek als totaal
Als op de verticale as een **tempo** staat (een snelheid, een debiet, een vermogen) en op de horizontale as de **tijd**, dan is de oppervlakte onder de grafiek de **totale hoeveelheid** die in die tijd is opgebouwd.
:::

Bij een constante snelheid is dat een rechthoek. Het probleem begint als de snelheid verandert. Een auto die optrekt heeft elke seconde een andere snelheid. Een grafiek die stijgt of daalt levert een gebied met een schuine of gebogen bovenrand. Hoe meet je dat?

## 2. Het idee: in stukjes knippen

Het antwoord is even simpel als krachtig: **knip het interval in smalle stukjes**. Op een smal stukje verandert de functie maar weinig, dus daar mag je doen alsof ze constant is. Elk stukje wordt dan een rechthoek, en rechthoeken kun je wel uitrekenen.

Neem $f(x) = x^2$ op het interval $[0, 1]$. Verdeel het interval in $n = 4$ gelijke stukjes. Elk stukje heeft breedte

$$
\Delta x = \frac{1 - 0}{4} = \frac{1}{4}.
$$

Het symbool $\Delta x$ (spreek uit: "delta $x$") betekent "een klein verschil in $x$": de breedte van één stukje. De grenzen van de stukjes zijn $0$, $\tfrac14$, $\tfrac12$, $\tfrac34$ en $1$.

Nu moet je per stukje een **hoogte** kiezen. Daarvoor zijn twee voor de hand liggende keuzes.

- Neem de **kleinste** functiewaarde op het stukje. Omdat $x^2$ op $[0, 1]$ stijgt, is dat de waarde aan de linkerkant. De rechthoek ligt dan helemaal *onder* de grafiek.
- Neem de **grootste** functiewaarde, hier aan de rechterkant. De rechthoek steekt dan *boven* de grafiek uit.

![Ondersom en bovensom met vier rechthoeken](/images/diagrams/m30-onder-bovensom.svg "Links de ondersom, rechts de bovensom voor y = x² op [0, 1] met vier rechthoeken van breedte ¼.")

:::example Uitgewerkt voorbeeld: ondersom en bovensom bij n = 4
**Ondersom.** De hoogtes zijn $f(0)$, $f(\tfrac14)$, $f(\tfrac12)$ en $f(\tfrac34)$:

$$
0, \quad \tfrac{1}{16}, \quad \tfrac{4}{16}, \quad \tfrac{9}{16}.
$$

Elke rechthoek is $\tfrac14$ breed, dus

$$
O_4 = \tfrac14 \left(0 + \tfrac{1}{16} + \tfrac{4}{16} + \tfrac{9}{16}\right) = \tfrac14 \cdot \tfrac{14}{16} = \tfrac{14}{64} = 0{,}21875.
$$

**Bovensom.** De hoogtes zijn $f(\tfrac14)$, $f(\tfrac12)$, $f(\tfrac34)$ en $f(1)$:

$$
B_4 = \tfrac14 \left(\tfrac{1}{16} + \tfrac{4}{16} + \tfrac{9}{16} + \tfrac{16}{16}\right) = \tfrac14 \cdot \tfrac{30}{16} = \tfrac{30}{64} = 0{,}46875.
$$

**Conclusie.** De echte oppervlakte $A$ ligt ertussen: $0{,}21875 \leq A \leq 0{,}46875$. Dat is nog een ruime marge, maar het is wel een *zekere* uitspraak: je weet nu dat je schatting uit de introductie in dit interval moest liggen.
:::

Let op een handige werkwijze: tel eerst alle hoogtes op en vermenigvuldig pas daarna één keer met de breedte $\Delta x$. Dat scheelt rekenwerk en vergissingen.

:::definition Ondersom en bovensom
Verdeel $[a, b]$ in $n$ gelijke stukjes van breedte $\Delta x = \dfrac{b - a}{n}$.

- De **ondersom** $O_n$ is de som van de rechthoeken met als hoogte de *kleinste* functiewaarde op elk stukje.
- De **bovensom** $B_n$ is de som van de rechthoeken met als hoogte de *grootste* functiewaarde op elk stukje.

Voor de echte oppervlakte $A$ onder een (positieve) grafiek geldt altijd $O_n \leq A \leq B_n$.
:::

{{ exercises: 30-001, 30-002, 30-003 }}

## 3. Fijner verdelen

Wat gebeurt er als je het aantal stukjes verdubbelt? Neem $n = 8$, dus $\Delta x = \tfrac18$. De grenzen zijn nu $0, \tfrac18, \tfrac28, \dots, \tfrac88$, en de kwadraten daarvan zijn $\tfrac{0}{64}, \tfrac{1}{64}, \tfrac{4}{64}, \dots, \tfrac{64}{64}$.

:::example Uitgewerkt voorbeeld: n = 8
De tellers van de kwadraten zijn de kwadraten $0, 1, 4, 9, 16, 25, 36, 49, 64$.

**Ondersom**: gebruik de eerste acht (linkerkanten):

$$
O_8 = \tfrac18 \cdot \tfrac{0 + 1 + 4 + 9 + 16 + 25 + 36 + 49}{64} = \tfrac18 \cdot \tfrac{140}{64} = \tfrac{140}{512} \approx 0{,}2734.
$$

**Bovensom**: gebruik de laatste acht (rechterkanten):

$$
B_8 = \tfrac18 \cdot \tfrac{1 + 4 + 9 + 16 + 25 + 36 + 49 + 64}{64} = \tfrac18 \cdot \tfrac{204}{64} = \tfrac{204}{512} \approx 0{,}3984.
$$

Het interval waarin de echte oppervlakte moet liggen is gekrompen van $[0{,}219;\ 0{,}469]$ naar $[0{,}273;\ 0{,}398]$.
:::

Met een computer kun je dit doorzetten. De tabel laat zien wat er gebeurt.

| $n$ | ondersom $O_n$ | bovensom $B_n$ | verschil $B_n - O_n$ |
|---|---|---|---|
| 4 | 0,21875 | 0,46875 | 0,25 |
| 8 | 0,27344 | 0,39844 | 0,125 |
| 16 | 0,30273 | 0,36523 | 0,0625 |
| 100 | 0,32835 | 0,33835 | 0,01 |
| 1000 | 0,33283 | 0,33383 | 0,001 |

Twee dingen vallen op.

1. Beide sommen naderen hetzelfde getal, en dat getal lijkt $0{,}3333\ldots = \tfrac13$ te zijn.
2. Het verschil tussen bovensom en ondersom is steeds precies $\tfrac{1}{n}$. Verdubbel je $n$, dan halveert het verschil.

Dat tweede punt is geen toeval. Kijk nog eens naar het voorbeeld: de ondersom en de bovensom gebruiken bijna dezelfde hoogtes, alleen één plaats opgeschoven. Als je ze van elkaar aftrekt, valt alles weg behalve de laatste hoogte van de bovensom en de eerste van de ondersom:

$$
B_n - O_n = \Delta x \cdot \big(f(b) - f(a)\big).
$$

Dit geldt voor elke **stijgende** functie (en met omgekeerd teken voor een dalende). Meetkundig: schuif alle "overstekende" stukjes van de bovensom naar rechts tegen elkaar aan; samen vormen ze één rechthoek van breedte $\Delta x$ en hoogte $f(b) - f(a)$. Hier is dat $\tfrac1n \cdot (1 - 0) = \tfrac1n$.

:::tip Hoe groot moet n zijn?
Omdat $O_n \leq A \leq B_n$, wijkt elke van beide sommen hooguit $B_n - O_n$ af van de echte oppervlakte. Wil je de oppervlakte onder een stijgende grafiek op $0{,}001$ nauwkeurig, kies $n$ dan zo groot dat $\Delta x \cdot (f(b) - f(a)) < 0{,}001$.
:::

## 4. Waarom het precies een derde is

Je kunt het vermoeden $A = \tfrac13$ ook bewijzen. Daarvoor heb je een formule nodig voor de som van de eerste $n$ kwadraten. Die was al in de oudheid bekend; Archimedes gebruikte een variant ervan:

$$
1^2 + 2^2 + 3^2 + \dots + n^2 = \frac{n(n+1)(2n+1)}{6}.
$$

Controleer voor $n = 4$: $1 + 4 + 9 + 16 = 30$, en $\tfrac{4 \cdot 5 \cdot 9}{6} = 30$. Klopt.

De bovensom met $n$ stukjes is

$$
B_n = \frac1n \left( \frac{1^2}{n^2} + \frac{2^2}{n^2} + \dots + \frac{n^2}{n^2} \right) = \frac{1^2 + 2^2 + \dots + n^2}{n^3} = \frac{n(n+1)(2n+1)}{6n^3}.
$$

Werk de teller uit: $n(n+1)(2n+1) = 2n^3 + 3n^2 + n$. Dan

$$
B_n = \frac{2n^3 + 3n^2 + n}{6n^3} = \frac{1}{3} + \frac{1}{2n} + \frac{1}{6n^2}.
$$

Als $n$ steeds groter wordt, gaan $\tfrac{1}{2n}$ en $\tfrac{1}{6n^2}$ naar $0$. Wat overblijft is precies $\tfrac13$. Hetzelfde geldt voor de ondersom (die is $\tfrac13 - \tfrac{1}{2n} + \tfrac{1}{6n^2}$). Omdat $A$ er altijd tussen ligt, moet

$$
A = \frac13.
$$

:::warning Een benadering is geen antwoord, een limiet wel
$B_{1000} = 0{,}33383$ is niet de oppervlakte; het is een bovengrens. Pas de **limiet** van de sommen voor $n \to \infty$ is de oppervlakte zelf. Dat onderscheid is precies wat Archimedes met zijn uitputtingsmethode zo zorgvuldig bewaakte: hij bewees dat de oppervlakte niet groter én niet kleiner kon zijn dan zijn antwoord.
:::

Speel met de grafiek hieronder. Het blauwe gebied is de oppervlakte onder $y = x^2$ tussen de twee schuifjes, en het getal eronder is de waarde die de computer berekent. Zet de grenzen op $0$ en $1$ en vergelijk met $\tfrac13$. Probeer daarna $0$ tot $2$: dat is acht keer zo veel. Kun je bedenken waarom?

{{ widget: function-plot fn="x^2" xmin=-0.5 xmax=2.5 ymin=-0.5 ymax=4.5 area=true lower=0 upper=1 title="Oppervlakte onder y = x²" }}

## 5. Linkersom, rechtersom, middensom

Bij een stijgende functie valt de ondersom samen met de **linkersom** (hoogte aan de linkerkant van elk stukje) en de bovensom met de **rechtersom**. Bij een dalende functie is het andersom. Bij een functie die eerst stijgt en dan daalt, moet je per stukje kijken waar het minimum en maximum liggen. Daarom werkt men in de praktijk vaak met links of rechts, en zegt men er eerlijk bij welke keuze gemaakt is.

Een derde keuze is meestal veel nauwkeuriger: de **middensom**. Daar neem je als hoogte de functiewaarde in het **midden** van elk stukje. Een deel van elke rechthoek steekt boven de grafiek uit en een deel blijft eronder; die fouten heffen elkaar grotendeels op.

:::example Uitgewerkt voorbeeld: middensom bij n = 4
De middens van de stukjes van $[0, 1]$ zijn $\tfrac18$, $\tfrac38$, $\tfrac58$ en $\tfrac78$. De kwadraten zijn $\tfrac{1}{64}$, $\tfrac{9}{64}$, $\tfrac{25}{64}$, $\tfrac{49}{64}$.

$$
M_4 = \tfrac14 \cdot \tfrac{1 + 9 + 25 + 49}{64} = \tfrac14 \cdot \tfrac{84}{64} = \tfrac{84}{256} = 0{,}328125.
$$

Met maar vier rechthoeken zit je al op $0{,}005$ van $\tfrac13$. De ondersom en bovensom zaten er bij $n = 4$ ruim $0{,}1$ naast.
:::

:::definition Riemann-som
Verdeel $[a, b]$ in $n$ stukjes van breedte $\Delta x$ en kies in elk stukje een punt $x_k$. De som

$$
\sum_{k=1}^{n} f(x_k)\,\Delta x = f(x_1)\,\Delta x + f(x_2)\,\Delta x + \dots + f(x_n)\,\Delta x
$$

heet een **Riemann-som**. Ondersom, bovensom, linkersom, rechtersom en middensom zijn allemaal Riemann-sommen, met een verschillende keuze van $x_k$.
:::

Het teken $\sum$ is de Griekse hoofdletter sigma, de S van *som*. Je kent het misschien uit module 28. Het zegt: tel de termen op voor $k = 1, 2, \dots, n$.

:::example Uitgewerkt voorbeeld: een dalende functie
Neem $f(x) = 4 - x^2$ op $[0, 2]$ met $n = 4$, dus $\Delta x = \tfrac12$. De grenzen zijn $0;\ 0{,}5;\ 1;\ 1{,}5;\ 2$ en de functiewaarden daar zijn

$$
f(0) = 4, \quad f(0{,}5) = 3{,}75, \quad f(1) = 3, \quad f(1{,}5) = 1{,}75, \quad f(2) = 0.
$$

De functie **daalt** op dit interval. Dus de kleinste waarde op elk stukje zit *rechts*, de grootste *links*.

- Bovensom (= linkersom): $\tfrac12 (4 + 3{,}75 + 3 + 1{,}75) = \tfrac12 \cdot 12{,}5 = 6{,}25$.
- Ondersom (= rechtersom): $\tfrac12 (3{,}75 + 3 + 1{,}75 + 0) = \tfrac12 \cdot 8{,}5 = 4{,}25$.

De echte oppervlakte ligt dus tussen $4{,}25$ en $6{,}25$. In les 4 zul je zien dat het precies $\tfrac{16}{3} \approx 5{,}33$ is.
:::

{{ exercises: 30-004, 30-005 }}

## 6. Meetgegevens: als er geen formule is

Riemann-sommen hebben één groot voordeel boven alle mooie formules uit de rest van deze module: ze werken ook als je **alleen metingen** hebt. Een watermeter, een snelheidsregistratie in een vrachtwagen, een rij meetwaarden van een sensor: overal staat een tempo op vaste tijdstippen, en wil je het totaal weten.

:::example Uitgewerkt voorbeeld: debiet van een beek
Een waterschap meet elke 2 uur het debiet (de hoeveelheid water per seconde) van een beek, in m³/s:

| tijd (uur) | 0 | 2 | 4 | 6 |
|---|---|---|---|---|
| debiet (m³/s) | 1,2 | 1,8 | 2,1 | 1,5 |

Hoeveel water stroomt er tussen $t = 0$ en $t = 6$ uur voorbij? Neem de **linkersom**: het debiet aan het begin van elk tijdvak van 2 uur.

*Stap 1: eenheden gelijk maken.* Het debiet staat per seconde, de tijd in uren. Twee uur is $2 \cdot 3600 = 7200$ seconden.

*Stap 2: de som.* 

$$
(1{,}2 + 1{,}8 + 2{,}1) \cdot 7200 = 5{,}1 \cdot 7200 = 36\,720 \text{ m}^3.
$$

*Stap 3: kritisch kijken.* De rechtersom geeft $(1{,}8 + 2{,}1 + 1{,}5) \cdot 7200 = 38\,880$ m³. Het echte totaal ligt waarschijnlijk ergens daartussen; met maar vier metingen weet je niet wat er tussendoor gebeurde. Een gemiddelde van beide (dat is de *trapeziumregel*) geeft $37\,800$ m³.
:::

:::warning Eenheden
De meest gemaakte fout bij Riemann-sommen uit meetgegevens is een eenhedenfout: liters per minuut vermenigvuldigen met een tijd in uren, of km/h met seconden. Schrijf altijd de eenheid van $\Delta x$ en van $f$ op, en controleer dat hun product de eenheid is die je zoekt.
:::

{{ exercise: 30-006 }}
