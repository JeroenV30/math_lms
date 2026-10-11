# Determinant en inverse

Met vegen kun je elk stelsel oplossen, en onderweg ontdek je of er één, geen of oneindig veel oplossingen zijn. Maar vaak wil je dat vooraf weten, zonder het hele stelsel door te rekenen. Voor een stelsel met twee onbekenden bestaat daarvoor een eenvoudige test: één getal dat je uit de vier coëfficiënten berekent. Dat getal heet de **determinant**. In deze les leer je wat hij betekent, en hoe hij je helpt om een matrix "om te keren".

## 1. Het algemene 2 × 2-stelsel

Neem het algemene stelsel met twee onbekenden:

$$
\begin{cases} ax + by = e \\ cx + dy = f \end{cases}
\qquad\Longleftrightarrow\qquad
\begin{pmatrix} a & b \\ c & d \end{pmatrix} \begin{pmatrix} x \\ y \end{pmatrix} = \begin{pmatrix} e \\ f \end{pmatrix}
$$

Elimineer $y$, net als in module 20. Vermenigvuldig de eerste vergelijking met $d$ en de tweede met $b$:

$$
adx + bdy = de, \qquad bcx + bdy = bf
$$

Trek ze van elkaar af. De $y$-termen vallen weg:

$$
(ad - bc)\,x = de - bf
$$

Op dezelfde manier (eerste vergelijking maal $c$, tweede maal $a$, aftrekken) vind je

$$
(ad - bc)\,y = af - ce
$$

Kijk naar het getal $ad - bc$ dat in beide vergelijkingen voor de onbekende staat. Als het **niet 0** is, mag je erdoor delen en vind je precies één waarde voor $x$ en één voor $y$. Als het **wel 0** is, staat er links $0 \cdot x$, en dan heb je ofwel $0 = 0$ (geen informatie, oneindig veel oplossingen) ofwel $0 = $ iets anders (geen oplossing). Dit getal beslist dus over het type oplossing. In module 20 kwam je het al tegen als voorwaarde $a_1 b_2 - a_2 b_1 \neq 0$.

:::definition Determinant van een 2 × 2-matrix
De **determinant** van $A = \begin{pmatrix} a & b \\ c & d \end{pmatrix}$ is

$$
\det A = \begin{vmatrix} a & b \\ c & d \end{vmatrix} = ad - bc
$$

Je vermenigvuldigt over de hoofddiagonaal ($a \cdot d$) en trekt het product over de andere diagonaal ($b \cdot c$) ervan af.
:::

:::theory Wanneer is een stelsel uniek oplosbaar?
Het stelsel $Ax = b$ met $A$ een $2 \times 2$-matrix heeft **precies één oplossing** als en slechts als $\det A \neq 0$. Is $\det A = 0$, dan zijn er geen of oneindig veel oplossingen, afhankelijk van het rechterlid $b$.
:::

De formules hierboven geven meteen de oplossing, als $\det A \neq 0$:

$$
x = \frac{de - bf}{ad - bc}, \qquad y = \frac{af - ce}{ad - bc}
$$

Dit is de **regel van Cramer** voor twee onbekenden, genoemd naar de Zwitserse wiskundige Gabriel Cramer, die een algemene versie in 1750 publiceerde. Let op het patroon: de tellers zijn zelf ook determinanten, namelijk van de matrix waarin je de kolom van $x$ (of van $y$) vervangt door het rechterlid.

:::example Uitgewerkt voorbeeld: determinant en Cramer
Het stelsel $2x + 3y = 13$, $x - y = -1$ uit de vorige les.

**Determinant.** $\det \begin{pmatrix} 2 & 3 \\ 1 & -1 \end{pmatrix} = 2 \cdot (-1) - 3 \cdot 1 = -2 - 3 = -5$. Dat is niet 0, dus er is precies één oplossing.

**Cramer.** Hier is $a = 2$, $b = 3$, $c = 1$, $d = -1$, $e = 13$, $f = -1$.

$$
x = \frac{13 \cdot (-1) - 3 \cdot (-1)}{-5} = \frac{-13 + 3}{-5} = \frac{-10}{-5} = 2,
\qquad
y = \frac{2 \cdot (-1) - 13 \cdot 1}{-5} = \frac{-15}{-5} = 3
$$

Dezelfde oplossing als met vegen. Let bij de determinant goed op de tekens: $-2 - 3 = -5$, niet $-2 + 3$.
:::

:::example Uitgewerkt voorbeeld: een parameter
Voor welke waarde van $k$ heeft het stelsel $kx + 4y = 7$, $3x + 6y = 2$ **geen** unieke oplossing?

De determinant is $\det \begin{pmatrix} k & 4 \\ 3 & 6 \end{pmatrix} = 6k - 12$. Die is 0 als $6k = 12$, dus $k = 2$.

Controle: bij $k = 2$ is de eerste rij $(2, 4)$ precies $\tfrac{2}{3}$ keer de tweede rij $(3, 6)$. De linkerkanten zijn evenredig, de lijnen evenwijdig. Omdat $7 \neq \tfrac{2}{3} \cdot 2$, vallen ze niet samen: bij $k = 2$ is er geen oplossing. Voor elke andere $k$ is er precies één.
:::

{{ exercises: 32-023, 32-024, 32-025 }}

## 2. Wat een determinant meetkundig betekent

Een $2 \times 2$-matrix kun je ook zien als een bewerking op punten in het vlak: het punt $\begin{pmatrix} x \\ y \end{pmatrix}$ gaat naar $A\begin{pmatrix} x \\ y \end{pmatrix}$. In les 7 werk je dat verder uit. Hier één observatie: de punten $\begin{pmatrix} 1 \\ 0 \end{pmatrix}$ en $\begin{pmatrix} 0 \\ 1 \end{pmatrix}$ gaan naar de **kolommen** van $A$. Het eenheidsvierkant wordt daardoor een parallellogram dat door die twee kolommen wordt opgespannen.

![Determinant als oppervlaktefactor](/images/diagrams/m32-determinant-oppervlakte.svg "De matrix met kolommen (3; 1) en (1; 2) beeldt het eenheidsvierkant af op een parallellogram met oppervlakte 5 = det A.")

De oppervlakte van dat parallellogram is precies $|\det A|$. In de figuur is $A = \begin{pmatrix} 3 & 1 \\ 1 & 2 \end{pmatrix}$, en $\det A = 3 \cdot 2 - 1 \cdot 1 = 5$. Je kunt dat narekenen zonder determinant. Het parallellogram past in een rechthoek van 4 bij 3, met oppervlakte 12. Wat buiten het parallellogram valt, bestaat uit twee rechthoekige driehoeken met rechthoekszijden 3 en 1 (samen $2 \cdot \tfrac{1}{2} \cdot 3 \cdot 1 = 3$), twee rechthoekige driehoeken met rechthoekszijden 1 en 2 (samen $2 \cdot \tfrac{1}{2} \cdot 1 \cdot 2 = 2$) en twee vierkantjes van 1 bij 1 (samen 2). Dat is samen $3 + 2 + 2 = 7$, dus het parallellogram heeft oppervlakte $12 - 7 = 5$. Teken het gerust na op ruitjespapier.

Dezelfde redenering met letters, voor kolommen $\begin{pmatrix} a \\ c \end{pmatrix}$ en $\begin{pmatrix} b \\ d \end{pmatrix}$ met positieve getallen, geeft $(a + b)(c + d) - ac - bd - 2bc = ad - bc$. Zo zie je dat de determinant werkelijk een oppervlakte is.

:::theory Determinant als oppervlaktefactor
Een $2 \times 2$-matrix $A$ vermenigvuldigt elke oppervlakte met de factor $|\det A|$. Een figuur met oppervlakte $S$ heeft na de afbeelding oppervlakte $|\det A| \cdot S$. Is $\det A$ negatief, dan wordt de figuur bovendien gespiegeld (de oriëntatie keert om).
:::

Dit verklaart meteen waarom $\det A = 0$ een probleem is. Dan wordt het eenheidsvierkant platgedrukt tot een lijnstuk of een punt: de twee kolommen liggen op één lijn. Verschillende punten komen dan op hetzelfde beeldpunt terecht, en je kunt de bewerking niet meer ongedaan maken. Dat is precies het geval waarin een stelsel geen unieke oplossing heeft.

## 3. Omkeren: de inverse matrix

Bij gewone getallen los je $3x = 12$ op door te delen door 3, of, wat hetzelfde is, door met $\tfrac{1}{3}$ te vermenigvuldigen: $x = \tfrac{1}{3} \cdot 12 = 4$. Het getal $\tfrac{1}{3}$ is het **omgekeerde** van 3, omdat $\tfrac{1}{3} \cdot 3 = 1$.

Voor matrices zoek je net zo'n "omgekeerde": een matrix die met $A$ vermenigvuldigd de eenheidsmatrix geeft.

:::definition Inverse matrix
Een vierkante matrix $A$ heeft een **inverse** $A^{-1}$ als

$$
AA^{-1} = A^{-1}A = I
$$

Een matrix die een inverse heeft, heet **inverteerbaar** (of regulier). Niet elke vierkante matrix heeft een inverse.
:::

Voor $2 \times 2$-matrices is er een directe formule.

:::formula Inverse van een 2 × 2-matrix
Als $A = \begin{pmatrix} a & b \\ c & d \end{pmatrix}$ en $\det A = ad - bc \neq 0$, dan is

$$
A^{-1} = \frac{1}{ad - bc} \begin{pmatrix} d & -b \\ -c & a \end{pmatrix}
$$

In woorden: **verwissel** de elementen op de hoofddiagonaal, **verander het teken** van de twee andere elementen, en **deel** alles door de determinant. Als $\det A = 0$, bestaat de inverse niet.
:::

Waarom klopt deze formule? Reken het product uit:

$$
\begin{pmatrix} a & b \\ c & d \end{pmatrix} \begin{pmatrix} d & -b \\ -c & a \end{pmatrix} = \begin{pmatrix} ad - bc & -ab + ba \\ cd - dc & -cb + da \end{pmatrix} = \begin{pmatrix} ad - bc & 0 \\ 0 & ad - bc \end{pmatrix} = (ad - bc)\, I
$$

Het product is $(ad - bc)$ keer de eenheidsmatrix. Deel je nog door $ad - bc$, dan houd je precies $I$ over. En je ziet ook waarom het misgaat als $ad - bc = 0$: dan zou je door 0 moeten delen.

:::example Uitgewerkt voorbeeld: een inverse met breuken
Bepaal de inverse van $A = \begin{pmatrix} 3 & 1 \\ 4 & 2 \end{pmatrix}$.

**Determinant.** $\det A = 3 \cdot 2 - 1 \cdot 4 = 6 - 4 = 2$. Niet 0, dus de inverse bestaat.

**Verwisselen, tekens omdraaien, delen.**

$$
A^{-1} = \frac{1}{2} \begin{pmatrix} 2 & -1 \\ -4 & 3 \end{pmatrix} = \begin{pmatrix} 1 & -\tfrac{1}{2} \\ -2 & \tfrac{3}{2} \end{pmatrix}
$$

**Controle.** $AA^{-1} = \begin{pmatrix} 3 \cdot 1 + 1 \cdot (-2) & 3 \cdot (-\tfrac{1}{2}) + 1 \cdot \tfrac{3}{2} \\ 4 \cdot 1 + 2 \cdot (-2) & 4 \cdot (-\tfrac{1}{2}) + 2 \cdot \tfrac{3}{2} \end{pmatrix} = \begin{pmatrix} 1 & 0 \\ 0 & 1 \end{pmatrix}$. Klopt.

Doe deze controle altijd: één tekenfout in de formule en de controle laat het direct zien.
:::

## 4. Een stelsel oplossen met de inverse

Als $A$ inverteerbaar is, kun je $Ax = b$ oplossen zoals $3x = 12$: vermenigvuldig beide kanten **links** met $A^{-1}$.

$$
A^{-1}Ax = A^{-1}b \quad\Rightarrow\quad Ix = A^{-1}b \quad\Rightarrow\quad x = A^{-1}b
$$

:::warning Links vermenigvuldigen
Omdat matrixvermenigvuldiging niet commutatief is, moet je aan beide kanten aan **dezelfde kant** vermenigvuldigen. $A^{-1}$ moet links van $A$ komen te staan om $A^{-1}A = I$ te krijgen. Daarom is de oplossing $x = A^{-1}b$, en niet $bA^{-1}$ (dat product bestaat niet eens: $(2 \times 1)(2 \times 2)$).
:::

:::example Uitgewerkt voorbeeld: oplossen met de inverse
Los op: $4x + 3y = 10$ en $3x + 2y = 7$.

**Matrixvorm.** $A = \begin{pmatrix} 4 & 3 \\ 3 & 2 \end{pmatrix}$, $b = \begin{pmatrix} 10 \\ 7 \end{pmatrix}$.

**Inverse.** $\det A = 8 - 9 = -1$, dus

$$
A^{-1} = \frac{1}{-1} \begin{pmatrix} 2 & -3 \\ -3 & 4 \end{pmatrix} = \begin{pmatrix} -2 & 3 \\ 3 & -4 \end{pmatrix}
$$

**Oplossing.**

$$
\begin{pmatrix} x \\ y \end{pmatrix} = A^{-1}b = \begin{pmatrix} -2 \cdot 10 + 3 \cdot 7 \\ 3 \cdot 10 - 4 \cdot 7 \end{pmatrix} = \begin{pmatrix} 1 \\ 2 \end{pmatrix}
$$

**Controle:** $4 + 6 = 10$ en $3 + 4 = 7$. De oplossing is $x = 1$, $y = 2$.
:::

Is dit sneller dan vegen? Voor één stelsel niet echt. Het voordeel komt pas als je **hetzelfde** $A$ met **veel verschillende** rechterleden hebt. Denk aan een fabriek die steeds dezelfde twee grondstoffen mengt, maar elke week een andere bestelling krijgt. Dan bereken je $A^{-1}$ één keer en vind je elke nieuwe oplossing met één matrix-vector-product.

{{ exercises: 32-026, 32-027 }}

## 5. Nog twee eigenschappen

Twee eigenschappen worden in toepassingen veel gebruikt. Je hoeft ze niet te bewijzen, maar je moet ze wel kunnen toepassen.

:::theory Product en determinant
- $\det(AB) = \det A \cdot \det B$. Na elkaar uitvoeren betekent: de oppervlaktefactoren vermenigvuldigen.
- $(AB)^{-1} = B^{-1}A^{-1}$. De volgorde keert om.
:::

De omgekeerde volgorde in de tweede regel is minder vreemd dan hij lijkt. Denk aan sokken en schoenen: je trekt eerst je sokken aan ($B$) en dan je schoenen ($A$). Om dat ongedaan te maken, trek je eerst je schoenen uit ($A^{-1}$) en dan je sokken ($B^{-1}$).

:::tip Grotere determinanten
Ook $3 \times 3$- en grotere vierkante matrices hebben een determinant, met dezelfde betekenis: niet 0 betekent precies één oplossing en een inverse die bestaat; de absolute waarde is de factor waarmee volumes veranderen. De formules worden wel snel lang (een $3 \times 3$-determinant heeft 6 termen, een $4 \times 4$ al 24). In de praktijk berekent een computer een determinant daarom niet met een formule, maar door te vegen. In het historisch intermezzo zie je dat de eerste determinantformules, eind 17e eeuw, juist voor zulke grotere stelsels werden opgesteld.
:::

{{ exercises: 32-028, 32-029 }}
