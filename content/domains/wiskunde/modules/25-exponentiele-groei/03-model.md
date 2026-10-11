# Een formule opstellen

Je kunt een exponentiële rij stap voor stap uitrekenen, maar je wilt ook kunnen zeggen hoeveel er is na 40 stappen zonder 40 vermenigvuldigingen te doen. Daarvoor is een formule nodig, en die ligt dicht bij wat je al weet over machten.

## De formule $N(t)=b\cdot g^t$

Neem een beginwaarde $b$ en een groeifactor $g$ per tijdseenheid. Na 1 tijdseenheid is er $b\cdot g$, na 2 is er $b\cdot g\cdot g=b\cdot g^2$, na 3 is er $b\cdot g^3$. Zo ontstaat:

:::formula Exponentieel model
$$N(t) = b\cdot g^t\qquad(b>0,\ g>0)$$
Hierin is $t$ de tijd, gemeten in de tijdseenheid waar $g$ bij hoort, $b=N(0)$ de beginwaarde en $g$ de groeifactor per tijdseenheid. In veel boeken schrijft men $N_0$ in plaats van $b$; het is dezelfde grootheid.
:::

Twee controles kun je altijd doen. Voor $t=0$ krijg je $b\cdot g^0=b$, want $g^0=1$: de beginwaarde. Voor $t=1$ krijg je $b\cdot g$: één vermenigvuldiging. Als je formule deze twee controles niet doorstaat, is hij fout.

| $t$ | 0 | 1 | 2 | 3 | 4 |
|---|---|---|---|---|---|
| $N(t)=100\cdot1{,}2^t$ | 100 | 120 | 144 | 172,8 | 207,36 |

De formule hoort bij een **tijdseenheid**. Is $g$ de factor per uur, dan is $t$ in uren. Een formule zonder vermelde eenheid is onvolledig: $N(2)$ betekent twee uur, twee dagen of twee jaar, en dat maakt een enorm verschil.

:::example Formule opstellen uit een verhaal
Een bacteriekolonie telt 500 cellen en groeit 8% per uur. Hoeveel cellen zijn er na 5 uur?

Stap 1: $b=500$ en $g=1+8/100=1{,}08$ per uur.

Stap 2: $N(t)=500\cdot1{,}08^t$, met $t$ in uren.

Stap 3: $N(5)=500\cdot1{,}08^5=500\cdot1{,}4693\approx734{,}7$.

Het model geeft dus ongeveer 735 cellen. Merk op dat lineair doortrekken ($500+5\cdot40=700$) een te lage uitkomst oplevert: bij groei over groei komt er steeds meer bij.
:::

## Terugrekenen naar de beginwaarde

Soms ken je niet $N(0)$ maar een latere waarde. Omdat $N(t)=b\cdot g^t$, is $b=N(t)/g^t$.

:::example Terug naar het begin
Een hoeveelheid is na 2 uur 144 en groeit met factor 1,2 per uur.

Stap 1: $N(2)=b\cdot1{,}2^2=b\cdot1{,}44=144$.

Stap 2: $b=144/1{,}44=100$.

De passende formule is $N(t)=100\cdot1{,}2^t$. Dezelfde redenering, maar dan twee stappen terug, werkt ook: $144/1{,}2=120$, en $120/1{,}2=100$.
:::

## De factor uit twee waarnemingen

Ken je twee waarnemingen op verschillende tijden, dan is hun verhouding de factor over de tussenliggende periode. Bij $N(1)=150$ en $N(3)=216$ zit er een periode van 2 uur tussen, dus:

$$g^2=\frac{216}{150}=1{,}44\quad\Rightarrow\quad g=\sqrt{1{,}44}=1{,}2.$$

Hier neem je de positieve wortel, omdat een negatieve factor in dit model niet wordt gebruikt. Daarna vind je $b$ uit $N(1)=b\cdot1{,}2=150$, dus $b=125$. Controle: $N(3)=125\cdot1{,}2^3=125\cdot1{,}728=216$. ✓

Deze volgorde is steeds hetzelfde: eerst de verhouding van de twee waarden, dan de wortel (of macht) om de factor per tijdseenheid te krijgen, dan de beginwaarde, en tot slot de controle op **beide** gegeven waarden. De controle vangt het meest voorkomende slordigheidsfout: een verkeerd getelde periode tussen de twee metingen.

:::warning Verschil in plaats van verhouding
Wie bij $N(1)=150$ en $N(3)=216$ het verschil $216-150=66$ neemt en daarmee "33 per uur" berekent, past een lineair model toe. Bij een exponentieel model deel je. Een tweede valkuil: de factor over twee uur, 1,44, is nog niet de factor per uur. Dat is pas na het nemen van de wortel.
:::

## De grafiek van $y=b\cdot g^x$

De grafiek van een exponentieel model heeft een herkenbare vorm. Experimenteer met de schuifregelaars: verander $g$ en $b$ en kijk wat er met de grafiek gebeurt.

{{ widget: function-plot fn="b*g^x" b="100" bmin="10" bmax="300" bstep="10" g="1.2" gmin="0.5" gmax="1.6" gstep="0.05" xmin="-5" xmax="10" ymin="0" ymax="500" }}

Je ziet een aantal vaste kenmerken:

- De grafiek snijdt de verticale as in $(0;\,b)$, omdat $g^0=1$.
- Bij $g>1$ stijgt de grafiek steeds steiler; bij $0<g<1$ daalt hij, steeds langzamer.
- De grafiek komt nooit onder de $x$-as. Bij $g>1$ nadert hij naar links toe de lijn $y=0$, bij $0<g<1$ nadert hij die lijn naar rechts toe. Die lijn heet een **horizontale asymptoot**: de grafiek komt er willekeurig dicht bij, maar raakt of snijdt hem niet.
- Bij $g=1$ is de grafiek een horizontale lijn op hoogte $b$.

Voor een positieve beginwaarde en positieve factor is de functiewaarde altijd positief. Een vervalmodel nadert nul, maar bereikt nul niet op een eindig tijdstip. In een echte telcontext kan afronden of een detectiegrens wel betekenen dat iets als nul wordt geregistreerd: bij 3 resterende atomen en factor 0,5 is er na enkele stappen echt nul atomen, en dat is dan geen eigenschap van het wiskundige model maar van het feit dat je aantallen niet in stukjes kunt delen.

:::tip Vorm onthouden
Een exponentiële grafiek herken je aan twee dingen: de waarde nadert nul aan één kant (de asymptoot) en gaat aan de andere kant steeds sneller omhoog. Een parabool of rechte lijn doet dat niet. Vergelijk dit met een lineaire functie: daar is het verschil per stap constant, hier de verhouding.
:::

## Oefenen

{{ exercises: 25-010, 25-011, 25-012, 25-013, 25-014, 25-032 }}
