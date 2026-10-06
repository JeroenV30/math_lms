# Van doopregisters tot p-waarden: een geschiedenis van het toetsen

De gereedschappen in deze module zijn niet in één keer ontstaan. Ze groeiden uit praktische vragen over
geboorten, bier, akkers en grote datasets, en ze kregen hun huidige vorm in een discussie die tot vandaag doorloopt. Wie
die geschiedenis kent, begrijpt waarom de leerboekversie vaak een mengsel is van twee verschillende ideeën.

## Arbuthnot, 1710: de eerste significantietoets

John Arbuthnot publiceerde in 1710 in de *Philosophical Transactions* een analyse van de Londense
doopregisters over de jaren 1629 tot 1710. In alle 82 jaren werden er meer jongens dan meisjes gedoopt. Als
jongens en meisjes even waarschijnlijk zijn en elk jaar neerkomt op een muntworp, is de kans op 82 keer hetzelfde
overschot gelijk aan $(1/2)^{82}$, ongeveer $2\cdot10^{-25}$. Arbuthnot concludeerde dat de verdeling niet aan het
toeval lag. Hij zocht de verklaring bij de goddelijke voorzienigheid. Zijn argumentatie leidde tot discussie, onder anderen met Nicolaus Bernoulli. Toch geldt zijn werk als de eerste formele significantietoets, omdat hij een kans onder een nulmodel
uitrekende en daaruit een conclusie trok.

## Karl Pearson, 1900: de chi-kwadraattoets

In 1900 publiceerde Karl Pearson de chi-kwadraattoets, een manier om te beoordelen hoe goed waargenomen
frequenties passen bij verwachte frequenties. Het was een belangrijke stap: tot dan toe stond de normale verdeling centraal in de statistiek, en Pearson
wilde met zijn methode die centrale plaats doorbreken. Zijn toets maakte het mogelijk een model te toetsen aan gegevens, ook bij
categorische uitkomsten. Je komt hem in de toegepaste statistiek veel tegen, bijvoorbeeld bij kruistabellen. Pearson was ook een van de oprichters van de wiskundige statistiek als vakgebied;
zijn naam komt terug in module 40 bij de correlatiecoëfficiënt.

## Gosset, 1908: Student en de kleine steekproef

William Sealy Gosset werkte als chemicus bij de brouwerij van Guinness in Dublin. Hij had te maken met kleine
aantallen metingen, voor kwaliteitscontrole in het brouwproces, en kon daar met de gangbare normale benadering weinig mee. In
1908 publiceerde hij in *Biometrika* "The probable error of a mean", waarin hij de verdeling beschreef die we nu de
t-verdeling noemen. Guinness stond zijn medewerkers niet toe onder eigen naam te publiceren, en dus verscheen het artikel onder het
pseudoniem "Student". Fisher herkende later het belang van dit werk, en tussen 1912 en 1934 wisselden Gosset en Fisher meer dan
150 brieven. De naam "Student's t-toets" herinnert daar tot op heden aan.

## Fisher, 1925 en 1935: p-waarden en de dame met de thee

Ronald Fisher werkte op het landbouwproefstation Rothamsted en schreef daar *Statistical Methods for Research Workers* (1925), een
handboek voor onderzoekers met tabellen en rekenvoorschriften voor kleine steekproeven. Hierin stelde hij een kans van een op twintig
($0{,}05$) voor als een handige grens om de nulhypothese te verwerpen. Het was een praktische afspraak en geen natuurwet; in latere
geschriften pleitte hij ervoor het niveau per geval te kiezen. Die losse suggestie groeide uit tot de stilzwijgende norm van
generaties onderzoekers.

In *The Design of Experiments* (1935) beschreef Fisher een beroemd gedachte-experiment. Een dame beweert dat zij kan proeven of in een
kopje thee eerst de melk of eerst de thee is gegoten. Je zet haar acht kopjes voor, vier van elke soort, in willekeurige volgorde, en zij moet de
vier melk-eerst-kopjes aanwijzen. Als zij raadt, zijn er $\binom{8}{4}=70$ mogelijke keuzes, en slechts één is helemaal goed. De kans op een perfecte score is dus
$1/70\approx0{,}014$. Fisher gebruikte het voorbeeld om te laten zien hoe randomisatie en een nulmodel samen een exacte kans opleveren, zonder aannames over
een verdeling.

## Neyman en Pearson, 1933: beslissingen en fouten

Jerzy Neyman en Egon Pearson ontwikkelden vanaf 1928 samen een theorie van het toetsen. Aanleiding was Egons vraag naar een algemeen
principe waaruit Gossets toetsen te herleiden zijn. In hun artikel van 1933, "On the problem of the most efficient tests of statistical hypotheses",
stelden ze een toets voor als een regel voor herhaalde beslissingen. Je specificeert een alternatief, je kiest een foutkans $\alpha$, en je zoekt de
toets met de grootste power. Zo kwamen type-I- en type-II-fouten en power in de statistiek. Waar Fisher kleine staartkansen
als aanwijzing tegen een nulmodel zag, ging het Neyman en Pearson om de gedragsregel. Na 1934, toen ze in hetzelfde gebouw van University College London werkten, liepen
de persoonlijke verhoudingen met Fisher stuk, en de inhoudelijke meningsverschillen duurden jaren.

## Een hedendaagse mengvorm

In de meeste rapporten vind je een mengvorm: de p-waarde van Fisher, gecombineerd met een beslisregel op grond van $\alpha$ van Neyman en Pearson. Dat kan werken, maar
dan moet je de interpretaties uit elkaar houden. Je mag uit $p=0{,}03$ niet afleiden dat de kans op een
type-I-fout in precies deze conclusie 3% is. Een foutkans hoort bij een procedure onder een model, een p-waarde bij de waargenomen
toetsingsgrootheid.

## De ASA-verklaring van 2016

In 2016 publiceerde de American Statistical Association een verklaring over p-waarden. Ze bevat zes principes. Samengevat: p-waarden kunnen aangeven hoe onverenigbaar de gegevens zijn met een statistisch model; ze meten niet de kans dat de
onderzochte hypothese waar is; wetenschappelijke conclusies mogen niet alleen op een drempel zoals $p<0{,}05$ rusten; goed onderzoek vraagt
volledige rapportage en transparantie; een p-waarde meet niet de grootte of het belang van een effect; en op zichzelf is zij geen goede maat voor bewijs. In
les 7 gebruik je die principes bij het beoordelen van een onderzoeksverslag.

:::history Wat de geschiedenis je leert
De 5%-grens, de begrippen H0 en H1 en de woorden "significant" en "power" hebben allemaal een eigen herkomst en een eigen
bedoeling. Wie ze zonder die achtergrond gebruikt, loopt het risico te vergeten wat ze oorspronkelijk wilden zeggen.
:::

## Bronnen

De feiten in dit intermezzo zijn gecontroleerd aan de volgende bronnen.

- MacTutor, [John Arbuthnot](https://mathshistory.st-andrews.ac.uk/Biographies/Arbuthnot/) en Wikipedia, [John Arbuthnot](https://en.wikipedia.org/wiki/John_Arbuthnot): het onderzoek naar de geboorteverhoudingen van 1710.
- MacTutor, [Karl Pearson](https://mathshistory.st-andrews.ac.uk/Biographies/Pearson/): de chi-kwadraattoets van 1900.
- MacTutor, [William Gosset](https://mathshistory.st-andrews.ac.uk/Biographies/Gosset/) en Wikipedia, [William Sealy Gosset](https://en.wikipedia.org/wiki/William_Sealy_Gosset): Guinness, het pseudoniem Student en het artikel van 1908.
- MacTutor, [Ronald Fisher](https://mathshistory.st-andrews.ac.uk/Biographies/Fisher/) en Wikipedia, [Statistical significance](https://en.wikipedia.org/wiki/Statistical_significance): *Statistical Methods for Research Workers* en de grens van 0,05.
- Wikipedia, [Lady tasting tea](https://en.wikipedia.org/wiki/Lady_tasting_tea): het experiment uit *The Design of Experiments* (1935).
- MacTutor, [Jerzy Neyman](https://mathshistory.st-andrews.ac.uk/Biographies/Neyman/): de samenwerking met Egon Pearson en de verhouding tot Fisher.
- American Statistical Association, [Statement on p-values (2016)](https://www.amstat.org/asa/files/pdfs/P-ValueStatement.pdf).

Meer over de personen vind je op de pagina's over [Fisher](/mathematicians/fisher), [Neyman](/mathematicians/neyman) en [Karl Pearson](/mathematicians/karl-pearson).
