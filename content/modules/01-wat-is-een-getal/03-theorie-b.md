## Van telrij naar getallenlijn

De telrij is een volgorde van woorden: één, twee, drie, … Als je die volgorde uittekent, krijg je een van de krachtigste hulpmiddelen van de wiskunde: de **getallenlijn**. Je tekent een rechte lijn, zet een streepje bij 0 en zet daarna op **gelijke afstanden** de volgende getallen. Een pijl aan het eind laat zien dat de rij nooit ophoudt: na elk getal komt nog een getal.

![Getallenlijn van 0 tot 20 met de getallen 6 en 13 gemarkeerd](/images/diagrams/m01-getallenlijn.svg "Op de getallenlijn liggen kleinere getallen links en grotere rechts.")

Met de getallenlijn wordt een getal een **plaats**. Daardoor kun je ineens dingen *zien* die je anders moet bedenken:

- Welk van twee getallen het grootst is: het getal dat **rechts** ligt.
- Hoe ver twee getallen uit elkaar liggen: het aantal **stappen** ertussen.
- Welk getal er **halverwege** ligt: het punt in het midden.

De gelijke afstanden zijn essentieel. Een getallenlijn waarop de afstand van 0 tot 1 groter is dan die van 1 tot 2, liegt over de verhoudingen. Wie later grafieken leest (module 12 en verder), komt die regel steeds weer tegen.

:::tip Kardinaal en ordinaal op de lijn
Op de getallenlijn zie je beide betekenissen van een getal tegelijk. Het streepje bij 13 is een *plaats* (ordinaal: het dertiende streepje na 0). De afstand van 0 tot 13 is een *hoeveelheid* stappen (kardinaal: 13 stappen).
:::

## Groter en kleiner

Voor "is kleiner dan" en "is groter dan" gebruiken we twee tekens die je in de hele wiskunde terugziet:

$$
6 < 13 \qquad\text{(6 is kleiner dan 13)} \qquad\qquad 13 > 6 \qquad\text{(13 is groter dan 6)}
$$

Een handig ezelsbruggetje: de **open kant** van het teken wijst altijd naar het **grotere** getal, de punt naar het kleinere. Beide uitspraken zeggen hetzelfde, alleen van de andere kant bekeken.

Bij kleine getallen zie je meteen welke het grootst is. Bij grotere getallen werkt een vaste aanpak het best. In module 2 leer je precies waarom die werkt (het heeft met plaatswaarde te maken); voor nu volstaat de aanpak zelf.

:::theory Twee gehele getallen vergelijken
1. **Tel de cijfers.** Een getal met meer cijfers is groter: $3\,089$ (vier cijfers) is groter dan $938$ (drie cijfers), ook al begint $938$ met een groter cijfer.
2. **Evenveel cijfers?** Vergelijk dan van **links naar rechts**, cijfer voor cijfer. Het eerste cijfer dat verschilt, beslist: bij $389$ en $398$ zijn de eerste cijfers gelijk (3), en daarna is $8 < 9$. Dus $389 < 398$.
:::

:::example Ordenen
**Vraag.** Zet de getallen 506, 560, 65, 605 en 56 van klein naar groot.

**Denkstap 1.** Sorteer op aantal cijfers. Twee cijfers: 65 en 56. Drie cijfers: 506, 560, 605.

**Denkstap 2.** Vergelijk binnen elke groep van links naar rechts. $56 < 65$ (eerste cijfer: $5 < 6$). Bij de drie cijfers: 506 en 560 beginnen allebei met 5; daarna $0 < 6$, dus $506 < 560$. En 605 begint met 6, dus die is het grootst.

**Antwoord.** $56 < 65 < 506 < 560 < 605$.
:::

{{ exercises: 01-012, 01-013 }}

## Afstand en halverwege

Hoe ver liggen 17 en 45 uit elkaar? Op de getallenlijn tel je de **stappen** van 17 naar 45. Dat hoef je niet één voor één te doen: het aantal stappen is het verschil van de twee getallen.

$$
\text{afstand tussen } 17 \text{ en } 45 = 45 - 17 = 28
$$

Let op het verschil met de vorige les. De *afstand* van 17 naar 45 is 28 stappen, maar als je de getallen van 17 tot en met 45 opsomt, noem je er $28 + 1 = 29$. Stappen en getallen: dat is opnieuw de paaltjesfout.

Het **getal halverwege** twee getallen ligt even ver van beide af. Je vindt het door de afstand te halveren en die halve afstand vanaf het kleinste getal te zetten.

![Getallenlijn van 20 tot 40, met 30 halverwege](/images/diagrams/m01-getallenlijn-halverwege.svg "Halverwege 20 en 40 ligt 30: tien stappen van beide kanten.")

:::formula Het getal halverwege
$$
m = a + \frac{b - a}{2} = \frac{a + b}{2}
$$
In woorden: tel de twee getallen op en deel door 2. Of: halveer de afstand en tel die op bij het kleinste getal. Beide manieren geven hetzelfde antwoord.
:::

:::example Halverwege 37 en 83
**Denkstap 1.** De afstand is $83 - 37 = 46$.

**Denkstap 2.** De helft daarvan is $23$.

**Denkstap 3.** Zet die halve afstand vanaf 37: $37 + 23 = 60$.

**Controle.** Vanaf 83 terug: $83 - 23 = 60$. Ook de tweede manier: $(37 + 83) : 2 = 120 : 2 = 60$. Halverwege ligt **60**.
:::

Probeer het met de interactieve getallenlijn. Sleep het punt naar de plek die volgens jou halverwege 20 en 40 ligt, en controleer daarna de afstanden.

{{ widget: number-line min=20 max=40 value=30 }}

{{ exercises: 01-009, 01-011, 01-014 }}

## Een schaalverdeling lezen

Niet elke getallenlijn heeft een streepje bij elk getal. Bij een liniaal, een thermometer of een as van een grafiek staan er vaak streepjes per 5, per 10 of per 100, en lang niet alle streepjes hebben een getal erbij. Dan moet je eerst uitzoeken hoe groot **één stap** is.

:::example Hoe groot is één stap?
**Vraag.** Een getallenlijn loopt van 0 tot 50 en is met streepjes verdeeld in 10 gelijke stukken. Welk getal hoort bij het 3e streepje na 0?

**Denkstap 1.** De hele lijn is 50 lang en bestaat uit 10 gelijke stukken. Eén stuk is dus 5 waard ($10$ stukken van $5$ maken $50$).

**Denkstap 2.** Het 3e streepje ligt drie stukken na 0: $5, 10, 15$.

**Antwoord.** Bij het 3e streepje hoort **15**, niet 3.
:::

Soms zijn er helemaal geen tussenstreepjes en moet je **schatten**. Daarbij helpt het om de lijn in gedachten te halveren en nog eens te halveren: het midden van een lijn van 0 tot 1000 is 500, het midden tussen 500 en 1000 is 750. Een punt dat iets links van die 750 ligt, is dus ongeveer 700.

{{ exercise: 01-010 }}

## Zelfstandig oefenen

{{ exercises: 01-015, 01-016, 01-017, 01-018 }}
