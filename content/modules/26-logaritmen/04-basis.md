# ln, log en basisverandering

Tot nu toe stond het grondtal er altijd bij: $\log_2$, $\log_3$, $\log_5$. Een rekenmachine heeft er maar twee: een toets **log** en een toets **ln**. Hoe bereken je dan $\log_2 10$, het getal waarmee we de eerste les begonnen? In deze les leer je welke twee grondtallen een eigen naam hebben, waarom, en hoe je met die twee toetsen elke logaritme met elk grondtal uitrekent.

:::question Welke macht van 2?
Je weet dat $2^3 = 8$ en $2^4 = 16$. Je rekenmachine heeft geen toets voor $\log_2$. Bedenk een manier om toch te schatten wat $\log_2 10$ ongeveer is. Is het dichter bij 3 of bij 4? Hoe zou je die schatting kunnen verbeteren zonder logaritmetoets?
:::

## Twee bijzondere grondtallen

Voor het grondtal **10** schrijf je kortweg $\log x$, zonder grondtal. Dit is de **tiendelige** (of briggse) logaritme. Hij is zo handig omdat ons talstelsel tientallig is: $\log 1000 = 3$, $\log 100 = 2$, $\log 10 = 1$, $\log 0{,}1 = -1$. De logaritme telt als het ware het aantal nullen. Voor een getal als 4500 weet je meteen dat de logaritme tussen 3 en 4 ligt, want $1000 < 4500 < 10\,000$.

Voor het grondtal $e \approx 2{,}71828$ schrijf je $\ln x$, de **natuurlijke** logaritme. Dit grondtal is niet willekeurig gekozen. Het komt telkens terug waar iets continu groeit of vervalt, en in de analyse (bij het differentiëren) blijkt dat de afgeleide van $e^x$ gelijk is aan $e^x$ zelf, wat de formules eenvoudig maakt. Vandaar de naam. De letter $e$ voor dit getal is afkomstig van Leonhard Euler, die haar rond 1727 gebruikte, zie de bronnen in les 6. Voorlopig is het genoeg om $e$ te zien als een gewoon grondtal met de bijzonderheid dat de rekenmachine er een eigen toets voor heeft.

:::definition Afspraak in deze cursus
In deze cursus betekent $\log x$ steeds $\log_{10} x$ en $\ln x$ steeds $\log_e x$. Let op: in veel programmeertalen en spreadsheets betekent `log` juist de natuurlijke logaritme. Controleer dat altijd voor je een computerresultaat overneemt.
:::

Omdat $\ln$ en $\log$ gewone logaritmen zijn, gelden alle regels uit de vorige les ongewijzigd. En de bijbehorende machten zijn $10^x$ en $e^x$:

$$
\log\left(10^x\right) = x, \quad 10^{\log x} = x, \quad \ln\left(e^x\right) = x, \quad e^{\ln x} = x.
$$

:::example Machten en logaritmen omkeren
Bereken $\ln\left(e^3\right)$, $\log 0{,}01$ en $e^{\ln 5}$.

**Stap 1.** $\ln\left(e^3\right)$ vraagt tot welke macht je $e$ moet verheffen om $e^3$ te krijgen: $3$.

**Stap 2.** $\log 0{,}01$: schrijf $0{,}01 = \tfrac{1}{100} = 10^{-2}$, dus $\log 0{,}01 = -2$.

**Stap 3.** $e^{\ln 5}$: de macht en de logaritme heffen elkaar op, dus $e^{\ln 5} = 5$.
:::

## ln en log niet verwisselen

Een veelgemaakte fout is het verwisselen van de twee toetsen. Omdat de uitkomsten er allebei als "een mooi getal" uitzien, valt de fout niet vanzelf op. Neem $\log 100 = 2$ en $\ln 100 \approx 4{,}605$. Het verschil zit in het grondtal: $10^2 = 100$ en $e^{4{,}605} \approx 100$.

Een veilige controle is om te kijken of de uitkomst past bij het grondtal. Bij een hoger grondtal is de exponent kleiner, want je hebt grotere stappen. Omdat $e \approx 2{,}718$ kleiner is dan 10, is $\ln x$ voor $x > 1$ altijd groter dan $\log x$. De verhouding tussen de twee is vast: $\ln x \approx 2{,}303 \cdot \log x$. Dat komt uit de formule in de volgende paragraaf.

## Het grondtal veranderen

Stel je wilt $\log_2 10$ bepalen. Noem $x = \log_2 10$, zodat $2^x = 10$. Neem aan beide kanten de logaritme in een grondtal dat je rekenmachine wel heeft, bijvoorbeeld $\ln$. Dat mag, want een logaritme van twee gelijke getallen is gelijk:

$$
\ln\left(2^x\right) = \ln 10.
$$

Met de machtsregel haal je de exponent naar beneden:

$$
x \cdot \ln 2 = \ln 10, \qquad \text{dus} \qquad x = \frac{\ln 10}{\ln 2}.
$$

Dit werkt voor elk grondtal. In het algemeen geldt voor elk toegestaan nieuw grondtal $c$:

:::formula Grondtal veranderen
$$
\log_g a = \frac{\log_c a}{\log_c g} \qquad (a > 0,\ g > 0,\ g \ne 1,\ c > 0,\ c \ne 1).
$$
In het bijzonder: $\log_g a = \dfrac{\ln a}{\ln g} = \dfrac{\log a}{\log g}$.
:::

De noemer is nooit nul, want $\log_c g = 0$ zou $g = 1$ betekenen en dat is als grondtal uitgesloten. De uitkomst hangt niet af van welke toets je kiest: $\ln 10 / \ln 2$ en $\log 10 / \log 2 = 1/\log 2$ geven allebei $\approx 3{,}3219$.

:::example Een logaritme met de rekenmachine
Bereken $\log_2 10$ op twee decimalen.

**Stap 1.** Pas de formule toe: $\log_2 10 = \dfrac{\ln 10}{\ln 2}$.

**Stap 2.** Reken: $\ln 10 \approx 2{,}302585$ en $\ln 2 \approx 0{,}693147$.

**Stap 3.** Deel: $\dfrac{2{,}302585}{0{,}693147} \approx 3{,}3219$. Rond af op twee decimalen: $3{,}32$.

**Controle.** $2^{3{,}32} \approx 9{,}99$. Dat is dicht genoeg bij 10 voor twee decimalen.
:::

:::tip Behoud tussencijfers
Rond $\ln 10$ en $\ln 2$ niet af voor je deelt. Met $2{,}30 / 0{,}69 = 3{,}33$ ben je al een paar honderdsten verkeerd. Laat de rekenmachine het hele quotiënt in één keer uitrekenen, of bewaar tussenresultaten in het geheugen, en rond pas aan het eind af.
:::

Uit de formule volgen nog twee nuttige gevolgen. Verwissel je grondtal en argument, dan krijg je het omgekeerde: $\log_a g = \dfrac{1}{\log_g a}$, dus $\log_g a \cdot \log_a g = 1$. En bij een grondtal dat een macht is van een ander getal, zoals $\log_8 32$, kun je beide naar de gemeenschappelijke basis brengen: $8 = 2^3$ en $32 = 2^5$, dus $\log_8 32 = \dfrac{\log_2 32}{\log_2 8} = \dfrac{5}{3}$.

:::example Een breuk via een gemeenschappelijke basis
Bereken $\log_8 32$ exact.

**Stap 1.** Schrijf beide getallen als macht van 2: $8 = 2^3$ en $32 = 2^5$.

**Stap 2.** Verander naar grondtal 2: $\log_8 32 = \dfrac{\log_2 32}{\log_2 8} = \dfrac{5}{3}$.

**Controle.** $8^{5/3} = \left(8^{1/3}\right)^5 = 2^5 = 32$. Klopt.
:::

{{ exercises: 26-014, 26-015, 26-016, 26-017, 26-034, 26-035 }}

## Wat je hieruit meeneemt

Alle logaritmen zijn tot op een constante factor gelijk: elke logaritme is een vast veelvoud van elke andere. Daarom is het in principe genoeg om één logaritmetoets te hebben. Dat verklaart ook waarom Napier, Briggs en Bürgi vrij konden kiezen tussen grondtallen: de tabel in een ander grondtal is alleen met een vaste factor te herschalen. In les 6 zie je waarom het grondtal 10 de praktische winnaar werd voor rekentabellen, en in les 7 waarom $e$ de natuurlijke keuze is bij groeivergelijkingen.
