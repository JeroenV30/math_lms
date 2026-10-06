# Open data, verkennende analyse en reproduceerbaarheid

De onderzoekslijn van deze cursus is steeds dezelfde gebleven: wat tel of meet je, hoe vat je het samen en welke conclusie mag je eraan verbinden? Bij John Graunt ging het in 1662 om de Londense sterftelijsten, bij Florence Nightingale in de negentiende eeuw om sterftecijfers in veldhospitalen, en bij moderne ecologen om systematische veldmetingen op afgelegen eilanden. In dit intermezzo volg je een kleiner verhaal binnen dat grote: hoe een dataset een gemeenschappelijk referentiepunt kan worden, hoe men leerde eerst naar gegevens te *kijken*, en waarom reproduceerbaarheid in de afgelopen decennia een centraal thema werd.

## Een bloem die statistiek onderwees: Fisher en de irisdata

In 1935 publiceerde de Amerikaanse botanicus Edgar Anderson in het *Bulletin of the American Iris Society* een artikel over de irissen van het Gaspé-schiereiland in Canada. Hij had lichaamsmaten van bloemen verzameld om de variatie tussen verwante soorten te kwantificeren. In 1936 gebruikte Ronald A. Fisher die gegevens in een artikel in de *Annals of Eugenics* over een manier om soorten te onderscheiden met een combinatie van meerdere metingen tegelijk (lineaire discriminantanalyse). De dataset telt 150 bloemen: 50 van elk van drie soorten, met vier maten per bloem (lengte en breedte van kelkblad en kroonblad).

Die kleine dataset bleek een lang leven te hebben. Zij werd een standaardvoorbeeld in handboeken en software, en zit tot de dag van vandaag in de datasets die bij het programma R worden geleverd. Wie statistiek leerde, leerde dikwijls met de irissen. Eén reden is praktisch: een gedeelde dataset maakt het mogelijk dat docenten, studenten en softwareontwikkelaars precies dezelfde uitkomsten vergelijken. Een tweede reden is dat de gegevens klein, schoon en toch niet triviaal zijn.

De palmerpenguins-dataset die jij in dit hoofdstuk gebruikte, wordt door haar makers uitdrukkelijk aangeboden "als alternatief voor iris". De opvolger heeft eigenschappen die de oorspronkelijke mist, zoals ontbrekende waarden, groepen die in grootte verschillen en een verband dat omkeert zodra je naar soorten kijkt (les 5). Dat maakt haar geschikt om te oefenen met de beslissingen die in echt onderzoek onvermijdelijk zijn.

:::history De naam van een tijdschrift
Fisher publiceerde in de *Annals of Eugenics*. Een groot deel van de vroege wiskundige statistiek, van Francis Galton en Karl Pearson tot Fisher, ontstond in een wetenschappelijke omgeving waarin ideeën over erfelijkheid en eugenetica een belangrijke rol speelden. Dat is een historisch feit waar je niet omheen kunt als je de oorsprong van technieken als regressie en correlatie leert kennen, en het is een reden om methodes en hun toepassingen scherp van elkaar te onderscheiden. Een toets of een regressielijn is een rekenregel; wat je ermee beweert over mensen of dieren, valt onder je eigen verantwoordelijkheid.
:::

## Eerst kijken: Tukey en de verkennende data-analyse

De traditionele statistiek van Fisher, Neyman en Pearson (module 39) draaide om vooraf opgestelde hypothesen en beslisregels. In 1977 publiceerde John W. Tukey bij uitgeverij Addison-Wesley het boek *Exploratory Data Analysis*. Zijn punt was dat de analist al veel kan leren zonder toets, met eenvoudige, handmatig uit te voeren hulpmiddelen. Hij stelde onder meer het **stam-en-bladdiagram** voor, als snelle manier om een reeks getallen te noteren zodat samenvattende waarden eruit af te lezen zijn, en de **boxplot** als compacte samenvatting van een verdeling. De gedachte erachter is geruststellend eenvoudig: kijk eerst naar de gegevens, en laat een verrassend patroon je vervolgvragen formuleren. Zeg ook eerlijk dat het een verkenning was.

De spanning tussen die twee tradities is nog steeds de kern van de statistische praktijk. Verkennen vergroot de kans dat je iets nieuws ontdekt; bevestigen vergroot de kans dat wat je beweert ook klopt. Het onderscheid dat je in les 4 leerde, tussen vooraf gespecificeerde en achteraf gekozen vergelijkingen, is een moderne vorm van die oude spanning.

## Een paradox met meerdere vaders

In les 5 zag je hoe een verband van teken kan omkeren als je naar deelgroepen kijkt. Dat verschijnsel is niet nieuw. Het werd al rond het begin van de twintigste eeuw besproken door onder meer Karl Pearson en Udny Yule, die opmerkten dat een samenhang tussen twee eigenschappen verdwijnt of omkeert wanneer je groepen samenvoegt of juist splitst. De naam verwijst naar een kort artikel van Edward H. Simpson uit 1951, "The interpretation of interaction in contingency tables", in het *Journal of the Royal Statistical Society*, waarin hij de interpretatie van zulke omkeringen bij tabellen bespreekt. Latere auteurs spreken daarom van Simpsons paradox, of van het Yule-Simpson-effect. De moderne verklaring gebruikt het begrip *confounding*: de verstorende groepsvariabele die zowel met de uitkomst als met de verklarende variabele samenhangt.

## Open data en de reproduceerbaarheidscrisis

Een dataset delen met een open licentie, zoals de CC0-licentie van palmerpenguins, is een hedendaagse vorm van een eeuwenoud ideaal: dat een bewering controleerbaar is voor iedereen. Het is ook een praktische vereiste. Een lezer die dezelfde gegevens heeft, kan de berekeningen narekenen en kijken of kleine verschillen in selectie of werkwijze de uitkomst veranderen.

In de afgelopen decennia is dit ideaal onder druk komen te staan. In 2015 publiceerde een groot samenwerkingsverband, de Open Science Collaboration, in *Science* een poging om 100 gepubliceerde psychologische studies opnieuw uit te voeren. Van de oorspronkelijke studies rapporteerde 97% een statistisch significant resultaat; bij de herhalingen was dat 36%, en de gevonden effecten waren gemiddeld ongeveer half zo groot als in de oorspronkelijke publicaties. Wetenschappers noemen dit de *replicatiecrisis*. Als oorzaken worden onder andere genoemd: selectieve publicatie van significante uitkomsten, kleine steekproeven en het stapsgewijs doorzoeken van gegevens tot er iets significants uit komt (p-hacken, zoals in les 4). Eén reactie was de verklaring van de American Statistical Association uit 2016, opgesteld door Ronald Wasserstein en Nicole Lazar, waarin de vereniging uitlegt wat een p-waarde wel en niet betekent. Zij waarschuwt dat een p-waarde niet bedoeld is als vervanging voor wetenschappelijk redeneren en pleit voor transparante rapportage.

Uit die discussie kwamen praktische gewoonten: gegevens en code delen, analyses vooraf vastleggen (*preregistratie*), effectgroottes en intervallen rapporteren naast p-waarden, en replicaties een plek geven in de literatuur. Het script `analyse.py` bij dit hoofdstuk is een kleine uitvoering daarvan: iedereen met dezelfde CSV kan met één opdracht dezelfde getallen reproduceren.

## Wat is er lokaal veranderd?

De cursus bevat alle rijen uit 2009 van de oorspronkelijke dataset, in de oorspronkelijke volgorde. Kolomnamen en geslachtslabels zijn naar het Nederlands vertaald en een volgnummer is toegevoegd. De meetwaarden en NA-codes zijn behouden. Die wijzigingen zijn vastgelegd in `dataset.json` in deze module. Een bronvermelding is hier een deel van de analyse: zonder bron weet je niet hoe de gegevens zijn ontstaan, welke populatie ze beschrijven of welke selectie je lokaal gebruikt. Reproduceerbaarheid vraagt zowel herhaalbare berekeningen als een traceerbare gegevensbron.

## Bronnen

- Gorman KB, Williams TD, Fraser WR (2014). *Ecological Sexual Dimorphism and Environmental Variability within a Community of Antarctic Penguins (Genus Pygoscelis)*. PLOS ONE 9(3): e90081. [Artikel](https://journals.plos.org/plosone/article?id=10.1371/journal.pone.0090081).
- Horst AM, Hill AP, Gorman KB (2020). *palmerpenguins: Palmer Archipelago (Antarctica) penguin data*. [Projectpagina](https://allisonhorst.github.io/palmerpenguins/) en [beschrijving van de kolommen](https://allisonhorst.github.io/palmerpenguins/reference/penguins.html).
- Fisher RA (1936). The use of multiple measurements in taxonomic problems. *Annals of Eugenics* 7(2): 179–188. [Rothamsted Repository](https://repository.rothamsted.ac.uk/item/9914w/the-use-of-multiple-measurements-in-taxonomic-problems).
- [Documentatie van de dataset *iris* in R](https://search.r-project.org/CRAN/refmans/datasets/html/iris.html), met verwijzingen naar Fisher (1936) en Anderson (1935).
- Tukey JW (1977). *Exploratory Data Analysis*. Addison-Wesley. Over het stam-en-bladdiagram: [cursusmateriaal Exploratory and Graphical Methods of Data Analysis](https://www.datavis.ca/courses/eda/eda1.html).
- Simpson EH (1951). The interpretation of interaction in contingency tables. *Journal of the Royal Statistical Society, Series B* 13(2): 238–241. Overzicht: [Stanford Encyclopedia of Philosophy, Simpson's Paradox](https://plato.stanford.edu/entries/paradox-simpson/).
- Open Science Collaboration (2015). Estimating the reproducibility of psychological science. *Science* 349(6251): aac4716. [Samenvatting](https://discovery.dundee.ac.uk/en/publications/estimating-the-reproducibility-of-psychological-science/).
- Wasserstein RL, Lazar NA (2016). The ASA's statement on p-values: context, process, and purpose. *The American Statistician* 70(2): 129–133. [Tekst van de verklaring](https://www.stat.berkeley.edu/%7Ealdous/Real_World/ASA_statement.pdf).
