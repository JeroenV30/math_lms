# Samenvatting

Deze module begon bij een Babylonische leerling die de diagonaal van een vierkant berekende. Om dat te begrijpen heb je twee bewegingen geleerd die elkaars omgekeerde zijn: **machtsverheffen** (herhaald vermenigvuldigen) en **worteltrekken** (terugrekenen naar het getal dat werd vermenigvuldigd). Hieronder staat wat je na deze module moet beheersen.

## Machten

- $a^n$ is het product van $n$ factoren $a$. Het getal $a$ is het **grondtal**, $n$ de **exponent**.
- $a^2$ is de oppervlakte van een vierkant met zijde $a$, $a^3$ de inhoud van een kubus met ribbe $a$.
- Een macht is geen vermenigvuldiging met de exponent: $3^2 = 9$, niet $6$. Grondtal en exponent zijn niet uitwisselbaar: $2^5 = 32$, maar $5^2 = 25$.
- Haakjes bepalen het grondtal: $(-2)^2 = 4$, maar $-2^2 = -4$. Een even macht is nooit negatief.
- In de rekenvolgorde komen machten direct na de haakjes: $2 \cdot 3^2 = 18$.

## Rekenregels

Voor $a, b \neq 0$ en gehele exponenten $m$ en $n$:

| Regel | Formule | Voorbeeld |
|---|---|---|
| Product | $a^m \cdot a^n = a^{m+n}$ | $2^3 \cdot 2^4 = 2^7$ (niet $2^{12}$) |
| Quotiënt | $a^m : a^n = a^{m-n}$ | $3^5 : 3^2 = 3^3$ |
| Macht van een macht | $(a^m)^n = a^{mn}$ | $(2^3)^4 = 2^{12}$ |
| Product tot een macht | $(ab)^n = a^n b^n$ | $(2a^3)^2 = 4a^6$ |
| Exponent nul | $a^0 = 1$ | $7^0 = 1$ |
| Negatieve exponent | $a^{-n} = \dfrac{1}{a^n}$ | $10^{-2} = \dfrac{1}{100}$ (niet $-100$) |

Alle regels volgen uit het **tellen van factoren**. Ze gelden voor producten en quotiënten, niet voor sommen: $(2+3)^2 = 25$, terwijl $2^2 + 3^2 = 13$.

## Machten van tien

- **Wetenschappelijke notatie**: $a \times 10^n$ met $1 \leq |a| < 10$. Grote getallen krijgen een positieve exponent ($149\,600\,000 \approx 1{,}5 \times 10^8$), getallen tussen 0 en 1 een negatieve ($0{,}000002 = 2 \times 10^{-6}$).
- Vermenigvuldigen: mantissen vermenigvuldigen, exponenten optellen. Delen: mantissen delen, exponenten aftrekken. Daarna zo nodig normaliseren.
- Optellen: eerst dezelfde macht van tien maken.

## Wortels

- $\sqrt{a}$ (voor $a \geq 0$) is het **niet-negatieve** getal met kwadraat $a$. Controleer altijd door terug te kwadrateren.
- $x^2 = 64$ heeft twee oplossingen, $x = \pm 8$, maar $\sqrt{64} = 8$. In het algemeen is $\sqrt{a^2} = |a|$.
- Een wortel uit een negatief getal bestaat niet als reëel getal.
- Schatten: $16 < 20 < 25$, dus $4 < \sqrt{20} < 5$. Verfijnen door decimalen te kwadrateren.
- $\sqrt{ab} = \sqrt{a}\sqrt{b}$ en $\sqrt{\frac ab} = \frac{\sqrt a}{\sqrt b}$, maar $\sqrt{9 + 16} = 5$, niet $3 + 4$.
- Vereenvoudigen: haal het grootste kwadraat uit de wortel, bijvoorbeeld $\sqrt{12} = 2\sqrt3$ en $\sqrt{72} = 6\sqrt2$.
- De derdemachtswortel $\sqrt[3]{a}$ is het getal met derde macht $a$: $\sqrt[3]{64} = 4$ en $\sqrt[3]{-8} = -2$.
- $\sqrt{2}$ is **irrationaal**: het is geen breuk. Het bewijs gaat uit het ongerijmde: uit $p^2 = 2q^2$ volgt dat $p$ en $q$ allebei even zijn.

## Toepassingen

- Lengtefactor $k$ geeft oppervlaktefactor $k^2$ en inhoudsfactor $k^3$; omgekeerd hoort bij oppervlaktefactor $f$ de lengtefactor $\sqrt f$.
- Herhaalde groei: startwaarde $\cdot$ factor$^{\text{aantal stappen}}$. Op het beginmoment is de exponent 0.
- Schuine zijde (vooruitblik op module 18): $c = \sqrt{a^2 + b^2}$.

## Historische lijn

Babylonische schrijvers maakten tabellen met kwadraten en kenden $\sqrt2$ tot op zes decimalen (YBC 7289, ca. 1800–1600 v.Chr.). Griekse wiskundigen ontdekten dat de diagonaal en de zijde van een vierkant onmeetbaar zijn; de legende over Hippasus is laat en onbetrouwbaar. Archimedes benoemde in de *Zandrekenaar* getallen tot ver voorbij $10^{63}$ en formuleerde de productregel voor machten van tien. Het wortelteken verscheen in 1525 bij Rudolff, de moderne exponentnotatie in 1637 bij Descartes.

:::tip Controleer jezelf voordat je de toets maakt
Kun je zonder hulp uitleggen waarom $a^0 = 1$? Waarom $2^3 \cdot 2^4$ geen $2^{12}$ is? Waarom $\sqrt{64} = 8$ maar $x^2 = 64$ twee oplossingen heeft? En kun je het bewijs dat $\sqrt2$ geen breuk is in je eigen woorden navertellen? Als dat lukt, ben je klaar voor de toets.
:::

## De hoofdstuktoets

De toets bestaat uit 15 vragen over de hele module, van eenvoudige machten tot wetenschappelijke notatie en het vereenvoudigen van wortels. Je hebt 70% nodig om de module af te ronden en 85% voor "beheerst". Gebruik pen en papier; een rekenmachine heb je alleen nodig bij de vraag over een wortel op twee decimalen.

{{ quiz }}
