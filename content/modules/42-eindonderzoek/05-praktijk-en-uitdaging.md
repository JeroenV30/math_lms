# Rapporteren, foutenanalyse en je eigen onderzoek

Een analyse die alleen in je hoofd of in een rommelig spreadsheet bestaat, is voor niemand anders te controleren, en dus voor de wetenschap niet bruikbaar. Deze laatste praktijkles laat zien hoe je een onderzoek opschrijft, welke redeneerfouten het vaakst voorkomen en hoe je je eigen mini-onderzoek aanpakt.

## Een onderzoeksrapport opbouwen

Wetenschappelijke artikelen volgen vrijwel altijd dezelfde logica, vaak aangeduid als IMRaD: **I**ntroductie, **M**ethode, **R**esultaten en **D**iscussie. Voor je eigen rapport (ongeveer 800 tot 1200 woorden) werkt een iets uitgebreidere volgorde goed:

1. **Titel en samenvatting.** Eén zin met de vraag en één met de belangrijkste uitkomst, mét onzekerheid.
2. **Vraag en doelgroep.** Wat wil je weten, over welke dieren, en wat is primair (vooraf bepaald) en wat verkennend?
3. **Gegevens.** Bron, jaarselectie, waarnemingseenheid, codeboek, ontbrekende waarden, selectie per analyse en hoeveel rijen afvielen.
4. **Methode.** Welke kengetallen, welk model (Welch, regressie), welke aannames, welk significantieniveau, en de reden voor je keuze.
5. **Resultaten.** Grafieken, tabellen met aantallen en eenheden, effect met interval, de toets.
6. **Discussie.** Wat betekent het resultaat inhoudelijk, wat zijn de grenzen (selectie, afhankelijkheid, observationeel ontwerp, meerdere vragen) en wat is een logische vervolgstap?
7. **Reproduceerbaarheid.** Waar staan de gegevens, welke versie, welke code of spreadsheetstappen, welke software?

{{ exercise: 42-019 }}

### Rapporteren van getallen

Gebruik overal dezelfde eenheid en schrijf aantallen erbij: "26 mannen en 26 vrouwen" is informatiever dan "mannen en vrouwen". Rond pas af aan het eind, op een aantal decimalen dat past bij je meetnauwkeurigheid: gewichten in deze dataset zijn steeds een veelvoud van 25 g, dus "660,58 g" is schijnnauwkeurig en "ongeveer 661 g" volstaat in de lopende tekst. In een tabel mag je een extra decimaal laten staan zodat een lezer kan narekenen. Voor een toets noem je de toetsgrootheid met vrijheidsgraden, de p-waarde (als $p<0{,}001$ wanneer ze kleiner is dan 0,001), de effectgrootte en het interval.

:::example Een APA-achtige rapportage
"De 26 Adélie-mannen (M = 3995,19 g, s = 392,49 g) waren gemiddeld zwaarder dan de 26 Adélie-vrouwen (M = 3334,62 g, s = 282,50 g), Welch-$t(45{,}42)=6{,}97$, $p<0{,}001$, Cohens $d=1{,}93$. Het verschil bedraagt 660,58 g, 95%-BI [469,61; 851,54]."

Dit is een volledig aangehaalde bevinding: de lezer kent groepsgroottes, gemiddelden en spreiding, het effect, de onzekerheid en het gebruikte model. Bij Nederlandse teksten schrijf je decimale komma's; internationale APA-teksten gebruiken punten.
:::

{{ exercise: 42-044 }}

## Foutenanalyse: vijf klassiekers

Elke onderzoeker maakt ze, vaak zonder het te merken. Ze zijn de moeite waard om te kennen, omdat je ze in je eigen werk en in andermans conclusies kunt herkennen.

**1. Ontbrekende waarden stilzwijgend als nul behandelen.** Hierboven zag je dat het gemiddeld gewicht daalt van 4210,29 g naar 4175,21 g als de ene ontbrekende massa als 0 wordt geteld. Herstel: weet wat je software met lege cellen doet, tel ontbrekende waarden per kolom, en vermeld in je rapport hoeveel rijen per analyse zijn gebruikt.

**2. Conclusies over alle pinguïns wereldwijd.** De gegevens zijn gemeten op drie eilanden, in drie zomers, door één team. Een interval of p-waarde dekt de steekproeffout, niet de selectie. Herstel: formuleer de conclusie over de gemeten dieren en over vergelijkbare dieren van dezelfde kolonies, en benoem wat je niet weet.

**3. Causaliteit uit observationele gegevens.** "Een langere flipper maakt een pinguïn zwaarder" volgt niet uit een regressielijn. Niemand heeft flippers experimenteel verlengd; geslacht, soort, leeftijd en lichaamsbouw beïnvloeden beide metingen. Herstel: schrijf over *samenhang* en *voorspelling*, niet over *effect van* en *veroorzaakt door*, tenzij je ontwerp (randomisatie of een sterke causale redenering) dat ondersteunt.

**4. Simpson negeren.** Over alle soorten was de samenhang tussen snavellengte en snaveldiepte negatief (r = −0,22), binnen elke soort positief (r tussen 0,44 en 0,64). Herstel: onderzoek altijd of een groepsvariabele (soort, geslacht, eiland, jaar) de samenhang kan verstoren, en toon het verband per groep.

**5. Variabelen kiezen nadat je gekeken hebt.** Wie alle 12 geslachtsvergelijkingen bekijkt en alleen de kleinste p meldt, of drie eilandparen vergelijkt en alleen het paar met p = 0,045 noemt, rapporteert een toevalstreffer als bevinding. Herstel: leg vooraf vast wat primair is, tel alle gemaakte vergelijkingen, corrigeer (Bonferroni of een vergelijkbare methode) en markeer de rest als verkennend.

:::challenge Zoek de fouten
Lees de volgende conclusie kritisch: "Uit onze analyse van alle 120 pinguïns blijkt dat een langere flipper pinguïns zwaarder maakt (r = 0,89, p < 0,001). Dat geldt voor pinguïns overal ter wereld. Bij een vergelijking van eilanden vonden we bovendien dat Torgersen-Adélie's lichter zijn dan Biscoe-Adélie's (p = 0,045). De ene ontbrekende massa hebben we op nul gezet."
:::

{{ exercise: 42-045 }}

## Reproduceerbaarheid in de praktijk

Een rapport is reproduceerbaar als een ander met dezelfde gegevens en jouw beschreven werkwijze dezelfde getallen krijgt. Concreet betekent dat:

- bewaar de **ruwe gegevens** ongewijzigd en werk op een kopie;
- leg elke stap vast in een **script of een stappenlijst**, niet in handmatig aangepaste cellen;
- noteer de **versie** van gegevens en software en, bij toeval (simulaties), de gebruikte startwaarde;
- **documenteer beslissingen**: welke rijen vielen af, welke uitschieters bleven staan, welke keuzes zijn achteraf gemaakt;
- vermeld de **bron en licentie** van de gegevens.

Je kunt de berekeningen narekenen in een spreadsheet met functies voor gemiddelde, steekproefstandaardafwijking en regressie. Wie de volledige berekening met Python wil herhalen, kan vanuit de projectmap optioneel uitvoeren:

```text
python content/modules/42-eindonderzoek/analyse.py
```

Dit script gebruikt alleen de standaardbibliotheek, leest de lokale CSV en wijzigt geen bestanden of leergegevens. Het toont de Welch-p-waarde, het interval en de regressie voor de Adélie-vergelijking uit les 4 en 5. Met `--json` krijg je alleen machineleesbare uitkomsten. De optie `--data` is bedoeld voor een bestand met hetzelfde codeboek, niet voor een willekeurige dataset. Het script berekent de Gentoo-, Chinstrap- en snavelanalyses uit les 4 en 5 niet; die kun je zelf narekenen met eigen code of een spreadsheet.

{{ exercise: 42-020 }}

Een goed vervolgontwerp pakt selectie en afhankelijkheid aan. Alleen meer metingen verzamelen zonder te weten welke dieren en locaties ze voorstellen, maakt de kernvraag niet sterker onderbouwd.

## Slotopdracht: je eigen mini-onderzoek

Je hebt nu alle onderdelen in handen. Maak een rapport van ongeveer 800–1200 woorden met twee of drie grafieken. Gebruik de lokale CSV, maar kies naast de uitgewerkte Adélie-vergelijking één eigen **verkennende** vraag. Bijvoorbeeld: verschillen Gentoo-mannen en -vrouwen in lichaamsgewicht? Of verandert de samenhang tussen snavellengte en gewicht als je per soort kijkt? Neem je vraag en analyseplan op vóór je de nieuwe berekening uitvoert, en houd de oorspronkelijke dataset intact.

:::practice Wat je inlevert
Een vraag met populatie, een controle van de data, passende grafieken, kengetallen met eenheden en aantallen, één verantwoorde inferentiële of modelmatige analyse, een conclusie en een beperkingenparagraaf. Een kleine p-waarde is geen verplicht resultaat.
:::

Schrijf het rapport zelf; de tekstvraag hieronder slaat je redenering op en geeft daarna een modelantwoord en beoordelingscriteria om mee te vergelijken. Zij wordt niet automatisch op inhoud beoordeeld.

### Beoordelen met een rubric

Geef jezelf per onderdeel 0 (ontbreekt), 1 (gedeeltelijk) of 2 (goed navolgbaar). Totaal maximaal 16 punten.

| Onderdeel | 0 | 1 | 2 |
|---|---|---|---|
| Onderzoeksvraag | ontbreekt of onduidelijk | vraag zonder populatie of hypothese | vraag, populatie en primair/verkennend benoemd |
| Datacontrole | geen controle | ontbrekende waarden geteld | ook eenheden, uitschieters en beslissingen gedocumenteerd |
| Visualisatie | geen of misleidend | grafiek zonder as-eenheden | passende grafieken, per groep, met eenheden |
| Methode | geen verantwoording | model genoemd | model, aannames en keuze beargumenteerd |
| Berekeningen | fouten | juist maar niet navolgbaar | juist, met aantallen en eenheden |
| Interpretatie | alleen p-waarde | effect genoemd | effect, interval en praktische betekenis |
| Beperkingen | ontbreken | algemene opmerkingen | selectie, onafhankelijkheid, observationeel ontwerp, meerdere vragen |
| Reproduceerbaarheid | niet beschreven | bron genoemd | bron, selectie en stappen zodat een ander het kan herhalen |

Bespreek bij ieder onderdeel waar je 0 of 1 scoorde wat je zou verbeteren. Deze zelfbeoordeling staat naast de automatisch nagekeken hoofdstuktoets.

{{ exercise: 42-046 }}
