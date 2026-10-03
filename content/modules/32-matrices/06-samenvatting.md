# Samenvatting

:::summary Matrices in één oogopslag
- **Matrix.** Een rechthoekig schema van getallen met $m$ rijen en $n$ kolommen: een $m \times n$-matrix. Leg altijd vast wat de rijen en wat de kolommen betekenen.
- **Notatie.** $a_{ij}$ is het element in rij $i$ en kolom $j$: eerst de rij, dan de kolom.
- **Optellen en aftrekken.** Alleen bij gelijke afmetingen, element voor element: $(A + B)_{ij} = a_{ij} + b_{ij}$.
- **Scalair vermenigvuldigen.** Elk element met hetzelfde getal: $(kA)_{ij} = k\,a_{ij}$.
- **Matrixproduct.** $(AB)_{ij}$ = rij $i$ van $A$ maal kolom $j$ van $B$. Alleen als het aantal kolommen van $A$ gelijk is aan het aantal rijen van $B$: $(m \times n)(n \times p) = m \times p$.
- **Niet commutatief.** Meestal is $AB \neq BA$; soms bestaat één van beide niet eens. Ook kan $AB = O$ zonder dat $A$ of $B$ de nulmatrix is.
- **Eenheidsmatrix.** $I$ heeft enen op de hoofddiagonaal en verder nullen; $AI = IA = A$.
- **Rekenregels.** $(AB)C = A(BC)$ en $A(B + C) = AB + AC$; de volgorde van de factoren blijft staan.
- **Stelsel als matrixvergelijking.** $Ax = b$, met coëfficiëntenmatrix $A$, onbekenden $x$ en rechterleden $b$; de aangevulde matrix is $[A \mid b]$.
- **Vegen (Gauss-eliminatie).** Met rijoperaties (verwisselen, schalen met $k \neq 0$, een veelvoud van een rij optellen bij een andere) naar trapvorm, dan terugsubstitutie. Neem altijd de hele rij mee, inclusief het rechterlid.
- **Aantal oplossingen.** Een rij $(0 \cdots 0 \mid c)$ met $c \neq 0$: geen oplossing. Een nulrij $(0 \cdots 0 \mid 0)$: oneindig veel. Geen nulrijen links: precies één.
- **Determinant.** $\det\begin{pmatrix} a & b \\ c & d \end{pmatrix} = ad - bc$. Niet 0: precies één oplossing. De absolute waarde is de factor waarmee oppervlakten veranderen; een negatief teken betekent spiegelen.
- **Inverse.** $A^{-1} = \dfrac{1}{ad - bc}\begin{pmatrix} d & -b \\ -c & a \end{pmatrix}$, alleen als $\det A \neq 0$. Dan is $x = A^{-1}b$. Controleer met $AA^{-1} = I$.
- **Overgangsmatrix.** $x_{t+1} = Tx_t$, met kolom = van en rij = naar; elke kolom telt op tot 1. Na $k$ stappen $T^k x_0$; een evenwicht voldoet aan $Tx = x$.
- **Leslie-matrix.** Geboortecijfers in de eerste rij, overlevingsfracties direct onder de diagonaal.
- **Transformaties.** De kolommen van de matrix zijn de beelden van $(1; 0)$ en $(0; 1)$. Draaiing over $90^\circ$: $\begin{pmatrix} 0 & -1 \\ 1 & 0 \end{pmatrix}$; spiegeling in de $x$-as: $\begin{pmatrix} 1 & 0 \\ 0 & -1 \end{pmatrix}$. Eerst $A$, dan $B$ heeft matrix $BA$.
:::

## Wat je nu moet beheersen

Controleer of je het volgende kunt, met pen en papier en zonder rekenmachine (behalve bij de toepassingen met kommagetallen):

1. Een tabel met gegevens als matrix schrijven, de afmetingen noemen en een element zoals $a_{23}$ aflezen en in de context uitleggen.
2. Een combinatie als $3A - 2B$ uitrekenen en een eenvoudige matrixvergelijking als $2X + A = B$ oplossen.
3. Vooraf bepalen of een product $AB$ bestaat en welke afmetingen het heeft.
4. Een product van twee matrices (tot en met $3 \times 3$) foutloos uitrekenen, en uitleggen wat een element van het product betekent, bijvoorbeeld bij bestellingen maal prijzen.
5. Met een voorbeeld laten zien dat $AB \neq BA$, en uitleggen wat de eenheidsmatrix doet.
6. Een stelsel met twee of drie onbekenden omzetten in een aangevulde matrix en oplossen door te vegen, ook als er breuken uitkomen.
7. Aan de trapvorm zien of een stelsel geen, één of oneindig veel oplossingen heeft, en een parameter bepalen waarvoor dat verandert.
8. De determinant van een $2 \times 2$-matrix berekenen en gebruiken om te beslissen of een stelsel precies één oplossing heeft.
9. De inverse van een $2 \times 2$-matrix bepalen, controleren en gebruiken om een stelsel op te lossen.
10. Met een overgangsmatrix de verdeling na een of meer stappen berekenen, en een evenwicht bepalen.
11. Met een Leslie-matrix een populatie een paar jaar vooruit rekenen.
12. De matrix van een spiegeling of draaiing opstellen, beeldpunten berekenen en twee transformaties samenstellen in de goede volgorde.

## Historische lijn

| Tijd | Plaats | Wat |
|---|---|---|
| ca. 200 v.Chr. – 100 n.Chr. | China | De *Negen Hoofdstukken* krijgen hun vorm; hoofdstuk 8 (*fangcheng*) lost stelsels op met kolommen rekenstaafjes |
| 263 | China | Liu Hui schrijft zijn commentaar op de *Negen Hoofdstukken* |
| ca. 1670 | Cambridge | Newton beschrijft eliminatie in zijn aantekeningen (gepubliceerd 1707) |
| 1683 | Japan | Seki Takakazu beschrijft determinanten in *Kaifukudai no hō* |
| 1678–1693 | Duitsland | Leibniz' indexnotatie voor coëfficiënten en zijn determinantvoorwaarde (brief aan De l'Hôpital, 1693) |
| 1750 | Genève | Cramer publiceert zijn regel voor $n$ vergelijkingen met $n$ onbekenden |
| 1809–1810 | Göttingen | Gauss: kleinste kwadraten (*Theoria motus*) en eliminatie bij de baan van Pallas |
| 1812 | Parijs | Cauchy geeft *determinant* de huidige betekenis |
| 1850 | Londen | Sylvester introduceert het woord *matrix* |
| 1858 | Londen | Cayley: *Memoir on the theory of matrices*, de matrix als rekenobject |
| 1945 | Engeland | Leslie publiceert zijn matrixmodel voor populaties |

## Vooruitblik

Matrices komen in de rest van de cursus steeds terug, vaak op de achtergrond. Bij statistiek met veel variabelen, zoals meervoudige regressie, worden de gegevens in een matrix gezet en worden de normaalvergelijkingen van Gauss opgelost, precies met de methoden uit deze module. En overgangsmatrices zijn een eerste kennismaking met kansmodellen die in de tijd verlopen.

Ben je klaar? Maak dan de hoofdstuktoets. Je hebt 70% nodig om de module af te ronden en 85% voor "beheerst".

{{ quiz }}
