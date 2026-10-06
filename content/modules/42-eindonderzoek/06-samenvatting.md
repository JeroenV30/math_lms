# Samenvatting: van vraag naar navolgbare conclusie

Je hebt een echte dataset gecontroleerd, groepen beschreven, een verschil met een Welch-model onderzocht, een regressie geïnterpreteerd en gezien hoe een verband kan omkeren zodra je naar groepen kijkt. De conclusie die je trekt bevat zowel het resultaat als de grenzen die het ontwerp eraan stelt.

:::summary De onderzoekscyclus
Vraag formuleren → herkomst en codeboek begrijpen → datakwaliteit controleren → verkennen en visualiseren → passende analyse uitvoeren → effect en onzekerheid interpreteren → meerdere vragen corrigeren → conclusie schrijven → beperkingen benoemen → reproduceerbaar vastleggen → vervolgonderzoek ontwerpen.
:::

## De kernpunten per stap

**Vraag en hypothese (les 1).** Een onderzoeksvraag noemt populatie, grootheid en vergelijking. Beschrijvend gaat over het bestand, inferentieel over meer dan het bestand. Leg de primaire vraag vast vóór je de uitkomst bekijkt.

**Herkomst en data (les 2).** De Palmer Penguins-gegevens zijn veldmetingen van Gorman en collega's (2014), via Horst, Hill en Gorman (2020) beschikbaar als dataset. De bron bepaalt wat je mag generaliseren: dieren op drie eilanden in 2007–2009, geen wereldwijde steekproef. Een codeboek legt kolommen, eenheden en NA-codes vast. NA is geen nul. Selecteer per analyse en documenteer hoeveel rijen je gebruikte: 119 geldige gewichten, 52 Adélie, 41 Gentoo met gewicht en geslacht.

**Verkennen (les 3).** Samenvatting per soort en geslacht, boxplots, vijfgetallensamenvatting, de 1,5·IQR-regel en spreidingsdiagrammen. Een uitschieter controleer je; je verwijdert hem niet automatisch. Het totaalgemiddelde (4210,29 g) beschrijft een mengsel van soorten.

**Groepsvergelijking (les 4).** Voor Adélie is het verschil man min vrouw 660,58 g, $SE=94{,}84$ g, $t=6{,}965$, $\nu\approx45{,}42$, 95%-interval [469,61; 851,54] g, $d\approx1{,}93$. Rapporteer effect, interval, effectgrootte en model, niet alleen de p-waarde. Bij meerdere toetsen stijgt de kans op een vals alarm ($1-0{,}95^m$); corrigeer met Bonferroni ($\alpha/m$).

**Regressie en Simpson (les 5).** De Adélie-regressie is $\hat y=-3759{,}79+38{,}6548\,x$ met $R^2\approx0{,}256$ en restspreiding $s\approx414$ g. Een residu is waargenomen min voorspeld. Een naïeve helling kan door een verstorende variabele (geslacht, soort) groter of van teken veranderd zijn: bij snavellengte en -diepte is $r=-0{,}22$ over alle soorten maar positief binnen iedere soort. Regressie beschrijft samenhang, geen oorzaak.

**Rapporteren en reproduceren (les 7).** Een rapport volgt vraag, gegevens, methode, resultaten, discussie en reproduceerbaarheid. Vijf klassieke fouten: NA als nul, wereldwijd generaliseren, causaliteit uit observaties, Simpson negeren en achteraf variabelen kiezen.

## Wat de toets meet

De hoofdstuktoets controleert rekenkundige kernvaardigheden uit het onderzoek. Een behaalde toets betekent dat je die vragen correct kunt berekenen. Zij bewijst niet dat je onderzoeksrapport inhoudelijk goed is; gebruik daarvoor de rubric uit les 7 (de slotopdracht) en vergelijk je redenering met de modelantwoorden.

Je kunt eerdere onderwerpen blijven oefenen via [Oefenen](/practice) en [Herhalen](/review). Gebruik de [formulebibliotheek](/formulas) om een regel aan haar betekenis te koppelen en de [woordenlijst](/glossary) wanneer een begrip onduidelijk blijft.

## Tot slot

De reis van tellen naar statistisch redeneren eindigt niet met zekerheid over alles. Je kunt nu preciezer aangeven wat je weet, onder welke aannames je het weet en welke waarnemingen nog nodig zijn. Dat is geen zwakte van de wiskunde: het is wat een getal in een argument verandert. De acht schapen uit de eerste les zijn nog altijd acht; maar wat je mag concluderen uit een gemiddeld gewicht van pinguïns is een zaak van zorgvuldig denken, en die zorgvuldigheid is wat deze cursus je wilde meegeven.

{{ quiz }}
