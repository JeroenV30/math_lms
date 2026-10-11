# Van acht schapen naar een onderzoeksconclusie

Je begon deze cursus met het tellen van schapen: acht dieren, acht streepjes, één getal. Honderden pagina's later is de vraag nog steeds die van de eerste les, maar veel scherper geworden: wat heb je precies geteld of gemeten, hoe vat je dat samen, en welke conclusie mag je eraan verbinden? In dit slothoofdstuk beantwoord je die vraag niet voor een verzonnen voorbeeld, maar voor echte veldmetingen: de lichaamsmaten van pinguïns uit de Palmer Archipelago in Antarctica.

:::question Denkvraag
Stel dat je alleen weet dat een onderzoeker bij 26 Adélie-mannen een gemiddeld gewicht van 3995 g vond en bij 26 vrouwen 3335 g. Welke vragen zou je willen stellen voordat je dit verschil een "bevinding" noemt? Schrijf er minstens drie op. Kom na dit hoofdstuk terug op je lijstje: ik verwacht dat je de meeste vragen dan niet alleen kunt stellen, maar ook kunt beantwoorden.
:::

## Waarom bestaat dit hoofdstuk?

Elke eerdere module leerde je een gereedschap. In module 24 leerde je gegevens samenvatten met gemiddelde, mediaan, kwartielen en standaardafwijking. Module 37 gaf je kansverdelingen, module 38 liet zien waarom een steekproef een eigen onzekerheid heeft en module 39 maakte daar een toetsprocedure van. In module 40 kwam de regressielijn, in module 41 de stelling van Bayes en de vraag hoe een nieuw gegeven een eerdere overtuiging bijstelt.

Een gereedschapskist is nog geen vakmanschap. In een echt onderzoek kom je de gereedschappen niet in nette hoofdstukken tegen, maar door elkaar en in een volgorde die je zelf moet bepalen. Je moet beslissen welke vraag je stelt, welke gegevens je mag gebruiken, hoe je ontbrekende waarden behandelt, welke grafiek eerst komt en welke toets bij de vraag past. Elke beslissing kan de uitkomst beïnvloeden, en elke beslissing moet daarom navolgbaar zijn voor iemand anders. Dat laatste is wat onderzoek van een mening onderscheidt.

Dit hoofdstuk doorloopt daarom één onderzoekscyclus, van begin tot eind:

1. **Vraag en hypothese.** Wat wil je weten, over welke dieren, en wat zou je verbazen?
2. **Herkomst en codeboek.** Hoe zijn de gegevens ontstaan en wat betekent elke kolom?
3. **Datakwaliteit.** Welke waarden ontbreken, welke zijn verdacht, en wat besluit je daarmee?
4. **Verkennen.** Wat zie je in samenvattingen, boxplots en spreidingsdiagrammen, vóórdat je iets toetst?
5. **Vergelijken.** Hoe groot is het verschil tussen twee groepen, hoe onzeker is het, en hoe groot is het in verhouding tot de spreiding?
6. **Samenhang.** Wat zegt een regressielijn, wat zeggen de residuen, en wanneer keert een verband om als je naar groepen kijkt (Simpson)?
7. **Meerdere vragen tegelijk.** Wat gebeurt er met je p-waarden als je twaalf toetsen uitvoert?
8. **Rapporteren.** Hoe schrijf je op wat je deed, zodat een ander het kan nalopen?

## De gegevens

:::history Metingen uit Antarctica
Tussen 2007 en 2009 verzamelde de ecologe Kristen Gorman met collega's op eilanden bij Palmer Station, Antarctica, lichaamsmaten van drie soorten pinguïns: Adélie-, baard- (Chinstrap) en ezelspinguïns (Gentoo). Station Palmer maakt deel uit van het Long Term Ecological Research Network, een Amerikaans netwerk dat ecosystemen decennialang volgt. De metingen zijn in 2014 beschreven in een artikel in *PLOS ONE* en in 2020 door Allison Horst, Alison Hill en Kristen Gorman als didactische dataset beschikbaar gesteld in het R-pakket *palmerpenguins*, onder een CC0-licentie.
:::

Je gebruikt in dit hoofdstuk de 120 waarnemingen uit het jaar 2009, met Nederlandse kolomnamen en in de oorspronkelijke volgorde. [Open of download de lokale CSV](/datasets/m42-pinguins-palmer-2009.csv). De dataset blijft lokaal beschikbaar; je hebt geen account of internetverbinding nodig. De bron en de CC0-licentie staan op de [officiële Palmer Penguins-pagina](https://allisonhorst.github.io/palmerpenguins/).

## Twee vragen en hun hypothesen

Een onderzoeksvraag is meer dan een onderwerp. "Pinguïns" is een onderwerp; "verschillen mannelijke en vrouwelijke Adélie-pinguïns in lichaamsgewicht?" is een vraag, omdat je kunt zeggen welke gegevens je antwoord geven en wat een bevestigend of afwijzend antwoord zou betekenen. We gebruiken twee vragen.

**Primaire vraag (groepsvergelijking).** Hoeveel verschilt het gemiddelde lichaamsgewicht van de gemeten Adélie-mannen van dat van de gemeten Adélie-vrouwen in 2009? Hier hoort een toetsbare hypothese bij. De nulhypothese zegt dat er in het onderliggende model geen verschil is, de alternatieve hypothese dat er wel een verschil is, zonder richting op te geven:

$$
H_0:\ \mu_\text{man}-\mu_\text{vrouw}=0 \qquad\text{tegen}\qquad H_1:\ \mu_\text{man}-\mu_\text{vrouw}\neq 0.
$$

**Verkennende vraag (samenhang).** Hangt binnen Adélie de vleugellengte (flipperlengte) samen met het lichaamsgewicht, en blijft dat verband bestaan als je er geslacht en soort bij betrekt? Dit is een verkennende vraag: je beschrijft een patroon en bent voorzichtig met oorzakelijke taal.

Het verschil tussen de twee is belangrijk. De primaire vraag en haar procedure leg je vast vóórdat je de uitkomst bekijkt. Verkennende vragen mogen je tijdens het kijken te binnen schieten, maar je rapporteert ze dan als verkennend en niet als bevestigend. In les 4 zie je waarom: wie veel dingen probeert en alleen het opvallendste meldt, produceert vanzelf indrukwekkend ogende toevalstreffers.

:::definition Beschrijvend en inferentieel
Een **beschrijvende** vraag gaat over de dieren in je bestand: "het gemiddelde gewicht van deze 26 mannen is 3995 g". Een **inferentiële** vraag gaat over meer dan het bestand: "wat zegt dit over Adélie-mannen van deze kolonies?" Voor het eerste volstaat rekenen; voor het tweede heb je een model nodig (module 37–39) en een argument dat de dieren in je bestand zich daarvoor lenen (module 38).
:::

Let op: de gegevens zijn **observationeel**. Niemand heeft pinguïns willekeurig aan een geslacht toegewezen, en de dieren vormen niet aantoonbaar een aselecte steekproef uit alle pinguïns. Een kleine p-waarde heft die beperkingen niet op. Het hele hoofdstuk draait om het naast elkaar houden van twee dingen: wat de cijfers zeggen, en wat het ontwerp van het onderzoek ervan toelaat.

{{ goals }}

{{ glossary }}
