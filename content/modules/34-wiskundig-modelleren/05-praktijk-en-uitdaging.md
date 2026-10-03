# Planeten, bevolkingen en dijken

In deze les pas je de modelleercyclus zelfstandig toe, op problemen uit de geschiedenis die je in het intermezzo hebt leren kennen en op een paar nieuwe situaties. De opgaven worden geleidelijk moeilijker. Schrijf bij elke opgave voor jezelf eerst op: wat zijn de variabelen, wat zijn de parameters, welke aannames maak ik, en in welke eenheid komt het antwoord?

## 1. Keplers derde wet gebruiken

De derde wet van Kepler, $T^2 = a^3$, is een model met **nul vrije parameters**, zolang je in jaren en astronomische eenheden rekent. Dat maakt hem tot een sterk instrument: uit de afstand volgt de omlooptijd, en omgekeerd.

:::example Uitgewerkt voorbeeld: de omlooptijd van Saturnus
Saturnus staat gemiddeld op $a = 9{,}54$ AE van de zon.

**Model.** $T^2 = a^3$, dus $T = a^{3/2} = \sqrt{a^3}$.

**Rekenen.** $a^3 = 9{,}54^3 \approx 868{,}3$. Dan $T = \sqrt{868{,}3} \approx 29{,}5$ jaar.

**Interpretatie.** Saturnus heeft bijna dertig jaar nodig voor één rondje om de zon. De gemeten waarde is 29,46 jaar.

**Omgekeerd.** Is de omlooptijd bekend, dan vind je de afstand met $a = T^{2/3} = \sqrt[3]{T^2}$.

**Eenheden.** Werk je in andere eenheden (seconden, meters), dan krijg je $T^2 = k \cdot a^3$ met een constante $k$ die Newton later uitdrukte in de zwaartekrachtconstante en de massa van de zon.
:::

{{ exercises: 34-030, 34-031 }}

## 2. Exponentiële modellen en de aannames van Malthus

Bij exponentiële modellen maak je de parameters vaak niet uit één punt op $t = 0$ op, maar uit twee willekeurige meetmomenten. Dat werkt net zo als in les 3: deel de waarden, en neem de juiste wortel voor het aantal tijdseenheden ertussen.

{{ exercise: 34-032 }}

Lineair tegenover exponentieel is ook het hart van Malthus' redenering. Zet je beide naast elkaar in een tabel, dan zie je precies wanneer de lijn wordt ingehaald.

:::example Uitgewerkt voorbeeld: een lineaire en een exponentiële rij
Een stad heeft 50.000 inwoners en groeit met 10% per jaar. Het drinkwaternet kan nu 80.000 mensen bedienen en wordt elk jaar uitgebreid met capaciteit voor 4.000 mensen extra.

**Modellen.** Bevolking: $B(t) = 50\,000 \cdot 1{,}1^t$. Capaciteit: $C(t) = 80\,000 + 4000t$.

**Tabel.**

| $t$ | 0 | 2 | 4 | 6 | 8 |
|---|---|---|---|---|---|
| $B(t)$ | 50.000 | 60.500 | 73.205 | 88.578 | 107.179 |
| $C(t)$ | 80.000 | 88.000 | 96.000 | 104.000 | 112.000 |

Bij $t = 9$: $B = 117\,897$ tegenover $C = 116\,000$. In het negende jaar wordt de capaciteit voor het eerst overschreden.

**Interpretatie.** Het verschil lijkt de eerste jaren ruim (30.000 mensen speling), maar exponentiële groei haalt elke lineaire groei in. Of 10% per jaar een redelijke aanname is voor negen jaar, is een andere vraag: dat moet je valideren.
:::

{{ exercises: 34-033, 34-034 }}

## 3. Het model van Van Dantzig

In het intermezzo zag je de structuur van Van Dantzigs dijkmodel. Hier werk je een vereenvoudigde versie uit. Kies als variabele de dijkhoogte $h$ (in meter boven NAP).

- De **kans** dat het water in een jaar boven $h$ komt, is $P(h) = e^{-(h - A)/B}$, met $A$ en $B$ parameters (in meter) die uit de stormvloedstatistiek volgen. Elke $B$ meter extra hoogte maakt de kans een factor $e \approx 2{,}72$ kleiner.
- Een overstroming kost $D$ euro. Het **verwachte verlies** per jaar is $P(h) \cdot D$. Over alle toekomstige jaren samen, met een (netto) rentevoet $r$, telt dat op tot $\dfrac{P(h) \cdot D}{r}$.
- De **investering** is $I_0 + I \cdot (h - h_0)$: vaste kosten plus $I$ euro per meter verhoging vanaf de huidige hoogte $h_0$.

De totale kosten zijn dus

$$
C(h) = I_0 + I(h - h_0) + \frac{D}{r} \, e^{-(h - A)/B}
$$

De eerste twee termen stijgen met $h$, de laatste daalt. Het minimum ligt waar de afgeleide nul is (module 29):

$$
C'(h) = I - \frac{D}{rB} \, e^{-(h - A)/B} = 0
\quad\Longrightarrow\quad
e^{-(h - A)/B} = \frac{rBI}{D}
\quad\Longrightarrow\quad
h_{\text{opt}} = A + B \ln\!\left(\frac{D}{rBI}\right)
$$

En de overschrijdingskans bij die optimale hoogte is $P(h_{\text{opt}}) = \dfrac{rBI}{D}$.

:::example Uitgewerkt voorbeeld: een fictieve polder
Neem (fictieve, afgeronde) getallen: $A = 2$ m, $B = 0{,}4$ m, $I = 10$ miljoen euro per meter, $D = 5000$ miljoen euro, $r = 0{,}02$.

**Eenheden.** $rBI$ heeft eenheid (per jaar) · m · (euro per m) = euro per jaar, net als $D$ maal een kans per jaar. Het quotiënt $D/(rBI)$ is een getal zonder eenheid, zoals het hoort in een logaritme.

**Rekenen.** $rBI = 0{,}02 \cdot 0{,}4 \cdot 10 = 0{,}08$ (miljoen euro), dus $\dfrac{D}{rBI} = \dfrac{5000}{0{,}08} = 62\,500$.

$\ln(62\,500) \approx 11{,}04$, dus $h_{\text{opt}} = 2 + 0{,}4 \cdot 11{,}04 \approx 6{,}42$ m.

**Overschrijdingskans.** $P = 1/62\,500$ per jaar: gemiddeld eens in de 62.500 jaar.

**Gevoeligheid.** Verdubbel de schade $D$. Dan wordt $\ln$ groter met $\ln 2 \approx 0{,}69$, en de optimale hoogte stijgt met $0{,}4 \cdot 0{,}69 \approx 0{,}28$ m. Twee keer zoveel op het spel betekent dus slechts 28 cm extra dijk: een kenmerk van exponentiële kansen.
:::

:::tip Waarom dit een goed model is
Het model is grof: het negeert dat dijken ook kunnen bezwijken *voordat* het water erover gaat, het rekent met één schadebedrag, en de rentevoet is een keuze. Maar het maakt de afweging zichtbaar en het laat zien welke parameters het meest uitmaken. Dat is wat Box bedoelde met "nuttig".
:::

## 4. Uitdagingen

De laatste drie opgaven combineren alles uit deze module. Neem er de tijd voor.

{{ exercises: 34-035, 34-036, 34-037 }}
