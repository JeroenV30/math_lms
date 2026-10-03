# Cumulatieve kansen en benaderingen

"Hoogstens drie" betekent $X\le3$; "minder dan drie" betekent $X\le2$
bij gehele aantallen. "Minstens één" bereken je vaak sneller met
$1-P(X=0)$. Formuleer de gebeurtenis vóór je een rekenregel kiest.

## Wanneer een klok een teller benadert

Een binomiale verdeling met veel verwachte successen én mislukkingen is vaak
goed te benaderen door een normale verdeling met
$\mu=np$ en $\sigma=\sqrt{np(1-p)}$. Als voorzichtige vuistregel gebruiken
we $np\ge10$ en $n(1-p)\ge10$. Dit is geen foutgarantie: voor extreme
staarten kunnen exacte berekeningen nog steeds de voorkeur hebben.

Een gehele waarde vertegenwoordigt in de benadering een strook van breedte 1.
De strook bij 60 loopt van 59,5 tot 60,5. Daarom corrigeer je de grens.

| Binomiale gebeurtenis | Normale benadering |
|---|---|
| $X\le k$ | $Y\le k+0{,}5$ |
| $X\ge k$ | $Y\ge k-0{,}5$ |
| $X=k$ | $k-0{,}5\le Y\le k+0{,}5$ |

:::example Honderd muntworpen
Bij $X\sim\operatorname{Bin}(100;0{,}5)$ zijn $\mu=50$ en $\sigma=5$.
Voor $P(X\le60)$ gebruik je de normale grens 60,5, dus
$z=(60{,}5-50)/5=2{,}1$. Daarmee krijg je ongeveer 0,9821.
Zonder correctie gebruik je $z=2$ en krijg je ongeveer 0,9772.
:::

{{ exercises: 37-015, 37-016, 37-017, 37-018 }}

## Een continue meting vraagt geen continuïteitscorrectie

Voor een normaal model van inhoud of lengte gebruik je de opgegeven grens
rechtstreeks. De verschuiving met 0,5 is alleen bedoeld voor een discrete
telling die je met een continue verdeling benadert.

{{ exercise: 37-019 }}

:::warning Een model is geen eigenschap van alle data
Reistijden zijn vaak rechtsscheef; een mengsel van groepen kan twee toppen
hebben. Een normale benadering van een **steekproefgemiddelde** kan toch
bruikbaar zijn. Dat maakt de oorspronkelijke metingen niet normaal verdeeld.
In module 38 onderzoek je dat onderscheid.
:::
