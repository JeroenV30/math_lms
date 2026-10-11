# Hoeveel zegt een lijn?

:::history Een verband tussen ouders en kinderen
In de jaren 1880 verzamelde de Engelse onderzoeker Francis Galton lichaamslengtes van
ouders en van hun volwassen kinderen. Hij zag iets dat hij eerst niet begreep: zeer lange
ouders hadden gemiddeld kinderen die wel lang waren, maar minder lang dan zijzelf. Bij
zeer kleine ouders was het omgekeerde het geval. Galton sprak van een terugkeer richting
het gemiddelde, en gaf het verschijnsel in 1886 de naam *regression towards mediocrity*.
Uit die waarneming ontstond een van de meest gebruikte technieken van de statistiek.
:::

:::question Denk eerst na
Stel dat je van tweehonderd studenten weet hoeveel uur zij aan een vak hebben besteed en
welk cijfer zij kregen. Je tekent elke student als een punt. Wat zou je het liefst willen
weten: of er een verband is, hoe sterk het is, of hoeveel een extra studie-uur gemiddeld
oplevert, en met hoeveel zekerheid je dat kunt zeggen? Het zijn vier verschillende vragen.
Welke van de vier kun je met één getal beantwoorden?
:::

## Van losse metingen naar een verband

Tot nu toe beschreef je in deze cursus één variabele tegelijk: een gemiddelde, een spreiding, een
verdeling. Vrijwel elke interessante vraag gaat echter over twee variabelen tegelijk. Hangt de
hoeveelheid neerslag samen met de oogst? Hangt de dosis van een medicijn samen met de daling van de
bloeddruk? Hangt het aantal verkoopgesprekken samen met de omzet? In al deze gevallen heb je
**gepaarde waarnemingen**: voor iedere eenheid, een student, een proefpersoon, een maand, twee
meetwaarden. Het spreidingsdiagram dat je in module 35 leerde tekenen, is het eerste hulpmiddel.
Dit hoofdstuk voegt er twee getallen en één lijn aan toe.

Het eerste getal is de **correlatiecoëfficiënt** $r$ van Pearson. Die vat in één getal tussen $-1$ en $1$ samen
hoe goed de punten op een rechte lijn liggen. De lijn zelf is de **regressielijn**, die je met de
**kleinste-kwadratenmethode** bepaalt. Het tweede getal, de helling van die lijn, vertelt hoeveel $y$
gemiddeld verandert als $x$ met één eenheid toeneemt. Samen leveren ze een beschrijving, een
voorspelling en, als je voorzichtig bent, een eerlijke schatting van de onzekerheid.

## Waarom bestaat deze wiskunde?

Er zijn drie oude problemen die hier samenkomen. Het eerste is dat van de astronoom. Rond 1800
hadden sterrenkundigen meer waarnemingen van een planeet of komeet dan onbekende baanelementen. Elke
meting bevat een kleine fout, dus de vergelijkingen spreken elkaar licht tegen. Welke baan kies
je dan? Legendre en Gauss losten dit op door de som van de gekwadrateerde fouten zo klein mogelijk
te maken: de kleinste-kwadratenmethode.

Het tweede probleem is dat van de bioloog en de erfelijkheidsonderzoeker. Galton zocht een manier om
te beschrijven hoe sterk een eigenschap van ouders terugkomt bij kinderen. Zijn leerling Karl Pearson
maakte daar rond 1896 een precieze, schaalonafhankelijke maat van: de productmoment-correlatie.

Het derde probleem is dat van iedereen die een voorspelling moet doen met onvolledige informatie: een
bank, een ziekenhuis, een gebouwbeheerder, een beleidsmaker. Een lijn door een puntenwolk geeft een
voorspelling, maar alleen als je weet wat de lijn wel en niet betekent. Daarover gaat het grootste deel
van dit hoofdstuk, want hier gaat het in de praktijk het vaakst mis.

## Rekenen en kijken

Een lijn met een hoge $R^2$ kan een verkeerde vorm hebben, door één punt worden bepaald of een
mengsel van groepen samenvatten. Een correlatie kan perfect zijn zonder dat het ene het andere
veroorzaakt. Daarom blijven rekenen en kijken in dit hoofdstuk steeds samengaan: je berekent
getallen, maar je tekent ook het diagram en de residuen voordat je er iets uit concludeert.

Het hoofdstuk bouwt in vier stappen op. Eerst leer je een spreidingsdiagram lezen en de samenhang in
één getal vatten (les 2). Daarna bereken je de regressielijn en interpreteer je helling en intercept
(les 3). Dan onderzoek je wat de lijn mist: residuen, $R^2$, invloedrijke punten en de onzekerheid
van de helling (les 4). Tot slot kijk je naar de grenzen: extrapolatie, regressie naar het
gemiddelde, de stelling dat correlatie geen causaliteit is, en transformaties voor verbanden die
niet recht zijn (les 5). Tussendoor lees je hoe Legendre, Gauss, Galton, Pearson, Spearman en
Anscombe elk een stuk van het gereedschap maakten.

{{ goals }}

{{ glossary }}
