# Schaal, oppervlakten en snelle groei

In deze les pas je alles toe wat je in de module hebt geleerd. De opgaven gaan over drie soorten situaties waarin machten en wortels vanzelf opduiken: vergroten en verkleinen op schaal, terugrekenen van oppervlakte naar lengte, en herhaalde groei. Daarna volgen twee uitdagingen die meer vragen dan het toepassen van één regel.

## 1. Vergroten op schaal

Een architect maakt een maquette op schaal 1 : 50. Alle lengtes in het echt zijn 50 keer zo groot als in de maquette. Betekent dat ook dat de vloeroppervlakte 50 keer zo groot is? Nee. Een vloer heeft een lengte én een breedte, en **allebei** worden ze 50 keer zo groot. De oppervlakte wordt daardoor $50 \cdot 50 = 50^2 = 2500$ keer zo groot. En de inhoud van een kamer, met lengte, breedte en hoogte, wordt $50^3 = 125\,000$ keer zo groot.

:::formula Lengtefactor, oppervlaktefactor, inhoudsfactor
Als alle lengtes van een figuur met factor $k$ worden vermenigvuldigd, dan:

$$
\text{oppervlakte} \times k^2 \qquad\qquad \text{inhoud} \times k^3
$$

Omgekeerd: ken je de oppervlaktefactor $f$, dan is de lengtefactor $\sqrt{f}$.
:::

:::example Uitgewerkt voorbeeld: een vierkant plein
Een vierkant plein heeft een oppervlakte van 225 m². Hoe lang is de omtrek?

1. De oppervlakte is zijde maal zijde, dus de zijde is $\sqrt{225}$. Uit de tabel van les 2: $15^2 = 225$, dus de zijde is 15 m.
2. De omtrek is vier zijden: $4 \cdot 15 = 60$ m.

Let op de eenheden: de oppervlakte is in m², de zijde en de omtrek in m. Wie $225 : 4$ rekent, behandelt de oppervlakte alsof het een omtrek is en mengt twee verschillende grootheden.
:::

:::example Uitgewerkt voorbeeld: twee pizza's
Een pizza met een doorsnede van 30 cm kost € 12, een pizza met een doorsnede van 20 cm kost € 6. Welke is per cm² voordeliger?

1. De grote pizza heeft een lengtefactor $\frac{30}{20} = 1{,}5$ ten opzichte van de kleine.
2. De oppervlaktefactor is $1{,}5^2 = 2{,}25$. De grote pizza heeft dus 2,25 keer zoveel pizza.
3. De prijs is maar 2 keer zo hoog. Per cm² is de grote pizza dus voordeliger.

Je hoeft de oppervlakte van een cirkel (module 11) hier niet eens uit te rekenen: de verhouding volgt uit de lengtefactor alleen.
:::

{{ exercises: 14-027, 14-029 }}

## 2. Herhaalde groei

Een kolonie bacteriën verdubbelt elk half uur. Begin je met 100 bacteriën, dan heb je na een half uur 200, na een uur 400, na anderhalf uur 800. Na $n$ halve uren is het aantal

$$
100 \cdot 2^n
$$

De startwaarde staat ervoor als gewone factor; de macht telt hoeveel keer er verdubbeld is. Na 5 uur, dus 10 verdubbelingen, zijn het er $100 \cdot 2^{10} = 102\,400$.

:::warning Tel de stappen, niet de momenten
Bij groeiproblemen is het makkelijk om er één naast te zitten. Op het **beginmoment** is er nog niet verdubbeld: exponent 0, en $2^0 = 1$, dus je hebt gewoon de startwaarde. Na één stap is de exponent 1. Wie "zes keer verdubbelen" vertaalt als $2^7$, of de startwaarde zelf als extra verdubbeling meetelt, krijgt een antwoord dat twee keer te groot is.
:::

Volgens een oude legende vroeg de uitvinder van het schaakspel als beloning één graankorrel op het eerste veld van het bord, twee op het tweede, vier op het derde, en zo steeds het dubbele. Op veld $n$ liggen $2^{n-1}$ korrels: de exponent loopt één achter op het veldnummer, precies om de reden in het kader hierboven. Op het laatste veld, nummer 64, liggen er $2^{63} \approx 9{,}2 \times 10^{18}$, en in totaal liggen er $2^{64} - 1 \approx 1{,}8 \times 10^{19}$ op het bord. Bij een gewicht van enkele honderdsten gram per korrel is dat honderden keren zoveel graan als de hele wereld tegenwoordig in een jaar oogst. De legende is niet historisch, maar het rekenwerk klopt wel.

:::example Uitgewerkt voorbeeld: papier vouwen
Een vel papier is ongeveer 0,1 mm dik. Bij elke keer vouwen verdubbelt de dikte. Hoe dik is de stapel na 10 keer vouwen, en na 20 keer?

1. Na 10 keer: $0{,}1 \cdot 2^{10} = 0{,}1 \cdot 1024 = 102{,}4$ mm, ruim 10 cm.
2. Na 20 keer: $0{,}1 \cdot 2^{20}$. Met $2^{10} \approx 10^3$ is $2^{20} \approx 10^6$, dus de dikte is ongeveer $0{,}1 \cdot 10^6 = 10^5$ mm $= 100$ m.

In werkelijkheid lukt vouwen al na zeven of acht keer niet meer. Maar de berekening laat zien waarom: elke vouw kost evenveel moeite als alle vorige samen.
:::

{{ exercise: 14-028 }}

## 3. Uitdagingen

De volgende opgaven combineren verschillende delen van de module. Neem de tijd, maak een schets en controleer je antwoord met een tweede methode.

:::challenge Terug van oppervlakte naar schaal
Een vierkante plaat met zijde 4 cm wordt vergroot totdat de oppervlakte 144 cm² is. Wat is de nieuwe zijde, en met welke factor zijn de lengtes vergroot?

Bepaal eerst de nieuwe zijde. Controleer daarna of het kwadraat van de lengtefactor gelijk is aan de verhouding van de oppervlakten.
:::

{{ exercise: 14-030 }}

:::challenge Een vierkant waarvan je alleen de diagonaal kent
Van een vierkant weet je alleen dat de diagonaal 10 cm is. Wat is de oppervlakte? Denk aan het vierkant op de diagonaal uit het historisch intermezzo: hoeveel keer zo groot was dat?
:::

{{ exercise: 14-045 }}

:::challenge Hoe groot is het getal?
Hoeveel cijfers heeft het getal $2^{10} \cdot 5^{12}$? Je hoeft het niet volledig uit te rekenen: gebruik de regel $(ab)^n = a^n b^n$ om machten van 10 te maken.
:::

{{ exercise: 14-046 }}
