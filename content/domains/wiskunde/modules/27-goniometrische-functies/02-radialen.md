# Radialen en booglengte

Graden zijn een afspraak. Dat een volle cirkel 360 graden heeft, danken we aan de Babylonische traditie van het zestigtallig rekenen, niet aan iets in de cirkel zelf. Je kunt een cirkel evengoed in 400 gon verdelen, zoals landmeters doen, of in 1000 delen. Zolang je alleen hoeken wilt vergelijken of een zijde berekent, maakt dat niet uit. Maar zodra je sinus en cosinus als *functies van een getal* wilt gebruiken, wordt de graad een blok aan het been. In deze les maak je kennis met de eenheid die uit de cirkel zelf voortkomt: de radiaal.

## De hoek als lengte

Neem een cirkel met straal $r$. Een middelpuntshoek $\theta$ snijdt een boog met lengte $s$ uit de cirkel. Hoe groter de hoek, hoe langer de boog, en de twee zijn evenredig: een dubbele hoek geeft een dubbele boog. Ook is de boog evenredig met de straal, want een grotere cirkel is een vergroting van een kleinere. Dat geeft een verhouding die niet van de grootte van de cirkel afhangt:

$$\theta=\frac{s}{r}.$$

Dat is de definitie van een hoek in **radialen**. Eén radiaal is de middelpuntshoek waarvan de boog precies even lang is als de straal. Een hoek in radialen is dus een verhouding van twee lengtes, en daarom eigenlijk een getal zonder eenheid. We schrijven er soms "rad" achter, maar bij functies laten we het meestal weg.

![Een radiaal: de boog is net zo lang als de straal](/images/diagrams/m27-radiaal.svg "Eén radiaal: boog s = r. Eigen diagram.")

Op de eenheidscirkel (straal 1) is de formule extra eenvoudig: de booglengte is *gelijk aan* de hoek in radialen. Draai je het punt $P$ over een hoek $\theta$ rond, dan legt het precies een weg van lengte $\theta$ af over de cirkel. Daarom is de radiaal de natuurlijke eenheid voor een draaiend punt: de hoek en de afgelegde weg zijn hetzelfde getal.

## Omrekenen

De omtrek van een cirkel is $2\pi r$. Een volle omwenteling heeft dus booglengte $2\pi r$ en daarmee hoek $2\pi r/r=2\pi$ radialen. Zo komen we aan de basisafspraak

$$2\pi\ \text{rad}=360^\circ,\qquad\text{dus}\qquad \pi\ \text{rad}=180^\circ.$$

Eén radiaal is dan $\tfrac{180^\circ}{\pi}\approx57{,}3^\circ$. Het is geen "mooi" aantal graden, en dat hoeft ook niet: de graad was de arbitraire eenheid, de radiaal is de natuurlijke.

:::formula Omrekenen tussen graden en radialen
$$\theta_{\mathrm{rad}}=\theta_{\mathrm{graden}}\cdot\frac{\pi}{180},\qquad \theta_{\mathrm{graden}}=\theta_{\mathrm{rad}}\cdot\frac{180}{\pi}.$$
Handig om te onthouden: $\pi$ radialen is een halve cirkel.
:::

Je hoeft de formule niet blind toe te passen. Zie $\pi$ als "180°" en schrijf de hoek als breuk van een halve cirkel. Dan is $60^\circ$ een derde van een halve cirkel, dus $\pi/3$. En $45^\circ$ is een vierde, dus $\pi/4$; $30^\circ$ is een zesde, dus $\pi/6$; $90^\circ$ de helft, dus $\pi/2$.

| Graden | 0° | 30° | 45° | 60° | 90° | 120° | 135° | 150° | 180° | 270° | 360° |
|---|---|---|---|---|---|---|---|---|---|---|---|
| Radialen | 0 | $\pi/6$ | $\pi/4$ | $\pi/3$ | $\pi/2$ | $2\pi/3$ | $3\pi/4$ | $5\pi/6$ | $\pi$ | $3\pi/2$ | $2\pi$ |

:::example Van graden naar radialen en terug
Zet 135° om in radialen: $135\cdot\dfrac{\pi}{180}=\dfrac{135\pi}{180}=\dfrac{3\pi}{4}$. Je deelt teller en noemer door 45. Controle met de halve cirkel: $135^\circ=3\cdot45^\circ=3\cdot\tfrac{\pi}{4}$.

Zet nu $\tfrac{5\pi}{3}$ rad om in graden: $\tfrac{5\pi}{3}\cdot\tfrac{180}{\pi}=5\cdot60=300^\circ$. De $\pi$ valt weg, en dat gebeurt altijd als de hoek een veelvoud van $\pi$ is.
:::

Een hoek die niet als veelvoud van $\pi$ is uitgedrukt, zoals 2 rad, reken je met je rekenmachine om. Eén radiaal is ruim 57°, dus 2 rad is ongeveer $114{,}6^\circ$. Dat is een mooie schatting om achter de hand te houden: een hoek van 1 rad is iets korter dan een gelijkzijdige driehoekshoek (60°).

## Booglengte en sectoroppervlakte

Uit $\theta=s/r$ volgt direct

$$s=r\theta.$$

De formule werkt alleen als $\theta$ in radialen staat. Staat de hoek in graden, dan reken je eerst om, of je gebruikt de gelijkwaardige vorm $s=\tfrac{\theta^\circ}{360^\circ}\cdot2\pi r$. Een sector, een "taartpunt" met hoek $\theta$, heeft oppervlakte $\tfrac12r^2\theta$, want het is een deel $\theta/(2\pi)$ van de hele cirkel met oppervlakte $\pi r^2$.

:::example Booglengte
Een draaiplateau heeft straal 3 m. Hoe lang is de boog bij een hoek $\pi/2$? Er geldt $s=r\theta=3\cdot\tfrac{\pi}{2}=\tfrac{3\pi}{2}\approx4{,}71$ m. Zou je ten onrechte $\theta=90$ invullen, dan krijg je $s=270$ m: veel te groot voor een plateau van 3 m. Zo'n absurde uitkomst is een goede waarschuwing dat je vergeten bent om te rekenen.
:::

:::warning Het gevaar van de rekenmachine
Een rekenmachine heeft een stand DEG (graden) en een stand RAD (radialen). Dezelfde toetsaanslag $\sin(2)$ geeft in RAD ongeveer $0{,}909$, in DEG ongeveer $0{,}035$. De machine weet niet wat jij bedoelt. Controleer vóór elke berekening de stand, en gebruik radialen zodra de variabele een getal is zoals bij $\sin x$ met $x=2$. Als je bij een bekende hoek een uitkomst krijgt die niet klopt, kijk dan eerst naar de stand.
:::

## Waarom radialen?

Met graden kleeft er altijd een factor $\pi/180$ aan elke formule die sinus en cosinus bevat. Later in de wiskunde, bijvoorbeeld bij de afgeleide van $\sin x$, blijkt dat de factor alleen verdwijnt als $x$ in radialen staat: bij radialen is $(\sin x)'=\cos x$ zonder rommelige constante. Dat is een van de redenen dat vrijwel alle wiskunde boven de middelbare school radialen gebruikt. In deze module gebruiken formules en grafieken radialen, tenzij er uitdrukkelijk graden staan.

{{ widget: unit-circle angle="60" }}

Beweeg de hoek in de widget: je ziet de graden en de bijbehorende radialen naast elkaar. Let erop dat de radialen bij 180° precies $\pi\approx3{,}14$ worden.

{{ exercises: 27-004, 27-005, 27-006, 27-007, 27-032, 27-033 }}
