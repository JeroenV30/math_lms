# Napier en rekenen met tabellen

:::question Hoeveel werk is vermenigvuldigen?
Stel dat je $4\,827 \times 3\,914$ moet berekenen, en dat je dat vandaag nog zonder rekenmachine moet doen. Hoeveel losse deelberekeningen zijn nodig als je het schriftelijk doet? En stel nu dat je honderden van zulke vermenigvuldigingen moet doen, voor elke planeetpositie opnieuw, en dat een fout in het vierde cijfer elke latere stap bederft. Wat zou je dan bereid zijn te doen om het werk te verkorten?
:::

Wat mensen daarop in het begin van de 17e eeuw antwoordden, is het onderwerp van deze les. Het is het verhaal van een idee dat bij een Schotse landheer begon, door een Londense hoogleraar en een Zwitserse instrumentmaker werd uitgewerkt en uiteindelijk drie eeuwen lang elke ingenieur en sterrenkundige in zijn zak had.

## John Napier en de Descriptio (1614)

:::history Edinburgh, 1614
John Napier, heer van Merchiston (1550 tot 1617), was geen universitair wiskundige maar een Schotse edelman die zijn landgoed beheerde, theologische geschriften schreef en jarenlang aan rekenmethoden werkte. In 1614 publiceerde hij in Edinburgh de *Mirifici Logarithmorum Canonis Descriptio*, de "beschrijving van de wonderbaarlijke regel van logaritmen". Het boekje bevat een uitleg in het Latijn en een tabel van de logaritmen van sinuswaarden, bedoeld voor sterrenkundigen en navigatoren die met hoeken moesten rekenen.
:::

Het woord *logaritme* is van Napier zelf. Het is samengesteld uit de Griekse woorden *logos* ("verhouding") en *arithmos* ("getal"): getallen die verhoudingen meten. Dat past bij wat hij deed. Wanneer je een getal telkens met dezelfde factor vermenigvuldigt, groeit het meetkundig; wanneer je telkens dezelfde stap optelt, groeit het rekenkundig. Een logaritme verbindt die twee rijen.

Napier bedacht zijn logaritmen niet als omgekeerde machten. Het begrip *exponent* in de zin van een gewoon getal in de macht, en het getal $e$, bestonden nog niet in de huidige vorm. Hij bedacht een **bewegingsbeeld**: twee punten die tegelijk vertrekken. Het ene punt beweegt over een lijn met constante snelheid; het andere beweegt over een andere lijn met een snelheid die evenredig is met de afstand die nog resteert tot het eindpunt. De afgelegde afstand van het eerste punt is dan de logaritme van de resterende afstand van het tweede. Op een rooster van gelijke tijdsstappen betekent dit dat de resterende afstand telkens met dezelfde factor wordt vermenigvuldigd, terwijl de afgelegde afstand van het eerste punt telkens met dezelfde stap toeneemt.

![Twee punten: de ene lijn met gelijke stappen, de andere waarop de resterende afstand telkens met dezelfde factor afneemt](/images/diagrams/m26-napier-punten.svg "Napiers bewegingsidee, schematisch vereenvoudigd — eigen tekening")

Dat is een gelijke sprong in tijd op de ene lijn tegenover een gelijke vermenigvuldiging op de andere lijn. Precies deze koppeling maakt de productregel mogelijk. Napiers logaritmen zagen er wel anders uit dan de onze: zijn getal 1 had niet de logaritme 0, en zijn tabel is niet te schrijven als $\log_g x$ met een gewoon grondtal $g$. Wie het naar moderne termen vertaalt, komt uit bij ongeveer $10^7 \ln\left(10^7 / x\right)$, een dalende functie met een grote schaalfactor. Dat is ongeveer, niet precies; zijn rekenwerk gebruikte waarden naast elkaar in plaats van een formule.

## Briggs: de gewone logaritme (1615 tot 1624)

:::history Londen en Edinburgh, 1615
Henry Briggs, hoogleraar meetkunde aan Gresham College in Londen, las Napiers boekje en schreef in 1615 dat Napier zijn hoofd en handen aan het werk had gezet met zijn nieuwe en bewonderenswaardige logaritmen. Hij reisde in de zomer van 1615 naar Edinburgh om Napier te ontmoeten. Samen kwamen zij tot de afspraak dat het handiger zou zijn als de logaritme van 1 gelijk was aan 0 en die van 10 aan 1.
:::

Dat is precies de **briggse** of gewone logaritme met grondtal 10 die je kent als de toets *log*. Het voordeel is groot: de logaritme van een getal met $n$ cijfers voor de komma ligt tussen $n - 1$ en $n$, en het deel achter de komma hangt alleen af van de cijfers, niet van de plaats van de komma. De tabel hoeft dus maar één keer te worden gemaakt voor getallen tussen 1 en 10.

Briggs publiceerde in 1617 zijn eerste duizend logaritmen. In 1624 verscheen zijn *Arithmetica Logarithmica*, met logaritmen van 1 tot 20.000 en van 90.000 tot 100.000, berekend tot veertien decimalen. De gaten in die tabel werden enkele jaren later aangevuld door Adriaan Vlacq uit Gouda. De bronnen noemen daarvoor 1627 of 1628; wij laten het jaartal hier open. Zo ontstond een tabel van de tiendelige logaritmen van alle getallen tot 100.000.

## Bürgi: een onafhankelijke ontdekking

:::history Praag, 1620
De Zwitserse instrumentmaker en wiskundige Jost Bürgi, die in Kassel en later in Praag werkte, had volgens de bronnen al rond 1588 een systeem van tabellen ontwikkeld voor eigen sterrenkundig rekenwerk. Hij werkte onafhankelijk van Napier en met een andere constructie. Zijn tabellen verschenen pas in 1620, in Praag, nadat Johannes Kepler hem had aangespoord ze te publiceren. Kepler schreef later dat Bürgi jaren voor Napier tot deze logaritmen was gekomen, maar dat hij te weinig bekendheid aan zijn vondst had gegeven.
:::

Het is niet ongewoon dat een idee dat in de lucht hangt op twee plaatsen tegelijk opduikt. Maar wie publiceert, schrijft de geschiedenis. Napier publiceerde zes jaar eerder; Bürgi bleef daarom in de schaduw en zijn naam blijft nu vooral bij vakhistorici bekend.

## Wat tabellen voor de sterrenkunde en zeevaart betekenden

Johannes Kepler, die de logaritmen met enthousiasme omarmde, gebruikte ze voor de berekening van zijn *Rudolfijnse tafels* (1627), een grote tabel van planeetposities. Voor navigatie waren logaritmische tabellen van sinus en tangens belangrijk, omdat op zee voortdurend met hoeken en afstanden moest worden gerekend. Een fout kon gevolgen hebben voor het koers- en positiebesef van een schip, en een tabel verminderde de kans op rekenfouten sterk. Tabelboekjes bleven tot in de jaren 1970 in gebruik, tot de elektronische rekenmachine ze verdrong.

:::example Rekenen met een tabel
Bereken $2 \times 3$ zoals een zeventiende-eeuwse rekenaar het deed, met logaritmen met grondtal 10.

**Stap 1.** Zoek op: $\log 2 \approx 0{,}30103$ en $\log 3 \approx 0{,}47712$.

**Stap 2.** Tel op: $0{,}30103 + 0{,}47712 = 0{,}77815$.

**Stap 3.** Zoek in de tabel het getal waarvan de logaritme $0{,}77815$ is. Dat is $6$.

**Controle.** $\log 6 \approx 0{,}77815$. Voor getallen die niet precies in de tabel staan, interpoleerde de rekenaar tussen twee regels, waardoor de nauwkeurigheid begrensd bleef.
:::

## Het idee in staal en hout: de rekenliniaal

Als een tabel logaritmen opzoekt en optelt, waarom zou je dan geen *liniaal* maken waarop optellen met afstanden gaat? Dat was de gedachte achter de **rekenliniaal**. Op een liniaal staan de getallen niet op gelijke afstand, maar zo dat de afstand tussen 1 en $x$ evenredig is met $\log x$. Twee van zulke linialen, naast elkaar verschuifbaar, tellen afstanden op, en daarmee vermenigvuldigen ze getallen.

![Een rekenliniaal: de 1 van de schuif staat boven de 2 van de liniaal; boven de 3 staat onderaan de 6](/images/diagrams/m26-rekenliniaal.svg "Rekenen met een rekenliniaal: 2 × 3 = 6 — eigen tekening")

Edmund Gunter tekende rond 1620 een logaritmische schaal op een liniaal, die je met een passer kon aflezen. William Oughtred, een Engelse predikant en wiskundige, stelde voor twee van zulke schalen tegen elkaar te laten schuiven, zodat de passer overbodig werd. Over de precieze data en over de prioriteit bestaat discussie: er wordt wisselend gesproken over ontwerpen vanaf ongeveer 1622 en over publicaties in 1630 en 1632, en een tijdgenoot, Richard Delamain, kwam met een eigen ronde uitvoering. Zeker is dat de rekenliniaal in de jaren 1620 en 1630 in Engeland ontstond en dat hij daarna ruim drie eeuwen onmisbaar bleef voor ingenieurs en natuurkundigen.

Het getal $x$ staat op afstand $L \cdot \log x$ van het begin, als $L$ de lengte van de schaal is tussen 1 en 10. Bij $L = 25$ cm staat de 2 op $25 \times 0{,}30103 \approx 7{,}53$ cm en de 3 op $25 \times 0{,}47712 \approx 11{,}93$ cm. Schuif je de 1 van de bovenste schaal naar de 2 van de onderste, dan staat de 3 van de bovenste schaal op $7{,}53 + 11{,}93 = 19{,}46$ cm, en op die plek staat op de onderste schaal de 6, want $25 \times \log 6 \approx 19{,}45$. Zo werd $2 \times 3 = 6$ een kwestie van het opschuiven van twee afstanden.

:::tip Waarom precies drie of vier cijfers?
Op een rekenliniaal lees je ongeveer drie cijfers nauwkeurig af. Dat was voor veel techniek voldoende, en het dwong de gebruiker om zelf de plaats van de komma te bepalen. Dat is dezelfde schatting die je ook nu nog moet maken om te zien of een antwoord zinnig is.
:::

{{ exercises: 26-022, 26-023, 26-040 }}

## Euler en het getal e

Napier en Briggs dachten nog niet aan $e$ als grondtal van een eigen familie van functies. Dat gebeurde in de 18e eeuw, vooral door Leonhard Euler. Hij gebruikte rond 1727 de letter $e$ voor het grondtal van de natuurlijke logaritmen, en in zijn *Introductio in analysin infinitorum* (1748) staat een systematische behandeling van exponentiële en logaritmische functies. Vanaf dat moment werd de logaritme niet langer gezien als een rekenhulpmiddel dat uit tabellen kwam, maar als de inverse van de exponentiële functie. Dat is de zienswijze van deze module.

:::summary Vijf stappen in een eeuw
1. **1614**: Napier publiceert de *Descriptio* met een tabel gebaseerd op een bewegingsbeeld.
2. **1615**: Briggs bezoekt Napier; samen kiezen ze voor logaritmen met $\log 1 = 0$ en $\log 10 = 1$.
3. **1617 en 1624**: Briggs publiceert eerste en uitgebreide tabellen van de gewone logaritme; Bürgi's onafhankelijke tabellen verschijnen in 1620.
4. **Jaren 1620 en 1630**: Gunter, Oughtred en anderen verbinden logaritmen met linialen: de rekenliniaal ontstaat.
5. **1727 en 1748**: Euler gebruikt $e$ en beschrijft de logaritme als inverse van de exponentiële functie.
:::

## Bronnen


- MacTutor, [John Napier](https://mathshistory.st-andrews.ac.uk/Biographies/Napier/): de *Descriptio* (1614), het bewegingsidee, de ontmoeting met Briggs in 1615 en de *Rabdologiae* (1617).
- MacTutor, [Henry Briggs](https://mathshistory.st-andrews.ac.uk/Biographies/Briggs/): de *Chilias prima* (1617) en de *Arithmetica Logarithmica* (1624).
- MacTutor, [Jost Bürgi](https://mathshistory.st-andrews.ac.uk/Biographies/Burgi/): zijn onafhankelijke logaritmen, circa 1588, en hun publicatie in 1620.
- MacTutor, [William Oughtred](https://mathshistory.st-andrews.ac.uk/Biographies/Oughtred/): Gunters schaal, Oughtreds rekenliniaal en het geschil met Delamain.
- MacTutor, [Leonhard Euler](https://mathshistory.st-andrews.ac.uk/Biographies/Euler/): de letter $e$ (1727) en de *Introductio* (1748).
- The Open University, [John Napier, sectie over Napier en Briggs](https://www.open.edu/openlearn/science-maths-technology/mathematics-statistics/john-napier/content-section-7): hun samenwerking en de keuze voor $\log 1 = 0$ en $\log 10 = 1$.
