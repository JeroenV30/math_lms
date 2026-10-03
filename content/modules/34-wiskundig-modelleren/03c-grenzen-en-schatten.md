# Grenzen van modellen en Fermi-schattingen

Een model dat goed past bij de gegevens, is nog geen betrouwbaar model. In deze les kijk je naar de laatste stappen van de modelleercyclus: **interpreteren en valideren**. Je leert waarom extrapoleren gevaarlijk is, hoe je een model eerlijk toetst, en hoe je met heel weinig gegevens toch een bruikbare orde van grootte vindt.

## 1. Interpoleren en extrapoleren

Elk model is gemaakt met gegevens uit een bepaald gebied. Gebruik je het model *binnen* dat gebied, dan **interpoleer** je. Gebruik je het *erbuiten*, dan **extrapoleer** je.

Interpoleren is meestal veilig: het model is daar immers getoetst. Extrapoleren is riskant, om twee redenen:

1. **Het mechanisme kan veranderen.** Een kind groeit in het eerste levensjaar zo'n 25 cm, maar die groei houdt niet aan. Een epidemie groeit eerst exponentieel, maar loopt tegen een plafond aan.
2. **Kleine fouten in parameters worden groot.** Een kleine fout in de helling van een lijn maakt bij $x = 1$ weinig uit, maar bij $x = 100$ wel. Bij exponentiële modellen is dit effect nog veel sterker.

:::example Uitgewerkt voorbeeld: hoe ver mag je doortrekken?
Een plant is op dag 10 15 cm hoog en op dag 20 27 cm. Een lineair model door deze punten: helling $(27 - 15)/10 = 1{,}2$ cm per dag, startwaarde $15 - 1{,}2 \cdot 10 = 3$ cm. Dus $h = 1{,}2t + 3$.

**Interpoleren.** Op dag 15: $h = 21$ cm. Waarschijnlijk redelijk.

**Een beetje extrapoleren.** Op dag 25: $h = 33$ cm. Misschien redelijk, als de plant nog groeit.

**Ver extrapoleren.** Na een jaar ($t = 365$): $h = 441$ cm. Een kamerplant van vier en een halve meter? Het model kent geen volwassen hoogte, dus het voorspelt eindeloze groei.

**Conclusie.** Het model is bruikbaar in het gebied waar de metingen liggen, en een beetje daarbuiten. Hoe ver je mag gaan, volgt niet uit de wiskunde, maar uit kennis van het mechanisme.
:::

:::warning Twee modellen, één verleden, twee toekomsten
Een lineair en een exponentieel model kunnen allebei goed passen bij gegevens over een korte periode. Binnen die periode verschillen ze weinig; daarbuiten lopen ze steeds verder uiteen. Wie dan het verkeerde model kiest, maakt een fout die met de tijd groeit. Zoek daarom altijd een argument uit het mechanisme, niet alleen uit de fit.
:::

{{ exercise: 34-024 }}

## 2. Valideren: eerlijk toetsen

Een model valideren betekent: nagaan of het doet wat het moet doen. Daarvoor zijn een paar vuistregels.

:::theory Vuistregels voor validatie
1. **Toets met nieuwe gegevens.** Een model past altijd redelijk bij de gegevens waarmee je het hebt gemaakt. Echte toetsing gebeurt met gegevens die je achter de hand hebt gehouden, of met nieuwe metingen.
2. **Kijk naar de residuen.** Zijn ze klein? En vooral: zijn ze *willekeurig*, of zie je een patroon (eerst allemaal positief, dan allemaal negatief)? Een patroon in de residuen betekent dat het modeltype niet klopt.
3. **Vergelijk de fout met de eis.** Is de typische afwijking klein vergeleken met de nauwkeurigheid die je nodig hebt, en met de meetnauwkeurigheid? Dit was precies Keplers redenering: 8 boogminuten modelfout tegenover 2 boogminuten meetfout.
4. **Controleer de uitkomsten op redelijkheid.** Negatieve voorraden, kinderen van acht meter of meer besmettingen dan inwoners zijn tekenen dat je buiten het geldigheidsgebied zit.
:::

Een eenvoudige maat voor "hoe groot is de typische afwijking?" is de **gemiddelde absolute afwijking** van de residuen: je neemt van elk residu de absolute waarde en middelt die.

:::example Uitgewerkt voorbeeld: residuen van een tarievenmodel
Een bezorgdienst gebruikt het model $K = 3 + 0{,}5x$ voor de prijs (in euro) van een pakket van $x$ kg. Op vier facturen staat:

| $x$ (kg) | 2 | 4 | 6 | 8 |
|---|---|---|---|---|
| gefactureerd (€) | 4{,}10 | 4{,}90 | 6{,}20 | 6{,}80 |
| model (€) | 4{,}00 | 5{,}00 | 6{,}00 | 7{,}00 |
| residu (€) | $+0{,}10$ | $-0{,}10$ | $+0{,}20$ | $-0{,}20$ |

**Gemiddelde absolute afwijking.** $(0{,}10 + 0{,}10 + 0{,}20 + 0{,}20) / 4 = 0{,}60 / 4 = 0{,}15$ euro.

**Patroon?** De tekens wisselen af: $+, -, +, -$. Er is geen duidelijk patroon, dus het lineaire modeltype lijkt in orde.

**Let op.** Het gewone gemiddelde van de residuen is hier $0$: de afwijkingen heffen elkaar op. Dat zegt dus niets over hoe goed het model past. Daarom neem je de absolute waarden (of, zoals bij regressie, de kwadraten).
:::

{{ exercises: 34-025, 34-026, 34-027 }}

## 3. Fermi-schattingen: modelleren met bijna niets

Soms heb je helemaal geen meetgegevens en wil je toch weten of iets in de orde van tien, duizend of een miljoen ligt. De Italiaans-Amerikaanse natuurkundige **Enrico Fermi** (1901–1954) stond erom bekend dat hij zulke vragen snel en verrassend nauwkeurig kon beantwoorden. Bij de eerste kernproef in juli 1945 liet hij snippers papier vallen toen de drukgolf langskwam en schatte uit hun verplaatsing de kracht van de explosie op ongeveer 10 kiloton TNT. De nu aanvaarde waarde is ongeveer 21 kiloton: hij zat er een factor twee naast, maar had de goede orde van grootte.

Zo'n **Fermi-schatting** werkt door de onbekende grootheid op te splitsen in een product van factoren die je wél redelijk kunt schatten. De klassieke oefenvraag, die traditioneel aan Fermi wordt toegeschreven (al is niet zeker dat hij precies deze vraag stelde), is: *hoeveel pianostemmers zijn er in Chicago?* Wij doen het voor Amsterdam.

:::example Uitgewerkt voorbeeld: pianostemmers in Amsterdam
**Opsplitsen.** Aantal stemmers = (aantal stembeurten per jaar in Amsterdam) : (aantal stembeurten dat één stemmer per jaar doet).

**Vraag.**
- Amsterdam heeft ruim 900.000 inwoners. Reken met 900.000.
- Gemiddeld ongeveer 2 personen per huishouden: $900\,000 : 2 = 450\,000$ huishoudens.
- Stel dat 1 op de 20 huishoudens een (echte) piano heeft: $450\,000 : 20 = 22\,500$ piano's. Scholen, kerken en concertzalen laten we weg; dat is één van de onzekerheden.
- Een piano wordt gemiddeld ongeveer eens per jaar gestemd: $22\,500$ stembeurten per jaar.

**Aanbod.**
- Een stemmer doet ongeveer 4 piano's per dag (inclusief reistijd), 5 dagen per week, 46 weken per jaar: $4 \cdot 5 \cdot 46 = 920$ stembeurten per jaar.

**Uitkomst.** $22\,500 : 920 \approx 24$ pianostemmers.

**Interpretatie.** Het echte antwoord ligt waarschijnlijk ergens tussen 10 en 100. Het getal 24 is geen voorspelling tot op de eenheid, maar een **orde van grootte**: er zijn er tientallen, niet enkele en niet duizenden.
:::

Waarom werkt dit zo goed? Omdat elke factor een beetje te hoog of te laag kan zijn, maar het onwaarschijnlijk is dat ze allemaal dezelfde kant op afwijken. Overschattingen en onderschattingen heffen elkaar gedeeltelijk op. Bovendien dwingt het opsplitsen je om je aannames expliciet te maken. Dat is precies stap 2 van de modelleercyclus.

:::tip Een goede Fermi-schatting
- Splits op in factoren die je kunt voorstellen (inwoners, huishoudens, keren per jaar).
- Rond af op handige getallen; precisie is schijn.
- Schrijf elke aanname op, met eenheid.
- Controleer de eenheden: (piano's per jaar) : (piano's per stemmer per jaar) = stemmers.
- Geef het antwoord als orde van grootte, en bedenk welke factor het onzekerst is.
:::

{{ exercises: 34-028, 34-029 }}
