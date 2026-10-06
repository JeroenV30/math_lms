# Van toetsuitslag naar conclusie

Een toets uitvoeren is het makkelijke deel. Het moeilijke deel begint daarna: wat zegt de uitslag, en wat zeg je er
eerlijk over? In deze les gebruik je wat je weet om gangbare fouten te herkennen. Je ziet hoe een reeks op zichzelf
onschuldige keuzes een uitslag kan opleveren die weinig betekent, en hoe je dat voorkomt.

## Eerst de grootte, dan de significantie

Stel dat een nieuwe verpakking gemiddeld 0,2 gram meer bevat en de p-waarde 0,001 is. Is dat belangrijk? Dat hangt af van de
producteisen, de meetnauwkeurigheid en de kosten. Statistische significantie vertelt niet of een verschil groot genoeg is om een
besluit te rechtvaardigen. Omgekeerd kan een grote geschatte verbetering een breed interval hebben. Een p-waarde boven 0,05 betekent
dan niet dat de behandeling geen effect heeft; de studie kan te weinig precisie of power hebben om de relevante effecten te onderscheiden.

:::practice Formuleer een volledige conclusie
"In deze steekproef was het geschatte verschil …, met een 95%-interval van … tot …. De vooraf gekozen …-toets gaf p=….
Onder de genoemde aannames …. De belangrijkste beperking is …."
:::

## Eén-zijdig of tweezijdig: een veelgemaakte fout

Bij een normale toetsingsgrootheid is de tweezijdige p-waarde het **dubbele** van de eenzijdige, mits het effect in de
voorspelde richting valt. Dat verleidt tot een slechte gewoonte: een onderzoeker krijgt $p=0{,}08$ bij een tweezijdige toets, bedenkt
dat het effect eigenlijk wel de ene kant op "had moeten" gaan, en rapporteert $p=0{,}04$ met een eenzijdige toets. Dat is onjuist.
De richting moet vóór de data vastliggen, en een eenzijdige toets is alleen verdedigbaar als een effect in de andere richting
echt niets zou betekenen of onmogelijk is. Anders ziet de procedure de data eerst en kiest ze dan de toets die het gewenste resultaat geeft; de
foutkans van de procedure is dan geen 5% meer, maar bijna 10%.

{{ exercises: 39-042, 39-019 }}

## Meervoudig toetsen

Bij één toets op niveau $\alpha=0{,}05$ is de kans op een vals alarm onder een ware $H_0$ gelijk aan 5%. Maar wat als je er twintig doet? Zijn alle twintig nulhypothesen waar en
de toetsen onafhankelijk, dan is de kans op geen enkel vals alarm $0{,}95^{20}$ en dus de kans op minstens één

$$1-0{,}95^{20}\approx0{,}642.$$

Je verwacht gemiddeld $20\cdot0{,}05=1$ vals alarm. Een dashboard met twintig indicatoren die onafhankelijk van elkaar
worden getoetst, produceert dus bijna altijd wel iets "significants". Een p-waarde van $0{,}04$ is veel minder
overtuigend als je er tientallen hebt geprobeerd en alleen de kleinste rapporteert.

De eenvoudigste correctie is die van **Bonferroni**: voor een familie van $m$ toetsen gebruik je per toets
$\alpha/m$. Dan is de kans op minstens één vals alarm in de hele familie hoogstens $\alpha$. Die ongelijkheid volgt uit de
optelregel voor kansen en geldt dus ook zonder onafhankelijkheid. Nadeel: de methode is conservatief en verliest power naarmate $m$ groter wordt. Er bestaan scherpere methoden, maar het principe is hetzelfde. Welke toetsen
tot dezelfde familie horen, volgt uit je onderzoeksvraag en moet je vooraf vastleggen.

{{ exercises: 39-014, 39-041 }}

:::example Hoeveel toetsen is te veel?
Hoeveel onafhankelijke toetsen heb je minstens nodig voordat de kans op minstens één vals alarm onder alleen ware $H_0$ de $50\%$ passeert, bij $\alpha=0{,}05$?
Je zoekt de kleinste $m$ met $1-0{,}95^m\ge0{,}5$, dus $0{,}95^m\le0{,}5$. Neem logaritmen: $m\ge\ln0{,}5/\ln0{,}95\approx13{,}5$.
Dus $m=14$: $1-0{,}95^{14}\approx0{,}512$, terwijl $m=13$ nog $0{,}487$ geeft.
:::

{{ exercise: 39-044 }}

## p-hacking en de replicatiecrisis

Onder **p-hacking** versta je alle handelingen waarmee een analyse net zolang wordt bijgesteld tot $p<0{,}05$ verschijnt. Voorbeelden zijn
het meten van veel uitkomsten en alleen de significante melden, het uitsluiten van "afwijkende" waarnemingen nadat je de uitslag
kent, het splitsen in subgroepen tot er één significant is, en het verzamelen van data tot de p-waarde laag genoeg is. Dat laatste, optioneel stoppen, is bijzonder
verraderlijk: kijk je na elke tien waarnemingen en stop je zodra $p<0{,}05$, dan is de werkelijke foutkans veel hoger dan 5%, ook als er niets aan de hand is.
Er hoeft geen kwade opzet in te zitten. Elke afzonderlijke keuze lijkt redelijk, maar samen vormen ze een grote ruimte aan mogelijke analyses, en de
nominale 5% geldt alleen voor een vooraf vastgelegde analyse.

Sinds het begin van de jaren tien van deze eeuw bleek in de psychologie en andere vakgebieden dat een flink deel van de gepubliceerde
bevindingen niet te herhalen was als anderen de studie opnieuw uitvoerden. Dat staat bekend als de **replicatiecrisis**. Er zijn meerdere oorzaken: p-hacking, studies met een te lage power (die, zoals in les 5, het effect
overschatten wanneer ze toch significant uitvallen), en het feit dat tijdschriften vooral significante uitkomsten publiceerden. De antwoorden zijn praktisch: leg de analyse vooraf vast
(preregistratie), rapporteer alle uitgevoerde analyses, ontwerp met voldoende power, en deel gegevens en code.

{{ exercise: 39-043 }}

## De ASA-principes in de praktijk

De verklaring van de American Statistical Association uit 2016 (zie het intermezzo) is te vertalen naar een kort controlelijstje voor elk onderzoeksverslag dat je leest of
schrijft.

- Is vooraf duidelijk wat de hypothese en de toets zijn, en is de richting niet achteraf gekozen?
- Staan er effectgrootte en interval bij, niet alleen p?
- Is de exacte p-waarde gerapporteerd in plaats van alleen "p<0,05"?
- Is duidelijk hoeveel toetsen zijn uitgevoerd, en is er gecorrigeerd voor de ruimte aan keuzes?
- Wordt een niet-significante uitslag niet gelezen als bewijs voor "geen effect"?
- Zijn de aannames (onafhankelijkheid, verdelingsvorm, gelijke spreiding) beoordeeld?

Noem de onderzoeksvraag, het ontwerp, de groepsaantallen, het effect met eenheden, het interval, de toets, de p-waarde en de beperkingen. Maak
verkennende analyses herkenbaar en stop niet met meten zodra een gunstige p-waarde verschijnt, tenzij je een passende sequentiële procedure gebruikt.

## Terug naar de dame met de thee

Pas je toetskennis toe op Fishers experiment uit het intermezzo: acht kopjes, vier van elke soort, en de dame wijst er vier aan als "melk eerst". Onder $H_0$ (zij raadt) is elke keuze van vier uit acht even waarschijnlijk. Het aantal mogelijke keuzes is $\binom{8}{4}=70$.

{{ exercise: 39-045 }}

## Uitdaging: een reeks ogenschijnlijk losse toetsen

Een dashboard test twintig prestaties afzonderlijk. Zelfs als nergens een effect bestaat, kun je een gunstige uitslag vinden. Bereken hoe groot
die kans is onder onafhankelijke toetsen.

{{ exercise: 39-020 }}

Het resultaat verklaart waarom je de verzameling analyses moet rapporteren, niet alleen de ene interessante uitkomst. Een toets is een onderdeel van
onderzoek, geen vervanging voor een onderzoeksplan.
