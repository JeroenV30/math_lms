# Rij maal kolom

Optellen van matrices was eenvoudig: element voor element. Je zou verwachten dat vermenigvuldigen ook element voor element gaat. Dat kan wel, maar het blijkt weinig nuttig. De matrixvermenigvuldiging die wiskundigen, economen en programmeurs dagelijks gebruiken, werkt anders: je combineert een **rij** van de eerste matrix met een **kolom** van de tweede. In deze les zie je waarom dat de natuurlijke keuze is, hoe je het uitrekent en welke verrassingen erbij horen.

## 1. Prijzen maal hoeveelheden

Begin met een situatie die je kent. Een café bestelt bij de koffiebranderij 10 pakken koffie, 4 pakken thee en 2 pakken cacao. Een pak koffie kost € 8, een pak thee € 5 en een pak cacao € 6. Wat kost de bestelling?

Je rekent per product "aantal maal prijs" uit en telt op:

$$
10 \cdot 8 + 4 \cdot 5 + 2 \cdot 6 = 80 + 20 + 12 = 112
$$

De bestelling kost € 112. Schrijf de hoeveelheden als **rijvector** en de prijzen als **kolomvector**. Dan is deze berekening precies het product van een rij en een kolom:

$$
\begin{pmatrix} 10 & 4 & 2 \end{pmatrix} \begin{pmatrix} 8 \\ 5 \\ 6 \end{pmatrix} = 10 \cdot 8 + 4 \cdot 5 + 2 \cdot 6 = 112
$$

:::definition Rij maal kolom
Het product van een rij en een kolom met evenveel getallen is de som van de producten van overeenkomstige getallen: eerste maal eerste, plus tweede maal tweede, enzovoort.

$$
\begin{pmatrix} a_1 & a_2 & \cdots & a_n \end{pmatrix} \begin{pmatrix} b_1 \\ b_2 \\ \vdots \\ b_n \end{pmatrix} = a_1 b_1 + a_2 b_2 + \dots + a_n b_n
$$

De uitkomst is één getal.
:::

Dit "rij maal kolom" is het hart van de hele matrixvermenigvuldiging. Alles wat volgt, is deze ene handeling, herhaald voor elke combinatie van een rij en een kolom.

## 2. Meer klanten, meer leveranciers

Stel nu dat er twee klanten zijn: het café uit het voorbeeld en een restaurant dat 6 pakken koffie, 8 pakken thee en 5 pakken cacao bestelt. De bestellingen vormen een matrix met een rij per klant en een kolom per product:

$$
Q = \begin{pmatrix} 10 & 4 & 2 \\ 6 & 8 & 5 \end{pmatrix} \quad \begin{matrix} \leftarrow \text{café} \\ \leftarrow \text{restaurant} \end{matrix}
$$

En stel dat de klanten kunnen kiezen uit twee leveranciers, X en Y, met elk hun eigen prijzen. De prijzen vormen een matrix met een rij per product (in dezelfde volgorde als de kolommen van $Q$) en een kolom per leverancier:

$$
P = \begin{pmatrix} 8 & 7 \\ 5 & 6 \\ 6 & 5 \end{pmatrix} \quad \begin{matrix} \leftarrow \text{koffie} \\ \leftarrow \text{thee} \\ \leftarrow \text{cacao} \end{matrix}
$$

Wat betaalt elke klant bij elke leverancier? Dat zijn vier bedragen, en elk bedrag is een "rij maal kolom": de bestelling van een klant (een rij van $Q$) maal de prijzen van een leverancier (een kolom van $P$).

- Café bij X: $10 \cdot 8 + 4 \cdot 5 + 2 \cdot 6 = 112$
- Café bij Y: $10 \cdot 7 + 4 \cdot 6 + 2 \cdot 5 = 104$
- Restaurant bij X: $6 \cdot 8 + 8 \cdot 5 + 5 \cdot 6 = 118$
- Restaurant bij Y: $6 \cdot 7 + 8 \cdot 6 + 5 \cdot 5 = 115$

Zet je die vier uitkomsten in een matrix met een rij per klant en een kolom per leverancier, dan heb je het **matrixproduct** $QP$:

$$
QP = \begin{pmatrix} 10 & 4 & 2 \\ 6 & 8 & 5 \end{pmatrix} \begin{pmatrix} 8 & 7 \\ 5 & 6 \\ 6 & 5 \end{pmatrix} = \begin{pmatrix} 112 & 104 \\ 118 & 115 \end{pmatrix}
$$

Het element in rij 2, kolom 1 (118) is: wat betaalt klant 2 (het restaurant) bij leverancier 1 (X). Beide klanten zijn goedkoper uit bij Y. Let op hoe de betekenis "doorloopt": de rijen van $QP$ zijn de rijen van $Q$ (klanten), de kolommen van $QP$ zijn de kolommen van $P$ (leveranciers). De producten, die "in het midden" zaten, zijn verdwenen: daarover is opgeteld.

## 3. De definitie

:::definition Matrixvermenigvuldiging
Laat $A$ een $m \times n$-matrix zijn en $B$ een $n \times p$-matrix. Het product $AB$ is de $m \times p$-matrix waarvan het element in rij $i$ en kolom $j$ gelijk is aan **rij $i$ van $A$ maal kolom $j$ van $B$**:

$$
(AB)_{ij} = a_{i1}b_{1j} + a_{i2}b_{2j} + \dots + a_{in}b_{nj}
$$

Het product bestaat alleen als het aantal **kolommen van $A$** gelijk is aan het aantal **rijen van $B$**.
:::

De voorwaarde op de afmetingen kun je goed onthouden door de afmetingen naast elkaar te schrijven:

$$
\underset{m \times \boxed{n}}{A} \;\cdot\; \underset{\boxed{n} \times p}{B} \;=\; \underset{m \times p}{AB}
$$

De twee **binnenste** getallen moeten gelijk zijn (anders past een rij van $A$ niet op een kolom van $B$), en de twee **buitenste** getallen geven de afmetingen van het product.

![Rij maal kolom](/images/diagrams/m32-rij-maal-kolom.svg "Het element in rij 2, kolom 1 van AB is rij 2 van A maal kolom 1 van B.")

:::example Uitgewerkt voorbeeld: een product van twee 2 × 2-matrices
Bereken $AB$ voor

$$
A = \begin{pmatrix} 1 & 2 \\ 3 & 4 \end{pmatrix}, \qquad B = \begin{pmatrix} 5 & -1 \\ 0 & 2 \end{pmatrix}
$$

**Afmetingen.** $(2 \times 2)(2 \times 2)$: de binnenste getallen zijn gelijk, het product is $2 \times 2$.

**Vier keer rij maal kolom.**

- Rij 1, kolom 1: $1 \cdot 5 + 2 \cdot 0 = 5$
- Rij 1, kolom 2: $1 \cdot (-1) + 2 \cdot 2 = -1 + 4 = 3$
- Rij 2, kolom 1: $3 \cdot 5 + 4 \cdot 0 = 15$
- Rij 2, kolom 2: $3 \cdot (-1) + 4 \cdot 2 = -3 + 8 = 5$

$$
AB = \begin{pmatrix} 5 & 3 \\ 15 & 5 \end{pmatrix}
$$

Werk systematisch: houd met een vinger de rij van $A$ vast en loop met een andere vinger langs de kolom van $B$. Bij 2 × 2-matrices lijkt dat overdreven, maar bij 3 × 3 voorkomt het vrijwel alle slordigheidsfouten.
:::

:::example Uitgewerkt voorbeeld: verschillende afmetingen
$A$ is een $2 \times 3$-matrix en $B$ een $3 \times 2$-matrix:

$$
A = \begin{pmatrix} 1 & 2 & 0 \\ 3 & 1 & 4 \end{pmatrix}, \qquad B = \begin{pmatrix} 2 & 1 \\ 5 & 0 \\ 1 & 2 \end{pmatrix}
$$

**$AB$:** $(2 \times 3)(3 \times 2)$, binnenste getallen 3 en 3, dus $AB$ is $2 \times 2$.

$$
AB = \begin{pmatrix} 1 \cdot 2 + 2 \cdot 5 + 0 \cdot 1 & 1 \cdot 1 + 2 \cdot 0 + 0 \cdot 2 \\ 3 \cdot 2 + 1 \cdot 5 + 4 \cdot 1 & 3 \cdot 1 + 1 \cdot 0 + 4 \cdot 2 \end{pmatrix} = \begin{pmatrix} 12 & 1 \\ 15 & 11 \end{pmatrix}
$$

**$BA$:** $(3 \times 2)(2 \times 3)$, binnenste getallen 2 en 2, dus $BA$ bestaat ook, maar is $3 \times 3$. Bijvoorbeeld het element in rij 1, kolom 1 is $2 \cdot 1 + 1 \cdot 3 = 5$.

**$AA$:** $(2 \times 3)(2 \times 3)$, binnenste getallen 3 en 2: dit product bestaat **niet**.
:::

Een speciaal geval verdient aandacht: een matrix maal een **kolomvector**. Daar komt weer een kolomvector uit.

$$
\begin{pmatrix} 1 & 2 \\ 3 & 4 \end{pmatrix} \begin{pmatrix} 5 \\ 6 \end{pmatrix} = \begin{pmatrix} 1 \cdot 5 + 2 \cdot 6 \\ 3 \cdot 5 + 4 \cdot 6 \end{pmatrix} = \begin{pmatrix} 17 \\ 39 \end{pmatrix}
$$

Je kunt dit ook anders lezen: het is $5$ keer de eerste kolom plus $6$ keer de tweede kolom van de matrix, $5\begin{pmatrix} 1 \\ 3 \end{pmatrix} + 6\begin{pmatrix} 2 \\ 4 \end{pmatrix} = \begin{pmatrix} 17 \\ 39 \end{pmatrix}$. Die kijk op "matrix maal vector" als **combinatie van de kolommen** komt terug bij stelsels en bij transformaties.

{{ exercises: 32-008, 32-009, 32-010, 32-011 }}

## 4. De volgorde doet ertoe

Bij gewone getallen is $3 \cdot 5 = 5 \cdot 3$. Bij matrices is dat in het algemeen **niet** zo. Er zijn drie mogelijkheden waarom $AB$ en $BA$ verschillen.

1. **Eén van de twee bestaat niet.** Als $A$ een $2 \times 3$-matrix is en $B$ een $3 \times 4$-matrix, dan bestaat $AB$ ($2 \times 4$) wel, maar $BA$ niet: $(3 \times 4)(2 \times 3)$ heeft binnenste getallen 4 en 2.
2. **Beide bestaan, maar hebben verschillende afmetingen.** In het tweede voorbeeld hierboven was $AB$ een $2 \times 2$-matrix en $BA$ een $3 \times 3$-matrix.
3. **Beide bestaan en hebben dezelfde afmetingen, maar de elementen verschillen.** Dat is het meest verrassende geval.

:::example Uitgewerkt voorbeeld: AB en BA bij vierkante matrices
Neem

$$
A = \begin{pmatrix} 1 & 2 \\ 3 & 4 \end{pmatrix}, \qquad B = \begin{pmatrix} 0 & 1 \\ 1 & 0 \end{pmatrix}
$$

Reken beide producten uit:

$$
AB = \begin{pmatrix} 1 \cdot 0 + 2 \cdot 1 & 1 \cdot 1 + 2 \cdot 0 \\ 3 \cdot 0 + 4 \cdot 1 & 3 \cdot 1 + 4 \cdot 0 \end{pmatrix} = \begin{pmatrix} 2 & 1 \\ 4 & 3 \end{pmatrix},
\qquad
BA = \begin{pmatrix} 0 \cdot 1 + 1 \cdot 3 & 0 \cdot 2 + 1 \cdot 4 \\ 1 \cdot 1 + 0 \cdot 3 & 1 \cdot 2 + 0 \cdot 4 \end{pmatrix} = \begin{pmatrix} 3 & 4 \\ 1 & 2 \end{pmatrix}
$$

Kijk wat er gebeurt. Rechts vermenigvuldigen met $B$ **verwisselt de kolommen** van $A$. Links vermenigvuldigen met $B$ **verwisselt de rijen** van $A$. Dat zijn verschillende bewerkingen, dus $AB \neq BA$.
:::

:::warning De volgorde is deel van de opdracht
"Vermenigvuldig $A$ met $B$" is bij matrices dubbelzinnig. Spreek altijd af of je $AB$ of $BA$ bedoelt. Bij de prijsmatrix uit paragraaf 2 is dat ook inhoudelijk duidelijk: $QP$ (bestellingen maal prijzen) heeft een betekenis, $PQ$ is een $3 \times 3$-matrix die nergens over gaat.
:::

Er is nog een tweede verschil met gewone getallen. Bij getallen geldt: als $ab = 0$, dan is $a = 0$ of $b = 0$. Bij matrices niet:

$$
\begin{pmatrix} 1 & 1 \\ 1 & 1 \end{pmatrix} \begin{pmatrix} 1 & -1 \\ -1 & 1 \end{pmatrix} = \begin{pmatrix} 1 - 1 & -1 + 1 \\ 1 - 1 & -1 + 1 \end{pmatrix} = \begin{pmatrix} 0 & 0 \\ 0 & 0 \end{pmatrix}
$$

Twee matrices die geen van beide de nulmatrix zijn, hebben toch de nulmatrix als product. Je mag bij matrices dus niet zomaar "wegdelen". Dat is ook de reden dat er voor matrices geen gewone deling bestaat; in les 5 zie je wat ervoor in de plaats komt.

## 5. De eenheidsmatrix

Bij gewone getallen speelt 1 een bijzondere rol: $1 \cdot a = a \cdot 1 = a$. De matrix met dezelfde rol heet de **eenheidsmatrix** $I$: een vierkante matrix met enen op de hoofddiagonaal en verder nullen.

$$
I_2 = \begin{pmatrix} 1 & 0 \\ 0 & 1 \end{pmatrix}, \qquad I_3 = \begin{pmatrix} 1 & 0 & 0 \\ 0 & 1 & 0 \\ 0 & 0 & 1 \end{pmatrix}
$$

Reken maar na dat bijvoorbeeld

$$
\begin{pmatrix} 1 & 2 \\ 3 & 4 \end{pmatrix} \begin{pmatrix} 1 & 0 \\ 0 & 1 \end{pmatrix} = \begin{pmatrix} 1 \cdot 1 + 2 \cdot 0 & 1 \cdot 0 + 2 \cdot 1 \\ 3 \cdot 1 + 4 \cdot 0 & 3 \cdot 0 + 4 \cdot 1 \end{pmatrix} = \begin{pmatrix} 1 & 2 \\ 3 & 4 \end{pmatrix}
$$

:::theory De eenheidsmatrix
Voor elke $n \times n$-matrix $A$ geldt $AI = IA = A$, met $I$ de $n \times n$-eenheidsmatrix. Ook voor een kolomvector $x$ met $n$ getallen geldt $Ix = x$.
:::

Waarom werkt het? Elke rij van $I$ "kiest" precies één element uit een kolom van $A$: de eerste rij $\begin{pmatrix} 1 & 0 \end{pmatrix}$ pakt het eerste element, de tweede rij het tweede. Er verandert dus niets.

## 6. Rekenregels voor het matrixproduct

Ondanks het ontbreken van de wisseleigenschap gelden de meeste vertrouwde regels wel, mits de afmetingen kloppen.

:::theory Rekenregels
- $(AB)C = A(BC)$ (schakeleigenschap): je mag haakjes verschuiven, **niet** de volgorde veranderen.
- $A(B + C) = AB + AC$ en $(A + B)C = AC + BC$ (distributieve eigenschappen). Let op: $A$ blijft links staan in de eerste regel, $C$ rechts in de tweede.
- $k(AB) = (kA)B = A(kB)$ voor een getal $k$.
- $AI = IA = A$.
- Voor een vierkante matrix is $A^2 = AA$, $A^3 = AAA$, enzovoort.
:::

De schakeleigenschap is minder vanzelfsprekend dan hij lijkt, en hij is enorm nuttig. In les 7 zie je dat een overgangsmatrix $T$ die je drie keer toepast op een begintoestand $x$, kan worden geschreven als $T(T(Tx)) = T^3 x$. Je kunt dan eerst $T^3$ uitrekenen en die ene matrix voor elke begintoestand gebruiken.

:::example Uitgewerkt voorbeeld: een kwadraat
Bereken $A^2$ voor $A = \begin{pmatrix} 2 & 1 \\ 0 & 3 \end{pmatrix}$.

$$
A^2 = \begin{pmatrix} 2 & 1 \\ 0 & 3 \end{pmatrix} \begin{pmatrix} 2 & 1 \\ 0 & 3 \end{pmatrix} = \begin{pmatrix} 2 \cdot 2 + 1 \cdot 0 & 2 \cdot 1 + 1 \cdot 3 \\ 0 \cdot 2 + 3 \cdot 0 & 0 \cdot 1 + 3 \cdot 3 \end{pmatrix} = \begin{pmatrix} 4 & 5 \\ 0 & 9 \end{pmatrix}
$$

De veelgemaakte fout is elk element afzonderlijk kwadrateren. Dat zou $\begin{pmatrix} 4 & 1 \\ 0 & 9 \end{pmatrix}$ geven, en dat is fout: het element rechtsboven is $2 \cdot 1 + 1 \cdot 3 = 5$, niet $1^2 = 1$.
:::

{{ exercises: 32-012, 32-013, 32-014, 32-015 }}

:::tip Waarom deze rare vermenigvuldiging?
Je kunt je afvragen waarom wiskundigen niet gewoon element voor element vermenigvuldigen. Het antwoord is dat "rij maal kolom" precies doet wat je in de praktijk nodig hebt: bestellingen combineren met prijzen, de ene stap van een proces laten volgen door de volgende, en twee meetkundige bewerkingen na elkaar uitvoeren. Arthur Cayley definieerde het product in 1858 juist op die laatste manier, als "eerst de ene transformatie, dan de andere". Een definitie wordt in de wiskunde gekozen omdat ze nuttig is, niet omdat ze er het eenvoudigst uitziet.
:::
