# Een grafiek als denkmodel

Het begrip functie lijkt vanzelfsprekend. Je stopt een getal in een regel en je krijgt een getal terug. Toch heeft het meer dan driehonderd jaar geduurd voordat wiskundigen een definitie hadden die we nu nog herkennen. Dit intermezzo volgt vijf momenten uit dat verhaal. Het is geen rechte lijn van uitvinding naar uitvinding: elk idee is gegroeid uit vragen van zijn tijd, en geen enkele persoon introduceerde ineens alle moderne begrippen.

## Oresme: een verband wordt een figuur (ca. 1350)

In de inleiding zag je al hoe Nicole Oresme eigenschappen die in sterkte variëren in een figuur zette. In zijn werk over de 'configuraties van hoedanigheden en bewegingen' (meestal gedateerd rond 1350) stelt hij zich de vraag hoe je een eigenschap als snelheid of warmte kunt beschrijven wanneer ze van plaats tot plaats of van moment tot moment verandert. Zijn antwoord: laat de uitgebreidheid (de *longitudo*, bijvoorbeeld de tijd) horizontaal lopen en de intensiteit (de *latitudo*, bijvoorbeeld de snelheid) verticaal.

![Schets in de geest van Oresme](/images/diagrams/m19-oresme-latitudo.svg "Een schets in de geest van Oresmes diagrammen: een gelijkmatig toenemende snelheid geeft een driehoek (eigen figuur, niet een reproductie van een origineel)")

Bij een gelijkmatig toenemende eigenschap vormen de toppen een rechte lijn. Oresme (en collega's in Oxford en Parijs) gebruikte zulke figuren om te beredeneren dat de afgelegde weg bij gelijkmatig toenemende snelheid gelijk is aan die bij de gemiddelde snelheid; het oppervlak onder de lijn stelt de weg voor. Het is niet zo dat hij een functie in onze zin definieerde. Maar volgens historici van het functiebegrip komt hij dicht bij het idee dat natuurwetten een afhankelijkheid van de ene grootheid van de andere beschrijven, en hij laat zien dat je zo'n afhankelijkheid in beeld kunt brengen. Dat is de rechtstreekse voorloper van de grafiek die je in deze module tekent.

## Fermat en Descartes: de vergelijking als lijn (rond 1636)

Twee Fransen kwamen in dezelfde jaren op het idee om meetkunde en algebra te koppelen. Pierre de Fermat schreef rond 1636 een kort werk over 'vlakke en ruimtelijke plaatsen', dat eerst in handschrift circuleerde en pas veel later werd gedrukt. Zijn kernzin komt erop neer dat een vergelijking met twee onbekende grootheden een lijn voor het oog zichtbaar maakt, en dat een vergelijking van de eerste graad een rechte lijn is. Dat is, in onze taal, de stelling waarmee deze module begon: $y = ax + b$ geeft een rechte lijn.

René Descartes publiceerde in 1637 *La Géométrie*, een bijlage bij zijn *Discours de la méthode*. Daarin lost hij meetkundige problemen op door lengtes met letters aan te duiden en vergelijkingen op te stellen. Het assenstelsel zoals wij het kennen, met twee loodrechte assen en negatieve getallen, staat er niet in die vorm in. Toch is het naar hem genoemd, het cartesische coördinatenstelsel, omdat zijn methode het volgende eeuwen mogelijk maakte. Je zag in de coördinatenmodule al hoe dat werkt.

:::history Twee wegen naar hetzelfde
Fermat en Descartes werkten onafhankelijk van elkaar, en hun lezers verschilden. Fermat begon bij de vergelijking en vroeg welke figuur erbij hoort. Descartes begon bij de meetkundige figuur en vroeg welke vergelijking erbij hoort. Op deze twee richtingen berust ook jouw werk in deze module: van formule naar grafiek, en van twee punten naar de formule.
:::

## Leibniz: het woord 'functie' (1673, 1692)

Het woord functie komt van het Latijnse *functio*: uitvoering, verrichting. Gottfried Wilhelm Leibniz schreef in 1673 over lijnen die in een gegeven figuur 'een functie vervullen', dus nog in de gewone, niet-wiskundige betekenis. Ongeveer twintig jaar later, rond 1692, gebruikt hij het woord als vakterm voor grootheden die van een punt op een kromme afhangen, zoals de lengte van een raaklijn. Zijn leerling Johann Bernoulli definieerde in een brief van 1694 een functie als een grootheid die op een of andere manier is gevormd uit veranderlijke en vaste grootheden. Een regel met een vaste stap, zoals $y = 2x + 3$, past volledig in die omschrijving.

## Euler: f(x) (ca. 1734)

Leonhard Euler maakte het functiebegrip tot de kern van de analyse. In zijn *Introductio in analysin infinitorum* (1748) definieert hij een functie als een analytische uitdrukking, samengesteld uit een veranderlijke en getallen of vaste grootheden. De notatie $f(x)$ voor 'de waarde van de functie $f$ bij $x$' wordt gewoonlijk toegeschreven aan Euler en, onafhankelijk, Alexis Clairaut, rond 1734. Het is de notatie die je in deze module steeds hebt gebruikt.

## Dirichlet: elke koppeling is een functie (1837)

Euler dacht nog bij een functie aan een formule. De Duitse wiskundige Peter Gustav Lejeune Dirichlet liet dat in 1837 los. Volgens hem is $y$ een functie van $x$ als er bij elke $x$ precies één $y$ hoort, zonder dat die koppeling door één en dezelfde formule hoeft te worden gegeven. Dat is de moderne opvatting: wat telt is de unieke koppeling, niet de vorm waarin ze wordt opgeschreven. Ook de eis 'precies één uitvoer' uit de tweede les van deze module is dus Dirichlets erfenis. Een koppeling kan bestaan zonder dat iemand er een formule voor heeft; denk aan de temperatuur op elk moment van de dag.

## Een model gebruiken vraagt meer dan een lijn tekenen

Het historische verhaal leert ook een les voor het gebruik van lineaire modellen. De verbinding tussen algebra en meetkunde laat eenzelfde verband op verschillende manieren zien. Een formule maakt exacte berekening mogelijk; een grafiek maakt stijging en snijpunten zichtbaar; een tabel geeft concrete voorbeelden. Maar een model blijft een model. Bij interpolatie blijf je tussen waargenomen invoerwaarden. Bij extrapolatie ga je erbuiten. Een bedrijf dat tussen 10 en 20 bestellingen een vaste prijsregel heeft, hoeft die niet ook bij 10.000 bestellingen te hanteren.

:::question Een aannemelijke verlenging?
Een kaars verliest iedere tien minuten dezelfde gemeten lengte. Welke informatie heb je nodig voordat je voorspelt hoe lang ze na twee dagen nog is? Wat zegt dit over de grenzen van een lineair model?
:::

{{ exercises: 19-024 }}

## Bronnen

- MacTutor, [The function concept](https://mathshistory.st-andrews.ac.uk/HistTopics/Functions/): Leibniz (1673), Bernoulli (1694), Euler (1748) en Dirichlet (1837).
- MacTutor, [Nicole Oresme](https://mathshistory.st-andrews.ac.uk/Biographies/Oresme/).
- MacTutor, [Pierre de Fermat](https://mathshistory.st-andrews.ac.uk/Biographies/Fermat/).
- MacTutor, [Peter Gustav Lejeune Dirichlet](https://mathshistory.st-andrews.ac.uk/Biographies/Dirichlet/).
- Wikipedia, [History of the function concept](https://en.wikipedia.org/wiki/History_of_the_function_concept): notatie f(x) (Clairaut en Euler, ca. 1734) en Dirichlets formulering (1837).
- Edward Worth Library, [Descartes](https://mathematics.edwardworthlibrary.ie/notation/descartes/).

Bij de precieze data en toeschrijvingen (met name de woordkeuze van Leibniz rond 1692 en de notatie f(x)) zijn de bronnen niet volledig eensgezind; de datering hierboven is bij benadering.
