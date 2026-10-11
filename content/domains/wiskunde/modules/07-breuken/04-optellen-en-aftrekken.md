# Optellen en aftrekken

Optellen van breuken is in principe niets nieuws: je telt hoeveelheden samen, zoals in module 3. Er is maar één voorwaarde, en die is zo belangrijk dat er een hele les aan gewijd is: **je kunt alleen dingen van dezelfde soort direct optellen.**

## 1. Gelijknamige breuken: stukken van dezelfde soort

Drie appels plus twee appels zijn vijf appels. Op dezelfde manier zijn drie achtsten plus twee achtsten vijf achtsten:

$$
\frac38 + \frac28 = \frac{3 + 2}{8} = \frac58.
$$

De noemer verandert niet, want de noemer is de soort ("achtsten"), net zoals "appels" de soort is. Je telt alleen de aantallen, de tellers, op. Aftrekken gaat op dezelfde manier: $\frac78 - \frac38 = \frac48 = \frac12$.

:::theory Gelijknamige breuken optellen en aftrekken
$$
\frac{a}{n} + \frac{b}{n} = \frac{a + b}{n}, \qquad \frac{a}{n} - \frac{b}{n} = \frac{a - b}{n}.
$$
Tel of trek de tellers af; de gemeenschappelijke noemer blijft staan. Vereenvoudig daarna zo nodig.
:::

Wie hier "vijf zestienden" van maakt, telt de noemers mee op alsof het ook aantallen zijn. Maar twee keer een stuk ter grootte van een achtste is geen zestiende. Een zestiende is juist **kleiner** dan een achtste.

{{ exercise: 07-012 }}

## 2. Ongelijknamige breuken: eerst dezelfde soort maken

Wat is $\frac12 + \frac13$? Een halve en een derde zijn stukken van verschillende grootte. Je kunt ze niet als "twee stukken" optellen, net zoals je 1 meter en 1 voet niet optelt tot "2 meter-voet". Je moet ze eerst in **dezelfde eenheid** uitdrukken.

Zesden werken voor allebei: $\frac12 = \frac36$ en $\frac13 = \frac26$. Nu zijn het stukken van dezelfde soort:

$$
\frac12 + \frac13 = \frac36 + \frac26 = \frac56.
$$

Het diagram laat hetzelfde zien voor $\frac34$ en $\frac23$. Beide stroken worden verfijnd tot twaalfden; daarna kun je de gekleurde stukjes gewoon tellen.

![Drie kwart en twee derde herschreven als twaalfden](/images/diagrams/m07-gelijknamig.svg "Verfijnen tot twaalfden: 3/4 = 9/12 en 2/3 = 8/12. Eigen diagram.")

$$
\frac34 + \frac23 = \frac{9}{12} + \frac{8}{12} = \frac{17}{12} = 1\tfrac{5}{12}.
$$

:::theory Stappenplan voor optellen en aftrekken
1. Kies een **gemeenschappelijke noemer**: bij voorkeur het kgv van de noemers, anders het product.
2. Schrijf elke breuk **gelijkwaardig** om naar die noemer (teller en noemer met dezelfde factor).
3. Tel de **tellers** op of trek ze af. De noemer blijft.
4. **Vereenvoudig** en schrijf eventueel om naar een gemengd getal.
5. **Controleer** met een schatting.
:::

:::example Uitgewerkt voorbeeld: $\frac56 + \frac38$
1. Noemers 6 en 8. Veelvouden van 8: 8, 16, 24. 24 is deelbaar door 6, dus het kgv is 24.
2. $\frac56 = \frac{5 \cdot 4}{6 \cdot 4} = \frac{20}{24}$ en $\frac38 = \frac{3 \cdot 3}{8 \cdot 3} = \frac{9}{24}$.
3. $\frac{20}{24} + \frac{9}{24} = \frac{29}{24}$.
4. 29 is een priemgetal, dus vereenvoudigen kan niet. Als gemengd getal: $29 = 1 \cdot 24 + 5$, dus $1\frac{5}{24}$.
5. Schatting: $\frac56$ is bijna 1, $\frac38$ iets minder dan een halve. Samen iets meer dan 1. Klopt.

Met het product $6 \cdot 8 = 48$ als noemer was het ook gelukt: $\frac{40}{48} + \frac{18}{48} = \frac{58}{48} = \frac{29}{24}$. Alleen was er dan achteraf nog een stap vereenvoudigen nodig.
:::

:::example Uitgewerkt voorbeeld: $\frac34 - \frac16$
Het kgv van 4 en 6 is 12.
$$
\frac34 - \frac16 = \frac{9}{12} - \frac{2}{12} = \frac{7}{12}.
$$
Schatting: driekwart min een klein stukje, dus iets meer dan een halve ($\frac{6}{12}$). Klopt.
:::

{{ exercises: 07-013, 07-014, 07-016 }}

## 3. Foutenanalyse: waarom $\frac34 + \frac23$ niet $\frac57$ is

De meest gemaakte fout met breuken, bij scholieren en volwassenen, is "tellers optellen en noemers optellen":

$$
\frac34 + \frac23 \;\overset{?}{=}\; \frac{3 + 2}{4 + 3} = \frac57.
$$

Het is goed om die fout niet alleen te kennen, maar van drie kanten te kunnen **weerleggen**. Dan herken je haar ook in vermomming.

![Drie stroken: 3/4, 2/3 en 5/7 vergeleken; 5/7 is kleiner dan 3/4](/images/diagrams/m07-fout-vijf-zevende.svg "De foute uitkomst 5/7 is kleiner dan 3/4, terwijl je er iets bij hebt opgeteld. Eigen diagram.")

1. **De grootte klopt niet.** $\frac34$ en $\frac23$ zijn allebei meer dan een halve, dus de som is meer dan 1. Maar $\frac57$ is kleiner dan 1, en zelfs kleiner dan $\frac34$: je hebt iets positiefs opgeteld en bent kleiner geëindigd.
2. **Het eenvoudigste tegenvoorbeeld.** Met dezelfde "regel" zou $\frac12 + \frac12 = \frac24 = \frac12$ zijn. Twee halve broden zijn één heel brood, geen half brood.
3. **De eenheden kloppen niet.** De noemer is een soort, geen aantal. Kwarten en derden optellen tot "zevenden" is als 3 kilometer en 2 mijl optellen tot 5 "kilometer-mijl".

:::warning Vergeten gelijknamig te maken
Een verwante fout: wél gelijknamig maken, maar alleen bij één van de breuken. Bijvoorbeeld $\frac34 + \frac23 = \frac{9}{12} + \frac{2}{12}$. Elke breuk moet naar de nieuwe noemer, en elke teller moet mee vermenigvuldigd worden. Controleer na het omschrijven of elke nieuwe breuk nog dezelfde waarde heeft als de oude.
:::

Toch is $\frac{3+2}{4+3}$ niet altijd onzin, en dat verklaart waarom de fout zo hardnekkig is. Een basketballer scoort in de eerste helft 3 van zijn 4 vrije worpen en in de tweede helft 2 van de 3. Over de hele wedstrijd scoorde hij 5 van de 7 worpen: $\frac57$. Hier tel je echt aantallen op, namelijk raak en geprobeerd. Maar je berekent dan geen **som** van twee getallen; je voegt twee **verhoudingen** samen tot een nieuwe verhouding. Dat is de mediant uit de vorige les. Bij "drie kwart liter plus twee derde liter" gaat het om hoeveelheden, en dan moet je echt optellen.

{{ exercise: 07-034 }}

## 4. Gemengde getallen optellen en aftrekken

Met gemengde getallen heb je twee routes. Kies wat het handigst is.

**Route A: gehelen en breuken apart.** Bij optellen is dit meestal het snelst.

:::example Uitgewerkt voorbeeld: $2\frac34 + 1\frac56$
1. Gehelen: $2 + 1 = 3$.
2. Breuken: $\frac34 + \frac56 = \frac{9}{12} + \frac{10}{12} = \frac{19}{12}$.
3. Let op: $\frac{19}{12}$ is meer dan 1. $\frac{19}{12} = 1\frac{7}{12}$.
4. Samen: $3 + 1\frac{7}{12} = 4\frac{7}{12}$.

Wie stap 3 overslaat, schrijft $3\frac{19}{12}$, of erger: $3\frac{7}{12}$, waarbij het extra geheel verdwijnt.
:::

**Route B: alles als onechte breuk.** Bij aftrekken voorkomt dit gedoe met lenen.

:::example Uitgewerkt voorbeeld: $2\frac14 - 1\frac23$
Als onechte breuken: $2\frac14 = \frac94$ en $1\frac23 = \frac53$. Gelijknamig in twaalfden:
$$
\frac94 - \frac53 = \frac{27}{12} - \frac{20}{12} = \frac{7}{12}.
$$
Schatting: $2\frac14 - 1\frac23$ is iets meer dan $2 - 2 = 0$ en iets minder dan $2\frac14 - 1\frac12 = \frac34$. De uitkomst $\frac{7}{12}$ ligt daar netjes tussen.
:::

Route A bij aftrekken vraagt om **lenen**, net als bij kolomsgewijs aftrekken in module 3. Bij $2\frac14 - 1\frac23$ is $\frac14$ te klein om $\frac23$ van af te trekken. Leen één geheel: $2\frac14 = 1 + 1\frac14 = 1\frac54$. Dan is $1\frac54 - 1\frac23 = 0 + \frac{15}{12} - \frac{8}{12} = \frac{7}{12}$.

:::warning Omgekeerd aftrekken
Een veelgemaakte fout bij route A: "$\frac14 - \frac23$ kan niet, dus ik doe $\frac23 - \frac14 = \frac{5}{12}$." Dat geeft $1\frac{5}{12}$ in plaats van $\frac{7}{12}$. Bij aftrekken mag je de volgorde niet omdraaien; als het breukdeel niet toereikend is, moet je lenen.
:::

:::example Uitgewerkt voorbeeld: $5 - 2\frac38$
Van een geheel getal een gemengd getal aftrekken. Leen één geheel en schrijf het als achtsten: $5 = 4\frac88$.
$$
4\tfrac88 - 2\tfrac38 = 2\tfrac58.
$$
Controle door terug op te tellen: $2\frac58 + 2\frac38 = 4 + \frac88 = 5$. Klopt.
:::

{{ exercises: 07-015, 07-035, 07-036 }}

## 5. Schatten en controleren

Breukenrekenen bestaat uit veel kleine stappen, en elke stap is een kans op een vergissing. Een grove schatting vooraf of achteraf vangt de grootste fouten.

- **Rond af naar 0, $\frac12$ of 1.** $\frac{7}{8} + \frac{5}{12} \approx 1 + \frac12 = 1\frac12$. De exacte uitkomst $\frac{31}{24} = 1\frac{7}{24}$ ligt daar in de buurt.
- **Let op de richting.** Een som van positieve breuken is groter dan elk van de termen. Een verschil $a - b$ met positieve $b$ is kleiner dan $a$.
- **Tel terug.** Na een aftrekking $a - b = c$ moet $c + b = a$ gelden.

Een schatting bewijst niet dat je antwoord exact goed is. Maar ze vertelt je wel wanneer het zéker fout is, en dat is bij breuken heel vaak genoeg.
