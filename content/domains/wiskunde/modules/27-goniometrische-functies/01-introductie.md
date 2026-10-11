# Een draaiing wordt een golf

:::history Alexandrië, ca. 150 n.Chr.
Wie de hemel wil voorspellen, moet met hoeken rekenen die veel groter zijn dan 90°. De zon, de maan en de planeten lijken langs een cirkel te lopen, en een astronoom als Claudius Ptolemaeus wilde weten waar een lichaam over een week of een jaar zou staan. In zijn *Almagest* deelde hij de cirkel op in 360 graden en gaf hij een tabel waarmee je bij elke hoek de bijbehorende koorde kon opzoeken. Zo'n tabel was het rekenmachientje van de antieke sterrenkunde. Maar het was een tabel voor een *meetkundig* probleem: een hoek, een koorde, een uitkomst. Dat een draaiing ook een *functie van de tijd* kan zijn, een golf die je met een formule beschrijft, kwam pas veel later.
:::

In module 22 maakte je kennis met sinus, cosinus en tangens als verhoudingen in een rechthoekige driehoek. Dat werkte prima, maar met een beperking die je misschien al hebt gevoeld: een rechthoekige driehoek heeft naast de rechte hoek alleen scherpe hoeken. Over een hoek van 150°, van 400° of van −30° kun je in zo'n driehoek niets zeggen. Toch komen zulke hoeken voortdurend voor. Een reuzenrad draait meer dan één keer rond. Een wijzer die je terugdraait, beweegt met een negatieve hoek. Een planeet bewandelt zijn baan keer op keer.

:::question Een denkvraag voor je verder leest
Je zit in een reuzenrad dat met constante snelheid rondgaat. Teken in gedachten de grafiek van je hoogte boven de grond tegen de tijd. Begin onderaan en volg één hele ronde. Waar gaat de grafiek het snelst omhoog, en waar verandert je hoogte nauwelijks, ook al draait het rad nog even snel? Welke vorm krijgt de kromme als je meerdere rondes volgt?
:::

Denk er even over na voordat je verder leest. Op het laagste punt beweeg je bijna horizontaal: de hoogte verandert dan nauwelijks. Halverwege, ter hoogte van de as, beweeg je vrijwel recht omhoog en verandert de hoogte het snelst. Bovenaan wordt het weer vlak. De grafiek is dus geen rechte lijn en ook geen zigzag, maar een zachte golf die zich eindeloos herhaalt. Die golf is de **sinusgrafiek**, en ze ontstaat vanzelf zodra je sinus niet langer als verhouding in een driehoek ziet, maar als de hoogte van een draaiend punt.

## Waarom bestaat deze wiskunde?

Veel verschijnselen herhalen zich: de seizoenen, de getijden, het geluid van een stemvork, de wisselspanning uit het stopcontact, de stand van de maan. Om ze te beschrijven heb je een functie nodig die zich na een vaste tijd precies herhaalt, en liefst een die je met een paar getallen kunt aanpassen aan de werkelijkheid. De goniometrische functies zijn daarvoor het natuurlijke gereedschap, omdat ze rechtstreeks uit de beweging op een cirkel voortkomen. Wie begrijpt hoe een punt op een cirkel draait, begrijpt ook waarom zo veel golven er hetzelfde uitzien.

De stap die daarvoor nodig is, is kleiner dan hij lijkt. We behouden alles uit module 22 en breiden alleen de definitie uit.

## De eenheidscirkel

Teken een assenstelsel en daarin de cirkel met middelpunt $(0;0)$ en straal 1: de **eenheidscirkel**. Een punt $P$ op die cirkel bepaal je door een hoek $\theta$ (spreek uit: theta). Je begint op de positieve $x$-as, bij het punt $(1;0)$, en draait over een hoek $\theta$. Positieve hoeken draai je *tegen de klok in*, negatieve hoeken *met de klok mee*. Het punt waar je uitkomt, noemen we $P(\theta)$.

:::definition Sinus en cosinus op de eenheidscirkel
Het punt $P(\theta)$ op de eenheidscirkel heeft de coördinaten
$$P(\theta)=(\cos\theta\,;\,\sin\theta).$$
De cosinus van $\theta$ is dus de $x$-coördinaat van $P(\theta)$ en de sinus van $\theta$ is de $y$-coördinaat. De tangens is $\tan\theta=\dfrac{\sin\theta}{\cos\theta}$, voor zover $\cos\theta\ne0$.
:::

Waarom is dit een uitbreiding en geen nieuwe, andere definitie? Neem een scherpe hoek $\theta$ en teken de rechthoekige driehoek met hoekpunten $(0;0)$, $P(\theta)$ en $(\cos\theta;0)$. De schuine zijde is een straal, dus 1. De aanliggende zijde is de horizontale afstand tot de oorsprong en de overstaande zijde is de hoogte van $P$. In module 22 was $\cos\theta=\text{aanliggend}/\text{schuin}$, hier dus $\cos\theta/1=\cos\theta$: de $x$-coördinaat. Hetzelfde geldt voor de sinus. Voor scherpe hoeken levert de cirkel dus dezelfde getallen als de driehoek. Het verschil is dat de cirkel ook nog antwoord geeft als de driehoek ophoudt te bestaan.

:::example Een hoek groter dan 90°
Wat zijn $\cos135^\circ$ en $\sin135^\circ$?

De hoek van 135° ligt in het tweede kwadrant, 45° voorbij de $y$-as. Het punt $P(135^\circ)$ heeft dezelfde hoogte als $P(45^\circ)$, want het ligt er in de $y$-as gespiegeld. Tegelijk ligt het links van de $y$-as, dus zijn $x$-coördinaat is negatief. Uit module 22 weet je dat $\cos45^\circ=\sin45^\circ=\tfrac{\sqrt2}{2}$. Dus
$$P(135^\circ)=\left(-\tfrac{\sqrt2}{2}\,;\,\tfrac{\sqrt2}{2}\right),\qquad \cos135^\circ=-\tfrac{\sqrt2}{2},\quad \sin135^\circ=\tfrac{\sqrt2}{2}.$$
Je ziet dat de sinus positief is en de cosinus negatief. Dat patroon verklaren we volledig in les 3.
:::

## Meerdere omwentelingen en negatieve hoeken

Na een volle draai van 360° sta je weer op dezelfde plek. Het punt $P(390^\circ)$ is dus gelijk aan $P(30^\circ)$, en $P(750^\circ)=P(30^\circ)$ ook. Voor negatieve hoeken draai je de andere kant op: $P(-60^\circ)$ ligt onder de $x$-as en is gelijk aan $P(300^\circ)$. In het algemeen geldt

$$P(\theta+360^\circ k)=P(\theta)\quad\text{voor elk geheel getal }k.$$

Dat is het begin van periodiciteit. De getallen $\sin\theta$ en $\cos\theta$ herhalen zich dus na elke volle draai. In les 4 gebruiken we dat om de golfvorm te tekenen.

:::example Een negatieve hoek
Bepaal $\sin(-60^\circ)$ en $\cos(-60^\circ)$.

Een draai van 60° met de klok mee brengt je onder de $x$-as, in het vierde kwadrant. Spiegel je $P(60^\circ)=\left(\tfrac12;\tfrac{\sqrt3}{2}\right)$ in de $x$-as, dan krijg je $P(-60^\circ)=\left(\tfrac12;-\tfrac{\sqrt3}{2}\right)$. Dus $\cos(-60^\circ)=\tfrac12$ en $\sin(-60^\circ)=-\tfrac{\sqrt3}{2}$. Dezelfde plek bereik je met $+300^\circ$, want $-60^\circ+360^\circ=300^\circ$.
:::

Gebruik de widget om dit te verkennen. Sleep de hoek over meer dan één omwenteling en kijk wat er met de coördinaten gebeurt. Vergelijk 30°, 390° en −330°: ze komen op hetzelfde punt uit.

{{ widget: unit-circle angle="30" }}

{{ exercises: 27-001, 27-002, 27-003, 27-031 }}

:::warning Wat dit nog niet is
Tot nu toe meten we hoeken in graden. In de volgende les zie je dat wiskundigen voor functies een andere eenheid gebruiken, de radiaal, en waarom dat veel natuurlijker is. Je rekenmachine moet dan wel in de juiste stand staan.
:::

## Wat je in deze module leert

{{ goals }}

## Kernbegrippen

{{ glossary }}
