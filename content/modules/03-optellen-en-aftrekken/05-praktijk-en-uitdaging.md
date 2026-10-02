# Voorraad, kasboek en belasting

In de praktijk komen optellen en aftrekken zelden los voor. Een voorraadmeester, een penningmeester of een belastingontvanger werkt met *reeksen* van bewegingen: iets komt binnen, iets gaat eruit, en aan het eind moet de stand kloppen. In deze les leer je zulke problemen overzichtelijk aan te pakken. Daarna oefen je zelfstandig, en tot slot wacht er een uitdaging.

## Het principe van de balans

Elke voorraad- of kasadministratie rust op één eenvoudige gelijkheid, dezelfde die de Sumerische schrijvers al gebruikten:

:::formula Balansgelijkheid
$$
\text{eindstand} = \text{beginstand} + \text{ontvangsten} - \text{uitgaven}
$$
:::

Je kunt zo'n probleem op twee manieren uitrekenen.

1. **Per stap** (een *lopend saldo*): je verwerkt elke beweging direct en houdt na elke regel de stand bij. Zo werkt een kasboek of een bankafschrift. Voordeel: je ziet op elk moment de stand, en als er ergens een fout zit, kun je die terugvinden.
2. **Per soort**: je telt eerst alle ontvangsten bij elkaar, dan alle uitgaven, en trekt die twee totalen van elkaar af. Voordeel: minder rekenstappen, en je ziet in één oogopslag of er meer bij of meer af ging. Dat is de manier van de balansrekening.

Beide manieren geven dezelfde uitkomst, omdat $a - b - c = a - (b + c)$. Een goede controle is dus: **reken het ene keer per stap en het andere keer per soort**. Komen er twee verschillende antwoorden uit, dan weet je dat er iets mis is.

:::example Een tempelschuur
In een tempelschuur liggen aan het begin van het jaar 4.380 zakken gerst. In de loop van het jaar komen er drie leveringen binnen van 1.275, 2.940 en 865 zakken. Er worden rantsoenen uitgedeeld van 3.150 en 2.608 zakken. Hoeveel zakken liggen er aan het eind van het jaar?

**Per stap**, in een tabel:

| Beweging | Aantal | Stand |
|---|---:|---:|
| Beginstand | | 4.380 |
| Levering | + 1.275 | 5.655 |
| Levering | + 2.940 | 8.595 |
| Levering | + 865 | 9.460 |
| Rantsoenen | − 3.150 | 6.310 |
| Rantsoenen | − 2.608 | 3.702 |

**Per soort**, als controle:

- Ontvangsten: $1\,275 + 2\,940 + 865 = 5\,080$.
- Uitgaven: $3\,150 + 2\,608 = 5\,758$.
- Er ging dus $5\,758 - 5\,080 = 678$ zakken meer uit dan er binnenkwam.
- Eindstand: $4\,380 - 678 = 3\,702$. Dezelfde uitkomst als in de tabel.

**Schatting**, als derde vangnet: ongeveer $4\,400 + 5\,100 - 5\,800 = 3\,700$. Ook dat klopt.
:::

:::example Belastingontvangsten tegenover de begroting
Een stad begroot voor een jaar 15.000 gulden aan tolontvangsten. Over de vier kwartalen komt er binnen: 3.618, 4.075, 2.890 en 3.964 gulden. Hoeveel blijft de stad onder de begroting?

- Totaal ontvangen: $3\,618 + 4\,075 = 7\,693$; $7\,693 + 2\,890 = 10\,583$; $10\,583 + 3\,964 = 14\,547$.
- Tekort ten opzichte van de begroting: $15\,000 - 14\,547 = 453$ gulden.
- Snelle berekening van het tekort door aanvullen: van 14.547 naar 14.550 is 3, naar 14.600 nog 50, naar 15.000 nog 400. Samen $3 + 50 + 400 = 453$.
- Controle met de omgekeerde bewerking: $14\,547 + 453 = 15\,000$. Klopt.
:::

:::tip Een stappenplan voor contextopgaven
1. **Lees** en zet de gegevens in een rijtje of tabel: wat is de beginstand, wat komt erbij, wat gaat eraf?
2. **Schat** de uitkomst met afgeronde getallen.
3. **Reken** exact, per stap of per soort.
4. **Controleer** met de andere route, of met de omgekeerde bewerking.
5. **Beoordeel**: past het antwoord bij je schatting en bij de situatie? Een voorraad van −200 zakken of een kasstand van een miljoen in een dorpskas zijn verdacht.
:::

## Zelfstandig oefenen

Bij deze opgaven komen de hints pas als je erom vraagt. Probeer eerst zelf een aanpak te kiezen.

{{ exercises: 03-025, 03-026, 03-027, 03-028 }}

De volgende opgaven hebben meer stappen. Zet de gegevens eerst overzichtelijk op een rij.

{{ exercises: 03-029, 03-030, 03-031, 03-032 }}

## Uitdaging

:::challenge Denken als een rekenmeester
De laatste drie opgaven vragen geen lange berekeningen, maar wel inzicht in hoe kolomsgewijs rekenen werkt. Bij de eerste moet je een kolomsom *terugrekenen*, bij de tweede ontdek je een verrassend patroon, en bij de derde moet je slim redeneren over plaatswaarde. Neem er de tijd voor; probeer gerust een paar voorbeelden voordat je een conclusie trekt.
:::

{{ exercises: 03-033, 03-034, 03-035 }}
