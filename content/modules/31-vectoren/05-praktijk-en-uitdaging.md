# Wind, stroming en evenwicht

In deze les pas je alles toe wat je over vectoren hebt geleerd. De situaties komen uit de techniek en de navigatie: een lamp aan kabels, een boot op een rivier, een vliegtuig in de wind. Het rekenwerk is steeds hetzelfde: **zet elke vector om in componenten, tel op, en vertaal het resultaat terug naar een lengte en een richting.** Het lastige zit bijna altijd in de eerste stap: de situatie goed vertalen.

:::tip Een vast stappenplan
1. **Schets** de situatie en kies een assenstelsel (bijvoorbeeld x naar het oosten, y naar het noorden, of x langs de rivier).
2. **Benoem** alle vectoren en zet ze, met hun richting, in de schets.
3. **Ontbind** elke vector in componenten. Let op tekens: naar links en naar beneden is negatief.
4. **Tel op** (of stel de som gelijk aan nul bij evenwicht).
5. **Vertaal terug**: lengte met Pythagoras, richting met de arctangens en een kwadrantcontrole.
6. **Controleer** of het antwoord past bij je schets en bij je gevoel.
:::

## 1. Krachten in evenwicht

Een voorwerp dat stil hangt of staat, versnelt niet. Volgens Newton betekent dat: de som van alle krachten erop is nul. Dat is de vectorversie van "alle krachten heffen elkaar op".

:::theory Evenwichtsvoorwaarde
Een voorwerp is in evenwicht als

$$
\vec F_1 + \vec F_2 + \dots + \vec F_n = \vec 0
$$

Met componenten zijn dat **twee** vergelijkingen: de som van alle x-componenten is 0, en de som van alle y-componenten is 0. Meetkundig: leg je de krachtpijlen kop aan staart, dan eindigt de laatste pijl precies op de staart van de eerste. De pijlen vormen een **gesloten** veelhoek; bij drie krachten de krachtendriehoek van Stevin.
:::

:::example Uitgewerkt voorbeeld: een lamp aan twee kabels
Een lamp met een gewicht van 100 N hangt in het midden van twee kabels. Elke kabel maakt een hoek van $30^\circ$ met het plafond. Hoe groot is de spankracht in elke kabel?

![Een lamp aan twee kabels in evenwicht](/images/diagrams/m31-evenwicht-lamp.svg "Links: de lamp en de drie krachten erop: de spankrachten T₁ en T₂ langs de kabels en het gewicht G. Rechts: kop aan staart gelegd vormen de drie krachten een gesloten driehoek. Eigen diagram.")

1. **Assenstelsel.** x horizontaal, y omhoog, oorsprong bij de lamp.
2. **Gewicht.** $\vec G = (0; -100)$.
3. **Spankrachten.** Door de symmetrie zijn ze even groot; noem de grootte $T$. De linkerkabel trekt naar linksboven: $\vec T_1 = (-T\cos 30^\circ;\ T\sin 30^\circ)$. De rechterkabel naar rechtsboven: $\vec T_2 = (T\cos 30^\circ;\ T\sin 30^\circ)$.
4. **x-vergelijking.** $-T\cos 30^\circ + T\cos 30^\circ + 0 = 0$. Klopt vanzelf; dat is de symmetrie.
5. **y-vergelijking.** $T\sin 30^\circ + T\sin 30^\circ - 100 = 0$, dus $2T \cdot 0{,}5 = 100$ en $T = 100$ N.
6. **Interpretatie.** Elke kabel draagt 100 N, terwijl de lamp maar 100 N weegt. Samen trekken de kabels dus met 200 N; de helft daarvan gaat op aan horizontaal tegen elkaar in trekken.
:::

:::warning Hoe vlakker, hoe zwaarder
Maak de kabels vlakker (kleinere hoek met het plafond) en de spankracht stijgt snel: bij $10^\circ$ is $T = \dfrac{100}{2\sin 10^\circ} \approx 288$ N, bij $2^\circ$ al ruim 1400 N. Een volledig strakke, horizontale kabel kan géén gewicht dragen, hoe hard je ook spant. Daarom hangen hoogspanningskabels en waslijnen altijd een beetje door.
:::

{{ exercises: 31-033, 31-034 }}

## 2. Een boot op een rivier

Een boot vaart ten opzichte van het **water**. Maar het water stroomt zelf ook. De snelheid ten opzichte van de **oever** is de som van beide:

$$
\vec v_{\text{oever}} = \vec v_{\text{boot t.o.v. water}} + \vec v_{\text{stroming}}
$$

Dit is hetzelfde idee als bij Galileï: twee bewegingen die tegelijk plaatsvinden, tel je als vectoren op.

:::example Uitgewerkt voorbeeld: recht vooruit sturen
Een rivier is 90 m breed en stroomt met 1,2 m/s. Een roeiboot vaart met 3 m/s ten opzichte van het water en houdt de neus recht naar de overkant gericht. Leg de x-as langs de stroming en de y-as naar de overkant.

1. **Vectoren.** Boot t.o.v. water: $(0; 3)$. Stroming: $(1{,}2; 0)$.
2. **Snelheid t.o.v. de oever.** $(1{,}2; 3)$, met grootte $\sqrt{1{,}44 + 9} \approx 3{,}23$ m/s.
3. **Oversteektijd.** Alleen de y-component brengt de boot naar de overkant: $90 : 3 = 30$ s.
4. **Afdrijven.** In die 30 s neemt de stroming de boot mee over $1{,}2 \cdot 30 = 36$ m stroomafwaarts.
5. **Inzicht.** De stroming maakt de boot sneller (3,23 in plaats van 3 m/s), maar niet eerder aan de overkant: de dwarscomponent blijft 3 m/s.
:::

:::example Uitgewerkt voorbeeld: schuin tegen de stroom in sturen
Dezelfde boot wil precies recht tegenover vertrekpunt aankomen. Onder welke hoek moet hij stroomopwaarts sturen, en hoe lang duurt de oversteek dan?

1. **Voorwaarde.** De resulterende snelheid moet recht naar de overkant wijzen: x-component 0.
2. **Bootvector.** Stuurt de boot onder een hoek $\varphi$ stroomopwaarts (gemeten vanaf de dwarsrichting), dan is de bootvector $(-3\sin\varphi;\ 3\cos\varphi)$.
3. **x-vergelijking.** $-3\sin\varphi + 1{,}2 = 0$, dus $\sin\varphi = 0{,}4$ en $\varphi \approx 23{,}6^\circ$.
4. **Dwarssnelheid.** $3\cos 23{,}6^\circ \approx 2{,}75$ m/s. Of zonder hoek, met Pythagoras: $\sqrt{3^2 - 1{,}2^2} = \sqrt{7{,}56} \approx 2{,}75$ m/s.
5. **Oversteektijd.** $90 : 2{,}75 \approx 32{,}7$ s.
:::

:::warning Sinus, geen tangens
In stap 3 is de lengte van de bootvector (3 m/s) de **schuine zijde** en moet de stroomopwaartse component precies 1,2 m/s zijn. Overstaand en schuin: dat is de **sinus**. Wie $\arctan\left(\tfrac{1{,}2}{3}\right) \approx 21{,}8^\circ$ rekent, behandelt 3 m/s ten onrechte als rechthoekszijde.
:::

{{ exercises: 31-035, 31-036 }}

## 3. Een vliegtuig met zijwind

Voor een vliegtuig geldt hetzelfde als voor de boot, met lucht in plaats van water. Piloten onderscheiden:

- de **koers** of *heading*: de richting waarin de neus wijst;
- de **luchtsnelheid**: hoe snel het vliegtuig ten opzichte van de lucht beweegt;
- de **wind**: hoe snel en waarheen de lucht zelf beweegt;
- de **grondsnelheid** en de **grondkoers** (*track*): de werkelijke beweging boven de grond.

Ook hier: grondsnelheidsvector $=$ luchtsnelheidsvector $+$ windvector.

:::example Uitgewerkt voorbeeld: noordwaarts met westenwind
Een vliegtuig heeft een luchtsnelheid van 200 km/u en vliegt met de neus recht naar het noorden. Er staat een westenwind van 50 km/u (de lucht stroomt dus naar het **oosten**). Bereken de grondsnelheid en de afwijking van de grondkoers ten opzichte van het noorden. Kies x naar het oosten en y naar het noorden.

![Vliegtuig met zijwind](/images/diagrams/m31-zijwind.svg "Luchtsnelheid (blauw) plus wind (bruin) geeft de grondsnelheid (zwart). Het vliegtuig wijst naar het noorden, maar beweegt 14,0° oostelijker. Eigen diagram.")

1. **Luchtsnelheid.** $\vec v = (0; 200)$.
2. **Wind.** Westenwind waait naar het oosten: $\vec w = (50; 0)$.
3. **Grondsnelheid als vector.** $\vec v + \vec w = (50; 200)$.
4. **Grootte.** $\sqrt{50^2 + 200^2} = \sqrt{42\,500} \approx 206{,}2$ km/u.
5. **Afwijking.** Ten opzichte van het noorden is de oostcomponent overstaand en de noordcomponent aanliggend: $\arctan\left(\tfrac{50}{200}\right) \approx 14{,}0^\circ$. De grondkoers is dus ongeveer $014^\circ$.
6. **Gevolg.** Na een uur vliegen is het vliegtuig 50 km oostelijker uitgekomen dan de piloot zou verwachten als hij de wind negeerde.
:::

In de praktijk wil een piloot juist een vooraf bepaalde **grondkoers** volgen, bijvoorbeeld recht naar het noorden. Dan moet hij de neus een beetje **in de wind** draaien, zodat de wind het vliegtuig precies terugduwt op de gewenste lijn. Dat is dezelfde berekening als bij de boot die recht wil oversteken: de zijwaartse component van de luchtsnelheid moet de wind precies opheffen. Je oefent dat in de eerste uitdaging hieronder.

{{ exercise: 31-037 }}

## 4. Uitdagingen

De laatste drie opgaven vragen meer zelfstandigheid. Neem de tijd, maak een schets en gebruik het stappenplan.

:::challenge Drie uitdagingen
- **Windcorrectie.** De piloot wil de wind niet laten winnen, maar precies naar het noorden over de grond vliegen.
- **Diagonalen.** Met het inproduct bereken je hoeken in een meetkundige figuur zonder één hoek te meten.
- **Wind uit het noordwesten.** Een volledige navigatieberekening met een windvector die niet langs een as ligt.
:::

{{ exercises: 31-038, 31-039, 31-040 }}

Heb je de uitdagingen gemaakt? Dan heb je hetzelfde gedaan als een navigator met een windrekenschijf of een ingenieur die een kabelconstructie controleert: grootheden met richting in componenten ontbinden, optellen en terugvertalen.
