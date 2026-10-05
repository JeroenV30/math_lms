# Van aha-problemen tot het isgelijkteken

Je hebt in de voorgaande lessen vergelijkingen opgelost met een korte, bijna mechanische methode: vertalen, balansstappen, controleren. Het is gemakkelijk te vergeten dat dit een **uitvinding** is, en nog wel een langzame. Ongeveer vierduizend jaar lang losten mensen vergelijkingen op zonder het woord "vergelijking", zonder de letter $x$ en zonder het teken $=$. Ze gebruikten gewone taal, voorbeelden en slimme gokken. In deze les volg je vijf stations van die geschiedenis: Egypte, Babylon, Alexandrië, Bagdad en Londen. Bij elk station zie je wat toen al kon, wat nog ontbrak, en welk stukje van jouw methode daar zijn oorsprong heeft.

:::question Denk eerst zelf na
- Stel dat je geen letters mocht gebruiken. Hoe zou je dan uitleggen hoe je een "getal waarvan een zevende deel erbij opgeteld 19 geeft" vindt?
- Een goede gok geeft vaak een uitkomst die niet klopt. Kun je uit hoe fout je gok was afleiden hoe je hem moet verbeteren?
- Waarom zou het zo lang geduurd hebben voordat iemand het isgelijkteken bedacht?
:::

## 1. Egypte: de gok die je verbetert

In de introductie las je de aanhef van probleem 24 uit de Rhind-papyrus: een hoeveelheid en haar zevende deel zijn samen 19. De schrijver Ahmes noemt in zijn voorwoord dat hij een ouder werk overschrijft, en dateert zijn kopie rond 1550 v.Chr. De papyrus is ruim vijf meter lang en bevat ruim tachtig opgaven, grotendeels met uitwerking. Een deel daarvan heet naar het Egyptische woord voor "hoeveelheid" (meestal weergegeven als *aha*) de **aha-problemen**.

:::history Egypte, ca. 1550 v.Chr.
Ahmes lost de aha-problemen niet op met een formule en niet met een balans, maar met een methode die later **valse positie** (Latijn: *regula falsi*) is gaan heten. Hij neemt een handig getal dat vrijwel zeker niet klopt, rekent daarmee de opgave door, en vergelijkt de uitkomst met wat er had moeten uitkomen. Het verschil in uitkomst vertaalt hij terug naar een correctie van de gok.
:::

### Valse positie in vier stappen

Bij probleem 24 gaat het zo, in moderne woorden:

:::example Uitgewerkt voorbeeld: de hoeveelheid en haar zevende deel zijn 19
1. **Gok** een handig getal. Omdat er een zevende deel in voorkomt, is 7 handig: een zevende deel van 7 is 1 en je hoeft niet met breuken te rekenen.
2. **Reken door** met de gok: 7 plus een zevende van 7 is $7 + 1 = 8$. Er had 19 moeten uitkomen, dus de gok is te klein.
3. **Bepaal de factor**: van 8 naar 19 moet je vermenigvuldigen met $\tfrac{19}{8}$. Ahmes schrijft dit als een som van stambreuken: $2 + \tfrac{1}{4} + \tfrac{1}{8}$. Controleer: $2 + 0{,}25 + 0{,}125 = 2{,}375 = \tfrac{19}{8}$.
4. **Schaal de gok op**: de hoeveelheid is $7 \times \tfrac{19}{8} = \tfrac{133}{8} = 16\tfrac{5}{8}$. Ahmes schrijft: $16 + \tfrac{1}{2} + \tfrac{1}{8}$.

*Controle:* $\tfrac{133}{8} + \tfrac{133}{56} = \tfrac{133}{8} + \tfrac{19}{8} = \tfrac{152}{8} = 19$. Klopt, en dit is dezelfde uitkomst als in les 4 met een vergelijking.
:::

![Valse positie bij probleem 24](/images/diagrams/m16-valse-positie.svg "Valse positie bij Rhind-probleem 24: de gok 7 geeft 8, de uitkomst moet 19 zijn, dus schaal je met 19/8. Eigen illustratie.")

### Waarom werkt dit?

Bij een opgave als "een hoeveelheid en haar zevende deel" is de uitkomst **evenredig** met de gok. Verdubbel je de hoeveelheid, dan verdubbelt ook de uitkomst; verdrievoudig je hem, dan verdrievoudigt de uitkomst. Als de gok 7 de uitkomst 8 geeft, dan geeft $7 \times k$ de uitkomst $8 \times k$. Je wilt dat $8k = 19$, dus $k = \tfrac{19}{8}$. In moderne notatie: de linkerkant is $x + \tfrac{x}{7} = \tfrac{8}{7}x$, een vorm $ax$, en bij zo'n vorm is het quotiënt van twee uitkomsten gelijk aan het quotiënt van de twee invoerwaarden.

Probeer de methode op een tweede opgave, een variant die Ahmes zelf in verschillende vormen behandelt:

:::example Uitgewerkt voorbeeld: een hoeveelheid en haar vijfde deel zijn 24
1. Gok 5 (handig, vanwege het vijfde deel). Dan $5 + 1 = 6$.
2. De uitkomst moet 24 zijn, dus de factor is $24 : 6 = 4$.
3. De hoeveelheid is $5 \times 4 = 20$.

*Controle:* $20 + \tfrac{20}{5} = 20 + 4 = 24$. Klopt. Met een vergelijking: $x + \tfrac{x}{5} = 24$, dus $6x = 120$ en $x = 20$.
:::

{{ exercise: 16-041 }}

### De grens van de methode

Valse positie werkt alleen als de uitkomst evenredig is met de gok. Dat geldt voor vormen als $x + \tfrac{x}{7}$ of $3x$, waar elke term een veelvoud van $x$ is. Het faalt zodra er een **losse constante** in staat. Neem $2x + 6 = 18$ uit de introductie. Gok 5: dan $2 \times 5 + 6 = 16$. De uitkomst 16 moet 18 worden, de factor is $\tfrac{18}{16}$, en de verbeterde gok wordt $5 \times \tfrac{18}{16} = 5{,}625$. Maar $2 \times 5{,}625 + 6 = 17{,}25$, dus fout! De 6 schaalt niet mee met de gok. Een gewone gok met één correctie is in dat geval niet genoeg; je hebt een tweede gok nodig, en de redenering ernaast wordt langer. Het is de reden dat latere rekenaars (onder andere in China en in de middeleeuwse Islamitische wereld) een *dubbele* valse positie gebruikten. De balansmethode omzeilt het probleem door eerst de constante weg te halen.

Merk op dat dit precies de vergelijkingen zijn waar je in les 2 mee begon: $ax + b = c$. De vormen zonder $b$ kun je met een gok en een factor oplossen. Zodra er een $b$ staat, moet je eerst de balans in evenwicht brengen. Dat verklaart waarom de balansmethode meer is dan een andere schrijfwijze: ze kan iets wat de gok-en-schaalmethode niet algemeen kan.

## 2. Babylon: recepten met woorden

In de eeuwen rond 1800 tot 1600 v.Chr. (de zogenoemde oud-Babylonische periode) schrijven scholieren en schrijvers in Mesopotamië rekenopgaven met een rietstokje in natte klei. Er zijn honderden van zulke tabletten bewaard. Veel bevatten wat wij vergelijkingen zouden noemen. Er is geen symbool voor een onbekende. In plaats daarvan staan er woorden als "lengte", "breedte" en "oppervlakte", die dienen als **plaatsvervangers** voor onbekende getallen. Een bekend voorbeeld is het tablet met de aanduiding BM 13901, dat begint met een vierkant: de oppervlakte van het vierkant plus de zijde ervan is $\tfrac{3}{4}$. De oplosser krijgt een recept dat stap voor stap voorschrijft wat je moet doen: neem de helft van 1, kwadrateer die helft, tel daar $\tfrac{3}{4}$ bij op, neem de wortel, trek de helft af. Wie het uitvoert, vindt $\tfrac{1}{2}$, en die waarde klopt inderdaad: $\tfrac{1}{4} + \tfrac{1}{2} = \tfrac{3}{4}$.

:::history Mesopotamië, ca. 1800–1600 v.Chr.
De Babylonische rekenaars hebben geen bewijs en geen algemene formule opgeschreven. Het opvallende is dat hun voorbeelden zó zijn gekozen dat het recept bij elk vergelijkbaar getal werkt, en dat ze het recept in de tekst herhalen met "dit is de procedure". Historici lezen daarin een begrip van methode, ook al is er geen letter om die methode algemeen op te schrijven. De getallen staan in het zestigtallig stelsel, zoals je uit de eerste modules kent.
:::

Veel Babylonische opgaven zijn zelfs lineair. Er zijn tabletten waarin twee onbekende lengtes of twee velden tegelijk voorkomen, met voorwaarden als "een derde van het ene veld plus de helft van het andere". In moderne taal zijn dat **stelsels** van lineaire vergelijkingen, waar je in module 20 mee werkt. De redenering gaat meestal weer via een slimme gok of via het optellen en aftrekken van de gegeven voorwaarden: precies het soort balansbewerkingen dat je nu zelf kent.

:::tip Wat dit je laat zien
Een vergelijking oplossen is ouder dan de letters waarmee we haar opschrijven. Wat de Babyloniërs misten, was geen kunde maar **notatie**. Voor wie een methode alleen met woorden en voorbeelden doorgeeft, is het veel moeilijker om te controleren dat ze altijd werkt, en om haar te combineren met andere methoden.
:::

## 3. Alexandrië: Diophantus en de eerste letter

Ongeveer vijftien eeuwen na Ahmes werkt in het Griekstalige Alexandrië een wiskundige met de naam **Diophantus**. Over zijn leven is vrijwel niets zeker; de meeste historici plaatsen hem ergens in de derde eeuw na Christus, maar de schattingen lopen uiteen. Zijn werk, de *Arithmetica*, is voor een deel bewaard gebleven. Het bevat een grote verzameling opgaven waarin getallen aan voorwaarden moeten voldoen, met oplossingen die steeds met een andere slimme keuze worden gevonden.

Wat Diophantus bijzonder maakt, is zijn **afkorting**. Voor de onbekende gebruikt hij een vast teken (een soort verkorte schrijfwijze van het Griekse woord voor "getal"), en voor de tweede en derde macht heeft hij eigen afkortingen. Daardoor kan hij de redenering compact opschrijven: hij kan "een onbekende plus zes eenheden is gelijk aan achttien" in een regel zetten in plaats van in een zin. Historici noemen deze tussenvorm van woorden en afkortingen wel *gesyncopeerde* algebra. Minteken en isgelijkteken kent hij nog niet; die schrijft hij met een afkorting en met woorden.

### Het grafschrift

Een bekende puzzel uit de Griekse bloemlezing (*Anthologia Graeca*) wordt toegeschreven aan zijn grafschrift. Die toeschrijving is een **overlevering**: de bloemlezing is eeuwen later samengesteld, en niemand weet of het epigram werkelijk bij Diophantus' graf hoort. De puzzel zelf is wel een prachtig voorbeeld van een vergelijking met breuken. Vrij weergegeven:

*Zijn jeugd duurde een zesde deel van zijn leven. Na nog een twaalfde deel kreeg hij een baard. Na nog een zevende deel trouwde hij. Vijf jaar later kreeg hij een zoon. De zoon werd half zo oud als zijn vader uiteindelijk werd, en de vader overleed vier jaar na zijn zoon. Hoe oud werd hij?*

:::example Uitgewerkt voorbeeld: hoe oud werd hij?
1. **Onbekende kiezen:** $x$ is het aantal levensjaren van de vader.
2. **Vertalen:** de jaren tellen op tot het hele leven:
   $$
   \frac{x}{6} + \frac{x}{12} + \frac{x}{7} + 5 + \frac{x}{2} + 4 = x
   $$
3. **Breuken weg:** het kgv van 6, 12, 7 en 2 is 84. Vermenigvuldig **elke term** met 84:
   $$
   14x + 7x + 12x + 420 + 42x + 336 = 84x
   $$
4. **Samennemen:** links $75x + 756$, rechts $84x$. Trek $75x$ af: $756 = 9x$.
5. **Delen:** $x = 84$.
6. *Controle:* $\tfrac{84}{6} = 14$, $\tfrac{84}{12} = 7$, $\tfrac{84}{7} = 12$, de zoon werd $\tfrac{84}{2} = 42$. Samen: $14 + 7 + 12 + 5 + 42 + 4 = 84$. Klopt.

Merk op dat de onbekende aan beide kanten staat en dat er breuken in zitten: precies de twee technieken uit les 3 en 4, nu samen in één vergelijking.
:::

Een Egyptische schrijver zou dit met een gok hebben aangepakt, Diophantus met zijn afkorting voor de onbekende, en jij met een vergelijking. Je weet nu waarom alle drie de routes naar dezelfde uitkomst leiden, en welke het overzichtelijkst blijft.

## 4. Bagdad: al-jabr en al-muqabala

Het woord *algebra* komt uit Bagdad. Rond het jaar 820 schrijft **Muhammad ibn Musa al-Khwarizmi**, werkzaam aan het huis van wijsheid in Bagdad onder kalief al-Ma'mun, een boekje met een lange titel, in het Nederlands ongeveer *Het beknopte boek over rekenen met al-jabr en al-muqabala*. De titel noemt twee bewerkingen die hij gebruikt om vergelijkingen te vereenvoudigen. Het woord *al-jabr* in de titel is in het Latijn *algebra* geworden, en zo kreeg het hele vak zijn naam. Zijn eigen naam, in het Latijn *Algoritmi*, is ook de oorsprong van het woord *algoritme*, omdat zijn tweede boek over het rekenen met Indiase cijfers in het Latijn is vertaald.

:::history Bagdad, ca. 820
Al-Khwarizmi's boek is bedoeld voor praktisch gebruik: erfenissen verdelen, land opmeten, handel drijven. Hij geeft vooral **regels voor zes standaardvormen** van vergelijkingen met "dingen" (de onbekende, in het Arabisch *shay'*), "vierkanten" en "getallen". Elke vorm behandelt hij met een apart recept en meestal met een meetkundige onderbouwing. Negatieve getallen gebruikt hij niet: alle termen zijn positief, en daarom kent hij zes vormen waar wij er één schrijven.
:::

### Al-jabr: herstellen

*Al-jabr* betekent zoiets als **herstellen** of **aanvullen**. Als een vergelijking een term bevat die wordt **afgetrokken**, dan voeg je die term aan beide kanten toe, zodat hij verdwijnt en alle termen positief worden. In ons voorbeeld uit les 3:

$$
7x - 4 = 3x + 20 \quad\longrightarrow\quad 7x = 3x + 24 \qquad (\text{beide kanten} + 4)
$$

De $-4$ is "hersteld": links staat nu geen aftrekking meer. Dit is de balansregel "aan beide kanten hetzelfde optellen".

### Al-muqabala: tegenover elkaar stellen

*Al-muqabala* betekent **tegenover elkaar stellen** of **vereffenen**. Staat dezelfde soort term aan beide kanten, dan trek je die weg tegen elkaar, zodat hij maar aan één kant overblijft:

$$
7x = 3x + 24 \quad\longrightarrow\quad 4x = 24 \qquad (\text{beide kanten} - 3x)
$$

Dat is de balansregel "aan beide kanten hetzelfde aftrekken", toegepast op de $x$-termen. Daarna deel je, en dan volgt $x = 6$. De twee woorden uit de titel van het boek zijn dus de twee bewegingen die je in les 3 zo vaak hebt gebruikt: eerst aftrekkingen wegwerken, dan gelijke soorten tegen elkaar wegstrepen.

:::example Uitgewerkt voorbeeld: al-jabr en al-muqabala op één vergelijking
Los op: $5x - 6 = 2x + 15$, in de volgorde van Al-Khwarizmi.

1. **Al-jabr:** tel aan beide kanten 6 op, zodat de aftrekking verdwijnt: $5x = 2x + 21$.
2. **Al-muqabala:** trek aan beide kanten $2x$ af, zodat de $x$-termen aan één kant staan: $3x = 21$.
3. **Delen:** $x = 7$.
4. *Controle:* links $5 \times 7 - 6 = 29$, rechts $2 \times 7 + 15 = 29$. Klopt.
:::

Het grote verschil met jouw aanpak is dat Al-Khwarizmi alles in woorden schrijft. Er staat geen $x$, geen $+$ en geen $=$. Een vergelijking als de bovenstaande luidt bij hem ongeveer "vijf dingen min zes getallen zijn gelijk aan twee dingen en vijftien getallen". Dat leest moeizaam, en het verklaart waarom lange redeneringen in de middeleeuwse algebra zo lastig te volgen zijn. Wat hij wel doet, is een **methode** geven die onafhankelijk is van de getallen. Daarmee ligt in zijn boek de grens tussen een verzameling opgaven met uitwerkingen en een vak met regels.

### Waar de regel ophoudt

Al-Khwarizmi's zes vormen komen voort uit het feit dat hij geen negatieve getallen aanvaardt. Ruim een eeuw eerder had de Indiase wiskundige Brahmagupta (628) al regels voor rekenen met negatieve getallen en nul gegeven, maar die waren in de Arabische algebra van die tijd nog niet gemeengoed. Het is een mooi voorbeeld van hoe wiskundige ideeën reizen: sommige worden snel overgenomen, andere pas na eeuwen.

## 5. Londen: het isgelijkteken

Je kunt al-jabr en al-muqabala alleen opschrijven als je ook iets hebt om **gelijkheid** mee aan te geven. In Europa schreven rekenaars in de zestiende eeuw nog vaak het woord *aequales* of een afkorting daarvan. Rond dezelfde tijd hadden Duitse rekenaars het plusteken en het minteken in gebruik genomen. Het ontbrak aan een teken voor "is gelijk aan".

:::history Engeland, 1557
De Welshe arts en wiskundige **Robert Recorde** publiceert in 1557 *The Whetstone of Witte*, een leerboek over algebra in het Engels. Hij schrijft dat hij bij zijn werk vaak twee gelijke zaken moet vergelijken en daarom, om niet steeds de woorden te hoeven herhalen, een paar evenwijdige lijnen van gelijke lengte zal gebruiken. Zijn motivering is bekend geworden: omdat er, schrijft hij, geen twee dingen méér aan elkaar gelijk kunnen zijn dan twee evenwijdige lijnen. Zijn teken is langer dan dat van ons, maar het principe is hetzelfde.
:::

Recordes keuze is meer dan een leuke anekdote. Een teken voor gelijkheid maakt het mogelijk om een vergelijking **in één oogopslag** als een geheel te zien, en om elke balansstap als een nieuwe regel eronder te schrijven: precies de standaardvorm uit de introductie. Het isgelijkteken werd daarna niet meteen overal gebruikt. Andere schrijvers gebruikten nog lange tijd eigen tekens of woorden; pas in de zeventiende eeuw werd het teken algemeen. Rond 1637 gebruikte René Descartes in *La Géométrie* de conventie dat de **laatste letters** van het alfabet ($x$, $y$, $z$) onbekenden voorstellen en de **eerste** letters ($a$, $b$, $c$) bekende grootheden. Daar komt jouw eigen schrijfwijze $ax + b = c$ vandaan.

| Periode | Manier van schrijven | Voorbeeld |
|---|---|---|
| Egypte en Babylon | gewone taal, recepten met getallen | "een hoeveelheid en haar zevende deel zijn 19" |
| Alexandrië (Diophantus) | woorden met afkortingen | afgekort teken voor de onbekende |
| Bagdad (Al-Khwarizmi) | volledig in woorden | "vijf dingen min zes getallen zijn..." |
| Londen (Recorde, 1557) | teken voor gelijkheid | het isgelijkteken |
| Parijs (Descartes, 1637) | letters voor onbekenden en constanten | $ax + b = c$ |

## Wat deze geschiedenis je leert

- **Methode boven opgave.** Van Ahmes tot Al-Khwarizmi is de vooruitgang dat een oplossing niet meer één getal is, maar een werkwijze die bij elk getal werkt.
- **Notatie is geen decoratie.** Zonder gelijkteken en letters kan een vergelijking nauwelijks worden beredeneerd. De symbolen hebben eeuwen nodig gehad omdat ze iets nieuws mogelijk maken: je kunt over de onbekende rekenen alsof je haar al kent.
- **Omkeerbaarheid is de kern.** Valse positie, al-jabr, al-muqabala en jouw balansstappen zijn allemaal manieren om te redeneren: wat je doet met de linkerkant, moet je terug kunnen draaien en ook met de rechterkant doen.
- **Geen methode zonder grens.** De valse positie faalt bij een losse constante; Al-Khwarizmi's regels bij negatieve getallen. Het is verstandig om bij elke methode te vragen: wanneer werkt dit niet?

:::tip Een bewerking die niet omkeerbaar is
Een stap die niet omkeerbaar is, kan oplossingen toevoegen of laten verdwijnen. Uit $x = 3$ volgt $x^2 = 9$. Maar uit $x^2 = 9$ volgt niet alleen $x = 3$, ook $x = -3$ voldoet. Het kwadrateren van beide kanten is dus geen balansstap die je zomaar mag zetten. Controleer in zo'n geval altijd in de oorspronkelijke vergelijking. In module 21 werk je dit uit voor kwadratische vergelijkingen.
:::

{{ exercise: 16-023 }}

## Bronnen

- MacTutor History of Mathematics, [Al-Khwarizmi](https://mathshistory.st-andrews.ac.uk/Biographies/Al-Khwarizmi/) en [Al-Khwarizmi en kwadratische vergelijkingen](https://mathshistory.st-andrews.ac.uk/Extras/Al-Khwarizmi_quadratics/).
- MacTutor, [Egyptian mathematics: the Rhind and Moscow papyri](https://mathshistory.st-andrews.ac.uk/HistTopics/Egyptian_papyri/).
- MacTutor, [Babylonian mathematics](https://mathshistory.st-andrews.ac.uk/HistTopics/Babylonian_mathematics/).
- MacTutor, [Diophantus of Alexandria](https://mathshistory.st-andrews.ac.uk/Biographies/Diophantus/).
- MacTutor, [Robert Recorde](https://mathshistory.st-andrews.ac.uk/Biographies/Recorde/).
- Wikipedia, [Rhind Mathematical Papyrus](https://en.wikipedia.org/wiki/Rhind_Mathematical_Papyrus) en [False position method](https://en.wikipedia.org/wiki/False_position_method).

Alle datering is bij benadering; waar de bronnen onzeker zijn (de levensjaren van Diophantus, de herkomst van het grafschrift), is dat in de tekst vermeld.
