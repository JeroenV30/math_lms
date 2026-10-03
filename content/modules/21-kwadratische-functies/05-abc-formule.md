# Een algemene methode

Niet elke vergelijking ontbindt makkelijk met gehele getallen. Voor $ax^2+bx+c=0$ met a ≠ 0 gebruik je:

$$
x=\frac{-b\pm\sqrt{b^2-4ac}}{2a}.
$$

De discriminant is D = b²-4ac. Bij D > 0 zijn er twee verschillende reële oplossingen. Bij D = 0 één verschillende oplossing, dubbel geteld in de factorvorm. Bij D < 0 zijn er geen reële oplossingen.

:::example Twee wortels
$x^2-2x-1=0$ heeft a = 1, b = -2, c = -1. Dan D = 4+4 = 8. De oplossingen zijn $(2\pm\sqrt8)/2=1\pm\sqrt2$. Dit zijn exacte waarden; op twee decimalen ongeveer -0,41 en 2,41.
:::

## Waarom deze formule werkt

Deel door a en splits een kwadraat af:

$$
\left(x+\frac{b}{2a}\right)^2=\frac{b^2-4ac}{4a^2}.
$$

Worteltrekken met beide tekens en de term b/(2a) terug verplaatsen geeft de abc-formule. De discriminant volgt dus uit de vraag of de rechterkant negatief, nul of positief is.

:::warning Coëfficiënten inclusief teken
Bij $2x^2-3x-5=0$ is b = -3 en c = -5. Gebruik haakjes bij invullen. De hele teller wordt gedeeld door 2a, niet alleen de wortelterm.
:::

{{ exercises: 21-018, 21-019, 21-020, 21-021, 21-022, 21-023 }}
