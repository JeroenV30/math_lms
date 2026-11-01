## Van grondslag naar voordeel

De som van de loonkosten en de kosten en uitgaven heet de **S&O-grondslag**. Het voordeel is een percentage van die grondslag, maar niet één percentage: de WBSO rekent met twee schijven. Over het eerste deel van de grondslag geldt een hoog percentage, over het deel daarboven een lager percentage. In 2026 geldt (stand 2026, RVO):

- 36% over de grondslag tot en met € 391.020 (eerste schijf);
- 16% over het deel van de grondslag boven € 391.020 (tweede schijf);
- 50% in plaats van 36% over de eerste schijf voor starters.

De schijfgrens is voor 2026 eenmalig verhoogd tot € 391.020, van € 380.000 in 2025 (RVO vermeldt een eenmalige indexering via het Belastingplan 2026). Voor latere jaren kan de grens anders zijn; controleer dat per jaar.

Het mechanisme erachter is dat de overheid vooral kleine en middelgrote bedrijven wil prikkelen: voor hen levert de eerste euro grondslag veel op, terwijl een groot bedrijf dat veel onderzoek doet, over het deel boven de grens minder krijgt. Dit past bij de gedachte dat grotere bedrijven een deel van hun onderzoek ook zonder steun zouden doen (additionaliteit; zie module 1).

$$
\begin{aligned}
\text{voordeel} &= 36\% \times \min(G,\ 391.020) \\
&\quad + 16\% \times \max(G - 391.020,\ 0)
\end{aligned}
$$

Hierin is $G$ de S&O-grondslag in euro's. Voor een starter vervang je 36% door 50%.

![Schijvenberekening van een grondslag van € 462.000](/images/wbso/m03-schijven.svg "Eigen schema: een grondslag van € 462.000 wordt in twee schijven gesplitst (stand 2026)")

## Een volledig voorbeeld

We rekenen het bedrijf uit de vorige les door, en daarna een groter bedrijf dat de schijfgrens overschrijdt.

:::example Brandt Sensortechniek, forfait en werkelijke kosten
Brandt Sensortechniek B.V. (fictief) heeft 2.700 S&O-uren en een S&O-uurloon van € 52. Het bedrijf is geen starter.

Stap 1, loonkosten: $2.700 \times 52 = 140.400$.

Stap 2a, met forfait: kosten en uitgaven $= 1.800 \times 10 + 900 \times 4 = 21.600$. De grondslag is $140.400 + 21.600 = 162.000$. Die ligt onder € 391.020, dus alles valt in de eerste schijf: $36\% \times 162.000 = 58.320$.

Stap 2b, met werkelijke kosten van € 38.000: de grondslag is $140.400 + 38.000 = 178.400$, en $36\% \times 178.400 = 64.224$.

Het voordeel is dus € 58.320 met het forfait en € 64.224 met werkelijke kosten: € 5.904 meer. Was Brandt een starter geweest, dan was het voordeel met het forfait $50\% \times 162.000 = 81.000$ geweest.
:::

:::example Een groot bedrijf boven de schijfgrens
Van Dijk Aandrijftechniek B.V. (fictief) heeft 6.000 S&O-uren, een S&O-uurloon van € 52 en werkelijke kosten en uitgaven van € 150.000.

Loonkosten: $6.000 \times 52 = 312.000$. Grondslag: $312.000 + 150.000 = 462.000$.

Eerste schijf: $36\% \times 391.020 = 140.767{,}20$.

Tweede schijf: de grondslag boven de grens is $462.000 - 391.020 = 70.980$, en $16\% \times 70.980 = 11.356{,}80$.

Voordeel: $140.767{,}20 + 11.356{,}80 = 152.124$.

Het gemiddelde percentage is $152.124 / 462.000 \approx 32{,}9\%$. Het ligt tussen 16% en 36% en daalt naarmate de grondslag groeit. Met het forfait was de grondslag $312.000 + (1.800 \times 10 + 4.200 \times 4) = 346.800$ geweest, en het voordeel $36\% \times 346.800 = 124.848$.
:::

Dat de marginale waarde van de tweede schijf lager is, geeft een afweging die je bij grote projecten tegenkomt. Een extra project van € 100.000 aan grondslag levert een bedrijf dat al boven de grens zit, nog maar € 16.000 op, tegen € 36.000 in de eerste schijf.

{{ exercises: 03-005, 03-006, 03-007 }}

## Starters en zelfstandigen

Een **starter** is een ondernemer die nog niet lang S&O-werk met WBSO doet en voldoet aan de voorwaarden van de regeling. Het startersvoordeel verhoogt het percentage van de eerste schijf van 36% naar 50%. Volgens RVO kan een bedrijf deze status maximaal drie jaar gebruiken binnen de eerste vijf jaar als ondernemer voor de inkomstenbelasting (stand 2026); de precieze voorwaarden staan in de Handleiding WBSO. Alleen de eerste schijf wordt verhoogd; de tweede blijft 16%.

Zelfstandigen zonder personeel krijgen geen afdrachtvermindering maar een **S&O-aftrek**: een bedrag dat van de winst wordt afgetrokken in de inkomstenbelasting. In 2026 is dat € 15.979, en voor startende zelfstandigen komt daar een aanvullende aftrek van € 7.996 bij (stand 2026, RVO). Een voorwaarde is in de regel dat de ondernemer minstens 500 S&O-uren per jaar maakt. De berekening verschilt dus van die voor werkgevers: een vast bedrag in plaats van een percentage van loonkosten.

## Forfait of werkelijk: een afweging

Of een bedrijf het forfait neemt, hangt af van de verhouding tussen werkelijke kosten en forfait, en van de administratieve last. Een eenvoudige vuistregel volgt uit de formule: het forfait is € 10 per uur tot 1.800 uur. Wie per S&O-uur gemiddeld meer dan € 10 aan kosten en uitgaven heeft, haalt met de werkelijke kosten een hogere grondslag. Bij softwarebedrijven, waar de kosten vooral uit loon bestaan, is het forfait vaak voldoende; bij maakbedrijven met dure prototypes en testopstellingen zijn werkelijke kosten vaker de moeite waard.

{{ exercises: 03-009 }}
