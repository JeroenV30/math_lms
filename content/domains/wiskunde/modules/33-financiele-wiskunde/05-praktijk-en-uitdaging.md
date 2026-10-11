# Rendement, inflatie en dure leningen

In deze les pas je het gereedschap uit de theorielessen toe op drie vragen die je in je eigen financiën tegenkomt. Hoeveel heb ik werkelijk verdiend aan een belegging? Wat is mijn geld later nog waard als de prijzen stijgen? En wat kost een lening die "maar 1,5% per maand" kost of die je "pas later" hoeft te betalen?

:::tip Een stappenplan voor financiële opgaven
1. **Teken een tijdlijn** met alle bedragen op het moment waarop ze worden betaald of ontvangen.
2. **Bepaal de periode** (jaar, maand, kwartaal) en zorg dat de rente bij die periode hoort. Reken zo nodig om met $(1+i)^m$ of $(1+i)^{1/m}$.
3. **Kies één vergelijkingsmoment** en reken alle bedragen daarnaartoe: vooruit vermenigvuldigen, terug delen.
4. **Herken reeksen** van gelijke bedragen en gebruik dan de somformule in plaats van term voor term te rekenen.
5. **Controleer** met een schatting: kan dit kloppen? Is het eindbedrag groter dan de inleg? Is de contante waarde kleiner dan de som van de bedragen?
:::

## Rendement

Het **rendement** van een belegging is de procentuele opbrengst over een periode, ten opzichte van wat je erin stak. Als een aandeel in een jaar stijgt van € 50 naar € 54 en je ontvangt € 1 dividend, dan is het rendement

$$
\frac{(54 - 50) + 1}{50} = \frac{5}{50} = 0{,}10 = 10\%.
$$

Over meerdere jaren werk je met groeifactoren. Een belegging die in jaar 1 met 10% stijgt en in jaar 2 met 5% daalt, heeft na twee jaar een groeifactor $1{,}10 \times 0{,}95 = 1{,}045$: in totaal 4,5% rendement, niet $10 - 5 = 5\%$. Het **gemiddeld jaarrendement** is het vaste percentage dat in dezelfde tijd tot hetzelfde resultaat leidt: $1{,}045^{1/2} - 1 \approx 2{,}23\%$ per jaar.

:::warning Winst en verlies heffen elkaar niet op
Een daling van 20% gevolgd door een stijging van 20% brengt je niet terug op je beginbedrag: $0{,}80 \times 1{,}20 = 0{,}96$. Je bent 4% kwijt. Na een daling van 20% heb je zelfs 25% stijging nodig om terug te komen, want $1 : 0{,}80 = 1{,}25$. Dit is dezelfde asymmetrie als bij procenten in module 9, maar bij beleggingen kost ze echt geld.
:::

{{ exercises: 33-032, 33-033 }}

## Inflatie en reëel rendement

Prijzen stijgen. Als een mand boodschappen dit jaar € 100 kost en volgend jaar € 103, dan is de **inflatie** 3%. Met hetzelfde bedrag kun je dan minder kopen: je **koopkracht** daalt.

Stel dat je spaargeld 5% rente oplevert en de inflatie 3% is. Hoeveel rijker ben je werkelijk geworden? Een mand die nu € 100 kost, kost over een jaar € 103. Jouw € 100 is gegroeid tot € 105. Daarmee kun je $105 : 103 \approx 1{,}0194$ manden kopen. Je koopkracht is dus met ongeveer 1,94% gestegen. Dat is het **reële rendement**. De 5% heet het **nominale rendement**.

:::formula Reëel rendement
Met nominaal rendement $i$ en inflatie $\pi$ geldt
$$
1 + r_{\text{reëel}} = \frac{1 + i}{1 + \pi} \qquad\Longrightarrow\qquad r_{\text{reëel}} = \frac{1+i}{1+\pi} - 1.
$$
Benadering voor kleine percentages: $r_{\text{reëel}} \approx i - \pi$.
:::

Waarom is de benadering redelijk? Schrijf $\frac{1+i}{1+\pi} - 1 = \frac{i - \pi}{1+\pi}$. Bij een inflatie van een paar procent is de noemer bijna 1. In het voorbeeld: $\frac{0{,}05 - 0{,}03}{1{,}03} \approx 0{,}0194$ tegen de benadering $0{,}02$. Bij hoge inflatie gaat de benadering mis: bij 20% rente en 15% inflatie is het reële rendement $\frac{1{,}20}{1{,}15} - 1 \approx 4{,}35\%$, niet 5%.

:::example Koopkracht over tien jaar
Je bewaart € 5.000 tien jaar lang in een la. De inflatie is gemiddeld 2,5% per jaar. Hoeveel is dat geld dan nog waard in "euro's van nu"?

Dit is een contantewaardeberekening met de inflatie als disconteringsvoet: $\dfrac{5000}{1{,}025^{10}} \approx \dfrac{5000}{1{,}280085} \approx 3906{,}04$. Je hebt nog steeds € 5.000, maar je kunt er net zoveel mee kopen als nu met € 3.906,04. Je hebt ruim een vijfde van je koopkracht verloren zonder een cent uit te geven.
:::

{{ exercises: 33-034, 33-035 }}

## De regel van 72

Hoe lang duurt het voordat een bedrag verdubbelt bij een rente van $p$ procent per jaar? Exact los je $(1 + \frac{p}{100})^n = 2$ op met logaritmen. Maar kooplieden gebruiken al sinds de vijftiende eeuw een vuistregel:

:::formula Regel van 72
$$
\text{verdubbelingstijd} \approx \frac{72}{p} \text{ jaar}
$$
:::

Bij 6% verdubbelt een bedrag in ongeveer $72 : 6 = 12$ jaar (exact: 11,9 jaar). Bij 9% in ongeveer 8 jaar. De regel werkt ook voor inflatie: bij 3% inflatie halveert de koopkracht van spaargeld onder je matras in ongeveer 24 jaar.

Waarom 72? Exact geldt $n = \dfrac{\ln 2}{\ln(1 + i)}$. Voor kleine $i$ is $\ln(1+i) \approx i$, zodat $n \approx \dfrac{0{,}693}{i} = \dfrac{69{,}3}{p}$. Het getal 72 ligt daar dichtbij, is iets nauwkeuriger bij gangbare percentages tussen ongeveer 5% en 10%, en heeft veel delers (2, 3, 4, 6, 8, 9, 12), zodat je het makkelijk uit je hoofd deelt.

{{ exercise: 33-036 }}

## Dure leningen: kredietkaart, rood staan en achteraf betalen

De wiskunde uit deze module laat zien waarom kort, flexibel krediet vaak zo duur is. Drie mechanismen werken samen.

1. **Een maandpercentage lijkt klein.** Een rente van 1,5% per maand klinkt als weinig, maar effectief is dat $1{,}015^{12} - 1 \approx 19{,}6\%$ per jaar.
2. **Rente op rente werkt tegen je.** Wie een schuld laat staan, ziet die exponentieel groeien – precies zoals de schuld van de Babylonische boer in de introductie.
3. **Vaste kosten op kleine bedragen.** Een vergoeding van € 10 op een aankoop van € 100 die je over een maand betaalt, is 10% per maand: effectief meer dan 200% per jaar.

In Nederland is de rente op consumptief krediet wettelijk begrensd: de **maximale kredietvergoeding** is de wettelijke rente plus 8 procentpunt. Per 1 januari 2026 was dat 12% per jaar. Dat maximum geldt voor alle vormen van consumptief krediet, zoals een persoonlijke lening, doorlopend krediet, roodstaan en een kredietkaart. Een maandrente van 1,5% zou in Nederland dus niet zijn toegestaan; in landen zonder zo'n plafond, zoals de Verenigde Staten, komen creditcardrentes van rond de 20% per jaar veel voor.

Bij **achteraf betalen** (*buy now, pay later*, BNPL) betaal je een aankoop pas na bijvoorbeeld 14 of 30 dagen, of in drie termijnen. Zolang je op tijd betaalt, is dat vaak gratis. Het risico zit in wat er gebeurt als het misgaat: aanmaningen, incassokosten en de verleiding om meerdere van zulke regelingen tegelijk te hebben, die bij elkaar een flinke schuld vormen. Tot voor kort viel BNPL in de EU grotendeels buiten de regels voor consumentenkrediet. Volgens de Rijksoverheid gelden vanaf uiterlijk 20 november 2026, op basis van een nieuwe Europese richtlijn, strengere regels: aanbieders hebben dan een vergunning van de AFM nodig, moeten vooraf de kredietwaardigheid toetsen (een BKR-toets) en mogen in Nederland geen BNPL aanbieden aan jongeren onder de 18.

:::question Kritisch nadenken
Een webwinkel biedt aan: "Betaal in 3 termijnen, 0% rente!" en vraagt daarvoor € 2,50 "servicekosten" op een aankoop van € 90. Is dit echt renteloos? Wat zou het jaarlijks kostenpercentage ongeveer zijn als je de € 90 gemiddeld een maand eerder had moeten betalen? En waarom maakt het voor de winkel weinig uit of je de kosten "rente" of "servicekosten" noemt?
:::

{{ exercise: 33-037 }}

## Uitdagingen

Deze opgaven combineren alles uit de module: groeifactoren, contante waarde, reeksen en terugrekenen. Neem de tijd, teken een tijdlijn en controleer je antwoord met een schatting.

{{ exercises: 33-038, 33-039 }}
