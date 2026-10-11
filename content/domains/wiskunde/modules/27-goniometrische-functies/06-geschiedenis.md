# Van koorden tot functies

De sinus die je in deze module gebruikt, is niet in één keer bedacht. Hij is de uitkomst van bijna twee duizend jaar werk, waarin steeds iets anders werd gevraagd van dezelfde cirkel. Eerst moest een koorde worden uitgerekend, dan een halve koorde, dan een verhouding en ten slotte een functie met een eigen leven. Dit hoofdstuk volgt dat pad. Het laat zien dat een veel gestelde vraag, "waarom radialen?", of "waarom heet het sinus?", een geschiedenis heeft.

## Koorden bij de Grieken

Voor Griekse astronomen was de hoek geen functiewaarde maar een stuk cirkelboog. Wilde je weten hoe ver twee sterren uit elkaar staan, dan zocht je de lengte van de rechte lijn tussen de eindpunten van die boog: de **koorde**. Hipparchus van Nicea stelde volgens de overlevering rond 140 v.Chr. de eerste koordentabel op, maar zijn werk is zelf niet bewaard gebleven. Het meest bekend is de tabel in de *Almagest* van Claudius Ptolemaeus (ca. 150 n.Chr.).

:::history De koordentabel van Ptolemaeus
Ptolemaeus verdeelde de cirkel in 360 graden en gaf zijn koorden bij stappen van een halve graad. Hij werkte met een cirkel met straal 60, een keuze die past bij het zestigtallig rekenen van de sterrenkunde uit die tijd. Zijn tabel is niet gebaseerd op losse metingen: hij leidde optelformules af, vergelijkbaar met onze $\sin(a+b)$ en $\sin(a-b)$, en stelde de tabel daarmee stap voor stap samen. Ptolemaeus' koorde $\operatorname{Crd}(2a)$ is, voor onze notatie, verbonden met de sinus: $\sin a=\tfrac{1}{120}\operatorname{Crd}(2a)$, bij straal 60.
:::

![Een koorde is tweemaal een sinus](/images/diagrams/m27-koorde-sinus.svg "De halve koorde bij een boog van 2a is de sinus van a (voor straal 1). Eigen diagram.")

De relatie is eenvoudig te zien. De koorde bij een middelpuntshoek $2a$ staat loodrecht op de straal die de hoek doormidden deelt. De helft van de koorde is dus de overstaande zijde in een rechthoekige driehoek met hoek $a$ en schuine zijde $r$. Voor straal 60 geeft dat $\tfrac12\operatorname{Crd}(2a)=60\sin a$, ofwel $\sin a=\tfrac{1}{120}\operatorname{Crd}(2a)$. Kort gezegd: Ptolemaeus rekende met de dubbele sinus.

## India: de halve koorde krijgt een naam

Indiase astronomen rekenden rechtstreeks met de halve koorde. Het sleutelwerk is de *Aryabhatiya* van Aryabhata (499), waarin tabellen van halve koorden staan die we nu echt sinustabellen kunnen noemen. De term die hij hiervoor gebruikte, was *jya*. Brahmagupta nam deze tabellen in 628 over in zijn *Brahmasphutasiddhanta*, en Bhaskara II gaf rond 1150 beschrijvingen van hoe je zulke tabellen opbouwt.

Hoe is dat woord bij ons terechtgekomen? Volgens MacTutor namen Arabische geleerden *jya* over als *jiba*, een woord dat in het Arabisch zelf niets betekende. Later werd het gelezen als *jaib*, wat 'plooi' of 'baai' betekent. Europese vertalers zetten dat om in het Latijnse *sinus*, met dezelfde betekenis. Zo is ons woord "sinus" het gevolg van een vertaalfout in een lange keten. De functie die je nu gebruikt, is dus genoemd naar een plooi of baai.

## Euler: van meetkunde naar functie

Tot de achttiende eeuw bleef de sinus een lengte in een cirkel met een bepaalde straal. Leonhard Euler veranderde dat. In zijn *Introductio in analysin infinitorum* (1748) behandelt hij in hoofdstuk 8 de goniometrische functies als transcendente grootheden die uit de cirkel voortkomen, op de eenheidscirkel en zonder dat er een vaste straal nodig is. De sinus was daarmee een functie van een getal, die je net als een macht of een logaritme kon optellen, differentiëren en in reeksen kon ontwikkelen. Het is Euler die hier het verband legt met de exponentiële functie:

$$e^{ix}=\cos x+i\sin x,$$

waarin $i$ de complexe eenheid is. Roger Cotes had een verwante relatie al ontdekt (gepubliceerd in 1722, na zijn dood): $ix=\ln(\cos x+i\sin x)$. Je hoeft deze formules in deze module niet te gebruiken, maar ze laten zien hoe diep de cirkel zit verweven met de exponentiële functie. Het is precies deze eenheid die golven in de natuurkunde en de elektrotechniek zo handig maakt.

## Cotes, Thomson en de radiaal

Dat een hoek zich laat uitdrukken als boog gedeeld door straal, is ook geen oude gewoonte. Roger Cotes (gestorven 1716) wordt gezien als degene die het concept bedacht; zijn neef Robert Smith gaf in 1722 in de *Harmonia mensurarum* waarschijnlijk de eerste gepubliceerde berekening van één radiaal in graden. Euler gebruikte de radiaal in 1765 impliciet als hoekeenheid. Maar een *naam* ontbrak nog lang. Het woord "radian" verscheen voor het eerst in druk op 5 juni 1873, in tentamenvragen van James Thomson aan het Queen's College in Belfast. Thomson gebruikte de term waarschijnlijk al vanaf 1871. Een andere wiskundige, Thomas Muir, aarzelde in 1869 nog tussen "rad", "radial" en "radian" en koos in 1874, na overleg met Thomson, voor "radian". Nog in 1890 sprak een schoolboek over "circular measure".

## Vooruitblik: Fourier

In 1807 presenteerde Joseph Fourier aan het Parijse Institut een verhandeling over de voortplanting van warmte in vaste lichamen. Daarin schreef hij functies als een som van sinussen en cosinussen. Joseph-Louis Lagrange en Pierre-Simon Laplace bleven in 1808 sceptisch over zulke trigonometrische reeksen. De Franse Académie bekroonde zijn werk in 1811, maar noemde het nog "niet algemeen en rigoureus genoeg". De definitieve uitgave, *Théorie analytique de la chaleur*, verscheen in 1822. Het idee, dat een ingewikkelde periodieke golf te bouwen is uit eenvoudige sinusgolven, vormt nu de basis van signaalverwerking en geluidsanalyse.

Sinusmodellen zoals je ze in les 5 opstelde, zijn dus de bouwstenen waarmee je in latere cursussen ingewikkelder patronen opbouwt. Niet elke herhaling is exact sinusvormig, en een gemeten cyclus hoeft niet altijd dezelfde periode te houden. De historische stap van meetkunde naar functies maakt modelleren mogelijk, maar ze vervangt geen controle met data.

{{ exercises: 27-022, 27-023, 27-043 }}

## Bronnen

- MacTutor, *Trigonometric functions*: [https://mathshistory.st-andrews.ac.uk/HistTopics/Trigonometric_functions/](https://mathshistory.st-andrews.ac.uk/HistTopics/Trigonometric_functions/)
- MacTutor, *Ptolemy*: [https://mathshistory.st-andrews.ac.uk/Biographies/Ptolemy/](https://mathshistory.st-andrews.ac.uk/Biographies/Ptolemy/)
- MacTutor, *Joseph Fourier*: [https://mathshistory.st-andrews.ac.uk/Biographies/Fourier/](https://mathshistory.st-andrews.ac.uk/Biographies/Fourier/)
- Wikipedia, *Radian* (geschiedenis van begrip en term): [https://en.wikipedia.org/wiki/Radian](https://en.wikipedia.org/wiki/Radian)
- Wikipedia, *Introductio in analysin infinitorum*: [https://en.wikipedia.org/wiki/Introductio_in_analysin_infinitorum](https://en.wikipedia.org/wiki/Introductio_in_analysin_infinitorum)
