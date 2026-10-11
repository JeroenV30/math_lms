# Een oppervlakte die niet rechtlijnig groeit

Stel je een landmeter voor in het Mesopotamië van rond 1800 v.Chr. Hij krijgt een vierkant veld toegewezen en moet aan de opdrachtgever laten weten hoe groot het is. Dat is niet moeilijk: zijde maal zijde. Maar de opdrachtgever stelt vaak de omgekeerde vraag. Hij heeft een veld waarvan de oppervlakte én de zijde bij elkaar opgeteld een bekend getal geven, en hij wil weten hoe lang de zijde is. Op kleitabletten uit die tijd staan tientallen van zulke opgaven, met de oplossing erbij uitgeschreven als een recept. In onze notatie zijn het kwadratische vergelijkingen.

Wat maakt zulke vragen lastiger dan de lineaire vergelijkingen uit de vorige modules? Kijk eerst naar het vierkant zelf.

:::question Eerst nadenken
Een vierkant heeft zijde 1, 2, 3, 4. Schrijf de oppervlakten op en bereken telkens hoeveel de oppervlakte erbij komt als de zijde met 1 groeit. Zie je een patroon in die toenames?
:::

Hieronder staat het antwoord in een tabel. De oppervlakte is $x^2$ en de toename is het verschil met de vorige rij.

| zijde $x$ | 0 | 1 | 2 | 3 | 4 | 5 |
|---|---|---|---|---|---|---|
| oppervlakte $x^2$ | 0 | 1 | 4 | 9 | 16 | 25 |
| toename | | 1 | 3 | 5 | 7 | 9 |

De toenames zijn de opeenvolgende oneven getallen. Dat is geen toeval. Wie een vierkant met zijde $n$ uitbreidt naar zijde $n+1$, moet er een L-vormige rand omheen leggen: een strook van $n$ langs de ene kant, een strook van $n$ langs de andere kant en één hoekvierkantje. Dat is $2n+1$ erbij, en dat getal groeit zelf ook steeds door.

![Vierkanten met zijde 1 tot en met 4, elk uitgebreid met een L-vormige rand](/images/diagrams/m21-kwadraat-groei.svg "Het vierkant met zijde n+1 ontstaat uit dat met zijde n plus een L-vormige rand van 2n+1 tegels.")

Bij een lineaire functie is de toename bij elke stap gelijk: de grafiek is een rechte lijn. Hier verandert de toename zélf, en wel met een vaste stap van 2 (1, 3, 5, 7, 9, ...). Dat is het kenmerk van een **kwadratische functie**: niet de waarde, niet de verandering, maar de verandering van de verandering is constant. De grafiek is geen lijn maar een kromme die we een **parabool** noemen.

## Waarom bestaat deze wiskunde?

Er zijn drie hoofdredenen waarom kwadratische verbanden overal opduiken, en ze keren in deze module terug.

De eerste is **oppervlakte**. Zodra je twee afmetingen met elkaar vermenigvuldigt en beide veranderen, ontstaat een kwadratisch verband. Heb je een vaste hoeveelheid hek en wil je er een zo groot mogelijk perk mee omheinen, dan is de oppervlakte een kwadratische functie van de breedte, en de vraag naar het *beste* perk wordt de vraag naar de top van een parabool.

De tweede is **beweging onder een constante kracht**. Een bal die je omhoog gooit, wordt door de zwaartekracht met een constante versnelling afgeremd; de hoogte hangt dan kwadratisch van de tijd af. Galilei beschreef in 1638 dat het pad van een geworpen voorwerp een parabool is, en dat inzicht ligt onder alles wat we nu over ballistiek en sport weten.

De derde is **optimalisatie in de economie**. Verhoog je de prijs van een product, dan verdien je per stuk meer maar verkoop je er minder. De winst is het product van die twee en dus kwadratisch in de prijs. Er is dan een prijs waarbij de winst het grootst is, en twee prijzen waarbij je precies quitte speelt.

:::history Kwadratische problemen op klei
Uit het oude Babylonië zijn kleitabletten bewaard met opgaven die in onze notatie neerkomen op vergelijkingen als $x^2+x=\tfrac34$. De schrijvers losten ze op met een vaste reeks rekenstappen, zonder letters en zonder negatieve getallen. In les 6 kijken we naar één zo'n tablet, BM 13901, en naar de meetkundige methode die de Perzische wiskundige al-Khwarizmi rond 820 uitwerkte. Let op: de moderne notatie met $ax^2+bx+c$ is veel jonger dan de tabletten. Wat wij op die tabletten zien, is een methode, geen formule.
:::

## Wat je in deze module leert

Je begint met de simpelste parabool, $y=x^2$, en onderzoekt wat er gebeurt als je de getallen $a$, $b$ en $c$ in $y=ax^2+bx+c$ verandert. Je leert de top en de symmetrie-as uit een formule te halen en de formule in drie gedaanten te schrijven: standaardvorm, topvorm en productvorm. Daarna ga je kwadratische vergelijkingen oplossen: met ontbinden, met kwadraat afsplitsen en met de abc-formule. De discriminant vertelt je van tevoren hoeveel oplossingen er zijn. Tot slot pas je dit toe op een worp, een omheining en een winstfunctie.

Je hebt het werken met haakjes en lineaire functies nodig uit de modules 15 tot en met 19, en het oplossen van lineaire vergelijkingen uit module 16.

{{ goals }}

{{ glossary }}

Doe eerst de eerste oefeningen om het idee van een kwadratisch verband te voelen.

{{ exercises: 21-001, 21-002, 21-031 }}
