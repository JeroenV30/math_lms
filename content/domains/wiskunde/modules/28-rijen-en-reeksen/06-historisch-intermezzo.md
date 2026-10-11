# Fibonacci, zijn voorgangers en de gulden snede

De rij $1, 1, 2, 3, 5, 8, 13, \ldots$ draagt de naam van een Italiaanse koopmanszoon, kreeg die naam pas zeshonderd jaar na zijn dood, was al eerder bekend in India, en wordt tegenwoordig omringd door meer mythes dan bijna enig ander stukje wiskunde. In dit intermezzo zet je de feiten op een rij, en leer je onderweg waarom de verhouding van opeenvolgende Fibonacci-getallen naar de **gulden snede** gaat.

## 1. Leonardo van Pisa

Leonardo werd rond 1170 geboren in Pisa, toen een machtige handelsstad. Zijn vader Guglielmo vertegenwoordigde de Pisaanse kooplieden in Bugia (het huidige Béjaïa in Algerije), een havenstad in Noord-Afrika. Daar leerde de jonge Leonardo rekenen met de **Indiaas-Arabische cijfers**, de negen cijfers plus de nul en het positiestelsel die je in module 2 hebt leren kennen. Hij reisde later langs de handelscentra rond de Middellandse Zee (Egypte, Syrië, Griekenland, Sicilië, de Provence) en leerde daar de rekenmethoden van zijn tijd.

Terug in Pisa schreef hij in 1202 de *Liber Abaci*. In 1228 verscheen een herziene versie, opgedragen aan de geleerde Michael Scot. Van de versie uit 1202 is geen exemplaar bewaard gebleven; wat we lezen gaat terug op handschriften van de versie uit 1228. Leonardo schreef daarna nog onder meer de *Practica geometriae* (1220) en de *Liber quadratorum* (1225), een werk over getaltheorie. Hij overleed waarschijnlijk na 1240; het precieze jaar is onbekend.

:::tip Fibonacci is een bijnaam
Leonardo noemde zichzelf *Leonardo Pisano* (Leonardo van Pisa) of *filius Bonacci*, "zoon van Bonacci". De naam **Fibonacci** is een samentrekking daarvan die pas veel later gangbaar werd. De naam "rij van Fibonacci" werd in de negentiende eeuw verspreid door de Franse wiskundige Édouard Lucas.
:::

De *Liber Abaci* was geen boek over konijnen. Het was in de eerste plaats een handboek voor kooplieden: rekenen met de nieuwe cijfers, prijzen omrekenen, munten wisselen, winst verdelen tussen vennoten, rente berekenen. Het boek heeft veel bijgedragen aan de verspreiding van de Indiaas-Arabische cijfers in Europa, al duurde het nog eeuwen voordat ze de Romeinse cijfers en het rekenbord in de dagelijkse administratie hadden vervangen.

## 2. Het konijnenprobleem in de bron

Het konijnenraadsel staat in hoofdstuk 12 van de *Liber Abaci*, tussen allerlei andere puzzels. Leonardo stelt het iets anders dan in de introductie van deze module: zijn eerste paar is meteen vruchtbaar. Daardoor zijn er na de eerste maand al 2 paren, na de tweede 3, na de derde 5, en zo verder. Hij rekent het maand voor maand door en komt na twaalf maanden op **377** paren. In een bekend handschrift in Florence staat de rij in een kadertje in de marge: 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377.

![Bladzijde uit de Liber Abaci met de Fibonacci-rij in de marge](/images/history/m28-liber-abaci-konijnen.jpg "Bladzijde uit een handschrift van de Liber Abaci (Florence, Biblioteca Nazionale Centrale, Conv. Soppr. C.1.2616, fol. 124r). Rechts in het kader de rij 1, 2, 3, 5, ..., 377. Publiek domein, via Wikimedia Commons.")

Leonardo merkt ook op dat je zo "voor een oneindig aantal maanden" kunt doorgaan, door telkens de twee laatste getallen op te tellen. Dat is precies de recursie $F(n) = F(n-1) + F(n-2)$ uit les 2. Voor Leonardo was het één opgave tussen vele; pas eeuwen later gingen wiskundigen de rij zelf bestuderen.

{{ exercises: 28-032 }}

## 3. Eerder in India: ritmes tellen

De getallen van Fibonacci waren in India al eeuwen eerder bekend, in een heel andere context: de **metriek** van Sanskriet- en Prakrietpoëzie. In die poëzie heeft elke lettergreep een lengte: een korte lettergreep duurt één tel, een lange twee tellen. Een dichter of musicus wil weten: op hoeveel manieren kun je een regel van $n$ tellen vullen met korte en lange lettergrepen?

![De vijf ritmes van vier tellen](/images/diagrams/m28-ritmes.svg "Alle ritmes van vier tellen met korte (1 tel) en lange (2 tellen) lettergrepen. Eigen diagram.")

Bekijk het plaatje voor $n = 4$. Elk ritme eindigt óf op een korte lettergreep, óf op een lange.

- Eindigt het op **kort**, dan vormt de rest een ritme van $n - 1$ tellen.
- Eindigt het op **lang**, dan vormt de rest een ritme van $n - 2$ tellen.

Het aantal ritmes van $n$ tellen is dus het aantal van $n - 1$ tellen plus het aantal van $n - 2$ tellen. Dat is weer de Fibonacci-recursie! Met 1 ritme van 1 tel en 2 ritmes van 2 tellen krijg je $1, 2, 3, 5, 8, 13, \ldots$

:::history Wie wist wat?
- **Pingala**, de auteur van een klassiek handboek over Sanskriet-metriek (het *Chandaḥśāstra*), leefde waarschijnlijk enkele eeuwen v.Chr.; zijn dateringen lopen sterk uiteen. Zijn tekst behandelt het tellen van lettergreeppatronen, maar in zeer korte, raadselachtige regels. Of hij de optelregel al kende, is onder onderzoekers omstreden.
- **Virahāṅka** (tussen ca. 600 en 800 n.Chr.) beschreef de regel duidelijk: het aantal patronen van een lengte is de som van de aantallen van de twee kortere lengtes. Zijn werk kennen we via een commentaar van **Gopāla** (vóór 1135).
- **Hemacandra** (ca. 1089 – 1172), een Jaina-geleerde in Gujarat, formuleerde rond 1150 dezelfde regel: het aantal van de volgende lengte is de som van de laatste twee.

Deze teksten zijn ouder dan de *Liber Abaci* van 1202. Er is geen bewijs dat Leonardo ze kende; waarschijnlijk is dezelfde wiskunde onafhankelijk opnieuw gevonden, wat vaker gebeurt bij zo'n natuurlijke recursie. Historicus Parmanand Singh publiceerde in 1985 een veel geciteerd artikel met de veelzeggende titel *The so-called Fibonacci numbers in ancient and medieval India*.
:::

{{ exercises: 28-033 }}

## 4. De verhouding en de gulden snede

Deel elk Fibonacci-getal door zijn voorganger:

| $n$ | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 |
|---|---|---|---|---|---|---|---|---|---|
| $F(n+1) / F(n)$ | 2 | 1,5 | 1,667 | 1,6 | 1,625 | 1,615 | 1,619 | 1,6176 | 1,6182 |

De verhoudingen springen afwisselend boven en onder een getal rond $1{,}618$ en komen er steeds dichter bij. Welk getal is dat?

Stel dat de verhouding naar een getal $\varphi$ (de Griekse letter *phi*) gaat. Uit $F(n+1) = F(n) + F(n-1)$ volgt, door te delen door $F(n)$:

$$
\frac{F(n+1)}{F(n)} = 1 + \frac{F(n-1)}{F(n)} = 1 + \frac{1}{F(n)/F(n-1)}
$$

Voor grote $n$ zijn beide verhoudingen ongeveer $\varphi$, dus moet gelden

$$
\varphi = 1 + \frac{1}{\varphi} \quad\Longrightarrow\quad \varphi^2 = \varphi + 1 \quad\Longrightarrow\quad \varphi^2 - \varphi - 1 = 0.
$$

Met de abc-formule (module 21): $\varphi = \dfrac{1 + \sqrt5}{2} \approx 1{,}6180339887$. De andere oplossing, $\dfrac{1 - \sqrt5}{2} \approx -0{,}618$, valt af, omdat de verhoudingen positief zijn.

:::definition De gulden snede
Het getal

$$
\varphi = \frac{1 + \sqrt5}{2} \approx 1{,}618
$$

heet de **gulden snede** of de **gulden verhouding**. Het is de positieve oplossing van $\varphi^2 = \varphi + 1$. Euclides beschreef deze verhouding al rond 300 v.Chr. als het verdelen van een lijnstuk "in uiterste en middelste reden": het hele stuk staat tot het grootste deel als het grootste deel tot het kleinste.
:::

Dat de verhoudingen van Fibonacci-getallen naar deze verhouding gaan, werd in de vroege zeventiende eeuw onder meer door Johannes Kepler opgemerkt. Het verband werkt ook andersom: met $\varphi$ kun je een **directe formule** voor de Fibonacci-getallen opschrijven,

$$
F(n) = \frac{\varphi^n - \psi^n}{\sqrt5}, \qquad \psi = \frac{1 - \sqrt5}{2},
$$

die naar Jacques Binet (1843) is genoemd, hoewel De Moivre en Daniel Bernoulli haar in de achttiende eeuw al kenden. Omdat $|\psi| < 1$, wordt $\psi^n$ snel heel klein, en is $F(n)$ gewoon $\dfrac{\varphi^n}{\sqrt5}$ afgerond op het dichtstbijzijnde gehele getal. De Fibonacci-rij gedraagt zich op de lange termijn dus als een **meetkundige rij met reden** $\varphi$.

:::warning Mythes rond de gulden snede
Over de gulden snede wordt veel beweerd dat niet klopt of niet aantoonbaar is. Er is geen overtuigend bewijs dat de bouwers van het Parthenon of de piramiden van Gizeh de gulden snede bewust gebruikten; met wat schuiven aan meetpunten vind je in bijna elk gebouw wel een verhouding van ongeveer 1,6. Ook de bewering dat het menselijk lichaam "volgens de gulden snede" is gebouwd, of dat mensen rechthoeken met deze verhouding het mooist vinden, wordt door onderzoek niet bevestigd. De wiskundige George Markowsky zette veel van deze claims in 1992 op een rij in het artikel *Misconceptions about the Golden Ratio*.

Wat wél goed gedocumenteerd is: bij veel planten volgen de spiralen van zaden, schubben of bladeren aantallen die vaak opeenvolgende Fibonacci-getallen zijn (bijvoorbeeld 34 en 55 spiralen in een zonnebloem). Dat heeft een groeimechanische verklaring, maar het geldt niet voor alle soorten en niet voor alle exemplaren. Wees dus kritisch als je ergens leest dat Fibonacci "overal" in de natuur zit.
:::

{{ exercises: 28-034, 28-035 }}

## 5. Gauss en de schoolsom: wat weten we echt?

Carl Friedrich Gauss (1777–1855), geboren in Braunschweig, wordt vaak genoemd als een van de grootste wiskundigen ooit. Zijn *Disquisitiones Arithmeticae* (1801) legde de basis voor de moderne getaltheorie. Het bekendste verhaal over hem is echter de schoolsom uit les 4.

De oudste bron voor dat verhaal is een gedenkboek dat de Göttingse geoloog Wolfgang Sartorius von Waltershausen in 1856 schreef, een jaar na Gauss' dood. Volgens Sartorius vertelde Gauss het verhaal zelf graag op latere leeftijd. De onderwijzer Büttner gaf de klas de opdracht een **rekenkundige reeks** op te tellen; Gauss legde zijn lei vrijwel meteen op tafel met de woorden "daar ligt het", en aan het eind van het uur bleek alleen zijn antwoord, met één getal erop, goed.

Opvallend is wat Sartorius **niet** vertelt: welke getallen het waren, en hoe Gauss rekende. De wetenschapsjournalist Brian Hayes verzamelde in 2006 meer dan honderd versies van het verhaal. In de bronnen die hij vond, verschijnen de getallen 1 tot en met 100 voor het eerst in 1938, ruim tachtig jaar na Sartorius. Ook de truc met de paren die 101 opleveren, is een latere invulling. Het verhaal kan dus waar zijn in de kern (een jonge Gauss die een rekenkundige reeks razendsnel optelt), maar de details die iedereen kent, zijn vermoedelijk later toegevoegd.

:::tip Waarom dit ertoe doet
Een anekdote die eindeloos wordt doorverteld, wordt vaak mooier dan de oorspronkelijke bron. Dat geldt voor Gauss en de som, voor Newton en de appel, en voor de schaakbordlegende. Als historisch lezer vraag je steeds: wat is de oudste bron, wat staat daar precies, en wat is later toegevoegd? De wiskunde verandert er niet door, de geschiedenis wel.
:::

## 6. Euler en de wiskunde van het oneindige

Na Archimedes, Oresme en de Indiase en Arabische rekenmeesters werd het rekenen met oneindige reeksen in de achttiende eeuw een volwaardig vakgebied, en niemand bracht het verder dan Leonhard Euler (1707–1783). Hij vond in 1734-1735 de som $1 + \tfrac14 + \tfrac19 + \ldots = \tfrac{\pi^2}{6}$ (les 5), werkte met reeksen voor de exponentiële en goniometrische functies, en schreef ook over recursieve rijen. Zijn werkwijze was soms gewaagd: hij manipuleerde oneindige reeksen alsof het gewone sommen waren, en pas in de negentiende eeuw maakten wiskundigen als Cauchy het begrip convergentie zo precies als je het in les 5 zag. Het verhaal van rijen en reeksen loopt zo rechtstreeks door naar de differentiaal- en integraalrekening van de volgende modules.

## Bronnen

- MacTutor History of Mathematics, *Leonardo Pisano Fibonacci*: https://mathshistory.st-andrews.ac.uk/Biographies/Fibonacci/
- Wikipedia (EN), *Liber Abaci*: https://en.wikipedia.org/wiki/Liber_Abaci
- Wikipedia (EN), *Fibonacci sequence* (geschiedenis, Indiase bronnen, Lucas, Binet): https://en.wikipedia.org/wiki/Fibonacci_sequence
- P. Singh, *The so-called Fibonacci numbers in ancient and medieval India*, Historia Mathematica 12 (1985) 229–244: https://doi.org/10.1016/0315-0860(85)90021-7
- Wikipedia (EN), *Hemachandra*: https://en.wikipedia.org/wiki/Hemachandra
- Wikipedia (EN), *Pingala*: https://en.wikipedia.org/wiki/Pingala
- Wikipedia (EN), *Golden ratio* (Euclides, Kepler, betwiste toepassingen): https://en.wikipedia.org/wiki/Golden_ratio
- G. Markowsky, *Misconceptions about the Golden Ratio*, The College Mathematics Journal 23(1) (1992) 2–19: https://www.jstor.org/stable/2686193
- MacTutor, *Carl Friedrich Gauss*: https://mathshistory.st-andrews.ac.uk/Biographies/Gauss/
- B. Hayes, *Gauss's Day of Reckoning*, American Scientist 94 (2006) 200–205: https://www.americanscientist.org/article/gausss-day-of-reckoning
- Stanford Encyclopedia of Philosophy, *Zeno's Paradoxes*: https://plato.stanford.edu/entries/paradox-zeno/
- MacTutor, *Zeno of Elea*: https://mathshistory.st-andrews.ac.uk/Biographies/Zeno_of_Elea/
- Wikipedia (EN), *The Quadrature of the Parabola*: https://en.wikipedia.org/wiki/The_Quadrature_of_the_Parabola
- Wikipedia (EN), *Wheat and chessboard problem*: https://en.wikipedia.org/wiki/Wheat_and_chessboard_problem
- Wikipedia (EN), *Harmonic series (mathematics)* (Oresme): https://en.wikipedia.org/wiki/Harmonic_series_(mathematics)
- Wikipedia (EN), *Basel problem* (Euler): https://en.wikipedia.org/wiki/Basel_problem
- Afbeelding: Wikimedia Commons, *Liber abbaci magliab f124r.jpg* (publiek domein): https://commons.wikimedia.org/wiki/File:Liber_abbaci_magliab_f124r.jpg
