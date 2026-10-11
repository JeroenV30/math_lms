# Remwegen, regen en zonne-energie

Je hebt nu het hele gereedschap: Riemann-sommen voor meetgegevens, de integraal als totaal uit een tempo, primitieven en de hoofdstelling voor exacte berekeningen. In deze les pas je het toe op situaties waarin integralen echt gebruikt worden. Bij elke opgave is de belangrijkste stap niet het rekenen, maar het **vertalen**: welke functie is het tempo, over welk interval tel je op, en wat betekent de uitkomst?

## 1. Van tempo naar totaal, exact

In les 2 rekende je accumulatie uit met driehoeken en trapezia. Nu de snelheid of het debiet geen rechte lijn meer hoeft te zijn, gebruik je de hoofdstelling.

:::example Uitgewerkt voorbeeld: een optrekkende scooter
Een scooter trekt op vanuit stilstand. De snelheid is $v(t) = 6t - 0{,}6t^2$ meter per seconde, voor $0 \leq t \leq 5$. Hoeveel meter legt de scooter in die 5 seconden af?

*Stap 1: vertalen.* Afgelegde weg $= \displaystyle\int_0^5 v(t)\,dt$.

*Stap 2: primitieve.* $S(t) = 3t^2 - 0{,}2t^3$. (Controle: $S'(t) = 6t - 0{,}6t^2$ ✓.)

*Stap 3: invullen.* $S(5) = 75 - 25 = 50$ en $S(0) = 0$.

*Antwoord.* De scooter legt $50$ meter af.

*Controle met gezond verstand.* De eindsnelheid is $v(5) = 30 - 15 = 15$ m/s. Was de scooter de hele tijd 15 m/s gegaan, dan was dat $75$ meter. Hij begon vanuit stilstand, dus minder: $50$ is aannemelijk.
:::

:::example Uitgewerkt voorbeeld: kosten uit marginale kosten
Een fabrikant weet dat de **marginale kosten** (de extra kosten per extra eenheid) bij een productie van $q$ eenheden ongeveer gelijk zijn aan

$$
MK(q) = 0{,}06q^2 - 1{,}2q + 20 \quad \text{euro per eenheid.}
$$

Hoeveel extra kosten brengt het met zich mee om de productie te verhogen van 10 naar 20 eenheden?

*Stap 1: vertalen.* De marginale kosten zijn de afgeleide van de totale kosten. De toename van de kosten is dus $\displaystyle\int_{10}^{20} MK(q)\,dq$.

*Stap 2: primitieve.* $K(q) = 0{,}02q^3 - 0{,}6q^2 + 20q$.

*Stap 3: invullen.*

- $K(20) = 0{,}02 \cdot 8000 - 0{,}6 \cdot 400 + 400 = 160 - 240 + 400 = 320$.
- $K(10) = 0{,}02 \cdot 1000 - 0{,}6 \cdot 100 + 200 = 20 - 60 + 200 = 160$.

*Antwoord.* De extra kosten zijn $320 - 160 = 160$, dus € 160.

Merk op: de vaste kosten (de integratieconstante van de totale kostenfunctie) heb je niet nodig. Die vallen weg in het verschil.
:::

{{ exercises: 30-032, 30-033 }}

## 2. Het gemiddelde van een functie

Wat is de gemiddelde temperatuur op een dag? Je zou elk uur kunnen meten en het gemiddelde van 24 getallen nemen. Maar de temperatuur verandert continu. Het continue tegenstuk van "tel op en deel door het aantal" is: **integreer en deel door de lengte van het interval**.

:::definition Gemiddelde waarde van een functie
De **gemiddelde waarde** van $f$ op $[a, b]$ is

$$
\bar{f} = \frac{1}{b - a} \int_a^b f(x)\,dx.
$$
:::

Meetkundig: $\bar f$ is de hoogte van de **rechthoek** op $[a, b]$ die dezelfde oppervlakte heeft als het gebied onder de grafiek. Wat boven die hoogte uitsteekt, past precies in wat eronder ontbreekt.

:::example Uitgewerkt voorbeeld: gemiddelde snelheid
Neem de scooter uit het eerste voorbeeld. De gemiddelde snelheid over de eerste 5 seconden is

$$
\bar v = \frac{1}{5 - 0} \int_0^5 v(t)\,dt = \frac{50}{5} = 10 \text{ m/s}.
$$

Dat is precies de definitie die je al kende: totale afstand gedeeld door totale tijd. De integraal maakt die definitie geschikt voor een snelheid die continu verandert.
:::

:::warning Gemiddelde van de functie is niet het gemiddelde van de eindwaarden
Het gemiddelde van $v(0) = 0$ en $v(5) = 15$ is $7{,}5$, niet $10$. Alleen bij een rechte lijn zijn die twee gelijk. Bij een gebogen grafiek moet je echt integreren.
:::

{{ exercises: 30-034, 30-035 }}

## 3. Uitdagingen

De laatste drie opgaven zijn uitdagingen. Ze combineren alles uit deze module, en ze sluiten de cirkel naar het begin.

:::challenge Archimedes narekenen
In de introductie zag je het parabolische segment tussen $y = x^2$ en $y = 2x + 3$. Archimedes bewees dat het $\tfrac43$ keer zo groot is als de ingeschreven driehoek. Met de hoofdstelling kun je dat in een paar regels controleren. In de eerste opgave hieronder doe je dat.

Twee aanwijzingen. De snijpunten van parabool en lijn vind je met een kwadratische vergelijking (module 21). Het derde hoekpunt van Archimedes' driehoek ligt waar de raaklijn aan de parabool evenwijdig loopt aan de lijn: daar is de afgeleide van $x^2$ gelijk aan de helling $2$.
:::

{{ exercises: 30-036, 30-037, 30-038 }}

:::tip Wat je met deze opgaven oefent
- **Vertalen** van een context naar een integraal, met de juiste grenzen en eenheid.
- **Snijpunten** zoeken als grenzen.
- **Terugrekenen**: als de oppervlakte gegeven is, een parameter bepalen.
- **Limieten van Riemann-sommen** herkennen, zoals Archimedes en Cavalieri dat deden voordat er primitieven waren.
:::
