# Betrouwbaarheidsintervallen

Een puntschatting geeft één getal. Een interval geeft een bereik dat de
onzekerheid over een parameter samenvat. Als $\sigma$ bekend is en het
gemiddelde normaal verdeeld is, luidt het 95%-interval:

$$
\bar x\pm1{,}96\frac{\sigma}{\sqrt n}.
$$

:::example Een marge rond het gemiddelde
Gemiddelde 50 en standaardfout 2 geven een marge van 3,92 en het interval
[46,08;53,92]. Het interval gaat over $\mu$, niet over waar 95% van de
individuele waarnemingen zal liggen.
:::

{{ exercises: 38-009, 38-010, 38-014 }}

## Als de populatiespreiding onbekend is

Je gebruikt meestal $s$ in plaats van $\sigma$. Bij onafhankelijke normale
waarnemingen is het exacte interval:

$$
\bar x\pm t_{0{,}975,n-1}\frac{s}{\sqrt n}.
$$

De t-verdeling heeft dikkere staarten vanwege de extra onzekerheid in $s$.
Voor 15 vrijheidsgraden is de factor ongeveer 2,131, voor 25 ongeveer 2,060.
In de oefeningen wordt de benodigde factor gegeven. Bij grote $n$ nadert
zij 1,96. Voor niet-normale data is het t-interval een benadering die je
beoordeelt met steekproefomvang, verdelingsvorm en uitschieters.

{{ exercises: 38-011, 38-012 }}

## Wat betekent 95%?

Stel je een herhaalbare procedure voor: trek een steekproef en bereken het
interval volgens dezelfde regels. Onder de aannames bevat ongeveer 95% van
die intervallen de vaste parameter. Het ene berekende interval bevat haar
wel of niet. De frequentistische 95% is geen kansverdeling over die parameter.

{{ exercise: 38-013 }}

De widget gebruikt voor demonstratie de benadering $\bar x\pm1{,}96s/\sqrt n$.
Voor kleine steekproeven uit de scheve simulatiepopulatie is de werkelijke
dekking niet automatisch 95%. Dat is juist een reden om aannames te controleren.

## Proporties en steekproefgrootte

Een proportie schat je met $\hat p=k/n$. De geschatte standaardfout is
$\sqrt{\hat p(1-\hat p)/n}$. De eenvoudige normale marge werkt alleen
redelijk bij voldoende successen en mislukkingen en geeft problemen nabij
0 of 1. Gebruik daar bijvoorbeeld Wilson-intervallen of exacte methoden.

{{ exercises: 38-015, 38-016, 38-018 }}

Een grotere dekking geeft bij dezelfde data een breder interval. Bij bekende
$\sigma$ en gewenste 95%-marge $m$ kies je
$n\ge(1{,}96\sigma/m)^2$, naar boven afgerond.

{{ exercises: 38-017, 38-019 }}

De [NIST-intervaldocumentatie](https://www.itl.nist.gov/div898/handbook/eda/section3/eda352.htm)
beschrijft de t-formule; de [t-tabel](https://www.itl.nist.gov/div898/handbook/eda/section3/eda3672.htm)
geeft kritieke waarden.
