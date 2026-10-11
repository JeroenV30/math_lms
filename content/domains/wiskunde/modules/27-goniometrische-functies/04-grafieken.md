# Grafieken en perioden

Nu je de cirkel kent, is de stap naar de grafiek klein. Je laat de hoek $x$ van 0 oplopen en zet bij elke $x$ de hoogte $\sin x$ van het draaiende punt uit. Wat je op de cirkel als beweging zag, wordt een kromme in een gewoon assenstelsel. In deze les lees je uit die kromme de belangrijkste eigenschappen af: bereik, nulpunten, extremen en periode.

## De sinusgrafiek

Volg het punt over de cirkel. Bij $x=0$ staat het op $(1;0)$ en is $\sin x=0$. Terwijl het omhoog loopt, stijgt $\sin x$ tot 1 bij $x=\tfrac\pi2$. Daarna zakt het punt weer: bij $x=\pi$ is de sinus 0, bij $x=\tfrac{3\pi}{2}$ is hij $-1$ en bij $x=2\pi$ is hij weer 0. De cyclus begint dan opnieuw.

| $x$ | 0 | $\pi/2$ | $\pi$ | $3\pi/2$ | $2\pi$ |
|---|---|---|---|---|---|
| $\sin x$ | 0 | 1 | 0 | $-1$ | 0 |
| $\cos x$ | 1 | 0 | $-1$ | 0 | 1 |

De grafiek van de cosinus ontstaat uit de $x$-coördinaten en begint dus bij 1. In de widget zie je beide naast elkaar. Je ziet dat de cosinusgrafiek er precies hetzelfde uitziet als de sinusgrafiek, maar dan verschoven: er geldt $\cos x=\sin\left(x+\tfrac\pi2\right)$. De cosinus is de sinus die een kwartslag vooruit is.

{{ widget: function-plot fn="sin(x)" fn2="cos(x)" xmin="-6.3" xmax="6.3" ymin="-1.5" ymax="1.5" }}

Enkele eigenschappen kun je meteen lezen:

- Het **bereik** is $[-1;1]$, omdat coördinaten op de eenheidscirkel nooit buiten die grenzen vallen.
- De sinus heeft nulpunten bij $x=k\pi$ (met $k$ geheel), de cosinus bij $x=\tfrac\pi2+k\pi$.
- De sinus heeft maxima 1 bij $x=\tfrac\pi2+2k\pi$ en minima $-1$ bij $x=\tfrac{3\pi}{2}+2k\pi$.
- De sinusgrafiek is puntsymmetrisch in de oorsprong en de cosinusgrafiek lijnsymmetrisch in de $y$-as.

## Periodiciteit

Een functie $f$ is **periodiek** met periode $T>0$ als $f(x+T)=f(x)$ voor alle $x$. Met "de periode" bedoelen we de *kleinste* positieve waarde van $T$. Voor sinus en cosinus is dat $2\pi$: na een volledige draai staat het punt weer op dezelfde plek. Elke $2\pi$ breder of smaller vormt de grafiek dus een identieke kopie. Ook $4\pi$ en $6\pi$ zijn perioden in de zin van de definitie, maar de kleinste positieve is $2\pi$.

$$\sin(x+2\pi k)=\sin x,\qquad \cos(x+2\pi k)=\cos x\qquad(k\text{ geheel}).$$

Periodiciteit levert snel antwoorden: $\sin\tfrac{13\pi}{6}=\sin\left(\tfrac\pi6+2\pi\right)=\tfrac12$. Je trekt hele perioden af tot je een hoek tussen 0 en $2\pi$ hebt.

## Tangens

De tangens, $\tan x=\tfrac{\sin x}{\cos x}$, bestaat niet waar de cosinus nul is: bij $x=\tfrac\pi2+k\pi$. Bij zulke waarden schiet de grafiek naar boven of beneden. Daar staan **verticale asymptoten**: lijnen die de grafiek steeds dichter nadert zonder ze te raken. De asymptoten horen dus niet bij de grafiek; het zijn gaten in het domein.

De periode van de tangens is $\pi$ en niet $2\pi$. Na een halve draai staat het punt op de cirkel tegenover het oorspronkelijke punt: sinus en cosinus wisselen allebei van teken, en hun quotiënt blijft gelijk. Meetkundig is $\tan x$ de helling van de straal naar $P(x)$, en die helling is voor twee tegenover elkaar liggende punten gelijk.

{{ widget: function-plot fn="tan(x)" xmin="-3.2" xmax="3.2" ymin="-4" ymax="4" }}

:::example Waarden uit de periode
Bereken $\cos\tfrac{17\pi}{3}$ en $\tan\tfrac{9\pi}{4}$.

Voor de cosinus trek je veelvouden van $2\pi$ af: $\tfrac{17\pi}{3}-2\cdot2\pi=\tfrac{17\pi}{3}-\tfrac{12\pi}{3}=\tfrac{5\pi}{3}$. Dat is het vierde kwadrant, met referentiehoek $2\pi-\tfrac{5\pi}{3}=\tfrac\pi3$. De cosinus is daar positief: $\cos\tfrac{17\pi}{3}=\cos\tfrac\pi3=\tfrac12$.

Voor de tangens mag je veelvouden van $\pi$ aftrekken: $\tfrac{9\pi}{4}-2\pi=\tfrac\pi4$. Dus $\tan\tfrac{9\pi}{4}=\tan\tfrac\pi4=1$.
:::

## Wat de binnenste factor doet

Wat gebeurt er met de periode als je $x$ vervangt door $2x$? De grafiek van $y=\sin(2x)$ doorloopt de cyclus tweemaal zo snel, dus past er twee keer zoveel golf in hetzelfde interval, en de periode wordt gehalveerd: $\pi$. Bij $y=\sin(\tfrac x2)$ gaat het juist half zo snel: de periode is $4\pi$. In het algemeen:

:::formula De periode van sin(cx)
Voor $y=\sin(cx)$ en $y=\cos(cx)$ met $c\neq0$ is de periode
$$T=\frac{2\pi}{|c|}.$$
Voor $y=\tan(cx)$ is de periode $\tfrac{\pi}{|c|}$.
:::

De redenering is eenvoudig. De sinus doorloopt een volledige cyclus als het argument $cx$ van 0 naar $2\pi$ gaat. Dat gebeurt als $x$ van 0 naar $2\pi/c$ gaat. De periode is dus $2\pi/c$ en niet $c$ zelf. Dat is een veelgemaakte fout: de factor $c$ in $\sin(cx)$ is geen periode maar een maat voor de snelheid van de golf: hoe groter $c$, hoe korter de periode.

:::warning Periode is niet c
Bij $y=\cos\left(\tfrac{\pi}{4}x\right)$ is de periode niet $\tfrac\pi4$, maar $\dfrac{2\pi}{\pi/4}=8$. Controle: bij $x=8$ is het argument $2\pi$, een volledige draai. Een snelle controle voor jezelf: een grotere factor moet een *kortere* periode geven.
:::

{{ exercises: 27-013, 27-014, 27-015, 27-016, 27-036, 27-037 }}
