# Een vallende steen en een pestjaar

:::history Woolsthorpe, Engeland, 1665–1666
In de zomer van 1665 breekt in Engeland de pest uit. De universiteit van Cambridge sluit haar deuren, en een jonge student van 22 jaar, Isaac Newton, keert terug naar het boerderijhuis van zijn familie in Woolsthorpe, in het graafschap Lincolnshire. Daar, zonder colleges en zonder leraren, werkt hij ruim anderhalf jaar aan vragen die de beste geleerden van Europa bezighouden.

Een van die vragen klinkt eenvoudig. Een steen valt. Galileo had al in het begin van de zeventiende eeuw ontdekt dat de afgelegde valweg evenredig groeit met het **kwadraat** van de tijd: na twee keer zo lang is de steen vier keer zo ver gevallen. Maar hoe snel gaat de steen **op één bepaald moment**? Niet gemiddeld over een paar seconden, maar precies op het tijdstip $t = 2$?
:::

Neem een eenvoudig model. Een steen valt van een toren, en na $t$ seconden is hij

$$
s(t) = 5t^2 \text{ meter}
$$

gevallen. (Het getal 5 is ongeveer de helft van de valversnelling $9{,}8$ m/s²; we ronden af om het rekenwerk overzichtelijk te houden.) Een tabel:

| $t$ (s) | 0 | 1 | 2 | 3 | 4 |
|---|---|---|---|---|---|
| $s(t)$ (m) | 0 | 5 | 20 | 45 | 80 |

Je ziet direct dat de steen steeds harder gaat: in de eerste seconde valt hij 5 meter, in de tweede 15, in de derde 25, in de vierde 35. De **gemiddelde snelheid** over een tijdsinterval is gemakkelijk: in de derde seconde legt de steen 25 meter af, dus gemiddeld $25$ m/s. Maar de snelheid verandert voortdurend. Wat bedoelen we dan met "de snelheid op het tijdstip $t = 2$"?

![Woolsthorpe Manor](/images/history/m29-woolsthorpe-manor.jpg "Woolsthorpe Manor in Lincolnshire, het geboortehuis van Isaac Newton, waar hij in 1665–1666 een groot deel van zijn vroege wiskunde ontwikkelde. Foto: DeFacto, via Wikimedia Commons, CC BY-SA 4.0.")

:::question Denk eerst zelf na
Je wilt weten hoe snel de steen gaat op het tijdstip $t = 2$, maar je kunt alleen afstanden en tijden meten.

- Een snelheid is "afstand gedeeld door tijd". Op één tijdstip verstrijkt er geen tijd en wordt er geen afstand afgelegd. Dan krijg je $\frac{0}{0}$. Wat betekent dat?
- Bereken de gemiddelde snelheid tussen $t = 2$ en $t = 3$, en daarna tussen $t = 2$ en $t = 2{,}1$. Welke van de twee zegt meer over de snelheid *op* $t = 2$?
- Wat verwacht je als je het interval nog kleiner maakt: van $t = 2$ tot $t = 2{,}01$, of tot $t = 2{,}001$?

Neem er een paar minuten voor. Een rekenmachine mag.
:::

Als je de berekeningen hebt gedaan, heb je waarschijnlijk een vermoeden: de gemiddelde snelheden komen steeds dichter bij één bepaald getal. Dat getal is de **momentane snelheid**. Het idee om een grootheid te benaderen met steeds kleinere intervallen, en te kijken waar de uitkomsten naartoe gaan, is de kern van de **differentiaalrekening**. In les 2 werk je dit precies uit.

## Waarom bestaat deze wiskunde?

In de zeventiende eeuw liepen natuurkundigen en wiskundigen steeds weer tegen hetzelfde soort vragen aan. Ze kwamen uit heel verschillende hoeken, maar bleken wiskundig één en hetzelfde probleem te zijn.

- **Beweging.** Galileo en Kepler beschreven vallende stenen en draaiende planeten. Een planeet gaat sneller als hij dicht bij de zon is; hoe snel precies, op elk moment? Dat is een vraag naar **momentane snelheid**.
- **Raaklijnen.** Wie een lens slijpt, moet weten onder welke hoek een lichtstraal het gebogen glasoppervlak treft. Daarvoor heb je de **raaklijn** (of de loodlijn daarop) aan een kromme nodig. Descartes en Fermat ontwikkelden in de jaren 1630 elk een eigen methode om raaklijnen te vinden.
- **Maxima en minima.** Bij welke afmetingen bevat een wijnvat zo veel mogelijk wijn? Onder welke hoek schiet een kanon het verst? Johannes Kepler schreef in 1615 een boek over de inhoud van wijnvaten, en Pierre de Fermat vond rond 1636 een algemene methode voor **maxima en minima**.
- **Oppervlakte.** Hoe groot is de oppervlakte onder een kromme lijn? Dat is het onderwerp van de integraalrekening (module 30). Het verrassende inzicht van Newton en Leibniz was dat dit probleem het *omgekeerde* is van het raaklijnprobleem.

Het woord dat al deze vragen verbindt, is **verandering**. Hoe snel verandert de plaats van een steen? Hoe snel stijgt een kromme op een bepaald punt? Waar stopt een grootheid met stijgen en begint ze te dalen? Newton en Leibniz bouwden in de jaren 1665–1684, onafhankelijk van elkaar, een rekenmethode die al die vragen met één techniek beantwoordt: het **differentiëren**.

Vandaag is de differentiaalrekening overal waar iets verandert.

- **Natuurkunde en techniek.** Snelheid is de verandering van plaats, versnelling de verandering van snelheid. Elke berekening aan bruggen, raketten of elektrische schakelingen gebruikt afgeleiden.
- **Economie.** De **marginale kosten** zijn de extra kosten van één product meer: de afgeleide van de kostenfunctie. Een bedrijf dat zijn winst wil maximaliseren, zoekt waar de afgeleide van de winst nul is.
- **Biologie en geneeskunde.** De groeisnelheid van een bacteriekweek, de snelheid waarmee een medicijn uit het bloed verdwijnt.
- **Data en machine learning.** Een computer die "leert", past duizenden parameters stap voor stap aan in de richting waarin een foutmaat het snelst daalt. Die richting wordt berekend met afgeleiden.

## Wat je al weet, en wat er nu bij komt

Je hebt in eerdere modules al twee belangrijke bouwstenen gezien.

1. **Helling van een rechte lijn (module 19).** Bij een lineaire functie $y = ax + b$ is de helling $a$ overal hetzelfde: als $x$ met 1 toeneemt, neemt $y$ met $a$ toe. De helling bereken je met twee punten als $\frac{\Delta y}{\Delta x}$.
2. **De top van een parabool (module 21).** Bij een kwadratische functie vond je de top met de symmetrieas $x = -\frac{b}{2a}$ of door de topvorm af te lezen.

Een kromme lijn heeft geen vaste helling: hij is op de ene plek steil en op een andere plek vlak. In deze module leer je de helling **in één punt** te bepalen. Daarmee kun je onder meer de top van een parabool op een nieuwe manier vinden, en ook de toppen van grafieken waarvoor geen symmetrieas-formule bestaat.

De module is als volgt opgebouwd.

1. **Van gemiddelde naar momentane verandering.** Het differentiequotiënt, de raaklijn als limiet van koorden, en tabellen met steeds kleinere stapjes $h$.
2. **De afgeleide als functie.** Van de helling in één punt naar een formule voor de helling in elk punt.
3. **Rekenregels.** De machtsregel, de somregel en de regel voor een constante factor, en de vergelijking van een raaklijn.
4. **Stijgen, dalen en extremen.** Het tekenschema van de afgeleide, en het vinden van maxima en minima.
5. **Newton, Leibniz en de strijd om de calculus.** Fluxies en differentialen, een bittere prioriteitsstrijd, en de kritiek van bisschop Berkeley.
6. **Toepassen.** Snelheid, de grootste omheinde weide, de doos met de grootste inhoud, en de prijs met de hoogste winst.

{{ goals }}

{{ glossary }}
