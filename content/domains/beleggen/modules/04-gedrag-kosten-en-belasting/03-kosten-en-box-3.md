## Kosten over dertig jaar

Kosten zijn het enige deel van het rendement dat je vooraf kent. Het rendement is onzeker, de kosten niet: een fonds met jaarlijkse kosten van 1,5% neemt die elk jaar af van het belegde vermogen, ook in een slecht jaar. Dat lijkt weinig, maar kosten werken door op dezelfde manier als samengestelde rente uit module 1, alleen dan tegen je: het bedrag dat je kwijt bent, had zelf rendement kunnen opleveren.

Als eerste benadering trek je de kosten af van het bruto rendement: bij 6% rendement en 1,5% kosten is het netto rendement ongeveer 4,5% per jaar. (Exact is het $(1+r)(1-k)-1$ als de kosten een percentage van het vermogen zijn; het verschil met $r-k$ is hier klein.) Met $K_n = K_0\,(1+r)^n$ reken je het eindbedrag uit.

![Groei van € 50.000 over dertig jaar bij 5,8% en 4,5% netto](/images/beleggen/m04-kosten.svg "Rekenvoorbeeld: hetzelfde bruto rendement van 6%, andere kosten (0,2% en 1,5%)")

:::example Dertig jaar, twee kostenniveaus
Je legt eenmalig € 50.000 in en laat het dertig jaar staan. Het bruto rendement is in beide gevallen 6% per jaar (een aanname, geen voorspelling). Fonds A heeft 0,2% kosten per jaar, fonds B 1,5%.

*Fonds A:* netto 5,8% per jaar: $50.000 \cdot 1{,}058^{30} \approx 271.356$.

*Fonds B:* netto 4,5% per jaar: $50.000 \cdot 1{,}045^{30} \approx 187.266$.

*Verschil:* ongeveer € 84.090, dus fonds B levert na dertig jaar ongeveer 31% minder op. Een kostenverschil van 1,3 procentpunt per jaar kost hier bijna een derde van het eindbedrag.
:::

{{ exercises: 04-005, 04-006 }}

Wat zijn de kosten bij beleggen? Je kent ze uit module 2: de lopende kosten van een fonds (TER), transactiekosten en de spread, en soms kosten van een bank of adviseur. Ze verschillen sterk per fonds. Beleggingen die een brede index volgen, hebben doorgaans veel lagere lopende kosten dan actief beheerde fondsen; de actuele kosten staan altijd in het essentiële-informatiedocument (het KID) van het product. Dat de kosten een zekere factor zijn, wil niet zeggen dat het goedkoopste product altijd het beste is. Het wil zeggen dat een duurder product genoeg extra moet opleveren om zijn kosten te dekken, en dat dit vooraf lastig te weten is.

## Box 3 in 2026: het huidige stelsel

Belasting is de derde factor. Over je spaargeld en beleggingen betaal je in Nederland inkomstenbelasting in **box 3**. De wet gaat niet uit van wat je werkelijk verdiende, maar van een veronderstelling: het **forfaitaire rendement**. Dat is een percentage dat de overheid vaststelt voor elke categorie bezittingen, en waarover je 36% belasting betaalt. Voor 2026 geldt, volgens de Belastingdienst (stand 2026):

- een forfaitair rendement van 1,28% voor bank- en spaartegoeden (voorlopig);
- 6,00% voor overige bezittingen, zoals beleggingen (voorlopig);
- 2,70% voor schulden, voor het deel boven de schuldendrempel van € 3.800 per persoon (voorlopig);
- een heffingsvrij vermogen van € 59.357 per persoon (fiscale partners samen € 118.714);
- een tarief van 36%.

Alle drie de forfaitaire percentages zijn voorlopig vastgesteld, volgens de voorlopige aanslag 2026 van de Belastingdienst; de definitieve vaststelling volgt later. De schuldendrempel van € 3.800 stond niet op de Belastingdienst-pagina die bij de controle is gebruikt, dus controleer dat bedrag op belastingdienst.nl voordat je ermee rekent.

De berekening in stappen. Je telt de bezittingen op 1 januari bij elkaar, trekt de schulden boven de drempel af en rekent met de forfaitaire percentages het voordeel uit. Dat voordeel verdeel je naar verhouding van het deel boven het heffingsvrije vermogen, en daarover betaal je 36%.

:::example Belegd vermogen van € 200.000 in 2026
Stel dat je op 1 januari 2026 € 200.000 aan beleggingen hebt, geen spaargeld en geen schulden, en alleen belastingplichtige bent.

*Forfaitair voordeel:* $6{,}00\% \cdot 200.000 = 12.000$.

*Deel boven het heffingsvrije vermogen:* $(200.000 - 59.357)/200.000 = 0{,}7032$.

*Belast voordeel:* $12.000 \cdot 0{,}7032 \approx 8.439$.

*Belasting:* $36\% \cdot 8.439 \approx 3.038$, dus ongeveer € 3.038 (stand 2026). Dat is 1,52% van het vermogen, ongeacht of de beleggingen dat jaar stegen of daalden.
:::

{{ exercise: 04-007 }}

Daaruit blijkt waarom het stelsel omstreden is. Je betaalt over een rendement dat je misschien niet hebt gehaald. Als je belegging in een jaar maar 1% opbrengt of zelfs daalt, blijft de belasting even hoog. Daarom bestaat de **tegenbewijsregeling**: als je kunt aantonen dat je werkelijke rendement lager was dan het forfait, betaal je belasting over dat lagere werkelijke rendement. Dat geldt volgens de Belastingdienst ook voor 2026. Waardestijgingen die je nog niet verzilverd hebt, tellen daarbij mee. De regeling is een gevolg van uitspraken van de Hoge Raad, onder meer die van 24 december 2021. Daarin oordeelde de Hoge Raad dat de heffing over spaartegoeden in 2017 en 2018 in strijd was met het eigendomsrecht en het discriminatieverbod uit het Europees Verdrag voor de Rechten van de Mens, voor wie een lager werkelijk rendement had dan het forfait.

{{ exercise: 04-008 }}
