## Programmatuur: technisch nieuw is meer dan nieuw

Bij software is het verschil tussen *nieuw* en *technisch nieuw* het lastigst, omdat bijna elk softwareproject iets bouwt wat er eerst niet was. Dat is volgens de Handleiding WBSO 2026 vrijwel altijd *nieuw*, maar het is daarmee nog geen *technisch nieuwe* programmatuur. De handleiding omschrijft programmatuur als het niet-fysieke, logische deelsysteem van een informatiesysteem dat de structuur van de gegevens en de verwerkingsprocessen bepaalt, voor zover dat deelsysteem is vastgelegd in een formele programmeertaal.

Er is sprake van S&O als er een nieuw informatietechnologisch principe in de programmatuur zit *en* je de technische knelpunten zelf oplost. Kenmerkend is het iteratieve karakter: je probeert, meet, past aan. Het traject eindigt zodra je een nieuw informatietechnologisch werkingsprincipe hebt aangetoond.

Wat valt er buiten? De handleiding noemt onder meer: het beschrijven van modellen, het formuleren van algoritmen of het beschrijven van een architectuur; het toepassen, samenstellen of implementeren van programmatuur; en het ontwerpen en realiseren van nieuwe functionaliteit (bouwstenen, modulen, pakketten) op basis van beschikbare technologie, of het bouwen van systemen. Dat laatste is waar de meeste softwarebedrijven zich in bevinden: ze bouwen op wat er al is, en dat is meestal vakwerk, geen S&O.

:::example Het verschil tussen project en probleem
Een bedrijf bouwt een systeem dat routes plant. Het *project* is het hele systeem. Maar het *informatietechnologische probleem* kan zijn dat het bestaande algoritme de gewenste snelheid niet haalt. Ontwikkelt het bedrijf een nieuw en efficiënter algoritme, dan kan dat technisch nieuwe programmatuur zijn, mits het is vastgelegd in een formele programmeertaal. Alleen het beschrijven of formuleren van een nieuw algoritme op papier valt niet onder S&O. De rest van het routesysteem, zoals schermen, koppelingen en rapportages, is gewoon bouwwerk. Dus: een S&O-project kan een klein, technisch afgebakend onderdeel zijn van een veel groter softwareproject.
:::

De handleiding geeft ook een tegenvoorbeeld uit de praktijk. Een bedrijf maakt een app voor artsen die medicatie voorstelt. Het gebruikt machine learning met bestaande hulpmiddelen, zoals TensorFlow, om een model te trainen, en past dat toe in de app. Het bedrijf ontwikkelt daarmee geen eigen programmatuur met een nieuw technisch principe: het past bestaande technologie toe. Dat het resultaat voor artsen nieuw is, doet er niet toe. Een ander bedrijf koppelt machines aan een dashboard met beschikbare API's: ook dat valt er niet onder. Een bedrijf dat de realtime communicatie tussen twee machines moet synchroniseren omdat de machinefabrikant daar geen oplossing voor biedt, en daarvoor in een programmeertaal als C een eigen oplossing ontwikkelt, kan wel S&O doen.

{{ exercises: 02-007, 02-008 }}

## Technisch-wetenschappelijk onderzoek

De tweede projectsoort is *technisch-wetenschappelijk onderzoek* (TWO). Het begrip heeft twee woorden die elk een eis stellen. **Technisch** betekent dat het onderzoek in gebieden als natuurkunde, scheikunde, biotechnologie, productietechnologie of informatie- en communicatietechnologie ligt; economisch, sociaal of psychologisch onderzoek valt er niet onder. **Wetenschappelijk** gaat over doel, resultaat en opzet.

Het doel van TWO is een verklaring te vinden voor een verschijnsel die je niet kunt geven op basis van algemeen toegankelijke kennis. Er is een risico dat je de verklaring niet vindt. Het onderzoek moet *verklaren* en niet constateren, beschrijven, inventariseren, coderen of vertalen. Je verzamelt niet alleen bestaande gegevens, maar het onderzoek levert zelf theoretische of praktische kennis op. De opzet moet bekend zijn op het moment van aanvragen, planmatig en niet routinematig zijn, en je legt het traject en de resultaten vast.

Het onderscheid tussen verklaren en vaststellen is het scherpste. De handleiding illustreert het met twee voorbeelden uit de levensmiddelen- en kunststofindustrie. Een ondernemer zoekt een verklaring voor het verschil in hittetolerantie van micro-organismen in tomatensaus: hij onderzoekt de achterliggende werkingsmechanismen. Dat is TWO. Voert dezelfde ondernemer alleen verschillende testen uit om de effecten in kaart te brengen en kiest hij daarna de beste behandeling, dan kijkt hij naar verbanden en correlaties, maar zoekt hij geen verklaring: geen TWO. Een spuitgietbedrijf dat productafwijkingen waarneemt bij regeneraat en met een design of experiments de omstandigheden in kaart brengt, stelt vast maar verklaart niet.

:::tip Het toetsvraagje voor onderzoek
Vraag jezelf bij elk onderzoeksproject: *wil ik weten dat het werkt, of waaróm het werkt?* Alleen de tweede vraag is TWO. Het eerste is testen of optimaliseren, hoe nuttig ook.
:::

{{ exercise: 02-009 }}
