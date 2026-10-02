# Schatten en controleren

Een uitkomst uitrekenen is één ding. Weten dat hij klopt is iets anders. De schrijvers van Drehem, de baronnen van de Exchequer en de rekenmeesters van de vroegmoderne tijd wisten allemaal: een rekening die je niet kunt controleren, is weinig waard. In deze les leer je twee vaardigheden die bij elkaar horen. **Schatten** vertelt je vooraf ongeveer wat eruit moet komen. **Controleren** vertelt je achteraf of het exacte antwoord deugt.

## Afronden

Schatten begint met afronden: je vervangt een getal door een rond getal in de buurt, waarmee je makkelijk uit je hoofd kunt rekenen.

:::definition Afronden
Afronden op tientallen, honderdtallen of duizendtallen betekent: het getal vervangen door het dichtstbijzijnde veelvoud van 10, 100 of 1.000. Ligt het getal precies in het midden, dan rond je volgens afspraak naar boven af.
:::

De vraag bij afronden is dus steeds: *bij welk rond getal ligt dit getal het dichtst?* Op de getallenlijn zie je het meteen. 4.638 ligt tussen 4.600 en 4.700. Het midden is 4.650, en 4.638 ligt daar links van, dus dichter bij 4.600.

{{ widget: number-line min=4600 max=4700 value=4638 }}

In de praktijk kijk je naar het cijfer **direct rechts** van de plaats waarop je afrondt:

- 0, 1, 2, 3 of 4: rond naar beneden af (het cijfer op de afrondplaats blijft staan, alles rechts wordt 0).
- 5, 6, 7, 8 of 9: rond naar boven af (het cijfer op de afrondplaats wordt 1 groter).

:::example Afronden van 4.638

- Op tientallen: kijk naar de eenheden (8). Naar boven: **4.640**.
- Op honderdtallen: kijk naar de tientallen (3). Naar beneden: **4.600**.
- Op duizendtallen: kijk naar de honderdtallen (6). Naar boven: **5.000**.

Let op: rond altijd af vanaf het *oorspronkelijke* getal. Wie eerst op tientallen afrondt (4.640) en dat daarna op honderdtallen (4.600) gaat ook goed, maar bij 4.649 gaat die tussenstap mis: 4.649 wordt 4.650 en dan 4.700, terwijl 4.649 op honderdtallen gewoon 4.600 is.
:::

## Schatten

Bij **schatten** rond je eerst alle getallen af en reken je daarna met de afgeronde getallen. Je kiest de afronding zo dat het rekenwerk uit je hoofd kan.

:::example Een schatting van een voorraad
Een graanschuur ontvangt in drie maanden 3.912, 2.087 en 4.960 zakken. Ongeveer hoeveel zakken zijn dat samen?

- Rond af op duizendtallen: $4\,000 + 2\,000 + 5\,000 = 11\,000$.
- Exact: $3\,912 + 2\,087 + 4\,960 = 10\,959$.
- De schatting zit er 41 naast — ruim voldoende om te weten dat het ongeveer elfduizend zakken zijn.

:::

:::example Schatten bij aftrekken
Schat $8\,215 - 3\,790$.

- Op duizendtallen: $8\,000 - 4\,000 = 4\,000$. Dat is grof.
- Op honderdtallen: $8\,200 - 3\,800 = 4\,400$. Dat is al veel nauwkeuriger.
- Exact: $8\,215 - 3\,790 = 4\,425$.

Een grovere afronding is sneller, een fijnere afronding nauwkeuriger. Bij aftrekken kan een grove afronding flink misleiden, omdat de afrondingsfouten van beide getallen elkaar kunnen versterken: hier rond je 8.215 naar beneden en 3.790 naar boven af, en dan wordt het verschil te klein.
:::

:::tip Wanneer is een schatting genoeg?
Een schatting is genoeg als je alleen een **beslissing** hoeft te nemen: heb ik genoeg geld bij me, past de voorraad in de schuur, is het budget overschreden? Een exacte berekening heb je nodig als het om een **administratie** gaat: het kasboek, de belastingaanslag, de inventarislijst. En ook dan gebruik je de schatting nog, als vangnet.
:::

## Controleren

### Controle 1: de schatting

De eenvoudigste controle is de vergelijking met je schatting. Kom je bij $4\,586 + 3\,237$ uit op 78.230 of 723, dan weet je zonder verder rekenen dat er iets mis is: de schatting $4\,600 + 3\,200 = 7\,800$ laat zien dat de uitkomst in de duizenden moet liggen. Zo vang je vooral grove fouten: een verkeerd uitgelijnde kolom, een vergeten cijfer, een cijfer te veel.

Fijnere fouten — een vergeten onthouden-cijfer, een verkeerde lening — vang je hiermee niet altijd. Daarvoor heb je een exacte controle nodig.

### Controle 2: de omgekeerde bewerking

Je weet uit de vorige les: $a - b = c$ precies dan als $c + b = a$. Daarmee controleer je elke aftrekking met een optelling.

:::example Controleer $7\,405 - 2\,968 = 4\,437$

- Tel het verschil op bij wat je aftrok: $4\,437 + 2\,968$.
- Eenheden $7 + 8 = 15$ (schrijf 5, onthoud 1); tientallen $3 + 6 + 1 = 10$ (schrijf 0, onthoud 1); honderdtallen $4 + 9 + 1 = 14$ (schrijf 4, onthoud 1); duizendtallen $4 + 2 + 1 = 7$.
- Uitkomst $7\,405$: precies het getal waarmee je begon. De aftrekking klopt.

:::

Een optelling kun je controleren door de termen in een **andere volgorde** op te tellen (dat mag dankzij de wissel- en schakeleigenschap), of door van de som één term af te trekken en te kijken of de andere term overblijft.

:::warning Controleer niet door hetzelfde nog eens te doen
Wie een berekening controleert door haar precies zo nog eens te maken, maakt vaak precies dezelfde fout opnieuw. Een goede controle volgt een *andere* route: de omgekeerde bewerking, een andere volgorde, of een schatting.
:::

### Ontbrekende getallen

De omgekeerde bewerking helpt ook bij het vinden van een **ontbrekend getal**. Dat is in feite je eerste kennismaking met vergelijkingen, waar het in module 15 en 16 uitgebreid over gaat.

| Opgave | Denkvraag | Berekening |
|---|---|---|
| $\ldots + 348 = 1\,000$ | Wat moet je bij 348 doen om 1.000 te krijgen? | $1\,000 - 348 = 652$ |
| $\ldots - 1\,375 = 2\,648$ | Waar moet je mee beginnen als er na 1.375 eraf nog 2.648 over is? | $2\,648 + 1\,375 = 4\,023$ |
| $5\,000 - \ldots = 1\,862$ | Hoeveel moet je van 5.000 afhalen om 1.862 over te houden? | $5\,000 - 1\,862 = 3\,138$ |

Let vooral op de tweede rij: bij een ontbrekend *begingetal* van een aftrekking moet je juist **optellen**.

:::tip Aanvullen tot 1.000
Bij $1\,000 - 348$ kun je slim aanvullen: de eenheden vul je aan tot **10**, de tientallen en honderdtallen tot **9**. Van 348: $8 + 2 = 10$, $4 + 5 = 9$, $3 + 6 = 9$, dus het antwoord is 652. Dat komt doordat $1\,000 = 999 + 1$: je rekent eigenlijk $999 - 348 = 651$ en telt er dan 1 bij. Wie alle cijfers tot 10 aanvult, krijgt 762 en zit er 110 naast.
:::

## Een historische controle: de negenproef

Voordat er rekenmachines waren, gebruikte men eeuwenlang een slimme controlemethode die maar weinig rekenwerk kost: de **negenproef**. Ze werkt met de rest die een getal overlaat bij deling door 9, de **negenrest**.

### De negenrest snel bepalen

Je hoeft daarvoor niet te delen. De negenrest van een getal is gelijk aan de negenrest van zijn **cijfersom**: tel de cijfers op, en herhaal dat tot er één cijfer overblijft. Komt daar 9 uit, dan is de negenrest 0.

:::example De negenrest van 58.736

- Cijfersom: $5 + 8 + 7 + 3 + 6 = 29$.
- Nog een keer: $2 + 9 = 11$.
- En nog een keer: $1 + 1 = 2$.
- De negenrest is 2. Controle door te delen: $58\,736 = 9 \times 6\,526 + 2$. Klopt.

:::

Waarom werkt dat? Omdat $10 = 9 + 1$, $100 = 99 + 1$ en $1\,000 = 999 + 1$. Elk tiental, honderdtal of duizendtal is dus 'een veelvoud van 9, plus 1'. Het getal 58.736 bestaat uit 5 tienduizendtallen, 8 duizendtallen enzovoort; als je van elk daarvan het veelvoud van 9 weglaat, houd je per stuk precies 1 over, en samen dus $5 + 8 + 7 + 3 + 6$. Wegstrepen van negens verandert niets aan de rest: vandaar ook de Engelse naam *casting out nines*.

### De proef

De kern van de negenproef is: **de negenrest van een som is gelijk aan de som van de negenresten** (en die som neem je weer 'modulo 9', dus je bepaalt er weer de negenrest van).

:::example Een voorbeeld van Adam Ries: $7\,869 + 8\,796 = 16\,665$
In een handschrift van de Duitse rekenmeester Adam Ries (1492–1559) wordt deze optelling met de negenproef gecontroleerd. Men tekende daarvoor een kruis met vier vakjes.

- Negenrest van 7.869: $7 + 8 + 6 + 9 = 30$, en $3 + 0 = 3$. Zet **3** in het linkervak.
- Negenrest van 8.796: $8 + 7 + 9 + 6 = 30$, en $3 + 0 = 3$. Zet **3** in het rechtervak.
- Tel de twee negenresten op: $3 + 3 = 6$. Zet **6** in het ondervak.
- Negenrest van de uitkomst 16.665: $1 + 6 + 6 + 6 + 5 = 24$, en $2 + 4 = 6$. Zet **6** in het bovenvak.
- Boven en onder staat hetzelfde getal. De proef heeft geen fout gevonden.

:::

![Het kruis van de negenproef met 6 boven, 3 links, 3 rechts en 6 onder](/images/diagrams/m03-negenproef-kruis.svg "Het negenproefkruis voor 7.869 + 8.796 = 16.665. Hetzelfde kruis met 3, 6, 3 en 6 staat op een Duitse postzegel uit 1992 ter ere van de 500e geboortedag van Ries. Eigen diagram.")

Bij een **aftrekking** $a - b = c$ gebruik je de omgekeerde bewerking: controleer met de negenproef of $c + b = a$.

:::warning Wat de negenproef niet ziet
Als de negenresten *niet* kloppen, weet je zeker dat er een fout is gemaakt. Als ze *wel* kloppen, is de uitkomst waarschijnlijk goed, maar niet zeker. De negenproef ziet bijvoorbeeld niet:

- twee **verwisselde cijfers**: 16.656 heeft dezelfde cijfersom als 16.665;
- een **vergeten of extra nul**: 10.659 en 1.659 hebben dezelfde cijfersom;
- elke andere fout die toevallig een veelvoud van 9 scheelt.

Het is daarom verstandig de negenproef te combineren met een schatting: die vangt juist de fouten in de orde van grootte op die de negenproef mist.
:::

:::history Een oude methode
Rekenen met de cijfersom is oud. De Romeinse bisschop Hippolytus (begin 3e eeuw) en de Syrische filosoof Iamblichus (rond 300) beschreven al hoe je de 'negenrest' van een getal vindt, maar niet hoe je daarmee berekeningen controleert. Het oudst bekende werk dat de negenproef als controle beschrijft, is de *Mahāsiddhānta* van de Indiase astronoom Aryabhata II, rond 950. Rond 1020 beschreef de Perzische geleerde Ibn Sina (Avicenna) de methode uitvoerig als de 'Hindoe-methode'. Via de Arabische rekenboeken en via Fibonacci's *Liber Abaci* (1202) kwam ze in Europa, waar ze eeuwenlang een vast onderdeel van de rekenboeken bleef — ook bij Ries.
:::

## Begeleid oefenen

{{ exercises: 03-017, 03-018, 03-019, 03-020 }}

De volgende opgaven vragen iets meer: een fout opsporen, de negenproef toepassen en een ontbrekend getal vinden.

{{ exercises: 03-021, 03-022, 03-023, 03-024 }}
