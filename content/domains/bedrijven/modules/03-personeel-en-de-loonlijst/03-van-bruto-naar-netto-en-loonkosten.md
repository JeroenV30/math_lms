# Van bruto naar netto, en naar loonkosten

## Waarom er loonheffingen zijn

De overheid int een deel van het inkomen uit arbeid via de werkgever, op het moment dat het loon wordt uitbetaald. Dat gebeurt omdat het zo betrouwbaar en goedkoop is: een paar honderdduizend werkgevers die maandelijks aangifte doen, zijn gemakkelijker te controleren dan miljoenen werknemers die achteraf zelf betalen. De ingehouden bedragen heten samen **loonheffingen**. Ze bestaan uit twee delen: **loonbelasting**, de voorheffing op de inkomstenbelasting, en **premie volksverzekeringen** voor de AOW, de nabestaandenuitkering (Anw) en de langdurige zorg (Wlz). Het loon wordt bij elke uitbetaling berekend alsof de werknemer het hele jaar zo verdient; wie daarna een andere inkomenssituatie blijkt te hebben, krijgt of betaalt het verschil bij de aangifte inkomstenbelasting.

De werknemer zelf betaalt geen premies voor de werknemersverzekeringen (WW, WIA) en geen werkgeversheffing voor de zorgverzekering: die komen voor rekening van de werkgever, zie verderop. Het is een veelgemaakte denkfout dat deze verzekeringen "van het nettoloon" zijn betaald.

## De berekening in stappen

Het mechanisme volgt vijf stappen. Het uitgangspunt is het **brutoloon**. Daar gaat eerst de pensioenpremie van de werknemer af, want die wordt ingehouden vóór de heffing: de werknemer betaalt er geen belasting over. Wat overblijft heet het **loon voor de loonheffingen**. Daarover wordt de heffing berekend volgens de schijven; daarvan gaan de **heffingskortingen** af, en wat overblijft is de af te dragen loonheffing. Het nettoloon is het loon voor de loonheffingen min die loonheffing.

Voor 2026 zijn de tarieven in box 1 (stand 2026, bron: Belastingdienst en Belastingplan 2026): tot een inkomen van € 38.883 is het tarief 35,75%, daarna tot € 78.426 is het 37,56%, en daarboven 49,50%. In het eerste tarief zit de premie volksverzekeringen: 27,60% (AOW 17,85%, Anw 0,10% en Wlz 9,65%), zodat de loonbelasting in die schijf ongeveer 8,15% is. Voor werknemers vanaf de AOW-leeftijd gelden lagere tarieven; dat laten we hier buiten beschouwing.

De **heffingskortingen** zijn bedragen die de berekende heffing verlagen. Er zijn er twee die voor bijna iedere werknemer gelden. De **algemene heffingskorting** is in 2026 maximaal € 3.115; ze loopt af vanaf een inkomen van € 29.736 met 6,398% van het meerdere en is volledig afgebouwd bij € 78.426. De **arbeidskorting** (maximaal € 5.685 in 2026) bouwt eerst op: 8,324% over de eerste € 11.965, daarna 31,009% van het meerdere tot € 25.845, daarna 1,95% van het meerdere tot € 45.592. Daarna bouwt ze af met 6,51% van het meerdere, en bij een inkomen van ruim € 132.000 is ze nul. De gedachte erachter is dat werken moet lonen: de korting is hoger naarmate iemand meer verdient, tot een grens.

:::example Van bruto naar netto: € 36.000 per jaar
Het model uit de introductie, op jaarbasis. De pensioenregeling is fictief: werknemer 6% en werkgever 12% over het loon boven een franchise van € 17.000.

1. **Pensioenpremie werknemer.** Grondslag: $36.000 - 17.000 = 19.000$. Werknemersdeel: $0{,}06 \times 19.000 = 1.140$.
2. **Loon voor de loonheffingen.** $36.000 - 1.140 = 34.860$.
3. **Heffing vóór kortingen.** Het loon valt volledig in de eerste schijf: $0{,}3575 \times 34.860 = 12.462$ (afgerond).
4. **Heffingskortingen.** Algemene heffingskorting: $3.115 - 0{,}06398 \times (34.860 - 29.736) = 2.787$. Arbeidskorting: $5.685 - (45.592 - 34.860) \times 0{,}0195 = 5.476$. Samen € 8.263.
5. **Loonheffing.** $12.462 - 8.263 = 4.199$.
6. **Nettoloon.** $34.860 - 4.199 = 30.661$ per jaar, ongeveer € 2.555 per maand.

De berekening met het model en de echte loonbelastingtabellen verschilt iets: de tabellen werken met rekenregels per loontijdvak en afrondingen. Voor het begrip van de opbouw maakt dat niet uit.
:::

:::tip Loonheffingskorting
Een werknemer kan de heffingskortingen laten toepassen bij zijn werkgever door dat op de loonheffingsverklaring aan te geven. Doet hij dat niet, dan houdt de werkgever meer in en krijgt de werknemer het verschil terug via de aangifte inkomstenbelasting. Bij meerdere werkgevers mag de loonheffingskorting maar bij één worden toegepast.
:::

{{ exercises: 03-004, 03-005, 03-006, 03-007, 03-008 }}

## Wat de werkgever er bovenop betaalt

Het brutoloon is nog niet wat het bedrijf kost. Daar komen de **werkgeverslasten** bij. Het eerste deel zijn de **werknemersverzekeringen**, die de werkgever betaalt over het loon (het premieloon). Er zijn er drie. De **WW-premie** (Awf) financiert de werkloosheidsuitkering en kent een lage premie voor vaste contracten en een hoge premie voor flexibele (stand 2026: 2,74% en 7,74%). De **Aof-premie** financiert de arbeidsongeschiktheidsuitkeringen (WIA) en hangt af van de grootte van de werkgever (stand 2026: 6,27% voor een kleine en 7,63% voor een grote werkgever). De **Whk-premie** (werkhervattingskas) is een premie die de werkgever betaalt voor het risico dat werknemers volledig of gedeeltelijk arbeidsongeschikt raken; ze verschilt per bedrijf. In dit leerboek rekenen we met een modelwaarde van 1,52%: dat is de gemiddelde Whk-rekenpremie voor 2026 volgens het UWV. De premie die een werkgever werkelijk betaalt, hangt af van zijn eigen beschikking en kan daarvan afwijken.

Daarnaast betaalt de werkgever de **werkgeversheffing Zvw**: 6,10% in 2026, over het loon tot een maximum van € 79.409 per jaar (het maximum premieloon, 2026). Boven dat bedrag wordt geen premie meer berekend, en dat geldt ook voor de WW-, Aof- en Whk-premies. Daarom nemen de werkgeverslasten als percentage van het loon af voor hoge salarissen. Het tweede deel is de **pensioenpremie van de werkgever**, in veel pensioenregelingen een groter deel van de totale premie dan dat van de werknemer, en die verschilt sterk per regeling.

:::formula Loonkosten
$$
\text{loonkosten} = \text{brutoloon} + \text{premies werkgever} + \text{pensioenpremie werkgever}
$$
:::

:::example Van bruto naar loonkosten: € 36.000 per jaar
Dezelfde werknemer. Het premieloon is hier het loon voor de loonheffingen: € 34.860.

1. **Premies werknemersverzekeringen.** WW laag $0{,}0274 \times 34.860 = 955$; Aof $0{,}0627 \times 34.860 = 2.186$; Whk $0{,}0152 \times 34.860 = 530$.
2. **Werkgeversheffing Zvw.** $0{,}061 \times 34.860 = 2.126$.
3. **Premies samen.** $955 + 2.186 + 530 + 2.126 = 5.797$, ongeveer 16,63% van het premieloon.
4. **Pensioenpremie werkgever.** $0{,}12 \times 19.000 = 2.280$.
5. **Loonkosten.** $36.000 + 5.797 + 2.280 = 44.077$ per jaar, bijna € 3.673 per maand.

Het nettoloon van € 30.661 is dus ongeveer 70% van wat de werkgever kost. Terug naar de denkvraag uit de introductie: een brutoloon van € 3.000 per maand kost de werkgever ongeveer € 3.700.
:::

![Opbouw van de loonkosten van een werknemer met een brutoloon van € 36.000 per jaar](/images/bedrijven/m03-loonkosten.svg "Opbouw van de loonkosten (eigen schema, model, stand 2026)")

De verschillen met de praktijk zijn aan te geven. Echte werkgevers betalen ook voor verzuim (loondoorbetaling bij ziekte), vakantiedagen, scholing, een werkplek en de loonadministratie. Dat zijn indirecte personeelskosten. Veel bedrijven rekenen daarom met een opslagfactor van het brutoloon, die al snel enkele tientallen procenten boven het bruto jaarsalaris uitkomt, afhankelijk van sector en regeling (in ons model is de factor $44.077 / 36.000 \approx 1{,}22$ zonder de indirecte kosten). Dat is een vuistregel, geen wettelijke grootheid; het eerlijke antwoord op "wat kost iemand?" blijft de berekening voor de werkelijke regeling.

## De loonaangifte

De werkgever moet de loonheffingen periodiek **aangeven** en **afdragen**. In de regel is het tijdvak een maand (kleine werkgevers kunnen onder voorwaarden een ander tijdvak hebben), en moeten aangifte én betaling uiterlijk aan het einde van de maand volgend op het tijdvak bij de Belastingdienst zijn. Die **loonaangifte** bevat per werknemer onder andere het loon, de ingehouden loonheffing, de premieloon-gegevens en gegevens over de loonheffingskorting. De Belastingdienst stuurt de loon- en uren-gegevens door naar het UWV, dat ze opslaat in de **polisadministratie**. Op die gegevens baseert het UWV later een WW- of WIA-uitkering. Een fout in de loonaangifte raakt dus niet alleen de belasting maar ook de rechten van de werknemer.

{{ exercises: 03-009, 03-010 }}
