# Tussen breuken en decimalen

Een kommagetal is een breuk in vermomming: 0,375 is "375 duizendsten". Omgekeerd kun je veel breuken als kommagetal schrijven, maar niet alle breuken netjes: $\tfrac13$ wordt $0{,}333\ldots$ en houdt nooit op. In deze les leer je in beide richtingen omzetten, ontdek je welke breuken een eindig kommagetal opleveren en welke niet, en leer je een repeterend kommagetal terug te schrijven als breuk. Daarbij gebruik je wat je in module 7 over vereenvoudigen en gelijkwaardige breuken hebt geleerd.

## 1. Van kommagetal naar breuk

Dit is de makkelijke richting, want een kommagetal **is** al een breuk met noemer 10, 100, 1000 of een andere macht van tien. Je hoeft die breuk alleen op te schrijven en daarna te vereenvoudigen.

:::theory Kommagetal naar breuk in twee stappen
1. **Lees het getal in de kleinste plaatswaarde.** Tel het aantal decimalen. Eén decimaal: noemer 10. Twee decimalen: noemer 100. Drie decimalen: noemer 1000. De teller is het getal zonder komma.
2. **Vereenvoudig.** Deel teller en noemer door hun grootste gemeenschappelijke deler. Omdat de noemer alleen de priemfactoren 2 en 5 bevat, hoef je alleen te kijken of de teller deelbaar is door 2 of 5.
:::

:::example Uitgewerkt voorbeeld: 0,375
1. Drie decimalen, dus noemer 1000: $0{,}375 = \tfrac{375}{1000}$.
2. Vereenvoudigen. $1000 = 2^3 \times 5^3$. De teller 375 is oneven, dus niet deelbaar door 2. Wel door 5: $375 = 3 \times 125 = 3 \times 5^3$. Deel teller en noemer door $125$:

$$
\frac{375}{1000} = \frac{375 : 125}{1000 : 125} = \frac{3}{8}
$$

Controle: $3 : 8 = 0{,}375$. Klopt.

Je mag ook in kleinere stappen vereenvoudigen als je de grootste deler niet direct ziet: $\tfrac{375}{1000} = \tfrac{75}{200} = \tfrac{15}{40} = \tfrac{3}{8}$, telkens door 5 gedeeld.
:::

:::example Uitgewerkt voorbeeld: getallen groter dan 1 en kleine getallen
**a.** $1{,}25$. Twee decimalen, noemer 100. Het getal zonder komma is 125: $1{,}25 = \tfrac{125}{100}$. Deel door 25: $\tfrac{5}{4}$. Als gemengd getal: $1\tfrac{1}{4}$. Dat klopt: 1,25 is één geheel en een kwart.

**b.** $0{,}04$. Twee decimalen: $\tfrac{4}{100}$. Deel door 4: $\tfrac{1}{25}$. Let op: het is niet $\tfrac{4}{10}$; dat zou 0,4 zijn. De nul na de komma is een plaatshouder.
:::

{{ exercises: 08-008, 08-011 }}

## 2. Van breuk naar kommagetal

De breukstreep betekent **delen**: $\tfrac{3}{8}$ is $3 : 8$. Dat heb je in module 7 gezien met de broden die eerlijk worden verdeeld. Er zijn twee methoden om een breuk als kommagetal te schrijven.

### Methode A: maak de noemer 10, 100 of 1000

Als je een gelijkwaardige breuk kunt vinden met noemer 10, 100 of 1000, ben je direct klaar.

$$
\frac{7}{20} = \frac{7 \times 5}{20 \times 5} = \frac{35}{100} = 0{,}35
\qquad
\frac{3}{8} = \frac{3 \times 125}{8 \times 125} = \frac{375}{1000} = 0{,}375
$$

Dit werkt goed bij noemers als 2, 4, 5, 8, 20, 25, 40, 50 en 125: getallen die je met een geheel getal kunt aanvullen tot een macht van tien.

### Methode B: deel teller door noemer

De methode die altijd werkt, is de staartdeling uit module 5, voortgezet na de komma. Je deelt eerst het gehele deel. Blijft er een rest over, dan schrijf je die als tienden (rest maal 10), deelt opnieuw, en zo verder.

:::example Uitgewerkt voorbeeld: 3 : 8 met een staartdeling
1. $3 : 8 = 0$, rest 3. Schrijf "0," en ga verder met tienden.
2. 3 eenheden zijn 30 tienden. $30 : 8 = 3$, rest 6. Eerste decimaal: 3.
3. 6 tienden zijn 60 honderdsten. $60 : 8 = 7$, rest 4. Tweede decimaal: 7.
4. 4 honderdsten zijn 40 duizendsten. $40 : 8 = 5$, rest 0. Derde decimaal: 5.
5. De rest is 0: de deling is klaar.

$$
\frac{3}{8} = 0{,}375
$$
:::

{{ widget: fraction numerator=3 denominator=8 shape=bar }}

Verander in de widget de noemer in 5, 20 en 25 en kijk naar het kommagetal: dat houdt netjes op. Verander de noemer daarna in 3, 6 of 7. Het kommagetal dat de widget toont, is dan afgebroken na vier decimalen: een **benadering**. De breuk zelf is exact.

{{ exercises: 08-009, 08-010 }}

## 3. Welke breuken geven een eindig kommagetal?

Bij $\tfrac38$ hield de deling op, bij $\tfrac13$ niet. Waar ligt dat aan? Aan de noemer. Een eindig kommagetal is een breuk met als noemer een macht van tien. Dus $\tfrac{a}{b}$ (vereenvoudigd) heeft een eindige decimale schrijfwijze precies als je $b$ met een geheel getal kunt aanvullen tot 10, 100, 1000, …. Omdat $10 = 2 \times 5$, bestaat elke macht van tien alleen uit factoren 2 en 5: $1000 = 2^3 \times 5^3$. De noemer mag dus ook alleen factoren 2 en 5 bevatten.

:::theory Eindig of niet?
Schrijf de breuk eerst **zo eenvoudig mogelijk**. Bevat de noemer dan alleen priemfactoren 2 en 5, dan is het kommagetal **eindig**. Bevat de noemer een andere priemfactor (3, 7, 11, …), dan houdt het kommagetal **nooit** op.

Het aantal decimalen is de hoogste exponent van 2 of 5 in de noemer. Bij $40 = 2^3 \times 5$ zijn dat er 3.
:::

:::example Uitgewerkt voorbeeld: drie breuken beoordelen
**a.** $\tfrac{7}{40}$. $40 = 2^3 \times 5$: alleen 2 en 5. Eindig, met 3 decimalen. Aanvullen tot 1000: $\tfrac{7 \times 25}{40 \times 25} = \tfrac{175}{1000} = 0{,}175$.

**b.** $\tfrac{3}{12}$. De noemer bevat een 3, maar eerst vereenvoudigen: $\tfrac{3}{12} = \tfrac14$. Nu is de noemer $4 = 2^2$. Eindig: $0{,}25$. Vereenvoudig dus altijd eerst, anders trek je een verkeerde conclusie.

**c.** $\tfrac{1}{6}$. $6 = 2 \times 3$, en de factor 3 valt niet weg. Niet eindig: $\tfrac16 = 0{,}1666\ldots$
:::

## 4. Repeterende decimalen

Bekijk de staartdeling $1 : 7$. Na de komma reken je steeds met de rest: maal tien, delen door 7, nieuwe rest. De rest kan alleen 0, 1, 2, 3, 4, 5 of 6 zijn. Is de rest ooit 0, dan stopt de deling. Bij $1 : 7$ gebeurt dat nooit, dus na hooguit zes stappen **moet** er een rest terugkomen die je al eerder had. Vanaf dat moment herhaalt alles zich: dezelfde rest geeft dezelfde volgende cijfers.

![Restencyclus bij 1 gedeeld door 7](/images/diagrams/m08-restencyclus-1-7.svg "Bij 1 : 7 doorloopt de rest de kringloop 1, 3, 2, 6, 4, 5 en levert de cijfers 1, 4, 2, 8, 5, 7. Daarna begint alles opnieuw.")

$$
\frac{1}{7} = 0{,}142857\,142857\,142857\ldots
$$

:::definition Repeterende decimaal
Een kommagetal waarin vanaf een bepaalde plaats één cijfergroep zich eindeloos herhaalt. Die groep heet de **periode**. Je noteert de periode met een streep erboven: $\tfrac13 = 0{,}\overline{3}$, $\tfrac16 = 0{,}1\overline{6}$, $\tfrac17 = 0{,}\overline{142857}$. In lopende tekst schrijft men ook 0,333… met drie puntjes.
:::

Dit argument werkt voor elke noemer: bij noemer $b$ zijn er maar $b$ mogelijke resten, dus de periode is hoogstens $b - 1$ cijfers lang. Elke breuk is daarom óf een eindig, óf een repeterend kommagetal. Er is geen derde mogelijkheid. (Getallen die oneindig doorlopen **zonder** te herhalen, zoals $\pi = 3{,}14159\ldots$ of $\sqrt2 = 1{,}41421\ldots$, zijn dan ook geen breuken. Die kom je in latere modules tegen.)

:::tip Exact of ongeveer
Gebruik het gelijkteken alleen voor exacte waarden: $\tfrac38 = 0{,}375$ en $\tfrac13 = 0{,}\overline{3}$. Een afgebroken of afgeronde waarde krijgt het teken $\approx$ ("is ongeveer"): $\tfrac13 \approx 0{,}33$ en $\tfrac13 \approx 0{,}333$. Want $3 \times 0{,}333 = 0{,}999$, terwijl $3 \times \tfrac13$ precies 1 is.
:::

Een paar breuken kom je zo vaak tegen dat het loont om ze te kennen:

| Breuk | Kommagetal | Breuk | Kommagetal |
|---|---|---|---|
| $\tfrac12$ | 0,5 | $\tfrac{1}{10}$ | 0,1 |
| $\tfrac14$ | 0,25 | $\tfrac{1}{20}$ | 0,05 |
| $\tfrac34$ | 0,75 | $\tfrac{1}{25}$ | 0,04 |
| $\tfrac15$ | 0,2 | $\tfrac{1}{3}$ | $0{,}\overline{3}$ |
| $\tfrac18$ | 0,125 | $\tfrac{2}{3}$ | $0{,}\overline{6}$ |
| $\tfrac38$ | 0,375 | $\tfrac{1}{6}$ | $0{,}1\overline{6}$ |

{{ exercise: 08-012 }}

## 5. Van repeterende decimaal terug naar breuk

Als elke breuk een eindig of repeterend kommagetal geeft, kun je dan ook elk repeterend kommagetal terugschrijven als breuk? Ja, en er is een elegante methode voor. Het idee: vermenigvuldig met een macht van tien zodat de periode precies één keer opschuift, en trek de twee getallen van elkaar af. Dan valt de eindeloze staart weg.

:::example Uitgewerkt voorbeeld: 0,272727…
Noem het getal $x$, dus $x = 0{,}272727\ldots$ De periode "27" heeft twee cijfers. Vermenigvuldig daarom met 100:

$$
\begin{aligned}
100x &= 27{,}272727\ldots \\
x &= \phantom{2}0{,}272727\ldots
\end{aligned}
$$

Trek de onderste regel van de bovenste af. De staarten na de komma zijn identiek en vallen weg:

$$
99x = 27 \quad\Rightarrow\quad x = \frac{27}{99} = \frac{3}{11}
$$

Controle met een staartdeling: $3 : 11 = 0{,}2727\ldots$ Klopt.
:::

De vuistregel die hieruit volgt: een periode van $k$ cijfers die **direct** na de komma begint, geeft de periode gedeeld door $k$ negens. Dus $0{,}\overline{7} = \tfrac79$, $0{,}\overline{27} = \tfrac{27}{99}$ en $0{,}\overline{142857} = \tfrac{142857}{999999} = \tfrac17$.

:::example Uitgewerkt voorbeeld: 0,1666… (de periode begint later)
Neem $x = 0{,}1\overline{6}$. Hier staat er eerst een 1 die zich niet herhaalt. Gebruik daarom twee vermenigvuldigingen: één die de 1 vóór de komma brengt, en één die daarna nog een periode opschuift.

$$
\begin{aligned}
100x &= 16{,}666\ldots \\
10x &= \phantom{1}1{,}666\ldots
\end{aligned}
$$

Aftrekken: $90x = 15$, dus $x = \tfrac{15}{90} = \tfrac{1}{6}$.
:::

:::question Een merkwaardige gelijkheid
Pas de methode toe op $x = 0{,}999\ldots$ Dan is $10x = 9{,}999\ldots$, en aftrekken geeft $9x = 9$, dus $x = 1$. Kan dat kloppen? Denk aan $\tfrac13 = 0{,}333\ldots$ en vermenigvuldig beide kanten met 3.
:::

Het klopt inderdaad: $0{,}\overline{9}$ en $1$ zijn twee schrijfwijzen van hetzelfde getal, zoals $\tfrac12$ en $\tfrac24$ dat ook zijn. Er ligt geen enkel getal tussen. Dat voelt vreemd, en wiskundigen hebben er lang over nagedacht hoe je "oneindig veel cijfers" precies moet opvatten. Een strikte onderbouwing gebruikt het begrip **limiet**, dat in de modules over rijen en reeksen terugkomt.

{{ exercise: 08-033 }}
