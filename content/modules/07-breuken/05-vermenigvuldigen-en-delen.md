# Een deel van een deel

Optellen van breuken vroeg om voorbereiding: eerst gelijknamig maken. Bij vermenigvuldigen is het omgekeerd. De rekenregel is verrassend eenvoudig, maar de **betekenis** vraagt meer denkwerk. Wat betekent het eigenlijk om twee breuken met elkaar te vermenigvuldigen? En hoe kan delen een *groter* getal opleveren?

## 1. Een geheel getal maal een breuk

In module 4 betekende $3 \times 5$: drie groepen van vijf. Dat werkt ook als de groep een breuk is. Drie keer twee vijfde is drie porties van $\frac25$:

$$
3 \times \frac25 = \frac25 + \frac25 + \frac25 = \frac65 = 1\tfrac15.
$$

Je vermenigvuldigt dus alleen de **teller**: het aantal stukken wordt drie keer zo groot, de soort (vijfden) blijft gelijk. Let op het verschil met gelijkwaardigheid: daar vermenigvuldigde je teller én noemer, en bleef de waarde gelijk. Hier wil je de waarde juist drie keer zo groot maken.

## 2. Een breuk van een hoeveelheid

"Drie achtste van 240" is een opdracht in twee stappen. De noemer zegt: verdeel het geheel in acht gelijke delen. De teller zegt: neem er drie.

$$
\tfrac18 \text{ van } 240 = 240 : 8 = 30, \qquad \tfrac38 \text{ van } 240 = 3 \times 30 = 90.
$$

![Een strook van 240 in acht delen van 30; drie delen samen zijn 90](/images/diagrams/m07-deel-van-240.svg "Strookmodel voor 3/8 van 240: eerst één achtste, dan drie achtsten. Eigen diagram.")

Je kunt de stappen ook omdraaien: eerst $3 \times 240 = 720$, dan $720 : 8 = 90$. Dat geeft hetzelfde, maar met grotere tussengetallen. Delen eerst is meestal handiger, zeker als de hoeveelheid deelbaar is door de noemer.

:::theory "Van" betekent "maal"
$$
\frac{a}{b} \text{ van } N = \frac{a}{b} \times N = \frac{a \times N}{b} = a \times (N : b).
$$
:::

### Terugrekenen naar het geheel

Vaak ken je het deel en zoek je het geheel. "Drie achtste van een voorraad is 90 kg. Hoe groot is de voorraad?" Het strookmodel helpt: drie van de acht vakken samen zijn 90, dus één vak is $90 : 3 = 30$, en alle acht vakken zijn $8 \times 30 = 240$ kg.

:::warning Verkeerd om
Een veelgemaakte fout bij terugrekenen is de breuk nog een keer "van" het gegeven getal te nemen: $\frac38$ van 90 is ongeveer 34. Dat kan niet kloppen, want het geheel moet **groter** zijn dan een deel ervan. Een andere fout is $90 \times 8 = 720$: dan behandel je 90 als één achtste in plaats van drie achtste.
:::

:::example Uitgewerkt voorbeeld: twee derde van een bedrag
Een vennoot krijgt $\frac23$ van de winst, en dat is € 1.860. Hoe groot is de hele winst?

- Twee derde is € 1.860, dus één derde is $1860 : 2 = 930$ euro.
- Drie derde is $3 \times 930 = 2790$ euro.

Controle: $\frac23$ van € 2.790 is $2 \times 930 = 1860$. Klopt.
:::

{{ exercises: 07-019, 07-020 }}

## 3. Een breuk maal een breuk

Wat is de helft van drie kwart? Teken een rechthoek als geheel. Verdeel hem in vier verticale stroken en kleur er drie: dat is $\frac34$. Verdeel nu horizontaal in twee en neem de bovenste helft van het gekleurde stuk. Het geheel bestaat nu uit $2 \times 4 = 8$ gelijke vakjes, en het dubbel gekleurde deel uit $1 \times 3 = 3$ vakjes:

$$
\frac12 \times \frac34 = \frac{1 \times 3}{2 \times 4} = \frac38.
$$

Het diagram hieronder laat een tweede voorbeeld zien: twee derde van vier vijfde. Vier van de vijf kolommen en twee van de drie rijen overlappen in acht van de vijftien vakjes.

![Rechthoekmodel voor twee derde van vier vijfde](/images/diagrams/m07-rechthoekmodel.svg "Rechthoekmodel: 2/3 × 4/5 = 8/15. Eigen diagram.")

:::theory Breuken vermenigvuldigen
$$
\frac{a}{b} \times \frac{c}{d} = \frac{a \times c}{b \times d}.
$$
Teller maal teller, noemer maal noemer. Het product van de noemers telt alle vakjes van het rooster; het product van de tellers telt de vakjes in de overlap.
:::

Twee opmerkingen.

**Je hoeft niet gelijknamig te maken.** Dat is geen inconsequentie. Bij optellen voeg je stukken samen, en dan moeten ze van dezelfde soort zijn. Bij vermenigvuldigen neem je een deel *van* een deel; de verfijning tot $b \times d$ vakjes gebeurt in de regel vanzelf.

**Vermenigvuldigen maakt niet altijd groter.** Neem je een deel van iets met een breuk tussen 0 en 1, dan krijg je minder dan je had: $\frac12 \times \frac34 = \frac38$ is kleiner dan $\frac34$. Het idee "vermenigvuldigen maakt groter" klopt alleen voor factoren groter dan 1.

### Eerst vereenvoudigen

Bij $\frac23 \times \frac{9}{10}$ krijg je $\frac{18}{30}$, wat je daarna vereenvoudigt tot $\frac35$. Sneller is vereenvoudigen **vóór** het vermenigvuldigen. In het product $\frac{2 \times 9}{3 \times 10}$ mag je elke factor boven de streep wegdelen tegen elke factor eronder:

$$
\frac{2 \times 9}{3 \times 10} = \frac{\cancel{2}^{\,1} \times \cancel{9}^{\,3}}{\cancel{3}_{\,1} \times \cancel{10}_{\,5}} = \frac{3}{5}.
$$

Hier deel je 9 en 3 door 3, en 2 en 10 door 2. Dit heet ook wel **kruislings vereenvoudigen**. Het mag alleen bij vermenigvuldigen, niet bij optellen: in $\frac23 + \frac{9}{10}$ mag je 9 en 3 niet tegen elkaar wegdelen.

:::example Uitgewerkt voorbeeld: $\frac{4}{9} \times \frac{15}{16}$
Vereenvoudig 4 met 16 (door 4) en 15 met 9 (door 3):
$$
\frac{4}{9} \times \frac{15}{16} = \frac{1 \times 5}{3 \times 4} = \frac{5}{12}.
$$
Zonder vooraf vereenvoudigen: $\frac{60}{144}$, en dan moet je nog ontdekken dat de ggd 12 is.
:::

### Gemengde getallen vermenigvuldigen

Een beruchte valkuil: $2\frac12 \times 2\frac12$. Wie gehelen met gehelen en breuken met breuken vermenigvuldigt, krijgt $4 + \frac14 = 4\frac14$. Fout. Teken een vierkant van $2\frac12$ bij $2\frac12$ en splits beide zijden in $2$ en $\frac12$. Je krijgt vier rechthoeken, net als bij het rechthoekmodel uit module 4:

$$
\left(2 + \tfrac12\right) \times \left(2 + \tfrac12\right) = 2 \times 2 + 2 \times \tfrac12 + \tfrac12 \times 2 + \tfrac12 \times \tfrac12 = 4 + 1 + 1 + \tfrac14 = 6\tfrac14.
$$

De twee "kruisstukken" van elk $1$ vergeet je als je gehelen en breuken apart neemt. De veiligste route: maak er eerst onechte breuken van. $\frac52 \times \frac52 = \frac{25}{4} = 6\frac14$.

{{ exercises: 07-017, 07-018, 07-037 }}

## 4. Delen: hoe vaak past het?

In module 5 had delen twee betekenissen: **verdelen** (twaalf broden over drie mensen: hoeveel ieder?) en **opdelen** (twaalf broden, drie per mand: hoeveel manden?). Bij delen *door* een breuk is de tweede betekenis de bruikbare: **hoe vaak past de deler in het deeltal?**

Hoe vaak past een kwart in 3? Elk geheel bevat vier kwarten, dus drie gehelen bevatten er twaalf.

![Drie gehelen verdeeld in kwarten: 1/4 past twaalf keer in 3](/images/diagrams/m07-hoe-vaak-past.svg "Opdelen: hoe vaak past 1/4 in 3? Twaalf keer. Eigen diagram.")

$$
3 : \frac14 = 12.
$$

Delen door een kwart is dus hetzelfde als vermenigvuldigen met 4. Het antwoord is **groter** dan het deeltal. Dat is geen paradox: kleine porties passen vaak in een grote hoeveelheid.

### Delen met gelijknamige breuken

Hoe vaak past $\frac14$ in $\frac34$? Drie keer, want het zijn drie kwarten. Bij gelijknamige breuken deel je simpelweg de tellers, net zoals 3 appels gedeeld door 1 appel 3 is:

$$
\frac34 : \frac14 = 3 : 1 = 3.
$$

Dat werkt altijd, als je eerst gelijknamig maakt. Hoe vaak past $\frac45$ in $\frac23$?

$$
\frac23 : \frac45 = \frac{10}{15} : \frac{12}{15} = \frac{10}{12} = \frac56.
$$

De deler past er niet eens één keer in, maar vijf zesde keer.

### Vermenigvuldigen met de omgekeerde

De gelijknamige methode is inzichtelijk, maar er is een kortere weg. Delen door $\frac14$ bleek hetzelfde als vermenigvuldigen met 4. En delen door $\frac45$? Bedenk eerst hoe vaak $\frac45$ in **1** past. In één geheel passen vijf vijfden; een portie van vier vijfden past daar $\frac54$ keer in. In $\frac23$ past ze dan $\frac23$ zo vaak:

$$
\frac23 : \frac45 = \frac23 \times \frac54 = \frac{10}{12} = \frac56.
$$

:::definition Omgekeerde
De **omgekeerde** van een breuk $\frac{c}{d}$ (met $c \neq 0$) is $\frac{d}{c}$. Een breuk maal haar omgekeerde is 1: $\frac{c}{d} \times \frac{d}{c} = 1$. De omgekeerde van 4 is $\frac14$; de omgekeerde van $\frac45$ is $\frac54$.
:::

:::theory Delen door een breuk
$$
\frac{a}{b} : \frac{c}{d} = \frac{a}{b} \times \frac{d}{c} \qquad (c \neq 0).
$$
Delen door een breuk is vermenigvuldigen met haar omgekeerde. Alleen de **deler** (de tweede breuk) wordt omgekeerd.
:::

Waarom is dit gerechtvaardigd? Delen is de omgekeerde bewerking van vermenigvuldigen (module 5): $x : y = q$ betekent $q \times y = x$. Controleer: $\frac56 \times \frac45 = \frac{20}{30} = \frac23$. De uitkomst klopt dus.

Delen door een geheel getal past in hetzelfde schema. $\frac56 : 2$ is $\frac56 \times \frac12 = \frac{5}{12}$: de helft van vijf zesde.

:::example Uitgewerkt voorbeeld: $1\frac12 : \frac38$
1. Gemengd getal omzetten: $1\frac12 = \frac32$.
2. Omkeren van de deler: $\frac38 \to \frac83$.
3. Vermenigvuldigen en vereenvoudigen: $\frac32 \times \frac83 = \frac{24}{6} = 4$.
4. Betekenis: in anderhalve meter passen vier stukken van drie achtste meter. Controle: $4 \times \frac38 = \frac{12}{8} = 1\frac12$. Klopt.
:::

:::warning Drie fouten bij delen
- **Niet omkeren.** $\frac35 : \frac23$ uitrekenen als $\frac35 \times \frac23 = \frac{6}{15}$. Dat is een vermenigvuldiging, geen deling. Goed is $\frac35 \times \frac32 = \frac{9}{10}$.
- **De verkeerde omkeren.** $\frac53 \times \frac23 = \frac{10}{9}$. Je keert het deeltal om in plaats van de deler. Het resultaat is precies de omgekeerde van het goede antwoord.
- **"Delen maakt kleiner".** Wie dat gelooft, vertrouwt $3 : \frac14 = 12$ niet. Delen door een getal tussen 0 en 1 maakt juist groter.

Een grootte-controle helpt bij alle drie: past de deler meer of minder dan één keer in het deeltal? Bij $\frac35 : \frac23$ is $\frac35$ iets kleiner dan $\frac23$, dus de uitkomst moet iets kleiner zijn dan 1. Alleen $\frac{9}{10}$ voldoet.
:::

{{ exercises: 07-021, 07-022, 07-038, 07-023, 07-024 }}

## 5. Overzicht: wat doet een bewerking met de grootte?

| Bewerking met een positief getal $q$ | $q > 1$ | $q = 1$ | $0 < q < 1$ |
|---|---|---|---|
| $x \times q$ | groter dan $x$ | gelijk aan $x$ | kleiner dan $x$ |
| $x : q$ | kleiner dan $x$ | gelijk aan $x$ | groter dan $x$ |

Deze tabel is de snelste controle die je hebt. Vermenigvuldig je met $\frac23$, dan moet de uitkomst kleiner worden. Deel je door $\frac23$, dan groter.
