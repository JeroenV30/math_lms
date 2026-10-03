# Van kleitablet tot wortelteken

Machten en wortels hebben een lange geschiedenis, maar de notatie die je in deze module gebruikt, is jong. Babylonische schrijvers rekenden al bijna vierduizend jaar geleden met kwadraten en wortels, zonder exponent en zonder wortelteken. Griekse denkers ontdekten dat sommige wortels geen breuk kunnen zijn, en raakten daardoor aan de fundamenten van hun wiskunde. Archimedes gebruikte machten om onvoorstelbaar grote getallen te benoemen. Het wortelteken $\sqrt{\phantom{a}}$ verscheen pas in 1525 in druk, de exponent zoals wij die schrijven in 1637. Deze les volgt die lijn.

## 1. Babylon: tabellen vol kwadraten

In de Oud-Babylonische periode, ruwweg 2000 tot 1600 v.Chr., leerden schrijvers in Mesopotamië rekenen op kleitabletten. Ze werkten in het zestigtallig stelsel dat je in module 2 tegenkwam. Onder de tienduizenden bewaarde tabletten zijn veel **tabellen**: tafels van vermenigvuldiging, tabellen met omgekeerden ($\frac{1}{n}$), en ook tabellen met kwadraten. Volgens MacTutor zijn er bijvoorbeeld tabletten uit ongeveer 2000 v.Chr. bekend met de kwadraten van de getallen tot 59 en de derde machten tot 32.

Waarom zou je een tabel met kwadraten maken? Kwadraten zijn nuttig bij oppervlakteberekeningen, maar ze kunnen ook helpen bij vermenigvuldigen. Er geldt namelijk

$$
a \cdot b = \frac{(a+b)^2 - (a-b)^2}{4}
$$

Met een kwadratentabel wordt een vermenigvuldiging dan een optelling, een aftrekking, twee keer opzoeken en een deling door 4. Bijvoorbeeld $13 \cdot 7$: $(13+7)^2 = 400$ en $(13-7)^2 = 36$, en $\frac{400 - 36}{4} = \frac{364}{4} = 91$. Verschillende historici denken dat Babylonische schrijvers zo te werk gingen. Maar geen enkel tablet laat deze procedure letterlijk zien, dus het blijft een aannemelijke hypothese, geen vaststaand feit.

Het beroemdste Babylonische tablet waarin kwadraten een hoofdrol spelen, is **Plimpton 322** (ca. 1800 v.Chr.). Het bevat een tabel van getallen die samenhangen met kwadraten en rechthoekige driehoeken, getallen $a$, $b$ en $c$ waarvoor $a^2 + b^2 = c^2$. In module 18, over de stelling van Pythagoras, kom je het uitgebreid tegen.

{{ exercise: 14-044 }}

## 2. YBC 7289: de wortel van 2 in zestigtallen

Het tablet uit de introductie, **YBC 7289**, is een rond tablet van ongeveer 8 cm doorsnede uit de Yale Babylonian Collection. Het wordt gedateerd op ongeveer 1800 tot 1600 v.Chr. Het is vrijwel zeker een oefentablet van een leerling: klein, rond, handzaam, met een tekening en een paar getallen.

![Schets van YBC 7289](/images/diagrams/m14-ybc7289.svg "Schematische weergave (eigen tekening) van YBC 7289: een vierkant met diagonalen, zijde 30, en langs de diagonaal de getallen 1;24,51,10 en 42;25,35.")

Op het tablet staan drie getallen. Langs een zijde staat 30. Langs de horizontale diagonaal staan 1;24,51,10 en 42;25,35. In de moderne transcriptie scheidt de puntkomma het gehele deel van de "zestigsten", en de komma's scheiden de zestigtallige posities, net zoals onze decimalen tienden, honderdsten en duizendsten zijn:

$$
1;24,51,10 = 1 + \frac{24}{60} + \frac{51}{60^2} + \frac{10}{60^3} \approx 1{,}41421296
$$

Vergelijk dat met de werkelijke waarde $\sqrt{2} = 1{,}41421356\ldots$ Het verschil is ongeveer $0{,}0000006$: minder dan één miljoenste. Het tweede getal, $42;25,35 = 42 + \frac{25}{60} + \frac{35}{3600} \approx 42{,}4264$, is de lengte van de diagonaal bij zijde 30, dus $30 \cdot \sqrt{2}$. De leerling heeft de zijde vermenigvuldigd met de factor voor de diagonaal. Dat het juist de factor $\sqrt2$ is, volgt uit het argument van de introductie: het vierkant op de diagonaal heeft twee keer de oppervlakte van het oorspronkelijke vierkant.

![Vierkant op de diagonaal](/images/diagrams/m14-diagonaal.svg "Het vierkant op de diagonaal van een eenheidsvierkant bestaat uit vier halve eenheidsvierkanten en heeft dus oppervlakte 2.")

Hoe kwam de schrijver aan zo'n nauwkeurige waarde? Het tablet zegt het niet. Waarschijnlijk is de factor overgenomen uit een tabel met vaste rekenconstanten; zulke lijsten zijn bekend. Hoe die constante oorspronkelijk werd berekend, weten we niet zeker. Een methode die goed past, is het herhaald **middelen**, die later bekend werd onder de naam van Heron van Alexandrië (eerste eeuw n.Chr.):

:::example Een benadering verbeteren door te middelen
Is $x$ een schatting voor $\sqrt{2}$, dan is $\frac{2}{x}$ een schatting aan de andere kant: als $x$ te groot is, is $\frac2x$ te klein, en omgekeerd (want hun product is precies 2). Het gemiddelde ligt dichter bij de wortel.

1. Begin met $x = \frac{3}{2} = 1{,}5$. Dan is $\frac{2}{x} = \frac{4}{3} \approx 1{,}333$. Gemiddelde: $\frac12\left(\frac32 + \frac43\right) = \frac{17}{12} \approx 1{,}41667$.
2. Nu $x = \frac{17}{12}$, en $\frac{2}{x} = \frac{24}{17}$. Gemiddelde: $\frac12\left(\frac{17}{12} + \frac{24}{17}\right) = \frac{577}{408} \approx 1{,}4142157$.

Na twee stappen klopt de benadering al tot op vijf decimalen. Of de Babylonische rekenaars precies zo werkten, is onder onderzoekers niet zeker; het past wel bij wat ze konden.
:::

{{ exercises: 14-026, 14-043 }}

## 3. De pythagoreeërs en het onmeetbare

Pythagoras van Samos leefde in de zesde eeuw v.Chr. en stichtte in Croton, in Zuid-Italië, een gemeenschap die je half als school en half als religieuze broederschap moet zien. Over hemzelf weten we weinig met zekerheid: bijna alles is pas eeuwen later opgeschreven. Aan de pythagoreeërs wordt een overtuiging toegeschreven die je kort kunt samenvatten als "alles is getal": verhoudingen in muziek, meetkunde en sterrenkunde zouden te beschrijven zijn met verhoudingen van gehele getallen.

Twee lengtes heten **meetbaar ten opzichte van elkaar** (commensurabel) als er een gemeenschappelijke maat is die in beide een geheel aantal keer past. Een stok van 6 cm en een van 4 cm zijn meetbaar: de maat 2 cm past er 3 en 2 keer in. In getallen: hun verhouding is een breuk, $\frac{6}{4} = \frac{3}{2}$. Het pythagoreïsche wereldbeeld veronderstelde, zo lijkt het, dat elk paar lengtes zo'n gemeenschappelijke maat heeft.

Dat bleek niet waar. De zijde en de diagonaal van een vierkant zijn **onmeetbaar** (incommensurabel): hoe klein je de maat ook kiest, hij past nooit een geheel aantal keer in allebei. In moderne taal: $\sqrt{2}$ is geen breuk. Zo'n getal heet **irrationaal**.

:::theory Bewijs: $\sqrt{2}$ is geen breuk
Stel dat $\sqrt{2}$ wel een breuk is: $\sqrt{2} = \frac{p}{q}$ met $p$ en $q$ positieve gehele getallen. Je mag de breuk eerst zo ver mogelijk vereenvoudigen (module 7), dus neem aan dat $p$ en $q$ **niet allebei even** zijn.

1. Kwadrateer beide kanten: $2 = \frac{p^2}{q^2}$, dus $p^2 = 2q^2$.
2. Dan is $p^2$ even (het is 2 maal iets). Een oneven getal heeft een oneven kwadraat, dus $p$ zelf moet even zijn. Schrijf $p = 2k$.
3. Invullen: $(2k)^2 = 2q^2$, dus $4k^2 = 2q^2$, dus $q^2 = 2k^2$.
4. Nu is $q^2$ even, en om dezelfde reden als in stap 2 is ook $q$ even.
5. Maar dan zijn $p$ en $q$ allebei even, en dat hadden we juist uitgesloten.

De aanname leidt tot een tegenspraak, dus ze is onjuist: er bestaat geen breuk waarvan het kwadraat precies 2 is. Deze redeneervorm heet een **bewijs uit het ongerijmde**.
:::

Een bewijs in deze geest is oud. Aristoteles (vierde eeuw v.Chr.) gebruikt in zijn *Analytica Priora* als standaardvoorbeeld van een bewijs uit het ongerijmde dat de diagonaal onmeetbaar is met de zijde, "omdat anders oneven gelijk zou zijn aan even". Plato beschrijft in zijn dialoog *Theaetetus* hoe de wiskundige Theodorus van Cyrene liet zien dat ook de wortels van 3, 5 en verder tot aan 17 onmeetbaar zijn (voor zover het geen kwadraten zijn). Euclides wijdde later een volledig boek van zijn *Elementen*, boek X, aan de classificatie van onmeetbare lengtes.

:::history De legende van Hippasus
Volgens een bekend verhaal was het de pythagoreeër **Hippasus van Metapontum** (vijfde eeuw v.Chr.) die de onmeetbaarheid ontdekte of openbaar maakte, en zou hij daarvoor als straf op zee zijn verdronken. Dat verhaal moet je met grote voorzichtigheid lezen. De bronnen zijn honderden jaren jonger dan de gebeurtenissen, vooral de neoplatonist Iamblichus (rond 300 n.Chr.), en ze spreken elkaar tegen: in een andere versie verdrinkt Hippasus omdat hij de constructie van de regelmatige twaalfvlakshoek in een bol had verraden. Geen antieke auteur schrijft de ontdekking van de onmeetbaarheid ondubbelzinnig aan hem toe. Het verhaal laat vooral zien hoe later de schok van de ontdekking werd gedramatiseerd.
:::

Wat vaststaat, is dat de ontdekking gevolgen had. Als niet elke lengte een verhouding van gehele getallen is, kun je meetkunde niet volledig op rekenen met breuken bouwen. De Griekse wiskunde ging daarom lengtes en oppervlakten meetkundig behandelen, en het zou tot in de negentiende eeuw duren voordat de reële getallen, inclusief alle irrationale getallen, een volledig rekenkundige fundering kregen.

## 4. Archimedes en de Zandrekenaar

Hoe groot kan een getal zijn dat je nog kunt **benoemen**? In de Griekse getalnotatie was het grootste gangbare getal de *myriade*, $10\,000 = 10^4$. Archimedes van Syracuse (ca. 287–212 v.Chr.) schreef een kort werk, de *Zandrekenaar* (Grieks *Psammites*), gericht aan koning Gelon II van Syracuse, de zoon van koning Hiëro II. Daarin bestrijdt hij het idee dat het aantal zandkorrels oneindig of onbenoembaar groot is.

Archimedes bouwde een systeem op de **myriade myriaden**, $10^4 \cdot 10^4 = 10^8$. Getallen tot $10^8$ noemde hij de getallen van de **eerste orde**. Met $10^8$ als nieuwe eenheid telde hij verder: getallen tot $10^8 \cdot 10^8 = 10^{16}$ vormen de tweede orde, tot $10^{24}$ de derde orde, enzovoort. Zo kon hij getallen benoemen die veel groter waren dan alles wat men tot dan toe nodig had gehad.

Daarna schatte hij hoeveel zandkorrels er in het heelal zouden passen. Hij gebruikte daarbij het heelal zoals de astronoom Aristarchus van Samos zich dat voorstelde, met de zon in het midden; de *Zandrekenaar* is een van de belangrijkste bronnen over dat vroege zonmiddelpuntige wereldbeeld. Zijn uitkomst was, in moderne notatie, dat het er **niet meer dan $10^{63}$** zijn.

Het merkwaardigste is een hulpstelling die hij onderweg bewijst. Voor de termen van een meetkundige rij $1, 10, 100, 1000, \ldots$ laat hij zien dat het product van twee termen weer een term is, en dat je de plaats ervan vindt door de plaatsen van de factoren op te tellen. In onze notatie is dat de productregel uit les 3:

$$
10^m \cdot 10^n = 10^{m+n}
$$

Archimedes had geen exponenten om dat zo op te schrijven. De gedachte was er wel, bijna negentien eeuwen voordat de notatie zou volgen.

## 5. Het wortelteken: Rudolff, 1525

Middeleeuwse en vroegmoderne rekenaars schreven wortels in woorden, of met afkortingen van het Latijnse *radix* (wortel), zoals een letter R. Het teken $\sqrt{\phantom{a}}$ verscheen voor het eerst in druk in **Die Coss** van de Duitse rekenmeester **Christoph Rudolff**, gedrukt in 1525 in Straatsburg. *Coss* was de toenmalige naam voor algebra, naar het Italiaanse *cosa*, "ding", waarmee de onbekende werd aangeduid. Waar het teken vandaan komt, is niet met zekerheid bekend; de gangbare verklaring is dat het een gestileerde kleine letter r is, van *radix*. De horizontale streep erboven, die aangeeft hoe ver de wortel doorloopt, kwam pas later; het samenvoegen van teken en streep wordt meestal aan Descartes toegeschreven.

## 6. De exponent: Descartes, 1637

In 1637 publiceerde de Franse filosoof en wiskundige **René Descartes** zijn *Discours de la méthode*. Als bijlage verscheen *La Géométrie*, het werk waarin hij meetkunde en algebra met elkaar verbond (je ziet daar in module 17 meer van). In *La Géométrie* staat de exponentnotatie die wij nog steeds gebruiken: een klein getal rechtsboven, zoals $a^3$ en $x^4$. Eerdere schrijvers hadden voor elke macht een aparte naam of afkorting nodig.

Opvallend genoeg schreef Descartes het kwadraat meestal nog niet als $x^2$, maar als $xx$. Voor hogere machten gebruikte hij wel de exponent. Pas later werd $x^2$ gewoon. Negatieve en gebroken exponenten, zoals $a^{-1}$ en $a^{1/2}$, kwamen nog later in gebruik, onder meer bij Wallis en Newton in de tweede helft van de zeventiende eeuw.

:::summary De lijn door de geschiedenis
- **ca. 2000–1600 v.Chr.**: Babylonische tabellen met kwadraten; YBC 7289 met $\sqrt{2} \approx 1;24,51,10$.
- **5e–4e eeuw v.Chr.**: ontdekking van de onmeetbaarheid; bewijs dat $\sqrt2$ geen breuk is (Aristoteles verwijst ernaar).
- **3e eeuw v.Chr.**: Archimedes' *Zandrekenaar*: orden van $10^8$ en de productregel voor machten van tien.
- **1525**: Rudolff, *Die Coss*: het wortelteken in druk.
- **1637**: Descartes, *La Géométrie*: de moderne exponentnotatie.
:::

## Bronnen

- MacTutor, *An overview of Babylonian mathematics*: <https://mathshistory.st-andrews.ac.uk/HistTopics/Babylonian_mathematics/>
- Wikipedia, *YBC 7289*: <https://en.wikipedia.org/wiki/YBC_7289>
- Institute for the Study of the Ancient World (NYU), *YBC 7289*: <https://isaw.nyu.edu/exhibitions/before-pythagoras/items/ybc-7289/>
- Duncan Melville, *YBC 7289* (St. Lawrence University): <https://myslu.stlawu.edu/~dmel/mesomath/tablets/YBC7289>
- Wikipedia, *Plimpton 322*: <https://en.wikipedia.org/wiki/Plimpton_322>
- Wikipedia, *Hippasus*: <https://en.wikipedia.org/wiki/Hippasus>
- Wikipedia, *Theodorus of Cyrene*: <https://en.wikipedia.org/wiki/Theodorus_of_Cyrene>
- Wikipedia, *The Sand Reckoner*: <https://en.wikipedia.org/wiki/The_Sand_Reckoner>
- MacTutor, *Christoff Rudolff*: <https://mathshistory.st-andrews.ac.uk/Biographies/Rudolff/>
- Wikipedia, *La Géométrie*: <https://en.wikipedia.org/wiki/La_G%C3%A9om%C3%A9trie>
