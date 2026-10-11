# Het inproduct en de hoek tussen vectoren

Je kunt vectoren optellen, aftrekken en met een getal vermenigvuldigen. Maar kun je twee vectoren ook met elkaar **vermenigvuldigen**? Er blijken meerdere zinvolle manieren te bestaan. In deze les leer je de belangrijkste voor het platte vlak: het **inproduct**. Het combineert twee vectoren tot één getal, en dat getal vertelt je iets over de **hoek** tussen de vectoren. Daarmee kun je hoeken uitrekenen, loodrechte stand herkennen en bepalen welk deel van een kracht "meewerkt".

## 1. Een natuurkundige aanleiding: arbeid

Denk weer aan de trekschuit. Het paard trekt schuin, en alleen het deel van de kracht **in de vaarrichting** brengt de schuit vooruit. Natuurkundigen meten de "nuttige inspanning" met de grootheid **arbeid**: kracht maal afgelegde weg, maar dan alleen het deel van de kracht dat in de bewegingsrichting werkt.

Trekt het paard met een kracht van 800 N onder een hoek van $20^\circ$ met het kanaal, en legt de schuit 1000 m af, dan is de arbeid

$$
W = 800 \cdot \cos 20^\circ \cdot 1000 \approx 751{,}8 \cdot 1000 \approx 751\,800 \text{ joule}
$$

Er komen twee vectoren in voor (kracht en verplaatsing), en het resultaat is een **getal**: hun grootten vermenigvuldigd, maal de cosinus van de hoek ertussen. Dat is precies het inproduct.

## 2. De definitie met componenten

:::definition Inproduct
Het **inproduct** (ook **scalair product** of **dot product**) van $\vec a = \begin{pmatrix} a_1 \\ a_2 \end{pmatrix}$ en $\vec b = \begin{pmatrix} b_1 \\ b_2 \end{pmatrix}$ is het getal

$$
\vec a \cdot \vec b = a_1 b_1 + a_2 b_2
$$

Vermenigvuldig de x-componenten met elkaar, vermenigvuldig de y-componenten met elkaar, en tel de twee producten op.
:::

Het rekenwerk is eenvoudig. Voor $\vec a = (3; 4)$ en $\vec b = (2; -1)$:

$$
\vec a \cdot \vec b = 3 \cdot 2 + 4 \cdot (-1) = 6 - 4 = 2
$$

Een paar eigenschappen volgen direct uit de definitie:

- $\vec a \cdot \vec b = \vec b \cdot \vec a$: de volgorde maakt niet uit.
- $\vec a \cdot (\vec b + \vec c) = \vec a \cdot \vec b + \vec a \cdot \vec c$: de distributieve eigenschap werkt (module 4).
- $\vec a \cdot \vec a = a_1^2 + a_2^2 = |\vec a|^2$. Het inproduct van een vector met zichzelf is het kwadraat van zijn lengte.

:::warning De uitkomst is een getal
Het inproduct van twee vectoren is **geen vector** maar een gewoon getal (een scalar, vandaar de naam scalair product). Schrijf dus niet $(6; -4)$ als antwoord op $(3; 4) \cdot (2; -1)$: dat zijn alleen de twee tussenproducten. Je moet ze nog optellen.
:::

{{ exercise: 31-025 }}

## 3. De meetkundige betekenis

Waarom zou deze formule iets met hoeken te maken hebben? Dat zie je in twee stappen.

**Stap 1: een handig assenstelsel.** Kies de x-as langs $\vec a$. Dan is $\vec a = (|\vec a|; 0)$. Maakt $\vec b$ een hoek $\theta$ met $\vec a$, dan is (vorige les) $\vec b = (|\vec b|\cos\theta;\ |\vec b|\sin\theta)$. Het inproduct wordt:

$$
\vec a \cdot \vec b = |\vec a| \cdot |\vec b|\cos\theta + 0 \cdot |\vec b|\sin\theta = |\vec a|\,|\vec b|\cos\theta
$$

**Stap 2: het assenstelsel doet er niet toe.** Maar mag je de x-as zomaar langs $\vec a$ leggen? Ja, want het inproduct hangt alleen af van **lengtes**. Werk maar uit:

$$
|\vec a - \vec b|^2 = (a_1 - b_1)^2 + (a_2 - b_2)^2 = a_1^2 + a_2^2 + b_1^2 + b_2^2 - 2(a_1 b_1 + a_2 b_2)
$$

Dus

$$
\vec a \cdot \vec b = \tfrac{1}{2}\left(|\vec a|^2 + |\vec b|^2 - |\vec a - \vec b|^2\right)
$$

Rechts staan alleen de lengtes van de drie zijden van de driehoek die $\vec a$, $\vec b$ en $\vec a - \vec b$ vormen. Die lengtes veranderen niet als je het assenstelsel draait. Dan verandert het inproduct dus ook niet, en mag je het assenstelsel kiezen zoals in stap 1.

:::theory Meetkundige vorm van het inproduct
Als $\theta$ de hoek tussen $\vec a$ en $\vec b$ is (met $0^\circ \leq \theta \leq 180^\circ$), dan geldt

$$
\vec a \cdot \vec b = |\vec a|\,|\vec b|\cos\theta
$$
:::

![Hoek tussen twee vectoren en projectie](/images/diagrams/m31-inproduct.svg "De hoek θ tussen a en b. De gestippelde loodlijn projecteert b op de lijn van a; het stuk |b| cos θ is het deel van b dat in de richting van a wijst. Het inproduct is |a| maal dat stuk. Eigen diagram.")

Lees de formule als volgt: $|\vec b|\cos\theta$ is de lengte van de **schaduw** (projectie) van $\vec b$ op de lijn van $\vec a$, als de zon er loodrecht boven staat. Het inproduct is de lengte van $\vec a$ maal die schaduw. Precies wat je bij arbeid nodig had: de grootte van de verplaatsing maal het deel van de kracht dat in de bewegingsrichting wijst.

## 4. De hoek tussen twee vectoren

Nu heb je twee uitdrukkingen voor hetzelfde getal: één met componenten (makkelijk te berekenen) en één met de hoek (die je wilt weten). Stel ze gelijk en los $\cos\theta$ op.

:::formula Hoek tussen twee vectoren
$$
\cos\theta = \frac{\vec a \cdot \vec b}{|\vec a|\,|\vec b|} = \frac{a_1 b_1 + a_2 b_2}{\sqrt{a_1^2 + a_2^2}\,\sqrt{b_1^2 + b_2^2}}
$$

Daarna: $\theta = \arccos(\ldots)$. De arccosinus geeft altijd een hoek tussen $0^\circ$ en $180^\circ$, en dat is precies het bereik dat je voor de hoek tussen twee vectoren wilt. Een kwadrantcorrectie zoals bij de richtingshoek is hier dus niet nodig.
:::

:::example Uitgewerkt voorbeeld: de hoek tussen (3; 1) en (1; 2)
1. **Inproduct.** $3 \cdot 1 + 1 \cdot 2 = 5$.
2. **Lengtes.** $|\vec a| = \sqrt{9 + 1} = \sqrt{10}$ en $|\vec b| = \sqrt{1 + 4} = \sqrt{5}$.
3. **Cosinus.** $\cos\theta = \dfrac{5}{\sqrt{10}\,\sqrt{5}} = \dfrac{5}{\sqrt{50}} \approx 0{,}7071$.
4. **Hoek.** $\theta = \arccos(0{,}7071) \approx 45^\circ$.
5. **Controle met richtingshoeken.** $\vec a$ heeft richtingshoek $\arctan\left(\tfrac{1}{3}\right) \approx 18{,}43^\circ$, $\vec b$ heeft $\arctan(2) \approx 63{,}43^\circ$. Het verschil is $45{,}00^\circ$. Klopt.
:::

:::example Uitgewerkt voorbeeld: een stompe hoek
Bereken de hoek tussen $\vec a = (4; 1)$ en $\vec b = (-2; 3)$, afgerond op één decimaal.

1. **Inproduct.** $4 \cdot (-2) + 1 \cdot 3 = -8 + 3 = -5$. Negatief: dat belooft een stompe hoek.
2. **Lengtes.** $|\vec a| = \sqrt{17}$, $|\vec b| = \sqrt{13}$.
3. **Cosinus.** $\cos\theta = \dfrac{-5}{\sqrt{17}\,\sqrt{13}} = \dfrac{-5}{\sqrt{221}} \approx -0{,}3363$.
4. **Hoek.** $\theta = \arccos(-0{,}3363) \approx 109{,}7^\circ$.
:::

:::warning Rond de cosinus niet te grof af
Rond je de cosinus in stap 3 af op $-0{,}34$, dan krijg je $109{,}9^\circ$ in plaats van $109{,}7^\circ$. Laat de tussenuitkomst in je rekenmachine staan, of rond af op minstens vier decimalen.
:::

Als je de lengtes en de hoek al kent, gebruik je de formule de andere kant op: twee vectoren met lengtes 6 en 5 die een hoek van $120^\circ$ maken, hebben inproduct $6 \cdot 5 \cdot \cos 120^\circ = 30 \cdot (-0{,}5) = -15$.

{{ exercises: 31-026, 31-027, 31-028 }}

## 5. Het teken van het inproduct en loodrechte vectoren

Omdat lengtes positief zijn, bepaalt $\cos\theta$ het teken van het inproduct:

| Inproduct | Cosinus | Hoek | Betekenis |
|---|---|---|---|
| positief | $\cos\theta > 0$ | $0^\circ \leq \theta < 90^\circ$ (scherp) | de vectoren wijzen "ongeveer dezelfde kant op" |
| nul | $\cos\theta = 0$ | $\theta = 90^\circ$ | de vectoren staan **loodrecht** |
| negatief | $\cos\theta < 0$ | $90^\circ < \theta \leq 180^\circ$ (stomp) | de vectoren wijzen "ongeveer tegengesteld" |

Het middelste geval is zo belangrijk dat het een eigen kader verdient.

:::theory Loodrecht als inproduct nul
Twee vectoren $\vec a$ en $\vec b$, allebei niet de nulvector, staan **loodrecht** op elkaar precies als

$$
\vec a \cdot \vec b = 0
$$

Je hoeft dus geen hoek te meten of te berekenen om een rechte hoek te herkennen: één vermenigvuldiging en een optelling volstaan.
:::

Dat levert ook een handig trucje op om een loodrechte vector te **maken**. Bij $\vec a = (a_1; a_2)$ staat $(-a_2; a_1)$ loodrecht, want $a_1 \cdot (-a_2) + a_2 \cdot a_1 = 0$. Verwissel de componenten en zet bij één van beide een minteken. Zo staat $(-3; 4)$ loodrecht op $(4; 3)$: dat is de vector uit de figuur met richtingshoeken, en $126{,}87^\circ - 36{,}87^\circ = 90^\circ$.

:::example Uitgewerkt voorbeeld: een onbekende component
Voor welke waarde van $q$ staat $\vec a = (2; q)$ loodrecht op $\vec b = (6; -3)$?

1. **Voorwaarde.** $\vec a \cdot \vec b = 0$.
2. **Uitschrijven.** $2 \cdot 6 + q \cdot (-3) = 12 - 3q$.
3. **Vergelijking.** $12 - 3q = 0$, dus $3q = 12$ en $q = 4$.
4. **Controle.** $(2; 4) \cdot (6; -3) = 12 - 12 = 0$. Klopt.
:::

:::example Uitgewerkt voorbeeld: is de driehoek rechthoekig?
Gegeven $P(0; 0)$, $Q(4; 2)$ en $R(1; 8)$. Heeft driehoek $PQR$ een rechte hoek, en zo ja, waar?

1. **Bij P.** De zijden vanuit $P$ zijn $\overrightarrow{PQ} = (4; 2)$ en $\overrightarrow{PR} = (1; 8)$. Inproduct: $4 + 16 = 20 \neq 0$.
2. **Bij Q.** $\overrightarrow{QP} = (-4; -2)$ en $\overrightarrow{QR} = (-3; 6)$. Inproduct: $12 - 12 = 0$. Rechte hoek!
3. **Bij R** (ter controle). $\overrightarrow{RP} = (-1; -8)$ en $\overrightarrow{RQ} = (3; -6)$. Inproduct: $-3 + 48 = 45 \neq 0$.
4. **Conclusie.** De rechte hoek zit bij $Q$. Controle met Pythagoras (module 18): $|PQ|^2 = 20$, $|QR|^2 = 45$, $|PR|^2 = 65 = 20 + 45$. Klopt.

Let op: bij elk hoekpunt neem je de twee vectoren die **vanuit dat hoekpunt** vertrekken.
:::

{{ exercises: 31-029, 31-030 }}

## 6. Projectie: welk deel werkt mee?

Terug naar de arbeid uit paragraaf 1. Vaak wil je weten hoe groot het deel van een vector is dat in een **gegeven richting** wijst. Dat heet de **component van $\vec F$ in de richting van $\vec u$**, of de (scalaire) **projectie**.

:::formula Component in een richting
Is $\vec e$ een eenheidsvector, dan is het deel van $\vec F$ in de richting van $\vec e$:

$$
F_{\vec e} = \vec F \cdot \vec e = |\vec F| \cos\theta
$$

Heb je een richting $\vec u$ die geen lengte 1 heeft, maak er dan eerst een eenheidsvector van, of gebruik $\dfrac{\vec F \cdot \vec u}{|\vec u|}$.
:::

:::example Uitgewerkt voorbeeld: een kar op een helling
Een kar staat op een weg die in de richting $\vec u = (12; 5)$ omhoog loopt. Iemand trekt met een kracht $\vec F = (40; 30)$ (in newton). Hoe groot is het deel van de kracht langs de weg?

1. **Eenheidsvector langs de weg.** $|\vec u| = \sqrt{144 + 25} = 13$, dus $\vec e = \left(\tfrac{12}{13}; \tfrac{5}{13}\right)$.
2. **Inproduct.** $\vec F \cdot \vec e = \dfrac{40 \cdot 12 + 30 \cdot 5}{13} = \dfrac{480 + 150}{13} = \dfrac{630}{13} \approx 48{,}5$ N.
3. **Vergelijk met de totale kracht.** $|\vec F| = \sqrt{1600 + 900} = 50$ N. Bijna de hele kracht werkt langs de weg; de rest (loodrecht op de weg) duwt de kar alleen tegen het wegdek.
:::

:::definition Arbeid
Verplaatst een constante kracht $\vec F$ een voorwerp over $\vec s$, dan is de verrichte **arbeid**

$$
W = \vec F \cdot \vec s
$$

In newton en meter is de eenheid de **joule** (J). Staat de kracht loodrecht op de verplaatsing, dan is de arbeid nul: wie een tas horizontaal draagt, verricht natuurkundig gezien geen arbeid aan de tas, hoe vermoeiend het ook voelt.
:::

{{ exercises: 31-031, 31-032 }}
