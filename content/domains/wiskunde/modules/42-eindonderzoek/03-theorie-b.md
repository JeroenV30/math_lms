# Een groepsverschil onderzoeken

De primaire vraag van dit hoofdstuk is een tweegroepenvergelijking: hoeveel verschilt het gemiddelde lichaamsgewicht van Adélie-mannen van dat van Adélie-vrouwen? In module 39 leerde je hoe je zo'n vraag met een toets beantwoordt. Hier doe je het met echte gegevens en let je op alles wat in een leerboekvoorbeeld meestal vanzelf klopt: de selectie, de aannames, de grootte van het effect en het aantal vragen dat je tegelijk stelt.

## De analysepopulatie en de beschrijving

Filter eerst op soort Adelie en daarna op geslacht. Alle 52 Adélie-dieren hebben een geldig gewicht en een geldig geslacht, verdeeld over 26 mannen en 26 vrouwen. Maak per groep een stippendiagram of boxplot (les 3) en kijk naar vorm en extreme waarden. Een tabel met gemiddelden vervangt die controle niet.

| Groep | n | Gemiddelde (g) | s (g) | Mediaan (g) |
|---|---|---|---|---|
| Adélie man | 26 | 3995,19 | 392,49 | 3987,5 |
| Adélie vrouw | 26 | 3334,62 | 282,50 | 3337,5 |

{{ exercises: 42-009, 42-010, 42-011 }}

## Het Welch-model

Toets $H_0:\mu_\text{man}-\mu_\text{vrouw}=0$ tegen het tweezijdige alternatief $H_1:\mu_\text{man}-\mu_\text{vrouw}\neq 0$. Je gebruikt de **Welch-toets** omdat je twee ongepaarde groepen vergelijkt en niet hoeft aan te nemen dat de varianties gelijk zijn. Dat laatste is hier geen overbodige voorzichtigheid: de standaardafwijkingen zijn 392,49 g en 282,50 g, en een verhouding van bijna 1,4 is bij zulke kleine groepen niet zonder meer als "gelijk" te beschouwen. De modelvoorwaarden uit module 39 blijven van toepassing, inclusief onafhankelijkheid van de dieren.

De toetsgrootheid is het verschil gedeeld door zijn standaardfout. Voor de standaardfout tel je de **varianties van de gemiddelden** op, niet de standaardafwijkingen:

$$
\hat\Delta=\bar x_1-\bar x_2,\qquad
SE(\hat\Delta)=\sqrt{\frac{s_1^2}{n_1}+\frac{s_2^2}{n_2}},\qquad
t=\frac{\hat\Delta}{SE(\hat\Delta)}.
$$

:::example De Welch-vergelijking, stap voor stap
Het verschil in gemiddelden is $\hat\Delta=3995{,}1923-3334{,}6154=660{,}5769$ g. Je rekent met de **onafgeronde** groepsstandaardafwijkingen $s_\text{man}=392{,}4933$ en $s_\text{vrouw}=282{,}4957$:

$$
SE=\sqrt{\frac{392{,}4933^2}{26}+\frac{282{,}4957^2}{26}}
=\sqrt{5925{,}04+3069{,}38}\approx 94{,}84\ \text{g}.
$$

De toetsgrootheid is $t=660{,}5769/94{,}8389\approx 6{,}965$. De Welch-Satterthwaite-benadering voor de vrijheidsgraden,

$$
\nu=\frac{\left(\frac{s_1^2}{n_1}+\frac{s_2^2}{n_2}\right)^2}{\frac{(s_1^2/n_1)^2}{n_1-1}+\frac{(s_2^2/n_2)^2}{n_2-1}},
$$

geeft $\nu\approx 45{,}42$, een niet-geheel getal; dat is gewoon zoals het hoort. Het tweezijdige p-getal onder dit model is ongeveer $1{,}09\cdot10^{-8}$. Een berekend p-getal is nooit letterlijk nul, ook wanneer software op weinig decimalen "0,000" toont.
:::

{{ exercises: 42-012, 42-013 }}

Dat het p-getal uitzonderlijk klein is, zegt nog weinig over wat je wilt weten. Zij beantwoordt de vraag "hoe verrassend zijn deze gegevens als het verschil in werkelijkheid nul was?". Wat je eigenlijk wilt weten is **hoe groot** het verschil is en **hoe onzeker** die schatting is. Daarvoor dient een betrouwbaarheidsinterval.

## Interval en effectgrootte

Het 95%-betrouwbaarheidsinterval voor het verschil is $\hat\Delta\pm t_{0{,}975;\nu}\cdot SE$. Met $\nu=45{,}42$ is de kritieke waarde ongeveer $2{,}0136$, en de marge dus $2{,}0136\cdot 94{,}84\approx 190{,}97$ g. Het interval loopt van ongeveer 469,61 g tot 851,54 g.

Lees dat interval correct. Het zegt *niet* dat het werkelijke verschil met 95% kans tussen die grenzen ligt: het werkelijke verschil is geen toevalsgrootheid. Het zegt dat de procedure, vaak herhaald op nieuwe steekproeven uit hetzelfde model, in 95% van de gevallen een interval oplevert dat het werkelijke verschil bevat (module 38). Praktisch betekent het hier: onder het model passen verschillen van 470 g tot 850 g bij de gegevens, en een verschil van nul past er niet bij.

:::definition Effectgrootte
Een groepsverschil in gram heeft een eenheid, maar zegt niet of het groot is *ten opzichte van de spreiding*. Een gestandaardiseerde effectgrootte deelt het verschil door een standaardafwijking. De bekendste is **Cohen's $d$**:

$$
d=\frac{\bar x_1-\bar x_2}{s_p},\qquad s_p=\sqrt{\frac{(n_1-1)s_1^2+(n_2-1)s_2^2}{n_1+n_2-2}}.
$$

Hier is $s_p\approx 341{,}95$ g en dus $d\approx 660{,}58/341{,}95\approx 1{,}93$: het verschil is bijna twee standaardafwijkingen groot. Vuistregels noemen $d=0{,}2$ klein, $0{,}5$ middelgroot en $0{,}8$ groot, maar de context beslist: een verschil van 0,3 standaardafwijking in lichaamsgewicht kan biologisch belangrijk zijn, een verschil van 2 standaardafwijkingen in een willekeurige schaalscore misschien niet.
:::

{{ exercises: 42-029, 42-030 }}

Het is leerzaam wat er gebeurt met de grootte van het verschil, de zekerheid en het effect wanneer je dezelfde vergelijking bij de andere soorten uitvoert. Gebruik steeds dezelfde procedure:

| Soort | n man / vrouw | Verschil man − vrouw (g) | SE (g) | $t$ | $\nu$ | p | 95%-interval (g) |
|---|---|---|---|---|---|---|---|
| Adélie | 26 / 26 | 660,58 | 94,84 | 6,965 | 45,42 | $1{,}1\cdot10^{-8}$ | [469,61; 851,54] |
| Chinstrap | 12 / 12 | 404,17 | 107,53 | 3,759 | 16,49 | $0{,}0016$ | [176,77; 631,56] |
| Gentoo | 21 / 20 | 724,46 | 68,61 | 10,559 | 36,92 | $1{,}0\cdot10^{-12}$ | [585,44; 863,49] |

Bij alle drie de soorten zijn de mannen zwaarder, maar de grootte verschilt. In relatieve zin is het verschil bij Adélie bijna 20% van het vrouwengemiddelde (660,58/3334,62), bij Gentoo ruim 15% en bij Chinstrap ruim 11%. Het interval bij Chinstrap is het breedst, wat past bij de kleinste groepen (12 per groep). Bovendien is de kritieke waarde groter (ongeveer 2,11 tegen 2,01 bij Adélie): bij weinig vrijheidsgraden heeft de t-verdeling dikkere staarten.

:::tip Gelijke groepsgroottes
Bij Adélie en Chinstrap zijn beide groepen even groot. Dan is de standaardfout van de Welch-toets gelijk aan die van de gepoolde t-toets, en dus ook de $t$-waarde (6,965 bij Adélie). Alleen de vrijheidsgraden verschillen: 52 − 2 = 50 voor de gepoolde toets, ongeveer 45,42 voor Welch. Het interval en het p-getal verschillen daardoor nauwelijks. Bij ongelijke groepen én ongelijke varianties kan het verschil groot zijn, en dan is Welch de veilige keuze.
:::

{{ exercises: 42-031 }}

## Van resultaat naar begrensde conclusie

Een goede conclusie noemt drie dingen: het **effect** met eenheid, de **onzekerheid** daarvan, en de **begrenzing** door het ontwerp. Voor deze analyse luidt zo'n conclusie bijvoorbeeld:

> "In de gemeten Adélie-groep uit 2009 waren mannen gemiddeld ongeveer 661 g zwaarder dan vrouwen. Onder een onafhankelijk Welch-model is het 95%-interval voor het verschil ongeveer 470 tot 852 g. De veldselectie en mogelijke afhankelijkheid begrenzen generalisatie; dit is geen experiment naar het effect van geslacht."

Let op wat er niet staat. Er staat niet dat mannen "verschillen omdat ze man zijn", want geslacht is niet door de onderzoeker toegewezen. Er staat niet dat dit voor alle pinguïns geldt. En er staat niet "significant" zonder het effect te noemen, want een resultaat kan statistisch overtuigend en tegelijk praktisch onbelangrijk zijn, of omgekeerd.

{{ exercises: 42-014, 42-015 }}

## Meerdere vragen tegelijk

Tot nu toe stelden we één vraag. Een onderzoeker die gegevens heeft, stelt er zelden één. Je kunt het geslachtsverschil bij drie soorten bekijken, voor vier verschillende maten (snavellengte, snaveldiepte, vleugellengte, gewicht): dat zijn $3\times4=12$ vergelijkingen. Dit zijn de uitkomsten van de Welch-toets voor alle twaalf:

| Soort | Maat | Verschil man − vrouw | $t$ | $\nu$ | p |
|---|---|---|---|---|---|
| Adélie | snavellengte (mm) | 3,15 | 5,618 | 49,0 | $9{,}0\cdot10^{-7}$ |
| Adélie | snaveldiepte (mm) | 1,50 | 5,437 | 49,8 | $1{,}6\cdot10^{-6}$ |
| Adélie | vleugellengte (mm) | 5,46 | 3,499 | 48,4 | $0{,}0010$ |
| Adélie | gewicht (g) | 660,58 | 6,965 | 45,4 | $1{,}1\cdot10^{-8}$ |
| Chinstrap | snavellengte (mm) | 4,09 | 4,283 | 18,8 | $4{,}1\cdot10^{-4}$ |
| Chinstrap | snaveldiepte (mm) | 1,59 | 5,166 | 18,2 | $6{,}2\cdot10^{-5}$ |
| Chinstrap | vleugellengte (mm) | 7,50 | 3,117 | 18,8 | $0{,}0057$ |
| Chinstrap | gewicht (g) | 404,17 | 3,759 | 16,5 | $0{,}0016$ |
| Gentoo | snavellengte (mm) | 4,62 | 6,707 | 38,8 | $5{,}6\cdot10^{-8}$ |
| Gentoo | snaveldiepte (mm) | 1,47 | 7,590 | 34,8 | $6{,}9\cdot10^{-9}$ |
| Gentoo | vleugellengte (mm) | 9,40 | 5,751 | 35,4 | $1{,}6\cdot10^{-6}$ |
| Gentoo | gewicht (g) | 724,46 | 10,559 | 36,9 | $1{,}0\cdot10^{-12}$ |

Zo'n tabel is verleidelijk: alle twaalf p-waarden zijn kleiner dan 0,05. Maar hoe vaak mag je een kans van 5% op een vals alarm nemen? Bij één toets met een ware nulhypothese heb je 5% kans op een vals alarm. Bij $m$ onafhankelijke toetsen met alleen ware nulhypothesen is de kans op *minstens één* vals alarm

$$
1-(1-\alpha)^m,\qquad\text{dus voor }m=3:\ 1-0{,}95^3\approx 0{,}1426,\qquad m=12:\ 1-0{,}95^{12}\approx 0{,}4596.
$$

Dat is de **familiegewijze foutenkans**: hoe meer vragen je stelt, hoe groter de kans dat toeval er één opvallende uitkomst bij levert. Wie twaalf toetsen doet en alleen de kleinste p meldt, rapporteert geen bevinding maar een selectie. Dat is de kern van wat *p-hacken* heet.

De eenvoudigste correctie is die van **Bonferroni**: toets elke vraag op niveau $\alpha/m$, of vermenigvuldig elke p met $m$ (en kap af op 1). Voor 12 toetsen is de drempel $0{,}05/12\approx 0{,}0042$. Elf van de twaalf p-waarden blijven daaronder; alleen de vleugellengte-vergelijking bij Chinstrap (p = 0,0057) valt erbuiten. Zo'n correctie is conservatief (module 39: je verliest onderscheidend vermogen), maar het signaal is duidelijk: bij Chinstrap is het verschil in vleugellengte tussen de geslachten minder stevig dan de andere elf, ook al is het zonder correctie "significant".

:::example Een vergelijking die je pas achteraf kiest
Stel dat je zonder duidelijke vraag het gewicht van Adélie-dieren op de drie eilanden vergelijkt. Er zijn drie paren: Biscoe–Dream, Biscoe–Torgersen en Dream–Torgersen. De Welch-p-waarden zijn respectievelijk 0,2354, 0,0455 en 0,2336. Alleen Biscoe–Torgersen (verschil 368,75 g, 95%-interval [8,00; 729,50] g) haalt de 0,05-grens.

Als je alleen dát paar zou rapporteren ("Adélie's op Biscoe wegen significant meer dan op Torgersen, p = 0,045"), is dat misleidend: er waren drie vergelijkingen. Met Bonferroni is de drempel $0{,}05/3\approx 0{,}0167$ en de gecorrigeerde p-waarde $3\cdot0{,}0455\approx 0{,}136$. Het verschil blijft een mogelijk interessant signaal, maar het is vooral een nieuwe, vooraf te formuleren vraag voor een volgend onderzoek, geen bevestigde bevinding.
:::

{{ exercises: 42-032, 42-033, 42-034, 42-035 }}

:::warning Vooraf versus achteraf
Het verschil tussen een bevestigende en een verkennende analyse is niet de gebruikte formule, maar het moment waarop je de vraag bepaalde. Leg je vraag, je selectie en je toets vast voordat je de uitkomst ziet. Je verkenningen mag je altijd rapporteren, mits je ze zo noemt en het aantal gemaakte vergelijkingen vermeldt.
:::

## Rapporteren van een toets

Wetenschappelijke tijdschriften gebruiken vaste formats, zoals die van de American Psychological Association (APA). Voor deze analyse luidt een APA-achtige rapportage: "Adélie-mannen waren zwaarder dan Adélie-vrouwen, Welch-$t(45{,}42)=6{,}97$, $p<0{,}001$, $d=1{,}93$, 95%-BI van het verschil [469,61; 851,54] g." Let op de ingrediënten: de toetsgrootheid met vrijheidsgraden, een p-waarde (bij zeer kleine p als $<0{,}001$, niet als 0), de effectgrootte en het interval met eenheid. Vermeld ook de groepsgroottes en de gemiddelden en standaardafwijkingen, zodat een lezer het kan narekenen.

De [NIST-Welch-documentatie](https://www.itl.nist.gov/div898/handbook/eda/section3/eda353.htm) geeft de gebruikte formules. De lokale referentieanalyse (`analyse.py`) reproduceert de getallen uit het CSV-bestand; zij is geen bewijs dat de velddata aan iedere modelaanname voldoen.
