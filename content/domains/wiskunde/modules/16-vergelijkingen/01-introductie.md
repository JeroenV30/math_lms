# De onbekende aan een balans

:::history Egypte, ca. 1550 v.Chr.
Een schrijver met de naam Ahmes kopieert een rekenboek op een rol papyrus. Volgens zijn eigen inleiding schrijft hij een tekst over die toen al enkele eeuwen oud was, uit de tijd van koning Amenemhat III (ca. 1800 v.Chr.). Het boek is een verzameling opgaven met uitwerkingen, bedoeld voor schrijvers die in de administratie van de farao moesten rekenen met graan, brood, bier en land. Tegenwoordig ligt de rol in het British Museum in Londen en heet hij naar een latere eigenaar: de **Rhind-papyrus**.

Probleem 24 begint met een zin die vreemd modern klinkt:

*Een hoeveelheid en haar zevende deel, samen worden ze 19. Wat is de hoeveelheid?*

Het Egyptische woord voor "hoeveelheid" wordt meestal weergegeven als ***aha***, en de opgaven van dit type heten daarom de **aha-problemen**.
:::

Lees de opgave nog eens. Er staat geen getal waar je mee kunt beginnen te rekenen. Je weet niet wat de hoeveelheid is; je weet alleen wat er **uitkomt** als je er iets mee doet. Dat is precies de situatie waar deze module over gaat.

:::question Denk eerst zelf na
- Probeer eens een getal. Stel dat de hoeveelheid 14 is. Wat is dan "de hoeveelheid en haar zevende deel" samen? Is dat te veel of te weinig?
- Waarom is 7 een handige eerste gok, ook al is het niet het goede antwoord?
- Komt het antwoord uit op een geheel getal? Hoe weet je dat zonder het te berekenen?

Schrijf je idee op. In het historisch intermezzo (les 6) zie je hoe Ahmes dit probleem oploste met een gok die hij daarna verbeterde, en in les 4 leer je hoe je het met een vergelijking in drie regels doet.
:::

## Waarom bestaat deze wiskunde?

Bij gewoon rekenen ken je de getallen en zoek je de uitkomst: drie broden van € 2,40 kosten samen € 7,20. In de praktijk loopt de vraag minstens zo vaak **andersom**. Je kent de uitkomst en zoekt het getal waarmee je begon.

- **Tarieven.** Een drukkerij rekent € 15 instelkosten en € 4 per exemplaar. Je hebt € 75 te besteden. Hoeveel exemplaren kun je laten drukken?
- **Recepten en mengsels.** Een kok wil 2,5 liter saus maken uit een recept voor 0,75 liter. Met welk getal moet hij alle hoeveelheden vermenigvuldigen?
- **Formules.** De formule $s = v \cdot t$ geeft de afgelegde weg als je snelheid en tijd kent. Maar hoe lang doe je over 150 km als je 100 km per uur rijdt?
- **Begrotingen.** Een vereniging heeft een tekort van € 600 en 40 leden. Hoeveel moet de contributie omhoog?

In al die gevallen is er een **onbekende**: een getal dat je nog niet kent, maar dat wel aan een voorwaarde moet voldoen. Die voorwaarde schrijf je als een gelijkheid, en dan ga je terugrekenen. Dat is het hart van de algebra. Het woord *algebra* zelf komt, zoals je in les 6 zult zien, uit de titel van een Arabisch boek over precies dit soort terugrekenen.

In module 15 leerde je met **expressies** werken: rekenregels met letters, zoals $15 + 4n$. Een expressie is een recept, geen bewering. Pas wanneer je er een isgelijkteken en een tweede expressie bij zet, ontstaat een uitspraak die waar of onwaar kan zijn.

:::definition Vergelijking, onbekende en oplossing
Een **vergelijking** is een uitspraak dat twee expressies gelijk zijn, zoals $15 + 4n = 75$. De letter waarvan de waarde onbekend is, heet de **onbekende**. De expressie links van het isgelijkteken heet het **linkerlid**, de expressie rechts het **rechterlid**.

Een **oplossing** is een waarde van de onbekende die de vergelijking waar maakt. Een vergelijking **oplossen** betekent: alle oplossingen vinden.
:::

Een vergelijking is dus een vraag in vermomming. $15 + 4n = 75$ vraagt: *voor welk getal $n$ is $15 + 4n$ gelijk aan 75?* Voor de meeste waarden van $n$ is de uitspraak onwaar: met $n = 10$ staat er $55 = 75$. Voor precies één waarde is ze waar.

## Controleren door invullen

Je kunt van elk getal nagaan of het een oplossing is: vul het in, reken beide leden uit, en kijk of er twee keer hetzelfde uitkomt. Dat heet **controleren door invullen**, en het is de belangrijkste gewoonte van deze hele module. Een oplossing die je niet hebt gecontroleerd, is nog maar een kandidaat.

:::example Uitgewerkt voorbeeld: proberen en controleren
Is een van de getallen 13, 14 of 15 een oplossing van $15 + 4n = 75$?

| $n$ | linkerlid $15 + 4n$ | rechterlid | waar? |
|---|---|---|---|
| 13 | $15 + 52 = 67$ | 75 | nee, te klein |
| 14 | $15 + 56 = 71$ | 75 | nee, te klein |
| 15 | $15 + 60 = 75$ | 75 | **ja** |

Dus $n = 15$ is een oplossing. Merk op dat elke stap van 1 in $n$ het linkerlid met 4 laat stijgen. Bij 16 en hoger wordt het linkerlid te groot; bij 14 en lager te klein. Er is dus geen tweede oplossing.
:::

Proberen werkt, maar het is traag en het faalt zodra de oplossing geen mooi getal is. Bij $15 + 4n = 77$ kom je met gehele getallen nooit uit, want de oplossing is $n = 15\tfrac{1}{2}$. Daarom heb je een **methode** nodig die altijd werkt. Het controleren door invullen blijft daarbij nuttig, maar dan aan het eind, als slotcontrole.

{{ exercise: 16-031 }}

## Het weegschaalmodel

Stel je een ouderwetse balans voor met twee schalen. Aan de linkerkant liggen twee gelijke dozen met onbekende massa $x$ en een gewicht van 6 kg. Aan de rechterkant ligt een gewicht van 18 kg. De balans hangt in evenwicht. In formuletaal:

$$
2x + 6 = 18
$$

![Weegschaalmodel van 2x + 6 = 18](/images/diagrams/m16-balans.svg "Links: twee dozen van x kg en een gewicht van 6 kg houden 18 kg in evenwicht. Rechts: na het weghalen van 6 kg aan beide kanten blijft de balans in evenwicht, met 2x = 12. Eigen illustratie.")

:::question Een handeling voor beide kanten
Wat gebeurt er als je links het gewicht van 6 kg weghaalt en rechts niets verandert? En wat als je aan **beide** kanten 6 kg weghaalt? Welke handeling kun je daarna nog doen om te weten te komen hoe zwaar één doos is?
:::

Als je alleen links 6 kg weghaalt, slaat de balans door naar rechts: het evenwicht is weg, en je kunt er niets meer uit afleiden. Haal je aan beide kanten 6 kg weg, dan blijft het evenwicht bestaan. Rechts blijft 12 kg over, links de twee dozen:

$$
2x = 12
$$

Twee gelijke dozen wegen samen 12 kg. Halveer je beide kanten (één doos links, de helft van het gewicht rechts), dan blijft het evenwicht weer bestaan:

$$
x = 6
$$

**Controle** in de oorspronkelijke vergelijking: $2 \times 6 + 6 = 12 + 6 = 18$. Het klopt.

Dit is de kern van de **balansmethode**: je mag aan een vergelijking alles doen, zolang je het aan **beide kanten** doet. Dan verandert de vorm van de vergelijking, maar niet de oplossing. Stap voor stap maak je de vergelijking eenvoudiger, tot er alleen nog "$x = \text{getal}$" staat.

:::warning Een balans heeft grenzen
Het weegschaalmodel is een denkbeeld, geen bewijs. Een negatief gewicht of een doos met massa $-3$ kun je niet op een schaal leggen, en toch zijn $x + 9 = 4$ en $-3x = 18$ prima vergelijkingen. In les 2 zie je welke bewerkingen je in het algemeen mag uitvoeren. Het principe blijft wel hetzelfde: wat je met de ene kant doet, doe je ook met de andere.
:::

{{ exercises: 16-001, 16-002 }}

## Een oplossing is een waarde, geen rekenstap

Een volledige uitwerking bestaat uit twee dingen: een **route** die een ander kan volgen, en een **eindantwoord** dat bij de vraag past. Schrijf elke stap als een nieuwe vergelijking onder de vorige, en vermeld desnoods wat je deed:

$$
\begin{aligned}
2x + 6 &= 18 && \text{(beide kanten } -6\text{)}\\
2x &= 12 && \text{(beide kanten } :2\text{)}\\
x &= 6
\end{aligned}
$$

Zo'n kolom van vergelijkingen met de isgelijktekens onder elkaar is de standaardvorm. Schrijf niet $2x + 6 = 18 - 6 = 12 : 2 = 6$. Die keten van isgelijktekens beweert dat $18 - 6$ gelijk is aan $6$, en dat is onwaar. Het isgelijkteken betekent "is gelijk aan", niet "en dan krijg je".

## Wat je in deze module leert

1. **Omkeerbare bewerkingen** en de balansmethode: wat mag je aan beide kanten doen, en waarom (les 2)?
2. **De onbekende aan beide kanten** en vergelijkingen met **haakjes**, ook met een minteken ervoor. Met een grafiek zie je de oplossing als snijpunt van twee lijnen (les 3).
3. **Breuken in vergelijkingen**: vermenigvuldigen met de noemer zonder een term te vergeten (les 4).
4. **Bijzondere gevallen**: geen oplossing of oneindig veel oplossingen, **formules omwerken** en een eerste kennismaking met **ongelijkheden** (les 5).
5. **Geschiedenis**: de aha-problemen en de valse positie uit Egypte, Babylonische rekenteksten, Diophantus, Al-Khwarizmi's *al-jabr* en Recordes isgelijkteken uit 1557 (les 6).
6. **Vergelijkingen opstellen** bij leeftijden, tarieven en omtrekken (les 7).

Deze module bouwt voort op module 15 (expressies, haakjes wegwerken, gelijksoortige termen samenvoegen), module 13 (rekenen met negatieve getallen) en module 7 (breuken). In module 19 en 20 gebruik je vergelijkingen weer bij lineaire functies en bij stelsels met twee onbekenden.

{{ goals }}

{{ glossary }}
