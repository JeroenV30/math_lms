# Een regressielijn berekenen

We zoeken een lijn $\hat y=b_0+b_1x$. Het dakje duidt een voorspelling aan;
de gemeten y is meestal anders. Kleinste kwadraten kiest de lijn die
$\mathrm{SSE}=\sum_i(y_i-\hat y_i)^2$ minimaliseert.

:::example De lijn bij de vijf punten
Met $S_{xy}=6$ en $S_{xx}=10$ is $b_1=0{,}6$.
Het intercept is $b_0=\bar y-b_1\bar x=4-0{,}6\cdot3=2{,}2$.
De lijn luidt dus $\hat y=2{,}2+0{,}6x$.
:::

{{ exercises: 40-007, 40-008, 40-009, 40-010 }}

Bij x=4 voorspelt de lijn 4,6, terwijl de waarneming 4 is. Het residu is
$4-4{,}6=-0{,}6$. Een negatief residu ligt onder de lijn.
Alle residuen zijn −0,8; 0,6; 1; −0,6 en −0,2. Hun kwadratensom is 2,4.

{{ exercises: 40-011, 40-012 }}

## Wat betekent de helling?

Als x reclame-uitgaven in duizenden euro's is en y omzet in duizenden euro's,
dan voorspelt één extra duizend euro reclame een toename van 0,6 duizend euro
omzet in dit model. Dat is een beschrijving van het verband, geen gegarandeerde
opbrengst van een ingreep. Het intercept beschrijft x=0, ook wanneer nul niet
in het meetbereik ligt; dan kan het weinig inhoudelijke betekenis hebben.

{{ widget: regression points="(1;2) (2;4) (3;5) (4;4) (5;5)" xmax=7 ymax=8 }}

Sleep één punt omhoog. Kijk welke invloed het heeft op de lijn en op r.
Verplaats vervolgens een punt ver naar rechts. Een punt ver van het
x-gemiddelde heeft veel hefboomwerking, maar is pas invloedrijk wanneer zijn
positie de lijn daadwerkelijk sterk verandert.

## R²

$R^2=1-\mathrm{SSE}/S_{yy}$ vergelijkt de resterende variatie met de totale
y-variatie. Hier is $R^2=1-2{,}4/6=0{,}6$. Voor één verklarende variabele
met intercept is dat ook $r^2$. Deze gelijkheid geldt niet voor ieder model.

{{ exercise: 40-013 }}

De [NIST-uitleg over kleinste kwadraten](https://www.itl.nist.gov/div898/handbook/pmd/section1/pmd141.htm)
beschrijft het algemene principe van deze methode.
