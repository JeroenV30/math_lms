# Zeldzame gebeurtenissen en sommen van normale variabelen

In deze les komen twee onderwerpen samen die de eerste drie lessen aanvullen. Eerst de **Poisson-verdeling**, die zeldzame gebeurtenissen telt en ontstaat als grensgeval van de binomiale verdeling. Daarna de **som van normale variabelen**, die laat zien waarom de normale familie zo handig is: optellen binnen de familie levert weer een lid van de familie op.

## Poisson: de limiet bij kleine kansen

Stel dat een uitgever 1000 pagina's heeft gezet en dat elke pagina onafhankelijk met kans $0{,}002$ een drukfout bevat. Het aantal pagina's met een fout is dan $X\sim\operatorname{Bin}(1000;0{,}002)$. Rekenen met $\binom{1000}{k}$ is lastig, en bovendien is de normale benadering hier niet bruikbaar: $np=2$ is veel kleiner dan 5, dus de verdeling is sterk scheef.

Toch is er een eenvoudige benadering. Houd het product $np=\lambda$ vast en laat $n$ groeien en $p=\lambda/n$ krimpen. Dan gaat

$$
\binom nk\Bigl(\frac\lambda n\Bigr)^k\Bigl(1-\frac\lambda n\Bigr)^{n-k}\ \longrightarrow\ e^{-\lambda}\,\frac{\lambda^k}{k!}\qquad(n\to\infty).
$$

Je kunt dat in drie stappen zien. De factor $\binom nk\approx n^k/k!$ als $n$ groot is, en samen met $(\lambda/n)^k$ levert dat $\lambda^k/k!$. De factor $(1-\lambda/n)^n$ gaat naar $e^{-\lambda}$, het bekende limietgetal waarmee ook $e$ gedefinieerd wordt. En $(1-\lambda/n)^{-k}$ gaat naar 1. Wat overblijft is de Poisson-kans.

:::definition Poisson-verdeling
$X\sim\operatorname{Poisson}(\lambda)$ telt het aantal gebeurtenissen en heeft

$$
P(X=k)=e^{-\lambda}\,\frac{\lambda^k}{k!},\qquad k=0,1,2,\ldots
$$

Zowel de verwachting als de variantie is gelijk aan $\lambda$. In tegenstelling tot de binomiale verdeling is er geen bovengrens aan het aantal gebeurtenissen.
:::

Dat verwachting en variantie gelijk zijn, is een herkenningsteken. Dat past bij het binomiale model: $np(1-p)\approx np$ als $p$ klein is.

:::example Van binomiaal naar Poisson
Een fabriek maakt onderdelen met 1% kans op een defect. Je inspecteert 200 stuks: $X\sim\operatorname{Bin}(200;0{,}01)$. Dan is $\lambda=np=2$. De kans op geen enkel defect is exact $0{,}99^{200}\approx0{,}1340$. De Poisson-benadering geeft $e^{-2}\approx0{,}1353$, een verschil van ongeveer één procent van de waarde. De kans op precies twee defecten is volgens Poisson $e^{-2}\cdot2^2/2!=2e^{-2}\approx0{,}2707$. Dat rekent veel aangenamer dan $\binom{200}2\cdot0{,}01^2\cdot0{,}99^{198}$.
:::

Voor welke combinaties is de benadering goed? De gebruikelijke vuistregel is $n\ge50$ en $p\le0{,}1$, of liever $n$ groot en $np$ klein tot matig. Hoe kleiner $p$, hoe beter.

{{ exercises: 37-028, 37-029, 37-030 }}

### Tellingen per tijdseenheid

De Poisson-verdeling bestaat ook zelfstandig, zonder dat je eerst een binomiaal model hoeft op te stellen. Ze past bij gebeurtenissen die op een continu tijdstip of op een plek optreden, bijvoorbeeld telefoontjes bij een helpdesk, radioactieve vervallen, auto's die een brug passeren of spelfouten per pagina. Het model is geschikt als:

1. gebeurtenissen onafhankelijk van elkaar optreden;
2. het gemiddelde aantal per tijdseenheid constant is;
3. gebeurtenissen niet precies tegelijk plaatsvinden.

De parameter $\lambda$ is dan het gemiddelde aantal in het beschouwde interval. Verandert het interval, dan verandert $\lambda$ evenredig mee. Als een helpdesk gemiddeld 6 gesprekken per uur ontvangt, is $\lambda=6$ voor een uur, $\lambda=3$ voor een half uur en $\lambda=2$ voor twintig minuten.

:::example Een rustige tijdspanne
Gemiddeld 6 gesprekken per uur betekent voor een half uur $\lambda=3$. De kans dat er in een half uur geen enkel gesprek binnenkomt is $e^{-3}\approx0{,}0498$: ongeveer 5%. De kans op minstens één gesprek is dan $1-e^{-3}\approx0{,}9502$.
:::

{{ exercise: 37-031 }}

:::warning Controleer de voorwaarden
Poisson hoort bij gebeurtenissen die onafhankelijk en bij benadering met een constante intensiteit optreden. Gesprekken bij een helpdesk komen in pieken, bijvoorbeeld direct na een storing: dan is de intensiteit niet constant en de variantie groter dan het gemiddelde. Gelijke verwachting en variantie in je data is een eenvoudige controle op het model.
:::

## De som van normale variabelen

De normale verdeling heeft een bijzondere eigenschap: als je onafhankelijke normale variabelen optelt, is de uitkomst weer normaal verdeeld. Dat is een stelling die je kunt bewijzen; hier gaat het om de gebruiksregels.

:::theory Optellen en aftrekken
Laat $X\sim N(\mu_1,\sigma_1^2)$ en $Y\sim N(\mu_2,\sigma_2^2)$ onafhankelijk zijn. Dan geldt

$$
X+Y\sim N\bigl(\mu_1+\mu_2,\ \sigma_1^2+\sigma_2^2\bigr),\qquad X-Y\sim N\bigl(\mu_1-\mu_2,\ \sigma_1^2+\sigma_2^2\bigr).
$$

De **verwachtingen** tellen op (bij een verschil trek je af), maar de **varianties** tellen altijd op, ook bij een verschil. De standaardafwijkingen tel je niet op.
:::

De reden dat je varianties optelt en geen standaardafwijkingen, is dat spreiding zich gedeeltelijk uitmiddelt: een toevallig grote waarde van $X$ wordt soms gecompenseerd door een kleine waarde van $Y$. Daarom is $\sigma_{X+Y}=\sqrt{\sigma_1^2+\sigma_2^2}$ kleiner dan $\sigma_1+\sigma_2$. Dat verklaart ook waarom het gemiddelde van veel metingen minder spreidt dan één meting: dat is het begin van het werk in module 38.

:::example Twee onderdelen op elkaar
Twee onafhankelijke lengtes: $X\sim N(50;\,4^2)$ en $Y\sim N(30;\,3^2)$ (in mm). De totale lengte $T=X+Y$ is normaal met $\mu=50+30=80$ en variantie $16+9=25$, dus $\sigma=5$. Niet $4+3=7$! Dan is bijvoorbeeld de kans dat $T$ onder 70 mm blijft: $z=(70-80)/5=-2$, dus $\Phi(-2)=0{,}0228$.
:::

:::example Wie wordt er het eerst klaar?
Twee collega's doen onafhankelijk van elkaar een taak. Collega A heeft een werktijd $X\sim N(100;\,6^2)$ minuten en collega B een werktijd $Y\sim N(90;\,8^2)$. De kans dat A langer doet dan B is $P(X>Y)=P(X-Y>0)$. Het verschil $D=X-Y$ is normaal met $\mu=10$ en variantie $36+64=100$, dus $\sigma=10$. Dan is $P(D>0)=P(Z>-1)=\Phi(1)=0{,}8413$. De trage collega is dus niet bij elke taak langer bezig; hij verliest in ruim 84% van de gevallen.
:::

{{ exercises: 37-041, 37-042, 37-043 }}

Voor $n$ onafhankelijke metingen $X_1,\ldots,X_n$ met dezelfde verdeling $N(\mu,\sigma^2)$ geldt dus voor hun som $N(n\mu,\,n\sigma^2)$. Dat is precies de reden dat bij een binomiale variabele, een som van $n$ onafhankelijke 0/1-variabelen, de normale benadering werkt met $\mu=np$ en $\sigma^2=np(1-p)$. De centrale limietstelling, in module 38, zegt dat dit niet een eigenschap van 0/1-variabelen alleen is: sommen van veel onafhankelijke variabelen worden bij benadering normaal, vrijwel ongeacht hun oorspronkelijke verdeling.
