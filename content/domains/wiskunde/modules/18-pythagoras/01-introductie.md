# De kortste weg over een rechthoek

Stel je een rechthoekig weiland voor. Je staat in de ene hoek en wilt naar de hoek die er schuin tegenover ligt. Je kunt langs de rand lopen: eerst 3 meter naar het oosten, dan 4 meter naar het noorden. Dat is 7 meter. Je kunt ook dwars door het weiland lopen, in een rechte lijn. Dat is korter, dat voel je meteen. Maar hoeveel korter? Je kunt de weg meten met een touw, maar het zou fijn zijn als je het kon *uitrekenen*, zonder dat je er ooit gelopen hebt.

:::question Een schuine afstand
Waarom is 3 + 4 niet de lengte van de rechte verbindingslijn? Teken de situatie op papier en wijs de rechthoekige driehoek aan. Welke zijde van die driehoek is de rechte verbindingslijn, en ligt die zijde dicht bij de rechte hoek of juist ertegenover?
:::

Het antwoord op de vraag is verrassend netjes. De rechte verbinding is precies 5 meter. Dat klopt met een opmerkelijke eigenschap van de getallen 3, 4 en 5:

$$
3^2 + 4^2 = 9 + 16 = 25 = 5^2.
$$

Dat dit geen toeval is, maar voor *elke* rechthoekige driehoek op een vergelijkbare manier geldt, is de inhoud van deze module. De regel heet de stelling van Pythagoras. Je kent hem misschien als een formule die je ooit uit je hoofd hebt geleerd: $a^2 + b^2 = c^2$. Dat is een goed uitgangspunt om te onthouden, maar een slecht uitgangspunt om te begrijpen. Wie alleen de formule kent, weet niet wat $a$, $b$ en $c$ voorstellen, weet niet wanneer de formule wel en niet mag worden gebruikt, en kan een fout niet herkennen als de uitkomst absurd is. Daarom beginnen we niet met de formule, maar met de driehoek zelf: wat is een rechthoekige driehoek eigenlijk, welke zijde is welke, en wat betekent het dat je een zijde *kwadrateert*?

## Waarom bestaat deze wiskunde?

De behoefte om een rechte hoek te maken is zo oud als het bouwen zelf. Een muur die niet loodrecht op de grond staat, valt om. Een akker die niet rechthoekig is uitgemeten, geeft ruzie over de grens. Een tempel waarvan de hoeken scheef zijn, ziet er scheef uit en sluit niet. Wie in de oudheid een rechte hoek wilde uitzetten, had geen geodriehoek en geen laser, maar wel een touw. Een bekend hulpmiddel is een gesloten koord met twaalf knopen op gelijke afstand, dat je als driehoek met zijden van 3, 4 en 5 stukken spant. De hoek tussen de zijden van 3 en 4 stukken blijkt dan recht te zijn. Dat het touwtrucje werkt, volgt uit de stelling van Pythagoras, of preciezer: uit haar omgekeerde, waar we in les 4 uitgebreid naar kijken.

Daarnaast is er de vraag naar afstand. Hoe ver is het van de ene hoek van een kamer naar de andere? Hoe lang moet een ladder zijn om een raam te halen? Hoe lang is de diagonaal van een beeldscherm? Hoe ver liggen twee punten uit elkaar op een kaart? In al deze gevallen ken je twee *loodrechte* afstanden (een breedte en een hoogte, een verschil naar het oosten en een verschil naar het noorden) en zoek je de afstand die daar schuin tussenin ligt. Pythagoras maakt van twee loodrechte afstanden één schuine afstand. Daarmee is het de brug tussen *getallen* en *meetkunde*: de lengte van een lijnstuk wordt een rekensom.

Tot slot is de stelling een van de weinige uitspraken uit de wiskunde die je op tientallen verschillende manieren kunt *bewijzen*. Er zijn honderden bewijzen bekend. In deze module zie je er een paar: eentje met vier gelijke driehoeken in een vierkant, een oud Chinees diagram, het bewijs van Euclides en een trapezium dat in 1876 werd bedacht door iemand die later president van de Verenigde Staten werd. Wat die bewijzen gemeen hebben is een eenvoudig idee: je berekent dezelfde oppervlakte op twee manieren en vergelijkt het resultaat.

:::history Ouder dan de naam
Op Babylonische kleitabletten uit de periode ongeveer 1800 tot 1600 v.Chr. staan getallen en berekeningen waaruit blijkt dat de relatie tussen de zijden van een rechthoekige driehoek toen al bekend was. In India beschrijven de Sulbasutra's, handleidingen voor het uitzetten van altaren, een regel over het koord langs de diagonaal van een rechthoek. In China staat een rechthoekige driehoek met zijden 3, 4 en 5 in een oude astronomische tekst. De naam van de stelling verwijst naar de Griekse wijsgeer Pythagoras, die in de zesde eeuw v.Chr. leefde, maar over zijn eigen aandeel weten we verrassend weinig. In les 6 bekijken we wat de bronnen werkelijk laten zien.
:::

## Hoe deze module is opgebouwd

We gaan in kleine stappen. In les 2 leer je een rechthoekige driehoek te herkennen en zie je waarom de stelling over *vierkanten* gaat en niet over lengtes. In les 3 gebruik je de stelling om een ontbrekende zijde te berekenen, en leer je welke fouten het vaakst voorkomen. Les 4 draait om bewijzen en om de omgekeerde stelling: kun je aan de zijden zien of een driehoek een rechte hoek heeft? In les 5 reken je met afstanden in een assenstelsel en in de ruimte. Les 6 is het historische intermezzo, met pythagoreïsche drietallen en de oude bronnen. In les 7 pas je alles toe op ladders, schermen en bouwtekeningen, en in les 8 volgt de samenvatting en de toets.

Je hebt weinig voorkennis nodig. Je moet kunnen kwadrateren en wortels trekken (module 14), met letters rekenen (module 15) en weten hoe een assenstelsel werkt (module 17). Het is verstandig een rekenmachine bij de hand te hebben voor de wortels die niet netjes uitkomen, maar nodig om te begrijpen heb je hem niet.

{{ goals }}

{{ glossary }}

## Een eerste ervaring

Voordat je verder leest, probeer je zelf een paar situaties. Houd bij elke vraag het beeld van het weiland voor ogen: twee loodrechte stukken en één rechte verbinding. Het gaat er hier nog niet om dat je een formule toepast, maar dat je ziet welke zijde de rechte verbinding is.

{{ exercises: 18-001, 18-002 }}

## Bronnen

- MacTutor, [Pythagoras's theorem in Babylonian mathematics](https://mathshistory.st-andrews.ac.uk/HistTopics/Babylonian_Pythagoras/).
- MacTutor, [Pythagoras of Samos](https://mathshistory.st-andrews.ac.uk/Biographies/Pythagoras/).
