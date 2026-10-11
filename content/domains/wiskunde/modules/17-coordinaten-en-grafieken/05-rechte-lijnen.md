# Rechte lijnen: helling en y = ax + b

In de vorige les zag je dat de punten van $y = 2x + 1$ op één rechte lijn liggen, en dat bij een afstand-tijdgrafiek een steilere lijn een hogere snelheid betekent. In deze les worden die twee waarnemingen een vaste theorie. Je leert de **helling** van een lijn te berekenen uit twee punten, de standaardvorm $y = ax + b$ te lezen en op te stellen, en snijpunten met de assen te vinden. Dit is een vooruitblik: de lineaire functies krijgen in latere modules een eigen hoofdstuk, maar wat je hier leert, blijft daarbij het fundament.

## 1. De helling van een lijn

Bij de lijn $y = 2x + 1$ stijgt $y$ met 2 als $x$ met 1 toeneemt, ongeacht waar je op de lijn staat. Dat gelijkmatige gedrag is wat een rechte lijn kenmerkt. De verhouding 'hoeveel omhoog per stap naar rechts' noemen we de **helling**, meestal aangeduid met $a$.

:::formula Helling uit twee punten
Voor twee punten $(x_1; y_1)$ en $(x_2; y_2)$ op een lijn, met $x_1 \neq x_2$:
$$a = \frac{\Delta y}{\Delta x} = \frac{y_2 - y_1}{x_2 - x_1}$$
Verticale verandering gedeeld door horizontale verandering, en niet andersom.
:::

![Hellingdriehoek bij y = 2x + 1](/images/diagrams/m17-helling.svg "Een hellingdriehoek bij de lijn y = 2x + 1 tussen (1; 3) en (4; 9): Δx = 3, Δy = 6, dus a = 6 / 3 = 2. Eigen illustratie.")

:::example Helling uit twee punten
Bereken de helling van de lijn door $(1; 3)$ en $(4; 9)$.

1. Horizontale verandering: $\Delta x = 4 - 1 = 3$.
2. Verticale verandering: $\Delta y = 9 - 3 = 6$.
3. Helling: $a = \dfrac{6}{3} = 2$.
4. Controle met de punten in omgekeerde volgorde: $\Delta x = 1 - 4 = -3$ en $\Delta y = 3 - 9 = -6$, dus $a = \dfrac{-6}{-3} = 2$. Dezelfde uitkomst: de volgorde van de punten maakt niet uit, zolang je ze in teller en noemer in *dezelfde* volgorde neemt.
:::

Het teken van de helling vertelt je het gedrag van de lijn.

| Helling | Gedrag van de lijn |
|---|---|
| $a > 0$ | stijgend (van links naar rechts omhoog) |
| $a < 0$ | dalend |
| $a = 0$ | horizontaal: $y$ verandert niet |
| niet gedefinieerd | verticaal: $x$ verandert niet, je zou door nul delen |

Een verticale lijn zoals $x = 3$ heeft geen helling; je kunt haar ook niet schrijven in de vorm $y = ax + b$, want bij één waarde van $x$ horen dan alle waarden van $y$. Een horizontale lijn is wel van die vorm, met $a = 0$: de lijn $y = 4$.

:::warning De helling is Δy gedeeld door Δx
Een veelgemaakte fout is de twee verschillen om te draaien en $\Delta x / \Delta y$ uit te rekenen. Dat is de verhouding 'hoeveel naar rechts per stap omhoog', en dat is niet wat helling betekent. Controleer jezelf met een steile lijn: die moet een grote helling hebben. Bij $\Delta x / \Delta y$ zou een steile lijn juist een klein getal geven.
:::

{{ exercises: 17-018, 17-019, 17-020, 17-040 }}

### Helling met eenheden

In een context heeft de helling een eenheid. Een grafiek van afstand (in km) tegen tijd (in uur) die door $(1; 20)$ en $(3; 60)$ loopt, heeft helling $\tfrac{60 - 20}{3 - 1} = 20$ km per uur. Het getal 20 zegt dat de afstand met 20 kilometer toeneemt per uur: de snelheid. De eenheid hoort erbij en wordt uit de assen afgeleid.

Let ook op dat je de helling niet aan het uiterlijk van de lijn mag aflezen. Dezelfde rechte lijn kan er bij een andere schaal op de assen steiler of vlakker uitzien. De helling is een getal met eenheid, geen hoek op het scherm.

{{ exercises: 17-024 }}

## 2. De vergelijking y = ax + b

Weten we de helling $a$ en één punt, dan ligt de lijn vast. Het handigste punt is het snijpunt met de y-as, het punt waar $x = 0$. De y-waarde daar noemen we $b$, het **startgetal**. Vertrek je in $(0; b)$ en ga je steeds $a$ omhoog per stap naar rechts, dan krijg je voor elke $x$ de waarde $y = ax + b$.

:::definition De standaardvorm van een rechte lijn
Een niet-verticale rechte lijn heeft een vergelijking van de vorm
$$y = ax + b$$
waarbij $a$ de helling is en $b$ het startgetal: de y-waarde bij $x = 0$, dus de plek waar de lijn de y-as snijdt, in het punt $(0; b)$.
:::

In $y = 2x + 1$ is de helling 2 en het startgetal 1, en de lijn snijdt de y-as in $(0; 1)$. In $y = -x + 4$ is de helling $-1$ (denk aan $-1 \cdot x$) en het startgetal 4. Bij $y = \tfrac{1}{2}x - 1$ stijgt de lijn langzaam, en snijdt ze de y-as in $(0; -1)$.

### De vergelijking opstellen

Een lijn opstellen uit twee punten gaat in twee stappen: eerst de helling, daarna het startgetal.

:::example De vergelijking uit twee punten
Stel de vergelijking op van de lijn door $(1; 5)$ en $(3; 9)$.

1. Helling: $a = \dfrac{9 - 5}{3 - 1} = \dfrac{4}{2} = 2$. De vergelijking begint dus met $y = 2x + b$.
2. Startgetal: vul een van de punten in, bijvoorbeeld $(1; 5)$: $5 = 2 \cdot 1 + b$, dus $b = 3$.
3. De vergelijking is $y = 2x + 3$.
4. Controle met het andere punt: $x = 3$ geeft $2 \cdot 3 + 3 = 9$. Dat klopt.
:::

De controle in stap 4 is geen formaliteit. Je gebruikt maar één punt om $b$ te vinden; het tweede punt controleert of je de helling goed had. Een veelvoorkomende fout is het getal 5 uit het punt $(1; 5)$ rechtstreeks als startgetal te nemen: dat is de y-waarde bij $x = 1$, niet bij $x = 0$.

{{ exercises: 17-041 }}

### Controleren door invullen

Of een punt op een lijn ligt, controleer je door de coördinaten in de vergelijking in te vullen. Vul de x-coördinaat in, bereken de y-waarde, en vergelijk met de y-coördinaat van het punt. Zijn ze gelijk, dan ligt het punt op de lijn; anders niet.

:::example Ligt het punt op de lijn?
Ligt $(-2; 3)$ op de lijn $y = 3x + 7$?

1. Vul $x = -2$ in: $y = 3 \cdot (-2) + 7 = -6 + 7 = 1$.
2. De lijn heeft bij $x = -2$ de y-waarde 1, het punt heeft 3.
3. $1 \neq 3$, dus het punt ligt niet op de lijn. Het ligt twee eenheden boven de lijn.
:::

{{ exercises: 17-042 }}

## 3. Snijpunten met de assen

De assen zijn zelf lijnen: de x-as is de lijn $y = 0$ en de y-as de lijn $x = 0$. Een snijpunt met een as vind je dus door één coördinaat nul te stellen.

- **Snijpunt met de y-as**: vul $x = 0$ in. Voor $y = ax + b$ geeft dat het punt $(0; b)$.
- **Snijpunt met de x-as**: stel $y = 0$ en los de vergelijking voor $x$ op.

:::example Snijpunten met de assen
Bepaal de snijpunten van $y = 2x + 1$ met de assen.

1. De y-as: $x = 0$ geeft $y = 1$. Het snijpunt is $(0; 1)$.
2. De x-as: $y = 0$, dus $0 = 2x + 1$. Hieruit volgt $2x = -1$, dus $x = -\tfrac{1}{2}$.
3. Het snijpunt is $(-0{,}5; 0)$.
4. Controle: $2 \cdot (-0{,}5) + 1 = -1 + 1 = 0$.
:::

Bij een dalende lijn als $y = -x + 4$ gaat het hetzelfde: het y-assnijpunt is $(0; 4)$, en $0 = -x + 4$ geeft $x = 4$, dus het x-assnijpunt is $(4; 0)$. De lijn daalt van linksboven naar rechtsonder en snijdt de assen in twee punten op gelijke afstand van de oorsprong.

{{ widget: function-plot fn="a*x + b" a=2 b=1 xmin=-5 xmax=5 ymin=-6 ymax=8 title="De lijn y = ax + b" }}

Gebruik de schuifregelaars om te onderzoeken wat $a$ en $b$ doen. Beantwoord voor jezelf: wat verandert er aan de lijn als je $b$ vergroot en $a$ gelijk laat? En wat als je $a$ van positief naar negatief laat gaan? Bij welke waarde van $a$ is de lijn horizontaal?

{{ exercises: 17-021, 17-022, 17-023 }}

## 4. Een verticale lijn

Een lijn waarvan alle punten dezelfde x-coördinaat hebben, is verticaal. De lijn $x = 3$ bevat de punten $(3; -2)$, $(3; 0)$, $(3; 7)$, en alle andere punten waarvan de x-coördinaat 3 is. Je kunt haar niet als $y = ax + b$ schrijven, omdat $y$ niet één bepaalde waarde bij $x$ heeft: bij $x = 3$ horen alle waarden van $y$.

Dit is ook de reden waarom een verticale lijn geen helling heeft: $\Delta x = 0$, en je kunt niet door nul delen. In module 5 zag je dat delen door nul niet is gedefinieerd. Hier komt dat verbod terug in meetkundige vorm.

{{ exercises: 17-025 }}
