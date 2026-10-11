# Eerst het proces, dan de verdeling

Het zwaarste onderdeel van een kansberekening is zelden de rekenkunde. Het is de vraag welk model bij de situatie past, en of de uitkomst dan betekent wat je denkt dat ze betekent. In deze les werk je de volledige redenering uit voor een aantal praktijksituaties, en je bekijkt de fouten die studenten het vaakst maken.

## Een stappenplan

Bij elke kansvraag over een telling of een meting doorloop je dezelfde vragen. Dit is dezelfde controlelijst die professionele statistici onbewust gebruiken.

:::practice Een controlelijst
1. Wat wordt gemeten of geteld, en met welke eenheid?
2. Welke waarden kan de variabele aannemen: gehele aantallen (discreet) of elke waarde in een interval (continu)?
3. Welke voorwaarden maken de gekozen verdeling passend? Is het aantal proeven vast, is de kans constant, zijn de proeven onafhankelijk?
4. Gebruik je een exacte berekening of een benadering, en voldoet de benadering aan haar voorwaarden?
5. Welke gebeurtenis bedoelt de vraag precies: "minstens", "meer dan", "tussen"? Schrijf haar met een ongelijkheid en een geheel getal op.
6. Wat betekent het antwoord in de context, en is het redelijk?
:::

## Casus 1: een kwaliteitscontrole

Een kwaliteitsmedewerker telt defecte onderdelen in een vaste reeks inspecties. Dat suggereert een binomiaal model, maar alleen wanneer de defectkans stabiel is en de inspecties voldoende onafhankelijk zijn. Onderdelen uit één slecht afgestelde machine kunnen juist in clusters defect raken. Het binomiale model is dan een eerste aanname, geen gegeven.

Neem aan dat het model wel klopt: 50 onderdelen, kans 4% op een defect per onderdeel. Dan is $X\sim\operatorname{Bin}(50;0{,}04)$ met $np=2$. De normale benadering is hier niet bruikbaar ($np=2<5$), maar Poisson met $\lambda=2$ wel. De kans op vier of meer defecten is dan

$$
P(X\ge4)=1-P(X\le3)=1-e^{-2}\Bigl(1+2+\tfrac{2^2}{2}+\tfrac{2^3}{6}\Bigr)\approx0{,}1429.
$$

De exacte binomiale waarde is $0{,}1391$. De Poisson-benadering is dus niet perfect, maar de orde van grootte is goed, en er is een flink verschil met de normale benadering die je hier niet zou moeten gebruiken.

## Casus 2: raden bij een meerkeuzetoets

Een toets heeft 40 meerkeuzevragen met vier opties. Je slaagt bij minstens 20 goede antwoorden. Wat is de kans dat iemand die volledig gokt slaagt? Dan is $X\sim\operatorname{Bin}(40;0{,}25)$, met $\mu=10$ en $\sigma^2=7{,}5$. De voorwaarden $np=10\ge5$ en $n(1-p)=30\ge5$ zijn vervuld. Normale benadering met correctie: $P(X\ge20)\approx P(Y\ge19{,}5)$ met $z=(19{,}5-10)/\sqrt{7{,}5}\approx3{,}47$, en dat geeft ongeveer $0{,}0003$.

De exacte kans is echter $0{,}0006$: tweemaal zo groot. Dit is een goed voorbeeld van wat er aan de rand van de verdeling gebeurt. De vuistregel is formeel vervuld, maar de binomiale verdeling is hier rechts scheef ($p<\tfrac12$), en de normale kromme onderschat de dikke rechterstaart. Voor een beslissing waarbij het om zulke kleine kansen gaat, gebruik je dus beter de exacte binomiale waarde. Je ziet hier ook dat "benaderingen werken goed rond het midden" een nuttiger vuistregel is dan "benaderingen werken als np groot genoeg is".

## Casus 3: te veel tickets verkopen

Een luchtvaartmaatschappij verkoopt 210 tickets voor 200 stoelen. Elke passagier komt, onafhankelijk van de rest, met kans 0,9 opdagen. De kans dat er meer passagiers opdagen dan stoelen zijn is een kans in de staart, en de vraag is hoe goed de benadering daar werkt. Dat reken je uit in de uitdaging aan het eind van deze les. Het zal blijken dat de vuistregel in de staart een flink verschil kan geven met de exacte uitkomst.

{{ widget: normal-distribution mu=189 sigma=4.35 lower=200.5 upper=215 xmin=170 xmax=215 }}

De widget toont de normale benadering voor het aantal opdagende passagiers: $\mu=189$ en $\sigma\approx4{,}35$. Het gekleurde staartstuk is de kans op overboeking. Experimenteer met de grens om te zien hoe gevoelig het gebied is.

## De meest gemaakte fouten

Hieronder staan de fouten die steeds terugkomen, met de reden waarom ze verleidelijk zijn.

**$P(X\ge k)=1-P(X\le k)$.** De gevraagde gebeurtenis bevat de waarde $k$, het complement is $X\le k-1$. Schrijf bij twijfel de waarden uit: "minstens 8 van de 10" is 8, 9 of 10, en het complement is 0 tot en met 7.

**σ² in plaats van σ bij de z-score.** In $z=(x-\mu)/\sigma$ staat de standaardafwijking. Wie deelt door de variantie, krijgt z-scores die veel te dicht bij nul liggen. Een goed controlegetal: z-scores hoger dan 3 komen vrijwel nooit voor.

**Continuïteitscorrectie de verkeerde kant op.** Bij $X\le k$ gaat de grens omhoog naar $k+0{,}5$, bij $X\ge k$ gaat ze omlaag naar $k-0{,}5$. Een schets van de staafjes met de arcering helpt.

**Binomiaal bij trekken zonder teruglegging uit een kleine populatie.** De proeven zijn dan afhankelijk. Voor een steekproef van minder dan ongeveer een tiende van de populatie is de fout klein; bij een steekproef van twintig uit vijftig niet.

**De tabel geeft de linkerkans.** Wie een rechterstaartkans zoekt en het getal rechtstreeks uit de tabel overneemt, vindt het complement van het juiste antwoord. Controleer altijd of je antwoord kleiner of groter dan 0,5 hoort te zijn.

**Normale verdeling gebruiken zonder te controleren.** Reistijden en inkomens zijn scheef. Een normaal model heeft bovendien negatieve waarden in zijn theoretische bereik; voor een gewicht ver boven nul is de kans daarop verwaarloosbaar, maar voor een grootheid die dicht bij nul ligt kan het model ongeschikt zijn.

## Uitdaging: nieuwe informatie verandert de kans

Bij vier muntworpen is de kans op vier keer kop klein, $\tfrac1{16}$. Als je al weet dat er minstens één keer kop is gevallen, is je referentiegroep kleiner geworden: je hebt één ongunstige mogelijkheid, vier keer munt, uitgesloten. Je moet dan een voorwaardelijke kans berekenen.

{{ exercise: 37-020 }}

Controleer je uitkomst: ze moet groter zijn dan de onvoorwaardelijke kans $\tfrac1{16}$, omdat je een ongunstige mogelijkheid hebt uitgesloten. Deze manier van redeneren komt terug bij Bayes in module 41.

## Twee uitdagingen om af te sluiten

De eerste vraagt je een grootte te bepalen. Hoe groot moet een steekproef zijn om met zekere kans iets te vinden? Dat is het omgekeerde van de vragen die je tot nu toe kreeg. De tweede is de overboeking uit casus 3, waarin je de continuïteitscorrectie én het complement in één opgave moet combineren.

{{ exercises: 37-045, 37-046 }}

Vergelijk bij de tweede opgave je antwoord met de uitkomst van de exacte binomiale berekening, $0{,}0019$. De benadering geeft ongeveer $0{,}0040$, tweemaal zo veel. Dat verschil is geen rekenfout: het is de grens van de benadering in de staart. Een exacte berekening, of een nauwkeuriger methode, verdient dan de voorkeur.
