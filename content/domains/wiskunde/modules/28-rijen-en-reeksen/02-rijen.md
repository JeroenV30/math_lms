# Wat is een rij?

In de introductie zag je drie puzzels: konijnen, graankorrels en een wandeling in steeds kleinere stappen. In alle drie ontstaat een lijst getallen die stap voor stap verder gaat. In deze les maak je dat idee precies. Je leert hoe je een rij noteert, hoe je een rij opvat als functie, en wat het verschil is tussen een **directe** en een **recursieve** formule.

## 1. Een rij als lijst

Een rij is een lijst getallen in een vaste volgorde. Bijvoorbeeld:

$$
5,\ 8,\ 11,\ 14,\ 17,\ \ldots
$$

De getallen in de rij heten de **termen**. De puntjes betekenen: de rij gaat verder, volgens hetzelfde patroon. Dat patroon moet je dan wel kunnen zien of krijgen. Bij $5, 8, 11, 14, 17$ ligt "steeds 3 erbij" voor de hand, maar strikt genomen kan een lijst van vijf getallen op oneindig veel manieren worden voortgezet. Daarom geeft een wiskundige liever een **regel** dan een rijtje met puntjes.

:::warning Puntjes zijn geen bewijs
De rij $1, 2, 4, 8, 16, \ldots$ lijkt "steeds verdubbelen". Maar er bestaat ook een bekende rij die begint met $1, 2, 4, 8, 16, 31, \ldots$ (het maximale aantal stukken waarin je een cirkel kunt verdelen door punten op de rand met lijnen te verbinden). De eerste vijf termen zijn gelijk; de zesde niet. Een rij ligt pas vast als de regel vastligt.
:::

## 2. Een rij als functie van n

Om over "de vierde term" of "de honderdste term" te kunnen praten, nummer je de termen. Dat nummer heet de **index** en noemen we meestal $n$. De term met nummer $n$ schrijven we als $u(n)$, of korter als $u_n$. In deze module beginnen we, zoals in veel Nederlandse lesmethoden, te nummeren bij $n = 0$:

| $n$ | 0 | 1 | 2 | 3 | 4 | … |
|---|---|---|---|---|---|---|
| $u(n)$ | 5 | 8 | 11 | 14 | 17 | … |

Zo bekeken is een rij gewoon een **functie** (module 19): de invoer is het rangnummer $n$, de uitvoer is de term $u(n)$. Het enige bijzondere is het domein: alleen de gehele getallen $0, 1, 2, 3, \ldots$ Er bestaat geen term met nummer $2{,}5$.

:::definition Rij
Een **rij** is een functie $u$ die aan elk geheel getal $n \geq 0$ een getal $u(n)$ toekent. De getallen $u(0), u(1), u(2), \ldots$ heten de **termen** van de rij; $n$ heet de **index** of het **rangnummer**.
:::

Dat de rij een functie is, heeft gevolgen voor de grafiek. Bij een lineaire functie teken je een doorgetrokken lijn; bij een rij teken je losse punten of losse staafjes, één bij elke $n$. Tussen de punten is er niets.

![Twee rijen als staafdiagram](/images/diagrams/m28-rij-staafjes.svg "Links een rij met steeds 3 erbij, rechts een rij met steeds keer 2. Een rij heeft alleen waarden bij gehele n. Eigen diagram.")

:::warning Let op het tellen
Omdat we bij $0$ beginnen, is $u(0)$ de **eerste** term, $u(1)$ de **tweede** en $u(9)$ de **tiende**. In het algemeen is $u(n)$ de $(n+1)$-ste term. Sommige boeken en rekenmachines beginnen bij $n = 1$. Controleer daarom altijd met welke index een rij begint. Bijna alle "fout met één"-vergissingen bij rijen komen hiervandaan.
:::

## 3. De directe formule

Bij de rij $5, 8, 11, 14, \ldots$ komt er bij elke stap 3 bij. Hoeveel stappen zet je van $u(0)$ naar $u(n)$? Precies $n$. Dus

$$
u(n) = 5 + 3n
$$

Dat is een **directe formule** (ook wel *expliciete* formule): je vult $n$ in en krijgt meteen de term, zonder de voorgaande termen te kennen. De honderdste term is $u(99) = 5 + 3 \cdot 99 = 302$; je hoeft geen 99 stappen te zetten.

:::example Uitgewerkt voorbeeld: termen uit een directe formule
Gegeven is de rij $u(n) = n^2 - 2n$ voor $n \geq 0$.

1. **Bereken de eerste vijf termen.** Vul $n = 0, 1, 2, 3, 4$ in:
   $u(0) = 0$, $u(1) = 1 - 2 = -1$, $u(2) = 4 - 4 = 0$, $u(3) = 9 - 6 = 3$, $u(4) = 16 - 8 = 8$.
2. **Bereken $u(20)$.** $u(20) = 400 - 40 = 360$. Je hoeft $u(5)$ tot en met $u(19)$ niet te kennen.
3. **Is 99 een term van de rij?** Los op: $n^2 - 2n = 99$, dus $n^2 - 2n - 99 = 0$, dus $(n - 11)(n + 9) = 0$. De oplossing $n = 11$ is een geldig rangnummer; $n = -9$ niet. Dus ja: $u(11) = 99$, en het is de twaalfde term.

De laatste stap laat zien waarom de index ertoe doet: een vergelijking kan een negatieve of gebroken oplossing hebben, maar alleen gehele $n \geq 0$ tellen.
:::

## 4. De recursieve formule

Er is een tweede manier om een rij vast te leggen. Je geeft de **starterm** en een regel die zegt hoe je van een term naar de volgende gaat:

$$
u(0) = 5, \qquad u(n+1) = u(n) + 3
$$

Lees de tweede regel als: "de volgende term is de huidige term plus 3". Zo'n regel heet een **recursieve formule** of **recursievergelijking**, van het Latijnse *recurrere*, teruglopen: om een term te berekenen, loop je terug naar de vorige.

:::definition Directe en recursieve formule
- Een **directe formule** geeft $u(n)$ als uitdrukking in $n$, bijvoorbeeld $u(n) = 5 + 3n$.
- Een **recursieve formule** geeft één of meer startermen en een regel die een term uitdrukt in de voorgaande term(en), bijvoorbeeld $u(0) = 5$ en $u(n+1) = u(n) + 3$.
:::

Waarom zou je een recursieve formule gebruiken als een directe formule zoveel sneller rekent? Omdat veel situaties van nature recursief zijn. Een bank weet niet "het saldo na $n$ jaar"; de bank weet: "het saldo van volgend jaar is het saldo van nu, plus rente, plus de nieuwe inleg". En bij het konijnenraadsel weet je niet direct hoeveel paren er in maand 12 zijn, maar wel hoe het aantal van deze maand uit de vorige maanden volgt.

:::example Uitgewerkt voorbeeld: een recursieve rij doorrekenen
Gegeven: $u(0) = 4$ en $u(n+1) = 2 \cdot u(n) - 3$. Bereken $u(4)$.

Je kunt niet in één keer naar $u(4)$; je zet de stappen één voor één:

- $u(1) = 2 \cdot u(0) - 3 = 2 \cdot 4 - 3 = 5$
- $u(2) = 2 \cdot u(1) - 3 = 2 \cdot 5 - 3 = 7$
- $u(3) = 2 \cdot 7 - 3 = 11$
- $u(4) = 2 \cdot 11 - 3 = 19$

Een handige controle: schrijf bij elke regel op welke term je uitrekent. Wie stopt bij $u(3) = 11$, heeft één stap te weinig gezet.
:::

:::tip Recursie op de rekenmachine of in een spreadsheet
In een spreadsheet zet je $u(0)$ in cel A1 en in A2 de formule `=2*A1-3`. Die formule kopieer je naar beneden. Elke cel verwijst naar de cel erboven: dat is recursie in zijn zuiverste vorm. Op een grafische rekenmachine werkt de "Ans"-toets op dezelfde manier.
:::

## 5. De Fibonacci-rij: een recursie met twee voorgangers

Terug naar de konijnen uit de introductie. Begin in maand 0 met één jong paar. Dan:

- **Maand 1:** het paar is volwassen, maar heeft nog geen jongen. Eén paar.
- **Maand 2:** het volwassen paar krijgt een jong paar. Twee paren.
- **Maand 3:** het oude paar krijgt weer een jong paar; het jonge paar van vorige maand wordt volwassen. Drie paren.
- **Maand 4:** de twee volwassen paren krijgen elk een jong paar. Vijf paren.

![Konijnenparen per maand](/images/diagrams/m28-konijnen.svg "Konijnenparen per maand. Volwassen paren (gevuld) krijgen elke maand een jong paar (open). Eigen diagram.")

Waarom groeit het zo? Het aantal paren in een maand bestaat uit twee groepen:

1. **alle paren van vorige maand** (er gaat niemand dood), en
2. **de nieuwe jongen**: elk paar dat al twee maanden geleden bestond, is nu volwassen en krijgt één jong paar. Dat zijn er dus evenveel als het aantal paren van twee maanden geleden.

Als $P(n)$ het aantal paren in maand $n$ is, dan geldt dus $P(n) = P(n-1) + P(n-2)$, met de startwaarden $P(0) = 1$ en $P(1) = 1$. Dat geeft $1, 1, 2, 3, 5, 8, 13, \ldots$

Elke term is de som van de twee voorgaande termen. Wiskundigen nummeren deze rij meestal iets anders, met de letter $F$:

$$
F(1) = 1, \quad F(2) = 1, \quad F(n) = F(n-1) + F(n-2)
$$

en, als je wilt, $F(0) = 0$. Het aantal paren in maand $n$ is dan $P(n) = F(n+1)$. Zo krijg je de beroemde **rij van Fibonacci**:

$$
0,\ 1,\ 1,\ 2,\ 3,\ 5,\ 8,\ 13,\ 21,\ 34,\ 55,\ 89,\ 144,\ 233,\ 377,\ \ldots
$$

:::warning Twee startermen nodig
Bij een recursie die twee stappen terugkijkt, heb je **twee** startwaarden nodig. Met alleen $F(1) = 1$ weet je $F(2)$ niet. En met andere startwaarden krijg je een andere rij: $2, 1, 3, 4, 7, 11, 18, \ldots$ volgt dezelfde regel maar begint anders. Die rij heet de rij van Lucas, naar de Franse wiskundige Édouard Lucas, die in de negentiende eeuw ook de naam "rij van Fibonacci" in omloop bracht.
:::

Een directe formule voor de Fibonacci-getallen bestaat wel, maar die is verrassend: er komt de wortel uit 5 in voor. In het historisch intermezzo zie je waar die vandaan komt.

## 6. Een directe formule zoeken

Vaak heb je een recursieve beschrijving of een rijtje getallen, en wil je een directe formule. Een goede eerste stap is altijd: **kijk naar de verschillen** tussen opeenvolgende termen.

:::example Uitgewerkt voorbeeld: verschillen bekijken
Bekijk de rij $3, 7, 11, 15, 19, \ldots$ met $u(0) = 3$.

1. **Verschillen:** $7 - 3 = 4$, $11 - 7 = 4$, $15 - 11 = 4$, $19 - 15 = 4$. Steeds 4.
2. **Redeneer in stappen:** van $u(0)$ naar $u(n)$ zet je $n$ stappen van 4. Dus $u(n) = 3 + 4n$.
3. **Controleer met een term die je kent:** $u(3) = 3 + 12 = 15$. Klopt.

Let op het verschil met een rij die bij $n = 1$ begint. Als $u(1) = 3$ de eerste term is, zet je van $u(1)$ naar $u(n)$ maar $n - 1$ stappen, en wordt de formule $u(n) = 3 + 4(n - 1) = 4n - 1$. Dezelfde getallen, een andere formule, omdat de nummering anders is.
:::

Zijn de verschillen niet constant, kijk dan naar de **verschillen van de verschillen**.

:::example Uitgewerkt voorbeeld: tweede verschillen
De rij $u$ begint met $2, 3, 6, 11, 18, 27, \ldots$ ($u(0) = 2$).

1. **Eerste verschillen:** $1, 3, 5, 7, 9$. Niet constant, maar wel een duidelijk patroon: de oneven getallen.
2. **Tweede verschillen:** $2, 2, 2, 2$. Constant.
3. **Wat betekent dat?** De som van de eerste $n$ oneven getallen is $n^2$ (dat zag je misschien al in module 4 bij de kwadraten op de diagonaal van de tafel: $1 = 1$, $1 + 3 = 4$, $1 + 3 + 5 = 9$). Van $u(0)$ naar $u(n)$ tel je precies de eerste $n$ oneven getallen op, dus
   $$
   u(n) = 2 + n^2
   $$
4. **Controle:** $u(4) = 2 + 16 = 18$. Klopt.

Constante tweede verschillen wijzen altijd op een kwadratische formule (module 21), net zoals constante eerste verschillen wijzen op een lineaire formule.
:::

{{ exercises: 28-001, 28-002, 28-003, 28-004 }}

## 7. Samenvattend: twee blikken op dezelfde rij

| | Directe formule | Recursieve formule |
|---|---|---|
| Voorbeeld | $u(n) = 5 + 3n$ | $u(0) = 5$, $u(n+1) = u(n) + 3$ |
| Sterk in | snel een verre term berekenen | een proces stap voor stap beschrijven |
| Zwak in | soms moeilijk te vinden | verre termen kosten veel stappen |
| Je hebt nodig | alleen $n$ | startterm(en) en alle tussenliggende termen |

In de volgende les bekijk je de twee belangrijkste families van rijen, waarbij je altijd van de ene beschrijving naar de andere kunt overstappen.

{{ exercises: 28-005, 28-006 }}
