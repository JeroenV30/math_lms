# Van krachtenparallellogram tot quaternion

De vectorrekening die je in deze module leert, ziet er vanzelfsprekend uit: pijlen, componenten, een inproduct. Toch is ze verrassend jong. De ideeën liggen verspreid over drie eeuwen, van ingenieurs die met hellingen en krachten werkten tot negentiende-eeuwse wiskundigen die naar een "rekenkunde van de ruimte" zochten. De woorden "vector" en "scalar" bestaan pas sinds de jaren 1840, en de notatie die jij in deze module gebruikte, werd pas rond 1900 gangbaar.

## Simon Stevin en de weegkunst (1586)

:::history Leiden, 1586
Bij de drukkerij van Christoffel Plantijn in Leiden, geleid door zijn schoonzoon Frans van Raphelingen, verschijnt *De Beghinselen der Weeghconst*, geschreven door Simon Stevin "van Brugghe". Het is een boek over statica: hefbomen, zwaartepunten, gewichten op hellingen. Het is in het Nederlands geschreven, niet in het Latijn, zoals Stevin bewust deed met bijna al zijn werk.
:::

**Simon Stevin** (1548–1620) werd geboren in Brugge en vestigde zich in de jaren 1580 in de Noordelijke Nederlanden. Hij werd ingenieur, adviseur en leraar van prins Maurits, en schreef over boekhouden, vestingbouw, waterbouw, muziek en navigatie. In module 8 kwam je hem tegen als auteur van *De Thiende* (1585), het boekje waarin hij het rekenen met decimale breuken propageerde. Eén jaar later verscheen zijn boek over de weegkunst.

![Titelpagina van De Beghinselen der Weeghconst](/images/history/m31-stevin-weeghconst.png "Titelpagina van Simon Stevin, De Beghinselen der Weeghconst (Leiden, 1586), met in het midden de clootcrans. Wikimedia Commons, publiek domein.")

Op de titelpagina staat de clootcrans die je in de introductie zag. Stevin gebruikte die om de **wet van het hellend vlak** af te leiden: hoe steiler de helling, hoe groter het deel van het gewicht dat langs de helling naar beneden trekt. Volgens de MacTutor-biografie bevat het boek ook de stelling van de **krachtendriehoek**: drie krachten op één punt zijn in evenwicht als je ze, kop aan staart gelegd, tot een gesloten driehoek kunt vormen. In de praktijkles van deze module gebruik je precies dat idee bij een lamp die aan twee kabels hangt. Stevin beschreef het niet met vectoren of componenten (die notatie bestond nog lang niet), maar met meetkundige figuren en verhoudingen tussen lijnstukken.

Wat Stevin zo modern maakt, is zijn houding. Onder de clootcrans schreef hij *Wonder en is gheen wonder*: wat wonderlijk lijkt, is te begrijpen als je goed redeneert. Het onmogelijk zijn van een perpetuum mobile gebruikte hij als bewijsmiddel, lang voordat natuurkundigen het behoud van energie formuleerden.

## Galileï en de samengestelde beweging (1638)

Een halve eeuw later, in zijn *Discorsi* (1638), analyseerde **Galileo Galileï** de baan van een kanonskogel. Zijn sleutelidee: de beweging is **samengesteld** uit twee onafhankelijke bewegingen. Horizontaal beweegt de kogel met constante snelheid, verticaal valt hij steeds sneller, alsof hij gewoon losgelaten werd. Door die twee bewegingen te combineren, vond hij dat de baan een parabool is (module 21).

Dat is in wezen het werken met **componenten**: splits een beweging in een horizontaal en een verticaal deel, behandel ze apart, en voeg ze weer samen. Galileï deed dat meetkundig, met lijnstukken en verhoudingen, niet met de formules die jij nu gebruikt.

Een jaar eerder, in 1637, had **René Descartes** in *La Géométrie* laten zien hoe je meetkundige figuren met getallen en vergelijkingen kunt beschrijven (module 17). Zijn werk bevat nog niet het complete moderne assenstelsel met twee loodrechte assen, maar het idee dat een punt door getallen wordt vastgelegd, is de basis waarop componenten later zouden rusten.

## Newton: het parallellogram als stelling (1687)

In 1687 verscheen **Isaac Newtons** *Philosophiæ Naturalis Principia Mathematica*. Direct na zijn drie bewegingswetten zet Newton een reeks gevolgen (corollaria). Het eerste luidt, vrij vertaald:

> Een lichaam waarop twee krachten tegelijk werken, beschrijft de diagonaal van een parallellogram in dezelfde tijd waarin het de zijden zou beschrijven als de krachten afzonderlijk werkten.

Dit is de **parallellogrammethode** uit de les over rekenen met vectoren, nu als onderdeel van een volledige theorie van beweging. Newton leidde haar af uit zijn tweede wet, en direct daarna laat hij zien dat je een kracht ook omgekeerd kunt **ontbinden** in twee krachten in gekozen richtingen. Optellen en ontbinden, de twee kernbewerkingen van deze module, staan dus al op de eerste pagina's van de *Principia*. Toch zou het nog bijna twee eeuwen duren voordat iemand de pijlen zelf als rekenobjecten ging behandelen, met eigen regels voor optellen en vermenigvuldigen.

## Hamilton op de brug (1843)

**William Rowan Hamilton** (1805–1865) was hoogleraar sterrenkunde in Dublin en een van de begaafdste wiskundigen van zijn tijd. In de jaren 1830 had hij laten zien dat je complexe getallen kunt opvatten als **paren** reële getallen, met een vaste regel om ze te vermenigvuldigen. Zo'n paar kun je zien als een pijl in het platte vlak, en vermenigvuldigen met een complex getal betekent dan draaien en uitrekken.

Het vlak lukte dus. Maar de ruimte heeft drie dimensies. Jarenlang zocht Hamilton naar een manier om **drietallen** te vermenigvuldigen, zodat je ook met pijlen in de ruimte zou kunnen rekenen zoals met getallen. In een brief aan zijn zoon schreef hij later dat zijn kinderen hem elke ochtend vroegen of hij al drietallen kon vermenigvuldigen. Zijn antwoord: nee, hij kon ze alleen optellen en aftrekken.

:::history Dublin, maandag 16 oktober 1843
Hamilton wandelt met zijn vrouw langs het Royal Canal, op weg naar een vergadering van de Royal Irish Academy. Bij de Broom Bridge (ook Brougham Bridge genoemd) valt het kwartje: het gaat niet met drietallen, maar wel met **viertallen**. In zijn eigen woorden leek het alsof er een elektrisch circuit sloot en er een vonk oversprong. Hij krast de vermenigvuldigingsregel met zijn mes in een steen van de brug:

$$
i^2 = j^2 = k^2 = ijk = -1
$$
:::

Hamilton noemde zijn nieuwe getallen **quaternionen**. Een quaternion bestaat uit een gewoon getal plus een driedimensionaal deel $xi + yj + zk$. Voor die twee delen bedacht hij in zijn artikelreeks *On Quaternions* (1844–1850) twee nieuwe woorden: het gewone getal noemde hij **scalar** (omdat het langs één schaal van negatief naar positief loopt), het ruimtelijke deel **vector**, van het Latijnse *vehere*, "dragen, vervoeren". Een vector is letterlijk een "drager": hij brengt een punt van de ene plek naar de andere.

Er zat een prijs aan de vondst: bij quaternionen is $ij = k$ maar $ji = -k$. De **wisseleigenschap geldt niet meer**. Dat was in 1843 schokkend; het was een van de eerste keren dat wiskundigen bewust een "getallensysteem" accepteerden waarin $a \cdot b$ en $b \cdot a$ verschillend zijn.

De kras in de steen is verdwenen. Sinds 1958 hangt er een gedenkplaat, onthuld door de Ierse premier Éamon de Valera, en sinds 1990 lopen wiskundigen elk jaar op 16 oktober de **Hamilton Walk** van de sterrenwacht van Dunsink naar de brug.

![Gedenkplaat op de Broom Bridge](/images/history/m31-broom-bridge-plaquette.jpg "De gedenkplaat op de Broom Bridge in Dublin met Hamiltons formule, met daarnaast een later toegevoegd medaillon van Hamilton. Foto: Brendan Ward, 2022, via Wikimedia Commons, CC0.")

Wat heeft dit met het inproduct te maken? Vermenigvuldig je twee zuivere vectoren als quaternionen, dan krijg je een uitkomst met een scalair deel en een vectordeel. Het scalaire deel is precies **min het inproduct** van de twee vectoren. Het inproduct dat jij in deze module leerde, zat dus van begin af aan verstopt in Hamiltons vermenigvuldiging.

## Grassmann, de miskende schoolmeester (1844)

Vrijwel tegelijk, en volkomen onafhankelijk, bouwde **Hermann Grassmann** (1809–1877) een nog algemenere theorie. Grassmann was leraar aan een gymnasium in Stettin (nu Szczecin, Polen). In een examenwerkstuk over getijden uit 1840 rekende hij al met het optellen, aftrekken en differentiëren van vectoren. In 1844 publiceerde hij *Die lineale Ausdehnungslehre*, "de lineaire uitbreidingsleer": een theorie van grootheden in een willekeurig aantal dimensies, met bewerkingen die we nu herkennen als het inproduct en verwante producten.

Het boek werd vrijwel genegeerd. Het was abstract, ongewoon geschreven en kwam van een onbekende leraar. Ook een volledig herschreven versie uit 1862 sloeg niet aan. Grassmann legde zich steeds meer toe op de taalwetenschap, waar hij met zijn werk over het Sanskriet wél erkenning kreeg. Pas aan het eind van de negentiende eeuw begonnen wiskundigen te begrijpen hoe vooruitstrevend zijn ideeën waren; de moderne lineaire algebra (module 32) is er voor een groot deel op gebouwd.

## Gibbs en Heaviside: de moderne vectoranalyse (ca. 1880–1901)

Quaternionen waren elegant, maar voor natuurkundigen en ingenieurs omslachtig. Twee mannen, aan weerszijden van de Atlantische Oceaan, haalden er onafhankelijk van elkaar de bruikbare delen uit.

- **Josiah Willard Gibbs** (1839–1903), hoogleraar aan Yale, liet in 1881 en 1884 voor zijn studenten privé de *Elements of Vector Analysis* drukken. Hij scheidde het quaternionproduct in twee aparte bewerkingen: het inproduct (*dot product*) en het uitproduct (*cross product*), met de notaties $\vec a \cdot \vec b$ en $\vec a \times \vec b$.
- **Oliver Heaviside** (1850–1925), een Engelse telegrafist die zichzelf de wiskunde had geleerd, ontwikkelde in dezelfde jaren een vergelijkbaar systeem. Daarmee herschreef hij de theorie van het elektromagnetisme van James Clerk Maxwell in de vier compacte vectorvergelijkingen die natuurkundigen nu als "de vergelijkingen van Maxwell" kennen.

Begin jaren 1890 volgde in het tijdschrift *Nature* een felle discussie met Peter Guthrie Tait, de grote verdediger van Hamiltons quaternionen. De vectoranalyse won, omdat ze eenvoudiger was in het gebruik. In 1901 verscheen *Vector Analysis* van Edwin Bidwell Wilson, gebaseerd op de colleges van Gibbs. Dat leerboek legde de notatie en de termen vast die je in deze module hebt gebruikt.

:::summary Drie eeuwen in één tabel
| Jaar | Wie | Wat |
|---|---|---|
| 1586 | Simon Stevin | Clootcrans, hellend vlak, krachtendriehoek (*Weeghconst*) |
| 1637 | René Descartes | Meetkunde met getallen (*La Géométrie*) |
| 1638 | Galileo Galileï | Kogelbaan als samengestelde beweging (*Discorsi*) |
| 1687 | Isaac Newton | Parallellogram van krachten als gevolg van de bewegingswetten (*Principia*) |
| 1843 | William Rowan Hamilton | Quaternionen; later de woorden "scalar" en "vector" |
| 1844 | Hermann Grassmann | *Die lineale Ausdehnungslehre* |
| 1881–1884 | J. Willard Gibbs | *Elements of Vector Analysis*, inproduct en uitproduct |
| jaren 1880 | Oliver Heaviside | Vectoranalyse voor het elektromagnetisme |
| 1901 | E. B. Wilson | Leerboek *Vector Analysis* legt de moderne notatie vast |
:::

:::question Denkvraag
Stevin, Galileï en Newton gebruikten het parallellogram van krachten al, maar niemand van hen sprak van "vectoren". Wat voegde de negentiende eeuw eigenlijk toe? Denk aan het verschil tussen een **methode** (zo construeer je de resulterende kracht) en een **object** (een pijl is een ding waarmee je rekent, zoals met een getal).
:::

## Bronnen

- MacTutor History of Mathematics, *Simon Stevin*: https://mathshistory.st-andrews.ac.uk/Biographies/Stevin/
- Wikipedia (EN), *Simon Stevin*: https://en.wikipedia.org/wiki/Simon_Stevin
- MathPages, *Wonder En Is Gheen Wonder* (over de clootcrans): https://mathpages.com/home/kmath548/kmath548.htm
- Encyclopedia.com, *Stevin, Simon* (Dictionary of Scientific Biography): https://www.encyclopedia.com/history/encyclopedias-almanacs-transcripts-and-maps/simon-stevin
- Wikipedia (EN), *Haarlemmertrekvaart*: https://en.wikipedia.org/wiki/Haarlemmertrekvaart
- Wikipedia (EN), *Two New Sciences*: https://en.wikipedia.org/wiki/Two_New_Sciences
- Galileo and Einstein (University of Virginia), *Galileo on Projectiles*: https://galileoandeinstein.phys.virginia.edu/tns244.htm
- Wikipedia (EN), *Philosophiæ Naturalis Principia Mathematica*: https://en.wikipedia.org/wiki/Philosophi%C3%A6_Naturalis_Principia_Mathematica
- Wikipedia (EN), *Parallelogram of forces*: https://en.wikipedia.org/wiki/Parallelogram_of_forces
- MacTutor, *William Rowan Hamilton*: https://mathshistory.st-andrews.ac.uk/Biographies/Hamilton/
- Wikipedia (EN), *History of quaternions*: https://en.wikipedia.org/wiki/History_of_quaternions
- Wikipedia (EN), *Quaternion*: https://en.wikipedia.org/wiki/Quaternion
- Wikipedia (EN), *Classical Hamiltonian quaternions* (over de woorden scalar en vector): https://en.wikipedia.org/wiki/Classical_Hamiltonian_quaternions
- Wikipedia (EN), *Broom Bridge*: https://en.wikipedia.org/wiki/Broom_Bridge
- Wikipedia (EN), *Hamilton Walk*: https://en.wikipedia.org/wiki/Hamilton_Walk
- MacTutor, *Hermann Grassmann*: https://mathshistory.st-andrews.ac.uk/Biographies/Grassmann/
- Wikipedia (EN), *Josiah Willard Gibbs*: https://en.wikipedia.org/wiki/Josiah_Willard_Gibbs
- MacTutor, *Oliver Heaviside*: https://mathshistory.st-andrews.ac.uk/Biographies/Heaviside/
- Wikipedia (EN), *Euclidean vector* (geschiedenis): https://en.wikipedia.org/wiki/Euclidean_vector
- Wikipedia (EN), *Vector calculus*: https://en.wikipedia.org/wiki/Vector_calculus
- ProofWiki, *Dot Product, Historical Note* (notaties): https://proofwiki.org/wiki/Definition:Dot_Product/Historical_Note
- Afbeeldingen: Wikimedia Commons, *Simon Stevin - Voorblad van De Beghinselen der Weeghconst, 1586.png* (publiek domein): https://commons.wikimedia.org/wiki/File:Simon_Stevin_-_Voorblad_van_De_Beghinselen_der_Weeghconst,_1586.png; *Broombridge Hamilton Plaque.jpg* (Brendan Ward, CC0): https://commons.wikimedia.org/wiki/File:Broombridge_Hamilton_Plaque.jpg
