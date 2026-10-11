# Groei als model en als historische aanname

Exponentiële groei is in de geschiedenis van de wetenschap op twee heel verschillende manieren verschenen: als een dreigend rekenkundig feit over bevolkingen, en als een wetmatigheid van atomen. In dit intermezzo volg je vier momenten uit die geschiedenis. Elk toont iets over wat een model *kan* en wat het *niet* kan.

## Malthus: een bevolking tegenover het voedsel (1798)

In 1798 verscheen anoniem *An Essay on the Principle of Population* van Thomas Malthus, een Engelse predikant. Zijn centrale bewering was dat een onbelemmerde bevolking **meetkundig** toeneemt (steeds met een vaste factor, dus exponentieel), terwijl de voedselvoorziening hooguit **rekenkundig** toeneemt (steeds met een vast bedrag, dus lineair). Op papier moet de eerste reeks dan vroeg of laat de tweede inhalen, en daarmee kwam Malthus tot sombere conclusies over honger, ziekte en armoede als natuurlijke remmen op bevolkingsgroei. De [eerste editie van het essay](https://www.econlib.org/library/Malthus/malPop.html) staat online.

Dit is precies het contrast uit de eerste les van deze module: vaste factor tegenover vast verschil. Het is wiskundig juist dat een exponentiële reeks uiteindelijk elke lineaire reeks inhaalt, hoe ongelijk de start ook is. Maar de wiskunde zegt niets over de vraag of bevolking en voedsel werkelijk zo groeien. Dat bleek niet vast te liggen: technologie, migratie, handel en veranderende geboortecijfers hebben de aannames in de praktijk telkens veranderd. Het essay is een goed voorbeeld van een redenering die er overtuigend uitziet omdat de rekenkunde klopt, terwijl de aanname erachter getoetst moet worden.

## De schaakbordlegende (13e eeuw)

De legende uit de eerste les is een kleine les in exponentiële groei. Het totaal van alle 64 velden is $2^{64}-1$ korrels: het verschil met 64 lineaire stappen is niet een kwestie van een paar procent maar van vele ordes van grootte. Volgens het Engelstalige overzicht op Wikipedia is het verhaal voor zover bekend voor het eerst opgetekend in 1256 door de geleerde Ibn Khallikan, en bestaan er verschillende versies, waarvan sommige voor de vragensteller goed en andere slecht aflopen. Zie het als een leerzaam verhaal en niet als geschiedschrijving.

## Bernoulli, Euler en het getal $e$

Een heel andere vraag speelde in 1683. Jacob Bernoulli bekeek wat er gebeurt als je de rente steeds vaker bijschrijft. Stel een bedrag van 1 groeit in één jaar met 100%, maar de bank verdeelt dat over $n$ gelijke periodes en schrijft elke keer $100\%/n$ bij. Het eindbedrag is dan $(1+\tfrac1n)^n$.

| Aantal periodes $n$ | 1 | 2 | 4 | 12 | 365 | 1000 |
|---|---|---|---|---|---|---|
| $(1+\frac1n)^n$ | 2 | 2,25 | 2,4414 | 2,6130 | 2,7146 | 2,7169 |

Het eindbedrag blijft toenemen, maar steeds langzamer, en lijkt ergens in de buurt van 2,718 te blijven steken. Volgens MacTutor onderzocht Bernoulli in 1683 deze vraag en probeerde hij de limiet van $(1+1/n)^n$ voor grote $n$ te vinden; dat was voor zover bekend de eerste keer dat een getal door een limietproces werd gedefinieerd. Leonhard Euler gebruikte de letter $e$ voor dit getal voor het eerst in een brief aan Goldbach uit 1731, en in zijn *Introductio in analysin infinitorum* (1748) berekende hij $e$ op 18 decimalen: $2{,}718281828459045235\ldots$. Waarom Euler juist de letter $e$ koos, is niet vastgelegd; beweringen dat het voor "exponentieel" of voor zijn eigen naam staat, zijn niet onderbouwd.

Dit is een vooruitblik: **continue groei** (steeds op elk moment bijschrijven) leidt tot een eigen functie, $e^t$, die we bij de logaritmen en de afgeleide opnieuw zullen tegenkomen. In deze module blijf je bij factoren per vaste tijdstap.

:::example Bernoulli's tabel narekenen
Bereken $(1+\tfrac1{12})^{12}$, de jaaropbrengst bij maandelijks bijschrijven van 100%/12 per maand.

Stap 1: $1+\tfrac1{12}=1{,}08333\ldots$

Stap 2: $1{,}08333^{12}\approx2{,}6130$.

Het bedrag is dus 2,613 keer zo groot, tegenover 2 bij één keer per jaar bijschrijven. Dat is meer dan het enkelvoudige antwoord $1+12\cdot\tfrac1{12}=2$, omdat de rente over de rente meetelt.
:::

## Verhulst: groei heeft een plafond (1838)

De Belgische wiskundige Pierre-François Verhulst (1804–1849) vond dat het model van onbeperkte groei niet te verdedigen was op lange termijn. Volgens MacTutor publiceerde hij in 1838 het artikel *Notice sur la loi que la population suit dans son accroissement*, waarin hij een model voorstelde waarin remmende krachten sterker worden naarmate de bevolking dichter bij een maximum komt. Het resultaat is de **logistische groei**: eerst nagenoeg exponentieel, daarna steeds langzamer, tot de populatie een plafond nadert (de zogenoemde draagkracht).

Kwalitatief heeft zo'n kromme drie fasen. In het begin, als de populatie klein is ten opzichte van het plafond, lijkt het exponentieel. In het midden is de toename per tijdstap het grootst. Aan het eind buigt de grafiek af naar een horizontale lijn. Het is een belangrijke herinnering dat een exponentieel model een lokale beschrijving kan zijn, geldig voor een beperkt bereik.

Volgens dezelfde MacTutor-biografie werd Verhulsts werk lange tijd weinig opgemerkt, mede door zijn eigen twijfels aan het model en de twijfels van zijn leermeester Adolphe Quetelet, en werd het in 1920 herontdekt door Raymond Pearl en Lowell Reed. Verhulst verwierp het idee van groei dus niet, maar voegde er een grens aan toe.

## Rutherford en Soddy: verval en halveringstijd (1902)

Aan het begin van de twintigste eeuw ontdekten Ernest Rutherford en Frederick Soddy in Montreal dat radioactieve stoffen op een voorspelbare manier vervallen. Volgens het overzicht van het Lindau Nobel-archief vonden zij dat in een vast tijdsinterval steeds een vast deel van de aanwezige atoomkernen vervalt, en dat het verval de exponentiële wet volgt. Een vaak genoemd experiment: thorium X, afgescheiden van thorium, verloor in ongeveer vier dagen de helft van zijn activiteit, terwijl het achterblijvende thorium in dezelfde tijd diezelfde activiteit terugkreeg. Zo ontstond het besef van een karakteristieke tijd per stof, de **halveringstijd**. Volgens Wikipedia wordt de oorspronkelijke term *half-life period* aan Rutherford (1907) toegeschreven; de term werd in de jaren vijftig verkort tot *half-life*.

Het is een mooi voorbeeld van een model dat wel strikt klopt. Atoomkernen vervallen willekeurig maar onafhankelijk, met per kern een vaste kans per tijdseenheid. Bij een enorm aantal kernen levert dat exact het patroon op waarmee je hebt gerekend: een vaste factor per vaste tijd.

:::history Wat zegt de wiskunde en wat zegt de natuur?
Malthus gebruikte een vaste factor om een veronderstelde bevolkingsgroei te beschrijven, een aanname die je kunt bespreken en toetsen. Rutherford en Soddy vonden dezelfde wiskunde in de natuur, en daar is de aanname (onafhankelijke kernen, vaste kans) fysisch onderbouwd. Dat verschil bepaalt hoeveel vertrouwen je in extrapolatie mag hebben.
:::

## Bronnen

- Thomas Malthus, *An Essay on the Principle of Population* (1798), eerste editie: [econlib.org/library/Malthus/malPop.html](https://www.econlib.org/library/Malthus/malPop.html).
- MacTutor, biografie van Pierre-François Verhulst: [mathshistory.st-andrews.ac.uk/Biographies/Verhulst/](https://mathshistory.st-andrews.ac.uk/Biographies/Verhulst/).
- MacTutor, "The number e" (Bernoulli 1683, Euler 1731 en 1748): [mathshistory.st-andrews.ac.uk/HistTopics/e/](https://mathshistory.st-andrews.ac.uk/HistTopics/e/).
- Wikipedia, "Wheat and chessboard problem" (herkomst van de legende): [en.wikipedia.org/wiki/Wheat_and_chessboard_problem](https://en.wikipedia.org/wiki/Wheat_and_chessboard_problem).
- Lindau Nobel Mediatheque, onderzoeksprofiel van Frederick Soddy (Rutherford en Soddy, 1902): [mediatheque.lindau-nobel.org/research-profile/laureate-soddy](https://www.mediatheque.lindau-nobel.org/research-profile/laureate-soddy).
- Wikipedia, "Half-life" (herkomst van de term): [en.wikipedia.org/wiki/Half-life](https://en.wikipedia.org/wiki/Half-life).

Over de Malthus-bron: de pagina is gecontroleerd als eerste editie van 1798. De tegenstelling tussen meetkundige en rekenkundige reeks is hier in eigen woorden weergegeven en niet letterlijk geciteerd.

## Oefenen

{{ exercises: 25-023, 25-024, 25-041 }}
