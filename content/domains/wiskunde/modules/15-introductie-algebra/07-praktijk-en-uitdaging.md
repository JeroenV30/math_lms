# Een model schrijven en controleren

In de vorige lessen leerde je de losse handgrepen: vertalen, invullen, samennemen, haakjes wegwerken en buiten haakjes brengen. In de praktijk gebruik je ze samen. Een situatie uit de werkelijkheid, zoals een tarief, een figuur of een patroon, vang je in een expressie; die expressie vereenvoudig je; en het resultaat controleer en interpreteer je. Zo'n expressie heet een **model** van de situatie.

## Een stappenplan

:::theory Van situatie naar model
1. **Benoem de letters.** Schrijf op waar elke letter voor staat, in welke eenheid, en welke waarden zinvol zijn. Gebruik zo weinig mogelijk letters.
2. **Schrijf het model op**, eerst gerust in een lange vorm die direct uit de situatie volgt.
3. **Vereenvoudig** met de regels uit les 4 en 5.
4. **Controleer** met een concreet geval dat je ook zonder formule kunt uitrekenen.
5. **Interpreteer**: wat betekent elk onderdeel van de expressie in de situatie?
:::

Stap 4 is geen formaliteit. Een model is een beschrijving van de werkelijkheid, en je kunt je bij het opstellen vergissen, ook als je daarna foutloos rekent. Eén concreet geval met de hand narekenen vangt de meeste van die vergissingen.

## Voorbeeld 1: twee abonnementen

:::example Uitgewerkt voorbeeld: welke sportschool is goedkoper?
Sportschool A rekent € 45 inschrijfgeld en daarna € 29 per maand. Sportschool B rekent geen inschrijfgeld, maar € 34 per maand.

**Letters.** Noem het aantal maanden $m$ (een geheel getal, $m \geq 1$).

**Modellen.** Totale kosten bij A: $45 + 29m$ euro. Bij B: $34m$ euro.

**Vergelijken.** Het verschil "B min A" is

$$
34m - (45 + 29m) = 34m - 45 - 29m = 5m - 45.
$$

Let op het minteken vóór de haakjes: beide termen van A krijgen een minteken.

**Interpretatie.** Het verschil $5m - 45$ is negatief zolang $5m$ kleiner is dan 45, dus tot en met 8 maanden: dan is B goedkoper. Bij precies 9 maanden is het verschil $45 - 45 = 0$: beide kosten € 306. Daarna is A goedkoper, en elke maand groeit het voordeel met € 5. De coëfficiënt 5 is het maandelijkse prijsverschil; de 45 is het inschrijfgeld dat je eerst "terug moet verdienen".

**Controle.** Bij $m = 12$: A kost $45 + 348 = 393$, B kost $408$. Verschil $15$, en $5 \cdot 12 - 45 = 15$. Klopt.
:::

{{ exercise: 15-042 }}

## Voorbeeld 2: omtrek en oppervlakte met een letter

:::example Uitgewerkt voorbeeld: een rechthoek met letterzijden
Een rechthoek heeft lengte $x + 2$ en breedte 3 (in meter).

**Omtrek.** Twee lengtes en twee breedtes: $2(x + 2) + 2 \cdot 3 = 2x + 4 + 6 = 2x + 10$.

**Oppervlakte.** Lengte maal breedte: $3(x + 2) = 3x + 6$.

**Controle** bij $x = 4$: de lengte is 6 en de breedte 3. Omtrek rechtstreeks: $6 + 3 + 6 + 3 = 18$; met de formule: $2 \cdot 4 + 10 = 18$. Oppervlakte rechtstreeks: $6 \cdot 3 = 18$; met de formule: $12 + 6 = 18$. (Dat omtrek en oppervlakte hier hetzelfde getal opleveren, is toeval, en de eenheden verschillen: meter tegenover vierkante meter.)

**Toegestane waarden.** De lengte $x + 2$ moet positief zijn, dus $x > -2$. In een context waar $x$ zelf een lengte is, geldt zelfs $x > 0$.
:::

:::example Uitgewerkt voorbeeld: tafels aan elkaar
Aan een vierkante tafel passen 4 mensen, één aan elke kant. Schuif je $n$ tafels in een rij tegen elkaar, dan verdwijnen de kanten waar twee tafels elkaar raken.

**Redenering.** Langs de lange zijden zitten $n$ mensen boven en $n$ beneden, en aan de twee kopse kanten nog één. Samen: $2n + 2$.

**Andere redenering.** Elke tafel heeft 4 plaatsen, samen $4n$. Bij elke aansluiting verdwijnen 2 plaatsen, en er zijn $n - 1$ aansluitingen: $4n - 2(n - 1) = 4n - 2n + 2 = 2n + 2$. Zelfde model.

**Controle** met $n = 3$: tekenen geeft 3 boven, 3 onder, 2 aan de koppen: 8. Met de formule: $2 \cdot 3 + 2 = 8$.

**Buiten haakjes:** $2n + 2 = 2(n + 1)$. Dat laat zien dat er altijd een even aantal mensen past, en het levert een derde manier van kijken op: denk aan $n + 1$ paren.
:::

{{ exercises: 15-027, 15-028, 15-030 }}

## Expressie of vergelijking?

In voorbeeld 1 vond je dat beide sportscholen even duur zijn bij 9 maanden. Strikt genomen was dat een **vergelijking**: $45 + 29m = 34m$, met oplossing $m = 9$. Je loste haar hier op door te redeneren over het verschil $5m - 45$. In module 16 leer je zulke vergelijkingen systematisch oplossen, met de bewerkingen *al-jabr* en *al-muqābala* van al-Khwarizmi in moderne vorm.

Het onderscheid blijft belangrijk:

- Een **expressie** zoals $2x + 10$ beschrijft een hoeveelheid. Je kunt haar herschrijven (vereenvoudigen, uitwerken, ontbinden) of invullen, maar niet "oplossen".
- Een **vergelijking** zoals $2x + 10 = 18$ is een uitspraak die alleen voor bepaalde waarden van $x$ waar is. Die kun je oplossen.
- Een **identiteit** zoals $2(x + 5) = 2x + 10$ is waar voor élke $x$. Alle omzettingen uit deze module zijn identiteiten.

:::warning Herschrijven is geen oplossen
Schrijf bij het vereenvoudigen van een expressie geen "$= 0$" of "$x = \dots$" erachter. $3x + 6x$ vereenvoudigen geeft $9x$; er valt geen $x$ te berekenen. Wie dat wel doet, verandert ongemerkt de vraag.
:::

## Uitdagingen

De volgende drie opgaven vragen om alles uit deze module tegelijk: een situatie vertalen, verschillende manieren van kijken, haakjes wegwerken en buiten haakjes brengen. Neem er de tijd voor en maak eerst een tekening of een tabel.

:::challenge Een fotolijst
Een vierkante foto heeft zijde $x$ cm. Er komt een passe-partout omheen dat aan alle kanten 2 cm breed is. Hoeveel karton (in cm²) zit er in het passe-partout zelf? Denk aan het grote vierkant min het gat, en werk de haakjes zorgvuldig uit.
:::

:::challenge Twee rijen vierkantjes
Leg met lucifers een rechthoek van twee rijen van $n$ vierkantjes (dus $2n$ vierkantjes). Hoeveel lucifers heb je nodig? Tel liggende en staande lucifers apart.
:::

:::challenge Drie opeenvolgende getallen
Bewijs dat de som van drie opeenvolgende gehele getallen altijd een drievoud is, door de som als product te schrijven.
:::

{{ exercises: 15-043, 15-044, 15-045 }}
