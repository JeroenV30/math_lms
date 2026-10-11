# Een afgebroken spel verdelen

Twee spelers zetten elk dezelfde som in op een spel van geluk. Wie het eerst een afgesproken aantal rondes wint, krijgt de hele pot. Maar het spel wordt onderbroken, bijvoorbeeld omdat de stad wordt ontruimd of de kaarsen op zijn, voordat iemand genoeg rondes heeft gewonnen. Hoe verdeel je dan eerlijk de pot? Dit **puntenprobleem** is een van de oudste vragen uit de kansrekening, en het is een goede kandidaat voor het beste voorbeeld van hoe wiskunde ontstaat uit een praktisch geschil.

:::history Voorlopers: Pacioli en Cardano
Het puntenprobleem komt al voor in de *Summa de arithmetica* (1494) van Luca Pacioli, die voorstelde de pot te verdelen naar het aantal rondes dat elke speler al had gewonnen. Later, in de zestiende eeuw, wees Niccolò Tartaglia erop dat die verdeling onredelijk kan zijn: als maar één ronde is gespeeld, zou de winnaar daarvan de hele pot krijgen. Beide zoekers keken naar het *verleden* van het spel.

Gerolamo Cardano schreef in diezelfde eeuw een boekje over kansspelen, het *Liber de ludo aleae* ("Boek over het dobbelspel"). Volgens MacTutor was het waarschijnlijk rond 1563 voltooid, maar het werd pas in 1663, een eeuw na zijn dood, gedrukt. Hij beschreef daarin dat de kansen bij een worp met dobbelstenen aan regels gebonden zijn en rekende, voor zover we weten als een van de eersten, met het aantal gunstige en mogelijke uitkomsten. Zijn invloed op latere onderzoekers was echter beperkt, omdat zijn boek pas laat verscheen.
:::

## 1654: de briefwisseling

In de zomer van 1654 schreven Blaise Pascal en Pierre de Fermat elkaar brieven over twee vragen. Volgens de overlevering werden ze voorgelegd door de Chevalier de Méré (Antoine Gombaud), een gokker met een scherp oog voor getallen. De ene vraag was het puntenprobleem; de andere ging over dobbelstenen en hoe vaak je moet gooien voor een kans van meer dan een half op een bepaalde uitkomst. MacTutor vermeldt dat de briefwisseling vijf brieven in de zomer van 1654 omvatte en dat Pascal destijds ziek was. De brieven zelf zijn bewaard; een Engelse vertaling staat online.

Het nieuwe in hun benadering was dat de verdeling niet afhangt van wat er al is gebeurd, maar van wat er **nog kan gebeuren**. Wat telt is wat elke speler nog nodig heeft. Bij een stand van 7–5 in een spel tot 8 heeft de ene speler nog 1 ronde nodig en de andere nog 3; bij 17–15 in een spel tot 18 is dat precies hetzelfde, en dus is de eerlijke verdeling ook hetzelfde. Zo beschrijft Wikipedia hun inzicht: de kansen op toekomstige uitkomsten bepalen de verdeling.

Zo ziet de methode van Fermat eruit, in een vereenvoudigd model. Spelers A en B hebben per ronde elk kans $\frac12$, onafhankelijk van eerdere rondes. A heeft nog **één** overwinning nodig, B nog **twee**. Het spel duurt hoogstens twee rondes meer. Zou je altijd *twee* rondes doorspelen, ook als het eigenlijk eerder stopt, dan zijn er vier even waarschijnlijke reeksen: $AA$, $AB$, $BA$ en $BB$. In de eerste drie wint A (hij heeft in elk geval één ronde gewonnen); alleen in $BB$ wint B.

![De vier even waarschijnlijke vervolgreeksen bij het puntenprobleem; A wint in drie ervan](/images/diagrams/m23-punten.svg "Het puntenprobleem: A heeft nog één winst nodig, B nog twee. Drie van de vier even waarschijnlijke reeksen leiden tot winst voor A.")

De winstkansen zijn dus $\frac34$ voor A en $\frac14$ voor B. Een inzet van 80 wordt verdeeld in 60 en 20. De truc van het "denkbeeldig doorspelen" is toegestaan omdat alle vervolgreeksen even waarschijnlijk zijn en elke reeks eenduidig aan een winnaar gekoppeld kan worden. Bij ongelijke rondekansen moet je met padkansen rekenen in plaats van alleen aantallen.

{{ exercises: 23-024, 23-025 }}

:::example Pascals manier: stap voor stap
Pascal rekende anders dan Fermat: hij liep de mogelijke toestanden af, van achteren naar voren. Noem $(a,b)$ de toestand waarin A nog $a$ en B nog $b$ overwinningen nodig heeft, en laat $W(a,b)$ de winstkans van A zijn.

- Als A nog 1 nodig heeft en B ook (toestand $(1,1)$), beslist de volgende ronde: $W(1,1)=\frac12$.
- Heeft A nog 1 nodig en B nog 2? De volgende ronde wint A met kans $\frac12$ (en heeft dan alles), of B met kans $\frac12$ (dan is het $(1,1)$). Dus $W(1,2)=\frac12\times1+\frac12\times W(1,1)=\frac12+\frac14=\frac34$. Dat is hetzelfde antwoord als hierboven.
- Zo ga je door naar grotere toestanden. Algemeen: $W(a,b)=\frac12W(a-1,b)+\frac12W(a,b-1)$, met $W(0,b)=1$ en $W(a,0)=0$.

Deze regel, "het gemiddelde van de twee mogelijke volgende toestanden", is precies de rekenregel van de driehoek van Pascal. Daar zit het verband tussen het puntenprobleem en de driehoek.
:::

:::example Een groter puntenprobleem
A heeft nog **2** overwinningen nodig, B nog **3**. Het spel duurt hoogstens $2+3-1=4$ rondes. Denk je in dat je altijd 4 rondes speelt: $2^4=16$ even waarschijnlijke reeksen. A wint als hij in die vier rondes minstens 2 keer wint. Het aantal reeksen met precies $k$ overwinningen voor A is $\binom4k$, dus rij 4 van de driehoek: $1,4,6,4,1$. Minstens twee overwinningen voor A: $6+4+1=11$ reeksen. A heeft dus kans $\frac{11}{16}$; B heeft kans $\frac5{16}$. Een pot van 80 wordt verdeeld in 55 en 25.
:::

{{ exercises: 23-051 }}

## Huygens: de eerste gedrukte kansrekening

Christiaan Huygens hoorde tijdens een bezoek aan Parijs in 1655 van de briefwisseling tussen Pascal en Fermat. Hij werkte de ideeën uit tot een kort traktaat, *De ratiociniis in ludo aleae*, dat in 1657 verscheen. MacTutor noemt het het eerste gedrukte werk over het onderwerp. In het Nederlands staat het bekend als *Van Rekeningh in Spelen van Geluck*. Huygens introduceerde in dit werk het begrip van de redelijke **waarde van een kans**, wat later de verwachtingswaarde werd, en loste een reeks vraagstukken op over het verdelen van inzetten en over dobbelsteenspellen. Zijn boek diende lang als leerboek voor wie zich met kansen wilde bezighouden.

Merk op wat deze drie stappen laten zien. Een brievenwisseling tussen twee mensen werd een gedrukt boek, en daarmee een vak waar anderen op voort konden bouwen.

## De twee vragen van de Méré, nagerekend

Nu je het complement kent, kun je de twee vragen van de Méré zelf beantwoorden.

**Vier worpen met één dobbelsteen, minstens één zes.** Dat is het resultaat uit les 4: $1-\left(\frac56\right)^4=\frac{671}{1296}\approx0{,}518$. Hij won dus op de lange duur met wedden op "minstens één zes".

**Vierentwintig worpen met twee dobbelstenen, minstens één dubbele zes.** De kans op dubbel zes per worp is $\frac1{36}$, dus de kans op *geen* dubbel zes is $\frac{35}{36}$. In 24 onafhankelijke worpen:

$$
P(\text{minstens één dubbel zes})=1-\left(\frac{35}{36}\right)^{24}\approx1-0{,}5086=0{,}4914.
$$

Dit is *kleiner* dan een half. De Méré redeneerde, zo wordt het vaak verteld, op grond van een evenredigheid: bij één dobbelsteen zijn er 6 uitkomsten en volstaan 4 worpen; bij twee dobbelstenen zijn er 36 uitkomsten, zes keer zoveel, dus $6	imes4=24$ worpen. Die evenredigheid klopt niet, omdat kansen zich niet lineair opstapelen: er zit een complement en een product in. Zijn ervaring zei dat het niet werkte; Pascal liet zien waarom.

{{ exercises: 23-043, 23-044 }}

## Jacob Bernoulli en de wet van de grote aantallen

Na Huygens bouwde Jacob Bernoulli het vak uit. Zijn *Ars Conjectandi* ("de kunst van het gissen") verscheen in 1713, acht jaar na zijn dood. Daarin formaliseerde hij wat we de **wet van de grote aantallen** noemen: als je een experiment een groot aantal keren herhaalt, ligt de relatieve frequentie van een gebeurtenis met grote waarschijnlijkheid dicht bij de kans op die gebeurtenis. Daarmee werd duidelijk wat een theoretische kans te maken heeft met een waargenomen frequentie: hij bewees dat het eerste de lange-termijnwaarde van het tweede is.

De boodschap voor deze module is eenvoudig. Een kans is geen voorspelling voor één experiment, maar een uitspraak over wat je op de lange duur mag verwachten. Een wetenschapper, verzekeraar of speler die dat verschil kent, gaat anders om met onzekerheid dan iemand die denkt dat "kans" betekent dat een bepaalde uitkomst nu aan de beurt is.

## Tijdlijn in vogelvlucht

| Jaar | Gebeurtenis |
|---|---|
| 1494 | Pacioli bespreekt het puntenprobleem in de *Summa* |
| ca. 1563 | Cardano voltooit waarschijnlijk zijn *Liber de ludo aleae* (gedrukt 1663) |
| 1654 | Briefwisseling Pascal–Fermat over het puntenprobleem |
| 1657 | Huygens publiceert *De ratiociniis in ludo aleae* |
| 1713 | Bernoulli's *Ars Conjectandi* verschijnt postuum |

## Bronnen

- MacTutor, [Blaise Pascal](https://mathshistory.st-andrews.ac.uk/Biographies/Pascal/): de briefwisseling met Fermat in 1654 en de driehoek.
- MacTutor, [Girolamo Cardan](https://mathshistory.st-andrews.ac.uk/Biographies/Cardan/): het *Liber de ludo aleae*.
- MacTutor, [Christiaan Huygens](https://mathshistory.st-andrews.ac.uk/Biographies/Huygens/): het traktaat uit 1657.
- MacTutor, [Jacob Bernoulli](https://mathshistory.st-andrews.ac.uk/Biographies/Bernoulli_Jacob/): *Ars Conjectandi* en de wet van de grote aantallen.
- Wikipedia, [Problem of points](https://en.wikipedia.org/wiki/Problem_of_points): de voorlopers (Pacioli, Tartaglia) en de methoden van Pascal en Fermat.
- Brieven van Pascal en Fermat, [vertaling bij de Universiteit van York](https://www.york.ac.uk/depts/maths/histstat/pascal.htm).
- MacTutor, [Chronologie 1650–1675](https://mathshistory.st-andrews.ac.uk/Chronology/11/).
