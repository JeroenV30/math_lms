# Van spelwaarde naar kansvariabele

Het begrip kansvariabele kreeg zijn huidige vorm pas in de twintigste eeuw.
Maar het idee erachter, het rekenen met een getal dat nog onbekend is, ontstond
driehonderd jaar eerder aan speeltafels. Dit intermezzo volgt vier stappen: het
eerlijk verdelen van een inzet (1654), de eerste gedrukte theorie van de waarde
van een kans (1657), de band tussen kans en frequentie (1713) en de
axiomatische grondslag (1933).

## Het probleem van de onderbroken partij

Het vertrekpunt is het *problème des partis*, het probleem van de verdeling van
de inzet. Twee spelers spelen een spel van rondes en hebben afgesproken dat wie
als eerste een vast aantal rondes wint, de hele inzet krijgt. Het spel wordt
onderbroken voordat iemand dat aantal heeft bereikt. Hoe verdeel je de inzet
eerlijk? Het probleem was al eeuwen oud. Luca Pacioli stelde in zijn *Summa*
(1494) voor om te verdelen naar het aantal tot dan toe gewonnen rondes;
Tartaglia vond dat later in de zestiende eeuw terecht onbevredigend.

In 1654 legde, volgens het gangbare verhaal, de Chevalier de Méré dit probleem
voor aan Blaise Pascal, die erover in briefwisseling raakte met Pierre de
Fermat. Hun doorbraak was dat ze niet naar het verleden keken, maar naar de
toekomst: wat telt, is wat er nog kan gebeuren. Fermat telde alle mogelijke
vervolgen van het spel, ook die waarin al was beslist maar toch door werd
gespeeld, en keek in hoeveel ervan elke speler zou winnen. Pascal werkte
recursief: hij bepaalde de waarde van een stand uit de waarden van de twee
standen die één ronde later kunnen volgen.

:::example De verdeling bij stand 2–1
Het spel gaat om drie gewonnen rondes en elke speler zet € 40 in. Bij 2–1 heeft
speler A nog één ronde nodig, speler B nog twee. Speel in gedachten nog twee
rondes (ook als het spel eerder zou zijn beslist). De vier even waarschijnlijke
vervolgen zijn AA, AB, BA en BB. In drie ervan wint A minstens één ronde en is hij
dus de winnaar; alleen bij BB wint B. De kans dat A wint is $3/4$. Eerlijk
verdelen betekent dus de inzet verdelen volgens de verwachting:
A krijgt $\tfrac34\cdot80=60$ euro en B krijgt $\tfrac14\cdot80=20$ euro. Pascal
komt met zijn recursie op hetzelfde uit. Bij 2–1 kan de volgende ronde twee
dingen doen: wint A, dan krijgt hij alles (€ 80); wint B, dan is de stand 2–2 en
wordt de inzet gelijk verdeeld (€ 40 voor A). Beide even waarschijnlijk, dus
A's aandeel is $\tfrac12\cdot80+\tfrac12\cdot40=60$ euro.
:::

Deze redenering is in feite een berekening van een verwachtingswaarde van een
kansvariabele: A's aandeel is een getal (€ 80 of € 0) dat afhangt van het
onbekende vervolg, en de eerlijke verdeling is het gewogen gemiddelde.

## Huygens en de waarde van een kans

Christiaan Huygens hoorde tijdens een bezoek aan Parijs in 1655 over het werk
van Pascal en Fermat. Hij schreef er zelf een verhandeling over, die oorspronkelijk
in het Nederlands is opgesteld als *Van Rekeningh in Spelen van Gluck* (de
Nederlandse tekst werd later, in 1660, gedrukt). Zijn leermeester Frans van
Schooten nam een Latijnse vertaling, *De ratiociniis in ludo aleae*, in 1657
op in zijn *Exercitationum mathematicarum*. Het is de eerste gedrukte
verhandeling over wat we nu kansrekening noemen.

Huygens vertrekt van het idee van een eerlijke prijs voor een onzekere
uitbetaling: de waarde van een kans, in de Latijnse tekst *expectatio*
genoemd (het woord "verwachting" is hiervan afgeleid). Heb je kans $p$ op een
bedrag $a$ en kans $1-p$ op een bedrag $b$, dan is de waarde $pa+(1-p)b$. Dat is
de verwachtingswaarde van de moderne kansrekening, maar Huygens had nog geen
woord voor "kansvariabele" en schreef in termen van eerlijke contracten en
aandelen. Aan het eind van zijn werk gaf hij vijf opgaven zonder oplossing; ze
waren zestig jaar lang een toetssteen voor wie zijn vaardigheid in kansrekenen
wilde tonen.

## Bernoulli en de wet van de grote aantallen

Jakob Bernoulli werkte decennia aan een omvangrijk boek over het schatten van
kansen en overleed in 1705, voordat het klaar was. *Ars Conjectandi* verscheen
in 1713 postuum, verzorgd door zijn neef Nicolaus Bernoulli, bij de gebroeders
Thurneysen in Bazel. Het eerste deel is een uitgebreide bewerking van Huygens' traktaat;
in het vierde deel bewijst Bernoulli een stelling die hij zijn "gouden stelling"
noemde: bij steeds meer herhalingen komt de relatieve frequentie van een
gebeurtenis met grote zekerheid steeds dichter bij haar kans. Dat is de eerste
vorm van de wet van de grote aantallen.

De wet zegt niet dat na vijf keer kop de volgende worp vaker munt moet zijn:
de worpen zijn onafhankelijk, en het gemiddelde convergeert niet doordat
afwijkingen worden "gecorrigeerd", maar doordat ze worden verdund. In
termen van deze module: het gemiddelde $\bar X$ van $n$ onafhankelijke
waarnemingen heeft verwachting $\mu$ en standaardafwijking $\sigma/\sqrt n$, en
die krimpt naar nul. Abraham de Moivre bracht dit inzicht verder. In 1733
publiceerde hij een Latijns pamfletje waarin hij de binomiale verdeling voor
grote $n$ benadert met wat we nu de normale verdeling noemen, en in zijn
*Doctrine of Chances* (1718, uitgebreid in 1738 en 1756) werkte hij de
kansrekening voor een breder publiek uit. Dat is het begin van de weg naar
module 37.

## Kolmogorov en de axioma's

Zo'n driehonderd jaar lang bleef de kansrekening een verzameling slimme
methoden voor afzonderlijke problemen, met een onduidelijke basis: wat is een
kans eigenlijk, en voor welke gebeurtenissen is zij gedefinieerd? In 1933
publiceerde Andrej Kolmogorov zijn *Grundbegriffe der Wahrscheinlichkeitsrechnung*.
Daarin bouwde hij de kansrekening op uit enkele axioma's, vergelijkbaar met
de manier waarop Euclides de meetkunde opbouwde, op basis van de maattheorie:
een kans is een niet-negatieve maat $P$ op de uitkomstenruimte met
$P(\Omega)=1$ en additief voor aftelbaar veel disjuncte gebeurtenissen.

In die opbouw is een kansvariabele een (meetbare) functie op de
uitkomstenruimte, precies zoals in les 2. Het woord "variabele" verwijst dus
niet naar een getal dat je vrij kiest, maar naar een getal dat wordt bepaald
door de uitkomst van een toevalsproces. De verwachtingswaarde is dan
een integraal van $X$ naar de kansmaat: de som uit les 3 en de integraal uit
les 4 zijn twee gedaanten van één begrip. Dat verklaart ook waarom de
rekenregels voor $E(aX+b)$ en $E(X+Y)$ voor discrete en continue variabelen
identiek zijn.

## Een idee met een groot toepassingsgebied

Spellen waren een toegankelijke aanleiding, maar dezelfde begrippen worden
gebruikt voor foutmarges, wachttijden en steekproeven. De belangrijkste stap
is steeds dat je eerst het toevalsmodel benoemt. Een lijst getallen wordt pas
een kansverdeling wanneer je erbij zegt welke kansen die getallen hebben.

[Bekijk de tijdlijn](/history) bij Pascal en Fermat, Huygens, Bernoulli, De Moivre en
Kolmogorov. Hun bijdragen zijn verschillende stappen: een waarde berekenen,
herhalingen begrijpen en de algemene structuur formuleren.

## Bronnen

- Wikipedia, "Problem of points": <https://en.wikipedia.org/wiki/Problem_of_points>
- Wikipedia, "Christiaan Huygens": <https://en.wikipedia.org/wiki/Christiaan_Huygens>
- MacTutor, "Christiaan Huygens": <https://mathshistory.st-andrews.ac.uk/Biographies/Huygens/>
- Wikipedia, "Ars Conjectandi": <https://en.wikipedia.org/wiki/Ars_Conjectandi>
- MacTutor, "Abraham de Moivre": <https://mathshistory.st-andrews.ac.uk/Biographies/De_Moivre/>
- MacTutor, "Andrei Kolmogorov": <https://mathshistory.st-andrews.ac.uk/Biographies/Kolmogorov/>
