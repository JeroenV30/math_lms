# Residuen, onzekerheid en voorspellen

Een beschrijvende lijn kun je altijd berekenen wanneer x varieert.
Voor klassieke intervallen en toetsen heb je meer nodig: een lineair
gemiddeldeverband, onafhankelijke fouten met gemiddelde nul en gelijke
variantie, en voor exacte kleine-steekproef-t-inferentie normale fouten.
Of die aannames redelijk zijn, lees je niet uit $r$ of $R^2$, maar uit de residuen.

## Het residuplot

Zet de residuen $e_i=y_i-\hat y_i$ uit tegen $x$ (of tegen de voorspelde waarde $\hat y_i$). Als de lijn de structuur in de data heeft opgepikt, blijft er alleen ruis over: een
willekeurige wolk rond nul, zonder patroon en zonder trechter. Alle systematische informatie hoort al in de lijn.

Bekijk residuen tegen x of tegen de voorspelde waarde. Een boog wijst op
gemiste kromming; een waaier op veranderende spreiding; een tijdpatroon
op mogelijke afhankelijkheid. Controleer daarnaast invloedrijke punten.

![Drie residuplots: wolk, boog en waaier](/images/diagrams/m40-residuplots.svg "Links een goed residuplot, in het midden een boog (het verband is krom), rechts een waaier (de spreiding groeit met x). Eigen diagram.")

Een boog is het gevaarlijkst, want daar kan de helling zelf nog 'significant' zijn terwijl het model de vorm van het verband mist. Een waaier maakt standaardfouten en
intervallen onbetrouwbaar, al blijft de lijn als beschrijving nog bruikbaar. Bij tijdreeksen kan een golvend patroon in de volgorde betekenen dat opeenvolgende fouten
niet onafhankelijk zijn.

{{ exercise: 40-017 }}

## Invloedrijke punten en hefboom

Niet alle punten wegen even zwaar. De lijn gaat altijd door het gemiddelde punt, en punten ver van $\bar x$ trekken er als een hefboom aan. De **hefboomwaarde** van punt $i$ is

$$
h_i=\frac{1}{n}+\frac{(x_i-\bar x)^2}{S_{xx}}.
$$

Hij ligt tussen $1/n$ en $1$, en het gemiddelde over alle punten is $2/n$. Een punt met een veel hogere hefboomwaarde ligt ver van de andere $x$-waarden. Hefboom is een
eigenschap van de $x$-positie alleen; de $y$-waarde doet niet mee.

Of zo'n punt de lijn ook werkelijk verandert, hangt af van zijn $y$-waarde. Voeg aan de vijf punten van de vorige les een zesde punt bij $x=10$ toe. Zijn hefboomwaarde is
$h=1/6+(10-4{,}17)^2/50{,}8\approx0{,}84$: groot. Met drie verschillende $y$-waarden:

| zesde punt | helling | $r$ | oordeel |
|---|---|---|---|
| $(10;\,8{,}2)$ | 0,600 | 0,940 | past op de lijn: hoge hefboom, geen invloed op de lijn |
| $(10;\,1)$ | −0,226 | −0,439 | trekt de lijn om: hoge hefboom én invloedrijk |
| $(3;\,12)$ | 0,600 | 0,246 | in het midden van $x$: bijna geen hefboom, helling blijft, $r$ stort in |

Het eerste punt ligt precies op de oorspronkelijke lijn $\hat y=2{,}2+0{,}6x$ (want $2{,}2+6=8{,}2$), dus verandert er aan de lijn niets, al stijgt $r$ wel doordat de variatie in $x$ vergroot wordt.
Het tweede punt is de klassieke valkuil: één waarneming keert het teken van de helling om. Het derde punt laat zien dat een uitschieter in $y$ midden in het $x$-bereik de helling niet beweegt, maar wel de
spreiding rond de lijn en dus $r$ en $R^2$ enorm vergroot.

{{ widget: regression points="(1;2) (2;4) (3;5) (4;4) (5;5) (10;1)" xmax=12 ymax=10 }}

Verwijder in het widget het punt rechts onderaan met 'Laatste punt weg' en zie de helling terugspringen. Sleep het daarna omhoog naar $y=8$ en zie dat de lijn nauwelijks beweegt.
In de praktijk onderzoek je zulke punten met diagnosegetallen zoals de Cook-afstand. Het eerlijke gebruik is: bereken de lijn mét en zonder het punt, en rapporteer beide als ze verschillen. Punten
verwijderen omdat ze 'lastig' zijn, is geen methode.

{{ exercises: 40-032, 40-033, 40-034 }}

## Onzekerheid over de helling

Er zijn twee parameters geschat. Daardoor gebruikt de residuspreiding
$n-2$ vrijheidsgraden:

$$
s_e=\sqrt{\frac{\mathrm{SSE}}{n-2}},\qquad
SE(b_1)=\frac{s_e}{\sqrt{S_{xx}}}.
$$

De formule voor $SE(b_1)$ laat zien wanneer een helling nauwkeurig is: bij kleine ruis ($s_e$ klein), veel spreiding in $x$ ($S_{xx}$ groot) en veel waarnemingen. Een brede spreiding in $x$ is
een ontwerpkeuze: wie de helling nauwkeurig wil schatten, kiest bewust x-waarden die ver uit elkaar liggen.

Bij de vijf voorbeeldpunten is $s_e=\sqrt{2{,}4/3}\approx0{,}894$
en $SE(b_1)\approx0{,}283$. Tegen $H_0:\beta_1=0$ is
$t=b_1/SE(b_1)\approx2{,}12$ met 3 vrijheidsgraden. Voor een tweezijdige
5%-toets is de kritieke waarde 3,182. De r van ongeveer 0,775 geeft dus
bij deze kleine steekproef geen significante helling op dat niveau; de tweezijdige p-waarde is ongeveer 0,12.

{{ exercises: 40-014, 40-015, 40-016 }}

:::example Een interval voor de helling bij de zes studenten
Gegeven: $\mathrm{SSE}\approx0{,}988$, $n=6$, $S_{xx}=42$, $b_1=0{,}369$.

1. $s_e=\sqrt{0{,}988/4}\approx0{,}497$ cijferpunt.
2. $SE(b_1)=0{,}497/\sqrt{42}\approx0{,}0767$.
3. $t=0{,}369/0{,}0767\approx4{,}81$ met $4$ vrijheidsgraden; de tweezijdige p-waarde is ongeveer $0{,}009$.
4. Voor een 95%-interval is $t^*=2{,}776$ (bij 4 vrijheidsgraden). Het interval is $0{,}369\pm2{,}776\cdot0{,}0767$, dus ongeveer $[0{,}16;\ 0{,}58]$.

Interpretatie: bij een steekproef van zes studenten is de gemiddelde winst per extra studie-uur ergens tussen ongeveer $0{,}16$ en $0{,}58$ cijferpunt aannemelijk. Het interval is breed, want $n$ is klein. Het is geen interval
voor het cijfer van één student, en het zegt niets over of studeren het cijfer *veroorzaakt*.
:::

{{ exercises: 40-035, 40-036, 40-037 }}

## Een voorspelling heeft extra onzekerheid

Een interval voor de gemiddelde y bij $x_0$ en een voorspellingsinterval
voor een **nieuwe individuele** y zijn verschillend. Met
$h_0=1/n+(x_0-\bar x)^2/S_{xx}$ zijn hun standaardfouten respectievelijk
$s_e\sqrt{h_0}$ en $s_e\sqrt{1+h_0}$. Het individuele interval is breder
door de extra variatie van een nieuwe waarneming.

Beide worden breder verder van $\bar x$. Buiten het waargenomen x-bereik
komt daar onzekerheid over de geldigheid van het model bij. Die is niet
automatisch inbegrepen in de formule. Het gemiddelde cijfer van álle studenten die 6 uur studeren is veel nauwkeuriger te schatten dan het cijfer van de volgende student die 6 uur studeert: dat laatste bevat ook de
ruis van het individu, die nooit wegvalt, hoe groot de steekproef ook is.

{{ exercises: 40-018, 40-019 }}
