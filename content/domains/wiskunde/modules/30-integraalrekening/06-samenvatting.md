# Samenvatting

:::summary De kern in vijf zinnen
- Een **oppervlakte onder een grafiek** benader je met rechthoeken: ondersom $\leq$ oppervlakte $\leq$ bovensom. Hoe smaller de rechthoeken, hoe beter.
- De **bepaalde integraal** $\int_a^b f(x)\,dx$ is de limiet van die Riemann-sommen. Stukken onder de $x$-as tellen negatief.
- Een integraal van een **tempo** is een **totaal**: afstand uit snelheid, water uit debiet, energie uit vermogen.
- Een **primitieve** $F$ van $f$ is een functie met $F' = f$. Alle primitieven verschillen een constante $C$.
- **Hoofdstelling:** de oppervlaktefunctie groeit met snelheid $f(x)$, en daarom is $\int_a^b f(x)\,dx = F(b) - F(a)$.
:::

## Wat je nu moet beheersen

### Riemann-sommen

- Verdeel $[a, b]$ in $n$ stukjes van breedte $\Delta x = \dfrac{b - a}{n}$.
- Linkersom, rechtersom, middensom: hoogte links, rechts of in het midden van elk stukje. Ondersom en bovensom: kleinste of grootste hoogte.
- Tel eerst de hoogtes op, vermenigvuldig dan met $\Delta x$.
- Bij een stijgende functie is $B_n - O_n = \Delta x \cdot \big(f(b) - f(a)\big)$; verdubbel je $n$, dan halveert het verschil.
- Bij meetgegevens: let op de eenheden van tijd en tempo.

### De integraal en zijn regels

$$
\int_a^b f(x)\,dx = \lim_{n \to \infty} \sum_{k=1}^{n} f(x_k)\,\Delta x
$$

- $\int_a^b + \int_b^c = \int_a^c$, $\quad \int_b^a = -\int_a^b$, $\quad \int_a^a = 0$.
- Constante factoren en sommen mag je naar buiten halen en splitsen.
- Rechthoeken, driehoeken, trapezia en cirkeldelen kun je meetkundig integreren.

### Primitieven

| $f(x)$ | primitieve $F(x)$ |
|---|---|
| $k$ (constante) | $kx$ |
| $x^n$ ($n \neq -1$) | $\dfrac{x^{n+1}}{n+1}$ |
| $\sqrt{x} = x^{1/2}$ | $\tfrac23 x^{3/2}$ |
| $\dfrac{1}{x^2} = x^{-2}$ | $-\dfrac1x$ |
| $c \cdot f(x) + g(x)$ | $c \cdot F(x) + G(x)$ |

Plus een constante $C$, die je bepaalt uit een beginwaarde. Werk producten en haakjes eerst uit. Controleer altijd door te differentiëren.

### De hoofdstelling

- De oppervlaktefunctie $A(x) = \int_a^x f(t)\,dt$ heeft afgeleide $A'(x) = f(x)$. Reden: een smalle strook van breedte $h$ heeft oppervlakte ongeveer $f(x) \cdot h$.
- Daaruit volgt $\int_a^b f(x)\,dx = \big[F(x)\big]_a^b = F(b) - F(a)$.

### Oppervlakten

1. Schets en zoek de snijpunten.
2. Bepaal per deelinterval wat boven ligt.
3. Integreer "boven min onder" per deelinterval en tel op. Onder de $x$-as: neem de absolute waarde.

### Toepassingen

- Eindhoeveelheid $=$ beginhoeveelheid $+ \int_a^b (\text{tempo})\,dt$.
- Gemiddelde waarde: $\bar f = \dfrac{1}{b - a}\int_a^b f(x)\,dx$.

### Geschiedenis

- Eudoxus en Euclides (boek XII): de **uitputtingsmethode**. Archimedes: cirkel, $\pi$, en het parabolische segment $= \tfrac43$ driehoek.
- Kepler (1615) en Cavalieri (1635): denken in plakjes, **ondeelbaren**.
- Gregory en Barrow: een meetkundige vorm van de hoofdstelling. Newton (1665–1666) en Leibniz (1675): de calculus als systeem. Leibniz' $\int$ is een lange S van *summa*.
- Euler: de integraalrekening als vak. Cauchy (1823) en Riemann (1854): de strenge definitie als limiet van sommen.

## Veelgemaakte fouten om te vermijden

:::warning Controlelijst
- Differentiëren in plaats van primitiveren (exponent omlaag in plaats van omhoog).
- Vergeten te delen door de nieuwe exponent.
- Een product factor voor factor primitiveren.
- Bij $F(b) - F(a)$ de haakjes om $F(a)$ vergeten.
- Integraal en oppervlakte verwarren als de grafiek de $x$-as kruist.
- Bij een tempo de beginhoeveelheid vergeten, of eenheden van tijd door elkaar gebruiken.
:::

## Vooruitblik

De integraal komt in de rest van de cursus vaak terug. In de toegepaste wiskunde (deel VI) gebruik je hem bij modelleren: groei, verbruik en voorraad. En in de statistiek (deel VII) is een kans bij een continue verdeling, zoals de normale verdeling, een oppervlakte onder een dichtheidskromme. Het zijn allemaal varianten van hetzelfde idee: tel oneindig veel oneindig kleine stukjes op.

Test nu je beheersing met de hoofdstuktoets. Je hebt 70% nodig om de module af te ronden en 85% voor "beheerst".

{{ quiz }}
