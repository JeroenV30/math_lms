# Een klok voor tellingen en meetfouten

De normale verdeling heet ook wel de Gauss-verdeling, en in sommige landen de Laplace-verdeling. Geen van die namen vertelt het hele verhaal. De klokkromme is niet door één persoon uitgevonden, maar verscheen in minstens drie gedaanten: als benadering van een telprobleem, als wet voor meetfouten, en als beschrijving van de natuur zelf. In dit intermezzo volg je die drie lijnen, en je ziet waarom ze uiteindelijk bleken samen te hangen.

## Bernoulli: de vraag achter de benadering

Jakob Bernoulli (1654–1705) werkte lang aan een boek dat pas na zijn dood verscheen: *Ars Conjectandi* (1713). Daarin bewees hij wat we nu de wet van de grote aantallen noemen: bij steeds meer herhalingen komt de relatieve frequentie van een gebeurtenis, met grote waarschijnlijkheid, willekeurig dicht bij de kans zelf. Dat was een belangrijk inzicht, maar Bernoulli's bewijs liet ruim over: om te garanderen dat de afwijking klein is, bleek hij duizenden proeven nodig te hebben. De vraag "hoeveel precies?" bleef open. Om haar te beantwoorden moest je sommen van binomiale kansen met een grote $n$ kunnen uitrekenen, en dat was met de hand bijna onmogelijk.

## De Moivre: een klok uit de binomiale kansen (1733)

Abraham de Moivre, een Franse hugenoot die in Londen woonde, nam die uitdaging op. In een Latijns stuk uit november 1733 liet hij zien dat de binomiale kansen bij grote $n$ rond het midden goed beschreven worden door een klokvormige kromme. Zijn uitgangspunt was het geval $p=\tfrac12$, de eerlijke munt, en hij gebruikte daarbij een formule voor faculteiten waarin een constante voorkwam die zijn vriend James Stirling bleek te kunnen bepalen: $\sqrt{2\pi}$. In de tweede druk van *The Doctrine of Chances* (1738) nam hij het resultaat in het Engels op. MacTutor noemt dit de eerste verschijning van wat we nu de normale kansintegraal noemen, en merkt op dat De Moivre al iets begreep van wat wij standaardafwijking noemen. Hij gebruikte de kromme als **rekenhulp**: als een manier om een lastige som te benaderen, niet als verdeling met een eigen bestaan.

:::history De stelling van De Moivre–Laplace
Laplace nam het resultaat op in zijn *Théorie analytique des probabilités* (1812) en gaf de algemene versie, voor een willekeurige succeskans $p$. Daarom spreekt men van de stelling van De Moivre–Laplace: voor grote $n$ is de binomiale verdeling bij benadering normaal met $\mu=np$ en $\sigma^2=np(1-p)$. Het is een speciaal geval van de centrale limietstelling, die Laplace in dezelfde periode in veel grotere algemeenheid uitwerkte.
:::

## Gauss en de verdwenen planeet (1801–1809)

Op 1 januari 1801 ontdekte de Siciliaanse astronoom Giuseppe Piazzi een nieuw hemellichaam, dat we nu kennen als dwergplaneet Ceres. Hij kon het slechts enkele weken volgen voordat het bij de zon uit het zicht raakte. Hoe moest je uit zo weinig, onnauwkeurige waarnemingen voorspellen waar het weer zou opduiken? De jonge Carl Friedrich Gauss ontwikkelde een methode om de baan te berekenen, en op 31 december 1801 werd Ceres vlak bij de voorspelde positie teruggevonden door Franz Xaver von Zach en Heinrich Olbers.

De waarnemingen bevatten onvermijdelijk meetfouten, en dat dwingt tot de vraag: welke waarde kies je als je meerdere metingen hebt die elkaar tegenspreken? In zijn *Theoria motus corporum coelestium* (1809) onderbouwde Gauss de methode van de kleinste kwadraten met een aanname over de foutenverdeling. Volgens de gangbare lezing redeneerde hij dat het rekenkundig gemiddelde de meest waarschijnlijke waarde moet zijn, en leidde daaruit af dat de fouten verdeeld moeten zijn volgens de kromme

$$
f(x)=\frac{1}{\sigma\sqrt{2\pi}}e^{-x^2/(2\sigma^2)}.
$$

Dat is dezelfde vorm die De Moivre vond, maar nu als beschrijving van *fouten*, niet als benadering van een telling. Wat Laplace en Gauss samen deden, was dus ontdekken dat de twee wegen naar dezelfde kromme leidden. Dat is geen toeval: een meetfout is de som van veel kleine, onafhankelijke storingen, en sommen van veel kleine onafhankelijke bijdragen worden bij benadering normaal verdeeld. Over de eer van de methode zelf is overigens gedoe geweest: Legendre publiceerde de kleinste kwadraten in 1805, en Gauss beweerde haar al langer te gebruiken.

## Poisson: de wet van de kleine aantallen (1837)

Siméon Denis Poisson publiceerde in 1837 zijn *Recherches sur la probabilité des jugements en matière criminelle et en matière civile*, over de betrouwbaarheid van rechterlijke uitspraken. Daarin verschijnt voor het eerst de verdeling die zijn naam draagt, als limiet van de binomiale verdeling voor zeer kleine kansen en zeer veel gelegenheden. Het werk kreeg in Frankrijk weinig aandacht. De verdeling werd pas bekend na 1898, toen Ladislaus Bortkiewicz liet zien dat het aantal soldaten in het Pruisische leger dat per jaar door een paardenschop om het leven kwam, goed door een Poisson-verdeling te beschrijven was. Hij noemde dat "Das Gesetz der kleinen Zahlen", de wet van de kleine aantallen: zeldzame gebeurtenissen vertonen, bij veel gelegenheden, een voorspelbaar patroon.

## Quetelet en de gemiddelde mens

De Belgische astronoom en statisticus Adolphe Quetelet (1796–1874) maakte van de klokkromme iets heel nieuws. In *Sur l'homme et le développement de ses facultés* (1835) betoogde hij dat menselijke eigenschappen, zoals lengte, om een gemiddelde heen liggen volgens dezelfde kromme als meetfouten. Zijn conclusie was gewaagd: de 'gemiddelde mens' (*l'homme moyen*) was voor hem een soort ideaaltype, en individuen waren afwijkingen daarvan, vergelijkbaar met meetfouten van de natuur. Volgens MacTutor was hij de eerste die de normale kromme op een andere manier gebruikte dan als foutenwet.

Die interpretatie is later kritisch bekeken. Het feit dat een eigenschap klokvormig verdeeld is, zegt niet dat het gemiddelde een ideaal is, en veel eigenschappen zijn helemaal niet normaal verdeeld. Maar Quetelet maakte van de normale verdeling een instrument van de sociale wetenschappen, en zijn werk beïnvloedde Francis Galton.

## Galton en het bord met spijkers

Francis Galton bedacht een apparaat om te laten zien hoe een normale verdeling uit toeval ontstaat: het **Galtonbord** (quincunx). Kogeltjes vallen door rijen spijkers en botsen bij elke spijker naar links of rechts. Onderaan verzamelen ze zich in bakjes, en het resultaat vormt een klokvorm. Galton presenteerde het bord in 1874 aan de Royal Institution. De werking is precies de binomiale verdeling: elke spijker is een Bernoulli-proef met $p=\tfrac12$, het eindbakje telt het aantal keer rechts. Het bord maakt de stelling van De Moivre tastbaar: honderden kogeltjes tonen de vorm waarover het hele verhaal gaat.

## Wat leerde de geschiedenis je?

Drie dingen, die je ook bij het rekenen nodig hebt. Ten eerste: de normale verdeling is een **benadering of een model**, geen waarheid. Bij De Moivre was ze een rekenhulp, bij Gauss een aanname over fouten, en bij Quetelet een hypothese over mensen. Ten tweede: dat meerdere wegen naar dezelfde kromme leiden, is geen toeval maar een stelling, de centrale limietstelling. Ten derde: een naam zegt weinig over de geschiedenis. De ontwikkeling had meerdere auteurs en verschillende toepassingen.

## Bronnen

De feiten in dit intermezzo zijn gecontroleerd aan de volgende bronnen. Voor de details van jaartallen en tekst verwijzen we naar de bronnen zelf.

- MacTutor, [Abraham de Moivre](https://mathshistory.st-andrews.ac.uk/Biographies/De_Moivre/): het Latijnse stuk van november 1733, Stirling en de constante $\sqrt{2\pi}$, *The Doctrine of Chances*.
- Wikipedia, [De Moivre–Laplace theorem](https://en.wikipedia.org/wiki/De_Moivre%E2%80%93Laplace_theorem): De Moivre (1738), Laplace (1812).
- Wikipedia, [Ceres](https://en.wikipedia.org/wiki/Ceres_(dwarf_planet)): ontdekking door Piazzi op 1 januari 1801 en het terugvinden op 31 december 1801.
- MacTutor, [Siméon-Denis Poisson](https://mathshistory.st-andrews.ac.uk/Biographies/Poisson/): het werk uit 1837 en de verdeling.
- Wikipedia, [Poisson distribution](https://en.wikipedia.org/wiki/Poisson_distribution): publicatie van 1837 en de toepassing van Bortkiewicz (1898).
- MacTutor, [Adolphe Quetelet](https://mathshistory.st-andrews.ac.uk/Biographies/Quetelet/): *Sur l'homme* (1835) en de gemiddelde mens.
- Wikipedia, [Galton board](https://en.wikipedia.org/wiki/Galton_board): het bord, gepresenteerd in 1874.

De biografieën van [De Moivre](/mathematicians/de-moivre), [Gauss](/mathematicians/gauss) en [Laplace](/mathematicians/laplace) vind je ook in de wiskundigenlijst van deze cursus.
