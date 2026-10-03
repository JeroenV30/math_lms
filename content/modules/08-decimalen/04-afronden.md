# Afronden, precisie en schatten

Een rekenmachine geeft bij $10 : 3$ de uitkomst 3,333333333. Een digitale weegschaal toont 1,248 kg. Een bankafschrift rekent in hele centen. In de praktijk werk je bijna nooit met alle cijfers die een berekening oplevert: je **rondt af** op een nauwkeurigheid die bij de situatie past. En vóór je gaat rekenen, wil je vaak al weten ongeveer wat eruit moet komen: je **schat**. In deze les leer je beide vaardigheden, en waarom ze bij elkaar horen.

## 1. Waarom afronden?

Er zijn drie verschillende redenen om af te ronden, en het helpt om ze uit elkaar te houden.

1. **De uitkomst heeft oneindig veel decimalen.** $\tfrac13 = 0{,}333\ldots$ kun je niet volledig opschrijven. Je moet ergens stoppen.
2. **De situatie vraagt een bepaalde eenheid.** Een bedrag in euro betaal je in hele centen, dus twee decimalen. Een aantal personen is een geheel getal.
3. **De gegevens zijn zelf niet nauwkeuriger.** Meet je met een liniaal op de millimeter, dan heeft een uitkomst als 12,347891 cm vier cijfers die niets betekenen: ze suggereren een precisie die je meting nooit had.

:::definition Afronden
Een getal vervangen door het dichtstbijzijnde getal met de gewenste nauwkeurigheid, bijvoorbeeld op twee decimalen (honderdsten), op één decimaal (tienden), op gehelen of op tientallen. Het resultaat is een **benadering**; je schrijft $\approx$.
:::

## 2. De afrondingsregel

Afronden is in de kern een vraag over de getallenlijn: **bij welk van de twee buren ligt het getal het dichtst?** Rond je 4,376 af op honderdsten, dan zijn de buren 4,37 en 4,38. Halverwege ligt 4,375. Het getal 4,376 ligt voorbij dat midden, dus dichter bij 4,38.

![Afronden op de getallenlijn](/images/diagrams/m08-afronden-getallenlijn.svg "Tussen 4,37 en 4,38 ligt het midden bij 4,375. Wat links daarvan ligt, rondt af naar 4,37; wat rechts ligt naar 4,38.")

Je hoeft niet elke keer een getallenlijn te tekenen. Het **eerste cijfer dat je weglaat** vertelt je aan welke kant van het midden je zit.

:::theory Afronden in drie stappen
1. **Kies de positie** waarop je afrondt (bijvoorbeeld de honderdsten) en markeer het laatste cijfer dat je houdt.
2. **Kijk naar het eerste cijfer erna**, het eerste weg te laten cijfer. Alleen dat cijfer telt; de cijfers verder naar rechts maken voor de beslissing niet uit.
3. **Is dat cijfer 0, 1, 2, 3 of 4**: laat het laatste behouden cijfer staan (naar beneden afronden). **Is het 5, 6, 7, 8 of 9**: verhoog het laatste behouden cijfer met 1 (naar boven afronden). Laat alle cijfers erachter weg.
:::

Precies op het midden, zoals 4,375 op honderdsten, rondt deze schoolregel naar boven af: 4,38. Dat is een afspraak. In de statistiek en in sommige computerprogramma's gebruikt men andere afspraken voor dat grensgeval, bijvoorbeeld afronden naar het dichtstbijzijnde even cijfer, zodat afrondingen bij grote aantallen niet systematisch omhoog trekken. In deze cursus geldt de schoolregel, tenzij anders vermeld.

:::example Uitgewerkt voorbeeld: hetzelfde getal op vier manieren
Rond 38,2649 af.

- **Op drie decimalen.** Houd 38,264; het volgende cijfer is 9. Verhogen: $38{,}265$.
- **Op twee decimalen.** Houd 38,26; het volgende cijfer is 4. Laten staan: $38{,}26$. Let op: de 9 verderop speelt geen rol.
- **Op één decimaal.** Houd 38,2; het volgende cijfer is 6. Verhogen: $38{,}3$.
- **Op gehelen.** Houd 38; het volgende cijfer is 2. Laten staan: $38$.

Controle op de getallenlijn: 38,2649 ligt tussen 38 en 39, maar veel dichter bij 38. Klopt.
:::

{{ exercises: 08-013, 08-014 }}

### Een negen die overloopt

Soms moet je een 9 verhogen. Dan wordt die 9 een 0 en schuift er 1 door naar de positie links ervan, net als bij het onthouden bij optellen.

:::example Uitgewerkt voorbeeld: 9,995 op twee decimalen
Houd 9,99; het volgende cijfer is 5. Verhogen met één honderdste: $9{,}99 + 0{,}01 = 10{,}00$.

Schrijf je 10 of 10,00? De waarde is gelijk, maar 10,00 vertelt de lezer dat je op honderdsten hebt afgerond. Bij een meting of een bedrag is dat zinvolle informatie: € 10,00 is een gewone schrijfwijze voor een bedrag. In een invoerveld van deze cursus zijn beide goed.
:::

{{ exercise: 08-015 }}

### Rond rechtstreeks af, nooit in etappes

Een verleidelijke vergissing is in stappen afronden: eerst op twee decimalen, dan dat resultaat op één decimaal.

:::warning Dubbel afronden
Rond 2,449 af op één decimaal.

- **Fout, in etappes:** 2,449 wordt op twee decimalen 2,45; dat wordt op één decimaal 2,5.
- **Goed, rechtstreeks:** houd 2,4; het eerste weggelaten cijfer is 4. Dus 2,4.

Op de getallenlijn zie je dat 2,449 echt dichter bij 2,4 ligt (verschil 0,049) dan bij 2,5 (verschil 0,051). De eerste afronding heeft het getal net over het midden geduwd. Rond daarom altijd af vanuit het **oorspronkelijke** getal.
:::

Om dezelfde reden rond je **tussenresultaten** in een berekening liefst niet af. Rond pas aan het eind af, op de gevraagde nauwkeurigheid.

:::example Uitgewerkt voorbeeld: drie porties
Een kilo kaas kost € 7. Je laat drie gelijke porties van een derde kilo afsnijden. Wat kosten ze samen?

- Een portie kost exact $\tfrac{7}{3}$ euro, ongeveer € 2,333…
- **Rond je per portie af**, dan reken je $3 \times 2{,}33 = 6{,}99$ euro.
- **Reken je exact door**, dan is het $3 \times \tfrac73 = 7$ euro.

Het verschil van één cent is klein, maar het is een echte fout: drie derde kilo is precies één kilo en kost dus precies € 7. Bij een berekening met veel stappen of grote aantallen kunnen zulke afrondingsfouten flink oplopen.
:::

{{ exercises: 08-016, 08-035 }}

## 3. Afronden in context

De afrondingsregel geeft het dichtstbijzijnde getal. Maar soms zoek je niet het dichtstbijzijnde getal, en dan is de regel de verkeerde vraag.

- **Minimaal benodigd.** Een berekening zegt dat je 2,3 bussen verf nodig hebt. Je koopt er 3, ook al ligt 2,3 dichter bij 2. Hier rond je altijd **naar boven** af.
- **Hoeveel passen er volledig in?** Uit een touw van 5 m knip je stukken van 0,6 m. De deling geeft $8{,}33\ldots$, en je krijgt 8 volledige stukken. Al zou de deling 8,9 opleveren: een negende stuk heb je niet. Hier rond je **naar beneden** af.
- **Geld.** Een bedrag rond je meestal af op centen. Bij contante betaling worden in Nederland totaalbedragen in de winkel vaak afgerond op vijf cent, omdat munten van 1 en 2 cent nauwelijks worden gebruikt.

Lees bij elke contextopgave dus eerst: zoek je een benadering, een minimum of een aantal dat volledig past?

:::question Meten en rekenen
Een rekenmachine geeft bij een berekening met gemeten lengtes de uitkomst 12,347891 cm. Je liniaal onderscheidt millimeters. Hoeveel van de getoonde cijfers zijn betekenisvol? Wat zou je opschrijven?
:::

Je meting is op de millimeter nauwkeurig, ofwel op 0,1 cm. Meer dan één decimaal heeft dan geen betekenis: je schrijft 12,3 cm. Een uitkomst kan nooit nauwkeuriger zijn dan de metingen waarop ze berust. In de natuurwetenschappen werkt men dit idee uit met de regels voor **significante cijfers**; voor nu is de vuistregel genoeg: geef niet meer decimalen dan je gegevens rechtvaardigen.

## 4. Schatten

Schatten is afronden met een ander doel: niet om een eindantwoord netjes op te schrijven, maar om **vooraf** te weten welke orde van grootte je verwacht. Bij decimalen is dat extra belangrijk, omdat één verkeerd geplaatste komma een uitkomst tien of honderd keer te groot of te klein maakt, en dat zie je aan de cijfers zelf niet.

:::theory Schatten met decimalen
1. Rond elk getal af op een **vriendelijk getal**: een geheel getal, een tiental, of iets als 0,5 of 0,25.
2. Reken met die vriendelijke getallen uit het hoofd.
3. Gebruik de schatting om je exacte uitkomst te **controleren**, vooral de plaats van de komma.
:::

:::example Uitgewerkt voorbeeld: schatten bij vermenigvuldigen
**a.** $4{,}92 \times 6{,}1$. Rond af op gehelen: $5 \times 6 = 30$. De exacte uitkomst moet in de buurt van 30 liggen. (Exact: 30,012.)

**b.** $3{,}82 \times 0{,}47$. Rond af: $4 \times 0{,}5 = 2$. Stel dat je met hele getallen $382 \times 47 = 17\,954$ hebt uitgerekend, maar niet zeker weet waar de komma moet. De schatting zegt: ongeveer 2. Dus 1,7954, niet 17,954 of 0,17954.

**c.** $19{,}8 : 0{,}52$. Rond af: $20 : 0{,}5$. Hoe vaak past een halve in 20? Veertig keer. De uitkomst is dus ongeveer 40, groter dan het deeltal. (Exact: 38,07…)
:::

:::tip Een schatting is geen afronding van het antwoord
Een schatting gebruikt afgeronde **invoer**; een afronding bewerkt de exacte **uitkomst**. De schatting van $4{,}92 \times 6{,}1$ is 30, maar de uitkomst afgerond op gehelen is ook 30 en op één decimaal 30,0. Dat is hier toeval. Bij $3{,}82 \times 0{,}47$ is de schatting 2, terwijl de uitkomst afgerond op één decimaal 1,8 is. Een schatting mag dus best een beetje afwijken; ze moet vooral de **orde van grootte** goed hebben.
:::

{{ exercise: 08-034 }}

## 5. Terugredeneren: welke getallen geven deze afronding?

Een omgekeerde vraag laat zien of je afronden echt begrijpt. Een tijd wordt als 3,5 seconden opgegeven, afgerond op tienden. Wat kan de werkelijke tijd geweest zijn?

Alle getallen die op één decimaal afronden naar 3,5 liggen dichter bij 3,5 dan bij 3,4 of 3,6. Het midden met 3,4 is 3,45; het midden met 3,6 is 3,55. Volgens de schoolregel gaat 3,45 naar boven, dus naar 3,5, en gaat 3,55 ook naar boven, dus naar 3,6. De werkelijke tijd ligt dus **van 3,45 tot (maar niet met) 3,55**.

Een afgerond getal staat dus eigenlijk voor een heel **interval** van mogelijke waarden. Dat is ook de reden dat 2,30 m (afgerond op centimeters: tussen 2,295 en 2,305 m) meer informatie bevat dan 2,3 m (tussen 2,25 en 2,35 m).

{{ exercise: 08-036 }}
