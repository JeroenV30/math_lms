# Basisfrequenties, odds en nieuw bewijs

In het sensorvoorbeeld is de basisfrequentie van defecten 5%. Zelfs een
informatief alarm laat veel ruimte voor goede onderdelen omdat die vóór
het alarm veel talrijker zijn. In de vorige les zag je hetzelfde bij de
medische test. Je moet niet alleen naar de kracht van het signaal kijken, maar ook
naar de beginsituatie.

Als je hetzelfde signaal in een populatie met een andere defectkans gebruikt,
verandert de posterior. Een prior moet daarom bij de onderzochte situatie
passen. Een oude of niet-vergelijkbare basisfrequentie kan misleiden.

In deze les maak je het bijwerken slimmer. Met **odds** wordt de regel van Bayes een
vermenigvuldiging, en dat maakt het bijwerken met meerdere stukken bewijs
overzichtelijk.

## Odds maken opeenvolgend bijwerken eenvoudig

Odds zijn $p/(1-p)$. Kans 0,2 geeft odds 0,25, ook geschreven als 1:4: tegenover
één geval voor staan vier gevallen tegen. Om terug te gaan naar kans gebruik je
$p=o/(1+o)$. Odds en kans bevatten dezelfde informatie, maar het zijn
verschillende getallen. Kans 0,5 geeft odds 1; kans 0,9 geeft odds 9; en bij
kans 0,99 zijn de odds 99. Hoe dichter de kans bij 1 komt, hoe sneller de odds
groeien.

Voor informatie D is de likelihoodratio

$$
LR=\frac{P(D\mid H)}{P(D\mid\neg H)}.
$$

Dat is de verhouding tussen hoe waarschijnlijk de waarneming is als $H$ geldt en
hoe waarschijnlijk ze is als $H$ niet geldt. Dan is

$$
\underbrace{\frac{P(H\mid D)}{P(\neg H\mid D)}}_{\text{posterior odds}}
=\underbrace{\frac{P(H)}{P(\neg H)}}_{\text{prior odds}}\times LR.
$$

Je ziet dit direct uit Bayes' regel voor $H$ en voor $\neg H$ en delen: de noemer
$P(D)$ valt weg, en er blijft over wat je hierboven ziet. Een LR boven 1
ondersteunt H, een LR onder 1 ondersteunt het alternatief; LR=1 verandert de odds
niet. Bij LR=1 is de waarneming even waarschijnlijk onder beide hypothesen en
levert dus geen informatie.

:::example Eén update
Prior kans 0,2 geeft odds 0,25. Likelihoods 0,8 en 0,1 geven LR=8.
De posterior odds zijn 2, dus de posterior kans is $2/3$.
Dat is dezelfde uitkomst als rechtstreeks met Bayes’ breuk rekenen:
$0{,}16/0{,}24=2/3$.
:::

{{ exercises: 41-009, 41-010, 41-011, 41-012 }}

:::example De medische test met odds
Prevalentie 1% geeft prior odds $0{,}01/0{,}99=1/99$. Bij sensitiviteit 90% en
specificiteit 91% is de likelihoodratio van een positieve uitslag
$$
LR_+=\frac{0{,}90}{1-0{,}91}=\frac{0{,}90}{0{,}09}=10.
$$
De posterior odds zijn $\frac{1}{99}\cdot10=\frac{10}{99}$. De kans is
$\frac{10/99}{1+10/99}=\frac{10}{109}$, precies de PPV uit de tabel. De
berekening is korter, en je ziet in één oogopslag wat de test doet: hij maakt de
odds tien keer zo groot, maar tien keer 1:99 is nog altijd een kleine kans.
:::

De odds-vorm laat ook zien hoe je een positieve en een negatieve uitslag
vergelijkt. Voor een negatieve uitslag is de likelihoodratio
$LR_-=P(-\mid\text{ziek})/P(-\mid\text{gezond})=0{,}10/0{,}91=10/91$, een getal
onder 1.

{{ exercises: 41-030, 41-031, 41-032 }}

## Twee signalen

Na een update kan de posterior de prior voor de volgende update zijn. Bij
**opeenvolgend bijwerken** werkt dit zo. Begin met prior odds, vermenigvuldig met
de LR van het eerste bewijs, en gebruik het resultaat als prior voor het tweede
bewijs. Je mag losse likelihoodratio's vermenigvuldigen wanneer de signalen
**conditioneel onafhankelijk onder beide hypothesen** zijn. Dat wil zeggen:
**gegeven** dat H waar is (en ook gegeven dat H onwaar is) mogen de uitkomsten van
de twee tests niet meer met elkaar samenhangen. Alleen zeggen "de sensoren zijn
verschillend" onderbouwt dat niet.

:::example Twee positieve tests
Neem de medische test van hierboven (LR=10) met prior odds $1/99$. Na de eerste
positieve uitslag zijn de odds $10/99$, een kans van $10/109\approx0{,}092$. Een
tweede, onafhankelijke test van hetzelfde type wijst ook positief. De odds
worden $\frac{10}{99}\cdot10=\frac{100}{99}$ en de kans
$\frac{100/99}{1+100/99}=\frac{100}{199}\approx0{,}5025$. Twee positieve
uitslagen brengen de kans van ongeveer 9% naar ongeveer 50%.
:::

Een gekopieerd alarm bevat geen nieuwe informatie. Twee sensoren die door
dezelfde storing worden beïnvloed, kunnen afhankelijk zijn. Hetzelfde geldt voor
een herhaalde test bij dezelfde patiënt als de test steeds om dezelfde reden
fout gaat, bijvoorbeeld bij een eigenschap van het monster die niet verandert.
Gebruik dan de gezamenlijke likelihood of een model dat die afhankelijkheid
beschrijft.

{{ exercises: 41-013, 41-014, 41-033, 41-034, 41-035 }}

Bayes geeft een consistente update **binnen** een gekozen model. Zij maakt
onjuiste uitgangskansen of een verkeerd datamodel niet automatisch juist.

:::warning Veelgemaakte fouten
Vijf valkuilen komen steeds terug. Je stelt $P(\text{ziek}\mid+)$ gelijk aan de
sensitiviteit. Je vergeet de prevalentie, en rekent dus alsof ziek en gezond even
vaak voorkomen. Je haalt odds en kansen door elkaar (odds 2 is kans $2/3$, niet
$0{,}2$). Je negeert de prior en kijkt alleen naar de likelihood. En je gebruikt
de posterior van stap 1 niet als prior van stap 2, maar begint bij de tweede stap
opnieuw met de oorspronkelijke prior en verliest daarmee het eerste bewijs.
:::
