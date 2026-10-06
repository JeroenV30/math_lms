# Van volledige telling naar toevallige steekproef

Dat je uit een deel van een populatie iets over het geheel kunt zeggen, voelt
vandaag vanzelfsprekend. Dat was het lang niet. Dit intermezzo volgt in vijf
stappen hoe de steekproef een geaccepteerd instrument werd, en hoe het ontwerp
van de steekproef en de wiskunde van de fout pas samen een geheel werden.

## Laplace schat een land (1786 en 1802)

Hoeveel inwoners had Frankrijk rond 1800? Een volledige telling bestond niet. Pierre-Simon
Laplace had een slimmer idee: het aantal geboorten per jaar werd in elke
gemeente nauwkeurig geregistreerd. Als je van een aantal gemeenten ook het
aantal inwoners telt, kun je de verhouding tussen inwoners en jaarlijkse
geboorten bepalen en die verhouding op heel Frankrijk toepassen.

In 1802 voerde hij dat uit met een steekproef van ongeveer dertig gemeenten,
verspreid over het land en gekozen om een goede doorsnede te geven. Daar werden
ruim twee miljoen inwoners geteld. In de drie voorafgaande jaren waren er in
die gemeenten ruim 215.000 kinderen geboren, ongeveer 72.000 per jaar. Dat is
ruim 3,5 geboorten per honderd inwoners. Zet je dat af tegen het geschatte aantal
geboorten in heel Frankrijk, ongeveer een miljoen per jaar, dan kom je op ruim
28 miljoen inwoners. De methode die Laplace al in de jaren 1780 had voorgesteld,
is wat we nu een *ratioschatter* noemen. Wat haar bijzonder maakt: Laplace
probeerde ook uit te rekenen hoe groot de kans op een fout was, en gebruikte daarvoor
de kansrekening. Zijn gemeenten waren echter geen aselecte steekproef, dus de
foutberekening rustte op aannames over de representativiteit.

## Kiær en de representatieve methode (1895)

Door de negentiende eeuw heen gold de volledige telling als de enige
serieuze manier om iets over een bevolking te weten. De Noor Anders Kiær, oprichter en
eerste directeur van het Noorse statistische bureau, pleitte daar tegenin. Op de
vergadering van het Internationaal Statistisch Instituut in Bern in 1895
bepleitte hij de **representatieve methode**: bemonster een deel van de
bevolking dat het geheel zo goed mogelijk afspiegelt. Kiær koos zijn
steekproef bewust, zodat bijvoorbeeld regio's, beroepen en leeftijden in dezelfde
verhoudingen voorkwamen als in de bevolking. Het kostte hem naar later onderzoek
van historici tientallen jaren om zijn collega's ervan te overtuigen dat
steekproeven een legitieme methode zijn.

Zijn aanpak had een zwak punt: bewuste keuze kan alleen kenmerken in balans
brengen die je kent en bedenkt. Voor alle andere kenmerken kon de steekproef scheef zijn, en
er was geen manier om te zeggen hoe scheef. Een foutmarge was niet te geven.

## Neyman: loting als grondslag (1934)

Op 19 juni 1934 presenteerde Jerzy Neyman voor de Royal Statistical Society
zijn artikel over de twee aspecten van de representatieve methode:
gestratificeerde steekproeftrekking en doelgerichte selectie. Zijn conclusie was
principieel. Alleen als de eenheden door loting worden gekozen, kun je de
fout berekenen, en met stratificatie en loting samen krijg je een betere
schatting dan met Kiærs bewuste selectie. Neyman wees ook een optimale manier aan om de
steekproef over de strata te verdelen: wie sterk spreidende groepen
zwaarder bemonstert, krijgt een nauwkeuriger totaalresultaat (de *Neyman-allocatie*).
Hij profiteerde daarbij van het feit dat een grote doelgerichte steekproef kort daarvoor
was mislukt.

In 1937 volgde zijn tweede grote bijdrage: de formele theorie van
**betrouwbaarheidsintervallen**. Neyman liet zien dat je een interval kunt
construeren waarvan je de dekking bij herhaling garandeert, zonder uitspraken te
doen over de kans dat de parameter in dit ene interval ligt. Daarmee kreeg de
formulering uit les 4 haar grondslag: het betrouwbaarheidsniveau hoort bij de
procedure.

## Gosset, Guinness en de kleine steekproef (1908)

William Sealy Gosset was scheikundige bij de brouwerij Guinness in Dublin,
waar hij in 1899 begon. Hij moest met weinig materiaal beslissen: een paar
monsters gerst, een handvol proefbrouwsels. De statistiek van zijn tijd, vooral die van Karl
Pearson, nam grote steekproeven aan en gebruikte de steekproefstandaardafwijking
alsof die gelijk was aan $\sigma$. Bij tien metingen is dat een gevaarlijke
aanname. Gosset studeerde in 1906 en 1907 bij Pearson in Londen en publiceerde in
1908 in *Biometrika* het artikel "The probable error of a mean".
Daarin leidde hij af (deels wiskundig, deels met een proef met toevalsgetallen,
een vroege vorm van simulatie) hoe de verhouding tussen afwijking en geschatte
standaardfout zich bij kleine steekproeven gedraagt. Dat is de **t-verdeling**.

Gosset publiceerde onder het pseudoniem "Student". Volgens gangbare
beschrijvingen verbood Guinness na een eerder incident dat medewerkers hun
echte naam of de brouwerij in publicaties noemden. Hoe hij precies aan de naam kwam, is
niet met zekerheid bekend. Ronald Fisher zag al snel het belang van het resultaat, wat
leidde tot een lange briefwisseling.

## Literary Digest tegen Gallup (1936)

De theorie van Kiær en Neyman kreeg in 1936 een publieke demonstratie. *The
Literary Digest* had de uitslag van de presidentsverkiezingen in 1920, 1924, 1928 en 1932
al goed voorspeld, en stuurde nu naar ongeveer tien miljoen adressen.
Het blad putte uit eigen abonnees, autobezitters en telefoonbezitters, groepen die in de
jaren van de crisis rijker waren dan het gemiddelde. Ongeveer 2,38 miljoen mensen
stuurden hun antwoord terug, en het blad voorspelde dat Landon zou winnen met
ruim 57%. Roosevelt won met ruim 60% van de stemmen.

Gallup, met een veel kleinere steekproef van ongeveer vijftigduizend mensen die
zo was opgezet dat verschillende bevolkingsgroepen vertegenwoordigd waren,
voorspelde de zege van Roosevelt goed. Niet de omvang maar het ontwerp
bepaalde dus het verschil. Bij de analyse daarna werd vaak ook een hoge non-respons genoemd,
waarover historici verschillend oordelen. Dat de lijst verkeerd was, staat vast.

## Wat deze geschiedenis ons leert

Laplace liet zien dat een schatting mogelijk is, Kiær dat een steekproef mag
bestaan, Neyman dat loting nodig is om de fout te berekenen, Gosset dat de
berekening bij kleine steekproeven anders moet, en de Literary Digest dat
omvang geen ontwerp vervangt. Elk van deze stappen vind je terug in de vorige lessen.
Als je ooit een enquête met veel antwoorden ziet, stel dan niet alleen de vraag *hoeveel*
mensen hebben gereageerd, maar vooral *wie*.

Bekijk [Gosset op de tijdlijn](/history) en het profiel van
[Neyman](/mathematicians/neyman).

## Bronnen

- [The Literary Digest, Wikipedia](https://en.wikipedia.org/wiki/The_Literary_Digest): de enquête van 1936, de omvang van de steekproef, het kader en Gallup.
- [Anders Nicolai Kiær, Wikipedia](https://en.wikipedia.org/wiki/Anders_Nicolai_Kiær): Kiær en de representatieve methode.
- [Ken Brewer, Three controversies in the history of survey sampling (Survey Methodology, 2013)](https://www150.statcan.gc.ca/pub/12-001-x/2013002/article/11883-eng.htm): Kiær in Bern en de rol van Neyman.
- [Jerzy Neyman, Wikipedia](https://en.wikipedia.org/wiki/Jerzy_Neyman): het artikel uit 1934 en de betrouwbaarheidsintervallen uit 1937.
- [William Gosset, MacTutor](https://mathshistory.st-andrews.ac.uk/Biographies/Gosset/): Guinness, Pearson en de t-verdeling.
- [William Sealy Gosset, Wikipedia](https://en.wikipedia.org/wiki/William_Sealy_Gosset): het pseudoniem Student en het artikel van 1908.
- [Handboek-inleiding over Laplace's schatting van de Franse bevolking, USGS](https://pubs.usgs.gov/publication/70186644): Laplace's ratioschatter.
- [NIST, kritieke waarden van de t-verdeling](https://www.itl.nist.gov/div898/handbook/eda/section3/eda3672.htm): de waarden in de t-tabel.
