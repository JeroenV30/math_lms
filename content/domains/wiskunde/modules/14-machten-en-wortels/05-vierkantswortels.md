# De vierkantswortel

Kwadrateren gaat van zijde naar oppervlakte. In deze les maak je de omgekeerde beweging: van oppervlakte terug naar zijde. Dat lijkt een kleine stap, maar er zitten verrassend veel subtiliteiten in. Een kwadraat heeft altijd twee getallen die erbij passen (een positief en een negatief), de meeste wortels zijn geen mooie getallen, en de rekenregels voor wortels hebben net als die voor machten een grens die je niet mag overschrijden.

## 1. Terugrekenen van kwadraat naar zijde

Een vierkant tegelplein heeft een oppervlakte van 64 m². Hoe lang is een zijde? Je zoekt een getal dat met zichzelf vermenigvuldigd 64 oplevert. Uit de tabel van les 2 ken je het: $8 \cdot 8 = 64$, dus de zijde is 8 m.

:::definition Vierkantswortel
Voor een getal $a \geq 0$ is de **vierkantswortel** $\sqrt{a}$ het niet-negatieve getal waarvan het kwadraat $a$ is:

$$
\sqrt{a} = b \quad\text{betekent}\quad b \geq 0 \text{ en } b^2 = a
$$

Het teken $\sqrt{\phantom{a}}$ heet het **wortelteken**; het getal eronder heet de **worteluitdrukking** of het **argument**. Een getal waarvan de wortel een geheel getal is, zoals 64, heet een **volkomen kwadraat** (of kwadraatgetal).
:::

Uit deze definitie volgen twee dingen die je steeds als controle kunt gebruiken:

$$
\left(\sqrt{a}\right)^2 = a \qquad\text{en}\qquad \sqrt{a^2} = a \text{ als } a \geq 0
$$

Kwadrateren en worteltrekken heffen elkaar dus op, zoals optellen en aftrekken elkaar opheffen. Een paar voorbeelden: $\sqrt{0} = 0$, $\sqrt{1} = 1$, $\sqrt{144} = 12$, $\sqrt{225} = 15$. Controleer een wortel altijd door terug te kwadrateren.

{{ exercise: 14-014 }}

## 2. De hoofdwortel en twee oplossingen

Niet alleen $8^2 = 64$, ook $(-8)^2 = 64$. Welk van de twee is "de" wortel van 64? Afgesproken is dat het wortelteken altijd het **niet-negatieve** getal aanduidt. Die waarde heet de **hoofdwortel**. Dus $\sqrt{64} = 8$, en niet "plus of min 8". Het wortelteken is een functie: bij één invoer hoort één uitvoer.

Dat is iets anders dan de vraag: **welke getallen** hebben kwadraat 64? Dat is een vergelijking, $x^2 = 64$, en die heeft twee oplossingen.

:::example Uitgewerkt voorbeeld: $x^2 = 64$ tegenover $\sqrt{64}$
1. $\sqrt{64}$ is een getal: $8$.
2. $x^2 = 64$ is een vraag: welke $x$ maken dit waar? Proberen: $8^2 = 64$, ja. $(-8)^2 = 64$, ook ja. Andere getallen geven een ander kwadraat.
3. De oplossingen zijn $x = -8$ en $x = 8$, kort $x = \pm\sqrt{64} = \pm 8$.

Het $\pm$-teken staat dus niet in het wortelteken, maar komt erbij omdat de vergelijking twee oplossingen heeft. In module 21 los je zo kwadratische vergelijkingen op.
:::

Wat gebeurt er als je eerst kwadrateert en dan de wortel neemt van een **negatief** getal? Neem $-5$: $(-5)^2 = 25$, en $\sqrt{25} = 5$. Het minteken is onderweg verdwenen. Daarom is de regel $\sqrt{a^2} = a$ alleen waar voor $a \geq 0$. In het algemeen geldt

$$
\sqrt{a^2} = |a|
$$

waarbij $|a|$ de **absolute waarde** is uit module 13: de afstand van $a$ tot 0, altijd niet-negatief.

:::warning Geen wortel uit een negatief getal
$\sqrt{-9}$ bestaat niet als reëel getal. In les 2 zag je dat een kwadraat nooit negatief is: $3^2 = 9$ en $(-3)^2 = 9$. Er is dus geen getal op de getallenlijn met kwadraat $-9$. Ook de vergelijking $x^2 = -9$ heeft geen (reële) oplossing. Wiskundigen hebben later een uitgebreider getallenstelsel bedacht waarin dit wel kan, maar in deze cursus blijven we bij de getallenlijn.
:::

{{ exercises: 14-015, 14-016 }}

## 3. Wortels schatten tussen twee kwadraten

De meeste getallen zijn geen volkomen kwadraat. Wat is $\sqrt{20}$? Er is geen geheel getal met kwadraat 20. Maar je kunt het insluiten:

$$
4^2 = 16 < 20 < 25 = 5^2 \qquad\Longrightarrow\qquad 4 < \sqrt{20} < 5
$$

Dat werkt omdat kwadrateren de volgorde bewaart bij niet-negatieve getallen: een grotere zijde geeft een grotere oppervlakte. Ligt 20 tussen de kwadraten 16 en 25, dan ligt de zijde tussen 4 en 5.

![Getallenlijnen voor n en n²](/images/diagrams/m14-wortel-schatten.svg "Kwadrateren voert elk getal van de bovenste lijn naar de onderste. Omdat 20 tussen 16 en 25 ligt, ligt √20 tussen 4 en 5.")

Op de getallenlijn hieronder kun je de volkomen kwadraten $0, 1, 4, 9, 16, 25, 36, 49$ aanwijzen. Je ziet dat ze steeds verder uit elkaar liggen: de afstand van $n^2$ tot $(n+1)^2$ is $2n+1$ (les 2). Daardoor is $\sqrt{a}$ tussen twee kwadraten **niet** gelijkmatig verdeeld, zoals het volgende voorbeeld laat zien.

{{ widget: number-line min=0 max=50 value=20 }}

:::example Uitgewerkt voorbeeld: $\sqrt{20}$ verfijnen
Je weet $4 < \sqrt{20} < 5$. Ga een decimaal verder.

1. Probeer het midden: $4{,}5^2 = 20{,}25$. Dat is net iets te groot, dus $\sqrt{20} < 4{,}5$.
2. Probeer $4{,}4^2 = 19{,}36$. Te klein, dus $\sqrt{20} > 4{,}4$.
3. Nu weet je $4{,}4 < \sqrt{20} < 4{,}5$. Een decimaal verder: $4{,}47^2 = 19{,}9809$ (te klein) en $4{,}48^2 = 20{,}0704$ (te groot).
4. Dus $4{,}47 < \sqrt{20} < 4{,}48$. Om af te ronden op twee decimalen moet je weten of de wortel boven of onder het midden $4{,}475$ ligt: $4{,}475^2 = 20{,}025625$, groter dan 20. Dus $\sqrt{20} \approx 4{,}47$.

Een rekenmachine geeft $\sqrt{20} = 4{,}472135955\ldots$, en de decimalen houden nooit op. Hoe Babylonische schrijvers zo'n insluiting snel konden verfijnen, zie je in het historisch intermezzo.
:::

:::warning Afronden van wortels: let op het midden
Het **dichtstbijzijnde gehele getal** bij $\sqrt{a}$ vind je niet door te kijken naar welk kwadraat $a$ het dichtst bij ligt. Neem $\sqrt{90}$. 90 ligt bijna midden tussen $81 = 9^2$ en $100 = 10^2$, iets dichter bij 81. Maar het midden tussen 9 en 10 is $9{,}5$, en $9{,}5^2 = 90{,}25$. Omdat $90 < 90{,}25$, ligt $\sqrt{90}$ onder $9{,}5$ en is 9 het dichtstbijzijnde gehele getal. Bij twijfel kwadrateer je het midden.
:::

{{ exercises: 14-020, 14-021, 14-041 }}

## 4. Rekenregels voor wortels

Uit de regel $(ab)^2 = a^2b^2$ uit les 3 volgt een regel voor wortels. Neem $\sqrt{4 \cdot 9}$. Enerzijds is dat $\sqrt{36} = 6$. Anderzijds is $\sqrt{4} \cdot \sqrt{9} = 2 \cdot 3 = 6$. Hetzelfde. Dat is geen toeval: $(\sqrt{a} \cdot \sqrt{b})^2 = (\sqrt a)^2 \cdot (\sqrt b)^2 = ab$, dus $\sqrt{a} \cdot \sqrt{b}$ is een niet-negatief getal met kwadraat $ab$, en dat is per definitie $\sqrt{ab}$.

:::formula Wortel van een product en van een quotiënt
Voor $a \geq 0$ en $b \geq 0$:

$$
\sqrt{a \cdot b} = \sqrt{a} \cdot \sqrt{b} \qquad\qquad \sqrt{\frac{a}{b}} = \frac{\sqrt{a}}{\sqrt{b}} \quad (b > 0)
$$
:::

De tweede regel gebruik je bij breuken: $\sqrt{\frac{9}{16}} = \frac{\sqrt 9}{\sqrt{16}} = \frac34$. Controle: $\left(\frac34\right)^2 = \frac{9}{16}$. Bij kommagetallen kun je eerst een breuk maken: $\sqrt{0{,}81} = \sqrt{\frac{81}{100}} = \frac{9}{10} = 0{,}9$. Merk op dat een volkomen kwadraat als kommagetal altijd een even aantal decimalen heeft: $0{,}9^2 = 0{,}81$ (één decimaal wordt er twee), dus de wortel van $0{,}81$ heeft er één. Wie $\sqrt{0{,}81} = 0{,}09$ antwoordt, controleert met $0{,}09^2 = 0{,}0081$ en ziet de fout.

:::warning De wortel van een som is niet de som van de wortels
$$
\sqrt{9 + 16} = \sqrt{25} = 5 \qquad\text{maar}\qquad \sqrt{9} + \sqrt{16} = 3 + 4 = 7
$$

Net zoals een macht niet over een som verdeelt (les 3), verdeelt een wortel er ook niet over. Het wortelteken werkt als haakjes: reken eerst uit wat eronder staat. Meetkundig: een vierkant van 25 bestaat niet uit een vierkant van 9 naast een vierkant van 16 op één lijn. Dat zou een rechthoek opleveren, geen vierkant.
:::

{{ exercises: 14-017, 14-018, 14-019 }}

## 5. Wortels vereenvoudigen

Een wortel als $\sqrt{20}$ is **exact**: het is precies het getal met kwadraat 20. Een decimale benadering als $4{,}47$ is dat niet. In de wiskunde laat je wortels daarom vaak staan, maar je schrijft ze zo eenvoudig mogelijk. Dat doe je met de productregel: haal een volkomen kwadraat uit de wortel.

:::example Uitgewerkt voorbeeld: $\sqrt{12} = 2\sqrt{3}$
1. Zoek een volkomen kwadraat dat een deler is van 12. Kandidaten: $4, 9, 16, \ldots$ Het kwadraat $4$ deelt 12: $12 = 4 \cdot 3$.
2. Productregel: $\sqrt{12} = \sqrt{4 \cdot 3} = \sqrt{4} \cdot \sqrt{3}$.
3. $\sqrt 4 = 2$, dus $\sqrt{12} = 2\sqrt{3}$.

Controle: $(2\sqrt3)^2 = 2^2 \cdot (\sqrt3)^2 = 4 \cdot 3 = 12$. Klopt. Je leest $2\sqrt3$ als "twee maal wortel drie". Valkuil: $\sqrt{12} = 4\sqrt3$. Dan is de 4 wel uit 12 gehaald, maar vergeten om er de wortel van te nemen.
:::

:::example Uitgewerkt voorbeeld: $\sqrt{72}$, het grootste kwadraat
1. Delers van 72 die kwadraat zijn: $4$, $9$ en $36$.
2. Neem je $4$, dan krijg je $\sqrt{72} = 2\sqrt{18}$. Maar $18 = 9 \cdot 2$ bevat nog een kwadraat, dus je moet verder: $2\sqrt{18} = 2 \cdot 3\sqrt2 = 6\sqrt2$.
3. Sneller: neem meteen het **grootste** kwadraat, $36$: $\sqrt{72} = \sqrt{36 \cdot 2} = 6\sqrt{2}$.

Een wortel is volledig vereenvoudigd als er onder het wortelteken geen kwadraat (groter dan 1) meer als deler in zit. $\sqrt{2}$, $\sqrt{3}$, $\sqrt{6}$ en $\sqrt{10}$ zijn al zo eenvoudig mogelijk.
:::

Vereenvoudigen heeft een praktisch voordeel: wortels met hetzelfde getal eronder kun je optellen zoals gelijksoortige termen. $\sqrt{50} + \sqrt{8} = 5\sqrt2 + 2\sqrt2 = 7\sqrt2$, net zoals 5 appels plus 2 appels 7 appels zijn. Maar $\sqrt{2} + \sqrt{3}$ kun je niet verder samenvoegen, en het is zeker niet $\sqrt{5}$.

{{ exercises: 14-022, 14-039 }}

## 6. Kort: de derdemachtswortel

Wat de vierkantswortel is voor het vierkant, is de **derdemachtswortel** voor de kubus. Een kubusvormige doos heeft een inhoud van 27 dm³; hoe lang is een ribbe? Je zoekt een getal met $b^3 = 27$, en dat is 3.

:::definition Derdemachtswortel
De **derdemachtswortel** $\sqrt[3]{a}$ is het getal waarvan de derde macht $a$ is: $\sqrt[3]{a} = b$ betekent $b^3 = a$.
:::

Er is een belangrijk verschil met de vierkantswortel: een derde macht van een negatief getal is negatief, dus een derdemachtswortel bestaat ook bij negatieve getallen. $\sqrt[3]{-8} = -2$, want $(-2)^3 = -8$. Er is ook maar één getal met derde macht 8, dus geen $\pm$. De volkomen derdemachten om te herkennen zijn $1, 8, 27, 64, 125, 216, 343, 512, 729, 1000$.

Een veelgemaakte fout is $\sqrt[3]{64} = 8$: dat is de vierkantswortel. Controleer: $8^3 = 512$, niet 64. Het goede antwoord is 4, want $4 \cdot 4 \cdot 4 = 64$. Op dezelfde manier bestaan vierdemachtswortels, vijfdemachtswortels enzovoort; je komt ze later in de cursus tegen.

{{ exercise: 14-040 }}

## 7. Vooruitblik: de diagonaal en de stelling van Pythagoras

Terug naar de diagonaal uit de introductie. In een rechthoekige driehoek met rechthoekszijden $a$ en $b$ geldt voor de schuine zijde $c$:

$$
a^2 + b^2 = c^2 \qquad\text{dus}\qquad c = \sqrt{a^2 + b^2}
$$

Dat is de **stelling van Pythagoras**, het onderwerp van module 18. De widget laat de vierkanten op de drie zijden zien. Bij $a = 3$ en $b = 4$ zijn de oppervlakten 9 en 16, samen 25, dus $c = \sqrt{25} = 5$. Verander de zijden en kijk hoe de vierkanten steeds precies passen.

{{ widget: pythagoras a=3 b=4 }}

Twee dingen uit deze les komen hier samen. Je moet eerst kwadrateren en optellen, en pas daarna de wortel nemen: $\sqrt{3^2 + 4^2} = 5$, niet $3 + 4 = 7$. En bij een vierkant met zijde 1 vind je $c = \sqrt{1^2 + 1^2} = \sqrt{2}$: de diagonaal van de leerling uit Babylon. In het historisch intermezzo zie je waarom dat getal zo bijzonder is.

{{ exercise: 14-042 }}

:::summary Kern van deze les
- $\sqrt{a}$ is het niet-negatieve getal met kwadraat $a$ (voor $a \geq 0$); controleer door terug te kwadrateren.
- $x^2 = c$ (met $c > 0$) heeft twee oplossingen, $\pm\sqrt{c}$; $\sqrt{a^2} = |a|$.
- Schat een wortel tussen twee opeenvolgende kwadraten; verfijn door decimalen te kwadrateren.
- $\sqrt{ab} = \sqrt a \cdot \sqrt b$, maar $\sqrt{a+b} \neq \sqrt a + \sqrt b$.
- Vereenvoudigen: haal het grootste kwadraat eruit, bijvoorbeeld $\sqrt{12} = 2\sqrt3$.
- $\sqrt[3]{a}$ is het getal met derde macht $a$; dat bestaat ook voor negatieve $a$.
:::
