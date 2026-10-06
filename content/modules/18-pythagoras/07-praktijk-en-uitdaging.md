# Ladders, kabels en rechthoeken

Je kent nu de stelling, haar bewijzen en haar omkering. In deze les gebruik je alles in situaties die je ook buiten het boek tegenkomt: een ladder tegen een muur, een kabel naar een mast, een beeldscherm, een bouwhoek. Het rekenen is meestal het makkelijkste deel. Het lastige is *vertalen*: uit een beschrijving in woorden haal je een rechthoekige driehoek, en je beslist welke zijde de schuine zijde is. Daarom volgt eerst een vaste werkwijze.

## Een vaste werkwijze

1. **Teken de situatie.** Maak een schets, ook als de opgave geen tekening geeft. Zet er de gegeven lengtes in.
2. **Zoek de rechte hoek.** Is er een verticale muur op een horizontale vloer, een paal die loodrecht op de grond staat, een rechthoek of een assenstelsel? Dan is er een rechte hoek. Staat die er niet, dan mag je Pythagoras niet gebruiken.
3. **Bepaal de schuine zijde.** Dat is de zijde tegenover de rechte hoek: de ladder, de kabel, de diagonaal. Noem de andere twee $a$ en $b$.
4. **Reken.** Zoek je de schuine zijde, dan *tel* je kwadraten *op*. Zoek je een rechthoekszijde, dan *trek* je het kwadraat van de bekende rechthoekszijde af van het kwadraat van de schuine zijde.
5. **Controleer.** Past de uitkomst bij de schets? Is de schuine zijde langer dan de rechthoekszijden? Staat de eenheid erbij, en klopt de afronding met de vraag?

:::tip Het model is niet de werkelijkheid
Een berekening beschrijft een geometrisch model: een rechte ladder, een strakke kabel, een perfect verticale muur. Een echte ladder staat op ongelijke grond, een echte kabel hangt door. Het geometrische antwoord is een nauwkeurige uitkomst van een idealisering, geen veiligheidsadvies of bouwvoorschrift. Rekenen met Pythagoras zegt iets over de lengtes in de beschreven figuur, niet over of een situatie verstandig of veilig is.
:::

## Een ladder tegen een muur

:::example Een ladder
Een ladder van 5 m staat met de voet 3 m van een verticale muur op vlakke grond. Hoe hoog reikt hij tegen de muur?

1. De muur en de grond staan loodrecht op elkaar. De ladder is de schuine zijde: $c = 5$. De afstand van de voet tot de muur is $b = 3$.
2. De hoogte $a$ volgt uit $a^2 = c^2 - b^2 = 25 - 9 = 16$.
3. $a = 4$ m.

Merk op dat de ladder de schuine zijde is en niet de hoogte. Wie $\sqrt{5^2 + 3^2}$ uitrekent, vindt 5,83 m: een ladder langer dan 5 m, en dat past niet bij de vraag.
:::

Bij een kabel van de top van een paal naar de grond zijn de paalhoogte en de horizontale afstand de rechthoekszijden, als de paal loodrecht op de grond staat. De kabel is dan de schuine zijde. Een strak gespannen kabel in de berekening is iets anders dan een echte kabel, die doorhangt, bevestigd moet worden en extra lengte nodig heeft. Reken dus de *minimale* lengte uit.

{{ exercises: 18-026, 18-027, 18-028, 18-029 }}

## Rechte hoeken in de bouw

Hoe zet een metselaar een rechte hoek uit zonder winkelhaak? Met de omgekeerde stelling. Hij meet langs de ene muur 3 meter af, langs de andere 4 meter, en past de afstand tussen die twee punten aan tot hij precies 5 meter is. Dan is de hoek recht, want $3^2 + 4^2 = 5^2$. Met een gesloten koord met twaalf knopen op gelijke afstand kun je dezelfde driehoek spannen: 3 stukken, 4 stukken en 5 stukken.

![Een rechte hoek uitzetten met een koord](/images/diagrams/m18-bouwhoek-345.svg "Een koord met 12 knopen, gespannen als 3 + 4 + 5, geeft een rechte hoek. Eigen figuur.")

Wil je de hoek nauwkeuriger maken, dan neem je een groter drietal: hoe langer de benen, hoe kleiner de invloed van een fout van een millimeter. Voor een groot bouwwerk kun je 6-8-10 of 9-12-15 nemen, of het drietal 5-12-13. Een rechte hoek van een kleine tuinschuur kan met 0,6 m, 0,8 m en 1,0 m, maar voor een fundering is 3 m, 4 m en 5 m beter.

{{ exercise: 18-037 }}

## De diagonaal van een beeldscherm

Het formaat van een beeldscherm wordt opgegeven als de lengte van de diagonaal, vaak in inches (1 inch is 2,54 cm). Zo'n scherm is een rechthoek en de diagonaal is de schuine zijde van een rechthoekige driehoek. De breedte en de hoogte zijn de rechthoekszijden. Een scherm met de verhouding 16 : 9 heeft breedte 16 delen en hoogte 9 delen, dus diagonaal $\sqrt{16^2 + 9^2} = \sqrt{337} \approx 18{,}36$ delen.

![Een beeldscherm met breedte, hoogte en diagonaal](/images/diagrams/m18-tv-diagonaal.svg "De schermmaat is de diagonaal; hier bij een verhouding van 16 : 9. Eigen figuur.")

Dat verklaart waarom twee schermen met dezelfde diagonaal een verschillend oppervlak kunnen hebben: een bredere, platter rechthoek met dezelfde diagonaal is minder hoog. Alleen de diagonaal zegt niet hoe groot het scherm is.

:::example Een tv-diagonaal
Een televisie is 80 cm breed en 45 cm hoog. Bereken de diagonaal op één decimaal.

$c = \sqrt{80^2 + 45^2} = \sqrt{6400 + 2025} = \sqrt{8425} \approx 91{,}8$ cm.

Dat is ongeveer 36 inch. Controle: $91{,}8 < 80 + 45 = 125$ en $91{,}8 > 80$.
:::

{{ exercise: 18-038 }}

## Een balk tegen een muur

Een ouder probleem uit Mesopotamië past bij dit onderwerp. Een balk van lengte 30 staat rechtop tegen een muur. De bovenkant zakt 6 omlaag. Hoe ver is de voet nu van de muur verschoven? Begin met een schets: de balk was eerst 30 hoog; nu staat de top op hoogte 24, en de balk is nog steeds 30 lang. De balk is dus de schuine zijde.

![Een balk die langs de muur zakt](/images/diagrams/m18-balk-tegen-muur.svg "Een balk van 30 zakt 6 omlaag; de voet schuift een onbekende afstand van de muur. Eigen figuur.")

Het is verleidelijk om te zeggen dat de voet 6 opschuift, omdat de top 6 zakt. Dat klopt niet: top en voet bewegen niet even snel. Pas na een berekening weet je hoeveel.

{{ exercise: 18-039 }}

## Uitdagingen

Een uitdaging vraagt dat je Pythagoras combineert met andere kennis: algebra, oppervlakte, systematisch proberen. Lees de vraag rustig en maak eerst een tekening.

:::challenge Van omtrek en diagonaal naar zijden
Een rechthoek heeft omtrek 28 cm en diagonaal 10 cm. De zijden zijn positieve gehele centimeters. Vind beide zijden.

De omtrek geeft $a + b = 14$; de diagonaal geeft $a^2 + b^2 = 100$. Probeer paren die samen 14 zijn en controleer de kwadraten, of gebruik de algebraïsche relatie $(a + b)^2 = a^2 + 2ab + b^2$: je vindt dan $ab$, en daaruit $a$ en $b$.
:::

{{ exercise: 18-030 }}

:::challenge Een onbekende coördinaat
Het punt $A(-2; 1)$ ligt op afstand 10 van een punt $B(4; y)$ met $y > 1$. Bereken $y$.

Het horizontale verschil is vast: $4 - (-2) = 6$. De afstand is gegeven, en dus is het verticale verschil af te leiden uit $6^2 + (y - 1)^2 = 10^2$.
:::

{{ exercise: 18-041 }}

:::challenge Een gelijkbenige rechthoekige driehoek
Een rechthoekige driehoek heeft twee even lange rechthoekszijden en een schuine zijde van 10. Wat is zijn oppervlakte?

Noem de rechthoekszijden $a$. Je hebt dan $a^2 + a^2 = 100$. Je hoeft $a$ zelf niet uit te rekenen om de oppervlakte te vinden: de oppervlakte is $\tfrac{1}{2}a \cdot a = \tfrac{1}{2}a^2$.
:::

{{ exercise: 18-042 }}
