# Samenvatting

In deze module heb je leren werken met rijen (geordende lijsten getallen) en reeksen (sommen van termen). Je zag dat twee eenvoudige ideeën, een vast verschil en een vaste factor, een groot deel van de toepassingen dekken, en dat de stap naar oneindig veel termen verrassend precies te maken is.

## Rijen

:::summary Rij, index en formules
- Een **rij** is een functie van het rangnummer $n = 0, 1, 2, \ldots$ De term met nummer $n$ is $u(n)$; omdat we bij 0 beginnen, is $u(n)$ de $(n+1)$-ste term.
- Een **directe formule** geeft $u(n)$ als uitdrukking in $n$. Een **recursieve formule** geeft startterm(en) en een regel van de ene term naar de volgende.
- Constante eerste verschillen wijzen op een lineaire formule; constante tweede verschillen op een kwadratische.
- De **rij van Fibonacci** volgt de recursie $F(n) = F(n-1) + F(n-2)$ met twee startermen: $0, 1, 1, 2, 3, 5, 8, 13, \ldots$
:::

| | Rekenkundige rij | Meetkundige rij |
|---|---|---|
| Kenmerk | vast verschil $v$ | vaste reden $r$ |
| Recursief | $u(n+1) = u(n) + v$ | $u(n+1) = r \cdot u(n)$ |
| Direct | $u(n) = u(0) + n \cdot v$ | $u(n) = u(0) \cdot r^n$ |
| Grafiek | punten op een rechte lijn (module 19) | punten op een exponentiële kromme (module 25) |
| Uit twee termen | verschil delen door aantal stappen | verhouding, dan wortel uit aantal stappen |

## Sommen

:::formula Somformules
- $1 + 2 + \ldots + n = \dfrac{n(n+1)}{2}$
- Rekenkundig: $S = \dfrac{N \cdot (\text{eerste} + \text{laatste})}{2}$, met $N$ het aantal termen.
- Meetkundig (eerste $N$ termen, $r \neq 1$): $S_N = u(0) \cdot \dfrac{r^N - 1}{r - 1}$
- Oneindig meetkundig, alleen als $-1 < r < 1$: $S = \dfrac{u(0)}{1 - r}$
:::

De twee somformules hebben elk hun eigen idee. Bij een rekenkundige rij schrijf je de som **vooruit en achteruit** op, zodat elk paar dezelfde som heeft (de truc die aan Gauss wordt toegeschreven). Bij een meetkundige rij **vermenigvuldig je met $r$ en trek je af**, zodat alle termen behalve twee wegvallen.

## Oneindigheid

- Een oneindige reeks **convergeert** als de partiële sommen naar één vast getal gaan; dat getal heet de som.
- $\tfrac12 + \tfrac14 + \tfrac18 + \ldots = 1$ beantwoordt de wiskundige kant van Zeno's tweedeling: oneindig veel steeds kleinere stukken kunnen samen een eindige lengte hebben.
- $0{,}999\ldots = 1$ precies, en elk repeterend decimaal getal is een breuk.
- Archimedes vond met dezelfde reeks ($r = \tfrac14$) dat een parabolisch segment $\tfrac43$ van de ingeschreven driehoek beslaat.
- Termen die naar 0 gaan, zijn **niet** genoeg voor convergentie: de harmonische reeks $1 + \tfrac12 + \tfrac13 + \ldots$ divergeert (Oresme, ca. 1350).

## Toepassingen

- Bij **sparen met een vaste inleg** volg je elke inleg afzonderlijk; het saldo is een meetkundige som met de groeifactor als reden.
- Bij **afbetalen** is de restschuld de gegroeide lening min de gegroeide betalingen. Een **annuïteit** is het vaste bedrag waarbij de restschuld na $N$ perioden precies nul is.
- Lees altijd op welk moment een saldo wordt gevraagd (voor of na rente, voor of na de inleg) en rond pas aan het eind af.

## Historische lijn

| Periode | Wie of wat | Bijdrage |
|---|---|---|
| 5e eeuw v.Chr. | Zeno van Elea | Paradoxen over oneindige deling |
| 3e eeuw v.Chr. | Archimedes | Kwadratuur van de parabool met een meetkundige reeks |
| ca. 600–1150 | Virahāṅka, Gopāla, Hemacandra | Fibonacci-recursie bij het tellen van ritmes |
| 1202 / 1228 | Leonardo van Pisa (Fibonacci) | *Liber Abaci* met het konijnenprobleem |
| 1256 | Ibn Khallikan | Oudst bekende uitgewerkte versie van de schaakbordlegende |
| ca. 1350 | Nicole Oresme | Divergentie van de harmonische reeks |
| 1734–1735 | Leonhard Euler | Som van de omgekeerde kwadraten |
| 1856 | Sartorius von Waltershausen | Oudste bron van de schoolsom van Gauss |

## Wat je nu moet beheersen

Controleer of je het volgende kunt, zonder het voorbeeld ernaast:

1. Bij een rij in woorden, als tabel of als formule de termen berekenen en de index goed tellen.
2. Een recursieve formule doorrekenen en, voor rekenkundige en meetkundige rijen, omzetten in een directe formule.
3. Herkennen of een rij rekenkundig, meetkundig of geen van beide is, en $v$ of $r$ en $u(0)$ bepalen uit twee termen.
4. Met een tabel of logaritme bepalen wanneer een rij een grens voor het eerst passeert.
5. De som van een rekenkundige of meetkundige rij berekenen, inclusief het tellen van het aantal termen.
6. Bepalen of een oneindige meetkundige reeks convergeert en zo ja de som berekenen; repeterende decimalen omzetten in breuken.
7. Spaar- en aflossingssituaties modelleren met een recursie en met een meetkundige som.
8. Historische bronnen kritisch lezen: wat is legende (schaakbord), wat is later toegevoegd (de getallen bij Gauss), wat is onafhankelijk ontdekt (Fibonacci in India en Italië)?

In module 29 gaat het verder met de vraag hoe snel een functie verandert. Het idee van een **grenswaarde**, dat je hier bij oneindige reeksen tegenkwam, is daar de sleutel.

{{ quiz }}
