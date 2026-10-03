# Vereenvoudigen en vergelijken

Je hebt gezien dat één punt op de getallenlijn veel namen kan hebben. In deze les maak je dat precies. Het idee van **gelijkwaardige breuken** is de sleutel tot bijna alles wat volgt: vereenvoudigen, vergelijken, optellen en aftrekken.

## 1. Anders verdeeld, evenveel

Neem een balk en kleur de helft. Verdeel nu elk van de twee helften in tweeën. De balk bestaat uit vier gelijke delen, en het gekleurde stuk beslaat er twee: $\frac24$. Aan het gekleurde stuk zelf is niets veranderd. Alleen de verdeling is fijner geworden.

$$
\frac12 = \frac24 = \frac36 = \frac48 = \cdots
$$

Zet in de widget de vergelijking aan en kies verschillende tweede breuken. Probeer $\frac48$, $\frac36$ en $\frac58$. Welke vallen precies samen met $\frac12$?

{{ widget: fraction numerator=1 denominator=2 compare=4/8 }}

Wat gebeurt er precies als je elk deel in $k$ stukken verdeelt?

- Het aantal delen in het geheel wordt $k$ keer zo groot: de **noemer** gaat maal $k$.
- Elk gekozen deel wordt ook in $k$ stukken verdeeld, dus het aantal gekozen stukken wordt $k$ keer zo groot: de **teller** gaat maal $k$.
- Elk stuk wordt $k$ keer zo klein. Meer stukken, maar kleinere: de hoeveelheid blijft gelijk.

:::theory Gelijkwaardige breuken
Voor elke breuk $\frac{a}{b}$ en elk geheel getal $k \neq 0$ geldt

$$
\frac{a}{b} = \frac{k \cdot a}{k \cdot b}.
$$

Breuken met dezelfde waarde heten **gelijkwaardig**. Je mag teller en noemer met hetzelfde getal vermenigvuldigen, of door hetzelfde getal delen, zonder de waarde te veranderen.
:::

Je kunt het ook met de breuk als deling zien: $6 : 8$ en $3 : 4$ geven hetzelfde, net zoals 60 euro over 80 mensen per persoon evenveel oplevert als 3 euro over 4 mensen. In beide gevallen verhouden het te verdelen bedrag en het aantal mensen zich als 3 tot 4.

:::warning Alleen de teller veranderen
$\frac{3}{4}$ wordt niet $\frac{6}{4}$ "omdat je met twee vermenigvuldigt". $\frac64$ is twee keer zo groot. Gelijkwaardig blijft het alleen als je **teller én noemer** met dezelfde factor vermenigvuldigt.

Ook optellen werkt niet: $\frac{3}{5} \neq \frac{3 + 15}{5 + 15} = \frac{18}{20}$. Om van noemer 5 naar 20 te gaan, vermenigvuldig je met 4, dus $\frac35 = \frac{12}{20}$.
:::

{{ exercises: 07-008, 07-010 }}

## 2. Vereenvoudigen

Andersom kun je teller en noemer door dezelfde factor **delen**. Dat heet **vereenvoudigen** (of vroeger: "vereenvoudigen door wegdelen"). Het doel is de kortste schrijfwijze van hetzelfde getal.

:::example Uitgewerkt voorbeeld: $\frac{18}{24}$
Teller en noemer zijn allebei even: deel door 2.
$$
\frac{18}{24} = \frac{9}{12}.
$$
9 en 12 zijn allebei deelbaar door 3:
$$
\frac{9}{12} = \frac{3}{4}.
$$
3 en 4 hebben geen gemeenschappelijke deler meer behalve 1. De breuk is **volledig vereenvoudigd**.

Sneller: de grootste gemene deler (ggd) van 18 en 24 is 6. Deel in één keer door 6: $\frac{18}{24} = \frac{3}{4}$.
:::

In module 5 heb je de **grootste gemene deler** leren vinden, bijvoorbeeld via priemfactoren. Dat werkt hier direct:

$$
84 = 2 \cdot 2 \cdot 3 \cdot 7, \qquad 126 = 2 \cdot 3 \cdot 3 \cdot 7.
$$

De gemeenschappelijke factoren zijn $2 \cdot 3 \cdot 7 = 42$, dus

$$
\frac{84}{126} = \frac{84 : 42}{126 : 42} = \frac{2}{3}.
$$

:::definition Volledig vereenvoudigd
Een breuk is **volledig vereenvoudigd** (of: onvereenvoudigbaar) als teller en noemer geen gemeenschappelijke deler groter dan 1 hebben. Elke breuk heeft precies één volledig vereenvoudigde vorm met een positieve noemer.
:::

:::tip De Chinese methode: herhaald aftrekken
In de Chinese klassieker *De Negen Hoofdstukken over de Wiskundige Kunst* (samengesteld tussen ongeveer 200 v.Chr. en 50 n.Chr.) staat een regel om een breuk te vereenvoudigen zonder priemfactoren: kan het gehalveerd worden, halveer dan; zo niet, trek dan steeds het kleinere getal van het grotere af tot je twee gelijke getallen hebt. Dat "gelijke getal" is de ggd.

Voor $\frac{49}{91}$: $91 - 49 = 42$, $49 - 42 = 7$, $42 - 7 = 35$, $35 - 7 = 28$, en zo verder tot $7 - 7$: het gelijke getal is 7. Dus $\frac{49}{91} = \frac{7}{13}$. Het is in wezen het algoritme dat in Europa naar Euclides is genoemd.
:::

Moet je altijd vereenvoudigen? Een uitkomst als $\frac{6}{8}$ is niet fout, want het is hetzelfde getal als $\frac34$. Maar de vereenvoudigde vorm is overzichtelijker, en sommige opgaven vragen er uitdrukkelijk om. Soms is een niet-vereenvoudigde vorm juist handig: $\frac{75}{100}$ laat direct zien dat het om 75 procent gaat (module 9).

{{ exercise: 07-007 }}

## 3. Breuken vergelijken

Welke breuk is groter? Bij gehele getallen is dat triviaal; bij breuken moet je opletten, omdat er twee getallen tegelijk meespelen. Er zijn drie makkelijke gevallen en één algemene methode.

**Zelfde noemer.** Dan zijn de delen even groot, en wint het grootste aantal: $\frac58 > \frac38$.

**Zelfde teller.** Dan heb je evenveel stukken, en wint de breuk met de grootste stukken, dus de **kleinste** noemer: $\frac{3}{5} > \frac{3}{7}$.

**Referentiepunten.** Ligt de ene breuk boven $\frac12$ en de andere eronder, dan ben je klaar. $\frac{5}{9}$ (5 is meer dan de helft van 9) is groter dan $\frac{6}{13}$ (6 is minder dan de helft van 13).

{{ exercise: 07-011 }}

### De algemene methode: gelijknamig maken

Bij $\frac23$ en $\frac34$ helpt geen van de vuistregels. Dan maak je de stukken even groot: je zoekt een noemer waarin beide breuken passen. Breuken met dezelfde noemer heten **gelijknamig** (ze hebben dezelfde "naam": twaalfden, achtsten, ...).

Derden en kwarten passen allebei in twaalfden, omdat 12 een veelvoud is van zowel 3 als 4:

$$
\frac23 = \frac{2 \cdot 4}{3 \cdot 4} = \frac{8}{12}, \qquad \frac34 = \frac{3 \cdot 3}{4 \cdot 3} = \frac{9}{12}.
$$

Nu heb je hetzelfde soort stukken, en $9 > 8$. Dus $\frac34 > \frac23$, met een verschil van precies één twaalfde.

{{ widget: fraction numerator=2 denominator=3 compare=3/4 }}

:::definition Kleinste gemene veelvoud
Het **kleinste gemene veelvoud** (kgv) van twee getallen is het kleinste getal dat een veelvoud is van allebei. Het kgv van de noemers is de kleinste gemeenschappelijke noemer.
:::

Je vindt het kgv door de veelvouden van de grootste noemer af te lopen tot je er een vindt die ook door de andere deelbaar is. Voor 6 en 8: 8, 16, **24**. Want 24 is deelbaar door 6. Het product van de noemers ($6 \times 8 = 48$) werkt ook altijd, maar levert grotere getallen op die je achteraf weer moet vereenvoudigen.

:::example Uitgewerkt voorbeeld: $\frac58$ of $\frac7{12}$?
1. Noemers 8 en 12. Veelvouden van 12: 12, **24**. Deelbaar door 8. Het kgv is 24.
2. $\frac58 = \frac{5 \cdot 3}{8 \cdot 3} = \frac{15}{24}$ en $\frac{7}{12} = \frac{7 \cdot 2}{12 \cdot 2} = \frac{14}{24}$.
3. $15 > 14$, dus $\frac58 > \frac7{12}$.

Controle met een referentiepunt: beide liggen iets boven $\frac12$ ($\frac{12}{24}$), dus een klein verschil is aannemelijk.
:::

### Kruislings vergelijken

Wie de gelijknamige methode vaak gebruikt, ziet een patroon. Bij $\frac23$ en $\frac34$ waren de nieuwe tellers $2 \cdot 4 = 8$ en $3 \cdot 3 = 9$. Dat zijn precies de "kruisproducten":

$$
\frac{a}{b} \;\text{ vergeleken met }\; \frac{c}{d}: \quad \text{vergelijk } a \cdot d \text{ met } c \cdot b \quad (b, d > 0).
$$

Dit werkt omdat je beide breuken stilzwijgend gelijknamig maakt met noemer $b \cdot d$; de noemer hoef je dan niet meer op te schrijven. Gebruik de verkorting gerust, maar weet waar ze vandaan komt. Wie alleen het trucje kent, raakt de weg kwijt zodra het niet om vergelijken maar om optellen gaat.

:::warning Een verleidelijke denkfout
"Bij $\frac34$ en $\frac56$ ontbreekt in beide gevallen één deel, dus ze zijn even groot." Fout: bij $\frac34$ ontbreekt een *kwart*, bij $\frac56$ een *zesde*, en een zesde is kleiner. Dus $\frac56$ ligt dichter bij 1: $\frac34 = \frac{9}{12} < \frac{10}{12} = \frac56$. Het verschil tussen teller en noemer zegt niets zolang je niet weet hoe groot de delen zijn.
:::

{{ exercise: 07-009 }}

## 4. Tussen twee breuken

Tussen twee verschillende breuken ligt altijd nog een breuk. Het **midden** van $\frac{a}{b}$ en $\frac{c}{d}$ vind je zoals bij gewone getallen: tel op en deel door twee. Maar je kunt het ook zonder optellen zien. Maak de breuken gelijknamig en verfijn zo nodig verder.

:::example Uitgewerkt voorbeeld: midden tussen $\frac13$ en $\frac12$
Gelijknamig in zesden: $\frac13 = \frac26$ en $\frac12 = \frac36$. Er zit geen hele zesde tussen. Verfijn naar twaalfden: $\frac{4}{12}$ en $\frac{6}{12}$. Precies in het midden ligt $\frac{5}{12}$.
:::

Er is een merkwaardige andere manier om een breuk *tussen* twee breuken te vinden: tel de tellers en de noemers op. Tussen $\frac13$ en $\frac12$ ligt $\frac{1+1}{3+2} = \frac25$, en inderdaad $\frac13 < \frac25 < \frac12$. Deze zogeheten **mediant** ligt altijd tussen de twee breuken in, maar meestal **niet in het midden**: $\frac25 = \frac{24}{60}$, terwijl het midden $\frac{25}{60}$ is. En vooral: de mediant is geen som. In de volgende les zie je dat precies deze bewerking de bekendste fout bij het optellen van breuken is.

{{ exercise: 07-033 }}
