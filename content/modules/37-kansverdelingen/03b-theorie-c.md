# Cumulatieve kansen en benaderingen

In de eerste les van deze module stelden we een vraag: hoe groot is de kans dat het aantal keer kop bij 1000 worpen tussen 480 en 520 ligt? Om dat exact uit te rekenen moet je 41 binomiale kansen optellen. In deze les leer je eerst hoe je met kansen op "hoogstens" en "minstens" omgaat, en daarna hoe de normale verdeling zo'n som in één stap benadert.

## Cumulatieve kansen

Bij een binomiale verdeling zijn niet alleen afzonderlijke waarden interessant, maar ook gebieden: "hoogstens drie defecten", "minstens acht keer kop". Zulke kansen zijn sommen van afzonderlijke kansen. De **cumulatieve kans** $P(X\le k)$ is de kans op een waarde tot en met $k$:

$$
P(X\le k)=\sum_{i=0}^{k}\binom ni p^i(1-p)^{n-i}.
$$

Een formule is pas bruikbaar als je de woorden in de opgave goed vertaalt. Bij gehele aantallen geldt:

| In woorden | Notatie | Gelijk aan |
|---|---|---|
| hoogstens $k$ | $X\le k$ | $P(X\le k)$ |
| minder dan $k$ | $X<k$ | $P(X\le k-1)$ |
| minstens $k$ | $X\ge k$ | $1-P(X\le k-1)$ |
| meer dan $k$ | $X>k$ | $1-P(X\le k)$ |

De derde regel is de belangrijkste en de gevaarlijkste. De gebeurtenis "minstens $k$" is het complement van "minder dan $k$", en minder dan $k$ is hoogstens $k-1$. Daarom trek je $P(X\le k-1)$ van 1 af, niet $P(X\le k)$. Schrijf je $1-P(X\le k)$, dan heb je de kans op *meer dan* $k$ berekend en de waarde $k$ zelf weggelaten.

:::example Minstens acht keer kop
Bij $X\sim\operatorname{Bin}(10;0{,}5)$ is $P(X\ge8)$ gevraagd. De gebeurtenis "minstens acht" bestaat uit de waarden 8, 9 en 10. Je kunt dus direct sommeren:

$$
P(X\ge8)=\frac{45+10+1}{1024}=\frac{56}{1024}\approx0{,}0547.
$$

Via het complement krijg je hetzelfde: $1-P(X\le7)$. Berekende je in plaats daarvan $1-P(X\le8)$, dan vond je $P(X=9)+P(X=10)=11/1024\approx0{,}0107$. Dat is een heel ander getal, omdat je de waarde 8 hebt weggelaten.
:::

:::tip Wanneer het complement sneller is
Het complement is vooral handig bij "minstens één". Dan geldt $P(X\ge1)=1-P(X=0)=1-(1-p)^n$: één term in plaats van $n$ termen. Bij 20 producten met 5% kans op een defect is de kans op minstens één defect $1-0{,}95^{20}\approx0{,}6415$. Het is dus vrij waarschijnlijk dat een steekproef van twintig er ten minste één bevat, ook al is elk product bijna altijd goed.
:::

{{ exercises: 37-022, 37-023, 37-024 }}

## Wanneer een klok een teller benadert

Cumulatieve kansen uitrekenen kost veel werk als $n$ groot is. Dit is het probleem dat De Moivre in 1733 oploste. Wanneer je naar de kansen van $\operatorname{Bin}(n,p)$ kijkt voor groter wordende $n$, zie je een opvallend verschijnsel: de staafjes vormen steeds meer een klokvorm. Dat kun je met dobbelstenen zelf zien. Eén dobbelsteen geeft een vlakke verdeling; bij twee, en zeker bij drie dobbelstenen krijgt de som een duidelijke top in het midden. Laat de simulatie een paar keer lopen en vergelijk de relatieve frequenties met de theoretische kansen.

{{ widget: dice dice=3 seed=37 }}

Die klokvorm is te beschrijven met een normale verdeling die dezelfde verwachting en spreiding heeft als de binomiale verdeling:

$$
X\sim\operatorname{Bin}(n,p)\quad\Longrightarrow\quad X\approx Y\sim N\bigl(\mu=np,\ \sigma^2=np(1-p)\bigr).
$$

Dit is een benadering en geen gelijkheid, dus je moet weten wanneer ze goed genoeg is. De benadering werkt goed wanneer de binomiale verdeling niet te scheef is, dat wil zeggen wanneer er zowel veel verwachte successen als veel verwachte mislukkingen zijn. De gangbare vuistregel is

$$
np\ge5\quad\text{en}\quad n(1-p)\ge5,
$$

waarbij sommige boeken strenger zijn en $np(1-p)\ge10$ eisen. Welke van de twee je gebruikt, zegt je opdracht of je docent; beide zijn bedoeld als richtlijn, niet als garantie. Voor extreme staarten, zeer kleine kansen ver van het midden, kan de normale benadering ook bij voldoende grote $n$ een flinke relatieve fout geven. Dan kun je beter de exacte binomiale kansen gebruiken.

## De continuïteitscorrectie

Er blijft een subtiel punt over. De binomiale variabele neemt alleen gehele waarden aan; de normale variabele is continu. Een staaf bij $k$ in een histogram heeft breedte 1 en beslaat het interval van $k-\tfrac12$ tot $k+\tfrac12$. De kans $P(X=60)$ komt dus overeen met de oppervlakte onder de kromme tussen 59,5 en 60,5. Als je de grens zonder aanpassing op 60 legt, mis je een halve staaf.

Daarom verschuif je de grens met een halve eenheid naar de kant die de bedoelde waarde meeneemt:

| Binomiale gebeurtenis | Normale benadering $Y$ |
|---|---|
| $X\le k$ | $Y\le k+0{,}5$ |
| $X<k$ | $Y\le k-0{,}5$ |
| $X\ge k$ | $Y\ge k-0{,}5$ |
| $X>k$ | $Y\ge k+0{,}5$ |
| $X=k$ | $k-0{,}5\le Y\le k+0{,}5$ |

Een geheugensteun: bij "hoogstens $k$" wil je de hele staaf bij $k$ erbij, dus je gaat een halve stap *voorbij* $k$. Bij "minstens $k$" wil je de hele staaf bij $k$ ook, dus je begint een halve stap *vóór* $k$. Kies je de verkeerde richting, dan sla je juist een hele staaf over of tel je er een extra bij.

:::example Honderd muntworpen
Bij $X\sim\operatorname{Bin}(100;0{,}5)$ zijn $\mu=50$ en $\sigma=\sqrt{25}=5$. Beide voorwaarden $np=50\ge5$ en $n(1-p)=50\ge5$ zijn ruim vervuld. Voor $P(X\le60)$ gebruik je de normale grens 60,5:

$$
z=\frac{60{,}5-50}{5}=2{,}1,\qquad P(X\le60)\approx\Phi(2{,}1)=0{,}9821.
$$

Zonder correctie zou je $z=2$ gebruiken en $\Phi(2)=0{,}9772$ vinden. De exacte binomiale waarde is $0{,}9824$, dus de gecorrigeerde benadering ligt veel dichterbij. De correctie is geen kosmetiek: ze verbetert de benadering merkbaar.
:::

:::example De kans op precies één waarde
Ook $P(X=50)$ is te benaderen. De bijbehorende strook loopt van 49,5 tot 50,5, dus $z$ loopt van $-0{,}1$ tot $0{,}1$. Met $\Phi(0{,}1)=0{,}5398$ is de kans $0{,}5398-0{,}4602=0{,}0796$. De exacte waarde is $0{,}0796$. Zonder de correctie zou de strook breedte nul hebben, en de benaderde kans zou ten onrechte nul zijn.
:::

{{ exercises: 37-015, 37-016 }}

Het is verstandig om altijd eerst de voorwaarden te controleren voordat je rekent. Bij de volgende opgaven oefen je dat, samen met de correctie zelf.

{{ exercises: 37-017, 37-018, 37-037 }}

:::example De opening: tussen 480 en 520 keer kop
Terug naar de vraag uit het begin: $X\sim\operatorname{Bin}(1000;0{,}5)$, dus $\mu=500$ en $\sigma=\sqrt{250}\approx15{,}81$. De gebeurtenis $480\le X\le520$ wordt met correctie $479{,}5\le Y\le520{,}5$. Dat geeft $z=\pm20{,}5/15{,}81\approx\pm1{,}30$. Dan is de kans ongeveer $2\cdot0{,}9032-1=0{,}8064$, in de orde van $80\%$. Zonder software is deze berekening in een halve minuut te doen; de exacte som van 41 termen levert $0{,}8052$.
:::

{{ exercises: 37-038, 37-039, 37-040 }}

## Een continue meting vraagt geen continuïteitscorrectie

De verschuiving met 0,5 is bedoeld voor een discrete telling die je met een continue verdeling benadert. Voor een normaal model van een inhoud of een lengte gebruik je de opgegeven grens rechtstreeks, zonder correctie. Een vulgewicht van "meer dan 530 g" is gewoon $x=530$.

{{ exercise: 37-019 }}

:::warning Een model is geen eigenschap van alle data
Reistijden zijn vaak rechtsscheef; een mengsel van groepen kan twee toppen hebben. Dan geeft een normaal model een slecht beeld, hoe mooi de formule ook is. Een normale benadering van een **steekproefgemiddelde** kan toch bruikbaar zijn, maar dat maakt de oorspronkelijke metingen niet normaal verdeeld. In module 38 onderzoek je dat onderscheid.
:::
