# Of, en en niet

Tot nu toe bekeken we één gebeurtenis tegelijk. Echte vragen combineren gebeurtenissen: de kans op "harten *of* een heer", op "regen *en* storm", op "*niet* één zes in vier worpen". In deze les leer je drie bouwstenen: het complement (niet), de som (of) en het product (en). Het mooie is dat ze samen vrijwel elke eenvoudige kansvraag oplossen, mits je goed oplet op de voorwaarden.

## Niet: het complement

Het **complement** van een gebeurtenis $A$ is de gebeurtenis "$A$ treedt *niet* op". Je schrijft $A^c$. Omdat elke uitkomst óf in $A$ óf in $A^c$ zit, tellen hun kansen op tot 1:

$$
P(A^c)=1-P(A).
$$

Bij een dobbelsteen is de kans op "geen zes" gelijk aan $1-\frac16=\frac56$. Dat lijkt een triviale rekenregel, maar hij is een van de krachtigste trucs uit het vak. Soms is het complement namelijk veel makkelijker uit te rekenen dan de gebeurtenis zelf.

:::example Minstens één kop
Je gooit drie eerlijke munten. Wat is de kans op **minstens één kop**?

*Direct* zou je de gevallen met 1, 2 en 3 keer kop moeten tellen: $3+3+1=7$ van de 8 reeksen. Dat kan, maar het wordt snel vervelend.

*Via het complement:* het complement van "minstens één kop" is "geen enkele kop", dus MMM. Dat is één reeks van 8: kans $\frac18$. Dus

$$
P(\text{minstens één kop})=1-\frac18=\frac78.
$$

Het principe is algemeen: bij **‘minstens één’** denk je meteen aan het complement ‘geen enkele’.
:::

{{ exercises: 23-013, 23-016 }}

## Of: de somregel

Wat is de kans op "een even getal *of* een zes" bij één worp? Alle zes de uitkomsten zijn even waarschijnlijk; de gebeurtenis ‘even of zes’ bestaat uit $\{2,4,6\}$ (de zes zit er al in!). Dat zijn drie van de zes, kans $\frac12$.

Als je naïef $P(\text{even})+P(\text{zes})=\frac36+\frac16=\frac46$ zou nemen, krijg je een te grote kans, want de zes is dubbel geteld: één keer bij ‘even’ en één keer bij ‘zes’. Hier zie je de kernzaak. In de kansrekening betekent ‘of’ **inclusief**: $A$ of $B$ of allebei. Het is de **vereniging** $A\cup B$.

### Uitsluitende gebeurtenissen

Als twee gebeurtenissen niet tegelijk kunnen optreden, zijn ze **elkaar uitsluitend** (de verzamelingen hebben geen gemeenschappelijke uitkomsten). Dan is er geen overlap die je dubbel kunt tellen en mag je gewoon optellen:

$$
P(A\cup B)=P(A)+P(B)\qquad\text{(als $A$ en $B$ elkaar uitsluiten).}
$$

De kans op "één of zes" bij een worp is $\frac16+\frac16=\frac13$.

### Niet-uitsluitende gebeurtenissen

Als $A$ en $B$ wel tegelijk kunnen optreden, telt de **overlap** $A\cap B$ tweemaal als je $P(A)$ en $P(B)$ optelt. Je trekt hem daarom één keer af:

$$
P(A\cup B)=P(A)+P(B)-P(A\cap B).
$$

Dit heet in zijn algemene vorm het principe van **inclusie en exclusie**; bij twee gebeurtenissen is het precies deze formule.

![Venndiagram met A is even en B is groter dan 3 bij één dobbelsteen; de overlap bevat 4 en 6](/images/diagrams/m23-venn.svg "A (even) en B (groter dan 3): de overlap {4, 6} wordt bij optellen tweemaal geteld.")

:::example Even of groter dan 3
Bij een eerlijke dobbelsteen is $A$ = ‘even’ = $\{2,4,6\}$ en $B$ = ‘groter dan 3’ = $\{4,5,6\}$. De overlap is $A\cap B=\{4,6\}$.

$$
P(A\cup B)=\frac36+\frac36-\frac26=\frac46=\frac23.
$$

Controle door te tellen: de vereniging is $\{2,4,5,6\}$, vier van de zes. Klopt.
:::

:::example Harten of heer
Je trekt één kaart uit een gewoon spel van 52. Wat is de kans op harten of een heer?

Er zijn 13 harten en 4 heren. De harten-heer zit in beide groepen: één kaart. Dus

$$
P=\frac{13}{52}+\frac{4}{52}-\frac{1}{52}=\frac{16}{52}=\frac{4}{13}.
$$

Controle: $13+4-1=16$ unieke kaarten (13 harten plus 3 andere heren). Het is dus de moeite waard om overlap te zoeken vóór je optelt.
:::

{{ exercises: 23-014, 23-015, 23-038, 23-039 }}

## En: de productregel voor kansen

Wat is de kans op "kop met de eerste munt *en* zes met de dobbelsteen"? Twee losse experimenten, en de uitkomst van het ene zegt niets over het andere. De uitkomstenruimte heeft $2\times6=12$ even waarschijnlijke paren, en precies één daarvan is gunstig: kans $\frac1{12}=\frac12\times\frac16$. De kans op de combinatie is het product van de kansen.

Dat is geen toeval. Twee gebeurtenissen heten **onafhankelijk** als kennis over de ene de kans op de andere niet verandert. Voor onafhankelijke gebeurtenissen geldt

$$
P(A\cap B)=P(A)\times P(B).
$$

Bij drie of meer onafhankelijke gebeurtenissen vermenigvuldig je alle kansen. De kans op drie keer zes bij drie worpen is $\left(\frac16\right)^3=\frac1{216}$.

:::example Minstens één zes in vier worpen
Nu kunnen we de denkvraag uit les 1 beantwoorden: vier keer één dobbelsteen, wat is de kans op minstens één zes?

**Stap 1 – complement.** Het complement is ‘geen enkele zes in vier worpen’.

**Stap 2 – per worp.** Per worp is de kans op geen zes $\frac56$. De worpen zijn onafhankelijk.

**Stap 3 – product.** $P(\text{geen zes})=\left(\frac56\right)^4=\frac{625}{1296}\approx0{,}482$.

**Stap 4 – terug.** $P(\text{minstens één zes})=1-\frac{625}{1296}=\frac{671}{1296}\approx0{,}518$.

De kans is dus iets groter dan een half. Wie op "minstens één zes" wedt, wint op de lange duur: precies wat de Méré ervoer.
:::

Een veelgemaakte fout is hier: ‘vier worpen, elk $\frac16$, dus $4\times\frac16=\frac46$’. Dat is de som van vier kansen die elkaar *niet* uitsluiten (je kunt twee zessen gooien), zodat je de overlap meerdere malen telt. Met één worp is $\frac16$ juist, met zes worpen zou deze redenering een kans van 1 geven, en dat is duidelijk onzin: zes worpen garanderen geen zes.

:::warning Optellen of vermenigvuldigen?
- **‘Of’ bij uitsluitende gebeurtenissen:** optellen.
- **‘Of’ bij gebeurtenissen met overlap:** optellen en de overlap aftrekken.
- **‘En’ bij onafhankelijke gebeurtenissen:** vermenigvuldigen.
- **‘Minstens één’:** vrijwel altijd het complement gebruiken.

Wie de kansen van *onafhankelijke* gebeurtenissen optelt waar vermenigvuldigd moet worden, krijgt vaak kansen boven 1. Dat is je alarmsignaal.
:::

{{ exercises: 23-040 }}

## Uitsluitend is niet hetzelfde als onafhankelijk

De twee begrippen worden vaak door elkaar gehaald, omdat in beide gevallen de gebeurtenissen "niets met elkaar te maken hebben". Dat klopt niet.

Bij één worp met één dobbelsteen sluiten ‘één’ en ‘zes’ elkaar uit: ze kunnen niet tegelijk. Weet je dat de uitkomst één is, dan is de kans op zes opeens 0. Je kennis over de ene gebeurtenis verandert de kans op de andere. Dat is het tegendeel van onafhankelijk. Twee gebeurtenissen met positieve kans die elkaar uitsluiten zijn dus altijd **afhankelijk**.

Omgekeerd zijn onafhankelijke gebeurtenissen (met positieve kans) *nooit* uitsluitend. De kans op kop bij een eerste worp en kop bij de tweede is $\frac14$, niet 0: ze kunnen wel tegelijk optreden.

| | uitsluitend | onafhankelijk |
|---|---|---|
| Betekenis | kunnen niet samen optreden | kennis van de één verandert de kans op de ander niet |
| Kans op ‘en’ | 0 | $P(A)\times P(B)$ |
| Kans op ‘of’ | $P(A)+P(B)$ | $P(A)+P(B)-P(A)P(B)$ |

De laatste regel volgt uit de somformule met de productregel; je mag hem gebruiken als $A$ en $B$ onafhankelijk zijn.

:::example Of bij onafhankelijkheid
Twee onafhankelijke schakelaars werken elk met kans $0{,}9$. De kans dat minstens één werkt, is het complement van "beide falen": $1-0{,}1\times0{,}1=0{,}99$. Via de somformule: $0{,}9+0{,}9-0{,}9\times0{,}9=0{,}99$. Beide wegen leveren hetzelfde.
:::

Wie "onafhankelijk" gebruikt, moet daar een reden voor hebben: een andere worp, een nieuwe trekking *met* terugleggen, twee verschillende dobbelstenen. In les 5 zie je wat er gebeurt als de afhankelijkheid wél meespeelt.

{{ exercises: 23-017 }}
