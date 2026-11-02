## Het probleem en de stand van de techniek

Een goed projectplan begint niet bij de oplossing, maar bij het probleem. Wie heeft het, hoe groot is het en wat kost het nu? "Betonconstructies verouderen" is te algemeen; "de inspectie van gelaste verbindingen in offshore windturbinefunderingen vraagt nu duikers en kost per verbinding gemiddeld een dag" is een probleem met een omvang. De beoordelaar leest het probleem om te beoordelen of er een markt is (economische waarde) en of het ertoe doet (impact).

Direct daarna volgt de **stand van de techniek**: wat bestaat er al, wat doen anderen en wat schiet tekort? Dit is het deel waarin vernieuwing wordt aangetoond, want "nieuw" is alleen betekenisvol ten opzichte van iets. Een goede stand-van-de-techniek-paragraaf noemt concrete bestaande oplossingen, publicaties of octrooien, en geeft per oplossing aan waarom die het probleem niet oplost. Een veelgemaakte fout is te schrijven dat er "geen concurrenten" zijn. Zo'n bewering is zelden waar en leest als een teken dat de schrijver niet heeft gezocht. Beter is: "Er zijn vier benaderingen (A tot en met D). Elk lost een deel op, maar geen daarvan werkt bij X."

:::example Van algemeen probleem naar probleem met omvang
Zwakke formulering: "Voedselverspilling is een groot probleem in de logistiek."

Stap 1, wie heeft het probleem? Distributiecentra voor verse groente.

Stap 2, hoe groot? Per jaar gaat in een distributiecentrum van 20.000 ton gemiddeld 3% bederf verloren; dat is 600 ton.

Stap 3, wat kost het nu? Bij een gemiddelde inkoopwaarde van € 1.200 per ton is dat € 720.000 per jaar.

Stap 4, wat bestaat er al? Temperatuurlogging in de koelcel, maar niet op palletniveau tijdens transport.

Sterke formulering: "Een distributiecentrum van 20.000 ton verliest per jaar ongeveer 3% (600 ton, circa € 720.000) aan bederf. Bestaande temperatuurlogging werkt op celniveau en ziet niet welke pallets tijdens transport te warm zijn geweest."
:::

## De innovatieve stap en de technische risico's

Het hart van het plan is de **innovatieve stap**: wat gaat het project doen dat niet eerder is gedaan? Beschrijf het op het niveau van het onderzoek, niet van het product. "Wij ontwikkelen een app" is geen innovatieve stap; "wij ontwikkelen een algoritme dat uit temperatuurdata op palletniveau de resterende houdbaarheid voorspelt met een afwijking van minder dan twee dagen" is er wel een, omdat het een meetbaar technisch doel noemt. Een goede innovatieve stap is specifiek, meetbaar en onzeker: het is niet zeker dat het lukt.

Dat laatste is een vereiste, geen bekentenis. Een project zonder technisch risico is geen onderzoek en ontwikkeling maar toepassing. Beschrijf daarom de **technische risico's** expliciet: wat kan er misgaan, hoe waarschijnlijk is dat, wat is het effect en hoe ga je ermee om? Een bruikbare opzet is een korte tabel of een alinea per risico met drie delen: het risico, de kans en gevolgen, en de aanpak (de *mitigatie*). Voorbeelden van risico's zijn: het algoritme haalt de gewenste nauwkeurigheid niet, een sensor verliest te veel signaal in een koelcontainer of een partner levert te laat de testdata.

:::tip Risico's maken een plan sterker
Veel schrijvers aarzelen om risico's te noemen, uit angst dat het plan zwak lijkt. Het omgekeerde is waar. Een beoordelaar kent de onzekerheden van onderzoek en vertrouwt een team dat ze ziet. Een plan zonder risico's lijkt daardoor onbetrouwbaar of niet innovatief.
:::

{{ exercises: 04-001, 04-002 }}

## Werkpakketten, mijlpalen en go/no-go-momenten

Het werk wordt verdeeld in **werkpakketten**: afgebakende blokken met een doel, een trekker (wie is verantwoordelijk), activiteiten, opgeleverde resultaten (*deliverables*) en een omvang in personeelsuren of -maanden. Voor een project van twee jaar zijn drie tot vijf werkpakketten gebruikelijk: bijvoorbeeld vooronderzoek, ontwikkeling van het kerncomponent, integratie, test in de praktijk, en projectmanagement en kennisverspreiding. Elk werkpakket heeft een duidelijk begin en een duidelijk resultaat; "onderzoek" als pakket zonder eindpunt is te vaag.

Binnen de werkpakketten staan **mijlpalen**: controleerbare momenten waarop een resultaat is bereikt, zoals "prototype 1 werkt in het lab met een nauwkeurigheid van ten minste 90%" (maand 8). Een mijlpaal moet je kunnen *aanwijzen*: het is behaald of niet. Een goede mijlpaal is meetbaar.

Sommige mijlpalen zijn ook **go/no-go-momenten**: punten waar het consortium beslist of het project doorgaat, wordt aangepast of stopt. Ze laten zien dat de partijen het technische risico serieus nemen. Een go/no-go-moment heeft een criterium ("als de nauwkeurigheid onder 80% blijft, dan schakelen we over op alternatief B") en een besluitvormer.

:::example Een werkpakket uitgewerkt
Werkpakket 2: ontwikkeling van het voorspelalgoritme (maand 3 tot 12). Trekker: Datalab B.V. (fictief).

Doel: een algoritme dat uit temperatuur- en trilgegevens per pallet de resterende houdbaarheid voorspelt.

Activiteiten: verzamelen van 200 pallet-ritten aan meetgegevens; trainen en valideren van drie modeltypes; vergelijking met laboratoriummetingen van houdbaarheid.

Deliverable: algoritme met gedocumenteerde nauwkeurigheid.

Omvang: 18 personeelsmaanden.

Mijlpaal (maand 9): nauwkeurigheid van minder dan twee dagen afwijking op de testset. Go/no-go: bij een afwijking van meer dan vier dagen wordt overgeschakeld op een eenvoudiger regelgebaseerd model.
:::

{{ exercises: 04-003, 04-004 }}
