# De onbekende aan beide kanten

Tot nu toe stond de onbekende maar aan één kant van het isgelijkteken. Dan kun je terugrekenen: de bewerkingen op $x$ één voor één ongedaan maken. Maar veel vragen uit de praktijk leiden tot vergelijkingen met $x$ aan **beide** kanten. Twee tarieven die je vergelijkt, twee auto's die elkaar inhalen, twee rekeningen die even groot moeten worden: telkens hangt zowel het linker- als het rechterlid van de onbekende af. In deze les zie je dat de balansmethode zulke vergelijkingen zonder moeite aankan, ook als er haakjes in staan.

## 1. Dozen aan beide kanten

Op een balans liggen links vier gelijke dozen en een gewicht van 3 kg, rechts één van dezelfde dozen en 18 kg. De balans is in evenwicht:

$$
4x + 3 = x + 18
$$

Terugrekenen lukt hier niet: links gebeurt iets met $x$, rechts ook. Maar de balans geeft direct een idee. Haal aan **beide** kanten één doos weg. Het evenwicht blijft bestaan, en rechts ligt geen enkele doos meer.

![Weegschaal met dozen aan beide kanten](/images/diagrams/m16-balans-beide-kanten.svg "Links vier dozen en 3 kg, rechts één doos en 18 kg. Haal je aan beide kanten één doos weg, dan blijft er 3x + 3 = 18 over. Eigen illustratie.")

Eén doos weghalen is in formuletaal: aan beide kanten $x$ aftrekken. Dat is een gewone balansstap: je trekt van beide kanten **dezelfde term** af. Dat die term een letter bevat, maakt niet uit; de twee kanten blijven aan elkaar gelijk, welke waarde $x$ ook heeft.

:::example Uitgewerkt voorbeeld: 4x + 3 = x + 18
$$
\begin{aligned}
4x + 3 &= x + 18 && \text{(beide kanten } -x\text{)}\\
3x + 3 &= 18 && \text{(beide kanten } -3\text{)}\\
3x &= 15 && \text{(beide kanten } :3\text{)}\\
x &= 5
\end{aligned}
$$
*Controle in de oorspronkelijke vergelijking:* links $4 \times 5 + 3 = 23$, rechts $5 + 18 = 23$. Beide kanten zijn 23, dus $x = 5$ klopt.
:::

Je had ook aan beide kanten $4x$ kunnen aftrekken. Dan krijg je $3 = -3x + 18$, daarna $-15 = -3x$ en $x = 5$. Dezelfde oplossing, maar met negatieve getallen onderweg. Beide routes zijn juist.

:::tip Verzamel de x-termen aan de kant met de meeste x
Trek de **kleinste** $x$-term af. Dan blijft er aan de andere kant een positief aantal $x$ over en vermijd je onnodige mintekens. Bij $4x + 3 = x + 18$ trek je dus $x$ af, niet $4x$.
:::

:::example Uitgewerkt voorbeeld: een negatieve oplossing
Los op: $4 - 3x = 2x + 19$.

1. De kleinste $x$-term is $-3x$ (links). Tel aan beide kanten $3x$ op: $4 = 5x + 19$.
2. Trek aan beide kanten 19 af: $-15 = 5x$.
3. Deel door 5: $x = -3$.
4. *Controle:* links $4 - 3 \times (-3) = 4 + 9 = 13$, rechts $2 \times (-3) + 19 = -6 + 19 = 13$. Klopt.

Dat de oplossing links van het isgelijkteken eindigt ($-3 = x$) is geen probleem: $-3 = x$ en $x = -3$ zeggen hetzelfde.
:::

{{ exercises: 16-008, 16-013, 16-010 }}

## 2. Een stappenplan

Bij langere vergelijkingen helpt een vaste volgorde. Je hoeft je er niet slaafs aan te houden, maar ze voorkomt dat je verdwaalt.

:::theory Stappenplan voor een lineaire vergelijking
1. **Haakjes wegwerken** aan beide kanten (distributieve eigenschap, module 15).
2. **Elke kant vereenvoudigen**: gelijksoortige termen samennemen.
3. **De $x$-termen verzamelen** aan één kant, met een balansstap.
4. **De losse getallen verzamelen** aan de andere kant, met een balansstap.
5. **Delen** door de coëfficiënt van $x$ (als die niet nul is).
6. **Controleren** door de gevonden waarde in de **oorspronkelijke** vergelijking in te vullen.
:::

Een vergelijking die na stap 1 en 2 de vorm $ax + b = cx + d$ heeft, zonder $x^2$ of $x$ in een noemer, heet een **lineaire vergelijking**. De naam komt van de grafiek: zoals je in paragraaf 4 ziet, horen bij beide kanten rechte lijnen.

Waarom controleer je in de **oorspronkelijke** vergelijking en niet in een tussenstap? Omdat een fout bij het haakjes wegwerken in stap 1 de hele verdere vergelijking verandert. De tussenvergelijking klopt dan met je antwoord, maar de opgave niet.

## 3. Haakjes

### Een getal vóór haakjes

:::example Uitgewerkt voorbeeld: 3(x + 2) = 4x − 1
1. **Haakjes wegwerken:** $3(x + 2) = 3x + 6$. De vergelijking wordt $3x + 6 = 4x - 1$.
2. **x-termen verzamelen:** trek aan beide kanten $3x$ af: $6 = x - 1$.
3. **Getallen verzamelen:** tel aan beide kanten 1 op: $7 = x$.
4. *Controle:* links $3 \times (7 + 2) = 3 \times 9 = 27$; rechts $4 \times 7 - 1 = 27$. Klopt.
:::

Soms hoef je de haakjes niet eens weg te werken. Bij $4(x - 3) = 20$ is het linkerlid een product. Deel je beide kanten door 4, dan staat er direct $x - 3 = 5$, en dus $x = 8$. Uitwerken mag ook: $4x - 12 = 20$, $4x = 32$, $x = 8$. Kies wat het kortst is.

:::warning Elke term binnen de haakjes
Bij $3(x + 2)$ wordt **zowel** $x$ **als** 2 met 3 vermenigvuldigd. Wie $3x + 2$ schrijft, lost een andere vergelijking op: $3x + 2 = 4x - 1$ geeft $x = 3$. Dat getal komt netjes uit, maar het voldoet niet aan de oorspronkelijke vergelijking: $3 \times (3 + 2) = 15$, terwijl $4 \times 3 - 1 = 11$.
:::

### Een minteken vóór haakjes

Een minteken vóór haakjes betekent: trek **de hele inhoud** af. In module 13 en 15 zag je dat daardoor elke term binnen de haakjes van teken wisselt:

$$
-(x - 2) = -x + 2
$$

Wie "min $x$ min 2" ervan maakt, trekt 2 extra af in plaats van er 2 bij op te tellen. Dat is de meest gemaakte fout bij vergelijkingen met haakjes.

:::example Uitgewerkt voorbeeld: 9 − (x − 3) = 4
1. **Haakjes wegwerken:** $9 - (x - 3) = 9 - x + 3 = 12 - x$. De vergelijking wordt $12 - x = 4$.
2. Trek aan beide kanten 12 af: $-x = -8$.
3. Vermenigvuldig beide kanten met $-1$ (of deel door $-1$): $x = 8$.
4. *Controle:* $9 - (8 - 3) = 9 - 5 = 4$. Klopt.

**De fout:** wie $9 - x - 3$ schrijft, krijgt $6 - x = 4$ en dus $x = 2$. Controle: $9 - (2 - 3) = 9 + 1 = 10$, geen 4. De controle vangt de fout.
:::

### Een factor met een minteken

Staat er een negatief getal vóór haakjes, dan combineer je beide ideeën: elke term vermenigvuldig je met dat negatieve getal, met de tekenregels uit module 13.

:::example Uitgewerkt voorbeeld: 3(2x − 1) − 2(x − 4) = 21
1. **Eerste haakjes:** $3(2x - 1) = 6x - 3$.
2. **Tweede haakjes:** $-2(x - 4) = -2x + 8$. Let op: $-2 \times -4 = +8$.
3. **Samenvoegen:** $6x - 3 - 2x + 8 = 4x + 5$. De vergelijking wordt $4x + 5 = 21$.
4. **Oplossen:** $4x = 16$, dus $x = 4$.
5. *Controle:* $3 \times (8 - 1) - 2 \times (4 - 4) = 21 - 0 = 21$. Klopt.
:::

{{ exercises: 16-009, 16-011, 16-012, 16-033 }}

## 4. De oplossing als snijpunt

Er is nog een heel andere manier om naar $4x + 3 = x + 18$ te kijken. Beschouw elke kant als een **regel** die bij elk getal $x$ een uitkomst geeft: $y = 4x + 3$ en $y = x + 18$. In een assenstelsel zijn dat twee rechte lijnen. De vergelijking vraagt: voor welke $x$ geven beide regels **dezelfde** uitkomst? Dat is precies de $x$ waar de twee lijnen elkaar snijden.

{{ widget: function-plot fn="4*x+3" fn2="x+18" xmin=-2 xmax=9 ymin=-5 ymax=40 title="y = 4x + 3 en y = x + 18" }}

De lijnen snijden elkaar in het punt met $x = 5$ en $y = 23$. Dat zijn precies de oplossing en de gemeenschappelijke waarde uit de controle in paragraaf 1. Links van $x = 5$ ligt de lijn $y = x + 18$ hoger: daar is het rechterlid groter. Rechts van $x = 5$ is het andersom.

De grafiek laat ook zien waarom een lineaire vergelijking meestal **precies één** oplossing heeft: twee rechte lijnen met een verschillende helling snijden elkaar in één punt. De steilste lijn ($4x$, helling 4) haalt de minder steile ($x$, helling 1) op één plek in. In les 5 zie je wat er gebeurt als de hellingen gelijk zijn, en in module 19 en 20 kom je uitgebreid terug op lijnen en snijpunten.

:::tip Grafiek of balans?
Een grafiek geeft een **beeld**: hoeveel oplossingen er zijn en ongeveer waar ze liggen. De balansmethode geeft de **exacte** waarde. Bij een snijpunt als $x = 2{,}37$ kun je dat in een grafiek niet nauwkeurig aflezen, maar met de balansmethode wel uitrekenen.
:::
