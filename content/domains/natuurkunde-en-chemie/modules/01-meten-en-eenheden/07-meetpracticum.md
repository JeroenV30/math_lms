:::question Denk eerst zelf na
Je krijgt een onbeschreven, grijs metalen blokje onder ogen. Je mag het wegen en je mag het in water leggen, maar het niet beschadigen. Hoe kom je erachter van welk metaal het is, en hoe zeker zul je daar uiteindelijk van zijn? Schrijf eerst op welke grootheden je zou meten en welke je daaruit zou berekenen.
:::

## De onderzoeksvraag

In deze les gebruik je alles wat je tot nu toe hebt geleerd bij één samenhangend onderzoek. De vraag is geen kwestie van een formule invullen, maar een echte onderzoeksvraag: *van welk materiaal is het blokje gemaakt, en hoe zeker ben je daarvan?* Een stof herken je aan een eigenschap die niet van de grootte afhangt, en de dichtheid is zo’n eigenschap, zoals Archimedes’ kroonprobleem liet zien. Je meet dus massa en volume, berekent de dichtheid en vergelijkt het resultaat met tabelwaarden. Het interessante zit in de laatste stap: wat betekent “vergelijken” als zowel je meting als de tabel een onzekerheid heeft?

Een goed practicum begint met het ordenen van wat je gaat doen. Dat doe je in dezelfde volgorde als in les 2: eerst een afgebakende vraag, dan de grootheden en instrumenten, dan de procedure, dan de meting met eenheid en onzekerheid, en ten slotte de controle op aannemelijkheid. Het is de moeite waard om dat bij elk onderzoek, hoe klein ook, weer expliciet te doen: het voorkomt dat je tijdens het meten ontdekt dat je iets belangrijks bent vergeten.

Tabelwaarden voor de dichtheid bij kamertemperatuur zijn (in $\text{g/cm}^3$, afgerond): aluminium $2{,}70$, titanium $4{,}5$, ijzer $7{,}87$, staal ongeveer $7{,}8$, koper $8{,}96$, lood $11{,}3$. Voor legeringen als staal hangt de waarde af van de samenstelling; daarom is “ongeveer” hier het juiste woord.

## Twee manieren om het volume te bepalen

Bij een regelmatig blokje kun je het volume berekenen uit de afmetingen: lengte maal breedte maal hoogte. Zoals je in les 4 zag, tellen daarbij de relatieve onzekerheden van de drie ribben op, wat bij kleine afmetingen snel groot wordt. Bij een onregelmatig voorwerp werkt dat niet; dan gebruik je **verdringing**: je leest het waterniveau in een maatcilinder af vóór en na het onderdompelen, en het verschil is het volume van het voorwerp. Dit is de gedachte van Archimedes in de gedaante van een laboratoriumopstelling.

Verdringing heeft eigen valkuilen. De luchtbellen die aan het voorwerp blijven hangen, geven een te groot volume. Het waterniveau moet je op ooghoogte aflezen, aan de onderkant van de bolle meniscus, anders maak je een systematische afwijking. En de maatcilinder moet breed genoeg zijn om het voorwerp te laten zakken zonder dat water over de rand gaat, maar niet zo breed dat een klein volumeverschil bijna niet zichtbaar is: de afleesonzekerheid van een brede cilinder is groter in verhouding tot het verdrongen volume. Het is een afweging tussen twee soorten onzekerheid, waarmee je de procedure kunt optimaliseren.

:::example Het metaalblokje uitgewerkt
Je weegt een onbekend metaalblokje op een digitale weegschaal die $145{,}6\ \text{g}$ aangeeft (onzekerheid $0{,}1\ \text{g}$). In een maatcilinder met schaalverdeling om de $1\ \text{mL}$ lees je het waterniveau af: eerst $40{,}0\ \text{mL}$, na onderdompelen $58{,}5\ \text{mL}$.

**Stap 1. Volume.** $V = 58{,}5 - 40{,}0 = 18{,}5\ \text{mL} = 18{,}5\ \text{cm}^3$, omdat $1\ \text{mL} = 1\ \text{cm}^3$.

**Stap 2. Dichtheid.** $\rho = \dfrac{m}{V} = \dfrac{145{,}6\ \text{g}}{18{,}5\ \text{cm}^3} = 7{,}870\ \text{g/cm}^3$.

**Stap 3. Onzekerheid van het volume.** Elke aflezing heeft een afleesonzekerheid van een halve schaaldeel, $0{,}5\ \text{mL}$. Het volume is een *verschil* van twee aflezingen, dus tel je de absolute onzekerheden op: $\Delta V = 0{,}5 + 0{,}5 = 1{,}0\ \text{mL}$. Dat is $\dfrac{1{,}0}{18{,}5} \approx 5{,}4\,\%$.

**Stap 4. Onzekerheid van de dichtheid.** De massa draagt $\dfrac{0{,}1}{145{,}6} \approx 0{,}07\,\%$ bij. Samen is de relatieve onzekerheid ongeveer $5{,}5\,\%$, en dus $\Delta\rho \approx 0{,}055 \times 7{,}87 \approx 0{,}43\ \text{g/cm}^3$.

**Stap 5. Noteer.** Met passende cijfers: $\rho = (7{,}9 \pm 0{,}4)\ \text{g/cm}^3$.

**Conclusie.** Het interval loopt van ongeveer $7{,}4$ tot $8{,}3\ \text{g/cm}^3$. Aluminium ($2{,}70$), titanium ($4{,}5$) en lood ($11{,}3$) vallen daarbuiten, en koper ($8{,}96$) ook, hoewel niet ver. IJzer ($7{,}87$) en staal ($7{,}8$) liggen er middenin. Je mag dus zeggen dat het blokje waarschijnlijk van ijzer of staal is, maar je kunt die twee niet van elkaar onderscheiden.
:::

{{ exercises: 01-035, 01-036, 01-037 }}

## Wat de uitkomst wel en niet zegt

Je conclusie was: “ijzer of staal”, en niet “ijzer”. Dat is geen zwakte, maar precies wat de meting toelaat. Een conclusie die meer zegt dan de gegevens ondersteunen, is een van de klassieke fouten in natuurwetenschappelijk werk. De onzekerheid van $0{,}4\ \text{g/cm}^3$ is vooral het gevolg van de grove maatcilinder: de onzekerheid van de massa is verwaarloosbaar. Dat vertelt je meteen waar verbetering moet komen. Een nauwkeuriger volumemeting, bijvoorbeeld in een cilinder met fijnere verdeling of met een groter blokje, brengt de onzekerheid omlaag; een nauwkeuriger weegschaal heeft geen zin.

Dat inzicht, welke onzekerheid de totale bepaalt, is in de experimentele natuurkunde onmisbaar. Is één grootheid veel onzekerder dan de andere, dan bepaalt die vrijwel alleen de uitkomst, en levert het verbeteren van de andere bijna niets op. Je investeert tijd en geld dus daar waar het effect heeft.

Er is nog een tweede soort controle, die losstaat van de nauwkeurigheid: de plausibiliteit. Een dichtheid van $7{,}87\ \text{g/cm}^3$ ligt tussen water (1) en lood (11) en komt overeen met een gebruikelijk bouwmetaal. Een uitkomst van $0{,}787$ of $78{,}7$ had direct moeten leiden tot de vraag welke eenheid of komma niet klopt. Zulke fouten ontstaan gemakkelijk bij het omrekenen van mL, $\text{cm}^3$ en L.

## Een dun voorwerp meten via een stapel

Soms is het voorwerp zelf te klein voor het instrument. De dikte van één vel papier kun je met een liniaal niet bepalen: een vel is veel dunner dan één streepje. Maar je kunt de meting opschalen: meet een stapel van 500 vel en deel door het aantal. Het is een van de eenvoudigste voorbeelden van hoe je een grootheid kunt meten die onder de grens van je instrument ligt. Het werkt omdat de onzekerheid van de stapel (bijvoorbeeld $1\ \text{mm}$) wordt gedeeld door het aantal vellen, en dus per vel veel kleiner is dan het instrument zelf.

:::practice Papierdikte
Een pak van 500 vel kopieerpapier is $52\ \text{mm}$ dik, gemeten met een liniaal waarvan je de onzekerheid op $1\ \text{mm}$ schat. De dikte per vel is de gemeten dikte gedeeld door het aantal vel. Ook de onzekerheid wordt gedeeld door 500. Bij dit soort metingen is het zinvol om na te gaan of er eventuele systematische fouten zijn: is het pak ingedrukt, of zitten er luchtlagen tussen de vellen? Dit bepaalt of de uitkomst als “dikte van een vel” gebruikt mag worden.
:::

:::challenge Zelf een meting ontwerpen
Een stuk aluminiumfolie is te dun om met een liniaal te meten, maar je hebt een liniaal, een nauwkeurige weegschaal en een tabel met dichtheden. Je krijgt een rechthoekig stuk folie. Ontwerp een meting om de dikte te bepalen, met formule, benodigde metingen, en een inschatting van waar de grootste onzekerheid vandaan komt.
:::

{{ exercises: 01-038, 01-039 }}
