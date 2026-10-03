# Samenhang meten met Pearson r

Neem de punten $(1;2),(2;4),(3;5),(4;4),(5;5)$. Het gemiddelde punt is
$(3;4)$. Om samenhang te meten, bekijk je hoe iedere waarde van dat gemiddelde
afwijkt.

| $x$ | $y$ | $x-\bar x$ | $y-\bar y$ | product |
|---|---|---|---|---|
| 1 | 2 | −2 | −2 | 4 |
| 2 | 4 | −1 | 0 | 0 |
| 3 | 5 | 0 | 1 | 0 |
| 4 | 4 | 1 | 0 | 0 |
| 5 | 5 | 2 | 1 | 2 |

De producten zijn positief als x en y aan dezelfde kant van hun gemiddelde
liggen. Hun som meet gezamenlijke variatie, maar hangt nog van de eenheden af.

{{ exercises: 40-001, 40-002, 40-003, 40-004, 40-005 }}

:::formula Een schaalvrije maat
$$
r=\frac{S_{xy}}{\sqrt{S_{xx}S_{yy}}},\qquad
S_{xy}=\sum_i(x_i-\bar x)(y_i-\bar y).
$$
$S_{xx}$ en $S_{yy}$ zijn de sommen van de gekwadrateerde afwijkingen.
Bij de tabel zijn ze 10 en 6; $S_{xy}=6$. Dus $r\approx0{,}775$.
:::

{{ exercise: 40-006 }}

Bij variatie in beide variabelen ligt r tussen −1 en 1. Het teken geeft de
richting; de absolute waarde geeft hoe sterk het **lineaire** patroon is.
Een krom verband kan een r rond nul hebben. Als een variabele constant is,
is r ongedefinieerd, niet nul.

## Eenheden en interpretatie

Van meter naar centimeter omrekenen verandert r niet. De helling van een
regressielijn verandert wel, want die heeft eenheden. Een sterke correlatie
is bovendien geen bewijs van causaliteit. Derde variabelen, selectie en
omgekeerde oorzakelijkheid kunnen hetzelfde patroon geven.

Gebruik geen vaste grens zoals "boven 0,7 altijd sterk" zonder context.
Bij een ruisige gedragsmeting kan een kleiner verband relevant zijn, terwijl
bij een precisiesensor dezelfde correlatie onvoldoende kan zijn.
