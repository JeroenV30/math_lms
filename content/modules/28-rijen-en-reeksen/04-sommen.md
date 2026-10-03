# Termen optellen: somformules

Een rij beschrijft wat er bij elke stap gebeurt. Vaak wil je echter weten wat er **in totaal** is gebeurd: hoeveel stoelen het hele theater telt, hoeveel er in tien jaar is gespaard, hoeveel graankorrels er op het hele schaakbord liggen. Daarvoor tel je de termen van een rij op. Zo'n som heet een **reeks**. In deze les leer je twee somformules, en vooral: waarom ze kloppen.

## 1. Notatie: de somteken-schrijfwijze

Een lange som als $1 + 2 + 3 + \ldots + 100$ kun je korter opschrijven met het **somteken** $\Sigma$, de Griekse hoofdletter sigma (de S van "som"):

$$
\sum_{k=1}^{100} k = 1 + 2 + 3 + \ldots + 100
$$

Lees dit als: "de som van $k$, waarbij $k$ loopt van 1 tot en met 100". De letter $k$ is een tellertje; onder het sigmateken staat waar het begint, erboven waar het eindigt. Nog twee voorbeelden:

$$
\sum_{k=0}^{3} (2k + 1) = 1 + 3 + 5 + 7 = 16, \qquad \sum_{k=0}^{4} 3^k = 1 + 3 + 9 + 27 + 81 = 121
$$

:::tip Tel de termen
Een som van $k = a$ tot en met $k = b$ heeft $b - a + 1$ termen, niet $b - a$. Van $k = 0$ tot en met $k = 3$ zijn het er 4. Dit is dezelfde valkuil als bij de index van een rij: tel de palen, niet de tussenstukken.
:::

## 2. De truc die aan Gauss wordt toegeschreven

:::question Denk eerst zelf na
Bereken $1 + 2 + 3 + \ldots + 100$ zonder alle getallen een voor een op te tellen. Kijk naar het eerste en het laatste getal, naar het tweede en het een-na-laatste, enzovoort. Wat valt je op?
:::

Het verhaal gaat dat de jonge Carl Friedrich Gauss deze som in een paar tellen uitrekende. Je leest in het historisch intermezzo dat de oudste bron het minder precies vertelt dan latere versies. Maar de redenering is in elk geval tijdloos. Schrijf de som twee keer op, één keer vooruit en één keer achteruit:

$$
\begin{aligned}
S &= 1 + 2 + 3 + \ldots + 99 + 100 \\
S &= 100 + 99 + 98 + \ldots + 2 + 1
\end{aligned}
$$

Tel de twee regels **kolom voor kolom** op. Elke kolom geeft $101$: $1 + 100$, $2 + 99$, $3 + 98$, … En er zijn 100 kolommen. Dus

$$
2S = 100 \cdot 101 = 10\,100, \qquad S = 5050.
$$

Het mooie is dat je de som niet echt uitrekent; je ziet dat hij **twee keer** gelijk is aan iets eenvoudigs. In een plaatje: twee trappen vormen samen een rechthoek.

![Twee trappen vormen een rechthoek](/images/diagrams/m28-gauss-trap.svg "De som 1 + 2 + ... + 6 als trap van blokjes. Twee trappen vormen een rechthoek van 6 bij 7, dus is de som de helft van 42. Eigen diagram.")

:::formula Som van 1 tot en met n
$$
1 + 2 + 3 + \ldots + n = \frac{n(n+1)}{2}
$$
:::

De getallen $1, 3, 6, 10, 15, 21, \ldots$ die je zo krijgt, heten **driehoeksgetallen**: zoveel knikkers kun je in een driehoek leggen, met 1 in de bovenste rij, 2 in de volgende, enzovoort.

## 3. De som van een rekenkundige rij

De truc werkt voor elke rekenkundige rij, niet alleen voor $1, 2, 3, \ldots$ Waarom? Omdat in een rekenkundige rij elke stap van voren evenveel oplevert als een stap van achteren kost. Schrijf de som vooruit en achteruit:

- de eerste term plus de laatste term,
- de tweede term (eerste $+ v$) plus de een-na-laatste (laatste $- v$),
- de derde term (eerste $+ 2v$) plus de twee-na-laatste (laatste $- 2v$), …

Elk paar heeft dezelfde som: **eerste + laatste**. Met $N$ termen heb je $N$ kolommen, dus

:::formula Som van een rekenkundige rij
$$
S = \frac{N \cdot (\text{eerste term} + \text{laatste term})}{2}
$$

waarbij $N$ het **aantal termen** is. Anders gezegd: het aantal termen maal het gemiddelde van de eerste en de laatste term.
:::

De formule is goed te onthouden als "aantal maal gemiddelde": in een rekenkundige rij is het gemiddelde van alle termen gelijk aan het gemiddelde van de eerste en de laatste.

:::example Uitgewerkt voorbeeld: alle stoelen van het theater
Het theater uit les 3 heeft 25 rijen, met 18 stoelen op de eerste rij en steeds 2 meer. Hoeveel stoelen zijn er in totaal?

1. **Eerste en laatste term:** de eerste rij telt 18, de laatste $18 + 24 \cdot 2 = 66$ (zie les 3).
2. **Aantal termen:** $N = 25$.
3. **Som:** $S = \dfrac{25 \cdot (18 + 66)}{2} = \dfrac{25 \cdot 84}{2} = 25 \cdot 42 = 1050$.

Het gemiddelde aantal stoelen per rij is 42; 25 rijen met gemiddeld 42 stoelen geeft 1050.
:::

:::example Uitgewerkt voorbeeld: hoeveel termen?
Bereken $4 + 9 + 14 + \ldots + 249$.

1. **Herken de rij:** verschil $v = 5$, eerste term 4.
2. **Aantal termen:** hoeveel stappen van 5 zitten er tussen 4 en 249? $(249 - 4) : 5 = 49$ stappen. Dus $N = 49 + 1 = 50$ termen.
3. **Som:** $S = \dfrac{50 \cdot (4 + 249)}{2} = 25 \cdot 253 = 6325$.

Stap 2 is waar het meestal misgaat. Het aantal termen is het aantal stappen **plus één**.
:::

:::warning Niet vergeten te halveren
Het product $N \cdot (\text{eerste} + \text{laatste})$ is de som van **twee** trappen, dus het dubbele van wat je zoekt. Wie de deling door 2 vergeet, krijgt precies twee keer het goede antwoord. Een snelle controle: de som moet ongeveer gelijk zijn aan het aantal termen maal een "middelste" term.
:::

{{ exercises: 28-016, 28-017, 28-018 }}

## 4. De som van een meetkundige rij

Bij een meetkundige rij werkt het omdraaien niet: $1 + 2 + 4 + 8$ achterstevoren geeft $8 + 4 + 2 + 1$, en de kolommen $9, 6, 6, 9$ zijn niet gelijk. Er is een andere truc nodig: **vermenigvuldigen en verschuiven**.

Neem $S = 1 + 3 + 9 + 27 + 81$. Vermenigvuldig de hele som met de reden $r = 3$:

$$
\begin{aligned}
3S &= \phantom{1 + {}} 3 + 9 + 27 + 81 + 243 \\
S &= 1 + 3 + 9 + 27 + 81
\end{aligned}
$$

Bijna alle termen komen in beide regels voor, alleen één plaats verschoven. Trek de onderste regel van de bovenste af: alles in het midden valt weg.

$$
3S - S = 243 - 1, \qquad 2S = 242, \qquad S = 121.
$$

Dat klopt met de som die je in paragraaf 1 al uitrekende. Hetzelfde idee werkt algemeen. Voor de eerste $N$ termen van een meetkundige rij, $S = u(0) + u(0)r + u(0)r^2 + \ldots + u(0)r^{N-1}$:

$$
r \cdot S - S = u(0) \cdot r^N - u(0), \qquad\text{dus}\qquad S \cdot (r - 1) = u(0) \cdot (r^N - 1).
$$

:::formula Som van een meetkundige rij
De som van de eerste $N$ termen $u(0) + u(1) + \ldots + u(N-1)$ van een meetkundige rij met reden $r \neq 1$ is

$$
S_N = u(0) \cdot \frac{r^N - 1}{r - 1}
$$

Bij $0 < r < 1$ schrijf je dezelfde formule vaak als $S_N = u(0) \cdot \dfrac{1 - r^N}{1 - r}$, zodat teller en noemer positief zijn. Bij $r = 1$ zijn alle termen gelijk en is $S_N = N \cdot u(0)$.
:::

Let op de exponent: de som heeft $N$ termen en loopt tot $r^{N-1}$, maar in de formule staat $r^N$. Die ene "extra" macht is de term die na het verschuiven overblijft.

:::example Uitgewerkt voorbeeld: het hele schaakbord
Op veld 1 ligt 1 korrel, op veld 2 liggen er 2, op veld 3 vier, … Hoeveel korrels liggen er op alle 64 velden samen?

1. **Herken de rij:** meetkundig met $u(0) = 1$ en $r = 2$; veld $k$ krijgt $2^{k-1}$ korrels, veld 64 dus $2^{63}$.
2. **Aantal termen:** $N = 64$.
3. **Somformule:** $S = 1 \cdot \dfrac{2^{64} - 1}{2 - 1} = 2^{64} - 1$.
4. **Uitgeschreven:** $2^{64} - 1 = 18\,446\,744\,073\,709\,551\,615$, ongeveer $1{,}8 \cdot 10^{19}$.

Een opvallend detail: de som van alle velden ervóór is $2^{63} - 1$, precies één korrel minder dan wat er op het laatste veld ligt. Bij verdubbelen is **elke stap groter dan alles wat eraan voorafging bij elkaar**. Dat is de kern van exponentiële groei.
:::

{{ widget: powers base=2 max=12 }}

Hoeveel is $1{,}8 \cdot 10^{19}$ korrels? Neem aan dat een tarwekorrel ongeveer $0{,}05$ gram weegt (het werkelijke gewicht varieert per ras). Dan weegt alles samen ongeveer $9 \cdot 10^{17}$ gram, ofwel $9 \cdot 10^{11}$ ton: ruim 900 miljard ton. De wereldoogst van tarwe ligt in de orde van 800 miljoen ton per jaar. De vorst uit de legende had dus meer dan duizend jaar wereldoogst nodig gehad.

:::history De legende van het schaakbord
Het verhaal van de uitvinder van het schaakspel en de graankorrels bestaat in veel varianten; de namen van de uitvinder en de vorst verschillen per versie. De oudst bekende uitgewerkte versie staat in het biografisch woordenboek van de Arabische geleerde Ibn Khallikan uit 1256, waar de uitvinder Sissa ibn Dahir heet. Er zijn aanwijzingen dat het rekenraadsel ouder is. Het is een **legende**: er is geen enkel bewijs dat zo'n beloning ooit gevraagd of gegeven is. De rekensom is wel echt, en precies daarom werd het verhaal eeuwenlang doorverteld.
:::

:::example Uitgewerkt voorbeeld: een krimpende rij optellen
Bereken $96 + 48 + 24 + 12 + 6 + 3$.

1. **Herken de rij:** meetkundig met $u(0) = 96$ en $r = \tfrac12$; $N = 6$ termen.
2. **Somformule (vorm voor $r < 1$):** $S = 96 \cdot \dfrac{1 - \left(\tfrac12\right)^6}{1 - \tfrac12} = 96 \cdot \dfrac{1 - \tfrac{1}{64}}{\tfrac12} = 192 \cdot \dfrac{63}{64} = 189$.
3. **Controle door gewoon optellen:** $96 + 48 = 144$, $+24 = 168$, $+12 = 180$, $+6 = 186$, $+3 = 189$. Klopt.

Merk op dat de som dicht bij $192$ ligt, maar er net onder blijft. Ga je door met $1{,}5 + 0{,}75 + \ldots$, dan kom je steeds dichter bij $192$. Daarover gaat de volgende les.
:::

{{ exercises: 28-019, 28-020, 28-021 }}

## 5. Omgekeerd redeneren met een som

Soms ken je de som en zoek je het aantal termen. Bij een rekenkundige rij leidt dat tot een kwadratische vergelijking (module 21).

:::example Uitgewerkt voorbeeld: hoe ver moet je optellen?
Voor welke $n$ is $1 + 2 + \ldots + n = 210$?

1. **Somformule:** $\dfrac{n(n+1)}{2} = 210$, dus $n(n+1) = 420$.
2. **Schat:** $n^2 \approx 420$, dus $n$ ligt rond $20$. Probeer: $20 \cdot 21 = 420$. Raak.
3. **Antwoord:** $n = 20$.

Lukt schatten niet, dan los je $n^2 + n - 420 = 0$ op met de abc-formule: $n = \dfrac{-1 + \sqrt{1 + 1680}}{2} = \dfrac{-1 + 41}{2} = 20$. De negatieve oplossing valt af.
:::

{{ exercises: 28-022, 28-023 }}
