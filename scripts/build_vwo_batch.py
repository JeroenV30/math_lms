from content_workbench import save, e, p, fraction, expr

def dec(q, a, steps, hints=(), **opts):
    return e(q, a, steps, hints, type='decimal', tolerance=0.005, **opts)

save(27,
 question='Hoe beschrijf je herhalende beweging met hoeken op een cirkel en functies van de tijd?',
 summary='De eenheidscirkel breidt sinus en cosinus uit naar alle hoeken. Radialen, symmetrie, vergelijkingen en sinusmodellen verbinden meetkunde met functies.',
 goals=['Je rekent graden om naar radialen en omgekeerd.', 'Je leest sinus en cosinus als coördinaten op de eenheidscirkel.', 'Je gebruikt tekens, symmetrie en periodiciteit om functiewaarden te bepalen.', 'Je bepaalt amplitude, evenwichtsstand, periode en faseverschuiving van een sinusmodel.', 'Je lost eenvoudige goniometrische vergelijkingen op op een gegeven interval.', 'Je beschrijft volledige oplossingsfamilies met een gehele periode-index.', 'Je onderscheidt de perioden en domeinen van sinus, cosinus en tangens.', 'Je beoordeelt sinusmodellen in een context met de juiste tijdseenheden.'],
 glossary=[('Eenheidscirkel','Een cirkel met straal één en middelpunt in de oorsprong.'),('Radiaal','De middelpuntshoek waarvan de booglengte gelijk is aan de straal.'),('Periode','Een positieve verschuiving in de invoer waarna de functie zich herhaalt; hier bedoelen we de kleinste positieve periode.'),('Amplitude','De maximale afstand tot de evenwichtsstand in een sinusmodel.'),('Evenwichtsstand','De middenhoogte tussen maximum en minimum van een sinusmodel.'),('Faseverschuiving','Een horizontale verschuiving van het periodieke patroon.'),('Hoeksnelheid','De verandering van hoek in radialen per tijdseenheid bij een gelijkmatige draaiing.')],
 formulas=[('Hoekeenheden',r'\theta_{\mathrm{rad}}=\theta_{\mathrm{graden}}\frac{\pi}{180}','Een hele omwenteling is 2π radialen.'),('Cirkelpunt',r'P=(\cos\theta,\sin\theta)','Cosinus is x, sinus is y.'),('Periodiciteit',r'\sin(\theta+2\pi)=\sin\theta,\quad\cos(\theta+2\pi)=\cos\theta','Sinus en cosinus hebben periode 2π.'),('Sinusmodel',r'y=d+A\sin(b(t-c))\quad(A\ne0,\ b\ne0)','Amplitude |A|, evenwichtsstand d en periode 2π/|b|.'),('Sinusvergelijking',r'\sin x=\sin\alpha\implies x=\alpha+2k\pi\ \text{of}\ x=\pi-\alpha+2k\pi','k is geheel; bij extrema kunnen de families samenvallen.')],
 lessons=[
 ('introductie','Een draaiing wordt een golf','intro',r'''
# Een draaiing wordt een golf

Een punt draait gelijkmatig rond een cirkel. Zijn hoogte stijgt en daalt steeds volgens hetzelfde patroon. Door de horizontale en verticale coördinaten als functies van de hoek te bekijken, ontstaan cosinus en sinus.

De verhoudingen uit een rechthoekige driehoek waren beperkt tot scherpe hoeken. De cirkeldefinitie breidt ze uit naar negatieve hoeken en meerdere omwentelingen. De uitkomsten kunnen nu negatief zijn omdat coördinaten aan beide kanten van de assen liggen.

{{ goals }}

{{ widget: unit-circle angle="30" }}

Begin op de positieve x-as. Positieve hoeken draaien tegen de klok in; negatieve met de klok mee. Vergelijk 30°, 390° en −330°: ze komen op hetzelfde punt uit.
''',[[1,2,3]]),
 ('radialen','Radialen en booglengte','theory',r'''
# Radialen en booglengte

Een hoek in radialen is de verhouding booglengte/straal: θ = s/r. Bij de eenheidscirkel is de booglengte numeriek gelijk aan de hoek in radialen. Omdat de omtrek 2πr is, bevat één hele omwenteling 2π radialen, tegenover 360°.

Daarom is 180° = π, 90° = π/2, 60° = π/3, 45° = π/4 en 30° = π/6. Om graden om te zetten vermenigvuldig je met π/180; terug vermenigvuldig je met 180/π.

:::example Booglengte
Bij straal 3 en hoek π/2 is de booglengte $s=r\theta=3\pi/2$. Deze formule verwacht radialen. Invullen van 90 in dezelfde formule zou een heel andere, onjuiste lengte geven.
:::

In deze module gebruiken formules en grafiekwidgets radialen tenzij expliciet graden staat. De eenheidscirkelwidget heeft een gradenregelaar en toont de omrekening. Controleer bij rekenmachinegebruik de RAD-stand.
''',[[4,5,6,7]]),
 ('cirkel','Coördinaten, tekens en symmetrie','theory',r'''
# Coördinaten, tekens en symmetrie

Op de eenheidscirkel is het punt bij θ gelijk aan (cos θ; sin θ). Daardoor is cos 0 = 1 en sin 0 = 0. Bij π/2 is het punt (0; 1); bij π (−1; 0); bij 3π/2 (0; −1).

| Kwadrant | cos θ | sin θ |
|---|---|---|
| I | positief | positief |
| II | negatief | positief |
| III | negatief | negatief |
| IV | positief | negatief |

Spiegelen in de x-as geeft sin(−θ) = −sin θ en cos(−θ) = cos θ. Spiegelen in de y-as geeft sin(π − θ) = sin θ en cos(π − θ) = −cos θ. Een halve omwenteling keert beide tekens om.

:::example Exacte waarden
Bij π/6 is sin = 1/2 en cos = √3/2. Bij 5π/6 blijft sinus 1/2, maar cosinus wordt −√3/2. Bij π/4 zijn beide coördinaten √2/2. De identiteit sin² θ + cos² θ = 1 blijft overal gelden.
:::

{{ widget: unit-circle angle="150" }}
''',[[8,9,10,11,12]]),
 ('grafieken','Grafieken en perioden','theory',r'''
# Grafieken en perioden

De sinusgrafiek begint bij (0; 0), bereikt 1 bij π/2, nul bij π, −1 bij 3π/2 en nul bij 2π. Daarna herhaalt de cyclus. Cosinus begint bij 1 en heeft dezelfde periode 2π. Het bereik van beide is [−1; 1].

{{ widget: function-plot fn="sin(x)" fn2="cos(x)" xmin="-6.3" xmax="6.3" ymin="-1.5" ymax="1.5" }}

Tangens is sin/cos en bestaat niet waar cos nul is: θ = π/2 + kπ, met k geheel. De periode is π, omdat na een halve omwenteling beide tekens omkeren en hun quotiënt gelijk blijft. De verticale asymptoten zijn geen extra functiewaarden.

{{ widget: function-plot fn="tan(x)" xmin="-3.2" xmax="3.2" ymin="-4" ymax="4" }}

Bij y = sin(2t) wordt de cyclus tweemaal zo snel doorlopen, dus de periode is π. Bij y = sin(t/2) is de periode juist 4π. De binnenste vermenigvuldiging werkt omgekeerd op de periode.
''',[[13,14,15,16]]),
 ('modellen','Amplitude, middenhoogte en fase','theory',r'''
# Amplitude, middenhoogte en fase

Een sinusmodel heeft de vorm $y=d+A\sin(b(t-c))$. Bij A ≠ 0 en b ≠ 0 is de amplitude |A|, de evenwichtsstand d en de periode T = 2π/|b|. Het bereik is [d − |A|; d + |A|]. De parameter c verschuift de basisgrafiek horizontaal.

Bij positieve A en b passeert de grafiek bij t = c de evenwichtsstand stijgend. Negatieve A of b kan die richting omkeren. Dezelfde functie kan meerdere equivalente fasebeschrijvingen hebben, omdat je hele perioden mag verschuiven.

:::example Een hoogte
$h(t)=10+3\sin((\pi/6)(t-2))$ heeft middenhoogte 10, amplitude 3 en periode 12 tijdseenheden. De hoogte ligt tussen 7 en 13. Bij t = 2 is de hoogte 10 en stijgt de grafiek; bij t = 5 is de hoek π/2 en de hoogte 13.
:::

{{ widget: function-plot fn="d+a*sin(b*(x-c))" d="10" dmin="0" dmax="15" a="3" amin="1" amax="5" b="0.5" bmin="0.2" bmax="2" c="2" cmin="-4" cmax="4" xmin="0" xmax="24" ymin="0" ymax="20" }}

De beginwaarde is niet automatisch d: daarvoor moet de sinus bij t = 0 nul zijn. Lees ook de vorm van de binnenste expressie zorgvuldig: sin(2t − 4) = sin(2(t − 2)), met verschuiving 2, niet 4.
''',[[17,18,19,20,21]]),
 ('geschiedenis','Van hoeken naar analytische functies','history',r'''
# Van hoeken naar analytische functies

De ontwikkeling van goniometrische functies ging verder dan tabellen voor driehoeken. In de achttiende eeuw werden verbanden met analyse en exponentiële functies uitgewerkt. Euler gaf in 1748 de relatie $e^{ix}=\cos x+i\sin x$, waarin i een complexe eenheid is. Zie [MacTutor over goniometrische functies](https://mathshistory.st-andrews.ac.uk/HistTopics/Trigonometric_functions/).

Complexe getallen zijn voor de berekeningen in deze module niet nodig. De formule toont wel een historische verbinding: één draaiing kan zowel via cirkelcoördinaten als via een exponentiële expressie beschreven worden. De hoek x wordt daarbij in radialen uitgedrukt.

Sinusmodellen kunnen trillingen, rotaties of seizoenspatronen benaderen. Niet elke herhaling is exact sinusvormig, en een gemeten cyclus hoeft niet altijd dezelfde periode te houden. De historische uitbreiding van meetkunde naar functies maakt modelleren mogelijk; ze vervangt geen controle met data.
''',[[22,23]]),
 ('vergelijkingen','Alle oplossingen en contextgrenzen','practice',r'''
# Alle oplossingen en contextgrenzen

Op [0; 2π) heeft sin x = 1/2 twee oplossingen: π/6 en 5π/6. Op de hele reële lijn komen daar alle gehele omwentelingen bij: x = π/6 + 2kπ of x = 5π/6 + 2kπ, met k geheel. Alleen de hoofdwaarde van arcsin geven mist de tweede tak en alle herhalingen.

Voor cos x = cos α zijn de families x = α + 2kπ en x = −α + 2kπ. Voor tan x = tan α is één familie x = α + kπ voldoende. Bij sin x = 1 vallen de twee sinusfamilies samen; tel dan geen dubbel punt.

:::example Een binnenste hoek
Los sin(2t) = 1/2 op voor 0 ≤ t < π. Stel u = 2t; dan 0 ≤ u < 2π. De oplossingen voor u zijn π/6 en 5π/6, dus voor t zijn het π/12 en 5π/12. Controleer beide in de oorspronkelijke vergelijking.
:::

:::challenge Een periodieke hoogte
Een model is h(t) = 10 + 3 sin((π/6)(t − 2)). Bepaal het eerste maximum op t ≥ 0 en de twee tijdstippen waarop h = 10 in de halfopen cyclus [2; 14). Leg uit waarom het rechter eindpunt niet wordt meegerekend.
:::
''',[[24,25,26,27,28,29,30]]),
 ('samenvatting','Samenvatting','summary',r'''
# Samenvatting

De eenheidscirkel definieert cosinus als x-coördinaat en sinus als y-coördinaat voor elke georiënteerde hoek. Eén omwenteling is 2π radialen. Gebruik radialen in functieformules en controleer je rekenmachine.

Sinus en cosinus hebben periode 2π en bereik [−1; 1]. Tangens heeft periode π en is niet gedefinieerd bij π/2 + kπ. In y = d + A sin(b(t − c)) zijn amplitude |A|, middenhoogte d en periode 2π/|b|.

Zoek bij vergelijkingen alle takken en herhalingen die binnen het gevraagde interval vallen. Een hoofdwaarde van een inverse functie is geen volledige oplossing. Controleer eindpunten en geef in toepassingen aan welke modelaannames periodiek gedrag ondersteunen.

{{ quiz }}
''',[])],
 exercises=[
 e('Geef sin 0.',0,['Het punt is (1;0), dus de y-coördinaat is nul.'],['Sinus is de hoogte.']),
 e('Geef cos 0.',1,['De x-coördinaat is 1.'],['Begin op de positieve x-as.']),
 e('Geef het cirkelpunt bij 90° als coördinatenpaar.','(0;1)',['Een kwartslag tegen de klok in geeft (0;1).'],['Gebruik de positieve y-as.'],type='coordinate'),
 expr('Zet 180° om in exact aantal radialen.','pi',['Een halve omwenteling is π.'],['Vermenigvuldig met π/180.']),
 expr('Zet 60° om in exact aantal radialen.','pi/3',['60π/180 = π/3.'],['Vereenvoudig de breuk.']),
 e('Zet 3π/2 radialen om in graden.',270,['(3π/2)×180/π = 270.'],['Gebruik 180/π.']),
 expr('Een cirkel heeft straal 3 en hoek π/2 radialen. Geef de exacte booglengte.','3*pi/2',['s = rθ = 3π/2.'],['Deze formule gebruikt radialen.']),
 e('Bereken sin(π/2).',1,['Het punt is (0;1).'],['Lees de y-coördinaat.']),
 e('Bereken cos π.',-1,['Het punt is (−1;0).'],['Een halve omwenteling.']),
 fraction('Bereken sin(5π/6) exact.','1/2',['De hoek spiegelt π/6 in de y-as; de hoogte blijft 1/2.'],['Gebruik symmetrie.']),
 expr('Bereken cos(5π/6) exact.','-sqrt(3)/2',['Cosinus is negatief in kwadrant II.'],['Gebruik de referentiehoek π/6.']),
 fraction('Bereken sin(−π/6) exact.','-1/2',['Sinus verandert van teken bij spiegelen in de x-as.'],['Sinus is oneven.']),
 expr('Geef de periode van sin t.','2*pi',['Een volledige omwenteling.'],['Sinus herhaalt na 2π.']),
 expr('Geef de periode van tan t.','pi',['Een halve omwenteling geeft dezelfde verhouding.'],['Tangens heeft een kortere periode.']),
 expr('Geef de periode van sin(2t).','pi',['2π/2 = π.'],['De binnenste factor versnelt de cyclus.']),
 e('Is tan(π/2) gedefinieerd? Geef 1 voor ja, 0 voor nee.',0,['Cos(π/2)=0, dus sin/cos is niet gedefinieerd.'],['Controleer de noemer.']),
 e('h(t)=10+3sin((π/6)(t−2)). Wat is de amplitude?',3,['De amplitude is |3|.'],['Afstand tot de middenhoogte.']),
 e('Hetzelfde model: wat is de evenwichtsstand?',10,['De verticale verschuiving is 10.'],['Lees d.']),
 e('Hetzelfde model: wat is de periode?',12,['2π/(π/6)=12.'],['Gebruik de binnenste hoekfactor.']),
 e('Geef het bereik van hetzelfde model als interval.','[7;13]',['10−3=7 en 10+3=13.'],['Middenhoogte plus/min amplitude.'],type='interval'),
 e('Geef de horizontale verschuiving c in sin(2t−4), geschreven als sin(2(t−c)).',2,['2t−4 = 2(t−2).'],['Factoriseer de binnenste expressie.']),
 e('Bereken sin²(π/4)+cos²(π/4).',1,['De identiteit geldt voor elke hoek.'],['Pythagoras op de eenheidscirkel.']),
 e('Een patroon herhaalt elke 12 uur. Hoeveel volledige cycli zijn er in 48 uur?',4,['48/12 = 4.'],['Tijd gedeeld door periode.']),
 e('Hoeveel verschillende oplossingen heeft sin x = 1/2 op [0;2π)?',2,['π/6 en 5π/6.'],['Er zijn twee punten met die hoogte.']),
 expr('Geef de kleinste oplossing van sin x = 1/2 op [0;2π).','pi/6',['De eerste oplossing is π/6.'],['Gebruik de bekende scherpe hoek.'],mode='independent'),
 expr('Geef de grootste oplossing van sin x = 1/2 op [0;2π).','5*pi/6',['De tweede oplossing is π−π/6.'],['Spiegel in de y-as.'],mode='independent'),
 expr('Geef de kleinste niet-negatieve oplossing van cos x = 0.','pi/2',['De positieve y-as geeft de eerste nulcoördinaat x.'],['Cosinus is de x-coördinaat.'],mode='independent'),
 expr('Geef de kleinste oplossing van sin(2t)=1/2 op [0;π).','pi/12',['2t=π/6, dus t=π/12.'],['Los eerst voor de binnenste hoek op.'],mode='independent'),
 e('Hoeveel verschillende oplossingen heeft sin x = 1 op [0;2π)?',1,['Alleen π/2; de twee algemene takken vallen samen.'],['Een maximum komt eenmaal per cyclus voor.'],mode='independent'),
 e('h(t)=10+3sin((π/6)(t−2)). Geef het eerste maximum voor t≥0 en de twee tijden met h=10 op [2;14), in stijgende volgorde.',p(('eerste maximum',5),('eerste middenpassage',2),('tweede middenpassage',8)),['Een maximum heeft binnenhoek π/2: t−2=3, dus t=5.','Binnenhoeken 0 en π geven t=2 en t=8.','t=14 ligt buiten het halfopen interval.'],['Vertaal de gewenste hoogte naar een sinuswaarde.'],type='multiple',mode='challenge',difficulty=4)
 ],
 quiz=[
 expr('Zet 45° om in radialen.','pi/4',['45π/180.']),
 e('Zet 5π/3 radialen om in graden.',300,['5×180/3.']),
 e('Bereken sin π.',0,['Punt (−1;0).']),
 e('Bereken cos(2π).',1,['Volledige omwenteling.']),
 fraction('Bereken sin(7π/6).','-1/2',['Kwadrant III, referentiehoek π/6.']),
 expr('Bereken cos(π/4) exact.','sqrt(2)/2',['Gelijkbenige rechthoekige driehoek.']),
 e('Bereken tan(π/4).',1,['Sin en cos zijn gelijk.']),
 expr('Geef de periode van cos(3t).','2*pi/3',['2π/3.']),
 e('y=4−2sin(πt/5). Geef de amplitude.',2,['Amplitude |−2|.']),
 e('Hetzelfde model: geef de periode.',10,['2π/(π/5)=10.']),
 e('Hetzelfde model: geef het bereik.','[2;6]',['4±2.'],type='interval'),
 e('Hoeveel oplossingen heeft cos x = 1 op [0;2π)?',1,['Alleen x=0; 2π is uitgesloten.']),
 expr('Geef de kleinste positieve oplossing van sin x=0.','pi',['Nulpunten zijn gehele veelvouden van π.']),
 expr('Geef de grootste oplossing van cos x=1/2 op [0;2π).','5*pi/3',['π/3 en 5π/3.']),
 expr('Geef de kleinste oplossing van sin(3t)=1 op [0;2π/3).','pi/6',['3t=π/2, dus t=π/6.'],difficulty=3)
 ])

save(26,
 question='Welke exponent maakt een macht gelijk aan een gegeven positief getal?',
 summary='Logaritmen als inverse van machten, rekenregels met domeinvoorwaarden, grafieken en exponentiële vergelijkingen.',
 goals=['Je vertaalt tussen bʸ = x en log_b(x) = y met de juiste voorwaarden.', 'Je berekent exacte logaritmen via bekende machten.', 'Je gebruikt product-, quotiënt- en machtsregels voor positieve argumenten.', 'Je rekent om naar een andere basis met een quotiënt van logaritmen.', 'Je beschrijft domein en grafiek van een logaritmische functie.', 'Je lost exponentiële en logaritmische vergelijkingen op en controleert hun domein.', 'Je berekent verdubbelings- en halveringstijden en interpreteert discrete drempels.'],
 glossary=[('Logaritme','De exponent die bij een gegeven grondtal een positief getal oplevert.'),('Grondtal','De positieve basis b van een logaritme, met b ≠ 1.'),('Argument','De invoer van de logaritme; bij reële logaritmen moet die positief zijn.'),('Natuurlijke logaritme','Logaritme met grondtal e, geschreven ln.'),('Tiendelige logaritme','Logaritme met grondtal 10, hier geschreven log.'),('Inverse functie','Een functie die de oorspronkelijke invoer uit de uitvoer terugvindt op een passend domein.'),('Verticale asymptoot','Een verticale lijn waar de grafiek bij een domeingrens onbegrensd langs loopt.')],
 formulas=[('Definitie',r'\log_b x=y\iff b^y=x\quad(b>0,\ b\ne1,\ x>0)','Vertaal een logaritme naar een exponent.'),('Product en quotiënt',r'\log_b(uv)=\log_b u+\log_b v,\quad\log_b(u/v)=\log_b u-\log_b v','u en v zijn positief.'),('Machtsregel',r'\log_b(u^r)=r\log_b u\quad(u>0)','Voor een reële exponent r.'),('Basis veranderen',r'\log_b x=\frac{\ln x}{\ln b}','De noemer is niet nul omdat b ≠ 1.'),('Exponentiële vergelijking',r'N_0g^t=M\implies t=\frac{\ln(M/N_0)}{\ln g}','Positieve N₀, M en g; g ≠ 1.')],
 lessons=[
 ('introductie','Een onbekende exponent','intro',r'''
# Een onbekende exponent

Bij 2ᵗ = 8 herken je t = 3. Maar welke t geeft 2ᵗ = 10? Er bestaat een unieke reële oplossing, alleen is die geen geheel getal. Een logaritme geeft precies deze onbekende exponent: $t=\log_2 10$.

Optellen wordt omgekeerd door aftrekken, vermenigvuldigen door delen. Bij machten zijn er twee verschillende vragen: een onbekende basis vind je met een wortel; een onbekende exponent met een logaritme.

{{ goals }}

:::example Basis of exponent?
Bij x³ = 8 is x = 2. Bij 3ˣ = 8 is x = log₃ 8 ≈ 1,893. De plaats van de onbekende bepaalt de omkeerbewerking.
:::
''',[[1,2,3]]),
 ('definitie','Definitie en domein','theory',r'''
# Definitie en domein

De uitspraak $\log_b x=y$ betekent $b^y=x$. We gebruiken reële logaritmen met b > 0, b ≠ 1 en x > 0. De exponentiële functie neemt op dit domein elke positieve waarde precies eenmaal aan.

Uit b⁰ = 1 volgt log_b 1 = 0. Uit b¹ = b volgt log_b b = 1. Ook negatieve logaritmen zijn mogelijk: log₂(1/8) = −3, omdat 2⁻³ = 1/8. Een negatieve **uitkomst** is dus toegestaan; een niet-positief **argument** niet.

:::warning Geen reële logaritme van nul
Een positieve basis tot een eindige reële exponent geeft altijd een positieve waarde. Daarom bestaat log_b 0 niet als reëel getal. Voor negatieve argumenten bestaat in deze cursus evenmin een reële logaritme.
:::

Een basis tussen 0 en 1 is toegestaan: log_(1/2) 8 = −3. Basis 1 is uitgesloten, omdat 1ʸ steeds 1 is en de exponent niet teruggevonden kan worden.

{{ glossary }}
''',[[4,5,6,7,8]]),
 ('regels','Rekenregels en hun voorwaarden','theory',r'''
# Rekenregels en hun voorwaarden

Als u = bᵖ en v = bᑫ, dan is uv = b^(p+q). Zo ontstaat de productregel: $\log_b(uv)=\log_bu+\log_bv$. Op dezelfde manier geven delen en machtsverheffen een verschil en een vermenigvuldiging van logaritmen.

:::example Een product vereenvoudigen
log₂ 8 + log₂ 4 = log₂(8 × 4) = log₂ 32 = 5. Het is niet log₂(8 + 4). De som van logaritmen hoort bij een **product van argumenten**.
:::

Gebruik de regels alleen wanneer de logaritmen in de oorspronkelijke expressie gedefinieerd zijn. Bijvoorbeeld ln(x²) is gedefinieerd voor x ≠ 0, maar 2 ln x alleen voor x > 0. De identiteit ln(x²) = 2 ln x geldt daarom op x > 0, niet op alle niet-nulwaarden. Op het grotere domein is ln(x²) = 2 ln|x|.

Een vergelijking herschrijven kan haar zichtbare domein veranderen. Noteer de oorspronkelijke voorwaarden vóór het combineren en controleer oplossingen daarin. De regels maken geen ongeldige oorspronkelijke invoer alsnog geldig.
''',[[9,10,11,12,13]]),
 ('basis','ln, log en basisverandering','theory',r'''
# ln, log en basisverandering

De natuurlijke logaritme ln gebruikt grondtal e ≈ 2,71828. De tiendelige logaritme log gebruikt in deze cursus grondtal 10. ln en log geven dus meestal verschillende getallen, maar elk kan worden gebruikt om een andere logaritme te berekenen.

Uit bʸ = x volgt na ln nemen: y ln b = ln x. Dus $\log_bx=\ln x/\ln b$. Hetzelfde werkt met tiendelige logaritmen zolang teller en noemer dezelfde basis gebruiken.

:::example Een niet-gehele exponent
log₂ 10 = ln 10 / ln 2 ≈ 3,32193. Controle: 2^3,32193 ligt dicht bij 10. Voor exacte antwoorden kun je `ln(10)/ln(2)` invoeren; rond alleen als de vraag daarom vraagt.
:::

ln e = 1 en ln(e³) = 3. Bij een exponentieel model kun je gᵗ ook schrijven als e^(t ln g). Dit is dezelfde functie, geen ander groeimodel.
''',[[14,15,16,17]]),
 ('grafiek','Grafiek en inverse','theory',r'''
# Grafiek en inverse

De grafieken y = 2ˣ en y = log₂ x zijn spiegelbeelden in de lijn y = x. Een punt (3; 8) op de eerste geeft (8; 3) op de tweede. Het domein van log₂ is (0; ∞), het bereik is alle reële getallen.

Bij b > 1 stijgt log_b x. De grafiek gaat door (1; 0) en (b; 1), maar niet door de oorsprong. Als x van rechts naar nul nadert, daalt de logaritme onbegrensd; x = 0 is een verticale asymptoot. Bij 0 < b < 1 is de grafiek dalend.

{{ widget: function-plot fn="ln(x)/ln(2)" fn2="x" xmin="-1" xmax="8" ymin="-4" ymax="8" }}

Bij ln(x − 2) moet x − 2 > 0, dus x > 2. De asymptoot schuift naar x = 2. Een grafiekvenster toont slechts een deel van de functie; gebruik de formule voor het volledige domein.
''',[[18,19,20,21]]),
 ('geschiedenis','Napier en rekenen met tabellen','history',r'''
# Napier en rekenen met tabellen

John Napier publiceerde in 1614 tabellen die ingewikkelde berekeningen eenvoudiger maakten. Zijn oorspronkelijke schaal en goniometrische tabellen waren niet identiek aan de huidige ln-notatie. Henry Briggs speelde een belangrijke rol bij de ontwikkeling en verspreiding van tiendelige logaritmetabellen. Zie [Open University over Napier en Briggs](https://www.open.edu/openlearn/science-maths-technology/mathematics-statistics/john-napier/content-section-7) en [MacTutor over Briggs](https://mathshistory.st-andrews.ac.uk/Biographies/Briggs/).

De rekenkundige kracht komt uit de productregel. Voor een product zoek je twee logaritmen op, tel je ze op en zoek je daarna het getal met die logaritme terug. Een vermenigvuldiging wordt zo vervangen door optellen plus tabelgebruik. Delen wordt aftrekken, een macht wordt vermenigvuldigen met de exponent.

:::example Een eenvoudig tabelidee
In basis 10 hebben 100 en 1000 logaritmen 2 en 3. Hun product heeft logaritme 5 en is dus 100 000. Met tabellen konden ook minder ronde getallen zo worden verwerkt, met beperkte nauwkeurigheid door afronding en interpolatie.
:::

De huidige rekenmachine vervangt het zoeken in tabellen, maar de onderliggende verbanden blijven hetzelfde. Vermeld steeds je basis en laat genoeg tussencijfers staan.
''',[[22,23]]),
 ('vergelijkingen','Vergelijkingen en tijdsdrempels','practice',r'''
# Vergelijkingen en tijdsdrempels

Los 100 × 1,2ᵗ = 500 op. Deel door 100, neem ln en maak t vrij: $t=\ln5/\ln1{,}2\approx8{,}827$ tijdseenheden. Als alleen gehele meetmomenten zijn toegestaan, is het eerste moment met minstens 500 gelijk aan 9. Controleer de grens met het vorige meetmoment.

Bij groei is de verdubbelingstijd ln 2 / ln g. Bij verval is de halveringstijd ln(1/2) / ln g. Bij 0 < g < 1 zijn teller en noemer beide negatief; de tijd is positief.

:::example Domein controleren
log₂(x − 1) = 3 geeft x − 1 = 8, dus x = 9. De oorspronkelijke voorwaarde x > 1 is voldaan. Bij ln x + ln(x − 2) = ln 3 is de oorspronkelijke voorwaarde x > 2. Na combineren krijg je x(x − 2) = 3, met kandidaten 3 en −1. Alleen 3 voldoet aan het oorspronkelijke domein.
:::

:::challenge Continu en discreet
Een model start bij 200 en groeit per jaar met factor 1,08. Bepaal het continue tijdstip waarop 400 bereikt wordt op twee decimalen. Bepaal ook het eerste gehele jaar met minstens 400 en controleer het voorafgaande jaar.
:::
''',[[24,25,26,27,28,29,30]]),
 ('samenvatting','Samenvatting','summary',r'''
# Samenvatting

Een logaritme is een exponent: log_b x = y betekent bʸ = x. De voorwaarden zijn b > 0, b ≠ 1 en x > 0. Een logaritme-uitkomst mag wel negatief zijn.

Producten worden sommen, quotiënten verschillen en machten factoren, met positieve oorspronkelijke argumenten. Er is geen overeenkomstige regel die een som van argumenten rechtstreeks uiteen trekt.

Gebruik ln x / ln b om een basis te veranderen. Bij N₀gᵗ = M geeft dat t = ln(M/N₀)/ln g. Controleer oorspronkelijke domeinen, tijdseenheden en een eventueel discreet meetrooster. Rond een continue tijd niet blind af: de gevraagde ongelijkheid bepaalt welk geheel meetmoment telt.

{{ quiz }}
''',[])],
 exercises=[
 e('Los 2ᵗ = 8 op.',3,['2³ = 8.'],['Zoek de exponent.']),
 e('Los x³ = 8 op over de reële getallen.',2,['De derdemachtswortel van 8 is 2.'],['Hier is de basis onbekend.']),
 e('Bereken log₃ 81.',4,['3⁴ = 81.'],['Vertaal naar een macht.']),
 e('Bereken log₂ 1.',0,['2⁰ = 1.'],['Elke geldige basis tot nul geeft één.']),
 e('Bereken log₂(1/8).',-3,['2⁻³ = 1/8.'],['Een negatieve uitkomst is toegestaan.']),
 e('Bereken log_(1/2) 8.',-3,['(1/2)⁻³ = 8.'],['De basis is kleiner dan één.']),
 e('Bestaat log₂ 0 als reëel getal? Geef 1 voor ja, 0 voor nee.',0,['Positieve machten leveren nooit nul.'],['Controleer het argument.']),
 e('Is grondtal 1 geldig voor een logaritme? Geef 1 voor ja, 0 voor nee.',0,['1ʸ geeft steeds dezelfde uitvoer.'],['Een inverse vereist dat de exponent terug te vinden is.']),
 e('Bereken log₂ 8 + log₂ 4.',5,['3 + 2 = 5, of log₂ 32.'],['Een som van logaritmen hoort bij een product.']),
 e('Bereken log₂ 32 − log₂ 4.',3,['5 − 2 = 3, of log₂ 8.'],['Gebruik de quotiëntregel.']),
 e('Bereken log₂(8²).',6,['2 log₂ 8 = 2×3 = 6.'],['Gebruik de machtsregel.']),
 e('Is ln(x²) = 2 ln x geldig bij x = −2 als vergelijking van reële expressies? Geef 1 voor ja, 0 voor nee.',0,['De rechterkant bevat ln(−2), dat niet reëel gedefinieerd is.'],['Controleer beide oorspronkelijke expressies.']),
 expr('Combineer ln x + ln 3 voor x > 0 tot één logaritme.','ln(3*x)',['Productregel: ln(3x).'],['De argumenten worden vermenigvuldigd.']),
 e('Bereken ln(e³).',3,['ln en de macht met basis e heffen elkaar op.'],['De exponent is 3.']),
 e('Bereken log 1000, met basis 10.',3,['10³ = 1000.'],['In deze cursus betekent log basis 10.']),
 expr('Geef log₂ 10 exact met natuurlijke logaritmen.','ln(10)/ln(2)',['Basisverandering: ln 10 / ln 2.'],['Gebruik dezelfde basis in teller en noemer.']),
 dec('Bereken log₂ 10 op twee decimalen.',3.32,['ln 10 / ln 2 ≈ 3,32.'],['Behoud tussencijfers.']),
 e('Geef het domein van ln(x − 2) als interval.','(2;inf)',['x − 2 > 0, dus x > 2.'],['Het argument moet strikt positief zijn.'],type='interval'),
 e('Geef het nulpunt van ln(x − 2).',3,['ln 1 = 0, dus x − 2 = 1.'],['Bij een nulpunt is het argument één.']),
 e('Bij y = 2ˣ hoort punt (3; 8). Geef het bijbehorende punt op y = log₂ x.','(8;3)',['Een inverse verwisselt invoer en uitvoer.'],['Spiegel in y = x.'],type='coordinate'),
 e('Is log_(1/2) x stijgend? Geef 1 voor ja, 0 voor nee.',0,['Bij basis tussen 0 en 1 is de logaritme dalend.'],['Denk aan de inverse van een vervalfunctie.']),
 e('Bereken log 100 + log 1000 in basis 10.',5,['2 + 3 = 5.'],['Het product is 100 000.']),
 e('Een getal heeft tiendelige logaritme 5. Wat is dat getal?',100000,['10⁵ = 100 000.'],['Keer terug naar de macht.']),
 e('Los log₂(x − 1) = 3 op.',9,['x − 1 = 8, dus x = 9; x > 1.'],['Vertaal naar 2³.']),
 dec('Los 100×1,2ᵗ = 500 op. Rond t op twee decimalen af.',8.83,['t = ln5/ln1,2 ≈ 8,83.'],['Deel eerst door de beginwaarde.'],mode='independent'),
 e('In hetzelfde model zijn alleen gehele meetmomenten toegestaan. Geef de eerste gehele t met minstens 500.',9,['Continue grens ≈ 8,827; N(8)<500 en N(9)>500.'],['Kies het eerste toegestane moment boven de grens.'],mode='independent'),
 dec('Bereken de verdubbelingstijd bij factor 1,08 per jaar op twee decimalen.',9.01,['ln2/ln1,08 ≈ 9,01 jaar.'],['De totale factor moet 2 zijn.'],mode='independent'),
 dec('Bereken de halveringstijd bij factor 0,9 per uur op twee decimalen.',6.58,['ln0,5/ln0,9 ≈ 6,58 uur.'],['Beide logaritmen zijn negatief.'],mode='independent'),
 e('Los ln x + ln(x − 2) = ln 3 op over de reële getallen.',3,['Domein x > 2.','x(x−2)=3 geeft kandidaten 3 en −1; alleen 3 is geldig.'],['Controleer het oorspronkelijke domein vóór combineren.'],mode='independent',difficulty=3),
 e('N(t)=200×1,08ᵗ, t in jaren. Geef het continue verdubbelingsmoment op twee decimalen en het eerste gehele jaar met minstens 400.',[dict(label='continu tijdstip',type='decimal',answer=9.01,tolerance=0.005),dict(label='eerste gehele jaar',type='numeric',answer=10)],['t=ln2/ln1,08≈9,0065.','N(9)≈399,80 <400; N(10)≈431,78 >400.'],['Rond de continue grens niet eerst af tot een geheel getal.'],type='multiple',mode='challenge',difficulty=4)
 ],
 quiz=[
 e('Bereken log₅ 125.',3,['5³ = 125.']),
 e('Bereken log₃(1/27).',-3,['3⁻³ = 1/27.']),
 e('Bereken log₇ 1.',0,['7⁰ = 1.']),
 e('Bereken log₂ 16 + log₂ 2.',5,['4 + 1.']),
 e('Bereken log₃ 81 − log₃ 3.',3,['4 − 1.']),
 e('Bereken log₅(25³).',6,['3 log₅ 25 = 3×2.']),
 e('Bereken ln(e⁴).',4,['ln is inverse van exp.']),
 e('Bereken log 0,01 in basis 10.',-2,['10⁻² = 0,01.']),
 e('Geef het domein van ln(x + 3) als interval.','(-3;inf)',['x + 3 > 0.'],type='interval'),
 e('Los log₃(x + 1) = 2 op.',8,['x + 1 = 9; x = 8 voldoet aan x > −1.']),
 e('Los 5ˣ = 125 op.',3,['5³ = 125.']),
 dec('Los 2ˣ = 7 op, op twee decimalen.',2.81,['ln7/ln2 ≈ 2,81.']),
 dec('Een model groeit met factor 1,1 per jaar. Geef de verdubbelingstijd op twee decimalen.',7.27,['ln2/ln1,1 ≈ 7,27.']),
 e('Hetzelfde model begint bij 100. Geef het eerste gehele jaar met minstens 200.',8,['Continue grens ≈ 7,273; jaar 7 is te vroeg.']),
 e('Los ln x + ln(x − 3) = ln 4 op.',4,['Domein x > 3.','x²−3x−4=0 geeft 4 en −1; alleen 4 voldoet.'],difficulty=3)
 ])

save(25,
 question='Wat betekent een vaste procentuele verandering, en hoe vertaal je die naar een model met de juiste tijdseenheid?',
 summary='Groeifactoren, exponentiële functies, tijdseenheden, verdubbeling en halvering. Je vergelijkt lineaire en exponentiële modellen en beoordeelt hun grenzen.',
 goals=['Je onderscheidt een vast verschil van een vaste verhouding.', 'Je zet procentuele verandering om in een positieve groeifactor.', 'Je stelt N(t) = N₀gᵗ op en bepaalt parameters uit waarnemingen.', 'Je rekent een groeifactor om naar een andere tijdseenheid.', 'Je berekent verdubbelings- en halveringstijden in eenvoudige exacte situaties.', 'Je onderscheidt een continu model van uitsluitend gehele meetmomenten.', 'Je gebruikt samengestelde groei in hypothetische rekenvoorbeelden.', 'Je beoordeelt constantheid van groei en grenzen aan extrapolatie.'],
 glossary=[('Groeifactor','De factor waarmee de hoeveelheid per gekozen tijdseenheid wordt vermenigvuldigd.'),('Exponentiële groei','Een model met dezelfde positieve factor bij gelijke tijdstappen.'),('Beginwaarde','De hoeveelheid bij t = 0.'),('Verdubbelingstijd','De tijd waarin een positief exponentieel model tweemaal zo groot wordt.'),('Halveringstijd','De tijd waarin een positief exponentieel vervalmodel halveert.'),('Extrapolatie','Een model gebruiken buiten het gebied waarvoor gegevens beschikbaar zijn.'),('Samengestelde groei','Groei berekenen over de al gegroeide hoeveelheid.')],
 formulas=[('Exponentieel model',r'N(t)=N_0g^t\quad(N_0>0,\ g>0)','t is gemeten in de tijdseenheid van g.'),('Percentage naar factor',r'g=1+\frac{p}{100}','p is een getekend veranderingspercentage; daling heeft p < 0.'),('Andere tijdseenheid',r'g_{\Delta t}=g^{\Delta t}','Δt is uitgedrukt in de oorspronkelijke tijdseenheid.'),('Factor uit twee metingen',r'g=\left(\frac{N(t_2)}{N(t_1)}\right)^{1/(t_2-t_1)}','Positieve hoeveelheden en verschillende tijden zijn vereist.'),('Verdubbeling en halvering',r'g^{T_d}=2,\qquad g^{T_h}=\frac12','Verdubbeling bij g > 1, halvering bij 0 < g < 1.')],
 lessons=[
 ('introductie','Steeds hetzelfde erbij of steeds dezelfde factor?','intro',r'''
# Steeds hetzelfde erbij of steeds dezelfde factor?

Een hoeveelheid begint bij 100. Model A voegt elk uur 20 toe: 100, 120, 140, 160. Model B vermenigvuldigt elk uur met 1,2: 100, 120, 144, 172,8. De eerste stap is gelijk; daarna lopen de modellen uiteen.

Bij lineaire groei is de **absolute verandering** constant. Bij exponentiële groei is de **relatieve verandering** constant. In model B is de toename steeds 20% van de hoeveelheid die er op dat moment al is.

{{ goals }}

{{ widget: function-plot fn="100*1.2^x" fn2="100+20*x" xmin="0" xmax="10" ymin="0" ymax="700" }}

De grafiek gebruikt een continu tijdmodel. Als je alleen op gehele uren telt of afrekent, zijn juist die afzonderlijke tijdstippen rechtstreeks van toepassing.
''',[[1,2,3,4]]),
 ('groeifactor','Percentage en factor','theory',r'''
# Percentage en factor

Bij 8% groei blijft 100% bestaan en komt 8% erbij: factor 1,08. Bij 8% daling blijft 92% bestaan: factor 0,92. Een factor boven 1 geeft groei, tussen 0 en 1 verval, en factor 1 een constante hoeveelheid.

Terugrekenen over één tijdstap betekent delen door g. Na een daling van 20% is de factor 0,8. De herstelfactor is 1/0,8 = 1,25: je hebt daarna 25% groei nodig om de oorspronkelijke waarde terug te krijgen.

:::warning Factor nul of negatief
Een daling van 100% maakt een hoeveelheid nul. Dat is niet hetzelfde als een exponentieel model met strikt positieve factor voor alle reële tijden. Een negatieve factor laat tekens afwisselen op gehele tijden en is niet zonder meer reëel gedefinieerd bij willekeurige tijden. In deze module gebruiken we g > 0.
:::

Als opeenvolgende waarden 50, 60, 72, 86,4 zijn, geeft delen door de vorige waarde steeds 1,2. De verschillen 10, 12 en 14,4 zijn juist niet constant.
''',[[5,6,7,8,9]]),
 ('model','Een formule opstellen','theory',r'''
# Een formule opstellen

Bij beginwaarde N₀ en factor g per tijdseenheid geldt $N(t)=N_0g^t$. Controleer t = 0: omdat g⁰ = 1 krijg je de beginwaarde. Controleer t = 1: je vermenigvuldigt eenmaal met g.

:::example Terug naar het begin
Een hoeveelheid is na 2 uur 144 en groeit met factor 1,2 per uur. Dan is $N_0=144/1{,}2^2=100$. De passende formule is $N(t)=100\times1{,}2^t$.
:::

Ken je twee waarnemingen op verschillende tijden, dan is hun verhouding de factor over de tussenliggende periode. Bij N(1) = 150 en N(3) = 216 is g² = 216/150 = 1,44. De positieve factor is g = 1,2; daarna vind je N₀ = 150/1,2 = 125.

Voor een positieve beginwaarde en factor is de functiewaarde altijd positief. Een vervalmodel nadert nul, maar bereikt nul niet op een eindig tijdstip. In een echte telcontext kan afronden of een detectiegrens wel betekenen dat iets als nul wordt geregistreerd.
''',[[10,11,12,13,14]]),
 ('tijdseenheden','De tijdseenheid verandert de factor','theory',r'''
# De tijdseenheid verandert de factor

Een factor hoort altijd bij een periode. Als een hoeveelheid elk uur verdubbelt, is de factor per drie uur 2³ = 8. Per halfuur is de factor √2 ≈ 1,4142. Twee halve stappen moeten samen dezelfde factor geven als één hele stap.

Een jaarlijkse factor 1,21 geeft in een gelijkmatig exponentieel model een factor √1,21 = 1,1 per halfjaar. Een jaarpercentage eenvoudig door twee delen zou 10,5% geven; tweemaal factor 1,105 is echter niet 1,21.

{{ widget: function-plot fn="a^x" a="1.5" amin="0.2" amax="2" astep="0.1" xmin="-3" xmax="4" ymin="0" ymax="16" }}

Alle grafieken gaan door (0; 1). Kies een factor onder 1 en bekijk zowel positieve als negatieve tijden. Negatieve tijd betekent terugrekenen binnen het model; het betekent niet dat zo'n hoeveelheid fysisch vóór het gekozen begin gemeten is.
''',[[15,16,17,18]]),
 ('verdubbelen','Verdubbelen, halveren en grenzen passeren','theory',r'''
# Verdubbelen, halveren en grenzen passeren

Een model met factor 2 per 3 uur verdubbelt elke 3 uur. De formule kan als $N(t)=N_0\,2^{t/3}$ worden geschreven. Na 6 uur is de factor 4; na 1,5 uur de factor √2.

Een model met factor 1/2 per 4 uur heeft halveringstijd 4 uur: $N(t)=N_0(1/2)^{t/4}$. Na 8 uur blijft een kwart over. De tijd om te halveren hangt in dit model niet van de beginhoeveelheid af.

:::example Een discrete drempel
Een hoeveelheid begint bij 100 en wordt ieder heel uur met 1,5 vermenigvuldigd. Na 3 uur is het 337,5; na 4 uur 506,25. Het eerste gehele meetmoment waarop de hoeveelheid minstens 500 is, is dus uur 4. In een continu model wordt 500 al tussen uur 3 en 4 bereikt.
:::

Voor factoren die geen eenvoudige machten opleveren, heb je een nieuwe omkeerbewerking nodig om de tijd te berekenen. Die bewerking is de logaritme uit de volgende module. Controleer intussen tijden met een tabel of grafiek en onderscheid ‘gelijk aan’, ‘minstens’ en ‘meer dan’.
''',[[19,20,21,22]]),
 ('geschiedenis','Groei als model en als historische aanname','history',r'''
# Groei als model en als historische aanname

In zijn bevolkingsessay uit 1798 stelde Thomas Malthus een meetkundige toename van onbelemmerde bevolkingsgroei tegenover een rekenkundige toename van voedselvoorziening. Dat historische onderscheid komt overeen met vaste factoren tegenover vaste verschillen. De [eerste editie van het essay](https://oll.libertyfund.org/titles/malthus-an-essay-on-the-principle-of-population-1798-1st-ed) laat ook zien dat het ging om een bredere maatschappelijke redenering, niet alleen een neutrale formule.

Een exponentieel model beschrijft wat er gebeurt **als** de relatieve groeivoet constant blijft. Daaruit volgt niet dat elke bevolking werkelijk langdurig exponentieel groeit, of dat voedselproductie altijd lineair moet toenemen. Schaarste, technologie, migratie en veranderende geboorte- en sterftepatronen kunnen de aannames veranderen.

:::example Hypothetische groei
1000 organismen groeien in een vereenvoudigd model met factor 2 per dag. Na 10 dagen voorspelt het model 1 024 000. Dat grote getal is aanleiding om te vragen of ruimte en voeding voldoende blijven, niet om de uitkomst automatisch als werkelijkheid te presenteren.
:::
''',[[23,24]]),
 ('toepassingen','Samengestelde groei en modelcontrole','practice',r'''
# Samengestelde groei en modelcontrole

Een hypothetisch bedrag van 1000 groeit jaarlijks met 5%, zonder stortingen, opnames of kosten. Na twee jaar is het $1000\times1{,}05^2=1102{,}50$. Enkelvoudige groei van tweemaal 50 zou 1100 geven. Bij samengestelde groei groeit de eerste toename de tweede periode ook mee.

Percentages achter elkaar combineer je via factoren. 10% groei en daarna 20% daling geeft factor $1{,}1\times0{,}8=0{,}88$: netto 12% daling. Het verschil 10% − 20% = −10% gebruikt ten onrechte dezelfde basis voor beide stappen.

Vergelijk een model met extra meetpunten. Als de factoren bij gelijke tijdstappen sterk uiteenlopen, is één constante factor wellicht ongeschikt. Een grafiek met een beperkt venster kan belangrijke verschillen verhullen; noteer daarom ook getallen en eenheden.

:::challenge Factor en beginwaarde uit data
N(1) = 150 en N(3) = 216 in een positief exponentieel model. Bereken de factor per uur, de beginwaarde en N(4). Controleer beide gegeven meetpunten met je formule.
:::
''',[[25,26,27,28,29,30]]),
 ('samenvatting','Samenvatting','summary',r'''
# Samenvatting

Lineaire verandering heeft vaste verschillen; exponentiële verandering vaste factoren bij gelijke stappen. Het positieve model is N(t) = N₀gᵗ. Benoem beginmoment, tijdseenheid en domein.

- Percentage p naar factor: 1 + p/100, met negatief p bij daling.
- Vooruit: vermenigvuldig; terug: deel door de factor.
- Een periode van Δt: gebruik g^Δt, niet automatisch Δt maal het percentage.
- Verdubbeling: totale factor 2; halvering: totale factor 1/2.
- Een discrete drempel: controleer het eerste toegestane meetmoment.

Constante groei is een aanname. Beoordeel aanvullende waarnemingen, beperkingen en de betekenis van extrapolatie voordat je een modelvoorspelling gebruikt.

{{ quiz }}
''',[])],
 exercises=[
 e('Start 100, elk uur +20. Wat is de hoeveelheid na 3 uur?',160,['100 + 3×20 = 160.'],['Dit is vaste absolute groei.']),
 e('Start 100, elk uur factor 1,2. Wat is de hoeveelheid na 2 uur?',144,['100×1,2² = 144.'],['Groei over de gegroeide hoeveelheid.']),
 dec('Start 100, elk uur factor 1,2. Wat is de hoeveelheid na 3 uur?',172.8,['100×1,2³ = 172,8.'],['Vermenigvuldig driemaal.']),
 e('Waarden 10, 20, 40, 80 bij gelijke stappen: vaste factor of vast verschil? Geef 1 voor vaste factor, 0 voor vast verschil.',1,['Elke verhouding is 2; de verschillen veranderen.'],['Deel opeenvolgende waarden.']),
 dec('Geef de factor bij 8% groei.',1.08,['1 + 8/100 = 1,08.'],['Er blijft 100% en komt 8% bij.']),
 dec('Geef de factor bij 8% daling.',0.92,['1 − 8/100 = 0,92.'],['Hoeveel procent blijft over?']),
 e('Een groeifactor is 1,15. Geef het groeipercentage.',15,['(1,15 − 1)×100 = 15.'],['Trek eerst één af.']),
 e('Een factor is 0,75. Geef het dalingspercentage als positief getal.',25,['(1 − 0,75)×100 = 25.'],['75% blijft over.']),
 e('Na 20% daling: met hoeveel procent moet de nieuwe waarde groeien om de oude terug te krijgen?',25,['1/0,8 = 1,25, dus 25%.'],['De basis is nu kleiner.']),
 expr('Beginwaarde 100 en factor 1,2 per uur. Geef N(t) als expressie in t.','100*1.2^t',['N(t)=100×1,2ᵗ.'],['De tijd staat in de exponent.']),
 e('N(t)=100×2ᵗ. Bereken N(4).',1600,['100×16 = 1600.'],['Vier verdubbelingen.']),
 e('N(2)=144 en factor 1,2 per uur. Bereken N(0).',100,['144/1,2² = 100.'],['Reken twee stappen terug.']),
 dec('N(1)=150 en N(3)=216. Bereken de positieve factor per uur.',1.2,['g² = 216/150 = 1,44, dus g = 1,2.'],['De metingen liggen twee uur uit elkaar.']),
 e('N(1)=150 en factor 1,2 per uur. Bereken de beginwaarde.',125,['150/1,2 = 125.'],['Eén stap terug.']),
 e('Een factor per uur is 2. Wat is de factor per 3 uur?',8,['2³ = 8.'],['Combineer drie gelijke stappen.']),
 expr('Een factor per uur is 2. Geef de exacte factor per halfuur.','sqrt(2)',['Twee halfuurfactoren moeten product 2 hebben.'],['Neem de positieve vierkantswortel.']),
 dec('De factor per jaar is 1,21. Bereken de factor per halfjaar.',1.1,['√1,21 = 1,1.'],['Gebruik een halve exponent.']),
 e('De factor per halfjaar is 1,1. Geef het groeipercentage per jaar.',21,['1,1² = 1,21, dus 21%.'],['Combineer factoren, niet percentages.']),
 e('N(t)=100×2^(t/3), t in uren. Wat is de verdubbelingstijd in uren?',3,['Bij t = 3 is de exponent 1.'],['Zoek totale factor 2.']),
 e('N(t)=80×(1/2)^(t/4), t in uren. Bereken N(8).',20,['Exponent 2: 80×1/4 = 20.'],['Twee halveringen.']),
 e('N(t)=80×(1/2)^(t/4). Geef de halveringstijd.',4,['Elke 4 tijdseenheden halveert de hoeveelheid.'],['Lees de tijdschaal.']),
 e('Start 100, factor 1,5 per heel uur. Wat is het eerste gehele uur met minstens 500?',4,['N(3)=337,5 en N(4)=506,25.'],['Controleer de grens en het voorgaande uur.']),
 e('Start 1000, factor 2 per dag. Bereken de modelwaarde na 10 dagen.',1024000,['1000×2¹⁰ = 1 024 000.'],['Een voorspelling is afhankelijk van aannames.']),
 e('Bereikt N(t)=100×0,5ᵗ de waarde nul op een eindig tijdstip? Geef 1 voor ja, 0 voor nee.',0,['Een positieve factor tot een eindige macht blijft positief.'],['Naderen is niet bereiken.']),
 dec('Een hypothetisch bedrag 1000 groeit tweemaal met 5%, zonder kosten of transacties. Geef de eindwaarde op twee decimalen.',1102.5,['1000×1,05² = 1102,50.'],['Samengestelde groei.'],mode='independent'),
 e('10% groei en daarna 20% daling. Geef de netto daling in procent als positief getal.',12,['1,1×0,8 = 0,88: 12% daling.'],['Elke stap heeft haar eigen basis.'],mode='independent'),
 e('Een hoeveelheid daalt van 200 naar 162 in twee gelijke tijdstappen bij vaste factor. Geef het dalingspercentage per stap.',10,['g = √(162/200) = 0,9.'],['Neem de positieve wortel van de totale factor.'],mode='independent'),
 e('Start 64, halveringstijd 2 uur. Na hoeveel uur is er 8 over?',6,['64 → 32 → 16 → 8: drie halveringen van 2 uur.'],['Tel de halveringen.'],mode='independent'),
 expr('Een model begint bij 64 en halveert elke 2 uur. Geef N(t) als expressie in uren t.','64*(1/2)^(t/2)',['Elke 2 uur stijgt de exponent met 1.'],['Verbind tijd en aantal halveringen.'],mode='independent'),
 e('N(1)=150 en N(3)=216. Geef factor per uur, beginwaarde en N(4).',[dict(label='factor per uur',type='decimal',answer=1.2,tolerance=0.005),dict(label='beginwaarde',type='numeric',answer=125),dict(label='N(4)',type='decimal',answer=259.2,tolerance=0.005)],['g=√(216/150)=1,2.','N₀=150/1,2=125.','N(4)=216×1,2=259,2.'],['Gebruik het tijdsverschil van twee uur.'],type='multiple',mode='challenge',difficulty=4)
 ],
 quiz=[
 dec('Geef de factor bij 12% groei.',1.12,['1 + 0,12.']),
 dec('Geef de factor bij 12% daling.',0.88,['1 − 0,12.']),
 e('Factor 1,04: hoeveel procent groei?',4,['(1,04−1)×100.']),
 e('Start 50, factor 3 per stap. Hoeveel na 3 stappen?',1350,['50×27.']),
 e('Start 200, factor 0,5 per stap. Hoeveel na 3 stappen?',25,['200/8.']),
 e('Na 2 stappen is N = 242 bij factor 1,1. Bereken N₀.',200,['242/1,21.']),
 e('Een hoeveelheid gaat van 100 naar 144 in twee gelijke stappen. Geef het groeipercentage per stap.',20,['g=√1,44=1,2.']),
 e('Factor 2 per uur: factor per 4 uur?',16,['2⁴.']),
 e('Factor 4 per uur: factor per halfuur?',2,['√4.']),
 e('N(t)=30×2^(t/5). Wat is de verdubbelingstijd?',5,['De exponent neemt in 5 tijdseenheden met één toe.']),
 e('N(t)=120×(1/2)^(t/3). Bereken N(6).',30,['Twee halveringen.']),
 e('20% groei en daarna 20% daling. Geef de netto daling in procent.',4,['1,2×0,8=0,96.']),
 dec('Een hypothetisch bedrag 500 groeit tweemaal met 10%. Bereken de eindwaarde.',605,['500×1,1².']),
 e('Start 40, factor 2 per heel uur. Wat is het eerste gehele uur met meer dan 300?',3,['N(2)=160, N(3)=320.']),
 e('Een hoeveelheid halveert elke 3 uur. Na hoeveel uur is nog 1/8 over?',9,['Drie halveringen × 3 uur.'],difficulty=3)
 ])
