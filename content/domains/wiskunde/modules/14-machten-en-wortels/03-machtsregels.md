# Rekenregels voor machten

Met machten kun je rekenen zonder ze eerst uit te rekenen. Dat is handig, want $2^{30}$ uitschrijven is onbegonnen werk, terwijl $2^{10} \cdot 2^{20} = 2^{30}$ in één oogopslag te zien is. In deze les leid je de rekenregels af. Je hoeft ze niet als losse trucs te onthouden: elke regel volgt uit één eenvoudige gedachte, namelijk **tel de factoren**. Wie dat principe begrijpt, kan elke regel op elk moment zelf reconstrueren, en ziet ook meteen waar de regels ophouden te gelden.

## 1. Machten met hetzelfde grondtal vermenigvuldigen

Bekijk $2^3 \cdot 2^4$. Schrijf beide machten uit:

$$
2^3 \cdot 2^4 = \underbrace{(2 \cdot 2 \cdot 2)}_{3 \text{ factoren}} \cdot \underbrace{(2 \cdot 2 \cdot 2 \cdot 2)}_{4 \text{ factoren}} = 2^{7}
$$

Bij vermenigvuldigen mag je haakjes weglaten (module 4), dus er staan gewoon $3 + 4 = 7$ factoren 2 op een rij. Controle: $8 \cdot 16 = 128 = 2^7$.

:::formula Productregel
Voor elk getal $a$ en positieve gehele $m$ en $n$:

$$
a^m \cdot a^n = a^{m+n}
$$

Bij vermenigvuldigen van machten met **hetzelfde grondtal** tel je de exponenten **op**.
:::

:::warning Twee klassieke fouten
- $2^3 \cdot 2^4 = 2^{12}$ is fout. Wie de exponenten vermenigvuldigt, telt geen factoren meer: drie factoren naast vier factoren zijn er zeven, niet twaalf. (Twaalf factoren krijg je bij $(2^3)^4$, zie paragraaf 3.)
- $2^3 \cdot 2^4 = 4^7$ is ook fout. Het grondtal blijft 2: je zet alleen meer factoren 2 achter elkaar. $4^7 = 16\,384$, en dat is veel meer dan $128$.
:::

De regel geldt alleen bij **gelijke grondtallen**. Bij $2^3 \cdot 3^2 = 8 \cdot 9 = 72$ valt niets samen te voegen: er staan drie factoren 2 en twee factoren 3, en dat zijn verschillende factoren.

Omdat de regel uit het tellen van factoren komt, werkt hij net zo goed met letters. Een letter staat voor een willekeurig getal (module 15 gaat daar uitgebreid op in):

:::example Uitgewerkt voorbeeld: vereenvoudigen met letters
Vereenvoudig $a^3 \cdot a^4$ en $x \cdot x^5 \cdot x^2$.

1. $a^3 \cdot a^4$: drie factoren $a$ en nog vier factoren $a$. Samen zeven: $a^7$.
2. $x \cdot x^5 \cdot x^2$: de losse $x$ is $x^1$, één factor. Samen $1 + 5 + 2 = 8$ factoren: $x^8$.

Controle met een getal, bijvoorbeeld $x = 2$: $2 \cdot 32 \cdot 4 = 256 = 2^8$. Klopt.
:::

{{ exercises: 14-008, 14-034 }}

## 2. Machten met hetzelfde grondtal delen

Bekijk $3^5 : 3^2$. Schrijf het als breuk en strepen gelijke factoren in teller en noemer weg (module 7):

$$
\frac{3^5}{3^2} = \frac{\cancel{3} \cdot \cancel{3} \cdot 3 \cdot 3 \cdot 3}{\cancel{3} \cdot \cancel{3}} = 3^3
$$

Van de vijf factoren in de teller vallen er twee weg tegen de twee in de noemer. Er blijven er $5 - 2 = 3$ over. Controle: $243 : 9 = 27 = 3^3$.

:::formula Quotiëntregel
Voor $a \neq 0$ en positieve gehele $m$ en $n$:

$$
\frac{a^m}{a^n} = a^{m-n}
$$

Bij delen van machten met **hetzelfde grondtal** trek je de exponenten **af**. Het grondtal mag niet 0 zijn, want delen door 0 bestaat niet.
:::

Hier is de typische fout dat iemand de exponenten deelt: $3^5 : 3^2$ zou dan $3^{2{,}5}$ worden. Maar delen haalt factoren weg, het verdeelt ze niet in groepjes. Denk aan de breuk met de weggestreepte factoren, en je maakt deze fout niet.

{{ exercise: 14-009 }}

## 3. Een macht van een macht

Wat is $(2^3)^4$? De buitenste exponent zegt: neem $2^3$ vier keer als factor.

$$
(2^3)^4 = 2^3 \cdot 2^3 \cdot 2^3 \cdot 2^3 = 2^{3+3+3+3} = 2^{12}
$$

Vier groepjes van drie factoren: $4 \cdot 3 = 12$ factoren. Herhaald optellen van dezelfde exponent is vermenigvuldigen.

:::formula Machtsregel
Voor elk getal $a$ en positieve gehele $m$ en $n$:

$$
(a^m)^n = a^{m \cdot n}
$$

Bij een macht van een macht **vermenigvuldig** je de exponenten.
:::

:::example Uitgewerkt voorbeeld: drie regels naast elkaar
Vergelijk $a^3 \cdot a^4$, $(a^3)^4$ en $a^{3^4}$.

1. $a^3 \cdot a^4 = a^{3+4} = a^7$: drie factoren naast vier factoren.
2. $(a^3)^4 = a^{3 \cdot 4} = a^{12}$: vier groepjes van drie factoren.
3. $a^{3^4}$ betekent $a^{81}$: hier wordt eerst de exponent zelf uitgerekend, $3^4 = 81$. Een "toren" van machten lees je van boven naar beneden.

De drie uitdrukkingen lijken op elkaar, maar betekenen iets totaal verschillends. Bij twijfel: schrijf uit welke factoren er staan.
:::

{{ exercise: 14-010 }}

## 4. Een product of quotiënt tot een macht

Wat gebeurt er als het grondtal zelf een product is, zoals in $(2 \cdot 5)^3$?

$$
(2 \cdot 5)^3 = (2 \cdot 5)(2 \cdot 5)(2 \cdot 5) = (2 \cdot 2 \cdot 2)(5 \cdot 5 \cdot 5) = 2^3 \cdot 5^3
$$

Bij vermenigvuldigen mag je de factoren in elke volgorde zetten, dus je kunt de tweeën en de vijven groeperen. Controle: $10^3 = 1000$ en $8 \cdot 125 = 1000$.

:::formula Macht van een product en van een quotiënt
$$
(a \cdot b)^n = a^n \cdot b^n \qquad\qquad \left(\frac{a}{b}\right)^n = \frac{a^n}{b^n} \quad (b \neq 0)
$$

Elke factor van het grondtal krijgt de exponent.
:::

Deze regel werkt ook omgekeerd, en dan levert hij vaak een rekentruc op. $2^6 \cdot 5^6 = (2 \cdot 5)^6 = 10^6 = 1\,000\,000$. Zonder de regel had je $64 \cdot 15\,625$ moeten uitrekenen.

:::example Uitgewerkt voorbeeld: $(3x^2)^3$
1. Het grondtal is het product $3 \cdot x^2$. Elke factor krijgt de exponent 3: $(3x^2)^3 = 3^3 \cdot (x^2)^3$.
2. $3^3 = 27$.
3. $(x^2)^3 = x^{2 \cdot 3} = x^6$ (machtsregel).
4. Samen: $(3x^2)^3 = 27x^6$.

Twee fouten liggen op de loer: de 3 vergeten tot de macht te verheffen ($3x^6$), of de exponenten optellen in plaats van vermenigvuldigen ($27x^5$).
:::

{{ exercise: 14-035 }}

## 5. Een som tot een macht: hier stopt het

Na al die regels ligt het voor de hand om ook $(a + b)^2 = a^2 + b^2$ te denken. Dat is fout, en het is misschien de meest gemaakte fout in de hele schoolalgebra. Probeer het met getallen:

$$
(2 + 3)^2 = 5^2 = 25 \qquad\text{maar}\qquad 2^2 + 3^2 = 4 + 9 = 13
$$

Waarom werkt het bij een product wel en bij een som niet? Omdat de regels over het **herschikken van factoren** gaan. In $(2+3)(2+3)$ staan geen losse factoren 2 en 3, maar twee factoren $5$. Een figuur maakt zichtbaar wat er gebeurt: een vierkant met zijde $a + b$ bestaat uit een vierkant $a^2$, een vierkant $b^2$ en **twee rechthoeken** van $a$ bij $b$.

$$
(a+b)^2 = a^2 + 2ab + b^2
$$

Bij $a = 2$ en $b = 3$: $4 + 12 + 9 = 25$. Die twee rechthoeken, samen $2ab = 12$, zijn precies wat er ontbreekt als je alleen $a^2 + b^2 = 13$ neemt. In module 15 leer je haakjes systematisch uitwerken.

:::warning Machten verdelen alleen over vermenigvuldigen en delen
- Goed: $(ab)^2 = a^2b^2$ en $\left(\tfrac{a}{b}\right)^2 = \tfrac{a^2}{b^2}$.
- Fout: $(a+b)^2 = a^2 + b^2$ en $(a-b)^2 = a^2 - b^2$.

Bij een som of verschil binnen de haakjes reken je eerst de haakjes uit (rekenvolgorde), of je schrijft de macht uit als product: $(a+b)^2 = (a+b)(a+b)$.
:::

{{ exercise: 14-013 }}

## 6. Waarom is $a^0 = 1$?

Tot nu toe betekende de exponent "het aantal factoren", en dat aantal was minstens 1. Wat zou $a^0$ moeten zijn, een product van **nul** factoren? Het eerste instinct zegt vaak 0. Toch is de enige verstandige keuze $a^0 = 1$. Er zijn drie argumenten die allemaal op hetzelfde uitkomen.

**Argument 1: het patroon in de tabel.** Lees de machten van 2 van groot naar klein:

$$
2^4 = 16,\quad 2^3 = 8,\quad 2^2 = 4,\quad 2^1 = 2,\quad 2^0 = \;?
$$

Elke stap omlaag in de exponent is een deling door 2: $16 \to 8 \to 4 \to 2$. De volgende stap is $2 : 2 = 1$. Wil je het patroon niet breken, dan moet $2^0 = 1$.

**Argument 2: de quotiëntregel moet blijven werken.** Neem $\frac{a^3}{a^3}$. Een getal gedeeld door zichzelf is 1 (zolang het niet 0 is). Maar de quotiëntregel zegt $\frac{a^3}{a^3} = a^{3-3} = a^0$. Beide moeten kloppen, dus $a^0 = 1$.

**Argument 3: het lege product.** Een product bouw je op door te beginnen en factoren toe te voegen. Bij een som begin je bij 0, omdat 0 optellen niets verandert. Bij een product begin je bij 1, omdat met 1 vermenigvuldigen niets verandert. Een product zonder factoren is dus het beginpunt: 1. Zo bekeken is $a^3 = 1 \cdot a \cdot a \cdot a$, en $a^0 = 1$ zonder een enkele $a$.

:::definition Exponent nul
Voor elk getal $a \neq 0$:

$$
a^0 = 1
$$

Dit is een **definitie**, maar geen willekeurige: het is de enige keuze waarbij alle rekenregels blijven gelden. Over $0^0$ bestaan verschillende afspraken; in deze module gebruiken we die uitdrukking niet.
:::

{{ exercise: 14-011 }}

## 7. Negatieve exponenten

Als je het patroon van paragraaf 6 voortzet, kom je vanzelf bij negatieve exponenten. Blijf telkens door 2 delen:

$$
2^1 = 2,\quad 2^0 = 1,\quad 2^{-1} = \frac12,\quad 2^{-2} = \frac14,\quad 2^{-3} = \frac18
$$

Ook de quotiëntregel wijst die kant op: $\frac{2^3}{2^5} = 2^{3-5} = 2^{-2}$, en tegelijk is $\frac{2 \cdot 2 \cdot 2}{2 \cdot 2 \cdot 2 \cdot 2 \cdot 2} = \frac{1}{2 \cdot 2} = \frac{1}{2^2}$. Dus $2^{-2} = \frac{1}{2^2}$.

:::definition Negatieve exponent
Voor $a \neq 0$ en een positief geheel getal $n$:

$$
a^{-n} = \frac{1}{a^n}
$$

Een negatieve exponent betekent: neem het **omgekeerde** van de macht. Hij maakt het getal niet negatief.
:::

:::warning Een negatieve exponent geeft geen negatief getal
$2^{-3}$ is **niet** $-8$, en ook niet $-6$. Het is $\frac{1}{8} = 0{,}125$, een positief getal kleiner dan 1. Het minteken in de exponent zegt "aan de andere kant van de breukstreep", niet "onder nul". Zo is $10^{-2} = \frac{1}{100} = 0{,}01$ en niet $-100$.
:::

:::example Uitgewerkt voorbeeld: drie negatieve exponenten
1. $5^{-2} = \frac{1}{5^2} = \frac{1}{25} = 0{,}04$.
2. $\left(\frac{2}{3}\right)^{-2}$: het omgekeerde van $\frac{2}{3}$ is $\frac{3}{2}$, dus $\left(\frac{2}{3}\right)^{-2} = \left(\frac{3}{2}\right)^2 = \frac{9}{4}$.
3. $3^4 \cdot 3^{-6} = 3^{4 + (-6)} = 3^{-2} = \frac{1}{9}$. De productregel blijft gewoon werken, ook met negatieve exponenten. Dat is precies waarom deze definitie zo handig is.
:::

Met exponent nul en negatieve exponenten erbij gelden alle regels uit deze les voor **alle gehele exponenten**, zolang het grondtal niet 0 is. Later in de cursus komt er nog een stap bij: exponenten die breuken zijn. Als de machtsregel ook daar moet gelden, dan is $(a^{1/2})^2 = a^1 = a$, en dus is $a^{1/2}$ niets anders dan de vierkantswortel uit les 5.

{{ exercise: 14-012 }}

:::summary Overzicht van de rekenregels
Voor $a, b \neq 0$ en gehele exponenten $m$ en $n$:

| Regel | Formule | Waarom |
|---|---|---|
| Product | $a^m \cdot a^n = a^{m+n}$ | factoren naast elkaar tellen |
| Quotiënt | $a^m : a^n = a^{m-n}$ | factoren wegstrepen |
| Macht van een macht | $(a^m)^n = a^{mn}$ | $n$ groepjes van $m$ factoren |
| Product tot een macht | $(ab)^n = a^n b^n$ | factoren herschikken |
| Exponent nul | $a^0 = 1$ | patroon, quotiëntregel, leeg product |
| Negatieve exponent | $a^{-n} = \dfrac{1}{a^n}$ | patroon voortzetten |

En de regel die **niet** bestaat: $(a+b)^n \neq a^n + b^n$.
:::
