# Samenvatting

In deze module heb je geleerd hoe een hoek en een lengte met elkaar samenhangen. Het bouwwerk rust op één observatie: twee rechthoekige driehoeken met dezelfde scherpe hoek zijn gelijkvormig, dus hebben ze dezelfde verhoudingen tussen hun zijden. Alles wat daarna kwam, is een manier om die verhoudingen te benoemen, te berekenen en te gebruiken.

## Wat je nu weet

:::summary De kernpunten
- De **schuine zijde S** ligt tegenover de rechte hoek en is de langste zijde. Bij een gekozen scherpe hoek θ is de **overstaande zijde O** de rechthoekszijde tegenover θ en de **aanliggende zijde A** de rechthoekszijde aan θ. Bij de andere scherpe hoek wisselen O en A van rol.
- $\sin\theta=\dfrac{O}{S}$, $\cos\theta=\dfrac{A}{S}$, $\tan\theta=\dfrac{O}{A}$ (SOS-CAS-TOA). Het zijn getallen zonder eenheid die alleen van de hoek afhangen.
- Voor een scherpe hoek geldt $0<\sin\theta<1$ en $0<\cos\theta<1$; de tangens kan elke positieve waarde aannemen.
- $\cos\theta=\sin(90^\circ-\theta)$, $\sin^2\theta+\cos^2\theta=1$ en $\tan\theta=\dfrac{\sin\theta}{\cos\theta}$.
- Exact: $\sin30^\circ=\tfrac12$, $\sin45^\circ=\tfrac{\sqrt2}{2}$, $\sin60^\circ=\tfrac{\sqrt3}{2}$; $\tan45^\circ=1$ en $\tan30^\circ\cdot\tan60^\circ=1$.
- Zijden: kies de verhouding die de bekende en de gezochte zijde bevat, en maak de onbekende vrij. Staat hij in de teller, dan vermenigvuldig je; staat hij in de noemer, dan deel je.
- Hoeken: $\theta=\arcsin(O/S)=\arccos(A/S)=\arctan(O/A)$, met de rekenmachine op **DEG**.
- Hellingspercentage = $100\tan\theta$; een helling van 100% is een hoek van 45°, niet van 100°.
:::

De bijbehorende formules voor snel naslaan:

:::formula Hoek en zijde
$$\sin\theta=\frac{O}{S},\quad\cos\theta=\frac{A}{S},\quad\tan\theta=\frac{O}{A},\qquad\theta=\arcsin\frac{O}{S}=\arccos\frac{A}{S}=\arctan\frac{O}{A}$$
:::

## Het stappenplan

Bij vrijwel elke opgave over een rechthoekige driehoek volg je dezelfde route.

1. Schets de situatie en markeer de rechte hoek en de gegeven of gezochte hoek θ.
2. Benoem de zijden als O, A en S ten opzichte van die hoek.
3. Kies sinus, cosinus of tangens op grond van de twee zijden die in de opgave voorkomen.
4. Schrijf de vergelijking op met de bekende waarden ingevuld.
5. Maak de onbekende vrij (vermenigvuldigen of delen) of pas de inverse functie toe.
6. Reken met ongeronde tussenwaarden op **DEG**, en rond alleen het eindantwoord af.
7. Controleer: is S de langste zijde? Kloppen de zijden met Pythagoras? Is de uitkomst plausibel in de oorspronkelijke situatie?

## Veelgemaakte fouten op een rij

Deze vijf fouten komen steeds terug. Ken ze, dan maak je ze minder.

- **De verkeerde zijde als overstaand of aanliggend.** De namen hangen af van de gekozen hoek, niet van de plek op het papier. Wijs altijd eerst de hoek aan.
- **De rekenmachine in radialen.** Test $\sin30$: het antwoord moet 0,5 zijn, niet $-0{,}988$.
- **Tangens met sinus verwisseld.** Staat de schuine zijde in de verhouding, dan is het sinus of cosinus; alleen de twee rechthoekszijden betekent tangens.
- **De inverse vergeten.** Zoek je een hoek, dan is de verhouding nog niet het antwoord. Pas arcsin, arccos of arctan toe.
- **Hellingspercentage als hoek.** 8% is $\arctan0{,}08\approx4{,}57^\circ$, niet 8°.

## Wat je moet beheersen

Voor de toets moet je het volgende kunnen:

- bij een gegeven scherpe hoek de zijden O, A en S aanwijzen en uitleggen waarom de verhoudingen niet van de grootte van de driehoek afhangen;
- sinus, cosinus en tangens bepalen uit de zijden van een rechthoekige driehoek, en de exacte waarden bij 30°, 45° en 60° afleiden uit het halve vierkant en de halve gelijkzijdige driehoek;
- een onbekende zijde berekenen uit één hoek en één zijde, en een onbekende hoek uit twee zijden;
- hellingspercentage en hellingshoek in elkaar omrekenen;
- een praktische situatie (toren, boom, trap, weg) vertalen naar een rechthoekige driehoek en de nauwkeurigheid van de uitkomst beoordelen;
- vertellen waar de woorden *sinus* en *tangens* vandaan komen, en waarom Hipparchus' koordentabel in feite een sinustabel is.

## Terugblik en vooruitblik

Je hebt gezien dat de goniometrie voortkomt uit een heel concreet probleem: hoe bepaal je een lengte die je niet direct kunt meten? De Babylonische indeling van de cirkel, Hipparchus' koordentabel, Aryabhata's halve koorde en Regiomontanus' leerboek zijn schakels van één keten, die in de Nederlandse polder werd gebruikt voor de triangulatie van Snellius. Wat jij nu doet met een rekenmachine, deden zij met tabellen die ze zelf rekenden.

In deze module bleef alles beperkt tot scherpe hoeken in rechthoekige driehoeken. In het hoofdstuk over goniometrische functies (module 27) wordt dat verruimd: met de **eenheidscirkel** zijn sinus en cosinus ook gedefinieerd voor stompe en negatieve hoeken, en leer je de hoek ook in radialen uitdrukken. Kijk alvast naar de vooruitblik:

{{ widget: unit-circle angle="45" }}

De coördinaten van het punt op de cirkel zijn $(\cos\theta,\sin\theta)$. Bij 45° lees je $\tfrac{\sqrt2}{2}\approx0{,}71$ af voor beide, precies zoals in het halve vierkant. Dezelfde formules, een bredere wereld.

Hoek, zijden en verhoudingen zijn nu aan elkaar gekoppeld. Maak de hoofdstuktoets om te zien hoe stevig je dat hebt gelegd.

{{ quiz }}
