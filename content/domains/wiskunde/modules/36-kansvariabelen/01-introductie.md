# Wat is een onzekere uitkomst waard?

:::history Een spel dat nog niet is uitgespeeld
In de zeventiende eeuw onderzochten Pascal, Fermat en Huygens hoe je eerlijk
kunt rekenen aan een spel waarvan de uitkomst nog onbekend is. Een inzet
verdelen vraagt om meer dan tellen wie tot nu toe heeft gewonnen: je moet de
mogelijke toekomstige uitkomsten wegen met hun kansen.
:::

Twee spelers zetten ieder € 40 in op een spel van drie gewonnen rondes. Bij
een stand van 2–1 wordt het spel onderbroken en kan het niet worden hervat.
Hoe verdeel je de € 80? De speler die voorstaat heeft meer gewonnen, maar nog
niet alles. Een verdeling naar het aantal gewonnen rondes (€ 53,33 en € 26,67)
voelt aannemelijk en blijkt toch niet te kloppen. Wat telt, is wat er nog had
kunnen gebeuren: de toekomst, gewogen met haar kansen.

:::question Voor je verder leest
Neem aan dat de twee spelers even sterk zijn en dat er hooguit nog twee rondes
nodig zijn om een winnaar te hebben. In hoeveel van de mogelijke vervolgen wint
de speler die met 2–1 voorstaat? Probeer een verdeling te bedenken voordat je
in les 6 de oplossing van Pascal en Fermat leest.
:::

## Een getal vóór de waarneming

Neem een denkbeeldig lot. Met kans 0,1 betaalt het € 20; anders betaalt het
niets. Wat zou een redelijke prijs zijn? Voor één lot weet je niet wat je krijgt.
Over heel veel herhalingen verwacht je gemiddeld € 2 uitbetaling per lot.
Die € 2 is geen mogelijke uitbetaling, maar een samenvatting van onzekerheid.

Het gaat hier om een bijzonder soort grootheid. De uitbetaling van het lot is
een getal, maar een getal dat nog niet vaststaat: het hangt af van een
toevalsproces dat nog moet plaatsvinden. Zodra het lot is getrokken, is de
uitbetaling een gewoon getal. Daarvoor is het een **kansvariabele**: een
grootheid waarvan je de mogelijke waarden en hun kansen kent, maar niet de
waarde die er daadwerkelijk uit zal komen.

Dat is dezelfde stap die je in de natuurwetenschappen steeds opnieuw zet. Een
meting heeft een meetfout, een wachttijd is nooit precies te voorspellen, de
levensduur van een lamp varieert, het aantal klachten per week fluctueert.
Statistiek begint pas als je zulke grootheden niet meer behandelt als vaste
getallen, maar als iets met een verdeling: een lijst van mogelijke waarden die
elk een kans of een dichtheid hebben.

## Wat je in deze module leert

De module bouwt dit stap voor stap op. In les 2 maak je het begrip precies: een
kansvariabele is een functie die aan elke uitkomst van een toevalsproces een
getal toekent. Je leert het verschil tussen discrete en continue variabelen, en
je stelt kansfuncties en verdelingsfuncties op.

Les 3 geeft twee samenvattende getallen voor een verdeling: de
verwachtingswaarde, die zegt waar het zwaartepunt ligt, en de variantie, die
zegt hoe wijd de waarden uitwaaieren. Les 4 laat zien hoe dat voor continue
variabelen werkt, met de integraal uit module 30 als gereedschap. Les 5 gaat
over rekenen met kansvariabelen: wat gebeurt er met gemiddelde en spreiding als
je een variabele verschuift, vermenigvuldigt of bij een andere optelt, en
waarom de spreiding van een gemiddelde krimpt met de wortel van het aantal
waarnemingen.

Les 6 is een historisch intermezzo over Pascal, Fermat, Huygens, Bernoulli en
Kolmogorov. In les 7 pas je alles toe op verzekeringen, loterijen en een
simulatie, en les 8 vat samen.

## Waarom bestaat deze wiskunde?

Een gemeten of verwacht getal alleen is zelden genoeg om een beslissing op te
baseren. Een verzekeraar die weet dat een polis gemiddeld € 100 schade kost,
weet nog niet of hij met een premie van € 110 solvabel blijft; daarvoor moet hij
weten hoeveel de schade rond dat gemiddelde schommelt. Een ingenieur die de
gemiddelde belasting op een brug kent, moet ook weten hoe vaak die belasting
ver boven het gemiddelde uitkomt. Wie onzekerheid wil beheersen, heeft twee
dingen nodig: een model voor de mogelijke uitkomsten, en getallen die dat model
samenvatten. Kansvariabelen, verwachtingswaarde en variantie leveren precies
dat.

Er is nog een tweede reden. In module 35 beschreef je gegevens die al waren
gemeten. Voor de stap naar schatten en toetsen in de modules 38 en 39 heb je een
model nodig voor gegevens die nog kunnen ontstaan. Een steekproefgemiddelde is
zelf een kansvariabele: een ander steekproefje geeft een ander gemiddelde. Zonder
de begrippen uit deze module blijft zo'n uitspraak vaag.

## Voorkennis

Herhaal zo nodig kansrekening uit module 23, gewogen gemiddelden en variantie
uit module 24, en oppervlakte onder een grafiek uit module 30. Je gebruikt in
les 4 een eenvoudige integraal van een macht van $x$ en, kort, van $e^{-\lambda x}$.
Wie de integraal nog niet beheerst, kan de berekeningen in les 4 volgen door
de oppervlakte als rechthoek of driehoek te lezen; de integraal maakt de
methode alleen algemeen.

{{ goals }}

{{ glossary }}
