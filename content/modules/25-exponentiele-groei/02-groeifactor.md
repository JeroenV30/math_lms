# Percentage en factor

Een percentage is een verhouding tot een **basis**: 8% van 250 is iets anders dan 8% van 40. Daarom vraagt elke procentuele verandering om de vraag: procent van wat? Bij exponentiële groei is de basis steeds de waarde aan het begin van de tijdstap. Dat maakt de vermenigvuldigingsfactor het natuurlijke gereedschap: hij bevat de basis al in zich.

## Van percentage naar groeifactor

Bij 8% groei blijft de oorspronkelijke 100% bestaan en komt er 8% bij. Samen is dat 108% van het begin, ofwel factor 1,08. In het algemeen, bij een veranderingspercentage $p$ per tijdstap:

:::formula Groeifactor
$$g = 1 + \frac{p}{100}$$
Bij groei is $p>0$ en dus $g>1$. Bij afname is $p<0$ en dus $0<g<1$. Bij $p=0$ is $g=1$: er verandert niets.
:::

Het tekenen van $p$ is belangrijk. Bij 8% daling is $p=-8$ en dus $g=1-0{,}08=0{,}92$. Je houdt 92% over. De tabel laat een aantal veelvoorkomende voorbeelden zien.

| Verandering per tijdstap | $p$ | Groeifactor $g$ |
|---|---|---|
| 5% groei | 5 | 1,05 |
| 12% groei | 12 | 1,12 |
| 100% groei (verdubbeling) | 100 | 2 |
| 3,5% groei | 3,5 | 1,035 |
| 8% afname | −8 | 0,92 |
| 20% afname | −20 | 0,80 |
| 50% afname (halvering) | −50 | 0,50 |

Let op de rij "100% groei": een toename met 100% betekent *verdubbeling*, dus factor 2, niet factor 100. Dit is precies de fout die in de volgende waarschuwing staat.

:::warning Het percentage is niet de factor
Een veelgemaakte fout is het getal 5 uit "5% groei" direct als factor te gebruiken: $g=5$ in plaats van $g=1{,}05$. Met $g=5$ vermenigvuldig je bij elke stap met vijf, dus je stelt eigenlijk 400% groei voor. Controleer jezelf met de volgende vraag: moet de hoeveelheid na één stap groter of kleiner worden, en past mijn factor daarbij? Een factor tussen 0 en 1 hoort bij afname, een factor boven 1 bij toename, en een factor die vlak bij 1 ligt hoort bij een bescheiden percentage.
:::

:::example Een voorraad met 8% groei
Een voorraad van 250 stuks groeit elke maand met 8%.

Stap 1: factor $g=1+8/100=1{,}08$.

Stap 2: na één maand $250\times1{,}08=270$ stuks.

Stap 3: na twee maanden $270\times1{,}08=291{,}6$ stuks. Dat is niet $250+2\times20=290$: bij de tweede stap is 8% van 270, niet van 250, en dat is 21,6 en niet 20.
:::

## Groeifactor en afname

Een factor onder 1 beschrijft afname: de hoeveelheid wordt telkens kleiner, maar nooit negatief. Bij factor 0,92 verlies je steeds 8% van de *huidige* waarde, dus in absolute zin steeds minder. Daarom nadert de hoeveelheid nul zonder het te bereiken: bij start 100 is dat 92, 84,64, 77,87, ... Elke stap is kleiner dan de vorige.

Omgekeerd kun je uit de factor het percentage terughalen: $p=(g-1)\times100$. Bij $g=1{,}15$ is $p=15$ (groei). Bij $g=0{,}75$ is $p=-25$ en spreek je van 25% afname.

## Terugrekenen en de herstelfactor

Vooruitrekenen is vermenigvuldigen met $g$. Terugrekenen over één stap is delen door $g$. Een bekend voorbeeld is de btw: een prijs inclusief 21% btw is het 1,21-voud van de prijs zonder btw. Staat er € 60,50 inclusief btw, dan is de prijs zonder btw $60{,}50/1{,}21=50{,}00$. Wie 21% van 60,50 aftrekt, krijgt een verkeerd bedrag, omdat de 21% over het kleinere bedrag is berekend.

Dezelfde gedachte verklaart de herstelfactor. Na een daling van 20% is de factor 0,8. Om terug te komen op het oude niveau moet je delen door 0,8, ofwel vermenigvuldigen met $1/0{,}8=1{,}25$. Er is dus 25% groei nodig. Het percentage voor herstel is groter dan het percentage voor de daling, omdat de basis kleiner is geworden.

## Opeenvolgende percentages: vermenigvuldig de factoren

Als een waarde twee keer achter elkaar met 20% daalt, is het totaal niet 40%. De eerste daling maakt de basis kleiner, en de tweede 20% is dus 20% van iets kleins. Reken met factoren:

$$0{,}8\times0{,}8=0{,}64$$

Er blijft 64% over, dus de totale afname is 36%. Algemeen: **opeenvolgende groeifactoren vermenigvuldig je; groeipercentages tel je niet op**. Het optellen van factoren (bijvoorbeeld $0{,}8+0{,}8=1{,}6$) is een tweede veelgemaakte fout, en geeft zelfs een onzinnig groeiende uitkomst bij twee dalingen.

:::example Groei en daarna daling
Een aandelenwaarde stijgt 25% en daalt daarna 20%. Is de waarde nu hoger, lager of gelijk?

Factor groei 1,25; factor daling 0,8. Samen $1{,}25\times0{,}8=1{,}00$. De waarde is dus exact terug op het beginniveau. Optellen van percentages (+25 en −20) zou ten onrechte +5% suggereren. Dat het hier precies uitkomt, komt doordat 0,8 de herstelfactor van 1,25 is.
:::

:::tip Controle in je hoofd
Na elke berekening kun je een snelle plausibiliteitstest doen. Groei van 10% op 200 geeft ongeveer 220. Komt je antwoord ver daarvandaan, dan is de factor waarschijnlijk niet goed gevormd.
:::

## Oefenen

{{ exercises: 25-005, 25-006, 25-007, 25-008, 25-009, 25-031 }}

:::warning Factor nul of negatief
Een daling van 100% maakt een hoeveelheid nul. Dat is niet hetzelfde als een exponentieel model met strikt positieve factor voor alle reële tijden. Een negatieve factor laat tekens afwisselen op gehele tijden en is niet zonder meer reëel gedefinieerd bij willekeurige tijden. In deze module gebruiken we $g>0$.
:::
