# Driehoeken en vierhoeken

Een **veelhoek** is een vlakke figuur die begrensd wordt door rechte lijnstukken, de **zijden**. De punten waar twee zijden samenkomen, zijn de **hoekpunten**. De eenvoudigste veelhoek is de driehoek; daarna komen de vierhoek, de vijfhoek, enzovoort. In deze les leer je de belangrijkste soorten driehoeken en vierhoeken herkennen aan hun eigenschappen, en je bewijst de bekendste regel van de vlakke meetkunde: de hoeken van een driehoek tellen op tot $180°$.

## 1. Soorten driehoeken

Je kunt driehoeken op twee manieren indelen: naar hun **zijden** en naar hun **hoeken**.

:::definition Driehoeken naar zijden
- **Ongelijkzijdig**: alle drie zijden verschillend.
- **Gelijkbenig**: minstens twee zijden even lang. Die twee heten de **benen**, de derde zijde de **basis**. De hoek tussen de benen heet de **tophoek**, de twee hoeken aan de basis de **basishoeken**.
- **Gelijkzijdig**: alle drie zijden even lang.
:::

:::definition Driehoeken naar hoeken
- **Scherphoekig**: alle drie hoeken scherp.
- **Rechthoekig**: één hoek van $90°$. De zijde tegenover de rechte hoek heet de **schuine zijde**.
- **Stomphoekig**: één hoek stomp.
:::

Beide indelingen staan los van elkaar. Een driehoek kan dus tegelijk gelijkbenig en rechthoekig zijn: denk aan een vierkant dat je langs een diagonaal doorknipt.

Twee eigenschappen gebruik je steeds weer.

- In een **gelijkbenige driehoek zijn de basishoeken gelijk**. Vouw de driehoek dubbel langs de lijn van de top naar het midden van de basis: de twee helften passen precies op elkaar, en de basishoeken vallen samen. (Euclides bewijst dit zorgvuldiger in propositie I.5.)
- In een **gelijkzijdige driehoek zijn alle hoeken gelijk**, en zoals je zo zult zien, zijn ze dus elk $60°$.

## 2. De hoekensom van een driehoek

Teken een willekeurige driehoek, knip de drie hoeken eraf en leg ze met hun punten tegen elkaar. Ze vormen samen een gestrekte hoek: een rechte lijn. Dat proefje werkt elke keer. Maar waarom?

![Bewijs van de hoekensom met een evenwijdige lijn](/images/diagrams/m11-hoekensom-bewijs.svg "Door de top C loopt een lijn evenwijdig aan AB. De hoeken a en b komen als Z-hoeken boven terug; samen met c vormen ze een gestrekte hoek.")

:::theory De hoekensom van een driehoek is 180°
Neem driehoek $ABC$ met hoeken $a$ bij $A$, $b$ bij $B$ en $c$ bij $C$.

1. Teken door $C$ de lijn die evenwijdig is aan $AB$.
2. Zijde $AC$ is een snijlijn van de twee evenwijdige lijnen. De hoek tussen $AC$ en de nieuwe lijn (links van $C$) is een Z-hoek met $a$, dus ook gelijk aan $a$.
3. Op dezelfde manier is de hoek rechts van $C$ een Z-hoek met $b$, dus gelijk aan $b$.
4. Bij $C$ liggen nu drie hoeken naast elkaar langs een rechte lijn: $a$, $c$ en $b$. Samen vormen ze een gestrekte hoek.

Dus $a + b + c = 180°$.
:::

Dit is, in andere woorden, Euclides' propositie I.32. Het bewijs leunt op de regels voor evenwijdige lijnen uit les 2, en die leunen uiteindelijk op Euclides' beroemde vijfde postulaat over evenwijdige lijnen. Op een gebogen oppervlak, zoals de aarde, geldt dat postulaat niet, en dan klopt de hoekensom ook niet meer: een driehoek met hoekpunten op de noordpool en twee punten op de evenaar kan drie rechte hoeken hebben. Voor akkers, bouwtekeningen en schoolschriften is het vlak echter een uitstekend model.

:::example Drie toepassingen van de hoekensom
**a. Twee hoeken bekend.** Een driehoek heeft hoeken van $48°$ en $67°$. De derde is $180° - 48° - 67° = 65°$.

**b. Gelijkbenig, basishoek bekend.** De basishoeken zijn elk $72°$. De tophoek is $180° - 2 \times 72° = 36°$.

**c. Gelijkbenig, tophoek bekend.** De tophoek is $100°$. Voor de twee basishoeken samen blijft $180° - 100° = 80°$ over. Ze zijn gelijk, dus elk $40°$.

Let bij b en c op welke hoek gegeven is. Wie bij c de $100°$ als basishoek leest, krijgt twee hoeken van $100°$, en die passen samen al niet meer in een driehoek.
:::

### De buitenhoek

Verleng je een zijde van een driehoek, dan ontstaat buiten de driehoek een **buitenhoek**. Die is de nevenhoek van de binnenhoek ernaast. Daaruit volgt een handige regel: de **buitenhoek is gelijk aan de som van de twee niet-aanliggende binnenhoeken**. Immers, buitenhoek $= 180° - c$, en ook $a + b = 180° - c$.

:::example Een buitenhoek
In driehoek $ABC$ is $\angle A = 35°$ en $\angle B = 70°$. Zijde $BC$ wordt voorbij $C$ verlengd. Hoe groot is de buitenhoek bij $C$?

Direct: buitenhoek $= 35° + 70° = 105°$. Via de binnenhoek: $\angle C = 180° - 35° - 70° = 75°$, en de buitenhoek is $180° - 75° = 105°$. Twee routes, hetzelfde antwoord.
:::

### Welke drie zijden vormen een driehoek?

Niet elk drietal lengtes past in een driehoek. Probeer maar een driehoek te maken met stokjes van 2, 3 en 7 cm: de twee korte stokjes zijn samen maar 5 cm en halen elkaar niet in boven het lange stokje.

:::theory De driehoeksongelijkheid
In elke driehoek is de som van twee zijden **groter** dan de derde zijde. Voor zijden $p$, $q$ en $r$ geldt dus $p + q > r$, $p + r > q$ en $q + r > p$.
:::

Het is genoeg om te controleren of de twee kortste zijden samen langer zijn dan de langste. Bij 4, 5 en 9 cm is $4 + 5 = 9$: de "driehoek" klapt plat tot een lijnstuk. Bij 4, 5 en 8 cm lukt het wel.

{{ exercises: 11-007, 11-008, 11-033 }}

## 3. Soorten vierhoeken

Bij vierhoeken spelen twee vragen een rol: welke zijden zijn **evenwijdig**, en welke zijden of hoeken zijn **gelijk**?

| Figuur | Definitie | Daaruit volgt onder meer |
|---|---|---|
| Trapezium | minstens één paar overstaande zijden evenwijdig | – |
| Parallellogram | beide paren overstaande zijden evenwijdig | overstaande zijden en overstaande hoeken gelijk; diagonalen delen elkaar middendoor |
| Rechthoek | vier rechte hoeken | is een parallellogram; diagonalen even lang |
| Ruit | vier gelijke zijden | is een parallellogram; diagonalen staan loodrecht op elkaar |
| Vierkant | vier gelijke zijden én vier rechte hoeken | is rechthoek én ruit |
| Vlieger | twee paren aanliggende zijden gelijk | één diagonaal is symmetrieas |

![De familie van vierhoeken](/images/diagrams/m11-vierhoeken.svg "Een pijl betekent 'is een bijzonder geval van'. Een vierkant is dus ook een rechthoek, een ruit, een parallellogram en een trapezium.")

Het schema laat zien dat de categorieën **in elkaar passen**, net als "hond", "zoogdier" en "dier". Een vierkant is een bijzondere rechthoek; een rechthoek is een bijzonder parallellogram. Dat is geen spelletje met woorden: alles wat je bewijst voor parallellogrammen, geldt daardoor meteen ook voor rechthoeken, ruiten en vierkanten. De oppervlakteformule uit de volgende les hoef je dus niet voor elke soort apart te leren.

:::warning Definities verschillen per boek
In deze module is een trapezium een vierhoek met **minstens één** paar evenwijdige zijden, zodat een parallellogram ook een trapezium is. Sommige boeken eisen **precies één** paar. Beide afspraken komen voor; controleer welke een bron gebruikt voordat je conclusies trekt.
:::

In een parallellogram liggen twee naast elkaar liggende hoeken als binnenhoeken aan dezelfde kant tussen twee evenwijdige zijden. Ze tellen dus op tot $180°$ (les 2). Ken je één hoek van een parallellogram, dan ken je ze alle vier.

## 4. De hoekensom van een vierhoek

Trek in een vierhoek een diagonaal. Die verdeelt de vierhoek in twee driehoeken, en de hoeken van die twee driehoeken vormen samen precies de hoeken van de vierhoek. Dus:

$$
\text{hoekensom vierhoek} = 2 \times 180° = 360°
$$

Dat geldt voor élke vierhoek, niet alleen voor rechthoeken (waar $4 \times 90° = 360°$ meteen te zien is).

Hetzelfde idee werkt voor elke veelhoek zonder inspringende hoeken. Vanuit één hoekpunt kun je een $n$-hoek in $n - 2$ driehoeken verdelen. De hoekensom van een $n$-hoek is dus $(n - 2) \times 180°$. Voor een vijfhoek is dat $3 \times 180° = 540°$, voor een zeshoek $720°$.

:::example Een parallellogram en een onregelmatige vierhoek
**a.** In parallellogram $PQRS$ is $\angle P = 64°$. Dan is $\angle Q = 180° - 64° = 116°$ (naastliggende hoeken), $\angle R = 64°$ en $\angle S = 116°$ (overstaande hoeken gelijk). Controle: $64 + 116 + 64 + 116 = 360$.

**b.** Een vierhoekig perceel heeft hoeken van $88°$, $93°$ en $101°$. De vierde hoek is $360° - 88° - 93° - 101° = 78°$. Dat het perceel "bijna rechthoekig" is, betekent nog niet dat je het als rechthoek mag behandelen; daarover meer in het historisch intermezzo.
:::

:::question Wat weet je zeker?
Een schets lijkt een vierkant, maar in de tekening zijn alleen twee gelijke zijden aangegeven. Mag je dan vier rechte hoeken aannemen? Welke aanvullende informatie zou je nodig hebben om zeker te weten dat het een vierkant is?
:::

Het antwoord op die denkvraag: nee. Een vierhoek met twee gelijke zijden kan een vlieger, een trapezium of iets heel onregelmatigs zijn. Om "vierkant" te mogen concluderen, heb je bijvoorbeeld nodig dat alle vier zijden gelijk zijn **en** dat één hoek recht is (een ruit met één rechte hoek heeft er automatisch vier). Leer jezelf aan om bij elke meetkundige figuur te vragen: wat is **gegeven**, en wat **lijkt** alleen maar zo?

{{ exercises: 11-009, 11-010, 11-034 }}
