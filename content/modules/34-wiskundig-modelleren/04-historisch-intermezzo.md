# Van Kepler tot de Deltawerken

Modelleren is zo oud als de wiskunde zelf: de Babyloniërs maakten rekenschema's voor de stand van maan en planeten, en Egyptische schrijvers berekenden rantsoenen en graanvoorraden. Maar vanaf de zeventiende eeuw verandert er iets. Modellen worden niet alleen *gebruikt*, ze worden ook *getoetst*, verworpen en verbeterd, en ze krijgen een verklarend mechanisme. In dit intermezzo volg je vier momenten uit die geschiedenis.

## 1. Kepler en Newton: van patroon naar mechanisme

Je zag in de introductie hoe Johannes Kepler (1571–1630) met de metingen van Tycho Brahe worstelde. Zijn cirkelmodel voor Mars week acht boogminuten af, terwijl Tycho's metingen op ongeveer twee boogminuten nauwkeurig waren. Kepler concludeerde dat het model fout was, niet de metingen. In de *Astronomia Nova* (1609) publiceerde hij zijn eerste twee wetten:

1. Een planeet beweegt in een **ellips**, met de zon in één van de brandpunten.
2. De lijn van zon naar planeet bestrijkt in gelijke tijden **gelijke oppervlakten**: dicht bij de zon beweegt de planeet sneller.

Tien jaar later, in *Harmonices Mundi* (1619), volgde de derde wet. Kepler vond haar volgens eigen zeggen in het voorjaar van 1618, na lang zoeken naar een verband tussen de omlooptijd $T$ van een planeet en haar gemiddelde afstand $a$ tot de zon:

$$
T^2 = a^3 \qquad (T \text{ in jaren, } a \text{ in astronomische eenheden})
$$

Eén astronomische eenheid (AE) is de gemiddelde afstand van de aarde tot de zon. Met moderne waarden zie je hoe goed dit klopt:

| Planeet | $a$ (AE) | $T$ (jaar) | $a^3$ | $T^2$ |
|---|---|---|---|---|
| Mercurius | 0{,}387 | 0{,}241 | 0{,}0580 | 0{,}0581 |
| Venus | 0{,}723 | 0{,}615 | 0{,}378 | 0{,}378 |
| Aarde | 1 | 1 | 1 | 1 |
| Saturnus | 9{,}537 | 29{,}46 | 867{,}4 | 867{,}9 |

Dit is een **empirisch model**: een patroon dat in de gegevens zit, zonder verklaring waarom. Kepler zelf zocht die verklaring in een soort kracht vanuit de zon, maar kon haar niet wiskundig uitwerken.

Dat deed Isaac Newton (1643–1727). In de *Philosophiæ Naturalis Principia Mathematica* (1687) liet hij zien dat Keplers wetten volgen uit drie bewegingswetten en één aanname over de zwaartekracht: de aantrekkingskracht tussen zon en planeet is omgekeerd evenredig met het kwadraat van hun afstand. Met de wiskunde die hij en Leibniz rond die tijd ontwikkelden (zie de modules 29 en 30) kon hij uit dat mechanisme de ellipsbanen *afleiden*.

Dat is een sprong in modelleren. Een empirisch model zegt: "zo gaat het". Een **mechanistisch model** zegt: "zo gaat het, en dit is waarom". Het tweede is veel krachtiger, omdat je het ook kunt gebruiken voor situaties die nog nooit gemeten zijn: kometen, de maan, later kunstmanen en ruimtesondes. Het blijft wél een model: aan het begin van de twintigste eeuw bleek dat Newtons theorie de baan van Mercurius net niet helemaal goed voorspelt, en dat Einsteins algemene relativiteitstheorie dat beter doet.

## 2. Malthus: een exponentieel model met grote gevolgen

![Thomas Robert Malthus](/images/history/m34-malthus.jpg "Thomas Robert Malthus, portret door John Linnell (1834). Wellcome Collection, via Wikimedia Commons, CC BY 4.0.")

In 1798 verscheen in Engeland anoniem *An Essay on the Principle of Population*. De schrijver bleek de predikant en econoom Thomas Robert Malthus (1766–1834). Zijn redenering was een model in de zin van deze module, met twee aannames:

- Een bevolking die nergens door wordt geremd, groeit **meetkundig** (exponentieel): 1, 2, 4, 8, 16, ...
- De voedselproductie kan hooguit **rekenkundig** (lineair) groeien: 1, 2, 3, 4, 5, ...

Als parameter gebruikte hij de Verenigde Staten, waar volgens hem de bevolking, met ruim voedsel en weinig belemmeringen voor vroege huwelijken, elke **25 jaar verdubbelde**. Een exponentiële functie wint het op den duur altijd van een lineaire. De conclusie van Malthus: zonder remming door ellende, honger of (later voegde hij toe) zelfbeheersing, moet de bevolking uiteindelijk tegen de grens van de voedselvoorraad aanlopen.

Malthus' model was enorm invloedrijk. Charles Darwin en Alfred Russel Wallace noemden het allebei als inspiratie voor het idee van natuurlijke selectie. Als voorspelling voor de wereld van de negentiende en twintigste eeuw bleek het echter niet te kloppen: de voedselproductie groeide door nieuwe landbouwtechniek veel sneller dan lineair, en in rijkere landen daalde het geboortecijfer. Beide **aannames** bleken in het lange tijdsbestek onjuist. Je rekent dit in de oefeningen na.

## 3. Verhulst: groei met een plafond

![Pierre François Verhulst](/images/history/m34-verhulst.jpg "Pierre François Verhulst (1804–1849). Via Wikimedia Commons, publiek domein.")

De Belgische wiskundige Pierre François Verhulst (1804–1849) las Malthus en zag het probleem: onbegrensde exponentiële groei kan niet. Onder invloed van zijn leermeester Adolphe Quetelet stelde hij in 1838 een model voor waarin de groei afremt naarmate de bevolking groter wordt. Hij publiceerde het in een korte *Notice sur la loi que la population suit dans son accroissement* in het tijdschrift *Correspondance mathématique et physique*.

Het idee: de relatieve groeisnelheid is niet constant, zoals bij Malthus, maar neemt af naarmate de bevolking haar maximum nadert. Dat leidt tot de S-vormige kromme die je in de casus over epidemieën zag. In een uitgebreider artikel uit 1845 gaf Verhulst haar de naam *logistique*; waarom precies is niet bekend. Hij vergeleek zijn model met bevolkingsgegevens van onder meer België en Frankrijk en schatte daaruit een plafond voor de Belgische bevolking. Zijn schattingen liepen per artikel uiteen; in later werk kwam hij volgens MacTutor op ongeveer 9,4 miljoen. Ter vergelijking: België heeft nu ruim 11 miljoen inwoners.

Verhulst' werk raakte grotendeels in vergetelheid. In 1920 vonden de Amerikanen Raymond Pearl en Lowell Reed dezelfde kromme opnieuw uit voor de bevolking van de Verenigde Staten. Pas daarna kreeg Verhulst erkenning. Vandaag is de logistische functie overal: in de ecologie, de epidemiologie, de economie (verspreiding van nieuwe producten) en in de statistiek, als basis van logistische regressie.

## 4. Van Dantzig en de Deltawerken: hoe hoog moet een dijk zijn?

![Watersnood 1953, Gouderak](/images/history/m34-watersnood-gouderak.jpg "Watersnood, 1 februari 1953, Gouderak: vee wordt over een zwaar beschadigde dijk in veiligheid gebracht. Foto Anefo, Nationaal Archief, via Wikimedia Commons, CC0.")

In de nacht van 31 januari op 1 februari 1953 brak een zware noordwesterstorm, samen met springtij, de dijken in Zeeland, West-Brabant en de Zuid-Hollandse eilanden. Volgens het KNMI kwamen in Nederland 1836 mensen om. Ongeveer 165.000 hectare land liep onder en tienduizenden mensen moesten worden geëvacueerd.

Op 18 februari 1953 stelde de regering de **Deltacommissie** in. Die moest adviseren hoe zo'n ramp voortaan kon worden voorkomen. Eén van de kernvragen was: **hoe hoog moeten de dijken worden?** Een oneindig hoge dijk bestaat niet, en elke meter extra kost honderden miljoenen. Maar een te lage dijk kan een ramp veroorzaken die nog veel meer kost.

De commissie vroeg de wiskundige David van Dantzig (1900–1959) om dit als econometrisch beslissingsprobleem te formuleren. Zijn artikel *Economic decision problems for flood prevention* verscheen in 1956 in het tijdschrift *Econometrica*. Het model volgt precies de cyclus van deze module:

- **Aannames.** De kans dat het water in een jaar boven een hoogte $h$ komt, neemt **exponentieel** af met $h$: elke paar decimeter extra hoogte maakt een overstroming een vast aantal keren minder waarschijnlijk. Dit volgde uit de statistiek van gemeten stormvloeden. Een overstroming veroorzaakt een schade $D$, en die schade telt mee voor alle toekomstige jaren, verdisconteerd met een rentevoet.
- **Model.** De totale kosten zijn de som van de **investering** (vaste kosten plus een bedrag per meter dijkverhoging) en het **verwachte verlies** (kans op overstroming maal schade, opgeteld over de toekomst). Hoe hoger de dijk, hoe hoger de investering maar hoe lager het verwachte verlies.
- **Oplossen.** De optimale hoogte is die waar de totale kosten minimaal zijn: precies waar een extra centimeter dijk evenveel kost als hij aan verwacht verlies bespaart. Met differentiaalrekening (module 29) vind je dat punt.

Met de getallen voor Centraal-Holland kwam Van Dantzig uit op een optimale overschrijdingskans in de orde van 1 op 100.000 per jaar. De Deltacommissie koos in haar advies voor de dijken van Centraal-Holland een norm van **1 op 10.000 per jaar**: de dijk moet een waterstand keren die gemiddeld eens in de tienduizend jaar wordt overschreden. Voor andere gebieden, met minder inwoners en minder economische waarde, werden lagere normen gekozen. De Deltawet volgde in 1958; de Oosterscheldekering kwam gereed in 1986 en de Maeslantkering in 1997.

Wat dit voorbeeld bijzonder maakt: het model legt een **politieke afweging** bloot. Hoeveel is veiligheid waard? Welke rentevoet gebruik je? Hoe waardeer je mensenlevens? De wiskunde beslist dat niet, maar dwingt wel om die keuzes expliciet te maken. De aanpak van Van Dantzig wordt in aangepaste vorm nog steeds gebruikt bij het vaststellen van de Nederlandse waterveiligheidsnormen. In de praktijkles reken je zijn model zelf door.

## 5. George Box: "alle modellen zijn fout"

De Britse statisticus George E.P. Box (1919–2013) werkte zijn hele loopbaan aan het bouwen van modellen uit experimentele gegevens. Van hem stamt de bekendste uitspraak over modelleren. Hoe die precies luidt, en waar ze staat, wordt vaak verkeerd geciteerd:

- In het artikel *Science and Statistics* (*Journal of the American Statistical Association*, 1976) schreef Box: "Since all models are wrong the scientist cannot obtain a 'correct' one by excessive elaboration", en even verder: "Since all models are wrong the scientist must be alert to what is importantly wrong. It is inappropriate to be concerned about mice when there are tigers abroad."
- De bekende korte vorm, *"All models are wrong but some are useful"*, staat als tussenkop in zijn hoofdstuk *Robustness in the strategy of scientific model building* in de bundel *Robustness in Statistics* (1979).
- In het leerboek *Empirical Model-Building and Response Surfaces* van Box en Draper (1987) staat: "Essentially, all models are wrong, but some are useful."

De gedachte is precies die van deze module. Een model is een vereenvoudiging en dus nooit helemaal juist. Daarom heeft het geen zin om het eindeloos ingewikkelder te maken in de hoop dat het "waar" wordt. De vraag is altijd: welke fouten doen ertoe voor mijn doel? Kepler zou het met hem eens zijn geweest: acht boogminuten waren een tijger, geen muis.

## Bronnen

- MacTutor History of Mathematics, *Johannes Kepler*: https://mathshistory.st-andrews.ac.uk/Biographies/Kepler/
- Wikipedia (EN), *Kepler's laws of planetary motion*: https://en.wikipedia.org/wiki/Kepler%27s_laws_of_planetary_motion
- Case Western Reserve University, *Kepler Applies the Scientific Method* (citaat over de acht boogminuten): https://astroweb.case.edu/ssm/gened/quothkepler.html
- Wikipedia (EN), *An Essay on the Principle of Population*: https://en.wikipedia.org/wiki/An_Essay_on_the_Principle_of_Population
- Malthus, *An Essay on the Principle of Population* (1798), hoofdstuk 2: https://www.marxists.org/reference/subject/economics/malthus/ch02.htm
- Wikipedia (EN), *Pierre François Verhulst*: https://en.wikipedia.org/wiki/Pierre_Fran%C3%A7ois_Verhulst
- MacTutor History of Mathematics, *Pierre François Verhulst*: https://mathshistory.st-andrews.ac.uk/Biographies/Verhulst/
- Wikipedia (EN), *Logistic function* (geschiedenis): https://en.wikipedia.org/wiki/Logistic_function
- Wikipedia (NL), *Watersnoodramp van 1953*: https://nl.wikipedia.org/wiki/Watersnoodramp_van_1953
- Wikipedia (NL), *Deltacommissie (1953)*: https://nl.wikipedia.org/wiki/Deltacommissie_(1953)
- Wikipedia (EN), *David van Dantzig*: https://en.wikipedia.org/wiki/David_van_Dantzig
- TU Delft, *Risk and Reliability*, optimalisatievoorbeeld dijkhoogte (Van Dantzigs getallen): https://interactivetextbooks.tudelft.nl/risk-reliability/risk-evaluation/example-dike-height.html
- Rijkswaterstaat/VLIZ over basispeilen met overschrijdingsfrequentie 1/10.000 per jaar: https://www.vliz.be/imisdocs/publications/ocrd/115927.pdf
- Wikipedia (EN), *All models are wrong*: https://en.wikipedia.org/wiki/All_models_are_wrong
- R. Wicklin, *Did George Box say "All models are wrong, but some are useful"?* (SAS-blog, 2025): https://blogs.sas.com/content/iml/2025/04/02/all-models-are-wrong.html
- Wikipedia (EN), *Fermi problem*: https://en.wikipedia.org/wiki/Fermi_problem
- Afbeeldingen: Wikimedia Commons, *Kepler Mars retrograde.jpg* (publiek domein): https://commons.wikimedia.org/wiki/File:Kepler_Mars_retrograde.jpg; *Thomas Robert Malthus Wellcome L0069037 -crop.jpg* (John Linnell, Wellcome Collection, CC BY 4.0): https://commons.wikimedia.org/wiki/File:Thomas_Robert_Malthus_Wellcome_L0069037_-crop.jpg; *Pierre Francois Verhulst.jpg* (publiek domein): https://commons.wikimedia.org/wiki/File:Pierre_Francois_Verhulst.jpg; *Watersnood 1953, Bestanddeelnr 059-1000.jpg* (Anefo, Nationaal Archief, CC0): https://commons.wikimedia.org/wiki/File:Watersnood_1953,_Bestanddeelnr_059-1000.jpg
