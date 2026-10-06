# Definitie en domein

In de vorige les kwam de vraag "tot welke macht?" al voorbij. Hier maken we die vraag precies. Wat betekent $\log_2 32$ en wat betekent $\log_3 81$? En welke vragen hebben *geen* antwoord? Een goede definitie vertelt je beide dingen: wat een symbool betekent, en voor welke invoer het betekenis heeft.

:::question Tot welke macht?
Bij $2^x = 32$ is de oplossing $x = 5$, want $2^5 = 32$. Bedenk nu zelf: wat is de oplossing van $2^x = 0$? En van $2^x = -4$? En van $1^x = 5$? Probeer elke vraag te beantwoorden en kijk waar het misgaat.
:::

## De definitie

:::definition Logaritme
Voor een grondtal $g > 0$ met $g \ne 1$ en een getal $a > 0$ is $\log_g a$ de **exponent** waartoe je $g$ moet verheffen om $a$ te krijgen:

$$
\log_g a = x \iff g^x = a.
$$

Je leest $\log_g a$ als "de logaritme van $a$ met grondtal $g$", of kort als "g-log a". Het getal $a$ heet het **argument**.
:::

De definitie is een **dubbele pijl**: de twee kanten zeggen precies hetzelfde, in twee talen. De linkerkant is de taal van logaritmen, de rechterkant die van machten. Wie een logaritme niet direct ziet, vertaalt hem naar een macht. Zo is $\log_2 32 = 5$ een andere manier om te zeggen dat $2^5 = 32$, en $\log_3 81 = 4$ betekent $3^4 = 81$.

:::example Van logaritme naar macht
Bereken $\log_5 125$.

**Stap 1.** Noem de uitkomst $x$, dus $x = \log_5 125$.

**Stap 2.** Vertaal naar een macht: $5^x = 125$.

**Stap 3.** Denk aan machten van 5: $5^1 = 5$, $5^2 = 25$, $5^3 = 125$. Dus $x = 3$.

**Controle.** $5^3 = 5 \cdot 5 \cdot 5 = 125$. Klopt.
:::

Merk op dat je bij zo'n berekening geen formule toepast, maar een vraag stelt: "tot welke macht moet ik 5 verheffen om 125 te krijgen?" Als je dat tegen jezelf hardop zegt, heb je de definitie begrepen.

## Waarom die voorwaarden?

De definitie bevat drie voorwaarden: $g > 0$, $g \neq 1$ en $a > 0$. Ze staan er niet voor de sier. Elke voorwaarde voorkomt een situatie waarin "de" exponent niet bestaat of niet uniek is.

**Het argument moet positief zijn.** Een positief grondtal tot een willekeurige reële macht levert altijd een positief getal op. Er is geen $x$ waarvoor $2^x = 0$, en geen $x$ waarvoor $2^x = -4$. Dus $\log_2 0$ en $\log_2(-4)$ bestaan niet. De grafiek van $2^x$ komt willekeurig dicht bij nul, maar bereikt het nooit.

**Het grondtal mag niet 1 zijn.** Voor elke exponent geldt $1^x = 1$. De vraag "$1^x = 5$" heeft dus geen oplossing, en de vraag "$1^x = 1$" heeft er oneindig veel. In beide gevallen is er geen eenduidige exponent, en dan is er ook geen bruikbare logaritme.

**Het grondtal moet positief zijn.** Bij een negatief grondtal, zoals $(-2)^x$, ontstaan voor veel exponenten (zoals $x = \tfrac{1}{2}$) geen reële getallen en springt het teken heen en weer. Daarom werkt men met $g > 0$.

:::warning Een logaritme mag wel negatief of nul zijn
Verwar het *argument* niet met de *uitkomst*. Het argument moet positief zijn; de uitkomst van een logaritme mag elk reëel getal zijn. Zo is $\log_2 \tfrac{1}{8} = -3$, want $2^{-3} = \tfrac{1}{8}$, en $\log_2 1 = 0$, want $2^0 = 1$.
:::

## Standaardwaarden en twee eigenschappen

Uit de definitie volgen een paar waarden die je altijd uit je hoofd moet kunnen:

- $\log_g 1 = 0$, want $g^0 = 1$, voor elk geldig grondtal.
- $\log_g g = 1$, want $g^1 = g$.
- $\log_g g^n = n$, want $g^n = g^n$.

Daarnaast volgen twee eigenschappen die laten zien dat de logaritme en de macht elkaars **inverse** zijn. Vertaal je eerst $x = \log_g a$ naar $g^x = a$, en vul je dan de eerste uitdrukking in de tweede in, dan krijg je

$$
g^{\log_g a} = a \qquad \text{en} \qquad \log_g\left(g^x\right) = x.
$$

De eerste zegt: de exponent waartoe je $g$ moet verheffen om $a$ te krijgen, gebruik je echt als exponent, en je krijgt $a$ terug. De tweede zegt: neem je eerst de macht en daarna de logaritme, dan ben je terug bij de exponent. De twee bewerkingen heffen elkaar op, net als optellen en aftrekken.

:::example Een macht en een logaritme heffen elkaar op
Bereken $2^{\log_2 7}$ en $\log_3 \left(3^{-4}\right)$.

**Stap 1.** In $2^{\log_2 7}$ is $\log_2 7$ de exponent waartoe je 2 moet verheffen om 7 te krijgen. Verhef je 2 tot die exponent, dan krijg je 7. Dus $2^{\log_2 7} = 7$.

**Stap 2.** In $\log_3\left(3^{-4}\right)$ vraag je tot welke macht je 3 moet verheffen om $3^{-4}$ te krijgen. Dat is $-4$. Dus $\log_3\left(3^{-4}\right) = -4$.

Je hoefde geen enkel getal uit te rekenen: de definitie deed het werk.
:::

## Breuken, negatieve uitkomsten en grondtallen kleiner dan 1

Logaritmen leveren niet altijd een geheel getal op. Voor $\log_4 2$ vraag je: tot welke macht moet je 4 verheffen om 2 te krijgen? Omdat $\sqrt{4} = 2$ en een wortel een macht met exponent $\tfrac{1}{2}$ is, geldt $4^{1/2} = 2$ en dus $\log_4 2 = \tfrac{1}{2}$. Op dezelfde manier is $\log_9 27$ een breuk: $9 = 3^2$ en $27 = 3^3$, dus $9^x = 27$ betekent $3^{2x} = 3^3$, dus $2x = 3$ en $x = \tfrac{3}{2}$.

:::example Een breuk als logaritme
Bereken $\log_9 27$.

**Stap 1.** Noem $x = \log_9 27$, dus $9^x = 27$.

**Stap 2.** Schrijf beide kanten als macht van 3: $9 = 3^2$, dus $9^x = (3^2)^x = 3^{2x}$, en $27 = 3^3$.

**Stap 3.** Vergelijk de exponenten: $2x = 3$, dus $x = \tfrac{3}{2}$.

**Controle.** $9^{3/2} = \left(\sqrt{9}\right)^3 = 3^3 = 27$. Klopt.
:::

Ook een grondtal tussen 0 en 1 is toegestaan. Voor $\log_{1/2} 8$ zoek je de $x$ met $\left(\tfrac{1}{2}\right)^x = 8$. Omdat $\tfrac{1}{2} = 2^{-1}$ is $\left(\tfrac{1}{2}\right)^x = 2^{-x}$, dus $2^{-x} = 2^3$ en $x = -3$. Een grondtal onder 1 geeft een **dalende** exponentiële functie, en daarmee een logaritme die voor argumenten groter dan 1 negatief is.

{{ exercises: 26-004, 26-005, 26-006, 26-007, 26-008, 26-031 }}

## Controleer altijd je antwoord

Een logaritme is een vraag, en bij elke vraag kun je het antwoord terug invullen. Reken na met de definitie: als je beweert dat $\log_g a = x$, dan moet $g^x$ gelijk zijn aan $a$. Die controle kost vijf seconden en vangt verwisselde grondtallen en tekenfouten. Zeg je bijvoorbeeld dat $\log_2 \tfrac{1}{8} = 3$, dan laat de controle $2^3 = 8 \ne \tfrac{1}{8}$ meteen zien dat het teken ontbreekt.
