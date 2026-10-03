# Van toevalsproces naar kansverdeling

Je gooit twee munten. De uitkomst kan KK, KV, VK of VV zijn. Wil je alleen weten
hoeveel keer kop verschijnt, dan vertaal je elke uitkomst naar een getal.

:::definition Kansvariabele
Een kansvariabele $X$ is een functie op de uitkomstenruimte. Bij dit voorbeeld
geldt $X(\mathrm{KK})=2$, $X(\mathrm{KV})=X(\mathrm{VK})=1$ en
$X(\mathrm{VV})=0$. De hoofdletter $X$ beschrijft het onzekere getal; een
kleine letter $x$ duidt een mogelijke waarde aan.
:::

Als beide munten eerlijk en onafhankelijk zijn, zijn de vier uitkomsten even
waarschijnlijk. De drie waarden van $X$ zijn dat niet.

| $x$ | 0 | 1 | 2 |
|---|---|---|---|
| $P(X=x)$ | 1/4 | 1/2 | 1/4 |

De waarde 1 kan op twee manieren ontstaan. Dit onderscheid tussen uitkomsten
en waarden voorkomt dat je ten onrechte iedere waarde kans 1/3 geeft.

{{ exercises: 36-001, 36-002 }}

## Een geldige verdeling

Een discrete kansvariabele heeft afzonderlijke mogelijke waarden, eindig of
aftelbaar veel. De kansfunctie geeft voor elke waarde haar kans. Iedere kans
ligt tussen 0 en 1 en alle kansen tellen op tot 1. Een tabel die niet aan die
eisen voldoet, is geen kansverdeling.

:::example Een onbekende kans aanvullen
Een onderhoudsbedrijf modelleert het aantal storingen op een dag:
$P(X=0)=0{,}2$, $P(X=1)=0{,}5$, $P(X=2)=p$. Omdat de som 1 moet zijn,
is $p=0{,}3$. De kans op minstens één storing is $0{,}5+0{,}3=0{,}8$.
Je kunt ook de complementregel gebruiken: $1-P(X=0)=0{,}8$.
:::

{{ exercises: 36-003, 36-004 }}

## Cumulatieve kansen

De verdelingsfunctie $F(x)=P(X\le x)$ telt alle kansen tot en met $x$ op.
In de storingstabel is $F(1)=0{,}7$. Voor een discrete variabele zijn de
sprongen in $F$ precies de kansen bij de afzonderlijke waarden.

Let op de grens: $P(X<1)=P(X=0)=0{,}2$, maar $P(X\le1)=0{,}7$.
Een kleine wijziging in de ongelijkheid kan dus een groot verschil maken.

Een modeltabel is geen lijst van werkelijk waargenomen dagen. De kansen kunnen
worden geschat uit eerdere gegevens, maar ook uit een theoretisch toevalsproces
komen. Vermeld altijd hoe je eraan bent gekomen.
