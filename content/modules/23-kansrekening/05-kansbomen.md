# Kansbomen, met en zonder terugleggen

In les 4 vermenigvuldigde je kansen van onafhankelijke gebeurtenissen. Maar niet alles is onafhankelijk. Trek je twee kaarten uit hetzelfde spel zonder de eerste terug te leggen, dan verandert de eerste trekking wat er in het spel zit en daarmee de kansen voor de tweede. In deze les leer je een schema dat zulke opeenvolgende, afhankelijke gebeurtenissen overzichtelijk maakt: de **kansboom**.

## Met terugleggen: de kansen blijven gelijk

Een zak bevat 3 rode en 2 blauwe ballen. Elke bal is even gemakkelijk te trekken. Je trekt twee keer en legt de eerste bal na het bekijken terug (en mengt opnieuw). Dan is de situatie bij de tweede trekking identiek aan die bij de eerste: $P(R)=\frac35$ en $P(B)=\frac25$. De twee trekkingen zijn **onafhankelijk**, en de kans op twee keer rood is

$$
P(RR)=\frac35\times\frac35=\frac9{25}.
$$

Dit is dezelfde productregel uit les 4. Het terugleggen *herstelt* de situatie.

## Zonder terugleggen: de zak verandert

Leg je de eerste bal niet terug, dan zit er na een rode trekking een bal minder in de zak: nog 2 rode en 2 blauwe, vier ballen. De kans op rood in de tweede trekking is dan $\frac24=\frac12$. Was de eerste bal blauw, dan zitten er nog 3 rode en 1 blauwe: de kans op rood is dan $\frac34$. De kans in de tweede stap **hangt dus af van wat er in de eerste stap gebeurde**.

Dit noteer je met een verticale streep: $P(B\mid A)$ lees je als "de kans op $B$ gegeven dat $A$ al is opgetreden". Voor de zak geldt $P(\text{rood tweede}\mid\text{rood eerste})=\frac24$ en $P(\text{rood tweede}\mid\text{blauw eerste})=\frac34$.

:::definition Productregel voor afhankelijke gebeurtenissen
Voor twee gebeurtenissen $A$ en $B$ geldt altijd

$$
P(A\cap B)=P(A)\times P(B\mid A).
$$

Zijn $A$ en $B$ onafhankelijk, dan is $P(B\mid A)=P(B)$ en keert de bekende regel $P(A)\,P(B)$ terug. De algemene regel is dus de basis; de eerdere regel is een bijzonder geval.
:::

## De kansboom

In een kansboom teken je elke stap van het experiment als een splitsing. Elke tak krijgt de kans op die uitkomst, *gegeven alles wat eerder gebeurde*. Het resultaat voor de zak (zonder terugleggen) staat hieronder.

![Kansboom voor twee trekkingen zonder terugleggen uit een zak met 3 rode en 2 blauwe ballen](/images/diagrams/m23-kansboom.svg "Twee trekkingen zonder terugleggen: 3 rode en 2 blauwe ballen. De kansen op de tweede splitsing hangen af van de eerste trekking.")

Voor het gebruik van de boom gelden drie regels.

1. **Per splitsing tellen de takkansen op tot 1.** Bij de eerste splitsing $\frac35+\frac25=1$; bij de tweede, na rood: $\frac24+\frac24=1$; na blauw: $\frac34+\frac14=1$. Dat is een snelle controle op je boom.
2. **Langs één pad vermenigvuldig je** de takkansen. Het pad $RR$ heeft kans $\frac35\times\frac24=\frac{6}{20}=\frac3{10}$.
3. **Tussen verschillende paden tel je op.** De gebeurtenis ‘precies één rood’ bestaat uit twee paden: $RB$ en $BR$, die elkaar uitsluiten. Dus $P=\frac3{10}+\frac3{10}=\frac35$.

| Pad zonder terugleggen | Berekening | Kans |
|---|---|---|
| RR | $\frac35\times\frac24$ | $\frac3{10}$ |
| RB | $\frac35\times\frac24$ | $\frac3{10}$ |
| BR | $\frac25\times\frac34$ | $\frac3{10}$ |
| BB | $\frac25\times\frac14$ | $\frac1{10}$ |

De vier eindkansen tellen op tot $\frac3{10}+\frac3{10}+\frac3{10}+\frac1{10}=1$. Dat is een tweede, krachtige controle: alle volledige paden samen vormen de hele uitkomstenruimte.

:::example Zonder terugleggen: precies één rood
Een zak bevat 3 rode en 2 blauwe ballen. Je trekt twee ballen zonder terugleggen. Wat is de kans op precies één rode?

**Stap 1 – paden.** Precies één rood kan als $RB$ of als $BR$.

**Stap 2 – $RB$.** Eerst rood: $\frac35$. Dan zitten er 2 rode en 2 blauwe in de zak, dus blauw is $\frac24$. Samen $\frac35\times\frac24=\frac3{10}$.

**Stap 3 – $BR$.** Eerst blauw: $\frac25$. Dan 3 rode en 1 blauwe: rood is $\frac34$. Samen $\frac25\times\frac34=\frac3{10}$.

**Stap 4 – optellen.** $\frac3{10}+\frac3{10}=\frac35$.

Met terugleggen zou je $\frac35\times\frac25+\frac25\times\frac35=\frac{12}{25}$ krijgen: een ander antwoord, want de kansen blijven gelijk. Het is dus niet vanzelfsprekend of een situatie met of zonder terugleggen is bedoeld; lees de opgave daarop.
:::

{{ exercises: 23-018, 23-019, 23-020, 23-021, 23-022 }}

## Een boom met één splitsing meer

De boom wordt niet ingewikkelder als je meer stappen toevoegt: je blijft per pad vermenigvuldigen. Neem een zak met 5 rode en 3 blauwe ballen (8 ballen), en trek er drie zonder terugleggen. De kans op drie keer rood is

$$
\frac58\times\frac47\times\frac36=\frac{60}{336}=\frac5{28}.
$$

Bij elke stap daalt zowel de teller als de noemer met één: er ligt één rode bal minder én één bal minder in totaal. Dat is het belangrijkste dat je bij ‘zonder terugleggen’ in de gaten moet houden. De meest gemaakte fout is de noemer niet aan te passen en $\left(\frac58\right)^3=\frac{125}{512}$ te berekenen: dat is het antwoord voor *met* terugleggen.

:::warning Zonder terugleggen: pas teller én noemer aan
- Na elke trekking verandert het aantal ballen in de zak ($n\to n-1$).
- Het aantal ballen van de getrokken kleur verandert ook ($k\to k-1$), de andere kleur blijft gelijk.
- Controleer dat de takkansen bij elke splitsing nog optellen tot 1: als dat niet zo is, is de boom fout.
:::

{{ exercises: 23-041 }}

## Een verrassing: de tweede trekking

Wat is de kans dat de **tweede** bal rood is, als je zonder terugleggen trekt uit 3 rode en 2 blauwe? De tweede bal kan rood zijn op twee manieren: $RR$ (3/10) of $BR$ (3/10). Samen:

$$
P(\text{tweede rood})=\frac3{10}+\frac3{10}=\frac35.
$$

Dat is precies dezelfde kans als op rood bij de *eerste* trekking! Dat is geen toeval: als je niet weet wat de eerste bal was, is de tweede bal even "eerlijk" getrokken als de eerste. Zolang je de eerste bal niet bekijkt, is de tweede bal even willekeurig als de eerste. Je zou de ballen ook alvast in een rij kunnen leggen en pas daarna kijken: elke plek in de rij heeft dezelfde kans op rood. De volgorde waarin je naar de ballen kijkt, verandert de kans niet.

Dit is een gedachte die je helpt bij moeilijkere opgaven. Voor symmetrische situaties hoef je niet de hele boom uit te tekenen; vaak kun je met een slim argument volstaan. Maar zodra je informatie krijgt (zoals "de eerste was rood"), wijzigt de kans wel, en moet je de boom volgen.

{{ exercises: 23-042 }}

## Complement en boom samen

Een boom is vooral handig als de gevraagde gebeurtenis uit veel paden bestaat. In dat geval is het complement vaak sneller. Voorbeeld: je trekt drie keer zonder terugleggen uit de zak met 5 rode en 3 blauwe ballen. ‘Minstens één blauwe’ bestaat uit zeven van de acht paden; het complement is ‘geen blauwe’, dus $RRR$ met kans $\frac5{28}$. Dus

$$
P(\text{minstens één blauw})=1-\frac5{28}=\frac{23}{28}.
$$

Eén enkel pad in plaats van zeven. Als een boom veel takken krijgt, kies dan altijd eerst: is het complement korter?

:::example Samenvatting van de aanpak
1. Wat gebeurt er per stap, en verandert de zak (of het spel)?
2. Teken de boom of beschrijf één pad; zet de kans per tak, gegeven de voorgeschiedenis.
3. Vermenigvuldig langs het pad, tel verschillende paden op.
4. Controleer: takken per splitsing tellen op tot 1, eindkansen samen tot 1.
5. Is het complement korter? Gebruik het.
:::

{{ exercise: 23-023 }}
