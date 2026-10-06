# Twee groepen vergelijken

De meeste wetenschappelijke vragen zijn vergelijkingen: werkt het nieuwe middel beter dan het oude, presteert
methode A anders dan methode B, is het gemiddelde na de training hoger dan ervoor? Daarvoor vergelijk je twee
gemiddelden. Eerst moet je beslissen hoe de twee reeksen waarnemingen zich tot elkaar verhouden. Er zijn twee
ontwerpen, en ze vragen verschillende analyses.

:::question Denkvraag
Je meet van tien personen het bloeddrukniveau vóór en na een training. In een tweede onderzoek meet je tien
personen die trainen en tien andere die dat niet doen. In welk onderzoek is het slim om per persoon het verschil
te nemen, en waarom?
:::

## Twee onafhankelijke groepen: de Welch-toets

Bij **onafhankelijke groepen** bestaan de twee steekproeven uit verschillende eenheden, zonder koppeling:
bijvoorbeeld een behandelgroep en een controlegroep. Het gemiddelde van elke groep heeft een eigen standaardfout, $s_1/\sqrt{n_1}$ en $s_2/\sqrt{n_2}$.
Het verschil $\bar x_1-\bar x_2$ van twee onafhankelijke gemiddelden heeft een variantie die de som is van de twee varianties. Dat is de regel
uit module 36 voor sommen van onafhankelijke grootheden, en hij geldt ook voor verschillen. De standaardfout van het verschil is daarom

$$SE=\sqrt{\frac{s_1^2}{n_1}+\frac{s_2^2}{n_2}}.$$

Let op dat je de **varianties** optelt en daarna de wortel neemt, niet de standaardfouten zelf. Twee onzekerheden van
3 en 4 combineren tot $\sqrt{9+16}=5$, niet tot 7. De toetsingsgrootheid is

$$t=\frac{\bar x_1-\bar x_2}{\sqrt{s_1^2/n_1+s_2^2/n_2}}.$$

Dit is de **Welch-toets**. Zij vereist geen gelijke populatievarianties. De verdeling van $t$ onder $H_0:\mu_1=\mu_2$
is bij benadering een t-verdeling met

$$\nu=\frac{\left(s_1^2/n_1+s_2^2/n_2\right)^2}{\dfrac{(s_1^2/n_1)^2}{n_1-1}+\dfrac{(s_2^2/n_2)^2}{n_2-1}}$$

vrijheidsgraden (de Welch–Satterthwaite-benadering). Software rekent dit voor je uit; je hoeft de formule niet uit het hoofd te kennen,
maar je moet weten dat ze bestaat. Het resultaat ligt altijd tussen $\min(n_1,n_2)-1$ en $n_1+n_2-2$. Gebruik dus niet blindweg $n_1+n_2-2$: die
formule hoort bij een gepoolde toets, die ook nog gelijke varianties eist.

{{ exercises: 39-015, 39-016 }}

:::example Een Welch-toets met ongelijke groepen
Een opleiding vergelijkt de toetscijfers (schaal 0–100) van twee groepen. Groep 1: $n_1=30$, $\bar x_1=82$, $s_1=10$.
Groep 2: $n_2=20$, $\bar x_2=78$, $s_2=14$. Toets tweezijdig.

1. $H_0:\mu_1=\mu_2$ en $H_1:\mu_1\ne\mu_2$.
2. $s_1^2/n_1=100/30\approx3{,}333$ en $s_2^2/n_2=196/20=9{,}8$.
3. $SE=\sqrt{3{,}333+9{,}8}=\sqrt{13{,}133}\approx3{,}624$.
4. $t=(82-78)/3{,}624\approx1{,}10$.
5. Vrijheidsgraden: $\nu\approx31{,}7$. Tabelwaarde bij ongeveer 32 vrijheidsgraden en $\alpha=0{,}05$ tweezijdig: circa $2{,}04$.
6. $|t|=1{,}10<2{,}04$. Je verwerpt $H_0$ niet.

Een verschil van 4 punten is hier dus goed verenigbaar met toeval. De hoge spreiding van groep 2 en de kleine groepen
zorgen voor een standaardfout die groter is dan het verschil.
:::

{{ exercises: 39-033, 39-034 }}

## Gepaarde metingen

Soms hebben de twee reeksen waarnemingen dezelfde eenheden: vóór- en nametingen bij dezelfde personen, twee behandelingen op dezelfde proefvelden of
twee ogen van één patiënt. Dan zijn de twee metingen binnen een paar niet onafhankelijk: iemand met een hoge bloeddruk vóór de training heeft meestal ook een
hoge bloeddruk erna. Die samenhang is geen last maar juist een voordeel. Je maakt per paar een verschil $d_i$ en
toetst het gemiddelde van die verschillen tegen nul met een gewone éénsteekproef-t-toets:

$$t=\frac{\bar d}{s_d/\sqrt n},\qquad df=n-1.$$

Hier is $n$ het aantal **paren**. De paren moeten onderling onafhankelijk zijn; binnen een paar hoeven de twee metingen dat juist niet te
zijn. Het voordeel is dat de persoonsgebonden verschillen (de ene persoon heeft nu eenmaal een hogere bloeddruk dan
de andere) wegvallen uit de verschillen. De spreiding $s_d$ van de verschillen is daardoor meestal veel kleiner dan de
spreiding van de losse metingen, en de toets is dus scherper.

:::example Gepaard tegenover onafhankelijk
Tien personen worden vóór en na een training gemeten. De gemiddelde daling is $\bar d=2{,}0$ en de
standaardafwijking van de verschillen is $s_d=2{,}0$. De losse metingen hebben een spreiding van ongeveer $s=8$ in beide reeksen.

- Gepaard: $SE=2{,}0/\sqrt{10}\approx0{,}632$ en $t=2{,}0/0{,}632\approx3{,}16$ bij 9 vrijheidsgraden. De kritieke waarde is $2{,}262$, dus $H_0$ wordt verworpen.
- Ten onrechte onafhankelijk behandeld: $SE=\sqrt{64/10+64/10}\approx3{,}58$ en $t=2{,}0/3{,}58\approx0{,}56$. Er is dan geen enkel spoor van een effect te zien.

Dezelfde gegevens leiden dus tot tegengestelde conclusies, afhankelijk van of je de koppeling gebruikt. De onafhankelijke
analyse gooit informatie weg en is daardoor onnodig zwak. Omgekeerd mag je onafhankelijke groepen nooit als paren behandelen: dan
verzin je een koppeling die er niet is.
:::

{{ exercises: 39-017, 39-018, 39-035 }}

## Een toets kiezen

Je kunt de keuze van de toets meestal terugbrengen tot enkele vragen. Hoeveel populaties vergelijk je en wat is de waarnemingseenheid? Is er een telling of een
meetwaarde? Zijn de eenheden gekoppeld? Is $\sigma$ bekend? Voor meer dan twee groepen heb je andere procedures nodig, zoals
variantieanalyse (ANOVA), en voor categorische kruistabellen de chi-kwadraattoets van Pearson. Die vallen buiten deze module, maar
de principes van nulmodel, toetsingsgrootheid en p-waarde blijven gelden. De
[NIST-documentatie over twee gemiddelden](https://www.itl.nist.gov/div898/handbook/eda/section3/eda353.htm) geeft de
Welch-formules nog eens op een rijtje.
