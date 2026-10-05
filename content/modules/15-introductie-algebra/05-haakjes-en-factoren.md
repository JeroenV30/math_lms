# Haakjes wegwerken en buiten haakjes brengen

Haakjes groeperen. In $3(x + 4)$ zeggen ze: tel eerst $x$ en 4 op, en vermenigvuldig dat geheel met 3. Zolang $x$ onbekend is, kun je die optelling niet uitvoeren. Je kunt de expressie wel **herschrijven** zonder haakjes, zodat je haar met andere termen kunt samennemen. En omgekeerd kun je een som soms als product schrijven, wat in latere modules het oplossen van vergelijkingen enorm vereenvoudigt. Beide richtingen steunen op één eigenschap die je al sinds module 4 kent.

## 1. De distributieve eigenschap, nu met letters

In module 4 rekende je $7 \times 23$ uit door 23 te splitsen: $7 \times 20 + 7 \times 3 = 140 + 21 = 161$. Dat werkt omdat vermenigvuldigen "verdeelt" over optellen:

:::theory De distributieve eigenschap
Voor alle getallen $a$, $b$ en $c$ geldt

$$
a(b + c) = ab + ac \qquad\text{en}\qquad a(b - c) = ab - ac.
$$

De factor vóór de haakjes vermenigvuldigt **elke** term binnen de haakjes.
:::

Met een letter binnen de haakjes verandert er niets aan het principe:

$$
3(x + 4) = 3 \cdot x + 3 \cdot 4 = 3x + 12.
$$

Een beeld helpt. Een rechthoek met hoogte 3 en breedte $x + 4$ kun je in twee stukken knippen: een stuk van 3 bij $x$ en een stuk van 3 bij 4. De totale oppervlakte is $3(x + 4)$, de som van de stukken is $3x + 12$. Het is dezelfde rechthoek.

![Rechthoekmodel](/images/diagrams/m15-oppervlaktemodel.svg "Links: 3(x + 4) als één rechthoek, of als twee delen 3x en 12. Rechts: (x + 3)(x + 2) als vier deelrechthoeken.")

:::example Uitgewerkt voorbeeld: een letter als factor
Werk uit: $x(x + 5)$.

De factor $x$ vermenigvuldigt beide termen:

$$
x(x + 5) = x \cdot x + x \cdot 5 = x^2 + 5x.
$$

En $2a(3a - 4)$:

$$
2a \cdot 3a - 2a \cdot 4 = 6a^2 - 8a.
$$

Bij het eerste product $2a \cdot 3a$ vermenigvuldig je getallen met getallen en letters met letters, zoals in les 4: $6a^2$.

Controle met $a = 5$: $2a(3a - 4) = 10 \cdot 11 = 110$, en $6 \cdot 25 - 40 = 110$.
:::

{{ exercise: 15-019 }}

## 2. Foutenanalyse: $2(x + 3)$ is geen $2x + 3$

De klassieke fout bij haakjes wegwerken is dat de factor alleen de eerste term krijgt: $2(x + 3) = 2x + 3$. Vul $x = 10$ in: $2(10 + 3) = 26$, terwijl $2 \cdot 10 + 3 = 23$. Het verschil is precies 3: de tweede helft van "twee keer drie" ontbreekt.

In het rechthoekmodel is de fout direct te zien. Een rechthoek van 2 bij $(x + 3)$ bestaat uit **twee** delen: 2 bij $x$ én 2 bij 3. Wie $2x + 3$ schrijft, neemt van het tweede deel maar een strook van 1 bij 3.

:::tip Pijltjes tekenen
Teken bij het wegwerken, zeker in het begin, een boogje van de factor naar **elke** term binnen de haakjes. Zoveel boogjes, zoveel producten. Na een paar weken doe je dat in gedachten.
:::

## 3. Mintekens

Bij een negatieve factor vermenigvuldig je elke term met dat negatieve getal, met de tekenregels uit module 13: plus maal min is min, min maal min is plus.

![Pijlen bij negatieve factoren](/images/diagrams/m15-distributie-pijlen.svg "Een negatieve factor vermenigvuldigt elke term, inclusief zijn teken. Een los minteken vóór de haakjes is factor −1.")

:::example Uitgewerkt voorbeeld: $-2(x - 5)$
Zie de binnenkant als $x + (-5)$. De factor $-2$ gaat naar beide termen:

$$
(-2) \cdot x + (-2) \cdot (-5) = -2x + 10.
$$

Controle met $x = 7$: $-2(7 - 5) = -2 \cdot 2 = -4$, en $-14 + 10 = -4$.
:::

Een speciaal geval is een **minteken vóór de haakjes zonder getal**, zoals in $-(x - 4)$. Dat minteken betekent "het tegengestelde van". En het tegengestelde nemen is hetzelfde als vermenigvuldigen met $-1$. Dus

$$
-(x - 4) = (-1) \cdot x + (-1) \cdot (-4) = -x + 4.
$$

Elke term binnen de haakjes krijgt het **tegengestelde teken**.

:::warning Foutenanalyse: $-(x - 4)$ is geen $-x - 4$
Wie $-x - 4$ schrijft, heeft het minteken alleen op de eerste term toegepast. Controle met $x = 10$: $-(10 - 4) = -6$, maar $-10 - 4 = -14$. Het tegengestelde van "$x$ min 4" is "min $x$ plus 4": als je 4 minder had, heb je na het omdraaien van het teken 4 méér.
:::

:::example Uitgewerkt voorbeeld: aftrekken van een expressie tussen haakjes
Vereenvoudig $5 - (2x - 3)$.

- Het minteken vóór de haakjes keert beide tekens om: $-(2x - 3) = -2x + 3$.
- Dus $5 - (2x - 3) = 5 - 2x + 3$.
- Neem de constanten samen: $5 + 3 = 8$. Resultaat: $8 - 2x$ (of, in de gebruikelijke volgorde, $-2x + 8$).

Controle met $x = 4$: $5 - (8 - 3) = 0$, en $8 - 8 = 0$.
:::

{{ exercises: 15-020, 15-037, 15-021 }}

Bij langere expressies werk je eerst alle haakjes weg en neem je daarna de gelijksoortige termen samen.

:::example Uitgewerkt voorbeeld: twee haakjesparen
Vereenvoudig $2(x + 3) - 3(x - 1)$.

Lees het tweede deel als $+(-3)(x - 1)$: de factor is $-3$, inclusief het minteken.

- $2(x + 3) = 2x + 6$.
- $-3(x - 1) = -3x + 3$. (Let op: $(-3) \cdot (-1) = +3$.)
- Samen: $2x + 6 - 3x + 3 = -x + 9$.

Controle met $x = 5$: $2 \cdot 8 - 3 \cdot 4 = 16 - 12 = 4$, en $-5 + 9 = 4$.
:::

{{ exercises: 15-025, 15-038 }}

## 4. Twee haakjesparen vermenigvuldigen

Wat als beide factoren een som zijn, zoals in $(x + 2)(x + 3)$? Pas de distributieve eigenschap twee keer toe. Zie eerst $(x + 2)$ als één geheel en verdeel het over $x$ en 3:

$$
(x + 2)(x + 3) = (x + 2) \cdot x + (x + 2) \cdot 3.
$$

Werk daarna beide stukken uit:

$$
= x^2 + 2x + 3x + 6 = x^2 + 5x + 6.
$$

Het resultaat: **elke term uit het eerste paar haakjes wordt vermenigvuldigd met elke term uit het tweede.** Twee termen maal twee termen geeft vier producten. In het rechthoekmodel (rechts in de figuur hierboven) zijn dat de vier deelrechthoeken: $x^2$, $3x$, $2x$ en $6$. De twee middelste zijn gelijksoortig en neem je samen.

Het rechthoekmodel is je misschien bekend uit module 4, waar je er grote vermenigvuldigingen mee splitste. Dat is geen toeval. Neem $x = 10$: dan is $(x + 3)(x + 4)$ gewoon $13 \times 14$. In de widget zie je hoe de rechthoek van 13 bij 14 in vier stukken uiteenvalt: $10 \times 10$, $10 \times 4$, $3 \times 10$ en $3 \times 4$.

{{ widget: area-model a=13 b=14 }}

Met letters zijn dat de vier producten $x^2$, $4x$, $3x$ en $12$, samen $x^2 + 7x + 12$. Bij $x = 10$: $100 + 70 + 12 = 182 = 13 \times 14$. De algebra is de getallenwerkwijze uit module 4, alleen met een tiental dat nu elke waarde mag hebben.

:::example Uitgewerkt voorbeeld: met mintekens
Werk uit: $(x - 4)(x + 1)$.

De vier producten, elk met teken:

- $x \cdot x = x^2$
- $x \cdot 1 = x$
- $(-4) \cdot x = -4x$
- $(-4) \cdot 1 = -4$

Samen: $x^2 + x - 4x - 4 = x^2 - 3x - 4$.

Controle met $x = 6$: $(2)(7) = 14$, en $36 - 18 - 4 = 14$.
:::

In module 4 zag je een merkwaardig patroon: $19 \times 21 = 399$, één minder dan $20 \times 20$. En $6 \times 8 = 48$, één minder dan $7 \times 7$. Daar werd beloofd dat je dit in de algebra als formule zou schrijven. Dat kan nu. Noem het middelste getal $a$; de buren zijn $a - 1$ en $a + 1$:

$$
(a - 1)(a + 1) = a^2 + a - a - 1 = a^2 - 1.
$$

De twee middelste producten heffen elkaar op. Voor **elk** getal $a$ is het product van zijn twee buren één minder dan zijn kwadraat. Dat is geen verzameling voorbeelden meer, maar een bewezen regel.

{{ exercises: 15-022, 15-039 }}

:::tip Kwadraat van een som
Een bijzonder geval van twee haakjesparen is $(a + b)^2 = (a + b)(a + b) = a^2 + ab + ba + b^2 = a^2 + 2ab + b^2$. In module 14 zag je met een getallenvoorbeeld al dat $(a + b)^2$ niet gelijk is aan $a^2 + b^2$: de twee rechthoeken $ab$ ontbreken dan. Hier heb je het bewijs voor alle getallen tegelijk.
:::

## 5. Buiten haakjes brengen

De distributieve eigenschap kun je ook van rechts naar links lezen:

$$
ab + ac = a(b + c).
$$

Dat heet een **factor buiten haakjes brengen** (of halen). Je zoekt een factor die in **elke** term zit, schrijft die vóór de haakjes, en zet tussen de haakjes wat er van elke term overblijft als je hem door die factor deelt.

:::example Uitgewerkt voorbeeld: een getal buiten haakjes
Schrijf $6x + 9$ als product.

- Beide termen zijn deelbaar door 3: $6x = 3 \cdot 2x$ en $9 = 3 \cdot 3$.
- Haal de 3 naar voren: $6x + 9 = 3(2x + 3)$.
- Controle door terug uit te werken: $3 \cdot 2x + 3 \cdot 3 = 6x + 9$. Klopt.
:::

:::example Uitgewerkt voorbeeld: de grootste gemeenschappelijke factor
Schrijf $12a - 18$ als product.

Zowel 2, 3 als 6 zijn gemeenschappelijke delers. Je zou $2(6a - 9)$ of $3(4a - 6)$ kunnen schrijven; dat is niet fout, maar binnen de haakjes zit dan nog een gemeenschappelijke factor. Gebruikelijk is de **grootste** gemeenschappelijke factor (de ggd uit module 5) te nemen, hier 6:

$$
12a - 18 = 6(2a - 3).
$$

Controle: $6 \cdot 2a - 6 \cdot 3 = 12a - 18$.
:::

:::example Uitgewerkt voorbeeld: een letter buiten haakjes
Schrijf $4x^2 + 6x$ als product.

- Getallen: 4 en 6 hebben ggd 2.
- Letters: $x^2 = x \cdot x$ en $x$ hebben samen één factor $x$.
- Gemeenschappelijke factor: $2x$.
- Deel elke term door $2x$: $4x^2 : 2x = 2x$ en $6x : 2x = 3$.

Resultaat: $4x^2 + 6x = 2x(2x + 3)$. Controle: $2x \cdot 2x + 2x \cdot 3 = 4x^2 + 6x$.
:::

:::warning Vergeet de 1 niet
Bij $x^2 + x$ is de gemeenschappelijke factor $x$, en wat blijft er van de tweede term over? $x : x = 1$. Dus $x^2 + x = x(x + 1)$, niet $x(x)$ of $x \cdot x$. Een term die volledig "opgaat" in de buitengehaalde factor laat een 1 achter.
:::

{{ exercises: 15-023, 15-024 }}

## 6. Welke vorm is handig?

Uitgewerkt en ontbonden zijn twee schrijfwijzen van dezelfde expressie. Geen van beide is "de goede"; het hangt af van wat je ermee wilt.

- **Uitgewerkt** (zonder haakjes) is handig om termen samen te nemen en om expressies met elkaar te vergelijken: $2(x + 3) + 4(x - 1)$ is in uitgewerkte vorm gewoon $6x + 2$.
- **Ontbonden** (als product) is handig als je iets wilt zeggen over deelbaarheid of over nulwaarden. Uit $3n + 3 = 3(n + 1)$ zie je direct dat de som van drie opeenvolgende getallen een drievoud is (zie de introductie). En uit $x(x + 1)$ zie je meteen dat de expressie nul is bij $x = 0$ en bij $x = -1$; in module 21 wordt dat een hoofdtechniek.

Wie in beide richtingen vlot kan omzetten, kan steeds de vorm kiezen die bij de vraag past.
