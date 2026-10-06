# Een algemene methode

Ontbinden werkt prachtig bij $x^2-6x+8$, maar probeer het eens bij $x^2-2x-1=0$. Er zijn geen twee gehele getallen met product $-1$ en som $-2$. En toch heeft de vergelijking oplossingen, want de bijbehorende parabool snijdt de x-as. We hebben een methode nodig die altijd werkt, ook als de getallen lelijk zijn. Die vind je door één ding systematisch te doen: het kwadraat afsplitsen, maar dan met letters in plaats van getallen.

## De formule afleiden

Begin met de algemene vergelijking $ax^2+bx+c=0$ met $a\neq0$. Je gaat precies dezelfde stappen zetten als bij $x^2-6x+8$, maar dan met $a$, $b$ en $c$.

1. Deel door $a$: $x^2+\dfrac bax+\dfrac ca=0$.
2. Neem de helft van de coëfficiënt van $x$, dat is $\dfrac{b}{2a}$, en schrijf het kwadraat af: $\left(x+\dfrac{b}{2a}\right)^2=x^2+\dfrac bax+\dfrac{b^2}{4a^2}$.
3. Dan is $x^2+\dfrac bax=\left(x+\dfrac{b}{2a}\right)^2-\dfrac{b^2}{4a^2}$, en de vergelijking wordt
$$\left(x+\frac{b}{2a}\right)^2=\frac{b^2}{4a^2}-\frac ca=\frac{b^2-4ac}{4a^2}.$$
4. Neem aan beide kanten de wortel, met beide tekens:
$$x+\frac{b}{2a}=\pm\frac{\sqrt{b^2-4ac}}{2a}.$$
5. Trek $\dfrac{b}{2a}$ af:
$$x=\frac{-b\pm\sqrt{b^2-4ac}}{2a}.$$

:::formula De abc-formule
De oplossingen van $ax^2+bx+c=0$ (met $a\neq0$) zijn
$$x=\frac{-b\pm\sqrt{b^2-4ac}}{2a}.$$
:::

De naam zegt wat het is: de formule gebruikt alleen de drie coëfficiënten $a$, $b$ en $c$. Je ziet ook de top terug. Het deel $-\dfrac{b}{2a}$ is precies de x-coördinaat van de top, en de wortelterm is de afstand waarmee je naar links en rechts van de top stapt om de nulpunten te bereiken. De twee nulpunten liggen dus symmetrisch ten opzichte van de symmetrie-as.

## De discriminant

Het getal onder het wortelteken heeft een eigen naam: de **discriminant**.
$$D=b^2-4ac.$$
Het woord betekent "onderscheider", want $D$ onderscheidt de verschillende gevallen. Een reële wortel bestaat alleen van een getal dat nul of positief is. Dat geeft drie situaties.

| Discriminant | Aantal oplossingen | De parabool |
|---|---|---|
| $D>0$ | twee verschillende | snijdt de x-as in twee punten |
| $D=0$ | één (een dubbele wortel) | raakt de x-as in de top |
| $D<0$ | geen reële oplossingen | ligt geheel boven of onder de x-as |

![De drie gevallen van de discriminant](/images/diagrams/m21-discriminant.svg "Drie dalparabolen: D > 0 snijdt de x-as twee keer, D = 0 raakt hem, D < 0 mist hem.")

Bij $D=0$ valt de ± weg en blijft $x=-\dfrac{b}{2a}$ over: het nulpunt is gelijk aan de topinvoer. Daarom noemen we dit een *dubbele* wortel: de factoren $(x-x_1)(x-x_2)$ vallen samen tot $(x-x_1)^2$.

:::warning Het teken van de discriminant
Bij het uitrekenen van $b^2-4ac$ gaan de meeste fouten over tekens. Het gedeelte $4ac$ is negatief als $a$ en $c$ verschillend van teken zijn, en dan wordt het *aftrekken* van een negatief getal een optelling. Bij $x^2-2x-1=0$ is $a=1$, $b=-2$, $c=-1$ en dus $D=(-2)^2-4\cdot1\cdot(-1)=4+4=8$, niet $0$. Schrijf $a$, $b$ en $c$ altijd eerst met hun eigen teken op, zet haakjes om negatieve getallen, en reken pas daarna uit. Merk ook op dat $b^2$ nooit negatief is: $(-2)^2=4$.
:::

:::example Twee oplossingen met een wortel
Los $x^2-2x-1=0$ op.

1. $a=1$, $b=-2$, $c=-1$.
2. $D=(-2)^2-4\cdot1\cdot(-1)=4+4=8>0$: er zijn twee oplossingen.
3. $x=\dfrac{2\pm\sqrt8}{2}$. Vereenvoudig $\sqrt8=2\sqrt2$, dus $x=\dfrac{2\pm2\sqrt2}{2}=1\pm\sqrt2$.
4. De oplossingen zijn $x=1-\sqrt2\approx-0{,}41$ en $x=1+\sqrt2\approx2{,}41$.

Dit is een parabool met top $(1;-2)$: de nulpunten liggen op afstand $\sqrt2$ links en rechts van $x=1$.
:::

:::example Een breuk als oplossing
Los $2x^2-3x-5=0$ op.

1. $a=2$, $b=-3$, $c=-5$.
2. $D=(-3)^2-4\cdot2\cdot(-5)=9+40=49$, en $\sqrt{49}=7$.
3. $x=\dfrac{3\pm7}{4}$, dus $x=\dfrac{10}{4}=\dfrac52$ of $x=\dfrac{-4}{4}=-1$.

Omdat $D$ een kwadraat van een geheel getal is, zijn de oplossingen rationaal. Dat is een teken dat de vergelijking ook te ontbinden was: $2x^2-3x-5=(2x-5)(x+1)$.
:::

:::example Geen oplossing en één oplossing
Hoeveel oplossingen hebben $x^2+4=0$ en $x^2-6x+9=0$?

- Bij $x^2+4=0$ is $D=0^2-4\cdot1\cdot4=-16<0$: geen reële oplossingen.
- Bij $x^2-6x+9=0$ is $D=36-36=0$. De oplossing is $x=\dfrac{6}{2}=3$. Je ziet het ook direct: $(x-3)^2=0$.
:::

## Een parameter bepalen met de discriminant

De discriminant is ook een gereedschap. Stel dat je wilt weten voor welke waarde van $c$ de vergelijking $x^2+6x+c=0$ precies één oplossing heeft. Eis dan $D=0$: $6^2-4\cdot1\cdot c=0$, dus $36=4c$ en $c=9$. Inderdaad is $x^2+6x+9=(x+3)^2$.

## Afronden in toepassingen

In een toepassing wil je meestal geen wortel maar een getal. Bereken de oplossingen met een rekenmachine, vul pas helemaal aan het einde de afronding in en rond af op de gevraagde nauwkeurigheid, bijvoorbeeld op twee decimalen. Rond niet tussentijds af: als je $\sqrt8$ al afrondt op $2{,}8$, krijg je een onnodig groot verschil in de uitkomst.

:::tip Welke methode kies je?
Kijk eerst of er geen $x$-term of geen constante term is (worteltrekken of buiten haakjes halen). Probeer dan ontbinden als de getallen klein zijn. Anders, of als je twijfelt: de abc-formule, en begin met de discriminant. Die kost weinig tijd en vertelt je of de moeite loont.
:::

{{ exercises: 21-018, 21-019, 21-020, 21-021, 21-022, 21-023, 21-037, 21-038 }}
