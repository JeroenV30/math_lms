# Meten, modelleren en controleren

Nu je de gereedschappen hebt, is het tijd ze te gebruiken op problemen waar geen schets bij staat. In de praktijk begint goniometrie met een situatie, niet met een driehoek. De wiskundige stap is het vertalen van de situatie naar een model: welke driehoek past hierbij, wat is de hoek, welke zijde is gegeven? Daarna volgt de berekening, en ten slotte, net zo belangrijk, de vraag of de uitkomst betrouwbaar is. Deze les is daarom een oefening in modelleren en in kritisch kijken.

## De toren uit de inleiding

Terug naar de toren. Je staat op 20 meter afstand, kijkt onder 35° naar de top en je oog bevindt zich 1,60 meter boven de grond. Wat is de hoogte?

:::example De torenhoogte
*Model.* Neem aan dat de toren verticaal staat op horizontale grond, dat je kijklijn naar de top rechtlijnig is en dat je de afstand horizontaal hebt gemeten. De horizontale afstand is dan de aanliggende zijde, A = 20. Het hoogteverschil tussen je oog en de top is de overstaande zijde O.

*Berekening.* Je kent A en zoekt O: tangens. $\tan35^\circ = \dfrac{O}{20}$, dus $O = 20\tan35^\circ \approx 14{,}00$ meter.

*Terugvertalen.* Dat is het verschil boven *ooghoogte*. De torenhoogte is $14{,}00 + 1{,}60 = 15{,}60$ meter.
:::

Dit voorbeeld toont hoe een schijnbaar eenvoudige vraag drie stappen bevat: modelleren, rekenen, terugvertalen. Vergeet je de laatste stap (de ooghoogte erbij optellen), dan krijg je een antwoord dat netjes uit de berekening rolt maar niet bij de vraag past. Dat is een van de vaakst gemaakte fouten bij indirect meten.

{{ exercises: 22-025, 22-036 }}

## Hoe nauwkeurig is zo'n meting?

Het antwoord 15,60 meter lijkt precies, maar de invoer is dat niet. Een eenvoudige hoekmeter geeft de hoek hoogstens op een graad nauwkeurig. Bereken wat er gebeurt als de hoek 1° afwijkt:

$$20\tan34^\circ\approx13{,}49\quad\text{tegenover}\quad20\tan36^\circ\approx14{,}53.$$

Een afwijking van 1° in de hoek geeft dus een verschil van ongeveer 0,5 meter, boven en onder, in de berekende hoogte. Eén decimaal op een centimeter zou hier schijnprecisie zijn. Een eerlijke conclusie is: de toren is ongeveer 15,6 meter hoog, met een onzekerheid van een halve meter.

Ook de afstand speelt mee. Hoe steiler je kijklijn, hoe gevoeliger de uitkomst voor een kleine hoekfout. Bij 10° geeft 1° meer of minder een verschil in tan van ongeveer 0,018; bij 80° is het verschil in tan ongeveer 0,6. De tangens groeit bij steile hoeken zeer snel (tan 80° ≈ 5,67, tan 81° ≈ 6,31), dus een kleine fout in de hoek werkt dan sterk door. Dit is een goede reden om een hoogte niet vanaf te dichtbij te meten: kies een afstand waarbij de hoek tussen ongeveer 30° en 60° ligt.

:::tip Hoeveel decimalen?
Meld een uitkomst met niet meer cijfers dan de invoer rechtvaardigt. Een hoek op een graad nauwkeurig en een afstand op een decimeter geven een hoogte die je op ongeveer een halve meter kunt vertrouwen, niet op een centimeter. Bij opgaven in deze module wordt wel om twee decimalen gevraagd, zodat je rekenmethode controleerbaar is; in een echte meting zou je afronden op wat de metingen toelaten.
:::

## Schuin of horizontaal?

Een veelvoorkomende verwarring: een afstand kan horizontaal gemeten zijn of langs een helling. Een kabel van 10 meter onder 30° met de horizontaal heeft een horizontale projectie van $10\cos30^\circ\approx8{,}66$ meter, niet 10 meter. De hoogte is $10\sin30^\circ=5$ meter. Een navigatiesysteem dat 'afstand over de weg' geeft en een kaart die de afstand 'hemelsbreed' toont, rekenen precies zo met verschillende zijden van dezelfde driehoek.

:::example Een trap
Een rechte trap moet een hoogteverschil van 3,20 meter overbruggen onder een hoek van 38° met de horizontaal. Hoe lang is de trapboom (de schuine lengte)?

De hoogte is de overstaande zijde, O = 3,20. De trapboom is de schuine zijde. O en S: sinus. $\sin38^\circ = \dfrac{3{,}20}{S}$, dus $S = \dfrac{3{,}20}{\sin38^\circ} \approx 5{,}20$ meter. De horizontale ruimte die de trap inneemt is $A = \dfrac{3{,}20}{\tan38^\circ} \approx 4{,}10$ meter.
:::

{{ exercises: 22-026, 22-027, 22-037 }}

## Hellingen en wegen

Een verkeersbord dat '10%' toont, vertelt je dat de weg 10 meter stijgt per 100 meter horizontaal: een hoek van ongeveer 5,71°. Het is verleidelijk te denken dat 10% ook een hoek van 10° is. Dat is niet zo: een hoek van 10° geeft ruim 17,6%. Gebruik de omrekening $\theta=\arctan(p/100)$ en $p=100\tan\theta$.

{{ exercises: 22-028, 22-029 }}

## Twee meetpunten

Soms kun je de afstand tot de voet van een object niet meten, omdat je er niet bij kunt: een toren op een eiland, een hoge schoorsteen achter een hek. Een slimme oplossing is om op twee punten in één lijn met het object te meten. Je meet de hoogtehoek vanaf twee posities en gebruikt het verschil in afstand, dat je wel kunt meten.

:::example Twee hoeken, één onbekende afstand
Vanaf punt P is de hoogtehoek naar de top van een toren 30°. Je loopt 20 meter recht op de toren af naar punt Q en meet daar 45°. We negeren de ooghoogte. Hoe hoog is de toren?

Noem de afstand van Q tot de voet van de toren $x$ en de hoogte $h$. Vanuit Q geldt $\tan45^\circ=\dfrac{h}{x}$, dus $h=x$. Vanuit P is de afstand $x+20$, dus $\tan30^\circ=\dfrac{h}{x+20}$ en dus $h=(x+20)\tan30^\circ$.

Omdat $h=x$ krijg je $x=(x+20)\tan30^\circ$. Werk uit: $x-x\tan30^\circ=20\tan30^\circ$, dus $x=\dfrac{20\tan30^\circ}{1-\tan30^\circ}\approx\dfrac{11{,}547}{0{,}4226}\approx27{,}32$ meter. De toren is dus ongeveer 27,32 meter hoog.
:::

Dit is het eerste voorbeeld in deze module waarbij je een vergelijking met één onbekende opstelt uit twee driehoeken. De stappen zijn altijd: noem de onbekende, schrijf voor elke driehoek een verhouding op, en elimineer de afstand die je niet kent.

## Aannames en grenzen van het model

Elk model heeft aannames. Bij de toren: de grond is horizontaal, de toren verticaal, je meetinstrument horizontaal gehouden, de lichtstralen rechtlijnig. Bij grote afstanden (kilometers) speelt de kromming van de aarde mee, en moet je er rekening mee houden dat de horizon niet recht is. Bij schaduwen in de zon is de zonnehoogte een gemiddelde, want de zon is geen punt. Het is geen kwestie van 'het model is fout', maar van 'het model is goed genoeg voor deze nauwkeurigheid'.

Een laatste herinnering: de formules in deze module gelden voor rechthoekige driehoeken. Is de driehoek niet rechthoekig, dan kun je hem soms in twee rechthoekige driehoeken verdelen met een hoogtelijn; in een later hoofdstuk volgen de sinus- en cosinusregel voor willekeurige driehoeken.

:::challenge Eén meting, verschillende controles
Een ladder van 10 meter staat onder 60° tegen een verticale wand op een horizontale vloer. Bereken de horizontale afstand en hoogte, rond beide op twee decimalen af en controleer Pythagoras met ongeronde waarden. Welke aannames over de ladder en ondergrond gebruik je?
:::

{{ exercises: 22-030, 22-040 }}
