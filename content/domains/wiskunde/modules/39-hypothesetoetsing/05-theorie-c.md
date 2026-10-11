# Fouten, power en effectgrootte

Een toets is een beslisregel, en een beslisregel kan het mis hebben. Dat is geen gebrek: het volgt uit het
feit dat je op basis van een steekproef iets over een hele populatie zegt. Nieuw in deze les is dat je die
fouten niet alleen toegeeft, maar uitrekent en beheerst.

## Twee soorten fouten

Er zijn twee werkelijkheden (is $H_0$ waar of niet) en twee beslissingen (verwerpen of niet), dus vier
combinaties. Twee ervan zijn juist, twee zijn een fout.

| Werkelijkheid | Niet verwerpen | Verwerpen |
|---|---|---|
| $H_0$ waar | juiste beslissing | **type-I-fout** (vals alarm) |
| alternatief waar | **type-II-fout** (gemiste ontdekking) | juiste beslissing |

De kans op een type-I-fout is, als $H_0$ waar is, hoogstens het significantieniveau $\alpha$. Dat komt doordat je
de toetsingsgrootheid alleen laat tellen als zij in een gebied ligt waarvan de kans onder $H_0$ precies (of hoogstens)
$\alpha$ is. De kans op een type-II-fout heet $\beta$, en de **power** is $1-\beta$: de kans dat je $H_0$ terecht verwerpt als het
alternatief waar is. In het strafproces komt een type-I-fout overeen met het veroordelen van een onschuldige, een
type-II-fout met het vrijspreken van een schuldige. Welke fout erger is, hangt van de context af, en dat bepaalt hoe je $\alpha$ kiest.

{{ exercises: 39-011, 39-012, 39-013 }}

Er is één belangrijk verschil tussen de twee foutkansen. $\alpha$ kies je zelf en is onder $H_0$ vast. $\beta$ is
geen enkel getal: ze hangt af van **welk** alternatief waar is. Als het werkelijke effect groot is, is een
type-II-fout onwaarschijnlijk; is het effect minuscuul, dan is $\beta$ bijna $1-\alpha$, want dan lijkt het alternatief
sterk op $H_0$. Over "de" power van een toets spreek je dus alleen bij een specifiek veronderstelde waarde van de parameter.

## Power uitrekenen

![Twee normale verdelingen: H0 en een werkelijk alternatief, met kritieke waarde, alpha, beta en power](/images/diagrams/m39-power.svg "Rechtszijdige toets: de kritieke waarde ligt vast onder H0, de power is het deel van het alternatief erachter — eigen figuur")

Het plaatje laat de twee verdelingen van het steekproefgemiddelde zien: links onder $H_0$, rechts onder een
werkelijk alternatief. De kritieke waarde ligt vast door $H_0$ en $\alpha$. Het gebied onder de rechtercurve links van die grens is
$\beta$; het gebied rechts ervan is de power.

:::example Power van een rechtszijdige z-toets
Een proces produceert onderdelen met $\mu_0=100$ en $\sigma=10$. Je test $H_0:\mu=100$ tegen $H_1:\mu>100$ met $n=100$
en $\alpha=0{,}05$. Wat is de power als het werkelijke gemiddelde 101 is?

1. $SE=10/\sqrt{100}=1$.
2. Je verwerpt als $z>1{,}645$, dat wil zeggen als $\bar x>100+1{,}645\cdot1=101{,}645$.
3. Als $\mu=101$ is $\bar x$ normaal met gemiddelde 101 en standaardfout 1. De kans op $\bar x>101{,}645$ is
   $P\left(Z>\tfrac{101{,}645-101}{1}\right)=P(Z>0{,}645)=1-\Phi(0{,}645)\approx0{,}259$.
4. De power is dus ongeveer $26\%$ en $\beta\approx0{,}74$. Je mist dit effect dus drie van de vier keer.
:::

{{ exercise: 39-037 }}

## Waar de power van afhangt

Uit de berekening lees je af wat de power bepaalt.

- **Steekproefomvang $n$.** Een grotere $n$ verkleint de standaardfout $\sigma/\sqrt n$, waardoor beide verdelingen smaller worden en
  minder overlappen. Verviervoudigen van $n$ halveert de standaardfout.
- **Significantieniveau $\alpha$.** Een strengere $\alpha$ (zeg $0{,}01$ in plaats van $0{,}05$) schuift de kritieke waarde naar rechts: minder vals alarm, maar ook meer gemiste effecten.
  Je kunt de foutkansen dus niet beide tegelijk verkleinen zonder iets anders te veranderen.
- **Effectgrootte.** Hoe verder het werkelijke gemiddelde van $\mu_0$ ligt, hoe groter de power.
- **Spreiding $\sigma$.** Meer ruis in de metingen verlaagt de power, en nauwkeuriger meten verhoogt haar.

:::example Verviervoudigen van n
Zelfde situatie als hierboven, maar nu $n=400$. De standaardfout is $10/20=0{,}5$ en de kritieke waarde
$100+1{,}645\cdot0{,}5=100{,}8225$. Bij $\mu=101$: $P\left(Z>\tfrac{100{,}8225-101}{0{,}5}\right)=P(Z>-0{,}355)\approx0{,}639$.
De power stijgt van $0{,}26$ naar $0{,}64$. Dat is veel, maar nog niet genoeg: gangbaar is een power van minstens $0{,}8$.
:::

{{ exercise: 39-038 }}

In de praktijk draai je dit om. Je bepaalt vóór het onderzoek het kleinste effect dat inhoudelijk relevant is, kiest $\alpha$
en een gewenste power (vaak $0{,}8$ of $0{,}9$), en rekent uit hoe groot $n$ minimaal moet zijn. Een studie met te weinig power is niet
neutraal: zij mist niet alleen echte effecten, ze produceert ook overschatte effecten wanneer ze toevallig wel significant uitvalt.

{{ exercise: 39-039 }}

## Effectgrootte: hoe groot is het verschil?

Een p-waarde zegt of een effect verschilt van nul, niet hoe groot het is. Om dat te beoordelen heb je een
**effectgrootte** nodig. Dat kan in de eenheden van het probleem zijn (twee gram, vier cijferpunten), maar ook gestandaardiseerd. De bekendste
gestandaardiseerde maat is **Cohen's $d$**: het verschil tussen twee gemiddelden gedeeld door de gemeenschappelijke standaardafwijking,

$$d=\frac{\bar x_1-\bar x_2}{s_p},\qquad s_p=\sqrt{\frac{(n_1-1)s_1^2+(n_2-1)s_2^2}{n_1+n_2-2}}.$$

Cohen stelde zelf, met veel voorbehoud, als vuistregel $d\approx0{,}2$ voor klein, $0{,}5$ voor middelgroot en
$0{,}8$ voor groot voor. Zulke vuistregels zijn hooguit een eerste oriëntatie. Wat groot is, bepaalt de context: een verschil van
$0{,}1$ standaardafwijking in een vaccinstudie kan duizenden levens redden, en $d=0{,}8$ in een studie naar een speelse leerstijl
kan onbelangrijk zijn.

:::example Cohen's d voor twee groepen
Groep 1: $\bar x_1=15$, $s_1=4$; groep 2: $\bar x_2=12$, $s_2=3$; beide $n=25$. Dan $s_p=\sqrt{(16+9)/2}\approx3{,}54$ en
$d=3/3{,}54\approx0{,}85$: een groot effect volgens de vuistregel. Merk op dat dezelfde gegevens in les 4 een Welch-$t$ van 3 gaven. De $t$ groeit mee met
$\sqrt n$; $d$ niet. Dat is precies het nut ervan.
:::

{{ exercise: 39-036 }}

## Statistisch versus praktisch significant

De standaardfout krimpt bij toenemende $n$ tot nul. Daardoor wordt bij voldoende grote steekproeven **elk** verschil, hoe
klein ook, statistisch significant. Met een miljoen waarnemingen is een verschil van een tiende gram bij een
gemiddelde van 1000 gram feilloos aan te tonen, en tegelijk zonder betekenis voor de koper. Omgekeerd kan een
echt belangrijk effect in een kleine studie onopgemerkt blijven, met een grote p-waarde. Beantwoord dus altijd twee vragen: is het
effect aantoonbaar van nul te onderscheiden (statistisch), en is het groot genoeg om ertoe te doen (praktisch)? Het
betrouwbaarheidsinterval beantwoordt beide in één keer, omdat je in één blik de grootte en de onzekerheid ziet.

{{ exercise: 39-040 }}

:::warning Twee veelgemaakte verwarringen
$\alpha$ en power zijn niet hetzelfde: $\alpha$ is een kans onder $H_0$ en power een kans onder een
specifiek alternatief. En een power van 80% betekent niet dat het alternatief met 80% kans waar is; het is de kans op
verwerpen *als* het alternatief waar is.
:::
