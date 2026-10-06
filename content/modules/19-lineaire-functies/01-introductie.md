# Een regel die verandert met een vaste stap

Rond het jaar 1350 zit Nicole Oresme, een Franse geleerde die later bisschop van Lisieux zou worden, met een probleem dat op het eerste gezicht weinig met meetkunde te maken heeft. Hij wil weten hoe je kunt spreken over eigenschappen die in sterkte veranderen: een snelheid die toeneemt, een warmte die afneemt, een kleur die verbleekt. Met woorden alleen raakt hij verstrikt in 'een beetje meer' en 'iets minder'. Daarom doet hij iets nieuws. Hij tekent een horizontale lijn voor de tijd en zet daar op elk moment een verticaal lijnstuk op, zo lang als de sterkte op dat moment. De toppen van die lijnstukken vormen een figuur. Bij een eigenschap die gelijkmatig toeneemt, is die figuur een driehoek met een rechte schuine zijde.

:::history Parijs, ca. 1350
Oresme noemt de horizontale as *longitudo* en de verticale lijnstukken *latitudo*. Hij beweert niet dat hij een formule opschrijft, en een coördinatenstelsel in moderne zin heeft hij nog niet. Toch zie je in zijn figuren het kernidee van deze module: een verband tussen twee grootheden wordt een **vorm**, en je kunt die vorm bekijken. Een rechte schuine lijn betekent: een vaste toename per stap.
:::

Dat idee is bijna zeven eeuwen later nog steeds het gereedschap waarmee je een groot deel van de wereld beschrijft. Een taxirit, een telefoonabonnement, een kaars die opbrandt, de omrekening van graden Celsius naar Fahrenheit: in al die gevallen verandert er iets met een vaste stap. In deze module leer je die situaties te beschrijven met één compacte regel, $y = ax + b$, en je leert die regel op drie manieren lezen: in een tabel, in een formule en in een grafiek.

## Een eerste voorbeeld

Een watertank bevat 120 liter. Een pomp voegt onder een modelaanname iedere minuut 8 liter toe. Na $t$ minuten is de inhoud $V(t) = 120 + 8t$. De inhoud verandert steeds met dezelfde hoeveelheid per minuut. Dat is precies wat 'lineair' betekent: gelijke stappen in de invoer geven gelijke stappen in de uitvoer.

:::question Formule en werkelijkheid
Kun je deze formule voor een onbeperkt grote $t$ gebruiken als de tank maar 200 liter kan bevatten? Wat zou een negatieve tijd betekenen, en heeft de formule daar nog een zinnige interpretatie?
:::

Denk er even over na voordat je verder leest. De formule zelf 'weet' niets van een tank van 200 liter. Zij rekent gewoon door: bij $t = 20$ geeft ze 280 liter, wat in de werkelijkheid onmogelijk is. Een model heeft dus niet alleen een regel, maar ook een gebied waarin die regel bedoeld is. Wiskundigen noemen dat gebied het **domein**. Voor de tank kiezen we $t$ van 0 tot en met 10 minuten: dan loopt de inhoud van 120 naar 200 liter en past alles precies.

## Waarom bestaat deze wiskunde?

Het begrip functie is ontstaan uit een praktische behoefte: je wilt kunnen voorspellen. Als je weet hoe een grootheid afhangt van een andere, kun je uitrekenen wat er gebeurt in situaties die je nog niet hebt gemeten. Hoeveel kost een taxirit van 14 kilometer? Wanneer is de kaars op? Bij welk aantal belminuten wordt het ene abonnement goedkoper dan het andere? Zonder functiebegrip zou je voor elke nieuwe vraag opnieuw moeten tellen of meten. Met een functie reken je het uit.

Het lineaire geval is het eenvoudigste en tegelijk het meest gebruikte. Het is eenvoudig omdat je maar twee getallen nodig hebt om alles vast te leggen: de **startwaarde** (waar begin je?) en de **helling** (hoeveel verandert er per stap?). Het is veel gebruikt omdat veel verschijnselen over een korte afstand bij benadering lineair zijn, ook als ze op lange termijn niet lineair zijn. In latere modules zul je zien dat een kromme lijn op een heel klein stukje bijna recht is; de hele differentiaalrekening is daarop gebouwd.

## Wat je in deze module doet

In de volgende les begin je bij de basis: wat is een functie eigenlijk, en hoe lees je $y = ax + b$? In de derde les bepaal je helling en regel uit gegevens, bijvoorbeeld uit twee punten. In de vierde les kijk je naar stijgen en dalen, evenwijdige lijnen, snijpunten met de assen en het vergelijken van twee tarieven. De vijfde les gaat over domein, bereik en het omkeren van een regel. Daarna volgen een historisch intermezzo over hoe het woord 'functie' ontstond, een les met toepassingen en een samenvatting.

Onderweg zul je vier typische fouten tegenkomen die bijna iedereen een keer maakt: de rollen van $a$ en $b$ verwisselen, de helling omdraaien tot $\Delta x / \Delta y$, het minteken vergeten bij een dalende lijn en de startwaarde aflezen bij $x = 1$ in plaats van bij $x = 0$. Ze worden steeds benoemd op het moment dat ze zich voordoen, zodat je ze leert herkennen.

{{ goals }}

{{ glossary }}

Begin met twee korte vragen over de tank uit het voorbeeld.

{{ exercises: 19-001, 19-002 }}
