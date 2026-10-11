# Steeds hetzelfde erbij of steeds dezelfde factor?

Er bestaat een oud verhaal over de uitvinder van het schaakspel. Als beloning mocht hij zelf zijn prijs noemen, en hij vroeg iets dat bescheiden klonk: één korrel graan op het eerste veld van het bord, twee op het tweede, vier op het derde, en zo steeds het dubbele tot en met het vierundzestigste veld. De heerser, zo gaat het verhaal, vond dit een belachelijk kleine vraag en stemde meteen toe. Pas toen de schatbewaarders gingen rekenen, bleek dat in het hele rijk niet genoeg graan lag.

Het is een **legende**: voor zover bekend is het verhaal voor het eerst opgetekend in 1256, eeuwen nadat het schaakspel zelf was ontstaan, en er bestaan meerdere versies met verschillende afloop. Historisch bewijs voor een echte uitvinder en een echte heerser is er niet. Waar het om gaat, is dat het verhaal een rekenkundige verrassing bevat die iedereen kan natrekken. Op veld $n$ liggen $2^{n-1}$ korrels, dus:

| Veld | 1 | 2 | 3 | 4 | 10 | 20 | 30 | 64 |
|---|---|---|---|---|---|---|---|---|
| Korrels op dat veld | 1 | 2 | 4 | 8 | 512 | 524 288 | 536 870 912 | 9 223 372 036 854 775 808 |

Het totaal over alle 64 velden is $2^{64}-1 = 18\,446\,744\,073\,709\,551\,615$ korrels, ongeveer $1{,}8\times10^{19}$. Dat is ver boven alles wat ooit is geoogst. Vergelijk dat met een bord waarop elk veld **één korrel meer** heeft dan het vorige (1, 2, 3, ..., 64): daar liggen in totaal maar 2080 korrels. Het begin lijkt op beide borden hetzelfde. Het verschil zit niet in de eerste stappen, maar in wat er daarna met elke stap gebeurt.

:::question Eerst nadenken
Je mag kiezen uit twee aanbiedingen voor dertig dagen. Aanbod A: elke dag € 1000. Aanbod B: op dag 1 krijg je 1 cent, en elke volgende dag het dubbele van de dag ervoor. Welk aanbod kies je? Schat eerst zonder te rekenen, en reken daarna door: op welke dag levert B voor het eerst meer op dan A op diezelfde dag, en wat is het totaal na dertig dagen?
:::

Als je dit hebt uitgeprobeerd, zie je het patroon: B is de eerste twee weken onbeduidend en levert op dag 18 al € 1310,72 per dag op. Over dertig dagen is het totaal € 10 737 418,23, tegenover € 30 000 bij aanbod A. Onze intuïtie is gebouwd op optellen: elke dag een vast bedrag erbij. Verdubbelen is een ander soort verandering, en die intuïtie moet je bewust leren bijstellen.

## Waarom bestaat deze wiskunde?

Veel dingen in de wereld veranderen niet met een vast bedrag per tijdstap, maar met een vast **percentage**. Een bedrag op een spaarrekening krijgt rente over het saldo dat er op dat moment staat. Een populatie bacteriën bestaat uit individuen die zich elk delen, dus hoe meer er zijn, hoe sneller het aantal toeneemt. Een radioactieve stof valt uiteen en heeft daardoor steeds minder atomen die nog kunnen vervallen. In al die gevallen is de verandering evenredig met de hoeveelheid die er al is, en dat leidt vanzelf tot een vaste vermenigvuldigingsfactor per tijdstap.

Dit hoofdstuk bouwt daar een gereedschapskist voor: de groeifactor, de formule $N(t)=b\cdot g^t$, het omrekenen naar andere tijdseenheden en het begrip verdubbelings- en halveringstijd. De grote vraag in de tweede helft is niet alleen *hoe* je rekent, maar ook *wanneer* je het model mag vertrouwen. Een formule die voor tien dagen klopt, kan voor honderd dagen onzin geven.

## Twee soorten groei naast elkaar

Een hoeveelheid begint bij 100. Model A voegt elk uur 20 toe, model B vermenigvuldigt elk uur met 1,2.

| Uur | 0 | 1 | 2 | 3 | 4 | 5 |
|---|---|---|---|---|---|---|
| Model A (+20) | 100 | 120 | 140 | 160 | 180 | 200 |
| Model B (×1,2) | 100 | 120 | 144 | 172,8 | 207,4 | 248,8 |

Beide modellen starten bij 100 en zitten na het eerste uur allebei op 120. Daarna loopt B steeds verder weg. Kijk naar de toenames: bij A is elke stap precies 20; bij B zijn de stappen 20, 24, 28,8, 34,6, 41,5. Elke stap is 20% van wat er op dat moment al is.

![Staafdiagram van twee modellen over zes uur: lineair en exponentieel](/images/diagrams/m25-lineair-exponentieel.svg "Eigen diagram: lineaire groei (+20 per uur) naast exponentiële groei (×1,2 per uur)")

Dit levert twee herkenningstekens op die je in de rest van de module steeds gebruikt:

:::definition Lineair en exponentieel
Bij **lineaire** verandering is het **verschil** tussen opeenvolgende waarden constant (vast bedrag erbij of eraf). Bij **exponentiële** verandering is de **verhouding** tussen opeenvolgende waarden constant (vaste factor). Je herkent het type dus door te *aftrekken* of te *delen*.
:::

:::example Welk type is dit?
Gegeven zijn de waarden 5, 15, 45, 135 bij gelijke tijdstappen.

Stap 1: de verschillen zijn 10, 30 en 90. Die zijn niet constant, dus het is niet lineair.

Stap 2: de verhoudingen zijn $15/5=3$, $45/15=3$ en $135/45=3$. Die zijn constant.

Conclusie: exponentieel met groeifactor 3 per stap. Controleer altijd álle opeenvolgende paren, niet alleen het eerste paar: de rij 5, 15, 25, 35 begint ook met een verhouding van 3 en is toch lineair.
:::

{{ widget: function-plot fn="100*1.2^x" fn2="100+20*x" xmin="0" xmax="10" ymin="0" ymax="700" }}

In de grafiek zie je de kromme van model B steeds verder boven de rechte lijn van model A uitkomen. De grafiek gebruikt een continu tijdmodel. Als je alleen op gehele uren telt of afrekent, zijn juist die afzonderlijke tijdstippen rechtstreeks van toepassing; de tussenliggende punten zijn dan een rekenhulp en geen waarneming.

## Machten in actie

Het snelle groeien komt uit het herhaald vermenigvuldigen: drie keer vermenigvuldigen met 1,2 is $1{,}2^3$. Bij factor 2 zie je de machten van twee. Speel met de tabel hieronder en let op hoe de balkjes sneller dan evenredig groeien.

{{ widget: powers base=2 max=10 }}

:::tip Vergelijken zonder formule
Een snelle test op een tabel: deel elke waarde door de vorige. Komt er steeds hetzelfde getal uit, dan heb je een groeifactor. Komt er een steeds kleiner getal uit (bijvoorbeeld 1,2 dan 1,17 dan 1,14), dan is de groei langzamer dan exponentieel, zoals bij lineaire groei.
:::

{{ goals }}

{{ glossary }}

## Oefenen

Begin met rekenen aan beide soorten groei en benoem steeds welk type je voor je hebt.

{{ exercises: 25-001, 25-002, 25-003, 25-004 }}
