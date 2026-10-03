# Drie soorten graan

:::history China, Han-dynastie (ca. 200 v.Chr. – 100 n.Chr.)
Een ambtenaar moet de opbrengst van een oogst beoordelen. Er zijn drie kwaliteiten graan: goed, middelmatig en slecht. Hij weet niet hoeveel graan één bundel van elke soort oplevert, maar hij heeft wel drie gecombineerde metingen:

- 3 bundels goed, 2 bundels middelmatig en 1 bundel slecht graan leveren samen 39 *dou* graan op;
- 2 bundels goed, 3 bundels middelmatig en 1 bundel slecht graan leveren samen 34 *dou* op;
- 1 bundel goed, 2 bundels middelmatig en 3 bundels slecht graan leveren samen 26 *dou* op.

Hoeveel *dou* levert één bundel van elke soort op? (Een *dou* is een Chinese inhoudsmaat.)
:::

Dit is de eerste opgave van hoofdstuk 8 van de **Negen Hoofdstukken over de Wiskundige Kunst** (*Jiuzhang suanshu*), een Chinees leerboek dat in de Han-tijd zijn vorm kreeg. Het hoofdstuk heet *fangcheng*, wat vaak vertaald wordt als "rechthoekige schikking". Dat is een treffende naam. De rekenaar zette de getallen van zo'n probleem met **rekenstaafjes** in een rechthoekig schema op een rekenbord: elke voorwaarde een kolom, elke graansoort een rij, en onderaan de opbrengst.

![Het rekenbord voor het graanprobleem](/images/diagrams/m32-rekenbord.svg "De drie voorwaarden van het graanprobleem als kolommen op een rekenbord. De Chinese rekenaars legden de getallen met staafjes; hier staan ze in moderne cijfers.")

Daarna voerde de rekenaar met die kolommen een vaste reeks handelingen uit: een kolom met een getal vermenigvuldigen, een andere kolom ervan aftrekken, en dat herhalen tot er een kolom overbleef met nog maar één onbekende. Ruim tweeduizend jaar later heet zo'n schema een **matrix**, en de rekenmethode **Gauss-eliminatie** of, in het Nederlands, **vegen**.

:::question Denk eerst zelf na
Kijk naar de drie metingen zonder formules op te schrijven.

- De eerste en de tweede meting bevatten allebei precies 1 bundel slecht graan. Wat zegt het verschil tussen die twee metingen over het verschil tussen goed en middelmatig graan?
- Kun je op een vergelijkbare manier een combinatie van metingen maken waarin het goede graan helemaal verdwijnt?
- Hoe zou je zo'n stappenplan zo noteren dat je niet de draad kwijtraakt, zeker als er vier of vijf soorten graan zouden zijn?

Neem een paar minuten. Het antwoord krijg je in les 4, waar je dit probleem stap voor stap oplost. Een tip vooraf: het antwoord bestaat niet uit hele getallen.
:::

Bewaar je aantekeningen. Je zult zien dat de Chinese rekenaars en de moderne computer in wezen hetzelfde doen.

## Waarom bestaat deze wiskunde?

In module 20 heb je stelsels met twee onbekenden opgelost met substitutie en eliminatie. Dat ging goed met de hand, omdat je maar twee vergelijkingen had. Maar zodra problemen groter worden, heb je twee dingen nodig: een **compacte notatie** voor grote hoeveelheden getallen, en een **vast stappenplan** dat altijd werkt. Een matrix levert allebei.

Matrices komen in heel verschillende situaties voor.

- **Tabellen met gegevens.** Een winkelketen houdt per filiaal en per product bij hoeveel er verkocht is. Een spreadsheet is in feite een grote matrix. Met matrixbewerkingen tel je weekcijfers op, reken je omzetten uit of pas je alle prijzen tegelijk aan.
- **Stelsels met veel onbekenden.** Bij het berekenen van krachten in een brugconstructie, stromen in een elektrisch netwerk of de doorstroming van een waterleiding ontstaan stelsels met honderden of duizenden onbekenden. Computers lossen die op met varianten van precies de methode uit de *Negen Hoofdstukken*.
- **Overgangen en groei.** Klanten wisselen van supermarkt, dieren worden een jaar ouder en krijgen jongen, mensen verhuizen tussen regio's. Zulke processen beschrijf je met een **overgangsmatrix**: één matrixvermenigvuldiging is één tijdstap.
- **Meetkunde en beeld.** Elke keer dat een tekenprogramma een figuur draait, spiegelt of vergroot, of dat een computerspel een driedimensionale wereld op je scherm projecteert, wordt er met matrices vermenigvuldigd.
- **Economie en statistiek.** Economen beschrijven met matrices hoeveel elke bedrijfstak van de andere afneemt. Statistici gebruiken matrices bij regressie met veel verklarende variabelen, iets wat je in latere modules over correlatie en regressie tegenkomt.

Wat al die toepassingen gemeen hebben: je rekent niet met één getal tegelijk, maar met een heel **blok** getallen dat als één object wordt behandeld. Dat idee, de matrix als zelfstandig wiskundig object waarmee je kunt optellen en vermenigvuldigen, is pas in de 19e eeuw volledig uitgewerkt, door de Engelse wiskundigen James Joseph Sylvester en Arthur Cayley. Het rekenschema zelf is veel ouder.

## Wat je in deze module leert

1. **Matrices en notatie.** Een tabel als matrix, de notatie $a_{ij}$, afmetingen $m \times n$, optellen en vermenigvuldigen met een getal.
2. **Rij maal kolom.** De matrixvermenigvuldiging, uitgelegd met prijzen en hoeveelheden. Waarom $AB$ meestal niet gelijk is aan $BA$, en wat de eenheidsmatrix doet.
3. **Vegen.** Een stelsel schrijven als $Ax = b$ en het oplossen met rijoperaties op de aangevulde matrix, voor twee en drie onbekenden.
4. **Determinant en inverse.** Wanneer heeft een stelsel precies één oplossing? Het getal $ad - bc$ geeft het antwoord, en het helpt je ook de inverse matrix te vinden.
5. **Van rekenbord tot matrix.** De geschiedenis: de *Negen Hoofdstukken*, Seki Kōwa en Leibniz, Gauss en de planetoïde Pallas, en Sylvester en Cayley.
6. **Toepassingen.** Klantverloop tussen supermarkten, een populatie in leeftijdsklassen, en spiegelingen en draaiingen van het vlak.

Je hebt voor deze module vooral module 20 (stelsels vergelijkingen) nodig, en vlot rekenen met breuken en negatieve getallen. Bij de draaiingen in de laatste les komen sinus en cosinus terug uit module 22.

{{ goals }}

{{ glossary }}
