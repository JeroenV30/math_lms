# Samenhang onderzoeken: regressie en het paradoxale verband

Een groepsvergelijking beantwoordt de vraag "hoeveel verschillen twee groepen?". Een regressie beantwoordt een andere vraag: "hoe verandert de ene grootheid gemiddeld met de andere?". In module 40 leerde je de kleinste-kwadratenlijn, de correlatiecoëfficiënt en R². Hier pas je die toe op de verkennende vraag van dit hoofdstuk en je ontdekt hoe gemakkelijk een regressie je op het verkeerde been zet als je niet let op groepen in je gegevens.

## De regressie voor Adélie

Selecteer de 52 Adélie-dieren met geldige vleugellengte en gewicht. Teken een spreidingsdiagram met vleugellengte op de horizontale en gewicht op de verticale as, en markeer het geslacht als dat mogelijk is. Kijk naar afzonderlijke groepen, kromming en afwijkende punten *voordat* je de lijn berekent.

De eenvoudige lineaire regressie over deze 52 dieren luidt ongeveer

$$
\widehat{\text{gewicht}}=-3759{,}79+38{,}6548\cdot\text{vleugellengte}.
$$

De helling heeft eenheid g/mm: gemiddeld hoort een 1 mm langere flipper bij een ruim 38,65 g zwaarder dier. Het intercept hoort bij een vleugellengte van nul, ver buiten het gemeten bereik (176 tot 210 mm), en heeft hier geen biologische betekenis; het is een rekenhulpmiddel dat de lijn op de goede hoogte zet.

Je kunt de lijn zelf onderzoeken in de widget hieronder, waarin alle 52 Adélie-dieren staan. Om de assen leesbaar te houden zijn de metingen verschoven en herschaald: de horizontale as toont vleugellengte *min 170 mm*, de verticale as gewicht *in kilogram*. Daardoor staat een flipper van 192 mm op $x=22$ en een dier van 3725 g op $y=3{,}725$. Correlatie en R² veranderen niet door zo'n lineaire omrekening; de helling wel: 38,65 g/mm wordt 0,0387 kg/mm en het intercept verandert mee.

{{ widget: regression points="(22;3.725) (33;4.725) (13;3.075) (20;4.25) (23;2.925) (14;3.55) (29;3.75) (20;3.9) (11;3.175) (27;4.775) (28;3.825) (21;4.6) (23;3.2) (27;4.275) (21;3.9) (26;4.075) (18;2.9) (29;3.775) (19;3.35) (19;3.325) (17;3.15) (28;3.5) (6;3.45) (32;3.875) (16;3.05) (29;4) (21;3.275) (25;4.3) (21;3.05) (40;4) (20;3.325) (27;3.5) (23;3.5) (29;4.475) (17;3.425) (20;3.9) (21;3.175) (30;3.975) (15;3.4) (23;4.25) (23;3.4) (17;3.475) (18;3.05) (20;3.725) (22;3) (15;3.65) (20;4.25) (14;3.475) (25;3.45) (23;3.75) (17;3.7) (31;4)" xmax="40" ymax="5" }}

{{ exercise: 42-016 }}

:::example Voorspellen en het residu
Bij een vleugellengte van 191 mm voorspelt het model

$$
\hat y=-3759{,}7924+38{,}6548\cdot191\approx 3623{,}28\ \text{g}.
$$

Het dier met id 12 heeft precies die vleugellengte en weegt 4600 g. Het **residu** is waargenomen min voorspeld:

$$
e=y-\hat y=4600-3623{,}28=976{,}72\ \text{g}.
$$

Een positief residu betekent dat het dier zwaarder is dan het model voorspelt. Dit is het grootste residu van alle 52 dieren. Een ander dier (id 38) heeft 200 mm en 3975 g; het model voorspelt 3971,17 g, dus het residu is slechts 3,83 g.
:::

{{ exercises: 42-036, 42-037 }}

## Residuen en R²

De residuen vertellen hoe goed de lijn past. Ze sommeren altijd tot nul (dat volgt uit de manier waarop de kleinste-kwadratenlijn is gekozen) en hun kwadratensom is de **restkwadratensom**,

$$
SSE=\sum_i e_i^2\approx 8\,572\,983{,}6\ \text{g}^2.
$$

Dat getal begrijp je pas in verhouding. De totale kwadratensom van de gewichten rond hun gemiddelde (3664,90 g) is $SST=\sum(y_i-\bar y)^2\approx 11\,519\,074{,}5$ g². De lijn verklaart het verschil:

$$
R^2=1-\frac{SSE}{SST}=1-\frac{8\,572\,983{,}6}{11\,519\,074{,}5}\approx 0{,}2558.
$$

Hetzelfde getal volgt uit $r^2$ met $r\approx 0{,}506$. De lijn verklaart dus ongeveer 25,6% van de gekwadrateerde gewichtsvariatie in deze selectie. Dat is geen claim dat vleugellengte 25,6% van het gewicht veroorzaakt: geslacht en lichaamsbouw kunnen beide metingen beïnvloeden.

Een directere maat voor de precisie van voorspellingen is de **restspreiding** (de standaardafwijking van de residuen):

$$
s=\sqrt{\frac{SSE}{n-2}}=\sqrt{\frac{8\,572\,983{,}6}{50}}\approx 414{,}08\ \text{g}.
$$

We delen door $n-2$ omdat voor de lijn twee getallen uit de gegevens zijn geschat. Een voorspelling van het gewicht uit de flipperlengte is dus gemiddeld ongeveer 414 g ernaast, een foutenmarge die vergelijkbaar is met de standaardafwijking van het gewicht zelf (475 g). Dat is geen indrukwekkende winst en past bij een R² van een kwart.

{{ exercises: 42-017, 42-040 }}

## Onzekerheid in de helling

De helling van 38,65 g/mm is een schatting uit 52 dieren. In het klassieke regressiemodel (module 40) heeft zij een standaardfout

$$
SE(b_1)=\frac{s}{\sqrt{\sum(x_i-\bar x)^2}}=\frac{414{,}08}{\sqrt{1971{,}69}}\approx 9{,}325\ \text{g/mm},
$$

en de toetsgrootheid voor $H_0:\beta_1=0$ is $t=b_1/SE(b_1)\approx 4{,}145$ met $n-2=50$ vrijheidsgraden (p ongeveer $1{,}3\cdot10^{-4}$). Een 95%-interval voor de populatiehelling is $b_1\pm t_{0{,}975;50}\cdot SE(b_1)=38{,}65\pm2{,}0086\cdot9{,}325$, ongeveer 19,92 tot 57,39 g/mm.

Het interval is breed: het zegt dat de helling ergens tussen ruwweg 20 en 57 g/mm kan liggen. Dat is niet vreemd bij een R² van 0,26 en 52 dieren. Het model veronderstelt bovendien onafhankelijke dieren, een lineair verband en een ongeveer constante restspreiding. Dat laatste kun je controleren met een residuenplot (residu tegen voorspelde waarde): zie je een trechter of een boog, dan klopt het model niet.

{{ exercises: 42-038, 42-039 }}

:::warning Extrapoleren
De lijn is bepaald met vleugellengtes van 176 tot 210 mm. Voorspellingen buiten dat gebied, bijvoorbeeld bij 150 mm (het model geeft dan ongeveer 2038 g), steunen op de aanname dat het lineaire verband ook daar blijft gelden. Daar bestaat in de gegevens geen enkele aanwijzing voor.
:::

{{ exercises: 42-041, 42-018 }}

## Verstoorders: de rol van geslacht

Wat gebeurt er met de helling als je geslacht in rekening brengt? Mannen zijn gemiddeld zowel zwaarder (3995 g tegen 3335 g) als langer van flipper (194,8 mm tegen 189,3 mm). Een deel van de samenhang over alle 52 dieren komt dus doordat de twee groepen in beide metingen verschillen. Regressie per geslacht geeft:

| Groep | n | Helling (g/mm) | r |
|---|---|---|---|
| alle Adélie | 52 | 38,65 | 0,506 |
| mannen | 26 | 20,92 | 0,327 |
| vrouwen | 26 | 15,00 | 0,270 |

Binnen elk geslacht is het verband duidelijk zwakker. De gemeenschappelijke binnen-groephelling (de kleinste-kwadratenhelling na het wegnemen van de groepsgemiddelden) is ongeveer 18,51 g/mm: ruim de helft minder dan de helling over alles heen. Het grootste deel van de naïeve helling weerspiegelt dus het verschil tussen mannen en vrouwen en niet het verband tussen flipperlengte en gewicht binnen een geslacht. Geslacht is hier een **verstorende variabele** (*confounder*): zij beïnvloedt beide grootheden en vervuilt daarmee de gemeten samenhang.

{{ exercise: 42-043 }}

## Simpsons paradox: een verband dat omkeert

Het effect van een verstoorder is soms niet alleen een zwakkere helling, maar een helling met een *ander teken*. Dat heet **Simpsons paradox**. De dataset bevat daar een lerend voorbeeld van: de relatie tussen snavellengte en snaveldiepte.

Neem alle 119 dieren met geldige metingen, en regresseer snaveldiepte (hoogte) op snavellengte. Je krijgt een **negatieve** helling: dieren met een langere snavel hebben gemiddeld een minder diepe snavel. Kijk je binnen elke soort apart, dan is het verband bij alle drie **positief**:

| Groep | n | Helling (mm/mm) | r | R² |
|---|---|---|---|---|
| alle soorten samen | 119 | −0,0709 | −0,224 | 0,050 |
| Adélie | 52 | 0,2152 | 0,444 | 0,197 |
| Chinstrap | 24 | 0,2037 | 0,575 | 0,331 |
| Gentoo | 43 | 0,1946 | 0,637 | 0,406 |

Hoe kan dat? De gemiddelden verklaren het. Adélie heeft een korte, diepe snavel (gemiddeld 38,98 mm lang en 18,10 mm diep). Chinstrap heeft een lange, diepe snavel (49,05 mm; 18,33 mm). Gentoo heeft een lange, *ondiepe* snavel (48,50 mm; 15,28 mm). Als je de soorten door elkaar gooit, is de langere snavel gemiddeld die van Chinstrap en Gentoo, en bij Gentoo hoort een ondiepere snavel. Over alles heen daalt de diepte dus met de lengte, terwijl binnen iedere soort een langere snavel juist een diepere snavel met zich meebrengt. De gemeenschappelijke binnen-soorthelling is ongeveer 0,204 mm per mm.

:::definition Simpsons paradox
Een verband tussen twee variabelen in een samengestelde populatie kan verdwijnen of van teken omkeren zodra je naar de deelgroepen kijkt. De oorzaak is een groepsvariabele die met beide variabelen samenhangt. Geen van beide analyses is "fout": ze beantwoorden verschillende vragen. De vraag "wat gebeurt er binnen een soort?" vraagt om de groepsgewijze analyse; de vraag "hoe verhouden de soorten zich?" om de totale. Het paradoxale zit in de interpretatie die je er ten onrechte aan verbindt.
:::

Het paradoxale van dit voorbeeld is niet het getal, maar de conclusie die je eruit zou trekken. Wie alleen de totale lijn gebruikt, concludeert "een langere snavel gaat samen met een minder diepe snavel" en zou dat als biologische regel opschrijven. Dat is voor geen enkele soort waar. Welke analyse de juiste is, hangt af van je vraag en van wat je weet over de oorzaken, en dat is niet uit de getallen alleen te halen. Daarom heb je in het ontwerp van een onderzoek voorkennis nodig: een variabele als soort moet je al vóór de analyse als mogelijke verstoorder identificeren, niet erna.

:::tip Hetzelfde patroon bij flipper en gewicht
Over alle soorten samen is de correlatie tussen vleugellengte en gewicht 0,891, de helling 53,6 g/mm. Binnen soorten zijn de correlaties 0,506 (Adélie), 0,747 (Chinstrap) en 0,689 (Gentoo) en de hellingen 38,7, 35,6 en 42,3 g/mm. Hier keert het teken niet om, maar het totaalverband is wel veel sterker dan het binnen-soortverband. Dat is een mildere vorm van hetzelfde mechanisme: de groepen liggen elk op een andere plek, en die verschillen versterken de samenhang.
:::

{{ exercise: 42-042 }}
