# Een toets kiezen en uitrekenen

## Eén gemiddelde

Wanneer de populatiestandaardafwijking onbekend is, gebruik je
$t=(\bar x-\mu_0)/(s/\sqrt n)$ met $n-1$ vrijheidsgraden.
De referentieverdeling is exact bij onafhankelijke normale waarnemingen.
Bij grotere niet-normale steekproeven kan de toets een redelijke benadering
zijn; extreme uitschieters en afhankelijkheid blijven redenen voor onderzoek.

{{ exercises: 39-006, 39-007, 39-008 }}

Een tweezijdige t-toets op niveau 5% verwerpt precies wanneer het bijbehorende
95%-t-interval de nulwaarde niet bevat, mits je dezelfde aannames en procedure
gebruikt. Zo verbind je toetsen aan schatten.

## Een telling

Bij onafhankelijke successen met gelijke kans kan een exacte binomiale toets
geschikt zijn. Als vijf eerlijke muntworpen allemaal kop geven, is de
rechtszijdige kans op minstens vijf successen $1/32=0{,}03125$.
Voor een tweezijdige toets met extremiteit als afstand tot 2,5 tel je de
uitersten 0 en 5 op: $2/32=0{,}0625$. De keuze van de vraag doet ertoe.

{{ exercises: 39-009, 39-010 }}

## Twee onafhankelijke groepen

De Welch-toets gebruikt
$$
t=\frac{\bar x_1-\bar x_2}{\sqrt{s_1^2/n_1+s_2^2/n_2}}.
$$
Zij vereist geen gelijke populatievarianties. De benaderende vrijheidsgraden
zijn
$$
\nu=\frac{(s_1^2/n_1+s_2^2/n_2)^2}
{(s_1^2/n_1)^2/(n_1-1)+(s_2^2/n_2)^2/(n_2-1)}.
$$
Gebruik een t-tabel of software met deze vrijheidsgraden, niet automatisch
$n_1+n_2-2$. Die laatste formule hoort bij een gepoolde toets met extra aannames.

{{ exercises: 39-015, 39-016 }}

## Gepaarde metingen

Bij vóór- en nametingen op dezelfde personen maak je eerst per persoon een
verschil $d_i$. Vervolgens toets je het gemiddelde verschil tegen nul met
$t=\bar d/(s_d/\sqrt n)$. De paren moeten onderling onafhankelijk zijn;
binnen een paar hoeven de twee metingen dat juist niet te zijn.

{{ exercises: 39-017, 39-018 }}

De [NIST-documentatie over twee gemiddelden](https://www.itl.nist.gov/div898/handbook/eda/section3/eda353.htm)
geeft de Welch-formules. Voor vergelijking van meer dan twee groepen of
categorische kruistabellen zijn andere procedures nodig, zoals ANOVA of
chi-kwadraattoetsen. Hun volledige uitwerking valt buiten deze module.
