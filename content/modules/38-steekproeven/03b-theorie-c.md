# Betrouwbaarheidsintervallen

Een puntschatting geeft één getal, bijvoorbeeld $\bar x=42$ minuten. Dat getal
is vrijwel zeker niet precies gelijk aan $\mu$, en het getal zelf zegt niets over hoe
ver ernaast je kunt zitten. Een **betrouwbaarheidsinterval** (BI) lost dat op: het
geeft een bereik rond de schatting dat de onzekerheid samenvat. In deze les
bouw je zo'n interval voor een gemiddelde op, eerst als de populatiespreiding
bekend is, daarna als je haar moet schatten.

## Het z-interval: $\sigma$ bekend

Volgens de vorige les is $\bar X$ ongeveer normaal verdeeld met midden $\mu$ en
standaardafwijking $\sigma/\sqrt n$. In een normale verdeling ligt 95% van de
massa binnen 1,96 standaardafwijkingen van het midden. Dus:

$$
P\!\left(\mu-1{,}96\frac{\sigma}{\sqrt n}\le\bar X\le\mu+1{,}96\frac{\sigma}{\sqrt n}\right)=0{,}95.
$$

Het ongelijkheidsteken kun je omkeren: $\bar X$ ligt binnen 1,96 SE van $\mu$
precies dan als $\mu$ binnen 1,96 SE van $\bar X$ ligt. Dat geeft het
95%-interval voor $\mu$:

$$
\bar x\pm1{,}96\frac{\sigma}{\sqrt n}.
$$

Het getal 1,96 heet de **kritieke waarde** $z^*$. De **foutmarge** (*margin of error*) is
$m=z^*\cdot SE$, zodat het interval $\bar x\pm m$ is. Voor andere dekkingsgraden
verander je $z^*$: bij 90% is $z^*=1{,}645$, bij 95% is het 1,960 en bij 99% is het 2,576.

:::example Een marge rond het gemiddelde
Gemiddelde 50 en standaardfout 2 geven een marge van $1{,}96\cdot2=3{,}92$ en het
interval $[46{,}08;\,53{,}92]$. Het interval gaat over $\mu$, niet over waar 95% van de
individuele waarnemingen zal liggen.
:::

{{ exercises: 38-009, 38-010 }}

:::example Een volledig z-interval
Een steekproef van $n=25$ studenten geeft gemiddeld $\bar x=72$ punten op een
toets; neem aan dat $\sigma=10$ bekend is uit eerder
grootschalig onderzoek.

Stap 1: $SE=10/\sqrt{25}=10/5=2$.
Stap 2: $m=1{,}96\cdot2=3{,}92$.
Stap 3: het interval is $72\pm3{,}92=[68{,}08;\,75{,}92]$.

Merk op dat je de marge niet berekent met $\sigma=10$ zelf. Dat zou een
interval $[52{,}4;\,91{,}6]$ geven, dat vijf keer te breed is.
:::

{{ exercise: 38-031 }}

### Breedte en betrouwbaarheid

Het interval wordt breder als je méér betrouwbaarheid wilt, want 99% vraagt een
grotere $z^*$ dan 95%. Het wordt smaller als $n$ groeit, omdat $SE$ dan daalt, en
ook als de populatie minder spreidt. Dekking en precisie moet je afwegen:
je kunt niet tegelijk een heel smal én heel betrouwbaar interval krijgen zonder
meer data.

{{ exercises: 38-034, 38-019 }}

## Het t-interval: $\sigma$ onbekend

In de praktijk ken je $\sigma$ vrijwel nooit. Je vervangt haar door $s$, de
steekproefstandaardafwijking. Daarmee komt een extra bron van onzekerheid
binnen: ook $s$ verschilt per steekproef. Bij een kleine steekproef kan $s$ er
flink naast zitten, en dan klopt de normale benadering niet meer. William Gosset
loste dat in 1908 op. Als de waarnemingen onafhankelijk en normaal verdeeld zijn, heeft

$$
T=\frac{\bar X-\mu}{s/\sqrt n}
$$

een **t-verdeling** met $n-1$ **vrijheidsgraden**. Het exacte 95%-interval is

$$
\bar x\pm t^*_{n-1}\frac{s}{\sqrt n},
$$

waarbij $t^*_{n-1}$ de waarde is die 2,5% in de rechterstaart van de t-verdeling met
$n-1$ vrijheidsgraden afsnijdt.

### Vrijheidsgraden

Waarom $n-1$? Het gemiddelde $\bar x$ gebruik je om de afwijkingen
$x_i-\bar x$ uit te rekenen, en die afwijkingen tellen samen altijd op tot nul.
Als je $n-1$ van die afwijkingen kent, ligt de laatste vast. Er zijn dus
maar $n-1$ vrij variërende stukjes informatie over spreiding. Daarom deel je in
$s^2$ ook door $n-1$ in plaats van $n$. Het aantal vrijheidsgraden (df) telt hoeveel
onafhankelijke informatie je nog hebt over de spreiding.

### De vorm van de t-verdeling en de tabel

De t-verdeling is symmetrisch en klokvormig, maar heeft **dikkere staarten** dan
de normale verdeling. Dat compenseert de onzekerheid in $s$: de kritieke waarde
$t^*$ is groter dan $z^*$, en dus ook de marge. Hoe groter de steekproef, hoe
nauwkeuriger $s$, en hoe dichter $t^*$ bij $z^*$ komt. Dit zijn waarden van
$t^*$ voor een tweezijdig interval:

| Vrijheidsgraden | 95% | 99% |
|---|---|---|
| 4 | 2,776 | 4,604 |
| 9 | 2,262 | 3,250 |
| 14 | 2,145 | 2,977 |
| 19 | 2,093 | 2,861 |
| 24 | 2,064 | 2,797 |
| 29 | 2,045 | 2,756 |
| $\infty$ (normaal) | 1,960 | 2,576 |

Voor 15 vrijheidsgraden is $t^*\approx2{,}131$; voor 25 vrijheidsgraden ongeveer 2,060. Bij
10 waarnemingen (9 vrijheidsgraden) is de marge dus ongeveer 15% groter dan
de z-marge. Bij 30 waarnemingen is het verschil nog maar 4%. Voor niet-normale data is
het t-interval een benadering die je beoordeelt met steekproefomvang, verdelingsvorm
en uitschieters.

:::example Een t-interval met onbekende σ
Een steekproef van $n=16$ metingen heeft $\bar x=20$ en $s=4$, en je gebruikt
$t^*_{15}=2{,}131$.

Stap 1: $df=16-1=15$.
Stap 2: $SE=s/\sqrt n=4/4=1$.
Stap 3: $m=2{,}131\cdot1=2{,}131$.
Stap 4: interval $20\pm2{,}131=[17{,}869;\,22{,}131]$.

Met de normale factor 1,96 zou je een marge van 1,96 hebben gevonden. Dat interval is te
smal en dekt in werkelijkheid minder dan 95% van de keren.
:::

{{ exercises: 38-011, 38-012, 38-033, 38-032 }}

:::tip Kies z of t
Is $\sigma$ bekend uit de populatie zelf, dan gebruik je $z^*$. Schat je haar met
$s$, wat vrijwel altijd zo is, dan gebruik je $t^*$ met $n-1$ vrijheidsgraden. Bij grote
$n$ maakt het weinig uit, maar t is nooit fout en z bij kleine $n$ wel.
:::

## Wat betekent 95%?

Dit is het meest verkeerd begrepen idee van de hele module. Stel je een
herhaalbare procedure voor: trek een steekproef en bereken het
interval volgens dezelfde regels. Onder de aannames bevat ongeveer 95% van
die intervallen de vaste parameter. Het ene berekende interval bevat haar
wel of niet.

Dus niet: "er is 95% kans dat $\mu$ in dit interval ligt". De parameter $\mu$
is een vast getal, geen toevalsgrootheid; na de trekking is het interval
ook vast. Er is niets meer dat kans heeft. De 95% beschrijft de
**procedure**: de manier van trekken en berekenen werkt in 95% van de gevallen.
Het is als een boogschutter die in 95% van de pogingen raak schiet: voor één pijl die al
onderweg is weet je niet of ze raak zit, maar je vertrouwt de schutter.

Jerzy Neyman formuleerde dit in 1937. De frequentistische 95% is geen
kansverdeling over de parameter. Een Bayesiaanse uitspraak van het type "95% kans dat
$\mu$ in het interval ligt" hoort bij een andere redenering, met een prior, die je in
module 41 tegenkomt.

{{ exercise: 38-013 }}

De widget gebruikt voor demonstratie de benadering $\bar x\pm1{,}96\,s/\sqrt n$.
Voor kleine steekproeven uit de scheve simulatiepopulatie is de werkelijke
dekking niet automatisch 95%. Dat is juist een reden om aannames te controleren.
Laat de widget herhaald steekproeven trekken en let erop hoe vaak het interval het
populatiegemiddelde mist. Bij grote $n$ hoort dat ongeveer 1 op de 20 te zijn; bij
kleine $n$ kan het vaker gebeuren.

{{ widget: sampling n=10 seed=7 }}

:::warning Een interval voor het gemiddelde is geen interval voor individuen
Een 95%-interval $[18;22]$ voor $\mu$ zegt niet dat 95% van de personen tussen 18 en
22 scoort. Het interval wordt smaller bij groter $n$; de spreiding van individuele
personen blijft $\sigma$ en wordt niet kleiner. Wil je een uitspraak over
individuele waarden, dan heb je een voorspellingsinterval nodig, en dat is veel breder.
:::

{{ exercise: 38-014 }}

## Veelgemaakte fouten

Vier fouten komen steeds terug. De eerste: de marge uitrekenen met $\sigma$ in plaats
van $\sigma/\sqrt n$, waardoor het interval veel te breed wordt. De tweede: bij een kleine
steekproef met onbekende $\sigma$ de factor 1,96 gebruiken in plaats van $t^*$,
waardoor het interval te smal is. De derde: het interval lezen als "95% kans dat
$\mu$ hierin ligt". De vierde: denken dat een interval voor het gemiddelde ook voor
individuele waarnemingen geldt. Elk van deze fouten zie je terug in de
oefeningen.
