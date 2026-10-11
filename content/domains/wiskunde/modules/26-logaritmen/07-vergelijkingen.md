# Vergelijkingen, tijdsdrempels en logaritmische schalen

In module 25 leerde je met een groeifactor een hoeveelheid voorspellen: na 5 jaar, na 10 uur, na 3 dagen. Maar in de praktijk is de vraag vaak omgekeerd. Na hoeveel jaar is het bedrag verdubbeld? Wanneer is de drempel van 1000 bacteriën bereikt? Hoe lang duurt het voor de helft van een stof is vervallen? Dat zijn vragen waarin de onbekende in de exponent staat, en dus vragen voor een logaritme. In deze les los je zulke vergelijkingen op, ga je om met de tijdseenheden en meetmomenten die in het echte leven niet continu zijn, en zie je waarom wetenschappers veel grootheden juist met een logaritme meten.

:::question Wanneer 500?
Een kweek bevat 100 bacteriën en groeit elk uur met 20% (factor 1,2). Na 5 uur zijn er $100 \times 1{,}2^5 \approx 249$. Is het eerder of later dan na 10 uur dat er 500 zijn? Schat eerst, zonder rekenmachine, op welk moment de kweek 500 bereikt. Welke waarde van $t$ verwacht je ongeveer?
:::

## Een exponentiële vergelijking oplossen

De vergelijking uit de denkvraag is $100 \cdot 1{,}2^t = 500$. De onbekende $t$ staat in de exponent. Er is één algemene werkwijze, in drie stappen.

1. **Isoleer de macht.** Deel beide kanten door de beginwaarde, zodat links alleen $1{,}2^t$ staat.
2. **Neem de logaritme** van beide kanten. Je kunt $\ln$ of $\log$ gebruiken, zolang je aan beide kanten hetzelfde doet.
3. **Haal de exponent naar beneden** met de machtsregel en deel door de logaritme van het grondtal.

:::example Een groeiproces oplossen
Los $100 \cdot 1{,}2^t = 500$ op. Rond $t$ af op twee decimalen.

**Stap 1.** Deel door 100: $1{,}2^t = 5$.

**Stap 2.** Neem aan beide kanten de natuurlijke logaritme: $\ln\left(1{,}2^t\right) = \ln 5$.

**Stap 3.** Gebruik de machtsregel: $t \cdot \ln 1{,}2 = \ln 5$, dus $t = \dfrac{\ln 5}{\ln 1{,}2}$.

**Stap 4.** Reken uit: $\ln 5 \approx 1{,}6094$ en $\ln 1{,}2 \approx 0{,}18232$, dus $t \approx 8{,}83$.

**Controle.** $100 \cdot 1{,}2^{8{,}83} \approx 100 \cdot 5{,}00 = 500$.
:::

De formule die je hier toepast, geldt algemeen voor $N_0 \cdot g^t = M$ met $N_0, M, g > 0$ en $g \neq 1$:

$$
t = \frac{\ln\left(M / N_0\right)}{\ln g}.
$$

Controleer je antwoord met een schatting. De kweek groeit per uur met 20%. Na 8 uur is dat ongeveer $100 \cdot 1{,}2^8 \approx 430$, en na 9 uur ongeveer $516$. Het moment van 500 ligt dus net voor 9 uur, en $8{,}83$ is dan redelijk. Dit soort controle vangt vergissingen met de logaritmetoets op, zoals delen in de verkeerde volgorde.

{{ exercises: 26-024, 26-025 }}

## Continu en discreet

Het antwoord $t \approx 8{,}83$ is een antwoord van het *continue* model: de formule levert een waarde voor elke $t$, ook voor $8{,}83$ uur. Maar als je de kweek alleen op het hele uur telt, is er geen meting op $t = 8{,}83$. De vraag "wanneer zijn het minstens 500?" heeft dan een ander antwoord: het **eerste gehele uur** met minstens 500. Op $t = 8$ zijn het ongeveer $430$, nog te weinig; op $t = 9$ zijn het $516$, genoeg. Het antwoord is dus 9, niet het naar beneden afgeronde 8 en niet zomaar het afgeronde $8{,}83 \approx 9$.

:::warning Afronden hangt af van de vraag
Bij een drempel *bereikt of overschreden* ga je naar boven af, naar het eerstvolgende toegestane tijdstip. Bij een vraag als "hoe lang blijft het onder de drempel" is het het laatste tijdstip daarvoor. Rond dus nooit blind af, maar controleer met de oorspronkelijke formule beide meetmomenten rond de continue oplossing.
:::

{{ exercises: 26-026 }}

## Verdubbelings- en halveringstijd

Een bijzonder geval is de vraag hoe lang het duurt voor een hoeveelheid verdubbelt. Bij groeifactor $g$ per tijdseenheid zoek je $t$ met $g^t = 2$. De beginwaarde valt weg, want die staat links en rechts gelijk:

$$
t_{\text{verdubbeling}} = \frac{\ln 2}{\ln g}.
$$

De verdubbelingstijd hangt dus alleen af van de groeifactor, niet van de beginwaarde. Voor verval, met een factor $g$ tussen 0 en 1, zoek je de **halveringstijd**: $g^t = \tfrac{1}{2}$, dus $t = \dfrac{\ln(1/2)}{\ln g} = \dfrac{\ln 0{,}5}{\ln g}$. Beide logaritmen zijn dan negatief, en hun quotiënt is positief.

:::example Verdubbelingstijd en halveringstijd
**a)** Een bedrag groeit met factor 1,08 per jaar. Na hoeveel jaar is het verdubbeld?

Los $1{,}08^t = 2$ op: $t = \dfrac{\ln 2}{\ln 1{,}08} \approx \dfrac{0{,}6931}{0{,}07696} \approx 9{,}01$ jaar.

**b)** Een stof neemt per uur af met factor 0,9. Na hoeveel uur is nog de helft over?

Los $0{,}9^t = 0{,}5$ op: $t = \dfrac{\ln 0{,}5}{\ln 0{,}9} \approx \dfrac{-0{,}6931}{-0{,}10536} \approx 6{,}58$ uur.

**Controle bij a).** Er bestaat een vuistregel, de regel van 70: de verdubbelingstijd is ongeveer $70$ gedeeld door het groeipercentage. Hier is dat $70 / 8 \approx 8{,}75$ jaar. Dat komt dicht in de buurt van $9{,}01$.
:::

{{ exercises: 26-027, 26-028 }}

## Logaritmische vergelijkingen

Soms staat de onbekende in het argument van een logaritme, zoals in $\log_2(x - 1) = 3$. Hier vertaal je met de definitie: $\log_2(x - 1) = 3$ betekent $x - 1 = 2^3 = 8$, dus $x = 9$. Controleer het domein: $x - 1 > 0$, dus $x > 1$, en $9$ voldoet.

Staan er meerdere logaritmen, dan gebruik je de rekenregels om ze te combineren, en let je op het domein van de *oorspronkelijke* vergelijking.

:::example Een oplossing die afvalt
Los $\ln x + \ln(x - 2) = \ln 3$ op.

**Stap 1 (domein).** Beide logaritmen moeten bestaan: $x > 0$ en $x - 2 > 0$, dus $x > 2$.

**Stap 2.** Combineer met de productregel: $\ln\left(x(x - 2)\right) = \ln 3$.

**Stap 3.** Twee gelijke logaritmen hebben gelijke argumenten: $x(x - 2) = 3$, dus $x^2 - 2x - 3 = 0$.

**Stap 4.** Ontbind: $(x - 3)(x + 1) = 0$, dus $x = 3$ of $x = -1$.

**Stap 5 (controle).** Alleen $x > 2$ is toegestaan. De waarde $x = 3$ voldoet. De waarde $x = -1$ valt buiten het domein: $\ln(-1)$ bestaat niet.

**Antwoord.** $x = 3$.
:::

De kandidaat $-1$ is een zogenoemde **onechte oplossing**: ze ontstaat doordat de productregel een vergelijking maakt die ook negatieve $x$ toestaat. De domeincontrole is dus essentieel.

{{ exercises: 26-029 }}

## Logaritmische schalen

Een logaritme heeft nog een tweede toepassing, naast het oplossen van vergelijkingen: het meten van grootheden die over veel ordes van grootte uiteenlopen. Een zwakke fluistering en een straaljager verschillen een factor van meer dan een biljoen in geluidsintensiteit. Zet je die op een gewone schaal, dan wordt het fluisteren een stipje bij nul. Neem je de logaritme, dan krijgt elke factor 10 dezelfde afstand, en passen alle waarden op één overzichtelijke schaal.

![Een logaritmische schaal van 1 tot 1000: elke factor 10 is dezelfde afstand](/images/diagrams/m26-logschaal.svg "Een logaritmische schaal: gelijke afstanden betekenen gelijke factoren — eigen tekening")

Er is een tweede reden: ons waarnemen werkt vaak naar verhoudingen. Een geluid dat tien keer zo veel energie heeft klinkt niet tien keer zo hard, maar wel merkbaar harder; een logaritmische schaal sluit dan beter aan bij wat je hoort. We bekijken vier voorbeelden. In alle vier geldt dat een **vaste verandering op de schaal een vaste factor in de grootheid** betekent.

**Decibel.** Het geluidsniveau $L$ in decibel is $L = 10 \log\dfrac{I}{I_0}$, met $I$ de geluidsintensiteit en $I_0$ een referentiewaarde. Is $I = 1000 I_0$, dan is $L = 10 \log 1000 = 30$ dB. Verdubbelt de intensiteit (twee gelijke machines in plaats van één), dan komt er $10 \log 2 \approx 3{,}0$ dB bij. Elke factor 10 geeft 10 dB erbij.

**pH.** De zuurgraad is $\text{pH} = -\log\left[\text{H}^+\right]$, met $\left[\text{H}^+\right]$ de concentratie waterstofionen in mol per liter. Zuiver water heeft $\left[\text{H}^+\right] = 10^{-7}$, dus pH $= 7$. Elke daling van de pH met 1 betekent een concentratie die tien keer zo groot is. Een oplossing met pH 3 is dus duizend keer zo zuur, in H⁺-concentratie, als een oplossing met pH 6.

**Aardbevingen.** De magnitude van een aardbeving was oorspronkelijk de schaal van Richter, tegenwoordig gebruiken seismologen voor grote bevingen de *momentmagnitude*. Volgens de Amerikaanse geologische dienst USGS betekent een stijging van de magnitude met 1 een tien keer zo grote gemeten amplitude, en ongeveer 32 keer zo veel vrijgekomen energie. Dat getal 32 komt van $10^{1{,}5} \approx 31{,}6$: de energie schaalt als $10^{1{,}5 M}$.

**Sterrenmagnitude.** Hipparchus deelde sterren in zes klassen in naar helderheid. In 1856 legde Norman Pogson vast dat vijf magnitudestappen precies een factor 100 in helderheid zijn, dus één stap is een factor $100^{1/5} \approx 2{,}512$. Hoe lager de magnitude, des te helderder de ster: de zon heeft ongeveer magnitude $-27$, Sirius ongeveer $-1{,}5$ en het zwakste dat je met het blote oog onder goede omstandigheden ziet is ongeveer magnitude 6.

:::example Rekenen met een schaal
Hoeveel keer zo helder is een ster van magnitude 1 dan een ster van magnitude 4?

**Stap 1.** Het verschil is $4 - 1 = 3$ magnitudes. Elke stap is een factor $100^{1/5}$.

**Stap 2.** De helderheidsfactor is $\left(100^{1/5}\right)^3 = 100^{3/5} = 10^{6/5} = 10^{1{,}2}$.

**Stap 3.** Reken uit: $10^{1{,}2} \approx 15{,}85$. De ster van magnitude 1 is dus ongeveer $15{,}8$ keer zo helder.

**Controle.** Vijf stappen zijn factor 100, drie stappen dus minder dan 100. En drie keer de factor 2,512 is $2{,}512^3 \approx 15{,}85$. Dat klopt.
:::

{{ exercises: 26-036, 26-037, 26-038, 26-039 }}

:::tip Wat de schaal verbergt
Een logaritmische schaal is handig, maar misleidend als je vergeet dat ze logaritmisch is. Een aardbeving van magnitude 8 is niet "een beetje" erger dan een van magnitude 7: ze geeft ongeveer 32 keer zo veel energie vrij. Lees bij elke schaal dus eerst af wat een stap van één betekent.
:::

## Foutenanalyse: wat gaat er mis?

Aan het eind van deze module zijn de volgende fouten de meest gemaakte. Ze zijn in vorige lessen al langsgekomen; hier staan ze bij elkaar met de reden waarom ze niet kloppen.

| Fout | Waarom fout | Correct |
|---|---|---|
| $\log(a + b) = \log a + \log b$ | Een som binnen de logaritme splitst niet | $\log a + \log b = \log(ab)$ |
| $\dfrac{\log a}{\log b} = \log(a - b)$ | Een quotiënt van logaritmen is geen logaritme van een verschil | $\dfrac{\log a}{\log b} = \log_b a$ |
| $\log_g$ verwisseld met $g^{\cdot}$ | Een logaritme is een exponent, geen macht | $\log_g a = x \iff g^x = a$ |
| $\ln$ en $\log$ door elkaar | Verschillend grondtal ($e$ en 10) | $\ln 100 \approx 4{,}61$, $\log 100 = 2$ |
| $\log(-5)$ uitrekenen | Een negatief argument bestaat niet | $\log(-5)$ is niet gedefinieerd |

:::example Foutenanalyse bij een vergelijking
Een leerling beweert dat $\ln(a + b) = \ln a + \ln b$ geldt voor alle positieve $a$ en $b$. Voor welke $b$ is de bewering bij $a = 3$ toch waar?

**Stap 1.** Zet $a = 3$ in beide kanten: $\ln(3 + b) = \ln 3 + \ln b = \ln(3b)$.

**Stap 2.** Gelijke logaritmen hebben gelijke argumenten: $3 + b = 3b$, dus $b = \tfrac{3}{2}$.

**Stap 3.** Controle: $\ln 4{,}5 \approx 1{,}504$ en $\ln 3 + \ln 1{,}5 \approx 1{,}099 + 0{,}405 = 1{,}504$. Voor $b = 1{,}5$ klopt het toevallig. Voor elke andere $b$ niet, bijvoorbeeld $b = 1$: $\ln 4 \approx 1{,}386$ tegenover $\ln 3 + \ln 1 \approx 1{,}099$.

De conclusie is dat een regel die in één geval klopt nog geen regel is. Eén tegenvoorbeeld is genoeg om een algemene bewering te weerleggen.
:::

## Een uitdaging: het hele verhaal

:::challenge Continu en discreet
Een model start bij 200 en groeit per jaar met factor 1,08. Bepaal het continue tijdstip waarop 400 bereikt wordt op twee decimalen. Bepaal ook het eerste gehele jaar met minstens 400 en controleer het voorafgaande jaar.
:::

{{ exercises: 26-030 }}

:::challenge Radioactief verval
Een stof heeft een halveringstijd van 5 dagen. Na hoeveel dagen is nog 10% over? Denk eerst na over de grootte van het antwoord: hoeveel halveringen zijn nodig, en is dat meer of minder dan drie?
:::

{{ exercises: 26-041, 26-042 }}

## Bronnen voor de schalen

- USGS, [Earthquake magnitude, energy release, and shaking intensity](https://www.usgs.gov/programs/earthquake-hazards/earthquake-magnitude-energy-release-and-shaking-intensity): tienvoudige amplitude en ongeveer 32 keer zoveel energie per magnitude-eenheid; de momentmagnitude naast Richter.
- Wikipedia, [Magnitude (astronomy)](https://en.wikipedia.org/wiki/Magnitude_(astronomy)): Hipparchus' klassen, Pogsons vastlegging in 1856 en de factor 100 per vijf magnitudes.
