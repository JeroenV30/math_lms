# Grafiek en inverse

Een logaritme draait een macht om. Wat betekent dat voor de grafiek? In deze les zie je dat de grafiek van $y = \log_2 x$ het spiegelbeeld is van die van $y = 2^x$, en dat daaruit vrijwel alle eigenschappen van de logaritmische functie vanzelf volgen: het domein, het nulpunt, de asymptoot en het gedrag voor grote en kleine waarden.

:::question Punten omwisselen
Op de grafiek van $y = 2^x$ liggen de punten $(0; 1)$, $(1; 2)$, $(2; 4)$ en $(3; 8)$. Wissel in elk punt de twee coördinaten om. Welke vier punten krijg je? Bij welke functie horen die volgens de definitie van een logaritme?
:::

Je krijgt $(1; 0)$, $(2; 1)$, $(4; 2)$ en $(8; 3)$. Dat zijn precies de punten waarvoor $y = \log_2 x$: $\log_2 1 = 0$, $\log_2 2 = 1$, $\log_2 4 = 2$ en $\log_2 8 = 3$. De logaritme zet uitkomst en invoer van de macht om, en daarmee wisselt elk punt van coördinaten.

## De inverse functie

Een functie en zijn **inverse** doen elkaars werk ongedaan. De functie $f(x) = 2^x$ maakt van $3$ het getal $8$; de logaritme maakt van $8$ weer $3$. Algemeen, voor $g > 0$ en $g \neq 1$:

$$
f(x) = g^x \quad\text{en}\quad f^{-1}(x) = \log_g x.
$$

Omdat de inverse invoer en uitvoer verwisselt, is de grafiek van $y = \log_g x$ het **spiegelbeeld van de grafiek van $y = g^x$ in de lijn $y = x$**. Het punt $(a; b)$ op de ene grafiek correspondeert met het punt $(b; a)$ op de andere. Dat is ook waarom het domein en het bereik van de twee functies van plaats wisselen.

Probeer het zelf. In de grafiek hieronder zie je $y = 2^x$ en $y = \log_2 x$. Je kunt het grondtal $a$ met de schuifregelaar veranderen. Let op: de logaritme is hier geschreven als $\ln x / \ln a$, een toepassing van de formule voor het veranderen van grondtal.

{{ widget: function-plot fn="ln(x)/ln(a)" fn2="a^x" a=2 amin=1.1 amax=6 astep=0.1 xmin=-3 xmax=8 ymin=-3 ymax=8 title="y = log_a(x) en y = a^x, gespiegeld in y = x" }}

Kijk bij verschillende waarden van $a$ wat gelijk blijft en wat verandert. Het punt $(1; 0)$ ligt altijd op de logaritme, voor elke $a$, en het punt $(0; 1)$ altijd op de macht. Het punt $(a; 1)$ ligt op de logaritme en $(1; a)$ op de macht.

## Eigenschappen van $y = \log_g x$ voor $g > 1$

Uit de spiegeling lees je de volgende eigenschappen af. Je hoeft ze niet te onthouden als lijstje; ze volgen uit wat je weet over $y = g^x$.

- **Domein.** $g^x$ is voor elke $x$ gedefinieerd en is altijd positief. Dus de logaritme is gedefinieerd voor alle $x > 0$. Het domein is $\langle 0, \infty \rangle$.
- **Bereik.** De machtfunctie neemt elke positieve waarde aan; de logaritme neemt dus elke reële waarde aan. Het bereik is $\mathbb{R}$.
- **Nulpunt.** Omdat $g^0 = 1$ is $\log_g 1 = 0$. De grafiek snijdt de $x$-as in $(1; 0)$ en snijdt de $y$-as niet.
- **Verticale asymptoot.** De grafiek van $g^x$ nadert de $x$-as maar raakt die nooit. Gespiegeld wordt dat: de grafiek van $\log_g x$ nadert de $y$-as ($x = 0$) maar raakt die nooit. Voor $x \downarrow 0$ daalt de grafiek onbegrensd.
- **Stijgend.** Voor $g > 1$ is $g^x$ stijgend, dus ook $\log_g x$. Maar hij stijgt steeds langzamer: de helling neemt af.
- **Het punt $(g; 1)$.** Omdat $\log_g g = 1$ ligt dat punt altijd op de grafiek. Dit helpt bij het schetsen.

Die langzame stijging is opvallend. Voor $y = \log_2 x$ moet $x$ **verdubbelen** om $y$ met 1 te laten stijgen: $\log_2 1000 \approx 9{,}97$, maar je moet naar ongeveer $x = 1\,000\,000$ om $y \approx 20$ te bereiken. Een logaritmische functie groeit dus langzamer dan elke macht van $x$, hoe klein de exponent ook is. Dat maakt hem nuttig als maat om enorm uiteenlopende getallen op één schaal te zetten, zoals in les 7.

:::example Een tabel en een schets
Maak een tabel voor $y = \log_2 x$ en schets de grafiek.

**Stap 1.** Kies argumenten die machten van 2 zijn, zodat de uitkomsten mooi zijn:

| $x$ | $\tfrac{1}{4}$ | $\tfrac{1}{2}$ | 1 | 2 | 4 | 8 |
|---|---|---|---|---|---|---|
| $\log_2 x$ | $-2$ | $-1$ | 0 | 1 | 2 | 3 |

**Stap 2.** Zet de punten uit en verbind ze met een vloeiende kromme.

**Stap 3.** Controleer de kenmerken: het nulpunt is $(1; 0)$, de grafiek stijgt, de $y$-as is een verticale asymptoot, en elke verdubbeling van $x$ tilt de grafiek één eenheid omhoog.
:::

## Een grondtal kleiner dan 1

Is het grondtal $g$ kleiner dan 1, bijvoorbeeld $g = \tfrac{1}{2}$, dan is $g^x$ een **dalende** functie (exponentieel verval). Spiegelen in $y = x$ geeft dan een dalende logaritme. Het domein blijft $\langle 0, \infty \rangle$ en het nulpunt blijft $(1; 0)$, maar nu is $\log_{1/2} x$ voor $x > 1$ negatief, omdat $\left(\tfrac{1}{2}\right)^{-3} = 8$ dus $\log_{1/2} 8 = -3$. Omdat $\log_{1/2} x = -\log_2 x$ is de grafiek van $y = \log_{1/2} x$ de spiegeling van $y = \log_2 x$ in de $x$-as.

## Verschuivingen en het domein

Wat gebeurt er met een logaritme waar iets in het argument is aangepast? Neem $y = \ln(x - 2)$. De grafiek van $y = \ln(x)$ wordt hierdoor **2 eenheden naar rechts verschoven**. Alle kenmerken schuiven mee:

- Het domein verandert van $x > 0$ naar $x - 2 > 0$, dus $x > 2$.
- De verticale asymptoot verschuift van $x = 0$ naar $x = 2$.
- Het nulpunt verschuift van $x = 1$ naar $x = 3$, want $\ln(x - 2) = 0$ als $x - 2 = 1$.

:::example Domein en nulpunt van een verschoven logaritme
Bepaal voor $f(x) = \ln(x + 3)$ het domein, de verticale asymptoot en het nulpunt.

**Stap 1.** Het argument moet positief zijn: $x + 3 > 0$, dus $x > -3$. Het domein is $\langle -3, \infty \rangle$.

**Stap 2.** De asymptoot ligt op de grens van het domein: $x = -3$.

**Stap 3.** Het nulpunt vind je met $\ln(\text{argument}) = 0$, dus argument $= 1$: $x + 3 = 1$, dus $x = -2$.

**Controle.** $f(-2) = \ln 1 = 0$.
:::

:::warning Nulpunt en asymptoot
Een veelgemaakte fout is het nulpunt van een logaritme te zoeken door het *argument* gelijk aan nul te stellen. Dat levert de **asymptoot** op (daar bestaat de functie niet), geen nulpunt. Het nulpunt vind je door het argument gelijk te stellen aan 1, want $\log_g 1 = 0$.
:::

{{ exercises: 26-018, 26-019, 26-020, 26-021 }}

## De twee kanten van de spiegel

Omdat de twee functies elkaars inverse zijn, kun je elke exponentiële vergelijking ook als logaritmische schrijven en andersom. Wil je weten bij welke $x$ de functie $y = 2^x$ de waarde 50 bereikt, dan kijk je in de grafiek van $y = \log_2 x$ naar de hoogte bij $x = 50$: $\log_2 50 \approx 5{,}64$. De grafiek is hier dus een instrument voor het oplossen van vergelijkingen. In les 7 doen we dat exact met een rekenmachine; de grafiek geeft je het oog voor wat een redelijk antwoord is.
