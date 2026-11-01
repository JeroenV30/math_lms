# Samengestelde rente en inflatie

## Rente over rente

Rente is de vergoeding die je krijgt voor het uitlenen van geld, uitgedrukt als percentage per jaar. Bij **enkelvoudige rente** krijg je elk jaar hetzelfde bedrag, namelijk een percentage van het oorspronkelijke bedrag. Bij **samengestelde rente** wordt de rente van een jaar bij het kapitaal opgeteld en levert zij het jaar daarna zelf ook rente op. Elk jaar groeit het bedrag dus met hetzelfde percentage van een steeds groter bedrag.

Dat verschil lijkt klein in het eerste jaar en wordt groot over de jaren. In de figuur zie je € 1.000 bij 5% per jaar. Enkelvoudig groeit het bedrag met € 50 per jaar en is het na 40 jaar € 3.000. Samengesteld wordt het in dezelfde 40 jaar ruim € 7.000. De derde lijn laat zien wat dat laatste bedrag waard is als de prijzen met 2% per jaar stijgen; daarover meer in het vervolg van deze les.

![Groei van € 1.000 over 40 jaar bij 5% per jaar](/images/beleggen/m01-groei.svg "Enkelvoudige en samengestelde groei van € 1.000 bij 5% per jaar, en de samengestelde groei na aftrek van 2% inflatie. Eigen berekening.")

## De formule

Noem het beginkapitaal $K_0$, de rente per jaar $r$ (als decimaal getal, dus 4% is $0{,}04$) en het aantal jaren $n$. Na één jaar is het kapitaal $K_0 \cdot (1 + r)$. Na twee jaar vermenigvuldig je dat bedrag opnieuw met $(1 + r)$, enzovoort. Zo ontstaat de formule voor samengestelde groei:

:::formula Samengestelde rente
$$
K_n = K_0 \cdot (1 + r)^n
$$
Hierin is $(1 + r)$ de **groeifactor** per jaar. Bij $r = 0{,}04$ is de groeifactor $1{,}04$.
:::

Het getal $(1+r)^n$ is een exponentiële functie van de tijd: een vaste factor per tijdstap. Dat is dezelfde structuur als bij bacteriegroei of bij radioactief verval, maar dan met een factor boven de 1. Omdat de tijd in de exponent staat, werkt tijd harder dan het bedrag: een verdubbeling van de looptijd levert meer op dan een verdubbeling van de inleg.

:::example Eén bedrag, tien jaar
Je zet € 5.000 weg tegen 4% samengestelde rente per jaar. Hoeveel is het na 10 jaar?

Stap 1. De groeifactor is $1 + 0{,}04 = 1{,}04$.

Stap 2. Het kapitaal na $n = 10$ jaar is $K_{10} = 5000 \cdot 1{,}04^{10}$.

Stap 3. Met een rekenmachine is $1{,}04^{10} \approx 1{,}4802$, dus $K_{10} \approx 5000 \cdot 1{,}4802 = 7401{,}22$.

Je krijgt dus ongeveer € 7.401,22. Met enkelvoudige rente was het $5000 + 10 \cdot 200 = 7000$ geweest. De € 401,22 verschil is rente over rente.
:::

{{ exercises: 01-001, 01-002, 01-003 }}

## Verdubbelen en de regel van 72

Een handige vuistregel voor hoofdrekenen is de **regel van 72**: bij een rente van $p$ procent per jaar duurt het ongeveer $72/p$ jaar voordat een bedrag verdubbelt. Bij 6% is dat ongeveer 12 jaar, bij 3% ongeveer 24 jaar. De regel is een benadering die goed werkt voor rentes tussen ruwweg 2% en 10%; nauwkeuriger bereken je de verdubbelingstijd met logaritmen, uit $(1+r)^n = 2$.

Je kunt de formule ook omdraaien om het rendement te vinden dat nodig was om van een begin- naar een eindbedrag te komen. Uit $K_n = K_0 \cdot (1+r)^n$ volgt dat $r = (K_n / K_0)^{1/n} - 1$. Dat getal heet het **gemiddelde jaarlijkse rendement** (meetkundig gemiddelde). Het is de vaste rente die over de hele periode hetzelfde eindbedrag zou hebben opgeleverd.

:::example Welk rendement is nodig?
Een bedrag van € 10.000 moet in 20 jaar verdubbelen tot € 20.000. Welk constant jaarlijks rendement is daarvoor nodig?

Stap 1. $K_n / K_0 = 20000 / 10000 = 2$.

Stap 2. $r = 2^{1/20} - 1$.

Stap 3. Met een rekenmachine is $2^{1/20} \approx 1{,}03526$, dus $r \approx 0{,}0353$, ongeveer 3,53% per jaar.

Controle met de regel van 72: $72 / 20 = 3{,}6$. Dat komt in de buurt.
:::

{{ exercises: 01-004 }}

## Periodiek inleggen

Wie niet één keer inlegt maar elk jaar een bedrag stort, laat elke storting vanaf het moment van storten groeien. De eerste storting groeit het langst, de laatste het kortst. Voor een paar jaar reken je dat stap voor stap uit: vermenigvuldig het saldo met de groeifactor en tel de storting erbij op. Dat geeft inzicht in een belangrijk gegeven: bij langdurig sparen of beleggen komt het grootste deel van het eindbedrag uiteindelijk uit rendement, niet uit inleg. De vroege jaren leggen daarvoor het fundament.

:::example Jaarlijks bijstorten
Je begint met € 2.000 en stort aan het einde van elk jaar € 1.000 bij. De rente is 5% per jaar. Hoeveel heb je na 3 jaar, direct na de derde storting?

Jaar 1: $2000 \cdot 1{,}05 + 1000 = 2100 + 1000 = 3100$.

Jaar 2: $3100 \cdot 1{,}05 + 1000 = 3255 + 1000 = 4255$.

Jaar 3: $4255 \cdot 1{,}05 + 1000 = 4467{,}75 + 1000 = 5467{,}75$.

Je saldo is € 5.467,75. Daarvan is € 5.000 ingelegd en dus € 467,75 rente.
:::

{{ exercises: 01-005 }}

## Inflatie: wat je met geld kunt kopen

**Inflatie** is de gemiddelde stijging van het algemene prijsniveau. In Nederland meet het CBS die stijging met de consumentenprijsindex (CPI): het volgt de prijzen van een vast mandje goederen en diensten van huishoudens. Als de inflatie 2,5% per jaar is, kost hetzelfde mandje na een jaar 2,5% meer. Je geld koopt dan minder.

Koopkracht werkt dus als samengestelde rente in omgekeerde richting. Bij inflatie $i$ per jaar is de waarde van een vast bedrag na $n$ jaar, uitgedrukt in de koopkracht van nu:

$$
\text{koopkracht} = \frac{K}{(1 + i)^n}
$$

Bij 2% inflatie is een bedrag na 35 jaar ongeveer de helft van zijn huidige waarde waard, want $1{,}02^{35} \approx 2$. Dat is de reden dat ook een bescheiden inflatie over de lange termijn zwaar telt. De Europese Centrale Bank (ECB) streeft naar een inflatie van gemiddeld 2% op middellange termijn voor het eurogebied; de werkelijke inflatie wijkt daar in sommige jaren sterk van af, zoals in 2022.

{{ exercises: 01-006 }}

## Nominaal en reëel rendement

Het rendement dat je ziet op een afschrift is **nominaal**: het zegt hoeveel euro's erbij zijn gekomen. Het **reëel rendement** zegt hoeveel koopkracht erbij is gekomen. Het verband volgt uit de groeifactoren: je kapitaal groeit met factor $1 + r$ en de prijzen met factor $1 + i$, dus de koopkracht groeit met factor $(1+r)/(1+i)$:

:::formula Reëel rendement
$$
r_{\text{reëel}} = \frac{1 + r_{\text{nominaal}}}{1 + i} - 1 \approx r_{\text{nominaal}} - i
$$
De benadering aan het eind is bruikbaar bij lage inflatie; bij hoge inflatie wordt de afwijking merkbaar. Reken dan met de exacte formule.
:::

:::example Reëel rendement uitgerekend
Een rekening geeft 3,2% rente op jaarbasis terwijl de inflatie 10,0% is, vergelijkbaar met 2022. Wat is het reële rendement?

Stap 1. De groeifactor van het kapitaal is $1{,}032$ en die van de prijzen is $1{,}10$.

Stap 2. $r_{\text{reëel}} = 1{,}032 / 1{,}10 - 1 \approx -0{,}0618$.

Het reële rendement is ongeveer $-6{,}18\%$. Het saldo steeg dus in euro's, maar je koopkracht daalde met ruim 6%. De benadering geeft $3{,}2 - 10{,}0 = -6{,}8\%$, een verschil van bijna een procentpunt.
:::

Let op dat rente over de vermogensopbouw ook door belasting wordt aangetast. Dat komt in latere modules aan bod; in deze module reken je steeds bruto, dus vóór belasting en kosten.

{{ exercises: 01-007, 01-008 }}
