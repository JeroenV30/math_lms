# Elimineren vóór de moderne lettertaal

Je schrijft $2x + y = 8$ zonder erbij na te denken. Toch bestond deze lettertaal eeuwenlang niet: het gebruik van letters als onbekenden en van een gelijkteken is een ontwikkeling van de zestiende en zeventiende eeuw. De methoden die je in deze module leert, zijn oud genoeg om zonder die notatie te zijn bedacht. Dit intermezzo volgt hun spoor: van een rekenbord in China, via een raadsel uit het vroege middeleeuwse Europa, naar de systematische berekeningen van Gauss.

## Hoofdstuk 8 van de Negen Hoofdstukken

De *Negen Hoofdstukken over de Wiskundige Kunst* (*Jiuzhang suanshu*) is de belangrijkste klassieke Chinese wiskundige tekst. Hoe oud hij precies is, weet niemand zeker. De meeste onderzoekers dateren de gebundelde vorm ruwweg tussen de tweede eeuw v.Chr. en de eerste eeuw n.Chr., met materiaal dat nog ouder kan zijn. Wat we nu lezen is bovendien de tekst met het commentaar van Liu Hui uit het jaar 263 n.Chr., dat de methoden toelicht en soms verbetert. Het boek bestaat uit 246 vraagstukken in negen groepen, elk met een 'regel' (een algemeen recept) en een antwoord.

Het achtste hoofdstuk heet *Fangcheng*. De naam wordt meestal vertaald als 'rechthoekige schikking' of 'rechthoekig schema', en hij slaat op de manier waarop de gegevens werden opgeschreven. Het hoofdstuk bevat 18 vraagstukken die te herleiden zijn tot wat wij een lineair stelsel noemen, met twee tot vijf onbekenden.

### Een rooster van getallen

Het eerste vraagstuk gaat over graan van drie kwaliteiten: 'hoog', 'midden' en 'laag'. Drie bundels van de beste soort, twee van de middelste en één van de laagste leveren samen 39 maten graan op. Twee van de beste, drie van de middelste en één van de laagste leveren 34 maten op. Eén van de beste, twee van de middelste en drie van de laagste leveren 26 maten. Hoeveel maten levert één bundel van elke soort?

In onze notatie, met $x$, $y$ en $z$ voor de opbrengst per bundel van de beste, middelste en laagste soort:

$$
\begin{aligned}
3x + 2y + z &= 39 \\
2x + 3y + z &= 34 \\
x + 2y + 3z &= 26
\end{aligned}
$$

De Chinese rekenaars schreven dit niet met letters. Ze legden telstaafjes op een rekenbord, in kolommen: elke kolom is één aankoop, elke rij een soort graan, en onderaan staat de totale opbrengst. De kolom van de eerste aankoop staat rechts.

![Het schema van het eerste probleem uit hoofdstuk 8](/images/diagrams/m20-fangcheng.svg "Het schema van het eerste probleem uit hoofdstuk 8 in een moderne weergave (eigen figuur): de rijen zijn de graansoorten, de kolommen de drie aankopen. De Chinese rekenaars legden de getallen met telstaafjes.")

### Eliminatie in kolommen

De regel van het hoofdstuk, de *fangcheng*-methode, werkt in de kern als eliminatie. Je vermenigvuldigt een kolom *geheel* met een getal en trekt hem af van een andere kolom, zo vaak als nodig is om het bovenste getal te laten verdwijnen. Dat herhaal je met de volgende kolom en daarna met de volgende rij, tot er een trapvorm overblijft: een kolom met één getal, een met twee en een met drie. Van onder naar boven vind je dan de onbekenden, net zoals je bij onze stelsels eerst $y$ en daarna $x$ berekent.

Dat is precies wat je in les 3 deed: een vergelijking *geheel* vermenigvuldigen en aftrekken om een onbekende te laten verdwijnen. Alleen is het opgeschreven in kolommen in plaats van in regels. De oplossing van het eerste vraagstuk is volgens de tekst $9\frac14$, $4\frac14$ en $2\frac34$ maten. Controleer het zelf: $3 \cdot 9\frac14 + 2 \cdot 4\frac14 + 2\frac34 = 27\frac34 + 8\frac12 + 2\frac34 = 39$. Ook de andere twee aankopen kloppen: $18\frac12 + 12\frac34 + 2\frac34 = 34$ en $9\frac14 + 8\frac12 + 8\frac14 = 26$.

:::history Negatieve getallen op het rekenbord
Bij deze methode komt het voor dat je een kleiner getal van een groter moet aftrekken, zodat er negatieve tussenresultaten ontstaan. In hoofdstuk 8 staan regels voor het optellen en aftrekken van 'positieve' en 'negatieve' getallen. Volgens de overlevering gebruikten de rekenaars daarvoor staafjes van verschillende kleur of vorm, om positief van negatief te onderscheiden. Het is een van de oudste systematische behandelingen van negatieve getallen die bekend zijn. Zo hangt deze module samen met de eerder behandelde negatieve getallen: een stelsel oplossen vraagt dat je met negatieve tussenresultaten kunt rekenen.
:::

## Een raadsel van Alcuinus

Een eeuwen later en een halve wereld verder, in het Europa rond het jaar 800, ligt het zwaartepunt anders. Aan Alcuinus van York (ca. 735–804), geleerde aan het hof van Karel de Grote, wordt een verzameling rekenraadsels toegeschreven, de *Propositiones ad acuendos iuvenes*: 'opgaven om jonge mensen scherp te maken'. De toeschrijving is niet helemaal zeker, en in de handschriften zijn latere toevoegingen te verwachten. De verzameling is bekend om vragen die nog altijd bekoren, zoals die van de wolf, de geit en de kool die een rivier over moeten.

Een opgave van het type uit zo'n verzameling gaat over honderd schepels graan die onder honderd mensen worden verdeeld. Elke man krijgt er 3, elke vrouw 2 en elk kind een halve. Hoeveel mannen, vrouwen en kinderen zijn er? Noem de aantallen $m$, $w$ en $k$. Dan geldt

$$
m + w + k = 100, \qquad 3m + 2w + \tfrac12 k = 100.
$$

Hier staan twee vergelijkingen voor drie onbekenden. Volgens de vuistregel uit les 1 is dat te weinig voor één antwoord: het stelsel is *onderbepaald*. Wat het toch oplosbaar maakt, is de eis dat aantallen **hele, niet-negatieve getallen** zijn. Dan blijft er een handvol mogelijkheden over, bijvoorbeeld 11 mannen, 15 vrouwen en 74 kinderen: $11 + 15 + 74 = 100$ en $33 + 30 + 37 = 100$. Het is een verwant van de contextbeperkingen uit les 5: de algebra laat een hele lijn open, en de praktijk kiest er een paar punten uit. In les 7 reken je er zelf aan.

## Gauss en de kleinste kwadraten

Het woord 'Gauss-eliminatie' suggereert dat Carl Friedrich Gauss de methode bedacht, en dat is niet juist. De kern kwam al in China voor, eeuwen eerder, en ook in Europa werd eliminatie in de zeventiende en achttiende eeuw behandeld in algebraboeken. Gauss' bijdrage is dat hij haar systematisch toepaste op grote stelsels, in een omgeving waar dat nodig was: de sterrenkunde.

Gauss werd in 1801 bekend door zijn berekening van de baan van de dwergplaneet Ceres, kort nadat Piazzi die had ontdekt en voordat ze uit het zicht verdween. Hij gebruikte daarbij de methode van de **kleinste kwadraten**: je hebt veel meer metingen dan onbekende baanelementen en kiest de waarden waarvoor de som van de kwadraten van de afwijkingen zo klein mogelijk is. Dat leidt tot een stelsel lineaire vergelijkingen, de normaalvergelijkingen. In zijn *Theoria motus corporum coelestium* (1809) beschrijft hij de methode, en in een verhandeling uit 1810 over de storingen van de planetoïde Pallas werkt hij de systematische eliminatie van zulke stelsels uit, in de vorm die we nu in grote lijnen 'Gauss-eliminatie' noemen. Dat de methode later zijn naam kreeg, zegt iets over zijn invloed en weinig over de oorsprong van het idee.

De stap van Gauss is dus niet de vondst van eliminatie, maar het schaalvergroten: niet twee of drie onbekenden, maar tien of twintig, in een vaste, mechanische volgorde van werken. Dat is precies de toepassing waarvoor moderne computers eliminatie gebruiken.

## Wat dit intermezzo leert

Het idee is steeds hetzelfde, in drie gedaanten: een rekenbord, een raadsel met een beperking, een sterrenkundige berekening. Voorwaarden combineren, een onbekende laten verdwijnen, terugrekenen, controleren. De symbolen veranderen, de gedachte blijft. Er is ook een praktische les: **bewaar de structuur van je berekening**. Noteer welke vergelijking je met welk getal vermenigvuldigt en welke combinatie je maakt, zodat een ander, of jijzelf over een week, elke stap kan controleren. De Chinese kolommen en de streep onder je vergelijkingen zijn daar twee vormen van.

Verderop in de cursus, in module 32, zie je hoe het kolommenschema terugkomt als **matrix**: een rechthoekig rooster van getallen waarop dezelfde bewerkingen worden uitgevoerd, nu met een eigen rekentaal. Wie het eerste vraagstuk van hoofdstuk 8 met een matrix oplost, doet dat in wezen met dezelfde stappen als de rekenaars in het oude China.

:::question Een controleerbare uitwerking
Waarom is 'optellen geeft $x = 4$' soms te weinig uitleg? Welke gegevens moet een lezer zien om de stap te controleren: welke vergelijkingen, welke factoren, welke bewerking?
:::

## Bronnen

- MacTutor History of Mathematics, [The Nine Chapters on the Mathematical Art](https://mathshistory.st-andrews.ac.uk/HistTopics/Nine_chapters/).
- MacTutor, [Liu Hui](https://mathshistory.st-andrews.ac.uk/Biographies/Liu_Hui/).
- MacTutor, [Alcuin of York](https://mathshistory.st-andrews.ac.uk/Biographies/Alcuin/).
- MacTutor, [Carl Friedrich Gauss](https://mathshistory.st-andrews.ac.uk/Biographies/Gauss/).
- Wikipedia, [Gaussian elimination](https://en.wikipedia.org/wiki/Gaussian_elimination), met een overzicht van de geschiedenis van de methode.

Datering, omvang en toeschrijving van oude teksten zijn waar mogelijk voorzichtig weergegeven; de bronnen hierboven bespreken de onzekerheden uitgebreider.

Probeer nu zelf het type vraagstuk waarvoor de Chinese kolommen bedoeld waren, in een kleinere versie met twee onbekenden.

{{ exercises: 20-023, 20-038 }}
