# Hetzelfde gemiddelde, andere gegevens

:::question Eén getal voor een heel bedrijf
Een bedrijf meldt trots dat het gemiddelde salaris € 3.800 per maand bedraagt. Een medewerker zegt dat zij en bijna al haar collega's duidelijk minder verdienen. Kunnen beiden gelijk hebben? Schrijf op hoe de salarissen dan verdeeld moeten zijn, voordat je verder leest.
:::

Ja, beiden kunnen gelijk hebben. Stel dat negen van de tien medewerkers € 3.000 verdienen en de directeur € 11.000. De som is $9 \times 3000 + 11000 = 38\,000$, dus het gemiddelde is € 3.800, terwijl negen van de tien mensen onder dat gemiddelde zitten. Het gemiddelde klopt, en toch geeft het een misleidend beeld. Wat ontbreekt, is een tweede getal dat vertelt hoe **verspreid** de gegevens zijn.

Dat is het onderwerp van deze module. Je werkte in module 12 al met gemiddelde, mediaan en modus. Hier bouw je daarop voort: je leert het centrum van een dataset nauwkeuriger te beschrijven, je leert spreiding te meten, en je leert twee groepen eerlijk te vergelijken. Je tekent en leest daarbij boxplots, en je maakt kennis met de standaardafwijking, een van de belangrijkste getallen uit de hele statistiek.

## Twee groepen, één gemiddelde

Neem twee groepen van drie meetwaarden. Groep A heeft de waarden 4, 5, 6 en groep B de waarden 0, 5, 10. Beide gemiddelden zijn 5. Toch zijn het totaal verschillende groepen: in A liggen alle waarden dicht bij elkaar, in B liggen ze ver uit elkaar. Eén centrummaat vertelt niet hoe dicht de waarnemingen bij elkaar liggen.

Je kunt dit zien in de widget hieronder. Voeg een waarde toe (probeer 20) en kijk wat er gebeurt met het gemiddelde en met de mediaan. Beschrijf eerst wat er verandert; verklaar daarna waarom de twee maten op een andere manier op dezelfde nieuwe waarde reageren.

{{ widget: stats values="4; 5; 6" }}

:::tip Eerst kijken, dan rekenen
Gebruik een widget niet om het antwoord te laten zien, maar om je eigen voorspelling te toetsen. Voorspel eerst: stijgt het gemiddelde meer dan de mediaan, of andersom? Pas daarna probeer je het uit.
:::

## Waarom bestaat beschrijvende statistiek?

In de zeventiende en achttiende eeuw verzamelden staten en kerken steeds meer cijfers: geboorten, sterfgevallen, oogsten, belastingen. Een lijst van duizenden getallen is onleesbaar. Wie er iets uit wil halen, moet de lijst **samenvatten**: in een getal voor het midden, in een getal voor de spreiding, in een plaatje dat de vorm laat zien.

In de negentiende eeuw kreeg die behoefte een filosofische lading. De Belgische wetenschapper Adolphe Quetelet (1796–1874) publiceerde in 1835 zijn boek *Sur l'homme et le développement de ses facultés*. Daarin beschreef hij de *homme moyen*, de 'gemiddelde mens': de gedachte dat menselijke eigenschappen zoals lichaamslengte zich groeperen rond een middelwaarde, op een manier die lijkt op hoe meetfouten zich groeperen rond de ware waarde.

:::history Quetelet en de gemiddelde mens, 1835
Quetelet paste de verdeling die astronomen gebruikten voor meetfouten toe op menselijke kenmerken. Het gemiddelde was voor hem meer dan een rekenkundig gemiddelde: hij zag het als het 'typische' van een bevolking. Zijn denken leidde tot een lange discussie over de vraag hoeveel een gemiddelde zegt over één individu, een discussie die tot vandaag doorgaat. In les 6 lees je meer over zijn opvolgers.
:::

De keerzijde van die gedachte ken je al uit het salarisvoorbeeld: een gemiddelde beschrijft een groep, niet iedere persoon in de groep. Daarom heb je spreidingsmaten nodig, en daarom is deze module meer dan een verzameling formules.

## Wat beschrijf je eigenlijk? Populatie en dataset

Beschrijvende statistiek vat **waargenomen data** samen. Je begint bij wat gemeten is: in welke eenheid, bij hoeveel personen of objecten, en onder welke omstandigheden. Twee begrippen houd je daarbij uit elkaar.

De **populatie** is de volledige verzameling waarover je een uitspraak wilt doen: alle leerlingen van een school, alle pakjes koffie die een fabriek in een week vult, alle inwoners van Nederland. Een **steekproef** is een deel van die populatie dat je daadwerkelijk onderzoekt. Als je data de hele populatie omvatten (alle 24 leerlingen van één klas, als de klas het onderwerp is), is er niets om naar te generaliseren: je beschrijft precies wat er is. Zijn de data een steekproef uit een grotere populatie, dan wil je meestal iets zeggen over die grotere populatie, en dat is een andere vraag. Hoe je dat verantwoord doet, komt in module 38 en 39 aan bod. In deze module houd je het onderscheid wel in het oog, omdat het bij de variantie (les 4 en 5) tot een andere formule leidt.

Ook de soort variabele doet ertoe. Een *kwantitatieve* variabele is een getal waarmee je kunt rekenen: lengte, reistijd, aantal broers en zussen. Een *kwalitatieve* variabele is een categorie, zoals lievelingskleur. Een gemiddelde van lievelingskleuren bestaat niet; een modus wel. In deze module werk je vrijwel uitsluitend met kwantitatieve variabelen.

:::definition Dataset en variabele
Een **dataset** is een verzameling waarnemingen. Een **variabele** is het kenmerk dat je per waarneming vastlegt. Bij 30 leerlingen die je weegt, is het gewicht de variabele en zijn de 30 gewichten de dataset.
:::

## Wat je in deze module leert

{{ goals }}

Een korte lijst van kernbegrippen ter oriëntatie:

{{ glossary }}

## Begeleide oefeningen

Begin met de twee groepen uit het begin van de les. Bereken per groep het gemiddelde, en kijk daarna wat de spreidingsbreedte (maximum min minimum) zegt.

{{ exercises: 24-001, 24-002, 24-003 }}
