# Samenvatting: onzekerheid over een schatting

Een steekproef levert een schatting van een populatieparameter. Het ontwerp
bepaalt naar welke populatie je mag generaliseren; de standaardfout beschrijft
toevalsvariatie onder dat ontwerp. Dat zijn twee verschillende vragen, en je kunt
alleen de tweede met een formule beantwoorden.

## De kernformules

| Grootheid | Formule | Voorwaarde |
|---|---|---|
| Standaardfout gemiddelde | $SE=\sigma/\sqrt n$, geschat met $s/\sqrt n$ | onafhankelijke waarnemingen |
| z-interval | $\bar x\pm z^*\sigma/\sqrt n$ | $\sigma$ bekend, $\bar X$ ongeveer normaal |
| t-interval | $\bar x\pm t^*_{n-1}\,s/\sqrt n$ | $\sigma$ onbekend, normale data of grote $n$ |
| Standaardfout proportie | $\sqrt{\hat p(1-\hat p)/n}$ | $n\hat p$ en $n(1-\hat p)$ minstens ongeveer 10 |
| Interval voor $p$ | $\hat p\pm z^*\sqrt{\hat p(1-\hat p)/n}$ | idem |
| Omvang voor $\mu$ | $n\ge(z^*\sigma/E)^2$ | naar boven afronden |
| Omvang voor $p$ | $n\ge(z^*)^2p(1-p)/E^2$ | $p=0{,}5$ als veilige keuze |

De kritieke waarden bij 95% zijn $z^*=1{,}960$ en $t^*$ vanaf 2,776 bij 4
vrijheidsgraden dalend naar 1,960. Bij 99% is $z^*=2{,}576$.

:::summary Wat je nu kunt
- Populatie en steekproef, parameter en schatting onderscheiden.
- Aselecte, systematische, gestratificeerde, cluster- en gemakssteekproeven herkennen en de vertekening ervan benoemen.
- Selectievertekening, non-respons, zelfselectie, overlevingsvertekening en vraagformulering herkennen.
- Randomisatie correct uitleggen: loting voor selectie en loting voor behandeling beantwoorden verschillende vragen.
- $\sigma/\sqrt n$ gebruiken onder passende voorwaarden en het effect van $n$ voorspellen: vier keer zoveel waarnemingen halveert de standaardfout.
- De centrale limietstelling formuleren en het verschil tussen individuele waarnemingen en gemiddelden uitleggen.
- Een z- of t-interval berekenen als schatting plus of min kritieke factor maal SE, met $n-1$ vrijheidsgraden bij t.
- Een interval voor een proportie berekenen en de benodigde steekproefgrootte bepalen.
- Een 95%-interval interpreteren als een procedure met dekking bij herhaling.
:::

## Foutenanalyse: de vijf klassieke missers

**1. De standaardafwijking gebruiken in plaats van de standaardfout.** Wie
$\bar x\pm1{,}96\sigma$ berekent, beschrijft waar individuen liggen, niet waar $\mu$ ligt. Het
interval is een factor $\sqrt n$ te breed. Controleer altijd of je door $\sqrt n$ hebt gedeeld.

**2. z in plaats van t bij kleine $n$ met onbekende $\sigma$.** De factor 1,96 is te klein
zodra je $\sigma$ uit weinig data schat. Het interval is dan te smal en dekt minder
dan 95% van de keren.

**3. De marge halveren door n te verdubbelen.** Een verdubbeling geeft een factor
$1/\sqrt2\approx0{,}71$. Voor een halvering heb je $4n$ nodig.

**4. Het interval verkeerd lezen.** "Met 95% kans ligt $\mu$ in dit interval" is
niet de frequentistische betekenis. De 95% hoort bij de procedure, niet bij het ene
berekende interval. Een interval voor $\mu$ zegt ook niets over de spreiding van
individuele personen.

**5. De benodigde $n$ naar beneden afronden.** Uit $n\ge96{,}04$ volgt $n=97$, niet 96.
Een kleinere $n$ geeft een grotere marge dan beloofd.

Meer data verkleinen toevalsvariatie, maar corrigeren geen systematische
selectie. Een interval voor het gemiddelde beschrijft ook niet de spreiding
van individuele personen. Houd die drie soorten onzekerheid uit elkaar:
toeval, vertekening en spreiding van individuen.

{{ quiz }}
