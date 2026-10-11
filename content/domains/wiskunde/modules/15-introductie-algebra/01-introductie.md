# Een regel voor elke bestelling

Bagdad, omstreeks 820. In de hoofdstad van het Abbasidische kalifaat werkt de geleerde Muhammad ibn Musa al-Khwarizmi aan een handboek over rekenen voor de praktijk: erfenissen verdelen, land opmeten, handelstransacties afrekenen. Zijn boek bevat geen enkele letter-formule zoals jij die kent. Alles staat in woorden. Een typische zin uit dat boek luidt, in vertaling:

> Een vierkant en tien wortels zijn gelijk aan negenendertig dirham.

Voor een hedendaagse lezer klinkt dat als een raadsel. Toch is het een volkomen precieze wiskundige uitspraak. Je hoeft alleen te weten wat de woorden betekenen.

:::question Wat staat hier eigenlijk?
Al-Khwarizmi zoekt een onbekend getal. Met een **wortel** bedoelt hij dat onbekende getal zelf; met het **vierkant** bedoelt hij het getal maal zichzelf; **dirham** (een munt) staat voor een los, bekend getal.

Probeer de zin te vertalen naar gewoon rekenwerk: welke berekening doe je met het onbekende getal, en wat moet eruit komen? Probeer daarna eens of het getal 3 werkt. En het getal 4?
:::

Neem je even de tijd, dan zie je het. "Een vierkant" is het getal maal zichzelf. "Tien wortels" is tien keer het getal. Die twee samen moeten 39 opleveren. Probeer je 3: het vierkant is $3 \times 3 = 9$, tien wortels zijn $10 \times 3 = 30$, en $9 + 30 = 39$. Het klopt. Bij 4 krijg je $16 + 40 = 56$; dat is te veel.

Vandaag schrijf je dezelfde uitspraak in één regel:

$$
x^2 + 10x = 39.
$$

De letter $x$ vervangt het woord "wortel" of "ding", het kleine getal 2 boven de $x$ vervangt "vierkant", en het gelijkteken vervangt "zijn gelijk aan". Wat in woorden een halve zin kost, past nu in een handvol tekens. Die compactheid is niet alleen handig; ze maakt het ook mogelijk om met de uitspraak te **rekenen**, zoals je met getallen rekent. Dat is in één zin waar deze module over gaat.

## Van één berekening naar één regel

Je hoeft niet naar de negende eeuw om te zien waarom letters nuttig zijn. Een drukkerij rekent € 8 vaste voorbereidingskosten voor een bestelling, plus € 3 per gedrukt exemplaar. Wat kost een bestelling?

- Voor 5 exemplaren betaal je $8 + 3 \times 5 = 23$ euro.
- Voor 12 exemplaren betaal je $8 + 3 \times 12 = 44$ euro.
- Voor 100 exemplaren betaal je $8 + 3 \times 100 = 308$ euro.

Elke regel is een aparte berekening, maar je ziet dat ze allemaal dezelfde **vorm** hebben. Alleen het aantal exemplaren verandert; de 8 en de 3 blijven staan. Die vaste vorm kun je één keer opschrijven, met een letter op de plek van het getal dat verandert:

$$
\text{prijs} = 8 + 3n.
$$

Hier staat $n$ voor het aantal exemplaren. De schrijfwijze $3n$ betekent $3 \times n$; tussen een getal en een letter laat je het maalteken meestal weg. Wil je de prijs voor 40 exemplaren weten, dan vervang je $n$ door 40: $8 + 3 \times 40 = 128$ euro.

Let op drie dingen die later steeds terugkomen.

1. **De letter is geen afkorting.** De $n$ betekent niet "nummer" of "euro". Ze staat voor een *getal*, namelijk het aantal exemplaren. Je had net zo goed $a$ of $k$ kunnen kiezen, zolang je maar zegt waar de letter voor staat.
2. **Niet elk getal is toegestaan.** In deze situatie moet $n$ een geheel getal zijn dat niet negatief is: je kunt geen $2{,}7$ exemplaren of $-4$ exemplaren bestellen. De regel $8 + 3n$ kun je wiskundig voor elk getal uitrekenen, maar alleen bepaalde waarden passen bij de werkelijkheid.
3. **Eenheden moeten kloppen.** $3n$ is een bedrag in euro's (€ 3 per exemplaar, keer een aantal exemplaren), en 8 is ook een bedrag in euro's. Daarom mag je ze optellen. Een aantal exemplaren optellen bij een bedrag zou zinloos zijn.

:::definition Expressie
Een **expressie** (of algebraïsche uitdrukking) is een rekenvorm met getallen, letters en bewerkingen, zoals $8 + 3n$, $x^2 + 10x$ of $2(l + b)$. Een expressie heeft een *waarde* zodra je voor elke letter een getal kiest. Een expressie bevat geen gelijkteken; ze beweert niets, ze beschrijft een hoeveelheid.
:::

Het verschil tussen een expressie en een vergelijking is belangrijk. $x^2 + 10x$ is een expressie: een recept om uit een getal een nieuw getal te maken. $x^2 + 10x = 39$ is een **vergelijking**: een uitspraak die waar of onwaar is, afhankelijk van $x$. In deze module leer je met expressies werken. In module 16 leer je vergelijkingen oplossen; daar heb je alles uit deze module nodig.

{{ exercises: 15-001, 15-002 }}

## Waarom bestaat deze wiskunde?

Algebra wordt soms voorgesteld als "rekenen met letters in plaats van getallen", alsof het een moeilijkere versie van gewoon rekenen is. Dat beeld mist het belangrijkste. Letters lossen problemen op die met losse getallen niet op te lossen zijn.

**Eén regel voor oneindig veel gevallen.** De prijsregel $8 + 3n$ beschrijft in één keer de prijs van élke bestelling. Een tabel kan dat nooit: die houdt ergens op. Wie een spreadsheet bouwt, een tarief opstelt of een computerprogramma schrijft, doet precies dit: één regel formuleren die voor alle toegestane invoer werkt. Een formule in een spreadsheet, zoals `=8+3*B2`, is een expressie waarin de cel `B2` de rol van de letter speelt.

**Rekenen met iets wat je nog niet kent.** Al-Khwarizmi wilde een getal vinden dat hij nog niet kende. Met een letter kun je dat onbekende getal alvast een naam geven en ermee rekenen alsof je het wel kent. Pas aan het eind blijkt welk getal het is. Dat is de kern van het oplossen van vergelijkingen.

**Algemene uitspraken bewijzen.** Tel je drie opeenvolgende gehele getallen op, bijvoorbeeld $7 + 8 + 9 = 24$ of $20 + 21 + 22 = 63$, dan is de uitkomst steeds deelbaar door 3. Is dat toeval? Met getallenvoorbeelden kun je het niet bewijzen, want je kunt nooit alle gevallen proberen. Met letters lukt het wel: noem het eerste getal $n$, dan zijn de andere $n + 1$ en $n + 2$, en de som is $3n + 3 = 3(n + 1)$. Dat is drie keer een geheel getal, dus altijd deelbaar door 3. Aan het eind van deze module kun je zo'n redenering zelf opschrijven.

**Formules lezen.** Natuurkunde, economie, techniek en statistiek spreken de taal van formules. $v = s/t$, $A = l \times b$, $K = 8 + 3n$: wie die taal leest, kan in één oogopslag zien hoe grootheden van elkaar afhangen. Wie haar niet leest, ziet alleen een rij tekens.

## Drie fasen in de geschiedenis van de notatie

De symbolen die jij gebruikt zijn veel jonger dan de algebra zelf. Wiskundehistorici onderscheiden sinds de negentiende eeuw grofweg drie fasen. De Duitse geleerde Georg Nesselmann beschreef ze in 1842:

- **Retorische algebra.** Alles staat in woorden, zoals bij al-Khwarizmi: "een vierkant en tien wortels".
- **Gesyncopeerde algebra** (van *syncope*, "inkorting"). Veelgebruikte woorden worden vaste afkortingen, maar de tekst blijft in wezen proza. De Griekse wiskundige Diophantus (waarschijnlijk derde eeuw na Chr.) werkte zo.
- **Symbolische algebra.** Alles is uitgedrukt in tekens die je kunt bewerken zonder naar de woorden terug te gaan, zoals $x^2 + 10x$. Deze vorm groeide vooral in de zestiende en zeventiende eeuw, met namen als Viète en Descartes.

![Drie fasen van algebraïsche notatie](/images/diagrams/m15-drie-stadia.svg "Dezelfde expressie in drie fasen: in woorden (al-Khwarizmi), met afkortingen in de stijl van Diophantus, en in moderne symbolen. De middelste regel is een vereenvoudigde weergave.")

Houd in gedachten dat dit een grove indeling is. De ontwikkeling verliep niet netjes van de ene fase naar de volgende: Diophantus gebruikte al afkortingen, eeuwen vóór al-Khwarizmi, die weer in woorden schreef. Historici als Jens Høyrup wijzen erop dat de drie fasen beter een manier van ordenen zijn dan een tijdlijn. In het historisch intermezzo van deze module lees je meer over deze mensen en hun teksten.

:::tip Hoe je deze module het best doorwerkt
Lees de uitgewerkte voorbeelden met pen en papier erbij en schrijf elke stap zelf over. Algebra is een vaardigheid van de hand net zo goed als van het hoofd: wie de stappen een paar keer zelf heeft opgeschreven, maakt later veel minder fouten. Controleer daarnaast elke omzetting met een getal (dat leer je in les 3). Dat kost tien seconden en vangt de meeste vergissingen.
:::

## Wat je in deze module leert

De module bestaat uit vijf inhoudelijke stappen:

1. **Van woorden naar symbolen**: afspraken over notatie, het verschil tussen variabele, onbekende en parameter, en expressies opstellen bij situaties (tarieven, omtrekken, patronen van lucifers).
2. **Invullen**: de waarde van een expressie berekenen, met de juiste volgorde van bewerkingen, ook bij negatieve getallen; formules voor patronen lezen.
3. **Gelijksoortige termen samennemen** en het verschil tussen een som en een product: waarom $3x + 2$ niet $5x$ is en $x^2$ niet $2x$.
4. **Haakjes wegwerken en buiten haakjes brengen**: de distributieve eigenschap, ook met mintekens, en het rechthoekmodel als beeld.
5. **Modelleren**: een situatie in een expressie vangen en je model controleren.

{{ goals }}

{{ glossary }}
