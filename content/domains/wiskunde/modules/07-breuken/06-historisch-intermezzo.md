# Van stambreuk tot breukstreep

Onze schrijfwijze $\frac{a}{b}$, met een teller, een noemer en een streep ertussen, ziet eruit alsof ze er altijd geweest is. In werkelijkheid is ze het resultaat van een reis van meer dan drieduizend jaar, via Egypte, Mesopotamië, China, India, de Arabische wereld en Italië. Elke cultuur loste het probleem "hoe noteer je een deel?" op haar eigen manier op, en elke oplossing maakte sommige berekeningen makkelijk en andere lastig.

## 1. De broodopgaven van Ahmes

De **Rhind-papyrus** (British Museum, EA 10057–10058) is een Egyptisch rekenboek in hiëratisch schrift. De schrijver Ahmes kopieerde het rond 1550 v.Chr. van een ouder origineel uit de tijd van koning Amenemhat III (ongeveer 19e eeuw v.Chr.). In module 4 zag je hoe Ahmes vermenigvuldigde door te verdubbelen; in module 5 hoe hij deelde. Een groot deel van de papyrus gaat echter over **breuken**.

![Detail van de Rhind-papyrus](/images/history/m04-rhind-papyrus.jpg "Detail van de Rhind Mathematical Papyrus (British Museum, EA 10057). Foto via Wikimedia Commons, publiek domein.")

Na een tabel waarin de breuken $\frac{n}{10}$ voor $n = 1, \dots, 9$ worden uitgeschreven, volgen zes opgaven waarin broden over **tien mannen** worden verdeeld. Ze passen de tabel toe op een concreet verhaal:

| Opgave | Broden | Aandeel per man (zoals in de papyrus) | Moderne breuk |
|---|---|---|---|
| 1 | 1 | $\frac{1}{10}$ | $\frac{1}{10}$ |
| 2 | 2 | $\frac15$ | $\frac{2}{10}$ |
| 3 | 6 | $\frac12 + \frac1{10}$ | $\frac{6}{10}$ |
| 4 | 7 | $\frac23 + \frac1{30}$ | $\frac{7}{10}$ |
| 5 | 8 | $\frac23 + \frac1{10} + \frac1{30}$ | $\frac{8}{10}$ |
| 6 | 9 | $\frac23 + \frac15 + \frac1{30}$ | $\frac{9}{10}$ |

Zoals vaker in de papyrus volgt op de oplossing een **controle**. Bij de broodopgaven komt die er volgens moderne vertalingen op neer dat het aandeel met 10 wordt vermenigvuldigd, met de verdubbelmethode uit module 4 ($10 = 2 + 8$), en er moet precies het aantal broden uitkomen. Dat is dezelfde controle die jij in de introductie deed. De papyrus zegt niets over hoe de broden feitelijk gesneden werden. De snijwijze uit de introductie (zeven mannen krijgen een stuk van $\frac23$, drie mannen twee stukken van $\frac13$) is een moderne reconstructie van Richard Gillings (1962), die onder meer door de wiskundehistoricus George Gheverghese Joseph is overgenomen.

Iets verder staan zogeheten **aanvullingsopgaven**: wat moet je bij een gegeven som van breuken optellen om een bepaald doel te bereiken? Opgave 21 vraagt bijvoorbeeld wat er bij $\frac23 + \frac1{15}$ moet komen om 1 te krijgen. Het antwoord van de papyrus is $\frac15 + \frac1{15}$. In moderne termen is dat een aftrekking: $1 - \frac23 - \frac1{15} = \frac{15}{15} - \frac{10}{15} - \frac{1}{15} = \frac{4}{15}$, en inderdaad is $\frac15 + \frac1{15} = \frac{3}{15} + \frac{1}{15} = \frac{4}{15}$.

## 2. Een getal met een mond erboven

Hoe schreven de Egyptenaren zo'n breuk? Ze hadden geen notatie voor "teller over noemer". Een stambreuk $\frac1n$ schreven ze door boven het getal $n$ een teken te plaatsen dat lijkt op een liggende mond (in de egyptologie het teken *r*, met een betekenis als "deel"). Het getal eronder gaf aan om welk deel het ging: de mond boven drie strepen betekent $\frac13$. In het lopende hiëratische handschrift werd de mond vereenvoudigd tot een stip of streepje boven het getal.

![Vier notaties: Egyptisch mondteken boven drie strepen, Indiase notatie 3 boven 4 zonder streep, 3 boven 4 met breukstreep, en 3/4 met schuine streep](/images/diagrams/m07-breuknotaties.svg "Vier manieren om een breuk te noteren, van Egypte tot nu. Schematisch eigen diagram.")

Er waren een paar uitzonderingen. Voor $\frac12$, $\frac23$ en (zeldzamer) $\frac34$ bestonden eigen tekens. Vooral $\frac23$ speelt een grote rol: het is de enige breuk met een teller groter dan 1 die Ahmes regelmatig gebruikt. Verder schreef men elke hoeveelheid als een **som van verschillende stambreuken**. Moderne wiskundigen noemen zo'n som daarom een **Egyptische breuk**.

Waarom de Egyptenaren bij stambreuken bleven, weten we niet zeker. Wel is duidelijk dat de schrijfwijze praktische voordelen had bij **eerlijk verdelen** (zoals je bij de broden zag: grote herkenbare stukken eerst) en bij het afmeten van graan met steeds kleinere maten. Een nadeel is evenzeer duidelijk: vergelijken en optellen worden omslachtig. Is $\frac13 + \frac1{15}$ meer of minder dan $\frac14 + \frac16$? Met onze notatie zie je direct $\frac{6}{15}$ tegenover $\frac{5}{12}$, en na gelijknamig maken $\frac{24}{60} < \frac{25}{60}$.

{{ exercises: 07-026, 07-025 }}

## 3. De $\frac2n$-tabel

Waarom staat er aan het begin van de papyrus een lange tabel voor breuken van de vorm $\frac2n$? Denk terug aan module 4: Egyptisch vermenigvuldigen bestaat uit **verdubbelen**. Wie een stambreuk verdubbelt, krijgt $\frac2n$, en dat is geen stambreuk meer. Bij een even $n$ is dat geen probleem: het dubbele van $\frac18$ is $\frac14$. Maar het dubbele van $\frac15$ moet opnieuw als som van verschillende stambreuken geschreven worden. De tabel geeft die omzetting voor de oneven noemers tot en met 101.

| $\frac2n$ | Ontbinding in de papyrus | Controle |
|---|---|---|
| $\frac25$ | $\frac13 + \frac1{15}$ | $\frac{5}{15} + \frac{1}{15} = \frac{6}{15}$ |
| $\frac27$ | $\frac14 + \frac1{28}$ | $\frac{7}{28} + \frac{1}{28} = \frac{8}{28}$ |
| $\frac29$ | $\frac16 + \frac1{18}$ | $\frac{3}{18} + \frac{1}{18} = \frac{4}{18}$ |
| $\frac2{11}$ | $\frac16 + \frac1{66}$ | $\frac{11}{66} + \frac{1}{66} = \frac{12}{66}$ |
| $\frac2{13}$ | $\frac18 + \frac1{52} + \frac1{104}$ | $\frac{13}{104} + \frac{2}{104} + \frac{1}{104} = \frac{16}{104}$ |
| $\frac2{15}$ | $\frac1{10} + \frac1{30}$ | $\frac{3}{30} + \frac{1}{30} = \frac{4}{30}$ |
| $\frac2{101}$ | $\frac1{101} + \frac1{202} + \frac1{303} + \frac1{606}$ | $\frac{6 + 3 + 2 + 1}{606} = \frac{12}{606}$ |

Elke controle komt uit op $\frac2n$, na vereenvoudigen. MacTutor merkt op dat er in de tabel geen enkele rekenfout staat.

Er zitten patronen in die je kunt narekenen:

- **Noemers die een drievoud zijn.** Bij $\frac29$ en $\frac2{15}$ zie je hetzelfde schema: $\frac{2}{3k} = \frac{1}{2k} + \frac{1}{6k}$. Controleer met $k = 3$: $\frac16 + \frac1{18} = \frac29$.
- **Het laatste redmiddel.** De ontbinding van $\frac2{101}$ steunt op het feit dat $1 + \frac12 + \frac13 + \frac16 = 2$. Deel alles door 101 en je hebt een ontbinding van $\frac{2}{101}$. Dit werkt voor elke $n$, maar levert vier termen op.
- **Voorkeuren.** De schrijver koos meestal korte ontbindingen met een niet al te kleine eerste term, en vaak met even noemers. Over de precieze regels waarmee de tabel is opgesteld, verschillen historici van mening; Richard Gillings beschreef in de jaren zeventig verschillende technieken die de schrijvers gebruikt kunnen hebben.

Een ontbinding in stambreuken is niet uniek. $\frac25$ is ook $\frac14 + \frac1{20}$, en $\frac12$ is zowel $\frac13 + \frac16$ als $\frac14 + \frac16 + \frac1{12}$. De tabel legde dus een keuze vast, zodat alle schrijvers dezelfde standaardvormen gebruikten.

{{ exercises: 07-039, 07-040 }}

## 4. Het Horusoog: een mooi verhaal dat niet klopt

In veel populaire boeken en op talloze websites lees je dat de Egyptenaren breuken schreven met delen van het **Horusoog** (*wedjat*), het beschermende oogsymbool uit de Egyptische mythologie. Elk deel van het oog zou een breuk voorstellen: $\frac12$, $\frac14$, $\frac18$, $\frac1{16}$, $\frac1{32}$ en $\frac1{64}$. Die breuken zouden gebruikt zijn voor de *hekat*, een inhoudsmaat voor graan.

![Het Horusoog met de breuken 1/2 tot en met 1/64 bij de afzonderlijke delen](/images/history/m07-horusoog-breuken.png "De zogeheten 'Horusoog-breuken' zoals ze vaak worden afgebeeld. Bestand 'Eye of Ra (fractions).svg' door Kompak, Benoît Stella en Ignacio Icke, via Wikimedia Commons, CC BY-SA 3.0.")

Het idee is afkomstig van de Duitse egyptoloog **Georg Möller**, die het in 1911 voorstelde. In 1923 zwakte T. Eric Peet de theorie af: de hiëratische tekens voor de hekat-breuken zouden een eigen oorsprong hebben, en pas later met het Horusoog in verband zijn gebracht. In die vorm kwam de theorie in standaardwerken terecht.

In 2002 publiceerde de wetenschapshistoricus **Jim Ritter** een grondige kritiek (sommige bronnen noemen 2003). Zijn belangrijkste argument: hoe verder je teruggaat in de tijd, hoe **minder** de hiëratische breuktekens op de delen van het oog lijken. Als de tekens werkelijk van het oog afstamden, zou je het omgekeerde verwachten. Ook de bronnen die Peet aanvoerde, laten volgens Ritter geen duidelijke gelijkstelling zien. De meeste specialisten beschouwen de Horusoog-breuken inmiddels als een moderne mythe, al duikt ze nog geregeld op in schoolboeken.

Wat wel klopt, is de wiskunde achter het verhaal. Halveren, halveren en nog eens halveren is een natuurlijke manier om een maat te verdelen, en de som van de zes breuken komt niet precies op 1 uit. Reken maar na in de oefening.

:::tip Les voor de geschiedenis van de wiskunde
Een verhaal is niet waar omdat het mooi is, of omdat het vaak herhaald wordt. Historici controleren een bewering aan de bronnen zelf: hier de vorm van de tekens in papyri uit verschillende periodes. Dat is dezelfde houding als bij het rekenen: een aantrekkelijke uitkomst controleer je, net als een onaantrekkelijke.
:::

{{ exercise: 07-044 }}

## 5. Babylonië: breuken in zestigsten

Terwijl de Egyptenaren met stambreuken werkten, kozen de schrijvers in Mesopotamië een heel andere weg. In het **zestigtallige** stelsel uit module 1 en 2 schreven ze breuken als zestigsten, zestigsten van zestigsten, enzovoort, precies zoals wij nog steeds minuten en seconden gebruiken (module 6). Een half uur is 30 minuten, een derde uur 20 minuten:

$$
\frac12 = \frac{30}{60}, \qquad \frac13 = \frac{20}{60}, \qquad \frac14 = \frac{15}{60}, \qquad \frac15 = \frac{12}{60}.
$$

De meeste wiskundige kleitabletten stammen uit de Oud-Babylonische periode (ongeveer 1800–1600 v.Chr.). Daaronder zijn **tabellen van omgekeerden**: lijsten waarin bij elk getal de omgekeerde in zestigsten staat. Die gebruikten de schrijvers om te **delen**: in plaats van "deel door 12" vermenigvuldigden ze met de omgekeerde van 12, en dat is $\frac{5}{60}$. Precies de regel uit de les over vermenigvuldigen en delen (delen is vermenigvuldigen met de omgekeerde) was voor hen de standaardmethode.

Het systeem heeft één beperking. Alleen getallen die uitsluitend de priemfactoren 2, 3 en 5 bevatten (de delers van machten van 60) hebben een omgekeerde die na een eindig aantal zestigtallige posities stopt. $\frac17$, $\frac1{11}$ en $\frac1{13}$ lopen eindeloos door, net zoals $\frac13 = 0{,}333\ldots$ in ons tientallige stelsel. In module 8 zie je dat precies hetzelfde verschijnsel bij decimalen optreedt, met 2 en 5 als de "goede" priemfactoren.

{{ exercise: 07-041 }}

## 6. China en India: breuken als gewone getallen

In de Chinese klassieker *De Negen Hoofdstukken over de Wiskundige Kunst* (samengesteld tussen ongeveer 200 v.Chr. en 50 n.Chr.; de commentator Liu Hui schreef er in 263 een beroemd commentaar bij) staan al regels voor alle vier de bewerkingen met breuken, met teller en noemer als twee afzonderlijke getallen. Het eerste hoofdstuk, over landmeten, behandelt het vereenvoudigen met herhaald aftrekken (zie de les over vereenvoudigen), het gelijknamig maken en het optellen, aftrekken, vermenigvuldigen en delen van breuken.

In **India** werd een notatie gebruikt die de onze sterk benadert. Brahmagupta (628) en later Bhaskara II (ca. 1150) schreven de teller **boven** de noemer, maar **zonder** streep ertussen. Het Sanskriet noemde een breuk *bhinna*, "gebroken", precies zoals ons woord.

## 7. De breukstreep: van de Maghreb naar Pisa

De horizontale **breukstreep** verschijnt voor het eerst in de Arabische wereld. Ze wordt toegeschreven aan **al-Hassar**, een wiskundige uit de Maghreb (het huidige Marokko) uit de 12e eeuw, in zijn rekenboek *Kitab al-bayan wa-t-tadhkar*. Onderzoekers vermoeden dat de streep in het rekenonderwijs in de Maghreb snel ingeburgerd raakte.

Dat zou verklaren waarom **Leonardo van Pisa** (Fibonacci) haar zonder verdere toelichting gebruikt in zijn *Liber Abaci* uit 1202. Fibonacci leerde rekenen in Bugia, in het huidige Algerije (module 4). Hij was de eerste Europese wiskundige die de breukstreep gebruikte zoals wij dat doen. Wel volgde hij de Arabische gewoonte om bij een gemengd getal de breuk **links** van het gehele getal te zetten, wat aansluit bij het Arabische schrift, dat van rechts naar links wordt gelezen.

Opvallend genoeg besteedt Fibonacci ook nog uitgebreid aandacht aan stambreuken. Hij beschrijft onder meer een methode om elke breuk als som van stambreuken te schrijven: neem steeds de **grootste stambreuk die nog past**, en ga verder met wat overblijft. Voor $\frac{3}{4}$ geeft dat eerst $\frac12$, met rest $\frac14$, dus $\frac34 = \frac12 + \frac14$. Deze **gulzige methode** werkt altijd, maar kan tot lange sommen met enorme noemers leiden; ze wordt soms naar de Engelse wiskundige J.J. Sylvester (19e eeuw) genoemd, die haar later opnieuw onderzocht.

De schuine streep, zoals in 3/4, is veel jonger. Ze ontstond als typografisch gemak: een breuk op één regel past beter tussen gewone tekst. Een vroeg handgeschreven voorbeeld komt uit een Engels kasboek uit 1718; de Engelse wiskundige Augustus De Morgan bepleitte haar gebruik in 1845.

:::question Een andere notatie
Wat wordt makkelijker met onze schrijfwijze $\frac{7}{12}$ vergeleken met $\frac12 + \frac1{12}$? En wanneer helpt de Egyptische som juist, bijvoorbeeld bij het verdelen van zeven broden over twaalf mensen?
:::

## Bronnen

- British Museum, *Rhind Mathematical Papyrus*, EA 10057: https://www.britishmuseum.org/collection/object/Y_EA10057
- Wikipedia (EN), *Rhind Mathematical Papyrus* (inhoud van de opgaven 1–6, 21–27): https://en.wikipedia.org/wiki/Rhind_Mathematical_Papyrus
- Wikipedia (EN), *Rhind Mathematical Papyrus 2/n table*: https://en.wikipedia.org/wiki/Rhind_Mathematical_Papyrus_2/n_table
- MacTutor, *Mathematics in Egyptian Papyri*: https://mathshistory.st-andrews.ac.uk/HistTopics/Egyptian_papyri/
- MacTutor, *Egyptian numerals*: https://mathshistory.st-andrews.ac.uk/HistTopics/Egyptian_numerals/
- G.G. Joseph, *The Crest of the Peacock*, hoofdstuk 3 (broodverdeling bij opgave 6, naar Gillings 1962), leestekst: https://www.ms.uky.edu/~dhje223/CrestOfThePeacockCh3-Reading2.pdf
- Wikipedia (EN), *Egyptian fraction* (notatie, gulzige methode van Fibonacci): https://en.wikipedia.org/wiki/Egyptian_fraction
- Wikipedia (EN), *Eye of Horus* (Möller 1911, Peet 1923, Ritter 2002): https://en.wikipedia.org/wiki/Eye_of_Horus
- J. Ritter, "Closing the Eye of Horus: The Rise and Fall of 'Horus-Eye Fractions'", in J. Steele & A. Imhausen (red.), *Under One Sky: Astronomy and Mathematics in the Ancient Near East*, Ugarit-Verlag, 2002.
- Wikipedia (EN), *Babylonian mathematics*: https://en.wikipedia.org/wiki/Babylonian_mathematics
- MacTutor, *Nine Chapters on the Mathematical Art*: https://mathshistory.st-andrews.ac.uk/HistTopics/Nine_chapters/
- MacTutor, *Earliest Uses of Symbols for Fractions* (Indiase notatie, al-Hassar, Fibonacci, schuine streep): https://mathshistory.st-andrews.ac.uk/Miller/mathsym/fractions/
- Wikipedia (EN), *Abu Bakr al-Hassar*: https://en.wikipedia.org/wiki/Al-Hassar
- Muslim Heritage, *Abu Bakr al-Hassar*: https://muslimheritage.com/people/scholars/abu-bakr-al-hassar/
- Wikipedia (EN), *Fraction* (geschiedenis en etymologie): https://en.wikipedia.org/wiki/Fraction
- Afbeeldingen: Wikimedia Commons, *Rhind Mathematical Papyrus.jpg* (publiek domein): https://commons.wikimedia.org/wiki/File:Rhind_Mathematical_Papyrus.jpg; *Eye of Ra (fractions).svg* (Kompak, Benoît Stella, Ignacio Icke; CC BY-SA 3.0): https://commons.wikimedia.org/wiki/File:Eye_of_Ra_(fractions).svg
