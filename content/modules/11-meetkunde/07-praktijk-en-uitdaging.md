# Vloeren, verf en regentonnen

Een schilder heeft oppervlakte nodig, een hekwerkleverancier lengte, een waterbeheerder inhoud. In de praktijk krijg je zelden een opgave die zegt welke formule je moet gebruiken. Je krijgt een situatie, en de eerste taak is uitzoeken **welke grootheid** gevraagd wordt.

## Een vast stappenplan

:::theory Vijf stappen voor meetkundige praktijkproblemen
1. **Schets** de situatie, ook als er al een tekening is. Zet alle gegeven maten erbij.
2. **Benoem de grootheid**: lengte (omtrek), oppervlakte of inhoud? Schrijf de bijbehorende eenheid alvast op: m, m² of m³.
3. **Maak de eenheden gelijk** vóórdat je een formule invult. Rekenen met centimeters en meters door elkaar is de snelste weg naar een fout van een factor 100.
4. **Deel op** in figuren waarvan je de formule kent, of vul aan en trek af.
5. **Controleer**: schat de orde van grootte, reken eventueel via een tweede route, en vraag je af of het antwoord realistisch is. Een woonkamer van 3 m² of een emmer van 300 liter is verdacht.
:::

:::example Een muur schilderen
Een muur is 5,40 m breed en 2,60 m hoog. Er zit een raam in van 1,80 m bij 1,20 m. Eén liter verf is genoeg voor 8 m², en je wilt de muur **twee keer** schilderen. Hoeveel liter verf heb je nodig?

1. **Grootheid**: de verf bedekt een vlak, dus oppervlakte (m²).
2. **Muur**: $5{,}40 \times 2{,}60 = 14{,}04$ m².
3. **Raam eraf**: $1{,}80 \times 1{,}20 = 2{,}16$ m², dus te schilderen: $14{,}04 - 2{,}16 = 11{,}88$ m².
4. **Twee lagen**: $2 \times 11{,}88 = 23{,}76$ m².
5. **Verf**: $23{,}76 : 8 = 2{,}97$ liter. In de winkel koop je dus 3 liter (of een blik van 2,5 plus een van 0,5 liter).

Controle: een muur van ongeveer 5 bij 2,5 m is ruim 12 m²; min een raam van ruim 2 m² blijft ongeveer 10 m²; twee lagen is 20 m²; dat is 2,5 liter. Het antwoord van bijna 3 liter is plausibel.
:::

:::example Een vloer betegelen
Een badkamervloer is 2,40 m bij 1,80 m. De tegels zijn 30 cm bij 30 cm. Hoeveel tegels zijn er nodig, zonder rekening te houden met snijverlies?

- **Route 1, via oppervlakte.** Vloer: $2{,}40 \times 1{,}80 = 4{,}32$ m². Tegel: $0{,}30 \times 0{,}30 = 0{,}09$ m². Aantal: $4{,}32 : 0{,}09 = 48$ tegels.
- **Route 2, via rijen en kolommen.** Langs de lange kant passen $240 : 30 = 8$ tegels, langs de korte kant $180 : 30 = 6$. Samen $8 \times 6 = 48$ tegels.

Route 2 is in de praktijk betrouwbaarder. Zou de vloer 2,50 m lang zijn, dan geeft route 1 netjes $4{,}5 : 0{,}09 = 50$ tegels. Maar route 2 laat zien wat dat getal verbergt: langs de lange kant passen $250 : 30 \approx 8{,}3$ tegels. Elke rij bestaat dus uit 8 hele tegels en een strookje van 10 cm. Of je die zes strookjes uit twee tegels kunt snijden of zes tegels moet aansnijden, hangt af van het patroon en van hoe netjes de randen moeten zijn. Een tegelzetter rekent daarom per rij en telt de gesneden tegels apart.
:::

Bij tegels, behang en verpakkingen kan het werkelijk benodigde materiaal groter uitvallen dan de berekende oppervlakte, door snijverlies en reserve. In de oefeningen staat steeds expliciet of je daar rekening mee moet houden.

:::example Een regenton en een tuin
Een tuin van 12 m² wil je één keer besproeien met 5 liter water per m². Je hebt een cilindervormige regenton met een binnendiameter van 50 cm, gevuld tot 70 cm hoogte. Is dat genoeg?

1. **Nodig**: $12 \times 5 = 60$ liter.
2. **Beschikbaar**: reken in decimeters, dan krijg je meteen liters. $r = 2{,}5$ dm, $h = 7$ dm. $V = \pi \times 2{,}5^2 \times 7 = 43{,}75\pi \approx 137{,}4$ dm³ $\approx 137$ liter.

Ruim voldoende: je kunt de tuin twee keer besproeien en houdt nog ongeveer 17 liter over.
:::

## Zelfstandig oefenen

{{ exercises: 11-027, 11-028, 11-029, 11-042 }}

## Uitdaging

:::challenge Een pad rond een tuin
Een rechthoekige tuin is 8 m bij 5 m. Aan alle vier de kanten komt buiten de tuin een pad van 1 m breed. Hoeveel vierkante meter beslaat alleen het pad?

Maak een tekening. Beide afmetingen groeien aan **twee** kanten. Trek de oppervlakte van de tuin af van die van de buitenste rechthoek, en controleer je antwoord door het pad in stroken op te delen.
:::

{{ exercise: 11-030 }}

:::challenge Een atletiekbaan
Een atletiekbaan bestaat uit twee rechte stukken en twee halve cirkels. Hoe lang is één ronde als je precies langs de binnenrand loopt, en hoe groot is het grasveld dat de baan omsluit? Zulke vragen vragen om de combinatie van alles uit deze module: rechthoeken, halve cirkels, omtrek én oppervlakte.
:::

{{ exercise: 11-043 }}
