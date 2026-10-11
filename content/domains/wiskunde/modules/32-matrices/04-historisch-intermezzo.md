# Van rekenbord tot matrix

De geschiedenis van de matrix is ongewoon. De **rekenmethode** (vegen met een rechthoekig schema) is meer dan tweeduizend jaar oud. Het **begrip** matrix, als zelfstandig object waarmee je rekent, is pas zo'n honderdzeventig jaar oud. Daartussen ligt een lange periode waarin wiskundigen in China, Japan en Europa telkens opnieuw ontdekten dat de coëfficiënten van een stelsel zelf de sleutel tot de oplossing bevatten.

## 1. De Negen Hoofdstukken en het rekenbord

De *Jiuzhang suanshu*, de **Negen Hoofdstukken over de Wiskundige Kunst**, is het invloedrijkste wiskundeboek uit het oude China. Het is niet door één auteur geschreven. Waarschijnlijk is het in de loop van eeuwen gegroeid uit oudere teksten. Volgens de wiskundige **Liu Hui**, die in het jaar 263 een uitgebreid commentaar op het boek schreef, hebben de Han-geleerden Zhang Cang en Geng Shouchang het werk in de 2e en 1e eeuw v.Chr. bewerkt en aangevuld. De meeste historici plaatsen de uiteindelijke vorm ergens tussen ongeveer 200 v.Chr. en de 1e eeuw n.Chr. De titel zelf duikt met zekerheid op in een inscriptie op bronzen maten uit 179 n.Chr.

![Een bladzijde uit een editie van de Negen Hoofdstukken](/images/history/m32-negen-hoofdstukken.jpg "Begin van hoofdstuk 1 van de Negen Hoofdstukken in een editie uit 1820 (Jiuzhang suanshu xicao tushuo van Li Huang), met de namen van de commentatoren Liu Hui en Li Chunfeng. Via Wikimedia Commons, publiek domein.")

Het boek bestaat uit 246 problemen met antwoorden en rekenvoorschriften, verdeeld over negen hoofdstukken: landmeten, ruilhandel, verdelen, wortels trekken, inhoudsberekeningen, belastingen, en meer. **Hoofdstuk 8** heet *fangcheng*. Het bevat 18 problemen die neerkomen op stelsels lineaire vergelijkingen, met twee tot vijf onbekenden. Het graanprobleem uit de introductie is het eerste.

De rekenaars werkten op een **rekenbord** met **rekenstaafjes** (zie ook module 3). Elke voorwaarde werd als een **kolom** neergelegd: bovenaan het aantal bundels goed graan, daaronder middelmatig, dan slecht, en onderaan de opbrengst. De eerste voorwaarde kwam rechts, de volgende links daarvan. Op het bord lag dus de getransponeerde van onze aangevulde matrix.

Daarna volgde een vast voorschrift. Het werkte met hele kolommen, zoals wij met hele rijen werken, en het vermeed breuken zo lang mogelijk door kruislings te vermenigvuldigen. Voor het graanprobleem gaat dat zo. Noem de kolommen van rechts naar links $K_1 = (3, 2, 1 \mid 39)$, $K_2 = (2, 3, 1 \mid 34)$ en $K_3 = (1, 2, 3 \mid 26)$.

1. Vermenigvuldig $K_2$ met het bovenste getal van $K_1$ (dat is 3) en trek $K_1$ er zo vaak af tot bovenaan een 0 staat: $3K_2 - 2K_1 = (6 - 6,\; 9 - 4,\; 3 - 2 \mid 102 - 78) = (0,\; 5,\; 1 \mid 24)$.
2. Doe hetzelfde met $K_3$: $3K_3 - K_1 = (3 - 3,\; 6 - 2,\; 9 - 1 \mid 78 - 39) = (0,\; 4,\; 8 \mid 39)$.
3. Maak nu in de nieuwe derde kolom ook het tweede getal 0, met de nieuwe tweede kolom: $5 \cdot (0, 4, 8 \mid 39) - 4 \cdot (0, 5, 1 \mid 24) = (0,\; 0,\; 36 \mid 99)$.

De laatste kolom zegt: 36 bundels slecht graan leveren samen 99 *dou*. Pas nu wordt gedeeld: een bundel slecht graan levert $\frac{99}{36} = 2\tfrac{3}{4}$ *dou*. Daarna volgen de andere twee soorten door terug te rekenen, net als bij onze terugsubstitutie. Wie dit vergelijkt met les 4, ziet dezelfde methode: **elementaire operaties op de rijen (hier kolommen) van een rechthoekig schema, tot er een trapvorm ontstaat**.

{{ exercise: 32-030 }}

Bij dit wegwerken kunnen negatieve getallen ontstaan. De *Negen Hoofdstukken* bevat in hoofdstuk 8 daarom ook regels voor het optellen en aftrekken van positieve en negatieve getallen, eeuwen voordat negatieve getallen in Europa als volwaardige getallen werden geaccepteerd (zie module 13). Volgens het commentaar van Liu Hui werden staafjes van twee kleuren gebruikt, rood en zwart, om positieve en negatieve hoeveelheden uit elkaar te houden.

## 2. Determinanten in Japan en Europa

De volgende stap was de ontdekking dat je uit de coëfficiënten alléén kunt aflezen of een stelsel oplosbaar is. Die stap werd rond dezelfde tijd, onafhankelijk van elkaar, aan twee kanten van de wereld gezet.

![Seki Takakazu](/images/history/m32-seki-kowa.jpg "Seki Takakazu (Seki Kōwa), inkttekening uit de collectie van de familie Ishikawa, Ichinoseki City Museum. Via Wikimedia Commons, publiek domein.")

In Japan werkte **Seki Takakazu**, ook bekend als **Seki Kōwa**. Zijn geboortejaar is onzeker; bronnen noemen jaren tussen 1635 en 1643. Hij stierf in 1708 in Edo, het huidige Tokio. Seki was ambtenaar in dienst van een feodale heer en daarnaast de centrale figuur van een school van wiskundigen. Zijn methoden werden binnen die school grotendeels geheimgehouden, wat het moeilijk maakt om precies vast te stellen wat van hem zelf afkomstig is. In een manuscript uit **1683** (*Kaifukudai no hō*) beschreef hij uitdrukkingen die we nu determinanten noemen, als hulpmiddel om onbekenden uit stelsels vergelijkingen te elimineren. Hij gaf regels voor gevallen tot en met $5 \times 5$. In het manuscript zit voor het grootste geval nog een fout; in later werk staat een correcte algemene regel.

In Europa kwam **Gottfried Wilhelm Leibniz** (1646–1716), die je kent van de differentiaalrekening, tot vergelijkbare inzichten. Al in 1678 bedacht hij een slimme notatie: hij schreef de coëfficiënten van een stelsel niet als letters, maar als getallen van twee cijfers, zoals 10, 11, 12, 20, 21, 22. Het eerste cijfer gaf aan in welke vergelijking de coëfficiënt stond, het tweede bij welke onbekende hij hoorde. Dat is precies het idee achter onze notatie $a_{ij}$. In een brief aan de Franse wiskundige De l'Hôpital uit **1693** gaf hij met die notatie een voorwaarde voor wanneer drie vergelijkingen met twee onbekenden tegelijk kunnen gelden: een som van producten van coëfficiënten met afwisselende tekens moet 0 zijn. Dat is, in moderne taal, een $3 \times 3$-determinant die gelijk is aan 0. Leibniz' aantekeningen hierover werden pas in de 19e eeuw gepubliceerd, zodat ze op de ontwikkeling weinig invloed hadden.

De determinant werd in Europa algemeen bekend door de Zwitser **Gabriel Cramer**, die in 1750 een regel publiceerde voor het oplossen van $n$ vergelijkingen met $n$ onbekenden: de regel van Cramer uit les 5. Het woord *determinant* gebruikte **Gauss** in 1801, maar in een andere betekenis; de Franse wiskundige **Augustin-Louis Cauchy** gaf het in 1812 de betekenis die het nu heeft, en bewees onder meer dat $\det(AB) = \det A \cdot \det B$.

## 3. Gauss en de planetoïde Pallas

Op 1 januari 1801 ontdekte de Italiaanse astronoom Giuseppe Piazzi een nieuw hemellichaam, Ceres. Na enkele weken verdween het achter de zon, en niemand wist waar het weer zou opduiken. De jonge **Carl Friedrich Gauss** (1777–1855) berekende uit de weinige waarnemingen een baan, en Ceres werd eind 1801 op de voorspelde plaats teruggevonden. In 1802 ontdekte Heinrich Olbers een tweede planetoïde, **Pallas**.

Voor zulke baanberekeningen moest Gauss stelsels oplossen waarin meer waarnemingen dan onbekenden zitten, met kleine meetfouten. Zijn antwoord was de **kleinste-kwadratenmethode**, die hij in 1809 publiceerde in zijn boek over de beweging van hemellichamen (*Theoria motus*). Die methode leidt tot een lineair stelsel, de zogeheten normaalvergelijkingen. In een verhandeling over de baan van Pallas uit **1810** loste Gauss zo'n stelsel met zes onbekenden op door eliminatie, en hij voerde daarbij een handige notatie in om de tussenresultaten bij te houden.

Die notatie werd in de 19e eeuw overgenomen door landmeters en beroepsrekenaars, die met de hand grote kleinste-kwadratenproblemen oplosten. Zo raakte Gauss' naam aan de methode verbonden. Volgens historicus Joseph Grcar is de naam "Gauss-eliminatie" voor het gewone schoolalgoritme pas in de jaren 1950 gangbaar geworden, deels door verwarring over de geschiedenis. Gauss zelf noemde de methode "gewone eliminatie", en Isaac Newton had haar al rond 1670 in zijn aantekeningen beschreven (gepubliceerd in 1707 als *Arithmetica Universalis*). De methode is dus niet door Gauss uitgevonden, maar door hem en zijn navolgers wel tot een betrouwbaar rekeninstrument gemaakt.

## 4. Sylvester en Cayley: de matrix als object

Tot het midden van de 19e eeuw was een rechthoekig schema van getallen alleen een **hulpmiddel**: iets waaruit je een determinant of een oplossing haalde. Twee Engelse wiskundigen maakten er een **object** van.

![Arthur Cayley](/images/history/m32-cayley.jpg "Arthur Cayley (1821–1895), foto door Herbert Rose Barraud, vóór 1883. Via Wikimedia Commons, publiek domein.")

**James Joseph Sylvester** (1814–1897) introduceerde in **1850** het woord *matrix*. Hij beschreef een "langwerpige schikking van termen" van $m$ rijen en $n$ kolommen, en merkte op dat zo'n schikking zelf geen determinant is, maar als het ware een *matrix* waaruit je allerlei determinanten kunt vormen, door een aantal rijen en evenveel kolommen te kiezen. Het Latijnse woord *matrix* (van *mater*, moeder) betekent baarmoeder of voedingsbodem: de plek waaruit iets voortkomt. Voor Sylvester was de matrix dus letterlijk de "moeder" van de determinanten.

![James Joseph Sylvester](/images/history/m32-sylvester.jpg "James Joseph Sylvester (1814–1897), gravure door G. J. Stodart (1889). Wellcome Collection, via Wikimedia Commons, CC BY 4.0.")

Sylvester en **Arthur Cayley** (1821–1895) hadden een ongewone loopbaan gemeen. Beiden werkten jarenlang buiten de universiteit: Sylvester als actuaris bij een verzekeringsmaatschappij, Cayley als advocaat. Ze leerden elkaar rond 1850 kennen in de Londense juristenwereld van Lincoln's Inn en werden levenslange vrienden die tijdens wandelingen over wiskunde praatten. Cayley was in de veertien jaar dat hij als advocaat werkte (1849–1863) zo productief dat hij in die tijd ongeveer 250 wiskundige artikelen publiceerde. In 1863 werd hij hoogleraar in Cambridge.

In **1858** publiceerde Cayley zijn *Memoir on the theory of matrices*. Daarin behandelt hij matrices voor het eerst als zelfstandige grootheden met een eigen algebra. Hij definieert de som, het product met een getal en het matrixproduct. Dat product koos hij zo dat het overeenkomt met **het na elkaar uitvoeren van twee lineaire transformaties**: precies de "rij maal kolom"-regel uit les 3. Hij definieert ook de eenheidsmatrix, de nulmatrix en de inverse, en hij merkt op dat het product niet commutatief is.

In hetzelfde artikel staat een opmerkelijke stelling, nu bekend als de **stelling van Cayley-Hamilton**. Voor een $2 \times 2$-matrix luidt die:

$$
A = \begin{pmatrix} a & b \\ c & d \end{pmatrix} \quad\Longrightarrow\quad A^2 - (a + d)A + (ad - bc)I = O
$$

Elke $2 \times 2$-matrix voldoet dus aan een kwadratische vergelijking, met de determinant als constante term. Cayley controleerde de stelling voor $2 \times 2$- en $3 \times 3$-matrices en schreef dat hij het niet nodig vond een algemeen bewijs te geven. Dat kwam later.

{{ exercise: 32-031 }}

## 5. Na Cayley

In de decennia na Cayley werd de matrixrekening het fundament van wat nu **lineaire algebra** heet. In de 20e eeuw bleek ze onmisbaar in onverwachte gebieden. In 1925 en 1926 formuleerden Werner Heisenberg, Max Born en Pascual Jordan een versie van de quantummechanica die zo sterk op matrices steunde dat ze *matrixmechanica* werd genoemd. In 1945 publiceerde de Schotse bioloog Patrick Leslie in het tijdschrift *Biometrika* een populatiemodel met een matrix van geboorte- en overlevingscijfers; die **Leslie-matrix** zie je in les 7. En sinds de eerste elektronische computers in de jaren 1940 is het oplossen van grote stelsels met eliminatie een van de belangrijkste dingen waarvoor computers worden gebruikt.

Zo is de cirkel rond: de Chinese rekenaar die kolommen staafjes verschoof, en de computer die een stelsel met een miljoen onbekenden oplost, voeren in wezen dezelfde handelingen uit.

## Bronnen

- MacTutor History of Mathematics, *Matrices and determinants*: https://mathshistory.st-andrews.ac.uk/HistTopics/Matrices_and_determinants/
- MacTutor, *Nine chapters on the mathematical art*: https://mathshistory.st-andrews.ac.uk/HistTopics/Nine_chapters/
- Wikipedia (EN), *The Nine Chapters on the Mathematical Art*: https://en.wikipedia.org/wiki/The_Nine_Chapters_on_the_Mathematical_Art
- Wikipedia (EN), *Gaussian elimination* (sectie History): https://en.wikipedia.org/wiki/Gaussian_elimination
- J. F. Grcar, *How ordinary elimination became Gaussian elimination*, Historia Mathematica 38 (2011), 163–218; preprint: https://arxiv.org/abs/0907.2397
- MacTutor, *Takakazu Seki Kowa*: https://mathshistory.st-andrews.ac.uk/Biographies/Seki/
- Wikipedia (EN), *Seki Takakazu*: https://en.wikipedia.org/wiki/Seki_Takakazu
- MAA Convergence, over Leibniz' notatie en zijn brief aan De l'Hôpital (1693): https://old.maa.org/node/915203
- MacTutor, *James Joseph Sylvester*: https://mathshistory.st-andrews.ac.uk/Biographies/Sylvester/
- MacTutor, *Arthur Cayley*: https://mathshistory.st-andrews.ac.uk/Biographies/Cayley/
- University of Waterloo, *The origin of the term matrix* (citaat Sylvester 1850): https://math.uwaterloo.ca/~hwolkowi/henry/teaching/w08/235.w08/miscfiles/matrixorigin.html
- Wikipedia (EN), *Patrick Holt Leslie*: https://en.wikipedia.org/wiki/Patrick_Holt_Leslie
- Afbeeldingen via Wikimedia Commons: *九章算術細草圖說.jpg* (publiek domein): https://commons.wikimedia.org/wiki/File:%E4%B9%9D%E7%AB%A0%E7%AE%97%E8%A1%93%E7%B4%B0%E8%8D%89%E5%9C%96%E8%AA%AA.jpg; *Seki Kowa.jpg* (publiek domein): https://commons.wikimedia.org/wiki/File:Seki_Kowa.jpg; *Arthur Cayley.jpg* (Herbert Rose Barraud, publiek domein): https://commons.wikimedia.org/wiki/File:Arthur_Cayley.jpg; *James Joseph Sylvester. Stipple engraving by G. J. Stodart* (Wellcome Collection, CC BY 4.0): https://commons.wikimedia.org/wiki/File:James_Joseph_Sylvester._Stipple_engraving_by_G._J._Stodart,_Wellcome_V0005697.jpg
