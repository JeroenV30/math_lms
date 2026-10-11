# Afstand, middelpunt, verschuiven en spiegelen

Met coördinaten kun je een punt niet alleen vastleggen, je kunt er ook mee *rekenen*. In deze les bepaal je hoe ver twee punten uit elkaar liggen als ze op dezelfde horizontale of verticale lijn staan, je zoekt het midden van een lijnstuk, en je onderzoekt wat er met de coördinaten gebeurt als je een punt of een hele figuur verschuift of spiegelt. In alle gevallen is het patroon hetzelfde: een meetkundige handeling wordt een rekenregel op de twee getallen.

## 1. Verplaatsing en afstand

Ga van punt $A = (-2; 1)$ naar punt $B = (4; 5)$. Je gaat naar rechts en omhoog. Hoeveel? Kijk apart naar elke richting:

- de x-coördinaat verandert van $-2$ naar $4$: een verandering van $4 - (-2) = 6$;
- de y-coördinaat verandert van $1$ naar $5$: een verandering van $5 - 1 = 4$.

Zo'n verandering noemen we een **verplaatsing**. Je berekent haar altijd als *eind min begin*. Voor de twee richtingen schrijf je $\Delta x$ en $\Delta y$ (de Griekse hoofdletter delta staat voor 'verschil').

:::formula Verplaatsing
$$\Delta x = x_2 - x_1, \qquad \Delta y = y_2 - y_1$$
Het teken geeft de richting: $\Delta x > 0$ is naar rechts, $\Delta x < 0$ naar links, $\Delta y > 0$ omhoog en $\Delta y < 0$ omlaag.
:::

Een verplaatsing heeft dus een teken, een **afstand** niet. Een afstand is een lengte en dus nooit negatief. Bij een lijnstuk dat horizontaal of verticaal loopt, is de afstand de *grootte* van de verplaatsing: je laat het teken weg.

![Afstand en middelpunt in het assenstelsel](/images/diagrams/m17-afstand-middelpunt.svg "Links: P (−3; −2) en Q (5; −2) liggen op dezelfde horizontale lijn; de afstand is 5 − (−3) = 8. Rechts: het schuine lijnstuk AB heeft verplaatsing Δx = 6 en Δy = 4; het middelpunt is M (1; 3). Eigen illustratie.")

:::example Afstand met een negatieve coördinaat
Bepaal de afstand tussen $P = (-3; -2)$ en $Q = (5; -2)$.

1. De y-coördinaten zijn gelijk, dus het lijnstuk loopt horizontaal. Alleen de x-coördinaten doen ertoe.
2. De verplaatsing van $P$ naar $Q$ is $\Delta x = 5 - (-3) = 8$.
3. De afstand is 8. Als je van $Q$ naar $P$ gaat, is de verplaatsing $-8$, maar de afstand blijft 8.

Controle: $P$ ligt drie links van de y-as en $Q$ vijf rechts ervan. Samen $3 + 5 = 8$.
:::

Het is verleidelijk om bij negatieve coördinaten de tekens te negeren en $5 - 3 = 2$ te rekenen. Dat klopt alleen als beide punten aan dezelfde kant van de y-as liggen. Liggen ze aan weerszijden, dan tel je de twee stukken op. De formule 'eind min begin' regelt dat vanzelf, mits je de min correct afhandelt: $5 - (-3) = 5 + 3$.

{{ exercises: 17-008, 17-009, 17-033 }}

:::warning Een schuin lijnstuk
Voor een lijnstuk dat schuin loopt is de afstand niet gelijk aan $\Delta x + \Delta y$. Het kortste pad tussen A en B is de rechte lijn, en die is korter dan eerst 6 naar rechts en dan 4 omhoog lopen. Hoe je de afstand wél berekent, leer je in module 18 met de stelling van Pythagoras. In deze les blijf je bij horizontale en verticale lijnstukken.
:::

## 2. Het middelpunt van een lijnstuk

Het midden van een lijnstuk ligt even ver van beide uiteinden. Aan een getallenlijn zie je hoe je dat berekent: het midden van 2 en 8 is 5, het gemiddelde van de twee getallen. Dat werkt ook voor coördinaten. Je neemt het gemiddelde van de x-coördinaten en het gemiddelde van de y-coördinaten, los van elkaar.

:::formula Middelpunt
$$M = \left(\frac{x_1 + x_2}{2};\ \frac{y_1 + y_2}{2}\right)$$
:::

Waarom klopt dit? Het midden is het punt waar je na de helft van de verplaatsing aankomt. Voor de x-coördinaat is dat $x_1 + \tfrac{1}{2}(x_2 - x_1) = \tfrac{x_1 + x_2}{2}$, en voor de y-coördinaat geldt hetzelfde. Dat beide coördinaten apart behandeld kunnen worden, is precies de kracht van het stelsel: een vlak probleem valt uiteen in twee getallenlijn-problemen.

:::example Het middelpunt berekenen
Bepaal het middelpunt van $A = (-2; 1)$ en $B = (4; 5)$.

1. x-coördinaat: $\dfrac{-2 + 4}{2} = \dfrac{2}{2} = 1$.
2. y-coördinaat: $\dfrac{1 + 5}{2} = \dfrac{6}{2} = 3$.
3. Het middelpunt is $M = (1; 3)$.

Controle: van $A$ naar $M$ is de verplaatsing $(3; 2)$, van $M$ naar $B$ ook $(3; 2)$. Dat is precies wat je van een middelpunt verwacht.
:::

{{ exercises: 17-034 }}

### Een eindpunt terugvinden

Je kunt de redenering omkeren. Stel dat je het middelpunt $M$ en één uiteinde $A$ kent, en het andere uiteinde $B$ zoekt. Van $A$ naar $M$ ga je een bepaalde stap; dezelfde stap voorbij $M$ brengt je bij $B$.

:::example Het andere uiteinde
Het lijnstuk $AB$ heeft middelpunt $M = (1; 2)$, en $A = (-3; 5)$. Zoek $B$.

1. De stap van $A$ naar $M$: $\Delta x = 1 - (-3) = 4$ en $\Delta y = 2 - 5 = -3$.
2. Dezelfde stap vanaf $M$: $B = (1 + 4;\ 2 + (-3)) = (5; -1)$.
3. Controle: het middelpunt van $(-3; 5)$ en $(5; -1)$ is $\left(\tfrac{-3+5}{2};\ \tfrac{5-1}{2}\right) = (1; 2)$.
:::

Een tweede manier gebruikt de formule zelf: $\tfrac{-3 + x_B}{2} = 1$ geeft $x_B = 5$. Beide wegen leiden naar hetzelfde punt. Kies degene waarbij jij minder tekenfouten maakt.

{{ exercises: 17-035 }}

## 3. Verschuiven

Een **verschuiving** (of translatie) zet elk punt van een figuur dezelfde afstand in dezelfde richting. Als je een punt vier naar rechts en twee omlaag verschuift, tel je 4 bij de x-coördinaat op en trek je 2 af van de y-coördinaat. Voor elk punt van de figuur doe je precies hetzelfde.

Daardoor verandert de *vorm* niet: alle afstanden en hoeken blijven gelijk. Een driehoek die je verschuift, is daarna dezelfde driehoek op een andere plek. Dat kun je controleren door een zijde te meten voor en na de verschuiving: het verschil van de coördinaten blijft hetzelfde, omdat bij beide punten hetzelfde wordt opgeteld.

:::example Een punt terugschuiven
Een punt $P$ is verschoven over 3 naar links en 2 omhoog, en komt zo terecht in $(-1; 5)$. Waar lag $P$ oorspronkelijk?

1. De verschuiving is $(-3; +2)$. Om haar ongedaan te maken, doe je het tegenovergestelde: $(+3; -2)$.
2. $P = (-1 + 3;\ 5 - 2) = (2; 3)$.
3. Controle: van $(2; 3)$ drie naar links is $-1$, twee omhoog is 5. Dat klopt.
:::

{{ exercises: 17-012, 17-036 }}

## 4. Spiegelen

Bij een spiegeling kom je het punt aan de andere kant van de spiegelas tegen, op dezelfde afstand. Voor de assen zelf kun je dit rechtstreeks uit de coördinaten aflezen.

- Spiegelen in de **x-as**: een punt boven de as komt onder de as terecht. De x-coördinaat blijft, de y-coördinaat verandert van teken. $(3; 2) \mapsto (3; -2)$.
- Spiegelen in de **y-as**: links en rechts verwisselen. De y-coördinaat blijft, de x-coördinaat verandert van teken. $(3; 2) \mapsto (-3; 2)$.
- Spiegelen in de **oorsprong** (een halve draai): beide coördinaten veranderen van teken. $(3; 2) \mapsto (-3; -2)$.

![Het punt (3; 2) en zijn drie spiegelbeelden](/images/diagrams/m17-spiegelen.svg "Het punt P (3; 2) gespiegeld in de x-as, in de y-as en in de oorsprong. Eigen illustratie.")

Dat de spiegeling in de oorsprong hetzelfde is als achter elkaar in beide assen spiegelen, zie je direct: eerst $y$ van teken wisselen, dan $x$, geeft beide tekens omgekeerd.

:::theory Een regel om te onthouden
Bij spiegelen in een as verandert de coördinaat die *loodrecht op die as* staat van teken. De x-as loopt horizontaal, dus de x-coördinaat blijft; de y-coördinaat staat er loodrecht op en wisselt van teken.
:::

:::question Een punt op de spiegelas
Wat gebeurt er met $(4; 0)$ bij spiegelen in de x-as? Klopt dat met de tekenregel, en wat zegt het over punten die op de spiegelas zelf liggen?
:::

Een punt op de spiegelas valt op zichzelf: $y = 0$, en $-0 = 0$. Dat is geen toeval maar de bedoeling van een spiegeling: wat op de as ligt, blijft liggen. Spiegelen verandert verder nooit de afstand tot de spiegelas, alleen de kant.

{{ exercises: 17-010, 17-011 }}
