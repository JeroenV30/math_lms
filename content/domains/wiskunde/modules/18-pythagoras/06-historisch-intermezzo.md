# Drietallen en oude bronnen

Je hebt gezien dat de driehoeken met zijden 3, 4, 5 en 5, 12, 13 en 8, 15, 17 steeds netjes uitkomen. Zulke getallen zijn heel bijzonder, en juist omdat ze zo handig zijn, vind je ze in oude teksten overal ter wereld terug. In deze les kijk je eerst naar de getallen zelf, en daarna naar wat oude bronnen ons werkelijk vertellen. Dat laatste vraagt om voorzichtigheid, want over de herkomst van de stelling is veel verteld wat niet te controleren is.

## Pythagoreïsche drietallen

Een **pythagoreïsch drietal** bestaat uit drie positieve gehele getallen $(a, b, c)$ met $a^2 + b^2 = c^2$. De bekendste zijn 3-4-5, 5-12-13, 8-15-17 en 7-24-25. Elk drietal hoort bij een rechthoekige driehoek met gehele zijden.

Je kunt uit één drietal meteen een oneindig aantal nieuwe maken. Als $a^2 + b^2 = c^2$ en je vermenigvuldigt alle zijden met dezelfde factor $k$, dan geldt $(ka)^2 + (kb)^2 = k^2(a^2 + b^2) = k^2 c^2 = (kc)^2$. Zo is 6-8-10 het dubbele van 3-4-5 en 9-12-15 het drievoud. Zulke driehoeken hebben dezelfde vorm, alleen een andere schaal. Een drietal dat je niet kunt verkleinen, omdat de drie getallen geen gemeenschappelijke deler hebben, heet **primitief**. 3-4-5 is primitief, 6-8-10 niet.

{{ exercise: 18-024 }}

Zijn er veel primitieve drietallen, en kun je ze systematisch vinden? Ja. Neem twee gehele getallen $m > n > 0$ en stel

$$
a = m^2 - n^2, \qquad b = 2mn, \qquad c = m^2 + n^2.
$$

Dan geldt altijd $a^2 + b^2 = c^2$. Dat controleer je door uit te werken:

$$
(m^2 - n^2)^2 + (2mn)^2 = m^4 - 2m^2n^2 + n^4 + 4m^2n^2 = m^4 + 2m^2n^2 + n^4 = (m^2 + n^2)^2.
$$

Met $m = 2$ en $n = 1$ krijg je $a = 3$, $b = 4$, $c = 5$. Met $m = 3$ en $n = 2$ krijg je 5-12-13, met $m = 4$ en $n = 1$ krijg je 15-8-17 en met $m = 5$ en $n = 2$ het drietal 21-20-29. Probeer $m = 3$ en $n = 1$: je krijgt 8-6-10, dat niet primitief is. Het blijkt dat je *alle* primitieve drietallen krijgt als $m$ en $n$ geen gemeenschappelijke deler hebben en één van de twee even is. Dat bewijs gaat boven deze module uit, maar de formule zelf kun je gewoon controleren, en dat heb je nu gedaan.

:::example Een drietal maken
Kies $m = 4$ en $n = 3$. Dan is $a = 16 - 9 = 7$, $b = 2 \cdot 4 \cdot 3 = 24$ en $c = 16 + 9 = 25$. Controle: $49 + 576 = 625 = 25^2$. Je hebt het drietal 7-24-25 gemaakt, dat in les 4 al voorbijkwam.
:::

{{ exercise: 18-025 }}

## Wat de bronnen laten zien

De naam 'stelling van Pythagoras' suggereert dat Pythagoras de stelling heeft ontdekt. Dat is lang niet zeker. De bronnen laten een veel ruimer beeld zien: in verschillende culturen werd de relatie tussen de zijden van een rechthoekige driehoek gekend en gebruikt, soms eeuwen voor de Griekse wiskundigen. Wat die bronnen precies zeggen, en wat ze niet zeggen, verdient aandacht. Hieronder zie je ze op volgorde.

### Mesopotamië: kleitabletten

Uit het Oudbabylonische tijdperk, grofweg 1800 tot 1600 v.Chr., zijn duizenden kleitabletten bewaard met rekenwerk. Een paar ervan zijn relevant voor deze module.

**YBC 7289.** Dit kleine ronde tablet uit de Yale Babylonian Collection, waarschijnlijk een leerlingenoefening, toont een vierkant met twee diagonalen. Langs een zijde staat het getal 30. Op de diagonaal staan twee getallen in het zestigtallig stelsel: 1;24,51,10 en 42;25,35. Het eerste getal is, in ons tientallig stelsel, ongeveer

$$
1 + \tfrac{24}{60} + \tfrac{51}{3600} + \tfrac{10}{216000} \approx 1{,}4142130,
$$

en dat is een benadering van $\sqrt{2}$ die op ongeveer zes decimalen klopt. Het tweede getal is ongeveer $30 \times 1{,}4142 \approx 42{,}426$: de lengte van de diagonaal van een vierkant met zijde 30. De schrijver wist dus dat de diagonaal van een vierkant gelijk is aan de zijde maal ongeveer 1,414. Dat is een bijzonder geval van de stelling: bij $a = b$ is $c^2 = 2a^2$, dus $c = a\sqrt{2}$.

![Het kleitablet YBC 7289](/images/history/m18-ybc-7289.jpg "Kleitablet YBC 7289, voor- en achterkant. Yale Babylonian Collection. Foto: A. Urcia, Yale Peabody Museum of Natural History. CC0, via Wikimedia Commons.")

**Plimpton 322.** Het tablet Plimpton 322 (Columbia University, ca. 1800 v.Chr.) is beroemd geworden. Het is beschadigd en bevat een tabel met vier kolommen en vijftien rijen getallen in zestigtallige notatie. In 1945 wezen Otto Neugebauer en Abraham Sachs erop dat de getallen in de tabel samenhangen met pythagoreïsche drietallen. De eerste rij komt overeen met het drietal (119, 120, 169), want $119^2 + 120^2 = 14\,161 + 14\,400 = 28\,561 = 169^2$. Voor de rest is het historisch beeld minder eenduidig. Sommige onderzoekers zien in het tablet een soort tabel voor rechthoekige driehoeken; anderen, onder wie Eleanor Robson, betogen dat het een leraarslijst is voor het opstellen van rekenopgaven. Het is verstandig het tablet te zien als bewijs dat de Babyloniërs gehele getallen met deze eigenschap konden vinden, en niet als bewijs hoe ze de getallen gebruikten. Dat verschil is belangrijk: een rekenkundige relatie die je kunt controleren is iets anders dan een verhaal over hoe de makers haar bedoelden.

:::history Een balk tegen een muur
Volgens MacTutor bestaat er een Oudbabylonische tekst waarin een balk van lengte 30 rechtop tegen een muur staat. Zakt de bovenkant 6 omlaag, hoe ver schuift dan de voet van de muur af? Het antwoord in de tekst is 18. Dat is dezelfde som als in oefening 18-039: de balk is een schuine zijde van 30, de hoogte is nu $30 - 6 = 24$ en de afstand is $\sqrt{30^2 - 24^2} = 18$. De tekst laat zien dat de rekenmethode niet beperkt bleef tot driehoeken met een tekening.
:::

### India: de Sulbasutra's

De Sulbasutra's (*sulba* betekent 'touw') zijn Indiase handleidingen voor het uitzetten van altaren, zo'n 800 tot 500 v.Chr., al is de precieze datering onzeker. In de Baudhayana Sulbasutra staat een regel die zegt dat het koord langs de diagonaal van een rechthoek een oppervlak maakt dat gelijk is aan de oppervlakten die de koorden langs de twee zijden samen maken. Dat is de stelling, in praktische vorm: het gaat over koorden en oppervlakten. De tekst noemt ook drietallen als 3-4-5 en 5-12-13, en geeft een benadering van $\sqrt{2}$:

$$
1 + \tfrac{1}{3} + \tfrac{1}{3 \cdot 4} - \tfrac{1}{3 \cdot 4 \cdot 34} = \tfrac{577}{408} \approx 1{,}414216.
$$

Ook dit past bij de bouwpraktijk: een vierkant altaar dat in een andere vorm herbouwd moet worden, vraagt om diagonalen en oppervlakten.

### China: gougu

In China heet de stelling de *gougu*-stelling, naar de namen van de twee rechthoekszijden: *gou* en *gu*, terwijl de schuine zijde *xian* heet. De astronomische tekst *Zhou Bi Suan Jing* bevat een gesprek tussen twee personen waarin een driehoek met zijden 3, 4 en 5 wordt behandeld. De tekst is in de huidige vorm waarschijnlijk uit rond de eerste eeuw v.Chr. of eerder, en bevat mogelijk ouder materiaal, maar de precieze datering is onzeker. In de derde eeuw n.Chr. schreef Zhao Shuang er een commentaar bij met het diagram dat je in les 4 zag: een vierkant op de schuine zijde opgebouwd uit vier driehoeken en een klein vierkant.

De *Negen Hoofdstukken over de Wiskundige Kunst* wijden een heel hoofdstuk aan rechthoekige driehoeken. Een bekend vraagstuk daaruit gaat over een bamboestok.

:::example De gebroken bamboe
Een bamboestok van 10 eenheden hoog breekt ergens onderweg. De top raakt de grond op 3 eenheden van de voet. Hoe hoog zit de breuk?

Noem de hoogte van de breuk $x$. Het bovenste stuk heeft lengte $10 - x$ en is de schuine zijde van een rechthoekige driehoek met rechthoekszijden $x$ en 3. Dus:

$$
x^2 + 3^2 = (10 - x)^2 \quad\Longrightarrow\quad x^2 + 9 = 100 - 20x + x^2 \quad\Longrightarrow\quad 20x = 91.
$$

Dus $x = 4{,}55$. De breuk zit op 4,55 eenheden hoog en het gebroken stuk is $10 - 4{,}55 = 5{,}45$ lang. Controle: $4{,}55^2 + 9 = 20{,}7025 + 9 = 29{,}7025 = 5{,}45^2$.
:::

{{ exercise: 18-043 }}

### Griekenland: Pythagoras en Euclides

Pythagoras van Samos leefde ongeveer van 570 tot 495 v.Chr. en stichtte rond 530 v.Chr. in Croton, in Zuid-Italië, een gemeenschap die getallen en verhoudingen tot de kern van het denken maakte. Van Pythagoras zelf is geen enkele tekst bewaard, en waarschijnlijk heeft hij niets opgeschreven. Alles wat we van hem weten komt uit bronnen die eeuwen later zijn geschreven, soms uit een traditie die de gemeenschap als geheel eert. Daardoor is het niet vast te stellen welke wiskunde van hemzelf was, en welke van zijn volgelingen of van latere generaties die zijn naam eerden.

Dat hij de stelling als eerste bewees, is een overlevering die pas eeuwen later is opgeschreven. Er bestaat bijvoorbeeld een verhaal dat hij een offer bracht uit dankbaarheid voor de ontdekking, maar dat verhaal is niet goed gedocumenteerd, en het is zelfs onduidelijk welke stelling ermee bedoeld werd. Wat we wel met zekerheid weten: rond 300 v.Chr. staat de stelling met een bewijs in de *Elementen* van Euclides (I.47), samen met haar omkering (I.48). De latere Griekse commentator Proclus schreef dat Euclides dat bewijs zelf had bedacht en dat de stelling traditioneel aan Pythagoras werd toegeschreven.

Er is nog een verband dat de pythagoreeërs bekend maakt. De diagonaal van een vierkant met zijde 1 is $\sqrt{2}$, en dat getal is niet als breuk van twee gehele getallen te schrijven. De stelling zelf leidt hier naar toe: je kunt gewoon een vierkant tekenen waarvan zijde en diagonaal geen gemeenschappelijke maat hebben. De ontdekking van dit 'onmeetbare' wordt in de Griekse traditie aan de kring rond Pythagoras toegeschreven, maar over wie het deed en wanneer is weinig met zekerheid te zeggen.

## Wat we weten en niet weten

Een eerlijke samenvatting: de relatie $a^2 + b^2 = c^2$ was ruim voor Pythagoras bekend en werd in Mesopotamië, India en China gebruikt of verwoord. Of die culturen er een algemeen bewijs voor hadden, is niet duidelijk; in de oudste teksten staan vooral rekenregels en voorbeelden. Het eerste bewijs dat in een bewaard gebleven tekst staat, is dat van Euclides. Over Pythagoras zelf weten we weinig, en de naam van de stelling zegt meer over de latere Griekse traditie dan over de oorsprong. Dat is geen reden om de naam te schrappen: namen van stellingen zijn conventies. Maar het is wel een reden om bescheiden te zijn over wie wat uitvond.

## Bronnen

- MacTutor, [Pythagoras's theorem in Babylonian mathematics](https://mathshistory.st-andrews.ac.uk/HistTopics/Babylonian_Pythagoras/).
- MacTutor, [Pythagoras of Samos](https://mathshistory.st-andrews.ac.uk/Biographies/Pythagoras/).
- MacTutor, [Baudhayana](https://mathshistory.st-andrews.ac.uk/Biographies/Baudhayana/).
- MacTutor, [Euclid of Alexandria](https://mathshistory.st-andrews.ac.uk/Biographies/Euclid/).
- Wikipedia, [YBC 7289](https://en.wikipedia.org/wiki/YBC_7289).
- Wikipedia, [Plimpton 322](https://en.wikipedia.org/wiki/Plimpton_322).
- Wikipedia, [Zhoubi Suanjing](https://en.wikipedia.org/wiki/Zhoubi_Suanjing).
- Wikipedia, [Pythagorean theorem](https://en.wikipedia.org/wiki/Pythagorean_theorem).
