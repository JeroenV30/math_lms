# Een bewering naast de gegevens leggen

:::history Londen, 1710: 82 jaar doopregisters
John Arbuthnot, arts en wiskundige, legde de Londense doopregisters van 1629 tot en met 1710 naast
elkaar. In elk van die 82 jaren werden er meer jongens dan meisjes gedoopt. Hij vroeg zich af wat je
mag verwachten als jongens en meisjes even waarschijnlijk zijn. Dan zou elk jaar neerkomen op een
muntworp, en 82 keer dezelfde uitkomst heeft kans $(1/2)^{82}$, ongeveer $2\cdot10^{-25}$. Dat
getal vond hij te klein om aan toeval te geloven. Zijn eigen conclusie, dat hier de Voorzienigheid aan
het werk was, volgt je tegenwoordig niet meer. De redenering zelf, een kans berekenen onder een
nulbewering en kijken of de waarneming daar nog bij past, geldt als een van de eerste
significantietoetsen uit de geschiedenis.
:::

:::question Denkvraag
Een fabrikant beweert dat zijn pakken suiker gemiddeld 1000 gram wegen. Jij weegt 25 pakken en vindt
gemiddeld 1004 gram. Is dat verdacht? Wat moet je nog weten voordat je dat kunt beoordelen?
Probeer eerst zelf drie dingen te bedenken en lees dan verder.
:::

## Het probleem: toeval ziet er ook uit als een patroon

Gegevens fluctueren. Weeg je 25 pakken suiker, dan is het gemiddelde vrijwel nooit precies 1000
gram, ook niet als de fabrikant de waarheid spreekt. Het gaat dus nooit om de vraag of het
steekproefgemiddelde van 1000 afwijkt, want dat doet het bijna altijd. De echte vraag is: **wijkt het
meer af dan je van puur toeval mag verwachten?** Om die vraag te beantwoorden heb je drie
ingrediënten nodig, en je kent ze alle drie al uit module 38:

1. een nulbewering over de populatie, bijvoorbeeld "het gemiddelde is 1000 gram";
2. de **standaardfout**, die zegt hoeveel een steekproefgemiddelde van steekproef tot steekproef schommelt;
3. een verdeling van het steekproefgemiddelde, meestal bij benadering normaal, waarmee je kansen kunt uitrekenen.

Bij een spreiding van bijvoorbeeld 10 gram per pak en 25 pakken is de standaardfout $10/\sqrt{25}=2$
gram. Een afwijking van 4 gram is dan twee standaardfouten. Of dat veel is, is niet langer een kwestie
van gevoel: je kunt het opzoeken in de normale verdeling. Daar draait deze module om.

## Waarom bestaat deze wiskunde?

Aan het begin van de twintigste eeuw nam het aantal experimenten snel toe. Landbouwproeven op
Rothamsted, kwaliteitsmetingen in de brouwerij van Guinness, medische vergelijkingen: overal kwamen
metingen binnen die door toeval werden vertroebeld, en overal moest iemand beslissen wat de gegevens
wel en niet lieten zien. De steekproeven waren klein. Het was duur om een veld te bewerken of een
partij bier te onderzoeken, dus er waren geen duizenden waarnemingen. Daardoor was de normale
benadering uit de grote-steekproeftheorie onbetrouwbaar en was er behoefte aan toetsen die ook bij
kleine aantallen exact werkten. Zo ontstonden de t-toets van Gosset en de methoden van Fisher.

Een paar jaar later kwam een tweede vraag erbij. Neyman en Egon Pearson vroegen niet meer "wat zegt
deze ene uitkomst?", maar "hoe gedraagt een toetsprocedure zich als je haar duizend keer toepast?". Dat
leidde tot foutenkansen, tot power en tot het idee dat je een studie ontwerpt voordat je de eerste
meting doet. Beide benaderingen komen in deze module samen, want je werkt er in de praktijk
dagelijks mee, vaak zonder dat je weet dat ze oorspronkelijk concurrenten waren.

Een toets is tot slot een manier van redeneren die je buiten de statistiek ook tegenkomt: je
neemt een bewering serieus, werkt uit wat ze voorspelt, en kijkt of de werkelijkheid daar nog mee
te rijmen valt. Het is bewijs uit het ongerijmde, maar dan met kansen in plaats van zekerheden.
Daarom is het ook een wiskundig subtiele techniek, en daarom gaan er in de praktijk zoveel dingen
mis. Een deel van deze module besteed je dan ook aan wat een toetsuitslag **niet** betekent.

## Hoe je deze module doorloopt

In de eerste theorieles leer je de grondbegrippen: nulhypothese, alternatieve hypothese, p-waarde en
significantieniveau, uitgewerkt voor een z-toets. De tweede les voegt de exacte binomiale toets, de
toets voor een proportie en de t-toets voor één steekproef toe en legt het verband met
betrouwbaarheidsintervallen. In de derde theorieles vergelijk je twee groepen, onafhankelijk (Welch)
of gepaard. De vierde gaat over fouten van de eerste en tweede soort, power en effectgrootte. Na het
historisch intermezzo volgt een les over verantwoord toetsen, met p-hacking, meervoudig toetsen en
de replicatiecrisis, en sluit je af met een samenvatting en de hoofdstuktoets.

{{ goals }}

{{ glossary }}
