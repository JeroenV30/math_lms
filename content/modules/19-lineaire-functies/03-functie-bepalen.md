# Van twee punten naar een regel

Een lineaire functie wordt vastgelegd door twee getallen, $a$ en $b$. In deze les leer je ze te vinden uit de gegevens die je in de praktijk meestal hebt: een tabel, een grafiek of twee gemeten punten. Je begint met de helling.

## De helling als verhouding van veranderingen

De helling meet hoe snel de uitvoer verandert ten opzichte van de invoer. Neem twee punten op de lijn. Het verschil in $x$ noem je $\Delta x$ (gelezen als 'delta x'), het verschil in $y$ noem je $\Delta y$. De helling is
$$
a = \frac{\Delta y}{\Delta x} = \frac{y_2 - y_1}{x_2 - x_1}
$$
Het is de toename van $y$ per eenheid van $x$. Het maakt niet uit welke twee punten je kiest, zolang je ze in dezelfde volgorde gebruikt in teller en noemer: bij een rechte lijn levert elk paar dezelfde verhouding. Dat is precies wat een rechte lijn tot een rechte lijn maakt.

![Hellingdriehoek bij y = 2x + 1](/images/diagrams/m19-hellingdriehoek.svg "De hellingdriehoek tussen (1; 3) en (3; 7): Δx = 2, Δy = 4, dus a = 2 — eigen figuur")

In de figuur loop je van $(1; 3)$ twee stappen naar rechts en dan vier omhoog, om bij $(3; 7)$ uit te komen. De helling is $4 / 2 = 2$. Je had ook één stap naar rechts en twee omhoog kunnen nemen: dezelfde verhouding.

:::warning Delen in de juiste richting
Een veelgemaakte fout is de verhouding omdraaien: $\Delta x / \Delta y$ in plaats van $\Delta y / \Delta x$. Het resultaat is dan precies het omgekeerde van de helling. Een controle: bij een steile lijn moet de helling een groot getal zijn. Een lijn die per stap 4 omhoog gaat, heeft helling 4, niet $\tfrac{1}{4}$.
:::

## Helling uit een tabel

In een tabel zoek je twee rijen en bereken je de verschillen. Neem de tabel

| $x$ | 0 | 1 | 2 | 3 |
|---|---|---|---|---|
| $y$ | 5 | 8 | 11 | 14 |

Bij elke stap van 1 in $x$ neemt $y$ met 3 toe. De helling is 3. Bovendien kun je de startwaarde direct aflezen, omdat $x = 0$ in de tabel staat: $b = 5$. De regel is dus $y = 3x + 5$.

Een tabel is alleen lineair als de verschillen in $y$ gelijk zijn voor gelijke stappen in $x$. Zijn de $x$-stappen niet gelijk, dan vergelijk je de quotiënten $\Delta y / \Delta x$ per paar. Komt er steeds hetzelfde getal uit, dan is het verband lineair.

## Helling uit een grafiek

Uit een grafiek lees je de helling af met een hellingdriehoek. Zoek twee punten waarvan je de coördinaten goed kunt aflezen, liefst op roosterpunten. Teken (of zie) de horizontale stap en de verticale stap, en deel. Een dalende lijn heeft een verticale stap omlaag: dat telt als negatief.

:::example Helling bij een dalende lijn
Een lijn gaat door $(0; 10)$ en $(4; 2)$. Bepaal de helling.

1. $\Delta y = 2 - 10 = -8$.
2. $\Delta x = 4 - 0 = 4$.
3. $a = -8 / 4 = -2$.

De lijn daalt dus 2 per stap naar rechts. Vergeet je het minteken, dan beschrijf je een stijgende lijn terwijl de grafiek daalt.
:::

:::warning Het minteken van een dalende lijn
Bij een dalende lijn is de helling negatief. Je bent het minteken vergeten als je lijn daalt en $a$ positief is. Controleer altijd: kijk naar de grafiek, of vergelijk de $y$-waarden, en bepaal eerst of de lijn stijgt of daalt.
:::

## De regel van een lijn door twee punten

Heb je twee punten, dan zoek je $a$ én $b$. Dat gaat in twee stappen.

:::example De lijn door (2; 7) en (5; 16)
1. Bereken de helling: $a = \dfrac{16 - 7}{5 - 2} = \dfrac{9}{3} = 3$.
2. Vul $a$ en één punt in $y = ax + b$ in. Met $(2; 7)$ krijg je $7 = 3 \times 2 + b$, dus $7 = 6 + b$ en $b = 1$.
3. De regel is $y = 3x + 1$.
4. Controleer met het andere punt: bij $x = 5$ geeft $3 \times 5 + 1 = 16$. Dat klopt.
:::

De controle in stap 4 is geen overbodige luxe. Je hebt het tweede punt in stap 2 niet gebruikt voor $b$, dus het is een echte test van je rekenwerk. Gebruik hem altijd.

Er is ook een kortere route voor $b$: $b = y_1 - a x_1$. Dat is dezelfde berekening, maar dan in één keer opgeschreven. Voor het voorbeeld: $b = 7 - 3 \times 2 = 1$.

Twee punten met verschillende $x$ bepalen precies één niet-verticale rechte lijn. Twee punten met dezelfde $x$ en verschillende $y$ geven een verticale lijn; daarvoor werkt $y = ax + b$ niet, omdat je zou moeten delen door $\Delta x = 0$.

## Een tabel beoordelen

Controleer eerst of een verband lineair is, voordat je er een lijn doorheen legt. Voor $x = 0, 1, 2, 3$ en $y = 5, 8, 11, 14$ is de stap steeds 3. Voor $x = 0, 1, 2, 3$ en $y = 1, 2, 4, 7$ zijn de stappen 1, 2, 3: de stappen groeien en het verband is niet lineair.

:::warning Meetwaarden zijn niet altijd exact
Echte metingen kunnen een beetje rond een lijn liggen door meetfout of variatie. Twee meetpunten leveren altijd een lijn op, maar bewijzen niet dat de situatie over het hele gebied lineair is. Gebruik extra waarnemingen om het model te toetsen.
:::

## Oefenen

Rekenen met helling en startwaarde moet automatisch worden. Je kunt kiezen: tabel, grafiek of twee punten, de methode is steeds dezelfde.

{{ widget: coordinate-grid size=8 points="(2;7) (5;16)" connect=true }}

{{ exercises: 19-008, 19-009, 19-010, 19-011, 19-012, 19-034, 19-035, 19-036 }}
