# Samenvatting

:::summary Vectoren in één oogopslag
- **Scalar of vector.** Een scalar is één getal met een eenheid (temperatuur, massa, tijd). Een vector heeft een grootte én een richting (verplaatsing, kracht, wind, snelheid met richting).
- **Pijl.** Een vector teken je als pijl van staart naar kop. Evenwijdig verschuiven verandert de vector niet. $-\vec v$ is even lang en tegengesteld gericht; $\vec 0$ heeft lengte nul.
- **Componenten.** $\vec v = \begin{pmatrix} x \\ y \end{pmatrix}$, ook geschreven als $(x; y)$: $x$ naar rechts, $y$ omhoog.
- **Kop min staart.** $\overrightarrow{AB} = (x_B - x_A;\ y_B - y_A)$. Omgekeerd: beginpunt plus vector is eindpunt.
- **Lengte.** $|\vec v| = \sqrt{x^2 + y^2}$ (Pythagoras). Niet de som van de componenten.
- **Richtingshoek.** Vanaf de positieve x-as, tegen de klok in. $\tan\alpha = \dfrac{y}{x}$; maak een schets en tel $180^\circ$ op als $x < 0$, of $360^\circ$ als $x > 0$ en $y < 0$.
- **Van lengte en hoek naar componenten.** $x = r\cos\alpha$, $y = r\sin\alpha$. Bij een kompaskoers $\beta$ (vanaf noord, met de klok mee): oost $= r\sin\beta$, noord $= r\cos\beta$.
- **Optellen.** Kop-staartmethode of parallellogram; met componenten: component voor component optellen. $|\vec a + \vec b| \leq |\vec a| + |\vec b|$.
- **Aftrekken.** $\vec a - \vec b = \vec a + (-\vec b)$; meetkundig de pijl van de kop van $\vec b$ naar de kop van $\vec a$.
- **Schalen.** $k\vec a = (k a_1; k a_2)$: $|k|$ keer zo lang, omgedraaid als $k < 0$.
- **Eenheidsvector.** $\vec e = \dfrac{1}{|\vec v|}\vec v$, lengte 1, dezelfde richting.
- **Inproduct.** $\vec a \cdot \vec b = a_1 b_1 + a_2 b_2 = |\vec a|\,|\vec b|\cos\theta$. De uitkomst is een getal.
- **Hoek tussen vectoren.** $\cos\theta = \dfrac{\vec a \cdot \vec b}{|\vec a|\,|\vec b|}$, met $0^\circ \leq \theta \leq 180^\circ$.
- **Loodrecht.** $\vec a \perp \vec b \iff \vec a \cdot \vec b = 0$. Bij $(a_1; a_2)$ staat $(-a_2; a_1)$ loodrecht.
- **Projectie en arbeid.** Het deel van $\vec F$ in de richting van eenheidsvector $\vec e$ is $\vec F \cdot \vec e$; arbeid $W = \vec F \cdot \vec s$.
- **Evenwicht.** De som van alle krachten is $\vec 0$: twee vergelijkingen (x en y), en kop aan staart een gesloten figuur.
- **Wind en stroming.** Snelheid t.o.v. de grond $=$ eigen snelheid t.o.v. lucht of water $+$ snelheid van lucht of water.
:::

## Wat je nu moet beheersen

Controleer voor jezelf of je het volgende kunt:

1. Van een grootheid zeggen of het een scalar of een vector is, en het verschil uitleggen tussen afgelegde weg en verplaatsing.
2. De vector tussen twee punten berekenen, ook met negatieve coördinaten, en het eindpunt vinden als beginpunt en vector gegeven zijn.
3. De lengte van een vector berekenen, exact of afgerond, en weten dat de tekens van de componenten daarvoor niet uitmaken.
4. De richtingshoek van een vector in elk kwadrant bepalen, en uitleggen waarom de rekenmachine bij $(-3; 4)$ een verkeerde hoek geeft.
5. De componenten van een vector berekenen uit lengte en richtingshoek, en uit lengte en kompaskoers.
6. Vectoren optellen, aftrekken en met een getal vermenigvuldigen, zowel in een tekening als met componenten, en een lineaire combinatie zoals $2\vec a - 3\vec b$ foutloos uitrekenen.
7. Een eenheidsvector maken, en daarmee een kracht van gegeven grootte in een gegeven richting in componenten schrijven.
8. Het inproduct berekenen en gebruiken om de hoek tussen twee vectoren te vinden, een onbekende component te bepalen zodat twee vectoren loodrecht staan, en een rechte hoek in een driehoek op te sporen.
9. Een evenwichtsprobleem met drie krachten oplossen, en uitleggen waarom een strak gespannen kabel grote krachten krijgt.
10. Grondsnelheid en grondkoers van een vliegtuig met wind berekenen, en de koerscorrectie bepalen die nodig is om een gewenste grondkoers te vliegen.

## Veelgemaakte fouten

| Fout | Waarom fout | Juiste aanpak |
|---|---|---|
| Staart min kop | Geeft de tegengestelde vector | Kop min staart, en controleer met een schets |
| $\lvert(6; -8)\rvert = 14$ | De vector loopt langs de schuine zijde | $\sqrt{36 + 64} = 10$ |
| $\arctan(x/y)$ | Meet de hoek vanaf de y-as | $\tan\alpha = y/x$ |
| Hoek $-53{,}1^\circ$ voor $(-3; 4)$ | De arctangens kent het kwadrant niet | Schets, en tel $180^\circ$ op: $126{,}9^\circ$ |
| $\lvert\vec a + \vec b\rvert = \lvert\vec a\rvert + \lvert\vec b\rvert$ | Klopt alleen bij dezelfde richting | Eerst componenten optellen, dan de lengte |
| Inproduct als vector opschrijven | Het inproduct is een getal | Tel de twee producten op |
| "Westenwind" als vector naar het westen | De wind komt *uit* het westen | De windvector wijst naar het oosten |
| Tussendoor afronden | Fouten stapelen zich op | Rond alleen het eindantwoord af |

## Historische lijn

| Tijd | Plaats | Wat |
|---|---|---|
| 1586 | Leiden | Stevin, *De Beghinselen der Weeghconst*: clootcrans en krachtendriehoek |
| 1632 | Amsterdam–Haarlem | Eerste trekvaart: een paard trekt schuin vanaf het jaagpad |
| 1637 | Leiden | Descartes, *La Géométrie*: meetkunde met getallen |
| 1638 | Leiden | Galileï, *Discorsi*: de kogelbaan als samengestelde beweging |
| 1687 | Londen | Newton, *Principia*: het parallellogram van krachten |
| 1843 | Dublin | Hamilton ontdekt de quaternionen op de Broom Bridge |
| 1844 | Stettin | Grassmann, *Die lineale Ausdehnungslehre* |
| 1881–1884 | New Haven | Gibbs, *Elements of Vector Analysis* |
| 1901 | New York | Wilson, *Vector Analysis*: de moderne notatie |

## Vooruitblik

In **module 32** (matrices) zie je vectoren terug als kolommen van getallen. Een matrix is een rekenregel die een vector omzet in een nieuwe vector: draaien, spiegelen, uitrekken. De lineaire combinaties uit deze module, zoals $2\vec a - 3\vec b$, vormen de kern van die bewerkingen. En de natuurkunde, de techniek en de data-analyse werken met vectoren in drie, tien of duizend dimensies, met precies dezelfde regels: componentsgewijs optellen, lengte als wortel uit de som van kwadraten, en het inproduct als maat voor de hoek.

Ben je klaar? Maak dan de hoofdstuktoets. Je hebt 70% nodig om de module af te ronden en 85% voor "beheerst".

{{ quiz }}
