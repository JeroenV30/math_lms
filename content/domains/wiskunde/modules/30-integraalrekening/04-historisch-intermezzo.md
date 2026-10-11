# Van uitputting tot Riemann

De integraalrekening heeft een merkwaardige geschiedenis. Het idee van oppervlakten benaderen met steeds fijnere stukjes is meer dan tweeduizend jaar oud. Maar het duurde tot de zeventiende eeuw voordat iemand zag dat oppervlakte en raaklijn bij elkaar horen, en tot de negentiende eeuw voordat iemand precies kon zeggen wat een integraal eigenlijk *is*. In dit intermezzo volg je die lange lijn.

## Eudoxus en de uitputtingsmethode

De Griekse wiskundigen wisten dat je een cirkel kunt benaderen met een regelmatige veelhoek, en dat de benadering beter wordt naarmate de veelhoek meer zijden heeft. Al in de vijfde eeuw v.Chr. schijnt de sofist Antiphon geopperd te hebben dat een veelhoek met heel veel zijden uiteindelijk "samenvalt" met de cirkel. Wat hij daar precies mee bedoelde, weten we niet; zijn werk is alleen uit latere vermeldingen bekend.

Het grote probleem was het oneindige. Een veelhoek valt nooit echt samen met een cirkel, hoeveel zijden je ook neemt. Hoe kun je dan iets *bewijzen* over de cirkel zelf? Het antwoord wordt toegeschreven aan **Eudoxus van Knidos** (vierde eeuw v.Chr.). Zijn methode, die pas in 1647 de naam *uitputtingsmethode* kreeg (van de Vlaamse jezuïet Grégoire de Saint-Vincent), werkt zo:

1. Je vermoedt dat een gebogen figuur oppervlakte $A$ heeft.
2. Je laat zien dat je met ingeschreven veelhoeken het verschil met de figuur kleiner kunt maken dan **elke** gegeven hoeveelheid, hoe klein ook. De figuur wordt als het ware "uitgeput".
3. Je neemt aan dat de oppervlakte groter is dan $A$ en leidt een tegenspraak af. Daarna neem je aan dat ze kleiner is dan $A$ en leidt weer een tegenspraak af.
4. Conclusie: de oppervlakte is precies $A$.

Dit is een volkomen streng bewijs, en het vermijdt het oneindige helemaal: er wordt nergens een limiet "genomen", er worden alleen eindige veelhoeken vergeleken. De prijs is dat je het antwoord $A$ al moet kennen voordat je begint.

In **Euclides' Elementen** (ca. 300 v.Chr.) staat de methode in boek XII. Daar bewijst Euclides onder meer dat de oppervlakten van twee cirkels zich verhouden als de kwadraten van hun middellijnen (stelling XII.2). In moderne taal: de oppervlakte van een cirkel is een vaste constante maal $d^2$. Welke constante dat is, zegt Euclides niet.

## Archimedes: de parabool en de cirkel

**Archimedes van Syracuse** (ca. 287–212 v.Chr.) maakte van de uitputtingsmethode een rekeninstrument. Drie resultaten springen eruit.

**De cirkel.** In *De meting van de cirkel* bewijst Archimedes dat de oppervlakte van een cirkel gelijk is aan die van een rechthoekige driehoek met de straal als de ene rechthoekszijde en de omtrek als de andere. In onze notatie: $A = \tfrac12 \cdot r \cdot 2\pi r = \pi r^2$. In hetzelfde werk sluit hij de verhouding tussen omtrek en middellijn in met regelmatige 96-hoeken binnen en buiten de cirkel:

$$
3\tfrac{10}{71} < \pi < 3\tfrac17.
$$

**De parabool.** In *De kwadratuur van de parabool*, opgedragen aan Dositheus, bewijst hij het resultaat uit de introductie: een parabolisch segment is $\tfrac43$ van de ingeschreven driehoek met dezelfde basis en hetzelfde "hoogste" punt. Zijn meetkundige bewijs vult het segment met driehoeken. Na de eerste driehoek passen er in de twee overgebleven stukken twee nieuwe driehoeken die samen $\tfrac14$ van de eerste zijn; in de vier stukken daarna passen driehoeken die samen weer $\tfrac14$ daarvan zijn, enzovoort. De totale oppervlakte is dus

$$
T \left( 1 + \tfrac14 + \tfrac1{16} + \tfrac1{64} + \cdots \right) = \tfrac43\, T.
$$

Dat is een meetkundige reeks (module 28). Archimedes sommeerde die niet met een limiet, maar met een slimme eindige identiteit en een dubbel bewijs uit het ongerijmde: de oppervlakte kan niet groter en niet kleiner zijn dan $\tfrac43 T$.

**De methode.** Hoe kwam Archimedes eigenlijk op zijn antwoorden? Lange tijd wist niemand dat. In 1906 identificeerde de Deense filoloog Johan Ludvig Heiberg in Constantinopel een gebedenboek waarvan het perkament in de dertiende eeuw was hergebruikt: onder de gebeden bleek een afgeschraapte tiende-eeuwse kopie van werken van Archimedes te zitten. Daarin stond het enige bekende exemplaar van *De methode van de mechanische stellingen*. Archimedes legt daarin uit dat hij figuren in gedachten opbouwt uit oneindig veel evenwijdige lijnstukjes en die op een hefboom tegen elkaar laat "wegen". Hij beschouwt dat zelf niet als bewijs, alleen als manier om het antwoord te vinden; het bewijs volgt daarna met de uitputtingsmethode. Het palimpsest werd in 1998 geveild en is daarna met ultraviolet-, infrarood- en röntgenfluorescentiebeelden grotendeels leesbaar gemaakt.

![Pagina uit het Archimedes-palimpsest](/images/history/m30-archimedes-palimpsest.jpg "Een opengevouwen blad uit het Archimedes-palimpsest: onder de dertiende-eeuwse gebedstekst staat een tiende-eeuwse kopie van werken van Archimedes. Foto: The Walters Art Museum, via Wikimedia Commons, CC BY 3.0.")

Onafhankelijk van de Grieken werkte ook de Chinese wiskundige **Liu Hui** in de derde eeuw n.Chr. met veelhoeken met steeds meer zijden om de oppervlakte van de cirkel te benaderen, in zijn commentaar op de *Negen Hoofdstukken*.

## Kepler en Cavalieri: denken in plakjes

Na de oudheid bleef de uitputtingsmethode bewonderd maar weinig gebruikt: hij is lastig, en je moet het antwoord vooraf weten. In de zeventiende eeuw kozen wiskundigen voor een minder streng maar veel vruchtbaarder idee: een figuur **bestaat uit** oneindig veel oneindig dunne plakjes.

**Johannes Kepler** trouwde in 1613 voor de tweede keer, in Linz. Bij de bruiloft zag hij hoe wijnhandelaars de inhoud van een vat bepaalden met één peilstok die schuin door het spongat werd gestoken. Hij vroeg zich af of dat wel kon kloppen voor vaten van verschillende vormen. Het resultaat was zijn *Nova stereometria doliorum vinariorum* ("Nieuwe ruimtemeetkunde van wijnvaten", Linz, 1615). Kepler denkt zich een vat opgebouwd uit dunne schijfjes en telt hun inhouden op: in wezen een Riemann-som voor een inhoud.

**Bonaventura Cavalieri** (1598–1647), leerling en correspondent van Galilei en vanaf 1629 hoogleraar in Bologna, maakte van dat idee een systematische methode. In zijn *Geometria indivisibilibus continuorum nova quadam ratione promota* (voltooid in 1627, gepubliceerd in 1635) beschouwt hij een vlakke figuur als de verzameling van al haar evenwijdige lijnstukken (de **ondeelbaren**, *indivisibilia*) en een lichaam als de stapel van al zijn vlakke doorsneden. Het bekendste gevolg is het **principe van Cavalieri**: als twee lichamen op elke hoogte doorsneden met dezelfde oppervlakte hebben, dan hebben ze dezelfde inhoud. Met zijn methode berekende Cavalieri ook de oppervlakte onder $y = x^n$ voor $n$ tot en met $9$: in onze notatie $\int_0^a x^n\,dx = \dfrac{a^{n+1}}{n+1}$.

![Titelpagina van Cavalieri's Geometria indivisibilibus](/images/history/m30-cavalieri-geometria.jpg "Titelpagina van Cavalieri's Geometria indivisibilibus continuorum (tweede druk, Bologna, 1653; eerste druk 1635). Foto: BEIC, via Wikimedia Commons, publiek domein.")

De methode was omstreden. De jezuïet Paul Guldin wierp tegen dat lijnen, hoeveel ook, nooit samen een oppervlak kunnen vormen: een lijn heeft geen breedte. Cavalieri reageerde in 1647 met de *Exercitationes geometricae sex*, een verbeterde uiteenzetting die voor veel zeventiende-eeuwse wiskundigen het standaardwerk werd. In de jaren daarna berekenden onder anderen Fermat, Roberval en Torricelli oppervlakten onder steeds meer krommen, en John Wallis breidde in 1656 de formule voor $x^n$ uit naar gebroken en negatieve exponenten.

## Newton en Leibniz: de omkering

Rond 1660 lagen twee grote vraagstukken op tafel: **raaklijnen** (de afgeleide, module 29) en **oppervlakten** (de integraal). Voor beide waren slimme methoden bekend, maar telkens voor afzonderlijke krommen.

De eerste die in druk een (meetkundige) vorm van het verband tussen beide gaf, was waarschijnlijk de Schot **James Gregory** in 1668. **Isaac Barrow**, de leermeester van Newton in Cambridge, gaf in zijn *Lectiones geometricae* (1670) een algemenere meetkundige versie. Maar in hun werk is het een stelling tussen vele andere; het bleef bij meetkunde.

**Isaac Newton** (1642–1727) werkte zijn "methode van de fluxies" uit in 1665–1666, de jaren waarin de universiteit van Cambridge wegens de pest gesloten was. Hij zag oppervlakte als iets wat *groeit* terwijl een lijn over de figuur beweegt, en de groeisnelheid van die oppervlakte als de hoogte van de kromme: precies het argument van les 4. Zijn verhandeling *De analysi* (1669) circuleerde in handschrift via Barrow en John Collins, maar werd pas in 1711 gedrukt; zijn *Methode van de fluxies* (geschreven rond 1671) verscheen pas in 1736, na zijn dood.

**Gottfried Wilhelm Leibniz** (1646–1716) ontwikkelde onafhankelijk een eigen versie tijdens zijn verblijf in Parijs (1672–1676), waar Christiaan Huygens hem in de wiskunde begeleidde. Leibniz dacht vanuit sommen en verschillen van rijen getallen. In een manuscript van **29 oktober 1675** schrijft hij dat het nuttig is om in plaats van *omn.* (van *omnes lineae*, "alle lijnen", de ondeelbaren van Cavalieri) een lange S te schrijven: $\int$, van *summa*. Kort daarna voerde hij ook de $d$ voor verschillen in. De notatie $\int f(x)\,dx$ is dus letterlijk "de som van de strookjes $f(x)$ maal $dx$".

Leibniz publiceerde eerst over de differentiaalrekening (*Nova methodus pro maximis et minimis*, 1684) en in 1686 over de integraalrekening, beide in het tijdschrift *Acta Eruditorum*; in dat tweede artikel verscheen het teken $\int$ voor het eerst in druk. De naam *calculus integralis* werd rond 1690 door Jacob Bernoulli voorgesteld.

Omdat Newton zo laat publiceerde, ontstond een bittere strijd over de vraag wie de eerste was. In 1712 stelde de Royal Society, waarvan Newton president was, een commissie in; haar rapport (de *Commercium epistolicum*, begin 1713) gaf Newton gelijk en was grotendeels door Newton zelf gestuurd. Historici zijn het er nu over eens dat beiden de calculus **onafhankelijk** van elkaar ontdekten: Newton eerder, Leibniz eerder in druk en met de notatie die we nog steeds gebruiken.

## Euler: de integraalrekening als vak

In de achttiende eeuw werd de calculus vooral uitgebouwd, niet gefundeerd. **Leonhard Euler** (1707–1783) speelde daarin een hoofdrol. In zijn drie delen *Institutiones calculi integralis* (1768–1770) behandelde hij de integraalrekening als een systematisch vak met technieken voor allerlei soorten functies. Voor Euler was integreren in de eerste plaats *primitiveren*: de integraal was de omkering van het differentiëren. De vraag wat een oppervlakte onder een willekeurige, misschien heel grillige grafiek eigenlijk is, stond nog niet centraal.

## Cauchy en Riemann: wat is een integraal?

In de negentiende eeuw veranderde dat. Wiskundigen werkten met functies die zo onregelmatig waren dat "zoek een primitieve" niet meer volstond, en ze wilden de calculus op een stevige basis zetten.

**Augustin-Louis Cauchy** definieerde in zijn *Résumé des leçons* (1823) de integraal van een continue functie als limiet van sommen over een verdeling van het interval, en bewees daarmee de hoofdstelling. De integraal was nu weer een **som**, zoals bij Leibniz, maar nu met een precieze limiet.

**Bernhard Riemann** (1826–1866) gaf in 1854 in Göttingen een algemenere definitie, in zijn habilitatieschrift over de voorstelbaarheid van functies door goniometrische reeksen (gepubliceerd in 1868, na zijn dood). Hij liet de punten $x_k$ in elk stukje vrij kiezen en vroeg: voor welke functies hebben al die sommen dezelfde limiet? Zijn antwoord bepaalt tot vandaag wat in de meeste studieboeken een "integreerbare functie" heet, en daarom spreken we van **Riemann-sommen**. In 1875 gaf Gaston Darboux een gelijkwaardige formulering met precies de ondersommen en bovensommen uit les 1.

Daarmee was het verhaal niet af. In 1902 publiceerde Henri Lebesgue een nog algemenere integraal, die in de moderne kansrekening en analyse de standaard is. Maar de kern is in vierentwintig eeuwen niet veranderd: **een oppervlakte is de limiet van sommen van steeds kleinere stukjes**, en dankzij Newton en Leibniz kun je die limiet in veel gevallen berekenen met een primitieve.

:::summary De lijn in jaartallen
- **4e eeuw v.Chr.** Eudoxus: uitputtingsmethode. **Ca. 300 v.Chr.** Euclides, Elementen boek XII.
- **3e eeuw v.Chr.** Archimedes: cirkel, $\pi$ tussen $3\tfrac{10}{71}$ en $3\tfrac17$, parabolisch segment $= \tfrac43$ driehoek.
- **1615** Kepler, wijnvaten. **1635** Cavalieri, ondeelbaren.
- **1665–1666** Newton, fluxies. **1668–1670** Gregory en Barrow, meetkundige hoofdstelling.
- **29 oktober 1675** Leibniz introduceert $\int$. **1684/1686** Leibniz publiceert.
- **1768–1770** Euler, *Institutiones calculi integralis*.
- **1823** Cauchy, integraal als limiet. **1854** Riemann, algemene definitie.
:::

## Bronnen

- MacTutor History of Mathematics, *Bonaventura Francesco Cavalieri*: https://mathshistory.st-andrews.ac.uk/Biographies/Cavalieri/
- MacTutor, *Gottfried Wilhelm von Leibniz*: https://mathshistory.st-andrews.ac.uk/Biographies/Leibniz/
- MacTutor, *Isaac Barrow*: https://mathshistory.st-andrews.ac.uk/Biographies/Barrow/
- MacTutor, *Johannes Kepler*: https://mathshistory.st-andrews.ac.uk/Biographies/Kepler/
- MacTutor, *Bernhard Riemann*: https://mathshistory.st-andrews.ac.uk/Biographies/Riemann/
- MacTutor, *The rise of calculus*: https://mathshistory.st-andrews.ac.uk/HistTopics/The_rise_of_calculus/
- Wikipedia, *The Quadrature of the Parabola*: https://en.wikipedia.org/wiki/The_Quadrature_of_the_Parabola
- Wikipedia, *Measurement of a Circle*: https://en.wikipedia.org/wiki/Measurement_of_a_Circle
- Wikipedia, *Method of exhaustion*: https://en.wikipedia.org/wiki/Method_of_exhaustion
- Wikipedia, *Archimedes Palimpsest*: https://en.wikipedia.org/wiki/Archimedes_Palimpsest
- Wikipedia, *Cavalieri's quadrature formula*: https://en.wikipedia.org/wiki/Cavalieri%27s_quadrature_formula
- Wikipedia, *Integral symbol*: https://en.wikipedia.org/wiki/Integral_symbol
- ProofWiki, *Integral Sign/Historical Note*: https://proofwiki.org/wiki/Definition:Integral_Sign/Historical_Note
- Wikipedia, *Fundamental theorem of calculus*: https://en.wikipedia.org/wiki/Fundamental_theorem_of_calculus
- Wikipedia, *Leibniz–Newton calculus controversy*: https://en.wikipedia.org/wiki/Leibniz%E2%80%93Newton_calculus_controversy
- Wikipedia, *Riemann integral*: https://en.wikipedia.org/wiki/Riemann_integral
- Encyclopedia of Mathematics, *Cauchy integral*: https://encyclopediaofmath.org/wiki/Cauchy_integral
- MacTutor, *Henri Lebesgue* (extra): https://mathshistory.st-andrews.ac.uk/Extras/Lebesgue_extra/
- Wikimedia Commons, *ArPalimTypPage.jpg*: https://commons.wikimedia.org/wiki/File:ArPalimTypPage.jpg
- Wikimedia Commons, Cavalieri, *Geometria indivisibilibus* (1653): https://commons.wikimedia.org/wiki/File:Cavalieri_-_Geometria_indivisibilibus_continuorum_nova_quadam_ratione_promota,_1653_-_1250292.jpg
