## Twee aanvragen op je bureau

Je werkt bij een subsidieadviesbureau en krijgt twee intakegesprekken. Beide bedrijven zijn fictief. Het doel is niet om te zeggen "dit mag" of "dit mag niet", maar om het werk in stukken te knippen en per stuk te beoordelen. Zo praat je met een ondernemer: je zoekt het technische knelpunt in een project dat de ondernemer zelf in marketingtermen beschrijft.

**Vlietstra Planning B.V.** maakt roosterplanningssoftware voor ziekenhuizen. Voor een nieuwe klant moet het systeem binnen twee seconden een heel rooster herberekenen als een verpleegkundige zich ziek meldt. De standaard oplosmethoden uit de bibliotheken die het bedrijf gebruikt, doen er minuten over, en niemand in het team weet zeker of er een snellere aanpak bestaat. Drie ontwikkelaars proberen daarom een eigen heuristiek, in C++, die de bestaande roosters gedeeltelijk hergebruikt. Daarnaast bouwt het team een nieuw beheerscherm, een koppeling met het personeelssysteem van het ziekenhuis en een rapportagemodule.

**Kruijff Kunststoffen B.V.** spuit verpakkingsdozen en wil een deel van het nieuwe granulaat vervangen door gerecycled materiaal. De eerste proefseries laten onverwachte afwijkingen zien: sommige dozen krimpen ongelijk. Het bedrijf voert een reeks proeven uit met verschillende temperaturen en percentages, en kiest daarna de instelling die het minste uitval geeft. Daarna wil het ook weten *waarom* het gerecyclede materiaal zich zo gedraagt, en start een onderzoek naar het kristallisatiegedrag van de mengsels, met een vooraf vastgelegde onderzoeksopzet en meetreeks.

## Vlietstra: één knelpunt in een groter project

Begin met de vraag naar het knelpunt. Dat is hier concreet: bestaande oplosmethoden halen de snelheid niet, en het team kan niet uit eigen kennis zeggen of een snellere aanpak bestaat. Dat is een informatietechnologisch probleem, geen functionele wens. De oplossing, een eigen heuristiek in een formele programmeertaal, is technisch nieuw voor het bedrijf als het niet al algemeen beschikbaar is; het team probeert iteratief en heeft werkelijk onzekerheid over het resultaat. Dat past bij technisch nieuwe programmatuur, en het S&O eindigt zodra het werkingsprincipe, de heuristiek, is aangetoond.

Het beheerscherm, de koppeling met het personeelssysteem en de rapportagemodule zijn daarentegen het bouwen van nieuwe functionaliteit op basis van beschikbare technologie. Daar is geen technisch knelpunt dat het team niet met gewone vakkennis oplost: de uren daarvan horen niet in de S&O-uren. Het is aan de adviseur om dit scherp te scheiden, en aan het bedrijf om de uren straks zo te boeken. Dat de hele oplossing voor de ziekenhuis nieuw is, speelt geen rol.

:::example Welke uren horen erbij?
In het project werkt één ontwikkelaar in een bepaalde maand 120 uur. Hij besteedt 70 uur aan het ontwikkelen en testen van de heuristiek, 30 uur aan het beheerscherm en 20 uur aan de koppeling met het personeelssysteem. De 70 uur voor de heuristiek horen bij het technische knelpunt: dat zijn S&O-uren. De 50 overige uren zijn bouwwerk met bekende technieken en tellen niet mee. De S&O-uren in die maand zijn dus 70 van 120, ruim 58%.
:::

{{ exercise: 02-010 }}

## Kruijff: eerst testen, dan verklaren

Bij Kruijff zit het nuttige onderscheid in twee fasen. De eerste reeks proeven is een *vaststellende* aanpak: het bedrijf brengt de effecten van temperatuur en percentage in kaart en kiest de beste instelling. Er wordt gezocht naar verbanden en correlaties, niet naar een verklaring. De handleiding noemt zo'n aanpak bij een spuitgietbedrijf uitdrukkelijk als geen TWO. Het kan nog wel zijn dat het bedrijf in deze fase een technisch knelpunt oplost en dus onder een ontwikkelingsproject valt, maar dat hangt af van of het technisch nieuw werk is of het toepassen van bekende optimalisatiemethoden. Dat zou je in het gesprek moeten navragen.

De tweede fase is anders. Het onderzoek naar het kristallisatiegedrag zoekt een *verklaring* voor een verschijnsel dat het bedrijf niet kan geven met algemeen beschikbare kennis, er is een risico dat de verklaring niet gevonden wordt, de opzet staat vooraf vast en het onderzoek levert nieuwe kennis op. Het ligt in een technisch vakgebied (materiaalkunde, scheikunde). Dat is het profiel van technisch-wetenschappelijk onderzoek. Voor de aanvraag moet de onderzoeksopzet bekend zijn en moeten er concrete onderzoeksvragen worden opgesteld.

## Zelfstandig oefenen

Pas de redenering toe op een nieuw geval waarbij een deel van het werk wel en een deel niet meetelt.

:::challenge Een machinebouwer en een prototype
Een machinebouwer ontwikkelt een nieuwe verpakkingsmachine met een technisch nieuw vouwprincipe. Hij bouwt eerst een prototype om het principe aan te tonen: 800 uur. Dat prototype wordt daarna gesloopt. Vervolgens bouwt hij een eerste machine voor een klant, die ook wordt geleverd: 1.200 uur. Hoeveel uren kunnen als S&O-uren worden opgevoerd, als je uitgaat van de regels over prototypes met en zonder gebruikerswaarde? Leg uit waarom de tweede bouwfase er niet bij hoort.
:::

{{ exercise: 02-011 }}
