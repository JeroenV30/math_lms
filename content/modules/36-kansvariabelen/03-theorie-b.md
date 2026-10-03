# Verwachtingswaarde en spreiding

De verwachtingswaarde is een gewogen gemiddelde van mogelijke waarden, waarbij
de kansen de gewichten zijn. Voor een discrete variabele:

$$
E(X)=\sum_x xP(X=x).
$$

:::example Storingen per dag
Bij waarden 0, 1 en 2 met kansen 0,2; 0,5 en 0,3 geldt
$E(X)=0\cdot0{,}2+1\cdot0{,}5+2\cdot0{,}3=1{,}1$ storingen.
Geen enkele dag heeft 1,1 storing. Dit is een gemiddelde over herhalingen.
:::

{{ exercise: 36-005 }}

## Het kwadraat van het gemiddelde is geen gemiddelde van kwadraten

Voor dezelfde tabel is
$E(X^2)=0^2\cdot0{,}2+1^2\cdot0{,}5+2^2\cdot0{,}3=1{,}7$.
Daarentegen is $[E(X)]^2=1{,}21$. De volgorde van middelen en kwadrateren
maakt verschil. Dat verschil is juist de variantie.

:::formula Variantie en standaardafwijking
$$
\operatorname{Var}(X)=E\bigl((X-E(X))^2\bigr)
=E(X^2)-[E(X)]^2,\qquad
\sigma_X=\sqrt{\operatorname{Var}(X)}.
$$
Voor de storingstabel: variantie $1{,}7-1{,}21=0{,}49$ en standaardafwijking
$0{,}7$. De variantie heeft een gekwadrateerde eenheid; de standaardafwijking
heeft dezelfde eenheid als $X$.
:::

{{ exercises: 36-006, 36-007, 36-008 }}

Deze variantie hoort bij de volledige theoretische verdeling. Je deelt hier
niet door $n-1$: je schat geen populatievariantie uit een steekproef, maar
rekent exact met gegeven kansen. Dat is het verschil met de steekproefformule.

## Uitbetaling en nettowinst

Een lot met € 20 uitbetaling bij kans 0,1 heeft verwachting € 2. Kost het
€ 3, dan is de verwachte nettowinst € −1. De mogelijke nettowinsten zijn
echter € 17 en € −3. Verwachte waarde zegt niets over wat één lot oplevert,
en dezelfde verwachting kan bij heel verschillende risico's horen.

{{ exercises: 36-009, 36-010, 36-011 }}

:::warning Niet iedere verdeling heeft een eindige verwachting
Bij de eindige tabellen in deze module bestaan verwachting en variantie altijd.
Bij oneindige verdelingen moet je controleren of de benodigde sommen of
integralen convergeren. Een rekenregel mag je alleen gebruiken als de
betrokken verwachtingen bestaan.
:::
