# Successen tellen: de binomiale verdeling

Een **Bernoulli-proef**, genoemd naar Jakob Bernoulli, is de eenvoudigste kansproef die er bestaat: er zijn twee uitkomsten, succes met kans $p$ en mislukking met kans $1-p$. Het woord "succes" betekent hier niets meer dan "de categorie die je telt". Een defect product mag in het rekenmodel gerust een succes heten, ook al is het voor de fabrikant een mislukking.

Zo'n proef is op zichzelf niet spannend. Interessant wordt het wanneer je haar $n$ keer herhaalt en alleen telt hoe vaak het succes optrad. Dat aantal is zelf een kansvariabele, en de verdeling ervan is de **binomiale verdeling**.

:::definition Binomiaal model
$X\sim\operatorname{Bin}(n,p)$ telt het aantal successen in $n$ proeven. Daarvoor moet aan vier voorwaarden voldaan zijn:

1. het aantal proeven $n$ ligt vooraf vast;
2. elke proef heeft precies twee uitkomsten, succes en mislukking;
3. de succeskans $p$ is bij elke proef dezelfde;
4. de proeven zijn onafhankelijk van elkaar.

De mogelijke waarden van $X$ zijn $0,1,2,\ldots,n$.
:::

Je begint met de eerste vraag bij elk binomiaal probleem: welke waarden kan $X$ aannemen?

{{ exercise: 37-001 }}

## Van volgorde naar aantal

Waarom ziet de formule voor $P(X=k)$ eruit zoals ze eruitziet? Je kunt haar zelf afleiden. Neem $n=4$ worpen met een eerlijke munt en vraag naar twee keer kop. Eén bepaalde volgorde, bijvoorbeeld kop-kop-munt-munt, heeft door de onafhankelijkheid kans $p\cdot p\cdot(1-p)\cdot(1-p)=p^2(1-p)^2$. Elke andere volgorde met twee keer kop heeft precies dezelfde kans, want je vermenigvuldigt dezelfde factoren in een andere volgorde. Het enige wat dan nog resteert is tellen: op hoeveel manieren kun je de twee keer kop over de vier worpen verdelen?

Dat aantal is de binomiaalcoëfficiënt $\binom nk=\dfrac{n!}{k!\,(n-k)!}$, uitgesproken als "n boven k". Je kiest immers $k$ van de $n$ posities uit voor het succes. Samengevat:

$$
P(X=k)=\binom nk p^k(1-p)^{n-k},\qquad k=0,1,\ldots,n.
$$

Lees de formule als drie delen: het aantal manieren, de kans op de successen, en de kans op de mislukkingen.

:::example Vier muntworpen
Bij $n=4$ en $p=0{,}5$ is de kans op precies twee keer kop

$$
P(X=2)=\binom42(0{,}5)^2(0{,}5)^2=6\cdot\frac1{16}=0{,}375.
$$

De factor 6 telt de volgordes KKMM, KMKM, KMMK, MKKM, MKMK en MMKK. Zonder die factor bereken je alleen de kans op één specifieke volgorde, en dat is een veelgemaakte fout: je krijgt dan $1/16=0{,}0625$.
:::

De hele verdeling van dit voorbeeld past in één tabel. Controleer zelf dat de kansen samen 1 zijn.

| $k$ | 0 | 1 | 2 | 3 | 4 |
|---|---|---|---|---|---|
| $\binom4k$ | 1 | 4 | 6 | 4 | 1 |
| $P(X=k)$ | $\tfrac1{16}$ | $\tfrac4{16}$ | $\tfrac6{16}$ | $\tfrac4{16}$ | $\tfrac1{16}$ |

De getallen in de tweede rij kennen je misschien van de driehoek van Pascal. Dat is geen toeval: bij $p=\tfrac12$ is elke volgorde even waarschijnlijk, en de kansen zijn precies de rijen van die driehoek gedeeld door $2^n$.

{{ exercises: 37-002, 37-003, 37-004 }}

:::example Een ongelijke kans
Een machine maakt 5% afgekeurde onderdelen. Je pakt vijf onderdelen die je als onafhankelijk beschouwt. Wat is de kans op precies één afgekeurd onderdeel? Hier is $n=5$ en $p=0{,}05$, dus

$$
P(X=1)=\binom51(0{,}05)^1(0{,}95)^4=5\cdot0{,}05\cdot0{,}8145\ldots\approx0{,}2036.
$$

Merk op dat de kans op nul afgekeurde stuks, $0{,}95^5\approx0{,}7738$, veel groter is. Dat past bij het gevoel dat zo'n zeldzame afwijking in een kleine steekproef meestal niet voorkomt.
:::

Nu zelf rekenen met een succeskans die niet een half is.

{{ exercise: 37-021 }}

## Verwachting en spreiding

Het aantal successen is de som van $n$ onafhankelijke 0/1-variabelen: elke proef levert een 1 bij succes en een 0 bij mislukking. Zo'n 0/1-variabele heeft verwachting $p$ en variantie $p(1-p)$. In module 36 zag je dat verwachtingen en, bij onafhankelijkheid, varianties bij elkaar opgeteld mogen worden. Daaruit volgt direct:

$$
E(X)=np,\qquad \operatorname{Var}(X)=np(1-p),\qquad \sigma=\sqrt{np(1-p)}.
$$

Bij twintig proeven met $p=0{,}3$ verwacht je dus $20\cdot0{,}3=6$ successen, met variantie $20\cdot0{,}3\cdot0{,}7=4{,}2$. Zes is een verwachting, geen garantie: de werkelijke uitkomst ligt meestal binnen ongeveer twee standaardafwijkingen, hier ruwweg tussen twee en tien.

:::tip Hoe de spreiding zich gedraagt
De variantie $np(1-p)$ is het grootst bij $p=\tfrac12$ en klein als $p$ dicht bij 0 of 1 ligt. Dat is logisch: bij een bijna zekere gebeurtenis valt er weinig te variëren. Let ook op de schaal: als je $n$ verviervoudigt, wordt de verwachting vier keer zo groot, maar de standaardafwijking slechts twee keer zo groot. Relatief gezien wordt de uitkomst dus steeds voorspelbaarder; dat is het idee achter Bernoulli's wet van de grote aantallen.
:::

{{ exercises: 37-005, 37-006, 37-007 }}

:::example Een dobbelsteen tellen
Je gooit 150 keer met een eerlijke dobbelsteen en telt het aantal zessen. Dan is $X\sim\operatorname{Bin}(150;\tfrac16)$. De verwachting is $150\cdot\tfrac16=25$ en de variantie is $150\cdot\tfrac16\cdot\tfrac56\approx20{,}83$. De standaardafwijking is dus ongeveer $4{,}56$. Een uitkomst van 20 of 30 zessen is volkomen gewoon; pas bij 35 of meer zou je aan de dobbelsteen gaan twijfelen.
:::

{{ exercises: 37-025, 37-026 }}

## De voorwaarden zijn geen formaliteit

De formule werkt altijd feilloos, op het moment dat de vier voorwaarden kloppen. Het gevaar zit in het model, niet in de rekenkunde. Je loopt tegen de volgende valkuilen aan.

**Het aantal proeven ligt niet vast.** Als je gooit tot je een zes hebt, is $n$ zelf toevallig. Dan telt de variabele "het aantal worpen tot de eerste zes" en dat is geen binomiale maar een geometrische verdeling.

**De kans is niet constant.** Als de kans op succes na elke proef verandert, bijvoorbeeld omdat een machine slijt, is het binomiale model slechts een grove benadering.

**De proeven zijn afhankelijk.** Producten die uit dezelfde partij of van dezelfde slecht afgestelde machine komen, kunnen gezamenlijk een fout hebben. Dan treden defecten in clusters op, en de variatie in het aantal defecten is groter dan het binomiale model voorspelt.

:::warning Trekken zonder terugleggen
Trek je zonder terugleggen uit een kleine populatie, dan verandert de succeskans bij elke trekking en zijn de trekkingen afhankelijk. Uit een spel van 52 kaarten haal je vijf kaarten: de kans op een aas bij de tweede kaart hangt ervan af of de eerste een aas was. De juiste verdeling is dan de hypergeometrische. Pas als de populatie groot is ten opzichte van de steekproef, bijvoorbeeld als de steekproef minder dan ongeveer een tiende van de populatie beslaat, is het binomiale model een goede benadering.
:::

{{ exercise: 37-008 }}

Je oefent het herkennen nog eens met drie korte situaties.

{{ exercise: 37-027 }}

Voor meer formules en achtergrond kun je de [NIST-documentatie over de binomiale verdeling](https://www.itl.nist.gov/div898/handbook/eda/section3/eda366i.htm) raadplegen. De oefeningen in deze module gebruiken getallen die je zonder software kunt narekenen, al mag een rekenmachine met een toets voor $\binom nk$ je werk besparen.
