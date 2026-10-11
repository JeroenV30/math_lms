# Toepassen en kritisch redeneren

In de eerdere lessen leerde je de onderdelen: ontwerp, standaardfout, interval,
steekproefgrootte. Nu zet je ze in een volgorde zoals ze in een echt onderzoek
voorkomen. Het is dezelfde volgorde als bij een goed meetplan: eerst wie je
wilt beschrijven en hoe je hen bereikt, dan hoeveel je er nodig hebt, daarna pas de
berekening, en tot slot de kritische blik op wat de berekening wel en niet zegt.

## Een meetplan vóór de eerste meting

Je wilt de gemiddelde reistijd van een opleiding schatten met maximaal
1,5 minuut foutmarge. Een eerdere, vergelijkbare meting geeft als voorlopige
populatiespreiding 18 minuten. Je kunt hiermee een eerste steekproefomvang
berekenen, maar de herkomst van die spreidingsschatting blijft een aanname.

:::example Van marge naar steekproefomvang
De gegevens: $\sigma=18$, gewenste marge $E=1{,}5$, 95% dekking dus $z^*=1{,}96$.

Stap 1: $z^*\sigma/E=1{,}96\cdot18/1{,}5=35{,}28/1{,}5=23{,}52$.
Stap 2: $n\ge23{,}52^2=553{,}19$.
Stap 3: naar boven afronden geeft $n=554$.

Het getal 554 is een ondergrens voor het aantal *geldige* metingen.
:::

{{ exercise: 38-020 }}

## Wat de berekende omvang nog niet oplost

De formule veronderstelt onafhankelijke metingen en een passende verdeling
van het gemiddelde. Je moet ook rekening houden met non-respons, een bruikbare
selectielijst en eventuele groepen die je afzonderlijk wilt beschrijven.
Wie 554 geldige antwoorden nodig heeft en 50% respons verwacht, moet mogelijk
meer dan duizend personen benaderen: $554/0{,}5=1108$. Die verwachting geeft geen garantie, en
belangrijker: de non-respons zelf vertekent de uitkomst wanneer wie niet reageert
anders is dan wie wel reageert. Meer personen benaderen verkleint de toevalsfout,
niet die vertekening.

:::practice Schrijf je plan op
Beschrijf de doelgroep, de selectie, de eenheid, het beoogde interval, de
verwachte uitval en de manier waarop je ontbrekende antwoorden behandelt.
Maak duidelijk welke delen uit gegevens komen en welke delen aannames zijn.
:::

## Een rapport lezen met een kritisch oog

Een goed gelezen onderzoeksverslag beantwoordt zes vragen. Wat is de doelpopulatie? Uit
welk kader is getrokken? Hoe: aselect, gestratificeerd, vrijwillig? Hoeveel is
benaderd en hoeveel heeft gereageerd? Is het getal met een foutmarge of interval
gerapporteerd, en onder welke aannames is dat berekend? En beantwoordt de meting
wel de vraag die gesteld is? Ontbreekt een van de antwoorden, dan is dat zelf informatie
over de kwaliteit.

:::example Een krantenbericht beoordelen
Een krant meldt: "Uit een enquête onder 2000 lezers die via de website
meededen, blijkt dat 72% de nieuwe regeling afwijst (marge 2 procentpunt)."

De marge is met de formule berekend: bij $n=2000$ en $p=0{,}72$ geldt
$m=1{,}96\sqrt{0{,}72\cdot0{,}28/2000}\approx0{,}020$. De rekenkunde klopt. Maar de lezers die via
de website meedoen zijn een vrijwillige steekproef van mensen die deze krant lezen,
een bijzondere groep, en die zich bovendien zelf hebben aangemeld. De
marge beschrijft alleen het toeval bij loting en zegt niets over deze selectie.
De uitspraak geldt hooguit voor "de mensen die op deze website hebben gereageerd".
:::

## Zelfstandig toepassen

{{ exercise: 38-039 }}

{{ exercise: 38-040 }}

Een nauw interval is pas overtuigend wanneer de selectie en de meting
overtuigend zijn. In de volgende module gebruik je dezelfde standaardfout
om een specifieke bewering over een parameter te onderzoeken.
