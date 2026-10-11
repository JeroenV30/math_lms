# Haakjes, rekenvolgorde en machten

Je kunt nu optellen, aftrekken, vermenigvuldigen en delen met negatieve getallen. In een langere berekening komen die bewerkingen samen, en dan doet de **volgorde** ertoe. Met negatieve getallen komt daar een extra vraag bij: bij welk getal hoort een minteken eigenlijk? Dat lijkt een kwestie van netjes schrijven, maar het verschil tussen $(-3)^2$ en $-3^2$ is het verschil tussen $9$ en $-9$.

## 1. De afgesproken volgorde

De rekenvolgorde is een afspraak, zodat iedereen dezelfde uitdrukking op dezelfde manier leest. Je kent hem misschien als een ezelsbruggetje ("Hoe Moeten Wij Van De Onderste Trap Afkomen": haakjes, machten, worteltrekken, vermenigvuldigen en delen, optellen en aftrekken).

:::theory Volgorde van bewerkingen
1. Eerst wat **tussen haakjes** staat (van binnen naar buiten).
2. Dan **machten** en wortels.
3. Dan **vermenigvuldigen en delen**, van links naar rechts.
4. Ten slotte **optellen en aftrekken**, van links naar rechts.
:::

Vermenigvuldigen en delen zijn gelijkwaardig: geen van beide gaat voor. Bij $24 : 4 \times 2$ werk je van links naar rechts: $6 \times 2 = 12$, niet $24 : 8 = 3$. Hetzelfde geldt voor optellen en aftrekken.

Negatieve getallen veranderen niets aan deze volgorde. Wel verandert er iets aan de manier waarop je de tussenresultaten opschrijft. Een product dat negatief is, wordt in de volgende stap een term met een minteken.

:::example Uitgewerkt voorbeeld: dezelfde getallen, andere groepering
**a.** $-2 + 3 \times (-4)$.

1. Vermenigvuldigen gaat voor: $3 \times (-4) = -12$.
2. Optellen: $-2 + (-12) = -14$.

**b.** $(-2 + 3) \times (-4)$.

1. Haakjes eerst: $-2 + 3 = 1$.
2. Vermenigvuldigen: $1 \times (-4) = -4$.

Dezelfde getallen en bewerkingen, maar de haakjes bepalen wat er eerst gebeurt. Wie bij **a** van links naar rechts rekent ($-2 + 3 = 1$, maal $-4$), krijgt het antwoord van **b**, en dat is fout.
:::

{{ exercises: 13-022, 13-023 }}

:::example Uitgewerkt voorbeeld: delen en vermenigvuldigen van links naar rechts
Bereken $18 : (-3) - (-4)$.

1. Delen gaat voor aftrekken: $18 : (-3) = -6$ (verschillende tekens, dus min).
2. Aftrekken van een negatief getal: $-6 - (-4) = -6 + 4 = -2$.
:::

{{ exercise: 13-029 }}

## 2. Een minteken vóór haakjes

Een minteken vóór haakjes betekent: **neem de tegengestelde van alles wat binnen de haakjes staat**. Je kunt dat op twee manieren uitrekenen.

- **Eerst de haakjes.** $-(3 + (-5)) = -(-2) = 2$.
- **Haakjes wegwerken.** Elke term binnen de haakjes krijgt zijn tegengestelde: $-(3 + (-5)) = -3 + 5 = 2$.

De tweede werkwijze is een gevolg van de distributieve eigenschap: een minteken vóór haakjes is hetzelfde als vermenigvuldigen met $-1$.

$$
-(a + b) = (-1) \times (a + b) = -a - b \qquad\qquad -(a - b) = -a + b
$$

:::warning Vergeet de tweede term niet
Bij $-(7 - 4)$ krijgt **elke** term een ander teken: $-7 + 4 = -3$. Een veelgemaakte fout is alleen de eerste term om te keren: $-7 - 4 = -11$. Controleer door eerst de haakjes uit te rekenen: $-(7 - 4) = -(3) = -3$.
:::

In de algebra (module 15) wordt het wegwerken van haakjes een dagelijkse handeling, met letters in plaats van getallen. Wie het hier met getallen begrijpt, heeft daar een voorsprong.

## 3. Machten van negatieve getallen

Een **macht** is een herhaald product: $3^2 = 3 \times 3$ en $2^5 = 2 \times 2 \times 2 \times 2 \times 2$. Het getal onderaan heet het **grondtal**, het kleine getal rechtsboven de **exponent**. In module 14 werk je machten uitgebreid uit; hier gaat het om één vraag: wat gebeurt er als het grondtal negatief is?

Met de tekenregel uit les 4 is het antwoord eenvoudig te vinden:

$$
\begin{aligned}
(-3)^2 &= (-3) \times (-3) = 9\\
(-3)^3 &= (-3) \times (-3) \times (-3) = -27\\
(-3)^4 &= (-3) \times (-3) \times (-3) \times (-3) = 81
\end{aligned}
$$

Een negatief grondtal met een **even** exponent geeft een positieve uitkomst, met een **oneven** exponent een negatieve. Dat volgt direct uit het aantal negatieve factoren. Een bijzonder geval is het grondtal $-1$: $(-1)^n$ is afwisselend $-1$ en $1$, en wisselt dus van teken bij elke stap.

## 4. (−3)² of −3²?

Nu het belangrijkste punt van deze les. Vergelijk

$$
(-3)^2 \qquad\text{en}\qquad -3^2
$$

In $(-3)^2$ staat het minteken **binnen** de haakjes. Het grondtal is het hele getal $-3$, en dat wordt gekwadrateerd: $(-3)^2 = 9$.

In $-3^2$ staan geen haakjes. De afspraak is dat een macht alleen hoort bij het getal of de letter **direct** eronder. Het grondtal is dus $3$, niet $-3$. Het minteken ervoor betekent "de tegengestelde van": je neemt de tegengestelde van $3^2$. Een macht gaat vóór dat minteken, net zoals een macht vóór vermenigvuldigen gaat.

$$
-3^2 = -(3^2) = -9
$$

:::warning Veelgemaakte fout: −3² = 9
Wie $-3^2 = 9$ schrijft, heeft het minteken bij het grondtal getrokken. Dat is een van de meest gemaakte fouten in de schoolwiskunde, en ook rekenmachines lezen het verschillend: typ je op de meeste wetenschappelijke rekenmachines $(-)$, $3$, $x^2$, dan krijg je $-9$. In spreadsheets zoals Excel geeft `=-3^2` daarentegen $9$, omdat die programma's het minteken als onderdeel van het getal lezen. Juist daarom: **schrijf haakjes als je een negatief getal tot een macht wilt verheffen.** Dan is er nooit twijfel.
:::

Je kunt $-3^2$ ook lezen als $(-1) \times 3^2$: eerst de macht, dan vermenigvuldigen. Dat volgt de gewone rekenvolgorde.

:::example Uitgewerkt voorbeeld: vier kwadraten vergelijken
| Uitdrukking | Lezing | Uitkomst |
|---|---|---|
| $(-5)^2$ | $(-5) \times (-5)$ | $25$ |
| $-5^2$ | $-(5 \times 5)$ | $-25$ |
| $-(-5)^2$ | $-\big((-5)\times(-5)\big)$ | $-25$ |
| $(-5)^3$ | $(-5) \times (-5) \times (-5)$ | $-125$ |

Bij een oneven exponent maakt het voor de uitkomst niet uit: $(-5)^3 = -5^3 = -125$. Maar dat is toeval van de oneven exponent; de **betekenis** van de twee schrijfwijzen blijft verschillend.
:::

{{ exercises: 13-024, 13-025 }}

## 5. Alles samen

:::example Uitgewerkt voorbeeld: een volledige berekening
Bereken $5 - 3 \times (-2)^2$.

1. **Haakjes:** binnen de haakjes staat alleen $-2$; daar valt niets uit te rekenen. De haakjes vertellen dat het grondtal $-2$ is.
2. **Macht:** $(-2)^2 = 4$.
3. **Vermenigvuldigen:** $3 \times 4 = 12$.
4. **Aftrekken:** $5 - 12 = -7$.

Twee typische fouten: $(-2)^2 = -4$ nemen geeft $5 - 3 \times (-4) = 5 + 12 = 17$; en eerst $5 - 3 = 2$ rekenen geeft $2 \times 4 = 8$.
:::

:::tip Werk in kleine, zichtbare stappen
Schrijf bij langere berekeningen elke stap op een nieuwe regel, en zet elk negatief tussenresultaat tussen haakjes als er nog een bewerking volgt. Twee tekenregels in één stap toepassen is de snelste weg naar een fout.
:::

{{ exercise: 13-037 }}
