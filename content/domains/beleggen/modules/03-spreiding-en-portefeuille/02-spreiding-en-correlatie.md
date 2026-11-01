## Twee soorten risico

Stel dat je al je beleggingsgeld in aandelen van één bedrijf steekt. Dan kan er van alles misgaan wat alleen dat bedrijf treft: een mislukt product, een fraudezaak, een nieuwe concurrent. Dat noemen we **specifiek risico** (ook wel bedrijfsspecifiek risico). Tegelijk kan er iets gebeuren wat vrijwel alle bedrijven treft: een recessie, een renteschok, een financiële crisis. Dat is **marktrisico** (ook wel systematisch risico).

Het verschil is belangrijk omdat ze zich anders gedragen als je spreidt. Als je in tien bedrijven belegt, zal een slechte uitslag bij het ene bedrijf vaak gecompenseerd worden door een gewone of goede uitslag bij een ander. Het specifieke risico middelt dus uit. Een recessie raakt daarentegen alle tien. Marktrisico blijft, hoe breed je ook spreidt binnen één markt.

Dat verklaart het bekende beeld van een curve die snel daalt en dan afvlakt: de eerste paar bedrijven die je toevoegt halen het meeste specifieke risico weg, de volgende steeds minder, en onderaan blijft het marktrisico over.

![Schematische curve: het risico van een aandelenportefeuille daalt snel bij de eerste bedrijven die je toevoegt en vlakt af naar het marktrisico](/images/beleggen/m03-spreiding.svg "Schematisch (geen meetgegevens): specifiek risico verdwijnt door spreiding, marktrisico niet")

De figuur is bewust schematisch. Het exacte punt waar de curve afvlakt hangt af van de periode, de markt en de manier van meten; in studies over aandelen wordt vaak gevonden dat enkele tientallen zorgvuldig gekozen bedrijven al het grootste deel van het specifieke risico wegnemen. Voor de redenering is alleen de vorm van belang.

Een beloning krijg je voor specifiek risico niet. Beleggers kunnen het namelijk goedkoop wegspreiden, en daarom is er geen reden waarom de markt daar een hogere verwachte opbrengst voor zou betalen. De risicopremie uit module 1 hoort dus bij het marktrisico. Daarom noemt men spreiding wel "de enige gratis lunch in de financiële wereld": een deel van het risico verdwijnt zonder dat het verwachte rendement daalt. Het is een uitspraak over verwachtingen en gemiddelden, geen garantie dat je in een bepaald jaar niets verliest.

{{ exercise: 03-001 }}

## Correlatie: hoe gelijk bewegen twee beleggingen?

Het uitmiddelen hangt af van hoe gelijk beleggingen bewegen. Dat meten we met de **correlatiecoëfficiënt** $\rho$ (de Griekse letter rho). Die ligt tussen $-1$ en $1$:

- $\rho = 1$: de twee bewegen volmaakt gelijk op; spreiden over beide haalt geen risico weg;
- $\rho = 0$: de bewegingen hebben niets met elkaar te maken;
- $\rho = -1$: de twee bewegen volmaakt tegengesteld; een daling van de een wordt precies opgevangen door een stijging van de ander.

In de praktijk vind je zelden de uitersten. Aandelen van bedrijven in dezelfde markt hebben meestal een positieve, vaak hoge correlatie. Aandelen en staatsobligaties hebben historisch gezien een lagere correlatie, al verandert die in de tijd en kan ze in tijden van snel stijgende rente ook flink positief zijn. Wat voor de ene periode geldt, hoeft dus niet voor de volgende te gelden.

Voor een portefeuille van twee beleggingen met gewichten $w_1$ en $w_2$ (samen 1), standaarddeviaties $\sigma_1$ en $\sigma_2$ en correlatie $\rho$ geldt voor de standaarddeviatie van de portefeuille:

:::formula Risico van een portefeuille van twee beleggingen
$$
\sigma_p^2 = w_1^2\sigma_1^2 + w_2^2\sigma_2^2 + 2\,w_1 w_2\,\rho\,\sigma_1\sigma_2
$$
Het verwachte rendement is simpelweg het gewogen gemiddelde: $\mu_p = w_1\mu_1 + w_2\mu_2$.
:::

Let op het verschil tussen de twee. Het verwachte rendement is een gewoon gewogen gemiddelde, dus spreiden verandert het niet. Het risico is dat niet, want de laatste term bevat de correlatie. Hoe kleiner $\rho$, hoe kleiner $\sigma_p$.

:::example Twee beleggingen met dezelfde eigenschappen
Beide beleggingen hebben een verwacht rendement van 6% en een standaarddeviatie van 20% per jaar. Je verdeelt half-half: $w_1 = w_2 = 0{,}5$. Het verwachte rendement van de portefeuille is $0{,}5 \cdot 6\% + 0{,}5 \cdot 6\% = 6\%$.

Voor het risico vul je de formule in met $\sigma_1 = \sigma_2 = 0{,}20$.

*Geval $\rho = 1$:* $\sigma_p^2 = 0{,}25\cdot 0{,}04 + 0{,}25\cdot 0{,}04 + 2\cdot 0{,}25\cdot 1\cdot 0{,}04 = 0{,}04$, dus $\sigma_p = 20\%$. Geen winst.

*Geval $\rho = 0$:* de laatste term valt weg: $\sigma_p^2 = 0{,}01 + 0{,}01 = 0{,}02$, dus $\sigma_p = \sqrt{0{,}02} \approx 14{,}1\%$.

*Geval $\rho = 0{,}5$:* $\sigma_p^2 = 0{,}01 + 0{,}01 + 2\cdot 0{,}25\cdot 0{,}5\cdot 0{,}04 = 0{,}03$, dus $\sigma_p \approx 17{,}3\%$.

*Geval $\rho = -1$:* $\sigma_p^2 = 0{,}01 + 0{,}01 - 0{,}02 = 0$. Het risico verdwijnt volledig; dat is een theoretisch uiterste dat in de praktijk niet voorkomt.

Het verwachte rendement is in alle gevallen 6%; alleen het risico verschilt. Dat is het antwoord op de denkvraag uit les 1.
:::

{{ exercises: 03-002, 03-003, 03-004 }}

## Wat Markowitz erbij zag

Als je meer dan twee beleggingen hebt, wordt de formule langer, maar de gedachte blijft dezelfde. Markowitz liet zien dat je, voor een gegeven verwacht rendement, de combinatie met het laagste risico kunt zoeken. Alle zulke combinaties samen vormen de **efficiënte rand**: voor elk risiconiveau het hoogste verwachte rendement dat met de beschikbare beleggingen haalbaar is. Een portefeuille onder die rand is niet efficiënt, omdat je hetzelfde rendement met minder risico kunt krijgen.

Dit model heeft beperkingen die je moet kennen. Het rekent met verwachte rendementen, standaarddeviaties en correlaties, en die kun je niet waarnemen: je schat ze uit het verleden. Kleine veranderingen in die schattingen geven soms een sterk andere "optimale" portefeuille. Ook is de standaarddeviatie een beperkte maat voor risico, omdat die schommelingen omhoog en omlaag even zwaar telt en de kans op uitzonderlijke verliezen onderschat kan worden. Het model is dus een manier om te leren denken over portefeuilles, geen rekenmachine die de beste portefeuille aanwijst.

Een tweede les uit het model: de bijdrage van een belegging aan het risico van de portefeuille hangt niet alleen af van hoe riskant die belegging zelf is, maar ook van hoe die zich verhoudt tot de rest. Een belegging die op zichzelf schommelt maar weinig met de rest meebeweegt, kan het risico van de totale portefeuille verlagen.

{{ exercise: 03-005 }}

## Spreiding in de praktijk

Spreiding kan op meerdere niveaus: over bedrijven, over sectoren, over landen en regio's, en over beleggingscategorieën zoals aandelen en obligaties (daarover meer in les 3). Een breed gespreid indexfonds (zie module 2) doet het eerste deel al voor je: het bezit honderden of duizenden bedrijven tegelijk.

Een veelgemaakte denkfout is schijnspreiding. Wie vijf fondsen koopt die allemaal grotendeels dezelfde grote bedrijven bezitten, is minder gespreid dan het lijkt. Kijk dus niet naar het aantal fondsen of producten, maar naar wat erin zit. En in een echte crisis kan de correlatie tussen veel soorten beleggingen tegelijk toenemen. Spreiding verkleint risico, maar elimineert het niet.

{{ exercise: 03-006 }}
