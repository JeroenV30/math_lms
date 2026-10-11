# Enkelvoudige en samengestelde rente

In de introductie zag je twee manieren waarop een schuld kan groeien: steeds hetzelfde bedrag erbij, of steeds met dezelfde factor. In deze les maken we die twee modellen precies, geven we ze een formule en leer je ze in beide richtingen gebruiken: van beginbedrag naar eindbedrag, en terug naar een onbekend percentage of een onbekende looptijd.

## Woorden en letters

Eerst de taal. Bij elke rentesom spelen dezelfde grootheden een rol.

:::definition Kapitaal, rentevoet, looptijd
- Het **beginkapitaal** $K_0$ (ook: *hoofdsom*, *inleg*, *principaal*) is het bedrag waarmee je begint.
- De **rentevoet** $i$ is de rente per periode, als percentage of als decimaal getal: 4% per jaar betekent $i = 0{,}04$.
- De **looptijd** $n$ is het aantal perioden.
- De **eindwaarde** $K_n$ is het bedrag na $n$ perioden.
:::

Let goed op het woordje **per**. Een rentevoet zonder periode is betekenisloos: 2% per maand is iets heel anders dan 2% per jaar. In deze les is de periode steeds een jaar, tenzij anders vermeld. In de volgende les zie je hoe je omrekent tussen perioden.

## Enkelvoudige rente: steeds over hetzelfde bedrag

Bij **enkelvoudige rente** wordt de rente elk jaar over het beginkapitaal berekend en niet bij het kapitaal opgeteld. Je ontvangt de rente bijvoorbeeld op een andere rekening, of je geeft haar uit. Elk jaar komt er dus hetzelfde bedrag $K_0 \cdot i$ bij.

:::formula Enkelvoudige rente
$$
\text{rente per jaar} = K_0 \cdot i \qquad\qquad K_n = K_0 + n \cdot K_0 \cdot i = K_0\,(1 + n\,i)
$$
:::

:::example Enkelvoudige rente op een obligatie
Je koopt voor € 4.000 een obligatie die 3% per jaar uitkeert. Elk jaar ontvang je de rente op je betaalrekening; aan het eind van de looptijd van 6 jaar krijg je de € 4.000 terug.

- Rente per jaar: $4000 \times 0{,}03 = 120$, dus € 120.
- Totale rente over 6 jaar: $6 \times 120 = 720$, dus € 720.
- Samen met de terugbetaling ontvang je in totaal € 4.720. Met de formule: $4000 \cdot (1 + 6 \times 0{,}03) = 4000 \times 1{,}18 = 4720$.

Dit is enkelvoudige rente omdat de rente niet meegroeit: de uitbetaalde € 120 krijgt zelf geen rente meer (tenzij jij die apart weer belegt).
:::

Binnen één jaar is de rente **evenredig** met het bedrag: twee keer zoveel inleg geeft twee keer zoveel rente. In de verhoudingstabel hieronder staat bovenaan het bedrag en onderaan de rente per jaar bij 3%. Vul zelf eens € 4.000 of € 250 in: de factor per kolom is voor beide rijen dezelfde, net als in module 10.

{{ widget: ratio-table a=100 b=3 labelA="Bedrag (€)" labelB="Rente per jaar bij 3% (€)" }}

De grafiek van $K_n$ tegen $n$ is een rechte lijn met helling $K_0 \cdot i$: een **lineair** model, zoals in module 19.

{{ exercise: 33-001 }}

## Samengestelde rente: rente op rente

Bij **samengestelde rente** wordt de rente aan het eind van elk jaar **bijgeschreven**: ze wordt bij het kapitaal opgeteld en telt het volgende jaar mee. Dat is wat er op een gewone spaarrekening gebeurt, en ook wat er gebeurt met een schuld waarop je niets afbetaalt.

Waarom levert dat een macht op? Kijk naar één jaar. Aan het begin heb je een bedrag $K$. Daar komt $K \cdot i$ rente bij. Aan het eind heb je dus

$$
K + K \cdot i = K \cdot (1 + i).
$$

Een jaar samengestelde rente is dus hetzelfde als **vermenigvuldigen met de groeifactor** $g = 1 + i$, precies zoals bij een procentuele stijging in module 9. Bij 4% rente is de groeifactor $1{,}04$. Het volgende jaar begin je met $K_0 \cdot 1{,}04$ en vermenigvuldig je opnieuw met $1{,}04$, enzovoort:

$$
K_1 = K_0 \cdot 1{,}04, \quad K_2 = K_0 \cdot 1{,}04^2, \quad K_3 = K_0 \cdot 1{,}04^3, \quad \ldots
$$

:::formula Samengestelde rente (eindwaarde)
$$
K_n = K_0 \cdot (1 + i)^n
$$
De factor $(1+i)^n$ heet de **opzinsfactor** of **groeifactor over $n$ jaar**.
:::

Dit is het exponentiële model $N(t) = N_0 \cdot g^t$ uit module 25, met als beginwaarde het beginkapitaal en als groeifactor $1 + i$.

:::example € 1.000 tegen 5%, jaar voor jaar
| jaar | bedrag aan het begin | rente (5%) | bedrag aan het eind |
|---|---|---|---|
| 1 | € 1.000,00 | € 50,00 | € 1.050,00 |
| 2 | € 1.050,00 | € 52,50 | € 1.102,50 |
| 3 | € 1.102,50 | € 55,13 | € 1.157,63 |

Elk jaar is de rente iets hoger dan het jaar ervoor, omdat ze wordt berekend over een groter bedrag. In één keer: $1000 \cdot 1{,}05^3 = 1157{,}625$, afgerond € 1.157,63.

Bij enkelvoudige rente was het na drie jaar € 1.150. Het verschil van € 7,63 is de **rente op rente**: 5% van de eerdere rentebedragen.
:::

:::tip Rond pas aan het eind af
Een bank rondt in werkelijkheid elk bijgeschreven rentebedrag af op centen. In lesvoorbeelden rekenen we, tenzij anders vermeld, met de formule en ronden we alleen het eindantwoord af op centen. Verschillen van een cent of twee door tussentijds afronden zijn dus geen fout in je denkwerk, maar het is een goede gewoonte om tussenresultaten in je rekenmachine te laten staan.
:::

![Staafdiagram: groei van 1000 euro bij 10 procent enkelvoudige en samengestelde rente over 8 jaar](/images/diagrams/m33-enkelvoudig-samengesteld.svg "€ 1.000 tegen 10% per jaar. Enkelvoudig (grijs) groeit elk jaar met € 100; samengesteld (blauw) groeit met steeds meer. Eigen diagram.")

Met de schuifregelaars hieronder zie je beide modellen tegelijk. De blauwe grafiek is $k \cdot (1 + r)^x$ (samengesteld), de tweede grafiek $k \cdot (1 + r\,x)$ (enkelvoudig), met $k$ het beginkapitaal, $r$ de rentevoet als decimaal getal en $x$ het aantal jaren. Zet $r$ eens op 0,02 en daarna op 0,10: bij een lage rente lijken de modellen jarenlang op elkaar, bij een hoge rente lopen ze snel uiteen.

{{ widget: function-plot fn="k*(1+r)^x" fn2="k*(1+r*x)" k=1000 kmin=100 kmax=5000 kstep=100 r=0.05 rmin=0 rmax=0.2 rstep=0.005 xmin=0 xmax=30 ymin=0 ymax=10000 title="Samengesteld tegenover enkelvoudig" }}

:::warning Rente optellen in plaats van vermenigvuldigen
"Tien jaar lang 4% is samen 40%, dus $5000 \times 1{,}40 = 7000$." Dat is enkelvoudige rente. Bij samengestelde rente is tien keer 4% samen $1{,}04^{10} = 1{,}4802\ldots$, dus ruim 48%. Percentages over opeenvolgende perioden **vermenigvuldig** je via groeifactoren; je telt ze niet op.
:::

{{ exercises: 33-002, 33-003, 33-004 }}

## Terugrekenen: welke rente?

Soms ken je het begin- en het eindbedrag en wil je weten welke rente dat oplevert. Dan los je $K_0 \cdot (1+i)^n = K_n$ op naar $i$. Werk in twee stappen.

1. Bereken de **totale groeifactor** $\dfrac{K_n}{K_0}$.
2. Die factor is $(1+i)^n$. Neem de $n$-de machtswortel om de **groeifactor per jaar** te vinden: $1 + i = \left(\dfrac{K_n}{K_0}\right)^{1/n}$.

:::example Een rendement van € 8.000 naar € 10.000
Een belegging groeit in 6 jaar van € 8.000 naar € 10.000. Welke vaste jaarlijkse rente geeft hetzelfde resultaat?

- Totale groeifactor: $10000 : 8000 = 1{,}25$.
- Groeifactor per jaar: $1{,}25^{1/6}$. Op de rekenmachine: `1.25 ^ (1/6)` $\approx 1{,}03789$.
- Rente: $i \approx 0{,}03789$, dus ongeveer 3,79% per jaar.

Controle: $8000 \times 1{,}03789^6 \approx 8000 \times 1{,}2500 = 10000$. Klopt.

Het naïeve antwoord "25% in 6 jaar, dus $25 : 6 \approx 4{,}17\%$ per jaar" is te hoog, omdat het geen rekening houdt met rente op rente.
:::

Dit gemiddelde groeipercentage heet in de beleggingswereld het **gemiddeld jaarrendement** of de *compound annual growth rate*. Je komt het in de praktijkles terug tegen.

## Terugrekenen: hoe lang?

Wil je weten **hoe lang** het duurt voordat een kapitaal een bepaald bedrag bereikt, dan zit de onbekende in de exponent. Er zijn twee aanpakken.

- **Proberen met de rekenmachine**: bereken $(1+i)^n$ voor opeenvolgende $n$ tot je over de grens heen gaat. Bij rente die per heel jaar wordt bijgeschreven is het antwoord dan ook een geheel aantal jaren.
- **Met logaritmen** (module 26): uit $(1+i)^n = F$ volgt $n = \dfrac{\log F}{\log(1+i)}$. Rond daarna naar boven af als de rente alleen aan het eind van elk jaar wordt bijgeschreven.

:::example Wanneer is € 3.000 gegroeid tot € 4.000?
Je zet € 3.000 vast tegen 3,5% per jaar, jaarlijks bijgeschreven. Na hoeveel jaar staat er voor het eerst minstens € 4.000?

- Nodige groeifactor: $4000 : 3000 = 1{,}3333\ldots$
- Met logaritmen: $n = \dfrac{\log 1{,}3333}{\log 1{,}035} \approx \dfrac{0{,}12494}{0{,}014940} \approx 8{,}36$.
- De rente wordt alleen aan het eind van elk jaar bijgeschreven. Na 8 jaar staat er $3000 \times 1{,}035^8 \approx 3950{,}43$, nog net te weinig. Na 9 jaar: $3000 \times 1{,}035^9 \approx 4088{,}70$.

Het antwoord is dus **9 jaar**. Let op: niet 8 (afgerond naar het dichtstbijzijnde gehele getal), want na 8 jaar is de grens nog niet bereikt.
:::

{{ exercises: 33-005, 33-006, 33-007 }}
