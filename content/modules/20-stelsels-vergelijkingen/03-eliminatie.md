# Een onbekende laten verdwijnen

Substitutie vervangt een onbekende. **Eliminatie** doet iets anders: ze laat een onbekende *verdwijnen* door de twee vergelijkingen te combineren. Het woord komt van het Latijnse *eliminare*, 'over de drempel zetten'. Je zet een onbekende buiten de deur, en wat overblijft is een vergelijking met één onbekende. Deze methode is de oudste van de twee. Ze ligt ten grondslag aan de Chinese rekenmethode die je in les 6 ontmoet, en aan de manier waarop computers tegenwoordig stelsels met duizenden onbekenden oplossen.

## Optellen en aftrekken

Het uitgangspunt is een eenvoudige regel over gelijkheden. Als $A = B$ en $C = D$, dan geldt ook $A + C = B + D$ en $A - C = B - D$. Je mag twee gelijkheden dus links en rechts optellen of aftrekken. Dat klinkt vanzelfsprekend: telt je twee gelijke gewichten bij twee andere gelijke gewichten op, dan blijft de balans in evenwicht.

Neem $2x + y = 11$ en $3x - y = 9$. In de eerste staat $+y$, in de tweede $-y$. Tel je beide vergelijkingen op, dan heffen die termen elkaar op:

$$
\begin{array}{rcl}
2x + y &=& 11 \\
3x - y &=& 9 \\
\hline
5x &=& 20
\end{array}
$$

Dus $x = 4$. Vul dit in een van de oorspronkelijke vergelijkingen in, bijvoorbeeld $2 \cdot 4 + y = 11$, en je vindt $y = 3$. De oplossing is $(4; 3)$.

Bij **tegengestelde** coëfficiënten (zoals $+y$ en $-y$) tel je op. Bij **gelijke** coëfficiënten (zoals $+3x$ en $+3x$) trek je af. Ga bij het aftrekken zorgvuldig te werk: je trekt de *hele* tweede vergelijking af, dus ook de termen waar een minteken in staat.

:::example Aftrekken bij gelijke coëfficiënten
Los op: $3x + 2y = 16$ en $3x - y = 7$.

De $x$-coëfficiënten zijn gelijk, dus trek je de tweede van de eerste af. Links: $(3x + 2y) - (3x - y) = 3x + 2y - 3x + y = 3y$. Rechts: $16 - 7 = 9$. Dus $3y = 9$ en $y = 3$.

Vul in de tweede vergelijking in: $3x - 3 = 7$, dus $3x = 10$ en $x = \frac{10}{3}$. Controle in de eerste: $3 \cdot \frac{10}{3} + 2 \cdot 3 = 10 + 6 = 16$. De oplossing is $\left(\frac{10}{3}; 3\right)$. Een breuk als antwoord is niet erg: lang niet alle stelsels hebben gehele oplossingen.
:::

## Eerst vermenigvuldigen

Meestal zijn de coëfficiënten niet meteen gelijk of tegengesteld. Dan maak je ze dat zelf, door een of beide vergelijkingen met een getal te vermenigvuldigen. Dat mag, mits je de **hele** vergelijking vermenigvuldigt: elke term links en de rechterkant. Een vergelijking met een factor ongelijk aan nul vermenigvuldigen verandert haar oplossingen niet, net zoals je bij het oplossen van één vergelijking beide kanten met hetzelfde getal mag vermenigvuldigen.

:::example Eén vergelijking vermenigvuldigen
Los op: $2x + 3y = 16$ en $x + 2y = 10$.

Je wilt de $x$-termen laten verdwijnen. De tweede vergelijking maal 2 geeft $2x + 4y = 20$. Nu staat in beide vergelijkingen $2x$. Trek de eerste af van deze nieuwe vergelijking:

$$
\begin{array}{rcl}
2x + 4y &=& 20 \\
2x + 3y &=& 16 \\
\hline
y &=& 4
\end{array}
$$

Vul in de tweede oorspronkelijke vergelijking in: $x + 8 = 10$, dus $x = 2$. Controle in de eerste: $4 + 12 = 16$. De oplossing is $(2; 4)$, dezelfde als bij substitutie. Dat hoort ook zo: de methode verandert, het antwoord niet.
:::

:::example Beide vergelijkingen vermenigvuldigen
Los op: $2x + 3y = 18$ en $3x + 2y = 17$.

Geen van beide coëfficiëntparen is gelijk, en een van de vergelijkingen met een geheel getal vermenigvuldigen helpt niet. Dan vermenigvuldig je beide. Het kleinste gemene veelvoud van $2$ en $3$ is $6$. Vermenigvuldig de eerste met $3$: $6x + 9y = 54$. Vermenigvuldig de tweede met $2$: $6x + 4y = 34$. Trek af: $5y = 20$, dus $y = 4$. Dan volgt uit $2x + 12 = 18$ dat $x = 3$.

Je had ook de $y$-termen kunnen elimineren: eerste maal 2 en tweede maal 3 geeft $4x + 6y = 36$ en $9x + 6y = 51$. Dan is $5x = 15$ en $x = 3$. Beide routes zijn goed; kies de route met de kleinste getallen.
:::

## Waarom het stelsel gelijkwaardig blijft

Er zit een denkfout op de loer als je eliminatie te snel doet. Je vervangt in het stelsel een van de vergelijkingen door een combinatie, en je **houdt de andere vergelijking**. Het nieuwe stelsel is dan *gelijkwaardig* aan het oude: wat het ene oplost, lost het andere op. Reden: de oude vergelijking kun je uit de nieuwe combinatie en de bewaarde vergelijking terugvinden. Als je bijvoorbeeld de som van twee vergelijkingen hebt en één van beide, kun je de ander weer als verschil afleiden.

Bewaar je alleen de combinatie, dan verlies je informatie. Uit $x + y = 5$ en $x - y = 1$ volgt door optellen $2x = 6$. Maar dat ene feit is ook waar voor $(3; 2)$ als voor $(3; 100)$: het zegt niets over $y$. Je hebt een van de oorspronkelijke vergelijkingen nodig om $y$ te bepalen. Daarom vul je de gevonden $x$ altijd in een *oorspronkelijke* vergelijking in en controleer je in beide.

:::warning Een hele vergelijking vermenigvuldigen
De factor geldt voor elke term én voor de rechterkant. Uit $x + 2y = 10$ wordt na maal 2 de vergelijking $2x + 4y = 20$, niet $2x + 2y = 10$ en ook niet $2x + 4y = 10$. Een veelgemaakte fout is om alleen de linkerkant te vermenigvuldigen. Dat verandert de voorwaarde, en het resultaat is een andere vraag dan de oorspronkelijke.
:::

:::warning Tekens bij aftrekken
Bij $(3x + 2y) - (3x - y)$ trek je ook $-y$ af, en dat wordt $+y$. Het resultaat is $3y$, niet $y$. Schrijf bij twijfel het aftrekken uit als optellen van de tegengestelde vergelijking: vermenigvuldig de af te trekken vergelijking met $-1$ en tel op. Daarmee heb je maar één bewerking, optellen, en minder kans op een tekenfout.
:::

## Substitutie of eliminatie?

Hoe kies je? Een praktische vuistregel: staat er al een onbekende vrij, of heeft een onbekende coëfficiënt $1$ of $-1$ in een van de vergelijkingen, dan is substitutie meestal de kortste route. Zijn de coëfficiënten van een onbekende gelijk of tegengesteld, of kun je ze met één eenvoudige vermenigvuldiging gelijk maken, dan is eliminatie sneller. Bij beide methoden komt hetzelfde antwoord uit; de keuze gaat over gemak en over de kans op fouten.

Bij eliminatie helpt een nette notatie. Schrijf de twee vergelijkingen onder elkaar met de onbekenden in dezelfde kolommen, noteer naast de regel wat je ermee deed (zoals '$\times 2$') en trek met een streep de som of het verschil. Dat lijkt omslachtig, maar het maakt je werk controleerbaar, en het is precies de ordening waarmee de Chinese rekenaars werkten, zoals je zo meteen ziet.

:::question Elimineren in twee richtingen
Bij $3x + 2y = 16$ en $x + 2y = 10$ kun je zowel $x$ als $y$ laten verdwijnen met één bewerking. Welke is het eenvoudigst, en wat krijg je als je de andere onbekende kiest? Controleer dat beide keuzes dezelfde oplossing geven.
:::

{{ exercises: 20-008, 20-009, 20-010, 20-011, 20-012, 20-013 }}

De volgende twee oefeningen gaan over de twee bekendste valkuilen, het alleen links vermenigvuldigen en het verkeerd aftrekken van een negatieve term. Werk op papier en let op elke teken.

{{ exercises: 20-034, 20-035 }}
