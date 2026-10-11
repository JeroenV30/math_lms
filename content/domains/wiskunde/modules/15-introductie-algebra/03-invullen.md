# Getallen voor letters invullen

Een expressie is een recept. Pas als je voor elke letter een getal kiest, levert het recept een uitkomst op. Dat heet **invullen** (of substitueren). Invullen lijkt eenvoudig, en meestal is het dat ook. Maar het is ook de plek waar de rekenregels uit de eerdere modules (rekenvolgorde, negatieve getallen, machten) allemaal tegelijk samenkomen. Wie hier precies werkt, heeft daar de rest van de cursus plezier van.

## 1. Vervangen, met haakjes

:::definition Invullen
Je **vult een waarde in** voor een letter door die letter op **elke** plek waar ze voorkomt te vervangen door het gekozen getal. Daarna reken je de expressie uit volgens de gewone rekenregels. De uitkomst heet de **waarde van de expressie** bij die keuze.
:::

Neem $3x + 5$ bij $x = 4$. Vervang de $x$ door 4. Omdat $3x$ "drie maal $x$" betekent, wordt dat $3 \times 4$, niet "34":

$$
3x + 5 \;\to\; 3 \times 4 + 5 = 12 + 5 = 17.
$$

Een goede gewoonte is om het ingevulde getal **altijd tussen haakjes** te zetten, zeker als het negatief is of als er een macht bij staat. Dus $3 \cdot (4) + 5$. Bij positieve getallen kun je de haakjes daarna weglaten; bij negatieve getallen zijn ze onmisbaar, zoals je zo zult zien.

## 2. De volgorde van bewerkingen

Na het invullen staat er een gewone som. Die reken je uit volgens de vaste **volgorde van bewerkingen** die je in module 13 al tegenkwam:

1. **H**aakjes eerst (van binnen naar buiten);
2. **M**achten en **W**ortels;
3. **V**ermenigvuldigen en **D**elen, van links naar rechts;
4. **O**ptellen en **A**ftrekken, van links naar rechts.

Het Nederlandse ezelsbruggetje is *Hoe Moeten Wij Van De Onvoldoendes Afkomen?* Let op: vermenigvuldigen en delen zijn even sterk (je werkt ze van links naar rechts af), en optellen en aftrekken ook. Het ezelsbruggetje suggereert een volgorde binnen die paren die er niet is.

Waarom deze afspraak? Omdat de notatie van de algebra er volledig op leunt. Dat $3x^2$ betekent "drie keer $x$-kwadraat" en niet "($3x$) in het kwadraat", is een direct gevolg van *machten gaan vóór vermenigvuldigen*. En dat $3x + 5$ betekent "eerst $3x$, dan plus 5" volgt uit *vermenigvuldigen gaat vóór optellen*. Zonder deze afspraak zou je overal haakjes moeten zetten.

:::example Uitgewerkt voorbeeld: $2x^2$ bij $x = -3$
Vul in met haakjes: $2 \cdot (-3)^2$.

- Machten eerst: $(-3)^2 = (-3) \times (-3) = 9$.
- Dan vermenigvuldigen: $2 \times 9 = 18$.

De waarde is **18**. Twee fouten liggen op de loer:
- Wie eerst $2 \times (-3) = -6$ uitrekent en dan kwadrateert, krijgt 36. Dat is de waarde van $(2x)^2$, een andere expressie.
- Wie de haakjes vergeet en $-3^2$ schrijft, rekent $-(3^2) = -9$ uit en komt op $-18$. Het kwadraat hoort bij het hele ingevulde getal $-3$, dus de haakjes zijn nodig.
:::

{{ exercises: 15-008, 15-012, 15-033 }}

## 3. Negatieve getallen invullen

Bij negatieve getallen moet je extra opletten op twee plekken: bij machten (is de uitkomst positief of negatief?) en bij een minteken dat al in de expressie staat.

:::example Uitgewerkt voorbeeld: $x^2 - 3x$ bij $x = -2$
Vul in met haakjes:

$$
(-2)^2 - 3 \cdot (-2).
$$

- Macht: $(-2)^2 = 4$.
- Product: $3 \cdot (-2) = -6$.
- Samen: $4 - (-6) = 4 + 6 = 10$.

Zonder haakjes zou je gemakkelijk $-2^2 - 3 - 2$ opschrijven, en dat is iets heel anders. De haakjes houden het ingevulde getal bij elkaar.
:::

:::example Uitgewerkt voorbeeld: $-x^2$ bij $x = 3$ en bij $x = -3$
In $-x^2$ hoort het kwadraat alleen bij $x$; het minteken staat ervoor. Je kunt het lezen als $-1 \cdot x^2$.

- Bij $x = 3$: $-(3)^2 = -9$.
- Bij $x = -3$: $-(-3)^2 = -(9) = -9$.

In beide gevallen is de waarde $-9$. Wie bij $x = -3$ op $+9$ uitkomt, heeft $(-x)^2$ uitgerekend in plaats van $-x^2$.
:::

:::warning Twee keer een minteken
Bij $x = -2$ is $-x = -(-2) = 2$. Het minteken vóór de letter en het minteken van het ingevulde getal heffen elkaar op. Wie hier "min min" ziet en schrikt, moet terugdenken aan module 13: het tegengestelde van $-2$ is $2$.
:::

{{ exercise: 15-009 }}

## 4. Meer dan één letter

Bevat een expressie meerdere letters, dan heb je voor elke letter een waarde nodig. Je vult ze tegelijk in, elk op hun eigen plekken.

:::example Uitgewerkt voorbeeld: $2a + 3b$ bij $a = 4$ en $b = -1$
$$
2 \cdot (4) + 3 \cdot (-1) = 8 + (-3) = 5.
$$
:::

:::example Uitgewerkt voorbeeld: een formule uit de natuurkunde
De afgelegde afstand bij constante snelheid is $s = v \cdot t$. Een fietser rijdt $v = 18$ km/u gedurende $t = 2{,}5$ uur. Invullen: $s = 18 \times 2{,}5 = 45$ km. De eenheden rekenen mee: km/u maal u geeft km. Zo kun je met eenheden controleren of je formule zinnig is.
:::

{{ exercise: 15-010 }}

## 5. Formules voor patronen lezen

In les 2 zag je de lucifersrij met $3n + 1$ lucifers voor $n$ vierkantjes. Zo'n expressie voor het **$n$-de figuur** van een patroon is een krachtig hulpmiddel: je hoeft niet alle figuren te tekenen om het honderdste te kennen.

Bekijk een tuinpad: een rij witte tegels, rondom omzoomd met grijze tegels.

![Tuinpad met grijze rand](/images/diagrams/m15-tuinpad.svg "Figuur n heeft n witte tegels in het midden en een rand van grijze tegels. Er komen bij elke stap twee grijze tegels bij: één boven en één onder.")

| figuur $n$ | 1 | 2 | 3 | 4 |
|---|---|---|---|---|
| grijze tegels | 8 | 10 | 12 | 14 |

Bij elke stap komen er 2 grijze tegels bij. Dat getal is de **toename per stap**, en het wordt de coëfficiënt van $n$. Hoeveel grijze tegels heeft figuur $n$? Kijk naar de figuur: boven de witte rij liggen $n + 2$ grijze tegels, onder ook $n + 2$, en links en rechts nog elk één. Samen:

$$
(n + 2) + (n + 2) + 1 + 1 = 2n + 6.
$$

Controleer met de tabel: bij $n = 3$ is $2 \times 3 + 6 = 12$. Klopt.

:::example Uitgewerkt voorbeeld: een formule lezen
Voor figuur 50 heb je $2 \times 50 + 6 = 106$ grijze tegels nodig. Je hoeft figuur 50 niet te tekenen.

Lees ook de onderdelen van de formule $2n + 6$:
- de **2** is de toename per figuur: elke extra witte tegel kost twee grijze;
- de **6** is wat je zou krijgen bij "figuur 0", een rand rond een lege rij: de vier hoeken plus de twee kopse tegels. Dat figuur bestaat in het patroon niet, maar het getal heeft wel een betekenis.

Een omgekeerde vraag, zoals "welk figuur heeft 40 grijze tegels?", vraagt om een **vergelijking**: $2n + 6 = 40$. Die los je in module 16 systematisch op. Hier kun je al redeneren: $40 - 6 = 34$, en $34 : 2 = 17$. Figuur 17.
:::

:::tip Patroonformule: toename maal $n$, plus een begin
Groeit een patroon bij elke stap met hetzelfde aantal, dan heeft de formule de vorm $an + b$. De coëfficiënt $a$ is de toename per stap; $b$ vind je door van het eerste figuur terug te rekenen: $b = (\text{figuur 1}) - a$. Bij de tuintegels: $8 - 2 = 6$. Bij de lucifers: $4 - 3 = 1$.
:::

{{ exercise: 15-034 }}

## 6. Niet elke waarde is toegestaan

Een expressie kun je niet altijd voor elk getal uitrekenen.

- **Delen door nul kan niet.** De expressie $\dfrac{5}{x}$ heeft bij $x = 2$ de waarde $2{,}5$, maar bij $x = 0$ bestaat ze niet. Waarom niet? $5 : 0$ zou het getal zijn dat maal 0 gelijk is aan 5. Zo'n getal bestaat niet, want alles maal 0 is 0 (module 5).
- **Wortels uit negatieve getallen** laten we in deze cursus voorlopig buiten beschouwing. $\sqrt{x}$ is hier alleen gedefinieerd voor $x \geq 0$.
- **De context** kan ook beperkingen opleggen. In de prijsregel $8 + 3n$ is $n$ een aantal exemplaren, dus $n = 0, 1, 2, \dots$. Rekenkundig kun je $n = -4$ invullen (met uitkomst $-4$ euro), maar dat getal heeft geen betekenis.

{{ exercise: 15-011 }}

:::tip Gebruik eenheden als controle
In een prijsregel met $n$ exemplaren en € 3 per exemplaar geeft $3n$ een bedrag in euro's. Een vaste € 8 kun je daarbij optellen. Een aantal exemplaren en een bedrag rechtstreeks optellen zou verschillende grootheden mengen. Als je bij het opstellen van een expressie twijfelt, schrijf dan de eenheden erbij en kijk of de som klopt.
:::

## 7. Invullen als controle, niet als bewijs

Invullen is het beste controlemiddel dat je hebt. Heb je een expressie omgezet, kies dan een getal (liefst niet 0, 1 of 2, want daar vallen veel fouten toevallig weg) en reken beide vormen uit. Krijg je verschillende uitkomsten, dan zit er zeker een fout in je omzetting.

Het omgekeerde geldt niet. Als twee expressies bij één getal hetzelfde opleveren, zijn ze daarom nog niet gelijkwaardig. Bij $x = 2$ zijn $x^2$ en $2x$ allebei 4, maar bij $x = 3$ is $x^2 = 9$ en $2x = 6$. Eén controle die klopt, sluit een fout dus niet uit. Een controle met een "willekeurig" getal zoals 7 of $-3$ is wel een sterke aanwijzing. Een echt bewijs dat twee expressies gelijkwaardig zijn, lever je met de rekenregels van les 4 en 5.
