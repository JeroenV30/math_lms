# Onafhankelijke, herhaalde en strijdige voorwaarden

Tot nu toe had elk stelsel precies één oplossing. Dat is het gewone geval, maar niet het enige. De vuistregel "evenveel vergelijkingen als onbekenden" is een vuistregel, geen garantie. In deze les onderzoek je wanneer hij tekortschiet. De vraag is steeds: draagt de tweede vergelijking *nieuwe* informatie, of herhaalt ze de eerste, of spreekt ze die tegen? Het antwoord bepaalt of je één, geen of oneindig veel oplossingen krijgt.

![Drie mogelijkheden voor twee lijnen](/images/diagrams/m20-drie-gevallen.svg "Links: twee lijnen met één snijpunt. Midden: evenwijdige lijnen zonder gemeenschappelijk punt. Rechts: twee vergelijkingen voor dezelfde lijn.")

## Geen oplossing: strijdige voorwaarden

Bekijk $x + y = 5$ en $2x + 2y = 12$. Probeer het met eliminatie. Vermenigvuldig de eerste met $2$: $2x + 2y = 10$. Trek die af van de tweede vergelijking:

$$
\begin{array}{rcl}
2x + 2y &=& 12 \\
2x + 2y &=& 10 \\
\hline
0 &=& 2
\end{array}
$$

Beide onbekenden zijn verdwenen, en wat overblijft is een onwaarheid. Dat is geen rekenfout maar het antwoord: de twee voorwaarden kunnen niet tegelijk gelden. Inderdaad, als $x + y = 5$, dan is $2x + 2y$ gelijk aan $10$ en kan het niet ook $12$ zijn. Het stelsel is **strijdig** en heeft geen oplossing.

Grafisch zijn het twee lijnen met dezelfde helling, $y = -x + 5$ en $y = -x + 6$, maar met een verschillende beginwaarde. Ze lopen **evenwijdig** en raken elkaar nergens.

{{ widget: function-plot fn="x+2" fn2="x-1" xmin=-4 xmax=6 ymin=-5 ymax=8 title="Evenwijdige lijnen: y = x + 2 en y = x - 1" }}

Een stelsel zonder oplossing is geen mislukt stelsel. Het kan informatie bevatten: in een praktische situatie betekent het dat de gegevens elkaar tegenspreken, of dat een aanname niet klopt. Een winkelier die beweert dat 5 kaartjes samen € 10 kosten, en dat 10 kaartjes samen € 25 kosten (bij dezelfde prijs per kaartje), spreekt zichzelf tegen. Het stelsel maakt dat zichtbaar.

## Oneindig veel oplossingen: herhaalde voorwaarden

Nu $x + y = 5$ en $2x + 2y = 10$. Vermenigvuldig de eerste met $2$ en je krijgt precies de tweede. De tweede vergelijking zegt dus niets nieuws; het is dezelfde voorwaarde in een andere verpakking. Bij eliminatie blijft er $0 = 0$ over: een waarheid, maar geen informatie.

De oplossingen zijn dan de oplossingen van de ene vergelijking $x + y = 5$: alle punten van één lijn. Je kiest $x$ vrij en berekent $y = 5 - x$. Die vrij te kiezen waarde noem je een **parameter**. Elke reële $x$ levert een oplossing, zoals $(2; 3)$, $(0; 5)$, $(1{,}5; 3{,}5)$ en $(-4; 9)$. Je beschrijft de verzameling oplossingen als $(x; 5 - x)$ met $x$ willekeurig.

:::example Met contextbeperkingen
Als $x$ en $y$ aantallen tickets zijn, mogen ze alleen niet-negatieve gehele waarden aannemen. Bij $x + y = 5$ zijn er dan zes paren: $(0; 5)$, $(1; 4)$, $(2; 3)$, $(3; 2)$, $(4; 1)$ en $(5; 0)$.

![De zes gehele niet-negatieve oplossingen van x + y = 5](/images/diagrams/m20-tickets.svg "De algebraïsche lijn bevat oneindig veel punten, maar het ticketmodel laat er slechts zes toe.")

De wiskundige verzameling is oneindig, de praktische slechts zes. Daarom vraag je bij een toepassing altijd: welke waarden zijn *toegestaan*?
:::

## Drie gevallen, één blik

De drie mogelijkheden zijn nu op te sommen. Na het eliminatieproces blijft er een van de volgende situaties over.

| Wat blijft er over? | Betekenis | Aantal oplossingen | Lijnen |
|---|---|---|---|
| Een vergelijking als $x = 3$ en daarna $y = 4$ | Twee onafhankelijke voorwaarden | Precies één | Snijden in één punt |
| Een onwaarheid zoals $0 = 2$ | Strijdige voorwaarden | Geen | Evenwijdig, verschillend |
| Een waarheid zoals $0 = 0$ | Herhaalde voorwaarde | Oneindig veel | Vallen samen |

Dit is ook meteen een controle op je eigen werk. Krijg je ooit $0 = 0$ of $0 = 2$, dan heb je waarschijnlijk niets verkeerd gedaan: het stelsel is bijzonder, en dat is de uitkomst.

## Een snelle coëfficiëntencontrole

Je hoeft niet altijd het hele eliminatieproces uit te voeren om te weten welk geval je hebt. Voor twee vergelijkingen $a_1x + b_1y = c_1$ en $a_2x + b_2y = c_2$ bereken je

$$
a_1b_2 - a_2b_1.
$$

Is dit getal **niet nul**, dan hebben de lijnen verschillende richtingen en is er precies één oplossing. Waarom? Een lijn $ax + by = c$ heeft richting $(b; -a)$, en twee richtingen zijn evenwijdig precies als de bijbehorende uitdrukking nul is. Bij $2x + y = 8$ en $x + 2y = 10$ is het getal $2 \cdot 2 - 1 \cdot 1 = 3$, niet nul, dus er is één oplossing.

Is het getal **nul**, dan zijn de lijnen evenwijdig of identiek. Kijk dan naar de rechterkanten: volgen die dezelfde verhouding als de coëfficiënten, dan zijn de voorwaarden herhaald (oneindig veel oplossingen); anders zijn ze strijdig (geen oplossing). Bij $x + y = 5$ en $2x + 2y = 10$ is het getal $1 \cdot 2 - 2 \cdot 1 = 0$, en de rechterkanten verhouden zich als $5 : 10$, net als de coëfficiënten. Bij $x + y = 5$ en $2x + 2y = 12$ is het getal ook $0$, maar $5 : 12$ past niet bij $1 : 2$.

Deze controle vervangt niet het begrijpen van je stelsel. Het getal $a_1b_2 - a_2b_1$ heeft een naam in de lineaire algebra, de **determinant**, en je ziet het in module 32 terug bij matrices. Eliminatie laat rechtstreeks zien welk geval je hebt: er blijft een echte beperking, een onwaarheid of een identiteit over.

:::warning Nul is geen eindoordeel
Een determinant van nul zegt alleen dat er *niet precies één* oplossing is. Of er geen of oneindig veel zijn, zie je pas aan de rechterkanten. Geef bij nul dus nooit meteen 'geen oplossing' als antwoord.
:::

:::question Welke waarde van c?
Voor welke waarde van $c$ heeft het stelsel $x + y = 5$ en $2x + 2y = c$ oneindig veel oplossingen? En voor welke waarden geen enkele? Is er een waarde van $c$ waarvoor het stelsel precies één oplossing heeft?
:::

{{ exercises: 20-018, 20-019, 20-020, 20-021, 20-022 }}

{{ exercise: 20-037 }}
