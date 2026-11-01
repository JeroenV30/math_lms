# Casus: een reserve voor over 25 jaar

## De situatie

Sanne is 40 jaar en werkt als zelfstandig ontwerper. Zij is fictief, maar haar vraag is gewoon: zij wil € 20.000 apart zetten voor een aanvulling op haar pensioen, die zij over 25 jaar nodig heeft. Ze heeft naast dit bedrag een buffer van enkele maanden vaste lasten, en het geld is voor dit doel zeker niet binnen tien jaar nodig. Ze vergelijkt twee mogelijkheden in abstracte vorm, zonder naar concrete producten te kijken. De eerste is een spaarrekening met een vaste rente van 2% per jaar. De tweede is een belegging waarvan ze over 25 jaar een gemiddeld rendement van 5% per jaar verwacht, met schommelingen onderweg. Beide rendementen zijn bruto: belasting en kosten laat Sanne voor deze eerste vergelijking buiten beschouwing. De inflatie neemt ze aan op gemiddeld 2,5% per jaar, iets boven de doelstelling van de ECB.

:::question
Voordat je rekent: wat verwacht je? Zal het bedrag op de spaarrekening na 25 jaar meer of minder koopkracht hebben dan nu? En hoe groot denk je dat het verschil met de belegging in koopkracht uitpakt: tienduizend euro, twintigduizend, meer?
:::

## Stap 1: nominale bedragen

Op de spaarrekening geldt $K_{25} = 20000 \cdot 1{,}02^{25}$. De groeifactor is $1{,}02^{25} \approx 1{,}6406$, dus het saldo is ongeveer € 32.812. Voor de belegging geldt $K_{25} = 20000 \cdot 1{,}05^{25}$, met $1{,}05^{25} \approx 3{,}3864$ en een bedrag van ongeveer € 67.727. In euro's lijkt het verschil immens: ruim € 34.000.

## Stap 2: in koopkracht van nu

Een bedrag van € 67.727 over 25 jaar is niet hetzelfde als € 67.727 nu. Bij 2,5% inflatie is de groeifactor van de prijzen $1{,}025^{25} \approx 1{,}8539$. Deel je beide eindbedragen daardoor, dan krijg je de koopkracht in euro's van nu. Voor de spaarrekening is dat € 32.812 / 1,8539 ≈ € 17.699, minder dan de € 20.000 die Sanne erin stopte. Het reële rendement is $1{,}02/1{,}025 - 1 \approx -0{,}49\%$ per jaar. Voor de belegging is het reële rendement $1{,}05 / 1{,}025 - 1 \approx 2{,}44\%$ per jaar, en de koopkracht wordt ongeveer € 36.531.

:::example Het verschil in koopkracht
Samengevat in koopkracht van nu, uitgaande van de aannames van Sanne:

- Spaarrekening: ongeveer € 17.699, ofwel een verlies van circa € 2.300 aan koopkracht.
- Belegging: ongeveer € 36.531, ofwel een winst van circa € 16.500 aan koopkracht.

Het verschil tussen beide is ruim € 18.800 in koopkracht van nu, ongeveer 94% van het beginbedrag. Het zit niet in het nominale verschil van € 34.915, want de inflatie verkleint beide uitkomsten met bijna de helft.
:::

{{ exercises: 01-012 }}

## Stap 3: wat de berekening niet laat zien

De uitkomst is een verwachting, geen voorspelling. Een gemiddeld rendement van 5% betekent niet dat Sanne elk jaar 5% krijgt. Als de belegging in jaar 24 een derde daalt, is het eindbedrag aanzienlijk lager dan de berekening laat zien, en kan zij niet wachten op herstel. Bij een gegarandeerde 2% is haar uitkomst voorspelbaar, maar met een reëel verlies. Dat is de afweging tussen zekerheid in euro's en kans op koopkracht.

Sanne kan het verschil verkleinen op manieren die in latere modules worden uitgewerkt: ze kan haar belegging spreiden over veel bedrijven en landen, ze kan de kosten laag houden, en ze kan het risico bij het naderen van het doel afbouwen. Wat ze niet kan, is dit onderwerp vermijden: ook niet-beleggen is een keuze met een verwacht reëel rendement.

:::challenge Eigen casus
Neem je eigen situatie of een fictieve. Kies een bedrag, een horizon van minstens tien jaar en een verwacht nominaal rendement tussen 0% en 7%. Zoek op cbs.nl de jaarinflatie van de afgelopen drie jaar en neem het gemiddelde als aanname. Bereken het eindbedrag nominaal en in koopkracht van nu, en beantwoord: bij welk nominaal rendement blijft je koopkracht precies gelijk? Wat zou je nodig hebben aan zekerheid voor je het risico durft te nemen?
:::
