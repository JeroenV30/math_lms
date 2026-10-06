# Een onbekende vervangen

In de vorige les zag je dat één vergelijking met twee onbekenden een hele lijn aan oplossingen laat, en dat pas een tweede voorwaarde één paar overhoudt. Je controleerde een voorgesteld paar door het in te vullen. Nu draai je dat om: je gaat het paar *vinden*. De eerste methode heet **substitutie**, van het Latijnse *substituere*, 'in de plaats stellen'. Het idee is eenvoudig en je kent het al uit de vergelijkingen met één onbekende: als je weet dat twee dingen gelijk zijn, mag je het ene voor het andere in de plaats zetten. Daardoor verdwijnt een van de twee onbekenden uit het zicht, en houd je een vergelijking over die je al kunt oplossen.

## Het idee in een voorbeeld

Neem de twee voorwaarden $y = 2x + 1$ en $x + y = 10$. De eerste zegt precies wat $y$ is: tweemaal $x$, plus één. Overal waar in de tweede vergelijking $y$ staat, mag je dus $2x + 1$ schrijven. Dat geeft

$$
x + (2x + 1) = 10.
$$

Dit is een gewone vergelijking met één onbekende. Werk haakjes weg en tel gelijksoortige termen bij elkaar: $3x + 1 = 10$, dus $3x = 9$ en $x = 3$. Je bent er nog niet: een stelsel vraagt een **paar**. Vul $x = 3$ in de vergelijking die $y$ al uitdrukt, $y = 2x + 1$, en je krijgt $y = 7$. De oplossing is $(3; 7)$.

Merk op dat de eerste vergelijking hier tweemaal een rol speelt. Eerst gebruikte je haar als *recept* voor het vervangen van $y$; daarna als *rekenregel* om $y$ uit te rekenen zodra $x$ bekend was. De tweede vergelijking werd alleen gebruikt om $x$ te vinden. Samen komen ze overeen met twee voorwaarden, en dat is precies genoeg.

## Eerst vrijmaken

Vaak staat geen van de onbekenden al vrij. Dan maak je er zelf een vrij, door één vergelijking om te schrijven tot "onbekende = uitdrukking". Kies daarvoor bij voorkeur een onbekende met coëfficiënt $1$ of $-1$, want dan krijg je geen breuken.

:::example Eerst vrijmaken
Los op: $2x + y = 8$ en $x + 2y = 10$ (het koffiekarprobleem uit de vorige les).

**Stap 1 – kies en maak vrij.** In de eerste vergelijking heeft $y$ coëfficiënt $1$. Trek $2x$ van beide kanten af: $y = 8 - 2x$.

**Stap 2 – vervang.** Vul deze uitdrukking in voor $y$ in de *andere* vergelijking, met haakjes: $x + 2(8 - 2x) = 10$.

**Stap 3 – los de vergelijking met één onbekende op.** Werk de haakjes weg: $x + 16 - 4x = 10$. Dus $-3x + 16 = 10$, en $-3x = -6$. Hieruit volgt $x = 2$.

**Stap 4 – bereken de tweede onbekende.** Vul $x = 2$ in $y = 8 - 2x$ in: $y = 8 - 4 = 4$.

**Stap 5 – controleer in beide oorspronkelijke vergelijkingen.** $2 \cdot 2 + 4 = 8$ klopt, $2 + 2 \cdot 4 = 10$ klopt. De oplossing is $(2; 4)$: een thee kost € 2 en een koffie € 4.
:::

Je ziet dat de rekenvolgorde altijd hetzelfde is: vrijmaken, vervangen, oplossen, terugrekenen, controleren. Bij een stelsel als dit, waarbij je de vervangende uitdrukking in de *andere* vergelijking zet, kan je niets verkeerd doen, zolang je de haakjes behoudt.

## Waarom de haakjes zo belangrijk zijn

De uitdrukking die je invult is bijna altijd een som of verschil van meerdere termen. Zonder haakjes val je terug in een van de meest gemaakte fouten bij stelsels. In $x + 2y = 10$ staat $2y$ voor "tweemaal $y$". Vervang je $y$ door $8 - 2x$, dan is dat tweemaal *alles*, en dus $2(8 - 2x) = 16 - 4x$. Schrijf je $2 \cdot 8 - 2x$, dan heb je alleen het eerste deel verdubbeld en blijft er $x + 16 - 2x = 10$ over, wat tot $x = 6$ leidt. Dat is geen oplossing: $y$ zou dan $8 - 12 = -4$ worden en $x + 2y = 6 - 8 = -2$ voldoet niet aan de tweede vergelijking.

:::warning Haakjes vergeten
Bij substitutie vervang je een onbekende door een *hele* uitdrukking. Zet die uitdrukking dus tussen haakjes, zeker als er een factor voor staat of een minteken. Het verschil tussen $3x + 2(5 - 2x)$ en $3x + 2 \cdot 5 - 2x$ is het verschil tussen een juiste en een foute oplossing.
:::

## Controle in beide voorwaarden

Een paar dat de vergelijking waarin je het ingevuld hebt laat kloppen, is nog niet noodzakelijk een oplossing van het stelsel. Controleer het gevonden paar daarom altijd in **beide oorspronkelijke vergelijkingen**, niet in de omgewerkte versies. Ook als je onderweg een rekenfout maakte, onthult de controle in de originele vorm die fout. Wie alleen in de omgewerkte vergelijking controleert, ziet een eigen fout niet terug: de fout zit immers al in die vergelijking.

Er is nog een tweede reden voor deze gewoonte. Soms vult een leerling per ongeluk in dezelfde vergelijking in waaruit hij of zij de uitdrukking had gehaald. Dat levert een tautologie op: $x + 2(8 - 2x)$ in $2x + y = 8$ ingevuld geeft $2x + 8 - 2x = 8$, dus $8 = 8$, wat altijd waar is. Een goede regel is: de uitdrukking die je gebruikt om te vervangen komt uit de ene vergelijking, en je vult haar in in de *andere*.

:::example Een tweede voorbeeld, met een minteken
Los op: $x - y = 3$ en $2x + y = 12$.

Maak $y$ vrij uit de eerste vergelijking: $-y = 3 - x$, dus $y = x - 3$. Vul in de tweede in: $2x + (x - 3) = 12$. Dat is $3x - 3 = 12$, dus $3x = 15$ en $x = 5$. Dan $y = 5 - 3 = 2$.

Controle: $5 - 2 = 3$ klopt en $2 \cdot 5 + 2 = 12$ klopt. De oplossing is $(5; 2)$.
:::

## Wanneer is substitutie handig?

Substitutie werkt altijd, maar is het prettigst als één onbekende al vrijstaat of met coëfficiënt $1$ of $-1$ in een vergelijking staat. Dan blijven alle tussenstappen met gehele getallen. Staat er in elke vergelijking een onbekende met een lastige coëfficiënt, zoals $3x + 5y = 7$, dan krijg je bij het vrijmaken breuken: $y = \frac{7 - 3x}{5}$. Dat is rekenkundig geen probleem, maar het geeft meer kans op fouten. In de volgende les leer je een tweede methode die zulke gevallen vaak korter oplost.

Substitutie is ook de methode die het best uitbreidt naar situaties waarin de vergelijkingen niet lineair zijn. Een stelsel als $y = x^2$ en $x + y = 6$ laat zich niet door optellen en aftrekken eenvoudig oplossen, maar wel door $y$ te vervangen: $x + x^2 = 6$. In module 21 kom je dat tegen bij het snijden van een parabool en een rechte lijn. Het idee dat je hier leert, blijft dus nuttig lang nadat je lineaire stelsels uit je hoofd kunt.

:::question Welke kies je?
Je krijgt het stelsel $3x + 5y = 7$ en $x - 2y = 4$. In welke vergelijking en voor welke onbekende maak je het liefst vrij? Wat maakt die keuze handig, en welke keuze zou breuken opleveren?
:::

{{ exercises: 20-003, 20-004, 20-005, 20-006, 20-007 }}

De volgende twee oefeningen vragen je om het eindresultaat van één onbekende. Let op de haakjes en controleer hoe je dat antwoord terugrekent.

{{ exercises: 20-032, 20-033 }}
