# Staartdelen: delen in kolommen

Kleine delingen los je op met de tafels. Maar hoe deel je 5.237 door 6, of 7.344 door 24? Daarvoor bestaat een schriftelijke methode: de **staartdeling**. In het Engels heet ze *long division*. De naam "staart" verwijst naar het schema dat bij elke stap een stukje langer naar beneden groeit.

De staartdeling is geen trucje. Ze is gebouwd op twee dingen die je al kent: de plaatswaarde van cijfers (module 2) en de verdeeleigenschap (module 4).

## 1. Het idee: deel per plaatswaarde

Neem $96 : 4$. Splits het deeltal in stukken die makkelijk deelbaar zijn door 4:

$$
96 = 80 + 16, \qquad 96 : 4 = 80 : 4 + 16 : 4 = 20 + 4 = 24.
$$

Dat mag, omdat delen door 4 hetzelfde is als eerlijk verdelen over vier personen. Of je eerst 80 verdeelt en dan 16, of alles tegelijk: ieder krijgt evenveel.

Je kunt het ook zien als geld. Stel dat je 96 euro hebt in 9 briefjes van tien en 6 munten van één, en je verdeelt dat over 4 personen. Eerst de briefjes: ieder krijgt 2 briefjes van tien, en er blijft 1 briefje over. Dat briefje wissel je om in 10 munten, zodat je nu $10 + 6 = 16$ munten hebt. Ieder krijgt 4 munten. Resultaat: ieder krijgt 2 tientjes en 4 euro, samen 24 euro.

Precies dat **omwisselen** van wat overblijft naar de volgende plaatswaarde is wat de staartdeling stap voor stap doet.

{{ exercise: 05-012 }}

## 2. Het schema

In Nederland noteer je een staartdeling meestal zo: links de deler, dan een schuine streep, het deeltal, een schuine streep andersom, en rechts het quotiënt dat je cijfer voor cijfer opbouwt.

![Uitgewerkte staartdeling van 3860 gedeeld door 7 met uitkomst 551 en rest 3](/images/diagrams/m05-staartdeling.svg "De staartdeling 3.860 : 7 = 551 rest 3, in de Nederlandse notatie. Eigen diagram.")

Bij elk cijfer van het quotiënt doorloop je dezelfde vier stappen:

1. **Deel**: hoe vaak past de deler in het getal dat je nu bekijkt?
2. **Vermenigvuldig**: reken uit hoeveel dat precies is.
3. **Trek af**: wat blijft er over? (Dat moet kleiner zijn dan de deler!)
4. **Haal bij**: zet het volgende cijfer van het deeltal achter wat overbleef.

Je herhaalt dit tot alle cijfers van het deeltal aan de beurt zijn geweest. Wat dan overblijft, is de rest.

:::example 3.860 : 7 stap voor stap
**Start.** 7 past niet in 3 (de duizendtallen). Bekijk daarom de eerste twee cijfers: 38 (honderdtallen).

**Ronde 1.** 7 past 5 keer in 38, want $5 \times 7 = 35$ en $6 \times 7 = 42$ is te veel. Schrijf 5 in het quotiënt. Trek af: $38 - 35 = 3$. Haal de 6 bij: 36.

**Ronde 2.** 7 past 5 keer in 36: $5 \times 7 = 35$. Schrijf 5. Trek af: $36 - 35 = 1$. Haal de 0 bij: 10.

**Ronde 3.** 7 past 1 keer in 10: $1 \times 7 = 7$. Schrijf 1. Trek af: $10 - 7 = 3$. Er zijn geen cijfers meer om bij te halen.

**Antwoord.** Quotiënt 551, rest 3: $3.860 = 551 \cdot 7 + 3$.

**Controle.** $551 \times 7 = 3.857$ en $3.857 + 3 = 3.860$ ✓.
:::

Wat gebeurt er nu eigenlijk? De 5 die je in ronde 1 opschrijft, staat op de plaats van de honderdtallen: het betekent 500 rantsoenen van 7. De 35 is dus eigenlijk 3.500. Het schema laat de nullen weg, omdat de positie van de cijfers ze al aangeeft. Dat is precies de kracht van een plaatswaardesysteem.

{{ exercises: 05-013, 05-014 }}

## 3. Nullen in het quotiënt

Een veelgemaakte fout ontstaat als de deler in een ronde *niet* past. Kijk naar $912 : 3$:

```text
3 / 912 \ 304
    9
    -
    01        3 past 0 keer in 1: schrijf 0!
     0
    --
     12
     12
     --
      0
```

In de tweede ronde is er na het bijhalen van de 1 maar 1 over. 3 past daar 0 keer in. Die **0 moet je in het quotiënt opschrijven**, anders schuiven alle volgende cijfers een plaats op. Wie hem vergeet, krijgt 34 in plaats van 304. Een snelle schatting had dat verraden: $900 : 3 = 300$, dus het antwoord moet ruim 300 zijn, niet 34.

:::warning Elke ronde levert een cijfer op
Na de eerste ronde levert *elke* keer dat je een cijfer bijhaalt precies één cijfer in het quotiënt op, ook als dat cijfer 0 is. Tel ter controle: na de start heeft het quotiënt zoveel cijfers als er rondes waren.
:::

{{ exercise: 05-015 }}

## 4. Delen door een getal van twee cijfers

Met een deler van twee cijfers werkt het schema precies hetzelfde. Alleen het "hoe vaak past het?" wordt lastiger, want de tafel van 24 ken je niet uit je hoofd. Twee strategieën helpen.

**Maak eerst een tafeltje.** Schrijf de veelvouden van de deler op voordat je begint. Voor 24:

| × | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 |
|---|---|---|---|---|---|---|---|---|---|
| 24 | 24 | 48 | 72 | 96 | 120 | 144 | 168 | 192 | 216 |

Dit tafeltje maak je met optellen: telkens 24 erbij. Je kunt het controleren met $10 \times 24 = 240$, want $216 + 24 = 240$.

**Of schat met afgeronde getallen.** Hoe vaak past 24 in 73? Denk aan 25 in 75: 3 keer. Controleer met $3 \times 24 = 72$.

:::example 7.344 : 24
**Start.** 24 past niet in 7. Bekijk daarom de eerste twee cijfers: 73 (honderdtallen).

**Ronde 1.** Uit het tafeltje: $3 \times 24 = 72$ past, $4 \times 24 = 96$ niet. Schrijf 3. Trek af: $73 - 72 = 1$. Haal de 4 bij: 14.

**Ronde 2.** 24 past 0 keer in 14. Schrijf **0**. Trek af: $14 - 0 = 14$. Haal de laatste 4 bij: 144.

**Ronde 3.** Uit het tafeltje: $6 \times 24 = 144$. Schrijf 6. Trek af: $144 - 144 = 0$.

**Antwoord.** $7.344 : 24 = 306$, de deling gaat op.

**Controle.** $306 \times 24 = 306 \times 20 + 306 \times 4 = 6.120 + 1.224 = 7.344$ ✓.
:::

{{ exercise: 05-016 }}

## 5. Schatten en controleren

Een staartdeling heeft veel stappen, dus veel plekken om een fout te maken. Doe daarom altijd twee dingen.

**Vooraf schatten.** Rond het deeltal af naar een getal dat makkelijk deelbaar is. Voor $2.394 : 6$: $2.400 : 6 = 400$. Het antwoord moet dus net onder de 400 liggen. Zo weet je ook hoeveel cijfers het quotiënt krijgt: drie.

**Achteraf controleren.** Gebruik de formule $a = q \cdot b + r$. Vermenigvuldig het quotiënt met de deler, tel de rest erbij op, en kijk of je het deeltal terugkrijgt. Controleer ook dat de rest kleiner is dan de deler.

:::tip Hoeveel cijfers krijgt het quotiënt?
Bij $5.237 : 6$ past 6 niet in 5, maar wel in 52. Het eerste cijfer van het quotiënt staat dus boven de 2, op de plaats van de honderdtallen. Het quotiënt heeft dus drie cijfers: het ligt tussen 100 en 999. Met $6 \times 800 = 4.800$ en $6 \times 900 = 5.400$ weet je zelfs dat het tussen 800 en 900 ligt.
:::

{{ exercise: 05-017 }}
