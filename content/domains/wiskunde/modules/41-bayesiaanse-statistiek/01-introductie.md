# Van een signaal naar een bijgewerkte kans

:::history De richting van de vraag omkeren
Bij kansrekening bereken je meestal de kans op gegevens vanuit een aangenomen
proces: als een munt eerlijk is, hoe waarschijnlijk zijn dan zeven keer munt
bij tien worpen? Thomas Bayes (1702–1761), een Engelse predikant met een
bijzondere belangstelling voor kansrekening, onderzocht de omgekeerde vraag:
wat zeggen waargenomen uitkomsten over een onbekende kans? Zijn essay werd na
zijn dood door zijn vriend Richard Price uitgegeven. Het werd in december 1763
voorgelezen aan de Royal Society en verscheen in de *Philosophical
Transactions*. Pierre-Simon Laplace werkte de gedachte daarna zelfstandig en
veel verder uit.
:::

:::question Denk eerst na
Een fabriekssensor herkent 90% van de defecte onderdelen. Vandaag gaat het
alarm voor een onderdeel dat je uit de productie pakt. Hoe groot is dan de kans
dat dit onderdeel defect is? Schrijf eerst op wat je gevoel zegt. Welke
gegevens heb je nodig om dat gevoel te controleren?
:::

Het gevoel zegt bij de meeste mensen: ongeveer 90%. Dat is begrijpelijk, want het
getal 90% staat in de opgave en het hoort bij het alarm. Toch beantwoordt het een
andere vraag dan jij stelt. De 90% is de kans op een alarm **als** een onderdeel
defect is. Jij wilt de kans op een defect **als** er een alarm is. Dat zijn twee
verschillende kansen, met twee verschillende referentiegroepen: de ene wordt
gemeten binnen de defecte onderdelen, de andere binnen alle onderdelen waarbij het
alarm afgaat.

Hoeveel die twee van elkaar kunnen verschillen, hangt af van twee dingen die
in de opgave ontbraken. Het eerste is hoe vaak onderdelen defect zijn, de
**basisfrequentie**. Het tweede is hoe vaak de sensor ten onrechte alarm slaat bij
een goed onderdeel. Als defecten zeldzaam zijn en de sensor ook bij goede
onderdelen regelmatig piept, vormen de valse alarmen het grootste deel van alle
alarmen. Een alarm is dan wel een aanwijzing, maar nog lang geen bewijs.

## Waarom bestaat deze wiskunde?

Het omkeren van een voorwaarde is geen rekentruc voor fabrieken. Het is de
dagelijkse vorm van wetenschappelijk redeneren. Een arts weet hoe vaak een test
positief uitvalt bij zieke mensen en wil weten hoe waarschijnlijk het is dat
deze patiënt ziek is. Een rechter hoort hoe zeldzaam een DNA-profiel is en moet
oordelen over schuld. Een natuurkundige kent de kans op de meetwaarden onder een
theorie en wil weten hoeveel vertrouwen die theorie na de meting verdient. In
alle drie de gevallen staat de bekende kans de ene kant op, terwijl de vraag de
andere kant op wijst.

De regel van Bayes is het precieze gereedschap voor die omkering. Hij zegt dat
je twee dingen moet combineren: wat je vóór de waarneming wist (de **prior**) en
hoe goed de waarneming bij elke mogelijkheid past (de **likelihood**). Het
resultaat is wat je na de waarneming mag geloven (de **posterior**). Dat bijwerken
heeft een mooie eigenschap: de uitkomst van vandaag is het uitgangspunt van
morgen.

In deze module ga je stap voor stap te werk. Je begint bij voorwaardelijke
kansen en bij een beruchte vergissing die daar steeds weer uit voortkomt. Dan
leid je de regel van Bayes af en reken je ermee in aantallen, in een kansboom
en in een kruistabel. Je past dat toe op medische tests, waar de uitkomst vaak
verrassend is. Daarna werk je met odds en likelihoodratio's, die opeenvolgend
bijwerken tot een eenvoudige vermenigvuldiging maken. Ten slotte laat je de prior
zelf een kansverdeling zijn, zodat je een onbekende kans kunt leren uit
gegevens. Onderweg ontmoet je Bayes, Laplace en de onderzoekers die de
Bayesiaanse methode in de twintigste eeuw eerst terzijde schoven en later
weer omarmden.

Eén waarschuwing vooraf. Bayes' regel is een wet van de kansrekening en is dus
altijd waar. Of je er in een concrete situatie verstandig mee omgaat, hangt af
van de getallen die je erin stopt. Een foutieve prior of een onjuist model
levert een nette berekening op met een onbetrouwbaar antwoord. Daarom hoort bij
elke posterior een verantwoording van haar ingrediënten.

{{ goals }}

{{ glossary }}
