# Samenhang: correlatie, causaliteit en twee paradoxen

Tot nu toe keek je naar één variabele tegelijk. De interessantste vragen gaan meestal over twee variabelen: verdienen mensen met meer opleiding meer? Verkoopt een filiaal met meer reclame meer? Overleven patiënten met behandeling A vaker dan met behandeling B? In deze les leer je samenhang **verkennen**: kijken, beschrijven en kritisch beoordelen. Het berekenen van de correlatiecoëfficiënt $r$ en de regressielijn bewaren we voor module 40.

## 1. Een spreidingsdiagram lezen

In een spreidingsdiagram is elke waarneming één punt. Op de horizontale as staat de variabele die je als "verklarend" ziet (bijvoorbeeld advertentiebudget), op de verticale as de variabele die je wilt begrijpen (bijvoorbeeld omzet). Lees het diagram altijd met vier vragen.

:::theory Vier vragen bij een spreidingsdiagram
1. **Richting.** Gaan de punten gemiddeld omhoog (positieve samenhang), omlaag (negatieve samenhang), of is er geen duidelijke richting?
2. **Vorm.** Liggen de punten ongeveer rond een rechte lijn (lineair), of rond een kromme (niet-lineair)?
3. **Sterkte.** Liggen de punten dicht bij die lijn of kromme (sterk), of vormen ze een brede wolk (zwak)?
4. **Afwijkingen.** Zijn er punten die ver buiten het patroon vallen? Zijn er groepjes (clusters)?
:::

![Zes spreidingsdiagrammen](/images/diagrams/m35-spreidingsdiagrammen.svg "Zes spreidingsdiagrammen met verschillende vormen van samenhang. Gebruik ze bij de oefening hieronder.")

Het woord **correlatie** gebruik je voor de *lineaire* samenhang: hoe goed passen de punten bij een rechte lijn? De correlatiecoëfficiënt $r$ uit module 40 vat die samen in één getal tussen $-1$ en $1$. Daarbij geldt: $r$ dicht bij $1$ is sterk positief lineair, dicht bij $-1$ sterk negatief lineair, en dicht bij $0$ betekent: geen *lineaire* samenhang. Dat laatste is niet hetzelfde als geen samenhang! Een perfecte boog (zoals een parabool) kan een correlatie van ongeveer nul hebben, terwijl de samenhang heel sterk is.

:::example Uitgewerkt voorbeeld: de zes diagrammen beschrijven
- **Diagram 1**: punten stijgen en liggen dicht rond een rechte lijn: sterk positief lineair verband.
- **Diagram 2**: ook stijgend, maar een brede wolk: zwak positief verband.
- **Diagram 3**: geen richting, geen vorm: geen zichtbaar verband.
- **Diagram 4**: dalend, dicht rond een rechte lijn: sterk negatief lineair verband.
- **Diagram 5**: eerst stijgend, dan dalend: een sterk, maar niet-lineair verband. Een correlatiecoëfficiënt zou hier bijna niets laten zien.
- **Diagram 6**: een zwak stijgende groep met één punt ver rechtsboven. Dat ene punt kan een berekende correlatie sterk opdrijven: onderzoek het, net als in les 3.
:::

In de widget hieronder kun je zelf punten verslepen, toevoegen en verwijderen. De widget tekent de regressielijn en geeft $r$. Experimenteer: sleep één punt ver weg en kijk wat er met $r$ gebeurt. Maak een boog en kijk hoe klein $r$ wordt.

{{ widget: regression points="(1;2) (2;3) (3;3.5) (4;5) (5;5.5) (6;7) (7;7.5) (8;8)" xmax=10 ymax=10 }}

{{ exercise: 35-025 }}

## 2. Correlatie is geen causaliteit

Dit is waarschijnlijk de belangrijkste zin uit de hele statistiek. Dat twee variabelen samenhangen, betekent niet dat de ene de andere veroorzaakt. Er zijn minstens vier andere verklaringen.

:::theory Vier verklaringen voor een samenhang zonder oorzaak
1. **Een verstorende variabele** (confounder). In maanden waarin meer ijs wordt verkocht, verdrinken meer mensen. IJs veroorzaakt geen verdrinking: warm weer zorgt voor allebei.
2. **Omgekeerde oorzaak.** Steden met meer politieagenten hebben vaak meer misdaad. Dat komt eerder doordat steden met veel misdaad meer agenten aannemen dan andersom.
3. **Selectie.** Als je alleen naar bestaande bedrijven kijkt, zie je de failliete niet. Een kenmerk dat "succesvolle bedrijven delen" kan net zo goed voorkomen bij bedrijven die allang verdwenen zijn.
4. **Toeval.** Wie duizenden variabelen met elkaar vergelijkt, vindt altijd paren die toevallig mooi samen op- en neergaan.
:::

Hoe toon je dan wél een oorzaak aan? De sterkste methode is een **gerandomiseerd experiment**: je verdeelt mensen door loting over twee groepen, je geeft alleen de ene groep de behandeling, en je vergelijkt. Door de loting zijn verstorende variabelen gemiddeld gelijk verdeeld. In deel VII (modules 38 en 39) leer je hoe je zo'n vergelijking statistisch toetst.

Soms is een experiment onmogelijk of onethisch. Dan zoek je een situatie die er zo veel mogelijk op lijkt. John Snow vond zo'n *natuurlijk experiment* in Zuid-Londen: daar leverden twee waterbedrijven water aan huizen in dezelfde straten, aan rijk en arm door elkaar. Het enige systematische verschil was de bron van het water. Daarover meer in het historisch intermezzo.

{{ exercise: 35-026 }}

## 3. Simpsons paradox

Soms laat een verstorende variabele een verband niet alleen ontstaan, maar zelfs **omdraaien**. Dat heet **Simpsons paradox**, naar de Britse statisticus Edward Simpson, die het verschijnsel in 1951 beschreef. Karl Pearson (1899) en Udny Yule (1903) hadden verwante effecten al eerder opgemerkt.

:::history Berkeley, 1973
In het najaar van 1973 meldden zich 8.442 mannen en 4.321 vrouwen aan voor een masteropleiding of promotietraject aan de Universiteit van Californië in Berkeley. Van de mannen werd ongeveer 44% toegelaten, van de vrouwen ongeveer 35%. Dat zag eruit als discriminatie van vrouwen. De statisticus Peter Bickel en twee collega's onderzochten de cijfers en publiceerden hun analyse in 1975 in het tijdschrift *Science*.
:::

Toelating ging per vakgroep. Bickel en zijn collega's keken daarom per vakgroep. Voor de zes grootste:

| vakgroep | aanmeldingen mannen | toegelaten mannen | aanmeldingen vrouwen | toegelaten vrouwen |
|---|---|---|---|---|
| A | 825 | 62% | 108 | 82% |
| B | 560 | 63% | 25 | 68% |
| C | 325 | 37% | 593 | 34% |
| D | 417 | 33% | 375 | 35% |
| E | 191 | 28% | 393 | 24% |
| F | 373 | 6% | 341 | 7% |

In vier van de zes vakgroepen werden vrouwen *vaker* toegelaten dan mannen. Hoe kan het totaal dan zo anders uitpakken? Kijk naar **waar** mannen en vrouwen zich aanmeldden. Mannen meldden zich vooral aan bij A en B, waar de meerderheid werd toegelaten. Vrouwen meldden zich vooral aan bij C tot en met F, waar de meesten werden afgewezen. De vakgroep is de verstorende variabele: hij hangt samen met geslacht (wie meldt zich waar aan) én met toelating (hoe streng is de vakgroep).

:::example Uitgewerkt voorbeeld: Simpsons paradox in kleine getallen
Een vereenvoudigd voorbeeld met ronde getallen. Een universiteit heeft twee opleidingen.

| | mannen: aangemeld | mannen: toegelaten | vrouwen: aangemeld | vrouwen: toegelaten |
|---|---|---|---|---|
| opleiding X (makkelijk) | 400 | 240 (60%) | 100 | 65 (65%) |
| opleiding Y (moeilijk) | 100 | 10 (10%) | 400 | 60 (15%) |

**Per opleiding.** Bij X worden vrouwen vaker toegelaten (65% tegen 60%), en bij Y ook (15% tegen 10%).

**Samen.** Mannen: $(240 + 10) / (400 + 100) = 250 / 500 = 50\%$. Vrouwen: $(65 + 60) / (100 + 400) = 125 / 500 = 25\%$.

**Waarom?** Het totale percentage is een **gewogen gemiddelde** van de percentages per opleiding (module 24), met de aanmeldingen als gewichten. Bij de mannen weegt de makkelijke opleiding (60%) vier keer zo zwaar als de moeilijke; bij de vrouwen is het omgekeerd. Het verschil in samenstelling wint het van het verschil binnen elke opleiding.
:::

![Simpsons paradox met twee groepen](/images/diagrams/m35-simpson.svg "Binnen groep A en binnen groep B daalt y als x toeneemt. Neem je de groepen samen, dan lijkt y juist te stijgen.")

Hetzelfde verschijnsel bestaat bij numerieke data: binnen elke groep een dalend verband, maar door de ligging van de groepen samen een stijgend verband. Wat is dan de "juiste" conclusie? Dat hangt af van de vraag en van hoe de data zijn ontstaan. Bij Berkeley is de vergelijking per vakgroep de eerlijke, omdat toelating per vakgroep werd beslist. Maar er is geen rekenregel die altijd zegt of je moet samenvoegen of splitsen: daarvoor moet je de context begrijpen.

{{ exercises: 35-027, 35-028 }}

## 4. Het kwartet van Anscombe

In 1973 publiceerde de Britse statisticus **Francis Anscombe** (1918–2001) een kort artikel met de titel *Graphs in Statistical Analysis*. Hij liet vier kleine datasets zien, elk met elf punten, die op papier vrijwel identiek zijn:

- in alle vier is het gemiddelde van $x$ gelijk aan 9 en dat van $y$ ongeveer 7,50;
- de varianties zijn (vrijwel) gelijk;
- de correlatie is in alle vier ongeveer 0,816;
- de regressielijn is in alle vier ongeveer $y = 3 + 0{,}5x$.

Wie alleen naar de getallen kijkt, denkt vier keer dezelfde situatie te zien. Teken je ze, dan zie je vier totaal verschillende werelden.

![Het kwartet van Anscombe](/images/diagrams/m35-anscombe.svg "Het kwartet van Anscombe (1973): vier datasets met dezelfde gemiddelden, varianties, correlatie en regressielijn.")

:::example Uitgewerkt voorbeeld: de vier datasets lezen
- **I**: een gewone, wat rommelige lineaire samenhang. Hier past de lijn redelijk.
- **II**: een perfecte, gladde **boog**. Een rechte lijn is het verkeerde model; een kromme zou bijna alle punten precies raken.
- **III**: tien punten liggen vrijwel exact op een rechte lijn, maar één punt, $(13;\ 12{,}74)$, ligt ver boven die lijn. Dat ene punt trekt de regressielijn scheef en drukt de correlatie omlaag van bijna 1 naar 0,816.
- **IV**: tien punten hebben allemaal $x = 8$; alleen één punt, $(19;\ 12{,}50)$, ligt ergens anders. Zonder dat punt is er helemaal geen samenhang te berekenen, want $x$ varieert niet. De hele "correlatie" komt van één waarneming.
:::

Anscombe wilde ermee laten zien dat je statistische berekeningen nooit blind moet vertrouwen. Een computer moet volgens hem zowel berekeningen als grafieken maken. Dat inzicht is de kern van **exploratieve data-analyse**: kijk eerst, reken dan.

Bekijk dataset III zelf in de widget. Sleep het afwijkende punt naar de lijn van de andere tien en zie hoe de correlatie naar bijna 1 springt.

{{ widget: regression points="(10;7.46) (8;6.77) (13;12.74) (9;7.11) (11;7.81) (14;8.84) (6;6.08) (4;5.39) (12;8.15) (7;6.42) (5;5.73)" xmax=15 ymax=13 }}

:::tip Het moderne vervolg
In 2017 lieten de onderzoekers Justin Matejka en George Fitzmaurice met de *Datasaurus Dozen* zien dat je zelfs een dinosaurus kunt tekenen met dezelfde gemiddelden, standaardafwijkingen en correlatie als een wolk zonder vorm. De les is dezelfde als in 1973: kengetallen zijn samenvattingen, geen beschrijving.
:::

{{ exercises: 35-029, 35-030 }}
