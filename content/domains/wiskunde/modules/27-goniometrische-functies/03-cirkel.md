# Coördinaten, tekens en symmetrie

Je kunt de waarden van sinus en cosinus voor honderden hoeken uit je hoofd leren, maar dat is niet nodig. Als je het beeld van de eenheidscirkel in je hoofd hebt, volgt vrijwel alles uit enkele waarden in het eerste kwadrant, een paar spiegelingen en een tekenregel. In deze les bouw je dat beeld op. Het resultaat is dat je voor elke "mooie" hoek, in radialen of in graden, de exacte waarde kunt afleiden.

## De hoeken op de assen

Op de eenheidscirkel is het punt bij $\theta$ gelijk aan $(\cos\theta;\sin\theta)$. Op de assen kun je de coördinaten direct aflezen:

| $\theta$ | 0 | $\pi/2$ | $\pi$ | $3\pi/2$ | $2\pi$ |
|---|---|---|---|---|---|
| $P(\theta)$ | $(1;0)$ | $(0;1)$ | $(-1;0)$ | $(0;-1)$ | $(1;0)$ |
| $\cos\theta$ | 1 | 0 | $-1$ | 0 | 1 |
| $\sin\theta$ | 0 | 1 | 0 | $-1$ | 0 |

Na $2\pi$ begint alles opnieuw. Dat zie je ook in de tabel: de kolom bij $2\pi$ is gelijk aan die bij 0.

## Exacte waarden in het eerste kwadrant

Voor de hoeken $\pi/6$, $\pi/4$ en $\pi/3$ (30°, 45°, 60°) bepaalde je de verhoudingen al in module 22, met een gelijkzijdige driehoek en een gelijkbenige rechthoekige driehoek. Hier gebruik je dezelfde uitkomsten als coördinaten:

| $\theta$ | 0 | $\pi/6$ | $\pi/4$ | $\pi/3$ | $\pi/2$ |
|---|---|---|---|---|---|
| $\sin\theta$ | $0$ | $\tfrac12$ | $\tfrac{\sqrt2}{2}$ | $\tfrac{\sqrt3}{2}$ | $1$ |
| $\cos\theta$ | $1$ | $\tfrac{\sqrt3}{2}$ | $\tfrac{\sqrt2}{2}$ | $\tfrac12$ | $0$ |

Er zit een mooi patroon in: de sinuswaarden zijn $\tfrac{\sqrt0}{2},\tfrac{\sqrt1}{2},\tfrac{\sqrt2}{2},\tfrac{\sqrt3}{2},\tfrac{\sqrt4}{2}$ en de cosinuswaarden lopen in omgekeerde volgorde. Dat is een goed geheugensteuntje, maar begrijp ook waarom het zo is: de sinus bij $\pi/6$ is een halve straal omdat je in een gelijkzijdige driehoek de hoogte door twee deelt.

## Tekens per kwadrant

De twee assen verdelen het vlak in vier kwadranten, genummerd tegen de klok in. Het teken van de coördinaten bepaalt het teken van cosinus en sinus.

| Kwadrant | Hoek $\theta$ | $\cos\theta$ ($x$) | $\sin\theta$ ($y$) |
|---|---|---|---|
| I | $0<\theta<\pi/2$ | positief | positief |
| II | $\pi/2<\theta<\pi$ | negatief | positief |
| III | $\pi<\theta<3\pi/2$ | negatief | negatief |
| IV | $3\pi/2<\theta<2\pi$ | positief | negatief |

Een geheugensteun is niet nodig als je de tekens uit het beeld afleest: rechts van de $y$-as is de cosinus positief, boven de $x$-as is de sinus positief. Het gedrag van de tangens volgt: $\tan\theta=\sin\theta/\cos\theta$ is positief als beide tekens gelijk zijn (kwadrant I en III) en negatief als ze verschillen (II en IV).

## Symmetrie en de referentiehoek

Elke hoek heeft een scherpe **referentiehoek**: de kleinste hoek tussen de straal naar $P(\theta)$ en de $x$-as. De coördinaten van $P(\theta)$ zijn dezelfde getallen als die van de referentiehoek, alleen mogelijk met een ander teken. Dat komt door de spiegelingen:

- Spiegelen in de $x$-as (hoek $-\theta$): $\cos(-\theta)=\cos\theta$ en $\sin(-\theta)=-\sin\theta$.
- Spiegelen in de $y$-as (hoek $\pi-\theta$): $\cos(\pi-\theta)=-\cos\theta$ en $\sin(\pi-\theta)=\sin\theta$.
- Spiegelen in de oorsprong, een halve draai (hoek $\pi+\theta$): $\cos(\pi+\theta)=-\cos\theta$ en $\sin(\pi+\theta)=-\sin\theta$.

Wie $\sin$ vanuit de grafiek bekijkt, herkent in de eerste regel dat de sinus een *oneven* functie is (puntsymmetrisch in de oorsprong) en de cosinus een *even* functie (lijnsymmetrisch in de $y$-as).

![Vier symmetrische punten met referentiehoek π/6](/images/diagrams/m27-symmetrie.svg "De vier punten met referentiehoek π/6. Eigen diagram.")

:::example Een hoek in het derde kwadrant
Bepaal $\cos\tfrac{7\pi}{6}$ en $\sin\tfrac{7\pi}{6}$.

Stap 1: de hoek $\tfrac{7\pi}{6}$ is $\pi+\tfrac{\pi}{6}$, dus een halve draai plus $\tfrac\pi6$. Hij ligt in kwadrant III, want $\pi<\tfrac{7\pi}{6}<\tfrac{3\pi}{2}$.
Stap 2: de referentiehoek is $\tfrac{\pi}{6}$, met $\cos\tfrac\pi6=\tfrac{\sqrt3}{2}$ en $\sin\tfrac\pi6=\tfrac12$.
Stap 3: in kwadrant III zijn beide coördinaten negatief. Dus $\cos\tfrac{7\pi}{6}=-\tfrac{\sqrt3}{2}$ en $\sin\tfrac{7\pi}{6}=-\tfrac12$.
:::

:::example Het tweede kwadrant
Bepaal $\cos\tfrac{5\pi}{6}$ en $\sin\tfrac{5\pi}{6}$.

De hoek $\tfrac{5\pi}{6}=\pi-\tfrac\pi6$ ligt in kwadrant II, met referentiehoek $\tfrac\pi6$. De sinus blijft positief: $\sin\tfrac{5\pi}{6}=\tfrac12$. De cosinus wordt negatief: $\cos\tfrac{5\pi}{6}=-\tfrac{\sqrt3}{2}$. Dit is de meest gemaakte tekenfout: omdat $\sin$ en $\cos$ van de referentiehoek positief zijn, vergeet je dat de $x$-coördinaat in dit kwadrant *links* van de $y$-as ligt.
:::

:::warning Het teken van cos in het tweede kwadrant
Bij $\theta=\tfrac{5\pi}{6}$ staat het punt links van de $y$-as. De cosinus is negatief, ook al zijn de scherpe hoeken uit module 22 allemaal positief. Controleer elk antwoord met de vraag: ligt het punt links of rechts, boven of onder?
:::

## Een identiteit uit Pythagoras

Het punt $P(\theta)=(\cos\theta;\sin\theta)$ ligt op de eenheidscirkel $x^2+y^2=1$. Daarom geldt voor élke hoek

$$\sin^2\theta+\cos^2\theta=1.$$

Met deze identiteit vind je de ene waarde uit de andere. Als je weet dat $\sin\theta=\tfrac35$ en dat $\theta$ in kwadrant II ligt, dan is $\cos^2\theta=1-\tfrac{9}{25}=\tfrac{16}{25}$ en dus, vanwege het tweede kwadrant, $\cos\theta=-\tfrac45$. Merk op dat je het teken niet uit de formule haalt maar uit het kwadrant: de formule geeft $\pm$.

Nog een verband dat je regelmatig tegenkomt, volgt uit de spiegeling in de lijn $y=x$: $\sin\left(\tfrac\pi2-\theta\right)=\cos\theta$. De sinus van een hoek is de cosinus van zijn complement, en daar komt de naam *co-sinus* vandaan.

{{ widget: unit-circle angle="150" }}

Sleep het punt in de widget naar 150°, ofwel $\tfrac{5\pi}{6}$. Lees de coördinaten af en vergelijk ze met de afleiding hierboven. Probeer daarna 210° en 330°: dezelfde referentiehoek, andere tekens.

{{ exercises: 27-008, 27-009, 27-010, 27-011, 27-012, 27-034, 27-035 }}
