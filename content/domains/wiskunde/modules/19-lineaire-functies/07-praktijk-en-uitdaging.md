# Tarieven en veranderende voorraden

In de praktijk begint een lineair probleem zelden met $y = ax + b$. Het begint met een verhaal: een tank die leegloopt, een kaars die opbrandt, een taxi met een instaptarief. Je werk is dan het verhaal te vertalen naar een regel, de regel te gebruiken en het antwoord weer in het verhaal te lezen. Dat gaat in vier stappen die je steeds kunt herhalen.

1. **Benoem de variabelen** en hun eenheden: wat is $x$, wat is $y$?
2. **Zoek de startwaarde** $b$: de waarde als er nog niets is gebeurd.
3. **Zoek de verandering per eenheid** $a$, met teken: toename is positief, afname negatief.
4. **Controleer het domein**: is de uitkomst nog zinnig in de situatie?

Schrijf de startwaarde en verandering per eenheid afzonderlijk op. Een aflopende voorraad gebruikt een negatieve helling. Bij een reservoir met 500 liter en een constante afvoer van 20 liter per minuut is $V(t) = 500 - 20t$, tot het leeg is na 25 minuten.

:::example Een leeglopend reservoir
Een reservoir bevat 500 liter en loopt leeg met 20 liter per minuut.

1. Vul de regel in: $V(t) = 500 - 20t$ met $t$ in minuten.
2. Wanneer is het leeg? Stel $V = 0$: $500 - 20t = 0$, dus $t = 25$.
3. Wanneer is er nog 200 liter? Los $500 - 20t = 200$ op: $20t = 300$, dus $t = 15$.
4. Dat is eerder dan het leegmoment van 25 minuten, dus het past in het domein $[0; 25]$.
:::

Voor een grens van bijvoorbeeld 200 liter los je dus een vergelijking op waarin de uitvoer bekend is en de invoer gevraagd wordt. Dat is hetzelfde als de inverse gebruiken.

## Een kaars die opbrandt

Een kaars van 18 cm brandt met een constante snelheid van 1,5 cm per uur. De hoogte is $h(t) = 18 - 1{,}5t$. Het is een dalende lijn met startwaarde 18. De kaars is op als $h = 0$, dus na 12 uur. Het domein is $[0; 12]$: negatieve tijd of tijd na het opbranden heeft in dit model geen betekenis. Dat een kaars in werkelijkheid niet exact lineair brandt (de vlam wordt kleiner naarmate de kaars korter wordt, of de was druipt weg) is een reden om het model alleen bij benadering te gebruiken.

:::tip Twee dalende lijnen vergelijken
Als twee kaarsen elk een eigen lijn hebben, vind je het moment waarop ze even hoog zijn door de twee formules gelijk te stellen. Het snijpunt geeft zowel de tijd als de hoogte: twee getallen in één antwoord.
:::

## Een model uit twee metingen

Vaak heb je geen formule, maar twee metingen. Dan combineer je alles wat je in deze module hebt geleerd: je bepaalt de helling uit de verschillen, de startwaarde uit één punt, en gebruikt de regel voor wat je wilt weten.

:::example Van twee metingen naar een model
Een tank bevat na 2 minuten 70 liter en na 6 minuten 110 liter. De toevoer is constant.

1. Helling: $\dfrac{110 - 70}{6 - 2} = \dfrac{40}{4} = 10$ liter per minuut.
2. Startwaarde: $b = 70 - 10 \times 2 = 50$ liter.
3. De regel is $V(t) = 50 + 10t$.
4. Controle met de tweede meting: $V(6) = 50 + 60 = 110$. Dat klopt.
:::

## Tarieven kiezen

Bij twee tarieven met verschillende startwaarde en helling bepaalt het snijpunt de keuze. Taxi A rekent € 4 instaptarief plus € 3 per kilometer. Taxi B rekent € 10 instaptarief plus € 2 per kilometer. Voor korte ritten is A goedkoper, voor lange ritten B. Het omslagpunt ligt bij $4 + 3k = 10 + 2k$, dus $k = 6$. Bij 6 kilometer kosten beide € 22. Wie vooraf weet dat de rit ongeveer 8 kilometer lang is, kiest B (€ 26 tegen € 28).

{{ widget: function-plot fn="4+3*x" fn2="10+2*x" xmin=0 xmax=12 ymin=0 ymax=40 title="Taxi A en taxi B" }}

## Zelf aan de slag

De oefeningen hieronder worden eerst zelfstandig gemaakt; de hints verschijnen pas als je erom vraagt. De kaars- en temperatuuropgaven zijn bedoeld om te oefenen met de vier stappen van het begin van deze les.

:::challenge Een model uit twee metingen
Een tank bevat na 3 minuten 156 liter en na 8 minuten 216 liter. De toevoer is constant. Bepaal de startinhoud en toevoer per minuut. Hoe lang duurt het vanaf het begin tot de inhoud 300 liter is? Geef aan tot wanneer de formule geldig is als 300 liter de maximale inhoud is.
:::

{{ exercises: 19-025, 19-026, 19-027, 19-028, 19-029, 19-030, 19-040, 19-042, 19-043 }}
