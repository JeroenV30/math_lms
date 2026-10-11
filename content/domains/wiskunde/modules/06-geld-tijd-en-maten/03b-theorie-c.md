# Rekenen met geld

Geld is waarschijnlijk de eenheid waarmee je het vaakst rekent zonder erbij stil te staan. Toch zijn de rekenregels precies dezelfde als bij meter en kilogram: een bedrag is een getal maal een eenheid, en je rekent alleen met bedragen die in dezelfde eenheid staan.

## Euro's en centen

Sinds 1 januari 2002 betalen we in Nederland met euromunten en -biljetten. Eén euro is verdeeld in honderd cent:

**€ 1 = 100 cent**

Daarmee is de euro een tiendelige munt, net als de meter: de cent speelt dezelfde rol als de centimeter (en heeft dezelfde Latijnse wortel, *centum* = honderd). Een bedrag als € 4,07 betekent 4 euro en 7 cent, dus 407 cent. Het **tweede** cijfer achter de komma is het aantal losse centen, het eerste het aantal tientallen centen. Daarom is € 4,07 iets heel anders dan € 4,70 (470 cent).

:::tip Schrijf bedragen altijd met twee cijfers achter de komma
In de wiskunde is 4,7 hetzelfde getal als 4,70. Bij geld schrijf je toch bijna altijd twee decimalen (€ 4,70), omdat dan meteen te zien is hoeveel centen er bedoeld zijn. Een rekenmachine laat de laatste nul vaak weg: 4,7 op het scherm betekent € 4,70.
:::

Er zijn munten van 1, 2, 5, 10, 20 en 50 cent en van € 1 en € 2, en biljetten van € 5 tot € 500. In Nederland ronden veel winkels bij **contante** betaling het totaalbedrag af op 0 of 5 cent (bijvoorbeeld € 23,37 → € 23,35 en € 8,89 → € 8,90), zodat er weinig munten van 1 en 2 cent nodig zijn. Bij pinnen betaal je het exacte bedrag. In deze module rekenen we steeds met exacte bedragen, tenzij anders vermeld.

## Bedragen optellen

Je kunt bedragen optellen zoals elk kommagetal: zet de komma's onder elkaar. Wie liever hoofdrekent, telt de euro's en de centen apart en wisselt daarna 100 cent om in een euro – precies zoals je bij kolomsgewijs optellen tien eenheden omwisselt in een tiental.

:::example Een boodschappenlijstje
Brood € 2,85, kaas € 6,40 en fruit € 3,95. Wat kost het samen?

- Euro's: $2 + 6 + 3 = 11$.
- Centen: $85 + 40 + 95 = 220$ cent $=$ € 2,20.
- Totaal: € 11 + € 2,20 = € 13,20.

Schatting ter controle: ongeveer € 3 + € 6 + € 4 = € 13. Klopt.
:::

{{ exercise: 06-021 }}

## Wisselgeld

Wisselgeld is een aftreksom: betaald bedrag min prijs. Je kunt die som op twee manieren uitrekenen.

**Manier 1: aanvullen**, zoals een kassamedewerker vroeger het wisselgeld in de hand neertelde. Je begint bij de prijs en vult aan tot het betaalde bedrag, in handige sprongen: eerst naar een hele euro, dan naar een rond bedrag, dan naar het betaalde bedrag.

![Getallenlijn van 13,65 euro naar 20 euro met sprongen van 0,35, 1 en 5 euro](/images/diagrams/m06-wisselgeld.svg "Wisselgeld door aan te vullen: € 13,65 + € 6,35 = € 20,00. Eigen diagram.")

**Manier 2: rekenen in centen.** Zet beide bedragen om in centen en trek ze kolomsgewijs af: $2000 - 1365$. Dan zie je ook precies waar het lenen gebeurt.

{{ widget: column-arithmetic a=2000 b=1365 op=- }}

:::warning De dubbel getelde euro
Een veelgemaakte fout bij € 20 − € 13,65: eerst "20 − 13 = 7 euro", daarna "en nog 35 cent terug omdat 65 + 35 = 100". Antwoord: € 7,35. Maar de 35 cent komt uit de euro die je al bij de 7 meetelde. Het juiste antwoord is € 6,35. **Controleer wisselgeld altijd door terug te tellen**: € 13,65 + € 6,35 = € 20,00.
:::

{{ exercise: 06-022 }}

## Prijs per stuk en prijs per kilo

Wil je weten wat één exemplaar kost, of wil je twee verpakkingen eerlijk vergelijken, dan heb je de **prijs per eenheid** nodig.

:::formula Prijs per eenheid
$$
\text{prijs per eenheid} = \frac{\text{totaalprijs}}{\text{aantal eenheden}}
\qquad
\text{totaalprijs} = \text{prijs per eenheid} \times \text{aantal eenheden}
$$
:::

De "eenheid" kan een stuk zijn, maar ook een kilogram, een liter of een meter. Supermarkten zijn in Nederland verplicht om naast de verkoopprijs ook zo'n eenheidsprijs (per kg of per l) te vermelden, juist om vergelijken mogelijk te maken.

:::example Prijs per stuk, in centen
Een pak met 4 batterijen kost € 5,40. Wat kost één batterij?

Delen door 4 met een kommagetal is lastiger dan met een geheel getal. Reken daarom in centen: € 5,40 = 540 cent. $540 : 4 = 135$ cent = € 1,35. Controle: $4 \times 1{,}35 = 5{,}40$.
:::

:::example Een stuk kaas afrekenen
Jonge kaas kost € 14,60 per kilogram. Je koopt 250 gram. Wat betaal je?

250 g is een kwart kilogram ($250 : 1000 = 0{,}25$). Een kwart van € 14,60 is € 14,60 : 4 = € 3,65.

Bij gewichten die geen mooie breuk van een kilo zijn, werk je via 100 gram: 100 g kost een tiende van de kiloprijs. Bij € 14,60 per kg kost 100 g dus € 1,46, en 350 g kost $3{,}5 \times 1{,}46 =$ € 5,11.
:::

:::example Welke verpakking is voordeliger?
Rijst: 500 g voor € 1,35 of 2 kg voor € 4,80.

- Klein pak: 500 g is een halve kilo, dus 1 kg kost $2 \times 1{,}35 =$ € 2,70.
- Groot pak: € 4,80 : 2 = € 2,40 per kg.

Het grote pak is per kilo € 0,30 goedkoper – maar alleen voordelig als je de rijst ook opmaakt.
:::

{{ exercise: 06-023 }}

## Van gulden naar euro

Vóór 2002 betaalde je in Nederland met de **gulden** (afgekort ƒ of NLG), die verdeeld was in 100 cent. Op 31 december 1998 werd de koers onherroepelijk vastgelegd:

**€ 1 = ƒ 2,20371**

Een euro was dus ruim twee gulden waard. Wie een oud bedrag in guldens wil omrekenen naar euro's, **deelt** door 2,20371; wie van euro naar gulden wil, vermenigvuldigt. Om te controleren of je de goede kant op rekent: er moeten altijd **minder** euro's uitkomen dan je guldens had, omdat een euro meer waard is.

:::tip Schatten met "gedeeld door 2,2"
Voor een snelle schatting gebruiken veel mensen nog steeds: guldens gedeeld door 2,2, of zelfs "ongeveer de helft, iets minder". Een huis van ƒ 250.000 in 1995 was dus ongeveer € 113.000 – al zegt dat weinig over wat zo'n huis nu kost, omdat prijzen sindsdien sterk gestegen zijn. Een omrekenkoers zet een bedrag om, niet de koopkracht.
:::

Precies omrekenen doe je met de rekenmachine en daarna rond je af op hele centen: ƒ 10 : 2,20371 ≈ 4,5378, dus € 4,54.

## Zelfstandig oefenen

{{ exercises: 06-024, 06-025, 06-026 }}
