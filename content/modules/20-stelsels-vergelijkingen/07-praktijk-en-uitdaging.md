# Mengsels, aantallen en twee onbekenden

Het oplossen van een stelsel is zelden het moeilijkste deel van een toepassing. Het lastigste is het opstellen: uit een verhaal met getallen en eenheden de twee vergelijkingen halen die er echt in zitten. In deze les oefen je dat vertaalwerk. Daarna reken je zelf, met de methode die het best past, en controleer je niet alleen de vergelijkingen maar ook het verhaal.

## Een vast stappenplan

Bij elke tekstopgave met twee onbekenden helpt dezelfde volgorde.

1. **Kies letters met een betekenis en een eenheid.** Schrijf op: $x$ is het aantal standaardtickets, $y$ het aantal kortingstickets. Zonder die zin raak je halverwege de draad kwijt.
2. **Zoek twee voorwaarden.** In de meeste opgaven is de ene voorwaarde een *aantal* ('in totaal 20 stuks') en de andere een *waarde* ('samen € 136', 'samen 30%', 'samen 70 wielen').
3. **Schrijf ze als vergelijkingen** en controleer of de eenheden links en rechts overeenkomen.
4. **Los op** met substitutie of eliminatie.
5. **Controleer in het verhaal.** Klopt het ook met de beperkingen: hele aantallen, geen negatieve hoeveelheden, een redelijke prijs?

:::example Tickets
Er zijn 20 tickets verkocht. Een standaardticket kost € 8 en een kortingsticket € 5. De opbrengst is € 136. Hoeveel van elk?

Neem $x$ standaardtickets en $y$ kortingstickets. De aantallen geven $x + y = 20$, de opbrengst geeft $8x + 5y = 136$. Uit de eerste volgt $y = 20 - x$. Vul in de tweede in, met haakjes: $8x + 5(20 - x) = 136$, dus $8x + 100 - 5x = 136$, dus $3x = 36$ en $x = 12$. Dan $y = 8$.

Controle: $12 + 8 = 20$ en $12 \cdot 8 + 8 \cdot 5 = 96 + 40 = 136$. Beide aantallen zijn gehele, positieve getallen, dus het antwoord past ook bij het verhaal.
:::

Let op wat de twee vergelijkingen *niet* vertellen: of de oplossing geheel is. Dat moet je zelf nagaan. Kreeg je $x = 12{,}5$ tickets, dan had je een rekenfout gemaakt of de opgave verkeerd gelezen.

## Twee producten

Vraagstukken over twee producten komen vaak voor in vermomde vorm. Een bakker verkoopt taarten en broden. Eén klant betaalt voor drie taarten en twee broden € 27; een tweede klant betaalt voor één taart en vier broden € 19. Wat kost een taart, wat een brood?

Noem de prijs van een taart $x$ en van een brood $y$ (in euro). Dan $3x + 2y = 27$ en $x + 4y = 19$. Hier is substitutie handig, want in de tweede vergelijking staat $x$ met coëfficiënt $1$: $x = 19 - 4y$. Invullen: $3(19 - 4y) + 2y = 27$, dus $57 - 12y + 2y = 27$, dus $-10y = -30$ en $y = 3$. Dan $x = 19 - 12 = 7$. Een taart kost € 7 en een brood € 3. Controle: $21 + 6 = 27$ en $7 + 12 = 19$.

Het patroon is dat van de koffiekar uit les 1: twee verschillende aankopen, dezelfde twee prijzen. Het stelsel is oplosbaar omdat de verhoudingen in de twee aankopen *verschillen*: bestelde de tweede klant precies het dubbele van de eerste, dan leerde je niets nieuws en kreeg je het herhaalde geval uit les 5.

## Munten en tellen

Een andere klassieke vorm is die met aantallen en waarde, zoals bij munten. Je hebt 18 munten van 20 en 50 cent, samen € 5,70. Hoeveel van elk? Werk in euro, en neem $x$ voor het aantal munten van € 0,20 en $y$ voor het aantal van € 0,50. Dan $x + y = 18$ en $0{,}20x + 0{,}50y = 5{,}70$. Met $x = 18 - y$ is $3{,}60 - 0{,}20y + 0{,}50y = 5{,}70$, dus $0{,}30y = 2{,}10$ en $y = 7$. Dan $x = 11$. Controle: $11 \cdot 0{,}20 = 2{,}20$ en $7 \cdot 0{,}50 = 3{,}50$, samen € 5,70.

Het trucje bij dit soort opgaven is dat je steeds *twee soorten tellen* hebt: het aantal stuks en de waarde van die stuks. Verwar ze niet. Een veelgemaakte fout is $x + y = 5{,}70$ te schrijven, waarbij het aantal en de waarde door elkaar raken.

## Mengsels

Bij mengsels vormen het totale volume en de hoeveelheid zuivere stof de twee voorwaarden. Procenten zet je om in factoren: 20% wordt $0{,}20$. De hoeveelheid zuivere stof in een deel is volume maal fractie. Voor het gewicht aan alcohol in $x$ liter van 20% heb je $0{,}20x$.

:::example Een mengsel van 25%
Je wilt 8 liter van een vloeistof met 25% van een stof, te maken uit een vloeistof van 10% en een van 40%. Hoeveel liter heb je van elk nodig?

Noem $x$ de liters van 10% en $y$ de liters van 40%. Het volume: $x + y = 8$. De zuivere stof: $0{,}10x + 0{,}40y = 0{,}25 \cdot 8 = 2$. Met $x = 8 - y$ krijg je $0{,}80 - 0{,}10y + 0{,}40y = 2$, dus $0{,}30y = 1{,}20$ en $y = 4$. Dan $x = 4$. Gelijke hoeveelheden dus, en dat klopt: 25% ligt precies in het midden van 10% en 40%.
:::

Een goede controle bij mengsels is het *middenidee*: het mengsel ligt altijd tussen de twee grondstoffen. Een mengsel van 20% en 50% van 30% moet dus meer van de 20%-vloeistof bevatten, omdat 30% dichter bij 20% ligt. Krijg je het omgekeerde, dan heb je de vergelijkingen verwisseld.

## Als de context bepaalt wat toegestaan is

Soms levert het stelsel een oplossing die algebraïsch correct is maar in het verhaal onmogelijk. Een negatief aantal tickets, een half kind, een hoeveelheid vloeistof die groter is dan het totaal. Dat zijn geen rekenfouten, maar signalen dat het model niet past. Daarom noem je bij een toepassing altijd het antwoord *in de context* ('7 liter van de 10%-vloeistof') en niet alleen als getalpaar.

Dit is ook de reden dat de raadsels van Alcuinus uit les 6 interessant zijn: daar legt de context (hele aantallen) meer vast dan de vergelijkingen op zichzelf.

:::challenge Twee oplossingen mengen
Je maakt 10 liter mengsel met 30% van een bepaalde stof uit een vloeistof van 20% en een van 50%. Neem volumes als optelbaar en laat verliezen weg. Hoeveel liter gebruik je van elke vloeistof?

Het totale volume is tien. De hoeveelheid zuivere stof moet drie liter zijn. Stel beide voorwaarden op en controleer je antwoord. Het antwoord is geen geheel getal; geef het als breuk.
:::

:::challenge Een verdeling van Alcuinus
Honderd schepels graan worden verdeeld over honderd mensen: een man krijgt er 3, een vrouw 2 en een kind een halve. Neem aan dat er 15 vrouwen zijn. Hoeveel mannen en hoeveel kinderen zijn er dan? Schrijf eerst de twee vergelijkingen in $m$ en $k$ op, nadat je $w = 15$ hebt ingevuld.
:::

## Voorbij twee onbekenden

Alles wat je in deze module deed, werkt ook met drie onbekenden en drie vergelijkingen, zoals het graanprobleem uit les 6. Je elimineert eerst één onbekende uit twee paren vergelijkingen, zodat er een stelsel van twee vergelijkingen met twee onbekenden overblijft, en dat los je op zoals je hier deed. Het is dezelfde methode, alleen langer. Bij tien onbekenden is de hoeveelheid werk zo groot dat je een computer inzet, met precies het eliminatieschema van Gauss. Dat schema wordt overzichtelijk met matrices, waar je in module 32 mee aan de slag gaat.

Houd van deze module vooral één gedachte over. Een onbekende vergt een voorwaarde; twee onbekenden vragen twee onafhankelijke voorwaarden. Dat de 'twee' hier voor een stelsel in het vlak staat, is wat de rest van de cursus steeds weer zal terugbrengen.

{{ exercises: 20-024, 20-025, 20-026, 20-027, 20-028, 20-029, 20-030 }}

{{ exercises: 20-039, 20-040, 20-041, 20-042 }}
