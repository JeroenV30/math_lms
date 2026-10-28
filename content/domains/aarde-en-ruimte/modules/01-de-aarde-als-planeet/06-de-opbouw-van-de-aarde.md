## Wat de oppervlakte niet vertelt

In 1970 begonnen Sovjetgeologen op het schiereiland Kola, in het uiterste noordwesten van Rusland, aan een boring die ze tot ver in de aardkorst wilden voortzetten. In 1989 bereikten ze 12.262 meter, de diepste boring ter wereld. Het is een indrukwekkende prestatie, die ook vrijwel niets zegt over het binnenste van de aarde. De aarde heeft een straal van 6371 kilometer; de boring kwam op ongeveer 0,19 procent van de afstand naar het middelpunt. Dat is vergelijkbaar met een speldenprik in de schil van een appel, waaruit je wilt afleiden hoe het klokhuis eruitziet. Onderaan was het bovendien zo heet (ongeveer 180 °C, veel meer dan verwacht) dat de boring niet verder kwam.

Voor de rest van de aarde zijn we dus aangewezen op indirecte informatie. Soms komt de aarde zelf iets aanreiken: een vulkaan die brokken gesteente uit de mantel meeneemt, of een kimberlietpijp die diamanten uit 150 kilometer diepte naar boven brengt. Maar dat zijn gaten in een gordijn. Het algemene beeld van een planeet met een korst, een mantel en een kern is afgeleid met twee soorten metingen: het gewicht van de aarde als geheel, en het gedrag van trillingen die er doorheen reizen.

## De aarde wegen

De eerste aanwijzing dat het binnenste anders is dan de oppervlakte, komt uit een eenvoudige vergelijking van dichtheden. Gesteenten aan het aardoppervlak hebben een dichtheid van ongeveer 2,7 tot 3,0 gram per kubieke centimeter. Hoe groot is de gemiddelde dichtheid van de hele aarde? Dat is te berekenen als je de massa en het volume kent. Het volume volgt uit de straal. De massa volgt uit de zwaartekracht: aan het oppervlak trekt de aarde een voorwerp met massa $m$ aan met een kracht $mg$, en volgens de zwaartekrachtwet van Newton is die gelijk aan $G M m / R^2$. Daaruit volgt

$$
M = \frac{g R^2}{G}
$$

Daarvoor is een getal nodig dat Newton niet kende: de gravitatieconstante $G$. De Engelse natuurkundige Henry Cavendish mat die in 1797–98 met een draaiweegschaal, een lichte staaf met twee loden bolletjes aan een dunne draad, die door twee grote loden bollen heel licht werd aangetrokken. Hij presenteerde zijn resultaat als "het wegen van de aarde": een gemiddelde dichtheid van ongeveer 5,4 maal die van water. Strikt genomen mat hij de aantrekking tussen loden bollen, maar uit die aantrekking volgt, met de bekende waarde van $g$, direct de massa van de aarde.

:::example De gemiddelde dichtheid van de aarde
**Gegeven.** $g = 9{,}81\ \mathrm{m/s^2}$, $R = 6{,}371 \times 10^6\ \mathrm{m}$, $G = 6{,}674 \times 10^{-11}\ \mathrm{m^3\,kg^{-1}\,s^{-2}}$.

**Model.** De aarde is een bol met straal $R$; de zwaartekracht aan het oppervlak wordt bepaald door haar totale massa $M$ alsof die in het middelpunt zat. De dichtheid is $\rho = M / (\tfrac{4}{3}\pi R^3)$.

**Berekening.**

$$
M = \frac{g R^2}{G} = \frac{9{,}81 \times (6{,}371 \times 10^6)^2}{6{,}674 \times 10^{-11}} \approx 5{,}97 \times 10^{24}\ \mathrm{kg}
$$

$$
\rho = \frac{M}{\tfrac{4}{3}\pi R^3} = \frac{3 g}{4 \pi G R} \approx 5{,}5 \times 10^{3}\ \mathrm{kg/m^3} = 5{,}5\ \mathrm{g/cm^3}
$$

**Controle.** De gemiddelde dichtheid is bijna twee keer zo groot als die van het gesteente aan het oppervlak (2,7 tot 3,0 g/cm³). Dat kan niet anders dan dat dieper in de aarde veel dichter materiaal zit, bijvoorbeeld metaal. Ruwe gesteenten alleen zijn niet zwaar genoeg.
:::

Zware metalen zoals ijzer en nikkel zijn de voor de hand liggende kandidaten, mede omdat we ze kennen uit ijzermeteorieten: brokken die waarschijnlijk afkomstig zijn van de kernen van kleine planeetachtige lichamen die uit elkaar zijn geslagen. En er is nog een aanwijzing: de aarde heeft een magnetisch veld, en William Gilbert concludeerde in 1600 in *De magnete* al dat de aarde zelf als een grote magneet werkt. Een ijzeren kern past daarbij. Maar hoe groot is die kern, en waar begint ze? Daarvoor was een ander soort meting nodig.

{{ exercises: 01-027, 01-028 }}

## Aardbevingsgolven als sonde

Bij een aardbeving komt energie vrij die zich in alle richtingen door de aarde verspreidt. Er zijn twee hoofdsoorten golven die door het binnenste reizen. **P-golven** (primaire golven) zijn drukgolven, zoals geluid: het materiaal wordt afwisselend samengedrukt en uitgerekt, in de looprichting van de golf. Ze reizen snel, in de korst met ongeveer 6 km/s, en komen als eerste aan. **S-golven** (secundaire golven) zijn schuifgolven: het materiaal beweegt dwars op de looprichting heen en weer. Ze zijn trager, in de korst ongeveer 3,5 km/s, en komen daarom later aan. Een cruciaal verschil is dat een schuifgolf niet door een vloeistof kan, omdat een vloeistof geen schuifkracht overbrengt, terwijl een drukgolf dat wel kan.

Wie het tijdstip van aankomst op een seismometer kent, kan daaruit de afstand tot de beving berekenen. Het verschil in aankomsttijd van P- en S-golven is daarvoor genoeg: hoe verder weg, hoe groter het verschil.

:::example Afstand tot een aardbeving uit het verschil tussen P en S
**Gegeven.** Een seismometer registreert een P-golf, en 45 seconden later de S-golf. Aanname: $v_P = 6{,}0\ \mathrm{km/s}$ en $v_S = 3{,}5\ \mathrm{km/s}$ in de korst.

**Model.** Beide golven leggen dezelfde afstand $d$ af, met constante snelheid. De aankomsttijden zijn $t_P = d/v_P$ en $t_S = d/v_S$.

**Berekening.** Het verschil is $\Delta t = t_S - t_P = d\,(1/v_S - 1/v_P)$. Oplossen voor $d$:

$$
d = \Delta t \cdot \frac{v_P v_S}{v_P - v_S} = 45 \times \frac{6{,}0 \times 3{,}5}{6{,}0 - 3{,}5} = 45 \times 8{,}4 \approx 378\ \mathrm{km}
$$

**Controle.** Elke seconde verschil komt overeen met ongeveer 8,4 km afstand. Eén station geeft alleen een afstand, dus een cirkel van mogelijke plaatsen. Met drie stations snijden de drie cirkels elkaar in het epicentrum. Het resultaat hangt af van de gekozen snelheden, die in werkelijkheid met de diepte veranderen.
:::

De Ierse geoloog Richard Dixon Oldham, die voor de Geological Survey of India werkte, zag in registraties van de grote aardbeving van 1897 in Assam drie duidelijk verschillende golfgroepen: P- en S-golven die door de aarde gingen, en trage oppervlaktegolven. Dat publiceerde hij in 1900. In zijn artikel van 1906 ging hij een stap verder. Hij had gezien dat P-golven op grote afstand van de beving later aankomen dan verwacht, en dat S-golven daar helemaal ontbraken. Zijn conclusie: er moet in het binnenste een kern zitten waarin P-golven merkbaar langzamer reizen dan in de mantel eromheen. Dat de kern vloeibaar is, werd pas later duidelijk; de wiskundige en geofysicus Harold Jeffreys redeneerde in 1926 dat ze vloeibaar moest zijn, mede omdat S-golven haar niet doorkomen.

## De grenzen in de aarde

Seismologen vonden niet een enkel bewijs, maar meerdere grenzen, elk op een eigen manier.

In 1909 bestudeerde de Kroatische seismoloog Andrija Mohorovičić de aardbeving van 8 oktober in de Kupavallei, ten zuidoosten van Zagreb. Op stations binnen enkele honderden kilometers zag hij twee P-golven aankomen: één die rechtstreeks door de korst kwam en één die eerder dan verwacht aankwam, op grotere afstand. De tweede moest door een laag zijn gereisd waar de golfsnelheid veel hoger was, en was op de grens van die laag gebroken (gerefracteerd), zodat ze op het laatste deel van haar weg sneller reisde. Daaruit volgde een scherpe grens op ongeveer 50 kilometer diepte, onder zijn eigen regio. Wereldwijd ligt die grens, de Moho, gemiddeld op ongeveer 35 kilometer onder de continenten en 5 tot 10 kilometer onder de oceaanbodem. Onder hoge gebergten gaat de korst dieper, tot circa 70 kilometer.

De grens tussen mantel en kern kwam in 1913 aan het licht. De Duits-Amerikaanse seismoloog Beno Gutenberg bepaalde uit de aankomsttijden van golven die de kern raken de diepte van de grens: ongeveer 2900 kilometer. Die grens verklaart twee verschijnselen. Op afstanden tussen ongeveer $104^\circ$ en $140^\circ$ van de beving komen er geen directe P-golven aan, omdat ze aan de kern worden afgebogen: de schaduwzone. En S-golven komen voorbij ongeveer $103^\circ$ van de beving in het geheel niet aan. Dat laatste is beslissend: S-golven kunnen niet door vloeistof, dus een groot deel van de kern is vloeibaar. Dat is een bijzondere conclusie, en ze volgt uit een afwezigheid. Een signaal dat niet aankomt, is ook informatie.

![Een doorsnede van de aarde op schaal: korst, mantel, vloeibare buitenkern en vaste binnenkern, met de dieptes van de grenzen. De korst is op deze schaal slechts ongeveer één beeldpunt dik.](/images/aarde-en-ruimte/m01-doorsnede.svg "Doorsnede van de aarde op schaal, met de dieptes van de seismische grenzen. Eigen schets.")

De derde ontdekking is van de Deense seismologe Inge Lehmann. In de schaduwzone, waar volgens het model van een homogene vloeibare kern helemaal geen P-golven zouden moeten aankomen, registreerde ze zwakke signalen. In 1936 verklaarde ze die in een korte publicatie, getiteld *P'*, met een kleine vaste kern binnen de vloeibare kern: golven die op de grens van die binnenkern worden teruggekaatst of gebroken, kunnen in de schaduwzone terechtkomen. De straal van die binnenkern is ongeveer 1220 kilometer. Dat de binnenkern echt vast is, werd in de jaren zeventig bevestigd uit metingen aan trillingen van de hele aarde na grote aardbevingen. Het is een mooi voorbeeld van een afwijking die niet als storing werd weggeschoven, maar als aanwijzing werd genomen.

{{ exercises: 01-029, 01-030, 01-031, 01-032 }}

## Het beeld dat uit de metingen volgt

Uit al deze gegevens ontstaat een gelaagde aarde. De **korst** is dun: op schaal ongeveer als de schil van een appel. De **mantel** is vast, maar over geologische tijd kruipt hij; hij loopt van de Moho tot 2891 kilometer diepte en maakt het grootste deel van het volume uit. In de mantel liggen op ongeveer 410 en 660 kilometer sprongen in de golfsnelheid, die samenhangen met overgangen van mineralen naar dichtere kristalstructuren. De **buitenkern** is vloeibaar, bestaat vooral uit ijzer met nikkel en lichtere elementen, en loopt van 2891 tot ongeveer 5150 kilometer. De stromingen in die vloeibare, elektrisch geleidende laag onderhouden het aardmagnetische veld. De **binnenkern**, ongeveer 1220 kilometer in straal, is vast, omdat de druk er met meer dan drie miljoen keer de luchtdruk zo groot is dat het metaal ondanks een temperatuur van circa 5000 tot 6000 kelvin stolt. De kern is ongeveer een derde van de massa van de aarde, maar slechts ongeveer een zesde van het volume.

Dat beeld is gebaseerd op golfsnelheden, en daaruit volgt niet automatisch wat de materialen zijn. Dat laatste wordt afgeleid door de golfsnelheden te vergelijken met wat we in het laboratorium meten aan gesteenten onder hoge druk, de dichtheid, de meteorieten en de samenstelling van de zon. Op elk van die stappen kan de interpretatie verschuiven. Het model is dus een voorlopig, maar goed getoetst resultaat, dat in de loop van de eeuw steeds verder is verfijnd, met onder meer het referentiemodel PREM uit 1981 van Adam Dziewonski en Don Anderson. De hoofdlijnen, zoals een vaste mantel, een vloeibare buitenkern en een vaste binnenkern, zijn al meer dan een eeuw onveranderd.
