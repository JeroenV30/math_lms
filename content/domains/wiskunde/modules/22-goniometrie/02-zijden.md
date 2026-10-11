# De hoek bepaalt de namen

Voordat je met verhoudingen kunt rekenen, moet je weten waarover je het hebt. Dat klinkt vanzelfsprekend, maar het is de plek waar de meeste fouten in de goniometrie ontstaan: een zijde heeft in een rechthoekige driehoek geen vaste naam. Of een zijde *overstaand* of *aanliggend* heet, hangt af van de hoek waar je naar kijkt. Alleen de schuine zijde heeft een vaste plek. In deze les leer je dat taalgebruik precies te hanteren, en je ziet waarom gelijkvormige driehoeken de basis van alles zijn.

## De schuine zijde ligt vast

Begin altijd bij de rechte hoek. De zijde die daar tegenover ligt, heet de **schuine zijde** en we noteren die als **S**. Wat je ook doet, deze zijde blijft dezelfde. Ze is bovendien altijd de langste zijde van de driehoek. Dat volgt uit Pythagoras: omdat $S^2 = O^2 + A^2$ is $S^2$ groter dan elk van de twee kwadraten afzonderlijk, dus is S groter dan elke rechthoekszijde.

Daarna kies je een van de twee scherpe hoeken en noem je die θ (theta, een veelgebruikte letter voor een hoek). Vanaf dat moment zijn de twee overgebleven zijden, de rechthoekszijden, niet meer gelijkwaardig:

- de **overstaande zijde O** ligt tegenover θ: ze raakt de hoek θ niet en wordt als het ware door θ 'aangekeken';
- de **aanliggende zijde A** ligt aan θ: ze vormt samen met de schuine zijde het been van de hoek θ.

![Dezelfde rechthoekige driehoek, bekeken vanuit twee verschillende hoeken](/images/diagrams/m22-zijden.svg "Links is θ de hoek linksonder; rechts is θ de hoek bovenaan. De schuine zijde blijft S, maar O en A wisselen van rol. Eigen figuur.")

Kijk goed naar de twee driehoeken. Het zijn dezelfde driehoeken, met dezelfde zijden. Links is de verticale zijde de overstaande, rechts is die zijde juist de aanliggende. Zodra je van hoek wisselt, wisselen O en A van rol. Daarom is de eerste handeling bij elke opgave: wijs de hoek aan, en pas daarna de zijden.

:::definition Overstaand, aanliggend, schuin
Kies in een rechthoekige driehoek een scherpe hoek θ.
- **Schuine zijde (S):** de zijde tegenover de rechte hoek.
- **Overstaande zijde (O):** de rechthoekszijde tegenover θ.
- **Aanliggende zijde (A):** de rechthoekszijde die aan θ ligt.
:::

:::example Een 3–4–5-driehoek, vanuit beide hoeken
De driehoek heeft zijden 3, 4 en 5. De schuine zijde is 5, want die ligt tegenover de rechte hoek (en $3^2 + 4^2 = 25 = 5^2$).

Kies je de hoek die tegenover de zijde 3 ligt, dan is O = 3 en A = 4. Kies je de andere scherpe hoek, dan is O = 4 en A = 3. De schuine zijde blijft 5.

Die twee hoeken vullen elkaar aan tot 90°, want de drie hoeken van een driehoek tellen op tot 180° en de rechte hoek neemt er al 90° van voor zijn rekening. Dat feit komt in de volgende lessen vaak van pas.
:::

Een bruikbare vuistregel: de aanliggende zijde 'raakt' de hoek en de overstaande zijde 'kijkt ernaar'. Wie twijfelt, kan met een potlood vanuit de hoek een denkbeeldige pijl naar de overstaande zijde trekken: die pijl moet de zijde raken zonder via een andere zijde te lopen.

## Waarom gelijkvormigheid alles draagt

Twee driehoeken zijn **gelijkvormig** als ze dezelfde hoeken hebben. De ene is dan een vergroting of verkleining van de andere: elke zijde van de ene driehoek is gelijk aan de overeenkomstige zijde van de andere, vermenigvuldigd met één en dezelfde positieve factor $k$. Een foto die je vergroot op het scherm is een alledaags voorbeeld: alles wordt groter, maar de vorm verandert niet.

Dat heeft een belangrijke gevolgtrekking. Neem een rechthoekige driehoek met overstaande zijde $O$ en schuine zijde $S$. Vergroot je alle zijden met factor $k$, dan wordt $O$ gelijk aan $kO$ en $S$ gelijk aan $kS$. De verhouding is dan

$$\frac{kO}{kS} = \frac{O}{S},$$

omdat de factor $k$ in teller en noemer wegvalt. De verhouding verandert niet. Hetzelfde geldt voor $A/S$ en voor $O/A$.

Twee rechthoekige driehoeken met dezelfde scherpe hoek hebben automatisch ook dezelfde derde hoek, want de som is 180°. Ze hebben dus allemaal dezelfde hoeken en zijn gelijkvormig. Conclusie: bij een gegeven scherpe hoek hoort een vaste waarde van elke verhouding tussen twee zijden, ongeacht de grootte van de driehoek.

![Twee gelijkvormige rechthoekige driehoeken](/images/diagrams/m22-gelijkvormig.svg "De kleine driehoek is de grote verkleind met factor 1/2. De verhouding O : S is in beide gelijk. Eigen figuur.")

:::example De verhouding verandert niet
In de figuur heeft de grote driehoek O = 21, A = 40 en $S = \sqrt{21^2 + 40^2} = \sqrt{2041} \approx 45{,}18$. De kleine driehoek heeft de helft van elke zijde: O = 10,5, A = 20 en S ≈ 22,59.

Grote driehoek: $21/45{,}18 \approx 0{,}465$. Kleine driehoek: $10{,}5/22{,}59 \approx 0{,}465$. Dezelfde waarde, hoewel de driehoeken in grootte verschillen. Die waarde is een eigenschap van de hoek θ.
:::

Dit is de gedachte waarmee Thales' piramidemeting werkt en waarmee een kaart een landschap verkleint. Het is ook de reden dat het zin heeft om een naam te geven aan de verhoudingen: omdat ze alleen van de hoek afhangen, kun je ze één keer berekenen, in een tabel zetten en voor altijd hergebruiken. Dat is precies wat sterrenkundigen eeuwenlang hebben gedaan.

{{ widget: right-triangle angle="30" hypotenuse="5" }}

In de widget wordt de driehoek steeds passend getekend; de getallen geven de werkelijke zijden op de gekozen schaal weer. Zet de hoek vast op 30° en laat de schuine zijde verschillende waarden aannemen. Let op hoe de overstaande zijde steeds precies de helft van de schuine zijde blijft: dat is geen toeval, en in les 3 zie je waarom.

:::warning Veelgemaakte fout: de verkeerde zijde als overstaand of aanliggend
Veel mensen noemen vaak de zijde die er 'het meest bij staat' of de zijde die onderaan ligt de aanliggende. Dat is een toevalligheid van de tekening. Draai je het papier een kwartslag, dan staat dezelfde zijde ineens ergens anders. Beslis dus uitsluitend op grond van de gekozen hoek: de aanliggende zijde raakt de hoek (maar is niet de schuine zijde), de overstaande zijde ligt er recht tegenover.
:::

## Oefenen met de namen

Begin met de zijden benoemen en eenvoudige verhoudingen opschrijven. De eerste vier oefeningen zijn bedoeld om de namen automatisch te maken; de laatste twee combineren ze met Pythagoras en met vereenvoudigen van een breuk.

{{ exercises: 22-003, 22-004, 22-005, 22-006, 22-031 }}

Merk op dat je bij 22-006 een breuk opschrijft die je niet hoeft te schrijven als decimaal getal. In les 3 zul je zien dat zo'n verhouding juist de sinus van de hoek is. De breuk $3/5$ en het getal $0{,}6$ zijn dan twee schrijfwijzen van dezelfde waarde.
