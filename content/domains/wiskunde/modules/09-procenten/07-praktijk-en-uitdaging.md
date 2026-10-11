# Aanbiedingen, berichten en rekenvalkuilen

Je beheerst nu de techniek. In de praktijk zit de moeilijkheid zelden in het rekenwerk, maar in het **vertalen**: welke hoeveelheid is de basis, wat wordt er precies beweerd, en in welke volgorde gebeuren de veranderingen? In deze les pas je alles toe op situaties uit winkels, rapporten en nieuwsberichten.

## 1. Stapelkortingen

Winkels combineren graag kortingen: "25% korting, en aan de kassa nog eens 10% extra". Dat is niet hetzelfde als 35% korting.

:::example Uitgewerkt voorbeeld: twee kortingen na elkaar
Een product van € 80 krijgt eerst 25% korting en daarna nog 10% korting op de afgeprijsde prijs.

1. Na de eerste korting: $0{,}75 \times 80 = 60$ euro.
2. Na de tweede korting: $0{,}9 \times 60 = 54$ euro.
3. In één stap: $80 \times 0{,}75 \times 0{,}9 = 80 \times 0{,}675 = 54$ euro.

De totale groeifactor $0{,}675$ betekent dat je 67,5% betaalt: een korting van 32,5%. Eén korting van 35% zou € 52 opleveren. De tweede korting is kleiner dan hij lijkt, omdat hij over een lagere prijs wordt berekend.
:::

## 2. Hoeveel korting is een actie eigenlijk?

Veel aanbiedingen noemen geen percentage. Dan reken je het zelf uit door te vragen: hoeveel betaal ik per stuk, vergeleken met de normale prijs?

:::example Uitgewerkt voorbeeld: tweede voor de halve prijs
Een fles olijfolie kost € 12. De actie luidt: "de tweede voor de halve prijs". Wie twee flessen koopt, betaalt $12 + 6 = 18$ euro in plaats van € 24.

De korting is $24 - 18 = 6$ euro op een normale prijs van € 24: $\tfrac{6}{24} = 25\%$. Per fles betaal je € 9 in plaats van € 12: ook 25% korting. "Halve prijs" klinkt als 50%, maar die korting geldt maar voor de helft van je aankoop.
:::

Zulke acties zijn alleen voordelig als je de extra flessen ook echt nodig hebt. Wie normaal één fles koopt, geeft met de actie € 6 **meer** uit.

## 3. Percentages in berichten

Nieuwsberichten en rapporten gebruiken percentages om veranderingen samen te vatten. Een kritische lezer stelt dan drie vragen.

1. **Van wat?** Wat is de basis? "Het aantal fietsongelukken steeg met 50%" kan betekenen dat het van 2 naar 3 ging.
2. **Procent of procentpunt?** Gaat het over een verandering van een percentage? Dan moet je weten of er is afgetrokken of gedeeld.
3. **Welke volgorde en welke periode?** "De prijs steeg 10% in twee jaar" is iets anders dan "10% per jaar, twee jaar lang".

:::example Uitgewerkt voorbeeld: een btw-verhoging
Op 1 oktober 2012 steeg het algemene btw-tarief van 19% naar 21%. Hoeveel duurder werd een product waarvan de prijs exclusief btw gelijk bleef?

- Het **tarief** steeg met 2 procentpunten, of relatief met $\tfrac{2}{19} \approx 10{,}5\%$.
- Maar de **consumentenprijs** steeg veel minder. Neem een prijs exclusief btw van € 100. Vroeger betaalde je € 119, nu € 121. De stijging is $\tfrac{2}{119} \approx 0{,}0168$: ongeveer 1,68%.
- In groeifactoren: $\tfrac{1{,}21}{1{,}19} \approx 1{,}0168$.

Drie getallen, 2, 10,5 en 1,68, die alle drie "kloppen". Een journalist die schrijft dat "alles 2% duurder wordt", zit ernaast.
:::

## 4. Percentages van verschillende groepen

Percentages met verschillende bases mag je niet zomaar optellen of middelen. Dat is dezelfde fout als twee breuken optellen door tellers en noemers op te tellen.

:::example Uitgewerkt voorbeeld: twee vestigingen
Een bedrijf heeft twee vestigingen. In vestiging A werken 20 mensen, van wie 50% parttime. In vestiging B werken 80 mensen, van wie 25% parttime. Welk percentage van alle medewerkers werkt parttime?

Het gemiddelde van 50% en 25% is 37,5%, maar dat is fout: de vestigingen zijn niet even groot. Reken terug naar aantallen.

- Vestiging A: $0{,}5 \times 20 = 10$ parttimers.
- Vestiging B: $0{,}25 \times 80 = 20$ parttimers.
- Samen: 30 parttimers op 100 medewerkers, dus 30%.

De grote vestiging weegt zwaarder. Wie percentages van groepen wil combineren, rekent eerst terug naar aantallen en deelt dan door het totaal.
:::

Om dezelfde reden betekent "de prijs steeg in januari 3% en in februari 2%" niet dat de prijs "gemiddeld 2,5% per maand" steeg in de zin dat je 2,5% twee keer mag toepassen en precies op hetzelfde uitkomt. De totale groeifactor is $1{,}03 \times 1{,}02 = 1{,}0506$, en $1{,}025^2 = 1{,}050625$. Het verschil is klein, maar het is er.

## 5. Terug naar het begin

De vraag uit de introductie, "waarom heffen 20% erbij en 20% eraf elkaar niet op?", heeft een omkering: met **hoeveel procent** moet je verlagen om precies terug te komen?

:::example Uitgewerkt voorbeeld: na 60% erbij
Een prijs stijgt met 60%. Neem een prijs van € 100; die wordt € 160. Om terug te komen bij € 100 moet er € 60 af, maar nu over een basis van € 160: $\tfrac{60}{160} = 0{,}375 = 37{,}5\%$.

In groeifactoren: je zoekt $g$ met $1{,}6 \times g = 1$. Dan is $g = \tfrac{1}{1{,}6} = 0{,}625$: er blijft 62,5% over, dus een daling van 37,5%. Omdat je met groeifactoren rekent, doet het startbedrag van € 100 er niet toe: elk bedrag maal $1{,}6 \times 0{,}625 = 1$ is weer zichzelf.
:::

{{ exercises: 09-027, 09-028, 09-029 }}

:::challenge Uitdagingen
Bij de volgende drie opgaven moet je zelf bedenken welke grootheid de basis is en hoe je de situatie in groeifactoren vertaalt. Kies gerust een handig startbedrag zoals € 100, maar leg daarna uit waarom het antwoord daar niet van afhangt.

1. Een prijs stijgt met 25%. Met hoeveel procent moet hij dalen om terug te komen? Probeer daarna in woorden te zeggen hoe je dit voor elke stijging aanpakt.
2. Op 1 januari 2019 ging het verlaagde btw-tarief van 6% naar 9%. Met hoeveel procent stijgt de consumentenprijs van een product waarvan de prijs exclusief btw gelijk blijft? Herken je de denkfout van "3%"?
3. "Drie halen, twee betalen." Hoeveel procent korting is dat per stuk?
:::

{{ exercises: 09-030, 09-041, 09-042 }}
