# Stelsels als Ax = b: vegen

In module 20 loste je stelsels met twee onbekenden op door substitutie en eliminatie. Bij drie of meer onbekenden wordt substitutie snel onoverzichtelijk: je sleept steeds langere uitdrukkingen mee. Eliminatie houdt het overzicht beter, maar alleen als je het **systematisch** doet. Dat systematische eliminatieproces heet **vegen** of **Gauss-eliminatie**, en een matrix is de ideale boekhouding ervoor. Het is in wezen dezelfde procedure die de Chinese rekenaars op hun rekenbord uitvoerden.

## 1. Een stelsel als matrixvergelijking

Neem het stelsel

$$
\begin{cases} 2x + 3y = 13 \\ x - y = -1 \end{cases}
$$

Er zitten drie soorten informatie in: de **coëfficiënten** (de getallen voor $x$ en $y$), de **onbekenden** zelf, en de **rechterleden**. Zet je die apart, dan krijg je

$$
\underbrace{\begin{pmatrix} 2 & 3 \\ 1 & -1 \end{pmatrix}}_{A} \underbrace{\begin{pmatrix} x \\ y \end{pmatrix}}_{x} = \underbrace{\begin{pmatrix} 13 \\ -1 \end{pmatrix}}_{b}
$$

Controleer met rij maal kolom uit de vorige les dat dit klopt: de eerste rij van $A$ maal de kolom $\begin{pmatrix} x \\ y \end{pmatrix}$ is $2x + 3y$, en dat moet gelijk zijn aan het eerste getal van $b$, namelijk 13. Het hele stelsel is dus samen te vatten als één matrixvergelijking:

:::definition Stelsel in matrixvorm
Een lineair stelsel kun je schrijven als

$$
Ax = b
$$

Hierin is $A$ de **coëfficiëntenmatrix** (een rij per vergelijking, een kolom per onbekende), $x$ de kolomvector van de onbekenden en $b$ de kolomvector van de rechterleden.
:::

Het graanprobleem uit de introductie, met $x$, $y$ en $z$ voor de opbrengst van een bundel goed, middelmatig en slecht graan, wordt zo:

$$
\begin{cases} 3x + 2y + z = 39 \\ 2x + 3y + z = 34 \\ x + 2y + 3z = 26 \end{cases}
\qquad\Longleftrightarrow\qquad
\begin{pmatrix} 3 & 2 & 1 \\ 2 & 3 & 1 \\ 1 & 2 & 3 \end{pmatrix} \begin{pmatrix} x \\ y \\ z \end{pmatrix} = \begin{pmatrix} 39 \\ 34 \\ 26 \end{pmatrix}
$$

Vergelijk dit met het rekenbord uit de introductie. Daar stonden dezelfde getallen, maar in kolommen in plaats van rijen. De Chinese rekenaars werkten dus met de getransponeerde van onze aangevulde matrix.

## 2. De aangevulde matrix

Bij het oplossen veranderen alleen de getallen; de letters $x$, $y$, $z$ en de plustekens blijven steeds op hun plek. Dan kun je ze net zo goed weglaten. Je schrijft de coëfficiënten en de rechterleden samen in één schema, met een verticale streep op de plaats van het isgelijkteken:

$$
[A \mid b] = \left(\begin{array}{cc|c} 2 & 3 & 13 \\ 1 & -1 & -1 \end{array}\right)
$$

Dit heet de **aangevulde matrix** van het stelsel. Elke rij is een vergelijking. De rij $\begin{pmatrix} 1 & -1 & | & -1 \end{pmatrix}$ betekent $1x - 1y = -1$.

## 3. Wat mag je met de rijen doen?

Bij eliminatie in module 20 deed je drie soorten dingen met vergelijkingen: van volgorde wisselen, een vergelijking met een getal vermenigvuldigen, en vergelijkingen bij elkaar optellen of van elkaar aftrekken. In matrixtaal heten dat de **elementaire rijoperaties**.

:::definition Elementaire rijoperaties
1. **Verwisselen:** twee rijen van plaats wisselen. Notatie: $R_1 \leftrightarrow R_2$.
2. **Schalen:** een rij met een getal $k \neq 0$ vermenigvuldigen. Notatie: $R_2 \to 3R_2$.
3. **Vegen:** een veelvoud van een rij optellen bij een andere rij. Notatie: $R_2 \to R_2 - 2R_1$.

Deze operaties veranderen de **oplossingen** van het stelsel niet.
:::

Waarom niet? Omdat elke operatie **terug te draaien** is. Verwissel je twee rijen, dan verwissel je ze gewoon weer terug. Heb je een rij met 3 vermenigvuldigd, dan deel je weer door 3; daarom moet $k \neq 0$ zijn, want met 0 vermenigvuldigen is niet terug te draaien en gooit informatie weg. En heb je $2R_1$ van $R_2$ afgetrokken, dan tel je $2R_1$ er weer bij op; $R_1$ zelf is onveranderd gebleven, dus dat kan altijd. Een oplossing van het oude stelsel is dus een oplossing van het nieuwe, en omgekeerd.

:::warning Een rij helemaal meenemen
Bij elke operatie bewerk je de **hele rij**, inclusief het getal rechts van de streep. De meest gemaakte fout bij vegen is dat het rechterlid vergeten wordt, of dat een minteken alleen op het eerste getal van de rij wordt toegepast.
:::

## 4. Het doel: trapvorm

Je gebruikt de rijoperaties om onder de diagonaal **nullen** te maken. Het resultaat is een matrix in **trapvorm** (ook wel bovendriehoeksvorm):

$$
\left(\begin{array}{ccc|c} \ast & \ast & \ast & \ast \\ 0 & \ast & \ast & \ast \\ 0 & 0 & \ast & \ast \end{array}\right)
$$

In die vorm bevat de onderste rij nog maar één onbekende. Die reken je uit, je vult hem in in de rij erboven, en zo werk je naar boven. Dat heet **terugsubstitutie**. Het eerste niet-nul-element van een rij heet het **spilelement** (of de pivot): daarmee veeg je de getallen eronder weg.

:::theory Het stappenplan (Gauss-eliminatie)
1. Schrijf de aangevulde matrix $[A \mid b]$ op.
2. Zorg dat linksboven een getal ongelijk aan 0 staat, liefst een 1 (verwissel zo nodig rijen).
3. Maak met dit spilelement alle getallen **eronder** in de eerste kolom 0, met operaties van de vorm $R_i \to R_i - c\,R_1$.
4. Laat de eerste rij nu verder met rust en herhaal stap 2 en 3 voor de kleinere matrix eronder (begin in de tweede kolom).
5. Ga door tot de matrix in trapvorm staat.
6. Los de onbekenden van onder naar boven op (terugsubstitutie) en controleer in de oorspronkelijke vergelijkingen.
:::

:::example Uitgewerkt voorbeeld: twee onbekenden
Los op: $2x + 3y = 13$ en $x - y = -1$.

**Stap 1: aangevulde matrix.**

$$
\left(\begin{array}{cc|c} 2 & 3 & 13 \\ 1 & -1 & -1 \end{array}\right)
$$

**Stap 2: een handig spilelement.** Een 1 linksboven rekent het prettigst. Verwissel de rijen: $R_1 \leftrightarrow R_2$.

$$
\left(\begin{array}{cc|c} 1 & -1 & -1 \\ 2 & 3 & 13 \end{array}\right)
$$

**Stap 3: veeg de 2 weg.** Onder de 1 staat een 2. Trek dus twee keer de eerste rij af: $R_2 \to R_2 - 2R_1$. Element voor element: $2 - 2 \cdot 1 = 0$, $3 - 2 \cdot (-1) = 5$, $13 - 2 \cdot (-1) = 15$.

$$
\left(\begin{array}{cc|c} 1 & -1 & -1 \\ 0 & 5 & 15 \end{array}\right)
$$

**Stap 4: terugsubstitutie.** De tweede rij zegt $5y = 15$, dus $y = 3$. De eerste rij zegt $x - y = -1$, dus $x = -1 + 3 = 2$.

**Controle** in de oorspronkelijke vergelijkingen: $2 \cdot 2 + 3 \cdot 3 = 13$ en $2 - 3 = -1$. Klopt. De oplossing is $x = 2$, $y = 3$.
:::

{{ exercises: 32-016, 32-017 }}

## 5. Drie onbekenden

Bij drie onbekenden doe je hetzelfde, maar in twee rondes: eerst de eerste kolom schoonvegen, dan de tweede.

:::example Uitgewerkt voorbeeld: een 3 × 3-stelsel
Los op:

$$
\begin{cases} x + y + z = 6 \\ 2x - y + z = 3 \\ x + 2y - z = 2 \end{cases}
\qquad\qquad
\left(\begin{array}{ccc|c} 1 & 1 & 1 & 6 \\ 2 & -1 & 1 & 3 \\ 1 & 2 & -1 & 2 \end{array}\right)
$$

**Ronde 1: de eerste kolom.** Het spilelement linksboven is al 1. Veeg de 2 en de 1 eronder weg:

- $R_2 \to R_2 - 2R_1$: $\;(2 - 2,\; -1 - 2,\; 1 - 2 \mid 3 - 12) = (0,\; -3,\; -1 \mid -9)$
- $R_3 \to R_3 - R_1$: $\;(1 - 1,\; 2 - 1,\; -1 - 1 \mid 2 - 6) = (0,\; 1,\; -2 \mid -4)$

$$
\left(\begin{array}{ccc|c} 1 & 1 & 1 & 6 \\ 0 & -3 & -1 & -9 \\ 0 & 1 & -2 & -4 \end{array}\right)
$$

**Ronde 2: de tweede kolom.** Kijk alleen nog naar de onderste twee rijen. Een 1 als spilelement is prettiger dan $-3$, dus verwissel: $R_2 \leftrightarrow R_3$.

$$
\left(\begin{array}{ccc|c} 1 & 1 & 1 & 6 \\ 0 & 1 & -2 & -4 \\ 0 & -3 & -1 & -9 \end{array}\right)
$$

Veeg nu de $-3$ weg met $R_3 \to R_3 + 3R_2$: $\;(0,\; -3 + 3,\; -1 - 6 \mid -9 - 12) = (0,\; 0,\; -7 \mid -21)$.

$$
\left(\begin{array}{ccc|c} 1 & 1 & 1 & 6 \\ 0 & 1 & -2 & -4 \\ 0 & 0 & -7 & -21 \end{array}\right)
$$

**Terugsubstitutie.**

- Rij 3: $-7z = -21$, dus $z = 3$.
- Rij 2: $y - 2z = -4$, dus $y = -4 + 6 = 2$.
- Rij 1: $x + y + z = 6$, dus $x = 6 - 2 - 3 = 1$.

**Controle:** $1 + 2 + 3 = 6$; $2 - 2 + 3 = 3$; $1 + 4 - 3 = 2$. De oplossing is $(x, y, z) = (1, 2, 3)$.
:::

Nu kun je het graanprobleem uit de introductie aanpakken. Daar komen breuken uit, maar het stappenplan blijft hetzelfde.

:::example Uitgewerkt voorbeeld: het graanprobleem
$$
\left(\begin{array}{ccc|c} 3 & 2 & 1 & 39 \\ 2 & 3 & 1 & 34 \\ 1 & 2 & 3 & 26 \end{array}\right)
$$

**Spilelement.** Verwissel $R_1 \leftrightarrow R_3$, zodat er een 1 linksboven staat:

$$
\left(\begin{array}{ccc|c} 1 & 2 & 3 & 26 \\ 2 & 3 & 1 & 34 \\ 3 & 2 & 1 & 39 \end{array}\right)
$$

**Ronde 1.** $R_2 \to R_2 - 2R_1$ geeft $(0,\; -1,\; -5 \mid -18)$. $R_3 \to R_3 - 3R_1$ geeft $(0,\; -4,\; -8 \mid -39)$.

**Ronde 2.** $R_3 \to R_3 - 4R_2$ geeft $(0,\; -4 + 4,\; -8 + 20 \mid -39 + 72) = (0,\; 0,\; 12 \mid 33)$.

$$
\left(\begin{array}{ccc|c} 1 & 2 & 3 & 26 \\ 0 & -1 & -5 & -18 \\ 0 & 0 & 12 & 33 \end{array}\right)
$$

**Terugsubstitutie.**

- $12z = 33$, dus $z = \frac{33}{12} = \frac{11}{4} = 2\tfrac{3}{4}$.
- $-y - 5z = -18$, dus $y = 18 - 5 \cdot \frac{11}{4} = \frac{72}{4} - \frac{55}{4} = \frac{17}{4} = 4\tfrac{1}{4}$.
- $x + 2y + 3z = 26$, dus $x = 26 - \frac{34}{4} - \frac{33}{4} = \frac{104 - 34 - 33}{4} = \frac{37}{4} = 9\tfrac{1}{4}$.

Een bundel goed graan levert $9\tfrac{1}{4}$ *dou*, middelmatig $4\tfrac{1}{4}$ *dou* en slecht $2\tfrac{3}{4}$ *dou*. Dat is ook het antwoord dat in de *Negen Hoofdstukken* staat.

**Controle** van de eerste vergelijking: $3 \cdot 9\tfrac{1}{4} + 2 \cdot 4\tfrac{1}{4} + 2\tfrac{3}{4} = 27\tfrac{3}{4} + 8\tfrac{1}{2} + 2\tfrac{3}{4} = 39$. Klopt.
:::

:::tip Breuken uitstellen
Je kunt breuken lang vermijden door rijen eerst met een geheel getal te vermenigvuldigen, zodat het wegvegen in gehele getallen blijft (zoals $R_2 \to 3R_2 - 2R_1$, een combinatie van schalen en vegen). Pas helemaal aan het eind deel je. Dat is precies wat de Chinese rekenaars deden; in het historisch intermezzo zie je hoe.
:::

{{ exercises: 32-018, 32-019, 32-020 }}

## 6. Geen of oneindig veel oplossingen

In module 20 zag je dat twee lijnen elkaar in één punt kunnen snijden, evenwijdig kunnen lopen (geen oplossing) of kunnen samenvallen (oneindig veel oplossingen). Bij vegen zie je die gevallen vanzelf verschijnen: er ontstaat een rij met **alleen nullen links van de streep**.

:::example Uitgewerkt voorbeeld: drie mogelijkheden
**Oneindig veel oplossingen.** $x + 2y = 4$ en $2x + 4y = 8$.

$$
\left(\begin{array}{cc|c} 1 & 2 & 4 \\ 2 & 4 & 8 \end{array}\right) \xrightarrow{R_2 \to R_2 - 2R_1} \left(\begin{array}{cc|c} 1 & 2 & 4 \\ 0 & 0 & 0 \end{array}\right)
$$

De tweede rij zegt $0x + 0y = 0$: altijd waar, maar zonder informatie. De tweede vergelijking was gewoon het dubbele van de eerste. Er blijft één voorwaarde over, $x + 2y = 4$, en die heeft oneindig veel oplossingen. Met een parameter: kies $y = t$, dan $x = 4 - 2t$.

**Geen oplossing.** $x + 2y = 4$ en $2x + 4y = 5$.

$$
\left(\begin{array}{cc|c} 1 & 2 & 4 \\ 2 & 4 & 5 \end{array}\right) \xrightarrow{R_2 \to R_2 - 2R_1} \left(\begin{array}{cc|c} 1 & 2 & 4 \\ 0 & 0 & -3 \end{array}\right)
$$

De tweede rij zegt $0x + 0y = -3$, oftewel $0 = -3$. Dat kan nooit. Het stelsel is **strijdig**.

**Precies één oplossing.** Als er na het vegen geen nulrij links van de streep ontstaat, heeft elke onbekende een eigen spilelement en vind je met terugsubstitutie precies één oplossing.
:::

:::theory Het aantal oplossingen aflezen
Breng $[A \mid b]$ in trapvorm (met evenveel vergelijkingen als onbekenden).

- Een rij $(0 \;\; 0 \;\cdots\; 0 \mid c)$ met $c \neq 0$: **geen oplossing**.
- Geen zulke rij, maar wel een rij met alleen nullen $(0 \;\cdots\; 0 \mid 0)$: **oneindig veel oplossingen**.
- Geen nulrijen links van de streep: **precies één oplossing**.
:::

In de volgende les zie je een snellere test voor het geval met twee onbekenden: één getal, de **determinant**, vertelt je vooraf of er precies één oplossing is.

{{ exercises: 32-021, 32-022 }}

## 7. Waarom dit zo belangrijk is

Vegen lijkt een bescheiden techniek, maar het is een van de belangrijkste algoritmen van de toegepaste wiskunde. Het werkt voor elk aantal onbekenden, het vraagt geen slimme invallen, en het aantal rekenstappen is voorspelbaar. Een computer lost op deze manier (met verfijningen om afrondfouten klein te houden) stelsels op met duizenden of zelfs miljoenen onbekenden, bijvoorbeeld bij weersvoorspellingen, sterkteberekeningen van bruggen en vliegtuigvleugels, en het trainen van statistische modellen.

Een variant die je soms tegenkomt, is **Gauss-Jordan-eliminatie**: je veegt dan niet alleen onder, maar ook **boven** elk spilelement nullen, en je deelt elke rij door haar spilelement. Aan het eind staat links de eenheidsmatrix en rechts direct de oplossing:

$$
\left(\begin{array}{ccc|c} 1 & 0 & 0 & 1 \\ 0 & 1 & 0 & 2 \\ 0 & 0 & 1 & 3 \end{array}\right) \qquad\Longleftrightarrow\qquad x = 1,\; y = 2,\; z = 3
$$

Met de hand is gewone Gauss-eliminatie plus terugsubstitutie meestal minder werk.
