# Een beperkt gebied en de terugweg

In de praktijk geldt een lineair model zelden voor alle getallen. In deze les maak je dat precies: je geeft het gebied aan waarin de regel geldt, je kijkt welke uitvoeren daarbij horen, en je draait de regel om zodat je van uitvoer terug kunt naar invoer.

## Domein en bereik

Het tankmodel $V(t) = 120 + 8t$ met een maximale inhoud van 200 liter gebruikt het domein $[0; 10]$: de tijd loopt van 0 tot en met 10 minuten, en beide grenzen horen erbij. De uitvoeren die dan echt voorkomen vormen het **bereik**. Voor de tank loopt de inhoud van $V(0) = 120$ tot $V(10) = 200$, dus het bereik is $[120; 200]$.

Voor een lineaire functie op een gesloten interval vind je het bereik eenvoudig: reken de uitvoer aan beide grenzen uit. Is de lijn stijgend, dan staat de kleinste uitvoer bij de kleinste invoer. Is de lijn dalend, dan is het precies andersom. Het bereik schrijf je altijd met de kleinste waarde links.

:::example Het bereik van een dalende functie
Geef het bereik van $f(x) = -2x + 9$ op het domein $[1; 4]$.

1. De helling is negatief, dus de functie daalt.
2. $f(1) = -2 + 9 = 7$ en $f(4) = -8 + 9 = 1$.
3. De functie neemt alle waarden tussen 7 en 1 aan, dus het bereik is $[1; 7]$.
:::

Vierkante haakjes sluiten een grens in; open haken zoals $\langle 0; 10 \rangle$ sluiten haar uit. Een interval beschrijft hier alle tussenliggende reële waarden. Voor aantallen tickets of kilometers in hele getallen kies je juist losse gehele waarden; een interval alleen geeft die beperking niet volledig weer, en je vermeldt die erbij.

## Interpoleren en extrapoleren

Als je een lineair model uit metingen opstelt, geldt het in de eerste plaats binnen het gemeten gebied. Een waarde schatten tussen de metingen heet **interpoleren**, en dat is meestal veilig. Een waarde voorspellen buiten het gemeten gebied heet **extrapoleren**, en daarbij neem je een risico: je neemt aan dat de lijn doorloopt terwijl je dat niet gecontroleerd hebt. Een kind dat tussen zijn 2e en 8e levensjaar ongeveer 6 cm per jaar groeit, wordt niet 3 meter lang op zijn 50e.

## Een regel omkeren: de inverse

Soms wil je de omgekeerde vraag beantwoorden. Je weet de uitvoer en zoekt de invoer: bij welke tijd is de tank 184 liter vol? Bij $V(t) = 120 + 8t$ los je op: $120 + 8t = 184$, dus $8t = 64$ en $t = 8$. Dat is in orde voor één waarde. Wil je de omgekeerde regel voor alle waarden, dan maak je de oorspronkelijke invoer algemeen vrij.

:::example Een inverse bepalen
Bepaal de omgekeerde regel van $y = 3x + 1$.

1. Je wilt $x$ uitdrukken in $y$. Trek 1 af: $y - 1 = 3x$.
2. Deel door 3: $x = \dfrac{y - 1}{3}$.
3. Controle: bij $y = 16$ krijg je $x = 15 / 3 = 5$, en inderdaad $3 \times 5 + 1 = 16$.

Je hebt de volgorde van de machine omgedraaid: de machine deed eerst keer 3 en dan plus 1; de omgekeerde machine doet eerst min 1 en dan delen door 3.
:::

Als je de invoer van de omgekeerde functie weer $x$ noemt, schrijf je $f^{-1}(x) = \dfrac{x - 1}{3}$. Voor het algemene geval $y = ax + b$ geldt
$$
x = \frac{y - b}{a} \qquad (a \neq 0)
$$
De voorwaarde $a \neq 0$ is essentieel. Bij een constante functie hoort bij elke invoer dezelfde uitvoer. Je kunt dan uit de uitvoer de oorspronkelijke invoer niet meer terugvinden, dus er is geen inverse.

:::warning De notatie -1 is geen omgekeerde breuk
$f^{-1}$ betekent de inverse functie, niet $1/f$. De inverse maakt de koppeling ongedaan. Bij $f(x) = 3x + 1$ is $f^{-1}(x) = (x - 1)/3$, terwijl $1/f(x) = 1/(3x + 1)$ iets heel anders is.
:::

Bij een beperkt domein heeft de inverse het oorspronkelijke bereik als domein. Voor de tank is $t = (V - 120)/8$ alleen bedoeld voor $V$ tussen 120 en 200.

## Een bekend voorbeeld: Celsius en Fahrenheit

De omrekening van graden Celsius naar graden Fahrenheit is een lineaire functie:
$$
F = 1{,}8\,C + 32
$$
De startwaarde 32 betekent dat het vriespunt van water (0 °C) op 32 °F ligt. De helling 1,8 betekent dat een stijging van 1 °C overeenkomt met 1,8 °F: een graad Fahrenheit is dus kleiner dan een graad Celsius. Het kookpunt van water, 100 °C, geeft $F = 180 + 32 = 212$.

:::example Van Celsius naar Fahrenheit en terug
Hoeveel °F is 25 °C? En hoeveel °C is 95 °F?

1. Vooruit: $F = 1{,}8 \times 25 + 32 = 45 + 32 = 77$. Dus 25 °C is 77 °F.
2. Terug: de inverse is $C = (F - 32)/1{,}8$.
3. Voor $F = 95$: $C = (95 - 32)/1{,}8 = 63 / 1{,}8 = 35$. Dus 95 °F is 35 °C.
:::

Een veelgemaakte fout is om bij de omrekening de volgorde te verwarren: eerst 32 erbij en dan keer 1,8 geeft iets anders dan eerst keer 1,8 en dan 32 erbij. De formule zegt duidelijk wat eerst gebeurt. Bij het omkeren draai je de volgorde juist om.

:::question Een toevallige gelijkheid?
Bij welke temperatuur geven de Celsius- en de Fahrenheitschaal hetzelfde getal? Als je $1{,}8\,x + 32 = x$ oplost, krijg je een getal dat je misschien niet had verwacht. Probeer het in een van de oefeningen verderop.
:::

{{ widget: function-plot fn="a*x+b" a=1.8 amin=0 amax=3 astep=0.1 b=32 bmin=0 bmax=60 xmin=-50 xmax=50 ymin=-60 ymax=140 title="Celsius naar Fahrenheit: F = a·C + b" }}

{{ exercises: 19-018, 19-019, 19-020, 19-021, 19-022, 19-023, 19-039 }}
