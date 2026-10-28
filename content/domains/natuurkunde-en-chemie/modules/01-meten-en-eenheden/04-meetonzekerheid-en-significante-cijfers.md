:::question Denk eerst zelf na
Je meet vijf keer met een stopwatch hoe lang een knikker erover doet om van een tafel te vallen, en je krijgt 0,45 s, 0,52 s, 0,47 s, 0,50 s en 0,46 s. Een klasgenoot meet één keer 0,48 s. Wie heeft het betere resultaat? En wat zou je antwoorden als iemand zegt: “De valtijd is 0,4800 seconde”?
:::

## Geen meting is exact

Elke meting heeft een grens aan wat je kunt weten. Een liniaal met streepjes om de millimeter laat je niet toe iets over een honderdste millimeter te zeggen. Een stopwatch geeft misschien honderdsten van seconden aan, maar jouw reactietijd bij het indrukken is al snel een tiende. En zelfs met het beste instrument verandert de waarde die je meet iets van keer op keer, doordat temperatuur, trillingen, stof of toeval meespelen. Een meetresultaat zonder die onzekerheid is eigenlijk een half resultaat: je weet het getal, maar niet hoeveel je ervan mag verwachten.

**Meetonzekerheid** is geen ander woord voor “fout”. Het is een kwantitatieve uitspraak: binnen welke marge ligt de waarde, gegeven het instrument en de methode, vermoedelijk? Je noteert dat als $x \pm \Delta x$: bijvoorbeeld $l = (17{,}3 \pm 0{,}1)\ \text{cm}$. Dat betekent niet dat de waarde zeker tussen 17,2 en 17,4 ligt, maar dat je daar redelijkerwijs op mag rekenen. Hoe je die marge kiest, hangt af van wat je weet.

Dat is geen detail voor specialisten. Een hele tak van de natuurkunde draait om de vraag of een voorspelling en een meting “overeenkomen”. Zonder onzekerheid heeft die vraag geen antwoord. Een afwijking van de verwachting wordt pas een ontdekking als de onzekerheid klein genoeg is om het verschil te zien.

## Systematisch en toevallig

Er zijn twee soorten afwijkingen en ze gedragen zich heel verschillend. **Toevallige afwijkingen** wisselen van meting tot meting: je reageert nu eens te vroeg, dan weer te laat, het meetlint zit iets scheef. Je ziet ze doordat herhaalde metingen verschillende waarden geven, en je kunt ze verkleinen door vaker te meten en te middelen. **Systematische afwijkingen** schuiven alle metingen dezelfde kant op: een liniaal waarvan de nulstreep is afgesleten, een weegschaal die 3 gram te veel aanwijst, een thermometer die in de zon hangt. Zulke afwijkingen verdwijnen niet door vaker te meten. Je ziet ze pas als je het instrument met een ander instrument of met een bekende standaard vergelijkt, en dus is ijken zo belangrijk.

Beide soorten verklaren een onderscheid dat in gewoon taalgebruik vaak wordt verward. **Precisie** zegt hoe dicht herhaalde metingen bij elkaar liggen; die wordt bepaald door toevallige afwijkingen. **Juistheid** zegt hoe dicht het gemiddelde bij de werkelijke waarde ligt; die wordt bepaald door systematische afwijkingen. Een meetreeks kan precies maar onjuist zijn, juist maar onprecies, beide of geen van beide.

![Vier rijen meetpunten rond een werkelijke waarde: precies en juist, precies maar onjuist, onprecies maar juist, onprecies en onjuist](/images/natuurkunde-en-chemie/m01-meetonzekerheid.svg "Precisie en juistheid. De stippellijn is de werkelijke waarde. Eigen schematische tekening.")

:::definition Precisie en juistheid
**Precisie**: de mate waarin herhaalde metingen met elkaar overeenstemmen (kleine spreiding, kleine toevallige afwijking). **Juistheid**: de mate waarin het gemiddelde met de werkelijke waarde overeenstemt (kleine systematische afwijking). In het Engels *precision* en *accuracy*.
:::

## De afleesonzekerheid

De eenvoudigste onzekerheid is die van het instrument. Bij een analoog instrument met een schaalverdeling geldt als vuistregel een **afleesonzekerheid van een halve schaaldeel**. Een liniaal met streepjes om de millimeter geeft dus $\pm 0{,}5\ \text{mm}$; een maatcilinder met streepjes om de 2 mL geeft $\pm 1\ \text{mL}$. Bij een digitale uitlezing geldt in de regel een onzekerheid van een of enkele eenheden in het laatste getoonde cijfer, tenzij de fabrikant iets anders opgeeft. Als een digitale weegschaal 145,6 g toont, noteer je $m = (145{,}6 \pm 0{,}1)\ \text{g}$.

Er zit een belangrijke conclusie in. Het aantal cijfers dat je opschrijft, hoort bij de onzekerheid. Schrijf je $17{,}3\ \text{cm}$, dan zeg je impliciet dat je tot op een tiende centimeter weet wat de lengte is. Schrijf je $17{,}3254\ \text{cm}$ terwijl je met een liniaal hebt gemeten, dan suggereer je een nauwkeurigheid die je instrument nooit kan leveren. Dat heet **schijnnauwkeurigheid**, en het is een van de meest voorkomende fouten in verslagen. De onzekerheid zelf geef je af op één of twee cijfers; de waarde schrijf je op tot dezelfde decimaal.

## Herhalen en middelen

Is de toevallige afwijking groter dan de afleesonzekerheid, zoals bij de stopwatch, dan herhaal je de meting. Het **gemiddelde** van $n$ metingen $x_1, x_2, \ldots, x_n$ is de beste schatting van de waarde:

$$
\bar{x} = \frac{x_1 + x_2 + \ldots + x_n}{n}.
$$

Voor de onzekerheid zijn er twee gangbare benaderingen. De eenvoudigste, die je in de bovenbouw gebruikt, is de helft van het verschil tussen de grootste en de kleinste meting: $\Delta x \approx \dfrac{x_\text{max} - x_\text{min}}{2}$. Een betere maat is de **standaardafwijking** $s$ van de metingen: ze beschrijft hoeveel een enkele meting gemiddeld van het gemiddelde afwijkt. En omdat het gemiddelde van meer metingen zelf nauwkeuriger wordt, is de onzekerheid *van het gemiddelde* kleiner dan de spreiding van de afzonderlijke metingen, namelijk de **standaardfout** $\dfrac{s}{\sqrt{n}}$. Vier keer zoveel metingen maakt de onzekerheid van het gemiddelde dus twee keer zo klein. Meer meten loont, maar langzaam.

:::example Vijf metingen van een valtijd
Bij het valexperiment krijg je de reeks $0{,}45;\ 0{,}52;\ 0{,}47;\ 0{,}50;\ 0{,}46$ (alle in seconden). Wat noteer je als resultaat?

**Stap 1.** Bereken het gemiddelde: $\bar{t} = \dfrac{0{,}45 + 0{,}52 + 0{,}47 + 0{,}50 + 0{,}46}{5} = \dfrac{2{,}40}{5} = 0{,}48\ \text{s}$.

**Stap 2.** Schat de onzekerheid met de halve spreidingsbreedte: $\dfrac{0{,}52 - 0{,}45}{2} = 0{,}035\ \text{s}$. Rond af op één cijfer: $0{,}04\ \text{s}$.

**Stap 3.** Noteer: $t = (0{,}48 \pm 0{,}04)\ \text{s}$. De waarde is op dezelfde decimaal afgerond als de onzekerheid.

**Conclusie.** Het gemiddelde van vijf metingen (0,48 s) is hetzelfde als de ene meting van de klasgenoot, maar nu weet je erbij hoe ver je daarop mag vertrouwen. De waarde “0,4800 s” uit de denkvraag is schijnnauwkeurig: de metingen lopen al op de honderdste seconde uiteen, dus de derde en vierde decimaal zeggen niets.
:::

{{ exercises: 01-015, 01-016, 01-017 }}

## Significante cijfers

Een afgeleide manier om onzekerheid aan te geven zonder haar steeds op te schrijven, zijn de **significante cijfers**. Dat zijn de cijfers van een getal die iets zeggen over de nauwkeurigheid. Voor het tellen gelden een paar regels. Nullen aan het begin tellen niet mee: ze bepalen alleen de plaats van de komma, dus $0{,}00450$ heeft drie significante cijfers (4, 5 en 0). Nullen aan het eind achter de komma tellen wél mee: $4{,}50$ heeft er drie, en daarmee onderscheid je het van $4{,}5$, dat er twee heeft. Nullen tussen andere cijfers tellen mee: $3{,}06$ heeft er drie. Bij een heel getal als $1500$ is niet duidelijk of de nullen significant zijn; schrijf dan $1{,}5 \times 10^3$ (twee cijfers) of $1{,}500 \times 10^3$ (vier cijfers). De wetenschappelijke notatie is dus ook een manier om de nauwkeurigheid precies vast te leggen.

Bij rekenen met gemeten waarden gelden twee eenvoudige regels voor het eindantwoord. Bij **vermenigvuldigen en delen** heeft het antwoord evenveel significante cijfers als de gegeven waarde met de *minste* significante cijfers. Bij **optellen en aftrekken** heeft het antwoord evenveel *decimalen* als de gegeven waarde met de minste decimalen. Je rondt pas af aan het eind: met tussenresultaten reken je met een paar cijfers extra, anders stapelen afrondingsfouten zich op.

Er is één uitzondering: *exacte getallen* tellen niet mee. Dat zijn getallen die uit tellen of definitie volgen: “drie auto’s”, de 2 in $2\pi r$, of de omrekening $1\ \text{m} = 100\ \text{cm}$. Die hebben als het ware oneindig veel cijfers en beperken je antwoord niet.

:::example Het aantal cijfers bij een oppervlak
Een rechthoek is $12{,}3\ \text{cm}$ lang en $4{,}5\ \text{cm}$ breed. Wat is de oppervlakte?

**Stap 1.** Reken uit: $12{,}3 \times 4{,}5 = 55{,}35$. De rekenmachine geeft dus vier cijfers.

**Stap 2.** Tel de significante cijfers van de gegevens: $12{,}3$ heeft er drie, $4{,}5$ heeft er twee. Het minimum is twee.

**Stap 3.** Rond af op twee significante cijfers: $55\ \text{cm}^2$.

**Controle met onzekerheden.** Neem $\pm 0{,}05\ \text{cm}$ op elke zijde. De lengte is dan ongeveer 0,4% onzeker en de breedte ruim 1%, samen ongeveer 1,5%. De oppervlakte kan daardoor tussen ongeveer $54{,}5$ en $56{,}2\ \text{cm}^2$ liggen. “55” is dus een eerlijke weergave, “55,35” niet.
:::

## Onzekerheid bij rekenen

Een berekende grootheid erft de onzekerheid van de gemeten grootheden waaruit ze is opgebouwd. Voor het eenvoudige geval, dat voor dit niveau volstaat, tel je de onzekerheden op in een grove maar veilige schatting. Daarbij is het handig om de **relatieve onzekerheid** te gebruiken: de onzekerheid als aandeel van de waarde,

$$
\text{relatieve onzekerheid} = \frac{\Delta x}{x} \quad (\text{vaak uitgedrukt in \%}).
$$

Een lengte van $20{,}0 \pm 0{,}5\ \text{cm}$ heeft een relatieve onzekerheid van $\dfrac{0{,}5}{20{,}0} = 0{,}025 = 2{,}5\,\%$. De regels zijn:

- **Optellen of aftrekken:** de *absolute* onzekerheden tellen op. Twee staven van $1{,}25 \pm 0{,}01\ \text{m}$ en $0{,}80 \pm 0{,}02\ \text{m}$ geven samen $2{,}05 \pm 0{,}03\ \text{m}$.
- **Vermenigvuldigen of delen:** de *relatieve* onzekerheden tellen op. Is $F = m \cdot a$ met $m$ op 2% en $a$ op 3%, dan is $F$ ongeveer 5% onzeker.
- **Machten:** bij $x^n$ vermenigvuldig je de relatieve onzekerheid met $n$. Een straal die op 1% bekend is, geeft een oppervlak ($r^2$) dat op ongeveer 2% bekend is.

Dit is een bovengrens. Als de afwijkingen onafhankelijk zijn, heffen ze elkaar deels op en is de totale onzekerheid kleiner: dan tel je ze kwadratisch op, $\Delta z = \sqrt{(\Delta x)^2 + (\Delta y)^2}$. Dat is de gangbare aanpak in het laboratorium; de lineaire optelling is eenvoudiger en altijd veilig.

:::example Dichtheid van een blokje met onzekerheid
Een blokje heeft ribben van $4{,}0$, $3{,}0$ en $2{,}0\ \text{cm}$, elk met onzekerheid $0{,}1\ \text{cm}$, en een massa van $64{,}8\ \text{g}$ met onzekerheid $0{,}1\ \text{g}$. Bepaal de dichtheid met onzekerheid.

**Stap 1.** Volume: $V = 4{,}0 \times 3{,}0 \times 2{,}0 = 24\ \text{cm}^3$. Dichtheid: $\rho = \dfrac{64{,}8}{24} = 2{,}70\ \text{g/cm}^3$.

**Stap 2.** Relatieve onzekerheden: ribben $\dfrac{0{,}1}{4{,}0} = 2{,}5\,\%$, $\dfrac{0{,}1}{3{,}0} \approx 3{,}3\,\%$, $\dfrac{0{,}1}{2{,}0} = 5{,}0\,\%$; massa $\dfrac{0{,}1}{64{,}8} \approx 0{,}15\,\%$.

**Stap 3.** Tel op: $2{,}5 + 3{,}3 + 5{,}0 + 0{,}15 \approx 10{,}9\,\%$. In absolute termen: $0{,}109 \times 2{,}70 \approx 0{,}29\ \text{g/cm}^3$.

**Stap 4.** Noteer met passende cijfers: $\rho = (2{,}7 \pm 0{,}3)\ \text{g/cm}^3$.

**Conclusie.** Dat past bij aluminium ($2{,}70$) maar ook bij sommige andere lichte materialen. Het resultaat wordt het meest beperkt door de ribbe van 2,0 cm: met een kleine afmeting is de relatieve onzekerheid groot. Wil je het beter doen, meet dan de kleinste ribbe nauwkeuriger of kies een groter blokje.
:::

## Wanneer komen twee resultaten overeen?

Met onzekerheden kun je een vraag beantwoorden die zonder onzekerheden betekenisloos is: komen twee waarden overeen? Twee resultaten, $9{,}81 \pm 0{,}02$ en $9{,}79 \pm 0{,}03$, zijn niet gelijk, maar de intervallen $9{,}79$ tot $9{,}83$ en $9{,}76$ tot $9{,}82$ overlappen elkaar. Ze zijn dus **consistent**: de verschillen kunnen volledig door de onzekerheid verklaard worden. Overlappen de intervallen niet, dan is het verschil groter dan wat je door de onzekerheid kunt verklaren, en moet je zoeken naar een oorzaak: een systematische afwijking, een ander verschijnsel, of een fout in de voorspelling.

Dat is de kern van het toetsen van een theorie. Een voorspelling die binnen de onzekerheid met een meting overeenkomt, is bevestigd *voor zover je kunt zien*, niet bewezen. Een voorspelling die er duidelijk buiten valt, is een serieus signaal. Het is de reden dat natuurkundigen zoveel moeite doen om onzekerheden zorgvuldig te bepalen, in plaats van de nauwkeurigheid op te blazen.

{{ exercises: 01-018, 01-019, 01-020, 01-021, 01-022, 01-023 }}
