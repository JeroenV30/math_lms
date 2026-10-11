# Van gemiddelde mens tot boxplot

De rekenregels uit de vorige lessen lijken vanzelfsprekend, maar ze zijn niet uit de lucht komen vallen. De namen die je gebruikt (standaardafwijking, boxplot, regressie) zijn bedacht door mensen die een bepaald probleem wilden oplossen, en veel van die mensen kenden elkaar. Deze les vertelt hun verhaal in vier stappen: de gemiddelde mens, de wetenschap van erfelijkheid, een naam voor de spreiding en een tekening voor de data.

## Quetelet en de gemiddelde mens

Adolphe Quetelet (1796–1874) was een Belgische wiskundige en sterrenkundige. In zijn boek *Sur l'homme et le développement de ses facultés* (1835) bracht hij een gedachte uit de sterrenkunde over naar de mensenwereld. Astronomen wisten dat herhaalde metingen van dezelfde hoogte van een ster een beetje verschillen en zich rond de ware waarde groeperen volgens een klokvormige verdeling. Quetelet paste dat idee toe op de lichaamslengte en andere kenmerken van mensen en sprak van de *homme moyen*, de gemiddelde mens.

:::history De gemiddelde mens, 1835
Quetelet zag in het gemiddelde meer dan een rekenkundig getal: voor hem was het het 'typische' van een bevolking, waaromheen individuele verschillen als afwijkingen lagen. Zijn werk gaf de sociale statistiek een impuls en opende het debat over de vraag hoeveel een gemiddelde zegt over een enkel mens. De Body Mass Index wordt ook wel de Quetelet-index genoemd en draagt dus nog zijn naam.
:::

Je kunt kritiek hebben op het beeld van de gemiddelde mens. Niemand is in alles gemiddeld, en een gemiddelde zegt niets over de spreiding. Juist die kritiek laat zien waarom de rest van deze module nodig was: pas met een spreidingsmaat naast het gemiddelde krijg je een eerlijk beeld.

## Galton: erfelijkheid meten

De Engelsman Francis Galton (1822–1911) wilde weten hoe eigenschappen van ouders overgaan op kinderen. Zijn boek *Natural Inheritance* (1889) bundelt een groot deel van die onderzoeken. Hij onderzocht onder andere de afmetingen van zaadjes van lathyrus en kwam rond 1875 tot een opvallende ontdekking: kinderen van extreem grote zaden waren gemiddeld kleiner dan hun ouders, kinderen van extreem kleine zaden gemiddeld groter. Hij noemde dit eerst 'reversie' en later *regressie*: een terugkeer naar het gemiddelde. Daarmee legde hij de basis voor wat je in module 40 als regressie en correlatie leert kennen.

Wat voor deze module van belang is: Galton verzamelde en beschreef gegevens over grote groepen mensen en werkte daarbij met verdelingen van heel concrete metingen. Een dataset op een rij zetten en de middelste waarde en de waarden op een kwart en driekwart van de rij aflezen, is handig zonder rekenmachine; kwadraten uitrekenen kost veel meer werk. (Of en hoe vaak Galton zelf met kwartielen werkte, laten we hier in het midden: de bronnen die wij raadpleegden, gaan daar niet op in.) Het uitrekenen van afwijkingen en een standaardafwijking kreeg pas gestalte in het werk van zijn opvolger Pearson.

## Pearson en de term 'standaardafwijking'

Karl Pearson (1857–1936) was een wiskundige die door Galtons werk werd gegrepen. Samen met de bioloog Walter Weldon bouwde hij aan University College in Londen een school voor wat hij *biometrie* noemde: het kwantitatief onderzoek van biologische verschillen. In 1893 begon hij aan een reeks van achttien artikelen, *Mathematical Contributions to the Theory of Evolution*, die tot 1912 verschenen. In die periode, in 1893, gaf hij de spreidingsmaat die je in les 4 hebt berekend haar naam: **standaardafwijking** (*standard deviation*).

:::history Een naam voor de spreiding, 1893–1894
Het idee om afwijkingen te kwadrateren, middelen en er de wortel uit te trekken is ouder dan Pearson. Wat hij deed, was de maat een heldere naam geven en haar centraal zetten in een groter programma van statistische methoden. Zijn eerste artikel in de reeks werd in november 1893 voorgelezen en verscheen in 1894. Veel termen die studenten nu leren, onder andere standaardafwijking, modus en het product-momentcorrelatiecoëfficiënt, gaan in de statistiek in hun huidige betekenis op Pearsons werk terug.
:::

De standaardafwijking werd snel de standaard. Ze past bij de klokvormige verdeling die Quetelet en Galton in hun data zagen: voor die verdeling legt het paar gemiddelde en standaardafwijking de hele verdeling vast. Daar sluit de vuistregel van 68-95-99,7 bij aan die je in de volgende les ontmoet.

## Tukey: de data laten zien

John W. Tukey (1915–2000) was een Amerikaanse statisticus met een andere insteek. Hij vond dat statistici te snel in modellen en formules vluchtten en te weinig naar de data zelf keken. Zijn *verkennende data-analyse* kreeg vorm in het boek *Exploratory Data Analysis* (1977). Het gaat ervan uit dat je eerst moet kijken, met eenvoudige plaatjes en robuuste maten, en pas daarna rekent.

:::history De boxplot, 1970 en 1977
De boxplot, destijds *box-and-whisker plot*, is volgens de gangbare geschiedschrijving in 1970 door Tukey geïntroduceerd en in 1977 uitvoerig beschreven in zijn boek. Hij had een voorloper: Mary Eleanor Spear beschreef in 1952 een 'range bar' in haar boek *Charting Statistics*. Tukey's versie, met een box van kwartielen en snorren, werd de standaard; de regel om uitschieters apart te tekenen, de 1,5 × IQR-regel uit les 3, wordt in de literatuur met zijn boxplot in verband gebracht.
:::

Wat Tukey wilde laten zien, ken je nu uit eigen ervaring. Een boxplot vat vijf getallen samen en verbergt daarmee veel. Verschillende datasets kunnen dezelfde boxplot hebben: je ziet niet elke afzonderlijke waarde, geen groepjes binnen de box en niet de precieze vorm tussen de kwartielen. Een goede analist gebruikt daarom meerdere weergaven en neemt één samenvatting nooit als volledig bewijs.

:::example Een samenvatting is geen reconstructie
De populaties {0, 5, 10} en {4, 5, 6} hebben dezelfde mediaan en hetzelfde gemiddelde, maar verschillende spreidingsbreedten en standaardafwijkingen. Voeg de spreiding toe voordat je stelt dat groepen vergelijkbaar zijn.
:::

{{ exercises: 24-022, 24-023 }}

## Wat bleef er over?

Zet de vier verhalen naast elkaar en je ziet een rode draad. Quetelet maakte van het gemiddelde een kenmerk van een groep, Galton stelde de vraag naar de verbanden tussen groepen, Pearson maakte er een formele wiskunde met namen van, en Tukey bracht de vraag terug naar wat je met je ogen kunt zien. Elke stap voegde iets toe, en geen enkele stap maakte de vorige overbodig. Ook nu gebruik je beide: een boxplot om te kijken en een standaardafwijking om te rekenen.

Een statistische beschrijving toont een patroon in gegevens. Zij verklaart nog niet welke oorzaak dat patroon heeft. Voor zo'n verklaring heb je een onderzoeksopzet en aanvullende aannames nodig. Quetelets gemiddelde mens, bijvoorbeeld, was een beschrijving; wat Quetelet eruit afleidde over de samenleving ging veel verder dan de cijfers toestonden.

## Bronnen

- MacTutor, [Adolphe Quetelet](https://mathshistory.st-andrews.ac.uk/Biographies/Quetelet/): levensloop, *Sur l'homme* (1835) en de homme moyen.
- MacTutor, [Francis Galton](https://mathshistory.st-andrews.ac.uk/Biographies/Galton/): *Natural Inheritance* (1889) en de ontdekking van regressie.
- MacTutor, [Karl Pearson](https://mathshistory.st-andrews.ac.uk/Biographies/Pearson/): de term 'standard deviation' (1893) en de reeks *Mathematical Contributions to the Theory of Evolution*.
- Wikipedia, [Box plot](https://en.wikipedia.org/wiki/Box_plot): Spear (1952), Tukey (1970, 1977).
- Wikipedia, [Exploratory data analysis](https://en.wikipedia.org/wiki/Exploratory_data_analysis): Tukey en de vijfgetallensamenvatting.
- NIST/SEMATECH e-Handbook of Statistical Methods, [Box plot](https://www.itl.nist.gov/div898/handbook/eda/section3/boxplot.htm).

Jaartallen en toewijzingen in deze les volgen deze bronnen. Waar bronnen elkaar niet volledig bevestigen, zoals de precieze oorsprong van de grootheid die Pearson hernoemde, is dat in de tekst voorzichtig geformuleerd.
