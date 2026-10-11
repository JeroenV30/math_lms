# Een onbekende exponent

:::history Edinburgh, begin 17e eeuw
Rond 1600 is de sterrenkunde een rekenwedstrijd. Wie de baan van een planeet wil voorspellen, vermenigvuldigt en deelt getallen met zeven, acht of meer cijfers, regel na regel, soms maandenlang. Eén verschuiving in een kolom en de hele berekening is bedorven. De Schotse landheer John Napier, die op Merchiston Castle bij Edinburgh woonde en zich naast zijn landgoed met theologie en wiskunde bezighield, wilde dat werk lichter maken. Na jaren rekenen publiceerde hij in 1614 een boekje met een tabel die vermenigvuldigen terugbrengt tot optellen.
:::

Optellen is gemakkelijk, vermenigvuldigen is werk. Het idee van Napier was om een vermenigvuldiging te vervangen door een optelling, en om daarna met een tabel terug te vertalen. Dat klinkt als een truc, maar er zit een diepe eigenschap van machten achter, die je al kent uit de eerdere modules: bij het vermenigvuldigen van machten met hetzelfde grondtal tel je de exponenten op, want $2^3 \cdot 2^4 = 2^{3+4} = 2^7$.

:::question Een tabel van machten
Hieronder staat een kort rijtje machten van 2. Bereken $32 \times 128$ zonder het product uit te schrijven, alleen met dit rijtje en een optelling.

| exponent | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 |
|---|---|---|---|---|---|---|---|---|---|---|
| macht van 2 | 2 | 4 | 8 | 16 | 32 | 64 | 128 | 256 | 512 | 1024 |

Zoek eerst op welke exponent bij 32 hoort en welke bij 128. Wat doe je daarna met die twee exponenten, en waar zoek je het antwoord op? Probeer het zelf voordat je verder leest.
:::

Bij 32 hoort exponent 5, bij 128 exponent 7. Je telt ze op: $5 + 7 = 12$. Bij exponent 12 hoort $2^{12} = 4096$, en inderdaad is $32 \times 128 = 4096$. Je hebt een vermenigvuldiging uitgevoerd door twee dingen op te zoeken, één keer op te tellen en één ding terug te zoeken. Dat is precies wat een logaritmetabel doet, alleen met veel meer rijen en met een dichter gevuld rooster van exponenten.

## Waarom bestaat deze wiskunde?

Het rijtje hierboven werkt alleen voor getallen die toevallig een macht van 2 zijn. Voor een bruikbare tabel heb je ook de getallen ertussen nodig: welke exponent hoort bij 10, bij 50 of bij 700? Dat is geen geheel getal meer. Zoek je de $t$ waarvoor $2^t = 10$, dan weet je uit de tabel dat $2^3 = 8$ en $2^4 = 16$, dus $t$ ligt ergens tussen 3 en 4. Probeer je $t = 3{,}3$, dan krijg je een getal iets onder de 10; bij $t = 3{,}4$ zit je er iets boven. De oplossing bestaat en is uniek, maar je kunt haar niet als geheel getal of simpele breuk opschrijven. Je geeft haar daarom een eigen naam: de **logaritme**. Er geldt $t = \log_2 10 \approx 3{,}32$.

{{ widget: powers base=2 max=10 }}

Een logaritme is dus niets nieuws qua idee: het is de **onbekende exponent** uit een machtsvergelijking. Maar de behoefte eraan is groot, en dat heeft twee redenen.

De eerste reden is rekentechnisch. Omdat $\log_b(uv) = \log_b u + \log_b v$, verandert een logaritme vermenigvuldigen in optellen, delen in aftrekken en machtsverheffen in vermenigvuldigen. Dat maakte van de logaritme eeuwenlang het belangrijkste rekenhulpmiddel van sterrenkundigen, zeevaarders en landmeters, tot de elektronische rekenmachine in de jaren 1970 het overnam.

De tweede reden is dat veel processen exponentieel verlopen: bacteriën, rente, radioactief verval, de verspreiding van een virus. Zodra je in zo'n proces wilt weten *wanneer* iets een bepaalde waarde bereikt, is de onbekende een exponent. In module 25 bepaalde je groeifactoren en stelde je modellen op; in deze module leer je de vraag omdraaien: na hoeveel tijd is de hoeveelheid verdubbeld, en wanneer is de drempel van 1000 bereikt? Daarnaast meten we in de natuurwetenschappen allerlei grootheden op een logaritmische schaal, zoals geluidsniveau, zuurgraad en aardbevingskracht, omdat de waarden over veel ordes van grootte uiteenlopen.

## Twee verschillende vragen

Bij een machtsvergelijking kan de onbekende op twee plaatsen staan, en die twee gevallen hebben een verschillende omkeerbewerking. Staat de onbekende in het grondtal, zoals bij $x^3 = 8$, dan neem je een wortel. Staat de onbekende in de exponent, zoals bij $3^x = 8$, dan neem je een logaritme. Het is dezelfde relatie $b^y = a$, steeds met een andere onbekende.

:::theory Drie getallen, twee omkeringen
In $b^y = a$ staan drie getallen: het grondtal $b$, de exponent $y$ en de uitkomst $a$.

- Zoek je $a$ bij gegeven $b$ en $y$, dan reken je gewoon een macht uit.
- Zoek je $b$ bij gegeven $y$ en $a$, dan is dat de $y$-de machtswortel: $b = \sqrt[y]{a}$.
- Zoek je $y$ bij gegeven $b$ en $a$, dan is dat de logaritme: $y = \log_b a$.

Een logaritme is dus de **tweede inverse** van het machtsverheffen: de ene bewerking, twee verschillende vragen.
:::

:::example Basis of exponent?
Los $x^3 = 8$ en $3^x = 8$ allebei op.

**Stap 1.** Bij $x^3 = 8$ staat de onbekende in het grondtal. Je zoekt een getal dat drie keer met zichzelf vermenigvuldigd 8 geeft. Dat is de derdemachtswortel: $x = \sqrt[3]{8} = 2$.

**Stap 2.** Bij $3^x = 8$ staat de onbekende in de exponent. Je weet dat $3^1 = 3$ en $3^2 = 9$. De oplossing ligt dus tussen 1 en 2, en dicht bij 2 omdat 8 vlak onder 9 ligt.

**Stap 3.** Je schrijft $x = \log_3 8$. Een rekenmachine geeft hiervoor ongeveer $1{,}893$. Controle: $3^{1{,}893} \approx 8$.

De plaats van de onbekende bepaalt dus welke omkeerbewerking je nodig hebt.
:::

{{ exercises: 26-001, 26-002, 26-003 }}

## Wat je in deze module leert

{{ goals }}

## Kernbegrippen

{{ glossary }}

In de volgende les maken we het idee precies: wat is de definitie van een logaritme, welke waarden zijn toegestaan en waarom? Daarna volgen de rekenregels, die je afleidt uit de machtsregels, het omrekenen tussen grondtallen, de grafiek en de toepassingen. Tussendoor lees je het verhaal van Napier, die in 1614 zijn tabellen uitbracht, en van de mensen die zijn idee bruikbaar maakten.
