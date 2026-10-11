# Proporties en steekproefgrootte

Tot nu toe ging het over gemiddelden van metingen. Veel vragen zijn echter ja-nee-vragen:
steunt iemand een voorstel, is een product defect, heeft een patiënt de
behandeling doorstaan? Het gezochte getal is dan een **proportie** $p$, het aandeel
in de populatie met de eigenschap. In deze les construeer je er een interval voor,
en je draait de redenering om: hoeveel waarnemingen heb je nodig voor een gewenste nauwkeurigheid?

## De steekproefverdeling van een proportie

Codeer elke waarneming als 1 (ja) of 0 (nee). Een proportie is dan niets anders dan
een gemiddelde van nullen en enen, en alles uit de vorige lessen is toepasbaar. Een
enkele waarneming heeft gemiddelde $p$ en variantie $p(1-p)$; die variantie volgt uit
de Bernoulli-verdeling uit module 37. De steekproefproportie $\hat p=k/n$, met $k$ het aantal
successen, heeft daarom

$$
E(\hat p)=p,\qquad SE(\hat p)=\sqrt{\frac{p(1-p)}{n}}.
$$

Omdat $p$ onbekend is, vervang je haar in de standaardfout door $\hat p$. Dat levert de
geschatte standaardfout $\sqrt{\hat p(1-\hat p)/n}$. De centrale limietstelling geldt
ook hier: bij voldoende grote $n$ is $\hat p$ bij benadering normaal verdeeld.

{{ exercises: 38-015, 38-016 }}

### Wanneer is de normale benadering redelijk?

Bij een proportie nabij 0 of 1 is de verdeling van $\hat p$ scheef, en de
normale benadering faalt. Een veelgebruikte vuistregel: zowel $n\hat p$ als $n(1-\hat p)$ moeten ten
minste ongeveer 10 zijn. Uit 10 personen met 0 successen valt niets op te maken
met een normale marge: de plug-in standaardfout is dan nul, terwijl de ware
$p$ niet zeker nul is. Voor zulke gevallen bestaan betere intervallen, zoals het
Wilson-interval of exacte methoden (Clopper en Pearson).

{{ exercise: 38-018 }}

## Het betrouwbaarheidsinterval voor $p$

Dezelfde bouwstenen als bij het gemiddelde geven

$$
\hat p\pm z^*\sqrt{\frac{\hat p(1-\hat p)}{n}}.
$$

Hier gebruik je $z^*$ en niet $t^*$, omdat de spreiding van een proportie
helemaal door $p$ zelf wordt bepaald: er is geen aparte $\sigma$ die je moet
schatten uit een tweede grootheid.

:::example Een peiling
In een steekproef van $n=400$ zegt 60% ($k=240$) ja.

Stap 1: $\hat p=240/400=0{,}6$.
Stap 2: $SE=\sqrt{0{,}6\cdot0{,}4/400}=\sqrt{0{,}0006}\approx0{,}0245$.
Stap 3: $m=1{,}96\cdot0{,}0245\approx0{,}048$.
Stap 4: het interval is $0{,}6\pm0{,}048=[0{,}552;\,0{,}648]$, dus
ongeveer 55% tot 65%.

Een krant zou dit schrijven als "60% ja, met een foutmarge van bijna 5 procentpunt".
Die foutmarge zegt alleen iets over toevalsfout, niet over of de respondenten wel een
goede doorsnede zijn.
:::

{{ exercise: 38-036 }}

## De foutmarge bepaalt de steekproefgrootte

Vaak ontwerp je de steekproef vooraf: je wilt een foutmarge van hoogstens $E$ en
je vraagt hoeveel waarnemingen dat kost. De marge voor een gemiddelde bij bekende
$\sigma$ is $E=z^*\sigma/\sqrt n$. Oplossen naar $n$ geeft

$$
n\ge\left(\frac{z^*\sigma}{E}\right)^2.
$$

Voor een proportie volgt uit $E=z^*\sqrt{p(1-p)/n}$

$$
n\ge\frac{(z^*)^2\,p(1-p)}{E^2}.
$$

Beide uitkomsten rond je **altijd naar boven** af. Een kleinere $n$ zou de gewenste marge
overschrijden; wie 96,04 afrondt naar 96, belooft een nauwkeurigheid die hij niet haalt.

:::example Een gemiddelde met bekende σ
Je wilt een marge van hoogstens 2 bij $\sigma=10$ en 95% dekking. Dan
$n\ge(1{,}96\cdot10/2)^2=9{,}8^2=96{,}04$, dus $n=97$.
:::

{{ exercise: 38-017 }}

### De veilige keuze p = 0,5

Voor een proportie heb je $p$ nodig voordat je hebt gemeten. Daarom gebruik je
vaak $p=0{,}5$: dan is $p(1-p)=0{,}25$ zo groot mogelijk, en dus is de berekende $n$
zo groot mogelijk. Met $p=0{,}5$ ben je altijd aan de veilige kant. Heb je een goede
eerdere schatting van $p$, bijvoorbeeld 0,3, dan kun je met een kleinere steekproef
volstaan.

:::example Hoeveel mensen voor een marge van 3 procentpunt?
Bij $p=0{,}5$, $E=0{,}03$ en $z^*=1{,}96$:

$$
n\ge\frac{1{,}96^2\cdot0{,}25}{0{,}03^2}=\frac{0{,}9604}{0{,}0009}\approx1067{,}1.
$$

Afronden naar boven geeft $n=1068$. Dit is ook de reden dat veel peilingen
ongeveer duizend mensen ondervragen: bij die omvang is de marge bij 95% ongeveer
3 procentpunt, onafhankelijk van de grootte van het land.
:::

{{ exercises: 38-037, 38-038 }}

## Het effect van verviervoudigen

Omdat $n$ onder de wortel in de marge staat, is $E\propto1/\sqrt n$. De marge halveren
vraagt dus niet twee maar **vier** keer zoveel waarnemingen; de marge delen door 10
kost honderd keer zoveel. Zie het ook omgekeerd: de formule $n\propto1/E^2$ zegt dat
elke extra procentpunt precisie sterker oploopt in kosten naarmate je al nauwkeurig bent.

| Foutmarge (95%, $p=0{,}5$) | Benodigde $n$ |
|---|---|
| 5 procentpunt | 385 |
| 3 procentpunt | 1068 |
| 2 procentpunt | 2401 |
| 1 procentpunt | 9604 |

Wie van 3 naar 1,5 procentpunt wil, heeft ruim 4000 mensen nodig in plaats van ongeveer 1000.
Dubbel zo veel waarnemingen geeft slechts een marge die met een factor $\sqrt2\approx1{,}41$
daalt, dus ongeveer 29% kleiner.

{{ exercise: 38-035 }}

:::warning Foutmarge halveren door n te verdubbelen
Een veelgemaakte fout is te denken dat $2n$ de marge halveert. De wortelwet
zegt iets anders: $n\to2n$ geeft $E\to E/\sqrt2\approx0{,}71E$. Pas bij $4n$ wordt de marge
precies de helft.
:::

## De berekende omvang is een ondergrens

De formules veronderstellen een enkelvoudige aselecte steekproef, onafhankelijke
metingen en volledige respons. In de praktijk moet je meer mensen benaderen dan het
berekende $n$: een respons van 40% betekent dat je 2,5 keer zoveel mensen
moet aanschrijven. Voor een gemiddelde ontbreekt bovendien $\sigma$ vaak: dan gebruik je een schatting uit eerder
of vergelijkbaar onderzoek, of een kleine proefstudie. Die schatting blijft een aanname.
