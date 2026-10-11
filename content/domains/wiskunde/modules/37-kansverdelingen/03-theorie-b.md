# De normale verdeling en z-scores

Bij de binomiale verdeling kon je elke kans afzonderlijk uitrekenen: $P(X=3)$, $P(X=4)$ en zo verder. Metingen zoals lichaamslengte, vulgewicht of een reactietijd werken anders. Ze kunnen elke waarde in een interval aannemen, en de kans op één exacte waarde is nul: niemand is *precies* 180,000000 cm lang. Bij zulke **continue** variabelen spreek je over de kans op een interval, en die kans is een **oppervlakte** onder een kromme, de dichtheidsfunctie.

De belangrijkste kromme van dit soort is de normale verdeling. Ze is continu, symmetrisch en klokvormig. Het midden is $\mu$ en de standaardafwijking is $\sigma>0$. We schrijven $X\sim N(\mu,\sigma^2)$, waarbij de tweede parameter de **variantie** is. Let daar op: sommige software en sommige boeken schrijven $N(\mu,\sigma)$ met de standaardafwijking. Controleer altijd welke conventie gebruikt wordt voordat je een getal invult.

:::formula De normale dichtheid
$$
f(x)=\frac{1}{\sigma\sqrt{2\pi}}\exp\!\left(-\frac{(x-\mu)^2}{2\sigma^2}\right)
$$
:::

Je hoeft deze formule niet uit het hoofd te kennen en je hoeft haar zeker niet zelf te integreren: er bestaat geen elementaire primitieve, en daarom werk je met tabellen of software. Wat je wel moet begrijpen, is wat de formule vertelt. De factor $(x-\mu)^2$ maakt de kromme symmetrisch rond $\mu$, en de top ligt precies bij $x=\mu$. De factor met $\sigma$ in de noemer van de exponent bepaalt hoe snel de kromme daalt: een grote $\sigma$ geeft een brede, lage klok. De totale oppervlakte onder de kromme is altijd 1, want de kans dat $X$ *ergens* uitkomt is 1.

Verken dat zelf met de grafiek hieronder. Verander $m$ (het midden) en $s$ (de standaardafwijking) en let op wat er met de hoogte en de breedte gebeurt, terwijl het oppervlak onder de kromme gelijk blijft.

{{ widget: function-plot fn="exp(-(x-m)^2/(2*s^2))/(s*sqrt(2*pi))" m=0 mmin=-3 mmax=3 mstep=0.5 s=1 smin=0.5 smax=3 sstep=0.25 xmin=-8 xmax=8 ymin=0 ymax=0.85 title="Normale dichtheid met midden m en standaardafwijking s" }}

Een kleine $\sigma$ levert een hoge, smalle top; een grote $\sigma$ een lage, brede klok. Toch is het oppervlak steeds 1: wat de klok in hoogte verliest, wint hij in breedte.

## Kansen als oppervlakte

Met de volgende widget kun je een gebied kiezen en zien welk deel van de totale oppervlakte erin valt. Verschuif het gemiddelde terwijl je de grenzen gelijk houdt: de kans verandert, ook al blijft de vorm hetzelfde. Verander daarna de standaardafwijking. De hoogte van de klok is geen kans; alleen het gekleurde oppervlak is dat.

{{ widget: normal-distribution mu=100 sigma=15 lower=85 upper=115 xmin=40 xmax=160 }}

### De 68–95–99,7-regel

Ongeacht de waarden van $\mu$ en $\sigma$ ligt bij een normale verdeling een vast deel van de kans binnen een vast aantal standaardafwijkingen van het midden. Dat is een van de handigste hulpmiddelen voor snel hoofdrekenen:

| Gebied | Kans (afgerond) |
|---|---|
| $\mu\pm1\sigma$ | 68% (nauwkeuriger 68,27%) |
| $\mu\pm2\sigma$ | 95% (nauwkeuriger 95,45%) |
| $\mu\pm3\sigma$ | 99,7% (nauwkeuriger 99,73%) |

Voor een nauwkeuriger centraal 95%-gebied gebruik je $\mu\pm1{,}96\sigma$. Die 1,96 komt zo meteen terug.

:::example Vulgewicht van pakken meel
Een machine vult pakken meel met gemiddeld 500 g en standaardafwijking 20 g. Als het gewicht bij benadering normaal verdeeld is, dan ligt ongeveer 95% van de pakken tussen $500-40=460$ g en $500+40=540$ g. Ongeveer 2,5% weegt minder dan 460 g en ongeveer 2,5% meer dan 540 g. Bij 99,7% hoort het gebied van 440 tot 560 g: een pak van 420 g zou je al bijna als een afwijking van de machine beschouwen.
:::

## Alle normale verdelingen naar dezelfde schaal

Er bestaan oneindig veel normale verdelingen, één voor elke combinatie van $\mu$ en $\sigma$. Je kunt onmogelijk voor elk paar een tabel maken. De oplossing is **standaardiseren**: je rekent de waarde om naar het aantal standaardafwijkingen dat ze van het midden ligt.

$$
Z=\frac{X-\mu}{\sigma}
$$

De variabele $Z$ is dan standaardnormaal: gemiddelde 0 en standaardafwijking 1, geschreven $Z\sim N(0,1)$. Een enkele tabel is daardoor genoeg voor alle normale verdelingen. De waarde $z=(x-\mu)/\sigma$ heet de **z-score** van $x$: ze vertelt hoeveel standaardafwijkingen $x$ van het midden afligt, links (negatief) of rechts (positief). Terugrekenen kan ook: $x=\mu+z\sigma$.

:::example Een meting standaardiseren
Bij $\mu=100$ en $\sigma=15$ heeft de waarde 130 de z-score $(130-100)/15=2$, en de waarde 85 de z-score $(85-100)/15=-1$. Omgekeerd hoort bij $z=1{,}5$ de waarde $100+1{,}5\cdot15=122{,}5$.
:::

:::warning Deel door σ, niet door σ²
Een veelgemaakte fout is delen door de variantie in plaats van door de standaardafwijking. Staat er $N(100;\,225)$, dan is de variantie 225 en is $\sigma=15$. Voor de z-score deel je door 15, niet door 225. Controleer dus altijd of in de opgave de variantie of de standaardafwijking staat.
:::

{{ exercises: 37-009, 37-010, 37-011, 37-032 }}

## Oppervlakte uit een tabel lezen

De functie $\Phi(z)=P(Z\le z)$ is de **linkerstaartkans** van de standaardnormale verdeling: de oppervlakte links van $z$. Een tabel geeft zulke waarden. Hier zie je een uittreksel, afgerond op vier decimalen:

| $z$ | 0 | 0,5 | 1 | 1,28 | 1,5 | 1,645 | 1,96 | 2 | 2,5 | 3 |
|---|---|---|---|---|---|---|---|---|---|---|
| $\Phi(z)$ | 0,5000 | 0,6915 | 0,8413 | 0,8997 | 0,9332 | 0,9500 | 0,9750 | 0,9772 | 0,9938 | 0,9987 |

De tabel bevat alleen positieve $z$. Voor negatieve $z$ gebruik je de symmetrie van de klok: $\Phi(-z)=1-\Phi(z)$. Bijvoorbeeld $\Phi(-1)=1-0{,}8413=0{,}1587$ en $\Phi(-2)=0{,}0228$.

Met die ene functie bereken je alle drie de soorten kansen:

- **Links:** $P(Z\le z)=\Phi(z)$.
- **Rechts:** $P(Z>z)=1-\Phi(z)$.
- **Tussen:** $P(a\le Z\le b)=\Phi(b)-\Phi(a)$.

De tabel geeft dus altijd de linkerkans. Vergeet je bij een vraag naar "meer dan" het complement te nemen, dan krijg je het tegenovergestelde van wat je zoekt. Het helpt om altijd eerst een schets van de klok te maken en het gevraagde gebied te arceren; zo zie je meteen of het antwoord kleiner of groter dan 0,5 moet zijn.

Bij een continue variabele maakt het geen verschil of je $<$ of $\le$ schrijft: de kans op één exacte waarde is nul. Dat verschilt van de discrete binomiale verdeling, waar $P(X<5)$ en $P(X\le5)$ wel verschillen.

:::example Drie soorten kansen bij een IQ-score
Neem $X\sim N(100;\,15^2)$, zoals bij een IQ-test.

- $P(X\le115)$: $z=1$, dus $\Phi(1)=0{,}8413$.
- $P(X>130)$: $z=2$, dus $1-\Phi(2)=1-0{,}9772=0{,}0228$. Ongeveer 2,3% scoort boven de 130.
- $P(85\le X\le115)$: $z$ loopt van $-1$ tot $1$, dus $\Phi(1)-\Phi(-1)=0{,}8413-0{,}1587=0{,}6826$. Dat is de 68%-regel, nu met vier decimalen.
:::

{{ exercises: 37-012, 37-013, 37-014, 37-033 }}

## Omgekeerd: bij welke grens hoort een kans?

Vaak is de kans gegeven en zoek je de grens. Dan lees je de tabel van binnen naar buiten: zoek eerst de kans in het lichaam van de tabel, lees de bijbehorende $z$ af, en reken terug met $x=\mu+z\sigma$. Een paar waarden komen zo vaak voor dat je ze moet onthouden:

| Linkerkans | 0,90 | 0,95 | 0,975 | 0,99 |
|---|---|---|---|---|
| $z$ | 1,28 | 1,645 | 1,96 | 2,33 |

De waarde 1,96 hoort bij een linkerkans van 0,975. Dat betekent dat tussen $-1{,}96$ en $+1{,}96$ in totaal $0{,}975-0{,}025=0{,}95$ ligt: het centrale 95%-gebied uit de vorige paragraaf.

:::example Het vulgewicht van de bovenste 5%
Voor $\mu=500$ en $\sigma=20$: welk gewicht wordt door slechts 5% van de pakken overschreden? Je zoekt $x$ met $P(X>x)=0{,}05$, dus $P(X\le x)=0{,}95$. Uit de tabel volgt $z=1{,}645$. Dan is $x=500+1{,}645\cdot20=532{,}9$ g. Een rechterstaartvraag wordt dus eerst een linkerkansvraag. Wie het complement vergeet en $z=-1{,}645$ gebruikt, vindt $467{,}1$ g: dat is de grens van de onderste 5%.
:::

{{ exercises: 37-034, 37-035, 37-036, 37-044 }}

Houd bij dat laatste in gedachten: een centraal 95%-gebied voor *individuele uitkomsten* beschrijft waar bijna alle metingen vallen. Het is nog geen betrouwbaarheidsinterval voor een onbekend gemiddelde; dat onderscheid komt in module 38 aan bod.
