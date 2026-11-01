# Wat een subsidie doet, en hoe je dat meet

## Het effect in een vraag-en-aanbodmodel

We nemen een kleine markt voor uren onderzoek. Bedrijven vragen onderzoeksuren af bij onderzoekers, en onderzoekers bieden uren aan. De hoeveelheid $Q$ meten we in duizenden uren per jaar, de prijs $P$ in euro per uur. De vraag en het aanbod zijn:

$$
Q_v = 100 - P \qquad\qquad Q_a = 2P - 20
$$

In het evenwicht zijn vraag en aanbod gelijk: $100 - P = 2P - 20$, dus $3P = 120$ en $P = 40$. De hoeveelheid is dan $Q = 60$: er worden 60.000 uren onderzoek gedaan tegen € 40 per uur.

Nu geeft de overheid een subsidie van € 15 per uur aan de afnemers. De afnemer betaalt dan niet $P$ maar $P - 15$. Je moet hier goed opletten: in de vraagfunctie komt nu de prijs die de afnemer *werkelijk* betaalt, dus $Q_v = 100 - (P - 15) = 115 - P$. De vraagcurve schuift met € 15 omhoog. Het aanbod blijft gelijk, want de onderzoeker kijkt naar wat hij ontvangt. Het nieuwe evenwicht volgt uit $115 - P = 2P - 20$, dus $3P = 135$ en $P = 45$, met $Q = 70$.

:::example De uitkomst uitgewerkt
Zonder subsidie: prijs € 40, hoeveelheid 60.000 uren. Met subsidie van € 15 per uur:

1. De onderzoeker ontvangt € 45 per uur, € 5 meer dan eerst.
2. De afnemer betaalt € 45 − € 15 = € 30 per uur, € 10 minder dan eerst.
3. De hoeveelheid stijgt van 60.000 naar 70.000 uren, een toename van 10.000 uren.
4. De kosten voor de overheid zijn € 15 × 70.000 = € 1.050.000.

Let op de verdeling: de subsidie van € 15 komt voor € 10 bij de afnemer terecht en voor € 5 bij de aanbieder. Wie de subsidie formeel ontvangt, bepaalt dus niet wie er profijt van heeft. Het hangt af van hoe steil vraag en aanbod lopen. Een steile (weinig prijsgevoelige) kant houdt een groter deel van het voordeel vast, een flauwe (prijsgevoelige) kant trekt meer hoeveelheid aan.
:::

![Subsidie in een vraag-en-aanbodmodel: de vraagcurve schuift omhoog, de hoeveelheid stijgt van 60 naar 70](/images/economie/m03-subsidie-vraag-aanbod.svg "Eigen schema: markt voor onderzoeksuren, subsidie van € 15 per uur aan de afnemer")

## Wat levert die subsidie maatschappelijk op?

De overheid betaalt € 1.050.000 om 10.000 extra uren te krijgen. Is dat de moeite waard? Dat hangt af van de maatschappelijke baat van die extra uren. Stel dat elk uur onderzoek buiten het bedrijf een kennisvoordeel van € 15 oplevert (de externe baat). Dan zijn de maatschappelijke baten van het 61e tot en met het 70e duizend uur groter dan de kosten ervan, en de subsidie is precies goed gedimensioneerd. De welvaartswinst is de driehoek tussen de curven: $\tfrac{1}{2} \times 15 \times 10.000 = € 75.000$.

Dat is een klein bedrag naast € 1.050.000. De reden is dat de overheid ook betaalt voor de eerste 60.000 uren, die toch al werden gedaan. Dat deel, 60.000 × € 15 = € 900.000, verandert niets aan het gedrag. Het is een overdracht van belastingbetalers naar afnemers en aanbieders. Voor de economie als geheel is een overdracht neutraal; voor de beleidsmaker is het geld dat zijn doel niet dient. Geeft de overheid € 25 in plaats van € 15 terwijl de externe baat € 15 is, dan worden uren onderzocht waarvan de maatschappelijke baat lager is dan de kosten. Daar ontstaat een echt welvaartsverlies, de **deadweight loss**.

:::warning Twee betekenissen van "deadweight"
In het vraag-en-aanbodmodel is *deadweight loss* het welvaartsverlies van een te grote subsidie. In het subsidiebeleid zegt men *deadweight* of *meeliftgedrag* over steun aan activiteiten die toch al zouden plaatsvinden. Dat is een ander begrip, al hangt het samen. Houd ze uit elkaar: in de praktijk gaat het bijna altijd om de tweede.
:::

{{ exercises: 03-005, 03-006, 03-007 }}

## Additionaliteit, deadweight en verdringing

De hoeveelheid extra activiteit die door de subsidie ontstaat, heet **additionaliteit**. In het voorbeeld is dat 10.000 van de 70.000 uren, ongeveer 14%. De overige 60.000 uren, ongeveer 86%, zijn meeliftgedrag. Een bruikbare maat is de **prijs per extra eenheid**: € 1.050.000 voor 10.000 extra uren is € 105 per uur, terwijl de subsidie zelf maar € 15 per uur is. Hoe lager de additionaliteit, hoe duurder elk extra uur. Daarom stellen regelingen voorwaarden die de aanvrager dwingen te laten zien dat het project zonder steun niet of kleiner zou doorgaan, en daarom mag een project vaak niet vóór de aanvraag zijn gestart.

In een model is de additionaliteit afhankelijk van de steilheid van de curven: hoe prijsgevoeliger de vraag, hoe meer extra hoeveelheid een subsidie oplevert. In werkelijkheid kent niemand de curven, en meet je additionaliteit anders, zoals je hieronder ziet.

Een tweede probleem is **verdringing**. Als de subsidie de totale vraag naar onderzoekers laat stijgen terwijl er maar een beperkt aantal onderzoekers is, stijgt hun uurloon. Dat zie je in het model aan de aanbodzijde: de prijs gaat van € 40 naar € 45. Een deel van het effect is dan geen extra onderzoek maar een hoger loon, en bedrijven zonder subsidie doen minder onderzoek omdat het duurder werd. De nettowinst voor de economie is kleiner dan het effect bij de ontvangers. Vooral bij schaarse arbeid of bij een regeling die een hele sector bedient, is dat een serieus verschijnsel.

:::example Een prikkel die verkeerd uitpakt
Een regeling vergoedt 40% van de loonkosten van onderzoekers, zodat elk uur in de regeling goedkoper wordt. Onderzoekers zijn schaars, en bedrijven concurreren om dezelfde mensen. Een deel van de subsidie verdwijnt in hogere salarissen: de onderzoekers profiteren, de bedrijven iets minder, en er komt minder extra onderzoek dan het percentage doet vermoeden. Een evaluatie die alleen naar de ontvangers kijkt, ziet dat niet.
:::

{{ exercises: 03-008, 03-009 }}

## Hoe evalueer je een subsidie?

Evalueren is een poging om te weten wat er zonder het beleid was gebeurd, het zogeheten **tegenfeitelijke** (contrafactuele) scenario. Je kunt dat nooit rechtstreeks zien: een bedrijf krijgt de subsidie, of het krijgt haar niet. Daarom gebruik je vergelijkingen. De sterkste is een experiment waarbij toeval bepaalt wie steun krijgt; dat gebeurt zelden bij subsidies. Vaker vergelijkt men ontvangers met een vergelijkbare groep niet-ontvangers, voor en na de steun (een *verschil-in-verschillen*-aanpak), of benut men een grens in de regeling: bedrijven net boven en net onder een drempel zijn bijna gelijk, maar de een krijgt steun en de ander niet. Een goedkopere, minder betrouwbare methode is om ontvangers zelf te vragen: zou je het project ook zonder subsidie hebben gedaan? Zelfrapportage is vaak te optimistisch over wat de subsidie deed, zoals je al zag.

In Nederland doen onder meer het Centraal Planbureau (CPB), het Centraal Bureau voor de Statistiek (CBS) en onderzoeksbureaus in opdracht van ministeries dit soort onderzoek. Het CBS levert de microgegevens over bedrijven, het CPB analyseert beleidseffecten en onderzoekt ook of het geld efficiënt wordt besteed. De RPE schrijft voor dat beleid van het Rijk periodiek wordt geëvalueerd. De uitkomsten zijn geregeld genuanceerd: een regeling doet iets, maar minder dan de bedragen doen vermoeden, of het effect is groter voor kleine bedrijven dan voor grote. Zulke inzichten leiden tot bijsturing, bijvoorbeeld een hoger percentage voor kleine bedrijven of een plafond per bedrijf.

Een goede evaluatie begint vóór de regeling: met een duidelijke doelstelling, een meetbaar resultaat en gegevens over de situatie voorafgaand. Een regeling zonder meetbaar doel kun je achteraf niet beoordelen.

{{ exercises: 03-010 }}
