# Getallen in rijen en kolommen

Een matrix is in de eerste plaats iets heel gewoons: een tabel zonder de opschriften. In deze les leer je hoe je zo'n tabel noteert, hoe je een bepaald getal erin aanwijst, en hoe je met hele tabellen tegelijk rekent. De bewerkingen in deze les, optellen en vermenigvuldigen met een getal, zijn intuïtief. Het echte nieuwe werk, de matrixvermenigvuldiging, volgt in de volgende les.

## 1. Van tabel naar matrix

Een koffiebranderij heeft twee winkels, in Amersfoort en in Breda. Op maandag houdt de bedrijfsleider bij hoeveel pakken koffie, thee en cacao er in elke winkel verkocht zijn.

| maandag | koffie | thee | cacao |
|---|---|---|---|
| Amersfoort | 40 | 25 | 10 |
| Breda | 35 | 30 | 15 |

Als je afspreekt dat de **rijen** de winkels zijn (in deze volgorde) en de **kolommen** de producten (in deze volgorde), dan kun je de opschriften weglaten. Wat overblijft is een rechthoekig blok getallen:

$$
V = \begin{pmatrix} 40 & 25 & 10 \\ 35 & 30 & 15 \end{pmatrix}
$$

Zo'n rechthoekig schema heet een **matrix**. De getallen erin heten de **elementen** (of kentallen). Matrices krijgen meestal een hoofdletter als naam: $A$, $B$, $V$.

:::definition Matrix
Een **matrix** is een rechthoekig schema van getallen, geordend in rijen en kolommen. Een matrix met $m$ rijen en $n$ kolommen heet een **$m \times n$-matrix** (spreek uit: "$m$ bij $n$"). De getallen $m$ en $n$ zijn de **afmetingen** van de matrix.
:::

De matrix $V$ hierboven is een $2 \times 3$-matrix: 2 rijen en 3 kolommen. Hij heeft dus $2 \cdot 3 = 6$ elementen.

:::warning Eerst rijen, dan kolommen
De volgorde ligt vast: **eerst het aantal rijen, dan het aantal kolommen**. Een $2 \times 3$-matrix is iets anders dan een $3 \times 2$-matrix. De eerste ligt "plat" (2 rijen van 3), de tweede staat "rechtop" (3 rijen van 2). Een ezelsbruggetje: je leest een tabel eerst van boven naar beneden (welke rij?) en dan van links naar rechts (welke kolom?).
:::

Je kunt dezelfde gegevens ook andersom in een matrix zetten, met de producten als rijen en de winkels als kolommen. Dan krijg je een $3 \times 2$-matrix. Die matrix heet de **getransponeerde** van $V$, genoteerd als $V^{T}$: de rijen van $V$ worden de kolommen van $V^{T}$.

$$
V^{T} = \begin{pmatrix} 40 & 35 \\ 25 & 30 \\ 10 & 15 \end{pmatrix}
$$

Beide schrijfwijzen zijn goed, zolang je maar weet welke afspraak je gemaakt hebt. Dat is het belangrijkste wat je bij elke matrix moet vastleggen: **wat betekenen de rijen, en wat betekenen de kolommen?**

## 2. Een element aanwijzen: de notatie $a_{ij}$

Om over één getal in een matrix te praten, gebruik je twee indices: het rijnummer en het kolomnummer. Het element in rij $i$ en kolom $j$ van de matrix $A$ heet $a_{ij}$ (kleine letter, met de indices eronder).

![De notatie a_ij](/images/diagrams/m32-matrix-notatie.svg "In een 3 × 4-matrix staat element a₂₃ op de kruising van rij 2 en kolom 3.")

Een algemene $2 \times 3$-matrix ziet er dus zo uit:

$$
A = \begin{pmatrix} a_{11} & a_{12} & a_{13} \\ a_{21} & a_{22} & a_{23} \end{pmatrix}
$$

In de verkoopmatrix $V$ is $v_{13} = 10$: rij 1 (Amersfoort), kolom 3 (cacao). Op maandag zijn in Amersfoort dus 10 pakken cacao verkocht. En $v_{22} = 30$: in Breda zijn 30 pakken thee verkocht.

:::example Uitgewerkt voorbeeld: elementen aflezen en interpreteren
Gegeven is

$$
A = \begin{pmatrix} 4 & -1 & 7 & 0 \\ 2 & 9 & -3 & 5 \\ 6 & 1 & 8 & -2 \end{pmatrix}
$$

**Afmetingen.** Tel de rijen: 3. Tel de kolommen: 4. Het is een $3 \times 4$-matrix met 12 elementen.

**Element $a_{32}$.** Ga naar rij 3: $6, 1, 8, -2$. Neem daarin het tweede getal: $a_{32} = 1$.

**Element $a_{23}$.** Ga naar rij 2: $2, 9, -3, 5$. Neem het derde getal: $a_{23} = -3$.

Let op dat $a_{32}$ en $a_{23}$ verschillende elementen zijn. Bestaat $a_{41}$? Nee: de matrix heeft maar 3 rijen. En $a_{14} = 0$ bestaat wel, want er zijn 4 kolommen.
:::

Soms wordt een matrix niet met getallen gegeven, maar met een **voorschrift** voor elk element. Dat is handig bij grote matrices die een patroon volgen. Bijvoorbeeld: $A$ is de $2 \times 3$-matrix met $a_{ij} = i + 2j$. Dan reken je elk element uit door het rijnummer en het kolomnummer in te vullen:

$$
a_{11} = 1 + 2 = 3, \quad a_{12} = 1 + 4 = 5, \quad a_{13} = 1 + 6 = 7, \quad a_{21} = 2 + 2 = 4, \;\dots
\qquad\Rightarrow\qquad
A = \begin{pmatrix} 3 & 5 & 7 \\ 4 & 6 & 8 \end{pmatrix}
$$

## 3. Bijzondere vormen

Sommige vormen komen zo vaak voor dat ze een eigen naam hebben.

- Een **vierkante matrix** heeft evenveel rijen als kolommen, bijvoorbeeld $2 \times 2$ of $3 \times 3$. De elementen $a_{11}, a_{22}, a_{33}, \dots$ vormen samen de **hoofddiagonaal**, van linksboven naar rechtsonder.
- Een **rijvector** is een matrix met één rij, zoals $\begin{pmatrix} 3 & 1 & 4 \end{pmatrix}$ ($1 \times 3$).
- Een **kolomvector** is een matrix met één kolom, zoals $\begin{pmatrix} 2 \\ 5 \end{pmatrix}$ ($2 \times 1$). Kolomvectoren gebruik je straks voor de onbekenden van een stelsel en voor de coördinaten van een punt.
- De **nulmatrix** $O$ bevat alleen nullen. Er is een nulmatrix voor elke afmeting.

Twee matrices heten **gelijk** als ze dezelfde afmetingen hebben én alle elementen op overeenkomstige plaatsen gelijk zijn. Een gelijkheid van twee $2 \times 2$-matrices is dus eigenlijk een verzameling van vier gewone vergelijkingen. Dat gebruik je in een van de oefeningen.

{{ exercises: 32-001, 32-002, 32-007 }}

## 4. Matrices optellen en aftrekken

Op dinsdag verkopen de winkels opnieuw. De dinsdagcijfers staan in

$$
W = \begin{pmatrix} 38 & 20 & 12 \\ 41 & 28 & 9 \end{pmatrix}
$$

met dezelfde afspraak: rijen Amersfoort en Breda, kolommen koffie, thee en cacao. Hoeveel is er in twee dagen samen verkocht? Dat is per winkel en per product gewoon de som van de twee getallen op dezelfde plaats. Je telt de matrices **elementsgewijs** op:

$$
V + W = \begin{pmatrix} 40 + 38 & 25 + 20 & 10 + 12 \\ 35 + 41 & 30 + 28 & 15 + 9 \end{pmatrix} = \begin{pmatrix} 78 & 45 & 22 \\ 76 & 58 & 24 \end{pmatrix}
$$

Het element 58 betekent: in Breda zijn op maandag en dinsdag samen 58 pakken thee verkocht.

Aftrekken gaat op dezelfde manier. Het verschil $W - V$ laat zien hoeveel er op dinsdag meer (positief) of minder (negatief) verkocht werd dan op maandag:

$$
W - V = \begin{pmatrix} 38 - 40 & 20 - 25 & 12 - 10 \\ 41 - 35 & 28 - 30 & 9 - 15 \end{pmatrix} = \begin{pmatrix} -2 & -5 & 2 \\ 6 & -2 & -6 \end{pmatrix}
$$

:::definition Optellen en aftrekken
Twee matrices met **dezelfde afmetingen** tel je op door de elementen op dezelfde plaats op te tellen:

$$
(A + B)_{ij} = a_{ij} + b_{ij}
$$

Aftrekken gaat net zo: $(A - B)_{ij} = a_{ij} - b_{ij}$. Matrices met verschillende afmetingen kun je niet optellen of aftrekken.
:::

Waarom niet? Denk aan de betekenis. Als de ene tabel twee winkels en drie producten heeft, en de andere drie winkels en twee producten, dan is er geen zinnige manier om "het getal op dezelfde plaats" te vinden. De som is dan **niet gedefinieerd**.

## 5. Vermenigvuldigen met een getal

Op zaterdag is het in beide winkels ongeveer twee keer zo druk als op maandag. Een redelijke schatting voor de zaterdagverkoop is dan

$$
2V = \begin{pmatrix} 2 \cdot 40 & 2 \cdot 25 & 2 \cdot 10 \\ 2 \cdot 35 & 2 \cdot 30 & 2 \cdot 15 \end{pmatrix} = \begin{pmatrix} 80 & 50 & 20 \\ 70 & 60 & 30 \end{pmatrix}
$$

Elk element wordt met hetzelfde getal vermenigvuldigd. Zo'n gewoon getal heet in de matrixrekening een **scalair** (van het Latijnse *scala*, ladder of schaal: het getal schaalt de hele matrix op of af).

:::definition Scalair vermenigvuldigen
Voor een getal $k$ en een matrix $A$ is $kA$ de matrix die je krijgt door **elk** element van $A$ met $k$ te vermenigvuldigen:

$$
(kA)_{ij} = k \cdot a_{ij}
$$

In het bijzonder is $(-1)A = -A$, en $A - B = A + (-1)B$.
:::

:::example Uitgewerkt voorbeeld: een combinatie uitrekenen
Gegeven

$$
A = \begin{pmatrix} 2 & 5 \\ -1 & 4 \end{pmatrix}, \qquad B = \begin{pmatrix} 3 & 0 \\ 4 & -2 \end{pmatrix}
$$

Bereken $3A - 2B$.

**Stap 1: eerst de scalaire producten.**

$$
3A = \begin{pmatrix} 6 & 15 \\ -3 & 12 \end{pmatrix}, \qquad 2B = \begin{pmatrix} 6 & 0 \\ 8 & -4 \end{pmatrix}
$$

**Stap 2: elementsgewijs aftrekken.** Werk element voor element en let op de tekens:

$$
3A - 2B = \begin{pmatrix} 6 - 6 & 15 - 0 \\ -3 - 8 & 12 - (-4) \end{pmatrix} = \begin{pmatrix} 0 & 15 \\ -11 & 16 \end{pmatrix}
$$

**Controle.** Neem één element en reken het rechtstreeks uit: het element in rij 2, kolom 2 is $3 \cdot 4 - 2 \cdot (-2) = 12 + 4 = 16$. Dat klopt.

De meest gemaakte fout zit in het laatste element: $12 - (-4)$ is $16$, niet $8$. Twee mintekens na elkaar geven een plus.
:::

:::example Uitgewerkt voorbeeld: prijzen aanpassen
De branderij heeft een prijsmatrix met de prijs per pak (in euro) bij twee soorten verpakking:

| | koffie | thee | cacao |
|---|---|---|---|
| 250 gram | 4,80 | 3,20 | 4,00 |
| 500 gram | 9,00 | 6,00 | 7,50 |

In de uitverkoop gaat er 20% af. Dan betaal je nog 80% van de prijs, dus de nieuwe prijsmatrix is $0{,}8P$:

$$
0{,}8 \begin{pmatrix} 4{,}80 & 3{,}20 & 4{,}00 \\ 9{,}00 & 6{,}00 & 7{,}50 \end{pmatrix} = \begin{pmatrix} 3{,}84 & 2{,}56 & 3{,}20 \\ 7{,}20 & 4{,}80 & 6{,}00 \end{pmatrix}
$$

Een pak thee van 500 gram kost in de uitverkoop dus € 4,80. Met één scalaire vermenigvuldiging heb je zes prijzen tegelijk aangepast. Zo werkt een spreadsheet ook als je een hele kolom met een percentage vermenigvuldigt.
:::

## 6. Rekenregels

Omdat optellen en scalair vermenigvuldigen element voor element gaan, gelden dezelfde rekenregels als voor gewone getallen. Voor matrices $A$, $B$, $C$ met dezelfde afmetingen en getallen $k$ en $l$ geldt:

:::theory Rekenregels voor optellen en scalair vermenigvuldigen
- $A + B = B + A$ (wisseleigenschap)
- $(A + B) + C = A + (B + C)$ (schakeleigenschap)
- $A + O = A$ (de nulmatrix verandert niets)
- $A + (-A) = O$
- $k(A + B) = kA + kB$ en $(k + l)A = kA + lA$ (distributieve eigenschappen)
- $k(lA) = (kl)A$
:::

Je hoeft deze regels niet uit je hoofd te leren: ze volgen direct uit de rekenregels voor getallen die je in de eerste modules hebt gezien, toegepast op elk element afzonderlijk. Ze zijn wel belangrijk, want ze betekenen dat je met matrixvergelijkingen kunt werken zoals met gewone vergelijkingen.

:::example Uitgewerkt voorbeeld: een matrixvergelijking oplossen
Zoek de matrix $X$ waarvoor $2X + A = B$, met

$$
A = \begin{pmatrix} 1 & 4 \\ -3 & 0 \end{pmatrix}, \qquad B = \begin{pmatrix} 7 & 2 \\ 5 & 6 \end{pmatrix}
$$

**Stap 1: los op naar $X$**, net als bij een gewone vergelijking. Trek aan beide kanten $A$ af en deel door 2:

$$
2X = B - A \qquad\Rightarrow\qquad X = \tfrac{1}{2}(B - A)
$$

**Stap 2: reken uit.**

$$
B - A = \begin{pmatrix} 6 & -2 \\ 8 & 6 \end{pmatrix}, \qquad X = \begin{pmatrix} 3 & -1 \\ 4 & 3 \end{pmatrix}
$$

**Stap 3: controleer** door in te vullen: $2X + A = \begin{pmatrix} 6 & -2 \\ 8 & 6 \end{pmatrix} + \begin{pmatrix} 1 & 4 \\ -3 & 0 \end{pmatrix} = \begin{pmatrix} 7 & 2 \\ 5 & 6 \end{pmatrix} = B$. Klopt.
:::

{{ exercises: 32-003, 32-004, 32-005, 32-006 }}

:::tip Afmetingen eerst
Maak er een gewoonte van om bij elke matrixbewerking eerst de afmetingen te controleren. Bij optellen en aftrekken moeten ze gelijk zijn; in de volgende les zie je dat bij vermenigvuldigen een heel andere voorwaarde geldt. Wie de afmetingen controleert, vangt veel fouten al op voordat er gerekend is.
:::
