# Een vierkant aanvullen

De kwadratische vergelijking is ouder dan de algebra zoals wij die kennen. Er bestonden geen letters, geen minteken en geen gelijkteken, en toch loste men vergelijkingen als $x^2+x=\tfrac34$ op. In deze les volg je de lijn van een Babylonisch kleitablet via Bagdad naar de formule die jij nu gebruikt, en je ziet waarom het "aanvullen van het vierkant" letterlijk bedoeld is.

## Babylonië: oppervlakte plus zijde

Uit het Oud-Babylonische tijdperk (ruwweg 1800–1600 v.Chr.) zijn duizenden kleitabletten met wiskundige opgaven bewaard. Een bekend voorbeeld is het tablet dat in het British Museum is geregistreerd als **BM 13901**. Het bevat een reeks opgaven over vierkanten, waarvan de eerste ongeveer luidt: *"De oppervlakte en de zijde van mijn vierkant heb ik bij elkaar opgeteld: $\tfrac34$."* In onze notatie is dat $x^2+x=\tfrac34$.

Opvallend is dat een lengte (de zijde) bij een oppervlakte wordt opgeteld, wat in een strikt meetkundig denkkader vreemd is. Waarschijnlijk dacht de schrijver aan een zijde met breedte 1, zodat de strook een oppervlakte krijgt die als getal gelijk is aan de lengte. Dat is een interpretatie van onderzoekers; de tekst zelf geeft alleen de rekenstappen.

De oplossing op het tablet is een recept in woorden. Vertaald naar moderne getallen:

1. Neem de coëfficiënt van de zijde, $1$, en neem de helft: $\tfrac12$.
2. Vermenigvuldig dat met zichzelf: $\tfrac12\cdot\tfrac12=\tfrac14$.
3. Tel het op bij $\tfrac34$: $\tfrac34+\tfrac14=1$.
4. De wortel hiervan is $1$.
5. Trek de eerder genomen helft ervan af: $1-\tfrac12=\tfrac12$.

De zijde is dus $\tfrac12$. Controleer: $\left(\tfrac12\right)^2+\tfrac12=\tfrac14+\tfrac24=\tfrac34$. Je ziet in stap 2 tot en met 5 precies het "kwadraat van de helft" verschijnen dat je in les 3 bij het afsplitsen gebruikte. De schrijver geeft maar één oplossing: een negatieve zijde bestond niet. De Babylonische getallen werden in het zestigtallige stelsel geschreven; hier zijn ze omgezet in gewone breuken.

:::history BM 13901
Het tablet BM 13901 bevat een reeks opgaven over vierkanten en hun zijden. Over de exacte datering en de leesbaarheid van sommige regels zijn specialisten het niet altijd eens. Wat vaststaat, is dat de Babylonische schrijvers een algemene rekenprocedure kenden voor vergelijkingen met een kwadraat en een lineaire term, ruim voor de Grieken en lang vóór de moderne algebra.
:::

## Al-Khwarizmi: de meetkundige methode

Rond het jaar 820 schreef Muhammad ibn Musa al-Khwarizmi in Bagdad een boek over rekenen met vergelijkingen, *al-kitab al-mukhtasar fi hisab al-jabr wa-l-muqabala*: "Het beknopte boek over het rekenen met herstellen en balanceren". Uit het woord *al-jabr* is ons woord **algebra** ontstaan. Het boek behandelt zes standaardtypen van vergelijkingen waarin elke term positief is (zijn "vierkanten", "wortels" en "getallen"). Hij gebruikte geen symbolen, alles staat in woorden, maar hij gaf voor elk type een recept én een meetkundig bewijs dat het klopt.

Zijn bekendste voorbeeld is: *een vierkant en tien wortels zijn samen gelijk aan negenendertig dirhams.* In onze notatie: $x^2+10x=39$. Meetkundig ziet dat er zo uit.

![Het vierkant aanvullen bij x² + 10x = 39](/images/diagrams/m21-afsplitsen.svg "Een vierkant x bij x en twee stroken van 5 bij x vormen samen 39. Het hoekvierkant 5 bij 5 vult het aan tot een vierkant met zijde x + 5.")

1. Teken een vierkant met zijde $x$. Zijn oppervlakte is $x^2$.
2. De term $10x$ verdeel je in twee rechthoeken van $5$ bij $x$ en leg je tegen twee zijden van het vierkant. Samen is de oppervlakte $x^2+10x=39$.
3. Er ontbreekt in de hoek een vierkant van $5$ bij $5$ om er één groot vierkant van te maken. Zijn oppervlakte is $25$. Aan beide kanten $25$ erbij: het grote vierkant heeft oppervlakte $39+25=64$.
4. De zijde van het grote vierkant is $x+5=\sqrt{64}=8$. Dus $x=3$.

De algebraïsche versie loopt parallel: $x^2+10x+25=64$, dus $(x+5)^2=64$, dus $x+5=8$ en $x=3$. Het meetkundige beeld legt uit *waarom* je het kwadraat van de helft van de lineaire coëfficiënt moet toevoegen. Het is geen trucje maar het ontbrekende hoekstuk.

Een beperking van de meetkundige methode is dat ze alleen positieve lengtes kent. De tweede oplossing van $x^2+10x=39$ is $x=-13$ (want $(-13+5)^2=64$ klopt ook). Een negatieve zijde heeft geen betekenis in een tekening, en die oplossing staat dus niet bij al-Khwarizmi. In de moderne algebra, die ook negatieve getallen kent, nemen we hem wel mee en wijzen we hem pas in een context af.

:::question Context en getalverzameling
Waarom laat je de negatieve oplossing in een lengteprobleem vallen, maar niet in de algemene vraag "voor welke $x$ geldt $x^2+10x=39$?" Wat verandert er aan de vraag?
:::

## Brahmagupta en de algemene regel

In India beschreef Brahmagupta in 628 in zijn *Brahmasphutasiddhanta* regels voor het oplossen van kwadratische vergelijkingen. Hij rekende ook met negatieve getallen (schulden) en met nul, en formuleerde regels die wij herkennen als een vorm van de oplossingsformule. Hoe precies die regels met onze abc-formule overeenkomen, en of hij alle gevallen met twee wortels meenam, is onder historici niet helemaal uitgemaakt. Veilig is te zeggen dat zijn werk een stap was naar een algemene behandeling met positieve én negatieve coëfficiënten, waar al-Khwarizmi nog zes aparte gevallen had.

## De naam "abc-formule"

Waarom heet de formule in Nederland en Vlaanderen de **abc-formule**? De naam is eenvoudig: de formule gebruikt de coëfficiënten $a$, $b$ en $c$. In andere talen is dat anders; in het Engels heet hij de *quadratic formula*, de "kwadratische formule". De letters $a$, $b$, $c$ voor bekende grootheden en $x$, $y$, $z$ voor onbekende gebruikte Descartes in zijn *La Géométrie* (1637), en dat maakte uiteindelijk de compacte formule met letters in plaats van recepten mogelijk. Het woord *discriminant* werd volgens de gangbare geschiedschrijving in 1851 ingevoerd door de Engelse wiskundige James Joseph Sylvester.

:::summary Van recept naar formule
- Babylonië (ca. 1800–1600 v.Chr.): rekenrecepten voor vierkanten, zonder letters.
- Bagdad (ca. 820): al-Khwarizmi met meetkundige bewijzen voor zes typen.
- India (628): Brahmagupta met negatieve getallen en een algemenere regel.
- 17e eeuw: letters voor coëfficiënten; de formule krijgt de moderne gedaante.
:::

## Bronnen

- [MacTutor, Babylonian mathematics](https://mathshistory.st-andrews.ac.uk/HistTopics/Babylonian_mathematics/)
- [Wikipedia, Babylonian mathematics](https://en.wikipedia.org/wiki/Babylonian_mathematics)
- [MacTutor, Al-Khwarizmi](https://mathshistory.st-andrews.ac.uk/Biographies/Al-Khwarizmi/)
- [MacTutor, Brahmagupta](https://mathshistory.st-andrews.ac.uk/Biographies/Brahmagupta/)
- [Wikipedia, Quadratic equation](https://en.wikipedia.org/wiki/Quadratic_equation)

{{ exercises: 21-024 }}
