# Per maand, per jaar en het jaarlijks kostenpercentage

Rente wordt lang niet altijd één keer per jaar bijgeschreven. Een creditcard rekent per maand, een hypotheek wordt per maand afgelost, en sommige spaarrekeningen schrijven per kwartaal of zelfs per dag rente bij. Om zulke producten eerlijk te vergelijken, moet je alle rentes naar **dezelfde periode** omrekenen. Dat is dezelfde vaardigheid als in module 25, waar je een groeifactor per jaar omzette naar een groeifactor per maand of per uur.

## Van maandrente naar jaarrente

Stel: een rekening geeft 0,5% rente per maand, en die rente wordt elke maand bijgeschreven. Hoeveel is dat per jaar?

De verleiding is groot om te zeggen: $12 \times 0{,}5\% = 6\%$. Maar dat klopt niet, omdat er elke maand rente op rente komt. Werk daarom met groeifactoren:

- groeifactor per maand: $1{,}005$;
- groeifactor per jaar: twaalf maanden na elkaar, dus $1{,}005^{12} \approx 1{,}061678$;
- rente per jaar: $1{,}061678 - 1 = 0{,}061678$, ongeveer **6,17%**.

Die 6,17% is de rente die je **werkelijk** in een jaar ontvangt. Ze heet de **effectieve jaarrente**. De 6% die je krijgt door de maandrente met 12 te vermenigvuldigen heet de **nominale jaarrente**.

:::definition Nominale en effectieve rente
- De **nominale jaarrente** is de rente per periode maal het aantal perioden per jaar. Bij 0,5% per maand is dat $12 \times 0{,}5\% = 6\%$ "per jaar, maandelijks bijgeschreven".
- De **effectieve jaarrente** is de procentuele groei over een heel jaar als je rekening houdt met rente op rente.
:::

:::formula Effectieve jaarrente
Bij een rente $i_p$ per periode en $m$ perioden per jaar:
$$
1 + i_{\text{jaar}} = (1 + i_p)^m \qquad\Longleftrightarrow\qquad i_{\text{jaar}} = (1 + i_p)^m - 1
$$
:::

De effectieve rente is altijd minstens zo hoog als de nominale rente. Hoe vaker er wordt bijgeschreven, hoe groter het verschil.

:::example Twee spaarrekeningen vergelijken
Bank A geeft 3,00% rente, één keer per jaar bijgeschreven. Bank B adverteert met "2,96% per jaar, elke maand bijgeschreven". Welke rekening levert meer op?

Bank B schrijft elke maand $2{,}96\% : 12 \approx 0{,}24667\%$ bij. De effectieve jaarrente van bank B is
$$
\left(1 + \frac{0{,}0296}{12}\right)^{12} - 1 \approx 1{,}030004 - 1 \approx 3{,}00\%.
$$
De twee rekeningen zijn dus vrijwel even goed (B is een fractie beter). Wie alleen naar de nominale getallen 3,00 en 2,96 kijkt, kiest ten onrechte zonder meer voor A.
:::

{{ exercises: 33-008, 33-010 }}

## Van jaarrente naar maandrente

Omgekeerd kun je een jaarrente omzetten in een **gelijkwaardige maandrente**: de maandrente die, twaalf keer bijgeschreven, precies de jaarrente oplevert. Dan neem je de twaalfdemachtswortel van de groeifactor per jaar.

$$
1 + i_{\text{maand}} = (1 + i_{\text{jaar}})^{1/12}
$$

:::example 4% per jaar als maandrente
$1{,}04^{1/12} \approx 1{,}0032737$, dus de gelijkwaardige maandrente is ongeveer 0,327%. Dat is iets minder dan $4\% : 12 \approx 0{,}333\%$. Logisch: als je elke maand rente op rente krijgt, heb je per maand een iets lagere rente nodig om in een jaar op 4% uit te komen.
:::

:::warning Welke conventie gebruikt de bank?
In de praktijk bestaan beide conventies naast elkaar. Nederlandse hypotheekverstrekkers rekenen voor de maandlasten meestal met de **nominale** maandrente: jaarrente gedeeld door 12. Bij spaarrekeningen en beleggingen wordt vaak de **effectieve** jaarrente vermeld. Lees in een opgave (en in een contract) dus altijd goed welke rente bedoeld is. In deze module staat het er steeds bij.
:::

{{ exercises: 33-009, 33-011 }}

## Steeds vaker bijschrijven: Jacob Bernoulli en het getal e

In 1683 stelde de Zwitserse wiskundige Jacob Bernoulli zich een vraag die op het eerste gezicht puur financieel is. Stel dat een bank 100% rente per jaar geeft. Wie € 1 inlegt, heeft na een jaar € 2. Maar wat als de bank twee keer per jaar 50% bijschrijft? Of twaalf keer per jaar $\frac{100}{12}\%$? Of elke dag? Wordt het bedrag dan onbeperkt groot?

| bijschrijven | groeifactor over een jaar |
|---|---|
| 1 keer per jaar | $(1 + 1)^1 = 2$ |
| 2 keer per jaar | $(1 + \tfrac{1}{2})^2 = 2{,}25$ |
| 4 keer per jaar | $(1 + \tfrac{1}{4})^4 \approx 2{,}4414$ |
| 12 keer per jaar | $(1 + \tfrac{1}{12})^{12} \approx 2{,}6130$ |
| 365 keer per jaar | $(1 + \tfrac{1}{365})^{365} \approx 2{,}7146$ |

De groeifactor stijgt, maar steeds langzamer, en blijkt nooit boven een bepaald getal uit te komen. Dat grensgetal is

$$
e = \lim_{m \to \infty}\left(1 + \frac{1}{m}\right)^m \approx 2{,}71828.
$$

Het is het getal $e$ dat je in module 25 en 26 al tegenkwam als grondtal van de natuurlijke logaritme. De letter $e$ werd later door Leonhard Euler ingevoerd. Bernoulli vond dus een van de belangrijkste constanten van de wiskunde via een vraag over rente.

Bij **continue rente** wordt de rente als het ware op elk moment bijgeschreven. Bij een nominale jaarrente $r$ is de groeifactor over $t$ jaar dan $e^{r t}$. In de bankpraktijk komt continue rente zelden voor, maar in de financiële theorie (bijvoorbeeld bij het waarderen van opties) is ze standaard, omdat er zo mooi mee te rekenen valt.

:::example Maandelijks tegenover continu
€ 1.000 tegen een nominale rente van 12% per jaar:

- maandelijks bijgeschreven (1% per maand): na een jaar $1000 \times 1{,}01^{12} \approx 1126{,}83$;
- continu: $1000 \times e^{0{,}12} \approx 1127{,}50$.

Het verschil is 67 cent. Vaker bijschrijven dan elke maand maakt in de praktijk weinig meer uit.
:::

{{ exercise: 33-012 }}

## Het jaarlijks kostenpercentage

Bij een lening is de rente niet de enige kostenpost. Er kunnen afsluitkosten zijn, administratiekosten per maand of een verplichte verzekering. Om leningen eerlijk te kunnen vergelijken, moeten kredietverstrekkers in de Europese Unie het **jaarlijks kostenpercentage** (JKP) vermelden.

:::definition Jaarlijks kostenpercentage (JKP)
Het JKP is de **effectieve rente per jaar** waarbij alle verplichte kosten van een lening zijn meegerekend. Twee leningen met hetzelfde JKP zijn, wat de kosten betreft, even duur – ook als hun rente, kosten en termijnen er heel verschillend uitzien.
:::

Het idee is eenvoudig, ook al is de officiële berekening bij leningen met veel termijnen ingewikkeld. Je kijkt naar wat je **werkelijk ontvangt** en wat je **werkelijk terugbetaalt**, en vraagt: bij welke effectieve jaarrente zijn die twee in evenwicht?

:::example Afsluitkosten maken een lening duurder
Je leent € 2.000 voor één jaar tegen 8% rente. De kredietverstrekker houdt bij uitbetaling € 50 afsluitkosten in. Na een jaar betaal je € 2.000 plus € 160 rente terug.

- Je ontvangt werkelijk: $2000 - 50 = 1950$ euro.
- Je betaalt na een jaar terug: $2000 + 160 = 2160$ euro.
- De groeifactor van "jouw" schuld is $2160 : 1950 \approx 1{,}10769$.

Het JKP is dus ongeveer 10,77%, niet 8%. De afsluitkosten van € 50 lijken klein, maar ze worden betaald over een korte looptijd en drukken daarom zwaar op het jaarpercentage.
:::

:::tip Vergelijk leningen op het JKP
De rente in een advertentie zegt weinig als er kosten bij komen of als de rente per maand wordt gerekend. Het JKP neemt beide mee. Een kleine lening met hoge vaste kosten kan een JKP hebben dat veel hoger ligt dan de rente in de advertentie doet vermoeden.
:::

{{ exercise: 33-013 }}
