# Een onbekende zijde berekenen

Je kent nu de namen van de zijden en de drie verhoudingen. Nu komt de eerste echte toepassing: uit één hoek en één zijde de andere zijden berekenen. Dat is precies wat je nodig hebt bij de toren uit de inleiding. De methode is steeds dezelfde, en als je haar stap voor stap volgt, is rekenen met sinus, cosinus en tangens niet moeilijker dan een vergelijking oplossen.

## Een vaste werkwijze

Maak er een gewoonte van om altijd dezelfde vier stappen te doorlopen.

1. **Schets en benoem.** Teken de driehoek, markeer de rechte hoek en de gegeven hoek θ. Zet O, A en S erbij en omcirkel de zijde die je kent en de zijde die je zoekt.
2. **Kies de verhouding.** Welke twee zijden komen voor in de opgave? O en S: sinus. A en S: cosinus. O en A: tangens. Het kiezen is de kern van de opgave.
3. **Stel de vergelijking op.** Schrijf bijvoorbeeld $\sin\theta = \dfrac{O}{S}$ met de bekende waarden ingevuld, *voordat* je iets op de rekenmachine intikt.
4. **Los op en controleer.** Maak de onbekende vrij, bereken, rond af en controleer of de uitkomst plausibel is.

:::example Een ladder
Een ladder van 5 meter maakt 60° met de horizontale vloer. Hoe hoog reikt hij tegen de muur, en hoe ver staat de voet van de muur?

*Stap 1.* De ladder is de schuine zijde S = 5, want hij ligt tegenover de rechte hoek tussen muur en vloer. Bij de hoek van 60° (onder tegen de vloer) is de verticale hoogte de overstaande zijde O en de horizontale afstand de aanliggende zijde A.

*Stap 2 en 3.* De hoogte O en de ladder S: sinus. Dus $\sin60^\circ = \dfrac{O}{5}$.

*Stap 4.* Vermenigvuldig beide kanten met 5: $O = 5\sin60^\circ \approx 4{,}33$ meter.

De horizontale afstand vind je met de cosinus: $A = 5\cos60^\circ = 2{,}5$ meter.

*Controle.* Pythagoras: $4{,}33^2 + 2{,}5^2 \approx 18{,}75 + 6{,}25 = 25 = 5^2$. Klopt.
:::

## De onbekende staat in de teller

Als de gezochte zijde in de teller van de verhouding staat, is het oplossen een vermenigvuldiging. Uit $\sin\theta = \dfrac{O}{S}$ volgt $O = S\sin\theta$. Uit $\cos\theta = \dfrac{A}{S}$ volgt $A = S\cos\theta$. En uit $\tan\theta = \dfrac{O}{A}$ volgt $O = A\tan\theta$.

:::example Een dak
Een dak heeft een helling van 40°. De horizontale afstand van de dakrand tot onder de nok is 12 meter. Hoe hoog ligt de nok boven de dakrand, en hoe lang is de dakbalk langs de helling?

De 12 meter ligt langs de grond, dus is dat de aanliggende zijde A bij de hoek van 40°. De hoogte is de overstaande zijde O, en de balk is de schuine zijde S.

Hoogte: A en O, dus tangens. $O = 12\tan40^\circ \approx 10{,}07$ meter.

Balk: A en S, dus cosinus. Dat is een geval met de onbekende in de noemer: $\cos40^\circ = \dfrac{12}{S}$, dus $S = \dfrac{12}{\cos40^\circ} \approx 15{,}67$ meter.

Controle: $10{,}07^2 + 12^2 \approx 101{,}4 + 144 = 245{,}4$ en $15{,}67^2 \approx 245{,}5$. Klopt, op afrondingsverschil na.
:::


Let op de formulering van het voorbeeld: de opgave bepaalt wat S, O en A zijn. Een 'afstand over de grond' is horizontaal, dus aanliggend bij een hoek met de grond; een 'lengte langs de helling' is schuin. Leer te vertalen van woorden naar zijden, want dat is hier de eigenlijke moeilijkheid.

## De onbekende staat in de noemer

Als de gezochte zijde in de noemer staat, komt de deling die je misschien niet direct verwacht. Uit $\sin\theta = \dfrac{O}{S}$ volgt $S = \dfrac{O}{\sin\theta}$ en uit $\cos\theta = \dfrac{A}{S}$ volgt $S = \dfrac{A}{\cos\theta}$. Uit $\tan\theta = \dfrac{O}{A}$ volgt $A = \dfrac{O}{\tan\theta}$.

:::example Een schuine zijde uit een overstaande zijde
In een rechthoekige driehoek is $O = 3$ en $\theta = 30^\circ$. Bereken S.

Je kent O en zoekt S, dus gebruik je de sinus: $\sin30^\circ = \dfrac{3}{S}$. Omdat $\sin 30^\circ = \tfrac12$, is $\tfrac12 = \dfrac{3}{S}$, dus $S = 6$.

Controleer met de intuïtie: bij een kleine hoek is de overstaande zijde klein ten opzichte van de schuine. Een O van 3 hoort dus bij een veel grotere S. Zou je 3 vermenigvuldigen met $\tfrac12$ en 1,5 krijgen, dan zou S korter zijn dan O, en dat kan niet, want S is de langste zijde.
:::

Dit is de plek waar de meeste fouten ontstaan: wie 'vermenigvuldigen met sinus' onthoudt, vermenigvuldigt ook als de onbekende in de noemer staat. Gebruik daarom de controle 'is S de langste zijde?'. Als S kleiner dan O of A uitkomt, heb je vermenigvuldigd waar je moest delen.

:::warning Delen of vermenigvuldigen?
Staat de onbekende in de teller van de verhouding (bijvoorbeeld $O$ in $\sin\theta = O/S$), dan vermenigvuldig je met S. Staat de onbekende in de noemer (bijvoorbeeld S), dan deel je O door de sinus. De zijden die je 'omhoog' brengt veranderen van vermenigvuldigen naar delen en omgekeerd, net als bij elke vergelijking.
:::

## De rekenmachine en graden

Een rekenmachine kent twee hoekeenheden die je kunt instellen: **DEG** (graden, in het Engels *degrees*) en **RAD** (radialen). Een radiaal is een andere manier om een hoek uit te drukken die je in module 27 leert kennen; $90^\circ$ is $\pi/2 \approx 1{,}57$ radiaal. Staat je rekenmachine op RAD terwijl je een hoek in graden intikt, dan rekent hij met een heel andere hoek.

Het verschil is groot. Als je $\sin30$ intikt in DEG-stand krijg je 0,5, zoals verwacht. In RAD-stand krijg je $\sin 30$ radiaal, ongeveer $-0{,}988$. Bij het toetsen van een uitkomst helpt een controle: $\sin 30^\circ$ moet 0,5 zijn. Test dat altijd even vooraf, zeker bij een nieuwe rekenmachine of na het herstarten van een app.

Rond bij het rekenen niet tussendoor af. Bewaar tussenuitkomsten in het geheugen van je rekenmachine, of schrijf ze op met meer decimalen dan nodig. Rond pas je *eindantwoord* af, op de gevraagde precisie. Wie in een tussenstap al afrondt op één decimaal, kan in het eindantwoord een afwijking krijgen die groter is dan het toegestane verschil.

:::tip Test je rekenmachine
Tik $\sin 30$ in. Staat er 0,5? Dan staat de machine op graden. Staat er $-0{,}988$, dan staat hij op radialen.
:::

## Een heldere controle

Je hebt twee controles tot je beschikking. Eén: de grootte. S moet langer zijn dan O en A. Twee: Pythagoras met ongeronde waarden. Voor de ladder van 5 m: $(5\sin60^\circ)^2 + (5\cos60^\circ)^2 = 25(\sin^2 60^\circ + \cos^2 60^\circ) = 25$. Dat klopt altijd, juist omdat $\sin^2\theta + \cos^2\theta = 1$. Als jouw zijden daar niet aan voldoen, is er een rekenfout of een fout in de keuze van de verhouding.

## Oefeningen

De eerste vier opgaven gebruiken hoeken waarvan je de sinus en cosinus uit het hoofd kent. In de laatste twee gebruik je de rekenmachine en rond je af op twee decimalen.

{{ exercises: 22-013, 22-014, 22-015, 22-016, 22-017, 22-018 }}
