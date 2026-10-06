# Verdubbelen, halveren en grenzen passeren

Bij een rentepercentage van 7% per jaar wil je vaak weten wanneer je geld is verdubbeld. Een arts wil weten hoe lang een medicijn werkzaam blijft voordat de helft is afgebroken. Dit zijn vragen naar een **tijd**, niet naar een hoeveelheid, en dat is een omkering van wat je tot nu toe deed. Je kent het resultaat (de factor 2 of de factor 1/2) en zoekt de tijd. Zonder logaritmen, die in de volgende module volgen, los je dit op met een tabel of door slim te proberen.

## Verdubbelingstijd en halveringstijd

De **verdubbelingstijd** $T_d$ is de tijd waarin een exponentieel groeiende hoeveelheid twee keer zo groot wordt. De **halveringstijd** $T_h$ is de tijd waarin een afnemende hoeveelheid tot de helft daalt. Het bijzondere is dat deze tijden niet afhangen van de beginhoeveelheid: een hoeveelheid van 80 halveert in dezelfde tijd als een hoeveelheid van 8. Dat volgt uit $g^{T}=2$ of $g^T=\tfrac12$, waarin $b$ niet voorkomt.

Een model met factor 2 per 3 uur verdubbelt elke 3 uur. De formule kan dan worden geschreven als

$$N(t)=b\cdot2^{t/3}\qquad(t\text{ in uren}).$$

Na 6 uur is de factor $2^{2}=4$; na 9 uur $2^3=8$; na 1,5 uur is de factor $2^{1/2}=\sqrt2$. De breuk $t/3$ telt hoeveel verdubbelingen er zijn geweest, en dat is precies wat je wilt.

Bij afname is het spiegelbeeld: een model met factor $\tfrac12$ per 4 uur heeft halveringstijd 4 uur, en $N(t)=b\cdot(\tfrac12)^{t/4}$. Na 8 uur is er $\tfrac14$ van het begin over, na 12 uur $\tfrac18$.

:::formula Verdubbeling en halvering
$$N(t)=b\cdot2^{t/T_d}\qquad\text{en}\qquad N(t)=b\cdot\left(\tfrac12\right)^{t/T_h}$$
Vorm: de exponent is het **aantal perioden** $t/T$. Dat getal hoeft niet geheel te zijn.
:::

:::example Een medicijn in het bloed
Een medicijn heeft een halveringstijd van 6 uur. Een patiënt heeft 80 mg in het bloed. Hoeveel is er na 18 uur over?

Stap 1: aantal halveringen $18/6=3$.

Stap 2: $80\to40\to20\to10$, ofwel $80\cdot(\tfrac12)^3=10$.

Antwoord: 10 mg. Merk op dat het niet lineair verloopt: na de eerste 6 uur verdwijnt 40 mg, in de laatste 6 uur nog maar 10 mg.
:::

## Omrekenen tussen factor en verdubbelingstijd, door proberen

Soms is de factor gegeven en zoek je de tijd. Neem een rente van 7% per jaar, dus $g=1{,}07$. Wanneer is het bedrag verdubbeld? Je bouwt een tabel:

| Jaar | 1 | 2 | 5 | 8 | 10 | 11 |
|---|---|---|---|---|---|---|
| $1{,}07^t$ | 1,07 | 1,145 | 1,403 | 1,718 | 1,967 | 2,105 |

Na 10 jaar is de factor 1,967, net onder 2. Na 11 jaar is hij 2,105, boven 2. Het bedrag is dus verdubbeld ergens in het elfde jaar, en bij **gehele jaren** is het eerste jaar met meer dan het dubbele jaar 11. De precieze tijd (ongeveer 10,24 jaar) kun je met een tabel steeds verder inkapselen, maar een exacte methode krijg je pas met de logaritme.

:::tip Een vuistregel uit de praktijk
Bij kleine groeipercentages $p$ ligt de verdubbelingstijd ongeveer rond $72/p$ perioden: bij 7% is dat $72/7\approx10{,}3$ jaar. Dit is een benadering die in de financiële wereld de "regel van 72" heet. Hij klopt het best voor percentages tussen ongeveer 5% en 12%, en je kunt hem zelf controleren met een tabel. Zie hem als schatting, niet als exacte formule.
:::

## Drempels: gelijk aan, minstens, meer dan

Veel vragen gaan niet over verdubbeling, maar over een drempel: wanneer is de hoeveelheid voor het eerst minstens 500? Dan is de formulering belangrijk, en daarmee ook de vraag of je tijd continu of per heel tijdstip meet.

:::example Een discrete drempel
Een hoeveelheid begint bij 100 en wordt ieder heel uur met 1,5 vermenigvuldigd.

| Uur | 0 | 1 | 2 | 3 | 4 |
|---|---|---|---|---|---|
| Hoeveelheid | 100 | 150 | 225 | 337,5 | 506,25 |

Het eerste gehele meetmoment waarop de hoeveelheid minstens 500 is, is uur 4. In een continu model wordt 500 al tussen uur 3 en uur 4 bereikt. De vraagstelling "na hoeveel hele uur" is dus iets anders dan "wanneer" bij continue tijd.
:::

Let bij drempels op drie woorden. *Gelijk aan* vraagt om een exacte waarde en komt bij gehele machten voor (bijvoorbeeld 8 uit $2^3$). *Minstens* en *meer dan* vragen om het eerste tijdstip waarop de grens wordt overschreden, en dan is het verschil tussen "$\ge$" en "$>$" relevant: de rij 100, 200, 400 raakt de waarde 400 *precies*, dus "meer dan 400" kan pas een stap later.

:::warning Doorrekenen tot de grens, niet verder
Een veelgemaakte fout bij drempelvragen is een stap te ver doorrekenen of juist een stap te vroeg stoppen. Controleer dus altijd twee waarden: de laatste die nog *onder* de grens ligt en de eerste die erop of erboven zit. Is een van de twee niet zichtbaar in je tabel, dan ben je nog niet klaar.
:::

## Medicijnen, verval en de logica van de halveringstijd

Elke exponentiële afname heeft een halveringstijd, en omgekeerd: die ene eigenschap legt de hele curve vast. Dat is nuttig omdat het uitgangspunt van afbraak zo vaak hetzelfde is. Als het lichaam elk uur een vast percentage van de aanwezige stof afbreekt, volgt daaruit meteen een vaste halveringstijd. De radioactieve stof koolstof-14 heeft een halveringstijd van ongeveer 5700 jaar; na twee halveringstijden is dus nog een kwart over, na drie nog een achtste. We komen daar in de les over toepassingen op terug, en met logaritmen kun je straks ook uitrekenen na hoeveel tijd een willekeurig deel over is.

{{ widget: function-plot fn="b*0.5^(x/h)" b="100" bmin="20" bmax="200" bstep="10" h="4" hmin="1" hmax="10" hstep="1" xmin="0" xmax="30" ymin="0" ymax="200" }}

Verander de halveringstijd $h$ en kijk wat er met de kromme gebeurt: de vorm blijft hetzelfde, maar de tijdschaal verandert. Verander $b$ en je ziet dat alleen de hoogte verschuift. De tijd om te halveren is voor elk startniveau gelijk, en dat is precies wat "exponentieel" betekent.

Voor factoren die geen eenvoudige machten opleveren, heb je een nieuwe omkeerbewerking nodig om de tijd te berekenen. Die bewerking is de logaritme uit de volgende module. Controleer intussen tijden met een tabel of grafiek en onderscheid ‘gelijk aan’, ‘minstens’ en ‘meer dan’.

## Oefenen

{{ exercises: 25-019, 25-020, 25-021, 25-022, 25-035, 25-036, 25-037 }}
