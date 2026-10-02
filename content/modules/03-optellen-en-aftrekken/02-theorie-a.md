# Optellen en aftrekken begrijpen en uit het hoofd

Voordat we gaan rekenen met getallen van vijf cijfers, kijken we rustig naar wat optellen en aftrekken eigenlijk *betekenen*. Dat lijkt overbodig, maar bijna alle hoofdrekenstrategieën en bijna alle controlemethoden volgen rechtstreeks uit die betekenis. Wie begrijpt wat er gebeurt, hoeft minder te onthouden.

## Wat is optellen?

Optellen beschrijft twee situaties die wiskundig hetzelfde zijn:

- **Samenvoegen.** Twee kuddes van 45 en 38 schapen worden in één kraal gezet. Hoeveel schapen staan er samen?
- **Erbij doen.** In een kraal staan 45 schapen; er komen er 38 bij. Hoeveel zijn het er nu?

In beide gevallen schrijven we $45 + 38 = 83$. De getallen die je optelt heten **termen**, de uitkomst heet de **som**.

:::definition Som
Bij $a + b = s$ heten $a$ en $b$ de termen en $s$ de som. De som is het aantal dat je krijgt als je de hoeveelheden $a$ en $b$ samenneemt.
:::

## Wat is aftrekken?

Aftrekken heeft zelfs drie gezichten. Alle drie leiden tot dezelfde berekening, maar ze roepen in je hoofd een heel ander beeld op — en dat beeld bepaalt welke rekenstrategie het handigst is.

1. **Weghalen.** Er staan 83 schapen; er gaan er 38 naar de tempel. Hoeveel blijven er over?
2. **Vergelijken.** Kudde A telt 83 schapen, kudde B telt 38. Hoeveel schapen heeft A meer dan B?
3. **Aanvullen.** Je hebt 38 schapen en je moet er 83 leveren. Hoeveel moet je er nog bij krijgen?

In alle drie de gevallen is het antwoord $83 - 38 = 45$. De uitkomst van een aftrekking heet het **verschil**. Dat woord past het best bij betekenis 2: het verschil is *hoeveel het ene getal groter is dan het andere*.

## Optellen en aftrekken op de getallenlijn

Op een getallenlijn liggen de getallen op gelijke afstanden van elkaar, van klein (links) naar groot (rechts).

- **Optellen** is naar rechts springen: $45 + 38$ betekent 'begin bij 45 en spring 38 stappen naar rechts'.
- **Aftrekken als weghalen** is naar links springen: $83 - 38$ betekent 'begin bij 83 en spring 38 stappen naar links'.
- **Aftrekken als verschil** is de *afstand* tussen twee punten: hoe ver ligt 38 van 83 af?

Probeer het zelf. Zet het punt op 45 en bedenk waar je uitkomt als je 38 naar rechts springt. Zet het daarna op 83 en spring 38 naar links.

{{ widget: number-line min=0 max=100 value=45 }}

## De rekenregels

Bij optellen mag je de volgorde en de groepering van de termen vrij kiezen.

:::formula Wissel- en schakeleigenschap
$$
a + b = b + a \qquad\qquad (a + b) + c = a + (b + c)
$$
:::

Waarom? Denk aan het samenvoegen van kuddes: het maakt voor het totaal niet uit welke kudde je als eerste de kraal in drijft, en ook niet of je eerst kudde 1 en 2 samenvoegt of eerst kudde 2 en 3. Daardoor mag je bij een lange optelling de termen zo groeperen dat het rekenen makkelijk wordt:

$$
37 + 85 + 63 = (37 + 63) + 85 = 100 + 85 = 185
$$

:::warning Aftrekken is niet zo vergevingsgezind
Bij aftrekken mag je de getallen **niet** omwisselen: $10 - 3 = 7$, maar $3 - 10$ is iets heel anders (een negatief getal, dat behandelen we in module 13). En je mag ook niet zomaar haakjes verschuiven: $(20 - 5) - 3 = 12$, maar $20 - (5 - 3) = 18$.
:::

Wat wél mag: **meerdere aftrekkingen samennemen**. Als je eerst 120 schapen afgeeft en daarna 59, ben je er in totaal $120 + 59 = 179$ kwijt:

$$
a - b - c = a - (b + c)
$$

Zo kon de schrijver uit de introductie kiezen: alles in de volgorde van de tekst verwerken, of eerst alle ontvangsten optellen, dan alle uitgaven optellen, en die twee totalen van elkaar aftrekken. Dat laatste is precies wat de Sumerische balansrekening deed.

## Optellen en aftrekken zijn elkaars omgekeerde

Als je 38 schapen bij 45 schapen zet, en daarna haal je diezelfde 38 weer weg, dan heb je weer 45. Aftrekken maakt optellen ongedaan, en andersom. Daarom vormen een optelling en twee aftrekkingen samen één 'rekenfamilie':

$$
45 + 38 = 83 \quad\Longleftrightarrow\quad 83 - 38 = 45 \quad\Longleftrightarrow\quad 83 - 45 = 38
$$

:::formula Omgekeerde bewerking
$$
a - b = c \iff c + b = a
$$
Het verschil plus het afgetrokken getal geeft het getal waar je mee begon.
:::

Dit is het belangrijkste gereedschap van deze module. Je gebruikt het om

- een **ontbrekend getal** te vinden: in $\ldots + 38 = 83$ zoek je $83 - 38$;
- een aftrekking te **controleren**: klopt $83 - 38 = 45$? Reken $45 + 38$ uit en kijk of je 83 krijgt;
- een aftrekking uit te rekenen door **aanvullen** (zie verderop).

## Hoofdrekenen: vier strategieën

Hoofdrekenen is geen kunstje van mensen met een 'rekenknobbel'. Het is het bewust kiezen van een handige route. We bekijken de vier klassieke strategieën. Bij elk staat een uitgewerkt voorbeeld met alle denkstappen.

### 1. Splitsen

Je splitst *beide* getallen in tientallen en eenheden (of honderdtallen, tientallen en eenheden) en rekent elke soort apart uit. Dat is de hoofdrekenvariant van het kolomsgewijs rekenen.

:::example Splitsen: $46 + 37$
- Splits: $46 = 40 + 6$ en $37 = 30 + 7$.
- Tientallen samen: $40 + 30 = 70$.
- Eenheden samen: $6 + 7 = 13$.
- Voeg samen: $70 + 13 = 83$.

Splitsen werkt prettig bij optellen. Bij aftrekken is het riskant: bij $83 - 47$ zou je $80 - 40 = 40$ en $3 - 7$ moeten doen, en dat laatste kan niet zonder te 'lenen'. Daarvoor is rijgen handiger.
:::

### 2. Rijgen

Je laat het eerste getal heel en doet het tweede getal er in stukken bij of vanaf: eerst de tientallen, dan de eenheden. Op een (lege) getallenlijn zie je dat als twee sprongen achter elkaar.

:::example Rijgen: $83 - 47$
- Begin bij 83. Je moet 47 terug: dat is 40 en nog 7.
- Eerst 40 terug: $83 - 40 = 43$.
- Dan 7 terug: $43 - 7 = 36$. Dit kun je eventueel ook in twee stapjes doen, via het tiental: $43 - 3 = 40$ en $40 - 4 = 36$.
- Dus $83 - 47 = 36$.
- **Controle** met de omgekeerde bewerking: $36 + 47 = 83$. Klopt.
:::

![Een lege getallenlijn met een sprong van 83 naar 43 (min 40) en van 43 naar 36 (min 7)](/images/diagrams/m03-rijgen-getallenlijn.svg "Rijgen op de lege getallenlijn: 83 − 47 als eerst 40 terug en dan 7 terug. Eigen diagram.")

### 3. Compenseren

Ligt een getal vlak bij een rond getal, reken dan met het ronde getal en zet het verschil achteraf recht.

:::example Compenseren bij optellen: $298 + 457$
- 298 ligt vlak bij 300: $298 = 300 - 2$.
- Tel eerst 300 op: $457 + 300 = 757$.
- Je hebt nu 2 te veel opgeteld, dus haal er 2 af: $757 - 2 = 755$.
- Dus $298 + 457 = 755$.

Je kunt het ook zien als 'verschuiven tussen de termen': geef 2 van de 457 aan de 298, dan krijg je $300 + 455 = 755$. De som verandert niet, want wat de ene term erbij krijgt, verliest de andere.
:::

:::example Compenseren bij aftrekken: $612 - 399$
- 399 ligt vlak bij 400: $399 = 400 - 1$.
- Trek eerst 400 af: $612 - 400 = 212$.
- Je hebt nu 1 te veel *afgetrokken*, dus tel die 1 er weer bij: $212 + 1 = 213$.
- Dus $612 - 399 = 213$.

Let op de richting van de correctie. Bij optellen van een te groot getal moet je achteraf *aftrekken*; bij aftrekken van een te groot getal moet je achteraf *optellen*. Wie dit door elkaar haalt, zit er steeds 2 naast.

Ook hier bestaat een elegante variant: schuif *beide* getallen 1 op. Het verschil blijft gelijk (de afstand tussen twee punten op de getallenlijn verandert niet als je beide punten evenver verschuift): $612 - 399 = 613 - 400 = 213$.
:::

:::formula Compenseren
$$
a + b = (a + k) + (b - k) \qquad\qquad a - b = (a + k) - (b + k)
$$
:::

### 4. Aanvullen

Liggen de twee getallen van een aftrekking dicht bij elkaar, dan is 'weghalen' onhandig. Denk dan aan de derde betekenis van aftrekken: *hoeveel moet ik bij het kleine getal doen om het grote te krijgen?* Dit is ook de manier waarop een marktkoopman van oudsher wisselgeld teruggeeft: hij telt op vanaf de prijs tot het bedrag dat hij ontving.

:::example Aanvullen: $1.003 - 996$
- Weghalen ('996 terugspringen vanaf 1.003') is veel werk. Vergelijk liever.
- Van 996 naar 1.000 is 4.
- Van 1.000 naar 1.003 is 3.
- In totaal: $4 + 3 = 7$. Dus $1.003 - 996 = 7$.
:::

![Een getallenlijn van 996 naar 1.000 (plus 4) en van 1.000 naar 1.003 (plus 3)](/images/diagrams/m03-aanvullen-getallenlijn.svg "Aanvullen: het verschil tussen 996 en 1.003 als twee sprongen via het ronde getal 1.000. Eigen diagram.")

:::tip Welke strategie kies je?
- Twee 'gewone' getallen optellen: **splitsen** of **rijgen**.
- Aftrekken: meestal **rijgen**.
- Een van de getallen ligt vlak bij een rond getal (99, 298, 1.999): **compenseren**.
- De twee getallen van een aftrekking liggen dicht bij elkaar: **aanvullen**.
- Een lange optelling: zoek eerst termen die samen een rond getal geven (**schakeleigenschap**).

Er is niet één goede strategie. Een goede rekenaar kijkt eerst naar de getallen en kiest dan pas.
:::

## Begeleid oefenen

Bij deze oefeningen kun je hints opvragen. Probeer bij elke opgave bewust een strategie te kiezen, en controleer je antwoord met de omgekeerde bewerking.

{{ exercises: 03-001, 03-002, 03-003, 03-004, 03-005 }}

Nu een paar opgaven waarin je zelf moet zien welke bewerking en welke strategie nodig is.

{{ exercises: 03-006, 03-007, 03-008, 03-009 }}
