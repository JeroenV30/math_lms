# Twintig procent op zilver

:::history Babylon, ca. 1750 v.Chr.
Op een stèle van zwart gesteente, ruim twee meter hoog en nu in het Louvre in Parijs, staan de wetten van koning Hammurabi van Babylon. Naast bepalingen over diefstal, huwelijk en irrigatie bevat de verzameling regels voor kooplieden die geld en graan uitlenen. In de vertaling van de assyrioloog Martha Roth staat dat een koopman die **graan** uitleent per *gur* (300 *sila*) hoogstens 100 sila als rente mag vragen, en dat hij bij een lening van **zilver** per sjekel hoogstens een vijfde sjekel rente mag rekenen. Omgerekend is dat $33\tfrac{1}{3}\,\%$ op graan en $20\,\%$ op zilver. Leningen liepen meestal tot de volgende oogst, dus ongeveer een jaar.
:::

![De stèle met de wetten van Hammurabi in het Louvre](/images/history/m33-codex-hammurabi.jpg "De stèle met de wetten van Hammurabi (ca. 1750 v.Chr.), Musée du Louvre, Parijs. Foto: Mbzt, Wikimedia Commons, CC BY 3.0.")

Stel je een boer voor die bij een koopman 10 sjekel zilver leent. Na een jaar moet hij volgens de afspraak het geleende zilver terugbetalen plus een vijfde deel als rente: $10 + 2 = 12$ sjekel. Maar de oogst valt tegen en hij kan niets betalen. De koopman stelt voor: "Dan schrijven we een nieuwe lening uit, van 12 sjekel, weer voor een jaar."

:::question Denk eerst zelf na
1. Hoeveel is de boer na twee jaar schuldig als de rente van het eerste jaar gewoon blijft staan en hij in het tweede jaar alleen weer 2 sjekel rente betaalt over de oorspronkelijke lening?
2. En hoeveel als hij in het tweede jaar rente betaalt over de nieuwe lening van 12 sjekel?
3. Hoe lang duurt het in elk van beide gevallen voordat de schuld verdubbeld is tot 20 sjekel? Schat eerst, reken daarna.

Schrijf je antwoorden op voordat je verder leest.
:::

Laten we het nagaan. In het **eerste** geval wordt de rente steeds over dezelfde 10 sjekel berekend: elk jaar komt er 2 sjekel bij. Na twee jaar is de schuld $10 + 2 + 2 = 14$ sjekel, na vijf jaar $10 + 5 \times 2 = 20$ sjekel. De schuld groeit **lineair**: steeds hetzelfde bedrag erbij, en na precies vijf jaar is hij verdubbeld.

In het **tweede** geval wordt de rente van het eerste jaar onderdeel van de nieuwe lening. In jaar 2 betaalt de boer een vijfde van 12 sjekel, dus 2,4 sjekel. Na twee jaar is de schuld $12 + 2{,}4 = 14{,}4$ sjekel. Elk jaar wordt de schuld met dezelfde **factor** $1{,}2$ vermenigvuldigd:

$$
10 \;\to\; 12 \;\to\; 14{,}4 \;\to\; 17{,}28 \;\to\; 20{,}736
$$

Na vier jaar is de schuld al meer dan verdubbeld. Het verschil lijkt klein – 14 tegen 14,4 sjekel na twee jaar – maar het wordt elk jaar groter, omdat er in het tweede model **rente op rente** wordt berekend. Dat tweede model heet **samengestelde rente**, en de groei is **exponentieel**, precies zoals je in module 25 zag.

Dat Babylonische rekenaars hierover nadachten, is waarschijnlijk: er is een kleitablet uit de Oudbabylonische tijd (ruwweg 2000–1700 v.Chr.) bewaard dat volgens veel onderzoekers vraagt hoe lang het duurt voordat een bedrag tegen 20 procent rente verdubbelt. De precieze lezing van zulke tabletten is onder specialisten nog onderwerp van discussie.

## Waarom bestaat deze wiskunde?

Geld heeft een eigenschap die appels, schapen en meters niet hebben: **een euro vandaag is meer waard dan een euro over tien jaar.** Dat heeft drie redenen.

- Wie vandaag geld heeft, kan het uitlenen of beleggen en er rente of rendement op ontvangen. Wie het geld pas later krijgt, mist die opbrengst.
- Prijzen stijgen meestal in de loop van de tijd (**inflatie**). Met dezelfde euro kun je later minder kopen.
- Een belofte om later te betalen is onzeker: de lener kan failliet gaan of verdwijnen.

Daarom vraagt wie geld uitleent een vergoeding: de **rente**. En daarom kun je bedragen op verschillende tijdstippen niet zomaar optellen of vergelijken, net zoals je in module 6 geen meters bij centimeters optelde. Je moet ze eerst "omrekenen" naar hetzelfde tijdstip. Dat omrekenen is het hart van de financiële wiskunde.

Je komt deze wiskunde dagelijks tegen, ook als je er niet bij stilstaat:

- **sparen**: hoeveel staat er over twintig jaar op je rekening als je elke maand een vast bedrag inlegt?
- **lenen**: wat kost een persoonlijke lening of een creditcardschuld werkelijk per jaar, en waarom ligt dat getal hoger dan het percentage in de advertentie?
- **een huis kopen**: waarom blijft de maandlast van een annuïteitenhypotheek gelijk, terwijl die van een lineaire hypotheek daalt? En hoeveel betaal je in totaal aan rente?
- **beleggen en pensioen**: hoe vergelijk je een belegging van € 10.000 die over acht jaar € 15.000 waard is met een spaarrekening van 4%? En wat blijft er over als je de inflatie meerekent?
- **overheid en bedrijven**: is een investering in een dijk, een fabriek of zonnepanelen nú iets waard, gegeven de opbrengsten die pas over jaren binnenkomen?

Wiskundig gezien gebruik je in deze module vooral gereedschap dat je al kent: procenten en groeifactoren (module 9), exponentiële groei (module 25), logaritmen om een onbekende looptijd te vinden (module 26) en de somformule van een meetkundige rij (module 28). Nieuw is vooral de **financiële bril**: steeds de vraag welk bedrag op welk moment beschikbaar is, en tegen welke rente je het naar een ander moment verplaatst.

:::warning Rekenvoorbeelden, geen financieel advies
De percentages en bedragen in deze module zijn lesvoorbeelden. Echte producten hebben extra kosten, belastingen en voorwaarden. Waar we iets zeggen over Nederlandse regels, vermelden we het jaartal: regels en tarieven veranderen.
:::

## Wat je in deze module leert

{{ goals }}

## Kernbegrippen

{{ glossary }}
