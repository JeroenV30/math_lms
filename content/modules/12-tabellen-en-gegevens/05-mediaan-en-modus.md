# Het midden en de meest voorkomende waarde

Het gemiddelde is niet de enige manier om "het midden" van gegevens te beschrijven. In deze les leer je twee andere centrummaten, de **mediaan** en de **modus**, en een eerste maat voor spreiding, de **spreidingsbreedte**. Daarna de belangrijkste vraag: wanneer kies je welke?

:::question Een salarisgesprek
Een klein bedrijf heeft vijf medewerkers. Vier verdienen 2.100, 2.400, 2.600 en 2.800 euro per maand. De eigenaar keert zichzelf 20.000 euro per maand uit. In een vacature staat: "Het gemiddelde maandsalaris bij ons is bijna € 6.000." Klopt dat? En geeft het een eerlijk beeld van wat een nieuwe medewerker kan verwachten?
:::

Reken het na: $(2100 + 2400 + 2600 + 2800 + 20000) : 5 = 29900 : 5 = 5980$ euro. De bewering klopt dus, maar vier van de vijf mensen verdienen minder dan de helft daarvan. Eén extreem hoge waarde trekt het gemiddelde ver omhoog, net als het gewichtje aan het uiteinde van de wip uit de vorige les. Er is een maat die daar veel minder last van heeft.

## 1. De mediaan

:::definition Mediaan
De **mediaan** is de middelste waarde nadat je de waarnemingen van klein naar groot hebt gesorteerd. Bij een oneven aantal is dat precies één waarde. Bij een even aantal zijn er twee middelste waarden; de mediaan is dan hun gemiddelde.
:::

Voor de salarissen: gesorteerd 2.100, 2.400, **2.600**, 2.800, 20.000. De middelste van vijf is de derde: de mediaan is € 2.600. Twee mensen verdienen minder, twee meer. Dat beschrijft de positie van een "gewone" medewerker veel beter dan € 5.980.

![De mediaan bij een oneven en een even aantal gesorteerde waarden](/images/diagrams/m12-mediaan.svg "Boven: vijf gesorteerde waarden, de mediaan is de middelste (9). Onder: zes gesorteerde waarden, de mediaan is het gemiddelde van de twee middelste: (8 + 9) : 2 = 8,5.")

### De plaats van de mediaan

Bij $n$ gesorteerde waarnemingen ligt de mediaan op plaats $\dfrac{n+1}{2}$.

- Bij $n = 5$ is dat plaats 3: de derde waarde.
- Bij $n = 6$ is dat plaats 3,5: halverwege de derde en de vierde waarde. Daarom neem je hun gemiddelde.
- Bij $n = 20$ is dat plaats 10,5: het gemiddelde van de tiende en de elfde.

Let op: $\frac{n+1}{2}$ is de **plaats** van de mediaan, niet de mediaan zelf. Bij twintig waarnemingen is de mediaan niet 10,5, maar het gemiddelde van de waarden op plaats 10 en 11.

:::example Uitgewerkt voorbeeld: oneven aantal
Bepaal de mediaan van 15, 3, 11, 8, 5.

1. **Sorteer**: 3, 5, 8, 11, 15.
2. Vijf waarden: de mediaan staat op plaats $(5+1) : 2 = 3$.
3. De derde waarde is 8. De mediaan is 8.

Wie vergeet te sorteren, kiest het middelste getal van de oorspronkelijke lijst: 11. Dat is fout. In een ongesorteerde lijst is "de middelste" een toevallige waarde: verander je de volgorde waarin de gegevens zijn genoteerd, dan verandert ze mee. De mediaan mag niet afhangen van de volgorde van noteren.
:::

:::example Uitgewerkt voorbeeld: even aantal
Bepaal de mediaan van 14, 9, 3, 12, 6, 8.

1. **Sorteer**: 3, 6, 8, 9, 12, 14.
2. Zes waarden: plaats $(6+1) : 2 = 3{,}5$, dus tussen de derde (8) en de vierde (9).
3. Mediaan: $(8 + 9) : 2 = 8{,}5$.

De mediaan 8,5 komt zelf niet in de lijst voor. Dat is bij een even aantal heel gewoon. Drie waarden liggen eronder, drie erboven.
:::

:::warning Typische fouten bij de mediaan
- **Niet sorteren.** Altijd eerst sorteren, ook als de lijst "al bijna" op volgorde lijkt.
- **Bij een even aantal één van de twee middelste nemen.** Bij 2, 4, 9, 11 is de mediaan niet 4 of 9, maar $(4+9) : 2 = 6{,}5$.
- **De plaats verwarren met de waarde.** Bij zes waarden is de mediaan niet "3,5".
- **Dubbele waarden weglaten.** In 4, 6, 6, 7, 12 telt 6 twee keer mee. Sorteer alle waarnemingen, niet alleen de verschillende waarden.
:::

{{ exercises: 12-017, 12-018 }}

### De mediaan uit een frequentietabel

Bij een frequentietabel schrijf je de gegevens niet uit, maar tel je de frequenties op tot je bij de middelste plaats bent: dezelfde cumulatieve frequenties als in les 2.

:::example Uitgewerkt voorbeeld: reistijden
De zes reistijden uit les 2 staan in deze tabel, met de cumulatieve frequenties eronder.

| Reistijd (min) | 5 | 10 | 15 |
|---|---|---|---|
| Frequentie | 2 | 3 | 1 |
| Cumulatief | 2 | 5 | 6 |

Er zijn 6 waarnemingen; de mediaan ligt tussen plaats 3 en 4. De plaatsen 1–2 hebben waarde 5, de plaatsen 3–5 waarde 10. Zowel plaats 3 als plaats 4 hebben dus waarde 10, en de mediaan is $(10 + 10) : 2 = 10$ minuten.
:::

{{ exercise: 12-039 }}

## 2. De modus

:::definition Modus
De **modus** is de waarde (of categorie) die het vaakst voorkomt: die met de hoogste frequentie.
:::

In 4, 6, 6, 7, 12 komt 6 twee keer voor en de rest één keer: de modus is 6. In de vervoerstabel uit les 2 is de modus "fiets" (frequentie 8). Dat laatste is belangrijk: **de modus is de enige centrummaat die ook bij categorische gegevens werkt.** Een "gemiddeld vervoermiddel" of een "mediaan vervoermiddel" bestaat niet.

Een paar bijzondere gevallen:

- **Meer dan één modus.** In 1, 1, 4, 6, 6 komen 1 en 6 allebei twee keer voor. Er zijn dan twee modale waarden: 1 en 6.
- **Geen onderscheidende modus.** Als elke waarde precies één keer voorkomt, zoals in 3, 5, 8, 13, zegt de modus niets. In deze cursus spreken we af dat er dan geen modus is. (De widget hieronder toont dan "geen".)

:::warning De modus is geen frequentie en geen maximum
Twee klassieke vergissingen:

- **De frequentie noemen in plaats van de waarde.** In een tabel met waarde 2 bij de hoogste frequentie 7 is de modus 2, niet 7.
- **De grootste waarde noemen.** De modus is de waarde die het **vaakst** voorkomt, niet de waarde die het **grootst** is. In 4, 6, 6, 7, 12 is de modus 6, niet 12.
:::

{{ exercises: 12-019, 12-020 }}

## 3. De spreidingsbreedte

Een centrummaat zegt waar de gegevens ongeveer liggen, maar niet hoe ver ze uit elkaar liggen. De eenvoudigste maat daarvoor is:

:::definition Spreidingsbreedte
De **spreidingsbreedte** (ook: bereik) is het verschil tussen de grootste en de kleinste waarneming:
$$
\text{spreidingsbreedte} = \text{maximum} - \text{minimum}.
$$
:::

Voor de temperaturen uit les 3 (laagste 5 °C, hoogste 18 °C) is de spreidingsbreedte $18 - 5 = 13$ graden. Voor de wachttijden 4, 6, 6, 7, 12 is ze $12 - 4 = 8$ minuten.

De spreidingsbreedte is makkelijk uit te rekenen, maar ze gebruikt maar twee waarnemingen: de uitersten. Eén uitschieter maakt haar enorm. Voor de salarissen is ze $20000 - 2100 = 17900$ euro, terwijl de vier medewerkers onderling maar 700 euro verschillen. In module 24 leer je spreidingsmaten die minder gevoelig zijn voor uitersten: de interkwartielafstand en de standaardafwijking.

{{ widget: stats values="4; 6; 6; 7; 12" }}

Experimenteer met de widget. Vervang 12 door 60 (verwijder 12, voeg 60 toe) en let op de vier getallen eronder. Welke veranderen er flink, en welke blijven gelijk?

{{ exercises: 12-021, 12-022 }}

## 4. Welke maat kies je?

Je hebt nu drie centrummaten. Ze beantwoorden alle drie een iets andere vraag.

| Maat | Beantwoordt de vraag | Sterk | Zwak |
|---|---|---|---|
| Gemiddelde | Hoeveel krijgt elk als je eerlijk verdeelt? | Gebruikt alle waarden; verband met het totaal | Gevoelig voor uitschieters |
| Mediaan | Wat is de middelste waarde? | Ongevoelig voor uitschieters | Gebruikt de grootte van de uitersten niet |
| Modus | Wat komt het vaakst voor? | Werkt ook bij categorieën | Zegt weinig bij veel verschillende waarden |

:::example Uitgewerkt voorbeeld: drie situaties
1. **Inkomens in een gemeente.** Een paar zeer hoge inkomens trekken het gemiddelde omhoog. Wie wil weten wat een "gewoon" huishouden verdient, kijkt naar de mediaan. Statistiekbureaus rapporteren bij inkomens en huizenprijzen daarom vaak de mediaan, of beide.
2. **Het budget van een wachtkamer.** Een ziekenhuis wil weten hoeveel uur wachttijd er per week in totaal is, om stoelen en personeel te plannen. Hier telt elke minuut, ook de extreem lange: het gemiddelde is de juiste maat, omdat $\text{totaal} = \bar{x} \times n$.
3. **Inkoop van schoenen.** Een schoenenwinkel die moet bestellen, heeft niets aan de gemiddelde schoenmaat van 41,3. Hij wil weten welke maat het vaakst verkocht wordt: de modus.
:::

:::theory Uitschieters: weggooien of verklaren?
Een **uitschieter** is een waarneming die sterk afwijkt van de rest. Je mag hem niet zomaar weglaten. Eerst zoek je uit waar hij vandaan komt:

- **Een fout.** Een wachttijd van 600 minuten bij een bakker is waarschijnlijk een typefout (60? 6,00?). Corrigeer hem als je de juiste waarde kunt achterhalen; anders laat je hem weg en zeg je dat erbij.
- **Een echte, bijzondere waarneming.** Het salaris van de eigenaar is geen fout; het is echt. Dan houd je hem in de gegevens, maar kies je een samenvatting die het verhaal eerlijk vertelt. Vaak is het beste antwoord: noem beide. "Het mediane salaris is € 2.600; het gemiddelde is door één zeer hoog salaris € 5.980."
:::

Een vuistregel: liggen gemiddelde en mediaan dicht bij elkaar, dan zijn de gegevens ongeveer symmetrisch verdeeld en maakt de keuze weinig uit. Liggen ze ver uit elkaar, dan zijn er uitschieters of is de verdeling scheef, en moet je bewust kiezen. Het gemiddelde ligt dan aan de kant van de uitschieters.

{{ exercise: 12-027 }}

## 5. Vooruitblik: de boxplot

De mediaan verdeelt de gesorteerde gegevens in twee helften. Je kunt elke helft opnieuw in tweeën delen. Zo ontstaan vijf getallen die de verdeling in vier stukken hakken: het minimum, het **eerste kwartiel** $Q_1$ (de mediaan van de onderste helft), de mediaan, het **derde kwartiel** $Q_3$ (de mediaan van de bovenste helft) en het maximum. Een **boxplot** tekent die vijf getallen.

Neem de zeven wachttijden 4, 6, 6, 7, 8, 9, 12. De mediaan is 7 (de vierde waarde). De onderste helft zonder de mediaan is 4, 6, 6, met mediaan $Q_1 = 6$. De bovenste helft is 8, 9, 12, met $Q_3 = 9$.

{{ widget: boxplot values="4; 6; 6; 7; 8; 9; 12" }}

De doos loopt van $Q_1$ tot $Q_3$ en bevat de middelste helft van de gegevens. De streep in de doos is de mediaan. De "snorren" lopen naar het minimum en het maximum. Verander de 12 in de widget eens in 40: de rechtersnor wordt lang, maar de doos verandert niet. Zo laat een boxplot in één beeld zien waar het midden ligt, hoe breed de middelste helft is en waar de uitschieters zitten. In module 24 (beschrijvende statistiek) werk je de boxplot volledig uit, samen met de standaardafwijking.
