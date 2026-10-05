# Routes, ritten en snijpunten

Een assenstelsel beantwoordt twee soorten vragen. De eerste is *waar ligt iets?*, bijvoorbeeld op een kaart, in een tekening of in een computerspel. De tweede is *hoe verandert een grootheid?*, bijvoorbeeld de afgelegde weg in de tijd. In het eerste geval hebben beide assen dezelfde eenheid, in het tweede meten ze verschillende grootheden. In deze les gebruik je beide vormen door elkaar, en leer je een nieuwe vraag stellen: *waar ontmoeten twee lijnen elkaar?*

## 1. Waar snijden twee lijnen?

Twee lijnen kunnen elkaar op één punt snijden. Dat **snijpunt** ligt op beide lijnen tegelijk, dus de coördinaten voldoen aan beide vergelijkingen. Voor twee lijnen $y = a_1x + b_1$ en $y = a_2x + b_2$ betekent dat dat de y-waarden gelijk zijn: je stelt de twee rechterleden gelijk, lost $x$ op, en vult $x$ in een van de vergelijkingen in voor $y$.

:::example Twee lijnen ontmoeten elkaar
Zoek het snijpunt van $y = x + 1$ en $y = -x + 5$.

1. Stel de y-waarden gelijk: $x + 1 = -x + 5$.
2. Tel aan beide kanten $x$ op: $2x + 1 = 5$.
3. Trek 1 af: $2x = 4$, dus $x = 2$.
4. Vul in de eerste lijn in: $y = 2 + 1 = 3$.
5. Controle met de tweede lijn: $-2 + 5 = 3$. Het snijpunt is $(2; 3)$.
:::

De controle in stap 5 is belangrijk. Als de uitkomst van de twee lijnen niet gelijk is, heb je ergens een rekenfout gemaakt. Dat is een betrouwbaarder aanwijzing dan het nakijken van elke stap.

{{ exercises: 17-026 }}

## 2. Twee fietsers

Snijpunten krijgen betekenis in een context. Twee reizigers die op een rechte weg lopen of fietsen, hebben beiden een afstand-tijdlijn. Het snijpunt van hun lijnen is het moment waarop ze op dezelfde plek zijn.

:::example Inhalen
Fietser A vertrekt op tijdstip $x = 0$ vanuit het beginpunt en fietst 20 km per uur: $y = 20x$. Fietser B is op dat moment al 30 km verder en fietst 10 km per uur: $y = 10x + 30$. Na hoeveel uur haalt A fietser B in?

1. Op het moment van inhalen zijn de afstanden gelijk: $20x = 10x + 30$.
2. Trek $10x$ af: $10x = 30$, dus $x = 3$.
3. Na 3 uur zijn ze allebei op $y = 20 \cdot 3 = 60$ km. Controle met B: $10 \cdot 3 + 30 = 60$.
4. A haalt B in na 3 uur, op 60 km van het beginpunt.
:::

Waarom aftrekken, en niet optellen, van de snelheden? Omdat ze in *dezelfde richting* rijden. De afstand tussen hen van 30 km wordt met $20 - 10 = 10$ km per uur kleiner, dus 3 uur. Zouden ze naar elkaar toe rijden, dan zou je de snelheden juist optellen.

Bij toepassingen controleer je ook of het snijpunt binnen het bereik van het model ligt. Een snijpunt bij een negatieve tijd is wiskundig een gewoon punt, maar in de situatie van de fietsers heeft het geen betekenis: de rit begint op $x = 0$. Een model verder verlengen dan het bereik waarvoor het bedoeld is, is dus risicovol.

{{ exercises: 17-043 }}

## 3. Vormen verplaatsen en spiegelen

In de tweede les leerde je met punten rekenen; hier doe je dat met een hele figuur. Een figuur verschuiven of spiegelen betekent: dezelfde bewerking op elk hoekpunt uitvoeren. De rest van de figuur volgt vanzelf, omdat zijden rechte lijnstukken tussen de hoekpunten zijn.

:::example Een driehoek spiegelen
Driehoek $ABC$ heeft hoekpunten $A = (1; 2)$, $B = (5; 2)$ en $C = (3; 6)$. Spiegel de driehoek in de y-as.

1. In de y-as verandert de x-coördinaat van teken, de y blijft: $A' = (-1; 2)$, $B' = (-5; 2)$, $C' = (-3; 6)$.
2. Controle: $AB$ is horizontaal met lengte $5 - 1 = 4$. $A'B'$ heeft lengte $|-5 - (-1)| = 4$. De lengte blijft gelijk.
:::

Dat de lengte van $AB$ onveranderd blijft, is geen toeval: spiegelen en verschuiven veranderen geen afstanden. Een bijzonder nuttig inzicht is ook dat bij een parallellogram de twee diagonalen elkaar middendoor delen. Dat kun je gebruiken om een ontbrekend hoekpunt te vinden: als $ABCD$ een parallellogram is, vallen de middelpunten van $AC$ en $BD$ samen.

{{ exercises: 17-027, 17-028, 17-029 }}

## 4. Uitdagingen

De volgende opgaven combineren wat je hebt geleerd. Een tekening is een goede start; het rekenwerk ernaast maakt de uitkomst zeker.

:::challenge Een verplaatste driehoek
Een driehoek heeft hoekpunten $A = (-2; 1)$, $B = (3; 1)$ en $C = (0; 4)$. Verplaats de hele figuur vier eenheden naar rechts en twee omlaag. Wat worden de drie coördinaten? Controleer ook of de horizontale lengte van $AB$ gelijk blijft.
:::

{{ exercises: 17-030 }}

:::challenge Een parallellogram en een snijpunt met de as
In deze twee opgaven combineer je het middelpunt, het snijpunt met een as en het aflezen van een lijn. Maak eerst een schets: wie een schets heeft, ziet vaak meteen of een uitkomst redelijk is.
:::

{{ exercises: 17-044, 17-045 }}
