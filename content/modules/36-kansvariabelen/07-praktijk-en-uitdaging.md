# Een model controleren voordat je ermee beslist

Een logistiek bedrijf wil het aantal beschadigde pakketten per dag modelleren.
Een verwachting van 1,1 beschadiging vertelt hoeveel schade het gemiddeld
moet begroten. De standaardafwijking geeft een andere vraag antwoord:
hoe sterk wisselt dat aantal tussen dagen? Voor de voorraad reserveproducten
heb je bovendien staartkansen nodig, bijvoorbeeld $P(X\ge3)$.

Een model dat alleen 0, 1 en 2 als waarden bevat, verklaart drie beschadigingen
per definitie onmogelijk. Dat is een sterke aanname. Controleer daarom de
historische gegevens en de capaciteit van het bedrijf voordat je zo'n
vereenvoudiging accepteert.

Het model uit les 2 en 3 geeft bij verwachting 1,1 en standaardafwijking 0,7 een
nette samenvatting. Maar een samenvatting is niet de verdeling. Twee modellen
met dezelfde $E(X)$ en $\sigma$ kunnen een heel verschillende staart hebben, en
de staart bepaalt hoeveel reserve je nodig hebt. Gebruik daarom
$E(X)$ en $\sigma_X$ voor een eerste indruk en de volledige verdeling als er iets op
het spel staat.

## Simulatie als controle

Gooi in de widget twee dobbelstenen en vergelijk de relatieve frequenties met
de theoretische kansen. De som 7 kan op zes manieren ontstaan, de som 2 op
één manier. Elke extra simulatie verandert de waargenomen frequenties, maar
niet de theoretische kansverdeling van het gekozen model.

{{ widget: dice dice=2 seed=36 }}

:::question Voor je op een knop drukt
Welke gemiddelde som verwacht je bij twee dobbelstenen? Eén dobbelsteen heeft
verwachting 3,5, dus de som heeft verwachting 7. Die optelling vraagt geen
onafhankelijkheid; het optellen van de varianties wel.
:::

Let bij de simulatie op twee dingen. Bij weinig worpen kan de relatieve
frequentie van een som flink van de theoretische kans afwijken. Dat is geen
fout in het model: het is precies wat de wortel-$n$-wet voorspelt. De
standaardafwijking van een relatieve frequentie bij $n$ worpen is
$\sqrt{p(1-p)/n}$, dus voor de som 7 ($p=1/6$) is die na 100 worpen ongeveer
$0{,}037$ en na 10.000 worpen $0{,}0037$. Tien keer zoveel nauwkeurigheid kost
honderd keer zoveel worpen. Verder: het gemiddelde van de worpen nadert 7, maar
de *som* van de worpen drijft steeds verder van $7n$ weg in absolute zin.

## Verzekeren en de wet van de grote aantallen

Een verzekeraar verkoopt polissen die elk met kans 0,1 een schade van € 1.000
veroorzaken en anders niets. Per polis is de verwachte schade € 100 en is
$\operatorname{Var}=1000^2\cdot0{,}1\cdot0{,}9=90.000$, dus de standaardafwijking
is € 300. Dat is driemaal de verwachte schade: voor één klant is dit erg
onzeker. Neem een premie van € 110 en een portefeuille van $n$ onafhankelijke
polissen. De totale schade heeft verwachting $100n$ en standaardafwijking
$300\sqrt n$. De verwachte winst is $10n$. De verhouding tussen verwachte winst
en spreiding is
$$
\frac{10n}{300\sqrt n}=\frac{\sqrt n}{30}.
$$
Bij $n=100$ is dat $1/3$, bij $n=900$ is dat 1, bij $n=10.000$ is dat
$3\tfrac13$. Naarmate de portefeuille groeit, wordt de winst steeds
zekerder ten opzichte van de schommelingen. Dit is het bedrijfsmodel van een
verzekeraar: de risico's van individuele klanten zijn groot, maar het totaal is
voorspelbaar. Het werkt alleen als de polissen onafhankelijk zijn. Bij een
overstroming, waarbij alle polissen in dezelfde regio tegelijk schade
claimen, is de onafhankelijkheid weg en vervalt de $\sqrt n$-winst.

:::example Een loterij beoordelen
Een goed doel verkoopt 1.000 loten van € 1. Er is één prijs van € 500. Een lot
heeft dus verwachte uitbetaling $500\cdot\tfrac1{1000}=0{,}50$ euro en verwachte
nettowinst voor de koper van € −0,50. Voor de organisator is het omgekeerd: bij
alle 1.000 loten verwacht hij € 500 over te houden. Het spel is voor de koper
oneerlijk in de zin van Huygens, maar dat is bij een goed doel bedoeld. Het
risico voor de koper is klein: de maximale nettowinst is € 499, met kans 0,001,
en het maximale verlies is € 1.
:::

## Fouten die je steeds ziet

De rekenregels in deze module worden vaak verkeerd toegepast. Vijf fouten komen
telkens terug.

De eerste is $\operatorname{Var}(X-Y)=\operatorname{Var}(X)-\operatorname{Var}(Y)$.
Bij onafhankelijke variabelen is het juist de *som* van de varianties: aftrekken
maakt een uitkomst niet zekerder. De tweede is $\operatorname{Var}(aX)=a\operatorname{Var}(X)$.
De variantie is een kwadraat en wordt dus met $a^2$ vermenigvuldigd; alleen de
standaardafwijking schaalt met $|a|$. De derde is $E(X^2)=[E(X)]^2$. Het
verschil tussen die twee is juist de variantie, dus ze zijn alleen gelijk als
de variantie nul is. De vierde is een kansentabel waarvan de kansen niet op 1
uitkomen, of een kans buiten $[0;1]$. De vijfde is $P(X=a)>0$ bij een continue
variabele, of $f(a)$ lezen als een kans. Bij elke rekenopgave helpt een
snelle controle op deze vijf punten.

{{ exercises: 36-044 }}

## Uitdaging: een eerlijke prijs bepalen

Een spel betaalt verschillende netto-uitkomsten met verschillende kansen.
Formuleer eerst de verwachtingswaarde en los dan op voor de onbekende kans.
Controleer na afloop of je kans tussen 0 en 1 ligt.

{{ exercise: 36-020 }}

Een verwachte waarde van nul betekent dat het spel in deze rekenkundige zin
eerlijk is. De deelnemer kan nog steeds veel risico lopen. In de volgende
module gebruik je bekende verdelingsfamilies om dat risico preciezer te beschrijven.

Een tweede uitdaging combineert de rekenregels. Je gooit drie dobbelstenen en
neemt het gemiddelde van de ogen. Wat is de standaardafwijking van dat gemiddelde?
Je vindt haar in drie stappen: de variantie van één worp, daarna die van de
som van drie onafhankelijke worpen, en dan de schaalregel voor het delen door 3.

{{ exercise: 36-043 }}
