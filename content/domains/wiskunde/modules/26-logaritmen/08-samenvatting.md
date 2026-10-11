# Samenvatting

Je begon deze module met een vraag die optellen en vermenigvuldigen niet kunnen beantwoorden: tot welke macht moet je 2 verheffen om 10 te krijgen? Het antwoord, $\log_2 10 \approx 3{,}32$, is een getal dat bestaat en uniek is, maar zich niet laat opschrijven als geheel getal of simpele breuk. Je hebt er een naam voor, een notatie, rekenregels en een grafiek. En je hebt gezien dat het idee niet nieuw is, maar eeuwenlang het belangrijkste rekeninstrument van sterrenkundigen en ingenieurs is geweest.

## Wat je nu moet weten

**Definitie.** Voor $g > 0$, $g \neq 1$ en $a > 0$ geldt

$$
\log_g a = x \iff g^x = a.
$$

Een logaritme is een **exponent**. Het argument moet positief zijn, het grondtal positief en niet 1; de uitkomst mag elk reëel getal zijn. Handige waarden: $\log_g 1 = 0$, $\log_g g = 1$ en $\log_g\left(g^n\right) = n$. Macht en logaritme heffen elkaar op: $g^{\log_g a} = a$.

**Twee speciale grondtallen.** In deze cursus is $\log x = \log_{10} x$ en $\ln x = \log_e x$ met $e \approx 2{,}71828$. Een rekenmachine heeft alleen deze twee toetsen.

**Rekenregels** (voor positieve $u$ en $v$):

| Regel | Formule |
|---|---|
| Product | $\log_g(uv) = \log_g u + \log_g v$ |
| Quotiënt | $\log_g\left(\dfrac{u}{v}\right) = \log_g u - \log_g v$ |
| Macht | $\log_g\left(u^r\right) = r \cdot \log_g u$ |
| Grondtal veranderen | $\log_g a = \dfrac{\ln a}{\ln g}$ |

Alle regels volgen uit de machtsregels met de definitie $u = g^p$ en $v = g^q$. Je kunt ze dus telkens opnieuw afleiden.

**Grafiek.** De grafiek van $y = \log_g x$ is het spiegelbeeld van $y = g^x$ in de lijn $y = x$. Voor $g > 1$ is de functie stijgend, met domein $x > 0$, nulpunt $(1; 0)$, verticale asymptoot $x = 0$ en bereik $\mathbb{R}$. Voor $0 < g < 1$ is de functie dalend. Een verschuiving in het argument verschuift het domein en de asymptoot mee: $\ln(x - 2)$ heeft domein $x > 2$ en nulpunt $x = 3$.

**Exponentiële vergelijkingen.** Bij $N_0 \cdot g^t = M$ geldt

$$
t = \frac{\ln\left(M / N_0\right)}{\ln g}.
$$

De verdubbelingstijd is $\dfrac{\ln 2}{\ln g}$ en de halveringstijd is $\dfrac{\ln 0{,}5}{\ln g}$; ze hangen niet af van de beginwaarde.

**Logaritmische schalen.** Een vaste stap op de schaal is een vaste factor in de grootheid: 10 dB is een factor 10 in intensiteit, één pH-eenheid is een factor 10 in H⁺-concentratie, één magnitude-eenheid is een factor 10 in amplitude en ongeveer 32 in energie, en vijf sterrenmagnitudes zijn een factor 100 in helderheid.

## Veelgemaakte fouten

Het zijn bijna altijd dezelfde fouten. Loop er voor de toets doorheen.

- **Een som in het argument splitsen.** $\log(a + b)$ is niet $\log a + \log b$. Een som van logaritmen hoort bij een product van argumenten.
- **Een quotiënt van logaritmen aanzien voor een logaritme van een verschil.** $\dfrac{\log a}{\log b}$ is niet $\log(a - b)$, en ook niet $\log\left(\tfrac{a}{b}\right)$; het is $\log_b a$.
- **De logaritme verwarren met de macht.** Bij $\log_2 8 = 3$ is 3 de exponent. Controleer door terug te vertalen: $2^3 = 8$.
- **$\ln$ en $\log$ verwisselen.** De getallen lijken op elkaar, de waarden niet: $\ln 100 \approx 4{,}61$ en $\log 100 = 2$.
- **Een negatief of nul argument gebruiken.** $\log_2(-4)$ en $\log_2 0$ bestaan niet. Controleer bij vergelijkingen elke kandidaat tegen het oorspronkelijke domein.
- **Te vroeg of verkeerd afronden.** Rond tussenresultaten niet af; en bij een drempel van het type "minstens" is het antwoord het eerstvolgende toegestane meetmoment, niet de naar beneden afgeronde continue waarde.

## Wat je nu moet beheersen

Je kunt een logaritme als exponent lezen en vertalen naar een macht, met de juiste voorwaarden. Je berekent exacte logaritmen via bekende machten, ook met breuken en negatieve uitkomsten. Je gebruikt de drie rekenregels in beide richtingen en kent hun domeinvoorwaarden. Je rekent om naar een andere basis met $\ln$ of $\log$. Je beschrijft de grafiek van een logaritmische functie en haar verschuivingen. Je lost exponentiële en logaritmische vergelijkingen op, controleert het domein en interpreteert een drempel bij discrete meetmomenten. Tot slot kun je een uitspraak over een logaritmische schaal omzetten in een factor.

:::summary Het verhaal in één alinea
Napier publiceerde in 1614 tabellen die vermenigvuldigen tot optellen herleidden; Bürgi had onafhankelijk iets vergelijkbaars gemaakt; Briggs en Napier kwamen in 1615 samen tot logaritmen met $\log 1 = 0$ en $\log 10 = 1$. De rekenliniaal bracht de gedachte in een instrument; Euler zag in de 18e eeuw de logaritme als inverse van de exponentiële functie. In deze module heb je dat zelf herhaald: je vertrok bij de vraag "tot welke macht?" en eindigde bij vergelijkingen met groeifactoren en bij schalen die ons helpen enorme verschillen te overzien.
:::

## Hoe nu verder

De volgende stap is de afgeleide van deze functies, waarin $e$ een vaste plaats krijgt: de groeisnelheid van $e^x$ is gelijk aan de functiewaarde zelf, en de afgeleide van $\ln x$ is $\tfrac{1}{x}$. Dat is ook de reden dat de natuurlijke logaritme in de wetenschap de standaard is. Maak eerst de hoofdstuktoets. Je hebt 70% nodig om de module af te ronden en 85% voor "beheerst".

{{ quiz }}
