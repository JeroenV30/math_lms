# Richting als hoek

Met componenten kun je een vector exact vastleggen. Maar in de praktijk wordt een vector vaak heel anders beschreven: "de wind waait met 30 km/u uit het zuidwesten", "de kabel trekt met 200 N onder een hoek van $25^\circ$ met de grond", "het schip vaart 12 km op koers $060^\circ$". Dat zijn een **lengte** en een **hoek**. In deze les leer je heen en weer te vertalen tussen de twee beschrijvingen. Je gebruikt daarvoor sinus, cosinus en tangens uit module 22.

## 1. De richtingshoek

Om een richting met een getal aan te geven, heb je een vaste nulrichting en een draairichting nodig. In de wiskunde is de afspraak:

:::definition Richtingshoek
De **richtingshoek** $\alpha$ van een vector is de hoek tussen de positieve x-as en de vector, gemeten **tegen de klok in**. Je kiest $\alpha$ tussen $0^\circ$ en $360^\circ$.

- $\alpha = 0^\circ$: recht naar rechts.
- $\alpha = 90^\circ$: recht omhoog.
- $\alpha = 180^\circ$: recht naar links.
- $\alpha = 270^\circ$: recht omlaag.
:::

Dit is dezelfde afspraak als bij de eenheidscirkel in module 27. Speel met de widget hieronder: de pijl vanuit de oorsprong naar het punt op de cirkel is een vector met lengte 1 en richtingshoek $\alpha$.

{{ widget: unit-circle angle="150" }}

## 2. Van componenten naar hoek (eerste kwadrant)

Neem de vector $\vec v = (4; 3)$. Hij wijst naar rechtsboven. Teken de componentendriehoek: een horizontale zijde van 4, een verticale zijde van 3, en de vector als schuine zijde. De richtingshoek $\alpha$ ligt bij de staart, tussen de horizontale zijde en de vector.

Vanuit $\alpha$ gezien is de verticale component (3) de **overstaande** zijde en de horizontale component (4) de **aanliggende** zijde. De verhouding die overstaande en aanliggende zijde verbindt, is de tangens:

$$
\tan\alpha = \frac{\text{overstaand}}{\text{aanliggend}} = \frac{y}{x} = \frac{3}{4}
$$

Met de inverse functie vind je de hoek: $\alpha = \arctan\left(\tfrac{3}{4}\right) \approx 36{,}87^\circ$. Op je rekenmachine is dat de toets $\tan^{-1}$, in de gradenstand.

:::example Uitgewerkt voorbeeld: richting van (4; 3)
1. **Schets.** $x > 0$ en $y > 0$, dus de vector wijst naar rechtsboven: $\alpha$ ligt tussen $0^\circ$ en $90^\circ$.
2. **Tangens.** $\tan\alpha = \tfrac{3}{4} = 0{,}75$.
3. **Arctangens.** $\alpha = \arctan(0{,}75) \approx 36{,}87^\circ$.
4. **Controle.** De vector gaat meer naar rechts (4) dan omhoog (3), dus hij moet onder de $45^\circ$ blijven. $36{,}9^\circ$ klopt.
:::

:::warning y gedeeld door x, niet omgekeerd
Bereken je $\arctan\left(\tfrac{4}{3}\right)$, dan krijg je $53{,}13^\circ$: de hoek met de **y-as** in plaats van de x-as. De richtingshoek wordt gemeten vanaf de positieve x-as, dus de tangens is altijd "y-component gedeeld door x-component". Een snelle controle: is de x-component groter dan de y-component, dan moet de hoek (in het eerste kwadrant) kleiner zijn dan $45^\circ$.
:::

{{ exercise: 31-010 }}

## 3. Andere kwadranten: let op de rekenmachine

Nu de vector $\vec w = (-3; 4)$. Hij wijst naar linksboven. Je verwacht dus een hoek tussen $90^\circ$ en $180^\circ$. Wat zegt de rekenmachine?

$$
\arctan\left(\frac{4}{-3}\right) \approx -53{,}13^\circ
$$

Dat is duidelijk fout: $-53^\circ$ wijst naar rechtsonder. Het probleem is dat de tangens niet ziet of de min van $x$ of van $y$ komt. De vectoren $(-3; 4)$ en $(3; -4)$ hebben dezelfde verhouding $y/x = -\tfrac{4}{3}$, maar wijzen precies tegengesteld. De arctangens geeft altijd een hoek tussen $-90^\circ$ en $90^\circ$, dus altijd het antwoord voor de rechterhelft van het vlak.

![Richtingshoeken in twee kwadranten](/images/diagrams/m31-richtingshoek.svg "De vector (4; 3) heeft richtingshoek 36,9°. De vector (−3; 4) wijst naar linksboven en heeft richtingshoek 126,9°, niet de −53,1° die de rekenmachine bij arctan(4/(−3)) geeft. Eigen diagram.")

:::theory De kwadrantcorrectie
Bereken eerst $\alpha_0 = \arctan\left(\dfrac{y}{x}\right)$ en kijk dan naar de **tekens** van de componenten:

| Ligging | Tekens | Richtingshoek |
|---|---|---|
| rechtsboven | $x > 0$, $y \geq 0$ | $\alpha = \alpha_0$ |
| links (boven of onder) | $x < 0$ | $\alpha = \alpha_0 + 180^\circ$ |
| rechtsonder | $x > 0$, $y < 0$ | $\alpha = \alpha_0 + 360^\circ$ |

Bij $x = 0$ kun je niet delen; dan wijst de vector recht omhoog ($90^\circ$) of recht omlaag ($270^\circ$).
:::

De regel hoef je niet uit je hoofd te leren als je **altijd eerst een schets** maakt. De schets vertelt je in welk kwadrant de vector ligt, en dus tussen welke grenzen de hoek moet vallen. Daarna zie je vanzelf of je $180^\circ$ of $360^\circ$ moet optellen.

:::example Uitgewerkt voorbeeld: drie vectoren
**a.** $\vec w = (-3; 4)$.
1. Schets: linksboven, dus $90^\circ < \alpha < 180^\circ$.
2. $\alpha_0 = \arctan\left(\tfrac{4}{-3}\right) \approx -53{,}13^\circ$.
3. $x < 0$, dus $\alpha = -53{,}13^\circ + 180^\circ = 126{,}87^\circ$. Ligt tussen 90 en 180: klopt.

**b.** $\vec u = (-4; -4)$.
1. Schets: linksonder, precies op de diagonaal, dus $\alpha = 225^\circ$ verwacht.
2. $\alpha_0 = \arctan(1) = 45^\circ$.
3. $x < 0$, dus $\alpha = 45^\circ + 180^\circ = 225^\circ$. Klopt.

**c.** $\vec p = (3; -4)$.
1. Schets: rechtsonder, dus $270^\circ < \alpha < 360^\circ$.
2. $\alpha_0 = \arctan\left(-\tfrac{4}{3}\right) \approx -53{,}13^\circ$.
3. $x > 0$, $y < 0$, dus $\alpha = -53{,}13^\circ + 360^\circ = 306{,}87^\circ$. Klopt.
:::

:::tip De lengte helpt niet bij de richting, en omgekeerd
Lengte en richting zijn onafhankelijk. De vectoren $(4; 3)$ en $(8; 6)$ hebben dezelfde richting ($36{,}87^\circ$) maar verschillende lengtes (5 en 10). De vectoren $(4; 3)$ en $(-3; 4)$ zijn even lang (5) maar wijzen verschillende kanten op. Samen leggen lengte en richtingshoek een vector volledig vast, net als de twee componenten.
:::

{{ exercise: 31-011 }}

## 4. Van lengte en hoek naar componenten

Nu de omgekeerde vraag. Een kracht van 10 newton werkt onder een hoek van $30^\circ$ met de horizontaal. Hoe groot zijn de horizontale en de verticale component?

Teken weer de componentendriehoek. Deze keer ken je de **schuine zijde** (de lengte 10) en de hoek. De horizontale component is de aanliggende zijde, de verticale component de overstaande zijde. Uit module 22:

$$
\cos\alpha = \frac{\text{aanliggend}}{\text{schuin}} \quad\Rightarrow\quad \text{aanliggend} = \text{schuin} \cdot \cos\alpha
$$

$$
\sin\alpha = \frac{\text{overstaand}}{\text{schuin}} \quad\Rightarrow\quad \text{overstaand} = \text{schuin} \cdot \sin\alpha
$$

{{ widget: right-triangle angle="30" hypotenuse="10" }}

Schuif in de widget met de hoek en de schuine zijde, en kijk hoe de aanliggende en overstaande zijde meeveranderen. Bij een kleine hoek is bijna de hele vector horizontaal; bij een hoek dicht bij $90^\circ$ bijna helemaal verticaal.

:::formula Componenten uit lengte en richtingshoek
Een vector met lengte $r$ en richtingshoek $\alpha$ heeft componenten

$$
\vec v = \begin{pmatrix} r\cos\alpha \\ r\sin\alpha \end{pmatrix}
$$

Dit geldt voor **alle** hoeken van $0^\circ$ tot $360^\circ$, niet alleen voor scherpe hoeken: de tekens van cosinus en sinus (module 27) zorgen vanzelf voor de juiste richting.
:::

:::example Uitgewerkt voorbeeld: van polair naar componenten
**a.** Lengte 10, richtingshoek $30^\circ$.
1. $x = 10\cos 30^\circ \approx 10 \cdot 0{,}8660 = 8{,}66$.
2. $y = 10\sin 30^\circ = 10 \cdot 0{,}5 = 5$.
3. $\vec v \approx (8{,}66; 5)$.
4. Controle: $\sqrt{8{,}66^2 + 5^2} = \sqrt{75{,}0 + 25} = \sqrt{100} = 10$. Klopt.

**b.** Lengte 6, richtingshoek $135^\circ$.
1. $x = 6\cos 135^\circ \approx 6 \cdot (-0{,}7071) \approx -4{,}24$.
2. $y = 6\sin 135^\circ \approx 6 \cdot 0{,}7071 \approx 4{,}24$.
3. $\vec v \approx (-4{,}24; 4{,}24)$: naar linksboven, precies op de diagonaal, zoals een hoek van $135^\circ$ hoort te doen.
:::

:::warning Rond pas aan het eind af
Wil je met de componenten verder rekenen (bijvoorbeeld om ze bij een andere vector op te tellen), bewaar dan de onafgeronde waarden in je rekenmachine. Wie tussendoor afrondt, stapelt kleine fouten op. Rond alleen het **eindantwoord** af, op het aantal decimalen dat gevraagd wordt.
:::

{{ exercises: 31-012, 31-013 }}

## 5. De trekschuit doorgerekend

Nu kun je de vraag uit de introductie beantwoorden. Twee paarden trekken elk met 500 N, elk onder een hoek van $30^\circ$ met de vaarrichting, aan weerszijden van het kanaal. Leg de vaarrichting langs de positieve x-as.

:::example Uitgewerkt voorbeeld: twee paarden
1. **Paard links (noordoever).** Richting $+30^\circ$: $\vec F_1 = (500\cos 30^\circ;\ 500\sin 30^\circ) \approx (433{,}0;\ 250)$.
2. **Paard rechts (zuidoever).** Richting $-30^\circ$: $\vec F_2 = (500\cos(-30^\circ);\ 500\sin(-30^\circ)) \approx (433{,}0;\ -250)$.
3. **Samen.** Tel de componenten op: $(433{,}0 + 433{,}0;\ 250 - 250) = (866{,}0;\ 0)$.
4. **Conclusie.** De totale kracht is ongeveer 866 N, recht vooruit. De zijwaartse componenten heffen elkaar precies op. Ongeveer 134 N van de 1000 N "verdwijnt" in het trekken tegen elkaar in.
:::

Bij één paard aan één oever heft niets de zijwaartse component op. Trekt het paard met 800 N onder $20^\circ$, dan is de voorwaartse component $800\cos 20^\circ \approx 751{,}8$ N en de zijwaartse $800\sin 20^\circ \approx 273{,}6$ N. Die laatste moet de schipper met het roer opvangen. Hoe langer de lijn, hoe kleiner de hoek, en hoe minder kracht er verloren gaat. Dat is precies waarom de jaaglijnen van trekschuiten lang waren.

{{ exercise: 31-014 }}

## 6. Kompaskoersen

Navigatoren, piloten en landmeters gebruiken een andere afspraak dan wiskundigen. Een **koers** (of peiling) meet je vanaf het **noorden**, **met de klok mee**:

| Koers | Richting |
|---|---|
| $000^\circ$ | noord |
| $090^\circ$ | oost |
| $180^\circ$ | zuid |
| $270^\circ$ | west |

Leg oost langs de x-as en noord langs de y-as. Bij een koers $\beta$ is de **oostcomponent** dan de overstaande zijde ten opzichte van de noordlijn, en de **noordcomponent** de aanliggende zijde:

:::formula Componenten bij een kompaskoers
Een verplaatsing van $r$ op koers $\beta$ heeft

$$
\text{oostcomponent} = r\sin\beta, \qquad \text{noordcomponent} = r\cos\beta
$$

Sinus en cosinus wisselen dus van plaats ten opzichte van de wiskundige richtingshoek. Wil je liever met één formule werken, reken dan eerst om: de richtingshoek is $\alpha = 90^\circ - \beta$ (eventueel $+360^\circ$).
:::

:::example Uitgewerkt voorbeeld: een schip op koers 120°
Een schip vaart 10 km op koers $120^\circ$ (oostzuidoost). Bereken de oost- en noordcomponent.

1. **Schets.** Koers $120^\circ$ ligt tussen oost ($090^\circ$) en zuid ($180^\circ$): het schip gaat naar het oosten en een beetje naar het zuiden.
2. **Oost.** $10\sin 120^\circ \approx 10 \cdot 0{,}8660 = 8{,}66$ km.
3. **Noord.** $10\cos 120^\circ = 10 \cdot (-0{,}5) = -5$ km, dus 5 km naar het **zuiden**.
4. **Controle via de richtingshoek.** $\alpha = 90^\circ - 120^\circ = -30^\circ$, oftewel $330^\circ$. Dan $x = 10\cos 330^\circ \approx 8{,}66$ en $y = 10\sin 330^\circ = -5$. Zelfde antwoord.
:::

:::warning Twee afspraken door elkaar
Fouten met koersen ontstaan bijna altijd doordat iemand halverwege van afspraak wisselt. Schrijf bij elke opgave op welke hoek je gebruikt (richtingshoek vanaf de x-as, of koers vanaf het noorden) en maak een schets met een noordpijl. Een tweede valkuil: in het weerbericht betekent "wind uit het westen" dat de lucht **naar het oosten** stroomt. De windvector wijst dus naar de kant waar de wind *heen* gaat, tegengesteld aan de windrichting in het weerbericht.
:::

{{ exercises: 31-015, 31-016 }}
