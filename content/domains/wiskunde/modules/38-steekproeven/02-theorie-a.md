# Wie meet je, en over wie wil je iets zeggen?

In deze les bouw je het woordenboek op waarmee je steekproeven bespreekt, en
je leert dat het ontwerp van een steekproef belangrijker is dan haar omvang. Pas
daarna komt de rekenkunde. De volgorde is niet toevallig: een prachtig berekend
interval rond een onzinnig verzamelde steekproef blijft onzin.

## Populatie, steekproef, parameter, statistiek

De **populatie** is de verzameling eenheden waarover je een uitspraak wilt doen:
alle ingeschreven studenten, alle lampen uit één productiebatch, alle
stemgerechtigden. De **steekproef** bestaat uit de eenheden die je daadwerkelijk meet. De
omvang van de steekproef noem je $n$; de omvang van de populatie $N$.

Een kenmerk van de hele populatie, zoals het gemiddelde $\mu$, de
standaardafwijking $\sigma$ of de proportie $p$, heet een **parameter**. Een
parameter is een vast, meestal onbekend getal. Een kenmerk dat je uit de steekproef
berekent, zoals $\bar x$, $s$ of $\hat p$, heet een **statistiek**. Wanneer je een
statistiek gebruikt om een parameter te benaderen, spreek je van een **schatting**.
De regel waarmee je schat, bijvoorbeeld "neem het steekproefgemiddelde", heet een
**schatter**.

| | Populatie | Steekproef |
|---|---|---|
| Omvang | $N$ | $n$ |
| Gemiddelde | $\mu$ (parameter) | $\bar x$ (statistiek) |
| Spreiding | $\sigma$ | $s$ |
| Aandeel met een eigenschap | $p$ | $\hat p$ |

Let op het verschil in aard. De parameter $\mu$ is vast; het
steekproefgemiddelde $\bar x$ verandert met elke nieuwe steekproef. De hele
module draait om die ene gedachte: een statistiek is zelf een toevalsgrootheid,
een parameter niet.

{{ exercises: 38-001, 38-003 }}

:::example Reistijden aan de opleiding
Een opleiding heeft $N=1200$ ingeschreven studenten. Je wilt de gemiddelde
reistijd $\mu$ van die 1200 weten. Je trekt aselect $n=80$ studenten en
vindt gemiddeld $\bar x=42$ minuten, met $s=18$ minuten.
De populatie is dan de 1200 studenten, de steekproef de 80, de parameter
$\mu$ (onbekend) en de schatting $\bar x=42$. De waarde 18 is een schatting
van $\sigma$, geen parameter. Als een collega morgen een andere groep van 80 trekt, is
haar $\bar x$ waarschijnlijk 40 of 44, terwijl $\mu$ ongewijzigd blijft.
:::

## Een steekproef ontwerpen

Een **steekproefkader** is de lijst waaruit je trekt: een inschrijfregister,
een adressenbestand, een klantenlijst. Het kader is het eerste mogelijke
lek in je onderzoek. Staan er mensen op de lijst die er niet horen, of ontbreken er
mensen die er wel horen, dan beschrijft de steekproef een andere populatie dan je
bedoelt. Dit heet dekkingsfout.

### Enkelvoudige aselecte steekproef

Bij een **enkelvoudige aselecte steekproef** (EAS, in het Engels *simple random
sample*) krijgt elk mogelijk groepje van $n$ eenheden dezelfde kans om getrokken
te worden. Je kunt dat bereiken door alle eenheden te nummeren en met een
toevalsgenerator $n$ verschillende nummers te trekken. Dit is de standaard
waartegen andere ontwerpen worden vergeleken, en de formules in de
rest van deze module gaan er (tenzij anders vermeld) vanuit.

### Systematische steekproef

Bij een **systematische steekproef** kies je een willekeurig startpunt en
daarna elke $k$-de eenheid van de lijst, met stapgrootte $k=N/n$. Dat is handig
bij een lange lijst of bij een lopende band. Het risico is een verborgen patroon:
als elke $k$-de eenheid toevallig samenvalt met een periodiek verschijnsel, zoals
elke maandag of elke tiende kaart in een stapel met een vaste volgorde, dan is de
steekproef scheef zonder dat je het merkt.

:::example Elke vijftiende student
Uit een inschrijflijst van $N=1200$ studenten wil je $n=80$ studenten
bemonsteren. De stapgrootte is $k=1200/80=15$. Je trekt een startnummer
tussen 1 en 15 met een dobbelsteen of toevalsgenerator, zeg 7, en neemt
studenten 7, 22, 37, 52, ... Controleer eerst of de lijst
niet gesorteerd is op een manier die samenhangt met reistijd. Een
alfabetische volgorde is geen probleem; een verborgen periodiciteit van 15 wel.
:::

### Gestratificeerde steekproef

Bij een **gestratificeerde steekproef** deel je de populatie eerst in
groepen (**strata**), bijvoorbeeld opleidingsjaren, en trek je binnen elke groep aselect.
Dat heeft twee voordelen. Je weet zeker dat elke groep voorkomt, ook de kleine. En als de strata
onderling verschillen maar binnen een stratum redelijk gelijk zijn, wordt het
gemiddelde nauwkeuriger dan bij een enkelvoudige aselecte steekproef van dezelfde
omvang. Bij **proportionele allocatie** is het aandeel van een stratum in de
steekproef gelijk aan zijn aandeel in de populatie. Neem je sommige groepen
onevenredig mee, bijvoorbeeld om een kleine groep toch precies te kunnen
beschrijven, dan moet je voor een totaaluitspraak wegen: elk stratum telt naar
zijn werkelijke grootte mee.

:::example Proportionele allocatie
Een opleiding heeft 1000 studenten: 600 in jaar 1, 300 in jaar 2 en 100 in
jaar 3. Je bemonstert er $n=50$ gestratificeerd en proportioneel. Het aandeel van
jaar 1 is $600/1000=0{,}6$, dus $0{,}6\cdot50=30$ studenten uit jaar 1.
Jaar 2: $0{,}3\cdot50=15$. Jaar 3: $0{,}1\cdot50=5$. Samen 50.
:::

{{ exercises: 38-021, 38-022 }}

### Clustersteekproef

Bij een **clustersteekproef** selecteer je geen losse eenheden maar hele groepen
(clusters): klassen, wijken, ziekenhuizen. Binnen de gekozen clusters meet je
iedereen (of trek je opnieuw). Dit is organisatorisch veel goedkoper dan
verspreid over het hele land losse mensen interviewen. Het nadeel is dat
eenheden binnen één cluster vaak op elkaar lijken, zodat 120 leerlingen uit vier
klassen minder informatie bevatten dan 120 losse leerlingen. Bij gelijke omvang is een
clustersteekproef daardoor meestal minder nauwkeurig.

{{ exercise: 38-023 }}

### Gemakssteekproef en vrijwillige steekproef

Een **gemakssteekproef** (gelegenheidssteekproef) bestaat uit wie je
makkelijk kunt bereiken: de eerste twintig mensen in de kantine, je eigen
vrienden. Een **vrijwillige steekproef** ontstaat wanneer mensen zichzelf
aanmelden, zoals bij een link onder een nieuwsartikel. In beide gevallen weet je
niet met welke kans een eenheid in de steekproef komt. Dat betekent dat de klassieke
formules voor de standaardfout hun betekenis verliezen: ze beschrijven toeval dat
er niet is aangebracht. Zulke steekproeven kunnen bruikbaar zijn voor een eerste
verkenning, maar een foutmarge corrigeert hun systematische selectieverschillen niet.

{{ exercise: 38-002 }}

:::example Twee vormen van loting
Je trekt studenten aselect uit de inschrijflijst. Dat ondersteunt uitspraken
over die opleiding. Je verdeelt vervolgens de deelnemers door loting over
twee lesmethoden. Dat ondersteunt een causale vergelijking tussen methoden.
**Aselecte selectie** en **gerandomiseerde toewijzing** beantwoorden dus
verschillende vragen; het ene vervangt het andere niet.
:::

## Toevalsfout en vertekening

Toevalsfout laat schattingen tussen steekproeven wisselen. Een grotere
steekproef kan die variatie verkleinen. Vertekening verschuift de schattingen
systematisch. Meer antwoorden uit dezelfde vertekende selectie kunnen een zeer
nauwkeurige schatting van de verkeerde populatie opleveren. Dat is precies wat de
Literary Digest overkwam: 2,38 miljoen antwoorden, maar op een kader van rijkere
Amerikanen. Aan de omvang van de steekproef lag het dus niet, maar omvang kan het
gat tussen kader en populatie niet dichten.

Vertekening komt in een paar herkenbare vormen voor.

**Selectievertekening door het kader.** De lijst waaruit je trekt dekt de
populatie niet. Een telefonische peiling via vaste lijnen mist iedereen die alleen een
mobiele telefoon heeft.

**Non-respons.** Je trekt een goede steekproef, maar een deel van de mensen
reageert niet. Als wie reageert anders is dan wie zwijgt, is de uitkomst vertekend.
Daarom vermeld je altijd het responspercentage. Zelfs bij een uitstekend kader
kan een respons van 20% weinig zeggen.

**Zelfselectie.** Mensen kiezen zelf of ze meedoen. Wie een sterke mening heeft,
meldt zich eerder aan, zodat uitersten oververtegenwoordigd zijn.

**Overlevingsvertekening (survivorship bias).** Je meet alleen wat
overgebleven is. Een enquête over studietevredenheid onder alumni mist
degenen die zijn uitgevallen, en dat zijn juist de ontevredenen.

**Vraagformulering en meetfout.** De manier waarop je een vraag stelt, stuurt het
antwoord ("Bent u ook tegen deze onnodige belastingverhoging?"). Dat is meetfout, geen
steekproeffout, maar het bederft de uitkomst net zo goed.

:::example Hoe sterk kan non-respons zijn?
Je benadert 1000 studenten; 400 reageren, en daarvan zegt 60% tevreden te zijn.
Dat zijn 240 tevreden studenten. De overige 600 reageerden niet, en over hen weet je
niets. In het gunstigste geval zijn ze allemaal tevreden: $(240+600)/1000=84\%$. In het
ongunstigste geval niemand: $240/1000=24\%$. Het werkelijke
percentage tevreden studenten ligt dus ergens in $[24\%;84\%]$, een interval
van 60 procentpunten breed. Dit "worst-case"-interval is zeer breed, maar eerlijk:
hoe meer non-respons, hoe breder het bereik dat je niet kunt uitsluiten. Dat
bereik komt niet uit de formules voor toevalsfout, want het gaat over
vertekening.
:::

{{ exercises: 38-024, 38-025, 38-026, 38-027 }}

Noteer daarom altijd: doelgroep, selectieprocedure, benaderd aantal, respons,
uitval en meetmethode. Die informatie bepaalt of een interval iets zinvols
over de beoogde populatie zegt.

:::warning Een grote steekproef is geen goede steekproef
"We hebben 20.000 antwoorden" is op zichzelf geen kwaliteitsmerk. Meer data uit
dezelfde scheve selectie geven alleen een nauwkeuriger antwoord op de verkeerde
vraag. Beoordeel een steekproef eerst op hoe ze tot stand kwam en pas daarna op haar omvang.
:::
