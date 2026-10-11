# Vergelijkingen en modellen in de praktijk

Tot nu toe vroeg je bij een hoek naar de waarde: gegeven $x$, wat is $\sin x$? In de praktijk vraag je vaak het omgekeerde. Op welk moment staat het water op 3 meter? Wanneer duurt de dag langer dan veertien uur? Op welke momenten zit je in het reuzenrad hoger dan 17 meter? Dat zijn **goniometrische vergelijkingen**: je kent de functiewaarde en zoekt de hoek. In deze les leer je ze op te lossen, inclusief *alle* oplossingen binnen een gegeven interval, en je past dat toe op modellen uit de praktijk.

## Eén waarde, meerdere hoeken

Bij een rechthoekige driehoek hoort bij elke sinus precies één scherpe hoek. Op de eenheidscirkel is dat anders. Zoek je alle hoeken met $\sin x=\tfrac12$, dan zoek je alle punten op de cirkel met hoogte $\tfrac12$. Daar horizontaal tegenover liggen er *twee*: één rechts van de $y$-as (in kwadrant I) en één links (in kwadrant II).

![Twee punten met sin x = 1/2](/images/diagrams/m27-sinus-een-half.svg "De horizontale lijn y = 1/2 snijdt de cirkel in twee punten: π/6 en 5π/6. Eigen diagram.")

Het eerste punt is $x=\tfrac\pi6$. Het tweede ligt in de $y$-as gespiegeld: $x=\pi-\tfrac\pi6=\tfrac{5\pi}{6}$. Binnen één omwenteling, $[0;2\pi)$, zijn dat de twee oplossingen. Op de hele reële lijn komen daar alle gehele omwentelingen bij:

$$\sin x=\tfrac12\iff x=\tfrac\pi6+2k\pi\ \text{ of }\ x=\tfrac{5\pi}{6}+2k\pi\qquad(k\text{ geheel}).$$

Zo'n beschrijving heet een **oplossingsfamilie**: de letter $k$ loopt door alle gehele getallen en levert zo oneindig veel oplossingen. Welke daarvan je nodig hebt, hangt van het interval af.

:::formula Basisvergelijkingen
Voor $-1\le p\le1$ en $\alpha$ de hoek met $\sin\alpha=p$:
$$\sin x=\sin\alpha\iff x=\alpha+2k\pi\ \text{ of }\ x=\pi-\alpha+2k\pi.$$
Voor $\cos x=\cos\alpha$: $x=\alpha+2k\pi$ of $x=-\alpha+2k\pi$.
Voor $\tan x=\tan\alpha$: $x=\alpha+k\pi$.
:::

Een waarde buiten $[-1;1]$ heeft geen oplossing: $\sin x=2$ kan niet, want de hoogte op de cirkel is nooit meer dan 1. Bij de uiterste waarden vallen de twee families samen: $\sin x=1$ geeft alleen $x=\tfrac\pi2+2k\pi$. Tel zo'n punt niet dubbel.

## Werkwijze

Een betrouwbare werkwijze voor $\sin x=p$ of $\cos x=p$ op een gegeven interval:

1. Bepaal de **referentiehoek** $\alpha$ met $0<\alpha\le\tfrac\pi2$ en waarde $|p|$. Bij een bekende waarde gebruik je de exacte tabel, anders je rekenmachine (in RAD) met arcsin of arccos.
2. Gebruik het **teken van $p$** om de kwadranten te bepalen: een positieve sinus ligt in kwadrant I en II, een negatieve in III en IV. Voor de cosinus: positief in I en IV, negatief in II en III.
3. Schrijf in elk van die kwadranten de hoek op met de referentiehoek.
4. Voeg hele perioden toe of trek ze af, en houd alleen de oplossingen over die in het interval liggen.

:::example Een negatieve waarde
Los $\cos x=-\tfrac{\sqrt2}{2}$ op voor $0\le x<2\pi$.

De referentiehoek is $\tfrac\pi4$, want $\cos\tfrac\pi4=\tfrac{\sqrt2}{2}$. Een negatieve cosinus ligt in kwadrant II en III. Dus $x=\pi-\tfrac\pi4=\tfrac{3\pi}{4}$ of $x=\pi+\tfrac\pi4=\tfrac{5\pi}{4}$. Beide liggen in het interval. Dit zijn de twee oplossingen.
:::

:::example Met de rekenmachine
Los $\sin x=-0{,}3$ op voor $0\le x<2\pi$. Rond af op drie decimalen.

Er is geen exacte referentiehoek. Je rekenmachine (in **RAD**) geeft $\arcsin(-0{,}3)\approx-0{,}305$. Dat is de hoofdwaarde, maar een negatieve hoek valt buiten het interval. Een negatieve sinus ligt in kwadrant III en IV. De referentiehoek is $0{,}305$, dus de oplossingen zijn $x=\pi+0{,}305\approx3{,}446$ en $x=2\pi-0{,}305\approx5{,}978$. Controle: $\sin3{,}446\approx-0{,}300$ en $\sin5{,}978\approx-0{,}300$. Beide kloppen.
:::

:::warning Eén oplossing is te weinig
Een rekenmachine geeft bij arcsin altijd één hoek: de hoofdwaarde tussen $-\tfrac\pi2$ en $\tfrac\pi2$. Dat is meestal maar een van de oplossingen. Wie alleen de hoofdwaarde noteert, mist de tweede oplossing in de cirkel én alle herhalingen. Maak jezelf er een gewoonte van om altijd naar het aantal oplossingen te vragen: in één periode zijn dat er twee, tenzij de waarde $\pm1$ is.
:::

## Een binnenste hoek

Bij vergelijkingen als $\sin(2t)=\tfrac12$ staat er niet de variabele zelf in de sinus, maar een uitdrukking daarin. Het patroon is: noem de binnenste uitdrukking $u$, los voor $u$ op, en reken terug. Let op dat het interval van $u$ ook verandert!

:::example Een binnenste hoek
Los $\sin(2t)=\tfrac12$ op voor $0\le t<\pi$.

Stel $u=2t$. Uit $0\le t<\pi$ volgt $0\le u<2\pi$. De oplossingen van $\sin u=\tfrac12$ op dat interval zijn $u=\tfrac\pi6$ en $u=\tfrac{5\pi}{6}$. Dus $t=\tfrac{\pi}{12}$ of $t=\tfrac{5\pi}{12}$. Controle: $\sin\tfrac\pi6=\tfrac12$ en $\sin\tfrac{5\pi}{6}=\tfrac12$.

Neem je het interval $0\le t<2\pi$, dan loopt $u$ van 0 tot $4\pi$ en komen er twee oplossingen bij: $u=\tfrac{13\pi}{6}$ en $\tfrac{17\pi}{6}$, dus $t=\tfrac{13\pi}{12}$ en $\tfrac{17\pi}{12}$. In totaal vier oplossingen, passend bij de dubbele frequentie.
:::

{{ exercises: 27-024, 27-025, 27-026, 27-027, 27-028, 27-029, 27-040, 27-042 }}

## Modelleren: wanneer is het zo ver?

De echte kracht van de vergelijkingen zit in modellen. Je kent een sinusmodel uit les 5 en wilt weten *wanneer* iets gebeurt. Dan stel je het model gelijk aan de gevraagde waarde, werk je naar een basisvergelijking toe en volg je de werkwijze.

:::example Daglengte
Voor een bepaalde plaats is de daglengte (in uren) op dag $t$ van het jaar bij benadering
$$D(t)=12+4\sin\left(\tfrac{2\pi}{365}(t-80)\right).$$
De evenwichtsstand is 12 uur, de amplitude 4 uur en de periode 365 dagen. De langste dag is $12+4=16$ uur en de kortste 8 uur. Wanneer duurt de dag langer dan 14 uur?

Los eerst $D(t)=14$ op: $4\sin(\ldots)=2$, dus $\sin\left(\tfrac{2\pi}{365}(t-80)\right)=\tfrac12$. De binnenste hoek is dan $\tfrac\pi6$ of $\tfrac{5\pi}{6}$ (binnen één jaar). Zo is $t-80=\tfrac{365}{12}\approx30{,}4$ of $t-80=\tfrac{5\cdot365}{12}\approx152{,}1$. Dus $t\approx110{,}4$ en $t\approx232{,}1$. De sinus is groter dan $\tfrac12$ *tussen* de twee oplossingen (de golf is daar boven de lijn $y=\tfrac12$). De dag is dus langer dan 14 uur vanaf ongeveer dag 111 tot dag 232: zo'n 122 dagen. Zo'n model is slechts een benadering: zie het als een eerste schatting.
:::

:::example Een reuzenrad
Een reuzenrad heeft een middelpunt op 12 m hoogte en een straal van 10 m. Eén omwenteling duurt 20 minuten. Je stapt onderaan in op $t=0$. Je hoogte is dan $h(t)=12+10\sin\left(\tfrac{2\pi}{20}(t-5)\right)$. Controle: bij $t=0$ is het argument $-\tfrac\pi2$, dus $h=12-10=2$ m (het laagste punt, instaphoogte 2 m). Het hoogste punt, 22 m, bereik je bij $t=10$.
:::

## Een uitdaging

:::challenge Een periodieke hoogte
Een model is $h(t)=10+3\sin\left(\tfrac\pi6(t-2)\right)$ (in meters, $t$ in uren). Bepaal het eerste maximum op $t\ge0$ en de twee tijdstippen waarop $h=10$ in de halfopen cyclus $[2;14)$. Leg uit waarom het rechter eindpunt niet wordt meegeteld.
:::

{{ exercises: 27-030, 27-039 }}

:::challenge Twee keer op dezelfde hoogte
In het reuzenrad hierboven komt het hoogte-niveau van 17 meter twee keer voor in de eerste omwenteling. Bereken de twee tijdstippen op de rondgang.
:::

{{ exercises: 27-041 }}
