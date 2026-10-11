# Populatie en steekproef

Tot nu toe behandelde je de dataset als het geheel: alle waarden die er zijn. Vaak is dat niet zo. Een peilingbureau ondervraagt duizend kiezers, geen miljoenen. Een fabrikant weegt twintig pakjes uit de dagproductie, niet alle honderdduizend. Dezelfde getallen kunnen dus óf de volledige verzameling zijn die je wilt beschrijven, óf een **steekproef** uit een grotere **populatie**. De berekening van de variantie hangt van die vraag af, en in deze les zie je waarom.

## Twee formules voor één idee

Voor een **populatie** met $n$ waarden en gemiddelde $\mu$ deel je de som van de gekwadrateerde afwijkingen door $n$. Voor een **steekproef** met gemiddelde $\bar{x}$ deel je door $n-1$:

$$
\sigma^2 = \frac{1}{n}\sum_{i=1}^{n}(x_i-\mu)^2, \qquad s^2 = \frac{1}{n-1}\sum_{i=1}^{n}(x_i-\bar{x})^2.
$$

De standaardafwijkingen zijn de wortels: $\sigma = \sqrt{\sigma^2}$ en $s = \sqrt{s^2}$. We gebruiken Griekse letters voor kenmerken van de populatie en gewone letters voor wat je uit een steekproef berekent.

:::example Dezelfde getallen, twee uitkomsten
Voor 2, 4, 4, 4, 5, 5, 7, 9 is de som van de gekwadrateerde afwijkingen 32 en $n = 8$. Als populatie: $\sigma^2 = 32/8 = 4$ en $\sigma = 2$. Als steekproef: $s^2 = 32/7 \approx 4{,}571$ en $s \approx 2{,}138$. Het verschil is geen rekenfout. Je berekent twee verschillende grootheden, voor twee verschillende doelen.
:::

:::example Vijf waarden als steekproef
Neem aan dat 5, 7, 7, 9, 12 een steekproef is (bijvoorbeeld vijf willekeurig gekozen reistijden). In les 4 vond je als som van de gekwadrateerde afwijkingen 28, met $\bar{x}=8$. Dan is
$$
s^2 = \frac{28}{4} = 7, \qquad s = \sqrt{7} \approx 2{,}65.
$$
Als populatie had je $28/5 = 5{,}6$ en $\sigma \approx 2{,}37$ gekregen.
:::

## Waarom n − 1? Een eerlijke uitleg

Het is begrijpelijk dat deze correctie willekeurig lijkt. Er is een korte, eerlijke verklaring, en die begint bij een gegeven. In een steekproef ken je het populatiegemiddelde $\mu$ niet; je schat het met het steekproefgemiddelde $\bar{x}$. En dat steekproefgemiddelde ligt per definitie midden tussen de steekproefwaarden: het is het getal waarvoor de som van de gekwadrateerde afwijkingen **het kleinst** is. De afwijkingen van $\bar{x}$ zijn dus gemiddeld kleiner dan de afwijkingen van het echte, onbekende $\mu$. Een steekproef onderschat daardoor systematisch een beetje de spreiding van de populatie. Delen door $n-1$ in plaats van $n$ maakt dat precies goed, gemiddeld over alle mogelijke steekproeven.

Een kleine populatie laat dat zien. Neem de populatie $\{2, 4, 6\}$ met $\mu=4$, $\sigma^2 = (4+0+4)/3 = 8/3 \approx 2{,}67$. Trek met teruglegging alle $3\times3=9$ steekproeven van grootte 2 en bereken per steekproef de som van gekwadrateerde afwijkingen van het eigen gemiddelde:

| Steekproef | aantal | gemiddelde | som kwadraten |
|---|---|---|---|
| (2, 2), (4, 4), (6, 6) | 3 | 2, 4, 6 | 0 |
| (2, 4), (4, 2), (4, 6), (6, 4) | 4 | 3 of 5 | 2 |
| (2, 6), (6, 2) | 2 | 4 | 8 |

Het gemiddelde van die som over alle negen steekproeven is $(3\cdot0+4\cdot2+2\cdot8)/9 = 24/9 = 8/3$. Delen door $n=2$ geeft gemiddeld $(8/3)/2 = 4/3$, de helft van de echte $\sigma^2=8/3$: te laag. Delen door $n-1=1$ geeft gemiddeld precies $8/3$. Dat is wat **zuiver** betekent: gemiddeld over veel steekproeven is $s^2$ gelijk aan $\sigma^2$.

Voor wie het algebraïsch wil zien: voor elke dataset geldt
$$
\sum (x_i-\mu)^2 = \sum (x_i-\bar{x})^2 + n(\bar{x}-\mu)^2,
$$
dus de som van kwadraten rond het echte $\mu$ is altijd groter dan rond $\bar{x}$, met het verschil $n(\bar{x}-\mu)^2$. Rekenen met de verwachting van dat verschil, een kwestie van module 38, levert dat de verwachte som rond $\bar{x}$ gelijk is aan $(n-1)\sigma^2$.

:::definition Vrijheidsgraden, kort
Wie $\bar{x}$ en $n-1$ van de afwijkingen kent, kan de laatste afwijking uitrekenen, want ze tellen op tot nul. Er zijn dus maar $n-1$ afwijkingen 'vrij'. Dat aantal heet het aantal **vrijheidsgraden** en je ziet het terug in de noemer.
:::

## Wat de correctie wel en niet doet

Een paar nuances houden je eerlijk. Bij een aselecte steekproef van onafhankelijke, gelijk verdeelde waarnemingen is $s^2$ een zuivere schatter van de populatievariantie. Dat maakt $s$ zelf niet automatisch een zuivere schatter van $\sigma$: de wortel van een gemiddelde is niet het gemiddelde van de wortels. Het verschil is voor grote $n$ klein. Verder repareert de noemer $n-1$ geen **vertekende selectie**: wie alleen voorbijgangers bij een station ondervraagt, krijgt een scheef beeld van alle inwoners, hoe netjes je ook deelt. En bij grote $n$ maakt delen door $n$ of $n-1$ weinig uit: bij $n=1000$ is het verschil 0,1%.

Voor $n=1$ kun je de steekproefstandaardafwijking niet berekenen: de noemer is nul. Dat is logisch: met één waarneming heb je geen enkele aanwijzing voor spreiding. De populatievariant van één waarde is wel gedefinieerd (en nul), omdat je dan aanneemt dat de hele populatie uit één waarde bestaat.

:::warning Welke toets op je rekenmachine?
Rekenmachines en spreadsheets tonen vaak twee standaardafwijkingen: $\sigma_x$ (delen door $n$) en $s_x$ (delen door $n-1$). In Excel is dat STDEV.P tegenover STDEV.S. Kies bewust. De vraag 'is dit de hele populatie of een steekproef?' bepaalt welke je gebruikt. Verwissel je ze, dan klopt je antwoord op de laatste decimalen niet.
:::

{{ exercises: 24-019, 24-020, 24-021, 24-042, 24-043 }}

Voor verdere achtergrond over spreidingsmaten, zoals de gemiddelde absolute afwijking, zie het [NIST-handboek over maten van spreiding](https://www.itl.nist.gov/div898/handbook/eda/section3/eda356.htm).
