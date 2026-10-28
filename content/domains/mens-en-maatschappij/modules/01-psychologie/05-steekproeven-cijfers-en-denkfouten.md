## Voor wie geldt een uitkomst?

Een onderzoeker onderzoekt zelden iedereen. Ze trekt een steekproef uit een grotere groep, de populatie, en wil iets zeggen over die populatie. Als je wilt weten hoe Nederlandse tieners over sociale media denken, kun je niet alle Nederlandse tieners vragen. Je vraagt er een paar duizend en generaliseert. Of dat mag, hangt af van hoe de steekproef is samengesteld.

Bij een aselecte steekproef heeft elk lid van de populatie een bekende kans om te worden gekozen, bijvoorbeeld door loting uit een bevolkingsregister. Dan mag je verwachten dat de steekproef gemiddeld een goed beeld geeft, met een berekenbare onzekerheid. Veel psychologisch onderzoek werkt echter met een gemakssteekproef: studenten van de eigen universiteit, vrijwilligers die op een oproep reageren, deelnemers van een online panel. Dat is praktisch, maar de deelnemers lijken mogelijk niet op de populatie waar de onderzoeker iets over wil zeggen. Dan spreek je van selectievertekening.

In 2010 maakten de onderzoekers Joseph Henrich, Steven Heine en Ara Norenzayan dit probleem scherp in een artikel in *Behavioral and Brain Sciences*. Ze toonden aan dat een groot deel van het psychologisch onderzoek wordt gedaan bij deelnemers uit westerse, hoogopgeleide, geïndustrialiseerde, rijke en democratische samenlevingen (afgekort tot WEIRD), terwijl die groep maar een klein deel van de wereldbevolking vormt. Ze betoogden dat bij sommige onderzoeksonderwerpen die deelnemers geen goed beeld geven van mensen in het algemeen. Dat betekent niet dat alle uitkomsten niet gelden, maar wel dat je bij een uitspraak als “mensen doen X” moet vragen: welke mensen?

:::question
Een studie onder honderd psychologiestudenten laat zien dat deelnemers die eerst een moeilijke taak doen, daarna sneller opgeven op een tweede taak. De onderzoeker schrijft: “Mensen geven sneller op na mentale inspanning.” Voor wie geldt deze uitspraak werkelijk, en wat zou je willen weten om haar te kunnen uitbreiden?
:::

Het onderscheid tussen twee soorten toeval is hierbij belangrijk. Willekeurige steekproeftrekking (random sampling) gaat over wie in het onderzoek komt, en ondersteunt generalisatie naar de populatie. Willekeurige toewijzing (random assignment) gaat over welke groep een deelnemer binnen het onderzoek krijgt, en ondersteunt causale conclusies. Een studie kan het ene hebben zonder het andere. Een experiment met vrijwilligers en loting heeft sterke causale conclusies maar beperkte generalisatie. Een representatieve enquête zonder toewijzing generaliseert goed maar zegt weinig over oorzaak.

{{ exercises: 01-022, 01-023 }}

## Hoe zeker is een percentage?

Als je uit een aselecte steekproef een percentage berekent, is het getal nooit precies het percentage in de populatie. Een andere steekproef zou net iets anders opleveren. Hoeveel het schommelt, hangt af van het aantal deelnemers $n$ en het percentage zelf. Voor een aandeel $p$ is een gebruikelijke benadering van de 95%-marge:

$$
1{,}96 \times \sqrt{\frac{p\,(1-p)}{n}}
$$

Dat betekent: als je de procedure heel vaak herhaalt, ligt het populatieaandeel in ongeveer 95% van de gevallen binnen dat getal van de steekproefuitkomst. Het getal gaat over de onzekerheid door toeval bij een goede steekproef. Het zegt niets over andere fouten, zoals een scheve steekproef of slecht geformuleerde vragen.

:::example Een betrouwbaarheidsmarge berekenen
In een enquête onder 1200 willekeurig gekozen mensen zegt 540 dat ze vorig jaar zijn gaan sporten om stress te verminderen (fictief).

Stap 1: bereken het aandeel. $p = 540 / 1200 = 0{,}45$, dus 45%.

Stap 2: bereken de standaardfout. $\sqrt{0{,}45 \times 0{,}55 / 1200} = \sqrt{0{,}00020625} \approx 0{,}01436$.

Stap 3: vermenigvuldig met 1,96. $1{,}96 \times 0{,}01436 \approx 0{,}0281$, dus ongeveer 2,8 procentpunt.

Stap 4: formuleer. “Ongeveer 45%, met een marge van circa 2,8 procentpunt.” De waarde in de populatie ligt waarschijnlijk tussen ongeveer 42% en 48%, mits de steekproef goed is getrokken.

Stap 5: waarschuwing. Een grotere steekproef verkleint de marge, maar niet de vertekening. Een enquête onder 100.000 mensen die zich zelf hebben aangemeld, is niet beter dan een kleine voor het beeld van de hele bevolking.
:::

{{ exercise: 01-024 }}

## Gemiddelde, spreiding en effectgrootte

Een gemiddelde vat een groep samen in één getal, maar zegt niet hoe de scores verspreid liggen. Twee groepen kunnen hetzelfde gemiddelde hebben terwijl in de ene iedereen dichtbij het gemiddelde zit en in de andere de scores sterk uiteenlopen. De standaarddeviatie, $s$, beschrijft de typische afstand tot het gemiddelde. Je berekent haar in vier stappen: bereken het gemiddelde $\bar{x}$, bereken per waarde het verschil met het gemiddelde, kwadrateer die verschillen en tel ze op, deel door $n-1$ en neem de wortel.

$$
s = \sqrt{\frac{\sum (x_i - \bar{x})^2}{n-1}}
$$

:::example Gemiddelde en standaarddeviatie uitrekenen
Vijf reactietijden (fictief, in tientallen milliseconden): 5, 7, 7, 9, 12.

Stap 1: gemiddelde. $(5+7+7+9+12)/5 = 40/5 = 8$.

Stap 2: afwijkingen. $-3,\ -1,\ -1,\ 1,\ 4$.

Stap 3: kwadrateren en optellen. $9+1+1+1+16 = 28$.

Stap 4: delen door $n-1 = 4$. $28/4 = 7$. Dit is de variantie.

Stap 5: wortel. $s = \sqrt{7} \approx 2{,}65$.

Interpretatie: een typische reactietijd ligt ongeveer 2,65 eenheden van het gemiddelde. Zonder die spreiding weet je niet of een verschil tussen twee gemiddelden groot of klein is.
:::

Als je twee groepen vergelijkt, wil je weten hoe groot het verschil is in verhouding tot de spreiding. Dat is de effectgrootte. Een veelgebruikte maat is Cohens $d$: het verschil tussen de gemiddelden gedeeld door de gemeenschappelijke standaarddeviatie. Als twee groepen gemiddeld 78 en 72 scoren en de standaarddeviatie in beide groepen 12 is, dan is $d = (78 - 72)/12 = 0{,}5$: het verschil is een halve standaarddeviatie. Als vuistregel noemt men $d \approx 0{,}2$ klein, $0{,}5$ middelgroot en $0{,}8$ groot, maar wat belangrijk is, hangt af van het onderwerp. Een klein effect op iets dat miljoenen mensen betreft, kan veel betekenen.

Een andere vaak gebruikte uitkomst is de $p$-waarde. De $p$-waarde is de kans op een verschil minstens zo groot als het gevonden, als er in werkelijkheid geen verschil zou zijn en er alleen toeval speelde. Een kleine $p$-waarde, meestal onder 0,05 (“statistisch significant”), betekent dat de gegevens moeilijk met alleen toeval te verklaren zijn. Zij zegt niet dat de hypothese waar is, niet hoe groot het effect is en niet dat het effect belangrijk is. Met een heel grote steekproef wordt zelfs een triviaal verschil significant, met een kleine steekproef kan een echt, groot effect onopgemerkt blijven.

{{ exercises: 01-025, 01-026 }}

## Denkfouten van onderzoekers en deelnemers

Cijfers beschermen niet vanzelf tegen vertekening, want het zijn mensen die ze verzamelen en lezen. Mensen gebruiken vuistregels om snel te oordelen, en die werken meestal goed maar leiden soms systematisch tot fouten. Onderzoek naar zulke denkfouten, vooral door Amos Tversky en Daniel Kahneman, kreeg wereldwijd aandacht. In hun artikel in *Science* uit 1974 beschreven ze onder meer het ankereffect: een willekeurig getal dat je kort tevoren hebt gezien, stuurt je schatting. In één van hun proeven draaiden deelnemers aan een rad dat op 10 of op 65 stopte, en schatten ze daarna het percentage Afrikaanse landen in de Verenigde Naties. De gemiddelde schatting lag in de “10”-groep rond 25% en in de “65”-groep rond 45%, ondanks dat het rad overduidelijk niets met de vraag te maken had.

Een tweede veelvoorkomende fout is bevestigingsvertekening: je zoekt en onthoudt vooral wat bij je verwachting past. Wie gelooft dat het vaak regent als hij zijn paraplu vergeet, onthoudt de keren dat het gebeurde. Een onderzoeker die een effect verwacht, kan ongemerkt ambiguë metingen in haar voordeel interpreteren. Daarom worden beoordelaars waar mogelijk blind gehouden voor de groep waarin iemand zat.

Een derde is de terugkijkvertekening (hindsight bias): achteraf lijkt de uitkomst voorspelbaarder dan ze was. “Ik wist het wel”, zeggen mensen na een uitslag. In onderzoek zie je het terug wanneer deelnemers achteraf moeten zeggen wat ze eerder dachten.

Een vierde fout betreft kansen. Mensen negeren gemakkelijk de basisfrequentie, hoe vaak iets in het algemeen voorkomt. Het volgende voorbeeld laat zien hoe sterk dat uitpakt.

:::example Basisfrequentie en een positieve test
Een screeningstest voor een aandoening die bij 1% van de mensen voorkomt, herkent 90% van de zieken (gevoeligheid) en geeft bij 10% van de gezonde mensen ten onrechte een positieve uitslag (fictieve cijfers). Je krijgt een positieve uitslag. Hoe groot is de kans dat je de aandoening hebt?

Stap 1: neem 1000 mensen. 1% is ziek: 10 mensen. De overige 990 zijn gezond.

Stap 2: hoeveel zieken testen positief? 90% van 10 is 9.

Stap 3: hoeveel gezonden testen positief? 10% van 990 is 99.

Stap 4: alle positieve uitslagen: $9 + 99 = 108$.

Stap 5: de kans dat een positieve uitslag een zieke betreft: $9/108 \approx 0{,}083$, ongeveer 8%.

Het antwoord verbaast veel mensen, omdat ze letten op de 90% en de 1% vergeten. Door met aantallen te rekenen in plaats van met percentages wordt het inzichtelijk.
:::

Tot slot kunnen ook deelnemers de uitkomst vertekenen. Deelnemers raden soms wat de onderzoeker wil zien en gedragen zich daarnaar, een verschijnsel dat vraagkenmerken (demand characteristics) heet. Ze geven sociaal wenselijke antwoorden. En de onderzoeker kan zonder het te willen signalen geven over wat ze verwacht. Een ontwerp met blindering, duidelijke scoreregels en een controlegroep beperkt deze invloeden, maar maakt ze niet onmogelijk.

{{ exercises: 01-027, 01-028, 01-029 }}
