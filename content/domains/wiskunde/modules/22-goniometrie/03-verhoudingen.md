# Sinus, cosinus en tangens

In de vorige les zag je dat de verhouding van twee zijden in een rechthoekige driehoek alleen van de hoek afhangt. In een rechthoekige driehoek zijn er drie zijden en dus precies drie verschillende verhoudingen van twee zijden (de omgekeerde verhoudingen niet meegeteld). Elk van die drie heeft een eigen naam gekregen. In deze les maak je kennis met die namen, leer je ze onthouden met een ezelsbruggetje dat ook nog een reden heeft, en bereken je een paar waarden exact, zonder rekenmachine.

## De drie verhoudingen

Kies een scherpe hoek θ in een rechthoekige driehoek met overstaande zijde O, aanliggende zijde A en schuine zijde S. Dan definiëren we:

$$\sin\theta=\frac{O}{S},\qquad\cos\theta=\frac{A}{S},\qquad\tan\theta=\frac{O}{A}.$$

Lees dat als: de **sinus** van θ is overstaand gedeeld door schuin; de **cosinus** is aanliggend gedeeld door schuin; de **tangens** is overstaand gedeeld door aanliggend. Een sinus, cosinus of tangens is dus geen lengte, maar een *getal zonder eenheid*: een verhouding van twee lengtes met dezelfde eenheid.

:::formula De drie verhoudingen
$$\sin\theta=\frac{O}{S},\qquad\cos\theta=\frac{A}{S},\qquad\tan\theta=\frac{O}{A}$$
:::

:::example Een 3–4–5-driehoek
Neem de hoek θ tegenover de zijde 3, dus O = 3, A = 4 en S = 5. Dan geldt

$$\sin\theta=\frac{3}{5}=0{,}6,\qquad \cos\theta=\frac{4}{5}=0{,}8,\qquad \tan\theta=\frac{3}{4}=0{,}75.$$

Bij de andere scherpe hoek (de hoek tegenover 4) wisselen O en A. Daar is de sinus $4/5 = 0{,}8$ en de cosinus $3/5 = 0{,}6$. De sinus van de ene hoek is dus de cosinus van de andere. Dat is geen toeval; zie hieronder.
:::

## Het ezelsbruggetje SOS-CAS-TOA

Wie de drie breuken uit zijn hoofd wil leren, kan gebruikmaken van **SOS-CAS-TOA**. Elk onderdeel bestaat uit de beginletters van een definitie:

- **SOS**: **S**inus = **O**verstaand gedeeld door **S**chuin;
- **CAS**: **C**osinus = **A**anliggend gedeeld door **S**chuin;
- **TOA**: **T**angens = **O**verstaand gedeeld door **A**anliggend.

Een ezelsbruggetje is geen verklaring, dus hier is de reden erachter. Het is nuttig om te zien dat er maar één idee onder zit: het zijn de drie manieren om uit drie zijden (O, A, S) twee te kiezen. In de breuk komt de zijde die in de teller staat steeds *vóór* de zijde in de noemer, en de schuine zijde staat bij sinus en cosinus altijd in de noemer, omdat de schuine zijde de langste is. Daardoor zijn sinus en cosinus van een scherpe hoek altijd kleiner dan 1. De tangens is de enige van de drie die groter dan 1 kan zijn, omdat hij twee rechthoekszijden deelt zonder de schuine zijde.

De naam *cosinus* heeft ook een reden: het is de **co**mplement-sinus, de sinus van het complement. Bij een scherpe hoek θ is de andere scherpe hoek $90^\circ - \theta$, het *complement* van θ. De overstaande zijde van θ is de aanliggende zijde van $90^\circ - \theta$. Dus

$$\cos\theta = \sin(90^\circ - \theta).$$

Dat verklaart de uitkomsten in het voorbeeld hierboven: $\sin(\text{hoek tegenover } 4) = \cos(\text{hoek tegenover } 3)$. Hetzelfde geldt voor *cotangens*, die je later tegenkomt.

:::tip Schrijf het onder elkaar
Wie bij elke opgave eerst 'S O S, C A S, T O A' opschrijft en er de zijden uit de schets in zet, maakt vrijwel geen fouten in de keuze van de verhouding. Je hoeft pas na enkele tientallen opgaven niet meer na te denken.
:::

:::warning Tangens is niet sinus
Een veelgemaakte fout is het verwisselen van sinus en tangens: wie bij O = 3, A = 4 en S = 5 'sinus' invult als $3/4$ heeft eigenlijk de tangens berekend. Check: bevat de breuk de schuine zijde? Dan is het sinus of cosinus. Bevat ze alleen de twee rechthoekszijden? Dan is het tangens.
:::

## Grenzen en controles

Omdat S de langste zijde is, geldt voor een scherpe hoek $0 < \sin\theta < 1$ en $0 < \cos\theta < 1$. Een berekende sinus van 1,3 kan dus niet bij een scherpe hoek in een rechthoekige driehoek horen. De tangens kent zo'n grens niet. Bij een hoek van 45° zijn de rechthoekszijden gelijk, dus $\tan 45^\circ = 1$. Boven 45° is O groter dan A en dus de tangens groter dan 1; onder 45° is hij kleiner. Hoe dichter de hoek bij 90° komt, hoe groter de tangens wordt: er is geen bovengrens.

Uit $O^2+A^2=S^2$ volgt, na delen van beide kanten door $S^2$:

$$\left(\frac{O}{S}\right)^2+\left(\frac{A}{S}\right)^2=1,\qquad\text{dus}\qquad \sin^2\theta+\cos^2\theta=1.$$

Hier is $\sin^2\theta$ de gebruikelijke schrijfwijze voor $(\sin\theta)^2$. Als je daarnaast de tangens schrijft als $\dfrac{O}{A}=\dfrac{O/S}{A/S}$, krijg je

$$\tan\theta=\frac{\sin\theta}{\cos\theta}.$$

Zie deze twee vergelijkingen niet als nieuwe regels die je moet leren, maar als *controles*: ze volgen rechtstreeks uit Pythagoras en uit het wegdelen van S. Als je sin θ en cos θ hebt berekend, moeten hun kwadraten optellen tot 1.

## Exacte waarden bij 30°, 45° en 60°

Voor de meeste hoeken moet je een rekenmachine gebruiken. Drie hoeken zijn uitzonderlijk, omdat ze voorkomen in twee bijzonder eenvoudige figuren en dus exact uit te rekenen zijn.

**45°: het halve vierkant.** Neem een vierkant met zijde 1 en trek een diagonaal. Die splitst het vierkant in twee gelijke rechthoekige driehoeken met rechthoekszijden 1 en 1 en schuine zijde $\sqrt{1^2+1^2}=\sqrt2$. De scherpe hoeken zijn 45°. Dus

$$\sin45^\circ=\frac{1}{\sqrt2}=\frac{\sqrt2}{2}\approx0{,}7071,\quad \cos45^\circ=\frac{\sqrt2}{2},\quad\tan45^\circ=1.$$

**30° en 60°: de halve gelijkzijdige driehoek.** Neem een gelijkzijdige driehoek met zijde 2 en trek een hoogtelijn vanuit een hoekpunt. Die verdeelt de driehoek in twee rechthoekige driehoeken met hoeken 30°, 60° en 90°. De schuine zijde is 2, de korte rechthoekszijde is 1 (de helft van de basis) en de hoogte is $\sqrt{2^2-1^2}=\sqrt3$.

![Twee bijzondere driehoeken](/images/diagrams/m22-exact.svg "Links de halve gelijkzijdige driehoek (30°, 60°, 90°) met zijden 1, √3 en 2; rechts het halve vierkant met zijden 1, 1 en √2. Eigen figuur.")

Vanuit de hoek van 30° is O = 1, A = $\sqrt3$ en S = 2, dus

$$\sin30^\circ=\frac12,\qquad\cos30^\circ=\frac{\sqrt3}{2},\qquad\tan30^\circ=\frac{1}{\sqrt3}=\frac{\sqrt3}{3}\approx0{,}5774.$$

Vanuit de hoek van 60° wisselen O en A, dus

$$\sin60^\circ=\frac{\sqrt3}{2},\qquad\cos60^\circ=\frac12,\qquad\tan60^\circ=\sqrt3\approx1{,}7321.$$

| θ | 30° | 45° | 60° |
|---|---|---|---|
| sin θ | $\tfrac12$ | $\tfrac{\sqrt2}{2}$ | $\tfrac{\sqrt3}{2}$ |
| cos θ | $\tfrac{\sqrt3}{2}$ | $\tfrac{\sqrt2}{2}$ | $\tfrac12$ |
| tan θ | $\tfrac{\sqrt3}{3}$ | $1$ | $\sqrt3$ |

Controleer de tabel met wat je al weet. Bij 30° en 60° wisselen sinus en cosinus van plaats, zoals $\cos\theta=\sin(90^\circ-\theta)$ voorspelt. En $\sin^2 30^\circ+\cos^2 30^\circ=\tfrac14+\tfrac34=1$. Dat de overstaande zijde bij 30° precies de helft van de schuine zijde is, zag je al in de widget van de vorige les.

{{ widget: right-triangle angle="60" hypotenuse="2" }}

Zet de hoek op 30°, 45° en 60° met schuine zijde 2 en vergelijk de waarden met de tabel. Let op: de widget rondt af, de tabel is exact.

## Vooruitblik: de eenheidscirkel

Tot nu toe zijn sinus en cosinus alleen gedefinieerd voor scherpe hoeken, omdat een rechthoekige driehoek geen tweede rechte of stompe hoek kan hebben. In module 27 maak je die beperking ongedaan: je tekent een cirkel met straal 1 en laat een punt over de omtrek draaien. De coördinaten van dat punt zijn dan $(\cos\theta,\ \sin\theta)$, en dat werkt voor *elke* hoek, ook voor groter dan 90° of negatieve hoeken. De verhouding $O/S$ is dan simpelweg de hoogte van het punt, omdat S = 1. Een voorproefje:

{{ widget: unit-circle angle="30" }}

Sleep de hoek naar bijvoorbeeld 30° en lees de waarden af: ze komen overeen met de tabel hierboven. Voor hoeken boven 90° krijg je getallen die je in deze module nog niet nodig hebt.

{{ glossary }}

## Oefeningen

De eerste zes opgaven bouwen de definities op; de twee laatste gebruiken de exacte waarden.

{{ exercises: 22-007, 22-008, 22-009, 22-010, 22-011, 22-012, 22-032, 22-033 }}
