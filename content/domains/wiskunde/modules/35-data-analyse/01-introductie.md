# Een pomp in Broad Street

:::history Londen, eind augustus 1854
In de wijk Soho, midden in Londen, breekt op 31 augustus 1854 cholera uit. Binnen drie dagen sterven er ruim honderd mensen in en rond Broad Street; na tien dagen zijn het er meer dan vijfhonderd. Wie kan, vlucht de wijk uit.

Volgens de heersende opvatting ontstaat cholera door *miasma*: stinkende, "bedorven" lucht uit afval en riolen. De arts **John Snow** (1813–1858) twijfelt daar al jaren aan. Hij vermoedt dat de ziekte wordt overgedragen via besmet drinkwater. Soho haalt zijn water uit openbare straatpompen, en een daarvan staat op de hoek van Broad Street.
:::

Snow doet iets wat in 1854 nog lang niet vanzelfsprekend is: hij verzamelt **gegevens**. Hij vraagt bij het register van de burgerlijke stand de lijst van overledenen op, loopt de straten af, praat met nabestaanden en noteert per sterfgeval het adres en, waar mogelijk, waar het slachtoffer zijn water vandaan haalde. Zo ontstaat een dataset: een lange lijst waarnemingen, elk met dezelfde kenmerken.

![Kaart van John Snow](/images/history/m35-snow-cholerakaart.jpg "Kaart van John Snow (1854–1855) met de cholerasterfgevallen in Soho: elk zwart streepje is één sterfgeval; de pompen staan als PUMP aangegeven. Lithografie C.F. Cheffins. Via Wikimedia Commons, publiek domein.")

:::question Denk eerst zelf na
Stel dat jij in Snows schoenen staat. Je hebt een lijst met honderden adressen van overledenen en je weet waar de dertien pompen in de buurt staan.

- Hoe zou je die gegevens ordenen, zodat een patroon zichtbaar wordt? Een tabel? Een telling per straat? Een tekening?
- Welk patroon verwacht je als de ziekte via de **lucht** gaat? En welk patroon als ze via **één pomp** gaat?
- Op de kaart zie je dat er in een groot gebouw vlak bij de pomp (het armenhuis, *work house*) relatief weinig doden vielen, en in een brouwerij in Broad Street geen enkele. Is dat een argument tégen Snows idee, of juist ervóór? Welke extra informatie zou je willen hebben?

Neem rustig de tijd. Er is niet één goed antwoord; het gaat erom dat je merkt welke vragen je aan gegevens kunt stellen.
:::

Bewaar je antwoorden. In het historisch intermezzo zie je wat Snow werkelijk deed, en waarom zijn beroemde kaart minder een *ontdekking* was dan een *overtuigend bewijsstuk*. Daar zie je ook wat er met de pomp gebeurde.

## Waarom bestaat deze wiskunde?

In module 24 heb je geleerd hoe je een rijtje getallen samenvat: gemiddelde, mediaan, kwartielen, standaardafwijking. Dat is het gereedschap. Maar in de praktijk krijg je nooit een net rijtje getallen aangereikt. Je krijgt een spreadsheet met honderden rijen, waarin:

- sommige cellen leeg zijn, en andere een vreemde code bevatten zoals 99 of −999;
- dezelfde klant twee keer voorkomt omdat hij zich twee keer heeft aangemeld;
- het gewicht van één pakket in grammen staat terwijl de kolom "kg" heet;
- één meting zo ver van de rest ligt dat je niet weet of het een fout is of juist het interessantste getal van de hele tabel;
- twee variabelen samen lijken te hangen, terwijl er misschien een derde variabele achter zit.

**Data-analyse** is het vak dat de brug slaat tussen zo'n rommelige tabel en een betrouwbare conclusie. Het is minder een verzameling formules dan een werkwijze: eerst kijken, dan controleren, dan pas rekenen, en ten slotte eerlijk rapporteren. De statisticus John Tukey noemde het verkennende deel daarvan *exploratory data analysis*: de data ondervragen voordat je ze in een model stopt.

Je komt die werkwijze overal tegen. Een ziekenhuis wil weten of een nieuwe behandeling beter werkt. Een webwinkel vraagt zich af waarom de omzet in maart daalde. Een gemeente onderzoekt of een nieuw fietspad tot minder ongelukken leidt. Een journalist controleert of een grafiek in een persbericht wel klopt. In al die gevallen zijn de berekeningen meestal eenvoudig. Wat moeilijk is, is de juiste vraag stellen, fouten in de data herkennen en niet in de valkuilen trappen die verderop in deze module aan bod komen: misleidende grafieken, verwarring van correlatie en oorzaak, en de verraderlijke **paradox van Simpson**.

In deze module bouw je dat stap voor stap op:

1. **Datasets en datakwaliteit.** Rijen en kolommen, meetniveaus, en hoe je een tabel opschoont zonder informatie te vervalsen.
2. **Spreiding en uitschieters.** Kwartielen, interkwartielafstand en standaardafwijking opnieuw, nu als gereedschap om afwijkende waarnemingen op te sporen met de 1,5×IQR-regel en met z-scores.
3. **Visualiseren.** Welke grafiek past bij welke vraag, en hoe herken je een grafiek die meer belooft dan de data waarmaken?
4. **Samenhang.** Patronen in spreidingsdiagrammen, correlatie tegenover causaliteit, Simpsons paradox (met de toelatingscijfers van de Universiteit van Californië in Berkeley uit 1973) en het kwartet van Anscombe (1973).
5. **Geschiedenis.** Snow, Florence Nightingale, Tukey en Anscombe, en de opkomst van data science.

Deze module bouwt direct voort op module 24 (beschrijvende statistiek). De correlatiecoëfficiënt $r$ zie je hier alleen kwalitatief; in module 40 leer je hem uitrekenen en gebruik je hem voor regressie.

{{ goals }}

{{ glossary }}
