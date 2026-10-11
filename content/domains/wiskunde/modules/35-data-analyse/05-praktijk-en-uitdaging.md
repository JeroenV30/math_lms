# Een dataset van begin tot eind

In deze les breng je alles samen. Je volgt eerst een complete, kleine analyse van ruwe data tot conclusie. Daarna oefen je zelfstandig met een nieuwe dataset, en sluit je af met twee uitdagingen.

## 1. Een volledige analyse: deelfietsen

:::practice De vraag
Een gemeente laat een proef draaien met deelfietsen. Na twee weken ligt er een export uit het systeem met het aantal ritten per dag. De wethouder wil weten: "Hoeveel ritten zijn er op een gewone dag, en hangt het gebruik samen met het weer?"
:::

De export ziet er zo uit:

| datum | dag | ritten | max. temp. (°C) |
|---|---|---|---|
| 3 juni | ma | 142 | 18 |
| 4 juni | di | 155 | 21 |
| 5 juni | wo | 149 | 19 |
| 6 juni | do | 161 | 23 |
| 7 juni | vr | 170 | 24 |
| 8 juni | za | 96 | 22 |
| 9 juni | zo | 88 | 25 |
| 10 juni | ma | 0 | 17 |
| 11 juni | di | 151 | 20 |
| 11 juni | di | 151 | 20 |
| 12 juni | wo | 1480 | 19 |
| 13 juni | do | 158 | 22 |
| 14 juni | vr | 166 | 23 |
| 15 juni | za | 101 | 21 |
| 16 juni | zo | 92 | 24 |

:::example Stap 1 en 2: bekijken en opschonen
**Waarneming.** Eén rij is één dag. Er zijn 15 rijen voor 14 dagen: dat klopt niet.

**Dubbele records.** 11 juni staat er twee keer in, met identieke waarden. Eén rij gaat eruit.

**Plausibiliteit.** 1480 ritten op 12 juni is bijna tien keer zo veel als op andere werkdagen. Navraag leert dat het systeem die dag een storing had en elke ontgrendelpoging als rit telde; het echte aantal is onbekend. Dit is een aantoonbare fout zonder te achterhalen juiste waarde: je markeert de waarde als ontbrekend.

**De nul.** Op 10 juni staan 0 ritten. Een fout? Navraag: die dag was de app de hele dag onbereikbaar. Ook deze dag zegt niets over het gebruik bij werkend systeem, maar het is wel een echt en relevant gegeven ("hoe vaak ligt het systeem plat?"). Je laat deze dag buiten de analyse van het gewone gebruik en rapporteert de storing apart.

**Resultaat.** Er blijven 12 bruikbare dagen over. Je documenteert: "1 dubbel record verwijderd; 12 juni ontbrekend (telfout); 10 juni apart gerapporteerd (storing)."
:::

:::example Stap 3: samenvatten
De 12 bruikbare waarden, gesorteerd:

$$
88,\ 92,\ 96,\ 101,\ 142,\ 149,\ 151,\ 155,\ 158,\ 161,\ 166,\ 170
$$

- Mediaan: $(149 + 151)/2 = 150$ ritten.
- Gemiddelde: $1629 / 12 \approx 135{,}8$ ritten.

Het gemiddelde ligt duidelijk onder de mediaan. Een stippendiagram of histogram laat zien waarom: er zijn **twee groepen**. Vier waarden liggen rond de 95, acht rond de 157. Dat zijn de weekenddagen en de werkdagen. Eén getal voor "een gewone dag" is hier misleidend. Een betere samenvatting:

| | werkdagen ($n = 8$) | weekenddagen ($n = 4$) |
|---|---|---|
| mediaan | $(155 + 158)/2 = 156{,}5$ | $(92 + 96)/2 = 94$ |
| spreidingsbreedte | $170 - 142 = 28$ | $101 - 88 = 13$ |
:::

:::example Stap 4: samenhang met het weer
Een spreidingsdiagram van temperatuur tegen ritten voor alle 12 dagen geeft een rommelige wolk. De warmste dagen (24 en 25 °C) zijn deels weekenddagen met weinig ritten. Wie zonder nadenken alle dagen samen neemt, vindt nauwelijks of zelfs een negatieve samenhang: "bij warm weer minder fietsen"?

Kijk je **per groep**, dan zie je bij de werkdagen een duidelijk positief verband: 142 ritten bij 18 °C, 170 bij 24 °C. Bij de weekenddagen is het beeld vergelijkbaar, maar op een lager niveau. Het type dag is een verstorende variabele, net als de vakgroep bij Berkeley. (En twee weken is natuurlijk veel te kort om iets definitiefs te zeggen.)
:::

:::example Stap 5: rapporteren
"Op werkdagen werden gemiddeld ongeveer 155 ritten per dag gemaakt, op weekenddagen ongeveer 95. Binnen werkdagen lijkt het gebruik toe te nemen met de temperatuur, maar de periode is te kort voor een harde conclusie. Eén dag (10 juni) was het systeem onbereikbaar; op 12 juni waren de gegevens onbetrouwbaar door een telfout."

Let op wat dit rapport doet: het noemt de opschoning, splitst waar dat nodig is, en claimt geen oorzaak.
:::

## 2. Zelfstandig oefenen: laadtijden van een website

Een webteam meet op twaalf momenten hoe lang het duurt voordat de startpagina geladen is, in milliseconden:

$$
240,\ 195,\ 610,\ 228,\ 180,\ 251,\ 212,\ 275,\ 220,\ 260,\ 210,\ 235
$$

Gebruik de widget als controle, maar reken eerst zelf.

{{ widget: boxplot values="240; 195; 610; 228; 180; 251; 212; 275; 220; 260; 210; 235" }}

{{ exercises: 35-033, 35-034, 35-035 }}

## 3. Uitdagingen

:::challenge Twee uitdagingen
De eerste uitdaging laat zien hoe Simpsons paradox ontstaat uit gewichten. In de tweede bewijs je de bewering uit les 3 dat de z-regel bij kleine datasets blind is.
:::

{{ exercises: 35-036, 35-037 }}
