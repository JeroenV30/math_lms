# Een hoek terugvinden

Tot nu toe was de hoek gegeven en zocht je een zijde. Vaak is het andersom: je meet twee lengtes en wilt de hoek weten. Hoe steil is deze weg? Onder welke hoek moet het dak lopen als de nok 2,4 meter boven de muur moet uitkomen? Met dezelfde drie verhoudingen kun je ook dat beantwoorden, maar je moet de redenering omkeren. Daarvoor bestaan de *inverse* functies van sinus, cosinus en tangens.

## Van verhouding naar hoek

Bij een gegeven hoek hoort één vaste verhouding: $\sin30^\circ = 0{,}5$. De omgekeerde vraag is: welke hoek heeft sinus 0,5? Het antwoord noem je de **inverse sinus** of **arcsinus** van 0,5, genoteerd als $\arcsin(0{,}5)$ of $\sin^{-1}(0{,}5)$. Dus $\theta = \arcsin(0{,}5) = 30^\circ$. Zo is er ook een arccosinus en een arctangens.

$$\sin\theta = x \iff \theta = \arcsin x,\qquad \cos\theta = x \iff \theta = \arccos x,\qquad \tan\theta = x \iff \theta = \arctan x.$$

De drie functies doen wat de naam zegt: ze 'maken ongedaan' wat sin, cos en tan deden. Net zoals delen door 3 de vermenigvuldiging met 3 ongedaan maakt, maakt arcsin de sinus ongedaan.

:::warning sin⁻¹ is geen 1/sin
Op rekenmachines staat de inverse sinus als de toets **sin⁻¹**. Die notatie lijkt op een negatieve macht, maar de toets betekent *niet* $\dfrac{1}{\sin}$. Hij betekent $\arcsin$, de hoek die bij een gegeven sinus hoort. Om $\dfrac{1}{\sin30^\circ}$ te berekenen, bereken je 1 gedeeld door 0,5 = 2. Maar $\sin^{-1}(0{,}5)$ is gelijk aan 30°. Op de meeste machines roep je de inverse op met de toets 2nd of SHIFT.
:::

In deze module zoek je steeds een *scherpe* hoek, tussen 0° en 90°. Op dat interval hoort bij elke geschikte verhouding precies één hoek, dus is de uitkomst van de rekenmachine ondubbelzinnig. (Voor grotere hoeken is dat niet meer zo; daarover meer in module 27.)

## De verhouding kiezen en uitrekenen

De werkwijze lijkt op die van de vorige les, maar de gezochte grootheid is nu de hoek.

1. Schets de driehoek en markeer de gezochte hoek θ.
2. Benoem de twee bekende zijden als O, A of S ten opzichte van θ.
3. Kies de verhouding die precies die twee zijden bevat.
4. Bereken de verhouding als getal, en pas daarna de inverse toe.

:::example Een helling
Een baan stijgt 2 meter over een horizontale afstand van 5 meter. Hoe groot is de hellingshoek?

De stijging is de overstaande zijde, O = 2, en de horizontale afstand is de aanliggende zijde, A = 5. Er komt geen schuine zijde voor, dus gebruik je de tangens:

$$\tan\theta = \frac{2}{5} = 0{,}4,\qquad \theta = \arctan(0{,}4) \approx 21{,}80^\circ.$$

Controle: $\tan 21{,}80^\circ \approx 0{,}400$. De hoek is dus ongeveer 21,80°, een behoorlijk steile helling.
:::

:::example Een hoek uit de schuine zijde
In een rechthoekige driehoek is de overstaande zijde 5 en de schuine zijde 13. Bereken θ.

O en S, dus sinus: $\sin\theta = \dfrac{5}{13} \approx 0{,}3846$, dus $\theta = \arcsin\!\left(\dfrac{5}{13}\right) \approx 22{,}62^\circ$. De derde hoek is $90^\circ - 22{,}62^\circ = 67{,}38^\circ$. De andere rechthoekszijde is $\sqrt{13^2 - 5^2} = 12$, en $\cos 22{,}62^\circ = 12/13$ klopt met dezelfde hoek.
:::

Je kunt een hoek vaak op meer dan één manier vinden. Bij de 3–4–5-driehoek is de hoek tegenover 3 gelijk aan $\arcsin(3/5) = \arccos(4/5) = \arctan(3/4) \approx 36{,}87^\circ$. De andere scherpe hoek is $90^\circ - 36{,}87^\circ = 53{,}13^\circ$. Alle drie de wegen leiden tot hetzelfde antwoord, en dat is een mooie controle.

:::tip Pas de inverse op het getal toe, nooit op een zijde
Een veelgemaakte fout is $\arctan$ van een lengte te nemen zonder eerst te delen, of de inverse helemaal te vergeten en de verhouding 0,4 als antwoord op te schrijven. De inverse neem je altijd van een verhouding, en zijn uitkomst is altijd een hoek. Staat er in je antwoord een getal dat kleiner is dan 1 bij een gevraagde hoek in graden, dan heb je waarschijnlijk de inverse vergeten.
:::

## Hellingshoek en hellingspercentage

Bij wegen, fietspaden en daken spreken we niet over de hoek, maar over een **hellingspercentage**. Dat is de stijging gedeeld door de horizontale afstand, uitgedrukt in procenten:

$$\text{hellingspercentage} = \frac{\text{stijging}}{\text{horizontale afstand}} \times 100\% = \tan\theta \times 100\%.$$

Dus 8% betekent dat de weg 8 meter stijgt per 100 meter horizontale afstand. Dat is $\tan\theta = 0{,}08$, en $\theta = \arctan(0{,}08) \approx 4{,}57^\circ$.

![Een weg met 8 procent helling](/images/diagrams/m22-helling.svg "Hellingspercentage is stijging gedeeld door horizontale afstand, maal 100%. Eigen figuur.")

Het is belangrijk om dit onderscheid te zien: een hellingspercentage van 8% is *niet* een hoek van 8°. Een hoek van 8° geeft $\tan8^\circ \approx 0{,}1405$, ofwel ongeveer 14% helling. En een helling van 100% is geen verticale wand, maar een hoek van 45°: dan is de stijging gelijk aan de horizontale afstand. Een verticale wand zou een oneindig percentage hebben.

| Hellingspercentage | $\tan\theta$ | Hoek $\theta$ |
|---|---|---|
| 5% | 0,05 | ≈ 2,86° |
| 10% | 0,10 | ≈ 5,71° |
| 25% | 0,25 | ≈ 14,04° |
| 50% | 0,50 | ≈ 26,57° |
| 100% | 1,00 | 45° |

Merk op dat voor kleine hoeken het hellingspercentage en de hoek in graden ongeveer evenredig lopen (het percentage is ongeveer 1,75 keer de hoek in graden), maar dat het verband daarna uiteen loopt. Bij 45° is het percentage 100, bij 26,57° nog maar 50.

:::example Een weg met 12% helling
Een weg stijgt 12%. Hoe groot is de hoek, en hoeveel meter stijg je op een traject van 250 meter horizontaal?

$\theta = \arctan(0{,}12) \approx 6{,}84^\circ$. Over 250 meter horizontaal stijg je $0{,}12 \times 250 = 30$ meter.
:::

## Daken en trappen

Een dakhelling wordt vaak als hoek opgegeven, maar de timmerman denkt in lengtes: de dakhoogte boven de muur en de halve breedte van het gebouw. Bij een zadeldak met een halve breedte van 5 meter en een nokhoogte van 2,4 meter boven de muurplaat is de dakhelling $\arctan(2{,}4/5) = \arctan(0{,}48) \approx 25{,}64^\circ$. Een steiler dak wordt bereikt met een hogere nok of een smaller gebouw; een platter dak bij een lage nok.

Voor trappen geldt een vergelijkbare redenering: de treden vormen een helling met een stijging (optrede) en een horizontale afstand (aantrede). Een trap met 18 cm optrede en 25 cm aantrede heeft $\tan\theta = 18/25 = 0{,}72$, dus $\theta \approx 35{,}75^\circ$. Of dat comfortabel is, hangt af van het gebruik; hier gaat het om het meetkundige verband tussen maten en hoek.

## Oefeningen

De eerste vier opgaven zijn directe toepassingen: een verhouding, daarna de inverse. In de laatste twee kun je het gewonnen inzicht in hellingen en daken kwijt.

{{ exercises: 22-019, 22-020, 22-021, 22-022, 22-034, 22-035 }}

:::warning Controle op het eindantwoord
Als je een hoek berekent die groter is dan 90° of kleiner dan 0°, is er iets misgegaan: in een rechthoekige driehoek is elke scherpe hoek kleiner dan 90°. Controleer dan of je de juiste verhouding gebruikt (kwam er een schuine zijde in voor?) en of de rekenmachine op graden staat.
:::
