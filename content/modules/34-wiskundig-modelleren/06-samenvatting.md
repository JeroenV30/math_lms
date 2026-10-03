# Samenvatting

:::summary Wiskundig modelleren in één oogopslag
- **Model.** Een vereenvoudigde wiskundige beschrijving van de werkelijkheid, gemaakt voor een doel. Een model is niet waar of onwaar, maar meer of minder bruikbaar, binnen een geldigheidsgebied.
- **Modelleercyclus.** Probleem → vereenvoudigen (aannames, variabelen, parameters) → wiskundig model → oplossen → interpreteren → valideren → bijstellen. Meestal doorloop je de cyclus meerdere keren.
- **Variabelen en parameters.** Variabelen veranderen binnen één toepassing ($x$, $t$); parameters liggen per situatie vast (instaptarief, halveringstijd, groeifactor).
- **Dimensieanalyse.** Links en rechts dezelfde eenheid; alleen gelijke eenheden optellen; exponenten en logaritmen krijgen getallen zonder eenheid. Reken eerst om (km/h : 3,6 = m/s), dan invullen.
- **Modeltype uit data.** Constante verschillen → lineair; constante tweede verschillen → kwadratisch; constante quotiënten → exponentieel; vaste herhaling → periodiek.
- **Modeltype uit mechanisme.** Vaste hoeveelheid per eenheid → lineair; kwadraat van een grootheid (energie, oppervlak) → kwadratisch; verandering evenredig met hoeveelheid → exponentieel; herhalende oorzaak → periodiek; exponentieel met plafond → logistisch.
- **Fitten met twee punten.** Lineair: $a = \frac{y_2 - y_1}{x_2 - x_1}$, $b = y_1 - a x_1$. Exponentieel: $g = (N_2/N_1)^{1/(t_2 - t_1)}$. Twee punten passen altijd; ze valideren niets.
- **Regressie.** Kies de parameters die de som van de gekwadrateerde residuen minimaliseren (details in module 40). Residu = meting − model.
- **Casussen.** Taxi: $K = b + ax$. Stopafstand: $s = v t_r + \frac{v^2}{2a}$ (dubbele snelheid, vier keer de remafstand). Medicijn: $N = N_0 \cdot 0{,}5^{t/T_h}$. Daglengte: $D = d + A\sin\left(\frac{2\pi}{365}(t - c)\right)$. Epidemie: eerst $N_0 \cdot 2^{t/T_d}$, daarna logistisch met snelste groei bij $N = K/2$.
- **Validatie.** Toets met nieuwe gegevens, zoek patronen in de residuen, vergelijk de fout met de eis en de meetnauwkeurigheid, en controleer op onzinnige uitkomsten.
- **Extrapolatie.** Buiten het gebied van de gegevens kan het mechanisme veranderen en groeien fouten; lineaire en exponentiële modellen die nu gelijk lopen, kunnen later ver uiteenlopen.
- **Fermi-schatting.** Splits op in factoren die je kunt schatten, controleer de eenheden en geef een orde van grootte.
:::

## Wat je nu moet beheersen

Controleer voor jezelf of je het volgende kunt:

1. Bij een contextprobleem de zeven stappen van de modelleercyclus benoemen en je aannames expliciet opschrijven.
2. In een gegeven formule aanwijzen wat variabelen en wat parameters zijn, en wat elk getal met eenheid betekent.
3. Een formule dimensioneel controleren en grootheden omrekenen naar passende eenheden, en met dimensieanalyse de exponenten in een eenvoudige machtsformule vinden.
4. Aan een tabel en aan het mechanisme zien welk modeltype past, en uitleggen waarom.
5. Een lineair, kwadratisch (door de oorsprong) of exponentieel model opstellen uit twee punten, en een regressielijn met residuen interpreteren.
6. De vijf casussen zelfstandig doorrekenen: taxitarief (ook terugrekenen), stopafstand (met omrekenen), medicijnafbraak (met halveringstijd), daglengte (sinus in radialen) en de beginfase van een epidemie.
7. Uitleggen waarom extrapoleren riskant is, en een model valideren met nieuwe gegevens en de gemiddelde absolute afwijking.
8. Een Fermi-schatting opzetten en het antwoord als orde van grootte interpreteren.
9. Vertellen wat Kepler, Newton, Malthus, Verhulst en Van Dantzig aan het modelleren hebben bijgedragen, en wat Box bedoelde met "all models are wrong, but some are useful".

## Historische lijn

| Tijd | Plaats | Wat |
|---|---|---|
| 1600–1601 | Praag | Kepler werkt met Tycho Brahe; na Tycho's dood erft hij diens metingen |
| 1609 | Heidelberg | Kepler, *Astronomia Nova*: ellipsbanen en de perkenwet |
| 1619 | Linz | Kepler, *Harmonices Mundi*: $T^2 = a^3$ |
| 1687 | Londen | Newton, *Principia*: Keplers wetten afgeleid uit de zwaartekracht |
| 1798 | Engeland | Malthus, *An Essay on the Principle of Population* (anoniem) |
| 1805–1809 | Parijs, Göttingen | Legendre en Gauss publiceren de kleinste-kwadratenmethode |
| 1838 | Brussel | Verhulst stelt het logistische groeimodel voor (naam in 1845) |
| 1920 | Baltimore | Pearl en Reed herontdekken de logistische kromme |
| 1927 | Edinburgh | Kermack en McKendrick: het SIR-model voor epidemieën |
| 1945 | New Mexico | Fermi schat de kracht van de eerste kernproef met papiersnippers |
| 1953 | Nederland | Watersnoodramp; instelling van de Deltacommissie |
| 1956 | | Van Dantzig, *Economic decision problems for flood prevention* |
| 1976–1987 | | Box: "all models are wrong", in 1979 met "but some are useful" |

## Vooruitblik

In **module 35** (data-analyse) en in het statistische deel van de cursus ga je modellen fitten aan gegevens met toevalsvariatie. Dan wordt de vraag niet alleen "past het model?", maar ook "hoe zeker weet ik dat?". In **module 40** leer je de regressielijn zelf uitrekenen en beoordelen met $r$ en $R^2$.

Ben je klaar? Maak dan de hoofdstuktoets. Je hebt 70% nodig om de module af te ronden en 85% voor "beheerst".

{{ quiz }}
