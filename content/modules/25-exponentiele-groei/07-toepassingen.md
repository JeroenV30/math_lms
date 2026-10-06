# Samengestelde groei en modelcontrole

In deze les gebruik je alles wat je hebt geleerd in realistische situaties: rente, inflatie, besmettingen, medicijnen en radioactief verval. Daarbij ligt de nadruk op iets dat in de formules zelf niet staat: **mag je het model hier wel gebruiken?** Alle getallen in de voorbeelden zijn hypothetisch, zodat je je kunt concentreren op de redenering.

## Rente op rente

Een hypothetisch bedrag van 1000 groeit jaarlijks met 5%, zonder stortingen, opnames of kosten. Na één jaar is er $1000\times1{,}05=1050$. Na twee jaar $1000\times1{,}05^2=1102{,}50$. Enkelvoudige rente (elk jaar 5% van de oorspronkelijke 1000, dus 50) zou na twee jaar 1100 geven. Bij **samengestelde rente** groeit de eerste toename de tweede periode ook mee: de extra € 2,50 is de rente over de rente van jaar 1.

| Jaar | 0 | 1 | 2 | 5 | 10 | 20 |
|---|---|---|---|---|---|---|
| Enkelvoudig (+50 per jaar) | 1000 | 1050 | 1100 | 1250 | 1500 | 2000 |
| Samengesteld ($1000\cdot1{,}05^t$) | 1000 | 1050 | 1102,50 | 1276,28 | 1628,89 | 2653,30 |

In de eerste jaren zit er nauwelijks verschil; na twintig jaar is het verschil meer dan 650. Dat is een kenmerk van exponentiële groei: op korte termijn onopvallend, op lange termijn dominant. De Brugse wiskundige Simon Stevin publiceerde in 1582 zijn *Tafelen van Interest*, met kant-en-klare tabellen voor zulke berekeningen, zodat een koopman niet zelf hoefde te machtsverheffen.

:::example Inflatie
Een product kost nu € 50 en de prijzen stijgen 2% per jaar. Wat kost het over 10 jaar, als de prijs met de algemene inflatie meegroeit?

Stap 1: factor $g=1{,}02$ per jaar.

Stap 2: $50\cdot1{,}02^{10}=50\cdot1{,}21899=60{,}95$.

Stap 3: het product kost dus ongeveer € 60,95. Wie lineair doortrekt ($10\times2\%=20\%$ erbij, dus € 60) rekent iets te laag; over langere tijd wordt dat verschil groter.

Omgekeerd verliest een bedrag aan koopkracht: € 100 bij 2% inflatie heeft over 10 jaar een koopkracht van $100/1{,}02^{10}\approx82{,}03$ in huidige euro's.
:::

## Besmettingen en andere processen met onderlinge versterking

In een simpel hypothetisch model verdubbelt het aantal besmette mensen elke vier dagen. Het begint bij 100. Hoeveel zijn het na 20 dagen? Dat zijn $20/4=5$ verdubbelingen, dus $100\cdot2^5=3200$. Na 40 dagen zijn het er $100\cdot2^{10}=102\,400$. De groeifactor per dag is $2^{1/4}\approx1{,}189$: bijna 19% per dag.

Zulke berekeningen zijn nuttig voor een eerste verkenning, maar echte verspreiding is niet zo regelmatig. Maatregelen, immuniteit, het aantal contacten en het aantal beschikbare nog-niet-besmette mensen veranderen de factor in de tijd. Het exponentiële model is dus een benadering van de beginfase, geen voorspelling over een lange periode.

## Radioactief verval en koolstof-14

Een radioactieve stof heeft een vaste halveringstijd, en daarmee een exponentieel vervalmodel. Koolstof-14 heeft een halveringstijd van ongeveer 5700 jaar. Levende organismen nemen koolstof-14 voortdurend op, zodat de verhouding in hun lichaam nagenoeg gelijk blijft aan die in de atmosfeer. Na de dood stopt de opname, en neemt het aandeel koolstof-14 af volgens $\left(\tfrac12\right)^{t/5700}$. Als in een monster nog een kwart van de oorspronkelijke hoeveelheid zit, zijn er twee halveringstijden verstreken, dus ongeveer 11 400 jaar.

Dit is een kwalitatieve schets: de praktijk van C-14-datering vraagt om kalibratie, omdat de atmosferische hoeveelheid in de loop der tijd niet constant was, en de methode werkt maar over een beperkt tijdsbereik. Het exponentiële verval zelf is wel een goed fysisch model.

## Groei met een plafond

Een populatie kan niet eindeloos exponentieel groeien. Er zijn grenzen aan ruimte, voedsel en andere hulpbronnen. Verhulst' logistische groei, kwalitatief beschreven in de vorige les, laat zien wat er gebeurt: eerst bijna exponentieel, dan afnemende groei, dan een plafond. Een exponentiële formule werkt dus in het stuk van de kromme dat nog ver onder dat plafond ligt.

:::example Wanneer gaat het model mis?
Een kolonie begint bij 10 individuen en groeit met 50% per week. In de omgeving is ruimte voor 1000.

Stap 1: model $N(t)=10\cdot1{,}5^t$.

Stap 2: $N(11)=10\cdot1{,}5^{11}\approx865$ en $N(12)\approx1297$.

Stap 3: volgens het model passeert de kolonie de capaciteit van 1000 tussen week 11 en 12. Vanaf dat moment kan het model niet meer kloppen, want er is geen ruimte voor 1297. Het model is dus alleen bruikbaar tot ongeveer week 11.
:::

## Een model controleren

Een model is een aanname die je kunt toetsen. Bij een tabel met metingen deel je de opeenvolgende waarden en kijkt of de uitkomsten ongeveer constant zijn. Ook bij meetfouten moet je uitkomen in een smal bereik van factoren. Percentages achter elkaar combineer je via factoren: 10% groei en daarna 20% daling geeft factor $1{,}1\times0{,}8=0{,}88$, netto 12% daling. Het verschil $10\%-20\%=-10\%$ gebruikt ten onrechte dezelfde basis voor beide stappen.

Vergelijk een model met extra meetpunten. Als de factoren bij gelijke tijdstappen sterk uiteenlopen, is één constante factor wellicht ongeschikt. Een grafiek met een beperkt venster kan belangrijke verschillen verhullen; noteer daarom ook getallen en eenheden.

:::warning Lineair doortrekken
Een veelgemaakte fout is het eerste deel van een exponentiële ontwikkeling als rechte lijn te zien: "het steeg in twee weken van 100 naar 144, dus in vier weken 188". Bij vaste factor is het 207,36, en na tien weken is het verschil enorm. Omgekeerd kun je een rechte lijn die flink stijgt ook niet automatisch als exponentieel beschouwen.
:::

:::challenge Factor en beginwaarde uit data
N(1) = 150 en N(3) = 216 in een positief exponentieel model. Bereken de factor per uur, de beginwaarde en N(4). Controleer beide gegeven meetpunten met je formule.
:::

## Oefenen

{{ exercises: 25-025, 25-026, 25-027, 25-028, 25-029, 25-038, 25-039, 25-040, 25-030 }}
