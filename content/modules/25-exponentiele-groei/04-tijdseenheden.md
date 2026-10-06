# De tijdseenheid verandert de factor

Een bank vermeldt een rente van 6% per jaar. Je spaargeld wordt echter elke maand bijgeschreven, en je wilt weten welk percentage per maand daarbij hoort. Een viruspopulatie verdubbelt elke twee dagen, en je wilt weten hoeveel het is na één dag. In beide gevallen moet je een groeifactor omzetten naar een andere tijdseenheid. Dat is geen kwestie van delen, maar van machten.

## Een grotere tijdseenheid: machten

Een factor hoort altijd bij een periode. Als een hoeveelheid elk uur verdubbelt, is de factor per uur 2. Per twee uur gebeurt de verdubbeling twee keer: $2\cdot2=2^2=4$. Per drie uur is de factor $2^3=8$. Algemeen: als $g$ de factor is per tijdseenheid, dan is de factor per $k$ tijdseenheden gelijk aan $g^k$.

| Periode | 1 uur | 2 uur | 3 uur | 6 uur | 24 uur |
|---|---|---|---|---|---|
| Factor bij $g=2$ per uur | 2 | 4 | 8 | 64 | 16 777 216 |

## Een kleinere tijdseenheid: wortels en gebroken machten

Voor een kortere periode heb je een factor nodig die, twee keer toegepast, de factor voor de hele periode oplevert. Bij verdubbeling per uur is de factor per halfuur $x$ met $x\cdot x=2$, dus $x=\sqrt2\approx1{,}4142$. Per kwartier is het $2^{1/4}\approx1{,}1892$. Algemeen is de factor over een deel $\tfrac1n$ van de periode gelijk aan $g^{1/n}$.

:::formula Omrekenen van tijdseenheid
Is $g$ de factor per tijdseenheid en is $\Delta t$ de nieuwe periode, uitgedrukt in de oorspronkelijke tijdseenheid, dan is de factor over die periode
$$g_{\Delta t}=g^{\Delta t}.$$
Per maand uit een jaarfactor: $g_{\text{maand}}=g_{\text{jaar}}^{1/12}$. Per jaar uit een maandfactor: $g_{\text{jaar}}=g_{\text{maand}}^{12}$.
:::

:::example Van jaarfactor naar halfjaarfactor
De jaarfactor is 1,21. Wat is de factor per halfjaar?

Stap 1: een halfjaar is $\tfrac12$ jaar, dus $g_{\text{half}}=1{,}21^{1/2}=\sqrt{1{,}21}=1{,}1$.

Stap 2: controle. Twee halfjaarstappen: $1{,}1\cdot1{,}1=1{,}21$. ✓

Een jaarpercentage van 21% hoort dus bij 10% per halfjaar, niet bij 10,5%. Wie 21% door 2 deelt, krijgt factor 1,105; twee keer vermenigvuldigen daarmee geeft $1{,}105^2=1{,}221$, en dat is 22,1% per jaar.
:::

:::example Van maandpercentage naar jaarpercentage
Een bedrag groeit elke maand met 1%. Hoeveel procent is dat per jaar?

Stap 1: maandfactor $1+1/100=1{,}01$.

Stap 2: jaarfactor $1{,}01^{12}=1{,}1268\ldots$

Stap 3: per jaar is dat ongeveer 12,7% groei. Wie $12\times1\%=12\%$ rekent, mist de rente-op-rente over het jaar. Bij kleine percentages is het verschil beperkt; bij grote percentages loopt het snel op.
:::

## Een veelgemaakte fout: percentages delen

De verleiding is groot om het jaarpercentage door 12 te delen om een maandpercentage te vinden. Maar de factor $1{,}06$ per jaar geeft **niet** $1+6/12=1{,}005$ per maand, want $1{,}005^{12}=1{,}0617$, ofwel 6,17% per jaar in plaats van 6%. De juiste maandfactor is

$$1{,}06^{1/12}=1{,}00487,$$

dus ongeveer 0,487% per maand. Het verschil lijkt klein, maar bij langere periodes en grotere bedragen loopt het op. De fout zit in het idee dat een percentage een soort hoeveelheid is die je kunt verdelen. Een factor kun je alleen **in machten** opdelen.

:::warning Delen door 12 is fout
- Fout: $g_{\text{maand}}=g_{\text{jaar}}/12$ of $p_{\text{maand}}=p_{\text{jaar}}/12$.
- Goed: $g_{\text{maand}}=g_{\text{jaar}}^{1/12}$.

Een uitzondering is de **nominale rente** die banken soms vermelden: een "6% per jaar" waar de bank per maand 0,5% bijschrijft. Dat is een afspraak over de maandrente, geen omrekening, en het werkelijke jaarrendement is dan 6,17%.
:::

## De grafiek bij verschillende factoren

Alle grafieken van $y=g^x$ gaan door $(0;\,1)$. Kies met de schuifregelaar een factor onder 1 en bekijk zowel positieve als negatieve tijden. Negatieve tijd betekent terugrekenen binnen het model; het betekent niet dat zo'n hoeveelheid fysisch vóór het gekozen begin gemeten is.

{{ widget: function-plot fn="a^x" a="1.5" amin="0.2" amax="2" astep="0.1" xmin="-3" xmax="4" ymin="0" ymax="16" }}

Je ziet ook dat $g^{1/2}$ tussen $g^0=1$ en $g^1=g$ ligt, precies in het midden in de zin van verhouding: de halve stap is het meetkundig gemiddelde van begin en eind.

## Een exponentiële schaal in andere eenheden

Het kiezen van de eenheid verandert de formule maar niet de werkelijkheid. Een hoeveelheid die per jaar met factor 1,21 groeit, kun je schrijven als

$$N(t)=b\cdot1{,}21^t\quad(t\text{ in jaren})\qquad\text{of}\qquad N(m)=b\cdot1{,}1^{m}\quad(m\text{ in halfjaren}),$$

met $m=2t$. Het is dezelfde functie in twee notaties. Als jij de eenheid van $t$ aanpast, moet je de factor óók aanpassen, anders klopt het model niet meer.

:::tip Een snelle plausibiliteitscheck
Een factor per kleinere periode moet dichter bij 1 liggen dan de factor per grotere periode, maar aan dezelfde kant van 1. Bij groei is $g^{1/12}$ iets boven 1; bij afname is het iets onder 1. Staat er een getal aan de verkeerde kant, dan heb je de machten verwisseld.
:::

## Oefenen

{{ exercises: 25-015, 25-016, 25-017, 25-018, 25-033, 25-034 }}
