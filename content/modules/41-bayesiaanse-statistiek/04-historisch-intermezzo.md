# Bayes, Laplace en de lange weg naar acceptatie

Dit intermezzo volgt een idee dat tweehonderd jaar lang schommelde tussen
bewondering en wantrouwen. Het begint bij een predikant die zijn werk niet
publiceerde, loopt via een Franse wiskundige die er een algemene methode van
maakte, en eindigt bij codebrekers en computers.

## Thomas Bayes en Richard Price

Thomas Bayes (1702–1761) was een presbyteriaanse predikant in Tunbridge Wells.
Hij werd in 1742 tot lid van de Royal Society gekozen, terwijl hij toen nog
geen wiskundige publicaties had. Na zijn dood vond zijn vriend Richard Price een
manuscript in zijn nalatenschap, bewerkte het en stuurde het naar de Royal
Society. Het verscheen als *An Essay towards solving a Problem in the Doctrine of
Chances* in de *Philosophical Transactions*; het stuk werd op 23 december 1763
voorgelezen. De [transcriptie van de oorspronkelijke tekst](https://www.york.ac.uk/depts/maths/histstat/essay.htm)
laat zien hoe anders de formulering was dan onze huidige notatie.

Het probleem van Bayes was dat van een onbekende kans. Je ziet gebeurtenissen
optreden of uitblijven en je vraagt welke kans dat het optreden van de
gebeurtenis beschrijft. Bayes' antwoord bestond uit het berekenen van de kans dat de
onbekende kans tussen twee grenzen ligt, gegeven het aantal successen en
mislukkingen. Dat is verwant aan de Beta-posterior uit de vorige les. Price
voegde een inleiding toe en gaf een toepassing op de vraag hoe zeker je kunt zijn
van het voortbestaan van een regelmaat die je een aantal malen hebt waargenomen.
De moderne regel die Bayes' naam draagt, is kort af te leiden uit voorwaardelijke
kansen. Zijn werk was echter meer dan die regel: het gebruikte een kans voor een
onbekende parameter.

## Laplace

Pierre-Simon Laplace kwam rond 1774 zelfstandig tot dezelfde gedachte, in een
verhandeling over de kans op oorzaken gegeven waargenomen gevolgen. Hij maakte er
een algemene methode van en paste haar toe op wetenschappelijke vragen, zoals
de aannemelijkheid van astronomische gegevens, en op kansen in de samenleving.
Zijn beroemdste inkijkje in het idee is de **regel van opvolging**. Als je niets
anders weet dan dat een gebeurtenis zich $n$ keer heeft voorgedaan, dan
is de kans op een volgende keer $(n+1)/(n+2)$. Laplace paste dat toe op de vraag
of de zon morgen opkomt, gegeven ruwweg vijfduizend jaar waargenomen zonsopgangen,
en kwam op een voorspelling met odds van ruim 1,8 miljoen tegen 1. Hij voegde
eraan toe dat iemand die het verband tussen dag en nacht begrijpt, nog veel meer
zekerheid mag hebben. De regel is dus een uitspraak over een geval waarin je alleen
de telling kent, niet over de zon zelf.

## Terzijde geschoven in de twintigste eeuw

In de negentiende eeuw was de inverse kansrekening gewoon onderdeel van de
statistiek. Bij de opkomst van de moderne statistiek in de eerste helft van de
twintigste eeuw veranderde dat. Onderzoekers als Fisher en Neyman en Pearson
ontwikkelden methoden die zonder prior werkten: toetsen, significantie en
betrouwbaarheidsintervallen, gebaseerd op frequenties bij herhaling. Eén reden was
bezwaar tegen de keuze van de prior, in het bijzonder het automatisch
gebruiken van een vlakke verdeling voor "onwetendheid". Een tweede reden was
praktisch: de frequentistische methoden waren rekenkundig goed te doen.

Toch bleef de Bayesiaanse lijn bestaan. De geofysicus en wiskundige Harold
Jeffreys (1891–1989) publiceerde in 1939 zijn *Theory of Probability*, die
Bayesiaans redeneren een systematische vorm gaf en een belangrijke rol speelde
bij het in leven houden van de benadering. Leonard Savage legde in 1954 in *The
Foundations of Statistics* een theorie van subjectieve kans vast, die een van de
grondslagen van de moderne Bayesiaanse statistiek vormt. De term
"Bayesiaans" voor deze methoden raakte pas in de jaren vijftig gangbaar.

## Turing, Good en Bletchley Park

Een tweede draad loopt via de Tweede Wereldoorlog. Alan Turing ontwikkelde op
Bletchley Park voor het breken van de Duitse marine-Enigma de procedure
Banburismus, en gebruikte daarbij een maat voor bewijskracht: de **ban**, met
als kleinere eenheid de **deciban**. Een ban komt overeen met een factor 10 in de
odds. Bewijskracht tellen is dan optellen: omdat odds worden vermenigvuldigd met
de likelihoodratio, worden hun logaritmen opgeteld. De wiskundige Irving John Good
(1916–2009) werkte vanaf mei 1941 in Hut 8 met Turing samen en bleef na de oorlog
een pleitbezorger van de Bayesiaanse statistiek. Historici discussiëren of de
procedure als "Bayesiaanse inferentie" in strikte zin te beschrijven is; de
logica van het opeenvolgend bijwerken met een bewijsgewicht ligt in elk geval
dichtbij wat je eerder in deze module zag.

## Computers maken het uitvoerbaar

Voor één onbekende kans en een Beta-prior kun je de normalisatie met pen en papier
uitrekenen. Bij veel parameters tegelijk is de benodigde integraal zo
moeilijk dat de methode lang slechts voor eenvoudige modellen bruikbaar was. Dat
veranderde met simulatiemethoden die samples uit de posterior trekken zonder
de integraal uit te rekenen: **Markov chain Monte Carlo**. Het Metropolis-algoritme
stamt uit 1953 en werd in 1970 door Hastings gegeneraliseerd. Rond 1990 werd
duidelijk hoe breed ze in de Bayesiaanse statistiek toepasbaar waren, en in de
jaren negentig volgde de brede acceptatie, mede door software als BUGS. Voor het
eerst konden onderzoekers ingewikkelde modellen schatten met een prior naar keuze.
Dat veranderde het rekenwerk, niet de plicht om prior en likelihood te
verantwoorden.

## Een toepassing: het spamfilter

Een alledaags voorbeeld van Bayesiaans redeneren staat vermoedelijk in je mailprogramma.
Een naive-Bayesfilter schat voor elk woord hoe vaak het in spam en in gewone post
voorkomt. Het behandelt woorden als conditioneel onafhankelijk onder elke klasse (de
"naïeve" aanname) en vermenigvuldigt hun likelihoodratio's, precies zoals jij met
twee tests deed. Je werkt dit in de praktijkles zelf uit.

## Bronnen

- [An Essay towards solving a Problem in the Doctrine of Chances (transcriptie)](https://www.york.ac.uk/depts/maths/histstat/essay.htm)
- [MacTutor: Thomas Bayes](https://mathshistory.st-andrews.ac.uk/Biographies/Bayes/)
- [Wikipedia: Rule of succession](https://en.wikipedia.org/wiki/Rule_of_succession)
- [Wikipedia: Harold Jeffreys](https://en.wikipedia.org/wiki/Harold_Jeffreys)
- [Wikipedia: Leonard Jimmie Savage](https://en.wikipedia.org/wiki/Leonard_Jimmie_Savage)
- [Wikipedia: Banburismus](https://en.wikipedia.org/wiki/Banburismus)
- [Wikipedia: I. J. Good](https://en.wikipedia.org/wiki/I._J._Good)
- [Wikipedia: Markov chain Monte Carlo](https://en.wikipedia.org/wiki/Markov_chain_Monte_Carlo)
- [Wikipedia: Sally Clark](https://en.wikipedia.org/wiki/Sally_Clark)

Lees de profielen van [Bayes](/mathematicians/bayes) en
[Laplace](/mathematicians/laplace) bij de tijdlijn. De sensor- en productievragen
in deze module zijn didactische voorbeelden, geen historische reconstructies.
