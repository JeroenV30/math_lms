# Konijnen, graankorrels en een eindeloze wandeling

:::history Pisa, 1202
In 1202 voltooit Leonardo van Pisa, die wij nu kennen als Fibonacci, een dik rekenboek: de *Liber Abaci*, het "boek van het rekenen". Het grootste deel gaat over handel: geld omwisselen, winst verdelen, rente berekenen, en dat alles met de Indiaas-Arabische cijfers die in Europa nog nauwelijks bekend zijn. Maar tussen de handelsopgaven staat een raadsel dat beroemder zou worden dan de rest van het boek.

Iemand zet een paar konijnen in een ruimte die aan alle kanten door een muur is omgeven. Elk paar brengt elke maand een nieuw paar voort, en een nieuw paar wordt vanaf de tweede maand na zijn geboorte zelf vruchtbaar. Konijnen gaan in dit raadsel niet dood. Hoeveel paren zijn er na een jaar?
:::

Het konijnenraadsel is natuurlijk geen biologie: echte konijnen krijgen nesten van wisselende grootte, worden ziek en sterven. Fibonacci gebruikte het als rekenoefening, en juist daardoor is het zo zuiver. Er zit één regel in die zich elke maand herhaalt. Wie die regel ziet, kan het aantal paren voor elke maand voorspellen, zonder konijnen te tellen.

:::question Denk eerst zelf na
Begin met één jong paar. Het moet eerst een maand opgroeien; daarna krijgt het elke maand een jong paar. Elk jong paar gaat na een maand op dezelfde manier meedoen.

- Hoeveel paren zijn er na 1, 2, 3, 4 en 5 maanden? Schrijf de aantallen op een rij.
- Kijk naar je rij. Kun je een getal voorspellen uit de getallen die ervóór staan, zonder opnieuw konijnen te tekenen?
- Is het aantal paren elke maand met hetzelfde aantal gegroeid, of met dezelfde factor, of geen van beide?

Neem een paar minuten. Het gaat erom dat je de regel zelf op het spoor komt.
:::

Bewaar je rij. In les 2 zie je dat het konijnenraadsel een voorbeeld is van een **recursieve** rij, waarin elke term uit de vorige termen volgt. In het historisch intermezzo lees je wat Fibonacci zelf schreef, en waarom dezelfde getallen al eerder in India opdoken, in een heel andere context: het tellen van ritmes in Sanskrietpoëzie.

## Drie oude puzzels, één onderwerp

Het konijnenraadsel staat niet alleen. Twee andere klassieke puzzels horen bij deze module.

**Een beloning op een schaakbord.** Volgens een oude legende mocht de uitvinder van het schaakspel zelf zijn beloning kiezen. Hij vroeg om graan: één korrel op het eerste veld, twee op het tweede, vier op het derde, en zo steeds het dubbele, tot en met het vierenzestigste veld. De vorst vond dat een bescheiden wens. Hij vergiste zich deerlijk. Het verhaal is een legende (je leest in les 4 wat er wél over bekend is), maar de rekensom is echt. Je leert in deze module om in één regel uit te rekenen hoeveel korrels het zijn.

![Schaakbord met verdubbelende graankorrels](/images/diagrams/m28-schaakbord.svg "Het schaakbord uit de legende: op elk veld twee keer zoveel korrels als op het vorige. Eigen diagram.")

**Een wandeling die nooit eindigt.** De Griekse filosoof Zeno van Elea (vijfde eeuw v.Chr.) bedacht redeneringen die beweging onmogelijk leken te maken. Wie naar een deur loopt, moet eerst de helft van de afstand afleggen, dan de helft van wat overblijft, dan weer de helft van de rest, enzovoort. Dat zijn oneindig veel stukjes. Hoe kun je ooit oneindig veel stukjes afleggen? In les 5 zie je hoe de wiskunde van **oneindige reeksen** dit vraagstuk verheldert, en waarom daaruit ook volgt dat $0{,}999\ldots$ precies gelijk is aan $1$.

**Een schooljongen en honderd getallen.** Over Carl Friedrich Gauss wordt verteld dat hij als jonge leerling in een paar tellen een lange optelsom oploste waar zijn klasgenoten een uur mee bezig waren. Of het precies zo is gegaan, is onzeker; de bekendste versie (de getallen van 1 tot en met 100) duikt pas lang na Gauss' dood op. Maar de truc die hem wordt toegeschreven, is de sleutel tot de somformule van les 4.

## Waarom bestaat deze wiskunde?

Een **rij** is een geordende lijst getallen: een eerste getal, een tweede, een derde, enzovoort. Dat klinkt eenvoudig, en dat is het ook. Toch is de rij een van de krachtigste ideeën uit de wiskunde, omdat zoveel processen in **stappen** verlopen.

- **Geld.** Een spaarrekening krijgt elk jaar rente; een lening wordt elke maand een stukje afgelost. Het saldo na elk jaar of elke maand vormt een rij. Banken, pensioenfondsen en woningcorporaties rekenen dagelijks met zulke rijen.
- **Groei en verval.** Een bevolking die elk jaar met 2% groeit, een medicijn waarvan elk uur een vast deel wordt afgebroken: dat zijn rijen met een vaste factor. Je kent ze uit module 25 over exponentiële groei.
- **Planning en voorraad.** Een fabriek die elke week 40 stuks meer produceert, een theater waar elke rij twee stoelen meer telt dan de vorige: dat zijn rijen met een vast verschil. Je kent ze uit module 19 over lineaire functies.
- **Informatica.** Computers rekenen bijna alles stap voor stap uit. Een recursieve regel ("het volgende getal volgt uit de vorige") is precies het soort instructie dat een computer goed kan uitvoeren.
- **Oneindigheid.** Wat gebeurt er als je oneindig veel getallen optelt? Kan dat een eindige uitkomst geven? Deze vraag heeft filosofen en wiskundigen meer dan tweeduizend jaar beziggehouden en leidde uiteindelijk naar de differentiaal- en integraalrekening, het onderwerp van de modules hierna.

Naast de rij zelf kijk je ook naar de **reeks**: de som van de termen van een rij. "Hoeveel staat er na tien jaar sparen op de rekening?" en "Hoeveel graankorrels liggen er op het hele schaakbord?" zijn vragen over reeksen.

In deze module bouw je het onderwerp in vijf stappen op:

1. **Wat een rij is**: een lijst, een functie van $n$, en twee manieren om hem vast te leggen (direct en recursief).
2. **Rekenkundige en meetkundige rijen**: een vast verschil of een vaste factor, en hoe je die herkent en gebruikt.
3. **Sommen**: de truc die aan Gauss wordt toegeschreven, en de somformule voor een meetkundige rij (het schaakbord).
4. **Oneindig veel termen**: Zeno, Archimedes, $\tfrac12 + \tfrac14 + \tfrac18 + \ldots = 1$ en de vraag wanneer een oneindige som een eindige uitkomst heeft.
5. **Toepassingen**: sparen met een vaste inleg en een lening afbetalen.

Deze module bouwt voort op module 19 (lineaire functies) en module 25 (exponentiële groei). Je zult zien dat een rekenkundige rij een lineaire functie is die je alleen op de gehele getallen bekijkt, en een meetkundige rij een exponentiële functie op de gehele getallen. Nieuw is vooral het **optellen** van termen, en de stap naar het oneindige.

{{ goals }}

{{ glossary }}
