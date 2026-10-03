# Een trekschuit en een kogelketting

:::history Holland, 1632
In 1632 gaat tussen Amsterdam en Haarlem de eerste **trekvaart** open: een gegraven kanaal waarop elk uur een trekschuit vertrekt. De schuit heeft geen zeil en geen roeiers. Op het jaagpad langs het water loopt een paard, en een lange lijn verbindt het paard met de mast van de schuit. Het paard loopt naast het kanaal, niet erin; de lijn staat dus altijd een beetje **schuin** ten opzichte van de vaarrichting.

Een schipper die erover nadenkt, merkt iets vreemds. Het paard trekt hard, maar niet al die kracht lijkt de schuit vooruit te helpen. Een deel van de trekkracht probeert de schuit naar de kant te trekken, en de schipper moet met het roer tegensturen.
:::

Het paard levert een kracht. Die kracht heeft een **grootte** (hoe hard het paard trekt) en een **richting** (langs de schuine lijn). En het effect van de kracht hangt van allebei af. Zou het paard recht vóór de schuit in het water kunnen lopen, dan ging alle kracht naar voren. Loopt het paard ver opzij, dan gaat een flink deel van de inspanning verloren aan zijwaarts trekken.

:::question Denk eerst zelf na
Twee paarden trekken een zware schuit, elk vanaf een andere oever. Elk paard trekt met een kracht van 500 newton, en elke lijn maakt een hoek van $30^\circ$ met de vaarrichting.

- Is de totale kracht naar voren 1000 newton? Meer? Minder?
- Wat gebeurt er met de zijwaartse krachten van de twee paarden?
- En wat als beide lijnen een hoek van $90^\circ$ met de vaarrichting maakten, recht naar de oevers toe?

Schrijf een schatting op. Je hoeft nog niet te rekenen; het gaat om je gevoel voor wat er gebeurt.
:::

Vermoedelijk voel je aan dat de krachten "voor een deel" samenwerken en "voor een deel" tegen elkaar in werken. Bij $90^\circ$ heffen ze elkaar zelfs volledig op: de schuit wordt naar beide oevers even hard getrokken en komt geen meter vooruit. Bij $30^\circ$ werkt het grootste deel van elke kracht mee. In de les over richting als hoek reken je uit dat de totale voorwaartse kracht dan ongeveer 866 newton is, niet 1000. Getallen met een richting tel je dus niet zomaar op.

## Een ketting die niet wil bewegen

Bijna een halve eeuw vóór de eerste trekvaart dacht een ingenieur uit Brugge, die zich in Leiden had gevestigd, na over precies dit soort vragen. **Simon Stevin** publiceerde in 1586 *De Beghinselen der Weeghconst* ("de beginselen van de weegkunst", wij zouden zeggen: de statica). Op de titelpagina staat een tekening die beroemd zou worden: de **clootcrans**, een krans van kogels. Stevin zette er het motto *Wonder en is gheen wonder* bij: wat een wonder lijkt, is bij nader inzien geen wonder.

![De clootcrans van Stevin](/images/diagrams/m31-clootcrans.svg "Vereenvoudigde tekening van Stevins clootcrans: een gesloten ketting van even zware kogels rond een driehoek waarvan de linkerzijde twee keer zo lang is als de rechter. Eigen diagram.")

Leg een gesloten ketting van gelijke kogels over een driehoekig blok, zonder wrijving. Op de lange schuine zijde liggen vier kogels, op de korte, steilere zijde twee. Het onderste deel van de ketting hangt vrij.

:::question Gaat de ketting lopen?
Aan de linkerkant liggen twee keer zo veel kogels als rechts. Je zou denken dat de linkerkant "wint" en de ketting naar links gaat glijden.

- Als de ketting één kogel opschuift, hoe ziet de situatie er dan uit? Is die anders dan eerst?
- Wat zou het betekenen als de ketting toch ging bewegen?
:::

Stevins redenering is beroemd om haar eenvoud. Als de ketting zou gaan lopen, ziet hij er na één kogel opschuiven precies hetzelfde uit als ervoor. Dan zou hij dus doorlopen, eeuwig: een **perpetuum mobile**, een machine die uit het niets beweging maakt. Dat is onmogelijk. Dus blijft de ketting stil liggen. En omdat het hangende onderste deel symmetrisch is en links en rechts even hard trekt, kun je het weglaten: vier kogels op de lange helling houden twee kogels op de korte, steile helling in evenwicht.

Wat volgt daaruit? Op een steilere helling trekt dezelfde kogel harder langs de helling naar beneden. Het **zwaartekrachtdeel langs de helling** hangt af van de richting van de helling. Met andere woorden: Stevin ontleedde de zwaartekracht, die recht naar beneden werkt, in een deel langs de helling en een deel loodrecht erop. Dat is precies wat je in deze module leert doen met **componenten**.

## Waarom bestaat deze wiskunde?

Veel grootheden in het dagelijks leven zijn met één getal volledig beschreven. De temperatuur buiten is $14^\circ$C. Een pak suiker weegt 1 kg. De film duurt 2 uur. Zulke grootheden heten **scalars**. Je kunt ze optellen zoals je in module 3 leerde: twee pakken van 1 kg wegen samen 2 kg, punt.

Maar vergelijk dat eens met het weerbericht. "Wind 5 Beaufort" is maar half het verhaal; een zeiler, piloot of fietser wil weten **uit welke richting** de wind komt. Een navigator die "12 km gevaren" in zijn logboek schrijft, weet niet waar hij is als hij de koers niet noteert. Een kraanmachinist moet weten in welke richting een kabel trekt, niet alleen hoe hard. Zulke grootheden heten **vectoren**: ze hebben een grootte én een richting.

- **Navigatie.** Een schip vaart 12 km op koers $060^\circ$ en daarna 8 km op koers $150^\circ$. Waar is het? Hoe ver van de haven?
- **Luchtvaart.** Een vliegtuig vliegt 200 km/u ten opzichte van de lucht, maar de lucht zelf beweegt. De snelheid over de grond is een combinatie van twee vectoren.
- **Bouw en techniek.** Een lamp hangt aan twee kabels, een brug rust op pijlers, een dakspant draagt sneeuw. Ingenieurs controleren of alle krachten samen precies nul opleveren: **evenwicht**.
- **Natuurkunde.** Snelheid, versnelling, kracht, impuls, het elektrische veld: allemaal vectoren. De wetten van Newton zijn vectorwetten.
- **Computers.** Elke beweging in een computerspel, elke pixelverschuiving in een animatie, elke GPS-route is vectorrekening. Zoekmachines en taalmodellen stellen woorden zelfs voor als vectoren met honderden componenten, en meten met het inproduct hoe sterk twee woorden op elkaar lijken.

Wat al deze toepassingen gemeen hebben: je moet **grootte en richting tegelijk** bijhouden, en je moet kunnen rekenen met dingen die niet dezelfde kant op wijzen. Daarvoor heb je de wiskunde van deze module nodig.

In deze module bouw je de vectorrekening op in vier stappen:

1. **Pijlen en componenten**: een vector als pijl, en als twee getallen die zeggen hoeveel je naar rechts en hoeveel omhoog gaat. De lengte vind je met Pythagoras (module 18).
2. **Richting als hoek**: met tangens en arctangens (module 22) vertaal je componenten in een richting en omgekeerd.
3. **Rekenen met vectoren**: optellen met de kop-staartmethode en het parallellogram, aftrekken, vermenigvuldigen met een getal, eenheidsvectoren.
4. **Het inproduct**: een manier om twee vectoren tot één getal te combineren, waarmee je hoeken berekent en loodrechte stand herkent.

Daarna volgen de geschiedenis (van Stevin via Newton naar Hamilton op een brug in Dublin) en de toepassingen: krachten in evenwicht, een vliegtuig met zijwind en een boot die een rivier oversteekt.

Je bouwt voort op module 17 (coördinaten en verplaatsingen), module 18 (Pythagoras en afstanden in het vlak) en module 22 (sinus, cosinus, tangens en hun inversen). Haal die zo nodig even terug. In module 32 (matrices) gebruik je vectoren weer, als kolommen getallen waarop een matrix werkt.

{{ goals }}

{{ glossary }}
