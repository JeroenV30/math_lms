# Lijnen die elkaar ontmoeten

Substitutie en eliminatie zijn rekenmethoden: je schuift met symbolen tot de oplossing eruit rolt. Dat werkt betrouwbaar, maar het laat je niet *zien* waarom er één oplossing is, of waarom soms niets of juist alles werkt. Daarvoor heb je het beeld nodig. In de eerste les zag je al dat de oplossingen van één vergelijking met twee onbekenden op een rechte lijn liggen. In deze les gebruik je die kennis voor het stelsel: twee vergelijkingen, twee lijnen, en de oplossing is het punt dat op beide ligt.

## Een oplossing is een snijpunt

Elke lineaire vergelijking met twee onbekenden beschrijft een rechte lijn. Een punt $(x; y)$ is een oplossing van een stelsel precies dan als het op *elke* lijn ligt. Voor twee vergelijkingen betekent dat: de oplossing is het **snijpunt** van de twee lijnen. Dit is dezelfde gedachte als in de eerste les, nu in beeld gebracht: twee voorwaarden zijn twee lijnen, en wat aan beide voldoet is waar ze elkaar ontmoeten.

{{ widget: function-plot fn="2*x+1" fn2="-x+10" xmin=-2 xmax=6 ymin=-4 ymax=14 title="Twee lijnen, één gemeenschappelijk punt" }}

Hier zie je $y = 2x + 1$ en $y = -x + 10$. Het snijpunt is $(3; 7)$. Controleer dat het in beide formules klopt: $2 \cdot 3 + 1 = 7$ en $-3 + 10 = 7$. Lees het snijpunt eerst af in de grafiek en reken het daarna na. Een kleine verandering in de helling of in het snijpunt met de $y$-as verschuift ook het snijpunt van de twee lijnen.

## Van stelsel naar grafiek

Om een stelsel grafisch op te lossen werk je in drie stappen. Eerst schrijf je elke vergelijking in de vorm $y = ax + b$, zodat je helling en beginwaarde ziet. Daarna teken je beide lijnen, bijvoorbeeld met twee punten per lijn. Tot slot lees je het snijpunt af en controleer je het in beide *originele* vergelijkingen.

:::example Het koffiekarprobleem in beeld
Het stelsel $2x + y = 8$ en $x + 2y = 10$ schrijf je als $y = 8 - 2x$ en $y = 5 - \frac{1}{2}x$. De eerste lijn heeft helling $-2$ en snijdt de $y$-as bij $8$. De tweede heeft helling $-\frac12$ en snijdt de $y$-as bij $5$. De lijnen lopen dus verschillend, en zullen elkaar ergens snijden.

![De lijnen 2x + y = 8 en x + 2y = 10 snijden elkaar in (2; 4)](/images/diagrams/m20-snijpunt.svg "De twee voorwaarden uit het koffiekarprobleem als lijnen: het snijpunt (2; 4) is het enige paar dat aan beide voldoet.")

In het snijpunt lees je af: $x = 2$ en $y = 4$. Dat is dezelfde oplossing die je met substitutie en eliminatie vond. Een thee kost € 2, een koffie € 4.
:::

## Exacte of benaderde oplossing?

Het afleesbare snijpunt is alleen zo precies als je tekening. Bij nette gehele coördinaten kun je het exact aflezen. Soms valt het snijpunt tussen twee rasterlijnen: bij $y = 2x + 1$ en $y = -x + 10{,}5$ ligt het bij $x = \frac{9{,}5}{3} = 3\frac16$, wat je nauwelijks nauwkeurig uit een tekening haalt. Dan is de grafiek goed voor een *schatting* en voor het begrijpen van de situatie, maar de exacte waarde bereken je algebraïsch.

Dat is een nuttige taakverdeling die je in veel vakgebieden terugziet: de grafiek geeft inzicht en een controle op orde van grootte, de algebra geeft de precisie. Als je door substitutie $x = 7$ vindt maar je tekening toont een snijpunt rond $x = 2$, dan weet je dat er ergens een fout zit.

:::tip Tekening versus exact paar
Bij een slecht leesbare schaal kun je een snijpunt alleen benaderen. Gebruik de formules voor exacte waarden en controleer het gevonden paar in beide regels. Zet bij het tekenen de assen netjes uit en kies een schaal waarmee beide lijnen in beeld blijven.
:::

## Gelijkstellen: een kortere weg

Als beide vergelijkingen al van de vorm $y = \ldots$ zijn, is er een bijzonder korte route. In het snijpunt hebben beide lijnen dezelfde $y$. Dus moeten de twee rechterleden gelijk zijn:

$$
2x + 1 = -x + 10.
$$

Dat is een gewone vergelijking met één onbekende: $3x = 9$, dus $x = 3$, en daarna $y = 2 \cdot 3 + 1 = 7$. Dit is eigenlijk substitutie, maar dan zonder omweg: je vervangt de $y$ van de ene vergelijking door het rechterlid van de andere. In de woorden van een functie: je zoekt de $x$ waarvoor beide functies dezelfde uitvoer geven.

:::example Gelijkstellen met een kleine verrassing
Bepaal het snijpunt van $y = x + 1$ en $y = -2x + 7$.

Stel gelijk: $x + 1 = -2x + 7$. Tel $2x$ bij beide kanten op: $3x + 1 = 7$. Dus $3x = 6$ en $x = 2$. Vul in: $y = 2 + 1 = 3$. Het snijpunt is $(2; 3)$. Controle in de tweede: $-4 + 7 = 3$.

Waarom deze weg werkt: $y = x + 1$ en $y = -2x + 7$ zeggen allebei wat $y$ is. In het snijpunt moet dezelfde $y$ aan beide kanten staan, en dus kun je de twee beschrijvingen aan elkaar gelijkstellen.
:::

{{ widget: function-plot fn="x+1" fn2="-2*x+7" xmin=-2 xmax=6 ymin=-2 ymax=10 title="Het snijpunt van y = x + 1 en y = -2x + 7" }}

## Verticale en horizontale lijnen

Niet elke lijn heeft de vorm $y = ax + b$. Een vergelijking als $x = 4$ is een **verticale** lijn: elk punt waarvan de $x$-coördinaat $4$ is, ligt erop, welke $y$ ook. Zo'n lijn is geen functie van $x$ (bij één $x$ horen oneindig veel $y$), en dus kun je haar niet als $y = ax + b$ schrijven. Dat hoeft ook niet. Samen met $y = 2x - 1$ geeft ze de oplossing $(4; 7)$: de $x$-waarde ligt vast, en je vult die in de andere vergelijking in.

Een vergelijking als $y = 5$ is een **horizontale** lijn, met helling nul. Samen met $y = x + 2$ geeft ze $5 = x + 2$, dus $x = 3$ en het snijpunt $(3; 5)$. Zulke gevallen zijn vaak de eenvoudigste stelsels die er zijn, omdat de ene voorwaarde een onbekende al vastlegt.

## Hoeveel snijpunten kunnen er zijn?

Twee rechte lijnen in een vlak kunnen op precies drie manieren liggen. Ze snijden elkaar in één punt, ze lopen evenwijdig zonder elkaar te raken, of ze vallen volledig samen. Een tweede snijpunt is onmogelijk: twee verschillende punten leggen een rechte lijn volledig vast, dus twee lijnen met twee gemeenschappelijke punten zijn dezelfde lijn. In de volgende les werk je die twee uitzonderingen uit. Wat je nu al kunt zeggen: bij twee lijnen met **verschillende helling** is er altijd precies één snijpunt, hoe die lijnen er ook uitzien.

:::question Voorspel de uitkomst
Zonder te rekenen: wat gebeurt er met het snijpunt van $y = 2x + 1$ en $y = -x + 10$ als je de tweede lijn parallel naar boven schuift naar $y = -x + 13$? Verschuift het snijpunt naar boven, naar rechts, of allebei? Controleer door gelijkstellen.
:::

{{ exercises: 20-014, 20-015, 20-016, 20-017 }}

Gebruik bij de volgende oefening het gelijkstellen van de rechterleden of de grafiek hierboven, en geef het snijpunt als coördinaat.

{{ exercise: 20-036 }}
