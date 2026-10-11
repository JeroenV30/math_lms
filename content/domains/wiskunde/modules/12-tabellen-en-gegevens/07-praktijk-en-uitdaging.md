# Een conclusie onderbouwen

In de vorige lessen leerde je de gereedschappen: tabellen, diagrammen en samenvattende getallen. In de praktijk begin je echter niet met een rekensom, maar met een **vraag**, en eindig je met een **conclusie** die iemand anders moet kunnen controleren. In deze les loop je die hele weg één keer door, en oefen je met de valkuilen onderweg.

## 1. Van vraag tot conclusie: een uitgewerkte casus

:::example Casus: wachten bij de huisarts
Een huisartsenpraktijk krijgt klachten over lange wachttijden. De praktijkmanager wil weten hoe lang patiënten op maandagochtend werkelijk wachten. Ze noteert bij twaalf opeenvolgende patiënten de tijd tussen de afgesproken tijd en het moment dat ze worden binnengeroepen, in minuten:

8, 5, 12, 6, 48, 8, 3, 10, 7, 15, 6, 8.

**Stap 1: ordenen.** Gesorteerd: 3, 5, 6, 6, 7, 8, 8, 8, 10, 12, 15, 48.

**Stap 2: een eerste blik.** Elf wachttijden liggen tussen 3 en 15 minuten. Eén waarde, 48 minuten, valt ver buiten de rest. De manager zoekt het na: die patiënt kwam binnen net toen de arts werd weggeroepen voor een spoedgeval. Geen meetfout dus, maar een echte, uitzonderlijke situatie.

**Stap 3: samenvatten.**

- Som: $3 + 5 + 6 + 6 + 7 + 8 + 8 + 8 + 10 + 12 + 15 + 48 = 136$ minuten. Gemiddelde: $136 : 12 \approx 11{,}3$ minuten.
- Mediaan: twaalf waarden, dus het gemiddelde van de zesde en zevende: $(8 + 8) : 2 = 8$ minuten.
- Modus: 8 minuten (drie keer).
- Spreidingsbreedte: $48 - 3 = 45$ minuten.

Zonder de spoedgeval-patiënt: som $136 - 48 = 88$, gemiddelde $88 : 11 = 8$ minuten, mediaan de zesde van elf waarden: 8 minuten. Het gemiddelde zakt met ruim drie minuten; de mediaan verandert niet.

**Stap 4: een conclusie formuleren.**

*Zwak:* "Patiënten wachten gemiddeld 11 minuten."

*Sterker:* "Op de onderzochte maandagochtend was de mediane wachttijd van twaalf patiënten 8 minuten; elf van de twaalf werden binnen een kwartier geholpen. Eén patiënt wachtte 48 minuten door een spoedgeval; door die ene waarneming ligt het gemiddelde op 11,3 minuten."

De tweede conclusie noemt **wie** er gemeten is (twaalf patiënten), **wanneer** (één maandagochtend), **welke maat** en **waarom**, en vermeldt de uitschieter in plaats van hem te verbergen of stilletjes te schrappen.
:::

:::tip Vijf vragen bij elke conclusie
1. Over **welke groep** gaat het, en hoeveel waarnemingen zijn er?
2. **Wanneer en waar** is gemeten?
3. Welke **samenvatting** is gebruikt, en past die bij de vraag?
4. Zijn er **uitschieters** of ontbrekende waarden, en wat is daarmee gedaan?
5. Zegt de conclusie **niet meer** dan de gegevens toelaten?
:::

## 2. Controleer de gegevens

Voordat je iets uitrekent, kijk je of de gegevens kloppen. Dat klinkt saai, maar het is in de praktijk het meeste werk. Een paar klassieke problemen:

- **Ontbrekende waarden.** Als iemands reistijd niet is geregistreerd, is die reistijd niet nul. Vul je een nul in, dan trek je het gemiddelde ten onrechte omlaag en de spreidingsbreedte omhoog. Een ontbrekende waarde laat je weg uit de berekening, en je vermeldt hoeveel waarden er ontbraken.
- **Dubbeltellingen.** Een deelnemer die per ongeluk twee keer in de lijst staat, telt dubbel mee in elke frequentie en elk gemiddelde. Controleer of het aantal waarnemingen overeenkomt met het aantal mensen.
- **Eenheden.** Een reistijd van "1,5" tussen waarden als 20 en 35 minuten is waarschijnlijk in uren genoteerd. Reken alles om naar dezelfde eenheid voordat je rekent; zie module 6.
- **Onmogelijke waarden.** Een leeftijd van 213 jaar of een negatieve wachttijd is een fout. Zoek de juiste waarde op als dat kan; anders laat je de waarde weg en meld je dat.
- **Opvallende, maar mogelijke waarden.** Die laat je staan, zoals de 48 minuten uit de casus. Een uitschieter is een reden om te onderzoeken, niet om te schrappen.

{{ exercises: 12-025, 12-026 }}

## 3. Wat mag je wel en niet concluderen?

:::question Wie zit er niet in je gegevens?
Je vraagt op een zaterdagmiddag twintig bezoekers van de bibliotheek hoe ze gekomen zijn. Acht fietsen, vijf komen met de auto. Mag je concluderen dat 40% van de inwoners van de stad fietst? Welke inwoners zijn niet in je gegevens terechtgekomen?
:::

Nee. Je weet iets over twintig mensen die op één zaterdagmiddag de bibliotheek bezochten. Mensen die nooit naar de bibliotheek gaan, die op werkdagen komen, of die bij regen thuisblijven, zitten niet in je gegevens. Hoe goed een kleine groep een grote groep vertegenwoordigt, is een vraag die in module 38 (steekproeven) systematisch wordt behandeld. Voor nu is de regel: **beschrijf de groep die je echt hebt gemeten**, en wees voorzichtig met uitspraken over anderen.

Een tweede valkuil is **samenhang verwarren met oorzaak**. Op warme dagen wordt meer ijs verkocht én verdrinken meer mensen. Dat betekent niet dat ijs eten tot verdrinking leidt: warm weer veroorzaakt allebei. In module 35 (data-analyse) en module 40 (correlatie en regressie) leer je hoe je met zulke "derde variabelen" omgaat.

Een derde valkuil kwam je in les 3 al tegen: **absolute aantallen tegenover aandelen**. Een tabel waarin de grootste groep ook de meeste klachten heeft, zegt niets zolang je niet weet hoe groot elke groep is. Deel eerst door de groepsgrootte.

{{ exercises: 12-028, 12-029 }}

## 4. Uitdagingen

De volgende opgaven combineren alles uit de module: het verband tussen totaal en gemiddelde, sorteren voor de mediaan, en de definitie van de modus. Werk ze op papier uit en controleer je antwoord door alle samenvattingen opnieuw te berekenen.

:::challenge Een ontbrekende wachttijd
Zes wachttijden hebben gemiddelde 8 minuten. Vijf bekende waarden zijn 4, 5, 7, 9 en 11. Vind de zesde waarde, bepaal de mediaan van alle zes en vergelijk die met het gemiddelde.
:::

{{ exercise: 12-030 }}

:::challenge Vijf getallen reconstrueren
Je kent van vijf gehele getallen alleen de samenvattingen: de modus is 6, de mediaan is 8, het gemiddelde is 10 en de spreidingsbreedte is 14. Er is precies één rij getallen die hieraan voldoet. Welke?
:::

{{ exercise: 12-040 }}
