# Een tekort is ook een getal

:::history China, ca. 200 v.Chr. – 100 n.Chr.
Een rekenmeester in dienst van een Chinese bestuursambtenaar zit gebogen over een rekenbord. Op het bord liggen korte staafjes van bamboe in vakken: elk vak is een kolom, elke kolom een rij gegevens uit een vraagstuk over graanopbrengsten. Om het vraagstuk op te lossen, trekt hij de ene kolom stap voor stap van de andere af, net zo lang tot er in een vak nog maar één getal over is.

Dan stuit hij op een vak waarin 3 staat, terwijl hij er 5 vanaf moet halen. Met gewone hoeveelheden kan dat niet: je kunt geen vijf zakken graan wegnemen als er maar drie zijn. Toch moet de berekening door, want de volgende stap hangt ervan af.
:::

De handboeken uit deze periode, die later zijn samengebracht in de *Negen Hoofdstukken over de Wiskundige Kunst*, kenden een oplossing: de rekenaar legt in dat vak een staafje van een **andere kleur**. In de commentaar die Liu Hui in 263 op dit boek schreef, staat het kort en bondig: rode staafjes zijn positief, zwarte staafjes zijn negatief. Het tekort van 2 wordt niet weggestreept als "onmogelijk", maar genoteerd als een getal van een andere soort, waarmee je gewoon verder rekent. Aan het eind van de berekening valt het tekort weer weg, en komt er een zinnig antwoord uit.

:::question Denk eerst zelf na
Stel dat jij die rekenaar bent, en je hebt in het vak "2 te weinig" genoteerd.

- In een volgende stap moet je in hetzelfde vak 4 **optellen**. Wat komt er dan te staan?
- En als je in plaats daarvan nog eens 4 moet **aftrekken**?
- Wat zou het betekenen om "2 te weinig" **af te trekken**? Wordt je getal dan groter of kleiner?

Over de eerste twee vragen heb je waarschijnlijk snel een idee. Bij de derde aarzelen de meeste mensen. Die aarzeling is precies het onderwerp van deze module.
:::

Bewaar je antwoorden. In les 3 zie je waarom "een tekort aftrekken" je getal groter maakt, en in het historisch intermezzo kom je terug bij het rekenbord, en bij de eeuwenlange discussie over de vraag of "minder dan niets" eigenlijk wel bestaat.

## Waarom bestaat deze wiskunde?

Tot nu toe gaven getallen in deze cursus meestal een **hoeveelheid** aan: 48 stenen, 3,5 liter, $\tfrac{3}{4}$ van een taart. Een hoeveelheid kan nul zijn, maar niet minder dan nul. Toch kom je in het dagelijks leven voortdurend situaties tegen waarin "minder dan nul" een heel duidelijke betekenis heeft. Bijna altijd gaat het dan om een van deze twee dingen:

1. **Een positie ten opzichte van een gekozen nulpunt.** Het nulpunt is een afspraak, en je kunt er aan twee kanten van zitten.
2. **Een verandering die twee kanten op kan.** Iets kan toenemen of afnemen, en je wilt beide met hetzelfde soort getal beschrijven.

Een paar voorbeelden:

- **Temperatuur.** Op de schaal van Celsius is 0 °C de temperatuur waarbij water bevriest. Dat is een afspraak, geen natuurlijke ondergrens: op een winternacht kan het $-12$ °C worden, twaalf graden onder het vriespunt.
- **Hoogte.** In Nederland meet men hoogtes ten opzichte van het **NAP**, het Normaal Amsterdams Peil. Een groot deel van West-Nederland ligt onder NAP; de diepste polders liggen enkele meters onder dat peil, dus op een negatieve hoogte. Wereldwijd gebruikt men het gemiddelde zeeniveau: de Mount Everest ligt ongeveer 8.849 meter erboven, de oever van de Dode Zee ruim 400 meter eronder.
- **Saldo.** Op je bankrekening staat € 12 en je betaalt € 20 met je pinpas, omdat je rood mag staan. Je saldo wordt dan $12 - 20 = -8$ euro. Dat getal betekent een **tekort** van € 8: je bent de bank € 8 schuldig. Het betekent niet dat er letterlijk "min acht munten" in een la liggen.
- **Tijd.** Een jaartal als 44 v.Chr. ligt vóór het afgesproken beginpunt van de jaartelling. In een tijdlijn zet je het links van nul. (Er is wel een addertje onder het gras, dat je in les 7 tegenkomt.)
- **Verandering.** Een aandeel stijgt € 3 of daalt € 3; een bevolking groeit met 2.000 mensen of krimpt met 2.000. Met een plus- of minteken beschrijf je beide richtingen in één getal: $+3$ of $-3$.

In al die situaties gebruik je dezelfde getallen en dezelfde rekenregels. Dat is de kracht van de wiskunde: de regels hangen niet af van het verhaal. Maar het verhaal helpt wel om te zien **waarom** de regels zijn zoals ze zijn.

:::definition Positieve en negatieve getallen
Een **positief getal** is groter dan nul, een **negatief getal** is kleiner dan nul. Een negatief getal schrijf je met een minteken ervoor: $-8$, $-0{,}5$, $-\tfrac{3}{4}$. Nul zelf is positief noch negatief.

De gehele getallen $\dots, -3, -2, -1, 0, 1, 2, 3, \dots$ vormen samen de **gehele getallen** (in de wiskunde aangeduid met $\mathbb{Z}$, van het Duitse *Zahlen*).
:::

{{ exercises: 13-001, 13-002 }}

## Eén teken, drie betekenissen

Een bron van verwarring verdient direct aandacht. Het minteken wordt in de wiskunde op **drie** verschillende manieren gebruikt:

| Schrijfwijze | Betekenis | Uitspraak |
|---|---|---|
| $9 - 4$ | de **bewerking** aftrekken | "negen min vier" |
| $-4$ | het **negatieve getal** vier onder nul | "min vier" of "negatief vier" |
| $-a$ of $-(-4)$ | de **tegengestelde** van wat erachter staat | "de tegengestelde van ..." |

Bij een getal als $-4$ vallen de laatste twee betekenissen samen: $-4$ is het negatieve getal, en het is ook de tegengestelde van 4. Maar bij $-a$, met een letter, weet je niet of het resultaat negatief is. Als $a = -4$, dan is $-a = 4$, een positief getal. Lees $-a$ dus altijd als "de tegengestelde van $a$", niet als "een negatief getal".

Het helpt om haakjes te gebruiken wanneer een negatief getal na een bewerkingsteken komt. Schrijf $5 - (-8)$ en niet $5 - -8$, en $3 \times (-4)$ in plaats van $3 \times -4$. Zo zie je in één oogopslag welk minteken een bewerking is en welk bij het getal hoort.

:::tip Het minteken op je rekenmachine
Veel rekenmachines hebben twee verschillende toetsen: een toets voor aftrekken, en een aparte toets, vaak met $(-)$ of $+/-$, voor het teken van een getal. Ook de machine maakt dus onderscheid tussen de bewerking en het getal.
:::

{{ exercise: 13-031 }}

## Wat je in deze module leert

1. **De getallenlijn voorbij nul**: ordenen, tegengestelden, absolute waarde en afstand (les 2).
2. **Optellen en aftrekken** met tekens, met als hoogtepunt de vraag waarom het aftrekken van een negatief getal hetzelfde is als optellen. Niet als trucje, maar verklaard op drie manieren (les 3).
3. **Vermenigvuldigen en delen** met tekens, en waarom min maal min plus moet zijn (les 4).
4. **Haakjes, rekenvolgorde en machten**: het verschil tussen $(-3)^2$ en $-3^2$ (les 5).
5. **Geschiedenis**: rode en zwarte rekenstaafjes in China, bezit en schuld bij Brahmagupta, en de lange Europese weerstand tegen "valse" en "absurde" getallen (les 6).
6. **Toepassen**: saldo's, hoogtes, temperaturen, jaartallen, en een eerste blik op het assenstelsel (les 7).

Deze module bouwt voort op het optellen en aftrekken uit module 3, het vermenigvuldigen uit module 4 (vooral de distributieve eigenschap) en het delen uit module 5. In module 3 zag je al: bij aftrekken mag je de getallen niet omwisselen, want $3 - 10$ "is iets heel anders". Nu ga je ontdekken wat het is. Direct na deze module, in module 14, werk je verder met machten van negatieve getallen, en in module 17 gebruik je negatieve getallen als coördinaten in het vlak.

{{ goals }}

{{ glossary }}
