# Veranderingen bijhouden

In deze les pas je alles toe op situaties uit de praktijk: een bankrekening, een dijk, een thermometer, een tijdlijn en een kaart. Bij elk van die situaties zijn twee vragen belangrijker dan het rekenwerk zelf:

1. **Wat is het nulpunt, en welke richting is positief?** Dat is een keuze, die je expliciet maakt en daarna consequent volhoudt.
2. **Gaat het om een positie of om een verandering?** Een temperatuur van $-4$ °C is een positie op de schaal; een daling van 4 graden is een verandering. Ze worden met hetzelfde getal geschreven, maar betekenen iets anders.

## 1. Saldo en kasboek

:::example Uitgewerkt voorbeeld: een reeks transacties
Een saldo begint bij € 15. Je neemt € 28 op en stort daarna € 9. Wat is het eindsaldo?

1. **Tekenafspraak:** stortingen positief, opnames negatief.
2. **Schrijf elke verandering met haar teken:** $+15$, $-28$, $+9$.
3. **Tel op:** $15 - 28 + 9 = -13 + 9 = -4$.
4. **Interpreteer:** het eindsaldo is $-4$ euro, een tekort van € 4.

Let op het verschil tussen **saldo** en **verandering**. Het saldo ging van $+15$ naar $-4$; de totale verandering is $-4 - 15 = -19$ euro. Dat is iets anders dan het eindsaldo $-4$.
:::

{{ exercise: 13-027 }}

:::example Uitgewerkt voorbeeld: hoe lang duurt het?
Iemand staat € 240 rood. Elke maand gaat er netto € 60 bij. Na hoeveel maanden staat de rekening precies op nul?

Het saldo moet van $-240$ naar $0$: een verandering van $0 - (-240) = 240$ euro. Per maand gaat er 60 bij, dus $240 : 60 = 4$ maanden. Controle: $-240 + 4 \times 60 = -240 + 240 = 0$.
:::

## 2. Hoogte ten opzichte van NAP

In Nederland meet je hoogtes ten opzichte van het **Normaal Amsterdams Peil** (NAP). Een hoogte van $-4$ m NAP betekent vier meter onder dat referentievlak. Hoogteverschillen bereken je als verschil van twee hoogtes, en dat verschil is altijd hoger minus lager:

$$
\text{hoogteverschil} = h_{\text{hoog}} - h_{\text{laag}}
$$

:::example Uitgewerkt voorbeeld: polder en dijk
Een polder ligt op $-6$ m NAP. De kruin van de dijk ligt op $+5$ m NAP. Hoe hoog is de dijk, gemeten vanaf de polder?

$$
5 - (-6) = 5 + 6 = 11 \text{ m}
$$

Op de getallenlijn: zes meter omhoog naar NAP, dan nog vijf meter naar de kruin. Wie $5 - 6 = -1$ rekent, vergeet dat de polder **onder** NAP ligt. Een hoogte van een dijk kan bovendien nooit negatief zijn; zo'n uitkomst is al een signaal dat er iets mis is.
:::

{{ exercise: 13-028 }}

## 3. Temperaturen: positie en verandering

Bij temperaturen gebruik je "°C" voor een **temperatuur** (een positie op de schaal) en "graden" voor een **verandering**. Van $-5$ °C naar $3$ °C is een stijging van $3 - (-5) = 8$ graden, geen verschil van twee.

Een gemiddelde temperatuur bereken je zoals in module 12: tel alle waarden op en deel door het aantal. Negatieve waarden tellen gewoon mee met hun teken. Het gemiddelde van $-6$, $-2$, $1$ en $3$ is $(-6 - 2 + 1 + 3) : 4 = -4 : 4 = -1$ °C.

{{ exercise: 13-030 }}

## 4. Jaartallen: een getallenlijn zonder nul

Een tijdlijn lijkt op een getallenlijn: jaren vóór Christus links, jaren na Christus rechts. Maar er is een belangrijk verschil: in de gangbare jaartelling bestaat **geen jaar 0**. Op het jaar 1 v.Chr. volgt direct het jaar 1 n.Chr.

![Tijdlijn zonder jaar nul](/images/diagrams/m13-jaartelling-zonder-nul.svg "Op de getallenlijn ligt 0 tussen −1 en 1. In de jaartelling volgt 1 n.Chr. direct op 1 v.Chr.: tussen 1 v.Chr. en 1 n.Chr. zit maar één jaar.")

Wie het jaar $n$ v.Chr. als het getal $-n$ schrijft en dan gewoon aftrekt, telt dus één jaar te veel zodra hij over de grens tussen v.Chr. en n.Chr. heen gaat. Van 1 juli 5 v.Chr. tot 1 juli 5 n.Chr. zit niet $5 - (-5) = 10$ jaar, maar 9 jaar.

:::tip Astronomische jaartelling
Sterrenkundigen gebruiken daarom een aangepaste telling met wél een jaar 0: het jaar 1 v.Chr. heet bij hen 0, het jaar 2 v.Chr. heet $-1$, enzovoort. In die telling geldt de gewone rekenkunde weer zonder correctie. Het is een mooi voorbeeld van een afspraak die je aanpast zodat de regels kloppen.
:::

{{ exercise: 13-039 }}

## 5. Vooruitblik: twee getallenlijnen, één vlak

Leg twee getallenlijnen loodrecht op elkaar, met hun nulpunten op dezelfde plek, en je hebt een **assenstelsel**. Elk punt in het vlak krijgt dan twee getallen: hoe ver naar rechts (of, als het getal negatief is, naar links) en hoe ver omhoog (of omlaag). De twee assen verdelen het vlak in vier **kwadranten**, die je onderscheidt aan de tekens van de twee getallen.

{{ widget: coordinate-grid size=6 points="(3;2) (-3;2) (-3;-2) (3;-2)" }}

De vier punten hierboven hebben dezelfde getallen 3 en 2, maar steeds met andere tekens. Ze liggen daardoor in vier verschillende kwadranten, als spiegelbeelden van elkaar. Het tegengestelde nemen van de eerste coördinaat spiegelt een punt in de verticale as; het tegengestelde nemen van beide coördinaten spiegelt het in de oorsprong. In module 17 werk je dit uit en leer je punten, lijnen en grafieken in het vlak beschrijven.

{{ exercise: 13-041 }}

## 6. Uitdaging

:::challenge Ontbrekende verandering
Een temperatuur begint bij $-3$ °C, daalt daarna 4 graden en stijgt ten slotte een onbekend aantal graden. Ze eindigt op 6 °C. Hoe groot is de laatste stijging? Schrijf de tussenwaarde op en controleer je antwoord door alle stappen opnieuw uit te voeren. (Dit is opgave 13-030 hierboven; probeer haar eerst zonder hints.)
:::

:::challenge Het grootste product
Je kiest drie verschillende getallen uit de verzameling $\{-6, -2, 0, 3, 5\}$ en vermenigvuldigt ze. Hoe groot kan het product maximaal worden? Denk eerst na over het **teken**: hoeveel negatieve factoren wil je hebben? Pas daarna over de grootte.
:::

{{ exercise: 13-040 }}
