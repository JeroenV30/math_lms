# Volgorde en afstand

In module 1 heb je de getallenlijn leren kennen: een rechte lijn met een nulpunt, waarop elk getal een vaste plek heeft en de getallen naar rechts toenemen. Tot nu toe begon die lijn bij nul. In deze les trek je hem door naar links. Daarmee krijg je een plek voor elk negatief getal, en een manier om te zien welk getal groter is, hoe ver twee getallen uit elkaar liggen en wat "tegengesteld" betekent.

## 1. De getallenlijn naar links doortrekken

Kies op een rechte lijn een punt als **nulpunt** en een vaste stapgrootte als **eenheid**. Rechts van nul zet je, zoals je gewend bent, $1, 2, 3, \dots$ Links van nul zet je met dezelfde stapgrootte $-1, -2, -3, \dots$

![Getallenlijn van −6 tot 6 met tegengestelden](/images/diagrams/m13-getallenlijn-tegengestelden.svg "De getallen −4 en 4 liggen allebei vier eenheden van nul, aan verschillende kanten. Ze zijn elkaars tegengestelde.")

Twee afspraken bepalen alles wat volgt:

- **Rechts is groter.** Van twee getallen is het getal dat verder naar rechts ligt het grootste.
- **De afstand tussen twee streepjes is overal even groot.** Van $-5$ naar $-4$ is één eenheid, net als van 4 naar 5 en van $-1$ naar 0.

Ook breuken en kommagetallen krijgen een plek: $-2{,}5$ ligt precies midden tussen $-3$ en $-2$, en $-\tfrac{1}{4}$ ligt een kwart eenheid links van nul.

{{ widget: number-line min=-10 max=10 value=-4 }}

Sleep het punt over de getallenlijn. Kijk wat er gebeurt met het getal als je naar links beweegt: het wordt **kleiner**, ook als de cijfers na het minteken groter worden. Van $-3$ naar $-7$ ga je naar links; $-7$ is dus kleiner dan $-3$.

## 2. Ordenen: groter, kleiner en de valkuil

Om getallen te vergelijken, gebruik je de tekens $<$ ("is kleiner dan") en $>$ ("is groter dan"). De punt van het teken wijst naar het kleinste getal.

$$
-7 < -3 \qquad 2 > -10 \qquad -0{,}5 > -1
$$

:::warning Valkuil: −7 is níet groter dan −3
Het is verleidelijk om te denken: "7 is meer dan 3, dus $-7$ is meer dan $-3$." Maar bij negatieve getallen geeft het getal na het minteken aan hoe ver je **onder nul** zit. Wie 7 euro schuld heeft, is armer dan wie 3 euro schuld heeft. Bij $-7$ °C is het kouder dan bij $-3$ °C. Dus:

$$
-7 < -3
$$

Bij negatieve getallen geldt: **hoe verder van nul, hoe kleiner.**
:::

Een handige manier om dit te onthouden is een **verticale getallenlijn**: een thermometer. Hoger op de schaal is warmer, en warmer is groter.

![Thermometer als verticale getallenlijn](/images/diagrams/m13-thermometer.svg "Een thermometer is een verticale getallenlijn. −3 °C staat hoger dan −7 °C, dus −3 > −7.")

:::example Uitgewerkt voorbeeld: vijf getallen ordenen
Zet de getallen $3$, $-5$, $0$, $-1{,}5$ en $-8$ op volgorde van klein naar groot.

1. **Splits naar teken.** Negatief: $-5$, $-1{,}5$, $-8$. Nul: $0$. Positief: $3$.
2. **Elk negatief getal is kleiner dan nul, en nul is kleiner dan elk positief getal.** De negatieve getallen komen dus vooraan, dan 0, dan 3.
3. **Orden de negatieve getallen.** Hoe verder van nul, hoe kleiner: $-8$ is het verst weg, dan $-5$, dan $-1{,}5$.
4. **Resultaat:**

$$
-8 < -5 < -1{,}5 < 0 < 3
$$

Controle: teken de vijf punten op een getallenlijn en lees van links naar rechts.
:::

{{ exercise: 13-003 }}

## 3. Tegengestelden

Zoek op de getallenlijn de punten $-4$ en $4$. Ze liggen allebei vier eenheden van nul, maar aan verschillende kanten. Je krijgt het ene uit het andere door de getallenlijn in nul te **spiegelen**.

:::definition Tegengestelde
De **tegengestelde** van een getal $a$ is het getal $-a$ dat even ver van nul ligt, aan de andere kant. Een getal en zijn tegengestelde tellen op tot nul:

$$
a + (-a) = 0
$$

De tegengestelde van 4 is $-4$. De tegengestelde van $-4$ is 4. De tegengestelde van 0 is 0 zelf.
:::

Spiegel je twee keer, dan ben je terug waar je begon. Dat geeft een regel die je in deze module vaak gebruikt:

$$
-(-a) = a, \qquad \text{bijvoorbeeld} \qquad -(-4) = 4
$$

Dit is geen "trucje met twee mintekens", maar een direct gevolg van de definitie: de tegengestelde van $-4$ is het getal dat bij $-4$ opgeteld nul geeft. Dat getal is 4.

{{ exercise: 13-004 }}

## 4. Absolute waarde: de afstand tot nul

Soms interesseert het teken je niet, alleen de grootte. Een duiker op 30 meter onder water en een vogel op 30 meter boven water bevinden zich allebei 30 meter van het wateroppervlak. Voor die afstand heeft de wiskunde een apart begrip.

:::definition Absolute waarde
De **absolute waarde** van een getal $a$ is de afstand van $a$ tot nul op de getallenlijn. Je schrijft $|a|$, met twee verticale strepen.

$$
|-4| = 4, \qquad |4| = 4, \qquad |0| = 0, \qquad |-2{,}5| = 2{,}5
$$

Omdat een afstand nooit negatief is, is $|a|$ altijd **nul of positief**.
:::

Het getal binnen de strepen mag negatief zijn; de uitkomst nooit. Voor een positief getal of nul verandert de absolute waarde niets. Voor een negatief getal neem je de tegengestelde.

:::warning De absolute waarde is geen "minteken weghalen" bij letters
Bij een getal als $-7$ kun je de absolute waarde vinden door het minteken weg te laten: $|-7| = 7$. Maar bij een letter werkt dat niet altijd. Als $a = -3$, dan is $|a| = 3 = -a$. De absolute waarde is "de afstand tot nul", niet "het minteken wissen".
:::

Met de absolute waarde kun je ook de valkuil van daarnet scherper formuleren: van twee negatieve getallen is het getal met de **grootste** absolute waarde het **kleinste** getal. $|-7| > |-3|$, maar $-7 < -3$.

{{ exercise: 13-005 }}

## 5. De afstand tussen twee getallen

Hoe ver liggen $-3$ en $5$ uit elkaar op de getallenlijn? Tel de stappen: van $-3$ naar 0 zijn drie stappen, van 0 naar 5 nog vijf. Samen acht stappen.

Hoe ver liggen $-8$ en $-2$ uit elkaar? Nu ligt nul er niet tussen. Van $-8$ naar $-2$ tel je zes stappen naar rechts.

Je kunt dat tellen vervangen door een berekening. De afstand is het verschil tussen het grootste en het kleinste getal:

$$
5 - (-3) = 8 \qquad\text{en}\qquad -2 - (-8) = 6
$$

Hoe je met zulke aftrekkingen rekent, zie je in de volgende les. Wil je je geen zorgen maken over welk getal het grootste is, dan neem je de absolute waarde van het verschil: dan maakt de volgorde niet uit.

:::formula Afstand tussen twee getallen
De afstand tussen $a$ en $b$ op de getallenlijn is

$$
|a - b| = |b - a|
$$
:::

:::example Uitgewerkt voorbeeld: hoogteverschil
Een vliegtuig vliegt op 900 m boven zeeniveau. Recht eronder zwemt een onderzeeboot op 150 m onder zeeniveau. Hoe groot is de verticale afstand?

1. **Kies een nulpunt en een richting.** Zeeniveau is 0, omhoog is positief. Het vliegtuig is op $900$, de onderzeeboot op $-150$.
2. **Neem het verschil.** $900 - (-150)$.
3. **Denk aan de getallenlijn.** Van $-150$ naar 0 is 150 m, van 0 naar 900 nog 900 m. Samen 1050 m.
4. **Antwoord:** de afstand is 1050 m.

Let op: wie $900 - 150 = 750$ rekent, berekent de afstand tussen 900 m **boven** en 150 m **boven** zeeniveau. Het teken bepaalt aan welke kant van nul je staat.
:::

Het nulpunt is een keuze. Als je bij het vorige voorbeeld de zeebodem op 400 m diepte als nulpunt zou nemen, krijgt het vliegtuig de hoogte 1300 en de onderzeeboot 250. Beide coördinaten veranderen, maar de afstand niet: $1300 - 250 = 1050$. **Posities hangen af van het gekozen nulpunt, afstanden niet.**

{{ exercises: 13-006, 13-007, 13-032 }}
