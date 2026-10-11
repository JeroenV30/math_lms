# Samenvatting — een lijn met een geldigheidsgebied

Pearson r meet lineaire samenhang. De regressielijn voorspelt y uit x en
minimaliseert gekwadrateerde verticale residuen. Beide vereisen variatie
in de relevante variabelen en verdienen een grafische controle.

## De kern in formules

Met $S_{xx}=\sum(x_i-\bar x)^2$, $S_{yy}=\sum(y_i-\bar y)^2$ en $S_{xy}=\sum(x_i-\bar x)(y_i-\bar y)$ geldt:

$$
r=\frac{S_{xy}}{\sqrt{S_{xx}S_{yy}}}=\frac{1}{n-1}\sum z_xz_y,\qquad
b_1=\frac{S_{xy}}{S_{xx}}=r\frac{s_y}{s_x},\qquad
b_0=\bar y-b_1\bar x,
$$

$$
R^2=1-\frac{\mathrm{SSE}}{S_{yy}}=r^2,\qquad
s_e=\sqrt{\frac{\mathrm{SSE}}{n-2}},\qquad
SE(b_1)=\frac{s_e}{\sqrt{S_{xx}}},\qquad
t=\frac{b_1}{SE(b_1)}\ (n-2\ \text{vrijheidsgraden}).
$$

## Het lopende voorbeeld

Zes studenten (uren $x$, cijfer $y$): $r\approx0{,}923$, $\hat y=4{,}70+0{,}369x$, $R^2\approx0{,}853$, $s_e\approx0{,}497$, $SE(b_1)\approx0{,}077$, $t\approx4{,}81$ bij 4 vrijheidsgraden, 95%-interval voor de helling ongeveer $[0{,}16;\,0{,}58]$.
Interpretatie: studenten die één uur langer studeerden, haalden gemiddeld ongeveer 0,37 punt hoger, binnen een bereik van 2 tot 10 uur. Voor meer dan dat, en voor een oorzakelijke uitspraak, geeft dit model geen steun.

:::summary Wat je nu moet kunnen
- $S_{xx}$, $S_{yy}$ en $S_{xy}$ uit afwijkingen berekenen.
- r, helling en intercept bepalen.
- Voorspellingen, residuen, SSE en R² interpreteren.
- Een spreidingsdiagram lezen op richting, vorm, sterkte en uitschieters.
- Uitleggen waarom r schaalonafhankelijk is, niets zegt over niet-lineaire verbanden en $r=0$ niet "geen verband" betekent.
- Helling en intercept in context interpreteren, met eenheden en binnen het databereik.
- Een residuplot lezen en hefboom van invloed onderscheiden.
- Het verschil tussen een gemiddeldevoorspelling en een individuele voorspelling uitleggen.
- Inferentie over de helling koppelen aan aannames en $n-2$ vrijheidsgraden.
- Invloedrijke punten, niet-lineariteit, extrapolatie en causale overclaims herkennen, inclusief regressie naar het gemiddelde en Simpsons paradox.
- Een exponentieel verband met een logaritme rechttrekken en Spearman gebruiken voor monotone verbanden.
:::

## Wat je niet uit één getal mag halen

Een hoge r of R² maakt een model niet automatisch geschikt. De vraag, het
ontwerp, de verdelingsvorm en de residuen bepalen waarvoor je het kunt gebruiken. Denk aan de volgorde: teken eerst, controleer de vorm en uitschieters, bereken dan de lijn, kijk naar het residuplot, kwantificeer de onzekerheid, en bepaal pas daarna wat je durft te claimen. Rekenen
en kijken blijven één analyse.

Kijk vooruit: in de volgende modules ga je verder met bayesiaanse statistiek en een eigen eindonderzoek, waarin je alles uit dit deel zelf moet kunnen combineren.

{{ quiz }}
