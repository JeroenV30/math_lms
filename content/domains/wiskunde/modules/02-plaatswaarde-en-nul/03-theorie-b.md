# Nul: plaatshouder en getal

:::question Denk eerst zelf na
Wat is het verschil tussen 35, 305 en 350? Alle drie bevatten ze een 3 en een 5. Wat doet de 0 precies, als hij zelf "niets" is? En wat bedoel je eigenlijk als je zegt dat $7 - 7$ "nul" is: is dat hetzelfde "niets" als de lege positie in 305?
:::

De nul speelt in ons getalsysteem twee rollen die historisch los van elkaar zijn ontstaan:

1. **Nul als plaatshouder**: een teken dat zegt "op deze positie staat niets", zodat de andere cijfers hun waarde behouden.
2. **Nul als getal**: een hoeveelheid waarmee je kunt rekenen, net als met 3 of 17, met eigen regels.

De eerste rol is ouder. Babylonische schrijvers gebruikten vanaf ongeveer 300 v.Chr. (volgens sommige onderzoekers al eerder) een apart teken voor een lege positie, maar ze rekenden er niet mee als getal. De tweede rol werd voor het eerst uitgebreid beschreven in India, door Brahmagupta in 628.

## Nul als plaatshouder

Neem de drie getallen uit de denkvraag:

| Getal | H | T | E | Uitsplitsing |
|---|---|---|---|---|
| 35 | | 3 | 5 | $30 + 5$ |
| 305 | 3 | 0 | 5 | $300 + 0 + 5$ |
| 350 | 3 | 5 | 0 | $300 + 50 + 0$ |

De 0 voegt zelf niets toe aan de som. Toch is hij onmisbaar: hij **duwt** de 3 naar de honderdtallenpositie. Zonder 0 zou je 305 niet van 35 kunnen onderscheiden. Precies dat probleem hadden de Babylonische schrijvers, zoals je in de introductie zag.

:::definition Plaatshouder
Een **plaatshouder** is een teken dat een lege positie markeert. In ons stelsel is dat de 0. Een plaatshouder zegt niet "hier is een hoeveelheid", maar "hier is een positie, en die is leeg".
:::

Een nul **vooraan** een getal is overbodig: 0305 is gewoon 305. Er staat links van de 3 niets meer dat op zijn plek gehouden moet worden. Nullen **binnenin** en **achteraan** zijn wel belangrijk. Let op dat het Babylonische plaatshouder-teken in wiskundige teksten alleen *binnenin* een getal werd gebruikt, niet achteraan (alleen in sommige late astronomische teksten staat het af en toe ook aan het eind). Het verschil tussen 1 en 60, of tussen 2 en 120, moest de lezer daar dus nog steeds uit de context halen.

### Van woorden naar cijfers

In gesproken taal zeggen we de nullen niet. "Zevenduizend vijf" vertelt dat er 7 duizendtallen en 5 eenheden zijn, maar zwijgt over de honderdtallen en tientallen. Bij het opschrijven moet je die lege posities zelf aanvullen.

:::example "Zevenduizend vijf" in cijfers
**Stap 1 – Welke posities worden genoemd?** "Zevenduizend" → D = 7. "Vijf" → E = 5.

**Stap 2 – Hoeveel posities heb je nodig?** Het grootste deel is duizendtallen, dus vier posities: D, H, T, E.

**Stap 3 – Vul de lege posities met nullen.** H = 0, T = 0.

| D | H | T | E |
|---|---|---|---|
| 7 | 0 | 0 | 5 |

**Resultaat:** 7.005. Controle: $7000 + 5 = 7005$.

**Typische fouten.** 75 (beide nullen vergeten), 705 (één nul vergeten) of 7.500 (de 5 op de verkeerde positie gezet). Lees je antwoord altijd hardop terug: "zevenduizend vijfhonderd" is niet wat er stond.
:::

### Nullen bij vermenigvuldigen met 10, 100, 1000

In de vorige les zag je dat vermenigvuldigen met 10 alle cijfers één positie naar links schuift. De nullen die al *binnen* het getal stonden, schuiven gewoon mee; ze verdwijnen niet:

$$
305 \times 100 = 30500
$$

De 3 gaat van de honderdtallen naar de tienduizendtallen ($300 \to 30\,000$), de 0 schuift mee naar de duizendtallen, de 5 gaat naar de honderdtallen ($5 \to 500$). Twee nieuwe nullen vullen de tientallen en de eenheden.

## Nul als getal: de regels van Brahmagupta

:::history India, 628
In 628 voltooide de astronoom en wiskundige **Brahmagupta** (ca. 598 – ca. 668) zijn *Brahmasphutasiddhanta*, een omvangrijk werk in Sanskrietverzen over astronomie en wiskunde. Hij werkte in Bhillamala (het huidige Bhinmal, in Rajasthan) en wordt in latere bronnen in verband gebracht met de sterrenwacht van Ujjain. In zijn boek behandelt hij de nul niet alleen als teken, maar als een getal waarmee je optelt, aftrekt en vermenigvuldigt. Hij gebruikte daarbij de beeldspraak van "bezit" (positieve getallen) en "schuld" (negatieve getallen), die je in een latere module weer tegenkomt.
:::

In moderne woorden en symbolen komen Brahmagupta's regels voor nul neer op het volgende. Hier staat $a$ voor een willekeurig getal.

:::formula Rekenregels voor nul
$$
a + 0 = a \qquad a - 0 = a \qquad a - a = 0
$$

$$
a \times 0 = 0 \qquad 0 \times 0 = 0 \qquad 0 \div a = 0 \quad (\text{als } a \neq 0)
$$
:::

Waarom kloppen deze regels? Je kunt ze allemaal terugvoeren op wat optellen en vermenigvuldigen *betekenen*:

- **$a + 0 = a$**: als je er niets bij doet, verandert er niets.
- **$a - a = 0$**: als je alles weghaalt wat er was, blijft er niets over. $7 - 7 = 0$.
- **$a \times 0 = 0$**: $0 \times 12$ betekent "nul groepjes van twaalf", en $12 \times 0$ betekent "twaalf groepjes van niets". In beide gevallen heb je niets.
- **$0 \div a = 0$**: als je niets eerlijk verdeelt over 8 mensen, krijgt ieder niets. Controle via vermenigvuldigen: $0 \times 8 = 0$. Klopt.

:::example Een som met een verborgen nul
**Opgave.** Bereken $(48 - 48) \times 365 + 17$.

**Stap 1 – Eerst wat tussen haakjes staat.** $48 - 48 = 0$.

**Stap 2 – Vermenigvuldigen.** $0 \times 365 = 0$. Je hoeft $48 \times 365$ dus helemaal niet uit te rekenen.

**Stap 3 – Optellen.** $0 + 17 = 17$.

**Uitkomst:** 17. Wie de haakjes negeert en eerst $48 \times 365$ uitrekent, maakt het zichzelf veel moeilijker en loopt kans op een fout. Een nul herkennen is een krachtig rekenhulpmiddel.
:::

### Delen door nul: waar Brahmagupta vastliep

Brahmagupta probeerde ook regels te geven voor delen *door* nul. Hij schreef dat nul gedeeld door nul gelijk is aan nul, en dat een ander getal gedeeld door nul een breuk "met nul als noemer" oplevert, zonder daar een waarde aan te geven. Latere Indiase wiskundigen, zoals Mahavira (9e eeuw) en Bhaskara II (12e eeuw), worstelden er ook mee. Vandaag weten we waarom het niet lukt.

:::theory Waarom $a \div 0$ geen uitkomst heeft
Delen is de omkering van vermenigvuldigen: $12 \div 4 = 3$ omdat $3 \times 4 = 12$.

- **$12 \div 0$**: je zoekt een getal dat, maal 0, het getal 12 oplevert. Maar alles maal 0 is 0. Zo'n getal bestaat niet.
- **$0 \div 0$**: je zoekt een getal dat, maal 0, het getal 0 oplevert. Nu werkt *elk* getal: $5 \times 0 = 0$, $1000 \times 0 = 0$. Er is dus geen unieke uitkomst.

In beide gevallen zeggen wiskundigen: **delen door nul is niet gedefinieerd**. Brahmagupta's regel "$0 \div 0 = 0$" is dus, met de kennis van nu, niet juist. Dat doet niets af aan zijn prestatie: hij was een van de eersten die de nul als volwaardig getal durfde te behandelen en de regels ervoor probeerde op te schrijven.
:::

:::warning Rekenmachine en spreadsheet
Typ je $12 \div 0$ in een rekenmachine, dan krijg je een foutmelding; een spreadsheet toont iets als `#DEEL/0!`. Dat is geen gebrek van het apparaat: er is gewoon geen antwoord.
:::

## Begeleid oefenen

{{ exercises: 02-010, 02-011, 02-012, 02-013 }}

## Zelfstandig oefenen

{{ exercises: 02-014, 02-015, 02-016 }}
