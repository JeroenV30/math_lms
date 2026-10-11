# Breuken in vergelijkingen

Breuken maken een vergelijking er al snel ingewikkeld uit: $\tfrac{x}{2} + \tfrac{x}{3} = 5$ ziet er minder vriendelijk uit dan $5x = 30$. Toch zijn het dezelfde vergelijkingen, op een factor na. In deze les leer je één krachtige zet: **vermenigvuldig de hele vergelijking met de noemer**, zodat alle breuken in één keer verdwijnen. Dat is gewoon balansregel 3 uit les 2: beide kanten met hetzelfde getal (niet nul) vermenigvuldigen. Het enige waar je op moet letten is dat werkelijk **elke term** die factor krijgt.

## 1. Eén noemer

Bekijk $\tfrac{x}{4} + 3 = 8$. Er zijn twee goede routes.

:::example Uitgewerkt voorbeeld: twee routes voor x/4 + 3 = 8
**Route A: terugrekenen.** Het recept is: $x$, gedeeld door 4, plus 3. Maak eerst de $+3$ ongedaan: $\tfrac{x}{4} = 5$. Maak dan de deling ongedaan door met 4 te vermenigvuldigen: $x = 20$.

**Route B: eerst de breuk weg.** Vermenigvuldig beide kanten met 4:
$$
4 \cdot \frac{x}{4} + 4 \cdot 3 = 4 \cdot 8 \quad\Longrightarrow\quad x + 12 = 32 \quad\Longrightarrow\quad x = 20
$$

*Controle:* $\tfrac{20}{4} + 3 = 5 + 3 = 8$. Klopt.
:::

Route B ziet er hier omslachtiger uit, maar zodra er meer breuken zijn, is het de enige route die overzichtelijk blijft. Let op het belangrijkste detail: in route B wordt **ook de 3** met 4 vermenigvuldigd. Het linkerlid is een **som** van twee termen; wie een som met 4 vermenigvuldigt, moet elke term met 4 vermenigvuldigen. Dat is de distributieve eigenschap uit module 4 en 15.

:::warning Veelgemaakte fout: één term vermenigvuldigen
Bij $\tfrac{x}{5} + 4 = 6$ schrijven veel mensen na vermenigvuldigen met 5: $x + 4 = 30$. Dan is alleen de breuk vermenigvuldigd, niet de 4. Het resultaat $x = 26$ is fout: $\tfrac{26}{5} + 4 = 9{,}2$, geen 6.

Juist is: $5 \cdot \tfrac{x}{5} + 5 \cdot 4 = 5 \cdot 6$, dus $x + 20 = 30$ en $x = 10$. *Controle:* $2 + 4 = 6$.

Zie de balans voor je: als je de linkerschaal verdubbelt, verdubbel je **alles** wat erop ligt, niet alleen het voorwerp waar je naar kijkt.
:::

## 2. De breukstreep als haakjes

In $\tfrac{x + 4}{5} = 3$ staat de breukstreep onder de **hele** som $x + 4$. De breukstreep werkt dan als haakjes: er staat $(x + 4) : 5$. Vermenigvuldig beide kanten met 5, dan valt de noemer weg en blijft de hele teller over:

$$
\frac{x + 4}{5} = 3 \quad\Longrightarrow\quad x + 4 = 15 \quad\Longrightarrow\quad x = 11
$$

*Controle:* $\tfrac{11 + 4}{5} = \tfrac{15}{5} = 3$.

Vergelijk dat met $x + \tfrac{4}{5} = 3$. Daar wordt alleen de 4 door 5 gedeeld, en de oplossing is $x = 3 - \tfrac{4}{5} = 2\tfrac{1}{5}$. Een paar millimeter breukstreep maakt dus een groot verschil. Schrijf je een breuk op één regel, gebruik dan haakjes: $(x + 4)/5$, niet $x + 4/5$.

:::example Uitgewerkt voorbeeld: (2x − 3)/5 = 3
1. Vermenigvuldig beide kanten met 5: $2x - 3 = 15$.
2. Tel aan beide kanten 3 op: $2x = 18$.
3. Deel door 2: $x = 9$.
4. *Controle:* $\tfrac{2 \times 9 - 3}{5} = \tfrac{15}{5} = 3$. Klopt.
:::

{{ exercises: 16-014, 16-017, 16-015, 16-028 }}

## 3. Meerdere noemers

Bij $\tfrac{x}{2} + \tfrac{x}{3} = 10$ staan twee verschillende noemers. Met 2 vermenigvuldigen ruimt de eerste breuk op, maar de tweede niet. Je zoekt dus een getal dat zowel door 2 als door 3 deelbaar is: een **gemeenschappelijk veelvoud**. Het kleinste is 6, het kleinste gemene veelvoud (kgv) uit module 7.

:::example Uitgewerkt voorbeeld: x/2 + x/3 = 10
1. Het kgv van de noemers 2 en 3 is 6. Vermenigvuldig **elke term** met 6:
   $$
   6 \cdot \frac{x}{2} + 6 \cdot \frac{x}{3} = 6 \cdot 10 \quad\Longrightarrow\quad 3x + 2x = 60
   $$
2. Samennemen: $5x = 60$.
3. Delen door 5: $x = 12$.
4. *Controle:* $\tfrac{12}{2} + \tfrac{12}{3} = 6 + 4 = 10$. Klopt.

Waarom $6 \cdot \tfrac{x}{2} = 3x$? Omdat $6 : 2 = 3$: de noemer gaat precies in de factor op, en het quotiënt blijft als factor bij de teller staan.
:::

Nu kun je ook het aha-probleem uit de introductie oplossen. "Een hoeveelheid en haar zevende deel, samen worden ze 19":

:::example Uitgewerkt voorbeeld: Rhind-papyrus, probleem 24
1. **Vertalen:** $x + \tfrac{x}{7} = 19$.
2. **Breuk weg:** vermenigvuldig elke term met 7: $7x + x = 133$.
3. **Samennemen:** $8x = 133$.
4. **Delen:** $x = \tfrac{133}{8} = 16\tfrac{5}{8}$.
5. *Controle:* $\tfrac{133}{8} + \tfrac{133}{56} = \tfrac{133}{8} + \tfrac{19}{8} = \tfrac{152}{8} = 19$. Klopt.

Het antwoord is geen geheel getal. Dat had je kunnen voorspellen: $x$ plus een zevende van $x$ is $\tfrac{8}{7}x$, en 19 is niet deelbaar door 8. Ahmes schreef het antwoord als som van stambreuken: $16 + \tfrac{1}{2} + \tfrac{1}{8}$. Reken maar na: $\tfrac{1}{2} + \tfrac{1}{8} = \tfrac{5}{8}$.
:::

### Een breuk aan beide kanten

Bij $\tfrac{2x + 1}{3} = \tfrac{x + 4}{2}$ staan breuken aan beide kanten. Vermenigvuldig met het kgv van 3 en 2, dus met 6:

$$
6 \cdot \frac{2x + 1}{3} = 6 \cdot \frac{x + 4}{2} \quad\Longrightarrow\quad 2(2x + 1) = 3(x + 4)
$$

Zet de tellers tussen haakjes **voordat** je vermenigvuldigt. De factor 2 hoort bij de hele teller $2x + 1$, niet alleen bij $2x$. Daarna werk je verder zoals in les 3: $4x + 2 = 3x + 12$, dus $x = 10$. *Controle:* $\tfrac{21}{3} = 7$ en $\tfrac{14}{2} = 7$.

:::tip Kruislings vermenigvuldigen
Bij één breuk links en één breuk rechts, $\tfrac{a}{b} = \tfrac{c}{d}$, levert vermenigvuldigen met $b \cdot d$ altijd $a \cdot d = b \cdot c$ op. Dat heet kruislings vermenigvuldigen. Het is een handige verkorting van de balansstap, maar gebruik haakjes zodra een teller uit meer dan één term bestaat.
:::

{{ exercises: 16-016, 16-034 }}

## 4. Kommagetallen

Een kommagetal is een verkapte breuk: $0{,}5 = \tfrac{1}{2}$ en $0{,}3 = \tfrac{3}{10}$. Daarom kun je ook kommagetallen wegwerken door de hele vergelijking met 10, 100 of een ander handig getal te vermenigvuldigen.

:::example Uitgewerkt voorbeeld: kommagetallen wegwerken
**a.** $0{,}5x - 2 = 4$. Tel 2 op: $0{,}5x = 6$. Een halve $x$ is 6, dus een hele $x$ is 12. Met de balans: vermenigvuldig beide kanten met 2, of deel door $0{,}5$: $x = 12$. Let op: delen door $0{,}5$ maakt een getal **groter**, want er gaan twee halven in één geheel.

**b.** $0{,}3x - 1{,}2 = 0{,}9$. Vermenigvuldig **elke term** met 10: $3x - 12 = 9$. Dan $3x = 21$ en $x = 7$.
*Controle:* $0{,}3 \times 7 - 1{,}2 = 2{,}1 - 1{,}2 = 0{,}9$. Klopt.
:::

{{ exercise: 16-029 }}

## 5. De onbekende in de noemer

Soms staat de onbekende zelf in een noemer, zoals in $\tfrac{12}{x} = 3$. Ook dan kun je met de noemer vermenigvuldigen, maar er is een voorwaarde: **een noemer mag nooit nul zijn**. Voor $x = 0$ heeft $\tfrac{12}{x}$ geen betekenis. Die waarde valt dus bij voorbaat af, en onder die voorwaarde mag je met $x$ vermenigvuldigen (want $x \neq 0$).

:::example Uitgewerkt voorbeeld: twee vergelijkingen met x in de noemer
**a.** $\tfrac{12}{x} = 3$, met $x \neq 0$. Vermenigvuldig beide kanten met $x$: $12 = 3x$. Dus $x = 4$.
*Controle:* $\tfrac{12}{4} = 3$, en 4 is niet nul.

**b.** $\tfrac{6}{x - 1} = 3$, met $x \neq 1$ (anders is de noemer nul). Vermenigvuldig met $x - 1$: $6 = 3(x - 1) = 3x - 3$. Dus $3x = 9$ en $x = 3$.
*Controle:* $\tfrac{6}{3 - 1} = \tfrac{6}{2} = 3$, en de noemer is niet nul.
:::

Een vergelijking met de onbekende in de noemer is strikt genomen geen lineaire vergelijking meer. Na het vermenigvuldigen kan er wel een lineaire uitkomen, maar soms ook een met $x^2$. Die komen in module 21 aan bod. Onthoud voor nu vooral de gewoonte: noteer bij elke noemer met een letter de voorwaarde, en controleer aan het eind of je oplossing die voorwaarde niet schendt.

{{ exercise: 16-018 }}
