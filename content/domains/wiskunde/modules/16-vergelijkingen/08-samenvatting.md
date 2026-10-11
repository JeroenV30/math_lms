# Samenvatting

In deze module ging het om één vraag: welke handelingen veranderen de **vorm** van een vergelijking zonder haar **oplossingen** te veranderen? Het antwoord is de balansmethode. Wat je aan de ene kant doet, doe je ook aan de andere kant, en elke stap moet terug te draaien zijn. Daarmee heb je een methode in handen die al een duizend jaar oud is in haar kern (al-jabr en al-muqabala) en die je voor bijna elke lineaire vergelijking kunt gebruiken.

## Wat je nu moet beheersen

:::summary Kernpunten
- **Begrippen.** Een vergelijking is een uitspraak dat twee expressies gelijk zijn. Een oplossing is een waarde van de onbekende die de vergelijking waar maakt. Twee vergelijkingen met dezelfde oplossingen heten gelijkwaardig.
- **Balansregels.** Aan beide kanten hetzelfde optellen of aftrekken, en beide kanten met hetzelfde getal vermenigvuldigen of door hetzelfde getal delen, **niet nul**. Daarnaast mag je elke kant los herschrijven.
- **Omgekeerde bewerkingen.** Maak het recept achterstevoren ongedaan: eerst de laatste bewerking, dan de eerste.
- **Termen en factoren.** Een term haal je weg door op te tellen of af te trekken; een factor door te delen. "Naar de andere kant brengen" is een verkorte balansstap.
- **Controle.** Vul de uitkomst in de **oorspronkelijke** vergelijking in. Een oplossing die je niet hebt gecontroleerd, is nog maar een kandidaat.
:::

## Het stappenplan

Voor een lineaire vergelijking werk je in deze volgorde:

1. Werk haakjes weg, met het teken van de factor. Een minteken vóór haakjes verandert **elk** teken binnen de haakjes.
2. Vereenvoudig elke kant: voeg gelijksoortige termen samen.
3. Verzamel de $x$-termen aan één kant, het liefst aan de kant met de meeste $x$.
4. Verzamel de losse getallen aan de andere kant.
5. Deel door de coëfficiënt van $x$ (die mag niet nul zijn).
6. Controleer in de oorspronkelijke vergelijking.

:::formula Samengevat
$$
ax + b = c \;\Longrightarrow\; x = \frac{c - b}{a} \quad (a \neq 0)
\qquad\qquad
ax + b = cx + d \;\Longrightarrow\; x = \frac{d - b}{a - c} \quad (a \neq c)
$$
De tweede formule volgt uit de eerste balansstappen: trek $cx$ en $b$ af, en deel door $a - c$. Je hoeft haar niet uit je hoofd te leren; het gaat om de volgorde van de stappen.
:::

## Breuken en kommagetallen

- Vermenigvuldig **elke term** van beide kanten met het kgv van de noemers. Dan verdwijnen alle breuken tegelijk.
- Een breukstreep onder een som werkt als haakjes: $\tfrac{x + 4}{5}$ is $(x + 4) : 5$. Zet tellers tussen haakjes voordat je vermenigvuldigt.
- Kommagetallen werk je weg door met 10, 100 of een ander machtsgetal van 10 te vermenigvuldigen.
- Staat de onbekende in een noemer, schrijf dan de voorwaarde op (de noemer is niet nul) en controleer of je oplossing daaraan voldoet.

## Bijzondere gevallen

Verdwijnt de onbekende uit de vergelijking, beoordeel dan de uitspraak die overblijft:

| Wat overblijft | Voorbeeld | Conclusie |
|---|---|---|
| een onware uitspraak | $4 = 9$ | **geen** oplossing |
| een ware uitspraak | $2 = 2$ | **elke** waarde is een oplossing (identiteit) |
| $ax = b$ met $a \neq 0$ | $3x = 15$ | **één** oplossing $x = \tfrac{b}{a}$ |

De conclusie $0 = 0$ betekent niet $x = 0$, maar dat elke $x$ voldoet. Dat past bij de grafiek: twee evenwijdige lijnen snijden elkaar niet, twee samenvallende lijnen snijden elkaar overal, twee lijnen met verschillende helling snijden elkaar op precies één plek.

## Formules omwerken

Een letter vrijmaken volgt dezelfde regels als een onbekende oplossen: behandel de andere letters als getallen die je toevallig niet kent. Maak de bewerkingen ongedaan in omgekeerde volgorde, behandel een som als één blok, en noteer de voorwaarde als je door een letter deelt ($v \neq 0$). Controleer met eenvoudige getallen: kies waarden waarvan je de uitkomst al weet.

## Ongelijkheden

- Optellen en aftrekken: het teken blijft.
- Vermenigvuldigen of delen met een **positief** getal: het teken blijft.
- Vermenigvuldigen of delen met een **negatief** getal: het teken **klapt om**.
- De oplossing is een gebied, op de getallenlijn een halve lijn; open bolletje bij $<$ en $>$, dicht bij $\le$ en $\ge$. Controleer met één testwaarde.
- Bij contextvragen met aantallen: reken de grens door naar de gehele getallen, naar beneden bij "hoogstens" en naar boven bij "minstens".

## Een verhaal vertalen

Kies de onbekende (met eenheid), zoek de **twee** dingen die gelijk zijn, schrijf de vergelijking op, los op, controleer in de vergelijking én in het verhaal, en sluit af met een volledige zin. Let op negatieve of niet-gehele uitkomsten die in de situatie niet kunnen.

## De veelgemaakte fouten op een rij

| Fout | Voorbeeld | Herstel |
|---|---|---|
| Een stap vergeten | $2x + 6 = 18 \to x = 12$ | Na aftrekken van 6 nog delen door 2 |
| Maar aan één kant iets doen | $2x + 6 - 6 = 18 \to x = 9$ | Doe het aan **beide** kanten |
| Minteken bij haakjes | $9 - (x - 3) = 9 - x - 3$ | Elk teken binnen de haakjes wisselt: $9 - x + 3$ |
| Maar één term vermenigvuldigen | $\tfrac{x}{5} + 4 = 6 \to x + 4 = 30$ | Vermenigvuldig **elke** term met 5 |
| Ongelijkheid niet omklappen | $-2x \ge 6 \to x \ge -3$ | Delen door een negatief getal: $x \le -3$ |
| Termen en factoren verwarren | $2x = 12 \to x = 10$ | Een factor haal je weg door te **delen** |

## Terug naar het begin

De Egyptische schrijver Ahmes loste "een hoeveelheid en haar zevende deel zijn 19" op met een gok en een correctie. Jij schrijft $x + \tfrac{x}{7} = 19$, vermenigvuldigt met 7, krijgt $8x = 133$ en vindt $x = \tfrac{133}{8}$. Dezelfde uitkomst, een heel ander gereedschap: een taal van symbolen waarin je kunt **redeneren** over wat je nog niet weet. Dat dit mogelijk werd, is een van de grote stappen in de wiskundegeschiedenis, van Al-Khwarizmi's boek rond het jaar 820 tot Recordes isgelijkteken in 1557.

## Wat nu?

In module 17 teken je grafieken in een assenstelsel, en in module 19 en 20 komen lineaire functies en stelsels van vergelijkingen terug: dezelfde balansmethode, nu met twee onbekenden en met snijpunten van lijnen. Een goede beheersing van de balansmethode is daarvoor de belangrijkste voorbereiding. Test jezelf met de hoofdstuktoets: 15 vragen, 70% is nodig om de module af te ronden en 85% voor "beheerst".

{{ quiz }}
