# Bezit, schuld en valse wortels

Negatieve getallen voelen vandaag vanzelfsprekend: ze staan op elke thermometer en elk bankafschrift. Toch hebben ze een opvallend ongelijkmatige geschiedenis. In China en India werd er al vroeg vlot mee gerekend, terwijl Europese wiskundigen nog in de 18e eeuw volhielden dat "minder dan niets" niet kan bestaan. In deze les volg je die geschiedenis. Je zult zien dat het steeds om dezelfde vraag ging: is een getal een **hoeveelheid**, of is het iets waarmee je volgens vaste regels mag **rekenen**?

## 1. China: rode en zwarte staafjes

In module 3 zag je hoe men in het oude China rekende met **rekenstaafjes**: korte staafjes die op een rekenbord werden gelegd, in een echt positiestelsel. Datzelfde rekenbord was de plek waar negatieve getallen voor het eerst systematisch werden gebruikt.

Het belangrijkste wiskundige handboek uit deze traditie is de *Jiuzhang suanshu*, de **Negen Hoofdstukken over de Wiskundige Kunst**. Het boek is geen werk van één auteur, maar een verzameling van 246 vraagstukken met oplossingsmethoden, die waarschijnlijk tussen ongeveer 200 v.Chr. en 50 n.Chr. haar uiteindelijke vorm kreeg en oudere stof bevat. Over de precieze datering verschillen historici van mening.

Het achtste hoofdstuk heet ***Fangcheng***, wat je kunt vertalen als "rechthoekige rangschikking". Daarin worden problemen opgelost die wij nu een **stelsel van vergelijkingen** zouden noemen. Het eerste vraagstuk gaat over graan:

:::history Negen Hoofdstukken, hoofdstuk 8, vraagstuk 1 (vrij weergegeven)
3 bundels graan van de beste kwaliteit, 2 van de middelste en 1 van de slechtste leveren samen 39 *dou* graan op. 2 bundels van de beste, 3 van de middelste en 1 van de slechtste leveren 34 *dou*. 1 van de beste, 2 van de middelste en 3 van de slechtste leveren 26 *dou*. Hoeveel levert één bundel van elke soort?
:::

De rekenaar legde de getallen van elke voorwaarde in een **kolom** op het rekenbord. Daarna trok hij veelvouden van de ene kolom van de andere af, net zo lang tot er in een kolom nog maar één onbekende over was. Dat is in wezen dezelfde methode die je in module 20 (stelsels) en in de lineaire algebra tegenkomt, en die in Europa veel later naar Gauss werd vernoemd. (Het antwoord, voor wie het wil controleren: $9\tfrac{1}{4}$, $4\tfrac{1}{4}$ en $2\tfrac{3}{4}$ *dou*.)

Bij dat kolomsgewijs aftrekken kom je onvermijdelijk in vakken waar een groter getal van een kleiner moet worden afgetrokken. De *Negen Hoofdstukken* lost dat op met een aparte regel, de ***zheng fu shu***: de "methode voor positief en negatief". *Zheng* betekent positief (letterlijk zoiets als "recht"), *fu* negatief ("verschuldigd", "drukkend"). In moderne woorden zegt de regel ongeveer het volgende.

:::theory De zheng fu-regel (in moderne woorden)
**Aftrekken.** Hebben de twee getallen dezelfde naam (beide positief of beide negatief), trek dan hun grootten van elkaar af. Hebben ze verschillende namen, tel dan hun grootten op. Moet je een positief getal aftrekken van een leeg vak, dan wordt het negatief; moet je een negatief getal aftrekken van een leeg vak, dan wordt het positief.

**Optellen.** Hebben de getallen verschillende namen, trek dan hun grootten van elkaar af. Hebben ze dezelfde naam, tel dan hun grootten op. Een positief getal in een leeg vak blijft positief, een negatief blijft negatief.
:::

Lees de regel voor aftrekken nog eens langzaam. "Verschillende namen: tel de grootten op" betekent bijvoorbeeld: positief 5 min negatief 8 is positief 13. Dat is precies $5 - (-8) = 13$ uit les 3, ruim tweeduizend jaar geleden opgeschreven. En "een negatief getal aftrekken van een leeg vak maakt het positief" is $0 - (-a) = a$.

![Rekenstaafjes in rood en zwart](/images/diagrams/m13-rekenstaafjes-rood-zwart.svg "Een schets van staafjescijfers: 23 in rode staafjes (positief) en −14 in zwarte staafjes (negatief). De tientallen liggen, de eenheden staan. Eigen tekening naar de beschrijving bij Liu Hui.")

Hoe zag je op het rekenbord of een getal positief of negatief was? Daarover schreef de wiskundige **Liu Hui** in 263 n.Chr. een commentaar bij de *Negen Hoofdstukken*. Hij geeft de beroemde afspraak: **rode staafjes zijn positief, zwarte staafjes zijn negatief**. Liu Hui ging verder dan het voorschrift: hij gaf ook een toelichting bij de regels, en beschreef positief en negatief als twee tegengestelde soorten hoeveelheden, zoals winst en verlies, die elkaar kunnen opheffen.

Twee kanttekeningen. Ten eerste: de *Negen Hoofdstukken* geeft alleen regels voor optellen en aftrekken. Over het vermenigvuldigen van twee negatieve getallen zegt het boek niets. Ten tweede: in de *Negen Hoofdstukken* zijn negatieve getallen vooral **hulpgetallen** onderweg. Als eindantwoord van een vraagstuk komen ze niet voor.

{{ exercise: 13-038 }}

## 2. India: bezit en schuld bij Brahmagupta

In 628 voltooide de astronoom **Brahmagupta** in Bhillamala (het huidige Bhinmal in Rajasthan) zijn *Brahmasphutasiddhanta*. In module 2 zag je dat hij daarin de nul als volwaardig getal behandelde. In hetzelfde werk staan de oudste bekende volledige rekenregels voor positieve en negatieve getallen, inclusief vermenigvuldigen en delen.

Brahmagupta gebruikte daarbij twee woorden uit het dagelijks leven: ***dhana***, **bezit**, voor een positief getal, en ***ṛṇa***, **schuld**, voor een negatief getal. In de Engelse vertaling die MacTutor citeert, luiden enkele van zijn regels zo (hier in het Nederlands weergegeven):

> Een schuld min nul is een schuld. Een bezit min nul is een bezit. Nul min nul is nul.
> Een schuld afgetrokken van nul is een bezit. Een bezit afgetrokken van nul is een schuld.
> Het product van nul en een schuld of een bezit is nul.
> Het product of quotiënt van twee bezittingen is een bezit. Het product of quotiënt van twee schulden is een bezit. Het product of quotiënt van een schuld en een bezit is een schuld.

Vergelijk dat met les 4. "Het product van twee schulden is een bezit" is de regel min maal min is plus, uitgesproken in 628. Brahmagupta gaf er overigens geen bewijs bij; het waren voorschriften, in versvorm, om te onthouden en toe te passen.

Niet al zijn regels hebben de tijd doorstaan. Brahmagupta schreef ook dat nul gedeeld door nul nul is. Dat accepteren we vandaag niet: $0 : 0$ heeft geen eenduidige uitkomst, omdat elk getal maal nul nul geeft.

![Brahmagupta's regels en de moderne tekenregel](/images/diagrams/m13-brahmagupta-regels.svg "Brahmagupta's regels in een tabel: bezit (+) en schuld (−) bij vermenigvuldigen. Het patroon is precies de moderne tekenregel.")

Ook in India bleef er twijfel. De wiskundige **Bhaskara II** (12e eeuw) vond bij een vierkantsvergelijking zowel een positieve als een negatieve oplossing, maar schreef dat de negatieve oplossing in dat geval niet moest worden gebruikt, omdat mensen negatieve wortels niet aanvaarden. Rekenen met schulden was dus geaccepteerd; een negatief getal als antwoord op een meetkundige vraag nog niet.

## 3. De islamitische wereld

Via vertalingen kwam de Indiase rekenkunde in de 8e en 9e eeuw naar Bagdad. **Al-Khwarizmi** (ca. 820), wiens boek over de algebra je later in de cursus tegenkomt, vermeed negatieve getallen. Hij werkte met vergelijkingen die hij steeds zo schreef dat alle termen positief waren, en dat leverde verschillende "soorten" vergelijkingen op die elk een eigen oplossingsmethode kregen. Latere wiskundigen in de islamitische wereld rekenden wel met negatieve termen. In de 12e eeuw formuleerde **al-Samaw'al** de tekenregels voor vermenigvuldigen expliciet: het product van een negatief getal met een positief getal is negatief, en met een negatief getal positief.

## 4. Europa: eeuwen van weerstand

In Europa was de achterdocht het grootst. Dat had een lange voorgeschiedenis. De Griekse wiskunde dacht in **grootheden**: lengtes, oppervlakten, inhouden. Een lengte kan niet negatief zijn. Toen de Griekse wiskundige **Diophantus** (3e eeuw n.Chr.) een vergelijking tegenkwam die neerkomt op $4x + 20 = 4$, noemde hij die ongerijmd: de oplossing zou $x = -4$ zijn, en dat was voor hem geen getal.

Een greep uit de Europese reacties, eeuwen later:

- **Fibonacci** (1202) liet in zijn *Liber Abaci* bij een handelsvraagstuk een negatieve uitkomst toe door die te lezen als een **schuld**. De geldcontext maakte het denkbaar.
- **Michael Stifel** (1544) noemde negatieve getallen in zijn *Arithmetica integra* *numeri absurdi*: ongerijmde getallen.
- **Gerolamo Cardano** (1545) gaf in zijn *Ars Magna* negatieve oplossingen van vergelijkingen wel, maar noemde ze ***ficti***, verzonnen of fictief, tegenover de "ware" positieve oplossingen. Zijn boek wordt gezien als de eerste serieuze behandeling van negatieve getallen in Europa.
- **René Descartes** (1637) noemde in *La Géométrie* de negatieve oplossingen van een vergelijking ***fausses racines***, **valse wortels**, tegenover de *vraies racines*, de ware wortels. Hij liet wel zien dat je een vergelijking met valse wortels kunt omzetten in een met ware wortels. Het assenstelsel dat naar hem "cartesisch" heet, werd pas later gebruikelijk in de vorm met vier kwadranten en negatieve coördinaten.
- **Francis Maseres** (1758) schreef dat negatieve getallen de hele leer van de vergelijkingen "verduisteren" en duister maken wat van nature heel eenvoudig is. Hij wilde ze het liefst helemaal uit de algebra verbannen.

Waarom die weerstand? Een getal was voor deze wiskundigen in de eerste plaats een **hoeveelheid** of een **grootheid**: zoveel stuks, zoveel el. "Minder dan niets" is als hoeveelheid inderdaad onzin. Pas toen men getallen ging zien als dingen die je definieert door de **regels** waaraan ze voldoen, verdween het probleem. In de 19e eeuw beschreven onder anderen George Peacock en Augustus De Morgan in Engeland de rekenwetten als logische regels. Daarna werd het gangbaar om de gehele getallen formeel op te bouwen uit de natuurlijke getallen. In die opvatting is de vraag "bestaat $-3$ echt?" niet meer relevant. Wat telt, is dat de regels consistent zijn. Dat is precies het soort argument dat je in les 4 gebruikte: min maal min moet plus zijn, anders klopt de distributieve eigenschap niet meer.

:::question Hoeveelheid of regel?
Kun je je de positie van Maseres voorstellen? Bedenk een situatie waarin een negatief antwoord geen betekenis heeft (bijvoorbeeld een aantal personen), en een situatie waarin het wel betekenis heeft. Wat zegt dat over de vraag of negatieve getallen "bestaan"?
:::

## 5. Boekhouden: rood staan zonder minteken

Terwijl wiskundigen twijfelden, hadden kooplieden een praktische oplossing. Het **dubbel boekhouden**, dat de Italiaanse wiskundige Luca Pacioli in 1494 als eerste in druk beschreef in zijn *Summa de arithmetica*, werkt met twee kolommen, *debet* en *credit*, en elke transactie wordt aan beide kanten van de boeken vastgelegd. Elk bedrag wordt als positief getal in de juiste kolom gezet. Een tekort hoef je dan niet met een minteken te schrijven; het blijkt uit de kolom waarin het staat, of uit welke kolom het grootste totaal heeft. Zo konden handelaars eeuwenlang met schulden en tekorten werken zonder ooit een negatief getal op te schrijven.

Later werd het in de boekhouding gebruikelijk om tekorten en verliezen in **rode inkt** te noteren. Daar komt de uitdrukking **"rood staan"** vandaan, en het Engelse *in the red*. Het is een aardige omkering van de Chinese gewoonte: op het rekenbord van Liu Hui was rood juist **positief**, en zwart negatief.

:::question Het nulpunt kiezen
Bij een bergroute spreek je af dat het beginpunt hoogte nul heeft. Een ander beginpunt zou andere hoogtegetallen geven. Welke grootheid blijft hetzelfde als je twee plekken met elkaar vergelijkt? En welke "keuze van nulpunt" maakt het dubbel boekhouden eigenlijk?
:::

{{ exercise: 13-026 }}

## Bronnen

- MacTutor History of Mathematics, *Brahmagupta* (met de regels voor bezit en schuld): https://mathshistory.st-andrews.ac.uk/Biographies/Brahmagupta/
- MacTutor, *Nine chapters on the mathematical art* (datering, Liu Hui, hoofdstuk 8): https://mathshistory.st-andrews.ac.uk/HistTopics/Nine_chapters/
- Wikipedia (EN), *Negative number* (geschiedenis: Liu Hui, Diophantus, Bhaskara II, al-Khwarizmi, al-Samaw'al, Fibonacci, Stifel, Cardano): https://en.wikipedia.org/wiki/Negative_number
- Wikipedia (EN), *Fangcheng (mathematics)*: https://en.wikipedia.org/wiki/Fangcheng_(mathematics)
- Wikipedia (EN), *The Nine Chapters on the Mathematical Art*: https://en.wikipedia.org/wiki/The_Nine_Chapters_on_the_Mathematical_Art
- NRICH (University of Cambridge), *The History of Negative Numbers* (Brahmagupta, Pacioli, Cardano, Maseres 1758, 19e eeuw): https://nrich.maths.org/5961
- University of Texas, *History of Negative Numbers* (Descartes' valse wortels, Maseres): https://web.ma.utexas.edu/users/mks/326K/Negnos.html
