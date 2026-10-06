# Wat kun je met een goede fit?

Een model voor energiegebruik tegen buitentemperatuur kan een sterke
samenhang laten zien. Voor een gebouwbeheerder kan dat bruikbaar zijn om
het verwachte verbruik te vergelijken met gemeten verbruik. Een plotseling
groot residu kan wijzen op een storing of veranderde bezetting.

Zo'n model hoeft geen complete verklaring te zijn. Isolatie, openingstijden
en gebouwgrootte kunnen belangrijke andere variabelen zijn. Een lijn uit
meerdere gebouwen samen kan iets anders betekenen dan een lijn door
dagmetingen binnen één gebouw.

## Een uitgewerkt geval: verbruik en buitentemperatuur

Een beheerder meet voor één kantoorgebouw het gasverbruik per dag (in m³) en de gemiddelde buitentemperatuur (in °C). Over een winterperiode van 60 dagen vindt zij de regressielijn $\hat y=48-3{,}2x$ met $r=-0{,}93$. Wat kun je hieruit lezen?

De helling betekent: dagen die één graad kouder waren, hadden gemiddeld $3{,}2$ m³ meer gasverbruik. Dat is een bruikbaar getal voor een beheerder: bij een koudegolf van $-10$ °C verwacht zij ongeveer $48+32=80$ m³. $R^2=0{,}93^2\approx0{,}86$: de temperatuur verklaart ruim 85% van de dag-op-dag-variatie in verbruik. Het intercept ($48$ m³ bij 0 °C) ligt binnen het bereik van de data, dus het is een bruikbare voorspelling.

Wat de lijn niet vertelt: wat er bij 20 °C gebeurt. Het model voorspelt dan $48-64=-16$ m³, onzin. Zomerdagen liggen buiten het bereik waarvoor de lijn is geschat; in de zomer wordt er niet verwarmd en gaat het verbruik naar een vloer (warm water, keuken). De lijn is dus een geldig model voor de stookperiode, niet voor het jaar. Op een residuplot zou je dat ook zien: een kromming bij hoge temperaturen.

Een dag met een residu van $+25$ m³ is een signaal: er is die dag meer verbruikt dan de temperatuur verklaart. Zij kan nagaan of er een storing was, of het gebouw die dag extra bezet was, of dat de meter foutief is uitgelezen. De residu is hier het nuttigste product van de analyse.

:::practice Beoordeel een regressierapport
Controleer de waarnemingseenheid, het meetbereik, de grafiek, de eenheden van
de helling, het residupatroon en de vraag of een voorspelling of een oorzaak
wordt geclaimd. Kijk daarna pas naar r en R².
:::

## Een checklist in vragen

Een regressieresultaat beoordeel je door een vaste reeks vragen te stellen. Ze lijken omslachtig, maar ze voorkomen vrijwel alle grote fouten.

1. **Wat is de eenheid van waarneming?** Dagen, gebouwen, personen? Zijn de waarnemingen onafhankelijk, of komen ze uit dezelfde gebouwen of dezelfde personen?
2. **Wat is het $x$-bereik?** Voorspellingen daarbuiten zijn extrapolaties.
3. **Hoe ziet het diagram eruit?** Rechtlijnig, krom, in groepen, met uitschieters?
4. **Wat zijn de eenheden van de helling?** "0,37 cijferpunt per uur" zegt iets; "0,37" niet.
5. **Hoe ziet het residuplot eruit?** Boog, waaier, golven?
6. **Welke punten zijn invloedrijk?** Verandert de lijn als je ze weglaat?
7. **Wat wordt geclaimd?** Beschrijving, voorspelling of oorzaak? Alleen voor de eerste twee is een regressielijn genoeg.
8. **Hoe zeker is de helling?** Standaardfout of interval, niet alleen een p-waarde.

## Veelgemaakte fouten

**$x$ en $y$ verwisselen.** De regressie van $y$ op $x$ en die van $x$ op $y$ zijn verschillende lijnen. De helling van de omgekeerde regressie is niet $1/b_1$, maar $r^2/b_1$. Alleen bij $r=\pm1$ zijn ze elkaars inverse. Kies $y$ als de variabele die je wilt voorspellen.

**$r=0$ lezen als "geen verband".** $r=0$ sluit alleen een lineair verband uit. Een parabool, een cirkel of een sinusgolf kan $r=0$ hebben met een perfect functioneel verband.

**$R^2$ lezen als percentage van de punten op de lijn.** $R^2=0{,}64$ betekent dat 64% van de variantie in $y$ wordt verklaard, niet dat 64% van de punten op de lijn ligt. Bij continue data ligt vrijwel geen punt precies op de lijn.

**Een causale conclusie trekken uit een correlatie.** "Wie meer studeert, haalt hogere cijfers" is een beschrijving; "als jij meer gaat studeren, ga jij hogere cijfers halen" is een causale claim die extra onderbouwing nodig heeft: motivatie, voorkennis en studiemethode kunnen allebei invloed hebben.

**De helling interpreteren zonder eenheden.** Een helling van $0{,}6$ zegt niets zolang je niet weet wat $x$ en $y$ meten. Noem altijd beide eenheden.

**Het intercept buiten het databereik interpreteren.** Het intercept is de voorspelling bij $x=0$. Ligt nul niet in je data, dan is dat een extrapolatie, en soms een onmogelijke waarde (een negatief gewicht, een lengte van nul).

## Uitdaging: perfect voorspellen is nog geen verklaren

{{ exercise: 40-020 }}

Een exacte algebraïsche relatie kan door de constructie van de variabelen
ontstaan, bijvoorbeeld totale prijs tegenover dezelfde prijs inclusief een
vaste toeslag. Een hoge R² alleen vertelt je niet waarom het verband bestaat.

Een ander soort perfecte fit is die van overfitting: met genoeg parameters kun je door elke eindige verzameling punten een kromme leggen die ze allemaal raakt. De fit is dan perfect, de voorspellende waarde nihil. Een model beoordeel je op data die het nog niet gezien heeft.

{{ exercise: 40-044 }}
