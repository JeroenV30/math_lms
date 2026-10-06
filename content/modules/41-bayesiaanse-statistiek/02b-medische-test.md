# De medische test: wat zegt een positieve uitslag?

Nergens is de omkering van een voorwaarde zo belangrijk als bij medische
tests. Een screening, een zwangerschapstest of een coronatest geeft een uitslag,
en jij wilt weten wat die uitslag zegt over de gezondheid van de persoon. De
fabrikant van de test kan alleen vertellen hoe de test zich gedraagt bij mensen
van wie de werkelijke toestand bekend is. Die twee soorten informatie liggen
dicht bij elkaar, maar zijn niet hetzelfde.

## Vier begrippen

Een test heeft twee eigenschappen die je in het laboratorium meet, en één
eigenschap van de populatie waarin je de test gebruikt.

- De **sensitiviteit** is de kans op een positieve uitslag **bij een zieke**:
  $P(+\mid\text{ziek})$. Het is het deel van de zieken dat de test vindt.
- De **specificiteit** is de kans op een negatieve uitslag **bij een gezonde**:
  $P(-\mid\text{gezond})$. Het is het deel van de gezonden dat terecht met rust
  wordt gelaten. Het complement, $1-\text{specificiteit}$, is de kans op een vals
  alarm.
- De **prevalentie** is het aandeel zieken in de onderzochte groep: $P(\text{ziek})$.
  Dat is de prior, en dus de basisfrequentie.

Wat je meestal wilt weten, is iets anders:

- De **positief voorspellende waarde** (PPV) is $P(\text{ziek}\mid +)$: de kans
  dat iemand met een positieve uitslag echt ziek is.
- De **negatief voorspellende waarde** (NPV) is $P(\text{gezond}\mid -)$: de kans
  dat iemand met een negatieve uitslag echt gezond is.

Sensitiviteit en specificiteit zijn eigenschappen van de test; PPV en NPV zijn
eigenschappen van de test **in een bepaalde populatie**. Ze hangen af van de
prevalentie, en dat is de kern van deze les.

## Een test op een zeldzame ziekte

:::example Prevalentie 1%
Een ziekte komt bij 1% van de mensen voor. De test heeft sensitiviteit 90% en
specificiteit 91%. Wat betekent een positieve uitslag?

Neem 10 000 mensen. Dan zijn er 100 zieken en 9900 gezonden.

- Van de 100 zieken testen er $0{,}90\cdot100=90$ positief en dus 10 negatief.
- Van de 9900 gezonden testen er $0{,}09\cdot9900=891$ ten onrechte positief en
  $9900-891=9009$ terecht negatief.

| | positief | negatief | totaal |
|---|---:|---:|---:|
| ziek | 90 | 10 | 100 |
| gezond | 891 | 9009 | 9900 |
| totaal | 981 | 9019 | 10 000 |

Er zijn $90+891=981$ positieve uitslagen, waarvan er maar 90 bij zieken horen:

$$
\text{PPV}=\frac{90}{981}=\frac{10}{109}\approx0{,}0917.
$$

Een positieve uitslag betekent dus een kans van ongeveer 9% op de ziekte, terwijl
de test toch "90% betrouwbaar" lijkt. Voor de negatieve uitslag geldt
$\text{NPV}=9009/9019\approx0{,}9989$: een negatieve uitslag is bijna altijd goed
nieuws.
:::

{{ widget: percent-grid value=1 }}

Het honderdveld toont wat prevalentie 1% betekent: van elke honderd mensen is er
één ziek. De test pakt die ene meestal wel, maar slaat ook bij een paar
procent van de overige 99 aan. Meerdere valse alarmen tegenover één echt geval:
dat is waarom de PPV laag is.

{{ exercises: 41-025, 41-026, 41-027 }}

Bekijk wat er in de kruistabel gebeurt. De **rijen** (ziek, gezond) bevatten de
sensitiviteit en de specificiteit: $90/100$ en $9009/9900$. De **kolommen**
(positief, negatief) bevatten PPV en NPV: $90/981$ en $9009/9019$. Je
test is dezelfde, de referentiegroep verschilt. Wie in de rij blijft, gebruikt
sensitiviteit en specificiteit. Wie in de kolom blijft, werkt met voorspellende
waarden.

## Base-rate neglect

Het negeren van de basisfrequentie noemt men **base-rate neglect**: je laat je
leiden door hoe goed de test is, en vergeet hoe zeldzaam de ziekte is. In
onderzoek waarin artsen en studenten een opgave als de bovenstaande kregen,
bleek dat velen het antwoord dicht bij de sensitiviteit zochten. Dat is geen
domheid: de sensitiviteit is het enige getal dat verbonden lijkt met "de test
zegt ja".

De prevalentie bepaalt veel. Neem dezelfde test (sensitiviteit 90%, specificiteit
91%) en gebruik hem bij een groep waarin 10% ziek is, bijvoorbeeld mensen met
duidelijke klachten.

:::example Prevalentie 10%
Neem 10 000 mensen: 1000 zieken en 9000 gezonden. Positief: $0{,}9\cdot1000=900$
zieken en $0{,}09\cdot9000=810$ gezonden. De PPV is
$900/(900+810)=900/1710=10/19\approx0{,}5263$.
:::

Bij prevalentie 1% was de PPV ongeveer 0,09, bij 10% ongeveer 0,53. Dezelfde test
levert een heel andere boodschap op, afhankelijk van wie je test. Daarom
screenen artsen met zorg: een test op een hele bevolking gebruikt een lage
prevalentie en veroorzaakt veel vals-positieven, terwijl dezelfde test bij een
patiënt met typische klachten veel meer zegt.

{{ exercises: 41-028, 41-029 }}

## Terug naar de formule

Alles wat je in de tabel deed, staat ook in de regel van Bayes. Met prevalentie
$\pi$, sensitiviteit $s$ en specificiteit $c$ geldt

$$
\text{PPV}=\frac{s\,\pi}{s\,\pi+(1-c)(1-\pi)}.
$$

De teller is het deel van de populatie dat ziek is en positief test. De noemer
is dat deel plus het deel dat gezond is en positief test. Als $\pi$ klein is,
wordt de term $(1-c)(1-\pi)$ in de noemer zwaar, ook als $1-c$ klein is.
Dat verklaart waarom een test met een mooie specificiteit van 99% bij een
zeldzame ziekte toch veel vals-positieven geeft: een klein percentage van een
enorme groep is nog steeds een groot aantal.

:::warning Wat een test niet zegt
Een positieve uitslag is bij een lage prevalentie geen diagnose, maar een reden
voor vervolgonderzoek. Omgekeerd is een negatieve uitslag van een gevoelige test
bij een zeldzame ziekte vrijwel een uitsluiting. Meer nog dan van de test hangt de
interpretatie af van de populatie waaruit de persoon komt en van wat je al wist.
:::
