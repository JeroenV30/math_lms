# Standaardvorm, topvorm en productvorm

Dezelfde parabool kun je op drie manieren opschrijven. Neem
$$y=x^2-6x+8,\qquad y=(x-3)^2-1,\qquad y=(x-2)(x-4).$$
Werk je de haakjes uit, dan blijkt dat het precies dezelfde functie is. Toch zegt elke schrijfwijze iets anders. Een goede rekenaar kiest de vorm die de vraag het makkelijkst beantwoordt, en kan zo nodig van de ene vorm naar de andere omzetten. Daar gaat deze les over.

## De standaardvorm: wat doen $b$ en $c$?

In $y=ax^2+bx+c$ heb je al gezien wat $a$ doet. Hoe zit het met $c$ en $b$?

Het getal $c$ is het gemakkelijkst. Vul je $x=0$ in, dan verdwijnen de termen met $x$ en blijft $y=c$ over. De parabool snijdt de y-as dus in het punt $(0;c)$. Dat is het **snijpunt met de y-as**.

Het getal $b$ is subtieler. Het schuift de top zijwaarts, maar niet op een manier die je direct ziet. Zet je $b$ in de widget hieronder een tijdje in beweging, dan zie je dat de parabool niet gewoon opschuift: hij draait als het ware door het vaste punt $(0;c)$ terwijl de top een kromme baan beschrijft. Ook dat komt zo meteen in de formule voor de top terug.

{{ widget: function-plot fn="a*x^2 + b*x + c" a=1 amin=-3 amax=3 astep=0.5 b=-6 bmin=-10 bmax=10 bstep=1 c=8 cmin=-10 cmax=10 cstep=1 xmin=-6 xmax=10 ymin=-10 ymax=20 roots=true title="y = ax² + bx + c" }}

## De top uit de standaardvorm

Hoe vind je de top als je alleen $ax^2+bx+c$ hebt? Er is een mooie redenering die alleen de symmetrie gebruikt. Bekijk de functiewaarde bij $x=0$: die is $c$. Welke andere x-waarde geeft ook $c$? Je lost op
$$ax^2+bx+c=c\;\Longleftrightarrow\; ax^2+bx=0\;\Longleftrightarrow\; x(ax+b)=0,$$
en dat geeft $x=0$ of $x=-\tfrac{b}{a}$. De punten bij $x=0$ en $x=-\tfrac ba$ liggen op gelijke hoogte, dus de symmetrie-as ligt precies in het midden:
$$x_{\text{top}}=\frac{0+\left(-\frac ba\right)}{2}=-\frac{b}{2a}.$$

:::formula De top in standaardvorm
De symmetrie-as van $y=ax^2+bx+c$ is de lijn
$$x=-\frac{b}{2a}.$$
De top is $\left(-\dfrac{b}{2a};\,f\!\left(-\dfrac{b}{2a}\right)\right)$: reken eerst de x-coördinaat uit en vul die daarna in de formule in voor de y-coördinaat.
:::

:::warning Het teken in $-b/2a$
De min voor de breuk hoort bij de formule en staat los van het teken van $b$. Bij $y=x^2-6x+8$ is $b=-6$, dus $-b/2a=-(-6)/2=3$. Bij $y=x^2+6x+1$ is $b=6$ en is de topinvoer $-3$. Een veelgemaakte fout is $b$ te nemen zonder de min of de min te vergeten bij een negatieve $b$. Controleer met de symmetrie: bij $x^2-6x+8$ zijn de nulpunten 2 en 4, en het midden is 3.
:::

:::example Top van een parabool met $a\neq1$
Bepaal de top van $f(x)=2x^2+8x+3$.

1. $a=2$, $b=8$, dus $x_{\text{top}}=-\dfrac{8}{2\cdot2}=-2$.
2. $f(-2)=2\cdot4+8\cdot(-2)+3=8-16+3=-5$.
3. De top is $(-2;-5)$. Omdat $a>0$ is dit een minimum.
:::

## Van standaardvorm naar topvorm: kwadraat afsplitsen

Met de top bekend, kun je de topvorm direct opschrijven: $y=a(x-p)^2+q$ met $(p;q)$ de top. Maar je kunt ook algebraïsch werken, en dat is een techniek die je straks voor de abc-formule nodig hebt. Het idee is dat $(x-3)^2$ de termen $x^2-6x+9$ bevat. Die $9$ is het kwadraat van de helft van $6$.

:::example Kwadraat afsplitsen met $a=1$
Schrijf $x^2-6x+8$ in topvorm.

1. Neem de helft van $-6$: dat is $-3$. Het kwadraat $(x-3)^2$ geeft $x^2-6x+9$.
2. Er staat $+8$ in plaats van $+9$, dus je moet er 1 aftrekken: $x^2-6x+8=(x-3)^2-1$.
3. De top is $(3;-1)$.
:::

:::example Kwadraat afsplitsen met $a\neq1$
Schrijf $2x^2+8x+3$ in topvorm.

1. Haal eerst $a$ buiten haakjes voor de $x$-termen: $2(x^2+4x)+3$.
2. Splits binnen de haakjes af: $x^2+4x=(x+2)^2-4$.
3. Vermenigvuldig met 2 en tel 3 op: $2((x+2)^2-4)+3=2(x+2)^2-8+3=2(x+2)^2-5$.
4. De top is $(-2;-5)$, in overeenstemming met de berekening hierboven.
:::

:::warning Het kwadraat van een som
Het is verleidelijk te denken dat $(x+3)^2=x^2+9$. Dat is onjuist. Een kwadraat is een product van twee factoren: $(x+3)^2=(x+3)(x+3)=x^2+3x+3x+9=x^2+6x+9$. De **dubbele term** $6x$ mag nooit ontbreken. Test dit met een getal: voor $x=1$ is $(1+3)^2=16$, maar $1^2+9=10$. Meetkundig is het de oppervlakte van een vierkant met zijde $x+3$: behalve het vierkant $x^2$ en het vierkant $9$ zijn er twee rechthoeken van $3$ bij $x$.
:::

## De productvorm

Heeft de parabool nulpunten $x_1$ en $x_2$, dan kun je haar schrijven als
$$y=a(x-x_1)(x-x_2).$$
Dat zie je in $y=(x-2)(x-4)$: de uitvoer is nul als $x=2$ of $x=4$. Deze vorm leest dus de nulpunten direct af, en de top ligt precies midden tussen de nulpunten. Maar er is een voorbehoud: de productvorm bestaat alleen als er reële nulpunten zijn. De parabool $y=x^2+1$ ligt helemaal boven de x-as en kan niet als product van twee reële lineaire factoren worden geschreven.

| Vorm | Formule | Wat je direct leest |
|---|---|---|
| Standaardvorm | $ax^2+bx+c$ | richting ($a$), snijpunt y-as ($c$) |
| Topvorm | $a(x-p)^2+q$ | top $(p;q)$, symmetrie-as, min of max |
| Productvorm | $a(x-x_1)(x-x_2)$ | nulpunten $x_1$ en $x_2$ |

:::example Van nulpunten naar formule
Een parabool heeft nulpunten $x=1$ en $x=5$ en gaat door $(3;-8)$. Wat is de formule?

1. De productvorm is $y=a(x-1)(x-5)$.
2. Vul het punt in: $-8=a\cdot(3-1)(3-5)=a\cdot2\cdot(-2)=-4a$, dus $a=2$.
3. De formule is $y=2(x-1)(x-5)$. Werk je haakjes uit: $y=2x^2-12x+10$.
:::

{{ exercises: 21-008, 21-009, 21-010, 21-011, 21-012, 21-033, 21-034, 21-035 }}
