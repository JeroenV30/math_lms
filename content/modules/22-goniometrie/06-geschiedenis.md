# Van koorden naar hoekverhoudingen

Sinus, cosinus en tangens lijken het product van een rekenmachine, maar achter elk van die toetsen zit meer dan tweeduizend jaar werk. De geschiedenis begint niet met driehoeken maar met cirkels en sterren, loopt via India en de Arabische wereld naar middeleeuws Europa, en eindigt met landmeters in de Nederlandse polder. Onderweg ontstaat bovendien een woord, *sinus*, dat zijn bestaan dankt aan een vertaalvergissing. In deze les volg je dat spoor.

## Waarom 360 graden?

Een cirkel is verdeeld in 360 graden, en dat is geen natuurwet maar een erfenis. De Babylonische sterrenkundigen rekenden in het zestigtallige stelsel, waarin 60 een natuurlijke eenheid is. Wellicht speelde ook het jaar van ongeveer 360 dagen een rol: wie de zon een jaar lang volgt, ziet haar per dag ongeveer één graad vooruitschuiven langs de dierenriem. Hoe die verdeling precies is ontstaan, weten we niet zeker; historici verschillen daarover van mening. Wat wel vaststaat, is dat de Griekse sterrenkundige Hipparchus de verdeling in 360 graden in de tweede eeuw v.Chr. in de Griekse wiskunde gebruikte en dat die sindsdien blijft bestaan, tot op je rekenmachine toe. Dat 360 zoveel delers heeft (onder andere 2, 3, 4, 5, 6, 8, 9, 10, 12, 15, 18, 20, 24, 30, 36, 40, 45, 60, 72, 90, 120 en 180), maakt de verdeling bovendien praktisch.

{{ widget: angle value="60" }}

Sleep de hoek over de gradenboog: een volle draai is 360°, een rechte hoek 90°. Een hoek van 60° is een zesde van een cirkel; dat getal komt ook voor in de koordentabel die hierna wordt behandeld.

## Hipparchus en de koordentabel

Een sterrenkundige die de bewegingen van zon en maan wil voorspellen, werkt met hoeken aan de hemel. Hij moet ze omzetten in lengtes, bijvoorbeeld om te weten hoe ver twee punten van elkaar liggen. Zo ontstond het idee van de **koorde**: het rechte lijnstuk tussen twee punten op een cirkel. Bij een gegeven cirkel hoort bij elke middelpuntshoek één koorde, en dat verband kun je in een tabel zetten.

Hipparchus van Nicaea (ca. 190 – ca. 120 v.Chr.) wordt beschouwd als de eerste die een systematische koordentabel opstelde. Zijn eigen geschriften hierover zijn verloren gegaan. We kennen ze vooral uit latere bronnen, waaronder de Almagest. Hoe zijn tabel er precies uitzag, is een reconstructie van moderne historici; hier is voorzichtigheid geboden.

Waarom is een koordentabel in feite een sinustabel? Trek vanuit het middelpunt van een cirkel met straal R lijnen naar de twee uiteinden van een koorde. Dat levert een gelijkbenige driehoek met aan de top de middelpuntshoek α. Halveer die driehoek met een hoogtelijn: je krijgt twee rechthoekige driehoeken met hoek α/2 bij het middelpunt, schuine zijde R en als overstaande zijde de *halve koorde*.

![Cirkel met koorde en middelpuntshoek](/images/diagrams/m22-koorde.svg "De halve koorde is de overstaande zijde van hoek α/2 in een rechthoekige driehoek met schuine zijde R. Eigen figuur.")

Dus is $\sin(\alpha/2) = \dfrac{\text{halve koorde}}{R}$, en daarmee

$$\text{koorde} = 2R\sin\frac{\alpha}{2}.$$

:::example Een koorde
Bij R = 10 en α = 60° is de halve hoek 30°. De koorde is $2 \times 10 \times \sin 30^\circ = 10$. Dat is gelijk aan de straal, en dat klopt: een middelpuntshoek van 60° geeft met de twee stralen een gelijkzijdige driehoek, dus alle zijden zijn 10. Een veelgemaakte fout is de middelpuntshoek zelf in de sinus invullen: $2 \times 10 \times \sin60^\circ \approx 17{,}32$ is een heel andere lengte en klopt niet met de figuur.
:::

De Grieken kenden de sinus niet als aparte functie, maar de koorde bevat dezelfde informatie. De halve koorde heet in latere bronnen de *sinus*, en dat is de kern van de oudste goniometrie: een tabel waarin je bij elke hoek een lengte opzoekt in een cirkel met vaste straal.

## Ptolemaeus en de Almagest

De sterrenkundige Claudius Ptolemaeus (ca. 100 – ca. 170 n.Chr.) werkte in Alexandrië. Zijn grote werk, de *Almagest*, is de belangrijkste overgeleverde bron over de Griekse sterrenkunde en bevat een uitgebreide koordentabel. Daarin staan de koorden voor alle hoeken van een halve graad tot 180°, in stappen van een halve graad, bij een cirkel met een straal van 60 delen. Dat is een Babylonisch erfstuk: 60 delen past bij het zestigtallige stelsel. Voor 60° vind je dus een koorde van precies 60 delen, want die is gelijk aan de straal, zoals we hierboven zagen.

Ptolemaeus berekende de tabel niet door te meten, maar met meetkundige stellingen. Een daarvan, de stelling van Ptolemaeus over vierhoeken in een cirkel, geeft de koorde van een som of verschil van twee hoeken. Daarmee is vanuit een paar bekende koorden (zoals die van 60° en 36°) een volledige tabel op te bouwen. Het is een voorloper van de optelformules die je later in goniometrie tegenkomt.

## Aryabhata en de Indiase halve koorde

Indiase wiskundigen kozen een andere route. In de *Aryabhatiya* (499 n.Chr.) geeft Aryabhata een tabel met 24 waarden. Zijn tabel gebruikt niet de hele koorde, maar de *halve* koorde. De stap tussen de hoeken is 225 boogminuten, dus 3,75° (3°45′), en de straal is gekozen als ongeveer 3438 eenheden. Dat getal is niet willekeurig: een cirkel met omtrek 21.600 boogminuten (360 × 60) heeft een straal van ongeveer $21600/(2\pi) \approx 3438$, zodat een boogminuut precies één lengte-eenheid is.

De halve koorde noemden Indiase wiskundigen *jya* of *ardha-jya* (letterlijk: 'halve koorde'); *jya* betekent oorspronkelijk een boogpees, de koord van een boog. Later werd *ardha-jya* afgekort tot *jya* en ook als *jiva* geschreven. Dat is de eigenlijke geboorte van wat wij de sinus noemen: een functie van de hoek, niet van de hele koorde, en dus veel handiger in een rekenpartij omdat je de verdubbeling kunt overslaan.

## Een vertaalvergissing: hoe de sinus aan zijn naam kwam

Het woord *sinus* heeft een merkwaardige herkomst. Arabische sterrenkundigen namen de Indiase wiskunde over en transcribeerden *jiva* als *jiba*. Arabisch wordt zonder klinkers geschreven, en de letters *jb* leverden geen herkenbaar Arabisch woord op. Latere lezers lazen er daarom een woord dat er wel op leek: *jayb*, dat 'borst', 'plooi in een kleed' of 'baai' betekent. Toen de Arabische teksten in de twaalfde eeuw in het Latijn werden vertaald, werd *jayb* netjes vertaald met het Latijnse *sinus*: ook 'plooi', 'boezem' of 'baai'. Zo kreeg de halve koorde een naam die er niets meer mee te maken heeft. De vertaling wordt vaak toegeschreven aan Gerard van Cremona of aan Robert van Chester, maar de precieze toeschrijving is niet helemaal zeker.

Het traject is dus:

$$\text{jya (halve koorde)} \;\to\; \text{jiva} \;\to\; \text{jiba (Arabisch)} \;\to\; \text{jayb (verlezen)} \;\to\; \text{sinus (Latijn)}.$$

De namen die volgden zijn een stuk minder spannend. *Cosinus* is de verkorting van *complementi sinus*, de sinus van het complement; het woord in deze vorm wordt aan Edmund Gunter (1620) toegeschreven. *Tangens* (Latijn voor 'rakend') komt van Thomas Fincke (1583); de tangens is de lengte van het stuk raaklijn aan een cirkel met straal 1. Islamitische astronomen uit de negende en tiende eeuw, zoals al-Battani en Abu'l-Wafa, werkten al met sinus en tangens en gaven nauwkeurige tabellen; hoeveel ze precies zelf hebben ontdekt, verschilt per bron.

## Regiomontanus en het eerste leerboek

In Europa werd de goniometrie pas in de vijftiende eeuw een zelfstandig vak. Johannes Müller uit Königsberg, bekend als **Regiomontanus** (1436–1476), schreef omstreeks 1464 *De triangulis omnimodis* ('Over driehoeken van allerlei soort'). Dat is het eerste Europese werk waarin driehoeksmeting als losstaand vak is uitgewerkt, onafhankelijk van de sterrenkunde. Het werd pas in 1533 gedrukt. Regiomontanus maakte ook sinustabellen met veel meer cijfers dan zijn voorgangers. Daarmee werd het mogelijk om met driehoeken te rekenen zonder de sterrenkunde als excuus.

## Landmeting en triangulatie: Snellius

Het meest tastbare gevolg van de goniometrie was de **triangulatie**: het meten van grote afstanden met een keten van driehoeken. Meet je één afstand (de *basislijn*) nauwkeurig met een meetlint, dan kun je daarna met alleen hoeken, gemeten met een kijkinstrument, alle andere afstanden berekenen, ook die over rivieren of moerassen.

De Leidse wiskundige Willebrord Snellius (1580–1626) paste dat in 1615 toe in Nederland. Hij meette met een keten van driehoeken de afstand tussen Alkmaar en Bergen op Zoom, en bepaalde zo de lengte van een boog van de meridiaan, en daarmee de omtrek van de aarde. Zijn boek *Eratosthenes Batavus* ('De Nederlandse Eratosthenes', 1617) verwijst bewust naar de oude Griekse meting. Zijn uitkomst was enkele procenten te klein; latere herberekeningen verbeterden dat. De methode zelf bleef: triangulatie vormt tot ver in de twintigste eeuw de basis van landmetingen en kaarten.

:::example Een afstand over een rivier
Op de linkeroever meet je een basislijn AB van 400 meter. Op de overkant staat een kerktoren C. De hoek ABC is 90° en de hoek BAC is 52°. Hoe ver is de toren van B?

Bij hoek A is de basislijn AB de aanliggende zijde en BC de overstaande zijde. Dus $\tan52^\circ = \dfrac{BC}{400}$ en $BC = 400\tan52^\circ \approx 511{,}98$ meter. Alleen een lengte en twee hoeken: precies de truc van de triangulatie.
:::

## Bronnen

- MacTutor, *Trigonometric functions*: [mathshistory.st-andrews.ac.uk/HistTopics/Trigonometric_functions](https://mathshistory.st-andrews.ac.uk/HistTopics/Trigonometric_functions/)
- MacTutor, *Hipparchus of Rhodes*: [mathshistory.st-andrews.ac.uk/Biographies/Hipparchus](https://mathshistory.st-andrews.ac.uk/Biographies/Hipparchus/)
- MacTutor, *Aryabhata the Elder*: [mathshistory.st-andrews.ac.uk/Biographies/Aryabhata_I](https://mathshistory.st-andrews.ac.uk/Biographies/Aryabhata_I/)
- MacTutor, *Regiomontanus*: [mathshistory.st-andrews.ac.uk/Biographies/Regiomontanus](https://mathshistory.st-andrews.ac.uk/Biographies/Regiomontanus/)
- MacTutor, *Willebrord Snell*: [mathshistory.st-andrews.ac.uk/Biographies/Snell](https://mathshistory.st-andrews.ac.uk/Biographies/Snell/)
- Wikipedia, *Sine and cosine* (etymologie): [en.wikipedia.org/wiki/Sine_and_cosine](https://en.wikipedia.org/wiki/Sine_and_cosine)
- Wikipedia, *Ptolemy's table of chords*: [en.wikipedia.org/wiki/Ptolemy%27s_table_of_chords](https://en.wikipedia.org/wiki/Ptolemy%27s_table_of_chords)

## Oefeningen

{{ exercises: 22-023, 22-024, 22-038, 22-039 }}
