# Snijpunten en maximale oppervlakte

Tot nu toe was de wiskunde van deze module schoon: een formule, een parabool, een oplossing. In de praktijk begint het werk één stap eerder, bij het omzetten van een situatie in een formule, en eindigt het één stap later, bij de vraag of je antwoord in de situatie past. In deze les oefen je beide. Je ziet drie typische contexten (een worp, een omheining, een winstfunctie) en je lost een meetkundige vraag op: waar snijdt een lijn een parabool?

## Snijpunten van een lijn en een parabool

Twee grafieken snijden elkaar waar ze dezelfde $y$-waarde hebben. Stel je de functies gelijk aan elkaar en je krijgt een vergelijking voor de $x$-coördinaten van de snijpunten. Daarna bereken je de $y$-coördinaat door de gevonden $x$ in één van beide formules in te vullen.

:::example Een lijn die een parabool snijdt
Bepaal de snijpunten van $y=x^2-2x-3$ en $y=x+1$.

1. Stel gelijk: $x^2-2x-3=x+1$.
2. Breng alles naar links: $x^2-3x-4=0$.
3. Ontbind: $(x-4)(x+1)=0$, dus $x=4$ of $x=-1$.
4. Vul in in de lijn: $y=4+1=5$ en $y=-1+1=0$.
5. De snijpunten zijn $(4;5)$ en $(-1;0)$.

Controle in de parabool: $4^2-8-3=5$ en $(-1)^2+2-3=0$.
:::

Het aantal snijpunten volgt de discriminant van de nieuwe vergelijking. Een lijn kan een parabool in twee punten snijden, hem in één punt raken (dan is $D=0$) of hem missen.

:::example Een raaklijn
Snijdt de lijn $y=2x-1$ de parabool $y=x^2$?

1. Stel gelijk: $x^2=2x-1$, dus $x^2-2x+1=0$.
2. $D=(-2)^2-4\cdot1\cdot1=0$: er is precies één oplossing, $x=1$.
3. Het punt is $(1;1)$. De lijn raakt de parabool in dat punt zonder hem door te snijden.
:::

## Een worp: tijd en hoogte

Een bal die je omhoog gooit, volgt onder de zwaartekracht (en bij verwaarloosbare luchtweerstand) een kwadratische hoogtefunctie van de tijd. Het teken van $a$ is negatief: de bal stijgt, bereikt een hoogste punt en daalt.

:::example De hoogte van een bal
Een bal wordt vanaf 15 m hoogte omhoog gegooid. De hoogte in meters op tijdstip $t$ in seconden is $h(t)=-5t^2+10t+15$.

*Wanneer is de bal op het hoogste punt, en hoe hoog is dat?* De topinvoer is $t=-\dfrac{10}{2\cdot(-5)}=1$ en $h(1)=-5+10+15=20$. Na 1 seconde is de bal 20 m hoog.

*Wanneer raakt de bal de grond?* Stel $h(t)=0$: $-5t^2+10t+15=0$. Deel door $-5$: $t^2-2t-3=0$, dus $(t-3)(t+1)=0$ en $t=3$ of $t=-1$. Het model begint op $t=0$; een negatieve tijd is voor deze worp zinloos. De bal komt na 3 seconden op de grond.
:::

Let op wat hier gebeurde: de wiskundige oplossing had twee getallen, maar de situatie liet er één over. Dat is geen foutje in de wiskunde, maar de manier waarop een model werkt. De parabool bestaat voor alle $t$; de bal alleen vanaf het moment van gooien tot de landing. Het **contextdomein** is dus $0\le t\le3$.

## Een omheining: een maximum zoeken

De klassieke vraag is de beste verdeling van een vaste hoeveelheid hek. De oplossing volgt een vast stramien: kies een variabele, druk de andere afmeting erin uit, schrijf de oppervlakte als kwadratische functie en bepaal de top.

:::example Een weide tegen een muur
Je hebt 36 m hek en wilt drie zijden van een rechthoek omheinen; de vierde zijde is een muur. Noem de twee zijden loodrecht op de muur $x$ (in meters).

1. De zijde evenwijdig aan de muur is $36-2x$.
2. De oppervlakte is $A(x)=x(36-2x)=-2x^2+36x$.
3. De topinvoer is $x=-\dfrac{36}{2\cdot(-2)}=9$ en $A(9)=9\cdot18=162$.
4. Domein: beide zijden moeten positief zijn, dus $x>0$ en $36-2x>0$, dus $0<x<18$. De waarde $x=9$ ligt daarin.

De maximale oppervlakte is $162\ \text{m}^2$, met zijden 9 m en 18 m. De lange zijde is twee keer zo lang als de korte: dat geldt trouwens bij elke hoeveelheid hek tegen een muur.
:::

:::question Een tegen de muur geen vierkant?
Bij een rechthoek met een vaste omtrek zonder muur is het vierkant het beste, zoals je in de vorige oefeningen zag. Bij hek tegen een muur is dat niet zo. Kun je in woorden uitleggen waarom het hek langs de muur het dubbele moet zijn?
:::

## Een winstfunctie

Een winkelier verkoopt een product voor een prijs $p$ (in euro) en koopt het in voor € 6. Hij weet dat hij bij prijs $p$ ongeveer $80-2p$ stuks per week verkoopt. De winst per week is dan het product van winst per stuk en aantal:
$$W(p)=(p-6)(80-2p).$$
Dit is al in productvorm! De nulpunten lees je direct af: bij $p=6$ is de winst nul (hij verkoopt tegen inkoopprijs) en bij $p=40$ is de winst nul (niemand koopt meer). De top ligt midden daartussen, bij $p=23$, en daar is $W(23)=17\cdot34=578$. De maximale wekelijkse winst is € 578.

Het is deze gewoonte om "eerst de productvorm, dan het midden van de nulpunten" die je veel rekenwerk bespaart.

## Controleer altijd het domein

Een top die buiten het toegestane gebied ligt, is niet het maximum van de situatie. Is het domein een gesloten interval, bijvoorbeeld $2\le x\le4$ terwijl de top bij $x=5$ ligt, kijk dan naar de randen: de grootste of kleinste waarde op het interval ligt dan op één van de randpunten. Controleer daarom in een toepassing altijd drie dingen:

1. Is de oplossing positief, als het een lengte, tijd of aantal is?
2. Ligt de top binnen het domein van de situatie?
3. Heeft je antwoord de juiste eenheid en een zinnige afronding?

:::challenge Een begrensd ontwerp
Je hebt 24 meter hek voor drie zijden van een rechthoek tegen een muur. De twee korte zijden heten $x$; de andere zijde is $24-2x$. Geef de formule voor de oppervlakte en bepaal de maximale oppervlakte en bijbehorende afmetingen. Het model verwaarloost de breedte van het hek en eist positieve zijden.
:::

Aan het eind van de les vind je ook een winstopgave en een opgave waarin je zelf een formule moet opstellen uit nulpunten en een punt op de grafiek.

{{ exercises: 21-025, 21-026, 21-027, 21-028, 21-029, 21-039, 21-030, 21-040, 21-041 }}
