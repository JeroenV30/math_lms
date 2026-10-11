# Vast verschil of vaste factor

Er zijn oneindig veel soorten rijen, maar twee families komen zo vaak voor dat ze een eigen naam hebben. Bij de ene komt er elke stap **hetzelfde getal bij**; bij de andere wordt elke stap **met hetzelfde getal vermenigvuldigd**. Dat onderscheid ken je al: in module 19 heette het lineair, in module 25 exponentieel. Hier bekijk je dezelfde ideeën met de bril van de rij.

## 1. De rekenkundige rij

Een theater heeft op de eerste rij 18 stoelen, en elke volgende rij telt 2 stoelen meer. De aantallen stoelen per rij vormen de rij

$$
18,\ 20,\ 22,\ 24,\ \ldots
$$

Het **verschil** tussen opeenvolgende termen is steeds hetzelfde. Zo'n rij heet een **rekenkundige rij**. Het vaste verschil noemen we $v$.

:::definition Rekenkundige rij
Een rij heet **rekenkundig** als het verschil tussen twee opeenvolgende termen constant is:

$$
u(n+1) - u(n) = v \quad\text{voor elke } n.
$$

Het getal $v$ heet het **verschil** van de rij. Het mag positief, negatief of nul zijn.
:::

Hoe kom je aan een directe formule? Denk niet in formules, maar in stappen. Van $u(0)$ naar $u(n)$ zet je $n$ stappen, en bij elke stap komt er $v$ bij. Dus komt er in totaal $n \cdot v$ bij.

:::formula Rekenkundige rij
$$
u(n) = u(0) + n \cdot v
$$

Recursief: $u(n+1) = u(n) + v$.
:::

Vergelijk dit met de lineaire functie $f(x) = ax + b$ uit module 19. De startwaarde $b$ is hier $u(0)$; de helling $a$ is hier het verschil $v$. Een rekenkundige rij is dus een lineaire functie die je alleen bij gehele $n \geq 0$ bekijkt. De punten van de rij liggen op een rechte lijn.

:::example Uitgewerkt voorbeeld: de laatste rij van het theater
Het theater heeft 25 rijen. Hoeveel stoelen telt de laatste rij?

1. **Kies de nummering.** De eerste rij is $u(0) = 18$, het verschil is $v = 2$.
2. **Welke index hoort bij de laatste rij?** De 25ste rij is $u(24)$, want $u(n)$ is de $(n+1)$-ste term.
3. **Vul in:** $u(24) = 18 + 24 \cdot 2 = 18 + 48 = 66$.

De laatste rij telt 66 stoelen. Wie $18 + 25 \cdot 2 = 68$ uitrekent, telt één stap te veel: tussen 25 rijen zitten maar 24 overgangen. Denk aan een hek: voor 25 palen heb je 24 tussenstukken.
:::

:::example Uitgewerkt voorbeeld: verschil uit twee termen
Van een rekenkundige rij is gegeven: $u(4) = 31$ en $u(10) = 61$. Bereken $v$ en $u(0)$.

1. **Hoeveel stappen zitten ertussen?** Van $n = 4$ naar $n = 10$ zijn het $6$ stappen.
2. **Hoeveel is er in die stappen bijgekomen?** $61 - 31 = 30$.
3. **Eén stap:** $v = 30 : 6 = 5$.
4. **Terug naar het begin:** van $u(0)$ naar $u(4)$ zijn het 4 stappen van 5, dus $u(0) = 31 - 4 \cdot 5 = 11$.
5. **Controle:** $u(10) = 11 + 10 \cdot 5 = 61$. Klopt.

Dit is precies dezelfde redenering als "helling uit twee punten" in module 19: verschil in uitvoer gedeeld door verschil in invoer.
:::

{{ exercises: 28-007, 28-008 }}

## 2. De meetkundige rij

Een bal stuitert van 640 cm hoogte en komt na elke stuit tot driekwart van de vorige hoogte. De hoogtes vormen de rij

$$
640,\ 480,\ 360,\ 270,\ 202{,}5,\ \ldots
$$

De verschillen zijn niet constant ($-160$, $-120$, $-90$, …), maar de **verhouding** tussen opeenvolgende termen wel: $480 : 640 = 0{,}75$, $360 : 480 = 0{,}75$, enzovoort. Zo'n rij heet een **meetkundige rij**. De vaste factor heet de **reden** en noemen we $r$.

:::definition Meetkundige rij
Een rij heet **meetkundig** als elke term ontstaat door de vorige met hetzelfde getal $r$ te vermenigvuldigen:

$$
u(n+1) = r \cdot u(n) \quad\text{voor elke } n.
$$

Het getal $r$ heet de **reden** van de rij. In deze module is $r$ meestal positief en $u(0) \neq 0$.
:::

Het woord "reden" komt van het Latijnse *ratio*, verhouding. Waarom "meetkundig"? Bij de oude Grieken was een meetkundig gemiddelde van $a$ en $b$ het getal $m$ met $a : m = m : b$, een gelijke verhouding. In een meetkundige rij is elke term het meetkundig gemiddelde van zijn twee buren. Op dezelfde manier is in een rekenkundige rij elke term het gewone (rekenkundige) gemiddelde van zijn buren.

Ook hier denk je in stappen. Van $u(0)$ naar $u(n)$ vermenigvuldig je $n$ keer met $r$. Dat is vermenigvuldigen met $r^n$.

:::formula Meetkundige rij
$$
u(n) = u(0) \cdot r^n
$$

Recursief: $u(n+1) = r \cdot u(n)$.
:::

Dat is precies het exponentiële model $N(t) = N_0 \cdot g^t$ uit module 25, met $u(0)$ als beginwaarde en de reden $r$ als groeifactor. Bij $r > 1$ groeit de rij, bij $0 < r < 1$ krimpt hij, en bij $r = 1$ blijft hij constant.

:::example Uitgewerkt voorbeeld: de stuiterbal
Hoe hoog komt de bal na de vierde stuit?

1. **Kies de nummering.** $u(0) = 640$ is de beginhoogte; $u(n)$ is de hoogte na $n$ stuiten. De reden is $r = 0{,}75$.
2. **Directe formule:** $u(n) = 640 \cdot 0{,}75^n$.
3. **Vul in:** $u(4) = 640 \cdot 0{,}75^4 = 640 \cdot 0{,}31640625 = 202{,}5$ cm.

Controleer met de recursie: $640 \to 480 \to 360 \to 270 \to 202{,}5$. Vier keer vermenigvuldigen, vier stuiten.
:::

:::example Uitgewerkt voorbeeld: reden uit twee termen
Van een meetkundige rij met positieve termen is gegeven: $u(2) = 18$ en $u(5) = 486$. Bereken $r$ en $u(0)$.

1. **Hoeveel stappen?** Van $n = 2$ naar $n = 5$ zijn het 3 stappen, dus is er 3 keer met $r$ vermenigvuldigd: $u(5) = u(2) \cdot r^3$.
2. **Deel:** $r^3 = 486 : 18 = 27$, dus $r = 3$.
3. **Terug naar het begin:** $u(2) = u(0) \cdot 3^2$, dus $u(0) = 18 : 9 = 2$.
4. **Controle:** $u(5) = 2 \cdot 3^5 = 2 \cdot 243 = 486$. Klopt.

Let op het verschil met de rekenkundige rij. Daar **deel** je het verschil door het aantal stappen; hier neem je de **wortel** van de verhouding. Delen hoort bij optellen, worteltrekken bij vermenigvuldigen.
:::

{{ exercises: 28-009, 28-010 }}

## 3. Herkennen: verschil of verhouding?

Krijg je een rijtje getallen, dan test je beide:

1. Bereken de **verschillen** $u(1) - u(0)$, $u(2) - u(1)$, … Zijn ze gelijk, dan is de rij rekenkundig.
2. Bereken de **verhoudingen** $u(1) : u(0)$, $u(2) : u(1)$, … Zijn ze gelijk, dan is de rij meetkundig.
3. Is geen van beide het geval, dan is de rij geen van beide (zoals de Fibonacci-rij of de rij van de kwadraten).

:::example Uitgewerkt voorbeeld: drie rijtjes
- $7, 4, 1, -2, -5$: verschillen $-3, -3, -3, -3$. Rekenkundig met $v = -3$. Directe formule: $u(n) = 7 - 3n$.
- $81, 54, 36, 24, 16$: verschillen $-27, -18, -12, -8$ (niet constant); verhoudingen $54 : 81 = \tfrac23$, $36 : 54 = \tfrac23$, $24 : 36 = \tfrac23$, $16 : 24 = \tfrac23$. Meetkundig met $r = \tfrac23$. Directe formule: $u(n) = 81 \cdot \left(\tfrac23\right)^n$.
- $1, 4, 9, 16, 25$: verschillen $3, 5, 7, 9$; verhoudingen $4$, $2{,}25$, $1{,}78\ldots$ Geen van beide.
:::

:::tip Rekenkundig is lineair, meetkundig is exponentieel
Een handig ezelsbruggetje: **optellen** hoort bij **rekenkundig** (rekenen = optellen), **vermenigvuldigen** hoort bij **meetkundig** (verhoudingen, zoals bij gelijkvormige figuren in de meetkunde). Op de lange termijn wint een stijgende meetkundige rij altijd van een rekenkundige rij, hoe groot het verschil $v$ ook is en hoe klein de reden $r > 1$ ook is.
:::

Dat laatste kun je zien in de grafiek hieronder. Beide functies zijn hier als doorgetrokken lijn getekend; de rijen zijn de punten bij gehele $x$. De rechte lijn is $1000 + 250x$, de kromme is $100 \cdot r^x$. Verschuif de reden $r$ en kijk waar de kromme de lijn inhaalt.

{{ widget: function-plot fn="1000+250*x" fn2="100*r^x" r="1.5" rmin="1.1" rmax="2" rstep="0.1" xmin="0" xmax="14" ymin="0" ymax="6000" title="Rekenkundig tegen meetkundig" }}

:::example Uitgewerkt voorbeeld: wanneer haalt de meetkundige rij in?
Rij A: $a(n) = 1000 + 250n$. Rij B: $b(n) = 100 \cdot 1{,}5^n$. Vanaf welke $n$ is $b(n) > a(n)$?

Een exacte algebraïsche oplossing is hier lastig (de onbekende staat in een exponent én in een lineaire term). Maar omdat $n$ geheel is, kun je gewoon een tabel maken:

| $n$ | 6 | 7 | 8 | 9 |
|---|---|---|---|---|
| $a(n)$ | 2500 | 2750 | 3000 | 3250 |
| $b(n)$ | 1139,1 | 1708,6 | 2562,9 | 3844,3 |

Bij $n = 8$ is B nog kleiner, bij $n = 9$ groter. Vanaf $n = 9$ ligt B voor, en daarna loopt de voorsprong snel op: bij $n = 12$ is $b(12) \approx 12\,975$ tegen $a(12) = 4000$.
:::

## 4. Een grens passeren

Vaak wil je weten **wanneer** een rij een bepaalde waarde voor het eerst passeert. Bij een rekenkundige rij los je een lineaire vergelijking op en rond je af naar een geheel getal. Bij een meetkundige rij gebruik je logaritmen (module 26), of je probeert een paar gehele waarden.

:::example Uitgewerkt voorbeeld: drempel bij een meetkundige rij
De rij $u(n) = 3 \cdot 2^n$. Voor welke $n$ is $u(n)$ voor het eerst groter dan $10\,000$?

1. **Vergelijking:** $3 \cdot 2^n > 10\,000$, dus $2^n > 3333{,}3\ldots$
2. **Machten van 2:** $2^{11} = 2048$ en $2^{12} = 4096$. De eerste macht boven $3333{,}3$ is $2^{12}$.
3. **Controle:** $u(11) = 3 \cdot 2048 = 6144$ (nog niet), $u(12) = 3 \cdot 4096 = 12\,288$ (wel).
4. **Met logaritmen:** $n > \log_2(3333{,}3) \approx 11{,}7$; het eerste gehele getal daarboven is $12$.

Antwoord: $n = 12$, de dertiende term.
:::

:::warning Drempels en afronden
Bij een drempelvraag rond je **altijd naar boven** af naar het eerste gehele getal dat aan de ongelijkheid voldoet, ook als de berekende waarde $11{,}1$ is. En controleer met twee termen: de laatste die nog niet voldoet en de eerste die wel voldoet.
:::

{{ exercises: 28-011, 28-012, 28-013, 28-014, 28-015 }}
