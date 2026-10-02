# Deelbaarheid en priemgetallen

Tot nu toe was de vraag steeds: wat is de uitkomst van deze deling? In deze les draai je de vraag om. Je kijkt naar een getal en vraagt: *waardoor* is het deelbaar? Dat leidt naar handige trucs om snel te controleren of een deling opgaat, en naar een van de oudste en mooiste onderwerpen uit de wiskunde: de priemgetallen.

## 1. Delers en veelvouden

Als de deling $a : b$ opgaat, zeg je:

- $a$ is **deelbaar** door $b$;
- $b$ is een **deler** van $a$;
- $a$ is een **veelvoud** van $b$.

Het zijn drie manieren om hetzelfde te zeggen: er is een geheel getal $q$ met $a = q \times b$. Voorbeeld: $35 = 5 \times 7$, dus 35 is deelbaar door 7, 7 is een deler van 35 en 35 is een veelvoud van 7.

De delers van 12 zijn 1, 2, 3, 4, 6 en 12. Je vindt ze in paren: $1 \times 12$, $2 \times 6$, $3 \times 4$. Zodra de paren elkaar 'kruisen', ben je klaar. Dat scheelt veel werk bij grote getallen.

## 2. Deelbaarheidskenmerken

Moet je een staartdeling maken om te weten of 7.425 deelbaar is door 9? Nee. Voor een aantal delers kun je het antwoord direct aan de cijfers aflezen.

| Deelbaar door | Kenmerk | Voorbeeld |
|---|---|---|
| 2 | laatste cijfer is 0, 2, 4, 6 of 8 (het getal is even) | 3.578 ja, 3.577 nee |
| 5 | laatste cijfer is 0 of 5 | 2.345 ja |
| 10 | laatste cijfer is 0 | 4.560 ja |
| 4 | het getal gevormd door de laatste twee cijfers is deelbaar door 4 | 31.716: 16 is deelbaar door 4, dus ja |
| 3 | de cijfersom is deelbaar door 3 | 2.571: $2+5+7+1 = 15$, dus ja |
| 9 | de cijfersom is deelbaar door 9 | 7.425: $7+4+2+5 = 18$, dus ja |

Zulke regels moet je niet alleen kennen, maar ook begrijpen. Dan kun je ze vertrouwen, en ze ook toepassen op de *rest*.

### Waarom het laatste cijfer genoeg is voor 2, 5 en 10

Elk getal kun je splitsen in "tientallen" en "het laatste cijfer". Bijvoorbeeld $3.578 = 357 \times 10 + 8$. Het deel $357 \times 10$ is een veelvoud van 10 en daardoor ook deelbaar door 2 en door 5. Of het hele getal deelbaar is door 2, 5 of 10, hangt dus alleen af van het laatste cijfer. En meer nog: **de rest bij deling door 2, 5 of 10 is gelijk aan de rest van het laatste cijfer.** De rest van $3.578 : 5$ is de rest van $8 : 5$, en dat is 3.

### Waarom de laatste twee cijfers genoeg zijn voor 4

Hetzelfde idee, maar nu met honderdtallen: $31.716 = 317 \times 100 + 16$. Omdat $100 = 25 \times 4$ deelbaar is door 4, telt alleen 16 mee. Let op: alleen het laatste cijfer bekijken is hier *niet* genoeg. 10 is niet deelbaar door 4, dus ook het tientallencijfer doet ertoe. 18 en 28 eindigen allebei op 8, maar alleen 28 is deelbaar door 4.

### Waarom de cijfersom werkt voor 3 en 9

Dit is het verrassendste kenmerk. Het geheim is dat $10 = 9 + 1$, $100 = 99 + 1$, $1.000 = 999 + 1$, enzovoort. Schrijf 7.425 uit naar plaatswaarde:

$$
\begin{aligned}
7.425 &= 7 \cdot 1.000 + 4 \cdot 100 + 2 \cdot 10 + 5 \\
&= 7 \cdot (999 + 1) + 4 \cdot (99 + 1) + 2 \cdot (9 + 1) + 5 \\
&= \underbrace{(7 \cdot 999 + 4 \cdot 99 + 2 \cdot 9)}_{\text{deelbaar door 9}} + \underbrace{(7 + 4 + 2 + 5)}_{\text{cijfersom}}.
\end{aligned}
$$

Het eerste deel is altijd een veelvoud van 9, want 9, 99 en 999 zijn dat. Het getal en zijn cijfersom verschillen dus een veelvoud van 9. Daaruit volgen twee dingen:

1. Een getal is deelbaar door 9 precies als zijn cijfersom deelbaar is door 9. Omdat 9 een veelvoud is van 3, werkt hetzelfde voor 3.
2. **Het getal en zijn cijfersom hebben dezelfde rest bij deling door 9** (en ook bij deling door 3). Is de cijfersom zelf nog groot, neem dan opnieuw de cijfersom.

:::example Een rest met de cijfersom
**Vraag.** Wat is de rest van $5.833 : 9$?

**Denkstap 1.** Cijfersom: $5 + 8 + 3 + 3 = 19$. Nog een keer: $1 + 9 = 10$, en nog een keer: $1 + 0 = 1$.

**Denkstap 2.** De rest bij deling door 9 is dus 1.

**Controle.** $9 \times 648 = 5.832$, en $5.833 - 5.832 = 1$ ✓.
:::

Middeleeuwse en latere rekenmeesters gebruikten dit als controle op hun berekeningen: de **negenproef**. Klopt de rest van de uitkomst niet met wat je verwacht, dan zit er zeker een fout in. (Andersom is niet waterdicht: een fout waarbij twee cijfers zijn verwisseld, blijft onopgemerkt.)

{{ exercises: 05-018, 05-019, 05-020, 05-021 }}

## 3. Priemgetallen

Sommige getallen hebben veel delers: 12 heeft er zes. Andere hebben er zo weinig als mogelijk: 13 is alleen deelbaar door 1 en door 13. Zulke getallen zijn met geen mogelijkheid eerlijk te verdelen in kleinere, gelijke groepen. Een rechthoek van 13 stenen kun je alleen leggen als één lange rij.

:::definition Priemgetal
Een **priemgetal** is een geheel getal groter dan 1 met precies twee delers: 1 en zichzelf. Een getal groter dan 1 dat geen priemgetal is, heet **samengesteld**.

De priemgetallen onder de 30 zijn: 2, 3, 5, 7, 11, 13, 17, 19, 23, 29.
:::

Twee opmerkingen:

- **1 is geen priemgetal.** Het heeft maar één deler. Dat is een afspraak, maar wel een goede: anders zou de priemfactorontbinding hieronder niet meer uniek zijn ($6 = 2 \cdot 3 = 1 \cdot 2 \cdot 3 = 1 \cdot 1 \cdot 2 \cdot 3$). Voor Euclides was het nog eenvoudiger: hij beschouwde de eenheid niet eens als 'getal'. Hij definieerde een priemgetal als een getal dat "alleen door de eenheid gemeten wordt".
- **2 is het enige even priemgetal.** Elk ander even getal is deelbaar door 2 en heeft dus minstens drie delers.

### De zeef van Eratosthenes

Hoe vind je alle priemgetallen tot 100? Je kunt elk getal afzonderlijk testen, maar er is een slimmere methode. Die wordt toegeschreven aan Eratosthenes van Cyrene (3e eeuw v.Chr.).

1. Schrijf alle getallen van 2 tot en met 100 op.
2. Het eerste getal, 2, is een priemgetal. Streep alle andere veelvouden van 2 door: 4, 6, 8, ...
3. Het eerstvolgende getal dat niet is doorgestreept, 3, is een priemgetal. Streep de veelvouden van 3 door: 6, 9, 12, ...
4. Herhaal: 5 blijft over, streep de veelvouden van 5 door. Dan 7.
5. Alles wat niet doorgestreept is, is een priemgetal.

Probeer het zelf in de zeef hieronder.

{{ widget: sieve max=100 }}

Na het doorstrepen van de veelvouden van 7 ben je al klaar. Waarom hoef je niet verder met 11? Stel dat een getal tot en met 100 samengesteld is: $n = a \times b$ met $a$ en $b$ allebei groter dan 1. Als $a$ en $b$ allebei groter zouden zijn dan 10, dan was $a \times b$ groter dan $10 \times 10 = 100$. Dus minstens één van de twee is hoogstens 10, en daardoor heeft $n$ een priemfactor van 2, 3, 5 of 7. Al die getallen zijn al doorgestreept.

:::tip Is dit getal priem?
Om na te gaan of een getal $n$ priem is, hoef je alleen te delen door de priemgetallen waarvan het kwadraat niet groter is dan $n$. Voor 91 zijn dat 2, 3, 5 en 7 (want $11 \times 11 = 121 > 91$). En 91 blijkt deelbaar door 7. Dat verrast veel mensen: 91 'ziet eruit' als een priemgetal.
:::

{{ exercises: 05-022, 05-023 }}

## 4. Ontbinden in priemfactoren

Elk samengesteld getal kun je schrijven als product van kleinere getallen. Die kun je, als ze zelf samengesteld zijn, weer verder opsplitsen. Uiteindelijk hou je alleen priemgetallen over. Dat heet **ontbinden in priemfactoren**.

![Factorboom van 60: 60 splitst in 2 en 30, 30 in 2 en 15, 15 in 3 en 5](/images/diagrams/m05-priemfactorboom.svg "Een factorboom: splits net zo lang tot alle eindpunten priemgetallen zijn. Eigen diagram.")

Een overzichtelijke werkwijze is de **deelladder**: deel steeds door het kleinste priemgetal dat erin past.

$$
\begin{aligned}
360 : 2 &= 180 \\
180 : 2 &= 90 \\
90 : 2 &= 45 \\
45 : 3 &= 15 \\
15 : 3 &= 5 \\
5 : 5 &= 1
\end{aligned}
\qquad\Longrightarrow\qquad 360 = 2 \cdot 2 \cdot 2 \cdot 3 \cdot 3 \cdot 5 = 2^3 \cdot 3^2 \cdot 5.
$$

De deelbaarheidskenmerken helpen bij elke stap: 360 eindigt op 0, dus deelbaar door 2; 45 heeft cijfersom 9, dus deelbaar door 3.

Hoe je ook begint, je komt altijd uit op dezelfde priemfactoren (alleen de volgorde kan verschillen). Bij 60 kun je beginnen met $6 \times 10$ of met $4 \times 15$; je eindigt steeds bij $2 \cdot 2 \cdot 3 \cdot 5$. Dit heet de **hoofdstelling van de rekenkunde**: elk getal groter dan 1 is op precies één manier te schrijven als product van priemgetallen. De priemgetallen zijn dus de 'atomen' waaruit alle andere getallen door vermenigvuldigen zijn opgebouwd. Het bewijs dat het altijd *kan*, gaat terug op Euclides; het bewijs dat het maar op *één* manier kan, laten we hier rusten.

:::example Een getal ontbinden
**Vraag.** Ontbind 84 in priemfactoren.

**Denkstap 1.** 84 is even: $84 = 2 \times 42$.

**Denkstap 2.** 42 is even: $42 = 2 \times 21$.

**Denkstap 3.** 21 is niet even, cijfersom 3, dus deelbaar door 3: $21 = 3 \times 7$. En 7 is priem.

**Antwoord.** $84 = 2 \times 2 \times 3 \times 7$.

**Controle.** $2 \times 2 \times 3 \times 7 = 4 \times 21 = 84$ ✓.
:::

{{ exercises: 05-024, 05-025 }}

## 5. Er komt geen laatste priemgetal

Kijk naar de lijst van priemgetallen: 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, ... Ze worden zeldzamer naarmate de getallen groter worden. Tussen 1 en 100 liggen er 25, tussen 9.900 en 10.000 nog maar negen. Houdt het ergens op? Euclides gaf rond 300 v.Chr. in zijn *Elementen* (boek IX, propositie 20) een antwoord dat nog steeds als een van de mooiste redeneringen uit de wiskunde geldt. In zijn eigen woorden: er zijn meer priemgetallen dan elke voorgelegde hoeveelheid priemgetallen.

:::theory Euclides' redenering, in gewone taal
Stel dat iemand je een eindige lijst priemgetallen geeft, bijvoorbeeld 2, 3 en 5. Je laat zien dat er een priemgetal bestaat dat **niet** in die lijst staat.

1. Vermenigvuldig alle priemgetallen uit de lijst: $2 \cdot 3 \cdot 5 = 30$.
2. Tel er 1 bij op: $N = 31$.
3. Deel $N$ door een priemgetal uit de lijst. Omdat 30 deelbaar is door 2, 3 en 5, geeft $N = 30 + 1$ bij deling door 2, door 3 en door 5 telkens **rest 1**. Geen enkel priemgetal uit de lijst is dus een deler van $N$.
4. Maar $N$ is groter dan 1 en heeft dus wel een priemfactor (desnoods is $N$ zelf priem). Die priemfactor kan dus niet in de lijst staan.

Conclusie: de lijst was niet compleet. En omdat dit werkt voor **elke** eindige lijst, hoe lang ook, kan geen enkele lijst ooit alle priemgetallen bevatten. Er zijn oneindig veel priemgetallen.
:::

Stap 4 gebruikt een feit dat ook al bij Euclides staat (boek VII): elk getal groter dan 1 heeft een priemfactor. Waarom? Neem de kleinste deler van $N$ die groter is dan 1. Als die zelf weer een kleinere deler had, zou die kleinere deler ook $N$ delen, en dan was het niet de kleinste. De kleinste deler is dus priem.

:::warning Een bekende misvatting
Het getal $N = $ (product van de lijst) $+ 1$ hoeft **zelf geen priemgetal** te zijn. Bij 2, 3, 5 komt er toevallig een priemgetal uit (31), maar dat hoeft niet. De redenering zegt alleen dat de priemfactoren van $N$ níét in de lijst staan. In de uitdaging aan het eind van de module onderzoek je een voorbeeld waarbij $N$ samengesteld is.
:::

## 6. De grootste gemene deler en het algoritme van Euclides

De **grootste gemene deler** (ggd) van twee getallen is het grootste getal dat ze allebei deelt. Die heb je nodig als je iets in zo groot mogelijke gelijke stukken wilt verdelen. Twee lappen stof van 84 en 36 el wil je zonder restjes in zo lang mogelijke gelijke stukken knippen: hoe lang worden de stukken? Het antwoord is $\operatorname{ggd}(84, 36)$.

Met priemfactoren kan dat: $84 = 2 \cdot 2 \cdot 3 \cdot 7$ en $36 = 2 \cdot 2 \cdot 3 \cdot 3$. Gemeenschappelijk zijn $2 \cdot 2 \cdot 3 = 12$. Maar bij grote getallen is ontbinden veel werk. Euclides beschreef in boek VII van de *Elementen* een methode die alleen delen met rest gebruikt.

:::formula Algoritme van Euclides
Deel het grootste getal door het kleinste. Vervang dan het grootste getal door de rest. Herhaal tot de rest 0 is. De laatste rest die niet 0 was (de laatste deler), is de ggd.
$$
\operatorname{ggd}(a, b) = \operatorname{ggd}(b, r) \quad \text{als } a = q \cdot b + r.
$$
:::

:::example ggd(84, 36)
**Stap 1.** $84 = 2 \cdot 36 + 12$. Verder met 36 en 12.

**Stap 2.** $36 = 3 \cdot 12 + 0$. De rest is 0.

**Antwoord.** $\operatorname{ggd}(84, 36) = 12$. De stukken stof worden 12 el lang: 7 stukken uit de ene lap, 3 uit de andere.
:::

Waarom werkt dit? Elk getal dat 84 en 36 allebei deelt, deelt ook $84 - 2 \cdot 36 = 12$. En andersom: wat 36 en 12 deelt, deelt ook $2 \cdot 36 + 12 = 84$. De paren (84, 36) en (36, 12) hebben dus precies dezelfde gemeenschappelijke delers, en daarmee dezelfde ggd. Bij elke stap worden de getallen kleiner, dus de methode eindigt altijd. Euclides zelf formuleerde het met herhaald *aftrekken* van het kleinere getal; delen met rest is gewoon een snelle manier om veel keer achter elkaar af te trekken.

{{ exercise: 05-026 }}
