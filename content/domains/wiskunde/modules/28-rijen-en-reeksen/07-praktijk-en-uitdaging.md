# Sparen, afbetalen en een eerlijke maandlast

Rijen en reeksen zijn niet alleen iets voor puzzels over konijnen en schaakborden. De grootste dagelijkse toepassing is geld: sparen met een vaste inleg, een lening afbetalen, een hypotheek of studieschuld. Achter al die berekeningen zit dezelfde meetkundige somformule uit les 4. In deze les leer je die situaties zelf te modelleren. Rekenmachines en websites doen het rekenwerk, maar wie de structuur begrijpt, kan controleren of een bedrag klopt en welke aannames erachter zitten.

:::warning Rekenvoorbeelden, geen financieel advies
De rentepercentages in deze les zijn bedacht om mee te rekenen. Echte producten hebben vaak variabele rente, kosten, belastingen en voorwaarden. De wiskunde blijft wel dezelfde.
:::

## 1. Sparen met een vaste inleg

Stel: je zet aan het begin van elk jaar € 1.200 op een spaarrekening met 3% rente per jaar. De rente wordt aan het eind van elk jaar bijgeschreven. Hoeveel staat er op de rekening direct na de tiende inleg?

Je kunt het jaar voor jaar uitrekenen met een **recursie**. Noem $B(n)$ het saldo direct na de inleg in jaar $n$ (met $n = 1$ voor het eerste jaar):

$$
B(1) = 1200, \qquad B(n+1) = 1{,}03 \cdot B(n) + 1200.
$$

Het saldo groeit eerst een jaar met rente (factor $1{,}03$), daarna komt de nieuwe inleg erbij. Na tien jaar dat recept volgen kost veel werk. Kijk daarom anders: **volg elke inleg afzonderlijk**.

- De tiende inleg staat er net: € 1.200.
- De negende inleg heeft één jaar rente gehad: $1200 \cdot 1{,}03$.
- De achtste inleg twee jaar: $1200 \cdot 1{,}03^2$.
- …
- De eerste inleg negen jaar: $1200 \cdot 1{,}03^9$.

Het saldo is de som van al die bedragen, en dat is een **meetkundige reeks** met eerste term $1200$, reden $1{,}03$ en $N = 10$ termen:

$$
B(10) = 1200 + 1200 \cdot 1{,}03 + \ldots + 1200 \cdot 1{,}03^9 = 1200 \cdot \frac{1{,}03^{10} - 1}{1{,}03 - 1}.
$$

:::example Uitgewerkt voorbeeld: tien jaar sparen
1. **Macht:** $1{,}03^{10} \approx 1{,}343916$.
2. **Breuk:** $\dfrac{1{,}343916 - 1}{0{,}03} = \dfrac{0{,}343916}{0{,}03} \approx 11{,}463879$.
3. **Saldo:** $1200 \cdot 11{,}463879 \approx 13\,756{,}66$.

Direct na de tiende inleg staat er dus ongeveer € 13.756,66 op de rekening. Daarvan heb je zelf $10 \cdot 1200 = 12\,000$ euro ingelegd; de rest, ruim € 1.756, is rente (en rente op rente).

**Controle:** het saldo moet groter zijn dan wat je inlegde (€ 12.000) en kleiner dan wanneer alles tien jaar rente had gehad ($12\,000 \cdot 1{,}03^{10} \approx 16\,127$). Dat klopt.
:::

:::tip Let op het moment van meten
Vraagt iemand naar het saldo **aan het eind** van het tiende jaar, na de rentebijschrijving, dan krijgt elke inleg nog één jaar extra rente: $13\,756{,}66 \cdot 1{,}03 \approx 14\,169{,}35$. Lees bij spaarvragen altijd precies op welk moment het saldo wordt gevraagd, en of de inleg aan het begin of aan het eind van de periode plaatsvindt.
:::

{{ exercises: 28-036, 28-037 }}

## 2. Een lening afbetalen

Bij een lening werkt het omgekeerd. Je leent € 10.000 tegen 1% rente per maand. Aan het eind van elke maand wordt eerst de rente berekend over de schuld, daarna betaal je € 300 af. De schuld $R(n)$ na $n$ maanden volgt de recursie

$$
R(0) = 10\,000, \qquad R(n+1) = 1{,}01 \cdot R(n) - 300.
$$

Ook hier helpt het om twee dingen apart te volgen:

1. **De schuld zonder aflossing** zou na $n$ maanden zijn gegroeid tot $10\,000 \cdot 1{,}01^n$.
2. **De betalingen** zijn ook geld dat had kunnen renderen. De eerste betaling (na maand 1) heeft tegen het eind van maand $n$ nog $n - 1$ maanden "rente bespaard", de laatste geen enkele. Samen is dat de meetkundige reeks $300 + 300 \cdot 1{,}01 + \ldots + 300 \cdot 1{,}01^{n-1} = 300 \cdot \dfrac{1{,}01^n - 1}{0{,}01}$.

De restschuld is het verschil:

$$
R(n) = 10\,000 \cdot 1{,}01^n - 300 \cdot \frac{1{,}01^n - 1}{0{,}01}.
$$

:::example Uitgewerkt voorbeeld: restschuld na een jaar
1. **Macht:** $1{,}01^{12} \approx 1{,}126825$.
2. **Schuld zonder aflossing:** $10\,000 \cdot 1{,}126825 \approx 11\,268{,}25$.
3. **Waarde van de betalingen:** $300 \cdot \dfrac{0{,}126825}{0{,}01} \approx 300 \cdot 12{,}682503 \approx 3804{,}75$.
4. **Restschuld:** $11\,268{,}25 - 3804{,}75 \approx 7463{,}50$.

Na een jaar is de schuld dus ongeveer € 7.463,50. Je hebt $12 \cdot 300 = 3600$ euro betaald, maar de schuld is maar $10\,000 - 7463{,}50 = 2536{,}50$ euro gedaald. Het verschil, ruim € 1.063, ging op aan rente.

**Controle met de recursie:** na maand 1: $10\,000 \cdot 1{,}01 - 300 = 9800$; na maand 2: $9800 \cdot 1{,}01 - 300 = 9598$. De directe formule geeft voor $n = 2$: $10\,000 \cdot 1{,}0201 - 300 \cdot 2{,}01 = 10\,201 - 603 = 9598$. Klopt.
:::

## 3. De annuïteit: welk maandbedrag lost precies af?

Bij veel leningen en hypotheken betaal je elke periode **hetzelfde bedrag** $A$, zo gekozen dat de schuld na precies $N$ perioden nul is. Zo'n vast bedrag heet een **annuïteit**. In de formule voor de restschuld vervang je $300$ door $A$ en eis je $R(N) = 0$:

$$
L \cdot (1 + i)^N = A \cdot \frac{(1 + i)^N - 1}{i},
$$

met $L$ het geleende bedrag en $i$ de rente per periode als kommagetal (1% wordt $0{,}01$). Hieruit los je $A$ op. Je hoeft deze formule niet uit je hoofd te kennen; het gaat erom dat je hem kunt **afleiden** uit de somformule.

:::example Uitgewerkt voorbeeld: welk spaarbedrag past bij een doel?
Je wilt na 15 jaarlijkse inleggen (aan het begin van elk jaar) direct na de vijftiende inleg € 20.000 hebben. De rente is 2% per jaar. Hoe groot moet de jaarlijkse inleg $A$ zijn?

1. **Model:** zoals in paragraaf 1 is het saldo $A \cdot \dfrac{1{,}02^{15} - 1}{0{,}02}$.
2. **Macht:** $1{,}02^{15} \approx 1{,}345868$, dus de breuk is $\dfrac{0{,}345868}{0{,}02} \approx 17{,}293417$.
3. **Vergelijking:** $A \cdot 17{,}293417 = 20\,000$, dus $A \approx 1156{,}51$.

Je moet dus ongeveer € 1.156,51 per jaar inleggen; zonder rente zou het $20\,000 : 15 \approx 1333{,}33$ zijn.
:::

:::warning Rond pas aan het eind af
Bij financiële berekeningen met machten maakt vroeg afronden een merkbaar verschil. Rond $1{,}01^{36}$ af op $1{,}43$ in plaats van $1{,}430769$, en een maandbedrag verschuift al snel een paar euro. Reken met het volle getal in je rekenmachine en rond alleen het eindantwoord af op centen.
:::

{{ exercises: 28-038, 28-039 }}

## 4. Uitdaging

:::challenge Een eerlijke maandlast
Je leent € 10.000 tegen 1% rente per maand en wilt in precies 36 gelijke maandbedragen aflossen, telkens aan het eind van de maand. Leid uit de formule voor de restschuld af welk maandbedrag daarbij hoort. Controleer je antwoord met een spreadsheet: zet de recursie $R(n+1) = 1{,}01 \cdot R(n) - A$ in een kolom en kijk of je na 36 maanden (bijna) op nul uitkomt.
:::

{{ exercise: 28-040 }}
