:::question Denk eerst zelf na
Een haar is ongeveer 70 micrometer dik, een atoom ongeveer een tienmiljoenste millimeter breed. Hoeveel atomen passen er, grofweg, naast elkaar in de dikte van een haar? Probeer het eerst zonder uitleg: welke getallen moet je met elkaar vergelijken, en in welke eenheid doe je dat het handigst?
:::

## Een wereld in tien orden van grootte

De natuurkunde en de chemie werken met afmetingen die elke voorstelling te boven gaan. Een atoomkern meet ongeveer $10^{-14}\ \text{m}$, een atoom ongeveer $10^{-10}\ \text{m}$, een bacterie een paar $10^{-6}\ \text{m}$, een mens ongeveer $1{,}8\ \text{m}$, de aarde ongeveer $1{,}3 \times 10^{7}\ \text{m}$ in doorsnee, en het waarneembare heelal grofweg $10^{26}\ \text{m}$. Daartussen zitten veertig tienmachten. Zulke getallen schrijf je niet uit met zeroes: dat is onleesbaar en foutgevoelig. Je hebt een schrijfwijze nodig die de *orde van grootte* direct laat zien, en je wilt eenheden die bij het onderwerp passen, zoals nanometer voor atomen en lichtjaren voor sterren.

Daarvoor bestaan twee gereedschappen die in deze les samenkomen: de wetenschappelijke notatie (machten van tien) en de voorvoegsels voor eenheden. Beide zijn in feite dezelfde afspraak in twee verpakkingen, en als je ze eenmaal helder hebt, is omrekenen nooit meer een kwestie van gokken welke kant op je moet schuiven.

## Machten van tien

Een **macht van tien** is $10^n$, met $n$ een geheel getal. Voor positieve $n$ zet je $n$ keer een tien achter elkaar: $10^3 = 10 \cdot 10 \cdot 10 = 1000$. Voor negatieve $n$ deel je: $10^{-3} = \dfrac{1}{10^3} = 0{,}001$. En $10^0 = 1$. De **wetenschappelijke notatie** schrijft elk getal als een getal tussen 1 en 10 maal een macht van tien:

$$
299\,792\,458 = 2{,}997\,924\,58 \times 10^8 \qquad 0{,}000\,000\,62 = 6{,}2 \times 10^{-7}
$$

Het getal vóór de tienmacht heet de *mantisse*, de exponent geeft de orde van grootte. Een positieve exponent betekent: de komma staat $n$ plaatsen naar rechts van waar ze nu staat. Een negatieve betekent naar links. Het is handig om te onthouden dat een grotere exponent altijd een groter getal betekent: $10^{-3}$ is groter dan $10^{-6}$, want $0{,}001 > 0{,}000\,001$.

Met machten van tien reken je volgens drie regels, die je kunt afleiden door te tellen hoeveel tienen er in het product staan.

$$
10^a \cdot 10^b = 10^{a+b} \qquad \frac{10^a}{10^b} = 10^{a-b} \qquad \left(10^a\right)^b = 10^{a \cdot b}
$$

Dus $(3 \times 10^4) \cdot (2 \times 10^{-7}) = 6 \times 10^{-3}$: je vermenigvuldigt de mantissen en telt de exponenten op. Komt de mantisse boven de 10 uit, dan schuif je door: $(5 \times 10^3) \cdot (4 \times 10^2) = 20 \times 10^5 = 2 \times 10^6$. Optellen werkt anders: dan moeten de machten van tien eerst gelijk zijn. Je kunt $3 \times 10^4 + 2 \times 10^3$ pas samennemen als je het schrijft als $30 \times 10^3 + 2 \times 10^3 = 32 \times 10^3$.

## Voorvoegsels

Het SI heeft voor elke macht van tien die je vaak nodig hebt een voorvoegsel en een afkorting. Zet je zo’n voorvoegsel voor een eenheid, dan vermenigvuldig je die eenheid met de bijbehorende macht van tien. Een kilometer is dus “duizend meter”, want $\text{k} = 10^3$; een milligram is “een duizendste gram”, want $\text{m} = 10^{-3}$.

| Voorvoegsel | Symbool | Factor |
|---|---|---|
| pico | p | $10^{-12}$ |
| nano | n | $10^{-9}$ |
| micro | µ | $10^{-6}$ |
| milli | m | $10^{-3}$ |
| centi | c | $10^{-2}$ |
| deci | d | $10^{-1}$ |
| kilo | k | $10^{3}$ |
| mega | M | $10^{6}$ |
| giga | G | $10^{9}$ |
| tera | T | $10^{12}$ |

![Een ladder van voorvoegsels van pico tot tera, met per stap een factor 1000 en daarnaast centi en deci als uitzonderingen](/images/natuurkunde-en-chemie/m01-voorvoegsels.svg "De voorvoegsels als ladder: per stap van de hoofdtrap een factor 1000. Eigen schematische tekening.")

Een paar valkuilen verdienen aandacht. Hoofdletter en kleine letter maken verschil: een $\text{mm}$ is een millimeter, een $\text{Mm}$ een megameter, dat is een miljard keer zoveel. Voorvoegsels stapel je niet: geen “millimicrometer”, maar nanometer. En de kilogram is de uitzondering op de regel: de basiseenheid van massa heeft al een voorvoegsel in zijn naam, dus voorvoegsels voor massa zet je voor het woord *gram*. Een duizendste kilogram is een gram, niet een “millikilogram”. De dagelijkse voorvoegsels centi en deci passen niet in de stappen van 1000, maar komen in huis voor (centimeter, deciliter) en je moet ze kunnen lezen.

Het voorvoegsel hoort bij de eenheid en niet bij de grootheid, en het heeft effect op de hele eenheid. Dat wordt belangrijk zodra je machten en breuken van eenheden gebruikt.

## Omrekenen: één stap tegelijk

Het omrekenen van een eenheid is vermenigvuldigen met een breuk die gelijk is aan 1. Omdat $1\ \text{km} = 1000\ \text{m}$, is $\dfrac{1000\ \text{m}}{1\ \text{km}} = 1$ en dus verandert vermenigvuldigen met die breuk de waarde niet, alleen de eenheid. Zet de breuk zo neer dat de ongewenste eenheid wegvalt.

:::example Van micrometer naar nanometer
Een rode bloedcel is ongeveer $7\ \mu\text{m}$ breed. Hoeveel nanometer is dat?

**Stap 1.** Zoek de relatie: $1\ \mu\text{m} = 10^{-6}\ \text{m}$ en $1\ \text{nm} = 10^{-9}\ \text{m}$. Dus $1\ \mu\text{m} = 10^{3}\ \text{nm} = 1000\ \text{nm}$.

**Stap 2.** Maak een breuk die de oude eenheid wegstreept:

$$
7\ \mu\text{m} \times \frac{1000\ \text{nm}}{1\ \mu\text{m}} = 7000\ \text{nm}.
$$

**Controle.** Een nanometer is kleiner dan een micrometer, dus er moeten *meer* nanometers in dezelfde lengte passen. Dat klopt: 7000 is groter dan 7.

**Conclusie.** Een rode bloedcel is ongeveer $7000\ \text{nm}$ breed, ofwel $7 \times 10^3\ \text{nm}$.
:::

De regel “kleinere eenheid, groter getal” is een van de meest betrouwbare controles die je hebt. Als je van meters naar millimeters gaat, moet het getal groter worden. Gaat het kleiner, dan heb je de verkeerde kant op vermenigvuldigd. Denk eraan bij alle omrekeningen.

## Oppervlak en volume: de factor telt mee

De grootste bron van fouten bij omrekenen ontstaat bij oppervlak en volume. Als $1\ \text{m} = 100\ \text{cm}$ is, dan is $1\ \text{m}^2$ niet $100\ \text{cm}^2$. Een vierkant van 1 m bij 1 m is ook 100 cm bij 100 cm, dus

$$
1\ \text{m}^2 = (100\ \text{cm})^2 = 10\,000\ \text{cm}^2.
$$

De exponent in de eenheid geldt voor het hele product, voorvoegsel en eenheid samen. In $\text{cm}^2$ is $(\text{cm})^2 = (10^{-2}\ \text{m})^2 = 10^{-4}\ \text{m}^2$. Bij volumes werkt het net zo: $1\ \text{m}^3 = (100\ \text{cm})^3 = 10^6\ \text{cm}^3$. En omdat $1\ \text{L} = 1\ \text{dm}^3$ en $1\ \text{dm} = 0{,}1\ \text{m}$, geldt $1\ \text{L} = 10^{-3}\ \text{m}^3$. Een kubieke meter bevat dus 1000 liter, en één milliliter is precies één kubieke centimeter: $1\ \text{mL} = 1\ \text{cm}^3$.

:::warning Een kilometer in het kwadraat is geen duizend meter in het kwadraat
$1\ \text{km}^2 = (1000\ \text{m})^2 = 10^6\ \text{m}^2$, niet $1000\ \text{m}^2$. Wie bij oppervlak of volume alleen met de lineaire factor rekent, zit er met een factor 1000 of meer naast. Schrijf de omrekening altijd uit met de exponent erbij.
:::

Dezelfde regel geldt voor samengestelde eenheden zoals dichtheid. Een dichtheid van $2{,}7\ \text{g/cm}^3$ is in $\text{kg/m}^3$:

$$
2{,}7\ \frac{\text{g}}{\text{cm}^3} \times \frac{1\ \text{kg}}{1000\ \text{g}} \times \left(\frac{100\ \text{cm}}{1\ \text{m}}\right)^3 = 2{,}7 \times \frac{10^6}{10^3}\ \frac{\text{kg}}{\text{m}^3} = 2700\ \frac{\text{kg}}{\text{m}^3}.
$$

Je ziet dat er een factor $10^3$ overblijft. Daarom geldt de vuistregel: een getal in $\text{g/cm}^3$ keer 1000 is hetzelfde in $\text{kg/m}^3$. Door de afleiding hoef je die regel niet te onthouden, maar je kunt hem wel gebruiken als je hem begrijpt.

:::example Hoeveel liter in een zwembad?
Een zwembad bevat $37{,}5\ \text{m}^3$ water. Hoeveel liter is dat, en welke massa heeft het water ongeveer?

**Stap 1.** $1\ \text{m}^3 = 1000\ \text{L}$, dus $37{,}5\ \text{m}^3 = 37{,}5 \times 1000\ \text{L} = 37\,500\ \text{L}$.

**Stap 2.** Water heeft een dichtheid van ongeveer $1000\ \text{kg/m}^3$. Dus $m = \rho \cdot V = 1000\ \dfrac{\text{kg}}{\text{m}^3} \times 37{,}5\ \text{m}^3 = 37\,500\ \text{kg}$.

**Conclusie.** Het zwembad bevat ruim 37 000 liter, en dat water weegt ongeveer 37,5 ton. De getalswaarde in liter en in kilogram is gelijk doordat de dichtheid van water $1\ \text{kg/L}$ is. Dat is geen toeval, maar een gevolg van de oorspronkelijke definitie van de kilogram, waar je in les 6 meer over leest.
:::

## Schalen vergelijken

Terug naar de denkvraag. De haar is $70\ \mu\text{m} = 70 \times 10^{-6}\ \text{m} = 7 \times 10^{-5}\ \text{m}$. Een atoom is ongeveer $10^{-10}\ \text{m}$. Het aantal atomen naast elkaar is de verhouding:

$$
\frac{7 \times 10^{-5}\ \text{m}}{10^{-10}\ \text{m}} = 7 \times 10^{5}.
$$

Dus ongeveer 700 000 atomen. Let op wat hier gebeurt: de eenheden vallen weg, en wat overblijft is een puur getal, een verhouding. Verhoudingen hebben geen eenheid, en dat is precies wat je wilt als je zegt dat het ene “zoveel keer groter” is dan het andere. Het gebruik van tienmachten maakt het rekenen een kwestie van exponenten tellen: $-5 - (-10) = 5$.

Zulke schaalvergelijkingen komen in de natuurkunde steeds terug, en vaak is de *orde van grootte* al een volledige uitspraak: het maakt voor de conclusie niet uit of het 700 000 of 650 000 is. Het maakt wél uit of het 700 000 of 7 miljard is. In les 5 gebruik je dat bij het schatten.

{{ exercises: 01-009, 01-010, 01-011, 01-012, 01-013, 01-014 }}
