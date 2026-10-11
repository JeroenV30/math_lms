# Tijd: rekenen in zestigen

Bijna alles wat je in deze module meet, gaat in stappen van 10: tien millimeter is een centimeter, honderd cent is een euro. Tijd is de grote uitzondering. Een minuut heeft **60** seconden, een uur **60** minuten, een etmaal **24** uur. Wie daar niet bij stilstaat, maakt fouten die er heel redelijk uitzien – en dat zijn de gevaarlijkste fouten.

## Waarom zestig?

De verdeling in zestigen is een erfenis van Mesopotamië. Sumerische en later Babylonische rekenaars schreven getallen in een **zestigtallig** stelsel: waar wij na 9 een nieuwe positie beginnen (10), begonnen zij na 59. Sterrenkundigen bleven dat stelsel eeuwenlang gebruiken, ook toen het dagelijks leven al lang tientallig rekende: Griekse astronomen zoals Hipparchus (2e eeuw v.Chr.) en later Ptolemaeus rekenden hoeken en tijden in zestigsten. De Latijnse namen verraden die herkomst nog: *pars minuta prima* ("eerste kleine deel") werd onze **minuut**, *pars minuta secunda* ("tweede kleine deel") onze **seconde**.

Dat 60 zo lang heeft standgehouden, is geen toeval. Zestig is deelbaar door 1, 2, 3, 4, 5, 6, 10, 12, 15, 20, 30 en 60. Een half uur, een derde uur, een kwart uur, een vijfde, een zesde, een tiende en een twaalfde uur zijn allemaal hele aantallen minuten. Met een uur van 100 minuten zou een derde uur een onhandige 33,333... minuten zijn.

Hieronder zie je hoe een Babylonische rekenaar het getal 3600 zou schrijven – het aantal seconden in een uur. In het zestigtallige stelsel is dat precies "1, 0, 0": één zestig-maal-zestig, nul zestigen, nul eenheden. Zoals 100 in ons stelsel een "rond" getal is, is 3600 dat in het Babylonische.

{{ widget: babylonian value=3600 }}

:::definition Tijdseenheden
| eenheid | symbool | is gelijk aan |
|---|---|---|
| seconde | s | – |
| minuut | min | 60 s |
| uur | u of h | 60 min = 3600 s |
| etmaal (dag) | d | 24 uur = 1440 min = 86.400 s |
| week | – | 7 etmalen = 168 uur |
:::

## Omrekenen: maal 60 en gedeeld door 60

Omrekenen werkt bij tijd precies zoals bij andere eenheden, alleen is de stapgrootte 60 in plaats van 10.

- Van een **grote** eenheid naar een **kleine** (uur → minuut, minuut → seconde): **vermenigvuldigen** met 60. Je krijgt meer stukjes, dus het getal wordt groter.
- Van een **kleine** eenheid naar een **grote** (seconde → minuut, minuut → uur): **delen** door 60. Er blijft vaak een rest over; die rest is het aantal overgebleven kleine eenheden.

:::formula Omrekenen van tijd
$$
\text{uren} \xrightarrow{\ \times 60\ } \text{minuten} \xrightarrow{\ \times 60\ } \text{seconden}
$$
Terug ga je met $: 60$. Een rest bij het delen hoort bij de kleinere eenheid: $200\ \text{min} = 3\ \text{uur} + 20\ \text{min}$, want $3 \times 60 = 180$ en $200 - 180 = 20$.
:::

:::example Gemengde tijden omrekenen
**a. Hoeveel minuten is 2 uur en 35 minuten?**

Eerst de hele uren: $2 \times 60 = 120$ minuten. Dan de losse minuten erbij: $120 + 35 = 155$ minuten.

**b. Hoeveel uur en minuten is 500 seconden?**

Hoeveel volle minuten passen er in 500 seconden? $8 \times 60 = 480$ en $9 \times 60 = 540$ is te veel. Dus 8 minuten, met een rest van $500 - 480 = 20$ seconden. Antwoord: 8 minuten en 20 seconden.

**c. Controle door terug te rekenen.** $8 \times 60 + 20 = 480 + 20 = 500$. Klopt.
:::

:::warning Lees 2:35 niet als 235
Een tijd als "2 uur 35" of "2:35" lijkt een gewoon getal, maar de cijfers voor en na de dubbele punt horen bij verschillende eenheden met een stap van 60 ertussen. 2 uur en 35 minuten is 155 minuten, niet 235. Rekenmachines en spreadsheets weten dat niet vanzelf: je moet het zelf omzetten.
:::

{{ exercises: 06-001, 06-002, 06-003 }}

## Tijdstip en tijdsduur

Er zijn twee soorten vragen over tijd, en het helpt om ze bewust uit elkaar te houden.

- Een **tijdstip** is een moment: "de trein vertrekt om 14:35".
- Een **tijdsduur** is een hoeveelheid tijd tussen twee momenten: "de reis duurt 85 minuten".

Je kunt tijdsduren optellen en aftrekken als gewone hoeveelheden (zolang ze in dezelfde eenheid staan). Twee tijdstippen optellen heeft geen betekenis: "14:35 plus 09:10" is geen zinnige vraag. Wel kun je bij een tijdstip een tijdsduur optellen ("vertrek 14:35, reisduur 85 minuten, aankomst 16:00") en twee tijdstippen van elkaar aftrekken om een tijdsduur te krijgen.

### De 24-uursnotatie

In dienstregelingen, roosters en op digitale klokken worden de uren van een etmaal doorgeteld van 00 tot en met 23. Zo is er nooit verwarring tussen ochtend en avond.

| gesproken | 24-uursnotatie |
|---|---|
| kwart over acht 's ochtends | 08:15 |
| twaalf uur 's middags | 12:00 |
| half vijf 's middags | 16:30 |
| tien voor zes 's avonds | 17:50 |
| middernacht | 00:00 |

Van een middag- of avondtijd naar de 24-uursnotatie tel je 12 bij het uur op: 4 uur 's middags wordt $4 + 12 = 16$ uur. Let op een Nederlandse eigenaardigheid: **"half vijf" betekent een half uur vóór vijf**, dus 4:30 (of 16:30), niet 5:30. In het Engels is *half past four* hetzelfde tijdstip, maar wordt het vanaf de vier geteld – een klassieke bron van gemiste afspraken.

### Tijdsduur berekenen door aan te vullen

Hoe lang duurt een reis van 08:47 tot 11:23? Je zou in de verleiding kunnen komen om $1123 - 847 = 276$ te rekenen. Dat is fout: bij het "lenen" leen je een uur van 60 minuten, niet een honderdtal.

De betrouwbaarste methode is **aanvullen**: je springt vanaf het begintijdstip naar een rond uur, daarna in hele uren, en ten slotte naar het eindtijdstip. Dat is dezelfde methode die je in module 3 bij aftrekken leerde, maar nu met 60 als ronde stap.

![Getallenlijn van 08:47 naar 11:23 met sprongen van 13 minuten, 2 uur en 23 minuten](/images/diagrams/m06-tijdsduur-sprongen.svg "Aanvullen: eerst naar een heel uur, dan hele uren, dan de rest. Eigen diagram.")

:::example Een reis over middernacht
Een nachttrein vertrekt om 23:41 en komt aan om 02:05. Hoeveel minuten duurt de reis?

- Van 23:41 naar 00:00 is 19 minuten (want $41 + 19 = 60$).
- Van 00:00 naar 02:00 is 2 uur = 120 minuten.
- Van 02:00 naar 02:05 is 5 minuten.

Samen: $19 + 120 + 5 = 144$ minuten, ofwel 2 uur en 24 minuten.

Controle: tel 144 minuten op bij 23:41. $23{:}41 + 2$ uur $= 01{:}41$, plus 24 minuten $= 02{:}05$. Klopt.
:::

:::tip Middernacht is gewoon een tussenstation
Gaat een tijdsduur over middernacht heen, gebruik 00:00 dan als extra sprong. Je hoeft niet te weten welke datum het is; je telt alleen hoeveel tijd er verstrijkt.
:::

{{ exercises: 06-006, 06-007 }}

## Tijd als decimaal getal

Soms wil je een tijdsduur als één getal in uren schrijven, bijvoorbeeld om een uurloon uit te rekenen of om later snelheden te berekenen. Dan heb je een **decimaal aantal uren** nodig, en daar ligt de bekendste valkuil van deze module.

:::warning 1 uur 45 minuten is niet 1,45 uur
Achter de komma van een decimaal getal staan tienden en honderdsten. 1,45 uur betekent dus "1 uur en 45 honderdste uur" – en 45 honderdste van 60 minuten is maar 27 minuten. De tijdsduur 1 uur en 45 minuten is $1 + \frac{45}{60} = 1 + \frac{3}{4} = 1{,}75$ uur.

Wie een monteur 1,45 uur betaalt voor 1 uur en 45 minuten werk, betaalt hem 18 minuten te weinig.
:::

De omzetting gaat in twee richtingen.

- **Minuten → deel van een uur**: deel het aantal minuten door 60. $45 : 60 = 0{,}75$, dus 45 minuten is 0,75 uur.
- **Deel van een uur → minuten**: vermenigvuldig met 60. $0{,}4 \times 60 = 24$, dus 0,4 uur is 24 minuten.

Een paar omzettingen komen zo vaak voor dat je ze uit je hoofd wilt kennen:

| minuten | deel van een uur | decimaal |
|---|---|---|
| 6 min | $\frac{1}{10}$ | 0,1 uur |
| 12 min | $\frac{1}{5}$ | 0,2 uur |
| 15 min | $\frac{1}{4}$ | 0,25 uur |
| 20 min | $\frac{1}{3}$ | 0,333... uur |
| 30 min | $\frac{1}{2}$ | 0,5 uur |
| 45 min | $\frac{3}{4}$ | 0,75 uur |

Je ziet hier ook waarom 60 handig is voor breuken, maar onhandig voor decimalen: een derde uur is precies 20 minuten, maar als decimaal getal loopt het eindeloos door.

:::example Uurloon met minuten
Een klus duurt van 13:10 tot 15:40. Het uurtarief is € 52. Wat kost de klus?

1. Tijdsduur door aanvullen: 13:10 → 14:00 is 50 min; 14:00 → 15:00 is 60 min; 15:00 → 15:40 is 40 min. Samen 150 minuten.
2. In uren: $150 : 60 = 2{,}5$ uur (twee uur en een half).
3. Kosten: $2{,}5 \times 52 = 104 + 26 = 130$, dus € 130.

Wie hier "2 uur 30 = 2,30 uur" had gerekend, kwam uit op € 119,60: bijna € 10 te weinig.
:::

{{ exercises: 06-004, 06-005 }}

## Zelf proberen

Bij de volgende twee opgaven komen de hints pas als je erom vraagt. Werk ze eerst helemaal zelf uit.

{{ exercises: 06-008, 06-009 }}
