# Casus: de energiebalans van Lena

## De situatie

Lena is 35 jaar, 168 cm lang en weegt 68 kg. Ze is fictief, maar haar vraag is gewoon: ze werkt als projectleider, zit veel achter een scherm, fietst dagelijks tien minuten naar het station en sport één keer per week. Haar gewicht is al een paar jaar stabiel. Toch vraagt ze zich af of dat klopt met wat ze eet. Ze heeft een week lang bijgehouden wat ze at en komt gemiddeld uit op de volgende dagcijfers, berekend uit de voedingswaardetabellen van haar producten:

| Stof | Gram per dag |
|---|---|
| Eiwit | 80 |
| Koolhydraten | 260 |
| Vet | 75 |
| Alcohol | 10 (een glas wijn) |

:::question
Voordat je rekent: schat of Lena volgens deze gegevens ongeveer in balans is, te veel eet of te weinig. Welke twee getallen heb je nodig om die vraag te beantwoorden, en welke daarvan kun je het slechtst nauwkeurig weten?
:::

## Stap 1: wat eet Lena

De energie-inname volgt uit de omrekenfactoren: eiwit en koolhydraten 4 kcal per gram, vet 9 kcal per gram, alcohol 7 kcal per gram.

$$
80 \times 4 + 260 \times 4 + 75 \times 9 + 10 \times 7 = 320 + 1040 + 675 + 70 = 2105\ \text{kcal}
$$

Let op de verdeling: het vet is maar 75 van de 425 gram, maar het levert $675 / 2105 \approx 32\%$ van de energie. De Europese Autoriteit voor voedselveiligheid (EFSA) noemt voor vet een referentiebereik van 20 tot 35 energieprocent; 32% valt daarbinnen.

{{ exercises: 01-010 }}

## Stap 2: wat verbruikt Lena

De ruststofwisseling volgt uit de formule voor vrouwen: $10w + 6{,}25h - 5a - 161$. Voor Lena is dat $10 \times 68 + 6{,}25 \times 168 - 5 \times 35 - 161$. Voor haar leefpatroon, grotendeels zittend met een beetje beweging, kiezen we een PAL van 1,5.

{{ exercises: 01-011 }}

## Stap 3: de balans

Het verschil tussen inname en verbruik is klein: ruim binnen de onzekerheid van beide schattingen. Dat past bij een stabiel gewicht. Als de uitkomst honderden kilocalorieën per dag zou afwijken, zou je de inschatting moeten herzien: óf Lena onderschat wat ze eet, óf het verbruik is anders dan de formule voorspelt. Dat illustreert waarom een rekenmodel altijd samen met de weegschaal wordt gebruikt.

{{ exercises: 01-012 }}

:::challenge Een extra glas
Lena gaat op vrijdag en zaterdag een tweede glas wijn drinken, steeds 10 gram alcohol erbij, verder verandert er niets. Hoeveel kilocalorieën extra is dat per week? Hoeveel is dat gemiddeld per dag, afgerond op een geheel getal? En hoe zou je, zonder een nieuwe formule, kunnen controleren of dit na een halfjaar zichtbaar is op de weegschaal? Denk daarbij aan de onzekerheid in haar eigen gegevens.
:::

## Wat je hieruit meeneemt

Een schatting van de energiebehoefte is een rekenkundige uitgangspositie, geen meting. De waarde van de berekening zit in de redenering: waar komt de energie vandaan, waar gaat ze heen, en welk verschil is groot genoeg om op te letten? Een kleine afwijking per dag levert over maanden wel een merkbaar verschil op. Tegelijk wijzigt het lichaam zijn eetlust en verbruik, waardoor een klein overschot niet altijd lineair in gewicht terugkomt. Bij een gezonde volwassene met een stabiel gewicht is het meestal geen reden voor ingrepen; wie zich zorgen maakt over zijn gewicht of eetpatroon, kan terecht bij de huisarts of een diëtist.
