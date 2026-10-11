# Groeifactoren, btw en terugrekenen

In de vorige les berekende je een korting in twee stappen: eerst het kortingsbedrag, dan aftrekken. Je zag ook een kortere route: "er blijft 85% over, dus vermenigvuldig met 0,85". Die kortere route heeft een naam, de **groeifactor**, en ze is veel krachtiger dan ze lijkt. Met groeifactoren kun je opeenvolgende veranderingen in één keer doorrekenen, een verandering terugdraaien, en de btw op een kassabon ontleden.

## 1. Een verandering als vermenigvuldiging

Bij een stijging van 12% blijft de oorspronkelijke 100% bestaan en komt er 12% bij. De nieuwe waarde is dus 112% van de oude:

$$
\text{nieuw} = \text{oud} + 0{,}12 \times \text{oud} = (1 + 0{,}12) \times \text{oud} = 1{,}12 \times \text{oud}
$$

Bij een daling van 12% blijft er 88% over: $\text{nieuw} = 0{,}88 \times \text{oud}$.

:::definition Groeifactor
Bij een verandering van $p\%$ hoort de **groeifactor**

$$
g = 1 + \frac{p}{100}
$$

Voor een daling is $p$ negatief. Je vindt de nieuwe waarde met $\text{nieuw} = g \times \text{oud}$.
:::

| Verandering | Wat blijft er over? | Groeifactor |
|---|---|---|
| +12% | 112% | 1,12 |
| +5% | 105% | 1,05 |
| +150% | 250% | 2,5 |
| +100% (verdubbeling) | 200% | 2 |
| −12% | 88% | 0,88 |
| −50% (halvering) | 50% | 0,5 |
| −100% | 0% | 0 |

Een groeifactor groter dan 1 betekent groei, kleiner dan 1 krimp, en precies 1 geen verandering. Omgekeerd kun je uit een groeifactor het percentage aflezen: $g = 0{,}93$ betekent dat 93% overblijft, dus een daling van 7%.

:::warning +150% is niet ×1,5
Een stijging van 150% betekent dat er anderhalf keer de oude waarde **bij** komt. De nieuwe waarde is dan $100\% + 150\% = 250\%$ van de oude: groeifactor 2,5. Vermenigvuldigen met 1,5 hoort bij een stijging van 50%.
:::

## 2. Veranderingen na elkaar

Stel dat een prijs eerst met 20% stijgt en daarna met 20% daalt. Velen denken dat de prijs dan weer is wat hij was. Reken het na met € 100:

1. Na de stijging: $1{,}2 \times 100 = 120$ euro.
2. Na de daling: $0{,}8 \times 120 = 96$ euro.

De prijs is € 4 lager dan aan het begin. De reden is de **basis**: de stijging van 20% werd berekend over € 100 (dat is € 20), maar de daling van 20% over € 120 (dat is € 24). Er gaat meer af dan er eerst bij kwam.

![Twintig procent erbij en twintig procent eraf](/images/diagrams/m09-twintig-erbij-eraf.svg "Eerst 20% van 100 erbij (+20), dan 20% van 120 eraf (−24). Het eindpunt is 96, niet 100.")

Met groeifactoren zie je dit in één regel:

$$
100 \times 1{,}2 \times 0{,}8 = 100 \times 0{,}96 = 96
$$

De twee veranderingen samen hebben groeifactor $1{,}2 \times 0{,}8 = 0{,}96$: een daling van 4%. Omdat vermenigvuldigen de wisseleigenschap heeft (module 4), maakt de volgorde niet uit. Eerst 20% korting en dan 20% opslag geeft ook $0{,}8 \times 1{,}2 = 0{,}96$.

:::theory Opeenvolgende veranderingen
Bij veranderingen na elkaar **vermenigvuldig** je de groeifactoren:

$$
g_{\text{totaal}} = g_1 \times g_2 \times \dots
$$

Je mag de percentages **niet** optellen, omdat elke volgende verandering over een nieuwe basis wordt berekend.
:::

:::example Uitgewerkt voorbeeld: twee keer 10% erbij
Een huur stijgt twee jaar achter elkaar met 10%. Hoeveel procent is de huur in totaal gestegen?

De totale groeifactor is $1{,}1 \times 1{,}1 = 1{,}21$. De huur is nu 121% van wat hij was: een stijging van 21%, niet 20%. De extra procent is "10% van de eerste 10%": de tweede verhoging wordt ook over de eerste verhoging berekend.
:::

Het patroon bij "erbij en eraf" is algemeen. Bij $p\%$ erbij en daarna $p\%$ eraf is de totale groeifactor

$$
\left(1 + \tfrac{p}{100}\right)\left(1 - \tfrac{p}{100}\right) = 1 - \left(\tfrac{p}{100}\right)^2
$$

Bij $p = 20$ is dat $1 - 0{,}04 = 0{,}96$; bij $p = 50$ is het $1 - 0{,}25 = 0{,}75$. Je eindigt dus altijd lager dan je begon, en hoe groter het percentage, hoe groter het verlies. Haakjes uitwerken leer je in de algebramodules vanaf module 15; hier volstaat het om de formule met getallen te controleren.

{{ exercises: 09-019, 09-020, 09-021, 09-022 }}

## 3. Terugrekenen

Ken je de nieuwe waarde en de verandering, en zoek je de oude waarde, dan draai je de vermenigvuldiging om: je **deelt** door de groeifactor.

$$
\text{nieuw} = g \times \text{oud} \quad\Longleftrightarrow\quad \text{oud} = \frac{\text{nieuw}}{g}
$$

:::example Uitgewerkt voorbeeld: de prijs vóór de korting
Na 20% korting betaal je € 64. Wat was de oorspronkelijke prijs?

1. Na 20% korting betaal je 80% van de oude prijs. De groeifactor is $0{,}8$.
2. $\text{oud} \times 0{,}8 = 64$, dus $\text{oud} = 64 : 0{,}8 = 80$ euro.
3. Controle: 20% van € 80 is € 16, en $80 - 16 = 64$. Klopt.

Je verhoogt € 64 dus **niet** met 20%: dat zou € 76,80 opleveren. De korting werd over € 80 berekend, niet over € 64.
:::

In de taal van les 3 is dit "het geheel zoeken": € 64 is 80% van een onbekend geheel.

:::example Uitgewerkt voorbeeld: terug naar het begin
Na een stijging van 8% is een bedrag € 270. Wat was het oorspronkelijk? Deel door $1{,}08$: $270 : 1{,}08 = 250$ euro. Controle: $8\%$ van 250 is 20, en $250 + 20 = 270$.
:::

Een groeifactor van 0 (een korting van 100%) kun je niet terugrekenen: alles is weg, en uit "nul" kun je de oorspronkelijke prijs niet meer afleiden. Bij elke andere positieve groeifactor kan het wel.

{{ exercises: 09-023 }}

## 4. De btw

Een toepassing van groeifactoren die je dagelijks tegenkomt, is de **belasting over de toegevoegde waarde**, kortweg btw. In Nederland bestaat de btw sinds 1 januari 1969. De tarieven zijn sindsdien enkele keren veranderd. Het algemene tarief ging op 1 oktober 2012 van 19% naar **21%**. Het verlaagde tarief, dat onder meer geldt voor de meeste voedingsmiddelen, ging op 1 januari 2019 van 6% naar **9%**. (Er is ook een nultarief, onder meer voor de meeste leveringen naar het buitenland.)

Bij de btw spelen twee prijzen een rol:

- de prijs **exclusief btw** (zonder btw): wat de verkoper zelf ontvangt;
- de prijs **inclusief btw** (met btw): wat de consument betaalt.

De btw wordt berekend als percentage van de prijs **exclusief** btw. Dat is de basis, de 100%.

![De btw als strook](/images/diagrams/m09-btw-strook.svg "Bij 21% btw is de prijs exclusief btw 100 delen en de btw 21 delen. De prijs inclusief btw is 121 delen; de btw is dus 21/121 van die prijs, niet 21%.")

### Van exclusief naar inclusief

Dit is een gewone stijging met groeifactor $1{,}21$ (of $1{,}09$ bij het verlaagde tarief).

:::example Uitgewerkt voorbeeld: een factuur
Een schilder rekent € 250 exclusief btw voor een klus. Het tarief is 21%.

- De btw is $0{,}21 \times 250 = 52{,}50$ euro.
- De prijs inclusief btw is $250 + 52{,}50 = 302{,}50$ euro.
- In één stap: $1{,}21 \times 250 = 302{,}50$ euro.
:::

### Van inclusief naar exclusief

Dit is terugrekenen: je deelt door de groeifactor.

:::example Uitgewerkt voorbeeld: een fiets
Een fiets kost € 1.089 inclusief 21% btw. Wat is de prijs exclusief btw, en hoeveel btw zit er in de prijs?

1. Inclusief is 121% van exclusief. Dus $\text{exclusief} = 1089 : 1{,}21 = 900$ euro.
2. De btw is $1089 - 900 = 189$ euro.
3. Controle: $21\%$ van 900 is 189. Klopt.

In een verhoudingstabel: 121% hoort bij € 1.089, dus 1% hoort bij $1089 : 121 = 9$ euro, en 100% bij € 900. De btw is 21 van die "procentjes": $21 \times 9 = 189$.
:::

{{ widget: ratio-table a=121 b=1089 labelA="Percentage van de prijs excl. btw" labelB="Bedrag (€)" }}

Typ in de widget 100 (de prijs exclusief btw) en 21 (de btw) in de bovenste rij en kijk welke bedragen erbij horen.

:::warning De klassieke btw-fout
Wie de btw uit een prijs inclusief btw wil halen, is geneigd om 21% van die prijs af te trekken. Bij de fiets: $0{,}21 \times 1089 = 228{,}69$, en $1089 - 228{,}69 = 860{,}31$. Dat is fout: de btw is geen 21% van de prijs **inclusief** btw, maar 21% van de prijs **exclusief** btw. Aftrekken van 21% is vermenigvuldigen met $0{,}79$, en $1{,}21 \times 0{,}79 = 0{,}9559$, niet 1. Je komt dus niet terug waar je begon, net als bij "20% erbij, 20% eraf".
:::

### Het btw-bedrag direct uit de prijs inclusief btw

Uit de strook volgt een handige regel. Inclusief btw is 121 delen, waarvan 21 delen btw. De btw is dus $\tfrac{21}{121}$ van de prijs inclusief btw. Bij het verlaagde tarief is dat $\tfrac{9}{109}$.

:::example Uitgewerkt voorbeeld: boodschappen
Een kassabon voor boodschappen met 9% btw toont een totaal van € 32,70. Hoeveel btw zit erin?

1. Inclusief is 109% van exclusief. Exclusief is $32{,}70 : 1{,}09 = 30$ euro.
2. De btw is $32{,}70 - 30 = 2{,}70$ euro.
3. Of direct: $\tfrac{9}{109} \times 32{,}70 = 2{,}70$ euro.

Let op: 9% van € 32,70 is ongeveer € 2,94. Ook bij het lage tarief geeft de klassieke fout een verkeerd bedrag.
:::

:::tip Afronden op centen
Bedragen in euro's rond je pas aan het eind af op hele centen. Rond je tussenresultaten al af, dan kunnen er centverschillen ontstaan. Op echte kassabonnen wordt de btw soms per regel en soms over het totaal berekend; daardoor kan het btw-bedrag een cent afwijken van je eigen berekening.
:::

Hetzelfde rekenwerk geldt in elk land, alleen het tarief verschilt. In Frankrijk is het algemene tarief 20%, in Denemarken 25%.

{{ exercises: 09-036, 09-037, 09-038, 09-024 }}
