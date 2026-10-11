# Een toets kiezen en uitrekenen

Welke toets je kiest, hangt af van wat je meet en wat je van het nulmodel weet. In deze les bekijk je
drie situaties voor één populatie: een telling van successen, een proportie en een gemiddelde met
onbekende spreiding. Bij elke situatie stel je dezelfde vragen. Wat is de waarnemingseenheid? Welke verdeling heeft de
toetsingsgrootheid onder $H_0$? En waar liggen de staarten die bij $H_1$ horen?

## Een telling: de exacte binomiale toets

Stel je telt successen in $n$ onafhankelijke pogingen met onder $H_0$ een vaste kans $p_0$. Dan is
het aantal successen $X$ binomiaal verdeeld, $X\sim\text{Bin}(n,p_0)$, en kun je de p-waarde exact
uitrekenen door kansen op te tellen. Er is geen normale benadering nodig en dus ook geen aanname over
grote $n$. De rechtszijdige p-waarde bij $x$ waargenomen successen is $P(X\ge x)$.

:::example Tien worpen, negen keer kop
Een munt wordt tien keer geworpen en geeft negen keer kop. Is de munt eerlijk? Neem $H_0:p=0{,}5$.

1. Onder $H_0$ heeft elke reeks van tien worpen kans $(1/2)^{10}=1/1024$.
2. Negen keer kop kan op $\binom{10}{9}=10$ manieren, tien keer kop op 1 manier.
3. Rechtszijdig: $P(X\ge9)=(10+1)/1024=11/1024\approx0{,}0107$.
4. Tweezijdig wil je ook uitkomsten die even extreem zijn aan de andere kant: nul of één keer kop.
   Door symmetrie is dat opnieuw $11/1024$, dus $p=22/1024\approx0{,}0215$.
:::

Bij een discrete toetsingsgrootheid is de tweezijdige p-waarde niet altijd precies het dubbele van de
eenzijdige. Dat geldt hier alleen vanwege de symmetrie bij $p_0=0{,}5$. Bij een asymmetrisch
model bestaan meerdere conventies; vermeld dus welke je gebruikt. Merk ook op dat een discrete toets het gekozen
$\alpha$ meestal niet precies haalt: de werkelijke foutkans is dan iets kleiner dan $\alpha$.

Vijf eerlijke muntworpen die allemaal kop geven, hebben rechtszijdige kans $1/32=0{,}03125$.
Tweezijdig, met extremiteit als afstand tot 2,5, tel je de uitersten 0 en 5 op: $2/32=0{,}0625$. De keuze van de vraag doet er dus toe.

{{ exercises: 39-009, 39-010, 39-027, 39-028 }}

## Een proportie: de z-toets

Bij grote $n$ is $X$ bij benadering normaal, en voor de steekproefproportie $\hat p=X/n$ geldt onder
$H_0:p=p_0$ dat het gemiddelde $p_0$ is en de standaardfout $\sqrt{p_0(1-p_0)/n}$. Dat geeft

$$z=\frac{\hat p-p_0}{\sqrt{p_0(1-p_0)/n}}.$$

Let op de standaardfout: onder $H_0$ rekenen we met $p_0$, niet met $\hat p$. Je neemt immers aan dat het nulmodel
geldt en berekent daarbinnen hoe de proportie schommelt. Een veelgebruikte vuistregel voor de benadering is
$np_0\ge10$ én $n(1-p_0)\ge10$. Bij kleinere aantallen kies je de exacte toets.

:::example Genezingspercentage
Een ziekenhuis beweert dat 60% van de patiënten geneest. Een nieuwe afdeling behandelt 250 patiënten, van wie
165 genezen. Test rechtszijdig of de afdeling beter presteert, $H_0:p=0{,}6$ en $H_1:p>0{,}6$.

1. $\hat p=165/250=0{,}66$.
2. $SE=\sqrt{0{,}6\cdot0{,}4/250}=\sqrt{0{,}00096}\approx0{,}03098$.
3. $z=(0{,}66-0{,}60)/0{,}03098\approx1{,}94$.
4. Rechtszijdig: $p=1-\Phi(1{,}94)\approx0{,}026$. Bij $\alpha=0{,}05$ verwerp je $H_0$.
:::

{{ exercises: 39-022, 39-032 }}

## Een gemiddelde met onbekende σ: de t-toets

In de praktijk ken je $\sigma$ bijna nooit. Je schat haar met de steekproefstandaardafwijking $s$. Dat lijkt een
kleine ingreep, maar de toetsingsgrootheid krijgt er extra onzekerheid bij, want ook $s$ schommelt van
steekproef tot steekproef. Bij kleine steekproeven maakt dat uit: de verdeling van

$$t=\frac{\bar x-\mu_0}{s/\sqrt n}$$

heeft zwaardere staarten dan de standaardnormale verdeling. Het is een **t-verdeling** met $n-1$ **vrijheidsgraden**.
Bij toenemende $n$ nadert ze de normale verdeling. Voor $n=5$ heb je tweezijdig bij $\alpha=0{,}05$ de
kritieke waarde $2{,}776$, voor $n=25$ is dat $2{,}064$ en voor $n\to\infty$ is het $1{,}96$.

De t-verdeling is exact als de waarnemingen onafhankelijk en normaal verdeeld zijn. Bij grotere steekproeven
werkt de toets ook redelijk bij niet-normale gegevens, dankzij de centrale limietstelling; extreme uitschieters en
afhankelijke waarnemingen blijven reden voor voorzichtigheid. In de widget hieronder zie je de verdeling van
steekproefgemiddelden bij $n=10$ samen met haar standaardfout. Bij grotere $n$ wordt die verdeling smaller, en daarom is een afwijking van gelijke grootte
bij grotere steekproeven veel overtuigender.

{{ widget: sampling n=10 seed=39 }}

:::example Een t-toets in zes stappen
Een laboratorium meet 16 monsters met gemiddelde $\bar x=52{,}4$ en $s=6$. De gespecificeerde waarde is
$\mu_0=50$. Toets tweezijdig bij $\alpha=0{,}05$.

1. $H_0:\mu=50$, $H_1:\mu\ne50$.
2. $SE=6/\sqrt{16}=1{,}5$.
3. $t=(52{,}4-50)/1{,}5=1{,}6$.
4. Vrijheidsgraden: $n-1=15$.
5. Kritieke waarde (tweezijdig, $\alpha=0{,}05$, 15 vrijheidsgraden): $2{,}131$.
6. $|t|=1{,}6<2{,}131$: je verwerpt $H_0$ niet. De gegevens zijn niet duidelijk onverenigbaar met $\mu=50$.
:::

{{ exercises: 39-029, 39-006, 39-007, 39-008 }}

## Toetsen en betrouwbaarheidsintervallen zijn twee kanten van dezelfde munt

In module 38 construeerde je een betrouwbaarheidsinterval $\bar x\pm t^*\cdot s/\sqrt n$. Een tweezijdige
t-toets op niveau $5\%$ verwerpt $H_0:\mu=\mu_0$ precies dan wanneer het $95\%$-interval $\mu_0$ **niet**
bevat, mits je dezelfde aannames en procedure gebruikt. Bekijk het voorbeeld hierboven: het interval is
$52{,}4\pm2{,}131\cdot1{,}5=[49{,}20;\;55{,}60]$. De waarde 50 ligt erin, en de toets verwerpt niet. Het interval
levert méér dan de toets: het laat ook zien welke waarden van $\mu$ nog verenigbaar zijn met de data, en daarmee hoe
groot het effect kan zijn. Rapporteer daarom bij voorkeur het interval, of anders beide.

{{ exercises: 39-030, 39-031 }}
