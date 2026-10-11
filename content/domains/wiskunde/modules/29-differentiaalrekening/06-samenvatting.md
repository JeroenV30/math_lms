# Samenvatting

:::summary Differentiaalrekening in één oogopslag
- **Differentiequotiënt.** De gemiddelde verandering van $f$ op $[a; b]$ is $\dfrac{\Delta y}{\Delta x} = \dfrac{f(b) - f(a)}{b - a}$: de helling van de koorde door $(a; f(a))$ en $(b; f(b))$. Eenheid: eenheid van $y$ per eenheid van $x$.
- **Momentane verandering.** Het getal waar $\dfrac{f(a + h) - f(a)}{h}$ naartoe gaat als $h \to 0$. Rekenmethode: werk uit, deel door $h$, en laat pas daarna $h$ naar nul gaan.
- **Raaklijn.** De grensstand van de koorden door een vast punt $P$. Haar helling is de momentane verandering in $P$.
- **Afgeleide.** $f'(x) = \displaystyle\lim_{h \to 0} \frac{f(x + h) - f(x)}{h}$: de helling van de grafiek in elk punt. Andere notaties: $\dfrac{dy}{dx}$ (Leibniz), $\dot{y}$ (Newton).
- **Machtsregel.** $(x^n)' = n x^{n-1}$; de afgeleide van een constante is 0 en van $x$ is 1.
- **Constante factor en som.** $(c \cdot f)' = c \cdot f'$ en $(f + g)' = f' + g'$. Een veelterm differentieer je term voor term.
- **Producten en haakjes.** Eerst haakjes wegwerken. De afgeleide van een product is **niet** het product van de afgeleiden.
- **Raaklijn opstellen.** Raakpunt met $f$, helling met $f'$, daarna $b$ uit $y = ax + b$.
- **Stijgen en dalen.** $f' > 0$: $f$ stijgt. $f' < 0$: $f$ daalt.
- **Extremen.** Los $f'(x) = 0$ op en maak een tekenschema. Van $+$ naar $-$: maximum; van $-$ naar $+$: minimum; geen tekenwissel: geen extreem (zoals bij $x^3$ in 0).
- **Grootste waarde op een interval.** Vergelijk de extremen binnen het interval met de waarden op de randen.
- **Snelheid.** $v(t) = s'(t)$ en versnelling $a(t) = v'(t)$. In het hoogste punt van een worp is $v = 0$.
- **Optimaliseren.** Eén variabele kiezen, de rest daarin uitdrukken, formule en domein, afgeleide nul, controleren, antwoord in context.
:::

## Wat je nu moet beheersen

Controleer voor jezelf of je het volgende kunt:

1. De gemiddelde verandering van een functie op een interval berekenen en interpreteren, met de juiste eenheid.
2. Met een tabel van differentiequotiënten voor $h = 0{,}1$; $0{,}01$; $0{,}001$ de helling in een punt schatten, en uitleggen waarom je $h$ niet zomaar 0 mag maken.
3. Uitleggen wat een raaklijn is als grensstand van koorden.
4. Met de definitie de afgeleide van $x^2$ of $x^3$ afleiden.
5. Met de machtsregel, de somregel en de regel voor een constante factor de afgeleide van een veelterm opschrijven, ook als er eerst haakjes moeten worden weggewerkt.
6. De vergelijking van de raaklijn in een gegeven punt opstellen, en omgekeerd het punt vinden waar de grafiek een gegeven helling heeft.
7. Met een tekenschema van $f'$ bepalen waar een functie stijgt of daalt, en de coördinaten van maxima en minima berekenen.
8. Herkennen dat $f'(p) = 0$ niet altijd een extreem betekent.
9. Een optimaliseringsprobleem in een context omzetten in een functie van één variabele, met domein, en het optimum vinden.
10. Snelheid berekenen als afgeleide van een afstands- of hoogtefunctie, en de betekenis van het teken uitleggen.

## Historische lijn

| Tijd | Plaats | Wat |
|---|---|---|
| ca. 1636–1638 | Toulouse / Parijs | Fermats methode voor maxima en minima circuleert |
| 1637 | Leiden | Descartes publiceert *La Géométrie*, met een methode voor raaklijnen |
| 1665–1666 | Woolsthorpe | Newton ontwikkelt zijn methode van fluxies |
| 1669 | Cambridge / Londen | Newtons *De analysi* circuleert in handschrift |
| 1670 | Cambridge | Barrows *Lectiones geometricae*, met een raaklijnmethode |
| 1675 | Parijs | Leibniz noteert voor het eerst $dx$, $dy$ en $\int$ |
| 1684 | Leipzig | Leibniz publiceert *Nova methodus* in de *Acta Eruditorum* |
| 1687 | Londen | Newtons *Principia* |
| 1696 | Parijs | Eerste leerboek differentiaalrekening (De l'Hôpital) |
| 1712 | Londen | Rapport van de Royal Society: Newton eerste uitvinder |
| 1734 | Londen / Dublin | Berkeley, *The Analyst*: "ghosts of departed quantities" |
| 1821 | Parijs | Cauchy, *Cours d'analyse*: de limiet als fundament |
| ca. 1861 | Berlijn | Weierstrass: de strenge $\varepsilon$-$\delta$-definitie |

## Vooruitblik

In **module 30** draai je de vraag om. Niet: "hoe snel verandert deze grootheid?", maar: "ik weet hoe snel iets verandert, hoeveel is er in totaal bijgekomen?" Dat leidt tot de **integraalrekening** en tot de oppervlakte onder een grafiek. Je zult zien dat Barrow, Newton en Leibniz gelijk hadden: differentiëren en integreren zijn elkaars omgekeerde.

Ben je klaar? Maak dan de hoofdstuktoets. Je hebt 70% nodig om de module af te ronden en 85% voor "beheerst".

{{ quiz }}
