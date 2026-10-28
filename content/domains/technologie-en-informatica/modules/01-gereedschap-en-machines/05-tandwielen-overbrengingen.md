## Draaiing doorgeven

Een eenvoudige machine zet kracht en weg om. Maar wat als de beweging niet recht is, maar draait? Een waterrad draait langzaam en met grote kracht; een maalsteen moet sneller draaien. Een fietser trapt rustig rond, terwijl het achterwiel veel sneller gaat. Voor die omzetting heb je een mechanisme nodig dat draaiing doorgeeft en tegelijk toerental en draaikracht verandert. De klassieke oplossing is het tandwiel.

:::question
Een waterrad draait één keer per tien seconden, maar de maalsteen moet in diezelfde tijd ruwweg dertig keer ronddraaien. Hoe zou je dat met tandwielen regelen? En wat denk je dat de maalsteen bij de overgang naar snellere draaiing aan kracht inlevert?
:::

## Twee tandwielen

Twee tandwielen die in elkaar grijpen, hebben bij elke tand die voorbijkomt dezelfde afstand op hun omtrek afgelegd. Een klein wiel met 20 tanden dat een groot wiel met 60 tanden aandrijft, moet dus drie keer rondgaan voordat het grote wiel één omwenteling heeft gemaakt. Het toerental van het grote wiel is dus een derde van dat van het kleine wiel, en ze draaien in tegengestelde richting.

![Twee tandwielen: 20 tanden drijft 60 tanden aan, overbrengingsverhouding 3](/images/technologie-en-informatica/m01-tandwielen.svg "Twee tandwielen met overbrengingsverhouding 3 — eigen tekening")

De **overbrengingsverhouding** $i$ geeft die verhouding aan. Met $z$ het aantal tanden en $n$ het toerental (omwentelingen per minuut) geldt:

$$
i = \frac{z_{\text{uit}}}{z_{\text{in}}} = \frac{n_{\text{in}}}{n_{\text{uit}}}
$$

Bij een aandrijving van 20 naar 60 tanden is $i = 3$ en wordt een invoertoerental van 90 omw/min een uitvoertoerental van 30 omw/min. Een overbrenging met $i > 1$ is een **vertraging**; met $i < 1$ is het een **versnelling**.

Wat gebeurt er met de kracht? Zonder wrijving gaat het vermogen niet verloren: $P = M \cdot \omega$ is aan de ingang gelijk aan dat aan de uitgang. Het draaimoment $M$ (koppel; de draaiende werking van een kracht, in newtonmeter) wordt daarom net zoveel keer groter als het toerental kleiner wordt:

$$
M_{\text{uit}} = i \cdot M_{\text{in}}
$$

Het is dezelfde ruil als bij de hefboom: wat je in koppel wint, verlies je in toerental. Een tandwielpaar is dus een hefboom die rondgaat.

:::example Een vertragende overbrenging
Een tandwiel met 20 tanden drijft een tandwiel met 60 tanden aan. Het invoertoerental is 90 omw/min; het invoerkoppel is 4 N m. Zonder wrijving:

1. *Overbrenging:* $i = 60 / 20 = 3$.
2. *Toerental:* $n_{\text{uit}} = n_{\text{in}} / i = 90 / 3 = 30\ \text{omw/min}$.
3. *Koppel:* $M_{\text{uit}} = 3 \cdot 4 = 12\ \text{N m}$.
4. *Controle:* het product van koppel en toerental is gelijk: $4 \cdot 90 = 360$ en $12 \cdot 30 = 360$ (in dezelfde eenheden). Het vermogen is behouden, zoals de gulden regel eist.
:::

{{ exercises: 01-022, 01-023 }}

## Tandwieltreinen

Heb je een grote verhouding nodig, dan is één paar tandwielen vaak onpraktisch: een wiel met 600 tanden naast een van 10 is groot en zwaar. In plaats daarvan schakel je meerdere paren achter elkaar. Dat heet een **tandwieltrein**. Omdat het uitgaande wiel van het eerste paar op dezelfde as zit als het ingaande wiel van het tweede, vermenigvuldigen de verhoudingen:

$$
i_{\text{totaal}} = i_1 \cdot i_2 \cdot \ldots
$$

Een trein met $i_1 = 4$ (10 naar 40 tanden) en $i_2 = 3$ (15 naar 45 tanden) heeft een totale verhouding $4 \cdot 3 = 12$. Met zulke treinen bouw je een uurwerk, waarin de wijzers met een vaste verhouding draaien (de minutenwijzer draait 12 keer zo snel als de urenwijzer), en een versnellingsbak, waarin je kiest welke paren je inschakelt.

Een mechanisch uurwerk met een gewicht of veer als energiebron is een mooi voorbeeld van een **keten**: de energiebron levert beweging, een tandwieltrein geeft die door, een regelaar (slinger of onrust met een echappement) laat de trein in kleine stappen van gelijke duur lopen, en de wijzers tonen het resultaat. Het echappement is daarbij het slimme onderdeel. Het houdt de tandwieltrein tegen en laat hem steeds per slingerslag een tand opschuiven. Zonder dat zou het gewicht in één keer vallen. De terugkoppeling zit in de slinger: zijn slingertijd bepaalt het tempo.

## De fiets

Een fiets is een mooi voorbeeld van een overbrenging waarvan je de gevolgen dagelijks voelt. De trapas heeft voor een tandwiel met bijvoorbeeld 48 tanden, het achterwiel een tandwiel met 16 tanden, verbonden met een ketting. Dat is een versnelling: $i = 16 / 48 = 1/3$. Bij één trapomwenteling draait het achterwiel drie keer.

Bij een achterwiel met een omtrek van 2,1 m legt de fietser per trapomwenteling dus $3 \cdot 2{,}1 = 6{,}3\ \text{m}$ af. Trapt hij 60 keer per minuut, dan is de snelheid $60 \cdot 6{,}3 = 378\ \text{m/min}$, ruim 22 km/h. Wil hij bergop rijden, dan schakelt hij naar een kleiner voorblad of een groter achtertandwiel (bijvoorbeeld 30 tanden voor en 32 achter, $i \approx 1{,}07$): het achterwiel draait dan trager per trap, maar met meer koppel, en dus met meer kracht op de weg. De fietser ruilt snelheid voor kracht, precies zoals de hefboom.

Waarom dan niet altijd één versnelling? Omdat een mensenbeen het meeste vermogen levert bij een bepaalde trapfrequentie, ruwweg 60 tot 90 omwentelingen per minuut. Bij een versnellingsnaaf of derailleur kies je de overbrenging waarbij je been in zijn gunstige gebied blijft, ongeacht of de weg vlak is of stijgt. Dat is een ontwerpeis die uit de gebruiker komt, niet uit de natuurkunde van de machine.

:::example De snelheid van een fietser
Een fiets heeft een voorblad van 48 tanden en een achtertandwiel van 16 tanden. De omtrek van het achterwiel is 2,1 m. De fietser trapt 60 omw/min. Hoe hard rijdt hij in km/h?

1. *Overbrenging:* $i = 16 / 48 = 1/3$, dus het achterwiel draait $n = 60 / (1/3) = 180\ \text{omw/min}$.
2. *Afstand per minuut:* $180 \cdot 2{,}1\ \text{m} = 378\ \text{m/min}$.
3. *Omrekenen:* $378\ \text{m/min} \cdot 60 = 22\,680\ \text{m/h} = 22{,}68\ \text{km/h}$.
4. *Controle:* ongeveer 23 km/h is een gebruikelijke snelheid bij rustig doortrappen op vlak terrein. Dat het getal in het juiste gebied ligt, bevestigt de uitwerking.
:::

{{ exercises: 01-024, 01-025, 01-026 }}

## Tandwielen in het Antikythera-mechanisme

Terug naar het opdrachtobject van de eerste les. De ontwerper van het Antikythera-mechanisme moest bekende astronomische verhoudingen als tandenaantallen weergeven. Eén zo'n verhouding is de metonische cyclus: 19 zonnejaren zijn ongeveer 235 maanmaanden. Per jaar zijn dat dus

$$
\frac{235}{19} \approx 12{,}368 \text{ maanmaanden per jaar}
$$

Een verhouding als 235 : 19 vergt een keten van meerdere tandwielparen. Onderzoek aan de wijzerplaten laat zien dat de metonische cyclus op de achterkant als een spiraal met vijf windingen is weergegeven, met 47 verdelingen per winding. Dat is geen toeval: $5 \cdot 47 = 235$. De schaal telt dus precies de maanmaanden van één cyclus, terwijl de wijzer in 19 jaar rondgaat. De ontwerper moest tandenaantallen kiezen die samen zo'n verhouding opleverden, en die bovendien met de hand te zagen waren in een voorwerp van enkele centimeters. Dat is een ontwerpopgave waarin getaltheorie, productiemogelijkheden en gebruik samenkomen.

Het opmerkelijke is dat het mechanisme geen wiskunde nodig heeft om te rekenen: de uitkomst zit in de tanden. Het apparaat berekent, zonder dat iemand een som uitvoert. Het is daarmee een voorloper van wat later rekenmachines en computers doen, en een reden waarom dit domein mechanica en informatica samenneemt.

{{ exercises: 01-027 }}

## Wat een overbrenging je vertelt

Een overbrengingsverhouding is het kleinste voorbeeld van een **model**: een getal dat zegt wat er aan de uitgang gebeurt, als je weet wat er aan de ingang gebeurt. Het model klopt zolang je de wrijving buiten beschouwing laat; in de praktijk heeft elk tandwielpaar een rendement van enkele procenten verlies. Een tandwieltrein met veel paren kan daardoor flink verliezen, omdat de rendementen van de paren worden vermenigvuldigd: vier paren met elk 97% geven $0{,}97^4 \approx 0{,}885$, bijna 89%. Een ontwerper moet dus afwegen: meer tandwielen geven meer flexibiliteit, maar kosten rendement, ruimte en geld.
