# Verkennen: kijk eerst, toets daarna

In 1977 verscheen *Exploratory Data Analysis* van John W. Tukey, een boek dat een houding verwoordde: kijk eerst naar je gegevens, met eenvoudige, robuuste hulpmiddelen, en laat de gegevens je vertellen welke vragen de moeite waard zijn. Tukey voerde in dat boek onder andere het stam-en-bladdiagram en de boxplot in. Wat hij vooral wilde was dat een analist niet blind een toets uitvoert, maar eerst weet hoe de gegevens eruitzien: scheef of symmetrisch, met of zonder uitschieters, één groep of twee. Dat is precies wat deze les doet, met de beschrijvende statistiek uit module 24.

## Samenvatten per soort en geslacht

Het gemiddelde gewicht van alle 119 gewogen dieren is 4210,29 g, de mediaan is 4000 g en de standaardafwijking is 822,91 g. Dat zijn correcte getallen, maar ze beschrijven geen enkele pinguïn goed. De spreiding van 823 g is groot, omdat je drie soorten en twee geslachten door elkaar hebt gegooid. Splits daarom eerst in groepen die inhoudelijk zinvol zijn:

| Soort | Geslacht | n | Gemiddelde (g) | s (g) | Mediaan (g) |
|---|---|---|---|---|---|
| Adélie | man | 26 | 3995,19 | 392,49 | 3987,5 |
| Adélie | vrouw | 26 | 3334,62 | 282,50 | 3337,5 |
| Chinstrap | man | 12 | 3927,08 | 330,88 | 3975,0 |
| Chinstrap | vrouw | 12 | 3522,92 | 171,05 | 3562,5 |
| Gentoo | man | 21 | 5510,71 | 249,82 | 5500,0 |
| Gentoo | vrouw | 20 | 4786,25 | 186,29 | 4800,0 |

Drie dingen vallen op. Ten eerste zijn bij alle drie de soorten de mannen gemiddeld zwaarder dan de vrouwen: dat is het verschil waar de primaire vraag over gaat, en je ziet het hier al voordat je iets toetst. Ten tweede verschillen de soorten onderling meer dan de geslachten binnen een soort: Gentoo-vrouwen zijn gemiddeld zwaarder dan de mannen van de andere twee soorten. Ten derde is de spreiding binnen een groep (rond de 170 tot 390 g) veel kleiner dan de spreiding van het totaal (823 g). Ook dat is een aanwijzing dat het gemengde totaal niet de goede beschrijvende eenheid is.

Een tweede observatie betreft de soort en het eiland. In de gegevens van 2009 zijn alle 24 Chinstrap-dieren op Dream gemeten en alle 44 Gentoo's op Biscoe. Alleen de Adélie's komen op alle drie de eilanden voor (16 op Biscoe, 20 op Dream, 16 op Torgersen). Binnen Chinstrap en Gentoo is "eiland" dus niet te scheiden van "soort", en een vergelijking van eilanden is alleen binnen Adélie zinvol. Zo'n verstrengeling van twee variabelen heet **confounding**; je ziet haar in de tabel voordat je hebt gerekend.

{{ exercises: 42-007, 42-008 }}

## Boxplot en vijfgetallensamenvatting

De vijfgetallensamenvatting (minimum, $Q_1$, mediaan, $Q_3$, maximum) uit module 24 is een compacte beschrijving die niet gevoelig is voor extreme waarden. De box loopt van $Q_1$ tot $Q_3$ en bevat de middelste helft van de gegevens; de **interkwartielafstand** is $\text{IQR}=Q_3-Q_1$. De kwartielen worden hier berekend als medianen van de onderste en de bovenste helft van de geordende gegevens, bij een oneven aantal zonder de middelste waarde. Dat is dezelfde afspraak als in de widget hieronder.

Dit zijn de 26 gewichten van de Adélie-mannen, in gram. Verander een waarde en kijk wat de box doet. Controleer vooral of de kwartielen die de widget toont gelijk zijn aan wat je zelf met de hand vindt.

{{ widget: boxplot values="4725; 4250; 3550; 3900; 4775; 4600; 4275; 4075; 3775; 3325; 3500; 3875; 4000; 4300; 4000; 3500; 4475; 3900; 3975; 4250; 3475; 3725; 3650; 4250; 3750; 4000" }}

En de 26 Adélie-vrouwen:

{{ widget: boxplot values="3725; 3075; 2925; 3750; 3175; 3825; 3200; 3900; 2900; 3350; 3150; 3450; 3050; 3275; 3050; 3325; 3500; 3425; 3175; 3400; 3400; 3050; 3000; 3475; 3450; 3700" }}

De twee dozen overlappen elkaar nauwelijks: de bovenkwartiel van de vrouwen (3475 g) ligt onder de benedenkwartiel van de mannen (3725 g). Dat is een visuele aanwijzing voor een verschil dat groter is dan wat je alleen van toeval zou verwachten, een gevoel dat je in les 4 kwantificeert.

:::example De 1,5·IQR-regel voor uitschieters
Voor de Adélie-vrouwen is $Q_1=3075$ g, $Q_3=3475$ g, dus $\text{IQR}=3475-3075=400$ g. De grenzen van de regel zijn

$$
Q_1-1{,}5\cdot\text{IQR}=3075-600=2475\ \text{g},\qquad Q_3+1{,}5\cdot\text{IQR}=3475+600=4075\ \text{g}.
$$

De kleinste Adélie-vrouw weegt 2900 g en de zwaarste 3900 g, beide binnen de grenzen. Er zijn dus geen uitschieters volgens deze regel. Bij de Chinstrap-mannen is $Q_1=3787{,}5$ g, $Q_3=4075$ g en dus $\text{IQR}=287{,}5$ g; de ondergrens is $3787{,}5-431{,}25=3356{,}25$ g. Eén dier weegt 3250 g en valt daaronder: dat is een **kandidaat-uitschieter**. Het is geen reden om het dier te verwijderen. Het is een reden om te vragen waarom: een jong dier? Een meetfout? Of gewoon een lichter mannetje, zoals je er bij 12 dieren af en toe één verwacht?
:::

De regel markeert in deze dataset slechts twee waarden: het genoemde Chinstrap-mannetje van 3250 g en een Gentoo-mannetje van 4925 g (de ondergrens is $5375-375=5000$ g). Alle andere zes groepen bevatten niets verdachts. Beide dieren blijven in de analyses van dit hoofdstuk staan; zij zijn geen onderdeel van de Adélie-vergelijking en zouden die dus ook niet beïnvloeden. Dat is precies het soort beslissing dat je in je rapport vastlegt: *wat is gecontroleerd, wat is besloten en waarom*.

{{ exercises: 42-025, 42-026, 42-027 }}

## Dotplot en gemiddelde

Een boxplot vat samen; een stippendiagram toont elk dier. Voor 26 dieren is dat nog te overzien en je ziet dingen die een samenvatting verbergt, zoals clusters of gaten. Hier de 26 Adélie-vrouwen met gemiddelde en mediaan:

{{ widget: stats values="3725; 3075; 2925; 3750; 3175; 3825; 3200; 3900; 2900; 3350; 3150; 3450; 3050; 3275; 3050; 3325; 3500; 3425; 3175; 3400; 3400; 3050; 3000; 3475; 3450; 3700" }}

Gemiddelde (3334,62 g) en mediaan (3337,5 g) liggen vrijwel op elkaar. Dat past bij een ruwweg symmetrische verdeling zonder uitschieters, en dat is een voorwaarde waar de t-methodes uit module 39 gevoelig voor zijn. Bij 26 dieren per groep zijn die methodes bovendien tamelijk tolerant voor kleine afwijkingen van symmetrie (module 38, centrale limietstelling), maar bij 12 dieren per groep, zoals bij Chinstrap, ben je daar voorzichtiger mee.

## Spreidingsdiagrammen: twee variabelen tegelijk

Een spreidingsdiagram toont per dier twee metingen. Zet je vleugellengte op de horizontale as en lichaamsgewicht op de verticale as voor alle 119 dieren, dan zie je drie wolken: Adélie linksonder, Chinstrap in het midden, Gentoo rechtsboven. De correlatie over alle soorten samen is $r=0{,}891$. Binnen de afzonderlijke soorten is het verband zwakker: $r=0{,}506$ voor Adélie, $0{,}747$ voor Chinstrap en $0{,}689$ voor Gentoo. Het grote verband over alles heen komt dus voor een belangrijk deel doordat de soorten van elkaar verschillen, en niet doordat binnen een soort een langere flipper steeds met een zwaarder dier gepaard gaat. In les 5 wordt dit onderscheid de kern van het verhaal.

:::tip Vaste verkenningsvolgorde
Kijk per variabele naar een verdeling (histogram, stippendiagram of boxplot), per groep naar een samenvatting, en per paar variabelen naar een spreidingsdiagram. Markeer in dat diagram groepen (soort, geslacht) met kleur of symbool. Pas daarna kies je een toets of model, en je legt de keuze vast vóórdat je de uitkomst ziet.
:::

{{ exercises: 42-028 }}
