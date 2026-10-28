## Een plaats vastleggen op een bol

Wie een plaats op de aarde wil aanwijzen zonder te zeggen "bij die boom", heeft een stelsel van coördinaten nodig. Op een plat vlak neem je twee loodrechte assen. Op een bol gebruik je twee hoeken. De eerste is de **breedtegraad**: de hoek tussen de plaats en het vlak van de evenaar, gezien vanuit het middelpunt van de aarde, van $0^\circ$ op de evenaar tot $90^\circ$ op de polen, noord of zuid. De tweede is de **lengtegraad**: de hoek, gemeten langs de evenaar, tussen de meridiaan van de plaats en een afgesproken nulmeridiaan, van $0^\circ$ tot $180^\circ$, oost of west.

Het verschil tussen die twee is leerzaam. De evenaar is niet willekeurig gekozen: de draaiing van de aarde legt hem vast, midden tussen de polen. Een nulmeridiaan bestaat in de natuur niet; elke meridiaan is even goed als elke andere. Daarom is de breedtegraad een natuurlijk gegeven en de lengtegraad een afspraak. Die afspraak is in 1884 gemaakt en komt verderop in deze les terug.

De Grieken kenden dit stelsel al. Hipparchus (2e eeuw v.Chr.) stelde voor de plaatsen op de kaart door twee getallen te bepalen, en Ptolemaeus gaf in zijn *Geografie* een lijst met ongeveer achtduizend plaatsen met coördinaten. De breedtes daaruit waren redelijk, de lengtes zaten er soms ver naast. Dat verschil tussen breedte en lengte heeft een duidelijke reden, en die zie je zodra je probeert beide te meten.

## Breedte meten met de zon en de sterren

De breedtegraad volgt direct uit de hoogte van een hemellichaam. De Poolster staat vrijwel recht boven de noordpool, op minder dan een graad ervan. Aan de noordpool staat ze dus in het zenit, aan de evenaar op de horizon, en in Amsterdam op ongeveer 52,4° boven de horizon, gelijk aan de breedtegraad. Wie de hoogte van de Poolster meet met een kwadrant of een astrolabium, leest dus zijn breedte af, tot op enkele tienden van een graad nauwkeurig, wat overeenkomt met enkele tientallen kilometers.

Overdag lukt het met de zon, maar dan moet je rekening houden met haar declinatie. Op het middaguur is de zonshoogte $h = 90^\circ - |\varphi - \delta|$; draai je dat om voor een plaats ten noorden van de zon, dan krijg je $\varphi = 90^\circ - h + \delta$. Zeelieden gebruikten tabellen van de declinatie, die de Portugese zeevaart in de 15e eeuw begon op te stellen, en later een sextant.

:::example Je breedte bepalen uit de zon
**Gegeven.** Op een zeilschip meet je op 21 maart, op het middaguur, een zonshoogte van $38{,}0^\circ$ boven de zuidelijke horizon. De declinatie is op 21 maart ongeveer $0^\circ$.

**Model.** Op het middaguur staat de zon op de meridiaan. Voor een waarnemer ten noorden van de loodrechte zon geldt $h = 90^\circ - \varphi + \delta$, dus $\varphi = 90^\circ - h + \delta$.

**Berekening.** $\varphi = 90^\circ - 38{,}0^\circ + 0^\circ = 52{,}0^\circ$ noorderbreedte.

**Controle.** Dat is de breedte van een plek als Nederland of Zuid-Engeland, en past bij een schip in het Kanaal. Een fout van een halve graad in de zonshoogte geeft een fout van een halve graad in breedte, ongeveer 55 kilometer.
:::

{{ exercises: 01-022 }}

## Het probleem van de lengte

Lengte is veel moeilijker te meten. De hemel draait door het etmaal heen, dus de hoogte van de zon of een ster hangt af van de tijd én van de plaats, en je kunt er geen lengte uit aflezen. De oplossing is een klok. De aarde draait in 24 uur over $360^\circ$, dus $15^\circ$ per uur, oftewel $1^\circ$ per vier minuten. Als je weet hoe laat het is op een plaats waarvan je de lengte kent, bijvoorbeeld Greenwich, en je bepaalt de plaatselijke tijd uit de zon (het middaguur is het moment dat ze het hoogst staat), dan is het tijdverschil direct een lengteverschil.

Daarmee is het probleem verplaatst naar de klok. Op zee, met schommelend schip, wisselende temperatuur en luchtvochtigheid liep een slingeruurwerk te veel uit de pas. Een afwijking van één minuut betekent een kwart graad: aan de evenaar ongeveer 28 kilometer, in Nederland ongeveer 17 kilometer. Zeelieden kenden de breedte tot enkele kilometers nauwkeurig, maar hun lengte kon honderden kilometers afwijken. Schepen botsten op klippen waar ze niet verwachtten dat die lagen. In 1707 liepen vier schepen van een Britse vloot onder admiraal Shovell bij de Scilly-eilanden aan de grond, met naar schatting 1.400 tot 2.000 doden; een verkeerde lengtebepaling was daarbij een belangrijke oorzaak.

:::example Lengte uit een klok
**Gegeven.** Een navigator ziet de zon op het hoogste punt staan: plaatselijk middag. Op dat moment geeft zijn chronometer, ingesteld op Greenwichtijd, 15:20.

**Model.** De zon bereikt het hoogste punt op elke meridiaan als het daar middag is. De aarde draait $15^\circ$ per uur.

**Berekening.** Het is in Greenwich al 3 uur 20 minuten na het middaguur. Dat is $3\tfrac{1}{3}$ uur. Het schip ligt dus $3\tfrac{1}{3} \times 15^\circ = 50^\circ$ ten westen van Greenwich: het middaguur is er later aangebroken dan in Greenwich.

**Controle.** Westelijk van Greenwich is het middaguur later; dat klopt: het schip bevindt zich bij $50^\circ$ W, ongeveer midden in de Atlantische Oceaan.
:::

Het Britse parlement stelde in 1714 een prijs van 20.000 pond in voor wie de lengte op zee kon bepalen met een nauwkeurigheid van een halve graad. Twee wegen waren er. De sterrenkundige weg mat de hoek tussen de maan en een ster, die als een klok aan de hemel dient: de methode van de maansafstanden, voor praktisch gebruik uitgewerkt in de *Nautical Almanac* van Nevil Maskelyne (vanaf 1767). De mechanische weg was een klok die nauwkeurig genoeg bleef. De Engelse klokkenmaker John Harrison bouwde in een aantal decennia vier opeenvolgende zeechronometers. Zijn vierde, H4, werd in 1761–62 op een reis naar Jamaica uitgeprobeerd en bleek na 81 dagen slechts ongeveer vijf seconden achter te lopen. Vijf seconden komt overeen met $5/240 \approx 0{,}02^\circ$, aan de evenaar ongeveer 2,3 kilometer. De voorwaarde van de prijs was een halve graad, ongeveer 55 kilometer: Harrison zat er ruim binnen. Toch kreeg hij zijn prijs pas jaren later en met veel onenigheid met de commissie die erover besliste. Het verhaal laat zien dat een wetenschappelijk probleem soms een technisch probleem is: wat ontbrak was geen theorie, maar een betrouwbare klok.

{{ exercises: 01-023, 01-024 }}

## Tijdzones en de datumgrens

De zon staat niet overal tegelijk het hoogst, dus elke plaats heeft strikt genomen haar eigen zonnetijd. Zolang reizen langzaam ging, deed dat er niet toe. Met de spoorwegen in de 19e eeuw werd het onhandig: het middaguur in Amsterdam valt bijna twintig minuten eerder dan in Londen, en dienstregelingen konden niet bij elke halte een andere klok gebruiken. De spoorwegmaatschappijen begonnen een eenheidstijd te gebruiken, en landen volgden.

In 1884 kwamen vertegenwoordigers van 25 landen bij elkaar op de International Meridian Conference in Washington. Ze kozen de meridiaan door het Royal Observatory in Greenwich als nulmeridiaan (22 landen stemden voor, één tegen, twee onthielden zich). Daaruit volgde het stelsel van tijdzones: de wereld is in 24 stroken van elk $15^\circ$ verdeeld, en elke strook heeft een klok die een heel uur verschilt van de buurman. In de praktijk volgen de grenzen die van landen en provincies, en gebruiken sommige landen een zone die ver van hun zonnetijd afligt. Nederland ligt ongeveer op $5^\circ$ oost, maar gebruikt Midden-Europese tijd, een uur vóór Greenwich: de zon staat in Amsterdam om ongeveer 12:40 op haar hoogst. Tot 1 juli 1937 gebruikte Nederland Amsterdamse tijd, ongeveer twintig minuten vóór Greenwich; daarna werd die afgerond tot precies twintig minuten. In mei 1940, onder de Duitse bezetting, stapte Nederland over op Midden-Europese tijd. Een tijdzone is dus een afspraak met een natuurlijke maat als ondergrond.

Er is nog een gevolg: de datumgrens. Wie steeds naar het oosten reist, loopt per $15^\circ$ een uur voor op de klok thuis; na een hele ronde zou je een dag voorlopen. Er moet dus ergens een sprong in de datum zitten. Die ligt grofweg op de meridiaan van $180^\circ$, midden in de Grote Oceaan, waar weinig mensen wonen. Het verschijnsel was al bekend in de 16e eeuw. De Italiaan Antonio Pigafetta, die de expeditie van Magellan beschreef, merkte bij terugkeer in 1522 op Kaapverdië dat hun logboek een dag achterliep op de plaatselijke datum. De mannen hadden steeds naar het westen gevaren en hadden, zonder het te weten, een dag op de aarde "verloren".

{{ exercises: 01-025, 01-026 }}
