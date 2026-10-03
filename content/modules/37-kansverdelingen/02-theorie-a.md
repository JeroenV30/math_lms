# Successen tellen: de binomiale verdeling

Een Bernoulli-proef heeft twee uitkomsten: succes met kans $p$ en mislukking
met kans $1-p$. Het woord succes betekent alleen "de categorie die je telt".
Een defect product kan dus een succes heten in het rekenmodel.

:::definition Binomiaal model
$X\sim\operatorname{Bin}(n,p)$ telt successen in $n$ proeven. Het aantal
proeven ligt vast, de proeven zijn onafhankelijk en de succeskans is telkens
dezelfde. Mogelijke waarden zijn 0 tot en met $n$.
:::

{{ exercise: 37-001 }}

Een specifieke volgorde met $k$ successen heeft kans $p^k(1-p)^{n-k}$.
Je kunt die successen op $\binom nk=n!/(k!(n-k)!)$ manieren plaatsen.
Daarom:

$$
P(X=k)=\binom nk p^k(1-p)^{n-k}.
$$

:::example Vier muntworpen
Bij $n=4$, $p=0{,}5$ is de kans op twee successen
$\binom42(0{,}5)^2(0{,}5)^2=6/16=0{,}375$.
De factor 6 telt KKMM, KMKM, KMMK, MKKM, MKMK en MMKK.
Zonder deze factor bereken je de kans op slechts één specifieke volgorde.
:::

{{ exercises: 37-002, 37-003, 37-004 }}

## Verwachting en spreiding

Het aantal successen is een som van $n$ onafhankelijke 0/1-variabelen.
Daaruit volgen $E(X)=np$, $\operatorname{Var}(X)=np(1-p)$ en
$\sigma=\sqrt{np(1-p)}$. Bij twintig proeven met $p=0{,}3$ verwacht je
zes successen en is de variantie 4,2. Zes is geen gegarandeerd aantal.

{{ exercises: 37-005, 37-006, 37-007 }}

:::warning De voorwaarden doen ertoe
Zonder terugleggen uit een kleine populatie verandert de succeskans en zijn
trekkingen afhankelijk. Producten uit dezelfde partij kunnen bovendien een
gemeenschappelijke productiefout hebben. In zulke situaties is een binomiaal
model geen exacte beschrijving, ook al telt ieder product als goed of defect.
:::

{{ exercise: 37-008 }}

Voor meer formules kun je de [NIST-binomiale documentatie](https://www.itl.nist.gov/div898/handbook/eda/section3/eda366i.htm)
raadplegen. De oefeningen gebruiken kleine voorbeelden die je ook zonder software kunt narekenen.
