# De vorm en de top

In de vorige les zag je dat de oppervlakte $x^2$ op een bijzondere manier groeit. In deze les geef je die groei een gezicht: de parabool. Je begint met de allereenvoudigste, $y=x^2$, en onderzoekt daarna wat er gebeurt als je de formule aanpast. Het doel is dat je bij een formule de grafiek kunt *zien* voordat je iets uitrekent.

## De basisparabool $y=x^2$

Een tabel met ook negatieve waarden van $x$ laat de belangrijkste eigenschap meteen zien.

| $x$ | $-3$ | $-2$ | $-1$ | $0$ | $1$ | $2$ | $3$ |
|---|---|---|---|---|---|---|---|
| $y=x^2$ | 9 | 4 | 1 | 0 | 1 | 4 | 9 |

Twee getallen die tegengesteld zijn, zoals $-2$ en $2$, hebben hetzelfde kwadraat. De grafiek is daardoor **symmetrisch** ten opzichte van de y-as: wat links gebeurt, gebeurt gespiegeld rechts. Het laagste punt is $(0;0)$. Dat punt heet de **top** van de parabool, en de verticale lijn $x=0$ waarin je spiegelt is de **symmetrie-as**.

Merk op dat de grafiek niet "rechte stukjes" bevat. Tussen $x=0$ en $x=1$ stijgt de functie met 1, tussen $x=1$ en $x=2$ met 3, tussen $x=2$ en $x=3$ met 5. De helling neemt voortdurend toe, en dat is precies waarom de grafiek buigt.

:::warning Een kwadraat is nooit negatief
Het kwadraat van een negatief getal is positief: $(-5)^2=25$, niet $-25$. De haakjes zijn essentieel. Zonder haakjes betekent $-5^2$ het tegengestelde van $5^2$, dus $-25$. Bij het invullen van een negatieve waarde in $x^2$ zet je daarom altijd haakjes.
:::

## Dalparabool en bergparabool

Vermenigvuldig je $x^2$ met een getal $a$, dan krijg je $y=ax^2$. Het teken van $a$ bepaalt de richting.

- Bij $a>0$ opent de parabool naar boven. De top is het laagste punt: een **dalparabool**. De functie heeft een minimum.
- Bij $a<0$ opent de parabool naar beneden. De top is het hoogste punt: een **bergparabool**. De functie heeft een maximum.

De grootte van $|a|$ bepaalt hoe steil de parabool is. Bij $a=3$ stijgt de grafiek driemaal zo snel als bij $a=1$; de parabool is smal. Bij $a=\tfrac12$ is de grafiek breed en plat. En bij $a=0$? Dan staat er $y=0$, een rechte lijn en dus geen parabool. Daarom eisen we in de definitie van een kwadratische functie altijd dat $a\neq0$.

:::definition Kwadratische functie
Een **kwadratische functie** is een functie met een formule van de vorm
$$f(x)=ax^2+bx+c\qquad\text{met } a\neq 0.$$
De grafiek is een **parabool**. De getallen $a$, $b$ en $c$ heten de coëfficiënten.
:::

Probeer het zelf uit. Schuif $a$ door negatieve en positieve waarden en let op de richting en de steilheid. De schuifregelaars voor $p$ en $q$ gebruik je zo meteen.

{{ widget: function-plot fn="a*(x-p)^2+q" a=1 amin=-3 amax=3 astep=0.5 p=0 pmin=-4 pmax=4 q=0 qmin=-6 qmax=6 xmin=-6 xmax=6 ymin=-8 ymax=12 title="y = a(x - p)² + q" }}

## De parabool verschuiven: de topvorm

Wat doet de grafiek als je een getal optelt of aftrekt? Neem $y=x^2+3$: elke y-waarde is 3 hoger, dus de hele parabool schuift 3 omhoog en de top ligt in $(0;3)$. Neem nu $y=(x-2)^2$. De uitvoer is nul als $x-2=0$, dus bij $x=2$. De hele parabool schuift 2 naar *rechts*. Dat voelt tegenintuïtief, want er staat een min. Maar denk eraan: wat je in de haakjes doet, moet je compenseren met de invoer. Om dezelfde uitvoer te krijgen als $x^2$ bij $0$, moet je nu $x=2$ invullen.

Combineer je beide, dan krijg je de **topvorm**:

:::formula Topvorm
$$y=a(x-p)^2+q$$
De top is het punt $(p;q)$ en de symmetrie-as is de lijn $x=p$. Bij $a>0$ is $q$ het minimum, bij $a<0$ het maximum.
:::

Het getal $p$ lees je dus af met het *tegengestelde teken* van wat in de haakjes staat; het getal $q$ staat er gewoon met zijn eigen teken.

:::example De top uit de topvorm lezen
Gegeven is $f(x)=2(x-3)^2-5$.

1. De haakjes bevatten $x-3$. Die is nul bij $x=3$, dus $p=3$.
2. De term erachter is $-5$, dus $q=-5$.
3. De top is $(3;-5)$ en de symmetrie-as is $x=3$.
4. Omdat $a=2>0$ is dit een dalparabool; het minimum is $-5$.

Controle: $f(3)=2\cdot0^2-5=-5$.
:::

:::example Let op het teken bij een bergparabool
Gegeven is $f(x)=-(x+2)^2+4$.

1. $x+2$ is nul bij $x=-2$, dus $p=-2$. (Er staat een plus, maar $p$ is negatief.)
2. $q=4$.
3. De top is $(-2;4)$.
4. Omdat $a=-1<0$ is dit een bergparabool: het maximum is 4.

Het functiebereik is alle getallen kleiner dan of gelijk aan 4, geschreven als $\langle\leftarrow;4]$.
:::

## Symmetrie gebruiken

De symmetrie-as is meer dan een mooi weetje: ze bespaart rekenwerk. Twee x-waarden die even ver links en rechts van $x=p$ liggen, geven dezelfde functiewaarde. Als de as $x=3$ is, hoort bij $x=1$ (twee links van de as) het spiegelpunt $x=5$ (twee rechts van de as). Het spiegelbeeld van $x_1$ in de as $x=p$ is $x_2=2p-x_1$.

:::tip Schets met vijf punten
Een bruikbare schets heb je met vijf punten: de top, en twee spiegelparen links en rechts ervan. Bereken er twee, spiegel ze, en je hebt er vier.
:::

:::question Een vergelijking met vier onbekenden?
Een parabool heeft top $(1;2)$ en gaat door $(3;10)$. Kun je a vinden zonder de standaardvorm? Vul het punt $(3;10)$ in $y=a(x-1)^2+2$ in en bedenk wat je overhoudt voor $a$.
:::

(Je krijgt $10=a\cdot4+2$, dus $a=2$. Met de topvorm is het één vergelijking met één onbekende.)

{{ exercises: 21-003, 21-004, 21-005, 21-006, 21-007, 21-032 }}
