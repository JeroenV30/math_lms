# Tellen: product, permutaties en combinaties

Veel kansvragen komen neer op één vraag: *hoeveel?* Als alle uitkomsten even waarschijnlijk zijn, is de kans op een gebeurtenis het aantal gunstige uitkomsten gedeeld door het totaal aantal. Het hele probleem verschuift dan naar het tellen, en dat is minder triviaal dan het lijkt. Je wilt niet alle mogelijkheden één voor één opschrijven; je wilt ze in één keer kunnen tellen. In deze les bouw je daarvoor het gereedschap: de productregel, permutaties, combinaties en de driehoek van Pascal.

## De productregel

Een menu bestaat uit één van drie hoofdgerechten en één van twee desserts. Elk hoofdgerecht kan met elk dessert worden gecombineerd, dus zijn er $3\times2=6$ menu's. Dat is de **productregel**: als je een keuze maakt in $m$ mogelijkheden en daarna, onafhankelijk daarvan, een tweede keuze in $n$ mogelijkheden, dan zijn er $m\times n$ combinaties. Het werkt ook voor meer dan twee stappen: met $k$ stappen vermenigvuldig je de $k$ aantallen.

Let op wat deze regel wél en niet zegt. Het is een regel over **aantallen**. Hij zegt niets over de vraag of de menu's even vaak gekozen worden. Pas als je weet dat alle combinaties even waarschijnlijk zijn, mag je er een kans van maken.

:::example Herhaling toegestaan of niet?
Een code bestaat uit twee cijfers uit $\{1,2,3\}$.

*Herhaling toegestaan.* Er zijn 3 keuzes voor het eerste cijfer en 3 voor het tweede: $3\times3=9$ codes.

*Herhaling niet toegestaan.* Er zijn 3 keuzes voor het eerste cijfer. Daarna zijn er nog maar 2 over: $3\times2=6$ codes.

De regel blijft hetzelfde; wat verandert is hoeveel keuzes er per stap overblijven. Vraag jezelf dus steeds af: *hoeveel keuzes heb ik op dit moment?*
:::

Bij drie opeenvolgende eerlijke muntworpen zijn er $2\times2\times2=2^3=8$ mogelijke reeksen. Bij tien worpen zijn het er $2^{10}=1024$. Dit exponentiële aantal is de reden dat uitschrijven al snel onbegonnen werk is en tellen onmisbaar.

{{ exercises: 23-009, 23-010, 23-011, 23-012 }}

## Permutaties: volgorde zonder herhaling

Hoeveel manieren zijn er om vier boeken naast elkaar op een plank te zetten? Voor de eerste plek heb je 4 boeken, voor de tweede nog 3, dan 2 en tenslotte 1. Volgens de productregel zijn dat $4\times3\times2\times1=24$ rangschikkingen. Zo'n rangschikking noem je een **permutatie**.

Het product $n\times(n-1)\times\dots\times2\times1$ krijgt een eigen notatie, de **faculteit**:

$$
n!=n\times(n-1)\times\cdots\times2\times1,\qquad 0!=1.
$$

Dus $4!=24$, $5!=120$ en $10!=3\,628\,800$. Faculteiten groeien razendsnel; met tien boeken zijn er al meer dan drie miljoen volgordes. De afspraak $0!=1$ klinkt vreemd, maar sluit aan bij het tellen: er is precies één manier om niets te rangschikken, namelijk niets doen.

Vaak rangschik je niet *alle* $n$ objecten maar slechts $k$ ervan: de uitslag van een race met 5 deelnemers waarvan alleen de eerste drie plaatsen tellen. Voor de winnaar zijn er 5 mogelijkheden, voor de nummer twee nog 4, voor de nummer drie nog 3. Dat zijn $5\times4\times3=60$ mogelijke podia. Algemeen geldt voor het aantal geordende rijtjes van $k$ verschillende objecten uit $n$:

$$
n\times(n-1)\times\cdots\times(n-k+1)=\frac{n!}{(n-k)!}.
$$

Controleer het met $n=5$ en $k=3$: $\frac{5!}{2!}=\frac{120}{2}=60$. Het getal $2!$ in de noemer "snijdt" de factoren $2\times1$ weg die niet meedoen.

{{ exercises: 23-031, 23-032 }}

:::example Kans op een bepaalde volgorde
Je zet vier boeken in willekeurige volgorde op een plank. Wat is de kans dat ze alfabetisch staan?

Er zijn $4!=24$ evenveel voorkomende volgorden. Maar één daarvan is alfabetisch. Dus $P=\frac1{24}$.

Dit is de klassieke aanpak in drie woorden: *tel het totaal, tel het gunstige, deel.* Hier was het gunstige zelfs maar één geval.
:::

{{ exercises: 23-033 }}

## Combinaties: volgorde telt niet

Soms interesseert de volgorde je niet. Een commissie van twee personen uit vijf: de commissie "Anna en Bram" is dezelfde als "Bram en Anna". Als je wel op volgorde telt, zijn er $5\times4=20$ geordende paren. Elke commissie komt daarin precies $2!=2$ keer voor (beide volgordes). Deel je het aantal geordende paren door 2, dan krijg je het aantal commissies: $\frac{20}{2}=10$.

Dat idee werkt algemeen. Het aantal manieren om **een groep van $k$ objecten te kiezen uit $n$** waarbij volgorde niet telt, heet het aantal **combinaties** en wordt gelezen als "$n$ boven $k$":

$$
\binom{n}{k}=\frac{n!}{k!\,(n-k)!}=\frac{n\times(n-1)\times\cdots\times(n-k+1)}{k!}.
$$

De teller telt de geordende keuzes, de noemer $k!$ deelt de $k!$ volgordes weg die dezelfde groep opleveren. Bijvoorbeeld:

$$
\binom{6}{3}=\frac{6\times5\times4}{3\times2\times1}=\frac{120}{6}=20.
$$

Twee eigenschappen helpen je bij het rekenen. Ten eerste de **symmetrie**: $\binom{n}{k}=\binom{n}{n-k}$, want een groep van $k$ kiezen is hetzelfde als de $n-k$ andere afwijzen. Zo is $\binom{10}{8}=\binom{10}{2}=45$, veel makkelijker. Ten tweede: $\binom{n}{0}=\binom{n}{n}=1$ en $\binom{n}{1}=n$.

:::warning Wel of niet op volgorde tellen?
Dit is de meest gemaakte fout bij tellen. Vraag bij elke opgave: *maakt het uit als ik twee gekozen objecten verwissel?* Een podium (goud, zilver, brons) is op volgorde: gebruik $\frac{n!}{(n-k)!}$. Een commissie, een lottotrekking of een hand kaarten is niet op volgorde: gebruik $\binom{n}{k}$. De twee antwoorden verschillen precies een factor $k!$.
:::

:::example Een commissie kiezen
Uit 6 personen kies je een commissie van 3. Hoeveel verschillende commissies zijn er, en wat is de kans dat twee specifieke personen, Anna en Bram, allebei in de commissie zitten?

**Aantal commissies.** $\binom63=20$.

**Gunstig.** Anna en Bram zitten er al in; er moet nog één van de resterende 4 personen bij: $\binom41=4$ commissies.

**Kans.** $\frac{4}{20}=\frac15$.
:::

{{ exercises: 23-034, 23-035 }}

## Kansen via combinaties: de loterij

Combinaties maken ook kansen uit het echte leven rekenbaar. In een loterij kies je 3 getallen uit 10; de trekking kiest eveneens 3 getallen uit 10. Je wint de hoofdprijs als je precies de getrokken combinatie hebt. Er zijn $\binom{10}{3}=120$ mogelijke trekkingen, allemaal even waarschijnlijk, en één daarvan is de jouwe. De kans is $\frac1{120}$.

Bij de echte Lotto-achtige spellen is dat aantal vele malen groter. Kies je 6 getallen uit 45, dan zijn er $\binom{45}{6}=8\,145\,060$ trekkingen: een kans van minder dan een op acht miljoen. Dat getal laat zich nooit met de hand uitschrijven; met de formule is het in een paar seconden gevonden.

{{ exercises: 23-050 }}

## De driehoek van Pascal

De getallen $\binom nk$ zijn niet willekeurig gerangschikt. Zet ze in rijen onder elkaar, rij $n$ van $\binom n0$ tot $\binom nn$, dan ontstaat een driehoek met een verrassend regelmatig patroon: elk getal is de som van de twee getallen er schuin boven.

![Driehoek van Pascal, rij 0 tot en met 6; het getal 15 is 6 boven 2](/images/diagrams/m23-pascal.svg "De driehoek van Pascal: elk getal is de som van de twee getallen erboven; 15 = 5 + 10 is 6 boven 2.")

Waarom werkt dat? Neem een groep van $n$ personen waarvan Anna er één is, en kies een commissie van $k$ personen. Er zijn twee soorten commissies: die waarin Anna zit, en die waarin zij niet zit. Zit zij erin, dan kies je nog $k-1$ personen uit de overige $n-1$: $\binom{n-1}{k-1}$ mogelijkheden. Zit zij er niet in, dan kies je $k$ personen uit de overige $n-1$: $\binom{n-1}{k}$ mogelijkheden. Samen:

$$
\binom nk=\binom{n-1}{k-1}+\binom{n-1}{k}.
$$

Dat is precies de regel van de driehoek. Daarmee heb je een tweede manier om combinaties uit te rekenen zonder faculteiten: schrijf de rijen op totdat je bij rij $n$ bent. Rij 6 is $1,\ 6,\ 15,\ 20,\ 15,\ 6,\ 1$, dus $\binom62=15$ en $\binom63=20$.

Nog een eigenschap die je meteen kunt gebruiken: de som van de getallen in rij $n$ is $2^n$. Dat klopt omdat elke deelverzameling van een $n$-tal objecten een bepaalde grootte $k$ heeft (van 0 tot $n$), en er in totaal $2^n$ deelverzamelingen zijn: voor elk object kies je "erin" of "erbuiten". Rij 6 telt op tot $1+6+15+20+15+6+1=64=2^6$.

Blaise Pascal, naar wie de driehoek genoemd wordt, schreef hier in 1654 een heel traktaat over. De driehoek was in feite al eeuwen eerder bekend in China, India en Perzië; de naam is Europees, geen eerste ontdekking. In les 6 zie je hoe Pascal de driehoek gebruikte bij het verdelen van een inzet.

{{ exercises: 23-036 }}

## Kansen met aantallen: de binomiale gedachte

Combinaties geven een mooie manier om de kans op "precies $k$ keer kop" in $n$ worpen te berekenen. Elke reeks van $n$ eerlijke muntworpen heeft kans $\left(\frac12\right)^n$. Het aantal reeksen met precies $k$ keer kop is $\binom nk$: je kiest welke $k$ van de $n$ worpen kop zijn. Dus

$$
P(\text{precies } k \text{ keer kop})=\binom nk\left(\frac12\right)^n.
$$

:::example Precies twee keer kop in vier worpen
Er zijn $2^4=16$ even waarschijnlijke reeksen. De reeksen met precies twee keer kop worden bepaald door te kiezen welke twee van de vier worpen kop zijn: $\binom42=6$ reeksen (KKMM, KMKM, KMMK, MKKM, MKMK, MMKK).

$$
P=\frac{6}{16}=\frac38.
$$

Let op dat de kans op precies twee keer kop niet $\frac12$ is, ook al is "gemiddeld de helft kop". De uitkomst die het meest voorkomt heeft slechts kans $\frac38$.
:::

Bij drie worpen vond je eerder $\frac38$ voor precies twee keer kop: $\binom32\left(\frac12\right)^3=\frac38$. Vergelijk dit met rij 3 van de driehoek, $1,3,3,1$: de getallen zijn de aantallen reeksen met 0, 1, 2 en 3 keer kop. Rij 4 ($1,4,6,4,1$) levert de aantallen voor vier worpen. Kansrekening, tellen en de driehoek van Pascal vormen één verhaal.

{{ exercises: 23-037 }}
