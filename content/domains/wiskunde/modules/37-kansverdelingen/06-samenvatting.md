# Samenvatting — herkennen, standaardiseren, controleren

Je hebt in deze module drie verdelingsfamilies leren kennen en gezien hoe ze samenhangen. De binomiale verdeling telt successen in een vast aantal onafhankelijke proeven met dezelfde kans. De Poisson-verdeling telt zeldzame gebeurtenissen en is de limiet van de binomiale verdeling bij kleine $p$. De normale verdeling modelleert een continue, klokvormige variabele en benadert de binomiale verdeling bij veel proeven. Het zijn verschillende modellen, ook wanneer de ene de andere benadert.

:::summary Je gereedschap
- Binomiale voorwaarden: vast $n$, twee uitkomsten, constante $p$, onafhankelijk.
- Exacte binomiale kans: $P(X=k)=\binom nk p^k(1-p)^{n-k}$.
- Binomiale verwachting en variantie: $E(X)=np$ en $\operatorname{Var}(X)=np(1-p)$.
- Cumulatief: $P(X\ge k)=1-P(X\le k-1)$; "minstens één" is $1-(1-p)^n$.
- Poisson: $P(X=k)=e^{-\lambda}\lambda^k/k!$ met $E=\operatorname{Var}=\lambda$; benadering van $\operatorname{Bin}(n,p)$ met $\lambda=np$ bij kleine $p$.
- Normale verdeling: $X\sim N(\mu,\sigma^2)$; 68–95–99,7-regel; $z=(x-\mu)/\sigma$.
- Tabel en omgekeerd: $\Phi(z)$ is een linkerkans; rechts is $1-\Phi(z)$; tussen is een verschil; grens bij kans: $x=\mu+z\sigma$.
- Normale benadering van $\operatorname{Bin}(n,p)$: $\mu=np$, $\sigma^2=np(1-p)$, bij $np\ge5$ en $n(1-p)\ge5$ (of $np(1-p)\ge10$), met continuïteitscorrectie.
- Som van onafhankelijke normale variabelen: verwachtingen optellen, varianties optellen (ook bij een verschil).
:::

## Wat je nu moet beheersen

- Je controleert de vier voorwaarden van een binomiaal model, en je herkent situaties waar ze niet gelden (trekken zonder teruglegging uit een kleine populatie, clusters, een niet-vast aantal proeven).
- Je berekent exacte, cumulatieve en complementaire binomiale kansen, en je vertaalt "hoogstens", "minder dan", "minstens" en "meer dan" correct naar ongelijkheden voor gehele waarden.
- Je berekent verwachting en spreiding van een binomiale en een Poisson-variabele.
- Je standaardiseert, leest een tabel af voor links-, rechts- en tussenkansen, en bepaalt een grenswaarde bij een gegeven kans.
- Je past de normale benadering toe, met controle van de voorwaarden en met de continuïteitscorrectie in de juiste richting.
- Je kent de beperkingen: de benadering is minder goed in de staarten en voor scheve verdelingen.

## Veelgemaakte fouten, nog één keer

| Fout | Juist |
|---|---|
| $P(X\ge k)=1-P(X\le k)$ | $P(X\ge k)=1-P(X\le k-1)$ |
| delen door $\sigma^2$ bij de z-score | delen door $\sigma$ |
| continuïteitscorrectie de verkeerde kant op | $X\le k$ geeft $k+0{,}5$; $X\ge k$ geeft $k-0{,}5$ |
| binomiaal bij trekken zonder teruglegging uit een kleine populatie | hypergeometrisch, of eerst controleren of de populatie groot genoeg is |
| de tabelwaarde als rechterkans lezen | de tabel geeft de linkerkans $\Phi(z)$ |
| standaardafwijkingen optellen bij een som | varianties optellen, dan de wortel nemen |

Rond pas op het einde af. Een kans is een getal tussen 0 en 1; een percentage is dat getal maal 100. Een centrale 95%-band voor individuele metingen is iets anders dan onzekerheid over het gemiddelde. Dat laatste leer je in de volgende module. Wie dit hoofdstuk beheerst, kan daar met de centrale limietstelling direct verder.

{{ quiz }}
