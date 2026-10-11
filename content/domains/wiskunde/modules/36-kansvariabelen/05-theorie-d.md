# Rekenen met kansvariabelen

Zelden heb je maar één onzekere grootheid. Je zet temperaturen om van graden
Celsius naar Fahrenheit, telt kosten van meerdere posten op of middelt tien
metingen. In deze les zie je hoe verwachting en spreiding zich bij zulke
bewerkingen gedragen. De regels zijn kort, maar ze dragen een groot deel van de
statistiek, en de voorwaarde waaronder ze gelden is minstens zo belangrijk als
de regels zelf.

## Verschuiven en schalen

Als $Y=aX+b$, dan geldt
$E(Y)=aE(X)+b$ en $\operatorname{Var}(Y)=a^2\operatorname{Var}(X)$.
Een vaste toevoeging verandert de spreiding niet. Een schaalfactor vergroot
de standaardafwijking met $|a|$ en de variantie met $a^2$.

De verwachtingsregel volgt rechtstreeks uit de definitie:
$E(aX+b)=\sum_x(ax+b)P(X=x)=a\sum_x xP(X=x)+b\sum_x P(X=x)=aE(X)+b$,
omdat de kansen optellen tot 1. Voor de variantie hoef je alleen te kijken
naar de afwijking van het gemiddelde. Het gemiddelde van $Y$ is $a\mu+b$, dus
$Y-E(Y)=aX+b-a\mu-b=a(X-\mu)$. De constante $b$ valt weg: een verschuiving
schuift de hele verdeling mee, maar verandert niet hoe ver de waarden van elkaar
liggen. En omdat de afwijking met $a$ wordt vermenigvuldigd, wordt het
kwadraat ervan met $a^2$ vermenigvuldigd. Een negatieve $a$ spiegelt de
verdeling, maar $a^2$ is positief: spiegelen verandert de spreiding niet.

:::example Van Celsius naar Fahrenheit
De temperatuur op een dag in graden Celsius heeft verwachting 15 en
standaardafwijking 4. In graden Fahrenheit is $F=1{,}8C+32$. Dan
$E(F)=1{,}8\cdot15+32=59$ en $\sigma_F=1{,}8\cdot4=7{,}2$; de variantie is
$1{,}8^2\cdot16=51{,}84$. De 32 telt mee bij het gemiddelde, maar niet bij de
spreiding. Reken je met variantie, vergeet dan niet te kwadrateren; reken je
met de standaardafwijking, dan schaalt die gewoon met $|a|$.
:::

{{ exercises: 36-012, 36-013, 36-040 }}

## De som van twee kansvariabelen

Voor de verwachting is de som de eenvoudigste bewerking. Voor kosten $X$ en $Y$
geldt altijd $E(X+Y)=E(X)+E(Y)$, mits beide verwachtingen bestaan. Er is geen
onafhankelijkheid nodig, en dat is een opmerkelijke eigenschap: ook als $X$ en
$Y$ sterk samenhangen, tel je de verwachtingen gewoon op. Het bewijs steunt
alleen op het feit dat sommen verwisselbaar zijn. Daaruit volgt voor $n$
variabelen $E(X_1+\dots+X_n)=E(X_1)+\dots+E(X_n)$.

Dit levert een elegante berekening op. Een eerlijke dobbelsteen heeft
verwachting 3,5. De som van twee dobbelstenen heeft dus verwachting $7$, zonder
dat je de elf waarden van $S$ hoeft uit te schrijven. Dezelfde redenering
geeft voor de som van $n$ worpen $3{,}5\,n$.

Bij de variantie ligt het anders. Er is een extra term:

$$
\operatorname{Var}(X+Y)=\operatorname{Var}(X)+\operatorname{Var}(Y)
+2\operatorname{Cov}(X,Y),
$$
met de covariantie $\operatorname{Cov}(X,Y)=E\bigl((X-\mu_X)(Y-\mu_Y)\bigr)$. Die
meet of $X$ en $Y$ samen boven of onder hun gemiddelde liggen. Zijn $X$ en $Y$
**onafhankelijk**, dan is de covariantie nul en vallen de varianties
eenvoudig op te tellen.

:::definition Onafhankelijke kansvariabelen
$X$ en $Y$ zijn onafhankelijk als kennis van de waarde van de ene niets
verandert aan de kansen van de andere. Voor discrete variabelen geldt dan
$P(X=x\text{ en }Y=y)=P(X=x)\,P(Y=y)$ voor alle $x,y$.
:::

:::example Twee onzekere kostenposten
Kosten die door dezelfde prijsstijging worden beïnvloed, zijn meestal
afhankelijk; dan is alleen optellen onjuist. Neem twee posten met
varianties 4 en 9. Zijn ze onafhankelijk, dan is $\operatorname{Var}(X+Y)=13$ en
$\sigma_{X+Y}=\sqrt{13}\approx3{,}61$. Zijn ze perfect positief gerelateerd
(bijvoorbeeld $Y=1{,}5X$), dan is $\sigma_{X+Y}=\sigma_X+\sigma_Y=2+3=5$. De
afhankelijkheid kan de spreiding van de som dus aanzienlijk vergroten.
Merk op: de standaardafwijkingen tel je niet zomaar op; in het onafhankelijke
geval tel je de *varianties* op en neem je daarna de wortel.
:::

Het verschil $X-Y$ is een som met een negatief teken: $X+(-1)Y$. Met de regel
voor schalen krijg je bij onafhankelijkheid
$$
\operatorname{Var}(X-Y)=\operatorname{Var}(X)+(-1)^2\operatorname{Var}(Y)
=\operatorname{Var}(X)+\operatorname{Var}(Y).
$$
Een verschil heeft dus *meer* onzekerheid dan beide posten afzonderlijk, niet
minder. De variantie van een verschil is nooit het verschil van varianties:
dat zou bij $\operatorname{Var}(X)<\operatorname{Var}(Y)$ zelfs negatief kunnen worden,
terwijl een variantie dat nooit is.

{{ exercises: 36-017, 36-018, 36-019, 36-039 }}

## Het gemiddelde van n waarnemingen: de wortel-n-wet

Neem $n$ onafhankelijke waarnemingen $X_1,\dots,X_n$, elk met verwachting
$\mu$ en standaardafwijking $\sigma$. De som en het gemiddelde
$\bar X=\tfrac1n(X_1+\dots+X_n)$ gedragen zich verschillend.

Voor de som is $E(X_1+\dots+X_n)=n\mu$ en, wegens onafhankelijkheid,
$\operatorname{Var}(X_1+\dots+X_n)=n\sigma^2$, dus de standaardafwijking is
$\sigma\sqrt n$. De spreiding van de som groeit dus met de *wortel* van $n$,
niet met $n$ zelf: onafhankelijke afwijkingen heffen elkaar gedeeltelijk op.

Voor het gemiddelde deel je door $n$. Met $a=1/n$ geldt
$$
E(\bar X)=\mu,\qquad
\operatorname{Var}(\bar X)=\frac1{n^2}\cdot n\sigma^2=\frac{\sigma^2}{n},\qquad
\sigma_{\bar X}=\frac{\sigma}{\sqrt n}.
$$
Het gemiddelde blijft op dezelfde plek zitten, maar zijn spreiding krimpt met
$\sqrt n$. Wil je de onzekerheid van een gemiddelde halveren, dan heb je vier
keer zoveel waarnemingen nodig; voor een tiende heb je honderd keer zoveel nodig.
Dit is de kern van elke steekproeftheorie. De standaardafwijking van
$\bar X$ heet de standaardfout; je werkt er in module 38 mee.

:::example Honderd metingen
Een meting heeft standaardafwijking $\sigma=2$ eenheden. Het gemiddelde van
100 onafhankelijke metingen heeft standaardafwijking $2/\sqrt{100}=0{,}2$:
tien keer zo nauwkeurig als één meting. De som van die 100 metingen heeft
daarentegen standaardafwijking $2\sqrt{100}=20$. Beide uitspraken zijn juist:
de absolute spreiding van de som groeit, de relatieve spreiding ten opzichte
van de som, $20/(100\mu)$, krimpt.
:::

:::example Twee dobbelstenen
Elke dobbelsteen heeft $\mu=3{,}5$ en $\sigma^2=35/12$. De som $S$ van twee
onafhankelijke worpen heeft $E(S)=7$ en $\operatorname{Var}(S)=2\cdot\tfrac{35}{12}
=\tfrac{35}6\approx5{,}833$, dus $\sigma_S\approx2{,}415$. Het gemiddelde van de
twee ogen heeft $E=3{,}5$ en $\sigma=\sqrt{35/12}/\sqrt2\approx1{,}208$. Je
vindt dezelfde waarden als je de 36 uitkomsten uitschrijft (dat kun je als
controle doen), maar met de regels kost het veel minder werk.
:::

{{ exercises: 36-041, 36-042 }}

:::warning Wanneer mag je varianties optellen?
Alleen als de variabelen onafhankelijk zijn, of in elk geval ongecorreleerd.
Voorbeelden van afhankelijkheid: twee aandelen die op hetzelfde nieuws
reageren, twee metingen met dezelfde systematische afwijking, of $X$ en $2X$.
Bij $Y=X$ is $\operatorname{Var}(X+Y)=\operatorname{Var}(2X)=4\operatorname{Var}(X)$
en niet $2\operatorname{Var}(X)$. De wortel-$n$-wet geldt dus ook alleen voor
onafhankelijke metingen: een systematische meetfout verdwijnt niet door vaker
te meten.
:::
