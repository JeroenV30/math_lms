# Hypothesen en p-waarden

Je begint met twee uitspraken over een **populatieparameter**. Bij de
verpakking kan dat zijn $H_0:\mu=100$ tegenover $H_1:\mu\ne100$.
Een rechtszijdige vraag gebruikt $H_1:\mu>100$; een linkszijdige vraag
gebruikt $H_1:\mu<100$. Kies de richting vóór je de uitkomst bekijkt.

{{ exercise: 39-001 }}

Een toetsingsgrootheid meet hoe ver de data van het nulmodel liggen.
Bij bekende $\sigma$ en een passend normaal model gebruik je
$z=(\bar x-\mu_0)/(\sigma/\sqrt n)$.

:::example Een tweezijdige z-toets
Neem $\sigma=8$, $n=64$, $\bar x=102$ en $\mu_0=100$.
De standaardfout is 1, dus $z=2$. Onder $H_0$ heeft de toetsingsgrootheid
een standaardnormale verdeling. "Minstens zo extreem" betekent tweezijdig:
2 of meer, of −2 of minder. De kans is
$2(1-\Phi(2))\approx0{,}0456$.
:::

{{ exercises: 39-002, 39-003, 39-004 }}

## De definitie moet bij de toets passen

Een p-waarde is de kans onder het nulmodel op een toetsingsgrootheid minstens
zo extreem als geobserveerd. Wat extreem betekent, ligt vast door de toets
en de alternatieve hypothese. Bij discrete tweezijdige toetsen bestaan
verschillende conventies; vermeld welke procedure je gebruikt.

Voor een linkszijdige toets gebruik je $\Phi(z)$, voor een rechtszijdige toets
$1-\Phi(z)$, en voor de symmetrische tweezijdige normale toets
$2[1-\Phi(|z|)]$. Een negatief effect bij een rechtszijdige hypothese geeft
dus een **grote**, geen kleine p-waarde.

## Beslissen bij een vooraf gekozen grens

Kies bijvoorbeeld $\alpha=0{,}05$. Bij $p\le\alpha$ verwerp je $H_0$
volgens deze regel. Bij een grotere p-waarde verwerp je haar niet. "Niet
verwerpen" betekent onvoldoende bewijs in deze toets, niet dat de
nulhypothese bewezen is.

{{ exercise: 39-005 }}

:::warning Wat p niet zegt
De p-waarde is niet $P(H_0\mid\text{data})$, niet de kans dat alles door
toeval is ontstaan, en niet de grootte van het effect. Dezelfde kleine
p-waarde kan horen bij een klein effect met veel data of een groot effect
met weinig data. Rapporteer daarom ook het verschil en zijn interval.
:::
