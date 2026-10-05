# Van "ding" naar x

De letters waarmee jij in deze module rekent, hebben een lange voorgeschiedenis. Het idee om met een onbekende te rekenen is minstens vierduizend jaar oud: Babylonische kleitabletten en Egyptische papyri (module 4) bevatten al vraagstukken met een onbekende hoeveelheid. Maar de **taal** waarin we dat doen, de expressies met letters, is pas in de zestiende en zeventiende eeuw tot stand gekomen. Dit intermezzo volgt die weg langs vier tradities: Bagdad, Alexandrië, India en Frankrijk.

## Bagdad en het Huis van de Wijsheid

In 762 stichtte de Abbasidische kalief al-Mansur een nieuwe hoofdstad aan de Tigris: Bagdad. Binnen enkele generaties groeide de stad uit tot een van de grootste en rijkste steden ter wereld, op het kruispunt van handelsroutes tussen Perzië, India, Byzantium en Arabië. Onder kalief **al-Ma'mun**, die regeerde van 813 tot 833, bloeide er een ambitieus vertaalprogramma: Griekse, Perzische en Indiase werken over wiskunde, sterrenkunde, geneeskunde en filosofie werden in het Arabisch vertaald.

Het centrum daarvan staat bekend als het **Huis van de Wijsheid** (*Bayt al-Ḥikma*). Over wat dat precies was, verschillen historici van mening. Volgens de traditionele voorstelling was het een academie met bibliotheek, waar geleerden vertaalden, onderzochten en discussieerden. De historicus Dimitri Gutas en anderen betogen dat het vooral een paleisbibliotheek was, en dat het beeld van een grote onderzoeksinstelling later is opgeblazen. Vast staat wel dat Bagdad in deze periode een uitzonderlijke concentratie van geleerden kende, en dat al-Khwarizmi tot die kring behoorde.

## Al-Khwarizmi en zijn algebra

Over het leven van **Muhammad ibn Musa al-Khwarizmi** is weinig met zekerheid bekend. Hij leefde ongeveer van 780 tot 850. Zijn naam wijst op een herkomst uit Khwarazm, een gebied rond de Amu Darja in het huidige Oezbekistan en Turkmenistan, maar ook dat is niet zeker. Hij werkte in Bagdad en schreef werken over rekenen met de Indiase cijfers, over sterrenkunde en over aardrijkskunde.

Zijn bekendste boek, geschreven omstreeks 820, heet voluit *al-Kitāb al-mukhtaṣar fī ḥisāb al-jabr wa-l-muqābala*: "Het beknopte boek over het rekenen door aanvullen en vereffenen". Uit het woord *al-jabr* in die titel is ons woord **algebra** ontstaan. Ook het woord **algoritme** gaat op al-Khwarizmi terug: de Latijnse vertaling van zijn rekenboek begint met *Dixit Algorizmi*, "Algorizmi heeft gezegd".

![Bladzijden uit een handschrift van al-Khwarizmi's algebra](/images/history/m15-al-jabr-handschrift.jpg "Twee bladzijden uit een handschrift van al-Khwarizmi's algebra (Bodleian Library, Oxford, MS. Huntington 214). Onderaan zie je de meetkundige figuren waarmee hij zijn oplossingsmethoden rechtvaardigt. Publiek domein, via Wikimedia Commons.")

Het boek was bedoeld voor de praktijk. Al-Khwarizmi schrijft in zijn inleiding dat het moet helpen bij erfenissen, testamenten, rechtszaken, handel, landmeten en het graven van kanalen. Een groot deel van het boek gaat over het verdelen van erfenissen volgens de islamitische erfrechtregels.

### Drie soorten getallen

Al-Khwarizmi onderscheidt drie soorten grootheden, en dat is al een vorm van "gelijksoortige termen":

- **dirham** (een munt): een gewoon getal, wat wij een constante noemen;
- **jidhr** (wortel), ook **shay'** ("ding") genoemd: de onbekende, ons $x$;
- **māl** (letterlijk "bezit" of "vermogen"): het kwadraat van de onbekende, ons $x^2$.

Met deze drie soorten beschrijft hij zes standaardvormen van vergelijkingen, zoals "vierkanten zijn gelijk aan wortels" ($ax^2 = bx$) of "een vierkant en wortels zijn gelijk aan getallen" ($x^2 + bx = c$). Hij behandelt ze apart, omdat hij geen negatieve getallen en geen nul als coëfficiënt gebruikt: elke vorm heeft alleen positieve termen.

### Een vierkant en tien wortels

Het bekendste voorbeeld uit het boek is het probleem uit de introductie van deze module: *een vierkant en tien wortels zijn gelijk aan negenendertig dirham*, in onze notatie $x^2 + 10x = 39$. Al-Khwarizmi geeft eerst een recept in woorden: halveer het aantal wortels (5), vermenigvuldig dat met zichzelf (25), tel het op bij 39 (64), neem de wortel (8) en trek de helft van het aantal wortels ervan af ($8 - 5 = 3$). De wortel is 3.

Daarna rechtvaardigt hij dat recept met een figuur, en die figuur is precies het rechthoekmodel uit les 5. Teken een vierkant met zijde $x$; de oppervlakte is $x^2$. Leg langs twee zijden een rechthoek van $x$ bij 5; samen zijn die $10x$. De hele figuur heeft oppervlakte $x^2 + 10x = 39$. Er ontbreekt nog een hoekje van 5 bij 5 om er een groot vierkant van te maken. Vul je dat aan, dan heeft het grote vierkant oppervlakte $39 + 25 = 64$, dus zijde 8. Die zijde is $x + 5$, dus $x = 3$.

In onze symbolen is dat de omzetting $x^2 + 10x + 25 = (x + 5)^2$: haakjes wegwerken, maar dan andersom gelezen. In module 21 kom je deze methode, **kwadraatafsplitsen**, opnieuw tegen.

### Wat betekenen *al-jabr* en *al-muqābala*?

De twee woorden in de titel zijn namen van twee bewerkingen op vergelijkingen.

- **Al-jabr** betekent "herstel" of "aanvullen" (het woord werd ook gebruikt voor het zetten van een gebroken bot). Een term die wordt afgetrokken, wordt als een tekort gezien. Dat tekort "herstel" je door dezelfde hoeveelheid aan beide kanten toe te voegen. Zo wordt $x^2 = 40x - 4x^2$ na aanvullen met $4x^2$ aan beide kanten: $5x^2 = 40x$.
- **Al-muqābala** betekent "tegenover elkaar stellen" of "vereffenen". Staan aan beide kanten gelijksoortige termen, dan haal je het gemeenschappelijke deel aan beide kanten weg. Zo wordt $x^2 + 5 = 40x + 4x^2$ na vereffenen: $5 = 40x + 3x^2$.

Je ziet dat beide bewerkingen draaien om **gelijksoortige termen**: al-Khwarizmi neemt dirhams met dirhams samen, wortels met wortels, vierkanten met vierkanten. Dat is precies wat je in les 4 deed. In module 16 worden deze twee bewerkingen de kern van de balansmethode.

### Alles in woorden

Al-Khwarizmi gebruikte **geen symbolen**. Ook de getallen staan in de tekst doorgaans voluit in woorden. Een berekening als $(10 - x)(10 - x)$ beschrijft hij als "tien min een ding, vermenigvuldigd met tien min een ding". Dat is retorische algebra in zuivere vorm: elke stap is een zin. Toch zijn de redeneringen streng en algemeen; de methode was er al, de notatie nog niet.

Via het Latijn bereikte het boek Europa. **Robert van Chester** vertaalde het in 1145 als *Liber algebrae et almucabola*; rond 1170 volgde een vertaling door Gerard van Cremona. Het Arabische *shay'* ("ding") werd in het Latijn *res* en in het Italiaans *cosa*. Rekenmeesters in Duitsland noemden de algebra daarom *die Coss*, en in Engeland sprak men van *the cossike arte*. Zelfs toen de letter $x$ al bestond, bleef het onbekende in veel boeken nog lang "het ding" heten.

## Alexandrië: de afkortingen van Diophantus

Eeuwen vóór al-Khwarizmi werkte in Alexandrië de Griekse wiskundige **Diophantus**. Wanneer precies, is onzeker: zijn werk moet geschreven zijn tussen ongeveer 150 v.Chr. en 350 n.Chr. De meeste historici houden het op de derde eeuw na Chr., rond 250, maar sommigen denken aan een vroegere periode.

Zijn hoofdwerk, de *Arithmetica*, telde dertien boeken. Daarvan zijn er zes in het Grieks bewaard gebleven. In 1968 werd een Arabisch handschrift ontdekt dat vier andere boeken lijkt te bevatten, in een vertaling van Qusta ibn Luqa uit de negende eeuw. De *Arithmetica* is een verzameling van honderden vraagstukken, zoals "vind twee getallen waarvan de som en de som van de kwadraten gegeven zijn".

Het bijzondere van Diophantus is zijn notatie. Hij was, voor zover bekend, de eerste die **vaste afkortingen** gebruikte voor de onbekende en haar machten. Dat is de gesyncopeerde fase uit de introductie:

| Diophantus | Griekse naam | Betekenis | Nu |
|---|---|---|---|
| $\varsigma$ | *arithmos* (getal) | de onbekende | $x$ |
| $\Delta^{Y}$ | *dynamis* (macht) | het kwadraat | $x^2$ |
| $K^{Y}$ | *kubos* (kubus) | de derde macht | $x^3$ |
| $\mathring{M}$ | *monas* (eenheid) | losse eenheden | constante |
| $\pitchfork$ | | trek af wat volgt | $-$ |

De coëfficiënt schreef hij **na** het symbool, met Griekse cijferletters. Alle termen die afgetrokken moesten worden, zette hij samen achter het aftrekteken. Wat wij schrijven als $x^3 + 8x - 5x^2 - 1$, noteerde hij in zijn stijl (met onze cijfers) als $K^{Y}\,1\;\varsigma\,8\;\pitchfork\;\Delta^{Y}\,5\;\mathring{M}\,1$: eerst alles wat erbij komt, dan het aftrekteken, dan alles wat eraf gaat.

![Eerste bladzijde van Diophantus' Arithmetica](/images/history/m15-diophantus-1621.jpg "De eerste bladzijde van boek I van de Arithmetica in de uitgave van Claude-Gaspard Bachet de Méziriac (Parijs, 1621), met de Latijnse vertaling links en de Griekse tekst rechts. Pierre de Fermat schreef in de marge van zijn exemplaar van deze uitgave zijn beroemde 'laatste stelling'. Publiek domein, via Wikimedia Commons.")

Diophantus had echter maar één symbool voor een onbekende. Had een probleem twee onbekenden, dan moest hij de tweede in woorden beschrijven of slim uitdrukken in de eerste. En hij had geen letters voor **bekende** maar willekeurige getallen: elk vraagstuk ging over concrete getallen. Algemene regels als $a(b + c) = ab + ac$ kon hij dus niet opschrijven.

{{ exercise: 15-040 }}

## India: kleuren als onbekenden

In India schreef **Brahmagupta** in 628 de *Brāhmasphuṭasiddhānta*, een werk over sterrenkunde met uitgebreide hoofdstukken over rekenen en algebra. Je kent hem uit module 13: hij formuleerde rekenregels voor "bezittingen" en "schulden", onze positieve en negatieve getallen, en voor nul.

In de Indiase algebra kregen onbekenden namen. De eerste onbekende heette *yāvattāvat*, "zoveel als": een plaatsvervanger voor een getal waarvan je nog niet weet hoe groot het is. Waren er meer onbekenden, dan gebruikte men **kleurnamen**, zoals *kālaka* (zwart) en *nīlaka* (blauw). Die werden afgekort tot hun eerste lettergreep: *yā*, *kā*, *nī*. Dat deze afspraak al bij Brahmagupta gold, weten we onder meer uit de commentator Pṛthūdakasvāmī (negende eeuw), die bij Brahmagupta's tekst uitlegt dat je bij twee of meer onbekenden "kleuren zoals yāvattāvat" moet aannemen. Met meerdere benoemde onbekenden kon de Indiase traditie vraagstukken met verschillende onbekenden tegelijk aan, iets waar Diophantus moeite mee had.

## Frankrijk: letters voor alles

De laatste stap zette de Franse jurist **François Viète** (1540–1603). Hij werkte als adviseur aan het Franse hof en ontcijferde voor koning Hendrik IV onderschepte Spaanse geheime brieven. In 1591 publiceerde hij *In artem analyticem isagoge* ("Inleiding tot de analytische kunst"). Daarin deed hij iets wat niemand vóór hem systematisch had gedaan: hij gebruikte letters niet alleen voor **onbekende** grootheden, maar ook voor **bekende** grootheden. Klinkers (A, E, ...) stonden voor onbekenden, medeklinkers (B, C, D, ...) voor bekende getallen.

Dat lijkt een kleine stap, maar het veranderde alles. Met een letter voor een bekend getal kun je niet één vraagstuk oplossen, maar een hele familie tegelijk: de oplossing geldt voor elke waarde van die letter. Dat zijn de **parameters** uit les 2. Viète noemde dit rekenen met soorten (*logistica speciosa*), tegenover het rekenen met getallen (*logistica numerosa*).

In 1637 publiceerde **René Descartes** *La Géométrie*, als bijlage bij zijn *Discours de la méthode*. Hij nam de letters van Viète over, maar koos de gewoonte die wij nog steeds volgen: de laatste letters van het alfabet ($x$, $y$, $z$) voor onbekenden, de eerste letters ($a$, $b$, $c$) voor bekende grootheden. Ook de notatie met een klein getal rechtsboven voor machten, zoals $a^3$, komt via hem in algemeen gebruik; voor het kwadraat schreef hij vaak nog $aa$.

![Een bladzijde uit Descartes' La Géométrie](/images/history/m15-descartes-geometrie.jpg "Descartes, La Géométrie (1637), p. 299. Hij noemt lijnstukken a en b en schrijft a + b, a − b, ab, aa of a², a³. Het gelijkteken van Recorde gebruikte hij nog niet. Publiek domein, via Wikimedia Commons.")

Ook andere tekens zijn in deze periode ontstaan. De Welshe wiskundige Robert Recorde introduceerde in 1557, in *The Whetstone of Witte*, het gelijkteken $=$: twee evenwijdige lijnen van gelijke lengte, "omdat geen twee dingen meer gelijk kunnen zijn". Rond 1640 lag de symbolische taal grotendeels vast. Een moderne lezer kan een bladzijde van Descartes, na wat wennen, gewoon volgen.

## Methode en notatie

Wat leer je hieruit? Ten eerste dat de **methode** vaak ouder is dan de **notatie**. Al-Khwarizmi kon kwadratische problemen algemeen oplossen zonder één symbool. Ten tweede dat een goede notatie het denken wel degelijk verandert. Met letters voor bekende grootheden kun je een algemene eigenschap als $a(b + c) = ab + ac$ in één regel opschrijven en bewijzen, en hoef je haar niet voor elk drietal getallen opnieuw te formuleren. Ten derde dat de geschiedenis geen rechte lijn is: Diophantus gebruikte afkortingen eeuwen vóór al-Khwarizmi, die weer in woorden schreef, en Indiase wiskundigen hadden al namen voor meerdere onbekenden toen dat in Europa nog niet gebruikelijk was.

:::question Eén voorbeeld of een algemene regel?
Bij $x = 2$ zijn $x^2$ en $2x$ beide 4. Bewijst dat dat $x^2 = 2x$ voor alle $x$? Kies nog een waarde om je antwoord te onderzoeken. En wat zou al-Khwarizmi zeggen: is een *māl* hetzelfde als twee *wortels*?
:::

{{ exercises: 15-041, 15-026 }}

## Bronnen

- MacTutor History of Mathematics, *Abu Ja'far Muhammad ibn Musa Al-Khwarizmi*: https://mathshistory.st-andrews.ac.uk/Biographies/Al-Khwarizmi/
- Wikipedia (EN), *Al-Jabr* (titel, datering, betekenis van al-jabr en al-muqabala, vertaling door Robert van Chester): https://en.wikipedia.org/wiki/Al-Jabr
- Wikipedia (EN), *House of Wisdom* (ontstaan en het debat over de aard van de instelling): https://en.wikipedia.org/wiki/House_of_Wisdom
- Wikipedia (EN), *Cossist* (shay', res, cosa en de Coss): https://en.wikipedia.org/wiki/Cossist
- MacTutor, Dictionary of Scientific Biography, *Al-Khwarizmi* (citaat uit de inleiding over erfenissen, handel, landmeten en kanalen): https://mathshistory.st-andrews.ac.uk/DSB/Al-Khwarizmi.pdf
- J. Høyrup, *Hesitating progress* (over het retorische karakter van al-Khwarizmi's algebra en de vertaling van Gerard van Cremona, ca. 1170): https://rucforsk.ruc.dk/ws/files/3807757/Hesitating_progress.pdf
- MacTutor, *Diophantus of Alexandria*: https://mathshistory.st-andrews.ac.uk/Biographies/Diophantus/
- Wikipedia (EN), *History of algebra* (retorische, gesyncopeerde en symbolische algebra; de symbolen van Diophantus): https://en.wikipedia.org/wiki/History_of_algebra
- J. Høyrup, *Embedding: Another case of stumbling progress* (kritiek op Nesselmanns driedeling, 2015): https://rucforsk.ruc.dk/ws/portalfiles/portal/56748960/Hoyrup_2015_Embedding_Another_case_of_stumbling_progress_Preprint_S.pdf
- MacTutor, *Brahmagupta*: https://mathshistory.st-andrews.ac.uk/Biographies/Brahmagupta/
- Wikipedia (EN), *Brahmagupta*: https://en.wikipedia.org/wiki/Brahmagupta
- Wisdom Library, *Yavattavat* (kleurnamen voor onbekenden; citaat van Pṛthūdakasvāmī): https://de.wisdomlib.org/definition/yavattavat
- MacTutor, *François Viète*: https://mathshistory.st-andrews.ac.uk/Biographies/Viete/
- Wikipedia (EN), *Variable (mathematics)* (Viète en Descartes; variabele, onbekende en parameter): https://en.wikipedia.org/wiki/Variable_(mathematics)
- Wikipedia (EN), *Equals sign* (Recorde, 1557): https://en.wikipedia.org/wiki/Equals_sign
- Afbeeldingen via Wikimedia Commons (alle publiek domein): *Bodleian MS. Huntington 214 roll332 frame36.jpg*: https://commons.wikimedia.org/wiki/File:Bodleian_MS._Huntington_214_roll332_frame36.jpg; *Diophantus title I 1621.jpg*: https://commons.wikimedia.org/wiki/File:Diophantus_title_I_1621.jpg; *Page9-Descartes La Géométrie.jpg*: https://commons.wikimedia.org/wiki/File:Page9-Descartes_La_G%C3%A9om%C3%A9trie.jpg
