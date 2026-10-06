# Hoogte meten zonder te klimmen

Je staat 20 meter van een verticale toren. De kijklijn naar de top maakt een hoek van 35° met de horizontaal. Je oog bevindt zich 1,60 meter boven de grond. Hoe hoog is de toren?

Geen touw, geen ladder, geen klim: alleen een afstand die je met een meetlint over het gras uitrolt en een hoek die je met een eenvoudig instrument afleest. Toch kun je er de hoogte van een gebouw uit berekenen. Hoe kan dat? Het antwoord vormt de kern van deze module, en het is een van de oudste toepassingen van de wiskunde: *indirect meten*.

:::question Denk eerst zelf na
Je kent in de driehoek tussen jouw voeten, de voet van de toren en de top slechts één zijde (20 meter) en één scherpe hoek (35°). Pythagoras vraagt om twee zijden, dus daar kom je niet mee verder. Welke extra informatie zou je nodig hebben om de torenhoogte te vinden? En is het denkbaar dat die informatie al in de hoek van 35° verborgen zit?
:::

## Een probleem van landmeters en sterrenkundigen

De vraag is niet nieuw. Wie in de oudheid een dijk, een kanaal of een tempel wilde uitzetten, kon zelden elke afstand direct meten: een rivier ligt in de weg, een berg is te steil, een toren te hoog. Landmeters losten dat op door een stuk van de wereld na te bouwen als een kleine, meetbare driehoek en daarna met schaalverhoudingen te redeneren. Het verhaal gaat dat de Griekse denker Thales op die manier de hoogte van een piramide bepaalde, met behulp van schaduwlengtes. Of dat precies zo is gebeurd, weten we niet zeker, maar de redenering is wel de kiem van alles wat in deze module volgt.

Een tweede bron is de sterrenkunde. Een sterrenkundige meet nooit een afstand naar een ster; hij meet *hoeken* aan de hemel: de hoek tussen twee sterren, de hoogte van de zon boven de horizon. Wil hij uit die hoeken iets afleiden over banen en afstanden, dan heeft hij een betrouwbare manier nodig om hoeken en lengtes in elkaar om te zetten. Hipparchus (2e eeuw v.Chr.) stelde daarvoor, voor zover bekend als eerste, een tabel op. Daarover lees je meer in les 6.

## Waarom bestaat deze wiskunde?

Het woord *goniometrie* komt uit het Grieks: *gonia* betekent hoek en *metron* maat. Goniometrie is dus letterlijk hoekmeting. De wiskunde achter dat woord beantwoordt één vraag: hoe vertaal je een hoek naar een lengte, en een lengte terug naar een hoek?

Het geheim zit in gelijkvormigheid. Twee rechthoekige driehoeken met dezelfde scherpe hoek zijn elkaars vergroting of verkleining. Alle zijden groeien dan met dezelfde factor, en de *verhouding* van twee zijden verandert niet. Bij een hoek van 35° hoort dus een vast getal: de verhouding tussen overstaande en aanliggende zijde, hoe groot de driehoek ook is. Dat getal heet de **tangens** van 35°. Zodra je dat getal kent, is de torenhoogte een kwestie van vermenigvuldigen.

:::theory De kern in drie zinnen
In een rechthoekige driehoek ligt de verhouding tussen twee zijden vast zodra je één scherpe hoek kent. Daardoor kun je met één hoek en één zijde alle andere zijden berekenen. En andersom: uit twee zijden volgt de hoek.
:::

Moderne rekenmachines kennen de bijbehorende getallen uit het hoofd; vroeger bestonden ze uit tabellen die generaties astronomen met veel moeite hebben berekend. In deze module gebruik je de rekenmachine, maar je leert wel begrijpen wat de toetsen *sin*, *cos* en *tan* eigenlijk doen. Dat begrip is nodig om de juiste toets te kiezen en een onzinnige uitkomst te herkennen.

## De route door deze module

In les 2 leer je de zijden van een rechthoekige driehoek benoemen vanuit een gekozen hoek, want de namen *overstaand* en *aanliggend* hangen af van de hoek die je kiest. Les 3 definieert sinus, cosinus en tangens, geeft een ezelsbruggetje met een reden erachter en laat zien wat er gebeurt bij 30°, 45° en 60°. In les 4 bereken je onbekende zijden; in les 5 draai je het om en vind je hoeken met de inverse functies, inclusief hellingshoek en hellingspercentage. Les 6 vertelt hoe cirkelkoorden, Indiase halve koorden en een vertaalvergissing de woorden en de tabellen hebben opgeleverd die wij gebruiken. Les 7 brengt alles samen in praktijkproblemen: bomen, torens, daken en ladders. Les 8 vat samen en leidt naar de toets.

:::tip Werkwijze
Maak bij elke opgave een schets, ook als er een figuur bij staat. Zet de hoek erin, benoem O, A en S, en kies dan pas een verhouding. Dat kost een halve minuut en voorkomt de meeste fouten in deze module.
:::

{{ goals }}

## Experimenteer met de driehoek

De onderstaande driehoek is een vrije speeltuin. Je kunt de hoek en de lengte van de schuine zijde veranderen en zien wat er met de andere zijden en met de verhoudingen gebeurt.

{{ widget: right-triangle angle="35" hypotenuse="10" }}

Verander eerst alleen de schuine zijde, dus de schaal van de tekening. Welke getallen veranderen, en welke verhoudingen blijven gelijk? Verander daarna de hoek terwijl je de schaal laat staan. De bijbehorende verhoudingen veranderen nu wel. Daarmee heb je de hoofdgedachte van deze module al zelf ontdekt: de verhoudingen horen bij de *hoek*, niet bij de *grootte*.

![Waarnemer meet de hoogtehoek van een toren](/images/diagrams/m22-hoogtehoek.svg "De opgave uit de inleiding: horizontale afstand 20 m, hoogtehoek 35°, ooghoogte 1,60 m. Eigen figuur.")

Het diagram hierboven laat zien hoe je het probleem als driehoek modelleert. De horizontale afstand is de aanliggende zijde A, het hoogteverschil boven je oog is de overstaande zijde O. De gevraagde torenhoogte is O plus je ooghoogte. In les 7 werk je dit helemaal uit; eerst bouw je het gereedschap.

{{ glossary }}

## Eerst oefenen met de basis

Twee korte opgaven om te controleren of de gelijkvormigheid helder is: de som van de scherpe hoeken en het effect van schalen.

{{ exercises: 22-001, 22-002 }}
