# Kwadraat, kubus en macht

In de introductie zag je dat een kwadraat een vierkant is en een derde macht een kubus. In deze les maak je dat precies. Je leert wat een macht is, hoe je grondtal en exponent herkent, wat er gebeurt met negatieve getallen en breuken als grondtal, en waar machten staan in de rekenvolgorde. Het belangrijkste idee is steeds hetzelfde: **een macht is herhaald vermenigvuldigen**, en wie twijfelt, schrijft de factoren gewoon uit.

## 1. Het kwadraat als oppervlakte

Teken een vierkant van 3 bij 3 vakjes. Er passen 3 rijen van 3 vakjes in, dus $3 \times 3 = 9$ vakjes. Bij een vierkant van 5 bij 5 zijn het $5 \times 5 = 25$ vakjes. Steeds vermenigvuldig je de zijde **met zichzelf**.

![Een vierkant van 3 bij 3 en een kubus van 3 bij 3 bij 3](/images/diagrams/m14-kwadraat-kubus.svg "Links: 3² telt de vakjes van een vierkant met zijde 3. Rechts: 3³ telt de blokjes van een kubus met ribbe 3.")

:::definition Kwadraat
Het **kwadraat** van een getal $a$ is het product van dat getal met zichzelf:

$$
a^2 = a \cdot a
$$

Je zegt "$a$ kwadraat" of "$a$ tot de tweede (macht)". Meetkundig is $a^2$ de oppervlakte van een vierkant met zijde $a$.
:::

De kwadraten van de getallen 1 tot en met 15 kom je in de rest van de cursus zo vaak tegen dat het loont ze te kennen:

| $n$ | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15 |
|---|---|---|---|---|---|---|---|---|---|---|---|---|---|---|---|
| $n^2$ | 1 | 4 | 9 | 16 | 25 | 36 | 49 | 64 | 81 | 100 | 121 | 144 | 169 | 196 | 225 |

Kijk naar de verschillen tussen opeenvolgende kwadraten: $4-1=3$, $9-4=5$, $16-9=7$, $25-16=9$. Het zijn de oneven getallen. Dat is geen toeval: om van een vierkant van $n$ bij $n$ naar een vierkant van $(n+1)$ bij $(n+1)$ te gaan, leg je er een strook van $n$ vakjes langs de ene kant, een strook van $n$ langs de andere kant en één vakje in de hoek. Dat zijn $2n + 1$ vakjes, en $2n+1$ is altijd oneven. De kwadraten liggen daardoor steeds verder uit elkaar; dat speelt een rol als je straks wortels gaat schatten.

In de widget hieronder kun je bij een rechthoek de zijden gelijk maken. De oppervlakte die je dan ziet, is een kwadraat.

{{ widget: shape-area shape=rectangle }}

:::warning Een kwadraat is geen verdubbeling
$3^2$ is **niet** $3 \cdot 2 = 6$. Het kleine cijfer 2 betekent niet "keer twee" maar "twee factoren": $3^2 = 3 \cdot 3 = 9$. De verwarring is begrijpelijk, want bij 2 zelf vallen ze samen: $2^2 = 2 \cdot 2 = 4$ en ook $2 \cdot 2 = 4$. Bij elk ander getal gaat het mis. Controleer daarom met een getal als 3 of 5, nooit met 2.
:::

## 2. De kubus als inhoud

Stapel nu drie lagen van 3 bij 3 blokjes op elkaar. Je krijgt een kubus met ribbe 3, en die bevat $3 \times 3 \times 3 = 27$ blokjes. De inhoud van een kubus met ribbe $a$ is dus $a \cdot a \cdot a$, kort $a^3$. Je zegt "$a$ tot de derde" of, naar de vorm, "$a$ kubiek".

Daarom staan er bij oppervlakten en inhouden kleine cijfers achter de eenheid: cm² betekent "centimeter maal centimeter" (een vierkantje van 1 bij 1 cm), cm³ "centimeter maal centimeter maal centimeter" (een kubusje van 1 bij 1 bij 1 cm). In module 6 gebruikte je dat al bij het omrekenen van liters: $1 \text{ dm}^3 = 10 \cdot 10 \cdot 10 \text{ cm}^3 = 1000 \text{ cm}^3$.

:::example Uitgewerkt voorbeeld: een kubusvormige bak
Een kubusvormige waterbak heeft een ribbe van 4 dm. Hoeveel liter water past erin?

1. Inhoud $= 4^3 = 4 \cdot 4 \cdot 4$.
2. Reken in stappen: $4 \cdot 4 = 16$, en $16 \cdot 4 = 64$.
3. De inhoud is $64$ dm³, en $1$ dm³ $= 1$ liter. Er past dus 64 liter in.

Let op: $4^3$ is niet $4 \cdot 3 = 12$, en ook niet $3^4 = 81$. Grondtal en exponent zijn niet uitwisselbaar.
:::

{{ exercise: 14-032 }}

## 3. Machten in het algemeen

Er is geen reden om bij drie factoren te stoppen. Vier factoren 3 schrijf je als $3^4$, tien factoren 2 als $2^{10}$. In vier dimensies is er geen tastbare "hyperkubus" meer om naar te kijken, maar de rekenregel is dezelfde.

:::definition Macht, grondtal en exponent
Voor een getal $a$ en een positief geheel getal $n$ is

$$
a^n = \underbrace{a \cdot a \cdot \ldots \cdot a}_{n \text{ factoren}}
$$

- $a$ heet het **grondtal**: het getal dat herhaald wordt vermenigvuldigd.
- $n$ heet de **exponent** (of machtsaanwijzer): het aantal factoren.
- $a^n$ als geheel heet een **macht**. Je spreekt het uit als "$a$ tot de $n$-de (macht)".

Bij $n = 1$ is er één factor: $a^1 = a$.
:::

Vergelijk dit met vermenigvuldigen als herhaald optellen, uit module 4:

$$
5 \cdot 2 = 2 + 2 + 2 + 2 + 2 = 10 \qquad\text{maar}\qquad 2^5 = 2 \cdot 2 \cdot 2 \cdot 2 \cdot 2 = 32
$$

Zoals vermenigvuldigen een verkorte notatie is voor herhaald optellen, is machtsverheffen een verkorte notatie voor herhaald vermenigvuldigen. Het is als het ware de volgende verdieping van hetzelfde gebouw.

:::example Uitgewerkt voorbeeld: $2^5$ en $5^2$
Zijn $2^5$ en $5^2$ gelijk?

1. $2^5 = 2 \cdot 2 \cdot 2 \cdot 2 \cdot 2$. Reken van links naar rechts: $2, 4, 8, 16, 32$. Dus $2^5 = 32$.
2. $5^2 = 5 \cdot 5 = 25$.
3. $32 \neq 25$.

Conclusie: bij machtsverheffen mag je grondtal en exponent **niet** omwisselen, anders dan bij optellen ($2+5 = 5+2$) en vermenigvuldigen ($2 \cdot 5 = 5 \cdot 2$). Er is één bekend geval waarin het toevallig wel uitkomt: $2^4 = 16 = 4^2$.
:::

Hoe snel machten groeien, zie je het best in een tabel. De widget hieronder zet de machten van een grondtal onder elkaar, met een balk die de grootte laat zien. Begin met grondtal 2 en kijk hoe elke regel het dubbele is van de vorige. Zet daarna het grondtal op 3 en op 10.

{{ widget: powers base=2 max=10 }}

Twee dingen vallen op. Ten eerste ontstaat elke volgende macht door de vorige **met het grondtal te vermenigvuldigen**: $2^6 = 2^5 \cdot 2 = 64$. Je hoeft dus nooit van voren af aan te beginnen. Ten tweede zie je bovenaan de tabel een regel $2^0 = 1$ staan, met de aantekening "afspraak". Waarom dat een verstandige afspraak is, en geen willekeur, zie je in de volgende les.

:::tip Machten van 2 om te onthouden
$2^1 = 2$, $2^2 = 4$, $2^3 = 8$, $2^4 = 16$, $2^5 = 32$, $2^6 = 64$, $2^7 = 128$, $2^8 = 256$, $2^9 = 512$, $2^{10} = 1024$.

Dat $2^{10}$ bijna 1000 is, is handig bij schatten: $2^{20} = 2^{10} \cdot 2^{10} \approx 1000 \cdot 1000 = 1$ miljoen. Daarom heet in de informatica 1024 bytes vaak (onnauwkeurig) een kilobyte.
:::

{{ exercises: 14-003, 14-004 }}

## 4. Negatieve grondtallen en de rol van haakjes

Een macht kan ook een negatief grondtal hebben. Je gebruikt dan de tekenregels voor vermenigvuldigen uit module 13: min maal min is plus, min maal plus is min.

:::example Uitgewerkt voorbeeld: machten van $-2$
Bereken $(-2)^1$, $(-2)^2$, $(-2)^3$ en $(-2)^4$.

1. $(-2)^1 = -2$.
2. $(-2)^2 = (-2) \cdot (-2) = 4$. Twee mintekens heffen elkaar op.
3. $(-2)^3 = (-2) \cdot (-2) \cdot (-2) = 4 \cdot (-2) = -8$.
4. $(-2)^4 = (-8) \cdot (-2) = 16$.

Het teken wisselt bij elke stap. De **grootte** is steeds $2^n$; het **teken** hangt af van het aantal mintekens. Een even aantal factoren $-2$ geeft een positief resultaat, een oneven aantal een negatief.
:::

Algemeen: als $a$ positief is, dan is $(-a)^n = a^n$ bij een even exponent en $(-a)^n = -a^n$ bij een oneven exponent. Een even macht van welk getal ook is dus nooit negatief. Dat feit wordt in les 5 belangrijk: er is geen reëel getal waarvan het kwadraat $-9$ is.

Nu het venijnige punt. Wat betekent $-2^2$, zonder haakjes?

:::warning $(-2)^2$ is niet hetzelfde als $-2^2$
De afspraak is: een exponent hoort alleen bij het getal of de uitdrukking **direct** links ervan.

- In $(-2)^2$ staat direct links van de exponent een haakje. Het hele getal $-2$ is het grondtal: $(-2)^2 = (-2)\cdot(-2) = 4$.
- In $-2^2$ staat direct links van de exponent de 2. Alleen de 2 wordt gekwadrateerd, het minteken komt er pas daarna voor: $-2^2 = -(2^2) = -(4) = -4$.

Lees $-2^2$ dus als "het tegengestelde van twee kwadraat". Dit is precies de afspraak die je rekenmachine en elke programmeertaal met een machtsoperator gebruiken. Twijfel je, zet dan haakjes.
:::

Het minteken voor $-2^2$ gedraagt zich als "$-1 \cdot$": $-2^2 = -1 \cdot 2^2$. En omdat machtsverheffen vóór vermenigvuldigen gaat (zie paragraaf 6), wordt eerst gekwadrateerd.

{{ exercises: 14-005, 14-006, 14-031 }}

## 5. Breuken en kommagetallen als grondtal

Een macht van een breuk volgt dezelfde definitie. Omdat je breuken vermenigvuldigt door tellers met tellers en noemers met noemers te vermenigvuldigen (module 7), geldt:

$$
\left(\frac{2}{3}\right)^3 = \frac{2}{3} \cdot \frac{2}{3} \cdot \frac{2}{3} = \frac{2 \cdot 2 \cdot 2}{3 \cdot 3 \cdot 3} = \frac{2^3}{3^3} = \frac{8}{27}
$$

Je verheft dus teller én noemer tot de macht. Ook hier zijn de haakjes van belang: $\frac{2^3}{3}$ betekent dat alleen de teller tot de derde gaat, en dat is $\frac{8}{3}$.

Bij kommagetallen werkt het net zo, maar het aantal decimalen telt mee (module 8): bij vermenigvuldigen tel je de decimalen van de factoren op.

:::example Uitgewerkt voorbeeld: $0{,}5^3$ en $0{,}2^3$
1. $0{,}5^3 = 0{,}5 \cdot 0{,}5 \cdot 0{,}5$. Eerst $0{,}5 \cdot 0{,}5 = 0{,}25$, dan $0{,}25 \cdot 0{,}5 = 0{,}125$. Controle met breuken: $\left(\tfrac12\right)^3 = \tfrac18 = 0{,}125$.
2. $0{,}2^3$: reken met hele getallen $2^3 = 8$. Er zijn drie factoren met elk één decimaal, dus het antwoord heeft drie decimalen: $0{,}008$.

Valkuil: wie $0{,}2^3$ uitrekent als $0{,}2 \cdot 3 = 0{,}6$, verwart weer machtsverheffen met vermenigvuldigen. En wie $0{,}08$ antwoordt, is een decimaal kwijtgeraakt.
:::

Merk op dat machten van een getal tussen 0 en 1 **kleiner** worden naarmate de exponent groeit: $0{,}5$, $0{,}25$, $0{,}125$, $0{,}0625$, … Elke keer neem je de helft van de vorige. Machten van een getal groter dan 1 worden juist groter. Het getal 1 zelf blijft altijd 1: $1^n = 1$.

{{ exercise: 14-007 }}

## 6. Machten in de rekenvolgorde

In module 13 leerde je de rekenvolgorde: haakjes eerst, dan vermenigvuldigen en delen, dan optellen en aftrekken. Machten krijgen daarin een eigen plaats, direct na de haakjes.

:::definition Volgorde van bewerkingen
1. Haakjes (van binnen naar buiten).
2. Machten en wortels.
3. Vermenigvuldigen en delen, van links naar rechts.
4. Optellen en aftrekken, van links naar rechts.
:::

De reden is dezelfde als bij "vermenigvuldigen gaat voor optellen": de sterkere bewerking bindt sterker. In $2 \cdot 3^2$ hoort de exponent bij de 3, niet bij $2 \cdot 3$. Je rekent dus $2 \cdot 9 = 18$, en niet $6^2 = 36$. Wil je dat de exponent bij het hele product hoort, dan schrijf je haakjes: $(2 \cdot 3)^2 = 36$.

:::example Uitgewerkt voorbeeld: een langere uitdrukking
Bereken $5 + 2 \cdot 4^2 - (1+2)^3$.

1. **Haakjes:** $1 + 2 = 3$. De uitdrukking wordt $5 + 2 \cdot 4^2 - 3^3$.
2. **Machten:** $4^2 = 16$ en $3^3 = 27$. Nu staat er $5 + 2 \cdot 16 - 27$.
3. **Vermenigvuldigen:** $2 \cdot 16 = 32$. Nu: $5 + 32 - 27$.
4. **Optellen en aftrekken, van links naar rechts:** $5 + 32 = 37$, $37 - 27 = 10$.

Het antwoord is $10$. Typische fouten: $2 \cdot 4$ eerst nemen en dan kwadrateren ($8^2 = 64$ in plaats van $2 \cdot 16 = 32$), of $5 + 2$ eerst optellen.
:::

:::example Uitgewerkt voorbeeld: mintekens en machten
Bereken $-3^2 + (-3)^2$.

1. $-3^2 = -(3^2) = -9$: de exponent hoort alleen bij de 3.
2. $(-3)^2 = 9$: hier is $-3$ het grondtal.
3. $-9 + 9 = 0$.

Wie beide termen als $9$ leest, komt op $18$; wie beide als $-9$ leest, op $-18$.
:::

{{ exercise: 14-033 }}

:::summary Kern van deze les
- $a^n$ is het product van $n$ factoren $a$; $a$ is het grondtal, $n$ de exponent.
- $a^2$ is de oppervlakte van een vierkant met zijde $a$, $a^3$ de inhoud van een kubus met ribbe $a$.
- $3^2 = 9$, niet $6$; en $2^5 \neq 5^2$.
- $(-2)^2 = 4$, maar $-2^2 = -4$: de exponent hoort bij wat er direct voor staat.
- Machten gaan in de rekenvolgorde vóór vermenigvuldigen en na haakjes.
:::
