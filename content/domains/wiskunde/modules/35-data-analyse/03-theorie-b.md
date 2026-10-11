# Spreiding en uitschieters

In module 24 heb je de spreidingsmaten leren berekenen. In deze les gebruik je ze als gereedschap. Je vergelijkt groepen met dezelfde gemiddelde waarde maar een heel ander gedrag, je ziet welke maten zich door één extreme waarde laten meeslepen, en je leert twee methoden om uitschieters op te sporen. Tot slot de belangrijkste vraag: wat doe je met een uitschieter als je hem gevonden hebt?

## 1. Waarom spreiding er in de praktijk toe doet

:::example Uitgewerkt voorbeeld: twee buslijnen
Een vervoerder meet op acht werkdagen de vertraging (in minuten) van twee buslijnen op hetzelfde traject:

| lijn A | 2 | 3 | 3 | 4 | 4 | 5 | 5 | 6 |
|---|---|---|---|---|---|---|---|---|
| **lijn B** | **0** | **0** | **1** | **2** | **5** | **7** | **8** | **9** |

**Centrum.** Beide lijnen hebben een gemiddelde vertraging van precies 4 minuten: $32 / 8 = 4$. Wie alleen naar het gemiddelde kijkt, ziet geen verschil.

**Spreidingsbreedte.** Lijn A: $6 - 2 = 4$. Lijn B: $9 - 0 = 9$.

**Kwartielen.** Je gebruikt de afspraak uit module 24: sorteer, splits in een onderste en bovenste helft, en neem van elke helft de mediaan. Bij acht waarden bestaat elke helft uit vier waarden.

- Lijn A: onderste helft 2, 3, 3, 4, dus $Q_1 = 3$; bovenste helft 4, 5, 5, 6, dus $Q_3 = 5$. $\mathrm{IQR} = 2$.
- Lijn B: onderste helft 0, 0, 1, 2, dus $Q_1 = 0{,}5$; bovenste helft 5, 7, 8, 9, dus $Q_3 = 7{,}5$. $\mathrm{IQR} = 7$.

**Standaardafwijking** (steekproef, delen door $n - 1 = 7$). Bij lijn A zijn de afwijkingen van het gemiddelde $-2, -1, -1, 0, 0, 1, 1, 2$; de kwadraten tellen op tot 12, dus $s = \sqrt{12/7} \approx 1{,}31$ minuten. Bij lijn B tellen de gekwadrateerde afwijkingen op tot 96, dus $s = \sqrt{96/7} \approx 3{,}70$ minuten.

**Conclusie.** Gemiddeld even laat, maar lijn A is voorspelbaar en lijn B niet. Voor een reiziger die een trein moet halen is lijn A veel beter: hij weet hoeveel marge hij moet nemen. In de praktijk is spreiding vaak belangrijker dan het gemiddelde. Denk aan levertijden, de vulling van verpakkingen of de dosering van medicijnen.
:::

Probeer de twee lijnen zelf in de widget: voer eerst de waarden van lijn A in, dan die van lijn B, en vergelijk de breedte van de box.

{{ widget: boxplot values="0; 0; 1; 2; 5; 7; 8; 9" }}

## 2. Robuuste en gevoelige maten

Niet elke maat reageert even sterk op één extreme waarde. Dat is een van de belangrijkste praktische inzichten van deze module.

:::example Uitgewerkt voorbeeld: zeven salarissen
Een klein bedrijf heeft zeven medewerkers. Hun bruto maandsalarissen in euro's: 2.900, 3.100, 3.200, 3.400, 3.500, 3.600 en dat van de directeur-eigenaar, 14.800.

| | met directeur | zonder directeur |
|---|---|---|
| gemiddelde | € 4.928,57 | € 3.283,33 |
| mediaan | € 3.400 | € 3.300 |
| standaardafwijking $s$ | € 4.359,55 | € 263,94 |

**Wat valt op?** Eén persoon trekt het gemiddelde ruim € 1.600 omhoog; zes van de zeven medewerkers verdienen minder dan "het gemiddelde salaris". De mediaan verschuift maar € 100. De standaardafwijking wordt zelfs ruim zestien keer zo groot, omdat de afwijking van de directeur in het kwadraat meetelt.

**Conclusie.** Wie in een vacaturetekst "gemiddeld salaris bijna € 5.000" schrijft, zegt niets onwaars, maar misleidt wel.
:::

:::theory Robuust tegenover gevoelig
- **Robuust** (nauwelijks beïnvloed door enkele extreme waarden): mediaan, kwartielen, interkwartielafstand.
- **Gevoelig**: gemiddelde, spreidingsbreedte, standaardafwijking. De spreidingsbreedte hangt zelfs volledig af van de twee meest extreme waarden.

Bij scheve verdelingen of data met uitschieters rapporteer je daarom liever mediaan en IQR. Bij ongeveer symmetrische data zonder uitschieters zijn gemiddelde en standaardafwijking prima, en ze hebben theoretische voordelen die je in deel VII leert kennen.
:::

{{ exercises: 35-007, 35-008, 35-009, 35-010 }}

## 3. Uitschieters opsporen met de 1,5×IQR-regel

Wanneer ligt een waarde "te ver" van de rest? Daar bestaat geen natuurwet voor; je hebt een afspraak nodig. De bekendste is van de Amerikaanse statisticus John Tukey, die haar in zijn boek *Exploratory Data Analysis* (1977) gebruikte bij de boxplot.

:::definition De 1,5×IQR-regel (Tukey)
Bereken $Q_1$, $Q_3$ en $\mathrm{IQR} = Q_3 - Q_1$. De **grenzen** (Engels: *fences*) zijn

$$
\text{ondergrens} = Q_1 - 1{,}5 \cdot \mathrm{IQR}, \qquad \text{bovengrens} = Q_3 + 1{,}5 \cdot \mathrm{IQR}.
$$

Een waarde die **kleiner is dan de ondergrens of groter dan de bovengrens** heet een uitschieter. Een waarde die precies op een grens ligt, telt niet als uitschieter. Ligt een waarde zelfs buiten $Q_1 - 3 \cdot \mathrm{IQR}$ of $Q_3 + 3 \cdot \mathrm{IQR}$, dan spreek je van een **extreme uitschieter**.
:::

Waarom juist 1,5? Tukey koos een getal dat in de praktijk goed werkte: bij mooie, symmetrische, klokvormige data valt er maar zelden een waarneming buiten deze grenzen (minder dan één procent), terwijl echt afwijkende waarden wél opvallen. Het is een vuistregel, geen bewijs. De grenzen vormen samen een interval: alle waarden in $[Q_1 - 1{,}5 \cdot \mathrm{IQR};\ Q_3 + 1{,}5 \cdot \mathrm{IQR}]$ zijn géén uitschieter.

Het mooie van deze regel is dat hij zelf **robuust** is. De grenzen worden bepaald door kwartielen, en die laten zich door de uitschieter zelf nauwelijks beïnvloeden.

:::example Uitgewerkt voorbeeld: wachttijden bij een helpdesk
Een helpdesk noteert van elf bellers de wachttijd in minuten, al gesorteerd:

$$
4,\ 6,\ 7,\ 7,\ 8,\ 9,\ 10,\ 11,\ 12,\ 14,\ 31
$$

**Stap 1: mediaan.** Bij $n = 11$ is de mediaan de 6e waarde: 9.

**Stap 2: kwartielen.** De middelste waarde doet niet mee in de helften. Onderste helft: 4, 6, 7, 7, 8, dus $Q_1 = 7$. Bovenste helft: 10, 11, 12, 14, 31, dus $Q_3 = 12$.

**Stap 3: IQR.** $\mathrm{IQR} = 12 - 7 = 5$.

**Stap 4: grenzen.** $1{,}5 \cdot 5 = 7{,}5$. Ondergrens $7 - 7{,}5 = -0{,}5$; bovengrens $12 + 7{,}5 = 19{,}5$.

**Stap 5: toetsen.** Alleen 31 ligt buiten $[-0{,}5;\ 19{,}5]$. Liggen er waarden zelfs buiten de grenzen voor 3×IQR, namelijk $7 - 15 = -8$ en $12 + 15 = 27$? Ja: 31 is een extreme uitschieter.

**Stap 6: tekenen.** In een boxplot met uitschietersnorren loopt de rechtersnor tot de grootste waarde *binnen* de grens, hier 14, en wordt 31 als los punt getekend.
:::

![Uitschietergrenzen bij de helpdeskdata](/images/diagrams/m35-uitschietergrenzen.svg "Boxplot van de wachttijden met de grenzen van Tukey. De snorren lopen tot 4 en 14; 31 ligt voorbij zowel de 1,5×IQR-grens als de 3×IQR-grens.")

:::warning Welke boxplot zie je?
De widget in deze cursus tekent de **minimum/maximumvariant**: de snorren lopen altijd tot het kleinste en grootste getal. Software als R, Python of Excel tekent meestal de **uitschietervariant** zoals in de figuur hierboven. Kijk dus altijd welke variant je voor je hebt (module 24). Let ook op de kwartielafspraak: software gebruikt vaak een andere methode dan "mediaan van de helften", en geeft daardoor bij kleine datasets net andere kwartielen en grenzen.
:::

{{ widget: boxplot values="4; 6; 7; 7; 8; 9; 10; 11; 12; 14; 31" }}

{{ exercises: 35-011, 35-012 }}

## 4. Uitschieters opsporen met z-scores

Een tweede methode gebruikt gemiddelde en standaardafwijking. Je drukt de afstand tot het gemiddelde uit in "aantal standaardafwijkingen".

:::definition z-score
De **z-score** van een waarde $x$ is

$$
z = \frac{x - \bar{x}}{s}.
$$

Een positieve $z$ betekent: boven het gemiddelde; een negatieve: eronder. Een veelgebruikte vuistregel noemt een waarde met $|z| > 3$ een uitschieter.
:::

Het idee erachter: bij data die ongeveer klokvormig (normaal) verdeeld zijn, ligt vrijwel alles binnen drie standaardafwijkingen van het gemiddelde. In module 37 leer je precies hoeveel. Een z-score is bovendien handig om waarden op verschillende schalen te vergelijken: een 7,5 op een moeilijk tentamen kan "beter" zijn dan een 8 op een makkelijk tentamen.

:::example Uitgewerkt voorbeeld: twee tentamens
Op tentamen statistiek is het gemiddelde 6,1 met $s = 0{,}8$; op tentamen economie is het gemiddelde 7,2 met $s = 1{,}2$. Sanne haalt een 7,5 voor statistiek en een 8,0 voor economie.

- Statistiek: $z = (7{,}5 - 6{,}1)/0{,}8 = 1{,}4/0{,}8 = 1{,}75$.
- Economie: $z = (8{,}0 - 7{,}2)/1{,}2 = 0{,}8/1{,}2 \approx 0{,}67$.

Ten opzichte van haar medestudenten presteerde Sanne bij statistiek dus duidelijk beter, ook al is het cijfer lager.
:::

De z-regel heeft wel twee zwakke plekken, en die zie je mooi bij de helpdeskdata.

:::example Uitgewerkt voorbeeld: de z-regel bij de helpdesk
De elf wachttijden tellen op tot 119, dus $\bar{x} = 119/11 \approx 10{,}82$. De standaardafwijking is $s \approx 7{,}28$. Voor de wachttijd van 31 minuten:

$$
z = \frac{31 - 10{,}82}{7{,}28} \approx 2{,}77.
$$

Volgens de $|z| > 3$-regel is 31 dus **geen** uitschieter, terwijl de 1,5×IQR-regel hem zelfs als extreme uitschieter aanwijst. Hoe kan dat?
:::

:::warning Twee zwakke plekken van de z-regel
1. **Maskering.** De uitschieter zit zelf in het gemiddelde en, sterker nog, in de standaardafwijking. Zonder de 31 zou $s$ ongeveer 3,0 zijn, ruim de helft kleiner. De uitschieter blaast de maatstaf op waarmee hij wordt gemeten, en "verstopt" zichzelf zo.
2. **Kleine datasets.** Bij weinig waarnemingen kan $|z|$ wiskundig gezien nooit groot worden. Bij $n = 10$ is de grootst mogelijke z-score ongeveer 2,85, wat de data ook zijn. De regel $|z| > 3$ kan dan nooit iets vinden. (In de uitdaging aan het eind van de module bewijs je dat.)

Gebruik de z-regel daarom vooral bij grotere datasets met een ongeveer symmetrische verdeling. Bij kleine of scheve datasets is de 1,5×IQR-regel betrouwbaarder.
:::

{{ exercises: 35-013, 35-014, 35-015, 35-016, 35-017 }}

## 5. Gevonden: en nu?

Een uitschieter is geen fout. Het is een **vraag**: waar komt deze waarde vandaan? Er zijn grofweg drie antwoorden mogelijk, en elk vraagt een andere aanpak.

:::theory Wat je met een uitschieter doet
1. **Aantoonbare fout** (typefout, verkeerde eenheid, kapotte sensor, testrecord). Corrigeer de waarde als de juiste waarde te achterhalen is; verwijder haar anders. Leg vast wat je deed en waarom.
2. **Echte waarde uit een andere populatie** (een directeur tussen het uitvoerend personeel, een zakelijke klant tussen particulieren). Overweeg die waarneming apart te analyseren, en zeg dat er expliciet bij.
3. **Echte, maar zeldzame waarde** (een uitzonderlijk lange wachttijd door een storing). Laat haar staan. Rapporteer robuuste maten (mediaan, IQR), of rapporteer de resultaten mét en zonder de uitschieter.

Wat je **nooit** doet: een waarde weglaten alleen omdat ze je conclusie verstoort. Dat is selectief rapporteren, en het is een van de bekendste manieren om met statistiek te misleiden.
:::

Vaak is de uitschieter juist het interessantste getal van de dataset. De wachttijd van 31 minuten kan wijzen op een telefooncentrale die op één moment volledig vastliep. Een ongewoon hoge transactie op een bankrekening kan fraude zijn. Een patiënt die opvallend goed op een medicijn reageert, kan een nieuw onderzoek inspireren. Wie uitschieters automatisch weggooit, gooit soms precies de ontdekking weg.

{{ exercise: 35-018 }}
