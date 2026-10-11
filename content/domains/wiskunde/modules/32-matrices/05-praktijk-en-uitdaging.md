# Klantverloop, populaties en draaiingen

In deze les zet je alles wat je geleerd hebt aan het werk in drie toepassingen. Bij alle drie speelt hetzelfde idee: **een matrix is een machine** die een kolomvector (een verdeling, een populatie, een punt) omzet in een nieuwe kolomvector. Eén matrixvermenigvuldiging is één stap van een proces, en een product van matrices is meerdere stappen na elkaar.

## 1. Klantverloop tussen twee supermarkten

In een kleine stad zijn twee supermarkten, A en B. Elke week doet elk huishouden zijn boodschappen bij één van de twee. Marktonderzoek laat zien:

- van de klanten van A blijft 80% de volgende week bij A, en stapt 20% over naar B;
- van de klanten van B blijft 70% bij B, en stapt 30% over naar A.

![Overgangsdiagram van twee supermarkten](/images/diagrams/m32-overgang-supermarkten.svg "Per week: van A blijft 0,8 bij A en gaat 0,2 naar B; van B blijft 0,7 bij B en gaat 0,3 naar A.")

Deze week winkelen 500 huishoudens bij A en 500 bij B. Hoeveel zijn het er volgende week?

Volgende week bij A: de blijvers van A plus de overstappers van B. Volgende week bij B: de overstappers van A plus de blijvers van B.

$$
\begin{aligned}
A_{\text{nieuw}} &= 0{,}8 \cdot 500 + 0{,}3 \cdot 500 = 400 + 150 = 550 \\
B_{\text{nieuw}} &= 0{,}2 \cdot 500 + 0{,}7 \cdot 500 = 100 + 350 = 450
\end{aligned}
$$

Dat is precies een matrix maal een kolomvector:

$$
\begin{pmatrix} 550 \\ 450 \end{pmatrix} = \underbrace{\begin{pmatrix} 0{,}8 & 0{,}3 \\ 0{,}2 & 0{,}7 \end{pmatrix}}_{T} \begin{pmatrix} 500 \\ 500 \end{pmatrix}
$$

:::definition Overgangsmatrix
Een **overgangsmatrix** $T$ beschrijft hoe een verdeling over toestanden in één tijdstap verandert. Het element $t_{ij}$ is de fractie die van toestand $j$ (kolom: **van**) naar toestand $i$ (rij: **naar**) gaat. Als niemand verdwijnt of erbij komt, telt **elke kolom op tot 1**. Met $x_t$ de verdeling op tijdstip $t$ geldt

$$
x_{t+1} = T x_t
$$
:::

:::warning Van kolom naar rij
In deze cursus geldt: **kolom = van, rij = naar**. Elke kolom telt dan op tot 1, en je vermenigvuldigt $T$ met een **kolomvector** aan de rechterkant. Sommige boeken (vooral in de kansrekening) gebruiken de omgekeerde afspraak, met rijen die optellen tot 1 en een rijvector links. Beide werken, als je maar consequent bent. Controleer bij elke overgangsmatrix eerst welke afspraak er gebruikt wordt.
:::

### Meerdere weken vooruit

Na twee weken pas je $T$ nog eens toe:

$$
x_2 = T x_1 = \begin{pmatrix} 0{,}8 & 0{,}3 \\ 0{,}2 & 0{,}7 \end{pmatrix} \begin{pmatrix} 550 \\ 450 \end{pmatrix} = \begin{pmatrix} 440 + 135 \\ 110 + 315 \end{pmatrix} = \begin{pmatrix} 575 \\ 425 \end{pmatrix}
$$

Door de schakeleigenschap is $x_2 = T(Tx_0) = T^2 x_0$. Je kunt dus ook eerst $T^2$ uitrekenen:

$$
T^2 = \begin{pmatrix} 0{,}8 & 0{,}3 \\ 0{,}2 & 0{,}7 \end{pmatrix} \begin{pmatrix} 0{,}8 & 0{,}3 \\ 0{,}2 & 0{,}7 \end{pmatrix} = \begin{pmatrix} 0{,}64 + 0{,}06 & 0{,}24 + 0{,}21 \\ 0{,}16 + 0{,}14 & 0{,}06 + 0{,}49 \end{pmatrix} = \begin{pmatrix} 0{,}70 & 0{,}45 \\ 0{,}30 & 0{,}55 \end{pmatrix}
$$

$T^2$ is de overgangsmatrix voor **twee weken**: van de klanten van A is na twee weken 70% (weer) bij A. Ook hier telt elke kolom op tot 1. Na $k$ weken geldt $x_k = T^k x_0$.

### Het evenwicht

Ga je verder rekenen, dan zie je 500, 550, 575, 587,5, ... bij A: het aantal klanten groeit steeds minder hard en lijkt naar een vaste waarde te gaan. Een verdeling die niet meer verandert, heet een **evenwicht**: een vector $x$ met $Tx = x$.

:::example Uitgewerkt voorbeeld: het evenwicht bepalen
Noem het evenwicht $\begin{pmatrix} a \\ b \end{pmatrix}$, met $a + b = 1000$ (het totaal blijft gelijk).

**Voorwaarde.** $Tx = x$ geeft voor de eerste rij $0{,}8a + 0{,}3b = a$, dus $0{,}3b = 0{,}2a$.

Lees dat zo: in evenwicht gaan er per week evenveel klanten van B naar A ($0{,}3b$) als van A naar B ($0{,}2a$). Dat is de kern van elk evenwicht: de stromen heffen elkaar op.

**Oplossen.** Uit $0{,}3b = 0{,}2a$ volgt $a = 1{,}5b$. Invullen in $a + b = 1000$ geeft $2{,}5b = 1000$, dus $b = 400$ en $a = 600$.

**Controle.** $T\begin{pmatrix} 600 \\ 400 \end{pmatrix} = \begin{pmatrix} 480 + 120 \\ 120 + 280 \end{pmatrix} = \begin{pmatrix} 600 \\ 400 \end{pmatrix}$. Inderdaad onveranderd.

Op den duur winkelt dus 60% bij A en 40% bij B, ongeacht de beginverdeling. Dat laatste is niet vanzelfsprekend, maar het geldt voor overgangsmatrices waarvan alle elementen positief zijn.
:::

Dit soort modellen heet een **Markovketen**, naar de Russische wiskundige Andrej Markov. Ze worden gebruikt voor klantverloop, maar ook voor het weer (droge en natte dagen), voor de doorstroming van leerlingen door een opleiding, en voor de rangschikking van webpagina's door zoekmachines.

{{ exercises: 32-032, 32-033 }}

## 2. Een populatie in leeftijdsklassen

Ecologen die een diersoort beschermen, willen weten of een populatie groeit of krimpt. Daarvoor is niet alleen het aantal dieren van belang, maar ook de **leeftijdsopbouw**: jonge dieren krijgen nog geen jongen, en niet elk dier overleeft het jaar. Patrick Leslie bedacht in 1945 een matrixmodel dat dit precies beschrijft.

Neem een vogelsoort met drie leeftijdsklassen: 0–1 jaar, 1–2 jaar en 2–3 jaar (ouder worden de vogels niet). Uit veldonderzoek blijkt:

- vogels van 0–1 jaar krijgen geen jongen; 50% overleeft het jaar en wordt 1–2 jaar;
- vogels van 1–2 jaar krijgen gemiddeld 2 jongen per vogel; 40% overleeft en wordt 2–3 jaar;
- vogels van 2–3 jaar krijgen gemiddeld 3 jongen per vogel en sterven daarna.

Het aantal vogels per klasse na een jaar is dan

$$
\begin{pmatrix} j_{\text{nieuw}} \\ m_{\text{nieuw}} \\ o_{\text{nieuw}} \end{pmatrix} = \underbrace{\begin{pmatrix} 0 & 2 & 3 \\ 0{,}5 & 0 & 0 \\ 0 & 0{,}4 & 0 \end{pmatrix}}_{L} \begin{pmatrix} j \\ m \\ o \end{pmatrix}
$$

met $j$, $m$, $o$ het aantal jonge, middelste en oude vogels.

:::definition Leslie-matrix
In een **Leslie-matrix** staan in de **eerste rij** de geboortecijfers (gemiddeld aantal jongen per dier in elke klasse) en **direct onder de hoofddiagonaal** de overlevingsfracties (welk deel van een klasse de volgende klasse haalt). Alle andere elementen zijn 0.
:::

:::example Uitgewerkt voorbeeld: twee jaar vooruit
Begin met 100 jonge, 60 middelste en 20 oude vogels.

**Na één jaar.**

$$
L\begin{pmatrix} 100 \\ 60 \\ 20 \end{pmatrix} = \begin{pmatrix} 0 \cdot 100 + 2 \cdot 60 + 3 \cdot 20 \\ 0{,}5 \cdot 100 \\ 0{,}4 \cdot 60 \end{pmatrix} = \begin{pmatrix} 180 \\ 50 \\ 24 \end{pmatrix}
$$

Totaal: $180 + 50 + 24 = 254$ vogels, tegen 180 aan het begin.

**Na twee jaar.**

$$
L\begin{pmatrix} 180 \\ 50 \\ 24 \end{pmatrix} = \begin{pmatrix} 2 \cdot 50 + 3 \cdot 24 \\ 0{,}5 \cdot 180 \\ 0{,}4 \cdot 50 \end{pmatrix} = \begin{pmatrix} 172 \\ 90 \\ 20 \end{pmatrix}
$$

Totaal: 282 vogels. De populatie groeit, maar niet met een vast percentage per jaar: eerst van 180 naar 254 (+41%), dan naar 282 (+11%). De leeftijdsopbouw schommelt nog. Op lange termijn stabiliseert die meestal, en groeit (of krimpt) de populatie met een vaste factor per jaar. Die factor bereken je met de eigenwaarden van $L$, een onderwerp uit de lineaire algebra dat buiten deze module valt.
:::

{{ exercise: 32-034 }}

## 3. Matrices als bewerkingen van het vlak

Een punt $(x; y)$ in het vlak kun je schrijven als kolomvector $\begin{pmatrix} x \\ y \end{pmatrix}$. Een $2 \times 2$-matrix stuurt elk punt naar een nieuw punt. Zo'n afbeelding heet een **lineaire transformatie**. Bekende meetkundige bewerkingen zijn van dit type.

:::theory Enkele transformatiematrices
| Bewerking | Matrix | $(x; y)$ gaat naar |
|---|---|---|
| spiegeling in de $x$-as | $\begin{pmatrix} 1 & 0 \\ 0 & -1 \end{pmatrix}$ | $(x; -y)$ |
| spiegeling in de $y$-as | $\begin{pmatrix} -1 & 0 \\ 0 & 1 \end{pmatrix}$ | $(-x; y)$ |
| spiegeling in de lijn $y = x$ | $\begin{pmatrix} 0 & 1 \\ 1 & 0 \end{pmatrix}$ | $(y; x)$ |
| draaiing om $O$ over $90^\circ$ (tegen de klok in) | $\begin{pmatrix} 0 & -1 \\ 1 & 0 \end{pmatrix}$ | $(-y; x)$ |
| vermenigvuldiging met factor $k$ vanuit $O$ | $\begin{pmatrix} k & 0 \\ 0 & k \end{pmatrix}$ | $(kx; ky)$ |

:::

Je hoeft deze tabel niet te onthouden. Er is een eenvoudige manier om elke transformatiematrix zelf te vinden: **de kolommen van de matrix zijn de beelden van $(1; 0)$ en $(0; 1)$**. Dat zag je al bij de determinant. Bij een draaiing over $90^\circ$ gaat $(1; 0)$ naar $(0; 1)$ en gaat $(0; 1)$ naar $(-1; 0)$. Zet die twee beelden als kolommen naast elkaar, en je hebt $\begin{pmatrix} 0 & -1 \\ 1 & 0 \end{pmatrix}$.

Dezelfde redenering geeft de algemene draaiing over een hoek $\alpha$. In module 27 zag je op de eenheidscirkel dat $(1; 0)$ na draaien over $\alpha$ uitkomt in $(\cos\alpha; \sin\alpha)$, en $(0; 1)$ in $(-\sin\alpha; \cos\alpha)$. Dus:

$$
R_\alpha = \begin{pmatrix} \cos\alpha & -\sin\alpha \\ \sin\alpha & \cos\alpha \end{pmatrix}
$$

![Draaiing en spiegeling van een driehoek](/images/diagrams/m32-transformaties.svg "Een driehoek met hoekpunten (1; 1), (3; 1) en (1; 2), gedraaid over 90° om O en gespiegeld in de x-as.")

:::example Uitgewerkt voorbeeld: een driehoek draaien
Draai de driehoek met hoekpunten $(1; 1)$, $(3; 1)$ en $(1; 2)$ over $90^\circ$ om de oorsprong.

Vermenigvuldig elk hoekpunt met $R = \begin{pmatrix} 0 & -1 \\ 1 & 0 \end{pmatrix}$:

$$
R\begin{pmatrix} 1 \\ 1 \end{pmatrix} = \begin{pmatrix} -1 \\ 1 \end{pmatrix}, \qquad R\begin{pmatrix} 3 \\ 1 \end{pmatrix} = \begin{pmatrix} -1 \\ 3 \end{pmatrix}, \qquad R\begin{pmatrix} 1 \\ 2 \end{pmatrix} = \begin{pmatrix} -2 \\ 1 \end{pmatrix}
$$

Handiger: zet de hoekpunten als kolommen in één matrix en vermenigvuldig in één keer:

$$
\begin{pmatrix} 0 & -1 \\ 1 & 0 \end{pmatrix} \begin{pmatrix} 1 & 3 & 1 \\ 1 & 1 & 2 \end{pmatrix} = \begin{pmatrix} -1 & -1 & -2 \\ 1 & 3 & 1 \end{pmatrix}
$$

Elke kolom van de uitkomst is een beeldpunt. Zo verwerkt een computerspel duizenden hoekpunten tegelijk.

**Controle met de determinant.** $\det R = 0 \cdot 0 - (-1) \cdot 1 = 1$. Een draaiing verandert de oppervlakte dus niet, en ook de oriëntatie niet. Voor de spiegeling in de $x$-as is de determinant $-1$: de oppervlakte blijft gelijk, maar de figuur wordt gespiegeld.
:::

In het assenstelsel hieronder staan de drie hoekpunten van de driehoek al. Klik de drie beeldpunten na de draaiing erbij, en daarna ook de beeldpunten na de spiegeling in de $x$-as. Ga na dat de afstand van elk punt tot de oorsprong bij beide bewerkingen gelijk blijft.

{{ widget: coordinate-grid size=5 points="(1;1) (3;1) (1;2)" connect=true }}

### Na elkaar uitvoeren

Voer je eerst transformatie $A$ uit en daarna transformatie $B$, dan gaat een punt $p$ eerst naar $Ap$ en daarna naar $B(Ap) = (BA)p$. De samengestelde transformatie heeft dus matrix $BA$: **de transformatie die als eerste wordt uitgevoerd, staat rechts**. Dit was Cayleys reden om de matrixvermenigvuldiging zo te definiëren.

:::example Uitgewerkt voorbeeld: volgorde bij transformaties
$R$ is de draaiing over $90^\circ$, $S$ de spiegeling in de $x$-as.

**Eerst draaien, dan spiegelen:** matrix $SR$.

$$
SR = \begin{pmatrix} 1 & 0 \\ 0 & -1 \end{pmatrix} \begin{pmatrix} 0 & -1 \\ 1 & 0 \end{pmatrix} = \begin{pmatrix} 0 & -1 \\ -1 & 0 \end{pmatrix}
$$

Dit stuurt $(x; y)$ naar $(-y; -x)$: een spiegeling in de lijn $y = -x$.

**Eerst spiegelen, dan draaien:** matrix $RS$.

$$
RS = \begin{pmatrix} 0 & -1 \\ 1 & 0 \end{pmatrix} \begin{pmatrix} 1 & 0 \\ 0 & -1 \end{pmatrix} = \begin{pmatrix} 0 & 1 \\ 1 & 0 \end{pmatrix}
$$

Dit stuurt $(x; y)$ naar $(y; x)$: een spiegeling in de lijn $y = x$.

Twee verschillende uitkomsten. Hier zie je de niet-commutativiteit van het matrixproduct met je eigen ogen: draaien-dan-spiegelen is iets anders dan spiegelen-dan-draaien. Probeer het maar met een boek op tafel.
:::

## 4. Zelfstandig oefenen en uitdagingen

De volgende opgaven combineren de technieken uit deze module. De laatste twee zijn uitdagingen; neem er de tijd voor.

{{ exercises: 32-035, 32-036, 32-037 }}

:::challenge De Fibonacci-matrix
In de laatste uitdaging vermenigvuldig je de matrix $\begin{pmatrix} 1 & 1 \\ 1 & 0 \end{pmatrix}$ herhaald met zichzelf. Reken de eerste paar machten echt uit en kijk naar de getallen die verschijnen. Herken je de rij? Een matrix kan een heel rekenvoorschrift samenvatten, ook dat van een rij waarin elk getal de som is van de twee vorige.
:::
