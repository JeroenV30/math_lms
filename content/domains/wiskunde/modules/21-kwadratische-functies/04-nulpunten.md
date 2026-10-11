# Nulproductregel en worteltrekken

Een **nulpunt** van een functie is een x-waarde waarvoor $f(x)=0$ geldt; het is een punt waar de grafiek de x-as raakt of snijdt. Nulpunten opsporen komt neer op het oplossen van de vergelijking $ax^2+bx+c=0$. In deze les leer je de twee eenvoudigste methoden, die meestal volstaan als de getallen vriendelijk zijn: **ontbinden** met de nulproductregel en **worteltrekken**. In de volgende les volgt de methode die altijd werkt.

## De nulproductregel

Het begint met een observatie over vermenigvuldigen die zo vanzelfsprekend lijkt dat je haar bijna over het hoofd ziet. Als twee getallen vermenigvuldigd nul opleveren, dan is minstens één van beide getallen nul. Er bestaan geen twee getallen ongelijk aan nul met product nul.

:::definition Nulproductregel
$$A\cdot B=0\;\Longleftrightarrow\; A=0\ \text{ of }\ B=0.$$
:::

Dit is de sleutel tot kwadratische vergelijkingen. Een vergelijking als $x^2-6x+8=0$ geeft je niets, want je kunt $x$ niet isoleren. Maar als je het linkerlid ontbindt in $(x-2)(x-4)$, staat er een product dat nul moet zijn, en dan weet je dat $x-2=0$ of $x-4=0$.

:::example Ontbinden met de som-productmethode
Los $x^2-6x+8=0$ op.

1. Zoek twee getallen met **product** $8$ en **som** $-6$. De paren met product 8 zijn $1\cdot8$, $2\cdot4$, $(-1)(-8)$ en $(-2)(-4)$. Alleen $-2$ en $-4$ hebben som $-6$.
2. Ontbind: $x^2-6x+8=(x-2)(x-4)=0$.
3. Nulproductregel: $x-2=0$ of $x-4=0$, dus $x=2$ of $x=4$.

Controle: $2^2-6\cdot2+8=4-12+8=0$ en $4^2-6\cdot4+8=16-24+8=0$.
:::

Waarom werkt de som-productmethode? Omdat $(x+m)(x+n)=x^2+(m+n)x+mn$. De coëfficiënt van $x$ is de som van $m$ en $n$, en de constante term is hun product. Je zoekt dus precies de getallen $m$ en $n$ die je net hebt geleerd uit te rekenen. Dit geldt als $a=1$; bij $a\neq1$ deel je eerst door $a$ of je ontbindt met enig puzzelwerk.

:::tip Een kwadratische vergelijking oplossen begint met nul
De nulproductregel werkt alleen als aan één kant van het gelijkteken nul staat. Bij $x^2+2x=8$ ontbind je dus niet $x^2+2x$ en je gooit er ook niet iets bij. Je brengt eerst alles naar links: $x^2+2x-8=0$. Pas daarna ontbind je: $(x+4)(x-2)=0$, dus $x=-4$ of $x=2$.
:::

## Buiten haakjes halen: de nul is een oplossing

Als de constante term ontbreekt, zoals in $x^2-5x=0$, kun je $x$ buiten haakjes halen: $x(x-5)=0$. Dat geeft $x=0$ of $x-5=0$, dus $x=0$ of $x=5$.

:::warning De oplossing $x=0$ niet vergeten
Wie bij $x^2=5x$ beide kanten door $x$ deelt, krijgt $x=5$ en raakt de oplossing $x=0$ kwijt. Delen door $x$ is alleen toegestaan als je zeker weet dat $x\neq0$. Een veilige gewoonte is dus: nooit delen door een onbekende, maar alles naar één kant brengen en ontbinden. Bij $x(x-4)=0$ zijn de oplossingen $x=0$ én $x=4$. De factor $x$ zelf is ook een factor die nul kan zijn.
:::

Bij een parabool betekent dit dat de grafiek door de oorsprong gaat: $f(0)=0$. Het nulpunt bij $x=0$ hoort er gewoon bij.

## Worteltrekken

Is er geen $x$-term, zoals in $x^2=9$ of $(x-2)^2=9$, dan is worteltrekken de snelste weg. De vergelijking $x^2=9$ vraagt: welke getallen hebben kwadraat 9? Dat zijn er twee, $3$ en $-3$.

:::warning Bij $x^2=9$ zijn er twee oplossingen
De vergelijking $x^2=9$ heeft twee oplossingen: $x=3$ of $x=-3$, kort $x=\pm3$. Het is een veelgemaakte fout om alleen $x=3$ te noemen. Het wortelteken $\sqrt9$ staat voor een enkel getal, namelijk de *positieve* wortel $3$. De vergelijking $x^2=9$ is dus iets anders dan $x=\sqrt9$. Los je een vergelijking op, dan neem je beide tekens; bij een lengte in een context valt het negatieve getal daarna af.
:::

:::example Worteltrekken met een verschoven kwadraat
Los $(x-2)^2=9$ op.

1. Neem aan beide kanten de wortel, met beide tekens: $x-2=3$ of $x-2=-3$.
2. Los beide lineaire vergelijkingen op: $x=5$ of $x=-1$.

Controle: $(5-2)^2=9$ en $(-1-2)^2=(-3)^2=9$.
:::

:::example Eerst isoleren, dan wortel trekken
Los $2x^2-8=0$ op.

1. Tel 8 op: $2x^2=8$.
2. Deel door 2: $x^2=4$.
3. Wortel: $x=2$ of $x=-2$.
:::

Bij $x^2=-4$ is er geen enkel getal dat het kwadraat $-4$ oplevert: een reëel kwadraat is nooit negatief. De vergelijking heeft dan geen reële oplossingen. Dit geval keert in de volgende les terug als negatieve discriminant.

## Nulpunten op de grafiek

De oplossingen van $f(x)=0$ zijn de x-coördinaten van de snijpunten van de parabool met de x-as. Een parabool kan de x-as op drie manieren verhouden: hij snijdt de as in twee punten, hij raakt de as in precies één punt (de top ligt dan op de as), of hij blijft er helemaal boven of onder. Deze drie gevallen noemen we later formeel aan de hand van de discriminant. Met $y=(x-2)(x-4)$ en de widget hieronder zie je het eerste geval; verschuif de top met $q$ en volg hoe de nulpunten naar elkaar toe bewegen, samenvallen en verdwijnen.

{{ widget: function-plot fn="(x-2)*(x-4) + q" q=0 qmin=-3 qmax=3 qstep=0.5 xmin=-2 xmax=8 ymin=-4 ymax=10 roots=true title="y = (x - 2)(x - 4) + q" }}

:::example Nulpunten en top samen
Voor $f(x)=x^2-6x+8=(x-2)(x-4)$ vind je de nulpunten $2$ en $4$. De symmetrie-as ligt in het midden, bij $x=3$. Dat valt samen met $-b/2a=6/2=3$. De top is $(3;f(3))=(3;-1)$: dit komt overeen met de topvorm $(x-3)^2-1$.

Een parabool met nulpunten $x_1$ en $x_2$ heeft dus altijd een symmetrie-as bij $x=\tfrac{x_1+x_2}{2}$.
:::

{{ exercises: 21-013, 21-014, 21-015, 21-016, 21-017, 21-036 }}
