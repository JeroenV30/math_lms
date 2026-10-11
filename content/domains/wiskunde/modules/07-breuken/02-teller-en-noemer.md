# Breuken als getallen

In de introductie zag je een breuk als een stuk brood. In deze les maak je van dat beeld een precies begrip. Je leert wat teller en noemer betekenen, waar breuken op de getallenlijn liggen, wat er gebeurt als de teller groter is dan de noemer, en hoe je wisselt tussen een breuk en een gemengd getal.

## 1. Teller en noemer

:::definition Breuk
Een **breuk** $\frac{a}{b}$ bestaat uit twee gehele getallen, gescheiden door de **breukstreep**:

- de **noemer** $b$ (onder de streep) zegt in hoeveel **gelijke** delen één geheel is verdeeld;
- de **teller** $a$ (boven de streep) zegt hoeveel van die delen je neemt.

De noemer is nooit nul.
:::

De namen zijn goed gekozen. De **noemer** *noemt* de soort deel: bij noemer 4 spreek je van kwarten, bij 8 van achtsten, bij 12 van twaalfden. De **teller** *telt* hoeveel van die delen er zijn. Het Latijn kent hetzelfde onderscheid: *denominator* (wie een naam geeft) en *numerator* (wie telt). Lees $\frac{5}{8}$ daarom als "vijf achtsten": een aantal (vijf) van een soort (achtsten). Je zegt ook "drie derde", "zeven twaalfde": in de spreektaal lopen de meervoudsvormen door elkaar.

Twee woorden in de definitie verdienen nadruk.

:::warning Gelijke delen en hetzelfde geheel
**Gelijke delen.** Snijd een taart in vier stukken van verschillende grootte en neem er drie: dat is niet per se drie kwart taart. Een breuk veronderstelt dat alle delen even groot zijn.

**Hetzelfde geheel.** Een halve grote pizza is meer pizza dan een halve kleine. Als je twee breuken als *hoeveelheden* vergelijkt of optelt, moeten ze naar hetzelfde geheel verwijzen. Als *getallen* is $\frac12$ gewoon $\frac12$.
:::

Experimenteer met de widget. Verander eerst alleen de teller en kijk wat er gebeurt. Zet daarna de teller op 1 en vergroot de noemer stap voor stap. Schakel ook eens over op de cirkel: een taartdiagram laat hetzelfde zien, maar het oog is minder goed in het vergelijken van taartpunten dan van stukken balk.

{{ widget: fraction numerator=3 denominator=4 shape=bar }}

Twee observaties die je straks nodig hebt:

- **Grotere teller, zelfde noemer:** meer delen van dezelfde grootte, dus een grotere breuk. $\frac58 > \frac38$.
- **Grotere noemer, zelfde teller:** het geheel wordt in méér stukken verdeeld, dus elk stuk is kleiner. $\frac15 < \frac13$. Dit voelt voor veel mensen tegenintuïtief, omdat 5 groter is dan 3. Denk aan een taart: wie hem met vijf mensen deelt, krijgt minder dan wie hem met drie deelt.

{{ widget: fraction numerator=1 denominator=6 shape=circle }}

Een breuk met teller 1, zoals $\frac16$, heet een **stambreuk**. Stambreuken zijn de bouwstenen: $\frac56$ is vijf keer de stambreuk $\frac16$. De Egyptenaren rekenden bijna uitsluitend met stambreuken; daarover meer in het historisch intermezzo.

{{ exercise: 07-003 }}

## 2. De breukstreep is een deelteken

Verdeel drie repen chocola eerlijk over vier mensen. Je kunt elke reep in vier stukken breken; dan zijn er twaalf kwarten, en ieder krijgt er drie. Ieder krijgt dus $\frac34$ reep. Maar het antwoord op "drie gedeeld door vier" is ook gewoon $3 : 4$. Conclusie:

$$
\frac{a}{b} = a : b.
$$

Dat verklaart een paar bijzondere gevallen.

- **Teller is een veelvoud van de noemer.** $\frac{8}{4} = 8 : 4 = 2$. Acht kwarten zijn twee gehelen. In het algemeen is $\frac{a}{1} = a$: elk geheel getal is ook een breuk.
- **Teller is nul.** $\frac{0}{5} = 0 : 5 = 0$. Nul vijfden is niets.
- **Noemer is nul.** $\frac{5}{0}$ zou betekenen: verdeel één geheel in nul gelijke delen en neem er vijf. Dat is geen opdracht die je kunt uitvoeren. Ook als deling lukt het niet: er is geen getal dat met 0 vermenigvuldigd 5 oplevert (module 5). Een breuk met noemer 0 **bestaat niet**.

{{ exercise: 07-006 }}

## 3. Breuken op de getallenlijn

Een breuk is ook een **punt op de getallenlijn**. Om $\frac34$ te vinden, verdeel je het stuk van 0 tot 1 in vier gelijke stappen. Elke stap is $\frac14$ lang. Na drie stappen sta je bij $\frac34$.

Niets houdt je tegen om door te lopen. Na vier stappen ben je bij $\frac44 = 1$, na vijf bij $\frac54$, na acht bij $\frac84 = 2$.

![Getallenlijn van 0 tot 2 in kwarten met de punten 3/4 en 5/4](/images/diagrams/m07-breuken-getallenlijn.svg "Kwarten op de getallenlijn: 3/4 ligt vóór 1, 5/4 erna. Eigen diagram.")

Het beeld van de getallenlijn maakt drie dingen duidelijk die het taartbeeld verbergt:

1. Breuken kunnen **groter dan 1** zijn. "Vijf kwart taart" is een vreemde uitdrukking, maar $\frac54$ is een volkomen gewoon getal.
2. Tussen twee gehele getallen liggen **oneindig veel** breuken. Tussen 0 en 1 liggen alle halven, derden, kwarten, ..., duizendsten.
3. Elk punt heeft **veel namen**. Het punt $\frac12$ heet ook $\frac24$, $\frac36$ en $\frac{50}{100}$. Daarover gaat de volgende les.

:::definition Echte en onechte breuk
Een breuk met een teller kleiner dan de noemer, zoals $\frac34$, heet een **echte breuk**: haar waarde ligt tussen 0 en 1. Is de teller groter dan of gelijk aan de noemer, zoals $\frac54$ of $\frac44$, dan heet ze een **onechte breuk**: haar waarde is minstens 1.
:::

Het woord "onecht" is een historisch etiket, geen waardeoordeel. In de algebra werk je juist bij voorkeur met onechte breuken, omdat ze makkelijker rekenen.

## 4. Gemengde getallen

In het dagelijks leven zeg je niet "vijf kwart uur" maar "één uur en een kwartier". Zo'n combinatie van een geheel getal en een echte breuk heet een **gemengd getal**:

$$
\frac{5}{4} = 1 + \frac{1}{4} = 1\tfrac{1}{4}.
$$

Let op de schrijfwijze: $1\frac14$ betekent $1 + \frac14$, **niet** $1 \times \frac14$. Tussen het gehele getal en de breuk staat een onzichtbaar plusteken. In de algebra, waar naast elkaar schrijven vermenigvuldigen betekent, vermijd je gemengde getallen daarom.

### Van onechte breuk naar gemengd getal

Een onechte breuk omzetten is precies een **deling met rest** uit module 5. Bij $\frac{17}{5}$ vraag je: hoeveel hele vijftallen passen in 17, en wat blijft over?

$$
17 = 3 \times 5 + 2, \qquad\text{dus}\qquad \frac{17}{5} = 3 + \frac{2}{5} = 3\tfrac{2}{5}.
$$

Het **quotiënt** wordt het gehele deel, de **rest** wordt de teller van de breuk, de noemer blijft.

### Van gemengd getal naar onechte breuk

Andersom: hoeveel vijfden zijn $3\frac25$? Drie gehelen zijn elk vijf vijfden, samen $3 \times 5 = 15$ vijfden. Daar komen er nog twee bij: 17 vijfden.

$$
3\tfrac{2}{5} = \frac{3 \times 5 + 2}{5} = \frac{17}{5}.
$$

:::example Uitgewerkt voorbeeld: $2\frac13$ en $\frac{29}{8}$
**$2\frac13$ als breuk.** Twee gehelen zijn zes derden. Samen met één derde: zeven derden.
$$
2\tfrac13 = \frac{2 \times 3 + 1}{3} = \frac{7}{3}.
$$
Controle: $7 : 3 = 2$ rest 1, en dat geeft terug $2\frac13$.

**$\frac{29}{8}$ als gemengd getal.** De tafel van 8: $3 \times 8 = 24$, $4 \times 8 = 32$ is te veel. Dus 3 gehelen, en $29 - 24 = 5$ achtsten blijven over.
$$
\frac{29}{8} = 3\tfrac58.
$$
Controle met de getallenlijn: $\frac{29}{8}$ ligt tussen 3 en 4, iets voorbij het midden ($3\frac48$). Klopt.
:::

:::warning Typische fout
Bij $2\frac13$ rekenen sommigen $\frac{2 + 1}{3} = 1$ of $\frac{2 \times 1 + 3}{3} = \frac53$. Beide uitkomsten zijn kleiner dan 2, terwijl $2\frac13$ duidelijk groter is dan 2. Een snelle grootte-controle vangt deze fout: het gehele deel moet terugkomen als je de breuk weer omzet.
:::

{{ exercises: 07-004, 07-005, 07-031 }}

## 5. Waar ligt een breuk ongeveer?

Bij het schatten en controleren wil je snel weten tussen welke gehele getallen een breuk ligt. Ook dat is een deling met rest. $\frac{47}{6}$: $7 \times 6 = 42$ en $8 \times 6 = 48$, dus $\frac{47}{6} = 7\frac56$. Het getal ligt tussen 7 en 8, vlak bij 8.

Zet in de widget hieronder het punt op het gehele getal dat direct **links** van $\frac{47}{6}$ ligt. Bedenk daarna: hoeveel zesden moet je vanaf dat punt nog naar rechts?

{{ widget: number-line min=0 max=10 value=5 }}

Drie vuistregels voor het schatten van een breuk:

- **Vergelijk de teller met de noemer.** Teller kleiner dan noemer: onder 1. Gelijk: precies 1. Groter: boven 1.
- **Vergelijk de teller met de halve noemer.** $\frac{7}{16}$: de helft van 16 is 8, en 7 is net minder. Dus net onder $\frac12$.
- **Teller bijna gelijk aan noemer:** dicht bij 1. $\frac{99}{100}$ en $\frac{11}{12}$ liggen allebei net onder 1.

Deze referentiepunten (0, $\frac12$ en 1) gebruik je in de volgende les ook om breuken snel te vergelijken.

{{ exercise: 07-032 }}
