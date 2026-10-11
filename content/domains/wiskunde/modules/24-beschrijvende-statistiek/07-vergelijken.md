# Verschuiven, schalen en vergelijken

Je hebt nu een gereedschapskist: gemiddelde en mediaan voor het centrum, standaardafwijking en IQR voor de spreiding. In deze laatste theorieles gebruik je die om drie vragen te beantwoorden. Wat gebeurt er met de maten als je de eenheid verandert? Hoe vergelijk je twee groepen eerlijk? En hoe druk je uit hoe ver één waarneming van het midden ligt, zodat je ook metingen in verschillende eenheden kunt vergelijken?

## Verschuiven en schalen

Tel je bij elke waarde dezelfde constante $c$ op, dan schuiven gemiddelde, mediaan en kwartielen met $c$ op. De verschillen tussen waarden blijven gelijk: spreidingsbreedte, IQR en standaardafwijking veranderen niet. Denk aan temperaturen: als je bij alle waarden 10 graden optelt, is de hele rij warmer, maar even gespreid.

Vermenigvuldig je elke waarde met $a$, dan vermenigvuldigen gemiddelde en mediaan ook met $a$, de standaardafwijking met $|a|$ en de variantie met $a^2$. Bij $a<0$ keert de volgorde om, waardoor onderste en bovenste kwartiel van rol wisselen. Spreiding blijft niet-negatief, vandaar de absolute waarde.

Samen: een lineaire transformatie $x \mapsto ax + b$ geeft

$$
\bar{x}' = a\bar{x} + b, \qquad s' = |a|\,s, \qquad s'^2 = a^2 s^2.
$$

:::example Eenheden
Zet je meters om in centimeters ($a=100$, $b=0$), dan wordt het gemiddelde honderdmaal zo groot, de standaardafwijking ook honderdmaal en de variantie tienduizendmaal. Zet je graden Celsius om in Fahrenheit ($F = 1{,}8\,C + 32$), dan geldt $\bar{F} = 1{,}8\,\bar{C} + 32$ en $s_F = 1{,}8\,s_C$: de 32 verschuift het centrum, maar telt niet mee voor de spreiding. Het fysische verschijnsel verandert niet; de getallen en eenheden wel.
:::

Waarom klopt dit? Bij een verschuiving met $b$ is elk gemiddelde ook $b$ groter, dus elke afwijking $x_i - \bar{x}$ blijft precies gelijk. Bij schalen met $a$ wordt elke afwijking $a$ keer zo groot, dus elke gekwadrateerde afwijking $a^2$ keer zo groot, en dus de variantie ook. De wortel daarvan geeft $|a|$.

:::challenge Een volledige beschrijving
Gebruik 2, 4, 4, 4, 5, 5, 7, 9 als volledige populatie. Geef gemiddelde, populatievariantie en populatiestandaardafwijking. Voorspel vervolgens deze drie getallen als elke waarneming wordt vervangen door 3x + 10.
:::

{{ exercises: 24-024, 24-025, 24-026, 24-027, 24-028, 24-029, 24-030 }}

## Twee groepen vergelijken

Wie twee groepen vergelijkt, kijkt naar vier dingen: het **centrum**, de **spreiding**, de **vorm** en de **aantallen**. Een vergelijking die alleen het gemiddelde noemt, mist de helft van het verhaal.

:::example Twee klassen
Klas A haalt op een toets een gemiddelde van 6,8 met standaardafwijking 0,6. Klas B haalt gemiddeld 6,6 met standaardafwijking 1,4. Het gemiddelde van klas A is hoger, maar het verschil (0,2) is klein vergeleken met de spreiding in beide klassen: er is veel overlap. Wat opvalt, is dat klas B veel meer verschil laat zien. In klas A scoort vrijwel iedereen rond de 6,8; in klas B zitten zowel hoge als lage cijfers. Voor een docent is dat misschien belangrijker dan de 0,2 punt verschil in gemiddelde.
:::

Een tweede valkuil is het opvatten van een groepsverschil als iets over individuen. Dat het gemiddelde in groep A hoger is, betekent niet dat iedere leerling in A beter scoort dan iedere leerling in B. En een statistisch verschil tussen groepen is nog geen oorzaak: dat vergt een onderzoeksopzet. Een zichtbaar verschil in centrum zonder rekening te houden met spreiding, aantallen en uitschieters, is een zwakke conclusie.

Ten slotte de uitschieters. Een hoge uitschieter kan echt zijn, een meetfout of een andere meetpopulatie betreffen. Onderzoek de achtergrond voordat je hem verwijdert, en rapporteer bij twijfel de maten mét en zónder de waarde. Gebruik je gemiddelde en standaardafwijking, bedenk dan dat één extreme waarde beide sterk beïnvloedt; mediaan en IQR zijn robuuster.

## De z-score: hoeveel standaardafwijkingen van het midden?

Stel dat Anna een 7,5 haalt voor een toets waarvan het klasgemiddelde 6,0 is met een standaardafwijking van 1,5, en dat Bram 68 punten haalt voor een toets met gemiddelde 55 en standaardafwijking 10. Wie heeft relatief het best gepresteerd? Je kunt de punten niet zomaar vergelijken, want de toetsen hebben een andere schaal. Maar je kunt wel meten hoeveel standaardafwijkingen elk boven het gemiddelde zit. Dat getal heet de **z-score**:

$$
z = \frac{x - \mu}{\sigma}.
$$

Anna heeft $z = (7{,}5-6{,}0)/1{,}5 = 1$: één standaardafwijking boven het gemiddelde. Bram heeft $z = (68-55)/10 = 1{,}3$. Relatief gezien is Brams resultaat dus iets beter. Een z-score heeft geen eenheid, omdat teller en noemer dezelfde eenheid hebben. Een positieve z-score betekent boven, een negatieve onder het gemiddelde; $z=0$ is precies gemiddeld.

De z-score is eigenlijk een toepassing van wat je zojuist las: trek je het gemiddelde van alle waarden af (verschuiven) en deel je door de standaardafwijking (schalen), dan krijgt de nieuwe dataset gemiddelde 0 en standaardafwijking 1. Elke dataset is daarmee te vergelijken met elke andere. In module 37 gebruik je z-scores om kansen te berekenen.

:::warning Delen door $\sigma$, niet vergeten
Het verschil $x-\mu$ is nog geen z-score. Bij $x=186$, $\mu=170$ en $\sigma=8$ is het verschil 16 cm, maar de z-score is $16/8 = 2$. Het eerste is een lengte, het tweede een aantal standaardafwijkingen.
:::

{{ exercises: 24-044, 24-045 }}

## Een vooruitblik: de klokvormige verdeling

Veel gegevens, zoals lichaamslengte, meetfouten en bepaalde testscores, liggen in een klokvorm rond het gemiddelde: de meeste waarnemingen in het midden en steeds minder naar de uiteinden. Voor zulke verdelingen geldt een vuistregel die de standaardafwijking een concrete betekenis geeft:

- ongeveer **68%** van de waarnemingen ligt binnen één standaardafwijking van het gemiddelde ($|z|\le 1$);
- ongeveer **95%** ligt binnen twee standaardafwijkingen ($|z|\le 2$);
- ongeveer **99,7%** ligt binnen drie standaardafwijkingen ($|z|\le 3$).

![Klokvormige verdeling met de 68-95-99,7-gebieden](/images/diagrams/m24-klokvorm.svg "De vuistregel 68-95-99,7 bij een klokvormige verdeling (eigen figuur)")

Probeer het uit. Verschuif en verbreed de klok met de schuifregelaars en kijk hoe het gekleurde gebied verandert. Dit is een vooruitblik: de wiskunde erachter, de normale verdeling, behandel je in module 37.

{{ widget: normal-distribution mu=100 sigma=15 lower=85 upper=115 }}

:::tip Alleen bij klokvormige data
De regel van 68-95-99,7 geldt bij benadering voor klokvormige verdelingen, niet voor elke dataset. Bij een sterk scheve verdeling, zoals salarissen, klopt hij niet. Controleer dus altijd eerst de vorm, bijvoorbeeld met een boxplot of een stippendiagram.
:::

:::example Intelligentietest
Een test is zo geschaald dat het gemiddelde 100 is en de standaardafwijking 15, bij een klokvormige verdeling. Binnen één standaardafwijking ligt dan ongeveer 68% van de mensen, dus tussen 85 en 115. Binnen twee standaardafwijkingen ligt ongeveer 95%, dus tussen $100 - 30 = 70$ en $100 + 30 = 130$. Een score van 145 heeft $z = (145 - 100)/15 = 3$ en komt dus bij ongeveer 0,15% van de mensen aan de bovenkant voor.
:::

{{ exercises: 24-046, 24-047 }}

## Uitdagingen

De laatste twee opgaven combineren alles uit de module: z-scores om twee toetsen te vergelijken, en een controle van wat een uitschieter doet met je maten.

{{ exercises: 24-048, 24-049 }}
