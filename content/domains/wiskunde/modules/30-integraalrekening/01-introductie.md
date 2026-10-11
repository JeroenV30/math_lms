# Een stuk parabool

:::history Syracuse, ca. 250 v.Chr.
Archimedes van Syracuse stuurt een brief naar Dositheus, een bevriende wiskundige in Alexandrië. Bij de brief zit een korte verhandeling die we nu kennen als *De kwadratuur van de parabool*. Het probleem is even eenvoudig te formuleren als moeilijk op te lossen: snijd een parabool af met een rechte lijn. Hoe groot is het gebogen stuk dat je dan krijgt?

Voor rechthoeken, driehoeken en veelhoeken wisten de Grieken al eeuwen hoe je een oppervlakte bepaalt. Maar een figuur met een *gebogen* rand is iets anders. Je kunt hem niet in een eindig aantal driehoeken knippen. Archimedes laat in zijn verhandeling zien dat het stuk parabool toch exact te meten is: het is precies $\tfrac{4}{3}$ keer zo groot als een bepaalde driehoek die erin past.
:::

Archimedes bewees zijn resultaat zelfs op twee manieren: één keer met een gedachte-experiment met een hefboom, één keer zuiver meetkundig. In die tweede methode vult hij het stuk parabool met steeds meer en steeds kleinere driehoeken, en hij telt hun oppervlakten op tot in het oneindige. Dat idee, *een gebogen figuur benaderen met steeds fijnere rechte stukjes en dan de limiet nemen*, is precies het idee achter de integraalrekening, bijna tweeduizend jaar voordat die naam bestond.

![Parabolisch segment met ingeschreven driehoek](/images/diagrams/m30-archimedes-segment.svg "Het segment tussen de parabool y = x² en de lijn y = 2x + 3. Archimedes bewees dat het segment 4/3 keer zo groot is als de bruine driehoek. Het derde hoekpunt ligt waar de raaklijn evenwijdig loopt aan de koorde.")

:::question Denk eerst zelf na
Bekijk de grafiek van $y = x^2$ tussen $x = 0$ en $x = 1$. Het gebied onder de grafiek, boven de $x$-as, en links van de lijn $x = 1$ is een gebogen driehoekje.

- Het vierkant van $0$ tot $1$ bij $0$ tot $1$ heeft oppervlakte $1$. De rechte driehoek met hoekpunten $(0, 0)$, $(1, 0)$ en $(1, 1)$ heeft oppervlakte $\tfrac{1}{2}$. Ligt het gebogen gebied binnen die driehoek of erbuiten? Is de oppervlakte dus meer of minder dan $\tfrac{1}{2}$?
- Maak een schatting. Is het ongeveer $0{,}2$? $0{,}3$? $0{,}4$?
- Bedenk een manier om je schatting te verbeteren. Wat zou je kunnen tekenen of uitrekenen om dichter bij het echte antwoord te komen?

Schrijf je schatting op. In de volgende lessen kom je er op drie manieren achter: eerst met rechthoekjes, dan met een limiet, en ten slotte met één regel van de hoofdstelling.
:::

Een tip vooraf: Archimedes' antwoord voor het grote segment in de figuur is $\tfrac{4}{3} \cdot 8 = \tfrac{32}{3}$. Aan het eind van deze module kun je dat zelf narekenen, in een paar regels, met een methode die Archimedes niet had.

## Waarom bestaat deze wiskunde?

In module 29 heb je geleerd hoe je uit een functie haar **veranderingssnelheid** haalt: de afgeleide. Integraalrekening gaat de andere kant op. Je kent een snelheid, een tempo, een dichtheid, en je wilt weten hoeveel er in totaal is **opgebouwd**. Dat probleem duikt overal op.

- **Afgelegde weg.** Een snelheidsmeter vertelt je op elk moment hoe snel je gaat, niet hoe ver je bent. Rijd je een uur lang precies 80 km/h, dan is de afstand $80 \cdot 1 = 80$ km. Maar als de snelheid voortdurend verandert, zoals bij optrekken en remmen, werkt "snelheid maal tijd" niet meer zomaar.
- **Hoeveelheden uit een tempo.** Een kraan levert water in liters per minuut, een zonnepaneel levert vermogen in kilowatt, een regenbui valt met een intensiteit in millimeter per uur. Wie wil weten hoeveel liter, kilowattuur of millimeter er in totaal is gekomen, moet het tempo *ophopen* over de tijd.
- **Oppervlakten en inhouden.** Hoeveel grond ligt er tussen een rivieroever en een weg? Hoeveel wijn zit er in een bolle ton? Johannes Kepler schreef er in 1615 een heel boek over, nadat hij op zijn eigen bruiloft had gezien hoe wijnhandelaars de inhoud van vaten schatten met één schuin ingestoken peilstok.
- **Economie en statistiek.** De totale kosten volgen uit de marginale kosten, de totale opbrengst uit een opbrengstsnelheid. En in de kansrekening (deel VII van deze cursus) is een kans vaak een oppervlakte onder een kromme.

Wiskundig komen al deze vragen neer op hetzelfde: **de oppervlakte onder een grafiek**. Bij een constante snelheid is dat een rechthoek, bij een veranderende snelheid een gebogen figuur. De integraalrekening geeft je twee gereedschappen om die oppervlakte te vinden: **benaderen** met rechthoekjes (dat werkt altijd, ook voor meetgegevens) en **exact berekenen** met een primitieve functie (dat werkt als je een formule hebt).

Het verrassende en diepe resultaat van deze module is dat die twee vragen, de oppervlakte onder een grafiek en de afgeleide van een functie, elkaars omgekeerde zijn. Dat is de **hoofdstelling van de integraalrekening**, en ze is de reden dat Newton en Leibniz in de zeventiende eeuw met recht als uitvinders van "de calculus" gelden: niet omdat ze als eersten raaklijnen of oppervlakten bestudeerden, maar omdat ze zagen dat het om één en dezelfde theorie ging.

## Hoe deze module is opgebouwd

1. **Oppervlakte benaderen met rechthoeken.** Ondersom, bovensom, linker-, rechter- en middensom. Wat er gebeurt als je het aantal rechthoeken verdubbelt.
2. **De bepaalde integraal en accumulatie.** De integraal als limiet, de notatie $\int_a^b f(x)\,dx$, oppervlakte met teken, rekenregels, en de integraal als "totaal uit een tempo".
3. **Primitieven.** Differentiëren in omgekeerde richting, de constante $C$ en de machtsregel voor primitieven.
4. **De hoofdstelling.** Waarom de oppervlaktefunctie een primitieve is, hoe je daarmee integralen exact berekent, en oppervlakten tussen grafieken.
5. **Historisch intermezzo.** Van Eudoxus en Archimedes via Kepler en Cavalieri naar Newton, Leibniz en Riemann.
6. **Praktijk en uitdaging.** Remwegen, regenval, zonne-energie, gemiddelde waarden, en Archimedes' parabool narekenen.

Je hebt hiervoor de afgeleide van machtsfuncties en polynomen nodig (module 29), rekenen met machten en wortels (module 14; negatieve en gebroken exponenten herhalen we in les 3), en het vlot werken met breuken. Van module 28 komt het idee van een som van veel termen en van een limiet goed van pas.

{{ goals }}

{{ glossary }}
