# Een verhaal in een vergelijking vertalen

Tot nu toe stond de vergelijking er al: je hoefde haar alleen op te lossen. In de praktijk is dat het **tweede** deel van het werk. Het eerste, en vaak het moeilijkste, is om uit een verhaal, een tabel of een prijslijst de vergelijking te halen. Wie dat kan, bezit de kern van wiskundig modelleren: een situatie vertalen naar een model, het model oplossen en de uitkomst terugvertalen naar de werkelijkheid. In deze les oefen je die drie stappen met leeftijden, tarieven, afstanden, omtrekken, formules en ongelijkheden.

## 1. Vier stappen

Een goede vertaling gaat bijna altijd in dezelfde volgorde. Wie een stap overslaat, verliest meestal ergens de draad.

:::theory Van verhaal naar oplossing
1. **Kies de onbekende** en schrijf op wat hij betekent, mét eenheid: "$n$ is het aantal bezoeken", niet alleen "$n$".
2. **Vertaal** de informatie naar twee expressies die aan elkaar gelijk zijn. Vraag jezelf: welke twee grootheden zijn volgens de tekst even groot?
3. **Los op** met de balansmethode en controleer in de **oorspronkelijke vergelijking**.
4. **Interpreteer**: past de uitkomst bij het verhaal? Is een aantal geheel, een lengte positief, een prijs een redelijk bedrag? Geef een antwoord in een volledige zin, met eenheid.
:::

Een vergelijking is altijd een bewering over **twee** dingen die gelijk zijn. Zoek dus eerst die twee dingen. Soms staan ze er letterlijk ("de totale prijs is € 44"), soms moet je ze zelf bedenken ("twee auto's leggen na het inhalen dezelfde afstand af").

:::example Uitgewerkt voorbeeld: een bestelling
Een drukker rekent € 8 vaste kosten en € 3 per exemplaar. De totale prijs is € 44. Hoeveel exemplaren zijn besteld?

1. **Onbekende:** $n$ is het aantal exemplaren.
2. **Vertalen:** de prijs is $8 + 3n$ euro en dat is gelijk aan 44: $8 + 3n = 44$.
3. **Oplossen:** trek 8 af, $3n = 36$, deel door 3: $n = 12$.
4. **Controle en interpretatie:** $8 + 3 \times 12 = 44$. Het aantal is geheel en positief, dus de uitkomst past: er zijn twaalf exemplaren besteld.
:::

{{ exercises: 16-024, 16-026 }}

## 2. Getallen en leeftijden

Veel opgaven met "een getal" of "leeftijden" lijken op raadsels. Ze zijn eigenlijk oefeningen in het vertalen van **relaties** naar expressies. De truc is bijna altijd: noem de kleinste of de bekendste grootheid $x$, en druk de andere uit in $x$.

| Verhaal | Vertaling |
|---|---|
| een getal vermeerderd met 7 | $x + 7$ |
| drie keer een getal, min 4 | $3x - 4$ |
| Mila is 5 jaar ouder dan Sem (Sem is $x$) | Mila: $x + 5$ |
| het volgende gehele getal | $x + 1$ |
| het volgende even getal | $x + 2$ (als $x$ even is) |
| de helft van een getal | $\tfrac{x}{2}$ |
| over 8 jaar | leeftijd $+ 8$ |
| twee keer zo oud als | $2 \times$ |

Let op de woorden "**minder dan**" en "**meer dan**". "Vijf minder dan $x$" is $x - 5$, niet $5 - x$.

:::example Uitgewerkt voorbeeld: twee leeftijden
Mila is 5 jaar ouder dan Sem. Samen zijn ze 41 jaar. Hoe oud is Sem?

1. **Onbekende:** $x$ is Sems leeftijd. Dan is Mila $x + 5$.
2. **Vertalen:** samen is $x + (x + 5) = 41$.
3. **Oplossen:** $2x + 5 = 41$, dus $2x = 36$ en $x = 18$.
4. **Controle:** Sem is 18, Mila is 23, samen 41. Klopt.
:::

:::example Uitgewerkt voorbeeld: opeenvolgende even getallen
De som van drie opeenvolgende even getallen is 78. Welke getallen zijn dat?

1. **Onbekende:** $x$ is het kleinste getal. De volgende even getallen zijn $x + 2$ en $x + 4$ (niet $x + 1$ en $x + 2$: dat zouden opeenvolgende gehele getallen zijn).
2. **Vertalen:** $x + (x + 2) + (x + 4) = 78$.
3. **Oplossen:** $3x + 6 = 78$, dus $3x = 72$ en $x = 24$.
4. **Antwoord:** de getallen zijn 24, 26 en 28. Controle: $24 + 26 + 28 = 78$.
:::

:::warning Welke grootheid noem je x?
Je mag kiezen, maar kies slim. In het voorbeeld met de leeftijden had je ook Mila $x$ kunnen noemen; dan is Sem $x - 5$ en wordt de vergelijking $x + (x - 5) = 41$. Dat geeft $x = 23$, en dat is Mila's leeftijd, niet die van Sem. De vraag was naar Sem! Lees na het oplossen altijd nog eens wat er **gevraagd** werd.
:::

{{ exercises: 16-027, 16-039 }}

## 3. Meetkunde: omtrek en hoeken

Veel vergelijkingen met meetkunde zijn een kwestie van de juiste formule onthouden of afleiden. De omtrek van een figuur is de som van alle zijden. Een tekening helpt: zet de lengtes in $x$ erbij.

:::example Uitgewerkt voorbeeld: een gelijkbenige driehoek
Een gelijkbenige driehoek heeft een basis van 10 cm. De twee gelijke benen zijn elk $x$ cm. De omtrek is 34 cm. Hoe lang is een been?

1. **Vertalen:** omtrek $= x + x + 10 = 34$.
2. **Oplossen:** $2x + 10 = 34$, dus $2x = 24$ en $x = 12$.
3. **Controle:** $12 + 12 + 10 = 34$. En de driehoeksongelijkheid klopt: twee benen van 12 samen zijn langer dan de basis 10.
:::

Een tweede klassieker: een rechthoek waarvan de lengte 3 cm groter is dan de breedte. Noem je de breedte $x$, dan is de lengte $x + 3$ en de omtrek $2x + 2(x + 3)$. Daar zit **een stap** in waar het vaak misgaat: de omtrek bestaat uit **twee** lengtes en **twee** breedtes. Wie de vergelijking als $x + (x + 3) = 26$ schrijft, rekent met de **halve** omtrek en vindt een verkeerde $x$.

Ook hoeken geven vergelijkingen. De som van de hoeken van een driehoek is $180^\circ$. Heeft een driehoek hoeken van $x$, $2x$ en $x + 40$ graden, dan geldt $x + 2x + (x + 40) = 180$, dus $4x = 140$ en $x = 35$. De hoeken zijn $35^\circ$, $70^\circ$ en $75^\circ$, samen $180^\circ$.

{{ exercise: 16-025 }}

## 4. Tarieven en de onbekende aan beide kanten

Wie twee tarieven vergelijkt, krijgt vanzelf een vergelijking met de onbekende aan beide kanten. De vraag is dan: **bij hoeveel gebruik is het totaal gelijk?** Voor kleinere aantallen is het ene tarief goedkoper, voor grotere het andere. De vergelijking geeft het omslagpunt.

:::example Uitgewerkt voorbeeld: twee abonnementen
Een sportschool biedt twee abonnementen aan. Abonnement A kost € 60 per maand en € 4 per bezoek. Abonnement B kost € 20 per maand en € 8 per bezoek. Bij hoeveel bezoeken per maand kosten beide evenveel?

1. **Onbekende:** $n$ is het aantal bezoeken per maand.
2. **Vertalen:** A kost $60 + 4n$ en B kost $20 + 8n$. Gelijk: $60 + 4n = 20 + 8n$.
3. **Oplossen:** trek $4n$ af: $60 = 20 + 4n$. Trek 20 af: $40 = 4n$. Dus $n = 10$.
4. **Prijs:** $60 + 40 = 100$ en $20 + 80 = 100$. Bij 10 bezoeken kosten beide € 100.
5. **Interpretatie:** bij minder dan 10 bezoeken is B goedkoper (lage vaste kosten), bij meer dan 10 bezoeken is A goedkoper (lage prijs per bezoek).
:::

Dit is precies de situatie van de lijnen in les 3. Teken je de prijs van beide abonnementen als functie van het aantal bezoeken, dan snijden de lijnen elkaar op het omslagpunt.

{{ widget: function-plot fn="12+2*x" fn2="4+3*x" xmin=0 xmax=12 ymin=0 ymax=40 title="Tarief A: 12 + 2n en tarief B: 4 + 3n" }}

De grafiek hierboven hoort bij de uitdaging aan het eind van deze les. De lijn met het hoogste vaste bedrag begint hoger, maar groeit langzamer, en wordt op één punt ingehaald.

:::tip Vaste en variabele kosten
In bijna alle tariefvragen zie je hetzelfde patroon: **vast + variabel**. Het vaste deel is het getal zonder letter ($60$), het variabele deel is de coëfficiënt maal de onbekende ($4n$). Wie dit patroon herkent, kan de vergelijking vaak al na één blik opschrijven. Bij een abonnement is het vaste deel ook het startpunt van de lijn in de grafiek, en de coëfficiënt de steilheid.
:::

### Beweging: de afstand is snelheid maal tijd

Bij bewegingsopgaven gebruik je de formule $s = v \cdot t$ (afstand is snelheid maal tijd). Als twee voertuigen elkaar inhalen of tegenkomen, hebben ze op dat moment **dezelfde afstand** vanaf het startpunt afgelegd. Daar zit de vergelijking.

:::example Uitgewerkt voorbeeld: inhalen
Auto A rijdt met 80 km/u en vertrekt een uur eerder dan auto B, die 100 km/u rijdt. Na hoeveel uur haalt B de eerste auto in?

1. **Onbekende:** $t$ is de tijd in uren **na het vertrek van B**. Auto A rijdt dan al $t + 1$ uur.
2. **Vertalen:** afstand A is $80(t + 1)$, afstand B is $100t$. Bij het inhalen zijn die gelijk: $80(t + 1) = 100t$.
3. **Oplossen:** haakjes wegwerken: $80t + 80 = 100t$. Trek $80t$ af: $80 = 20t$. Dus $t = 4$.
4. **Controle:** A heeft dan $5 \times 80 = 400$ km gereden, B heeft $4 \times 100 = 400$ km gereden. Klopt.
5. **Interpretatie:** B haalt A in vier uur na zijn vertrek, op 400 km van het vertrekpunt.
:::

## 5. Formules omwerken in de praktijk

In les 5 maakte je letters vrij in eenvoudige formules. In de praktijk is het vaak nuttig om **eenmaal** om te werken en dan met getallen te rekenen. Met formules die je vaker gebruikt, scheelt dat tijd en fouten.

:::example Uitgewerkt voorbeeld: de hoogte van een trapezium
De oppervlakte van een trapezium met evenwijdige zijden $a$ en $b$ en hoogte $h$ is
$$
A = \frac{(a + b)\,h}{2}.
$$
Maak $h$ vrij, met $a + b \neq 0$.

1. Vermenigvuldig beide kanten met 2: $2A = (a + b)\,h$.
2. Deel beide kanten door $a + b$ (mag, want $a + b \neq 0$): $h = \dfrac{2A}{a + b}$.

*Controle:* een trapezium met $a = 4$, $b = 6$ en $h = 3$ heeft $A = \tfrac{10 \times 3}{2} = 15$. De omgewerkte formule geeft $h = \tfrac{2 \times 15}{4 + 6} = \tfrac{30}{10} = 3$. Klopt.
:::

Merk op dat je $(a + b)$ als één blok behandelt: de factor $(a + b)$ hoort bij het hele product, en je deelt dus door het hele blok, niet door $a$ en $b$ afzonderlijk. Wie $h = \tfrac{2A}{a} + b$ schrijft, rekent verkeerd. De controle met getallen ($\tfrac{30}{4} + 6 = 13{,}5$ in plaats van 3) laat dat meteen zien.

:::example Uitgewerkt voorbeeld: enkelvoudige rente
Een bedrag $K_0$ staat $t$ jaar op een rekening met $r$ rente per jaar (als decimaal getal, bijvoorbeeld $0{,}03$ voor 3%) waarbij de rente niet meegroeit. Het eindbedrag is
$$
K = K_0 + K_0\, r\, t.
$$
Maak $t$ vrij, met $K_0 \neq 0$ en $r \neq 0$.

1. Trek $K_0$ af: $K - K_0 = K_0\, r\, t$.
2. Deel door $K_0 r$: $t = \dfrac{K - K_0}{K_0\, r}$.

*Controle:* € 2.000 tegen 3% geeft na 4 jaar $2000 + 2000 \times 0{,}03 \times 4 = 2000 + 240 = 2240$. De formule geeft $t = \tfrac{2240 - 2000}{2000 \times 0{,}03} = \tfrac{240}{60} = 4$. Klopt.
:::

{{ exercise: 16-042 }}

## 6. Ongelijkheden in context

Veel vragen uit het dagelijks leven gaan niet over "precies gelijk", maar over **grenzen**: hoogstens, minstens, genoeg, te veel. Dan hoort er een ongelijkheid bij. Je lost die op met dezelfde stappen als een vergelijking, met de uitzondering uit les 5: bij vermenigvuldigen of delen met een negatief getal klapt het teken om.

:::example Uitgewerkt voorbeeld: vanaf wanneer is het abonnement goedkoper?
Een pretpark verkoopt een abonnement voor € 60 per jaar, met daarna € 8 per bezoek. Een losse kaart kost € 14 per bezoek. Vanaf hoeveel bezoeken is het abonnement voordeliger?

1. **Onbekende:** $n$ is het aantal bezoeken in een jaar.
2. **Vertalen:** abonnement $60 + 8n$ is goedkoper dan losse kaarten $14n$: $60 + 8n < 14n$.
3. **Oplossen:** trek $8n$ af: $60 < 6n$. Deel door 6 (positief, het teken blijft): $10 < n$.
4. **Interpretatie:** het abonnement is voordeliger bij **meer dan 10** bezoeken. Bij precies 10 bezoeken zijn de kosten gelijk (€ 140), en omdat $n$ een heel aantal is, is het abonnement dus vanaf **11 bezoeken** goedkoper.
:::

Let op het verschil tussen de wiskundige uitkomst ($n > 10$) en het antwoord op de vraag ("vanaf 11 bezoeken"). Bij een ongelijkheid met een aantal moet je de gehele getallen die erbij horen uitzoeken. Heb je daarentegen een *hoogstens* ("$n \le 18{,}75$"), dan is het grootste aantal 18.

:::warning Afronden bij ongelijkheden
Bij "hoeveel exemplaren kun je hoogstens laten drukken" rond je **naar beneden** af: je kunt geen 18,75 exemplaren kopen, en 19 zijn al te duur. Bij "hoeveel zakken heb je minstens nodig" rond je **naar boven** af. De richting van het afronden hangt af van de vraag, niet van de decimalen.
:::

{{ exercise: 16-040 }}

## 7. Controleren of het antwoord past

Een oplossing die klopt in de vergelijking, hoeft nog niet te kloppen in het verhaal. Er zijn drie veelvoorkomende redenen:

- **Een negatieve lengte of tijd.** Bij $2x + 8 = 4$ vind je $x = -2$. Als $x$ een lengte is, is er geen oplossing in de praktijk. De vergelijking heeft er wel een, maar het model niet.
- **Een niet-geheel aantal.** $x = 4{,}5$ tickets bestaat niet. Dan is de vergelijking correct opgelost, maar bestaat er geen bestelling die aan de voorwaarden voldoet.
- **Een verkeerde eenheid.** Reken je in cm en staat de uitkomst in m? Controleer dat de eenheden in beide leden van de vergelijking gelijk zijn voordat je gaat oplossen.

Schrijf daarom bij elke contextopgave een slotzin: "Sem is 18 jaar oud", "B haalt A in na 4 uur". Een kale "$x = 18$" laat de lezer raden wat er bedoeld is.

## 8. Uitdaging: twee tarieven

:::challenge Twee tarieven
Tarief A kost € 12 vast en € 2 per gebruik. Tarief B kost € 4 vast en € 3 per gebruik. Bij hoeveel keer gebruik zijn de prijzen gelijk? Bereken ook de gemeenschappelijke prijs. Welk tarief is voordeliger bij minder gebruik, en welk bij meer? Controleer je antwoord met de grafiek in paragraaf 4.
:::

{{ exercise: 16-030 }}
