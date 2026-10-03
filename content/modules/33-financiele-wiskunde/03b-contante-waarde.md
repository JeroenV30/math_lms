# Contante waarde: geld nu en geld later

Tot nu toe rekende je **vooruit**: je had een bedrag en vroeg wat het later waard zou zijn. Even vaak moet je **terug** rekenen. Wat is een bedrag dat je over vijf jaar krijgt, vandaag waard? Die vraag is de basis van bijna elke financiële beslissing: een lening, een investering, een pensioen, een schadevergoeding of een loterijprijs.

## Het idee: terugrekenen met dezelfde groeifactor

Stel dat de rente 4% per jaar is. Dan zijn "€ 100 nu" en "€ 104 over een jaar" voor jou **gelijkwaardig**: met € 100 nu kun je, door het op de bank te zetten, over een jaar precies € 104 hebben. Andersom is € 104 over een jaar vandaag € 100 waard.

Wat is dan € 100 over een jaar vandaag waard? Je zoekt het bedrag $x$ dat in een jaar uitgroeit tot € 100:

$$
x \cdot 1{,}04 = 100 \qquad\Longrightarrow\qquad x = \frac{100}{1{,}04} \approx 96{,}15.
$$

Vandaag € 96,15 op de bank zetten levert over een jaar € 100 op. Dat bedrag heet de **contante waarde** van € 100 over een jaar. Het terugrekenen zelf heet **disconteren**.

:::definition Contante waarde
De **contante waarde** (ook: *huidige waarde*, Engels *present value*) van een bedrag dat je op een later moment ontvangt, is het bedrag dat je **nu** zou moeten beleggen om op dat latere moment precies dat bedrag te hebben, bij een gegeven rente. De rente die je daarbij gebruikt heet de **disconteringsvoet**.
:::

Over meer jaren gaat het op dezelfde manier. Vooruit vermenigvuldig je $n$ keer met $(1+i)$; terug deel je $n$ keer door $(1+i)$.

:::formula Contante waarde van één bedrag
$$
CW = \frac{K_n}{(1 + i)^n} = K_n \cdot (1+i)^{-n}
$$
De factor $(1+i)^{-n}$ heet de **disconteringsfactor**. Hij is altijd kleiner dan 1 (bij een positieve rente).
:::

![Tijdlijn met bedragen op verschillende momenten die naar het nu worden teruggerekend](/images/diagrams/m33-contante-waarde.svg "Vooruit rekenen (eindwaarde) en terugrekenen (contante waarde) zijn elkaars omgekeerde. Eigen diagram.")

:::example Een erfenis over 8 jaar
Je krijgt over 8 jaar € 25.000 uit een fonds. Wat is dat vandaag waard bij een disconteringsvoet van 3% per jaar?

- Disconteringsfactor: $1{,}03^{-8} = \dfrac{1}{1{,}03^8} \approx \dfrac{1}{1{,}266770} \approx 0{,}789409$.
- Contante waarde: $25000 \times 0{,}789409 \approx 19735{,}23$, dus ongeveer € 19.735,23.

Controle door vooruit te rekenen: $19735{,}23 \times 1{,}03^8 \approx 25000$. Klopt.
:::

:::warning Disconteren is niet "het percentage eraf halen"
Een veelgemaakte fout is $25000 \times 0{,}97^8$ te rekenen, alsof er elk jaar 3% van het bedrag af gaat. Dat geeft ongeveer € 19.593,58: te weinig. Delen door $1{,}03$ is niet hetzelfde als vermenigvuldigen met $0{,}97$, want $\frac{1}{1{,}03} \approx 0{,}97087$. Het verschil per jaar is klein, maar over vele jaren telt het op. Het is dezelfde fout als in module 9: na een stijging van 3% kom je met een daling van 3% niet terug op het beginbedrag.
:::

{{ exercises: 33-014, 33-015 }}

## Bedragen op verschillende momenten vergelijken

Met de contante waarde kun je aanbiedingen eerlijk vergelijken: je rekent alle bedragen om naar **hetzelfde moment**, meestal "nu", en vergelijkt pas dan. Dit is wat Leonardo van Pisa (Fibonacci) al in 1202 in zijn *Liber Abaci* deed bij de vraag of een soldaat erop vooruit- of achteruitgaat als zijn betalingen worden verschoven; daarover meer in het historisch intermezzo.

:::example Een auto: nu betalen of later?
Een dealer biedt twee betaalwijzen voor een auto:

- **A:** nu € 18.000 contant;
- **B:** nu € 6.000 aanbetalen en over twee jaar € 13.000.

Je kunt je geld ook op een rekening zetten tegen 4% per jaar. Welke betaalwijze is voordeliger?

Bij B betaal je in totaal € 19.000, meer dan bij A. Maar de € 13.000 betaal je pas later, en tot die tijd brengt dat geld rente op. Reken alles terug naar nu:

- contante waarde van B: $6000 + \dfrac{13000}{1{,}04^2} = 6000 + \dfrac{13000}{1{,}0816} \approx 6000 + 12019{,}23 = 18019{,}23$.

B kost je in "euro's van nu" € 18.019,23, dus € 19,23 meer dan A. Bij 4% is contant betalen net iets voordeliger. Bij een hogere rente zou B gunstiger worden: probeer zelf eens 5%.
:::

Er zit een algemeen principe achter dat je steeds weer zult gebruiken:

:::theory Het vergelijkingsprincipe
1. Teken een **tijdlijn** en zet alle bedragen op het moment waarop ze worden betaald of ontvangen.
2. Kies **één vergelijkingsmoment** (vaak $t = 0$, soms het eind van de looptijd).
3. Reken elk bedrag naar dat moment om: **vooruit** vermenigvuldigen met $(1+i)^n$, **terug** delen door $(1+i)^n$.
4. Pas daarna mag je bedragen optellen en vergelijken.

Bedragen op verschillende momenten zonder omrekenen optellen is als centimeters bij meters optellen: de getallen hebben niet dezelfde eenheid.
:::

:::example Netto contante waarde van een investering
Een bakker overweegt een nieuwe oven van € 12.000. Die bespaart naar verwachting aan het eind van elk van de komende vier jaar € 3.500 aan energie en onderhoud. De bakker rekent met een disconteringsvoet van 6%.

Reken elke besparing terug naar nu:

| jaar | besparing | disconteringsfactor $1{,}06^{-n}$ | contante waarde |
|---|---|---|---|
| 1 | € 3.500 | 0,943396 | € 3.301,89 |
| 2 | € 3.500 | 0,889996 | € 3.114,99 |
| 3 | € 3.500 | 0,839619 | € 2.938,67 |
| 4 | € 3.500 | 0,792094 | € 2.772,33 |
| | | **totaal** | **€ 12.127,87** |

(Het totaal is met onafgeronde waarden berekend; de afgeronde bedragen in de kolom tellen op tot een cent meer.)

De **netto contante waarde** (NCW) is de contante waarde van alle opbrengsten min de investering nu: $12127{,}87 - 12000 = 127{,}87$. Die is positief, dus bij 6% is de oven (net) de moeite waard. Merk op dat de bakker in totaal € 14.000 bespaart, maar dat die besparingen in euro's van nu maar weinig meer waard zijn dan de oven.
:::

:::tip Welke disconteringsvoet?
De disconteringsvoet is een keuze, geen natuurconstante. Een particulier neemt vaak de spaarrente die hij anders zou krijgen; een bedrijf neemt het rendement dat het elders zou kunnen halen, plus een opslag voor risico. Een hogere disconteringsvoet maakt opbrengsten in de verre toekomst minder waard. Daarom verschillen economen zo sterk van mening over investeringen die pas na tientallen jaren iets opleveren, zoals klimaatmaatregelen: de uitkomst hangt sterk af van de gekozen voet.
:::

{{ exercises: 33-016, 33-017 }}
