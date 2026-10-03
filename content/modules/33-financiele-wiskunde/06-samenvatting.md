# Samenvatting

:::summary De kern in één zin
Een euro nu is meer waard dan een euro later; reken bedragen daarom altijd eerst met groeifactoren naar hetzelfde moment om – vooruit vermenigvuldigen met $(1+i)^n$, terug delen door $(1+i)^n$ – en tel ze pas daarna op of vergelijk ze.
:::

## Rente

- **Enkelvoudige rente**: elk jaar dezelfde rente $K_0 \cdot i$ over het beginkapitaal. $K_n = K_0(1 + n\,i)$: lineaire groei.
- **Samengestelde rente**: de rente wordt bijgeschreven en levert zelf rente op. $K_n = K_0 (1+i)^n$: exponentiële groei met groeifactor $1+i$.
- Percentages over opeenvolgende perioden **vermenigvuldig** je via groeifactoren; je telt ze niet op. Tien jaar 4% is $1{,}04^{10} \approx 1{,}48$, dus 48%, niet 40%.
- **Welke rente?** $1 + i = \left(\frac{K_n}{K_0}\right)^{1/n}$. **Hoe lang?** $n = \frac{\log(K_n/K_0)}{\log(1+i)}$, naar boven afgerond bij jaarlijkse bijschrijving.

## Perioden en kosten

- **Effectieve jaarrente** bij rente $i_p$ per periode en $m$ perioden per jaar: $(1+i_p)^m - 1$. Hij is hoger dan de **nominale** rente $m \cdot i_p$.
- **Gelijkwaardige maandrente** bij jaarrente $i$: $(1+i)^{1/12} - 1$. Hypotheekverstrekkers gebruiken meestal de nominale maandrente $i/12$.
- Steeds vaker bijschrijven bij 100% rente geeft $\left(1+\frac1m\right)^m \to e \approx 2{,}71828$ (Jacob Bernoulli, 1683). Continue rente: groeifactor $e^{rt}$.
- Het **jaarlijks kostenpercentage** (JKP) is de effectieve jaarrente inclusief alle verplichte kosten; vergelijk leningen daarop.

## Contante waarde

- $CW = \dfrac{K_n}{(1+i)^n}$: wat een later bedrag nu waard is (**disconteren**). Delen door $1{,}03$ is niet hetzelfde als vermenigvuldigen met $0{,}97$.
- **Vergelijkingsprincipe**: tijdlijn tekenen, één moment kiezen, alles daarheen omrekenen, dan pas optellen.
- **Netto contante waarde**: contante waarde van de opbrengsten min de investering. Positief betekent: bij deze disconteringsvoet de moeite waard.

## Reeksen en hypotheken

- **Eindwaarde van een spaarplan** (inleg $T$ aan het eind van elke periode): $EW = T\cdot\dfrac{(1+i)^n - 1}{i}$. Inleg aan het begin: nog eens maal $(1+i)$.
- **Contante waarde van een reeks**: $CW = A \cdot \dfrac{1-(1+i)^{-n}}{i}$; een eeuwigdurende reeks is $\dfrac{A}{i}$ waard.
- **Annuïteit**: $A = L \cdot \dfrac{i}{1-(1+i)^{-n}}$. Elke termijn = rente over de openstaande schuld + aflossing. Het rentedeel daalt, het aflossingsdeel stijgt.
- **Lineaire hypotheek**: vaste aflossing $L/n$, dalende rente en dus dalende maandlast; in totaal minder rente, maar in het begin hogere lasten.

## Rendement, inflatie en krediet

- Rendement over meerdere jaren via groeifactoren; gemiddeld jaarrendement $= (\text{totale groeifactor})^{1/n} - 1$. Na −20% heb je +25% nodig om terug te komen.
- **Reëel rendement**: $\dfrac{1+i}{1+\pi} - 1 \approx i - \pi$. Koopkracht later: delen door $(1+\pi)^n$.
- **Regel van 72**: verdubbelingstijd $\approx 72/p$ jaar (Pacioli, 1494).
- Kort krediet is duur door maandpercentages, rente op rente en vaste kosten op kleine bedragen. In Nederland is de kredietvergoeding begrensd (per 1 januari 2026: 12% per jaar); voor achteraf betalen gelden vanaf uiterlijk 20 november 2026 strengere regels.

## De geschiedenis in vogelvlucht

| jaar | gebeurtenis |
|---|---|
| ca. 1750 v.Chr. | Wetten van Hammurabi: hoogstens 20% rente op zilver en $33\tfrac13\%$ op graan |
| 1202 (1228) | Fibonacci, *Liber Abaci*: bankproblemen en een vroege contantewaardeberekening |
| 1494 | Pacioli noemt de regel van 72 |
| 1582 | Simon Stevin, *Tafelen van Interest*: rentetabellen openbaar |
| 1602 | Octrooi van de VOC; handel in aandelen in Amsterdam |
| 1648 | Perpetuele obligatie van het Hoogheemraadschap Lekdijk Bovendams |
| 1671 | Johan de Witt, *Waerdye van Lyf-renten naer proportie van Los-renten* |
| 1683 | Jacob Bernoulli: steeds vaker bijschrijven leidt naar het getal $e$ |

## Wat je nu moet beheersen

Controleer of je het volgende kunt, met een rekenmachine:

1. Het eindbedrag van € 2.500 na 7 jaar berekenen bij 3% enkelvoudige en bij 3% samengestelde rente, en het verschil verklaren.
2. Uitrekenen welke jaarrente hoort bij een groei van € 6.000 naar € 7.500 in 5 jaar, en na hoeveel jaar € 6.000 bij 4% voor het eerst boven € 9.000 komt.
3. Een maandrente van 0,8% omrekenen naar een effectieve jaarrente, en een jaarrente van 5% naar een gelijkwaardige maandrente.
4. Uitleggen wat het JKP is en waarom afsluitkosten het JKP verhogen.
5. De contante waarde berekenen van € 12.000 over 6 jaar bij 3,5%, en twee betaalwijzen met bedragen op verschillende momenten vergelijken.
6. De eindwaarde van een maandelijks spaarplan en de annuïteit van een lening berekenen, en een paar regels van een aflossingsschema invullen.
7. De eerste maandlasten van een annuïteiten- en een lineaire hypotheek berekenen en de verschillen uitleggen.
8. Een nominaal rendement en inflatie omrekenen naar een exact reëel rendement, en de regel van 72 gebruiken en verklaren.
9. Kritisch beoordelen wat een lening met een maandpercentage of met vaste kosten werkelijk per jaar kost.

Lukt dat? Maak dan de hoofdstuktoets. Je hebt 70% nodig om de module af te ronden en 85% voor "beheerst".

{{ quiz }}
