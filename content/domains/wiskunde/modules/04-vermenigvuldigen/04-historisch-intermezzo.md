# Ahmes en de kunst van het verdubbelen

## 1. Een schrijver die zijn naam noemde

Van de meeste wiskundigen uit de oudheid weten we niets. Van de schrijver die de **Rhind-papyrus** kopieerde, weten we in elk geval zijn naam: **Ahmes** (ook gespeld als Ahmose). Hij vermeldt in de tekst dat hij een ouder werk overschreef. Zijn kopie dateert uit het 33e regeringsjaar van de Hyksos-koning Apophis; de meeste bronnen plaatsen dat ergens tussen ongeveer 1650 en 1550 v.Chr. Het origineel dat Ahmes kopieerde, stamde volgens hemzelf uit de tijd van koning Amenemhat III van de 12e dynastie, rond 1850 v.Chr. Verder is er over Ahmes als persoon niets bekend.

De papyrus is geschreven in het **hiëratisch**, het lopende handschrift dat Egyptische schrijvers gebruikten in plaats van de hiërogliefen op tempelmuren. De twee delen die het British Museum bewaart (EA 10057 en EA 10058), zijn samen bijna vijf meter lang en ongeveer 32 cm hoog; enkele kleine fragmenten van het tussenstuk liggen in het Brooklyn Museum in New York. De Schotse oudheidkundige Alexander Henry Rhind kocht hem in 1858 in Luxor (het oude Thebe); sinds 1865 is hij in het bezit van het British Museum in Londen. Het document bevat een kleine negentig opgaven met uitwerkingen; het precieze aantal hangt af van hoe je telt (bronnen noemen 84, 87 of 91). Het gaat over het verdelen van broden, het rekenen met breuken, de inhoud van graanschuren, oppervlakten van akkers en de helling van piramiden.

![Detail van de Rhind-papyrus](/images/history/m04-rhind-papyrus.jpg "Detail van de Rhind Mathematical Papyrus, British Museum. Foto via Wikimedia Commons, publiek domein.")

Opvallend is dat de papyrus nergens een tafel van vermenigvuldiging bevat zoals wij die kennen. Er staat wel een andere tabel in: een lijst van breuken van de vorm $\tfrac{2}{n}$, die de Egyptenaren nodig hadden voor hun bijzondere manier van rekenen met breuken (daarover meer in module 7). Vermenigvuldigen zelf deden ze met een methode die geen tafels vereist.

## 2. De Egyptische methode: alleen verdubbelen

Terug naar de schrijver uit de introductie: $13 \times 12$. De Egyptische methode werkt met twee kolommen.

1. Zet links **1** en rechts **12**.
2. **Verdubbel** beide getallen, rij na rij: 2 en 24, 4 en 48, 8 en 96. Stop zodra het linker getal (hier 16) groter zou worden dan 13.
3. Zoek in de linkerkolom getallen die samen **13** zijn: $8 + 4 + 1 = 13$. Zet een vinkje bij die rijen.
4. Tel de rechter getallen van de aangevinkte rijen op: $96 + 48 + 12 = 156$.

![Egyptische vermenigvuldiging 13 × 12](/images/diagrams/m04-egyptisch-13x12.svg "De Egyptische methode voor 13 × 12: verdubbel, vink de rijen 1, 4 en 8 aan, en tel op.")

Waarom klopt dit? Omdat 13 groepen van 12 hetzelfde zijn als 8 groepen plus 4 groepen plus 1 groep van 12. Het is de distributieve eigenschap:

$$
13 \times 12 = (8 + 4 + 1) \times 12 = 8 \times 12 + 4 \times 12 + 1 \times 12 = 96 + 48 + 12 = 156
$$

In de papyri werden de gekozen rijen met een schuine streep gemarkeerd, ongeveer zoals wij een vinkje zetten. Probeer het hieronder zelf met andere getallen.

{{ widget: egyptian-multiplication a=13 b=12 }}

:::example Uitgewerkt voorbeeld: 25 × 7
Verdubbel 1 en 7 tot de linkerkolom voorbij 25 zou gaan:

| | links | rechts |
|---|---|---|
| ✓ | 1 | 7 |
| | 2 | 14 |
| | 4 | 28 |
| ✓ | 8 | 56 |
| ✓ | 16 | 112 |

Welke getallen links geven samen 25? Begin bij het grootste: $25 - 16 = 9$, dan $9 - 8 = 1$, dan $1 - 1 = 0$. Dus $25 = 16 + 8 + 1$.

Tel rechts op: $112 + 56 + 7 = 175$. Dus $25 \times 7 = 175$.

**Tip:** het getal links bepaalt hoeveel rijen je nodig hebt. Met 7 links ($25 \times 7 = 7 \times 25$) was je na drie rijen klaar geweest: $7 = 4 + 2 + 1$, dus $100 + 50 + 25 = 175$. Zet dus meestal het **kleinste** getal links, of het getal dat zich het makkelijkst in verdubbelingen laat splitsen. De wisseleigenschap geeft je die vrijheid, en de Egyptische schrijvers maakten daar ook gebruik van.
:::

{{ exercises: 04-025, 04-026 }}

## 3. Waarom het altijd lukt: machten van twee

Werkt dit voor elk getal? Kun je élk getal schrijven als een som van verschillende getallen uit het rijtje $1, 2, 4, 8, 16, 32, \dots$? Ja, en wel op precies één manier. Neem steeds het grootste getal uit het rijtje dat nog past, en ga verder met wat overblijft. Omdat elk volgend getal in het rijtje het dubbele is van het vorige, heb je elk getal hoogstens één keer nodig.

Dat is precies het idee achter het **binaire** of **tweetallige** talstelsel. In ons tientallige stelsel heeft elke positie een waarde die tien keer zo groot is als die rechts ervan (eenheden, tientallen, honderdtallen). In het binaire stelsel is elke positie **twee** keer zo groot: 1, 2, 4, 8, 16, ... En er zijn maar twee cijfers: 0 (deze macht van twee zit er niet in) en 1 (wel).

$$
13 = 8 + 4 + 1 = 1 \cdot 8 + 1 \cdot 4 + 0 \cdot 2 + 1 \cdot 1 \quad\Rightarrow\quad 13 = 1101_{\text{twee}}
$$

De vinkjes in Ahmes' tabel zijn dus, van onder naar boven gelezen, de binaire schrijfwijze van 13: vinkje, vinkje, geen vinkje, vinkje. De Egyptenaren dachten natuurlijk niet in binaire getallen. Maar het is opmerkelijk dat hun methode wiskundig neerkomt op hetzelfde principe dat moderne computers gebruiken. Een processor rekent met nullen en enen, en een eenvoudige vermenigvuldigschakeling doet in wezen wat Ahmes deed: verschuiven (verdubbelen) en optellen.

{{ exercise: 04-027 }}

## 4. Huizen, katten en muizen: opgave 79

Een van de bekendste opgaven uit de papyrus is opgave 79. De tekst is kort en geeft geen verhaaltje, alleen een lijst:

| | aantal |
|---|---|
| huizen | 7 |
| katten | 49 |
| muizen | 343 |
| spelt (graan) | 2401 |
| hekat (graanmaat) | 16.807 |
| **totaal** | **19.607** |

Elk getal is zeven keer het vorige. Moderne commentatoren lezen het als een raadsel: in 7 huizen wonen elk 7 katten, elke kat vangt 7 muizen, elke muis zou 7 aren spelt hebben opgegeten, en elke aar had 7 hekat graan opgeleverd. Of de schrijver het zo bedoelde, weten we niet. Een opvallend vergelijkbaar raadsel komt voor in Fibonacci's *Liber Abaci* (1202) en in het Engelse kinderrijmpje *As I was going to St Ives*.

Interessant is hoe het totaal berekend wordt. Naast de lijst staat een tweede berekening: $2801 \times 7$, uitgevoerd met de verdubbelmethode. Dat lijkt toeval, maar $2801 = 1 + 7 + 49 + 343 + 2401$. Wie die som met 7 vermenigvuldigt, krijgt precies $7 + 49 + 343 + 2401 + 16\,807$. De schrijver kende blijkbaar een kortere route naar het totaal.

{{ exercise: 04-028 }}

## 5. De Russische boerenmethode

Een nauw verwante methode staat bekend als de **Russische boerenmethode**. Waar die naam vandaan komt, is onduidelijk; men neemt wel aan dat de methode in de 19e eeuw in Rusland nog in gebruik was bij mensen die nooit tafels hadden geleerd. Hij heet ook wel de Ethiopische methode.

Het verschil met de Egyptische methode: je hoeft de splitsing in machten van twee niet zelf te zoeken. Dat doet de methode voor je.

1. Zet de twee factoren naast elkaar, bijvoorbeeld 18 en 27.
2. **Halveer** de linkerkolom steeds (rond naar beneden af, dus negeer een rest), en **verdubbel** de rechterkolom, tot je links bij 1 bent.
3. **Streep** alle rijen door waarin links een **even** getal staat.
4. Tel de overgebleven getallen in de rechterkolom op.

| links (halveren) | rechts (verdubbelen) | |
|---|---|---|
| 18 | 27 | even, doorstrepen |
| 9 | 54 | oneven, houden |
| 4 | 108 | even, doorstrepen |
| 2 | 216 | even, doorstrepen |
| 1 | 432 | oneven, houden |

$$
18 \times 27 = 54 + 432 = 486
$$

Het halveren met afronden is eigenlijk het omzetten naar binair: een oneven getal betekent "hier zit een 1". Zo levert de methode van onder naar boven gelezen $18 = 10010_{\text{twee}} = 16 + 2$, en inderdaad: $16 \times 27 = 432$ en $2 \times 27 = 54$.

{{ exercise: 04-029 }}

## 6. Van Bagdad via Pisa naar Edinburgh

De methoden die wij nu gebruiken, vereisen een **plaatswaardesysteem** met een nul. Dat systeem ontstond in India (zie module 2) en reisde via de islamitische wereld naar Europa.

- **Bagdad, ca. 825.** De geleerde **al-Khwarizmi** schreef een boek over het rekenen met de Indiase cijfers. Het Arabische origineel is niet teruggevonden; de tekst is bekend uit een Latijnse bewerking, waarschijnlijk uit de 12e eeuw, die begint met de woorden *Dixit Algorizmi*: "al-Khwarizmi zegt". Uit zijn gelatiniseerde naam ontstond ons woord **algoritme**: een vast stappenplan, zoals het cijferen.
- **Pisa, 1202.** **Leonardo van Pisa**, later bekend als **Fibonacci**, groeide deels op in Bugia (het huidige Béjaïa in Algerije), waar zijn vader voor Pisaanse kooplieden werkte. Daar leerde hij rekenen met "de negen Indiase figuren". In zijn *Liber Abaci* (1202, herziene versie 1228) legde hij Europese kooplieden uit hoe je met deze cijfers optelt, aftrekt, vermenigvuldigt en deelt, met talloze handelsvoorbeelden. Een volledig hoofdstuk gaat over het vermenigvuldigen van gehele getallen, inclusief manieren om de uitkomst te controleren.
- **De tralie.** De tralievermenigvuldiging uit les 3 wordt vaak aan Fibonacci toegeschreven, maar dat is omstreden: in zijn *Liber Abaci* is de methode volgens verschillende historici niet te vinden. Waar ze het eerst ontstond, is onbekend. De oudste Arabische vermelding is van het eind van de 13e eeuw, in het werk van de Marokkaanse wiskundige **Ibn al-Banna**; de oudste Europese rond 1300, in een anonieme Latijnse tekst uit Engeland. Ook in het oudst bekende gedrukte rekenboek van Europa, de *Arithmetica van Treviso* (1478), staat ze.
- **Edinburgh, 1617.** De Schotse landheer en wiskundige **John Napier** publiceerde in zijn boek *Rabdologia* een set rekenstaafjes: op elk staafje staat de tafel van één cijfer, in vakjes met een schuine streep, precies als in de tralie. Door de staafjes van de cijfers van een getal naast elkaar te leggen, kun je de tralie aflezen in plaats van tekenen. Deze *Napier's bones* werden in de 17e en 18e eeuw veel gebruikt. Napier is vooral beroemd om een andere uitvinding, de **logaritmen** (1614), die vermenigvuldigen terugbrengen tot optellen. Die komen in module 26 aan bod.

![Rekenstaafjes van Napier](/images/history/m04-napier-rekenstaafjes.jpg "Een set rekenstaafjes van Napier, ca. 1700, Computer History Museum. Foto: The wub, via Wikimedia Commons, CC BY-SA 4.0.")

Kijk naar de foto. Elk staafje is een kolom uit de tafel van vermenigvuldiging, met de tientallen boven en de eenheden onder de schuine streep. Je herkent bijvoorbeeld het staafje van 7: 7, 14, 21, 28, ...

Vier millennia, vier technieken: verdubbelen, tralie, rekenstaafjes, cijferen. Ze zien er heel verschillend uit, maar ze steunen alle vier op hetzelfde fundament: **splits het probleem in deelproducten die je wél kunt uitrekenen, en tel die op.** Dat is de distributieve eigenschap.

## Bronnen

- Wikipedia (EN), *Rhind Mathematical Papyrus*: https://en.wikipedia.org/wiki/Rhind_Mathematical_Papyrus
- British Museum, collectie-database, *EA 10057* en *EA 10058* (Rhind-papyrus): https://www.britishmuseum.org/collection/object/Y_EA10057
- Wikipedia (NL), *Papyrus Rhind*: https://nl.wikipedia.org/wiki/Papyrus_Rhind
- MacTutor History of Mathematics, *Ahmes*: https://mathshistory.st-andrews.ac.uk/Biographies/Ahmes/
- MacTutor, *Mathematics in Egyptian Papyri*: https://mathshistory.st-andrews.ac.uk/HistTopics/Egyptian_papyri/
- MacTutor, *Egyptian numerals*: https://mathshistory.st-andrews.ac.uk/HistTopics/Egyptian_numerals/
- Wikipedia (EN), *Ancient Egyptian multiplication*: https://en.wikipedia.org/wiki/Ancient_Egyptian_multiplication
- Wikipedia (EN), *As I was going to St Ives* (over opgave 79): https://en.wikipedia.org/wiki/As_I_was_going_to_St_Ives
- ProofWiki, *St. Ives Problem/Rhind Papyrus Variant*: https://proofwiki.org/wiki/St._Ives_Problem/Rhind_Papyrus_Variant
- arXiv 1901.10961, *Egyptian Multiplication* (over de markering van rijen): https://arxiv.org/abs/1901.10961
- Cut the Knot, *Peasant Multiplication*: https://www.cut-the-knot.org/Curriculum/Algebra/PeasantMultiplication.shtml
- Wikipedia (EN), *Lattice multiplication*: https://en.wikipedia.org/wiki/Lattice_multiplication
- Wikipedia (EN), *Treviso Arithmetic*: https://en.wikipedia.org/wiki/Treviso_Arithmetic
- Wikipedia (EN), *Liber Abaci*: https://en.wikipedia.org/wiki/Liber_Abaci
- MacTutor, *Leonardo Pisano Fibonacci*: https://mathshistory.st-andrews.ac.uk/Biographies/Fibonacci/
- Wikipedia (EN), *Al-Khwarizmi*: https://en.wikipedia.org/wiki/Al-Khwarizmi
- J.P. Hogendijk, *Al-Khwarizmi* (overzicht van werken en handschriften): https://www.jphogendijk.nl/khwarizmi.html
- Cambridge University Digital Library, MS Ii.6.5 (*Dixit Algorizmi*): https://cudl.lib.cam.ac.uk/view/MS-II-00006-00005/1
- Wikipedia (EN), *Napier's bones*: https://en.wikipedia.org/wiki/Napier%27s_bones
- Wikipedia (EN), *Multiplication sign*: https://en.wikipedia.org/wiki/Multiplication_sign
- Afbeeldingen: Wikimedia Commons, *Rhind Mathematical Papyrus.jpg* (publiek domein): https://commons.wikimedia.org/wiki/File:Rhind_Mathematical_Papyrus.jpg; *Napier's Bones circa 1700, Computer History Museum.jpg* (The wub, CC BY-SA 4.0): https://commons.wikimedia.org/wiki/File:Napier%27s_Bones_circa_1700,_Computer_History_Museum.jpg
