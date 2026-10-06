# Twee aankopen, twee prijzen

In de vorige modules las je vergelijkingen met één onbekende. Eén vergelijking, één getal dat je zoekt: $3x + 4 = 19$ heeft precies één oplossing, en je vindt die door de bewerkingen om te keren. In deze module ga je een stap verder. Veel vragen uit het dagelijks leven bevatten **twee** onbekende grootheden tegelijk, en je krijgt daarover ook twee stukjes informatie.

Een voorbeeld. Bij een koffiekar betaalt een bezoeker voor twee thee en één koffie samen € 8. Een tweede bezoeker betaalt voor één thee en twee koffie samen € 10. Je kent geen van beide prijzen. Noem de prijs van een thee $x$ en de prijs van een koffie $y$ (beide in euro). Dan geldt tegelijk:

$$
\begin{aligned}
2x + y &= 8 \\
x + 2y &= 10
\end{aligned}
$$

Zo'n paar vergelijkingen heet een **stelsel van vergelijkingen**. Je zoekt niet één getal, maar een **paar** waarden $(x; y)$ dat in beide vergelijkingen tegelijk klopt.

:::question Een denkvraag vooraf
Stel dat je alleen de eerste aankoop kent: twee thee en één koffie voor € 8. Kun je dan de prijs van een thee bepalen? Probeer een paar prijzen te bedenken die bij die ene aankoop passen, en bedenk daarna welke tweede aankoop jou zekerheid zou geven.
:::

## Waarom één vergelijking niet genoeg is

Neem alleen de eerste vergelijking, $2x + y = 8$. Je kunt zelf een waarde voor $x$ kiezen en dan $y$ uitrekenen. Kies je $x = 1$, dan volgt $y = 8 - 2 = 6$. Kies je $x = 3$, dan is $y = 8 - 6 = 2$. Beide paren kloppen:

| $x$ (thee) | $y$ (koffie) | Controle: $2x + y$ |
|---|---|---|
| 0 | 8 | $0 + 8 = 8$ |
| 1 | 6 | $2 + 6 = 8$ |
| 2 | 4 | $4 + 4 = 8$ |
| 3 | 2 | $6 + 2 = 8$ |
| 4 | 0 | $8 + 0 = 8$ |

Er is dus geen "de" oplossing: de ene vergelijking laat een hele reeks mogelijkheden over. Dat zijn er ook meer dan de gehele getallen in de tabel. Ook $x = 1{,}50$ geeft een correct paar, namelijk $y = 5$. Zodra je getallen zoals deze toelaat, zijn het er oneindig veel.

Als je die paren als punten in een assenstelsel tekent, liggen ze allemaal op één **rechte lijn**. Dat is geen toeval. In module 17 en 19 zag je dat elke vergelijking van de vorm $ax + by = c$ een rechte lijn beschrijft. De oplossingen van één vergelijking met twee onbekenden vormen dus een hele lijn.

![De oplossingen van 2x + y = 8 liggen op een rechte lijn](/images/diagrams/m20-een-vergelijking.svg "De vijf gehele paren uit de tabel (blauw) liggen op de lijn 2x + y = 8; elk ander punt van die lijn is ook een oplossing van deze ene vergelijking.")

{{ widget: coordinate-grid size=8 points="(0;8) (1;6) (2;4) (3;2) (4;0)" }}

Sleep of klik in de rooster en kijk wat er gebeurt met de punten: ze liggen op één lijn, en de helling tussen twee punten is steeds hetzelfde, namelijk $-2$. Dat klopt met de vergelijking: als $x$ met 1 toeneemt, neemt $y$ met 2 af.

## Twee voorwaarden tegelijk

Nu de tweede aankoop, $x + 2y = 10$. Ook die heeft oneindig veel paren, bijvoorbeeld:

| $x$ (thee) | $y$ (koffie) | Controle: $x + 2y$ |
|---|---|---|
| 0 | 5 | $0 + 10 = 10$ |
| 2 | 4 | $2 + 8 = 10$ |
| 4 | 3 | $4 + 6 = 10$ |
| 6 | 2 | $6 + 4 = 10$ |
| 10 | 0 | $10 + 0 = 10$ |

Vergelijk beide tabellen. Het paar $(2; 4)$ staat in allebei. Een thee die € 2 kost en een koffie van € 4 voldoen dus aan de eerste aankoop ($4 + 4 = 8$) én aan de tweede ($2 + 8 = 10$). Geen enkel ander paar staat in beide tabellen. Het is ook niet moeilijk te zien waarom: twee verschillende rechte lijnen hebben hoogstens één punt gemeen.

:::definition Stelsel en oplossing
Een **stelsel van vergelijkingen** bestaat uit twee of meer vergelijkingen die tegelijk waar moeten zijn. Een **oplossing** is een paar waarden voor de onbekenden dat in **elke** vergelijking van het stelsel klopt. Het stelsel **oplossen** betekent: alle zulke paren vinden.
:::

Een paar dat maar bij één van de vergelijkingen past, is dus nog geen oplossing. Zo past $(3; 2)$ bij de eerste aankoop ($6 + 2 = 8$), maar niet bij de tweede ($3 + 4 = 7 \ne 10$).

:::example Past dit paar?
Controleer of $(4; 3)$ een oplossing is van het stelsel $2x + y = 8$, $x + 2y = 10$.

Vul in de eerste vergelijking in: $2 \cdot 4 + 3 = 11$. Dat is niet gelijk aan 8, dus het paar voldoet niet aan de eerste vergelijking. Meer controle is niet nodig: één mislukte vergelijking is genoeg om het paar af te wijzen. (Toevallig klopt de tweede wel: $4 + 6 = 10$. Een paar dat aan één vergelijking voldoet, is nog geen oplossing.)
:::

## Waarom bestaat deze wiskunde?

Het idee dat je meerdere onbekenden kunt vinden door meerdere voorwaarden te combineren, is erg oud. In het oude China kwam het naar voren in de bekende verzameling *Negen Hoofdstukken over de Wiskundige Kunst*, waarvan hoofdstuk 8 geheel is gewijd aan problemen met meer onbekenden. Het eerste probleem daar gaat over graan van drie kwaliteiten: drie bundels van de beste soort, twee van de middelste en één van de slechtste leveren samen 39 maten op; andere combinaties leveren 34 en 26 maten. Je zoekt wat één bundel van elke soort oplevert. Het is een stelsel met drie onbekenden, en het wordt opgelost met een methode die in essentie dezelfde is als wat je in deze module leert. In les 6 vertellen we het verhaal uitgebreid.

Waar de stelsels in de moderne tijd voor worden gebruikt, is bijna onbegrensd: prijzen en mengsels, spanning en stroom in een elektrische schakeling, de positie van een schip of een satelliet, schattingen in de statistiek, de vervorming van een brug onder belasting. Steeds is het patroon hetzelfde: meerdere onbekenden, en net zoveel onafhankelijke aanwijzingen. Dat laatste is cruciaal, en je leert in deze module precies wat "onafhankelijk" betekent.

:::tip Evenveel vergelijkingen als onbekenden
Een goede vuistregel is: voor twee onbekenden heb je twee vergelijkingen nodig. Het is een vuistregel, geen garantie. Twee vergelijkingen die hetzelfde zeggen, tellen als één, en twee vergelijkingen die elkaar tegenspreken, hebben geen gemeenschappelijke oplossing. In les 5 werk je dat uit.
:::

## Wat je in deze module leert

Je leert drie manieren om een stelsel met twee onbekenden op te lossen. **Substitutie** (les 2) vervangt een onbekende door een uitdrukking in de andere. **Eliminatie** (les 3) laat een onbekende verdwijnen door vergelijkingen op te tellen of af te trekken. De **grafische methode** (les 4) leest de oplossing af als snijpunt van twee lijnen. Daarna onderzoek je in les 5 wat er gebeurt als lijnen evenwijdig lopen of samenvallen. Les 6 vertelt hoe Chinese rekenaars en later Gauss dit aanpakten, en in les 7 stel je stelsels op uit praktische situaties.

{{ goals }}

{{ glossary }}

## Oefenen

Begin met het controleren van een voorstel en het invullen van één vergelijking. Daarna los je het koffiekarprobleem zelf op.

{{ exercise: 20-031 }}

{{ exercises: 20-001, 20-002 }}
