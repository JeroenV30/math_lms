# Drie zijden en drie vierkanten

In deze les ontdek je wat de stelling van Pythagoras eigenlijk zegt, nog vóór je er iets mee uitrekent. Dat gaat in drie stappen. Eerst bekijk je wat een rechthoekige driehoek is en hoe je de zijden een naam geeft. Daarna teken je op elke zijde een vierkant. Pas als je ziet wat die vierkanten met elkaar te maken hebben, schrijven we de stelling op.

## Wat is een rechthoekige driehoek?

Een driehoek heeft drie hoeken. Bij een **rechthoekige driehoek** is één van die hoeken precies 90°: een rechte hoek, zoals de hoek van een vel papier of de hoek tussen vloer en muur. Op tekeningen geef je een rechte hoek aan met een klein vierkantje in de hoek. Dat teken is geen versiering. Het is een *gegeven*: de tekenaar zegt daarmee dat de hoek precies recht is. Een hoek die er op een schets ongeveer recht uitziet, is dat niet automatisch.

Een driehoek kan maar één rechte hoek hebben. De hoeken van een driehoek tellen samen op tot 180°. Als één hoek al 90° is, blijft er 90° over voor de andere twee, en die zijn dus allebei scherp, kleiner dan 90°.

De zijden van een rechthoekige driehoek hebben vaste namen:

- De twee zijden die de rechte hoek insluiten heten de **rechthoekszijden**. In de stelling noemen we ze $a$ en $b$.
- De zijde tegenover de rechte hoek heet de **schuine zijde** of **hypotenusa**. In de stelling heet ze $c$.

Het belangrijkste kenmerk van de schuine zijde is haar *ligging*: ze ligt tegenover de rechte hoek en raakt de rechte hoek dus niet. Dat de schuine zijde de langste zijde is, volgt daaruit. In een driehoek ligt tegenover de grootste hoek altijd de langste zijde, en de rechte hoek is hier de grootste hoek. De schuine zijde is dus langer dan elk van de twee rechthoekszijden.

![Drie rechthoekige driehoeken in verschillende standen](/images/diagrams/m18-rechthoekige-driehoek.svg "De schuine zijde c ligt tegenover de rechte hoek, ook als je de driehoek draait. Eigen figuur.")

Kijk goed naar de drie standen in de figuur. Als je de driehoek draait of spiegelt, verandert er niets aan de rollen van de zijden. De schuine zijde is niet 'de zijde die scheef op het papier ligt'. Ze kan horizontaal, verticaal of schuin liggen. Ze wordt bepaald door haar plaats tegenover de rechte hoek. Veel fouten in deze module komen voort uit het verkeerd herkennen van de schuine zijde, vooral als de driehoek anders getekend is dan in je gewende voorbeeld. Zoek daarom altijd eerst de rechte hoek en ga van daaruit naar de zijde ertegenover.

:::tip Zo herken je de schuine zijde
Zet je vinger op de rechte hoek. De zijde die je vinger niet raakt en die er recht tegenover ligt, is de schuine zijde. Staan de lengtes al bij de zijden, dan moet dat ook de grootste van de drie lengtes zijn. Is dat niet zo, dan klopt er iets niet in de tekening of in je lezing ervan.
:::

{{ exercise: 18-031 }}

## Vierkanten op de zijden

Het woord *kwadraat* betekent letterlijk 'vierkant'. Als je zegt dat iets 'in het kwadraat' staat, bedoel je de oppervlakte van een vierkant met die zijde. Een vierkant met zijde 3 heeft oppervlakte $3 \times 3 = 3^2 = 9$. Een vierkant met zijde 4 heeft oppervlakte 16, en een vierkant met zijde 5 heeft oppervlakte 25. Tel de hokjes maar.

Teken nu op elke zijde van een rechthoekige driehoek een vierkant, naar buiten toe. Neem de driehoek met rechthoekszijden 3 en 4 en schuine zijde 5.

![Een rechthoekige driehoek met op elke zijde een vierkant](/images/diagrams/m18-vierkanten-op-zijden.svg "Vierkanten op de zijden van een 3-4-5-driehoek: 9 + 16 = 25. Eigen figuur.")

Op de zijde van 3 staat een vierkant van 9 hokjes. Op de zijde van 4 staat een vierkant van 16 hokjes. Samen 25 hokjes. En het vierkant op de schuine zijde van 5 bestaat uit precies 25 hokjes. De twee kleinere vierkanten samen bedekken evenveel oppervlak als het grote vierkant op de schuine zijde.

Dit is de kern van de stelling. Let op wat er wél en wat er níet staat. Het gaat om *oppervlakten*, niet om lengtes. De lengtes 3 en 4 tellen op tot 7, en dat is niet 5. Maar de oppervlakten 9 en 16 tellen op tot 25, en dat is wel de oppervlakte van het vierkant op de zijde met lengte 5.

## De stelling van Pythagoras

:::theory De stelling van Pythagoras
In een rechthoekige driehoek met rechthoekszijden $a$ en $b$ en schuine zijde $c$ geldt:

$$
a^2 + b^2 = c^2.
$$

In woorden: de oppervlakte van het vierkant op de schuine zijde is gelijk aan de som van de oppervlakten van de vierkanten op de rechthoekszijden.
:::

De stelling zegt dus niet dat $c$ gelijk is aan $a + b$. Ze zegt dat $c^2$ gelijk is aan $a^2 + b^2$. Dat verschil is subtiel maar essentieel. Je kunt het ook zien aan een eenvoudige redenering: in een driehoek is elke zijde korter dan de som van de andere twee, want de rechte lijn is de kortste weg tussen twee punten. Dus $c < a + b$. De lengte $c$ ligt ergens tussen de grootste rechthoekszijde en de som van beide. Bij 3 en 4 ligt $c = 5$ tussen 4 en 7.

Probeer het zelf uit met de widget. Verander de rechthoekszijden en kijk naar de drie vierkantsoppervlakten. De derde waarde wordt telkens berekend uit de eerste twee.

{{ widget: pythagoras a=3 b=4 }}

Je ziet dat de som van de twee kleine vierkanten steeds precies gelijk is aan het grote vierkant. Niet elke driehoek met gehele rechthoekszijden heeft ook een gehele schuine zijde. Bij $a = 1$ en $b = 1$ is $c^2 = 2$ en dus $c = \sqrt{2}$, een getal dat niet als breuk te schrijven is. Daar komen we in de volgende les op terug.

:::example Een route over het weiland
In het weiland uit de introductie loop je 6 meter naar het oosten en 8 meter naar het noorden. De rechtstreekse afstand $c$ volgt uit de stelling.

1. Teken de rechthoekige driehoek. De twee wandelingen zijn de rechthoekszijden, de directe verbinding is de schuine zijde. Dus $a = 6$ en $b = 8$.
2. Kwadrateer: $a^2 = 36$ en $b^2 = 64$.
3. Tel op: $c^2 = 36 + 64 = 100$.
4. Zoek de lengte die in het kwadraat 100 is: $c = 10$, want $10 \times 10 = 100$.

De weg langs de rand is $6 + 8 = 14$ meter. Dwars door het weiland is het 10 meter: 4 meter korter. Controleer ook of $c$ langer is dan elke rechthoekszijde ($10 > 8$) en korter dan hun som ($10 < 14$).
:::

## De voorwaarde is essentieel

De stelling geldt voor rechthoekige driehoeken en voor geen andere. Dat lijkt een open deur, maar het is de belangrijkste beperking. Gebruik de relatie alleen als je zeker weet dat de hoek tussen $a$ en $b$ precies 90° is. Een schets die ongeveer recht lijkt, is niet genoeg. Zoek een rechte-hoekmarkering in de tekening, of een woord in de tekst als 'loodrecht', 'rechthoek', 'vierkant' of 'verticale muur op vlakke grond'. In les 4 zie je wat er gebeurt als de hoek groter of kleiner is dan 90°: dan is $c^2$ groter of juist kleiner dan $a^2 + b^2$.

Bedenk ook dat de letters niets magisch hebben. Je mag de zijden ook $p$, $q$ en $r$ noemen, of $AB$, $BC$ en $AC$. Wat telt is dat de schuine zijde in het kwadraat aan de ene kant van het gelijkteken staat en de twee andere in het kwadraat aan de andere kant.

:::warning Lengtes en oppervlakten niet door elkaar halen
Bij de stelling gaan twee werelden samen: lengtes ($a$, $b$, $c$) en oppervlakten ($a^2$, $b^2$, $c^2$). Een kwadraat heeft een andere eenheid dan een lengte: 3 cm kwadrateert tot 9 cm², niet tot 9 cm. Je telt dus oppervlakten op, en pas bij de laatste stap, door de wortel te nemen, ga je terug naar een lengte.
:::

## Oefenen

Je rekent in deze oefeningen nog met nette getallen. Let vooral op het verschil tussen de oppervlakte van een vierkant en de lengte van de zijde.

{{ exercises: 18-003, 18-004, 18-005, 18-006, 18-007, 18-032 }}
