# Van graanrantsoen tot priemgetal

Delen is waarschijnlijk zo oud als het beheren van voorraden. In dit intermezzo volg je de deling door drie culturen. In Mesopotamië en Egypte was delen vooral een administratief probleem: rantsoenen, lonen en voorraden. Bij de Grieken werd het een onderwerp van onderzoek op zichzelf: welke getallen laten zich delen, en welke niet?

## Mesopotamië: rantsoenen en omgekeerden

:::history Sumer en Babylonië, ca. 2600–1600 v.Chr.
De Sumerische steden werden bestuurd vanuit tempels en paleizen die grote hoeveelheden gerst, vis, wol en olie opsloegen en weer uitdeelden. Schrijvers hielden dat bij op kleitabletten. De opgave uit de introductie (een graanschuur verdeeld in rantsoenen van 7 sila) komt van zo'n tablet uit Šuruppak, uit de periode ca. 2600–2500 v.Chr.
:::

Uit latere administratieve teksten, vooral uit de zogenaamde Ur III-periode (ca. 2100–2000 v.Chr.), kennen onderzoekers het rantsoenstelsel vrij goed. Een volwassen arbeider kreeg vaak ongeveer 60 sila gerst per maand. Vrouwen kregen meestal minder (vaak 30 of 40 sila) en kinderen nog minder, afhankelijk van leeftijd en werk. De historicus I.J. Gelb beschreef dit stelsel al in 1965 in een bekend artikel. Wie zulke lijsten opstelt, moet voortdurend delen: hoeveel mensen kan een voorraad een maand voeden, en hoeveel blijft er over?

Een paar eeuwen later, in de Oudbabylonische tijd (ca. 2000–1600 v.Chr.), rekenden schrijvers in een volledig zestigtallig plaatswaardesysteem. Opvallend genoeg hadden ze geen staartdeling. Ze gebruikten een slimme omweg: delen door $b$ is hetzelfde als vermenigvuldigen met het **omgekeerde** $\frac{1}{b}$. Ze hadden daarvoor tabellen met omgekeerden. In het zestigtallig stelsel is $\frac{1}{2}$ gelijk aan 30 zestigste, $\frac{1}{3}$ is 20 zestigste, $\frac{1}{5}$ is 12 zestigste, enzovoort. Delen door 5 werd zo vermenigvuldigen met 12 (en de 'komma' één zestigtallige plaats verschuiven). Bijvoorbeeld $60 : 5$: reken $60 \times 12 = 720$, en 720 zestigsten zijn 12.

Maar dat werkt alleen voor delers die in 60 'opgaan', via de priemfactoren 2, 3 en 5. Voor $\frac{1}{7}$ bestaat geen eindige zestigtallige schrijfwijze, net zoals $\frac{1}{3} = 0{,}333\ldots$ in ons tientallig stelsel nooit ophoudt. In de reciprokentabellen ontbreekt 7 dan ook. Een schrijver noteerde bij zo'n geval zelfs een opmerking die onderzoekers vertalen als: er wordt een benadering gegeven, "omdat 7 niet deelt". Zonder het woord te kennen, liepen de Babyloniërs hier dus tegen priemfactoren aan.

## Egypte: delen door te verdubbelen

![Detail van de Rhind-papyrus met rijen hiëratisch schrift en rekentabellen](/images/history/m05-rhind-papyrus.jpg "Detail van de Rhind Mathematical Papyrus, ca. 1550 v.Chr. (British Museum, EA 10057). Schrijver: Ahmes. Foto: British Museum, publiek domein, via Wikimedia Commons.")

De **Rhind-papyrus** is een van de belangrijkste bronnen over de Egyptische wiskunde. De schrijver Ahmes (of Ahmose) vermeldt zelf dat hij de tekst kopieerde in het 33e regeringsjaar van koning Apophis, rond 1550 v.Chr., en dat hij een ouder origineel overschreef uit de tijd van koning Amenemhat III (12e dynastie, ongeveer 19e eeuw v.Chr.). De Schotse jurist en oudheidkundige Alexander Henry Rhind kocht de papyrus rond 1858 in Luxor (het oude Thebe). Het grootste deel ligt nu in het British Museum in Londen.

De Egyptenaren vermenigvuldigden door te **verdubbelen** (module 4). Ze deelden met dezelfde techniek, maar dan omgekeerd: in plaats van "deel 1.495 door 65" vroegen ze in feite *met hoeveel moet ik 65 vermenigvuldigen om 1.495 te krijgen?* Daartoe verdubbelden ze de deler steeds en zochten ze rijen uit die samen het deeltal opleverden.

| keer | 65 | gebruikt? |
|---|---|---|
| 1 | 65 | ✓ |
| 2 | 130 | ✓ |
| 4 | 260 | ✓ |
| 8 | 520 | |
| 16 | 1.040 | ✓ |

Kies de rijen waarvan de rechterkolom samen 1.495 maakt. Begin bij de grootste: $1.040$; dan blijft er $455$ over. 520 is te veel, 260 past (er blijft 195), 130 past (er blijft 65), en 65 past precies. Dus $1.040 + 260 + 130 + 65 = 1.495$, en dat zijn de rijen 16, 4, 2 en 1. Daarmee is $1.495 : 65 = 16 + 4 + 2 + 1 = 23$. Dit voorbeeld komt uit het overzicht van de Egyptische wiskunde in het MacTutor-archief. Het laat precies zien wat je in les 2 leerde: delen is vermenigvuldigen in omgekeerde richting.

Direct na de inleidende rekentabellen volgen zes opgaven waarin 1, 2, 6, 7, 8 en 9 broden over **tien mannen** worden verdeeld. Omdat bijvoorbeeld 7 broden niet in hele broden over 10 mannen te verdelen zijn, krijgt ieder een stuk brood, uitgedrukt in Egyptische stambreuken. Die terugkeer van brood naar breuken bewaren we voor module 7. Andere opgaven gaan over **ongelijke verdelingen**. In probleem 65 moeten 100 broden over tien mannen worden verdeeld, waarbij drie mannen (een schipper, een opzichter en een poortwachter) een dubbel deel krijgen en de andere zeven een enkel deel. Dat is een verdeling in een verhouding, precies zoals de erfenis met de verhouding $1 : 2$ in les 2.

:::tip Erfenis
Het verdelen van een erfenis bleef eeuwenlang een belangrijke toepassing van het rekenen. Al-Khwarizmi wijdde rond 820 in Bagdad het laatste deel van zijn beroemde boek over de algebra aan de ingewikkelde islamitische erfrechtregels. Voor de getallen in zulke verdelingen was nauwelijks meer nodig dan delen, verhoudingen en eenvoudige vergelijkingen.
:::

## Griekenland: Euclides en de theorie van de getallen

![Papyrusfragment met Griekse tekst en een meetkundige figuur uit de Elementen van Euclides](/images/history/m05-elementen-papyrus.jpg "Een van de oudste bewaarde fragmenten van Euclides' Elementen (P. Oxy. I 29, boek II, propositie 5), gevonden in Oxyrhynchus, Egypte; waarschijnlijk ca. 75–125 n.Chr. Penn Museum, Philadelphia (E 2748). Foto: University of Pennsylvania (OPenn), publiek domein, via Wikimedia Commons.")

Over het leven van **Euclides** weten we bijna niets. Hij werkte waarschijnlijk rond 300 v.Chr. in Alexandrië, de stad die kort daarvoor door Alexander de Grote was gesticht en een centrum van wetenschap werd. Zijn *Elementen*, dertien 'boeken', werden het invloedrijkste wiskundeboek uit de geschiedenis. Het meeste gaat over meetkunde, maar de boeken VII, VIII en IX gaan over getallen. Daarin staan onder meer:

- de definitie van een **priemgetal** als een getal dat "alleen door de eenheid gemeten wordt" (boek VII, definitie 11);
- het **algoritme van Euclides** voor de grootste gemene deler, door herhaald het kleinere getal van het grotere af te halen (boek VII, proposities 1 en 2);
- het feit dat elk samengesteld getal door een priemgetal gedeeld wordt (boek VII, propositie 31);
- het bewijs dat er **meer priemgetallen zijn dan elke gegeven hoeveelheid** (boek IX, propositie 20).

Dat Euclides deze resultaten allemaal zelf heeft ontdekt, is onwaarschijnlijk. Veel historici denken dat hij vooral oudere Griekse kennis verzamelde, ordende en van strakke bewijzen voorzag. Juist die strenge opbouw, van definities naar bewezen stellingen, maakte de *Elementen* tot het voorbeeld voor latere wiskunde.

Let ook op de manier waarop Euclides het oneindig veel zijn van de priemgetallen formuleert. Hij spreekt niet over 'oneindig', een begrip waar Griekse denkers voorzichtig mee waren. Hij zegt dat je bij elke eindige verzameling priemgetallen altijd nog een nieuw priemgetal kunt vinden. Het bewijs is in de kern ook geen bewijs "uit het ongerijmde", zoals moderne boeken het vaak navertellen (alleen één kleine tussenstap redeneert zo), maar laat rechtstreeks zien hoe je een nieuw priemgetal vindt.

## Eratosthenes: de 'Bèta' van Alexandrië

**Eratosthenes** werd rond 276 v.Chr. geboren in Cyrene (in het huidige Libië) en stierf rond 194 v.Chr. in Alexandrië. Hij was een veelzijdig geleerde: wiskundige, geograaf, astronoom, dichter en historicus. Rond 245–240 v.Chr. (de bronnen verschillen iets) werd hij hoofd van de beroemde bibliotheek van Alexandrië. Tijdgenoten gaven hem volgens de overlevering de bijnaam *Bèta*, de tweede letter van het Griekse alfabet: in elk vakgebied zou hij net niet de allerbeste zijn geweest. Dat klinkt als een belediging, maar het zegt vooral hoe breed hij werkte.

Eratosthenes is vooral beroemd om zijn schatting van de omtrek van de aarde, op basis van de schaduwlengte op het middaguur in Syene (het huidige Aswan) en Alexandrië. In de wiskunde leeft zijn naam voort in de **zeef van Eratosthenes**. Opvallend is dat we die methode niet uit een tekst van Eratosthenes zelf kennen. De oudst bekende beschrijving staat in de *Inleiding tot de rekenkunde* van **Nicomachus van Gerasa**, een Griekse auteur uit het begin van de 2e eeuw n.Chr., die de zeef aan Eratosthenes toeschrijft. Nicomachus werkt daarbij overigens alleen met de oneven getallen, iets anders dan in de moderne versie.

De zeef is meer dan een schooltrucje. Verfijnde versies ervan worden in de moderne getaltheorie nog altijd gebruikt, en computers zoeken er tot op vandaag priemgetallen mee.

## Bronnen

- K. Muroi, *Sexagesimal calculations in ancient Sumer* (arXiv, 2022/2023), over de tablet TSŠ 50: <https://arxiv.org/abs/2207.12102>
- CDLI, tablet TSŠ 50 (P010721): <https://cdli.earth/artifacts/10721>
- CDLI, tablet TSŠ 671 (P010882): <https://cdli.earth/artifacts/10882>
- MacTutor, *Babylonian mathematics* (delen via reciproken): <https://mathshistory.st-andrews.ac.uk/HistTopics/Babylonian_mathematics/>
- MacTutor, *Mathematics in Egyptian Papyri* (Egyptische deling): <https://mathshistory.st-andrews.ac.uk/HistTopics/Egyptian_papyri/>
- Wikipedia, *Rhind Mathematical Papyrus*: <https://en.wikipedia.org/wiki/Rhind_Mathematical_Papyrus>
- British Museum, Rhind Mathematical Papyrus (EA 10057): <https://www.britishmuseum.org/collection/object/Y_EA10057>
- I.J. Gelb, "The Ancient Mesopotamian Ration System", *Journal of Near Eastern Studies* 24 (1965), 230–243 (bibliografische gegevens via de Keilschriftbibliographie): <https://keibi.uni-tuebingen.de/Record/KEI00083657>
- K. Maekawa, "Rations, Wages and Economic Trends in the Ur III Period", *Altorientalische Forschungen* 16 (1989): <https://ocb.uni-tuebingen.de/Record/KEI00052601>
- MacTutor, biografie van al-Khwarizmi: <https://mathshistory.st-andrews.ac.uk/Biographies/Al-Khwarizmi/>
- MacTutor, biografie van Euclides: <https://mathshistory.st-andrews.ac.uk/Biographies/Euclid/>
- D.E. Joyce, Euclid's Elements, Book VII (definities en proposities): <https://mathcs.clarku.edu/~djoyce/java/elements/bookVII/bookVII.html>
- Wikipedia, *Euclid's theorem* (formulering en bewijsvorm van IX.20): <https://en.wikipedia.org/wiki/Euclid%27s_theorem>
- Wikipedia, *Papyrus Oxyrhynchus 29*: <https://en.wikipedia.org/wiki/Papyrus_Oxyrhynchus_29>
- MacTutor, biografie van Eratosthenes: <https://mathshistory.st-andrews.ac.uk/Biographies/Eratosthenes/>
- Encyclopaedia Britannica, *Eratosthenes*: <https://www.britannica.com/biography/Eratosthenes>
- Wikipedia, *Sieve of Eratosthenes* (Nicomachus als oudste bron): <https://en.wikipedia.org/wiki/Sieve_of_Eratosthenes>
