:::question Denk eerst zelf na
Je legt een rode bloedcel in zuiver water. Binnen enkele minuten is hij gesprongen. Je legt dezelfde cel in een flinke zoutoplossing: hij schrompelt. In een oplossing van 0,9% keukenzout verandert er niets. Wat zegt dit over de grens van de cel? Welke stof of stoffen bewegen waarheen, en wat drijft die beweging?
:::

## Een grens die kiest

Een cel is geen zakje dat alles doorlaat, en ook geen gesloten blik. Ze moet voedingsstoffen en zuurstof opnemen, afvalstoffen kwijtraken, signalen ontvangen en daarbij haar eigen samenstelling anders houden dan die van de omgeving. Dat kan alleen met een grens die selectief doorlaat: het **celmembraan**. In dezelfde zin hebben organellen eigen membranen, waarmee ze hun eigen binnenmilieu handhaven.

Hoe het membraan is gebouwd, werd stap voor stap uitgezocht. In 1925 deden de Leidse onderzoekers Evert Gorter en François Grendel een beroemd experiment. Ze haalden alle vetachtige stoffen (lipiden) uit een bekend aantal rode bloedcellen, spreidden ze uit tot een laagje op water en maten het oppervlak. Dat oppervlak bleek ongeveer twee keer zo groot als het oppervlak van de cellen waaruit de lipiden afkomstig waren. Ze concludeerden dat het membraan uit een dubbele laag lipidemoleculen bestaat. Sommige van hun metingen en aannames bevatten fouten die elkaar bij toeval grotendeels opheven, maar hun conclusie bleek juist.

Latere onderzoekers vulden dat beeld aan. In 1972 beschreven Seymour Singer en Garth Nicolson het **vloeibaar-mozaïekmodel**: een dubbellaag van fosfolipiden waarin eiwitten drijven en kunnen bewegen, zoals schepen op een vloeibaar oppervlak. De lipiden en de eiwitten verplaatsen zich zijwaarts, daarom heet het model vloeibaar, en de eiwitten vormen een mozaïek. Die uitspraak is later bevestigd met elektronenmicroscopie en met fluorescentiemetingen, waarbij gemerkte eiwitten in het membraan bleken te bewegen.

![Doorsnede van een celmembraan met fosfolipiden en membraaneiwitten](/images/biologie/m01-membraan.svg "Het vloeibaar-mozaïekmodel: een dubbellaag fosfolipiden met eiwitten. Eigen schematische tekening.")

## Waarom een dubbellaag?

Een **fosfolipide** heeft een waterlievende (hydrofiele) kop en twee waterafstotende (hydrofobe) staarten. Zet je zulke moleculen in water, dan keren de staarten zich van het water af en vormen de koppen het grensvlak met water. Zo ontstaat vanzelf een dubbellaag met de staarten naar binnen: een structuur die ontstaat doordat dat de laagste energie geeft, zonder dat iemand haar bouwt. Daarmee verklaart de eigenschap van het molecuul de eigenschap van het membraan: de binnenkant van de dubbellaag is vetachtig en laat geladen deeltjes en grotere moleculen niet door.

Wat gaat er dan wel doorheen? Kleine ongeladen moleculen (zuurstof, koolstofdioxide) en vetoplosbare moleculen glijden door de dubbellaag. Water kan met moeite, in kleine hoeveelheden. Geladen deeltjes als natrium-, kalium- en chloride-ionen, en grotere polaire moleculen als glucose, kunnen dat niet zelf en hebben daarvoor membraaneiwitten nodig. Dat maakt het membraan **selectief doorlaatbaar**: de cel bepaalt via haar eiwitten wat erin en eruit gaat.

## Diffusie

Moleculen in een vloeistof of gas bewegen voortdurend en willekeurig door hun warmte-energie. Als er ergens veel zijn en elders weinig, leidt die willekeurige beweging er netto toe dat ze zich verspreiden, van hoge naar lage concentratie. Dit heet **diffusie**. Er is geen sturing en geen energie van de cel voor nodig. Een druppel inkt in water kleurt uiteindelijk het hele glas, ook zonder roeren.

Diffusie is snel over korte afstanden, maar traag over lange. De tijd die een molecuul nodig heeft voor een afstand $x$ neemt niet evenredig toe met $x$, maar met $x^2$:

$$
t \approx \frac{x^2}{2D}
$$

Hierin is $D$ de diffusiecoëfficiënt, voor een klein molecuul in water ongeveer $10^{-9}\ \text{m}^2/\text{s}$. Over $10\ \mu\text{m}$ (de breedte van een cel) duurt het dan $\dfrac{(10^{-5})^2}{2\cdot 10^{-9}} = 0{,}05$ seconde. Over $1\ \text{mm}$ is het $\dfrac{(10^{-3})^2}{2\cdot 10^{-9}} = 500$ seconde, ruim acht minuten, en over $1\ \text{cm}$ ongeveer veertien uur. Verhoog je de afstand met een factor 10, dan kost het honderd keer zoveel tijd. Dit is een van de belangrijkste redenen waarom cellen klein zijn en waarom grote organismen een bloedsomloop nodig hebben: diffusie alleen werkt niet over centimeters.

{{ exercises: 01-023, 01-024 }}

:::example Diffusietijd berekenen
**Opgave.** Hoe lang duurt het voordat een zuurstofmolecuul, met $D = 2 \cdot 10^{-9}\ \text{m}^2/\text{s}$ in water, gemiddeld $0{,}1\ \text{mm}$ heeft afgelegd?

**Stap 1: eenheden.** $0{,}1\ \text{mm} = 10^{-4}\ \text{m}$.

**Stap 2: invullen.** $t \approx \dfrac{x^2}{2D} = \dfrac{(10^{-4})^2}{2 \cdot 2 \cdot 10^{-9}} = \dfrac{10^{-8}}{4 \cdot 10^{-9}} = 2{,}5\ \text{s}$.

**Stap 3: interpreteren.** In een weefsel waar cellen meer dan zo'n 0,1 mm van een bloedvat liggen, kost aanvoer van zuurstof per diffusie seconden en meer. Dat past bij het feit dat zelden een cel in ons lichaam verder dan enkele honderden micrometers van een haarvat verwijderd is.

**Let op.** Het is een gemiddelde verplaatsing en een vereenvoudigd model (diffusie in één dimensie, in water): in werkelijkheid hindert celinhoud de beweging. Gebruik de formule om ordes van grootte te vergelijken, niet voor nauwkeurige voorspellingen.
:::

## Transport met en zonder energie

Er zijn globaal drie manieren waarop stoffen het membraan passeren.

**Passief transport** volgt een concentratieverschil en kost de cel geen energie. Dat gaat op twee manieren. Bij *eenvoudige diffusie* glijden kleine of vetoplosbare moleculen direct door de dubbellaag. Bij *gefaciliteerde diffusie* helpt een eiwit: een kanaaleiwit vormt een doorgang waar bepaalde ionen of moleculen doorheen kunnen, een draagmolecuul bindt een stof, verandert van vorm en geeft haar aan de andere kant af. Het eiwit bepaalt welke stof erdoor kan, maar de richting blijft die van hoge naar lage concentratie. Water kan ook door speciale kanalen, de aquaporines, waarvan het bestaan in 1992 door Peter Agre werd aangetoond (Nobelprijs voor Scheikunde in 2003).

**Actief transport** werkt tegen een concentratieverschil in en vraagt energie, meestal in de vorm van ATP. Het bekendste voorbeeld is de natrium-kaliumpomp in dierlijke cellen: bij elke cyclus worden drie natriumionen naar buiten en twee kaliumionen naar binnen gepompt. Daardoor is de natriumconcentratie buiten de cel hoog en binnen laag, en andersom voor kalium. Dat verschil is nodig voor het functioneren van zenuw- en spiercellen. Als de ATP-voorziening stopt, stopt de pomp en loopt het verschil leeg. Dat hoort bij de homeostase: een cel houdt haar binnenmilieu actief anders dan de omgeving.

**Blaasjestransport.** Grote deeltjes en moleculen gaan niet door een kanaal maar worden ingesloten of uitgestoten door blaasjes. Bij *endocytose* stulpt het membraan in en snoert een blaasje af met materiaal van buiten, bij *exocytose* smelt een blaasje met het membraan samen en laat de inhoud naar buiten vrij. Zo scheidt een alvleeskliercel insuline uit. Dit transport vraagt eveneens energie.

## Osmose

**Osmose** is de diffusie van water door een selectief doorlatend membraan, van een gebied met veel water (lage concentratie opgeloste stoffen) naar een gebied met minder water (hoge concentratie opgeloste stoffen). Je kunt dat ook zo zeggen: het water volgt de opgeloste deeltjes. Als de opgeloste stof het membraan niet kan passeren maar water wel, verplaatst water zich naar de kant met de meeste opgeloste deeltjes, totdat het verschil is opgeheven of een tegendruk dit stopt.

Het woord osmose werd geïntroduceerd door de Franse fysioloog Henri Dutrochet in 1826. De Duitse plantkundige Wilhelm Pfeffer mat in 1877 de druk die ermee gepaard gaat. De Nederlander Hugo de Vries gebruikte in de jaren 1880 plasmolyse van plantencellen om de concentratie van het celsap te meten: hij zocht de oplossing waarin de cel nét begon te krimpen, en wist dan dat de buitenoplossing dezelfde concentratie als de cel had.

Voor cellen onderscheiden we drie situaties, afhankelijk van de oplossing waarin de cel ligt:

| Oplossing buiten vergeleken met cel | Naam | Wat gebeurt er met een dierlijke cel | Wat gebeurt er met een plantencel |
|---|---|---|---|
| Lagere concentratie opgeloste stoffen | hypotoon | Water stroomt naar binnen; de cel zwelt en kan barsten | Water stroomt naar binnen; de cel wordt stijf (turgor), de wand houdt haar tegen |
| Gelijke concentratie | isotoon | Geen netto verplaatsing | Geen netto verplaatsing; de cel is slap |
| Hogere concentratie | hypertoon | Water verlaat de cel; ze schrompelt | Water verlaat de cel; het protoplast trekt los van de wand (plasmolyse) |

Hiermee verklaar je de vraag aan het begin. De rode bloedcel in zuiver water ligt in een hypotone oplossing: water stroomt naar binnen en de cel barst (hemolyse). In sterke zoutoplossing is de omgeving hypertoon en schrompelt de cel. Een oplossing van 0,9% NaCl (ongeveer 0,15 mol/L) is isotoon met lichaamsvloeistof, en wordt daarom als "fysiologische zoutoplossing" gebruikt voor infusen.

Let op de misvatting dat "osmose water is dat naar de lage concentratie stroomt". Dat klopt alleen als je het over de concentratie *water* hebt. Zegt iemand "naar de lage concentratie" zonder meer, dan denk je al snel aan opgeloste stof, en dan wijs je de verkeerde kant op. Formuleer daarom altijd: water stroomt naar de kant met de hoogste concentratie opgeloste deeltjes.

:::example Een aardappelexperiment ontleed
**Opgave.** Een leerling snijdt zes even grote aardappelstaafjes, weegt ze, legt ze 24 uur in suikeroplossingen van verschillende concentratie en weegt ze opnieuw. De resultaten zijn (fictieve meetgegevens):

| Suikeroplossing (mol/L) | Massa begin (g) | Massa eind (g) | Verandering (%) |
|---|---|---|---|
| 0,0 | 2,00 | 2,24 | +12 |
| 0,1 | 2,00 | 2,12 | +6 |
| 0,2 | 2,00 | 2,00 | 0 |
| 0,3 | 2,00 | 1,88 | −6 |
| 0,4 | 2,00 | 1,78 | −11 |

**Stap 1: variabelen.** Onafhankelijk: de concentratie van de oplossing. Afhankelijk: de massaverandering. Constant: de grootte van de staafjes, de temperatuur, de tijd, de soort aardappel.

**Stap 2: berekening.** Procentuele verandering $= \dfrac{\text{eind} - \text{begin}}{\text{begin}} \cdot 100\%$. Voor $0{,}3\ \text{mol/L}$: $\dfrac{1{,}88 - 2{,}00}{2{,}00} \cdot 100 = -6\%$.

**Stap 3: interpretatie.** Bij 0,2 mol/L verandert de massa niet. Daar is de oplossing isotoon met het aardappelweefsel: de netto stroom van water is nul. Beneden die concentratie (hypotoon) neemt het weefsel water op en wordt zwaarder; erboven (hypertoon) verliest het water.

**Stap 4: grens van de conclusie.** Je concludeert dat de concentratie van het celsap overeenkomt met ongeveer 0,2 mol/L suiker, met een onzekerheid van de afstand tussen de gemeten concentraties (hier 0,1 mol/L). Wil je het nauwkeuriger weten, dan meet je bij tussenliggende concentraties en herhaal je de proef meerdere keren, omdat één staafje een toevallige afwijking kan hebben.
:::

{{ exercises: 01-025, 01-026, 01-027, 01-028, 01-037 }}
