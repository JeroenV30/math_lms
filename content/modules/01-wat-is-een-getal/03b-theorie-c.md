## Paren maken: even en oneven

Neem een handvol munten en probeer ze in paren te leggen. Er zijn maar twee uitkomsten: of alle munten hebben een partner, of er blijft er precies één over. Die eenvoudige proef verdeelt alle gehele getallen in twee families.

:::definition Even en oneven
- Een geheel getal is **even** als je het precies in paren kunt verdelen, zonder rest: $0, 2, 4, 6, 8, 10, \ldots$
- Een geheel getal is **oneven** als er bij het verdelen in paren precies één overblijft: $1, 3, 5, 7, 9, 11, \ldots$

Iets formeler: een even getal kun je schrijven als $2k$ (k paren), een oneven getal als $2k + 1$ (k paren plus één).
:::

![Acht stippen in vier paren en zeven stippen in drie paren plus één](/images/diagrams/m01-even-oneven-paren.svg "8 is even: vier volledige paren. 7 is oneven: drie paren en één stip over.")

Merk op dat **0 even is**: nul munten kun je prima "in paren verdelen". Er zijn dan nul paren en er blijft niets over. Dat voelt misschien vreemd, maar het past precies in het patroon, zoals de getallenlijn laat zien.

![Getallenlijn van 0 tot 20 met even en oneven getallen in verschillende kleuren](/images/diagrams/m01-even-oneven-getallenlijn.svg "Even (blauw) en oneven (bruin) wisselen elkaar op de getallenlijn steeds af.")

Op de getallenlijn wisselen even en oneven elkaar af: even, oneven, even, oneven, … Elke stap van 1 maakt van een even getal een oneven getal en omgekeerd. Daardoor zie je aan het **laatste cijfer** of een getal even is: eindigt het op 0, 2, 4, 6 of 8, dan is het even; eindigt het op 1, 3, 5, 7 of 9, dan is het oneven. Het getal $3\,578$ is dus even, en $1\,001$ is oneven, zonder dat je hoeft te delen.

## Rekenen met even en oneven

Met het paren-beeld kun je redeneren zonder te rekenen. Leg twee stapels munten samen:

- **even + even = even**: twee stapels met alleen paren geven samen alleen paren.
- **oneven + oneven = even**: elke stapel heeft één losse munt; die twee losse munten vormen samen een nieuw paar.
- **even + oneven = oneven**: de ene losse munt blijft alleen.

Zulke redeneringen zijn waardevol, omdat ze voor *alle* getallen gelden. Je hoeft geen voorbeelden te proberen: je ziet waarom het altijd zo is. Dat is het verschil tussen iets *controleren* en iets *bewijzen*, en het is een eerste voorproefje van hoe wiskundigen denken.

## Het hoeveelste even getal?

De even getallen vormen zelf een rij. Als we 2 het eerste (positieve) even getal noemen, is 4 het tweede, 6 het derde, enzovoort. Elk even getal is precies het dubbele van zijn plaats in de rij:

$$
\text{het } n\text{-de even getal} = 2n \qquad\qquad \text{het } n\text{-de oneven getal} = 2n - 1
$$

Het oneven getal op plaats $n$ ligt steeds één onder het even getal op dezelfde plaats: het 1e oneven getal is $2 - 1 = 1$, het 2e is $4 - 1 = 3$, het 3e is $6 - 1 = 5$.

:::example Het hoeveelste even getal is 18?
**Denkstap 1.** Gebruik de regel omgekeerd: als $2n = 18$, dan is $n$ de helft van 18, dus $n = 9$.

**Denkstap 2.** Controleer door te tellen in sprongen van 2: 2 (1e), 4 (2e), 6 (3e), 8 (4e), 10 (5e), 12 (6e), 14 (7e), 16 (8e), 18 (9e).

**Antwoord.** 18 is het **9e** even getal.

**Let op de afspraak.** Als je 0 als eerste even getal meetelt, schuift alles één plaats op en is 18 het 10e. In de wiskunde moet je zulke afspraken altijd expliciet maken; in deze module beginnen we bij 2, tenzij anders vermeld.
:::

{{ exercises: 01-019, 01-020 }}

## Patronen herkennen en voortzetten

De rij van even getallen is een voorbeeld van een **patroon**: een rij getallen die volgens een vaste regel verdergaat. Elk getal in de rij heet een **term**. Het herkennen van patronen is misschien wel de oudste wiskundige activiteit: wie de regelmaat van seizoenen, maanstanden en getijden zag, kon vooruit plannen.

De belangrijkste vraag bij een getallenrij is steeds: **wat gebeurt er van de ene term naar de volgende?** Een handige gewoonte is om de verschillen tussen opeenvolgende termen op te schrijven.

:::example Drie soorten patronen
**Rij A: 3, 7, 11, 15, …** De verschillen zijn steeds 4. Er komt telkens hetzelfde bij. De volgende term is $15 + 4 = 19$.

**Rij B: 1, 2, 4, 7, 11, …** De verschillen zijn 1, 2, 3, 4. De verschillen worden elke keer één groter, dus het volgende verschil is 5 en de volgende term is $11 + 5 = 16$.

**Rij C: 2, 6, 18, 54, …** De verschillen (4, 12, 36) zijn niet gelijk, maar ze worden steeds drie keer zo groot. Kijk je naar de termen zelf, dan zie je dat elke term **drie keer** de vorige is: $2 \times 3 = 6$, $6 \times 3 = 18$, $18 \times 3 = 54$. De volgende term is $54 \times 3 = 162$.
:::

Bij rij A tel je steeds hetzelfde op; zo'n rij heet een *rekenkundige rij*. Bij rij C vermenigvuldig je steeds met hetzelfde getal; dat is een *meetkundige rij*. Beide soorten komen in module 28 (rijen en reeksen) uitgebreid terug.

:::warning Een patroon is een vermoeden
Een paar termen leggen een patroon nooit helemaal vast. Na 1, 2, 4 denken de meeste mensen aan 8 (steeds verdubbelen), maar 7 is net zo verdedigbaar (verschillen 1, 2, 3), zoals rij B laat zien. Een gevonden patroon is een **vermoeden** dat je met een regel moet onderbouwen. In opgaven staat daarom vaak de regel erbij, of zijn er genoeg termen om twijfel uit te sluiten.
:::

{{ exercises: 01-021, 01-022 }}

## Figuurpatronen

Patronen hoeven niet uit getallen te bestaan. Vaak zie je een rij figuren, en is de vraag hoeveel bouwstenen de zoveelste figuur nodig heeft. Het helpt dan om niet naar de getallen, maar naar de **opbouw** te kijken.

![Lucifers gelegd als één, twee en drie vierkanten op een rij](/images/diagrams/m01-lucifers-vierkanten.svg "Eén vierkant kost 4 lucifers, twee vierkanten 7, drie vierkanten 10.")

Het eerste vierkant kost 4 lucifers. Elk volgend vierkant deelt een zijkant met het vorige, en heeft dus maar 3 nieuwe lucifers nodig. Dat verklaart de verschillen van 3 in de rij 4, 7, 10, … Wie dat inziet, hoeft niet alle figuren te tekenen: voor $n$ vierkanten heb je $4 + 3 \times (n - 1)$ lucifers nodig.

:::history Ishango, ca. 20.000 jaar geleden
Op het Ishango-been, een van de oudste bekende voorwerpen met groepjes kerven, staat in één kolom de reeks 11, 13, 17, 19. Dat zijn precies de priemgetallen tussen 10 en 20. Is dat een patroon of toeval? In het historisch intermezzo zie je waarom onderzoekers het daar nog steeds niet over eens zijn, en waarom je bij patronen in oude voorwerpen extra voorzichtig moet zijn.
:::

## Zelfstandig oefenen

{{ exercises: 01-023, 01-024, 01-025, 01-026 }}
