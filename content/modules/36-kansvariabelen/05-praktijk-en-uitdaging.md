# Een model controleren voordat je ermee beslist

Een logistiek bedrijf wil het aantal beschadigde pakketten per dag modelleren.
Een verwachting van 1,1 beschadiging vertelt hoeveel schade het gemiddeld
moet begroten. De standaardafwijking geeft een andere vraag antwoord:
hoe sterk wisselt dat aantal tussen dagen? Voor de voorraad reserveproducten
heb je bovendien staartkansen nodig, bijvoorbeeld $P(X\ge3)$.

Een model dat alleen 0, 1 en 2 als waarden bevat, verklaart drie beschadigingen
per definitie onmogelijk. Dat is een sterke aanname. Controleer daarom de
historische gegevens en de capaciteit van het bedrijf voordat je zo'n
vereenvoudiging accepteert.

## Simulatie als controle

Gooi in de widget twee dobbelstenen en vergelijk de relatieve frequenties met
de theoretische kansen. De som 7 kan op zes manieren ontstaan, de som 2 op
één manier. Elke extra simulatie verandert de waargenomen frequenties, maar
niet de theoretische kansverdeling van het gekozen model.

{{ widget: dice dice=2 seed=36 }}

:::question Voor je op een knop drukt
Welke gemiddelde som verwacht je bij twee dobbelstenen? Eén dobbelsteen heeft
verwachting 3,5, dus de som heeft verwachting 7. Die optelling vraagt geen
onafhankelijkheid; het optellen van de varianties wel.
:::

## Uitdaging: een eerlijke prijs bepalen

Een spel betaalt verschillende netto-uitkomsten met verschillende kansen.
Formuleer eerst de verwachtingswaarde en los dan op voor de onbekende kans.
Controleer na afloop of je kans tussen 0 en 1 ligt.

{{ exercise: 36-020 }}

Een verwachte waarde van nul betekent dat het spel in deze rekenkundige zin
eerlijk is. De deelnemer kan nog steeds veel risico lopen. In de volgende
module gebruik je bekende verdelingsfamilies om dat risico preciezer te beschrijven.
