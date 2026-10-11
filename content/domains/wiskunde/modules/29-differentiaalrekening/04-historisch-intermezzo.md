# Newton, Leibniz en de strijd om de calculus

De differentiaalrekening wordt meestal toegeschreven aan twee mannen: de Engelsman **Isaac Newton** (1643–1727) en de Duitser **Gottfried Wilhelm Leibniz** (1646–1716). Ze vonden haar, voor zover we weten, onafhankelijk van elkaar, met verschillende ideeën en een verschillende notatie. Dat leidde tot een van de bitterste ruzies uit de geschiedenis van de wetenschap. Maar het verhaal begint eerder, en het eindigt pas in de negentiende eeuw.

## 1. Voorlopers: Fermat, Descartes en Barrow

Newton en Leibniz begonnen niet bij nul. In de decennia vóór hen hadden verschillende wiskundigen methoden bedacht voor raaklijnen en extremen, die achteraf gezien al dicht bij de differentiaalrekening kwamen.

**Pierre de Fermat** (1601–1665) was jurist in Toulouse en wiskundige in zijn vrije tijd. Rond 1636–1638 circuleerde in Parijs, onder meer via de geleerde Marin Mersenne, zijn korte verhandeling *Methodus ad disquirendam maximam et minimam* ("Methode om maxima en minima te onderzoeken"). Zijn bekendste voorbeeld: verdeel een lijnstuk met lengte $b$ zo in twee stukken dat het product van de stukken zo groot mogelijk is.

Fermat noemde één stuk $x$, zodat het product $x(b - x) = bx - x^2$ is. Daarna verving hij $x$ door $x + e$, met $e$ een kleine toename, en stelde de twee uitdrukkingen "bijna gelijk" (Latijn: *adaequare*):

$$
bx - x^2 \;\sim\; b(x + e) - (x + e)^2 = bx - x^2 + be - 2xe - e^2
$$

Wegstrepen wat aan beide kanten staat, geeft $0 \sim be - 2xe - e^2$. Delen door $e$: $0 \sim b - 2x - e$. Ten slotte liet hij de overgebleven $e$ weg, en vond $b = 2x$, dus $x = \frac{b}{2}$: het product is maximaal als je het lijnstuk precies doormidden deelt.

Vergelijk dat met wat je in les 2 deed. Fermat bekeek $f(x + e) - f(x)$, deelde door $e$ en liet $e$ verdwijnen. Dat is in wezen het differentiequotiënt en zijn limiet, al had hij nog geen algemeen begrip van "afgeleide". Wat hij precies bedoelde met *adaequalitas* is onder historici nog steeds onderwerp van discussie. **René Descartes**, die in 1637 in *La Géométrie* een eigen, algebraïsche methode voor raaklijnen had gepubliceerd, bestreed Fermats methode fel, maar gaf later in een brief toe dat ze correct was.

{{ exercise: 29-031 }}

**Isaac Barrow** (1630–1677) was de eerste Lucasiaanse hoogleraar wiskunde in Cambridge. In zijn *Lectiones geometricae* (1670) beschreef hij een methode voor raaklijnen met een klein driehoekje met zijden "$\Delta x$" en "$\Delta y$", en hij zag in dat het vinden van raaklijnen en het berekenen van oppervlakten in zekere zin elkaars omgekeerde zijn. Barrow kende Newton goed; in 1669 trad hij af als hoogleraar, en Newton volgde hem op.

## 2. Newton in Woolsthorpe: fluenten en fluxies

Isaac Newton werd geboren op 4 januari 1643 (naar de moderne kalender; volgens de toen in Engeland gebruikte kalender op eerste kerstdag 1642) in Woolsthorpe, Lincolnshire. In 1665 sloot de universiteit van Cambridge vanwege de pest, en Newton bracht het grootste deel van 1665 en 1666 door op de boerderij van zijn familie. In die periode, toen hij nog geen 25 was, legde hij de basis voor zijn werk aan de differentiaal- en integraalrekening, de optica en de zwaartekracht.

Newton dacht aan grootheden die in de tijd **vloeien**, zoals de plaats van een bewegend punt. Zo'n veranderende grootheid noemde hij een **fluent**, en de snelheid waarmee ze verandert een **fluxie** (van het Latijnse *fluxio*, "vloeiing"). Een fluxie van $y$ schreef hij later als $\dot{y}$: een $y$ met een punt erboven. Voor een oneindig klein tijdsverloop gebruikte hij de letter $o$.

Zo rekende Newton, in moderne schrijfwijze, de fluxie van $y = t^2$ uit. In een klein tijdje $o$ wordt $t$ gelijk aan $t + o$ en $y$ gelijk aan $(t + o)^2 = t^2 + 2to + o^2$. De toename van $y$ is $2to + o^2$; gedeeld door $o$ geeft dat $2t + o$. Omdat $o$ "oneindig klein" is, laat hij die term weg: de fluxie is $2t$. Dat is precies de afgeleide.

{{ exercise: 29-032 }}

Newton publiceerde zijn methode lange tijd niet. In 1669 schreef hij *De analysi per aequationes numero terminorum infinitas* ("Over analyse met vergelijkingen met oneindig veel termen"). Barrow stuurde het handschrift dat jaar naar de Londense wiskundige John Collins, die er kopieën van liet circuleren. Gedrukt werd het pas in 1711. Een uitgebreidere verhandeling over fluxies schreef Newton rond 1671; die verscheen pas in 1736, na zijn dood. In zijn beroemde *Philosophiae naturalis principia mathematica* (1687), waarin hij de wetten van beweging en de zwaartekracht formuleerde, gebruikte Newton vooral meetkundige redeneringen in de stijl van de klassieke Griekse wiskunde, en nauwelijks zijn fluxierekening.

## 3. Leibniz in Parijs: differentialen en een nieuwe notatie

Gottfried Wilhelm Leibniz werd op 1 juli 1646 in Leipzig geboren. Hij was jurist, diplomaat, filosoof en bibliothecaris, en wiskunde was aanvankelijk een bijzaak. Dat veranderde tijdens zijn verblijf in Parijs van 1672 tot 1676, waar de Nederlandse natuurkundige **Christiaan Huygens** hem op het spoor zette van het nieuwste wiskundige werk. In 1673 bezocht Leibniz Londen, demonstreerde een rekenmachine die hij had ontworpen, en werd lid van de Royal Society.

In zijn aantekeningen uit het najaar van 1675 verschijnen voor het eerst de symbolen die we nog steeds gebruiken: $dx$ en $dy$ voor oneindig kleine verschillen (**differentialen**), en het langgerekte somteken $\int$, een gestileerde S van *summa*, voor de integraal. De afgeleide is in zijn notatie het quotiënt $\frac{dy}{dx}$ van twee oneindig kleine verschillen. In 1676 bracht hij een tweede bezoek aan Londen; daar kreeg hij onder meer inzage in een afschrift van Newtons *De analysi*. Dat bezoek zou later een cruciale rol spelen in de beschuldigingen tegen hem.

In oktober 1684 publiceerde Leibniz in het Leipziger tijdschrift *Acta Eruditorum* een kort artikel (p. 467–473) met de lange titel *Nova methodus pro maximis et minimis, itemque tangentibus, quae nec fractas nec irrationales quantitates moratur, et singulare pro illis calculi genus*: "Een nieuwe methode voor maxima en minima, en ook voor raaklijnen, die niet wordt gehinderd door breuken of irrationale grootheden, en een bijzondere soort rekenkunde daarvoor". Het was de eerste publicatie over de differentiaalrekening. Er stonden de rekenregels in voor sommen, producten, quotiënten en machten, en de voorwaarde $dy = 0$ voor een maximum of minimum. In 1686 volgde een artikel over de integraalrekening, waarin het teken $\int$ voor het eerst gedrukt verscheen.

![Eerste bladzijde van Nova Methodus](/images/history/m29-nova-methodus.jpg "De eerste bladzijde van Leibniz' Nova methodus pro maximis et minimis, Acta Eruditorum, oktober 1684, p. 467. Via Wikimedia Commons, publiek domein.")

Het artikel was kort en lastig te lezen, maar de notatie bleek een enorm voordeel. De gebroeders Jakob en Johann Bernoulli in Bazel werkten Leibniz' methode verder uit, en in 1696 verscheen het eerste leerboek over differentiaalrekening, *Analyse des infiniment petits* van de Franse markies De l'Hôpital. Zo verspreidde de "calculus" van Leibniz zich snel over het Europese vasteland.

![Figuren bij Nova Methodus](/images/history/m29-nova-methodus-figuren.jpg "De plaat met figuren (Tabula XII) bij Leibniz' artikel van 1684, met raaklijnen aan krommen en het lijnstuk dx rechtsboven. Acta Eruditorum 1684; via Wikimedia Commons, publiek domein.")

## 4. Twee notaties naast elkaar

| | Newton | Leibniz |
|---|---|---|
| grondidee | grootheden die in de tijd vloeien | oneindig kleine verschillen |
| naam | fluxie | differentiaal, differentiaalquotiënt |
| afgeleide | $\dot{y}$ | $\dfrac{dy}{dx}$ |
| eerste werk | 1665–1666 (handschrift) | 1675 (handschrift) |
| eerste publicatie over de methode | 1704 en later | 1684 |

Newtons punt-notatie wordt nog steeds gebruikt in de natuurkunde, vooral voor afgeleiden naar de tijd. Maar Leibniz' notatie bleek in het algemeen handiger: $\frac{dy}{dx}$ vertelt je meteen naar welke variabele je differentieert, en veel rekenregels zien eruit alsof je met gewone breuken rekent. Zo is de kettingregel in Leibniz' notatie

$$
\frac{dy}{dx} = \frac{dy}{du} \cdot \frac{du}{dx}
$$

Leibniz besteedde bewust veel aandacht aan goede notatie; hij zag symbolen als een denkinstrument. Een gevolg van de latere ruzie was dat Engelse wiskundigen lang trouw bleven aan Newtons notatie, terwijl het vasteland met Leibniz' notatie snelle vooruitgang boekte.

## 5. De prioriteitsstrijd

Lange tijd lieten de twee elkaar met rust; in 1676 wisselden ze via de secretaris van de Royal Society zelfs twee lange brieven uit over oneindige reeksen. Het conflict begon pas toen anderen zich ermee bemoeiden.

- **1699.** De Zwitserse wiskundige Nicolas Fatio de Duillier, een vriend van Newton, suggereerde in een publicatie dat Leibniz zijn ideeën van Newton had overgenomen.
- **1708–1710.** De Schotse wiskundige John Keill beschuldigde Leibniz in de *Philosophical Transactions* van de Royal Society openlijk van plagiaat.
- **1711.** Leibniz, zelf lid van de Royal Society, vroeg het genootschap om Keill tot de orde te roepen.
- **1712.** De Royal Society stelde een commissie in om de oude brieven en papieren te onderzoeken. De president van de Royal Society was op dat moment... Isaac Newton. De commissie rapporteerde op 24 april 1712 dat Newton de eerste uitvinder was. Het rapport, met de onderliggende brieven, werd gedrukt als *Commercium epistolicum* (gedateerd 1712, verspreid begin 1713). Historici zijn het erover eens dat Newton zelf grote invloed had op de inhoud.
- **1715.** In de *Philosophical Transactions* verscheen een uitgebreide, anonieme bespreking van het rapport. Die was door Newton zelf geschreven.

Leibniz overleed in 1716 in Hannover, zonder dat de kwestie was opgelost. Newton bleef ook daarna nog jaren tegen hem schrijven.

Het oordeel van de geschiedenis is inmiddels genuanceerder dan dat van de commissie. Newton had zijn methode **eerder** ontwikkeld (1665–1666, tegen 1675 bij Leibniz). Leibniz **publiceerde** eerder (1684, tegen pas in de achttiende eeuw voor Newtons fluxieverhandelingen). De meeste historici gaan ervan uit dat beiden de calculus **onafhankelijk** van elkaar vonden. Hun benaderingen, notaties en manier van denken verschilden te sterk om van eenvoudig overschrijven te spreken.

## 6. "Geesten van verdwenen grootheden"

Zowel Newton als Leibniz rekende met grootheden die "oneindig klein" waren: zo klein dat je ze mag weglaten, maar niet nul, want je deelt erdoor. Was dat wel logisch?

In 1734 publiceerde de Ierse filosoof en bisschop **George Berkeley** een scherpe aanval: *The Analyst*, met als ondertitel een betoog gericht "aan een ongelovige wiskundige". Berkeleys punt was precies de stap waarvoor je in les 2 werd gewaarschuwd. Eerst neem je aan dat de toename $o$ niet nul is, zodat je erdoor mag delen. Daarna neem je aan dat ze wel nul is, zodat je haar mag weglaten. Je kunt niet allebei tegelijk aannemen. Over Newtons fluxies schreef hij de beroemd geworden vraag: *"May we not call them the ghosts of departed quantities?"* ("Mogen we ze niet de geesten van verdwenen grootheden noemen?")

De kritiek werd serieus genomen. Een van de verdedigers van Newtons methode was in 1736, anoniem, de dominee **Thomas Bayes**, die je in module 41 terugziet als grondlegger van de Bayesiaanse statistiek. In 1742 probeerde de Schotse wiskundige **Colin Maclaurin** in zijn *Treatise of Fluxions* de methode op een stevige meetkundige basis te zetten.

De echte oplossing kwam pas in de negentiende eeuw, met een precieze definitie van de **limiet**. De Fransman **Augustin-Louis Cauchy** gebruikte in zijn *Cours d'analyse* (1821) het idee van een limiet als fundament van de analyse. De Duitser **Karl Weierstrass** gaf rond 1861 in zijn colleges in Berlijn de strikte formulering die nog steeds wordt gebruikt, met de Griekse letters $\varepsilon$ en $\delta$. Daarin komen geen "oneindig kleine" getallen meer voor: de uitspraak "$\frac{f(a + h) - f(a)}{h}$ nadert $L$ als $h$ naar 0 gaat" betekent dat je het quotiënt zo dicht bij $L$ kunt krijgen als je maar wilt, door $h$ (ongelijk aan nul) klein genoeg te kiezen. Je deelt dus nooit door nul en laat nooit iets "verdwijnen".

Je hebt in deze module de intuïtieve versie gebruikt: eerst vereenvoudigen, dan $h$ naar nul laten gaan. Dat is precies wat de strenge definitie rechtvaardigt. Bijna tweehonderd jaar nadat Newton en Leibniz hun rekenregels opschreven, waren die regels eindelijk ook logisch waterdicht.

## Bronnen

- MacTutor History of Mathematics, *Isaac Newton*: https://mathshistory.st-andrews.ac.uk/Biographies/Newton/
- MacTutor, *Gottfried Wilhelm von Leibniz*: https://mathshistory.st-andrews.ac.uk/Biographies/Leibniz/
- MacTutor, *Pierre de Fermat*: https://mathshistory.st-andrews.ac.uk/Biographies/Fermat/
- MacTutor, *Isaac Barrow*: https://mathshistory.st-andrews.ac.uk/Biographies/Barrow/
- MacTutor, *Thomas Bayes on Fluxions*: https://mathshistory.st-andrews.ac.uk/Extras/Bayes_fluxions/
- MacTutor (DNB), *William Jones* (over de uitgave van *De analysi*, 1711): https://mathshistory.st-andrews.ac.uk/DNB/Jones.html
- Wikipedia (EN), *Leibniz–Newton calculus controversy*: https://en.wikipedia.org/wiki/Leibniz%E2%80%93Newton_calculus_controversy
- Wikipedia (EN), *Nova Methodus pro Maximis et Minimis*: https://en.wikipedia.org/wiki/Nova_Methodus_pro_Maximis_et_Minimis
- Wikipedia (EN), *Leibniz's notation*: https://en.wikipedia.org/wiki/Leibniz%27s_notation
- Wikipedia (EN), *Fluxion*: https://en.wikipedia.org/wiki/Fluxion
- Wikipedia (EN), *Adequality*: https://en.wikipedia.org/wiki/Adequality
- Wikipedia (EN), *The Analyst*: https://en.wikipedia.org/wiki/The_Analyst
- Wikipedia (EN), *(ε, δ)-definition of limit*: https://en.wikipedia.org/wiki/(%CE%B5,_%CE%B4)-definition_of_limit
- Newton Project, *An Account of the Commercium Epistolicum* (1715): https://newtonproject.ox.ac.uk/view/texts/normalized/NATP00352
- Afbeeldingen: Wikimedia Commons, *Leibniz-Acta-1684-NovaMethodus.jpg* (publiek domein): https://commons.wikimedia.org/wiki/File:Leibniz-Acta-1684-NovaMethodus.jpg; *Leibniz, Gottfried Wilhelm von – Nova methodus pro maximis et minimis - Acta Eruditorum - Tabula XII - Graphs, 1684.jpg* (publiek domein): https://commons.wikimedia.org/wiki/File:Leibniz,_Gottfried_Wilhelm_von_%E2%80%93_Nova_methodus_pro_maximis_et_minimis_-_Acta_Eruditorum_-_Tabula_XII_-_Graphs,_1684.jpg; *Woolsthorpe Manor - west facade.jpg* (DeFacto, CC BY-SA 4.0): https://commons.wikimedia.org/wiki/File:Woolsthorpe_Manor_-_west_facade.jpg
