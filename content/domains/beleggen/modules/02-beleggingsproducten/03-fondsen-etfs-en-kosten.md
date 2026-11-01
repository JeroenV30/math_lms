# Fondsen, ETF's en kosten

## Een mand in plaats van een los product

Een beleggingsfonds verzamelt geld van veel beleggers en belegt dat gezamenlijk in aandelen, obligaties of andere beleggingen. Jij bezit een deel van het fonds, en het fonds bezit de onderliggende beleggingen. Het voordeel is spreiding en gemak: met één aankoop heb je een belang in tientallen tot duizenden bedrijven, zonder zelf te hoeven selecteren. Hoe spreiding werkt en waarom zij loont, komt in de volgende module aan bod; hier gaat het om wat je koopt en wat het kost.

Fondsen verschillen in hoe ze beslissen wat ze kopen. Bij een actief beheerd fonds probeert de beheerder met eigen keuzes beter te presteren dan de markt. Bij een indexfonds is er geen keuze: het fonds volgt een index, zoals een lijst van de grootste bedrijven van een land of van de wereld, en koopt de bedrijven in de verhoudingen van die lijst. Een index is dus een regel voor samenstelling, bijvoorbeeld 'de 500 grootste Amerikaanse beursgenoteerde bedrijven, gewogen naar beurswaarde'. Een indexfonds hoeft geen analisten te betalen en is daarom meestal goedkoper.

## Wat is een ETF?

Een ETF (exchange traded fund) is een beleggingsfonds dat op de beurs verhandeld wordt, net als een aandeel. Je koopt en verkoopt het via een broker tegen de koers van dat moment, gedurende de handelsdag. Bij een traditioneel fonds koop je rechtstreeks van het fonds tegen de koers aan het eind van de dag. De meeste ETF's volgen een index; ze zijn de gangbare vorm van een indexfonds geworden.

Twee kenmerken van een ETF bepalen in belangrijke mate wat je krijgt.

Het eerste is de **replicatiemethode**: hoe het fonds de index volgt. Bij fysieke replicatie koopt het fonds de bedrijven uit de index werkelijk. Dat kan volledig, of via een steekproef van de belangrijkste bedrijven (optimalisatie) als de index te veel bedrijven bevat. Bij synthetische replicatie koopt het fonds de bedrijven niet zelf maar sluit het een ruilcontract (swap) met een bank, die het indexrendement uitkeert in ruil voor een andere vergoeding. Het risico daarvan is het tegenpartijrisico: als de bank niet kan leveren, loopt het fonds schade. Daar staat vaak zekerheid tegenover in de vorm van onderpand, en de AFM wijst erop dat de kenmerken van synthetische ETF's sterk kunnen afwijken van die van fysiek replicerende ETF's. Lees daarom het KID en het prospectus om te zien welke methode een ETF gebruikt.

Het tweede is de **uitkeringsvorm**. Een uitkerend (distributing) fonds keert het dividend dat het ontvangt periodiek uit aan de beleggers. Een accumulerend fonds houdt het dividend in het fonds en herbelegt het, zodat de koers sneller stijgt. Voor het bruto rendement maakt dit weinig uit, want het totaalrendement is dezelfde optelsom van koerswinst en dividend. Het verschil zit in wat je ermee kunt doen (inkomen nodig, of juist laten groeien) en in belasting, waar module 4 op ingaat.

:::example Dezelfde index, twee uitkeringsvormen
Twee fondsen volgen dezelfde index, die in een jaar 7% koersstijging en 2% dividend oplevert. Het uitkerende fonds keert 2% uit en de koers stijgt 7%: totaal 9%. Het accumulerende fonds houdt de 2% in en de koers stijgt ongeveer 9%: ook totaal 9%. Bij het eerste fonds heb je de 2% in je portemonnee en kun je die elders beleggen; bij het tweede werkt het dividend automatisch door in de koers.
:::

## Kosten: wat betaal je en waarvoor?

Elke belegging kost iets, en kosten verlagen het rendement dat je overhoudt. Er zijn drie soorten die je moet kunnen onderscheiden.

De **lopende kosten** van een fonds worden uitgedrukt in de TER (total expense ratio): het percentage van het belegde vermogen dat het fonds jaarlijks aan beheer en administratie uitgeeft. Je betaalt het niet op een factuur; het wordt verrekend in de koers van het fonds. Een TER van 0,25% betekent dat bij een belegging van € 20.000 elk jaar ongeveer € 50 aan kosten in het fonds blijft hangen. De TER staat in het KID. Let op: sommige kosten zitten er niet in, zoals de transactiekosten die het fonds zelf maakt bij het kopen en verkopen van onderliggende beleggingen; die staan afzonderlijk in het KID.

De **transactiekosten** betaal je aan je broker voor elke aan- of verkoop, als vast bedrag, als percentage of een combinatie. Ze komen eenmalig op het moment van de transactie. Voor wie vaak kleine bedragen koopt, kan een vast bedrag per transactie relatief veel zijn.

De **spread** is het verschil tussen de prijs waartegen je kunt kopen (de laatkoers) en de prijs waartegen je kunt verkopen (de biedkoers). Marktmakers verdienen aan dat verschil. Staat een ETF op 49,95 bied en 50,05 laat, dan koop je tegen € 50,05 en verkoop je op hetzelfde moment tegen € 49,95: een verschil van € 0,10, ofwel 0,2% van de middenkoers van € 50,00. Je betaalt de spread niet op een rekening: hij zit verstopt in de prijs. Bij veel verhandelde ETF's is hij klein; bij weinig verhandelde producten kan hij oplopen.

{{ exercises: 02-009, 02-010 }}

## Het effect van kosten over lange tijd

Een verschil van een procentpunt per jaar klinkt als weinig. Het effect is echter niet lineair, maar werkt door de samengestelde rente. Kosten worden elk jaar van het rendement afgetrokken, en wat je kwijt bent, kan zelf geen rendement meer opleveren. Daardoor groeit het verschil in eindbedrag over de jaren steeds sneller. Dat zie je als je de formule uit module 1 toepast op het rendement na kosten: $K_n = K_0 (1 + r_{\text{bruto}} - k)^n$, waarbij $k$ de jaarlijkse kosten zijn. Dit is een benadering: de kosten worden eenvoudig van het rendement afgetrokken, wat voor het inzicht goed genoeg is.

:::example Kosten over dertig jaar
Je belegt eenmalig € 10.000 voor dertig jaar. Het fonds levert 6% per jaar bruto op. We vergelijken drie gevallen.

Zonder kosten: $10000 \cdot 1{,}06^{30} \approx € 57.435$.
Bij een TER van 0,2%: netto 5,8%, dus $10000 \cdot 1{,}058^{30} \approx € 54.271$.
Bij een TER van 1,5%: netto 4,5%, dus $10000 \cdot 1{,}045^{30} \approx € 37.453$.

Het verschil tussen het goedkope en het dure fonds is dus ongeveer € 16.818, ruim anderhalf keer de inleg. Het dure fonds heeft jaarlijks maar 1,3 procentpunt meer gekost, maar over dertig jaar ongeveer 31% minder opgeleverd dan het goedkope.
:::

![Groei van € 10.000 in 30 jaar](/images/beleggen/m02-kosten-groei.svg "Groei van € 10.000 bij 6% bruto rendement per jaar, zonder kosten en met jaarlijkse kosten van 0,2% en 1,5%. Eigen berekening.")

Twee kanttekeningen maken het beeld eerlijk. Ten eerste zijn de 6% en de kostenpercentages hier gekozen om te rekenen, niet om te voorspellen: het werkelijke rendement is onzeker, de kosten niet. Je weet vooraf wat je betaalt, maar niet wat je verdient. Dat is de reden dat kosten een van de weinige zaken zijn waar je als belegger zelf invloed op hebt. Ten tweede betekent een hogere prijs niet automatisch een slechter product: een fonds mag duurder zijn als het iets levert dat het goedkopere niet levert. De vraag is of het extra rendement, na kosten, groot genoeg is om de kosten goed te maken; in module 3 komt aan de orde wat het onderzoek daarover zegt.

{{ exercises: 02-011 }}
