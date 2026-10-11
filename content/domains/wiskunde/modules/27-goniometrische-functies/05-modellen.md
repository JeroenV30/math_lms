# Amplitude, evenwichtsstand en fase

De grafiek van $y=\sin x$ heeft amplitude 1, evenwichtsstand 0 en periode $2\pi$. Dat is een mooie standaardgolf, maar geen enkel echt verschijnsel houdt zich eraan. Een getij schommelt rond een gemiddelde waterstand van enkele meters, niet rond nul. De temperatuur varieert met een paar graden, niet met precies één. En de golf begint niet op het moment dat jij toevallig begint met meten. Om de sinus aan de werkelijkheid aan te passen, heb je vier knoppen nodig. Elke knop doet iets anders met de grafiek, en dat kun je afzonderlijk begrijpen.

## De algemene sinusoïde

Een golf die je met vier getallen kunt instellen, schrijf je als

$$y=a+b\sin\bigl(c\,(x-d)\bigr).$$

Dit noemen we een **sinusoïde**. Elke parameter heeft een eigen taak. Je ontdekt ze door ze een voor een toe te voegen aan $y=\sin x$.

- **$a$ verschuift omhoog of omlaag.** De grafiek golft nu rond de lijn $y=a$. Dat is de **evenwichtsstand** (ook wel middenlijn of middenhoogte).
- **$b$ rekt uit in verticale richting.** De golf gaat nu $|b|$ boven en onder de evenwichtsstand. Dat is de **amplitude**. Is $b$ negatief, dan wordt de golf bovendien gespiegeld: de grafiek daalt eerst.
- **$c$ rekt in horizontale richting.** De **periode** is $T=\tfrac{2\pi}{|c|}$. Een grotere $c$ geeft een snellere golf.
- **$d$ verschuift naar rechts.** Dit is de **faseverschuiving**. De golf die normaal bij $x=0$ door de evenwichtsstand stijgt, doet dat nu bij $x=d$.

:::formula Eigenschappen van een sinusoïde
Voor $y=a+b\sin\bigl(c(x-d)\bigr)$ met $b\ne0$ en $c\ne0$:
$$\text{evenwichtsstand}=a,\qquad\text{amplitude}=|b|,\qquad\text{periode}=\frac{2\pi}{|c|},\qquad\text{bereik}=[\,a-|b|\,;\,a+|b|\,].$$
Het maximum is $a+|b|$ en het minimum $a-|b|$.
:::

![Een sinusoïde met evenwichtsstand, amplitude, periode en fase](/images/diagrams/m27-sinusparameters.svg "De vier parameters van y = a + b sin(c(x − d)) in één grafiek. Eigen diagram.")

Gebruik de widget om dit te verkennen. Verander één regelaar tegelijk en kijk wat er met de grafiek gebeurt. Let vooral op wat *niet* verandert: de vorm van de golf, alleen haar positie en afmetingen.

{{ widget: function-plot fn="a + b*sin(c*(x - d))" a="10" amin="0" amax="15" b="3" bmin="-5" bmax="5" c="0.5" cmin="0.2" cmax="2" d="2" dmin="-4" dmax="6" xmin="0" xmax="24" ymin="0" ymax="20" }}

## Een sinusoïde aflezen

In de praktijk heb je meestal een grafiek of enkele meetpunten en moet je de parameters *vinden*. Dat gaat altijd in dezelfde volgorde.

1. **Evenwichtsstand:** $a=\tfrac{\text{maximum}+\text{minimum}}{2}$.
2. **Amplitude:** $|b|=\tfrac{\text{maximum}-\text{minimum}}{2}$.
3. **Periode:** de afstand tussen twee opeenvolgende maxima (of twee minima). Dan volgt $c=\tfrac{2\pi}{T}$.
4. **Fase:** een punt waar de grafiek stijgend door de evenwichtsstand gaat, geeft $d$. Ligt een maximum bij $x_m$, dan is $d=x_m-\tfrac T4$.

:::example Een temperatuurverloop
Op een weerstation ligt de laagste temperatuur van de dag, 4 °C, om 4 uur 's nachts en de hoogste, 16 °C, om 16 uur. Het verloop is bij benadering een sinus. Stel een model op.

Stap 1: $a=\tfrac{16+4}{2}=10$ en $|b|=\tfrac{16-4}{2}=6$. Dus $a=10$ en $b=6$.
Stap 2: tussen het minimum en het volgende minimum zit 24 uur, dus $T=24$ en $c=\tfrac{2\pi}{24}=\tfrac\pi{12}$.
Stap 3: de golf stijgt door de evenwichtsstand precies halverwege het minimum (4 uur) en het maximum (16 uur), dus op $x=10$. Dus $d=10$.

Het model is $y=10+6\sin\bigl(\tfrac\pi{12}(x-10)\bigr)$. Controle: bij $x=16$ is het argument $\tfrac\pi{12}\cdot6=\tfrac\pi2$, dus $y=10+6=16$, en bij $x=4$ is het argument $-\tfrac\pi2$, dus $y=10-6=4$. Het model voldoet.
:::

:::warning Amplitude en evenwichtsstand niet verwisselen
Bij $y=4+9\sin(x)$ is de evenwichtsstand 4 en de amplitude 9, niet andersom. Een goede controle: de amplitude is een *afstand* en dus nooit negatief, terwijl de evenwichtsstand een *hoogte* is. Het bereik is $[4-9;4+9]=[-5;13]$.
:::

## Fase en meerdere beschrijvingen

Een golf kun je op veel manieren opschrijven. Omdat de sinus periodiek is, mag je de verschuiving $d$ met een heel aantal perioden verplaatsen: $d$ en $d+T$ beschrijven dezelfde functie. Ook de cosinus is een sinus met een andere verschuiving: $\cos x=\sin\left(x+\tfrac\pi2\right)$. En een negatieve $b$ is equivalent met een verschuiving over een halve periode, want $-\sin\theta=\sin(\theta+\pi)$. Je hoeft dus niet bang te zijn dat je "het verkeerde" model hebt als jouw antwoord anders is dan dat van de docent, zolang de grafiek dezelfde is.

Lees ook de binnenste expressie zorgvuldig. In $\sin(2x-4)$ staat het getal 4 niet voor een verschuiving van 4, want $\sin(2x-4)=\sin\bigl(2(x-2)\bigr)$. De verschuiving is $d=2$. Haal altijd eerst de factor $c$ buiten haakjes voordat je $d$ afleest.

:::example Een getijdemodel
Een zeeniveau volgt $h(t)=2{,}5+1{,}5\sin\bigl(\tfrac{2\pi}{12{,}4}(t-1)\bigr)$ (in meters en uren). Wat zijn de evenwichtsstand, de amplitude en de periode, en wat is het hoogste niveau?

De evenwichtsstand is 2,5 m, de amplitude 1,5 m en de periode 12,4 uur. Het hoogste niveau is $2{,}5+1{,}5=4{,}0$ m en het laagste $1{,}0$ m. Het eerste hoogwater na $t=0$ treedt op als het argument $\tfrac\pi2$ is: $t-1=\tfrac{12{,}4}{4}=3{,}1$, dus $t=4{,}1$ uur.
:::

Merk op dat $T=12{,}4$ uur voor een getijdemodel een realistische periode is, omdat de maan in ongeveer 24 uur en 50 minuten om de aarde loopt en er per dag twee hoog- en laagwaters zijn. Dat is een reden waarom het getij zo goed met een sinus te beschrijven valt, al is het exacte verloop in werkelijkheid ingewikkelder: veel getijden zijn een som van meerdere golven.

{{ exercises: 27-017, 27-018, 27-019, 27-020, 27-021, 27-038 }}
