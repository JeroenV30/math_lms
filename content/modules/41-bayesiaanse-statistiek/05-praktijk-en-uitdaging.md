# Toepassen en kritisch redeneren

In deze les gebruik je alles wat je tot nu toe hebt gezien. Je begint bij een
fabriek, gaat naar een spamfilter en een codebreker, en sluit af met twee
uitdagende opgaven. De gedachte blijft: weeg eerst wat je wist, dan hoe goed de
waarneming bij elke mogelijkheid past, en normaliseer.

## Een product herleiden naar zijn machine

Een fabriek gebruikt twee machines. Machine A maakt het grootste deel van de
producten, maar machine B heeft een hogere defectkans. Als je een defect
product vindt, is de meest gebruikte machine dan ook de meest waarschijnlijke
bron? Je moet productieaandeel en defectkans samenwegen.

{{ exercise: 41-020 }}

## Maak de routes zichtbaar

Teken eerst twee takken voor de machines. Splits iedere tak in goed en defect.
Vermenigvuldig de kansen langs elke route. Selecteer daarna alleen de
defectroutes en normaliseer hun bijdragen. Die werkwijze helpt ook wanneer
er drie of meer bronnen zijn.

:::practice Controleer je posterior
Alle posterior-kansen moeten tussen 0 en 1 liggen en samen 1 zijn. Vergelijk
de uitkomst met je prior: welk bewijs zorgt voor de verschuiving? Onderzoek
wat er verandert als de defectkansen niet precies bekend zijn.
:::

In echte kwaliteitsanalyse zijn defectkansen vaak zelf schattingen. Dan kan
een tweede laag onzekerheid nodig zijn. De eenvoudige opgave behandelt ze
als gegeven om de richting van de update goed te leren.

## Een spamfilter

Een e-mailprogramma wil bij elk bericht de kans op spam schatten. Het filter kijkt
naar woorden. Stel dat 40% van alle berichten spam is, dat het woord "gratis"
in 50% van de spam voorkomt en in 5% van de gewone berichten.

:::example Eén woord
De prior is $P(\text{spam})=0{,}4$. De kans op het woord bij spam is $0{,}5$, bij
gewone post $0{,}05$. Dan geldt
$$
P(\text{spam}\mid\text{gratis})=\frac{0{,}5\cdot0{,}4}{0{,}5\cdot0{,}4+0{,}05\cdot0{,}6}
=\frac{0{,}20}{0{,}23}=\frac{20}{23}\approx0{,}870.
$$
Met odds: prior odds $0{,}4/0{,}6=2/3$, $LR=10$, posterior odds $20/3$, kans
$20/23$. Het woord alleen maakt het bericht al verdacht, maar nog niet zeker.
:::

{{ exercise: 41-040 }}

Bij een tweede woord werk je de odds opnieuw bij. Als je veronderstelt dat de
woorden **conditioneel onafhankelijk** zijn gegeven de klasse (spam of niet
spam), mag je de likelihoodratio's vermenigvuldigen. Dat is de naieve aanname
die het filter zijn naam geeft. Ze klopt in de praktijk maar ten dele: woorden
als "gratis" en "winnen" komen vaak samen voor. Toch werkt het filter
verrassend goed, omdat het vooral om de rangorde van berichten gaat en niet om
precieze kansen.

{{ exercise: 41-041 }}

## Bewijskracht tellen in bans

Bij de codebrekers in Bletchley Park was het handig om bewijs te laten
optellen in plaats van vermenigvuldigen. Dat kan met logaritmen: de **bewijskracht**
van een waarneming met likelihoodratio LR is $\log_{10}(LR)$ in bans, of
$10\log_{10}(LR)$ in decibans. Een factor 10 is dus 1 ban, 10 deciban. Een factor
100 is 2 ban, 20 deciban. Kleine bewijsstukken tel je op tot ze samen
voldoende zijn.

{{ exercise: 41-042 }}

## Uitdagingen

:::practice Drie machines
Het product kan van meer dan twee bronnen komen. Je werkt dan met één route
per bron en deelt de relevante route door de som van alle relevante routes.
:::

{{ exercise: 41-043 }}

:::practice Hoe goed moet een test zijn?
Je kunt Bayes' regel ook omdraaien: welke eigenschap van een test heb je nodig
om een gewenste voorspellende waarde te halen? Zoek eerst het aantal vals-positieve
uitslagen dat je maximaal kunt toelaten, en vertaal dat naar een specificiteit.
:::

{{ exercise: 41-044 }}

Alle opgaven in deze les gebruiken getallen als gegeven. In werkelijke toepassingen
zijn prevalenties, sensitiviteiten en defectkansen schattingen met onzekerheid.
Een volgend niveau van analyse zet daar zelf verdelingen op, zoals je met
de Beta-verdeling deed voor één kans.
