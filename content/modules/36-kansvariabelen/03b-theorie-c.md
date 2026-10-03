# Continue variabelen en rekenregels

Een wachttijd of lengte modelleer je vaak als continu: tussen twee mogelijke
waarden liggen weer andere waarden. Een dichtheid $f(x)$ geeft geen kans op
één exact getal. De kans ontstaat pas als je oppervlakte neemt:

$$
P(a\le X\le b)=\int_a^b f(x)\,dx.
$$

De dichtheid is niet-negatief en de totale oppervlakte is 1. Een dichtheid
mag boven 1 liggen: bij een uniforme verdeling op [0; 0,1] is de hoogte 10.
Het product van hoogte en breedte is nog steeds 1.

:::example Een uniforme wachttijd
Een model neemt alle tijdstippen tussen 0 en 4 minuten even waarschijnlijk.
De dichtheid is $1/4$ op dat interval en nul daarbuiten.
$P(1\le X\le3)=(3-1)/4=0{,}5$. Voor $X=2$ is de breedte nul, dus de
kans ook nul. Dat betekent niet dat een waargenomen wachttijd onmogelijk is:
een meting met beperkte precisie staat in werkelijkheid voor een klein interval.
:::

{{ exercises: 36-014, 36-015, 36-016 }}

Voor een continue dichtheid bereken je
$E(X)=\int x f(x)\,dx$ en $E(X^2)=\int x^2 f(x)\,dx$.
Bij de uniforme verdeling op [0;4] is $E(X)=2$ en
$\operatorname{Var}(X)=16/12=4/3$.

## Verschuiven en schalen

Als $Y=aX+b$, dan geldt
$E(Y)=aE(X)+b$ en $\operatorname{Var}(Y)=a^2\operatorname{Var}(X)$.
Een vaste toevoeging verandert de spreiding niet. Een schaalfactor vergroot
de standaardafwijking met $|a|$ en de variantie met $a^2$.

{{ exercises: 36-012, 36-013 }}

:::example Twee onzekere kostenposten
Voor kosten $X$ en $Y$ geldt altijd $E(X+Y)=E(X)+E(Y)$ als de verwachtingen
bestaan. Voor de variantie geldt in het algemeen
$$
\operatorname{Var}(X+Y)=\operatorname{Var}(X)+\operatorname{Var}(Y)
+2\operatorname{Cov}(X,Y).
$$
Bij onafhankelijke variabelen is de covariantie nul. Dan mag je varianties
optellen. Kosten die door dezelfde prijsstijging worden beïnvloed, zijn meestal
afhankelijk; dan is alleen optellen onjuist.
:::

{{ exercises: 36-017, 36-018, 36-019 }}
