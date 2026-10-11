# Verdelen, opdelen en de rest

In deze les bouw je het begrip *delen* van onderaf op. Je leert dat één deelsom twee heel verschillende vragen kan beantwoorden, dat elke deling eigenlijk een vermenigvuldiging in omgekeerde richting is, en wat je moet doen als een deling niet opgaat.

## 1. Twee vragen, één bewerking

Bekijk deze twee situaties.

- *Twaalf broden worden eerlijk verdeeld over drie arbeiders. Hoeveel broden krijgt ieder?*
- *Twaalf broden worden verpakt in manden van drie. Hoeveel manden heb je nodig?*

In beide gevallen reken je $12 : 3 = 4$. Toch is de vraag anders.

:::definition Eerlijk verdelen en opdelen
**Eerlijk verdelen**: je weet *hoeveel groepen* er zijn en zoekt *hoe groot* elke groep wordt. "12 broden over 3 personen: hoeveel per persoon?"

**Opdelen** (ook: *hoe vaak past het?*): je weet *hoe groot* een groep is en zoekt *hoeveel groepen* je kunt maken. "12 broden in manden van 3: hoeveel manden?"
:::

![Links worden twaalf broden eerlijk verdeeld over drie personen, rechts worden ze opgedeeld in manden van drie](/images/diagrams/m05-verdelen-opdelen.svg "Eén deling, twee betekenissen: eerlijk verdelen (links) en opdelen (rechts). Eigen diagram.")

Bij eerlijk verdelen deel je uit zoals een kaartspeler: om de beurt één voor jou, één voor jou, één voor jou, tot alles op is. Bij opdelen pak je steeds een vaste hoeveelheid weg en tel je hoe vaak dat lukt. De Sumerische opgave uit de introductie is een opdeelvraag: de graanschuur wordt opgedeeld in rantsoenen van 7 sila, en de vraag is *hoeveel* rantsoenen dat oplevert.

Dat het antwoord in beide gevallen gelijk is, is niet vanzelfsprekend. Het komt door een eigenschap die je in module 4 zag: vermenigvuldigen mag je omdraaien. Drie groepen van vier is evenveel als vier groepen van drie, want $3 \times 4 = 4 \times 3$.

### De namen van de getallen

In $12 : 3 = 4$ heet 12 het **deeltal**, 3 de **deler** en 4 het **quotiënt**. Voor de deling bestaan verschillende tekens. In Nederland schrijf je meestal $12 : 3$. Op rekenmachines en in Engelstalige boeken zie je $12 \div 3$, en in formules gebruik je vaak een breukstreep: $\frac{12}{3}$. Ze betekenen allemaal hetzelfde. Met de breukstreep ga je in module 7 verder.

## 2. Delen is vermenigvuldigen in omgekeerde richting

Wat betekent $56 : 8$ eigenlijk? Je zoekt het getal dat je met 8 moet vermenigvuldigen om 56 te krijgen. Omdat $7 \times 8 = 56$, is $56 : 8 = 7$.

:::theory Delen als omgekeerde van vermenigvuldigen
$$
a : b = q \quad \text{betekent precies hetzelfde als} \quad q \times b = a.
$$
Elke deelsom is dus een vermenigvuldigvraag met een gat erin: $\ldots \times 8 = 56$.
:::

Dit heeft twee praktische gevolgen.

1. **Je kent al heel veel delingen.** Wie de tafels kent, kent ook de bijbehorende delingen. Uit $6 \times 9 = 54$ volgen meteen $54 : 9 = 6$ en $54 : 6 = 9$.
2. **Je kunt elke deling controleren.** Heb je $132 : 12 = 11$ uitgerekend? Reken $11 \times 12 = 132$ na. Klopt de vermenigvuldiging, dan klopt de deling.

De oude Egyptenaren dachten precies zo. In de Rhind-papyrus wordt een deling niet geformuleerd als "deel 56 door 8", maar als een opdracht om met 8 te rekenen tot je 56 bereikt. In het historisch intermezzo zie je hoe ze dat met verdubbelen deden.

:::example Een deling als vermenigvuldigvraag
**Vraag.** Bereken $72 : 9$.

**Denkstap 1.** Herschrijf als vermenigvuldigvraag: $\ldots \times 9 = 72$.

**Denkstap 2.** Loop de tafel van 9 door: $7 \times 9 = 63$, $8 \times 9 = 72$. Raak.

**Antwoord.** $72 : 9 = 8$.

**Controle.** $8 \times 9 = 72$. ✓
:::

{{ exercises: 05-001, 05-002, 05-003 }}

## 3. Delen door nul kan niet

Met de regel "delen is omgekeerd vermenigvuldigen" kun je ook een vraag beantwoorden die veel mensen lastig vinden: wat is $9 : 0$?

Eerst de omgekeerde situatie: $0 : 9$. Dat betekent: welk getal maal 9 geeft 0? Dat is 0, want $0 \times 9 = 0$. Dus $0 : 9 = 0$. Dat past ook bij het verdelen: als er niets te verdelen is, krijgt elk van de negen personen niets.

Nu $9 : 0$. Dat zou betekenen: welk getal maal 0 geeft 9? Maar *elk* getal maal 0 geeft 0, nooit 9. Er bestaat dus geen antwoord. Ook als opdeelvraag loopt het vast: hoe vaak past 0 in 9? Je kunt nul sila wegscheppen zo vaak je wilt, de schuur wordt nooit leeg.

En $0 : 0$? Dan zoek je een getal dat maal 0 gelijk is aan 0. Dat geldt voor elk getal: 5, 17 en een miljoen voldoen allemaal. Een deling hoort één antwoord te hebben, en hier is er geen eenduidig antwoord.

:::warning Delen door nul is niet gedefinieerd
$0 : b = 0$ voor elk getal $b$ dat niet 0 is. Maar $a : 0$ heeft geen betekenis, welk getal $a$ ook is. Daarom eisen wiskundigen in elke formule met een deling dat de deler niet 0 is: $b \neq 0$. Een rekenmachine geeft bij $9 : 0$ een foutmelding. Dat is geen gebrek van de machine, maar de enige eerlijke uitkomst.
:::

{{ exercise: 05-004 }}

## 4. Een eerste blik op verhoudingen

Delen gaat niet altijd over gelijke stukken. Een handelaar die zout tegen graan ruilt, spreekt een **ruilverhouding** af: bijvoorbeeld "voor elke 2 zakken zout krijg ik 5 zakken graan". Je schrijft dat als de verhouding $2 : 5$. Het dubbele punt betekent hier niet dat je echt deelt, maar het idee is verwant: de verhouding vertelt hoe de hoeveelheden zich tot elkaar verhouden, *per groepje*.

Wil de handelaar 8 zakken zout ruilen, dan vraag je eerst: hoeveel groepjes van 2 zakken zout zijn dat? Dat is een opdeelvraag: $8 : 2 = 4$ groepjes. Voor elk groepje krijgt hij 5 zakken graan, dus $4 \times 5 = 20$ zakken graan.

:::example Ongelijk verdelen in een vaste verhouding
**Vraag.** Twee broers erven 90 schapen. Afgesproken is dat de oudste twee keer zoveel krijgt als de jongste: de verhouding is $1 : 2$. Hoeveel schapen krijgt ieder?

**Denkstap 1.** Denk in *delen*. De jongste krijgt 1 deel, de oudste 2 delen. Samen zijn dat $1 + 2 = 3$ gelijke delen.

**Denkstap 2.** Eén deel is $90 : 3 = 30$ schapen.

**Denkstap 3.** De jongste krijgt 1 deel = 30 schapen, de oudste 2 delen = 60 schapen.

**Controle.** $30 + 60 = 90$ ✓ en 60 is inderdaad twee keer 30 ✓.
:::

Het trucje "tel eerst de delen bij elkaar op" is de sleutel tot bijna elke verhoudingsopgave. In module 10 werk je dit veel verder uit. Hier is het genoeg dat je ziet: ook een ongelijke verdeling is uiteindelijk een eerlijke verdeling, maar dan van *delen* in plaats van personen.

:::warning Verhoudingen zijn geen verschillen
Bij een ruil $2 : 5$ krijg je bij 8 zakken zout níét $8 + 3 = 11$ zakken graan. Het verschil tussen 2 en 5 is 3, maar de verhouding gaat over *keer*, niet over *plus*. Bij twee keer zoveel zout hoort twee keer zoveel graan.
:::

{{ exercise: 05-005 }}

## 5. Als het niet opgaat: de rest

Niet elke deling gaat op. Verdeel 47 broden eerlijk over 6 personen. Iedereen krijgt er 7, want $7 \times 6 = 42$. Dan blijven er $47 - 42 = 5$ broden over. Een achtste ronde lukt niet, want daarvoor zijn er 6 nodig.

{{ widget: sharing total=47 groups=6 }}

Je kunt hetzelfde op de getallenlijn zien. Spring vanaf 0 met sprongen van 6. Na 7 sprongen ben je op 42. Een volgende sprong zou op 48 uitkomen, voorbij 47. Het stukje van 42 tot 47 is de rest.

![Getallenlijn van 0 tot 50 met zeven sprongen van 6 tot 42 en een rest van 5 tot 47](/images/diagrams/m05-rest-getallenlijn.svg "Deling met rest: 47 bestaat uit 7 sprongen van 6 en een rest van 5. Eigen diagram.")

:::formula Deling met rest
Voor een geheel getal $a$ (het deeltal) en een positief geheel getal $b$ (de deler) bestaan er precies één quotiënt $q$ en één rest $r$ met
$$
a = q \cdot b + r, \qquad 0 \le r < b.
$$
Voorbeeld: $47 = 7 \cdot 6 + 5$. Je schrijft ook wel: $47 : 6 = 7$ rest $5$.
:::

Let vooral op de voorwaarde $0 \le r < b$. De rest is **altijd kleiner dan de deler**. Is je rest gelijk aan of groter dan de deler, dan had er nog een volledige groep gevormd kunnen worden: je quotiënt is dan te klein. Bij delen door 6 kan de rest dus alleen 0, 1, 2, 3, 4 of 5 zijn. Is de rest 0, dan **gaat de deling op**.

:::example Quotiënt en rest
**Vraag.** Bereken quotiënt en rest van $83 : 9$.

**Denkstap 1.** Zoek het grootste veelvoud van 9 dat niet boven 83 uitkomt. $9 \times 9 = 81$ en $10 \times 9 = 90$. Dat is te veel; het wordt dus 81.

**Denkstap 2.** Het quotiënt is 9. De rest is $83 - 81 = 2$.

**Controle.** $9 \cdot 9 + 2 = 81 + 2 = 83$ ✓, en de rest 2 is kleiner dan de deler 9 ✓.
:::

:::example Terugrekenen: wat was het deeltal?
**Vraag.** Een getal gedeeld door 8 geeft quotiënt 15 en rest 3. Welk getal was het?

**Denkstap.** Vul de formule in: $a = q \cdot b + r = 15 \cdot 8 + 3 = 120 + 3 = 123$.

**Controle.** $123 : 8$: $15 \times 8 = 120$, rest 3 ✓.
:::

{{ exercises: 05-006, 05-007, 05-008, 05-009 }}

## 6. Wat betekent de rest in een context?

In een kale som is "7 rest 5" een prima antwoord. In het echte leven moet je beslissen wat je met de rest *doet*. Er zijn drie typische situaties.

| Situatie | Voorbeeld | Antwoord |
|---|---|---|
| **Naar beneden afronden**: alleen volledige groepen tellen | Hoeveel volle zakken van 6 kg vul je met 47 kg graan? | 7 zakken (5 kg blijft los) |
| **Naar boven afronden**: iedereen of alles moet mee | 47 reizigers, boten voor 6 personen: hoeveel boten? | 8 boten (de laatste is niet vol) |
| **De rest is het antwoord** | 47 broden over 6 personen: hoeveel broden blijven over voor de bakker? | 5 broden |

De berekening is in alle drie de gevallen hetzelfde: $47 = 7 \cdot 6 + 5$. Het verschil zit in de vraag. Lees daarom altijd eerst goed wat er gevraagd wordt, en controleer je antwoord daarna in de situatie zelf.

:::example Busjes huren
**Vraag.** Een groep van 50 personen gaat op excursie. Een busje heeft 8 zitplaatsen. Hoeveel busjes zijn er nodig?

**Denkstap 1.** Dit is een opdeelvraag: hoe vaak past 8 in 50? $6 \times 8 = 48$ en $7 \times 8 = 56$. Dus $50 = 6 \cdot 8 + 2$.

**Denkstap 2.** Zes busjes vervoeren 48 personen. Er blijven 2 personen over, en die moeten ook mee.

**Antwoord.** Er zijn **7** busjes nodig (het zevende busje heeft maar 2 passagiers).

**Controle in de context.** Met 6 busjes staan er 2 mensen op de stoep. Met 7 busjes is er plek voor 56, genoeg voor 50 ✓.
:::

:::warning De klassieke fout
Wie bij de busjes "6" antwoordt, heeft netjes gerekend maar de vraag niet beantwoord. Het quotiënt van een deling is niet automatisch het antwoord op de vraag. Stel jezelf na elke contextopgave de vraag: *is iedereen geholpen, of heb ik alleen volledige groepen geteld?*
:::

{{ exercises: 05-010, 05-011 }}
