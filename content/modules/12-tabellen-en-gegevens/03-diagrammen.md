# Een passende grafiek kiezen

Een tabel is precies: elk getal staat er. Maar een patroon zie je in een tabel pas als je gaat vergelijken, getal voor getal. Een diagram doet dat vergelijken voor je ogen: de langste staaf springt eruit, een stijgende lijn zie je in een oogopslag. Daar staat tegenover dat je uit een diagram minder precies afleest, en dat de vorm van het diagram bepaalt wat opvalt. In deze les leer je vier gangbare diagrammen lezen, en daarna kijken of ze eerlijk zijn.

## 1. Eerst lezen, dan kijken

Bij elk diagram doorloop je dezelfde vier vragen voordat je naar de vorm kijkt:

1. **Waarover gaat het?** Lees de titel. Welke groep, welke periode, welke plaats?
2. **Wat staat er op de assen?** Welke variabele staat horizontaal, welke verticaal? In welke eenheid: aantallen, euro's, procenten, graden?
3. **Wat is de schaal?** Hoe groot is één stap op de verticale as? Begint de as bij nul?
4. **Wat is de bron?** Wie heeft de gegevens verzameld, en hoe?

Pas daarna vergelijk je hoogtes en vormen. Wie deze stappen overslaat, leest soms keurig af wat er staat, maar trekt een conclusie over iets anders.

## 2. Het staafdiagram

Een **staafdiagram** vergelijkt aantallen of bedragen tussen categorieën. Elke categorie krijgt een staaf; de **lengte** van de staaf is de waarde. Tussen de staven zit ruimte, om te benadrukken dat het om losse categorieën gaat.

![Aantal bibliotheekbezoekers per dag](/images/diagrams/m12-staafdiagram-bibliotheek.svg "Bezoekers van een bibliotheek per dag, maandag tot en met zaterdag (lesvoorbeeld). De verticale as loopt in stappen van 25.")

:::example Uitgewerkt voorbeeld: een staafdiagram aflezen
In het diagram van de bibliotheek loopt de verticale as van 0 tot 250, in stappen van 25. Elke horizontale hulplijn is dus 25 bezoekers.

- De staaf van maandag lijkt bij de hulplijn van 125 te eindigen, maar wie nauwkeurig kijkt, ziet dat ze er net onder blijft: op 120. Precies aflezen lukt alleen bij waarden op of vlak bij een hulplijn; daartussen schat je, en in een tekst of tabel bij het diagram controleer je je schatting.
- Woensdag eindigt precies op 150, vrijdag net boven 125 (op 130), zaterdag ruim boven 200 (op 210).
- Dinsdag (85) en donderdag (95) zijn de rustigste dagen.

De afgelezen waarden zijn: ma 120, di 85, wo 150, do 95, vr 130, za 210. In totaal $120 + 85 + 150 + 95 + 130 + 210 = 790$ bezoekers. De conclusie voor de bibliotheek: zaterdag is verreweg de drukste dag, met bijna twee en een halve keer zoveel bezoekers als dinsdag.
:::

:::tip Liggend of staand?
Staven mogen ook horizontaal liggen. Dat is handig als de namen van de categorieën lang zijn ("Openbaar vervoer", "Lopend of met de step"): die passen dan naast de staaf. Bij categorieën zonder vaste volgorde, zoals vervoermiddelen, is het vaak verhelderend om de staven op lengte te sorteren.
:::

{{ exercises: 12-007, 12-034 }}

## 3. Het beelddiagram

Een **beelddiagram** (pictogram) is een staafdiagram waarin de staaf is opgebouwd uit plaatjes. Een legenda zegt hoeveel één plaatje waard is. Beelddiagrammen zijn populair in kranten en voorlichting, omdat ze direct laten zien waarover het gaat.

![Beelddiagram van verkochte fietsen](/images/diagrams/m12-beelddiagram-fietsen.svg "Verkochte fietsen per maand bij een fietsenwinkel (lesvoorbeeld). Eén symbool staat voor 50 fietsen; een half symbool voor 25.")

Om af te lezen tel je de plaatjes en vermenigvuldig je met de waarde per plaatje. In maart staan er 3 fietsen: $3 \times 50 = 150$ verkochte fietsen. In mei staan er 6: $6 \times 50 = 300$. Een half plaatje is de helft van 50, dus 25. Meer precisie dan dat geeft een beelddiagram meestal niet: je weet niet of "drie fietsen" eigenlijk 140 of 160 was.

:::warning Halve en vergrote plaatjes
Een eerlijk beelddiagram laat de waarde groeien door **meer** plaatjes van dezelfde grootte te tekenen. Een plaatje dat groter wordt getekend om een grotere waarde te tonen, misleidt bijna altijd. Daarover verderop meer.
:::

{{ exercise: 12-035 }}

## 4. Het lijndiagram

Een **lijndiagram** volgt één variabele door de tijd (of langs een andere geordende as). De metingen staan als punten in het diagram en worden met rechte stukken verbonden. Daardoor zie je de **richting** van de verandering: stijgt het, daalt het, en hoe snel?

![Temperatuurmetingen om de drie uur op één dag](/images/diagrams/m12-lijndiagram-temperatuur.svg "De temperatuur op een dag in mei, gemeten om de drie uur (lesvoorbeeld).")

:::example Uitgewerkt voorbeeld: een lijndiagram lezen
De verticale as loopt in stappen van 4 °C; waarden daartussen schat je naar verhouding. De metingen om 0:00, 3:00, …, 24:00 zijn:

| Tijdstip | 0:00 | 3:00 | 6:00 | 9:00 | 12:00 | 15:00 | 18:00 | 21:00 | 24:00 |
|---|---|---|---|---|---|---|---|---|---|
| Temperatuur (°C) | 8 | 6 | 5 | 9 | 15 | 18 | 16 | 12 | 9 |

- De laagste temperatuur is 5 °C om 6:00, de hoogste 18 °C om 15:00.
- De lijn is het **steilst** waar de temperatuur het snelst verandert. Tussen 9:00 en 12:00 stijgt ze van 9 naar 15 °C: 6 graden in drie uur. Tussen 12:00 en 15:00 stijgt ze nog maar 3 graden.
- Na 15:00 daalt de lijn: de dag koelt af.
:::

Een lijn tussen twee metingen is een **aanname**: je neemt aan dat de temperatuur tussen 9:00 en 12:00 geleidelijk is gestegen. Waarschijnlijk klopt dat ongeveer, maar gemeten is het niet. Misschien was het om 10:30 al 14 °C en daarna even bewolkt. Lees dus tussenliggende waarden als schatting, niet als meting.

:::warning Wanneer geen lijn?
Verbind punten alleen als de horizontale as een echte volgorde heeft, zoals tijd. Een lijn tussen "fiets", "auto" en "lopend" suggereert een verloop dat niet bestaat; daar hoort een staafdiagram. En als de metingen niet op gelijke afstanden in de tijd liggen (bijvoorbeeld 1990, 2000, 2010, 2015, 2020), moeten de horizontale afstanden dat ook tonen. Teken je ze toch even ver uit elkaar, dan lijkt de verandering in de laatste vijf jaar twee keer zo steil als ze is.
:::

{{ exercises: 12-008, 12-036 }}

## 5. Het cirkeldiagram

Een **cirkeldiagram** toont hoe één geheel is verdeeld in delen. De hele cirkel is 100%. Elk deel krijgt een sector (een "taartpunt") waarvan de grootte evenredig is met het aandeel.

Omdat een volle cirkel 360° is, hoort bij elk procent $360 : 100 = 3{,}6$ graden. De sectorhoek reken je zo uit:

$$
\text{sectorhoek} = \frac{\text{aandeel in procenten}}{100} \times 360^\circ.
$$

![Verdeling van een voorbeeldbudget](/images/diagrams/m12-cirkeldiagram-budget.svg "Maandbudget van een huishouden (lesvoorbeeld): wonen 40%, boodschappen 25%, vervoer 15%, overig 20%.")

:::example Uitgewerkt voorbeeld: sectorhoeken en bedragen
Een huishouden heeft een maandbudget van € 2.000, verdeeld zoals in het cirkeldiagram.

| Post | Aandeel | Sectorhoek | Bedrag |
|---|---|---|---|
| Wonen | 40% | $0{,}40 \times 360 = 144^\circ$ | $0{,}40 \times 2000 = 800$ euro |
| Boodschappen | 25% | $0{,}25 \times 360 = 90^\circ$ | $500$ euro |
| Vervoer | 15% | $0{,}15 \times 360 = 54^\circ$ | $300$ euro |
| Overig | 20% | $0{,}20 \times 360 = 72^\circ$ | $400$ euro |
| **Totaal** | **100%** | **360°** | **€ 2.000** |

Controle: $144 + 90 + 54 + 72 = 360$ en $800 + 500 + 300 + 400 = 2000$. Een kwart (25%) is een rechte hoek van 90°: die herken je direct in het diagram.

Andersom: zie je een sector van 72°, dan is het aandeel $72 : 360 = 0{,}2 = 20\%$.
:::

Een cirkeldiagram werkt goed bij weinig delen (twee tot vijf) die samen echt één geheel vormen. Bij veel kleine delen, of bij delen die bijna even groot zijn, is een staafdiagram beter: ogen vergelijken lengtes nauwkeuriger dan hoeken en oppervlaktes. En als de delen niet samen één geheel vormen (bijvoorbeeld bij een vraag met meerdere antwoorden), is een cirkeldiagram gewoon fout.

{{ exercises: 12-009, 12-010 }}

## 6. Welk diagram past bij welke vraag?

| Vraag | Diagram | Waarom |
|---|---|---|
| Hoe verhouden aantallen in categorieën zich? | Staafdiagram | Lengtes zijn goed te vergelijken |
| Hoe verandert iets door de tijd? | Lijndiagram | De helling toont de snelheid van verandering |
| Hoe is één geheel verdeeld? | Cirkeldiagram (of gestapelde staaf) | Alle delen samen vormen 100% |
| Een eenvoudige boodschap voor een breed publiek | Beelddiagram | Herkenbaar, maar weinig precies |
| Hoe zijn numerieke waarden verdeeld? | Staafdiagram van klassen (histogram) | Zie de leeftijdsklassen in les 2 |

## 7. Kritisch kijken: wanneer een diagram misleidt

Een diagram vertaalt getallen naar lengtes, hoeken en oppervlaktes. Die vertaling kan eerlijk zijn of scheef. Vaak is het geen opzet, maar slordigheid of de standaardinstelling van een programma. Soms is het wel opzet. Je moet de meest voorkomende trucs herkennen.

### De afgekapte as

Twee winkels scoren 96 en 99 punten in een klanttevredenheidsonderzoek. Hieronder staan dezelfde twee getallen twee keer in een staafdiagram.

![Dezelfde waarden 96 en 99 met een verticale as vanaf 95 en vanaf nul](/images/diagrams/m12-afgekapte-as.svg "Links begint de verticale as bij 95, rechts bij 0. De getallen zijn hetzelfde; de indruk is totaal anders.")

Links begint de as bij 95. De zichtbare staafdelen zijn dan $96 - 95 = 1$ en $99 - 95 = 4$ eenheden lang: de staaf van winkel B lijkt **vier keer** zo hoog. Rechts begint de as bij nul en zie je de werkelijke verhouding: $99/96 \approx 1{,}03$. Het verschil is 3 punten, ofwel $3/96 \times 100 = 3{,}125\%$ ten opzichte van winkel A. Dat is een klein verschil.

:::definition Afgekapte as
Een verticale as is **afgekapt** als ze niet bij nul begint. Bij een staafdiagram misleidt dat bijna altijd, omdat de lezer de lengtes van de staven vergelijkt. Een eerlijk staafdiagram begint bij nul.
:::

Bij een **lijndiagram** ligt het anders. Daar kijk je naar de verandering, niet naar de lengte van iets. Een lichaamstemperatuur die van 37,0 naar 39,5 °C stijgt, zie je op een as van 0 tot 40 nauwelijks bewegen, terwijl het medisch om een flinke koorts gaat. Een as van 36 tot 41 °C is dan juist eerlijker. De vraag is steeds: ondersteunt de schaal de vergelijking die de lezer gaat maken? En is het bereik duidelijk aangegeven?

:::example Uitgewerkt voorbeeld: hoeveel overdrijft de tekening?
Een staafdiagram toont de omzet van twee jaren: 60 en 80 duizend euro. De verticale as begint bij 50.

- Getekende staaflengtes: $60 - 50 = 10$ en $80 - 50 = 30$. De tweede staaf is op de tekening $30 : 10 = 3$ keer zo lang.
- Werkelijke verhouding: $80 : 60 \approx 1{,}33$. De omzet is met een derde gegroeid, niet verdrievoudigd.

Een lezer die alleen naar de staven kijkt, overschat de groei dus fors.
:::

{{ exercises: 12-023, 12-037 }}

### Plaatjes die in twee richtingen groeien

Een gemeente wil laten zien dat het aantal bezoekers van een museum is verdubbeld, van 1 miljoen naar 2 miljoen. Een ontwerper tekent het museumgebouw voor het tweede jaar twee keer zo hoog. Om de verhoudingen van het plaatje te bewaren, maakt hij het ook twee keer zo breed.

![Een figuur die twee keer zo lang en twee keer zo hoog wordt, krijgt vier keer zoveel oppervlakte](/images/diagrams/m12-beeldschaal.svg "Een verdubbeling, getekend als een figuur die in beide richtingen twee keer zo groot wordt: de oppervlakte wordt vier keer zo groot.")

Het oog reageert op de **oppervlakte**, en die is $2 \times 2 = 4$ keer zo groot geworden. Een verdubbeling lijkt een verviervoudiging. Bij een driedimensionaal plaatje (een vat olie, een stapel munten) is het nog erger: twee keer zo hoog, breed en diep geeft $2 \times 2 \times 2 = 8$ keer zoveel inhoud. Je kent dit uit module 11 (meetkunde): als lengtes met $k$ vermenigvuldigd worden, wordt de oppervlakte met $k^2$ vermenigvuldigd.

{{ exercise: 12-024 }}

### Andere valkuilen

- **Een gekozen periode.** Een lijndiagram van een aandelenkoers die "sinds maart met 40% is gestegen", kan verzwijgen dat de koers in februari was gehalveerd. Vraag je af waarom de grafiek op dit moment begint.
- **Drie dimensies.** Een schuin getekend driedimensionaal cirkeldiagram maakt de sectoren aan de voorkant groter dan die aan de achterkant. De extra diepte voegt geen informatie toe, alleen vertekening.
- **Ontbrekende eenheden of bron.** Een diagram zonder eenheid ("omzet: 12") of zonder bron is niet te controleren.
- **Twee verticale assen.** Twee lijnen met elk hun eigen as kunnen elkaar op elk gewenst punt laten kruisen, door de assen te verschuiven. Een "kruispunt" in zo'n diagram betekent niets.
- **Absolute aantallen tegenover aandelen.** "In Amsterdam worden de meeste fietsen gestolen" kan simpelweg komen doordat er de meeste fietsen zijn. Voor een eerlijke vergelijking deel je door het aantal fietsen of inwoners: de relatieve frequentie uit les 2.

:::tip Een controlevraag
Zie je een opvallend diagram, vraag je dan af: "Hoe zou dit diagram eruitzien als ik het zelf tekende, met een as vanaf nul, de hele periode, en gewone staven?" Als het antwoord "veel minder spectaculair" is, heeft de maker keuzes gemaakt die je moet meewegen.
:::
