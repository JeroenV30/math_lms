## Water naar het dak

Een buurtmoestuin wil regenwater opvangen in een ton van 50 kg op het dak van het tuinhuis, drie meter boven de grond. Het water moet met de hand omhoog, door één persoon, zonder elektriciteit. De vrijwilligers zijn niet allemaal even sterk. Je hebt in de vorige lessen zes machines leren rekenen. Maar rekenen is niet ontwerpen: je moet kiezen. Welke eisen zijn wezenlijk? Welke oplossingen zijn mogelijk? Welke past het best, en hoe weet je dat?

:::question
Voordat je rekent: welke eisen zou je aan deze installatie stellen? Maak een lijstje van wat het ontwerp moet doen (eisen) en wat prettig zou zijn (wensen). Wat zijn de gevolgen als je een eis vergeet?
:::

## Van probleem naar eisen

Een ontwerp begint met een probleem, maar de oplossing volgt daar niet automatisch uit. Eerst vertaal je het probleem naar **eisen**: voorwaarden waaraan het ontwerp moet voldoen, liefst meetbaar. “Het moet makkelijk zijn” is geen eis; “één persoon van gemiddelde sterkte moet de last kunnen hijsen met een kracht van hoogstens 150 N” is er wel een. Naast eisen zijn er **wensen**: dingen die je graag hebt, maar waarvoor je bereid bent water bij de wijn te doen. En er zijn **randvoorwaarden** buiten jouw invloed, zoals het budget, de beschikbare ruimte en het weer.

Voor de moestuin kun je de volgende eisen formuleren: de last van 50 kg (ongeveer 490 N, met $g = 9{,}8\ \text{m/s}^2$) moet 3 m omhoog; de benodigde trekkracht is hoogstens 150 N; de installatie is veilig bij regen en bij een uitglijdende hand; de kosten blijven onder een afgesproken bedrag. Een wens kan zijn dat het ook door een kind van twaalf te bedienen is. Dat is een eis voor de kracht maar ook voor de veiligheid, en je ziet hoe eisen elkaar kunnen raken.

![De ontwerpcyclus: probleem en eisen, varianten, afwegen en kiezen, bouwen en testen, met terugkoppeling naar de eisen](/images/technologie-en-informatica/m01-ontwerpcyclus.svg "De ontwerpcyclus — eigen tekening")

Het diagram laat zien dat ontwerpen geen rechte lijn is. De test levert vaak nieuwe inzichten op, die terugvloeien naar de eisen. Dat is terugkoppeling in dezelfde zin als bij de thermostaat: de uitvoer van het proces beïnvloedt de invoer van de volgende ronde.

## Varianten bedenken en doorrekenen

Een goede ontwerper bedenkt meerdere varianten, ook als de eerste al goed lijkt. Zo voorkom je dat je het eerste idee verdedigt in plaats van het beste te kiezen. Voor het hijsprobleem zijn bijvoorbeeld drie varianten denkbaar: een takel met touwdelen, een loopplank met een kar en een handlier met een kruk.

Om varianten te vergelijken, reken je ze door met de modellen uit de vorige lessen. Het model heeft aannames, en een goed ontwerper noemt die. Neem de takel: het mechanisch voordeel is het aantal touwdelen $n$ als je wrijving verwaarloost, maar in werkelijkheid verlies je een deel. Met een rendement van 80% is de benodigde kracht

$$
F = \frac{F_{\text{last}}}{n \cdot \eta}
$$

:::example Hoeveel touwdelen heeft de takel nodig?
De last is 490 N, de maximale trekkracht 150 N, en het rendement van de takel is 0,80.

1. *Principe:* $F = F_{\text{last}} / (n \eta)$, en $F \le 150\ \text{N}$.
2. *Omschrijven:* $n \ge \dfrac{F_{\text{last}}}{\eta \cdot F_{\max}} = \dfrac{490}{0{,}80 \cdot 150} = \dfrac{490}{120} \approx 4{,}08$.
3. *Afronden:* $n$ moet een geheel getal zijn en minimaal 4,08, dus $n = 5$.
4. *Controle:* met $n = 4$ is $F = 490 / (4 \cdot 0{,}80) \approx 153\ \text{N}$, net boven de eis. Een rekensom zonder wrijving zou $n = 4$ hebben gegeven (ideaal $490/4 = 122{,}5\ \text{N}$) en een ontwerp opgeleverd dat de eis net niet haalt. Het rendement verandert dus het ontwerp.
:::

Het weglaten van het rendement is een klassieke ontwerpfout: het model lijkt kloppend, maar de aanname is te rooskleurig. De controle met een andere waarde van $n$ laat dat zien. Merk ook op dat een extra touwdeel meer weg kost: met $n = 5$ trek je $5 \cdot 3 = 15\ \text{m}$ touw binnen om de ton 3 m te hijsen. Dat is bruikbaar, maar in een krap tuinhuis niet vanzelfsprekend.

{{ exercises: 01-030, 01-031 }}

## Afwegen: de beslismatrix

Zodra er meerdere varianten zijn die allemaal aan de harde eisen voldoen, moet je kiezen op de rest. Een hulpmiddel is de **beslismatrix**: je kent per criterium een gewicht toe (hoe belangrijk), geeft elke variant een score (hoe goed) en telt de gewogen scores op. Dit zet een gevoel om in een getal, maar de getallen zijn schattingen. Het nut zit niet in de uitkomst, maar in het expliciet maken van wat je belangrijk vindt.

:::example Een beslismatrix voor de moestuin
Drie criteria met gewichten: veiligheid (3), kosten (2), gebruiksgemak (2). Scores van 1 (slecht) tot 5 (goed).

| Variant | Veiligheid (3) | Kosten (2) | Gemak (2) | Totaal |
|---|---|---|---|---|
| A: takel met 5 touwdelen | 4 | 4 | 3 | $3\cdot4 + 2\cdot4 + 2\cdot3 = 26$ |
| B: handlier met kruk | 5 | 2 | 4 | $3\cdot5 + 2\cdot2 + 2\cdot4 = 27$ |

1. *Berekening:* tel gewicht maal score op per variant: A = 26, B = 27.
2. *Conclusie op het eerste gezicht:* B wint met één punt.
3. *Controle:* het verschil is klein. Als kosten zwaarder wegen (gewicht 3 in plaats van 2), is A = $12 + 12 + 6 = 30$ en B = $15 + 6 + 8 = 29$, en wint A. De keuze hangt dus van de weging af.
4. *Besluit:* een verschil van één punt is geen reden om voor B te kiezen. Bespreek met de vrijwilligers welke wegingen kloppen, of zoek een variant die op alle criteria goed scoort.
:::

Een beslismatrix beschermt tegen een ander gevaar: dat de luidste stem wint. Als iedereen zijn gewichten opschrijft, wordt zichtbaar waar het meningsverschil zit. Het is vaak een verschil in waarden (veilig of goedkoop), en dat los je niet op met rekenen. Techniek wordt hier maatschappelijk: wie bepaalt wat zwaar weegt, en wie draagt de gevolgen als de keuze verkeerd uitpakt?

{{ exercises: 01-032, 01-033 }}

## Bouwen, testen, bijstellen

Een ontwerp is pas goed als het in de praktijk werkt. Daarom bouw je een **prototype** en test je het tegen de eisen: heb je de 150 N werkelijk gemeten met een veerunster? Hoe snel loopt het touw over de katrollen? Wat gebeurt er in de regen, of als iemand het touw loslaat? Het gaat om het vinden van fouten, niet om het bevestigen van het ontwerp. Een test die niets vindt, was misschien te mild.

Een systeemanalyse helpt bij het opzetten van tests. Je ontleedt het systeem in onderdelen: katrolblokken, touw, bevestiging aan het dak, haak, kruk, ton en de gebruiker. Je volgt de keten van invoer (de spierkracht van de vrijwilliger) via het proces (de takel) naar de uitvoer (water op het dak), en je zoekt waar de keten het zwakst is. Bij een takel is dat vaak de bevestiging aan het dak, niet de takel zelf. De zwakste schakel bepaalt de veiligheid van het geheel.

Terugkoppeling hoort bij dat proces. Een eerste versie is zelden de laatste. Wat de test laat zien, gebruik je om de eisen of het ontwerp aan te passen. Zo ontstaan versies, en elke versie is een nieuwe afweging.

{{ exercises: 01-034 }}

:::challenge De eerlijke hijsinstallatie
Je kiest de takel met $n = 5$ en een rendement van 0,80. De ton van 50 kg ($g = 9{,}8\ \text{m/s}^2$) moet 3 m omhoog en de vrijwilliger doet daar gemiddeld 2 minuten over. Bereken eerst de nuttige arbeid, dan de toegevoerde arbeid, en dan het gemiddelde vermogen dat de vrijwilliger levert. Bedenk daarna: is dat een redelijke eis voor iemand met weinig kracht? Wat zou je kunnen veranderen om het vermogen te verlagen zonder de taak te veranderen?
:::

{{ exercises: 01-035 }}

## Wat je uit het practicum meeneemt

Het ontwerp van een eenvoudig hijsmiddel lijkt een kleinigheid, maar het bevat al het patroon van technische vraagstukken: een probleem omzetten in eisen, varianten bedenken en doorrekenen met een model waarvan je de aannames kent, afwegen met gewichten en scores waarvan je weet dat het schattingen zijn, bouwen en testen en bijstellen. Dezelfde stappen keren terug bij het ontwerpen van een brug, een app of een netwerk. Het verschil zit in de modellen en de eisen, niet in de manier van denken.
