# Van meetregel naar bewijs

De formules uit de vorige lessen zijn niet in één keer bedacht. Ze zijn het resultaat van ruim tweeduizend jaar meten, benaderen en uiteindelijk bewijzen. In dit intermezzo volg je die weg: van Egyptische landmeters met een geknoopt koord, via de rekenvoorschriften van Egyptische en Babylonische schrijvers, naar de bewijzen van Euclides en Archimedes.

## 1. De touwspanners van Egypte

Het oude Egypte leefde van de Nijl. De jaarlijkse overstroming maakte het land vruchtbaar, maar wiste ook grenzen uit. Grond moest dus steeds opnieuw worden gemeten, voor de verdeling en voor de belasting. Daarvoor gebruikten landmeters stokken en **koorden met knopen op vaste afstanden**. Op muurschilderingen in graven uit het Nieuwe Rijk, zoals dat van Menna (Thebe, ca. 1400–1352 v.Chr.), zie je hoe ze die koorden over een korenveld spannen (zie de afbeelding in de introductie). Menna was zelf "schrijver van de velden": een ambtenaar die oogsten registreerde.

Het spannen van een koord had ook een ceremoniële kant. Bij de stichting van een tempel werd het grondplan met koorden uitgezet, en inscripties tonen de farao die daar zelf aan deelneemt. Zo'n ceremonie heette letterlijk het "spannen van het koord".

### Een Grieks woord met een onzekere geschiedenis

In populaire boeken heten de Egyptische landmeters vaak **harpedonapten** of "touwspanners". Dat woord is echter **Grieks**, niet Egyptisch. De bekendste bron is een uitspraak die wordt toegeschreven aan de Griekse filosoof **Democritus** (5e–4e eeuw v.Chr.) en die we alleen kennen via een citaat bij de christelijke schrijver Clemens van Alexandrië, zes eeuwen later. Democritus zou hebben opgeschept dat niemand hem overtrof in het construeren van lijnen met bewijs, zelfs niet de Egyptische "harpedonapten". Over wie die mensen precies waren en wat ze konden, zegt de passage verder weinig.

Een tweede, nog vaker herhaald verhaal is dat de Egyptenaren met een koord van twaalf gelijke stukken een driehoek met zijden 3, 4 en 5 spanden om een rechte hoek uit te zetten. Dat idee werd in 1882 geopperd door de Duitse wiskundehistoricus Moritz Cantor. Er is **geen Egyptische bron** die deze methode beschrijft, en de meeste historici beschouwen het nu als een onbewezen hypothese. Of en hoe de Egyptenaren rechte hoeken met koorden uitzetten, weten we niet. (De wiskunde achter de 3-4-5-driehoek komt in module 18 aan bod.)

:::tip Bronnen wegen
Herodotus, Democritus en Cantor schreven allemaal over Egypte, maar vanuit een andere tijd en met een ander doel. Herodotus schreef ruim duizend jaar na het Middenrijk, Democritus kennen we uit de tweede hand, en Cantor deed een moderne gissing. Egyptische bronnen zelf, zoals de Rhind-papyrus, laten zien wat schrijvers werkelijk berekenden. Bij historische claims is het altijd de moeite waard te vragen: wie zegt dit, en hoe kan hij het weten?
:::

### Egyptische maten

De Egyptische lengtemaat was de **el** (de koninklijke el was ongeveer 52 cm, zie de tijdlijn). Voor land gebruikten schrijvers de **khet** van 100 el, dus ruwweg 52 meter, en de **setat**: een vierkant van 1 khet bij 1 khet, ongeveer 2.750 m². Een setat was dus iets meer dan een kwart hectare. Ook hier zie je het principe uit les 4: een oppervlaktemaat is een **vierkant** van een lengtemaat.

## 2. Meetkunde in de Rhind-papyrus

De **Rhind-papyrus** is gekopieerd door de schrijver **Ahmes**, rond 1650–1550 v.Chr., naar een ouder origineel. Je kent hem uit module 4 en module 7. Naast rekenopgaven met breuken bevat hij een reeks meetkundige problemen: de inhoud van graanschuren, de oppervlakte van akkers en de helling van piramiden.

![Detail van de Rhind-papyrus](/images/history/m11-rhind-papyrus.jpg "Detail van de Rhind Mathematical Papyrus (British Museum, EA 10057). Links zie je driehoekige figuren bij de opgaven over piramiden. Foto via Wikimedia Commons, publiek domein.")

**Rechthoeken en driehoeken.** Bij een rechthoekig veld vermenigvuldigt Ahmes lengte en breedte, net als wij. In opgave 51 berekent hij een driehoekig stuk land met een basis van 4 khet en een "hoogte" van 10 khet: hij neemt de helft van de basis en vermenigvuldigt met 10, wat 20 setat oplevert. Dat is onze $\tfrac12 bh$. Opgave 52 behandelt op dezelfde manier een afgeknotte driehoek, een trapezium.

**Het ronde veld (opgave 50).** Een rond veld heeft een middellijn van 9 khet. Hoe groot is het? Het voorschrift luidt: *neem een negende van de middellijn weg, dat is 1; de rest is 8. Vermenigvuldig 8 met 8; dat is 64.* Het veld is 64 setat.

In formuletaal: $A \approx \left(d - \tfrac19 d\right)^2 = \left(\tfrac89 d\right)^2$. Vergelijk dat met onze formule $A = \pi r^2 = \pi \left(\tfrac{d}{2}\right)^2 = \tfrac{\pi}{4} d^2$. Als je beide gelijkstelt, zie je welke waarde van $\pi$ in Ahmes' regel verborgen zit:

$$
\frac{\pi}{4} = \left(\frac{8}{9}\right)^2 = \frac{64}{81} \quad\Longrightarrow\quad \pi \approx 4 \times \frac{64}{81} = \frac{256}{81} \approx 3{,}1605
$$

Dat wijkt nog geen 0,6% af van de echte waarde. Voor een veld van 9 khet geeft onze formule $\pi \times 4{,}5^2 \approx 63{,}62$ setat; Ahmes' 64 is daar heel dicht bij. Belangrijk: Ahmes spreekt nergens over een "getal $\pi$". Hij geeft een **rekenvoorschrift** voor de oppervlakte. Dat wij er een waarde van $\pi$ uit afleiden, is onze moderne lezing.

**Hoe kwam hij erop?** Opgave 48 toont een tekening van een vierkant met zijde 9 waarin een figuur is getekend, waarschijnlijk een cirkel of een achthoek. Een veelgehoorde reconstructie: verdeel het vierkant van 9 bij 9 in negen vakjes van 3 bij 3 en snijd de vier hoeken schuin af. Je houdt een achthoek over die bijna samenvalt met de ingeschreven cirkel. De achthoek is $81 - 4 \times 4{,}5 = 63$, en dat ligt dicht bij $64 = 8^2$. Of de Egyptenaren werkelijk zo redeneerden, is niet zeker: de tekening is schetsmatig en de tekst legt het niet uit.

![Het vierkant van 9 met een ingeschreven achthoek en cirkel](/images/diagrams/m11-rhind-achthoek.svg "Reconstructie bij opgave 48 van de Rhind-papyrus: een vierkant van 9 bij 9, verdeeld in vakjes van 3 bij 3, met afgesneden hoeken. De achthoek (63 vakjes van 1) benadert de ingeschreven cirkel (ongeveer 63,6).")

**Graanschuren (opgave 41).** Een ronde graanschuur met middellijn 9 el en hoogte 10 el: Ahmes berekent eerst het ronde grondvlak met dezelfde regel ($8 \times 8 = 64$) en vermenigvuldigt dat met de hoogte. Dat is precies ons principe **grondvlak maal hoogte** uit les 5. Daarna rekent hij de kubieke el om naar een graanmaat. Voor een schrijver die rantsoenen moest uitdelen, was dat het eigenlijke doel van de som.

{{ exercises: 11-025, 11-044 }}

## 3. Mesopotamië: velden, cirkels en de waarde 3

In Mesopotamië, het land tussen Eufraat en Tigris, rekenden schrijvers in het zestigtallig stelsel (module 2). Ook daar draaide veel meetkunde om land. Administratieve teksten uit Sumerische steden, al uit de 24e eeuw v.Chr., noteren van velden de lengte, de breedte en de oppervlakte. Uit die getallen kunnen historici afleiden hoe de landmeters rekenden.

**De landmetersformule.** Een veld is zelden een zuivere rechthoek. Voor een vierhoekig veld met zijden $a$, $b$, $c$ en $d$ (in die volgorde) gebruikten landmeters vaak de regel: neem het **gemiddelde van twee overstaande zijden**, doe dat ook voor het andere paar, en vermenigvuldig.

$$
A \approx \frac{a + c}{2} \times \frac{b + d}{2}
$$

Deze "landmetersformule" duikt in veel oude culturen op. Het bekendste voorbeeld staat op de muren van de tempel van Horus in Edfu in Egypte, uit de Ptolemeïsche tijd (3e–1e eeuw v.Chr.), waar de oppervlakten van tempelvelden zo zijn berekend. Voor een rechthoek is de formule exact. Voor een veld dat bijna rechthoekig is, is ze een goede benadering. Maar voor een scheef veld is ze ronduit fout.

:::example Hoe goed is de landmetersformule?
**a.** Een veld van 40 bij 30 meter met rechte hoeken: $\frac{40 + 40}{2} \times \frac{30 + 30}{2} = 40 \times 30 = 1200$ m². Exact.

**b.** Een parallellogram met zijden van 40 m en 30 m en een loodrechte hoogte van 24 m (bij de basis van 40 m). De echte oppervlakte is $40 \times 24 = 960$ m². De landmetersformule geeft opnieuw $40 \times 30 = 1200$ m²: **25% te veel**.

De formule kijkt alleen naar de lengtes van de zijden, niet naar de hoeken. Hoe schever het veld, hoe groter de fout. Voor de belastingontvanger was dat geen nadeel.
:::

**Cirkels.** Babylonische schrijvers namen de omtrek van een cirkel meestal gelijk aan **drie keer de middellijn**, en de oppervlakte gelijk aan **een twaalfde van het kwadraat van de omtrek**:

$$
O \approx 3d \qquad\qquad A \approx \frac{O^2}{12}
$$

Dat komt neer op $\pi \approx 3$. Reken maar na: met $O = 3d = 6r$ wordt $\frac{O^2}{12} = \frac{36 r^2}{12} = 3r^2$. Dezelfde waarde 3 vind je trouwens in de Hebreeuwse Bijbel, waar een rond bekken van tien el breed een omtrek van dertig el krijgt (1 Koningen 7:23).

Toch wisten Babylonische rekenaars dat 3 te klein was. Een Oudbabylonische kleitablet die in 1936 bij Susa (in het huidige Iran) werd opgegraven en uit ongeveer de 19e–17e eeuw v.Chr. stamt, vergelijkt de omtrek van een regelmatige zeshoek met die van de omgeschreven cirkel. Daaruit volgt de benadering $\pi \approx 3\tfrac18 = 3{,}125$, ongeveer 0,5% te klein.

{{ exercises: 11-041 }}

## 4. Archimedes: π insluiten

Al deze benaderingen waren **regels**: ze werkten goed genoeg, maar niemand wist hoe goed precies. Dat veranderde met **Archimedes van Syracuse** (ca. 287–212 v.Chr.). In zijn korte geschrift *Over de meting van de cirkel* (waarschijnlijk rond 250 v.Chr.; we hebben er maar een deel van) bewijst hij twee dingen.

**Stelling 1.** De oppervlakte van een cirkel is gelijk aan die van een rechthoekige driehoek waarvan de ene rechthoekszijde de straal is en de andere de omtrek. In onze notatie: $A = \tfrac12 \times r \times O = \tfrac12 \times r \times 2\pi r = \pi r^2$. Dat is precies wat het taartpunten-argument uit les 5 suggereerde, maar Archimedes bewijst het streng: hij laat zien dat de oppervlakte niet groter én niet kleiner kan zijn.

**Stelling 3.** De verhouding van omtrek tot middellijn ligt tussen $3\tfrac{10}{71}$ en $3\tfrac17$. Om dat te vinden, sloot hij de cirkel in tussen twee regelmatige veelhoeken: een **ingeschreven** veelhoek (binnen de cirkel, met de hoekpunten op de cirkel) en een **omgeschreven** veelhoek (buiten de cirkel, met de zijden rakend aan de cirkel). De omtrek van de cirkel ligt tussen die twee omtrekken in.

![Een cirkel ingesloten tussen twee zeshoeken](/images/diagrams/m11-archimedes-zeshoeken.svg "De omtrek van de cirkel ligt tussen die van de ingeschreven zeshoek (6r) en die van de omgeschreven zeshoek (ongeveer 6,93r). Archimedes verdubbelde het aantal zijden vier keer, tot 96.")

Begin met zeshoeken. De ingeschreven regelmatige zeshoek bestaat uit zes gelijkzijdige driehoeken met zijde $r$; zijn omtrek is $6r = 3d$. Dus $\pi > 3$. De omgeschreven zeshoek heeft een omtrek van ongeveer $6{,}93r$, dus $\pi < 3{,}47$. Dat is nog een ruime marge. Archimedes verdubbelde daarom het aantal zijden: 12, 24, 48 en ten slotte **96**. Met elke verdubbeling kropen de twee veelhoeken dichter tegen de cirkel aan. Bij 96 zijden vond hij:

$$
3\tfrac{10}{71} \approx 3{,}1408 \;<\; \pi \;<\; 3\tfrac{1}{7} \approx 3{,}1429
$$

Het nieuwe aan Archimedes' werk is niet alleen de nauwkeurigheid, maar vooral dat hij een **ondergrens en een bovengrens** gaf. Hij beweerde niet dat $\pi$ gelijk is aan $\tfrac{22}{7}$; hij bewees dat $\pi$ daar net onder ligt. Die bovengrens $3\tfrac17 = \tfrac{22}{7}$ is nog steeds een handige benadering voor uit-het-hoofd-rekenen.

## 5. Euclides en de Elementen

Ongeveer een halve eeuw vóór Archimedes werkte in Alexandrië **Euclides** (rond 300 v.Chr.). Over zijn leven weten we vrijwel niets. Zijn werk kennen we des te beter: de *Elementen*, dertien boeken die meer dan tweeduizend jaar als hét leerboek van de meetkunde golden.

![Papyrusfragment van Euclides' Elementen](/images/history/m11-euclides-papyrus.jpg "Papyrus Oxyrhynchus I 29, een van de oudste bewaarde fragmenten van de Elementen (ca. 75–125 n.Chr.), met een tekening bij boek II, propositie 5. Penn Museum. Wikimedia Commons, publiek domein.")

**Boek I** begint met 23 **definities** (onder meer van punt, lijn, cirkel, middellijn en evenwijdige lijnen), 5 **postulaten** (uitgangspunten, zoals "om elk middelpunt met elke straal kan een cirkel worden getekend") en 5 **algemene begrippen** (zoals "het geheel is groter dan het deel"). Daarna volgen 48 **proposities**, elk bewezen uit wat ervoor kwam. Een paar daarvan heb je in deze module al gezien:

| Propositie | Inhoud | In deze module |
|---|---|---|
| I.13 | Nevenhoeken zijn samen twee rechte hoeken | Les 2 |
| I.15 | Overstaande hoeken zijn gelijk | Les 2 |
| I.29 | Hoeken bij evenwijdige lijnen en een snijlijn | Les 2 |
| I.32 | De hoeken van een driehoek zijn samen twee rechte hoeken | Les 3 |
| I.35 | Parallellogrammen op dezelfde basis tussen dezelfde evenwijdige lijnen hebben gelijke oppervlakte | Les 4 |
| I.41 | Een parallellogram is het dubbele van een driehoek met dezelfde basis tussen dezelfde evenwijdige lijnen | Les 4 |
| I.47 | De stelling van Pythagoras | Module 18 |

Let op hoe Euclides formuleert: hij zegt niet "$180°$" maar "twee rechte hoeken", en hij rekent niet met getallen maar vergelijkt figuren. Bij hem heeft een driehoek geen oppervlakte "van 20 cm²"; hij is "de helft van" een parallellogram. Getallen en formules zijn onze moderne vertaling.

Het grote verschil met de Egyptische en Babylonische teksten zit in de **vraag**. Ahmes laat zien **hoe** je iets uitrekent. Euclides laat zien **waarom** een uitspraak in alle gevallen waar moet zijn. Een formule afleiden uit een paar voorbeelden geeft vertrouwen; een bewijs geeft zekerheid, en het vertelt je ook precies **onder welke voorwaarden** de uitspraak geldt (bijvoorbeeld: alleen in het platte vlak, alleen bij evenwijdige lijnen).

:::example Het bewijs van de driehoeksformule, nog eens bekeken
Leg een kopie van een driehoek er gedraaid naast. Samen vormen ze een parallellogram met dezelfde basis en hoogte. De twee driehoeken zijn gelijk, dus elk heeft de helft van $b \times h$.

Dit argument gebruikt geen enkele meting. Het werkt dus ook als de basis $\sqrt{2}$ cm is of als de driehoek een kilometer groot is. Daarin zit de kracht van een bewijs: één redenering, oneindig veel gevallen.
:::

{{ exercises: 11-026 }}

## Bronnen

- Herodotus, *Historiën* II.109 (Engelse vertaling, Perseus/Perseids): https://cts.perseids.org/read/greekLit/tlg0016/tlg001/perseus-eng2/2.108.2-2.109.3
- Wikipedia (EN), *Rope stretcher*: https://en.wikipedia.org/wiki/Rope_stretcher
- Wikipedia (EN), *Ancient Egyptian units of measurement*: https://en.wikipedia.org/wiki/Ancient_Egyptian_units_of_measurement
- Wikipedia (EN), *Rhind Mathematical Papyrus*: https://en.wikipedia.org/wiki/Rhind_Mathematical_Papyrus
- British Museum, *Rhind Mathematical Papyrus* (EA 10057): https://www.britishmuseum.org/collection/object/Y_EA10057
- MacTutor History of Mathematics, *Mathematics in Egyptian Papyri*: https://mathshistory.st-andrews.ac.uk/HistTopics/Egyptian_papyri/
- MacTutor, *A history of Pi*: https://mathshistory.st-andrews.ac.uk/HistTopics/Pi_through_the_ages/
- Wikipedia (EN), *Babylonian mathematics* (cirkelregels, tablet van Susa): https://en.wikipedia.org/wiki/Babylonian_mathematics
- J. Høyrup, *Algebra in Cuneiform*, hoofdstuk 5 (Mesopotamische landmeters vóór 2200 v.Chr.): https://math.libretexts.org/Bookshelves/Applied_Mathematics/Book%3A_Algebra_in_Cuneiform_(Hyrup)/05%3A_Application_of_Quasi-algebraic_Techniques_to_Geometry/5.01%3A_New_Page
- E. Tou, *Measuring the Accuracy of an Ancient Area Formula* (2014), over de landmetersformule in Edfu: https://digital.lib.washington.edu/researchworks/items/eefac181-5077-44f0-95fe-5fcd1455cb08
- Springer, hoofdstuk over veldmeting in Presargonische administratieve teksten: https://link.springer.com/10.1007/978-3-030-48389-0_8
- Wikipedia (EN), *Measurement of a Circle*: https://en.wikipedia.org/wiki/Measurement_of_a_Circle
- D.E. Joyce, *Euclid's Elements, Book I* (Clark University): https://mathcs.clarku.edu/~djoyce/java/elements/bookI/bookI.html
- MacTutor, *Euclid of Alexandria*: https://mathshistory.st-andrews.ac.uk/Biographies/Euclid/
- Wikipedia (EN), *Litre* (definities van 1795, 1901 en 1964): https://en.wikipedia.org/wiki/Litre
- Afbeeldingen: *Rope stretching.jpg* (Charles K. Wilkinson, facsimile, Metropolitan Museum of Art 30.4.44, CC0): https://commons.wikimedia.org/wiki/File:Rope_stretching.jpg; *Rhind Mathematical Papyrus.jpg* (publiek domein): https://commons.wikimedia.org/wiki/File:Rhind_Mathematical_Papyrus.jpg; *P. Oxy. I 29.jpg* (publiek domein): https://commons.wikimedia.org/wiki/File:P._Oxy._I_29.jpg
