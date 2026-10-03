# Van cholerakaart tot data science

De technieken uit deze module zijn niet in één keer bedacht. Ze ontstonden uit concrete problemen: een epidemie in een Londense wijk, sterfte in een legerziekenhuis, de vraag hoe je erfelijkheid kunt meten, en later de vloed aan gegevens die computers opleverden. In dit intermezzo volg je die lijn, van 1854 tot nu.

## 1. John Snow en de pomp in Broad Street (1854)

**John Snow** (1813–1858) was een Londense arts die vooral bekend was als pionier van de anesthesie: hij gaf koningin Victoria chloroform bij de geboorte van twee van haar kinderen (1853 en 1857). Daarnaast was hij al jaren gefascineerd door cholera. In 1849 had hij een essay gepubliceerd, *On the Mode of Communication of Cholera*, waarin hij betoogde dat de ziekte zich via besmet water verspreidde en niet via "miasma", bedorven lucht. Bijna niemand geloofde hem.

Toen eind augustus 1854 de uitbraak in Soho begon (zie de introductie van deze module), woonde Snow vlak bij de wijk. Hij verzamelde de adressen van de overledenen, liep de straten af en ondervroeg nabestaanden. Het patroon was duidelijk: de doden waren geconcentreerd rond de pomp in Broad Street. Snow vond ook de uitzonderingen die de regel bevestigden.

- In het **armenhuis** in Poland Street, vlak bij de pomp, woonden ruim vijfhonderd mensen. Er vielen naar verhouding weinig slachtoffers (bronnen noemen er vijf). Het armenhuis had een eigen put.
- Van de ongeveer **zeventig arbeiders van de brouwerij** in Broad Street stierf niemand. De brouwerij had een eigen put, en de mannen dronken vooral het bier dat ze zelf brouwden.
- Omgekeerd vond Snow slachtoffers die ver van Broad Street woonden, maar die bewust water uit die pomp lieten halen omdat ze de smaak lekker vonden.

Op 7 september legde Snow zijn gegevens voor aan het bestuur van de parochie St. James. De volgende dag, **8 september 1854**, werd de zwengel van de pomp verwijderd. Snow merkte zelf eerlijk op dat de epidemie op dat moment waarschijnlijk al afnam, onder meer doordat veel bewoners waren gevlucht. De zwengel verwijderen bewees dus op zichzelf weinig.

:::tip De kaart kwam later
De beroemde kaart met de zwarte streepjes was niet het instrument waarmee Snow de pomp ontdekte. Hij tekende haar ná de uitbraak, als **bewijsstuk**. Hij presenteerde haar eind 1854 en publiceerde haar in 1855, in de tweede, sterk uitgebreide druk van *On the Mode of Communication of Cholera*. Een tweede versie, voor het onderzoekscomité van de parochie, bevat een stippellijn die de punten verbindt die over de weg even ver van de pomp in Broad Street liggen als van de dichtstbijzijnde andere pomp. Binnen die lijn vielen bijna alle doden. Een kaart is in deze zin een vorm van data-analyse: hij maakt een patroon voor iedereen zichtbaar.
:::

Ook de hulppredikant **Henry Whitehead** van de plaatselijke kerk, die aanvankelijk niets van Snows theorie moest hebben, ging de wijk in om Snow te weerleggen. Hij raakte juist overtuigd, en hij vond waarschijnlijk de bron: de luiers van een ziek kindje werden geleegd in een beerput op nog geen meter van de pomp.

### Het "grote experiment"

Snows sterkste bewijs kwam niet uit Soho, maar uit Zuid-Londen. Daar leverden twee waterbedrijven water aan dezelfde wijken, vaak aan huizen in dezelfde straat. De Southwark and Vauxhall Company haalde haar water uit de Theems in het centrum van Londen, waar het riool op de rivier loosde. De Lambeth Company had haar inlaat in 1852 verplaatst naar Seething Wells bij Thames Ditton, ver stroomopwaarts van de stad. Snow schreef dat beide bedrijven rijk en arm, grote en kleine huizen bedienden. Het belangrijkste systematische verschil was dus de herkomst van het water.

| waterbedrijf | aantal huizen | cholerasterfgevallen | per 10.000 huizen |
|---|---|---|---|
| Southwark & Vauxhall | 40.046 | 1.263 | 315 |
| Lambeth | 26.107 | 98 | 37 |
| rest van Londen | 256.423 | 1.422 | 59 |

Let op de laatste kolom. Het kale aantal doden zegt weinig, want Southwark & Vauxhall bediende meer huizen. Pas de **verhouding** per 10.000 huizen maakt de bedrijven vergelijkbaar. Dat is precies de valkuil die je in les 4 tegenkwam: vergelijk geen absolute aantallen als de groepen verschillend groot zijn. Snows vergelijking is een vroeg voorbeeld van een *natuurlijk experiment*: de natuur (of hier: de markt) had de "loting" al gedaan.

Snow overleed in 1858, voordat zijn theorie algemeen werd aanvaard. Pas in 1883 isoleerde Robert Koch de cholerabacterie. (De Italiaan Filippo Pacini had haar al in 1854 onder de microscoop beschreven, maar zijn werk bleef lang onopgemerkt.)

{{ exercise: 35-031 }}

## 2. Florence Nightingale en het rozediagram (1858)

**Florence Nightingale** (1820–1910) kennen de meeste mensen als de verpleegster met de lamp uit de Krimoorlog. Minder bekend is dat ze ook een begaafd statisticus was. In november 1854 kwam ze met een groep verpleegsters aan in het Britse legerhospitaal in Scutari (het huidige Üsküdar in Istanbul). De omstandigheden waren rampzalig. De meeste soldaten stierven niet aan hun verwondingen, maar aan besmettelijke ziekten zoals cholera, tyfus en dysenterie.

Volgens de cijfers die Nightingale later verwerkte, stierven in **januari 1855**, de ergste maand, in de Britse veldhospitalen 2.761 soldaten aan besmettelijke ziekten, 83 aan verwondingen en 324 aan andere oorzaken: samen 3.168. Na verbeteringen in hygiëne, ventilatie, water en voeding daalde de sterfte in de loop van 1855 sterk.

Terug in Engeland wilde Nightingale de regering en het leger overtuigen van structurele hervormingen. Samen met de statisticus **William Farr** analyseerde ze de sterftecijfers. In 1858 verscheen haar rapport *Notes on Matters Affecting the Health, Efficiency, and Hospital Administration of the British Army*, met daarin het diagram dat haar beroemd maakte.

![Rozediagram van Nightingale](/images/history/m35-nightingale-rozediagram.jpg "Florence Nightingale, Diagram of the Causes of Mortality in the Army in the East (1858). Rechts april 1854 – maart 1855, links april 1855 – maart 1856. Blauw: vermijdbare besmettelijke ziekten; rood: verwondingen; zwart: overige oorzaken. Via Wikimedia Commons, publiek domein.")

Elke wig is één maand. De **oppervlakte** van de wig, gemeten vanuit het middelpunt, is evenredig met het aantal doden, zoals Nightingale zelf onder het diagram uitlegt. Precies daardoor is de grafiek eerlijk (vergelijk les 4). De boodschap springt eruit: de enorme blauwe wiggen (ziekte) overschaduwen de kleine rode (verwondingen). Het leger verloor zijn soldaten niet in de eerste plaats op het slagveld, maar in het ziekenhuis.

Nightingale werd in 1858 als eerste vrouw gekozen tot lid van de Statistical Society of London, de latere Royal Statistical Society. (Sommige bronnen noemen 1859.) In 1874 werd ze erelid van de American Statistical Association. Haar werk laat zien dat een grafiek niet alleen een samenvatting is, maar ook een **argument**.

{{ exercise: 35-032 }}

## 3. Karl Pearson: correlatie meten (rond 1896)

In de tweede helft van de 19e eeuw probeerden Francis Galton en anderen de erfelijkheid van eigenschappen zoals lichaamslengte te meten. Daaruit ontstonden de begrippen **regressie** en **correlatie**. De Britse wiskundige **Karl Pearson** (1857–1936) gaf de correlatiecoëfficiënt rond 1896 de vorm die we nu nog gebruiken; je leert hem in module 40 berekenen. Pearson introduceerde ook de term *standard deviation* (in 1893–1894) en richtte in 1901, samen met Galton en Walter Weldon, het tijdschrift *Biometrika* op.

Pearson was zich al bewust van de valkuilen. In 1897 waarschuwde hij voor *spurious correlation*: schijnbare correlatie die ontstaat doordat je verhoudingen met elkaar vergelijkt die een gemeenschappelijke noemer hebben. En in 1899 beschreef hij, net als Udny Yule in 1903, effecten die we nu tot Simpsons paradox rekenen.

## 4. John Tukey en de exploratieve data-analyse (1977)

**John Wilder Tukey** (1915–2000) was een van de veelzijdigste statistici van de 20e eeuw. Hij werkte tegelijk aan de Universiteit van Princeton en bij de Bell Laboratories. Hij ontwikkelde met James Cooley in 1965 de *snelle Fouriertransformatie* (FFT), een algoritme dat nog altijd in vrijwel elk apparaat met signaalverwerking zit, en hij wordt algemeen genoemd als de bedenker van het woord *bit* voor een binair cijfer.

In 1962 publiceerde Tukey een invloedrijk artikel, *The Future of Data Analysis*, waarin hij schreef dat zijn eigenlijke interesse niet bij de wiskundige statistiek lag, maar bij data-analyse: het hele proces van het verzamelen, bekijken en interpreteren van gegevens. In 1970 introduceerde hij de **boxplot**, en in 1977 verscheen zijn boek *Exploratory Data Analysis*. Daarin beschrijft hij eenvoudige, met de hand uitvoerbare technieken om data te bekijken: de boxplot met de 1,5×IQR-regel, het stam-en-bladdiagram, de vijfgetallensamenvatting (minimum, $Q_1$, mediaan, $Q_3$, maximum). Zijn boodschap: begin niet met een model, maar met **kijken**. Laat de data je verrassen.

Tukey maakte onderscheid tussen *exploratieve* analyse (patronen ontdekken, vragen formuleren) en *confirmatieve* analyse (een vooraf geformuleerde hypothese toetsen; zie module 39). Beide zijn nodig, maar ze moeten niet door elkaar lopen: wie in dezelfde data eerst een patroon zoekt en het daarna "bewijst", bewijst niets.

## 5. Francis Anscombe en zijn kwartet (1973)

**Francis Anscombe** (1918–2001) was een Britse statisticus die in Princeton en later aan Yale werkte, waar hij in 1963 de eerste voorzitter van de statistiekafdeling werd. Hij was een zwager van Tukey: ze trouwden met twee zussen. Anscombe was een vroege voorvechter van het gebruik van computers in de statistiek, en juist daarom waarschuwde hij ervoor dat een computer niet alleen getallen moet uitspugen. Zijn artikel *Graphs in Statistical Analysis* in *The American Statistician* (1973) met de vier datasets die je in les 5 zag, werd een van de bekendste illustraties van die gedachte.

## 6. De opkomst van data science

Met computers, internet en sensoren groeide de hoeveelheid gegevens explosief. Rond die ontwikkeling ontstond een nieuw vakgebied: **data science**.

- **1962**: Tukey beschrijft data-analyse als een eigen wetenschap, met de computer als hulpmiddel.
- **1974**: de Deense informaticus Peter Naur gebruikt de term *data science*.
- **1985 en 1997**: de statisticus C.F. Jeff Wu stelt voor statistiek om te dopen tot *data science*.
- **2001**: William Cleveland pleit ervoor data science als zelfstandige discipline op te bouwen, met statistiek en informatica als fundament.
- **2008**: de functietitel *data scientist* wordt toegeschreven aan DJ Patil en Jeff Hammerbacher, die toen data-teams bij LinkedIn en Facebook leidden.
- **2012**: Thomas Davenport en DJ Patil noemen data scientist in de *Harvard Business Review* "the sexiest job of the 21st century".

Veel is veranderd: datasets hebben nu miljoenen rijen, en algoritmen voor machinaal leren vinden patronen die geen mens met de hand zou vinden. Maar de vragen uit deze module zijn dezelfde gebleven. Wat is één waarneming? Klopt de data? Wat doe je met afwijkende waarden? Welke grafiek is eerlijk? En is dit verband een oorzaak, of zit er een derde variabele achter? Snow, Nightingale, Tukey en Anscombe zouden zich in een modern data-team waarschijnlijk snel thuis voelen.

## Bronnen

- Wikipedia (EN), *1854 Broad Street cholera outbreak*: https://en.wikipedia.org/wiki/1854_Broad_Street_cholera_outbreak
- Wikipedia (EN), *John Snow*: https://en.wikipedia.org/wiki/John_Snow
- London Museum, *John Snow: Cholera & the Broad Street pump*: https://www.londonmuseum.org.uk/collections/london-stories/john-snow-cholera-broad-street-pump/
- CDC, MMWR (2004), *150th Anniversary of John Snow and the Pump Handle*: https://www.cdc.gov/mmwr/preview/mmwrhtml/mm5334a1.htm
- John Snow Archive (Michigan State University), *Snow & the pump handle*: https://johnsnow.matrix.msu.edu/broadstpump/snow-the-pump-handle/
- Esri, *Something in the water: the mythology of Snow's map of cholera*: https://www.esri.com/arcgis-blog/products/arcgis-pro/mapping/something-in-the-water-the-mythology-of-snows-map-of-cholera
- Data 8 (UC Berkeley/UChicago), *Snow's "Grand Experiment"*: https://data8.datascience.uchicago.edu/chapters/02/2/snow-s-grand-experiment
- MacTutor, *Florence Nightingale*: https://mathshistory.st-andrews.ac.uk/Biographies/Nightingale/
- Wikipedia (EN), *Florence Nightingale*: https://en.wikipedia.org/wiki/Florence_Nightingale
- Lehigh University Libraries, *Nightingale's Rose Diagram*: https://exhibits.lib.lehigh.edu/exhibits/show/data_visualization/science/nightingale
- MacTutor, *John Wilder Tukey*: https://mathshistory.st-andrews.ac.uk/Biographies/Tukey/
- Wikipedia (EN), *Box plot*: https://en.wikipedia.org/wiki/Box_plot
- Wikipedia (EN), *Anscombe's quartet*: https://en.wikipedia.org/wiki/Anscombe%27s_quartet
- Wikipedia (EN), *Francis Anscombe*: https://en.wikipedia.org/wiki/Francis_Anscombe
- Wikipedia (EN), *Simpson's paradox*: https://en.wikipedia.org/wiki/Simpson%27s_paradox
- Bickel, Hammel & O'Connell (1975), *Sex Bias in Graduate Admissions: Data from Berkeley*, Science 187: 398–404 (gegevens via https://search.r-project.org/CRAN/refmans/VGAM/html/ucberk.html)
- Wikipedia (EN), *Lambeth Waterworks Company*: https://en.wikipedia.org/wiki/Lambeth_Waterworks_Company
- Wikipedia (EN), *Data science*: https://en.wikipedia.org/wiki/Data_science
