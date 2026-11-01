# Aandelen en obligaties

## Wat je bezit met een aandeel

Een aandeel is een deel van het eigen vermogen van een onderneming, meestal een naamloze vennootschap (nv). Wie aandeelhouder wordt, is mede-eigenaar. Dat geeft recht op twee dingen: een evenredig deel van de winst die de onderneming aan haar eigenaren uitkeert, en meestal stemrecht op de aandeelhoudersvergadering. Wat je niet krijgt, is een belofte. Het bedrijf hoeft geen dividend uit te keren en je krijgt je inleg niet terug: wil je eruit, dan verkoop je het aandeel aan een andere belegger tegen de koers van dat moment.

Aandeelhouders staan in de rangorde achteraan. Gaat een onderneming failliet, dan worden eerst de schuldeisers betaald: werknemers, leveranciers, banken en obligatiehouders. Pas wat daarna overblijft, is voor de aandeelhouders, en dat is vaak niets. Daar staat tegenover dat een aandeelhouder meedeelt in al het succes: wordt de onderneming veel winstgevender, dan stijgt de waarde van het aandeel zonder bovengrens. Die ongelijke verdeling van verlies en winst is de bron van de risicopremie die je in module 1 zag.

## Twee bronnen van rendement: dividend en koerswinst

Een aandeel levert rendement op twee manieren. De eerste is het dividend: het deel van de winst dat de onderneming aan de aandeelhouders uitkeert. Het dividendrendement is het dividend per aandeel gedeeld door de koers. De tweede is koerswinst: het aandeel wordt later voor meer verkocht dan je betaalde (of met verlies, als de koers is gedaald). Het totaalrendement over een jaar is de som van beide, uitgedrukt in procenten van de koers aan het begin:

$$
r_{\text{totaal}} = \frac{(K_1 - K_0) + D}{K_0}
$$

Hierin is $K_0$ de koers aan het begin, $K_1$ de koers aan het eind en $D$ het ontvangen dividend per aandeel.

:::example Totaalrendement van een aandeel
Een fictief bedrijf heeft een koers van € 40 per aandeel. Het keert dat jaar € 1,00 dividend per aandeel uit, en de koers staat aan het eind van het jaar op € 44.

Stap 1: het dividendrendement is $1/40 = 2{,}5\%$.
Stap 2: de koerswinst is $44 - 40 = 4$, dus $4/40 = 10\%$.
Stap 3: het totaalrendement is $2{,}5\% + 10\% = 12{,}5\%$. Rechtstreeks: $(4 + 1)/40 = 0{,}125$.

Was de koers aan het eind € 36 geweest, dan was het rendement $(-4 + 1)/40 = -7{,}5\%$: het dividend dempt het verlies, maar compenseert het niet.
:::

{{ exercises: 02-001, 02-003, 02-004 }}

## Waardering: wat is een aandeel waard?

Waarom is de koers € 40 en niet € 20 of € 80? De koers is de uitkomst van vraag en aanbod, en beleggers vormen zich een beeld van de waarde via de toekomstige winst van de onderneming. Een veelgebruikte maatstaf is de koers-winstverhouding (K/W of P/E): de koers gedeeld door de winst per aandeel van het laatste jaar (of de verwachte winst voor het komende jaar).

Heeft een aandeel een koers van € 40 en een winst per aandeel van € 2,50, dan is de K/W gelijk aan 16. Je betaalt dus zestien keer de jaarwinst. Dat getal zegt iets over de verwachtingen: een hoge K/W betekent dat beleggers sterke winstgroei verwachten (of het aandeel duur vinden), een lage K/W dat ze weinig groei verwachten (of het aandeel goedkoop vinden). Het omgekeerde, de winst gedeeld door de koers, heet het winstrendement: $2{,}50/40 = 6{,}25\%$. Het is een ruwe indicatie, geen voorspelling: de winst kan dalen, en een lage K/W kan terecht zijn omdat het bedrijf krimpt.

Waardering is dus geen exacte wetenschap: de koers beweegt ook doordat beleggers hun verwachtingen aanpassen.

{{ exercises: 02-002 }}

## Wat je bezit met een obligatie

Een obligatie is geen eigendom maar een schuldbewijs. De uitgever, een staat, een bedrijf of een instelling, leent geld van beleggers en belooft drie dingen: een vast bedrag aan rente per jaar (de coupon), een looptijd en terugbetaling van het geleende bedrag (de nominale waarde) op de einddatum. Een obligatie met een nominale waarde van € 1.000, een couponrente van 3% en een looptijd van vijf jaar betaalt dus elk jaar € 30 en na vijf jaar € 1.000 terug. De couponrente is een percentage van de nominale waarde, niet van wat je er op de beurs voor betaalde.

Obligatiehouders staan in de rangorde vóór aandeelhouders. Daar tegenover staat dat het rendement begrensd is: meer dan de coupon en de aflossing krijg je niet. Dat maakt obligaties doorgaans minder risicovol dan aandelen, en in de cijfers van module 1 zie je dat terug in een lagere risicopremie.

{{ exercises: 02-005 }}

## Marktrente en koers: het omgekeerde verband

Een obligatie kun je na uitgifte op de beurs verhandelen, en dan verandert de koers. De kern zit in één idee: een vaste coupon wordt meer of minder aantrekkelijk naarmate de rente op nieuwe obligaties verandert. Stel dat jouw obligatie 3% betaalt en de marktrente voor vergelijkbare nieuwe obligaties stijgt naar 5%. Niemand wil dan jouw obligatie kopen tegen de nominale waarde, want een nieuwe levert meer op. De koers van jouw obligatie moet dalen totdat een koper, door de lagere prijs, in totaal toch zo'n 5% per jaar verdient. De koers is dus de contante waarde van alle toekomstige betalingen, verdisconteerd tegen de marktrente $y$:

$$
\text{koers} = \sum_{t=1}^{n} \frac{C}{(1+y)^t} + \frac{N}{(1+y)^n}
$$

Hierin is $C$ de jaarlijkse coupon, $N$ de nominale waarde en $n$ het aantal jaren tot aflossing.

:::example Een obligatie bij een stijgende marktrente
Een obligatie heeft nominaal € 1.000, een coupon van 3% (dus € 30 per jaar) en nog vijf jaar te gaan. De marktrente stijgt van 3% naar 5%.

Stap 1: de contante waarde van de coupons is $30/1{,}05 + 30/1{,}05^2 + 30/1{,}05^3 + 30/1{,}05^4 + 30/1{,}05^5 \approx 129{,}88$.
Stap 2: de contante waarde van de aflossing is $1000/1{,}05^5 \approx 783{,}53$.
Stap 3: de koers is $129{,}88 + 783{,}53 \approx € 913{,}41$.

De koers is gedaald met ongeveer 8,7%, terwijl de uitgever nog steeds netjes betaalt. Wie de obligatie tot de einddatum houdt, krijgt precies de beloofde € 30 per jaar en € 1.000 terug; het verlies is alleen een verlies op papier, tenzij je eerder verkoopt. Bij een daling van de marktrente naar 2% werkt het omgekeerd: de koers wordt dan ongeveer € 1.047,13.
:::

Het verband werkt altijd omgekeerd: stijgt de marktrente, dan daalt de koers van bestaande obligaties, en daalt de marktrente, dan stijgt hij. De gevoeligheid hangt sterk af van de looptijd. Is de looptijd kort, dan komt de aflossing snel en kun je het geld weer tegen de nieuwe rente beleggen; bij een lange looptijd zit je vast aan de lage coupon. Bij een marktrente van 5% is de koers van dezelfde obligatie met een looptijd van twintig jaar ongeveer € 750,76, tegen ongeveer € 913,41 bij vijf jaar. Dit heet renterisico. De gevoeligheid van de koers voor een renteverandering wordt in de praktijk uitgedrukt in de duration; we gaan daar niet verder op in.

![Koers van een obligatie bij stijgende marktrente](/images/beleggen/m02-obligatiekoers.svg "Koers per € 1.000 nominaal van een fictieve obligatie met 3% coupon bij verschillende marktrentes, voor een looptijd van 5 en van 20 jaar. Eigen berekening.")

{{ exercises: 02-006, 02-007 }}

## Kredietrisico

Het renterisico staat los van de vraag of de uitgever zijn schuld kan terugbetalen. Dat tweede risico heet kredietrisico (ook wel wanbetalingsrisico): de uitgever betaalt de rente of de aflossing niet, of niet op tijd. Het is het risico dat je loopt omdat een obligatie een belofte is, en een belofte is zo goed als de uitgever die haar doet.

Het kredietrisico verschilt sterk per uitgever. Beleggers eisen een hogere rente van een uitgever die meer kans heeft niet te betalen; het verschil met de rente op de veiligste staatsobligaties heet de risico-opslag of kredietspread. Kredietbeoordelaars zoals S&P, Moody's en Fitch geven uitgevers een rating, zoals AAA tot en met D. Een rating is een hulpmiddel om kredietrisico te vergelijken, maar geen garantie: ze kan achterlopen op de werkelijkheid en wordt aangepast als de situatie verandert.

Zo bestaat het rendement van een obligatie uit meer dan alleen de tijdswaarde van geld. Een hogere rente is vaak een vergoeding voor een hoger risico: kredietrisico, een langere looptijd of beide. 'Obligaties' zijn dus geen uniforme veilige categorie. Een kortlopende staatsobligatie van een stabiele staat en een langlopende obligatie van een zwak bedrijf verschillen enorm in risico, ook al heten ze allebei obligatie.

{{ exercises: 02-008 }}
