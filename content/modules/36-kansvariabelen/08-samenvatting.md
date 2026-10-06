# Samenvatting — een getal vóór de waarneming

Een kansvariabele koppelt een getal aan een toevalsuitkomst. Een discrete
verdeling geeft kansen bij afzonderlijke waarden; een continue dichtheid geeft
kansen als oppervlakte. Een dichtheid is geen puntkans.

## De kern op een rij

**Kansvariabele en verdeling.** $X:\Omega\to\mathbb{R}$. Discreet: kansfunctie
$p(x)=P(X=x)\ge0$ met $\sum p(x)=1$. Continu: dichtheid $f(x)\ge0$ met
$\int f=1$ en $P(a\le X\le b)=\int_a^b f$. Voor beide: $F(x)=P(X\le x)$ en
$P(a<X\le b)=F(b)-F(a)$. Bij een continue variabele is $P(X=a)=0$.

**Verwachting en spreiding.** $E(X)=\sum xP(X=x)$ of $\int xf(x)\,dx$, het
zwaartepunt. $\operatorname{Var}(X)=E(X^2)-[E(X)]^2\ge0$ en
$\sigma_X=\sqrt{\operatorname{Var}(X)}$. Uniform op $[a;b]$: $E=\tfrac{a+b}2$,
$\operatorname{Var}=\tfrac{(b-a)^2}{12}$. Exponentieel met $\lambda$: $E=1/\lambda$,
$\operatorname{Var}=1/\lambda^2$, $F(x)=1-e^{-\lambda x}$.

**Rekenregels.** $E(aX+b)=aE(X)+b$ en $\operatorname{Var}(aX+b)=a^2\operatorname{Var}(X)$.
$E(X+Y)=E(X)+E(Y)$ altijd; $\operatorname{Var}(X\pm Y)=\operatorname{Var}(X)+\operatorname{Var}(Y)$
alleen bij onafhankelijkheid. Het gemiddelde van $n$ onafhankelijke waarnemingen
heeft verwachting $\mu$ en standaardafwijking $\sigma/\sqrt n$.

:::summary Wat je nu moet beheersen
- Kansen controleren op geldigheid en gebeurteniskansen optellen.
- $E(X)$ als gewogen gemiddelde berekenen.
- $\operatorname{Var}(X)=E(X^2)-[E(X)]^2$ en de standaardafwijking berekenen.
- Kans en dichtheid, en theoretische variantie en steekproefvariantie onderscheiden.
- Lineaire transformaties correct verwerken.
- Benoemen wanneer varianties mogen worden opgeteld.
- Kansen bij een dichtheid als oppervlakte berekenen en verklaren waarom $P(X=a)=0$.
- De wortel-$n$-wet toepassen op een gemiddelde of som.
:::

Je kunt een verwachtingswaarde hebben die geen mogelijke waarneming is. Je kunt
ook twee modellen met dezelfde verwachting en een heel verschillend risico
hebben. Houd gemiddelde en spreiding daarom altijd naast elkaar.

Historisch zijn dit de stappen die je hebt gezien: Pascal en Fermat rekenden in
1654 de eerlijke verdeling van een onderbroken spel uit; Huygens maakte er in
1657 een gedrukte theorie van de waarde van een kans van; Bernoulli verbond
kans en frequentie in 1713; Kolmogorov gaf in 1933 de formele basis waarin een
kansvariabele een functie op de uitkomstenruimte is. In de volgende module bekijk je
families van verdelingen (binomiaal, normaal, exponentieel) die al deze
begrippen systematisch gebruiken.

{{ quiz }}
